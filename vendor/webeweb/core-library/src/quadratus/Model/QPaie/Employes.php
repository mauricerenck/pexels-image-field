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
 * Employes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Employes {

    /**
     * A transferer en p.
     *
     * @var bool|null
     */
    private $aTransfererEnP;

    /**
     * Administratif.
     *
     * @var bool|null
     */
    private $administratif;

    /**
     * Alleg particulier.
     *
     * @var bool|null
     */
    private $allegParticulier;

    /**
     * Autre alleg.
     *
     * @var bool|null
     */
    private $autreAlleg;

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
     * Calcul particip.
     *
     * @var bool|null
     */
    private $calculParticip;

    /**
     * Carte sejour delivree le.
     *
     * @var DateTime|null
     */
    private $carteSejourDelivreeLe;

    /**
     * Carte sejour expire le.
     *
     * @var DateTime|null
     */
    private $carteSejourExpireLe;

    /**
     * Carte travail delivree le.
     *
     * @var DateTime|null
     */
    private $carteTravailDelivreeLe;

    /**
     * Carte travail expire le.
     *
     * @var DateTime|null
     */
    private $carteTravailExpireLe;

    /**
     * Cas part ss.
     *
     * @var bool|null
     */
    private $casPartSs;

    /**
     * Categ population.
     *
     * @var string|null
     */
    private $categPopulation;

    /**
     * Categ salarie.
     *
     * @var string|null
     */
    private $categSalarie;

    /**
     * Categorie permis.
     *
     * @var string|null
     */
    private $categoriePermis;

    /**
     * Cddcdi.
     *
     * @var bool|null
     */
    private $cddcdi;

    /**
     * Classification.
     *
     * @var string|null
     */
    private $classification;

    /**
     * Cle deux.
     *
     * @var string|null
     */
    private $cleDeux;

    /**
     * Code at.
     *
     * @var int|null
     */
    private $codeAt;

    /**
     * Code centre urssaf.
     *
     * @var string|null
     */
    private $codeCentreUrssaf;

    /**
     * Code convention.
     *
     * @var string|null
     */
    private $codeConvention;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code naf.
     *
     * @var int|null
     */
    private $codeNaf;

    /**
     * Code officiel commune.
     *
     * @var string|null
     */
    private $codeOfficielCommune;

    /**
     * Code pays naissance.
     *
     * @var string|null
     */
    private $codePaysNaissance;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Code type sal.
     *
     * @var string|null
     */
    private $codeTypeSal;

    /**
     * Commune naissance.
     *
     * @var string|null
     */
    private $communeNaissance;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Compte tiers.
     *
     * @var string|null
     */
    private $compteTiers;

    /**
     * Cpt accompte.
     *
     * @var int|null
     */
    private $cptAccompte;

    /**
     * Ctrl taux sal base.
     *
     * @var bool|null
     */
    private $ctrlTauxSalBase;

    /**
     * Cum30 ss.
     *
     * @var float|null
     */
    private $cum30Ss;

    /**
     * Cum base csg.
     *
     * @var float|null
     */
    private $cumBaseCsg;

    /**
     * Cum base gmp.
     *
     * @var float|null
     */
    private $cumBaseGmp;

    /**
     * Cum base ss.
     *
     * @var float|null
     */
    private $cumBaseSs;

    /**
     * Cum base tr a.
     *
     * @var float|null
     */
    private $cumBaseTrA;

    /**
     * Cum base tr a caisse1.
     *
     * @var float|null
     */
    private $cumBaseTrACaisse1;

    /**
     * Cum base tr a caisse2.
     *
     * @var float|null
     */
    private $cumBaseTrACaisse2;

    /**
     * Cum base tr a caisse3.
     *
     * @var float|null
     */
    private $cumBaseTrACaisse3;

    /**
     * Cum base tr b.
     *
     * @var float|null
     */
    private $cumBaseTrB;

    /**
     * Cum base tr b caisse1.
     *
     * @var float|null
     */
    private $cumBaseTrBCaisse1;

    /**
     * Cum base tr b caisse2.
     *
     * @var float|null
     */
    private $cumBaseTrBCaisse2;

    /**
     * Cum base tr b caisse3.
     *
     * @var float|null
     */
    private $cumBaseTrBCaisse3;

    /**
     * Cum base tr c.
     *
     * @var float|null
     */
    private $cumBaseTrC;

    /**
     * Cum base tr c caisse1.
     *
     * @var float|null
     */
    private $cumBaseTrCCaisse1;

    /**
     * Cum base tr c caisse2.
     *
     * @var float|null
     */
    private $cumBaseTrCCaisse2;

    /**
     * Cum base tr c caisse3.
     *
     * @var float|null
     */
    private $cumBaseTrCCaisse3;

    /**
     * Cum brut abat non lim.
     *
     * @var float|null
     */
    private $cumBrutAbatNonLim;

    /**
     * Cum brut al.
     *
     * @var float|null
     */
    private $cumBrutAl;

    /**
     * Cum brut non abattu.
     *
     * @var float|null
     */
    private $cumBrutNonAbattu;

    /**
     * Cum cp dus.
     *
     * @var float|null
     */
    private $cumCpDus;

    /**
     * Cum cp dus1.
     *
     * @var float|null
     */
    private $cumCpDus1;

    /**
     * Cum cp pris.
     *
     * @var float|null
     */
    private $cumCpPris;

    /**
     * Cum cp pris1.
     *
     * @var float|null
     */
    private $cumCpPris1;

    /**
     * Cum h repos remplace.
     *
     * @var float|null
     */
    private $cumHReposRemplace;

    /**
     * Cum h service.
     *
     * @var float|null
     */
    private $cumHService;

    /**
     * Cum h sup.
     *
     * @var float|null
     */
    private $cumHSup;

    /**
     * Cum h sup rcit.
     *
     * @var float|null
     */
    private $cumHSupRcit;

    /**
     * Cum heure paye.
     *
     * @var float|null
     */
    private $cumHeurePaye;

    /**
     * Cum heure trav.
     *
     * @var float|null
     */
    private $cumHeureTrav;

    /**
     * Cum j repos recup.
     *
     * @var float|null
     */
    private $cumJReposRecup;

    /**
     * Cum jour paye.
     *
     * @var float|null
     */
    private $cumJourPaye;

    /**
     * Cum jour trav.
     *
     * @var float|null
     */
    private $cumJourTrav;

    /**
     * Cum mt cp pris.
     *
     * @var float|null
     */
    private $cumMtCpPris;

    /**
     * Cum mt cp pris1.
     *
     * @var float|null
     */
    private $cumMtCpPris1;

    /**
     * Cum net a payer.
     *
     * @var float|null
     */
    private $cumNetAPayer;

    /**
     * Cum net imposable.
     *
     * @var float|null
     */
    private $cumNetImposable;

    /**
     * Cum plaf1 caisse1.
     *
     * @var float|null
     */
    private $cumPlaf1Caisse1;

    /**
     * Cum plaf1 caisse2.
     *
     * @var float|null
     */
    private $cumPlaf1Caisse2;

    /**
     * Cum plaf1 caisse3.
     *
     * @var float|null
     */
    private $cumPlaf1Caisse3;

    /**
     * Cum plaf2 caisse1.
     *
     * @var float|null
     */
    private $cumPlaf2Caisse1;

    /**
     * Cum plaf2 caisse2.
     *
     * @var float|null
     */
    private $cumPlaf2Caisse2;

    /**
     * Cum plaf2 caisse3.
     *
     * @var float|null
     */
    private $cumPlaf2Caisse3;

    /**
     * Cum plafond gmp.
     *
     * @var float|null
     */
    private $cumPlafondGmp;

    /**
     * Cum plafond ss1.
     *
     * @var float|null
     */
    private $cumPlafondSs1;

    /**
     * Cum plafond ss2.
     *
     * @var float|null
     */
    private $cumPlafondSs2;

    /**
     * Cum prov cp.
     *
     * @var float|null
     */
    private $cumProvCp;

    /**
     * Cum prov cp1.
     *
     * @var float|null
     */
    private $cumProvCp1;

    /**
     * Cum repos comp.
     *
     * @var float|null
     */
    private $cumReposComp;

    /**
     * Date ancien.
     *
     * @var DateTime|null
     */
    private $dateAncien;

    /**
     * Date embauche.
     *
     * @var DateTime|null
     */
    private $dateEmbauche;

    /**
     * Date entree1.
     *
     * @var DateTime|null
     */
    private $dateEntree1;

    /**
     * Date entree2.
     *
     * @var DateTime|null
     */
    private $dateEntree2;

    /**
     * Date licenciement.
     *
     * @var DateTime|null
     */
    private $dateLicenciement;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date naiss conjoint.
     *
     * @var DateTime|null
     */
    private $dateNaissConjoint;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Date sortie1.
     *
     * @var DateTime|null
     */
    private $dateSortie1;

    /**
     * Date sortie2.
     *
     * @var DateTime|null
     */
    private $dateSortie2;

    /**
     * Date visite medicale.
     *
     * @var DateTime|null
     */
    private $dateVisiteMedicale;

    /**
     * Date visite reprise.
     *
     * @var DateTime|null
     */
    private $dateVisiteReprise;

    /**
     * Dept naissance.
     *
     * @var string|null
     */
    private $deptNaissance;

    /**
     * Dern num prime.
     *
     * @var int|null
     */
    private $dernNumPrime;

    /**
     * Dim type2.
     *
     * @var bool|null
     */
    private $dimType2;

    /**
     * Dir non salarie.
     *
     * @var bool|null
     */
    private $dirNonSalarie;

    /**
     * Dom banque.
     *
     * @var string|null
     */
    private $domBanque;

    /**
     * Ed taux sal base.
     *
     * @var bool|null
     */
    private $edTauxSalBase;

    /**
     * Effectif.
     *
     * @var bool|null
     */
    private $effectif;

    /**
     * Effectif das.
     *
     * @var bool|null
     */
    private $effectifDas;

    /**
     * Emploi.
     *
     * @var string|null
     */
    private $emploi;

    /**
     * Fictif.
     *
     * @var bool|null
     */
    private $fictif;

    /**
     * Fraction etab.
     *
     * @var string|null
     */
    private $fractionEtab;

    /**
     * Gestion maj dim.
     *
     * @var string|null
     */
    private $gestionMajDim;

    /**
     * Gestion maj jf.
     *
     * @var string|null
     */
    private $gestionMajJf;

    /**
     * Gestion maj nuit.
     *
     * @var string|null
     */
    private $gestionMajNuit;

    /**
     * Grille anc1.
     *
     * @var string|null
     */
    private $grilleAnc1;

    /**
     * Grille anc2.
     *
     * @var string|null
     */
    private $grilleAnc2;

    /**
     * Grille anc3.
     *
     * @var string|null
     */
    private $grilleAnc3;

    /**
     * H nuit type2.
     *
     * @var bool|null
     */
    private $hNuitType2;

    /**
     * Handicape.
     *
     * @var bool|null
     */
    private $handicape;

    /**
     * Lieu travail conjoint.
     *
     * @var string|null
     */
    private $lieuTravailConjoint;

    /**
     * Matricule.
     *
     * @var string|null
     */
    private $matricule;

    /**
     * Mensualisation tache.
     *
     * @var string|null
     */
    private $mensualisationTache;

    /**
     * Mention cp.
     *
     * @var bool|null
     */
    private $mentionCp;

    /**
     * Min garanti.
     *
     * @var float|null
     */
    private $minGaranti;

    /**
     * Montant1.
     *
     * @var float|null
     */
    private $montant1;

    /**
     * Montant2.
     *
     * @var float|null
     */
    private $montant2;

    /**
     * Montant3.
     *
     * @var float|null
     */
    private $montant3;

    /**
     * Montant4.
     *
     * @var float|null
     */
    private $montant4;

    /**
     * Montant5.
     *
     * @var float|null
     */
    private $montant5;

    /**
     * Montant avantage.
     *
     * @var float|null
     */
    private $montantAvantage;

    /**
     * Mt base acompte.
     *
     * @var float|null
     */
    private $mtBaseAcompte;

    /**
     * Nationalite.
     *
     * @var string|null
     */
    private $nationalite;

    /**
     * Nb heure mois.
     *
     * @var float|null
     */
    private $nbHeureMois;

    /**
     * Nb heure sal.
     *
     * @var float|null
     */
    private $nbHeureSal;

    /**
     * Nb heure sup.
     *
     * @var float|null
     */
    private $nbHeureSup;

    /**
     * Nb heure trav.
     *
     * @var float|null
     */
    private $nbHeureTrav;

    /**
     * Nb jour base cp.
     *
     * @var float|null
     */
    private $nbJourBaseCp;

    /**
     * Nb points.
     *
     * @var int|null
     */
    private $nbPoints;

    /**
     * Niveau confidentialite.
     *
     * @var string|null
     */
    private $niveauConfidentialite;

    /**
     * Nom conjoint.
     *
     * @var string|null
     */
    private $nomConjoint;

    /**
     * Nom marital.
     *
     * @var string|null
     */
    private $nomMarital;

    /**
     * Nom naissance.
     *
     * @var string|null
     */
    private $nomNaissance;

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
     * Nombre enfants.
     *
     * @var string|null
     */
    private $nombreEnfants;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Numero.
     *
     * @var string|null
     */
    private $numero;

    /**
     * Numero carte sejour.
     *
     * @var string|null
     */
    private $numeroCarteSejour;

    /**
     * Numero carte travail.
     *
     * @var string|null
     */
    private $numeroCarteTravail;

    /**
     * Numero cas part secu.
     *
     * @var int|null
     */
    private $numeroCasPartSecu;

    /**
     * Numero grille type.
     *
     * @var int|null
     */
    private $numeroGrilleType;

    /**
     * Numero insee.
     *
     * @var string|null
     */
    private $numeroInsee;

    /**
     * Numero permis.
     *
     * @var string|null
     */
    private $numeroPermis;

    /**
     * Orphelin.
     *
     * @var bool|null
     */
    private $orphelin;

    /**
     * Pas gestion pdp.
     *
     * @var bool|null
     */
    private $pasGestionPdp;

    /**
     * Pas gestion pdp1.
     *
     * @var bool|null
     */
    private $pasGestionPdp1;

    /**
     * Pension.
     *
     * @var bool|null
     */
    private $pension;

    /**
     * Periodicite.
     *
     * @var string|null
     */
    private $periodicite;

    /**
     * Permis delivre le.
     *
     * @var DateTime|null
     */
    private $permisDelivreLe;

    /**
     * Permis delivre par.
     *
     * @var string|null
     */
    private $permisDelivrePar;

    /**
     * Permis expire le.
     *
     * @var DateTime|null
     */
    private $permisExpireLe;

    /**
     * Personne a prevenir.
     *
     * @var string|null
     */
    private $personneAPrevenir;

    /**
     * Plafond gmp.
     *
     * @var float|null
     */
    private $plafondGmp;

    /**
     * Plafond ss1.
     *
     * @var float|null
     */
    private $plafondSs1;

    /**
     * plafond ss2.
     *
     * @var float|null
     */
    private $plafondSs2;

    /**
     * Plafond ss30.
     *
     * @var bool|null
     */
    private $plafondSs30;

    /**
     * Pourcent abat.
     *
     * @var float|null
     */
    private $pourcentAbat;

    /**
     * Pourcent act.
     *
     * @var float|null
     */
    private $pourcentAct;

    /**
     * Pourcent effectif ducs.
     *
     * @var float|null
     */
    private $pourcentEffectifDucs;

    /**
     * Pourcent remu hor.
     *
     * @var float|null
     */
    private $pourcentRemuHor;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Prenom conjoint.
     *
     * @var string|null
     */
    private $prenomConjoint;

    /**
     * Prime.
     *
     * @var bool|null
     */
    private $prime;

    /**
     * Prud college.
     *
     * @var string|null
     */
    private $prudCollege;

    /**
     * Prud lieu vote.
     *
     * @var string|null
     */
    private $prudLieuVote;

    /**
     * Prud section.
     *
     * @var string|null
     */
    private $prudSection;

    /**
     * Qualification.
     *
     * @var string|null
     */
    private $qualification;

    /**
     * Regle calcul.
     *
     * @var string|null
     */
    private $regleCalcul;

    /**
     * Regroup virement.
     *
     * @var string|null
     */
    private $regroupVirement;

    /**
     * Regul tds.
     *
     * @var bool|null
     */
    private $regulTds;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Salaire base.
     *
     * @var float|null
     */
    private $salaireBase;

    /**
     * Service.
     *
     * @var string|null
     */
    private $service;

    /**
     * Sexe.
     *
     * @var string|null
     */
    private $sexe;

    /**
     * Situation fam.
     *
     * @var string|null
     */
    private $situationFam;

    /**
     * Taux1.
     *
     * @var float|null
     */
    private $taux1;

    /**
     * Taux2.
     *
     * @var float|null
     */
    private $taux2;

    /**
     * Taux3.
     *
     * @var float|null
     */
    private $taux3;

    /**
     * Taux4.
     *
     * @var float|null
     */
    private $taux4;

    /**
     * Taux5.
     *
     * @var float|null
     */
    private $taux5;

    /**
     * Taux absence.
     *
     * @var float|null
     */
    private $tauxAbsence;

    /**
     * Taux ancien.
     *
     * @var float|null
     */
    private $tauxAncien;

    /**
     * Taux h sup.
     *
     * @var float|null
     */
    private $tauxHSup;

    /**
     * Taux pension civile.
     *
     * @var float|null
     */
    private $tauxPensionCivile;

    /**
     * Taux pension militaire.
     *
     * @var float|null
     */
    private $tauxPensionMilitaire;

    /**
     * Taxe salaire.
     *
     * @var bool|null
     */
    private $taxeSalaire;

    /**
     * Tds100.
     *
     * @var float|null
     */
    private $tds100;

    /**
     * Tds102.
     *
     * @var float|null
     */
    private $tds102;

    /**
     * Tds103.
     *
     * @var float|null
     */
    private $tds103;

    /**
     * Tds105.
     *
     * @var float|null
     */
    private $tds105;

    /**
     * Tds107.
     *
     * @var bool|null
     */
    private $tds107;

    /**
     * Tds108.
     *
     * @var bool|null
     */
    private $tds108;

    /**
     * Tds109.
     *
     * @var bool|null
     */
    private $tds109;

    /**
     * Tds110.
     *
     * @var bool|null
     */
    private $tds110;

    /**
     * Tds112.
     *
     * @var float|null
     */
    private $tds112;

    /**
     * Tds113.
     *
     * @var bool|null
     */
    private $tds113;

    /**
     * Tds117.
     *
     * @var float|null
     */
    private $tds117;

    /**
     * Tds119.
     *
     * @var bool|null
     */
    private $tds119;

    /**
     * Tds120.
     *
     * @var bool|null
     */
    private $tds120;

    /**
     * Tds121.
     *
     * @var bool|null
     */
    private $tds121;

    /**
     * Tds122.
     *
     * @var bool|null
     */
    private $tds122;

    /**
     * Tds125.
     *
     * @var float|null
     */
    private $tds125;

    /**
     * Tds127.
     *
     * @var float|null
     */
    private $tds127;

    /**
     * Tds128.
     *
     * @var string|null
     */
    private $tds128;

    /**
     * Tds132.
     *
     * @var float|null
     */
    private $tds132;

    /**
     * Tds133.
     *
     * @var string|null
     */
    private $tds133;

    /**
     * Tds134.
     *
     * @var float|null
     */
    private $tds134;

    /**
     * Tds135.
     *
     * @var float|null
     */
    private $tds135;

    /**
     * Tds136.
     *
     * @var float|null
     */
    private $tds136;

    /**
     * Tds138.
     *
     * @var string|null
     */
    private $tds138;

    /**
     * Tds139.
     *
     * @var string|null
     */
    private $tds139;

    /**
     * Tds141.
     *
     * @var float|null
     */
    private $tds141;

    /**
     * Tds59.
     *
     * @var string|null
     */
    private $tds59;

    /**
     * Tds60.
     *
     * @var bool|null
     */
    private $tds60;

    /**
     * Tds61.
     *
     * @var string|null
     */
    private $tds61;

    /**
     * Tds75.
     *
     * @var int|null
     */
    private $tds75;

    /**
     * Tds76.
     *
     * @var string|null
     */
    private $tds76;

    /**
     * Tds77.
     *
     * @var string|null
     */
    private $tds77;

    /**
     * Tds78.
     *
     * @var bool|null
     */
    private $tds78;

    /**
     * Tds81.
     *
     * @var float|null
     */
    private $tds81;

    /**
     * Tds82.
     *
     * @var float|null
     */
    private $tds82;

    /**
     * Tds84.
     *
     * @var float|null
     */
    private $tds84;

    /**
     * Tds85.
     *
     * @var float|null
     */
    private $tds85;

    /**
     * Tds86.
     *
     * @var float|null
     */
    private $tds86;

    /**
     * Tds87.
     *
     * @var float|null
     */
    private $tds87;

    /**
     * Tds88.
     *
     * @var float|null
     */
    private $tds88;

    /**
     * Tds89.
     *
     * @var float|null
     */
    private $tds89;

    /**
     * Tds90.
     *
     * @var float|null
     */
    private $tds90;

    /**
     * Tds91.
     *
     * @var float|null
     */
    private $tds91;

    /**
     * Tds92.
     *
     * @var float|null
     */
    private $tds92;

    /**
     * Tds93.
     *
     * @var float|null
     */
    private $tds93;

    /**
     * Tds94.
     *
     * @var float|null
     */
    private $tds94;

    /**
     * Tds95.
     *
     * @var float|null
     */
    private $tds95;

    /**
     * Tel1.
     *
     * @var string|null
     */
    private $tel1;

    /**
     * Tel conjoint.
     *
     * @var string|null
     */
    private $telConjoint;

    /**
     * Tel pers a prevenir.
     *
     * @var string|null
     */
    private $telPersAPrevenir;

    /**
     * Temps passe.
     *
     * @var bool|null
     */
    private $tempsPasse;

    /**
     * Titre.
     *
     * @var string|null
     */
    private $titre;

    /**
     * Transfert entree1.
     *
     * @var bool|null
     */
    private $transfertEntree1;

    /**
     * Transfert entree2.
     *
     * @var bool|null
     */
    private $transfertEntree2;

    /**
     * Transfert sortie1.
     *
     * @var bool|null
     */
    private $transfertSortie1;

    /**
     * Transfert sortie2.
     *
     * @var bool|null
     */
    private $transfertSortie2;

    /**
     * Travaille jf.
     *
     * @var bool|null
     */
    private $travailleJf;

    /**
     * Type contrat.
     *
     * @var string|null
     */
    private $typeContrat;

    /**
     * Type nationalite.
     *
     * @var string|null
     */
    private $typeNationalite;

    /**
     * Type paiement.
     *
     * @var string|null
     */
    private $typePaiement;

    /**
     * Vrp multicarte.
     *
     * @var bool|null
     */
    private $vrpMulticarte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a transferer en p.
     *
     * @return bool|null Returns the a transferer en p.
     */
    public function getATransfererEnP(): ?bool {
        return $this->aTransfererEnP;
    }

    /**
     * Get the administratif.
     *
     * @return bool|null Returns the administratif.
     */
    public function getAdministratif(): ?bool {
        return $this->administratif;
    }

    /**
     * Get the alleg particulier.
     *
     * @return bool|null Returns the alleg particulier.
     */
    public function getAllegParticulier(): ?bool {
        return $this->allegParticulier;
    }

    /**
     * Get the autre alleg.
     *
     * @return bool|null Returns the autre alleg.
     */
    public function getAutreAlleg(): ?bool {
        return $this->autreAlleg;
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
     * Get the calcul particip.
     *
     * @return bool|null Returns the calcul particip.
     */
    public function getCalculParticip(): ?bool {
        return $this->calculParticip;
    }

    /**
     * Get the carte sejour delivree le.
     *
     * @return DateTime|null Returns the carte sejour delivree le.
     */
    public function getCarteSejourDelivreeLe(): ?DateTime {
        return $this->carteSejourDelivreeLe;
    }

    /**
     * Get the carte sejour expire le.
     *
     * @return DateTime|null Returns the carte sejour expire le.
     */
    public function getCarteSejourExpireLe(): ?DateTime {
        return $this->carteSejourExpireLe;
    }

    /**
     * Get the carte travail delivree le.
     *
     * @return DateTime|null Returns the carte travail delivree le.
     */
    public function getCarteTravailDelivreeLe(): ?DateTime {
        return $this->carteTravailDelivreeLe;
    }

    /**
     * Get the carte travail expire le.
     *
     * @return DateTime|null Returns the carte travail expire le.
     */
    public function getCarteTravailExpireLe(): ?DateTime {
        return $this->carteTravailExpireLe;
    }

    /**
     * Get the cas part ss.
     *
     * @return bool|null Returns the cas part ss.
     */
    public function getCasPartSs(): ?bool {
        return $this->casPartSs;
    }

    /**
     * Get the categ population.
     *
     * @return string|null Returns the categ population.
     */
    public function getCategPopulation(): ?string {
        return $this->categPopulation;
    }

    /**
     * Get the categ salarie.
     *
     * @return string|null Returns the categ salarie.
     */
    public function getCategSalarie(): ?string {
        return $this->categSalarie;
    }

    /**
     * Get the categorie permis.
     *
     * @return string|null Returns the categorie permis.
     */
    public function getCategoriePermis(): ?string {
        return $this->categoriePermis;
    }

    /**
     * Get the cddcdi.
     *
     * @return bool|null Returns the cddcdi.
     */
    public function getCddcdi(): ?bool {
        return $this->cddcdi;
    }

    /**
     * Get the classification.
     *
     * @return string|null Returns the classification.
     */
    public function getClassification(): ?string {
        return $this->classification;
    }

    /**
     * Get the cle deux.
     *
     * @return string|null Returns the cle deux.
     */
    public function getCleDeux(): ?string {
        return $this->cleDeux;
    }

    /**
     * Get the code at.
     *
     * @return int|null Returns the code at.
     */
    public function getCodeAt(): ?int {
        return $this->codeAt;
    }

    /**
     * Get the code centre urssaf.
     *
     * @return string|null Returns the code centre urssaf.
     */
    public function getCodeCentreUrssaf(): ?string {
        return $this->codeCentreUrssaf;
    }

    /**
     * Get the code convention.
     *
     * @return string|null Returns the code convention.
     */
    public function getCodeConvention(): ?string {
        return $this->codeConvention;
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
     * Get the code naf.
     *
     * @return int|null Returns the code naf.
     */
    public function getCodeNaf(): ?int {
        return $this->codeNaf;
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
     * Get the code pays naissance.
     *
     * @return string|null Returns the code pays naissance.
     */
    public function getCodePaysNaissance(): ?string {
        return $this->codePaysNaissance;
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
     * Get the code type sal.
     *
     * @return string|null Returns the code type sal.
     */
    public function getCodeTypeSal(): ?string {
        return $this->codeTypeSal;
    }

    /**
     * Get the commune naissance.
     *
     * @return string|null Returns the commune naissance.
     */
    public function getCommuneNaissance(): ?string {
        return $this->communeNaissance;
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
     * Get the compte tiers.
     *
     * @return string|null Returns the compte tiers.
     */
    public function getCompteTiers(): ?string {
        return $this->compteTiers;
    }

    /**
     * Get the cpt accompte.
     *
     * @return int|null Returns the cpt accompte.
     */
    public function getCptAccompte(): ?int {
        return $this->cptAccompte;
    }

    /**
     * Get the ctrl taux sal base.
     *
     * @return bool|null Returns the ctrl taux sal base.
     */
    public function getCtrlTauxSalBase(): ?bool {
        return $this->ctrlTauxSalBase;
    }

    /**
     * Get the cum30 ss.
     *
     * @return float|null Returns the cum30 ss.
     */
    public function getCum30Ss(): ?float {
        return $this->cum30Ss;
    }

    /**
     * Get the cum base csg.
     *
     * @return float|null Returns the cum base csg.
     */
    public function getCumBaseCsg(): ?float {
        return $this->cumBaseCsg;
    }

    /**
     * Get the cum base gmp.
     *
     * @return float|null Returns the cum base gmp.
     */
    public function getCumBaseGmp(): ?float {
        return $this->cumBaseGmp;
    }

    /**
     * Get the cum base ss.
     *
     * @return float|null Returns the cum base ss.
     */
    public function getCumBaseSs(): ?float {
        return $this->cumBaseSs;
    }

    /**
     * Get the cum base tr a.
     *
     * @return float|null Returns the cum base tr a.
     */
    public function getCumBaseTrA(): ?float {
        return $this->cumBaseTrA;
    }

    /**
     * Get the cum base tr a caisse1.
     *
     * @return float|null Returns the cum base tr a caisse1.
     */
    public function getCumBaseTrACaisse1(): ?float {
        return $this->cumBaseTrACaisse1;
    }

    /**
     * Get the cum base tr a caisse2.
     *
     * @return float|null Returns the cum base tr a caisse2.
     */
    public function getCumBaseTrACaisse2(): ?float {
        return $this->cumBaseTrACaisse2;
    }

    /**
     * Get the cum base tr a caisse3.
     *
     * @return float|null Returns the cum base tr a caisse3.
     */
    public function getCumBaseTrACaisse3(): ?float {
        return $this->cumBaseTrACaisse3;
    }

    /**
     * Get the cum base tr b.
     *
     * @return float|null Returns the cum base tr b.
     */
    public function getCumBaseTrB(): ?float {
        return $this->cumBaseTrB;
    }

    /**
     * Get the cum base tr b caisse1.
     *
     * @return float|null Returns the cum base tr b caisse1.
     */
    public function getCumBaseTrBCaisse1(): ?float {
        return $this->cumBaseTrBCaisse1;
    }

    /**
     * Get the cum base tr b caisse2.
     *
     * @return float|null Returns the cum base tr b caisse2.
     */
    public function getCumBaseTrBCaisse2(): ?float {
        return $this->cumBaseTrBCaisse2;
    }

    /**
     * Get the cum base tr b caisse3.
     *
     * @return float|null Returns the cum base tr b caisse3.
     */
    public function getCumBaseTrBCaisse3(): ?float {
        return $this->cumBaseTrBCaisse3;
    }

    /**
     * Get the cum base tr c.
     *
     * @return float|null Returns the cum base tr c.
     */
    public function getCumBaseTrC(): ?float {
        return $this->cumBaseTrC;
    }

    /**
     * Get the cum base tr c caisse1.
     *
     * @return float|null Returns the cum base tr c caisse1.
     */
    public function getCumBaseTrCCaisse1(): ?float {
        return $this->cumBaseTrCCaisse1;
    }

    /**
     * Get the cum base tr c caisse2.
     *
     * @return float|null Returns the cum base tr c caisse2.
     */
    public function getCumBaseTrCCaisse2(): ?float {
        return $this->cumBaseTrCCaisse2;
    }

    /**
     * Get the cum base tr c caisse3.
     *
     * @return float|null Returns the cum base tr c caisse3.
     */
    public function getCumBaseTrCCaisse3(): ?float {
        return $this->cumBaseTrCCaisse3;
    }

    /**
     * Get the cum brut abat non lim.
     *
     * @return float|null Returns the cum brut abat non lim.
     */
    public function getCumBrutAbatNonLim(): ?float {
        return $this->cumBrutAbatNonLim;
    }

    /**
     * Get the cum brut al.
     *
     * @return float|null Returns the cum brut al.
     */
    public function getCumBrutAl(): ?float {
        return $this->cumBrutAl;
    }

    /**
     * Get the cum brut non abattu.
     *
     * @return float|null Returns the cum brut non abattu.
     */
    public function getCumBrutNonAbattu(): ?float {
        return $this->cumBrutNonAbattu;
    }

    /**
     * Get the cum cp dus.
     *
     * @return float|null Returns the cum cp dus.
     */
    public function getCumCpDus(): ?float {
        return $this->cumCpDus;
    }

    /**
     * Get the cum cp dus1.
     *
     * @return float|null Returns the cum cp dus1.
     */
    public function getCumCpDus1(): ?float {
        return $this->cumCpDus1;
    }

    /**
     * Get the cum cp pris.
     *
     * @return float|null Returns the cum cp pris.
     */
    public function getCumCpPris(): ?float {
        return $this->cumCpPris;
    }

    /**
     * Get the cum cp pris1.
     *
     * @return float|null Returns the cum cp pris1.
     */
    public function getCumCpPris1(): ?float {
        return $this->cumCpPris1;
    }

    /**
     * Get the cum h repos remplace.
     *
     * @return float|null Returns the cum h repos remplace.
     */
    public function getCumHReposRemplace(): ?float {
        return $this->cumHReposRemplace;
    }

    /**
     * Get the cum h service.
     *
     * @return float|null Returns the cum h service.
     */
    public function getCumHService(): ?float {
        return $this->cumHService;
    }

    /**
     * Get the cum h sup.
     *
     * @return float|null Returns the cum h sup.
     */
    public function getCumHSup(): ?float {
        return $this->cumHSup;
    }

    /**
     * Get the cum h sup rcit.
     *
     * @return float|null Returns the cum h sup rcit.
     */
    public function getCumHSupRcit(): ?float {
        return $this->cumHSupRcit;
    }

    /**
     * Get the cum heure paye.
     *
     * @return float|null Returns the cum heure paye.
     */
    public function getCumHeurePaye(): ?float {
        return $this->cumHeurePaye;
    }

    /**
     * Get the cum heure trav.
     *
     * @return float|null Returns the cum heure trav.
     */
    public function getCumHeureTrav(): ?float {
        return $this->cumHeureTrav;
    }

    /**
     * Get the cum j repos recup.
     *
     * @return float|null Returns the cum j repos recup.
     */
    public function getCumJReposRecup(): ?float {
        return $this->cumJReposRecup;
    }

    /**
     * Get the cum jour paye.
     *
     * @return float|null Returns the cum jour paye.
     */
    public function getCumJourPaye(): ?float {
        return $this->cumJourPaye;
    }

    /**
     * Get the cum jour trav.
     *
     * @return float|null Returns the cum jour trav.
     */
    public function getCumJourTrav(): ?float {
        return $this->cumJourTrav;
    }

    /**
     * Get the cum mt cp pris.
     *
     * @return float|null Returns the cum mt cp pris.
     */
    public function getCumMtCpPris(): ?float {
        return $this->cumMtCpPris;
    }

    /**
     * Get the cum mt cp pris1.
     *
     * @return float|null Returns the cum mt cp pris1.
     */
    public function getCumMtCpPris1(): ?float {
        return $this->cumMtCpPris1;
    }

    /**
     * Get the cum net a payer.
     *
     * @return float|null Returns the cum net a payer.
     */
    public function getCumNetAPayer(): ?float {
        return $this->cumNetAPayer;
    }

    /**
     * Get the cum net imposable.
     *
     * @return float|null Returns the cum net imposable.
     */
    public function getCumNetImposable(): ?float {
        return $this->cumNetImposable;
    }

    /**
     * Get the cum plaf1 caisse1.
     *
     * @return float|null Returns the cum plaf1 caisse1.
     */
    public function getCumPlaf1Caisse1(): ?float {
        return $this->cumPlaf1Caisse1;
    }

    /**
     * Get the cum plaf1 caisse2.
     *
     * @return float|null Returns the cum plaf1 caisse2.
     */
    public function getCumPlaf1Caisse2(): ?float {
        return $this->cumPlaf1Caisse2;
    }

    /**
     * Get the cum plaf1 caisse3.
     *
     * @return float|null Returns the cum plaf1 caisse3.
     */
    public function getCumPlaf1Caisse3(): ?float {
        return $this->cumPlaf1Caisse3;
    }

    /**
     * Get the cum plaf2 caisse1.
     *
     * @return float|null Returns the cum plaf2 caisse1.
     */
    public function getCumPlaf2Caisse1(): ?float {
        return $this->cumPlaf2Caisse1;
    }

    /**
     * Get the cum plaf2 caisse2.
     *
     * @return float|null Returns the cum plaf2 caisse2.
     */
    public function getCumPlaf2Caisse2(): ?float {
        return $this->cumPlaf2Caisse2;
    }

    /**
     * Get the cum plaf2 caisse3.
     *
     * @return float|null Returns the cum plaf2 caisse3.
     */
    public function getCumPlaf2Caisse3(): ?float {
        return $this->cumPlaf2Caisse3;
    }

    /**
     * Get the cum plafond gmp.
     *
     * @return float|null Returns the cum plafond gmp.
     */
    public function getCumPlafondGmp(): ?float {
        return $this->cumPlafondGmp;
    }

    /**
     * Get the cum plafond ss1.
     *
     * @return float|null Returns the cum plafond ss1.
     */
    public function getCumPlafondSs1(): ?float {
        return $this->cumPlafondSs1;
    }

    /**
     * Get the cum plafond ss2.
     *
     * @return float|null Returns the cum plafond ss2.
     */
    public function getCumPlafondSs2(): ?float {
        return $this->cumPlafondSs2;
    }

    /**
     * Get the cum prov cp.
     *
     * @return float|null Returns the cum prov cp.
     */
    public function getCumProvCp(): ?float {
        return $this->cumProvCp;
    }

    /**
     * Get the cum prov cp1.
     *
     * @return float|null Returns the cum prov cp1.
     */
    public function getCumProvCp1(): ?float {
        return $this->cumProvCp1;
    }

    /**
     * Get the cum repos comp.
     *
     * @return float|null Returns the cum repos comp.
     */
    public function getCumReposComp(): ?float {
        return $this->cumReposComp;
    }

    /**
     * Get the date ancien.
     *
     * @return DateTime|null Returns the date ancien.
     */
    public function getDateAncien(): ?DateTime {
        return $this->dateAncien;
    }

    /**
     * Get the date embauche.
     *
     * @return DateTime|null Returns the date embauche.
     */
    public function getDateEmbauche(): ?DateTime {
        return $this->dateEmbauche;
    }

    /**
     * Get the date entree1.
     *
     * @return DateTime|null Returns the date entree1.
     */
    public function getDateEntree1(): ?DateTime {
        return $this->dateEntree1;
    }

    /**
     * Get the date entree2.
     *
     * @return DateTime|null Returns the date entree2.
     */
    public function getDateEntree2(): ?DateTime {
        return $this->dateEntree2;
    }

    /**
     * Get the date licenciement.
     *
     * @return DateTime|null Returns the date licenciement.
     */
    public function getDateLicenciement(): ?DateTime {
        return $this->dateLicenciement;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification(): ?DateTime {
        return $this->dateModification;
    }

    /**
     * Get the date naiss conjoint.
     *
     * @return DateTime|null Returns the date naiss conjoint.
     */
    public function getDateNaissConjoint(): ?DateTime {
        return $this->dateNaissConjoint;
    }

    /**
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance(): ?DateTime {
        return $this->dateNaissance;
    }

    /**
     * Get the date sortie1.
     *
     * @return DateTime|null Returns the date sortie1.
     */
    public function getDateSortie1(): ?DateTime {
        return $this->dateSortie1;
    }

    /**
     * Get the date sortie2.
     *
     * @return DateTime|null Returns the date sortie2.
     */
    public function getDateSortie2(): ?DateTime {
        return $this->dateSortie2;
    }

    /**
     * Get the date visite medicale.
     *
     * @return DateTime|null Returns the date visite medicale.
     */
    public function getDateVisiteMedicale(): ?DateTime {
        return $this->dateVisiteMedicale;
    }

    /**
     * Get the date visite reprise.
     *
     * @return DateTime|null Returns the date visite reprise.
     */
    public function getDateVisiteReprise(): ?DateTime {
        return $this->dateVisiteReprise;
    }

    /**
     * Get the dept naissance.
     *
     * @return string|null Returns the dept naissance.
     */
    public function getDeptNaissance(): ?string {
        return $this->deptNaissance;
    }

    /**
     * Get the dern num prime.
     *
     * @return int|null Returns the dern num prime.
     */
    public function getDernNumPrime(): ?int {
        return $this->dernNumPrime;
    }

    /**
     * Get the dim type2.
     *
     * @return bool|null Returns the dim type2.
     */
    public function getDimType2(): ?bool {
        return $this->dimType2;
    }

    /**
     * Get the dir non salarie.
     *
     * @return bool|null Returns the dir non salarie.
     */
    public function getDirNonSalarie(): ?bool {
        return $this->dirNonSalarie;
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
     * Get the ed taux sal base.
     *
     * @return bool|null Returns the ed taux sal base.
     */
    public function getEdTauxSalBase(): ?bool {
        return $this->edTauxSalBase;
    }

    /**
     * Get the effectif.
     *
     * @return bool|null Returns the effectif.
     */
    public function getEffectif(): ?bool {
        return $this->effectif;
    }

    /**
     * Get the effectif das.
     *
     * @return bool|null Returns the effectif das.
     */
    public function getEffectifDas(): ?bool {
        return $this->effectifDas;
    }

    /**
     * Get the emploi.
     *
     * @return string|null Returns the emploi.
     */
    public function getEmploi(): ?string {
        return $this->emploi;
    }

    /**
     * Get the fictif.
     *
     * @return bool|null Returns the fictif.
     */
    public function getFictif(): ?bool {
        return $this->fictif;
    }

    /**
     * Get the fraction etab.
     *
     * @return string|null Returns the fraction etab.
     */
    public function getFractionEtab(): ?string {
        return $this->fractionEtab;
    }

    /**
     * Get the gestion maj dim.
     *
     * @return string|null Returns the gestion maj dim.
     */
    public function getGestionMajDim(): ?string {
        return $this->gestionMajDim;
    }

    /**
     * Get the gestion maj jf.
     *
     * @return string|null Returns the gestion maj jf.
     */
    public function getGestionMajJf(): ?string {
        return $this->gestionMajJf;
    }

    /**
     * Get the gestion maj nuit.
     *
     * @return string|null Returns the gestion maj nuit.
     */
    public function getGestionMajNuit(): ?string {
        return $this->gestionMajNuit;
    }

    /**
     * Get the grille anc1.
     *
     * @return string|null Returns the grille anc1.
     */
    public function getGrilleAnc1(): ?string {
        return $this->grilleAnc1;
    }

    /**
     * Get the grille anc2.
     *
     * @return string|null Returns the grille anc2.
     */
    public function getGrilleAnc2(): ?string {
        return $this->grilleAnc2;
    }

    /**
     * Get the grille anc3.
     *
     * @return string|null Returns the grille anc3.
     */
    public function getGrilleAnc3(): ?string {
        return $this->grilleAnc3;
    }

    /**
     * Get the h nuit type2.
     *
     * @return bool|null Returns the h nuit type2.
     */
    public function getHNuitType2(): ?bool {
        return $this->hNuitType2;
    }

    /**
     * Get the handicape.
     *
     * @return bool|null Returns the handicape.
     */
    public function getHandicape(): ?bool {
        return $this->handicape;
    }

    /**
     * Get the lieu travail conjoint.
     *
     * @return string|null Returns the lieu travail conjoint.
     */
    public function getLieuTravailConjoint(): ?string {
        return $this->lieuTravailConjoint;
    }

    /**
     * Get the matricule.
     *
     * @return string|null Returns the matricule.
     */
    public function getMatricule(): ?string {
        return $this->matricule;
    }

    /**
     * Get the mensualisation tache.
     *
     * @return string|null Returns the mensualisation tache.
     */
    public function getMensualisationTache(): ?string {
        return $this->mensualisationTache;
    }

    /**
     * Get the mention cp.
     *
     * @return bool|null Returns the mention cp.
     */
    public function getMentionCp(): ?bool {
        return $this->mentionCp;
    }

    /**
     * Get the min garanti.
     *
     * @return float|null Returns the min garanti.
     */
    public function getMinGaranti(): ?float {
        return $this->minGaranti;
    }

    /**
     * Get the montant1.
     *
     * @return float|null Returns the montant1.
     */
    public function getMontant1(): ?float {
        return $this->montant1;
    }

    /**
     * Get the montant2.
     *
     * @return float|null Returns the montant2.
     */
    public function getMontant2(): ?float {
        return $this->montant2;
    }

    /**
     * Get the montant3.
     *
     * @return float|null Returns the montant3.
     */
    public function getMontant3(): ?float {
        return $this->montant3;
    }

    /**
     * Get the montant4.
     *
     * @return float|null Returns the montant4.
     */
    public function getMontant4(): ?float {
        return $this->montant4;
    }

    /**
     * Get the montant5.
     *
     * @return float|null Returns the montant5.
     */
    public function getMontant5(): ?float {
        return $this->montant5;
    }

    /**
     * Get the montant avantage.
     *
     * @return float|null Returns the montant avantage.
     */
    public function getMontantAvantage(): ?float {
        return $this->montantAvantage;
    }

    /**
     * Get the mt base acompte.
     *
     * @return float|null Returns the mt base acompte.
     */
    public function getMtBaseAcompte(): ?float {
        return $this->mtBaseAcompte;
    }

    /**
     * Get the nationalite.
     *
     * @return string|null Returns the nationalite.
     */
    public function getNationalite(): ?string {
        return $this->nationalite;
    }

    /**
     * Get the nb heure mois.
     *
     * @return float|null Returns the nb heure mois.
     */
    public function getNbHeureMois(): ?float {
        return $this->nbHeureMois;
    }

    /**
     * Get the nb heure sal.
     *
     * @return float|null Returns the nb heure sal.
     */
    public function getNbHeureSal(): ?float {
        return $this->nbHeureSal;
    }

    /**
     * Get the nb heure sup.
     *
     * @return float|null Returns the nb heure sup.
     */
    public function getNbHeureSup(): ?float {
        return $this->nbHeureSup;
    }

    /**
     * Get the nb heure trav.
     *
     * @return float|null Returns the nb heure trav.
     */
    public function getNbHeureTrav(): ?float {
        return $this->nbHeureTrav;
    }

    /**
     * Get the nb jour base cp.
     *
     * @return float|null Returns the nb jour base cp.
     */
    public function getNbJourBaseCp(): ?float {
        return $this->nbJourBaseCp;
    }

    /**
     * Get the nb points.
     *
     * @return int|null Returns the nb points.
     */
    public function getNbPoints(): ?int {
        return $this->nbPoints;
    }

    /**
     * Get the niveau confidentialite.
     *
     * @return string|null Returns the niveau confidentialite.
     */
    public function getNiveauConfidentialite(): ?string {
        return $this->niveauConfidentialite;
    }

    /**
     * Get the nom conjoint.
     *
     * @return string|null Returns the nom conjoint.
     */
    public function getNomConjoint(): ?string {
        return $this->nomConjoint;
    }

    /**
     * Get the nom marital.
     *
     * @return string|null Returns the nom marital.
     */
    public function getNomMarital(): ?string {
        return $this->nomMarital;
    }

    /**
     * Get the nom naissance.
     *
     * @return string|null Returns the nom naissance.
     */
    public function getNomNaissance(): ?string {
        return $this->nomNaissance;
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
     * Get the nombre enfants.
     *
     * @return string|null Returns the nombre enfants.
     */
    public function getNombreEnfants(): ?string {
        return $this->nombreEnfants;
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
     * Get the numero.
     *
     * @return string|null Returns the numero.
     */
    public function getNumero(): ?string {
        return $this->numero;
    }

    /**
     * Get the numero carte sejour.
     *
     * @return string|null Returns the numero carte sejour.
     */
    public function getNumeroCarteSejour(): ?string {
        return $this->numeroCarteSejour;
    }

    /**
     * Get the numero carte travail.
     *
     * @return string|null Returns the numero carte travail.
     */
    public function getNumeroCarteTravail(): ?string {
        return $this->numeroCarteTravail;
    }

    /**
     * Get the numero cas part secu.
     *
     * @return int|null Returns the numero cas part secu.
     */
    public function getNumeroCasPartSecu(): ?int {
        return $this->numeroCasPartSecu;
    }

    /**
     * Get the numero grille type.
     *
     * @return int|null Returns the numero grille type.
     */
    public function getNumeroGrilleType(): ?int {
        return $this->numeroGrilleType;
    }

    /**
     * Get the numero insee.
     *
     * @return string|null Returns the numero insee.
     */
    public function getNumeroInsee(): ?string {
        return $this->numeroInsee;
    }

    /**
     * Get the numero permis.
     *
     * @return string|null Returns the numero permis.
     */
    public function getNumeroPermis(): ?string {
        return $this->numeroPermis;
    }

    /**
     * Get the orphelin.
     *
     * @return bool|null Returns the orphelin.
     */
    public function getOrphelin(): ?bool {
        return $this->orphelin;
    }

    /**
     * Get the pas gestion pdp.
     *
     * @return bool|null Returns the pas gestion pdp.
     */
    public function getPasGestionPdp(): ?bool {
        return $this->pasGestionPdp;
    }

    /**
     * Get the pas gestion pdp1.
     *
     * @return bool|null Returns the pas gestion pdp1.
     */
    public function getPasGestionPdp1(): ?bool {
        return $this->pasGestionPdp1;
    }

    /**
     * Get the pension.
     *
     * @return bool|null Returns the pension.
     */
    public function getPension(): ?bool {
        return $this->pension;
    }

    /**
     * Get the periodicite.
     *
     * @return string|null Returns the periodicite.
     */
    public function getPeriodicite(): ?string {
        return $this->periodicite;
    }

    /**
     * Get the permis delivre le.
     *
     * @return DateTime|null Returns the permis delivre le.
     */
    public function getPermisDelivreLe(): ?DateTime {
        return $this->permisDelivreLe;
    }

    /**
     * Get the permis delivre par.
     *
     * @return string|null Returns the permis delivre par.
     */
    public function getPermisDelivrePar(): ?string {
        return $this->permisDelivrePar;
    }

    /**
     * Get the permis expire le.
     *
     * @return DateTime|null Returns the permis expire le.
     */
    public function getPermisExpireLe(): ?DateTime {
        return $this->permisExpireLe;
    }

    /**
     * Get the personne a prevenir.
     *
     * @return string|null Returns the personne a prevenir.
     */
    public function getPersonneAPrevenir(): ?string {
        return $this->personneAPrevenir;
    }

    /**
     * Get the plafond gmp.
     *
     * @return float|null Returns the plafond gmp.
     */
    public function getPlafondGmp(): ?float {
        return $this->plafondGmp;
    }

    /**
     * Get the plafond ss1.
     *
     * @return float|null Returns the plafond ss1.
     */
    public function getPlafondSs1(): ?float {
        return $this->plafondSs1;
    }

    /**
     * Get the plafond ss30.
     *
     * @return bool|null Returns the plafond ss30.
     */
    public function getPlafondSs30(): ?bool {
        return $this->plafondSs30;
    }

    /**
     * Get the pourcent abat.
     *
     * @return float|null Returns the pourcent abat.
     */
    public function getPourcentAbat(): ?float {
        return $this->pourcentAbat;
    }

    /**
     * Get the pourcent act.
     *
     * @return float|null Returns the pourcent act.
     */
    public function getPourcentAct(): ?float {
        return $this->pourcentAct;
    }

    /**
     * Get the pourcent effectif ducs.
     *
     * @return float|null Returns the pourcent effectif ducs.
     */
    public function getPourcentEffectifDucs(): ?float {
        return $this->pourcentEffectifDucs;
    }

    /**
     * Get the pourcent remu hor.
     *
     * @return float|null Returns the pourcent remu hor.
     */
    public function getPourcentRemuHor(): ?float {
        return $this->pourcentRemuHor;
    }

    /**
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getPrenom(): ?string {
        return $this->prenom;
    }

    /**
     * Get the prenom conjoint.
     *
     * @return string|null Returns the prenom conjoint.
     */
    public function getPrenomConjoint(): ?string {
        return $this->prenomConjoint;
    }

    /**
     * Get the prime.
     *
     * @return bool|null Returns the prime.
     */
    public function getPrime(): ?bool {
        return $this->prime;
    }

    /**
     * Get the prud college.
     *
     * @return string|null Returns the prud college.
     */
    public function getPrudCollege(): ?string {
        return $this->prudCollege;
    }

    /**
     * Get the prud lieu vote.
     *
     * @return string|null Returns the prud lieu vote.
     */
    public function getPrudLieuVote(): ?string {
        return $this->prudLieuVote;
    }

    /**
     * Get the prud section.
     *
     * @return string|null Returns the prud section.
     */
    public function getPrudSection(): ?string {
        return $this->prudSection;
    }

    /**
     * Get the qualification.
     *
     * @return string|null Returns the qualification.
     */
    public function getQualification(): ?string {
        return $this->qualification;
    }

    /**
     * Get the regle calcul.
     *
     * @return string|null Returns the regle calcul.
     */
    public function getRegleCalcul(): ?string {
        return $this->regleCalcul;
    }

    /**
     * Get the regroup virement.
     *
     * @return string|null Returns the regroup virement.
     */
    public function getRegroupVirement(): ?string {
        return $this->regroupVirement;
    }

    /**
     * Get the regul tds.
     *
     * @return bool|null Returns the regul tds.
     */
    public function getRegulTds(): ?bool {
        return $this->regulTds;
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
     * Get the salaire base.
     *
     * @return float|null Returns the salaire base.
     */
    public function getSalaireBase(): ?float {
        return $this->salaireBase;
    }

    /**
     * Get the service.
     *
     * @return string|null Returns the service.
     */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Get the sexe.
     *
     * @return string|null Returns the sexe.
     */
    public function getSexe(): ?string {
        return $this->sexe;
    }

    /**
     * Get the situation fam.
     *
     * @return string|null Returns the situation fam.
     */
    public function getSituationFam(): ?string {
        return $this->situationFam;
    }

    /**
     * Get the taux1.
     *
     * @return float|null Returns the taux1.
     */
    public function getTaux1(): ?float {
        return $this->taux1;
    }

    /**
     * Get the taux2.
     *
     * @return float|null Returns the taux2.
     */
    public function getTaux2(): ?float {
        return $this->taux2;
    }

    /**
     * Get the taux3.
     *
     * @return float|null Returns the taux3.
     */
    public function getTaux3(): ?float {
        return $this->taux3;
    }

    /**
     * Get the taux4.
     *
     * @return float|null Returns the taux4.
     */
    public function getTaux4(): ?float {
        return $this->taux4;
    }

    /**
     * Get the taux5.
     *
     * @return float|null Returns the taux5.
     */
    public function getTaux5(): ?float {
        return $this->taux5;
    }

    /**
     * Get the taux absence.
     *
     * @return float|null Returns the taux absence.
     */
    public function getTauxAbsence(): ?float {
        return $this->tauxAbsence;
    }

    /**
     * Get the taux ancien.
     *
     * @return float|null Returns the taux ancien.
     */
    public function getTauxAncien(): ?float {
        return $this->tauxAncien;
    }

    /**
     * Get the taux h sup.
     *
     * @return float|null Returns the taux h sup.
     */
    public function getTauxHSup(): ?float {
        return $this->tauxHSup;
    }

    /**
     * Get the taux pension civile.
     *
     * @return float|null Returns the taux pension civile.
     */
    public function getTauxPensionCivile(): ?float {
        return $this->tauxPensionCivile;
    }

    /**
     * Get the taux pension militaire.
     *
     * @return float|null Returns the taux pension militaire.
     */
    public function getTauxPensionMilitaire(): ?float {
        return $this->tauxPensionMilitaire;
    }

    /**
     * Get the taxe salaire.
     *
     * @return bool|null Returns the taxe salaire.
     */
    public function getTaxeSalaire(): ?bool {
        return $this->taxeSalaire;
    }

    /**
     * Get the tds100.
     *
     * @return float|null Returns the tds100.
     */
    public function getTds100(): ?float {
        return $this->tds100;
    }

    /**
     * Get the tds102.
     *
     * @return float|null Returns the tds102.
     */
    public function getTds102(): ?float {
        return $this->tds102;
    }

    /**
     * Get the tds103.
     *
     * @return float|null Returns the tds103.
     */
    public function getTds103(): ?float {
        return $this->tds103;
    }

    /**
     * Get the tds105.
     *
     * @return float|null Returns the tds105.
     */
    public function getTds105(): ?float {
        return $this->tds105;
    }

    /**
     * Get the tds107.
     *
     * @return bool|null Returns the tds107.
     */
    public function getTds107(): ?bool {
        return $this->tds107;
    }

    /**
     * Get the tds108.
     *
     * @return bool|null Returns the tds108.
     */
    public function getTds108(): ?bool {
        return $this->tds108;
    }

    /**
     * Get the tds109.
     *
     * @return bool|null Returns the tds109.
     */
    public function getTds109(): ?bool {
        return $this->tds109;
    }

    /**
     * Get the tds110.
     *
     * @return bool|null Returns the tds110.
     */
    public function getTds110(): ?bool {
        return $this->tds110;
    }

    /**
     * Get the tds112.
     *
     * @return float|null Returns the tds112.
     */
    public function getTds112(): ?float {
        return $this->tds112;
    }

    /**
     * Get the tds113.
     *
     * @return bool|null Returns the tds113.
     */
    public function getTds113(): ?bool {
        return $this->tds113;
    }

    /**
     * Get the tds117.
     *
     * @return float|null Returns the tds117.
     */
    public function getTds117(): ?float {
        return $this->tds117;
    }

    /**
     * Get the tds119.
     *
     * @return bool|null Returns the tds119.
     */
    public function getTds119(): ?bool {
        return $this->tds119;
    }

    /**
     * Get the tds120.
     *
     * @return bool|null Returns the tds120.
     */
    public function getTds120(): ?bool {
        return $this->tds120;
    }

    /**
     * Get the tds121.
     *
     * @return bool|null Returns the tds121.
     */
    public function getTds121(): ?bool {
        return $this->tds121;
    }

    /**
     * Get the tds122.
     *
     * @return bool|null Returns the tds122.
     */
    public function getTds122(): ?bool {
        return $this->tds122;
    }

    /**
     * Get the tds125.
     *
     * @return float|null Returns the tds125.
     */
    public function getTds125(): ?float {
        return $this->tds125;
    }

    /**
     * Get the tds127.
     *
     * @return float|null Returns the tds127.
     */
    public function getTds127(): ?float {
        return $this->tds127;
    }

    /**
     * Get the tds128.
     *
     * @return string|null Returns the tds128.
     */
    public function getTds128(): ?string {
        return $this->tds128;
    }

    /**
     * Get the tds132.
     *
     * @return float|null Returns the tds132.
     */
    public function getTds132(): ?float {
        return $this->tds132;
    }

    /**
     * Get the tds133.
     *
     * @return string|null Returns the tds133.
     */
    public function getTds133(): ?string {
        return $this->tds133;
    }

    /**
     * Get the tds134.
     *
     * @return float|null Returns the tds134.
     */
    public function getTds134(): ?float {
        return $this->tds134;
    }

    /**
     * Get the tds135.
     *
     * @return float|null Returns the tds135.
     */
    public function getTds135(): ?float {
        return $this->tds135;
    }

    /**
     * Get the tds136.
     *
     * @return float|null Returns the tds136.
     */
    public function getTds136(): ?float {
        return $this->tds136;
    }

    /**
     * Get the tds138.
     *
     * @return string|null Returns the tds138.
     */
    public function getTds138(): ?string {
        return $this->tds138;
    }

    /**
     * Get the tds139.
     *
     * @return string|null Returns the tds139.
     */
    public function getTds139(): ?string {
        return $this->tds139;
    }

    /**
     * Get the tds141.
     *
     * @return float|null Returns the tds141.
     */
    public function getTds141(): ?float {
        return $this->tds141;
    }

    /**
     * Get the tds59.
     *
     * @return string|null Returns the tds59.
     */
    public function getTds59(): ?string {
        return $this->tds59;
    }

    /**
     * Get the tds60.
     *
     * @return bool|null Returns the tds60.
     */
    public function getTds60(): ?bool {
        return $this->tds60;
    }

    /**
     * Get the tds61.
     *
     * @return string|null Returns the tds61.
     */
    public function getTds61(): ?string {
        return $this->tds61;
    }

    /**
     * Get the tds75.
     *
     * @return int|null Returns the tds75.
     */
    public function getTds75(): ?int {
        return $this->tds75;
    }

    /**
     * Get the tds76.
     *
     * @return string|null Returns the tds76.
     */
    public function getTds76(): ?string {
        return $this->tds76;
    }

    /**
     * Get the tds77.
     *
     * @return string|null Returns the tds77.
     */
    public function getTds77(): ?string {
        return $this->tds77;
    }

    /**
     * Get the tds78.
     *
     * @return bool|null Returns the tds78.
     */
    public function getTds78(): ?bool {
        return $this->tds78;
    }

    /**
     * Get the tds81.
     *
     * @return float|null Returns the tds81.
     */
    public function getTds81(): ?float {
        return $this->tds81;
    }

    /**
     * Get the tds82.
     *
     * @return float|null Returns the tds82.
     */
    public function getTds82(): ?float {
        return $this->tds82;
    }

    /**
     * Get the tds84.
     *
     * @return float|null Returns the tds84.
     */
    public function getTds84(): ?float {
        return $this->tds84;
    }

    /**
     * Get the tds85.
     *
     * @return float|null Returns the tds85.
     */
    public function getTds85(): ?float {
        return $this->tds85;
    }

    /**
     * Get the tds86.
     *
     * @return float|null Returns the tds86.
     */
    public function getTds86(): ?float {
        return $this->tds86;
    }

    /**
     * Get the tds87.
     *
     * @return float|null Returns the tds87.
     */
    public function getTds87(): ?float {
        return $this->tds87;
    }

    /**
     * Get the tds88.
     *
     * @return float|null Returns the tds88.
     */
    public function getTds88(): ?float {
        return $this->tds88;
    }

    /**
     * Get the tds89.
     *
     * @return float|null Returns the tds89.
     */
    public function getTds89(): ?float {
        return $this->tds89;
    }

    /**
     * Get the tds90.
     *
     * @return float|null Returns the tds90.
     */
    public function getTds90(): ?float {
        return $this->tds90;
    }

    /**
     * Get the tds91.
     *
     * @return float|null Returns the tds91.
     */
    public function getTds91(): ?float {
        return $this->tds91;
    }

    /**
     * Get the tds92.
     *
     * @return float|null Returns the tds92.
     */
    public function getTds92(): ?float {
        return $this->tds92;
    }

    /**
     * Get the tds93.
     *
     * @return float|null Returns the tds93.
     */
    public function getTds93(): ?float {
        return $this->tds93;
    }

    /**
     * Get the tds94.
     *
     * @return float|null Returns the tds94.
     */
    public function getTds94(): ?float {
        return $this->tds94;
    }

    /**
     * Get the tds95.
     *
     * @return float|null Returns the tds95.
     */
    public function getTds95(): ?float {
        return $this->tds95;
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
     * Get the tel conjoint.
     *
     * @return string|null Returns the tel conjoint.
     */
    public function getTelConjoint(): ?string {
        return $this->telConjoint;
    }

    /**
     * Get the tel pers a prevenir.
     *
     * @return string|null Returns the tel pers a prevenir.
     */
    public function getTelPersAPrevenir(): ?string {
        return $this->telPersAPrevenir;
    }

    /**
     * Get the temps passe.
     *
     * @return bool|null Returns the temps passe.
     */
    public function getTempsPasse(): ?bool {
        return $this->tempsPasse;
    }

    /**
     * Get the titre.
     *
     * @return string|null Returns the titre.
     */
    public function getTitre(): ?string {
        return $this->titre;
    }

    /**
     * Get the transfert entree1.
     *
     * @return bool|null Returns the transfert entree1.
     */
    public function getTransfertEntree1(): ?bool {
        return $this->transfertEntree1;
    }

    /**
     * Get the transfert entree2.
     *
     * @return bool|null Returns the transfert entree2.
     */
    public function getTransfertEntree2(): ?bool {
        return $this->transfertEntree2;
    }

    /**
     * Get the transfert sortie1.
     *
     * @return bool|null Returns the transfert sortie1.
     */
    public function getTransfertSortie1(): ?bool {
        return $this->transfertSortie1;
    }

    /**
     * Get the transfert sortie2.
     *
     * @return bool|null Returns the transfert sortie2.
     */
    public function getTransfertSortie2(): ?bool {
        return $this->transfertSortie2;
    }

    /**
     * Get the travaille jf.
     *
     * @return bool|null Returns the travaille jf.
     */
    public function getTravailleJf(): ?bool {
        return $this->travailleJf;
    }

    /**
     * Get the type contrat.
     *
     * @return string|null Returns the type contrat.
     */
    public function getTypeContrat(): ?string {
        return $this->typeContrat;
    }

    /**
     * Get the type nationalite.
     *
     * @return string|null Returns the type nationalite.
     */
    public function getTypeNationalite(): ?string {
        return $this->typeNationalite;
    }

    /**
     * Get the type paiement.
     *
     * @return string|null Returns the type paiement.
     */
    public function getTypePaiement(): ?string {
        return $this->typePaiement;
    }

    /**
     * Get the vrp multicarte.
     *
     * @return bool|null Returns the vrp multicarte.
     */
    public function getVrpMulticarte(): ?bool {
        return $this->vrpMulticarte;
    }

    /**
     * Get the plafond ss2.
     *
     * @return float|null Returns the plafond ss2.
     */
    public function getplafondSs2(): ?float {
        return $this->plafondSs2;
    }

    /**
     * Set the a transferer en p.
     *
     * @param bool|null $aTransfererEnP The a transferer en p.
     * @return Employes Returns this Employes.
     */
    public function setATransfererEnP(?bool $aTransfererEnP): Employes {
        $this->aTransfererEnP = $aTransfererEnP;
        return $this;
    }

    /**
     * Set the administratif.
     *
     * @param bool|null $administratif The administratif.
     * @return Employes Returns this Employes.
     */
    public function setAdministratif(?bool $administratif): Employes {
        $this->administratif = $administratif;
        return $this;
    }

    /**
     * Set the alleg particulier.
     *
     * @param bool|null $allegParticulier The alleg particulier.
     * @return Employes Returns this Employes.
     */
    public function setAllegParticulier(?bool $allegParticulier): Employes {
        $this->allegParticulier = $allegParticulier;
        return $this;
    }

    /**
     * Set the autre alleg.
     *
     * @param bool|null $autreAlleg The autre alleg.
     * @return Employes Returns this Employes.
     */
    public function setAutreAlleg(?bool $autreAlleg): Employes {
        $this->autreAlleg = $autreAlleg;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Employes Returns this Employes.
     */
    public function setBtq(?string $btq): Employes {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Employes Returns this Employes.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Employes {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the calcul particip.
     *
     * @param bool|null $calculParticip The calcul particip.
     * @return Employes Returns this Employes.
     */
    public function setCalculParticip(?bool $calculParticip): Employes {
        $this->calculParticip = $calculParticip;
        return $this;
    }

    /**
     * Set the carte sejour delivree le.
     *
     * @param DateTime|null $carteSejourDelivreeLe The carte sejour delivree le.
     * @return Employes Returns this Employes.
     */
    public function setCarteSejourDelivreeLe(?DateTime $carteSejourDelivreeLe): Employes {
        $this->carteSejourDelivreeLe = $carteSejourDelivreeLe;
        return $this;
    }

    /**
     * Set the carte sejour expire le.
     *
     * @param DateTime|null $carteSejourExpireLe The carte sejour expire le.
     * @return Employes Returns this Employes.
     */
    public function setCarteSejourExpireLe(?DateTime $carteSejourExpireLe): Employes {
        $this->carteSejourExpireLe = $carteSejourExpireLe;
        return $this;
    }

    /**
     * Set the carte travail delivree le.
     *
     * @param DateTime|null $carteTravailDelivreeLe The carte travail delivree le.
     * @return Employes Returns this Employes.
     */
    public function setCarteTravailDelivreeLe(?DateTime $carteTravailDelivreeLe): Employes {
        $this->carteTravailDelivreeLe = $carteTravailDelivreeLe;
        return $this;
    }

    /**
     * Set the carte travail expire le.
     *
     * @param DateTime|null $carteTravailExpireLe The carte travail expire le.
     * @return Employes Returns this Employes.
     */
    public function setCarteTravailExpireLe(?DateTime $carteTravailExpireLe): Employes {
        $this->carteTravailExpireLe = $carteTravailExpireLe;
        return $this;
    }

    /**
     * Set the cas part ss.
     *
     * @param bool|null $casPartSs The cas part ss.
     * @return Employes Returns this Employes.
     */
    public function setCasPartSs(?bool $casPartSs): Employes {
        $this->casPartSs = $casPartSs;
        return $this;
    }

    /**
     * Set the categ population.
     *
     * @param string|null $categPopulation The categ population.
     * @return Employes Returns this Employes.
     */
    public function setCategPopulation(?string $categPopulation): Employes {
        $this->categPopulation = $categPopulation;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param string|null $categSalarie The categ salarie.
     * @return Employes Returns this Employes.
     */
    public function setCategSalarie(?string $categSalarie): Employes {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the categorie permis.
     *
     * @param string|null $categoriePermis The categorie permis.
     * @return Employes Returns this Employes.
     */
    public function setCategoriePermis(?string $categoriePermis): Employes {
        $this->categoriePermis = $categoriePermis;
        return $this;
    }

    /**
     * Set the cddcdi.
     *
     * @param bool|null $cddcdi The cddcdi.
     * @return Employes Returns this Employes.
     */
    public function setCddcdi(?bool $cddcdi): Employes {
        $this->cddcdi = $cddcdi;
        return $this;
    }

    /**
     * Set the classification.
     *
     * @param string|null $classification The classification.
     * @return Employes Returns this Employes.
     */
    public function setClassification(?string $classification): Employes {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Set the cle deux.
     *
     * @param string|null $cleDeux The cle deux.
     * @return Employes Returns this Employes.
     */
    public function setCleDeux(?string $cleDeux): Employes {
        $this->cleDeux = $cleDeux;
        return $this;
    }

    /**
     * Set the code at.
     *
     * @param int|null $codeAt The code at.
     * @return Employes Returns this Employes.
     */
    public function setCodeAt(?int $codeAt): Employes {
        $this->codeAt = $codeAt;
        return $this;
    }

    /**
     * Set the code centre urssaf.
     *
     * @param string|null $codeCentreUrssaf The code centre urssaf.
     * @return Employes Returns this Employes.
     */
    public function setCodeCentreUrssaf(?string $codeCentreUrssaf): Employes {
        $this->codeCentreUrssaf = $codeCentreUrssaf;
        return $this;
    }

    /**
     * Set the code convention.
     *
     * @param string|null $codeConvention The code convention.
     * @return Employes Returns this Employes.
     */
    public function setCodeConvention(?string $codeConvention): Employes {
        $this->codeConvention = $codeConvention;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return Employes Returns this Employes.
     */
    public function setCodeEtablissement(?int $codeEtablissement): Employes {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code naf.
     *
     * @param int|null $codeNaf The code naf.
     * @return Employes Returns this Employes.
     */
    public function setCodeNaf(?int $codeNaf): Employes {
        $this->codeNaf = $codeNaf;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string|null $codeOfficielCommune The code officiel commune.
     * @return Employes Returns this Employes.
     */
    public function setCodeOfficielCommune(?string $codeOfficielCommune): Employes {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code pays naissance.
     *
     * @param string|null $codePaysNaissance The code pays naissance.
     * @return Employes Returns this Employes.
     */
    public function setCodePaysNaissance(?string $codePaysNaissance): Employes {
        $this->codePaysNaissance = $codePaysNaissance;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Employes Returns this Employes.
     */
    public function setCodePostal(?string $codePostal): Employes {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code type sal.
     *
     * @param string|null $codeTypeSal The code type sal.
     * @return Employes Returns this Employes.
     */
    public function setCodeTypeSal(?string $codeTypeSal): Employes {
        $this->codeTypeSal = $codeTypeSal;
        return $this;
    }

    /**
     * Set the commune naissance.
     *
     * @param string|null $communeNaissance The commune naissance.
     * @return Employes Returns this Employes.
     */
    public function setCommuneNaissance(?string $communeNaissance): Employes {
        $this->communeNaissance = $communeNaissance;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Employes Returns this Employes.
     */
    public function setComplement(?string $complement): Employes {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the compte tiers.
     *
     * @param string|null $compteTiers The compte tiers.
     * @return Employes Returns this Employes.
     */
    public function setCompteTiers(?string $compteTiers): Employes {
        $this->compteTiers = $compteTiers;
        return $this;
    }

    /**
     * Set the cpt accompte.
     *
     * @param int|null $cptAccompte The cpt accompte.
     * @return Employes Returns this Employes.
     */
    public function setCptAccompte(?int $cptAccompte): Employes {
        $this->cptAccompte = $cptAccompte;
        return $this;
    }

    /**
     * Set the ctrl taux sal base.
     *
     * @param bool|null $ctrlTauxSalBase The ctrl taux sal base.
     * @return Employes Returns this Employes.
     */
    public function setCtrlTauxSalBase(?bool $ctrlTauxSalBase): Employes {
        $this->ctrlTauxSalBase = $ctrlTauxSalBase;
        return $this;
    }

    /**
     * Set the cum30 ss.
     *
     * @param float|null $cum30Ss The cum30 ss.
     * @return Employes Returns this Employes.
     */
    public function setCum30Ss(?float $cum30Ss): Employes {
        $this->cum30Ss = $cum30Ss;
        return $this;
    }

    /**
     * Set the cum base csg.
     *
     * @param float|null $cumBaseCsg The cum base csg.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseCsg(?float $cumBaseCsg): Employes {
        $this->cumBaseCsg = $cumBaseCsg;
        return $this;
    }

    /**
     * Set the cum base gmp.
     *
     * @param float|null $cumBaseGmp The cum base gmp.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseGmp(?float $cumBaseGmp): Employes {
        $this->cumBaseGmp = $cumBaseGmp;
        return $this;
    }

    /**
     * Set the cum base ss.
     *
     * @param float|null $cumBaseSs The cum base ss.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseSs(?float $cumBaseSs): Employes {
        $this->cumBaseSs = $cumBaseSs;
        return $this;
    }

    /**
     * Set the cum base tr a.
     *
     * @param float|null $cumBaseTrA The cum base tr a.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrA(?float $cumBaseTrA): Employes {
        $this->cumBaseTrA = $cumBaseTrA;
        return $this;
    }

    /**
     * Set the cum base tr a caisse1.
     *
     * @param float|null $cumBaseTrACaisse1 The cum base tr a caisse1.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrACaisse1(?float $cumBaseTrACaisse1): Employes {
        $this->cumBaseTrACaisse1 = $cumBaseTrACaisse1;
        return $this;
    }

    /**
     * Set the cum base tr a caisse2.
     *
     * @param float|null $cumBaseTrACaisse2 The cum base tr a caisse2.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrACaisse2(?float $cumBaseTrACaisse2): Employes {
        $this->cumBaseTrACaisse2 = $cumBaseTrACaisse2;
        return $this;
    }

    /**
     * Set the cum base tr a caisse3.
     *
     * @param float|null $cumBaseTrACaisse3 The cum base tr a caisse3.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrACaisse3(?float $cumBaseTrACaisse3): Employes {
        $this->cumBaseTrACaisse3 = $cumBaseTrACaisse3;
        return $this;
    }

    /**
     * Set the cum base tr b.
     *
     * @param float|null $cumBaseTrB The cum base tr b.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrB(?float $cumBaseTrB): Employes {
        $this->cumBaseTrB = $cumBaseTrB;
        return $this;
    }

    /**
     * Set the cum base tr b caisse1.
     *
     * @param float|null $cumBaseTrBCaisse1 The cum base tr b caisse1.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrBCaisse1(?float $cumBaseTrBCaisse1): Employes {
        $this->cumBaseTrBCaisse1 = $cumBaseTrBCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr b caisse2.
     *
     * @param float|null $cumBaseTrBCaisse2 The cum base tr b caisse2.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrBCaisse2(?float $cumBaseTrBCaisse2): Employes {
        $this->cumBaseTrBCaisse2 = $cumBaseTrBCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr b caisse3.
     *
     * @param float|null $cumBaseTrBCaisse3 The cum base tr b caisse3.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrBCaisse3(?float $cumBaseTrBCaisse3): Employes {
        $this->cumBaseTrBCaisse3 = $cumBaseTrBCaisse3;
        return $this;
    }

    /**
     * Set the cum base tr c.
     *
     * @param float|null $cumBaseTrC The cum base tr c.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrC(?float $cumBaseTrC): Employes {
        $this->cumBaseTrC = $cumBaseTrC;
        return $this;
    }

    /**
     * Set the cum base tr c caisse1.
     *
     * @param float|null $cumBaseTrCCaisse1 The cum base tr c caisse1.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrCCaisse1(?float $cumBaseTrCCaisse1): Employes {
        $this->cumBaseTrCCaisse1 = $cumBaseTrCCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr c caisse2.
     *
     * @param float|null $cumBaseTrCCaisse2 The cum base tr c caisse2.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrCCaisse2(?float $cumBaseTrCCaisse2): Employes {
        $this->cumBaseTrCCaisse2 = $cumBaseTrCCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr c caisse3.
     *
     * @param float|null $cumBaseTrCCaisse3 The cum base tr c caisse3.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrCCaisse3(?float $cumBaseTrCCaisse3): Employes {
        $this->cumBaseTrCCaisse3 = $cumBaseTrCCaisse3;
        return $this;
    }

    /**
     * Set the cum brut abat non lim.
     *
     * @param float|null $cumBrutAbatNonLim The cum brut abat non lim.
     * @return Employes Returns this Employes.
     */
    public function setCumBrutAbatNonLim(?float $cumBrutAbatNonLim): Employes {
        $this->cumBrutAbatNonLim = $cumBrutAbatNonLim;
        return $this;
    }

    /**
     * Set the cum brut al.
     *
     * @param float|null $cumBrutAl The cum brut al.
     * @return Employes Returns this Employes.
     */
    public function setCumBrutAl(?float $cumBrutAl): Employes {
        $this->cumBrutAl = $cumBrutAl;
        return $this;
    }

    /**
     * Set the cum brut non abattu.
     *
     * @param float|null $cumBrutNonAbattu The cum brut non abattu.
     * @return Employes Returns this Employes.
     */
    public function setCumBrutNonAbattu(?float $cumBrutNonAbattu): Employes {
        $this->cumBrutNonAbattu = $cumBrutNonAbattu;
        return $this;
    }

    /**
     * Set the cum cp dus.
     *
     * @param float|null $cumCpDus The cum cp dus.
     * @return Employes Returns this Employes.
     */
    public function setCumCpDus(?float $cumCpDus): Employes {
        $this->cumCpDus = $cumCpDus;
        return $this;
    }

    /**
     * Set the cum cp dus1.
     *
     * @param float|null $cumCpDus1 The cum cp dus1.
     * @return Employes Returns this Employes.
     */
    public function setCumCpDus1(?float $cumCpDus1): Employes {
        $this->cumCpDus1 = $cumCpDus1;
        return $this;
    }

    /**
     * Set the cum cp pris.
     *
     * @param float|null $cumCpPris The cum cp pris.
     * @return Employes Returns this Employes.
     */
    public function setCumCpPris(?float $cumCpPris): Employes {
        $this->cumCpPris = $cumCpPris;
        return $this;
    }

    /**
     * Set the cum cp pris1.
     *
     * @param float|null $cumCpPris1 The cum cp pris1.
     * @return Employes Returns this Employes.
     */
    public function setCumCpPris1(?float $cumCpPris1): Employes {
        $this->cumCpPris1 = $cumCpPris1;
        return $this;
    }

    /**
     * Set the cum h repos remplace.
     *
     * @param float|null $cumHReposRemplace The cum h repos remplace.
     * @return Employes Returns this Employes.
     */
    public function setCumHReposRemplace(?float $cumHReposRemplace): Employes {
        $this->cumHReposRemplace = $cumHReposRemplace;
        return $this;
    }

    /**
     * Set the cum h service.
     *
     * @param float|null $cumHService The cum h service.
     * @return Employes Returns this Employes.
     */
    public function setCumHService(?float $cumHService): Employes {
        $this->cumHService = $cumHService;
        return $this;
    }

    /**
     * Set the cum h sup.
     *
     * @param float|null $cumHSup The cum h sup.
     * @return Employes Returns this Employes.
     */
    public function setCumHSup(?float $cumHSup): Employes {
        $this->cumHSup = $cumHSup;
        return $this;
    }

    /**
     * Set the cum h sup rcit.
     *
     * @param float|null $cumHSupRcit The cum h sup rcit.
     * @return Employes Returns this Employes.
     */
    public function setCumHSupRcit(?float $cumHSupRcit): Employes {
        $this->cumHSupRcit = $cumHSupRcit;
        return $this;
    }

    /**
     * Set the cum heure paye.
     *
     * @param float|null $cumHeurePaye The cum heure paye.
     * @return Employes Returns this Employes.
     */
    public function setCumHeurePaye(?float $cumHeurePaye): Employes {
        $this->cumHeurePaye = $cumHeurePaye;
        return $this;
    }

    /**
     * Set the cum heure trav.
     *
     * @param float|null $cumHeureTrav The cum heure trav.
     * @return Employes Returns this Employes.
     */
    public function setCumHeureTrav(?float $cumHeureTrav): Employes {
        $this->cumHeureTrav = $cumHeureTrav;
        return $this;
    }

    /**
     * Set the cum j repos recup.
     *
     * @param float|null $cumJReposRecup The cum j repos recup.
     * @return Employes Returns this Employes.
     */
    public function setCumJReposRecup(?float $cumJReposRecup): Employes {
        $this->cumJReposRecup = $cumJReposRecup;
        return $this;
    }

    /**
     * Set the cum jour paye.
     *
     * @param float|null $cumJourPaye The cum jour paye.
     * @return Employes Returns this Employes.
     */
    public function setCumJourPaye(?float $cumJourPaye): Employes {
        $this->cumJourPaye = $cumJourPaye;
        return $this;
    }

    /**
     * Set the cum jour trav.
     *
     * @param float|null $cumJourTrav The cum jour trav.
     * @return Employes Returns this Employes.
     */
    public function setCumJourTrav(?float $cumJourTrav): Employes {
        $this->cumJourTrav = $cumJourTrav;
        return $this;
    }

    /**
     * Set the cum mt cp pris.
     *
     * @param float|null $cumMtCpPris The cum mt cp pris.
     * @return Employes Returns this Employes.
     */
    public function setCumMtCpPris(?float $cumMtCpPris): Employes {
        $this->cumMtCpPris = $cumMtCpPris;
        return $this;
    }

    /**
     * Set the cum mt cp pris1.
     *
     * @param float|null $cumMtCpPris1 The cum mt cp pris1.
     * @return Employes Returns this Employes.
     */
    public function setCumMtCpPris1(?float $cumMtCpPris1): Employes {
        $this->cumMtCpPris1 = $cumMtCpPris1;
        return $this;
    }

    /**
     * Set the cum net a payer.
     *
     * @param float|null $cumNetAPayer The cum net a payer.
     * @return Employes Returns this Employes.
     */
    public function setCumNetAPayer(?float $cumNetAPayer): Employes {
        $this->cumNetAPayer = $cumNetAPayer;
        return $this;
    }

    /**
     * Set the cum net imposable.
     *
     * @param float|null $cumNetImposable The cum net imposable.
     * @return Employes Returns this Employes.
     */
    public function setCumNetImposable(?float $cumNetImposable): Employes {
        $this->cumNetImposable = $cumNetImposable;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse1.
     *
     * @param float|null $cumPlaf1Caisse1 The cum plaf1 caisse1.
     * @return Employes Returns this Employes.
     */
    public function setCumPlaf1Caisse1(?float $cumPlaf1Caisse1): Employes {
        $this->cumPlaf1Caisse1 = $cumPlaf1Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse2.
     *
     * @param float|null $cumPlaf1Caisse2 The cum plaf1 caisse2.
     * @return Employes Returns this Employes.
     */
    public function setCumPlaf1Caisse2(?float $cumPlaf1Caisse2): Employes {
        $this->cumPlaf1Caisse2 = $cumPlaf1Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse3.
     *
     * @param float|null $cumPlaf1Caisse3 The cum plaf1 caisse3.
     * @return Employes Returns this Employes.
     */
    public function setCumPlaf1Caisse3(?float $cumPlaf1Caisse3): Employes {
        $this->cumPlaf1Caisse3 = $cumPlaf1Caisse3;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse1.
     *
     * @param float|null $cumPlaf2Caisse1 The cum plaf2 caisse1.
     * @return Employes Returns this Employes.
     */
    public function setCumPlaf2Caisse1(?float $cumPlaf2Caisse1): Employes {
        $this->cumPlaf2Caisse1 = $cumPlaf2Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse2.
     *
     * @param float|null $cumPlaf2Caisse2 The cum plaf2 caisse2.
     * @return Employes Returns this Employes.
     */
    public function setCumPlaf2Caisse2(?float $cumPlaf2Caisse2): Employes {
        $this->cumPlaf2Caisse2 = $cumPlaf2Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse3.
     *
     * @param float|null $cumPlaf2Caisse3 The cum plaf2 caisse3.
     * @return Employes Returns this Employes.
     */
    public function setCumPlaf2Caisse3(?float $cumPlaf2Caisse3): Employes {
        $this->cumPlaf2Caisse3 = $cumPlaf2Caisse3;
        return $this;
    }

    /**
     * Set the cum plafond gmp.
     *
     * @param float|null $cumPlafondGmp The cum plafond gmp.
     * @return Employes Returns this Employes.
     */
    public function setCumPlafondGmp(?float $cumPlafondGmp): Employes {
        $this->cumPlafondGmp = $cumPlafondGmp;
        return $this;
    }

    /**
     * Set the cum plafond ss1.
     *
     * @param float|null $cumPlafondSs1 The cum plafond ss1.
     * @return Employes Returns this Employes.
     */
    public function setCumPlafondSs1(?float $cumPlafondSs1): Employes {
        $this->cumPlafondSs1 = $cumPlafondSs1;
        return $this;
    }

    /**
     * Set the cum plafond ss2.
     *
     * @param float|null $cumPlafondSs2 The cum plafond ss2.
     * @return Employes Returns this Employes.
     */
    public function setCumPlafondSs2(?float $cumPlafondSs2): Employes {
        $this->cumPlafondSs2 = $cumPlafondSs2;
        return $this;
    }

    /**
     * Set the cum prov cp.
     *
     * @param float|null $cumProvCp The cum prov cp.
     * @return Employes Returns this Employes.
     */
    public function setCumProvCp(?float $cumProvCp): Employes {
        $this->cumProvCp = $cumProvCp;
        return $this;
    }

    /**
     * Set the cum prov cp1.
     *
     * @param float|null $cumProvCp1 The cum prov cp1.
     * @return Employes Returns this Employes.
     */
    public function setCumProvCp1(?float $cumProvCp1): Employes {
        $this->cumProvCp1 = $cumProvCp1;
        return $this;
    }

    /**
     * Set the cum repos comp.
     *
     * @param float|null $cumReposComp The cum repos comp.
     * @return Employes Returns this Employes.
     */
    public function setCumReposComp(?float $cumReposComp): Employes {
        $this->cumReposComp = $cumReposComp;
        return $this;
    }

    /**
     * Set the date ancien.
     *
     * @param DateTime|null $dateAncien The date ancien.
     * @return Employes Returns this Employes.
     */
    public function setDateAncien(?DateTime $dateAncien): Employes {
        $this->dateAncien = $dateAncien;
        return $this;
    }

    /**
     * Set the date embauche.
     *
     * @param DateTime|null $dateEmbauche The date embauche.
     * @return Employes Returns this Employes.
     */
    public function setDateEmbauche(?DateTime $dateEmbauche): Employes {
        $this->dateEmbauche = $dateEmbauche;
        return $this;
    }

    /**
     * Set the date entree1.
     *
     * @param DateTime|null $dateEntree1 The date entree1.
     * @return Employes Returns this Employes.
     */
    public function setDateEntree1(?DateTime $dateEntree1): Employes {
        $this->dateEntree1 = $dateEntree1;
        return $this;
    }

    /**
     * Set the date entree2.
     *
     * @param DateTime|null $dateEntree2 The date entree2.
     * @return Employes Returns this Employes.
     */
    public function setDateEntree2(?DateTime $dateEntree2): Employes {
        $this->dateEntree2 = $dateEntree2;
        return $this;
    }

    /**
     * Set the date licenciement.
     *
     * @param DateTime|null $dateLicenciement The date licenciement.
     * @return Employes Returns this Employes.
     */
    public function setDateLicenciement(?DateTime $dateLicenciement): Employes {
        $this->dateLicenciement = $dateLicenciement;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Employes Returns this Employes.
     */
    public function setDateModification(?DateTime $dateModification): Employes {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date naiss conjoint.
     *
     * @param DateTime|null $dateNaissConjoint The date naiss conjoint.
     * @return Employes Returns this Employes.
     */
    public function setDateNaissConjoint(?DateTime $dateNaissConjoint): Employes {
        $this->dateNaissConjoint = $dateNaissConjoint;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     * @return Employes Returns this Employes.
     */
    public function setDateNaissance(?DateTime $dateNaissance): Employes {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the date sortie1.
     *
     * @param DateTime|null $dateSortie1 The date sortie1.
     * @return Employes Returns this Employes.
     */
    public function setDateSortie1(?DateTime $dateSortie1): Employes {
        $this->dateSortie1 = $dateSortie1;
        return $this;
    }

    /**
     * Set the date sortie2.
     *
     * @param DateTime|null $dateSortie2 The date sortie2.
     * @return Employes Returns this Employes.
     */
    public function setDateSortie2(?DateTime $dateSortie2): Employes {
        $this->dateSortie2 = $dateSortie2;
        return $this;
    }

    /**
     * Set the date visite medicale.
     *
     * @param DateTime|null $dateVisiteMedicale The date visite medicale.
     * @return Employes Returns this Employes.
     */
    public function setDateVisiteMedicale(?DateTime $dateVisiteMedicale): Employes {
        $this->dateVisiteMedicale = $dateVisiteMedicale;
        return $this;
    }

    /**
     * Set the date visite reprise.
     *
     * @param DateTime|null $dateVisiteReprise The date visite reprise.
     * @return Employes Returns this Employes.
     */
    public function setDateVisiteReprise(?DateTime $dateVisiteReprise): Employes {
        $this->dateVisiteReprise = $dateVisiteReprise;
        return $this;
    }

    /**
     * Set the dept naissance.
     *
     * @param string|null $deptNaissance The dept naissance.
     * @return Employes Returns this Employes.
     */
    public function setDeptNaissance(?string $deptNaissance): Employes {
        $this->deptNaissance = $deptNaissance;
        return $this;
    }

    /**
     * Set the dern num prime.
     *
     * @param int|null $dernNumPrime The dern num prime.
     * @return Employes Returns this Employes.
     */
    public function setDernNumPrime(?int $dernNumPrime): Employes {
        $this->dernNumPrime = $dernNumPrime;
        return $this;
    }

    /**
     * Set the dim type2.
     *
     * @param bool|null $dimType2 The dim type2.
     * @return Employes Returns this Employes.
     */
    public function setDimType2(?bool $dimType2): Employes {
        $this->dimType2 = $dimType2;
        return $this;
    }

    /**
     * Set the dir non salarie.
     *
     * @param bool|null $dirNonSalarie The dir non salarie.
     * @return Employes Returns this Employes.
     */
    public function setDirNonSalarie(?bool $dirNonSalarie): Employes {
        $this->dirNonSalarie = $dirNonSalarie;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string|null $domBanque The dom banque.
     * @return Employes Returns this Employes.
     */
    public function setDomBanque(?string $domBanque): Employes {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the ed taux sal base.
     *
     * @param bool|null $edTauxSalBase The ed taux sal base.
     * @return Employes Returns this Employes.
     */
    public function setEdTauxSalBase(?bool $edTauxSalBase): Employes {
        $this->edTauxSalBase = $edTauxSalBase;
        return $this;
    }

    /**
     * Set the effectif.
     *
     * @param bool|null $effectif The effectif.
     * @return Employes Returns this Employes.
     */
    public function setEffectif(?bool $effectif): Employes {
        $this->effectif = $effectif;
        return $this;
    }

    /**
     * Set the effectif das.
     *
     * @param bool|null $effectifDas The effectif das.
     * @return Employes Returns this Employes.
     */
    public function setEffectifDas(?bool $effectifDas): Employes {
        $this->effectifDas = $effectifDas;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string|null $emploi The emploi.
     * @return Employes Returns this Employes.
     */
    public function setEmploi(?string $emploi): Employes {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the fictif.
     *
     * @param bool|null $fictif The fictif.
     * @return Employes Returns this Employes.
     */
    public function setFictif(?bool $fictif): Employes {
        $this->fictif = $fictif;
        return $this;
    }

    /**
     * Set the fraction etab.
     *
     * @param string|null $fractionEtab The fraction etab.
     * @return Employes Returns this Employes.
     */
    public function setFractionEtab(?string $fractionEtab): Employes {
        $this->fractionEtab = $fractionEtab;
        return $this;
    }

    /**
     * Set the gestion maj dim.
     *
     * @param string|null $gestionMajDim The gestion maj dim.
     * @return Employes Returns this Employes.
     */
    public function setGestionMajDim(?string $gestionMajDim): Employes {
        $this->gestionMajDim = $gestionMajDim;
        return $this;
    }

    /**
     * Set the gestion maj jf.
     *
     * @param string|null $gestionMajJf The gestion maj jf.
     * @return Employes Returns this Employes.
     */
    public function setGestionMajJf(?string $gestionMajJf): Employes {
        $this->gestionMajJf = $gestionMajJf;
        return $this;
    }

    /**
     * Set the gestion maj nuit.
     *
     * @param string|null $gestionMajNuit The gestion maj nuit.
     * @return Employes Returns this Employes.
     */
    public function setGestionMajNuit(?string $gestionMajNuit): Employes {
        $this->gestionMajNuit = $gestionMajNuit;
        return $this;
    }

    /**
     * Set the grille anc1.
     *
     * @param string|null $grilleAnc1 The grille anc1.
     * @return Employes Returns this Employes.
     */
    public function setGrilleAnc1(?string $grilleAnc1): Employes {
        $this->grilleAnc1 = $grilleAnc1;
        return $this;
    }

    /**
     * Set the grille anc2.
     *
     * @param string|null $grilleAnc2 The grille anc2.
     * @return Employes Returns this Employes.
     */
    public function setGrilleAnc2(?string $grilleAnc2): Employes {
        $this->grilleAnc2 = $grilleAnc2;
        return $this;
    }

    /**
     * Set the grille anc3.
     *
     * @param string|null $grilleAnc3 The grille anc3.
     * @return Employes Returns this Employes.
     */
    public function setGrilleAnc3(?string $grilleAnc3): Employes {
        $this->grilleAnc3 = $grilleAnc3;
        return $this;
    }

    /**
     * Set the h nuit type2.
     *
     * @param bool|null $hNuitType2 The h nuit type2.
     * @return Employes Returns this Employes.
     */
    public function setHNuitType2(?bool $hNuitType2): Employes {
        $this->hNuitType2 = $hNuitType2;
        return $this;
    }

    /**
     * Set the handicape.
     *
     * @param bool|null $handicape The handicape.
     * @return Employes Returns this Employes.
     */
    public function setHandicape(?bool $handicape): Employes {
        $this->handicape = $handicape;
        return $this;
    }

    /**
     * Set the lieu travail conjoint.
     *
     * @param string|null $lieuTravailConjoint The lieu travail conjoint.
     * @return Employes Returns this Employes.
     */
    public function setLieuTravailConjoint(?string $lieuTravailConjoint): Employes {
        $this->lieuTravailConjoint = $lieuTravailConjoint;
        return $this;
    }

    /**
     * Set the matricule.
     *
     * @param string|null $matricule The matricule.
     * @return Employes Returns this Employes.
     */
    public function setMatricule(?string $matricule): Employes {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * Set the mensualisation tache.
     *
     * @param string|null $mensualisationTache The mensualisation tache.
     * @return Employes Returns this Employes.
     */
    public function setMensualisationTache(?string $mensualisationTache): Employes {
        $this->mensualisationTache = $mensualisationTache;
        return $this;
    }

    /**
     * Set the mention cp.
     *
     * @param bool|null $mentionCp The mention cp.
     * @return Employes Returns this Employes.
     */
    public function setMentionCp(?bool $mentionCp): Employes {
        $this->mentionCp = $mentionCp;
        return $this;
    }

    /**
     * Set the min garanti.
     *
     * @param float|null $minGaranti The min garanti.
     * @return Employes Returns this Employes.
     */
    public function setMinGaranti(?float $minGaranti): Employes {
        $this->minGaranti = $minGaranti;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float|null $montant1 The montant1.
     * @return Employes Returns this Employes.
     */
    public function setMontant1(?float $montant1): Employes {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float|null $montant2 The montant2.
     * @return Employes Returns this Employes.
     */
    public function setMontant2(?float $montant2): Employes {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant3.
     *
     * @param float|null $montant3 The montant3.
     * @return Employes Returns this Employes.
     */
    public function setMontant3(?float $montant3): Employes {
        $this->montant3 = $montant3;
        return $this;
    }

    /**
     * Set the montant4.
     *
     * @param float|null $montant4 The montant4.
     * @return Employes Returns this Employes.
     */
    public function setMontant4(?float $montant4): Employes {
        $this->montant4 = $montant4;
        return $this;
    }

    /**
     * Set the montant5.
     *
     * @param float|null $montant5 The montant5.
     * @return Employes Returns this Employes.
     */
    public function setMontant5(?float $montant5): Employes {
        $this->montant5 = $montant5;
        return $this;
    }

    /**
     * Set the montant avantage.
     *
     * @param float|null $montantAvantage The montant avantage.
     * @return Employes Returns this Employes.
     */
    public function setMontantAvantage(?float $montantAvantage): Employes {
        $this->montantAvantage = $montantAvantage;
        return $this;
    }

    /**
     * Set the mt base acompte.
     *
     * @param float|null $mtBaseAcompte The mt base acompte.
     * @return Employes Returns this Employes.
     */
    public function setMtBaseAcompte(?float $mtBaseAcompte): Employes {
        $this->mtBaseAcompte = $mtBaseAcompte;
        return $this;
    }

    /**
     * Set the nationalite.
     *
     * @param string|null $nationalite The nationalite.
     * @return Employes Returns this Employes.
     */
    public function setNationalite(?string $nationalite): Employes {
        $this->nationalite = $nationalite;
        return $this;
    }

    /**
     * Set the nb heure mois.
     *
     * @param float|null $nbHeureMois The nb heure mois.
     * @return Employes Returns this Employes.
     */
    public function setNbHeureMois(?float $nbHeureMois): Employes {
        $this->nbHeureMois = $nbHeureMois;
        return $this;
    }

    /**
     * Set the nb heure sal.
     *
     * @param float|null $nbHeureSal The nb heure sal.
     * @return Employes Returns this Employes.
     */
    public function setNbHeureSal(?float $nbHeureSal): Employes {
        $this->nbHeureSal = $nbHeureSal;
        return $this;
    }

    /**
     * Set the nb heure sup.
     *
     * @param float|null $nbHeureSup The nb heure sup.
     * @return Employes Returns this Employes.
     */
    public function setNbHeureSup(?float $nbHeureSup): Employes {
        $this->nbHeureSup = $nbHeureSup;
        return $this;
    }

    /**
     * Set the nb heure trav.
     *
     * @param float|null $nbHeureTrav The nb heure trav.
     * @return Employes Returns this Employes.
     */
    public function setNbHeureTrav(?float $nbHeureTrav): Employes {
        $this->nbHeureTrav = $nbHeureTrav;
        return $this;
    }

    /**
     * Set the nb jour base cp.
     *
     * @param float|null $nbJourBaseCp The nb jour base cp.
     * @return Employes Returns this Employes.
     */
    public function setNbJourBaseCp(?float $nbJourBaseCp): Employes {
        $this->nbJourBaseCp = $nbJourBaseCp;
        return $this;
    }

    /**
     * Set the nb points.
     *
     * @param int|null $nbPoints The nb points.
     * @return Employes Returns this Employes.
     */
    public function setNbPoints(?int $nbPoints): Employes {
        $this->nbPoints = $nbPoints;
        return $this;
    }

    /**
     * Set the niveau confidentialite.
     *
     * @param string|null $niveauConfidentialite The niveau confidentialite.
     * @return Employes Returns this Employes.
     */
    public function setNiveauConfidentialite(?string $niveauConfidentialite): Employes {
        $this->niveauConfidentialite = $niveauConfidentialite;
        return $this;
    }

    /**
     * Set the nom conjoint.
     *
     * @param string|null $nomConjoint The nom conjoint.
     * @return Employes Returns this Employes.
     */
    public function setNomConjoint(?string $nomConjoint): Employes {
        $this->nomConjoint = $nomConjoint;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string|null $nomMarital The nom marital.
     * @return Employes Returns this Employes.
     */
    public function setNomMarital(?string $nomMarital): Employes {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string|null $nomNaissance The nom naissance.
     * @return Employes Returns this Employes.
     */
    public function setNomNaissance(?string $nomNaissance): Employes {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return Employes Returns this Employes.
     */
    public function setNomVille(?string $nomVille): Employes {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Employes Returns this Employes.
     */
    public function setNomVoie(?string $nomVoie): Employes {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nombre enfants.
     *
     * @param string|null $nombreEnfants The nombre enfants.
     * @return Employes Returns this Employes.
     */
    public function setNombreEnfants(?string $nombreEnfants): Employes {
        $this->nombreEnfants = $nombreEnfants;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Employes Returns this Employes.
     */
    public function setNumVoie(?string $numVoie): Employes {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return Employes Returns this Employes.
     */
    public function setNumero(?string $numero): Employes {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero carte sejour.
     *
     * @param string|null $numeroCarteSejour The numero carte sejour.
     * @return Employes Returns this Employes.
     */
    public function setNumeroCarteSejour(?string $numeroCarteSejour): Employes {
        $this->numeroCarteSejour = $numeroCarteSejour;
        return $this;
    }

    /**
     * Set the numero carte travail.
     *
     * @param string|null $numeroCarteTravail The numero carte travail.
     * @return Employes Returns this Employes.
     */
    public function setNumeroCarteTravail(?string $numeroCarteTravail): Employes {
        $this->numeroCarteTravail = $numeroCarteTravail;
        return $this;
    }

    /**
     * Set the numero cas part secu.
     *
     * @param int|null $numeroCasPartSecu The numero cas part secu.
     * @return Employes Returns this Employes.
     */
    public function setNumeroCasPartSecu(?int $numeroCasPartSecu): Employes {
        $this->numeroCasPartSecu = $numeroCasPartSecu;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int|null $numeroGrilleType The numero grille type.
     * @return Employes Returns this Employes.
     */
    public function setNumeroGrilleType(?int $numeroGrilleType): Employes {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the numero insee.
     *
     * @param string|null $numeroInsee The numero insee.
     * @return Employes Returns this Employes.
     */
    public function setNumeroInsee(?string $numeroInsee): Employes {
        $this->numeroInsee = $numeroInsee;
        return $this;
    }

    /**
     * Set the numero permis.
     *
     * @param string|null $numeroPermis The numero permis.
     * @return Employes Returns this Employes.
     */
    public function setNumeroPermis(?string $numeroPermis): Employes {
        $this->numeroPermis = $numeroPermis;
        return $this;
    }

    /**
     * Set the orphelin.
     *
     * @param bool|null $orphelin The orphelin.
     * @return Employes Returns this Employes.
     */
    public function setOrphelin(?bool $orphelin): Employes {
        $this->orphelin = $orphelin;
        return $this;
    }

    /**
     * Set the pas gestion pdp.
     *
     * @param bool|null $pasGestionPdp The pas gestion pdp.
     * @return Employes Returns this Employes.
     */
    public function setPasGestionPdp(?bool $pasGestionPdp): Employes {
        $this->pasGestionPdp = $pasGestionPdp;
        return $this;
    }

    /**
     * Set the pas gestion pdp1.
     *
     * @param bool|null $pasGestionPdp1 The pas gestion pdp1.
     * @return Employes Returns this Employes.
     */
    public function setPasGestionPdp1(?bool $pasGestionPdp1): Employes {
        $this->pasGestionPdp1 = $pasGestionPdp1;
        return $this;
    }

    /**
     * Set the pension.
     *
     * @param bool|null $pension The pension.
     * @return Employes Returns this Employes.
     */
    public function setPension(?bool $pension): Employes {
        $this->pension = $pension;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string|null $periodicite The periodicite.
     * @return Employes Returns this Employes.
     */
    public function setPeriodicite(?string $periodicite): Employes {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the permis delivre le.
     *
     * @param DateTime|null $permisDelivreLe The permis delivre le.
     * @return Employes Returns this Employes.
     */
    public function setPermisDelivreLe(?DateTime $permisDelivreLe): Employes {
        $this->permisDelivreLe = $permisDelivreLe;
        return $this;
    }

    /**
     * Set the permis delivre par.
     *
     * @param string|null $permisDelivrePar The permis delivre par.
     * @return Employes Returns this Employes.
     */
    public function setPermisDelivrePar(?string $permisDelivrePar): Employes {
        $this->permisDelivrePar = $permisDelivrePar;
        return $this;
    }

    /**
     * Set the permis expire le.
     *
     * @param DateTime|null $permisExpireLe The permis expire le.
     * @return Employes Returns this Employes.
     */
    public function setPermisExpireLe(?DateTime $permisExpireLe): Employes {
        $this->permisExpireLe = $permisExpireLe;
        return $this;
    }

    /**
     * Set the personne a prevenir.
     *
     * @param string|null $personneAPrevenir The personne a prevenir.
     * @return Employes Returns this Employes.
     */
    public function setPersonneAPrevenir(?string $personneAPrevenir): Employes {
        $this->personneAPrevenir = $personneAPrevenir;
        return $this;
    }

    /**
     * Set the plafond gmp.
     *
     * @param float|null $plafondGmp The plafond gmp.
     * @return Employes Returns this Employes.
     */
    public function setPlafondGmp(?float $plafondGmp): Employes {
        $this->plafondGmp = $plafondGmp;
        return $this;
    }

    /**
     * Set the plafond ss1.
     *
     * @param float|null $plafondSs1 The plafond ss1.
     * @return Employes Returns this Employes.
     */
    public function setPlafondSs1(?float $plafondSs1): Employes {
        $this->plafondSs1 = $plafondSs1;
        return $this;
    }

    /**
     * Set the plafond ss30.
     *
     * @param bool|null $plafondSs30 The plafond ss30.
     * @return Employes Returns this Employes.
     */
    public function setPlafondSs30(?bool $plafondSs30): Employes {
        $this->plafondSs30 = $plafondSs30;
        return $this;
    }

    /**
     * Set the pourcent abat.
     *
     * @param float|null $pourcentAbat The pourcent abat.
     * @return Employes Returns this Employes.
     */
    public function setPourcentAbat(?float $pourcentAbat): Employes {
        $this->pourcentAbat = $pourcentAbat;
        return $this;
    }

    /**
     * Set the pourcent act.
     *
     * @param float|null $pourcentAct The pourcent act.
     * @return Employes Returns this Employes.
     */
    public function setPourcentAct(?float $pourcentAct): Employes {
        $this->pourcentAct = $pourcentAct;
        return $this;
    }

    /**
     * Set the pourcent effectif ducs.
     *
     * @param float|null $pourcentEffectifDucs The pourcent effectif ducs.
     * @return Employes Returns this Employes.
     */
    public function setPourcentEffectifDucs(?float $pourcentEffectifDucs): Employes {
        $this->pourcentEffectifDucs = $pourcentEffectifDucs;
        return $this;
    }

    /**
     * Set the pourcent remu hor.
     *
     * @param float|null $pourcentRemuHor The pourcent remu hor.
     * @return Employes Returns this Employes.
     */
    public function setPourcentRemuHor(?float $pourcentRemuHor): Employes {
        $this->pourcentRemuHor = $pourcentRemuHor;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return Employes Returns this Employes.
     */
    public function setPrenom(?string $prenom): Employes {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the prenom conjoint.
     *
     * @param string|null $prenomConjoint The prenom conjoint.
     * @return Employes Returns this Employes.
     */
    public function setPrenomConjoint(?string $prenomConjoint): Employes {
        $this->prenomConjoint = $prenomConjoint;
        return $this;
    }

    /**
     * Set the prime.
     *
     * @param bool|null $prime The prime.
     * @return Employes Returns this Employes.
     */
    public function setPrime(?bool $prime): Employes {
        $this->prime = $prime;
        return $this;
    }

    /**
     * Set the prud college.
     *
     * @param string|null $prudCollege The prud college.
     * @return Employes Returns this Employes.
     */
    public function setPrudCollege(?string $prudCollege): Employes {
        $this->prudCollege = $prudCollege;
        return $this;
    }

    /**
     * Set the prud lieu vote.
     *
     * @param string|null $prudLieuVote The prud lieu vote.
     * @return Employes Returns this Employes.
     */
    public function setPrudLieuVote(?string $prudLieuVote): Employes {
        $this->prudLieuVote = $prudLieuVote;
        return $this;
    }

    /**
     * Set the prud section.
     *
     * @param string|null $prudSection The prud section.
     * @return Employes Returns this Employes.
     */
    public function setPrudSection(?string $prudSection): Employes {
        $this->prudSection = $prudSection;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string|null $qualification The qualification.
     * @return Employes Returns this Employes.
     */
    public function setQualification(?string $qualification): Employes {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Set the regle calcul.
     *
     * @param string|null $regleCalcul The regle calcul.
     * @return Employes Returns this Employes.
     */
    public function setRegleCalcul(?string $regleCalcul): Employes {
        $this->regleCalcul = $regleCalcul;
        return $this;
    }

    /**
     * Set the regroup virement.
     *
     * @param string|null $regroupVirement The regroup virement.
     * @return Employes Returns this Employes.
     */
    public function setRegroupVirement(?string $regroupVirement): Employes {
        $this->regroupVirement = $regroupVirement;
        return $this;
    }

    /**
     * Set the regul tds.
     *
     * @param bool|null $regulTds The regul tds.
     * @return Employes Returns this Employes.
     */
    public function setRegulTds(?bool $regulTds): Employes {
        $this->regulTds = $regulTds;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Employes Returns this Employes.
     */
    public function setRib(?string $rib): Employes {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the salaire base.
     *
     * @param float|null $salaireBase The salaire base.
     * @return Employes Returns this Employes.
     */
    public function setSalaireBase(?float $salaireBase): Employes {
        $this->salaireBase = $salaireBase;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string|null $service The service.
     * @return Employes Returns this Employes.
     */
    public function setService(?string $service): Employes {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the sexe.
     *
     * @param string|null $sexe The sexe.
     * @return Employes Returns this Employes.
     */
    public function setSexe(?string $sexe): Employes {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Set the situation fam.
     *
     * @param string|null $situationFam The situation fam.
     * @return Employes Returns this Employes.
     */
    public function setSituationFam(?string $situationFam): Employes {
        $this->situationFam = $situationFam;
        return $this;
    }

    /**
     * Set the taux1.
     *
     * @param float|null $taux1 The taux1.
     * @return Employes Returns this Employes.
     */
    public function setTaux1(?float $taux1): Employes {
        $this->taux1 = $taux1;
        return $this;
    }

    /**
     * Set the taux2.
     *
     * @param float|null $taux2 The taux2.
     * @return Employes Returns this Employes.
     */
    public function setTaux2(?float $taux2): Employes {
        $this->taux2 = $taux2;
        return $this;
    }

    /**
     * Set the taux3.
     *
     * @param float|null $taux3 The taux3.
     * @return Employes Returns this Employes.
     */
    public function setTaux3(?float $taux3): Employes {
        $this->taux3 = $taux3;
        return $this;
    }

    /**
     * Set the taux4.
     *
     * @param float|null $taux4 The taux4.
     * @return Employes Returns this Employes.
     */
    public function setTaux4(?float $taux4): Employes {
        $this->taux4 = $taux4;
        return $this;
    }

    /**
     * Set the taux5.
     *
     * @param float|null $taux5 The taux5.
     * @return Employes Returns this Employes.
     */
    public function setTaux5(?float $taux5): Employes {
        $this->taux5 = $taux5;
        return $this;
    }

    /**
     * Set the taux absence.
     *
     * @param float|null $tauxAbsence The taux absence.
     * @return Employes Returns this Employes.
     */
    public function setTauxAbsence(?float $tauxAbsence): Employes {
        $this->tauxAbsence = $tauxAbsence;
        return $this;
    }

    /**
     * Set the taux ancien.
     *
     * @param float|null $tauxAncien The taux ancien.
     * @return Employes Returns this Employes.
     */
    public function setTauxAncien(?float $tauxAncien): Employes {
        $this->tauxAncien = $tauxAncien;
        return $this;
    }

    /**
     * Set the taux h sup.
     *
     * @param float|null $tauxHSup The taux h sup.
     * @return Employes Returns this Employes.
     */
    public function setTauxHSup(?float $tauxHSup): Employes {
        $this->tauxHSup = $tauxHSup;
        return $this;
    }

    /**
     * Set the taux pension civile.
     *
     * @param float|null $tauxPensionCivile The taux pension civile.
     * @return Employes Returns this Employes.
     */
    public function setTauxPensionCivile(?float $tauxPensionCivile): Employes {
        $this->tauxPensionCivile = $tauxPensionCivile;
        return $this;
    }

    /**
     * Set the taux pension militaire.
     *
     * @param float|null $tauxPensionMilitaire The taux pension militaire.
     * @return Employes Returns this Employes.
     */
    public function setTauxPensionMilitaire(?float $tauxPensionMilitaire): Employes {
        $this->tauxPensionMilitaire = $tauxPensionMilitaire;
        return $this;
    }

    /**
     * Set the taxe salaire.
     *
     * @param bool|null $taxeSalaire The taxe salaire.
     * @return Employes Returns this Employes.
     */
    public function setTaxeSalaire(?bool $taxeSalaire): Employes {
        $this->taxeSalaire = $taxeSalaire;
        return $this;
    }

    /**
     * Set the tds100.
     *
     * @param float|null $tds100 The tds100.
     * @return Employes Returns this Employes.
     */
    public function setTds100(?float $tds100): Employes {
        $this->tds100 = $tds100;
        return $this;
    }

    /**
     * Set the tds102.
     *
     * @param float|null $tds102 The tds102.
     * @return Employes Returns this Employes.
     */
    public function setTds102(?float $tds102): Employes {
        $this->tds102 = $tds102;
        return $this;
    }

    /**
     * Set the tds103.
     *
     * @param float|null $tds103 The tds103.
     * @return Employes Returns this Employes.
     */
    public function setTds103(?float $tds103): Employes {
        $this->tds103 = $tds103;
        return $this;
    }

    /**
     * Set the tds105.
     *
     * @param float|null $tds105 The tds105.
     * @return Employes Returns this Employes.
     */
    public function setTds105(?float $tds105): Employes {
        $this->tds105 = $tds105;
        return $this;
    }

    /**
     * Set the tds107.
     *
     * @param bool|null $tds107 The tds107.
     * @return Employes Returns this Employes.
     */
    public function setTds107(?bool $tds107): Employes {
        $this->tds107 = $tds107;
        return $this;
    }

    /**
     * Set the tds108.
     *
     * @param bool|null $tds108 The tds108.
     * @return Employes Returns this Employes.
     */
    public function setTds108(?bool $tds108): Employes {
        $this->tds108 = $tds108;
        return $this;
    }

    /**
     * Set the tds109.
     *
     * @param bool|null $tds109 The tds109.
     * @return Employes Returns this Employes.
     */
    public function setTds109(?bool $tds109): Employes {
        $this->tds109 = $tds109;
        return $this;
    }

    /**
     * Set the tds110.
     *
     * @param bool|null $tds110 The tds110.
     * @return Employes Returns this Employes.
     */
    public function setTds110(?bool $tds110): Employes {
        $this->tds110 = $tds110;
        return $this;
    }

    /**
     * Set the tds112.
     *
     * @param float|null $tds112 The tds112.
     * @return Employes Returns this Employes.
     */
    public function setTds112(?float $tds112): Employes {
        $this->tds112 = $tds112;
        return $this;
    }

    /**
     * Set the tds113.
     *
     * @param bool|null $tds113 The tds113.
     * @return Employes Returns this Employes.
     */
    public function setTds113(?bool $tds113): Employes {
        $this->tds113 = $tds113;
        return $this;
    }

    /**
     * Set the tds117.
     *
     * @param float|null $tds117 The tds117.
     * @return Employes Returns this Employes.
     */
    public function setTds117(?float $tds117): Employes {
        $this->tds117 = $tds117;
        return $this;
    }

    /**
     * Set the tds119.
     *
     * @param bool|null $tds119 The tds119.
     * @return Employes Returns this Employes.
     */
    public function setTds119(?bool $tds119): Employes {
        $this->tds119 = $tds119;
        return $this;
    }

    /**
     * Set the tds120.
     *
     * @param bool|null $tds120 The tds120.
     * @return Employes Returns this Employes.
     */
    public function setTds120(?bool $tds120): Employes {
        $this->tds120 = $tds120;
        return $this;
    }

    /**
     * Set the tds121.
     *
     * @param bool|null $tds121 The tds121.
     * @return Employes Returns this Employes.
     */
    public function setTds121(?bool $tds121): Employes {
        $this->tds121 = $tds121;
        return $this;
    }

    /**
     * Set the tds122.
     *
     * @param bool|null $tds122 The tds122.
     * @return Employes Returns this Employes.
     */
    public function setTds122(?bool $tds122): Employes {
        $this->tds122 = $tds122;
        return $this;
    }

    /**
     * Set the tds125.
     *
     * @param float|null $tds125 The tds125.
     * @return Employes Returns this Employes.
     */
    public function setTds125(?float $tds125): Employes {
        $this->tds125 = $tds125;
        return $this;
    }

    /**
     * Set the tds127.
     *
     * @param float|null $tds127 The tds127.
     * @return Employes Returns this Employes.
     */
    public function setTds127(?float $tds127): Employes {
        $this->tds127 = $tds127;
        return $this;
    }

    /**
     * Set the tds128.
     *
     * @param string|null $tds128 The tds128.
     * @return Employes Returns this Employes.
     */
    public function setTds128(?string $tds128): Employes {
        $this->tds128 = $tds128;
        return $this;
    }

    /**
     * Set the tds132.
     *
     * @param float|null $tds132 The tds132.
     * @return Employes Returns this Employes.
     */
    public function setTds132(?float $tds132): Employes {
        $this->tds132 = $tds132;
        return $this;
    }

    /**
     * Set the tds133.
     *
     * @param string|null $tds133 The tds133.
     * @return Employes Returns this Employes.
     */
    public function setTds133(?string $tds133): Employes {
        $this->tds133 = $tds133;
        return $this;
    }

    /**
     * Set the tds134.
     *
     * @param float|null $tds134 The tds134.
     * @return Employes Returns this Employes.
     */
    public function setTds134(?float $tds134): Employes {
        $this->tds134 = $tds134;
        return $this;
    }

    /**
     * Set the tds135.
     *
     * @param float|null $tds135 The tds135.
     * @return Employes Returns this Employes.
     */
    public function setTds135(?float $tds135): Employes {
        $this->tds135 = $tds135;
        return $this;
    }

    /**
     * Set the tds136.
     *
     * @param float|null $tds136 The tds136.
     * @return Employes Returns this Employes.
     */
    public function setTds136(?float $tds136): Employes {
        $this->tds136 = $tds136;
        return $this;
    }

    /**
     * Set the tds138.
     *
     * @param string|null $tds138 The tds138.
     * @return Employes Returns this Employes.
     */
    public function setTds138(?string $tds138): Employes {
        $this->tds138 = $tds138;
        return $this;
    }

    /**
     * Set the tds139.
     *
     * @param string|null $tds139 The tds139.
     * @return Employes Returns this Employes.
     */
    public function setTds139(?string $tds139): Employes {
        $this->tds139 = $tds139;
        return $this;
    }

    /**
     * Set the tds141.
     *
     * @param float|null $tds141 The tds141.
     * @return Employes Returns this Employes.
     */
    public function setTds141(?float $tds141): Employes {
        $this->tds141 = $tds141;
        return $this;
    }

    /**
     * Set the tds59.
     *
     * @param string|null $tds59 The tds59.
     * @return Employes Returns this Employes.
     */
    public function setTds59(?string $tds59): Employes {
        $this->tds59 = $tds59;
        return $this;
    }

    /**
     * Set the tds60.
     *
     * @param bool|null $tds60 The tds60.
     * @return Employes Returns this Employes.
     */
    public function setTds60(?bool $tds60): Employes {
        $this->tds60 = $tds60;
        return $this;
    }

    /**
     * Set the tds61.
     *
     * @param string|null $tds61 The tds61.
     * @return Employes Returns this Employes.
     */
    public function setTds61(?string $tds61): Employes {
        $this->tds61 = $tds61;
        return $this;
    }

    /**
     * Set the tds75.
     *
     * @param int|null $tds75 The tds75.
     * @return Employes Returns this Employes.
     */
    public function setTds75(?int $tds75): Employes {
        $this->tds75 = $tds75;
        return $this;
    }

    /**
     * Set the tds76.
     *
     * @param string|null $tds76 The tds76.
     * @return Employes Returns this Employes.
     */
    public function setTds76(?string $tds76): Employes {
        $this->tds76 = $tds76;
        return $this;
    }

    /**
     * Set the tds77.
     *
     * @param string|null $tds77 The tds77.
     * @return Employes Returns this Employes.
     */
    public function setTds77(?string $tds77): Employes {
        $this->tds77 = $tds77;
        return $this;
    }

    /**
     * Set the tds78.
     *
     * @param bool|null $tds78 The tds78.
     * @return Employes Returns this Employes.
     */
    public function setTds78(?bool $tds78): Employes {
        $this->tds78 = $tds78;
        return $this;
    }

    /**
     * Set the tds81.
     *
     * @param float|null $tds81 The tds81.
     * @return Employes Returns this Employes.
     */
    public function setTds81(?float $tds81): Employes {
        $this->tds81 = $tds81;
        return $this;
    }

    /**
     * Set the tds82.
     *
     * @param float|null $tds82 The tds82.
     * @return Employes Returns this Employes.
     */
    public function setTds82(?float $tds82): Employes {
        $this->tds82 = $tds82;
        return $this;
    }

    /**
     * Set the tds84.
     *
     * @param float|null $tds84 The tds84.
     * @return Employes Returns this Employes.
     */
    public function setTds84(?float $tds84): Employes {
        $this->tds84 = $tds84;
        return $this;
    }

    /**
     * Set the tds85.
     *
     * @param float|null $tds85 The tds85.
     * @return Employes Returns this Employes.
     */
    public function setTds85(?float $tds85): Employes {
        $this->tds85 = $tds85;
        return $this;
    }

    /**
     * Set the tds86.
     *
     * @param float|null $tds86 The tds86.
     * @return Employes Returns this Employes.
     */
    public function setTds86(?float $tds86): Employes {
        $this->tds86 = $tds86;
        return $this;
    }

    /**
     * Set the tds87.
     *
     * @param float|null $tds87 The tds87.
     * @return Employes Returns this Employes.
     */
    public function setTds87(?float $tds87): Employes {
        $this->tds87 = $tds87;
        return $this;
    }

    /**
     * Set the tds88.
     *
     * @param float|null $tds88 The tds88.
     * @return Employes Returns this Employes.
     */
    public function setTds88(?float $tds88): Employes {
        $this->tds88 = $tds88;
        return $this;
    }

    /**
     * Set the tds89.
     *
     * @param float|null $tds89 The tds89.
     * @return Employes Returns this Employes.
     */
    public function setTds89(?float $tds89): Employes {
        $this->tds89 = $tds89;
        return $this;
    }

    /**
     * Set the tds90.
     *
     * @param float|null $tds90 The tds90.
     * @return Employes Returns this Employes.
     */
    public function setTds90(?float $tds90): Employes {
        $this->tds90 = $tds90;
        return $this;
    }

    /**
     * Set the tds91.
     *
     * @param float|null $tds91 The tds91.
     * @return Employes Returns this Employes.
     */
    public function setTds91(?float $tds91): Employes {
        $this->tds91 = $tds91;
        return $this;
    }

    /**
     * Set the tds92.
     *
     * @param float|null $tds92 The tds92.
     * @return Employes Returns this Employes.
     */
    public function setTds92(?float $tds92): Employes {
        $this->tds92 = $tds92;
        return $this;
    }

    /**
     * Set the tds93.
     *
     * @param float|null $tds93 The tds93.
     * @return Employes Returns this Employes.
     */
    public function setTds93(?float $tds93): Employes {
        $this->tds93 = $tds93;
        return $this;
    }

    /**
     * Set the tds94.
     *
     * @param float|null $tds94 The tds94.
     * @return Employes Returns this Employes.
     */
    public function setTds94(?float $tds94): Employes {
        $this->tds94 = $tds94;
        return $this;
    }

    /**
     * Set the tds95.
     *
     * @param float|null $tds95 The tds95.
     * @return Employes Returns this Employes.
     */
    public function setTds95(?float $tds95): Employes {
        $this->tds95 = $tds95;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string|null $tel1 The tel1.
     * @return Employes Returns this Employes.
     */
    public function setTel1(?string $tel1): Employes {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel conjoint.
     *
     * @param string|null $telConjoint The tel conjoint.
     * @return Employes Returns this Employes.
     */
    public function setTelConjoint(?string $telConjoint): Employes {
        $this->telConjoint = $telConjoint;
        return $this;
    }

    /**
     * Set the tel pers a prevenir.
     *
     * @param string|null $telPersAPrevenir The tel pers a prevenir.
     * @return Employes Returns this Employes.
     */
    public function setTelPersAPrevenir(?string $telPersAPrevenir): Employes {
        $this->telPersAPrevenir = $telPersAPrevenir;
        return $this;
    }

    /**
     * Set the temps passe.
     *
     * @param bool|null $tempsPasse The temps passe.
     * @return Employes Returns this Employes.
     */
    public function setTempsPasse(?bool $tempsPasse): Employes {
        $this->tempsPasse = $tempsPasse;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return Employes Returns this Employes.
     */
    public function setTitre(?string $titre): Employes {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the transfert entree1.
     *
     * @param bool|null $transfertEntree1 The transfert entree1.
     * @return Employes Returns this Employes.
     */
    public function setTransfertEntree1(?bool $transfertEntree1): Employes {
        $this->transfertEntree1 = $transfertEntree1;
        return $this;
    }

    /**
     * Set the transfert entree2.
     *
     * @param bool|null $transfertEntree2 The transfert entree2.
     * @return Employes Returns this Employes.
     */
    public function setTransfertEntree2(?bool $transfertEntree2): Employes {
        $this->transfertEntree2 = $transfertEntree2;
        return $this;
    }

    /**
     * Set the transfert sortie1.
     *
     * @param bool|null $transfertSortie1 The transfert sortie1.
     * @return Employes Returns this Employes.
     */
    public function setTransfertSortie1(?bool $transfertSortie1): Employes {
        $this->transfertSortie1 = $transfertSortie1;
        return $this;
    }

    /**
     * Set the transfert sortie2.
     *
     * @param bool|null $transfertSortie2 The transfert sortie2.
     * @return Employes Returns this Employes.
     */
    public function setTransfertSortie2(?bool $transfertSortie2): Employes {
        $this->transfertSortie2 = $transfertSortie2;
        return $this;
    }

    /**
     * Set the travaille jf.
     *
     * @param bool|null $travailleJf The travaille jf.
     * @return Employes Returns this Employes.
     */
    public function setTravailleJf(?bool $travailleJf): Employes {
        $this->travailleJf = $travailleJf;
        return $this;
    }

    /**
     * Set the type contrat.
     *
     * @param string|null $typeContrat The type contrat.
     * @return Employes Returns this Employes.
     */
    public function setTypeContrat(?string $typeContrat): Employes {
        $this->typeContrat = $typeContrat;
        return $this;
    }

    /**
     * Set the type nationalite.
     *
     * @param string|null $typeNationalite The type nationalite.
     * @return Employes Returns this Employes.
     */
    public function setTypeNationalite(?string $typeNationalite): Employes {
        $this->typeNationalite = $typeNationalite;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string|null $typePaiement The type paiement.
     * @return Employes Returns this Employes.
     */
    public function setTypePaiement(?string $typePaiement): Employes {
        $this->typePaiement = $typePaiement;
        return $this;
    }

    /**
     * Set the vrp multicarte.
     *
     * @param bool|null $vrpMulticarte The vrp multicarte.
     * @return Employes Returns this Employes.
     */
    public function setVrpMulticarte(?bool $vrpMulticarte): Employes {
        $this->vrpMulticarte = $vrpMulticarte;
        return $this;
    }

    /**
     * Set the plafond ss2.
     *
     * @param float|null $plafondSs2 The plafond ss2.
     * @return Employes Returns this Employes.
     */
    public function setplafondSs2(?float $plafondSs2): Employes {
        $this->plafondSs2 = $plafondSs2;
        return $this;
    }
}
