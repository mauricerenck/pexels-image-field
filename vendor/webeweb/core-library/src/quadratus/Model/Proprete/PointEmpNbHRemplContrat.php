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
 * Point emp nb h rempl contrat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PointEmpNbHRemplContrat {

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
     * Code collabo valid.
     *
     * @var string|null
     */
    private $codeCollaboValid;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code remplacant.
     *
     * @var string|null
     */
    private $codeRemplacant;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
     */
    private $dateValidationSynchro;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Mensualisation.
     *
     * @var float|null
     */
    private $mensualisation;

    /**
     * Nb heures.
     *
     * @var float|null
     */
    private $nbHeures;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Uniq id synchro.
     *
     * @var string|null
     */
    private $uniqIdSynchro;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code collabo valid.
     *
     * @return string|null Returns the code collabo valid.
     */
    public function getCodeCollaboValid(): ?string {
        return $this->codeCollaboValid;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
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
     * Get the code remplacant.
     *
     * @return string|null Returns the code remplacant.
     */
    public function getCodeRemplacant(): ?string {
        return $this->codeRemplacant;
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
     * Get the date validation synchro.
     *
     * @return DateTime|null Returns the date validation synchro.
     */
    public function getDateValidationSynchro(): ?DateTime {
        return $this->dateValidationSynchro;
    }

    /**
     * Get the etat.
     *
     * @return string|null Returns the etat.
     */
    public function getEtat(): ?string {
        return $this->etat;
    }

    /**
     * Get the mensualisation.
     *
     * @return float|null Returns the mensualisation.
     */
    public function getMensualisation(): ?float {
        return $this->mensualisation;
    }

    /**
     * Get the nb heures.
     *
     * @return float|null Returns the nb heures.
     */
    public function getNbHeures(): ?float {
        return $this->nbHeures;
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
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the uniq id synchro.
     *
     * @return string|null Returns the uniq id synchro.
     */
    public function getUniqIdSynchro(): ?string {
        return $this->uniqIdSynchro;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setCodeAffaire(?string $codeAffaire): PointEmpNbHRemplContrat {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setCodeChantier(?string $codeChantier): PointEmpNbHRemplContrat {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setCodeClient(?string $codeClient): PointEmpNbHRemplContrat {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): PointEmpNbHRemplContrat {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): PointEmpNbHRemplContrat {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setCodeEmploye(?string $codeEmploye): PointEmpNbHRemplContrat {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code remplacant.
     *
     * @param string|null $codeRemplacant The code remplacant.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setCodeRemplacant(?string $codeRemplacant): PointEmpNbHRemplContrat {
        $this->codeRemplacant = $codeRemplacant;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setCodeTache(?string $codeTache): PointEmpNbHRemplContrat {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): PointEmpNbHRemplContrat {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setEtat(?string $etat): PointEmpNbHRemplContrat {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the mensualisation.
     *
     * @param float|null $mensualisation The mensualisation.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setMensualisation(?float $mensualisation): PointEmpNbHRemplContrat {
        $this->mensualisation = $mensualisation;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float|null $nbHeures The nb heures.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setNbHeures(?float $nbHeures): PointEmpNbHRemplContrat {
        $this->nbHeures = $nbHeures;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setNumBt(?int $numBt): PointEmpNbHRemplContrat {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setPeriode(?DateTime $periode): PointEmpNbHRemplContrat {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return PointEmpNbHRemplContrat Returns this Point emp nb h rempl contrat.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): PointEmpNbHRemplContrat {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
