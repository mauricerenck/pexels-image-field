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

namespace WBW\Library\Common\Model\System;

/**
 * Operating system trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\System
 */
trait OperatingSystemTrait {

    /**
     * Operating system.
     *
     * @var OperatingSystemInterface|null
     */
    protected $operatingSystem;

    /**
     * Get the operating system.
     *
     * @return OperatingSystemInterface|null Returns the operating system.
     */
    public function getOperatingSystem(): ?OperatingSystemInterface {
        return $this->operatingSystem;
    }

    /**
     * Set the operating system.
     *
     * @param OperatingSystemInterface|null $operatingSystem The operating system.
     * @return self Returns this instance.
     */
    protected function setOperatingSystem(?OperatingSystemInterface $operatingSystem): self {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }
}
