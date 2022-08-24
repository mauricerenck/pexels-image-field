<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

use DateTime;

/**
 * Constantes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Constantes {

    /**
     * Acces autorise bons travaux.
     *
     * @var bool|null
     */
    private $accesAutoriseBonsTravaux;

    /**
     * Acces autorise plan facturation.
     *
     * @var bool|null
     */
    private $accesAutorisePlanFacturation;

    /**
     * Acces autorise plan tache.
     *
     * @var bool|null
     */
    private $accesAutorisePlanTache;

    /**
     * Acces docs cab.
     *
     * @var bool|null
     */
    private $accesDocsCab;

    /**
     * Acces dossier cpta.
     *
     * @var string|null
     */
    private $accesDossierCpta;

    /**
     * Acces dossier paie.
     *
     * @var string|null
     */
    private $accesDossierPaie;

    /**
     * Acces stat cab.
     *
     * @var bool|null
     */
    private $accesStatCab;

    /**
     * Activation conf cmav cli.
     *
     * @var bool|null
     */
    private $activationConfCmavCli;

    /**
     * Activation conf controle.
     *
     * @var bool|null
     */
    private $activationConfControle;

    /**
     * Activation lst restri.
     *
     * @var bool|null
     */
    private $activationLstRestri;

    /**
     * Activation niveau2.
     *
     * @var bool|null
     */
    private $activationNiveau2;

    /**
     * Activation niveau3.
     *
     * @var bool|null
     */
    private $activationNiveau3;

    /**
     * Affiche point.
     *
     * @var bool|null
     */
    private $affichePoint;

    /**
     * Affiche semaine.
     *
     * @var bool|null
     */
    private $afficheSemaine;

    /**
     * Annulation affaire.
     *
     * @var bool|null
     */
    private $annulationAffaire;

    /**
     * Annulation article.
     *
     * @var bool|null
     */
    private $annulationArticle;

    /**
     * Annulation bons travaux.
     *
     * @var bool|null
     */
    private $annulationBonsTravaux;

    /**
     * Annulation chantier.
     *
     * @var bool|null
     */
    private $annulationChantier;

    /**
     * Annulation client.
     *
     * @var bool|null
     */
    private $annulationClient;

    /**
     * Annulation commission.
     *
     * @var bool|null
     */
    private $annulationCommission;

    /**
     * Annulation dossier cpta.
     *
     * @var bool|null
     */
    private $annulationDossierCpta;

    /**
     * Annulation dossier fact.
     *
     * @var bool|null
     */
    private $annulationDossierFact;

    /**
     * Annulation dossier paie.
     *
     * @var bool|null
     */
    private $annulationDossierPaie;

    /**
     * Annulation fournisseur.
     *
     * @var bool|null
     */
    private $annulationFournisseur;

    /**
     * Annulation plan facturation.
     *
     * @var bool|null
     */
    private $annulationPlanFacturation;

    /**
     * Annulation plan tache.
     *
     * @var bool|null
     */
    private $annulationPlanTache;

    /**
     * Annulation tache.
     *
     * @var bool|null
     */
    private $annulationTache;

    /**
     * Annulation tarif.
     *
     * @var bool|null
     */
    private $annulationTarif;

    /**
     * Blocage ed cli.
     *
     * @var bool|null
     */
    private $blocageEdCli;

    /**
     * Budget type saisie.
     *
     * @var int|null
     */
    private $budgetTypeSaisie;

    /**
     * Champs critere1.
     *
     * @var string|null
     */
    private $champsCritere1;

    /**
     * Champs critere10.
     *
     * @var string|null
     */
    private $champsCritere10;

    /**
     * Champs critere2.
     *
     * @var string|null
     */
    private $champsCritere2;

    /**
     * Champs critere3.
     *
     * @var string|null
     */
    private $champsCritere3;

    /**
     * Champs critere4.
     *
     * @var string|null
     */
    private $champsCritere4;

    /**
     * Champs critere5.
     *
     * @var string|null
     */
    private $champsCritere5;

    /**
     * Champs critere6.
     *
     * @var string|null
     */
    private $champsCritere6;

    /**
     * Champs critere7.
     *
     * @var string|null
     */
    private $champsCritere7;

    /**
     * Champs critere8.
     *
     * @var string|null
     */
    private $champsCritere8;

    /**
     * Champs critere9.
     *
     * @var string|null
     */
    private $champsCritere9;

    /**
     * Champs critere affaire1.
     *
     * @var string|null
     */
    private $champsCritereAffaire1;

    /**
     * Champs critere affaire10.
     *
     * @var string|null
     */
    private $champsCritereAffaire10;

    /**
     * Champs critere affaire2.
     *
     * @var string|null
     */
    private $champsCritereAffaire2;

    /**
     * Champs critere affaire3.
     *
     * @var string|null
     */
    private $champsCritereAffaire3;

    /**
     * Champs critere affaire4.
     *
     * @var string|null
     */
    private $champsCritereAffaire4;

    /**
     * Champs critere affaire5.
     *
     * @var string|null
     */
    private $champsCritereAffaire5;

    /**
     * Champs critere affaire6.
     *
     * @var string|null
     */
    private $champsCritereAffaire6;

    /**
     * Champs critere affaire7.
     *
     * @var string|null
     */
    private $champsCritereAffaire7;

    /**
     * Champs critere affaire8.
     *
     * @var string|null
     */
    private $champsCritereAffaire8;

    /**
     * Champs critere affaire9.
     *
     * @var string|null
     */
    private $champsCritereAffaire9;

    /**
     * Champs critere article1.
     *
     * @var string|null
     */
    private $champsCritereArticle1;

    /**
     * Champs critere article10.
     *
     * @var string|null
     */
    private $champsCritereArticle10;

    /**
     * Champs critere article2.
     *
     * @var string|null
     */
    private $champsCritereArticle2;

    /**
     * Champs critere article3.
     *
     * @var string|null
     */
    private $champsCritereArticle3;

    /**
     * Champs critere article4.
     *
     * @var string|null
     */
    private $champsCritereArticle4;

    /**
     * Champs critere article5.
     *
     * @var string|null
     */
    private $champsCritereArticle5;

    /**
     * Champs critere article6.
     *
     * @var string|null
     */
    private $champsCritereArticle6;

    /**
     * Champs critere article7.
     *
     * @var string|null
     */
    private $champsCritereArticle7;

    /**
     * Champs critere article8.
     *
     * @var string|null
     */
    private $champsCritereArticle8;

    /**
     * Champs critere article9.
     *
     * @var string|null
     */
    private $champsCritereArticle9;

    /**
     * Champs critere ent piece1.
     *
     * @var string|null
     */
    private $champsCritereEntPiece1;

    /**
     * Champs critere ent piece10.
     *
     * @var string|null
     */
    private $champsCritereEntPiece10;

    /**
     * Champs critere ent piece2.
     *
     * @var string|null
     */
    private $champsCritereEntPiece2;

    /**
     * Champs critere ent piece3.
     *
     * @var string|null
     */
    private $champsCritereEntPiece3;

    /**
     * Champs critere ent piece4.
     *
     * @var string|null
     */
    private $champsCritereEntPiece4;

    /**
     * Champs critere ent piece5.
     *
     * @var string|null
     */
    private $champsCritereEntPiece5;

    /**
     * Champs critere ent piece6.
     *
     * @var string|null
     */
    private $champsCritereEntPiece6;

    /**
     * Champs critere ent piece7.
     *
     * @var string|null
     */
    private $champsCritereEntPiece7;

    /**
     * Champs critere ent piece8.
     *
     * @var string|null
     */
    private $champsCritereEntPiece8;

    /**
     * Champs critere ent piece9.
     *
     * @var string|null
     */
    private $champsCritereEntPiece9;

    /**
     * Chrono activation.
     *
     * @var bool|null
     */
    private $chronoActivation;

    /**
     * Chrono prefixe.
     *
     * @var string|null
     */
    private $chronoPrefixe;

    /**
     * Chrono prochain num.
     *
     * @var int|null
     */
    private $chronoProchainNum;

    /**
     * Cle acces cn paie.
     *
     * @var string|null
     */
    private $cleAccesCnPaie;

    /**
     * Cle acces fiche client.
     *
     * @var string|null
     */
    private $cleAccesFicheClient;

    /**
     * Cle acces menus.
     *
     * @var string|null
     */
    private $cleAccesMenus;

    /**
     * Cle acces param.
     *
     * @var string|null
     */
    private $cleAccesParam;

    /**
     * Cle des etr communs.
     *
     * @var string|null
     */
    private $cleDesEtrCommuns;

    /**
     * Cle jrn lib communs.
     *
     * @var string|null
     */
    private $cleJrnLibCommuns;

    /**
     * Code emetteur.
     *
     * @var string|null
     */
    private $codeEmetteur;

    /**
     * Code expert defaut.
     *
     * @var string|null
     */
    private $codeExpertDefaut;

    /**
     * Code regroupement pre fact.
     *
     * @var string|null
     */
    private $codeRegroupementPreFact;

    /**
     * Conversion pwd.
     *
     * @var bool|null
     */
    private $conversionPwd;

    /**
     * Cpte collectif cli.
     *
     * @var string|null
     */
    private $cpteCollectifCli;

    /**
     * Cpte collectif frn.
     *
     * @var string|null
     */
    private $cpteCollectifFrn;

    /**
     * Creation affaire.
     *
     * @var bool|null
     */
    private $creationAffaire;

    /**
     * Creation article.
     *
     * @var bool|null
     */
    private $creationArticle;

    /**
     * Creation bons travaux.
     *
     * @var bool|null
     */
    private $creationBonsTravaux;

    /**
     * Creation chantier.
     *
     * @var bool|null
     */
    private $creationChantier;

    /**
     * Creation client.
     *
     * @var bool|null
     */
    private $creationClient;

    /**
     * Creation commission.
     *
     * @var bool|null
     */
    private $creationCommission;

    /**
     * Creation dossier cpta.
     *
     * @var bool|null
     */
    private $creationDossierCpta;

    /**
     * Creation dossier fact.
     *
     * @var bool|null
     */
    private $creationDossierFact;

    /**
     * Creation dossier paie.
     *
     * @var bool|null
     */
    private $creationDossierPaie;

    /**
     * Creation fournisseur.
     *
     * @var bool|null
     */
    private $creationFournisseur;

    /**
     * Creation plan facturation.
     *
     * @var bool|null
     */
    private $creationPlanFacturation;

    /**
     * Creation plan tache.
     *
     * @var bool|null
     */
    private $creationPlanTache;

    /**
     * Creation prospect.
     *
     * @var bool|null
     */
    private $creationProspect;

    /**
     * Creation tache.
     *
     * @var bool|null
     */
    private $creationTache;

    /**
     * Creation tarif.
     *
     * @var bool|null
     */
    private $creationTarif;

    /**
     * Date cloture.
     *
     * @var DateTime|null
     */
    private $dateCloture;

    /**
     * Dt dern modif conf zone.
     *
     * @var DateTime|null
     */
    private $dtDernModifConfZone;

    /**
     * Ech aff en mt.
     *
     * @var bool|null
     */
    private $echAffEnMt;

    /**
     * Fonctionnement cga.
     *
     * @var bool|null
     */
    private $fonctionnementCga;

    /**
     * Heures trav1.
     *
     * @var float|null
     */
    private $heuresTrav1;

    /**
     * Heures trav2.
     *
     * @var float|null
     */
    private $heuresTrav2;

    /**
     * Heures trav3.
     *
     * @var float|null
     */
    private $heuresTrav3;

    /**
     * Heures trav4.
     *
     * @var float|null
     */
    private $heuresTrav4;

    /**
     * Increm auto.
     *
     * @var bool|null
     */
    private $incremAuto;

    /**
     * Increm auto aff.
     *
     * @var bool|null
     */
    private $incremAutoAff;

    /**
     * Increm auto frn.
     *
     * @var bool|null
     */
    private $incremAutoFrn;

    /**
     * Increm cpte cli auto.
     *
     * @var bool|null
     */
    private $incremCpteCliAuto;

    /**
     * Increm cpte frn auto.
     *
     * @var bool|null
     */
    private $incremCpteFrnAuto;

    /**
     * Increment cpte cli.
     *
     * @var int|null
     */
    private $incrementCpteCli;

    /**
     * Increment cpte frn.
     *
     * @var int|null
     */
    private $incrementCpteFrn;

    /**
     * Liaison bu cpta.
     *
     * @var bool|null
     */
    private $liaisonBuCpta;

    /**
     * Lib affectation1.
     *
     * @var string|null
     */
    private $libAffectation1;

    /**
     * Lib affectation2.
     *
     * @var string|null
     */
    private $libAffectation2;

    /**
     * Lib affectation3.
     *
     * @var string|null
     */
    private $libAffectation3;

    /**
     * Lib affectation4.
     *
     * @var string|null
     */
    private $libAffectation4;

    /**
     * Lib affectation5.
     *
     * @var string|null
     */
    private $libAffectation5;

    /**
     * Lib affectation6.
     *
     * @var string|null
     */
    private $libAffectation6;

    /**
     * Lib affectation7.
     *
     * @var string|null
     */
    private $libAffectation7;

    /**
     * Lib critere1.
     *
     * @var string|null
     */
    private $libCritere1;

    /**
     * Lib critere10.
     *
     * @var string|null
     */
    private $libCritere10;

    /**
     * Lib critere2.
     *
     * @var string|null
     */
    private $libCritere2;

    /**
     * Lib critere3.
     *
     * @var string|null
     */
    private $libCritere3;

    /**
     * Lib critere4.
     *
     * @var string|null
     */
    private $libCritere4;

    /**
     * Lib critere5.
     *
     * @var string|null
     */
    private $libCritere5;

    /**
     * Lib critere6.
     *
     * @var string|null
     */
    private $libCritere6;

    /**
     * Lib critere7.
     *
     * @var string|null
     */
    private $libCritere7;

    /**
     * Lib critere8.
     *
     * @var string|null
     */
    private $libCritere8;

    /**
     * Lib critere9.
     *
     * @var string|null
     */
    private $libCritere9;

    /**
     * Lib critere affaire1.
     *
     * @var string|null
     */
    private $libCritereAffaire1;

    /**
     * Lib critere affaire10.
     *
     * @var string|null
     */
    private $libCritereAffaire10;

    /**
     * Lib critere affaire2.
     *
     * @var string|null
     */
    private $libCritereAffaire2;

    /**
     * Lib critere affaire3.
     *
     * @var string|null
     */
    private $libCritereAffaire3;

    /**
     * Lib critere affaire4.
     *
     * @var string|null
     */
    private $libCritereAffaire4;

    /**
     * Lib critere affaire5.
     *
     * @var string|null
     */
    private $libCritereAffaire5;

    /**
     * Lib critere affaire6.
     *
     * @var string|null
     */
    private $libCritereAffaire6;

    /**
     * Lib critere affaire7.
     *
     * @var string|null
     */
    private $libCritereAffaire7;

    /**
     * Lib critere affaire8.
     *
     * @var string|null
     */
    private $libCritereAffaire8;

    /**
     * Lib critere affaire9.
     *
     * @var string|null
     */
    private $libCritereAffaire9;

    /**
     * Lib critere article1.
     *
     * @var string|null
     */
    private $libCritereArticle1;

    /**
     * Lib critere article10.
     *
     * @var string|null
     */
    private $libCritereArticle10;

    /**
     * Lib critere article2.
     *
     * @var string|null
     */
    private $libCritereArticle2;

    /**
     * Lib critere article3.
     *
     * @var string|null
     */
    private $libCritereArticle3;

    /**
     * Lib critere article4.
     *
     * @var string|null
     */
    private $libCritereArticle4;

    /**
     * Lib critere article5.
     *
     * @var string|null
     */
    private $libCritereArticle5;

    /**
     * Lib critere article6.
     *
     * @var string|null
     */
    private $libCritereArticle6;

    /**
     * Lib critere article7.
     *
     * @var string|null
     */
    private $libCritereArticle7;

    /**
     * Lib critere article8.
     *
     * @var string|null
     */
    private $libCritereArticle8;

    /**
     * Lib critere article9.
     *
     * @var string|null
     */
    private $libCritereArticle9;

    /**
     * Lib critere ent piece1.
     *
     * @var string|null
     */
    private $libCritereEntPiece1;

    /**
     * Lib critere ent piece10.
     *
     * @var string|null
     */
    private $libCritereEntPiece10;

    /**
     * Lib critere ent piece2.
     *
     * @var string|null
     */
    private $libCritereEntPiece2;

    /**
     * Lib critere ent piece3.
     *
     * @var string|null
     */
    private $libCritereEntPiece3;

    /**
     * Lib critere ent piece4.
     *
     * @var string|null
     */
    private $libCritereEntPiece4;

    /**
     * Lib critere ent piece5.
     *
     * @var string|null
     */
    private $libCritereEntPiece5;

    /**
     * Lib critere ent piece6.
     *
     * @var string|null
     */
    private $libCritereEntPiece6;

    /**
     * Lib critere ent piece7.
     *
     * @var string|null
     */
    private $libCritereEntPiece7;

    /**
     * Lib critere ent piece8.
     *
     * @var string|null
     */
    private $libCritereEntPiece8;

    /**
     * Lib critere ent piece9.
     *
     * @var string|null
     */
    private $libCritereEntPiece9;

    /**
     * Lib critere interloc.
     *
     * @var string|null
     */
    private $libCritereInterloc;

    /**
     * Lib critere interloc2.
     *
     * @var string|null
     */
    private $libCritereInterloc2;

    /**
     * Major heures trav1.
     *
     * @var float|null
     */
    private $majorHeuresTrav1;

    /**
     * Major heures trav2.
     *
     * @var float|null
     */
    private $majorHeuresTrav2;

    /**
     * Major heures trav3.
     *
     * @var float|null
     */
    private $majorHeuresTrav3;

    /**
     * Major heures trav4.
     *
     * @var float|null
     */
    private $majorHeuresTrav4;

    /**
     * Mnt ticket resto a.
     *
     * @var float|null
     */
    private $mntTicketRestoA;

    /**
     * Mnt ticket resto b.
     *
     * @var float|null
     */
    private $mntTicketRestoB;

    /**
     * Mnt ticket resto c.
     *
     * @var float|null
     */
    private $mntTicketRestoC;

    /**
     * Mnt ticket resto d.
     *
     * @var float|null
     */
    private $mntTicketRestoD;

    /**
     * Mnt ticket resto e.
     *
     * @var float|null
     */
    private $mntTicketRestoE;

    /**
     * Modif affaire.
     *
     * @var string|null
     */
    private $modifAffaire;

    /**
     * Modif article.
     *
     * @var string|null
     */
    private $modifArticle;

    /**
     * Modif bons travaux.
     *
     * @var string|null
     */
    private $modifBonsTravaux;

    /**
     * Modif chantier.
     *
     * @var string|null
     */
    private $modifChantier;

    /**
     * Modif client.
     *
     * @var string|null
     */
    private $modifClient;

    /**
     * Modif commission.
     *
     * @var string|null
     */
    private $modifCommission;

    /**
     * Modif dossier fact.
     *
     * @var string|null
     */
    private $modifDossierFact;

    /**
     * Modif fournisseur.
     *
     * @var string|null
     */
    private $modifFournisseur;

    /**
     * Modif plan facturation.
     *
     * @var string|null
     */
    private $modifPlanFacturation;

    /**
     * Modif plan tache.
     *
     * @var string|null
     */
    private $modifPlanTache;

    /**
     * Modif tache.
     *
     * @var string|null
     */
    private $modifTache;

    /**
     * Modif tarif.
     *
     * @var string|null
     */
    private $modifTarif;

    /**
     * Monnaie.
     *
     * @var string|null
     */
    private $monnaie;

    /**
     * Nb dec monnaie.
     *
     * @var int|null
     */
    private $nbDecMonnaie;

    /**
     * No doss cpta.
     *
     * @var string|null
     */
    private $noDossCpta;

    /**
     * No doss paie.
     *
     * @var string|null
     */
    private $noDossPaie;

    /**
     * Prefixe aff.
     *
     * @var string|null
     */
    private $prefixeAff;

    /**
     * Priorite saisie aff.
     *
     * @var int|null
     */
    private $prioriteSaisieAff;

    /**
     * Priorite saisie client.
     *
     * @var int|null
     */
    private $prioriteSaisieClient;

    /**
     * Priorite saisie frn.
     *
     * @var int|null
     */
    private $prioriteSaisieFrn;

    /**
     * Prochain cpte cli.
     *
     * @var string|null
     */
    private $prochainCpteCli;

    /**
     * Prochain cpte frn.
     *
     * @var string|null
     */
    private $prochainCpteFrn;

    /**
     * Prochain mois oblig.
     *
     * @var DateTime|null
     */
    private $prochainMoisOblig;

    /**
     * Prochain num aff.
     *
     * @var int|null
     */
    private $prochainNumAff;

    /**
     * Px km a.
     *
     * @var float|null
     */
    private $pxKmA;

    /**
     * Px km b.
     *
     * @var float|null
     */
    private $pxKmB;

    /**
     * Px km c.
     *
     * @var float|null
     */
    private $pxKmC;

    /**
     * Px km d.
     *
     * @var float|null
     */
    private $pxKmD;

    /**
     * Px km e.
     *
     * @var float|null
     */
    private $pxKmE;

    /**
     * Qet code collaborateur dest.
     *
     * @var string|null
     */
    private $qetCodeCollaborateurDest;

    /**
     * Qtel code mission.
     *
     * @var string|null
     */
    private $qtelCodeMission;

    /**
     * Qtel code tache.
     *
     * @var string|null
     */
    private $qtelCodeTache;

    /**
     * Qtel special.
     *
     * @var int|null
     */
    private $qtelSpecial;

    /**
     * Rac data cpta.
     *
     * @var string|null
     */
    private $racDataCpta;

    /**
     * Rac data paie.
     *
     * @var string|null
     */
    private $racDataPaie;

    /**
     * Radical compte cli.
     *
     * @var string|null
     */
    private $radicalCompteCli;

    /**
     * Radical compte frn.
     *
     * @var string|null
     */
    private $radicalCompteFrn;

    /**
     * Sais date fin.
     *
     * @var bool|null
     */
    private $saisDateFin;

    /**
     * Tdfc adhesion totale.
     *
     * @var bool|null
     */
    private $tdfcAdhesionTotale;

    /**
     * Tdfc emetteur.
     *
     * @var string|null
     */
    private $tdfcEmetteur;

    /**
     * Tdfc facturant.
     *
     * @var string|null
     */
    private $tdfcFacturant;

    /**
     * Tdfc info trans.
     *
     * @var string|null
     */
    private $tdfcInfoTrans;

    /**
     * Tp interdit creat millesime.
     *
     * @var bool|null
     */
    private $tpInterditCreatMillesime;

    /**
     * Tp interdit creat mission.
     *
     * @var bool|null
     */
    private $tpInterditCreatMission;

    /**
     * Tp pas clients sortis.
     *
     * @var bool|null
     */
    private $tpPasClientsSortis;

    /**
     * Tp pas intervenants.
     *
     * @var bool|null
     */
    private $tpPasIntervenants;

    /**
     * Tp prix invisible.
     *
     * @var bool|null
     */
    private $tpPrixInvisible;

    /**
     * Tp rempli pref auto.
     *
     * @var bool|null
     */
    private $tpRempliPrefAuto;

    /**
     * Tp saisie dos.
     *
     * @var bool|null
     */
    private $tpSaisieDos;

    /**
     * Tps passes interdit prix.
     *
     * @var bool|null
     */
    private $tpsPassesInterditPrix;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the acces autorise bons travaux.
     *
     * @return bool|null Returns the acces autorise bons travaux.
     */
    public function getAccesAutoriseBonsTravaux(): ?bool {
        return $this->accesAutoriseBonsTravaux;
    }

    /**
     * Get the acces autorise plan facturation.
     *
     * @return bool|null Returns the acces autorise plan facturation.
     */
    public function getAccesAutorisePlanFacturation(): ?bool {
        return $this->accesAutorisePlanFacturation;
    }

    /**
     * Get the acces autorise plan tache.
     *
     * @return bool|null Returns the acces autorise plan tache.
     */
    public function getAccesAutorisePlanTache(): ?bool {
        return $this->accesAutorisePlanTache;
    }

    /**
     * Get the acces docs cab.
     *
     * @return bool|null Returns the acces docs cab.
     */
    public function getAccesDocsCab(): ?bool {
        return $this->accesDocsCab;
    }

    /**
     * Get the acces dossier cpta.
     *
     * @return string|null Returns the acces dossier cpta.
     */
    public function getAccesDossierCpta(): ?string {
        return $this->accesDossierCpta;
    }

    /**
     * Get the acces dossier paie.
     *
     * @return string|null Returns the acces dossier paie.
     */
    public function getAccesDossierPaie(): ?string {
        return $this->accesDossierPaie;
    }

    /**
     * Get the acces stat cab.
     *
     * @return bool|null Returns the acces stat cab.
     */
    public function getAccesStatCab(): ?bool {
        return $this->accesStatCab;
    }

    /**
     * Get the activation conf cmav cli.
     *
     * @return bool|null Returns the activation conf cmav cli.
     */
    public function getActivationConfCmavCli(): ?bool {
        return $this->activationConfCmavCli;
    }

    /**
     * Get the activation conf controle.
     *
     * @return bool|null Returns the activation conf controle.
     */
    public function getActivationConfControle(): ?bool {
        return $this->activationConfControle;
    }

    /**
     * Get the activation lst restri.
     *
     * @return bool|null Returns the activation lst restri.
     */
    public function getActivationLstRestri(): ?bool {
        return $this->activationLstRestri;
    }

    /**
     * Get the activation niveau2.
     *
     * @return bool|null Returns the activation niveau2.
     */
    public function getActivationNiveau2(): ?bool {
        return $this->activationNiveau2;
    }

    /**
     * Get the activation niveau3.
     *
     * @return bool|null Returns the activation niveau3.
     */
    public function getActivationNiveau3(): ?bool {
        return $this->activationNiveau3;
    }

    /**
     * Get the affiche point.
     *
     * @return bool|null Returns the affiche point.
     */
    public function getAffichePoint(): ?bool {
        return $this->affichePoint;
    }

    /**
     * Get the affiche semaine.
     *
     * @return bool|null Returns the affiche semaine.
     */
    public function getAfficheSemaine(): ?bool {
        return $this->afficheSemaine;
    }

    /**
     * Get the annulation affaire.
     *
     * @return bool|null Returns the annulation affaire.
     */
    public function getAnnulationAffaire(): ?bool {
        return $this->annulationAffaire;
    }

    /**
     * Get the annulation article.
     *
     * @return bool|null Returns the annulation article.
     */
    public function getAnnulationArticle(): ?bool {
        return $this->annulationArticle;
    }

    /**
     * Get the annulation bons travaux.
     *
     * @return bool|null Returns the annulation bons travaux.
     */
    public function getAnnulationBonsTravaux(): ?bool {
        return $this->annulationBonsTravaux;
    }

    /**
     * Get the annulation chantier.
     *
     * @return bool|null Returns the annulation chantier.
     */
    public function getAnnulationChantier(): ?bool {
        return $this->annulationChantier;
    }

    /**
     * Get the annulation client.
     *
     * @return bool|null Returns the annulation client.
     */
    public function getAnnulationClient(): ?bool {
        return $this->annulationClient;
    }

    /**
     * Get the annulation commission.
     *
     * @return bool|null Returns the annulation commission.
     */
    public function getAnnulationCommission(): ?bool {
        return $this->annulationCommission;
    }

    /**
     * Get the annulation dossier cpta.
     *
     * @return bool|null Returns the annulation dossier cpta.
     */
    public function getAnnulationDossierCpta(): ?bool {
        return $this->annulationDossierCpta;
    }

    /**
     * Get the annulation dossier fact.
     *
     * @return bool|null Returns the annulation dossier fact.
     */
    public function getAnnulationDossierFact(): ?bool {
        return $this->annulationDossierFact;
    }

    /**
     * Get the annulation dossier paie.
     *
     * @return bool|null Returns the annulation dossier paie.
     */
    public function getAnnulationDossierPaie(): ?bool {
        return $this->annulationDossierPaie;
    }

    /**
     * Get the annulation fournisseur.
     *
     * @return bool|null Returns the annulation fournisseur.
     */
    public function getAnnulationFournisseur(): ?bool {
        return $this->annulationFournisseur;
    }

    /**
     * Get the annulation plan facturation.
     *
     * @return bool|null Returns the annulation plan facturation.
     */
    public function getAnnulationPlanFacturation(): ?bool {
        return $this->annulationPlanFacturation;
    }

    /**
     * Get the annulation plan tache.
     *
     * @return bool|null Returns the annulation plan tache.
     */
    public function getAnnulationPlanTache(): ?bool {
        return $this->annulationPlanTache;
    }

    /**
     * Get the annulation tache.
     *
     * @return bool|null Returns the annulation tache.
     */
    public function getAnnulationTache(): ?bool {
        return $this->annulationTache;
    }

    /**
     * Get the annulation tarif.
     *
     * @return bool|null Returns the annulation tarif.
     */
    public function getAnnulationTarif(): ?bool {
        return $this->annulationTarif;
    }

    /**
     * Get the blocage ed cli.
     *
     * @return bool|null Returns the blocage ed cli.
     */
    public function getBlocageEdCli(): ?bool {
        return $this->blocageEdCli;
    }

    /**
     * Get the budget type saisie.
     *
     * @return int|null Returns the budget type saisie.
     */
    public function getBudgetTypeSaisie(): ?int {
        return $this->budgetTypeSaisie;
    }

    /**
     * Get the champs critere1.
     *
     * @return string|null Returns the champs critere1.
     */
    public function getChampsCritere1(): ?string {
        return $this->champsCritere1;
    }

    /**
     * Get the champs critere10.
     *
     * @return string|null Returns the champs critere10.
     */
    public function getChampsCritere10(): ?string {
        return $this->champsCritere10;
    }

    /**
     * Get the champs critere2.
     *
     * @return string|null Returns the champs critere2.
     */
    public function getChampsCritere2(): ?string {
        return $this->champsCritere2;
    }

    /**
     * Get the champs critere3.
     *
     * @return string|null Returns the champs critere3.
     */
    public function getChampsCritere3(): ?string {
        return $this->champsCritere3;
    }

    /**
     * Get the champs critere4.
     *
     * @return string|null Returns the champs critere4.
     */
    public function getChampsCritere4(): ?string {
        return $this->champsCritere4;
    }

    /**
     * Get the champs critere5.
     *
     * @return string|null Returns the champs critere5.
     */
    public function getChampsCritere5(): ?string {
        return $this->champsCritere5;
    }

    /**
     * Get the champs critere6.
     *
     * @return string|null Returns the champs critere6.
     */
    public function getChampsCritere6(): ?string {
        return $this->champsCritere6;
    }

    /**
     * Get the champs critere7.
     *
     * @return string|null Returns the champs critere7.
     */
    public function getChampsCritere7(): ?string {
        return $this->champsCritere7;
    }

    /**
     * Get the champs critere8.
     *
     * @return string|null Returns the champs critere8.
     */
    public function getChampsCritere8(): ?string {
        return $this->champsCritere8;
    }

    /**
     * Get the champs critere9.
     *
     * @return string|null Returns the champs critere9.
     */
    public function getChampsCritere9(): ?string {
        return $this->champsCritere9;
    }

    /**
     * Get the champs critere affaire1.
     *
     * @return string|null Returns the champs critere affaire1.
     */
    public function getChampsCritereAffaire1(): ?string {
        return $this->champsCritereAffaire1;
    }

    /**
     * Get the champs critere affaire10.
     *
     * @return string|null Returns the champs critere affaire10.
     */
    public function getChampsCritereAffaire10(): ?string {
        return $this->champsCritereAffaire10;
    }

    /**
     * Get the champs critere affaire2.
     *
     * @return string|null Returns the champs critere affaire2.
     */
    public function getChampsCritereAffaire2(): ?string {
        return $this->champsCritereAffaire2;
    }

    /**
     * Get the champs critere affaire3.
     *
     * @return string|null Returns the champs critere affaire3.
     */
    public function getChampsCritereAffaire3(): ?string {
        return $this->champsCritereAffaire3;
    }

    /**
     * Get the champs critere affaire4.
     *
     * @return string|null Returns the champs critere affaire4.
     */
    public function getChampsCritereAffaire4(): ?string {
        return $this->champsCritereAffaire4;
    }

    /**
     * Get the champs critere affaire5.
     *
     * @return string|null Returns the champs critere affaire5.
     */
    public function getChampsCritereAffaire5(): ?string {
        return $this->champsCritereAffaire5;
    }

    /**
     * Get the champs critere affaire6.
     *
     * @return string|null Returns the champs critere affaire6.
     */
    public function getChampsCritereAffaire6(): ?string {
        return $this->champsCritereAffaire6;
    }

    /**
     * Get the champs critere affaire7.
     *
     * @return string|null Returns the champs critere affaire7.
     */
    public function getChampsCritereAffaire7(): ?string {
        return $this->champsCritereAffaire7;
    }

    /**
     * Get the champs critere affaire8.
     *
     * @return string|null Returns the champs critere affaire8.
     */
    public function getChampsCritereAffaire8(): ?string {
        return $this->champsCritereAffaire8;
    }

    /**
     * Get the champs critere affaire9.
     *
     * @return string|null Returns the champs critere affaire9.
     */
    public function getChampsCritereAffaire9(): ?string {
        return $this->champsCritereAffaire9;
    }

    /**
     * Get the champs critere article1.
     *
     * @return string|null Returns the champs critere article1.
     */
    public function getChampsCritereArticle1(): ?string {
        return $this->champsCritereArticle1;
    }

    /**
     * Get the champs critere article10.
     *
     * @return string|null Returns the champs critere article10.
     */
    public function getChampsCritereArticle10(): ?string {
        return $this->champsCritereArticle10;
    }

    /**
     * Get the champs critere article2.
     *
     * @return string|null Returns the champs critere article2.
     */
    public function getChampsCritereArticle2(): ?string {
        return $this->champsCritereArticle2;
    }

    /**
     * Get the champs critere article3.
     *
     * @return string|null Returns the champs critere article3.
     */
    public function getChampsCritereArticle3(): ?string {
        return $this->champsCritereArticle3;
    }

    /**
     * Get the champs critere article4.
     *
     * @return string|null Returns the champs critere article4.
     */
    public function getChampsCritereArticle4(): ?string {
        return $this->champsCritereArticle4;
    }

    /**
     * Get the champs critere article5.
     *
     * @return string|null Returns the champs critere article5.
     */
    public function getChampsCritereArticle5(): ?string {
        return $this->champsCritereArticle5;
    }

    /**
     * Get the champs critere article6.
     *
     * @return string|null Returns the champs critere article6.
     */
    public function getChampsCritereArticle6(): ?string {
        return $this->champsCritereArticle6;
    }

    /**
     * Get the champs critere article7.
     *
     * @return string|null Returns the champs critere article7.
     */
    public function getChampsCritereArticle7(): ?string {
        return $this->champsCritereArticle7;
    }

    /**
     * Get the champs critere article8.
     *
     * @return string|null Returns the champs critere article8.
     */
    public function getChampsCritereArticle8(): ?string {
        return $this->champsCritereArticle8;
    }

    /**
     * Get the champs critere article9.
     *
     * @return string|null Returns the champs critere article9.
     */
    public function getChampsCritereArticle9(): ?string {
        return $this->champsCritereArticle9;
    }

    /**
     * Get the champs critere ent piece1.
     *
     * @return string|null Returns the champs critere ent piece1.
     */
    public function getChampsCritereEntPiece1(): ?string {
        return $this->champsCritereEntPiece1;
    }

    /**
     * Get the champs critere ent piece10.
     *
     * @return string|null Returns the champs critere ent piece10.
     */
    public function getChampsCritereEntPiece10(): ?string {
        return $this->champsCritereEntPiece10;
    }

    /**
     * Get the champs critere ent piece2.
     *
     * @return string|null Returns the champs critere ent piece2.
     */
    public function getChampsCritereEntPiece2(): ?string {
        return $this->champsCritereEntPiece2;
    }

    /**
     * Get the champs critere ent piece3.
     *
     * @return string|null Returns the champs critere ent piece3.
     */
    public function getChampsCritereEntPiece3(): ?string {
        return $this->champsCritereEntPiece3;
    }

    /**
     * Get the champs critere ent piece4.
     *
     * @return string|null Returns the champs critere ent piece4.
     */
    public function getChampsCritereEntPiece4(): ?string {
        return $this->champsCritereEntPiece4;
    }

    /**
     * Get the champs critere ent piece5.
     *
     * @return string|null Returns the champs critere ent piece5.
     */
    public function getChampsCritereEntPiece5(): ?string {
        return $this->champsCritereEntPiece5;
    }

    /**
     * Get the champs critere ent piece6.
     *
     * @return string|null Returns the champs critere ent piece6.
     */
    public function getChampsCritereEntPiece6(): ?string {
        return $this->champsCritereEntPiece6;
    }

    /**
     * Get the champs critere ent piece7.
     *
     * @return string|null Returns the champs critere ent piece7.
     */
    public function getChampsCritereEntPiece7(): ?string {
        return $this->champsCritereEntPiece7;
    }

    /**
     * Get the champs critere ent piece8.
     *
     * @return string|null Returns the champs critere ent piece8.
     */
    public function getChampsCritereEntPiece8(): ?string {
        return $this->champsCritereEntPiece8;
    }

    /**
     * Get the champs critere ent piece9.
     *
     * @return string|null Returns the champs critere ent piece9.
     */
    public function getChampsCritereEntPiece9(): ?string {
        return $this->champsCritereEntPiece9;
    }

    /**
     * Get the chrono activation.
     *
     * @return bool|null Returns the chrono activation.
     */
    public function getChronoActivation(): ?bool {
        return $this->chronoActivation;
    }

    /**
     * Get the chrono prefixe.
     *
     * @return string|null Returns the chrono prefixe.
     */
    public function getChronoPrefixe(): ?string {
        return $this->chronoPrefixe;
    }

    /**
     * Get the chrono prochain num.
     *
     * @return int|null Returns the chrono prochain num.
     */
    public function getChronoProchainNum(): ?int {
        return $this->chronoProchainNum;
    }

    /**
     * Get the cle acces cn paie.
     *
     * @return string|null Returns the cle acces cn paie.
     */
    public function getCleAccesCnPaie(): ?string {
        return $this->cleAccesCnPaie;
    }

    /**
     * Get the cle acces fiche client.
     *
     * @return string|null Returns the cle acces fiche client.
     */
    public function getCleAccesFicheClient(): ?string {
        return $this->cleAccesFicheClient;
    }

    /**
     * Get the cle acces menus.
     *
     * @return string|null Returns the cle acces menus.
     */
    public function getCleAccesMenus(): ?string {
        return $this->cleAccesMenus;
    }

    /**
     * Get the cle acces param.
     *
     * @return string|null Returns the cle acces param.
     */
    public function getCleAccesParam(): ?string {
        return $this->cleAccesParam;
    }

    /**
     * Get the cle des etr communs.
     *
     * @return string|null Returns the cle des etr communs.
     */
    public function getCleDesEtrCommuns(): ?string {
        return $this->cleDesEtrCommuns;
    }

    /**
     * Get the cle jrn lib communs.
     *
     * @return string|null Returns the cle jrn lib communs.
     */
    public function getCleJrnLibCommuns(): ?string {
        return $this->cleJrnLibCommuns;
    }

    /**
     * Get the code emetteur.
     *
     * @return string|null Returns the code emetteur.
     */
    public function getCodeEmetteur(): ?string {
        return $this->codeEmetteur;
    }

    /**
     * Get the code expert defaut.
     *
     * @return string|null Returns the code expert defaut.
     */
    public function getCodeExpertDefaut(): ?string {
        return $this->codeExpertDefaut;
    }

    /**
     * Get the code regroupement pre fact.
     *
     * @return string|null Returns the code regroupement pre fact.
     */
    public function getCodeRegroupementPreFact(): ?string {
        return $this->codeRegroupementPreFact;
    }

    /**
     * Get the conversion pwd.
     *
     * @return bool|null Returns the conversion pwd.
     */
    public function getConversionPwd(): ?bool {
        return $this->conversionPwd;
    }

    /**
     * Get the cpte collectif cli.
     *
     * @return string|null Returns the cpte collectif cli.
     */
    public function getCpteCollectifCli(): ?string {
        return $this->cpteCollectifCli;
    }

    /**
     * Get the cpte collectif frn.
     *
     * @return string|null Returns the cpte collectif frn.
     */
    public function getCpteCollectifFrn(): ?string {
        return $this->cpteCollectifFrn;
    }

    /**
     * Get the creation affaire.
     *
     * @return bool|null Returns the creation affaire.
     */
    public function getCreationAffaire(): ?bool {
        return $this->creationAffaire;
    }

    /**
     * Get the creation article.
     *
     * @return bool|null Returns the creation article.
     */
    public function getCreationArticle(): ?bool {
        return $this->creationArticle;
    }

    /**
     * Get the creation bons travaux.
     *
     * @return bool|null Returns the creation bons travaux.
     */
    public function getCreationBonsTravaux(): ?bool {
        return $this->creationBonsTravaux;
    }

    /**
     * Get the creation chantier.
     *
     * @return bool|null Returns the creation chantier.
     */
    public function getCreationChantier(): ?bool {
        return $this->creationChantier;
    }

    /**
     * Get the creation client.
     *
     * @return bool|null Returns the creation client.
     */
    public function getCreationClient(): ?bool {
        return $this->creationClient;
    }

    /**
     * Get the creation commission.
     *
     * @return bool|null Returns the creation commission.
     */
    public function getCreationCommission(): ?bool {
        return $this->creationCommission;
    }

    /**
     * Get the creation dossier cpta.
     *
     * @return bool|null Returns the creation dossier cpta.
     */
    public function getCreationDossierCpta(): ?bool {
        return $this->creationDossierCpta;
    }

    /**
     * Get the creation dossier fact.
     *
     * @return bool|null Returns the creation dossier fact.
     */
    public function getCreationDossierFact(): ?bool {
        return $this->creationDossierFact;
    }

    /**
     * Get the creation dossier paie.
     *
     * @return bool|null Returns the creation dossier paie.
     */
    public function getCreationDossierPaie(): ?bool {
        return $this->creationDossierPaie;
    }

    /**
     * Get the creation fournisseur.
     *
     * @return bool|null Returns the creation fournisseur.
     */
    public function getCreationFournisseur(): ?bool {
        return $this->creationFournisseur;
    }

    /**
     * Get the creation plan facturation.
     *
     * @return bool|null Returns the creation plan facturation.
     */
    public function getCreationPlanFacturation(): ?bool {
        return $this->creationPlanFacturation;
    }

    /**
     * Get the creation plan tache.
     *
     * @return bool|null Returns the creation plan tache.
     */
    public function getCreationPlanTache(): ?bool {
        return $this->creationPlanTache;
    }

    /**
     * Get the creation prospect.
     *
     * @return bool|null Returns the creation prospect.
     */
    public function getCreationProspect(): ?bool {
        return $this->creationProspect;
    }

    /**
     * Get the creation tache.
     *
     * @return bool|null Returns the creation tache.
     */
    public function getCreationTache(): ?bool {
        return $this->creationTache;
    }

    /**
     * Get the creation tarif.
     *
     * @return bool|null Returns the creation tarif.
     */
    public function getCreationTarif(): ?bool {
        return $this->creationTarif;
    }

    /**
     * Get the date cloture.
     *
     * @return DateTime|null Returns the date cloture.
     */
    public function getDateCloture(): ?DateTime {
        return $this->dateCloture;
    }

    /**
     * Get the dt dern modif conf zone.
     *
     * @return DateTime|null Returns the dt dern modif conf zone.
     */
    public function getDtDernModifConfZone(): ?DateTime {
        return $this->dtDernModifConfZone;
    }

    /**
     * Get the ech aff en mt.
     *
     * @return bool|null Returns the ech aff en mt.
     */
    public function getEchAffEnMt(): ?bool {
        return $this->echAffEnMt;
    }

    /**
     * Get the fonctionnement cga.
     *
     * @return bool|null Returns the fonctionnement cga.
     */
    public function getFonctionnementCga(): ?bool {
        return $this->fonctionnementCga;
    }

    /**
     * Get the heures trav1.
     *
     * @return float|null Returns the heures trav1.
     */
    public function getHeuresTrav1(): ?float {
        return $this->heuresTrav1;
    }

    /**
     * Get the heures trav2.
     *
     * @return float|null Returns the heures trav2.
     */
    public function getHeuresTrav2(): ?float {
        return $this->heuresTrav2;
    }

    /**
     * Get the heures trav3.
     *
     * @return float|null Returns the heures trav3.
     */
    public function getHeuresTrav3(): ?float {
        return $this->heuresTrav3;
    }

    /**
     * Get the heures trav4.
     *
     * @return float|null Returns the heures trav4.
     */
    public function getHeuresTrav4(): ?float {
        return $this->heuresTrav4;
    }

    /**
     * Get the increm auto.
     *
     * @return bool|null Returns the increm auto.
     */
    public function getIncremAuto(): ?bool {
        return $this->incremAuto;
    }

    /**
     * Get the increm auto aff.
     *
     * @return bool|null Returns the increm auto aff.
     */
    public function getIncremAutoAff(): ?bool {
        return $this->incremAutoAff;
    }

    /**
     * Get the increm auto frn.
     *
     * @return bool|null Returns the increm auto frn.
     */
    public function getIncremAutoFrn(): ?bool {
        return $this->incremAutoFrn;
    }

    /**
     * Get the increm cpte cli auto.
     *
     * @return bool|null Returns the increm cpte cli auto.
     */
    public function getIncremCpteCliAuto(): ?bool {
        return $this->incremCpteCliAuto;
    }

    /**
     * Get the increm cpte frn auto.
     *
     * @return bool|null Returns the increm cpte frn auto.
     */
    public function getIncremCpteFrnAuto(): ?bool {
        return $this->incremCpteFrnAuto;
    }

    /**
     * Get the increment cpte cli.
     *
     * @return int|null Returns the increment cpte cli.
     */
    public function getIncrementCpteCli(): ?int {
        return $this->incrementCpteCli;
    }

    /**
     * Get the increment cpte frn.
     *
     * @return int|null Returns the increment cpte frn.
     */
    public function getIncrementCpteFrn(): ?int {
        return $this->incrementCpteFrn;
    }

    /**
     * Get the liaison bu cpta.
     *
     * @return bool|null Returns the liaison bu cpta.
     */
    public function getLiaisonBuCpta(): ?bool {
        return $this->liaisonBuCpta;
    }

    /**
     * Get the lib affectation1.
     *
     * @return string|null Returns the lib affectation1.
     */
    public function getLibAffectation1(): ?string {
        return $this->libAffectation1;
    }

    /**
     * Get the lib affectation2.
     *
     * @return string|null Returns the lib affectation2.
     */
    public function getLibAffectation2(): ?string {
        return $this->libAffectation2;
    }

    /**
     * Get the lib affectation3.
     *
     * @return string|null Returns the lib affectation3.
     */
    public function getLibAffectation3(): ?string {
        return $this->libAffectation3;
    }

    /**
     * Get the lib affectation4.
     *
     * @return string|null Returns the lib affectation4.
     */
    public function getLibAffectation4(): ?string {
        return $this->libAffectation4;
    }

    /**
     * Get the lib affectation5.
     *
     * @return string|null Returns the lib affectation5.
     */
    public function getLibAffectation5(): ?string {
        return $this->libAffectation5;
    }

    /**
     * Get the lib affectation6.
     *
     * @return string|null Returns the lib affectation6.
     */
    public function getLibAffectation6(): ?string {
        return $this->libAffectation6;
    }

    /**
     * Get the lib affectation7.
     *
     * @return string|null Returns the lib affectation7.
     */
    public function getLibAffectation7(): ?string {
        return $this->libAffectation7;
    }

    /**
     * Get the lib critere1.
     *
     * @return string|null Returns the lib critere1.
     */
    public function getLibCritere1(): ?string {
        return $this->libCritere1;
    }

    /**
     * Get the lib critere10.
     *
     * @return string|null Returns the lib critere10.
     */
    public function getLibCritere10(): ?string {
        return $this->libCritere10;
    }

    /**
     * Get the lib critere2.
     *
     * @return string|null Returns the lib critere2.
     */
    public function getLibCritere2(): ?string {
        return $this->libCritere2;
    }

    /**
     * Get the lib critere3.
     *
     * @return string|null Returns the lib critere3.
     */
    public function getLibCritere3(): ?string {
        return $this->libCritere3;
    }

    /**
     * Get the lib critere4.
     *
     * @return string|null Returns the lib critere4.
     */
    public function getLibCritere4(): ?string {
        return $this->libCritere4;
    }

    /**
     * Get the lib critere5.
     *
     * @return string|null Returns the lib critere5.
     */
    public function getLibCritere5(): ?string {
        return $this->libCritere5;
    }

    /**
     * Get the lib critere6.
     *
     * @return string|null Returns the lib critere6.
     */
    public function getLibCritere6(): ?string {
        return $this->libCritere6;
    }

    /**
     * Get the lib critere7.
     *
     * @return string|null Returns the lib critere7.
     */
    public function getLibCritere7(): ?string {
        return $this->libCritere7;
    }

    /**
     * Get the lib critere8.
     *
     * @return string|null Returns the lib critere8.
     */
    public function getLibCritere8(): ?string {
        return $this->libCritere8;
    }

    /**
     * Get the lib critere9.
     *
     * @return string|null Returns the lib critere9.
     */
    public function getLibCritere9(): ?string {
        return $this->libCritere9;
    }

    /**
     * Get the lib critere affaire1.
     *
     * @return string|null Returns the lib critere affaire1.
     */
    public function getLibCritereAffaire1(): ?string {
        return $this->libCritereAffaire1;
    }

    /**
     * Get the lib critere affaire10.
     *
     * @return string|null Returns the lib critere affaire10.
     */
    public function getLibCritereAffaire10(): ?string {
        return $this->libCritereAffaire10;
    }

    /**
     * Get the lib critere affaire2.
     *
     * @return string|null Returns the lib critere affaire2.
     */
    public function getLibCritereAffaire2(): ?string {
        return $this->libCritereAffaire2;
    }

    /**
     * Get the lib critere affaire3.
     *
     * @return string|null Returns the lib critere affaire3.
     */
    public function getLibCritereAffaire3(): ?string {
        return $this->libCritereAffaire3;
    }

    /**
     * Get the lib critere affaire4.
     *
     * @return string|null Returns the lib critere affaire4.
     */
    public function getLibCritereAffaire4(): ?string {
        return $this->libCritereAffaire4;
    }

    /**
     * Get the lib critere affaire5.
     *
     * @return string|null Returns the lib critere affaire5.
     */
    public function getLibCritereAffaire5(): ?string {
        return $this->libCritereAffaire5;
    }

    /**
     * Get the lib critere affaire6.
     *
     * @return string|null Returns the lib critere affaire6.
     */
    public function getLibCritereAffaire6(): ?string {
        return $this->libCritereAffaire6;
    }

    /**
     * Get the lib critere affaire7.
     *
     * @return string|null Returns the lib critere affaire7.
     */
    public function getLibCritereAffaire7(): ?string {
        return $this->libCritereAffaire7;
    }

    /**
     * Get the lib critere affaire8.
     *
     * @return string|null Returns the lib critere affaire8.
     */
    public function getLibCritereAffaire8(): ?string {
        return $this->libCritereAffaire8;
    }

    /**
     * Get the lib critere affaire9.
     *
     * @return string|null Returns the lib critere affaire9.
     */
    public function getLibCritereAffaire9(): ?string {
        return $this->libCritereAffaire9;
    }

    /**
     * Get the lib critere article1.
     *
     * @return string|null Returns the lib critere article1.
     */
    public function getLibCritereArticle1(): ?string {
        return $this->libCritereArticle1;
    }

    /**
     * Get the lib critere article10.
     *
     * @return string|null Returns the lib critere article10.
     */
    public function getLibCritereArticle10(): ?string {
        return $this->libCritereArticle10;
    }

    /**
     * Get the lib critere article2.
     *
     * @return string|null Returns the lib critere article2.
     */
    public function getLibCritereArticle2(): ?string {
        return $this->libCritereArticle2;
    }

    /**
     * Get the lib critere article3.
     *
     * @return string|null Returns the lib critere article3.
     */
    public function getLibCritereArticle3(): ?string {
        return $this->libCritereArticle3;
    }

    /**
     * Get the lib critere article4.
     *
     * @return string|null Returns the lib critere article4.
     */
    public function getLibCritereArticle4(): ?string {
        return $this->libCritereArticle4;
    }

    /**
     * Get the lib critere article5.
     *
     * @return string|null Returns the lib critere article5.
     */
    public function getLibCritereArticle5(): ?string {
        return $this->libCritereArticle5;
    }

    /**
     * Get the lib critere article6.
     *
     * @return string|null Returns the lib critere article6.
     */
    public function getLibCritereArticle6(): ?string {
        return $this->libCritereArticle6;
    }

    /**
     * Get the lib critere article7.
     *
     * @return string|null Returns the lib critere article7.
     */
    public function getLibCritereArticle7(): ?string {
        return $this->libCritereArticle7;
    }

    /**
     * Get the lib critere article8.
     *
     * @return string|null Returns the lib critere article8.
     */
    public function getLibCritereArticle8(): ?string {
        return $this->libCritereArticle8;
    }

    /**
     * Get the lib critere article9.
     *
     * @return string|null Returns the lib critere article9.
     */
    public function getLibCritereArticle9(): ?string {
        return $this->libCritereArticle9;
    }

    /**
     * Get the lib critere ent piece1.
     *
     * @return string|null Returns the lib critere ent piece1.
     */
    public function getLibCritereEntPiece1(): ?string {
        return $this->libCritereEntPiece1;
    }

    /**
     * Get the lib critere ent piece10.
     *
     * @return string|null Returns the lib critere ent piece10.
     */
    public function getLibCritereEntPiece10(): ?string {
        return $this->libCritereEntPiece10;
    }

    /**
     * Get the lib critere ent piece2.
     *
     * @return string|null Returns the lib critere ent piece2.
     */
    public function getLibCritereEntPiece2(): ?string {
        return $this->libCritereEntPiece2;
    }

    /**
     * Get the lib critere ent piece3.
     *
     * @return string|null Returns the lib critere ent piece3.
     */
    public function getLibCritereEntPiece3(): ?string {
        return $this->libCritereEntPiece3;
    }

    /**
     * Get the lib critere ent piece4.
     *
     * @return string|null Returns the lib critere ent piece4.
     */
    public function getLibCritereEntPiece4(): ?string {
        return $this->libCritereEntPiece4;
    }

    /**
     * Get the lib critere ent piece5.
     *
     * @return string|null Returns the lib critere ent piece5.
     */
    public function getLibCritereEntPiece5(): ?string {
        return $this->libCritereEntPiece5;
    }

    /**
     * Get the lib critere ent piece6.
     *
     * @return string|null Returns the lib critere ent piece6.
     */
    public function getLibCritereEntPiece6(): ?string {
        return $this->libCritereEntPiece6;
    }

    /**
     * Get the lib critere ent piece7.
     *
     * @return string|null Returns the lib critere ent piece7.
     */
    public function getLibCritereEntPiece7(): ?string {
        return $this->libCritereEntPiece7;
    }

    /**
     * Get the lib critere ent piece8.
     *
     * @return string|null Returns the lib critere ent piece8.
     */
    public function getLibCritereEntPiece8(): ?string {
        return $this->libCritereEntPiece8;
    }

    /**
     * Get the lib critere ent piece9.
     *
     * @return string|null Returns the lib critere ent piece9.
     */
    public function getLibCritereEntPiece9(): ?string {
        return $this->libCritereEntPiece9;
    }

    /**
     * Get the lib critere interloc.
     *
     * @return string|null Returns the lib critere interloc.
     */
    public function getLibCritereInterloc(): ?string {
        return $this->libCritereInterloc;
    }

    /**
     * Get the lib critere interloc2.
     *
     * @return string|null Returns the lib critere interloc2.
     */
    public function getLibCritereInterloc2(): ?string {
        return $this->libCritereInterloc2;
    }

    /**
     * Get the major heures trav1.
     *
     * @return float|null Returns the major heures trav1.
     */
    public function getMajorHeuresTrav1(): ?float {
        return $this->majorHeuresTrav1;
    }

    /**
     * Get the major heures trav2.
     *
     * @return float|null Returns the major heures trav2.
     */
    public function getMajorHeuresTrav2(): ?float {
        return $this->majorHeuresTrav2;
    }

    /**
     * Get the major heures trav3.
     *
     * @return float|null Returns the major heures trav3.
     */
    public function getMajorHeuresTrav3(): ?float {
        return $this->majorHeuresTrav3;
    }

    /**
     * Get the major heures trav4.
     *
     * @return float|null Returns the major heures trav4.
     */
    public function getMajorHeuresTrav4(): ?float {
        return $this->majorHeuresTrav4;
    }

    /**
     * Get the mnt ticket resto a.
     *
     * @return float|null Returns the mnt ticket resto a.
     */
    public function getMntTicketRestoA(): ?float {
        return $this->mntTicketRestoA;
    }

    /**
     * Get the mnt ticket resto b.
     *
     * @return float|null Returns the mnt ticket resto b.
     */
    public function getMntTicketRestoB(): ?float {
        return $this->mntTicketRestoB;
    }

    /**
     * Get the mnt ticket resto c.
     *
     * @return float|null Returns the mnt ticket resto c.
     */
    public function getMntTicketRestoC(): ?float {
        return $this->mntTicketRestoC;
    }

    /**
     * Get the mnt ticket resto d.
     *
     * @return float|null Returns the mnt ticket resto d.
     */
    public function getMntTicketRestoD(): ?float {
        return $this->mntTicketRestoD;
    }

    /**
     * Get the mnt ticket resto e.
     *
     * @return float|null Returns the mnt ticket resto e.
     */
    public function getMntTicketRestoE(): ?float {
        return $this->mntTicketRestoE;
    }

    /**
     * Get the modif affaire.
     *
     * @return string|null Returns the modif affaire.
     */
    public function getModifAffaire(): ?string {
        return $this->modifAffaire;
    }

    /**
     * Get the modif article.
     *
     * @return string|null Returns the modif article.
     */
    public function getModifArticle(): ?string {
        return $this->modifArticle;
    }

    /**
     * Get the modif bons travaux.
     *
     * @return string|null Returns the modif bons travaux.
     */
    public function getModifBonsTravaux(): ?string {
        return $this->modifBonsTravaux;
    }

    /**
     * Get the modif chantier.
     *
     * @return string|null Returns the modif chantier.
     */
    public function getModifChantier(): ?string {
        return $this->modifChantier;
    }

    /**
     * Get the modif client.
     *
     * @return string|null Returns the modif client.
     */
    public function getModifClient(): ?string {
        return $this->modifClient;
    }

    /**
     * Get the modif commission.
     *
     * @return string|null Returns the modif commission.
     */
    public function getModifCommission(): ?string {
        return $this->modifCommission;
    }

    /**
     * Get the modif dossier fact.
     *
     * @return string|null Returns the modif dossier fact.
     */
    public function getModifDossierFact(): ?string {
        return $this->modifDossierFact;
    }

    /**
     * Get the modif fournisseur.
     *
     * @return string|null Returns the modif fournisseur.
     */
    public function getModifFournisseur(): ?string {
        return $this->modifFournisseur;
    }

    /**
     * Get the modif plan facturation.
     *
     * @return string|null Returns the modif plan facturation.
     */
    public function getModifPlanFacturation(): ?string {
        return $this->modifPlanFacturation;
    }

    /**
     * Get the modif plan tache.
     *
     * @return string|null Returns the modif plan tache.
     */
    public function getModifPlanTache(): ?string {
        return $this->modifPlanTache;
    }

    /**
     * Get the modif tache.
     *
     * @return string|null Returns the modif tache.
     */
    public function getModifTache(): ?string {
        return $this->modifTache;
    }

    /**
     * Get the modif tarif.
     *
     * @return string|null Returns the modif tarif.
     */
    public function getModifTarif(): ?string {
        return $this->modifTarif;
    }

    /**
     * Get the monnaie.
     *
     * @return string|null Returns the monnaie.
     */
    public function getMonnaie(): ?string {
        return $this->monnaie;
    }

    /**
     * Get the nb dec monnaie.
     *
     * @return int|null Returns the nb dec monnaie.
     */
    public function getNbDecMonnaie(): ?int {
        return $this->nbDecMonnaie;
    }

    /**
     * Get the no doss cpta.
     *
     * @return string|null Returns the no doss cpta.
     */
    public function getNoDossCpta(): ?string {
        return $this->noDossCpta;
    }

    /**
     * Get the no doss paie.
     *
     * @return string|null Returns the no doss paie.
     */
    public function getNoDossPaie(): ?string {
        return $this->noDossPaie;
    }

    /**
     * Get the prefixe aff.
     *
     * @return string|null Returns the prefixe aff.
     */
    public function getPrefixeAff(): ?string {
        return $this->prefixeAff;
    }

    /**
     * Get the priorite saisie aff.
     *
     * @return int|null Returns the priorite saisie aff.
     */
    public function getPrioriteSaisieAff(): ?int {
        return $this->prioriteSaisieAff;
    }

    /**
     * Get the priorite saisie client.
     *
     * @return int|null Returns the priorite saisie client.
     */
    public function getPrioriteSaisieClient(): ?int {
        return $this->prioriteSaisieClient;
    }

    /**
     * Get the priorite saisie frn.
     *
     * @return int|null Returns the priorite saisie frn.
     */
    public function getPrioriteSaisieFrn(): ?int {
        return $this->prioriteSaisieFrn;
    }

    /**
     * Get the prochain cpte cli.
     *
     * @return string|null Returns the prochain cpte cli.
     */
    public function getProchainCpteCli(): ?string {
        return $this->prochainCpteCli;
    }

    /**
     * Get the prochain cpte frn.
     *
     * @return string|null Returns the prochain cpte frn.
     */
    public function getProchainCpteFrn(): ?string {
        return $this->prochainCpteFrn;
    }

    /**
     * Get the prochain mois oblig.
     *
     * @return DateTime|null Returns the prochain mois oblig.
     */
    public function getProchainMoisOblig(): ?DateTime {
        return $this->prochainMoisOblig;
    }

    /**
     * Get the prochain num aff.
     *
     * @return int|null Returns the prochain num aff.
     */
    public function getProchainNumAff(): ?int {
        return $this->prochainNumAff;
    }

    /**
     * Get the px km a.
     *
     * @return float|null Returns the px km a.
     */
    public function getPxKmA(): ?float {
        return $this->pxKmA;
    }

    /**
     * Get the px km b.
     *
     * @return float|null Returns the px km b.
     */
    public function getPxKmB(): ?float {
        return $this->pxKmB;
    }

    /**
     * Get the px km c.
     *
     * @return float|null Returns the px km c.
     */
    public function getPxKmC(): ?float {
        return $this->pxKmC;
    }

    /**
     * Get the px km d.
     *
     * @return float|null Returns the px km d.
     */
    public function getPxKmD(): ?float {
        return $this->pxKmD;
    }

    /**
     * Get the px km e.
     *
     * @return float|null Returns the px km e.
     */
    public function getPxKmE(): ?float {
        return $this->pxKmE;
    }

    /**
     * Get the qet code collaborateur dest.
     *
     * @return string|null Returns the qet code collaborateur dest.
     */
    public function getQetCodeCollaborateurDest(): ?string {
        return $this->qetCodeCollaborateurDest;
    }

    /**
     * Get the qtel code mission.
     *
     * @return string|null Returns the qtel code mission.
     */
    public function getQtelCodeMission(): ?string {
        return $this->qtelCodeMission;
    }

    /**
     * Get the qtel code tache.
     *
     * @return string|null Returns the qtel code tache.
     */
    public function getQtelCodeTache(): ?string {
        return $this->qtelCodeTache;
    }

    /**
     * Get the qtel special.
     *
     * @return int|null Returns the qtel special.
     */
    public function getQtelSpecial(): ?int {
        return $this->qtelSpecial;
    }

    /**
     * Get the rac data cpta.
     *
     * @return string|null Returns the rac data cpta.
     */
    public function getRacDataCpta(): ?string {
        return $this->racDataCpta;
    }

    /**
     * Get the rac data paie.
     *
     * @return string|null Returns the rac data paie.
     */
    public function getRacDataPaie(): ?string {
        return $this->racDataPaie;
    }

    /**
     * Get the radical compte cli.
     *
     * @return string|null Returns the radical compte cli.
     */
    public function getRadicalCompteCli(): ?string {
        return $this->radicalCompteCli;
    }

    /**
     * Get the radical compte frn.
     *
     * @return string|null Returns the radical compte frn.
     */
    public function getRadicalCompteFrn(): ?string {
        return $this->radicalCompteFrn;
    }

    /**
     * Get the sais date fin.
     *
     * @return bool|null Returns the sais date fin.
     */
    public function getSaisDateFin(): ?bool {
        return $this->saisDateFin;
    }

    /**
     * Get the tdfc adhesion totale.
     *
     * @return bool|null Returns the tdfc adhesion totale.
     */
    public function getTdfcAdhesionTotale(): ?bool {
        return $this->tdfcAdhesionTotale;
    }

    /**
     * Get the tdfc emetteur.
     *
     * @return string|null Returns the tdfc emetteur.
     */
    public function getTdfcEmetteur(): ?string {
        return $this->tdfcEmetteur;
    }

    /**
     * Get the tdfc facturant.
     *
     * @return string|null Returns the tdfc facturant.
     */
    public function getTdfcFacturant(): ?string {
        return $this->tdfcFacturant;
    }

    /**
     * Get the tdfc info trans.
     *
     * @return string|null Returns the tdfc info trans.
     */
    public function getTdfcInfoTrans(): ?string {
        return $this->tdfcInfoTrans;
    }

    /**
     * Get the tp interdit creat millesime.
     *
     * @return bool|null Returns the tp interdit creat millesime.
     */
    public function getTpInterditCreatMillesime(): ?bool {
        return $this->tpInterditCreatMillesime;
    }

    /**
     * Get the tp interdit creat mission.
     *
     * @return bool|null Returns the tp interdit creat mission.
     */
    public function getTpInterditCreatMission(): ?bool {
        return $this->tpInterditCreatMission;
    }

    /**
     * Get the tp pas clients sortis.
     *
     * @return bool|null Returns the tp pas clients sortis.
     */
    public function getTpPasClientsSortis(): ?bool {
        return $this->tpPasClientsSortis;
    }

    /**
     * Get the tp pas intervenants.
     *
     * @return bool|null Returns the tp pas intervenants.
     */
    public function getTpPasIntervenants(): ?bool {
        return $this->tpPasIntervenants;
    }

    /**
     * Get the tp prix invisible.
     *
     * @return bool|null Returns the tp prix invisible.
     */
    public function getTpPrixInvisible(): ?bool {
        return $this->tpPrixInvisible;
    }

    /**
     * Get the tp rempli pref auto.
     *
     * @return bool|null Returns the tp rempli pref auto.
     */
    public function getTpRempliPrefAuto(): ?bool {
        return $this->tpRempliPrefAuto;
    }

    /**
     * Get the tp saisie dos.
     *
     * @return bool|null Returns the tp saisie dos.
     */
    public function getTpSaisieDos(): ?bool {
        return $this->tpSaisieDos;
    }

    /**
     * Get the tps passes interdit prix.
     *
     * @return bool|null Returns the tps passes interdit prix.
     */
    public function getTpsPassesInterditPrix(): ?bool {
        return $this->tpsPassesInterditPrix;
    }

    /**
     * Set the acces autorise bons travaux.
     *
     * @param bool|null $accesAutoriseBonsTravaux The acces autorise bons travaux.
     * @return Constantes Returns this Constantes.
     */
    public function setAccesAutoriseBonsTravaux(?bool $accesAutoriseBonsTravaux): Constantes {
        $this->accesAutoriseBonsTravaux = $accesAutoriseBonsTravaux;
        return $this;
    }

    /**
     * Set the acces autorise plan facturation.
     *
     * @param bool|null $accesAutorisePlanFacturation The acces autorise plan facturation.
     * @return Constantes Returns this Constantes.
     */
    public function setAccesAutorisePlanFacturation(?bool $accesAutorisePlanFacturation): Constantes {
        $this->accesAutorisePlanFacturation = $accesAutorisePlanFacturation;
        return $this;
    }

    /**
     * Set the acces autorise plan tache.
     *
     * @param bool|null $accesAutorisePlanTache The acces autorise plan tache.
     * @return Constantes Returns this Constantes.
     */
    public function setAccesAutorisePlanTache(?bool $accesAutorisePlanTache): Constantes {
        $this->accesAutorisePlanTache = $accesAutorisePlanTache;
        return $this;
    }

    /**
     * Set the acces docs cab.
     *
     * @param bool|null $accesDocsCab The acces docs cab.
     * @return Constantes Returns this Constantes.
     */
    public function setAccesDocsCab(?bool $accesDocsCab): Constantes {
        $this->accesDocsCab = $accesDocsCab;
        return $this;
    }

    /**
     * Set the acces dossier cpta.
     *
     * @param string|null $accesDossierCpta The acces dossier cpta.
     * @return Constantes Returns this Constantes.
     */
    public function setAccesDossierCpta(?string $accesDossierCpta): Constantes {
        $this->accesDossierCpta = $accesDossierCpta;
        return $this;
    }

    /**
     * Set the acces dossier paie.
     *
     * @param string|null $accesDossierPaie The acces dossier paie.
     * @return Constantes Returns this Constantes.
     */
    public function setAccesDossierPaie(?string $accesDossierPaie): Constantes {
        $this->accesDossierPaie = $accesDossierPaie;
        return $this;
    }

    /**
     * Set the acces stat cab.
     *
     * @param bool|null $accesStatCab The acces stat cab.
     * @return Constantes Returns this Constantes.
     */
    public function setAccesStatCab(?bool $accesStatCab): Constantes {
        $this->accesStatCab = $accesStatCab;
        return $this;
    }

    /**
     * Set the activation conf cmav cli.
     *
     * @param bool|null $activationConfCmavCli The activation conf cmav cli.
     * @return Constantes Returns this Constantes.
     */
    public function setActivationConfCmavCli(?bool $activationConfCmavCli): Constantes {
        $this->activationConfCmavCli = $activationConfCmavCli;
        return $this;
    }

    /**
     * Set the activation conf controle.
     *
     * @param bool|null $activationConfControle The activation conf controle.
     * @return Constantes Returns this Constantes.
     */
    public function setActivationConfControle(?bool $activationConfControle): Constantes {
        $this->activationConfControle = $activationConfControle;
        return $this;
    }

    /**
     * Set the activation lst restri.
     *
     * @param bool|null $activationLstRestri The activation lst restri.
     * @return Constantes Returns this Constantes.
     */
    public function setActivationLstRestri(?bool $activationLstRestri): Constantes {
        $this->activationLstRestri = $activationLstRestri;
        return $this;
    }

    /**
     * Set the activation niveau2.
     *
     * @param bool|null $activationNiveau2 The activation niveau2.
     * @return Constantes Returns this Constantes.
     */
    public function setActivationNiveau2(?bool $activationNiveau2): Constantes {
        $this->activationNiveau2 = $activationNiveau2;
        return $this;
    }

    /**
     * Set the activation niveau3.
     *
     * @param bool|null $activationNiveau3 The activation niveau3.
     * @return Constantes Returns this Constantes.
     */
    public function setActivationNiveau3(?bool $activationNiveau3): Constantes {
        $this->activationNiveau3 = $activationNiveau3;
        return $this;
    }

    /**
     * Set the affiche point.
     *
     * @param bool|null $affichePoint The affiche point.
     * @return Constantes Returns this Constantes.
     */
    public function setAffichePoint(?bool $affichePoint): Constantes {
        $this->affichePoint = $affichePoint;
        return $this;
    }

    /**
     * Set the affiche semaine.
     *
     * @param bool|null $afficheSemaine The affiche semaine.
     * @return Constantes Returns this Constantes.
     */
    public function setAfficheSemaine(?bool $afficheSemaine): Constantes {
        $this->afficheSemaine = $afficheSemaine;
        return $this;
    }

    /**
     * Set the annulation affaire.
     *
     * @param bool|null $annulationAffaire The annulation affaire.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationAffaire(?bool $annulationAffaire): Constantes {
        $this->annulationAffaire = $annulationAffaire;
        return $this;
    }

    /**
     * Set the annulation article.
     *
     * @param bool|null $annulationArticle The annulation article.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationArticle(?bool $annulationArticle): Constantes {
        $this->annulationArticle = $annulationArticle;
        return $this;
    }

    /**
     * Set the annulation bons travaux.
     *
     * @param bool|null $annulationBonsTravaux The annulation bons travaux.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationBonsTravaux(?bool $annulationBonsTravaux): Constantes {
        $this->annulationBonsTravaux = $annulationBonsTravaux;
        return $this;
    }

    /**
     * Set the annulation chantier.
     *
     * @param bool|null $annulationChantier The annulation chantier.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationChantier(?bool $annulationChantier): Constantes {
        $this->annulationChantier = $annulationChantier;
        return $this;
    }

    /**
     * Set the annulation client.
     *
     * @param bool|null $annulationClient The annulation client.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationClient(?bool $annulationClient): Constantes {
        $this->annulationClient = $annulationClient;
        return $this;
    }

    /**
     * Set the annulation commission.
     *
     * @param bool|null $annulationCommission The annulation commission.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationCommission(?bool $annulationCommission): Constantes {
        $this->annulationCommission = $annulationCommission;
        return $this;
    }

    /**
     * Set the annulation dossier cpta.
     *
     * @param bool|null $annulationDossierCpta The annulation dossier cpta.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationDossierCpta(?bool $annulationDossierCpta): Constantes {
        $this->annulationDossierCpta = $annulationDossierCpta;
        return $this;
    }

    /**
     * Set the annulation dossier fact.
     *
     * @param bool|null $annulationDossierFact The annulation dossier fact.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationDossierFact(?bool $annulationDossierFact): Constantes {
        $this->annulationDossierFact = $annulationDossierFact;
        return $this;
    }

    /**
     * Set the annulation dossier paie.
     *
     * @param bool|null $annulationDossierPaie The annulation dossier paie.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationDossierPaie(?bool $annulationDossierPaie): Constantes {
        $this->annulationDossierPaie = $annulationDossierPaie;
        return $this;
    }

    /**
     * Set the annulation fournisseur.
     *
     * @param bool|null $annulationFournisseur The annulation fournisseur.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationFournisseur(?bool $annulationFournisseur): Constantes {
        $this->annulationFournisseur = $annulationFournisseur;
        return $this;
    }

    /**
     * Set the annulation plan facturation.
     *
     * @param bool|null $annulationPlanFacturation The annulation plan facturation.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationPlanFacturation(?bool $annulationPlanFacturation): Constantes {
        $this->annulationPlanFacturation = $annulationPlanFacturation;
        return $this;
    }

    /**
     * Set the annulation plan tache.
     *
     * @param bool|null $annulationPlanTache The annulation plan tache.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationPlanTache(?bool $annulationPlanTache): Constantes {
        $this->annulationPlanTache = $annulationPlanTache;
        return $this;
    }

    /**
     * Set the annulation tache.
     *
     * @param bool|null $annulationTache The annulation tache.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationTache(?bool $annulationTache): Constantes {
        $this->annulationTache = $annulationTache;
        return $this;
    }

    /**
     * Set the annulation tarif.
     *
     * @param bool|null $annulationTarif The annulation tarif.
     * @return Constantes Returns this Constantes.
     */
    public function setAnnulationTarif(?bool $annulationTarif): Constantes {
        $this->annulationTarif = $annulationTarif;
        return $this;
    }

    /**
     * Set the blocage ed cli.
     *
     * @param bool|null $blocageEdCli The blocage ed cli.
     * @return Constantes Returns this Constantes.
     */
    public function setBlocageEdCli(?bool $blocageEdCli): Constantes {
        $this->blocageEdCli = $blocageEdCli;
        return $this;
    }

    /**
     * Set the budget type saisie.
     *
     * @param int|null $budgetTypeSaisie The budget type saisie.
     * @return Constantes Returns this Constantes.
     */
    public function setBudgetTypeSaisie(?int $budgetTypeSaisie): Constantes {
        $this->budgetTypeSaisie = $budgetTypeSaisie;
        return $this;
    }

    /**
     * Set the champs critere1.
     *
     * @param string|null $champsCritere1 The champs critere1.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritere1(?string $champsCritere1): Constantes {
        $this->champsCritere1 = $champsCritere1;
        return $this;
    }

    /**
     * Set the champs critere10.
     *
     * @param string|null $champsCritere10 The champs critere10.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritere10(?string $champsCritere10): Constantes {
        $this->champsCritere10 = $champsCritere10;
        return $this;
    }

    /**
     * Set the champs critere2.
     *
     * @param string|null $champsCritere2 The champs critere2.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritere2(?string $champsCritere2): Constantes {
        $this->champsCritere2 = $champsCritere2;
        return $this;
    }

    /**
     * Set the champs critere3.
     *
     * @param string|null $champsCritere3 The champs critere3.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritere3(?string $champsCritere3): Constantes {
        $this->champsCritere3 = $champsCritere3;
        return $this;
    }

    /**
     * Set the champs critere4.
     *
     * @param string|null $champsCritere4 The champs critere4.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritere4(?string $champsCritere4): Constantes {
        $this->champsCritere4 = $champsCritere4;
        return $this;
    }

    /**
     * Set the champs critere5.
     *
     * @param string|null $champsCritere5 The champs critere5.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritere5(?string $champsCritere5): Constantes {
        $this->champsCritere5 = $champsCritere5;
        return $this;
    }

    /**
     * Set the champs critere6.
     *
     * @param string|null $champsCritere6 The champs critere6.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritere6(?string $champsCritere6): Constantes {
        $this->champsCritere6 = $champsCritere6;
        return $this;
    }

    /**
     * Set the champs critere7.
     *
     * @param string|null $champsCritere7 The champs critere7.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritere7(?string $champsCritere7): Constantes {
        $this->champsCritere7 = $champsCritere7;
        return $this;
    }

    /**
     * Set the champs critere8.
     *
     * @param string|null $champsCritere8 The champs critere8.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritere8(?string $champsCritere8): Constantes {
        $this->champsCritere8 = $champsCritere8;
        return $this;
    }

    /**
     * Set the champs critere9.
     *
     * @param string|null $champsCritere9 The champs critere9.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritere9(?string $champsCritere9): Constantes {
        $this->champsCritere9 = $champsCritere9;
        return $this;
    }

    /**
     * Set the champs critere affaire1.
     *
     * @param string|null $champsCritereAffaire1 The champs critere affaire1.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereAffaire1(?string $champsCritereAffaire1): Constantes {
        $this->champsCritereAffaire1 = $champsCritereAffaire1;
        return $this;
    }

    /**
     * Set the champs critere affaire10.
     *
     * @param string|null $champsCritereAffaire10 The champs critere affaire10.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereAffaire10(?string $champsCritereAffaire10): Constantes {
        $this->champsCritereAffaire10 = $champsCritereAffaire10;
        return $this;
    }

    /**
     * Set the champs critere affaire2.
     *
     * @param string|null $champsCritereAffaire2 The champs critere affaire2.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereAffaire2(?string $champsCritereAffaire2): Constantes {
        $this->champsCritereAffaire2 = $champsCritereAffaire2;
        return $this;
    }

    /**
     * Set the champs critere affaire3.
     *
     * @param string|null $champsCritereAffaire3 The champs critere affaire3.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereAffaire3(?string $champsCritereAffaire3): Constantes {
        $this->champsCritereAffaire3 = $champsCritereAffaire3;
        return $this;
    }

    /**
     * Set the champs critere affaire4.
     *
     * @param string|null $champsCritereAffaire4 The champs critere affaire4.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereAffaire4(?string $champsCritereAffaire4): Constantes {
        $this->champsCritereAffaire4 = $champsCritereAffaire4;
        return $this;
    }

    /**
     * Set the champs critere affaire5.
     *
     * @param string|null $champsCritereAffaire5 The champs critere affaire5.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereAffaire5(?string $champsCritereAffaire5): Constantes {
        $this->champsCritereAffaire5 = $champsCritereAffaire5;
        return $this;
    }

    /**
     * Set the champs critere affaire6.
     *
     * @param string|null $champsCritereAffaire6 The champs critere affaire6.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereAffaire6(?string $champsCritereAffaire6): Constantes {
        $this->champsCritereAffaire6 = $champsCritereAffaire6;
        return $this;
    }

    /**
     * Set the champs critere affaire7.
     *
     * @param string|null $champsCritereAffaire7 The champs critere affaire7.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereAffaire7(?string $champsCritereAffaire7): Constantes {
        $this->champsCritereAffaire7 = $champsCritereAffaire7;
        return $this;
    }

    /**
     * Set the champs critere affaire8.
     *
     * @param string|null $champsCritereAffaire8 The champs critere affaire8.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereAffaire8(?string $champsCritereAffaire8): Constantes {
        $this->champsCritereAffaire8 = $champsCritereAffaire8;
        return $this;
    }

    /**
     * Set the champs critere affaire9.
     *
     * @param string|null $champsCritereAffaire9 The champs critere affaire9.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereAffaire9(?string $champsCritereAffaire9): Constantes {
        $this->champsCritereAffaire9 = $champsCritereAffaire9;
        return $this;
    }

    /**
     * Set the champs critere article1.
     *
     * @param string|null $champsCritereArticle1 The champs critere article1.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereArticle1(?string $champsCritereArticle1): Constantes {
        $this->champsCritereArticle1 = $champsCritereArticle1;
        return $this;
    }

    /**
     * Set the champs critere article10.
     *
     * @param string|null $champsCritereArticle10 The champs critere article10.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereArticle10(?string $champsCritereArticle10): Constantes {
        $this->champsCritereArticle10 = $champsCritereArticle10;
        return $this;
    }

    /**
     * Set the champs critere article2.
     *
     * @param string|null $champsCritereArticle2 The champs critere article2.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereArticle2(?string $champsCritereArticle2): Constantes {
        $this->champsCritereArticle2 = $champsCritereArticle2;
        return $this;
    }

    /**
     * Set the champs critere article3.
     *
     * @param string|null $champsCritereArticle3 The champs critere article3.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereArticle3(?string $champsCritereArticle3): Constantes {
        $this->champsCritereArticle3 = $champsCritereArticle3;
        return $this;
    }

    /**
     * Set the champs critere article4.
     *
     * @param string|null $champsCritereArticle4 The champs critere article4.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereArticle4(?string $champsCritereArticle4): Constantes {
        $this->champsCritereArticle4 = $champsCritereArticle4;
        return $this;
    }

    /**
     * Set the champs critere article5.
     *
     * @param string|null $champsCritereArticle5 The champs critere article5.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereArticle5(?string $champsCritereArticle5): Constantes {
        $this->champsCritereArticle5 = $champsCritereArticle5;
        return $this;
    }

    /**
     * Set the champs critere article6.
     *
     * @param string|null $champsCritereArticle6 The champs critere article6.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereArticle6(?string $champsCritereArticle6): Constantes {
        $this->champsCritereArticle6 = $champsCritereArticle6;
        return $this;
    }

    /**
     * Set the champs critere article7.
     *
     * @param string|null $champsCritereArticle7 The champs critere article7.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereArticle7(?string $champsCritereArticle7): Constantes {
        $this->champsCritereArticle7 = $champsCritereArticle7;
        return $this;
    }

    /**
     * Set the champs critere article8.
     *
     * @param string|null $champsCritereArticle8 The champs critere article8.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereArticle8(?string $champsCritereArticle8): Constantes {
        $this->champsCritereArticle8 = $champsCritereArticle8;
        return $this;
    }

    /**
     * Set the champs critere article9.
     *
     * @param string|null $champsCritereArticle9 The champs critere article9.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereArticle9(?string $champsCritereArticle9): Constantes {
        $this->champsCritereArticle9 = $champsCritereArticle9;
        return $this;
    }

    /**
     * Set the champs critere ent piece1.
     *
     * @param string|null $champsCritereEntPiece1 The champs critere ent piece1.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereEntPiece1(?string $champsCritereEntPiece1): Constantes {
        $this->champsCritereEntPiece1 = $champsCritereEntPiece1;
        return $this;
    }

    /**
     * Set the champs critere ent piece10.
     *
     * @param string|null $champsCritereEntPiece10 The champs critere ent piece10.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereEntPiece10(?string $champsCritereEntPiece10): Constantes {
        $this->champsCritereEntPiece10 = $champsCritereEntPiece10;
        return $this;
    }

    /**
     * Set the champs critere ent piece2.
     *
     * @param string|null $champsCritereEntPiece2 The champs critere ent piece2.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereEntPiece2(?string $champsCritereEntPiece2): Constantes {
        $this->champsCritereEntPiece2 = $champsCritereEntPiece2;
        return $this;
    }

    /**
     * Set the champs critere ent piece3.
     *
     * @param string|null $champsCritereEntPiece3 The champs critere ent piece3.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereEntPiece3(?string $champsCritereEntPiece3): Constantes {
        $this->champsCritereEntPiece3 = $champsCritereEntPiece3;
        return $this;
    }

    /**
     * Set the champs critere ent piece4.
     *
     * @param string|null $champsCritereEntPiece4 The champs critere ent piece4.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereEntPiece4(?string $champsCritereEntPiece4): Constantes {
        $this->champsCritereEntPiece4 = $champsCritereEntPiece4;
        return $this;
    }

    /**
     * Set the champs critere ent piece5.
     *
     * @param string|null $champsCritereEntPiece5 The champs critere ent piece5.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereEntPiece5(?string $champsCritereEntPiece5): Constantes {
        $this->champsCritereEntPiece5 = $champsCritereEntPiece5;
        return $this;
    }

    /**
     * Set the champs critere ent piece6.
     *
     * @param string|null $champsCritereEntPiece6 The champs critere ent piece6.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereEntPiece6(?string $champsCritereEntPiece6): Constantes {
        $this->champsCritereEntPiece6 = $champsCritereEntPiece6;
        return $this;
    }

    /**
     * Set the champs critere ent piece7.
     *
     * @param string|null $champsCritereEntPiece7 The champs critere ent piece7.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereEntPiece7(?string $champsCritereEntPiece7): Constantes {
        $this->champsCritereEntPiece7 = $champsCritereEntPiece7;
        return $this;
    }

    /**
     * Set the champs critere ent piece8.
     *
     * @param string|null $champsCritereEntPiece8 The champs critere ent piece8.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereEntPiece8(?string $champsCritereEntPiece8): Constantes {
        $this->champsCritereEntPiece8 = $champsCritereEntPiece8;
        return $this;
    }

    /**
     * Set the champs critere ent piece9.
     *
     * @param string|null $champsCritereEntPiece9 The champs critere ent piece9.
     * @return Constantes Returns this Constantes.
     */
    public function setChampsCritereEntPiece9(?string $champsCritereEntPiece9): Constantes {
        $this->champsCritereEntPiece9 = $champsCritereEntPiece9;
        return $this;
    }

    /**
     * Set the chrono activation.
     *
     * @param bool|null $chronoActivation The chrono activation.
     * @return Constantes Returns this Constantes.
     */
    public function setChronoActivation(?bool $chronoActivation): Constantes {
        $this->chronoActivation = $chronoActivation;
        return $this;
    }

    /**
     * Set the chrono prefixe.
     *
     * @param string|null $chronoPrefixe The chrono prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setChronoPrefixe(?string $chronoPrefixe): Constantes {
        $this->chronoPrefixe = $chronoPrefixe;
        return $this;
    }

    /**
     * Set the chrono prochain num.
     *
     * @param int|null $chronoProchainNum The chrono prochain num.
     * @return Constantes Returns this Constantes.
     */
    public function setChronoProchainNum(?int $chronoProchainNum): Constantes {
        $this->chronoProchainNum = $chronoProchainNum;
        return $this;
    }

    /**
     * Set the cle acces cn paie.
     *
     * @param string|null $cleAccesCnPaie The cle acces cn paie.
     * @return Constantes Returns this Constantes.
     */
    public function setCleAccesCnPaie(?string $cleAccesCnPaie): Constantes {
        $this->cleAccesCnPaie = $cleAccesCnPaie;
        return $this;
    }

    /**
     * Set the cle acces fiche client.
     *
     * @param string|null $cleAccesFicheClient The cle acces fiche client.
     * @return Constantes Returns this Constantes.
     */
    public function setCleAccesFicheClient(?string $cleAccesFicheClient): Constantes {
        $this->cleAccesFicheClient = $cleAccesFicheClient;
        return $this;
    }

    /**
     * Set the cle acces menus.
     *
     * @param string|null $cleAccesMenus The cle acces menus.
     * @return Constantes Returns this Constantes.
     */
    public function setCleAccesMenus(?string $cleAccesMenus): Constantes {
        $this->cleAccesMenus = $cleAccesMenus;
        return $this;
    }

    /**
     * Set the cle acces param.
     *
     * @param string|null $cleAccesParam The cle acces param.
     * @return Constantes Returns this Constantes.
     */
    public function setCleAccesParam(?string $cleAccesParam): Constantes {
        $this->cleAccesParam = $cleAccesParam;
        return $this;
    }

    /**
     * Set the cle des etr communs.
     *
     * @param string|null $cleDesEtrCommuns The cle des etr communs.
     * @return Constantes Returns this Constantes.
     */
    public function setCleDesEtrCommuns(?string $cleDesEtrCommuns): Constantes {
        $this->cleDesEtrCommuns = $cleDesEtrCommuns;
        return $this;
    }

    /**
     * Set the cle jrn lib communs.
     *
     * @param string|null $cleJrnLibCommuns The cle jrn lib communs.
     * @return Constantes Returns this Constantes.
     */
    public function setCleJrnLibCommuns(?string $cleJrnLibCommuns): Constantes {
        $this->cleJrnLibCommuns = $cleJrnLibCommuns;
        return $this;
    }

    /**
     * Set the code emetteur.
     *
     * @param string|null $codeEmetteur The code emetteur.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeEmetteur(?string $codeEmetteur): Constantes {
        $this->codeEmetteur = $codeEmetteur;
        return $this;
    }

    /**
     * Set the code expert defaut.
     *
     * @param string|null $codeExpertDefaut The code expert defaut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeExpertDefaut(?string $codeExpertDefaut): Constantes {
        $this->codeExpertDefaut = $codeExpertDefaut;
        return $this;
    }

    /**
     * Set the code regroupement pre fact.
     *
     * @param string|null $codeRegroupementPreFact The code regroupement pre fact.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeRegroupementPreFact(?string $codeRegroupementPreFact): Constantes {
        $this->codeRegroupementPreFact = $codeRegroupementPreFact;
        return $this;
    }

    /**
     * Set the conversion pwd.
     *
     * @param bool|null $conversionPwd The conversion pwd.
     * @return Constantes Returns this Constantes.
     */
    public function setConversionPwd(?bool $conversionPwd): Constantes {
        $this->conversionPwd = $conversionPwd;
        return $this;
    }

    /**
     * Set the cpte collectif cli.
     *
     * @param string|null $cpteCollectifCli The cpte collectif cli.
     * @return Constantes Returns this Constantes.
     */
    public function setCpteCollectifCli(?string $cpteCollectifCli): Constantes {
        $this->cpteCollectifCli = $cpteCollectifCli;
        return $this;
    }

    /**
     * Set the cpte collectif frn.
     *
     * @param string|null $cpteCollectifFrn The cpte collectif frn.
     * @return Constantes Returns this Constantes.
     */
    public function setCpteCollectifFrn(?string $cpteCollectifFrn): Constantes {
        $this->cpteCollectifFrn = $cpteCollectifFrn;
        return $this;
    }

    /**
     * Set the creation affaire.
     *
     * @param bool|null $creationAffaire The creation affaire.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationAffaire(?bool $creationAffaire): Constantes {
        $this->creationAffaire = $creationAffaire;
        return $this;
    }

    /**
     * Set the creation article.
     *
     * @param bool|null $creationArticle The creation article.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationArticle(?bool $creationArticle): Constantes {
        $this->creationArticle = $creationArticle;
        return $this;
    }

    /**
     * Set the creation bons travaux.
     *
     * @param bool|null $creationBonsTravaux The creation bons travaux.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationBonsTravaux(?bool $creationBonsTravaux): Constantes {
        $this->creationBonsTravaux = $creationBonsTravaux;
        return $this;
    }

    /**
     * Set the creation chantier.
     *
     * @param bool|null $creationChantier The creation chantier.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationChantier(?bool $creationChantier): Constantes {
        $this->creationChantier = $creationChantier;
        return $this;
    }

    /**
     * Set the creation client.
     *
     * @param bool|null $creationClient The creation client.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationClient(?bool $creationClient): Constantes {
        $this->creationClient = $creationClient;
        return $this;
    }

    /**
     * Set the creation commission.
     *
     * @param bool|null $creationCommission The creation commission.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationCommission(?bool $creationCommission): Constantes {
        $this->creationCommission = $creationCommission;
        return $this;
    }

    /**
     * Set the creation dossier cpta.
     *
     * @param bool|null $creationDossierCpta The creation dossier cpta.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationDossierCpta(?bool $creationDossierCpta): Constantes {
        $this->creationDossierCpta = $creationDossierCpta;
        return $this;
    }

    /**
     * Set the creation dossier fact.
     *
     * @param bool|null $creationDossierFact The creation dossier fact.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationDossierFact(?bool $creationDossierFact): Constantes {
        $this->creationDossierFact = $creationDossierFact;
        return $this;
    }

    /**
     * Set the creation dossier paie.
     *
     * @param bool|null $creationDossierPaie The creation dossier paie.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationDossierPaie(?bool $creationDossierPaie): Constantes {
        $this->creationDossierPaie = $creationDossierPaie;
        return $this;
    }

    /**
     * Set the creation fournisseur.
     *
     * @param bool|null $creationFournisseur The creation fournisseur.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationFournisseur(?bool $creationFournisseur): Constantes {
        $this->creationFournisseur = $creationFournisseur;
        return $this;
    }

    /**
     * Set the creation plan facturation.
     *
     * @param bool|null $creationPlanFacturation The creation plan facturation.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationPlanFacturation(?bool $creationPlanFacturation): Constantes {
        $this->creationPlanFacturation = $creationPlanFacturation;
        return $this;
    }

    /**
     * Set the creation plan tache.
     *
     * @param bool|null $creationPlanTache The creation plan tache.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationPlanTache(?bool $creationPlanTache): Constantes {
        $this->creationPlanTache = $creationPlanTache;
        return $this;
    }

    /**
     * Set the creation prospect.
     *
     * @param bool|null $creationProspect The creation prospect.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationProspect(?bool $creationProspect): Constantes {
        $this->creationProspect = $creationProspect;
        return $this;
    }

    /**
     * Set the creation tache.
     *
     * @param bool|null $creationTache The creation tache.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationTache(?bool $creationTache): Constantes {
        $this->creationTache = $creationTache;
        return $this;
    }

    /**
     * Set the creation tarif.
     *
     * @param bool|null $creationTarif The creation tarif.
     * @return Constantes Returns this Constantes.
     */
    public function setCreationTarif(?bool $creationTarif): Constantes {
        $this->creationTarif = $creationTarif;
        return $this;
    }

    /**
     * Set the date cloture.
     *
     * @param DateTime|null $dateCloture The date cloture.
     * @return Constantes Returns this Constantes.
     */
    public function setDateCloture(?DateTime $dateCloture): Constantes {
        $this->dateCloture = $dateCloture;
        return $this;
    }

    /**
     * Set the dt dern modif conf zone.
     *
     * @param DateTime|null $dtDernModifConfZone The dt dern modif conf zone.
     * @return Constantes Returns this Constantes.
     */
    public function setDtDernModifConfZone(?DateTime $dtDernModifConfZone): Constantes {
        $this->dtDernModifConfZone = $dtDernModifConfZone;
        return $this;
    }

    /**
     * Set the ech aff en mt.
     *
     * @param bool|null $echAffEnMt The ech aff en mt.
     * @return Constantes Returns this Constantes.
     */
    public function setEchAffEnMt(?bool $echAffEnMt): Constantes {
        $this->echAffEnMt = $echAffEnMt;
        return $this;
    }

    /**
     * Set the fonctionnement cga.
     *
     * @param bool|null $fonctionnementCga The fonctionnement cga.
     * @return Constantes Returns this Constantes.
     */
    public function setFonctionnementCga(?bool $fonctionnementCga): Constantes {
        $this->fonctionnementCga = $fonctionnementCga;
        return $this;
    }

    /**
     * Set the heures trav1.
     *
     * @param float|null $heuresTrav1 The heures trav1.
     * @return Constantes Returns this Constantes.
     */
    public function setHeuresTrav1(?float $heuresTrav1): Constantes {
        $this->heuresTrav1 = $heuresTrav1;
        return $this;
    }

    /**
     * Set the heures trav2.
     *
     * @param float|null $heuresTrav2 The heures trav2.
     * @return Constantes Returns this Constantes.
     */
    public function setHeuresTrav2(?float $heuresTrav2): Constantes {
        $this->heuresTrav2 = $heuresTrav2;
        return $this;
    }

    /**
     * Set the heures trav3.
     *
     * @param float|null $heuresTrav3 The heures trav3.
     * @return Constantes Returns this Constantes.
     */
    public function setHeuresTrav3(?float $heuresTrav3): Constantes {
        $this->heuresTrav3 = $heuresTrav3;
        return $this;
    }

    /**
     * Set the heures trav4.
     *
     * @param float|null $heuresTrav4 The heures trav4.
     * @return Constantes Returns this Constantes.
     */
    public function setHeuresTrav4(?float $heuresTrav4): Constantes {
        $this->heuresTrav4 = $heuresTrav4;
        return $this;
    }

    /**
     * Set the increm auto.
     *
     * @param bool|null $incremAuto The increm auto.
     * @return Constantes Returns this Constantes.
     */
    public function setIncremAuto(?bool $incremAuto): Constantes {
        $this->incremAuto = $incremAuto;
        return $this;
    }

    /**
     * Set the increm auto aff.
     *
     * @param bool|null $incremAutoAff The increm auto aff.
     * @return Constantes Returns this Constantes.
     */
    public function setIncremAutoAff(?bool $incremAutoAff): Constantes {
        $this->incremAutoAff = $incremAutoAff;
        return $this;
    }

    /**
     * Set the increm auto frn.
     *
     * @param bool|null $incremAutoFrn The increm auto frn.
     * @return Constantes Returns this Constantes.
     */
    public function setIncremAutoFrn(?bool $incremAutoFrn): Constantes {
        $this->incremAutoFrn = $incremAutoFrn;
        return $this;
    }

    /**
     * Set the increm cpte cli auto.
     *
     * @param bool|null $incremCpteCliAuto The increm cpte cli auto.
     * @return Constantes Returns this Constantes.
     */
    public function setIncremCpteCliAuto(?bool $incremCpteCliAuto): Constantes {
        $this->incremCpteCliAuto = $incremCpteCliAuto;
        return $this;
    }

    /**
     * Set the increm cpte frn auto.
     *
     * @param bool|null $incremCpteFrnAuto The increm cpte frn auto.
     * @return Constantes Returns this Constantes.
     */
    public function setIncremCpteFrnAuto(?bool $incremCpteFrnAuto): Constantes {
        $this->incremCpteFrnAuto = $incremCpteFrnAuto;
        return $this;
    }

    /**
     * Set the increment cpte cli.
     *
     * @param int|null $incrementCpteCli The increment cpte cli.
     * @return Constantes Returns this Constantes.
     */
    public function setIncrementCpteCli(?int $incrementCpteCli): Constantes {
        $this->incrementCpteCli = $incrementCpteCli;
        return $this;
    }

    /**
     * Set the increment cpte frn.
     *
     * @param int|null $incrementCpteFrn The increment cpte frn.
     * @return Constantes Returns this Constantes.
     */
    public function setIncrementCpteFrn(?int $incrementCpteFrn): Constantes {
        $this->incrementCpteFrn = $incrementCpteFrn;
        return $this;
    }

    /**
     * Set the liaison bu cpta.
     *
     * @param bool|null $liaisonBuCpta The liaison bu cpta.
     * @return Constantes Returns this Constantes.
     */
    public function setLiaisonBuCpta(?bool $liaisonBuCpta): Constantes {
        $this->liaisonBuCpta = $liaisonBuCpta;
        return $this;
    }

    /**
     * Set the lib affectation1.
     *
     * @param string|null $libAffectation1 The lib affectation1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibAffectation1(?string $libAffectation1): Constantes {
        $this->libAffectation1 = $libAffectation1;
        return $this;
    }

    /**
     * Set the lib affectation2.
     *
     * @param string|null $libAffectation2 The lib affectation2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibAffectation2(?string $libAffectation2): Constantes {
        $this->libAffectation2 = $libAffectation2;
        return $this;
    }

    /**
     * Set the lib affectation3.
     *
     * @param string|null $libAffectation3 The lib affectation3.
     * @return Constantes Returns this Constantes.
     */
    public function setLibAffectation3(?string $libAffectation3): Constantes {
        $this->libAffectation3 = $libAffectation3;
        return $this;
    }

    /**
     * Set the lib affectation4.
     *
     * @param string|null $libAffectation4 The lib affectation4.
     * @return Constantes Returns this Constantes.
     */
    public function setLibAffectation4(?string $libAffectation4): Constantes {
        $this->libAffectation4 = $libAffectation4;
        return $this;
    }

    /**
     * Set the lib affectation5.
     *
     * @param string|null $libAffectation5 The lib affectation5.
     * @return Constantes Returns this Constantes.
     */
    public function setLibAffectation5(?string $libAffectation5): Constantes {
        $this->libAffectation5 = $libAffectation5;
        return $this;
    }

    /**
     * Set the lib affectation6.
     *
     * @param string|null $libAffectation6 The lib affectation6.
     * @return Constantes Returns this Constantes.
     */
    public function setLibAffectation6(?string $libAffectation6): Constantes {
        $this->libAffectation6 = $libAffectation6;
        return $this;
    }

    /**
     * Set the lib affectation7.
     *
     * @param string|null $libAffectation7 The lib affectation7.
     * @return Constantes Returns this Constantes.
     */
    public function setLibAffectation7(?string $libAffectation7): Constantes {
        $this->libAffectation7 = $libAffectation7;
        return $this;
    }

    /**
     * Set the lib critere1.
     *
     * @param string|null $libCritere1 The lib critere1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritere1(?string $libCritere1): Constantes {
        $this->libCritere1 = $libCritere1;
        return $this;
    }

    /**
     * Set the lib critere10.
     *
     * @param string|null $libCritere10 The lib critere10.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritere10(?string $libCritere10): Constantes {
        $this->libCritere10 = $libCritere10;
        return $this;
    }

    /**
     * Set the lib critere2.
     *
     * @param string|null $libCritere2 The lib critere2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritere2(?string $libCritere2): Constantes {
        $this->libCritere2 = $libCritere2;
        return $this;
    }

    /**
     * Set the lib critere3.
     *
     * @param string|null $libCritere3 The lib critere3.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritere3(?string $libCritere3): Constantes {
        $this->libCritere3 = $libCritere3;
        return $this;
    }

    /**
     * Set the lib critere4.
     *
     * @param string|null $libCritere4 The lib critere4.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritere4(?string $libCritere4): Constantes {
        $this->libCritere4 = $libCritere4;
        return $this;
    }

    /**
     * Set the lib critere5.
     *
     * @param string|null $libCritere5 The lib critere5.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritere5(?string $libCritere5): Constantes {
        $this->libCritere5 = $libCritere5;
        return $this;
    }

    /**
     * Set the lib critere6.
     *
     * @param string|null $libCritere6 The lib critere6.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritere6(?string $libCritere6): Constantes {
        $this->libCritere6 = $libCritere6;
        return $this;
    }

    /**
     * Set the lib critere7.
     *
     * @param string|null $libCritere7 The lib critere7.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritere7(?string $libCritere7): Constantes {
        $this->libCritere7 = $libCritere7;
        return $this;
    }

    /**
     * Set the lib critere8.
     *
     * @param string|null $libCritere8 The lib critere8.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritere8(?string $libCritere8): Constantes {
        $this->libCritere8 = $libCritere8;
        return $this;
    }

    /**
     * Set the lib critere9.
     *
     * @param string|null $libCritere9 The lib critere9.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritere9(?string $libCritere9): Constantes {
        $this->libCritere9 = $libCritere9;
        return $this;
    }

    /**
     * Set the lib critere affaire1.
     *
     * @param string|null $libCritereAffaire1 The lib critere affaire1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereAffaire1(?string $libCritereAffaire1): Constantes {
        $this->libCritereAffaire1 = $libCritereAffaire1;
        return $this;
    }

    /**
     * Set the lib critere affaire10.
     *
     * @param string|null $libCritereAffaire10 The lib critere affaire10.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereAffaire10(?string $libCritereAffaire10): Constantes {
        $this->libCritereAffaire10 = $libCritereAffaire10;
        return $this;
    }

    /**
     * Set the lib critere affaire2.
     *
     * @param string|null $libCritereAffaire2 The lib critere affaire2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereAffaire2(?string $libCritereAffaire2): Constantes {
        $this->libCritereAffaire2 = $libCritereAffaire2;
        return $this;
    }

    /**
     * Set the lib critere affaire3.
     *
     * @param string|null $libCritereAffaire3 The lib critere affaire3.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereAffaire3(?string $libCritereAffaire3): Constantes {
        $this->libCritereAffaire3 = $libCritereAffaire3;
        return $this;
    }

    /**
     * Set the lib critere affaire4.
     *
     * @param string|null $libCritereAffaire4 The lib critere affaire4.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereAffaire4(?string $libCritereAffaire4): Constantes {
        $this->libCritereAffaire4 = $libCritereAffaire4;
        return $this;
    }

    /**
     * Set the lib critere affaire5.
     *
     * @param string|null $libCritereAffaire5 The lib critere affaire5.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereAffaire5(?string $libCritereAffaire5): Constantes {
        $this->libCritereAffaire5 = $libCritereAffaire5;
        return $this;
    }

    /**
     * Set the lib critere affaire6.
     *
     * @param string|null $libCritereAffaire6 The lib critere affaire6.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereAffaire6(?string $libCritereAffaire6): Constantes {
        $this->libCritereAffaire6 = $libCritereAffaire6;
        return $this;
    }

    /**
     * Set the lib critere affaire7.
     *
     * @param string|null $libCritereAffaire7 The lib critere affaire7.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereAffaire7(?string $libCritereAffaire7): Constantes {
        $this->libCritereAffaire7 = $libCritereAffaire7;
        return $this;
    }

    /**
     * Set the lib critere affaire8.
     *
     * @param string|null $libCritereAffaire8 The lib critere affaire8.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereAffaire8(?string $libCritereAffaire8): Constantes {
        $this->libCritereAffaire8 = $libCritereAffaire8;
        return $this;
    }

    /**
     * Set the lib critere affaire9.
     *
     * @param string|null $libCritereAffaire9 The lib critere affaire9.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereAffaire9(?string $libCritereAffaire9): Constantes {
        $this->libCritereAffaire9 = $libCritereAffaire9;
        return $this;
    }

    /**
     * Set the lib critere article1.
     *
     * @param string|null $libCritereArticle1 The lib critere article1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereArticle1(?string $libCritereArticle1): Constantes {
        $this->libCritereArticle1 = $libCritereArticle1;
        return $this;
    }

    /**
     * Set the lib critere article10.
     *
     * @param string|null $libCritereArticle10 The lib critere article10.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereArticle10(?string $libCritereArticle10): Constantes {
        $this->libCritereArticle10 = $libCritereArticle10;
        return $this;
    }

    /**
     * Set the lib critere article2.
     *
     * @param string|null $libCritereArticle2 The lib critere article2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereArticle2(?string $libCritereArticle2): Constantes {
        $this->libCritereArticle2 = $libCritereArticle2;
        return $this;
    }

    /**
     * Set the lib critere article3.
     *
     * @param string|null $libCritereArticle3 The lib critere article3.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereArticle3(?string $libCritereArticle3): Constantes {
        $this->libCritereArticle3 = $libCritereArticle3;
        return $this;
    }

    /**
     * Set the lib critere article4.
     *
     * @param string|null $libCritereArticle4 The lib critere article4.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereArticle4(?string $libCritereArticle4): Constantes {
        $this->libCritereArticle4 = $libCritereArticle4;
        return $this;
    }

    /**
     * Set the lib critere article5.
     *
     * @param string|null $libCritereArticle5 The lib critere article5.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereArticle5(?string $libCritereArticle5): Constantes {
        $this->libCritereArticle5 = $libCritereArticle5;
        return $this;
    }

    /**
     * Set the lib critere article6.
     *
     * @param string|null $libCritereArticle6 The lib critere article6.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereArticle6(?string $libCritereArticle6): Constantes {
        $this->libCritereArticle6 = $libCritereArticle6;
        return $this;
    }

    /**
     * Set the lib critere article7.
     *
     * @param string|null $libCritereArticle7 The lib critere article7.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereArticle7(?string $libCritereArticle7): Constantes {
        $this->libCritereArticle7 = $libCritereArticle7;
        return $this;
    }

    /**
     * Set the lib critere article8.
     *
     * @param string|null $libCritereArticle8 The lib critere article8.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereArticle8(?string $libCritereArticle8): Constantes {
        $this->libCritereArticle8 = $libCritereArticle8;
        return $this;
    }

    /**
     * Set the lib critere article9.
     *
     * @param string|null $libCritereArticle9 The lib critere article9.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereArticle9(?string $libCritereArticle9): Constantes {
        $this->libCritereArticle9 = $libCritereArticle9;
        return $this;
    }

    /**
     * Set the lib critere ent piece1.
     *
     * @param string|null $libCritereEntPiece1 The lib critere ent piece1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereEntPiece1(?string $libCritereEntPiece1): Constantes {
        $this->libCritereEntPiece1 = $libCritereEntPiece1;
        return $this;
    }

    /**
     * Set the lib critere ent piece10.
     *
     * @param string|null $libCritereEntPiece10 The lib critere ent piece10.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereEntPiece10(?string $libCritereEntPiece10): Constantes {
        $this->libCritereEntPiece10 = $libCritereEntPiece10;
        return $this;
    }

    /**
     * Set the lib critere ent piece2.
     *
     * @param string|null $libCritereEntPiece2 The lib critere ent piece2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereEntPiece2(?string $libCritereEntPiece2): Constantes {
        $this->libCritereEntPiece2 = $libCritereEntPiece2;
        return $this;
    }

    /**
     * Set the lib critere ent piece3.
     *
     * @param string|null $libCritereEntPiece3 The lib critere ent piece3.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereEntPiece3(?string $libCritereEntPiece3): Constantes {
        $this->libCritereEntPiece3 = $libCritereEntPiece3;
        return $this;
    }

    /**
     * Set the lib critere ent piece4.
     *
     * @param string|null $libCritereEntPiece4 The lib critere ent piece4.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereEntPiece4(?string $libCritereEntPiece4): Constantes {
        $this->libCritereEntPiece4 = $libCritereEntPiece4;
        return $this;
    }

    /**
     * Set the lib critere ent piece5.
     *
     * @param string|null $libCritereEntPiece5 The lib critere ent piece5.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereEntPiece5(?string $libCritereEntPiece5): Constantes {
        $this->libCritereEntPiece5 = $libCritereEntPiece5;
        return $this;
    }

    /**
     * Set the lib critere ent piece6.
     *
     * @param string|null $libCritereEntPiece6 The lib critere ent piece6.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereEntPiece6(?string $libCritereEntPiece6): Constantes {
        $this->libCritereEntPiece6 = $libCritereEntPiece6;
        return $this;
    }

    /**
     * Set the lib critere ent piece7.
     *
     * @param string|null $libCritereEntPiece7 The lib critere ent piece7.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereEntPiece7(?string $libCritereEntPiece7): Constantes {
        $this->libCritereEntPiece7 = $libCritereEntPiece7;
        return $this;
    }

    /**
     * Set the lib critere ent piece8.
     *
     * @param string|null $libCritereEntPiece8 The lib critere ent piece8.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereEntPiece8(?string $libCritereEntPiece8): Constantes {
        $this->libCritereEntPiece8 = $libCritereEntPiece8;
        return $this;
    }

    /**
     * Set the lib critere ent piece9.
     *
     * @param string|null $libCritereEntPiece9 The lib critere ent piece9.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereEntPiece9(?string $libCritereEntPiece9): Constantes {
        $this->libCritereEntPiece9 = $libCritereEntPiece9;
        return $this;
    }

    /**
     * Set the lib critere interloc.
     *
     * @param string|null $libCritereInterloc The lib critere interloc.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereInterloc(?string $libCritereInterloc): Constantes {
        $this->libCritereInterloc = $libCritereInterloc;
        return $this;
    }

    /**
     * Set the lib critere interloc2.
     *
     * @param string|null $libCritereInterloc2 The lib critere interloc2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereInterloc2(?string $libCritereInterloc2): Constantes {
        $this->libCritereInterloc2 = $libCritereInterloc2;
        return $this;
    }

    /**
     * Set the major heures trav1.
     *
     * @param float|null $majorHeuresTrav1 The major heures trav1.
     * @return Constantes Returns this Constantes.
     */
    public function setMajorHeuresTrav1(?float $majorHeuresTrav1): Constantes {
        $this->majorHeuresTrav1 = $majorHeuresTrav1;
        return $this;
    }

    /**
     * Set the major heures trav2.
     *
     * @param float|null $majorHeuresTrav2 The major heures trav2.
     * @return Constantes Returns this Constantes.
     */
    public function setMajorHeuresTrav2(?float $majorHeuresTrav2): Constantes {
        $this->majorHeuresTrav2 = $majorHeuresTrav2;
        return $this;
    }

    /**
     * Set the major heures trav3.
     *
     * @param float|null $majorHeuresTrav3 The major heures trav3.
     * @return Constantes Returns this Constantes.
     */
    public function setMajorHeuresTrav3(?float $majorHeuresTrav3): Constantes {
        $this->majorHeuresTrav3 = $majorHeuresTrav3;
        return $this;
    }

    /**
     * Set the major heures trav4.
     *
     * @param float|null $majorHeuresTrav4 The major heures trav4.
     * @return Constantes Returns this Constantes.
     */
    public function setMajorHeuresTrav4(?float $majorHeuresTrav4): Constantes {
        $this->majorHeuresTrav4 = $majorHeuresTrav4;
        return $this;
    }

    /**
     * Set the mnt ticket resto a.
     *
     * @param float|null $mntTicketRestoA The mnt ticket resto a.
     * @return Constantes Returns this Constantes.
     */
    public function setMntTicketRestoA(?float $mntTicketRestoA): Constantes {
        $this->mntTicketRestoA = $mntTicketRestoA;
        return $this;
    }

    /**
     * Set the mnt ticket resto b.
     *
     * @param float|null $mntTicketRestoB The mnt ticket resto b.
     * @return Constantes Returns this Constantes.
     */
    public function setMntTicketRestoB(?float $mntTicketRestoB): Constantes {
        $this->mntTicketRestoB = $mntTicketRestoB;
        return $this;
    }

    /**
     * Set the mnt ticket resto c.
     *
     * @param float|null $mntTicketRestoC The mnt ticket resto c.
     * @return Constantes Returns this Constantes.
     */
    public function setMntTicketRestoC(?float $mntTicketRestoC): Constantes {
        $this->mntTicketRestoC = $mntTicketRestoC;
        return $this;
    }

    /**
     * Set the mnt ticket resto d.
     *
     * @param float|null $mntTicketRestoD The mnt ticket resto d.
     * @return Constantes Returns this Constantes.
     */
    public function setMntTicketRestoD(?float $mntTicketRestoD): Constantes {
        $this->mntTicketRestoD = $mntTicketRestoD;
        return $this;
    }

    /**
     * Set the mnt ticket resto e.
     *
     * @param float|null $mntTicketRestoE The mnt ticket resto e.
     * @return Constantes Returns this Constantes.
     */
    public function setMntTicketRestoE(?float $mntTicketRestoE): Constantes {
        $this->mntTicketRestoE = $mntTicketRestoE;
        return $this;
    }

    /**
     * Set the modif affaire.
     *
     * @param string|null $modifAffaire The modif affaire.
     * @return Constantes Returns this Constantes.
     */
    public function setModifAffaire(?string $modifAffaire): Constantes {
        $this->modifAffaire = $modifAffaire;
        return $this;
    }

    /**
     * Set the modif article.
     *
     * @param string|null $modifArticle The modif article.
     * @return Constantes Returns this Constantes.
     */
    public function setModifArticle(?string $modifArticle): Constantes {
        $this->modifArticle = $modifArticle;
        return $this;
    }

    /**
     * Set the modif bons travaux.
     *
     * @param string|null $modifBonsTravaux The modif bons travaux.
     * @return Constantes Returns this Constantes.
     */
    public function setModifBonsTravaux(?string $modifBonsTravaux): Constantes {
        $this->modifBonsTravaux = $modifBonsTravaux;
        return $this;
    }

    /**
     * Set the modif chantier.
     *
     * @param string|null $modifChantier The modif chantier.
     * @return Constantes Returns this Constantes.
     */
    public function setModifChantier(?string $modifChantier): Constantes {
        $this->modifChantier = $modifChantier;
        return $this;
    }

    /**
     * Set the modif client.
     *
     * @param string|null $modifClient The modif client.
     * @return Constantes Returns this Constantes.
     */
    public function setModifClient(?string $modifClient): Constantes {
        $this->modifClient = $modifClient;
        return $this;
    }

    /**
     * Set the modif commission.
     *
     * @param string|null $modifCommission The modif commission.
     * @return Constantes Returns this Constantes.
     */
    public function setModifCommission(?string $modifCommission): Constantes {
        $this->modifCommission = $modifCommission;
        return $this;
    }

    /**
     * Set the modif dossier fact.
     *
     * @param string|null $modifDossierFact The modif dossier fact.
     * @return Constantes Returns this Constantes.
     */
    public function setModifDossierFact(?string $modifDossierFact): Constantes {
        $this->modifDossierFact = $modifDossierFact;
        return $this;
    }

    /**
     * Set the modif fournisseur.
     *
     * @param string|null $modifFournisseur The modif fournisseur.
     * @return Constantes Returns this Constantes.
     */
    public function setModifFournisseur(?string $modifFournisseur): Constantes {
        $this->modifFournisseur = $modifFournisseur;
        return $this;
    }

    /**
     * Set the modif plan facturation.
     *
     * @param string|null $modifPlanFacturation The modif plan facturation.
     * @return Constantes Returns this Constantes.
     */
    public function setModifPlanFacturation(?string $modifPlanFacturation): Constantes {
        $this->modifPlanFacturation = $modifPlanFacturation;
        return $this;
    }

    /**
     * Set the modif plan tache.
     *
     * @param string|null $modifPlanTache The modif plan tache.
     * @return Constantes Returns this Constantes.
     */
    public function setModifPlanTache(?string $modifPlanTache): Constantes {
        $this->modifPlanTache = $modifPlanTache;
        return $this;
    }

    /**
     * Set the modif tache.
     *
     * @param string|null $modifTache The modif tache.
     * @return Constantes Returns this Constantes.
     */
    public function setModifTache(?string $modifTache): Constantes {
        $this->modifTache = $modifTache;
        return $this;
    }

    /**
     * Set the modif tarif.
     *
     * @param string|null $modifTarif The modif tarif.
     * @return Constantes Returns this Constantes.
     */
    public function setModifTarif(?string $modifTarif): Constantes {
        $this->modifTarif = $modifTarif;
        return $this;
    }

    /**
     * Set the monnaie.
     *
     * @param string|null $monnaie The monnaie.
     * @return Constantes Returns this Constantes.
     */
    public function setMonnaie(?string $monnaie): Constantes {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the nb dec monnaie.
     *
     * @param int|null $nbDecMonnaie The nb dec monnaie.
     * @return Constantes Returns this Constantes.
     */
    public function setNbDecMonnaie(?int $nbDecMonnaie): Constantes {
        $this->nbDecMonnaie = $nbDecMonnaie;
        return $this;
    }

    /**
     * Set the no doss cpta.
     *
     * @param string|null $noDossCpta The no doss cpta.
     * @return Constantes Returns this Constantes.
     */
    public function setNoDossCpta(?string $noDossCpta): Constantes {
        $this->noDossCpta = $noDossCpta;
        return $this;
    }

    /**
     * Set the no doss paie.
     *
     * @param string|null $noDossPaie The no doss paie.
     * @return Constantes Returns this Constantes.
     */
    public function setNoDossPaie(?string $noDossPaie): Constantes {
        $this->noDossPaie = $noDossPaie;
        return $this;
    }

    /**
     * Set the prefixe aff.
     *
     * @param string|null $prefixeAff The prefixe aff.
     * @return Constantes Returns this Constantes.
     */
    public function setPrefixeAff(?string $prefixeAff): Constantes {
        $this->prefixeAff = $prefixeAff;
        return $this;
    }

    /**
     * Set the priorite saisie aff.
     *
     * @param int|null $prioriteSaisieAff The priorite saisie aff.
     * @return Constantes Returns this Constantes.
     */
    public function setPrioriteSaisieAff(?int $prioriteSaisieAff): Constantes {
        $this->prioriteSaisieAff = $prioriteSaisieAff;
        return $this;
    }

    /**
     * Set the priorite saisie client.
     *
     * @param int|null $prioriteSaisieClient The priorite saisie client.
     * @return Constantes Returns this Constantes.
     */
    public function setPrioriteSaisieClient(?int $prioriteSaisieClient): Constantes {
        $this->prioriteSaisieClient = $prioriteSaisieClient;
        return $this;
    }

    /**
     * Set the priorite saisie frn.
     *
     * @param int|null $prioriteSaisieFrn The priorite saisie frn.
     * @return Constantes Returns this Constantes.
     */
    public function setPrioriteSaisieFrn(?int $prioriteSaisieFrn): Constantes {
        $this->prioriteSaisieFrn = $prioriteSaisieFrn;
        return $this;
    }

    /**
     * Set the prochain cpte cli.
     *
     * @param string|null $prochainCpteCli The prochain cpte cli.
     * @return Constantes Returns this Constantes.
     */
    public function setProchainCpteCli(?string $prochainCpteCli): Constantes {
        $this->prochainCpteCli = $prochainCpteCli;
        return $this;
    }

    /**
     * Set the prochain cpte frn.
     *
     * @param string|null $prochainCpteFrn The prochain cpte frn.
     * @return Constantes Returns this Constantes.
     */
    public function setProchainCpteFrn(?string $prochainCpteFrn): Constantes {
        $this->prochainCpteFrn = $prochainCpteFrn;
        return $this;
    }

    /**
     * Set the prochain mois oblig.
     *
     * @param DateTime|null $prochainMoisOblig The prochain mois oblig.
     * @return Constantes Returns this Constantes.
     */
    public function setProchainMoisOblig(?DateTime $prochainMoisOblig): Constantes {
        $this->prochainMoisOblig = $prochainMoisOblig;
        return $this;
    }

    /**
     * Set the prochain num aff.
     *
     * @param int|null $prochainNumAff The prochain num aff.
     * @return Constantes Returns this Constantes.
     */
    public function setProchainNumAff(?int $prochainNumAff): Constantes {
        $this->prochainNumAff = $prochainNumAff;
        return $this;
    }

    /**
     * Set the px km a.
     *
     * @param float|null $pxKmA The px km a.
     * @return Constantes Returns this Constantes.
     */
    public function setPxKmA(?float $pxKmA): Constantes {
        $this->pxKmA = $pxKmA;
        return $this;
    }

    /**
     * Set the px km b.
     *
     * @param float|null $pxKmB The px km b.
     * @return Constantes Returns this Constantes.
     */
    public function setPxKmB(?float $pxKmB): Constantes {
        $this->pxKmB = $pxKmB;
        return $this;
    }

    /**
     * Set the px km c.
     *
     * @param float|null $pxKmC The px km c.
     * @return Constantes Returns this Constantes.
     */
    public function setPxKmC(?float $pxKmC): Constantes {
        $this->pxKmC = $pxKmC;
        return $this;
    }

    /**
     * Set the px km d.
     *
     * @param float|null $pxKmD The px km d.
     * @return Constantes Returns this Constantes.
     */
    public function setPxKmD(?float $pxKmD): Constantes {
        $this->pxKmD = $pxKmD;
        return $this;
    }

    /**
     * Set the px km e.
     *
     * @param float|null $pxKmE The px km e.
     * @return Constantes Returns this Constantes.
     */
    public function setPxKmE(?float $pxKmE): Constantes {
        $this->pxKmE = $pxKmE;
        return $this;
    }

    /**
     * Set the qet code collaborateur dest.
     *
     * @param string|null $qetCodeCollaborateurDest The qet code collaborateur dest.
     * @return Constantes Returns this Constantes.
     */
    public function setQetCodeCollaborateurDest(?string $qetCodeCollaborateurDest): Constantes {
        $this->qetCodeCollaborateurDest = $qetCodeCollaborateurDest;
        return $this;
    }

    /**
     * Set the qtel code mission.
     *
     * @param string|null $qtelCodeMission The qtel code mission.
     * @return Constantes Returns this Constantes.
     */
    public function setQtelCodeMission(?string $qtelCodeMission): Constantes {
        $this->qtelCodeMission = $qtelCodeMission;
        return $this;
    }

    /**
     * Set the qtel code tache.
     *
     * @param string|null $qtelCodeTache The qtel code tache.
     * @return Constantes Returns this Constantes.
     */
    public function setQtelCodeTache(?string $qtelCodeTache): Constantes {
        $this->qtelCodeTache = $qtelCodeTache;
        return $this;
    }

    /**
     * Set the qtel special.
     *
     * @param int|null $qtelSpecial The qtel special.
     * @return Constantes Returns this Constantes.
     */
    public function setQtelSpecial(?int $qtelSpecial): Constantes {
        $this->qtelSpecial = $qtelSpecial;
        return $this;
    }

    /**
     * Set the rac data cpta.
     *
     * @param string|null $racDataCpta The rac data cpta.
     * @return Constantes Returns this Constantes.
     */
    public function setRacDataCpta(?string $racDataCpta): Constantes {
        $this->racDataCpta = $racDataCpta;
        return $this;
    }

    /**
     * Set the rac data paie.
     *
     * @param string|null $racDataPaie The rac data paie.
     * @return Constantes Returns this Constantes.
     */
    public function setRacDataPaie(?string $racDataPaie): Constantes {
        $this->racDataPaie = $racDataPaie;
        return $this;
    }

    /**
     * Set the radical compte cli.
     *
     * @param string|null $radicalCompteCli The radical compte cli.
     * @return Constantes Returns this Constantes.
     */
    public function setRadicalCompteCli(?string $radicalCompteCli): Constantes {
        $this->radicalCompteCli = $radicalCompteCli;
        return $this;
    }

    /**
     * Set the radical compte frn.
     *
     * @param string|null $radicalCompteFrn The radical compte frn.
     * @return Constantes Returns this Constantes.
     */
    public function setRadicalCompteFrn(?string $radicalCompteFrn): Constantes {
        $this->radicalCompteFrn = $radicalCompteFrn;
        return $this;
    }

    /**
     * Set the sais date fin.
     *
     * @param bool|null $saisDateFin The sais date fin.
     * @return Constantes Returns this Constantes.
     */
    public function setSaisDateFin(?bool $saisDateFin): Constantes {
        $this->saisDateFin = $saisDateFin;
        return $this;
    }

    /**
     * Set the tdfc adhesion totale.
     *
     * @param bool|null $tdfcAdhesionTotale The tdfc adhesion totale.
     * @return Constantes Returns this Constantes.
     */
    public function setTdfcAdhesionTotale(?bool $tdfcAdhesionTotale): Constantes {
        $this->tdfcAdhesionTotale = $tdfcAdhesionTotale;
        return $this;
    }

    /**
     * Set the tdfc emetteur.
     *
     * @param string|null $tdfcEmetteur The tdfc emetteur.
     * @return Constantes Returns this Constantes.
     */
    public function setTdfcEmetteur(?string $tdfcEmetteur): Constantes {
        $this->tdfcEmetteur = $tdfcEmetteur;
        return $this;
    }

    /**
     * Set the tdfc facturant.
     *
     * @param string|null $tdfcFacturant The tdfc facturant.
     * @return Constantes Returns this Constantes.
     */
    public function setTdfcFacturant(?string $tdfcFacturant): Constantes {
        $this->tdfcFacturant = $tdfcFacturant;
        return $this;
    }

    /**
     * Set the tdfc info trans.
     *
     * @param string|null $tdfcInfoTrans The tdfc info trans.
     * @return Constantes Returns this Constantes.
     */
    public function setTdfcInfoTrans(?string $tdfcInfoTrans): Constantes {
        $this->tdfcInfoTrans = $tdfcInfoTrans;
        return $this;
    }

    /**
     * Set the tp interdit creat millesime.
     *
     * @param bool|null $tpInterditCreatMillesime The tp interdit creat millesime.
     * @return Constantes Returns this Constantes.
     */
    public function setTpInterditCreatMillesime(?bool $tpInterditCreatMillesime): Constantes {
        $this->tpInterditCreatMillesime = $tpInterditCreatMillesime;
        return $this;
    }

    /**
     * Set the tp interdit creat mission.
     *
     * @param bool|null $tpInterditCreatMission The tp interdit creat mission.
     * @return Constantes Returns this Constantes.
     */
    public function setTpInterditCreatMission(?bool $tpInterditCreatMission): Constantes {
        $this->tpInterditCreatMission = $tpInterditCreatMission;
        return $this;
    }

    /**
     * Set the tp pas clients sortis.
     *
     * @param bool|null $tpPasClientsSortis The tp pas clients sortis.
     * @return Constantes Returns this Constantes.
     */
    public function setTpPasClientsSortis(?bool $tpPasClientsSortis): Constantes {
        $this->tpPasClientsSortis = $tpPasClientsSortis;
        return $this;
    }

    /**
     * Set the tp pas intervenants.
     *
     * @param bool|null $tpPasIntervenants The tp pas intervenants.
     * @return Constantes Returns this Constantes.
     */
    public function setTpPasIntervenants(?bool $tpPasIntervenants): Constantes {
        $this->tpPasIntervenants = $tpPasIntervenants;
        return $this;
    }

    /**
     * Set the tp prix invisible.
     *
     * @param bool|null $tpPrixInvisible The tp prix invisible.
     * @return Constantes Returns this Constantes.
     */
    public function setTpPrixInvisible(?bool $tpPrixInvisible): Constantes {
        $this->tpPrixInvisible = $tpPrixInvisible;
        return $this;
    }

    /**
     * Set the tp rempli pref auto.
     *
     * @param bool|null $tpRempliPrefAuto The tp rempli pref auto.
     * @return Constantes Returns this Constantes.
     */
    public function setTpRempliPrefAuto(?bool $tpRempliPrefAuto): Constantes {
        $this->tpRempliPrefAuto = $tpRempliPrefAuto;
        return $this;
    }

    /**
     * Set the tp saisie dos.
     *
     * @param bool|null $tpSaisieDos The tp saisie dos.
     * @return Constantes Returns this Constantes.
     */
    public function setTpSaisieDos(?bool $tpSaisieDos): Constantes {
        $this->tpSaisieDos = $tpSaisieDos;
        return $this;
    }

    /**
     * Set the tps passes interdit prix.
     *
     * @param bool|null $tpsPassesInterditPrix The tps passes interdit prix.
     * @return Constantes Returns this Constantes.
     */
    public function setTpsPassesInterditPrix(?bool $tpsPassesInterditPrix): Constantes {
        $this->tpsPassesInterditPrix = $tpsPassesInterditPrix;
        return $this;
    }
}
