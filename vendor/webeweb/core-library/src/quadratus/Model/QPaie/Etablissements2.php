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
 * Etablissements2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Etablissements2 {

    /**
     * Adherent syndicat.
     *
     * @var bool|null
     */
    private $adherentSyndicat;

    /**
     * Annee chgt effectif.
     *
     * @var string|null
     */
    private $anneeChgtEffectif;

    /**
     * Annee jei.
     *
     * @var int|null
     */
    private $anneeJei;

    /**
     * Assujetti cvae.
     *
     * @var bool|null
     */
    private $assujettiCvae;

    /**
     * Autre signature dnae.
     *
     * @var string|null
     */
    private $autreSignatureDnae;

    /**
     * Bic2.
     *
     * @var string|null
     */
    private $bic2;

    /**
     * Bic3.
     *
     * @var string|null
     */
    private $bic3;

    /**
     * Caisse cp transport.
     *
     * @var bool|null
     */
    private $caisseCpTransport;

    /**
     * Categorie juridique.
     *
     * @var string|null
     */
    private $categorieJuridique;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code med trav due.
     *
     * @var string|null
     */
    private $codeMedTravDue;

    /**
     * Code orga due.
     *
     * @var string|null
     */
    private $codeOrgaDue;

    /**
     * Coeff fillon moins20.
     *
     * @var bool|null
     */
    private $coeffFillonMoins20;

    /**
     * Compte charge heures act part.
     *
     * @var string|null
     */
    private $compteChargeHeuresActPart;

    /**
     * Compte charge indem abs intemp.
     *
     * @var string|null
     */
    private $compteChargeIndemAbsIntemp;

    /**
     * Compte charge indem act part.
     *
     * @var string|null
     */
    private $compteChargeIndemActPart;

    /**
     * Compte charge int vers.
     *
     * @var string|null
     */
    private $compteChargeIntVers;

    /**
     * Compte charge part vers.
     *
     * @var string|null
     */
    private $compteChargePartVers;

    /**
     * Contact signature dnae.
     *
     * @var string|null
     */
    private $contactSignatureDnae;

    /**
     * Date fin exclure lfr2012.
     *
     * @var DateTime|null
     */
    private $dateFinExclureLfr2012;

    /**
     * Exclure lfr2012.
     *
     * @var bool|null
     */
    private $exclureLfr2012;

    /**
     * Gestion hstepa.
     *
     * @var string|null
     */
    private $gestionHstepa;

    /**
     * Gestion maintien sal auto.
     *
     * @var bool|null
     */
    private $gestionMaintienSalAuto;

    /**
     * Iban2.
     *
     * @var string|null
     */
    private $iban2;

    /**
     * Iban3.
     *
     * @var string|null
     */
    private $iban3;

    /**
     * Iban id client2.
     *
     * @var string|null
     */
    private $ibanIdClient2;

    /**
     * Iban id client3.
     *
     * @var string|null
     */
    private $ibanIdClient3;

    /**
     * Implantation entreprise.
     *
     * @var string|null
     */
    private $implantationEntreprise;

    /**
     * Jf charge emp.
     *
     * @var bool|null
     */
    private $jfChargeEmp;

    /**
     * Lieu signature dnae.
     *
     * @var string|null
     */
    private $lieuSignatureDnae;

    /**
     * Maintien net deduc csgijss.
     *
     * @var bool|null
     */
    private $maintienNetDeducCsgijss;

    /**
     * Nb fraction etab.
     *
     * @var int|null
     */
    private $nbFractionEtab;

    /**
     * Nom signataire dnae.
     *
     * @var string|null
     */
    private $nomSignataireDnae;

    /**
     * Prenom signataire dnae.
     *
     * @var string|null
     */
    private $prenomSignataireDnae;

    /**
     * Pseudo siret.
     *
     * @var string|null
     */
    private $pseudoSiret;

    /**
     * Qualite signataire dnae.
     *
     * @var string|null
     */
    private $qualiteSignataireDnae;

    /**
     * Reduction mayotte.
     *
     * @var bool|null
     */
    private $reductionMayotte;

    /**
     * Remuneration expatries.
     *
     * @var string|null
     */
    private $remunerationExpatries;

    /**
     * Siret centralisateur.
     *
     * @var bool|null
     */
    private $siretCentralisateur;

    /**
     * Smic m courant.
     *
     * @var bool|null
     */
    private $smicMCourant;

    /**
     * Societe interim.
     *
     * @var bool|null
     */
    private $societeInterim;

    /**
     * Taux compl heure.
     *
     * @var float|null
     */
    private $tauxComplHeure;

    /**
     * Taux cotis oss et ope.
     *
     * @var float|null
     */
    private $tauxCotisOssEtOpe;

    /**
     * Taux h comp.
     *
     * @var float|null
     */
    private $tauxHComp;

    /**
     * Tds19.
     *
     * @var string|null
     */
    private $tds19;

    /**
     * Tel signature dnae.
     *
     * @var string|null
     */
    private $telSignatureDnae;

    /**
     * Tepa moins20.
     *
     * @var bool|null
     */
    private $tepaMoins20;

    /**
     * Type effectif ct.
     *
     * @var string|null
     */
    private $typeEffectifCt;

    /**
     * Type maintien brut net.
     *
     * @var string|null
     */
    private $typeMaintienBrutNet;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adherent syndicat.
     *
     * @return bool|null Returns the adherent syndicat.
     */
    public function getAdherentSyndicat(): ?bool {
        return $this->adherentSyndicat;
    }

    /**
     * Get the annee chgt effectif.
     *
     * @return string|null Returns the annee chgt effectif.
     */
    public function getAnneeChgtEffectif(): ?string {
        return $this->anneeChgtEffectif;
    }

    /**
     * Get the annee jei.
     *
     * @return int|null Returns the annee jei.
     */
    public function getAnneeJei(): ?int {
        return $this->anneeJei;
    }

    /**
     * Get the assujetti cvae.
     *
     * @return bool|null Returns the assujetti cvae.
     */
    public function getAssujettiCvae(): ?bool {
        return $this->assujettiCvae;
    }

    /**
     * Get the autre signature dnae.
     *
     * @return string|null Returns the autre signature dnae.
     */
    public function getAutreSignatureDnae(): ?string {
        return $this->autreSignatureDnae;
    }

    /**
     * Get the bic2.
     *
     * @return string|null Returns the bic2.
     */
    public function getBic2(): ?string {
        return $this->bic2;
    }

    /**
     * Get the bic3.
     *
     * @return string|null Returns the bic3.
     */
    public function getBic3(): ?string {
        return $this->bic3;
    }

    /**
     * Get the caisse cp transport.
     *
     * @return bool|null Returns the caisse cp transport.
     */
    public function getCaisseCpTransport(): ?bool {
        return $this->caisseCpTransport;
    }

    /**
     * Get the categorie juridique.
     *
     * @return string|null Returns the categorie juridique.
     */
    public function getCategorieJuridique(): ?string {
        return $this->categorieJuridique;
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
     * Get the code med trav due.
     *
     * @return string|null Returns the code med trav due.
     */
    public function getCodeMedTravDue(): ?string {
        return $this->codeMedTravDue;
    }

    /**
     * Get the code orga due.
     *
     * @return string|null Returns the code orga due.
     */
    public function getCodeOrgaDue(): ?string {
        return $this->codeOrgaDue;
    }

    /**
     * Get the coeff fillon moins20.
     *
     * @return bool|null Returns the coeff fillon moins20.
     */
    public function getCoeffFillonMoins20(): ?bool {
        return $this->coeffFillonMoins20;
    }

    /**
     * Get the compte charge heures act part.
     *
     * @return string|null Returns the compte charge heures act part.
     */
    public function getCompteChargeHeuresActPart(): ?string {
        return $this->compteChargeHeuresActPart;
    }

    /**
     * Get the compte charge indem abs intemp.
     *
     * @return string|null Returns the compte charge indem abs intemp.
     */
    public function getCompteChargeIndemAbsIntemp(): ?string {
        return $this->compteChargeIndemAbsIntemp;
    }

    /**
     * Get the compte charge indem act part.
     *
     * @return string|null Returns the compte charge indem act part.
     */
    public function getCompteChargeIndemActPart(): ?string {
        return $this->compteChargeIndemActPart;
    }

    /**
     * Get the compte charge int vers.
     *
     * @return string|null Returns the compte charge int vers.
     */
    public function getCompteChargeIntVers(): ?string {
        return $this->compteChargeIntVers;
    }

    /**
     * Get the compte charge part vers.
     *
     * @return string|null Returns the compte charge part vers.
     */
    public function getCompteChargePartVers(): ?string {
        return $this->compteChargePartVers;
    }

    /**
     * Get the contact signature dnae.
     *
     * @return string|null Returns the contact signature dnae.
     */
    public function getContactSignatureDnae(): ?string {
        return $this->contactSignatureDnae;
    }

    /**
     * Get the date fin exclure lfr2012.
     *
     * @return DateTime|null Returns the date fin exclure lfr2012.
     */
    public function getDateFinExclureLfr2012(): ?DateTime {
        return $this->dateFinExclureLfr2012;
    }

    /**
     * Get the exclure lfr2012.
     *
     * @return bool|null Returns the exclure lfr2012.
     */
    public function getExclureLfr2012(): ?bool {
        return $this->exclureLfr2012;
    }

    /**
     * Get the gestion hstepa.
     *
     * @return string|null Returns the gestion hstepa.
     */
    public function getGestionHstepa(): ?string {
        return $this->gestionHstepa;
    }

    /**
     * Get the gestion maintien sal auto.
     *
     * @return bool|null Returns the gestion maintien sal auto.
     */
    public function getGestionMaintienSalAuto(): ?bool {
        return $this->gestionMaintienSalAuto;
    }

    /**
     * Get the iban2.
     *
     * @return string|null Returns the iban2.
     */
    public function getIban2(): ?string {
        return $this->iban2;
    }

    /**
     * Get the iban3.
     *
     * @return string|null Returns the iban3.
     */
    public function getIban3(): ?string {
        return $this->iban3;
    }

    /**
     * Get the iban id client2.
     *
     * @return string|null Returns the iban id client2.
     */
    public function getIbanIdClient2(): ?string {
        return $this->ibanIdClient2;
    }

    /**
     * Get the iban id client3.
     *
     * @return string|null Returns the iban id client3.
     */
    public function getIbanIdClient3(): ?string {
        return $this->ibanIdClient3;
    }

    /**
     * Get the implantation entreprise.
     *
     * @return string|null Returns the implantation entreprise.
     */
    public function getImplantationEntreprise(): ?string {
        return $this->implantationEntreprise;
    }

    /**
     * Get the jf charge emp.
     *
     * @return bool|null Returns the jf charge emp.
     */
    public function getJfChargeEmp(): ?bool {
        return $this->jfChargeEmp;
    }

    /**
     * Get the lieu signature dnae.
     *
     * @return string|null Returns the lieu signature dnae.
     */
    public function getLieuSignatureDnae(): ?string {
        return $this->lieuSignatureDnae;
    }

    /**
     * Get the maintien net deduc csgijss.
     *
     * @return bool|null Returns the maintien net deduc csgijss.
     */
    public function getMaintienNetDeducCsgijss(): ?bool {
        return $this->maintienNetDeducCsgijss;
    }

    /**
     * Get the nb fraction etab.
     *
     * @return int|null Returns the nb fraction etab.
     */
    public function getNbFractionEtab(): ?int {
        return $this->nbFractionEtab;
    }

    /**
     * Get the nom signataire dnae.
     *
     * @return string|null Returns the nom signataire dnae.
     */
    public function getNomSignataireDnae(): ?string {
        return $this->nomSignataireDnae;
    }

    /**
     * Get the prenom signataire dnae.
     *
     * @return string|null Returns the prenom signataire dnae.
     */
    public function getPrenomSignataireDnae(): ?string {
        return $this->prenomSignataireDnae;
    }

    /**
     * Get the pseudo siret.
     *
     * @return string|null Returns the pseudo siret.
     */
    public function getPseudoSiret(): ?string {
        return $this->pseudoSiret;
    }

    /**
     * Get the qualite signataire dnae.
     *
     * @return string|null Returns the qualite signataire dnae.
     */
    public function getQualiteSignataireDnae(): ?string {
        return $this->qualiteSignataireDnae;
    }

    /**
     * Get the reduction mayotte.
     *
     * @return bool|null Returns the reduction mayotte.
     */
    public function getReductionMayotte(): ?bool {
        return $this->reductionMayotte;
    }

    /**
     * Get the remuneration expatries.
     *
     * @return string|null Returns the remuneration expatries.
     */
    public function getRemunerationExpatries(): ?string {
        return $this->remunerationExpatries;
    }

    /**
     * Get the siret centralisateur.
     *
     * @return bool|null Returns the siret centralisateur.
     */
    public function getSiretCentralisateur(): ?bool {
        return $this->siretCentralisateur;
    }

    /**
     * Get the smic m courant.
     *
     * @return bool|null Returns the smic m courant.
     */
    public function getSmicMCourant(): ?bool {
        return $this->smicMCourant;
    }

    /**
     * Get the societe interim.
     *
     * @return bool|null Returns the societe interim.
     */
    public function getSocieteInterim(): ?bool {
        return $this->societeInterim;
    }

    /**
     * Get the taux compl heure.
     *
     * @return float|null Returns the taux compl heure.
     */
    public function getTauxComplHeure(): ?float {
        return $this->tauxComplHeure;
    }

    /**
     * Get the taux cotis oss et ope.
     *
     * @return float|null Returns the taux cotis oss et ope.
     */
    public function getTauxCotisOssEtOpe(): ?float {
        return $this->tauxCotisOssEtOpe;
    }

    /**
     * Get the taux h comp.
     *
     * @return float|null Returns the taux h comp.
     */
    public function getTauxHComp(): ?float {
        return $this->tauxHComp;
    }

    /**
     * Get the tds19.
     *
     * @return string|null Returns the tds19.
     */
    public function getTds19(): ?string {
        return $this->tds19;
    }

    /**
     * Get the tel signature dnae.
     *
     * @return string|null Returns the tel signature dnae.
     */
    public function getTelSignatureDnae(): ?string {
        return $this->telSignatureDnae;
    }

    /**
     * Get the tepa moins20.
     *
     * @return bool|null Returns the tepa moins20.
     */
    public function getTepaMoins20(): ?bool {
        return $this->tepaMoins20;
    }

    /**
     * Get the type effectif ct.
     *
     * @return string|null Returns the type effectif ct.
     */
    public function getTypeEffectifCt(): ?string {
        return $this->typeEffectifCt;
    }

    /**
     * Get the type maintien brut net.
     *
     * @return string|null Returns the type maintien brut net.
     */
    public function getTypeMaintienBrutNet(): ?string {
        return $this->typeMaintienBrutNet;
    }

    /**
     * Set the adherent syndicat.
     *
     * @param bool|null $adherentSyndicat The adherent syndicat.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setAdherentSyndicat(?bool $adherentSyndicat): Etablissements2 {
        $this->adherentSyndicat = $adherentSyndicat;
        return $this;
    }

    /**
     * Set the annee chgt effectif.
     *
     * @param string|null $anneeChgtEffectif The annee chgt effectif.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setAnneeChgtEffectif(?string $anneeChgtEffectif): Etablissements2 {
        $this->anneeChgtEffectif = $anneeChgtEffectif;
        return $this;
    }

    /**
     * Set the annee jei.
     *
     * @param int|null $anneeJei The annee jei.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setAnneeJei(?int $anneeJei): Etablissements2 {
        $this->anneeJei = $anneeJei;
        return $this;
    }

    /**
     * Set the assujetti cvae.
     *
     * @param bool|null $assujettiCvae The assujetti cvae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setAssujettiCvae(?bool $assujettiCvae): Etablissements2 {
        $this->assujettiCvae = $assujettiCvae;
        return $this;
    }

    /**
     * Set the autre signature dnae.
     *
     * @param string|null $autreSignatureDnae The autre signature dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setAutreSignatureDnae(?string $autreSignatureDnae): Etablissements2 {
        $this->autreSignatureDnae = $autreSignatureDnae;
        return $this;
    }

    /**
     * Set the bic2.
     *
     * @param string|null $bic2 The bic2.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setBic2(?string $bic2): Etablissements2 {
        $this->bic2 = $bic2;
        return $this;
    }

    /**
     * Set the bic3.
     *
     * @param string|null $bic3 The bic3.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setBic3(?string $bic3): Etablissements2 {
        $this->bic3 = $bic3;
        return $this;
    }

    /**
     * Set the caisse cp transport.
     *
     * @param bool|null $caisseCpTransport The caisse cp transport.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCaisseCpTransport(?bool $caisseCpTransport): Etablissements2 {
        $this->caisseCpTransport = $caisseCpTransport;
        return $this;
    }

    /**
     * Set the categorie juridique.
     *
     * @param string|null $categorieJuridique The categorie juridique.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCategorieJuridique(?string $categorieJuridique): Etablissements2 {
        $this->categorieJuridique = $categorieJuridique;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCodeEtablissement(?int $codeEtablissement): Etablissements2 {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code med trav due.
     *
     * @param string|null $codeMedTravDue The code med trav due.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCodeMedTravDue(?string $codeMedTravDue): Etablissements2 {
        $this->codeMedTravDue = $codeMedTravDue;
        return $this;
    }

    /**
     * Set the code orga due.
     *
     * @param string|null $codeOrgaDue The code orga due.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCodeOrgaDue(?string $codeOrgaDue): Etablissements2 {
        $this->codeOrgaDue = $codeOrgaDue;
        return $this;
    }

    /**
     * Set the coeff fillon moins20.
     *
     * @param bool|null $coeffFillonMoins20 The coeff fillon moins20.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCoeffFillonMoins20(?bool $coeffFillonMoins20): Etablissements2 {
        $this->coeffFillonMoins20 = $coeffFillonMoins20;
        return $this;
    }

    /**
     * Set the compte charge heures act part.
     *
     * @param string|null $compteChargeHeuresActPart The compte charge heures act part.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCompteChargeHeuresActPart(?string $compteChargeHeuresActPart): Etablissements2 {
        $this->compteChargeHeuresActPart = $compteChargeHeuresActPart;
        return $this;
    }

    /**
     * Set the compte charge indem abs intemp.
     *
     * @param string|null $compteChargeIndemAbsIntemp The compte charge indem abs intemp.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCompteChargeIndemAbsIntemp(?string $compteChargeIndemAbsIntemp): Etablissements2 {
        $this->compteChargeIndemAbsIntemp = $compteChargeIndemAbsIntemp;
        return $this;
    }

    /**
     * Set the compte charge indem act part.
     *
     * @param string|null $compteChargeIndemActPart The compte charge indem act part.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCompteChargeIndemActPart(?string $compteChargeIndemActPart): Etablissements2 {
        $this->compteChargeIndemActPart = $compteChargeIndemActPart;
        return $this;
    }

    /**
     * Set the compte charge int vers.
     *
     * @param string|null $compteChargeIntVers The compte charge int vers.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCompteChargeIntVers(?string $compteChargeIntVers): Etablissements2 {
        $this->compteChargeIntVers = $compteChargeIntVers;
        return $this;
    }

    /**
     * Set the compte charge part vers.
     *
     * @param string|null $compteChargePartVers The compte charge part vers.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCompteChargePartVers(?string $compteChargePartVers): Etablissements2 {
        $this->compteChargePartVers = $compteChargePartVers;
        return $this;
    }

    /**
     * Set the contact signature dnae.
     *
     * @param string|null $contactSignatureDnae The contact signature dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setContactSignatureDnae(?string $contactSignatureDnae): Etablissements2 {
        $this->contactSignatureDnae = $contactSignatureDnae;
        return $this;
    }

    /**
     * Set the date fin exclure lfr2012.
     *
     * @param DateTime|null $dateFinExclureLfr2012 The date fin exclure lfr2012.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setDateFinExclureLfr2012(?DateTime $dateFinExclureLfr2012): Etablissements2 {
        $this->dateFinExclureLfr2012 = $dateFinExclureLfr2012;
        return $this;
    }

    /**
     * Set the exclure lfr2012.
     *
     * @param bool|null $exclureLfr2012 The exclure lfr2012.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setExclureLfr2012(?bool $exclureLfr2012): Etablissements2 {
        $this->exclureLfr2012 = $exclureLfr2012;
        return $this;
    }

    /**
     * Set the gestion hstepa.
     *
     * @param string|null $gestionHstepa The gestion hstepa.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setGestionHstepa(?string $gestionHstepa): Etablissements2 {
        $this->gestionHstepa = $gestionHstepa;
        return $this;
    }

    /**
     * Set the gestion maintien sal auto.
     *
     * @param bool|null $gestionMaintienSalAuto The gestion maintien sal auto.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setGestionMaintienSalAuto(?bool $gestionMaintienSalAuto): Etablissements2 {
        $this->gestionMaintienSalAuto = $gestionMaintienSalAuto;
        return $this;
    }

    /**
     * Set the iban2.
     *
     * @param string|null $iban2 The iban2.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setIban2(?string $iban2): Etablissements2 {
        $this->iban2 = $iban2;
        return $this;
    }

    /**
     * Set the iban3.
     *
     * @param string|null $iban3 The iban3.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setIban3(?string $iban3): Etablissements2 {
        $this->iban3 = $iban3;
        return $this;
    }

    /**
     * Set the iban id client2.
     *
     * @param string|null $ibanIdClient2 The iban id client2.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setIbanIdClient2(?string $ibanIdClient2): Etablissements2 {
        $this->ibanIdClient2 = $ibanIdClient2;
        return $this;
    }

    /**
     * Set the iban id client3.
     *
     * @param string|null $ibanIdClient3 The iban id client3.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setIbanIdClient3(?string $ibanIdClient3): Etablissements2 {
        $this->ibanIdClient3 = $ibanIdClient3;
        return $this;
    }

    /**
     * Set the implantation entreprise.
     *
     * @param string|null $implantationEntreprise The implantation entreprise.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setImplantationEntreprise(?string $implantationEntreprise): Etablissements2 {
        $this->implantationEntreprise = $implantationEntreprise;
        return $this;
    }

    /**
     * Set the jf charge emp.
     *
     * @param bool|null $jfChargeEmp The jf charge emp.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setJfChargeEmp(?bool $jfChargeEmp): Etablissements2 {
        $this->jfChargeEmp = $jfChargeEmp;
        return $this;
    }

    /**
     * Set the lieu signature dnae.
     *
     * @param string|null $lieuSignatureDnae The lieu signature dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setLieuSignatureDnae(?string $lieuSignatureDnae): Etablissements2 {
        $this->lieuSignatureDnae = $lieuSignatureDnae;
        return $this;
    }

    /**
     * Set the maintien net deduc csgijss.
     *
     * @param bool|null $maintienNetDeducCsgijss The maintien net deduc csgijss.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setMaintienNetDeducCsgijss(?bool $maintienNetDeducCsgijss): Etablissements2 {
        $this->maintienNetDeducCsgijss = $maintienNetDeducCsgijss;
        return $this;
    }

    /**
     * Set the nb fraction etab.
     *
     * @param int|null $nbFractionEtab The nb fraction etab.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setNbFractionEtab(?int $nbFractionEtab): Etablissements2 {
        $this->nbFractionEtab = $nbFractionEtab;
        return $this;
    }

    /**
     * Set the nom signataire dnae.
     *
     * @param string|null $nomSignataireDnae The nom signataire dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setNomSignataireDnae(?string $nomSignataireDnae): Etablissements2 {
        $this->nomSignataireDnae = $nomSignataireDnae;
        return $this;
    }

    /**
     * Set the prenom signataire dnae.
     *
     * @param string|null $prenomSignataireDnae The prenom signataire dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setPrenomSignataireDnae(?string $prenomSignataireDnae): Etablissements2 {
        $this->prenomSignataireDnae = $prenomSignataireDnae;
        return $this;
    }

    /**
     * Set the pseudo siret.
     *
     * @param string|null $pseudoSiret The pseudo siret.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setPseudoSiret(?string $pseudoSiret): Etablissements2 {
        $this->pseudoSiret = $pseudoSiret;
        return $this;
    }

    /**
     * Set the qualite signataire dnae.
     *
     * @param string|null $qualiteSignataireDnae The qualite signataire dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setQualiteSignataireDnae(?string $qualiteSignataireDnae): Etablissements2 {
        $this->qualiteSignataireDnae = $qualiteSignataireDnae;
        return $this;
    }

    /**
     * Set the reduction mayotte.
     *
     * @param bool|null $reductionMayotte The reduction mayotte.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setReductionMayotte(?bool $reductionMayotte): Etablissements2 {
        $this->reductionMayotte = $reductionMayotte;
        return $this;
    }

    /**
     * Set the remuneration expatries.
     *
     * @param string|null $remunerationExpatries The remuneration expatries.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setRemunerationExpatries(?string $remunerationExpatries): Etablissements2 {
        $this->remunerationExpatries = $remunerationExpatries;
        return $this;
    }

    /**
     * Set the siret centralisateur.
     *
     * @param bool|null $siretCentralisateur The siret centralisateur.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setSiretCentralisateur(?bool $siretCentralisateur): Etablissements2 {
        $this->siretCentralisateur = $siretCentralisateur;
        return $this;
    }

    /**
     * Set the smic m courant.
     *
     * @param bool|null $smicMCourant The smic m courant.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setSmicMCourant(?bool $smicMCourant): Etablissements2 {
        $this->smicMCourant = $smicMCourant;
        return $this;
    }

    /**
     * Set the societe interim.
     *
     * @param bool|null $societeInterim The societe interim.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setSocieteInterim(?bool $societeInterim): Etablissements2 {
        $this->societeInterim = $societeInterim;
        return $this;
    }

    /**
     * Set the taux compl heure.
     *
     * @param float|null $tauxComplHeure The taux compl heure.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTauxComplHeure(?float $tauxComplHeure): Etablissements2 {
        $this->tauxComplHeure = $tauxComplHeure;
        return $this;
    }

    /**
     * Set the taux cotis oss et ope.
     *
     * @param float|null $tauxCotisOssEtOpe The taux cotis oss et ope.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTauxCotisOssEtOpe(?float $tauxCotisOssEtOpe): Etablissements2 {
        $this->tauxCotisOssEtOpe = $tauxCotisOssEtOpe;
        return $this;
    }

    /**
     * Set the taux h comp.
     *
     * @param float|null $tauxHComp The taux h comp.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTauxHComp(?float $tauxHComp): Etablissements2 {
        $this->tauxHComp = $tauxHComp;
        return $this;
    }

    /**
     * Set the tds19.
     *
     * @param string|null $tds19 The tds19.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTds19(?string $tds19): Etablissements2 {
        $this->tds19 = $tds19;
        return $this;
    }

    /**
     * Set the tel signature dnae.
     *
     * @param string|null $telSignatureDnae The tel signature dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTelSignatureDnae(?string $telSignatureDnae): Etablissements2 {
        $this->telSignatureDnae = $telSignatureDnae;
        return $this;
    }

    /**
     * Set the tepa moins20.
     *
     * @param bool|null $tepaMoins20 The tepa moins20.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTepaMoins20(?bool $tepaMoins20): Etablissements2 {
        $this->tepaMoins20 = $tepaMoins20;
        return $this;
    }

    /**
     * Set the type effectif ct.
     *
     * @param string|null $typeEffectifCt The type effectif ct.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTypeEffectifCt(?string $typeEffectifCt): Etablissements2 {
        $this->typeEffectifCt = $typeEffectifCt;
        return $this;
    }

    /**
     * Set the type maintien brut net.
     *
     * @param string|null $typeMaintienBrutNet The type maintien brut net.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTypeMaintienBrutNet(?string $typeMaintienBrutNet): Etablissements2 {
        $this->typeMaintienBrutNet = $typeMaintienBrutNet;
        return $this;
    }
}
