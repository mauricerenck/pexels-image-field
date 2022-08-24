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

use DateTime;

/**
 * Temps passes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class TempsPasses {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code mission.
     *
     * @var string|null
     */
    private $codeMission;

    /**
     * Code phase.
     *
     * @var string|null
     */
    private $codePhase;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Code vehicule.
     *
     * @var string|null
     */
    private $codeVehicule;

    /**
     * Cout km.
     *
     * @var float|null
     */
    private $coutKm;

    /**
     * Date saisie.
     *
     * @var DateTime|null
     */
    private $dateSaisie;

    /**
     * Date sys saisie.
     *
     * @var DateTime|null
     */
    private $dateSysSaisie;

    /**
     * Etat.
     *
     * @var int|null
     */
    private $etat;

    /**
     * Facturable.
     *
     * @var bool|null
     */
    private $facturable;

    /**
     * G uniq id.
     *
     * @var string|null
     */
    private $gUniqId;

    /**
     * Heure debut.
     *
     * @var DateTime|null
     */
    private $heureDebut;

    /**
     * Heure fin.
     *
     * @var DateTime|null
     */
    private $heureFin;

    /**
     * Id tps.
     *
     * @var int|null
     */
    private $idTps;

    /**
     * Is transf.
     *
     * @var bool|null
     */
    private $isTransf;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Monnaie.
     *
     * @var string|null
     */
    private $monnaie;

    /**
     * Montant crt.
     *
     * @var float|null
     */
    private $montantCrt;

    /**
     * Montant tva.
     *
     * @var float|null
     */
    private $montantTva;

    /**
     * Nb km.
     *
     * @var float|null
     */
    private $nbKm;

    /**
     * Nb uo.
     *
     * @var float|null
     */
    private $nbUo;

    /**
     * Periode edition nd f.
     *
     * @var DateTime|null
     */
    private $periodeEditionNdF;

    /**
     * Pu.
     *
     * @var float|null
     */
    private $pu;

    /**
     * Pv1.
     *
     * @var float|null
     */
    private $pv1;

    /**
     * Pv2.
     *
     * @var float|null
     */
    private $pv2;

    /**
     * Pv3.
     *
     * @var float|null
     */
    private $pv3;

    /**
     * Qte.
     *
     * @var float|null
     */
    private $qte;

    /**
     * Taux remise.
     *
     * @var float|null
     */
    private $tauxRemise;

    /**
     * Taux remise ici.
     *
     * @var bool|null
     */
    private $tauxRemiseIci;

    /**
     * Uniq id facture.
     *
     * @var string|null
     */
    private $uniqIdFacture;

    /**
     * Valide.
     *
     * @var bool|null
     */
    private $valide;

    /**
     * Valide collab.
     *
     * @var string|null
     */
    private $valideCollab;

    /**
     * Valide date.
     *
     * @var DateTime|null
     */
    private $valideDate;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code mission.
     *
     * @return string|null Returns the code mission.
     */
    public function getCodeMission(): ?string {
        return $this->codeMission;
    }

    /**
     * Get the code phase.
     *
     * @return string|null Returns the code phase.
     */
    public function getCodePhase(): ?string {
        return $this->codePhase;
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
     * Get the code vehicule.
     *
     * @return string|null Returns the code vehicule.
     */
    public function getCodeVehicule(): ?string {
        return $this->codeVehicule;
    }

    /**
     * Get the cout km.
     *
     * @return float|null Returns the cout km.
     */
    public function getCoutKm(): ?float {
        return $this->coutKm;
    }

    /**
     * Get the date saisie.
     *
     * @return DateTime|null Returns the date saisie.
     */
    public function getDateSaisie(): ?DateTime {
        return $this->dateSaisie;
    }

    /**
     * Get the date sys saisie.
     *
     * @return DateTime|null Returns the date sys saisie.
     */
    public function getDateSysSaisie(): ?DateTime {
        return $this->dateSysSaisie;
    }

    /**
     * Get the etat.
     *
     * @return int|null Returns the etat.
     */
    public function getEtat(): ?int {
        return $this->etat;
    }

    /**
     * Get the facturable.
     *
     * @return bool|null Returns the facturable.
     */
    public function getFacturable(): ?bool {
        return $this->facturable;
    }

    /**
     * Get the g uniq id.
     *
     * @return string|null Returns the g uniq id.
     */
    public function getGUniqId(): ?string {
        return $this->gUniqId;
    }

    /**
     * Get the heure debut.
     *
     * @return DateTime|null Returns the heure debut.
     */
    public function getHeureDebut(): ?DateTime {
        return $this->heureDebut;
    }

    /**
     * Get the heure fin.
     *
     * @return DateTime|null Returns the heure fin.
     */
    public function getHeureFin(): ?DateTime {
        return $this->heureFin;
    }

    /**
     * Get the id tps.
     *
     * @return int|null Returns the id tps.
     */
    public function getIdTps(): ?int {
        return $this->idTps;
    }

    /**
     * Get the is transf.
     *
     * @return bool|null Returns the is transf.
     */
    public function getIsTransf(): ?bool {
        return $this->isTransf;
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
     * Get the monnaie.
     *
     * @return string|null Returns the monnaie.
     */
    public function getMonnaie(): ?string {
        return $this->monnaie;
    }

    /**
     * Get the montant crt.
     *
     * @return float|null Returns the montant crt.
     */
    public function getMontantCrt(): ?float {
        return $this->montantCrt;
    }

    /**
     * Get the montant tva.
     *
     * @return float|null Returns the montant tva.
     */
    public function getMontantTva(): ?float {
        return $this->montantTva;
    }

    /**
     * Get the nb km.
     *
     * @return float|null Returns the nb km.
     */
    public function getNbKm(): ?float {
        return $this->nbKm;
    }

    /**
     * Get the nb uo.
     *
     * @return float|null Returns the nb uo.
     */
    public function getNbUo(): ?float {
        return $this->nbUo;
    }

    /**
     * Get the periode edition nd f.
     *
     * @return DateTime|null Returns the periode edition nd f.
     */
    public function getPeriodeEditionNdF(): ?DateTime {
        return $this->periodeEditionNdF;
    }

    /**
     * Get the pu.
     *
     * @return float|null Returns the pu.
     */
    public function getPu(): ?float {
        return $this->pu;
    }

    /**
     * Get the pv1.
     *
     * @return float|null Returns the pv1.
     */
    public function getPv1(): ?float {
        return $this->pv1;
    }

    /**
     * Get the pv2.
     *
     * @return float|null Returns the pv2.
     */
    public function getPv2(): ?float {
        return $this->pv2;
    }

    /**
     * Get the pv3.
     *
     * @return float|null Returns the pv3.
     */
    public function getPv3(): ?float {
        return $this->pv3;
    }

    /**
     * Get the qte.
     *
     * @return float|null Returns the qte.
     */
    public function getQte(): ?float {
        return $this->qte;
    }

    /**
     * Get the taux remise.
     *
     * @return float|null Returns the taux remise.
     */
    public function getTauxRemise(): ?float {
        return $this->tauxRemise;
    }

    /**
     * Get the taux remise ici.
     *
     * @return bool|null Returns the taux remise ici.
     */
    public function getTauxRemiseIci(): ?bool {
        return $this->tauxRemiseIci;
    }

    /**
     * Get the uniq id facture.
     *
     * @return string|null Returns the uniq id facture.
     */
    public function getUniqIdFacture(): ?string {
        return $this->uniqIdFacture;
    }

    /**
     * Get the valide.
     *
     * @return bool|null Returns the valide.
     */
    public function getValide(): ?bool {
        return $this->valide;
    }

    /**
     * Get the valide collab.
     *
     * @return string|null Returns the valide collab.
     */
    public function getValideCollab(): ?string {
        return $this->valideCollab;
    }

    /**
     * Get the valide date.
     *
     * @return DateTime|null Returns the valide date.
     */
    public function getValideDate(): ?DateTime {
        return $this->valideDate;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setCodeClient(?string $codeClient): TempsPasses {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): TempsPasses {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setCodeMission(?string $codeMission): TempsPasses {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string|null $codePhase The code phase.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setCodePhase(?string $codePhase): TempsPasses {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setCodeTache(?string $codeTache): TempsPasses {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code vehicule.
     *
     * @param string|null $codeVehicule The code vehicule.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setCodeVehicule(?string $codeVehicule): TempsPasses {
        $this->codeVehicule = $codeVehicule;
        return $this;
    }

    /**
     * Set the cout km.
     *
     * @param float|null $coutKm The cout km.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setCoutKm(?float $coutKm): TempsPasses {
        $this->coutKm = $coutKm;
        return $this;
    }

    /**
     * Set the date saisie.
     *
     * @param DateTime|null $dateSaisie The date saisie.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setDateSaisie(?DateTime $dateSaisie): TempsPasses {
        $this->dateSaisie = $dateSaisie;
        return $this;
    }

    /**
     * Set the date sys saisie.
     *
     * @param DateTime|null $dateSysSaisie The date sys saisie.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setDateSysSaisie(?DateTime $dateSysSaisie): TempsPasses {
        $this->dateSysSaisie = $dateSysSaisie;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param int|null $etat The etat.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setEtat(?int $etat): TempsPasses {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the facturable.
     *
     * @param bool|null $facturable The facturable.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setFacturable(?bool $facturable): TempsPasses {
        $this->facturable = $facturable;
        return $this;
    }

    /**
     * Set the g uniq id.
     *
     * @param string|null $gUniqId The g uniq id.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setGUniqId(?string $gUniqId): TempsPasses {
        $this->gUniqId = $gUniqId;
        return $this;
    }

    /**
     * Set the heure debut.
     *
     * @param DateTime|null $heureDebut The heure debut.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setHeureDebut(?DateTime $heureDebut): TempsPasses {
        $this->heureDebut = $heureDebut;
        return $this;
    }

    /**
     * Set the heure fin.
     *
     * @param DateTime|null $heureFin The heure fin.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setHeureFin(?DateTime $heureFin): TempsPasses {
        $this->heureFin = $heureFin;
        return $this;
    }

    /**
     * Set the id tps.
     *
     * @param int|null $idTps The id tps.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setIdTps(?int $idTps): TempsPasses {
        $this->idTps = $idTps;
        return $this;
    }

    /**
     * Set the is transf.
     *
     * @param bool|null $isTransf The is transf.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setIsTransf(?bool $isTransf): TempsPasses {
        $this->isTransf = $isTransf;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setLibelle(?string $libelle): TempsPasses {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the monnaie.
     *
     * @param string|null $monnaie The monnaie.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setMonnaie(?string $monnaie): TempsPasses {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the montant crt.
     *
     * @param float|null $montantCrt The montant crt.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setMontantCrt(?float $montantCrt): TempsPasses {
        $this->montantCrt = $montantCrt;
        return $this;
    }

    /**
     * Set the montant tva.
     *
     * @param float|null $montantTva The montant tva.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setMontantTva(?float $montantTva): TempsPasses {
        $this->montantTva = $montantTva;
        return $this;
    }

    /**
     * Set the nb km.
     *
     * @param float|null $nbKm The nb km.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setNbKm(?float $nbKm): TempsPasses {
        $this->nbKm = $nbKm;
        return $this;
    }

    /**
     * Set the nb uo.
     *
     * @param float|null $nbUo The nb uo.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setNbUo(?float $nbUo): TempsPasses {
        $this->nbUo = $nbUo;
        return $this;
    }

    /**
     * Set the periode edition nd f.
     *
     * @param DateTime|null $periodeEditionNdF The periode edition nd f.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setPeriodeEditionNdF(?DateTime $periodeEditionNdF): TempsPasses {
        $this->periodeEditionNdF = $periodeEditionNdF;
        return $this;
    }

    /**
     * Set the pu.
     *
     * @param float|null $pu The pu.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setPu(?float $pu): TempsPasses {
        $this->pu = $pu;
        return $this;
    }

    /**
     * Set the pv1.
     *
     * @param float|null $pv1 The pv1.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setPv1(?float $pv1): TempsPasses {
        $this->pv1 = $pv1;
        return $this;
    }

    /**
     * Set the pv2.
     *
     * @param float|null $pv2 The pv2.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setPv2(?float $pv2): TempsPasses {
        $this->pv2 = $pv2;
        return $this;
    }

    /**
     * Set the pv3.
     *
     * @param float|null $pv3 The pv3.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setPv3(?float $pv3): TempsPasses {
        $this->pv3 = $pv3;
        return $this;
    }

    /**
     * Set the qte.
     *
     * @param float|null $qte The qte.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setQte(?float $qte): TempsPasses {
        $this->qte = $qte;
        return $this;
    }

    /**
     * Set the taux remise.
     *
     * @param float|null $tauxRemise The taux remise.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setTauxRemise(?float $tauxRemise): TempsPasses {
        $this->tauxRemise = $tauxRemise;
        return $this;
    }

    /**
     * Set the taux remise ici.
     *
     * @param bool|null $tauxRemiseIci The taux remise ici.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setTauxRemiseIci(?bool $tauxRemiseIci): TempsPasses {
        $this->tauxRemiseIci = $tauxRemiseIci;
        return $this;
    }

    /**
     * Set the uniq id facture.
     *
     * @param string|null $uniqIdFacture The uniq id facture.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setUniqIdFacture(?string $uniqIdFacture): TempsPasses {
        $this->uniqIdFacture = $uniqIdFacture;
        return $this;
    }

    /**
     * Set the valide.
     *
     * @param bool|null $valide The valide.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setValide(?bool $valide): TempsPasses {
        $this->valide = $valide;
        return $this;
    }

    /**
     * Set the valide collab.
     *
     * @param string|null $valideCollab The valide collab.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setValideCollab(?string $valideCollab): TempsPasses {
        $this->valideCollab = $valideCollab;
        return $this;
    }

    /**
     * Set the valide date.
     *
     * @param DateTime|null $valideDate The valide date.
     * @return TempsPasses Returns this Temps passes.
     */
    public function setValideDate(?DateTime $valideDate): TempsPasses {
        $this->valideDate = $valideDate;
        return $this;
    }
}
