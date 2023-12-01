<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Model;

use WBW\Library\System\Serializer\JsonSerializer;
use WBW\Library\Traits\Strings\StringNameTrait;
use WBW\Library\Traits\Strings\StringTypeTrait;

/**
 * Hard disk.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
class HardDisk implements HardDiskInterface {

    use StringNameTrait;
    use StringTypeTrait;

    /**
     * Available.
     *
     * @var string|null
     */
    protected $available;

    /**
     * File system.
     *
     * @var string|null
     */
    protected $fileSystem;

    /**
     * Mount.
     *
     * @var string|null
     */
    protected $mount;

    /**
     * Use %.
     *
     * @var string|null
     */
    protected $usePercent;

    /**
     * Used.
     *
     * @var string|null
     */
    protected $used;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailable(): ?string {
        return $this->available;
    }

    /**
     * {@inheritDoc}
     */
    public function getFileSystem(): ?string {
        return $this->fileSystem;
    }

    /**
     * {@inheritDoc}
     */
    public function getMountedOn(): ?string {
        return $this->mount;
    }

    /**
     * {@inheritDoc}
     */
    public function getUsePercent(): ?string {
        return $this->usePercent;
    }

    /**
     * {@inheritDoc}
     */
    public function getUsed(): ?string {
        return $this->used;
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeHardDisk($this);
    }

    /**
     * Set the available.
     *
     * @param string|null $available The available.
     * @return HardDiskInterface Returns this hard disk.
     */
    public function setAvailable(?string $available): HardDiskInterface {
        $this->available = $available;
        return $this;
    }

    /**
     * Set the file system.
     *
     * @param string|null $fileSystem The file system.
     * @return HardDiskInterface Returns this hard disk.
     */
    public function setFileSystem(?string $fileSystem): HardDiskInterface {
        $this->fileSystem = $fileSystem;
        return $this;
    }

    /**
     * Set the mounted on.
     *
     * @param string|null $mountedOn The mounted on.
     * @return HardDiskInterface Returns this hard disk.
     */
    public function setMountedOn(?string $mountedOn): HardDiskInterface {
        $this->mount = $mountedOn;
        return $this;
    }

    /**
     * Set the percent.
     *
     * @param string|null $usePercent The percent.
     * @return HardDiskInterface Returns this hard disk.
     */
    public function setUsePercent(?string $usePercent): HardDiskInterface {
        $this->usePercent = $usePercent;
        return $this;
    }

    /**
     * Set the used.
     *
     * @param string|null $used The used.
     * @return HardDiskInterface Returns this hard disk.
     */
    public function setUsed(?string $used): HardDiskInterface {
        $this->used = $used;
        return $this;
    }
}
