<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Helper;

use WBW\Library\Core\Model\Cpu;
use WBW\Library\Core\Model\Memory;

/**
 * Operating System helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Helper
 */
class OSHelper {

    /**
     * Get the CPU.
     *
     * @return Cpu|null Returns the CPU.
     */
    public static function getCpu(): ?Cpu {

        if (true === static::isWindows()) {
            return null;
        }

        exec("top -b -n 1 |grep '%Cpu(s):'", $output);

        preg_match_all("/[\d.]+/", $output[0], $values);

        $cpu = new Cpu();
        $cpu->setUs(floatval(trim($values[0][0])));
        $cpu->setSy(floatval(trim($values[0][1])));
        $cpu->setNi(floatval(trim($values[0][2])));
        $cpu->setId(floatval(trim($values[0][3])));
        $cpu->setWa(floatval(trim($values[0][4])));
        $cpu->setHi(floatval(trim($values[0][5])));
        $cpu->setSi(floatval(trim($values[0][6])));
        $cpu->setSt(floatval(trim($values[0][7])));

        return $cpu;
    }

    /**
     * Get the memory.
     *
     * @param bool $swap Swap ?
     * @return Memory|null Returns the memory.
     */
    public static function getMemory(bool $swap = false): ?Memory {

        if (true === static::isWindows()) {
            return null;
        }

        $row = false === $swap ? 1 : 2;

        exec("free", $output);

        $values = explode(" ", preg_replace("/\ {2,}/", " ", $output[$row]));

        $memory = new Memory();
        $memory->setTotal(intval(trim($values[1])));
        $memory->setUsed(intval(trim($values[2])));
        $memory->setFree(intval(trim($values[3])));
        if (7 === count($values)) {
            $memory->setShared(intval(trim($values[4])));
            $memory->setBuffCache(intval(trim($values[5])));
            $memory->setAvailable(intval(trim($values[6])));
        }

        return $memory;
    }

    /**
     * Determines if the operating system is Linux.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isLinux(): bool {
        return !static::isWindows();
    }

    /**
     * Determines if the operating system is Windows.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isWindows(): bool {
        return "\\" === DIRECTORY_SEPARATOR;
    }
}
