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

namespace WBW\Library\Core\Model;

use JsonSerializable;

/**
 * CPU.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model
 */
class Cpu implements JsonSerializable {

    /**
     * Hardware interrupts.
     *
     * @var float|null
     */
    protected $hi;

    /**
     * Idle.
     *
     * @var float|null
     */
    protected $id;

    /**
     * Nice.
     *
     * @var float|null
     */
    protected $ni;

    /**
     * Software interrupts.
     *
     * @var float|null
     */
    protected $si;

    /**
     * Steal time.
     *
     * @var float|null
     */
    protected $st;

    /**
     * System.
     *
     * @var float|null
     */
    protected $sy;

    /**
     * User space.
     *
     * @var float|null
     */
    protected $us;

    /**
     * Waiting I/O.
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
     * Get the hardware interrupts.
     *
     * @return float|null Returns the hardware interrupts.
     */
    public function getHi(): ?float {
        return $this->hi;
    }

    /**
     * Get the idle.
     *
     * @return float|null Returns the idle.
     */
    public function getId(): ?float {
        return $this->id;
    }

    /**
     * Get the nice.
     *
     * @return float|null Returns the nice.
     */
    public function getNi(): ?float {
        return $this->ni;
    }

    /**
     * Get the software interrupts.
     *
     * @return float|null Returns the software interrupts.
     */
    public function getSi(): ?float {
        return $this->si;
    }

    /**
     * Get the steal time.
     *
     * @return float|null Returns the steal time.
     */
    public function getSt(): ?float {
        return $this->st;
    }

    /**
     * Get the system.
     *
     * @return float|null Returns the system.
     */
    public function getSy(): ?float {
        return $this->sy;
    }

    /**
     * Get the user space.
     *
     * @return float|null Returns the user space.
     */
    public function getUs(): ?float {
        return $this->us;
    }

    /**
     * Get the waiting I/O.
     *
     * @return float|null Returns the waiting I/O.
     */
    public function getWa(): ?float {
        return $this->wa;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        return [
            "us" => $this->getUs(),
            "sy" => $this->getSy(),
            "ni" => $this->getNi(),
            "id" => $this->getId(),
            "wa" => $this->getWa(),
            "hi" => $this->getHi(),
            "si" => $this->getSi(),
            "st" => $this->getSt(),
        ];
    }

    /**
     * Set the hardware interrupts.
     *
     * @param float|null $hi The hardware interrupts.
     * @return Cpu Returns this CPU.
     */
    public function setHi(?float $hi): Cpu {
        $this->hi = $hi;
        return $this;
    }

    /**
     * Set the idle.
     *
     * @param float|null $id The idle.
     * @return Cpu Returns this CPU.
     */
    public function setId(?float $id): Cpu {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the nice.
     *
     * @param float|null $ni The nice.
     * @return Cpu Returns this CPU.
     */
    public function setNi(?float $ni): Cpu {
        $this->ni = $ni;
        return $this;
    }

    /**
     * Set the software interrupts.
     *
     * @param float|null $si The software interrupts.
     * @return Cpu Returns this CPU.
     */
    public function setSi(?float $si): Cpu {
        $this->si = $si;
        return $this;
    }

    /**
     * Set the steal time.
     *
     * @param float|null $st The steal time.
     * @return Cpu Returns this CPU.
     */
    public function setSt(?float $st): Cpu {
        $this->st = $st;
        return $this;
    }

    /**
     * Set the system.
     *
     * @param float|null $sy The system.
     * @return Cpu Returns this CPU.
     */
    public function setSy(?float $sy): Cpu {
        $this->sy = $sy;
        return $this;
    }

    /**
     * Set the user space.
     *
     * @param float|null $us The user space.
     * @return Cpu Returns this CPU.
     */
    public function setUs(?float $us): Cpu {
        $this->us = $us;
        return $this;
    }

    /**
     * Set the waiting I/O.
     *
     * @param float|null $wa The waiting I/O.
     * @return Cpu Returns this CPU.
     */
    public function setWa(?float $wa): Cpu {
        $this->wa = $wa;
        return $this;
    }
}
