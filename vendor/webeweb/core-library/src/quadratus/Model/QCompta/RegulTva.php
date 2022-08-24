<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Regul tva.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class RegulTva {

    /**
     * Code tva.
     *
     * @var string|null
     */
    private $codeTva;

    /**
     * Ht.
     *
     * @var float|null
     */
    private $ht;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Ligne.
     *
     * @var int|null
     */
    private $ligne;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Ttc.
     *
     * @var float|null
     */
    private $ttc;

    /**
     * Tva.
     *
     * @var float|null
     */
    private $tva;

    /**
     * Type.
     *
     * @var int|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code tva.
     *
     * @return string|null Returns the code tva.
     */
    public function getCodeTva(): ?string {
        return $this->codeTva;
    }

    /**
     * Get the ht.
     *
     * @return float|null Returns the ht.
     */
    public function getHt(): ?float {
        return $this->ht;
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
     * Get the ligne.
     *
     * @return int|null Returns the ligne.
     */
    public function getLigne(): ?int {
        return $this->ligne;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the ttc.
     *
     * @return float|null Returns the ttc.
     */
    public function getTtc(): ?float {
        return $this->ttc;
    }

    /**
     * Get the tva.
     *
     * @return float|null Returns the tva.
     */
    public function getTva(): ?float {
        return $this->tva;
    }

    /**
     * Get the type.
     *
     * @return int|null Returns the type.
     */
    public function getType(): ?int {
        return $this->type;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return RegulTva Returns this Regul tva.
     */
    public function setCodeTva(?string $codeTva): RegulTva {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the ht.
     *
     * @param float|null $ht The ht.
     * @return RegulTva Returns this Regul tva.
     */
    public function setHt(?float $ht): RegulTva {
        $this->ht = $ht;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return RegulTva Returns this Regul tva.
     */
    public function setLibelle(?string $libelle): RegulTva {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the ligne.
     *
     * @param int|null $ligne The ligne.
     * @return RegulTva Returns this Regul tva.
     */
    public function setLigne(?int $ligne): RegulTva {
        $this->ligne = $ligne;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return RegulTva Returns this Regul tva.
     */
    public function setPeriode(?DateTime $periode): RegulTva {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the ttc.
     *
     * @param float|null $ttc The ttc.
     * @return RegulTva Returns this Regul tva.
     */
    public function setTtc(?float $ttc): RegulTva {
        $this->ttc = $ttc;
        return $this;
    }

    /**
     * Set the tva.
     *
     * @param float|null $tva The tva.
     * @return RegulTva Returns this Regul tva.
     */
    public function setTva(?float $tva): RegulTva {
        $this->tva = $tva;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int|null $type The type.
     * @return RegulTva Returns this Regul tva.
     */
    public function setType(?int $type): RegulTva {
        $this->type = $type;
        return $this;
    }
}
