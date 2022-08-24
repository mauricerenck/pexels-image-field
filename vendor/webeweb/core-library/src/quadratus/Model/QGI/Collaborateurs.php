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
 * Collaborateurs.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Collaborateurs {

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
     * Acces cur doss only.
     *
     * @var bool|null
     */
    private $accesCurDossOnly;

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
     * Acces gestionaire stats croisees.
     *
     * @var bool|null
     */
    private $accesGestionaireStatsCroisees;

    /**
     * Acces rep commun.
     *
     * @var string|null
     */
    private $accesRepCommun;

    /**
     * Acces stat cab.
     *
     * @var bool|null
     */
    private $accesStatCab;

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
     * Autorise saisie tps colonnes.
     *
     * @var bool|null
     */
    private $autoriseSaisieTpsColonnes;

    /**
     * Bic.
     *
     * @var string|null
     */
    private $bic;

    /**
     * Blocage ed cli.
     *
     * @var bool|null
     */
    private $blocageEdCli;

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
     * Categorie prix km.
     *
     * @var string|null
     */
    private $categoriePrixKm;

    /**
     * Categorie ticket resto.
     *
     * @var string|null
     */
    private $categorieTicketResto;

    /**
     * Charges mensuelles.
     *
     * @var float|null
     */
    private $chargesMensuelles;

    /**
     * Cle ccn paie.
     *
     * @var string|null
     */
    private $cleCcnPaie;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code chef1.
     *
     * @var string|null
     */
    private $codeChef1;

    /**
     * Code chef2.
     *
     * @var string|null
     */
    private $codeChef2;

    /**
     * Code depot.
     *
     * @var string|null
     */
    private $codeDepot;

    /**
     * Code famille.
     *
     * @var string|null
     */
    private $codeFamille;

    /**
     * Code famille frn.
     *
     * @var string|null
     */
    private $codeFamilleFrn;

    /**
     * Code groupe.
     *
     * @var string|null
     */
    private $codeGroupe;

    /**
     * Code groupe visu msg.
     *
     * @var string|null
     */
    private $codeGroupeVisuMsg;

    /**
     * Code langue.
     *
     * @var string|null
     */
    private $codeLangue;

    /**
     * Code liaison dest.
     *
     * @var string|null
     */
    private $codeLiaisonDest;

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
     * Code vehicule.
     *
     * @var string|null
     */
    private $codeVehicule;

    /**
     * Code ventil compta.
     *
     * @var string|null
     */
    private $codeVentilCompta;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Compte comptable.
     *
     * @var string|null
     */
    private $compteComptable;

    /**
     * Compte de tiers.
     *
     * @var string|null
     */
    private $compteDeTiers;

    /**
     * Controle saisie tp.
     *
     * @var string|null
     */
    private $controleSaisieTp;

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
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Date validation budget.
     *
     * @var DateTime|null
     */
    private $dateValidationBudget;

    /**
     * Date validation nd f.
     *
     * @var DateTime|null
     */
    private $dateValidationNdF;

    /**
     * Date validation tp.
     *
     * @var DateTime|null
     */
    private $dateValidationTp;

    /**
     * Desactiver filtre msg.
     *
     * @var bool|null
     */
    private $desactiverFiltreMsg;

    /**
     * Disponible.
     *
     * @var bool|null
     */
    private $disponible;

    /**
     * Dom banque.
     *
     * @var string|null
     */
    private $domBanque;

    /**
     * Dossier paie.
     *
     * @var string|null
     */
    private $dossierPaie;

    /**
     * Droit param emails confidentiels.
     *
     * @var bool|null
     */
    private $droitParamEmailsConfidentiels;

    /**
     * Droit sync port.
     *
     * @var bool|null
     */
    private $droitSyncPort;

    /**
     * Droit sync q prop.
     *
     * @var bool|null
     */
    private $droitSyncQProp;

    /**
     * e ws mdp.
     *
     * @var string|null
     */
    private $eWsMdp;

    /**
     * Email.
     *
     * @var string|null
     */
    private $email;

    /**
     * Email activer aide saisie.
     *
     * @var bool|null
     */
    private $emailActiverAideSaisie;

    /**
     * Email agenda dmd confirm.
     *
     * @var string|null
     */
    private $emailAgendaDmdConfirm;

    /**
     * Email auto cloture imap.
     *
     * @var bool|null
     */
    private $emailAutoClotureImap;

    /**
     * Email lst adr choix elem.
     *
     * @var int|null
     */
    private $emailLstAdrChoixElem;

    /**
     * Email mode signature.
     *
     * @var int|null
     */
    private $emailModeSignature;

    /**
     * Email nb j ag mini.
     *
     * @var int|null
     */
    private $emailNbJAgMini;

    /**
     * Email objet defaut.
     *
     * @var string|null
     */
    private $emailObjetDefaut;

    /**
     * Email pied.
     *
     * @var string|null
     */
    private $emailPied;

    /**
     * Email redir auto.
     *
     * @var bool|null
     */
    private $emailRedirAuto;

    /**
     * Email redir auto collab.
     *
     * @var string|null
     */
    private $emailRedirAutoCollab;

    /**
     * Email redirection.
     *
     * @var string|null
     */
    private $emailRedirection;

    /**
     * Email reponse auto.
     *
     * @var bool|null
     */
    private $emailReponseAuto;

    /**
     * Email reponse auto text.
     *
     * @var string|null
     */
    private $emailReponseAutoText;

    /**
     * Email rr active.
     *
     * @var bool|null
     */
    private $emailRrActive;

    /**
     * Email start mode.
     *
     * @var int|null
     */
    private $emailStartMode;

    /**
     * Email sur serveur.
     *
     * @var bool|null
     */
    private $emailSurServeur;

    /**
     * Email tete.
     *
     * @var string|null
     */
    private $emailTete;

    /**
     * Est acheteur.
     *
     * @var int|null
     */
    private $estAcheteur;

    /**
     * Etab confidentialite qp.
     *
     * @var string|null
     */
    private $etabConfidentialiteQp;

    /**
     * Fictif.
     *
     * @var bool|null
     */
    private $fictif;

    /**
     * Fonction.
     *
     * @var string|null
     */
    private $fonction;

    /**
     * Iban.
     *
     * @var string|null
     */
    private $iban;

    /**
     * Interdiction pwd.
     *
     * @var bool|null
     */
    private $interdictionPwd;

    /**
     * Interdiction vue facturation.
     *
     * @var bool|null
     */
    private $interdictionVueFacturation;

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
     * Interdire acces entete.
     *
     * @var bool|null
     */
    private $interdireAccesEntete;

    /**
     * Interdire acces supp doc arch.
     *
     * @var bool|null
     */
    private $interdireAccesSuppDocArch;

    /**
     * Interdire edition valorise jrn temps.
     *
     * @var bool|null
     */
    private $interdireEditionValoriseJrnTemps;

    /**
     * Interdire envoi postit.
     *
     * @var bool|null
     */
    private $interdireEnvoiPostit;

    /**
     * Interdire modif aff cli.
     *
     * @var bool|null
     */
    private $interdireModifAffCli;

    /**
     * Interdire modif depot.
     *
     * @var bool|null
     */
    private $interdireModifDepot;

    /**
     * Interdire publi doc web.
     *
     * @var bool|null
     */
    private $interdirePubliDocWeb;

    /**
     * Interim.
     *
     * @var bool|null
     */
    private $interim;

    /**
     * Is groupe.
     *
     * @var bool|null
     */
    private $isGroupe;

    /**
     * Is profil messages.
     *
     * @var bool|null
     */
    private $isProfilMessages;

    /**
     * Limiter visu agenda.
     *
     * @var bool|null
     */
    private $limiterVisuAgenda;

    /**
     * Masquer fournisseurs.
     *
     * @var bool|null
     */
    private $masquerFournisseurs;

    /**
     * Messages confidentiels.
     *
     * @var string|null
     */
    private $messagesConfidentiels;

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
     * Modif droits asp.
     *
     * @var bool|null
     */
    private $modifDroitsAsp;

    /**
     * Modif en vue.
     *
     * @var bool|null
     */
    private $modifEnVue;

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
     * Mot de passe.
     *
     * @var string|null
     */
    private $motDePasse;

    /**
     * Msg redir auto.
     *
     * @var bool|null
     */
    private $msgRedirAuto;

    /**
     * Niv conf emp proprete restreint.
     *
     * @var bool|null
     */
    private $nivConfEmpPropreteRestreint;

    /**
     * Niveau.
     *
     * @var int|null
     */
    private $niveau;

    /**
     * Niveau confidentialite qp.
     *
     * @var string|null
     */
    private $niveauConfidentialiteQp;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

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
     * Pa invisible.
     *
     * @var bool|null
     */
    private $paInvisible;

    /**
     * Parc code remorque.
     *
     * @var string|null
     */
    private $parcCodeRemorque;

    /**
     * Parc code vehicule.
     *
     * @var string|null
     */
    private $parcCodeVehicule;

    /**
     * Pas acces qws.
     *
     * @var bool|null
     */
    private $pasAccesQws;

    /**
     * Pas saisie des temps.
     *
     * @var bool|null
     */
    private $pasSaisieDesTemps;

    /**
     * Pas saisie des temps auto.
     *
     * @var bool|null
     */
    private $pasSaisieDesTempsAuto;

    /**
     * Portable perso.
     *
     * @var string|null
     */
    private $portablePerso;

    /**
     * Present.
     *
     * @var bool|null
     */
    private $present;

    /**
     * Prevenu nouveau cd.
     *
     * @var bool|null
     */
    private $prevenuNouveauCd;

    /**
     * Prix km.
     *
     * @var float|null
     */
    private $prixKm;

    /**
     * Prix vente.
     *
     * @var float|null
     */
    private $prixVente;

    /**
     * Prix vente2.
     *
     * @var float|null
     */
    private $prixVente2;

    /**
     * Prix vente3.
     *
     * @var float|null
     */
    private $prixVente3;

    /**
     * Restrict acces pieces.
     *
     * @var bool|null
     */
    private $restrictAccesPieces;

    /**
     * Restrict acces stats.
     *
     * @var bool|null
     */
    private $restrictAccesStats;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Saisie pv interdite.
     *
     * @var bool|null
     */
    private $saisiePvInterdite;

    /**
     * Salaire mensuel.
     *
     * @var float|null
     */
    private $salaireMensuel;

    /**
     * Sel art collab.
     *
     * @var bool|null
     */
    private $selArtCollab;

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
     * Sel cli collab.
     *
     * @var bool|null
     */
    private $selCliCollab;

    /**
     * Sel frn collab.
     *
     * @var bool|null
     */
    private $selFrnCollab;

    /**
     * Selection article.
     *
     * @var string|null
     */
    private $selectionArticle;

    /**
     * Selection client.
     *
     * @var string|null
     */
    private $selectionClient;

    /**
     * Selection fournisseur.
     *
     * @var string|null
     */
    private $selectionFournisseur;

    /**
     * Suivi messages.
     *
     * @var bool|null
     */
    private $suiviMessages;

    /**
     * Superviseur.
     *
     * @var bool|null
     */
    private $superviseur;

    /**
     * Sync mso.
     *
     * @var bool|null
     */
    private $syncMso;

    /**
     * Taches groupe.
     *
     * @var string|null
     */
    private $tachesGroupe;

    /**
     * Taux commission.
     *
     * @var float|null
     */
    private $tauxCommission;

    /**
     * Tel direct.
     *
     * @var string|null
     */
    private $telDirect;

    /**
     * Tel perso.
     *
     * @var string|null
     */
    private $telPerso;

    /**
     * Tel portable1.
     *
     * @var string|null
     */
    private $telPortable1;

    /**
     * Tel portable2.
     *
     * @var string|null
     */
    private $telPortable2;

    /**
     * Tel poste.
     *
     * @var string|null
     */
    private $telPoste;

    /**
     * Tp pas controler.
     *
     * @var bool|null
     */
    private $tpPasControler;

    /**
     * Tp pas journal temps.
     *
     * @var bool|null
     */
    private $tpPasJournalTemps;

    /**
     * Tp pas notes de frais.
     *
     * @var bool|null
     */
    private $tpPasNotesDeFrais;

    /**
     * Tp pas tps valide.
     *
     * @var bool|null
     */
    private $tpPasTpsValide;

    /**
     * Tp pourcentage non operationnel.
     *
     * @var float|null
     */
    private $tpPourcentageNonOperationnel;

    /**
     * Tps niveau blocage.
     *
     * @var string|null
     */
    private $tpsNiveauBlocage;

    /**
     * Tx com invisible.
     *
     * @var bool|null
     */
    private $txComInvisible;

    /**
     * Type conf2 cmav cli.
     *
     * @var string|null
     */
    private $typeConf2CmavCli;

    /**
     * Type conf cmav cli.
     *
     * @var string|null
     */
    private $typeConfCmavCli;

    /**
     * Type visu appels.
     *
     * @var string|null
     */
    private $typeVisuAppels;

    /**
     * Type visu taches.
     *
     * @var string|null
     */
    private $typeVisuTaches;

    /**
     * Use mail generic.
     *
     * @var bool|null
     */
    private $useMailGeneric;

    /**
     * Visualisation fiche cabinet.
     *
     * @var bool|null
     */
    private $visualisationFicheCabinet;

    /**
     * Vue com droit reaffect.
     *
     * @var bool|null
     */
    private $vueComDroitReaffect;

    /**
     * Vue devis droit reaffect.
     *
     * @var bool|null
     */
    private $vueDevisDroitReaffect;

    /**
     * Vue devis droit suppr.
     *
     * @var bool|null
     */
    private $vueDevisDroitSuppr;

    /**
     * Vue devis droit valid.
     *
     * @var bool|null
     */
    private $vueDevisDroitValid;

    /**
     * Ya droits collab.
     *
     * @var bool|null
     */
    private $yaDroitsCollab;

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
     * Get the acces cur doss only.
     *
     * @return bool|null Returns the acces cur doss only.
     */
    public function getAccesCurDossOnly(): ?bool {
        return $this->accesCurDossOnly;
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
     * Get the acces gestionaire stats croisees.
     *
     * @return bool|null Returns the acces gestionaire stats croisees.
     */
    public function getAccesGestionaireStatsCroisees(): ?bool {
        return $this->accesGestionaireStatsCroisees;
    }

    /**
     * Get the acces rep commun.
     *
     * @return string|null Returns the acces rep commun.
     */
    public function getAccesRepCommun(): ?string {
        return $this->accesRepCommun;
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
     * Get the autorise saisie tps colonnes.
     *
     * @return bool|null Returns the autorise saisie tps colonnes.
     */
    public function getAutoriseSaisieTpsColonnes(): ?bool {
        return $this->autoriseSaisieTpsColonnes;
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
     * Get the blocage ed cli.
     *
     * @return bool|null Returns the blocage ed cli.
     */
    public function getBlocageEdCli(): ?bool {
        return $this->blocageEdCli;
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
     * Get the categorie prix km.
     *
     * @return string|null Returns the categorie prix km.
     */
    public function getCategoriePrixKm(): ?string {
        return $this->categoriePrixKm;
    }

    /**
     * Get the categorie ticket resto.
     *
     * @return string|null Returns the categorie ticket resto.
     */
    public function getCategorieTicketResto(): ?string {
        return $this->categorieTicketResto;
    }

    /**
     * Get the charges mensuelles.
     *
     * @return float|null Returns the charges mensuelles.
     */
    public function getChargesMensuelles(): ?float {
        return $this->chargesMensuelles;
    }

    /**
     * Get the cle ccn paie.
     *
     * @return string|null Returns the cle ccn paie.
     */
    public function getCleCcnPaie(): ?string {
        return $this->cleCcnPaie;
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
    }

    /**
     * Get the code chef1.
     *
     * @return string|null Returns the code chef1.
     */
    public function getCodeChef1(): ?string {
        return $this->codeChef1;
    }

    /**
     * Get the code chef2.
     *
     * @return string|null Returns the code chef2.
     */
    public function getCodeChef2(): ?string {
        return $this->codeChef2;
    }

    /**
     * Get the code depot.
     *
     * @return string|null Returns the code depot.
     */
    public function getCodeDepot(): ?string {
        return $this->codeDepot;
    }

    /**
     * Get the code famille.
     *
     * @return string|null Returns the code famille.
     */
    public function getCodeFamille(): ?string {
        return $this->codeFamille;
    }

    /**
     * Get the code famille frn.
     *
     * @return string|null Returns the code famille frn.
     */
    public function getCodeFamilleFrn(): ?string {
        return $this->codeFamilleFrn;
    }

    /**
     * Get the code groupe.
     *
     * @return string|null Returns the code groupe.
     */
    public function getCodeGroupe(): ?string {
        return $this->codeGroupe;
    }

    /**
     * Get the code groupe visu msg.
     *
     * @return string|null Returns the code groupe visu msg.
     */
    public function getCodeGroupeVisuMsg(): ?string {
        return $this->codeGroupeVisuMsg;
    }

    /**
     * Get the code langue.
     *
     * @return string|null Returns the code langue.
     */
    public function getCodeLangue(): ?string {
        return $this->codeLangue;
    }

    /**
     * Get the code liaison dest.
     *
     * @return string|null Returns the code liaison dest.
     */
    public function getCodeLiaisonDest(): ?string {
        return $this->codeLiaisonDest;
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
     * Get the code vehicule.
     *
     * @return string|null Returns the code vehicule.
     */
    public function getCodeVehicule(): ?string {
        return $this->codeVehicule;
    }

    /**
     * Get the code ventil compta.
     *
     * @return string|null Returns the code ventil compta.
     */
    public function getCodeVentilCompta(): ?string {
        return $this->codeVentilCompta;
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
     * Get the compte comptable.
     *
     * @return string|null Returns the compte comptable.
     */
    public function getCompteComptable(): ?string {
        return $this->compteComptable;
    }

    /**
     * Get the compte de tiers.
     *
     * @return string|null Returns the compte de tiers.
     */
    public function getCompteDeTiers(): ?string {
        return $this->compteDeTiers;
    }

    /**
     * Get the controle saisie tp.
     *
     * @return string|null Returns the controle saisie tp.
     */
    public function getControleSaisieTp(): ?string {
        return $this->controleSaisieTp;
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
     * Get the date entree.
     *
     * @return DateTime|null Returns the date entree.
     */
    public function getDateEntree(): ?DateTime {
        return $this->dateEntree;
    }

    /**
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie(): ?DateTime {
        return $this->dateSortie;
    }

    /**
     * Get the date validation budget.
     *
     * @return DateTime|null Returns the date validation budget.
     */
    public function getDateValidationBudget(): ?DateTime {
        return $this->dateValidationBudget;
    }

    /**
     * Get the date validation nd f.
     *
     * @return DateTime|null Returns the date validation nd f.
     */
    public function getDateValidationNdF(): ?DateTime {
        return $this->dateValidationNdF;
    }

    /**
     * Get the date validation tp.
     *
     * @return DateTime|null Returns the date validation tp.
     */
    public function getDateValidationTp(): ?DateTime {
        return $this->dateValidationTp;
    }

    /**
     * Get the desactiver filtre msg.
     *
     * @return bool|null Returns the desactiver filtre msg.
     */
    public function getDesactiverFiltreMsg(): ?bool {
        return $this->desactiverFiltreMsg;
    }

    /**
     * Get the disponible.
     *
     * @return bool|null Returns the disponible.
     */
    public function getDisponible(): ?bool {
        return $this->disponible;
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
     * Get the dossier paie.
     *
     * @return string|null Returns the dossier paie.
     */
    public function getDossierPaie(): ?string {
        return $this->dossierPaie;
    }

    /**
     * Get the droit param emails confidentiels.
     *
     * @return bool|null Returns the droit param emails confidentiels.
     */
    public function getDroitParamEmailsConfidentiels(): ?bool {
        return $this->droitParamEmailsConfidentiels;
    }

    /**
     * Get the droit sync port.
     *
     * @return bool|null Returns the droit sync port.
     */
    public function getDroitSyncPort(): ?bool {
        return $this->droitSyncPort;
    }

    /**
     * Get the droit sync q prop.
     *
     * @return bool|null Returns the droit sync q prop.
     */
    public function getDroitSyncQProp(): ?bool {
        return $this->droitSyncQProp;
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
     * Get the email activer aide saisie.
     *
     * @return bool|null Returns the email activer aide saisie.
     */
    public function getEmailActiverAideSaisie(): ?bool {
        return $this->emailActiverAideSaisie;
    }

    /**
     * Get the email agenda dmd confirm.
     *
     * @return string|null Returns the email agenda dmd confirm.
     */
    public function getEmailAgendaDmdConfirm(): ?string {
        return $this->emailAgendaDmdConfirm;
    }

    /**
     * Get the email auto cloture imap.
     *
     * @return bool|null Returns the email auto cloture imap.
     */
    public function getEmailAutoClotureImap(): ?bool {
        return $this->emailAutoClotureImap;
    }

    /**
     * Get the email lst adr choix elem.
     *
     * @return int|null Returns the email lst adr choix elem.
     */
    public function getEmailLstAdrChoixElem(): ?int {
        return $this->emailLstAdrChoixElem;
    }

    /**
     * Get the email mode signature.
     *
     * @return int|null Returns the email mode signature.
     */
    public function getEmailModeSignature(): ?int {
        return $this->emailModeSignature;
    }

    /**
     * Get the email nb j ag mini.
     *
     * @return int|null Returns the email nb j ag mini.
     */
    public function getEmailNbJAgMini(): ?int {
        return $this->emailNbJAgMini;
    }

    /**
     * Get the email objet defaut.
     *
     * @return string|null Returns the email objet defaut.
     */
    public function getEmailObjetDefaut(): ?string {
        return $this->emailObjetDefaut;
    }

    /**
     * Get the email pied.
     *
     * @return string|null Returns the email pied.
     */
    public function getEmailPied(): ?string {
        return $this->emailPied;
    }

    /**
     * Get the email redir auto.
     *
     * @return bool|null Returns the email redir auto.
     */
    public function getEmailRedirAuto(): ?bool {
        return $this->emailRedirAuto;
    }

    /**
     * Get the email redir auto collab.
     *
     * @return string|null Returns the email redir auto collab.
     */
    public function getEmailRedirAutoCollab(): ?string {
        return $this->emailRedirAutoCollab;
    }

    /**
     * Get the email redirection.
     *
     * @return string|null Returns the email redirection.
     */
    public function getEmailRedirection(): ?string {
        return $this->emailRedirection;
    }

    /**
     * Get the email reponse auto.
     *
     * @return bool|null Returns the email reponse auto.
     */
    public function getEmailReponseAuto(): ?bool {
        return $this->emailReponseAuto;
    }

    /**
     * Get the email reponse auto text.
     *
     * @return string|null Returns the email reponse auto text.
     */
    public function getEmailReponseAutoText(): ?string {
        return $this->emailReponseAutoText;
    }

    /**
     * Get the email rr active.
     *
     * @return bool|null Returns the email rr active.
     */
    public function getEmailRrActive(): ?bool {
        return $this->emailRrActive;
    }

    /**
     * Get the email start mode.
     *
     * @return int|null Returns the email start mode.
     */
    public function getEmailStartMode(): ?int {
        return $this->emailStartMode;
    }

    /**
     * Get the email sur serveur.
     *
     * @return bool|null Returns the email sur serveur.
     */
    public function getEmailSurServeur(): ?bool {
        return $this->emailSurServeur;
    }

    /**
     * Get the email tete.
     *
     * @return string|null Returns the email tete.
     */
    public function getEmailTete(): ?string {
        return $this->emailTete;
    }

    /**
     * Get the est acheteur.
     *
     * @return int|null Returns the est acheteur.
     */
    public function getEstAcheteur(): ?int {
        return $this->estAcheteur;
    }

    /**
     * Get the etab confidentialite qp.
     *
     * @return string|null Returns the etab confidentialite qp.
     */
    public function getEtabConfidentialiteQp(): ?string {
        return $this->etabConfidentialiteQp;
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
     * Get the fonction.
     *
     * @return string|null Returns the fonction.
     */
    public function getFonction(): ?string {
        return $this->fonction;
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
     * Get the interdiction pwd.
     *
     * @return bool|null Returns the interdiction pwd.
     */
    public function getInterdictionPwd(): ?bool {
        return $this->interdictionPwd;
    }

    /**
     * Get the interdiction vue facturation.
     *
     * @return bool|null Returns the interdiction vue facturation.
     */
    public function getInterdictionVueFacturation(): ?bool {
        return $this->interdictionVueFacturation;
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
     * Get the interdire acces entete.
     *
     * @return bool|null Returns the interdire acces entete.
     */
    public function getInterdireAccesEntete(): ?bool {
        return $this->interdireAccesEntete;
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
     * Get the interdire edition valorise jrn temps.
     *
     * @return bool|null Returns the interdire edition valorise jrn temps.
     */
    public function getInterdireEditionValoriseJrnTemps(): ?bool {
        return $this->interdireEditionValoriseJrnTemps;
    }

    /**
     * Get the interdire envoi postit.
     *
     * @return bool|null Returns the interdire envoi postit.
     */
    public function getInterdireEnvoiPostit(): ?bool {
        return $this->interdireEnvoiPostit;
    }

    /**
     * Get the interdire modif aff cli.
     *
     * @return bool|null Returns the interdire modif aff cli.
     */
    public function getInterdireModifAffCli(): ?bool {
        return $this->interdireModifAffCli;
    }

    /**
     * Get the interdire modif depot.
     *
     * @return bool|null Returns the interdire modif depot.
     */
    public function getInterdireModifDepot(): ?bool {
        return $this->interdireModifDepot;
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
     * Get the interim.
     *
     * @return bool|null Returns the interim.
     */
    public function getInterim(): ?bool {
        return $this->interim;
    }

    /**
     * Get the is groupe.
     *
     * @return bool|null Returns the is groupe.
     */
    public function getIsGroupe(): ?bool {
        return $this->isGroupe;
    }

    /**
     * Get the is profil messages.
     *
     * @return bool|null Returns the is profil messages.
     */
    public function getIsProfilMessages(): ?bool {
        return $this->isProfilMessages;
    }

    /**
     * Get the limiter visu agenda.
     *
     * @return bool|null Returns the limiter visu agenda.
     */
    public function getLimiterVisuAgenda(): ?bool {
        return $this->limiterVisuAgenda;
    }

    /**
     * Get the masquer fournisseurs.
     *
     * @return bool|null Returns the masquer fournisseurs.
     */
    public function getMasquerFournisseurs(): ?bool {
        return $this->masquerFournisseurs;
    }

    /**
     * Get the messages confidentiels.
     *
     * @return string|null Returns the messages confidentiels.
     */
    public function getMessagesConfidentiels(): ?string {
        return $this->messagesConfidentiels;
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
     * Get the modif droits asp.
     *
     * @return bool|null Returns the modif droits asp.
     */
    public function getModifDroitsAsp(): ?bool {
        return $this->modifDroitsAsp;
    }

    /**
     * Get the modif en vue.
     *
     * @return bool|null Returns the modif en vue.
     */
    public function getModifEnVue(): ?bool {
        return $this->modifEnVue;
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
     * Get the mot de passe.
     *
     * @return string|null Returns the mot de passe.
     */
    public function getMotDePasse(): ?string {
        return $this->motDePasse;
    }

    /**
     * Get the msg redir auto.
     *
     * @return bool|null Returns the msg redir auto.
     */
    public function getMsgRedirAuto(): ?bool {
        return $this->msgRedirAuto;
    }

    /**
     * Get the niv conf emp proprete restreint.
     *
     * @return bool|null Returns the niv conf emp proprete restreint.
     */
    public function getNivConfEmpPropreteRestreint(): ?bool {
        return $this->nivConfEmpPropreteRestreint;
    }

    /**
     * Get the niveau.
     *
     * @return int|null Returns the niveau.
     */
    public function getNiveau(): ?int {
        return $this->niveau;
    }

    /**
     * Get the niveau confidentialite qp.
     *
     * @return string|null Returns the niveau confidentialite qp.
     */
    public function getNiveauConfidentialiteQp(): ?string {
        return $this->niveauConfidentialiteQp;
    }

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getNom(): ?string {
        return $this->nom;
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
     * Get the pa invisible.
     *
     * @return bool|null Returns the pa invisible.
     */
    public function getPaInvisible(): ?bool {
        return $this->paInvisible;
    }

    /**
     * Get the parc code remorque.
     *
     * @return string|null Returns the parc code remorque.
     */
    public function getParcCodeRemorque(): ?string {
        return $this->parcCodeRemorque;
    }

    /**
     * Get the parc code vehicule.
     *
     * @return string|null Returns the parc code vehicule.
     */
    public function getParcCodeVehicule(): ?string {
        return $this->parcCodeVehicule;
    }

    /**
     * Get the pas acces qws.
     *
     * @return bool|null Returns the pas acces qws.
     */
    public function getPasAccesQws(): ?bool {
        return $this->pasAccesQws;
    }

    /**
     * Get the pas saisie des temps.
     *
     * @return bool|null Returns the pas saisie des temps.
     */
    public function getPasSaisieDesTemps(): ?bool {
        return $this->pasSaisieDesTemps;
    }

    /**
     * Get the pas saisie des temps auto.
     *
     * @return bool|null Returns the pas saisie des temps auto.
     */
    public function getPasSaisieDesTempsAuto(): ?bool {
        return $this->pasSaisieDesTempsAuto;
    }

    /**
     * Get the portable perso.
     *
     * @return string|null Returns the portable perso.
     */
    public function getPortablePerso(): ?string {
        return $this->portablePerso;
    }

    /**
     * Get the present.
     *
     * @return bool|null Returns the present.
     */
    public function getPresent(): ?bool {
        return $this->present;
    }

    /**
     * Get the prevenu nouveau cd.
     *
     * @return bool|null Returns the prevenu nouveau cd.
     */
    public function getPrevenuNouveauCd(): ?bool {
        return $this->prevenuNouveauCd;
    }

    /**
     * Get the prix km.
     *
     * @return float|null Returns the prix km.
     */
    public function getPrixKm(): ?float {
        return $this->prixKm;
    }

    /**
     * Get the prix vente.
     *
     * @return float|null Returns the prix vente.
     */
    public function getPrixVente(): ?float {
        return $this->prixVente;
    }

    /**
     * Get the prix vente2.
     *
     * @return float|null Returns the prix vente2.
     */
    public function getPrixVente2(): ?float {
        return $this->prixVente2;
    }

    /**
     * Get the prix vente3.
     *
     * @return float|null Returns the prix vente3.
     */
    public function getPrixVente3(): ?float {
        return $this->prixVente3;
    }

    /**
     * Get the restrict acces pieces.
     *
     * @return bool|null Returns the restrict acces pieces.
     */
    public function getRestrictAccesPieces(): ?bool {
        return $this->restrictAccesPieces;
    }

    /**
     * Get the restrict acces stats.
     *
     * @return bool|null Returns the restrict acces stats.
     */
    public function getRestrictAccesStats(): ?bool {
        return $this->restrictAccesStats;
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
     * Get the saisie pv interdite.
     *
     * @return bool|null Returns the saisie pv interdite.
     */
    public function getSaisiePvInterdite(): ?bool {
        return $this->saisiePvInterdite;
    }

    /**
     * Get the salaire mensuel.
     *
     * @return float|null Returns the salaire mensuel.
     */
    public function getSalaireMensuel(): ?float {
        return $this->salaireMensuel;
    }

    /**
     * Get the sel art collab.
     *
     * @return bool|null Returns the sel art collab.
     */
    public function getSelArtCollab(): ?bool {
        return $this->selArtCollab;
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
     * Get the sel cli collab.
     *
     * @return bool|null Returns the sel cli collab.
     */
    public function getSelCliCollab(): ?bool {
        return $this->selCliCollab;
    }

    /**
     * Get the sel frn collab.
     *
     * @return bool|null Returns the sel frn collab.
     */
    public function getSelFrnCollab(): ?bool {
        return $this->selFrnCollab;
    }

    /**
     * Get the selection article.
     *
     * @return string|null Returns the selection article.
     */
    public function getSelectionArticle(): ?string {
        return $this->selectionArticle;
    }

    /**
     * Get the selection client.
     *
     * @return string|null Returns the selection client.
     */
    public function getSelectionClient(): ?string {
        return $this->selectionClient;
    }

    /**
     * Get the selection fournisseur.
     *
     * @return string|null Returns the selection fournisseur.
     */
    public function getSelectionFournisseur(): ?string {
        return $this->selectionFournisseur;
    }

    /**
     * Get the suivi messages.
     *
     * @return bool|null Returns the suivi messages.
     */
    public function getSuiviMessages(): ?bool {
        return $this->suiviMessages;
    }

    /**
     * Get the superviseur.
     *
     * @return bool|null Returns the superviseur.
     */
    public function getSuperviseur(): ?bool {
        return $this->superviseur;
    }

    /**
     * Get the sync mso.
     *
     * @return bool|null Returns the sync mso.
     */
    public function getSyncMso(): ?bool {
        return $this->syncMso;
    }

    /**
     * Get the taches groupe.
     *
     * @return string|null Returns the taches groupe.
     */
    public function getTachesGroupe(): ?string {
        return $this->tachesGroupe;
    }

    /**
     * Get the taux commission.
     *
     * @return float|null Returns the taux commission.
     */
    public function getTauxCommission(): ?float {
        return $this->tauxCommission;
    }

    /**
     * Get the tel direct.
     *
     * @return string|null Returns the tel direct.
     */
    public function getTelDirect(): ?string {
        return $this->telDirect;
    }

    /**
     * Get the tel perso.
     *
     * @return string|null Returns the tel perso.
     */
    public function getTelPerso(): ?string {
        return $this->telPerso;
    }

    /**
     * Get the tel portable1.
     *
     * @return string|null Returns the tel portable1.
     */
    public function getTelPortable1(): ?string {
        return $this->telPortable1;
    }

    /**
     * Get the tel portable2.
     *
     * @return string|null Returns the tel portable2.
     */
    public function getTelPortable2(): ?string {
        return $this->telPortable2;
    }

    /**
     * Get the tel poste.
     *
     * @return string|null Returns the tel poste.
     */
    public function getTelPoste(): ?string {
        return $this->telPoste;
    }

    /**
     * Get the tp pas controler.
     *
     * @return bool|null Returns the tp pas controler.
     */
    public function getTpPasControler(): ?bool {
        return $this->tpPasControler;
    }

    /**
     * Get the tp pas journal temps.
     *
     * @return bool|null Returns the tp pas journal temps.
     */
    public function getTpPasJournalTemps(): ?bool {
        return $this->tpPasJournalTemps;
    }

    /**
     * Get the tp pas notes de frais.
     *
     * @return bool|null Returns the tp pas notes de frais.
     */
    public function getTpPasNotesDeFrais(): ?bool {
        return $this->tpPasNotesDeFrais;
    }

    /**
     * Get the tp pas tps valide.
     *
     * @return bool|null Returns the tp pas tps valide.
     */
    public function getTpPasTpsValide(): ?bool {
        return $this->tpPasTpsValide;
    }

    /**
     * Get the tp pourcentage non operationnel.
     *
     * @return float|null Returns the tp pourcentage non operationnel.
     */
    public function getTpPourcentageNonOperationnel(): ?float {
        return $this->tpPourcentageNonOperationnel;
    }

    /**
     * Get the tps niveau blocage.
     *
     * @return string|null Returns the tps niveau blocage.
     */
    public function getTpsNiveauBlocage(): ?string {
        return $this->tpsNiveauBlocage;
    }

    /**
     * Get the tx com invisible.
     *
     * @return bool|null Returns the tx com invisible.
     */
    public function getTxComInvisible(): ?bool {
        return $this->txComInvisible;
    }

    /**
     * Get the type conf2 cmav cli.
     *
     * @return string|null Returns the type conf2 cmav cli.
     */
    public function getTypeConf2CmavCli(): ?string {
        return $this->typeConf2CmavCli;
    }

    /**
     * Get the type conf cmav cli.
     *
     * @return string|null Returns the type conf cmav cli.
     */
    public function getTypeConfCmavCli(): ?string {
        return $this->typeConfCmavCli;
    }

    /**
     * Get the type visu appels.
     *
     * @return string|null Returns the type visu appels.
     */
    public function getTypeVisuAppels(): ?string {
        return $this->typeVisuAppels;
    }

    /**
     * Get the type visu taches.
     *
     * @return string|null Returns the type visu taches.
     */
    public function getTypeVisuTaches(): ?string {
        return $this->typeVisuTaches;
    }

    /**
     * Get the use mail generic.
     *
     * @return bool|null Returns the use mail generic.
     */
    public function getUseMailGeneric(): ?bool {
        return $this->useMailGeneric;
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
     * Get the vue com droit reaffect.
     *
     * @return bool|null Returns the vue com droit reaffect.
     */
    public function getVueComDroitReaffect(): ?bool {
        return $this->vueComDroitReaffect;
    }

    /**
     * Get the vue devis droit reaffect.
     *
     * @return bool|null Returns the vue devis droit reaffect.
     */
    public function getVueDevisDroitReaffect(): ?bool {
        return $this->vueDevisDroitReaffect;
    }

    /**
     * Get the vue devis droit suppr.
     *
     * @return bool|null Returns the vue devis droit suppr.
     */
    public function getVueDevisDroitSuppr(): ?bool {
        return $this->vueDevisDroitSuppr;
    }

    /**
     * Get the vue devis droit valid.
     *
     * @return bool|null Returns the vue devis droit valid.
     */
    public function getVueDevisDroitValid(): ?bool {
        return $this->vueDevisDroitValid;
    }

    /**
     * Get the ya droits collab.
     *
     * @return bool|null Returns the ya droits collab.
     */
    public function getYaDroitsCollab(): ?bool {
        return $this->yaDroitsCollab;
    }

    /**
     * Get the e ws mdp.
     *
     * @return string|null Returns the e ws mdp.
     */
    public function geteWsMdp(): ?string {
        return $this->eWsMdp;
    }

    /**
     * Set the acces autorise bons travaux.
     *
     * @param bool|null $accesAutoriseBonsTravaux The acces autorise bons travaux.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAccesAutoriseBonsTravaux(?bool $accesAutoriseBonsTravaux): Collaborateurs {
        $this->accesAutoriseBonsTravaux = $accesAutoriseBonsTravaux;
        return $this;
    }

    /**
     * Set the acces autorise plan facturation.
     *
     * @param bool|null $accesAutorisePlanFacturation The acces autorise plan facturation.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAccesAutorisePlanFacturation(?bool $accesAutorisePlanFacturation): Collaborateurs {
        $this->accesAutorisePlanFacturation = $accesAutorisePlanFacturation;
        return $this;
    }

    /**
     * Set the acces autorise plan tache.
     *
     * @param bool|null $accesAutorisePlanTache The acces autorise plan tache.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAccesAutorisePlanTache(?bool $accesAutorisePlanTache): Collaborateurs {
        $this->accesAutorisePlanTache = $accesAutorisePlanTache;
        return $this;
    }

    /**
     * Set the acces cur doss only.
     *
     * @param bool|null $accesCurDossOnly The acces cur doss only.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAccesCurDossOnly(?bool $accesCurDossOnly): Collaborateurs {
        $this->accesCurDossOnly = $accesCurDossOnly;
        return $this;
    }

    /**
     * Set the acces docs cab.
     *
     * @param bool|null $accesDocsCab The acces docs cab.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAccesDocsCab(?bool $accesDocsCab): Collaborateurs {
        $this->accesDocsCab = $accesDocsCab;
        return $this;
    }

    /**
     * Set the acces dossier cpta.
     *
     * @param string|null $accesDossierCpta The acces dossier cpta.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAccesDossierCpta(?string $accesDossierCpta): Collaborateurs {
        $this->accesDossierCpta = $accesDossierCpta;
        return $this;
    }

    /**
     * Set the acces dossier paie.
     *
     * @param string|null $accesDossierPaie The acces dossier paie.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAccesDossierPaie(?string $accesDossierPaie): Collaborateurs {
        $this->accesDossierPaie = $accesDossierPaie;
        return $this;
    }

    /**
     * Set the acces gestionaire stats croisees.
     *
     * @param bool|null $accesGestionaireStatsCroisees The acces gestionaire stats croisees.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAccesGestionaireStatsCroisees(?bool $accesGestionaireStatsCroisees): Collaborateurs {
        $this->accesGestionaireStatsCroisees = $accesGestionaireStatsCroisees;
        return $this;
    }

    /**
     * Set the acces rep commun.
     *
     * @param string|null $accesRepCommun The acces rep commun.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAccesRepCommun(?string $accesRepCommun): Collaborateurs {
        $this->accesRepCommun = $accesRepCommun;
        return $this;
    }

    /**
     * Set the acces stat cab.
     *
     * @param bool|null $accesStatCab The acces stat cab.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAccesStatCab(?bool $accesStatCab): Collaborateurs {
        $this->accesStatCab = $accesStatCab;
        return $this;
    }

    /**
     * Set the annulation affaire.
     *
     * @param bool|null $annulationAffaire The annulation affaire.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationAffaire(?bool $annulationAffaire): Collaborateurs {
        $this->annulationAffaire = $annulationAffaire;
        return $this;
    }

    /**
     * Set the annulation article.
     *
     * @param bool|null $annulationArticle The annulation article.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationArticle(?bool $annulationArticle): Collaborateurs {
        $this->annulationArticle = $annulationArticle;
        return $this;
    }

    /**
     * Set the annulation bons travaux.
     *
     * @param bool|null $annulationBonsTravaux The annulation bons travaux.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationBonsTravaux(?bool $annulationBonsTravaux): Collaborateurs {
        $this->annulationBonsTravaux = $annulationBonsTravaux;
        return $this;
    }

    /**
     * Set the annulation chantier.
     *
     * @param bool|null $annulationChantier The annulation chantier.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationChantier(?bool $annulationChantier): Collaborateurs {
        $this->annulationChantier = $annulationChantier;
        return $this;
    }

    /**
     * Set the annulation client.
     *
     * @param bool|null $annulationClient The annulation client.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationClient(?bool $annulationClient): Collaborateurs {
        $this->annulationClient = $annulationClient;
        return $this;
    }

    /**
     * Set the annulation commission.
     *
     * @param bool|null $annulationCommission The annulation commission.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationCommission(?bool $annulationCommission): Collaborateurs {
        $this->annulationCommission = $annulationCommission;
        return $this;
    }

    /**
     * Set the annulation dossier cpta.
     *
     * @param bool|null $annulationDossierCpta The annulation dossier cpta.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationDossierCpta(?bool $annulationDossierCpta): Collaborateurs {
        $this->annulationDossierCpta = $annulationDossierCpta;
        return $this;
    }

    /**
     * Set the annulation dossier fact.
     *
     * @param bool|null $annulationDossierFact The annulation dossier fact.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationDossierFact(?bool $annulationDossierFact): Collaborateurs {
        $this->annulationDossierFact = $annulationDossierFact;
        return $this;
    }

    /**
     * Set the annulation dossier paie.
     *
     * @param bool|null $annulationDossierPaie The annulation dossier paie.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationDossierPaie(?bool $annulationDossierPaie): Collaborateurs {
        $this->annulationDossierPaie = $annulationDossierPaie;
        return $this;
    }

    /**
     * Set the annulation fournisseur.
     *
     * @param bool|null $annulationFournisseur The annulation fournisseur.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationFournisseur(?bool $annulationFournisseur): Collaborateurs {
        $this->annulationFournisseur = $annulationFournisseur;
        return $this;
    }

    /**
     * Set the annulation plan facturation.
     *
     * @param bool|null $annulationPlanFacturation The annulation plan facturation.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationPlanFacturation(?bool $annulationPlanFacturation): Collaborateurs {
        $this->annulationPlanFacturation = $annulationPlanFacturation;
        return $this;
    }

    /**
     * Set the annulation plan tache.
     *
     * @param bool|null $annulationPlanTache The annulation plan tache.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationPlanTache(?bool $annulationPlanTache): Collaborateurs {
        $this->annulationPlanTache = $annulationPlanTache;
        return $this;
    }

    /**
     * Set the annulation tache.
     *
     * @param bool|null $annulationTache The annulation tache.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationTache(?bool $annulationTache): Collaborateurs {
        $this->annulationTache = $annulationTache;
        return $this;
    }

    /**
     * Set the annulation tarif.
     *
     * @param bool|null $annulationTarif The annulation tarif.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAnnulationTarif(?bool $annulationTarif): Collaborateurs {
        $this->annulationTarif = $annulationTarif;
        return $this;
    }

    /**
     * Set the articles lst perso acces gestion modifiables.
     *
     * @param bool|null $articlesLstPersoAccesGestionModifiables The articles lst perso acces gestion modifiables.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setArticlesLstPersoAccesGestionModifiables(?bool $articlesLstPersoAccesGestionModifiables): Collaborateurs {
        $this->articlesLstPersoAccesGestionModifiables = $articlesLstPersoAccesGestionModifiables;
        return $this;
    }

    /**
     * Set the articles lst perso acces gestionnaire.
     *
     * @param bool|null $articlesLstPersoAccesGestionnaire The articles lst perso acces gestionnaire.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setArticlesLstPersoAccesGestionnaire(?bool $articlesLstPersoAccesGestionnaire): Collaborateurs {
        $this->articlesLstPersoAccesGestionnaire = $articlesLstPersoAccesGestionnaire;
        return $this;
    }

    /**
     * Set the articles lst perso champs modif.
     *
     * @param bool|null $articlesLstPersoChampsModif The articles lst perso champs modif.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setArticlesLstPersoChampsModif(?bool $articlesLstPersoChampsModif): Collaborateurs {
        $this->articlesLstPersoChampsModif = $articlesLstPersoChampsModif;
        return $this;
    }

    /**
     * Set the articles lst perso copie colonne.
     *
     * @param bool|null $articlesLstPersoCopieColonne The articles lst perso copie colonne.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setArticlesLstPersoCopieColonne(?bool $articlesLstPersoCopieColonne): Collaborateurs {
        $this->articlesLstPersoCopieColonne = $articlesLstPersoCopieColonne;
        return $this;
    }

    /**
     * Set the articles lst perso interdire creat.
     *
     * @param bool|null $articlesLstPersoInterdireCreat The articles lst perso interdire creat.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setArticlesLstPersoInterdireCreat(?bool $articlesLstPersoInterdireCreat): Collaborateurs {
        $this->articlesLstPersoInterdireCreat = $articlesLstPersoInterdireCreat;
        return $this;
    }

    /**
     * Set the autorise saisie tps colonnes.
     *
     * @param bool|null $autoriseSaisieTpsColonnes The autorise saisie tps colonnes.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setAutoriseSaisieTpsColonnes(?bool $autoriseSaisieTpsColonnes): Collaborateurs {
        $this->autoriseSaisieTpsColonnes = $autoriseSaisieTpsColonnes;
        return $this;
    }

    /**
     * Set the bic.
     *
     * @param string|null $bic The bic.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setBic(?string $bic): Collaborateurs {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the blocage ed cli.
     *
     * @param bool|null $blocageEdCli The blocage ed cli.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setBlocageEdCli(?bool $blocageEdCli): Collaborateurs {
        $this->blocageEdCli = $blocageEdCli;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setBtq(?string $btq): Collaborateurs {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Collaborateurs {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the categorie prix km.
     *
     * @param string|null $categoriePrixKm The categorie prix km.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCategoriePrixKm(?string $categoriePrixKm): Collaborateurs {
        $this->categoriePrixKm = $categoriePrixKm;
        return $this;
    }

    /**
     * Set the categorie ticket resto.
     *
     * @param string|null $categorieTicketResto The categorie ticket resto.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCategorieTicketResto(?string $categorieTicketResto): Collaborateurs {
        $this->categorieTicketResto = $categorieTicketResto;
        return $this;
    }

    /**
     * Set the charges mensuelles.
     *
     * @param float|null $chargesMensuelles The charges mensuelles.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setChargesMensuelles(?float $chargesMensuelles): Collaborateurs {
        $this->chargesMensuelles = $chargesMensuelles;
        return $this;
    }

    /**
     * Set the cle ccn paie.
     *
     * @param string|null $cleCcnPaie The cle ccn paie.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCleCcnPaie(?string $cleCcnPaie): Collaborateurs {
        $this->cleCcnPaie = $cleCcnPaie;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCode(?string $code): Collaborateurs {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeCentre(?string $codeCentre): Collaborateurs {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code chef1.
     *
     * @param string|null $codeChef1 The code chef1.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeChef1(?string $codeChef1): Collaborateurs {
        $this->codeChef1 = $codeChef1;
        return $this;
    }

    /**
     * Set the code chef2.
     *
     * @param string|null $codeChef2 The code chef2.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeChef2(?string $codeChef2): Collaborateurs {
        $this->codeChef2 = $codeChef2;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string|null $codeDepot The code depot.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeDepot(?string $codeDepot): Collaborateurs {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string|null $codeFamille The code famille.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeFamille(?string $codeFamille): Collaborateurs {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code famille frn.
     *
     * @param string|null $codeFamilleFrn The code famille frn.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeFamilleFrn(?string $codeFamilleFrn): Collaborateurs {
        $this->codeFamilleFrn = $codeFamilleFrn;
        return $this;
    }

    /**
     * Set the code groupe.
     *
     * @param string|null $codeGroupe The code groupe.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeGroupe(?string $codeGroupe): Collaborateurs {
        $this->codeGroupe = $codeGroupe;
        return $this;
    }

    /**
     * Set the code groupe visu msg.
     *
     * @param string|null $codeGroupeVisuMsg The code groupe visu msg.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeGroupeVisuMsg(?string $codeGroupeVisuMsg): Collaborateurs {
        $this->codeGroupeVisuMsg = $codeGroupeVisuMsg;
        return $this;
    }

    /**
     * Set the code langue.
     *
     * @param string|null $codeLangue The code langue.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeLangue(?string $codeLangue): Collaborateurs {
        $this->codeLangue = $codeLangue;
        return $this;
    }

    /**
     * Set the code liaison dest.
     *
     * @param string|null $codeLiaisonDest The code liaison dest.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeLiaisonDest(?string $codeLiaisonDest): Collaborateurs {
        $this->codeLiaisonDest = $codeLiaisonDest;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string|null $codeOfficielCommune The code officiel commune.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeOfficielCommune(?string $codeOfficielCommune): Collaborateurs {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodePostal(?string $codePostal): Collaborateurs {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code vehicule.
     *
     * @param string|null $codeVehicule The code vehicule.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeVehicule(?string $codeVehicule): Collaborateurs {
        $this->codeVehicule = $codeVehicule;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string|null $codeVentilCompta The code ventil compta.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCodeVentilCompta(?string $codeVentilCompta): Collaborateurs {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setComplement(?string $complement): Collaborateurs {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the compte comptable.
     *
     * @param string|null $compteComptable The compte comptable.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCompteComptable(?string $compteComptable): Collaborateurs {
        $this->compteComptable = $compteComptable;
        return $this;
    }

    /**
     * Set the compte de tiers.
     *
     * @param string|null $compteDeTiers The compte de tiers.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCompteDeTiers(?string $compteDeTiers): Collaborateurs {
        $this->compteDeTiers = $compteDeTiers;
        return $this;
    }

    /**
     * Set the controle saisie tp.
     *
     * @param string|null $controleSaisieTp The controle saisie tp.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setControleSaisieTp(?string $controleSaisieTp): Collaborateurs {
        $this->controleSaisieTp = $controleSaisieTp;
        return $this;
    }

    /**
     * Set the creation affaire.
     *
     * @param bool|null $creationAffaire The creation affaire.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationAffaire(?bool $creationAffaire): Collaborateurs {
        $this->creationAffaire = $creationAffaire;
        return $this;
    }

    /**
     * Set the creation article.
     *
     * @param bool|null $creationArticle The creation article.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationArticle(?bool $creationArticle): Collaborateurs {
        $this->creationArticle = $creationArticle;
        return $this;
    }

    /**
     * Set the creation bons travaux.
     *
     * @param bool|null $creationBonsTravaux The creation bons travaux.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationBonsTravaux(?bool $creationBonsTravaux): Collaborateurs {
        $this->creationBonsTravaux = $creationBonsTravaux;
        return $this;
    }

    /**
     * Set the creation chantier.
     *
     * @param bool|null $creationChantier The creation chantier.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationChantier(?bool $creationChantier): Collaborateurs {
        $this->creationChantier = $creationChantier;
        return $this;
    }

    /**
     * Set the creation client.
     *
     * @param bool|null $creationClient The creation client.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationClient(?bool $creationClient): Collaborateurs {
        $this->creationClient = $creationClient;
        return $this;
    }

    /**
     * Set the creation commission.
     *
     * @param bool|null $creationCommission The creation commission.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationCommission(?bool $creationCommission): Collaborateurs {
        $this->creationCommission = $creationCommission;
        return $this;
    }

    /**
     * Set the creation dossier cpta.
     *
     * @param bool|null $creationDossierCpta The creation dossier cpta.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationDossierCpta(?bool $creationDossierCpta): Collaborateurs {
        $this->creationDossierCpta = $creationDossierCpta;
        return $this;
    }

    /**
     * Set the creation dossier fact.
     *
     * @param bool|null $creationDossierFact The creation dossier fact.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationDossierFact(?bool $creationDossierFact): Collaborateurs {
        $this->creationDossierFact = $creationDossierFact;
        return $this;
    }

    /**
     * Set the creation dossier paie.
     *
     * @param bool|null $creationDossierPaie The creation dossier paie.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationDossierPaie(?bool $creationDossierPaie): Collaborateurs {
        $this->creationDossierPaie = $creationDossierPaie;
        return $this;
    }

    /**
     * Set the creation fournisseur.
     *
     * @param bool|null $creationFournisseur The creation fournisseur.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationFournisseur(?bool $creationFournisseur): Collaborateurs {
        $this->creationFournisseur = $creationFournisseur;
        return $this;
    }

    /**
     * Set the creation plan facturation.
     *
     * @param bool|null $creationPlanFacturation The creation plan facturation.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationPlanFacturation(?bool $creationPlanFacturation): Collaborateurs {
        $this->creationPlanFacturation = $creationPlanFacturation;
        return $this;
    }

    /**
     * Set the creation plan tache.
     *
     * @param bool|null $creationPlanTache The creation plan tache.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationPlanTache(?bool $creationPlanTache): Collaborateurs {
        $this->creationPlanTache = $creationPlanTache;
        return $this;
    }

    /**
     * Set the creation tache.
     *
     * @param bool|null $creationTache The creation tache.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationTache(?bool $creationTache): Collaborateurs {
        $this->creationTache = $creationTache;
        return $this;
    }

    /**
     * Set the creation tarif.
     *
     * @param bool|null $creationTarif The creation tarif.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setCreationTarif(?bool $creationTarif): Collaborateurs {
        $this->creationTarif = $creationTarif;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setDateEntree(?DateTime $dateEntree): Collaborateurs {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setDateSortie(?DateTime $dateSortie): Collaborateurs {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the date validation budget.
     *
     * @param DateTime|null $dateValidationBudget The date validation budget.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setDateValidationBudget(?DateTime $dateValidationBudget): Collaborateurs {
        $this->dateValidationBudget = $dateValidationBudget;
        return $this;
    }

    /**
     * Set the date validation nd f.
     *
     * @param DateTime|null $dateValidationNdF The date validation nd f.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setDateValidationNdF(?DateTime $dateValidationNdF): Collaborateurs {
        $this->dateValidationNdF = $dateValidationNdF;
        return $this;
    }

    /**
     * Set the date validation tp.
     *
     * @param DateTime|null $dateValidationTp The date validation tp.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setDateValidationTp(?DateTime $dateValidationTp): Collaborateurs {
        $this->dateValidationTp = $dateValidationTp;
        return $this;
    }

    /**
     * Set the desactiver filtre msg.
     *
     * @param bool|null $desactiverFiltreMsg The desactiver filtre msg.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setDesactiverFiltreMsg(?bool $desactiverFiltreMsg): Collaborateurs {
        $this->desactiverFiltreMsg = $desactiverFiltreMsg;
        return $this;
    }

    /**
     * Set the disponible.
     *
     * @param bool|null $disponible The disponible.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setDisponible(?bool $disponible): Collaborateurs {
        $this->disponible = $disponible;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string|null $domBanque The dom banque.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setDomBanque(?string $domBanque): Collaborateurs {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the dossier paie.
     *
     * @param string|null $dossierPaie The dossier paie.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setDossierPaie(?string $dossierPaie): Collaborateurs {
        $this->dossierPaie = $dossierPaie;
        return $this;
    }

    /**
     * Set the droit param emails confidentiels.
     *
     * @param bool|null $droitParamEmailsConfidentiels The droit param emails confidentiels.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setDroitParamEmailsConfidentiels(?bool $droitParamEmailsConfidentiels): Collaborateurs {
        $this->droitParamEmailsConfidentiels = $droitParamEmailsConfidentiels;
        return $this;
    }

    /**
     * Set the droit sync port.
     *
     * @param bool|null $droitSyncPort The droit sync port.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setDroitSyncPort(?bool $droitSyncPort): Collaborateurs {
        $this->droitSyncPort = $droitSyncPort;
        return $this;
    }

    /**
     * Set the droit sync q prop.
     *
     * @param bool|null $droitSyncQProp The droit sync q prop.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setDroitSyncQProp(?bool $droitSyncQProp): Collaborateurs {
        $this->droitSyncQProp = $droitSyncQProp;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmail(?string $email): Collaborateurs {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the email activer aide saisie.
     *
     * @param bool|null $emailActiverAideSaisie The email activer aide saisie.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailActiverAideSaisie(?bool $emailActiverAideSaisie): Collaborateurs {
        $this->emailActiverAideSaisie = $emailActiverAideSaisie;
        return $this;
    }

    /**
     * Set the email agenda dmd confirm.
     *
     * @param string|null $emailAgendaDmdConfirm The email agenda dmd confirm.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailAgendaDmdConfirm(?string $emailAgendaDmdConfirm): Collaborateurs {
        $this->emailAgendaDmdConfirm = $emailAgendaDmdConfirm;
        return $this;
    }

    /**
     * Set the email auto cloture imap.
     *
     * @param bool|null $emailAutoClotureImap The email auto cloture imap.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailAutoClotureImap(?bool $emailAutoClotureImap): Collaborateurs {
        $this->emailAutoClotureImap = $emailAutoClotureImap;
        return $this;
    }

    /**
     * Set the email lst adr choix elem.
     *
     * @param int|null $emailLstAdrChoixElem The email lst adr choix elem.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailLstAdrChoixElem(?int $emailLstAdrChoixElem): Collaborateurs {
        $this->emailLstAdrChoixElem = $emailLstAdrChoixElem;
        return $this;
    }

    /**
     * Set the email mode signature.
     *
     * @param int|null $emailModeSignature The email mode signature.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailModeSignature(?int $emailModeSignature): Collaborateurs {
        $this->emailModeSignature = $emailModeSignature;
        return $this;
    }

    /**
     * Set the email nb j ag mini.
     *
     * @param int|null $emailNbJAgMini The email nb j ag mini.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailNbJAgMini(?int $emailNbJAgMini): Collaborateurs {
        $this->emailNbJAgMini = $emailNbJAgMini;
        return $this;
    }

    /**
     * Set the email objet defaut.
     *
     * @param string|null $emailObjetDefaut The email objet defaut.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailObjetDefaut(?string $emailObjetDefaut): Collaborateurs {
        $this->emailObjetDefaut = $emailObjetDefaut;
        return $this;
    }

    /**
     * Set the email pied.
     *
     * @param string|null $emailPied The email pied.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailPied(?string $emailPied): Collaborateurs {
        $this->emailPied = $emailPied;
        return $this;
    }

    /**
     * Set the email redir auto.
     *
     * @param bool|null $emailRedirAuto The email redir auto.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailRedirAuto(?bool $emailRedirAuto): Collaborateurs {
        $this->emailRedirAuto = $emailRedirAuto;
        return $this;
    }

    /**
     * Set the email redir auto collab.
     *
     * @param string|null $emailRedirAutoCollab The email redir auto collab.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailRedirAutoCollab(?string $emailRedirAutoCollab): Collaborateurs {
        $this->emailRedirAutoCollab = $emailRedirAutoCollab;
        return $this;
    }

    /**
     * Set the email redirection.
     *
     * @param string|null $emailRedirection The email redirection.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailRedirection(?string $emailRedirection): Collaborateurs {
        $this->emailRedirection = $emailRedirection;
        return $this;
    }

    /**
     * Set the email reponse auto.
     *
     * @param bool|null $emailReponseAuto The email reponse auto.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailReponseAuto(?bool $emailReponseAuto): Collaborateurs {
        $this->emailReponseAuto = $emailReponseAuto;
        return $this;
    }

    /**
     * Set the email reponse auto text.
     *
     * @param string|null $emailReponseAutoText The email reponse auto text.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailReponseAutoText(?string $emailReponseAutoText): Collaborateurs {
        $this->emailReponseAutoText = $emailReponseAutoText;
        return $this;
    }

    /**
     * Set the email rr active.
     *
     * @param bool|null $emailRrActive The email rr active.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailRrActive(?bool $emailRrActive): Collaborateurs {
        $this->emailRrActive = $emailRrActive;
        return $this;
    }

    /**
     * Set the email start mode.
     *
     * @param int|null $emailStartMode The email start mode.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailStartMode(?int $emailStartMode): Collaborateurs {
        $this->emailStartMode = $emailStartMode;
        return $this;
    }

    /**
     * Set the email sur serveur.
     *
     * @param bool|null $emailSurServeur The email sur serveur.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailSurServeur(?bool $emailSurServeur): Collaborateurs {
        $this->emailSurServeur = $emailSurServeur;
        return $this;
    }

    /**
     * Set the email tete.
     *
     * @param string|null $emailTete The email tete.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEmailTete(?string $emailTete): Collaborateurs {
        $this->emailTete = $emailTete;
        return $this;
    }

    /**
     * Set the est acheteur.
     *
     * @param int|null $estAcheteur The est acheteur.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEstAcheteur(?int $estAcheteur): Collaborateurs {
        $this->estAcheteur = $estAcheteur;
        return $this;
    }

    /**
     * Set the etab confidentialite qp.
     *
     * @param string|null $etabConfidentialiteQp The etab confidentialite qp.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setEtabConfidentialiteQp(?string $etabConfidentialiteQp): Collaborateurs {
        $this->etabConfidentialiteQp = $etabConfidentialiteQp;
        return $this;
    }

    /**
     * Set the fictif.
     *
     * @param bool|null $fictif The fictif.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setFictif(?bool $fictif): Collaborateurs {
        $this->fictif = $fictif;
        return $this;
    }

    /**
     * Set the fonction.
     *
     * @param string|null $fonction The fonction.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setFonction(?string $fonction): Collaborateurs {
        $this->fonction = $fonction;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setIban(?string $iban): Collaborateurs {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the interdiction pwd.
     *
     * @param bool|null $interdictionPwd The interdiction pwd.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterdictionPwd(?bool $interdictionPwd): Collaborateurs {
        $this->interdictionPwd = $interdictionPwd;
        return $this;
    }

    /**
     * Set the interdiction vue facturation.
     *
     * @param bool|null $interdictionVueFacturation The interdiction vue facturation.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterdictionVueFacturation(?bool $interdictionVueFacturation): Collaborateurs {
        $this->interdictionVueFacturation = $interdictionVueFacturation;
        return $this;
    }

    /**
     * Set the interdire acces archives cpta.
     *
     * @param bool|null $interdireAccesArchivesCpta The interdire acces archives cpta.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterdireAccesArchivesCpta(?bool $interdireAccesArchivesCpta): Collaborateurs {
        $this->interdireAccesArchivesCpta = $interdireAccesArchivesCpta;
        return $this;
    }

    /**
     * Set the interdire acces archives paie.
     *
     * @param bool|null $interdireAccesArchivesPaie The interdire acces archives paie.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterdireAccesArchivesPaie(?bool $interdireAccesArchivesPaie): Collaborateurs {
        $this->interdireAccesArchivesPaie = $interdireAccesArchivesPaie;
        return $this;
    }

    /**
     * Set the interdire acces edition balance.
     *
     * @param bool|null $interdireAccesEditionBalance The interdire acces edition balance.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterdireAccesEditionBalance(?bool $interdireAccesEditionBalance): Collaborateurs {
        $this->interdireAccesEditionBalance = $interdireAccesEditionBalance;
        return $this;
    }

    /**
     * Set the interdire acces entete.
     *
     * @param bool|null $interdireAccesEntete The interdire acces entete.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterdireAccesEntete(?bool $interdireAccesEntete): Collaborateurs {
        $this->interdireAccesEntete = $interdireAccesEntete;
        return $this;
    }

    /**
     * Set the interdire acces supp doc arch.
     *
     * @param bool|null $interdireAccesSuppDocArch The interdire acces supp doc arch.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterdireAccesSuppDocArch(?bool $interdireAccesSuppDocArch): Collaborateurs {
        $this->interdireAccesSuppDocArch = $interdireAccesSuppDocArch;
        return $this;
    }

    /**
     * Set the interdire edition valorise jrn temps.
     *
     * @param bool|null $interdireEditionValoriseJrnTemps The interdire edition valorise jrn temps.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterdireEditionValoriseJrnTemps(?bool $interdireEditionValoriseJrnTemps): Collaborateurs {
        $this->interdireEditionValoriseJrnTemps = $interdireEditionValoriseJrnTemps;
        return $this;
    }

    /**
     * Set the interdire envoi postit.
     *
     * @param bool|null $interdireEnvoiPostit The interdire envoi postit.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterdireEnvoiPostit(?bool $interdireEnvoiPostit): Collaborateurs {
        $this->interdireEnvoiPostit = $interdireEnvoiPostit;
        return $this;
    }

    /**
     * Set the interdire modif aff cli.
     *
     * @param bool|null $interdireModifAffCli The interdire modif aff cli.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterdireModifAffCli(?bool $interdireModifAffCli): Collaborateurs {
        $this->interdireModifAffCli = $interdireModifAffCli;
        return $this;
    }

    /**
     * Set the interdire modif depot.
     *
     * @param bool|null $interdireModifDepot The interdire modif depot.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterdireModifDepot(?bool $interdireModifDepot): Collaborateurs {
        $this->interdireModifDepot = $interdireModifDepot;
        return $this;
    }

    /**
     * Set the interdire publi doc web.
     *
     * @param bool|null $interdirePubliDocWeb The interdire publi doc web.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterdirePubliDocWeb(?bool $interdirePubliDocWeb): Collaborateurs {
        $this->interdirePubliDocWeb = $interdirePubliDocWeb;
        return $this;
    }

    /**
     * Set the interim.
     *
     * @param bool|null $interim The interim.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setInterim(?bool $interim): Collaborateurs {
        $this->interim = $interim;
        return $this;
    }

    /**
     * Set the is groupe.
     *
     * @param bool|null $isGroupe The is groupe.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setIsGroupe(?bool $isGroupe): Collaborateurs {
        $this->isGroupe = $isGroupe;
        return $this;
    }

    /**
     * Set the is profil messages.
     *
     * @param bool|null $isProfilMessages The is profil messages.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setIsProfilMessages(?bool $isProfilMessages): Collaborateurs {
        $this->isProfilMessages = $isProfilMessages;
        return $this;
    }

    /**
     * Set the limiter visu agenda.
     *
     * @param bool|null $limiterVisuAgenda The limiter visu agenda.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setLimiterVisuAgenda(?bool $limiterVisuAgenda): Collaborateurs {
        $this->limiterVisuAgenda = $limiterVisuAgenda;
        return $this;
    }

    /**
     * Set the masquer fournisseurs.
     *
     * @param bool|null $masquerFournisseurs The masquer fournisseurs.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setMasquerFournisseurs(?bool $masquerFournisseurs): Collaborateurs {
        $this->masquerFournisseurs = $masquerFournisseurs;
        return $this;
    }

    /**
     * Set the messages confidentiels.
     *
     * @param string|null $messagesConfidentiels The messages confidentiels.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setMessagesConfidentiels(?string $messagesConfidentiels): Collaborateurs {
        $this->messagesConfidentiels = $messagesConfidentiels;
        return $this;
    }

    /**
     * Set the modif affaire.
     *
     * @param string|null $modifAffaire The modif affaire.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifAffaire(?string $modifAffaire): Collaborateurs {
        $this->modifAffaire = $modifAffaire;
        return $this;
    }

    /**
     * Set the modif article.
     *
     * @param string|null $modifArticle The modif article.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifArticle(?string $modifArticle): Collaborateurs {
        $this->modifArticle = $modifArticle;
        return $this;
    }

    /**
     * Set the modif bons travaux.
     *
     * @param string|null $modifBonsTravaux The modif bons travaux.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifBonsTravaux(?string $modifBonsTravaux): Collaborateurs {
        $this->modifBonsTravaux = $modifBonsTravaux;
        return $this;
    }

    /**
     * Set the modif chantier.
     *
     * @param string|null $modifChantier The modif chantier.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifChantier(?string $modifChantier): Collaborateurs {
        $this->modifChantier = $modifChantier;
        return $this;
    }

    /**
     * Set the modif client.
     *
     * @param string|null $modifClient The modif client.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifClient(?string $modifClient): Collaborateurs {
        $this->modifClient = $modifClient;
        return $this;
    }

    /**
     * Set the modif commission.
     *
     * @param string|null $modifCommission The modif commission.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifCommission(?string $modifCommission): Collaborateurs {
        $this->modifCommission = $modifCommission;
        return $this;
    }

    /**
     * Set the modif dossier fact.
     *
     * @param string|null $modifDossierFact The modif dossier fact.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifDossierFact(?string $modifDossierFact): Collaborateurs {
        $this->modifDossierFact = $modifDossierFact;
        return $this;
    }

    /**
     * Set the modif droits asp.
     *
     * @param bool|null $modifDroitsAsp The modif droits asp.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifDroitsAsp(?bool $modifDroitsAsp): Collaborateurs {
        $this->modifDroitsAsp = $modifDroitsAsp;
        return $this;
    }

    /**
     * Set the modif en vue.
     *
     * @param bool|null $modifEnVue The modif en vue.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifEnVue(?bool $modifEnVue): Collaborateurs {
        $this->modifEnVue = $modifEnVue;
        return $this;
    }

    /**
     * Set the modif fournisseur.
     *
     * @param string|null $modifFournisseur The modif fournisseur.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifFournisseur(?string $modifFournisseur): Collaborateurs {
        $this->modifFournisseur = $modifFournisseur;
        return $this;
    }

    /**
     * Set the modif plan facturation.
     *
     * @param string|null $modifPlanFacturation The modif plan facturation.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifPlanFacturation(?string $modifPlanFacturation): Collaborateurs {
        $this->modifPlanFacturation = $modifPlanFacturation;
        return $this;
    }

    /**
     * Set the modif plan tache.
     *
     * @param string|null $modifPlanTache The modif plan tache.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifPlanTache(?string $modifPlanTache): Collaborateurs {
        $this->modifPlanTache = $modifPlanTache;
        return $this;
    }

    /**
     * Set the modif tache.
     *
     * @param string|null $modifTache The modif tache.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifTache(?string $modifTache): Collaborateurs {
        $this->modifTache = $modifTache;
        return $this;
    }

    /**
     * Set the modif tarif.
     *
     * @param string|null $modifTarif The modif tarif.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setModifTarif(?string $modifTarif): Collaborateurs {
        $this->modifTarif = $modifTarif;
        return $this;
    }

    /**
     * Set the mot de passe.
     *
     * @param string|null $motDePasse The mot de passe.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setMotDePasse(?string $motDePasse): Collaborateurs {
        $this->motDePasse = $motDePasse;
        return $this;
    }

    /**
     * Set the msg redir auto.
     *
     * @param bool|null $msgRedirAuto The msg redir auto.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setMsgRedirAuto(?bool $msgRedirAuto): Collaborateurs {
        $this->msgRedirAuto = $msgRedirAuto;
        return $this;
    }

    /**
     * Set the niv conf emp proprete restreint.
     *
     * @param bool|null $nivConfEmpPropreteRestreint The niv conf emp proprete restreint.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setNivConfEmpPropreteRestreint(?bool $nivConfEmpPropreteRestreint): Collaborateurs {
        $this->nivConfEmpPropreteRestreint = $nivConfEmpPropreteRestreint;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int|null $niveau The niveau.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setNiveau(?int $niveau): Collaborateurs {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the niveau confidentialite qp.
     *
     * @param string|null $niveauConfidentialiteQp The niveau confidentialite qp.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setNiveauConfidentialiteQp(?string $niveauConfidentialiteQp): Collaborateurs {
        $this->niveauConfidentialiteQp = $niveauConfidentialiteQp;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setNom(?string $nom): Collaborateurs {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setNomVille(?string $nomVille): Collaborateurs {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setNomVoie(?string $nomVoie): Collaborateurs {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setNumVoie(?string $numVoie): Collaborateurs {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setNumero(?string $numero): Collaborateurs {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the pa invisible.
     *
     * @param bool|null $paInvisible The pa invisible.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setPaInvisible(?bool $paInvisible): Collaborateurs {
        $this->paInvisible = $paInvisible;
        return $this;
    }

    /**
     * Set the parc code remorque.
     *
     * @param string|null $parcCodeRemorque The parc code remorque.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setParcCodeRemorque(?string $parcCodeRemorque): Collaborateurs {
        $this->parcCodeRemorque = $parcCodeRemorque;
        return $this;
    }

    /**
     * Set the parc code vehicule.
     *
     * @param string|null $parcCodeVehicule The parc code vehicule.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setParcCodeVehicule(?string $parcCodeVehicule): Collaborateurs {
        $this->parcCodeVehicule = $parcCodeVehicule;
        return $this;
    }

    /**
     * Set the pas acces qws.
     *
     * @param bool|null $pasAccesQws The pas acces qws.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setPasAccesQws(?bool $pasAccesQws): Collaborateurs {
        $this->pasAccesQws = $pasAccesQws;
        return $this;
    }

    /**
     * Set the pas saisie des temps.
     *
     * @param bool|null $pasSaisieDesTemps The pas saisie des temps.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setPasSaisieDesTemps(?bool $pasSaisieDesTemps): Collaborateurs {
        $this->pasSaisieDesTemps = $pasSaisieDesTemps;
        return $this;
    }

    /**
     * Set the pas saisie des temps auto.
     *
     * @param bool|null $pasSaisieDesTempsAuto The pas saisie des temps auto.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setPasSaisieDesTempsAuto(?bool $pasSaisieDesTempsAuto): Collaborateurs {
        $this->pasSaisieDesTempsAuto = $pasSaisieDesTempsAuto;
        return $this;
    }

    /**
     * Set the portable perso.
     *
     * @param string|null $portablePerso The portable perso.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setPortablePerso(?string $portablePerso): Collaborateurs {
        $this->portablePerso = $portablePerso;
        return $this;
    }

    /**
     * Set the present.
     *
     * @param bool|null $present The present.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setPresent(?bool $present): Collaborateurs {
        $this->present = $present;
        return $this;
    }

    /**
     * Set the prevenu nouveau cd.
     *
     * @param bool|null $prevenuNouveauCd The prevenu nouveau cd.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setPrevenuNouveauCd(?bool $prevenuNouveauCd): Collaborateurs {
        $this->prevenuNouveauCd = $prevenuNouveauCd;
        return $this;
    }

    /**
     * Set the prix km.
     *
     * @param float|null $prixKm The prix km.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setPrixKm(?float $prixKm): Collaborateurs {
        $this->prixKm = $prixKm;
        return $this;
    }

    /**
     * Set the prix vente.
     *
     * @param float|null $prixVente The prix vente.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setPrixVente(?float $prixVente): Collaborateurs {
        $this->prixVente = $prixVente;
        return $this;
    }

    /**
     * Set the prix vente2.
     *
     * @param float|null $prixVente2 The prix vente2.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setPrixVente2(?float $prixVente2): Collaborateurs {
        $this->prixVente2 = $prixVente2;
        return $this;
    }

    /**
     * Set the prix vente3.
     *
     * @param float|null $prixVente3 The prix vente3.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setPrixVente3(?float $prixVente3): Collaborateurs {
        $this->prixVente3 = $prixVente3;
        return $this;
    }

    /**
     * Set the restrict acces pieces.
     *
     * @param bool|null $restrictAccesPieces The restrict acces pieces.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setRestrictAccesPieces(?bool $restrictAccesPieces): Collaborateurs {
        $this->restrictAccesPieces = $restrictAccesPieces;
        return $this;
    }

    /**
     * Set the restrict acces stats.
     *
     * @param bool|null $restrictAccesStats The restrict acces stats.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setRestrictAccesStats(?bool $restrictAccesStats): Collaborateurs {
        $this->restrictAccesStats = $restrictAccesStats;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setRib(?string $rib): Collaborateurs {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the saisie pv interdite.
     *
     * @param bool|null $saisiePvInterdite The saisie pv interdite.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSaisiePvInterdite(?bool $saisiePvInterdite): Collaborateurs {
        $this->saisiePvInterdite = $saisiePvInterdite;
        return $this;
    }

    /**
     * Set the salaire mensuel.
     *
     * @param float|null $salaireMensuel The salaire mensuel.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSalaireMensuel(?float $salaireMensuel): Collaborateurs {
        $this->salaireMensuel = $salaireMensuel;
        return $this;
    }

    /**
     * Set the sel art collab.
     *
     * @param bool|null $selArtCollab The sel art collab.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSelArtCollab(?bool $selArtCollab): Collaborateurs {
        $this->selArtCollab = $selArtCollab;
        return $this;
    }

    /**
     * Set the sel av lst perso acces gestion modifiables.
     *
     * @param bool|null $selAvLstPersoAccesGestionModifiables The sel av lst perso acces gestion modifiables.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSelAvLstPersoAccesGestionModifiables(?bool $selAvLstPersoAccesGestionModifiables): Collaborateurs {
        $this->selAvLstPersoAccesGestionModifiables = $selAvLstPersoAccesGestionModifiables;
        return $this;
    }

    /**
     * Set the sel av lst perso acces gestionnaire.
     *
     * @param bool|null $selAvLstPersoAccesGestionnaire The sel av lst perso acces gestionnaire.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSelAvLstPersoAccesGestionnaire(?bool $selAvLstPersoAccesGestionnaire): Collaborateurs {
        $this->selAvLstPersoAccesGestionnaire = $selAvLstPersoAccesGestionnaire;
        return $this;
    }

    /**
     * Set the sel av lst perso champs modif.
     *
     * @param bool|null $selAvLstPersoChampsModif The sel av lst perso champs modif.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSelAvLstPersoChampsModif(?bool $selAvLstPersoChampsModif): Collaborateurs {
        $this->selAvLstPersoChampsModif = $selAvLstPersoChampsModif;
        return $this;
    }

    /**
     * Set the sel av lst perso copie colonne.
     *
     * @param bool|null $selAvLstPersoCopieColonne The sel av lst perso copie colonne.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSelAvLstPersoCopieColonne(?bool $selAvLstPersoCopieColonne): Collaborateurs {
        $this->selAvLstPersoCopieColonne = $selAvLstPersoCopieColonne;
        return $this;
    }

    /**
     * Set the sel av lst perso interdire creat.
     *
     * @param bool|null $selAvLstPersoInterdireCreat The sel av lst perso interdire creat.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSelAvLstPersoInterdireCreat(?bool $selAvLstPersoInterdireCreat): Collaborateurs {
        $this->selAvLstPersoInterdireCreat = $selAvLstPersoInterdireCreat;
        return $this;
    }

    /**
     * Set the sel cli collab.
     *
     * @param bool|null $selCliCollab The sel cli collab.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSelCliCollab(?bool $selCliCollab): Collaborateurs {
        $this->selCliCollab = $selCliCollab;
        return $this;
    }

    /**
     * Set the sel frn collab.
     *
     * @param bool|null $selFrnCollab The sel frn collab.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSelFrnCollab(?bool $selFrnCollab): Collaborateurs {
        $this->selFrnCollab = $selFrnCollab;
        return $this;
    }

    /**
     * Set the selection article.
     *
     * @param string|null $selectionArticle The selection article.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSelectionArticle(?string $selectionArticle): Collaborateurs {
        $this->selectionArticle = $selectionArticle;
        return $this;
    }

    /**
     * Set the selection client.
     *
     * @param string|null $selectionClient The selection client.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSelectionClient(?string $selectionClient): Collaborateurs {
        $this->selectionClient = $selectionClient;
        return $this;
    }

    /**
     * Set the selection fournisseur.
     *
     * @param string|null $selectionFournisseur The selection fournisseur.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSelectionFournisseur(?string $selectionFournisseur): Collaborateurs {
        $this->selectionFournisseur = $selectionFournisseur;
        return $this;
    }

    /**
     * Set the suivi messages.
     *
     * @param bool|null $suiviMessages The suivi messages.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSuiviMessages(?bool $suiviMessages): Collaborateurs {
        $this->suiviMessages = $suiviMessages;
        return $this;
    }

    /**
     * Set the superviseur.
     *
     * @param bool|null $superviseur The superviseur.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSuperviseur(?bool $superviseur): Collaborateurs {
        $this->superviseur = $superviseur;
        return $this;
    }

    /**
     * Set the sync mso.
     *
     * @param bool|null $syncMso The sync mso.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setSyncMso(?bool $syncMso): Collaborateurs {
        $this->syncMso = $syncMso;
        return $this;
    }

    /**
     * Set the taches groupe.
     *
     * @param string|null $tachesGroupe The taches groupe.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTachesGroupe(?string $tachesGroupe): Collaborateurs {
        $this->tachesGroupe = $tachesGroupe;
        return $this;
    }

    /**
     * Set the taux commission.
     *
     * @param float|null $tauxCommission The taux commission.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTauxCommission(?float $tauxCommission): Collaborateurs {
        $this->tauxCommission = $tauxCommission;
        return $this;
    }

    /**
     * Set the tel direct.
     *
     * @param string|null $telDirect The tel direct.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTelDirect(?string $telDirect): Collaborateurs {
        $this->telDirect = $telDirect;
        return $this;
    }

    /**
     * Set the tel perso.
     *
     * @param string|null $telPerso The tel perso.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTelPerso(?string $telPerso): Collaborateurs {
        $this->telPerso = $telPerso;
        return $this;
    }

    /**
     * Set the tel portable1.
     *
     * @param string|null $telPortable1 The tel portable1.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTelPortable1(?string $telPortable1): Collaborateurs {
        $this->telPortable1 = $telPortable1;
        return $this;
    }

    /**
     * Set the tel portable2.
     *
     * @param string|null $telPortable2 The tel portable2.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTelPortable2(?string $telPortable2): Collaborateurs {
        $this->telPortable2 = $telPortable2;
        return $this;
    }

    /**
     * Set the tel poste.
     *
     * @param string|null $telPoste The tel poste.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTelPoste(?string $telPoste): Collaborateurs {
        $this->telPoste = $telPoste;
        return $this;
    }

    /**
     * Set the tp pas controler.
     *
     * @param bool|null $tpPasControler The tp pas controler.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTpPasControler(?bool $tpPasControler): Collaborateurs {
        $this->tpPasControler = $tpPasControler;
        return $this;
    }

    /**
     * Set the tp pas journal temps.
     *
     * @param bool|null $tpPasJournalTemps The tp pas journal temps.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTpPasJournalTemps(?bool $tpPasJournalTemps): Collaborateurs {
        $this->tpPasJournalTemps = $tpPasJournalTemps;
        return $this;
    }

    /**
     * Set the tp pas notes de frais.
     *
     * @param bool|null $tpPasNotesDeFrais The tp pas notes de frais.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTpPasNotesDeFrais(?bool $tpPasNotesDeFrais): Collaborateurs {
        $this->tpPasNotesDeFrais = $tpPasNotesDeFrais;
        return $this;
    }

    /**
     * Set the tp pas tps valide.
     *
     * @param bool|null $tpPasTpsValide The tp pas tps valide.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTpPasTpsValide(?bool $tpPasTpsValide): Collaborateurs {
        $this->tpPasTpsValide = $tpPasTpsValide;
        return $this;
    }

    /**
     * Set the tp pourcentage non operationnel.
     *
     * @param float|null $tpPourcentageNonOperationnel The tp pourcentage non operationnel.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTpPourcentageNonOperationnel(?float $tpPourcentageNonOperationnel): Collaborateurs {
        $this->tpPourcentageNonOperationnel = $tpPourcentageNonOperationnel;
        return $this;
    }

    /**
     * Set the tps niveau blocage.
     *
     * @param string|null $tpsNiveauBlocage The tps niveau blocage.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTpsNiveauBlocage(?string $tpsNiveauBlocage): Collaborateurs {
        $this->tpsNiveauBlocage = $tpsNiveauBlocage;
        return $this;
    }

    /**
     * Set the tx com invisible.
     *
     * @param bool|null $txComInvisible The tx com invisible.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTxComInvisible(?bool $txComInvisible): Collaborateurs {
        $this->txComInvisible = $txComInvisible;
        return $this;
    }

    /**
     * Set the type conf2 cmav cli.
     *
     * @param string|null $typeConf2CmavCli The type conf2 cmav cli.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTypeConf2CmavCli(?string $typeConf2CmavCli): Collaborateurs {
        $this->typeConf2CmavCli = $typeConf2CmavCli;
        return $this;
    }

    /**
     * Set the type conf cmav cli.
     *
     * @param string|null $typeConfCmavCli The type conf cmav cli.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTypeConfCmavCli(?string $typeConfCmavCli): Collaborateurs {
        $this->typeConfCmavCli = $typeConfCmavCli;
        return $this;
    }

    /**
     * Set the type visu appels.
     *
     * @param string|null $typeVisuAppels The type visu appels.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTypeVisuAppels(?string $typeVisuAppels): Collaborateurs {
        $this->typeVisuAppels = $typeVisuAppels;
        return $this;
    }

    /**
     * Set the type visu taches.
     *
     * @param string|null $typeVisuTaches The type visu taches.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setTypeVisuTaches(?string $typeVisuTaches): Collaborateurs {
        $this->typeVisuTaches = $typeVisuTaches;
        return $this;
    }

    /**
     * Set the use mail generic.
     *
     * @param bool|null $useMailGeneric The use mail generic.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setUseMailGeneric(?bool $useMailGeneric): Collaborateurs {
        $this->useMailGeneric = $useMailGeneric;
        return $this;
    }

    /**
     * Set the visualisation fiche cabinet.
     *
     * @param bool|null $visualisationFicheCabinet The visualisation fiche cabinet.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setVisualisationFicheCabinet(?bool $visualisationFicheCabinet): Collaborateurs {
        $this->visualisationFicheCabinet = $visualisationFicheCabinet;
        return $this;
    }

    /**
     * Set the vue com droit reaffect.
     *
     * @param bool|null $vueComDroitReaffect The vue com droit reaffect.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setVueComDroitReaffect(?bool $vueComDroitReaffect): Collaborateurs {
        $this->vueComDroitReaffect = $vueComDroitReaffect;
        return $this;
    }

    /**
     * Set the vue devis droit reaffect.
     *
     * @param bool|null $vueDevisDroitReaffect The vue devis droit reaffect.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setVueDevisDroitReaffect(?bool $vueDevisDroitReaffect): Collaborateurs {
        $this->vueDevisDroitReaffect = $vueDevisDroitReaffect;
        return $this;
    }

    /**
     * Set the vue devis droit suppr.
     *
     * @param bool|null $vueDevisDroitSuppr The vue devis droit suppr.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setVueDevisDroitSuppr(?bool $vueDevisDroitSuppr): Collaborateurs {
        $this->vueDevisDroitSuppr = $vueDevisDroitSuppr;
        return $this;
    }

    /**
     * Set the vue devis droit valid.
     *
     * @param bool|null $vueDevisDroitValid The vue devis droit valid.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setVueDevisDroitValid(?bool $vueDevisDroitValid): Collaborateurs {
        $this->vueDevisDroitValid = $vueDevisDroitValid;
        return $this;
    }

    /**
     * Set the ya droits collab.
     *
     * @param bool|null $yaDroitsCollab The ya droits collab.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function setYaDroitsCollab(?bool $yaDroitsCollab): Collaborateurs {
        $this->yaDroitsCollab = $yaDroitsCollab;
        return $this;
    }

    /**
     * Set the e ws mdp.
     *
     * @param string|null $eWsMdp The e ws mdp.
     * @return Collaborateurs Returns this Collaborateurs.
     */
    public function seteWsMdp(?string $eWsMdp): Collaborateurs {
        $this->eWsMdp = $eWsMdp;
        return $this;
    }
}
