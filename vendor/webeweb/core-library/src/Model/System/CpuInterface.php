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

use JsonSerializable;

/**
 * Current processor usage interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\System
 */
interface CpuInterface extends JsonSerializable {

    /**
     * Get the time spent servicing hardware interrupts.
     *
     * @return float|null Returns the time spent servicing hardware interrupts.
     */
    public function getHi(): ?float;

    /**
     * Get the time spent in the kernel idle handler.
     *
     * @return float|null Returns the time spent in the kernel idle handler.
     */
    public function getId(): ?float;

    /**
     * Get the time running niced user process.
     *
     * @return float|null Returns the time running niced user process.
     */
    public function getNi(): ?float;

    /**
     * Get the time spent servicing software interrupts.
     *
     * @return float|null Returns the time spent servicing software interrupts.
     */
    public function getSi(): ?float;

    /**
     * Get the time stolen from this vm by the hypervisor.
     *
     * @return float|null Returns the time stolen from this vm by the hypervisor.
     */
    public function getSt(): ?float;

    /**
     * Get the time running kernel processes.
     *
     * @return float|null Returns the time running kernel processes.
     */
    public function getSy(): ?float;

    /**
     * Get the time running un-niced user processes.
     *
     * @return float|null Returns the time running un-niced user processes.
     */
    public function getUs(): ?float;

    /**
     * Get the time waiting for I/O completion.
     *
     * @return float|null Returns the time waiting for I/O completion.
     */
    public function getWa(): ?float;
}
