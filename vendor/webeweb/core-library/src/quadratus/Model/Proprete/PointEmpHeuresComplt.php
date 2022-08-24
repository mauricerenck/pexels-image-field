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
 * Point emp heures complt.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PointEmpHeuresComplt {

    /**
     * A facturer.
     *
     * @var bool|null
     */
    private $aFacturer;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Heure compl.
     *
     * @var DateTime|null
     */
    private $heureCompl;

    /**
     * Heure compl nuit.
     *
     * @var DateTime|null
     */
    private $heureComplNuit;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Type heure.
     *
     * @var string|null
     */
    private $typeHeure;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a facturer.
     *
     * @return bool|null Returns the a facturer.
     */
    public function getAFacturer(): ?bool {
        return $this->aFacturer;
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Get the heure compl.
     *
     * @return DateTime|null Returns the heure compl.
     */
    public function getHeureCompl(): ?DateTime {
        return $this->heureCompl;
    }

    /**
     * Get the heure compl nuit.
     *
     * @return DateTime|null Returns the heure compl nuit.
     */
    public function getHeureComplNuit(): ?DateTime {
        return $this->heureComplNuit;
    }

    /**
     * Get the num bt.
     *
     * @return int|null Returns the num bt.
     */
    public function getNumBt(): ?int {
        return $this->numBt;
    }

    /**
     * Get the type heure.
     *
     * @return string|null Returns the type heure.
     */
    public function getTypeHeure(): ?string {
        return $this->typeHeure;
    }

    /**
     * Set the a facturer.
     *
     * @param bool|null $aFacturer The a facturer.
     * @return PointEmpHeuresComplt Returns this Point emp heures complt.
     */
    public function setAFacturer(?bool $aFacturer): PointEmpHeuresComplt {
        $this->aFacturer = $aFacturer;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return PointEmpHeuresComplt Returns this Point emp heures complt.
     */
    public function setCodeAffaire(?string $codeAffaire): PointEmpHeuresComplt {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return PointEmpHeuresComplt Returns this Point emp heures complt.
     */
    public function setCodeChantier(?string $codeChantier): PointEmpHeuresComplt {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return PointEmpHeuresComplt Returns this Point emp heures complt.
     */
    public function setCodeClient(?string $codeClient): PointEmpHeuresComplt {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return PointEmpHeuresComplt Returns this Point emp heures complt.
     */
    public function setCodeEmploye(?string $codeEmploye): PointEmpHeuresComplt {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return PointEmpHeuresComplt Returns this Point emp heures complt.
     */
    public function setCodeTache(?string $codeTache): PointEmpHeuresComplt {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return PointEmpHeuresComplt Returns this Point emp heures complt.
     */
    public function setDate(?DateTime $date): PointEmpHeuresComplt {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the heure compl.
     *
     * @param DateTime|null $heureCompl The heure compl.
     * @return PointEmpHeuresComplt Returns this Point emp heures complt.
     */
    public function setHeureCompl(?DateTime $heureCompl): PointEmpHeuresComplt {
        $this->heureCompl = $heureCompl;
        return $this;
    }

    /**
     * Set the heure compl nuit.
     *
     * @param DateTime|null $heureComplNuit The heure compl nuit.
     * @return PointEmpHeuresComplt Returns this Point emp heures complt.
     */
    public function setHeureComplNuit(?DateTime $heureComplNuit): PointEmpHeuresComplt {
        $this->heureComplNuit = $heureComplNuit;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return PointEmpHeuresComplt Returns this Point emp heures complt.
     */
    public function setNumBt(?int $numBt): PointEmpHeuresComplt {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param string|null $typeHeure The type heure.
     * @return PointEmpHeuresComplt Returns this Point emp heures complt.
     */
    public function setTypeHeure(?string $typeHeure): PointEmpHeuresComplt {
        $this->typeHeure = $typeHeure;
        return $this;
    }
}
