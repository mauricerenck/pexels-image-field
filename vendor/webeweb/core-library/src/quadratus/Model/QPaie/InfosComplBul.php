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
 * Infos compl bul.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class InfosComplBul {

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
     * Annexe7 mutation.
     *
     * @var bool|null
     */
    private $annexe7Mutation;

    /**
     * Arbitrage auto.
     *
     * @var string|null
     */
    private $arbitrageAuto;

    /**
     * Assiette af.
     *
     * @var float|null
     */
    private $assietteAf;

    /**
     * Autre alleg emp.
     *
     * @var string|null
     */
    private $autreAllegEmp;

    /**
     * Brut al sans h sup.
     *
     * @var float|null
     */
    private $brutAlSansHSup;

    /**
     * Brut al sans h sup majo he.
     *
     * @var float|null
     */
    private $brutAlSansHSupMajoHe;

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
     * Caisse cp.
     *
     * @var bool|null
     */
    private $caisseCp;

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
     * Cddcdi.
     *
     * @var bool|null
     */
    private $cddcdi;

    /**
     * Centre analytique.
     *
     * @var string|null
     */
    private $centreAnalytique;

    /**
     * Classification.
     *
     * @var string|null
     */
    private $classification;

    /**
     * Code caisse cp.
     *
     * @var string|null
     */
    private $codeCaisseCp;

    /**
     * Code caract.
     *
     * @var string|null
     */
    private $codeCaract;

    /**
     * Code categ sal pourcent abat.
     *
     * @var string|null
     */
    private $codeCategSalPourcentAbat;

    /**
     * Code class btp.
     *
     * @var string|null
     */
    private $codeClassBtp;

    /**
     * Code contrat trav.
     *
     * @var string|null
     */
    private $codeContratTrav;

    /**
     * Code convention.
     *
     * @var string|null
     */
    private $codeConvention;

    /**
     * Code convention col.
     *
     * @var string|null
     */
    private $codeConventionCol;

    /**
     * Code emp remplace.
     *
     * @var string|null
     */
    private $codeEmpRemplace;

    /**
     * Code exo trav.
     *
     * @var string|null
     */
    private $codeExoTrav;

    /**
     * Code intit contrat trav.
     *
     * @var string|null
     */
    private $codeIntitContratTrav;

    /**
     * Code metier btp.
     *
     * @var string|null
     */
    private $codeMetierBtp;

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
     * Code regime at.
     *
     * @var string|null
     */
    private $codeRegimeAt;

    /**
     * Code regime base obl.
     *
     * @var string|null
     */
    private $codeRegimeBaseObl;

    /**
     * Code regime vieillesse.
     *
     * @var string|null
     */
    private $codeRegimeVieillesse;

    /**
     * Code retraite complementaire.
     *
     * @var string|null
     */
    private $codeRetraiteComplementaire;

    /**
     * Code situ admin.
     *
     * @var string|null
     */
    private $codeSituAdmin;

    /**
     * Code statut categ.
     *
     * @var string|null
     */
    private $codeStatutCateg;

    /**
     * Code statut categ retraite.
     *
     * @var string|null
     */
    private $codeStatutCategRetraite;

    /**
     * Code statut pro.
     *
     * @var string|null
     */
    private $codeStatutPro;

    /**
     * Code tuteur.
     *
     * @var string|null
     */
    private $codeTuteur;

    /**
     * Code unite temps travail.
     *
     * @var string|null
     */
    private $codeUniteTempsTravail;

    /**
     * Coeff convention.
     *
     * @var string|null
     */
    private $coeffConvention;

    /**
     * Coeff fillon moins20.
     *
     * @var bool|null
     */
    private $coeffFillonMoins20;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Complement pcs.
     *
     * @var string|null
     */
    private $complementPcs;

    /**
     * Contrat cne.
     *
     * @var bool|null
     */
    private $contratCne;

    /**
     * Cum base prevoyance comp.
     *
     * @var float|null
     */
    private $cumBasePrevoyanceComp;

    /**
     * Cum base retraite obli.
     *
     * @var float|null
     */
    private $cumBaseRetraiteObli;

    /**
     * Cum base retraite supp.
     *
     * @var float|null
     */
    private $cumBaseRetraiteSupp;

    /**
     * Cum mt forfait social20.
     *
     * @var float|null
     */
    private $cumMtForfaitSocial20;

    /**
     * Cum mt forfait social8.
     *
     * @var float|null
     */
    private $cumMtForfaitSocial8;

    /**
     * Cum pp fisc prev.
     *
     * @var float|null
     */
    private $cumPpFiscPrev;

    /**
     * Cum pp fisc ret.
     *
     * @var float|null
     */
    private $cumPpFiscRet;

    /**
     * Cum ps fisc prev.
     *
     * @var float|null
     */
    private $cumPsFiscPrev;

    /**
     * Cum ps fisc ret.
     *
     * @var float|null
     */
    private $cumPsFiscRet;

    /**
     * Cum smic m.
     *
     * @var float|null
     */
    private $cumSmicM;

    /**
     * Cum tr d1 caisse1.
     *
     * @var float|null
     */
    private $cumTrD1Caisse1;

    /**
     * Cum tr d1caisse2.
     *
     * @var float|null
     */
    private $cumTrD1caisse2;

    /**
     * Cum tr d1caisse3.
     *
     * @var float|null
     */
    private $cumTrD1caisse3;

    /**
     * Cum tr d caisse1.
     *
     * @var float|null
     */
    private $cumTrDCaisse1;

    /**
     * Cum tr dcaisse2.
     *
     * @var float|null
     */
    private $cumTrDcaisse2;

    /**
     * Cum tr dcaisse3.
     *
     * @var float|null
     */
    private $cumTrDcaisse3;

    /**
     * Cum tranche d.
     *
     * @var float|null
     */
    private $cumTrancheD;

    /**
     * Cum tranche d1.
     *
     * @var float|null
     */
    private $cumTrancheD1;

    /**
     * Date ancien branche.
     *
     * @var DateTime|null
     */
    private $dateAncienBranche;

    /**
     * Date ancien college.
     *
     * @var DateTime|null
     */
    private $dateAncienCollege;

    /**
     * Date ancien poste.
     *
     * @var DateTime|null
     */
    private $dateAncienPoste;

    /**
     * Date debut chom cdd.
     *
     * @var DateTime|null
     */
    private $dateDebutChomCdd;

    /**
     * Date debut contrat.
     *
     * @var DateTime|null
     */
    private $dateDebutContrat;

    /**
     * Date envoi mail.
     *
     * @var DateTime|null
     */
    private $dateEnvoiMail;

    /**
     * Date fin chom cdd.
     *
     * @var DateTime|null
     */
    private $dateFinChomCdd;

    /**
     * Date fin contrat.
     *
     * @var DateTime|null
     */
    private $dateFinContrat;

    /**
     * Date fin prev.
     *
     * @var DateTime|null
     */
    private $dateFinPrev;

    /**
     * Date rachat.
     *
     * @var DateTime|null
     */
    private $dateRachat;

    /**
     * Date renouv cdd.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd;

    /**
     * Date renouv cdd2.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd2;

    /**
     * Detache expatrie.
     *
     * @var string|null
     */
    private $detacheExpatrie;

    /**
     * Echelon.
     *
     * @var string|null
     */
    private $echelon;

    /**
     * Echelon convention col.
     *
     * @var string|null
     */
    private $echelonConventionCol;

    /**
     * Email.
     *
     * @var string|null
     */
    private $email;

    /**
     * Emploi.
     *
     * @var string|null
     */
    private $emploi;

    /**
     * Etab lieu travail.
     *
     * @var string|null
     */
    private $etabLieuTravail;

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
     * Exclure dsn.
     *
     * @var bool|null
     */
    private $exclureDsn;

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
     * Fraction etab.
     *
     * @var string|null
     */
    private $fractionEtab;

    /**
     * Gestion cp.
     *
     * @var bool|null
     */
    private $gestionCp;

    /**
     * Gestion hstepa.
     *
     * @var string|null
     */
    private $gestionHstepa;

    /**
     * Gestion mail bulletin.
     *
     * @var bool|null
     */
    private $gestionMailBulletin;

    /**
     * Gestion rtt.
     *
     * @var bool|null
     */
    private $gestionRtt;

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
     * Id lieu travail.
     *
     * @var string|null
     */
    private $idLieuTravail;

    /**
     * Indem cp msa.
     *
     * @var bool|null
     */
    private $indemCpMsa;

    /**
     * Indice.
     *
     * @var string|null
     */
    private $indice;

    /**
     * Indice categ.
     *
     * @var int|null
     */
    private $indiceCateg;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Interim indem cp fillon.
     *
     * @var bool|null
     */
    private $interimIndemCpFillon;

    /**
     * Libelle reintegration.
     *
     * @var string|null
     */
    private $libelleReintegration;

    /**
     * Lien reintegration.
     *
     * @var string|null
     */
    private $lienReintegration;

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
     * Montant avantage.
     *
     * @var float|null
     */
    private $montantAvantage;

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
     * Mt abs act part.
     *
     * @var float|null
     */
    private $mtAbsActPart;

    /**
     * Mt cotisation prev.
     *
     * @var float|null
     */
    private $mtCotisationPrev;

    /**
     * Mt cotisation retraite.
     *
     * @var float|null
     */
    private $mtCotisationRetraite;

    /**
     * Mt crds100.
     *
     * @var float|null
     */
    private $mtCrds100;

    /**
     * Mt csg100.
     *
     * @var float|null
     */
    private $mtCsg100;

    /**
     * Mt fisc frais sante.
     *
     * @var float|null
     */
    private $mtFiscFraisSante;

    /**
     * Mt fisc prev.
     *
     * @var float|null
     */
    private $mtFiscPrev;

    /**
     * Mt fisc retraite.
     *
     * @var float|null
     */
    private $mtFiscRetraite;

    /**
     * Mt forfait social20.
     *
     * @var float|null
     */
    private $mtForfaitSocial20;

    /**
     * Mt forfait social8.
     *
     * @var float|null
     */
    private $mtForfaitSocial8;

    /**
     * Mt iap.
     *
     * @var float|null
     */
    private $mtIap;

    /**
     * Mt journee cpn.
     *
     * @var float|null
     */
    private $mtJourneeCpn;

    /**
     * Mt journee cpn1.
     *
     * @var float|null
     */
    private $mtJourneeCpn1;

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
     * Nb30 renouv cdd.
     *
     * @var int|null
     */
    private $nb30RenouvCdd;

    /**
     * Nb h act part.
     *
     * @var float|null
     */
    private $nbHActPart;

    /**
     * Nb h act part indem.
     *
     * @var float|null
     */
    private $nbHActPartIndem;

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
     * Nb h contract.
     *
     * @var float|null
     */
    private $nbHContract;

    /**
     * Nb heure mois.
     *
     * @var float|null
     */
    private $nbHeureMois;

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
     * Ne pas publier web.
     *
     * @var bool|null
     */
    private $nePasPublierWeb;

    /**
     * Niveau.
     *
     * @var string|null
     */
    private $niveau;

    /**
     * Niveau convention col.
     *
     * @var string|null
     */
    private $niveauConventionCol;

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
     * Num evenement.
     *
     * @var int|null
     */
    private $numEvenement;

    /**
     * Num objet.
     *
     * @var string|null
     */
    private $numObjet;

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
     * Numero grille type.
     *
     * @var int|null
     */
    private $numeroGrilleType;

    /**
     * Part patron prev forfait social8.
     *
     * @var float|null
     */
    private $partPatronPrevForfaitSocial8;

    /**
     * Pas de reintegration.
     *
     * @var bool|null
     */
    private $pasDeReintegration;

    /**
     * Pas gestion dif.
     *
     * @var bool|null
     */
    private $pasGestionDif;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Position.
     *
     * @var string|null
     */
    private $position;

    /**
     * Position convention col.
     *
     * @var string|null
     */
    private $positionConventionCol;

    /**
     * Pourcent exo.
     *
     * @var float|null
     */
    private $pourcentExo;

    /**
     * Prem date entree.
     *
     * @var DateTime|null
     */
    private $premDateEntree;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Pss1 force.
     *
     * @var bool|null
     */
    private $pss1Force;

    /**
     * Qualification.
     *
     * @var string|null
     */
    private $qualification;

    /**
     * Reduction fillon.
     *
     * @var bool|null
     */
    private $reductionFillon;

    /**
     * Regle calcul.
     *
     * @var string|null
     */
    private $regleCalcul;

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
     * Salaire base.
     *
     * @var float|null
     */
    private $salaireBase;

    /**
     * Salaire reference.
     *
     * @var float|null
     */
    private $salaireReference;

    /**
     * Salaire retabli dsn.
     *
     * @var float|null
     */
    private $salaireRetabliDsn;

    /**
     * Salaire retabli dsn force.
     *
     * @var bool|null
     */
    private $salaireRetabliDsnForce;

    /**
     * Sans contrat.
     *
     * @var int|null
     */
    private $sansContrat;

    /**
     * Service.
     *
     * @var string|null
     */
    private $service;

    /**
     * Setp fillon.
     *
     * @var float|null
     */
    private $setpFillon;

    /**
     * Signe af.
     *
     * @var string|null
     */
    private $signeAf;

    /**
     * Siret lieu trav.
     *
     * @var string|null
     */
    private $siretLieuTrav;

    /**
     * Smic m fillon sans hs.
     *
     * @var float|null
     */
    private $smicMFillonSansHs;

    /**
     * Smic maf.
     *
     * @var float|null
     */
    private $smicMaf;

    /**
     * Smic mcice.
     *
     * @var float|null
     */
    private $smicMcice;

    /**
     * Subrogation.
     *
     * @var bool|null
     */
    private $subrogation;

    /**
     * Tds59.
     *
     * @var string|null
     */
    private $tds59;

    /**
     * Tds76.
     *
     * @var string|null
     */
    private $tds76;

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
     * Tepa moins20.
     *
     * @var bool|null
     */
    private $tepaMoins20;

    /**
     * Titre.
     *
     * @var string|null
     */
    private $titre;

    /**
     * Tot cot urssaf.
     *
     * @var float|null
     */
    private $totCotUrssaf;

    /**
     * Tr d1 caisse1.
     *
     * @var float|null
     */
    private $trD1Caisse1;

    /**
     * Tr d1caisse2.
     *
     * @var float|null
     */
    private $trD1caisse2;

    /**
     * Tr d1caisse3.
     *
     * @var float|null
     */
    private $trD1caisse3;

    /**
     * Tr d caisse1.
     *
     * @var float|null
     */
    private $trDCaisse1;

    /**
     * Tr dcaisse2.
     *
     * @var float|null
     */
    private $trDcaisse2;

    /**
     * Tr dcaisse3.
     *
     * @var float|null
     */
    private $trDcaisse3;

    /**
     * Tranche d.
     *
     * @var float|null
     */
    private $trancheD;

    /**
     * Tranche d1.
     *
     * @var float|null
     */
    private $trancheD1;

    /**
     * Type chom cdd.
     *
     * @var string|null
     */
    private $typeChomCdd;

    /**
     * Type contrat.
     *
     * @var string|null
     */
    private $typeContrat;

    /**
     * Type exo lodeom.
     *
     * @var string|null
     */
    private $typeExoLodeom;

    /**
     * Type he fillon.
     *
     * @var string|null
     */
    private $typeHeFillon;

    /**
     * Type maintien salaire.
     *
     * @var string|null
     */
    private $typeMaintienSalaire;

    /**
     * Type reduction fillon.
     *
     * @var string|null
     */
    private $typeReductionFillon;

    /**
     * Type reduction mayotte.
     *
     * @var string|null
     */
    private $typeReductionMayotte;

    /**
     * Type saisie ab cp.
     *
     * @var string|null
     */
    private $typeSaisieAbCp;

    /**
     * Type saisie chom intemp.
     *
     * @var string|null
     */
    private $typeSaisieChomIntemp;

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
     * Get the annexe7 mutation.
     *
     * @return bool|null Returns the annexe7 mutation.
     */
    public function getAnnexe7Mutation(): ?bool {
        return $this->annexe7Mutation;
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
     * Get the assiette af.
     *
     * @return float|null Returns the assiette af.
     */
    public function getAssietteAf(): ?float {
        return $this->assietteAf;
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
     * Get the brut al sans h sup.
     *
     * @return float|null Returns the brut al sans h sup.
     */
    public function getBrutAlSansHSup(): ?float {
        return $this->brutAlSansHSup;
    }

    /**
     * Get the brut al sans h sup majo he.
     *
     * @return float|null Returns the brut al sans h sup majo he.
     */
    public function getBrutAlSansHSupMajoHe(): ?float {
        return $this->brutAlSansHSupMajoHe;
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
     * Get the caisse cp.
     *
     * @return bool|null Returns the caisse cp.
     */
    public function getCaisseCp(): ?bool {
        return $this->caisseCp;
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
     * Get the cddcdi.
     *
     * @return bool|null Returns the cddcdi.
     */
    public function getCddcdi(): ?bool {
        return $this->cddcdi;
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
     * Get the classification.
     *
     * @return string|null Returns the classification.
     */
    public function getClassification(): ?string {
        return $this->classification;
    }

    /**
     * Get the code caisse cp.
     *
     * @return string|null Returns the code caisse cp.
     */
    public function getCodeCaisseCp(): ?string {
        return $this->codeCaisseCp;
    }

    /**
     * Get the code caract.
     *
     * @return string|null Returns the code caract.
     */
    public function getCodeCaract(): ?string {
        return $this->codeCaract;
    }

    /**
     * Get the code categ sal pourcent abat.
     *
     * @return string|null Returns the code categ sal pourcent abat.
     */
    public function getCodeCategSalPourcentAbat(): ?string {
        return $this->codeCategSalPourcentAbat;
    }

    /**
     * Get the code class btp.
     *
     * @return string|null Returns the code class btp.
     */
    public function getCodeClassBtp(): ?string {
        return $this->codeClassBtp;
    }

    /**
     * Get the code contrat trav.
     *
     * @return string|null Returns the code contrat trav.
     */
    public function getCodeContratTrav(): ?string {
        return $this->codeContratTrav;
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
     * Get the code convention col.
     *
     * @return string|null Returns the code convention col.
     */
    public function getCodeConventionCol(): ?string {
        return $this->codeConventionCol;
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
     * Get the code exo trav.
     *
     * @return string|null Returns the code exo trav.
     */
    public function getCodeExoTrav(): ?string {
        return $this->codeExoTrav;
    }

    /**
     * Get the code intit contrat trav.
     *
     * @return string|null Returns the code intit contrat trav.
     */
    public function getCodeIntitContratTrav(): ?string {
        return $this->codeIntitContratTrav;
    }

    /**
     * Get the code metier btp.
     *
     * @return string|null Returns the code metier btp.
     */
    public function getCodeMetierBtp(): ?string {
        return $this->codeMetierBtp;
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
     * Get the code regime at.
     *
     * @return string|null Returns the code regime at.
     */
    public function getCodeRegimeAt(): ?string {
        return $this->codeRegimeAt;
    }

    /**
     * Get the code regime base obl.
     *
     * @return string|null Returns the code regime base obl.
     */
    public function getCodeRegimeBaseObl(): ?string {
        return $this->codeRegimeBaseObl;
    }

    /**
     * Get the code regime vieillesse.
     *
     * @return string|null Returns the code regime vieillesse.
     */
    public function getCodeRegimeVieillesse(): ?string {
        return $this->codeRegimeVieillesse;
    }

    /**
     * Get the code retraite complementaire.
     *
     * @return string|null Returns the code retraite complementaire.
     */
    public function getCodeRetraiteComplementaire(): ?string {
        return $this->codeRetraiteComplementaire;
    }

    /**
     * Get the code situ admin.
     *
     * @return string|null Returns the code situ admin.
     */
    public function getCodeSituAdmin(): ?string {
        return $this->codeSituAdmin;
    }

    /**
     * Get the code statut categ.
     *
     * @return string|null Returns the code statut categ.
     */
    public function getCodeStatutCateg(): ?string {
        return $this->codeStatutCateg;
    }

    /**
     * Get the code statut categ retraite.
     *
     * @return string|null Returns the code statut categ retraite.
     */
    public function getCodeStatutCategRetraite(): ?string {
        return $this->codeStatutCategRetraite;
    }

    /**
     * Get the code statut pro.
     *
     * @return string|null Returns the code statut pro.
     */
    public function getCodeStatutPro(): ?string {
        return $this->codeStatutPro;
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
     * Get the code unite temps travail.
     *
     * @return string|null Returns the code unite temps travail.
     */
    public function getCodeUniteTempsTravail(): ?string {
        return $this->codeUniteTempsTravail;
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
     * Get the coeff fillon moins20.
     *
     * @return bool|null Returns the coeff fillon moins20.
     */
    public function getCoeffFillonMoins20(): ?bool {
        return $this->coeffFillonMoins20;
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
     * Get the complement pcs.
     *
     * @return string|null Returns the complement pcs.
     */
    public function getComplementPcs(): ?string {
        return $this->complementPcs;
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
     * Get the cum base prevoyance comp.
     *
     * @return float|null Returns the cum base prevoyance comp.
     */
    public function getCumBasePrevoyanceComp(): ?float {
        return $this->cumBasePrevoyanceComp;
    }

    /**
     * Get the cum base retraite obli.
     *
     * @return float|null Returns the cum base retraite obli.
     */
    public function getCumBaseRetraiteObli(): ?float {
        return $this->cumBaseRetraiteObli;
    }

    /**
     * Get the cum base retraite supp.
     *
     * @return float|null Returns the cum base retraite supp.
     */
    public function getCumBaseRetraiteSupp(): ?float {
        return $this->cumBaseRetraiteSupp;
    }

    /**
     * Get the cum mt forfait social20.
     *
     * @return float|null Returns the cum mt forfait social20.
     */
    public function getCumMtForfaitSocial20(): ?float {
        return $this->cumMtForfaitSocial20;
    }

    /**
     * Get the cum mt forfait social8.
     *
     * @return float|null Returns the cum mt forfait social8.
     */
    public function getCumMtForfaitSocial8(): ?float {
        return $this->cumMtForfaitSocial8;
    }

    /**
     * Get the cum pp fisc prev.
     *
     * @return float|null Returns the cum pp fisc prev.
     */
    public function getCumPpFiscPrev(): ?float {
        return $this->cumPpFiscPrev;
    }

    /**
     * Get the cum pp fisc ret.
     *
     * @return float|null Returns the cum pp fisc ret.
     */
    public function getCumPpFiscRet(): ?float {
        return $this->cumPpFiscRet;
    }

    /**
     * Get the cum ps fisc prev.
     *
     * @return float|null Returns the cum ps fisc prev.
     */
    public function getCumPsFiscPrev(): ?float {
        return $this->cumPsFiscPrev;
    }

    /**
     * Get the cum ps fisc ret.
     *
     * @return float|null Returns the cum ps fisc ret.
     */
    public function getCumPsFiscRet(): ?float {
        return $this->cumPsFiscRet;
    }

    /**
     * Get the cum smic m.
     *
     * @return float|null Returns the cum smic m.
     */
    public function getCumSmicM(): ?float {
        return $this->cumSmicM;
    }

    /**
     * Get the cum tr d1 caisse1.
     *
     * @return float|null Returns the cum tr d1 caisse1.
     */
    public function getCumTrD1Caisse1(): ?float {
        return $this->cumTrD1Caisse1;
    }

    /**
     * Get the cum tr d1caisse2.
     *
     * @return float|null Returns the cum tr d1caisse2.
     */
    public function getCumTrD1caisse2(): ?float {
        return $this->cumTrD1caisse2;
    }

    /**
     * Get the cum tr d1caisse3.
     *
     * @return float|null Returns the cum tr d1caisse3.
     */
    public function getCumTrD1caisse3(): ?float {
        return $this->cumTrD1caisse3;
    }

    /**
     * Get the cum tr d caisse1.
     *
     * @return float|null Returns the cum tr d caisse1.
     */
    public function getCumTrDCaisse1(): ?float {
        return $this->cumTrDCaisse1;
    }

    /**
     * Get the cum tr dcaisse2.
     *
     * @return float|null Returns the cum tr dcaisse2.
     */
    public function getCumTrDcaisse2(): ?float {
        return $this->cumTrDcaisse2;
    }

    /**
     * Get the cum tr dcaisse3.
     *
     * @return float|null Returns the cum tr dcaisse3.
     */
    public function getCumTrDcaisse3(): ?float {
        return $this->cumTrDcaisse3;
    }

    /**
     * Get the cum tranche d.
     *
     * @return float|null Returns the cum tranche d.
     */
    public function getCumTrancheD(): ?float {
        return $this->cumTrancheD;
    }

    /**
     * Get the cum tranche d1.
     *
     * @return float|null Returns the cum tranche d1.
     */
    public function getCumTrancheD1(): ?float {
        return $this->cumTrancheD1;
    }

    /**
     * Get the date ancien branche.
     *
     * @return DateTime|null Returns the date ancien branche.
     */
    public function getDateAncienBranche(): ?DateTime {
        return $this->dateAncienBranche;
    }

    /**
     * Get the date ancien college.
     *
     * @return DateTime|null Returns the date ancien college.
     */
    public function getDateAncienCollege(): ?DateTime {
        return $this->dateAncienCollege;
    }

    /**
     * Get the date ancien poste.
     *
     * @return DateTime|null Returns the date ancien poste.
     */
    public function getDateAncienPoste(): ?DateTime {
        return $this->dateAncienPoste;
    }

    /**
     * Get the date debut chom cdd.
     *
     * @return DateTime|null Returns the date debut chom cdd.
     */
    public function getDateDebutChomCdd(): ?DateTime {
        return $this->dateDebutChomCdd;
    }

    /**
     * Get the date debut contrat.
     *
     * @return DateTime|null Returns the date debut contrat.
     */
    public function getDateDebutContrat(): ?DateTime {
        return $this->dateDebutContrat;
    }

    /**
     * Get the date envoi mail.
     *
     * @return DateTime|null Returns the date envoi mail.
     */
    public function getDateEnvoiMail(): ?DateTime {
        return $this->dateEnvoiMail;
    }

    /**
     * Get the date fin chom cdd.
     *
     * @return DateTime|null Returns the date fin chom cdd.
     */
    public function getDateFinChomCdd(): ?DateTime {
        return $this->dateFinChomCdd;
    }

    /**
     * Get the date fin contrat.
     *
     * @return DateTime|null Returns the date fin contrat.
     */
    public function getDateFinContrat(): ?DateTime {
        return $this->dateFinContrat;
    }

    /**
     * Get the date fin prev.
     *
     * @return DateTime|null Returns the date fin prev.
     */
    public function getDateFinPrev(): ?DateTime {
        return $this->dateFinPrev;
    }

    /**
     * Get the date rachat.
     *
     * @return DateTime|null Returns the date rachat.
     */
    public function getDateRachat(): ?DateTime {
        return $this->dateRachat;
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
     * Get the date renouv cdd2.
     *
     * @return DateTime|null Returns the date renouv cdd2.
     */
    public function getDateRenouvCdd2(): ?DateTime {
        return $this->dateRenouvCdd2;
    }

    /**
     * Get the detache expatrie.
     *
     * @return string|null Returns the detache expatrie.
     */
    public function getDetacheExpatrie(): ?string {
        return $this->detacheExpatrie;
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
     * Get the echelon convention col.
     *
     * @return string|null Returns the echelon convention col.
     */
    public function getEchelonConventionCol(): ?string {
        return $this->echelonConventionCol;
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
     * Get the emploi.
     *
     * @return string|null Returns the emploi.
     */
    public function getEmploi(): ?string {
        return $this->emploi;
    }

    /**
     * Get the etab lieu travail.
     *
     * @return string|null Returns the etab lieu travail.
     */
    public function getEtabLieuTravail(): ?string {
        return $this->etabLieuTravail;
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
     * Get the exclure dsn.
     *
     * @return bool|null Returns the exclure dsn.
     */
    public function getExclureDsn(): ?bool {
        return $this->exclureDsn;
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
     * Get the fraction etab.
     *
     * @return string|null Returns the fraction etab.
     */
    public function getFractionEtab(): ?string {
        return $this->fractionEtab;
    }

    /**
     * Get the gestion cp.
     *
     * @return bool|null Returns the gestion cp.
     */
    public function getGestionCp(): ?bool {
        return $this->gestionCp;
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
     * Get the gestion mail bulletin.
     *
     * @return bool|null Returns the gestion mail bulletin.
     */
    public function getGestionMailBulletin(): ?bool {
        return $this->gestionMailBulletin;
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
     * Get the id lieu travail.
     *
     * @return string|null Returns the id lieu travail.
     */
    public function getIdLieuTravail(): ?string {
        return $this->idLieuTravail;
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
     * Get the indice.
     *
     * @return string|null Returns the indice.
     */
    public function getIndice(): ?string {
        return $this->indice;
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
     * Get the indice periode.
     *
     * @return int|null Returns the indice periode.
     */
    public function getIndicePeriode(): ?int {
        return $this->indicePeriode;
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
     * Get the libelle reintegration.
     *
     * @return string|null Returns the libelle reintegration.
     */
    public function getLibelleReintegration(): ?string {
        return $this->libelleReintegration;
    }

    /**
     * Get the lien reintegration.
     *
     * @return string|null Returns the lien reintegration.
     */
    public function getLienReintegration(): ?string {
        return $this->lienReintegration;
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
     * Get the montant avantage.
     *
     * @return float|null Returns the montant avantage.
     */
    public function getMontantAvantage(): ?float {
        return $this->montantAvantage;
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
     * Get the mt abs act part.
     *
     * @return float|null Returns the mt abs act part.
     */
    public function getMtAbsActPart(): ?float {
        return $this->mtAbsActPart;
    }

    /**
     * Get the mt cotisation prev.
     *
     * @return float|null Returns the mt cotisation prev.
     */
    public function getMtCotisationPrev(): ?float {
        return $this->mtCotisationPrev;
    }

    /**
     * Get the mt cotisation retraite.
     *
     * @return float|null Returns the mt cotisation retraite.
     */
    public function getMtCotisationRetraite(): ?float {
        return $this->mtCotisationRetraite;
    }

    /**
     * Get the mt crds100.
     *
     * @return float|null Returns the mt crds100.
     */
    public function getMtCrds100(): ?float {
        return $this->mtCrds100;
    }

    /**
     * Get the mt csg100.
     *
     * @return float|null Returns the mt csg100.
     */
    public function getMtCsg100(): ?float {
        return $this->mtCsg100;
    }

    /**
     * Get the mt fisc frais sante.
     *
     * @return float|null Returns the mt fisc frais sante.
     */
    public function getMtFiscFraisSante(): ?float {
        return $this->mtFiscFraisSante;
    }

    /**
     * Get the mt fisc prev.
     *
     * @return float|null Returns the mt fisc prev.
     */
    public function getMtFiscPrev(): ?float {
        return $this->mtFiscPrev;
    }

    /**
     * Get the mt fisc retraite.
     *
     * @return float|null Returns the mt fisc retraite.
     */
    public function getMtFiscRetraite(): ?float {
        return $this->mtFiscRetraite;
    }

    /**
     * Get the mt forfait social20.
     *
     * @return float|null Returns the mt forfait social20.
     */
    public function getMtForfaitSocial20(): ?float {
        return $this->mtForfaitSocial20;
    }

    /**
     * Get the mt forfait social8.
     *
     * @return float|null Returns the mt forfait social8.
     */
    public function getMtForfaitSocial8(): ?float {
        return $this->mtForfaitSocial8;
    }

    /**
     * Get the mt iap.
     *
     * @return float|null Returns the mt iap.
     */
    public function getMtIap(): ?float {
        return $this->mtIap;
    }

    /**
     * Get the mt journee cpn.
     *
     * @return float|null Returns the mt journee cpn.
     */
    public function getMtJourneeCpn(): ?float {
        return $this->mtJourneeCpn;
    }

    /**
     * Get the mt journee cpn1.
     *
     * @return float|null Returns the mt journee cpn1.
     */
    public function getMtJourneeCpn1(): ?float {
        return $this->mtJourneeCpn1;
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
     * Get the nb30 renouv cdd.
     *
     * @return int|null Returns the nb30 renouv cdd.
     */
    public function getNb30RenouvCdd(): ?int {
        return $this->nb30RenouvCdd;
    }

    /**
     * Get the nb h act part.
     *
     * @return float|null Returns the nb h act part.
     */
    public function getNbHActPart(): ?float {
        return $this->nbHActPart;
    }

    /**
     * Get the nb h act part indem.
     *
     * @return float|null Returns the nb h act part indem.
     */
    public function getNbHActPartIndem(): ?float {
        return $this->nbHActPartIndem;
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
     * Get the nb h contract.
     *
     * @return float|null Returns the nb h contract.
     */
    public function getNbHContract(): ?float {
        return $this->nbHContract;
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
     * Get the ne pas publier web.
     *
     * @return bool|null Returns the ne pas publier web.
     */
    public function getNePasPublierWeb(): ?bool {
        return $this->nePasPublierWeb;
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
     * Get the niveau convention col.
     *
     * @return string|null Returns the niveau convention col.
     */
    public function getNiveauConventionCol(): ?string {
        return $this->niveauConventionCol;
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
     * Get the num evenement.
     *
     * @return int|null Returns the num evenement.
     */
    public function getNumEvenement(): ?int {
        return $this->numEvenement;
    }

    /**
     * Get the num objet.
     *
     * @return string|null Returns the num objet.
     */
    public function getNumObjet(): ?string {
        return $this->numObjet;
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
     * Get the numero grille type.
     *
     * @return int|null Returns the numero grille type.
     */
    public function getNumeroGrilleType(): ?int {
        return $this->numeroGrilleType;
    }

    /**
     * Get the part patron prev forfait social8.
     *
     * @return float|null Returns the part patron prev forfait social8.
     */
    public function getPartPatronPrevForfaitSocial8(): ?float {
        return $this->partPatronPrevForfaitSocial8;
    }

    /**
     * Get the pas de reintegration.
     *
     * @return bool|null Returns the pas de reintegration.
     */
    public function getPasDeReintegration(): ?bool {
        return $this->pasDeReintegration;
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
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
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
     * Get the position convention col.
     *
     * @return string|null Returns the position convention col.
     */
    public function getPositionConventionCol(): ?string {
        return $this->positionConventionCol;
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
     * Get the prem date entree.
     *
     * @return DateTime|null Returns the prem date entree.
     */
    public function getPremDateEntree(): ?DateTime {
        return $this->premDateEntree;
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
     * Get the pss1 force.
     *
     * @return bool|null Returns the pss1 force.
     */
    public function getPss1Force(): ?bool {
        return $this->pss1Force;
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
     * Get the reduction fillon.
     *
     * @return bool|null Returns the reduction fillon.
     */
    public function getReductionFillon(): ?bool {
        return $this->reductionFillon;
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
     * Get the salaire base.
     *
     * @return float|null Returns the salaire base.
     */
    public function getSalaireBase(): ?float {
        return $this->salaireBase;
    }

    /**
     * Get the salaire reference.
     *
     * @return float|null Returns the salaire reference.
     */
    public function getSalaireReference(): ?float {
        return $this->salaireReference;
    }

    /**
     * Get the salaire retabli dsn.
     *
     * @return float|null Returns the salaire retabli dsn.
     */
    public function getSalaireRetabliDsn(): ?float {
        return $this->salaireRetabliDsn;
    }

    /**
     * Get the salaire retabli dsn force.
     *
     * @return bool|null Returns the salaire retabli dsn force.
     */
    public function getSalaireRetabliDsnForce(): ?bool {
        return $this->salaireRetabliDsnForce;
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
     * Get the service.
     *
     * @return string|null Returns the service.
     */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Get the setp fillon.
     *
     * @return float|null Returns the setp fillon.
     */
    public function getSetpFillon(): ?float {
        return $this->setpFillon;
    }

    /**
     * Get the signe af.
     *
     * @return string|null Returns the signe af.
     */
    public function getSigneAf(): ?string {
        return $this->signeAf;
    }

    /**
     * Get the siret lieu trav.
     *
     * @return string|null Returns the siret lieu trav.
     */
    public function getSiretLieuTrav(): ?string {
        return $this->siretLieuTrav;
    }

    /**
     * Get the smic m fillon sans hs.
     *
     * @return float|null Returns the smic m fillon sans hs.
     */
    public function getSmicMFillonSansHs(): ?float {
        return $this->smicMFillonSansHs;
    }

    /**
     * Get the smic maf.
     *
     * @return float|null Returns the smic maf.
     */
    public function getSmicMaf(): ?float {
        return $this->smicMaf;
    }

    /**
     * Get the smic mcice.
     *
     * @return float|null Returns the smic mcice.
     */
    public function getSmicMcice(): ?float {
        return $this->smicMcice;
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
     * Get the tds59.
     *
     * @return string|null Returns the tds59.
     */
    public function getTds59(): ?string {
        return $this->tds59;
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
     * Get the tepa moins20.
     *
     * @return bool|null Returns the tepa moins20.
     */
    public function getTepaMoins20(): ?bool {
        return $this->tepaMoins20;
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
     * Get the tot cot urssaf.
     *
     * @return float|null Returns the tot cot urssaf.
     */
    public function getTotCotUrssaf(): ?float {
        return $this->totCotUrssaf;
    }

    /**
     * Get the tr d1 caisse1.
     *
     * @return float|null Returns the tr d1 caisse1.
     */
    public function getTrD1Caisse1(): ?float {
        return $this->trD1Caisse1;
    }

    /**
     * Get the tr d1caisse2.
     *
     * @return float|null Returns the tr d1caisse2.
     */
    public function getTrD1caisse2(): ?float {
        return $this->trD1caisse2;
    }

    /**
     * Get the tr d1caisse3.
     *
     * @return float|null Returns the tr d1caisse3.
     */
    public function getTrD1caisse3(): ?float {
        return $this->trD1caisse3;
    }

    /**
     * Get the tr d caisse1.
     *
     * @return float|null Returns the tr d caisse1.
     */
    public function getTrDCaisse1(): ?float {
        return $this->trDCaisse1;
    }

    /**
     * Get the tr dcaisse2.
     *
     * @return float|null Returns the tr dcaisse2.
     */
    public function getTrDcaisse2(): ?float {
        return $this->trDcaisse2;
    }

    /**
     * Get the tr dcaisse3.
     *
     * @return float|null Returns the tr dcaisse3.
     */
    public function getTrDcaisse3(): ?float {
        return $this->trDcaisse3;
    }

    /**
     * Get the tranche d.
     *
     * @return float|null Returns the tranche d.
     */
    public function getTrancheD(): ?float {
        return $this->trancheD;
    }

    /**
     * Get the tranche d1.
     *
     * @return float|null Returns the tranche d1.
     */
    public function getTrancheD1(): ?float {
        return $this->trancheD1;
    }

    /**
     * Get the type chom cdd.
     *
     * @return string|null Returns the type chom cdd.
     */
    public function getTypeChomCdd(): ?string {
        return $this->typeChomCdd;
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
     * Get the type exo lodeom.
     *
     * @return string|null Returns the type exo lodeom.
     */
    public function getTypeExoLodeom(): ?string {
        return $this->typeExoLodeom;
    }

    /**
     * Get the type he fillon.
     *
     * @return string|null Returns the type he fillon.
     */
    public function getTypeHeFillon(): ?string {
        return $this->typeHeFillon;
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
     * Get the type reduction fillon.
     *
     * @return string|null Returns the type reduction fillon.
     */
    public function getTypeReductionFillon(): ?string {
        return $this->typeReductionFillon;
    }

    /**
     * Get the type reduction mayotte.
     *
     * @return string|null Returns the type reduction mayotte.
     */
    public function getTypeReductionMayotte(): ?string {
        return $this->typeReductionMayotte;
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
     * Get the type saisie chom intemp.
     *
     * @return string|null Returns the type saisie chom intemp.
     */
    public function getTypeSaisieChomIntemp(): ?string {
        return $this->typeSaisieChomIntemp;
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
     * Set the active sal min conv.
     *
     * @param bool|null $activeSalMinConv The active sal min conv.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setActiveSalMinConv(?bool $activeSalMinConv): InfosComplBul {
        $this->activeSalMinConv = $activeSalMinConv;
        return $this;
    }

    /**
     * Set the active smic.
     *
     * @param bool|null $activeSmic The active smic.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setActiveSmic(?bool $activeSmic): InfosComplBul {
        $this->activeSmic = $activeSmic;
        return $this;
    }

    /**
     * Set the aen logement.
     *
     * @param bool|null $aenLogement The aen logement.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setAenLogement(?bool $aenLogement): InfosComplBul {
        $this->aenLogement = $aenLogement;
        return $this;
    }

    /**
     * Set the alleg particulier emp.
     *
     * @param string|null $allegParticulierEmp The alleg particulier emp.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setAllegParticulierEmp(?string $allegParticulierEmp): InfosComplBul {
        $this->allegParticulierEmp = $allegParticulierEmp;
        return $this;
    }

    /**
     * Set the annexe7 mutation.
     *
     * @param bool|null $annexe7Mutation The annexe7 mutation.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setAnnexe7Mutation(?bool $annexe7Mutation): InfosComplBul {
        $this->annexe7Mutation = $annexe7Mutation;
        return $this;
    }

    /**
     * Set the arbitrage auto.
     *
     * @param string|null $arbitrageAuto The arbitrage auto.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setArbitrageAuto(?string $arbitrageAuto): InfosComplBul {
        $this->arbitrageAuto = $arbitrageAuto;
        return $this;
    }

    /**
     * Set the assiette af.
     *
     * @param float|null $assietteAf The assiette af.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setAssietteAf(?float $assietteAf): InfosComplBul {
        $this->assietteAf = $assietteAf;
        return $this;
    }

    /**
     * Set the autre alleg emp.
     *
     * @param string|null $autreAllegEmp The autre alleg emp.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setAutreAllegEmp(?string $autreAllegEmp): InfosComplBul {
        $this->autreAllegEmp = $autreAllegEmp;
        return $this;
    }

    /**
     * Set the brut al sans h sup.
     *
     * @param float|null $brutAlSansHSup The brut al sans h sup.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setBrutAlSansHSup(?float $brutAlSansHSup): InfosComplBul {
        $this->brutAlSansHSup = $brutAlSansHSup;
        return $this;
    }

    /**
     * Set the brut al sans h sup majo he.
     *
     * @param float|null $brutAlSansHSupMajoHe The brut al sans h sup majo he.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setBrutAlSansHSupMajoHe(?float $brutAlSansHSupMajoHe): InfosComplBul {
        $this->brutAlSansHSupMajoHe = $brutAlSansHSupMajoHe;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setBtq(?string $btq): InfosComplBul {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): InfosComplBul {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the caisse cp.
     *
     * @param bool|null $caisseCp The caisse cp.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCaisseCp(?bool $caisseCp): InfosComplBul {
        $this->caisseCp = $caisseCp;
        return $this;
    }

    /**
     * Set the categ population.
     *
     * @param string|null $categPopulation The categ population.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCategPopulation(?string $categPopulation): InfosComplBul {
        $this->categPopulation = $categPopulation;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param string|null $categSalarie The categ salarie.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCategSalarie(?string $categSalarie): InfosComplBul {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the cddcdi.
     *
     * @param bool|null $cddcdi The cddcdi.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCddcdi(?bool $cddcdi): InfosComplBul {
        $this->cddcdi = $cddcdi;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string|null $centreAnalytique The centre analytique.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCentreAnalytique(?string $centreAnalytique): InfosComplBul {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the classification.
     *
     * @param string|null $classification The classification.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setClassification(?string $classification): InfosComplBul {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Set the code caisse cp.
     *
     * @param string|null $codeCaisseCp The code caisse cp.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeCaisseCp(?string $codeCaisseCp): InfosComplBul {
        $this->codeCaisseCp = $codeCaisseCp;
        return $this;
    }

    /**
     * Set the code caract.
     *
     * @param string|null $codeCaract The code caract.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeCaract(?string $codeCaract): InfosComplBul {
        $this->codeCaract = $codeCaract;
        return $this;
    }

    /**
     * Set the code categ sal pourcent abat.
     *
     * @param string|null $codeCategSalPourcentAbat The code categ sal pourcent abat.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeCategSalPourcentAbat(?string $codeCategSalPourcentAbat): InfosComplBul {
        $this->codeCategSalPourcentAbat = $codeCategSalPourcentAbat;
        return $this;
    }

    /**
     * Set the code class btp.
     *
     * @param string|null $codeClassBtp The code class btp.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeClassBtp(?string $codeClassBtp): InfosComplBul {
        $this->codeClassBtp = $codeClassBtp;
        return $this;
    }

    /**
     * Set the code contrat trav.
     *
     * @param string|null $codeContratTrav The code contrat trav.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeContratTrav(?string $codeContratTrav): InfosComplBul {
        $this->codeContratTrav = $codeContratTrav;
        return $this;
    }

    /**
     * Set the code convention.
     *
     * @param string|null $codeConvention The code convention.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeConvention(?string $codeConvention): InfosComplBul {
        $this->codeConvention = $codeConvention;
        return $this;
    }

    /**
     * Set the code convention col.
     *
     * @param string|null $codeConventionCol The code convention col.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeConventionCol(?string $codeConventionCol): InfosComplBul {
        $this->codeConventionCol = $codeConventionCol;
        return $this;
    }

    /**
     * Set the code emp remplace.
     *
     * @param string|null $codeEmpRemplace The code emp remplace.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeEmpRemplace(?string $codeEmpRemplace): InfosComplBul {
        $this->codeEmpRemplace = $codeEmpRemplace;
        return $this;
    }

    /**
     * Set the code exo trav.
     *
     * @param string|null $codeExoTrav The code exo trav.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeExoTrav(?string $codeExoTrav): InfosComplBul {
        $this->codeExoTrav = $codeExoTrav;
        return $this;
    }

    /**
     * Set the code intit contrat trav.
     *
     * @param string|null $codeIntitContratTrav The code intit contrat trav.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeIntitContratTrav(?string $codeIntitContratTrav): InfosComplBul {
        $this->codeIntitContratTrav = $codeIntitContratTrav;
        return $this;
    }

    /**
     * Set the code metier btp.
     *
     * @param string|null $codeMetierBtp The code metier btp.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeMetierBtp(?string $codeMetierBtp): InfosComplBul {
        $this->codeMetierBtp = $codeMetierBtp;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string|null $codeOfficielCommune The code officiel commune.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeOfficielCommune(?string $codeOfficielCommune): InfosComplBul {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodePostal(?string $codePostal): InfosComplBul {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code regime at.
     *
     * @param string|null $codeRegimeAt The code regime at.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeRegimeAt(?string $codeRegimeAt): InfosComplBul {
        $this->codeRegimeAt = $codeRegimeAt;
        return $this;
    }

    /**
     * Set the code regime base obl.
     *
     * @param string|null $codeRegimeBaseObl The code regime base obl.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeRegimeBaseObl(?string $codeRegimeBaseObl): InfosComplBul {
        $this->codeRegimeBaseObl = $codeRegimeBaseObl;
        return $this;
    }

    /**
     * Set the code regime vieillesse.
     *
     * @param string|null $codeRegimeVieillesse The code regime vieillesse.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeRegimeVieillesse(?string $codeRegimeVieillesse): InfosComplBul {
        $this->codeRegimeVieillesse = $codeRegimeVieillesse;
        return $this;
    }

    /**
     * Set the code retraite complementaire.
     *
     * @param string|null $codeRetraiteComplementaire The code retraite complementaire.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeRetraiteComplementaire(?string $codeRetraiteComplementaire): InfosComplBul {
        $this->codeRetraiteComplementaire = $codeRetraiteComplementaire;
        return $this;
    }

    /**
     * Set the code situ admin.
     *
     * @param string|null $codeSituAdmin The code situ admin.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeSituAdmin(?string $codeSituAdmin): InfosComplBul {
        $this->codeSituAdmin = $codeSituAdmin;
        return $this;
    }

    /**
     * Set the code statut categ.
     *
     * @param string|null $codeStatutCateg The code statut categ.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeStatutCateg(?string $codeStatutCateg): InfosComplBul {
        $this->codeStatutCateg = $codeStatutCateg;
        return $this;
    }

    /**
     * Set the code statut categ retraite.
     *
     * @param string|null $codeStatutCategRetraite The code statut categ retraite.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeStatutCategRetraite(?string $codeStatutCategRetraite): InfosComplBul {
        $this->codeStatutCategRetraite = $codeStatutCategRetraite;
        return $this;
    }

    /**
     * Set the code statut pro.
     *
     * @param string|null $codeStatutPro The code statut pro.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeStatutPro(?string $codeStatutPro): InfosComplBul {
        $this->codeStatutPro = $codeStatutPro;
        return $this;
    }

    /**
     * Set the code tuteur.
     *
     * @param string|null $codeTuteur The code tuteur.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeTuteur(?string $codeTuteur): InfosComplBul {
        $this->codeTuteur = $codeTuteur;
        return $this;
    }

    /**
     * Set the code unite temps travail.
     *
     * @param string|null $codeUniteTempsTravail The code unite temps travail.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCodeUniteTempsTravail(?string $codeUniteTempsTravail): InfosComplBul {
        $this->codeUniteTempsTravail = $codeUniteTempsTravail;
        return $this;
    }

    /**
     * Set the coeff convention.
     *
     * @param string|null $coeffConvention The coeff convention.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCoeffConvention(?string $coeffConvention): InfosComplBul {
        $this->coeffConvention = $coeffConvention;
        return $this;
    }

    /**
     * Set the coeff fillon moins20.
     *
     * @param bool|null $coeffFillonMoins20 The coeff fillon moins20.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCoeffFillonMoins20(?bool $coeffFillonMoins20): InfosComplBul {
        $this->coeffFillonMoins20 = $coeffFillonMoins20;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setComplement(?string $complement): InfosComplBul {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the complement pcs.
     *
     * @param string|null $complementPcs The complement pcs.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setComplementPcs(?string $complementPcs): InfosComplBul {
        $this->complementPcs = $complementPcs;
        return $this;
    }

    /**
     * Set the contrat cne.
     *
     * @param bool|null $contratCne The contrat cne.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setContratCne(?bool $contratCne): InfosComplBul {
        $this->contratCne = $contratCne;
        return $this;
    }

    /**
     * Set the cum base prevoyance comp.
     *
     * @param float|null $cumBasePrevoyanceComp The cum base prevoyance comp.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumBasePrevoyanceComp(?float $cumBasePrevoyanceComp): InfosComplBul {
        $this->cumBasePrevoyanceComp = $cumBasePrevoyanceComp;
        return $this;
    }

    /**
     * Set the cum base retraite obli.
     *
     * @param float|null $cumBaseRetraiteObli The cum base retraite obli.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumBaseRetraiteObli(?float $cumBaseRetraiteObli): InfosComplBul {
        $this->cumBaseRetraiteObli = $cumBaseRetraiteObli;
        return $this;
    }

    /**
     * Set the cum base retraite supp.
     *
     * @param float|null $cumBaseRetraiteSupp The cum base retraite supp.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumBaseRetraiteSupp(?float $cumBaseRetraiteSupp): InfosComplBul {
        $this->cumBaseRetraiteSupp = $cumBaseRetraiteSupp;
        return $this;
    }

    /**
     * Set the cum mt forfait social20.
     *
     * @param float|null $cumMtForfaitSocial20 The cum mt forfait social20.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumMtForfaitSocial20(?float $cumMtForfaitSocial20): InfosComplBul {
        $this->cumMtForfaitSocial20 = $cumMtForfaitSocial20;
        return $this;
    }

    /**
     * Set the cum mt forfait social8.
     *
     * @param float|null $cumMtForfaitSocial8 The cum mt forfait social8.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumMtForfaitSocial8(?float $cumMtForfaitSocial8): InfosComplBul {
        $this->cumMtForfaitSocial8 = $cumMtForfaitSocial8;
        return $this;
    }

    /**
     * Set the cum pp fisc prev.
     *
     * @param float|null $cumPpFiscPrev The cum pp fisc prev.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumPpFiscPrev(?float $cumPpFiscPrev): InfosComplBul {
        $this->cumPpFiscPrev = $cumPpFiscPrev;
        return $this;
    }

    /**
     * Set the cum pp fisc ret.
     *
     * @param float|null $cumPpFiscRet The cum pp fisc ret.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumPpFiscRet(?float $cumPpFiscRet): InfosComplBul {
        $this->cumPpFiscRet = $cumPpFiscRet;
        return $this;
    }

    /**
     * Set the cum ps fisc prev.
     *
     * @param float|null $cumPsFiscPrev The cum ps fisc prev.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumPsFiscPrev(?float $cumPsFiscPrev): InfosComplBul {
        $this->cumPsFiscPrev = $cumPsFiscPrev;
        return $this;
    }

    /**
     * Set the cum ps fisc ret.
     *
     * @param float|null $cumPsFiscRet The cum ps fisc ret.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumPsFiscRet(?float $cumPsFiscRet): InfosComplBul {
        $this->cumPsFiscRet = $cumPsFiscRet;
        return $this;
    }

    /**
     * Set the cum smic m.
     *
     * @param float|null $cumSmicM The cum smic m.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumSmicM(?float $cumSmicM): InfosComplBul {
        $this->cumSmicM = $cumSmicM;
        return $this;
    }

    /**
     * Set the cum tr d1 caisse1.
     *
     * @param float|null $cumTrD1Caisse1 The cum tr d1 caisse1.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumTrD1Caisse1(?float $cumTrD1Caisse1): InfosComplBul {
        $this->cumTrD1Caisse1 = $cumTrD1Caisse1;
        return $this;
    }

    /**
     * Set the cum tr d1caisse2.
     *
     * @param float|null $cumTrD1caisse2 The cum tr d1caisse2.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumTrD1caisse2(?float $cumTrD1caisse2): InfosComplBul {
        $this->cumTrD1caisse2 = $cumTrD1caisse2;
        return $this;
    }

    /**
     * Set the cum tr d1caisse3.
     *
     * @param float|null $cumTrD1caisse3 The cum tr d1caisse3.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumTrD1caisse3(?float $cumTrD1caisse3): InfosComplBul {
        $this->cumTrD1caisse3 = $cumTrD1caisse3;
        return $this;
    }

    /**
     * Set the cum tr d caisse1.
     *
     * @param float|null $cumTrDCaisse1 The cum tr d caisse1.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumTrDCaisse1(?float $cumTrDCaisse1): InfosComplBul {
        $this->cumTrDCaisse1 = $cumTrDCaisse1;
        return $this;
    }

    /**
     * Set the cum tr dcaisse2.
     *
     * @param float|null $cumTrDcaisse2 The cum tr dcaisse2.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumTrDcaisse2(?float $cumTrDcaisse2): InfosComplBul {
        $this->cumTrDcaisse2 = $cumTrDcaisse2;
        return $this;
    }

    /**
     * Set the cum tr dcaisse3.
     *
     * @param float|null $cumTrDcaisse3 The cum tr dcaisse3.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumTrDcaisse3(?float $cumTrDcaisse3): InfosComplBul {
        $this->cumTrDcaisse3 = $cumTrDcaisse3;
        return $this;
    }

    /**
     * Set the cum tranche d.
     *
     * @param float|null $cumTrancheD The cum tranche d.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumTrancheD(?float $cumTrancheD): InfosComplBul {
        $this->cumTrancheD = $cumTrancheD;
        return $this;
    }

    /**
     * Set the cum tranche d1.
     *
     * @param float|null $cumTrancheD1 The cum tranche d1.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setCumTrancheD1(?float $cumTrancheD1): InfosComplBul {
        $this->cumTrancheD1 = $cumTrancheD1;
        return $this;
    }

    /**
     * Set the date ancien branche.
     *
     * @param DateTime|null $dateAncienBranche The date ancien branche.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDateAncienBranche(?DateTime $dateAncienBranche): InfosComplBul {
        $this->dateAncienBranche = $dateAncienBranche;
        return $this;
    }

    /**
     * Set the date ancien college.
     *
     * @param DateTime|null $dateAncienCollege The date ancien college.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDateAncienCollege(?DateTime $dateAncienCollege): InfosComplBul {
        $this->dateAncienCollege = $dateAncienCollege;
        return $this;
    }

    /**
     * Set the date ancien poste.
     *
     * @param DateTime|null $dateAncienPoste The date ancien poste.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDateAncienPoste(?DateTime $dateAncienPoste): InfosComplBul {
        $this->dateAncienPoste = $dateAncienPoste;
        return $this;
    }

    /**
     * Set the date debut chom cdd.
     *
     * @param DateTime|null $dateDebutChomCdd The date debut chom cdd.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDateDebutChomCdd(?DateTime $dateDebutChomCdd): InfosComplBul {
        $this->dateDebutChomCdd = $dateDebutChomCdd;
        return $this;
    }

    /**
     * Set the date debut contrat.
     *
     * @param DateTime|null $dateDebutContrat The date debut contrat.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDateDebutContrat(?DateTime $dateDebutContrat): InfosComplBul {
        $this->dateDebutContrat = $dateDebutContrat;
        return $this;
    }

    /**
     * Set the date envoi mail.
     *
     * @param DateTime|null $dateEnvoiMail The date envoi mail.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDateEnvoiMail(?DateTime $dateEnvoiMail): InfosComplBul {
        $this->dateEnvoiMail = $dateEnvoiMail;
        return $this;
    }

    /**
     * Set the date fin chom cdd.
     *
     * @param DateTime|null $dateFinChomCdd The date fin chom cdd.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDateFinChomCdd(?DateTime $dateFinChomCdd): InfosComplBul {
        $this->dateFinChomCdd = $dateFinChomCdd;
        return $this;
    }

    /**
     * Set the date fin contrat.
     *
     * @param DateTime|null $dateFinContrat The date fin contrat.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDateFinContrat(?DateTime $dateFinContrat): InfosComplBul {
        $this->dateFinContrat = $dateFinContrat;
        return $this;
    }

    /**
     * Set the date fin prev.
     *
     * @param DateTime|null $dateFinPrev The date fin prev.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDateFinPrev(?DateTime $dateFinPrev): InfosComplBul {
        $this->dateFinPrev = $dateFinPrev;
        return $this;
    }

    /**
     * Set the date rachat.
     *
     * @param DateTime|null $dateRachat The date rachat.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDateRachat(?DateTime $dateRachat): InfosComplBul {
        $this->dateRachat = $dateRachat;
        return $this;
    }

    /**
     * Set the date renouv cdd.
     *
     * @param DateTime|null $dateRenouvCdd The date renouv cdd.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDateRenouvCdd(?DateTime $dateRenouvCdd): InfosComplBul {
        $this->dateRenouvCdd = $dateRenouvCdd;
        return $this;
    }

    /**
     * Set the date renouv cdd2.
     *
     * @param DateTime|null $dateRenouvCdd2 The date renouv cdd2.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDateRenouvCdd2(?DateTime $dateRenouvCdd2): InfosComplBul {
        $this->dateRenouvCdd2 = $dateRenouvCdd2;
        return $this;
    }

    /**
     * Set the detache expatrie.
     *
     * @param string|null $detacheExpatrie The detache expatrie.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setDetacheExpatrie(?string $detacheExpatrie): InfosComplBul {
        $this->detacheExpatrie = $detacheExpatrie;
        return $this;
    }

    /**
     * Set the echelon.
     *
     * @param string|null $echelon The echelon.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setEchelon(?string $echelon): InfosComplBul {
        $this->echelon = $echelon;
        return $this;
    }

    /**
     * Set the echelon convention col.
     *
     * @param string|null $echelonConventionCol The echelon convention col.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setEchelonConventionCol(?string $echelonConventionCol): InfosComplBul {
        $this->echelonConventionCol = $echelonConventionCol;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setEmail(?string $email): InfosComplBul {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string|null $emploi The emploi.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setEmploi(?string $emploi): InfosComplBul {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the etab lieu travail.
     *
     * @param string|null $etabLieuTravail The etab lieu travail.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setEtabLieuTravail(?string $etabLieuTravail): InfosComplBul {
        $this->etabLieuTravail = $etabLieuTravail;
        return $this;
    }

    /**
     * Set the exclure chom cdd.
     *
     * @param bool|null $exclureChomCdd The exclure chom cdd.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setExclureChomCdd(?bool $exclureChomCdd): InfosComplBul {
        $this->exclureChomCdd = $exclureChomCdd;
        return $this;
    }

    /**
     * Set the exclure cice.
     *
     * @param bool|null $exclureCice The exclure cice.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setExclureCice(?bool $exclureCice): InfosComplBul {
        $this->exclureCice = $exclureCice;
        return $this;
    }

    /**
     * Set the exclure cospar.
     *
     * @param bool|null $exclureCospar The exclure cospar.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setExclureCospar(?bool $exclureCospar): InfosComplBul {
        $this->exclureCospar = $exclureCospar;
        return $this;
    }

    /**
     * Set the exclure dsn.
     *
     * @param bool|null $exclureDsn The exclure dsn.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setExclureDsn(?bool $exclureDsn): InfosComplBul {
        $this->exclureDsn = $exclureDsn;
        return $this;
    }

    /**
     * Set the exclure loi tepa.
     *
     * @param bool|null $exclureLoiTepa The exclure loi tepa.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setExclureLoiTepa(?bool $exclureLoiTepa): InfosComplBul {
        $this->exclureLoiTepa = $exclureLoiTepa;
        return $this;
    }

    /**
     * Set the exclure loi tepa part p.
     *
     * @param bool|null $exclureLoiTepaPartP The exclure loi tepa part p.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setExclureLoiTepaPartP(?bool $exclureLoiTepaPartP): InfosComplBul {
        $this->exclureLoiTepaPartP = $exclureLoiTepaPartP;
        return $this;
    }

    /**
     * Set the exclure loi tepa part s.
     *
     * @param bool|null $exclureLoiTepaPartS The exclure loi tepa part s.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setExclureLoiTepaPartS(?bool $exclureLoiTepaPartS): InfosComplBul {
        $this->exclureLoiTepaPartS = $exclureLoiTepaPartS;
        return $this;
    }

    /**
     * Set the exclure qgc.
     *
     * @param bool|null $exclureQgc The exclure qgc.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setExclureQgc(?bool $exclureQgc): InfosComplBul {
        $this->exclureQgc = $exclureQgc;
        return $this;
    }

    /**
     * Set the exo accre17.
     *
     * @param bool|null $exoAccre17 The exo accre17.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setExoAccre17(?bool $exoAccre17): InfosComplBul {
        $this->exoAccre17 = $exoAccre17;
        return $this;
    }

    /**
     * Set the exo occasionnel msa.
     *
     * @param bool|null $exoOccasionnelMsa The exo occasionnel msa.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setExoOccasionnelMsa(?bool $exoOccasionnelMsa): InfosComplBul {
        $this->exoOccasionnelMsa = $exoOccasionnelMsa;
        return $this;
    }

    /**
     * Set the exo professionnalisation.
     *
     * @param bool|null $exoProfessionnalisation The exo professionnalisation.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setExoProfessionnalisation(?bool $exoProfessionnalisation): InfosComplBul {
        $this->exoProfessionnalisation = $exoProfessionnalisation;
        return $this;
    }

    /**
     * Set the exo specif.
     *
     * @param bool|null $exoSpecif The exo specif.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setExoSpecif(?bool $exoSpecif): InfosComplBul {
        $this->exoSpecif = $exoSpecif;
        return $this;
    }

    /**
     * Set the forfait heure.
     *
     * @param bool|null $forfaitHeure The forfait heure.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setForfaitHeure(?bool $forfaitHeure): InfosComplBul {
        $this->forfaitHeure = $forfaitHeure;
        return $this;
    }

    /**
     * Set the fraction etab.
     *
     * @param string|null $fractionEtab The fraction etab.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setFractionEtab(?string $fractionEtab): InfosComplBul {
        $this->fractionEtab = $fractionEtab;
        return $this;
    }

    /**
     * Set the gestion cp.
     *
     * @param bool|null $gestionCp The gestion cp.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setGestionCp(?bool $gestionCp): InfosComplBul {
        $this->gestionCp = $gestionCp;
        return $this;
    }

    /**
     * Set the gestion hstepa.
     *
     * @param string|null $gestionHstepa The gestion hstepa.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setGestionHstepa(?string $gestionHstepa): InfosComplBul {
        $this->gestionHstepa = $gestionHstepa;
        return $this;
    }

    /**
     * Set the gestion mail bulletin.
     *
     * @param bool|null $gestionMailBulletin The gestion mail bulletin.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setGestionMailBulletin(?bool $gestionMailBulletin): InfosComplBul {
        $this->gestionMailBulletin = $gestionMailBulletin;
        return $this;
    }

    /**
     * Set the gestion rtt.
     *
     * @param bool|null $gestionRtt The gestion rtt.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setGestionRtt(?bool $gestionRtt): InfosComplBul {
        $this->gestionRtt = $gestionRtt;
        return $this;
    }

    /**
     * Set the grille anc1.
     *
     * @param string|null $grilleAnc1 The grille anc1.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setGrilleAnc1(?string $grilleAnc1): InfosComplBul {
        $this->grilleAnc1 = $grilleAnc1;
        return $this;
    }

    /**
     * Set the grille anc2.
     *
     * @param string|null $grilleAnc2 The grille anc2.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setGrilleAnc2(?string $grilleAnc2): InfosComplBul {
        $this->grilleAnc2 = $grilleAnc2;
        return $this;
    }

    /**
     * Set the grille anc3.
     *
     * @param string|null $grilleAnc3 The grille anc3.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setGrilleAnc3(?string $grilleAnc3): InfosComplBul {
        $this->grilleAnc3 = $grilleAnc3;
        return $this;
    }

    /**
     * Set the id lieu travail.
     *
     * @param string|null $idLieuTravail The id lieu travail.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setIdLieuTravail(?string $idLieuTravail): InfosComplBul {
        $this->idLieuTravail = $idLieuTravail;
        return $this;
    }

    /**
     * Set the indem cp msa.
     *
     * @param bool|null $indemCpMsa The indem cp msa.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setIndemCpMsa(?bool $indemCpMsa): InfosComplBul {
        $this->indemCpMsa = $indemCpMsa;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string|null $indice The indice.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setIndice(?string $indice): InfosComplBul {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int|null $indiceCateg The indice categ.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setIndiceCateg(?int $indiceCateg): InfosComplBul {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setIndicePeriode(?int $indicePeriode): InfosComplBul {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the interim indem cp fillon.
     *
     * @param bool|null $interimIndemCpFillon The interim indem cp fillon.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setInterimIndemCpFillon(?bool $interimIndemCpFillon): InfosComplBul {
        $this->interimIndemCpFillon = $interimIndemCpFillon;
        return $this;
    }

    /**
     * Set the libelle reintegration.
     *
     * @param string|null $libelleReintegration The libelle reintegration.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setLibelleReintegration(?string $libelleReintegration): InfosComplBul {
        $this->libelleReintegration = $libelleReintegration;
        return $this;
    }

    /**
     * Set the lien reintegration.
     *
     * @param string|null $lienReintegration The lien reintegration.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setLienReintegration(?string $lienReintegration): InfosComplBul {
        $this->lienReintegration = $lienReintegration;
        return $this;
    }

    /**
     * Set the maintien intervient cp.
     *
     * @param bool|null $maintienIntervientCp The maintien intervient cp.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMaintienIntervientCp(?bool $maintienIntervientCp): InfosComplBul {
        $this->maintienIntervientCp = $maintienIntervientCp;
        return $this;
    }

    /**
     * Set the maintien salaire.
     *
     * @param bool|null $maintienSalaire The maintien salaire.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMaintienSalaire(?bool $maintienSalaire): InfosComplBul {
        $this->maintienSalaire = $maintienSalaire;
        return $this;
    }

    /**
     * Set the montant avantage.
     *
     * @param float|null $montantAvantage The montant avantage.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMontantAvantage(?float $montantAvantage): InfosComplBul {
        $this->montantAvantage = $montantAvantage;
        return $this;
    }

    /**
     * Set the motif cdd.
     *
     * @param string|null $motifCdd The motif cdd.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMotifCdd(?string $motifCdd): InfosComplBul {
        $this->motifCdd = $motifCdd;
        return $this;
    }

    /**
     * Set the motif exclusion dsn.
     *
     * @param string|null $motifExclusionDsn The motif exclusion dsn.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMotifExclusionDsn(?string $motifExclusionDsn): InfosComplBul {
        $this->motifExclusionDsn = $motifExclusionDsn;
        return $this;
    }

    /**
     * Set the mt abs act part.
     *
     * @param float|null $mtAbsActPart The mt abs act part.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtAbsActPart(?float $mtAbsActPart): InfosComplBul {
        $this->mtAbsActPart = $mtAbsActPart;
        return $this;
    }

    /**
     * Set the mt cotisation prev.
     *
     * @param float|null $mtCotisationPrev The mt cotisation prev.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtCotisationPrev(?float $mtCotisationPrev): InfosComplBul {
        $this->mtCotisationPrev = $mtCotisationPrev;
        return $this;
    }

    /**
     * Set the mt cotisation retraite.
     *
     * @param float|null $mtCotisationRetraite The mt cotisation retraite.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtCotisationRetraite(?float $mtCotisationRetraite): InfosComplBul {
        $this->mtCotisationRetraite = $mtCotisationRetraite;
        return $this;
    }

    /**
     * Set the mt crds100.
     *
     * @param float|null $mtCrds100 The mt crds100.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtCrds100(?float $mtCrds100): InfosComplBul {
        $this->mtCrds100 = $mtCrds100;
        return $this;
    }

    /**
     * Set the mt csg100.
     *
     * @param float|null $mtCsg100 The mt csg100.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtCsg100(?float $mtCsg100): InfosComplBul {
        $this->mtCsg100 = $mtCsg100;
        return $this;
    }

    /**
     * Set the mt fisc frais sante.
     *
     * @param float|null $mtFiscFraisSante The mt fisc frais sante.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtFiscFraisSante(?float $mtFiscFraisSante): InfosComplBul {
        $this->mtFiscFraisSante = $mtFiscFraisSante;
        return $this;
    }

    /**
     * Set the mt fisc prev.
     *
     * @param float|null $mtFiscPrev The mt fisc prev.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtFiscPrev(?float $mtFiscPrev): InfosComplBul {
        $this->mtFiscPrev = $mtFiscPrev;
        return $this;
    }

    /**
     * Set the mt fisc retraite.
     *
     * @param float|null $mtFiscRetraite The mt fisc retraite.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtFiscRetraite(?float $mtFiscRetraite): InfosComplBul {
        $this->mtFiscRetraite = $mtFiscRetraite;
        return $this;
    }

    /**
     * Set the mt forfait social20.
     *
     * @param float|null $mtForfaitSocial20 The mt forfait social20.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtForfaitSocial20(?float $mtForfaitSocial20): InfosComplBul {
        $this->mtForfaitSocial20 = $mtForfaitSocial20;
        return $this;
    }

    /**
     * Set the mt forfait social8.
     *
     * @param float|null $mtForfaitSocial8 The mt forfait social8.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtForfaitSocial8(?float $mtForfaitSocial8): InfosComplBul {
        $this->mtForfaitSocial8 = $mtForfaitSocial8;
        return $this;
    }

    /**
     * Set the mt iap.
     *
     * @param float|null $mtIap The mt iap.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtIap(?float $mtIap): InfosComplBul {
        $this->mtIap = $mtIap;
        return $this;
    }

    /**
     * Set the mt journee cpn.
     *
     * @param float|null $mtJourneeCpn The mt journee cpn.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtJourneeCpn(?float $mtJourneeCpn): InfosComplBul {
        $this->mtJourneeCpn = $mtJourneeCpn;
        return $this;
    }

    /**
     * Set the mt journee cpn1.
     *
     * @param float|null $mtJourneeCpn1 The mt journee cpn1.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMtJourneeCpn1(?float $mtJourneeCpn1): InfosComplBul {
        $this->mtJourneeCpn1 = $mtJourneeCpn1;
        return $this;
    }

    /**
     * Set the multi employeur.
     *
     * @param bool|null $multiEmployeur The multi employeur.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setMultiEmployeur(?bool $multiEmployeur): InfosComplBul {
        $this->multiEmployeur = $multiEmployeur;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string|null $natureAnalytique The nature analytique.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNatureAnalytique(?string $natureAnalytique): InfosComplBul {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the nb30 renouv cdd.
     *
     * @param int|null $nb30RenouvCdd The nb30 renouv cdd.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNb30RenouvCdd(?int $nb30RenouvCdd): InfosComplBul {
        $this->nb30RenouvCdd = $nb30RenouvCdd;
        return $this;
    }

    /**
     * Set the nb h act part.
     *
     * @param float|null $nbHActPart The nb h act part.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNbHActPart(?float $nbHActPart): InfosComplBul {
        $this->nbHActPart = $nbHActPart;
        return $this;
    }

    /**
     * Set the nb h act part indem.
     *
     * @param float|null $nbHActPartIndem The nb h act part indem.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNbHActPartIndem(?float $nbHActPartIndem): InfosComplBul {
        $this->nbHActPartIndem = $nbHActPartIndem;
        return $this;
    }

    /**
     * Set the nb h bonifie.
     *
     * @param float|null $nbHBonifie The nb h bonifie.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNbHBonifie(?float $nbHBonifie): InfosComplBul {
        $this->nbHBonifie = $nbHBonifie;
        return $this;
    }

    /**
     * Set the nb h contingent.
     *
     * @param float|null $nbHContingent The nb h contingent.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNbHContingent(?float $nbHContingent): InfosComplBul {
        $this->nbHContingent = $nbHContingent;
        return $this;
    }

    /**
     * Set the nb h contract.
     *
     * @param float|null $nbHContract The nb h contract.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNbHContract(?float $nbHContract): InfosComplBul {
        $this->nbHContract = $nbHContract;
        return $this;
    }

    /**
     * Set the nb heure mois.
     *
     * @param float|null $nbHeureMois The nb heure mois.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNbHeureMois(?float $nbHeureMois): InfosComplBul {
        $this->nbHeureMois = $nbHeureMois;
        return $this;
    }

    /**
     * Set the nb jour annee.
     *
     * @param float|null $nbJourAnnee The nb jour annee.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNbJourAnnee(?float $nbJourAnnee): InfosComplBul {
        $this->nbJourAnnee = $nbJourAnnee;
        return $this;
    }

    /**
     * Set the nb jour cp acquis.
     *
     * @param float|null $nbJourCpAcquis The nb jour cp acquis.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNbJourCpAcquis(?float $nbJourCpAcquis): InfosComplBul {
        $this->nbJourCpAcquis = $nbJourCpAcquis;
        return $this;
    }

    /**
     * Set the nb jour cp sup.
     *
     * @param float|null $nbJourCpSup The nb jour cp sup.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNbJourCpSup(?float $nbJourCpSup): InfosComplBul {
        $this->nbJourCpSup = $nbJourCpSup;
        return $this;
    }

    /**
     * Set the nb piece logement.
     *
     * @param string|null $nbPieceLogement The nb piece logement.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNbPieceLogement(?string $nbPieceLogement): InfosComplBul {
        $this->nbPieceLogement = $nbPieceLogement;
        return $this;
    }

    /**
     * Set the ne pas activer prime annuelle proprete.
     *
     * @param bool|null $nePasActiverPrimeAnnuelleProprete The ne pas activer prime annuelle proprete.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNePasActiverPrimeAnnuelleProprete(?bool $nePasActiverPrimeAnnuelleProprete): InfosComplBul {
        $this->nePasActiverPrimeAnnuelleProprete = $nePasActiverPrimeAnnuelleProprete;
        return $this;
    }

    /**
     * Set the ne pas publier web.
     *
     * @param bool|null $nePasPublierWeb The ne pas publier web.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNePasPublierWeb(?bool $nePasPublierWeb): InfosComplBul {
        $this->nePasPublierWeb = $nePasPublierWeb;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string|null $niveau The niveau.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNiveau(?string $niveau): InfosComplBul {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the niveau convention col.
     *
     * @param string|null $niveauConventionCol The niveau convention col.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNiveauConventionCol(?string $niveauConventionCol): InfosComplBul {
        $this->niveauConventionCol = $niveauConventionCol;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string|null $nomMarital The nom marital.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNomMarital(?string $nomMarital): InfosComplBul {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string|null $nomNaissance The nom naissance.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNomNaissance(?string $nomNaissance): InfosComplBul {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNomVille(?string $nomVille): InfosComplBul {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNomVoie(?string $nomVoie): InfosComplBul {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num evenement.
     *
     * @param int|null $numEvenement The num evenement.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNumEvenement(?int $numEvenement): InfosComplBul {
        $this->numEvenement = $numEvenement;
        return $this;
    }

    /**
     * Set the num objet.
     *
     * @param string|null $numObjet The num objet.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNumObjet(?string $numObjet): InfosComplBul {
        $this->numObjet = $numObjet;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNumVoie(?string $numVoie): InfosComplBul {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNumero(?string $numero): InfosComplBul {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero abattement contrat msa.
     *
     * @param int|null $numeroAbattementContratMsa The numero abattement contrat msa.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNumeroAbattementContratMsa(?int $numeroAbattementContratMsa): InfosComplBul {
        $this->numeroAbattementContratMsa = $numeroAbattementContratMsa;
        return $this;
    }

    /**
     * Set the numero contrat.
     *
     * @param int|null $numeroContrat The numero contrat.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNumeroContrat(?int $numeroContrat): InfosComplBul {
        $this->numeroContrat = $numeroContrat;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int|null $numeroGrilleType The numero grille type.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setNumeroGrilleType(?int $numeroGrilleType): InfosComplBul {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the part patron prev forfait social8.
     *
     * @param float|null $partPatronPrevForfaitSocial8 The part patron prev forfait social8.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setPartPatronPrevForfaitSocial8(?float $partPatronPrevForfaitSocial8): InfosComplBul {
        $this->partPatronPrevForfaitSocial8 = $partPatronPrevForfaitSocial8;
        return $this;
    }

    /**
     * Set the pas de reintegration.
     *
     * @param bool|null $pasDeReintegration The pas de reintegration.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setPasDeReintegration(?bool $pasDeReintegration): InfosComplBul {
        $this->pasDeReintegration = $pasDeReintegration;
        return $this;
    }

    /**
     * Set the pas gestion dif.
     *
     * @param bool|null $pasGestionDif The pas gestion dif.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setPasGestionDif(?bool $pasGestionDif): InfosComplBul {
        $this->pasGestionDif = $pasGestionDif;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setPeriode(?DateTime $periode): InfosComplBul {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param string|null $position The position.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setPosition(?string $position): InfosComplBul {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the position convention col.
     *
     * @param string|null $positionConventionCol The position convention col.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setPositionConventionCol(?string $positionConventionCol): InfosComplBul {
        $this->positionConventionCol = $positionConventionCol;
        return $this;
    }

    /**
     * Set the pourcent exo.
     *
     * @param float|null $pourcentExo The pourcent exo.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setPourcentExo(?float $pourcentExo): InfosComplBul {
        $this->pourcentExo = $pourcentExo;
        return $this;
    }

    /**
     * Set the prem date entree.
     *
     * @param DateTime|null $premDateEntree The prem date entree.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setPremDateEntree(?DateTime $premDateEntree): InfosComplBul {
        $this->premDateEntree = $premDateEntree;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setPrenom(?string $prenom): InfosComplBul {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the pss1 force.
     *
     * @param bool|null $pss1Force The pss1 force.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setPss1Force(?bool $pss1Force): InfosComplBul {
        $this->pss1Force = $pss1Force;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string|null $qualification The qualification.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setQualification(?string $qualification): InfosComplBul {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Set the reduction fillon.
     *
     * @param bool|null $reductionFillon The reduction fillon.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setReductionFillon(?bool $reductionFillon): InfosComplBul {
        $this->reductionFillon = $reductionFillon;
        return $this;
    }

    /**
     * Set the regle calcul.
     *
     * @param string|null $regleCalcul The regle calcul.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRegleCalcul(?string $regleCalcul): InfosComplBul {
        $this->regleCalcul = $regleCalcul;
        return $this;
    }

    /**
     * Set the remun part fillon.
     *
     * @param bool|null $remunPartFillon The remun part fillon.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRemunPartFillon(?bool $remunPartFillon): InfosComplBul {
        $this->remunPartFillon = $remunPartFillon;
        return $this;
    }

    /**
     * Set the rtt1.
     *
     * @param float|null $rtt1 The rtt1.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRtt1(?float $rtt1): InfosComplBul {
        $this->rtt1 = $rtt1;
        return $this;
    }

    /**
     * Set the rtt10.
     *
     * @param float|null $rtt10 The rtt10.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRtt10(?float $rtt10): InfosComplBul {
        $this->rtt10 = $rtt10;
        return $this;
    }

    /**
     * Set the rtt11.
     *
     * @param float|null $rtt11 The rtt11.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRtt11(?float $rtt11): InfosComplBul {
        $this->rtt11 = $rtt11;
        return $this;
    }

    /**
     * Set the rtt12.
     *
     * @param float|null $rtt12 The rtt12.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRtt12(?float $rtt12): InfosComplBul {
        $this->rtt12 = $rtt12;
        return $this;
    }

    /**
     * Set the rtt2.
     *
     * @param float|null $rtt2 The rtt2.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRtt2(?float $rtt2): InfosComplBul {
        $this->rtt2 = $rtt2;
        return $this;
    }

    /**
     * Set the rtt3.
     *
     * @param float|null $rtt3 The rtt3.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRtt3(?float $rtt3): InfosComplBul {
        $this->rtt3 = $rtt3;
        return $this;
    }

    /**
     * Set the rtt4.
     *
     * @param float|null $rtt4 The rtt4.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRtt4(?float $rtt4): InfosComplBul {
        $this->rtt4 = $rtt4;
        return $this;
    }

    /**
     * Set the rtt5.
     *
     * @param float|null $rtt5 The rtt5.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRtt5(?float $rtt5): InfosComplBul {
        $this->rtt5 = $rtt5;
        return $this;
    }

    /**
     * Set the rtt6.
     *
     * @param float|null $rtt6 The rtt6.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRtt6(?float $rtt6): InfosComplBul {
        $this->rtt6 = $rtt6;
        return $this;
    }

    /**
     * Set the rtt7.
     *
     * @param float|null $rtt7 The rtt7.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRtt7(?float $rtt7): InfosComplBul {
        $this->rtt7 = $rtt7;
        return $this;
    }

    /**
     * Set the rtt8.
     *
     * @param float|null $rtt8 The rtt8.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRtt8(?float $rtt8): InfosComplBul {
        $this->rtt8 = $rtt8;
        return $this;
    }

    /**
     * Set the rtt9.
     *
     * @param float|null $rtt9 The rtt9.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setRtt9(?float $rtt9): InfosComplBul {
        $this->rtt9 = $rtt9;
        return $this;
    }

    /**
     * Set the salaire base.
     *
     * @param float|null $salaireBase The salaire base.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setSalaireBase(?float $salaireBase): InfosComplBul {
        $this->salaireBase = $salaireBase;
        return $this;
    }

    /**
     * Set the salaire reference.
     *
     * @param float|null $salaireReference The salaire reference.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setSalaireReference(?float $salaireReference): InfosComplBul {
        $this->salaireReference = $salaireReference;
        return $this;
    }

    /**
     * Set the salaire retabli dsn.
     *
     * @param float|null $salaireRetabliDsn The salaire retabli dsn.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setSalaireRetabliDsn(?float $salaireRetabliDsn): InfosComplBul {
        $this->salaireRetabliDsn = $salaireRetabliDsn;
        return $this;
    }

    /**
     * Set the salaire retabli dsn force.
     *
     * @param bool|null $salaireRetabliDsnForce The salaire retabli dsn force.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setSalaireRetabliDsnForce(?bool $salaireRetabliDsnForce): InfosComplBul {
        $this->salaireRetabliDsnForce = $salaireRetabliDsnForce;
        return $this;
    }

    /**
     * Set the sans contrat.
     *
     * @param int|null $sansContrat The sans contrat.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setSansContrat(?int $sansContrat): InfosComplBul {
        $this->sansContrat = $sansContrat;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string|null $service The service.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setService(?string $service): InfosComplBul {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the setp fillon.
     *
     * @param float|null $setpFillon The setp fillon.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setSetpFillon(?float $setpFillon): InfosComplBul {
        $this->setpFillon = $setpFillon;
        return $this;
    }

    /**
     * Set the signe af.
     *
     * @param string|null $signeAf The signe af.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setSigneAf(?string $signeAf): InfosComplBul {
        $this->signeAf = $signeAf;
        return $this;
    }

    /**
     * Set the siret lieu trav.
     *
     * @param string|null $siretLieuTrav The siret lieu trav.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setSiretLieuTrav(?string $siretLieuTrav): InfosComplBul {
        $this->siretLieuTrav = $siretLieuTrav;
        return $this;
    }

    /**
     * Set the smic m fillon sans hs.
     *
     * @param float|null $smicMFillonSansHs The smic m fillon sans hs.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setSmicMFillonSansHs(?float $smicMFillonSansHs): InfosComplBul {
        $this->smicMFillonSansHs = $smicMFillonSansHs;
        return $this;
    }

    /**
     * Set the smic maf.
     *
     * @param float|null $smicMaf The smic maf.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setSmicMaf(?float $smicMaf): InfosComplBul {
        $this->smicMaf = $smicMaf;
        return $this;
    }

    /**
     * Set the smic mcice.
     *
     * @param float|null $smicMcice The smic mcice.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setSmicMcice(?float $smicMcice): InfosComplBul {
        $this->smicMcice = $smicMcice;
        return $this;
    }

    /**
     * Set the subrogation.
     *
     * @param bool|null $subrogation The subrogation.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setSubrogation(?bool $subrogation): InfosComplBul {
        $this->subrogation = $subrogation;
        return $this;
    }

    /**
     * Set the tds59.
     *
     * @param string|null $tds59 The tds59.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTds59(?string $tds59): InfosComplBul {
        $this->tds59 = $tds59;
        return $this;
    }

    /**
     * Set the tds76.
     *
     * @param string|null $tds76 The tds76.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTds76(?string $tds76): InfosComplBul {
        $this->tds76 = $tds76;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string|null $tel1 The tel1.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTel1(?string $tel1): InfosComplBul {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string|null $tel2 The tel2.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTel2(?string $tel2): InfosComplBul {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tepa moins20.
     *
     * @param bool|null $tepaMoins20 The tepa moins20.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTepaMoins20(?bool $tepaMoins20): InfosComplBul {
        $this->tepaMoins20 = $tepaMoins20;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTitre(?string $titre): InfosComplBul {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the tot cot urssaf.
     *
     * @param float|null $totCotUrssaf The tot cot urssaf.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTotCotUrssaf(?float $totCotUrssaf): InfosComplBul {
        $this->totCotUrssaf = $totCotUrssaf;
        return $this;
    }

    /**
     * Set the tr d1 caisse1.
     *
     * @param float|null $trD1Caisse1 The tr d1 caisse1.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTrD1Caisse1(?float $trD1Caisse1): InfosComplBul {
        $this->trD1Caisse1 = $trD1Caisse1;
        return $this;
    }

    /**
     * Set the tr d1caisse2.
     *
     * @param float|null $trD1caisse2 The tr d1caisse2.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTrD1caisse2(?float $trD1caisse2): InfosComplBul {
        $this->trD1caisse2 = $trD1caisse2;
        return $this;
    }

    /**
     * Set the tr d1caisse3.
     *
     * @param float|null $trD1caisse3 The tr d1caisse3.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTrD1caisse3(?float $trD1caisse3): InfosComplBul {
        $this->trD1caisse3 = $trD1caisse3;
        return $this;
    }

    /**
     * Set the tr d caisse1.
     *
     * @param float|null $trDCaisse1 The tr d caisse1.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTrDCaisse1(?float $trDCaisse1): InfosComplBul {
        $this->trDCaisse1 = $trDCaisse1;
        return $this;
    }

    /**
     * Set the tr dcaisse2.
     *
     * @param float|null $trDcaisse2 The tr dcaisse2.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTrDcaisse2(?float $trDcaisse2): InfosComplBul {
        $this->trDcaisse2 = $trDcaisse2;
        return $this;
    }

    /**
     * Set the tr dcaisse3.
     *
     * @param float|null $trDcaisse3 The tr dcaisse3.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTrDcaisse3(?float $trDcaisse3): InfosComplBul {
        $this->trDcaisse3 = $trDcaisse3;
        return $this;
    }

    /**
     * Set the tranche d.
     *
     * @param float|null $trancheD The tranche d.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTrancheD(?float $trancheD): InfosComplBul {
        $this->trancheD = $trancheD;
        return $this;
    }

    /**
     * Set the tranche d1.
     *
     * @param float|null $trancheD1 The tranche d1.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTrancheD1(?float $trancheD1): InfosComplBul {
        $this->trancheD1 = $trancheD1;
        return $this;
    }

    /**
     * Set the type chom cdd.
     *
     * @param string|null $typeChomCdd The type chom cdd.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTypeChomCdd(?string $typeChomCdd): InfosComplBul {
        $this->typeChomCdd = $typeChomCdd;
        return $this;
    }

    /**
     * Set the type contrat.
     *
     * @param string|null $typeContrat The type contrat.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTypeContrat(?string $typeContrat): InfosComplBul {
        $this->typeContrat = $typeContrat;
        return $this;
    }

    /**
     * Set the type exo lodeom.
     *
     * @param string|null $typeExoLodeom The type exo lodeom.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTypeExoLodeom(?string $typeExoLodeom): InfosComplBul {
        $this->typeExoLodeom = $typeExoLodeom;
        return $this;
    }

    /**
     * Set the type he fillon.
     *
     * @param string|null $typeHeFillon The type he fillon.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTypeHeFillon(?string $typeHeFillon): InfosComplBul {
        $this->typeHeFillon = $typeHeFillon;
        return $this;
    }

    /**
     * Set the type maintien salaire.
     *
     * @param string|null $typeMaintienSalaire The type maintien salaire.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTypeMaintienSalaire(?string $typeMaintienSalaire): InfosComplBul {
        $this->typeMaintienSalaire = $typeMaintienSalaire;
        return $this;
    }

    /**
     * Set the type reduction fillon.
     *
     * @param string|null $typeReductionFillon The type reduction fillon.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTypeReductionFillon(?string $typeReductionFillon): InfosComplBul {
        $this->typeReductionFillon = $typeReductionFillon;
        return $this;
    }

    /**
     * Set the type reduction mayotte.
     *
     * @param string|null $typeReductionMayotte The type reduction mayotte.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTypeReductionMayotte(?string $typeReductionMayotte): InfosComplBul {
        $this->typeReductionMayotte = $typeReductionMayotte;
        return $this;
    }

    /**
     * Set the type saisie ab cp.
     *
     * @param string|null $typeSaisieAbCp The type saisie ab cp.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTypeSaisieAbCp(?string $typeSaisieAbCp): InfosComplBul {
        $this->typeSaisieAbCp = $typeSaisieAbCp;
        return $this;
    }

    /**
     * Set the type saisie chom intemp.
     *
     * @param string|null $typeSaisieChomIntemp The type saisie chom intemp.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setTypeSaisieChomIntemp(?string $typeSaisieChomIntemp): InfosComplBul {
        $this->typeSaisieChomIntemp = $typeSaisieChomIntemp;
        return $this;
    }

    /**
     * Set the vrp multicarte.
     *
     * @param bool|null $vrpMulticarte The vrp multicarte.
     * @return InfosComplBul Returns this Infos compl bul.
     */
    public function setVrpMulticarte(?bool $vrpMulticarte): InfosComplBul {
        $this->vrpMulticarte = $vrpMulticarte;
        return $this;
    }
}
