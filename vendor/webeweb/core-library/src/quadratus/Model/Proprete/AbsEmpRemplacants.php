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
 * Abs emp remplacants.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AbsEmpRemplacants {

    /**
     * Ajouter en h compl.
     *
     * @var bool|null
     */
    private $ajouterEnHCompl;

    /**
     * Avenant h rempl.
     *
     * @var bool|null
     */
    private $avenantHRempl;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code affaire rempl.
     *
     * @var string|null
     */
    private $codeAffaireRempl;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code chantier rempl.
     *
     * @var string|null
     */
    private $codeChantierRempl;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code client rempl.
     *
     * @var string|null
     */
    private $codeClientRempl;

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
     * Code tache rempl.
     *
     * @var string|null
     */
    private $codeTacheRempl;

    /**
     * Date abs decalee.
     *
     * @var DateTime|null
     */
    private $dateAbsDecalee;

    /**
     * Date debut abs.
     *
     * @var DateTime|null
     */
    private $dateDebutAbs;

    /**
     * Date debut rempl.
     *
     * @var DateTime|null
     */
    private $dateDebutRempl;

    /**
     * Date fin rempl.
     *
     * @var DateTime|null
     */
    private $dateFinRempl;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
     */
    private $dateValidationSynchro;

    /**
     * Duree remplacement.
     *
     * @var float|null
     */
    private $dureeRemplacement;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Num bt rempl.
     *
     * @var int|null
     */
    private $numBtRempl;

    /**
     * Num rempl.
     *
     * @var int|null
     */
    private $numRempl;

    /**
     * Numero avenant.
     *
     * @var int|null
     */
    private $numeroAvenant;

    /**
     * Remplacant travaille jf.
     *
     * @var bool|null
     */
    private $remplacantTravailleJf;

    /**
     * Remplacement complet.
     *
     * @var bool|null
     */
    private $remplacementComplet;

    /**
     * Remplacement modifie.
     *
     * @var bool|null
     */
    private $remplacementModifie;

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
     * Get the ajouter en h compl.
     *
     * @return bool|null Returns the ajouter en h compl.
     */
    public function getAjouterEnHCompl(): ?bool {
        return $this->ajouterEnHCompl;
    }

    /**
     * Get the avenant h rempl.
     *
     * @return bool|null Returns the avenant h rempl.
     */
    public function getAvenantHRempl(): ?bool {
        return $this->avenantHRempl;
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
     * Get the code affaire rempl.
     *
     * @return string|null Returns the code affaire rempl.
     */
    public function getCodeAffaireRempl(): ?string {
        return $this->codeAffaireRempl;
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
     * Get the code chantier rempl.
     *
     * @return string|null Returns the code chantier rempl.
     */
    public function getCodeChantierRempl(): ?string {
        return $this->codeChantierRempl;
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
     * Get the code client rempl.
     *
     * @return string|null Returns the code client rempl.
     */
    public function getCodeClientRempl(): ?string {
        return $this->codeClientRempl;
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
     * Get the code tache rempl.
     *
     * @return string|null Returns the code tache rempl.
     */
    public function getCodeTacheRempl(): ?string {
        return $this->codeTacheRempl;
    }

    /**
     * Get the date abs decalee.
     *
     * @return DateTime|null Returns the date abs decalee.
     */
    public function getDateAbsDecalee(): ?DateTime {
        return $this->dateAbsDecalee;
    }

    /**
     * Get the date debut abs.
     *
     * @return DateTime|null Returns the date debut abs.
     */
    public function getDateDebutAbs(): ?DateTime {
        return $this->dateDebutAbs;
    }

    /**
     * Get the date debut rempl.
     *
     * @return DateTime|null Returns the date debut rempl.
     */
    public function getDateDebutRempl(): ?DateTime {
        return $this->dateDebutRempl;
    }

    /**
     * Get the date fin rempl.
     *
     * @return DateTime|null Returns the date fin rempl.
     */
    public function getDateFinRempl(): ?DateTime {
        return $this->dateFinRempl;
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
     * Get the duree remplacement.
     *
     * @return float|null Returns the duree remplacement.
     */
    public function getDureeRemplacement(): ?float {
        return $this->dureeRemplacement;
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
     * Get the num bt.
     *
     * @return int|null Returns the num bt.
     */
    public function getNumBt(): ?int {
        return $this->numBt;
    }

    /**
     * Get the num bt rempl.
     *
     * @return int|null Returns the num bt rempl.
     */
    public function getNumBtRempl(): ?int {
        return $this->numBtRempl;
    }

    /**
     * Get the num rempl.
     *
     * @return int|null Returns the num rempl.
     */
    public function getNumRempl(): ?int {
        return $this->numRempl;
    }

    /**
     * Get the numero avenant.
     *
     * @return int|null Returns the numero avenant.
     */
    public function getNumeroAvenant(): ?int {
        return $this->numeroAvenant;
    }

    /**
     * Get the remplacant travaille jf.
     *
     * @return bool|null Returns the remplacant travaille jf.
     */
    public function getRemplacantTravailleJf(): ?bool {
        return $this->remplacantTravailleJf;
    }

    /**
     * Get the remplacement complet.
     *
     * @return bool|null Returns the remplacement complet.
     */
    public function getRemplacementComplet(): ?bool {
        return $this->remplacementComplet;
    }

    /**
     * Get the remplacement modifie.
     *
     * @return bool|null Returns the remplacement modifie.
     */
    public function getRemplacementModifie(): ?bool {
        return $this->remplacementModifie;
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
     * Set the ajouter en h compl.
     *
     * @param bool|null $ajouterEnHCompl The ajouter en h compl.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setAjouterEnHCompl(?bool $ajouterEnHCompl): AbsEmpRemplacants {
        $this->ajouterEnHCompl = $ajouterEnHCompl;
        return $this;
    }

    /**
     * Set the avenant h rempl.
     *
     * @param bool|null $avenantHRempl The avenant h rempl.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setAvenantHRempl(?bool $avenantHRempl): AbsEmpRemplacants {
        $this->avenantHRempl = $avenantHRempl;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setCodeAffaire(?string $codeAffaire): AbsEmpRemplacants {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code affaire rempl.
     *
     * @param string|null $codeAffaireRempl The code affaire rempl.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setCodeAffaireRempl(?string $codeAffaireRempl): AbsEmpRemplacants {
        $this->codeAffaireRempl = $codeAffaireRempl;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setCodeChantier(?string $codeChantier): AbsEmpRemplacants {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code chantier rempl.
     *
     * @param string|null $codeChantierRempl The code chantier rempl.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setCodeChantierRempl(?string $codeChantierRempl): AbsEmpRemplacants {
        $this->codeChantierRempl = $codeChantierRempl;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setCodeClient(?string $codeClient): AbsEmpRemplacants {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code client rempl.
     *
     * @param string|null $codeClientRempl The code client rempl.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setCodeClientRempl(?string $codeClientRempl): AbsEmpRemplacants {
        $this->codeClientRempl = $codeClientRempl;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): AbsEmpRemplacants {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): AbsEmpRemplacants {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setCodeEmploye(?string $codeEmploye): AbsEmpRemplacants {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code remplacant.
     *
     * @param string|null $codeRemplacant The code remplacant.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setCodeRemplacant(?string $codeRemplacant): AbsEmpRemplacants {
        $this->codeRemplacant = $codeRemplacant;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setCodeTache(?string $codeTache): AbsEmpRemplacants {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code tache rempl.
     *
     * @param string|null $codeTacheRempl The code tache rempl.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setCodeTacheRempl(?string $codeTacheRempl): AbsEmpRemplacants {
        $this->codeTacheRempl = $codeTacheRempl;
        return $this;
    }

    /**
     * Set the date abs decalee.
     *
     * @param DateTime|null $dateAbsDecalee The date abs decalee.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setDateAbsDecalee(?DateTime $dateAbsDecalee): AbsEmpRemplacants {
        $this->dateAbsDecalee = $dateAbsDecalee;
        return $this;
    }

    /**
     * Set the date debut abs.
     *
     * @param DateTime|null $dateDebutAbs The date debut abs.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setDateDebutAbs(?DateTime $dateDebutAbs): AbsEmpRemplacants {
        $this->dateDebutAbs = $dateDebutAbs;
        return $this;
    }

    /**
     * Set the date debut rempl.
     *
     * @param DateTime|null $dateDebutRempl The date debut rempl.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setDateDebutRempl(?DateTime $dateDebutRempl): AbsEmpRemplacants {
        $this->dateDebutRempl = $dateDebutRempl;
        return $this;
    }

    /**
     * Set the date fin rempl.
     *
     * @param DateTime|null $dateFinRempl The date fin rempl.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setDateFinRempl(?DateTime $dateFinRempl): AbsEmpRemplacants {
        $this->dateFinRempl = $dateFinRempl;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): AbsEmpRemplacants {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the duree remplacement.
     *
     * @param float|null $dureeRemplacement The duree remplacement.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setDureeRemplacement(?float $dureeRemplacement): AbsEmpRemplacants {
        $this->dureeRemplacement = $dureeRemplacement;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setEtat(?string $etat): AbsEmpRemplacants {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setNumBt(?int $numBt): AbsEmpRemplacants {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the num bt rempl.
     *
     * @param int|null $numBtRempl The num bt rempl.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setNumBtRempl(?int $numBtRempl): AbsEmpRemplacants {
        $this->numBtRempl = $numBtRempl;
        return $this;
    }

    /**
     * Set the num rempl.
     *
     * @param int|null $numRempl The num rempl.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setNumRempl(?int $numRempl): AbsEmpRemplacants {
        $this->numRempl = $numRempl;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int|null $numeroAvenant The numero avenant.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setNumeroAvenant(?int $numeroAvenant): AbsEmpRemplacants {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the remplacant travaille jf.
     *
     * @param bool|null $remplacantTravailleJf The remplacant travaille jf.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setRemplacantTravailleJf(?bool $remplacantTravailleJf): AbsEmpRemplacants {
        $this->remplacantTravailleJf = $remplacantTravailleJf;
        return $this;
    }

    /**
     * Set the remplacement complet.
     *
     * @param bool|null $remplacementComplet The remplacement complet.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setRemplacementComplet(?bool $remplacementComplet): AbsEmpRemplacants {
        $this->remplacementComplet = $remplacementComplet;
        return $this;
    }

    /**
     * Set the remplacement modifie.
     *
     * @param bool|null $remplacementModifie The remplacement modifie.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setRemplacementModifie(?bool $remplacementModifie): AbsEmpRemplacants {
        $this->remplacementModifie = $remplacementModifie;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return AbsEmpRemplacants Returns this Abs emp remplacants.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): AbsEmpRemplacants {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
