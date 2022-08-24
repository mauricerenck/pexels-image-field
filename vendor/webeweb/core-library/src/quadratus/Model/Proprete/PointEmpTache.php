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
 * Point emp tache.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PointEmpTache {

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
     * H rempl mens.
     *
     * @var float|null
     */
    private $hRemplMens;

    /**
     * Mensualisation.
     *
     * @var float|null
     */
    private $mensualisation;

    /**
     * Mt prime1 chantier.
     *
     * @var float|null
     */
    private $mtPrime1Chantier;

    /**
     * Mt prime2 chantier.
     *
     * @var float|null
     */
    private $mtPrime2Chantier;

    /**
     * Mt prime3 chantier.
     *
     * @var float|null
     */
    private $mtPrime3Chantier;

    /**
     * Nb heures1 rs.
     *
     * @var float|null
     */
    private $nbHeures1Rs;

    /**
     * Nb heures1 tp.
     *
     * @var float|null
     */
    private $nbHeures1Tp;

    /**
     * Nb heures2 rs.
     *
     * @var float|null
     */
    private $nbHeures2Rs;

    /**
     * Nb heures2 tp.
     *
     * @var float|null
     */
    private $nbHeures2Tp;

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
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Tx horaire1 rs.
     *
     * @var float|null
     */
    private $txHoraire1Rs;

    /**
     * Tx horaire1 tp.
     *
     * @var float|null
     */
    private $txHoraire1Tp;

    /**
     * Tx horaire2 rs.
     *
     * @var float|null
     */
    private $txHoraire2Rs;

    /**
     * Tx horaire2 tp.
     *
     * @var float|null
     */
    private $txHoraire2Tp;

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
     * Get the h rempl mens.
     *
     * @return float|null Returns the h rempl mens.
     */
    public function getHRemplMens(): ?float {
        return $this->hRemplMens;
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
     * Get the mt prime1 chantier.
     *
     * @return float|null Returns the mt prime1 chantier.
     */
    public function getMtPrime1Chantier(): ?float {
        return $this->mtPrime1Chantier;
    }

    /**
     * Get the mt prime2 chantier.
     *
     * @return float|null Returns the mt prime2 chantier.
     */
    public function getMtPrime2Chantier(): ?float {
        return $this->mtPrime2Chantier;
    }

    /**
     * Get the mt prime3 chantier.
     *
     * @return float|null Returns the mt prime3 chantier.
     */
    public function getMtPrime3Chantier(): ?float {
        return $this->mtPrime3Chantier;
    }

    /**
     * Get the nb heures1 rs.
     *
     * @return float|null Returns the nb heures1 rs.
     */
    public function getNbHeures1Rs(): ?float {
        return $this->nbHeures1Rs;
    }

    /**
     * Get the nb heures1 tp.
     *
     * @return float|null Returns the nb heures1 tp.
     */
    public function getNbHeures1Tp(): ?float {
        return $this->nbHeures1Tp;
    }

    /**
     * Get the nb heures2 rs.
     *
     * @return float|null Returns the nb heures2 rs.
     */
    public function getNbHeures2Rs(): ?float {
        return $this->nbHeures2Rs;
    }

    /**
     * Get the nb heures2 tp.
     *
     * @return float|null Returns the nb heures2 tp.
     */
    public function getNbHeures2Tp(): ?float {
        return $this->nbHeures2Tp;
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
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the tx horaire1 rs.
     *
     * @return float|null Returns the tx horaire1 rs.
     */
    public function getTxHoraire1Rs(): ?float {
        return $this->txHoraire1Rs;
    }

    /**
     * Get the tx horaire1 tp.
     *
     * @return float|null Returns the tx horaire1 tp.
     */
    public function getTxHoraire1Tp(): ?float {
        return $this->txHoraire1Tp;
    }

    /**
     * Get the tx horaire2 rs.
     *
     * @return float|null Returns the tx horaire2 rs.
     */
    public function getTxHoraire2Rs(): ?float {
        return $this->txHoraire2Rs;
    }

    /**
     * Get the tx horaire2 tp.
     *
     * @return float|null Returns the tx horaire2 tp.
     */
    public function getTxHoraire2Tp(): ?float {
        return $this->txHoraire2Tp;
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
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeAffaire(?string $codeAffaire): PointEmpTache {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeChantier(?string $codeChantier): PointEmpTache {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeClient(?string $codeClient): PointEmpTache {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): PointEmpTache {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): PointEmpTache {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeEmploye(?string $codeEmploye): PointEmpTache {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeTache(?string $codeTache): PointEmpTache {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): PointEmpTache {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setEtat(?string $etat): PointEmpTache {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the h rempl mens.
     *
     * @param float|null $hRemplMens The h rempl mens.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setHRemplMens(?float $hRemplMens): PointEmpTache {
        $this->hRemplMens = $hRemplMens;
        return $this;
    }

    /**
     * Set the mensualisation.
     *
     * @param float|null $mensualisation The mensualisation.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setMensualisation(?float $mensualisation): PointEmpTache {
        $this->mensualisation = $mensualisation;
        return $this;
    }

    /**
     * Set the mt prime1 chantier.
     *
     * @param float|null $mtPrime1Chantier The mt prime1 chantier.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setMtPrime1Chantier(?float $mtPrime1Chantier): PointEmpTache {
        $this->mtPrime1Chantier = $mtPrime1Chantier;
        return $this;
    }

    /**
     * Set the mt prime2 chantier.
     *
     * @param float|null $mtPrime2Chantier The mt prime2 chantier.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setMtPrime2Chantier(?float $mtPrime2Chantier): PointEmpTache {
        $this->mtPrime2Chantier = $mtPrime2Chantier;
        return $this;
    }

    /**
     * Set the mt prime3 chantier.
     *
     * @param float|null $mtPrime3Chantier The mt prime3 chantier.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setMtPrime3Chantier(?float $mtPrime3Chantier): PointEmpTache {
        $this->mtPrime3Chantier = $mtPrime3Chantier;
        return $this;
    }

    /**
     * Set the nb heures1 rs.
     *
     * @param float|null $nbHeures1Rs The nb heures1 rs.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setNbHeures1Rs(?float $nbHeures1Rs): PointEmpTache {
        $this->nbHeures1Rs = $nbHeures1Rs;
        return $this;
    }

    /**
     * Set the nb heures1 tp.
     *
     * @param float|null $nbHeures1Tp The nb heures1 tp.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setNbHeures1Tp(?float $nbHeures1Tp): PointEmpTache {
        $this->nbHeures1Tp = $nbHeures1Tp;
        return $this;
    }

    /**
     * Set the nb heures2 rs.
     *
     * @param float|null $nbHeures2Rs The nb heures2 rs.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setNbHeures2Rs(?float $nbHeures2Rs): PointEmpTache {
        $this->nbHeures2Rs = $nbHeures2Rs;
        return $this;
    }

    /**
     * Set the nb heures2 tp.
     *
     * @param float|null $nbHeures2Tp The nb heures2 tp.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setNbHeures2Tp(?float $nbHeures2Tp): PointEmpTache {
        $this->nbHeures2Tp = $nbHeures2Tp;
        return $this;
    }

    /**
     * Set the nb paniers.
     *
     * @param float|null $nbPaniers The nb paniers.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setNbPaniers(?float $nbPaniers): PointEmpTache {
        $this->nbPaniers = $nbPaniers;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setNumBt(?int $numBt): PointEmpTache {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setPeriode(?DateTime $periode): PointEmpTache {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the tx horaire1 rs.
     *
     * @param float|null $txHoraire1Rs The tx horaire1 rs.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setTxHoraire1Rs(?float $txHoraire1Rs): PointEmpTache {
        $this->txHoraire1Rs = $txHoraire1Rs;
        return $this;
    }

    /**
     * Set the tx horaire1 tp.
     *
     * @param float|null $txHoraire1Tp The tx horaire1 tp.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setTxHoraire1Tp(?float $txHoraire1Tp): PointEmpTache {
        $this->txHoraire1Tp = $txHoraire1Tp;
        return $this;
    }

    /**
     * Set the tx horaire2 rs.
     *
     * @param float|null $txHoraire2Rs The tx horaire2 rs.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setTxHoraire2Rs(?float $txHoraire2Rs): PointEmpTache {
        $this->txHoraire2Rs = $txHoraire2Rs;
        return $this;
    }

    /**
     * Set the tx horaire2 tp.
     *
     * @param float|null $txHoraire2Tp The tx horaire2 tp.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setTxHoraire2Tp(?float $txHoraire2Tp): PointEmpTache {
        $this->txHoraire2Tp = $txHoraire2Tp;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): PointEmpTache {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
