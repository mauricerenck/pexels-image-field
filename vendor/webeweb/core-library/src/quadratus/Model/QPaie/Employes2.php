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
 * Employes2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Employes2 {

    /**
     * A declarer cp.
     *
     * @var bool|null
     */
    private $aDeclarerCp;

    /**
     * Active sal min conv.
     *
     * @var bool|null
     */
    private $activeSalMinConv;

    /**
     * Active smic.
     *
     * @var bool|null
     */
    private $activeSmic;

    /**
     * Aen logement.
     *
     * @var bool|null
     */
    private $aenLogement;

    /**
     * Alleg particulier emp.
     *
     * @var string|null
     */
    private $allegParticulierEmp;

    /**
     * Arbitrage auto.
     *
     * @var string|null
     */
    private $arbitrageAuto;

    /**
     * Autre alleg emp.
     *
     * @var string|null
     */
    private $autreAllegEmp;

    /**
     * Bic.
     *
     * @var string|null
     */
    private $bic;

    /**
     * Caisse cp.
     *
     * @var string|null
     */
    private $caisseCp;

    /**
     * Centre analytique.
     *
     * @var string|null
     */
    private $centreAnalytique;

    /**
     * Chef equipe.
     *
     * @var bool|null
     */
    private $chefEquipe;

    /**
     * Cie plus50.
     *
     * @var bool|null
     */
    private $ciePlus50;

    /**
     * Code analytique proprete.
     *
     * @var string|null
     */
    private $codeAnalytiqueProprete;

    /**
     * Code emp remplace.
     *
     * @var string|null
     */
    private $codeEmpRemplace;

    /**
     * Code insee.
     *
     * @var string|null
     */
    private $codeInsee;

    /**
     * Code motif rupture1.
     *
     * @var string|null
     */
    private $codeMotifRupture1;

    /**
     * Code motif rupture2.
     *
     * @var string|null
     */
    private $codeMotifRupture2;

    /**
     * Code pays residence.
     *
     * @var string|null
     */
    private $codePaysResidence;

    /**
     * Code tuteur.
     *
     * @var string|null
     */
    private $codeTuteur;

    /**
     * Coeff convention.
     *
     * @var string|null
     */
    private $coeffConvention;

    /**
     * Commercial.
     *
     * @var bool|null
     */
    private $commercial;

    /**
     * Complement pcs.
     *
     * @var string|null
     */
    private $complementPcs;

    /**
     * Conjoint exploitant.
     *
     * @var bool|null
     */
    private $conjointExploitant;

    /**
     * Contrat cne.
     *
     * @var bool|null
     */
    private $contratCne;

    /**
     * Cotis base penibilite.
     *
     * @var bool|null
     */
    private $cotisBasePenibilite;

    /**
     * Critere tri abs conges1.
     *
     * @var string|null
     */
    private $critereTriAbsConges1;

    /**
     * Critere tri abs conges2.
     *
     * @var string|null
     */
    private $critereTriAbsConges2;

    /**
     * Critere tri abs conges3.
     *
     * @var string|null
     */
    private $critereTriAbsConges3;

    /**
     * Cum base tr2.
     *
     * @var float|null
     */
    private $cumBaseTr2;

    /**
     * Cum base tr d.
     *
     * @var float|null
     */
    private $cumBaseTrD;

    /**
     * Cum base tr d1.
     *
     * @var float|null
     */
    private $cumBaseTrD1;

    /**
     * Cum base tr d1 caisse1.
     *
     * @var float|null
     */
    private $cumBaseTrD1Caisse1;

    /**
     * Cum base tr d1 caisse2.
     *
     * @var float|null
     */
    private $cumBaseTrD1Caisse2;

    /**
     * Cum base tr d1 caisse3.
     *
     * @var float|null
     */
    private $cumBaseTrD1Caisse3;

    /**
     * Cum base tr d caisse1.
     *
     * @var float|null
     */
    private $cumBaseTrDCaisse1;

    /**
     * Cum base tr d caisse2.
     *
     * @var float|null
     */
    private $cumBaseTrDCaisse2;

    /**
     * Cum base tr d caisse3.
     *
     * @var float|null
     */
    private $cumBaseTrDCaisse3;

    /**
     * Cum brut al sans si.
     *
     * @var float|null
     */
    private $cumBrutAlSansSi;

    /**
     * Cum brut caisse1.
     *
     * @var float|null
     */
    private $cumBrutCaisse1;

    /**
     * Cum brut caisse2.
     *
     * @var float|null
     */
    private $cumBrutCaisse2;

    /**
     * Cum brut caisse3.
     *
     * @var float|null
     */
    private $cumBrutCaisse3;

    /**
     * Cum dif dus.
     *
     * @var float|null
     */
    private $cumDifDus;

    /**
     * Cum dif dus1.
     *
     * @var float|null
     */
    private $cumDifDus1;

    /**
     * Cum h bonifie.
     *
     * @var float|null
     */
    private $cumHBonifie;

    /**
     * Cum rtt dus.
     *
     * @var float|null
     */
    private $cumRttDus;

    /**
     * Cum rtt pris.
     *
     * @var float|null
     */
    private $cumRttPris;

    /**
     * Cum tot si.
     *
     * @var float|null
     */
    private $cumTotSi;

    /**
     * Cum tranche2 sans si.
     *
     * @var float|null
     */
    private $cumTranche2SansSi;

    /**
     * Cum tranche2 si.
     *
     * @var float|null
     */
    private $cumTranche2Si;

    /**
     * Cum tranche a sans si.
     *
     * @var float|null
     */
    private $cumTrancheASansSi;

    /**
     * Cum tranche asi.
     *
     * @var float|null
     */
    private $cumTrancheAsi;

    /**
     * Cum tranche b sans si.
     *
     * @var float|null
     */
    private $cumTrancheBSansSi;

    /**
     * Cum tranche bsi.
     *
     * @var float|null
     */
    private $cumTrancheBsi;

    /**
     * Cum tranche c sans si.
     *
     * @var float|null
     */
    private $cumTrancheCSansSi;

    /**
     * Cum tranche csi.
     *
     * @var float|null
     */
    private $cumTrancheCsi;

    /**
     * Cum tranche d1 sans si.
     *
     * @var float|null
     */
    private $cumTrancheD1SansSi;

    /**
     * Cum tranche d sans si.
     *
     * @var float|null
     */
    private $cumTrancheDSansSi;

    /**
     * Dadsu conjoint salarie.
     *
     * @var string|null
     */
    private $dadsuConjointSalarie;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date fin exclure lfr2012.
     *
     * @var DateTime|null
     */
    private $dateFinExclureLfr2012;

    /**
     * Date fin portabilite.
     *
     * @var DateTime|null
     */
    private $dateFinPortabilite;

    /**
     * Date passage cdi.
     *
     * @var DateTime|null
     */
    private $datePassageCdi;

    /**
     * Date renouv cdd.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd;

    /**
     * Deduction anc.
     *
     * @var int|null
     */
    private $deductionAnc;

    /**
     * Echelon.
     *
     * @var string|null
     */
    private $echelon;

    /**
     * Ed h sup bonif que majo.
     *
     * @var string|null
     */
    private $edHSupBonifQueMajo;

    /**
     * Email.
     *
     * @var string|null
     */
    private $email;

    /**
     * Etat i paie.
     *
     * @var string|null
     */
    private $etatIPaie;

    /**
     * Exclure chom cdd.
     *
     * @var bool|null
     */
    private $exclureChomCdd;

    /**
     * Exclure cice.
     *
     * @var bool|null
     */
    private $exclureCice;

    /**
     * Exclure cospar.
     *
     * @var bool|null
     */
    private $exclureCospar;

    /**
     * Exclure cot assedic par urssaf.
     *
     * @var bool|null
     */
    private $exclureCotAssedicParUrssaf;

    /**
     * Exclure das.
     *
     * @var bool|null
     */
    private $exclureDas;

    /**
     * Exclure dsn.
     *
     * @var bool|null
     */
    private $exclureDsn;

    /**
     * Exclure lfr2012.
     *
     * @var string|null
     */
    private $exclureLfr2012;

    /**
     * Exclure loi tepa.
     *
     * @var bool|null
     */
    private $exclureLoiTepa;

    /**
     * Exclure loi tepa part p.
     *
     * @var bool|null
     */
    private $exclureLoiTepaPartP;

    /**
     * Exclure loi tepa part s.
     *
     * @var bool|null
     */
    private $exclureLoiTepaPartS;

    /**
     * Exclure qgc.
     *
     * @var bool|null
     */
    private $exclureQgc;

    /**
     * Exo accre17.
     *
     * @var bool|null
     */
    private $exoAccre17;

    /**
     * Exo agff.
     *
     * @var bool|null
     */
    private $exoAgff;

    /**
     * Exo occasionnel msa.
     *
     * @var bool|null
     */
    private $exoOccasionnelMsa;

    /**
     * Exo professionnalisation.
     *
     * @var bool|null
     */
    private $exoProfessionnalisation;

    /**
     * Exo specif.
     *
     * @var bool|null
     */
    private $exoSpecif;

    /**
     * Forfait heure.
     *
     * @var bool|null
     */
    private $forfaitHeure;

    /**
     * Forfait jour.
     *
     * @var bool|null
     */
    private $forfaitJour;

    /**
     * Gestion compteur h completer.
     *
     * @var bool|null
     */
    private $gestionCompteurHCompleter;

    /**
     * Gestion cp.
     *
     * @var string|null
     */
    private $gestionCp;

    /**
     * Gestion mail bulletin.
     *
     * @var bool|null
     */
    private $gestionMailBulletin;

    /**
     * Gestion repos comp.
     *
     * @var string|null
     */
    private $gestionReposComp;

    /**
     * Gestion repos recup.
     *
     * @var string|null
     */
    private $gestionReposRecup;

    /**
     * Gestion repos remplace.
     *
     * @var string|null
     */
    private $gestionReposRemplace;

    /**
     * Gestion rtt.
     *
     * @var string|null
     */
    private $gestionRtt;

    /**
     * Gestion sem type.
     *
     * @var string|null
     */
    private $gestionSemType;

    /**
     * Heures periode initial.
     *
     * @var float|null
     */
    private $heuresPeriodeInitial;

    /**
     * Iban.
     *
     * @var string|null
     */
    private $iban;

    /**
     * Indem cp msa.
     *
     * @var bool|null
     */
    private $indemCpMsa;

    /**
     * Indice categ.
     *
     * @var int|null
     */
    private $indiceCateg;

    /**
     * Inspecteur.
     *
     * @var bool|null
     */
    private $inspecteur;

    /**
     * Interim indem cp fillon.
     *
     * @var bool|null
     */
    private $interimIndemCpFillon;

    /**
     * Mail bulletin pwd.
     *
     * @var string|null
     */
    private $mailBulletinPwd;

    /**
     * Maintien intervient cp.
     *
     * @var string|null
     */
    private $maintienIntervientCp;

    /**
     * Maintien net deduc csgijss.
     *
     * @var bool|null
     */
    private $maintienNetDeducCsgijss;

    /**
     * Maintien salaire.
     *
     * @var string|null
     */
    private $maintienSalaire;

    /**
     * Maintien specifique.
     *
     * @var bool|null
     */
    private $maintienSpecifique;

    /**
     * Majo professionnalisation.
     *
     * @var bool|null
     */
    private $majoProfessionnalisation;

    /**
     * Mandataire social.
     *
     * @var bool|null
     */
    private $mandataireSocial;

    /**
     * Modele bulletin.
     *
     * @var string|null
     */
    private $modeleBulletin;

    /**
     * Mois cloture dif.
     *
     * @var string|null
     */
    private $moisClotureDif;

    /**
     * Motif cdd.
     *
     * @var string|null
     */
    private $motifCdd;

    /**
     * Motif exclusion dsn.
     *
     * @var string|null
     */
    private $motifExclusionDsn;

    /**
     * Multi employeur.
     *
     * @var bool|null
     */
    private $multiEmployeur;

    /**
     * Nature analytique.
     *
     * @var string|null
     */
    private $natureAnalytique;

    /**
     * Nb h bonifie.
     *
     * @var float|null
     */
    private $nbHBonifie;

    /**
     * Nb h contingent.
     *
     * @var float|null
     */
    private $nbHContingent;

    /**
     * Nb h jour1.
     *
     * @var float|null
     */
    private $nbHJour1;

    /**
     * Nb h jour2.
     *
     * @var float|null
     */
    private $nbHJour2;

    /**
     * Nb h jour3.
     *
     * @var float|null
     */
    private $nbHJour3;

    /**
     * Nb h jour4.
     *
     * @var float|null
     */
    private $nbHJour4;

    /**
     * Nb h jour5.
     *
     * @var float|null
     */
    private $nbHJour5;

    /**
     * Nb h jour6.
     *
     * @var float|null
     */
    private $nbHJour6;

    /**
     * Nb h jour7.
     *
     * @var float|null
     */
    private $nbHJour7;

    /**
     * Nb jour annee.
     *
     * @var float|null
     */
    private $nbJourAnnee;

    /**
     * Nb jour cp acquis.
     *
     * @var float|null
     */
    private $nbJourCpAcquis;

    /**
     * Nb jour cp sup.
     *
     * @var float|null
     */
    private $nbJourCpSup;

    /**
     * Nb piece logement.
     *
     * @var string|null
     */
    private $nbPieceLogement;

    /**
     * Ne pas activer prime annuelle proprete.
     *
     * @var bool|null
     */
    private $nePasActiverPrimeAnnuelleProprete;

    /**
     * Niveau.
     *
     * @var string|null
     */
    private $niveau;

    /**
     * Nom ville insee.
     *
     * @var string|null
     */
    private $nomVilleInsee;

    /**
     * Numero.
     *
     * @var string|null
     */
    private $numero;

    /**
     * Numero abattement contrat msa.
     *
     * @var int|null
     */
    private $numeroAbattementContratMsa;

    /**
     * Numero contrat.
     *
     * @var int|null
     */
    private $numeroContrat;

    /**
     * Numero employe contrat.
     *
     * @var string|null
     */
    private $numeroEmployeContrat;

    /**
     * Pas gestion dif.
     *
     * @var bool|null
     */
    private $pasGestionDif;

    /**
     * Pays naissance.
     *
     * @var string|null
     */
    private $paysNaissance;

    /**
     * Pays nat.
     *
     * @var string|null
     */
    private $paysNat;

    /**
     * Periode pointage cloturee.
     *
     * @var DateTime|null
     */
    private $periodePointageCloturee;

    /**
     * Position.
     *
     * @var string|null
     */
    private $position;

    /**
     * Pourcent exo.
     *
     * @var float|null
     */
    private $pourcentExo;

    /**
     * Rbt navigo non proratise.
     *
     * @var bool|null
     */
    private $rbtNavigoNonProratise;

    /**
     * Reduction fillon.
     *
     * @var string|null
     */
    private $reductionFillon;

    /**
     * Reduction mayotte.
     *
     * @var string|null
     */
    private $reductionMayotte;

    /**
     * Remun part fillon.
     *
     * @var bool|null
     */
    private $remunPartFillon;

    /**
     * Rtt1.
     *
     * @var float|null
     */
    private $rtt1;

    /**
     * Rtt10.
     *
     * @var float|null
     */
    private $rtt10;

    /**
     * Rtt11.
     *
     * @var float|null
     */
    private $rtt11;

    /**
     * Rtt12.
     *
     * @var float|null
     */
    private $rtt12;

    /**
     * Rtt2.
     *
     * @var float|null
     */
    private $rtt2;

    /**
     * Rtt3.
     *
     * @var float|null
     */
    private $rtt3;

    /**
     * Rtt4.
     *
     * @var float|null
     */
    private $rtt4;

    /**
     * Rtt5.
     *
     * @var float|null
     */
    private $rtt5;

    /**
     * Rtt6.
     *
     * @var float|null
     */
    private $rtt6;

    /**
     * Rtt7.
     *
     * @var float|null
     */
    private $rtt7;

    /**
     * Rtt8.
     *
     * @var float|null
     */
    private $rtt8;

    /**
     * Rtt9.
     *
     * @var float|null
     */
    private $rtt9;

    /**
     * Sans contrat.
     *
     * @var int|null
     */
    private $sansContrat;

    /**
     * Subrogation.
     *
     * @var string|null
     */
    private $subrogation;

    /**
     * Tds142.
     *
     * @var float|null
     */
    private $tds142;

    /**
     * Tds alloc chom.
     *
     * @var float|null
     */
    private $tdsAllocChom;

    /**
     * Tds alloc retraite.
     *
     * @var float|null
     */
    private $tdsAllocRetraite;

    /**
     * Tel2.
     *
     * @var string|null
     */
    private $tel2;

    /**
     * Travailleur de nuit.
     *
     * @var bool|null
     */
    private $travailleurDeNuit;

    /**
     * Type abo navigo.
     *
     * @var string|null
     */
    private $typeAboNavigo;

    /**
     * Type exo lodeom.
     *
     * @var string|null
     */
    private $typeExoLodeom;

    /**
     * Type intemperie btp.
     *
     * @var string|null
     */
    private $typeIntemperieBtp;

    /**
     * Type maintien brut net.
     *
     * @var string|null
     */
    private $typeMaintienBrutNet;

    /**
     * Type maintien salaire.
     *
     * @var string|null
     */
    private $typeMaintienSalaire;

    /**
     * Type saisie ab cp.
     *
     * @var string|null
     */
    private $typeSaisieAbCp;

    /**
     * Zone navigo.
     *
     * @var string|null
     */
    private $zoneNavigo;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a declarer cp.
     *
     * @return bool|null Returns the a declarer cp.
     */
    public function getADeclarerCp(): ?bool {
        return $this->aDeclarerCp;
    }

    /**
     * Get the active sal min conv.
     *
     * @return bool|null Returns the active sal min conv.
     */
    public function getActiveSalMinConv(): ?bool {
        return $this->activeSalMinConv;
    }

    /**
     * Get the active smic.
     *
     * @return bool|null Returns the active smic.
     */
    public function getActiveSmic(): ?bool {
        return $this->activeSmic;
    }

    /**
     * Get the aen logement.
     *
     * @return bool|null Returns the aen logement.
     */
    public function getAenLogement(): ?bool {
        return $this->aenLogement;
    }

    /**
     * Get the alleg particulier emp.
     *
     * @return string|null Returns the alleg particulier emp.
     */
    public function getAllegParticulierEmp(): ?string {
        return $this->allegParticulierEmp;
    }

    /**
     * Get the arbitrage auto.
     *
     * @return string|null Returns the arbitrage auto.
     */
    public function getArbitrageAuto(): ?string {
        return $this->arbitrageAuto;
    }

    /**
     * Get the autre alleg emp.
     *
     * @return string|null Returns the autre alleg emp.
     */
    public function getAutreAllegEmp(): ?string {
        return $this->autreAllegEmp;
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
     * Get the caisse cp.
     *
     * @return string|null Returns the caisse cp.
     */
    public function getCaisseCp(): ?string {
        return $this->caisseCp;
    }

    /**
     * Get the centre analytique.
     *
     * @return string|null Returns the centre analytique.
     */
    public function getCentreAnalytique(): ?string {
        return $this->centreAnalytique;
    }

    /**
     * Get the chef equipe.
     *
     * @return bool|null Returns the chef equipe.
     */
    public function getChefEquipe(): ?bool {
        return $this->chefEquipe;
    }

    /**
     * Get the cie plus50.
     *
     * @return bool|null Returns the cie plus50.
     */
    public function getCiePlus50(): ?bool {
        return $this->ciePlus50;
    }

    /**
     * Get the code analytique proprete.
     *
     * @return string|null Returns the code analytique proprete.
     */
    public function getCodeAnalytiqueProprete(): ?string {
        return $this->codeAnalytiqueProprete;
    }

    /**
     * Get the code emp remplace.
     *
     * @return string|null Returns the code emp remplace.
     */
    public function getCodeEmpRemplace(): ?string {
        return $this->codeEmpRemplace;
    }

    /**
     * Get the code insee.
     *
     * @return string|null Returns the code insee.
     */
    public function getCodeInsee(): ?string {
        return $this->codeInsee;
    }

    /**
     * Get the code motif rupture1.
     *
     * @return string|null Returns the code motif rupture1.
     */
    public function getCodeMotifRupture1(): ?string {
        return $this->codeMotifRupture1;
    }

    /**
     * Get the code motif rupture2.
     *
     * @return string|null Returns the code motif rupture2.
     */
    public function getCodeMotifRupture2(): ?string {
        return $this->codeMotifRupture2;
    }

    /**
     * Get the code pays residence.
     *
     * @return string|null Returns the code pays residence.
     */
    public function getCodePaysResidence(): ?string {
        return $this->codePaysResidence;
    }

    /**
     * Get the code tuteur.
     *
     * @return string|null Returns the code tuteur.
     */
    public function getCodeTuteur(): ?string {
        return $this->codeTuteur;
    }

    /**
     * Get the coeff convention.
     *
     * @return string|null Returns the coeff convention.
     */
    public function getCoeffConvention(): ?string {
        return $this->coeffConvention;
    }

    /**
     * Get the commercial.
     *
     * @return bool|null Returns the commercial.
     */
    public function getCommercial(): ?bool {
        return $this->commercial;
    }

    /**
     * Get the complement pcs.
     *
     * @return string|null Returns the complement pcs.
     */
    public function getComplementPcs(): ?string {
        return $this->complementPcs;
    }

    /**
     * Get the conjoint exploitant.
     *
     * @return bool|null Returns the conjoint exploitant.
     */
    public function getConjointExploitant(): ?bool {
        return $this->conjointExploitant;
    }

    /**
     * Get the contrat cne.
     *
     * @return bool|null Returns the contrat cne.
     */
    public function getContratCne(): ?bool {
        return $this->contratCne;
    }

    /**
     * Get the cotis base penibilite.
     *
     * @return bool|null Returns the cotis base penibilite.
     */
    public function getCotisBasePenibilite(): ?bool {
        return $this->cotisBasePenibilite;
    }

    /**
     * Get the critere tri abs conges1.
     *
     * @return string|null Returns the critere tri abs conges1.
     */
    public function getCritereTriAbsConges1(): ?string {
        return $this->critereTriAbsConges1;
    }

    /**
     * Get the critere tri abs conges2.
     *
     * @return string|null Returns the critere tri abs conges2.
     */
    public function getCritereTriAbsConges2(): ?string {
        return $this->critereTriAbsConges2;
    }

    /**
     * Get the critere tri abs conges3.
     *
     * @return string|null Returns the critere tri abs conges3.
     */
    public function getCritereTriAbsConges3(): ?string {
        return $this->critereTriAbsConges3;
    }

    /**
     * Get the cum base tr2.
     *
     * @return float|null Returns the cum base tr2.
     */
    public function getCumBaseTr2(): ?float {
        return $this->cumBaseTr2;
    }

    /**
     * Get the cum base tr d.
     *
     * @return float|null Returns the cum base tr d.
     */
    public function getCumBaseTrD(): ?float {
        return $this->cumBaseTrD;
    }

    /**
     * Get the cum base tr d1.
     *
     * @return float|null Returns the cum base tr d1.
     */
    public function getCumBaseTrD1(): ?float {
        return $this->cumBaseTrD1;
    }

    /**
     * Get the cum base tr d1 caisse1.
     *
     * @return float|null Returns the cum base tr d1 caisse1.
     */
    public function getCumBaseTrD1Caisse1(): ?float {
        return $this->cumBaseTrD1Caisse1;
    }

    /**
     * Get the cum base tr d1 caisse2.
     *
     * @return float|null Returns the cum base tr d1 caisse2.
     */
    public function getCumBaseTrD1Caisse2(): ?float {
        return $this->cumBaseTrD1Caisse2;
    }

    /**
     * Get the cum base tr d1 caisse3.
     *
     * @return float|null Returns the cum base tr d1 caisse3.
     */
    public function getCumBaseTrD1Caisse3(): ?float {
        return $this->cumBaseTrD1Caisse3;
    }

    /**
     * Get the cum base tr d caisse1.
     *
     * @return float|null Returns the cum base tr d caisse1.
     */
    public function getCumBaseTrDCaisse1(): ?float {
        return $this->cumBaseTrDCaisse1;
    }

    /**
     * Get the cum base tr d caisse2.
     *
     * @return float|null Returns the cum base tr d caisse2.
     */
    public function getCumBaseTrDCaisse2(): ?float {
        return $this->cumBaseTrDCaisse2;
    }

    /**
     * Get the cum base tr d caisse3.
     *
     * @return float|null Returns the cum base tr d caisse3.
     */
    public function getCumBaseTrDCaisse3(): ?float {
        return $this->cumBaseTrDCaisse3;
    }

    /**
     * Get the cum brut al sans si.
     *
     * @return float|null Returns the cum brut al sans si.
     */
    public function getCumBrutAlSansSi(): ?float {
        return $this->cumBrutAlSansSi;
    }

    /**
     * Get the cum brut caisse1.
     *
     * @return float|null Returns the cum brut caisse1.
     */
    public function getCumBrutCaisse1(): ?float {
        return $this->cumBrutCaisse1;
    }

    /**
     * Get the cum brut caisse2.
     *
     * @return float|null Returns the cum brut caisse2.
     */
    public function getCumBrutCaisse2(): ?float {
        return $this->cumBrutCaisse2;
    }

    /**
     * Get the cum brut caisse3.
     *
     * @return float|null Returns the cum brut caisse3.
     */
    public function getCumBrutCaisse3(): ?float {
        return $this->cumBrutCaisse3;
    }

    /**
     * Get the cum dif dus.
     *
     * @return float|null Returns the cum dif dus.
     */
    public function getCumDifDus(): ?float {
        return $this->cumDifDus;
    }

    /**
     * Get the cum dif dus1.
     *
     * @return float|null Returns the cum dif dus1.
     */
    public function getCumDifDus1(): ?float {
        return $this->cumDifDus1;
    }

    /**
     * Get the cum h bonifie.
     *
     * @return float|null Returns the cum h bonifie.
     */
    public function getCumHBonifie(): ?float {
        return $this->cumHBonifie;
    }

    /**
     * Get the cum rtt dus.
     *
     * @return float|null Returns the cum rtt dus.
     */
    public function getCumRttDus(): ?float {
        return $this->cumRttDus;
    }

    /**
     * Get the cum rtt pris.
     *
     * @return float|null Returns the cum rtt pris.
     */
    public function getCumRttPris(): ?float {
        return $this->cumRttPris;
    }

    /**
     * Get the cum tot si.
     *
     * @return float|null Returns the cum tot si.
     */
    public function getCumTotSi(): ?float {
        return $this->cumTotSi;
    }

    /**
     * Get the cum tranche2 sans si.
     *
     * @return float|null Returns the cum tranche2 sans si.
     */
    public function getCumTranche2SansSi(): ?float {
        return $this->cumTranche2SansSi;
    }

    /**
     * Get the cum tranche2 si.
     *
     * @return float|null Returns the cum tranche2 si.
     */
    public function getCumTranche2Si(): ?float {
        return $this->cumTranche2Si;
    }

    /**
     * Get the cum tranche a sans si.
     *
     * @return float|null Returns the cum tranche a sans si.
     */
    public function getCumTrancheASansSi(): ?float {
        return $this->cumTrancheASansSi;
    }

    /**
     * Get the cum tranche asi.
     *
     * @return float|null Returns the cum tranche asi.
     */
    public function getCumTrancheAsi(): ?float {
        return $this->cumTrancheAsi;
    }

    /**
     * Get the cum tranche b sans si.
     *
     * @return float|null Returns the cum tranche b sans si.
     */
    public function getCumTrancheBSansSi(): ?float {
        return $this->cumTrancheBSansSi;
    }

    /**
     * Get the cum tranche bsi.
     *
     * @return float|null Returns the cum tranche bsi.
     */
    public function getCumTrancheBsi(): ?float {
        return $this->cumTrancheBsi;
    }

    /**
     * Get the cum tranche c sans si.
     *
     * @return float|null Returns the cum tranche c sans si.
     */
    public function getCumTrancheCSansSi(): ?float {
        return $this->cumTrancheCSansSi;
    }

    /**
     * Get the cum tranche csi.
     *
     * @return float|null Returns the cum tranche csi.
     */
    public function getCumTrancheCsi(): ?float {
        return $this->cumTrancheCsi;
    }

    /**
     * Get the cum tranche d1 sans si.
     *
     * @return float|null Returns the cum tranche d1 sans si.
     */
    public function getCumTrancheD1SansSi(): ?float {
        return $this->cumTrancheD1SansSi;
    }

    /**
     * Get the cum tranche d sans si.
     *
     * @return float|null Returns the cum tranche d sans si.
     */
    public function getCumTrancheDSansSi(): ?float {
        return $this->cumTrancheDSansSi;
    }

    /**
     * Get the dadsu conjoint salarie.
     *
     * @return string|null Returns the dadsu conjoint salarie.
     */
    public function getDadsuConjointSalarie(): ?string {
        return $this->dadsuConjointSalarie;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation(): ?DateTime {
        return $this->dateCreation;
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
     * Get the date fin portabilite.
     *
     * @return DateTime|null Returns the date fin portabilite.
     */
    public function getDateFinPortabilite(): ?DateTime {
        return $this->dateFinPortabilite;
    }

    /**
     * Get the date passage cdi.
     *
     * @return DateTime|null Returns the date passage cdi.
     */
    public function getDatePassageCdi(): ?DateTime {
        return $this->datePassageCdi;
    }

    /**
     * Get the date renouv cdd.
     *
     * @return DateTime|null Returns the date renouv cdd.
     */
    public function getDateRenouvCdd(): ?DateTime {
        return $this->dateRenouvCdd;
    }

    /**
     * Get the deduction anc.
     *
     * @return int|null Returns the deduction anc.
     */
    public function getDeductionAnc(): ?int {
        return $this->deductionAnc;
    }

    /**
     * Get the echelon.
     *
     * @return string|null Returns the echelon.
     */
    public function getEchelon(): ?string {
        return $this->echelon;
    }

    /**
     * Get the ed h sup bonif que majo.
     *
     * @return string|null Returns the ed h sup bonif que majo.
     */
    public function getEdHSupBonifQueMajo(): ?string {
        return $this->edHSupBonifQueMajo;
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
     * Get the etat i paie.
     *
     * @return string|null Returns the etat i paie.
     */
    public function getEtatIPaie(): ?string {
        return $this->etatIPaie;
    }

    /**
     * Get the exclure chom cdd.
     *
     * @return bool|null Returns the exclure chom cdd.
     */
    public function getExclureChomCdd(): ?bool {
        return $this->exclureChomCdd;
    }

    /**
     * Get the exclure cice.
     *
     * @return bool|null Returns the exclure cice.
     */
    public function getExclureCice(): ?bool {
        return $this->exclureCice;
    }

    /**
     * Get the exclure cospar.
     *
     * @return bool|null Returns the exclure cospar.
     */
    public function getExclureCospar(): ?bool {
        return $this->exclureCospar;
    }

    /**
     * Get the exclure cot assedic par urssaf.
     *
     * @return bool|null Returns the exclure cot assedic par urssaf.
     */
    public function getExclureCotAssedicParUrssaf(): ?bool {
        return $this->exclureCotAssedicParUrssaf;
    }

    /**
     * Get the exclure das.
     *
     * @return bool|null Returns the exclure das.
     */
    public function getExclureDas(): ?bool {
        return $this->exclureDas;
    }

    /**
     * Get the exclure dsn.
     *
     * @return bool|null Returns the exclure dsn.
     */
    public function getExclureDsn(): ?bool {
        return $this->exclureDsn;
    }

    /**
     * Get the exclure lfr2012.
     *
     * @return string|null Returns the exclure lfr2012.
     */
    public function getExclureLfr2012(): ?string {
        return $this->exclureLfr2012;
    }

    /**
     * Get the exclure loi tepa.
     *
     * @return bool|null Returns the exclure loi tepa.
     */
    public function getExclureLoiTepa(): ?bool {
        return $this->exclureLoiTepa;
    }

    /**
     * Get the exclure loi tepa part p.
     *
     * @return bool|null Returns the exclure loi tepa part p.
     */
    public function getExclureLoiTepaPartP(): ?bool {
        return $this->exclureLoiTepaPartP;
    }

    /**
     * Get the exclure loi tepa part s.
     *
     * @return bool|null Returns the exclure loi tepa part s.
     */
    public function getExclureLoiTepaPartS(): ?bool {
        return $this->exclureLoiTepaPartS;
    }

    /**
     * Get the exclure qgc.
     *
     * @return bool|null Returns the exclure qgc.
     */
    public function getExclureQgc(): ?bool {
        return $this->exclureQgc;
    }

    /**
     * Get the exo accre17.
     *
     * @return bool|null Returns the exo accre17.
     */
    public function getExoAccre17(): ?bool {
        return $this->exoAccre17;
    }

    /**
     * Get the exo agff.
     *
     * @return bool|null Returns the exo agff.
     */
    public function getExoAgff(): ?bool {
        return $this->exoAgff;
    }

    /**
     * Get the exo occasionnel msa.
     *
     * @return bool|null Returns the exo occasionnel msa.
     */
    public function getExoOccasionnelMsa(): ?bool {
        return $this->exoOccasionnelMsa;
    }

    /**
     * Get the exo professionnalisation.
     *
     * @return bool|null Returns the exo professionnalisation.
     */
    public function getExoProfessionnalisation(): ?bool {
        return $this->exoProfessionnalisation;
    }

    /**
     * Get the exo specif.
     *
     * @return bool|null Returns the exo specif.
     */
    public function getExoSpecif(): ?bool {
        return $this->exoSpecif;
    }

    /**
     * Get the forfait heure.
     *
     * @return bool|null Returns the forfait heure.
     */
    public function getForfaitHeure(): ?bool {
        return $this->forfaitHeure;
    }

    /**
     * Get the forfait jour.
     *
     * @return bool|null Returns the forfait jour.
     */
    public function getForfaitJour(): ?bool {
        return $this->forfaitJour;
    }

    /**
     * Get the gestion compteur h completer.
     *
     * @return bool|null Returns the gestion compteur h completer.
     */
    public function getGestionCompteurHCompleter(): ?bool {
        return $this->gestionCompteurHCompleter;
    }

    /**
     * Get the gestion cp.
     *
     * @return string|null Returns the gestion cp.
     */
    public function getGestionCp(): ?string {
        return $this->gestionCp;
    }

    /**
     * Get the gestion mail bulletin.
     *
     * @return bool|null Returns the gestion mail bulletin.
     */
    public function getGestionMailBulletin(): ?bool {
        return $this->gestionMailBulletin;
    }

    /**
     * Get the gestion repos comp.
     *
     * @return string|null Returns the gestion repos comp.
     */
    public function getGestionReposComp(): ?string {
        return $this->gestionReposComp;
    }

    /**
     * Get the gestion repos recup.
     *
     * @return string|null Returns the gestion repos recup.
     */
    public function getGestionReposRecup(): ?string {
        return $this->gestionReposRecup;
    }

    /**
     * Get the gestion repos remplace.
     *
     * @return string|null Returns the gestion repos remplace.
     */
    public function getGestionReposRemplace(): ?string {
        return $this->gestionReposRemplace;
    }

    /**
     * Get the gestion rtt.
     *
     * @return string|null Returns the gestion rtt.
     */
    public function getGestionRtt(): ?string {
        return $this->gestionRtt;
    }

    /**
     * Get the gestion sem type.
     *
     * @return string|null Returns the gestion sem type.
     */
    public function getGestionSemType(): ?string {
        return $this->gestionSemType;
    }

    /**
     * Get the heures periode initial.
     *
     * @return float|null Returns the heures periode initial.
     */
    public function getHeuresPeriodeInitial(): ?float {
        return $this->heuresPeriodeInitial;
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
     * Get the indem cp msa.
     *
     * @return bool|null Returns the indem cp msa.
     */
    public function getIndemCpMsa(): ?bool {
        return $this->indemCpMsa;
    }

    /**
     * Get the indice categ.
     *
     * @return int|null Returns the indice categ.
     */
    public function getIndiceCateg(): ?int {
        return $this->indiceCateg;
    }

    /**
     * Get the inspecteur.
     *
     * @return bool|null Returns the inspecteur.
     */
    public function getInspecteur(): ?bool {
        return $this->inspecteur;
    }

    /**
     * Get the interim indem cp fillon.
     *
     * @return bool|null Returns the interim indem cp fillon.
     */
    public function getInterimIndemCpFillon(): ?bool {
        return $this->interimIndemCpFillon;
    }

    /**
     * Get the mail bulletin pwd.
     *
     * @return string|null Returns the mail bulletin pwd.
     */
    public function getMailBulletinPwd(): ?string {
        return $this->mailBulletinPwd;
    }

    /**
     * Get the maintien intervient cp.
     *
     * @return string|null Returns the maintien intervient cp.
     */
    public function getMaintienIntervientCp(): ?string {
        return $this->maintienIntervientCp;
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
     * Get the maintien salaire.
     *
     * @return string|null Returns the maintien salaire.
     */
    public function getMaintienSalaire(): ?string {
        return $this->maintienSalaire;
    }

    /**
     * Get the maintien specifique.
     *
     * @return bool|null Returns the maintien specifique.
     */
    public function getMaintienSpecifique(): ?bool {
        return $this->maintienSpecifique;
    }

    /**
     * Get the majo professionnalisation.
     *
     * @return bool|null Returns the majo professionnalisation.
     */
    public function getMajoProfessionnalisation(): ?bool {
        return $this->majoProfessionnalisation;
    }

    /**
     * Get the mandataire social.
     *
     * @return bool|null Returns the mandataire social.
     */
    public function getMandataireSocial(): ?bool {
        return $this->mandataireSocial;
    }

    /**
     * Get the modele bulletin.
     *
     * @return string|null Returns the modele bulletin.
     */
    public function getModeleBulletin(): ?string {
        return $this->modeleBulletin;
    }

    /**
     * Get the mois cloture dif.
     *
     * @return string|null Returns the mois cloture dif.
     */
    public function getMoisClotureDif(): ?string {
        return $this->moisClotureDif;
    }

    /**
     * Get the motif cdd.
     *
     * @return string|null Returns the motif cdd.
     */
    public function getMotifCdd(): ?string {
        return $this->motifCdd;
    }

    /**
     * Get the motif exclusion dsn.
     *
     * @return string|null Returns the motif exclusion dsn.
     */
    public function getMotifExclusionDsn(): ?string {
        return $this->motifExclusionDsn;
    }

    /**
     * Get the multi employeur.
     *
     * @return bool|null Returns the multi employeur.
     */
    public function getMultiEmployeur(): ?bool {
        return $this->multiEmployeur;
    }

    /**
     * Get the nature analytique.
     *
     * @return string|null Returns the nature analytique.
     */
    public function getNatureAnalytique(): ?string {
        return $this->natureAnalytique;
    }

    /**
     * Get the nb h bonifie.
     *
     * @return float|null Returns the nb h bonifie.
     */
    public function getNbHBonifie(): ?float {
        return $this->nbHBonifie;
    }

    /**
     * Get the nb h contingent.
     *
     * @return float|null Returns the nb h contingent.
     */
    public function getNbHContingent(): ?float {
        return $this->nbHContingent;
    }

    /**
     * Get the nb h jour1.
     *
     * @return float|null Returns the nb h jour1.
     */
    public function getNbHJour1(): ?float {
        return $this->nbHJour1;
    }

    /**
     * Get the nb h jour2.
     *
     * @return float|null Returns the nb h jour2.
     */
    public function getNbHJour2(): ?float {
        return $this->nbHJour2;
    }

    /**
     * Get the nb h jour3.
     *
     * @return float|null Returns the nb h jour3.
     */
    public function getNbHJour3(): ?float {
        return $this->nbHJour3;
    }

    /**
     * Get the nb h jour4.
     *
     * @return float|null Returns the nb h jour4.
     */
    public function getNbHJour4(): ?float {
        return $this->nbHJour4;
    }

    /**
     * Get the nb h jour5.
     *
     * @return float|null Returns the nb h jour5.
     */
    public function getNbHJour5(): ?float {
        return $this->nbHJour5;
    }

    /**
     * Get the nb h jour6.
     *
     * @return float|null Returns the nb h jour6.
     */
    public function getNbHJour6(): ?float {
        return $this->nbHJour6;
    }

    /**
     * Get the nb h jour7.
     *
     * @return float|null Returns the nb h jour7.
     */
    public function getNbHJour7(): ?float {
        return $this->nbHJour7;
    }

    /**
     * Get the nb jour annee.
     *
     * @return float|null Returns the nb jour annee.
     */
    public function getNbJourAnnee(): ?float {
        return $this->nbJourAnnee;
    }

    /**
     * Get the nb jour cp acquis.
     *
     * @return float|null Returns the nb jour cp acquis.
     */
    public function getNbJourCpAcquis(): ?float {
        return $this->nbJourCpAcquis;
    }

    /**
     * Get the nb jour cp sup.
     *
     * @return float|null Returns the nb jour cp sup.
     */
    public function getNbJourCpSup(): ?float {
        return $this->nbJourCpSup;
    }

    /**
     * Get the nb piece logement.
     *
     * @return string|null Returns the nb piece logement.
     */
    public function getNbPieceLogement(): ?string {
        return $this->nbPieceLogement;
    }

    /**
     * Get the ne pas activer prime annuelle proprete.
     *
     * @return bool|null Returns the ne pas activer prime annuelle proprete.
     */
    public function getNePasActiverPrimeAnnuelleProprete(): ?bool {
        return $this->nePasActiverPrimeAnnuelleProprete;
    }

    /**
     * Get the niveau.
     *
     * @return string|null Returns the niveau.
     */
    public function getNiveau(): ?string {
        return $this->niveau;
    }

    /**
     * Get the nom ville insee.
     *
     * @return string|null Returns the nom ville insee.
     */
    public function getNomVilleInsee(): ?string {
        return $this->nomVilleInsee;
    }

    /**
     * Get the numero.
     *
     * @return string|null Returns the numero.
     */
    public function getNumero(): ?string {
        return $this->numero;
    }

    /**
     * Get the numero abattement contrat msa.
     *
     * @return int|null Returns the numero abattement contrat msa.
     */
    public function getNumeroAbattementContratMsa(): ?int {
        return $this->numeroAbattementContratMsa;
    }

    /**
     * Get the numero contrat.
     *
     * @return int|null Returns the numero contrat.
     */
    public function getNumeroContrat(): ?int {
        return $this->numeroContrat;
    }

    /**
     * Get the numero employe contrat.
     *
     * @return string|null Returns the numero employe contrat.
     */
    public function getNumeroEmployeContrat(): ?string {
        return $this->numeroEmployeContrat;
    }

    /**
     * Get the pas gestion dif.
     *
     * @return bool|null Returns the pas gestion dif.
     */
    public function getPasGestionDif(): ?bool {
        return $this->pasGestionDif;
    }

    /**
     * Get the pays naissance.
     *
     * @return string|null Returns the pays naissance.
     */
    public function getPaysNaissance(): ?string {
        return $this->paysNaissance;
    }

    /**
     * Get the pays nat.
     *
     * @return string|null Returns the pays nat.
     */
    public function getPaysNat(): ?string {
        return $this->paysNat;
    }

    /**
     * Get the periode pointage cloturee.
     *
     * @return DateTime|null Returns the periode pointage cloturee.
     */
    public function getPeriodePointageCloturee(): ?DateTime {
        return $this->periodePointageCloturee;
    }

    /**
     * Get the position.
     *
     * @return string|null Returns the position.
     */
    public function getPosition(): ?string {
        return $this->position;
    }

    /**
     * Get the pourcent exo.
     *
     * @return float|null Returns the pourcent exo.
     */
    public function getPourcentExo(): ?float {
        return $this->pourcentExo;
    }

    /**
     * Get the rbt navigo non proratise.
     *
     * @return bool|null Returns the rbt navigo non proratise.
     */
    public function getRbtNavigoNonProratise(): ?bool {
        return $this->rbtNavigoNonProratise;
    }

    /**
     * Get the reduction fillon.
     *
     * @return string|null Returns the reduction fillon.
     */
    public function getReductionFillon(): ?string {
        return $this->reductionFillon;
    }

    /**
     * Get the reduction mayotte.
     *
     * @return string|null Returns the reduction mayotte.
     */
    public function getReductionMayotte(): ?string {
        return $this->reductionMayotte;
    }

    /**
     * Get the remun part fillon.
     *
     * @return bool|null Returns the remun part fillon.
     */
    public function getRemunPartFillon(): ?bool {
        return $this->remunPartFillon;
    }

    /**
     * Get the rtt1.
     *
     * @return float|null Returns the rtt1.
     */
    public function getRtt1(): ?float {
        return $this->rtt1;
    }

    /**
     * Get the rtt10.
     *
     * @return float|null Returns the rtt10.
     */
    public function getRtt10(): ?float {
        return $this->rtt10;
    }

    /**
     * Get the rtt11.
     *
     * @return float|null Returns the rtt11.
     */
    public function getRtt11(): ?float {
        return $this->rtt11;
    }

    /**
     * Get the rtt12.
     *
     * @return float|null Returns the rtt12.
     */
    public function getRtt12(): ?float {
        return $this->rtt12;
    }

    /**
     * Get the rtt2.
     *
     * @return float|null Returns the rtt2.
     */
    public function getRtt2(): ?float {
        return $this->rtt2;
    }

    /**
     * Get the rtt3.
     *
     * @return float|null Returns the rtt3.
     */
    public function getRtt3(): ?float {
        return $this->rtt3;
    }

    /**
     * Get the rtt4.
     *
     * @return float|null Returns the rtt4.
     */
    public function getRtt4(): ?float {
        return $this->rtt4;
    }

    /**
     * Get the rtt5.
     *
     * @return float|null Returns the rtt5.
     */
    public function getRtt5(): ?float {
        return $this->rtt5;
    }

    /**
     * Get the rtt6.
     *
     * @return float|null Returns the rtt6.
     */
    public function getRtt6(): ?float {
        return $this->rtt6;
    }

    /**
     * Get the rtt7.
     *
     * @return float|null Returns the rtt7.
     */
    public function getRtt7(): ?float {
        return $this->rtt7;
    }

    /**
     * Get the rtt8.
     *
     * @return float|null Returns the rtt8.
     */
    public function getRtt8(): ?float {
        return $this->rtt8;
    }

    /**
     * Get the rtt9.
     *
     * @return float|null Returns the rtt9.
     */
    public function getRtt9(): ?float {
        return $this->rtt9;
    }

    /**
     * Get the sans contrat.
     *
     * @return int|null Returns the sans contrat.
     */
    public function getSansContrat(): ?int {
        return $this->sansContrat;
    }

    /**
     * Get the subrogation.
     *
     * @return string|null Returns the subrogation.
     */
    public function getSubrogation(): ?string {
        return $this->subrogation;
    }

    /**
     * Get the tds142.
     *
     * @return float|null Returns the tds142.
     */
    public function getTds142(): ?float {
        return $this->tds142;
    }

    /**
     * Get the tds alloc chom.
     *
     * @return float|null Returns the tds alloc chom.
     */
    public function getTdsAllocChom(): ?float {
        return $this->tdsAllocChom;
    }

    /**
     * Get the tds alloc retraite.
     *
     * @return float|null Returns the tds alloc retraite.
     */
    public function getTdsAllocRetraite(): ?float {
        return $this->tdsAllocRetraite;
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
     * Get the travailleur de nuit.
     *
     * @return bool|null Returns the travailleur de nuit.
     */
    public function getTravailleurDeNuit(): ?bool {
        return $this->travailleurDeNuit;
    }

    /**
     * Get the type abo navigo.
     *
     * @return string|null Returns the type abo navigo.
     */
    public function getTypeAboNavigo(): ?string {
        return $this->typeAboNavigo;
    }

    /**
     * Get the type exo lodeom.
     *
     * @return string|null Returns the type exo lodeom.
     */
    public function getTypeExoLodeom(): ?string {
        return $this->typeExoLodeom;
    }

    /**
     * Get the type intemperie btp.
     *
     * @return string|null Returns the type intemperie btp.
     */
    public function getTypeIntemperieBtp(): ?string {
        return $this->typeIntemperieBtp;
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
     * Get the type maintien salaire.
     *
     * @return string|null Returns the type maintien salaire.
     */
    public function getTypeMaintienSalaire(): ?string {
        return $this->typeMaintienSalaire;
    }

    /**
     * Get the type saisie ab cp.
     *
     * @return string|null Returns the type saisie ab cp.
     */
    public function getTypeSaisieAbCp(): ?string {
        return $this->typeSaisieAbCp;
    }

    /**
     * Get the zone navigo.
     *
     * @return string|null Returns the zone navigo.
     */
    public function getZoneNavigo(): ?string {
        return $this->zoneNavigo;
    }

    /**
     * Set the a declarer cp.
     *
     * @param bool|null $aDeclarerCp The a declarer cp.
     * @return Employes2 Returns this Employes2.
     */
    public function setADeclarerCp(?bool $aDeclarerCp): Employes2 {
        $this->aDeclarerCp = $aDeclarerCp;
        return $this;
    }

    /**
     * Set the active sal min conv.
     *
     * @param bool|null $activeSalMinConv The active sal min conv.
     * @return Employes2 Returns this Employes2.
     */
    public function setActiveSalMinConv(?bool $activeSalMinConv): Employes2 {
        $this->activeSalMinConv = $activeSalMinConv;
        return $this;
    }

    /**
     * Set the active smic.
     *
     * @param bool|null $activeSmic The active smic.
     * @return Employes2 Returns this Employes2.
     */
    public function setActiveSmic(?bool $activeSmic): Employes2 {
        $this->activeSmic = $activeSmic;
        return $this;
    }

    /**
     * Set the aen logement.
     *
     * @param bool|null $aenLogement The aen logement.
     * @return Employes2 Returns this Employes2.
     */
    public function setAenLogement(?bool $aenLogement): Employes2 {
        $this->aenLogement = $aenLogement;
        return $this;
    }

    /**
     * Set the alleg particulier emp.
     *
     * @param string|null $allegParticulierEmp The alleg particulier emp.
     * @return Employes2 Returns this Employes2.
     */
    public function setAllegParticulierEmp(?string $allegParticulierEmp): Employes2 {
        $this->allegParticulierEmp = $allegParticulierEmp;
        return $this;
    }

    /**
     * Set the arbitrage auto.
     *
     * @param string|null $arbitrageAuto The arbitrage auto.
     * @return Employes2 Returns this Employes2.
     */
    public function setArbitrageAuto(?string $arbitrageAuto): Employes2 {
        $this->arbitrageAuto = $arbitrageAuto;
        return $this;
    }

    /**
     * Set the autre alleg emp.
     *
     * @param string|null $autreAllegEmp The autre alleg emp.
     * @return Employes2 Returns this Employes2.
     */
    public function setAutreAllegEmp(?string $autreAllegEmp): Employes2 {
        $this->autreAllegEmp = $autreAllegEmp;
        return $this;
    }

    /**
     * Set the bic.
     *
     * @param string|null $bic The bic.
     * @return Employes2 Returns this Employes2.
     */
    public function setBic(?string $bic): Employes2 {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the caisse cp.
     *
     * @param string|null $caisseCp The caisse cp.
     * @return Employes2 Returns this Employes2.
     */
    public function setCaisseCp(?string $caisseCp): Employes2 {
        $this->caisseCp = $caisseCp;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string|null $centreAnalytique The centre analytique.
     * @return Employes2 Returns this Employes2.
     */
    public function setCentreAnalytique(?string $centreAnalytique): Employes2 {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the chef equipe.
     *
     * @param bool|null $chefEquipe The chef equipe.
     * @return Employes2 Returns this Employes2.
     */
    public function setChefEquipe(?bool $chefEquipe): Employes2 {
        $this->chefEquipe = $chefEquipe;
        return $this;
    }

    /**
     * Set the cie plus50.
     *
     * @param bool|null $ciePlus50 The cie plus50.
     * @return Employes2 Returns this Employes2.
     */
    public function setCiePlus50(?bool $ciePlus50): Employes2 {
        $this->ciePlus50 = $ciePlus50;
        return $this;
    }

    /**
     * Set the code analytique proprete.
     *
     * @param string|null $codeAnalytiqueProprete The code analytique proprete.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodeAnalytiqueProprete(?string $codeAnalytiqueProprete): Employes2 {
        $this->codeAnalytiqueProprete = $codeAnalytiqueProprete;
        return $this;
    }

    /**
     * Set the code emp remplace.
     *
     * @param string|null $codeEmpRemplace The code emp remplace.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodeEmpRemplace(?string $codeEmpRemplace): Employes2 {
        $this->codeEmpRemplace = $codeEmpRemplace;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string|null $codeInsee The code insee.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodeInsee(?string $codeInsee): Employes2 {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code motif rupture1.
     *
     * @param string|null $codeMotifRupture1 The code motif rupture1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodeMotifRupture1(?string $codeMotifRupture1): Employes2 {
        $this->codeMotifRupture1 = $codeMotifRupture1;
        return $this;
    }

    /**
     * Set the code motif rupture2.
     *
     * @param string|null $codeMotifRupture2 The code motif rupture2.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodeMotifRupture2(?string $codeMotifRupture2): Employes2 {
        $this->codeMotifRupture2 = $codeMotifRupture2;
        return $this;
    }

    /**
     * Set the code pays residence.
     *
     * @param string|null $codePaysResidence The code pays residence.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodePaysResidence(?string $codePaysResidence): Employes2 {
        $this->codePaysResidence = $codePaysResidence;
        return $this;
    }

    /**
     * Set the code tuteur.
     *
     * @param string|null $codeTuteur The code tuteur.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodeTuteur(?string $codeTuteur): Employes2 {
        $this->codeTuteur = $codeTuteur;
        return $this;
    }

    /**
     * Set the coeff convention.
     *
     * @param string|null $coeffConvention The coeff convention.
     * @return Employes2 Returns this Employes2.
     */
    public function setCoeffConvention(?string $coeffConvention): Employes2 {
        $this->coeffConvention = $coeffConvention;
        return $this;
    }

    /**
     * Set the commercial.
     *
     * @param bool|null $commercial The commercial.
     * @return Employes2 Returns this Employes2.
     */
    public function setCommercial(?bool $commercial): Employes2 {
        $this->commercial = $commercial;
        return $this;
    }

    /**
     * Set the complement pcs.
     *
     * @param string|null $complementPcs The complement pcs.
     * @return Employes2 Returns this Employes2.
     */
    public function setComplementPcs(?string $complementPcs): Employes2 {
        $this->complementPcs = $complementPcs;
        return $this;
    }

    /**
     * Set the conjoint exploitant.
     *
     * @param bool|null $conjointExploitant The conjoint exploitant.
     * @return Employes2 Returns this Employes2.
     */
    public function setConjointExploitant(?bool $conjointExploitant): Employes2 {
        $this->conjointExploitant = $conjointExploitant;
        return $this;
    }

    /**
     * Set the contrat cne.
     *
     * @param bool|null $contratCne The contrat cne.
     * @return Employes2 Returns this Employes2.
     */
    public function setContratCne(?bool $contratCne): Employes2 {
        $this->contratCne = $contratCne;
        return $this;
    }

    /**
     * Set the cotis base penibilite.
     *
     * @param bool|null $cotisBasePenibilite The cotis base penibilite.
     * @return Employes2 Returns this Employes2.
     */
    public function setCotisBasePenibilite(?bool $cotisBasePenibilite): Employes2 {
        $this->cotisBasePenibilite = $cotisBasePenibilite;
        return $this;
    }

    /**
     * Set the critere tri abs conges1.
     *
     * @param string|null $critereTriAbsConges1 The critere tri abs conges1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCritereTriAbsConges1(?string $critereTriAbsConges1): Employes2 {
        $this->critereTriAbsConges1 = $critereTriAbsConges1;
        return $this;
    }

    /**
     * Set the critere tri abs conges2.
     *
     * @param string|null $critereTriAbsConges2 The critere tri abs conges2.
     * @return Employes2 Returns this Employes2.
     */
    public function setCritereTriAbsConges2(?string $critereTriAbsConges2): Employes2 {
        $this->critereTriAbsConges2 = $critereTriAbsConges2;
        return $this;
    }

    /**
     * Set the critere tri abs conges3.
     *
     * @param string|null $critereTriAbsConges3 The critere tri abs conges3.
     * @return Employes2 Returns this Employes2.
     */
    public function setCritereTriAbsConges3(?string $critereTriAbsConges3): Employes2 {
        $this->critereTriAbsConges3 = $critereTriAbsConges3;
        return $this;
    }

    /**
     * Set the cum base tr2.
     *
     * @param float|null $cumBaseTr2 The cum base tr2.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTr2(?float $cumBaseTr2): Employes2 {
        $this->cumBaseTr2 = $cumBaseTr2;
        return $this;
    }

    /**
     * Set the cum base tr d.
     *
     * @param float|null $cumBaseTrD The cum base tr d.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrD(?float $cumBaseTrD): Employes2 {
        $this->cumBaseTrD = $cumBaseTrD;
        return $this;
    }

    /**
     * Set the cum base tr d1.
     *
     * @param float|null $cumBaseTrD1 The cum base tr d1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrD1(?float $cumBaseTrD1): Employes2 {
        $this->cumBaseTrD1 = $cumBaseTrD1;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse1.
     *
     * @param float|null $cumBaseTrD1Caisse1 The cum base tr d1 caisse1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrD1Caisse1(?float $cumBaseTrD1Caisse1): Employes2 {
        $this->cumBaseTrD1Caisse1 = $cumBaseTrD1Caisse1;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse2.
     *
     * @param float|null $cumBaseTrD1Caisse2 The cum base tr d1 caisse2.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrD1Caisse2(?float $cumBaseTrD1Caisse2): Employes2 {
        $this->cumBaseTrD1Caisse2 = $cumBaseTrD1Caisse2;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse3.
     *
     * @param float|null $cumBaseTrD1Caisse3 The cum base tr d1 caisse3.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrD1Caisse3(?float $cumBaseTrD1Caisse3): Employes2 {
        $this->cumBaseTrD1Caisse3 = $cumBaseTrD1Caisse3;
        return $this;
    }

    /**
     * Set the cum base tr d caisse1.
     *
     * @param float|null $cumBaseTrDCaisse1 The cum base tr d caisse1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrDCaisse1(?float $cumBaseTrDCaisse1): Employes2 {
        $this->cumBaseTrDCaisse1 = $cumBaseTrDCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr d caisse2.
     *
     * @param float|null $cumBaseTrDCaisse2 The cum base tr d caisse2.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrDCaisse2(?float $cumBaseTrDCaisse2): Employes2 {
        $this->cumBaseTrDCaisse2 = $cumBaseTrDCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr d caisse3.
     *
     * @param float|null $cumBaseTrDCaisse3 The cum base tr d caisse3.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrDCaisse3(?float $cumBaseTrDCaisse3): Employes2 {
        $this->cumBaseTrDCaisse3 = $cumBaseTrDCaisse3;
        return $this;
    }

    /**
     * Set the cum brut al sans si.
     *
     * @param float|null $cumBrutAlSansSi The cum brut al sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBrutAlSansSi(?float $cumBrutAlSansSi): Employes2 {
        $this->cumBrutAlSansSi = $cumBrutAlSansSi;
        return $this;
    }

    /**
     * Set the cum brut caisse1.
     *
     * @param float|null $cumBrutCaisse1 The cum brut caisse1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBrutCaisse1(?float $cumBrutCaisse1): Employes2 {
        $this->cumBrutCaisse1 = $cumBrutCaisse1;
        return $this;
    }

    /**
     * Set the cum brut caisse2.
     *
     * @param float|null $cumBrutCaisse2 The cum brut caisse2.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBrutCaisse2(?float $cumBrutCaisse2): Employes2 {
        $this->cumBrutCaisse2 = $cumBrutCaisse2;
        return $this;
    }

    /**
     * Set the cum brut caisse3.
     *
     * @param float|null $cumBrutCaisse3 The cum brut caisse3.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBrutCaisse3(?float $cumBrutCaisse3): Employes2 {
        $this->cumBrutCaisse3 = $cumBrutCaisse3;
        return $this;
    }

    /**
     * Set the cum dif dus.
     *
     * @param float|null $cumDifDus The cum dif dus.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumDifDus(?float $cumDifDus): Employes2 {
        $this->cumDifDus = $cumDifDus;
        return $this;
    }

    /**
     * Set the cum dif dus1.
     *
     * @param float|null $cumDifDus1 The cum dif dus1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumDifDus1(?float $cumDifDus1): Employes2 {
        $this->cumDifDus1 = $cumDifDus1;
        return $this;
    }

    /**
     * Set the cum h bonifie.
     *
     * @param float|null $cumHBonifie The cum h bonifie.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumHBonifie(?float $cumHBonifie): Employes2 {
        $this->cumHBonifie = $cumHBonifie;
        return $this;
    }

    /**
     * Set the cum rtt dus.
     *
     * @param float|null $cumRttDus The cum rtt dus.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumRttDus(?float $cumRttDus): Employes2 {
        $this->cumRttDus = $cumRttDus;
        return $this;
    }

    /**
     * Set the cum rtt pris.
     *
     * @param float|null $cumRttPris The cum rtt pris.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumRttPris(?float $cumRttPris): Employes2 {
        $this->cumRttPris = $cumRttPris;
        return $this;
    }

    /**
     * Set the cum tot si.
     *
     * @param float|null $cumTotSi The cum tot si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTotSi(?float $cumTotSi): Employes2 {
        $this->cumTotSi = $cumTotSi;
        return $this;
    }

    /**
     * Set the cum tranche2 sans si.
     *
     * @param float|null $cumTranche2SansSi The cum tranche2 sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTranche2SansSi(?float $cumTranche2SansSi): Employes2 {
        $this->cumTranche2SansSi = $cumTranche2SansSi;
        return $this;
    }

    /**
     * Set the cum tranche2 si.
     *
     * @param float|null $cumTranche2Si The cum tranche2 si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTranche2Si(?float $cumTranche2Si): Employes2 {
        $this->cumTranche2Si = $cumTranche2Si;
        return $this;
    }

    /**
     * Set the cum tranche a sans si.
     *
     * @param float|null $cumTrancheASansSi The cum tranche a sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheASansSi(?float $cumTrancheASansSi): Employes2 {
        $this->cumTrancheASansSi = $cumTrancheASansSi;
        return $this;
    }

    /**
     * Set the cum tranche asi.
     *
     * @param float|null $cumTrancheAsi The cum tranche asi.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheAsi(?float $cumTrancheAsi): Employes2 {
        $this->cumTrancheAsi = $cumTrancheAsi;
        return $this;
    }

    /**
     * Set the cum tranche b sans si.
     *
     * @param float|null $cumTrancheBSansSi The cum tranche b sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheBSansSi(?float $cumTrancheBSansSi): Employes2 {
        $this->cumTrancheBSansSi = $cumTrancheBSansSi;
        return $this;
    }

    /**
     * Set the cum tranche bsi.
     *
     * @param float|null $cumTrancheBsi The cum tranche bsi.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheBsi(?float $cumTrancheBsi): Employes2 {
        $this->cumTrancheBsi = $cumTrancheBsi;
        return $this;
    }

    /**
     * Set the cum tranche c sans si.
     *
     * @param float|null $cumTrancheCSansSi The cum tranche c sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheCSansSi(?float $cumTrancheCSansSi): Employes2 {
        $this->cumTrancheCSansSi = $cumTrancheCSansSi;
        return $this;
    }

    /**
     * Set the cum tranche csi.
     *
     * @param float|null $cumTrancheCsi The cum tranche csi.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheCsi(?float $cumTrancheCsi): Employes2 {
        $this->cumTrancheCsi = $cumTrancheCsi;
        return $this;
    }

    /**
     * Set the cum tranche d1 sans si.
     *
     * @param float|null $cumTrancheD1SansSi The cum tranche d1 sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheD1SansSi(?float $cumTrancheD1SansSi): Employes2 {
        $this->cumTrancheD1SansSi = $cumTrancheD1SansSi;
        return $this;
    }

    /**
     * Set the cum tranche d sans si.
     *
     * @param float|null $cumTrancheDSansSi The cum tranche d sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheDSansSi(?float $cumTrancheDSansSi): Employes2 {
        $this->cumTrancheDSansSi = $cumTrancheDSansSi;
        return $this;
    }

    /**
     * Set the dadsu conjoint salarie.
     *
     * @param string|null $dadsuConjointSalarie The dadsu conjoint salarie.
     * @return Employes2 Returns this Employes2.
     */
    public function setDadsuConjointSalarie(?string $dadsuConjointSalarie): Employes2 {
        $this->dadsuConjointSalarie = $dadsuConjointSalarie;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Employes2 Returns this Employes2.
     */
    public function setDateCreation(?DateTime $dateCreation): Employes2 {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date fin exclure lfr2012.
     *
     * @param DateTime|null $dateFinExclureLfr2012 The date fin exclure lfr2012.
     * @return Employes2 Returns this Employes2.
     */
    public function setDateFinExclureLfr2012(?DateTime $dateFinExclureLfr2012): Employes2 {
        $this->dateFinExclureLfr2012 = $dateFinExclureLfr2012;
        return $this;
    }

    /**
     * Set the date fin portabilite.
     *
     * @param DateTime|null $dateFinPortabilite The date fin portabilite.
     * @return Employes2 Returns this Employes2.
     */
    public function setDateFinPortabilite(?DateTime $dateFinPortabilite): Employes2 {
        $this->dateFinPortabilite = $dateFinPortabilite;
        return $this;
    }

    /**
     * Set the date passage cdi.
     *
     * @param DateTime|null $datePassageCdi The date passage cdi.
     * @return Employes2 Returns this Employes2.
     */
    public function setDatePassageCdi(?DateTime $datePassageCdi): Employes2 {
        $this->datePassageCdi = $datePassageCdi;
        return $this;
    }

    /**
     * Set the date renouv cdd.
     *
     * @param DateTime|null $dateRenouvCdd The date renouv cdd.
     * @return Employes2 Returns this Employes2.
     */
    public function setDateRenouvCdd(?DateTime $dateRenouvCdd): Employes2 {
        $this->dateRenouvCdd = $dateRenouvCdd;
        return $this;
    }

    /**
     * Set the deduction anc.
     *
     * @param int|null $deductionAnc The deduction anc.
     * @return Employes2 Returns this Employes2.
     */
    public function setDeductionAnc(?int $deductionAnc): Employes2 {
        $this->deductionAnc = $deductionAnc;
        return $this;
    }

    /**
     * Set the echelon.
     *
     * @param string|null $echelon The echelon.
     * @return Employes2 Returns this Employes2.
     */
    public function setEchelon(?string $echelon): Employes2 {
        $this->echelon = $echelon;
        return $this;
    }

    /**
     * Set the ed h sup bonif que majo.
     *
     * @param string|null $edHSupBonifQueMajo The ed h sup bonif que majo.
     * @return Employes2 Returns this Employes2.
     */
    public function setEdHSupBonifQueMajo(?string $edHSupBonifQueMajo): Employes2 {
        $this->edHSupBonifQueMajo = $edHSupBonifQueMajo;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return Employes2 Returns this Employes2.
     */
    public function setEmail(?string $email): Employes2 {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the etat i paie.
     *
     * @param string|null $etatIPaie The etat i paie.
     * @return Employes2 Returns this Employes2.
     */
    public function setEtatIPaie(?string $etatIPaie): Employes2 {
        $this->etatIPaie = $etatIPaie;
        return $this;
    }

    /**
     * Set the exclure chom cdd.
     *
     * @param bool|null $exclureChomCdd The exclure chom cdd.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureChomCdd(?bool $exclureChomCdd): Employes2 {
        $this->exclureChomCdd = $exclureChomCdd;
        return $this;
    }

    /**
     * Set the exclure cice.
     *
     * @param bool|null $exclureCice The exclure cice.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureCice(?bool $exclureCice): Employes2 {
        $this->exclureCice = $exclureCice;
        return $this;
    }

    /**
     * Set the exclure cospar.
     *
     * @param bool|null $exclureCospar The exclure cospar.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureCospar(?bool $exclureCospar): Employes2 {
        $this->exclureCospar = $exclureCospar;
        return $this;
    }

    /**
     * Set the exclure cot assedic par urssaf.
     *
     * @param bool|null $exclureCotAssedicParUrssaf The exclure cot assedic par urssaf.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureCotAssedicParUrssaf(?bool $exclureCotAssedicParUrssaf): Employes2 {
        $this->exclureCotAssedicParUrssaf = $exclureCotAssedicParUrssaf;
        return $this;
    }

    /**
     * Set the exclure das.
     *
     * @param bool|null $exclureDas The exclure das.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureDas(?bool $exclureDas): Employes2 {
        $this->exclureDas = $exclureDas;
        return $this;
    }

    /**
     * Set the exclure dsn.
     *
     * @param bool|null $exclureDsn The exclure dsn.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureDsn(?bool $exclureDsn): Employes2 {
        $this->exclureDsn = $exclureDsn;
        return $this;
    }

    /**
     * Set the exclure lfr2012.
     *
     * @param string|null $exclureLfr2012 The exclure lfr2012.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureLfr2012(?string $exclureLfr2012): Employes2 {
        $this->exclureLfr2012 = $exclureLfr2012;
        return $this;
    }

    /**
     * Set the exclure loi tepa.
     *
     * @param bool|null $exclureLoiTepa The exclure loi tepa.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureLoiTepa(?bool $exclureLoiTepa): Employes2 {
        $this->exclureLoiTepa = $exclureLoiTepa;
        return $this;
    }

    /**
     * Set the exclure loi tepa part p.
     *
     * @param bool|null $exclureLoiTepaPartP The exclure loi tepa part p.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureLoiTepaPartP(?bool $exclureLoiTepaPartP): Employes2 {
        $this->exclureLoiTepaPartP = $exclureLoiTepaPartP;
        return $this;
    }

    /**
     * Set the exclure loi tepa part s.
     *
     * @param bool|null $exclureLoiTepaPartS The exclure loi tepa part s.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureLoiTepaPartS(?bool $exclureLoiTepaPartS): Employes2 {
        $this->exclureLoiTepaPartS = $exclureLoiTepaPartS;
        return $this;
    }

    /**
     * Set the exclure qgc.
     *
     * @param bool|null $exclureQgc The exclure qgc.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureQgc(?bool $exclureQgc): Employes2 {
        $this->exclureQgc = $exclureQgc;
        return $this;
    }

    /**
     * Set the exo accre17.
     *
     * @param bool|null $exoAccre17 The exo accre17.
     * @return Employes2 Returns this Employes2.
     */
    public function setExoAccre17(?bool $exoAccre17): Employes2 {
        $this->exoAccre17 = $exoAccre17;
        return $this;
    }

    /**
     * Set the exo agff.
     *
     * @param bool|null $exoAgff The exo agff.
     * @return Employes2 Returns this Employes2.
     */
    public function setExoAgff(?bool $exoAgff): Employes2 {
        $this->exoAgff = $exoAgff;
        return $this;
    }

    /**
     * Set the exo occasionnel msa.
     *
     * @param bool|null $exoOccasionnelMsa The exo occasionnel msa.
     * @return Employes2 Returns this Employes2.
     */
    public function setExoOccasionnelMsa(?bool $exoOccasionnelMsa): Employes2 {
        $this->exoOccasionnelMsa = $exoOccasionnelMsa;
        return $this;
    }

    /**
     * Set the exo professionnalisation.
     *
     * @param bool|null $exoProfessionnalisation The exo professionnalisation.
     * @return Employes2 Returns this Employes2.
     */
    public function setExoProfessionnalisation(?bool $exoProfessionnalisation): Employes2 {
        $this->exoProfessionnalisation = $exoProfessionnalisation;
        return $this;
    }

    /**
     * Set the exo specif.
     *
     * @param bool|null $exoSpecif The exo specif.
     * @return Employes2 Returns this Employes2.
     */
    public function setExoSpecif(?bool $exoSpecif): Employes2 {
        $this->exoSpecif = $exoSpecif;
        return $this;
    }

    /**
     * Set the forfait heure.
     *
     * @param bool|null $forfaitHeure The forfait heure.
     * @return Employes2 Returns this Employes2.
     */
    public function setForfaitHeure(?bool $forfaitHeure): Employes2 {
        $this->forfaitHeure = $forfaitHeure;
        return $this;
    }

    /**
     * Set the forfait jour.
     *
     * @param bool|null $forfaitJour The forfait jour.
     * @return Employes2 Returns this Employes2.
     */
    public function setForfaitJour(?bool $forfaitJour): Employes2 {
        $this->forfaitJour = $forfaitJour;
        return $this;
    }

    /**
     * Set the gestion compteur h completer.
     *
     * @param bool|null $gestionCompteurHCompleter The gestion compteur h completer.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionCompteurHCompleter(?bool $gestionCompteurHCompleter): Employes2 {
        $this->gestionCompteurHCompleter = $gestionCompteurHCompleter;
        return $this;
    }

    /**
     * Set the gestion cp.
     *
     * @param string|null $gestionCp The gestion cp.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionCp(?string $gestionCp): Employes2 {
        $this->gestionCp = $gestionCp;
        return $this;
    }

    /**
     * Set the gestion mail bulletin.
     *
     * @param bool|null $gestionMailBulletin The gestion mail bulletin.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionMailBulletin(?bool $gestionMailBulletin): Employes2 {
        $this->gestionMailBulletin = $gestionMailBulletin;
        return $this;
    }

    /**
     * Set the gestion repos comp.
     *
     * @param string|null $gestionReposComp The gestion repos comp.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionReposComp(?string $gestionReposComp): Employes2 {
        $this->gestionReposComp = $gestionReposComp;
        return $this;
    }

    /**
     * Set the gestion repos recup.
     *
     * @param string|null $gestionReposRecup The gestion repos recup.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionReposRecup(?string $gestionReposRecup): Employes2 {
        $this->gestionReposRecup = $gestionReposRecup;
        return $this;
    }

    /**
     * Set the gestion repos remplace.
     *
     * @param string|null $gestionReposRemplace The gestion repos remplace.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionReposRemplace(?string $gestionReposRemplace): Employes2 {
        $this->gestionReposRemplace = $gestionReposRemplace;
        return $this;
    }

    /**
     * Set the gestion rtt.
     *
     * @param string|null $gestionRtt The gestion rtt.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionRtt(?string $gestionRtt): Employes2 {
        $this->gestionRtt = $gestionRtt;
        return $this;
    }

    /**
     * Set the gestion sem type.
     *
     * @param string|null $gestionSemType The gestion sem type.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionSemType(?string $gestionSemType): Employes2 {
        $this->gestionSemType = $gestionSemType;
        return $this;
    }

    /**
     * Set the heures periode initial.
     *
     * @param float|null $heuresPeriodeInitial The heures periode initial.
     * @return Employes2 Returns this Employes2.
     */
    public function setHeuresPeriodeInitial(?float $heuresPeriodeInitial): Employes2 {
        $this->heuresPeriodeInitial = $heuresPeriodeInitial;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return Employes2 Returns this Employes2.
     */
    public function setIban(?string $iban): Employes2 {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the indem cp msa.
     *
     * @param bool|null $indemCpMsa The indem cp msa.
     * @return Employes2 Returns this Employes2.
     */
    public function setIndemCpMsa(?bool $indemCpMsa): Employes2 {
        $this->indemCpMsa = $indemCpMsa;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int|null $indiceCateg The indice categ.
     * @return Employes2 Returns this Employes2.
     */
    public function setIndiceCateg(?int $indiceCateg): Employes2 {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the inspecteur.
     *
     * @param bool|null $inspecteur The inspecteur.
     * @return Employes2 Returns this Employes2.
     */
    public function setInspecteur(?bool $inspecteur): Employes2 {
        $this->inspecteur = $inspecteur;
        return $this;
    }

    /**
     * Set the interim indem cp fillon.
     *
     * @param bool|null $interimIndemCpFillon The interim indem cp fillon.
     * @return Employes2 Returns this Employes2.
     */
    public function setInterimIndemCpFillon(?bool $interimIndemCpFillon): Employes2 {
        $this->interimIndemCpFillon = $interimIndemCpFillon;
        return $this;
    }

    /**
     * Set the mail bulletin pwd.
     *
     * @param string|null $mailBulletinPwd The mail bulletin pwd.
     * @return Employes2 Returns this Employes2.
     */
    public function setMailBulletinPwd(?string $mailBulletinPwd): Employes2 {
        $this->mailBulletinPwd = $mailBulletinPwd;
        return $this;
    }

    /**
     * Set the maintien intervient cp.
     *
     * @param string|null $maintienIntervientCp The maintien intervient cp.
     * @return Employes2 Returns this Employes2.
     */
    public function setMaintienIntervientCp(?string $maintienIntervientCp): Employes2 {
        $this->maintienIntervientCp = $maintienIntervientCp;
        return $this;
    }

    /**
     * Set the maintien net deduc csgijss.
     *
     * @param bool|null $maintienNetDeducCsgijss The maintien net deduc csgijss.
     * @return Employes2 Returns this Employes2.
     */
    public function setMaintienNetDeducCsgijss(?bool $maintienNetDeducCsgijss): Employes2 {
        $this->maintienNetDeducCsgijss = $maintienNetDeducCsgijss;
        return $this;
    }

    /**
     * Set the maintien salaire.
     *
     * @param string|null $maintienSalaire The maintien salaire.
     * @return Employes2 Returns this Employes2.
     */
    public function setMaintienSalaire(?string $maintienSalaire): Employes2 {
        $this->maintienSalaire = $maintienSalaire;
        return $this;
    }

    /**
     * Set the maintien specifique.
     *
     * @param bool|null $maintienSpecifique The maintien specifique.
     * @return Employes2 Returns this Employes2.
     */
    public function setMaintienSpecifique(?bool $maintienSpecifique): Employes2 {
        $this->maintienSpecifique = $maintienSpecifique;
        return $this;
    }

    /**
     * Set the majo professionnalisation.
     *
     * @param bool|null $majoProfessionnalisation The majo professionnalisation.
     * @return Employes2 Returns this Employes2.
     */
    public function setMajoProfessionnalisation(?bool $majoProfessionnalisation): Employes2 {
        $this->majoProfessionnalisation = $majoProfessionnalisation;
        return $this;
    }

    /**
     * Set the mandataire social.
     *
     * @param bool|null $mandataireSocial The mandataire social.
     * @return Employes2 Returns this Employes2.
     */
    public function setMandataireSocial(?bool $mandataireSocial): Employes2 {
        $this->mandataireSocial = $mandataireSocial;
        return $this;
    }

    /**
     * Set the modele bulletin.
     *
     * @param string|null $modeleBulletin The modele bulletin.
     * @return Employes2 Returns this Employes2.
     */
    public function setModeleBulletin(?string $modeleBulletin): Employes2 {
        $this->modeleBulletin = $modeleBulletin;
        return $this;
    }

    /**
     * Set the mois cloture dif.
     *
     * @param string|null $moisClotureDif The mois cloture dif.
     * @return Employes2 Returns this Employes2.
     */
    public function setMoisClotureDif(?string $moisClotureDif): Employes2 {
        $this->moisClotureDif = $moisClotureDif;
        return $this;
    }

    /**
     * Set the motif cdd.
     *
     * @param string|null $motifCdd The motif cdd.
     * @return Employes2 Returns this Employes2.
     */
    public function setMotifCdd(?string $motifCdd): Employes2 {
        $this->motifCdd = $motifCdd;
        return $this;
    }

    /**
     * Set the motif exclusion dsn.
     *
     * @param string|null $motifExclusionDsn The motif exclusion dsn.
     * @return Employes2 Returns this Employes2.
     */
    public function setMotifExclusionDsn(?string $motifExclusionDsn): Employes2 {
        $this->motifExclusionDsn = $motifExclusionDsn;
        return $this;
    }

    /**
     * Set the multi employeur.
     *
     * @param bool|null $multiEmployeur The multi employeur.
     * @return Employes2 Returns this Employes2.
     */
    public function setMultiEmployeur(?bool $multiEmployeur): Employes2 {
        $this->multiEmployeur = $multiEmployeur;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string|null $natureAnalytique The nature analytique.
     * @return Employes2 Returns this Employes2.
     */
    public function setNatureAnalytique(?string $natureAnalytique): Employes2 {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the nb h bonifie.
     *
     * @param float|null $nbHBonifie The nb h bonifie.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHBonifie(?float $nbHBonifie): Employes2 {
        $this->nbHBonifie = $nbHBonifie;
        return $this;
    }

    /**
     * Set the nb h contingent.
     *
     * @param float|null $nbHContingent The nb h contingent.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHContingent(?float $nbHContingent): Employes2 {
        $this->nbHContingent = $nbHContingent;
        return $this;
    }

    /**
     * Set the nb h jour1.
     *
     * @param float|null $nbHJour1 The nb h jour1.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour1(?float $nbHJour1): Employes2 {
        $this->nbHJour1 = $nbHJour1;
        return $this;
    }

    /**
     * Set the nb h jour2.
     *
     * @param float|null $nbHJour2 The nb h jour2.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour2(?float $nbHJour2): Employes2 {
        $this->nbHJour2 = $nbHJour2;
        return $this;
    }

    /**
     * Set the nb h jour3.
     *
     * @param float|null $nbHJour3 The nb h jour3.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour3(?float $nbHJour3): Employes2 {
        $this->nbHJour3 = $nbHJour3;
        return $this;
    }

    /**
     * Set the nb h jour4.
     *
     * @param float|null $nbHJour4 The nb h jour4.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour4(?float $nbHJour4): Employes2 {
        $this->nbHJour4 = $nbHJour4;
        return $this;
    }

    /**
     * Set the nb h jour5.
     *
     * @param float|null $nbHJour5 The nb h jour5.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour5(?float $nbHJour5): Employes2 {
        $this->nbHJour5 = $nbHJour5;
        return $this;
    }

    /**
     * Set the nb h jour6.
     *
     * @param float|null $nbHJour6 The nb h jour6.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour6(?float $nbHJour6): Employes2 {
        $this->nbHJour6 = $nbHJour6;
        return $this;
    }

    /**
     * Set the nb h jour7.
     *
     * @param float|null $nbHJour7 The nb h jour7.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour7(?float $nbHJour7): Employes2 {
        $this->nbHJour7 = $nbHJour7;
        return $this;
    }

    /**
     * Set the nb jour annee.
     *
     * @param float|null $nbJourAnnee The nb jour annee.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbJourAnnee(?float $nbJourAnnee): Employes2 {
        $this->nbJourAnnee = $nbJourAnnee;
        return $this;
    }

    /**
     * Set the nb jour cp acquis.
     *
     * @param float|null $nbJourCpAcquis The nb jour cp acquis.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbJourCpAcquis(?float $nbJourCpAcquis): Employes2 {
        $this->nbJourCpAcquis = $nbJourCpAcquis;
        return $this;
    }

    /**
     * Set the nb jour cp sup.
     *
     * @param float|null $nbJourCpSup The nb jour cp sup.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbJourCpSup(?float $nbJourCpSup): Employes2 {
        $this->nbJourCpSup = $nbJourCpSup;
        return $this;
    }

    /**
     * Set the nb piece logement.
     *
     * @param string|null $nbPieceLogement The nb piece logement.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbPieceLogement(?string $nbPieceLogement): Employes2 {
        $this->nbPieceLogement = $nbPieceLogement;
        return $this;
    }

    /**
     * Set the ne pas activer prime annuelle proprete.
     *
     * @param bool|null $nePasActiverPrimeAnnuelleProprete The ne pas activer prime annuelle proprete.
     * @return Employes2 Returns this Employes2.
     */
    public function setNePasActiverPrimeAnnuelleProprete(?bool $nePasActiverPrimeAnnuelleProprete): Employes2 {
        $this->nePasActiverPrimeAnnuelleProprete = $nePasActiverPrimeAnnuelleProprete;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string|null $niveau The niveau.
     * @return Employes2 Returns this Employes2.
     */
    public function setNiveau(?string $niveau): Employes2 {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the nom ville insee.
     *
     * @param string|null $nomVilleInsee The nom ville insee.
     * @return Employes2 Returns this Employes2.
     */
    public function setNomVilleInsee(?string $nomVilleInsee): Employes2 {
        $this->nomVilleInsee = $nomVilleInsee;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return Employes2 Returns this Employes2.
     */
    public function setNumero(?string $numero): Employes2 {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero abattement contrat msa.
     *
     * @param int|null $numeroAbattementContratMsa The numero abattement contrat msa.
     * @return Employes2 Returns this Employes2.
     */
    public function setNumeroAbattementContratMsa(?int $numeroAbattementContratMsa): Employes2 {
        $this->numeroAbattementContratMsa = $numeroAbattementContratMsa;
        return $this;
    }

    /**
     * Set the numero contrat.
     *
     * @param int|null $numeroContrat The numero contrat.
     * @return Employes2 Returns this Employes2.
     */
    public function setNumeroContrat(?int $numeroContrat): Employes2 {
        $this->numeroContrat = $numeroContrat;
        return $this;
    }

    /**
     * Set the numero employe contrat.
     *
     * @param string|null $numeroEmployeContrat The numero employe contrat.
     * @return Employes2 Returns this Employes2.
     */
    public function setNumeroEmployeContrat(?string $numeroEmployeContrat): Employes2 {
        $this->numeroEmployeContrat = $numeroEmployeContrat;
        return $this;
    }

    /**
     * Set the pas gestion dif.
     *
     * @param bool|null $pasGestionDif The pas gestion dif.
     * @return Employes2 Returns this Employes2.
     */
    public function setPasGestionDif(?bool $pasGestionDif): Employes2 {
        $this->pasGestionDif = $pasGestionDif;
        return $this;
    }

    /**
     * Set the pays naissance.
     *
     * @param string|null $paysNaissance The pays naissance.
     * @return Employes2 Returns this Employes2.
     */
    public function setPaysNaissance(?string $paysNaissance): Employes2 {
        $this->paysNaissance = $paysNaissance;
        return $this;
    }

    /**
     * Set the pays nat.
     *
     * @param string|null $paysNat The pays nat.
     * @return Employes2 Returns this Employes2.
     */
    public function setPaysNat(?string $paysNat): Employes2 {
        $this->paysNat = $paysNat;
        return $this;
    }

    /**
     * Set the periode pointage cloturee.
     *
     * @param DateTime|null $periodePointageCloturee The periode pointage cloturee.
     * @return Employes2 Returns this Employes2.
     */
    public function setPeriodePointageCloturee(?DateTime $periodePointageCloturee): Employes2 {
        $this->periodePointageCloturee = $periodePointageCloturee;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param string|null $position The position.
     * @return Employes2 Returns this Employes2.
     */
    public function setPosition(?string $position): Employes2 {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the pourcent exo.
     *
     * @param float|null $pourcentExo The pourcent exo.
     * @return Employes2 Returns this Employes2.
     */
    public function setPourcentExo(?float $pourcentExo): Employes2 {
        $this->pourcentExo = $pourcentExo;
        return $this;
    }

    /**
     * Set the rbt navigo non proratise.
     *
     * @param bool|null $rbtNavigoNonProratise The rbt navigo non proratise.
     * @return Employes2 Returns this Employes2.
     */
    public function setRbtNavigoNonProratise(?bool $rbtNavigoNonProratise): Employes2 {
        $this->rbtNavigoNonProratise = $rbtNavigoNonProratise;
        return $this;
    }

    /**
     * Set the reduction fillon.
     *
     * @param string|null $reductionFillon The reduction fillon.
     * @return Employes2 Returns this Employes2.
     */
    public function setReductionFillon(?string $reductionFillon): Employes2 {
        $this->reductionFillon = $reductionFillon;
        return $this;
    }

    /**
     * Set the reduction mayotte.
     *
     * @param string|null $reductionMayotte The reduction mayotte.
     * @return Employes2 Returns this Employes2.
     */
    public function setReductionMayotte(?string $reductionMayotte): Employes2 {
        $this->reductionMayotte = $reductionMayotte;
        return $this;
    }

    /**
     * Set the remun part fillon.
     *
     * @param bool|null $remunPartFillon The remun part fillon.
     * @return Employes2 Returns this Employes2.
     */
    public function setRemunPartFillon(?bool $remunPartFillon): Employes2 {
        $this->remunPartFillon = $remunPartFillon;
        return $this;
    }

    /**
     * Set the rtt1.
     *
     * @param float|null $rtt1 The rtt1.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt1(?float $rtt1): Employes2 {
        $this->rtt1 = $rtt1;
        return $this;
    }

    /**
     * Set the rtt10.
     *
     * @param float|null $rtt10 The rtt10.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt10(?float $rtt10): Employes2 {
        $this->rtt10 = $rtt10;
        return $this;
    }

    /**
     * Set the rtt11.
     *
     * @param float|null $rtt11 The rtt11.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt11(?float $rtt11): Employes2 {
        $this->rtt11 = $rtt11;
        return $this;
    }

    /**
     * Set the rtt12.
     *
     * @param float|null $rtt12 The rtt12.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt12(?float $rtt12): Employes2 {
        $this->rtt12 = $rtt12;
        return $this;
    }

    /**
     * Set the rtt2.
     *
     * @param float|null $rtt2 The rtt2.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt2(?float $rtt2): Employes2 {
        $this->rtt2 = $rtt2;
        return $this;
    }

    /**
     * Set the rtt3.
     *
     * @param float|null $rtt3 The rtt3.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt3(?float $rtt3): Employes2 {
        $this->rtt3 = $rtt3;
        return $this;
    }

    /**
     * Set the rtt4.
     *
     * @param float|null $rtt4 The rtt4.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt4(?float $rtt4): Employes2 {
        $this->rtt4 = $rtt4;
        return $this;
    }

    /**
     * Set the rtt5.
     *
     * @param float|null $rtt5 The rtt5.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt5(?float $rtt5): Employes2 {
        $this->rtt5 = $rtt5;
        return $this;
    }

    /**
     * Set the rtt6.
     *
     * @param float|null $rtt6 The rtt6.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt6(?float $rtt6): Employes2 {
        $this->rtt6 = $rtt6;
        return $this;
    }

    /**
     * Set the rtt7.
     *
     * @param float|null $rtt7 The rtt7.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt7(?float $rtt7): Employes2 {
        $this->rtt7 = $rtt7;
        return $this;
    }

    /**
     * Set the rtt8.
     *
     * @param float|null $rtt8 The rtt8.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt8(?float $rtt8): Employes2 {
        $this->rtt8 = $rtt8;
        return $this;
    }

    /**
     * Set the rtt9.
     *
     * @param float|null $rtt9 The rtt9.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt9(?float $rtt9): Employes2 {
        $this->rtt9 = $rtt9;
        return $this;
    }

    /**
     * Set the sans contrat.
     *
     * @param int|null $sansContrat The sans contrat.
     * @return Employes2 Returns this Employes2.
     */
    public function setSansContrat(?int $sansContrat): Employes2 {
        $this->sansContrat = $sansContrat;
        return $this;
    }

    /**
     * Set the subrogation.
     *
     * @param string|null $subrogation The subrogation.
     * @return Employes2 Returns this Employes2.
     */
    public function setSubrogation(?string $subrogation): Employes2 {
        $this->subrogation = $subrogation;
        return $this;
    }

    /**
     * Set the tds142.
     *
     * @param float|null $tds142 The tds142.
     * @return Employes2 Returns this Employes2.
     */
    public function setTds142(?float $tds142): Employes2 {
        $this->tds142 = $tds142;
        return $this;
    }

    /**
     * Set the tds alloc chom.
     *
     * @param float|null $tdsAllocChom The tds alloc chom.
     * @return Employes2 Returns this Employes2.
     */
    public function setTdsAllocChom(?float $tdsAllocChom): Employes2 {
        $this->tdsAllocChom = $tdsAllocChom;
        return $this;
    }

    /**
     * Set the tds alloc retraite.
     *
     * @param float|null $tdsAllocRetraite The tds alloc retraite.
     * @return Employes2 Returns this Employes2.
     */
    public function setTdsAllocRetraite(?float $tdsAllocRetraite): Employes2 {
        $this->tdsAllocRetraite = $tdsAllocRetraite;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string|null $tel2 The tel2.
     * @return Employes2 Returns this Employes2.
     */
    public function setTel2(?string $tel2): Employes2 {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the travailleur de nuit.
     *
     * @param bool|null $travailleurDeNuit The travailleur de nuit.
     * @return Employes2 Returns this Employes2.
     */
    public function setTravailleurDeNuit(?bool $travailleurDeNuit): Employes2 {
        $this->travailleurDeNuit = $travailleurDeNuit;
        return $this;
    }

    /**
     * Set the type abo navigo.
     *
     * @param string|null $typeAboNavigo The type abo navigo.
     * @return Employes2 Returns this Employes2.
     */
    public function setTypeAboNavigo(?string $typeAboNavigo): Employes2 {
        $this->typeAboNavigo = $typeAboNavigo;
        return $this;
    }

    /**
     * Set the type exo lodeom.
     *
     * @param string|null $typeExoLodeom The type exo lodeom.
     * @return Employes2 Returns this Employes2.
     */
    public function setTypeExoLodeom(?string $typeExoLodeom): Employes2 {
        $this->typeExoLodeom = $typeExoLodeom;
        return $this;
    }

    /**
     * Set the type intemperie btp.
     *
     * @param string|null $typeIntemperieBtp The type intemperie btp.
     * @return Employes2 Returns this Employes2.
     */
    public function setTypeIntemperieBtp(?string $typeIntemperieBtp): Employes2 {
        $this->typeIntemperieBtp = $typeIntemperieBtp;
        return $this;
    }

    /**
     * Set the type maintien brut net.
     *
     * @param string|null $typeMaintienBrutNet The type maintien brut net.
     * @return Employes2 Returns this Employes2.
     */
    public function setTypeMaintienBrutNet(?string $typeMaintienBrutNet): Employes2 {
        $this->typeMaintienBrutNet = $typeMaintienBrutNet;
        return $this;
    }

    /**
     * Set the type maintien salaire.
     *
     * @param string|null $typeMaintienSalaire The type maintien salaire.
     * @return Employes2 Returns this Employes2.
     */
    public function setTypeMaintienSalaire(?string $typeMaintienSalaire): Employes2 {
        $this->typeMaintienSalaire = $typeMaintienSalaire;
        return $this;
    }

    /**
     * Set the type saisie ab cp.
     *
     * @param string|null $typeSaisieAbCp The type saisie ab cp.
     * @return Employes2 Returns this Employes2.
     */
    public function setTypeSaisieAbCp(?string $typeSaisieAbCp): Employes2 {
        $this->typeSaisieAbCp = $typeSaisieAbCp;
        return $this;
    }

    /**
     * Set the zone navigo.
     *
     * @param string|null $zoneNavigo The zone navigo.
     * @return Employes2 Returns this Employes2.
     */
    public function setZoneNavigo(?string $zoneNavigo): Employes2 {
        $this->zoneNavigo = $zoneNavigo;
        return $this;
    }
}
