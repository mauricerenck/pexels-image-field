<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

use DateTime;

/**
 * Alertes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Alertes {

    /**
     * Cloturee.
     *
     * @var bool|null
     */
    private $cloturee;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

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
     * Get the cloturee.
     *
     * @return bool|null Returns the cloturee.
     */
    public function getCloturee(): ?bool {
        return $this->cloturee;
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the commentaire.
     *
     * @return string|null Returns the commentaire.
     */
    public function getCommentaire(): ?string {
        return $this->commentaire;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
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
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the cloturee.
     *
     * @param bool|null $cloturee The cloturee.
     * @return Alertes Returns this Alertes.
     */
    public function setCloturee(?bool $cloturee): Alertes {
        $this->cloturee = $cloturee;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return Alertes Returns this Alertes.
     */
    public function setCodeEtablissement(?int $codeEtablissement): Alertes {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return Alertes Returns this Alertes.
     */
    public function setCommentaire(?string $commentaire): Alertes {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return Alertes Returns this Alertes.
     */
    public function setNumeroEmploye(?string $numeroEmploye): Alertes {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return Alertes Returns this Alertes.
     */
    public function setPeriode(?DateTime $periode): Alertes {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Alertes Returns this Alertes.
     */
    public function setType(?string $type): Alertes {
        $this->type = $type;
        return $this;
    }
}
