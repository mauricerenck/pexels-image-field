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
 * Current processor usage trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\System
 */
trait CpuTrait {

    /**
     * Current processor usage.
     *
     * @var CpuInterface|null
     */
    protected $cpu;

    /**
     * Get the current processor usage.
     *
     * @return CpuInterface|null Returns the current processor usage.
     */
    public function getCpu(): ?CpuInterface {
        return $this->cpu;
    }

    /**
     * Set the current processor usage.
     *
     * @param CpuInterface|null $cpu The current processor usage.
     * @return self Returns this instance.
     */
    protected function setCpu(?CpuInterface $cpu): self {
        $this->cpu = $cpu;
        return $this;
    }
}
