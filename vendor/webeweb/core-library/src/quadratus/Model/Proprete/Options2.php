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
 * Options2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Options2 {

    /**
     * Booleen.
     *
     * @var bool|null
     */
    private $booleen;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

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
     * Type.
     *
     * @var string|null
     */
    private $type;

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
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
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
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the booleen.
     *
     * @param bool|null $booleen The booleen.
     * @return Options2 Returns this Options2.
     */
    public function setBooleen(?bool $booleen): Options2 {
        $this->booleen = $booleen;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Options2 Returns this Options2.
     */
    public function setCode(?string $code): Options2 {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the date heure.
     *
     * @param DateTime|null $dateHeure The date heure.
     * @return Options2 Returns this Options2.
     */
    public function setDateHeure(?DateTime $dateHeure): Options2 {
        $this->dateHeure = $dateHeure;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string|null $descriptif The descriptif.
     * @return Options2 Returns this Options2.
     */
    public function setDescriptif(?string $descriptif): Options2 {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the numerique.
     *
     * @param float|null $numerique The numerique.
     * @return Options2 Returns this Options2.
     */
    public function setNumerique(?float $numerique): Options2 {
        $this->numerique = $numerique;
        return $this;
    }

    /**
     * Set the string.
     *
     * @param string|null $string The string.
     * @return Options2 Returns this Options2.
     */
    public function setString(?string $string): Options2 {
        $this->string = $string;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Options2 Returns this Options2.
     */
    public function setType(?string $type): Options2 {
        $this->type = $type;
        return $this;
    }
}
