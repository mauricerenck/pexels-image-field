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
 * Constantes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Constantes {

    /**
     * 35 heures.
     *
     * @var DateTime|null
     */
    private $_35Heures;

    /**
     * Alertes paie dans pointage.
     *
     * @var bool|null
     */
    private $alertesPaieDansPointage;

    /**
     * Alertes paie dans reclam.
     *
     * @var bool|null
     */
    private $alertesPaieDansReclam;

    /**
     * Analytique nature agence.
     *
     * @var bool|null
     */
    private $analytiqueNatureAgence;

    /**
     * Analytique par chantier.
     *
     * @var bool|null
     */
    private $analytiqueParChantier;

    /**
     * Archiver devis.
     *
     * @var bool|null
     */
    private $archiverDevis;

    /**
     * Archiver facture.
     *
     * @var bool|null
     */
    private $archiverFacture;

    /**
     * Arrondi sur pu.
     *
     * @var bool|null
     */
    private $arrondiSurPu;

    /**
     * Autoriser da sans maj stock.
     *
     * @var bool|null
     */
    private $autoriserDaSansMajStock;

    /**
     * Autoriser dep bud cha cde type.
     *
     * @var bool|null
     */
    private $autoriserDepBudChaCdeType;

    /**
     * Autoriser mensu tache vide.
     *
     * @var bool|null
     */
    private $autoriserMensuTacheVide;

    /**
     * Bl num fact.
     *
     * @var int|null
     */
    private $blNumFact;

    /**
     * Bl prefixe.
     *
     * @var string|null
     */
    private $blPrefixe;

    /**
     * Br num fact.
     *
     * @var int|null
     */
    private $brNumFact;

    /**
     * Br prefixe.
     *
     * @var string|null
     */
    private $brPrefixe;

    /**
     * Bs num fact.
     *
     * @var int|null
     */
    private $bsNumFact;

    /**
     * Bs prefixe.
     *
     * @var string|null
     */
    private $bsPrefixe;

    /**
     * Cdd mensu total heures.
     *
     * @var bool|null
     */
    private $cddMensuTotalHeures;

    /**
     * Cde client num fact.
     *
     * @var int|null
     */
    private $cdeClientNumFact;

    /**
     * Cde client prefixe.
     *
     * @var string|null
     */
    private $cdeClientPrefixe;

    /**
     * Cde frn num fact.
     *
     * @var int|null
     */
    private $cdeFrnNumFact;

    /**
     * Cde frn prefixe.
     *
     * @var string|null
     */
    private $cdeFrnPrefixe;

    /**
     * Centralisation vente.
     *
     * @var bool|null
     */
    private $centralisationVente;

    /**
     * Charge mensuelle sans tache.
     *
     * @var bool|null
     */
    private $chargeMensuelleSansTache;

    /**
     * Chemin doss compta.
     *
     * @var string|null
     */
    private $cheminDossCompta;

    /**
     * Cle debloquer periode cloturee.
     *
     * @var string|null
     */
    private $cleDebloquerPeriodeCloturee;

    /**
     * Code abs cp sans solde.
     *
     * @var string|null
     */
    private $codeAbsCpSansSolde;

    /**
     * Code abs def jf.
     *
     * @var string|null
     */
    private $codeAbsDefJf;

    /**
     * Code abs def jf moins3.
     *
     * @var string|null
     */
    private $codeAbsDefJfMoins3;

    /**
     * Code abs fermeture chantier.
     *
     * @var string|null
     */
    private $codeAbsFermetureChantier;

    /**
     * Code abs pointage defaut.
     *
     * @var string|null
     */
    private $codeAbsPointageDefaut;

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
     * Code depot par defaut.
     *
     * @var string|null
     */
    private $codeDepotParDefaut;

    /**
     * Code ics.
     *
     * @var string|null
     */
    private $codeIcs;

    /**
     * Code ja.
     *
     * @var string|null
     */
    private $codeJa;

    /**
     * Code jv negoce.
     *
     * @var string|null
     */
    private $codeJvNegoce;

    /**
     * Code jv prestation.
     *
     * @var string|null
     */
    private $codeJvPrestation;

    /**
     * Code liv par defaut.
     *
     * @var string|null
     */
    private $codeLivParDefaut;

    /**
     * Code prime chantier1.
     *
     * @var string|null
     */
    private $codePrimeChantier1;

    /**
     * Code prime chantier2.
     *
     * @var string|null
     */
    private $codePrimeChantier2;

    /**
     * Code prime chantier3.
     *
     * @var string|null
     */
    private $codePrimeChantier3;

    /**
     * Code prime dimanche1.
     *
     * @var string|null
     */
    private $codePrimeDimanche1;

    /**
     * Code prime dimanche1 type2.
     *
     * @var string|null
     */
    private $codePrimeDimanche1Type2;

    /**
     * Code prime dimanche2.
     *
     * @var string|null
     */
    private $codePrimeDimanche2;

    /**
     * Code prime forfait.
     *
     * @var string|null
     */
    private $codePrimeForfait;

    /**
     * Code prime h compl.
     *
     * @var string|null
     */
    private $codePrimeHCompl;

    /**
     * Code prime h compl2.
     *
     * @var string|null
     */
    private $codePrimeHCompl2;

    /**
     * Code prime jf1.
     *
     * @var string|null
     */
    private $codePrimeJf1;

    /**
     * Code prime jf1 type2.
     *
     * @var string|null
     */
    private $codePrimeJf1Type2;

    /**
     * Code prime jf2.
     *
     * @var string|null
     */
    private $codePrimeJf2;

    /**
     * Code prime jf mai.
     *
     * @var string|null
     */
    private $codePrimeJfMai;

    /**
     * Code prime nuit1.
     *
     * @var string|null
     */
    private $codePrimeNuit1;

    /**
     * Code prime nuit1 type2.
     *
     * @var string|null
     */
    private $codePrimeNuit1Type2;

    /**
     * Code prime nuit2.
     *
     * @var string|null
     */
    private $codePrimeNuit2;

    /**
     * Code prime paniers.
     *
     * @var string|null
     */
    private $codePrimePaniers;

    /**
     * Code prime rs.
     *
     * @var string|null
     */
    private $codePrimeRs;

    /**
     * Code prime tp.
     *
     * @var string|null
     */
    private $codePrimeTp;

    /**
     * Code reg jv neg debut.
     *
     * @var string|null
     */
    private $codeRegJvNegDebut;

    /**
     * Code reg jv neg fin.
     *
     * @var string|null
     */
    private $codeRegJvNegFin;

    /**
     * Code reg jv prest debut.
     *
     * @var string|null
     */
    private $codeRegJvPrestDebut;

    /**
     * Code reg jv prest fin.
     *
     * @var string|null
     */
    private $codeRegJvPrestFin;

    /**
     * Code tache defaut.
     *
     * @var string|null
     */
    private $codeTacheDefaut;

    /**
     * Collectif def.
     *
     * @var string|null
     */
    private $collectifDef;

    /**
     * Collectif def fournisseur.
     *
     * @var string|null
     */
    private $collectifDefFournisseur;

    /**
     * Commentaire journee solidarite.
     *
     * @var string|null
     */
    private $commentaireJourneeSolidarite;

    /**
     * Compte collectif achat.
     *
     * @var string|null
     */
    private $compteCollectifAchat;

    /**
     * Compte collectif vente.
     *
     * @var string|null
     */
    private $compteCollectifVente;

    /**
     * Compte escompte ca exonere.
     *
     * @var string|null
     */
    private $compteEscompteCaExonere;

    /**
     * Compte escompte soumis tva.
     *
     * @var string|null
     */
    private $compteEscompteSoumisTva;

    /**
     * Compte tva achat.
     *
     * @var string|null
     */
    private $compteTvaAchat;

    /**
     * Compte tva taxe deee.
     *
     * @var string|null
     */
    private $compteTvaTaxeDeee;

    /**
     * Compte tva vente.
     *
     * @var string|null
     */
    private $compteTvaVente;

    /**
     * Compte ventil taxe deee.
     *
     * @var string|null
     */
    private $compteVentilTaxeDeee;

    /**
     * Compter samedi tf cp paie.
     *
     * @var bool|null
     */
    private $compterSamediTfCpPaie;

    /**
     * Controler cde frn.
     *
     * @var bool|null
     */
    private $controlerCdeFrn;

    /**
     * Controler charges mensuelles.
     *
     * @var bool|null
     */
    private $controlerChargesMensuelles;

    /**
     * Controler code reg.
     *
     * @var bool|null
     */
    private $controlerCodeReg;

    /**
     * Controler dep hc max.
     *
     * @var bool|null
     */
    private $controlerDepHcMax;

    /**
     * Controler dep hc plus mois.
     *
     * @var bool|null
     */
    private $controlerDepHcPlusMois;

    /**
     * Cp sans provisions.
     *
     * @var bool|null
     */
    private $cpSansProvisions;

    /**
     * Creer alerte paie def en paie.
     *
     * @var bool|null
     */
    private $creerAlertePaieDefEnPaie;

    /**
     * Ctrl auto cp.
     *
     * @var bool|null
     */
    private $ctrlAutoCp;

    /**
     * Ctrl auto cp avec anticipation.
     *
     * @var bool|null
     */
    private $ctrlAutoCpAvecAnticipation;

    /**
     * Date appli gestion heures en plus.
     *
     * @var DateTime|null
     */
    private $dateAppliGestionHeuresEnPlus;

    /**
     * Date journee solidarite.
     *
     * @var DateTime|null
     */
    private $dateJourneeSolidarite;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
     */
    private $dateValidationSynchro;

    /**
     * Dec mois prep fact.
     *
     * @var int|null
     */
    private $decMoisPrepFact;

    /**
     * Dernier compte client.
     *
     * @var string|null
     */
    private $dernierCompteClient;

    /**
     * Dernier compte frn.
     *
     * @var string|null
     */
    private $dernierCompteFrn;

    /**
     * Discr.
     *
     * @var string|null
     */
    private $discr;

    /**
     * Doss compta.
     *
     * @var string|null
     */
    private $dossCompta;

    /**
     * Doss paie.
     *
     * @var string|null
     */
    private $dossPaie;

    /**
     * Es code abs entree.
     *
     * @var string|null
     */
    private $esCodeAbsEntree;

    /**
     * Es code abs sortie.
     *
     * @var string|null
     */
    private $esCodeAbsSortie;

    /**
     * Es heures reelles.
     *
     * @var bool|null
     */
    private $esHeuresReelles;

    /**
     * Etablissements paie.
     *
     * @var string|null
     */
    private $etablissementsPaie;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Euro.
     *
     * @var bool|null
     */
    private $euro;

    /**
     * Facturation prorata heures.
     *
     * @var bool|null
     */
    private $facturationProrataHeures;

    /**
     * Folio ja.
     *
     * @var string|null
     */
    private $folioJa;

    /**
     * Folio jv negoce.
     *
     * @var string|null
     */
    private $folioJvNegoce;

    /**
     * Folio jv prestation.
     *
     * @var string|null
     */
    private $folioJvPrestation;

    /**
     * Gerer num cpt chantier.
     *
     * @var bool|null
     */
    private $gererNumCptChantier;

    /**
     * Gestion h compl.
     *
     * @var bool|null
     */
    private $gestionHCompl;

    /**
     * Gestion h sup mens.
     *
     * @var bool|null
     */
    private $gestionHSupMens;

    /**
     * Gestion h sup mensuelle.
     *
     * @var bool|null
     */
    private $gestionHSupMensuelle;

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
     * Gestion multi depot.
     *
     * @var bool|null
     */
    private $gestionMultiDepot;

    /**
     * Gestion quotas.
     *
     * @var bool|null
     */
    private $gestionQuotas;

    /**
     * Gestion specif jf.
     *
     * @var bool|null
     */
    private $gestionSpecifJf;

    /**
     * Gestion specif majo jf.
     *
     * @var bool|null
     */
    private $gestionSpecifMajoJf;

    /**
     * H deb nuit.
     *
     * @var DateTime|null
     */
    private $hDebNuit;

    /**
     * H deb nuit trav nuit.
     *
     * @var DateTime|null
     */
    private $hDebNuitTravNuit;

    /**
     * H fin nuit.
     *
     * @var DateTime|null
     */
    private $hFinNuit;

    /**
     * H fin nuit trav nuit.
     *
     * @var DateTime|null
     */
    private $hFinNuitTravNuit;

    /**
     * Heures absence mensualise.
     *
     * @var bool|null
     */
    private $heuresAbsenceMensualise;

    /**
     * Heures rempl egales mens titulaire.
     *
     * @var bool|null
     */
    private $heuresRemplEgalesMensTitulaire;

    /**
     * Increment compte auto.
     *
     * @var int|null
     */
    private $incrementCompteAuto;

    /**
     * Liaison compta win.
     *
     * @var bool|null
     */
    private $liaisonComptaWin;

    /**
     * Lib critere bool1.
     *
     * @var string|null
     */
    private $libCritereBool1;

    /**
     * Lib critere bool2.
     *
     * @var string|null
     */
    private $libCritereBool2;

    /**
     * Lib critere byte1.
     *
     * @var string|null
     */
    private $libCritereByte1;

    /**
     * Lib critere num1.
     *
     * @var string|null
     */
    private $libCritereNum1;

    /**
     * Lib critere num2.
     *
     * @var string|null
     */
    private $libCritereNum2;

    /**
     * Lib critere num3.
     *
     * @var string|null
     */
    private $libCritereNum3;

    /**
     * Lib critere num4.
     *
     * @var string|null
     */
    private $libCritereNum4;

    /**
     * Lib critere num5.
     *
     * @var string|null
     */
    private $libCritereNum5;

    /**
     * Lib critere tab1.
     *
     * @var string|null
     */
    private $libCritereTab1;

    /**
     * Lib critere tab2.
     *
     * @var string|null
     */
    private $libCritereTab2;

    /**
     * Lib critere tab3.
     *
     * @var string|null
     */
    private $libCritereTab3;

    /**
     * Lib critere tab4.
     *
     * @var string|null
     */
    private $libCritereTab4;

    /**
     * Lib critere tab5.
     *
     * @var string|null
     */
    private $libCritereTab5;

    /**
     * Lib critere txt1.
     *
     * @var string|null
     */
    private $libCritereTxt1;

    /**
     * Lib critere txt2.
     *
     * @var string|null
     */
    private $libCritereTxt2;

    /**
     * Lib critere txt3.
     *
     * @var string|null
     */
    private $libCritereTxt3;

    /**
     * Lib critere txt4.
     *
     * @var string|null
     */
    private $libCritereTxt4;

    /**
     * Lib critere txt5.
     *
     * @var string|null
     */
    private $libCritereTxt5;

    /**
     * Libelle auto avoir.
     *
     * @var string|null
     */
    private $libelleAutoAvoir;

    /**
     * Libelle auto facture.
     *
     * @var string|null
     */
    private $libelleAutoFacture;

    /**
     * Libelle heures surcroit.
     *
     * @var string|null
     */
    private $libelleHeuresSurcroit;

    /**
     * Libelle transfert.
     *
     * @var string|null
     */
    private $libelleTransfert;

    /**
     * Libelle transfert achat.
     *
     * @var string|null
     */
    private $libelleTransfertAchat;

    /**
     * Liv cde frn depot unique.
     *
     * @var bool|null
     */
    private $livCdeFrnDepotUnique;

    /**
     * Mail attestations.
     *
     * @var string|null
     */
    private $mailAttestations;

    /**
     * Mail factures.
     *
     * @var string|null
     */
    private $mailFactures;

    /**
     * Maj dernier passage bt.
     *
     * @var bool|null
     */
    private $majDernierPassageBt;

    /**
     * Maj dernier prix achat.
     *
     * @var bool|null
     */
    private $majDernierPrixAchat;

    /**
     * Maj pamp.
     *
     * @var bool|null
     */
    private $majPamp;

    /**
     * Majoration cascade.
     *
     * @var bool|null
     */
    private $majorationCascade;

    /**
     * Majoration h plus.
     *
     * @var string|null
     */
    private $majorationHPlus;

    /**
     * Marge niveau edition.
     *
     * @var string|null
     */
    private $margeNiveauEdition;

    /**
     * Marge pourcent charge.
     *
     * @var float|null
     */
    private $margePourcentCharge;

    /**
     * Marge sal insp prorata ca.
     *
     * @var bool|null
     */
    private $margeSalInspProrataCa;

    /**
     * Mensualisation tache.
     *
     * @var bool|null
     */
    private $mensualisationTache;

    /**
     * Mode calcul proposition cde.
     *
     * @var string|null
     */
    private $modeCalculPropositionCde;

    /**
     * Modele devis.
     *
     * @var string|null
     */
    private $modeleDevis;

    /**
     * Modele devis tech.
     *
     * @var string|null
     */
    private $modeleDevisTech;

    /**
     * Modele facture.
     *
     * @var string|null
     */
    private $modeleFacture;

    /**
     * Mt cpta negatif.
     *
     * @var bool|null
     */
    private $mtCptaNegatif;

    /**
     * N der document.
     *
     * @var int|null
     */
    private $nDerDocument;

    /**
     * Nb caracteres ligne fact.
     *
     * @var string|null
     */
    private $nbCaracteresLigneFact;

    /**
     * Nb decimales prix unitaire.
     *
     * @var string|null
     */
    private $nbDecimalesPrixUnitaire;

    /**
     * Nb decimales quantite.
     *
     * @var string|null
     */
    private $nbDecimalesQuantite;

    /**
     * Nb entiers prix unitaire.
     *
     * @var string|null
     */
    private $nbEntiersPrixUnitaire;

    /**
     * Nb entiers quantite.
     *
     * @var string|null
     */
    private $nbEntiersQuantite;

    /**
     * Nb jour cp acquis.
     *
     * @var float|null
     */
    private $nbJourCpAcquis;

    /**
     * Nb jours abs proratisation dcp.
     *
     * @var int|null
     */
    private $nbJoursAbsProratisationDcp;

    /**
     * Nb mois consecutifs.
     *
     * @var int|null
     */
    private $nbMoisConsecutifs;

    /**
     * Nom fact nb lignes.
     *
     * @var string|null
     */
    private $nomFactNbLignes;

    /**
     * Nom fichier ascii achat.
     *
     * @var string|null
     */
    private $nomFichierAsciiAchat;

    /**
     * Nom fichier ascii vente.
     *
     * @var string|null
     */
    private $nomFichierAsciiVente;

    /**
     * Note0 non conforme.
     *
     * @var bool|null
     */
    private $note0NonConforme;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Num critere bt num1.
     *
     * @var string|null
     */
    private $numCritereBtNum1;

    /**
     * Num critere bt num2.
     *
     * @var string|null
     */
    private $numCritereBtNum2;

    /**
     * Num critere chantier filtre1.
     *
     * @var string|null
     */
    private $numCritereChantierFiltre1;

    /**
     * Num devis.
     *
     * @var int|null
     */
    private $numDevis;

    /**
     * Num fact.
     *
     * @var int|null
     */
    private $numFact;

    /**
     * Num fact vm.
     *
     * @var int|null
     */
    private $numFactVm;

    /**
     * Numero fiche controle.
     *
     * @var int|null
     */
    private $numeroFicheControle;

    /**
     * Pa par fournisseur.
     *
     * @var bool|null
     */
    private $paParFournisseur;

    /**
     * Pas num cpt par dossier.
     *
     * @var bool|null
     */
    private $pasNumCptParDossier;

    /**
     * Pdf bt coefficient.
     *
     * @var float|null
     */
    private $pdfBtCoefficient;

    /**
     * Pdf bt date passage.
     *
     * @var bool|null
     */
    private $pdfBtDatePassage;

    /**
     * Pdf bt descriptif.
     *
     * @var bool|null
     */
    private $pdfBtDescriptif;

    /**
     * Pdf bt employes corps.
     *
     * @var bool|null
     */
    private $pdfBtEmployesCorps;

    /**
     * Pdf bt employes ref.
     *
     * @var bool|null
     */
    private $pdfBtEmployesRef;

    /**
     * Pdf bt facturer ala validation.
     *
     * @var bool|null
     */
    private $pdfBtFacturerAlaValidation;

    /**
     * Pdf bt format saisie qte pu.
     *
     * @var bool|null
     */
    private $pdfBtFormatSaisieQtePu;

    /**
     * Pdf bt libelle date.
     *
     * @var string|null
     */
    private $pdfBtLibelleDate;

    /**
     * Pdf bt nom chantier.
     *
     * @var bool|null
     */
    private $pdfBtNomChantier;

    /**
     * Pdf bt periode validite.
     *
     * @var bool|null
     */
    private $pdfBtPeriodeValidite;

    /**
     * Pdf bt prix achat.
     *
     * @var float|null
     */
    private $pdfBtPrixAchat;

    /**
     * Pdf bt reprendre libelle date.
     *
     * @var bool|null
     */
    private $pdfBtReprendreLibelleDate;

    /**
     * Pdf bt taux horaire.
     *
     * @var float|null
     */
    private $pdfBtTauxHoraire;

    /**
     * Pj envoi mail.
     *
     * @var string|null
     */
    private $pjEnvoiMail;

    /**
     * Pj envoi mail attestation.
     *
     * @var string|null
     */
    private $pjEnvoiMailAttestation;

    /**
     * Point bt employes sortis.
     *
     * @var bool|null
     */
    private $pointBtEmployesSortis;

    /**
     * Poste1.
     *
     * @var string|null
     */
    private $poste1;

    /**
     * Poste2.
     *
     * @var string|null
     */
    private $poste2;

    /**
     * Poste3.
     *
     * @var string|null
     */
    private $poste3;

    /**
     * Poste4.
     *
     * @var string|null
     */
    private $poste4;

    /**
     * Poste5.
     *
     * @var string|null
     */
    private $poste5;

    /**
     * Pourc maj h compl.
     *
     * @var float|null
     */
    private $pourcMajHCompl;

    /**
     * Pourc maj h compl2.
     *
     * @var float|null
     */
    private $pourcMajHCompl2;

    /**
     * Pourcent dep hc max.
     *
     * @var float|null
     */
    private $pourcentDepHcMax;

    /**
     * Pourcent dep hc plus mois.
     *
     * @var float|null
     */
    private $pourcentDepHcPlusMois;

    /**
     * Pourcentage repos remplacement.
     *
     * @var float|null
     */
    private $pourcentageReposRemplacement;

    /**
     * Prefixe.
     *
     * @var string|null
     */
    private $prefixe;

    /**
     * Prefixe devis.
     *
     * @var string|null
     */
    private $prefixeDevis;

    /**
     * Preparer chantier pret only.
     *
     * @var bool|null
     */
    private $preparerChantierPretOnly;

    /**
     * Prix defaut achat.
     *
     * @var int|null
     */
    private $prixDefautAchat;

    /**
     * Prix defaut entree directe.
     *
     * @var int|null
     */
    private $prixDefautEntreeDirecte;

    /**
     * Prix defaut inventaire.
     *
     * @var int|null
     */
    private $prixDefautInventaire;

    /**
     * Prix defaut sortie directe.
     *
     * @var int|null
     */
    private $prixDefautSortieDirecte;

    /**
     * Prix defaut vente.
     *
     * @var int|null
     */
    private $prixDefautVente;

    /**
     * Prochain numero pj.
     *
     * @var int|null
     */
    private $prochainNumeroPj;

    /**
     * Prorata heures creer ligne.
     *
     * @var bool|null
     */
    private $prorataHeuresCreerLigne;

    /**
     * Prorata heures designation moins.
     *
     * @var string|null
     */
    private $prorataHeuresDesignationMoins;

    /**
     * Prorata heures designation plus.
     *
     * @var string|null
     */
    private $prorataHeuresDesignationPlus;

    /**
     * Prorata heures option.
     *
     * @var string|null
     */
    private $prorataHeuresOption;

    /**
     * Prov cp infos emp.
     *
     * @var bool|null
     */
    private $provCpInfosEmp;

    /**
     * Provisions cp.
     *
     * @var bool|null
     */
    private $provisionsCp;

    /**
     * Qualite nb criteres.
     *
     * @var string|null
     */
    private $qualiteNbCriteres;

    /**
     * Qualite nb notes.
     *
     * @var string|null
     */
    private $qualiteNbNotes;

    /**
     * Qualite satisfaction generale.
     *
     * @var bool|null
     */
    private $qualiteSatisfactionGenerale;

    /**
     * Reference mensu contrat proprete.
     *
     * @var bool|null
     */
    private $referenceMensuContratProprete;

    /**
     * Remplacant abs jf pas auto.
     *
     * @var bool|null
     */
    private $remplacantAbsJfPasAuto;

    /**
     * Remplacant travaille pas jf.
     *
     * @var bool|null
     */
    private $remplacantTravaillePasJf;

    /**
     * Remplacement hcjf.
     *
     * @var bool|null
     */
    private $remplacementHcjf;

    /**
     * Repos compensateur pour travailleur nuit.
     *
     * @var bool|null
     */
    private $reposCompensateurPourTravailleurNuit;

    /**
     * Rt fdans fact dev.
     *
     * @var bool|null
     */
    private $rtFdansFactDev;

    /**
     * Saisir absences sur hc.
     *
     * @var bool|null
     */
    private $saisirAbsencesSurHc;

    /**
     * Saisir code chantier achat.
     *
     * @var bool|null
     */
    private $saisirCodeChantierAchat;

    /**
     * Saisir num bt.
     *
     * @var bool|null
     */
    private $saisirNumBt;

    /**
     * Services paie.
     *
     * @var string|null
     */
    private $servicesPaie;

    /**
     * Seuil majo h compl.
     *
     * @var float|null
     */
    private $seuilMajoHCompl;

    /**
     * Taux escompte.
     *
     * @var float|null
     */
    private $tauxEscompte;

    /**
     * Taux majo hc33.
     *
     * @var float|null
     */
    private $tauxMajoHc33;

    /**
     * Taux majoration h compl.
     *
     * @var float|null
     */
    private $tauxMajorationHCompl;

    /**
     * Taux tva achat.
     *
     * @var float|null
     */
    private $tauxTvaAchat;

    /**
     * Taux tva taxe deee.
     *
     * @var float|null
     */
    private $tauxTvaTaxeDeee;

    /**
     * Taux tva vente.
     *
     * @var float|null
     */
    private $tauxTvaVente;

    /**
     * Type rempl defaut.
     *
     * @var string|null
     */
    private $typeRemplDefaut;

    /**
     * Type transfert vente.
     *
     * @var string|null
     */
    private $typeTransfertVente;

    /**
     * Uniq id synchro.
     *
     * @var string|null
     */
    private $uniqIdSynchro;

    /**
     * Utiliser stock mini.
     *
     * @var bool|null
     */
    private $utiliserStockMini;

    /**
     * Visualiser pointage bt valides.
     *
     * @var bool|null
     */
    private $visualiserPointageBtValides;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the 35 heures.
     *
     * @return DateTime|null Returns the 35 heures.
     */
    public function get35Heures(): ?DateTime {
        return $this->_35Heures;
    }

    /**
     * Get the alertes paie dans pointage.
     *
     * @return bool|null Returns the alertes paie dans pointage.
     */
    public function getAlertesPaieDansPointage(): ?bool {
        return $this->alertesPaieDansPointage;
    }

    /**
     * Get the alertes paie dans reclam.
     *
     * @return bool|null Returns the alertes paie dans reclam.
     */
    public function getAlertesPaieDansReclam(): ?bool {
        return $this->alertesPaieDansReclam;
    }

    /**
     * Get the analytique nature agence.
     *
     * @return bool|null Returns the analytique nature agence.
     */
    public function getAnalytiqueNatureAgence(): ?bool {
        return $this->analytiqueNatureAgence;
    }

    /**
     * Get the analytique par chantier.
     *
     * @return bool|null Returns the analytique par chantier.
     */
    public function getAnalytiqueParChantier(): ?bool {
        return $this->analytiqueParChantier;
    }

    /**
     * Get the archiver devis.
     *
     * @return bool|null Returns the archiver devis.
     */
    public function getArchiverDevis(): ?bool {
        return $this->archiverDevis;
    }

    /**
     * Get the archiver facture.
     *
     * @return bool|null Returns the archiver facture.
     */
    public function getArchiverFacture(): ?bool {
        return $this->archiverFacture;
    }

    /**
     * Get the arrondi sur pu.
     *
     * @return bool|null Returns the arrondi sur pu.
     */
    public function getArrondiSurPu(): ?bool {
        return $this->arrondiSurPu;
    }

    /**
     * Get the autoriser da sans maj stock.
     *
     * @return bool|null Returns the autoriser da sans maj stock.
     */
    public function getAutoriserDaSansMajStock(): ?bool {
        return $this->autoriserDaSansMajStock;
    }

    /**
     * Get the autoriser dep bud cha cde type.
     *
     * @return bool|null Returns the autoriser dep bud cha cde type.
     */
    public function getAutoriserDepBudChaCdeType(): ?bool {
        return $this->autoriserDepBudChaCdeType;
    }

    /**
     * Get the autoriser mensu tache vide.
     *
     * @return bool|null Returns the autoriser mensu tache vide.
     */
    public function getAutoriserMensuTacheVide(): ?bool {
        return $this->autoriserMensuTacheVide;
    }

    /**
     * Get the bl num fact.
     *
     * @return int|null Returns the bl num fact.
     */
    public function getBlNumFact(): ?int {
        return $this->blNumFact;
    }

    /**
     * Get the bl prefixe.
     *
     * @return string|null Returns the bl prefixe.
     */
    public function getBlPrefixe(): ?string {
        return $this->blPrefixe;
    }

    /**
     * Get the br num fact.
     *
     * @return int|null Returns the br num fact.
     */
    public function getBrNumFact(): ?int {
        return $this->brNumFact;
    }

    /**
     * Get the br prefixe.
     *
     * @return string|null Returns the br prefixe.
     */
    public function getBrPrefixe(): ?string {
        return $this->brPrefixe;
    }

    /**
     * Get the bs num fact.
     *
     * @return int|null Returns the bs num fact.
     */
    public function getBsNumFact(): ?int {
        return $this->bsNumFact;
    }

    /**
     * Get the bs prefixe.
     *
     * @return string|null Returns the bs prefixe.
     */
    public function getBsPrefixe(): ?string {
        return $this->bsPrefixe;
    }

    /**
     * Get the cdd mensu total heures.
     *
     * @return bool|null Returns the cdd mensu total heures.
     */
    public function getCddMensuTotalHeures(): ?bool {
        return $this->cddMensuTotalHeures;
    }

    /**
     * Get the cde client num fact.
     *
     * @return int|null Returns the cde client num fact.
     */
    public function getCdeClientNumFact(): ?int {
        return $this->cdeClientNumFact;
    }

    /**
     * Get the cde client prefixe.
     *
     * @return string|null Returns the cde client prefixe.
     */
    public function getCdeClientPrefixe(): ?string {
        return $this->cdeClientPrefixe;
    }

    /**
     * Get the cde frn num fact.
     *
     * @return int|null Returns the cde frn num fact.
     */
    public function getCdeFrnNumFact(): ?int {
        return $this->cdeFrnNumFact;
    }

    /**
     * Get the cde frn prefixe.
     *
     * @return string|null Returns the cde frn prefixe.
     */
    public function getCdeFrnPrefixe(): ?string {
        return $this->cdeFrnPrefixe;
    }

    /**
     * Get the centralisation vente.
     *
     * @return bool|null Returns the centralisation vente.
     */
    public function getCentralisationVente(): ?bool {
        return $this->centralisationVente;
    }

    /**
     * Get the charge mensuelle sans tache.
     *
     * @return bool|null Returns the charge mensuelle sans tache.
     */
    public function getChargeMensuelleSansTache(): ?bool {
        return $this->chargeMensuelleSansTache;
    }

    /**
     * Get the chemin doss compta.
     *
     * @return string|null Returns the chemin doss compta.
     */
    public function getCheminDossCompta(): ?string {
        return $this->cheminDossCompta;
    }

    /**
     * Get the cle debloquer periode cloturee.
     *
     * @return string|null Returns the cle debloquer periode cloturee.
     */
    public function getCleDebloquerPeriodeCloturee(): ?string {
        return $this->cleDebloquerPeriodeCloturee;
    }

    /**
     * Get the code abs cp sans solde.
     *
     * @return string|null Returns the code abs cp sans solde.
     */
    public function getCodeAbsCpSansSolde(): ?string {
        return $this->codeAbsCpSansSolde;
    }

    /**
     * Get the code abs def jf.
     *
     * @return string|null Returns the code abs def jf.
     */
    public function getCodeAbsDefJf(): ?string {
        return $this->codeAbsDefJf;
    }

    /**
     * Get the code abs def jf moins3.
     *
     * @return string|null Returns the code abs def jf moins3.
     */
    public function getCodeAbsDefJfMoins3(): ?string {
        return $this->codeAbsDefJfMoins3;
    }

    /**
     * Get the code abs fermeture chantier.
     *
     * @return string|null Returns the code abs fermeture chantier.
     */
    public function getCodeAbsFermetureChantier(): ?string {
        return $this->codeAbsFermetureChantier;
    }

    /**
     * Get the code abs pointage defaut.
     *
     * @return string|null Returns the code abs pointage defaut.
     */
    public function getCodeAbsPointageDefaut(): ?string {
        return $this->codeAbsPointageDefaut;
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
     * Get the code depot par defaut.
     *
     * @return string|null Returns the code depot par defaut.
     */
    public function getCodeDepotParDefaut(): ?string {
        return $this->codeDepotParDefaut;
    }

    /**
     * Get the code ics.
     *
     * @return string|null Returns the code ics.
     */
    public function getCodeIcs(): ?string {
        return $this->codeIcs;
    }

    /**
     * Get the code ja.
     *
     * @return string|null Returns the code ja.
     */
    public function getCodeJa(): ?string {
        return $this->codeJa;
    }

    /**
     * Get the code jv negoce.
     *
     * @return string|null Returns the code jv negoce.
     */
    public function getCodeJvNegoce(): ?string {
        return $this->codeJvNegoce;
    }

    /**
     * Get the code jv prestation.
     *
     * @return string|null Returns the code jv prestation.
     */
    public function getCodeJvPrestation(): ?string {
        return $this->codeJvPrestation;
    }

    /**
     * Get the code liv par defaut.
     *
     * @return string|null Returns the code liv par defaut.
     */
    public function getCodeLivParDefaut(): ?string {
        return $this->codeLivParDefaut;
    }

    /**
     * Get the code prime chantier1.
     *
     * @return string|null Returns the code prime chantier1.
     */
    public function getCodePrimeChantier1(): ?string {
        return $this->codePrimeChantier1;
    }

    /**
     * Get the code prime chantier2.
     *
     * @return string|null Returns the code prime chantier2.
     */
    public function getCodePrimeChantier2(): ?string {
        return $this->codePrimeChantier2;
    }

    /**
     * Get the code prime chantier3.
     *
     * @return string|null Returns the code prime chantier3.
     */
    public function getCodePrimeChantier3(): ?string {
        return $this->codePrimeChantier3;
    }

    /**
     * Get the code prime dimanche1.
     *
     * @return string|null Returns the code prime dimanche1.
     */
    public function getCodePrimeDimanche1(): ?string {
        return $this->codePrimeDimanche1;
    }

    /**
     * Get the code prime dimanche1 type2.
     *
     * @return string|null Returns the code prime dimanche1 type2.
     */
    public function getCodePrimeDimanche1Type2(): ?string {
        return $this->codePrimeDimanche1Type2;
    }

    /**
     * Get the code prime dimanche2.
     *
     * @return string|null Returns the code prime dimanche2.
     */
    public function getCodePrimeDimanche2(): ?string {
        return $this->codePrimeDimanche2;
    }

    /**
     * Get the code prime forfait.
     *
     * @return string|null Returns the code prime forfait.
     */
    public function getCodePrimeForfait(): ?string {
        return $this->codePrimeForfait;
    }

    /**
     * Get the code prime h compl.
     *
     * @return string|null Returns the code prime h compl.
     */
    public function getCodePrimeHCompl(): ?string {
        return $this->codePrimeHCompl;
    }

    /**
     * Get the code prime h compl2.
     *
     * @return string|null Returns the code prime h compl2.
     */
    public function getCodePrimeHCompl2(): ?string {
        return $this->codePrimeHCompl2;
    }

    /**
     * Get the code prime jf1.
     *
     * @return string|null Returns the code prime jf1.
     */
    public function getCodePrimeJf1(): ?string {
        return $this->codePrimeJf1;
    }

    /**
     * Get the code prime jf1 type2.
     *
     * @return string|null Returns the code prime jf1 type2.
     */
    public function getCodePrimeJf1Type2(): ?string {
        return $this->codePrimeJf1Type2;
    }

    /**
     * Get the code prime jf2.
     *
     * @return string|null Returns the code prime jf2.
     */
    public function getCodePrimeJf2(): ?string {
        return $this->codePrimeJf2;
    }

    /**
     * Get the code prime jf mai.
     *
     * @return string|null Returns the code prime jf mai.
     */
    public function getCodePrimeJfMai(): ?string {
        return $this->codePrimeJfMai;
    }

    /**
     * Get the code prime nuit1.
     *
     * @return string|null Returns the code prime nuit1.
     */
    public function getCodePrimeNuit1(): ?string {
        return $this->codePrimeNuit1;
    }

    /**
     * Get the code prime nuit1 type2.
     *
     * @return string|null Returns the code prime nuit1 type2.
     */
    public function getCodePrimeNuit1Type2(): ?string {
        return $this->codePrimeNuit1Type2;
    }

    /**
     * Get the code prime nuit2.
     *
     * @return string|null Returns the code prime nuit2.
     */
    public function getCodePrimeNuit2(): ?string {
        return $this->codePrimeNuit2;
    }

    /**
     * Get the code prime paniers.
     *
     * @return string|null Returns the code prime paniers.
     */
    public function getCodePrimePaniers(): ?string {
        return $this->codePrimePaniers;
    }

    /**
     * Get the code prime rs.
     *
     * @return string|null Returns the code prime rs.
     */
    public function getCodePrimeRs(): ?string {
        return $this->codePrimeRs;
    }

    /**
     * Get the code prime tp.
     *
     * @return string|null Returns the code prime tp.
     */
    public function getCodePrimeTp(): ?string {
        return $this->codePrimeTp;
    }

    /**
     * Get the code reg jv neg debut.
     *
     * @return string|null Returns the code reg jv neg debut.
     */
    public function getCodeRegJvNegDebut(): ?string {
        return $this->codeRegJvNegDebut;
    }

    /**
     * Get the code reg jv neg fin.
     *
     * @return string|null Returns the code reg jv neg fin.
     */
    public function getCodeRegJvNegFin(): ?string {
        return $this->codeRegJvNegFin;
    }

    /**
     * Get the code reg jv prest debut.
     *
     * @return string|null Returns the code reg jv prest debut.
     */
    public function getCodeRegJvPrestDebut(): ?string {
        return $this->codeRegJvPrestDebut;
    }

    /**
     * Get the code reg jv prest fin.
     *
     * @return string|null Returns the code reg jv prest fin.
     */
    public function getCodeRegJvPrestFin(): ?string {
        return $this->codeRegJvPrestFin;
    }

    /**
     * Get the code tache defaut.
     *
     * @return string|null Returns the code tache defaut.
     */
    public function getCodeTacheDefaut(): ?string {
        return $this->codeTacheDefaut;
    }

    /**
     * Get the collectif def.
     *
     * @return string|null Returns the collectif def.
     */
    public function getCollectifDef(): ?string {
        return $this->collectifDef;
    }

    /**
     * Get the collectif def fournisseur.
     *
     * @return string|null Returns the collectif def fournisseur.
     */
    public function getCollectifDefFournisseur(): ?string {
        return $this->collectifDefFournisseur;
    }

    /**
     * Get the commentaire journee solidarite.
     *
     * @return string|null Returns the commentaire journee solidarite.
     */
    public function getCommentaireJourneeSolidarite(): ?string {
        return $this->commentaireJourneeSolidarite;
    }

    /**
     * Get the compte collectif achat.
     *
     * @return string|null Returns the compte collectif achat.
     */
    public function getCompteCollectifAchat(): ?string {
        return $this->compteCollectifAchat;
    }

    /**
     * Get the compte collectif vente.
     *
     * @return string|null Returns the compte collectif vente.
     */
    public function getCompteCollectifVente(): ?string {
        return $this->compteCollectifVente;
    }

    /**
     * Get the compte escompte ca exonere.
     *
     * @return string|null Returns the compte escompte ca exonere.
     */
    public function getCompteEscompteCaExonere(): ?string {
        return $this->compteEscompteCaExonere;
    }

    /**
     * Get the compte escompte soumis tva.
     *
     * @return string|null Returns the compte escompte soumis tva.
     */
    public function getCompteEscompteSoumisTva(): ?string {
        return $this->compteEscompteSoumisTva;
    }

    /**
     * Get the compte tva achat.
     *
     * @return string|null Returns the compte tva achat.
     */
    public function getCompteTvaAchat(): ?string {
        return $this->compteTvaAchat;
    }

    /**
     * Get the compte tva taxe deee.
     *
     * @return string|null Returns the compte tva taxe deee.
     */
    public function getCompteTvaTaxeDeee(): ?string {
        return $this->compteTvaTaxeDeee;
    }

    /**
     * Get the compte tva vente.
     *
     * @return string|null Returns the compte tva vente.
     */
    public function getCompteTvaVente(): ?string {
        return $this->compteTvaVente;
    }

    /**
     * Get the compte ventil taxe deee.
     *
     * @return string|null Returns the compte ventil taxe deee.
     */
    public function getCompteVentilTaxeDeee(): ?string {
        return $this->compteVentilTaxeDeee;
    }

    /**
     * Get the compter samedi tf cp paie.
     *
     * @return bool|null Returns the compter samedi tf cp paie.
     */
    public function getCompterSamediTfCpPaie(): ?bool {
        return $this->compterSamediTfCpPaie;
    }

    /**
     * Get the controler cde frn.
     *
     * @return bool|null Returns the controler cde frn.
     */
    public function getControlerCdeFrn(): ?bool {
        return $this->controlerCdeFrn;
    }

    /**
     * Get the controler charges mensuelles.
     *
     * @return bool|null Returns the controler charges mensuelles.
     */
    public function getControlerChargesMensuelles(): ?bool {
        return $this->controlerChargesMensuelles;
    }

    /**
     * Get the controler code reg.
     *
     * @return bool|null Returns the controler code reg.
     */
    public function getControlerCodeReg(): ?bool {
        return $this->controlerCodeReg;
    }

    /**
     * Get the controler dep hc max.
     *
     * @return bool|null Returns the controler dep hc max.
     */
    public function getControlerDepHcMax(): ?bool {
        return $this->controlerDepHcMax;
    }

    /**
     * Get the controler dep hc plus mois.
     *
     * @return bool|null Returns the controler dep hc plus mois.
     */
    public function getControlerDepHcPlusMois(): ?bool {
        return $this->controlerDepHcPlusMois;
    }

    /**
     * Get the cp sans provisions.
     *
     * @return bool|null Returns the cp sans provisions.
     */
    public function getCpSansProvisions(): ?bool {
        return $this->cpSansProvisions;
    }

    /**
     * Get the creer alerte paie def en paie.
     *
     * @return bool|null Returns the creer alerte paie def en paie.
     */
    public function getCreerAlertePaieDefEnPaie(): ?bool {
        return $this->creerAlertePaieDefEnPaie;
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
     * Get the ctrl auto cp avec anticipation.
     *
     * @return bool|null Returns the ctrl auto cp avec anticipation.
     */
    public function getCtrlAutoCpAvecAnticipation(): ?bool {
        return $this->ctrlAutoCpAvecAnticipation;
    }

    /**
     * Get the date appli gestion heures en plus.
     *
     * @return DateTime|null Returns the date appli gestion heures en plus.
     */
    public function getDateAppliGestionHeuresEnPlus(): ?DateTime {
        return $this->dateAppliGestionHeuresEnPlus;
    }

    /**
     * Get the date journee solidarite.
     *
     * @return DateTime|null Returns the date journee solidarite.
     */
    public function getDateJourneeSolidarite(): ?DateTime {
        return $this->dateJourneeSolidarite;
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
     * Get the dec mois prep fact.
     *
     * @return int|null Returns the dec mois prep fact.
     */
    public function getDecMoisPrepFact(): ?int {
        return $this->decMoisPrepFact;
    }

    /**
     * Get the dernier compte client.
     *
     * @return string|null Returns the dernier compte client.
     */
    public function getDernierCompteClient(): ?string {
        return $this->dernierCompteClient;
    }

    /**
     * Get the dernier compte frn.
     *
     * @return string|null Returns the dernier compte frn.
     */
    public function getDernierCompteFrn(): ?string {
        return $this->dernierCompteFrn;
    }

    /**
     * Get the discr.
     *
     * @return string|null Returns the discr.
     */
    public function getDiscr(): ?string {
        return $this->discr;
    }

    /**
     * Get the doss compta.
     *
     * @return string|null Returns the doss compta.
     */
    public function getDossCompta(): ?string {
        return $this->dossCompta;
    }

    /**
     * Get the doss paie.
     *
     * @return string|null Returns the doss paie.
     */
    public function getDossPaie(): ?string {
        return $this->dossPaie;
    }

    /**
     * Get the es code abs entree.
     *
     * @return string|null Returns the es code abs entree.
     */
    public function getEsCodeAbsEntree(): ?string {
        return $this->esCodeAbsEntree;
    }

    /**
     * Get the es code abs sortie.
     *
     * @return string|null Returns the es code abs sortie.
     */
    public function getEsCodeAbsSortie(): ?string {
        return $this->esCodeAbsSortie;
    }

    /**
     * Get the es heures reelles.
     *
     * @return bool|null Returns the es heures reelles.
     */
    public function getEsHeuresReelles(): ?bool {
        return $this->esHeuresReelles;
    }

    /**
     * Get the etablissements paie.
     *
     * @return string|null Returns the etablissements paie.
     */
    public function getEtablissementsPaie(): ?string {
        return $this->etablissementsPaie;
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
     * Get the euro.
     *
     * @return bool|null Returns the euro.
     */
    public function getEuro(): ?bool {
        return $this->euro;
    }

    /**
     * Get the facturation prorata heures.
     *
     * @return bool|null Returns the facturation prorata heures.
     */
    public function getFacturationProrataHeures(): ?bool {
        return $this->facturationProrataHeures;
    }

    /**
     * Get the folio ja.
     *
     * @return string|null Returns the folio ja.
     */
    public function getFolioJa(): ?string {
        return $this->folioJa;
    }

    /**
     * Get the folio jv negoce.
     *
     * @return string|null Returns the folio jv negoce.
     */
    public function getFolioJvNegoce(): ?string {
        return $this->folioJvNegoce;
    }

    /**
     * Get the folio jv prestation.
     *
     * @return string|null Returns the folio jv prestation.
     */
    public function getFolioJvPrestation(): ?string {
        return $this->folioJvPrestation;
    }

    /**
     * Get the gerer num cpt chantier.
     *
     * @return bool|null Returns the gerer num cpt chantier.
     */
    public function getGererNumCptChantier(): ?bool {
        return $this->gererNumCptChantier;
    }

    /**
     * Get the gestion h compl.
     *
     * @return bool|null Returns the gestion h compl.
     */
    public function getGestionHCompl(): ?bool {
        return $this->gestionHCompl;
    }

    /**
     * Get the gestion h sup mens.
     *
     * @return bool|null Returns the gestion h sup mens.
     */
    public function getGestionHSupMens(): ?bool {
        return $this->gestionHSupMens;
    }

    /**
     * Get the gestion h sup mensuelle.
     *
     * @return bool|null Returns the gestion h sup mensuelle.
     */
    public function getGestionHSupMensuelle(): ?bool {
        return $this->gestionHSupMensuelle;
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
     * Get the gestion multi depot.
     *
     * @return bool|null Returns the gestion multi depot.
     */
    public function getGestionMultiDepot(): ?bool {
        return $this->gestionMultiDepot;
    }

    /**
     * Get the gestion quotas.
     *
     * @return bool|null Returns the gestion quotas.
     */
    public function getGestionQuotas(): ?bool {
        return $this->gestionQuotas;
    }

    /**
     * Get the gestion specif jf.
     *
     * @return bool|null Returns the gestion specif jf.
     */
    public function getGestionSpecifJf(): ?bool {
        return $this->gestionSpecifJf;
    }

    /**
     * Get the gestion specif majo jf.
     *
     * @return bool|null Returns the gestion specif majo jf.
     */
    public function getGestionSpecifMajoJf(): ?bool {
        return $this->gestionSpecifMajoJf;
    }

    /**
     * Get the h deb nuit.
     *
     * @return DateTime|null Returns the h deb nuit.
     */
    public function getHDebNuit(): ?DateTime {
        return $this->hDebNuit;
    }

    /**
     * Get the h deb nuit trav nuit.
     *
     * @return DateTime|null Returns the h deb nuit trav nuit.
     */
    public function getHDebNuitTravNuit(): ?DateTime {
        return $this->hDebNuitTravNuit;
    }

    /**
     * Get the h fin nuit.
     *
     * @return DateTime|null Returns the h fin nuit.
     */
    public function getHFinNuit(): ?DateTime {
        return $this->hFinNuit;
    }

    /**
     * Get the h fin nuit trav nuit.
     *
     * @return DateTime|null Returns the h fin nuit trav nuit.
     */
    public function getHFinNuitTravNuit(): ?DateTime {
        return $this->hFinNuitTravNuit;
    }

    /**
     * Get the heures absence mensualise.
     *
     * @return bool|null Returns the heures absence mensualise.
     */
    public function getHeuresAbsenceMensualise(): ?bool {
        return $this->heuresAbsenceMensualise;
    }

    /**
     * Get the heures rempl egales mens titulaire.
     *
     * @return bool|null Returns the heures rempl egales mens titulaire.
     */
    public function getHeuresRemplEgalesMensTitulaire(): ?bool {
        return $this->heuresRemplEgalesMensTitulaire;
    }

    /**
     * Get the increment compte auto.
     *
     * @return int|null Returns the increment compte auto.
     */
    public function getIncrementCompteAuto(): ?int {
        return $this->incrementCompteAuto;
    }

    /**
     * Get the liaison compta win.
     *
     * @return bool|null Returns the liaison compta win.
     */
    public function getLiaisonComptaWin(): ?bool {
        return $this->liaisonComptaWin;
    }

    /**
     * Get the lib critere bool1.
     *
     * @return string|null Returns the lib critere bool1.
     */
    public function getLibCritereBool1(): ?string {
        return $this->libCritereBool1;
    }

    /**
     * Get the lib critere bool2.
     *
     * @return string|null Returns the lib critere bool2.
     */
    public function getLibCritereBool2(): ?string {
        return $this->libCritereBool2;
    }

    /**
     * Get the lib critere byte1.
     *
     * @return string|null Returns the lib critere byte1.
     */
    public function getLibCritereByte1(): ?string {
        return $this->libCritereByte1;
    }

    /**
     * Get the lib critere num1.
     *
     * @return string|null Returns the lib critere num1.
     */
    public function getLibCritereNum1(): ?string {
        return $this->libCritereNum1;
    }

    /**
     * Get the lib critere num2.
     *
     * @return string|null Returns the lib critere num2.
     */
    public function getLibCritereNum2(): ?string {
        return $this->libCritereNum2;
    }

    /**
     * Get the lib critere num3.
     *
     * @return string|null Returns the lib critere num3.
     */
    public function getLibCritereNum3(): ?string {
        return $this->libCritereNum3;
    }

    /**
     * Get the lib critere num4.
     *
     * @return string|null Returns the lib critere num4.
     */
    public function getLibCritereNum4(): ?string {
        return $this->libCritereNum4;
    }

    /**
     * Get the lib critere num5.
     *
     * @return string|null Returns the lib critere num5.
     */
    public function getLibCritereNum5(): ?string {
        return $this->libCritereNum5;
    }

    /**
     * Get the lib critere tab1.
     *
     * @return string|null Returns the lib critere tab1.
     */
    public function getLibCritereTab1(): ?string {
        return $this->libCritereTab1;
    }

    /**
     * Get the lib critere tab2.
     *
     * @return string|null Returns the lib critere tab2.
     */
    public function getLibCritereTab2(): ?string {
        return $this->libCritereTab2;
    }

    /**
     * Get the lib critere tab3.
     *
     * @return string|null Returns the lib critere tab3.
     */
    public function getLibCritereTab3(): ?string {
        return $this->libCritereTab3;
    }

    /**
     * Get the lib critere tab4.
     *
     * @return string|null Returns the lib critere tab4.
     */
    public function getLibCritereTab4(): ?string {
        return $this->libCritereTab4;
    }

    /**
     * Get the lib critere tab5.
     *
     * @return string|null Returns the lib critere tab5.
     */
    public function getLibCritereTab5(): ?string {
        return $this->libCritereTab5;
    }

    /**
     * Get the lib critere txt1.
     *
     * @return string|null Returns the lib critere txt1.
     */
    public function getLibCritereTxt1(): ?string {
        return $this->libCritereTxt1;
    }

    /**
     * Get the lib critere txt2.
     *
     * @return string|null Returns the lib critere txt2.
     */
    public function getLibCritereTxt2(): ?string {
        return $this->libCritereTxt2;
    }

    /**
     * Get the lib critere txt3.
     *
     * @return string|null Returns the lib critere txt3.
     */
    public function getLibCritereTxt3(): ?string {
        return $this->libCritereTxt3;
    }

    /**
     * Get the lib critere txt4.
     *
     * @return string|null Returns the lib critere txt4.
     */
    public function getLibCritereTxt4(): ?string {
        return $this->libCritereTxt4;
    }

    /**
     * Get the lib critere txt5.
     *
     * @return string|null Returns the lib critere txt5.
     */
    public function getLibCritereTxt5(): ?string {
        return $this->libCritereTxt5;
    }

    /**
     * Get the libelle auto avoir.
     *
     * @return string|null Returns the libelle auto avoir.
     */
    public function getLibelleAutoAvoir(): ?string {
        return $this->libelleAutoAvoir;
    }

    /**
     * Get the libelle auto facture.
     *
     * @return string|null Returns the libelle auto facture.
     */
    public function getLibelleAutoFacture(): ?string {
        return $this->libelleAutoFacture;
    }

    /**
     * Get the libelle heures surcroit.
     *
     * @return string|null Returns the libelle heures surcroit.
     */
    public function getLibelleHeuresSurcroit(): ?string {
        return $this->libelleHeuresSurcroit;
    }

    /**
     * Get the libelle transfert.
     *
     * @return string|null Returns the libelle transfert.
     */
    public function getLibelleTransfert(): ?string {
        return $this->libelleTransfert;
    }

    /**
     * Get the libelle transfert achat.
     *
     * @return string|null Returns the libelle transfert achat.
     */
    public function getLibelleTransfertAchat(): ?string {
        return $this->libelleTransfertAchat;
    }

    /**
     * Get the liv cde frn depot unique.
     *
     * @return bool|null Returns the liv cde frn depot unique.
     */
    public function getLivCdeFrnDepotUnique(): ?bool {
        return $this->livCdeFrnDepotUnique;
    }

    /**
     * Get the mail attestations.
     *
     * @return string|null Returns the mail attestations.
     */
    public function getMailAttestations(): ?string {
        return $this->mailAttestations;
    }

    /**
     * Get the mail factures.
     *
     * @return string|null Returns the mail factures.
     */
    public function getMailFactures(): ?string {
        return $this->mailFactures;
    }

    /**
     * Get the maj dernier passage bt.
     *
     * @return bool|null Returns the maj dernier passage bt.
     */
    public function getMajDernierPassageBt(): ?bool {
        return $this->majDernierPassageBt;
    }

    /**
     * Get the maj dernier prix achat.
     *
     * @return bool|null Returns the maj dernier prix achat.
     */
    public function getMajDernierPrixAchat(): ?bool {
        return $this->majDernierPrixAchat;
    }

    /**
     * Get the maj pamp.
     *
     * @return bool|null Returns the maj pamp.
     */
    public function getMajPamp(): ?bool {
        return $this->majPamp;
    }

    /**
     * Get the majoration cascade.
     *
     * @return bool|null Returns the majoration cascade.
     */
    public function getMajorationCascade(): ?bool {
        return $this->majorationCascade;
    }

    /**
     * Get the majoration h plus.
     *
     * @return string|null Returns the majoration h plus.
     */
    public function getMajorationHPlus(): ?string {
        return $this->majorationHPlus;
    }

    /**
     * Get the marge niveau edition.
     *
     * @return string|null Returns the marge niveau edition.
     */
    public function getMargeNiveauEdition(): ?string {
        return $this->margeNiveauEdition;
    }

    /**
     * Get the marge pourcent charge.
     *
     * @return float|null Returns the marge pourcent charge.
     */
    public function getMargePourcentCharge(): ?float {
        return $this->margePourcentCharge;
    }

    /**
     * Get the marge sal insp prorata ca.
     *
     * @return bool|null Returns the marge sal insp prorata ca.
     */
    public function getMargeSalInspProrataCa(): ?bool {
        return $this->margeSalInspProrataCa;
    }

    /**
     * Get the mensualisation tache.
     *
     * @return bool|null Returns the mensualisation tache.
     */
    public function getMensualisationTache(): ?bool {
        return $this->mensualisationTache;
    }

    /**
     * Get the mode calcul proposition cde.
     *
     * @return string|null Returns the mode calcul proposition cde.
     */
    public function getModeCalculPropositionCde(): ?string {
        return $this->modeCalculPropositionCde;
    }

    /**
     * Get the modele devis.
     *
     * @return string|null Returns the modele devis.
     */
    public function getModeleDevis(): ?string {
        return $this->modeleDevis;
    }

    /**
     * Get the modele devis tech.
     *
     * @return string|null Returns the modele devis tech.
     */
    public function getModeleDevisTech(): ?string {
        return $this->modeleDevisTech;
    }

    /**
     * Get the modele facture.
     *
     * @return string|null Returns the modele facture.
     */
    public function getModeleFacture(): ?string {
        return $this->modeleFacture;
    }

    /**
     * Get the mt cpta negatif.
     *
     * @return bool|null Returns the mt cpta negatif.
     */
    public function getMtCptaNegatif(): ?bool {
        return $this->mtCptaNegatif;
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
     * Get the nb caracteres ligne fact.
     *
     * @return string|null Returns the nb caracteres ligne fact.
     */
    public function getNbCaracteresLigneFact(): ?string {
        return $this->nbCaracteresLigneFact;
    }

    /**
     * Get the nb decimales prix unitaire.
     *
     * @return string|null Returns the nb decimales prix unitaire.
     */
    public function getNbDecimalesPrixUnitaire(): ?string {
        return $this->nbDecimalesPrixUnitaire;
    }

    /**
     * Get the nb decimales quantite.
     *
     * @return string|null Returns the nb decimales quantite.
     */
    public function getNbDecimalesQuantite(): ?string {
        return $this->nbDecimalesQuantite;
    }

    /**
     * Get the nb entiers prix unitaire.
     *
     * @return string|null Returns the nb entiers prix unitaire.
     */
    public function getNbEntiersPrixUnitaire(): ?string {
        return $this->nbEntiersPrixUnitaire;
    }

    /**
     * Get the nb entiers quantite.
     *
     * @return string|null Returns the nb entiers quantite.
     */
    public function getNbEntiersQuantite(): ?string {
        return $this->nbEntiersQuantite;
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
     * Get the nb jours abs proratisation dcp.
     *
     * @return int|null Returns the nb jours abs proratisation dcp.
     */
    public function getNbJoursAbsProratisationDcp(): ?int {
        return $this->nbJoursAbsProratisationDcp;
    }

    /**
     * Get the nb mois consecutifs.
     *
     * @return int|null Returns the nb mois consecutifs.
     */
    public function getNbMoisConsecutifs(): ?int {
        return $this->nbMoisConsecutifs;
    }

    /**
     * Get the nom fact nb lignes.
     *
     * @return string|null Returns the nom fact nb lignes.
     */
    public function getNomFactNbLignes(): ?string {
        return $this->nomFactNbLignes;
    }

    /**
     * Get the nom fichier ascii achat.
     *
     * @return string|null Returns the nom fichier ascii achat.
     */
    public function getNomFichierAsciiAchat(): ?string {
        return $this->nomFichierAsciiAchat;
    }

    /**
     * Get the nom fichier ascii vente.
     *
     * @return string|null Returns the nom fichier ascii vente.
     */
    public function getNomFichierAsciiVente(): ?string {
        return $this->nomFichierAsciiVente;
    }

    /**
     * Get the note0 non conforme.
     *
     * @return bool|null Returns the note0 non conforme.
     */
    public function getNote0NonConforme(): ?bool {
        return $this->note0NonConforme;
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
     * Get the num critere bt num1.
     *
     * @return string|null Returns the num critere bt num1.
     */
    public function getNumCritereBtNum1(): ?string {
        return $this->numCritereBtNum1;
    }

    /**
     * Get the num critere bt num2.
     *
     * @return string|null Returns the num critere bt num2.
     */
    public function getNumCritereBtNum2(): ?string {
        return $this->numCritereBtNum2;
    }

    /**
     * Get the num critere chantier filtre1.
     *
     * @return string|null Returns the num critere chantier filtre1.
     */
    public function getNumCritereChantierFiltre1(): ?string {
        return $this->numCritereChantierFiltre1;
    }

    /**
     * Get the num devis.
     *
     * @return int|null Returns the num devis.
     */
    public function getNumDevis(): ?int {
        return $this->numDevis;
    }

    /**
     * Get the num fact.
     *
     * @return int|null Returns the num fact.
     */
    public function getNumFact(): ?int {
        return $this->numFact;
    }

    /**
     * Get the num fact vm.
     *
     * @return int|null Returns the num fact vm.
     */
    public function getNumFactVm(): ?int {
        return $this->numFactVm;
    }

    /**
     * Get the numero fiche controle.
     *
     * @return int|null Returns the numero fiche controle.
     */
    public function getNumeroFicheControle(): ?int {
        return $this->numeroFicheControle;
    }

    /**
     * Get the pa par fournisseur.
     *
     * @return bool|null Returns the pa par fournisseur.
     */
    public function getPaParFournisseur(): ?bool {
        return $this->paParFournisseur;
    }

    /**
     * Get the pas num cpt par dossier.
     *
     * @return bool|null Returns the pas num cpt par dossier.
     */
    public function getPasNumCptParDossier(): ?bool {
        return $this->pasNumCptParDossier;
    }

    /**
     * Get the pdf bt coefficient.
     *
     * @return float|null Returns the pdf bt coefficient.
     */
    public function getPdfBtCoefficient(): ?float {
        return $this->pdfBtCoefficient;
    }

    /**
     * Get the pdf bt date passage.
     *
     * @return bool|null Returns the pdf bt date passage.
     */
    public function getPdfBtDatePassage(): ?bool {
        return $this->pdfBtDatePassage;
    }

    /**
     * Get the pdf bt descriptif.
     *
     * @return bool|null Returns the pdf bt descriptif.
     */
    public function getPdfBtDescriptif(): ?bool {
        return $this->pdfBtDescriptif;
    }

    /**
     * Get the pdf bt employes corps.
     *
     * @return bool|null Returns the pdf bt employes corps.
     */
    public function getPdfBtEmployesCorps(): ?bool {
        return $this->pdfBtEmployesCorps;
    }

    /**
     * Get the pdf bt employes ref.
     *
     * @return bool|null Returns the pdf bt employes ref.
     */
    public function getPdfBtEmployesRef(): ?bool {
        return $this->pdfBtEmployesRef;
    }

    /**
     * Get the pdf bt facturer ala validation.
     *
     * @return bool|null Returns the pdf bt facturer ala validation.
     */
    public function getPdfBtFacturerAlaValidation(): ?bool {
        return $this->pdfBtFacturerAlaValidation;
    }

    /**
     * Get the pdf bt format saisie qte pu.
     *
     * @return bool|null Returns the pdf bt format saisie qte pu.
     */
    public function getPdfBtFormatSaisieQtePu(): ?bool {
        return $this->pdfBtFormatSaisieQtePu;
    }

    /**
     * Get the pdf bt libelle date.
     *
     * @return string|null Returns the pdf bt libelle date.
     */
    public function getPdfBtLibelleDate(): ?string {
        return $this->pdfBtLibelleDate;
    }

    /**
     * Get the pdf bt nom chantier.
     *
     * @return bool|null Returns the pdf bt nom chantier.
     */
    public function getPdfBtNomChantier(): ?bool {
        return $this->pdfBtNomChantier;
    }

    /**
     * Get the pdf bt periode validite.
     *
     * @return bool|null Returns the pdf bt periode validite.
     */
    public function getPdfBtPeriodeValidite(): ?bool {
        return $this->pdfBtPeriodeValidite;
    }

    /**
     * Get the pdf bt prix achat.
     *
     * @return float|null Returns the pdf bt prix achat.
     */
    public function getPdfBtPrixAchat(): ?float {
        return $this->pdfBtPrixAchat;
    }

    /**
     * Get the pdf bt reprendre libelle date.
     *
     * @return bool|null Returns the pdf bt reprendre libelle date.
     */
    public function getPdfBtReprendreLibelleDate(): ?bool {
        return $this->pdfBtReprendreLibelleDate;
    }

    /**
     * Get the pdf bt taux horaire.
     *
     * @return float|null Returns the pdf bt taux horaire.
     */
    public function getPdfBtTauxHoraire(): ?float {
        return $this->pdfBtTauxHoraire;
    }

    /**
     * Get the pj envoi mail.
     *
     * @return string|null Returns the pj envoi mail.
     */
    public function getPjEnvoiMail(): ?string {
        return $this->pjEnvoiMail;
    }

    /**
     * Get the pj envoi mail attestation.
     *
     * @return string|null Returns the pj envoi mail attestation.
     */
    public function getPjEnvoiMailAttestation(): ?string {
        return $this->pjEnvoiMailAttestation;
    }

    /**
     * Get the point bt employes sortis.
     *
     * @return bool|null Returns the point bt employes sortis.
     */
    public function getPointBtEmployesSortis(): ?bool {
        return $this->pointBtEmployesSortis;
    }

    /**
     * Get the poste1.
     *
     * @return string|null Returns the poste1.
     */
    public function getPoste1(): ?string {
        return $this->poste1;
    }

    /**
     * Get the poste2.
     *
     * @return string|null Returns the poste2.
     */
    public function getPoste2(): ?string {
        return $this->poste2;
    }

    /**
     * Get the poste3.
     *
     * @return string|null Returns the poste3.
     */
    public function getPoste3(): ?string {
        return $this->poste3;
    }

    /**
     * Get the poste4.
     *
     * @return string|null Returns the poste4.
     */
    public function getPoste4(): ?string {
        return $this->poste4;
    }

    /**
     * Get the poste5.
     *
     * @return string|null Returns the poste5.
     */
    public function getPoste5(): ?string {
        return $this->poste5;
    }

    /**
     * Get the pourc maj h compl.
     *
     * @return float|null Returns the pourc maj h compl.
     */
    public function getPourcMajHCompl(): ?float {
        return $this->pourcMajHCompl;
    }

    /**
     * Get the pourc maj h compl2.
     *
     * @return float|null Returns the pourc maj h compl2.
     */
    public function getPourcMajHCompl2(): ?float {
        return $this->pourcMajHCompl2;
    }

    /**
     * Get the pourcent dep hc max.
     *
     * @return float|null Returns the pourcent dep hc max.
     */
    public function getPourcentDepHcMax(): ?float {
        return $this->pourcentDepHcMax;
    }

    /**
     * Get the pourcent dep hc plus mois.
     *
     * @return float|null Returns the pourcent dep hc plus mois.
     */
    public function getPourcentDepHcPlusMois(): ?float {
        return $this->pourcentDepHcPlusMois;
    }

    /**
     * Get the pourcentage repos remplacement.
     *
     * @return float|null Returns the pourcentage repos remplacement.
     */
    public function getPourcentageReposRemplacement(): ?float {
        return $this->pourcentageReposRemplacement;
    }

    /**
     * Get the prefixe.
     *
     * @return string|null Returns the prefixe.
     */
    public function getPrefixe(): ?string {
        return $this->prefixe;
    }

    /**
     * Get the prefixe devis.
     *
     * @return string|null Returns the prefixe devis.
     */
    public function getPrefixeDevis(): ?string {
        return $this->prefixeDevis;
    }

    /**
     * Get the preparer chantier pret only.
     *
     * @return bool|null Returns the preparer chantier pret only.
     */
    public function getPreparerChantierPretOnly(): ?bool {
        return $this->preparerChantierPretOnly;
    }

    /**
     * Get the prix defaut achat.
     *
     * @return int|null Returns the prix defaut achat.
     */
    public function getPrixDefautAchat(): ?int {
        return $this->prixDefautAchat;
    }

    /**
     * Get the prix defaut entree directe.
     *
     * @return int|null Returns the prix defaut entree directe.
     */
    public function getPrixDefautEntreeDirecte(): ?int {
        return $this->prixDefautEntreeDirecte;
    }

    /**
     * Get the prix defaut inventaire.
     *
     * @return int|null Returns the prix defaut inventaire.
     */
    public function getPrixDefautInventaire(): ?int {
        return $this->prixDefautInventaire;
    }

    /**
     * Get the prix defaut sortie directe.
     *
     * @return int|null Returns the prix defaut sortie directe.
     */
    public function getPrixDefautSortieDirecte(): ?int {
        return $this->prixDefautSortieDirecte;
    }

    /**
     * Get the prix defaut vente.
     *
     * @return int|null Returns the prix defaut vente.
     */
    public function getPrixDefautVente(): ?int {
        return $this->prixDefautVente;
    }

    /**
     * Get the prochain numero pj.
     *
     * @return int|null Returns the prochain numero pj.
     */
    public function getProchainNumeroPj(): ?int {
        return $this->prochainNumeroPj;
    }

    /**
     * Get the prorata heures creer ligne.
     *
     * @return bool|null Returns the prorata heures creer ligne.
     */
    public function getProrataHeuresCreerLigne(): ?bool {
        return $this->prorataHeuresCreerLigne;
    }

    /**
     * Get the prorata heures designation moins.
     *
     * @return string|null Returns the prorata heures designation moins.
     */
    public function getProrataHeuresDesignationMoins(): ?string {
        return $this->prorataHeuresDesignationMoins;
    }

    /**
     * Get the prorata heures designation plus.
     *
     * @return string|null Returns the prorata heures designation plus.
     */
    public function getProrataHeuresDesignationPlus(): ?string {
        return $this->prorataHeuresDesignationPlus;
    }

    /**
     * Get the prorata heures option.
     *
     * @return string|null Returns the prorata heures option.
     */
    public function getProrataHeuresOption(): ?string {
        return $this->prorataHeuresOption;
    }

    /**
     * Get the prov cp infos emp.
     *
     * @return bool|null Returns the prov cp infos emp.
     */
    public function getProvCpInfosEmp(): ?bool {
        return $this->provCpInfosEmp;
    }

    /**
     * Get the provisions cp.
     *
     * @return bool|null Returns the provisions cp.
     */
    public function getProvisionsCp(): ?bool {
        return $this->provisionsCp;
    }

    /**
     * Get the qualite nb criteres.
     *
     * @return string|null Returns the qualite nb criteres.
     */
    public function getQualiteNbCriteres(): ?string {
        return $this->qualiteNbCriteres;
    }

    /**
     * Get the qualite nb notes.
     *
     * @return string|null Returns the qualite nb notes.
     */
    public function getQualiteNbNotes(): ?string {
        return $this->qualiteNbNotes;
    }

    /**
     * Get the qualite satisfaction generale.
     *
     * @return bool|null Returns the qualite satisfaction generale.
     */
    public function getQualiteSatisfactionGenerale(): ?bool {
        return $this->qualiteSatisfactionGenerale;
    }

    /**
     * Get the reference mensu contrat proprete.
     *
     * @return bool|null Returns the reference mensu contrat proprete.
     */
    public function getReferenceMensuContratProprete(): ?bool {
        return $this->referenceMensuContratProprete;
    }

    /**
     * Get the remplacant abs jf pas auto.
     *
     * @return bool|null Returns the remplacant abs jf pas auto.
     */
    public function getRemplacantAbsJfPasAuto(): ?bool {
        return $this->remplacantAbsJfPasAuto;
    }

    /**
     * Get the remplacant travaille pas jf.
     *
     * @return bool|null Returns the remplacant travaille pas jf.
     */
    public function getRemplacantTravaillePasJf(): ?bool {
        return $this->remplacantTravaillePasJf;
    }

    /**
     * Get the remplacement hcjf.
     *
     * @return bool|null Returns the remplacement hcjf.
     */
    public function getRemplacementHcjf(): ?bool {
        return $this->remplacementHcjf;
    }

    /**
     * Get the repos compensateur pour travailleur nuit.
     *
     * @return bool|null Returns the repos compensateur pour travailleur nuit.
     */
    public function getReposCompensateurPourTravailleurNuit(): ?bool {
        return $this->reposCompensateurPourTravailleurNuit;
    }

    /**
     * Get the rt fdans fact dev.
     *
     * @return bool|null Returns the rt fdans fact dev.
     */
    public function getRtFdansFactDev(): ?bool {
        return $this->rtFdansFactDev;
    }

    /**
     * Get the saisir absences sur hc.
     *
     * @return bool|null Returns the saisir absences sur hc.
     */
    public function getSaisirAbsencesSurHc(): ?bool {
        return $this->saisirAbsencesSurHc;
    }

    /**
     * Get the saisir code chantier achat.
     *
     * @return bool|null Returns the saisir code chantier achat.
     */
    public function getSaisirCodeChantierAchat(): ?bool {
        return $this->saisirCodeChantierAchat;
    }

    /**
     * Get the saisir num bt.
     *
     * @return bool|null Returns the saisir num bt.
     */
    public function getSaisirNumBt(): ?bool {
        return $this->saisirNumBt;
    }

    /**
     * Get the services paie.
     *
     * @return string|null Returns the services paie.
     */
    public function getServicesPaie(): ?string {
        return $this->servicesPaie;
    }

    /**
     * Get the seuil majo h compl.
     *
     * @return float|null Returns the seuil majo h compl.
     */
    public function getSeuilMajoHCompl(): ?float {
        return $this->seuilMajoHCompl;
    }

    /**
     * Get the taux escompte.
     *
     * @return float|null Returns the taux escompte.
     */
    public function getTauxEscompte(): ?float {
        return $this->tauxEscompte;
    }

    /**
     * Get the taux majo hc33.
     *
     * @return float|null Returns the taux majo hc33.
     */
    public function getTauxMajoHc33(): ?float {
        return $this->tauxMajoHc33;
    }

    /**
     * Get the taux majoration h compl.
     *
     * @return float|null Returns the taux majoration h compl.
     */
    public function getTauxMajorationHCompl(): ?float {
        return $this->tauxMajorationHCompl;
    }

    /**
     * Get the taux tva achat.
     *
     * @return float|null Returns the taux tva achat.
     */
    public function getTauxTvaAchat(): ?float {
        return $this->tauxTvaAchat;
    }

    /**
     * Get the taux tva taxe deee.
     *
     * @return float|null Returns the taux tva taxe deee.
     */
    public function getTauxTvaTaxeDeee(): ?float {
        return $this->tauxTvaTaxeDeee;
    }

    /**
     * Get the taux tva vente.
     *
     * @return float|null Returns the taux tva vente.
     */
    public function getTauxTvaVente(): ?float {
        return $this->tauxTvaVente;
    }

    /**
     * Get the type rempl defaut.
     *
     * @return string|null Returns the type rempl defaut.
     */
    public function getTypeRemplDefaut(): ?string {
        return $this->typeRemplDefaut;
    }

    /**
     * Get the type transfert vente.
     *
     * @return string|null Returns the type transfert vente.
     */
    public function getTypeTransfertVente(): ?string {
        return $this->typeTransfertVente;
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
     * Get the utiliser stock mini.
     *
     * @return bool|null Returns the utiliser stock mini.
     */
    public function getUtiliserStockMini(): ?bool {
        return $this->utiliserStockMini;
    }

    /**
     * Get the visualiser pointage bt valides.
     *
     * @return bool|null Returns the visualiser pointage bt valides.
     */
    public function getVisualiserPointageBtValides(): ?bool {
        return $this->visualiserPointageBtValides;
    }

    /**
     * Set the 35 heures.
     *
     * @param DateTime|null $_35Heures The 35 heures.
     * @return Constantes Returns this Constantes.
     */
    public function set35Heures(?DateTime $_35Heures): Constantes {
        $this->_35Heures = $_35Heures;
        return $this;
    }

    /**
     * Set the alertes paie dans pointage.
     *
     * @param bool|null $alertesPaieDansPointage The alertes paie dans pointage.
     * @return Constantes Returns this Constantes.
     */
    public function setAlertesPaieDansPointage(?bool $alertesPaieDansPointage): Constantes {
        $this->alertesPaieDansPointage = $alertesPaieDansPointage;
        return $this;
    }

    /**
     * Set the alertes paie dans reclam.
     *
     * @param bool|null $alertesPaieDansReclam The alertes paie dans reclam.
     * @return Constantes Returns this Constantes.
     */
    public function setAlertesPaieDansReclam(?bool $alertesPaieDansReclam): Constantes {
        $this->alertesPaieDansReclam = $alertesPaieDansReclam;
        return $this;
    }

    /**
     * Set the analytique nature agence.
     *
     * @param bool|null $analytiqueNatureAgence The analytique nature agence.
     * @return Constantes Returns this Constantes.
     */
    public function setAnalytiqueNatureAgence(?bool $analytiqueNatureAgence): Constantes {
        $this->analytiqueNatureAgence = $analytiqueNatureAgence;
        return $this;
    }

    /**
     * Set the analytique par chantier.
     *
     * @param bool|null $analytiqueParChantier The analytique par chantier.
     * @return Constantes Returns this Constantes.
     */
    public function setAnalytiqueParChantier(?bool $analytiqueParChantier): Constantes {
        $this->analytiqueParChantier = $analytiqueParChantier;
        return $this;
    }

    /**
     * Set the archiver devis.
     *
     * @param bool|null $archiverDevis The archiver devis.
     * @return Constantes Returns this Constantes.
     */
    public function setArchiverDevis(?bool $archiverDevis): Constantes {
        $this->archiverDevis = $archiverDevis;
        return $this;
    }

    /**
     * Set the archiver facture.
     *
     * @param bool|null $archiverFacture The archiver facture.
     * @return Constantes Returns this Constantes.
     */
    public function setArchiverFacture(?bool $archiverFacture): Constantes {
        $this->archiverFacture = $archiverFacture;
        return $this;
    }

    /**
     * Set the arrondi sur pu.
     *
     * @param bool|null $arrondiSurPu The arrondi sur pu.
     * @return Constantes Returns this Constantes.
     */
    public function setArrondiSurPu(?bool $arrondiSurPu): Constantes {
        $this->arrondiSurPu = $arrondiSurPu;
        return $this;
    }

    /**
     * Set the autoriser da sans maj stock.
     *
     * @param bool|null $autoriserDaSansMajStock The autoriser da sans maj stock.
     * @return Constantes Returns this Constantes.
     */
    public function setAutoriserDaSansMajStock(?bool $autoriserDaSansMajStock): Constantes {
        $this->autoriserDaSansMajStock = $autoriserDaSansMajStock;
        return $this;
    }

    /**
     * Set the autoriser dep bud cha cde type.
     *
     * @param bool|null $autoriserDepBudChaCdeType The autoriser dep bud cha cde type.
     * @return Constantes Returns this Constantes.
     */
    public function setAutoriserDepBudChaCdeType(?bool $autoriserDepBudChaCdeType): Constantes {
        $this->autoriserDepBudChaCdeType = $autoriserDepBudChaCdeType;
        return $this;
    }

    /**
     * Set the autoriser mensu tache vide.
     *
     * @param bool|null $autoriserMensuTacheVide The autoriser mensu tache vide.
     * @return Constantes Returns this Constantes.
     */
    public function setAutoriserMensuTacheVide(?bool $autoriserMensuTacheVide): Constantes {
        $this->autoriserMensuTacheVide = $autoriserMensuTacheVide;
        return $this;
    }

    /**
     * Set the bl num fact.
     *
     * @param int|null $blNumFact The bl num fact.
     * @return Constantes Returns this Constantes.
     */
    public function setBlNumFact(?int $blNumFact): Constantes {
        $this->blNumFact = $blNumFact;
        return $this;
    }

    /**
     * Set the bl prefixe.
     *
     * @param string|null $blPrefixe The bl prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setBlPrefixe(?string $blPrefixe): Constantes {
        $this->blPrefixe = $blPrefixe;
        return $this;
    }

    /**
     * Set the br num fact.
     *
     * @param int|null $brNumFact The br num fact.
     * @return Constantes Returns this Constantes.
     */
    public function setBrNumFact(?int $brNumFact): Constantes {
        $this->brNumFact = $brNumFact;
        return $this;
    }

    /**
     * Set the br prefixe.
     *
     * @param string|null $brPrefixe The br prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setBrPrefixe(?string $brPrefixe): Constantes {
        $this->brPrefixe = $brPrefixe;
        return $this;
    }

    /**
     * Set the bs num fact.
     *
     * @param int|null $bsNumFact The bs num fact.
     * @return Constantes Returns this Constantes.
     */
    public function setBsNumFact(?int $bsNumFact): Constantes {
        $this->bsNumFact = $bsNumFact;
        return $this;
    }

    /**
     * Set the bs prefixe.
     *
     * @param string|null $bsPrefixe The bs prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setBsPrefixe(?string $bsPrefixe): Constantes {
        $this->bsPrefixe = $bsPrefixe;
        return $this;
    }

    /**
     * Set the cdd mensu total heures.
     *
     * @param bool|null $cddMensuTotalHeures The cdd mensu total heures.
     * @return Constantes Returns this Constantes.
     */
    public function setCddMensuTotalHeures(?bool $cddMensuTotalHeures): Constantes {
        $this->cddMensuTotalHeures = $cddMensuTotalHeures;
        return $this;
    }

    /**
     * Set the cde client num fact.
     *
     * @param int|null $cdeClientNumFact The cde client num fact.
     * @return Constantes Returns this Constantes.
     */
    public function setCdeClientNumFact(?int $cdeClientNumFact): Constantes {
        $this->cdeClientNumFact = $cdeClientNumFact;
        return $this;
    }

    /**
     * Set the cde client prefixe.
     *
     * @param string|null $cdeClientPrefixe The cde client prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setCdeClientPrefixe(?string $cdeClientPrefixe): Constantes {
        $this->cdeClientPrefixe = $cdeClientPrefixe;
        return $this;
    }

    /**
     * Set the cde frn num fact.
     *
     * @param int|null $cdeFrnNumFact The cde frn num fact.
     * @return Constantes Returns this Constantes.
     */
    public function setCdeFrnNumFact(?int $cdeFrnNumFact): Constantes {
        $this->cdeFrnNumFact = $cdeFrnNumFact;
        return $this;
    }

    /**
     * Set the cde frn prefixe.
     *
     * @param string|null $cdeFrnPrefixe The cde frn prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setCdeFrnPrefixe(?string $cdeFrnPrefixe): Constantes {
        $this->cdeFrnPrefixe = $cdeFrnPrefixe;
        return $this;
    }

    /**
     * Set the centralisation vente.
     *
     * @param bool|null $centralisationVente The centralisation vente.
     * @return Constantes Returns this Constantes.
     */
    public function setCentralisationVente(?bool $centralisationVente): Constantes {
        $this->centralisationVente = $centralisationVente;
        return $this;
    }

    /**
     * Set the charge mensuelle sans tache.
     *
     * @param bool|null $chargeMensuelleSansTache The charge mensuelle sans tache.
     * @return Constantes Returns this Constantes.
     */
    public function setChargeMensuelleSansTache(?bool $chargeMensuelleSansTache): Constantes {
        $this->chargeMensuelleSansTache = $chargeMensuelleSansTache;
        return $this;
    }

    /**
     * Set the chemin doss compta.
     *
     * @param string|null $cheminDossCompta The chemin doss compta.
     * @return Constantes Returns this Constantes.
     */
    public function setCheminDossCompta(?string $cheminDossCompta): Constantes {
        $this->cheminDossCompta = $cheminDossCompta;
        return $this;
    }

    /**
     * Set the cle debloquer periode cloturee.
     *
     * @param string|null $cleDebloquerPeriodeCloturee The cle debloquer periode cloturee.
     * @return Constantes Returns this Constantes.
     */
    public function setCleDebloquerPeriodeCloturee(?string $cleDebloquerPeriodeCloturee): Constantes {
        $this->cleDebloquerPeriodeCloturee = $cleDebloquerPeriodeCloturee;
        return $this;
    }

    /**
     * Set the code abs cp sans solde.
     *
     * @param string|null $codeAbsCpSansSolde The code abs cp sans solde.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeAbsCpSansSolde(?string $codeAbsCpSansSolde): Constantes {
        $this->codeAbsCpSansSolde = $codeAbsCpSansSolde;
        return $this;
    }

    /**
     * Set the code abs def jf.
     *
     * @param string|null $codeAbsDefJf The code abs def jf.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeAbsDefJf(?string $codeAbsDefJf): Constantes {
        $this->codeAbsDefJf = $codeAbsDefJf;
        return $this;
    }

    /**
     * Set the code abs def jf moins3.
     *
     * @param string|null $codeAbsDefJfMoins3 The code abs def jf moins3.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeAbsDefJfMoins3(?string $codeAbsDefJfMoins3): Constantes {
        $this->codeAbsDefJfMoins3 = $codeAbsDefJfMoins3;
        return $this;
    }

    /**
     * Set the code abs fermeture chantier.
     *
     * @param string|null $codeAbsFermetureChantier The code abs fermeture chantier.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeAbsFermetureChantier(?string $codeAbsFermetureChantier): Constantes {
        $this->codeAbsFermetureChantier = $codeAbsFermetureChantier;
        return $this;
    }

    /**
     * Set the code abs pointage defaut.
     *
     * @param string|null $codeAbsPointageDefaut The code abs pointage defaut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeAbsPointageDefaut(?string $codeAbsPointageDefaut): Constantes {
        $this->codeAbsPointageDefaut = $codeAbsPointageDefaut;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): Constantes {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): Constantes {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code depot par defaut.
     *
     * @param string|null $codeDepotParDefaut The code depot par defaut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeDepotParDefaut(?string $codeDepotParDefaut): Constantes {
        $this->codeDepotParDefaut = $codeDepotParDefaut;
        return $this;
    }

    /**
     * Set the code ics.
     *
     * @param string|null $codeIcs The code ics.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeIcs(?string $codeIcs): Constantes {
        $this->codeIcs = $codeIcs;
        return $this;
    }

    /**
     * Set the code ja.
     *
     * @param string|null $codeJa The code ja.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeJa(?string $codeJa): Constantes {
        $this->codeJa = $codeJa;
        return $this;
    }

    /**
     * Set the code jv negoce.
     *
     * @param string|null $codeJvNegoce The code jv negoce.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeJvNegoce(?string $codeJvNegoce): Constantes {
        $this->codeJvNegoce = $codeJvNegoce;
        return $this;
    }

    /**
     * Set the code jv prestation.
     *
     * @param string|null $codeJvPrestation The code jv prestation.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeJvPrestation(?string $codeJvPrestation): Constantes {
        $this->codeJvPrestation = $codeJvPrestation;
        return $this;
    }

    /**
     * Set the code liv par defaut.
     *
     * @param string|null $codeLivParDefaut The code liv par defaut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeLivParDefaut(?string $codeLivParDefaut): Constantes {
        $this->codeLivParDefaut = $codeLivParDefaut;
        return $this;
    }

    /**
     * Set the code prime chantier1.
     *
     * @param string|null $codePrimeChantier1 The code prime chantier1.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeChantier1(?string $codePrimeChantier1): Constantes {
        $this->codePrimeChantier1 = $codePrimeChantier1;
        return $this;
    }

    /**
     * Set the code prime chantier2.
     *
     * @param string|null $codePrimeChantier2 The code prime chantier2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeChantier2(?string $codePrimeChantier2): Constantes {
        $this->codePrimeChantier2 = $codePrimeChantier2;
        return $this;
    }

    /**
     * Set the code prime chantier3.
     *
     * @param string|null $codePrimeChantier3 The code prime chantier3.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeChantier3(?string $codePrimeChantier3): Constantes {
        $this->codePrimeChantier3 = $codePrimeChantier3;
        return $this;
    }

    /**
     * Set the code prime dimanche1.
     *
     * @param string|null $codePrimeDimanche1 The code prime dimanche1.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeDimanche1(?string $codePrimeDimanche1): Constantes {
        $this->codePrimeDimanche1 = $codePrimeDimanche1;
        return $this;
    }

    /**
     * Set the code prime dimanche1 type2.
     *
     * @param string|null $codePrimeDimanche1Type2 The code prime dimanche1 type2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeDimanche1Type2(?string $codePrimeDimanche1Type2): Constantes {
        $this->codePrimeDimanche1Type2 = $codePrimeDimanche1Type2;
        return $this;
    }

    /**
     * Set the code prime dimanche2.
     *
     * @param string|null $codePrimeDimanche2 The code prime dimanche2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeDimanche2(?string $codePrimeDimanche2): Constantes {
        $this->codePrimeDimanche2 = $codePrimeDimanche2;
        return $this;
    }

    /**
     * Set the code prime forfait.
     *
     * @param string|null $codePrimeForfait The code prime forfait.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeForfait(?string $codePrimeForfait): Constantes {
        $this->codePrimeForfait = $codePrimeForfait;
        return $this;
    }

    /**
     * Set the code prime h compl.
     *
     * @param string|null $codePrimeHCompl The code prime h compl.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeHCompl(?string $codePrimeHCompl): Constantes {
        $this->codePrimeHCompl = $codePrimeHCompl;
        return $this;
    }

    /**
     * Set the code prime h compl2.
     *
     * @param string|null $codePrimeHCompl2 The code prime h compl2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeHCompl2(?string $codePrimeHCompl2): Constantes {
        $this->codePrimeHCompl2 = $codePrimeHCompl2;
        return $this;
    }

    /**
     * Set the code prime jf1.
     *
     * @param string|null $codePrimeJf1 The code prime jf1.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeJf1(?string $codePrimeJf1): Constantes {
        $this->codePrimeJf1 = $codePrimeJf1;
        return $this;
    }

    /**
     * Set the code prime jf1 type2.
     *
     * @param string|null $codePrimeJf1Type2 The code prime jf1 type2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeJf1Type2(?string $codePrimeJf1Type2): Constantes {
        $this->codePrimeJf1Type2 = $codePrimeJf1Type2;
        return $this;
    }

    /**
     * Set the code prime jf2.
     *
     * @param string|null $codePrimeJf2 The code prime jf2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeJf2(?string $codePrimeJf2): Constantes {
        $this->codePrimeJf2 = $codePrimeJf2;
        return $this;
    }

    /**
     * Set the code prime jf mai.
     *
     * @param string|null $codePrimeJfMai The code prime jf mai.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeJfMai(?string $codePrimeJfMai): Constantes {
        $this->codePrimeJfMai = $codePrimeJfMai;
        return $this;
    }

    /**
     * Set the code prime nuit1.
     *
     * @param string|null $codePrimeNuit1 The code prime nuit1.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeNuit1(?string $codePrimeNuit1): Constantes {
        $this->codePrimeNuit1 = $codePrimeNuit1;
        return $this;
    }

    /**
     * Set the code prime nuit1 type2.
     *
     * @param string|null $codePrimeNuit1Type2 The code prime nuit1 type2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeNuit1Type2(?string $codePrimeNuit1Type2): Constantes {
        $this->codePrimeNuit1Type2 = $codePrimeNuit1Type2;
        return $this;
    }

    /**
     * Set the code prime nuit2.
     *
     * @param string|null $codePrimeNuit2 The code prime nuit2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeNuit2(?string $codePrimeNuit2): Constantes {
        $this->codePrimeNuit2 = $codePrimeNuit2;
        return $this;
    }

    /**
     * Set the code prime paniers.
     *
     * @param string|null $codePrimePaniers The code prime paniers.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimePaniers(?string $codePrimePaniers): Constantes {
        $this->codePrimePaniers = $codePrimePaniers;
        return $this;
    }

    /**
     * Set the code prime rs.
     *
     * @param string|null $codePrimeRs The code prime rs.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeRs(?string $codePrimeRs): Constantes {
        $this->codePrimeRs = $codePrimeRs;
        return $this;
    }

    /**
     * Set the code prime tp.
     *
     * @param string|null $codePrimeTp The code prime tp.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeTp(?string $codePrimeTp): Constantes {
        $this->codePrimeTp = $codePrimeTp;
        return $this;
    }

    /**
     * Set the code reg jv neg debut.
     *
     * @param string|null $codeRegJvNegDebut The code reg jv neg debut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeRegJvNegDebut(?string $codeRegJvNegDebut): Constantes {
        $this->codeRegJvNegDebut = $codeRegJvNegDebut;
        return $this;
    }

    /**
     * Set the code reg jv neg fin.
     *
     * @param string|null $codeRegJvNegFin The code reg jv neg fin.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeRegJvNegFin(?string $codeRegJvNegFin): Constantes {
        $this->codeRegJvNegFin = $codeRegJvNegFin;
        return $this;
    }

    /**
     * Set the code reg jv prest debut.
     *
     * @param string|null $codeRegJvPrestDebut The code reg jv prest debut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeRegJvPrestDebut(?string $codeRegJvPrestDebut): Constantes {
        $this->codeRegJvPrestDebut = $codeRegJvPrestDebut;
        return $this;
    }

    /**
     * Set the code reg jv prest fin.
     *
     * @param string|null $codeRegJvPrestFin The code reg jv prest fin.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeRegJvPrestFin(?string $codeRegJvPrestFin): Constantes {
        $this->codeRegJvPrestFin = $codeRegJvPrestFin;
        return $this;
    }

    /**
     * Set the code tache defaut.
     *
     * @param string|null $codeTacheDefaut The code tache defaut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeTacheDefaut(?string $codeTacheDefaut): Constantes {
        $this->codeTacheDefaut = $codeTacheDefaut;
        return $this;
    }

    /**
     * Set the collectif def.
     *
     * @param string|null $collectifDef The collectif def.
     * @return Constantes Returns this Constantes.
     */
    public function setCollectifDef(?string $collectifDef): Constantes {
        $this->collectifDef = $collectifDef;
        return $this;
    }

    /**
     * Set the collectif def fournisseur.
     *
     * @param string|null $collectifDefFournisseur The collectif def fournisseur.
     * @return Constantes Returns this Constantes.
     */
    public function setCollectifDefFournisseur(?string $collectifDefFournisseur): Constantes {
        $this->collectifDefFournisseur = $collectifDefFournisseur;
        return $this;
    }

    /**
     * Set the commentaire journee solidarite.
     *
     * @param string|null $commentaireJourneeSolidarite The commentaire journee solidarite.
     * @return Constantes Returns this Constantes.
     */
    public function setCommentaireJourneeSolidarite(?string $commentaireJourneeSolidarite): Constantes {
        $this->commentaireJourneeSolidarite = $commentaireJourneeSolidarite;
        return $this;
    }

    /**
     * Set the compte collectif achat.
     *
     * @param string|null $compteCollectifAchat The compte collectif achat.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteCollectifAchat(?string $compteCollectifAchat): Constantes {
        $this->compteCollectifAchat = $compteCollectifAchat;
        return $this;
    }

    /**
     * Set the compte collectif vente.
     *
     * @param string|null $compteCollectifVente The compte collectif vente.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteCollectifVente(?string $compteCollectifVente): Constantes {
        $this->compteCollectifVente = $compteCollectifVente;
        return $this;
    }

    /**
     * Set the compte escompte ca exonere.
     *
     * @param string|null $compteEscompteCaExonere The compte escompte ca exonere.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteEscompteCaExonere(?string $compteEscompteCaExonere): Constantes {
        $this->compteEscompteCaExonere = $compteEscompteCaExonere;
        return $this;
    }

    /**
     * Set the compte escompte soumis tva.
     *
     * @param string|null $compteEscompteSoumisTva The compte escompte soumis tva.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteEscompteSoumisTva(?string $compteEscompteSoumisTva): Constantes {
        $this->compteEscompteSoumisTva = $compteEscompteSoumisTva;
        return $this;
    }

    /**
     * Set the compte tva achat.
     *
     * @param string|null $compteTvaAchat The compte tva achat.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteTvaAchat(?string $compteTvaAchat): Constantes {
        $this->compteTvaAchat = $compteTvaAchat;
        return $this;
    }

    /**
     * Set the compte tva taxe deee.
     *
     * @param string|null $compteTvaTaxeDeee The compte tva taxe deee.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteTvaTaxeDeee(?string $compteTvaTaxeDeee): Constantes {
        $this->compteTvaTaxeDeee = $compteTvaTaxeDeee;
        return $this;
    }

    /**
     * Set the compte tva vente.
     *
     * @param string|null $compteTvaVente The compte tva vente.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteTvaVente(?string $compteTvaVente): Constantes {
        $this->compteTvaVente = $compteTvaVente;
        return $this;
    }

    /**
     * Set the compte ventil taxe deee.
     *
     * @param string|null $compteVentilTaxeDeee The compte ventil taxe deee.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteVentilTaxeDeee(?string $compteVentilTaxeDeee): Constantes {
        $this->compteVentilTaxeDeee = $compteVentilTaxeDeee;
        return $this;
    }

    /**
     * Set the compter samedi tf cp paie.
     *
     * @param bool|null $compterSamediTfCpPaie The compter samedi tf cp paie.
     * @return Constantes Returns this Constantes.
     */
    public function setCompterSamediTfCpPaie(?bool $compterSamediTfCpPaie): Constantes {
        $this->compterSamediTfCpPaie = $compterSamediTfCpPaie;
        return $this;
    }

    /**
     * Set the controler cde frn.
     *
     * @param bool|null $controlerCdeFrn The controler cde frn.
     * @return Constantes Returns this Constantes.
     */
    public function setControlerCdeFrn(?bool $controlerCdeFrn): Constantes {
        $this->controlerCdeFrn = $controlerCdeFrn;
        return $this;
    }

    /**
     * Set the controler charges mensuelles.
     *
     * @param bool|null $controlerChargesMensuelles The controler charges mensuelles.
     * @return Constantes Returns this Constantes.
     */
    public function setControlerChargesMensuelles(?bool $controlerChargesMensuelles): Constantes {
        $this->controlerChargesMensuelles = $controlerChargesMensuelles;
        return $this;
    }

    /**
     * Set the controler code reg.
     *
     * @param bool|null $controlerCodeReg The controler code reg.
     * @return Constantes Returns this Constantes.
     */
    public function setControlerCodeReg(?bool $controlerCodeReg): Constantes {
        $this->controlerCodeReg = $controlerCodeReg;
        return $this;
    }

    /**
     * Set the controler dep hc max.
     *
     * @param bool|null $controlerDepHcMax The controler dep hc max.
     * @return Constantes Returns this Constantes.
     */
    public function setControlerDepHcMax(?bool $controlerDepHcMax): Constantes {
        $this->controlerDepHcMax = $controlerDepHcMax;
        return $this;
    }

    /**
     * Set the controler dep hc plus mois.
     *
     * @param bool|null $controlerDepHcPlusMois The controler dep hc plus mois.
     * @return Constantes Returns this Constantes.
     */
    public function setControlerDepHcPlusMois(?bool $controlerDepHcPlusMois): Constantes {
        $this->controlerDepHcPlusMois = $controlerDepHcPlusMois;
        return $this;
    }

    /**
     * Set the cp sans provisions.
     *
     * @param bool|null $cpSansProvisions The cp sans provisions.
     * @return Constantes Returns this Constantes.
     */
    public function setCpSansProvisions(?bool $cpSansProvisions): Constantes {
        $this->cpSansProvisions = $cpSansProvisions;
        return $this;
    }

    /**
     * Set the creer alerte paie def en paie.
     *
     * @param bool|null $creerAlertePaieDefEnPaie The creer alerte paie def en paie.
     * @return Constantes Returns this Constantes.
     */
    public function setCreerAlertePaieDefEnPaie(?bool $creerAlertePaieDefEnPaie): Constantes {
        $this->creerAlertePaieDefEnPaie = $creerAlertePaieDefEnPaie;
        return $this;
    }

    /**
     * Set the ctrl auto cp.
     *
     * @param bool|null $ctrlAutoCp The ctrl auto cp.
     * @return Constantes Returns this Constantes.
     */
    public function setCtrlAutoCp(?bool $ctrlAutoCp): Constantes {
        $this->ctrlAutoCp = $ctrlAutoCp;
        return $this;
    }

    /**
     * Set the ctrl auto cp avec anticipation.
     *
     * @param bool|null $ctrlAutoCpAvecAnticipation The ctrl auto cp avec anticipation.
     * @return Constantes Returns this Constantes.
     */
    public function setCtrlAutoCpAvecAnticipation(?bool $ctrlAutoCpAvecAnticipation): Constantes {
        $this->ctrlAutoCpAvecAnticipation = $ctrlAutoCpAvecAnticipation;
        return $this;
    }

    /**
     * Set the date appli gestion heures en plus.
     *
     * @param DateTime|null $dateAppliGestionHeuresEnPlus The date appli gestion heures en plus.
     * @return Constantes Returns this Constantes.
     */
    public function setDateAppliGestionHeuresEnPlus(?DateTime $dateAppliGestionHeuresEnPlus): Constantes {
        $this->dateAppliGestionHeuresEnPlus = $dateAppliGestionHeuresEnPlus;
        return $this;
    }

    /**
     * Set the date journee solidarite.
     *
     * @param DateTime|null $dateJourneeSolidarite The date journee solidarite.
     * @return Constantes Returns this Constantes.
     */
    public function setDateJourneeSolidarite(?DateTime $dateJourneeSolidarite): Constantes {
        $this->dateJourneeSolidarite = $dateJourneeSolidarite;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return Constantes Returns this Constantes.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): Constantes {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the dec mois prep fact.
     *
     * @param int|null $decMoisPrepFact The dec mois prep fact.
     * @return Constantes Returns this Constantes.
     */
    public function setDecMoisPrepFact(?int $decMoisPrepFact): Constantes {
        $this->decMoisPrepFact = $decMoisPrepFact;
        return $this;
    }

    /**
     * Set the dernier compte client.
     *
     * @param string|null $dernierCompteClient The dernier compte client.
     * @return Constantes Returns this Constantes.
     */
    public function setDernierCompteClient(?string $dernierCompteClient): Constantes {
        $this->dernierCompteClient = $dernierCompteClient;
        return $this;
    }

    /**
     * Set the dernier compte frn.
     *
     * @param string|null $dernierCompteFrn The dernier compte frn.
     * @return Constantes Returns this Constantes.
     */
    public function setDernierCompteFrn(?string $dernierCompteFrn): Constantes {
        $this->dernierCompteFrn = $dernierCompteFrn;
        return $this;
    }

    /**
     * Set the discr.
     *
     * @param string|null $discr The discr.
     * @return Constantes Returns this Constantes.
     */
    public function setDiscr(?string $discr): Constantes {
        $this->discr = $discr;
        return $this;
    }

    /**
     * Set the doss compta.
     *
     * @param string|null $dossCompta The doss compta.
     * @return Constantes Returns this Constantes.
     */
    public function setDossCompta(?string $dossCompta): Constantes {
        $this->dossCompta = $dossCompta;
        return $this;
    }

    /**
     * Set the doss paie.
     *
     * @param string|null $dossPaie The doss paie.
     * @return Constantes Returns this Constantes.
     */
    public function setDossPaie(?string $dossPaie): Constantes {
        $this->dossPaie = $dossPaie;
        return $this;
    }

    /**
     * Set the es code abs entree.
     *
     * @param string|null $esCodeAbsEntree The es code abs entree.
     * @return Constantes Returns this Constantes.
     */
    public function setEsCodeAbsEntree(?string $esCodeAbsEntree): Constantes {
        $this->esCodeAbsEntree = $esCodeAbsEntree;
        return $this;
    }

    /**
     * Set the es code abs sortie.
     *
     * @param string|null $esCodeAbsSortie The es code abs sortie.
     * @return Constantes Returns this Constantes.
     */
    public function setEsCodeAbsSortie(?string $esCodeAbsSortie): Constantes {
        $this->esCodeAbsSortie = $esCodeAbsSortie;
        return $this;
    }

    /**
     * Set the es heures reelles.
     *
     * @param bool|null $esHeuresReelles The es heures reelles.
     * @return Constantes Returns this Constantes.
     */
    public function setEsHeuresReelles(?bool $esHeuresReelles): Constantes {
        $this->esHeuresReelles = $esHeuresReelles;
        return $this;
    }

    /**
     * Set the etablissements paie.
     *
     * @param string|null $etablissementsPaie The etablissements paie.
     * @return Constantes Returns this Constantes.
     */
    public function setEtablissementsPaie(?string $etablissementsPaie): Constantes {
        $this->etablissementsPaie = $etablissementsPaie;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return Constantes Returns this Constantes.
     */
    public function setEtat(?string $etat): Constantes {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the euro.
     *
     * @param bool|null $euro The euro.
     * @return Constantes Returns this Constantes.
     */
    public function setEuro(?bool $euro): Constantes {
        $this->euro = $euro;
        return $this;
    }

    /**
     * Set the facturation prorata heures.
     *
     * @param bool|null $facturationProrataHeures The facturation prorata heures.
     * @return Constantes Returns this Constantes.
     */
    public function setFacturationProrataHeures(?bool $facturationProrataHeures): Constantes {
        $this->facturationProrataHeures = $facturationProrataHeures;
        return $this;
    }

    /**
     * Set the folio ja.
     *
     * @param string|null $folioJa The folio ja.
     * @return Constantes Returns this Constantes.
     */
    public function setFolioJa(?string $folioJa): Constantes {
        $this->folioJa = $folioJa;
        return $this;
    }

    /**
     * Set the folio jv negoce.
     *
     * @param string|null $folioJvNegoce The folio jv negoce.
     * @return Constantes Returns this Constantes.
     */
    public function setFolioJvNegoce(?string $folioJvNegoce): Constantes {
        $this->folioJvNegoce = $folioJvNegoce;
        return $this;
    }

    /**
     * Set the folio jv prestation.
     *
     * @param string|null $folioJvPrestation The folio jv prestation.
     * @return Constantes Returns this Constantes.
     */
    public function setFolioJvPrestation(?string $folioJvPrestation): Constantes {
        $this->folioJvPrestation = $folioJvPrestation;
        return $this;
    }

    /**
     * Set the gerer num cpt chantier.
     *
     * @param bool|null $gererNumCptChantier The gerer num cpt chantier.
     * @return Constantes Returns this Constantes.
     */
    public function setGererNumCptChantier(?bool $gererNumCptChantier): Constantes {
        $this->gererNumCptChantier = $gererNumCptChantier;
        return $this;
    }

    /**
     * Set the gestion h compl.
     *
     * @param bool|null $gestionHCompl The gestion h compl.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionHCompl(?bool $gestionHCompl): Constantes {
        $this->gestionHCompl = $gestionHCompl;
        return $this;
    }

    /**
     * Set the gestion h sup mens.
     *
     * @param bool|null $gestionHSupMens The gestion h sup mens.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionHSupMens(?bool $gestionHSupMens): Constantes {
        $this->gestionHSupMens = $gestionHSupMens;
        return $this;
    }

    /**
     * Set the gestion h sup mensuelle.
     *
     * @param bool|null $gestionHSupMensuelle The gestion h sup mensuelle.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionHSupMensuelle(?bool $gestionHSupMensuelle): Constantes {
        $this->gestionHSupMensuelle = $gestionHSupMensuelle;
        return $this;
    }

    /**
     * Set the gestion maj dim.
     *
     * @param string|null $gestionMajDim The gestion maj dim.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionMajDim(?string $gestionMajDim): Constantes {
        $this->gestionMajDim = $gestionMajDim;
        return $this;
    }

    /**
     * Set the gestion maj jf.
     *
     * @param string|null $gestionMajJf The gestion maj jf.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionMajJf(?string $gestionMajJf): Constantes {
        $this->gestionMajJf = $gestionMajJf;
        return $this;
    }

    /**
     * Set the gestion maj nuit.
     *
     * @param string|null $gestionMajNuit The gestion maj nuit.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionMajNuit(?string $gestionMajNuit): Constantes {
        $this->gestionMajNuit = $gestionMajNuit;
        return $this;
    }

    /**
     * Set the gestion multi depot.
     *
     * @param bool|null $gestionMultiDepot The gestion multi depot.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionMultiDepot(?bool $gestionMultiDepot): Constantes {
        $this->gestionMultiDepot = $gestionMultiDepot;
        return $this;
    }

    /**
     * Set the gestion quotas.
     *
     * @param bool|null $gestionQuotas The gestion quotas.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionQuotas(?bool $gestionQuotas): Constantes {
        $this->gestionQuotas = $gestionQuotas;
        return $this;
    }

    /**
     * Set the gestion specif jf.
     *
     * @param bool|null $gestionSpecifJf The gestion specif jf.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionSpecifJf(?bool $gestionSpecifJf): Constantes {
        $this->gestionSpecifJf = $gestionSpecifJf;
        return $this;
    }

    /**
     * Set the gestion specif majo jf.
     *
     * @param bool|null $gestionSpecifMajoJf The gestion specif majo jf.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionSpecifMajoJf(?bool $gestionSpecifMajoJf): Constantes {
        $this->gestionSpecifMajoJf = $gestionSpecifMajoJf;
        return $this;
    }

    /**
     * Set the h deb nuit.
     *
     * @param DateTime|null $hDebNuit The h deb nuit.
     * @return Constantes Returns this Constantes.
     */
    public function setHDebNuit(?DateTime $hDebNuit): Constantes {
        $this->hDebNuit = $hDebNuit;
        return $this;
    }

    /**
     * Set the h deb nuit trav nuit.
     *
     * @param DateTime|null $hDebNuitTravNuit The h deb nuit trav nuit.
     * @return Constantes Returns this Constantes.
     */
    public function setHDebNuitTravNuit(?DateTime $hDebNuitTravNuit): Constantes {
        $this->hDebNuitTravNuit = $hDebNuitTravNuit;
        return $this;
    }

    /**
     * Set the h fin nuit.
     *
     * @param DateTime|null $hFinNuit The h fin nuit.
     * @return Constantes Returns this Constantes.
     */
    public function setHFinNuit(?DateTime $hFinNuit): Constantes {
        $this->hFinNuit = $hFinNuit;
        return $this;
    }

    /**
     * Set the h fin nuit trav nuit.
     *
     * @param DateTime|null $hFinNuitTravNuit The h fin nuit trav nuit.
     * @return Constantes Returns this Constantes.
     */
    public function setHFinNuitTravNuit(?DateTime $hFinNuitTravNuit): Constantes {
        $this->hFinNuitTravNuit = $hFinNuitTravNuit;
        return $this;
    }

    /**
     * Set the heures absence mensualise.
     *
     * @param bool|null $heuresAbsenceMensualise The heures absence mensualise.
     * @return Constantes Returns this Constantes.
     */
    public function setHeuresAbsenceMensualise(?bool $heuresAbsenceMensualise): Constantes {
        $this->heuresAbsenceMensualise = $heuresAbsenceMensualise;
        return $this;
    }

    /**
     * Set the heures rempl egales mens titulaire.
     *
     * @param bool|null $heuresRemplEgalesMensTitulaire The heures rempl egales mens titulaire.
     * @return Constantes Returns this Constantes.
     */
    public function setHeuresRemplEgalesMensTitulaire(?bool $heuresRemplEgalesMensTitulaire): Constantes {
        $this->heuresRemplEgalesMensTitulaire = $heuresRemplEgalesMensTitulaire;
        return $this;
    }

    /**
     * Set the increment compte auto.
     *
     * @param int|null $incrementCompteAuto The increment compte auto.
     * @return Constantes Returns this Constantes.
     */
    public function setIncrementCompteAuto(?int $incrementCompteAuto): Constantes {
        $this->incrementCompteAuto = $incrementCompteAuto;
        return $this;
    }

    /**
     * Set the liaison compta win.
     *
     * @param bool|null $liaisonComptaWin The liaison compta win.
     * @return Constantes Returns this Constantes.
     */
    public function setLiaisonComptaWin(?bool $liaisonComptaWin): Constantes {
        $this->liaisonComptaWin = $liaisonComptaWin;
        return $this;
    }

    /**
     * Set the lib critere bool1.
     *
     * @param string|null $libCritereBool1 The lib critere bool1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereBool1(?string $libCritereBool1): Constantes {
        $this->libCritereBool1 = $libCritereBool1;
        return $this;
    }

    /**
     * Set the lib critere bool2.
     *
     * @param string|null $libCritereBool2 The lib critere bool2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereBool2(?string $libCritereBool2): Constantes {
        $this->libCritereBool2 = $libCritereBool2;
        return $this;
    }

    /**
     * Set the lib critere byte1.
     *
     * @param string|null $libCritereByte1 The lib critere byte1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereByte1(?string $libCritereByte1): Constantes {
        $this->libCritereByte1 = $libCritereByte1;
        return $this;
    }

    /**
     * Set the lib critere num1.
     *
     * @param string|null $libCritereNum1 The lib critere num1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereNum1(?string $libCritereNum1): Constantes {
        $this->libCritereNum1 = $libCritereNum1;
        return $this;
    }

    /**
     * Set the lib critere num2.
     *
     * @param string|null $libCritereNum2 The lib critere num2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereNum2(?string $libCritereNum2): Constantes {
        $this->libCritereNum2 = $libCritereNum2;
        return $this;
    }

    /**
     * Set the lib critere num3.
     *
     * @param string|null $libCritereNum3 The lib critere num3.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereNum3(?string $libCritereNum3): Constantes {
        $this->libCritereNum3 = $libCritereNum3;
        return $this;
    }

    /**
     * Set the lib critere num4.
     *
     * @param string|null $libCritereNum4 The lib critere num4.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereNum4(?string $libCritereNum4): Constantes {
        $this->libCritereNum4 = $libCritereNum4;
        return $this;
    }

    /**
     * Set the lib critere num5.
     *
     * @param string|null $libCritereNum5 The lib critere num5.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereNum5(?string $libCritereNum5): Constantes {
        $this->libCritereNum5 = $libCritereNum5;
        return $this;
    }

    /**
     * Set the lib critere tab1.
     *
     * @param string|null $libCritereTab1 The lib critere tab1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTab1(?string $libCritereTab1): Constantes {
        $this->libCritereTab1 = $libCritereTab1;
        return $this;
    }

    /**
     * Set the lib critere tab2.
     *
     * @param string|null $libCritereTab2 The lib critere tab2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTab2(?string $libCritereTab2): Constantes {
        $this->libCritereTab2 = $libCritereTab2;
        return $this;
    }

    /**
     * Set the lib critere tab3.
     *
     * @param string|null $libCritereTab3 The lib critere tab3.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTab3(?string $libCritereTab3): Constantes {
        $this->libCritereTab3 = $libCritereTab3;
        return $this;
    }

    /**
     * Set the lib critere tab4.
     *
     * @param string|null $libCritereTab4 The lib critere tab4.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTab4(?string $libCritereTab4): Constantes {
        $this->libCritereTab4 = $libCritereTab4;
        return $this;
    }

    /**
     * Set the lib critere tab5.
     *
     * @param string|null $libCritereTab5 The lib critere tab5.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTab5(?string $libCritereTab5): Constantes {
        $this->libCritereTab5 = $libCritereTab5;
        return $this;
    }

    /**
     * Set the lib critere txt1.
     *
     * @param string|null $libCritereTxt1 The lib critere txt1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTxt1(?string $libCritereTxt1): Constantes {
        $this->libCritereTxt1 = $libCritereTxt1;
        return $this;
    }

    /**
     * Set the lib critere txt2.
     *
     * @param string|null $libCritereTxt2 The lib critere txt2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTxt2(?string $libCritereTxt2): Constantes {
        $this->libCritereTxt2 = $libCritereTxt2;
        return $this;
    }

    /**
     * Set the lib critere txt3.
     *
     * @param string|null $libCritereTxt3 The lib critere txt3.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTxt3(?string $libCritereTxt3): Constantes {
        $this->libCritereTxt3 = $libCritereTxt3;
        return $this;
    }

    /**
     * Set the lib critere txt4.
     *
     * @param string|null $libCritereTxt4 The lib critere txt4.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTxt4(?string $libCritereTxt4): Constantes {
        $this->libCritereTxt4 = $libCritereTxt4;
        return $this;
    }

    /**
     * Set the lib critere txt5.
     *
     * @param string|null $libCritereTxt5 The lib critere txt5.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTxt5(?string $libCritereTxt5): Constantes {
        $this->libCritereTxt5 = $libCritereTxt5;
        return $this;
    }

    /**
     * Set the libelle auto avoir.
     *
     * @param string|null $libelleAutoAvoir The libelle auto avoir.
     * @return Constantes Returns this Constantes.
     */
    public function setLibelleAutoAvoir(?string $libelleAutoAvoir): Constantes {
        $this->libelleAutoAvoir = $libelleAutoAvoir;
        return $this;
    }

    /**
     * Set the libelle auto facture.
     *
     * @param string|null $libelleAutoFacture The libelle auto facture.
     * @return Constantes Returns this Constantes.
     */
    public function setLibelleAutoFacture(?string $libelleAutoFacture): Constantes {
        $this->libelleAutoFacture = $libelleAutoFacture;
        return $this;
    }

    /**
     * Set the libelle heures surcroit.
     *
     * @param string|null $libelleHeuresSurcroit The libelle heures surcroit.
     * @return Constantes Returns this Constantes.
     */
    public function setLibelleHeuresSurcroit(?string $libelleHeuresSurcroit): Constantes {
        $this->libelleHeuresSurcroit = $libelleHeuresSurcroit;
        return $this;
    }

    /**
     * Set the libelle transfert.
     *
     * @param string|null $libelleTransfert The libelle transfert.
     * @return Constantes Returns this Constantes.
     */
    public function setLibelleTransfert(?string $libelleTransfert): Constantes {
        $this->libelleTransfert = $libelleTransfert;
        return $this;
    }

    /**
     * Set the libelle transfert achat.
     *
     * @param string|null $libelleTransfertAchat The libelle transfert achat.
     * @return Constantes Returns this Constantes.
     */
    public function setLibelleTransfertAchat(?string $libelleTransfertAchat): Constantes {
        $this->libelleTransfertAchat = $libelleTransfertAchat;
        return $this;
    }

    /**
     * Set the liv cde frn depot unique.
     *
     * @param bool|null $livCdeFrnDepotUnique The liv cde frn depot unique.
     * @return Constantes Returns this Constantes.
     */
    public function setLivCdeFrnDepotUnique(?bool $livCdeFrnDepotUnique): Constantes {
        $this->livCdeFrnDepotUnique = $livCdeFrnDepotUnique;
        return $this;
    }

    /**
     * Set the mail attestations.
     *
     * @param string|null $mailAttestations The mail attestations.
     * @return Constantes Returns this Constantes.
     */
    public function setMailAttestations(?string $mailAttestations): Constantes {
        $this->mailAttestations = $mailAttestations;
        return $this;
    }

    /**
     * Set the mail factures.
     *
     * @param string|null $mailFactures The mail factures.
     * @return Constantes Returns this Constantes.
     */
    public function setMailFactures(?string $mailFactures): Constantes {
        $this->mailFactures = $mailFactures;
        return $this;
    }

    /**
     * Set the maj dernier passage bt.
     *
     * @param bool|null $majDernierPassageBt The maj dernier passage bt.
     * @return Constantes Returns this Constantes.
     */
    public function setMajDernierPassageBt(?bool $majDernierPassageBt): Constantes {
        $this->majDernierPassageBt = $majDernierPassageBt;
        return $this;
    }

    /**
     * Set the maj dernier prix achat.
     *
     * @param bool|null $majDernierPrixAchat The maj dernier prix achat.
     * @return Constantes Returns this Constantes.
     */
    public function setMajDernierPrixAchat(?bool $majDernierPrixAchat): Constantes {
        $this->majDernierPrixAchat = $majDernierPrixAchat;
        return $this;
    }

    /**
     * Set the maj pamp.
     *
     * @param bool|null $majPamp The maj pamp.
     * @return Constantes Returns this Constantes.
     */
    public function setMajPamp(?bool $majPamp): Constantes {
        $this->majPamp = $majPamp;
        return $this;
    }

    /**
     * Set the majoration cascade.
     *
     * @param bool|null $majorationCascade The majoration cascade.
     * @return Constantes Returns this Constantes.
     */
    public function setMajorationCascade(?bool $majorationCascade): Constantes {
        $this->majorationCascade = $majorationCascade;
        return $this;
    }

    /**
     * Set the majoration h plus.
     *
     * @param string|null $majorationHPlus The majoration h plus.
     * @return Constantes Returns this Constantes.
     */
    public function setMajorationHPlus(?string $majorationHPlus): Constantes {
        $this->majorationHPlus = $majorationHPlus;
        return $this;
    }

    /**
     * Set the marge niveau edition.
     *
     * @param string|null $margeNiveauEdition The marge niveau edition.
     * @return Constantes Returns this Constantes.
     */
    public function setMargeNiveauEdition(?string $margeNiveauEdition): Constantes {
        $this->margeNiveauEdition = $margeNiveauEdition;
        return $this;
    }

    /**
     * Set the marge pourcent charge.
     *
     * @param float|null $margePourcentCharge The marge pourcent charge.
     * @return Constantes Returns this Constantes.
     */
    public function setMargePourcentCharge(?float $margePourcentCharge): Constantes {
        $this->margePourcentCharge = $margePourcentCharge;
        return $this;
    }

    /**
     * Set the marge sal insp prorata ca.
     *
     * @param bool|null $margeSalInspProrataCa The marge sal insp prorata ca.
     * @return Constantes Returns this Constantes.
     */
    public function setMargeSalInspProrataCa(?bool $margeSalInspProrataCa): Constantes {
        $this->margeSalInspProrataCa = $margeSalInspProrataCa;
        return $this;
    }

    /**
     * Set the mensualisation tache.
     *
     * @param bool|null $mensualisationTache The mensualisation tache.
     * @return Constantes Returns this Constantes.
     */
    public function setMensualisationTache(?bool $mensualisationTache): Constantes {
        $this->mensualisationTache = $mensualisationTache;
        return $this;
    }

    /**
     * Set the mode calcul proposition cde.
     *
     * @param string|null $modeCalculPropositionCde The mode calcul proposition cde.
     * @return Constantes Returns this Constantes.
     */
    public function setModeCalculPropositionCde(?string $modeCalculPropositionCde): Constantes {
        $this->modeCalculPropositionCde = $modeCalculPropositionCde;
        return $this;
    }

    /**
     * Set the modele devis.
     *
     * @param string|null $modeleDevis The modele devis.
     * @return Constantes Returns this Constantes.
     */
    public function setModeleDevis(?string $modeleDevis): Constantes {
        $this->modeleDevis = $modeleDevis;
        return $this;
    }

    /**
     * Set the modele devis tech.
     *
     * @param string|null $modeleDevisTech The modele devis tech.
     * @return Constantes Returns this Constantes.
     */
    public function setModeleDevisTech(?string $modeleDevisTech): Constantes {
        $this->modeleDevisTech = $modeleDevisTech;
        return $this;
    }

    /**
     * Set the modele facture.
     *
     * @param string|null $modeleFacture The modele facture.
     * @return Constantes Returns this Constantes.
     */
    public function setModeleFacture(?string $modeleFacture): Constantes {
        $this->modeleFacture = $modeleFacture;
        return $this;
    }

    /**
     * Set the mt cpta negatif.
     *
     * @param bool|null $mtCptaNegatif The mt cpta negatif.
     * @return Constantes Returns this Constantes.
     */
    public function setMtCptaNegatif(?bool $mtCptaNegatif): Constantes {
        $this->mtCptaNegatif = $mtCptaNegatif;
        return $this;
    }

    /**
     * Set the n der document.
     *
     * @param int|null $nDerDocument The n der document.
     * @return Constantes Returns this Constantes.
     */
    public function setNDerDocument(?int $nDerDocument): Constantes {
        $this->nDerDocument = $nDerDocument;
        return $this;
    }

    /**
     * Set the nb caracteres ligne fact.
     *
     * @param string|null $nbCaracteresLigneFact The nb caracteres ligne fact.
     * @return Constantes Returns this Constantes.
     */
    public function setNbCaracteresLigneFact(?string $nbCaracteresLigneFact): Constantes {
        $this->nbCaracteresLigneFact = $nbCaracteresLigneFact;
        return $this;
    }

    /**
     * Set the nb decimales prix unitaire.
     *
     * @param string|null $nbDecimalesPrixUnitaire The nb decimales prix unitaire.
     * @return Constantes Returns this Constantes.
     */
    public function setNbDecimalesPrixUnitaire(?string $nbDecimalesPrixUnitaire): Constantes {
        $this->nbDecimalesPrixUnitaire = $nbDecimalesPrixUnitaire;
        return $this;
    }

    /**
     * Set the nb decimales quantite.
     *
     * @param string|null $nbDecimalesQuantite The nb decimales quantite.
     * @return Constantes Returns this Constantes.
     */
    public function setNbDecimalesQuantite(?string $nbDecimalesQuantite): Constantes {
        $this->nbDecimalesQuantite = $nbDecimalesQuantite;
        return $this;
    }

    /**
     * Set the nb entiers prix unitaire.
     *
     * @param string|null $nbEntiersPrixUnitaire The nb entiers prix unitaire.
     * @return Constantes Returns this Constantes.
     */
    public function setNbEntiersPrixUnitaire(?string $nbEntiersPrixUnitaire): Constantes {
        $this->nbEntiersPrixUnitaire = $nbEntiersPrixUnitaire;
        return $this;
    }

    /**
     * Set the nb entiers quantite.
     *
     * @param string|null $nbEntiersQuantite The nb entiers quantite.
     * @return Constantes Returns this Constantes.
     */
    public function setNbEntiersQuantite(?string $nbEntiersQuantite): Constantes {
        $this->nbEntiersQuantite = $nbEntiersQuantite;
        return $this;
    }

    /**
     * Set the nb jour cp acquis.
     *
     * @param float|null $nbJourCpAcquis The nb jour cp acquis.
     * @return Constantes Returns this Constantes.
     */
    public function setNbJourCpAcquis(?float $nbJourCpAcquis): Constantes {
        $this->nbJourCpAcquis = $nbJourCpAcquis;
        return $this;
    }

    /**
     * Set the nb jours abs proratisation dcp.
     *
     * @param int|null $nbJoursAbsProratisationDcp The nb jours abs proratisation dcp.
     * @return Constantes Returns this Constantes.
     */
    public function setNbJoursAbsProratisationDcp(?int $nbJoursAbsProratisationDcp): Constantes {
        $this->nbJoursAbsProratisationDcp = $nbJoursAbsProratisationDcp;
        return $this;
    }

    /**
     * Set the nb mois consecutifs.
     *
     * @param int|null $nbMoisConsecutifs The nb mois consecutifs.
     * @return Constantes Returns this Constantes.
     */
    public function setNbMoisConsecutifs(?int $nbMoisConsecutifs): Constantes {
        $this->nbMoisConsecutifs = $nbMoisConsecutifs;
        return $this;
    }

    /**
     * Set the nom fact nb lignes.
     *
     * @param string|null $nomFactNbLignes The nom fact nb lignes.
     * @return Constantes Returns this Constantes.
     */
    public function setNomFactNbLignes(?string $nomFactNbLignes): Constantes {
        $this->nomFactNbLignes = $nomFactNbLignes;
        return $this;
    }

    /**
     * Set the nom fichier ascii achat.
     *
     * @param string|null $nomFichierAsciiAchat The nom fichier ascii achat.
     * @return Constantes Returns this Constantes.
     */
    public function setNomFichierAsciiAchat(?string $nomFichierAsciiAchat): Constantes {
        $this->nomFichierAsciiAchat = $nomFichierAsciiAchat;
        return $this;
    }

    /**
     * Set the nom fichier ascii vente.
     *
     * @param string|null $nomFichierAsciiVente The nom fichier ascii vente.
     * @return Constantes Returns this Constantes.
     */
    public function setNomFichierAsciiVente(?string $nomFichierAsciiVente): Constantes {
        $this->nomFichierAsciiVente = $nomFichierAsciiVente;
        return $this;
    }

    /**
     * Set the note0 non conforme.
     *
     * @param bool|null $note0NonConforme The note0 non conforme.
     * @return Constantes Returns this Constantes.
     */
    public function setNote0NonConforme(?bool $note0NonConforme): Constantes {
        $this->note0NonConforme = $note0NonConforme;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return Constantes Returns this Constantes.
     */
    public function setNumBt(?int $numBt): Constantes {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the num critere bt num1.
     *
     * @param string|null $numCritereBtNum1 The num critere bt num1.
     * @return Constantes Returns this Constantes.
     */
    public function setNumCritereBtNum1(?string $numCritereBtNum1): Constantes {
        $this->numCritereBtNum1 = $numCritereBtNum1;
        return $this;
    }

    /**
     * Set the num critere bt num2.
     *
     * @param string|null $numCritereBtNum2 The num critere bt num2.
     * @return Constantes Returns this Constantes.
     */
    public function setNumCritereBtNum2(?string $numCritereBtNum2): Constantes {
        $this->numCritereBtNum2 = $numCritereBtNum2;
        return $this;
    }

    /**
     * Set the num critere chantier filtre1.
     *
     * @param string|null $numCritereChantierFiltre1 The num critere chantier filtre1.
     * @return Constantes Returns this Constantes.
     */
    public function setNumCritereChantierFiltre1(?string $numCritereChantierFiltre1): Constantes {
        $this->numCritereChantierFiltre1 = $numCritereChantierFiltre1;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param int|null $numDevis The num devis.
     * @return Constantes Returns this Constantes.
     */
    public function setNumDevis(?int $numDevis): Constantes {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num fact.
     *
     * @param int|null $numFact The num fact.
     * @return Constantes Returns this Constantes.
     */
    public function setNumFact(?int $numFact): Constantes {
        $this->numFact = $numFact;
        return $this;
    }

    /**
     * Set the num fact vm.
     *
     * @param int|null $numFactVm The num fact vm.
     * @return Constantes Returns this Constantes.
     */
    public function setNumFactVm(?int $numFactVm): Constantes {
        $this->numFactVm = $numFactVm;
        return $this;
    }

    /**
     * Set the numero fiche controle.
     *
     * @param int|null $numeroFicheControle The numero fiche controle.
     * @return Constantes Returns this Constantes.
     */
    public function setNumeroFicheControle(?int $numeroFicheControle): Constantes {
        $this->numeroFicheControle = $numeroFicheControle;
        return $this;
    }

    /**
     * Set the pa par fournisseur.
     *
     * @param bool|null $paParFournisseur The pa par fournisseur.
     * @return Constantes Returns this Constantes.
     */
    public function setPaParFournisseur(?bool $paParFournisseur): Constantes {
        $this->paParFournisseur = $paParFournisseur;
        return $this;
    }

    /**
     * Set the pas num cpt par dossier.
     *
     * @param bool|null $pasNumCptParDossier The pas num cpt par dossier.
     * @return Constantes Returns this Constantes.
     */
    public function setPasNumCptParDossier(?bool $pasNumCptParDossier): Constantes {
        $this->pasNumCptParDossier = $pasNumCptParDossier;
        return $this;
    }

    /**
     * Set the pdf bt coefficient.
     *
     * @param float|null $pdfBtCoefficient The pdf bt coefficient.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtCoefficient(?float $pdfBtCoefficient): Constantes {
        $this->pdfBtCoefficient = $pdfBtCoefficient;
        return $this;
    }

    /**
     * Set the pdf bt date passage.
     *
     * @param bool|null $pdfBtDatePassage The pdf bt date passage.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtDatePassage(?bool $pdfBtDatePassage): Constantes {
        $this->pdfBtDatePassage = $pdfBtDatePassage;
        return $this;
    }

    /**
     * Set the pdf bt descriptif.
     *
     * @param bool|null $pdfBtDescriptif The pdf bt descriptif.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtDescriptif(?bool $pdfBtDescriptif): Constantes {
        $this->pdfBtDescriptif = $pdfBtDescriptif;
        return $this;
    }

    /**
     * Set the pdf bt employes corps.
     *
     * @param bool|null $pdfBtEmployesCorps The pdf bt employes corps.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtEmployesCorps(?bool $pdfBtEmployesCorps): Constantes {
        $this->pdfBtEmployesCorps = $pdfBtEmployesCorps;
        return $this;
    }

    /**
     * Set the pdf bt employes ref.
     *
     * @param bool|null $pdfBtEmployesRef The pdf bt employes ref.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtEmployesRef(?bool $pdfBtEmployesRef): Constantes {
        $this->pdfBtEmployesRef = $pdfBtEmployesRef;
        return $this;
    }

    /**
     * Set the pdf bt facturer ala validation.
     *
     * @param bool|null $pdfBtFacturerAlaValidation The pdf bt facturer ala validation.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtFacturerAlaValidation(?bool $pdfBtFacturerAlaValidation): Constantes {
        $this->pdfBtFacturerAlaValidation = $pdfBtFacturerAlaValidation;
        return $this;
    }

    /**
     * Set the pdf bt format saisie qte pu.
     *
     * @param bool|null $pdfBtFormatSaisieQtePu The pdf bt format saisie qte pu.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtFormatSaisieQtePu(?bool $pdfBtFormatSaisieQtePu): Constantes {
        $this->pdfBtFormatSaisieQtePu = $pdfBtFormatSaisieQtePu;
        return $this;
    }

    /**
     * Set the pdf bt libelle date.
     *
     * @param string|null $pdfBtLibelleDate The pdf bt libelle date.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtLibelleDate(?string $pdfBtLibelleDate): Constantes {
        $this->pdfBtLibelleDate = $pdfBtLibelleDate;
        return $this;
    }

    /**
     * Set the pdf bt nom chantier.
     *
     * @param bool|null $pdfBtNomChantier The pdf bt nom chantier.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtNomChantier(?bool $pdfBtNomChantier): Constantes {
        $this->pdfBtNomChantier = $pdfBtNomChantier;
        return $this;
    }

    /**
     * Set the pdf bt periode validite.
     *
     * @param bool|null $pdfBtPeriodeValidite The pdf bt periode validite.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtPeriodeValidite(?bool $pdfBtPeriodeValidite): Constantes {
        $this->pdfBtPeriodeValidite = $pdfBtPeriodeValidite;
        return $this;
    }

    /**
     * Set the pdf bt prix achat.
     *
     * @param float|null $pdfBtPrixAchat The pdf bt prix achat.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtPrixAchat(?float $pdfBtPrixAchat): Constantes {
        $this->pdfBtPrixAchat = $pdfBtPrixAchat;
        return $this;
    }

    /**
     * Set the pdf bt reprendre libelle date.
     *
     * @param bool|null $pdfBtReprendreLibelleDate The pdf bt reprendre libelle date.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtReprendreLibelleDate(?bool $pdfBtReprendreLibelleDate): Constantes {
        $this->pdfBtReprendreLibelleDate = $pdfBtReprendreLibelleDate;
        return $this;
    }

    /**
     * Set the pdf bt taux horaire.
     *
     * @param float|null $pdfBtTauxHoraire The pdf bt taux horaire.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtTauxHoraire(?float $pdfBtTauxHoraire): Constantes {
        $this->pdfBtTauxHoraire = $pdfBtTauxHoraire;
        return $this;
    }

    /**
     * Set the pj envoi mail.
     *
     * @param string|null $pjEnvoiMail The pj envoi mail.
     * @return Constantes Returns this Constantes.
     */
    public function setPjEnvoiMail(?string $pjEnvoiMail): Constantes {
        $this->pjEnvoiMail = $pjEnvoiMail;
        return $this;
    }

    /**
     * Set the pj envoi mail attestation.
     *
     * @param string|null $pjEnvoiMailAttestation The pj envoi mail attestation.
     * @return Constantes Returns this Constantes.
     */
    public function setPjEnvoiMailAttestation(?string $pjEnvoiMailAttestation): Constantes {
        $this->pjEnvoiMailAttestation = $pjEnvoiMailAttestation;
        return $this;
    }

    /**
     * Set the point bt employes sortis.
     *
     * @param bool|null $pointBtEmployesSortis The point bt employes sortis.
     * @return Constantes Returns this Constantes.
     */
    public function setPointBtEmployesSortis(?bool $pointBtEmployesSortis): Constantes {
        $this->pointBtEmployesSortis = $pointBtEmployesSortis;
        return $this;
    }

    /**
     * Set the poste1.
     *
     * @param string|null $poste1 The poste1.
     * @return Constantes Returns this Constantes.
     */
    public function setPoste1(?string $poste1): Constantes {
        $this->poste1 = $poste1;
        return $this;
    }

    /**
     * Set the poste2.
     *
     * @param string|null $poste2 The poste2.
     * @return Constantes Returns this Constantes.
     */
    public function setPoste2(?string $poste2): Constantes {
        $this->poste2 = $poste2;
        return $this;
    }

    /**
     * Set the poste3.
     *
     * @param string|null $poste3 The poste3.
     * @return Constantes Returns this Constantes.
     */
    public function setPoste3(?string $poste3): Constantes {
        $this->poste3 = $poste3;
        return $this;
    }

    /**
     * Set the poste4.
     *
     * @param string|null $poste4 The poste4.
     * @return Constantes Returns this Constantes.
     */
    public function setPoste4(?string $poste4): Constantes {
        $this->poste4 = $poste4;
        return $this;
    }

    /**
     * Set the poste5.
     *
     * @param string|null $poste5 The poste5.
     * @return Constantes Returns this Constantes.
     */
    public function setPoste5(?string $poste5): Constantes {
        $this->poste5 = $poste5;
        return $this;
    }

    /**
     * Set the pourc maj h compl.
     *
     * @param float|null $pourcMajHCompl The pourc maj h compl.
     * @return Constantes Returns this Constantes.
     */
    public function setPourcMajHCompl(?float $pourcMajHCompl): Constantes {
        $this->pourcMajHCompl = $pourcMajHCompl;
        return $this;
    }

    /**
     * Set the pourc maj h compl2.
     *
     * @param float|null $pourcMajHCompl2 The pourc maj h compl2.
     * @return Constantes Returns this Constantes.
     */
    public function setPourcMajHCompl2(?float $pourcMajHCompl2): Constantes {
        $this->pourcMajHCompl2 = $pourcMajHCompl2;
        return $this;
    }

    /**
     * Set the pourcent dep hc max.
     *
     * @param float|null $pourcentDepHcMax The pourcent dep hc max.
     * @return Constantes Returns this Constantes.
     */
    public function setPourcentDepHcMax(?float $pourcentDepHcMax): Constantes {
        $this->pourcentDepHcMax = $pourcentDepHcMax;
        return $this;
    }

    /**
     * Set the pourcent dep hc plus mois.
     *
     * @param float|null $pourcentDepHcPlusMois The pourcent dep hc plus mois.
     * @return Constantes Returns this Constantes.
     */
    public function setPourcentDepHcPlusMois(?float $pourcentDepHcPlusMois): Constantes {
        $this->pourcentDepHcPlusMois = $pourcentDepHcPlusMois;
        return $this;
    }

    /**
     * Set the pourcentage repos remplacement.
     *
     * @param float|null $pourcentageReposRemplacement The pourcentage repos remplacement.
     * @return Constantes Returns this Constantes.
     */
    public function setPourcentageReposRemplacement(?float $pourcentageReposRemplacement): Constantes {
        $this->pourcentageReposRemplacement = $pourcentageReposRemplacement;
        return $this;
    }

    /**
     * Set the prefixe.
     *
     * @param string|null $prefixe The prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setPrefixe(?string $prefixe): Constantes {
        $this->prefixe = $prefixe;
        return $this;
    }

    /**
     * Set the prefixe devis.
     *
     * @param string|null $prefixeDevis The prefixe devis.
     * @return Constantes Returns this Constantes.
     */
    public function setPrefixeDevis(?string $prefixeDevis): Constantes {
        $this->prefixeDevis = $prefixeDevis;
        return $this;
    }

    /**
     * Set the preparer chantier pret only.
     *
     * @param bool|null $preparerChantierPretOnly The preparer chantier pret only.
     * @return Constantes Returns this Constantes.
     */
    public function setPreparerChantierPretOnly(?bool $preparerChantierPretOnly): Constantes {
        $this->preparerChantierPretOnly = $preparerChantierPretOnly;
        return $this;
    }

    /**
     * Set the prix defaut achat.
     *
     * @param int|null $prixDefautAchat The prix defaut achat.
     * @return Constantes Returns this Constantes.
     */
    public function setPrixDefautAchat(?int $prixDefautAchat): Constantes {
        $this->prixDefautAchat = $prixDefautAchat;
        return $this;
    }

    /**
     * Set the prix defaut entree directe.
     *
     * @param int|null $prixDefautEntreeDirecte The prix defaut entree directe.
     * @return Constantes Returns this Constantes.
     */
    public function setPrixDefautEntreeDirecte(?int $prixDefautEntreeDirecte): Constantes {
        $this->prixDefautEntreeDirecte = $prixDefautEntreeDirecte;
        return $this;
    }

    /**
     * Set the prix defaut inventaire.
     *
     * @param int|null $prixDefautInventaire The prix defaut inventaire.
     * @return Constantes Returns this Constantes.
     */
    public function setPrixDefautInventaire(?int $prixDefautInventaire): Constantes {
        $this->prixDefautInventaire = $prixDefautInventaire;
        return $this;
    }

    /**
     * Set the prix defaut sortie directe.
     *
     * @param int|null $prixDefautSortieDirecte The prix defaut sortie directe.
     * @return Constantes Returns this Constantes.
     */
    public function setPrixDefautSortieDirecte(?int $prixDefautSortieDirecte): Constantes {
        $this->prixDefautSortieDirecte = $prixDefautSortieDirecte;
        return $this;
    }

    /**
     * Set the prix defaut vente.
     *
     * @param int|null $prixDefautVente The prix defaut vente.
     * @return Constantes Returns this Constantes.
     */
    public function setPrixDefautVente(?int $prixDefautVente): Constantes {
        $this->prixDefautVente = $prixDefautVente;
        return $this;
    }

    /**
     * Set the prochain numero pj.
     *
     * @param int|null $prochainNumeroPj The prochain numero pj.
     * @return Constantes Returns this Constantes.
     */
    public function setProchainNumeroPj(?int $prochainNumeroPj): Constantes {
        $this->prochainNumeroPj = $prochainNumeroPj;
        return $this;
    }

    /**
     * Set the prorata heures creer ligne.
     *
     * @param bool|null $prorataHeuresCreerLigne The prorata heures creer ligne.
     * @return Constantes Returns this Constantes.
     */
    public function setProrataHeuresCreerLigne(?bool $prorataHeuresCreerLigne): Constantes {
        $this->prorataHeuresCreerLigne = $prorataHeuresCreerLigne;
        return $this;
    }

    /**
     * Set the prorata heures designation moins.
     *
     * @param string|null $prorataHeuresDesignationMoins The prorata heures designation moins.
     * @return Constantes Returns this Constantes.
     */
    public function setProrataHeuresDesignationMoins(?string $prorataHeuresDesignationMoins): Constantes {
        $this->prorataHeuresDesignationMoins = $prorataHeuresDesignationMoins;
        return $this;
    }

    /**
     * Set the prorata heures designation plus.
     *
     * @param string|null $prorataHeuresDesignationPlus The prorata heures designation plus.
     * @return Constantes Returns this Constantes.
     */
    public function setProrataHeuresDesignationPlus(?string $prorataHeuresDesignationPlus): Constantes {
        $this->prorataHeuresDesignationPlus = $prorataHeuresDesignationPlus;
        return $this;
    }

    /**
     * Set the prorata heures option.
     *
     * @param string|null $prorataHeuresOption The prorata heures option.
     * @return Constantes Returns this Constantes.
     */
    public function setProrataHeuresOption(?string $prorataHeuresOption): Constantes {
        $this->prorataHeuresOption = $prorataHeuresOption;
        return $this;
    }

    /**
     * Set the prov cp infos emp.
     *
     * @param bool|null $provCpInfosEmp The prov cp infos emp.
     * @return Constantes Returns this Constantes.
     */
    public function setProvCpInfosEmp(?bool $provCpInfosEmp): Constantes {
        $this->provCpInfosEmp = $provCpInfosEmp;
        return $this;
    }

    /**
     * Set the provisions cp.
     *
     * @param bool|null $provisionsCp The provisions cp.
     * @return Constantes Returns this Constantes.
     */
    public function setProvisionsCp(?bool $provisionsCp): Constantes {
        $this->provisionsCp = $provisionsCp;
        return $this;
    }

    /**
     * Set the qualite nb criteres.
     *
     * @param string|null $qualiteNbCriteres The qualite nb criteres.
     * @return Constantes Returns this Constantes.
     */
    public function setQualiteNbCriteres(?string $qualiteNbCriteres): Constantes {
        $this->qualiteNbCriteres = $qualiteNbCriteres;
        return $this;
    }

    /**
     * Set the qualite nb notes.
     *
     * @param string|null $qualiteNbNotes The qualite nb notes.
     * @return Constantes Returns this Constantes.
     */
    public function setQualiteNbNotes(?string $qualiteNbNotes): Constantes {
        $this->qualiteNbNotes = $qualiteNbNotes;
        return $this;
    }

    /**
     * Set the qualite satisfaction generale.
     *
     * @param bool|null $qualiteSatisfactionGenerale The qualite satisfaction generale.
     * @return Constantes Returns this Constantes.
     */
    public function setQualiteSatisfactionGenerale(?bool $qualiteSatisfactionGenerale): Constantes {
        $this->qualiteSatisfactionGenerale = $qualiteSatisfactionGenerale;
        return $this;
    }

    /**
     * Set the reference mensu contrat proprete.
     *
     * @param bool|null $referenceMensuContratProprete The reference mensu contrat proprete.
     * @return Constantes Returns this Constantes.
     */
    public function setReferenceMensuContratProprete(?bool $referenceMensuContratProprete): Constantes {
        $this->referenceMensuContratProprete = $referenceMensuContratProprete;
        return $this;
    }

    /**
     * Set the remplacant abs jf pas auto.
     *
     * @param bool|null $remplacantAbsJfPasAuto The remplacant abs jf pas auto.
     * @return Constantes Returns this Constantes.
     */
    public function setRemplacantAbsJfPasAuto(?bool $remplacantAbsJfPasAuto): Constantes {
        $this->remplacantAbsJfPasAuto = $remplacantAbsJfPasAuto;
        return $this;
    }

    /**
     * Set the remplacant travaille pas jf.
     *
     * @param bool|null $remplacantTravaillePasJf The remplacant travaille pas jf.
     * @return Constantes Returns this Constantes.
     */
    public function setRemplacantTravaillePasJf(?bool $remplacantTravaillePasJf): Constantes {
        $this->remplacantTravaillePasJf = $remplacantTravaillePasJf;
        return $this;
    }

    /**
     * Set the remplacement hcjf.
     *
     * @param bool|null $remplacementHcjf The remplacement hcjf.
     * @return Constantes Returns this Constantes.
     */
    public function setRemplacementHcjf(?bool $remplacementHcjf): Constantes {
        $this->remplacementHcjf = $remplacementHcjf;
        return $this;
    }

    /**
     * Set the repos compensateur pour travailleur nuit.
     *
     * @param bool|null $reposCompensateurPourTravailleurNuit The repos compensateur pour travailleur nuit.
     * @return Constantes Returns this Constantes.
     */
    public function setReposCompensateurPourTravailleurNuit(?bool $reposCompensateurPourTravailleurNuit): Constantes {
        $this->reposCompensateurPourTravailleurNuit = $reposCompensateurPourTravailleurNuit;
        return $this;
    }

    /**
     * Set the rt fdans fact dev.
     *
     * @param bool|null $rtFdansFactDev The rt fdans fact dev.
     * @return Constantes Returns this Constantes.
     */
    public function setRtFdansFactDev(?bool $rtFdansFactDev): Constantes {
        $this->rtFdansFactDev = $rtFdansFactDev;
        return $this;
    }

    /**
     * Set the saisir absences sur hc.
     *
     * @param bool|null $saisirAbsencesSurHc The saisir absences sur hc.
     * @return Constantes Returns this Constantes.
     */
    public function setSaisirAbsencesSurHc(?bool $saisirAbsencesSurHc): Constantes {
        $this->saisirAbsencesSurHc = $saisirAbsencesSurHc;
        return $this;
    }

    /**
     * Set the saisir code chantier achat.
     *
     * @param bool|null $saisirCodeChantierAchat The saisir code chantier achat.
     * @return Constantes Returns this Constantes.
     */
    public function setSaisirCodeChantierAchat(?bool $saisirCodeChantierAchat): Constantes {
        $this->saisirCodeChantierAchat = $saisirCodeChantierAchat;
        return $this;
    }

    /**
     * Set the saisir num bt.
     *
     * @param bool|null $saisirNumBt The saisir num bt.
     * @return Constantes Returns this Constantes.
     */
    public function setSaisirNumBt(?bool $saisirNumBt): Constantes {
        $this->saisirNumBt = $saisirNumBt;
        return $this;
    }

    /**
     * Set the services paie.
     *
     * @param string|null $servicesPaie The services paie.
     * @return Constantes Returns this Constantes.
     */
    public function setServicesPaie(?string $servicesPaie): Constantes {
        $this->servicesPaie = $servicesPaie;
        return $this;
    }

    /**
     * Set the seuil majo h compl.
     *
     * @param float|null $seuilMajoHCompl The seuil majo h compl.
     * @return Constantes Returns this Constantes.
     */
    public function setSeuilMajoHCompl(?float $seuilMajoHCompl): Constantes {
        $this->seuilMajoHCompl = $seuilMajoHCompl;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float|null $tauxEscompte The taux escompte.
     * @return Constantes Returns this Constantes.
     */
    public function setTauxEscompte(?float $tauxEscompte): Constantes {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the taux majo hc33.
     *
     * @param float|null $tauxMajoHc33 The taux majo hc33.
     * @return Constantes Returns this Constantes.
     */
    public function setTauxMajoHc33(?float $tauxMajoHc33): Constantes {
        $this->tauxMajoHc33 = $tauxMajoHc33;
        return $this;
    }

    /**
     * Set the taux majoration h compl.
     *
     * @param float|null $tauxMajorationHCompl The taux majoration h compl.
     * @return Constantes Returns this Constantes.
     */
    public function setTauxMajorationHCompl(?float $tauxMajorationHCompl): Constantes {
        $this->tauxMajorationHCompl = $tauxMajorationHCompl;
        return $this;
    }

    /**
     * Set the taux tva achat.
     *
     * @param float|null $tauxTvaAchat The taux tva achat.
     * @return Constantes Returns this Constantes.
     */
    public function setTauxTvaAchat(?float $tauxTvaAchat): Constantes {
        $this->tauxTvaAchat = $tauxTvaAchat;
        return $this;
    }

    /**
     * Set the taux tva taxe deee.
     *
     * @param float|null $tauxTvaTaxeDeee The taux tva taxe deee.
     * @return Constantes Returns this Constantes.
     */
    public function setTauxTvaTaxeDeee(?float $tauxTvaTaxeDeee): Constantes {
        $this->tauxTvaTaxeDeee = $tauxTvaTaxeDeee;
        return $this;
    }

    /**
     * Set the taux tva vente.
     *
     * @param float|null $tauxTvaVente The taux tva vente.
     * @return Constantes Returns this Constantes.
     */
    public function setTauxTvaVente(?float $tauxTvaVente): Constantes {
        $this->tauxTvaVente = $tauxTvaVente;
        return $this;
    }

    /**
     * Set the type rempl defaut.
     *
     * @param string|null $typeRemplDefaut The type rempl defaut.
     * @return Constantes Returns this Constantes.
     */
    public function setTypeRemplDefaut(?string $typeRemplDefaut): Constantes {
        $this->typeRemplDefaut = $typeRemplDefaut;
        return $this;
    }

    /**
     * Set the type transfert vente.
     *
     * @param string|null $typeTransfertVente The type transfert vente.
     * @return Constantes Returns this Constantes.
     */
    public function setTypeTransfertVente(?string $typeTransfertVente): Constantes {
        $this->typeTransfertVente = $typeTransfertVente;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return Constantes Returns this Constantes.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): Constantes {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }

    /**
     * Set the utiliser stock mini.
     *
     * @param bool|null $utiliserStockMini The utiliser stock mini.
     * @return Constantes Returns this Constantes.
     */
    public function setUtiliserStockMini(?bool $utiliserStockMini): Constantes {
        $this->utiliserStockMini = $utiliserStockMini;
        return $this;
    }

    /**
     * Set the visualiser pointage bt valides.
     *
     * @param bool|null $visualiserPointageBtValides The visualiser pointage bt valides.
     * @return Constantes Returns this Constantes.
     */
    public function setVisualiserPointageBtValides(?bool $visualiserPointageBtValides): Constantes {
        $this->visualiserPointageBtValides = $visualiserPointageBtValides;
        return $this;
    }
}
