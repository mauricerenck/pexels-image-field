<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

use DateTime;

/**
 * Options.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Options {

    /**
     * Booleen.
     *
     * @var bool|null
     */
    private $booleen;

    /**
     * Date heure.
     *
     * @var DateTime|null
     */
    private $dateHeure;

    /**
     * Descriptif.
     *
     * @var string|null
     */
    private $descriptif;

    /**
     * Numerique.
     *
     * @var float|null
     */
    private $numerique;

    /**
     * String.
     *
     * @var string|null
     */
    private $string;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the booleen.
     *
     * @return bool|null Returns the booleen.
     */
    public function getBooleen(): ?bool {
        return $this->booleen;
    }

    /**
     * Get the date heure.
     *
     * @return DateTime|null Returns the date heure.
     */
    public function getDateHeure(): ?DateTime {
        return $this->dateHeure;
    }

    /**
     * Get the descriptif.
     *
     * @return string|null Returns the descriptif.
     */
    public function getDescriptif(): ?string {
        return $this->descriptif;
    }

    /**
     * Get the numerique.
     *
     * @return float|null Returns the numerique.
     */
    public function getNumerique(): ?float {
        return $this->numerique;
    }

    /**
     * Get the string.
     *
     * @return string|null Returns the string.
     */
    public function getString(): ?string {
        return $this->string;
    }

    /**
     * Set the booleen.
     *
     * @param bool|null $booleen The booleen.
     * @return Options Returns this Options.
     */
    public function setBooleen(?bool $booleen): Options {
        $this->booleen = $booleen;
        return $this;
    }

    /**
     * Set the date heure.
     *
     * @param DateTime|null $dateHeure The date heure.
     * @return Options Returns this Options.
     */
    public function setDateHeure(?DateTime $dateHeure): Options {
        $this->dateHeure = $dateHeure;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string|null $descriptif The descriptif.
     * @return Options Returns this Options.
     */
    public function setDescriptif(?string $descriptif): Options {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the numerique.
     *
     * @param float|null $numerique The numerique.
     * @return Options Returns this Options.
     */
    public function setNumerique(?float $numerique): Options {
        $this->numerique = $numerique;
        return $this;
    }

    /**
     * Set the string.
     *
     * @param string|null $string The string.
     * @return Options Returns this Options.
     */
    public function setString(?string $string): Options {
        $this->string = $string;
        return $this;
    }
}
