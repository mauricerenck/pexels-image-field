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
 * Constantes2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Constantes2 {

    /**
     * Activation conf2 cmav cli.
     *
     * @var bool|null
     */
    private $activationConf2CmavCli;

    /**
     * Active conf conv col.
     *
     * @var bool|null
     */
    private $activeConfConvCol;

    /**
     * Activer saisie regl.
     *
     * @var bool|null
     */
    private $activerSaisieRegl;

    /**
     * Affectations cli frn.
     *
     * @var bool|null
     */
    private $affectationsCliFrn;

    /**
     * Annulation affaire.
     *
     * @var bool|null
     */
    private $annulationAffaire;

    /**
     * Articles lst perso acces gestion modifiables.
     *
     * @var bool|null
     */
    private $articlesLstPersoAccesGestionModifiables;

    /**
     * Articles lst perso acces gestionnaire.
     *
     * @var bool|null
     */
    private $articlesLstPersoAccesGestionnaire;

    /**
     * Articles lst perso champs modif.
     *
     * @var bool|null
     */
    private $articlesLstPersoChampsModif;

    /**
     * Articles lst perso copie colonne.
     *
     * @var bool|null
     */
    private $articlesLstPersoCopieColonne;

    /**
     * Articles lst perso interdire creat.
     *
     * @var bool|null
     */
    private $articlesLstPersoInterdireCreat;

    /**
     * Asp affectation messages.
     *
     * @var string|null
     */
    private $aspAffectationMessages;

    /**
     * Avec heures theo.
     *
     * @var bool|null
     */
    private $avecHeuresTheo;

    /**
     * Calcul nombre messages.
     *
     * @var bool|null
     */
    private $calculNombreMessages;

    /**
     * Champs critere article21.
     *
     * @var string|null
     */
    private $champsCritereArticle21;

    /**
     * Champs critere article210.
     *
     * @var string|null
     */
    private $champsCritereArticle210;

    /**
     * Champs critere article22.
     *
     * @var string|null
     */
    private $champsCritereArticle22;

    /**
     * Champs critere article23.
     *
     * @var string|null
     */
    private $champsCritereArticle23;

    /**
     * Champs critere article24.
     *
     * @var string|null
     */
    private $champsCritereArticle24;

    /**
     * Champs critere article25.
     *
     * @var string|null
     */
    private $champsCritereArticle25;

    /**
     * Champs critere article26.
     *
     * @var string|null
     */
    private $champsCritereArticle26;

    /**
     * Champs critere article27.
     *
     * @var string|null
     */
    private $champsCritereArticle27;

    /**
     * Champs critere article28.
     *
     * @var string|null
     */
    private $champsCritereArticle28;

    /**
     * Champs critere article29.
     *
     * @var string|null
     */
    private $champsCritereArticle29;

    /**
     * Champs critere ent piece ac1.
     *
     * @var string|null
     */
    private $champsCritereEntPieceAc1;

    /**
     * Champs critere ent piece ac10.
     *
     * @var string|null
     */
    private $champsCritereEntPieceAc10;

    /**
     * Champs critere ent piece ac2.
     *
     * @var string|null
     */
    private $champsCritereEntPieceAc2;

    /**
     * Champs critere ent piece ac3.
     *
     * @var string|null
     */
    private $champsCritereEntPieceAc3;

    /**
     * Champs critere ent piece ac4.
     *
     * @var string|null
     */
    private $champsCritereEntPieceAc4;

    /**
     * Champs critere ent piece ac5.
     *
     * @var string|null
     */
    private $champsCritereEntPieceAc5;

    /**
     * Champs critere ent piece ac6.
     *
     * @var string|null
     */
    private $champsCritereEntPieceAc6;

    /**
     * Champs critere ent piece ac7.
     *
     * @var string|null
     */
    private $champsCritereEntPieceAc7;

    /**
     * Champs critere ent piece ac8.
     *
     * @var string|null
     */
    private $champsCritereEntPieceAc8;

    /**
     * Champs critere ent piece ac9.
     *
     * @var string|null
     */
    private $champsCritereEntPieceAc9;

    /**
     * Cle acces conf.
     *
     * @var string|null
     */
    private $cleAccesConf;

    /**
     * Cle acces plaquettes.
     *
     * @var string|null
     */
    private $cleAccesPlaquettes;

    /**
     * Cle acces q admin db.
     *
     * @var string|null
     */
    private $cleAccesQAdminDb;

    /**
     * Cloture archivage auto.
     *
     * @var bool|null
     */
    private $clotureArchivageAuto;

    /**
     * Code client quadratus.
     *
     * @var string|null
     */
    private $codeClientQuadratus;

    /**
     * Compteur fil discussion.
     *
     * @var int|null
     */
    private $compteurFilDiscussion;

    /**
     * Confidentialite affaire.
     *
     * @var bool|null
     */
    private $confidentialiteAffaire;

    /**
     * Cout moyen horaire.
     *
     * @var float|null
     */
    private $coutMoyenHoraire;

    /**
     * Create cli1 fact par bl.
     *
     * @var bool|null
     */
    private $createCli1FactParBl;

    /**
     * Creation affaire.
     *
     * @var bool|null
     */
    private $creationAffaire;

    /**
     * Date dha.
     *
     * @var DateTime|null
     */
    private $dateDha;

    /**
     * Date last exe qpub web.
     *
     * @var DateTime|null
     */
    private $dateLastExeQpubWeb;

    /**
     * Date pha.
     *
     * @var DateTime|null
     */
    private $datePha;

    /**
     * Derniere version cd.
     *
     * @var string|null
     */
    private $derniereVersionCd;

    /**
     * Droit collab visu documents.
     *
     * @var bool|null
     */
    private $droitCollabVisuDocuments;

    /**
     * e ws cabinet.
     *
     * @var string|null
     */
    private $eWsCabinet;

    /**
     * e ws coll id.
     *
     * @var string|null
     */
    private $eWsCollId;

    /**
     * e ws coll mdp.
     *
     * @var string|null
     */
    private $eWsCollMdp;

    /**
     * e ws srv mdp.
     *
     * @var string|null
     */
    private $eWsSrvMdp;

    /**
     * e ws srv name.
     *
     * @var string|null
     */
    private $eWsSrvName;

    /**
     * e ws srv util.
     *
     * @var string|null
     */
    private $eWsSrvUtil;

    /**
     * Ech detail aff.
     *
     * @var bool|null
     */
    private $echDetailAff;

    /**
     * Etebac dest message.
     *
     * @var string|null
     */
    private $etebacDestMessage;

    /**
     * F gsur ac.
     *
     * @var bool|null
     */
    private $fGsurAc;

    /**
     * F gsur monf.
     *
     * @var bool|null
     */
    private $fGsurMonf;

    /**
     * Familles liees.
     *
     * @var bool|null
     */
    private $famillesLiees;

    /**
     * Fg sur cde frn.
     *
     * @var bool|null
     */
    private $fgSurCdeFrn;

    /**
     * Fiche cli ne pas proposer creation dpdc.
     *
     * @var bool|null
     */
    private $ficheCliNePasProposerCreationDpdc;

    /**
     * Gestion gammes.
     *
     * @var bool|null
     */
    private $gestionGammes;

    /**
     * Gestion pointeuse q fact.
     *
     * @var bool|null
     */
    private $gestionPointeuseQFact;

    /**
     * Gestion pointeuse qc.
     *
     * @var bool|null
     */
    private $gestionPointeuseQc;

    /**
     * Gestion pointeuse qgi.
     *
     * @var bool|null
     */
    private $gestionPointeuseQgi;

    /**
     * Gestion pointeuse qp.
     *
     * @var bool|null
     */
    private $gestionPointeuseQp;

    /**
     * Gestion tarifs transporteurs.
     *
     * @var bool|null
     */
    private $gestionTarifsTransporteurs;

    /**
     * Gestion tarifs transporteurs nb dec.
     *
     * @var int|null
     */
    private $gestionTarifsTransporteursNbDec;

    /**
     * Gestion variantes.
     *
     * @var bool|null
     */
    private $gestionVariantes;

    /**
     * Ht avec jours feries.
     *
     * @var bool|null
     */
    private $htAvecJoursFeries;

    /**
     * Ht avec saisie conges.
     *
     * @var bool|null
     */
    private $htAvecSaisieConges;

    /**
     * Ht avec saisie conges codes clients.
     *
     * @var string|null
     */
    private $htAvecSaisieCongesCodesClients;

    /**
     * Ht avec saisie conges codes taches.
     *
     * @var string|null
     */
    private $htAvecSaisieCongesCodesTaches;

    /**
     * Increm auto article.
     *
     * @var bool|null
     */
    private $incremAutoArticle;

    /**
     * Interdire acces archives cpta.
     *
     * @var bool|null
     */
    private $interdireAccesArchivesCpta;

    /**
     * Interdire acces archives paie.
     *
     * @var bool|null
     */
    private $interdireAccesArchivesPaie;

    /**
     * Interdire acces edition balance.
     *
     * @var bool|null
     */
    private $interdireAccesEditionBalance;

    /**
     * Interdire acces supp doc arch.
     *
     * @var bool|null
     */
    private $interdireAccesSuppDocArch;

    /**
     * Interdire publi doc web.
     *
     * @var bool|null
     */
    private $interdirePubliDocWeb;

    /**
     * Ip prive qws.
     *
     * @var string|null
     */
    private $ipPriveQws;

    /**
     * Liaison tda.
     *
     * @var bool|null
     */
    private $liaisonTda;

    /**
     * Lib affectation frn1.
     *
     * @var string|null
     */
    private $libAffectationFrn1;

    /**
     * Lib affectation frn2.
     *
     * @var string|null
     */
    private $libAffectationFrn2;

    /**
     * Lib affectation frn3.
     *
     * @var string|null
     */
    private $libAffectationFrn3;

    /**
     * Lib affectation frn4.
     *
     * @var string|null
     */
    private $libAffectationFrn4;

    /**
     * Lib affectation frn5.
     *
     * @var string|null
     */
    private $libAffectationFrn5;

    /**
     * Lib affectation frn6.
     *
     * @var string|null
     */
    private $libAffectationFrn6;

    /**
     * Lib affectation frn7.
     *
     * @var string|null
     */
    private $libAffectationFrn7;

    /**
     * Lib critere article21.
     *
     * @var string|null
     */
    private $libCritereArticle21;

    /**
     * Lib critere article210.
     *
     * @var string|null
     */
    private $libCritereArticle210;

    /**
     * Lib critere article22.
     *
     * @var string|null
     */
    private $libCritereArticle22;

    /**
     * Lib critere article23.
     *
     * @var string|null
     */
    private $libCritereArticle23;

    /**
     * Lib critere article24.
     *
     * @var string|null
     */
    private $libCritereArticle24;

    /**
     * Lib critere article25.
     *
     * @var string|null
     */
    private $libCritereArticle25;

    /**
     * Lib critere article26.
     *
     * @var string|null
     */
    private $libCritereArticle26;

    /**
     * Lib critere article27.
     *
     * @var string|null
     */
    private $libCritereArticle27;

    /**
     * Lib critere article28.
     *
     * @var string|null
     */
    private $libCritereArticle28;

    /**
     * Lib critere article29.
     *
     * @var string|null
     */
    private $libCritereArticle29;

    /**
     * Lib critere ent piece ac1.
     *
     * @var string|null
     */
    private $libCritereEntPieceAc1;

    /**
     * Lib critere ent piece ac10.
     *
     * @var string|null
     */
    private $libCritereEntPieceAc10;

    /**
     * Lib critere ent piece ac2.
     *
     * @var string|null
     */
    private $libCritereEntPieceAc2;

    /**
     * Lib critere ent piece ac3.
     *
     * @var string|null
     */
    private $libCritereEntPieceAc3;

    /**
     * Lib critere ent piece ac4.
     *
     * @var string|null
     */
    private $libCritereEntPieceAc4;

    /**
     * Lib critere ent piece ac5.
     *
     * @var string|null
     */
    private $libCritereEntPieceAc5;

    /**
     * Lib critere ent piece ac6.
     *
     * @var string|null
     */
    private $libCritereEntPieceAc6;

    /**
     * Lib critere ent piece ac7.
     *
     * @var string|null
     */
    private $libCritereEntPieceAc7;

    /**
     * Lib critere ent piece ac8.
     *
     * @var string|null
     */
    private $libCritereEntPieceAc8;

    /**
     * Lib critere ent piece ac9.
     *
     * @var string|null
     */
    private $libCritereEntPieceAc9;

    /**
     * Lib frais1.
     *
     * @var string|null
     */
    private $libFrais1;

    /**
     * Lib frais2.
     *
     * @var string|null
     */
    private $libFrais2;

    /**
     * Lib frais3.
     *
     * @var string|null
     */
    private $libFrais3;

    /**
     * Libelle gamme.
     *
     * @var string|null
     */
    private $libelleGamme;

    /**
     * Libelle variante.
     *
     * @var string|null
     */
    private $libelleVariante;

    /**
     * lng code article auto.
     *
     * @var int|null
     */
    private $lngCodeArticleAuto;

    /**
     * Longueur num aff.
     *
     * @var int|null
     */
    private $longueurNumAff;

    /**
     * Maj codes activite cga.
     *
     * @var string|null
     */
    private $majCodesActiviteCga;

    /**
     * Mess aspod.
     *
     * @var bool|null
     */
    private $messAspod;

    /**
     * Modif affaire.
     *
     * @var string|null
     */
    private $modifAffaire;

    /**
     * Modif droits asp.
     *
     * @var bool|null
     */
    private $modifDroitsAsp;

    /**
     * Nb max gamme.
     *
     * @var int|null
     */
    private $nbMaxGamme;

    /**
     * Ne pas creer cpt cli.
     *
     * @var bool|null
     */
    private $nePasCreerCptCli;

    /**
     * Ne pas creer cpt frn.
     *
     * @var bool|null
     */
    private $nePasCreerCptFrn;

    /**
     * New db infos.
     *
     * @var bool|null
     */
    private $newDbInfos;

    /**
     * New q bureau.
     *
     * @var bool|null
     */
    private $newQBureau;

    /**
     * No doss fact cab.
     *
     * @var string|null
     */
    private $noDossFactCab;

    /**
     * Pas de lien comptabilite.
     *
     * @var bool|null
     */
    private $pasDeLienComptabilite;

    /**
     * Pme dossier rattachement.
     *
     * @var string|null
     */
    private $pmeDossierRattachement;

    /**
     * Prefixe code client.
     *
     * @var string|null
     */
    private $prefixeCodeClient;

    /**
     * Prochain code client.
     *
     * @var string|null
     */
    private $prochainCodeClient;

    /**
     * Proxy actif.
     *
     * @var bool|null
     */
    private $proxyActif;

    /**
     * Proxy adresse.
     *
     * @var string|null
     */
    private $proxyAdresse;

    /**
     * Proxy port.
     *
     * @var int|null
     */
    private $proxyPort;

    /**
     * Q pub web code collaborateur dest.
     *
     * @var string|null
     */
    private $qPubWebCodeCollaborateurDest;

    /**
     * Qws chemin logo.
     *
     * @var string|null
     */
    private $qwsCheminLogo;

    /**
     * Qws code ipl.
     *
     * @var string|null
     */
    private $qwsCodeIpl;

    /**
     * Qws http securise.
     *
     * @var bool|null
     */
    private $qwsHttpSecurise;

    /**
     * Qws nom produit.
     *
     * @var string|null
     */
    private $qwsNomProduit;

    /**
     * Qws utiliser logo cabinet.
     *
     * @var bool|null
     */
    private $qwsUtiliserLogoCabinet;

    /**
     * Qwsipl.
     *
     * @var string|null
     */
    private $qwsipl;

    /**
     * Rac data paie.
     *
     * @var string|null
     */
    private $racDataPaie;

    /**
     * Rapport q infos.
     *
     * @var string|null
     */
    private $rapportQInfos;

    /**
     * Req demandeur.
     *
     * @var string|null
     */
    private $reqDemandeur;

    /**
     * Saisie propriete mess.
     *
     * @var int|null
     */
    private $saisieProprieteMess;

    /**
     * Saisie regl direct.
     *
     * @var bool|null
     */
    private $saisieReglDirect;

    /**
     * Saisie temps nb j apres.
     *
     * @var int|null
     */
    private $saisieTempsNbJApres;

    /**
     * Saisie temps nb j avant.
     *
     * @var int|null
     */
    private $saisieTempsNbJAvant;

    /**
     * Saisie tp ne pas afficher dp.
     *
     * @var bool|null
     */
    private $saisieTpNePasAfficherDp;

    /**
     * Saisie tp onglet unique dp.
     *
     * @var bool|null
     */
    private $saisieTpOngletUniqueDp;

    /**
     * Saisie tp onglet unique tn.
     *
     * @var bool|null
     */
    private $saisieTpOngletUniqueTn;

    /**
     * Save histo memo2 file.
     *
     * @var bool|null
     */
    private $saveHistoMemo2File;

    /**
     * Sel av lst perso acces gestion modifiables.
     *
     * @var bool|null
     */
    private $selAvLstPersoAccesGestionModifiables;

    /**
     * Sel av lst perso acces gestionnaire.
     *
     * @var bool|null
     */
    private $selAvLstPersoAccesGestionnaire;

    /**
     * Sel av lst perso champs modif.
     *
     * @var bool|null
     */
    private $selAvLstPersoChampsModif;

    /**
     * Sel av lst perso copie colonne.
     *
     * @var bool|null
     */
    private $selAvLstPersoCopieColonne;

    /**
     * Sel av lst perso interdire creat.
     *
     * @var bool|null
     */
    private $selAvLstPersoInterdireCreat;

    /**
     * Sms api key.
     *
     * @var string|null
     */
    private $smsApiKey;

    /**
     * Sms droit acces.
     *
     * @var bool|null
     */
    private $smsDroitAcces;

    /**
     * Sms key.
     *
     * @var string|null
     */
    private $smsKey;

    /**
     * Sms prestataire.
     *
     * @var string|null
     */
    private $smsPrestataire;

    /**
     * Sms sender.
     *
     * @var string|null
     */
    private $smsSender;

    /**
     * Sms type.
     *
     * @var int|null
     */
    private $smsType;

    /**
     * Sms user login.
     *
     * @var string|null
     */
    private $smsUserLogin;

    /**
     * Solde cpta od.
     *
     * @var bool|null
     */
    private $soldeCptaOd;

    /**
     * Suivi client intitule generic1.
     *
     * @var string|null
     */
    private $suiviClientIntituleGeneric1;

    /**
     * Suivi client intitule generic10.
     *
     * @var string|null
     */
    private $suiviClientIntituleGeneric10;

    /**
     * Suivi client intitule generic2.
     *
     * @var string|null
     */
    private $suiviClientIntituleGeneric2;

    /**
     * Suivi client intitule generic3.
     *
     * @var string|null
     */
    private $suiviClientIntituleGeneric3;

    /**
     * Suivi client intitule generic4.
     *
     * @var string|null
     */
    private $suiviClientIntituleGeneric4;

    /**
     * Suivi client intitule generic5.
     *
     * @var string|null
     */
    private $suiviClientIntituleGeneric5;

    /**
     * Suivi client intitule generic6.
     *
     * @var string|null
     */
    private $suiviClientIntituleGeneric6;

    /**
     * Suivi client intitule generic7.
     *
     * @var string|null
     */
    private $suiviClientIntituleGeneric7;

    /**
     * Suivi client intitule generic8.
     *
     * @var string|null
     */
    private $suiviClientIntituleGeneric8;

    /**
     * Suivi client intitule generic9.
     *
     * @var string|null
     */
    private $suiviClientIntituleGeneric9;

    /**
     * Tp acces encours client.
     *
     * @var bool|null
     */
    private $tpAccesEncoursClient;

    /**
     * Tp avancement a la ligne.
     *
     * @var bool|null
     */
    private $tpAvancementALaLigne;

    /**
     * Tp interdit qte.
     *
     * @var bool|null
     */
    private $tpInterditQte;

    /**
     * Tp libelle mission.
     *
     * @var bool|null
     */
    private $tpLibelleMission;

    /**
     * Tp limite saisie non operationnel.
     *
     * @var bool|null
     */
    private $tpLimiteSaisieNonOperationnel;

    /**
     * Tp pas mois cloture.
     *
     * @var bool|null
     */
    private $tpPasMoisCloture;

    /**
     * Tp pourcentage non operationnel date.
     *
     * @var DateTime|null
     */
    private $tpPourcentageNonOperationnelDate;

    /**
     * Tp qte invisible.
     *
     * @var bool|null
     */
    private $tpQteInvisible;

    /**
     * Tp saisie avancement.
     *
     * @var bool|null
     */
    private $tpSaisieAvancement;

    /**
     * Tppupv123.
     *
     * @var bool|null
     */
    private $tppupv123;

    /**
     * Tps num archive.
     *
     * @var string|null
     */
    private $tpsNumArchive;

    /**
     * Trans variantes factgi.
     *
     * @var bool|null
     */
    private $transVariantesFactgi;

    /**
     * Type affichage solde fourn.
     *
     * @var string|null
     */
    private $typeAffichageSoldeFourn;

    /**
     * Type frais1.
     *
     * @var bool|null
     */
    private $typeFrais1;

    /**
     * Type frais2.
     *
     * @var bool|null
     */
    private $typeFrais2;

    /**
     * Type frais3.
     *
     * @var bool|null
     */
    private $typeFrais3;

    /**
     * Type saisie taux devises.
     *
     * @var string|null
     */
    private $typeSaisieTauxDevises;

    /**
     * V esur dep aff.
     *
     * @var bool|null
     */
    private $vEsurDepAff;

    /**
     * Val auto tarifs transporteurs.
     *
     * @var bool|null
     */
    private $valAutoTarifsTransporteurs;

    /**
     * Visualisation fiche cabinet.
     *
     * @var bool|null
     */
    private $visualisationFicheCabinet;

    /**
     * Word acces par q client.
     *
     * @var bool|null
     */
    private $wordAccesParQClient;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the activation conf2 cmav cli.
     *
     * @return bool|null Returns the activation conf2 cmav cli.
     */
    public function getActivationConf2CmavCli(): ?bool {
        return $this->activationConf2CmavCli;
    }

    /**
     * Get the active conf conv col.
     *
     * @return bool|null Returns the active conf conv col.
     */
    public function getActiveConfConvCol(): ?bool {
        return $this->activeConfConvCol;
    }

    /**
     * Get the activer saisie regl.
     *
     * @return bool|null Returns the activer saisie regl.
     */
    public function getActiverSaisieRegl(): ?bool {
        return $this->activerSaisieRegl;
    }

    /**
     * Get the affectations cli frn.
     *
     * @return bool|null Returns the affectations cli frn.
     */
    public function getAffectationsCliFrn(): ?bool {
        return $this->affectationsCliFrn;
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
     * Get the articles lst perso acces gestion modifiables.
     *
     * @return bool|null Returns the articles lst perso acces gestion modifiables.
     */
    public function getArticlesLstPersoAccesGestionModifiables(): ?bool {
        return $this->articlesLstPersoAccesGestionModifiables;
    }

    /**
     * Get the articles lst perso acces gestionnaire.
     *
     * @return bool|null Returns the articles lst perso acces gestionnaire.
     */
    public function getArticlesLstPersoAccesGestionnaire(): ?bool {
        return $this->articlesLstPersoAccesGestionnaire;
    }

    /**
     * Get the articles lst perso champs modif.
     *
     * @return bool|null Returns the articles lst perso champs modif.
     */
    public function getArticlesLstPersoChampsModif(): ?bool {
        return $this->articlesLstPersoChampsModif;
    }

    /**
     * Get the articles lst perso copie colonne.
     *
     * @return bool|null Returns the articles lst perso copie colonne.
     */
    public function getArticlesLstPersoCopieColonne(): ?bool {
        return $this->articlesLstPersoCopieColonne;
    }

    /**
     * Get the articles lst perso interdire creat.
     *
     * @return bool|null Returns the articles lst perso interdire creat.
     */
    public function getArticlesLstPersoInterdireCreat(): ?bool {
        return $this->articlesLstPersoInterdireCreat;
    }

    /**
     * Get the asp affectation messages.
     *
     * @return string|null Returns the asp affectation messages.
     */
    public function getAspAffectationMessages(): ?string {
        return $this->aspAffectationMessages;
    }

    /**
     * Get the avec heures theo.
     *
     * @return bool|null Returns the avec heures theo.
     */
    public function getAvecHeuresTheo(): ?bool {
        return $this->avecHeuresTheo;
    }

    /**
     * Get the calcul nombre messages.
     *
     * @return bool|null Returns the calcul nombre messages.
     */
    public function getCalculNombreMessages(): ?bool {
        return $this->calculNombreMessages;
    }

    /**
     * Get the champs critere article21.
     *
     * @return string|null Returns the champs critere article21.
     */
    public function getChampsCritereArticle21(): ?string {
        return $this->champsCritereArticle21;
    }

    /**
     * Get the champs critere article210.
     *
     * @return string|null Returns the champs critere article210.
     */
    public function getChampsCritereArticle210(): ?string {
        return $this->champsCritereArticle210;
    }

    /**
     * Get the champs critere article22.
     *
     * @return string|null Returns the champs critere article22.
     */
    public function getChampsCritereArticle22(): ?string {
        return $this->champsCritereArticle22;
    }

    /**
     * Get the champs critere article23.
     *
     * @return string|null Returns the champs critere article23.
     */
    public function getChampsCritereArticle23(): ?string {
        return $this->champsCritereArticle23;
    }

    /**
     * Get the champs critere article24.
     *
     * @return string|null Returns the champs critere article24.
     */
    public function getChampsCritereArticle24(): ?string {
        return $this->champsCritereArticle24;
    }

    /**
     * Get the champs critere article25.
     *
     * @return string|null Returns the champs critere article25.
     */
    public function getChampsCritereArticle25(): ?string {
        return $this->champsCritereArticle25;
    }

    /**
     * Get the champs critere article26.
     *
     * @return string|null Returns the champs critere article26.
     */
    public function getChampsCritereArticle26(): ?string {
        return $this->champsCritereArticle26;
    }

    /**
     * Get the champs critere article27.
     *
     * @return string|null Returns the champs critere article27.
     */
    public function getChampsCritereArticle27(): ?string {
        return $this->champsCritereArticle27;
    }

    /**
     * Get the champs critere article28.
     *
     * @return string|null Returns the champs critere article28.
     */
    public function getChampsCritereArticle28(): ?string {
        return $this->champsCritereArticle28;
    }

    /**
     * Get the champs critere article29.
     *
     * @return string|null Returns the champs critere article29.
     */
    public function getChampsCritereArticle29(): ?string {
        return $this->champsCritereArticle29;
    }

    /**
     * Get the champs critere ent piece ac1.
     *
     * @return string|null Returns the champs critere ent piece ac1.
     */
    public function getChampsCritereEntPieceAc1(): ?string {
        return $this->champsCritereEntPieceAc1;
    }

    /**
     * Get the champs critere ent piece ac10.
     *
     * @return string|null Returns the champs critere ent piece ac10.
     */
    public function getChampsCritereEntPieceAc10(): ?string {
        return $this->champsCritereEntPieceAc10;
    }

    /**
     * Get the champs critere ent piece ac2.
     *
     * @return string|null Returns the champs critere ent piece ac2.
     */
    public function getChampsCritereEntPieceAc2(): ?string {
        return $this->champsCritereEntPieceAc2;
    }

    /**
     * Get the champs critere ent piece ac3.
     *
     * @return string|null Returns the champs critere ent piece ac3.
     */
    public function getChampsCritereEntPieceAc3(): ?string {
        return $this->champsCritereEntPieceAc3;
    }

    /**
     * Get the champs critere ent piece ac4.
     *
     * @return string|null Returns the champs critere ent piece ac4.
     */
    public function getChampsCritereEntPieceAc4(): ?string {
        return $this->champsCritereEntPieceAc4;
    }

    /**
     * Get the champs critere ent piece ac5.
     *
     * @return string|null Returns the champs critere ent piece ac5.
     */
    public function getChampsCritereEntPieceAc5(): ?string {
        return $this->champsCritereEntPieceAc5;
    }

    /**
     * Get the champs critere ent piece ac6.
     *
     * @return string|null Returns the champs critere ent piece ac6.
     */
    public function getChampsCritereEntPieceAc6(): ?string {
        return $this->champsCritereEntPieceAc6;
    }

    /**
     * Get the champs critere ent piece ac7.
     *
     * @return string|null Returns the champs critere ent piece ac7.
     */
    public function getChampsCritereEntPieceAc7(): ?string {
        return $this->champsCritereEntPieceAc7;
    }

    /**
     * Get the champs critere ent piece ac8.
     *
     * @return string|null Returns the champs critere ent piece ac8.
     */
    public function getChampsCritereEntPieceAc8(): ?string {
        return $this->champsCritereEntPieceAc8;
    }

    /**
     * Get the champs critere ent piece ac9.
     *
     * @return string|null Returns the champs critere ent piece ac9.
     */
    public function getChampsCritereEntPieceAc9(): ?string {
        return $this->champsCritereEntPieceAc9;
    }

    /**
     * Get the cle acces conf.
     *
     * @return string|null Returns the cle acces conf.
     */
    public function getCleAccesConf(): ?string {
        return $this->cleAccesConf;
    }

    /**
     * Get the cle acces plaquettes.
     *
     * @return string|null Returns the cle acces plaquettes.
     */
    public function getCleAccesPlaquettes(): ?string {
        return $this->cleAccesPlaquettes;
    }

    /**
     * Get the cle acces q admin db.
     *
     * @return string|null Returns the cle acces q admin db.
     */
    public function getCleAccesQAdminDb(): ?string {
        return $this->cleAccesQAdminDb;
    }

    /**
     * Get the cloture archivage auto.
     *
     * @return bool|null Returns the cloture archivage auto.
     */
    public function getClotureArchivageAuto(): ?bool {
        return $this->clotureArchivageAuto;
    }

    /**
     * Get the code client quadratus.
     *
     * @return string|null Returns the code client quadratus.
     */
    public function getCodeClientQuadratus(): ?string {
        return $this->codeClientQuadratus;
    }

    /**
     * Get the compteur fil discussion.
     *
     * @return int|null Returns the compteur fil discussion.
     */
    public function getCompteurFilDiscussion(): ?int {
        return $this->compteurFilDiscussion;
    }

    /**
     * Get the confidentialite affaire.
     *
     * @return bool|null Returns the confidentialite affaire.
     */
    public function getConfidentialiteAffaire(): ?bool {
        return $this->confidentialiteAffaire;
    }

    /**
     * Get the cout moyen horaire.
     *
     * @return float|null Returns the cout moyen horaire.
     */
    public function getCoutMoyenHoraire(): ?float {
        return $this->coutMoyenHoraire;
    }

    /**
     * Get the create cli1 fact par bl.
     *
     * @return bool|null Returns the create cli1 fact par bl.
     */
    public function getCreateCli1FactParBl(): ?bool {
        return $this->createCli1FactParBl;
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
     * Get the date dha.
     *
     * @return DateTime|null Returns the date dha.
     */
    public function getDateDha(): ?DateTime {
        return $this->dateDha;
    }

    /**
     * Get the date last exe qpub web.
     *
     * @return DateTime|null Returns the date last exe qpub web.
     */
    public function getDateLastExeQpubWeb(): ?DateTime {
        return $this->dateLastExeQpubWeb;
    }

    /**
     * Get the date pha.
     *
     * @return DateTime|null Returns the date pha.
     */
    public function getDatePha(): ?DateTime {
        return $this->datePha;
    }

    /**
     * Get the derniere version cd.
     *
     * @return string|null Returns the derniere version cd.
     */
    public function getDerniereVersionCd(): ?string {
        return $this->derniereVersionCd;
    }

    /**
     * Get the droit collab visu documents.
     *
     * @return bool|null Returns the droit collab visu documents.
     */
    public function getDroitCollabVisuDocuments(): ?bool {
        return $this->droitCollabVisuDocuments;
    }

    /**
     * Get the ech detail aff.
     *
     * @return bool|null Returns the ech detail aff.
     */
    public function getEchDetailAff(): ?bool {
        return $this->echDetailAff;
    }

    /**
     * Get the etebac dest message.
     *
     * @return string|null Returns the etebac dest message.
     */
    public function getEtebacDestMessage(): ?string {
        return $this->etebacDestMessage;
    }

    /**
     * Get the f gsur ac.
     *
     * @return bool|null Returns the f gsur ac.
     */
    public function getFGsurAc(): ?bool {
        return $this->fGsurAc;
    }

    /**
     * Get the f gsur monf.
     *
     * @return bool|null Returns the f gsur monf.
     */
    public function getFGsurMonf(): ?bool {
        return $this->fGsurMonf;
    }

    /**
     * Get the familles liees.
     *
     * @return bool|null Returns the familles liees.
     */
    public function getFamillesLiees(): ?bool {
        return $this->famillesLiees;
    }

    /**
     * Get the fg sur cde frn.
     *
     * @return bool|null Returns the fg sur cde frn.
     */
    public function getFgSurCdeFrn(): ?bool {
        return $this->fgSurCdeFrn;
    }

    /**
     * Get the fiche cli ne pas proposer creation dpdc.
     *
     * @return bool|null Returns the fiche cli ne pas proposer creation dpdc.
     */
    public function getFicheCliNePasProposerCreationDpdc(): ?bool {
        return $this->ficheCliNePasProposerCreationDpdc;
    }

    /**
     * Get the gestion gammes.
     *
     * @return bool|null Returns the gestion gammes.
     */
    public function getGestionGammes(): ?bool {
        return $this->gestionGammes;
    }

    /**
     * Get the gestion pointeuse q fact.
     *
     * @return bool|null Returns the gestion pointeuse q fact.
     */
    public function getGestionPointeuseQFact(): ?bool {
        return $this->gestionPointeuseQFact;
    }

    /**
     * Get the gestion pointeuse qc.
     *
     * @return bool|null Returns the gestion pointeuse qc.
     */
    public function getGestionPointeuseQc(): ?bool {
        return $this->gestionPointeuseQc;
    }

    /**
     * Get the gestion pointeuse qgi.
     *
     * @return bool|null Returns the gestion pointeuse qgi.
     */
    public function getGestionPointeuseQgi(): ?bool {
        return $this->gestionPointeuseQgi;
    }

    /**
     * Get the gestion pointeuse qp.
     *
     * @return bool|null Returns the gestion pointeuse qp.
     */
    public function getGestionPointeuseQp(): ?bool {
        return $this->gestionPointeuseQp;
    }

    /**
     * Get the gestion tarifs transporteurs.
     *
     * @return bool|null Returns the gestion tarifs transporteurs.
     */
    public function getGestionTarifsTransporteurs(): ?bool {
        return $this->gestionTarifsTransporteurs;
    }

    /**
     * Get the gestion tarifs transporteurs nb dec.
     *
     * @return int|null Returns the gestion tarifs transporteurs nb dec.
     */
    public function getGestionTarifsTransporteursNbDec(): ?int {
        return $this->gestionTarifsTransporteursNbDec;
    }

    /**
     * Get the gestion variantes.
     *
     * @return bool|null Returns the gestion variantes.
     */
    public function getGestionVariantes(): ?bool {
        return $this->gestionVariantes;
    }

    /**
     * Get the ht avec jours feries.
     *
     * @return bool|null Returns the ht avec jours feries.
     */
    public function getHtAvecJoursFeries(): ?bool {
        return $this->htAvecJoursFeries;
    }

    /**
     * Get the ht avec saisie conges.
     *
     * @return bool|null Returns the ht avec saisie conges.
     */
    public function getHtAvecSaisieConges(): ?bool {
        return $this->htAvecSaisieConges;
    }

    /**
     * Get the ht avec saisie conges codes clients.
     *
     * @return string|null Returns the ht avec saisie conges codes clients.
     */
    public function getHtAvecSaisieCongesCodesClients(): ?string {
        return $this->htAvecSaisieCongesCodesClients;
    }

    /**
     * Get the ht avec saisie conges codes taches.
     *
     * @return string|null Returns the ht avec saisie conges codes taches.
     */
    public function getHtAvecSaisieCongesCodesTaches(): ?string {
        return $this->htAvecSaisieCongesCodesTaches;
    }

    /**
     * Get the increm auto article.
     *
     * @return bool|null Returns the increm auto article.
     */
    public function getIncremAutoArticle(): ?bool {
        return $this->incremAutoArticle;
    }

    /**
     * Get the interdire acces archives cpta.
     *
     * @return bool|null Returns the interdire acces archives cpta.
     */
    public function getInterdireAccesArchivesCpta(): ?bool {
        return $this->interdireAccesArchivesCpta;
    }

    /**
     * Get the interdire acces archives paie.
     *
     * @return bool|null Returns the interdire acces archives paie.
     */
    public function getInterdireAccesArchivesPaie(): ?bool {
        return $this->interdireAccesArchivesPaie;
    }

    /**
     * Get the interdire acces edition balance.
     *
     * @return bool|null Returns the interdire acces edition balance.
     */
    public function getInterdireAccesEditionBalance(): ?bool {
        return $this->interdireAccesEditionBalance;
    }

    /**
     * Get the interdire acces supp doc arch.
     *
     * @return bool|null Returns the interdire acces supp doc arch.
     */
    public function getInterdireAccesSuppDocArch(): ?bool {
        return $this->interdireAccesSuppDocArch;
    }

    /**
     * Get the interdire publi doc web.
     *
     * @return bool|null Returns the interdire publi doc web.
     */
    public function getInterdirePubliDocWeb(): ?bool {
        return $this->interdirePubliDocWeb;
    }

    /**
     * Get the ip prive qws.
     *
     * @return string|null Returns the ip prive qws.
     */
    public function getIpPriveQws(): ?string {
        return $this->ipPriveQws;
    }

    /**
     * Get the liaison tda.
     *
     * @return bool|null Returns the liaison tda.
     */
    public function getLiaisonTda(): ?bool {
        return $this->liaisonTda;
    }

    /**
     * Get the lib affectation frn1.
     *
     * @return string|null Returns the lib affectation frn1.
     */
    public function getLibAffectationFrn1(): ?string {
        return $this->libAffectationFrn1;
    }

    /**
     * Get the lib affectation frn2.
     *
     * @return string|null Returns the lib affectation frn2.
     */
    public function getLibAffectationFrn2(): ?string {
        return $this->libAffectationFrn2;
    }

    /**
     * Get the lib affectation frn3.
     *
     * @return string|null Returns the lib affectation frn3.
     */
    public function getLibAffectationFrn3(): ?string {
        return $this->libAffectationFrn3;
    }

    /**
     * Get the lib affectation frn4.
     *
     * @return string|null Returns the lib affectation frn4.
     */
    public function getLibAffectationFrn4(): ?string {
        return $this->libAffectationFrn4;
    }

    /**
     * Get the lib affectation frn5.
     *
     * @return string|null Returns the lib affectation frn5.
     */
    public function getLibAffectationFrn5(): ?string {
        return $this->libAffectationFrn5;
    }

    /**
     * Get the lib affectation frn6.
     *
     * @return string|null Returns the lib affectation frn6.
     */
    public function getLibAffectationFrn6(): ?string {
        return $this->libAffectationFrn6;
    }

    /**
     * Get the lib affectation frn7.
     *
     * @return string|null Returns the lib affectation frn7.
     */
    public function getLibAffectationFrn7(): ?string {
        return $this->libAffectationFrn7;
    }

    /**
     * Get the lib critere article21.
     *
     * @return string|null Returns the lib critere article21.
     */
    public function getLibCritereArticle21(): ?string {
        return $this->libCritereArticle21;
    }

    /**
     * Get the lib critere article210.
     *
     * @return string|null Returns the lib critere article210.
     */
    public function getLibCritereArticle210(): ?string {
        return $this->libCritereArticle210;
    }

    /**
     * Get the lib critere article22.
     *
     * @return string|null Returns the lib critere article22.
     */
    public function getLibCritereArticle22(): ?string {
        return $this->libCritereArticle22;
    }

    /**
     * Get the lib critere article23.
     *
     * @return string|null Returns the lib critere article23.
     */
    public function getLibCritereArticle23(): ?string {
        return $this->libCritereArticle23;
    }

    /**
     * Get the lib critere article24.
     *
     * @return string|null Returns the lib critere article24.
     */
    public function getLibCritereArticle24(): ?string {
        return $this->libCritereArticle24;
    }

    /**
     * Get the lib critere article25.
     *
     * @return string|null Returns the lib critere article25.
     */
    public function getLibCritereArticle25(): ?string {
        return $this->libCritereArticle25;
    }

    /**
     * Get the lib critere article26.
     *
     * @return string|null Returns the lib critere article26.
     */
    public function getLibCritereArticle26(): ?string {
        return $this->libCritereArticle26;
    }

    /**
     * Get the lib critere article27.
     *
     * @return string|null Returns the lib critere article27.
     */
    public function getLibCritereArticle27(): ?string {
        return $this->libCritereArticle27;
    }

    /**
     * Get the lib critere article28.
     *
     * @return string|null Returns the lib critere article28.
     */
    public function getLibCritereArticle28(): ?string {
        return $this->libCritereArticle28;
    }

    /**
     * Get the lib critere article29.
     *
     * @return string|null Returns the lib critere article29.
     */
    public function getLibCritereArticle29(): ?string {
        return $this->libCritereArticle29;
    }

    /**
     * Get the lib critere ent piece ac1.
     *
     * @return string|null Returns the lib critere ent piece ac1.
     */
    public function getLibCritereEntPieceAc1(): ?string {
        return $this->libCritereEntPieceAc1;
    }

    /**
     * Get the lib critere ent piece ac10.
     *
     * @return string|null Returns the lib critere ent piece ac10.
     */
    public function getLibCritereEntPieceAc10(): ?string {
        return $this->libCritereEntPieceAc10;
    }

    /**
     * Get the lib critere ent piece ac2.
     *
     * @return string|null Returns the lib critere ent piece ac2.
     */
    public function getLibCritereEntPieceAc2(): ?string {
        return $this->libCritereEntPieceAc2;
    }

    /**
     * Get the lib critere ent piece ac3.
     *
     * @return string|null Returns the lib critere ent piece ac3.
     */
    public function getLibCritereEntPieceAc3(): ?string {
        return $this->libCritereEntPieceAc3;
    }

    /**
     * Get the lib critere ent piece ac4.
     *
     * @return string|null Returns the lib critere ent piece ac4.
     */
    public function getLibCritereEntPieceAc4(): ?string {
        return $this->libCritereEntPieceAc4;
    }

    /**
     * Get the lib critere ent piece ac5.
     *
     * @return string|null Returns the lib critere ent piece ac5.
     */
    public function getLibCritereEntPieceAc5(): ?string {
        return $this->libCritereEntPieceAc5;
    }

    /**
     * Get the lib critere ent piece ac6.
     *
     * @return string|null Returns the lib critere ent piece ac6.
     */
    public function getLibCritereEntPieceAc6(): ?string {
        return $this->libCritereEntPieceAc6;
    }

    /**
     * Get the lib critere ent piece ac7.
     *
     * @return string|null Returns the lib critere ent piece ac7.
     */
    public function getLibCritereEntPieceAc7(): ?string {
        return $this->libCritereEntPieceAc7;
    }

    /**
     * Get the lib critere ent piece ac8.
     *
     * @return string|null Returns the lib critere ent piece ac8.
     */
    public function getLibCritereEntPieceAc8(): ?string {
        return $this->libCritereEntPieceAc8;
    }

    /**
     * Get the lib critere ent piece ac9.
     *
     * @return string|null Returns the lib critere ent piece ac9.
     */
    public function getLibCritereEntPieceAc9(): ?string {
        return $this->libCritereEntPieceAc9;
    }

    /**
     * Get the lib frais1.
     *
     * @return string|null Returns the lib frais1.
     */
    public function getLibFrais1(): ?string {
        return $this->libFrais1;
    }

    /**
     * Get the lib frais2.
     *
     * @return string|null Returns the lib frais2.
     */
    public function getLibFrais2(): ?string {
        return $this->libFrais2;
    }

    /**
     * Get the lib frais3.
     *
     * @return string|null Returns the lib frais3.
     */
    public function getLibFrais3(): ?string {
        return $this->libFrais3;
    }

    /**
     * Get the libelle gamme.
     *
     * @return string|null Returns the libelle gamme.
     */
    public function getLibelleGamme(): ?string {
        return $this->libelleGamme;
    }

    /**
     * Get the libelle variante.
     *
     * @return string|null Returns the libelle variante.
     */
    public function getLibelleVariante(): ?string {
        return $this->libelleVariante;
    }

    /**
     * Get the longueur num aff.
     *
     * @return int|null Returns the longueur num aff.
     */
    public function getLongueurNumAff(): ?int {
        return $this->longueurNumAff;
    }

    /**
     * Get the maj codes activite cga.
     *
     * @return string|null Returns the maj codes activite cga.
     */
    public function getMajCodesActiviteCga(): ?string {
        return $this->majCodesActiviteCga;
    }

    /**
     * Get the mess aspod.
     *
     * @return bool|null Returns the mess aspod.
     */
    public function getMessAspod(): ?bool {
        return $this->messAspod;
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
     * Get the modif droits asp.
     *
     * @return bool|null Returns the modif droits asp.
     */
    public function getModifDroitsAsp(): ?bool {
        return $this->modifDroitsAsp;
    }

    /**
     * Get the nb max gamme.
     *
     * @return int|null Returns the nb max gamme.
     */
    public function getNbMaxGamme(): ?int {
        return $this->nbMaxGamme;
    }

    /**
     * Get the ne pas creer cpt cli.
     *
     * @return bool|null Returns the ne pas creer cpt cli.
     */
    public function getNePasCreerCptCli(): ?bool {
        return $this->nePasCreerCptCli;
    }

    /**
     * Get the ne pas creer cpt frn.
     *
     * @return bool|null Returns the ne pas creer cpt frn.
     */
    public function getNePasCreerCptFrn(): ?bool {
        return $this->nePasCreerCptFrn;
    }

    /**
     * Get the new db infos.
     *
     * @return bool|null Returns the new db infos.
     */
    public function getNewDbInfos(): ?bool {
        return $this->newDbInfos;
    }

    /**
     * Get the new q bureau.
     *
     * @return bool|null Returns the new q bureau.
     */
    public function getNewQBureau(): ?bool {
        return $this->newQBureau;
    }

    /**
     * Get the no doss fact cab.
     *
     * @return string|null Returns the no doss fact cab.
     */
    public function getNoDossFactCab(): ?string {
        return $this->noDossFactCab;
    }

    /**
     * Get the pas de lien comptabilite.
     *
     * @return bool|null Returns the pas de lien comptabilite.
     */
    public function getPasDeLienComptabilite(): ?bool {
        return $this->pasDeLienComptabilite;
    }

    /**
     * Get the pme dossier rattachement.
     *
     * @return string|null Returns the pme dossier rattachement.
     */
    public function getPmeDossierRattachement(): ?string {
        return $this->pmeDossierRattachement;
    }

    /**
     * Get the prefixe code client.
     *
     * @return string|null Returns the prefixe code client.
     */
    public function getPrefixeCodeClient(): ?string {
        return $this->prefixeCodeClient;
    }

    /**
     * Get the prochain code client.
     *
     * @return string|null Returns the prochain code client.
     */
    public function getProchainCodeClient(): ?string {
        return $this->prochainCodeClient;
    }

    /**
     * Get the proxy actif.
     *
     * @return bool|null Returns the proxy actif.
     */
    public function getProxyActif(): ?bool {
        return $this->proxyActif;
    }

    /**
     * Get the proxy adresse.
     *
     * @return string|null Returns the proxy adresse.
     */
    public function getProxyAdresse(): ?string {
        return $this->proxyAdresse;
    }

    /**
     * Get the proxy port.
     *
     * @return int|null Returns the proxy port.
     */
    public function getProxyPort(): ?int {
        return $this->proxyPort;
    }

    /**
     * Get the q pub web code collaborateur dest.
     *
     * @return string|null Returns the q pub web code collaborateur dest.
     */
    public function getQPubWebCodeCollaborateurDest(): ?string {
        return $this->qPubWebCodeCollaborateurDest;
    }

    /**
     * Get the qws chemin logo.
     *
     * @return string|null Returns the qws chemin logo.
     */
    public function getQwsCheminLogo(): ?string {
        return $this->qwsCheminLogo;
    }

    /**
     * Get the qws code ipl.
     *
     * @return string|null Returns the qws code ipl.
     */
    public function getQwsCodeIpl(): ?string {
        return $this->qwsCodeIpl;
    }

    /**
     * Get the qws http securise.
     *
     * @return bool|null Returns the qws http securise.
     */
    public function getQwsHttpSecurise(): ?bool {
        return $this->qwsHttpSecurise;
    }

    /**
     * Get the qws nom produit.
     *
     * @return string|null Returns the qws nom produit.
     */
    public function getQwsNomProduit(): ?string {
        return $this->qwsNomProduit;
    }

    /**
     * Get the qws utiliser logo cabinet.
     *
     * @return bool|null Returns the qws utiliser logo cabinet.
     */
    public function getQwsUtiliserLogoCabinet(): ?bool {
        return $this->qwsUtiliserLogoCabinet;
    }

    /**
     * Get the qwsipl.
     *
     * @return string|null Returns the qwsipl.
     */
    public function getQwsipl(): ?string {
        return $this->qwsipl;
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
     * Get the rapport q infos.
     *
     * @return string|null Returns the rapport q infos.
     */
    public function getRapportQInfos(): ?string {
        return $this->rapportQInfos;
    }

    /**
     * Get the req demandeur.
     *
     * @return string|null Returns the req demandeur.
     */
    public function getReqDemandeur(): ?string {
        return $this->reqDemandeur;
    }

    /**
     * Get the saisie propriete mess.
     *
     * @return int|null Returns the saisie propriete mess.
     */
    public function getSaisieProprieteMess(): ?int {
        return $this->saisieProprieteMess;
    }

    /**
     * Get the saisie regl direct.
     *
     * @return bool|null Returns the saisie regl direct.
     */
    public function getSaisieReglDirect(): ?bool {
        return $this->saisieReglDirect;
    }

    /**
     * Get the saisie temps nb j apres.
     *
     * @return int|null Returns the saisie temps nb j apres.
     */
    public function getSaisieTempsNbJApres(): ?int {
        return $this->saisieTempsNbJApres;
    }

    /**
     * Get the saisie temps nb j avant.
     *
     * @return int|null Returns the saisie temps nb j avant.
     */
    public function getSaisieTempsNbJAvant(): ?int {
        return $this->saisieTempsNbJAvant;
    }

    /**
     * Get the saisie tp ne pas afficher dp.
     *
     * @return bool|null Returns the saisie tp ne pas afficher dp.
     */
    public function getSaisieTpNePasAfficherDp(): ?bool {
        return $this->saisieTpNePasAfficherDp;
    }

    /**
     * Get the saisie tp onglet unique dp.
     *
     * @return bool|null Returns the saisie tp onglet unique dp.
     */
    public function getSaisieTpOngletUniqueDp(): ?bool {
        return $this->saisieTpOngletUniqueDp;
    }

    /**
     * Get the saisie tp onglet unique tn.
     *
     * @return bool|null Returns the saisie tp onglet unique tn.
     */
    public function getSaisieTpOngletUniqueTn(): ?bool {
        return $this->saisieTpOngletUniqueTn;
    }

    /**
     * Get the save histo memo2 file.
     *
     * @return bool|null Returns the save histo memo2 file.
     */
    public function getSaveHistoMemo2File(): ?bool {
        return $this->saveHistoMemo2File;
    }

    /**
     * Get the sel av lst perso acces gestion modifiables.
     *
     * @return bool|null Returns the sel av lst perso acces gestion modifiables.
     */
    public function getSelAvLstPersoAccesGestionModifiables(): ?bool {
        return $this->selAvLstPersoAccesGestionModifiables;
    }

    /**
     * Get the sel av lst perso acces gestionnaire.
     *
     * @return bool|null Returns the sel av lst perso acces gestionnaire.
     */
    public function getSelAvLstPersoAccesGestionnaire(): ?bool {
        return $this->selAvLstPersoAccesGestionnaire;
    }

    /**
     * Get the sel av lst perso champs modif.
     *
     * @return bool|null Returns the sel av lst perso champs modif.
     */
    public function getSelAvLstPersoChampsModif(): ?bool {
        return $this->selAvLstPersoChampsModif;
    }

    /**
     * Get the sel av lst perso copie colonne.
     *
     * @return bool|null Returns the sel av lst perso copie colonne.
     */
    public function getSelAvLstPersoCopieColonne(): ?bool {
        return $this->selAvLstPersoCopieColonne;
    }

    /**
     * Get the sel av lst perso interdire creat.
     *
     * @return bool|null Returns the sel av lst perso interdire creat.
     */
    public function getSelAvLstPersoInterdireCreat(): ?bool {
        return $this->selAvLstPersoInterdireCreat;
    }

    /**
     * Get the sms api key.
     *
     * @return string|null Returns the sms api key.
     */
    public function getSmsApiKey(): ?string {
        return $this->smsApiKey;
    }

    /**
     * Get the sms droit acces.
     *
     * @return bool|null Returns the sms droit acces.
     */
    public function getSmsDroitAcces(): ?bool {
        return $this->smsDroitAcces;
    }

    /**
     * Get the sms key.
     *
     * @return string|null Returns the sms key.
     */
    public function getSmsKey(): ?string {
        return $this->smsKey;
    }

    /**
     * Get the sms prestataire.
     *
     * @return string|null Returns the sms prestataire.
     */
    public function getSmsPrestataire(): ?string {
        return $this->smsPrestataire;
    }

    /**
     * Get the sms sender.
     *
     * @return string|null Returns the sms sender.
     */
    public function getSmsSender(): ?string {
        return $this->smsSender;
    }

    /**
     * Get the sms type.
     *
     * @return int|null Returns the sms type.
     */
    public function getSmsType(): ?int {
        return $this->smsType;
    }

    /**
     * Get the sms user login.
     *
     * @return string|null Returns the sms user login.
     */
    public function getSmsUserLogin(): ?string {
        return $this->smsUserLogin;
    }

    /**
     * Get the solde cpta od.
     *
     * @return bool|null Returns the solde cpta od.
     */
    public function getSoldeCptaOd(): ?bool {
        return $this->soldeCptaOd;
    }

    /**
     * Get the suivi client intitule generic1.
     *
     * @return string|null Returns the suivi client intitule generic1.
     */
    public function getSuiviClientIntituleGeneric1(): ?string {
        return $this->suiviClientIntituleGeneric1;
    }

    /**
     * Get the suivi client intitule generic10.
     *
     * @return string|null Returns the suivi client intitule generic10.
     */
    public function getSuiviClientIntituleGeneric10(): ?string {
        return $this->suiviClientIntituleGeneric10;
    }

    /**
     * Get the suivi client intitule generic2.
     *
     * @return string|null Returns the suivi client intitule generic2.
     */
    public function getSuiviClientIntituleGeneric2(): ?string {
        return $this->suiviClientIntituleGeneric2;
    }

    /**
     * Get the suivi client intitule generic3.
     *
     * @return string|null Returns the suivi client intitule generic3.
     */
    public function getSuiviClientIntituleGeneric3(): ?string {
        return $this->suiviClientIntituleGeneric3;
    }

    /**
     * Get the suivi client intitule generic4.
     *
     * @return string|null Returns the suivi client intitule generic4.
     */
    public function getSuiviClientIntituleGeneric4(): ?string {
        return $this->suiviClientIntituleGeneric4;
    }

    /**
     * Get the suivi client intitule generic5.
     *
     * @return string|null Returns the suivi client intitule generic5.
     */
    public function getSuiviClientIntituleGeneric5(): ?string {
        return $this->suiviClientIntituleGeneric5;
    }

    /**
     * Get the suivi client intitule generic6.
     *
     * @return string|null Returns the suivi client intitule generic6.
     */
    public function getSuiviClientIntituleGeneric6(): ?string {
        return $this->suiviClientIntituleGeneric6;
    }

    /**
     * Get the suivi client intitule generic7.
     *
     * @return string|null Returns the suivi client intitule generic7.
     */
    public function getSuiviClientIntituleGeneric7(): ?string {
        return $this->suiviClientIntituleGeneric7;
    }

    /**
     * Get the suivi client intitule generic8.
     *
     * @return string|null Returns the suivi client intitule generic8.
     */
    public function getSuiviClientIntituleGeneric8(): ?string {
        return $this->suiviClientIntituleGeneric8;
    }

    /**
     * Get the suivi client intitule generic9.
     *
     * @return string|null Returns the suivi client intitule generic9.
     */
    public function getSuiviClientIntituleGeneric9(): ?string {
        return $this->suiviClientIntituleGeneric9;
    }

    /**
     * Get the tp acces encours client.
     *
     * @return bool|null Returns the tp acces encours client.
     */
    public function getTpAccesEncoursClient(): ?bool {
        return $this->tpAccesEncoursClient;
    }

    /**
     * Get the tp avancement a la ligne.
     *
     * @return bool|null Returns the tp avancement a la ligne.
     */
    public function getTpAvancementALaLigne(): ?bool {
        return $this->tpAvancementALaLigne;
    }

    /**
     * Get the tp interdit qte.
     *
     * @return bool|null Returns the tp interdit qte.
     */
    public function getTpInterditQte(): ?bool {
        return $this->tpInterditQte;
    }

    /**
     * Get the tp libelle mission.
     *
     * @return bool|null Returns the tp libelle mission.
     */
    public function getTpLibelleMission(): ?bool {
        return $this->tpLibelleMission;
    }

    /**
     * Get the tp limite saisie non operationnel.
     *
     * @return bool|null Returns the tp limite saisie non operationnel.
     */
    public function getTpLimiteSaisieNonOperationnel(): ?bool {
        return $this->tpLimiteSaisieNonOperationnel;
    }

    /**
     * Get the tp pas mois cloture.
     *
     * @return bool|null Returns the tp pas mois cloture.
     */
    public function getTpPasMoisCloture(): ?bool {
        return $this->tpPasMoisCloture;
    }

    /**
     * Get the tp pourcentage non operationnel date.
     *
     * @return DateTime|null Returns the tp pourcentage non operationnel date.
     */
    public function getTpPourcentageNonOperationnelDate(): ?DateTime {
        return $this->tpPourcentageNonOperationnelDate;
    }

    /**
     * Get the tp qte invisible.
     *
     * @return bool|null Returns the tp qte invisible.
     */
    public function getTpQteInvisible(): ?bool {
        return $this->tpQteInvisible;
    }

    /**
     * Get the tp saisie avancement.
     *
     * @return bool|null Returns the tp saisie avancement.
     */
    public function getTpSaisieAvancement(): ?bool {
        return $this->tpSaisieAvancement;
    }

    /**
     * Get the tppupv123.
     *
     * @return bool|null Returns the tppupv123.
     */
    public function getTppupv123(): ?bool {
        return $this->tppupv123;
    }

    /**
     * Get the tps num archive.
     *
     * @return string|null Returns the tps num archive.
     */
    public function getTpsNumArchive(): ?string {
        return $this->tpsNumArchive;
    }

    /**
     * Get the trans variantes factgi.
     *
     * @return bool|null Returns the trans variantes factgi.
     */
    public function getTransVariantesFactgi(): ?bool {
        return $this->transVariantesFactgi;
    }

    /**
     * Get the type affichage solde fourn.
     *
     * @return string|null Returns the type affichage solde fourn.
     */
    public function getTypeAffichageSoldeFourn(): ?string {
        return $this->typeAffichageSoldeFourn;
    }

    /**
     * Get the type frais1.
     *
     * @return bool|null Returns the type frais1.
     */
    public function getTypeFrais1(): ?bool {
        return $this->typeFrais1;
    }

    /**
     * Get the type frais2.
     *
     * @return bool|null Returns the type frais2.
     */
    public function getTypeFrais2(): ?bool {
        return $this->typeFrais2;
    }

    /**
     * Get the type frais3.
     *
     * @return bool|null Returns the type frais3.
     */
    public function getTypeFrais3(): ?bool {
        return $this->typeFrais3;
    }

    /**
     * Get the type saisie taux devises.
     *
     * @return string|null Returns the type saisie taux devises.
     */
    public function getTypeSaisieTauxDevises(): ?string {
        return $this->typeSaisieTauxDevises;
    }

    /**
     * Get the v esur dep aff.
     *
     * @return bool|null Returns the v esur dep aff.
     */
    public function getVEsurDepAff(): ?bool {
        return $this->vEsurDepAff;
    }

    /**
     * Get the val auto tarifs transporteurs.
     *
     * @return bool|null Returns the val auto tarifs transporteurs.
     */
    public function getValAutoTarifsTransporteurs(): ?bool {
        return $this->valAutoTarifsTransporteurs;
    }

    /**
     * Get the visualisation fiche cabinet.
     *
     * @return bool|null Returns the visualisation fiche cabinet.
     */
    public function getVisualisationFicheCabinet(): ?bool {
        return $this->visualisationFicheCabinet;
    }

    /**
     * Get the word acces par q client.
     *
     * @return bool|null Returns the word acces par q client.
     */
    public function getWordAccesParQClient(): ?bool {
        return $this->wordAccesParQClient;
    }

    /**
     * Get the e ws cabinet.
     *
     * @return string|null Returns the e ws cabinet.
     */
    public function geteWsCabinet(): ?string {
        return $this->eWsCabinet;
    }

    /**
     * Get the e ws coll id.
     *
     * @return string|null Returns the e ws coll id.
     */
    public function geteWsCollId(): ?string {
        return $this->eWsCollId;
    }

    /**
     * Get the e ws coll mdp.
     *
     * @return string|null Returns the e ws coll mdp.
     */
    public function geteWsCollMdp(): ?string {
        return $this->eWsCollMdp;
    }

    /**
     * Get the e ws srv mdp.
     *
     * @return string|null Returns the e ws srv mdp.
     */
    public function geteWsSrvMdp(): ?string {
        return $this->eWsSrvMdp;
    }

    /**
     * Get the e ws srv name.
     *
     * @return string|null Returns the e ws srv name.
     */
    public function geteWsSrvName(): ?string {
        return $this->eWsSrvName;
    }

    /**
     * Get the e ws srv util.
     *
     * @return string|null Returns the e ws srv util.
     */
    public function geteWsSrvUtil(): ?string {
        return $this->eWsSrvUtil;
    }

    /**
     * Get the lng code article auto.
     *
     * @return int|null Returns the lng code article auto.
     */
    public function getlngCodeArticleAuto(): ?int {
        return $this->lngCodeArticleAuto;
    }

    /**
     * Set the activation conf2 cmav cli.
     *
     * @param bool|null $activationConf2CmavCli The activation conf2 cmav cli.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setActivationConf2CmavCli(?bool $activationConf2CmavCli): Constantes2 {
        $this->activationConf2CmavCli = $activationConf2CmavCli;
        return $this;
    }

    /**
     * Set the active conf conv col.
     *
     * @param bool|null $activeConfConvCol The active conf conv col.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setActiveConfConvCol(?bool $activeConfConvCol): Constantes2 {
        $this->activeConfConvCol = $activeConfConvCol;
        return $this;
    }

    /**
     * Set the activer saisie regl.
     *
     * @param bool|null $activerSaisieRegl The activer saisie regl.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setActiverSaisieRegl(?bool $activerSaisieRegl): Constantes2 {
        $this->activerSaisieRegl = $activerSaisieRegl;
        return $this;
    }

    /**
     * Set the affectations cli frn.
     *
     * @param bool|null $affectationsCliFrn The affectations cli frn.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setAffectationsCliFrn(?bool $affectationsCliFrn): Constantes2 {
        $this->affectationsCliFrn = $affectationsCliFrn;
        return $this;
    }

    /**
     * Set the annulation affaire.
     *
     * @param bool|null $annulationAffaire The annulation affaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setAnnulationAffaire(?bool $annulationAffaire): Constantes2 {
        $this->annulationAffaire = $annulationAffaire;
        return $this;
    }

    /**
     * Set the articles lst perso acces gestion modifiables.
     *
     * @param bool|null $articlesLstPersoAccesGestionModifiables The articles lst perso acces gestion modifiables.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setArticlesLstPersoAccesGestionModifiables(?bool $articlesLstPersoAccesGestionModifiables): Constantes2 {
        $this->articlesLstPersoAccesGestionModifiables = $articlesLstPersoAccesGestionModifiables;
        return $this;
    }

    /**
     * Set the articles lst perso acces gestionnaire.
     *
     * @param bool|null $articlesLstPersoAccesGestionnaire The articles lst perso acces gestionnaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setArticlesLstPersoAccesGestionnaire(?bool $articlesLstPersoAccesGestionnaire): Constantes2 {
        $this->articlesLstPersoAccesGestionnaire = $articlesLstPersoAccesGestionnaire;
        return $this;
    }

    /**
     * Set the articles lst perso champs modif.
     *
     * @param bool|null $articlesLstPersoChampsModif The articles lst perso champs modif.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setArticlesLstPersoChampsModif(?bool $articlesLstPersoChampsModif): Constantes2 {
        $this->articlesLstPersoChampsModif = $articlesLstPersoChampsModif;
        return $this;
    }

    /**
     * Set the articles lst perso copie colonne.
     *
     * @param bool|null $articlesLstPersoCopieColonne The articles lst perso copie colonne.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setArticlesLstPersoCopieColonne(?bool $articlesLstPersoCopieColonne): Constantes2 {
        $this->articlesLstPersoCopieColonne = $articlesLstPersoCopieColonne;
        return $this;
    }

    /**
     * Set the articles lst perso interdire creat.
     *
     * @param bool|null $articlesLstPersoInterdireCreat The articles lst perso interdire creat.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setArticlesLstPersoInterdireCreat(?bool $articlesLstPersoInterdireCreat): Constantes2 {
        $this->articlesLstPersoInterdireCreat = $articlesLstPersoInterdireCreat;
        return $this;
    }

    /**
     * Set the asp affectation messages.
     *
     * @param string|null $aspAffectationMessages The asp affectation messages.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setAspAffectationMessages(?string $aspAffectationMessages): Constantes2 {
        $this->aspAffectationMessages = $aspAffectationMessages;
        return $this;
    }

    /**
     * Set the avec heures theo.
     *
     * @param bool|null $avecHeuresTheo The avec heures theo.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setAvecHeuresTheo(?bool $avecHeuresTheo): Constantes2 {
        $this->avecHeuresTheo = $avecHeuresTheo;
        return $this;
    }

    /**
     * Set the calcul nombre messages.
     *
     * @param bool|null $calculNombreMessages The calcul nombre messages.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCalculNombreMessages(?bool $calculNombreMessages): Constantes2 {
        $this->calculNombreMessages = $calculNombreMessages;
        return $this;
    }

    /**
     * Set the champs critere article21.
     *
     * @param string|null $champsCritereArticle21 The champs critere article21.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle21(?string $champsCritereArticle21): Constantes2 {
        $this->champsCritereArticle21 = $champsCritereArticle21;
        return $this;
    }

    /**
     * Set the champs critere article210.
     *
     * @param string|null $champsCritereArticle210 The champs critere article210.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle210(?string $champsCritereArticle210): Constantes2 {
        $this->champsCritereArticle210 = $champsCritereArticle210;
        return $this;
    }

    /**
     * Set the champs critere article22.
     *
     * @param string|null $champsCritereArticle22 The champs critere article22.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle22(?string $champsCritereArticle22): Constantes2 {
        $this->champsCritereArticle22 = $champsCritereArticle22;
        return $this;
    }

    /**
     * Set the champs critere article23.
     *
     * @param string|null $champsCritereArticle23 The champs critere article23.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle23(?string $champsCritereArticle23): Constantes2 {
        $this->champsCritereArticle23 = $champsCritereArticle23;
        return $this;
    }

    /**
     * Set the champs critere article24.
     *
     * @param string|null $champsCritereArticle24 The champs critere article24.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle24(?string $champsCritereArticle24): Constantes2 {
        $this->champsCritereArticle24 = $champsCritereArticle24;
        return $this;
    }

    /**
     * Set the champs critere article25.
     *
     * @param string|null $champsCritereArticle25 The champs critere article25.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle25(?string $champsCritereArticle25): Constantes2 {
        $this->champsCritereArticle25 = $champsCritereArticle25;
        return $this;
    }

    /**
     * Set the champs critere article26.
     *
     * @param string|null $champsCritereArticle26 The champs critere article26.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle26(?string $champsCritereArticle26): Constantes2 {
        $this->champsCritereArticle26 = $champsCritereArticle26;
        return $this;
    }

    /**
     * Set the champs critere article27.
     *
     * @param string|null $champsCritereArticle27 The champs critere article27.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle27(?string $champsCritereArticle27): Constantes2 {
        $this->champsCritereArticle27 = $champsCritereArticle27;
        return $this;
    }

    /**
     * Set the champs critere article28.
     *
     * @param string|null $champsCritereArticle28 The champs critere article28.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle28(?string $champsCritereArticle28): Constantes2 {
        $this->champsCritereArticle28 = $champsCritereArticle28;
        return $this;
    }

    /**
     * Set the champs critere article29.
     *
     * @param string|null $champsCritereArticle29 The champs critere article29.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle29(?string $champsCritereArticle29): Constantes2 {
        $this->champsCritereArticle29 = $champsCritereArticle29;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac1.
     *
     * @param string|null $champsCritereEntPieceAc1 The champs critere ent piece ac1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc1(?string $champsCritereEntPieceAc1): Constantes2 {
        $this->champsCritereEntPieceAc1 = $champsCritereEntPieceAc1;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac10.
     *
     * @param string|null $champsCritereEntPieceAc10 The champs critere ent piece ac10.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc10(?string $champsCritereEntPieceAc10): Constantes2 {
        $this->champsCritereEntPieceAc10 = $champsCritereEntPieceAc10;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac2.
     *
     * @param string|null $champsCritereEntPieceAc2 The champs critere ent piece ac2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc2(?string $champsCritereEntPieceAc2): Constantes2 {
        $this->champsCritereEntPieceAc2 = $champsCritereEntPieceAc2;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac3.
     *
     * @param string|null $champsCritereEntPieceAc3 The champs critere ent piece ac3.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc3(?string $champsCritereEntPieceAc3): Constantes2 {
        $this->champsCritereEntPieceAc3 = $champsCritereEntPieceAc3;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac4.
     *
     * @param string|null $champsCritereEntPieceAc4 The champs critere ent piece ac4.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc4(?string $champsCritereEntPieceAc4): Constantes2 {
        $this->champsCritereEntPieceAc4 = $champsCritereEntPieceAc4;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac5.
     *
     * @param string|null $champsCritereEntPieceAc5 The champs critere ent piece ac5.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc5(?string $champsCritereEntPieceAc5): Constantes2 {
        $this->champsCritereEntPieceAc5 = $champsCritereEntPieceAc5;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac6.
     *
     * @param string|null $champsCritereEntPieceAc6 The champs critere ent piece ac6.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc6(?string $champsCritereEntPieceAc6): Constantes2 {
        $this->champsCritereEntPieceAc6 = $champsCritereEntPieceAc6;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac7.
     *
     * @param string|null $champsCritereEntPieceAc7 The champs critere ent piece ac7.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc7(?string $champsCritereEntPieceAc7): Constantes2 {
        $this->champsCritereEntPieceAc7 = $champsCritereEntPieceAc7;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac8.
     *
     * @param string|null $champsCritereEntPieceAc8 The champs critere ent piece ac8.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc8(?string $champsCritereEntPieceAc8): Constantes2 {
        $this->champsCritereEntPieceAc8 = $champsCritereEntPieceAc8;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac9.
     *
     * @param string|null $champsCritereEntPieceAc9 The champs critere ent piece ac9.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc9(?string $champsCritereEntPieceAc9): Constantes2 {
        $this->champsCritereEntPieceAc9 = $champsCritereEntPieceAc9;
        return $this;
    }

    /**
     * Set the cle acces conf.
     *
     * @param string|null $cleAccesConf The cle acces conf.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCleAccesConf(?string $cleAccesConf): Constantes2 {
        $this->cleAccesConf = $cleAccesConf;
        return $this;
    }

    /**
     * Set the cle acces plaquettes.
     *
     * @param string|null $cleAccesPlaquettes The cle acces plaquettes.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCleAccesPlaquettes(?string $cleAccesPlaquettes): Constantes2 {
        $this->cleAccesPlaquettes = $cleAccesPlaquettes;
        return $this;
    }

    /**
     * Set the cle acces q admin db.
     *
     * @param string|null $cleAccesQAdminDb The cle acces q admin db.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCleAccesQAdminDb(?string $cleAccesQAdminDb): Constantes2 {
        $this->cleAccesQAdminDb = $cleAccesQAdminDb;
        return $this;
    }

    /**
     * Set the cloture archivage auto.
     *
     * @param bool|null $clotureArchivageAuto The cloture archivage auto.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setClotureArchivageAuto(?bool $clotureArchivageAuto): Constantes2 {
        $this->clotureArchivageAuto = $clotureArchivageAuto;
        return $this;
    }

    /**
     * Set the code client quadratus.
     *
     * @param string|null $codeClientQuadratus The code client quadratus.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCodeClientQuadratus(?string $codeClientQuadratus): Constantes2 {
        $this->codeClientQuadratus = $codeClientQuadratus;
        return $this;
    }

    /**
     * Set the compteur fil discussion.
     *
     * @param int|null $compteurFilDiscussion The compteur fil discussion.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCompteurFilDiscussion(?int $compteurFilDiscussion): Constantes2 {
        $this->compteurFilDiscussion = $compteurFilDiscussion;
        return $this;
    }

    /**
     * Set the confidentialite affaire.
     *
     * @param bool|null $confidentialiteAffaire The confidentialite affaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setConfidentialiteAffaire(?bool $confidentialiteAffaire): Constantes2 {
        $this->confidentialiteAffaire = $confidentialiteAffaire;
        return $this;
    }

    /**
     * Set the cout moyen horaire.
     *
     * @param float|null $coutMoyenHoraire The cout moyen horaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCoutMoyenHoraire(?float $coutMoyenHoraire): Constantes2 {
        $this->coutMoyenHoraire = $coutMoyenHoraire;
        return $this;
    }

    /**
     * Set the create cli1 fact par bl.
     *
     * @param bool|null $createCli1FactParBl The create cli1 fact par bl.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCreateCli1FactParBl(?bool $createCli1FactParBl): Constantes2 {
        $this->createCli1FactParBl = $createCli1FactParBl;
        return $this;
    }

    /**
     * Set the creation affaire.
     *
     * @param bool|null $creationAffaire The creation affaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCreationAffaire(?bool $creationAffaire): Constantes2 {
        $this->creationAffaire = $creationAffaire;
        return $this;
    }

    /**
     * Set the date dha.
     *
     * @param DateTime|null $dateDha The date dha.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setDateDha(?DateTime $dateDha): Constantes2 {
        $this->dateDha = $dateDha;
        return $this;
    }

    /**
     * Set the date last exe qpub web.
     *
     * @param DateTime|null $dateLastExeQpubWeb The date last exe qpub web.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setDateLastExeQpubWeb(?DateTime $dateLastExeQpubWeb): Constantes2 {
        $this->dateLastExeQpubWeb = $dateLastExeQpubWeb;
        return $this;
    }

    /**
     * Set the date pha.
     *
     * @param DateTime|null $datePha The date pha.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setDatePha(?DateTime $datePha): Constantes2 {
        $this->datePha = $datePha;
        return $this;
    }

    /**
     * Set the derniere version cd.
     *
     * @param string|null $derniereVersionCd The derniere version cd.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setDerniereVersionCd(?string $derniereVersionCd): Constantes2 {
        $this->derniereVersionCd = $derniereVersionCd;
        return $this;
    }

    /**
     * Set the droit collab visu documents.
     *
     * @param bool|null $droitCollabVisuDocuments The droit collab visu documents.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setDroitCollabVisuDocuments(?bool $droitCollabVisuDocuments): Constantes2 {
        $this->droitCollabVisuDocuments = $droitCollabVisuDocuments;
        return $this;
    }

    /**
     * Set the ech detail aff.
     *
     * @param bool|null $echDetailAff The ech detail aff.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setEchDetailAff(?bool $echDetailAff): Constantes2 {
        $this->echDetailAff = $echDetailAff;
        return $this;
    }

    /**
     * Set the etebac dest message.
     *
     * @param string|null $etebacDestMessage The etebac dest message.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setEtebacDestMessage(?string $etebacDestMessage): Constantes2 {
        $this->etebacDestMessage = $etebacDestMessage;
        return $this;
    }

    /**
     * Set the f gsur ac.
     *
     * @param bool|null $fGsurAc The f gsur ac.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setFGsurAc(?bool $fGsurAc): Constantes2 {
        $this->fGsurAc = $fGsurAc;
        return $this;
    }

    /**
     * Set the f gsur monf.
     *
     * @param bool|null $fGsurMonf The f gsur monf.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setFGsurMonf(?bool $fGsurMonf): Constantes2 {
        $this->fGsurMonf = $fGsurMonf;
        return $this;
    }

    /**
     * Set the familles liees.
     *
     * @param bool|null $famillesLiees The familles liees.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setFamillesLiees(?bool $famillesLiees): Constantes2 {
        $this->famillesLiees = $famillesLiees;
        return $this;
    }

    /**
     * Set the fg sur cde frn.
     *
     * @param bool|null $fgSurCdeFrn The fg sur cde frn.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setFgSurCdeFrn(?bool $fgSurCdeFrn): Constantes2 {
        $this->fgSurCdeFrn = $fgSurCdeFrn;
        return $this;
    }

    /**
     * Set the fiche cli ne pas proposer creation dpdc.
     *
     * @param bool|null $ficheCliNePasProposerCreationDpdc The fiche cli ne pas proposer creation dpdc.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setFicheCliNePasProposerCreationDpdc(?bool $ficheCliNePasProposerCreationDpdc): Constantes2 {
        $this->ficheCliNePasProposerCreationDpdc = $ficheCliNePasProposerCreationDpdc;
        return $this;
    }

    /**
     * Set the gestion gammes.
     *
     * @param bool|null $gestionGammes The gestion gammes.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionGammes(?bool $gestionGammes): Constantes2 {
        $this->gestionGammes = $gestionGammes;
        return $this;
    }

    /**
     * Set the gestion pointeuse q fact.
     *
     * @param bool|null $gestionPointeuseQFact The gestion pointeuse q fact.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionPointeuseQFact(?bool $gestionPointeuseQFact): Constantes2 {
        $this->gestionPointeuseQFact = $gestionPointeuseQFact;
        return $this;
    }

    /**
     * Set the gestion pointeuse qc.
     *
     * @param bool|null $gestionPointeuseQc The gestion pointeuse qc.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionPointeuseQc(?bool $gestionPointeuseQc): Constantes2 {
        $this->gestionPointeuseQc = $gestionPointeuseQc;
        return $this;
    }

    /**
     * Set the gestion pointeuse qgi.
     *
     * @param bool|null $gestionPointeuseQgi The gestion pointeuse qgi.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionPointeuseQgi(?bool $gestionPointeuseQgi): Constantes2 {
        $this->gestionPointeuseQgi = $gestionPointeuseQgi;
        return $this;
    }

    /**
     * Set the gestion pointeuse qp.
     *
     * @param bool|null $gestionPointeuseQp The gestion pointeuse qp.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionPointeuseQp(?bool $gestionPointeuseQp): Constantes2 {
        $this->gestionPointeuseQp = $gestionPointeuseQp;
        return $this;
    }

    /**
     * Set the gestion tarifs transporteurs.
     *
     * @param bool|null $gestionTarifsTransporteurs The gestion tarifs transporteurs.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionTarifsTransporteurs(?bool $gestionTarifsTransporteurs): Constantes2 {
        $this->gestionTarifsTransporteurs = $gestionTarifsTransporteurs;
        return $this;
    }

    /**
     * Set the gestion tarifs transporteurs nb dec.
     *
     * @param int|null $gestionTarifsTransporteursNbDec The gestion tarifs transporteurs nb dec.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionTarifsTransporteursNbDec(?int $gestionTarifsTransporteursNbDec): Constantes2 {
        $this->gestionTarifsTransporteursNbDec = $gestionTarifsTransporteursNbDec;
        return $this;
    }

    /**
     * Set the gestion variantes.
     *
     * @param bool|null $gestionVariantes The gestion variantes.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionVariantes(?bool $gestionVariantes): Constantes2 {
        $this->gestionVariantes = $gestionVariantes;
        return $this;
    }

    /**
     * Set the ht avec jours feries.
     *
     * @param bool|null $htAvecJoursFeries The ht avec jours feries.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setHtAvecJoursFeries(?bool $htAvecJoursFeries): Constantes2 {
        $this->htAvecJoursFeries = $htAvecJoursFeries;
        return $this;
    }

    /**
     * Set the ht avec saisie conges.
     *
     * @param bool|null $htAvecSaisieConges The ht avec saisie conges.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setHtAvecSaisieConges(?bool $htAvecSaisieConges): Constantes2 {
        $this->htAvecSaisieConges = $htAvecSaisieConges;
        return $this;
    }

    /**
     * Set the ht avec saisie conges codes clients.
     *
     * @param string|null $htAvecSaisieCongesCodesClients The ht avec saisie conges codes clients.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setHtAvecSaisieCongesCodesClients(?string $htAvecSaisieCongesCodesClients): Constantes2 {
        $this->htAvecSaisieCongesCodesClients = $htAvecSaisieCongesCodesClients;
        return $this;
    }

    /**
     * Set the ht avec saisie conges codes taches.
     *
     * @param string|null $htAvecSaisieCongesCodesTaches The ht avec saisie conges codes taches.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setHtAvecSaisieCongesCodesTaches(?string $htAvecSaisieCongesCodesTaches): Constantes2 {
        $this->htAvecSaisieCongesCodesTaches = $htAvecSaisieCongesCodesTaches;
        return $this;
    }

    /**
     * Set the increm auto article.
     *
     * @param bool|null $incremAutoArticle The increm auto article.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setIncremAutoArticle(?bool $incremAutoArticle): Constantes2 {
        $this->incremAutoArticle = $incremAutoArticle;
        return $this;
    }

    /**
     * Set the interdire acces archives cpta.
     *
     * @param bool|null $interdireAccesArchivesCpta The interdire acces archives cpta.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setInterdireAccesArchivesCpta(?bool $interdireAccesArchivesCpta): Constantes2 {
        $this->interdireAccesArchivesCpta = $interdireAccesArchivesCpta;
        return $this;
    }

    /**
     * Set the interdire acces archives paie.
     *
     * @param bool|null $interdireAccesArchivesPaie The interdire acces archives paie.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setInterdireAccesArchivesPaie(?bool $interdireAccesArchivesPaie): Constantes2 {
        $this->interdireAccesArchivesPaie = $interdireAccesArchivesPaie;
        return $this;
    }

    /**
     * Set the interdire acces edition balance.
     *
     * @param bool|null $interdireAccesEditionBalance The interdire acces edition balance.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setInterdireAccesEditionBalance(?bool $interdireAccesEditionBalance): Constantes2 {
        $this->interdireAccesEditionBalance = $interdireAccesEditionBalance;
        return $this;
    }

    /**
     * Set the interdire acces supp doc arch.
     *
     * @param bool|null $interdireAccesSuppDocArch The interdire acces supp doc arch.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setInterdireAccesSuppDocArch(?bool $interdireAccesSuppDocArch): Constantes2 {
        $this->interdireAccesSuppDocArch = $interdireAccesSuppDocArch;
        return $this;
    }

    /**
     * Set the interdire publi doc web.
     *
     * @param bool|null $interdirePubliDocWeb The interdire publi doc web.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setInterdirePubliDocWeb(?bool $interdirePubliDocWeb): Constantes2 {
        $this->interdirePubliDocWeb = $interdirePubliDocWeb;
        return $this;
    }

    /**
     * Set the ip prive qws.
     *
     * @param string|null $ipPriveQws The ip prive qws.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setIpPriveQws(?string $ipPriveQws): Constantes2 {
        $this->ipPriveQws = $ipPriveQws;
        return $this;
    }

    /**
     * Set the liaison tda.
     *
     * @param bool|null $liaisonTda The liaison tda.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLiaisonTda(?bool $liaisonTda): Constantes2 {
        $this->liaisonTda = $liaisonTda;
        return $this;
    }

    /**
     * Set the lib affectation frn1.
     *
     * @param string|null $libAffectationFrn1 The lib affectation frn1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn1(?string $libAffectationFrn1): Constantes2 {
        $this->libAffectationFrn1 = $libAffectationFrn1;
        return $this;
    }

    /**
     * Set the lib affectation frn2.
     *
     * @param string|null $libAffectationFrn2 The lib affectation frn2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn2(?string $libAffectationFrn2): Constantes2 {
        $this->libAffectationFrn2 = $libAffectationFrn2;
        return $this;
    }

    /**
     * Set the lib affectation frn3.
     *
     * @param string|null $libAffectationFrn3 The lib affectation frn3.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn3(?string $libAffectationFrn3): Constantes2 {
        $this->libAffectationFrn3 = $libAffectationFrn3;
        return $this;
    }

    /**
     * Set the lib affectation frn4.
     *
     * @param string|null $libAffectationFrn4 The lib affectation frn4.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn4(?string $libAffectationFrn4): Constantes2 {
        $this->libAffectationFrn4 = $libAffectationFrn4;
        return $this;
    }

    /**
     * Set the lib affectation frn5.
     *
     * @param string|null $libAffectationFrn5 The lib affectation frn5.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn5(?string $libAffectationFrn5): Constantes2 {
        $this->libAffectationFrn5 = $libAffectationFrn5;
        return $this;
    }

    /**
     * Set the lib affectation frn6.
     *
     * @param string|null $libAffectationFrn6 The lib affectation frn6.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn6(?string $libAffectationFrn6): Constantes2 {
        $this->libAffectationFrn6 = $libAffectationFrn6;
        return $this;
    }

    /**
     * Set the lib affectation frn7.
     *
     * @param string|null $libAffectationFrn7 The lib affectation frn7.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn7(?string $libAffectationFrn7): Constantes2 {
        $this->libAffectationFrn7 = $libAffectationFrn7;
        return $this;
    }

    /**
     * Set the lib critere article21.
     *
     * @param string|null $libCritereArticle21 The lib critere article21.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle21(?string $libCritereArticle21): Constantes2 {
        $this->libCritereArticle21 = $libCritereArticle21;
        return $this;
    }

    /**
     * Set the lib critere article210.
     *
     * @param string|null $libCritereArticle210 The lib critere article210.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle210(?string $libCritereArticle210): Constantes2 {
        $this->libCritereArticle210 = $libCritereArticle210;
        return $this;
    }

    /**
     * Set the lib critere article22.
     *
     * @param string|null $libCritereArticle22 The lib critere article22.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle22(?string $libCritereArticle22): Constantes2 {
        $this->libCritereArticle22 = $libCritereArticle22;
        return $this;
    }

    /**
     * Set the lib critere article23.
     *
     * @param string|null $libCritereArticle23 The lib critere article23.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle23(?string $libCritereArticle23): Constantes2 {
        $this->libCritereArticle23 = $libCritereArticle23;
        return $this;
    }

    /**
     * Set the lib critere article24.
     *
     * @param string|null $libCritereArticle24 The lib critere article24.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle24(?string $libCritereArticle24): Constantes2 {
        $this->libCritereArticle24 = $libCritereArticle24;
        return $this;
    }

    /**
     * Set the lib critere article25.
     *
     * @param string|null $libCritereArticle25 The lib critere article25.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle25(?string $libCritereArticle25): Constantes2 {
        $this->libCritereArticle25 = $libCritereArticle25;
        return $this;
    }

    /**
     * Set the lib critere article26.
     *
     * @param string|null $libCritereArticle26 The lib critere article26.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle26(?string $libCritereArticle26): Constantes2 {
        $this->libCritereArticle26 = $libCritereArticle26;
        return $this;
    }

    /**
     * Set the lib critere article27.
     *
     * @param string|null $libCritereArticle27 The lib critere article27.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle27(?string $libCritereArticle27): Constantes2 {
        $this->libCritereArticle27 = $libCritereArticle27;
        return $this;
    }

    /**
     * Set the lib critere article28.
     *
     * @param string|null $libCritereArticle28 The lib critere article28.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle28(?string $libCritereArticle28): Constantes2 {
        $this->libCritereArticle28 = $libCritereArticle28;
        return $this;
    }

    /**
     * Set the lib critere article29.
     *
     * @param string|null $libCritereArticle29 The lib critere article29.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle29(?string $libCritereArticle29): Constantes2 {
        $this->libCritereArticle29 = $libCritereArticle29;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac1.
     *
     * @param string|null $libCritereEntPieceAc1 The lib critere ent piece ac1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc1(?string $libCritereEntPieceAc1): Constantes2 {
        $this->libCritereEntPieceAc1 = $libCritereEntPieceAc1;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac10.
     *
     * @param string|null $libCritereEntPieceAc10 The lib critere ent piece ac10.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc10(?string $libCritereEntPieceAc10): Constantes2 {
        $this->libCritereEntPieceAc10 = $libCritereEntPieceAc10;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac2.
     *
     * @param string|null $libCritereEntPieceAc2 The lib critere ent piece ac2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc2(?string $libCritereEntPieceAc2): Constantes2 {
        $this->libCritereEntPieceAc2 = $libCritereEntPieceAc2;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac3.
     *
     * @param string|null $libCritereEntPieceAc3 The lib critere ent piece ac3.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc3(?string $libCritereEntPieceAc3): Constantes2 {
        $this->libCritereEntPieceAc3 = $libCritereEntPieceAc3;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac4.
     *
     * @param string|null $libCritereEntPieceAc4 The lib critere ent piece ac4.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc4(?string $libCritereEntPieceAc4): Constantes2 {
        $this->libCritereEntPieceAc4 = $libCritereEntPieceAc4;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac5.
     *
     * @param string|null $libCritereEntPieceAc5 The lib critere ent piece ac5.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc5(?string $libCritereEntPieceAc5): Constantes2 {
        $this->libCritereEntPieceAc5 = $libCritereEntPieceAc5;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac6.
     *
     * @param string|null $libCritereEntPieceAc6 The lib critere ent piece ac6.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc6(?string $libCritereEntPieceAc6): Constantes2 {
        $this->libCritereEntPieceAc6 = $libCritereEntPieceAc6;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac7.
     *
     * @param string|null $libCritereEntPieceAc7 The lib critere ent piece ac7.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc7(?string $libCritereEntPieceAc7): Constantes2 {
        $this->libCritereEntPieceAc7 = $libCritereEntPieceAc7;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac8.
     *
     * @param string|null $libCritereEntPieceAc8 The lib critere ent piece ac8.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc8(?string $libCritereEntPieceAc8): Constantes2 {
        $this->libCritereEntPieceAc8 = $libCritereEntPieceAc8;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac9.
     *
     * @param string|null $libCritereEntPieceAc9 The lib critere ent piece ac9.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc9(?string $libCritereEntPieceAc9): Constantes2 {
        $this->libCritereEntPieceAc9 = $libCritereEntPieceAc9;
        return $this;
    }

    /**
     * Set the lib frais1.
     *
     * @param string|null $libFrais1 The lib frais1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibFrais1(?string $libFrais1): Constantes2 {
        $this->libFrais1 = $libFrais1;
        return $this;
    }

    /**
     * Set the lib frais2.
     *
     * @param string|null $libFrais2 The lib frais2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibFrais2(?string $libFrais2): Constantes2 {
        $this->libFrais2 = $libFrais2;
        return $this;
    }

    /**
     * Set the lib frais3.
     *
     * @param string|null $libFrais3 The lib frais3.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibFrais3(?string $libFrais3): Constantes2 {
        $this->libFrais3 = $libFrais3;
        return $this;
    }

    /**
     * Set the libelle gamme.
     *
     * @param string|null $libelleGamme The libelle gamme.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibelleGamme(?string $libelleGamme): Constantes2 {
        $this->libelleGamme = $libelleGamme;
        return $this;
    }

    /**
     * Set the libelle variante.
     *
     * @param string|null $libelleVariante The libelle variante.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibelleVariante(?string $libelleVariante): Constantes2 {
        $this->libelleVariante = $libelleVariante;
        return $this;
    }

    /**
     * Set the longueur num aff.
     *
     * @param int|null $longueurNumAff The longueur num aff.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLongueurNumAff(?int $longueurNumAff): Constantes2 {
        $this->longueurNumAff = $longueurNumAff;
        return $this;
    }

    /**
     * Set the maj codes activite cga.
     *
     * @param string|null $majCodesActiviteCga The maj codes activite cga.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setMajCodesActiviteCga(?string $majCodesActiviteCga): Constantes2 {
        $this->majCodesActiviteCga = $majCodesActiviteCga;
        return $this;
    }

    /**
     * Set the mess aspod.
     *
     * @param bool|null $messAspod The mess aspod.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setMessAspod(?bool $messAspod): Constantes2 {
        $this->messAspod = $messAspod;
        return $this;
    }

    /**
     * Set the modif affaire.
     *
     * @param string|null $modifAffaire The modif affaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setModifAffaire(?string $modifAffaire): Constantes2 {
        $this->modifAffaire = $modifAffaire;
        return $this;
    }

    /**
     * Set the modif droits asp.
     *
     * @param bool|null $modifDroitsAsp The modif droits asp.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setModifDroitsAsp(?bool $modifDroitsAsp): Constantes2 {
        $this->modifDroitsAsp = $modifDroitsAsp;
        return $this;
    }

    /**
     * Set the nb max gamme.
     *
     * @param int|null $nbMaxGamme The nb max gamme.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNbMaxGamme(?int $nbMaxGamme): Constantes2 {
        $this->nbMaxGamme = $nbMaxGamme;
        return $this;
    }

    /**
     * Set the ne pas creer cpt cli.
     *
     * @param bool|null $nePasCreerCptCli The ne pas creer cpt cli.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNePasCreerCptCli(?bool $nePasCreerCptCli): Constantes2 {
        $this->nePasCreerCptCli = $nePasCreerCptCli;
        return $this;
    }

    /**
     * Set the ne pas creer cpt frn.
     *
     * @param bool|null $nePasCreerCptFrn The ne pas creer cpt frn.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNePasCreerCptFrn(?bool $nePasCreerCptFrn): Constantes2 {
        $this->nePasCreerCptFrn = $nePasCreerCptFrn;
        return $this;
    }

    /**
     * Set the new db infos.
     *
     * @param bool|null $newDbInfos The new db infos.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNewDbInfos(?bool $newDbInfos): Constantes2 {
        $this->newDbInfos = $newDbInfos;
        return $this;
    }

    /**
     * Set the new q bureau.
     *
     * @param bool|null $newQBureau The new q bureau.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNewQBureau(?bool $newQBureau): Constantes2 {
        $this->newQBureau = $newQBureau;
        return $this;
    }

    /**
     * Set the no doss fact cab.
     *
     * @param string|null $noDossFactCab The no doss fact cab.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNoDossFactCab(?string $noDossFactCab): Constantes2 {
        $this->noDossFactCab = $noDossFactCab;
        return $this;
    }

    /**
     * Set the pas de lien comptabilite.
     *
     * @param bool|null $pasDeLienComptabilite The pas de lien comptabilite.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setPasDeLienComptabilite(?bool $pasDeLienComptabilite): Constantes2 {
        $this->pasDeLienComptabilite = $pasDeLienComptabilite;
        return $this;
    }

    /**
     * Set the pme dossier rattachement.
     *
     * @param string|null $pmeDossierRattachement The pme dossier rattachement.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setPmeDossierRattachement(?string $pmeDossierRattachement): Constantes2 {
        $this->pmeDossierRattachement = $pmeDossierRattachement;
        return $this;
    }

    /**
     * Set the prefixe code client.
     *
     * @param string|null $prefixeCodeClient The prefixe code client.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setPrefixeCodeClient(?string $prefixeCodeClient): Constantes2 {
        $this->prefixeCodeClient = $prefixeCodeClient;
        return $this;
    }

    /**
     * Set the prochain code client.
     *
     * @param string|null $prochainCodeClient The prochain code client.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setProchainCodeClient(?string $prochainCodeClient): Constantes2 {
        $this->prochainCodeClient = $prochainCodeClient;
        return $this;
    }

    /**
     * Set the proxy actif.
     *
     * @param bool|null $proxyActif The proxy actif.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setProxyActif(?bool $proxyActif): Constantes2 {
        $this->proxyActif = $proxyActif;
        return $this;
    }

    /**
     * Set the proxy adresse.
     *
     * @param string|null $proxyAdresse The proxy adresse.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setProxyAdresse(?string $proxyAdresse): Constantes2 {
        $this->proxyAdresse = $proxyAdresse;
        return $this;
    }

    /**
     * Set the proxy port.
     *
     * @param int|null $proxyPort The proxy port.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setProxyPort(?int $proxyPort): Constantes2 {
        $this->proxyPort = $proxyPort;
        return $this;
    }

    /**
     * Set the q pub web code collaborateur dest.
     *
     * @param string|null $qPubWebCodeCollaborateurDest The q pub web code collaborateur dest.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQPubWebCodeCollaborateurDest(?string $qPubWebCodeCollaborateurDest): Constantes2 {
        $this->qPubWebCodeCollaborateurDest = $qPubWebCodeCollaborateurDest;
        return $this;
    }

    /**
     * Set the qws chemin logo.
     *
     * @param string|null $qwsCheminLogo The qws chemin logo.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQwsCheminLogo(?string $qwsCheminLogo): Constantes2 {
        $this->qwsCheminLogo = $qwsCheminLogo;
        return $this;
    }

    /**
     * Set the qws code ipl.
     *
     * @param string|null $qwsCodeIpl The qws code ipl.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQwsCodeIpl(?string $qwsCodeIpl): Constantes2 {
        $this->qwsCodeIpl = $qwsCodeIpl;
        return $this;
    }

    /**
     * Set the qws http securise.
     *
     * @param bool|null $qwsHttpSecurise The qws http securise.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQwsHttpSecurise(?bool $qwsHttpSecurise): Constantes2 {
        $this->qwsHttpSecurise = $qwsHttpSecurise;
        return $this;
    }

    /**
     * Set the qws nom produit.
     *
     * @param string|null $qwsNomProduit The qws nom produit.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQwsNomProduit(?string $qwsNomProduit): Constantes2 {
        $this->qwsNomProduit = $qwsNomProduit;
        return $this;
    }

    /**
     * Set the qws utiliser logo cabinet.
     *
     * @param bool|null $qwsUtiliserLogoCabinet The qws utiliser logo cabinet.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQwsUtiliserLogoCabinet(?bool $qwsUtiliserLogoCabinet): Constantes2 {
        $this->qwsUtiliserLogoCabinet = $qwsUtiliserLogoCabinet;
        return $this;
    }

    /**
     * Set the qwsipl.
     *
     * @param string|null $qwsipl The qwsipl.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQwsipl(?string $qwsipl): Constantes2 {
        $this->qwsipl = $qwsipl;
        return $this;
    }

    /**
     * Set the rac data paie.
     *
     * @param string|null $racDataPaie The rac data paie.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setRacDataPaie(?string $racDataPaie): Constantes2 {
        $this->racDataPaie = $racDataPaie;
        return $this;
    }

    /**
     * Set the rapport q infos.
     *
     * @param string|null $rapportQInfos The rapport q infos.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setRapportQInfos(?string $rapportQInfos): Constantes2 {
        $this->rapportQInfos = $rapportQInfos;
        return $this;
    }

    /**
     * Set the req demandeur.
     *
     * @param string|null $reqDemandeur The req demandeur.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setReqDemandeur(?string $reqDemandeur): Constantes2 {
        $this->reqDemandeur = $reqDemandeur;
        return $this;
    }

    /**
     * Set the saisie propriete mess.
     *
     * @param int|null $saisieProprieteMess The saisie propriete mess.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieProprieteMess(?int $saisieProprieteMess): Constantes2 {
        $this->saisieProprieteMess = $saisieProprieteMess;
        return $this;
    }

    /**
     * Set the saisie regl direct.
     *
     * @param bool|null $saisieReglDirect The saisie regl direct.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieReglDirect(?bool $saisieReglDirect): Constantes2 {
        $this->saisieReglDirect = $saisieReglDirect;
        return $this;
    }

    /**
     * Set the saisie temps nb j apres.
     *
     * @param int|null $saisieTempsNbJApres The saisie temps nb j apres.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieTempsNbJApres(?int $saisieTempsNbJApres): Constantes2 {
        $this->saisieTempsNbJApres = $saisieTempsNbJApres;
        return $this;
    }

    /**
     * Set the saisie temps nb j avant.
     *
     * @param int|null $saisieTempsNbJAvant The saisie temps nb j avant.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieTempsNbJAvant(?int $saisieTempsNbJAvant): Constantes2 {
        $this->saisieTempsNbJAvant = $saisieTempsNbJAvant;
        return $this;
    }

    /**
     * Set the saisie tp ne pas afficher dp.
     *
     * @param bool|null $saisieTpNePasAfficherDp The saisie tp ne pas afficher dp.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieTpNePasAfficherDp(?bool $saisieTpNePasAfficherDp): Constantes2 {
        $this->saisieTpNePasAfficherDp = $saisieTpNePasAfficherDp;
        return $this;
    }

    /**
     * Set the saisie tp onglet unique dp.
     *
     * @param bool|null $saisieTpOngletUniqueDp The saisie tp onglet unique dp.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieTpOngletUniqueDp(?bool $saisieTpOngletUniqueDp): Constantes2 {
        $this->saisieTpOngletUniqueDp = $saisieTpOngletUniqueDp;
        return $this;
    }

    /**
     * Set the saisie tp onglet unique tn.
     *
     * @param bool|null $saisieTpOngletUniqueTn The saisie tp onglet unique tn.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieTpOngletUniqueTn(?bool $saisieTpOngletUniqueTn): Constantes2 {
        $this->saisieTpOngletUniqueTn = $saisieTpOngletUniqueTn;
        return $this;
    }

    /**
     * Set the save histo memo2 file.
     *
     * @param bool|null $saveHistoMemo2File The save histo memo2 file.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaveHistoMemo2File(?bool $saveHistoMemo2File): Constantes2 {
        $this->saveHistoMemo2File = $saveHistoMemo2File;
        return $this;
    }

    /**
     * Set the sel av lst perso acces gestion modifiables.
     *
     * @param bool|null $selAvLstPersoAccesGestionModifiables The sel av lst perso acces gestion modifiables.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSelAvLstPersoAccesGestionModifiables(?bool $selAvLstPersoAccesGestionModifiables): Constantes2 {
        $this->selAvLstPersoAccesGestionModifiables = $selAvLstPersoAccesGestionModifiables;
        return $this;
    }

    /**
     * Set the sel av lst perso acces gestionnaire.
     *
     * @param bool|null $selAvLstPersoAccesGestionnaire The sel av lst perso acces gestionnaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSelAvLstPersoAccesGestionnaire(?bool $selAvLstPersoAccesGestionnaire): Constantes2 {
        $this->selAvLstPersoAccesGestionnaire = $selAvLstPersoAccesGestionnaire;
        return $this;
    }

    /**
     * Set the sel av lst perso champs modif.
     *
     * @param bool|null $selAvLstPersoChampsModif The sel av lst perso champs modif.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSelAvLstPersoChampsModif(?bool $selAvLstPersoChampsModif): Constantes2 {
        $this->selAvLstPersoChampsModif = $selAvLstPersoChampsModif;
        return $this;
    }

    /**
     * Set the sel av lst perso copie colonne.
     *
     * @param bool|null $selAvLstPersoCopieColonne The sel av lst perso copie colonne.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSelAvLstPersoCopieColonne(?bool $selAvLstPersoCopieColonne): Constantes2 {
        $this->selAvLstPersoCopieColonne = $selAvLstPersoCopieColonne;
        return $this;
    }

    /**
     * Set the sel av lst perso interdire creat.
     *
     * @param bool|null $selAvLstPersoInterdireCreat The sel av lst perso interdire creat.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSelAvLstPersoInterdireCreat(?bool $selAvLstPersoInterdireCreat): Constantes2 {
        $this->selAvLstPersoInterdireCreat = $selAvLstPersoInterdireCreat;
        return $this;
    }

    /**
     * Set the sms api key.
     *
     * @param string|null $smsApiKey The sms api key.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsApiKey(?string $smsApiKey): Constantes2 {
        $this->smsApiKey = $smsApiKey;
        return $this;
    }

    /**
     * Set the sms droit acces.
     *
     * @param bool|null $smsDroitAcces The sms droit acces.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsDroitAcces(?bool $smsDroitAcces): Constantes2 {
        $this->smsDroitAcces = $smsDroitAcces;
        return $this;
    }

    /**
     * Set the sms key.
     *
     * @param string|null $smsKey The sms key.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsKey(?string $smsKey): Constantes2 {
        $this->smsKey = $smsKey;
        return $this;
    }

    /**
     * Set the sms prestataire.
     *
     * @param string|null $smsPrestataire The sms prestataire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsPrestataire(?string $smsPrestataire): Constantes2 {
        $this->smsPrestataire = $smsPrestataire;
        return $this;
    }

    /**
     * Set the sms sender.
     *
     * @param string|null $smsSender The sms sender.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsSender(?string $smsSender): Constantes2 {
        $this->smsSender = $smsSender;
        return $this;
    }

    /**
     * Set the sms type.
     *
     * @param int|null $smsType The sms type.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsType(?int $smsType): Constantes2 {
        $this->smsType = $smsType;
        return $this;
    }

    /**
     * Set the sms user login.
     *
     * @param string|null $smsUserLogin The sms user login.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsUserLogin(?string $smsUserLogin): Constantes2 {
        $this->smsUserLogin = $smsUserLogin;
        return $this;
    }

    /**
     * Set the solde cpta od.
     *
     * @param bool|null $soldeCptaOd The solde cpta od.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSoldeCptaOd(?bool $soldeCptaOd): Constantes2 {
        $this->soldeCptaOd = $soldeCptaOd;
        return $this;
    }

    /**
     * Set the suivi client intitule generic1.
     *
     * @param string|null $suiviClientIntituleGeneric1 The suivi client intitule generic1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric1(?string $suiviClientIntituleGeneric1): Constantes2 {
        $this->suiviClientIntituleGeneric1 = $suiviClientIntituleGeneric1;
        return $this;
    }

    /**
     * Set the suivi client intitule generic10.
     *
     * @param string|null $suiviClientIntituleGeneric10 The suivi client intitule generic10.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric10(?string $suiviClientIntituleGeneric10): Constantes2 {
        $this->suiviClientIntituleGeneric10 = $suiviClientIntituleGeneric10;
        return $this;
    }

    /**
     * Set the suivi client intitule generic2.
     *
     * @param string|null $suiviClientIntituleGeneric2 The suivi client intitule generic2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric2(?string $suiviClientIntituleGeneric2): Constantes2 {
        $this->suiviClientIntituleGeneric2 = $suiviClientIntituleGeneric2;
        return $this;
    }

    /**
     * Set the suivi client intitule generic3.
     *
     * @param string|null $suiviClientIntituleGeneric3 The suivi client intitule generic3.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric3(?string $suiviClientIntituleGeneric3): Constantes2 {
        $this->suiviClientIntituleGeneric3 = $suiviClientIntituleGeneric3;
        return $this;
    }

    /**
     * Set the suivi client intitule generic4.
     *
     * @param string|null $suiviClientIntituleGeneric4 The suivi client intitule generic4.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric4(?string $suiviClientIntituleGeneric4): Constantes2 {
        $this->suiviClientIntituleGeneric4 = $suiviClientIntituleGeneric4;
        return $this;
    }

    /**
     * Set the suivi client intitule generic5.
     *
     * @param string|null $suiviClientIntituleGeneric5 The suivi client intitule generic5.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric5(?string $suiviClientIntituleGeneric5): Constantes2 {
        $this->suiviClientIntituleGeneric5 = $suiviClientIntituleGeneric5;
        return $this;
    }

    /**
     * Set the suivi client intitule generic6.
     *
     * @param string|null $suiviClientIntituleGeneric6 The suivi client intitule generic6.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric6(?string $suiviClientIntituleGeneric6): Constantes2 {
        $this->suiviClientIntituleGeneric6 = $suiviClientIntituleGeneric6;
        return $this;
    }

    /**
     * Set the suivi client intitule generic7.
     *
     * @param string|null $suiviClientIntituleGeneric7 The suivi client intitule generic7.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric7(?string $suiviClientIntituleGeneric7): Constantes2 {
        $this->suiviClientIntituleGeneric7 = $suiviClientIntituleGeneric7;
        return $this;
    }

    /**
     * Set the suivi client intitule generic8.
     *
     * @param string|null $suiviClientIntituleGeneric8 The suivi client intitule generic8.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric8(?string $suiviClientIntituleGeneric8): Constantes2 {
        $this->suiviClientIntituleGeneric8 = $suiviClientIntituleGeneric8;
        return $this;
    }

    /**
     * Set the suivi client intitule generic9.
     *
     * @param string|null $suiviClientIntituleGeneric9 The suivi client intitule generic9.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric9(?string $suiviClientIntituleGeneric9): Constantes2 {
        $this->suiviClientIntituleGeneric9 = $suiviClientIntituleGeneric9;
        return $this;
    }

    /**
     * Set the tp acces encours client.
     *
     * @param bool|null $tpAccesEncoursClient The tp acces encours client.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpAccesEncoursClient(?bool $tpAccesEncoursClient): Constantes2 {
        $this->tpAccesEncoursClient = $tpAccesEncoursClient;
        return $this;
    }

    /**
     * Set the tp avancement a la ligne.
     *
     * @param bool|null $tpAvancementALaLigne The tp avancement a la ligne.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpAvancementALaLigne(?bool $tpAvancementALaLigne): Constantes2 {
        $this->tpAvancementALaLigne = $tpAvancementALaLigne;
        return $this;
    }

    /**
     * Set the tp interdit qte.
     *
     * @param bool|null $tpInterditQte The tp interdit qte.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpInterditQte(?bool $tpInterditQte): Constantes2 {
        $this->tpInterditQte = $tpInterditQte;
        return $this;
    }

    /**
     * Set the tp libelle mission.
     *
     * @param bool|null $tpLibelleMission The tp libelle mission.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpLibelleMission(?bool $tpLibelleMission): Constantes2 {
        $this->tpLibelleMission = $tpLibelleMission;
        return $this;
    }

    /**
     * Set the tp limite saisie non operationnel.
     *
     * @param bool|null $tpLimiteSaisieNonOperationnel The tp limite saisie non operationnel.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpLimiteSaisieNonOperationnel(?bool $tpLimiteSaisieNonOperationnel): Constantes2 {
        $this->tpLimiteSaisieNonOperationnel = $tpLimiteSaisieNonOperationnel;
        return $this;
    }

    /**
     * Set the tp pas mois cloture.
     *
     * @param bool|null $tpPasMoisCloture The tp pas mois cloture.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpPasMoisCloture(?bool $tpPasMoisCloture): Constantes2 {
        $this->tpPasMoisCloture = $tpPasMoisCloture;
        return $this;
    }

    /**
     * Set the tp pourcentage non operationnel date.
     *
     * @param DateTime|null $tpPourcentageNonOperationnelDate The tp pourcentage non operationnel date.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpPourcentageNonOperationnelDate(?DateTime $tpPourcentageNonOperationnelDate): Constantes2 {
        $this->tpPourcentageNonOperationnelDate = $tpPourcentageNonOperationnelDate;
        return $this;
    }

    /**
     * Set the tp qte invisible.
     *
     * @param bool|null $tpQteInvisible The tp qte invisible.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpQteInvisible(?bool $tpQteInvisible): Constantes2 {
        $this->tpQteInvisible = $tpQteInvisible;
        return $this;
    }

    /**
     * Set the tp saisie avancement.
     *
     * @param bool|null $tpSaisieAvancement The tp saisie avancement.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpSaisieAvancement(?bool $tpSaisieAvancement): Constantes2 {
        $this->tpSaisieAvancement = $tpSaisieAvancement;
        return $this;
    }

    /**
     * Set the tppupv123.
     *
     * @param bool|null $tppupv123 The tppupv123.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTppupv123(?bool $tppupv123): Constantes2 {
        $this->tppupv123 = $tppupv123;
        return $this;
    }

    /**
     * Set the tps num archive.
     *
     * @param string|null $tpsNumArchive The tps num archive.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpsNumArchive(?string $tpsNumArchive): Constantes2 {
        $this->tpsNumArchive = $tpsNumArchive;
        return $this;
    }

    /**
     * Set the trans variantes factgi.
     *
     * @param bool|null $transVariantesFactgi The trans variantes factgi.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTransVariantesFactgi(?bool $transVariantesFactgi): Constantes2 {
        $this->transVariantesFactgi = $transVariantesFactgi;
        return $this;
    }

    /**
     * Set the type affichage solde fourn.
     *
     * @param string|null $typeAffichageSoldeFourn The type affichage solde fourn.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTypeAffichageSoldeFourn(?string $typeAffichageSoldeFourn): Constantes2 {
        $this->typeAffichageSoldeFourn = $typeAffichageSoldeFourn;
        return $this;
    }

    /**
     * Set the type frais1.
     *
     * @param bool|null $typeFrais1 The type frais1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTypeFrais1(?bool $typeFrais1): Constantes2 {
        $this->typeFrais1 = $typeFrais1;
        return $this;
    }

    /**
     * Set the type frais2.
     *
     * @param bool|null $typeFrais2 The type frais2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTypeFrais2(?bool $typeFrais2): Constantes2 {
        $this->typeFrais2 = $typeFrais2;
        return $this;
    }

    /**
     * Set the type frais3.
     *
     * @param bool|null $typeFrais3 The type frais3.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTypeFrais3(?bool $typeFrais3): Constantes2 {
        $this->typeFrais3 = $typeFrais3;
        return $this;
    }

    /**
     * Set the type saisie taux devises.
     *
     * @param string|null $typeSaisieTauxDevises The type saisie taux devises.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTypeSaisieTauxDevises(?string $typeSaisieTauxDevises): Constantes2 {
        $this->typeSaisieTauxDevises = $typeSaisieTauxDevises;
        return $this;
    }

    /**
     * Set the v esur dep aff.
     *
     * @param bool|null $vEsurDepAff The v esur dep aff.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setVEsurDepAff(?bool $vEsurDepAff): Constantes2 {
        $this->vEsurDepAff = $vEsurDepAff;
        return $this;
    }

    /**
     * Set the val auto tarifs transporteurs.
     *
     * @param bool|null $valAutoTarifsTransporteurs The val auto tarifs transporteurs.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setValAutoTarifsTransporteurs(?bool $valAutoTarifsTransporteurs): Constantes2 {
        $this->valAutoTarifsTransporteurs = $valAutoTarifsTransporteurs;
        return $this;
    }

    /**
     * Set the visualisation fiche cabinet.
     *
     * @param bool|null $visualisationFicheCabinet The visualisation fiche cabinet.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setVisualisationFicheCabinet(?bool $visualisationFicheCabinet): Constantes2 {
        $this->visualisationFicheCabinet = $visualisationFicheCabinet;
        return $this;
    }

    /**
     * Set the word acces par q client.
     *
     * @param bool|null $wordAccesParQClient The word acces par q client.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setWordAccesParQClient(?bool $wordAccesParQClient): Constantes2 {
        $this->wordAccesParQClient = $wordAccesParQClient;
        return $this;
    }

    /**
     * Set the e ws cabinet.
     *
     * @param string|null $eWsCabinet The e ws cabinet.
     * @return Constantes2 Returns this Constantes2.
     */
    public function seteWsCabinet(?string $eWsCabinet): Constantes2 {
        $this->eWsCabinet = $eWsCabinet;
        return $this;
    }

    /**
     * Set the e ws coll id.
     *
     * @param string|null $eWsCollId The e ws coll id.
     * @return Constantes2 Returns this Constantes2.
     */
    public function seteWsCollId(?string $eWsCollId): Constantes2 {
        $this->eWsCollId = $eWsCollId;
        return $this;
    }

    /**
     * Set the e ws coll mdp.
     *
     * @param string|null $eWsCollMdp The e ws coll mdp.
     * @return Constantes2 Returns this Constantes2.
     */
    public function seteWsCollMdp(?string $eWsCollMdp): Constantes2 {
        $this->eWsCollMdp = $eWsCollMdp;
        return $this;
    }

    /**
     * Set the e ws srv mdp.
     *
     * @param string|null $eWsSrvMdp The e ws srv mdp.
     * @return Constantes2 Returns this Constantes2.
     */
    public function seteWsSrvMdp(?string $eWsSrvMdp): Constantes2 {
        $this->eWsSrvMdp = $eWsSrvMdp;
        return $this;
    }

    /**
     * Set the e ws srv name.
     *
     * @param string|null $eWsSrvName The e ws srv name.
     * @return Constantes2 Returns this Constantes2.
     */
    public function seteWsSrvName(?string $eWsSrvName): Constantes2 {
        $this->eWsSrvName = $eWsSrvName;
        return $this;
    }

    /**
     * Set the e ws srv util.
     *
     * @param string|null $eWsSrvUtil The e ws srv util.
     * @return Constantes2 Returns this Constantes2.
     */
    public function seteWsSrvUtil(?string $eWsSrvUtil): Constantes2 {
        $this->eWsSrvUtil = $eWsSrvUtil;
        return $this;
    }

    /**
     * Set the lng code article auto.
     *
     * @param int|null $lngCodeArticleAuto The lng code article auto.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setlngCodeArticleAuto(?int $lngCodeArticleAuto): Constantes2 {
        $this->lngCodeArticleAuto = $lngCodeArticleAuto;
        return $this;
    }
}
