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

/**
 * Hard disk trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
trait HardDiskTrait {

    /**
     * Hard disk.
     *
     * @var HardDiskInterface|null
     */
    protected $hardDisk;

    /**
     * Get the hard disk.
     *
     * @return HardDiskInterface|null Returns the hard disk.
     */
    public function getHardDisk(): ?HardDiskInterface {
        return $this->hardDisk;
    }

    /**
     * Set the hard disk.
     *
     * @param HardDiskInterface|null $hardDisk The hard disk.
     * @return self Returns this instance.
     */
    protected function setHardDisk(?HardDiskInterface $hardDisk): self {
        $this->hardDisk = $hardDisk;
        return $this;
    }
}
