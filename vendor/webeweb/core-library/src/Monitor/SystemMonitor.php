<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Monitor;

use RuntimeException;
use WBW\Library\Common\Helper\ArrayHelper;
use WBW\Library\Common\Model\System\CpuInterface;
use WBW\Library\Common\Model\System\HardDiskInterface;
use WBW\Library\Common\Model\System\MemoryInterface;
use WBW\Library\Common\Model\System\NetworkCardInterface;
use WBW\Library\Common\Model\System\NetworkInterface;
use WBW\Library\Common\Model\System\OperatingSystemInterface;
use WBW\Library\Common\Model\System\ProcessorInterface;
use WBW\Library\Common\Utility\SystemUtility;

/**
 * System monitor.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Monitor
 */
class SystemMonitor {

    /**
     * Get the current processor usage.
     *
     * @return CpuInterface Returns the current processor usage.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getCpu(): CpuInterface {
        return SystemUtility::retrieveCpu();
    }

    /**
     * Get the date.
     *
     * @return string Returns the date.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getDate(): string {
        return SystemUtility::retrieveDate();
    }

    /**
     * Get the hard disks.
     *
     * @return HardDiskInterface[] Returns the hard disks.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getHardDisks(): array {
        return SystemUtility::retrieveHardDisks();
    }

    /**
     * Get the hostname.
     *
     * @return string Returns the hostname.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getHostname(): string {
        return SystemUtility::retrieveHostname();
    }

    /**
     * Get the memory.
     *
     * @return MemoryInterface Returns the memory.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getMemory(): MemoryInterface {
        return SystemUtility::retrieveMemory();
    }

    /**
     * Get the network.
     *
     * @return NetworkInterface Returns the network.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getNetwork(): NetworkInterface {
        return SystemUtility::retrieveNetwork();
    }

    /**
     * Get the network cards.
     *
     * @return NetworkCardInterface[] Returns the network cards.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getNetworkCards(): array {
        return SystemUtility::retrieveNetworkCards();
    }

    /**
     * Get the operating system.
     *
     * @return OperatingSystemInterface Returns the operating system.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getOperatingSystem(): OperatingSystemInterface {
        return SystemUtility::retrieveOperatingSystem();
    }

    /**
     * Get the processors.
     *
     * @return ProcessorInterface[] Returns the processors.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getProcessors(): array {
        return SystemUtility::retrieveProcessors();
    }

    /**
     * Get the properties.
     *
     * @return string[] Returns the properties.
     */
    public static function getProperties(): array {
        return SystemUtility::retrieveProperties();
    }

    /**
     * Get a property.
     *
     * @param string $name The name.
     * @return string|null Returns the property.
     */
    public static function getProperty(string $name): ?string {

        $properties = SystemUtility::retrieveProperties();

        return ArrayHelper::get($properties, $name);
    }

    /**
     * Get the uptime.
     *
     * @return string Returns the uptime.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function getUptime(): string {
        return SystemUtility::retrieveUptime();
    }
}
