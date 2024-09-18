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

use WBW\Library\System\Serializer\JsonSerializer;

/**
 * Current processor usage.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
class Cpu implements CpuInterface {

    /**
     * Time spent servicing hardware interrupts.
     *
     * @var float|null
     */
    protected $hi;

    /**
     * Time spent in the kernel idle handler.
     *
     * @var float|null
     */
    protected $id;

    /**
     * Time running niced user process.
     *
     * @var float|null
     */
    protected $ni;

    /**
     * Time spent servicing software interrupts.
     *
     * @var float|null
     */
    protected $si;

    /**
     * Time stolen from this vm by the hypervisor.
     *
     * @var float|null
     */
    protected $st;

    /**
     * Time running kernel processes.
     *
     * @var float|null
     */
    protected $sy;

    /**
     * Time running un-niced user processes.
     *
     * @var float|null
     */
    protected $us;

    /**
     * Time waiting for I/O completion.
     *
     * @var float|null
     */
    protected $wa;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getHi(): ?float {
        return $this->hi;
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?float {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function getNi(): ?float {
        return $this->ni;
    }

    /**
     * {@inheritDoc}
     */
    public function getSi(): ?float {
        return $this->si;
    }

    /**
     * {@inheritDoc}
     */
    public function getSt(): ?float {
        return $this->st;
    }

    /**
     * {@inheritDoc}
     */
    public function getSy(): ?float {
        return $this->sy;
    }

    /**
     * {@inheritDoc}
     */
    public function getUs(): ?float {
        return $this->us;
    }

    /**
     * {@inheritDoc}
     */
    public function getWa(): ?float {
        return $this->wa;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeCpu($this);
    }

    /**
     * Set the time spent servicing hardware interrupts.
     *
     * @param float|null $hi The time spent servicing hardware interrupts.
     * @return CpuInterface Returns this CPU.
     */
    public function setHi(?float $hi): CpuInterface {
        $this->hi = $hi;
        return $this;
    }

    /**
     * Set the time spent in the kernel idle handler.
     *
     * @param float|null $id The time spent in the kernel idle handler.
     * @return CpuInterface Returns this CPU.
     */
    public function setId(?float $id): CpuInterface {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the time running niced user process.
     *
     * @param float|null $ni The time running niced user process.
     * @return CpuInterface Returns this CPU.
     */
    public function setNi(?float $ni): CpuInterface {
        $this->ni = $ni;
        return $this;
    }

    /**
     * Set the time spent servicing software interrupts.
     *
     * @param float|null $si The time spent servicing software interrupts.
     * @return CpuInterface Returns this CPU.
     */
    public function setSi(?float $si): CpuInterface {
        $this->si = $si;
        return $this;
    }

    /**
     * Set the time stolen from this vm by the hypervisor.
     *
     * @param float|null $st The time stolen from this vm by the hypervisor.
     * @return CpuInterface Returns this CPU.
     */
    public function setSt(?float $st): CpuInterface {
        $this->st = $st;
        return $this;
    }

    /**
     * Set the time running kernel processes.
     *
     * @param float|null $sy The time running kernel processes.
     * @return CpuInterface Returns this CPU.
     */
    public function setSy(?float $sy): CpuInterface {
        $this->sy = $sy;
        return $this;
    }

    /**
     * Set the time running un-niced user processes.
     *
     * @param float|null $us The time running un-niced user processes.
     * @return CpuInterface Returns this CPU.
     */
    public function setUs(?float $us): CpuInterface {
        $this->us = $us;
        return $this;
    }

    /**
     * Set the time waiting for I/O completion.
     *
     * @param float|null $wa The time waiting for I/O completion.
     * @return CpuInterface Returns this CPU.
     */
    public function setWa(?float $wa): CpuInterface {
        $this->wa = $wa;
        return $this;
    }
}
