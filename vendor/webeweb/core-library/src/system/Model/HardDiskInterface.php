<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Model;

use JsonSerializable;

/**
 * Hard disk interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
interface HardDiskInterface extends JsonSerializable {

    /**
     * Get the available.
     *
     * @return string|null Returns the available.
     */
    public function getAvailable(): ?string;

    /**
     * Get the file system.
     *
     * @return string|null Returns the file system.
     */
    public function getFileSystem(): ?string;

    /**
     * Get the mounted on.
     *
     * @return string|null Returns the mounted on.
     */
    public function getMountedOn(): ?string;

    /**
     * Get the name.
     *
     * @return string|null Returns the name.
     */
    public function getName(): ?string;

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string;

    /**
     * Get the use %.
     *
     * @return string|null Returns the use %.
     */
    public function getUsePercent(): ?string;

    /**
     * Get the used.
     *
     * @return string|null Returns the used.
     */
    public function getUsed(): ?string;
}
