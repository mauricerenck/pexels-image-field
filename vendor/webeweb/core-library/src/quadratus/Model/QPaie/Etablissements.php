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
 * Etablissements.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Etablissements {

    /**
     * Abattement max.
     *
     * @var float|null
     */
    private $abattementMax;

    /**
     * Alleg particulier.
     *
     * @var string|null
     */
    private $allegParticulier;

    /**
     * At bureau1.
     *
     * @var string|null
     */
    private $atBureau1;

    /**
     * At bureau2.
     *
     * @var string|null
     */
    private $atBureau2;

    /**
     * At bureau3.
     *
     * @var string|null
     */
    private $atBureau3;

    /**
     * At bureau4.
     *
     * @var string|null
     */
    private $atBureau4;

    /**
     * At bureau5.
     *
     * @var string|null
     */
    private $atBureau5;

    /**
     * At etab1.
     *
     * @var string|null
     */
    private $atEtab1;

    /**
     * At etab2.
     *
     * @var string|null
     */
    private $atEtab2;

    /**
     * At etab3.
     *
     * @var string|null
     */
    private $atEtab3;

    /**
     * At etab4.
     *
     * @var string|null
     */
    private $atEtab4;

    /**
     * At etab5.
     *
     * @var string|null
     */
    private $atEtab5;

    /**
     * At risque1.
     *
     * @var string|null
     */
    private $atRisque1;

    /**
     * At risque2.
     *
     * @var string|null
     */
    private $atRisque2;

    /**
     * At risque3.
     *
     * @var string|null
     */
    private $atRisque3;

    /**
     * At risque4.
     *
     * @var string|null
     */
    private $atRisque4;

    /**
     * At risque5.
     *
     * @var string|null
     */
    private $atRisque5;

    /**
     * At taux1.
     *
     * @var float|null
     */
    private $atTaux1;

    /**
     * At taux2.
     *
     * @var float|null
     */
    private $atTaux2;

    /**
     * At taux3.
     *
     * @var float|null
     */
    private $atTaux3;

    /**
     * At taux4.
     *
     * @var float|null
     */
    private $atTaux4;

    /**
     * At taux5.
     *
     * @var float|null
     */
    private $atTaux5;

    /**
     * At taux bul1.
     *
     * @var float|null
     */
    private $atTauxBul1;

    /**
     * At taux bul2.
     *
     * @var float|null
     */
    private $atTauxBul2;

    /**
     * At taux bul3.
     *
     * @var float|null
     */
    private $atTauxBul3;

    /**
     * At taux bul4.
     *
     * @var float|null
     */
    private $atTauxBul4;

    /**
     * At taux bul5.
     *
     * @var float|null
     */
    private $atTauxBul5;

    /**
     * Aubry1 modifie.
     *
     * @var bool|null
     */
    private $aubry1Modifie;

    /**
     * Autre alleg.
     *
     * @var string|null
     */
    private $autreAlleg;

    /**
     * Banque1.
     *
     * @var string|null
     */
    private $banque1;

    /**
     * Banque2.
     *
     * @var string|null
     */
    private $banque2;

    /**
     * Banque3.
     *
     * @var string|null
     */
    private $banque3;

    /**
     * Bic1.
     *
     * @var string|null
     */
    private $bic1;

    /**
     * Bonus cospar.
     *
     * @var bool|null
     */
    private $bonusCospar;

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
     * C colect11.
     *
     * @var string|null
     */
    private $cColect11;

    /**
     * C colect12.
     *
     * @var string|null
     */
    private $cColect12;

    /**
     * C colect21.
     *
     * @var string|null
     */
    private $cColect21;

    /**
     * C colect22.
     *
     * @var string|null
     */
    private $cColect22;

    /**
     * C colect31.
     *
     * @var string|null
     */
    private $cColect31;

    /**
     * C colect32.
     *
     * @var string|null
     */
    private $cColect32;

    /**
     * C colect41.
     *
     * @var string|null
     */
    private $cColect41;

    /**
     * C colect42.
     *
     * @var string|null
     */
    private $cColect42;

    /**
     * C colect51.
     *
     * @var string|null
     */
    private $cColect51;

    /**
     * C colect52.
     *
     * @var string|null
     */
    private $cColect52;

    /**
     * C colect61.
     *
     * @var string|null
     */
    private $cColect61;

    /**
     * C colect62.
     *
     * @var string|null
     */
    private $cColect62;

    /**
     * Caisse cp.
     *
     * @var bool|null
     */
    private $caisseCp;

    /**
     * Centre analytique.
     *
     * @var string|null
     */
    private $centreAnalytique;

    /**
     * Civilite.
     *
     * @var string|null
     */
    private $civilite;

    /**
     * Code adherent.
     *
     * @var string|null
     */
    private $codeAdherent;

    /**
     * Code c colect1.
     *
     * @var string|null
     */
    private $codeCColect1;

    /**
     * Code c colect2.
     *
     * @var string|null
     */
    private $codeCColect2;

    /**
     * Code c colect3.
     *
     * @var string|null
     */
    private $codeCColect3;

    /**
     * Code c colect4.
     *
     * @var string|null
     */
    private $codeCColect4;

    /**
     * Code c colect5.
     *
     * @var string|null
     */
    private $codeCColect5;

    /**
     * Code c colect6.
     *
     * @var string|null
     */
    private $codeCColect6;

    /**
     * Code centre impot.
     *
     * @var string|null
     */
    private $codeCentreImpot;

    /**
     * Code ducs specif.
     *
     * @var string|null
     */
    private $codeDucsSpecif;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code insee.
     *
     * @var string|null
     */
    private $codeInsee;

    /**
     * Code journal banque.
     *
     * @var string|null
     */
    private $codeJournalBanque;

    /**
     * Code journal paie.
     *
     * @var string|null
     */
    private $codeJournalPaie;

    /**
     * Code metier retraite.
     *
     * @var string|null
     */
    private $codeMetierRetraite;

    /**
     * Code naf.
     *
     * @var string|null
     */
    private $codeNaf;

    /**
     * Code naf2.
     *
     * @var string|null
     */
    private $codeNaf2;

    /**
     * Code naf2008.
     *
     * @var string|null
     */
    private $codeNaf2008;

    /**
     * Code naf22008.
     *
     * @var string|null
     */
    private $codeNaf22008;

    /**
     * Code naf3.
     *
     * @var string|null
     */
    private $codeNaf3;

    /**
     * Code naf32008.
     *
     * @var string|null
     */
    private $codeNaf32008;

    /**
     * Code officiel commune.
     *
     * @var string|null
     */
    private $codeOfficielCommune;

    /**
     * Code pays.
     *
     * @var string|null
     */
    private $codePays;

    /**
     * Code pays residence.
     *
     * @var string|null
     */
    private $codePaysResidence;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Coeff aubry2.
     *
     * @var float|null
     */
    private $coeffAubry2;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Compte acompte employe.
     *
     * @var bool|null
     */
    private $compteAcompteEmploye;

    /**
     * Compte charge1.
     *
     * @var string|null
     */
    private $compteCharge1;

    /**
     * Compte charge10.
     *
     * @var string|null
     */
    private $compteCharge10;

    /**
     * Compte charge11.
     *
     * @var string|null
     */
    private $compteCharge11;

    /**
     * Compte charge2.
     *
     * @var string|null
     */
    private $compteCharge2;

    /**
     * Compte charge3.
     *
     * @var string|null
     */
    private $compteCharge3;

    /**
     * Compte charge4.
     *
     * @var string|null
     */
    private $compteCharge4;

    /**
     * Compte charge5.
     *
     * @var string|null
     */
    private $compteCharge5;

    /**
     * Compte charge6.
     *
     * @var string|null
     */
    private $compteCharge6;

    /**
     * Compte charge7.
     *
     * @var string|null
     */
    private $compteCharge7;

    /**
     * Compte charge8.
     *
     * @var string|null
     */
    private $compteCharge8;

    /**
     * Compte charge9.
     *
     * @var string|null
     */
    private $compteCharge9;

    /**
     * Compte charge aen.
     *
     * @var string|null
     */
    private $compteChargeAen;

    /**
     * Compte charge fc.
     *
     * @var string|null
     */
    private $compteChargeFc;

    /**
     * Compte charge ijss.
     *
     * @var string|null
     */
    private $compteChargeIjss;

    /**
     * Compte charge indem cp.
     *
     * @var string|null
     */
    private $compteChargeIndemCp;

    /**
     * Compte saisie arret.
     *
     * @var string|null
     */
    private $compteSaisieArret;

    /**
     * Compte tiers1.
     *
     * @var string|null
     */
    private $compteTiers1;

    /**
     * Compte tiers2.
     *
     * @var string|null
     */
    private $compteTiers2;

    /**
     * Dadsu code c colect1.
     *
     * @var string|null
     */
    private $dadsuCodeCColect1;

    /**
     * Dadsu code c colect2.
     *
     * @var string|null
     */
    private $dadsuCodeCColect2;

    /**
     * Dadsu code c colect3.
     *
     * @var string|null
     */
    private $dadsuCodeCColect3;

    /**
     * Dadsu code c colect4.
     *
     * @var string|null
     */
    private $dadsuCodeCColect4;

    /**
     * Dadsu code c colect5.
     *
     * @var string|null
     */
    private $dadsuCodeCColect5;

    /**
     * Dadsu code c colect6.
     *
     * @var string|null
     */
    private $dadsuCodeCColect6;

    /**
     * Date allegement.
     *
     * @var DateTime|null
     */
    private $dateAllegement;

    /**
     * Date ducs.
     *
     * @var DateTime|null
     */
    private $dateDucs;

    /**
     * Date fin cospar.
     *
     * @var DateTime|null
     */
    private $dateFinCospar;

    /**
     * Date fin cp.
     *
     * @var DateTime|null
     */
    private $dateFinCp;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date publication.
     *
     * @var DateTime|null
     */
    private $datePublication;

    /**
     * Debut envoi.
     *
     * @var DateTime|null
     */
    private $debutEnvoi;

    /**
     * Detail salarie.
     *
     * @var bool|null
     */
    private $detailSalarie;

    /**
     * Domaine activite.
     *
     * @var string|null
     */
    private $domaineActivite;

    /**
     * Dossier comptable.
     *
     * @var string|null
     */
    private $dossierComptable;

    /**
     * Edition dif.
     *
     * @var bool|null
     */
    private $editionDif;

    /**
     * Edition dif bul.
     *
     * @var string|null
     */
    private $editionDifBul;

    /**
     * Emetteur1.
     *
     * @var int|null
     */
    private $emetteur1;

    /**
     * Emetteur2.
     *
     * @var int|null
     */
    private $emetteur2;

    /**
     * Emetteur3.
     *
     * @var int|null
     */
    private $emetteur3;

    /**
     * Enseigne.
     *
     * @var string|null
     */
    private $enseigne;

    /**
     * Etab decl dadsu.
     *
     * @var bool|null
     */
    private $etabDeclDadsu;

    /**
     * Exclure dadsu.
     *
     * @var bool|null
     */
    private $exclureDadsu;

    /**
     * Exo lodeom renforcee.
     *
     * @var bool|null
     */
    private $exoLodeomRenforcee;

    /**
     * Fax.
     *
     * @var string|null
     */
    private $fax;

    /**
     * Fin envoi.
     *
     * @var DateTime|null
     */
    private $finEnvoi;

    /**
     * Gere fraction etab.
     *
     * @var bool|null
     */
    private $gereFractionEtab;

    /**
     * Gestion contingent.
     *
     * @var bool|null
     */
    private $gestionContingent;

    /**
     * Gestion ducs1.
     *
     * @var string|null
     */
    private $gestionDucs1;

    /**
     * Gestion ducs2.
     *
     * @var string|null
     */
    private $gestionDucs2;

    /**
     * Gestion jour ferie etab.
     *
     * @var bool|null
     */
    private $gestionJourFerieEtab;

    /**
     * Gestion repos comp.
     *
     * @var bool|null
     */
    private $gestionReposComp;

    /**
     * Gestion repos recup.
     *
     * @var bool|null
     */
    private $gestionReposRecup;

    /**
     * Gestion repos remplace.
     *
     * @var bool|null
     */
    private $gestionReposRemplace;

    /**
     * Gestion rtt.
     *
     * @var bool|null
     */
    private $gestionRtt;

    /**
     * Gestion sem type.
     *
     * @var bool|null
     */
    private $gestionSemType;

    /**
     * Iban1.
     *
     * @var string|null
     */
    private $iban1;

    /**
     * Iban id client1.
     *
     * @var string|null
     */
    private $ibanIdClient1;

    /**
     * Inscrit rep metier.
     *
     * @var bool|null
     */
    private $inscritRepMetier;

    /**
     * Jour verse salaire.
     *
     * @var string|null
     */
    private $jourVerseSalaire;

    /**
     * Maintien intervient cp.
     *
     * @var bool|null
     */
    private $maintienIntervientCp;

    /**
     * Maintien salaire.
     *
     * @var bool|null
     */
    private $maintienSalaire;

    /**
     * Maintien specifique.
     *
     * @var bool|null
     */
    private $maintienSpecifique;

    /**
     * Masque service employe.
     *
     * @var bool|null
     */
    private $masqueServiceEmploye;

    /**
     * Methode cp.
     *
     * @var string|null
     */
    private $methodeCp;

    /**
     * Mois cloture cp.
     *
     * @var string|null
     */
    private $moisClotureCp;

    /**
     * Mois cloture dif.
     *
     * @var string|null
     */
    private $moisClotureDif;

    /**
     * Mois cloture rtt.
     *
     * @var string|null
     */
    private $moisClotureRtt;

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
     * Montant allegement.
     *
     * @var float|null
     */
    private $montantAllegement;

    /**
     * Nature analytique.
     *
     * @var string|null
     */
    private $natureAnalytique;

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
     * Nb hdif an.
     *
     * @var float|null
     */
    private $nbHdifAn;

    /**
     * Nb heure trav mois.
     *
     * @var float|null
     */
    private $nbHeureTravMois;

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
     * Nb m ajout per.
     *
     * @var string|null
     */
    private $nbMAjoutPer;

    /**
     * Nb mois aubry1.
     *
     * @var float|null
     */
    private $nbMoisAubry1;

    /**
     * Nbh jour rtt.
     *
     * @var float|null
     */
    private $nbhJourRtt;

    /**
     * Ne pas activer loi fillon2003.
     *
     * @var bool|null
     */
    private $nePasActiverLoiFillon2003;

    /**
     * Nom ville.
     *
     * @var string|null
     */
    private $nomVille;

    /**
     * Nom ville insee.
     *
     * @var string|null
     */
    private $nomVilleInsee;

    /**
     * Nom voie.
     *
     * @var string|null
     */
    private $nomVoie;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Opca dif.
     *
     * @var string|null
     */
    private $opcaDif;

    /**
     * P lafond exo.
     *
     * @var float|null
     */
    private $pLafondExo;

    /**
     * Paie decalee.
     *
     * @var bool|null
     */
    private $paieDecalee;

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
     * Pourcent bonif.
     *
     * @var float|null
     */
    private $pourcentBonif;

    /**
     * Pourcent exo.
     *
     * @var float|null
     */
    private $pourcentExo;

    /**
     * Pourcent transport.
     *
     * @var float|null
     */
    private $pourcentTransport;

    /**
     * Pourcentage imp.
     *
     * @var float|null
     */
    private $pourcentageImp;

    /**
     * Prof spectacle.
     *
     * @var bool|null
     */
    private $profSpectacle;

    /**
     * Profession.
     *
     * @var string|null
     */
    private $profession;

    /**
     * Prud type.
     *
     * @var string|null
     */
    private $prudType;

    /**
     * Prud type dadsu.
     *
     * @var string|null
     */
    private $prudTypeDadsu;

    /**
     * Publication.
     *
     * @var bool|null
     */
    private $publication;

    /**
     * Qualite.
     *
     * @var string|null
     */
    private $qualite;

    /**
     * Raison sociale.
     *
     * @var string|null
     */
    private $raisonSociale;

    /**
     * Reduction fillon.
     *
     * @var bool|null
     */
    private $reductionFillon;

    /**
     * Responsable.
     *
     * @var string|null
     */
    private $responsable;

    /**
     * Rib1.
     *
     * @var string|null
     */
    private $rib1;

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
     * Siege dadsu.
     *
     * @var bool|null
     */
    private $siegeDadsu;

    /**
     * Siret.
     *
     * @var string|null
     */
    private $siret;

    /**
     * Situation geo.
     *
     * @var string|null
     */
    private $situationGeo;

    /**
     * Subrogation.
     *
     * @var bool|null
     */
    private $subrogation;

    /**
     * Suivi analytique.
     *
     * @var bool|null
     */
    private $suiviAnalytique;

    /**
     * Taux actionsociale.
     *
     * @var float|null
     */
    private $tauxActionsociale;

    /**
     * Taux construction.
     *
     * @var float|null
     */
    private $tauxConstruction;

    /**
     * Taux formation.
     *
     * @var float|null
     */
    private $tauxFormation;

    /**
     * Taux h sup1.
     *
     * @var float|null
     */
    private $tauxHSup1;

    /**
     * Taux h sup2.
     *
     * @var float|null
     */
    private $tauxHSup2;

    /**
     * Taux h sup3.
     *
     * @var float|null
     */
    private $tauxHSup3;

    /**
     * Taux h sup4.
     *
     * @var float|null
     */
    private $tauxHSup4;

    /**
     * Taux h sup5.
     *
     * @var float|null
     */
    private $tauxHSup5;

    /**
     * Taux ret tr2 pp.
     *
     * @var float|null
     */
    private $tauxRetTr2Pp;

    /**
     * Taux ret tr2 ps.
     *
     * @var float|null
     */
    private $tauxRetTr2Ps;

    /**
     * Taux ret tr app.
     *
     * @var float|null
     */
    private $tauxRetTrApp;

    /**
     * Taux ret tr aps.
     *
     * @var float|null
     */
    private $tauxRetTrAps;

    /**
     * Taux ret tr bpp.
     *
     * @var float|null
     */
    private $tauxRetTrBpp;

    /**
     * Taux ret tr bps.
     *
     * @var float|null
     */
    private $tauxRetTrBps;

    /**
     * Taux ret tr cpp.
     *
     * @var float|null
     */
    private $tauxRetTrCpp;

    /**
     * Taux ret tr cps.
     *
     * @var float|null
     */
    private $tauxRetTrCps;

    /**
     * Taux ret tr dpp.
     *
     * @var float|null
     */
    private $tauxRetTrDpp;

    /**
     * Taux ret tr dps.
     *
     * @var float|null
     */
    private $tauxRetTrDps;

    /**
     * Taux sup formation.
     *
     * @var float|null
     */
    private $tauxSupFormation;

    /**
     * Taux taxe apprenti.
     *
     * @var float|null
     */
    private $tauxTaxeApprenti;

    /**
     * Taux transport.
     *
     * @var float|null
     */
    private $tauxTransport;

    /**
     * Tds128.
     *
     * @var string|null
     */
    private $tds128;

    /**
     * Tds19.
     *
     * @var string|null
     */
    private $tds19;

    /**
     * Tds47.
     *
     * @var string|null
     */
    private $tds47;

    /**
     * Tel.
     *
     * @var string|null
     */
    private $tel;

    /**
     * Tx sal decote.
     *
     * @var float|null
     */
    private $txSalDecote;

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
     * Type bonif.
     *
     * @var string|null
     */
    private $typeBonif;

    /**
     * Type domiciliation banque1.
     *
     * @var string|null
     */
    private $typeDomiciliationBanque1;

    /**
     * Type domiciliation banque2.
     *
     * @var string|null
     */
    private $typeDomiciliationBanque2;

    /**
     * Type domiciliation banque3.
     *
     * @var string|null
     */
    private $typeDomiciliationBanque3;

    /**
     * Type effectif.
     *
     * @var string|null
     */
    private $typeEffectif;

    /**
     * Type maintien salaire.
     *
     * @var string|null
     */
    private $typeMaintienSalaire;

    /**
     * Type publication.
     *
     * @var string|null
     */
    private $typePublication;

    /**
     * Type saisie ab cp.
     *
     * @var string|null
     */
    private $typeSaisieAbCp;

    /**
     * Type smic.
     *
     * @var string|null
     */
    private $typeSmic;

    /**
     * Urssaf alsace.
     *
     * @var bool|null
     */
    private $urssafAlsace;

    /**
     * Zone specif.
     *
     * @var string|null
     */
    private $zoneSpecif;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the alleg particulier.
     *
     * @return string|null Returns the alleg particulier.
     */
    public function getAllegParticulier(): ?string {
        return $this->allegParticulier;
    }

    /**
     * Get the at bureau1.
     *
     * @return string|null Returns the at bureau1.
     */
    public function getAtBureau1(): ?string {
        return $this->atBureau1;
    }

    /**
     * Get the at bureau2.
     *
     * @return string|null Returns the at bureau2.
     */
    public function getAtBureau2(): ?string {
        return $this->atBureau2;
    }

    /**
     * Get the at bureau3.
     *
     * @return string|null Returns the at bureau3.
     */
    public function getAtBureau3(): ?string {
        return $this->atBureau3;
    }

    /**
     * Get the at bureau4.
     *
     * @return string|null Returns the at bureau4.
     */
    public function getAtBureau4(): ?string {
        return $this->atBureau4;
    }

    /**
     * Get the at bureau5.
     *
     * @return string|null Returns the at bureau5.
     */
    public function getAtBureau5(): ?string {
        return $this->atBureau5;
    }

    /**
     * Get the at etab1.
     *
     * @return string|null Returns the at etab1.
     */
    public function getAtEtab1(): ?string {
        return $this->atEtab1;
    }

    /**
     * Get the at etab2.
     *
     * @return string|null Returns the at etab2.
     */
    public function getAtEtab2(): ?string {
        return $this->atEtab2;
    }

    /**
     * Get the at etab3.
     *
     * @return string|null Returns the at etab3.
     */
    public function getAtEtab3(): ?string {
        return $this->atEtab3;
    }

    /**
     * Get the at etab4.
     *
     * @return string|null Returns the at etab4.
     */
    public function getAtEtab4(): ?string {
        return $this->atEtab4;
    }

    /**
     * Get the at etab5.
     *
     * @return string|null Returns the at etab5.
     */
    public function getAtEtab5(): ?string {
        return $this->atEtab5;
    }

    /**
     * Get the at risque1.
     *
     * @return string|null Returns the at risque1.
     */
    public function getAtRisque1(): ?string {
        return $this->atRisque1;
    }

    /**
     * Get the at risque2.
     *
     * @return string|null Returns the at risque2.
     */
    public function getAtRisque2(): ?string {
        return $this->atRisque2;
    }

    /**
     * Get the at risque3.
     *
     * @return string|null Returns the at risque3.
     */
    public function getAtRisque3(): ?string {
        return $this->atRisque3;
    }

    /**
     * Get the at risque4.
     *
     * @return string|null Returns the at risque4.
     */
    public function getAtRisque4(): ?string {
        return $this->atRisque4;
    }

    /**
     * Get the at risque5.
     *
     * @return string|null Returns the at risque5.
     */
    public function getAtRisque5(): ?string {
        return $this->atRisque5;
    }

    /**
     * Get the at taux1.
     *
     * @return float|null Returns the at taux1.
     */
    public function getAtTaux1(): ?float {
        return $this->atTaux1;
    }

    /**
     * Get the at taux2.
     *
     * @return float|null Returns the at taux2.
     */
    public function getAtTaux2(): ?float {
        return $this->atTaux2;
    }

    /**
     * Get the at taux3.
     *
     * @return float|null Returns the at taux3.
     */
    public function getAtTaux3(): ?float {
        return $this->atTaux3;
    }

    /**
     * Get the at taux4.
     *
     * @return float|null Returns the at taux4.
     */
    public function getAtTaux4(): ?float {
        return $this->atTaux4;
    }

    /**
     * Get the at taux5.
     *
     * @return float|null Returns the at taux5.
     */
    public function getAtTaux5(): ?float {
        return $this->atTaux5;
    }

    /**
     * Get the at taux bul1.
     *
     * @return float|null Returns the at taux bul1.
     */
    public function getAtTauxBul1(): ?float {
        return $this->atTauxBul1;
    }

    /**
     * Get the at taux bul2.
     *
     * @return float|null Returns the at taux bul2.
     */
    public function getAtTauxBul2(): ?float {
        return $this->atTauxBul2;
    }

    /**
     * Get the at taux bul3.
     *
     * @return float|null Returns the at taux bul3.
     */
    public function getAtTauxBul3(): ?float {
        return $this->atTauxBul3;
    }

    /**
     * Get the at taux bul4.
     *
     * @return float|null Returns the at taux bul4.
     */
    public function getAtTauxBul4(): ?float {
        return $this->atTauxBul4;
    }

    /**
     * Get the at taux bul5.
     *
     * @return float|null Returns the at taux bul5.
     */
    public function getAtTauxBul5(): ?float {
        return $this->atTauxBul5;
    }

    /**
     * Get the aubry1 modifie.
     *
     * @return bool|null Returns the aubry1 modifie.
     */
    public function getAubry1Modifie(): ?bool {
        return $this->aubry1Modifie;
    }

    /**
     * Get the autre alleg.
     *
     * @return string|null Returns the autre alleg.
     */
    public function getAutreAlleg(): ?string {
        return $this->autreAlleg;
    }

    /**
     * Get the banque1.
     *
     * @return string|null Returns the banque1.
     */
    public function getBanque1(): ?string {
        return $this->banque1;
    }

    /**
     * Get the banque2.
     *
     * @return string|null Returns the banque2.
     */
    public function getBanque2(): ?string {
        return $this->banque2;
    }

    /**
     * Get the banque3.
     *
     * @return string|null Returns the banque3.
     */
    public function getBanque3(): ?string {
        return $this->banque3;
    }

    /**
     * Get the bic1.
     *
     * @return string|null Returns the bic1.
     */
    public function getBic1(): ?string {
        return $this->bic1;
    }

    /**
     * Get the bonus cospar.
     *
     * @return bool|null Returns the bonus cospar.
     */
    public function getBonusCospar(): ?bool {
        return $this->bonusCospar;
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
     * Get the c colect11.
     *
     * @return string|null Returns the c colect11.
     */
    public function getCColect11(): ?string {
        return $this->cColect11;
    }

    /**
     * Get the c colect12.
     *
     * @return string|null Returns the c colect12.
     */
    public function getCColect12(): ?string {
        return $this->cColect12;
    }

    /**
     * Get the c colect21.
     *
     * @return string|null Returns the c colect21.
     */
    public function getCColect21(): ?string {
        return $this->cColect21;
    }

    /**
     * Get the c colect22.
     *
     * @return string|null Returns the c colect22.
     */
    public function getCColect22(): ?string {
        return $this->cColect22;
    }

    /**
     * Get the c colect31.
     *
     * @return string|null Returns the c colect31.
     */
    public function getCColect31(): ?string {
        return $this->cColect31;
    }

    /**
     * Get the c colect32.
     *
     * @return string|null Returns the c colect32.
     */
    public function getCColect32(): ?string {
        return $this->cColect32;
    }

    /**
     * Get the c colect41.
     *
     * @return string|null Returns the c colect41.
     */
    public function getCColect41(): ?string {
        return $this->cColect41;
    }

    /**
     * Get the c colect42.
     *
     * @return string|null Returns the c colect42.
     */
    public function getCColect42(): ?string {
        return $this->cColect42;
    }

    /**
     * Get the c colect51.
     *
     * @return string|null Returns the c colect51.
     */
    public function getCColect51(): ?string {
        return $this->cColect51;
    }

    /**
     * Get the c colect52.
     *
     * @return string|null Returns the c colect52.
     */
    public function getCColect52(): ?string {
        return $this->cColect52;
    }

    /**
     * Get the c colect61.
     *
     * @return string|null Returns the c colect61.
     */
    public function getCColect61(): ?string {
        return $this->cColect61;
    }

    /**
     * Get the c colect62.
     *
     * @return string|null Returns the c colect62.
     */
    public function getCColect62(): ?string {
        return $this->cColect62;
    }

    /**
     * Get the caisse cp.
     *
     * @return bool|null Returns the caisse cp.
     */
    public function getCaisseCp(): ?bool {
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
     * Get the civilite.
     *
     * @return string|null Returns the civilite.
     */
    public function getCivilite(): ?string {
        return $this->civilite;
    }

    /**
     * Get the code adherent.
     *
     * @return string|null Returns the code adherent.
     */
    public function getCodeAdherent(): ?string {
        return $this->codeAdherent;
    }

    /**
     * Get the code c colect1.
     *
     * @return string|null Returns the code c colect1.
     */
    public function getCodeCColect1(): ?string {
        return $this->codeCColect1;
    }

    /**
     * Get the code c colect2.
     *
     * @return string|null Returns the code c colect2.
     */
    public function getCodeCColect2(): ?string {
        return $this->codeCColect2;
    }

    /**
     * Get the code c colect3.
     *
     * @return string|null Returns the code c colect3.
     */
    public function getCodeCColect3(): ?string {
        return $this->codeCColect3;
    }

    /**
     * Get the code c colect4.
     *
     * @return string|null Returns the code c colect4.
     */
    public function getCodeCColect4(): ?string {
        return $this->codeCColect4;
    }

    /**
     * Get the code c colect5.
     *
     * @return string|null Returns the code c colect5.
     */
    public function getCodeCColect5(): ?string {
        return $this->codeCColect5;
    }

    /**
     * Get the code c colect6.
     *
     * @return string|null Returns the code c colect6.
     */
    public function getCodeCColect6(): ?string {
        return $this->codeCColect6;
    }

    /**
     * Get the code centre impot.
     *
     * @return string|null Returns the code centre impot.
     */
    public function getCodeCentreImpot(): ?string {
        return $this->codeCentreImpot;
    }

    /**
     * Get the code ducs specif.
     *
     * @return string|null Returns the code ducs specif.
     */
    public function getCodeDucsSpecif(): ?string {
        return $this->codeDucsSpecif;
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
     * Get the code insee.
     *
     * @return string|null Returns the code insee.
     */
    public function getCodeInsee(): ?string {
        return $this->codeInsee;
    }

    /**
     * Get the code journal banque.
     *
     * @return string|null Returns the code journal banque.
     */
    public function getCodeJournalBanque(): ?string {
        return $this->codeJournalBanque;
    }

    /**
     * Get the code journal paie.
     *
     * @return string|null Returns the code journal paie.
     */
    public function getCodeJournalPaie(): ?string {
        return $this->codeJournalPaie;
    }

    /**
     * Get the code metier retraite.
     *
     * @return string|null Returns the code metier retraite.
     */
    public function getCodeMetierRetraite(): ?string {
        return $this->codeMetierRetraite;
    }

    /**
     * Get the code naf.
     *
     * @return string|null Returns the code naf.
     */
    public function getCodeNaf(): ?string {
        return $this->codeNaf;
    }

    /**
     * Get the code naf2.
     *
     * @return string|null Returns the code naf2.
     */
    public function getCodeNaf2(): ?string {
        return $this->codeNaf2;
    }

    /**
     * Get the code naf2008.
     *
     * @return string|null Returns the code naf2008.
     */
    public function getCodeNaf2008(): ?string {
        return $this->codeNaf2008;
    }

    /**
     * Get the code naf22008.
     *
     * @return string|null Returns the code naf22008.
     */
    public function getCodeNaf22008(): ?string {
        return $this->codeNaf22008;
    }

    /**
     * Get the code naf3.
     *
     * @return string|null Returns the code naf3.
     */
    public function getCodeNaf3(): ?string {
        return $this->codeNaf3;
    }

    /**
     * Get the code naf32008.
     *
     * @return string|null Returns the code naf32008.
     */
    public function getCodeNaf32008(): ?string {
        return $this->codeNaf32008;
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
     * Get the code pays.
     *
     * @return string|null Returns the code pays.
     */
    public function getCodePays(): ?string {
        return $this->codePays;
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
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
    }

    /**
     * Get the coeff aubry2.
     *
     * @return float|null Returns the coeff aubry2.
     */
    public function getCoeffAubry2(): ?float {
        return $this->coeffAubry2;
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
     * Get the compte acompte employe.
     *
     * @return bool|null Returns the compte acompte employe.
     */
    public function getCompteAcompteEmploye(): ?bool {
        return $this->compteAcompteEmploye;
    }

    /**
     * Get the compte charge1.
     *
     * @return string|null Returns the compte charge1.
     */
    public function getCompteCharge1(): ?string {
        return $this->compteCharge1;
    }

    /**
     * Get the compte charge10.
     *
     * @return string|null Returns the compte charge10.
     */
    public function getCompteCharge10(): ?string {
        return $this->compteCharge10;
    }

    /**
     * Get the compte charge11.
     *
     * @return string|null Returns the compte charge11.
     */
    public function getCompteCharge11(): ?string {
        return $this->compteCharge11;
    }

    /**
     * Get the compte charge2.
     *
     * @return string|null Returns the compte charge2.
     */
    public function getCompteCharge2(): ?string {
        return $this->compteCharge2;
    }

    /**
     * Get the compte charge3.
     *
     * @return string|null Returns the compte charge3.
     */
    public function getCompteCharge3(): ?string {
        return $this->compteCharge3;
    }

    /**
     * Get the compte charge4.
     *
     * @return string|null Returns the compte charge4.
     */
    public function getCompteCharge4(): ?string {
        return $this->compteCharge4;
    }

    /**
     * Get the compte charge5.
     *
     * @return string|null Returns the compte charge5.
     */
    public function getCompteCharge5(): ?string {
        return $this->compteCharge5;
    }

    /**
     * Get the compte charge6.
     *
     * @return string|null Returns the compte charge6.
     */
    public function getCompteCharge6(): ?string {
        return $this->compteCharge6;
    }

    /**
     * Get the compte charge7.
     *
     * @return string|null Returns the compte charge7.
     */
    public function getCompteCharge7(): ?string {
        return $this->compteCharge7;
    }

    /**
     * Get the compte charge8.
     *
     * @return string|null Returns the compte charge8.
     */
    public function getCompteCharge8(): ?string {
        return $this->compteCharge8;
    }

    /**
     * Get the compte charge9.
     *
     * @return string|null Returns the compte charge9.
     */
    public function getCompteCharge9(): ?string {
        return $this->compteCharge9;
    }

    /**
     * Get the compte charge aen.
     *
     * @return string|null Returns the compte charge aen.
     */
    public function getCompteChargeAen(): ?string {
        return $this->compteChargeAen;
    }

    /**
     * Get the compte charge fc.
     *
     * @return string|null Returns the compte charge fc.
     */
    public function getCompteChargeFc(): ?string {
        return $this->compteChargeFc;
    }

    /**
     * Get the compte charge ijss.
     *
     * @return string|null Returns the compte charge ijss.
     */
    public function getCompteChargeIjss(): ?string {
        return $this->compteChargeIjss;
    }

    /**
     * Get the compte charge indem cp.
     *
     * @return string|null Returns the compte charge indem cp.
     */
    public function getCompteChargeIndemCp(): ?string {
        return $this->compteChargeIndemCp;
    }

    /**
     * Get the compte saisie arret.
     *
     * @return string|null Returns the compte saisie arret.
     */
    public function getCompteSaisieArret(): ?string {
        return $this->compteSaisieArret;
    }

    /**
     * Get the compte tiers1.
     *
     * @return string|null Returns the compte tiers1.
     */
    public function getCompteTiers1(): ?string {
        return $this->compteTiers1;
    }

    /**
     * Get the compte tiers2.
     *
     * @return string|null Returns the compte tiers2.
     */
    public function getCompteTiers2(): ?string {
        return $this->compteTiers2;
    }

    /**
     * Get the dadsu code c colect1.
     *
     * @return string|null Returns the dadsu code c colect1.
     */
    public function getDadsuCodeCColect1(): ?string {
        return $this->dadsuCodeCColect1;
    }

    /**
     * Get the dadsu code c colect2.
     *
     * @return string|null Returns the dadsu code c colect2.
     */
    public function getDadsuCodeCColect2(): ?string {
        return $this->dadsuCodeCColect2;
    }

    /**
     * Get the dadsu code c colect3.
     *
     * @return string|null Returns the dadsu code c colect3.
     */
    public function getDadsuCodeCColect3(): ?string {
        return $this->dadsuCodeCColect3;
    }

    /**
     * Get the dadsu code c colect4.
     *
     * @return string|null Returns the dadsu code c colect4.
     */
    public function getDadsuCodeCColect4(): ?string {
        return $this->dadsuCodeCColect4;
    }

    /**
     * Get the dadsu code c colect5.
     *
     * @return string|null Returns the dadsu code c colect5.
     */
    public function getDadsuCodeCColect5(): ?string {
        return $this->dadsuCodeCColect5;
    }

    /**
     * Get the dadsu code c colect6.
     *
     * @return string|null Returns the dadsu code c colect6.
     */
    public function getDadsuCodeCColect6(): ?string {
        return $this->dadsuCodeCColect6;
    }

    /**
     * Get the date allegement.
     *
     * @return DateTime|null Returns the date allegement.
     */
    public function getDateAllegement(): ?DateTime {
        return $this->dateAllegement;
    }

    /**
     * Get the date ducs.
     *
     * @return DateTime|null Returns the date ducs.
     */
    public function getDateDucs(): ?DateTime {
        return $this->dateDucs;
    }

    /**
     * Get the date fin cospar.
     *
     * @return DateTime|null Returns the date fin cospar.
     */
    public function getDateFinCospar(): ?DateTime {
        return $this->dateFinCospar;
    }

    /**
     * Get the date fin cp.
     *
     * @return DateTime|null Returns the date fin cp.
     */
    public function getDateFinCp(): ?DateTime {
        return $this->dateFinCp;
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
     * Get the date publication.
     *
     * @return DateTime|null Returns the date publication.
     */
    public function getDatePublication(): ?DateTime {
        return $this->datePublication;
    }

    /**
     * Get the debut envoi.
     *
     * @return DateTime|null Returns the debut envoi.
     */
    public function getDebutEnvoi(): ?DateTime {
        return $this->debutEnvoi;
    }

    /**
     * Get the detail salarie.
     *
     * @return bool|null Returns the detail salarie.
     */
    public function getDetailSalarie(): ?bool {
        return $this->detailSalarie;
    }

    /**
     * Get the domaine activite.
     *
     * @return string|null Returns the domaine activite.
     */
    public function getDomaineActivite(): ?string {
        return $this->domaineActivite;
    }

    /**
     * Get the dossier comptable.
     *
     * @return string|null Returns the dossier comptable.
     */
    public function getDossierComptable(): ?string {
        return $this->dossierComptable;
    }

    /**
     * Get the edition dif.
     *
     * @return bool|null Returns the edition dif.
     */
    public function getEditionDif(): ?bool {
        return $this->editionDif;
    }

    /**
     * Get the edition dif bul.
     *
     * @return string|null Returns the edition dif bul.
     */
    public function getEditionDifBul(): ?string {
        return $this->editionDifBul;
    }

    /**
     * Get the emetteur1.
     *
     * @return int|null Returns the emetteur1.
     */
    public function getEmetteur1(): ?int {
        return $this->emetteur1;
    }

    /**
     * Get the emetteur2.
     *
     * @return int|null Returns the emetteur2.
     */
    public function getEmetteur2(): ?int {
        return $this->emetteur2;
    }

    /**
     * Get the emetteur3.
     *
     * @return int|null Returns the emetteur3.
     */
    public function getEmetteur3(): ?int {
        return $this->emetteur3;
    }

    /**
     * Get the enseigne.
     *
     * @return string|null Returns the enseigne.
     */
    public function getEnseigne(): ?string {
        return $this->enseigne;
    }

    /**
     * Get the etab decl dadsu.
     *
     * @return bool|null Returns the etab decl dadsu.
     */
    public function getEtabDeclDadsu(): ?bool {
        return $this->etabDeclDadsu;
    }

    /**
     * Get the exclure dadsu.
     *
     * @return bool|null Returns the exclure dadsu.
     */
    public function getExclureDadsu(): ?bool {
        return $this->exclureDadsu;
    }

    /**
     * Get the exo lodeom renforcee.
     *
     * @return bool|null Returns the exo lodeom renforcee.
     */
    public function getExoLodeomRenforcee(): ?bool {
        return $this->exoLodeomRenforcee;
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
     * Get the fin envoi.
     *
     * @return DateTime|null Returns the fin envoi.
     */
    public function getFinEnvoi(): ?DateTime {
        return $this->finEnvoi;
    }

    /**
     * Get the gere fraction etab.
     *
     * @return bool|null Returns the gere fraction etab.
     */
    public function getGereFractionEtab(): ?bool {
        return $this->gereFractionEtab;
    }

    /**
     * Get the gestion contingent.
     *
     * @return bool|null Returns the gestion contingent.
     */
    public function getGestionContingent(): ?bool {
        return $this->gestionContingent;
    }

    /**
     * Get the gestion ducs1.
     *
     * @return string|null Returns the gestion ducs1.
     */
    public function getGestionDucs1(): ?string {
        return $this->gestionDucs1;
    }

    /**
     * Get the gestion ducs2.
     *
     * @return string|null Returns the gestion ducs2.
     */
    public function getGestionDucs2(): ?string {
        return $this->gestionDucs2;
    }

    /**
     * Get the gestion jour ferie etab.
     *
     * @return bool|null Returns the gestion jour ferie etab.
     */
    public function getGestionJourFerieEtab(): ?bool {
        return $this->gestionJourFerieEtab;
    }

    /**
     * Get the gestion repos comp.
     *
     * @return bool|null Returns the gestion repos comp.
     */
    public function getGestionReposComp(): ?bool {
        return $this->gestionReposComp;
    }

    /**
     * Get the gestion repos recup.
     *
     * @return bool|null Returns the gestion repos recup.
     */
    public function getGestionReposRecup(): ?bool {
        return $this->gestionReposRecup;
    }

    /**
     * Get the gestion repos remplace.
     *
     * @return bool|null Returns the gestion repos remplace.
     */
    public function getGestionReposRemplace(): ?bool {
        return $this->gestionReposRemplace;
    }

    /**
     * Get the gestion rtt.
     *
     * @return bool|null Returns the gestion rtt.
     */
    public function getGestionRtt(): ?bool {
        return $this->gestionRtt;
    }

    /**
     * Get the gestion sem type.
     *
     * @return bool|null Returns the gestion sem type.
     */
    public function getGestionSemType(): ?bool {
        return $this->gestionSemType;
    }

    /**
     * Get the iban1.
     *
     * @return string|null Returns the iban1.
     */
    public function getIban1(): ?string {
        return $this->iban1;
    }

    /**
     * Get the iban id client1.
     *
     * @return string|null Returns the iban id client1.
     */
    public function getIbanIdClient1(): ?string {
        return $this->ibanIdClient1;
    }

    /**
     * Get the inscrit rep metier.
     *
     * @return bool|null Returns the inscrit rep metier.
     */
    public function getInscritRepMetier(): ?bool {
        return $this->inscritRepMetier;
    }

    /**
     * Get the jour verse salaire.
     *
     * @return string|null Returns the jour verse salaire.
     */
    public function getJourVerseSalaire(): ?string {
        return $this->jourVerseSalaire;
    }

    /**
     * Get the maintien intervient cp.
     *
     * @return bool|null Returns the maintien intervient cp.
     */
    public function getMaintienIntervientCp(): ?bool {
        return $this->maintienIntervientCp;
    }

    /**
     * Get the maintien salaire.
     *
     * @return bool|null Returns the maintien salaire.
     */
    public function getMaintienSalaire(): ?bool {
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
     * Get the masque service employe.
     *
     * @return bool|null Returns the masque service employe.
     */
    public function getMasqueServiceEmploye(): ?bool {
        return $this->masqueServiceEmploye;
    }

    /**
     * Get the methode cp.
     *
     * @return string|null Returns the methode cp.
     */
    public function getMethodeCp(): ?string {
        return $this->methodeCp;
    }

    /**
     * Get the mois cloture cp.
     *
     * @return string|null Returns the mois cloture cp.
     */
    public function getMoisClotureCp(): ?string {
        return $this->moisClotureCp;
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
     * Get the mois cloture rtt.
     *
     * @return string|null Returns the mois cloture rtt.
     */
    public function getMoisClotureRtt(): ?string {
        return $this->moisClotureRtt;
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
     * Get the montant allegement.
     *
     * @return float|null Returns the montant allegement.
     */
    public function getMontantAllegement(): ?float {
        return $this->montantAllegement;
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
     * Get the nb hdif an.
     *
     * @return float|null Returns the nb hdif an.
     */
    public function getNbHdifAn(): ?float {
        return $this->nbHdifAn;
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
     * Get the nb m ajout per.
     *
     * @return string|null Returns the nb m ajout per.
     */
    public function getNbMAjoutPer(): ?string {
        return $this->nbMAjoutPer;
    }

    /**
     * Get the nb mois aubry1.
     *
     * @return float|null Returns the nb mois aubry1.
     */
    public function getNbMoisAubry1(): ?float {
        return $this->nbMoisAubry1;
    }

    /**
     * Get the nbh jour rtt.
     *
     * @return float|null Returns the nbh jour rtt.
     */
    public function getNbhJourRtt(): ?float {
        return $this->nbhJourRtt;
    }

    /**
     * Get the ne pas activer loi fillon2003.
     *
     * @return bool|null Returns the ne pas activer loi fillon2003.
     */
    public function getNePasActiverLoiFillon2003(): ?bool {
        return $this->nePasActiverLoiFillon2003;
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
     * Get the nom ville insee.
     *
     * @return string|null Returns the nom ville insee.
     */
    public function getNomVilleInsee(): ?string {
        return $this->nomVilleInsee;
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
     * Get the num voie.
     *
     * @return string|null Returns the num voie.
     */
    public function getNumVoie(): ?string {
        return $this->numVoie;
    }

    /**
     * Get the opca dif.
     *
     * @return string|null Returns the opca dif.
     */
    public function getOpcaDif(): ?string {
        return $this->opcaDif;
    }

    /**
     * Get the p lafond exo.
     *
     * @return float|null Returns the p lafond exo.
     */
    public function getPLafondExo(): ?float {
        return $this->pLafondExo;
    }

    /**
     * Get the paie decalee.
     *
     * @return bool|null Returns the paie decalee.
     */
    public function getPaieDecalee(): ?bool {
        return $this->paieDecalee;
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
     * Get the pourcent bonif.
     *
     * @return float|null Returns the pourcent bonif.
     */
    public function getPourcentBonif(): ?float {
        return $this->pourcentBonif;
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
     * Get the pourcent transport.
     *
     * @return float|null Returns the pourcent transport.
     */
    public function getPourcentTransport(): ?float {
        return $this->pourcentTransport;
    }

    /**
     * Get the pourcentage imp.
     *
     * @return float|null Returns the pourcentage imp.
     */
    public function getPourcentageImp(): ?float {
        return $this->pourcentageImp;
    }

    /**
     * Get the prof spectacle.
     *
     * @return bool|null Returns the prof spectacle.
     */
    public function getProfSpectacle(): ?bool {
        return $this->profSpectacle;
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
     * Get the prud type.
     *
     * @return string|null Returns the prud type.
     */
    public function getPrudType(): ?string {
        return $this->prudType;
    }

    /**
     * Get the prud type dadsu.
     *
     * @return string|null Returns the prud type dadsu.
     */
    public function getPrudTypeDadsu(): ?string {
        return $this->prudTypeDadsu;
    }

    /**
     * Get the publication.
     *
     * @return bool|null Returns the publication.
     */
    public function getPublication(): ?bool {
        return $this->publication;
    }

    /**
     * Get the qualite.
     *
     * @return string|null Returns the qualite.
     */
    public function getQualite(): ?string {
        return $this->qualite;
    }

    /**
     * Get the raison sociale.
     *
     * @return string|null Returns the raison sociale.
     */
    public function getRaisonSociale(): ?string {
        return $this->raisonSociale;
    }

    /**
     * Get the reduction fillon.
     *
     * @return bool|null Returns the reduction fillon.
     */
    public function getReductionFillon(): ?bool {
        return $this->reductionFillon;
    }

    /**
     * Get the responsable.
     *
     * @return string|null Returns the responsable.
     */
    public function getResponsable(): ?string {
        return $this->responsable;
    }

    /**
     * Get the rib1.
     *
     * @return string|null Returns the rib1.
     */
    public function getRib1(): ?string {
        return $this->rib1;
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
     * Get the siege dadsu.
     *
     * @return bool|null Returns the siege dadsu.
     */
    public function getSiegeDadsu(): ?bool {
        return $this->siegeDadsu;
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
     * Get the situation geo.
     *
     * @return string|null Returns the situation geo.
     */
    public function getSituationGeo(): ?string {
        return $this->situationGeo;
    }

    /**
     * Get the subrogation.
     *
     * @return bool|null Returns the subrogation.
     */
    public function getSubrogation(): ?bool {
        return $this->subrogation;
    }

    /**
     * Get the suivi analytique.
     *
     * @return bool|null Returns the suivi analytique.
     */
    public function getSuiviAnalytique(): ?bool {
        return $this->suiviAnalytique;
    }

    /**
     * Get the taux actionsociale.
     *
     * @return float|null Returns the taux actionsociale.
     */
    public function getTauxActionsociale(): ?float {
        return $this->tauxActionsociale;
    }

    /**
     * Get the taux construction.
     *
     * @return float|null Returns the taux construction.
     */
    public function getTauxConstruction(): ?float {
        return $this->tauxConstruction;
    }

    /**
     * Get the taux formation.
     *
     * @return float|null Returns the taux formation.
     */
    public function getTauxFormation(): ?float {
        return $this->tauxFormation;
    }

    /**
     * Get the taux h sup1.
     *
     * @return float|null Returns the taux h sup1.
     */
    public function getTauxHSup1(): ?float {
        return $this->tauxHSup1;
    }

    /**
     * Get the taux h sup2.
     *
     * @return float|null Returns the taux h sup2.
     */
    public function getTauxHSup2(): ?float {
        return $this->tauxHSup2;
    }

    /**
     * Get the taux h sup3.
     *
     * @return float|null Returns the taux h sup3.
     */
    public function getTauxHSup3(): ?float {
        return $this->tauxHSup3;
    }

    /**
     * Get the taux h sup4.
     *
     * @return float|null Returns the taux h sup4.
     */
    public function getTauxHSup4(): ?float {
        return $this->tauxHSup4;
    }

    /**
     * Get the taux h sup5.
     *
     * @return float|null Returns the taux h sup5.
     */
    public function getTauxHSup5(): ?float {
        return $this->tauxHSup5;
    }

    /**
     * Get the taux ret tr2 pp.
     *
     * @return float|null Returns the taux ret tr2 pp.
     */
    public function getTauxRetTr2Pp(): ?float {
        return $this->tauxRetTr2Pp;
    }

    /**
     * Get the taux ret tr2 ps.
     *
     * @return float|null Returns the taux ret tr2 ps.
     */
    public function getTauxRetTr2Ps(): ?float {
        return $this->tauxRetTr2Ps;
    }

    /**
     * Get the taux ret tr app.
     *
     * @return float|null Returns the taux ret tr app.
     */
    public function getTauxRetTrApp(): ?float {
        return $this->tauxRetTrApp;
    }

    /**
     * Get the taux ret tr aps.
     *
     * @return float|null Returns the taux ret tr aps.
     */
    public function getTauxRetTrAps(): ?float {
        return $this->tauxRetTrAps;
    }

    /**
     * Get the taux ret tr bpp.
     *
     * @return float|null Returns the taux ret tr bpp.
     */
    public function getTauxRetTrBpp(): ?float {
        return $this->tauxRetTrBpp;
    }

    /**
     * Get the taux ret tr bps.
     *
     * @return float|null Returns the taux ret tr bps.
     */
    public function getTauxRetTrBps(): ?float {
        return $this->tauxRetTrBps;
    }

    /**
     * Get the taux ret tr cpp.
     *
     * @return float|null Returns the taux ret tr cpp.
     */
    public function getTauxRetTrCpp(): ?float {
        return $this->tauxRetTrCpp;
    }

    /**
     * Get the taux ret tr cps.
     *
     * @return float|null Returns the taux ret tr cps.
     */
    public function getTauxRetTrCps(): ?float {
        return $this->tauxRetTrCps;
    }

    /**
     * Get the taux ret tr dpp.
     *
     * @return float|null Returns the taux ret tr dpp.
     */
    public function getTauxRetTrDpp(): ?float {
        return $this->tauxRetTrDpp;
    }

    /**
     * Get the taux ret tr dps.
     *
     * @return float|null Returns the taux ret tr dps.
     */
    public function getTauxRetTrDps(): ?float {
        return $this->tauxRetTrDps;
    }

    /**
     * Get the taux sup formation.
     *
     * @return float|null Returns the taux sup formation.
     */
    public function getTauxSupFormation(): ?float {
        return $this->tauxSupFormation;
    }

    /**
     * Get the taux taxe apprenti.
     *
     * @return float|null Returns the taux taxe apprenti.
     */
    public function getTauxTaxeApprenti(): ?float {
        return $this->tauxTaxeApprenti;
    }

    /**
     * Get the taux transport.
     *
     * @return float|null Returns the taux transport.
     */
    public function getTauxTransport(): ?float {
        return $this->tauxTransport;
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
     * Get the tds19.
     *
     * @return string|null Returns the tds19.
     */
    public function getTds19(): ?string {
        return $this->tds19;
    }

    /**
     * Get the tds47.
     *
     * @return string|null Returns the tds47.
     */
    public function getTds47(): ?string {
        return $this->tds47;
    }

    /**
     * Get the tel.
     *
     * @return string|null Returns the tel.
     */
    public function getTel(): ?string {
        return $this->tel;
    }

    /**
     * Get the tx sal decote.
     *
     * @return float|null Returns the tx sal decote.
     */
    public function getTxSalDecote(): ?float {
        return $this->txSalDecote;
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
     * Get the type bonif.
     *
     * @return string|null Returns the type bonif.
     */
    public function getTypeBonif(): ?string {
        return $this->typeBonif;
    }

    /**
     * Get the type domiciliation banque1.
     *
     * @return string|null Returns the type domiciliation banque1.
     */
    public function getTypeDomiciliationBanque1(): ?string {
        return $this->typeDomiciliationBanque1;
    }

    /**
     * Get the type domiciliation banque2.
     *
     * @return string|null Returns the type domiciliation banque2.
     */
    public function getTypeDomiciliationBanque2(): ?string {
        return $this->typeDomiciliationBanque2;
    }

    /**
     * Get the type domiciliation banque3.
     *
     * @return string|null Returns the type domiciliation banque3.
     */
    public function getTypeDomiciliationBanque3(): ?string {
        return $this->typeDomiciliationBanque3;
    }

    /**
     * Get the type effectif.
     *
     * @return string|null Returns the type effectif.
     */
    public function getTypeEffectif(): ?string {
        return $this->typeEffectif;
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
     * Get the type publication.
     *
     * @return string|null Returns the type publication.
     */
    public function getTypePublication(): ?string {
        return $this->typePublication;
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
     * Get the type smic.
     *
     * @return string|null Returns the type smic.
     */
    public function getTypeSmic(): ?string {
        return $this->typeSmic;
    }

    /**
     * Get the urssaf alsace.
     *
     * @return bool|null Returns the urssaf alsace.
     */
    public function getUrssafAlsace(): ?bool {
        return $this->urssafAlsace;
    }

    /**
     * Get the zone specif.
     *
     * @return string|null Returns the zone specif.
     */
    public function getZoneSpecif(): ?string {
        return $this->zoneSpecif;
    }

    /**
     * Set the abattement max.
     *
     * @param float|null $abattementMax The abattement max.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAbattementMax(?float $abattementMax): Etablissements {
        $this->abattementMax = $abattementMax;
        return $this;
    }

    /**
     * Set the alleg particulier.
     *
     * @param string|null $allegParticulier The alleg particulier.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAllegParticulier(?string $allegParticulier): Etablissements {
        $this->allegParticulier = $allegParticulier;
        return $this;
    }

    /**
     * Set the at bureau1.
     *
     * @param string|null $atBureau1 The at bureau1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtBureau1(?string $atBureau1): Etablissements {
        $this->atBureau1 = $atBureau1;
        return $this;
    }

    /**
     * Set the at bureau2.
     *
     * @param string|null $atBureau2 The at bureau2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtBureau2(?string $atBureau2): Etablissements {
        $this->atBureau2 = $atBureau2;
        return $this;
    }

    /**
     * Set the at bureau3.
     *
     * @param string|null $atBureau3 The at bureau3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtBureau3(?string $atBureau3): Etablissements {
        $this->atBureau3 = $atBureau3;
        return $this;
    }

    /**
     * Set the at bureau4.
     *
     * @param string|null $atBureau4 The at bureau4.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtBureau4(?string $atBureau4): Etablissements {
        $this->atBureau4 = $atBureau4;
        return $this;
    }

    /**
     * Set the at bureau5.
     *
     * @param string|null $atBureau5 The at bureau5.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtBureau5(?string $atBureau5): Etablissements {
        $this->atBureau5 = $atBureau5;
        return $this;
    }

    /**
     * Set the at etab1.
     *
     * @param string|null $atEtab1 The at etab1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtEtab1(?string $atEtab1): Etablissements {
        $this->atEtab1 = $atEtab1;
        return $this;
    }

    /**
     * Set the at etab2.
     *
     * @param string|null $atEtab2 The at etab2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtEtab2(?string $atEtab2): Etablissements {
        $this->atEtab2 = $atEtab2;
        return $this;
    }

    /**
     * Set the at etab3.
     *
     * @param string|null $atEtab3 The at etab3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtEtab3(?string $atEtab3): Etablissements {
        $this->atEtab3 = $atEtab3;
        return $this;
    }

    /**
     * Set the at etab4.
     *
     * @param string|null $atEtab4 The at etab4.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtEtab4(?string $atEtab4): Etablissements {
        $this->atEtab4 = $atEtab4;
        return $this;
    }

    /**
     * Set the at etab5.
     *
     * @param string|null $atEtab5 The at etab5.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtEtab5(?string $atEtab5): Etablissements {
        $this->atEtab5 = $atEtab5;
        return $this;
    }

    /**
     * Set the at risque1.
     *
     * @param string|null $atRisque1 The at risque1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtRisque1(?string $atRisque1): Etablissements {
        $this->atRisque1 = $atRisque1;
        return $this;
    }

    /**
     * Set the at risque2.
     *
     * @param string|null $atRisque2 The at risque2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtRisque2(?string $atRisque2): Etablissements {
        $this->atRisque2 = $atRisque2;
        return $this;
    }

    /**
     * Set the at risque3.
     *
     * @param string|null $atRisque3 The at risque3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtRisque3(?string $atRisque3): Etablissements {
        $this->atRisque3 = $atRisque3;
        return $this;
    }

    /**
     * Set the at risque4.
     *
     * @param string|null $atRisque4 The at risque4.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtRisque4(?string $atRisque4): Etablissements {
        $this->atRisque4 = $atRisque4;
        return $this;
    }

    /**
     * Set the at risque5.
     *
     * @param string|null $atRisque5 The at risque5.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtRisque5(?string $atRisque5): Etablissements {
        $this->atRisque5 = $atRisque5;
        return $this;
    }

    /**
     * Set the at taux1.
     *
     * @param float|null $atTaux1 The at taux1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtTaux1(?float $atTaux1): Etablissements {
        $this->atTaux1 = $atTaux1;
        return $this;
    }

    /**
     * Set the at taux2.
     *
     * @param float|null $atTaux2 The at taux2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtTaux2(?float $atTaux2): Etablissements {
        $this->atTaux2 = $atTaux2;
        return $this;
    }

    /**
     * Set the at taux3.
     *
     * @param float|null $atTaux3 The at taux3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtTaux3(?float $atTaux3): Etablissements {
        $this->atTaux3 = $atTaux3;
        return $this;
    }

    /**
     * Set the at taux4.
     *
     * @param float|null $atTaux4 The at taux4.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtTaux4(?float $atTaux4): Etablissements {
        $this->atTaux4 = $atTaux4;
        return $this;
    }

    /**
     * Set the at taux5.
     *
     * @param float|null $atTaux5 The at taux5.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtTaux5(?float $atTaux5): Etablissements {
        $this->atTaux5 = $atTaux5;
        return $this;
    }

    /**
     * Set the at taux bul1.
     *
     * @param float|null $atTauxBul1 The at taux bul1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtTauxBul1(?float $atTauxBul1): Etablissements {
        $this->atTauxBul1 = $atTauxBul1;
        return $this;
    }

    /**
     * Set the at taux bul2.
     *
     * @param float|null $atTauxBul2 The at taux bul2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtTauxBul2(?float $atTauxBul2): Etablissements {
        $this->atTauxBul2 = $atTauxBul2;
        return $this;
    }

    /**
     * Set the at taux bul3.
     *
     * @param float|null $atTauxBul3 The at taux bul3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtTauxBul3(?float $atTauxBul3): Etablissements {
        $this->atTauxBul3 = $atTauxBul3;
        return $this;
    }

    /**
     * Set the at taux bul4.
     *
     * @param float|null $atTauxBul4 The at taux bul4.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtTauxBul4(?float $atTauxBul4): Etablissements {
        $this->atTauxBul4 = $atTauxBul4;
        return $this;
    }

    /**
     * Set the at taux bul5.
     *
     * @param float|null $atTauxBul5 The at taux bul5.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAtTauxBul5(?float $atTauxBul5): Etablissements {
        $this->atTauxBul5 = $atTauxBul5;
        return $this;
    }

    /**
     * Set the aubry1 modifie.
     *
     * @param bool|null $aubry1Modifie The aubry1 modifie.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAubry1Modifie(?bool $aubry1Modifie): Etablissements {
        $this->aubry1Modifie = $aubry1Modifie;
        return $this;
    }

    /**
     * Set the autre alleg.
     *
     * @param string|null $autreAlleg The autre alleg.
     * @return Etablissements Returns this Etablissements.
     */
    public function setAutreAlleg(?string $autreAlleg): Etablissements {
        $this->autreAlleg = $autreAlleg;
        return $this;
    }

    /**
     * Set the banque1.
     *
     * @param string|null $banque1 The banque1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setBanque1(?string $banque1): Etablissements {
        $this->banque1 = $banque1;
        return $this;
    }

    /**
     * Set the banque2.
     *
     * @param string|null $banque2 The banque2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setBanque2(?string $banque2): Etablissements {
        $this->banque2 = $banque2;
        return $this;
    }

    /**
     * Set the banque3.
     *
     * @param string|null $banque3 The banque3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setBanque3(?string $banque3): Etablissements {
        $this->banque3 = $banque3;
        return $this;
    }

    /**
     * Set the bic1.
     *
     * @param string|null $bic1 The bic1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setBic1(?string $bic1): Etablissements {
        $this->bic1 = $bic1;
        return $this;
    }

    /**
     * Set the bonus cospar.
     *
     * @param bool|null $bonusCospar The bonus cospar.
     * @return Etablissements Returns this Etablissements.
     */
    public function setBonusCospar(?bool $bonusCospar): Etablissements {
        $this->bonusCospar = $bonusCospar;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Etablissements Returns this Etablissements.
     */
    public function setBtq(?string $btq): Etablissements {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Etablissements Returns this Etablissements.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Etablissements {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the c colect11.
     *
     * @param string|null $cColect11 The c colect11.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCColect11(?string $cColect11): Etablissements {
        $this->cColect11 = $cColect11;
        return $this;
    }

    /**
     * Set the c colect12.
     *
     * @param string|null $cColect12 The c colect12.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCColect12(?string $cColect12): Etablissements {
        $this->cColect12 = $cColect12;
        return $this;
    }

    /**
     * Set the c colect21.
     *
     * @param string|null $cColect21 The c colect21.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCColect21(?string $cColect21): Etablissements {
        $this->cColect21 = $cColect21;
        return $this;
    }

    /**
     * Set the c colect22.
     *
     * @param string|null $cColect22 The c colect22.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCColect22(?string $cColect22): Etablissements {
        $this->cColect22 = $cColect22;
        return $this;
    }

    /**
     * Set the c colect31.
     *
     * @param string|null $cColect31 The c colect31.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCColect31(?string $cColect31): Etablissements {
        $this->cColect31 = $cColect31;
        return $this;
    }

    /**
     * Set the c colect32.
     *
     * @param string|null $cColect32 The c colect32.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCColect32(?string $cColect32): Etablissements {
        $this->cColect32 = $cColect32;
        return $this;
    }

    /**
     * Set the c colect41.
     *
     * @param string|null $cColect41 The c colect41.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCColect41(?string $cColect41): Etablissements {
        $this->cColect41 = $cColect41;
        return $this;
    }

    /**
     * Set the c colect42.
     *
     * @param string|null $cColect42 The c colect42.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCColect42(?string $cColect42): Etablissements {
        $this->cColect42 = $cColect42;
        return $this;
    }

    /**
     * Set the c colect51.
     *
     * @param string|null $cColect51 The c colect51.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCColect51(?string $cColect51): Etablissements {
        $this->cColect51 = $cColect51;
        return $this;
    }

    /**
     * Set the c colect52.
     *
     * @param string|null $cColect52 The c colect52.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCColect52(?string $cColect52): Etablissements {
        $this->cColect52 = $cColect52;
        return $this;
    }

    /**
     * Set the c colect61.
     *
     * @param string|null $cColect61 The c colect61.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCColect61(?string $cColect61): Etablissements {
        $this->cColect61 = $cColect61;
        return $this;
    }

    /**
     * Set the c colect62.
     *
     * @param string|null $cColect62 The c colect62.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCColect62(?string $cColect62): Etablissements {
        $this->cColect62 = $cColect62;
        return $this;
    }

    /**
     * Set the caisse cp.
     *
     * @param bool|null $caisseCp The caisse cp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCaisseCp(?bool $caisseCp): Etablissements {
        $this->caisseCp = $caisseCp;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string|null $centreAnalytique The centre analytique.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCentreAnalytique(?string $centreAnalytique): Etablissements {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string|null $civilite The civilite.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCivilite(?string $civilite): Etablissements {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the code adherent.
     *
     * @param string|null $codeAdherent The code adherent.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeAdherent(?string $codeAdherent): Etablissements {
        $this->codeAdherent = $codeAdherent;
        return $this;
    }

    /**
     * Set the code c colect1.
     *
     * @param string|null $codeCColect1 The code c colect1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeCColect1(?string $codeCColect1): Etablissements {
        $this->codeCColect1 = $codeCColect1;
        return $this;
    }

    /**
     * Set the code c colect2.
     *
     * @param string|null $codeCColect2 The code c colect2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeCColect2(?string $codeCColect2): Etablissements {
        $this->codeCColect2 = $codeCColect2;
        return $this;
    }

    /**
     * Set the code c colect3.
     *
     * @param string|null $codeCColect3 The code c colect3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeCColect3(?string $codeCColect3): Etablissements {
        $this->codeCColect3 = $codeCColect3;
        return $this;
    }

    /**
     * Set the code c colect4.
     *
     * @param string|null $codeCColect4 The code c colect4.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeCColect4(?string $codeCColect4): Etablissements {
        $this->codeCColect4 = $codeCColect4;
        return $this;
    }

    /**
     * Set the code c colect5.
     *
     * @param string|null $codeCColect5 The code c colect5.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeCColect5(?string $codeCColect5): Etablissements {
        $this->codeCColect5 = $codeCColect5;
        return $this;
    }

    /**
     * Set the code c colect6.
     *
     * @param string|null $codeCColect6 The code c colect6.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeCColect6(?string $codeCColect6): Etablissements {
        $this->codeCColect6 = $codeCColect6;
        return $this;
    }

    /**
     * Set the code centre impot.
     *
     * @param string|null $codeCentreImpot The code centre impot.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeCentreImpot(?string $codeCentreImpot): Etablissements {
        $this->codeCentreImpot = $codeCentreImpot;
        return $this;
    }

    /**
     * Set the code ducs specif.
     *
     * @param string|null $codeDucsSpecif The code ducs specif.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeDucsSpecif(?string $codeDucsSpecif): Etablissements {
        $this->codeDucsSpecif = $codeDucsSpecif;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeEtablissement(?int $codeEtablissement): Etablissements {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string|null $codeInsee The code insee.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeInsee(?string $codeInsee): Etablissements {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code journal banque.
     *
     * @param string|null $codeJournalBanque The code journal banque.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeJournalBanque(?string $codeJournalBanque): Etablissements {
        $this->codeJournalBanque = $codeJournalBanque;
        return $this;
    }

    /**
     * Set the code journal paie.
     *
     * @param string|null $codeJournalPaie The code journal paie.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeJournalPaie(?string $codeJournalPaie): Etablissements {
        $this->codeJournalPaie = $codeJournalPaie;
        return $this;
    }

    /**
     * Set the code metier retraite.
     *
     * @param string|null $codeMetierRetraite The code metier retraite.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeMetierRetraite(?string $codeMetierRetraite): Etablissements {
        $this->codeMetierRetraite = $codeMetierRetraite;
        return $this;
    }

    /**
     * Set the code naf.
     *
     * @param string|null $codeNaf The code naf.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeNaf(?string $codeNaf): Etablissements {
        $this->codeNaf = $codeNaf;
        return $this;
    }

    /**
     * Set the code naf2.
     *
     * @param string|null $codeNaf2 The code naf2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeNaf2(?string $codeNaf2): Etablissements {
        $this->codeNaf2 = $codeNaf2;
        return $this;
    }

    /**
     * Set the code naf2008.
     *
     * @param string|null $codeNaf2008 The code naf2008.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeNaf2008(?string $codeNaf2008): Etablissements {
        $this->codeNaf2008 = $codeNaf2008;
        return $this;
    }

    /**
     * Set the code naf22008.
     *
     * @param string|null $codeNaf22008 The code naf22008.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeNaf22008(?string $codeNaf22008): Etablissements {
        $this->codeNaf22008 = $codeNaf22008;
        return $this;
    }

    /**
     * Set the code naf3.
     *
     * @param string|null $codeNaf3 The code naf3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeNaf3(?string $codeNaf3): Etablissements {
        $this->codeNaf3 = $codeNaf3;
        return $this;
    }

    /**
     * Set the code naf32008.
     *
     * @param string|null $codeNaf32008 The code naf32008.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeNaf32008(?string $codeNaf32008): Etablissements {
        $this->codeNaf32008 = $codeNaf32008;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string|null $codeOfficielCommune The code officiel commune.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodeOfficielCommune(?string $codeOfficielCommune): Etablissements {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string|null $codePays The code pays.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodePays(?string $codePays): Etablissements {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code pays residence.
     *
     * @param string|null $codePaysResidence The code pays residence.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodePaysResidence(?string $codePaysResidence): Etablissements {
        $this->codePaysResidence = $codePaysResidence;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCodePostal(?string $codePostal): Etablissements {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the coeff aubry2.
     *
     * @param float|null $coeffAubry2 The coeff aubry2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCoeffAubry2(?float $coeffAubry2): Etablissements {
        $this->coeffAubry2 = $coeffAubry2;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Etablissements Returns this Etablissements.
     */
    public function setComplement(?string $complement): Etablissements {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the compte acompte employe.
     *
     * @param bool|null $compteAcompteEmploye The compte acompte employe.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteAcompteEmploye(?bool $compteAcompteEmploye): Etablissements {
        $this->compteAcompteEmploye = $compteAcompteEmploye;
        return $this;
    }

    /**
     * Set the compte charge1.
     *
     * @param string|null $compteCharge1 The compte charge1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteCharge1(?string $compteCharge1): Etablissements {
        $this->compteCharge1 = $compteCharge1;
        return $this;
    }

    /**
     * Set the compte charge10.
     *
     * @param string|null $compteCharge10 The compte charge10.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteCharge10(?string $compteCharge10): Etablissements {
        $this->compteCharge10 = $compteCharge10;
        return $this;
    }

    /**
     * Set the compte charge11.
     *
     * @param string|null $compteCharge11 The compte charge11.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteCharge11(?string $compteCharge11): Etablissements {
        $this->compteCharge11 = $compteCharge11;
        return $this;
    }

    /**
     * Set the compte charge2.
     *
     * @param string|null $compteCharge2 The compte charge2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteCharge2(?string $compteCharge2): Etablissements {
        $this->compteCharge2 = $compteCharge2;
        return $this;
    }

    /**
     * Set the compte charge3.
     *
     * @param string|null $compteCharge3 The compte charge3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteCharge3(?string $compteCharge3): Etablissements {
        $this->compteCharge3 = $compteCharge3;
        return $this;
    }

    /**
     * Set the compte charge4.
     *
     * @param string|null $compteCharge4 The compte charge4.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteCharge4(?string $compteCharge4): Etablissements {
        $this->compteCharge4 = $compteCharge4;
        return $this;
    }

    /**
     * Set the compte charge5.
     *
     * @param string|null $compteCharge5 The compte charge5.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteCharge5(?string $compteCharge5): Etablissements {
        $this->compteCharge5 = $compteCharge5;
        return $this;
    }

    /**
     * Set the compte charge6.
     *
     * @param string|null $compteCharge6 The compte charge6.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteCharge6(?string $compteCharge6): Etablissements {
        $this->compteCharge6 = $compteCharge6;
        return $this;
    }

    /**
     * Set the compte charge7.
     *
     * @param string|null $compteCharge7 The compte charge7.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteCharge7(?string $compteCharge7): Etablissements {
        $this->compteCharge7 = $compteCharge7;
        return $this;
    }

    /**
     * Set the compte charge8.
     *
     * @param string|null $compteCharge8 The compte charge8.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteCharge8(?string $compteCharge8): Etablissements {
        $this->compteCharge8 = $compteCharge8;
        return $this;
    }

    /**
     * Set the compte charge9.
     *
     * @param string|null $compteCharge9 The compte charge9.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteCharge9(?string $compteCharge9): Etablissements {
        $this->compteCharge9 = $compteCharge9;
        return $this;
    }

    /**
     * Set the compte charge aen.
     *
     * @param string|null $compteChargeAen The compte charge aen.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteChargeAen(?string $compteChargeAen): Etablissements {
        $this->compteChargeAen = $compteChargeAen;
        return $this;
    }

    /**
     * Set the compte charge fc.
     *
     * @param string|null $compteChargeFc The compte charge fc.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteChargeFc(?string $compteChargeFc): Etablissements {
        $this->compteChargeFc = $compteChargeFc;
        return $this;
    }

    /**
     * Set the compte charge ijss.
     *
     * @param string|null $compteChargeIjss The compte charge ijss.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteChargeIjss(?string $compteChargeIjss): Etablissements {
        $this->compteChargeIjss = $compteChargeIjss;
        return $this;
    }

    /**
     * Set the compte charge indem cp.
     *
     * @param string|null $compteChargeIndemCp The compte charge indem cp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteChargeIndemCp(?string $compteChargeIndemCp): Etablissements {
        $this->compteChargeIndemCp = $compteChargeIndemCp;
        return $this;
    }

    /**
     * Set the compte saisie arret.
     *
     * @param string|null $compteSaisieArret The compte saisie arret.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteSaisieArret(?string $compteSaisieArret): Etablissements {
        $this->compteSaisieArret = $compteSaisieArret;
        return $this;
    }

    /**
     * Set the compte tiers1.
     *
     * @param string|null $compteTiers1 The compte tiers1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteTiers1(?string $compteTiers1): Etablissements {
        $this->compteTiers1 = $compteTiers1;
        return $this;
    }

    /**
     * Set the compte tiers2.
     *
     * @param string|null $compteTiers2 The compte tiers2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setCompteTiers2(?string $compteTiers2): Etablissements {
        $this->compteTiers2 = $compteTiers2;
        return $this;
    }

    /**
     * Set the dadsu code c colect1.
     *
     * @param string|null $dadsuCodeCColect1 The dadsu code c colect1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDadsuCodeCColect1(?string $dadsuCodeCColect1): Etablissements {
        $this->dadsuCodeCColect1 = $dadsuCodeCColect1;
        return $this;
    }

    /**
     * Set the dadsu code c colect2.
     *
     * @param string|null $dadsuCodeCColect2 The dadsu code c colect2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDadsuCodeCColect2(?string $dadsuCodeCColect2): Etablissements {
        $this->dadsuCodeCColect2 = $dadsuCodeCColect2;
        return $this;
    }

    /**
     * Set the dadsu code c colect3.
     *
     * @param string|null $dadsuCodeCColect3 The dadsu code c colect3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDadsuCodeCColect3(?string $dadsuCodeCColect3): Etablissements {
        $this->dadsuCodeCColect3 = $dadsuCodeCColect3;
        return $this;
    }

    /**
     * Set the dadsu code c colect4.
     *
     * @param string|null $dadsuCodeCColect4 The dadsu code c colect4.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDadsuCodeCColect4(?string $dadsuCodeCColect4): Etablissements {
        $this->dadsuCodeCColect4 = $dadsuCodeCColect4;
        return $this;
    }

    /**
     * Set the dadsu code c colect5.
     *
     * @param string|null $dadsuCodeCColect5 The dadsu code c colect5.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDadsuCodeCColect5(?string $dadsuCodeCColect5): Etablissements {
        $this->dadsuCodeCColect5 = $dadsuCodeCColect5;
        return $this;
    }

    /**
     * Set the dadsu code c colect6.
     *
     * @param string|null $dadsuCodeCColect6 The dadsu code c colect6.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDadsuCodeCColect6(?string $dadsuCodeCColect6): Etablissements {
        $this->dadsuCodeCColect6 = $dadsuCodeCColect6;
        return $this;
    }

    /**
     * Set the date allegement.
     *
     * @param DateTime|null $dateAllegement The date allegement.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDateAllegement(?DateTime $dateAllegement): Etablissements {
        $this->dateAllegement = $dateAllegement;
        return $this;
    }

    /**
     * Set the date ducs.
     *
     * @param DateTime|null $dateDucs The date ducs.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDateDucs(?DateTime $dateDucs): Etablissements {
        $this->dateDucs = $dateDucs;
        return $this;
    }

    /**
     * Set the date fin cospar.
     *
     * @param DateTime|null $dateFinCospar The date fin cospar.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDateFinCospar(?DateTime $dateFinCospar): Etablissements {
        $this->dateFinCospar = $dateFinCospar;
        return $this;
    }

    /**
     * Set the date fin cp.
     *
     * @param DateTime|null $dateFinCp The date fin cp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDateFinCp(?DateTime $dateFinCp): Etablissements {
        $this->dateFinCp = $dateFinCp;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDateModification(?DateTime $dateModification): Etablissements {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date publication.
     *
     * @param DateTime|null $datePublication The date publication.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDatePublication(?DateTime $datePublication): Etablissements {
        $this->datePublication = $datePublication;
        return $this;
    }

    /**
     * Set the debut envoi.
     *
     * @param DateTime|null $debutEnvoi The debut envoi.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDebutEnvoi(?DateTime $debutEnvoi): Etablissements {
        $this->debutEnvoi = $debutEnvoi;
        return $this;
    }

    /**
     * Set the detail salarie.
     *
     * @param bool|null $detailSalarie The detail salarie.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDetailSalarie(?bool $detailSalarie): Etablissements {
        $this->detailSalarie = $detailSalarie;
        return $this;
    }

    /**
     * Set the domaine activite.
     *
     * @param string|null $domaineActivite The domaine activite.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDomaineActivite(?string $domaineActivite): Etablissements {
        $this->domaineActivite = $domaineActivite;
        return $this;
    }

    /**
     * Set the dossier comptable.
     *
     * @param string|null $dossierComptable The dossier comptable.
     * @return Etablissements Returns this Etablissements.
     */
    public function setDossierComptable(?string $dossierComptable): Etablissements {
        $this->dossierComptable = $dossierComptable;
        return $this;
    }

    /**
     * Set the edition dif.
     *
     * @param bool|null $editionDif The edition dif.
     * @return Etablissements Returns this Etablissements.
     */
    public function setEditionDif(?bool $editionDif): Etablissements {
        $this->editionDif = $editionDif;
        return $this;
    }

    /**
     * Set the edition dif bul.
     *
     * @param string|null $editionDifBul The edition dif bul.
     * @return Etablissements Returns this Etablissements.
     */
    public function setEditionDifBul(?string $editionDifBul): Etablissements {
        $this->editionDifBul = $editionDifBul;
        return $this;
    }

    /**
     * Set the emetteur1.
     *
     * @param int|null $emetteur1 The emetteur1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setEmetteur1(?int $emetteur1): Etablissements {
        $this->emetteur1 = $emetteur1;
        return $this;
    }

    /**
     * Set the emetteur2.
     *
     * @param int|null $emetteur2 The emetteur2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setEmetteur2(?int $emetteur2): Etablissements {
        $this->emetteur2 = $emetteur2;
        return $this;
    }

    /**
     * Set the emetteur3.
     *
     * @param int|null $emetteur3 The emetteur3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setEmetteur3(?int $emetteur3): Etablissements {
        $this->emetteur3 = $emetteur3;
        return $this;
    }

    /**
     * Set the enseigne.
     *
     * @param string|null $enseigne The enseigne.
     * @return Etablissements Returns this Etablissements.
     */
    public function setEnseigne(?string $enseigne): Etablissements {
        $this->enseigne = $enseigne;
        return $this;
    }

    /**
     * Set the etab decl dadsu.
     *
     * @param bool|null $etabDeclDadsu The etab decl dadsu.
     * @return Etablissements Returns this Etablissements.
     */
    public function setEtabDeclDadsu(?bool $etabDeclDadsu): Etablissements {
        $this->etabDeclDadsu = $etabDeclDadsu;
        return $this;
    }

    /**
     * Set the exclure dadsu.
     *
     * @param bool|null $exclureDadsu The exclure dadsu.
     * @return Etablissements Returns this Etablissements.
     */
    public function setExclureDadsu(?bool $exclureDadsu): Etablissements {
        $this->exclureDadsu = $exclureDadsu;
        return $this;
    }

    /**
     * Set the exo lodeom renforcee.
     *
     * @param bool|null $exoLodeomRenforcee The exo lodeom renforcee.
     * @return Etablissements Returns this Etablissements.
     */
    public function setExoLodeomRenforcee(?bool $exoLodeomRenforcee): Etablissements {
        $this->exoLodeomRenforcee = $exoLodeomRenforcee;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string|null $fax The fax.
     * @return Etablissements Returns this Etablissements.
     */
    public function setFax(?string $fax): Etablissements {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the fin envoi.
     *
     * @param DateTime|null $finEnvoi The fin envoi.
     * @return Etablissements Returns this Etablissements.
     */
    public function setFinEnvoi(?DateTime $finEnvoi): Etablissements {
        $this->finEnvoi = $finEnvoi;
        return $this;
    }

    /**
     * Set the gere fraction etab.
     *
     * @param bool|null $gereFractionEtab The gere fraction etab.
     * @return Etablissements Returns this Etablissements.
     */
    public function setGereFractionEtab(?bool $gereFractionEtab): Etablissements {
        $this->gereFractionEtab = $gereFractionEtab;
        return $this;
    }

    /**
     * Set the gestion contingent.
     *
     * @param bool|null $gestionContingent The gestion contingent.
     * @return Etablissements Returns this Etablissements.
     */
    public function setGestionContingent(?bool $gestionContingent): Etablissements {
        $this->gestionContingent = $gestionContingent;
        return $this;
    }

    /**
     * Set the gestion ducs1.
     *
     * @param string|null $gestionDucs1 The gestion ducs1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setGestionDucs1(?string $gestionDucs1): Etablissements {
        $this->gestionDucs1 = $gestionDucs1;
        return $this;
    }

    /**
     * Set the gestion ducs2.
     *
     * @param string|null $gestionDucs2 The gestion ducs2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setGestionDucs2(?string $gestionDucs2): Etablissements {
        $this->gestionDucs2 = $gestionDucs2;
        return $this;
    }

    /**
     * Set the gestion jour ferie etab.
     *
     * @param bool|null $gestionJourFerieEtab The gestion jour ferie etab.
     * @return Etablissements Returns this Etablissements.
     */
    public function setGestionJourFerieEtab(?bool $gestionJourFerieEtab): Etablissements {
        $this->gestionJourFerieEtab = $gestionJourFerieEtab;
        return $this;
    }

    /**
     * Set the gestion repos comp.
     *
     * @param bool|null $gestionReposComp The gestion repos comp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setGestionReposComp(?bool $gestionReposComp): Etablissements {
        $this->gestionReposComp = $gestionReposComp;
        return $this;
    }

    /**
     * Set the gestion repos recup.
     *
     * @param bool|null $gestionReposRecup The gestion repos recup.
     * @return Etablissements Returns this Etablissements.
     */
    public function setGestionReposRecup(?bool $gestionReposRecup): Etablissements {
        $this->gestionReposRecup = $gestionReposRecup;
        return $this;
    }

    /**
     * Set the gestion repos remplace.
     *
     * @param bool|null $gestionReposRemplace The gestion repos remplace.
     * @return Etablissements Returns this Etablissements.
     */
    public function setGestionReposRemplace(?bool $gestionReposRemplace): Etablissements {
        $this->gestionReposRemplace = $gestionReposRemplace;
        return $this;
    }

    /**
     * Set the gestion rtt.
     *
     * @param bool|null $gestionRtt The gestion rtt.
     * @return Etablissements Returns this Etablissements.
     */
    public function setGestionRtt(?bool $gestionRtt): Etablissements {
        $this->gestionRtt = $gestionRtt;
        return $this;
    }

    /**
     * Set the gestion sem type.
     *
     * @param bool|null $gestionSemType The gestion sem type.
     * @return Etablissements Returns this Etablissements.
     */
    public function setGestionSemType(?bool $gestionSemType): Etablissements {
        $this->gestionSemType = $gestionSemType;
        return $this;
    }

    /**
     * Set the iban1.
     *
     * @param string|null $iban1 The iban1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setIban1(?string $iban1): Etablissements {
        $this->iban1 = $iban1;
        return $this;
    }

    /**
     * Set the iban id client1.
     *
     * @param string|null $ibanIdClient1 The iban id client1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setIbanIdClient1(?string $ibanIdClient1): Etablissements {
        $this->ibanIdClient1 = $ibanIdClient1;
        return $this;
    }

    /**
     * Set the inscrit rep metier.
     *
     * @param bool|null $inscritRepMetier The inscrit rep metier.
     * @return Etablissements Returns this Etablissements.
     */
    public function setInscritRepMetier(?bool $inscritRepMetier): Etablissements {
        $this->inscritRepMetier = $inscritRepMetier;
        return $this;
    }

    /**
     * Set the jour verse salaire.
     *
     * @param string|null $jourVerseSalaire The jour verse salaire.
     * @return Etablissements Returns this Etablissements.
     */
    public function setJourVerseSalaire(?string $jourVerseSalaire): Etablissements {
        $this->jourVerseSalaire = $jourVerseSalaire;
        return $this;
    }

    /**
     * Set the maintien intervient cp.
     *
     * @param bool|null $maintienIntervientCp The maintien intervient cp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMaintienIntervientCp(?bool $maintienIntervientCp): Etablissements {
        $this->maintienIntervientCp = $maintienIntervientCp;
        return $this;
    }

    /**
     * Set the maintien salaire.
     *
     * @param bool|null $maintienSalaire The maintien salaire.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMaintienSalaire(?bool $maintienSalaire): Etablissements {
        $this->maintienSalaire = $maintienSalaire;
        return $this;
    }

    /**
     * Set the maintien specifique.
     *
     * @param bool|null $maintienSpecifique The maintien specifique.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMaintienSpecifique(?bool $maintienSpecifique): Etablissements {
        $this->maintienSpecifique = $maintienSpecifique;
        return $this;
    }

    /**
     * Set the masque service employe.
     *
     * @param bool|null $masqueServiceEmploye The masque service employe.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMasqueServiceEmploye(?bool $masqueServiceEmploye): Etablissements {
        $this->masqueServiceEmploye = $masqueServiceEmploye;
        return $this;
    }

    /**
     * Set the methode cp.
     *
     * @param string|null $methodeCp The methode cp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMethodeCp(?string $methodeCp): Etablissements {
        $this->methodeCp = $methodeCp;
        return $this;
    }

    /**
     * Set the mois cloture cp.
     *
     * @param string|null $moisClotureCp The mois cloture cp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMoisClotureCp(?string $moisClotureCp): Etablissements {
        $this->moisClotureCp = $moisClotureCp;
        return $this;
    }

    /**
     * Set the mois cloture dif.
     *
     * @param string|null $moisClotureDif The mois cloture dif.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMoisClotureDif(?string $moisClotureDif): Etablissements {
        $this->moisClotureDif = $moisClotureDif;
        return $this;
    }

    /**
     * Set the mois cloture rtt.
     *
     * @param string|null $moisClotureRtt The mois cloture rtt.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMoisClotureRtt(?string $moisClotureRtt): Etablissements {
        $this->moisClotureRtt = $moisClotureRtt;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float|null $montant1 The montant1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMontant1(?float $montant1): Etablissements {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float|null $montant2 The montant2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMontant2(?float $montant2): Etablissements {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant3.
     *
     * @param float|null $montant3 The montant3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMontant3(?float $montant3): Etablissements {
        $this->montant3 = $montant3;
        return $this;
    }

    /**
     * Set the montant4.
     *
     * @param float|null $montant4 The montant4.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMontant4(?float $montant4): Etablissements {
        $this->montant4 = $montant4;
        return $this;
    }

    /**
     * Set the montant5.
     *
     * @param float|null $montant5 The montant5.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMontant5(?float $montant5): Etablissements {
        $this->montant5 = $montant5;
        return $this;
    }

    /**
     * Set the montant allegement.
     *
     * @param float|null $montantAllegement The montant allegement.
     * @return Etablissements Returns this Etablissements.
     */
    public function setMontantAllegement(?float $montantAllegement): Etablissements {
        $this->montantAllegement = $montantAllegement;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string|null $natureAnalytique The nature analytique.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNatureAnalytique(?string $natureAnalytique): Etablissements {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the nb h jour1.
     *
     * @param float|null $nbHJour1 The nb h jour1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbHJour1(?float $nbHJour1): Etablissements {
        $this->nbHJour1 = $nbHJour1;
        return $this;
    }

    /**
     * Set the nb h jour2.
     *
     * @param float|null $nbHJour2 The nb h jour2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbHJour2(?float $nbHJour2): Etablissements {
        $this->nbHJour2 = $nbHJour2;
        return $this;
    }

    /**
     * Set the nb h jour3.
     *
     * @param float|null $nbHJour3 The nb h jour3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbHJour3(?float $nbHJour3): Etablissements {
        $this->nbHJour3 = $nbHJour3;
        return $this;
    }

    /**
     * Set the nb h jour4.
     *
     * @param float|null $nbHJour4 The nb h jour4.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbHJour4(?float $nbHJour4): Etablissements {
        $this->nbHJour4 = $nbHJour4;
        return $this;
    }

    /**
     * Set the nb h jour5.
     *
     * @param float|null $nbHJour5 The nb h jour5.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbHJour5(?float $nbHJour5): Etablissements {
        $this->nbHJour5 = $nbHJour5;
        return $this;
    }

    /**
     * Set the nb h jour6.
     *
     * @param float|null $nbHJour6 The nb h jour6.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbHJour6(?float $nbHJour6): Etablissements {
        $this->nbHJour6 = $nbHJour6;
        return $this;
    }

    /**
     * Set the nb h jour7.
     *
     * @param float|null $nbHJour7 The nb h jour7.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbHJour7(?float $nbHJour7): Etablissements {
        $this->nbHJour7 = $nbHJour7;
        return $this;
    }

    /**
     * Set the nb hdif an.
     *
     * @param float|null $nbHdifAn The nb hdif an.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbHdifAn(?float $nbHdifAn): Etablissements {
        $this->nbHdifAn = $nbHdifAn;
        return $this;
    }

    /**
     * Set the nb heure trav mois.
     *
     * @param float|null $nbHeureTravMois The nb heure trav mois.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbHeureTravMois(?float $nbHeureTravMois): Etablissements {
        $this->nbHeureTravMois = $nbHeureTravMois;
        return $this;
    }

    /**
     * Set the nb jour base.
     *
     * @param float|null $nbJourBase The nb jour base.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbJourBase(?float $nbJourBase): Etablissements {
        $this->nbJourBase = $nbJourBase;
        return $this;
    }

    /**
     * Set the nb jour base cp.
     *
     * @param float|null $nbJourBaseCp The nb jour base cp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbJourBaseCp(?float $nbJourBaseCp): Etablissements {
        $this->nbJourBaseCp = $nbJourBaseCp;
        return $this;
    }

    /**
     * Set the nb jour cp acquis.
     *
     * @param float|null $nbJourCpAcquis The nb jour cp acquis.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbJourCpAcquis(?float $nbJourCpAcquis): Etablissements {
        $this->nbJourCpAcquis = $nbJourCpAcquis;
        return $this;
    }

    /**
     * Set the nb m ajout per.
     *
     * @param string|null $nbMAjoutPer The nb m ajout per.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbMAjoutPer(?string $nbMAjoutPer): Etablissements {
        $this->nbMAjoutPer = $nbMAjoutPer;
        return $this;
    }

    /**
     * Set the nb mois aubry1.
     *
     * @param float|null $nbMoisAubry1 The nb mois aubry1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbMoisAubry1(?float $nbMoisAubry1): Etablissements {
        $this->nbMoisAubry1 = $nbMoisAubry1;
        return $this;
    }

    /**
     * Set the nbh jour rtt.
     *
     * @param float|null $nbhJourRtt The nbh jour rtt.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNbhJourRtt(?float $nbhJourRtt): Etablissements {
        $this->nbhJourRtt = $nbhJourRtt;
        return $this;
    }

    /**
     * Set the ne pas activer loi fillon2003.
     *
     * @param bool|null $nePasActiverLoiFillon2003 The ne pas activer loi fillon2003.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNePasActiverLoiFillon2003(?bool $nePasActiverLoiFillon2003): Etablissements {
        $this->nePasActiverLoiFillon2003 = $nePasActiverLoiFillon2003;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNomVille(?string $nomVille): Etablissements {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom ville insee.
     *
     * @param string|null $nomVilleInsee The nom ville insee.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNomVilleInsee(?string $nomVilleInsee): Etablissements {
        $this->nomVilleInsee = $nomVilleInsee;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNomVoie(?string $nomVoie): Etablissements {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Etablissements Returns this Etablissements.
     */
    public function setNumVoie(?string $numVoie): Etablissements {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the opca dif.
     *
     * @param string|null $opcaDif The opca dif.
     * @return Etablissements Returns this Etablissements.
     */
    public function setOpcaDif(?string $opcaDif): Etablissements {
        $this->opcaDif = $opcaDif;
        return $this;
    }

    /**
     * Set the p lafond exo.
     *
     * @param float|null $pLafondExo The p lafond exo.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPLafondExo(?float $pLafondExo): Etablissements {
        $this->pLafondExo = $pLafondExo;
        return $this;
    }

    /**
     * Set the paie decalee.
     *
     * @param bool|null $paieDecalee The paie decalee.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPaieDecalee(?bool $paieDecalee): Etablissements {
        $this->paieDecalee = $paieDecalee;
        return $this;
    }

    /**
     * Set the plafond1 caisse1.
     *
     * @param float|null $plafond1Caisse1 The plafond1 caisse1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPlafond1Caisse1(?float $plafond1Caisse1): Etablissements {
        $this->plafond1Caisse1 = $plafond1Caisse1;
        return $this;
    }

    /**
     * Set the plafond1 caisse2.
     *
     * @param float|null $plafond1Caisse2 The plafond1 caisse2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPlafond1Caisse2(?float $plafond1Caisse2): Etablissements {
        $this->plafond1Caisse2 = $plafond1Caisse2;
        return $this;
    }

    /**
     * Set the plafond1 caisse3.
     *
     * @param float|null $plafond1Caisse3 The plafond1 caisse3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPlafond1Caisse3(?float $plafond1Caisse3): Etablissements {
        $this->plafond1Caisse3 = $plafond1Caisse3;
        return $this;
    }

    /**
     * Set the plafond2 caisse1.
     *
     * @param float|null $plafond2Caisse1 The plafond2 caisse1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPlafond2Caisse1(?float $plafond2Caisse1): Etablissements {
        $this->plafond2Caisse1 = $plafond2Caisse1;
        return $this;
    }

    /**
     * Set the plafond2 caisse2.
     *
     * @param float|null $plafond2Caisse2 The plafond2 caisse2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPlafond2Caisse2(?float $plafond2Caisse2): Etablissements {
        $this->plafond2Caisse2 = $plafond2Caisse2;
        return $this;
    }

    /**
     * Set the plafond2 caisse3.
     *
     * @param float|null $plafond2Caisse3 The plafond2 caisse3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPlafond2Caisse3(?float $plafond2Caisse3): Etablissements {
        $this->plafond2Caisse3 = $plafond2Caisse3;
        return $this;
    }

    /**
     * Set the pourcent bonif.
     *
     * @param float|null $pourcentBonif The pourcent bonif.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPourcentBonif(?float $pourcentBonif): Etablissements {
        $this->pourcentBonif = $pourcentBonif;
        return $this;
    }

    /**
     * Set the pourcent exo.
     *
     * @param float|null $pourcentExo The pourcent exo.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPourcentExo(?float $pourcentExo): Etablissements {
        $this->pourcentExo = $pourcentExo;
        return $this;
    }

    /**
     * Set the pourcent transport.
     *
     * @param float|null $pourcentTransport The pourcent transport.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPourcentTransport(?float $pourcentTransport): Etablissements {
        $this->pourcentTransport = $pourcentTransport;
        return $this;
    }

    /**
     * Set the pourcentage imp.
     *
     * @param float|null $pourcentageImp The pourcentage imp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPourcentageImp(?float $pourcentageImp): Etablissements {
        $this->pourcentageImp = $pourcentageImp;
        return $this;
    }

    /**
     * Set the prof spectacle.
     *
     * @param bool|null $profSpectacle The prof spectacle.
     * @return Etablissements Returns this Etablissements.
     */
    public function setProfSpectacle(?bool $profSpectacle): Etablissements {
        $this->profSpectacle = $profSpectacle;
        return $this;
    }

    /**
     * Set the profession.
     *
     * @param string|null $profession The profession.
     * @return Etablissements Returns this Etablissements.
     */
    public function setProfession(?string $profession): Etablissements {
        $this->profession = $profession;
        return $this;
    }

    /**
     * Set the prud type.
     *
     * @param string|null $prudType The prud type.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPrudType(?string $prudType): Etablissements {
        $this->prudType = $prudType;
        return $this;
    }

    /**
     * Set the prud type dadsu.
     *
     * @param string|null $prudTypeDadsu The prud type dadsu.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPrudTypeDadsu(?string $prudTypeDadsu): Etablissements {
        $this->prudTypeDadsu = $prudTypeDadsu;
        return $this;
    }

    /**
     * Set the publication.
     *
     * @param bool|null $publication The publication.
     * @return Etablissements Returns this Etablissements.
     */
    public function setPublication(?bool $publication): Etablissements {
        $this->publication = $publication;
        return $this;
    }

    /**
     * Set the qualite.
     *
     * @param string|null $qualite The qualite.
     * @return Etablissements Returns this Etablissements.
     */
    public function setQualite(?string $qualite): Etablissements {
        $this->qualite = $qualite;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string|null $raisonSociale The raison sociale.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRaisonSociale(?string $raisonSociale): Etablissements {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    /**
     * Set the reduction fillon.
     *
     * @param bool|null $reductionFillon The reduction fillon.
     * @return Etablissements Returns this Etablissements.
     */
    public function setReductionFillon(?bool $reductionFillon): Etablissements {
        $this->reductionFillon = $reductionFillon;
        return $this;
    }

    /**
     * Set the responsable.
     *
     * @param string|null $responsable The responsable.
     * @return Etablissements Returns this Etablissements.
     */
    public function setResponsable(?string $responsable): Etablissements {
        $this->responsable = $responsable;
        return $this;
    }

    /**
     * Set the rib1.
     *
     * @param string|null $rib1 The rib1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRib1(?string $rib1): Etablissements {
        $this->rib1 = $rib1;
        return $this;
    }

    /**
     * Set the rib2.
     *
     * @param string|null $rib2 The rib2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRib2(?string $rib2): Etablissements {
        $this->rib2 = $rib2;
        return $this;
    }

    /**
     * Set the rib3.
     *
     * @param string|null $rib3 The rib3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRib3(?string $rib3): Etablissements {
        $this->rib3 = $rib3;
        return $this;
    }

    /**
     * Set the rtt1.
     *
     * @param float|null $rtt1 The rtt1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRtt1(?float $rtt1): Etablissements {
        $this->rtt1 = $rtt1;
        return $this;
    }

    /**
     * Set the rtt10.
     *
     * @param float|null $rtt10 The rtt10.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRtt10(?float $rtt10): Etablissements {
        $this->rtt10 = $rtt10;
        return $this;
    }

    /**
     * Set the rtt11.
     *
     * @param float|null $rtt11 The rtt11.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRtt11(?float $rtt11): Etablissements {
        $this->rtt11 = $rtt11;
        return $this;
    }

    /**
     * Set the rtt12.
     *
     * @param float|null $rtt12 The rtt12.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRtt12(?float $rtt12): Etablissements {
        $this->rtt12 = $rtt12;
        return $this;
    }

    /**
     * Set the rtt2.
     *
     * @param float|null $rtt2 The rtt2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRtt2(?float $rtt2): Etablissements {
        $this->rtt2 = $rtt2;
        return $this;
    }

    /**
     * Set the rtt3.
     *
     * @param float|null $rtt3 The rtt3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRtt3(?float $rtt3): Etablissements {
        $this->rtt3 = $rtt3;
        return $this;
    }

    /**
     * Set the rtt4.
     *
     * @param float|null $rtt4 The rtt4.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRtt4(?float $rtt4): Etablissements {
        $this->rtt4 = $rtt4;
        return $this;
    }

    /**
     * Set the rtt5.
     *
     * @param float|null $rtt5 The rtt5.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRtt5(?float $rtt5): Etablissements {
        $this->rtt5 = $rtt5;
        return $this;
    }

    /**
     * Set the rtt6.
     *
     * @param float|null $rtt6 The rtt6.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRtt6(?float $rtt6): Etablissements {
        $this->rtt6 = $rtt6;
        return $this;
    }

    /**
     * Set the rtt7.
     *
     * @param float|null $rtt7 The rtt7.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRtt7(?float $rtt7): Etablissements {
        $this->rtt7 = $rtt7;
        return $this;
    }

    /**
     * Set the rtt8.
     *
     * @param float|null $rtt8 The rtt8.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRtt8(?float $rtt8): Etablissements {
        $this->rtt8 = $rtt8;
        return $this;
    }

    /**
     * Set the rtt9.
     *
     * @param float|null $rtt9 The rtt9.
     * @return Etablissements Returns this Etablissements.
     */
    public function setRtt9(?float $rtt9): Etablissements {
        $this->rtt9 = $rtt9;
        return $this;
    }

    /**
     * Set the siege dadsu.
     *
     * @param bool|null $siegeDadsu The siege dadsu.
     * @return Etablissements Returns this Etablissements.
     */
    public function setSiegeDadsu(?bool $siegeDadsu): Etablissements {
        $this->siegeDadsu = $siegeDadsu;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return Etablissements Returns this Etablissements.
     */
    public function setSiret(?string $siret): Etablissements {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the situation geo.
     *
     * @param string|null $situationGeo The situation geo.
     * @return Etablissements Returns this Etablissements.
     */
    public function setSituationGeo(?string $situationGeo): Etablissements {
        $this->situationGeo = $situationGeo;
        return $this;
    }

    /**
     * Set the subrogation.
     *
     * @param bool|null $subrogation The subrogation.
     * @return Etablissements Returns this Etablissements.
     */
    public function setSubrogation(?bool $subrogation): Etablissements {
        $this->subrogation = $subrogation;
        return $this;
    }

    /**
     * Set the suivi analytique.
     *
     * @param bool|null $suiviAnalytique The suivi analytique.
     * @return Etablissements Returns this Etablissements.
     */
    public function setSuiviAnalytique(?bool $suiviAnalytique): Etablissements {
        $this->suiviAnalytique = $suiviAnalytique;
        return $this;
    }

    /**
     * Set the taux actionsociale.
     *
     * @param float|null $tauxActionsociale The taux actionsociale.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxActionsociale(?float $tauxActionsociale): Etablissements {
        $this->tauxActionsociale = $tauxActionsociale;
        return $this;
    }

    /**
     * Set the taux construction.
     *
     * @param float|null $tauxConstruction The taux construction.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxConstruction(?float $tauxConstruction): Etablissements {
        $this->tauxConstruction = $tauxConstruction;
        return $this;
    }

    /**
     * Set the taux formation.
     *
     * @param float|null $tauxFormation The taux formation.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxFormation(?float $tauxFormation): Etablissements {
        $this->tauxFormation = $tauxFormation;
        return $this;
    }

    /**
     * Set the taux h sup1.
     *
     * @param float|null $tauxHSup1 The taux h sup1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxHSup1(?float $tauxHSup1): Etablissements {
        $this->tauxHSup1 = $tauxHSup1;
        return $this;
    }

    /**
     * Set the taux h sup2.
     *
     * @param float|null $tauxHSup2 The taux h sup2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxHSup2(?float $tauxHSup2): Etablissements {
        $this->tauxHSup2 = $tauxHSup2;
        return $this;
    }

    /**
     * Set the taux h sup3.
     *
     * @param float|null $tauxHSup3 The taux h sup3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxHSup3(?float $tauxHSup3): Etablissements {
        $this->tauxHSup3 = $tauxHSup3;
        return $this;
    }

    /**
     * Set the taux h sup4.
     *
     * @param float|null $tauxHSup4 The taux h sup4.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxHSup4(?float $tauxHSup4): Etablissements {
        $this->tauxHSup4 = $tauxHSup4;
        return $this;
    }

    /**
     * Set the taux h sup5.
     *
     * @param float|null $tauxHSup5 The taux h sup5.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxHSup5(?float $tauxHSup5): Etablissements {
        $this->tauxHSup5 = $tauxHSup5;
        return $this;
    }

    /**
     * Set the taux ret tr2 pp.
     *
     * @param float|null $tauxRetTr2Pp The taux ret tr2 pp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxRetTr2Pp(?float $tauxRetTr2Pp): Etablissements {
        $this->tauxRetTr2Pp = $tauxRetTr2Pp;
        return $this;
    }

    /**
     * Set the taux ret tr2 ps.
     *
     * @param float|null $tauxRetTr2Ps The taux ret tr2 ps.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxRetTr2Ps(?float $tauxRetTr2Ps): Etablissements {
        $this->tauxRetTr2Ps = $tauxRetTr2Ps;
        return $this;
    }

    /**
     * Set the taux ret tr app.
     *
     * @param float|null $tauxRetTrApp The taux ret tr app.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxRetTrApp(?float $tauxRetTrApp): Etablissements {
        $this->tauxRetTrApp = $tauxRetTrApp;
        return $this;
    }

    /**
     * Set the taux ret tr aps.
     *
     * @param float|null $tauxRetTrAps The taux ret tr aps.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxRetTrAps(?float $tauxRetTrAps): Etablissements {
        $this->tauxRetTrAps = $tauxRetTrAps;
        return $this;
    }

    /**
     * Set the taux ret tr bpp.
     *
     * @param float|null $tauxRetTrBpp The taux ret tr bpp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxRetTrBpp(?float $tauxRetTrBpp): Etablissements {
        $this->tauxRetTrBpp = $tauxRetTrBpp;
        return $this;
    }

    /**
     * Set the taux ret tr bps.
     *
     * @param float|null $tauxRetTrBps The taux ret tr bps.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxRetTrBps(?float $tauxRetTrBps): Etablissements {
        $this->tauxRetTrBps = $tauxRetTrBps;
        return $this;
    }

    /**
     * Set the taux ret tr cpp.
     *
     * @param float|null $tauxRetTrCpp The taux ret tr cpp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxRetTrCpp(?float $tauxRetTrCpp): Etablissements {
        $this->tauxRetTrCpp = $tauxRetTrCpp;
        return $this;
    }

    /**
     * Set the taux ret tr cps.
     *
     * @param float|null $tauxRetTrCps The taux ret tr cps.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxRetTrCps(?float $tauxRetTrCps): Etablissements {
        $this->tauxRetTrCps = $tauxRetTrCps;
        return $this;
    }

    /**
     * Set the taux ret tr dpp.
     *
     * @param float|null $tauxRetTrDpp The taux ret tr dpp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxRetTrDpp(?float $tauxRetTrDpp): Etablissements {
        $this->tauxRetTrDpp = $tauxRetTrDpp;
        return $this;
    }

    /**
     * Set the taux ret tr dps.
     *
     * @param float|null $tauxRetTrDps The taux ret tr dps.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxRetTrDps(?float $tauxRetTrDps): Etablissements {
        $this->tauxRetTrDps = $tauxRetTrDps;
        return $this;
    }

    /**
     * Set the taux sup formation.
     *
     * @param float|null $tauxSupFormation The taux sup formation.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxSupFormation(?float $tauxSupFormation): Etablissements {
        $this->tauxSupFormation = $tauxSupFormation;
        return $this;
    }

    /**
     * Set the taux taxe apprenti.
     *
     * @param float|null $tauxTaxeApprenti The taux taxe apprenti.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxTaxeApprenti(?float $tauxTaxeApprenti): Etablissements {
        $this->tauxTaxeApprenti = $tauxTaxeApprenti;
        return $this;
    }

    /**
     * Set the taux transport.
     *
     * @param float|null $tauxTransport The taux transport.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTauxTransport(?float $tauxTransport): Etablissements {
        $this->tauxTransport = $tauxTransport;
        return $this;
    }

    /**
     * Set the tds128.
     *
     * @param string|null $tds128 The tds128.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTds128(?string $tds128): Etablissements {
        $this->tds128 = $tds128;
        return $this;
    }

    /**
     * Set the tds19.
     *
     * @param string|null $tds19 The tds19.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTds19(?string $tds19): Etablissements {
        $this->tds19 = $tds19;
        return $this;
    }

    /**
     * Set the tds47.
     *
     * @param string|null $tds47 The tds47.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTds47(?string $tds47): Etablissements {
        $this->tds47 = $tds47;
        return $this;
    }

    /**
     * Set the tel.
     *
     * @param string|null $tel The tel.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTel(?string $tel): Etablissements {
        $this->tel = $tel;
        return $this;
    }

    /**
     * Set the tx sal decote.
     *
     * @param float|null $txSalDecote The tx sal decote.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTxSalDecote(?float $txSalDecote): Etablissements {
        $this->txSalDecote = $txSalDecote;
        return $this;
    }

    /**
     * Set the type base caisse1.
     *
     * @param string|null $typeBaseCaisse1 The type base caisse1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTypeBaseCaisse1(?string $typeBaseCaisse1): Etablissements {
        $this->typeBaseCaisse1 = $typeBaseCaisse1;
        return $this;
    }

    /**
     * Set the type base caisse2.
     *
     * @param string|null $typeBaseCaisse2 The type base caisse2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTypeBaseCaisse2(?string $typeBaseCaisse2): Etablissements {
        $this->typeBaseCaisse2 = $typeBaseCaisse2;
        return $this;
    }

    /**
     * Set the type base caisse3.
     *
     * @param string|null $typeBaseCaisse3 The type base caisse3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTypeBaseCaisse3(?string $typeBaseCaisse3): Etablissements {
        $this->typeBaseCaisse3 = $typeBaseCaisse3;
        return $this;
    }

    /**
     * Set the type bonif.
     *
     * @param string|null $typeBonif The type bonif.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTypeBonif(?string $typeBonif): Etablissements {
        $this->typeBonif = $typeBonif;
        return $this;
    }

    /**
     * Set the type domiciliation banque1.
     *
     * @param string|null $typeDomiciliationBanque1 The type domiciliation banque1.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTypeDomiciliationBanque1(?string $typeDomiciliationBanque1): Etablissements {
        $this->typeDomiciliationBanque1 = $typeDomiciliationBanque1;
        return $this;
    }

    /**
     * Set the type domiciliation banque2.
     *
     * @param string|null $typeDomiciliationBanque2 The type domiciliation banque2.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTypeDomiciliationBanque2(?string $typeDomiciliationBanque2): Etablissements {
        $this->typeDomiciliationBanque2 = $typeDomiciliationBanque2;
        return $this;
    }

    /**
     * Set the type domiciliation banque3.
     *
     * @param string|null $typeDomiciliationBanque3 The type domiciliation banque3.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTypeDomiciliationBanque3(?string $typeDomiciliationBanque3): Etablissements {
        $this->typeDomiciliationBanque3 = $typeDomiciliationBanque3;
        return $this;
    }

    /**
     * Set the type effectif.
     *
     * @param string|null $typeEffectif The type effectif.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTypeEffectif(?string $typeEffectif): Etablissements {
        $this->typeEffectif = $typeEffectif;
        return $this;
    }

    /**
     * Set the type maintien salaire.
     *
     * @param string|null $typeMaintienSalaire The type maintien salaire.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTypeMaintienSalaire(?string $typeMaintienSalaire): Etablissements {
        $this->typeMaintienSalaire = $typeMaintienSalaire;
        return $this;
    }

    /**
     * Set the type publication.
     *
     * @param string|null $typePublication The type publication.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTypePublication(?string $typePublication): Etablissements {
        $this->typePublication = $typePublication;
        return $this;
    }

    /**
     * Set the type saisie ab cp.
     *
     * @param string|null $typeSaisieAbCp The type saisie ab cp.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTypeSaisieAbCp(?string $typeSaisieAbCp): Etablissements {
        $this->typeSaisieAbCp = $typeSaisieAbCp;
        return $this;
    }

    /**
     * Set the type smic.
     *
     * @param string|null $typeSmic The type smic.
     * @return Etablissements Returns this Etablissements.
     */
    public function setTypeSmic(?string $typeSmic): Etablissements {
        $this->typeSmic = $typeSmic;
        return $this;
    }

    /**
     * Set the urssaf alsace.
     *
     * @param bool|null $urssafAlsace The urssaf alsace.
     * @return Etablissements Returns this Etablissements.
     */
    public function setUrssafAlsace(?bool $urssafAlsace): Etablissements {
        $this->urssafAlsace = $urssafAlsace;
        return $this;
    }

    /**
     * Set the zone specif.
     *
     * @param string|null $zoneSpecif The zone specif.
     * @return Etablissements Returns this Etablissements.
     */
    public function setZoneSpecif(?string $zoneSpecif): Etablissements {
        $this->zoneSpecif = $zoneSpecif;
        return $this;
    }
}
