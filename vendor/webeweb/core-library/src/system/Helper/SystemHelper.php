<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Helper;

use RuntimeException;
use WBW\Library\System\Model\Cpu;
use WBW\Library\System\Model\CpuInterface;
use WBW\Library\System\Model\HardDisk;
use WBW\Library\System\Model\HardDiskInterface;
use WBW\Library\System\Model\Memory;
use WBW\Library\System\Model\MemoryInterface;
use WBW\Library\System\Model\Network;
use WBW\Library\System\Model\NetworkCard;
use WBW\Library\System\Model\NetworkCardInterface;
use WBW\Library\System\Model\NetworkInterface;
use WBW\Library\System\Model\OperatingSystem;
use WBW\Library\System\Model\OperatingSystemInterface;
use WBW\Library\System\Model\Processor;
use WBW\Library\System\Model\ProcessorInterface;
use WBW\Library\System\Model\PropertyInterface;

/**
 * System helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Helper
 */
class SystemHelper {

    /**
     * Determine if this system is supported.
     *
     * @throws RuntimeException Throws a runtime exception.
     */
    protected static function isSupported(): void {

        if (false === static::isUnix()) {
            throw new RuntimeException("This operating system is unsupported");
        }
    }

    /**
     * Determine if the operating system is Unix.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isUnix(): bool {
        return !static::isWindows();
    }

    /**
     * Determine if the operating system is Windows.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isWindows(): bool {
        return "\\" === DIRECTORY_SEPARATOR;
    }

    /**
     * Retrieve the current processor usage.
     *
     * @return CpuInterface Returns the current processor usage.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveCpu(): CpuInterface {

        static::isSupported();

        $result = shell_exec("top -b -n 1 | grep '%Cpu(s):'");
        preg_match_all("/[0-9]+[.,][0-9]+/", $result, $values);

        $model = new Cpu();
        $model->setUs(floatval(trim($values[0][0])));
        $model->setSy(floatval(trim($values[0][1])));
        $model->setNi(floatval(trim($values[0][2])));
        $model->setId(floatval(trim($values[0][3])));
        $model->setWa(floatval(trim($values[0][4])));
        $model->setHi(floatval(trim($values[0][5])));
        $model->setSi(floatval(trim($values[0][6])));
        $model->setSt(floatval(trim($values[0][7])));

        return $model;
    }

    /**
     * Retrieve the date.
     *
     * @return string Returns the date.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveDate(): string {

        static::isSupported();

        return shell_exec("date");
    }

    /**
     * Retrieve the hard disks.
     *
     * @return HardDiskInterface[] Returns the hard disks.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveHardDisks(): array {

        static::isSupported();

        $models = [];

        $ignored = ["", "Type", "tmpfs", "devtmpfs"];

        $result = shell_exec("df -T");
        $rows   = preg_split("/[\r\n]+/", $result);

        foreach ($rows as $current) {

            $columns = preg_split("/\s+/", trim($current));

            if (false === isset($columns[1]) || true === in_array($columns[1], $ignored) || 7 < count($columns)) {
                continue;
            }

            $model = new HardDisk();
            $model->setName(trim($columns[0]));
            $model->setFileSystem(trim($columns[0]));
            $model->setType(trim($columns[1]));
            $model->setUsed(trim($columns[3]));
            $model->setAvailable(trim($columns[4]));
            $model->setUsePercent(trim($columns[5]));
            $model->setMountedOn(trim($columns[6]));

            $models[] = $model;
        }

        return $models;
    }

    /**
     * Retrieve the hostname.
     *
     * @return string Returns the hostname.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveHostname(): string {

        static::isSupported();

        return shell_exec("hostname");
    }

    /**
     * Retrieve the memory.
     *
     * @return MemoryInterface Returns the memory.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveMemory(): MemoryInterface {

        static::isSupported();

        $values = [];

        $result = shell_exec("cat /proc/meminfo");
        $rows   = explode(PHP_EOL, $result);

        foreach ($rows as $current) {

            if ("" === $current) {
                continue;
            }

            $columns = explode(":", $current);

            $key   = $columns[0];
            $value = str_replace("kB", "", trim($columns[1]));

            $values[$key] = intval($value);
        }

        return new Memory($values);
    }

    /**
     * Retrieve the network.
     *
     * @return NetworkInterface Returns the network.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveNetwork(): NetworkInterface {

        static::isSupported();

        $dns = shell_exec("cat /etc/resolv.conf | grep -i '^nameserver' | head -n1 |cut -d ' ' -f2");
        $gw  = shell_exec("ip route | awk '/default/ { print $3 }'");

        $model = new Network();
        $model->setHostname(gethostname());
        $model->setGateway(trim($gw));
        $model->setDns(trim($dns));

        return $model;
    }

    /**
     * Retrieve a network card.
     *
     * @param string $name The name.
     * @return NetworkCardInterface Returns the network card.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveNetworkCard(string $name): NetworkCardInterface {

        static::isSupported();

        $ipv4 = shell_exec("ip addr show dev $name | grep 'inet ' | cut -d ' ' -f 6 | cut -f 1 -d '/'");
        $ipv6 = shell_exec("ip -o -6 addr show $name | sed -e 's/^.*inet6 \([^ ]\+\).*/\1/'");
        $mac  = shell_exec("ip addr show dev $name | grep 'link/ether ' | cut -d ' ' -f 6 | cut -f 1 -d '/'");

        $duplex = null;
        $speed  = "unknown";
        $status = "up";

        if ("lo" !== $name) {

            $duplex = shell_exec("cat /sys/class/net/$name/duplex 2> /dev/null");
            $speed  = shell_exec("cat /sys/class/net/$name/speed 2> /dev/null");
            $status = shell_exec("cat /sys/class/net/$name/operstate");
        }

        $model = new NetworkCard();
        $model->setName($name);
        $model->setDuplex(trim($duplex));
        $model->setIpv4(trim($ipv4));
        $model->setIpv6(trim($ipv6));
        $model->setMac(trim($mac));
        $model->setSpeed(trim($speed));
        $model->setStatus(trim($status));

        return $model;
    }

    /**
     * Retrieve the network cards.
     *
     * @return NetworkCardInterface[] Returns the network cards.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveNetworkCards(): array {

        static::isSupported();

        $models = [];

        $result = glob("/sys/class/net/*");

        foreach ($result as $current) {

            if (true === is_dir($current)) {
                $models[] = static::retrieveNetworkCard(basename($current));
            }
        }

        return $models;
    }

    /**
     * Retrieve the operating system.
     *
     * @return OperatingSystemInterface Returns the operating system.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveOperatingSystem(): OperatingSystemInterface {

        static::isSupported();

        $codename    = shell_exec("lsb_release -c -s");
        $description = shell_exec("lsb_release -d -s");
        $id          = shell_exec("lsb_release -i -s");
        $release     = shell_exec("lsb_release -r -s");

        $model = new OperatingSystem();
        $model->setCodename(trim($codename));
        $model->setDescription(trim($description));
        $model->setId(trim($id));
        $model->setRelease(trim($release));

        return $model;
    }

    /**
     * Retrieve the processors.
     *
     * @return ProcessorInterface[] Returns the processors.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveProcessors(): array {

        static::isSupported();

        $models = [];

        $result = shell_exec("cat /proc/cpuinfo");

        $cores = explode(PHP_EOL . PHP_EOL, $result);

        foreach ($cores as $core) {

            if ("" === $core) {
                continue;
            }

            $values = [];

            $rows = explode(PHP_EOL, $core);

            foreach ($rows as $current) {

                if ("" === $current) {
                    continue;
                }

                $columns = explode(":", $current);

                $values[trim($columns[0])] = trim($columns[1]);
            }

            $models[] = new Processor($values);
        }

        return $models;
    }

    /**
     * Retrieve the properties.
     *
     * @return string[] Returns the properties.
     */
    public static function retrieveProperties(): array {

        $user = posix_getpwuid(posix_geteuid());

        return [
            PropertyInterface::FILE_SEPARATOR => DIRECTORY_SEPARATOR,
            PropertyInterface::PHP_CLASS_PATH => get_include_path(),
            PropertyInterface::PHP_HOME       => dirname(PHP_BINARY),
            PropertyInterface::PHP_VENDOR     => null,
            PropertyInterface::PHP_VENDOR_URL => null,
            PropertyInterface::PHP_VERSION    => phpversion(),
            PropertyInterface::LINE_SEPARATOR => PHP_EOL,
            PropertyInterface::OS_ARCH        => php_uname("m"),
            PropertyInterface::OS_NAME        => php_uname("s"),
            PropertyInterface::OS_VERSION     => php_uname("v"),
            PropertyInterface::PATH_SEPARATOR => true === static::isUnix() ? ":" : ";",
            PropertyInterface::USER_DIR       => getcwd(),
            PropertyInterface::USER_HOME      => $user["dir"],
            PropertyInterface::USER_NAME      => $user["name"],
        ];
    }

    /**
     * Retrieve the uptime.
     *
     * @return string Returns the uptime.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveUptime(): string {

        static::isSupported();

        return shell_exec("uptime -p");
    }
}
