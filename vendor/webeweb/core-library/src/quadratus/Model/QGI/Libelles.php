<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

/**
 * Libelles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Libelles {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Type montant.
     *
     * @var string|null
     */
    private $typeMontant;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
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
     * Get the type montant.
     *
     * @return string|null Returns the type montant.
     */
    public function getTypeMontant(): ?string {
        return $this->typeMontant;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Libelles Returns this Libelles.
     */
    public function setCode(?string $code): Libelles {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Libelles Returns this Libelles.
     */
    public function setLibelle(?string $libelle): Libelles {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return Libelles Returns this Libelles.
     */
    public function setMontant(?float $montant): Libelles {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Libelles Returns this Libelles.
     */
    public function setType(?string $type): Libelles {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the type montant.
     *
     * @param string|null $typeMontant The type montant.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeMontant(?string $typeMontant): Libelles {
        $this->typeMontant = $typeMontant;
        return $this;
    }
}
