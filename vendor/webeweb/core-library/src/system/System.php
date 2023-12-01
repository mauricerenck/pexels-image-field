<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System;

use RuntimeException;
use WBW\Library\System\Helper\SystemHelper;
use WBW\Library\System\Model\CpuInterface;
use WBW\Library\System\Model\HardDiskInterface;
use WBW\Library\System\Model\MemoryInterface;
use WBW\Library\System\Model\NetworkCardInterface;
use WBW\Library\System\Model\NetworkInterface;
use WBW\Library\System\Model\OperatingSystemInterface;
use WBW\Library\System\Model\ProcessorInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * System.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System
 */
class System {

    /**
     * Get the current processor usage.
     *
     * @return CpuInterface Returns the current processor usage.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getCpu(): CpuInterface {
        return SystemHelper::retrieveCpu();
    }

    /**
     * Get the date.
     *
     * @return string Returns the date.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getDate(): string {
        return SystemHelper::retrieveDate();
    }

    /**
     * Get the hard disks.
     *
     * @return HardDiskInterface[] Returns the hard disks.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getHardDisks(): array {
        return SystemHelper::retrieveHardDisks();
    }

    /**
     * Get the hostname.
     *
     * @return string Returns the hostname.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getHostname(): string {
        return SystemHelper::retrieveHostname();
    }

    /**
     * Get the memory.
     *
     * @return MemoryInterface Returns the memory.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getMemory(): MemoryInterface {
        return SystemHelper::retrieveMemory();
    }

    /**
     * Get the network.
     *
     * @return NetworkInterface Returns the network.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getNetwork(): NetworkInterface {
        return SystemHelper::retrieveNetwork();
    }

    /**
     * Get the network cards.
     *
     * @return NetworkCardInterface[] Returns the network cards.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getNetworkCards(): array {
        return SystemHelper::retrieveNetworkCards();
    }

    /**
     * Get the operating system.
     *
     * @return OperatingSystemInterface Returns the operating system.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getOperatingSystem(): OperatingSystemInterface {
        return SystemHelper::retrieveOperatingSystem();
    }

    /**
     * Get the processors.
     *
     * @return ProcessorInterface[] Returns the processors.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getProcessors(): array {
        return SystemHelper::retrieveProcessors();
    }

    /**
     * Get the properties.
     *
     * @return string[] Returns the properties.
     */
    public static function getProperties(): array {
        return SystemHelper::retrieveProperties();
    }

    /**
     * Get a property.
     *
     * @param string $name The name.
     * @return string|null Returns the property.
     */
    public static function getProperty(string $name): ?string {

        $properties = SystemHelper::retrieveProperties();

        return ArrayHelper::get($properties, $name);
    }

    /**
     * Get the uptime.
     *
     * @return string Returns the uptime.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getUptime(): string {
        return SystemHelper::retrieveUptime();
    }

    /**
     * Determine if the operating system is Unix.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isUnix(): bool {
        return SystemHelper::isUnix();
    }

    /**
     * Determine if the operating system is Windows.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isWindows(): bool {
        return SystemHelper::isWindows();
    }
}
