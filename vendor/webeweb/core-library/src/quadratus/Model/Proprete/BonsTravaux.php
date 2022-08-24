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
 * Bons travaux.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class BonsTravaux {

    /**
     * Ad bt bureau distributeur.
     *
     * @var string|null
     */
    private $adBtBureauDistributeur;

    /**
     * Ad bt civilite.
     *
     * @var string|null
     */
    private $adBtCivilite;

    /**
     * Ad bt code pays.
     *
     * @var string|null
     */
    private $adBtCodePays;

    /**
     * Ad bt code postal.
     *
     * @var string|null
     */
    private $adBtCodePostal;

    /**
     * Ad bt complement.
     *
     * @var string|null
     */
    private $adBtComplement;

    /**
     * Ad bt nom.
     *
     * @var string|null
     */
    private $adBtNom;

    /**
     * Ad bt nom suite.
     *
     * @var string|null
     */
    private $adBtNomSuite;

    /**
     * Ad bt nom voie.
     *
     * @var string|null
     */
    private $adBtNomVoie;

    /**
     * Ad bt num voie.
     *
     * @var string|null
     */
    private $adBtNumVoie;

    /**
     * Ad btbtq.
     *
     * @var string|null
     */
    private $adBtbtq;

    /**
     * Ad f bureau distributeur.
     *
     * @var string|null
     */
    private $adFBureauDistributeur;

    /**
     * Ad f civilite.
     *
     * @var string|null
     */
    private $adFCivilite;

    /**
     * Ad f code pays.
     *
     * @var string|null
     */
    private $adFCodePays;

    /**
     * Ad f code postal.
     *
     * @var string|null
     */
    private $adFCodePostal;

    /**
     * Ad f complement.
     *
     * @var string|null
     */
    private $adFComplement;

    /**
     * Ad f nom.
     *
     * @var string|null
     */
    private $adFNom;

    /**
     * Ad f nom suite.
     *
     * @var string|null
     */
    private $adFNomSuite;

    /**
     * Ad f nom suite2.
     *
     * @var string|null
     */
    private $adFNomSuite2;

    /**
     * Ad f nom suite3.
     *
     * @var string|null
     */
    private $adFNomSuite3;

    /**
     * Ad f nom voie.
     *
     * @var string|null
     */
    private $adFNomVoie;

    /**
     * Ad f num voie.
     *
     * @var string|null
     */
    private $adFNumVoie;

    /**
     * Ad fbtq.
     *
     * @var string|null
     */
    private $adFbtq;

    /**
     * Adresse bt saisie.
     *
     * @var bool|null
     */
    private $adresseBtSaisie;

    /**
     * Adresse facturation saisie.
     *
     * @var bool|null
     */
    private $adresseFacturationSaisie;

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
     * Code frequence.
     *
     * @var string|null
     */
    private $codeFrequence;

    /**
     * Code tache bt.
     *
     * @var string|null
     */
    private $codeTacheBt;

    /**
     * Code tournee.
     *
     * @var string|null
     */
    private $codeTournee;

    /**
     * Critere liste1.
     *
     * @var string|null
     */
    private $critereListe1;

    /**
     * Critere liste2.
     *
     * @var string|null
     */
    private $critereListe2;

    /**
     * Critere numerique1.
     *
     * @var float|null
     */
    private $critereNumerique1;

    /**
     * Critere numerique2.
     *
     * @var float|null
     */
    private $critereNumerique2;

    /**
     * Critere texte1.
     *
     * @var string|null
     */
    private $critereTexte1;

    /**
     * Critere texte2.
     *
     * @var string|null
     */
    private $critereTexte2;

    /**
     * Date dernier passage.
     *
     * @var DateTime|null
     */
    private $dateDernierPassage;

    /**
     * Date fin validite.
     *
     * @var DateTime|null
     */
    private $dateFinValidite;

    /**
     * Date premier passage.
     *
     * @var DateTime|null
     */
    private $datePremierPassage;

    /**
     * Date validite.
     *
     * @var DateTime|null
     */
    private $dateValidite;

    /**
     * Description.
     *
     * @var string|null
     */
    private $description;

    /**
     * Equipe.
     *
     * @var string|null
     */
    private $equipe;

    /**
     * Frequence.
     *
     * @var string|null
     */
    private $frequence;

    /**
     * Frequence suite.
     *
     * @var string|null
     */
    private $frequenceSuite;

    /**
     * Gestion planning.
     *
     * @var bool|null
     */
    private $gestionPlanning;

    /**
     * Heure deb.
     *
     * @var DateTime|null
     */
    private $heureDeb;

    /**
     * Latitude.
     *
     * @var float|null
     */
    private $latitude;

    /**
     * Longitude.
     *
     * @var float|null
     */
    private $longitude;

    /**
     * Mention speciale.
     *
     * @var string|null
     */
    private $mentionSpeciale;

    /**
     * Nb heures.
     *
     * @var float|null
     */
    private $nbHeures;

    /**
     * Nb jours.
     *
     * @var float|null
     */
    private $nbJours;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Poste rent.
     *
     * @var string|null
     */
    private $posteRent;

    /**
     * Saisie inter jour.
     *
     * @var bool|null
     */
    private $saisieInterJour;

    /**
     * Travaille dimanche.
     *
     * @var bool|null
     */
    private $travailleDimanche;

    /**
     * Travaille jours feries.
     *
     * @var bool|null
     */
    private $travailleJoursFeries;

    /**
     * Travaille samedi.
     *
     * @var bool|null
     */
    private $travailleSamedi;

    /**
     * Type frequence.
     *
     * @var string|null
     */
    private $typeFrequence;

    /**
     * Un bon par mois.
     *
     * @var bool|null
     */
    private $unBonParMois;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ad bt bureau distributeur.
     *
     * @return string|null Returns the ad bt bureau distributeur.
     */
    public function getAdBtBureauDistributeur(): ?string {
        return $this->adBtBureauDistributeur;
    }

    /**
     * Get the ad bt civilite.
     *
     * @return string|null Returns the ad bt civilite.
     */
    public function getAdBtCivilite(): ?string {
        return $this->adBtCivilite;
    }

    /**
     * Get the ad bt code pays.
     *
     * @return string|null Returns the ad bt code pays.
     */
    public function getAdBtCodePays(): ?string {
        return $this->adBtCodePays;
    }

    /**
     * Get the ad bt code postal.
     *
     * @return string|null Returns the ad bt code postal.
     */
    public function getAdBtCodePostal(): ?string {
        return $this->adBtCodePostal;
    }

    /**
     * Get the ad bt complement.
     *
     * @return string|null Returns the ad bt complement.
     */
    public function getAdBtComplement(): ?string {
        return $this->adBtComplement;
    }

    /**
     * Get the ad bt nom.
     *
     * @return string|null Returns the ad bt nom.
     */
    public function getAdBtNom(): ?string {
        return $this->adBtNom;
    }

    /**
     * Get the ad bt nom suite.
     *
     * @return string|null Returns the ad bt nom suite.
     */
    public function getAdBtNomSuite(): ?string {
        return $this->adBtNomSuite;
    }

    /**
     * Get the ad bt nom voie.
     *
     * @return string|null Returns the ad bt nom voie.
     */
    public function getAdBtNomVoie(): ?string {
        return $this->adBtNomVoie;
    }

    /**
     * Get the ad bt num voie.
     *
     * @return string|null Returns the ad bt num voie.
     */
    public function getAdBtNumVoie(): ?string {
        return $this->adBtNumVoie;
    }

    /**
     * Get the ad btbtq.
     *
     * @return string|null Returns the ad btbtq.
     */
    public function getAdBtbtq(): ?string {
        return $this->adBtbtq;
    }

    /**
     * Get the ad f bureau distributeur.
     *
     * @return string|null Returns the ad f bureau distributeur.
     */
    public function getAdFBureauDistributeur(): ?string {
        return $this->adFBureauDistributeur;
    }

    /**
     * Get the ad f civilite.
     *
     * @return string|null Returns the ad f civilite.
     */
    public function getAdFCivilite(): ?string {
        return $this->adFCivilite;
    }

    /**
     * Get the ad f code pays.
     *
     * @return string|null Returns the ad f code pays.
     */
    public function getAdFCodePays(): ?string {
        return $this->adFCodePays;
    }

    /**
     * Get the ad f code postal.
     *
     * @return string|null Returns the ad f code postal.
     */
    public function getAdFCodePostal(): ?string {
        return $this->adFCodePostal;
    }

    /**
     * Get the ad f complement.
     *
     * @return string|null Returns the ad f complement.
     */
    public function getAdFComplement(): ?string {
        return $this->adFComplement;
    }

    /**
     * Get the ad f nom.
     *
     * @return string|null Returns the ad f nom.
     */
    public function getAdFNom(): ?string {
        return $this->adFNom;
    }

    /**
     * Get the ad f nom suite.
     *
     * @return string|null Returns the ad f nom suite.
     */
    public function getAdFNomSuite(): ?string {
        return $this->adFNomSuite;
    }

    /**
     * Get the ad f nom suite2.
     *
     * @return string|null Returns the ad f nom suite2.
     */
    public function getAdFNomSuite2(): ?string {
        return $this->adFNomSuite2;
    }

    /**
     * Get the ad f nom suite3.
     *
     * @return string|null Returns the ad f nom suite3.
     */
    public function getAdFNomSuite3(): ?string {
        return $this->adFNomSuite3;
    }

    /**
     * Get the ad f nom voie.
     *
     * @return string|null Returns the ad f nom voie.
     */
    public function getAdFNomVoie(): ?string {
        return $this->adFNomVoie;
    }

    /**
     * Get the ad f num voie.
     *
     * @return string|null Returns the ad f num voie.
     */
    public function getAdFNumVoie(): ?string {
        return $this->adFNumVoie;
    }

    /**
     * Get the ad fbtq.
     *
     * @return string|null Returns the ad fbtq.
     */
    public function getAdFbtq(): ?string {
        return $this->adFbtq;
    }

    /**
     * Get the adresse bt saisie.
     *
     * @return bool|null Returns the adresse bt saisie.
     */
    public function getAdresseBtSaisie(): ?bool {
        return $this->adresseBtSaisie;
    }

    /**
     * Get the adresse facturation saisie.
     *
     * @return bool|null Returns the adresse facturation saisie.
     */
    public function getAdresseFacturationSaisie(): ?bool {
        return $this->adresseFacturationSaisie;
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
     * Get the code frequence.
     *
     * @return string|null Returns the code frequence.
     */
    public function getCodeFrequence(): ?string {
        return $this->codeFrequence;
    }

    /**
     * Get the code tache bt.
     *
     * @return string|null Returns the code tache bt.
     */
    public function getCodeTacheBt(): ?string {
        return $this->codeTacheBt;
    }

    /**
     * Get the code tournee.
     *
     * @return string|null Returns the code tournee.
     */
    public function getCodeTournee(): ?string {
        return $this->codeTournee;
    }

    /**
     * Get the critere liste1.
     *
     * @return string|null Returns the critere liste1.
     */
    public function getCritereListe1(): ?string {
        return $this->critereListe1;
    }

    /**
     * Get the critere liste2.
     *
     * @return string|null Returns the critere liste2.
     */
    public function getCritereListe2(): ?string {
        return $this->critereListe2;
    }

    /**
     * Get the critere numerique1.
     *
     * @return float|null Returns the critere numerique1.
     */
    public function getCritereNumerique1(): ?float {
        return $this->critereNumerique1;
    }

    /**
     * Get the critere numerique2.
     *
     * @return float|null Returns the critere numerique2.
     */
    public function getCritereNumerique2(): ?float {
        return $this->critereNumerique2;
    }

    /**
     * Get the critere texte1.
     *
     * @return string|null Returns the critere texte1.
     */
    public function getCritereTexte1(): ?string {
        return $this->critereTexte1;
    }

    /**
     * Get the critere texte2.
     *
     * @return string|null Returns the critere texte2.
     */
    public function getCritereTexte2(): ?string {
        return $this->critereTexte2;
    }

    /**
     * Get the date dernier passage.
     *
     * @return DateTime|null Returns the date dernier passage.
     */
    public function getDateDernierPassage(): ?DateTime {
        return $this->dateDernierPassage;
    }

    /**
     * Get the date fin validite.
     *
     * @return DateTime|null Returns the date fin validite.
     */
    public function getDateFinValidite(): ?DateTime {
        return $this->dateFinValidite;
    }

    /**
     * Get the date premier passage.
     *
     * @return DateTime|null Returns the date premier passage.
     */
    public function getDatePremierPassage(): ?DateTime {
        return $this->datePremierPassage;
    }

    /**
     * Get the date validite.
     *
     * @return DateTime|null Returns the date validite.
     */
    public function getDateValidite(): ?DateTime {
        return $this->dateValidite;
    }

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Get the equipe.
     *
     * @return string|null Returns the equipe.
     */
    public function getEquipe(): ?string {
        return $this->equipe;
    }

    /**
     * Get the frequence.
     *
     * @return string|null Returns the frequence.
     */
    public function getFrequence(): ?string {
        return $this->frequence;
    }

    /**
     * Get the frequence suite.
     *
     * @return string|null Returns the frequence suite.
     */
    public function getFrequenceSuite(): ?string {
        return $this->frequenceSuite;
    }

    /**
     * Get the gestion planning.
     *
     * @return bool|null Returns the gestion planning.
     */
    public function getGestionPlanning(): ?bool {
        return $this->gestionPlanning;
    }

    /**
     * Get the heure deb.
     *
     * @return DateTime|null Returns the heure deb.
     */
    public function getHeureDeb(): ?DateTime {
        return $this->heureDeb;
    }

    /**
     * Get the latitude.
     *
     * @return float|null Returns the latitude.
     */
    public function getLatitude(): ?float {
        return $this->latitude;
    }

    /**
     * Get the longitude.
     *
     * @return float|null Returns the longitude.
     */
    public function getLongitude(): ?float {
        return $this->longitude;
    }

    /**
     * Get the mention speciale.
     *
     * @return string|null Returns the mention speciale.
     */
    public function getMentionSpeciale(): ?string {
        return $this->mentionSpeciale;
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
     * Get the nb jours.
     *
     * @return float|null Returns the nb jours.
     */
    public function getNbJours(): ?float {
        return $this->nbJours;
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
     * Get the poste rent.
     *
     * @return string|null Returns the poste rent.
     */
    public function getPosteRent(): ?string {
        return $this->posteRent;
    }

    /**
     * Get the saisie inter jour.
     *
     * @return bool|null Returns the saisie inter jour.
     */
    public function getSaisieInterJour(): ?bool {
        return $this->saisieInterJour;
    }

    /**
     * Get the travaille dimanche.
     *
     * @return bool|null Returns the travaille dimanche.
     */
    public function getTravailleDimanche(): ?bool {
        return $this->travailleDimanche;
    }

    /**
     * Get the travaille jours feries.
     *
     * @return bool|null Returns the travaille jours feries.
     */
    public function getTravailleJoursFeries(): ?bool {
        return $this->travailleJoursFeries;
    }

    /**
     * Get the travaille samedi.
     *
     * @return bool|null Returns the travaille samedi.
     */
    public function getTravailleSamedi(): ?bool {
        return $this->travailleSamedi;
    }

    /**
     * Get the type frequence.
     *
     * @return string|null Returns the type frequence.
     */
    public function getTypeFrequence(): ?string {
        return $this->typeFrequence;
    }

    /**
     * Get the un bon par mois.
     *
     * @return bool|null Returns the un bon par mois.
     */
    public function getUnBonParMois(): ?bool {
        return $this->unBonParMois;
    }

    /**
     * Set the ad bt bureau distributeur.
     *
     * @param string|null $adBtBureauDistributeur The ad bt bureau distributeur.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdBtBureauDistributeur(?string $adBtBureauDistributeur): BonsTravaux {
        $this->adBtBureauDistributeur = $adBtBureauDistributeur;
        return $this;
    }

    /**
     * Set the ad bt civilite.
     *
     * @param string|null $adBtCivilite The ad bt civilite.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdBtCivilite(?string $adBtCivilite): BonsTravaux {
        $this->adBtCivilite = $adBtCivilite;
        return $this;
    }

    /**
     * Set the ad bt code pays.
     *
     * @param string|null $adBtCodePays The ad bt code pays.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdBtCodePays(?string $adBtCodePays): BonsTravaux {
        $this->adBtCodePays = $adBtCodePays;
        return $this;
    }

    /**
     * Set the ad bt code postal.
     *
     * @param string|null $adBtCodePostal The ad bt code postal.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdBtCodePostal(?string $adBtCodePostal): BonsTravaux {
        $this->adBtCodePostal = $adBtCodePostal;
        return $this;
    }

    /**
     * Set the ad bt complement.
     *
     * @param string|null $adBtComplement The ad bt complement.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdBtComplement(?string $adBtComplement): BonsTravaux {
        $this->adBtComplement = $adBtComplement;
        return $this;
    }

    /**
     * Set the ad bt nom.
     *
     * @param string|null $adBtNom The ad bt nom.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdBtNom(?string $adBtNom): BonsTravaux {
        $this->adBtNom = $adBtNom;
        return $this;
    }

    /**
     * Set the ad bt nom suite.
     *
     * @param string|null $adBtNomSuite The ad bt nom suite.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdBtNomSuite(?string $adBtNomSuite): BonsTravaux {
        $this->adBtNomSuite = $adBtNomSuite;
        return $this;
    }

    /**
     * Set the ad bt nom voie.
     *
     * @param string|null $adBtNomVoie The ad bt nom voie.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdBtNomVoie(?string $adBtNomVoie): BonsTravaux {
        $this->adBtNomVoie = $adBtNomVoie;
        return $this;
    }

    /**
     * Set the ad bt num voie.
     *
     * @param string|null $adBtNumVoie The ad bt num voie.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdBtNumVoie(?string $adBtNumVoie): BonsTravaux {
        $this->adBtNumVoie = $adBtNumVoie;
        return $this;
    }

    /**
     * Set the ad btbtq.
     *
     * @param string|null $adBtbtq The ad btbtq.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdBtbtq(?string $adBtbtq): BonsTravaux {
        $this->adBtbtq = $adBtbtq;
        return $this;
    }

    /**
     * Set the ad f bureau distributeur.
     *
     * @param string|null $adFBureauDistributeur The ad f bureau distributeur.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdFBureauDistributeur(?string $adFBureauDistributeur): BonsTravaux {
        $this->adFBureauDistributeur = $adFBureauDistributeur;
        return $this;
    }

    /**
     * Set the ad f civilite.
     *
     * @param string|null $adFCivilite The ad f civilite.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdFCivilite(?string $adFCivilite): BonsTravaux {
        $this->adFCivilite = $adFCivilite;
        return $this;
    }

    /**
     * Set the ad f code pays.
     *
     * @param string|null $adFCodePays The ad f code pays.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdFCodePays(?string $adFCodePays): BonsTravaux {
        $this->adFCodePays = $adFCodePays;
        return $this;
    }

    /**
     * Set the ad f code postal.
     *
     * @param string|null $adFCodePostal The ad f code postal.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdFCodePostal(?string $adFCodePostal): BonsTravaux {
        $this->adFCodePostal = $adFCodePostal;
        return $this;
    }

    /**
     * Set the ad f complement.
     *
     * @param string|null $adFComplement The ad f complement.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdFComplement(?string $adFComplement): BonsTravaux {
        $this->adFComplement = $adFComplement;
        return $this;
    }

    /**
     * Set the ad f nom.
     *
     * @param string|null $adFNom The ad f nom.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdFNom(?string $adFNom): BonsTravaux {
        $this->adFNom = $adFNom;
        return $this;
    }

    /**
     * Set the ad f nom suite.
     *
     * @param string|null $adFNomSuite The ad f nom suite.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdFNomSuite(?string $adFNomSuite): BonsTravaux {
        $this->adFNomSuite = $adFNomSuite;
        return $this;
    }

    /**
     * Set the ad f nom suite2.
     *
     * @param string|null $adFNomSuite2 The ad f nom suite2.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdFNomSuite2(?string $adFNomSuite2): BonsTravaux {
        $this->adFNomSuite2 = $adFNomSuite2;
        return $this;
    }

    /**
     * Set the ad f nom suite3.
     *
     * @param string|null $adFNomSuite3 The ad f nom suite3.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdFNomSuite3(?string $adFNomSuite3): BonsTravaux {
        $this->adFNomSuite3 = $adFNomSuite3;
        return $this;
    }

    /**
     * Set the ad f nom voie.
     *
     * @param string|null $adFNomVoie The ad f nom voie.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdFNomVoie(?string $adFNomVoie): BonsTravaux {
        $this->adFNomVoie = $adFNomVoie;
        return $this;
    }

    /**
     * Set the ad f num voie.
     *
     * @param string|null $adFNumVoie The ad f num voie.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdFNumVoie(?string $adFNumVoie): BonsTravaux {
        $this->adFNumVoie = $adFNumVoie;
        return $this;
    }

    /**
     * Set the ad fbtq.
     *
     * @param string|null $adFbtq The ad fbtq.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdFbtq(?string $adFbtq): BonsTravaux {
        $this->adFbtq = $adFbtq;
        return $this;
    }

    /**
     * Set the adresse bt saisie.
     *
     * @param bool|null $adresseBtSaisie The adresse bt saisie.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdresseBtSaisie(?bool $adresseBtSaisie): BonsTravaux {
        $this->adresseBtSaisie = $adresseBtSaisie;
        return $this;
    }

    /**
     * Set the adresse facturation saisie.
     *
     * @param bool|null $adresseFacturationSaisie The adresse facturation saisie.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setAdresseFacturationSaisie(?bool $adresseFacturationSaisie): BonsTravaux {
        $this->adresseFacturationSaisie = $adresseFacturationSaisie;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setCodeAffaire(?string $codeAffaire): BonsTravaux {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setCodeChantier(?string $codeChantier): BonsTravaux {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setCodeClient(?string $codeClient): BonsTravaux {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code frequence.
     *
     * @param string|null $codeFrequence The code frequence.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setCodeFrequence(?string $codeFrequence): BonsTravaux {
        $this->codeFrequence = $codeFrequence;
        return $this;
    }

    /**
     * Set the code tache bt.
     *
     * @param string|null $codeTacheBt The code tache bt.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setCodeTacheBt(?string $codeTacheBt): BonsTravaux {
        $this->codeTacheBt = $codeTacheBt;
        return $this;
    }

    /**
     * Set the code tournee.
     *
     * @param string|null $codeTournee The code tournee.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setCodeTournee(?string $codeTournee): BonsTravaux {
        $this->codeTournee = $codeTournee;
        return $this;
    }

    /**
     * Set the critere liste1.
     *
     * @param string|null $critereListe1 The critere liste1.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setCritereListe1(?string $critereListe1): BonsTravaux {
        $this->critereListe1 = $critereListe1;
        return $this;
    }

    /**
     * Set the critere liste2.
     *
     * @param string|null $critereListe2 The critere liste2.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setCritereListe2(?string $critereListe2): BonsTravaux {
        $this->critereListe2 = $critereListe2;
        return $this;
    }

    /**
     * Set the critere numerique1.
     *
     * @param float|null $critereNumerique1 The critere numerique1.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setCritereNumerique1(?float $critereNumerique1): BonsTravaux {
        $this->critereNumerique1 = $critereNumerique1;
        return $this;
    }

    /**
     * Set the critere numerique2.
     *
     * @param float|null $critereNumerique2 The critere numerique2.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setCritereNumerique2(?float $critereNumerique2): BonsTravaux {
        $this->critereNumerique2 = $critereNumerique2;
        return $this;
    }

    /**
     * Set the critere texte1.
     *
     * @param string|null $critereTexte1 The critere texte1.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setCritereTexte1(?string $critereTexte1): BonsTravaux {
        $this->critereTexte1 = $critereTexte1;
        return $this;
    }

    /**
     * Set the critere texte2.
     *
     * @param string|null $critereTexte2 The critere texte2.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setCritereTexte2(?string $critereTexte2): BonsTravaux {
        $this->critereTexte2 = $critereTexte2;
        return $this;
    }

    /**
     * Set the date dernier passage.
     *
     * @param DateTime|null $dateDernierPassage The date dernier passage.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setDateDernierPassage(?DateTime $dateDernierPassage): BonsTravaux {
        $this->dateDernierPassage = $dateDernierPassage;
        return $this;
    }

    /**
     * Set the date fin validite.
     *
     * @param DateTime|null $dateFinValidite The date fin validite.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setDateFinValidite(?DateTime $dateFinValidite): BonsTravaux {
        $this->dateFinValidite = $dateFinValidite;
        return $this;
    }

    /**
     * Set the date premier passage.
     *
     * @param DateTime|null $datePremierPassage The date premier passage.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setDatePremierPassage(?DateTime $datePremierPassage): BonsTravaux {
        $this->datePremierPassage = $datePremierPassage;
        return $this;
    }

    /**
     * Set the date validite.
     *
     * @param DateTime|null $dateValidite The date validite.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setDateValidite(?DateTime $dateValidite): BonsTravaux {
        $this->dateValidite = $dateValidite;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setDescription(?string $description): BonsTravaux {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the equipe.
     *
     * @param string|null $equipe The equipe.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setEquipe(?string $equipe): BonsTravaux {
        $this->equipe = $equipe;
        return $this;
    }

    /**
     * Set the frequence.
     *
     * @param string|null $frequence The frequence.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setFrequence(?string $frequence): BonsTravaux {
        $this->frequence = $frequence;
        return $this;
    }

    /**
     * Set the frequence suite.
     *
     * @param string|null $frequenceSuite The frequence suite.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setFrequenceSuite(?string $frequenceSuite): BonsTravaux {
        $this->frequenceSuite = $frequenceSuite;
        return $this;
    }

    /**
     * Set the gestion planning.
     *
     * @param bool|null $gestionPlanning The gestion planning.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setGestionPlanning(?bool $gestionPlanning): BonsTravaux {
        $this->gestionPlanning = $gestionPlanning;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime|null $heureDeb The heure deb.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setHeureDeb(?DateTime $heureDeb): BonsTravaux {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the latitude.
     *
     * @param float|null $latitude The latitude.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setLatitude(?float $latitude): BonsTravaux {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Set the longitude.
     *
     * @param float|null $longitude The longitude.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setLongitude(?float $longitude): BonsTravaux {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Set the mention speciale.
     *
     * @param string|null $mentionSpeciale The mention speciale.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setMentionSpeciale(?string $mentionSpeciale): BonsTravaux {
        $this->mentionSpeciale = $mentionSpeciale;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float|null $nbHeures The nb heures.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setNbHeures(?float $nbHeures): BonsTravaux {
        $this->nbHeures = $nbHeures;
        return $this;
    }

    /**
     * Set the nb jours.
     *
     * @param float|null $nbJours The nb jours.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setNbJours(?float $nbJours): BonsTravaux {
        $this->nbJours = $nbJours;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setNumBt(?int $numBt): BonsTravaux {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setPosteRent(?string $posteRent): BonsTravaux {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the saisie inter jour.
     *
     * @param bool|null $saisieInterJour The saisie inter jour.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setSaisieInterJour(?bool $saisieInterJour): BonsTravaux {
        $this->saisieInterJour = $saisieInterJour;
        return $this;
    }

    /**
     * Set the travaille dimanche.
     *
     * @param bool|null $travailleDimanche The travaille dimanche.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setTravailleDimanche(?bool $travailleDimanche): BonsTravaux {
        $this->travailleDimanche = $travailleDimanche;
        return $this;
    }

    /**
     * Set the travaille jours feries.
     *
     * @param bool|null $travailleJoursFeries The travaille jours feries.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setTravailleJoursFeries(?bool $travailleJoursFeries): BonsTravaux {
        $this->travailleJoursFeries = $travailleJoursFeries;
        return $this;
    }

    /**
     * Set the travaille samedi.
     *
     * @param bool|null $travailleSamedi The travaille samedi.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setTravailleSamedi(?bool $travailleSamedi): BonsTravaux {
        $this->travailleSamedi = $travailleSamedi;
        return $this;
    }

    /**
     * Set the type frequence.
     *
     * @param string|null $typeFrequence The type frequence.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setTypeFrequence(?string $typeFrequence): BonsTravaux {
        $this->typeFrequence = $typeFrequence;
        return $this;
    }

    /**
     * Set the un bon par mois.
     *
     * @param bool|null $unBonParMois The un bon par mois.
     * @return BonsTravaux Returns this Bons travaux.
     */
    public function setUnBonParMois(?bool $unBonParMois): BonsTravaux {
        $this->unBonParMois = $unBonParMois;
        return $this;
    }
}
