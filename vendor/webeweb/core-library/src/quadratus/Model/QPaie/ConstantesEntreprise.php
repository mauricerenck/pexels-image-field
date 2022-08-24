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
 * Constantes entreprise.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class ConstantesEntreprise {

    /**
     * Absence extra.
     *
     * @var string|null
     */
    private $absenceExtra;

    /**
     * Activer pointage qws.
     *
     * @var bool|null
     */
    private $activerPointageQws;

    /**
     * Adhesion tds norme.
     *
     * @var string|null
     */
    private $adhesionTdsNorme;

    /**
     * Affaire.
     *
     * @var string|null
     */
    private $affaire;

    /**
     * Affectation taux27.
     *
     * @var bool|null
     */
    private $affectationTaux27;

    /**
     * Analytique employe.
     *
     * @var bool|null
     */
    private $analytiqueEmploye;

    /**
     * Arbitrage auto.
     *
     * @var string|null
     */
    private $arbitrageAuto;

    /**
     * Archivage actif.
     *
     * @var bool|null
     */
    private $archivageActif;

    /**
     * Attest auto.
     *
     * @var bool|null
     */
    private $attestAuto;

    /**
     * Beneficie cice.
     *
     * @var bool|null
     */
    private $beneficieCice;

    /**
     * Brut al sal min conv.
     *
     * @var bool|null
     */
    private $brutAlSalMinConv;

    /**
     * Calcul auto h theorique.
     *
     * @var bool|null
     */
    private $calculAutoHTheorique;

    /**
     * Certif auto.
     *
     * @var bool|null
     */
    private $certifAuto;

    /**
     * Cheques euro.
     *
     * @var string|null
     */
    private $chequesEuro;

    /**
     * Choix edition cheque tc.
     *
     * @var bool|null
     */
    private $choixEditionChequeTc;

    /**
     * Cice pj mail cli ducs edi.
     *
     * @var bool|null
     */
    private $cicePjMailCliDucsEdi;

    /**
     * Cle acces1.
     *
     * @var string|null
     */
    private $cleAcces1;

    /**
     * Cle portable.
     *
     * @var string|null
     */
    private $clePortable;

    /**
     * Code org btpdadsu.
     *
     * @var string|null
     */
    private $codeOrgBtpdadsu;

    /**
     * Collaborateuri paie.
     *
     * @var string|null
     */
    private $collaborateuriPaie;

    /**
     * Compression.
     *
     * @var bool|null
     */
    private $compression;

    /**
     * Compte gain euro.
     *
     * @var string|null
     */
    private $compteGainEuro;

    /**
     * Compte perte euro.
     *
     * @var string|null
     */
    private $comptePerteEuro;

    /**
     * Cpta elit euros.
     *
     * @var bool|null
     */
    private $cptaElitEuros;

    /**
     * Ctrl auto cp.
     *
     * @var bool|null
     */
    private $ctrlAutoCp;

    /**
     * Ctrl auto cp anticip.
     *
     * @var bool|null
     */
    private $ctrlAutoCpAnticip;

    /**
     * Ctrl taux base.
     *
     * @var bool|null
     */
    private $ctrlTauxBase;

    /**
     * Dads dernier choix gestion aen.
     *
     * @var string|null
     */
    private $dadsDernierChoixGestionAen;

    /**
     * Dads type gestion aen.
     *
     * @var string|null
     */
    private $dadsTypeGestionAen;

    /**
     * Dadsu num agr ansp.
     *
     * @var string|null
     */
    private $dadsuNumAgrAnsp;

    /**
     * Dadsu ref dec.
     *
     * @var string|null
     */
    private $dadsuRefDec;

    /**
     * Das type decl.
     *
     * @var string|null
     */
    private $dasTypeDecl;

    /**
     * Das type decl detail.
     *
     * @var string|null
     */
    private $dasTypeDeclDetail;

    /**
     * Date dp.
     *
     * @var DateTime|null
     */
    private $dateDp;

    /**
     * Debut periode das.
     *
     * @var DateTime|null
     */
    private $debutPeriodeDas;

    /**
     * Debut periode histo das.
     *
     * @var DateTime|null
     */
    private $debutPeriodeHistoDas;

    /**
     * Deduction h sup fillon.
     *
     * @var bool|null
     */
    private $deductionHSupFillon;

    /**
     * Deduire h sup non structurelle.
     *
     * @var bool|null
     */
    private $deduireHSupNonStructurelle;

    /**
     * Dernier indice bul.
     *
     * @var int|null
     */
    private $dernierIndiceBul;

    /**
     * Dest point irc.
     *
     * @var string|null
     */
    private $destPointIrc;

    /**
     * Dest tri point.
     *
     * @var string|null
     */
    private $destTriPoint;

    /**
     * Dossier proprete.
     *
     * @var string|null
     */
    private $dossierProprete;

    /**
     * Dossier sur web.
     *
     * @var bool|null
     */
    private $dossierSurWeb;

    /**
     * Ds code collab.
     *
     * @var string|null
     */
    private $dsCodeCollab;

    /**
     * Ds date retour.
     *
     * @var DateTime|null
     */
    private $dsDateRetour;

    /**
     * Ds date sortie.
     *
     * @var DateTime|null
     */
    private $dsDateSortie;

    /**
     * Ds fusion.
     *
     * @var string|null
     */
    private $dsFusion;

    /**
     * Ds type edition.
     *
     * @var string|null
     */
    private $dsTypeEdition;

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
     * Ducs franc euro.
     *
     * @var string|null
     */
    private $ducsFrancEuro;

    /**
     * Ecr type.
     *
     * @var string|null
     */
    private $ecrType;

    /**
     * Ed bord choix modele.
     *
     * @var string|null
     */
    private $edBordChoixModele;

    /**
     * Ed bord rupture emp.
     *
     * @var bool|null
     */
    private $edBordRuptureEmp;

    /**
     * Ed bord type imp.
     *
     * @var string|null
     */
    private $edBordTypeImp;

    /**
     * Ed bordereau.
     *
     * @var bool|null
     */
    private $edBordereau;

    /**
     * Ed bordereau prep.
     *
     * @var bool|null
     */
    private $edBordereauPrep;

    /**
     * Ed bordereau prepa.
     *
     * @var bool|null
     */
    private $edBordereauPrepa;

    /**
     * Ed bul last fax.
     *
     * @var string|null
     */
    private $edBulLastFax;

    /**
     * Ed bul last mail.
     *
     * @var string|null
     */
    private $edBulLastMail;

    /**
     * Ed bul type sortie.
     *
     * @var string|null
     */
    private $edBulTypeSortie;

    /**
     * Ed correspondance.
     *
     * @var bool|null
     */
    private $edCorrespondance;

    /**
     * Ed ducs auto.
     *
     * @var bool|null
     */
    private $edDucsAuto;

    /**
     * Ed ducs nb ex.
     *
     * @var string|null
     */
    private $edDucsNbEx;

    /**
     * Ed ducs opt btp.
     *
     * @var string|null
     */
    private $edDucsOptBtp;

    /**
     * Ed ducs type sortie.
     *
     * @var string|null
     */
    private $edDucsTypeSortie;

    /**
     * Ed h sup bonif que majo.
     *
     * @var bool|null
     */
    private $edHSupBonifQueMajo;

    /**
     * Ed histo tri emp.
     *
     * @var string|null
     */
    private $edHistoTriEmp;

    /**
     * Ed histo tri etablissement.
     *
     * @var bool|null
     */
    private $edHistoTriEtablissement;

    /**
     * Ed histo tri service.
     *
     * @var bool|null
     */
    private $edHistoTriService;

    /**
     * Ed histo type.
     *
     * @var string|null
     */
    private $edHistoType;

    /**
     * Ed imput comptable.
     *
     * @var bool|null
     */
    private $edImputComptable;

    /**
     * Ed texte1.
     *
     * @var string|null
     */
    private $edTexte1;

    /**
     * Ed texte2.
     *
     * @var string|null
     */
    private $edTexte2;

    /**
     * Ed trt cpta last fax.
     *
     * @var string|null
     */
    private $edTrtCptaLastFax;

    /**
     * Ed trt cpta last mail.
     *
     * @var string|null
     */
    private $edTrtCptaLastMail;

    /**
     * Ed trt cpta sortie.
     *
     * @var string|null
     */
    private $edTrtCptaSortie;

    /**
     * Edit qpxl absences.
     *
     * @var bool|null
     */
    private $editQpxlAbsences;

    /**
     * Edit qpxl acomptes.
     *
     * @var bool|null
     */
    private $editQpxlAcomptes;

    /**
     * Edit qpxl tri emp.
     *
     * @var string|null
     */
    private $editQpxlTriEmp;

    /**
     * Edit qpxl vider lib.
     *
     * @var bool|null
     */
    private $editQpxlViderLib;

    /**
     * Editer bulletin stc.
     *
     * @var bool|null
     */
    private $editerBulletinStc;

    /**
     * Edition cheque tc.
     *
     * @var bool|null
     */
    private $editionChequeTc;

    /**
     * Edition date.
     *
     * @var bool|null
     */
    private $editionDate;

    /**
     * Edition heure.
     *
     * @var bool|null
     */
    private $editionHeure;

    /**
     * Email.
     *
     * @var string|null
     */
    private $email;

    /**
     * Entete solde tc.
     *
     * @var bool|null
     */
    private $enteteSoldeTc;

    /**
     * Etat controle dadsu.
     *
     * @var string|null
     */
    private $etatControleDadsu;

    /**
     * Etat ctrl norme.
     *
     * @var string|null
     */
    private $etatCtrlNorme;

    /**
     * Etat das.
     *
     * @var string|null
     */
    private $etatDas;

    /**
     * Etat das rect.
     *
     * @var string|null
     */
    private $etatDasRect;

    /**
     * Fichier unique.
     *
     * @var bool|null
     */
    private $fichierUnique;

    /**
     * Filtrer liste emp.
     *
     * @var int|null
     */
    private $filtrerListeEmp;

    /**
     * Fin periode das.
     *
     * @var DateTime|null
     */
    private $finPeriodeDas;

    /**
     * Fin periode histo das.
     *
     * @var DateTime|null
     */
    private $finPeriodeHistoDas;

    /**
     * Flag traite.
     *
     * @var string|null
     */
    private $flagTraite;

    /**
     * Flag traite2.
     *
     * @var int|null
     */
    private $flagTraite2;

    /**
     * Flag traite3.
     *
     * @var int|null
     */
    private $flagTraite3;

    /**
     * Format fic virement.
     *
     * @var string|null
     */
    private $formatFicVirement;

    /**
     * Gest num bulletin.
     *
     * @var bool|null
     */
    private $gestNumBulletin;

    /**
     * Gest repo compens.
     *
     * @var bool|null
     */
    private $gestRepoCompens;

    /**
     * Gest texte.
     *
     * @var bool|null
     */
    private $gestTexte;

    /**
     * Gestion coeff.
     *
     * @var bool|null
     */
    private $gestionCoeff;

    /**
     * Gestion coeff grille.
     *
     * @var bool|null
     */
    private $gestionCoeffGrille;

    /**
     * Gestion exemplaire.
     *
     * @var string|null
     */
    private $gestionExemplaire;

    /**
     * Gestion intemperie.
     *
     * @var bool|null
     */
    private $gestionIntemperie;

    /**
     * Gestion numero employe auto.
     *
     * @var bool|null
     */
    private $gestionNumeroEmployeAuto;

    /**
     * Gestion qpxl.
     *
     * @var bool|null
     */
    private $gestionQpxl;

    /**
     * Gestion td bilaterale.
     *
     * @var bool|null
     */
    private $gestionTdBilaterale;

    /**
     * Gestion td sou dadsu.
     *
     * @var bool|null
     */
    private $gestionTdSouDadsu;

    /**
     * Groupe gi.
     *
     * @var string|null
     */
    private $groupeGi;

    /**
     * H bonif influ cassation.
     *
     * @var string|null
     */
    private $hBonifInfluCassation;

    /**
     * H sup1 structurelle.
     *
     * @var bool|null
     */
    private $hSup1Structurelle;

    /**
     * H sup2 structurelle.
     *
     * @var bool|null
     */
    private $hSup2Structurelle;

    /**
     * H sup3 structurelle.
     *
     * @var bool|null
     */
    private $hSup3Structurelle;

    /**
     * H sup4 structurelle.
     *
     * @var bool|null
     */
    private $hSup4Structurelle;

    /**
     * H sup5 structurelle.
     *
     * @var bool|null
     */
    private $hSup5Structurelle;

    /**
     * Heure sup2 influ cassation.
     *
     * @var string|null
     */
    private $heureSup2InfluCassation;

    /**
     * Heure sup3 influ cassation.
     *
     * @var string|null
     */
    private $heureSup3InfluCassation;

    /**
     * Heure sup4 influ cassation.
     *
     * @var string|null
     */
    private $heureSup4InfluCassation;

    /**
     * Heure sup5 influ cassation.
     *
     * @var string|null
     */
    private $heureSup5InfluCassation;

    /**
     * Heure sup influ cassation.
     *
     * @var string|null
     */
    private $heureSupInfluCassation;

    /**
     * Heure theo base trav.
     *
     * @var string|null
     */
    private $heureTheoBaseTrav;

    /**
     * Indem cp intervient brut al.
     *
     * @var bool|null
     */
    private $indemCpIntervientBrutAl;

    /**
     * Jour debut transfert.
     *
     * @var int|null
     */
    private $jourDebutTransfert;

    /**
     * Jour fin transfert.
     *
     * @var int|null
     */
    private $jourFinTransfert;

    /**
     * Jrn format.
     *
     * @var string|null
     */
    private $jrnFormat;

    /**
     * Jrn regroupe abs.
     *
     * @var bool|null
     */
    private $jrnRegroupeAbs;

    /**
     * Jrn tri.
     *
     * @var string|null
     */
    private $jrnTri;

    /**
     * Jrn tri etablissement.
     *
     * @var string|null
     */
    private $jrnTriEtablissement;

    /**
     * Jrn tri service.
     *
     * @var string|null
     */
    private $jrnTriService;

    /**
     * Jrn type.
     *
     * @var string|null
     */
    private $jrnType;

    /**
     * Liaison proprete.
     *
     * @var bool|null
     */
    private $liaisonProprete;

    /**
     * Lib arbitrage.
     *
     * @var string|null
     */
    private $libArbitrage;

    /**
     * Lib base conge.
     *
     * @var string|null
     */
    private $libBaseConge;

    /**
     * Lib bqcp.
     *
     * @var string|null
     */
    private $libBqcp;

    /**
     * Lib cachet aem.
     *
     * @var string|null
     */
    private $libCachetAem;

    /**
     * Lib cotis cne.
     *
     * @var string|null
     */
    private $libCotisCne;

    /**
     * Lib fin contrat.
     *
     * @var string|null
     */
    private $libFinContrat;

    /**
     * Lib fin contrat cne.
     *
     * @var string|null
     */
    private $libFinContratCne;

    /**
     * Lib indem cp.
     *
     * @var string|null
     */
    private $libIndemCp;

    /**
     * Libelle libre virement.
     *
     * @var string|null
     */
    private $libelleLibreVirement;

    /**
     * Ligne bul euro.
     *
     * @var bool|null
     */
    private $ligneBulEuro;

    /**
     * Lignes transport.
     *
     * @var bool|null
     */
    private $lignesTransport;

    /**
     * Mail bulletin.
     *
     * @var string|null
     */
    private $mailBulletin;

    /**
     * Mail bulletin cle.
     *
     * @var string|null
     */
    private $mailBulletinCle;

    /**
     * Mail bulletin pj.
     *
     * @var string|null
     */
    private $mailBulletinPj;

    /**
     * Mail c li ducs edi.
     *
     * @var bool|null
     */
    private $mailCLiDucsEdi;

    /**
     * Mention cp.
     *
     * @var bool|null
     */
    private $mentionCp;

    /**
     * Message vu.
     *
     * @var bool|null
     */
    private $messageVu;

    /**
     * Millesime1.
     *
     * @var int|null
     */
    private $millesime1;

    /**
     * Mode planning.
     *
     * @var int|null
     */
    private $modePlanning;

    /**
     * Modele apercu.
     *
     * @var string|null
     */
    private $modeleApercu;

    /**
     * Modele bon bleu.
     *
     * @var string|null
     */
    private $modeleBonBleu;

    /**
     * Modele bulletin.
     *
     * @var string|null
     */
    private $modeleBulletin;

    /**
     * Modele certif.
     *
     * @var string|null
     */
    private $modeleCertif;

    /**
     * Modele certif trav.
     *
     * @var string|null
     */
    private $modeleCertifTrav;

    /**
     * Modele cheque.
     *
     * @var string|null
     */
    private $modeleCheque;

    /**
     * Mois cloture an.
     *
     * @var string|null
     */
    private $moisClotureAn;

    /**
     * N attest aem.
     *
     * @var int|null
     */
    private $nAttestAem;

    /**
     * N attest aemedi.
     *
     * @var int|null
     */
    private $nAttestAemedi;

    /**
     * N attest aemx.
     *
     * @var int|null
     */
    private $nAttestAemx;

    /**
     * N attest assedic.
     *
     * @var int|null
     */
    private $nAttestAssedic;

    /**
     * N attest extras.
     *
     * @var int|null
     */
    private $nAttestExtras;

    /**
     * N attest ijss.
     *
     * @var int|null
     */
    private $nAttestIjss;

    /**
     * N attest ijss at.
     *
     * @var int|null
     */
    private $nAttestIjssAt;

    /**
     * N der document.
     *
     * @var int|null
     */
    private $nDerDocument;

    /**
     * Nap euro.
     *
     * @var bool|null
     */
    private $napEuro;

    /**
     * Nb exemplaire.
     *
     * @var string|null
     */
    private $nbExemplaire;

    /**
     * Nce conges spectacles.
     *
     * @var int|null
     */
    private $nceCongesSpectacles;

    /**
     * Nouv param retraite type.
     *
     * @var bool|null
     */
    private $nouvParamRetraiteType;

    /**
     * Options calc abs.
     *
     * @var bool|null
     */
    private $optionsCalcAbs;

    /**
     * Ordre libelle h sup.
     *
     * @var string|null
     */
    private $ordreLibelleHSup;

    /**
     * Paie euro.
     *
     * @var bool|null
     */
    private $paieEuro;

    /**
     * Part sal seule.
     *
     * @var bool|null
     */
    private $partSalSeule;

    /**
     * Pas gestion indice bul.
     *
     * @var bool|null
     */
    private $pasGestionIndiceBul;

    /**
     * Pas prendre iccp fillon.
     *
     * @var bool|null
     */
    private $pasPrendreIccpFillon;

    /**
     * Pas sous tot s base.
     *
     * @var bool|null
     */
    private $pasSousTotSBase;

    /**
     * Passage35 h fait.
     *
     * @var bool|null
     */
    private $passage35HFait;

    /**
     * Path virement.
     *
     * @var string|null
     */
    private $pathVirement;

    /**
     * Periode i paie.
     *
     * @var DateTime|null
     */
    private $periodeIPaie;

    /**
     * Periode paie.
     *
     * @var DateTime|null
     */
    private $periodePaie;

    /**
     * Pj mail c li ducs edi.
     *
     * @var bool|null
     */
    private $pjMailCLiDucsEdi;

    /**
     * Pj mail cli coupon paiement.
     *
     * @var bool|null
     */
    private $pjMailCliCouponPaiement;

    /**
     * Plafond.
     *
     * @var float|null
     */
    private $plafond;

    /**
     * Porta frais sante certif trav.
     *
     * @var bool|null
     */
    private $portaFraisSanteCertifTrav;

    /**
     * Porta prevoyance oblig.
     *
     * @var bool|null
     */
    private $portaPrevoyanceOblig;

    /**
     * Preparation tdp.
     *
     * @var bool|null
     */
    private $preparationTdp;

    /**
     * Presence min.
     *
     * @var string|null
     */
    private $presenceMin;

    /**
     * Prorata dif certif trav.
     *
     * @var bool|null
     */
    private $prorataDifCertifTrav;

    /**
     * Raz commentaire.
     *
     * @var string|null
     */
    private $razCommentaire;

    /**
     * Raz h sup.
     *
     * @var string|null
     */
    private $razHSup;

    /**
     * Rdlpascii.
     *
     * @var bool|null
     */
    private $rdlpascii;

    /**
     * Rdlpemployes.
     *
     * @var bool|null
     */
    private $rdlpemployes;

    /**
     * Ref remise.
     *
     * @var int|null
     */
    private $refRemise;

    /**
     * Ref trans.
     *
     * @var int|null
     */
    private $refTrans;

    /**
     * Reference interne virement.
     *
     * @var string|null
     */
    private $referenceInterneVirement;

    /**
     * Regroup lib ed bul.
     *
     * @var bool|null
     */
    private $regroupLibEdBul;

    /**
     * Report minimum.
     *
     * @var int|null
     */
    private $reportMinimum;

    /**
     * Retraite97.
     *
     * @var bool|null
     */
    private $retraite97;

    /**
     * Sais plan emp sem.
     *
     * @var string|null
     */
    private $saisPlanEmpSem;

    /**
     * Saisie indice bul.
     *
     * @var bool|null
     */
    private $saisieIndiceBul;

    /**
     * Saut page.
     *
     * @var bool|null
     */
    private $sautPage;

    /**
     * Seuil.
     *
     * @var float|null
     */
    private $seuil;

    /**
     * Seuil conting.
     *
     * @var float|null
     */
    private $seuilConting;

    /**
     * Stc auto.
     *
     * @var bool|null
     */
    private $stcAuto;

    /**
     * Tab bord tri etablissement.
     *
     * @var bool|null
     */
    private $tabBordTriEtablissement;

    /**
     * Tab bord tri service.
     *
     * @var bool|null
     */
    private $tabBordTriService;

    /**
     * Tableau charge.
     *
     * @var string|null
     */
    private $tableauCharge;

    /**
     * Tds annee.
     *
     * @var int|null
     */
    private $tdsAnnee;

    /**
     * Tds euro.
     *
     * @var bool|null
     */
    private $tdsEuro;

    /**
     * Tot gene isole.
     *
     * @var string|null
     */
    private $totGeneIsole;

    /**
     * Tot service isole.
     *
     * @var string|null
     */
    private $totServiceIsole;

    /**
     * Total etab isole.
     *
     * @var string|null
     */
    private $totalEtabIsole;

    /**
     * Trans rupture.
     *
     * @var string|null
     */
    private $transRupture;

    /**
     * Trans tri etablissement.
     *
     * @var string|null
     */
    private $transTriEtablissement;

    /**
     * Transfert tds emp.
     *
     * @var bool|null
     */
    private $transfertTdsEmp;

    /**
     * Tri employe.
     *
     * @var string|null
     */
    private $triEmploye;

    /**
     * Tx sal decote.
     *
     * @var float|null
     */
    private $txSalDecote;

    /**
     * Type abs sans solde.
     *
     * @var string|null
     */
    private $typeAbsSansSolde;

    /**
     * Type agrement aem.
     *
     * @var string|null
     */
    private $typeAgrementAem;

    /**
     * Type bordereau prepa.
     *
     * @var string|null
     */
    private $typeBordereauPrepa;

    /**
     * Type bulletin.
     *
     * @var string|null
     */
    private $typeBulletin;

    /**
     * Type dossier.
     *
     * @var string|null
     */
    private $typeDossier;

    /**
     * Type due.
     *
     * @var string|null
     */
    private $typeDue;

    /**
     * Type effectif.
     *
     * @var string|null
     */
    private $typeEffectif;

    /**
     * Type fich bilat.
     *
     * @var string|null
     */
    private $typeFichBilat;

    /**
     * Type gestion bal.
     *
     * @var string|null
     */
    private $typeGestionBal;

    /**
     * Type modele.
     *
     * @var string|null
     */
    private $typeModele;

    /**
     * Type prep dadsu.
     *
     * @var string|null
     */
    private $typePrepDadsu;

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
     * Type stc.
     *
     * @var string|null
     */
    private $typeStc;

    /**
     * Type taux intemperie.
     *
     * @var string|null
     */
    private $typeTauxIntemperie;

    /**
     * Type tri.
     *
     * @var string|null
     */
    private $typeTri;

    /**
     * Type virement.
     *
     * @var string|null
     */
    private $typeVirement;

    /**
     * Type visu col saisie bul.
     *
     * @var string|null
     */
    private $typeVisuColSaisieBul;

    /**
     * Utilise pdp quadra.
     *
     * @var bool|null
     */
    private $utilisePdpQuadra;

    /**
     * Utilise pdp quadra2.
     *
     * @var bool|null
     */
    private $utilisePdpQuadra2;

    /**
     * Val cp bulletin.
     *
     * @var bool|null
     */
    private $valCpBulletin;

    /**
     * Val filtre liste emp.
     *
     * @var int|null
     */
    private $valFiltreListeEmp;

    /**
     * Version controle dadsu.
     *
     * @var int|null
     */
    private $versionControleDadsu;

    /**
     * Vir code etab.
     *
     * @var string|null
     */
    private $virCodeEtab;

    /**
     * Vir collectivite.
     *
     * @var string|null
     */
    private $virCollectivite;

    /**
     * Vir comptable centre.
     *
     * @var string|null
     */
    private $virComptableCentre;

    /**
     * Vir comptable sub.
     *
     * @var string|null
     */
    private $virComptableSub;

    /**
     * Vir fonction publique.
     *
     * @var bool|null
     */
    private $virFonctionPublique;

    /**
     * Vir seuil.
     *
     * @var float|null
     */
    private $virSeuil;

    /**
     * Vir type etab.
     *
     * @var string|null
     */
    private $virTypeEtab;

    /**
     * Virement cr lf.
     *
     * @var bool|null
     */
    private $virementCrLf;

    /**
     * Virements euro.
     *
     * @var string|null
     */
    private $virementsEuro;

    /**
     * Web prioritaire.
     *
     * @var bool|null
     */
    private $webPrioritaire;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the absence extra.
     *
     * @return string|null Returns the absence extra.
     */
    public function getAbsenceExtra(): ?string {
        return $this->absenceExtra;
    }

    /**
     * Get the activer pointage qws.
     *
     * @return bool|null Returns the activer pointage qws.
     */
    public function getActiverPointageQws(): ?bool {
        return $this->activerPointageQws;
    }

    /**
     * Get the adhesion tds norme.
     *
     * @return string|null Returns the adhesion tds norme.
     */
    public function getAdhesionTdsNorme(): ?string {
        return $this->adhesionTdsNorme;
    }

    /**
     * Get the affaire.
     *
     * @return string|null Returns the affaire.
     */
    public function getAffaire(): ?string {
        return $this->affaire;
    }

    /**
     * Get the affectation taux27.
     *
     * @return bool|null Returns the affectation taux27.
     */
    public function getAffectationTaux27(): ?bool {
        return $this->affectationTaux27;
    }

    /**
     * Get the analytique employe.
     *
     * @return bool|null Returns the analytique employe.
     */
    public function getAnalytiqueEmploye(): ?bool {
        return $this->analytiqueEmploye;
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
     * Get the archivage actif.
     *
     * @return bool|null Returns the archivage actif.
     */
    public function getArchivageActif(): ?bool {
        return $this->archivageActif;
    }

    /**
     * Get the attest auto.
     *
     * @return bool|null Returns the attest auto.
     */
    public function getAttestAuto(): ?bool {
        return $this->attestAuto;
    }

    /**
     * Get the beneficie cice.
     *
     * @return bool|null Returns the beneficie cice.
     */
    public function getBeneficieCice(): ?bool {
        return $this->beneficieCice;
    }

    /**
     * Get the brut al sal min conv.
     *
     * @return bool|null Returns the brut al sal min conv.
     */
    public function getBrutAlSalMinConv(): ?bool {
        return $this->brutAlSalMinConv;
    }

    /**
     * Get the calcul auto h theorique.
     *
     * @return bool|null Returns the calcul auto h theorique.
     */
    public function getCalculAutoHTheorique(): ?bool {
        return $this->calculAutoHTheorique;
    }

    /**
     * Get the certif auto.
     *
     * @return bool|null Returns the certif auto.
     */
    public function getCertifAuto(): ?bool {
        return $this->certifAuto;
    }

    /**
     * Get the cheques euro.
     *
     * @return string|null Returns the cheques euro.
     */
    public function getChequesEuro(): ?string {
        return $this->chequesEuro;
    }

    /**
     * Get the choix edition cheque tc.
     *
     * @return bool|null Returns the choix edition cheque tc.
     */
    public function getChoixEditionChequeTc(): ?bool {
        return $this->choixEditionChequeTc;
    }

    /**
     * Get the cice pj mail cli ducs edi.
     *
     * @return bool|null Returns the cice pj mail cli ducs edi.
     */
    public function getCicePjMailCliDucsEdi(): ?bool {
        return $this->cicePjMailCliDucsEdi;
    }

    /**
     * Get the cle acces1.
     *
     * @return string|null Returns the cle acces1.
     */
    public function getCleAcces1(): ?string {
        return $this->cleAcces1;
    }

    /**
     * Get the cle portable.
     *
     * @return string|null Returns the cle portable.
     */
    public function getClePortable(): ?string {
        return $this->clePortable;
    }

    /**
     * Get the code org btpdadsu.
     *
     * @return string|null Returns the code org btpdadsu.
     */
    public function getCodeOrgBtpdadsu(): ?string {
        return $this->codeOrgBtpdadsu;
    }

    /**
     * Get the collaborateuri paie.
     *
     * @return string|null Returns the collaborateuri paie.
     */
    public function getCollaborateuriPaie(): ?string {
        return $this->collaborateuriPaie;
    }

    /**
     * Get the compression.
     *
     * @return bool|null Returns the compression.
     */
    public function getCompression(): ?bool {
        return $this->compression;
    }

    /**
     * Get the compte gain euro.
     *
     * @return string|null Returns the compte gain euro.
     */
    public function getCompteGainEuro(): ?string {
        return $this->compteGainEuro;
    }

    /**
     * Get the compte perte euro.
     *
     * @return string|null Returns the compte perte euro.
     */
    public function getComptePerteEuro(): ?string {
        return $this->comptePerteEuro;
    }

    /**
     * Get the cpta elit euros.
     *
     * @return bool|null Returns the cpta elit euros.
     */
    public function getCptaElitEuros(): ?bool {
        return $this->cptaElitEuros;
    }

    /**
     * Get the ctrl auto cp.
     *
     * @return bool|null Returns the ctrl auto cp.
     */
    public function getCtrlAutoCp(): ?bool {
        return $this->ctrlAutoCp;
    }

    /**
     * Get the ctrl auto cp anticip.
     *
     * @return bool|null Returns the ctrl auto cp anticip.
     */
    public function getCtrlAutoCpAnticip(): ?bool {
        return $this->ctrlAutoCpAnticip;
    }

    /**
     * Get the ctrl taux base.
     *
     * @return bool|null Returns the ctrl taux base.
     */
    public function getCtrlTauxBase(): ?bool {
        return $this->ctrlTauxBase;
    }

    /**
     * Get the dads dernier choix gestion aen.
     *
     * @return string|null Returns the dads dernier choix gestion aen.
     */
    public function getDadsDernierChoixGestionAen(): ?string {
        return $this->dadsDernierChoixGestionAen;
    }

    /**
     * Get the dads type gestion aen.
     *
     * @return string|null Returns the dads type gestion aen.
     */
    public function getDadsTypeGestionAen(): ?string {
        return $this->dadsTypeGestionAen;
    }

    /**
     * Get the dadsu num agr ansp.
     *
     * @return string|null Returns the dadsu num agr ansp.
     */
    public function getDadsuNumAgrAnsp(): ?string {
        return $this->dadsuNumAgrAnsp;
    }

    /**
     * Get the dadsu ref dec.
     *
     * @return string|null Returns the dadsu ref dec.
     */
    public function getDadsuRefDec(): ?string {
        return $this->dadsuRefDec;
    }

    /**
     * Get the das type decl.
     *
     * @return string|null Returns the das type decl.
     */
    public function getDasTypeDecl(): ?string {
        return $this->dasTypeDecl;
    }

    /**
     * Get the das type decl detail.
     *
     * @return string|null Returns the das type decl detail.
     */
    public function getDasTypeDeclDetail(): ?string {
        return $this->dasTypeDeclDetail;
    }

    /**
     * Get the date dp.
     *
     * @return DateTime|null Returns the date dp.
     */
    public function getDateDp(): ?DateTime {
        return $this->dateDp;
    }

    /**
     * Get the debut periode das.
     *
     * @return DateTime|null Returns the debut periode das.
     */
    public function getDebutPeriodeDas(): ?DateTime {
        return $this->debutPeriodeDas;
    }

    /**
     * Get the debut periode histo das.
     *
     * @return DateTime|null Returns the debut periode histo das.
     */
    public function getDebutPeriodeHistoDas(): ?DateTime {
        return $this->debutPeriodeHistoDas;
    }

    /**
     * Get the deduction h sup fillon.
     *
     * @return bool|null Returns the deduction h sup fillon.
     */
    public function getDeductionHSupFillon(): ?bool {
        return $this->deductionHSupFillon;
    }

    /**
     * Get the deduire h sup non structurelle.
     *
     * @return bool|null Returns the deduire h sup non structurelle.
     */
    public function getDeduireHSupNonStructurelle(): ?bool {
        return $this->deduireHSupNonStructurelle;
    }

    /**
     * Get the dernier indice bul.
     *
     * @return int|null Returns the dernier indice bul.
     */
    public function getDernierIndiceBul(): ?int {
        return $this->dernierIndiceBul;
    }

    /**
     * Get the dest point irc.
     *
     * @return string|null Returns the dest point irc.
     */
    public function getDestPointIrc(): ?string {
        return $this->destPointIrc;
    }

    /**
     * Get the dest tri point.
     *
     * @return string|null Returns the dest tri point.
     */
    public function getDestTriPoint(): ?string {
        return $this->destTriPoint;
    }

    /**
     * Get the dossier proprete.
     *
     * @return string|null Returns the dossier proprete.
     */
    public function getDossierProprete(): ?string {
        return $this->dossierProprete;
    }

    /**
     * Get the dossier sur web.
     *
     * @return bool|null Returns the dossier sur web.
     */
    public function getDossierSurWeb(): ?bool {
        return $this->dossierSurWeb;
    }

    /**
     * Get the ds code collab.
     *
     * @return string|null Returns the ds code collab.
     */
    public function getDsCodeCollab(): ?string {
        return $this->dsCodeCollab;
    }

    /**
     * Get the ds date retour.
     *
     * @return DateTime|null Returns the ds date retour.
     */
    public function getDsDateRetour(): ?DateTime {
        return $this->dsDateRetour;
    }

    /**
     * Get the ds date sortie.
     *
     * @return DateTime|null Returns the ds date sortie.
     */
    public function getDsDateSortie(): ?DateTime {
        return $this->dsDateSortie;
    }

    /**
     * Get the ds fusion.
     *
     * @return string|null Returns the ds fusion.
     */
    public function getDsFusion(): ?string {
        return $this->dsFusion;
    }

    /**
     * Get the ds type edition.
     *
     * @return string|null Returns the ds type edition.
     */
    public function getDsTypeEdition(): ?string {
        return $this->dsTypeEdition;
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
     * Get the ducs franc euro.
     *
     * @return string|null Returns the ducs franc euro.
     */
    public function getDucsFrancEuro(): ?string {
        return $this->ducsFrancEuro;
    }

    /**
     * Get the ecr type.
     *
     * @return string|null Returns the ecr type.
     */
    public function getEcrType(): ?string {
        return $this->ecrType;
    }

    /**
     * Get the ed bord choix modele.
     *
     * @return string|null Returns the ed bord choix modele.
     */
    public function getEdBordChoixModele(): ?string {
        return $this->edBordChoixModele;
    }

    /**
     * Get the ed bord rupture emp.
     *
     * @return bool|null Returns the ed bord rupture emp.
     */
    public function getEdBordRuptureEmp(): ?bool {
        return $this->edBordRuptureEmp;
    }

    /**
     * Get the ed bord type imp.
     *
     * @return string|null Returns the ed bord type imp.
     */
    public function getEdBordTypeImp(): ?string {
        return $this->edBordTypeImp;
    }

    /**
     * Get the ed bordereau.
     *
     * @return bool|null Returns the ed bordereau.
     */
    public function getEdBordereau(): ?bool {
        return $this->edBordereau;
    }

    /**
     * Get the ed bordereau prep.
     *
     * @return bool|null Returns the ed bordereau prep.
     */
    public function getEdBordereauPrep(): ?bool {
        return $this->edBordereauPrep;
    }

    /**
     * Get the ed bordereau prepa.
     *
     * @return bool|null Returns the ed bordereau prepa.
     */
    public function getEdBordereauPrepa(): ?bool {
        return $this->edBordereauPrepa;
    }

    /**
     * Get the ed bul last fax.
     *
     * @return string|null Returns the ed bul last fax.
     */
    public function getEdBulLastFax(): ?string {
        return $this->edBulLastFax;
    }

    /**
     * Get the ed bul last mail.
     *
     * @return string|null Returns the ed bul last mail.
     */
    public function getEdBulLastMail(): ?string {
        return $this->edBulLastMail;
    }

    /**
     * Get the ed bul type sortie.
     *
     * @return string|null Returns the ed bul type sortie.
     */
    public function getEdBulTypeSortie(): ?string {
        return $this->edBulTypeSortie;
    }

    /**
     * Get the ed correspondance.
     *
     * @return bool|null Returns the ed correspondance.
     */
    public function getEdCorrespondance(): ?bool {
        return $this->edCorrespondance;
    }

    /**
     * Get the ed ducs auto.
     *
     * @return bool|null Returns the ed ducs auto.
     */
    public function getEdDucsAuto(): ?bool {
        return $this->edDucsAuto;
    }

    /**
     * Get the ed ducs nb ex.
     *
     * @return string|null Returns the ed ducs nb ex.
     */
    public function getEdDucsNbEx(): ?string {
        return $this->edDucsNbEx;
    }

    /**
     * Get the ed ducs opt btp.
     *
     * @return string|null Returns the ed ducs opt btp.
     */
    public function getEdDucsOptBtp(): ?string {
        return $this->edDucsOptBtp;
    }

    /**
     * Get the ed ducs type sortie.
     *
     * @return string|null Returns the ed ducs type sortie.
     */
    public function getEdDucsTypeSortie(): ?string {
        return $this->edDucsTypeSortie;
    }

    /**
     * Get the ed h sup bonif que majo.
     *
     * @return bool|null Returns the ed h sup bonif que majo.
     */
    public function getEdHSupBonifQueMajo(): ?bool {
        return $this->edHSupBonifQueMajo;
    }

    /**
     * Get the ed histo tri emp.
     *
     * @return string|null Returns the ed histo tri emp.
     */
    public function getEdHistoTriEmp(): ?string {
        return $this->edHistoTriEmp;
    }

    /**
     * Get the ed histo tri etablissement.
     *
     * @return bool|null Returns the ed histo tri etablissement.
     */
    public function getEdHistoTriEtablissement(): ?bool {
        return $this->edHistoTriEtablissement;
    }

    /**
     * Get the ed histo tri service.
     *
     * @return bool|null Returns the ed histo tri service.
     */
    public function getEdHistoTriService(): ?bool {
        return $this->edHistoTriService;
    }

    /**
     * Get the ed histo type.
     *
     * @return string|null Returns the ed histo type.
     */
    public function getEdHistoType(): ?string {
        return $this->edHistoType;
    }

    /**
     * Get the ed imput comptable.
     *
     * @return bool|null Returns the ed imput comptable.
     */
    public function getEdImputComptable(): ?bool {
        return $this->edImputComptable;
    }

    /**
     * Get the ed texte1.
     *
     * @return string|null Returns the ed texte1.
     */
    public function getEdTexte1(): ?string {
        return $this->edTexte1;
    }

    /**
     * Get the ed texte2.
     *
     * @return string|null Returns the ed texte2.
     */
    public function getEdTexte2(): ?string {
        return $this->edTexte2;
    }

    /**
     * Get the ed trt cpta last fax.
     *
     * @return string|null Returns the ed trt cpta last fax.
     */
    public function getEdTrtCptaLastFax(): ?string {
        return $this->edTrtCptaLastFax;
    }

    /**
     * Get the ed trt cpta last mail.
     *
     * @return string|null Returns the ed trt cpta last mail.
     */
    public function getEdTrtCptaLastMail(): ?string {
        return $this->edTrtCptaLastMail;
    }

    /**
     * Get the ed trt cpta sortie.
     *
     * @return string|null Returns the ed trt cpta sortie.
     */
    public function getEdTrtCptaSortie(): ?string {
        return $this->edTrtCptaSortie;
    }

    /**
     * Get the edit qpxl absences.
     *
     * @return bool|null Returns the edit qpxl absences.
     */
    public function getEditQpxlAbsences(): ?bool {
        return $this->editQpxlAbsences;
    }

    /**
     * Get the edit qpxl acomptes.
     *
     * @return bool|null Returns the edit qpxl acomptes.
     */
    public function getEditQpxlAcomptes(): ?bool {
        return $this->editQpxlAcomptes;
    }

    /**
     * Get the edit qpxl tri emp.
     *
     * @return string|null Returns the edit qpxl tri emp.
     */
    public function getEditQpxlTriEmp(): ?string {
        return $this->editQpxlTriEmp;
    }

    /**
     * Get the edit qpxl vider lib.
     *
     * @return bool|null Returns the edit qpxl vider lib.
     */
    public function getEditQpxlViderLib(): ?bool {
        return $this->editQpxlViderLib;
    }

    /**
     * Get the editer bulletin stc.
     *
     * @return bool|null Returns the editer bulletin stc.
     */
    public function getEditerBulletinStc(): ?bool {
        return $this->editerBulletinStc;
    }

    /**
     * Get the edition cheque tc.
     *
     * @return bool|null Returns the edition cheque tc.
     */
    public function getEditionChequeTc(): ?bool {
        return $this->editionChequeTc;
    }

    /**
     * Get the edition date.
     *
     * @return bool|null Returns the edition date.
     */
    public function getEditionDate(): ?bool {
        return $this->editionDate;
    }

    /**
     * Get the edition heure.
     *
     * @return bool|null Returns the edition heure.
     */
    public function getEditionHeure(): ?bool {
        return $this->editionHeure;
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
     * Get the entete solde tc.
     *
     * @return bool|null Returns the entete solde tc.
     */
    public function getEnteteSoldeTc(): ?bool {
        return $this->enteteSoldeTc;
    }

    /**
     * Get the etat controle dadsu.
     *
     * @return string|null Returns the etat controle dadsu.
     */
    public function getEtatControleDadsu(): ?string {
        return $this->etatControleDadsu;
    }

    /**
     * Get the etat ctrl norme.
     *
     * @return string|null Returns the etat ctrl norme.
     */
    public function getEtatCtrlNorme(): ?string {
        return $this->etatCtrlNorme;
    }

    /**
     * Get the etat das.
     *
     * @return string|null Returns the etat das.
     */
    public function getEtatDas(): ?string {
        return $this->etatDas;
    }

    /**
     * Get the etat das rect.
     *
     * @return string|null Returns the etat das rect.
     */
    public function getEtatDasRect(): ?string {
        return $this->etatDasRect;
    }

    /**
     * Get the fichier unique.
     *
     * @return bool|null Returns the fichier unique.
     */
    public function getFichierUnique(): ?bool {
        return $this->fichierUnique;
    }

    /**
     * Get the filtrer liste emp.
     *
     * @return int|null Returns the filtrer liste emp.
     */
    public function getFiltrerListeEmp(): ?int {
        return $this->filtrerListeEmp;
    }

    /**
     * Get the fin periode das.
     *
     * @return DateTime|null Returns the fin periode das.
     */
    public function getFinPeriodeDas(): ?DateTime {
        return $this->finPeriodeDas;
    }

    /**
     * Get the fin periode histo das.
     *
     * @return DateTime|null Returns the fin periode histo das.
     */
    public function getFinPeriodeHistoDas(): ?DateTime {
        return $this->finPeriodeHistoDas;
    }

    /**
     * Get the flag traite.
     *
     * @return string|null Returns the flag traite.
     */
    public function getFlagTraite(): ?string {
        return $this->flagTraite;
    }

    /**
     * Get the flag traite2.
     *
     * @return int|null Returns the flag traite2.
     */
    public function getFlagTraite2(): ?int {
        return $this->flagTraite2;
    }

    /**
     * Get the flag traite3.
     *
     * @return int|null Returns the flag traite3.
     */
    public function getFlagTraite3(): ?int {
        return $this->flagTraite3;
    }

    /**
     * Get the format fic virement.
     *
     * @return string|null Returns the format fic virement.
     */
    public function getFormatFicVirement(): ?string {
        return $this->formatFicVirement;
    }

    /**
     * Get the gest num bulletin.
     *
     * @return bool|null Returns the gest num bulletin.
     */
    public function getGestNumBulletin(): ?bool {
        return $this->gestNumBulletin;
    }

    /**
     * Get the gest repo compens.
     *
     * @return bool|null Returns the gest repo compens.
     */
    public function getGestRepoCompens(): ?bool {
        return $this->gestRepoCompens;
    }

    /**
     * Get the gest texte.
     *
     * @return bool|null Returns the gest texte.
     */
    public function getGestTexte(): ?bool {
        return $this->gestTexte;
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
     * Get the gestion coeff grille.
     *
     * @return bool|null Returns the gestion coeff grille.
     */
    public function getGestionCoeffGrille(): ?bool {
        return $this->gestionCoeffGrille;
    }

    /**
     * Get the gestion exemplaire.
     *
     * @return string|null Returns the gestion exemplaire.
     */
    public function getGestionExemplaire(): ?string {
        return $this->gestionExemplaire;
    }

    /**
     * Get the gestion intemperie.
     *
     * @return bool|null Returns the gestion intemperie.
     */
    public function getGestionIntemperie(): ?bool {
        return $this->gestionIntemperie;
    }

    /**
     * Get the gestion numero employe auto.
     *
     * @return bool|null Returns the gestion numero employe auto.
     */
    public function getGestionNumeroEmployeAuto(): ?bool {
        return $this->gestionNumeroEmployeAuto;
    }

    /**
     * Get the gestion qpxl.
     *
     * @return bool|null Returns the gestion qpxl.
     */
    public function getGestionQpxl(): ?bool {
        return $this->gestionQpxl;
    }

    /**
     * Get the gestion td bilaterale.
     *
     * @return bool|null Returns the gestion td bilaterale.
     */
    public function getGestionTdBilaterale(): ?bool {
        return $this->gestionTdBilaterale;
    }

    /**
     * Get the gestion td sou dadsu.
     *
     * @return bool|null Returns the gestion td sou dadsu.
     */
    public function getGestionTdSouDadsu(): ?bool {
        return $this->gestionTdSouDadsu;
    }

    /**
     * Get the groupe gi.
     *
     * @return string|null Returns the groupe gi.
     */
    public function getGroupeGi(): ?string {
        return $this->groupeGi;
    }

    /**
     * Get the h bonif influ cassation.
     *
     * @return string|null Returns the h bonif influ cassation.
     */
    public function getHBonifInfluCassation(): ?string {
        return $this->hBonifInfluCassation;
    }

    /**
     * Get the h sup1 structurelle.
     *
     * @return bool|null Returns the h sup1 structurelle.
     */
    public function getHSup1Structurelle(): ?bool {
        return $this->hSup1Structurelle;
    }

    /**
     * Get the h sup2 structurelle.
     *
     * @return bool|null Returns the h sup2 structurelle.
     */
    public function getHSup2Structurelle(): ?bool {
        return $this->hSup2Structurelle;
    }

    /**
     * Get the h sup3 structurelle.
     *
     * @return bool|null Returns the h sup3 structurelle.
     */
    public function getHSup3Structurelle(): ?bool {
        return $this->hSup3Structurelle;
    }

    /**
     * Get the h sup4 structurelle.
     *
     * @return bool|null Returns the h sup4 structurelle.
     */
    public function getHSup4Structurelle(): ?bool {
        return $this->hSup4Structurelle;
    }

    /**
     * Get the h sup5 structurelle.
     *
     * @return bool|null Returns the h sup5 structurelle.
     */
    public function getHSup5Structurelle(): ?bool {
        return $this->hSup5Structurelle;
    }

    /**
     * Get the heure sup2 influ cassation.
     *
     * @return string|null Returns the heure sup2 influ cassation.
     */
    public function getHeureSup2InfluCassation(): ?string {
        return $this->heureSup2InfluCassation;
    }

    /**
     * Get the heure sup3 influ cassation.
     *
     * @return string|null Returns the heure sup3 influ cassation.
     */
    public function getHeureSup3InfluCassation(): ?string {
        return $this->heureSup3InfluCassation;
    }

    /**
     * Get the heure sup4 influ cassation.
     *
     * @return string|null Returns the heure sup4 influ cassation.
     */
    public function getHeureSup4InfluCassation(): ?string {
        return $this->heureSup4InfluCassation;
    }

    /**
     * Get the heure sup5 influ cassation.
     *
     * @return string|null Returns the heure sup5 influ cassation.
     */
    public function getHeureSup5InfluCassation(): ?string {
        return $this->heureSup5InfluCassation;
    }

    /**
     * Get the heure sup influ cassation.
     *
     * @return string|null Returns the heure sup influ cassation.
     */
    public function getHeureSupInfluCassation(): ?string {
        return $this->heureSupInfluCassation;
    }

    /**
     * Get the heure theo base trav.
     *
     * @return string|null Returns the heure theo base trav.
     */
    public function getHeureTheoBaseTrav(): ?string {
        return $this->heureTheoBaseTrav;
    }

    /**
     * Get the indem cp intervient brut al.
     *
     * @return bool|null Returns the indem cp intervient brut al.
     */
    public function getIndemCpIntervientBrutAl(): ?bool {
        return $this->indemCpIntervientBrutAl;
    }

    /**
     * Get the jour debut transfert.
     *
     * @return int|null Returns the jour debut transfert.
     */
    public function getJourDebutTransfert(): ?int {
        return $this->jourDebutTransfert;
    }

    /**
     * Get the jour fin transfert.
     *
     * @return int|null Returns the jour fin transfert.
     */
    public function getJourFinTransfert(): ?int {
        return $this->jourFinTransfert;
    }

    /**
     * Get the jrn format.
     *
     * @return string|null Returns the jrn format.
     */
    public function getJrnFormat(): ?string {
        return $this->jrnFormat;
    }

    /**
     * Get the jrn regroupe abs.
     *
     * @return bool|null Returns the jrn regroupe abs.
     */
    public function getJrnRegroupeAbs(): ?bool {
        return $this->jrnRegroupeAbs;
    }

    /**
     * Get the jrn tri.
     *
     * @return string|null Returns the jrn tri.
     */
    public function getJrnTri(): ?string {
        return $this->jrnTri;
    }

    /**
     * Get the jrn tri etablissement.
     *
     * @return string|null Returns the jrn tri etablissement.
     */
    public function getJrnTriEtablissement(): ?string {
        return $this->jrnTriEtablissement;
    }

    /**
     * Get the jrn tri service.
     *
     * @return string|null Returns the jrn tri service.
     */
    public function getJrnTriService(): ?string {
        return $this->jrnTriService;
    }

    /**
     * Get the jrn type.
     *
     * @return string|null Returns the jrn type.
     */
    public function getJrnType(): ?string {
        return $this->jrnType;
    }

    /**
     * Get the liaison proprete.
     *
     * @return bool|null Returns the liaison proprete.
     */
    public function getLiaisonProprete(): ?bool {
        return $this->liaisonProprete;
    }

    /**
     * Get the lib arbitrage.
     *
     * @return string|null Returns the lib arbitrage.
     */
    public function getLibArbitrage(): ?string {
        return $this->libArbitrage;
    }

    /**
     * Get the lib base conge.
     *
     * @return string|null Returns the lib base conge.
     */
    public function getLibBaseConge(): ?string {
        return $this->libBaseConge;
    }

    /**
     * Get the lib bqcp.
     *
     * @return string|null Returns the lib bqcp.
     */
    public function getLibBqcp(): ?string {
        return $this->libBqcp;
    }

    /**
     * Get the lib cachet aem.
     *
     * @return string|null Returns the lib cachet aem.
     */
    public function getLibCachetAem(): ?string {
        return $this->libCachetAem;
    }

    /**
     * Get the lib cotis cne.
     *
     * @return string|null Returns the lib cotis cne.
     */
    public function getLibCotisCne(): ?string {
        return $this->libCotisCne;
    }

    /**
     * Get the lib fin contrat.
     *
     * @return string|null Returns the lib fin contrat.
     */
    public function getLibFinContrat(): ?string {
        return $this->libFinContrat;
    }

    /**
     * Get the lib fin contrat cne.
     *
     * @return string|null Returns the lib fin contrat cne.
     */
    public function getLibFinContratCne(): ?string {
        return $this->libFinContratCne;
    }

    /**
     * Get the lib indem cp.
     *
     * @return string|null Returns the lib indem cp.
     */
    public function getLibIndemCp(): ?string {
        return $this->libIndemCp;
    }

    /**
     * Get the libelle libre virement.
     *
     * @return string|null Returns the libelle libre virement.
     */
    public function getLibelleLibreVirement(): ?string {
        return $this->libelleLibreVirement;
    }

    /**
     * Get the ligne bul euro.
     *
     * @return bool|null Returns the ligne bul euro.
     */
    public function getLigneBulEuro(): ?bool {
        return $this->ligneBulEuro;
    }

    /**
     * Get the lignes transport.
     *
     * @return bool|null Returns the lignes transport.
     */
    public function getLignesTransport(): ?bool {
        return $this->lignesTransport;
    }

    /**
     * Get the mail bulletin.
     *
     * @return string|null Returns the mail bulletin.
     */
    public function getMailBulletin(): ?string {
        return $this->mailBulletin;
    }

    /**
     * Get the mail bulletin cle.
     *
     * @return string|null Returns the mail bulletin cle.
     */
    public function getMailBulletinCle(): ?string {
        return $this->mailBulletinCle;
    }

    /**
     * Get the mail bulletin pj.
     *
     * @return string|null Returns the mail bulletin pj.
     */
    public function getMailBulletinPj(): ?string {
        return $this->mailBulletinPj;
    }

    /**
     * Get the mail c li ducs edi.
     *
     * @return bool|null Returns the mail c li ducs edi.
     */
    public function getMailCLiDucsEdi(): ?bool {
        return $this->mailCLiDucsEdi;
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
     * Get the message vu.
     *
     * @return bool|null Returns the message vu.
     */
    public function getMessageVu(): ?bool {
        return $this->messageVu;
    }

    /**
     * Get the millesime1.
     *
     * @return int|null Returns the millesime1.
     */
    public function getMillesime1(): ?int {
        return $this->millesime1;
    }

    /**
     * Get the mode planning.
     *
     * @return int|null Returns the mode planning.
     */
    public function getModePlanning(): ?int {
        return $this->modePlanning;
    }

    /**
     * Get the modele apercu.
     *
     * @return string|null Returns the modele apercu.
     */
    public function getModeleApercu(): ?string {
        return $this->modeleApercu;
    }

    /**
     * Get the modele bon bleu.
     *
     * @return string|null Returns the modele bon bleu.
     */
    public function getModeleBonBleu(): ?string {
        return $this->modeleBonBleu;
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
     * Get the modele certif.
     *
     * @return string|null Returns the modele certif.
     */
    public function getModeleCertif(): ?string {
        return $this->modeleCertif;
    }

    /**
     * Get the modele certif trav.
     *
     * @return string|null Returns the modele certif trav.
     */
    public function getModeleCertifTrav(): ?string {
        return $this->modeleCertifTrav;
    }

    /**
     * Get the modele cheque.
     *
     * @return string|null Returns the modele cheque.
     */
    public function getModeleCheque(): ?string {
        return $this->modeleCheque;
    }

    /**
     * Get the mois cloture an.
     *
     * @return string|null Returns the mois cloture an.
     */
    public function getMoisClotureAn(): ?string {
        return $this->moisClotureAn;
    }

    /**
     * Get the n attest aem.
     *
     * @return int|null Returns the n attest aem.
     */
    public function getNAttestAem(): ?int {
        return $this->nAttestAem;
    }

    /**
     * Get the n attest aemedi.
     *
     * @return int|null Returns the n attest aemedi.
     */
    public function getNAttestAemedi(): ?int {
        return $this->nAttestAemedi;
    }

    /**
     * Get the n attest aemx.
     *
     * @return int|null Returns the n attest aemx.
     */
    public function getNAttestAemx(): ?int {
        return $this->nAttestAemx;
    }

    /**
     * Get the n attest assedic.
     *
     * @return int|null Returns the n attest assedic.
     */
    public function getNAttestAssedic(): ?int {
        return $this->nAttestAssedic;
    }

    /**
     * Get the n attest extras.
     *
     * @return int|null Returns the n attest extras.
     */
    public function getNAttestExtras(): ?int {
        return $this->nAttestExtras;
    }

    /**
     * Get the n attest ijss.
     *
     * @return int|null Returns the n attest ijss.
     */
    public function getNAttestIjss(): ?int {
        return $this->nAttestIjss;
    }

    /**
     * Get the n attest ijss at.
     *
     * @return int|null Returns the n attest ijss at.
     */
    public function getNAttestIjssAt(): ?int {
        return $this->nAttestIjssAt;
    }

    /**
     * Get the n der document.
     *
     * @return int|null Returns the n der document.
     */
    public function getNDerDocument(): ?int {
        return $this->nDerDocument;
    }

    /**
     * Get the nap euro.
     *
     * @return bool|null Returns the nap euro.
     */
    public function getNapEuro(): ?bool {
        return $this->napEuro;
    }

    /**
     * Get the nb exemplaire.
     *
     * @return string|null Returns the nb exemplaire.
     */
    public function getNbExemplaire(): ?string {
        return $this->nbExemplaire;
    }

    /**
     * Get the nce conges spectacles.
     *
     * @return int|null Returns the nce conges spectacles.
     */
    public function getNceCongesSpectacles(): ?int {
        return $this->nceCongesSpectacles;
    }

    /**
     * Get the nouv param retraite type.
     *
     * @return bool|null Returns the nouv param retraite type.
     */
    public function getNouvParamRetraiteType(): ?bool {
        return $this->nouvParamRetraiteType;
    }

    /**
     * Get the options calc abs.
     *
     * @return bool|null Returns the options calc abs.
     */
    public function getOptionsCalcAbs(): ?bool {
        return $this->optionsCalcAbs;
    }

    /**
     * Get the ordre libelle h sup.
     *
     * @return string|null Returns the ordre libelle h sup.
     */
    public function getOrdreLibelleHSup(): ?string {
        return $this->ordreLibelleHSup;
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
     * Get the part sal seule.
     *
     * @return bool|null Returns the part sal seule.
     */
    public function getPartSalSeule(): ?bool {
        return $this->partSalSeule;
    }

    /**
     * Get the pas gestion indice bul.
     *
     * @return bool|null Returns the pas gestion indice bul.
     */
    public function getPasGestionIndiceBul(): ?bool {
        return $this->pasGestionIndiceBul;
    }

    /**
     * Get the pas prendre iccp fillon.
     *
     * @return bool|null Returns the pas prendre iccp fillon.
     */
    public function getPasPrendreIccpFillon(): ?bool {
        return $this->pasPrendreIccpFillon;
    }

    /**
     * Get the pas sous tot s base.
     *
     * @return bool|null Returns the pas sous tot s base.
     */
    public function getPasSousTotSBase(): ?bool {
        return $this->pasSousTotSBase;
    }

    /**
     * Get the passage35 h fait.
     *
     * @return bool|null Returns the passage35 h fait.
     */
    public function getPassage35HFait(): ?bool {
        return $this->passage35HFait;
    }

    /**
     * Get the path virement.
     *
     * @return string|null Returns the path virement.
     */
    public function getPathVirement(): ?string {
        return $this->pathVirement;
    }

    /**
     * Get the periode i paie.
     *
     * @return DateTime|null Returns the periode i paie.
     */
    public function getPeriodeIPaie(): ?DateTime {
        return $this->periodeIPaie;
    }

    /**
     * Get the periode paie.
     *
     * @return DateTime|null Returns the periode paie.
     */
    public function getPeriodePaie(): ?DateTime {
        return $this->periodePaie;
    }

    /**
     * Get the pj mail c li ducs edi.
     *
     * @return bool|null Returns the pj mail c li ducs edi.
     */
    public function getPjMailCLiDucsEdi(): ?bool {
        return $this->pjMailCLiDucsEdi;
    }

    /**
     * Get the pj mail cli coupon paiement.
     *
     * @return bool|null Returns the pj mail cli coupon paiement.
     */
    public function getPjMailCliCouponPaiement(): ?bool {
        return $this->pjMailCliCouponPaiement;
    }

    /**
     * Get the plafond.
     *
     * @return float|null Returns the plafond.
     */
    public function getPlafond(): ?float {
        return $this->plafond;
    }

    /**
     * Get the porta frais sante certif trav.
     *
     * @return bool|null Returns the porta frais sante certif trav.
     */
    public function getPortaFraisSanteCertifTrav(): ?bool {
        return $this->portaFraisSanteCertifTrav;
    }

    /**
     * Get the porta prevoyance oblig.
     *
     * @return bool|null Returns the porta prevoyance oblig.
     */
    public function getPortaPrevoyanceOblig(): ?bool {
        return $this->portaPrevoyanceOblig;
    }

    /**
     * Get the preparation tdp.
     *
     * @return bool|null Returns the preparation tdp.
     */
    public function getPreparationTdp(): ?bool {
        return $this->preparationTdp;
    }

    /**
     * Get the presence min.
     *
     * @return string|null Returns the presence min.
     */
    public function getPresenceMin(): ?string {
        return $this->presenceMin;
    }

    /**
     * Get the prorata dif certif trav.
     *
     * @return bool|null Returns the prorata dif certif trav.
     */
    public function getProrataDifCertifTrav(): ?bool {
        return $this->prorataDifCertifTrav;
    }

    /**
     * Get the raz commentaire.
     *
     * @return string|null Returns the raz commentaire.
     */
    public function getRazCommentaire(): ?string {
        return $this->razCommentaire;
    }

    /**
     * Get the raz h sup.
     *
     * @return string|null Returns the raz h sup.
     */
    public function getRazHSup(): ?string {
        return $this->razHSup;
    }

    /**
     * Get the rdlpascii.
     *
     * @return bool|null Returns the rdlpascii.
     */
    public function getRdlpascii(): ?bool {
        return $this->rdlpascii;
    }

    /**
     * Get the rdlpemployes.
     *
     * @return bool|null Returns the rdlpemployes.
     */
    public function getRdlpemployes(): ?bool {
        return $this->rdlpemployes;
    }

    /**
     * Get the ref remise.
     *
     * @return int|null Returns the ref remise.
     */
    public function getRefRemise(): ?int {
        return $this->refRemise;
    }

    /**
     * Get the ref trans.
     *
     * @return int|null Returns the ref trans.
     */
    public function getRefTrans(): ?int {
        return $this->refTrans;
    }

    /**
     * Get the reference interne virement.
     *
     * @return string|null Returns the reference interne virement.
     */
    public function getReferenceInterneVirement(): ?string {
        return $this->referenceInterneVirement;
    }

    /**
     * Get the regroup lib ed bul.
     *
     * @return bool|null Returns the regroup lib ed bul.
     */
    public function getRegroupLibEdBul(): ?bool {
        return $this->regroupLibEdBul;
    }

    /**
     * Get the report minimum.
     *
     * @return int|null Returns the report minimum.
     */
    public function getReportMinimum(): ?int {
        return $this->reportMinimum;
    }

    /**
     * Get the retraite97.
     *
     * @return bool|null Returns the retraite97.
     */
    public function getRetraite97(): ?bool {
        return $this->retraite97;
    }

    /**
     * Get the sais plan emp sem.
     *
     * @return string|null Returns the sais plan emp sem.
     */
    public function getSaisPlanEmpSem(): ?string {
        return $this->saisPlanEmpSem;
    }

    /**
     * Get the saisie indice bul.
     *
     * @return bool|null Returns the saisie indice bul.
     */
    public function getSaisieIndiceBul(): ?bool {
        return $this->saisieIndiceBul;
    }

    /**
     * Get the saut page.
     *
     * @return bool|null Returns the saut page.
     */
    public function getSautPage(): ?bool {
        return $this->sautPage;
    }

    /**
     * Get the seuil.
     *
     * @return float|null Returns the seuil.
     */
    public function getSeuil(): ?float {
        return $this->seuil;
    }

    /**
     * Get the seuil conting.
     *
     * @return float|null Returns the seuil conting.
     */
    public function getSeuilConting(): ?float {
        return $this->seuilConting;
    }

    /**
     * Get the stc auto.
     *
     * @return bool|null Returns the stc auto.
     */
    public function getStcAuto(): ?bool {
        return $this->stcAuto;
    }

    /**
     * Get the tab bord tri etablissement.
     *
     * @return bool|null Returns the tab bord tri etablissement.
     */
    public function getTabBordTriEtablissement(): ?bool {
        return $this->tabBordTriEtablissement;
    }

    /**
     * Get the tab bord tri service.
     *
     * @return bool|null Returns the tab bord tri service.
     */
    public function getTabBordTriService(): ?bool {
        return $this->tabBordTriService;
    }

    /**
     * Get the tableau charge.
     *
     * @return string|null Returns the tableau charge.
     */
    public function getTableauCharge(): ?string {
        return $this->tableauCharge;
    }

    /**
     * Get the tds annee.
     *
     * @return int|null Returns the tds annee.
     */
    public function getTdsAnnee(): ?int {
        return $this->tdsAnnee;
    }

    /**
     * Get the tds euro.
     *
     * @return bool|null Returns the tds euro.
     */
    public function getTdsEuro(): ?bool {
        return $this->tdsEuro;
    }

    /**
     * Get the tot gene isole.
     *
     * @return string|null Returns the tot gene isole.
     */
    public function getTotGeneIsole(): ?string {
        return $this->totGeneIsole;
    }

    /**
     * Get the tot service isole.
     *
     * @return string|null Returns the tot service isole.
     */
    public function getTotServiceIsole(): ?string {
        return $this->totServiceIsole;
    }

    /**
     * Get the total etab isole.
     *
     * @return string|null Returns the total etab isole.
     */
    public function getTotalEtabIsole(): ?string {
        return $this->totalEtabIsole;
    }

    /**
     * Get the trans rupture.
     *
     * @return string|null Returns the trans rupture.
     */
    public function getTransRupture(): ?string {
        return $this->transRupture;
    }

    /**
     * Get the trans tri etablissement.
     *
     * @return string|null Returns the trans tri etablissement.
     */
    public function getTransTriEtablissement(): ?string {
        return $this->transTriEtablissement;
    }

    /**
     * Get the transfert tds emp.
     *
     * @return bool|null Returns the transfert tds emp.
     */
    public function getTransfertTdsEmp(): ?bool {
        return $this->transfertTdsEmp;
    }

    /**
     * Get the tri employe.
     *
     * @return string|null Returns the tri employe.
     */
    public function getTriEmploye(): ?string {
        return $this->triEmploye;
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
     * Get the type abs sans solde.
     *
     * @return string|null Returns the type abs sans solde.
     */
    public function getTypeAbsSansSolde(): ?string {
        return $this->typeAbsSansSolde;
    }

    /**
     * Get the type agrement aem.
     *
     * @return string|null Returns the type agrement aem.
     */
    public function getTypeAgrementAem(): ?string {
        return $this->typeAgrementAem;
    }

    /**
     * Get the type bordereau prepa.
     *
     * @return string|null Returns the type bordereau prepa.
     */
    public function getTypeBordereauPrepa(): ?string {
        return $this->typeBordereauPrepa;
    }

    /**
     * Get the type bulletin.
     *
     * @return string|null Returns the type bulletin.
     */
    public function getTypeBulletin(): ?string {
        return $this->typeBulletin;
    }

    /**
     * Get the type dossier.
     *
     * @return string|null Returns the type dossier.
     */
    public function getTypeDossier(): ?string {
        return $this->typeDossier;
    }

    /**
     * Get the type due.
     *
     * @return string|null Returns the type due.
     */
    public function getTypeDue(): ?string {
        return $this->typeDue;
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
     * Get the type fich bilat.
     *
     * @return string|null Returns the type fich bilat.
     */
    public function getTypeFichBilat(): ?string {
        return $this->typeFichBilat;
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
     * Get the type modele.
     *
     * @return string|null Returns the type modele.
     */
    public function getTypeModele(): ?string {
        return $this->typeModele;
    }

    /**
     * Get the type prep dadsu.
     *
     * @return string|null Returns the type prep dadsu.
     */
    public function getTypePrepDadsu(): ?string {
        return $this->typePrepDadsu;
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
     * Get the type stc.
     *
     * @return string|null Returns the type stc.
     */
    public function getTypeStc(): ?string {
        return $this->typeStc;
    }

    /**
     * Get the type taux intemperie.
     *
     * @return string|null Returns the type taux intemperie.
     */
    public function getTypeTauxIntemperie(): ?string {
        return $this->typeTauxIntemperie;
    }

    /**
     * Get the type tri.
     *
     * @return string|null Returns the type tri.
     */
    public function getTypeTri(): ?string {
        return $this->typeTri;
    }

    /**
     * Get the type virement.
     *
     * @return string|null Returns the type virement.
     */
    public function getTypeVirement(): ?string {
        return $this->typeVirement;
    }

    /**
     * Get the type visu col saisie bul.
     *
     * @return string|null Returns the type visu col saisie bul.
     */
    public function getTypeVisuColSaisieBul(): ?string {
        return $this->typeVisuColSaisieBul;
    }

    /**
     * Get the utilise pdp quadra.
     *
     * @return bool|null Returns the utilise pdp quadra.
     */
    public function getUtilisePdpQuadra(): ?bool {
        return $this->utilisePdpQuadra;
    }

    /**
     * Get the utilise pdp quadra2.
     *
     * @return bool|null Returns the utilise pdp quadra2.
     */
    public function getUtilisePdpQuadra2(): ?bool {
        return $this->utilisePdpQuadra2;
    }

    /**
     * Get the val cp bulletin.
     *
     * @return bool|null Returns the val cp bulletin.
     */
    public function getValCpBulletin(): ?bool {
        return $this->valCpBulletin;
    }

    /**
     * Get the val filtre liste emp.
     *
     * @return int|null Returns the val filtre liste emp.
     */
    public function getValFiltreListeEmp(): ?int {
        return $this->valFiltreListeEmp;
    }

    /**
     * Get the version controle dadsu.
     *
     * @return int|null Returns the version controle dadsu.
     */
    public function getVersionControleDadsu(): ?int {
        return $this->versionControleDadsu;
    }

    /**
     * Get the vir code etab.
     *
     * @return string|null Returns the vir code etab.
     */
    public function getVirCodeEtab(): ?string {
        return $this->virCodeEtab;
    }

    /**
     * Get the vir collectivite.
     *
     * @return string|null Returns the vir collectivite.
     */
    public function getVirCollectivite(): ?string {
        return $this->virCollectivite;
    }

    /**
     * Get the vir comptable centre.
     *
     * @return string|null Returns the vir comptable centre.
     */
    public function getVirComptableCentre(): ?string {
        return $this->virComptableCentre;
    }

    /**
     * Get the vir comptable sub.
     *
     * @return string|null Returns the vir comptable sub.
     */
    public function getVirComptableSub(): ?string {
        return $this->virComptableSub;
    }

    /**
     * Get the vir fonction publique.
     *
     * @return bool|null Returns the vir fonction publique.
     */
    public function getVirFonctionPublique(): ?bool {
        return $this->virFonctionPublique;
    }

    /**
     * Get the vir seuil.
     *
     * @return float|null Returns the vir seuil.
     */
    public function getVirSeuil(): ?float {
        return $this->virSeuil;
    }

    /**
     * Get the vir type etab.
     *
     * @return string|null Returns the vir type etab.
     */
    public function getVirTypeEtab(): ?string {
        return $this->virTypeEtab;
    }

    /**
     * Get the virement cr lf.
     *
     * @return bool|null Returns the virement cr lf.
     */
    public function getVirementCrLf(): ?bool {
        return $this->virementCrLf;
    }

    /**
     * Get the virements euro.
     *
     * @return string|null Returns the virements euro.
     */
    public function getVirementsEuro(): ?string {
        return $this->virementsEuro;
    }

    /**
     * Get the web prioritaire.
     *
     * @return bool|null Returns the web prioritaire.
     */
    public function getWebPrioritaire(): ?bool {
        return $this->webPrioritaire;
    }

    /**
     * Set the absence extra.
     *
     * @param string|null $absenceExtra The absence extra.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setAbsenceExtra(?string $absenceExtra): ConstantesEntreprise {
        $this->absenceExtra = $absenceExtra;
        return $this;
    }

    /**
     * Set the activer pointage qws.
     *
     * @param bool|null $activerPointageQws The activer pointage qws.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setActiverPointageQws(?bool $activerPointageQws): ConstantesEntreprise {
        $this->activerPointageQws = $activerPointageQws;
        return $this;
    }

    /**
     * Set the adhesion tds norme.
     *
     * @param string|null $adhesionTdsNorme The adhesion tds norme.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setAdhesionTdsNorme(?string $adhesionTdsNorme): ConstantesEntreprise {
        $this->adhesionTdsNorme = $adhesionTdsNorme;
        return $this;
    }

    /**
     * Set the affaire.
     *
     * @param string|null $affaire The affaire.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setAffaire(?string $affaire): ConstantesEntreprise {
        $this->affaire = $affaire;
        return $this;
    }

    /**
     * Set the affectation taux27.
     *
     * @param bool|null $affectationTaux27 The affectation taux27.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setAffectationTaux27(?bool $affectationTaux27): ConstantesEntreprise {
        $this->affectationTaux27 = $affectationTaux27;
        return $this;
    }

    /**
     * Set the analytique employe.
     *
     * @param bool|null $analytiqueEmploye The analytique employe.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setAnalytiqueEmploye(?bool $analytiqueEmploye): ConstantesEntreprise {
        $this->analytiqueEmploye = $analytiqueEmploye;
        return $this;
    }

    /**
     * Set the arbitrage auto.
     *
     * @param string|null $arbitrageAuto The arbitrage auto.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setArbitrageAuto(?string $arbitrageAuto): ConstantesEntreprise {
        $this->arbitrageAuto = $arbitrageAuto;
        return $this;
    }

    /**
     * Set the archivage actif.
     *
     * @param bool|null $archivageActif The archivage actif.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setArchivageActif(?bool $archivageActif): ConstantesEntreprise {
        $this->archivageActif = $archivageActif;
        return $this;
    }

    /**
     * Set the attest auto.
     *
     * @param bool|null $attestAuto The attest auto.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setAttestAuto(?bool $attestAuto): ConstantesEntreprise {
        $this->attestAuto = $attestAuto;
        return $this;
    }

    /**
     * Set the beneficie cice.
     *
     * @param bool|null $beneficieCice The beneficie cice.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setBeneficieCice(?bool $beneficieCice): ConstantesEntreprise {
        $this->beneficieCice = $beneficieCice;
        return $this;
    }

    /**
     * Set the brut al sal min conv.
     *
     * @param bool|null $brutAlSalMinConv The brut al sal min conv.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setBrutAlSalMinConv(?bool $brutAlSalMinConv): ConstantesEntreprise {
        $this->brutAlSalMinConv = $brutAlSalMinConv;
        return $this;
    }

    /**
     * Set the calcul auto h theorique.
     *
     * @param bool|null $calculAutoHTheorique The calcul auto h theorique.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCalculAutoHTheorique(?bool $calculAutoHTheorique): ConstantesEntreprise {
        $this->calculAutoHTheorique = $calculAutoHTheorique;
        return $this;
    }

    /**
     * Set the certif auto.
     *
     * @param bool|null $certifAuto The certif auto.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCertifAuto(?bool $certifAuto): ConstantesEntreprise {
        $this->certifAuto = $certifAuto;
        return $this;
    }

    /**
     * Set the cheques euro.
     *
     * @param string|null $chequesEuro The cheques euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setChequesEuro(?string $chequesEuro): ConstantesEntreprise {
        $this->chequesEuro = $chequesEuro;
        return $this;
    }

    /**
     * Set the choix edition cheque tc.
     *
     * @param bool|null $choixEditionChequeTc The choix edition cheque tc.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setChoixEditionChequeTc(?bool $choixEditionChequeTc): ConstantesEntreprise {
        $this->choixEditionChequeTc = $choixEditionChequeTc;
        return $this;
    }

    /**
     * Set the cice pj mail cli ducs edi.
     *
     * @param bool|null $cicePjMailCliDucsEdi The cice pj mail cli ducs edi.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCicePjMailCliDucsEdi(?bool $cicePjMailCliDucsEdi): ConstantesEntreprise {
        $this->cicePjMailCliDucsEdi = $cicePjMailCliDucsEdi;
        return $this;
    }

    /**
     * Set the cle acces1.
     *
     * @param string|null $cleAcces1 The cle acces1.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCleAcces1(?string $cleAcces1): ConstantesEntreprise {
        $this->cleAcces1 = $cleAcces1;
        return $this;
    }

    /**
     * Set the cle portable.
     *
     * @param string|null $clePortable The cle portable.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setClePortable(?string $clePortable): ConstantesEntreprise {
        $this->clePortable = $clePortable;
        return $this;
    }

    /**
     * Set the code org btpdadsu.
     *
     * @param string|null $codeOrgBtpdadsu The code org btpdadsu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCodeOrgBtpdadsu(?string $codeOrgBtpdadsu): ConstantesEntreprise {
        $this->codeOrgBtpdadsu = $codeOrgBtpdadsu;
        return $this;
    }

    /**
     * Set the collaborateuri paie.
     *
     * @param string|null $collaborateuriPaie The collaborateuri paie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCollaborateuriPaie(?string $collaborateuriPaie): ConstantesEntreprise {
        $this->collaborateuriPaie = $collaborateuriPaie;
        return $this;
    }

    /**
     * Set the compression.
     *
     * @param bool|null $compression The compression.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCompression(?bool $compression): ConstantesEntreprise {
        $this->compression = $compression;
        return $this;
    }

    /**
     * Set the compte gain euro.
     *
     * @param string|null $compteGainEuro The compte gain euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCompteGainEuro(?string $compteGainEuro): ConstantesEntreprise {
        $this->compteGainEuro = $compteGainEuro;
        return $this;
    }

    /**
     * Set the compte perte euro.
     *
     * @param string|null $comptePerteEuro The compte perte euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setComptePerteEuro(?string $comptePerteEuro): ConstantesEntreprise {
        $this->comptePerteEuro = $comptePerteEuro;
        return $this;
    }

    /**
     * Set the cpta elit euros.
     *
     * @param bool|null $cptaElitEuros The cpta elit euros.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCptaElitEuros(?bool $cptaElitEuros): ConstantesEntreprise {
        $this->cptaElitEuros = $cptaElitEuros;
        return $this;
    }

    /**
     * Set the ctrl auto cp.
     *
     * @param bool|null $ctrlAutoCp The ctrl auto cp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCtrlAutoCp(?bool $ctrlAutoCp): ConstantesEntreprise {
        $this->ctrlAutoCp = $ctrlAutoCp;
        return $this;
    }

    /**
     * Set the ctrl auto cp anticip.
     *
     * @param bool|null $ctrlAutoCpAnticip The ctrl auto cp anticip.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCtrlAutoCpAnticip(?bool $ctrlAutoCpAnticip): ConstantesEntreprise {
        $this->ctrlAutoCpAnticip = $ctrlAutoCpAnticip;
        return $this;
    }

    /**
     * Set the ctrl taux base.
     *
     * @param bool|null $ctrlTauxBase The ctrl taux base.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCtrlTauxBase(?bool $ctrlTauxBase): ConstantesEntreprise {
        $this->ctrlTauxBase = $ctrlTauxBase;
        return $this;
    }

    /**
     * Set the dads dernier choix gestion aen.
     *
     * @param string|null $dadsDernierChoixGestionAen The dads dernier choix gestion aen.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDadsDernierChoixGestionAen(?string $dadsDernierChoixGestionAen): ConstantesEntreprise {
        $this->dadsDernierChoixGestionAen = $dadsDernierChoixGestionAen;
        return $this;
    }

    /**
     * Set the dads type gestion aen.
     *
     * @param string|null $dadsTypeGestionAen The dads type gestion aen.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDadsTypeGestionAen(?string $dadsTypeGestionAen): ConstantesEntreprise {
        $this->dadsTypeGestionAen = $dadsTypeGestionAen;
        return $this;
    }

    /**
     * Set the dadsu num agr ansp.
     *
     * @param string|null $dadsuNumAgrAnsp The dadsu num agr ansp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDadsuNumAgrAnsp(?string $dadsuNumAgrAnsp): ConstantesEntreprise {
        $this->dadsuNumAgrAnsp = $dadsuNumAgrAnsp;
        return $this;
    }

    /**
     * Set the dadsu ref dec.
     *
     * @param string|null $dadsuRefDec The dadsu ref dec.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDadsuRefDec(?string $dadsuRefDec): ConstantesEntreprise {
        $this->dadsuRefDec = $dadsuRefDec;
        return $this;
    }

    /**
     * Set the das type decl.
     *
     * @param string|null $dasTypeDecl The das type decl.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDasTypeDecl(?string $dasTypeDecl): ConstantesEntreprise {
        $this->dasTypeDecl = $dasTypeDecl;
        return $this;
    }

    /**
     * Set the das type decl detail.
     *
     * @param string|null $dasTypeDeclDetail The das type decl detail.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDasTypeDeclDetail(?string $dasTypeDeclDetail): ConstantesEntreprise {
        $this->dasTypeDeclDetail = $dasTypeDeclDetail;
        return $this;
    }

    /**
     * Set the date dp.
     *
     * @param DateTime|null $dateDp The date dp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDateDp(?DateTime $dateDp): ConstantesEntreprise {
        $this->dateDp = $dateDp;
        return $this;
    }

    /**
     * Set the debut periode das.
     *
     * @param DateTime|null $debutPeriodeDas The debut periode das.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDebutPeriodeDas(?DateTime $debutPeriodeDas): ConstantesEntreprise {
        $this->debutPeriodeDas = $debutPeriodeDas;
        return $this;
    }

    /**
     * Set the debut periode histo das.
     *
     * @param DateTime|null $debutPeriodeHistoDas The debut periode histo das.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDebutPeriodeHistoDas(?DateTime $debutPeriodeHistoDas): ConstantesEntreprise {
        $this->debutPeriodeHistoDas = $debutPeriodeHistoDas;
        return $this;
    }

    /**
     * Set the deduction h sup fillon.
     *
     * @param bool|null $deductionHSupFillon The deduction h sup fillon.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDeductionHSupFillon(?bool $deductionHSupFillon): ConstantesEntreprise {
        $this->deductionHSupFillon = $deductionHSupFillon;
        return $this;
    }

    /**
     * Set the deduire h sup non structurelle.
     *
     * @param bool|null $deduireHSupNonStructurelle The deduire h sup non structurelle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDeduireHSupNonStructurelle(?bool $deduireHSupNonStructurelle): ConstantesEntreprise {
        $this->deduireHSupNonStructurelle = $deduireHSupNonStructurelle;
        return $this;
    }

    /**
     * Set the dernier indice bul.
     *
     * @param int|null $dernierIndiceBul The dernier indice bul.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDernierIndiceBul(?int $dernierIndiceBul): ConstantesEntreprise {
        $this->dernierIndiceBul = $dernierIndiceBul;
        return $this;
    }

    /**
     * Set the dest point irc.
     *
     * @param string|null $destPointIrc The dest point irc.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDestPointIrc(?string $destPointIrc): ConstantesEntreprise {
        $this->destPointIrc = $destPointIrc;
        return $this;
    }

    /**
     * Set the dest tri point.
     *
     * @param string|null $destTriPoint The dest tri point.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDestTriPoint(?string $destTriPoint): ConstantesEntreprise {
        $this->destTriPoint = $destTriPoint;
        return $this;
    }

    /**
     * Set the dossier proprete.
     *
     * @param string|null $dossierProprete The dossier proprete.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDossierProprete(?string $dossierProprete): ConstantesEntreprise {
        $this->dossierProprete = $dossierProprete;
        return $this;
    }

    /**
     * Set the dossier sur web.
     *
     * @param bool|null $dossierSurWeb The dossier sur web.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDossierSurWeb(?bool $dossierSurWeb): ConstantesEntreprise {
        $this->dossierSurWeb = $dossierSurWeb;
        return $this;
    }

    /**
     * Set the ds code collab.
     *
     * @param string|null $dsCodeCollab The ds code collab.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDsCodeCollab(?string $dsCodeCollab): ConstantesEntreprise {
        $this->dsCodeCollab = $dsCodeCollab;
        return $this;
    }

    /**
     * Set the ds date retour.
     *
     * @param DateTime|null $dsDateRetour The ds date retour.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDsDateRetour(?DateTime $dsDateRetour): ConstantesEntreprise {
        $this->dsDateRetour = $dsDateRetour;
        return $this;
    }

    /**
     * Set the ds date sortie.
     *
     * @param DateTime|null $dsDateSortie The ds date sortie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDsDateSortie(?DateTime $dsDateSortie): ConstantesEntreprise {
        $this->dsDateSortie = $dsDateSortie;
        return $this;
    }

    /**
     * Set the ds fusion.
     *
     * @param string|null $dsFusion The ds fusion.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDsFusion(?string $dsFusion): ConstantesEntreprise {
        $this->dsFusion = $dsFusion;
        return $this;
    }

    /**
     * Set the ds type edition.
     *
     * @param string|null $dsTypeEdition The ds type edition.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDsTypeEdition(?string $dsTypeEdition): ConstantesEntreprise {
        $this->dsTypeEdition = $dsTypeEdition;
        return $this;
    }

    /**
     * Set the dt debut periode.
     *
     * @param DateTime|null $dtDebutPeriode The dt debut periode.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDtDebutPeriode(?DateTime $dtDebutPeriode): ConstantesEntreprise {
        $this->dtDebutPeriode = $dtDebutPeriode;
        return $this;
    }

    /**
     * Set the dt fin periode.
     *
     * @param DateTime|null $dtFinPeriode The dt fin periode.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDtFinPeriode(?DateTime $dtFinPeriode): ConstantesEntreprise {
        $this->dtFinPeriode = $dtFinPeriode;
        return $this;
    }

    /**
     * Set the ducs franc euro.
     *
     * @param string|null $ducsFrancEuro The ducs franc euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDucsFrancEuro(?string $ducsFrancEuro): ConstantesEntreprise {
        $this->ducsFrancEuro = $ducsFrancEuro;
        return $this;
    }

    /**
     * Set the ecr type.
     *
     * @param string|null $ecrType The ecr type.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEcrType(?string $ecrType): ConstantesEntreprise {
        $this->ecrType = $ecrType;
        return $this;
    }

    /**
     * Set the ed bord choix modele.
     *
     * @param string|null $edBordChoixModele The ed bord choix modele.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBordChoixModele(?string $edBordChoixModele): ConstantesEntreprise {
        $this->edBordChoixModele = $edBordChoixModele;
        return $this;
    }

    /**
     * Set the ed bord rupture emp.
     *
     * @param bool|null $edBordRuptureEmp The ed bord rupture emp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBordRuptureEmp(?bool $edBordRuptureEmp): ConstantesEntreprise {
        $this->edBordRuptureEmp = $edBordRuptureEmp;
        return $this;
    }

    /**
     * Set the ed bord type imp.
     *
     * @param string|null $edBordTypeImp The ed bord type imp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBordTypeImp(?string $edBordTypeImp): ConstantesEntreprise {
        $this->edBordTypeImp = $edBordTypeImp;
        return $this;
    }

    /**
     * Set the ed bordereau.
     *
     * @param bool|null $edBordereau The ed bordereau.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBordereau(?bool $edBordereau): ConstantesEntreprise {
        $this->edBordereau = $edBordereau;
        return $this;
    }

    /**
     * Set the ed bordereau prep.
     *
     * @param bool|null $edBordereauPrep The ed bordereau prep.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBordereauPrep(?bool $edBordereauPrep): ConstantesEntreprise {
        $this->edBordereauPrep = $edBordereauPrep;
        return $this;
    }

    /**
     * Set the ed bordereau prepa.
     *
     * @param bool|null $edBordereauPrepa The ed bordereau prepa.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBordereauPrepa(?bool $edBordereauPrepa): ConstantesEntreprise {
        $this->edBordereauPrepa = $edBordereauPrepa;
        return $this;
    }

    /**
     * Set the ed bul last fax.
     *
     * @param string|null $edBulLastFax The ed bul last fax.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBulLastFax(?string $edBulLastFax): ConstantesEntreprise {
        $this->edBulLastFax = $edBulLastFax;
        return $this;
    }

    /**
     * Set the ed bul last mail.
     *
     * @param string|null $edBulLastMail The ed bul last mail.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBulLastMail(?string $edBulLastMail): ConstantesEntreprise {
        $this->edBulLastMail = $edBulLastMail;
        return $this;
    }

    /**
     * Set the ed bul type sortie.
     *
     * @param string|null $edBulTypeSortie The ed bul type sortie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBulTypeSortie(?string $edBulTypeSortie): ConstantesEntreprise {
        $this->edBulTypeSortie = $edBulTypeSortie;
        return $this;
    }

    /**
     * Set the ed correspondance.
     *
     * @param bool|null $edCorrespondance The ed correspondance.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdCorrespondance(?bool $edCorrespondance): ConstantesEntreprise {
        $this->edCorrespondance = $edCorrespondance;
        return $this;
    }

    /**
     * Set the ed ducs auto.
     *
     * @param bool|null $edDucsAuto The ed ducs auto.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdDucsAuto(?bool $edDucsAuto): ConstantesEntreprise {
        $this->edDucsAuto = $edDucsAuto;
        return $this;
    }

    /**
     * Set the ed ducs nb ex.
     *
     * @param string|null $edDucsNbEx The ed ducs nb ex.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdDucsNbEx(?string $edDucsNbEx): ConstantesEntreprise {
        $this->edDucsNbEx = $edDucsNbEx;
        return $this;
    }

    /**
     * Set the ed ducs opt btp.
     *
     * @param string|null $edDucsOptBtp The ed ducs opt btp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdDucsOptBtp(?string $edDucsOptBtp): ConstantesEntreprise {
        $this->edDucsOptBtp = $edDucsOptBtp;
        return $this;
    }

    /**
     * Set the ed ducs type sortie.
     *
     * @param string|null $edDucsTypeSortie The ed ducs type sortie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdDucsTypeSortie(?string $edDucsTypeSortie): ConstantesEntreprise {
        $this->edDucsTypeSortie = $edDucsTypeSortie;
        return $this;
    }

    /**
     * Set the ed h sup bonif que majo.
     *
     * @param bool|null $edHSupBonifQueMajo The ed h sup bonif que majo.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdHSupBonifQueMajo(?bool $edHSupBonifQueMajo): ConstantesEntreprise {
        $this->edHSupBonifQueMajo = $edHSupBonifQueMajo;
        return $this;
    }

    /**
     * Set the ed histo tri emp.
     *
     * @param string|null $edHistoTriEmp The ed histo tri emp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdHistoTriEmp(?string $edHistoTriEmp): ConstantesEntreprise {
        $this->edHistoTriEmp = $edHistoTriEmp;
        return $this;
    }

    /**
     * Set the ed histo tri etablissement.
     *
     * @param bool|null $edHistoTriEtablissement The ed histo tri etablissement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdHistoTriEtablissement(?bool $edHistoTriEtablissement): ConstantesEntreprise {
        $this->edHistoTriEtablissement = $edHistoTriEtablissement;
        return $this;
    }

    /**
     * Set the ed histo tri service.
     *
     * @param bool|null $edHistoTriService The ed histo tri service.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdHistoTriService(?bool $edHistoTriService): ConstantesEntreprise {
        $this->edHistoTriService = $edHistoTriService;
        return $this;
    }

    /**
     * Set the ed histo type.
     *
     * @param string|null $edHistoType The ed histo type.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdHistoType(?string $edHistoType): ConstantesEntreprise {
        $this->edHistoType = $edHistoType;
        return $this;
    }

    /**
     * Set the ed imput comptable.
     *
     * @param bool|null $edImputComptable The ed imput comptable.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdImputComptable(?bool $edImputComptable): ConstantesEntreprise {
        $this->edImputComptable = $edImputComptable;
        return $this;
    }

    /**
     * Set the ed texte1.
     *
     * @param string|null $edTexte1 The ed texte1.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdTexte1(?string $edTexte1): ConstantesEntreprise {
        $this->edTexte1 = $edTexte1;
        return $this;
    }

    /**
     * Set the ed texte2.
     *
     * @param string|null $edTexte2 The ed texte2.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdTexte2(?string $edTexte2): ConstantesEntreprise {
        $this->edTexte2 = $edTexte2;
        return $this;
    }

    /**
     * Set the ed trt cpta last fax.
     *
     * @param string|null $edTrtCptaLastFax The ed trt cpta last fax.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdTrtCptaLastFax(?string $edTrtCptaLastFax): ConstantesEntreprise {
        $this->edTrtCptaLastFax = $edTrtCptaLastFax;
        return $this;
    }

    /**
     * Set the ed trt cpta last mail.
     *
     * @param string|null $edTrtCptaLastMail The ed trt cpta last mail.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdTrtCptaLastMail(?string $edTrtCptaLastMail): ConstantesEntreprise {
        $this->edTrtCptaLastMail = $edTrtCptaLastMail;
        return $this;
    }

    /**
     * Set the ed trt cpta sortie.
     *
     * @param string|null $edTrtCptaSortie The ed trt cpta sortie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdTrtCptaSortie(?string $edTrtCptaSortie): ConstantesEntreprise {
        $this->edTrtCptaSortie = $edTrtCptaSortie;
        return $this;
    }

    /**
     * Set the edit qpxl absences.
     *
     * @param bool|null $editQpxlAbsences The edit qpxl absences.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditQpxlAbsences(?bool $editQpxlAbsences): ConstantesEntreprise {
        $this->editQpxlAbsences = $editQpxlAbsences;
        return $this;
    }

    /**
     * Set the edit qpxl acomptes.
     *
     * @param bool|null $editQpxlAcomptes The edit qpxl acomptes.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditQpxlAcomptes(?bool $editQpxlAcomptes): ConstantesEntreprise {
        $this->editQpxlAcomptes = $editQpxlAcomptes;
        return $this;
    }

    /**
     * Set the edit qpxl tri emp.
     *
     * @param string|null $editQpxlTriEmp The edit qpxl tri emp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditQpxlTriEmp(?string $editQpxlTriEmp): ConstantesEntreprise {
        $this->editQpxlTriEmp = $editQpxlTriEmp;
        return $this;
    }

    /**
     * Set the edit qpxl vider lib.
     *
     * @param bool|null $editQpxlViderLib The edit qpxl vider lib.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditQpxlViderLib(?bool $editQpxlViderLib): ConstantesEntreprise {
        $this->editQpxlViderLib = $editQpxlViderLib;
        return $this;
    }

    /**
     * Set the editer bulletin stc.
     *
     * @param bool|null $editerBulletinStc The editer bulletin stc.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditerBulletinStc(?bool $editerBulletinStc): ConstantesEntreprise {
        $this->editerBulletinStc = $editerBulletinStc;
        return $this;
    }

    /**
     * Set the edition cheque tc.
     *
     * @param bool|null $editionChequeTc The edition cheque tc.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditionChequeTc(?bool $editionChequeTc): ConstantesEntreprise {
        $this->editionChequeTc = $editionChequeTc;
        return $this;
    }

    /**
     * Set the edition date.
     *
     * @param bool|null $editionDate The edition date.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditionDate(?bool $editionDate): ConstantesEntreprise {
        $this->editionDate = $editionDate;
        return $this;
    }

    /**
     * Set the edition heure.
     *
     * @param bool|null $editionHeure The edition heure.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditionHeure(?bool $editionHeure): ConstantesEntreprise {
        $this->editionHeure = $editionHeure;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEmail(?string $email): ConstantesEntreprise {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the entete solde tc.
     *
     * @param bool|null $enteteSoldeTc The entete solde tc.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEnteteSoldeTc(?bool $enteteSoldeTc): ConstantesEntreprise {
        $this->enteteSoldeTc = $enteteSoldeTc;
        return $this;
    }

    /**
     * Set the etat controle dadsu.
     *
     * @param string|null $etatControleDadsu The etat controle dadsu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEtatControleDadsu(?string $etatControleDadsu): ConstantesEntreprise {
        $this->etatControleDadsu = $etatControleDadsu;
        return $this;
    }

    /**
     * Set the etat ctrl norme.
     *
     * @param string|null $etatCtrlNorme The etat ctrl norme.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEtatCtrlNorme(?string $etatCtrlNorme): ConstantesEntreprise {
        $this->etatCtrlNorme = $etatCtrlNorme;
        return $this;
    }

    /**
     * Set the etat das.
     *
     * @param string|null $etatDas The etat das.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEtatDas(?string $etatDas): ConstantesEntreprise {
        $this->etatDas = $etatDas;
        return $this;
    }

    /**
     * Set the etat das rect.
     *
     * @param string|null $etatDasRect The etat das rect.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEtatDasRect(?string $etatDasRect): ConstantesEntreprise {
        $this->etatDasRect = $etatDasRect;
        return $this;
    }

    /**
     * Set the fichier unique.
     *
     * @param bool|null $fichierUnique The fichier unique.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFichierUnique(?bool $fichierUnique): ConstantesEntreprise {
        $this->fichierUnique = $fichierUnique;
        return $this;
    }

    /**
     * Set the filtrer liste emp.
     *
     * @param int|null $filtrerListeEmp The filtrer liste emp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFiltrerListeEmp(?int $filtrerListeEmp): ConstantesEntreprise {
        $this->filtrerListeEmp = $filtrerListeEmp;
        return $this;
    }

    /**
     * Set the fin periode das.
     *
     * @param DateTime|null $finPeriodeDas The fin periode das.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFinPeriodeDas(?DateTime $finPeriodeDas): ConstantesEntreprise {
        $this->finPeriodeDas = $finPeriodeDas;
        return $this;
    }

    /**
     * Set the fin periode histo das.
     *
     * @param DateTime|null $finPeriodeHistoDas The fin periode histo das.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFinPeriodeHistoDas(?DateTime $finPeriodeHistoDas): ConstantesEntreprise {
        $this->finPeriodeHistoDas = $finPeriodeHistoDas;
        return $this;
    }

    /**
     * Set the flag traite.
     *
     * @param string|null $flagTraite The flag traite.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFlagTraite(?string $flagTraite): ConstantesEntreprise {
        $this->flagTraite = $flagTraite;
        return $this;
    }

    /**
     * Set the flag traite2.
     *
     * @param int|null $flagTraite2 The flag traite2.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFlagTraite2(?int $flagTraite2): ConstantesEntreprise {
        $this->flagTraite2 = $flagTraite2;
        return $this;
    }

    /**
     * Set the flag traite3.
     *
     * @param int|null $flagTraite3 The flag traite3.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFlagTraite3(?int $flagTraite3): ConstantesEntreprise {
        $this->flagTraite3 = $flagTraite3;
        return $this;
    }

    /**
     * Set the format fic virement.
     *
     * @param string|null $formatFicVirement The format fic virement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFormatFicVirement(?string $formatFicVirement): ConstantesEntreprise {
        $this->formatFicVirement = $formatFicVirement;
        return $this;
    }

    /**
     * Set the gest num bulletin.
     *
     * @param bool|null $gestNumBulletin The gest num bulletin.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestNumBulletin(?bool $gestNumBulletin): ConstantesEntreprise {
        $this->gestNumBulletin = $gestNumBulletin;
        return $this;
    }

    /**
     * Set the gest repo compens.
     *
     * @param bool|null $gestRepoCompens The gest repo compens.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestRepoCompens(?bool $gestRepoCompens): ConstantesEntreprise {
        $this->gestRepoCompens = $gestRepoCompens;
        return $this;
    }

    /**
     * Set the gest texte.
     *
     * @param bool|null $gestTexte The gest texte.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestTexte(?bool $gestTexte): ConstantesEntreprise {
        $this->gestTexte = $gestTexte;
        return $this;
    }

    /**
     * Set the gestion coeff.
     *
     * @param bool|null $gestionCoeff The gestion coeff.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionCoeff(?bool $gestionCoeff): ConstantesEntreprise {
        $this->gestionCoeff = $gestionCoeff;
        return $this;
    }

    /**
     * Set the gestion coeff grille.
     *
     * @param bool|null $gestionCoeffGrille The gestion coeff grille.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionCoeffGrille(?bool $gestionCoeffGrille): ConstantesEntreprise {
        $this->gestionCoeffGrille = $gestionCoeffGrille;
        return $this;
    }

    /**
     * Set the gestion exemplaire.
     *
     * @param string|null $gestionExemplaire The gestion exemplaire.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionExemplaire(?string $gestionExemplaire): ConstantesEntreprise {
        $this->gestionExemplaire = $gestionExemplaire;
        return $this;
    }

    /**
     * Set the gestion intemperie.
     *
     * @param bool|null $gestionIntemperie The gestion intemperie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionIntemperie(?bool $gestionIntemperie): ConstantesEntreprise {
        $this->gestionIntemperie = $gestionIntemperie;
        return $this;
    }

    /**
     * Set the gestion numero employe auto.
     *
     * @param bool|null $gestionNumeroEmployeAuto The gestion numero employe auto.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionNumeroEmployeAuto(?bool $gestionNumeroEmployeAuto): ConstantesEntreprise {
        $this->gestionNumeroEmployeAuto = $gestionNumeroEmployeAuto;
        return $this;
    }

    /**
     * Set the gestion qpxl.
     *
     * @param bool|null $gestionQpxl The gestion qpxl.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionQpxl(?bool $gestionQpxl): ConstantesEntreprise {
        $this->gestionQpxl = $gestionQpxl;
        return $this;
    }

    /**
     * Set the gestion td bilaterale.
     *
     * @param bool|null $gestionTdBilaterale The gestion td bilaterale.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionTdBilaterale(?bool $gestionTdBilaterale): ConstantesEntreprise {
        $this->gestionTdBilaterale = $gestionTdBilaterale;
        return $this;
    }

    /**
     * Set the gestion td sou dadsu.
     *
     * @param bool|null $gestionTdSouDadsu The gestion td sou dadsu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionTdSouDadsu(?bool $gestionTdSouDadsu): ConstantesEntreprise {
        $this->gestionTdSouDadsu = $gestionTdSouDadsu;
        return $this;
    }

    /**
     * Set the groupe gi.
     *
     * @param string|null $groupeGi The groupe gi.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGroupeGi(?string $groupeGi): ConstantesEntreprise {
        $this->groupeGi = $groupeGi;
        return $this;
    }

    /**
     * Set the h bonif influ cassation.
     *
     * @param string|null $hBonifInfluCassation The h bonif influ cassation.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHBonifInfluCassation(?string $hBonifInfluCassation): ConstantesEntreprise {
        $this->hBonifInfluCassation = $hBonifInfluCassation;
        return $this;
    }

    /**
     * Set the h sup1 structurelle.
     *
     * @param bool|null $hSup1Structurelle The h sup1 structurelle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHSup1Structurelle(?bool $hSup1Structurelle): ConstantesEntreprise {
        $this->hSup1Structurelle = $hSup1Structurelle;
        return $this;
    }

    /**
     * Set the h sup2 structurelle.
     *
     * @param bool|null $hSup2Structurelle The h sup2 structurelle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHSup2Structurelle(?bool $hSup2Structurelle): ConstantesEntreprise {
        $this->hSup2Structurelle = $hSup2Structurelle;
        return $this;
    }

    /**
     * Set the h sup3 structurelle.
     *
     * @param bool|null $hSup3Structurelle The h sup3 structurelle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHSup3Structurelle(?bool $hSup3Structurelle): ConstantesEntreprise {
        $this->hSup3Structurelle = $hSup3Structurelle;
        return $this;
    }

    /**
     * Set the h sup4 structurelle.
     *
     * @param bool|null $hSup4Structurelle The h sup4 structurelle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHSup4Structurelle(?bool $hSup4Structurelle): ConstantesEntreprise {
        $this->hSup4Structurelle = $hSup4Structurelle;
        return $this;
    }

    /**
     * Set the h sup5 structurelle.
     *
     * @param bool|null $hSup5Structurelle The h sup5 structurelle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHSup5Structurelle(?bool $hSup5Structurelle): ConstantesEntreprise {
        $this->hSup5Structurelle = $hSup5Structurelle;
        return $this;
    }

    /**
     * Set the heure sup2 influ cassation.
     *
     * @param string|null $heureSup2InfluCassation The heure sup2 influ cassation.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHeureSup2InfluCassation(?string $heureSup2InfluCassation): ConstantesEntreprise {
        $this->heureSup2InfluCassation = $heureSup2InfluCassation;
        return $this;
    }

    /**
     * Set the heure sup3 influ cassation.
     *
     * @param string|null $heureSup3InfluCassation The heure sup3 influ cassation.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHeureSup3InfluCassation(?string $heureSup3InfluCassation): ConstantesEntreprise {
        $this->heureSup3InfluCassation = $heureSup3InfluCassation;
        return $this;
    }

    /**
     * Set the heure sup4 influ cassation.
     *
     * @param string|null $heureSup4InfluCassation The heure sup4 influ cassation.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHeureSup4InfluCassation(?string $heureSup4InfluCassation): ConstantesEntreprise {
        $this->heureSup4InfluCassation = $heureSup4InfluCassation;
        return $this;
    }

    /**
     * Set the heure sup5 influ cassation.
     *
     * @param string|null $heureSup5InfluCassation The heure sup5 influ cassation.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHeureSup5InfluCassation(?string $heureSup5InfluCassation): ConstantesEntreprise {
        $this->heureSup5InfluCassation = $heureSup5InfluCassation;
        return $this;
    }

    /**
     * Set the heure sup influ cassation.
     *
     * @param string|null $heureSupInfluCassation The heure sup influ cassation.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHeureSupInfluCassation(?string $heureSupInfluCassation): ConstantesEntreprise {
        $this->heureSupInfluCassation = $heureSupInfluCassation;
        return $this;
    }

    /**
     * Set the heure theo base trav.
     *
     * @param string|null $heureTheoBaseTrav The heure theo base trav.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHeureTheoBaseTrav(?string $heureTheoBaseTrav): ConstantesEntreprise {
        $this->heureTheoBaseTrav = $heureTheoBaseTrav;
        return $this;
    }

    /**
     * Set the indem cp intervient brut al.
     *
     * @param bool|null $indemCpIntervientBrutAl The indem cp intervient brut al.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setIndemCpIntervientBrutAl(?bool $indemCpIntervientBrutAl): ConstantesEntreprise {
        $this->indemCpIntervientBrutAl = $indemCpIntervientBrutAl;
        return $this;
    }

    /**
     * Set the jour debut transfert.
     *
     * @param int|null $jourDebutTransfert The jour debut transfert.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJourDebutTransfert(?int $jourDebutTransfert): ConstantesEntreprise {
        $this->jourDebutTransfert = $jourDebutTransfert;
        return $this;
    }

    /**
     * Set the jour fin transfert.
     *
     * @param int|null $jourFinTransfert The jour fin transfert.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJourFinTransfert(?int $jourFinTransfert): ConstantesEntreprise {
        $this->jourFinTransfert = $jourFinTransfert;
        return $this;
    }

    /**
     * Set the jrn format.
     *
     * @param string|null $jrnFormat The jrn format.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJrnFormat(?string $jrnFormat): ConstantesEntreprise {
        $this->jrnFormat = $jrnFormat;
        return $this;
    }

    /**
     * Set the jrn regroupe abs.
     *
     * @param bool|null $jrnRegroupeAbs The jrn regroupe abs.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJrnRegroupeAbs(?bool $jrnRegroupeAbs): ConstantesEntreprise {
        $this->jrnRegroupeAbs = $jrnRegroupeAbs;
        return $this;
    }

    /**
     * Set the jrn tri.
     *
     * @param string|null $jrnTri The jrn tri.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJrnTri(?string $jrnTri): ConstantesEntreprise {
        $this->jrnTri = $jrnTri;
        return $this;
    }

    /**
     * Set the jrn tri etablissement.
     *
     * @param string|null $jrnTriEtablissement The jrn tri etablissement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJrnTriEtablissement(?string $jrnTriEtablissement): ConstantesEntreprise {
        $this->jrnTriEtablissement = $jrnTriEtablissement;
        return $this;
    }

    /**
     * Set the jrn tri service.
     *
     * @param string|null $jrnTriService The jrn tri service.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJrnTriService(?string $jrnTriService): ConstantesEntreprise {
        $this->jrnTriService = $jrnTriService;
        return $this;
    }

    /**
     * Set the jrn type.
     *
     * @param string|null $jrnType The jrn type.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJrnType(?string $jrnType): ConstantesEntreprise {
        $this->jrnType = $jrnType;
        return $this;
    }

    /**
     * Set the liaison proprete.
     *
     * @param bool|null $liaisonProprete The liaison proprete.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLiaisonProprete(?bool $liaisonProprete): ConstantesEntreprise {
        $this->liaisonProprete = $liaisonProprete;
        return $this;
    }

    /**
     * Set the lib arbitrage.
     *
     * @param string|null $libArbitrage The lib arbitrage.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibArbitrage(?string $libArbitrage): ConstantesEntreprise {
        $this->libArbitrage = $libArbitrage;
        return $this;
    }

    /**
     * Set the lib base conge.
     *
     * @param string|null $libBaseConge The lib base conge.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibBaseConge(?string $libBaseConge): ConstantesEntreprise {
        $this->libBaseConge = $libBaseConge;
        return $this;
    }

    /**
     * Set the lib bqcp.
     *
     * @param string|null $libBqcp The lib bqcp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibBqcp(?string $libBqcp): ConstantesEntreprise {
        $this->libBqcp = $libBqcp;
        return $this;
    }

    /**
     * Set the lib cachet aem.
     *
     * @param string|null $libCachetAem The lib cachet aem.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibCachetAem(?string $libCachetAem): ConstantesEntreprise {
        $this->libCachetAem = $libCachetAem;
        return $this;
    }

    /**
     * Set the lib cotis cne.
     *
     * @param string|null $libCotisCne The lib cotis cne.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibCotisCne(?string $libCotisCne): ConstantesEntreprise {
        $this->libCotisCne = $libCotisCne;
        return $this;
    }

    /**
     * Set the lib fin contrat.
     *
     * @param string|null $libFinContrat The lib fin contrat.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibFinContrat(?string $libFinContrat): ConstantesEntreprise {
        $this->libFinContrat = $libFinContrat;
        return $this;
    }

    /**
     * Set the lib fin contrat cne.
     *
     * @param string|null $libFinContratCne The lib fin contrat cne.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibFinContratCne(?string $libFinContratCne): ConstantesEntreprise {
        $this->libFinContratCne = $libFinContratCne;
        return $this;
    }

    /**
     * Set the lib indem cp.
     *
     * @param string|null $libIndemCp The lib indem cp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibIndemCp(?string $libIndemCp): ConstantesEntreprise {
        $this->libIndemCp = $libIndemCp;
        return $this;
    }

    /**
     * Set the libelle libre virement.
     *
     * @param string|null $libelleLibreVirement The libelle libre virement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibelleLibreVirement(?string $libelleLibreVirement): ConstantesEntreprise {
        $this->libelleLibreVirement = $libelleLibreVirement;
        return $this;
    }

    /**
     * Set the ligne bul euro.
     *
     * @param bool|null $ligneBulEuro The ligne bul euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLigneBulEuro(?bool $ligneBulEuro): ConstantesEntreprise {
        $this->ligneBulEuro = $ligneBulEuro;
        return $this;
    }

    /**
     * Set the lignes transport.
     *
     * @param bool|null $lignesTransport The lignes transport.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLignesTransport(?bool $lignesTransport): ConstantesEntreprise {
        $this->lignesTransport = $lignesTransport;
        return $this;
    }

    /**
     * Set the mail bulletin.
     *
     * @param string|null $mailBulletin The mail bulletin.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMailBulletin(?string $mailBulletin): ConstantesEntreprise {
        $this->mailBulletin = $mailBulletin;
        return $this;
    }

    /**
     * Set the mail bulletin cle.
     *
     * @param string|null $mailBulletinCle The mail bulletin cle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMailBulletinCle(?string $mailBulletinCle): ConstantesEntreprise {
        $this->mailBulletinCle = $mailBulletinCle;
        return $this;
    }

    /**
     * Set the mail bulletin pj.
     *
     * @param string|null $mailBulletinPj The mail bulletin pj.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMailBulletinPj(?string $mailBulletinPj): ConstantesEntreprise {
        $this->mailBulletinPj = $mailBulletinPj;
        return $this;
    }

    /**
     * Set the mail c li ducs edi.
     *
     * @param bool|null $mailCLiDucsEdi The mail c li ducs edi.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMailCLiDucsEdi(?bool $mailCLiDucsEdi): ConstantesEntreprise {
        $this->mailCLiDucsEdi = $mailCLiDucsEdi;
        return $this;
    }

    /**
     * Set the mention cp.
     *
     * @param bool|null $mentionCp The mention cp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMentionCp(?bool $mentionCp): ConstantesEntreprise {
        $this->mentionCp = $mentionCp;
        return $this;
    }

    /**
     * Set the message vu.
     *
     * @param bool|null $messageVu The message vu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMessageVu(?bool $messageVu): ConstantesEntreprise {
        $this->messageVu = $messageVu;
        return $this;
    }

    /**
     * Set the millesime1.
     *
     * @param int|null $millesime1 The millesime1.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMillesime1(?int $millesime1): ConstantesEntreprise {
        $this->millesime1 = $millesime1;
        return $this;
    }

    /**
     * Set the mode planning.
     *
     * @param int|null $modePlanning The mode planning.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModePlanning(?int $modePlanning): ConstantesEntreprise {
        $this->modePlanning = $modePlanning;
        return $this;
    }

    /**
     * Set the modele apercu.
     *
     * @param string|null $modeleApercu The modele apercu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModeleApercu(?string $modeleApercu): ConstantesEntreprise {
        $this->modeleApercu = $modeleApercu;
        return $this;
    }

    /**
     * Set the modele bon bleu.
     *
     * @param string|null $modeleBonBleu The modele bon bleu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModeleBonBleu(?string $modeleBonBleu): ConstantesEntreprise {
        $this->modeleBonBleu = $modeleBonBleu;
        return $this;
    }

    /**
     * Set the modele bulletin.
     *
     * @param string|null $modeleBulletin The modele bulletin.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModeleBulletin(?string $modeleBulletin): ConstantesEntreprise {
        $this->modeleBulletin = $modeleBulletin;
        return $this;
    }

    /**
     * Set the modele certif.
     *
     * @param string|null $modeleCertif The modele certif.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModeleCertif(?string $modeleCertif): ConstantesEntreprise {
        $this->modeleCertif = $modeleCertif;
        return $this;
    }

    /**
     * Set the modele certif trav.
     *
     * @param string|null $modeleCertifTrav The modele certif trav.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModeleCertifTrav(?string $modeleCertifTrav): ConstantesEntreprise {
        $this->modeleCertifTrav = $modeleCertifTrav;
        return $this;
    }

    /**
     * Set the modele cheque.
     *
     * @param string|null $modeleCheque The modele cheque.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModeleCheque(?string $modeleCheque): ConstantesEntreprise {
        $this->modeleCheque = $modeleCheque;
        return $this;
    }

    /**
     * Set the mois cloture an.
     *
     * @param string|null $moisClotureAn The mois cloture an.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMoisClotureAn(?string $moisClotureAn): ConstantesEntreprise {
        $this->moisClotureAn = $moisClotureAn;
        return $this;
    }

    /**
     * Set the n attest aem.
     *
     * @param int|null $nAttestAem The n attest aem.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestAem(?int $nAttestAem): ConstantesEntreprise {
        $this->nAttestAem = $nAttestAem;
        return $this;
    }

    /**
     * Set the n attest aemedi.
     *
     * @param int|null $nAttestAemedi The n attest aemedi.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestAemedi(?int $nAttestAemedi): ConstantesEntreprise {
        $this->nAttestAemedi = $nAttestAemedi;
        return $this;
    }

    /**
     * Set the n attest aemx.
     *
     * @param int|null $nAttestAemx The n attest aemx.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestAemx(?int $nAttestAemx): ConstantesEntreprise {
        $this->nAttestAemx = $nAttestAemx;
        return $this;
    }

    /**
     * Set the n attest assedic.
     *
     * @param int|null $nAttestAssedic The n attest assedic.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestAssedic(?int $nAttestAssedic): ConstantesEntreprise {
        $this->nAttestAssedic = $nAttestAssedic;
        return $this;
    }

    /**
     * Set the n attest extras.
     *
     * @param int|null $nAttestExtras The n attest extras.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestExtras(?int $nAttestExtras): ConstantesEntreprise {
        $this->nAttestExtras = $nAttestExtras;
        return $this;
    }

    /**
     * Set the n attest ijss.
     *
     * @param int|null $nAttestIjss The n attest ijss.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestIjss(?int $nAttestIjss): ConstantesEntreprise {
        $this->nAttestIjss = $nAttestIjss;
        return $this;
    }

    /**
     * Set the n attest ijss at.
     *
     * @param int|null $nAttestIjssAt The n attest ijss at.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestIjssAt(?int $nAttestIjssAt): ConstantesEntreprise {
        $this->nAttestIjssAt = $nAttestIjssAt;
        return $this;
    }

    /**
     * Set the n der document.
     *
     * @param int|null $nDerDocument The n der document.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNDerDocument(?int $nDerDocument): ConstantesEntreprise {
        $this->nDerDocument = $nDerDocument;
        return $this;
    }

    /**
     * Set the nap euro.
     *
     * @param bool|null $napEuro The nap euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNapEuro(?bool $napEuro): ConstantesEntreprise {
        $this->napEuro = $napEuro;
        return $this;
    }

    /**
     * Set the nb exemplaire.
     *
     * @param string|null $nbExemplaire The nb exemplaire.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNbExemplaire(?string $nbExemplaire): ConstantesEntreprise {
        $this->nbExemplaire = $nbExemplaire;
        return $this;
    }

    /**
     * Set the nce conges spectacles.
     *
     * @param int|null $nceCongesSpectacles The nce conges spectacles.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNceCongesSpectacles(?int $nceCongesSpectacles): ConstantesEntreprise {
        $this->nceCongesSpectacles = $nceCongesSpectacles;
        return $this;
    }

    /**
     * Set the nouv param retraite type.
     *
     * @param bool|null $nouvParamRetraiteType The nouv param retraite type.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNouvParamRetraiteType(?bool $nouvParamRetraiteType): ConstantesEntreprise {
        $this->nouvParamRetraiteType = $nouvParamRetraiteType;
        return $this;
    }

    /**
     * Set the options calc abs.
     *
     * @param bool|null $optionsCalcAbs The options calc abs.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setOptionsCalcAbs(?bool $optionsCalcAbs): ConstantesEntreprise {
        $this->optionsCalcAbs = $optionsCalcAbs;
        return $this;
    }

    /**
     * Set the ordre libelle h sup.
     *
     * @param string|null $ordreLibelleHSup The ordre libelle h sup.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setOrdreLibelleHSup(?string $ordreLibelleHSup): ConstantesEntreprise {
        $this->ordreLibelleHSup = $ordreLibelleHSup;
        return $this;
    }

    /**
     * Set the paie euro.
     *
     * @param bool|null $paieEuro The paie euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPaieEuro(?bool $paieEuro): ConstantesEntreprise {
        $this->paieEuro = $paieEuro;
        return $this;
    }

    /**
     * Set the part sal seule.
     *
     * @param bool|null $partSalSeule The part sal seule.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPartSalSeule(?bool $partSalSeule): ConstantesEntreprise {
        $this->partSalSeule = $partSalSeule;
        return $this;
    }

    /**
     * Set the pas gestion indice bul.
     *
     * @param bool|null $pasGestionIndiceBul The pas gestion indice bul.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPasGestionIndiceBul(?bool $pasGestionIndiceBul): ConstantesEntreprise {
        $this->pasGestionIndiceBul = $pasGestionIndiceBul;
        return $this;
    }

    /**
     * Set the pas prendre iccp fillon.
     *
     * @param bool|null $pasPrendreIccpFillon The pas prendre iccp fillon.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPasPrendreIccpFillon(?bool $pasPrendreIccpFillon): ConstantesEntreprise {
        $this->pasPrendreIccpFillon = $pasPrendreIccpFillon;
        return $this;
    }

    /**
     * Set the pas sous tot s base.
     *
     * @param bool|null $pasSousTotSBase The pas sous tot s base.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPasSousTotSBase(?bool $pasSousTotSBase): ConstantesEntreprise {
        $this->pasSousTotSBase = $pasSousTotSBase;
        return $this;
    }

    /**
     * Set the passage35 h fait.
     *
     * @param bool|null $passage35HFait The passage35 h fait.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPassage35HFait(?bool $passage35HFait): ConstantesEntreprise {
        $this->passage35HFait = $passage35HFait;
        return $this;
    }

    /**
     * Set the path virement.
     *
     * @param string|null $pathVirement The path virement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPathVirement(?string $pathVirement): ConstantesEntreprise {
        $this->pathVirement = $pathVirement;
        return $this;
    }

    /**
     * Set the periode i paie.
     *
     * @param DateTime|null $periodeIPaie The periode i paie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPeriodeIPaie(?DateTime $periodeIPaie): ConstantesEntreprise {
        $this->periodeIPaie = $periodeIPaie;
        return $this;
    }

    /**
     * Set the periode paie.
     *
     * @param DateTime|null $periodePaie The periode paie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPeriodePaie(?DateTime $periodePaie): ConstantesEntreprise {
        $this->periodePaie = $periodePaie;
        return $this;
    }

    /**
     * Set the pj mail c li ducs edi.
     *
     * @param bool|null $pjMailCLiDucsEdi The pj mail c li ducs edi.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPjMailCLiDucsEdi(?bool $pjMailCLiDucsEdi): ConstantesEntreprise {
        $this->pjMailCLiDucsEdi = $pjMailCLiDucsEdi;
        return $this;
    }

    /**
     * Set the pj mail cli coupon paiement.
     *
     * @param bool|null $pjMailCliCouponPaiement The pj mail cli coupon paiement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPjMailCliCouponPaiement(?bool $pjMailCliCouponPaiement): ConstantesEntreprise {
        $this->pjMailCliCouponPaiement = $pjMailCliCouponPaiement;
        return $this;
    }

    /**
     * Set the plafond.
     *
     * @param float|null $plafond The plafond.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPlafond(?float $plafond): ConstantesEntreprise {
        $this->plafond = $plafond;
        return $this;
    }

    /**
     * Set the porta frais sante certif trav.
     *
     * @param bool|null $portaFraisSanteCertifTrav The porta frais sante certif trav.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPortaFraisSanteCertifTrav(?bool $portaFraisSanteCertifTrav): ConstantesEntreprise {
        $this->portaFraisSanteCertifTrav = $portaFraisSanteCertifTrav;
        return $this;
    }

    /**
     * Set the porta prevoyance oblig.
     *
     * @param bool|null $portaPrevoyanceOblig The porta prevoyance oblig.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPortaPrevoyanceOblig(?bool $portaPrevoyanceOblig): ConstantesEntreprise {
        $this->portaPrevoyanceOblig = $portaPrevoyanceOblig;
        return $this;
    }

    /**
     * Set the preparation tdp.
     *
     * @param bool|null $preparationTdp The preparation tdp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPreparationTdp(?bool $preparationTdp): ConstantesEntreprise {
        $this->preparationTdp = $preparationTdp;
        return $this;
    }

    /**
     * Set the presence min.
     *
     * @param string|null $presenceMin The presence min.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPresenceMin(?string $presenceMin): ConstantesEntreprise {
        $this->presenceMin = $presenceMin;
        return $this;
    }

    /**
     * Set the prorata dif certif trav.
     *
     * @param bool|null $prorataDifCertifTrav The prorata dif certif trav.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setProrataDifCertifTrav(?bool $prorataDifCertifTrav): ConstantesEntreprise {
        $this->prorataDifCertifTrav = $prorataDifCertifTrav;
        return $this;
    }

    /**
     * Set the raz commentaire.
     *
     * @param string|null $razCommentaire The raz commentaire.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRazCommentaire(?string $razCommentaire): ConstantesEntreprise {
        $this->razCommentaire = $razCommentaire;
        return $this;
    }

    /**
     * Set the raz h sup.
     *
     * @param string|null $razHSup The raz h sup.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRazHSup(?string $razHSup): ConstantesEntreprise {
        $this->razHSup = $razHSup;
        return $this;
    }

    /**
     * Set the rdlpascii.
     *
     * @param bool|null $rdlpascii The rdlpascii.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRdlpascii(?bool $rdlpascii): ConstantesEntreprise {
        $this->rdlpascii = $rdlpascii;
        return $this;
    }

    /**
     * Set the rdlpemployes.
     *
     * @param bool|null $rdlpemployes The rdlpemployes.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRdlpemployes(?bool $rdlpemployes): ConstantesEntreprise {
        $this->rdlpemployes = $rdlpemployes;
        return $this;
    }

    /**
     * Set the ref remise.
     *
     * @param int|null $refRemise The ref remise.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRefRemise(?int $refRemise): ConstantesEntreprise {
        $this->refRemise = $refRemise;
        return $this;
    }

    /**
     * Set the ref trans.
     *
     * @param int|null $refTrans The ref trans.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRefTrans(?int $refTrans): ConstantesEntreprise {
        $this->refTrans = $refTrans;
        return $this;
    }

    /**
     * Set the reference interne virement.
     *
     * @param string|null $referenceInterneVirement The reference interne virement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setReferenceInterneVirement(?string $referenceInterneVirement): ConstantesEntreprise {
        $this->referenceInterneVirement = $referenceInterneVirement;
        return $this;
    }

    /**
     * Set the regroup lib ed bul.
     *
     * @param bool|null $regroupLibEdBul The regroup lib ed bul.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRegroupLibEdBul(?bool $regroupLibEdBul): ConstantesEntreprise {
        $this->regroupLibEdBul = $regroupLibEdBul;
        return $this;
    }

    /**
     * Set the report minimum.
     *
     * @param int|null $reportMinimum The report minimum.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setReportMinimum(?int $reportMinimum): ConstantesEntreprise {
        $this->reportMinimum = $reportMinimum;
        return $this;
    }

    /**
     * Set the retraite97.
     *
     * @param bool|null $retraite97 The retraite97.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRetraite97(?bool $retraite97): ConstantesEntreprise {
        $this->retraite97 = $retraite97;
        return $this;
    }

    /**
     * Set the sais plan emp sem.
     *
     * @param string|null $saisPlanEmpSem The sais plan emp sem.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setSaisPlanEmpSem(?string $saisPlanEmpSem): ConstantesEntreprise {
        $this->saisPlanEmpSem = $saisPlanEmpSem;
        return $this;
    }

    /**
     * Set the saisie indice bul.
     *
     * @param bool|null $saisieIndiceBul The saisie indice bul.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setSaisieIndiceBul(?bool $saisieIndiceBul): ConstantesEntreprise {
        $this->saisieIndiceBul = $saisieIndiceBul;
        return $this;
    }

    /**
     * Set the saut page.
     *
     * @param bool|null $sautPage The saut page.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setSautPage(?bool $sautPage): ConstantesEntreprise {
        $this->sautPage = $sautPage;
        return $this;
    }

    /**
     * Set the seuil.
     *
     * @param float|null $seuil The seuil.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setSeuil(?float $seuil): ConstantesEntreprise {
        $this->seuil = $seuil;
        return $this;
    }

    /**
     * Set the seuil conting.
     *
     * @param float|null $seuilConting The seuil conting.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setSeuilConting(?float $seuilConting): ConstantesEntreprise {
        $this->seuilConting = $seuilConting;
        return $this;
    }

    /**
     * Set the stc auto.
     *
     * @param bool|null $stcAuto The stc auto.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setStcAuto(?bool $stcAuto): ConstantesEntreprise {
        $this->stcAuto = $stcAuto;
        return $this;
    }

    /**
     * Set the tab bord tri etablissement.
     *
     * @param bool|null $tabBordTriEtablissement The tab bord tri etablissement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTabBordTriEtablissement(?bool $tabBordTriEtablissement): ConstantesEntreprise {
        $this->tabBordTriEtablissement = $tabBordTriEtablissement;
        return $this;
    }

    /**
     * Set the tab bord tri service.
     *
     * @param bool|null $tabBordTriService The tab bord tri service.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTabBordTriService(?bool $tabBordTriService): ConstantesEntreprise {
        $this->tabBordTriService = $tabBordTriService;
        return $this;
    }

    /**
     * Set the tableau charge.
     *
     * @param string|null $tableauCharge The tableau charge.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTableauCharge(?string $tableauCharge): ConstantesEntreprise {
        $this->tableauCharge = $tableauCharge;
        return $this;
    }

    /**
     * Set the tds annee.
     *
     * @param int|null $tdsAnnee The tds annee.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTdsAnnee(?int $tdsAnnee): ConstantesEntreprise {
        $this->tdsAnnee = $tdsAnnee;
        return $this;
    }

    /**
     * Set the tds euro.
     *
     * @param bool|null $tdsEuro The tds euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTdsEuro(?bool $tdsEuro): ConstantesEntreprise {
        $this->tdsEuro = $tdsEuro;
        return $this;
    }

    /**
     * Set the tot gene isole.
     *
     * @param string|null $totGeneIsole The tot gene isole.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTotGeneIsole(?string $totGeneIsole): ConstantesEntreprise {
        $this->totGeneIsole = $totGeneIsole;
        return $this;
    }

    /**
     * Set the tot service isole.
     *
     * @param string|null $totServiceIsole The tot service isole.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTotServiceIsole(?string $totServiceIsole): ConstantesEntreprise {
        $this->totServiceIsole = $totServiceIsole;
        return $this;
    }

    /**
     * Set the total etab isole.
     *
     * @param string|null $totalEtabIsole The total etab isole.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTotalEtabIsole(?string $totalEtabIsole): ConstantesEntreprise {
        $this->totalEtabIsole = $totalEtabIsole;
        return $this;
    }

    /**
     * Set the trans rupture.
     *
     * @param string|null $transRupture The trans rupture.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTransRupture(?string $transRupture): ConstantesEntreprise {
        $this->transRupture = $transRupture;
        return $this;
    }

    /**
     * Set the trans tri etablissement.
     *
     * @param string|null $transTriEtablissement The trans tri etablissement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTransTriEtablissement(?string $transTriEtablissement): ConstantesEntreprise {
        $this->transTriEtablissement = $transTriEtablissement;
        return $this;
    }

    /**
     * Set the transfert tds emp.
     *
     * @param bool|null $transfertTdsEmp The transfert tds emp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTransfertTdsEmp(?bool $transfertTdsEmp): ConstantesEntreprise {
        $this->transfertTdsEmp = $transfertTdsEmp;
        return $this;
    }

    /**
     * Set the tri employe.
     *
     * @param string|null $triEmploye The tri employe.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTriEmploye(?string $triEmploye): ConstantesEntreprise {
        $this->triEmploye = $triEmploye;
        return $this;
    }

    /**
     * Set the tx sal decote.
     *
     * @param float|null $txSalDecote The tx sal decote.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTxSalDecote(?float $txSalDecote): ConstantesEntreprise {
        $this->txSalDecote = $txSalDecote;
        return $this;
    }

    /**
     * Set the type abs sans solde.
     *
     * @param string|null $typeAbsSansSolde The type abs sans solde.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeAbsSansSolde(?string $typeAbsSansSolde): ConstantesEntreprise {
        $this->typeAbsSansSolde = $typeAbsSansSolde;
        return $this;
    }

    /**
     * Set the type agrement aem.
     *
     * @param string|null $typeAgrementAem The type agrement aem.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeAgrementAem(?string $typeAgrementAem): ConstantesEntreprise {
        $this->typeAgrementAem = $typeAgrementAem;
        return $this;
    }

    /**
     * Set the type bordereau prepa.
     *
     * @param string|null $typeBordereauPrepa The type bordereau prepa.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeBordereauPrepa(?string $typeBordereauPrepa): ConstantesEntreprise {
        $this->typeBordereauPrepa = $typeBordereauPrepa;
        return $this;
    }

    /**
     * Set the type bulletin.
     *
     * @param string|null $typeBulletin The type bulletin.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeBulletin(?string $typeBulletin): ConstantesEntreprise {
        $this->typeBulletin = $typeBulletin;
        return $this;
    }

    /**
     * Set the type dossier.
     *
     * @param string|null $typeDossier The type dossier.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeDossier(?string $typeDossier): ConstantesEntreprise {
        $this->typeDossier = $typeDossier;
        return $this;
    }

    /**
     * Set the type due.
     *
     * @param string|null $typeDue The type due.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeDue(?string $typeDue): ConstantesEntreprise {
        $this->typeDue = $typeDue;
        return $this;
    }

    /**
     * Set the type effectif.
     *
     * @param string|null $typeEffectif The type effectif.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeEffectif(?string $typeEffectif): ConstantesEntreprise {
        $this->typeEffectif = $typeEffectif;
        return $this;
    }

    /**
     * Set the type fich bilat.
     *
     * @param string|null $typeFichBilat The type fich bilat.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeFichBilat(?string $typeFichBilat): ConstantesEntreprise {
        $this->typeFichBilat = $typeFichBilat;
        return $this;
    }

    /**
     * Set the type gestion bal.
     *
     * @param string|null $typeGestionBal The type gestion bal.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeGestionBal(?string $typeGestionBal): ConstantesEntreprise {
        $this->typeGestionBal = $typeGestionBal;
        return $this;
    }

    /**
     * Set the type modele.
     *
     * @param string|null $typeModele The type modele.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeModele(?string $typeModele): ConstantesEntreprise {
        $this->typeModele = $typeModele;
        return $this;
    }

    /**
     * Set the type prep dadsu.
     *
     * @param string|null $typePrepDadsu The type prep dadsu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypePrepDadsu(?string $typePrepDadsu): ConstantesEntreprise {
        $this->typePrepDadsu = $typePrepDadsu;
        return $this;
    }

    /**
     * Set the type saisie abs.
     *
     * @param string|null $typeSaisieAbs The type saisie abs.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeSaisieAbs(?string $typeSaisieAbs): ConstantesEntreprise {
        $this->typeSaisieAbs = $typeSaisieAbs;
        return $this;
    }

    /**
     * Set the type saisie absence.
     *
     * @param string|null $typeSaisieAbsence The type saisie absence.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeSaisieAbsence(?string $typeSaisieAbsence): ConstantesEntreprise {
        $this->typeSaisieAbsence = $typeSaisieAbsence;
        return $this;
    }

    /**
     * Set the type stc.
     *
     * @param string|null $typeStc The type stc.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeStc(?string $typeStc): ConstantesEntreprise {
        $this->typeStc = $typeStc;
        return $this;
    }

    /**
     * Set the type taux intemperie.
     *
     * @param string|null $typeTauxIntemperie The type taux intemperie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeTauxIntemperie(?string $typeTauxIntemperie): ConstantesEntreprise {
        $this->typeTauxIntemperie = $typeTauxIntemperie;
        return $this;
    }

    /**
     * Set the type tri.
     *
     * @param string|null $typeTri The type tri.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeTri(?string $typeTri): ConstantesEntreprise {
        $this->typeTri = $typeTri;
        return $this;
    }

    /**
     * Set the type virement.
     *
     * @param string|null $typeVirement The type virement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeVirement(?string $typeVirement): ConstantesEntreprise {
        $this->typeVirement = $typeVirement;
        return $this;
    }

    /**
     * Set the type visu col saisie bul.
     *
     * @param string|null $typeVisuColSaisieBul The type visu col saisie bul.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeVisuColSaisieBul(?string $typeVisuColSaisieBul): ConstantesEntreprise {
        $this->typeVisuColSaisieBul = $typeVisuColSaisieBul;
        return $this;
    }

    /**
     * Set the utilise pdp quadra.
     *
     * @param bool|null $utilisePdpQuadra The utilise pdp quadra.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setUtilisePdpQuadra(?bool $utilisePdpQuadra): ConstantesEntreprise {
        $this->utilisePdpQuadra = $utilisePdpQuadra;
        return $this;
    }

    /**
     * Set the utilise pdp quadra2.
     *
     * @param bool|null $utilisePdpQuadra2 The utilise pdp quadra2.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setUtilisePdpQuadra2(?bool $utilisePdpQuadra2): ConstantesEntreprise {
        $this->utilisePdpQuadra2 = $utilisePdpQuadra2;
        return $this;
    }

    /**
     * Set the val cp bulletin.
     *
     * @param bool|null $valCpBulletin The val cp bulletin.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setValCpBulletin(?bool $valCpBulletin): ConstantesEntreprise {
        $this->valCpBulletin = $valCpBulletin;
        return $this;
    }

    /**
     * Set the val filtre liste emp.
     *
     * @param int|null $valFiltreListeEmp The val filtre liste emp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setValFiltreListeEmp(?int $valFiltreListeEmp): ConstantesEntreprise {
        $this->valFiltreListeEmp = $valFiltreListeEmp;
        return $this;
    }

    /**
     * Set the version controle dadsu.
     *
     * @param int|null $versionControleDadsu The version controle dadsu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVersionControleDadsu(?int $versionControleDadsu): ConstantesEntreprise {
        $this->versionControleDadsu = $versionControleDadsu;
        return $this;
    }

    /**
     * Set the vir code etab.
     *
     * @param string|null $virCodeEtab The vir code etab.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirCodeEtab(?string $virCodeEtab): ConstantesEntreprise {
        $this->virCodeEtab = $virCodeEtab;
        return $this;
    }

    /**
     * Set the vir collectivite.
     *
     * @param string|null $virCollectivite The vir collectivite.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirCollectivite(?string $virCollectivite): ConstantesEntreprise {
        $this->virCollectivite = $virCollectivite;
        return $this;
    }

    /**
     * Set the vir comptable centre.
     *
     * @param string|null $virComptableCentre The vir comptable centre.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirComptableCentre(?string $virComptableCentre): ConstantesEntreprise {
        $this->virComptableCentre = $virComptableCentre;
        return $this;
    }

    /**
     * Set the vir comptable sub.
     *
     * @param string|null $virComptableSub The vir comptable sub.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirComptableSub(?string $virComptableSub): ConstantesEntreprise {
        $this->virComptableSub = $virComptableSub;
        return $this;
    }

    /**
     * Set the vir fonction publique.
     *
     * @param bool|null $virFonctionPublique The vir fonction publique.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirFonctionPublique(?bool $virFonctionPublique): ConstantesEntreprise {
        $this->virFonctionPublique = $virFonctionPublique;
        return $this;
    }

    /**
     * Set the vir seuil.
     *
     * @param float|null $virSeuil The vir seuil.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirSeuil(?float $virSeuil): ConstantesEntreprise {
        $this->virSeuil = $virSeuil;
        return $this;
    }

    /**
     * Set the vir type etab.
     *
     * @param string|null $virTypeEtab The vir type etab.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirTypeEtab(?string $virTypeEtab): ConstantesEntreprise {
        $this->virTypeEtab = $virTypeEtab;
        return $this;
    }

    /**
     * Set the virement cr lf.
     *
     * @param bool|null $virementCrLf The virement cr lf.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirementCrLf(?bool $virementCrLf): ConstantesEntreprise {
        $this->virementCrLf = $virementCrLf;
        return $this;
    }

    /**
     * Set the virements euro.
     *
     * @param string|null $virementsEuro The virements euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirementsEuro(?string $virementsEuro): ConstantesEntreprise {
        $this->virementsEuro = $virementsEuro;
        return $this;
    }

    /**
     * Set the web prioritaire.
     *
     * @param bool|null $webPrioritaire The web prioritaire.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setWebPrioritaire(?bool $webPrioritaire): ConstantesEntreprise {
        $this->webPrioritaire = $webPrioritaire;
        return $this;
    }
}
