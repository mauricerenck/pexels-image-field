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
 * Bulletins.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Bulletins {

    /**
     * Abat theo.
     *
     * @var float|null
     */
    private $abatTheo;

    /**
     * Abattement max.
     *
     * @var float|null
     */
    private $abattementMax;

    /**
     * Allegement.
     *
     * @var float|null
     */
    private $allegement;

    /**
     * Allegement non proratise.
     *
     * @var float|null
     */
    private $allegementNonProratise;

    /**
     * Avantage nature.
     *
     * @var float|null
     */
    private $avantageNature;

    /**
     * Base gmp.
     *
     * @var float|null
     */
    private $baseGmp;

    /**
     * Base secu.
     *
     * @var float|null
     */
    private $baseSecu;

    /**
     * Base ss plaf modif.
     *
     * @var bool|null
     */
    private $baseSsPlafModif;

    /**
     * Borne per modifie.
     *
     * @var bool|null
     */
    private $bornePerModifie;

    /**
     * Brut.
     *
     * @var float|null
     */
    private $brut;

    /**
     * Brut al.
     *
     * @var float|null
     */
    private $brutAl;

    /**
     * Brut al limite smic.
     *
     * @var float|null
     */
    private $brutAlLimiteSmic;

    /**
     * Brut al modifie.
     *
     * @var bool|null
     */
    private $brutAlModifie;

    /**
     * Brut anl.
     *
     * @var float|null
     */
    private $brutAnl;

    /**
     * Brut caisse1.
     *
     * @var float|null
     */
    private $brutCaisse1;

    /**
     * Brut caisse2.
     *
     * @var float|null
     */
    private $brutCaisse2;

    /**
     * Brut caisse3.
     *
     * @var float|null
     */
    private $brutCaisse3;

    /**
     * Brut caisse cp.
     *
     * @var float|null
     */
    private $brutCaisseCp;

    /**
     * Brut cp.
     *
     * @var float|null
     */
    private $brutCp;

    /**
     * Brut csg.
     *
     * @var float|null
     */
    private $brutCsg;

    /**
     * Brut soumis abat.
     *
     * @var float|null
     */
    private $brutSoumisAbat;

    /**
     * Brut soumis crds.
     *
     * @var float|null
     */
    private $brutSoumisCrds;

    /**
     * Bulletin publie.
     *
     * @var bool|null
     */
    private $bulletinPublie;

    /**
     * Categ tds.
     *
     * @var string|null
     */
    private $categTds;

    /**
     * Cheque edite.
     *
     * @var bool|null
     */
    private $chequeEdite;

    /**
     * Chom partiel coeff indem.
     *
     * @var float|null
     */
    private $chomPartielCoeffIndem;

    /**
     * Chom partiel cp.
     *
     * @var float|null
     */
    private $chomPartielCp;

    /**
     * Chom partiel min indem.
     *
     * @var float|null
     */
    private $chomPartielMinIndem;

    /**
     * Code at per.
     *
     * @var int|null
     */
    private $codeAtPer;

    /**
     * Code centre urssaf.
     *
     * @var string|null
     */
    private $codeCentreUrssaf;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code type sal.
     *
     * @var string|null
     */
    private $codeTypeSal;

    /**
     * Coeff intemperie.
     *
     * @var float|null
     */
    private $coeffIntemperie;

    /**
     * Cont h sup repos comp.
     *
     * @var float|null
     */
    private $contHSupReposComp;

    /**
     * Cout global mois.
     *
     * @var float|null
     */
    private $coutGlobalMois;

    /**
     * Cum30 ss.
     *
     * @var float|null
     */
    private $cum30Ss;

    /**
     * Cum ant h sup.
     *
     * @var float|null
     */
    private $cumAntHSup;

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
     * Cum brut.
     *
     * @var float|null
     */
    private $cumBrut;

    /**
     * Cum brut al.
     *
     * @var float|null
     */
    private $cumBrutAl;

    /**
     * Cum brut anl.
     *
     * @var float|null
     */
    private $cumBrutAnl;

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
     * Cum h repos comp.
     *
     * @var float|null
     */
    private $cumHReposComp;

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
     * Cum impos.
     *
     * @var float|null
     */
    private $cumImpos;

    /**
     * Cum j repos recup.
     *
     * @var float|null
     */
    private $cumJReposRecup;

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
     * Cum pss1.
     *
     * @var float|null
     */
    private $cumPss1;

    /**
     * Cum pss2.
     *
     * @var float|null
     */
    private $cumPss2;

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
     * Cum tr a caisse1.
     *
     * @var float|null
     */
    private $cumTrACaisse1;

    /**
     * Cum tr a caisse2.
     *
     * @var float|null
     */
    private $cumTrACaisse2;

    /**
     * Cum tr a caisse3.
     *
     * @var float|null
     */
    private $cumTrACaisse3;

    /**
     * Cum tr b caisse1.
     *
     * @var float|null
     */
    private $cumTrBCaisse1;

    /**
     * Cum tr b caisse2.
     *
     * @var float|null
     */
    private $cumTrBCaisse2;

    /**
     * Cum tr b caisse3.
     *
     * @var float|null
     */
    private $cumTrBCaisse3;

    /**
     * Cum tr c caisse1.
     *
     * @var float|null
     */
    private $cumTrCCaisse1;

    /**
     * Cum tr c caisse2.
     *
     * @var float|null
     */
    private $cumTrCCaisse2;

    /**
     * Cum tr c caisse3.
     *
     * @var float|null
     */
    private $cumTrCCaisse3;

    /**
     * Cum tranche2.
     *
     * @var float|null
     */
    private $cumTranche2;

    /**
     * Cum tranche a.
     *
     * @var float|null
     */
    private $cumTrancheA;

    /**
     * Cum tranche b.
     *
     * @var float|null
     */
    private $cumTrancheB;

    /**
     * Cum tranche c.
     *
     * @var float|null
     */
    private $cumTrancheC;

    /**
     * Delta.
     *
     * @var float|null
     */
    private $delta;

    /**
     * Droit cp.
     *
     * @var float|null
     */
    private $droitCp;

    /**
     * Dt debut periode.
     *
     * @var DateTime|null
     */
    private $dtDebutPeriode;

    /**
     * Dt fin periode.
     *
     * @var DateTime|null
     */
    private $dtFinPeriode;

    /**
     * Ecart cumule.
     *
     * @var float|null
     */
    private $ecartCumule;

    /**
     * Etat bul.
     *
     * @var string|null
     */
    private $etatBul;

    /**
     * Etat edition.
     *
     * @var string|null
     */
    private $etatEdition;

    /**
     * Forfait jour.
     *
     * @var bool|null
     */
    private $forfaitJour;

    /**
     * Gest calc net paye.
     *
     * @var bool|null
     */
    private $gestCalcNetPaye;

    /**
     * Gestion coeff.
     *
     * @var bool|null
     */
    private $gestionCoeff;

    /**
     * H reel trav.
     *
     * @var float|null
     */
    private $hReelTrav;

    /**
     * H theo trav.
     *
     * @var float|null
     */
    private $hTheoTrav;

    /**
     * Heure absence.
     *
     * @var float|null
     */
    private $heureAbsence;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Lien justificatif.
     *
     * @var string|null
     */
    private $lienJustificatif;

    /**
     * Max abat.
     *
     * @var float|null
     */
    private $maxAbat;

    /**
     * Mensuel journalier.
     *
     * @var bool|null
     */
    private $mensuelJournalier;

    /**
     * Methode indem cp.
     *
     * @var string|null
     */
    private $methodeIndemCp;

    /**
     * Mig.
     *
     * @var float|null
     */
    private $mig;

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
     * Mt h sup bonif.
     *
     * @var float|null
     */
    private $mtHSupBonif;

    /**
     * Mt i cp cp.
     *
     * @var float|null
     */
    private $mtICpCp;

    /**
     * Mt i cpt.
     *
     * @var float|null
     */
    private $mtICpt;

    /**
     * Mt i int.
     *
     * @var float|null
     */
    private $mtIInt;

    /**
     * Mt jcp arbitrage.
     *
     * @var bool|null
     */
    private $mtJcpArbitrage;

    /**
     * Mt journee cp.
     *
     * @var float|null
     */
    private $mtJourneeCp;

    /**
     * Mt net paye theo.
     *
     * @var float|null
     */
    private $mtNetPayeTheo;

    /**
     * Mt taux lig sal base.
     *
     * @var float|null
     */
    private $mtTauxLigSalBase;

    /**
     * Nb30.
     *
     * @var float|null
     */
    private $nb30;

    /**
     * Nb h ab cp.
     *
     * @var float|null
     */
    private $nbHAbCp;

    /**
     * Nb h absence intemp.
     *
     * @var float|null
     */
    private $nbHAbsenceIntemp;

    /**
     * Nb h attente.
     *
     * @var float|null
     */
    private $nbHAttente;

    /**
     * Nb h bonifie dues.
     *
     * @var float|null
     */
    private $nbHBonifieDues;

    /**
     * Nb h bonifie prises.
     *
     * @var float|null
     */
    private $nbHBonifiePrises;

    /**
     * Nb h carence intemp.
     *
     * @var float|null
     */
    private $nbHCarenceIntemp;

    /**
     * Nb h chom part cp.
     *
     * @var float|null
     */
    private $nbHChomPartCp;

    /**
     * Nb h chom part tech.
     *
     * @var float|null
     */
    private $nbHChomPartTech;

    /**
     * Nb h conduite.
     *
     * @var float|null
     */
    private $nbHConduite;

    /**
     * Nb h conting.
     *
     * @var float|null
     */
    private $nbHConting;

    /**
     * Nb h dble.
     *
     * @var float|null
     */
    private $nbHDble;

    /**
     * Nb h dif dus.
     *
     * @var float|null
     */
    private $nbHDifDus;

    /**
     * Nb h intemp indem.
     *
     * @var float|null
     */
    private $nbHIntempIndem;

    /**
     * Nb h lig sal base.
     *
     * @var float|null
     */
    private $nbHLigSalBase;

    /**
     * Nb h normal.
     *
     * @var float|null
     */
    private $nbHNormal;

    /**
     * Nb h pas droit fillon.
     *
     * @var float|null
     */
    private $nbHPasDroitFillon;

    /**
     * Nb h remplace.
     *
     * @var float|null
     */
    private $nbHRemplace;

    /**
     * Nb h repo comp dues.
     *
     * @var float|null
     */
    private $nbHRepoCompDues;

    /**
     * Nb h repo comp prises.
     *
     * @var float|null
     */
    private $nbHRepoCompPrises;

    /**
     * Nb h repo r dues.
     *
     * @var float|null
     */
    private $nbHRepoRDues;

    /**
     * Nb h repo r prises.
     *
     * @var float|null
     */
    private $nbHRepoRPrises;

    /**
     * Nb h sup1.
     *
     * @var float|null
     */
    private $nbHSup1;

    /**
     * Nb h sup2.
     *
     * @var float|null
     */
    private $nbHSup2;

    /**
     * Nb h sup3.
     *
     * @var float|null
     */
    private $nbHSup3;

    /**
     * Nb h sup4.
     *
     * @var float|null
     */
    private $nbHSup4;

    /**
     * Nb h sup5.
     *
     * @var float|null
     */
    private $nbHSup5;

    /**
     * Nb h sup bonif.
     *
     * @var float|null
     */
    private $nbHSupBonif;

    /**
     * Nb h sup bonif abs.
     *
     * @var float|null
     */
    private $nbHSupBonifAbs;

    /**
     * Nb h trav.
     *
     * @var float|null
     */
    private $nbHTrav;

    /**
     * Nb h travail.
     *
     * @var float|null
     */
    private $nbHTravail;

    /**
     * Nb heure paye.
     *
     * @var float|null
     */
    private $nbHeurePaye;

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
     * Nb heure trav mois.
     *
     * @var float|null
     */
    private $nbHeureTravMois;

    /**
     * Nb j chom part cp.
     *
     * @var float|null
     */
    private $nbJChomPartCp;

    /**
     * Nb j dus.
     *
     * @var float|null
     */
    private $nbJDus;

    /**
     * Nb j dus1.
     *
     * @var float|null
     */
    private $nbJDus1;

    /**
     * Nb j pris.
     *
     * @var float|null
     */
    private $nbJPris;

    /**
     * Nb j pris1.
     *
     * @var float|null
     */
    private $nbJPris1;

    /**
     * Nb j repo recup dus.
     *
     * @var float|null
     */
    private $nbJRepoRecupDus;

    /**
     * Nb j repo recup pris.
     *
     * @var float|null
     */
    private $nbJRepoRecupPris;

    /**
     * Nb j trav force.
     *
     * @var bool|null
     */
    private $nbJTravForce;

    /**
     * Nb j trav mois es.
     *
     * @var int|null
     */
    private $nbJTravMoisEs;

    /**
     * Nb jour base.
     *
     * @var float|null
     */
    private $nbJourBase;

    /**
     * Nb jour base cp.
     *
     * @var float|null
     */
    private $nbJourBaseCp;

    /**
     * Nb jour cp acquis.
     *
     * @var float|null
     */
    private $nbJourCpAcquis;

    /**
     * Nb jour cp pris.
     *
     * @var float|null
     */
    private $nbJourCpPris;

    /**
     * Nb jour normaux.
     *
     * @var float|null
     */
    private $nbJourNormaux;

    /**
     * Nb jour trav.
     *
     * @var float|null
     */
    private $nbJourTrav;

    /**
     * Nb jrtt dus.
     *
     * @var float|null
     */
    private $nbJrttDus;

    /**
     * Nb jrtt pris.
     *
     * @var float|null
     */
    private $nbJrttPris;

    /**
     * Net a payer.
     *
     * @var float|null
     */
    private $netAPayer;

    /**
     * Net impos.
     *
     * @var float|null
     */
    private $netImpos;

    /**
     * Note1.
     *
     * @var string|null
     */
    private $note1;

    /**
     * Note2.
     *
     * @var string|null
     */
    private $note2;

    /**
     * Note3.
     *
     * @var string|null
     */
    private $note3;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Paie euro.
     *
     * @var bool|null
     */
    private $paieEuro;

    /**
     * Paiement cp non pris.
     *
     * @var bool|null
     */
    private $paiementCpNonPris;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Periodicite.
     *
     * @var string|null
     */
    private $periodicite;

    /**
     * Periodicite modifie.
     *
     * @var bool|null
     */
    private $periodiciteModifie;

    /**
     * Plafond1 caisse1.
     *
     * @var float|null
     */
    private $plafond1Caisse1;

    /**
     * Plafond1 caisse2.
     *
     * @var float|null
     */
    private $plafond1Caisse2;

    /**
     * Plafond1 caisse3.
     *
     * @var float|null
     */
    private $plafond1Caisse3;

    /**
     * Plafond2 caisse1.
     *
     * @var float|null
     */
    private $plafond2Caisse1;

    /**
     * Plafond2 caisse2.
     *
     * @var float|null
     */
    private $plafond2Caisse2;

    /**
     * Plafond2 caisse3.
     *
     * @var float|null
     */
    private $plafond2Caisse3;

    /**
     * Plafond gmp.
     *
     * @var float|null
     */
    private $plafondGmp;

    /**
     * Plafond gmp modifie.
     *
     * @var bool|null
     */
    private $plafondGmpModifie;

    /**
     * Plafond heure.
     *
     * @var float|null
     */
    private $plafondHeure;

    /**
     * Plafond jour.
     *
     * @var float|null
     */
    private $plafondJour;

    /**
     * Plafond semaine.
     *
     * @var float|null
     */
    private $plafondSemaine;

    /**
     * Pourcent abat.
     *
     * @var float|null
     */
    private $pourcentAbat;

    /**
     * Pourcent act force.
     *
     * @var int|null
     */
    private $pourcentActForce;

    /**
     * Pourcent activite.
     *
     * @var float|null
     */
    private $pourcentActivite;

    /**
     * Pourcent remu hor.
     *
     * @var float|null
     */
    private $pourcentRemuHor;

    /**
     * Pp soumis taxe.
     *
     * @var float|null
     */
    private $ppSoumisTaxe;

    /**
     * Prov cp.
     *
     * @var float|null
     */
    private $provCp;

    /**
     * Prov cp1.
     *
     * @var float|null
     */
    private $provCp1;

    /**
     * Pss1.
     *
     * @var float|null
     */
    private $pss1;

    /**
     * Pss2.
     *
     * @var float|null
     */
    private $pss2;

    /**
     * Pss30.
     *
     * @var bool|null
     */
    private $pss30;

    /**
     * Pss mod.
     *
     * @var bool|null
     */
    private $pssMod;

    /**
     * Remun mens.
     *
     * @var float|null
     */
    private $remunMens;

    /**
     * S base.
     *
     * @var float|null
     */
    private $sBase;

    /**
     * Smic1.
     *
     * @var float|null
     */
    private $smic1;

    /**
     * Smic h.
     *
     * @var float|null
     */
    private $smicH;

    /**
     * Smic h35.
     *
     * @var float|null
     */
    private $smicH35;

    /**
     * Smic h39.
     *
     * @var float|null
     */
    private $smicH39;

    /**
     * Smic m.
     *
     * @var float|null
     */
    private $smicM;

    /**
     * Smic m35.
     *
     * @var float|null
     */
    private $smicM35;

    /**
     * Smic m39.
     *
     * @var float|null
     */
    private $smicM39;

    /**
     * Sortie mois.
     *
     * @var bool|null
     */
    private $sortieMois;

    /**
     * Taux h ab cp.
     *
     * @var float|null
     */
    private $tauxHAbCp;

    /**
     * Taux h absence.
     *
     * @var float|null
     */
    private $tauxHAbsence;

    /**
     * Taux h normal.
     *
     * @var float|null
     */
    private $tauxHNormal;

    /**
     * Taux journalier.
     *
     * @var float|null
     */
    private $tauxJournalier;

    /**
     * Tot acompte.
     *
     * @var float|null
     */
    private $totAcompte;

    /**
     * Tot acompte cp.
     *
     * @var float|null
     */
    private $totAcompteCp;

    /**
     * Tot cotis patron.
     *
     * @var float|null
     */
    private $totCotisPatron;

    /**
     * Tot prime ni.
     *
     * @var float|null
     */
    private $totPrimeNi;

    /**
     * Tot prime ns.
     *
     * @var float|null
     */
    private $totPrimeNs;

    /**
     * Tot retenue.
     *
     * @var float|null
     */
    private $totRetenue;

    /**
     * Tr a caisse1.
     *
     * @var float|null
     */
    private $trACaisse1;

    /**
     * Tr a caisse2.
     *
     * @var float|null
     */
    private $trACaisse2;

    /**
     * Tr a caisse3.
     *
     * @var float|null
     */
    private $trACaisse3;

    /**
     * Tr b caisse1.
     *
     * @var float|null
     */
    private $trBCaisse1;

    /**
     * Tr b caisse2.
     *
     * @var float|null
     */
    private $trBCaisse2;

    /**
     * Tr b caisse3.
     *
     * @var float|null
     */
    private $trBCaisse3;

    /**
     * Tr c caisse1.
     *
     * @var float|null
     */
    private $trCCaisse1;

    /**
     * Tr c caisse2.
     *
     * @var float|null
     */
    private $trCCaisse2;

    /**
     * Tr c caisse3.
     *
     * @var float|null
     */
    private $trCCaisse3;

    /**
     * Tranche2.
     *
     * @var float|null
     */
    private $tranche2;

    /**
     * Tranche a.
     *
     * @var float|null
     */
    private $trancheA;

    /**
     * Tranche abal.
     *
     * @var float|null
     */
    private $trancheAbal;

    /**
     * Tranche abanl.
     *
     * @var float|null
     */
    private $trancheAbanl;

    /**
     * Tranche abna.
     *
     * @var float|null
     */
    private $trancheAbna;

    /**
     * Tranche b.
     *
     * @var float|null
     */
    private $trancheB;

    /**
     * Tranche bbal.
     *
     * @var float|null
     */
    private $trancheBbal;

    /**
     * Tranche bbanl.
     *
     * @var float|null
     */
    private $trancheBbanl;

    /**
     * Tranche bbna.
     *
     * @var float|null
     */
    private $trancheBbna;

    /**
     * Tranche c.
     *
     * @var float|null
     */
    private $trancheC;

    /**
     * Tranche c plaf.
     *
     * @var float|null
     */
    private $trancheCPlaf;

    /**
     * Tranche cbal.
     *
     * @var float|null
     */
    private $trancheCbal;

    /**
     * Tranche cbanl.
     *
     * @var float|null
     */
    private $trancheCbanl;

    /**
     * Tranche cbna.
     *
     * @var float|null
     */
    private $trancheCbna;

    /**
     * Txt note rtf.
     *
     * @var string|null
     */
    private $txtNoteRtf;

    /**
     * Type base caisse1.
     *
     * @var string|null
     */
    private $typeBaseCaisse1;

    /**
     * Type base caisse2.
     *
     * @var string|null
     */
    private $typeBaseCaisse2;

    /**
     * Type base caisse3.
     *
     * @var string|null
     */
    private $typeBaseCaisse3;

    /**
     * Type gestion bal.
     *
     * @var string|null
     */
    private $typeGestionBal;

    /**
     * Type paiement bul.
     *
     * @var string|null
     */
    private $typePaiementBul;

    /**
     * Type paiment modifie.
     *
     * @var bool|null
     */
    private $typePaimentModifie;

    /**
     * Type saisie abs.
     *
     * @var string|null
     */
    private $typeSaisieAbs;

    /**
     * Type saisie absence.
     *
     * @var string|null
     */
    private $typeSaisieAbsence;

    /**
     * Valorise cp.
     *
     * @var float|null
     */
    private $valoriseCp;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the abat theo.
     *
     * @return float|null Returns the abat theo.
     */
    public function getAbatTheo(): ?float {
        return $this->abatTheo;
    }

    /**
     * Get the abattement max.
     *
     * @return float|null Returns the abattement max.
     */
    public function getAbattementMax(): ?float {
        return $this->abattementMax;
    }

    /**
     * Get the allegement.
     *
     * @return float|null Returns the allegement.
     */
    public function getAllegement(): ?float {
        return $this->allegement;
    }

    /**
     * Get the allegement non proratise.
     *
     * @return float|null Returns the allegement non proratise.
     */
    public function getAllegementNonProratise(): ?float {
        return $this->allegementNonProratise;
    }

    /**
     * Get the avantage nature.
     *
     * @return float|null Returns the avantage nature.
     */
    public function getAvantageNature(): ?float {
        return $this->avantageNature;
    }

    /**
     * Get the base gmp.
     *
     * @return float|null Returns the base gmp.
     */
    public function getBaseGmp(): ?float {
        return $this->baseGmp;
    }

    /**
     * Get the base secu.
     *
     * @return float|null Returns the base secu.
     */
    public function getBaseSecu(): ?float {
        return $this->baseSecu;
    }

    /**
     * Get the base ss plaf modif.
     *
     * @return bool|null Returns the base ss plaf modif.
     */
    public function getBaseSsPlafModif(): ?bool {
        return $this->baseSsPlafModif;
    }

    /**
     * Get the borne per modifie.
     *
     * @return bool|null Returns the borne per modifie.
     */
    public function getBornePerModifie(): ?bool {
        return $this->bornePerModifie;
    }

    /**
     * Get the brut.
     *
     * @return float|null Returns the brut.
     */
    public function getBrut(): ?float {
        return $this->brut;
    }

    /**
     * Get the brut al.
     *
     * @return float|null Returns the brut al.
     */
    public function getBrutAl(): ?float {
        return $this->brutAl;
    }

    /**
     * Get the brut al limite smic.
     *
     * @return float|null Returns the brut al limite smic.
     */
    public function getBrutAlLimiteSmic(): ?float {
        return $this->brutAlLimiteSmic;
    }

    /**
     * Get the brut al modifie.
     *
     * @return bool|null Returns the brut al modifie.
     */
    public function getBrutAlModifie(): ?bool {
        return $this->brutAlModifie;
    }

    /**
     * Get the brut anl.
     *
     * @return float|null Returns the brut anl.
     */
    public function getBrutAnl(): ?float {
        return $this->brutAnl;
    }

    /**
     * Get the brut caisse1.
     *
     * @return float|null Returns the brut caisse1.
     */
    public function getBrutCaisse1(): ?float {
        return $this->brutCaisse1;
    }

    /**
     * Get the brut caisse2.
     *
     * @return float|null Returns the brut caisse2.
     */
    public function getBrutCaisse2(): ?float {
        return $this->brutCaisse2;
    }

    /**
     * Get the brut caisse3.
     *
     * @return float|null Returns the brut caisse3.
     */
    public function getBrutCaisse3(): ?float {
        return $this->brutCaisse3;
    }

    /**
     * Get the brut caisse cp.
     *
     * @return float|null Returns the brut caisse cp.
     */
    public function getBrutCaisseCp(): ?float {
        return $this->brutCaisseCp;
    }

    /**
     * Get the brut cp.
     *
     * @return float|null Returns the brut cp.
     */
    public function getBrutCp(): ?float {
        return $this->brutCp;
    }

    /**
     * Get the brut csg.
     *
     * @return float|null Returns the brut csg.
     */
    public function getBrutCsg(): ?float {
        return $this->brutCsg;
    }

    /**
     * Get the brut soumis abat.
     *
     * @return float|null Returns the brut soumis abat.
     */
    public function getBrutSoumisAbat(): ?float {
        return $this->brutSoumisAbat;
    }

    /**
     * Get the brut soumis crds.
     *
     * @return float|null Returns the brut soumis crds.
     */
    public function getBrutSoumisCrds(): ?float {
        return $this->brutSoumisCrds;
    }

    /**
     * Get the bulletin publie.
     *
     * @return bool|null Returns the bulletin publie.
     */
    public function getBulletinPublie(): ?bool {
        return $this->bulletinPublie;
    }

    /**
     * Get the categ tds.
     *
     * @return string|null Returns the categ tds.
     */
    public function getCategTds(): ?string {
        return $this->categTds;
    }

    /**
     * Get the cheque edite.
     *
     * @return bool|null Returns the cheque edite.
     */
    public function getChequeEdite(): ?bool {
        return $this->chequeEdite;
    }

    /**
     * Get the chom partiel coeff indem.
     *
     * @return float|null Returns the chom partiel coeff indem.
     */
    public function getChomPartielCoeffIndem(): ?float {
        return $this->chomPartielCoeffIndem;
    }

    /**
     * Get the chom partiel cp.
     *
     * @return float|null Returns the chom partiel cp.
     */
    public function getChomPartielCp(): ?float {
        return $this->chomPartielCp;
    }

    /**
     * Get the chom partiel min indem.
     *
     * @return float|null Returns the chom partiel min indem.
     */
    public function getChomPartielMinIndem(): ?float {
        return $this->chomPartielMinIndem;
    }

    /**
     * Get the code at per.
     *
     * @return int|null Returns the code at per.
     */
    public function getCodeAtPer(): ?int {
        return $this->codeAtPer;
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
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
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
     * Get the coeff intemperie.
     *
     * @return float|null Returns the coeff intemperie.
     */
    public function getCoeffIntemperie(): ?float {
        return $this->coeffIntemperie;
    }

    /**
     * Get the cont h sup repos comp.
     *
     * @return float|null Returns the cont h sup repos comp.
     */
    public function getContHSupReposComp(): ?float {
        return $this->contHSupReposComp;
    }

    /**
     * Get the cout global mois.
     *
     * @return float|null Returns the cout global mois.
     */
    public function getCoutGlobalMois(): ?float {
        return $this->coutGlobalMois;
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
     * Get the cum ant h sup.
     *
     * @return float|null Returns the cum ant h sup.
     */
    public function getCumAntHSup(): ?float {
        return $this->cumAntHSup;
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
     * Get the cum brut.
     *
     * @return float|null Returns the cum brut.
     */
    public function getCumBrut(): ?float {
        return $this->cumBrut;
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
     * Get the cum brut anl.
     *
     * @return float|null Returns the cum brut anl.
     */
    public function getCumBrutAnl(): ?float {
        return $this->cumBrutAnl;
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
     * Get the cum h repos comp.
     *
     * @return float|null Returns the cum h repos comp.
     */
    public function getCumHReposComp(): ?float {
        return $this->cumHReposComp;
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
     * Get the cum impos.
     *
     * @return float|null Returns the cum impos.
     */
    public function getCumImpos(): ?float {
        return $this->cumImpos;
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
     * Get the cum pss1.
     *
     * @return float|null Returns the cum pss1.
     */
    public function getCumPss1(): ?float {
        return $this->cumPss1;
    }

    /**
     * Get the cum pss2.
     *
     * @return float|null Returns the cum pss2.
     */
    public function getCumPss2(): ?float {
        return $this->cumPss2;
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
     * Get the cum tr a caisse1.
     *
     * @return float|null Returns the cum tr a caisse1.
     */
    public function getCumTrACaisse1(): ?float {
        return $this->cumTrACaisse1;
    }

    /**
     * Get the cum tr a caisse2.
     *
     * @return float|null Returns the cum tr a caisse2.
     */
    public function getCumTrACaisse2(): ?float {
        return $this->cumTrACaisse2;
    }

    /**
     * Get the cum tr a caisse3.
     *
     * @return float|null Returns the cum tr a caisse3.
     */
    public function getCumTrACaisse3(): ?float {
        return $this->cumTrACaisse3;
    }

    /**
     * Get the cum tr b caisse1.
     *
     * @return float|null Returns the cum tr b caisse1.
     */
    public function getCumTrBCaisse1(): ?float {
        return $this->cumTrBCaisse1;
    }

    /**
     * Get the cum tr b caisse2.
     *
     * @return float|null Returns the cum tr b caisse2.
     */
    public function getCumTrBCaisse2(): ?float {
        return $this->cumTrBCaisse2;
    }

    /**
     * Get the cum tr b caisse3.
     *
     * @return float|null Returns the cum tr b caisse3.
     */
    public function getCumTrBCaisse3(): ?float {
        return $this->cumTrBCaisse3;
    }

    /**
     * Get the cum tr c caisse1.
     *
     * @return float|null Returns the cum tr c caisse1.
     */
    public function getCumTrCCaisse1(): ?float {
        return $this->cumTrCCaisse1;
    }

    /**
     * Get the cum tr c caisse2.
     *
     * @return float|null Returns the cum tr c caisse2.
     */
    public function getCumTrCCaisse2(): ?float {
        return $this->cumTrCCaisse2;
    }

    /**
     * Get the cum tr c caisse3.
     *
     * @return float|null Returns the cum tr c caisse3.
     */
    public function getCumTrCCaisse3(): ?float {
        return $this->cumTrCCaisse3;
    }

    /**
     * Get the cum tranche2.
     *
     * @return float|null Returns the cum tranche2.
     */
    public function getCumTranche2(): ?float {
        return $this->cumTranche2;
    }

    /**
     * Get the cum tranche a.
     *
     * @return float|null Returns the cum tranche a.
     */
    public function getCumTrancheA(): ?float {
        return $this->cumTrancheA;
    }

    /**
     * Get the cum tranche b.
     *
     * @return float|null Returns the cum tranche b.
     */
    public function getCumTrancheB(): ?float {
        return $this->cumTrancheB;
    }

    /**
     * Get the cum tranche c.
     *
     * @return float|null Returns the cum tranche c.
     */
    public function getCumTrancheC(): ?float {
        return $this->cumTrancheC;
    }

    /**
     * Get the delta.
     *
     * @return float|null Returns the delta.
     */
    public function getDelta(): ?float {
        return $this->delta;
    }

    /**
     * Get the droit cp.
     *
     * @return float|null Returns the droit cp.
     */
    public function getDroitCp(): ?float {
        return $this->droitCp;
    }

    /**
     * Get the dt debut periode.
     *
     * @return DateTime|null Returns the dt debut periode.
     */
    public function getDtDebutPeriode(): ?DateTime {
        return $this->dtDebutPeriode;
    }

    /**
     * Get the dt fin periode.
     *
     * @return DateTime|null Returns the dt fin periode.
     */
    public function getDtFinPeriode(): ?DateTime {
        return $this->dtFinPeriode;
    }

    /**
     * Get the ecart cumule.
     *
     * @return float|null Returns the ecart cumule.
     */
    public function getEcartCumule(): ?float {
        return $this->ecartCumule;
    }

    /**
     * Get the etat bul.
     *
     * @return string|null Returns the etat bul.
     */
    public function getEtatBul(): ?string {
        return $this->etatBul;
    }

    /**
     * Get the etat edition.
     *
     * @return string|null Returns the etat edition.
     */
    public function getEtatEdition(): ?string {
        return $this->etatEdition;
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
     * Get the gest calc net paye.
     *
     * @return bool|null Returns the gest calc net paye.
     */
    public function getGestCalcNetPaye(): ?bool {
        return $this->gestCalcNetPaye;
    }

    /**
     * Get the gestion coeff.
     *
     * @return bool|null Returns the gestion coeff.
     */
    public function getGestionCoeff(): ?bool {
        return $this->gestionCoeff;
    }

    /**
     * Get the h reel trav.
     *
     * @return float|null Returns the h reel trav.
     */
    public function getHReelTrav(): ?float {
        return $this->hReelTrav;
    }

    /**
     * Get the h theo trav.
     *
     * @return float|null Returns the h theo trav.
     */
    public function getHTheoTrav(): ?float {
        return $this->hTheoTrav;
    }

    /**
     * Get the heure absence.
     *
     * @return float|null Returns the heure absence.
     */
    public function getHeureAbsence(): ?float {
        return $this->heureAbsence;
    }

    /**
     * Get the indice periode.
     *
     * @return int|null Returns the indice periode.
     */
    public function getIndicePeriode(): ?int {
        return $this->indicePeriode;
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
     * Get the lien document.
     *
     * @return string|null Returns the lien document.
     */
    public function getLienDocument(): ?string {
        return $this->lienDocument;
    }

    /**
     * Get the lien justificatif.
     *
     * @return string|null Returns the lien justificatif.
     */
    public function getLienJustificatif(): ?string {
        return $this->lienJustificatif;
    }

    /**
     * Get the max abat.
     *
     * @return float|null Returns the max abat.
     */
    public function getMaxAbat(): ?float {
        return $this->maxAbat;
    }

    /**
     * Get the mensuel journalier.
     *
     * @return bool|null Returns the mensuel journalier.
     */
    public function getMensuelJournalier(): ?bool {
        return $this->mensuelJournalier;
    }

    /**
     * Get the methode indem cp.
     *
     * @return string|null Returns the methode indem cp.
     */
    public function getMethodeIndemCp(): ?string {
        return $this->methodeIndemCp;
    }

    /**
     * Get the mig.
     *
     * @return float|null Returns the mig.
     */
    public function getMig(): ?float {
        return $this->mig;
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
     * Get the mt h sup bonif.
     *
     * @return float|null Returns the mt h sup bonif.
     */
    public function getMtHSupBonif(): ?float {
        return $this->mtHSupBonif;
    }

    /**
     * Get the mt i cp cp.
     *
     * @return float|null Returns the mt i cp cp.
     */
    public function getMtICpCp(): ?float {
        return $this->mtICpCp;
    }

    /**
     * Get the mt i cpt.
     *
     * @return float|null Returns the mt i cpt.
     */
    public function getMtICpt(): ?float {
        return $this->mtICpt;
    }

    /**
     * Get the mt i int.
     *
     * @return float|null Returns the mt i int.
     */
    public function getMtIInt(): ?float {
        return $this->mtIInt;
    }

    /**
     * Get the mt jcp arbitrage.
     *
     * @return bool|null Returns the mt jcp arbitrage.
     */
    public function getMtJcpArbitrage(): ?bool {
        return $this->mtJcpArbitrage;
    }

    /**
     * Get the mt journee cp.
     *
     * @return float|null Returns the mt journee cp.
     */
    public function getMtJourneeCp(): ?float {
        return $this->mtJourneeCp;
    }

    /**
     * Get the mt net paye theo.
     *
     * @return float|null Returns the mt net paye theo.
     */
    public function getMtNetPayeTheo(): ?float {
        return $this->mtNetPayeTheo;
    }

    /**
     * Get the mt taux lig sal base.
     *
     * @return float|null Returns the mt taux lig sal base.
     */
    public function getMtTauxLigSalBase(): ?float {
        return $this->mtTauxLigSalBase;
    }

    /**
     * Get the nb30.
     *
     * @return float|null Returns the nb30.
     */
    public function getNb30(): ?float {
        return $this->nb30;
    }

    /**
     * Get the nb h ab cp.
     *
     * @return float|null Returns the nb h ab cp.
     */
    public function getNbHAbCp(): ?float {
        return $this->nbHAbCp;
    }

    /**
     * Get the nb h absence intemp.
     *
     * @return float|null Returns the nb h absence intemp.
     */
    public function getNbHAbsenceIntemp(): ?float {
        return $this->nbHAbsenceIntemp;
    }

    /**
     * Get the nb h attente.
     *
     * @return float|null Returns the nb h attente.
     */
    public function getNbHAttente(): ?float {
        return $this->nbHAttente;
    }

    /**
     * Get the nb h bonifie dues.
     *
     * @return float|null Returns the nb h bonifie dues.
     */
    public function getNbHBonifieDues(): ?float {
        return $this->nbHBonifieDues;
    }

    /**
     * Get the nb h bonifie prises.
     *
     * @return float|null Returns the nb h bonifie prises.
     */
    public function getNbHBonifiePrises(): ?float {
        return $this->nbHBonifiePrises;
    }

    /**
     * Get the nb h carence intemp.
     *
     * @return float|null Returns the nb h carence intemp.
     */
    public function getNbHCarenceIntemp(): ?float {
        return $this->nbHCarenceIntemp;
    }

    /**
     * Get the nb h chom part cp.
     *
     * @return float|null Returns the nb h chom part cp.
     */
    public function getNbHChomPartCp(): ?float {
        return $this->nbHChomPartCp;
    }

    /**
     * Get the nb h chom part tech.
     *
     * @return float|null Returns the nb h chom part tech.
     */
    public function getNbHChomPartTech(): ?float {
        return $this->nbHChomPartTech;
    }

    /**
     * Get the nb h conduite.
     *
     * @return float|null Returns the nb h conduite.
     */
    public function getNbHConduite(): ?float {
        return $this->nbHConduite;
    }

    /**
     * Get the nb h conting.
     *
     * @return float|null Returns the nb h conting.
     */
    public function getNbHConting(): ?float {
        return $this->nbHConting;
    }

    /**
     * Get the nb h dble.
     *
     * @return float|null Returns the nb h dble.
     */
    public function getNbHDble(): ?float {
        return $this->nbHDble;
    }

    /**
     * Get the nb h dif dus.
     *
     * @return float|null Returns the nb h dif dus.
     */
    public function getNbHDifDus(): ?float {
        return $this->nbHDifDus;
    }

    /**
     * Get the nb h intemp indem.
     *
     * @return float|null Returns the nb h intemp indem.
     */
    public function getNbHIntempIndem(): ?float {
        return $this->nbHIntempIndem;
    }

    /**
     * Get the nb h lig sal base.
     *
     * @return float|null Returns the nb h lig sal base.
     */
    public function getNbHLigSalBase(): ?float {
        return $this->nbHLigSalBase;
    }

    /**
     * Get the nb h normal.
     *
     * @return float|null Returns the nb h normal.
     */
    public function getNbHNormal(): ?float {
        return $this->nbHNormal;
    }

    /**
     * Get the nb h pas droit fillon.
     *
     * @return float|null Returns the nb h pas droit fillon.
     */
    public function getNbHPasDroitFillon(): ?float {
        return $this->nbHPasDroitFillon;
    }

    /**
     * Get the nb h remplace.
     *
     * @return float|null Returns the nb h remplace.
     */
    public function getNbHRemplace(): ?float {
        return $this->nbHRemplace;
    }

    /**
     * Get the nb h repo comp dues.
     *
     * @return float|null Returns the nb h repo comp dues.
     */
    public function getNbHRepoCompDues(): ?float {
        return $this->nbHRepoCompDues;
    }

    /**
     * Get the nb h repo comp prises.
     *
     * @return float|null Returns the nb h repo comp prises.
     */
    public function getNbHRepoCompPrises(): ?float {
        return $this->nbHRepoCompPrises;
    }

    /**
     * Get the nb h repo r dues.
     *
     * @return float|null Returns the nb h repo r dues.
     */
    public function getNbHRepoRDues(): ?float {
        return $this->nbHRepoRDues;
    }

    /**
     * Get the nb h repo r prises.
     *
     * @return float|null Returns the nb h repo r prises.
     */
    public function getNbHRepoRPrises(): ?float {
        return $this->nbHRepoRPrises;
    }

    /**
     * Get the nb h sup1.
     *
     * @return float|null Returns the nb h sup1.
     */
    public function getNbHSup1(): ?float {
        return $this->nbHSup1;
    }

    /**
     * Get the nb h sup2.
     *
     * @return float|null Returns the nb h sup2.
     */
    public function getNbHSup2(): ?float {
        return $this->nbHSup2;
    }

    /**
     * Get the nb h sup3.
     *
     * @return float|null Returns the nb h sup3.
     */
    public function getNbHSup3(): ?float {
        return $this->nbHSup3;
    }

    /**
     * Get the nb h sup4.
     *
     * @return float|null Returns the nb h sup4.
     */
    public function getNbHSup4(): ?float {
        return $this->nbHSup4;
    }

    /**
     * Get the nb h sup5.
     *
     * @return float|null Returns the nb h sup5.
     */
    public function getNbHSup5(): ?float {
        return $this->nbHSup5;
    }

    /**
     * Get the nb h sup bonif.
     *
     * @return float|null Returns the nb h sup bonif.
     */
    public function getNbHSupBonif(): ?float {
        return $this->nbHSupBonif;
    }

    /**
     * Get the nb h sup bonif abs.
     *
     * @return float|null Returns the nb h sup bonif abs.
     */
    public function getNbHSupBonifAbs(): ?float {
        return $this->nbHSupBonifAbs;
    }

    /**
     * Get the nb h trav.
     *
     * @return float|null Returns the nb h trav.
     */
    public function getNbHTrav(): ?float {
        return $this->nbHTrav;
    }

    /**
     * Get the nb h travail.
     *
     * @return float|null Returns the nb h travail.
     */
    public function getNbHTravail(): ?float {
        return $this->nbHTravail;
    }

    /**
     * Get the nb heure paye.
     *
     * @return float|null Returns the nb heure paye.
     */
    public function getNbHeurePaye(): ?float {
        return $this->nbHeurePaye;
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
     * Get the nb heure trav mois.
     *
     * @return float|null Returns the nb heure trav mois.
     */
    public function getNbHeureTravMois(): ?float {
        return $this->nbHeureTravMois;
    }

    /**
     * Get the nb j chom part cp.
     *
     * @return float|null Returns the nb j chom part cp.
     */
    public function getNbJChomPartCp(): ?float {
        return $this->nbJChomPartCp;
    }

    /**
     * Get the nb j dus.
     *
     * @return float|null Returns the nb j dus.
     */
    public function getNbJDus(): ?float {
        return $this->nbJDus;
    }

    /**
     * Get the nb j dus1.
     *
     * @return float|null Returns the nb j dus1.
     */
    public function getNbJDus1(): ?float {
        return $this->nbJDus1;
    }

    /**
     * Get the nb j pris.
     *
     * @return float|null Returns the nb j pris.
     */
    public function getNbJPris(): ?float {
        return $this->nbJPris;
    }

    /**
     * Get the nb j pris1.
     *
     * @return float|null Returns the nb j pris1.
     */
    public function getNbJPris1(): ?float {
        return $this->nbJPris1;
    }

    /**
     * Get the nb j repo recup dus.
     *
     * @return float|null Returns the nb j repo recup dus.
     */
    public function getNbJRepoRecupDus(): ?float {
        return $this->nbJRepoRecupDus;
    }

    /**
     * Get the nb j repo recup pris.
     *
     * @return float|null Returns the nb j repo recup pris.
     */
    public function getNbJRepoRecupPris(): ?float {
        return $this->nbJRepoRecupPris;
    }

    /**
     * Get the nb j trav force.
     *
     * @return bool|null Returns the nb j trav force.
     */
    public function getNbJTravForce(): ?bool {
        return $this->nbJTravForce;
    }

    /**
     * Get the nb j trav mois es.
     *
     * @return int|null Returns the nb j trav mois es.
     */
    public function getNbJTravMoisEs(): ?int {
        return $this->nbJTravMoisEs;
    }

    /**
     * Get the nb jour base.
     *
     * @return float|null Returns the nb jour base.
     */
    public function getNbJourBase(): ?float {
        return $this->nbJourBase;
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
     * Get the nb jour cp acquis.
     *
     * @return float|null Returns the nb jour cp acquis.
     */
    public function getNbJourCpAcquis(): ?float {
        return $this->nbJourCpAcquis;
    }

    /**
     * Get the nb jour cp pris.
     *
     * @return float|null Returns the nb jour cp pris.
     */
    public function getNbJourCpPris(): ?float {
        return $this->nbJourCpPris;
    }

    /**
     * Get the nb jour normaux.
     *
     * @return float|null Returns the nb jour normaux.
     */
    public function getNbJourNormaux(): ?float {
        return $this->nbJourNormaux;
    }

    /**
     * Get the nb jour trav.
     *
     * @return float|null Returns the nb jour trav.
     */
    public function getNbJourTrav(): ?float {
        return $this->nbJourTrav;
    }

    /**
     * Get the nb jrtt dus.
     *
     * @return float|null Returns the nb jrtt dus.
     */
    public function getNbJrttDus(): ?float {
        return $this->nbJrttDus;
    }

    /**
     * Get the nb jrtt pris.
     *
     * @return float|null Returns the nb jrtt pris.
     */
    public function getNbJrttPris(): ?float {
        return $this->nbJrttPris;
    }

    /**
     * Get the net a payer.
     *
     * @return float|null Returns the net a payer.
     */
    public function getNetAPayer(): ?float {
        return $this->netAPayer;
    }

    /**
     * Get the net impos.
     *
     * @return float|null Returns the net impos.
     */
    public function getNetImpos(): ?float {
        return $this->netImpos;
    }

    /**
     * Get the note1.
     *
     * @return string|null Returns the note1.
     */
    public function getNote1(): ?string {
        return $this->note1;
    }

    /**
     * Get the note2.
     *
     * @return string|null Returns the note2.
     */
    public function getNote2(): ?string {
        return $this->note2;
    }

    /**
     * Get the note3.
     *
     * @return string|null Returns the note3.
     */
    public function getNote3(): ?string {
        return $this->note3;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the paie euro.
     *
     * @return bool|null Returns the paie euro.
     */
    public function getPaieEuro(): ?bool {
        return $this->paieEuro;
    }

    /**
     * Get the paiement cp non pris.
     *
     * @return bool|null Returns the paiement cp non pris.
     */
    public function getPaiementCpNonPris(): ?bool {
        return $this->paiementCpNonPris;
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
     * Get the periodicite.
     *
     * @return string|null Returns the periodicite.
     */
    public function getPeriodicite(): ?string {
        return $this->periodicite;
    }

    /**
     * Get the periodicite modifie.
     *
     * @return bool|null Returns the periodicite modifie.
     */
    public function getPeriodiciteModifie(): ?bool {
        return $this->periodiciteModifie;
    }

    /**
     * Get the plafond1 caisse1.
     *
     * @return float|null Returns the plafond1 caisse1.
     */
    public function getPlafond1Caisse1(): ?float {
        return $this->plafond1Caisse1;
    }

    /**
     * Get the plafond1 caisse2.
     *
     * @return float|null Returns the plafond1 caisse2.
     */
    public function getPlafond1Caisse2(): ?float {
        return $this->plafond1Caisse2;
    }

    /**
     * Get the plafond1 caisse3.
     *
     * @return float|null Returns the plafond1 caisse3.
     */
    public function getPlafond1Caisse3(): ?float {
        return $this->plafond1Caisse3;
    }

    /**
     * Get the plafond2 caisse1.
     *
     * @return float|null Returns the plafond2 caisse1.
     */
    public function getPlafond2Caisse1(): ?float {
        return $this->plafond2Caisse1;
    }

    /**
     * Get the plafond2 caisse2.
     *
     * @return float|null Returns the plafond2 caisse2.
     */
    public function getPlafond2Caisse2(): ?float {
        return $this->plafond2Caisse2;
    }

    /**
     * Get the plafond2 caisse3.
     *
     * @return float|null Returns the plafond2 caisse3.
     */
    public function getPlafond2Caisse3(): ?float {
        return $this->plafond2Caisse3;
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
     * Get the plafond gmp modifie.
     *
     * @return bool|null Returns the plafond gmp modifie.
     */
    public function getPlafondGmpModifie(): ?bool {
        return $this->plafondGmpModifie;
    }

    /**
     * Get the plafond heure.
     *
     * @return float|null Returns the plafond heure.
     */
    public function getPlafondHeure(): ?float {
        return $this->plafondHeure;
    }

    /**
     * Get the plafond jour.
     *
     * @return float|null Returns the plafond jour.
     */
    public function getPlafondJour(): ?float {
        return $this->plafondJour;
    }

    /**
     * Get the plafond semaine.
     *
     * @return float|null Returns the plafond semaine.
     */
    public function getPlafondSemaine(): ?float {
        return $this->plafondSemaine;
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
     * Get the pourcent act force.
     *
     * @return int|null Returns the pourcent act force.
     */
    public function getPourcentActForce(): ?int {
        return $this->pourcentActForce;
    }

    /**
     * Get the pourcent activite.
     *
     * @return float|null Returns the pourcent activite.
     */
    public function getPourcentActivite(): ?float {
        return $this->pourcentActivite;
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
     * Get the pp soumis taxe.
     *
     * @return float|null Returns the pp soumis taxe.
     */
    public function getPpSoumisTaxe(): ?float {
        return $this->ppSoumisTaxe;
    }

    /**
     * Get the prov cp.
     *
     * @return float|null Returns the prov cp.
     */
    public function getProvCp(): ?float {
        return $this->provCp;
    }

    /**
     * Get the prov cp1.
     *
     * @return float|null Returns the prov cp1.
     */
    public function getProvCp1(): ?float {
        return $this->provCp1;
    }

    /**
     * Get the pss1.
     *
     * @return float|null Returns the pss1.
     */
    public function getPss1(): ?float {
        return $this->pss1;
    }

    /**
     * Get the pss2.
     *
     * @return float|null Returns the pss2.
     */
    public function getPss2(): ?float {
        return $this->pss2;
    }

    /**
     * Get the pss30.
     *
     * @return bool|null Returns the pss30.
     */
    public function getPss30(): ?bool {
        return $this->pss30;
    }

    /**
     * Get the pss mod.
     *
     * @return bool|null Returns the pss mod.
     */
    public function getPssMod(): ?bool {
        return $this->pssMod;
    }

    /**
     * Get the remun mens.
     *
     * @return float|null Returns the remun mens.
     */
    public function getRemunMens(): ?float {
        return $this->remunMens;
    }

    /**
     * Get the s base.
     *
     * @return float|null Returns the s base.
     */
    public function getSBase(): ?float {
        return $this->sBase;
    }

    /**
     * Get the smic1.
     *
     * @return float|null Returns the smic1.
     */
    public function getSmic1(): ?float {
        return $this->smic1;
    }

    /**
     * Get the smic h.
     *
     * @return float|null Returns the smic h.
     */
    public function getSmicH(): ?float {
        return $this->smicH;
    }

    /**
     * Get the smic h35.
     *
     * @return float|null Returns the smic h35.
     */
    public function getSmicH35(): ?float {
        return $this->smicH35;
    }

    /**
     * Get the smic h39.
     *
     * @return float|null Returns the smic h39.
     */
    public function getSmicH39(): ?float {
        return $this->smicH39;
    }

    /**
     * Get the smic m.
     *
     * @return float|null Returns the smic m.
     */
    public function getSmicM(): ?float {
        return $this->smicM;
    }

    /**
     * Get the smic m35.
     *
     * @return float|null Returns the smic m35.
     */
    public function getSmicM35(): ?float {
        return $this->smicM35;
    }

    /**
     * Get the smic m39.
     *
     * @return float|null Returns the smic m39.
     */
    public function getSmicM39(): ?float {
        return $this->smicM39;
    }

    /**
     * Get the sortie mois.
     *
     * @return bool|null Returns the sortie mois.
     */
    public function getSortieMois(): ?bool {
        return $this->sortieMois;
    }

    /**
     * Get the taux h ab cp.
     *
     * @return float|null Returns the taux h ab cp.
     */
    public function getTauxHAbCp(): ?float {
        return $this->tauxHAbCp;
    }

    /**
     * Get the taux h absence.
     *
     * @return float|null Returns the taux h absence.
     */
    public function getTauxHAbsence(): ?float {
        return $this->tauxHAbsence;
    }

    /**
     * Get the taux h normal.
     *
     * @return float|null Returns the taux h normal.
     */
    public function getTauxHNormal(): ?float {
        return $this->tauxHNormal;
    }

    /**
     * Get the taux journalier.
     *
     * @return float|null Returns the taux journalier.
     */
    public function getTauxJournalier(): ?float {
        return $this->tauxJournalier;
    }

    /**
     * Get the tot acompte.
     *
     * @return float|null Returns the tot acompte.
     */
    public function getTotAcompte(): ?float {
        return $this->totAcompte;
    }

    /**
     * Get the tot acompte cp.
     *
     * @return float|null Returns the tot acompte cp.
     */
    public function getTotAcompteCp(): ?float {
        return $this->totAcompteCp;
    }

    /**
     * Get the tot cotis patron.
     *
     * @return float|null Returns the tot cotis patron.
     */
    public function getTotCotisPatron(): ?float {
        return $this->totCotisPatron;
    }

    /**
     * Get the tot prime ni.
     *
     * @return float|null Returns the tot prime ni.
     */
    public function getTotPrimeNi(): ?float {
        return $this->totPrimeNi;
    }

    /**
     * Get the tot prime ns.
     *
     * @return float|null Returns the tot prime ns.
     */
    public function getTotPrimeNs(): ?float {
        return $this->totPrimeNs;
    }

    /**
     * Get the tot retenue.
     *
     * @return float|null Returns the tot retenue.
     */
    public function getTotRetenue(): ?float {
        return $this->totRetenue;
    }

    /**
     * Get the tr a caisse1.
     *
     * @return float|null Returns the tr a caisse1.
     */
    public function getTrACaisse1(): ?float {
        return $this->trACaisse1;
    }

    /**
     * Get the tr a caisse2.
     *
     * @return float|null Returns the tr a caisse2.
     */
    public function getTrACaisse2(): ?float {
        return $this->trACaisse2;
    }

    /**
     * Get the tr a caisse3.
     *
     * @return float|null Returns the tr a caisse3.
     */
    public function getTrACaisse3(): ?float {
        return $this->trACaisse3;
    }

    /**
     * Get the tr b caisse1.
     *
     * @return float|null Returns the tr b caisse1.
     */
    public function getTrBCaisse1(): ?float {
        return $this->trBCaisse1;
    }

    /**
     * Get the tr b caisse2.
     *
     * @return float|null Returns the tr b caisse2.
     */
    public function getTrBCaisse2(): ?float {
        return $this->trBCaisse2;
    }

    /**
     * Get the tr b caisse3.
     *
     * @return float|null Returns the tr b caisse3.
     */
    public function getTrBCaisse3(): ?float {
        return $this->trBCaisse3;
    }

    /**
     * Get the tr c caisse1.
     *
     * @return float|null Returns the tr c caisse1.
     */
    public function getTrCCaisse1(): ?float {
        return $this->trCCaisse1;
    }

    /**
     * Get the tr c caisse2.
     *
     * @return float|null Returns the tr c caisse2.
     */
    public function getTrCCaisse2(): ?float {
        return $this->trCCaisse2;
    }

    /**
     * Get the tr c caisse3.
     *
     * @return float|null Returns the tr c caisse3.
     */
    public function getTrCCaisse3(): ?float {
        return $this->trCCaisse3;
    }

    /**
     * Get the tranche2.
     *
     * @return float|null Returns the tranche2.
     */
    public function getTranche2(): ?float {
        return $this->tranche2;
    }

    /**
     * Get the tranche a.
     *
     * @return float|null Returns the tranche a.
     */
    public function getTrancheA(): ?float {
        return $this->trancheA;
    }

    /**
     * Get the tranche abal.
     *
     * @return float|null Returns the tranche abal.
     */
    public function getTrancheAbal(): ?float {
        return $this->trancheAbal;
    }

    /**
     * Get the tranche abanl.
     *
     * @return float|null Returns the tranche abanl.
     */
    public function getTrancheAbanl(): ?float {
        return $this->trancheAbanl;
    }

    /**
     * Get the tranche abna.
     *
     * @return float|null Returns the tranche abna.
     */
    public function getTrancheAbna(): ?float {
        return $this->trancheAbna;
    }

    /**
     * Get the tranche b.
     *
     * @return float|null Returns the tranche b.
     */
    public function getTrancheB(): ?float {
        return $this->trancheB;
    }

    /**
     * Get the tranche bbal.
     *
     * @return float|null Returns the tranche bbal.
     */
    public function getTrancheBbal(): ?float {
        return $this->trancheBbal;
    }

    /**
     * Get the tranche bbanl.
     *
     * @return float|null Returns the tranche bbanl.
     */
    public function getTrancheBbanl(): ?float {
        return $this->trancheBbanl;
    }

    /**
     * Get the tranche bbna.
     *
     * @return float|null Returns the tranche bbna.
     */
    public function getTrancheBbna(): ?float {
        return $this->trancheBbna;
    }

    /**
     * Get the tranche c.
     *
     * @return float|null Returns the tranche c.
     */
    public function getTrancheC(): ?float {
        return $this->trancheC;
    }

    /**
     * Get the tranche c plaf.
     *
     * @return float|null Returns the tranche c plaf.
     */
    public function getTrancheCPlaf(): ?float {
        return $this->trancheCPlaf;
    }

    /**
     * Get the tranche cbal.
     *
     * @return float|null Returns the tranche cbal.
     */
    public function getTrancheCbal(): ?float {
        return $this->trancheCbal;
    }

    /**
     * Get the tranche cbanl.
     *
     * @return float|null Returns the tranche cbanl.
     */
    public function getTrancheCbanl(): ?float {
        return $this->trancheCbanl;
    }

    /**
     * Get the tranche cbna.
     *
     * @return float|null Returns the tranche cbna.
     */
    public function getTrancheCbna(): ?float {
        return $this->trancheCbna;
    }

    /**
     * Get the txt note rtf.
     *
     * @return string|null Returns the txt note rtf.
     */
    public function getTxtNoteRtf(): ?string {
        return $this->txtNoteRtf;
    }

    /**
     * Get the type base caisse1.
     *
     * @return string|null Returns the type base caisse1.
     */
    public function getTypeBaseCaisse1(): ?string {
        return $this->typeBaseCaisse1;
    }

    /**
     * Get the type base caisse2.
     *
     * @return string|null Returns the type base caisse2.
     */
    public function getTypeBaseCaisse2(): ?string {
        return $this->typeBaseCaisse2;
    }

    /**
     * Get the type base caisse3.
     *
     * @return string|null Returns the type base caisse3.
     */
    public function getTypeBaseCaisse3(): ?string {
        return $this->typeBaseCaisse3;
    }

    /**
     * Get the type gestion bal.
     *
     * @return string|null Returns the type gestion bal.
     */
    public function getTypeGestionBal(): ?string {
        return $this->typeGestionBal;
    }

    /**
     * Get the type paiement bul.
     *
     * @return string|null Returns the type paiement bul.
     */
    public function getTypePaiementBul(): ?string {
        return $this->typePaiementBul;
    }

    /**
     * Get the type paiment modifie.
     *
     * @return bool|null Returns the type paiment modifie.
     */
    public function getTypePaimentModifie(): ?bool {
        return $this->typePaimentModifie;
    }

    /**
     * Get the type saisie abs.
     *
     * @return string|null Returns the type saisie abs.
     */
    public function getTypeSaisieAbs(): ?string {
        return $this->typeSaisieAbs;
    }

    /**
     * Get the type saisie absence.
     *
     * @return string|null Returns the type saisie absence.
     */
    public function getTypeSaisieAbsence(): ?string {
        return $this->typeSaisieAbsence;
    }

    /**
     * Get the valorise cp.
     *
     * @return float|null Returns the valorise cp.
     */
    public function getValoriseCp(): ?float {
        return $this->valoriseCp;
    }

    /**
     * Set the abat theo.
     *
     * @param float|null $abatTheo The abat theo.
     * @return Bulletins Returns this Bulletins.
     */
    public function setAbatTheo(?float $abatTheo): Bulletins {
        $this->abatTheo = $abatTheo;
        return $this;
    }

    /**
     * Set the abattement max.
     *
     * @param float|null $abattementMax The abattement max.
     * @return Bulletins Returns this Bulletins.
     */
    public function setAbattementMax(?float $abattementMax): Bulletins {
        $this->abattementMax = $abattementMax;
        return $this;
    }

    /**
     * Set the allegement.
     *
     * @param float|null $allegement The allegement.
     * @return Bulletins Returns this Bulletins.
     */
    public function setAllegement(?float $allegement): Bulletins {
        $this->allegement = $allegement;
        return $this;
    }

    /**
     * Set the allegement non proratise.
     *
     * @param float|null $allegementNonProratise The allegement non proratise.
     * @return Bulletins Returns this Bulletins.
     */
    public function setAllegementNonProratise(?float $allegementNonProratise): Bulletins {
        $this->allegementNonProratise = $allegementNonProratise;
        return $this;
    }

    /**
     * Set the avantage nature.
     *
     * @param float|null $avantageNature The avantage nature.
     * @return Bulletins Returns this Bulletins.
     */
    public function setAvantageNature(?float $avantageNature): Bulletins {
        $this->avantageNature = $avantageNature;
        return $this;
    }

    /**
     * Set the base gmp.
     *
     * @param float|null $baseGmp The base gmp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBaseGmp(?float $baseGmp): Bulletins {
        $this->baseGmp = $baseGmp;
        return $this;
    }

    /**
     * Set the base secu.
     *
     * @param float|null $baseSecu The base secu.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBaseSecu(?float $baseSecu): Bulletins {
        $this->baseSecu = $baseSecu;
        return $this;
    }

    /**
     * Set the base ss plaf modif.
     *
     * @param bool|null $baseSsPlafModif The base ss plaf modif.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBaseSsPlafModif(?bool $baseSsPlafModif): Bulletins {
        $this->baseSsPlafModif = $baseSsPlafModif;
        return $this;
    }

    /**
     * Set the borne per modifie.
     *
     * @param bool|null $bornePerModifie The borne per modifie.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBornePerModifie(?bool $bornePerModifie): Bulletins {
        $this->bornePerModifie = $bornePerModifie;
        return $this;
    }

    /**
     * Set the brut.
     *
     * @param float|null $brut The brut.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrut(?float $brut): Bulletins {
        $this->brut = $brut;
        return $this;
    }

    /**
     * Set the brut al.
     *
     * @param float|null $brutAl The brut al.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrutAl(?float $brutAl): Bulletins {
        $this->brutAl = $brutAl;
        return $this;
    }

    /**
     * Set the brut al limite smic.
     *
     * @param float|null $brutAlLimiteSmic The brut al limite smic.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrutAlLimiteSmic(?float $brutAlLimiteSmic): Bulletins {
        $this->brutAlLimiteSmic = $brutAlLimiteSmic;
        return $this;
    }

    /**
     * Set the brut al modifie.
     *
     * @param bool|null $brutAlModifie The brut al modifie.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrutAlModifie(?bool $brutAlModifie): Bulletins {
        $this->brutAlModifie = $brutAlModifie;
        return $this;
    }

    /**
     * Set the brut anl.
     *
     * @param float|null $brutAnl The brut anl.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrutAnl(?float $brutAnl): Bulletins {
        $this->brutAnl = $brutAnl;
        return $this;
    }

    /**
     * Set the brut caisse1.
     *
     * @param float|null $brutCaisse1 The brut caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrutCaisse1(?float $brutCaisse1): Bulletins {
        $this->brutCaisse1 = $brutCaisse1;
        return $this;
    }

    /**
     * Set the brut caisse2.
     *
     * @param float|null $brutCaisse2 The brut caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrutCaisse2(?float $brutCaisse2): Bulletins {
        $this->brutCaisse2 = $brutCaisse2;
        return $this;
    }

    /**
     * Set the brut caisse3.
     *
     * @param float|null $brutCaisse3 The brut caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrutCaisse3(?float $brutCaisse3): Bulletins {
        $this->brutCaisse3 = $brutCaisse3;
        return $this;
    }

    /**
     * Set the brut caisse cp.
     *
     * @param float|null $brutCaisseCp The brut caisse cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrutCaisseCp(?float $brutCaisseCp): Bulletins {
        $this->brutCaisseCp = $brutCaisseCp;
        return $this;
    }

    /**
     * Set the brut cp.
     *
     * @param float|null $brutCp The brut cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrutCp(?float $brutCp): Bulletins {
        $this->brutCp = $brutCp;
        return $this;
    }

    /**
     * Set the brut csg.
     *
     * @param float|null $brutCsg The brut csg.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrutCsg(?float $brutCsg): Bulletins {
        $this->brutCsg = $brutCsg;
        return $this;
    }

    /**
     * Set the brut soumis abat.
     *
     * @param float|null $brutSoumisAbat The brut soumis abat.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrutSoumisAbat(?float $brutSoumisAbat): Bulletins {
        $this->brutSoumisAbat = $brutSoumisAbat;
        return $this;
    }

    /**
     * Set the brut soumis crds.
     *
     * @param float|null $brutSoumisCrds The brut soumis crds.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBrutSoumisCrds(?float $brutSoumisCrds): Bulletins {
        $this->brutSoumisCrds = $brutSoumisCrds;
        return $this;
    }

    /**
     * Set the bulletin publie.
     *
     * @param bool|null $bulletinPublie The bulletin publie.
     * @return Bulletins Returns this Bulletins.
     */
    public function setBulletinPublie(?bool $bulletinPublie): Bulletins {
        $this->bulletinPublie = $bulletinPublie;
        return $this;
    }

    /**
     * Set the categ tds.
     *
     * @param string|null $categTds The categ tds.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCategTds(?string $categTds): Bulletins {
        $this->categTds = $categTds;
        return $this;
    }

    /**
     * Set the cheque edite.
     *
     * @param bool|null $chequeEdite The cheque edite.
     * @return Bulletins Returns this Bulletins.
     */
    public function setChequeEdite(?bool $chequeEdite): Bulletins {
        $this->chequeEdite = $chequeEdite;
        return $this;
    }

    /**
     * Set the chom partiel coeff indem.
     *
     * @param float|null $chomPartielCoeffIndem The chom partiel coeff indem.
     * @return Bulletins Returns this Bulletins.
     */
    public function setChomPartielCoeffIndem(?float $chomPartielCoeffIndem): Bulletins {
        $this->chomPartielCoeffIndem = $chomPartielCoeffIndem;
        return $this;
    }

    /**
     * Set the chom partiel cp.
     *
     * @param float|null $chomPartielCp The chom partiel cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setChomPartielCp(?float $chomPartielCp): Bulletins {
        $this->chomPartielCp = $chomPartielCp;
        return $this;
    }

    /**
     * Set the chom partiel min indem.
     *
     * @param float|null $chomPartielMinIndem The chom partiel min indem.
     * @return Bulletins Returns this Bulletins.
     */
    public function setChomPartielMinIndem(?float $chomPartielMinIndem): Bulletins {
        $this->chomPartielMinIndem = $chomPartielMinIndem;
        return $this;
    }

    /**
     * Set the code at per.
     *
     * @param int|null $codeAtPer The code at per.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCodeAtPer(?int $codeAtPer): Bulletins {
        $this->codeAtPer = $codeAtPer;
        return $this;
    }

    /**
     * Set the code centre urssaf.
     *
     * @param string|null $codeCentreUrssaf The code centre urssaf.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCodeCentreUrssaf(?string $codeCentreUrssaf): Bulletins {
        $this->codeCentreUrssaf = $codeCentreUrssaf;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCodeEtablissement(?int $codeEtablissement): Bulletins {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code type sal.
     *
     * @param string|null $codeTypeSal The code type sal.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCodeTypeSal(?string $codeTypeSal): Bulletins {
        $this->codeTypeSal = $codeTypeSal;
        return $this;
    }

    /**
     * Set the coeff intemperie.
     *
     * @param float|null $coeffIntemperie The coeff intemperie.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCoeffIntemperie(?float $coeffIntemperie): Bulletins {
        $this->coeffIntemperie = $coeffIntemperie;
        return $this;
    }

    /**
     * Set the cont h sup repos comp.
     *
     * @param float|null $contHSupReposComp The cont h sup repos comp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setContHSupReposComp(?float $contHSupReposComp): Bulletins {
        $this->contHSupReposComp = $contHSupReposComp;
        return $this;
    }

    /**
     * Set the cout global mois.
     *
     * @param float|null $coutGlobalMois The cout global mois.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCoutGlobalMois(?float $coutGlobalMois): Bulletins {
        $this->coutGlobalMois = $coutGlobalMois;
        return $this;
    }

    /**
     * Set the cum30 ss.
     *
     * @param float|null $cum30Ss The cum30 ss.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCum30Ss(?float $cum30Ss): Bulletins {
        $this->cum30Ss = $cum30Ss;
        return $this;
    }

    /**
     * Set the cum ant h sup.
     *
     * @param float|null $cumAntHSup The cum ant h sup.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumAntHSup(?float $cumAntHSup): Bulletins {
        $this->cumAntHSup = $cumAntHSup;
        return $this;
    }

    /**
     * Set the cum base gmp.
     *
     * @param float|null $cumBaseGmp The cum base gmp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumBaseGmp(?float $cumBaseGmp): Bulletins {
        $this->cumBaseGmp = $cumBaseGmp;
        return $this;
    }

    /**
     * Set the cum base ss.
     *
     * @param float|null $cumBaseSs The cum base ss.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumBaseSs(?float $cumBaseSs): Bulletins {
        $this->cumBaseSs = $cumBaseSs;
        return $this;
    }

    /**
     * Set the cum brut.
     *
     * @param float|null $cumBrut The cum brut.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumBrut(?float $cumBrut): Bulletins {
        $this->cumBrut = $cumBrut;
        return $this;
    }

    /**
     * Set the cum brut al.
     *
     * @param float|null $cumBrutAl The cum brut al.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumBrutAl(?float $cumBrutAl): Bulletins {
        $this->cumBrutAl = $cumBrutAl;
        return $this;
    }

    /**
     * Set the cum brut anl.
     *
     * @param float|null $cumBrutAnl The cum brut anl.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumBrutAnl(?float $cumBrutAnl): Bulletins {
        $this->cumBrutAnl = $cumBrutAnl;
        return $this;
    }

    /**
     * Set the cum brut caisse1.
     *
     * @param float|null $cumBrutCaisse1 The cum brut caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumBrutCaisse1(?float $cumBrutCaisse1): Bulletins {
        $this->cumBrutCaisse1 = $cumBrutCaisse1;
        return $this;
    }

    /**
     * Set the cum brut caisse2.
     *
     * @param float|null $cumBrutCaisse2 The cum brut caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumBrutCaisse2(?float $cumBrutCaisse2): Bulletins {
        $this->cumBrutCaisse2 = $cumBrutCaisse2;
        return $this;
    }

    /**
     * Set the cum brut caisse3.
     *
     * @param float|null $cumBrutCaisse3 The cum brut caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumBrutCaisse3(?float $cumBrutCaisse3): Bulletins {
        $this->cumBrutCaisse3 = $cumBrutCaisse3;
        return $this;
    }

    /**
     * Set the cum dif dus.
     *
     * @param float|null $cumDifDus The cum dif dus.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumDifDus(?float $cumDifDus): Bulletins {
        $this->cumDifDus = $cumDifDus;
        return $this;
    }

    /**
     * Set the cum dif dus1.
     *
     * @param float|null $cumDifDus1 The cum dif dus1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumDifDus1(?float $cumDifDus1): Bulletins {
        $this->cumDifDus1 = $cumDifDus1;
        return $this;
    }

    /**
     * Set the cum h bonifie.
     *
     * @param float|null $cumHBonifie The cum h bonifie.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumHBonifie(?float $cumHBonifie): Bulletins {
        $this->cumHBonifie = $cumHBonifie;
        return $this;
    }

    /**
     * Set the cum h repos comp.
     *
     * @param float|null $cumHReposComp The cum h repos comp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumHReposComp(?float $cumHReposComp): Bulletins {
        $this->cumHReposComp = $cumHReposComp;
        return $this;
    }

    /**
     * Set the cum h repos remplace.
     *
     * @param float|null $cumHReposRemplace The cum h repos remplace.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumHReposRemplace(?float $cumHReposRemplace): Bulletins {
        $this->cumHReposRemplace = $cumHReposRemplace;
        return $this;
    }

    /**
     * Set the cum h service.
     *
     * @param float|null $cumHService The cum h service.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumHService(?float $cumHService): Bulletins {
        $this->cumHService = $cumHService;
        return $this;
    }

    /**
     * Set the cum impos.
     *
     * @param float|null $cumImpos The cum impos.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumImpos(?float $cumImpos): Bulletins {
        $this->cumImpos = $cumImpos;
        return $this;
    }

    /**
     * Set the cum j repos recup.
     *
     * @param float|null $cumJReposRecup The cum j repos recup.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumJReposRecup(?float $cumJReposRecup): Bulletins {
        $this->cumJReposRecup = $cumJReposRecup;
        return $this;
    }

    /**
     * Set the cum mt cp pris.
     *
     * @param float|null $cumMtCpPris The cum mt cp pris.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumMtCpPris(?float $cumMtCpPris): Bulletins {
        $this->cumMtCpPris = $cumMtCpPris;
        return $this;
    }

    /**
     * Set the cum mt cp pris1.
     *
     * @param float|null $cumMtCpPris1 The cum mt cp pris1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumMtCpPris1(?float $cumMtCpPris1): Bulletins {
        $this->cumMtCpPris1 = $cumMtCpPris1;
        return $this;
    }

    /**
     * Set the cum net a payer.
     *
     * @param float|null $cumNetAPayer The cum net a payer.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumNetAPayer(?float $cumNetAPayer): Bulletins {
        $this->cumNetAPayer = $cumNetAPayer;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse1.
     *
     * @param float|null $cumPlaf1Caisse1 The cum plaf1 caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumPlaf1Caisse1(?float $cumPlaf1Caisse1): Bulletins {
        $this->cumPlaf1Caisse1 = $cumPlaf1Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse2.
     *
     * @param float|null $cumPlaf1Caisse2 The cum plaf1 caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumPlaf1Caisse2(?float $cumPlaf1Caisse2): Bulletins {
        $this->cumPlaf1Caisse2 = $cumPlaf1Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse3.
     *
     * @param float|null $cumPlaf1Caisse3 The cum plaf1 caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumPlaf1Caisse3(?float $cumPlaf1Caisse3): Bulletins {
        $this->cumPlaf1Caisse3 = $cumPlaf1Caisse3;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse1.
     *
     * @param float|null $cumPlaf2Caisse1 The cum plaf2 caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumPlaf2Caisse1(?float $cumPlaf2Caisse1): Bulletins {
        $this->cumPlaf2Caisse1 = $cumPlaf2Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse2.
     *
     * @param float|null $cumPlaf2Caisse2 The cum plaf2 caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumPlaf2Caisse2(?float $cumPlaf2Caisse2): Bulletins {
        $this->cumPlaf2Caisse2 = $cumPlaf2Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse3.
     *
     * @param float|null $cumPlaf2Caisse3 The cum plaf2 caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumPlaf2Caisse3(?float $cumPlaf2Caisse3): Bulletins {
        $this->cumPlaf2Caisse3 = $cumPlaf2Caisse3;
        return $this;
    }

    /**
     * Set the cum plafond gmp.
     *
     * @param float|null $cumPlafondGmp The cum plafond gmp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumPlafondGmp(?float $cumPlafondGmp): Bulletins {
        $this->cumPlafondGmp = $cumPlafondGmp;
        return $this;
    }

    /**
     * Set the cum pss1.
     *
     * @param float|null $cumPss1 The cum pss1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumPss1(?float $cumPss1): Bulletins {
        $this->cumPss1 = $cumPss1;
        return $this;
    }

    /**
     * Set the cum pss2.
     *
     * @param float|null $cumPss2 The cum pss2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumPss2(?float $cumPss2): Bulletins {
        $this->cumPss2 = $cumPss2;
        return $this;
    }

    /**
     * Set the cum rtt dus.
     *
     * @param float|null $cumRttDus The cum rtt dus.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumRttDus(?float $cumRttDus): Bulletins {
        $this->cumRttDus = $cumRttDus;
        return $this;
    }

    /**
     * Set the cum rtt pris.
     *
     * @param float|null $cumRttPris The cum rtt pris.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumRttPris(?float $cumRttPris): Bulletins {
        $this->cumRttPris = $cumRttPris;
        return $this;
    }

    /**
     * Set the cum tr a caisse1.
     *
     * @param float|null $cumTrACaisse1 The cum tr a caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTrACaisse1(?float $cumTrACaisse1): Bulletins {
        $this->cumTrACaisse1 = $cumTrACaisse1;
        return $this;
    }

    /**
     * Set the cum tr a caisse2.
     *
     * @param float|null $cumTrACaisse2 The cum tr a caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTrACaisse2(?float $cumTrACaisse2): Bulletins {
        $this->cumTrACaisse2 = $cumTrACaisse2;
        return $this;
    }

    /**
     * Set the cum tr a caisse3.
     *
     * @param float|null $cumTrACaisse3 The cum tr a caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTrACaisse3(?float $cumTrACaisse3): Bulletins {
        $this->cumTrACaisse3 = $cumTrACaisse3;
        return $this;
    }

    /**
     * Set the cum tr b caisse1.
     *
     * @param float|null $cumTrBCaisse1 The cum tr b caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTrBCaisse1(?float $cumTrBCaisse1): Bulletins {
        $this->cumTrBCaisse1 = $cumTrBCaisse1;
        return $this;
    }

    /**
     * Set the cum tr b caisse2.
     *
     * @param float|null $cumTrBCaisse2 The cum tr b caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTrBCaisse2(?float $cumTrBCaisse2): Bulletins {
        $this->cumTrBCaisse2 = $cumTrBCaisse2;
        return $this;
    }

    /**
     * Set the cum tr b caisse3.
     *
     * @param float|null $cumTrBCaisse3 The cum tr b caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTrBCaisse3(?float $cumTrBCaisse3): Bulletins {
        $this->cumTrBCaisse3 = $cumTrBCaisse3;
        return $this;
    }

    /**
     * Set the cum tr c caisse1.
     *
     * @param float|null $cumTrCCaisse1 The cum tr c caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTrCCaisse1(?float $cumTrCCaisse1): Bulletins {
        $this->cumTrCCaisse1 = $cumTrCCaisse1;
        return $this;
    }

    /**
     * Set the cum tr c caisse2.
     *
     * @param float|null $cumTrCCaisse2 The cum tr c caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTrCCaisse2(?float $cumTrCCaisse2): Bulletins {
        $this->cumTrCCaisse2 = $cumTrCCaisse2;
        return $this;
    }

    /**
     * Set the cum tr c caisse3.
     *
     * @param float|null $cumTrCCaisse3 The cum tr c caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTrCCaisse3(?float $cumTrCCaisse3): Bulletins {
        $this->cumTrCCaisse3 = $cumTrCCaisse3;
        return $this;
    }

    /**
     * Set the cum tranche2.
     *
     * @param float|null $cumTranche2 The cum tranche2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTranche2(?float $cumTranche2): Bulletins {
        $this->cumTranche2 = $cumTranche2;
        return $this;
    }

    /**
     * Set the cum tranche a.
     *
     * @param float|null $cumTrancheA The cum tranche a.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTrancheA(?float $cumTrancheA): Bulletins {
        $this->cumTrancheA = $cumTrancheA;
        return $this;
    }

    /**
     * Set the cum tranche b.
     *
     * @param float|null $cumTrancheB The cum tranche b.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTrancheB(?float $cumTrancheB): Bulletins {
        $this->cumTrancheB = $cumTrancheB;
        return $this;
    }

    /**
     * Set the cum tranche c.
     *
     * @param float|null $cumTrancheC The cum tranche c.
     * @return Bulletins Returns this Bulletins.
     */
    public function setCumTrancheC(?float $cumTrancheC): Bulletins {
        $this->cumTrancheC = $cumTrancheC;
        return $this;
    }

    /**
     * Set the delta.
     *
     * @param float|null $delta The delta.
     * @return Bulletins Returns this Bulletins.
     */
    public function setDelta(?float $delta): Bulletins {
        $this->delta = $delta;
        return $this;
    }

    /**
     * Set the droit cp.
     *
     * @param float|null $droitCp The droit cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setDroitCp(?float $droitCp): Bulletins {
        $this->droitCp = $droitCp;
        return $this;
    }

    /**
     * Set the dt debut periode.
     *
     * @param DateTime|null $dtDebutPeriode The dt debut periode.
     * @return Bulletins Returns this Bulletins.
     */
    public function setDtDebutPeriode(?DateTime $dtDebutPeriode): Bulletins {
        $this->dtDebutPeriode = $dtDebutPeriode;
        return $this;
    }

    /**
     * Set the dt fin periode.
     *
     * @param DateTime|null $dtFinPeriode The dt fin periode.
     * @return Bulletins Returns this Bulletins.
     */
    public function setDtFinPeriode(?DateTime $dtFinPeriode): Bulletins {
        $this->dtFinPeriode = $dtFinPeriode;
        return $this;
    }

    /**
     * Set the ecart cumule.
     *
     * @param float|null $ecartCumule The ecart cumule.
     * @return Bulletins Returns this Bulletins.
     */
    public function setEcartCumule(?float $ecartCumule): Bulletins {
        $this->ecartCumule = $ecartCumule;
        return $this;
    }

    /**
     * Set the etat bul.
     *
     * @param string|null $etatBul The etat bul.
     * @return Bulletins Returns this Bulletins.
     */
    public function setEtatBul(?string $etatBul): Bulletins {
        $this->etatBul = $etatBul;
        return $this;
    }

    /**
     * Set the etat edition.
     *
     * @param string|null $etatEdition The etat edition.
     * @return Bulletins Returns this Bulletins.
     */
    public function setEtatEdition(?string $etatEdition): Bulletins {
        $this->etatEdition = $etatEdition;
        return $this;
    }

    /**
     * Set the forfait jour.
     *
     * @param bool|null $forfaitJour The forfait jour.
     * @return Bulletins Returns this Bulletins.
     */
    public function setForfaitJour(?bool $forfaitJour): Bulletins {
        $this->forfaitJour = $forfaitJour;
        return $this;
    }

    /**
     * Set the gest calc net paye.
     *
     * @param bool|null $gestCalcNetPaye The gest calc net paye.
     * @return Bulletins Returns this Bulletins.
     */
    public function setGestCalcNetPaye(?bool $gestCalcNetPaye): Bulletins {
        $this->gestCalcNetPaye = $gestCalcNetPaye;
        return $this;
    }

    /**
     * Set the gestion coeff.
     *
     * @param bool|null $gestionCoeff The gestion coeff.
     * @return Bulletins Returns this Bulletins.
     */
    public function setGestionCoeff(?bool $gestionCoeff): Bulletins {
        $this->gestionCoeff = $gestionCoeff;
        return $this;
    }

    /**
     * Set the h reel trav.
     *
     * @param float|null $hReelTrav The h reel trav.
     * @return Bulletins Returns this Bulletins.
     */
    public function setHReelTrav(?float $hReelTrav): Bulletins {
        $this->hReelTrav = $hReelTrav;
        return $this;
    }

    /**
     * Set the h theo trav.
     *
     * @param float|null $hTheoTrav The h theo trav.
     * @return Bulletins Returns this Bulletins.
     */
    public function setHTheoTrav(?float $hTheoTrav): Bulletins {
        $this->hTheoTrav = $hTheoTrav;
        return $this;
    }

    /**
     * Set the heure absence.
     *
     * @param float|null $heureAbsence The heure absence.
     * @return Bulletins Returns this Bulletins.
     */
    public function setHeureAbsence(?float $heureAbsence): Bulletins {
        $this->heureAbsence = $heureAbsence;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return Bulletins Returns this Bulletins.
     */
    public function setIndicePeriode(?int $indicePeriode): Bulletins {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Bulletins Returns this Bulletins.
     */
    public function setLibelle(?string $libelle): Bulletins {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return Bulletins Returns this Bulletins.
     */
    public function setLienDocument(?string $lienDocument): Bulletins {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lien justificatif.
     *
     * @param string|null $lienJustificatif The lien justificatif.
     * @return Bulletins Returns this Bulletins.
     */
    public function setLienJustificatif(?string $lienJustificatif): Bulletins {
        $this->lienJustificatif = $lienJustificatif;
        return $this;
    }

    /**
     * Set the max abat.
     *
     * @param float|null $maxAbat The max abat.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMaxAbat(?float $maxAbat): Bulletins {
        $this->maxAbat = $maxAbat;
        return $this;
    }

    /**
     * Set the mensuel journalier.
     *
     * @param bool|null $mensuelJournalier The mensuel journalier.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMensuelJournalier(?bool $mensuelJournalier): Bulletins {
        $this->mensuelJournalier = $mensuelJournalier;
        return $this;
    }

    /**
     * Set the methode indem cp.
     *
     * @param string|null $methodeIndemCp The methode indem cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMethodeIndemCp(?string $methodeIndemCp): Bulletins {
        $this->methodeIndemCp = $methodeIndemCp;
        return $this;
    }

    /**
     * Set the mig.
     *
     * @param float|null $mig The mig.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMig(?float $mig): Bulletins {
        $this->mig = $mig;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float|null $montant1 The montant1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMontant1(?float $montant1): Bulletins {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float|null $montant2 The montant2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMontant2(?float $montant2): Bulletins {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant3.
     *
     * @param float|null $montant3 The montant3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMontant3(?float $montant3): Bulletins {
        $this->montant3 = $montant3;
        return $this;
    }

    /**
     * Set the montant4.
     *
     * @param float|null $montant4 The montant4.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMontant4(?float $montant4): Bulletins {
        $this->montant4 = $montant4;
        return $this;
    }

    /**
     * Set the montant5.
     *
     * @param float|null $montant5 The montant5.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMontant5(?float $montant5): Bulletins {
        $this->montant5 = $montant5;
        return $this;
    }

    /**
     * Set the mt h sup bonif.
     *
     * @param float|null $mtHSupBonif The mt h sup bonif.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMtHSupBonif(?float $mtHSupBonif): Bulletins {
        $this->mtHSupBonif = $mtHSupBonif;
        return $this;
    }

    /**
     * Set the mt i cp cp.
     *
     * @param float|null $mtICpCp The mt i cp cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMtICpCp(?float $mtICpCp): Bulletins {
        $this->mtICpCp = $mtICpCp;
        return $this;
    }

    /**
     * Set the mt i cpt.
     *
     * @param float|null $mtICpt The mt i cpt.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMtICpt(?float $mtICpt): Bulletins {
        $this->mtICpt = $mtICpt;
        return $this;
    }

    /**
     * Set the mt i int.
     *
     * @param float|null $mtIInt The mt i int.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMtIInt(?float $mtIInt): Bulletins {
        $this->mtIInt = $mtIInt;
        return $this;
    }

    /**
     * Set the mt jcp arbitrage.
     *
     * @param bool|null $mtJcpArbitrage The mt jcp arbitrage.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMtJcpArbitrage(?bool $mtJcpArbitrage): Bulletins {
        $this->mtJcpArbitrage = $mtJcpArbitrage;
        return $this;
    }

    /**
     * Set the mt journee cp.
     *
     * @param float|null $mtJourneeCp The mt journee cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMtJourneeCp(?float $mtJourneeCp): Bulletins {
        $this->mtJourneeCp = $mtJourneeCp;
        return $this;
    }

    /**
     * Set the mt net paye theo.
     *
     * @param float|null $mtNetPayeTheo The mt net paye theo.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMtNetPayeTheo(?float $mtNetPayeTheo): Bulletins {
        $this->mtNetPayeTheo = $mtNetPayeTheo;
        return $this;
    }

    /**
     * Set the mt taux lig sal base.
     *
     * @param float|null $mtTauxLigSalBase The mt taux lig sal base.
     * @return Bulletins Returns this Bulletins.
     */
    public function setMtTauxLigSalBase(?float $mtTauxLigSalBase): Bulletins {
        $this->mtTauxLigSalBase = $mtTauxLigSalBase;
        return $this;
    }

    /**
     * Set the nb30.
     *
     * @param float|null $nb30 The nb30.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNb30(?float $nb30): Bulletins {
        $this->nb30 = $nb30;
        return $this;
    }

    /**
     * Set the nb h ab cp.
     *
     * @param float|null $nbHAbCp The nb h ab cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHAbCp(?float $nbHAbCp): Bulletins {
        $this->nbHAbCp = $nbHAbCp;
        return $this;
    }

    /**
     * Set the nb h absence intemp.
     *
     * @param float|null $nbHAbsenceIntemp The nb h absence intemp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHAbsenceIntemp(?float $nbHAbsenceIntemp): Bulletins {
        $this->nbHAbsenceIntemp = $nbHAbsenceIntemp;
        return $this;
    }

    /**
     * Set the nb h attente.
     *
     * @param float|null $nbHAttente The nb h attente.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHAttente(?float $nbHAttente): Bulletins {
        $this->nbHAttente = $nbHAttente;
        return $this;
    }

    /**
     * Set the nb h bonifie dues.
     *
     * @param float|null $nbHBonifieDues The nb h bonifie dues.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHBonifieDues(?float $nbHBonifieDues): Bulletins {
        $this->nbHBonifieDues = $nbHBonifieDues;
        return $this;
    }

    /**
     * Set the nb h bonifie prises.
     *
     * @param float|null $nbHBonifiePrises The nb h bonifie prises.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHBonifiePrises(?float $nbHBonifiePrises): Bulletins {
        $this->nbHBonifiePrises = $nbHBonifiePrises;
        return $this;
    }

    /**
     * Set the nb h carence intemp.
     *
     * @param float|null $nbHCarenceIntemp The nb h carence intemp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHCarenceIntemp(?float $nbHCarenceIntemp): Bulletins {
        $this->nbHCarenceIntemp = $nbHCarenceIntemp;
        return $this;
    }

    /**
     * Set the nb h chom part cp.
     *
     * @param float|null $nbHChomPartCp The nb h chom part cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHChomPartCp(?float $nbHChomPartCp): Bulletins {
        $this->nbHChomPartCp = $nbHChomPartCp;
        return $this;
    }

    /**
     * Set the nb h chom part tech.
     *
     * @param float|null $nbHChomPartTech The nb h chom part tech.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHChomPartTech(?float $nbHChomPartTech): Bulletins {
        $this->nbHChomPartTech = $nbHChomPartTech;
        return $this;
    }

    /**
     * Set the nb h conduite.
     *
     * @param float|null $nbHConduite The nb h conduite.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHConduite(?float $nbHConduite): Bulletins {
        $this->nbHConduite = $nbHConduite;
        return $this;
    }

    /**
     * Set the nb h conting.
     *
     * @param float|null $nbHConting The nb h conting.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHConting(?float $nbHConting): Bulletins {
        $this->nbHConting = $nbHConting;
        return $this;
    }

    /**
     * Set the nb h dble.
     *
     * @param float|null $nbHDble The nb h dble.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHDble(?float $nbHDble): Bulletins {
        $this->nbHDble = $nbHDble;
        return $this;
    }

    /**
     * Set the nb h dif dus.
     *
     * @param float|null $nbHDifDus The nb h dif dus.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHDifDus(?float $nbHDifDus): Bulletins {
        $this->nbHDifDus = $nbHDifDus;
        return $this;
    }

    /**
     * Set the nb h intemp indem.
     *
     * @param float|null $nbHIntempIndem The nb h intemp indem.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHIntempIndem(?float $nbHIntempIndem): Bulletins {
        $this->nbHIntempIndem = $nbHIntempIndem;
        return $this;
    }

    /**
     * Set the nb h lig sal base.
     *
     * @param float|null $nbHLigSalBase The nb h lig sal base.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHLigSalBase(?float $nbHLigSalBase): Bulletins {
        $this->nbHLigSalBase = $nbHLigSalBase;
        return $this;
    }

    /**
     * Set the nb h normal.
     *
     * @param float|null $nbHNormal The nb h normal.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHNormal(?float $nbHNormal): Bulletins {
        $this->nbHNormal = $nbHNormal;
        return $this;
    }

    /**
     * Set the nb h pas droit fillon.
     *
     * @param float|null $nbHPasDroitFillon The nb h pas droit fillon.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHPasDroitFillon(?float $nbHPasDroitFillon): Bulletins {
        $this->nbHPasDroitFillon = $nbHPasDroitFillon;
        return $this;
    }

    /**
     * Set the nb h remplace.
     *
     * @param float|null $nbHRemplace The nb h remplace.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHRemplace(?float $nbHRemplace): Bulletins {
        $this->nbHRemplace = $nbHRemplace;
        return $this;
    }

    /**
     * Set the nb h repo comp dues.
     *
     * @param float|null $nbHRepoCompDues The nb h repo comp dues.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHRepoCompDues(?float $nbHRepoCompDues): Bulletins {
        $this->nbHRepoCompDues = $nbHRepoCompDues;
        return $this;
    }

    /**
     * Set the nb h repo comp prises.
     *
     * @param float|null $nbHRepoCompPrises The nb h repo comp prises.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHRepoCompPrises(?float $nbHRepoCompPrises): Bulletins {
        $this->nbHRepoCompPrises = $nbHRepoCompPrises;
        return $this;
    }

    /**
     * Set the nb h repo r dues.
     *
     * @param float|null $nbHRepoRDues The nb h repo r dues.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHRepoRDues(?float $nbHRepoRDues): Bulletins {
        $this->nbHRepoRDues = $nbHRepoRDues;
        return $this;
    }

    /**
     * Set the nb h repo r prises.
     *
     * @param float|null $nbHRepoRPrises The nb h repo r prises.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHRepoRPrises(?float $nbHRepoRPrises): Bulletins {
        $this->nbHRepoRPrises = $nbHRepoRPrises;
        return $this;
    }

    /**
     * Set the nb h sup1.
     *
     * @param float|null $nbHSup1 The nb h sup1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHSup1(?float $nbHSup1): Bulletins {
        $this->nbHSup1 = $nbHSup1;
        return $this;
    }

    /**
     * Set the nb h sup2.
     *
     * @param float|null $nbHSup2 The nb h sup2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHSup2(?float $nbHSup2): Bulletins {
        $this->nbHSup2 = $nbHSup2;
        return $this;
    }

    /**
     * Set the nb h sup3.
     *
     * @param float|null $nbHSup3 The nb h sup3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHSup3(?float $nbHSup3): Bulletins {
        $this->nbHSup3 = $nbHSup3;
        return $this;
    }

    /**
     * Set the nb h sup4.
     *
     * @param float|null $nbHSup4 The nb h sup4.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHSup4(?float $nbHSup4): Bulletins {
        $this->nbHSup4 = $nbHSup4;
        return $this;
    }

    /**
     * Set the nb h sup5.
     *
     * @param float|null $nbHSup5 The nb h sup5.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHSup5(?float $nbHSup5): Bulletins {
        $this->nbHSup5 = $nbHSup5;
        return $this;
    }

    /**
     * Set the nb h sup bonif.
     *
     * @param float|null $nbHSupBonif The nb h sup bonif.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHSupBonif(?float $nbHSupBonif): Bulletins {
        $this->nbHSupBonif = $nbHSupBonif;
        return $this;
    }

    /**
     * Set the nb h sup bonif abs.
     *
     * @param float|null $nbHSupBonifAbs The nb h sup bonif abs.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHSupBonifAbs(?float $nbHSupBonifAbs): Bulletins {
        $this->nbHSupBonifAbs = $nbHSupBonifAbs;
        return $this;
    }

    /**
     * Set the nb h trav.
     *
     * @param float|null $nbHTrav The nb h trav.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHTrav(?float $nbHTrav): Bulletins {
        $this->nbHTrav = $nbHTrav;
        return $this;
    }

    /**
     * Set the nb h travail.
     *
     * @param float|null $nbHTravail The nb h travail.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHTravail(?float $nbHTravail): Bulletins {
        $this->nbHTravail = $nbHTravail;
        return $this;
    }

    /**
     * Set the nb heure paye.
     *
     * @param float|null $nbHeurePaye The nb heure paye.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHeurePaye(?float $nbHeurePaye): Bulletins {
        $this->nbHeurePaye = $nbHeurePaye;
        return $this;
    }

    /**
     * Set the nb heure sup.
     *
     * @param float|null $nbHeureSup The nb heure sup.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHeureSup(?float $nbHeureSup): Bulletins {
        $this->nbHeureSup = $nbHeureSup;
        return $this;
    }

    /**
     * Set the nb heure trav.
     *
     * @param float|null $nbHeureTrav The nb heure trav.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHeureTrav(?float $nbHeureTrav): Bulletins {
        $this->nbHeureTrav = $nbHeureTrav;
        return $this;
    }

    /**
     * Set the nb heure trav mois.
     *
     * @param float|null $nbHeureTravMois The nb heure trav mois.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbHeureTravMois(?float $nbHeureTravMois): Bulletins {
        $this->nbHeureTravMois = $nbHeureTravMois;
        return $this;
    }

    /**
     * Set the nb j chom part cp.
     *
     * @param float|null $nbJChomPartCp The nb j chom part cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJChomPartCp(?float $nbJChomPartCp): Bulletins {
        $this->nbJChomPartCp = $nbJChomPartCp;
        return $this;
    }

    /**
     * Set the nb j dus.
     *
     * @param float|null $nbJDus The nb j dus.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJDus(?float $nbJDus): Bulletins {
        $this->nbJDus = $nbJDus;
        return $this;
    }

    /**
     * Set the nb j dus1.
     *
     * @param float|null $nbJDus1 The nb j dus1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJDus1(?float $nbJDus1): Bulletins {
        $this->nbJDus1 = $nbJDus1;
        return $this;
    }

    /**
     * Set the nb j pris.
     *
     * @param float|null $nbJPris The nb j pris.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJPris(?float $nbJPris): Bulletins {
        $this->nbJPris = $nbJPris;
        return $this;
    }

    /**
     * Set the nb j pris1.
     *
     * @param float|null $nbJPris1 The nb j pris1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJPris1(?float $nbJPris1): Bulletins {
        $this->nbJPris1 = $nbJPris1;
        return $this;
    }

    /**
     * Set the nb j repo recup dus.
     *
     * @param float|null $nbJRepoRecupDus The nb j repo recup dus.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJRepoRecupDus(?float $nbJRepoRecupDus): Bulletins {
        $this->nbJRepoRecupDus = $nbJRepoRecupDus;
        return $this;
    }

    /**
     * Set the nb j repo recup pris.
     *
     * @param float|null $nbJRepoRecupPris The nb j repo recup pris.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJRepoRecupPris(?float $nbJRepoRecupPris): Bulletins {
        $this->nbJRepoRecupPris = $nbJRepoRecupPris;
        return $this;
    }

    /**
     * Set the nb j trav force.
     *
     * @param bool|null $nbJTravForce The nb j trav force.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJTravForce(?bool $nbJTravForce): Bulletins {
        $this->nbJTravForce = $nbJTravForce;
        return $this;
    }

    /**
     * Set the nb j trav mois es.
     *
     * @param int|null $nbJTravMoisEs The nb j trav mois es.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJTravMoisEs(?int $nbJTravMoisEs): Bulletins {
        $this->nbJTravMoisEs = $nbJTravMoisEs;
        return $this;
    }

    /**
     * Set the nb jour base.
     *
     * @param float|null $nbJourBase The nb jour base.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJourBase(?float $nbJourBase): Bulletins {
        $this->nbJourBase = $nbJourBase;
        return $this;
    }

    /**
     * Set the nb jour base cp.
     *
     * @param float|null $nbJourBaseCp The nb jour base cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJourBaseCp(?float $nbJourBaseCp): Bulletins {
        $this->nbJourBaseCp = $nbJourBaseCp;
        return $this;
    }

    /**
     * Set the nb jour cp acquis.
     *
     * @param float|null $nbJourCpAcquis The nb jour cp acquis.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJourCpAcquis(?float $nbJourCpAcquis): Bulletins {
        $this->nbJourCpAcquis = $nbJourCpAcquis;
        return $this;
    }

    /**
     * Set the nb jour cp pris.
     *
     * @param float|null $nbJourCpPris The nb jour cp pris.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJourCpPris(?float $nbJourCpPris): Bulletins {
        $this->nbJourCpPris = $nbJourCpPris;
        return $this;
    }

    /**
     * Set the nb jour normaux.
     *
     * @param float|null $nbJourNormaux The nb jour normaux.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJourNormaux(?float $nbJourNormaux): Bulletins {
        $this->nbJourNormaux = $nbJourNormaux;
        return $this;
    }

    /**
     * Set the nb jour trav.
     *
     * @param float|null $nbJourTrav The nb jour trav.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJourTrav(?float $nbJourTrav): Bulletins {
        $this->nbJourTrav = $nbJourTrav;
        return $this;
    }

    /**
     * Set the nb jrtt dus.
     *
     * @param float|null $nbJrttDus The nb jrtt dus.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJrttDus(?float $nbJrttDus): Bulletins {
        $this->nbJrttDus = $nbJrttDus;
        return $this;
    }

    /**
     * Set the nb jrtt pris.
     *
     * @param float|null $nbJrttPris The nb jrtt pris.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNbJrttPris(?float $nbJrttPris): Bulletins {
        $this->nbJrttPris = $nbJrttPris;
        return $this;
    }

    /**
     * Set the net a payer.
     *
     * @param float|null $netAPayer The net a payer.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNetAPayer(?float $netAPayer): Bulletins {
        $this->netAPayer = $netAPayer;
        return $this;
    }

    /**
     * Set the net impos.
     *
     * @param float|null $netImpos The net impos.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNetImpos(?float $netImpos): Bulletins {
        $this->netImpos = $netImpos;
        return $this;
    }

    /**
     * Set the note1.
     *
     * @param string|null $note1 The note1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNote1(?string $note1): Bulletins {
        $this->note1 = $note1;
        return $this;
    }

    /**
     * Set the note2.
     *
     * @param string|null $note2 The note2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNote2(?string $note2): Bulletins {
        $this->note2 = $note2;
        return $this;
    }

    /**
     * Set the note3.
     *
     * @param string|null $note3 The note3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNote3(?string $note3): Bulletins {
        $this->note3 = $note3;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return Bulletins Returns this Bulletins.
     */
    public function setNumeroEmploye(?string $numeroEmploye): Bulletins {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the paie euro.
     *
     * @param bool|null $paieEuro The paie euro.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPaieEuro(?bool $paieEuro): Bulletins {
        $this->paieEuro = $paieEuro;
        return $this;
    }

    /**
     * Set the paiement cp non pris.
     *
     * @param bool|null $paiementCpNonPris The paiement cp non pris.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPaiementCpNonPris(?bool $paiementCpNonPris): Bulletins {
        $this->paiementCpNonPris = $paiementCpNonPris;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPeriode(?DateTime $periode): Bulletins {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string|null $periodicite The periodicite.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPeriodicite(?string $periodicite): Bulletins {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the periodicite modifie.
     *
     * @param bool|null $periodiciteModifie The periodicite modifie.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPeriodiciteModifie(?bool $periodiciteModifie): Bulletins {
        $this->periodiciteModifie = $periodiciteModifie;
        return $this;
    }

    /**
     * Set the plafond1 caisse1.
     *
     * @param float|null $plafond1Caisse1 The plafond1 caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPlafond1Caisse1(?float $plafond1Caisse1): Bulletins {
        $this->plafond1Caisse1 = $plafond1Caisse1;
        return $this;
    }

    /**
     * Set the plafond1 caisse2.
     *
     * @param float|null $plafond1Caisse2 The plafond1 caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPlafond1Caisse2(?float $plafond1Caisse2): Bulletins {
        $this->plafond1Caisse2 = $plafond1Caisse2;
        return $this;
    }

    /**
     * Set the plafond1 caisse3.
     *
     * @param float|null $plafond1Caisse3 The plafond1 caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPlafond1Caisse3(?float $plafond1Caisse3): Bulletins {
        $this->plafond1Caisse3 = $plafond1Caisse3;
        return $this;
    }

    /**
     * Set the plafond2 caisse1.
     *
     * @param float|null $plafond2Caisse1 The plafond2 caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPlafond2Caisse1(?float $plafond2Caisse1): Bulletins {
        $this->plafond2Caisse1 = $plafond2Caisse1;
        return $this;
    }

    /**
     * Set the plafond2 caisse2.
     *
     * @param float|null $plafond2Caisse2 The plafond2 caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPlafond2Caisse2(?float $plafond2Caisse2): Bulletins {
        $this->plafond2Caisse2 = $plafond2Caisse2;
        return $this;
    }

    /**
     * Set the plafond2 caisse3.
     *
     * @param float|null $plafond2Caisse3 The plafond2 caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPlafond2Caisse3(?float $plafond2Caisse3): Bulletins {
        $this->plafond2Caisse3 = $plafond2Caisse3;
        return $this;
    }

    /**
     * Set the plafond gmp.
     *
     * @param float|null $plafondGmp The plafond gmp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPlafondGmp(?float $plafondGmp): Bulletins {
        $this->plafondGmp = $plafondGmp;
        return $this;
    }

    /**
     * Set the plafond gmp modifie.
     *
     * @param bool|null $plafondGmpModifie The plafond gmp modifie.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPlafondGmpModifie(?bool $plafondGmpModifie): Bulletins {
        $this->plafondGmpModifie = $plafondGmpModifie;
        return $this;
    }

    /**
     * Set the plafond heure.
     *
     * @param float|null $plafondHeure The plafond heure.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPlafondHeure(?float $plafondHeure): Bulletins {
        $this->plafondHeure = $plafondHeure;
        return $this;
    }

    /**
     * Set the plafond jour.
     *
     * @param float|null $plafondJour The plafond jour.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPlafondJour(?float $plafondJour): Bulletins {
        $this->plafondJour = $plafondJour;
        return $this;
    }

    /**
     * Set the plafond semaine.
     *
     * @param float|null $plafondSemaine The plafond semaine.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPlafondSemaine(?float $plafondSemaine): Bulletins {
        $this->plafondSemaine = $plafondSemaine;
        return $this;
    }

    /**
     * Set the pourcent abat.
     *
     * @param float|null $pourcentAbat The pourcent abat.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPourcentAbat(?float $pourcentAbat): Bulletins {
        $this->pourcentAbat = $pourcentAbat;
        return $this;
    }

    /**
     * Set the pourcent act force.
     *
     * @param int|null $pourcentActForce The pourcent act force.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPourcentActForce(?int $pourcentActForce): Bulletins {
        $this->pourcentActForce = $pourcentActForce;
        return $this;
    }

    /**
     * Set the pourcent activite.
     *
     * @param float|null $pourcentActivite The pourcent activite.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPourcentActivite(?float $pourcentActivite): Bulletins {
        $this->pourcentActivite = $pourcentActivite;
        return $this;
    }

    /**
     * Set the pourcent remu hor.
     *
     * @param float|null $pourcentRemuHor The pourcent remu hor.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPourcentRemuHor(?float $pourcentRemuHor): Bulletins {
        $this->pourcentRemuHor = $pourcentRemuHor;
        return $this;
    }

    /**
     * Set the pp soumis taxe.
     *
     * @param float|null $ppSoumisTaxe The pp soumis taxe.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPpSoumisTaxe(?float $ppSoumisTaxe): Bulletins {
        $this->ppSoumisTaxe = $ppSoumisTaxe;
        return $this;
    }

    /**
     * Set the prov cp.
     *
     * @param float|null $provCp The prov cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setProvCp(?float $provCp): Bulletins {
        $this->provCp = $provCp;
        return $this;
    }

    /**
     * Set the prov cp1.
     *
     * @param float|null $provCp1 The prov cp1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setProvCp1(?float $provCp1): Bulletins {
        $this->provCp1 = $provCp1;
        return $this;
    }

    /**
     * Set the pss1.
     *
     * @param float|null $pss1 The pss1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPss1(?float $pss1): Bulletins {
        $this->pss1 = $pss1;
        return $this;
    }

    /**
     * Set the pss2.
     *
     * @param float|null $pss2 The pss2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPss2(?float $pss2): Bulletins {
        $this->pss2 = $pss2;
        return $this;
    }

    /**
     * Set the pss30.
     *
     * @param bool|null $pss30 The pss30.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPss30(?bool $pss30): Bulletins {
        $this->pss30 = $pss30;
        return $this;
    }

    /**
     * Set the pss mod.
     *
     * @param bool|null $pssMod The pss mod.
     * @return Bulletins Returns this Bulletins.
     */
    public function setPssMod(?bool $pssMod): Bulletins {
        $this->pssMod = $pssMod;
        return $this;
    }

    /**
     * Set the remun mens.
     *
     * @param float|null $remunMens The remun mens.
     * @return Bulletins Returns this Bulletins.
     */
    public function setRemunMens(?float $remunMens): Bulletins {
        $this->remunMens = $remunMens;
        return $this;
    }

    /**
     * Set the s base.
     *
     * @param float|null $sBase The s base.
     * @return Bulletins Returns this Bulletins.
     */
    public function setSBase(?float $sBase): Bulletins {
        $this->sBase = $sBase;
        return $this;
    }

    /**
     * Set the smic1.
     *
     * @param float|null $smic1 The smic1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setSmic1(?float $smic1): Bulletins {
        $this->smic1 = $smic1;
        return $this;
    }

    /**
     * Set the smic h.
     *
     * @param float|null $smicH The smic h.
     * @return Bulletins Returns this Bulletins.
     */
    public function setSmicH(?float $smicH): Bulletins {
        $this->smicH = $smicH;
        return $this;
    }

    /**
     * Set the smic h35.
     *
     * @param float|null $smicH35 The smic h35.
     * @return Bulletins Returns this Bulletins.
     */
    public function setSmicH35(?float $smicH35): Bulletins {
        $this->smicH35 = $smicH35;
        return $this;
    }

    /**
     * Set the smic h39.
     *
     * @param float|null $smicH39 The smic h39.
     * @return Bulletins Returns this Bulletins.
     */
    public function setSmicH39(?float $smicH39): Bulletins {
        $this->smicH39 = $smicH39;
        return $this;
    }

    /**
     * Set the smic m.
     *
     * @param float|null $smicM The smic m.
     * @return Bulletins Returns this Bulletins.
     */
    public function setSmicM(?float $smicM): Bulletins {
        $this->smicM = $smicM;
        return $this;
    }

    /**
     * Set the smic m35.
     *
     * @param float|null $smicM35 The smic m35.
     * @return Bulletins Returns this Bulletins.
     */
    public function setSmicM35(?float $smicM35): Bulletins {
        $this->smicM35 = $smicM35;
        return $this;
    }

    /**
     * Set the smic m39.
     *
     * @param float|null $smicM39 The smic m39.
     * @return Bulletins Returns this Bulletins.
     */
    public function setSmicM39(?float $smicM39): Bulletins {
        $this->smicM39 = $smicM39;
        return $this;
    }

    /**
     * Set the sortie mois.
     *
     * @param bool|null $sortieMois The sortie mois.
     * @return Bulletins Returns this Bulletins.
     */
    public function setSortieMois(?bool $sortieMois): Bulletins {
        $this->sortieMois = $sortieMois;
        return $this;
    }

    /**
     * Set the taux h ab cp.
     *
     * @param float|null $tauxHAbCp The taux h ab cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTauxHAbCp(?float $tauxHAbCp): Bulletins {
        $this->tauxHAbCp = $tauxHAbCp;
        return $this;
    }

    /**
     * Set the taux h absence.
     *
     * @param float|null $tauxHAbsence The taux h absence.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTauxHAbsence(?float $tauxHAbsence): Bulletins {
        $this->tauxHAbsence = $tauxHAbsence;
        return $this;
    }

    /**
     * Set the taux h normal.
     *
     * @param float|null $tauxHNormal The taux h normal.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTauxHNormal(?float $tauxHNormal): Bulletins {
        $this->tauxHNormal = $tauxHNormal;
        return $this;
    }

    /**
     * Set the taux journalier.
     *
     * @param float|null $tauxJournalier The taux journalier.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTauxJournalier(?float $tauxJournalier): Bulletins {
        $this->tauxJournalier = $tauxJournalier;
        return $this;
    }

    /**
     * Set the tot acompte.
     *
     * @param float|null $totAcompte The tot acompte.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTotAcompte(?float $totAcompte): Bulletins {
        $this->totAcompte = $totAcompte;
        return $this;
    }

    /**
     * Set the tot acompte cp.
     *
     * @param float|null $totAcompteCp The tot acompte cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTotAcompteCp(?float $totAcompteCp): Bulletins {
        $this->totAcompteCp = $totAcompteCp;
        return $this;
    }

    /**
     * Set the tot cotis patron.
     *
     * @param float|null $totCotisPatron The tot cotis patron.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTotCotisPatron(?float $totCotisPatron): Bulletins {
        $this->totCotisPatron = $totCotisPatron;
        return $this;
    }

    /**
     * Set the tot prime ni.
     *
     * @param float|null $totPrimeNi The tot prime ni.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTotPrimeNi(?float $totPrimeNi): Bulletins {
        $this->totPrimeNi = $totPrimeNi;
        return $this;
    }

    /**
     * Set the tot prime ns.
     *
     * @param float|null $totPrimeNs The tot prime ns.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTotPrimeNs(?float $totPrimeNs): Bulletins {
        $this->totPrimeNs = $totPrimeNs;
        return $this;
    }

    /**
     * Set the tot retenue.
     *
     * @param float|null $totRetenue The tot retenue.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTotRetenue(?float $totRetenue): Bulletins {
        $this->totRetenue = $totRetenue;
        return $this;
    }

    /**
     * Set the tr a caisse1.
     *
     * @param float|null $trACaisse1 The tr a caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrACaisse1(?float $trACaisse1): Bulletins {
        $this->trACaisse1 = $trACaisse1;
        return $this;
    }

    /**
     * Set the tr a caisse2.
     *
     * @param float|null $trACaisse2 The tr a caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrACaisse2(?float $trACaisse2): Bulletins {
        $this->trACaisse2 = $trACaisse2;
        return $this;
    }

    /**
     * Set the tr a caisse3.
     *
     * @param float|null $trACaisse3 The tr a caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrACaisse3(?float $trACaisse3): Bulletins {
        $this->trACaisse3 = $trACaisse3;
        return $this;
    }

    /**
     * Set the tr b caisse1.
     *
     * @param float|null $trBCaisse1 The tr b caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrBCaisse1(?float $trBCaisse1): Bulletins {
        $this->trBCaisse1 = $trBCaisse1;
        return $this;
    }

    /**
     * Set the tr b caisse2.
     *
     * @param float|null $trBCaisse2 The tr b caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrBCaisse2(?float $trBCaisse2): Bulletins {
        $this->trBCaisse2 = $trBCaisse2;
        return $this;
    }

    /**
     * Set the tr b caisse3.
     *
     * @param float|null $trBCaisse3 The tr b caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrBCaisse3(?float $trBCaisse3): Bulletins {
        $this->trBCaisse3 = $trBCaisse3;
        return $this;
    }

    /**
     * Set the tr c caisse1.
     *
     * @param float|null $trCCaisse1 The tr c caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrCCaisse1(?float $trCCaisse1): Bulletins {
        $this->trCCaisse1 = $trCCaisse1;
        return $this;
    }

    /**
     * Set the tr c caisse2.
     *
     * @param float|null $trCCaisse2 The tr c caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrCCaisse2(?float $trCCaisse2): Bulletins {
        $this->trCCaisse2 = $trCCaisse2;
        return $this;
    }

    /**
     * Set the tr c caisse3.
     *
     * @param float|null $trCCaisse3 The tr c caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrCCaisse3(?float $trCCaisse3): Bulletins {
        $this->trCCaisse3 = $trCCaisse3;
        return $this;
    }

    /**
     * Set the tranche2.
     *
     * @param float|null $tranche2 The tranche2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTranche2(?float $tranche2): Bulletins {
        $this->tranche2 = $tranche2;
        return $this;
    }

    /**
     * Set the tranche a.
     *
     * @param float|null $trancheA The tranche a.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheA(?float $trancheA): Bulletins {
        $this->trancheA = $trancheA;
        return $this;
    }

    /**
     * Set the tranche abal.
     *
     * @param float|null $trancheAbal The tranche abal.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheAbal(?float $trancheAbal): Bulletins {
        $this->trancheAbal = $trancheAbal;
        return $this;
    }

    /**
     * Set the tranche abanl.
     *
     * @param float|null $trancheAbanl The tranche abanl.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheAbanl(?float $trancheAbanl): Bulletins {
        $this->trancheAbanl = $trancheAbanl;
        return $this;
    }

    /**
     * Set the tranche abna.
     *
     * @param float|null $trancheAbna The tranche abna.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheAbna(?float $trancheAbna): Bulletins {
        $this->trancheAbna = $trancheAbna;
        return $this;
    }

    /**
     * Set the tranche b.
     *
     * @param float|null $trancheB The tranche b.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheB(?float $trancheB): Bulletins {
        $this->trancheB = $trancheB;
        return $this;
    }

    /**
     * Set the tranche bbal.
     *
     * @param float|null $trancheBbal The tranche bbal.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheBbal(?float $trancheBbal): Bulletins {
        $this->trancheBbal = $trancheBbal;
        return $this;
    }

    /**
     * Set the tranche bbanl.
     *
     * @param float|null $trancheBbanl The tranche bbanl.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheBbanl(?float $trancheBbanl): Bulletins {
        $this->trancheBbanl = $trancheBbanl;
        return $this;
    }

    /**
     * Set the tranche bbna.
     *
     * @param float|null $trancheBbna The tranche bbna.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheBbna(?float $trancheBbna): Bulletins {
        $this->trancheBbna = $trancheBbna;
        return $this;
    }

    /**
     * Set the tranche c.
     *
     * @param float|null $trancheC The tranche c.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheC(?float $trancheC): Bulletins {
        $this->trancheC = $trancheC;
        return $this;
    }

    /**
     * Set the tranche c plaf.
     *
     * @param float|null $trancheCPlaf The tranche c plaf.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheCPlaf(?float $trancheCPlaf): Bulletins {
        $this->trancheCPlaf = $trancheCPlaf;
        return $this;
    }

    /**
     * Set the tranche cbal.
     *
     * @param float|null $trancheCbal The tranche cbal.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheCbal(?float $trancheCbal): Bulletins {
        $this->trancheCbal = $trancheCbal;
        return $this;
    }

    /**
     * Set the tranche cbanl.
     *
     * @param float|null $trancheCbanl The tranche cbanl.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheCbanl(?float $trancheCbanl): Bulletins {
        $this->trancheCbanl = $trancheCbanl;
        return $this;
    }

    /**
     * Set the tranche cbna.
     *
     * @param float|null $trancheCbna The tranche cbna.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTrancheCbna(?float $trancheCbna): Bulletins {
        $this->trancheCbna = $trancheCbna;
        return $this;
    }

    /**
     * Set the txt note rtf.
     *
     * @param string|null $txtNoteRtf The txt note rtf.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTxtNoteRtf(?string $txtNoteRtf): Bulletins {
        $this->txtNoteRtf = $txtNoteRtf;
        return $this;
    }

    /**
     * Set the type base caisse1.
     *
     * @param string|null $typeBaseCaisse1 The type base caisse1.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTypeBaseCaisse1(?string $typeBaseCaisse1): Bulletins {
        $this->typeBaseCaisse1 = $typeBaseCaisse1;
        return $this;
    }

    /**
     * Set the type base caisse2.
     *
     * @param string|null $typeBaseCaisse2 The type base caisse2.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTypeBaseCaisse2(?string $typeBaseCaisse2): Bulletins {
        $this->typeBaseCaisse2 = $typeBaseCaisse2;
        return $this;
    }

    /**
     * Set the type base caisse3.
     *
     * @param string|null $typeBaseCaisse3 The type base caisse3.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTypeBaseCaisse3(?string $typeBaseCaisse3): Bulletins {
        $this->typeBaseCaisse3 = $typeBaseCaisse3;
        return $this;
    }

    /**
     * Set the type gestion bal.
     *
     * @param string|null $typeGestionBal The type gestion bal.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTypeGestionBal(?string $typeGestionBal): Bulletins {
        $this->typeGestionBal = $typeGestionBal;
        return $this;
    }

    /**
     * Set the type paiement bul.
     *
     * @param string|null $typePaiementBul The type paiement bul.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTypePaiementBul(?string $typePaiementBul): Bulletins {
        $this->typePaiementBul = $typePaiementBul;
        return $this;
    }

    /**
     * Set the type paiment modifie.
     *
     * @param bool|null $typePaimentModifie The type paiment modifie.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTypePaimentModifie(?bool $typePaimentModifie): Bulletins {
        $this->typePaimentModifie = $typePaimentModifie;
        return $this;
    }

    /**
     * Set the type saisie abs.
     *
     * @param string|null $typeSaisieAbs The type saisie abs.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTypeSaisieAbs(?string $typeSaisieAbs): Bulletins {
        $this->typeSaisieAbs = $typeSaisieAbs;
        return $this;
    }

    /**
     * Set the type saisie absence.
     *
     * @param string|null $typeSaisieAbsence The type saisie absence.
     * @return Bulletins Returns this Bulletins.
     */
    public function setTypeSaisieAbsence(?string $typeSaisieAbsence): Bulletins {
        $this->typeSaisieAbsence = $typeSaisieAbsence;
        return $this;
    }

    /**
     * Set the valorise cp.
     *
     * @param float|null $valoriseCp The valorise cp.
     * @return Bulletins Returns this Bulletins.
     */
    public function setValoriseCp(?float $valoriseCp): Bulletins {
        $this->valoriseCp = $valoriseCp;
        return $this;
    }
}
