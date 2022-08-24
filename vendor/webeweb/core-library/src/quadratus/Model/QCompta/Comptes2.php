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

/**
 * Comptes2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Comptes2 {

    /**
     * Affacturage.
     *
     * @var bool|null
     */
    private $affacturage;

    /**
     * Bic.
     *
     * @var string|null
     */
    private $bic;

    /**
     * Btq.
     *
     * @var string|null
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string|null
     */
    private $bureauDistributeur;

    /**
     * Code officiel commune.
     *
     * @var string|null
     */
    private $codeOfficielCommune;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Complement suite.
     *
     * @var string|null
     */
    private $complementSuite;

    /**
     * Contrepartie auto.
     *
     * @var string|null
     */
    private $contrepartieAuto;

    /**
     * Cpt four affacturage.
     *
     * @var string|null
     */
    private $cptFourAffacturage;

    /**
     * Cpt origine.
     *
     * @var string|null
     */
    private $cptOrigine;

    /**
     * Dom banque.
     *
     * @var string|null
     */
    private $domBanque;

    /**
     * Dom banque2.
     *
     * @var string|null
     */
    private $domBanque2;

    /**
     * Dom banque3.
     *
     * @var string|null
     */
    private $domBanque3;

    /**
     * Echeance fin decade.
     *
     * @var bool|null
     */
    private $echeanceFinDecade;

    /**
     * Echeance fin quinzaine.
     *
     * @var bool|null
     */
    private $echeanceFinQuinzaine;

    /**
     * Email.
     *
     * @var string|null
     */
    private $email;

    /**
     * Fax.
     *
     * @var string|null
     */
    private $fax;

    /**
     * Iban.
     *
     * @var string|null
     */
    private $iban;

    /**
     * Iban code imput frais.
     *
     * @var string|null
     */
    private $ibanCodeImputFrais;

    /**
     * Ident tva.
     *
     * @var string|null
     */
    private $identTva;

    /**
     * Jour depart echeance.
     *
     * @var int|null
     */
    private $jourDepartEcheance;

    /**
     * Mode paiement.
     *
     * @var string|null
     */
    private $modePaiement;

    /**
     * Nb jours echeance.
     *
     * @var string|null
     */
    private $nbJoursEcheance;

    /**
     * Niveau relance.
     *
     * @var string|null
     */
    private $niveauRelance;

    /**
     * Nom ville.
     *
     * @var string|null
     */
    private $nomVille;

    /**
     * Nom voie.
     *
     * @var string|null
     */
    private $nomVoie;

    /**
     * Num cpt stock.
     *
     * @var string|null
     */
    private $numCptStock;

    /**
     * Num mandat.
     *
     * @var int|null
     */
    private $numMandat;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Pays.
     *
     * @var string|null
     */
    private $pays;

    /**
     * Profession.
     *
     * @var string|null
     */
    private $profession;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Rib2.
     *
     * @var string|null
     */
    private $rib2;

    /**
     * Rib3.
     *
     * @var string|null
     */
    private $rib3;

    /**
     * Siret.
     *
     * @var string|null
     */
    private $siret;

    /**
     * Suivi stock.
     *
     * @var bool|null
     */
    private $suiviStock;

    /**
     * Tel1.
     *
     * @var string|null
     */
    private $tel1;

    /**
     * Tel2.
     *
     * @var string|null
     */
    private $tel2;

    /**
     * Terme echeance le.
     *
     * @var string|null
     */
    private $termeEcheanceLe;

    /**
     * Type suivi.
     *
     * @var string|null
     */
    private $typeSuivi;

    /**
     * Zip code.
     *
     * @var string|null
     */
    private $zipCode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the affacturage.
     *
     * @return bool|null Returns the affacturage.
     */
    public function getAffacturage(): ?bool {
        return $this->affacturage;
    }

    /**
     * Get the bic.
     *
     * @return string|null Returns the bic.
     */
    public function getBic(): ?string {
        return $this->bic;
    }

    /**
     * Get the btq.
     *
     * @return string|null Returns the btq.
     */
    public function getBtq(): ?string {
        return $this->btq;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string|null Returns the bureau distributeur.
     */
    public function getBureauDistributeur(): ?string {
        return $this->bureauDistributeur;
    }

    /**
     * Get the code officiel commune.
     *
     * @return string|null Returns the code officiel commune.
     */
    public function getCodeOfficielCommune(): ?string {
        return $this->codeOfficielCommune;
    }

    /**
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
    }

    /**
     * Get the complement.
     *
     * @return string|null Returns the complement.
     */
    public function getComplement(): ?string {
        return $this->complement;
    }

    /**
     * Get the complement suite.
     *
     * @return string|null Returns the complement suite.
     */
    public function getComplementSuite(): ?string {
        return $this->complementSuite;
    }

    /**
     * Get the contrepartie auto.
     *
     * @return string|null Returns the contrepartie auto.
     */
    public function getContrepartieAuto(): ?string {
        return $this->contrepartieAuto;
    }

    /**
     * Get the cpt four affacturage.
     *
     * @return string|null Returns the cpt four affacturage.
     */
    public function getCptFourAffacturage(): ?string {
        return $this->cptFourAffacturage;
    }

    /**
     * Get the cpt origine.
     *
     * @return string|null Returns the cpt origine.
     */
    public function getCptOrigine(): ?string {
        return $this->cptOrigine;
    }

    /**
     * Get the dom banque.
     *
     * @return string|null Returns the dom banque.
     */
    public function getDomBanque(): ?string {
        return $this->domBanque;
    }

    /**
     * Get the dom banque2.
     *
     * @return string|null Returns the dom banque2.
     */
    public function getDomBanque2(): ?string {
        return $this->domBanque2;
    }

    /**
     * Get the dom banque3.
     *
     * @return string|null Returns the dom banque3.
     */
    public function getDomBanque3(): ?string {
        return $this->domBanque3;
    }

    /**
     * Get the echeance fin decade.
     *
     * @return bool|null Returns the echeance fin decade.
     */
    public function getEcheanceFinDecade(): ?bool {
        return $this->echeanceFinDecade;
    }

    /**
     * Get the echeance fin quinzaine.
     *
     * @return bool|null Returns the echeance fin quinzaine.
     */
    public function getEcheanceFinQuinzaine(): ?bool {
        return $this->echeanceFinQuinzaine;
    }

    /**
     * Get the email.
     *
     * @return string|null Returns the email.
     */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Get the fax.
     *
     * @return string|null Returns the fax.
     */
    public function getFax(): ?string {
        return $this->fax;
    }

    /**
     * Get the iban.
     *
     * @return string|null Returns the iban.
     */
    public function getIban(): ?string {
        return $this->iban;
    }

    /**
     * Get the iban code imput frais.
     *
     * @return string|null Returns the iban code imput frais.
     */
    public function getIbanCodeImputFrais(): ?string {
        return $this->ibanCodeImputFrais;
    }

    /**
     * Get the ident tva.
     *
     * @return string|null Returns the ident tva.
     */
    public function getIdentTva(): ?string {
        return $this->identTva;
    }

    /**
     * Get the jour depart echeance.
     *
     * @return int|null Returns the jour depart echeance.
     */
    public function getJourDepartEcheance(): ?int {
        return $this->jourDepartEcheance;
    }

    /**
     * Get the mode paiement.
     *
     * @return string|null Returns the mode paiement.
     */
    public function getModePaiement(): ?string {
        return $this->modePaiement;
    }

    /**
     * Get the nb jours echeance.
     *
     * @return string|null Returns the nb jours echeance.
     */
    public function getNbJoursEcheance(): ?string {
        return $this->nbJoursEcheance;
    }

    /**
     * Get the niveau relance.
     *
     * @return string|null Returns the niveau relance.
     */
    public function getNiveauRelance(): ?string {
        return $this->niveauRelance;
    }

    /**
     * Get the nom ville.
     *
     * @return string|null Returns the nom ville.
     */
    public function getNomVille(): ?string {
        return $this->nomVille;
    }

    /**
     * Get the nom voie.
     *
     * @return string|null Returns the nom voie.
     */
    public function getNomVoie(): ?string {
        return $this->nomVoie;
    }

    /**
     * Get the num cpt stock.
     *
     * @return string|null Returns the num cpt stock.
     */
    public function getNumCptStock(): ?string {
        return $this->numCptStock;
    }

    /**
     * Get the num mandat.
     *
     * @return int|null Returns the num mandat.
     */
    public function getNumMandat(): ?int {
        return $this->numMandat;
    }

    /**
     * Get the num voie.
     *
     * @return string|null Returns the num voie.
     */
    public function getNumVoie(): ?string {
        return $this->numVoie;
    }

    /**
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
    }

    /**
     * Get the pays.
     *
     * @return string|null Returns the pays.
     */
    public function getPays(): ?string {
        return $this->pays;
    }

    /**
     * Get the profession.
     *
     * @return string|null Returns the profession.
     */
    public function getProfession(): ?string {
        return $this->profession;
    }

    /**
     * Get the rib.
     *
     * @return string|null Returns the rib.
     */
    public function getRib(): ?string {
        return $this->rib;
    }

    /**
     * Get the rib2.
     *
     * @return string|null Returns the rib2.
     */
    public function getRib2(): ?string {
        return $this->rib2;
    }

    /**
     * Get the rib3.
     *
     * @return string|null Returns the rib3.
     */
    public function getRib3(): ?string {
        return $this->rib3;
    }

    /**
     * Get the siret.
     *
     * @return string|null Returns the siret.
     */
    public function getSiret(): ?string {
        return $this->siret;
    }

    /**
     * Get the suivi stock.
     *
     * @return bool|null Returns the suivi stock.
     */
    public function getSuiviStock(): ?bool {
        return $this->suiviStock;
    }

    /**
     * Get the tel1.
     *
     * @return string|null Returns the tel1.
     */
    public function getTel1(): ?string {
        return $this->tel1;
    }

    /**
     * Get the tel2.
     *
     * @return string|null Returns the tel2.
     */
    public function getTel2(): ?string {
        return $this->tel2;
    }

    /**
     * Get the terme echeance le.
     *
     * @return string|null Returns the terme echeance le.
     */
    public function getTermeEcheanceLe(): ?string {
        return $this->termeEcheanceLe;
    }

    /**
     * Get the type suivi.
     *
     * @return string|null Returns the type suivi.
     */
    public function getTypeSuivi(): ?string {
        return $this->typeSuivi;
    }

    /**
     * Get the zip code.
     *
     * @return string|null Returns the zip code.
     */
    public function getZipCode(): ?string {
        return $this->zipCode;
    }

    /**
     * Set the affacturage.
     *
     * @param bool|null $affacturage The affacturage.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setAffacturage(?bool $affacturage): Comptes2 {
        $this->affacturage = $affacturage;
        return $this;
    }

    /**
     * Set the bic.
     *
     * @param string|null $bic The bic.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setBic(?string $bic): Comptes2 {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setBtq(?string $btq): Comptes2 {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Comptes2 {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string|null $codeOfficielCommune The code officiel commune.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setCodeOfficielCommune(?string $codeOfficielCommune): Comptes2 {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setCodePostal(?string $codePostal): Comptes2 {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setComplement(?string $complement): Comptes2 {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the complement suite.
     *
     * @param string|null $complementSuite The complement suite.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setComplementSuite(?string $complementSuite): Comptes2 {
        $this->complementSuite = $complementSuite;
        return $this;
    }

    /**
     * Set the contrepartie auto.
     *
     * @param string|null $contrepartieAuto The contrepartie auto.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setContrepartieAuto(?string $contrepartieAuto): Comptes2 {
        $this->contrepartieAuto = $contrepartieAuto;
        return $this;
    }

    /**
     * Set the cpt four affacturage.
     *
     * @param string|null $cptFourAffacturage The cpt four affacturage.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setCptFourAffacturage(?string $cptFourAffacturage): Comptes2 {
        $this->cptFourAffacturage = $cptFourAffacturage;
        return $this;
    }

    /**
     * Set the cpt origine.
     *
     * @param string|null $cptOrigine The cpt origine.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setCptOrigine(?string $cptOrigine): Comptes2 {
        $this->cptOrigine = $cptOrigine;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string|null $domBanque The dom banque.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setDomBanque(?string $domBanque): Comptes2 {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the dom banque2.
     *
     * @param string|null $domBanque2 The dom banque2.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setDomBanque2(?string $domBanque2): Comptes2 {
        $this->domBanque2 = $domBanque2;
        return $this;
    }

    /**
     * Set the dom banque3.
     *
     * @param string|null $domBanque3 The dom banque3.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setDomBanque3(?string $domBanque3): Comptes2 {
        $this->domBanque3 = $domBanque3;
        return $this;
    }

    /**
     * Set the echeance fin decade.
     *
     * @param bool|null $echeanceFinDecade The echeance fin decade.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setEcheanceFinDecade(?bool $echeanceFinDecade): Comptes2 {
        $this->echeanceFinDecade = $echeanceFinDecade;
        return $this;
    }

    /**
     * Set the echeance fin quinzaine.
     *
     * @param bool|null $echeanceFinQuinzaine The echeance fin quinzaine.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setEcheanceFinQuinzaine(?bool $echeanceFinQuinzaine): Comptes2 {
        $this->echeanceFinQuinzaine = $echeanceFinQuinzaine;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setEmail(?string $email): Comptes2 {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string|null $fax The fax.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setFax(?string $fax): Comptes2 {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setIban(?string $iban): Comptes2 {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the iban code imput frais.
     *
     * @param string|null $ibanCodeImputFrais The iban code imput frais.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setIbanCodeImputFrais(?string $ibanCodeImputFrais): Comptes2 {
        $this->ibanCodeImputFrais = $ibanCodeImputFrais;
        return $this;
    }

    /**
     * Set the ident tva.
     *
     * @param string|null $identTva The ident tva.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setIdentTva(?string $identTva): Comptes2 {
        $this->identTva = $identTva;
        return $this;
    }

    /**
     * Set the jour depart echeance.
     *
     * @param int|null $jourDepartEcheance The jour depart echeance.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setJourDepartEcheance(?int $jourDepartEcheance): Comptes2 {
        $this->jourDepartEcheance = $jourDepartEcheance;
        return $this;
    }

    /**
     * Set the mode paiement.
     *
     * @param string|null $modePaiement The mode paiement.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setModePaiement(?string $modePaiement): Comptes2 {
        $this->modePaiement = $modePaiement;
        return $this;
    }

    /**
     * Set the nb jours echeance.
     *
     * @param string|null $nbJoursEcheance The nb jours echeance.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setNbJoursEcheance(?string $nbJoursEcheance): Comptes2 {
        $this->nbJoursEcheance = $nbJoursEcheance;
        return $this;
    }

    /**
     * Set the niveau relance.
     *
     * @param string|null $niveauRelance The niveau relance.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setNiveauRelance(?string $niveauRelance): Comptes2 {
        $this->niveauRelance = $niveauRelance;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setNomVille(?string $nomVille): Comptes2 {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setNomVoie(?string $nomVoie): Comptes2 {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num cpt stock.
     *
     * @param string|null $numCptStock The num cpt stock.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setNumCptStock(?string $numCptStock): Comptes2 {
        $this->numCptStock = $numCptStock;
        return $this;
    }

    /**
     * Set the num mandat.
     *
     * @param int|null $numMandat The num mandat.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setNumMandat(?int $numMandat): Comptes2 {
        $this->numMandat = $numMandat;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setNumVoie(?string $numVoie): Comptes2 {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setNumeroCompte(?string $numeroCompte): Comptes2 {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the pays.
     *
     * @param string|null $pays The pays.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setPays(?string $pays): Comptes2 {
        $this->pays = $pays;
        return $this;
    }

    /**
     * Set the profession.
     *
     * @param string|null $profession The profession.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setProfession(?string $profession): Comptes2 {
        $this->profession = $profession;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setRib(?string $rib): Comptes2 {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the rib2.
     *
     * @param string|null $rib2 The rib2.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setRib2(?string $rib2): Comptes2 {
        $this->rib2 = $rib2;
        return $this;
    }

    /**
     * Set the rib3.
     *
     * @param string|null $rib3 The rib3.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setRib3(?string $rib3): Comptes2 {
        $this->rib3 = $rib3;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setSiret(?string $siret): Comptes2 {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the suivi stock.
     *
     * @param bool|null $suiviStock The suivi stock.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setSuiviStock(?bool $suiviStock): Comptes2 {
        $this->suiviStock = $suiviStock;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string|null $tel1 The tel1.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setTel1(?string $tel1): Comptes2 {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string|null $tel2 The tel2.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setTel2(?string $tel2): Comptes2 {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the terme echeance le.
     *
     * @param string|null $termeEcheanceLe The terme echeance le.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setTermeEcheanceLe(?string $termeEcheanceLe): Comptes2 {
        $this->termeEcheanceLe = $termeEcheanceLe;
        return $this;
    }

    /**
     * Set the type suivi.
     *
     * @param string|null $typeSuivi The type suivi.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setTypeSuivi(?string $typeSuivi): Comptes2 {
        $this->typeSuivi = $typeSuivi;
        return $this;
    }

    /**
     * Set the zip code.
     *
     * @param string|null $zipCode The zip code.
     * @return Comptes2 Returns this Comptes2.
     */
    public function setZipCode(?string $zipCode): Comptes2 {
        $this->zipCode = $zipCode;
        return $this;
    }
}
