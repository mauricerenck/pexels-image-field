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
 * Mensualisation tache.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class MensualisationTache {

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
     * Histo mens saisi.
     *
     * @var bool|null
     */
    private $histoMensSaisi;

    /**
     * Mensualisation calculee.
     *
     * @var float|null
     */
    private $mensualisationCalculee;

    /**
     * Mensualisation saisie.
     *
     * @var float|null
     */
    private $mensualisationSaisie;

    /**
     * Mt prime.
     *
     * @var float|null
     */
    private $mtPrime;

    /**
     * Nb paniers.
     *
     * @var float|null
     */
    private $nbPaniers;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Periode debut validite.
     *
     * @var DateTime|null
     */
    private $periodeDebutValidite;

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
     * Get the histo mens saisi.
     *
     * @return bool|null Returns the histo mens saisi.
     */
    public function getHistoMensSaisi(): ?bool {
        return $this->histoMensSaisi;
    }

    /**
     * Get the mensualisation calculee.
     *
     * @return float|null Returns the mensualisation calculee.
     */
    public function getMensualisationCalculee(): ?float {
        return $this->mensualisationCalculee;
    }

    /**
     * Get the mensualisation saisie.
     *
     * @return float|null Returns the mensualisation saisie.
     */
    public function getMensualisationSaisie(): ?float {
        return $this->mensualisationSaisie;
    }

    /**
     * Get the mt prime.
     *
     * @return float|null Returns the mt prime.
     */
    public function getMtPrime(): ?float {
        return $this->mtPrime;
    }

    /**
     * Get the nb paniers.
     *
     * @return float|null Returns the nb paniers.
     */
    public function getNbPaniers(): ?float {
        return $this->nbPaniers;
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
     * Get the periode debut validite.
     *
     * @return DateTime|null Returns the periode debut validite.
     */
    public function getPeriodeDebutValidite(): ?DateTime {
        return $this->periodeDebutValidite;
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
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setCodeAffaire(?string $codeAffaire): MensualisationTache {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setCodeChantier(?string $codeChantier): MensualisationTache {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setCodeClient(?string $codeClient): MensualisationTache {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): MensualisationTache {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): MensualisationTache {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setCodeEmploye(?string $codeEmploye): MensualisationTache {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setCodeTache(?string $codeTache): MensualisationTache {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): MensualisationTache {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setEtat(?string $etat): MensualisationTache {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the histo mens saisi.
     *
     * @param bool|null $histoMensSaisi The histo mens saisi.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setHistoMensSaisi(?bool $histoMensSaisi): MensualisationTache {
        $this->histoMensSaisi = $histoMensSaisi;
        return $this;
    }

    /**
     * Set the mensualisation calculee.
     *
     * @param float|null $mensualisationCalculee The mensualisation calculee.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setMensualisationCalculee(?float $mensualisationCalculee): MensualisationTache {
        $this->mensualisationCalculee = $mensualisationCalculee;
        return $this;
    }

    /**
     * Set the mensualisation saisie.
     *
     * @param float|null $mensualisationSaisie The mensualisation saisie.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setMensualisationSaisie(?float $mensualisationSaisie): MensualisationTache {
        $this->mensualisationSaisie = $mensualisationSaisie;
        return $this;
    }

    /**
     * Set the mt prime.
     *
     * @param float|null $mtPrime The mt prime.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setMtPrime(?float $mtPrime): MensualisationTache {
        $this->mtPrime = $mtPrime;
        return $this;
    }

    /**
     * Set the nb paniers.
     *
     * @param float|null $nbPaniers The nb paniers.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setNbPaniers(?float $nbPaniers): MensualisationTache {
        $this->nbPaniers = $nbPaniers;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setNumBt(?int $numBt): MensualisationTache {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the periode debut validite.
     *
     * @param DateTime|null $periodeDebutValidite The periode debut validite.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setPeriodeDebutValidite(?DateTime $periodeDebutValidite): MensualisationTache {
        $this->periodeDebutValidite = $periodeDebutValidite;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return MensualisationTache Returns this Mensualisation tache.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): MensualisationTache {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
