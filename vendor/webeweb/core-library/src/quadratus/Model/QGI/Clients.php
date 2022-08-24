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
 * Clients.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Clients {

    /**
     * Actif.
     *
     * @var bool|null
     */
    private $actif;

    /**
     * Activite nouvelle.
     *
     * @var bool|null
     */
    private $activiteNouvelle;

    /**
     * Activite saiso.
     *
     * @var bool|null
     */
    private $activiteSaiso;

    /**
     * Adresse site client.
     *
     * @var string|null
     */
    private $adresseSiteClient;

    /**
     * Article port1.
     *
     * @var string|null
     */
    private $articlePort1;

    /**
     * Article port2.
     *
     * @var string|null
     */
    private $articlePort2;

    /**
     * Assurance.
     *
     * @var bool|null
     */
    private $assurance;

    /**
     * Bibliotheque novaxel.
     *
     * @var string|null
     */
    private $bibliothequeNovaxel;

    /**
     * Bl chiffre.
     *
     * @var bool|null
     */
    private $blChiffre;

    /**
     * Bloque.
     *
     * @var bool|null
     */
    private $bloque;

    /**
     * Cde auto manu.
     *
     * @var string|null
     */
    private $cdeAutoManu;

    /**
     * Cga.
     *
     * @var bool|null
     */
    private $cga;

    /**
     * Charges.
     *
     * @var string|null
     */
    private $charges;

    /**
     * Chiffre affaire.
     *
     * @var float|null
     */
    private $chiffreAffaire;

    /**
     * Cle alpha.
     *
     * @var string|null
     */
    private $cleAlpha;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code activite.
     *
     * @var string|null
     */
    private $codeActivite;

    /**
     * Code agence.
     *
     * @var string|null
     */
    private $codeAgence;

    /**
     * Code article cotisation.
     *
     * @var string|null
     */
    private $codeArticleCotisation;

    /**
     * Code article droit fixe.
     *
     * @var string|null
     */
    private $codeArticleDroitFixe;

    /**
     * Code article frais fixe.
     *
     * @var string|null
     */
    private $codeArticleFraisFixe;

    /**
     * Code assistant juridique.
     *
     * @var string|null
     */
    private $codeAssistantJuridique;

    /**
     * Code assistant social.
     *
     * @var string|null
     */
    private $codeAssistantSocial;

    /**
     * Code autre1.
     *
     * @var string|null
     */
    private $codeAutre1;

    /**
     * Code autre2.
     *
     * @var string|null
     */
    private $codeAutre2;

    /**
     * Code avocat.
     *
     * @var string|null
     */
    private $codeAvocat;

    /**
     * Code barre.
     *
     * @var bool|null
     */
    private $codeBarre;

    /**
     * Code categorie client.
     *
     * @var string|null
     */
    private $codeCategorieClient;

    /**
     * Code client fact.
     *
     * @var string|null
     */
    private $codeClientFact;

    /**
     * Code client livr.
     *
     * @var string|null
     */
    private $codeClientLivr;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code depot.
     *
     * @var string|null
     */
    private $codeDepot;

    /**
     * Code devise.
     *
     * @var string|null
     */
    private $codeDevise;

    /**
     * Code edition fact.
     *
     * @var string|null
     */
    private $codeEditionFact;

    /**
     * Code exc.
     *
     * @var string|null
     */
    private $codeExc;

    /**
     * Code expert.
     *
     * @var string|null
     */
    private $codeExpert;

    /**
     * Code factor.
     *
     * @var string|null
     */
    private $codeFactor;

    /**
     * Code famille.
     *
     * @var string|null
     */
    private $codeFamille;

    /**
     * Code geo.
     *
     * @var string|null
     */
    private $codeGeo;

    /**
     * Code imputation analytique.
     *
     * @var string|null
     */
    private $codeImputationAnalytique;

    /**
     * Code langue designation article.
     *
     * @var string|null
     */
    private $codeLangueDesignationArticle;

    /**
     * Code mission frais fixe.
     *
     * @var string|null
     */
    private $codeMissionFraisFixe;

    /**
     * Code origine.
     *
     * @var string|null
     */
    private $codeOrigine;

    /**
     * Code pays corres.
     *
     * @var string|null
     */
    private $codePaysCorres;

    /**
     * Code pays fact.
     *
     * @var string|null
     */
    private $codePaysFact;

    /**
     * Code portefeuille.
     *
     * @var string|null
     */
    private $codePortefeuille;

    /**
     * Code recette impots.
     *
     * @var string|null
     */
    private $codeRecetteImpots;

    /**
     * Code reglement.
     *
     * @var string|null
     */
    private $codeReglement;

    /**
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Code representant.
     *
     * @var string|null
     */
    private $codeRepresentant;

    /**
     * Code revision.
     *
     * @var string|null
     */
    private $codeRevision;

    /**
     * Code sous famille.
     *
     * @var string|null
     */
    private $codeSousFamille;

    /**
     * Code sous tournee.
     *
     * @var string|null
     */
    private $codeSousTournee;

    /**
     * Code tarif.
     *
     * @var string|null
     */
    private $codeTarif;

    /**
     * Code tournee.
     *
     * @var string|null
     */
    private $codeTournee;

    /**
     * Code transporteur.
     *
     * @var string|null
     */
    private $codeTransporteur;

    /**
     * Code tva.
     *
     * @var string|null
     */
    private $codeTva;

    /**
     * Code ventil compta.
     *
     * @var string|null
     */
    private $codeVentilCompta;

    /**
     * Coef sur pv.
     *
     * @var float|null
     */
    private $coefSurPv;

    /**
     * Coeff pv client.
     *
     * @var float|null
     */
    private $coeffPvClient;

    /**
     * Collectif.
     *
     * @var string|null
     */
    private $collectif;

    /**
     * Conjoint.
     *
     * @var string|null
     */
    private $conjoint;

    /**
     * Contact recette impots.
     *
     * @var string|null
     */
    private $contactRecetteImpots;

    /**
     * Date attrib encours.
     *
     * @var DateTime|null
     */
    private $dateAttribEncours;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date deb activite.
     *
     * @var DateTime|null
     */
    private $dateDebActivite;

    /**
     * Date deb prof.
     *
     * @var DateTime|null
     */
    private $dateDebProf;

    /**
     * Date derniere vente.
     *
     * @var DateTime|null
     */
    private $dateDerniereVente;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date fin activite.
     *
     * @var DateTime|null
     */
    private $dateFinActivite;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date reprise.
     *
     * @var DateTime|null
     */
    private $dateReprise;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Delai tarif.
     *
     * @var int|null
     */
    private $delaiTarif;

    /**
     * Domiciliation bancaire1.
     *
     * @var string|null
     */
    private $domiciliationBancaire1;

    /**
     * Domiciliation bancaire2.
     *
     * @var string|null
     */
    private $domiciliationBancaire2;

    /**
     * Dossier comptable.
     *
     * @var string|null
     */
    private $dossierComptable;

    /**
     * Dossier paie.
     *
     * @var string|null
     */
    private $dossierPaie;

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
     * Du client.
     *
     * @var string|null
     */
    private $duClient;

    /**
     * Duree echeances.
     *
     * @var string|null
     */
    private $dureeEcheances;

    /**
     * Effectif etp.
     *
     * @var int|null
     */
    private $effectifEtp;

    /**
     * Election ce.
     *
     * @var DateTime|null
     */
    private $electionCe;

    /**
     * Election delegue personnel.
     *
     * @var DateTime|null
     */
    private $electionDeleguePersonnel;

    /**
     * Equip info.
     *
     * @var string|null
     */
    private $equipInfo;

    /**
     * Etat1.
     *
     * @var string|null
     */
    private $etat1;

    /**
     * Etat2.
     *
     * @var string|null
     */
    private $etat2;

    /**
     * Etat3.
     *
     * @var string|null
     */
    private $etat3;

    /**
     * Etat4.
     *
     * @var string|null
     */
    private $etat4;

    /**
     * Etat5.
     *
     * @var string|null
     */
    private $etat5;

    /**
     * Etiquettes.
     *
     * @var bool|null
     */
    private $etiquettes;

    /**
     * Fact btq.
     *
     * @var string|null
     */
    private $factBtq;

    /**
     * Fact bureau distributeur.
     *
     * @var string|null
     */
    private $factBureauDistributeur;

    /**
     * Fact code officiel commune.
     *
     * @var string|null
     */
    private $factCodeOfficielCommune;

    /**
     * Fact code postal.
     *
     * @var string|null
     */
    private $factCodePostal;

    /**
     * Fact complement.
     *
     * @var string|null
     */
    private $factComplement;

    /**
     * Fact nom rs.
     *
     * @var string|null
     */
    private $factNomRs;

    /**
     * Fact nom ville.
     *
     * @var string|null
     */
    private $factNomVille;

    /**
     * Fact nom voie.
     *
     * @var string|null
     */
    private $factNomVoie;

    /**
     * Fact num voie.
     *
     * @var string|null
     */
    private $factNumVoie;

    /**
     * Facturation compta.
     *
     * @var DateTime|null
     */
    private $facturationCompta;

    /**
     * Facturation compta prec.
     *
     * @var DateTime|null
     */
    private $facturationComptaPrec;

    /**
     * Facturation cotisation.
     *
     * @var bool|null
     */
    private $facturationCotisation;

    /**
     * Facturation droit fixe.
     *
     * @var bool|null
     */
    private $facturationDroitFixe;

    /**
     * Facturation frais fixe.
     *
     * @var bool|null
     */
    private $facturationFraisFixe;

    /**
     * Facturation paie.
     *
     * @var DateTime|null
     */
    private $facturationPaie;

    /**
     * Facturation paie prec.
     *
     * @var DateTime|null
     */
    private $facturationPaiePrec;

    /**
     * Facture euros.
     *
     * @var bool|null
     */
    private $factureEuros;

    /**
     * Facture isolee.
     *
     * @var bool|null
     */
    private $factureIsolee;

    /**
     * Facture temps passes.
     *
     * @var bool|null
     */
    private $factureTempsPasses;

    /**
     * Factures mail.
     *
     * @var bool|null
     */
    private $facturesMail;

    /**
     * Fortement impose.
     *
     * @var string|null
     */
    private $fortementImpose;

    /**
     * Frais fixes1.
     *
     * @var bool|null
     */
    private $fraisFixes1;

    /**
     * Frais fixes2.
     *
     * @var bool|null
     */
    private $fraisFixes2;

    /**
     * Franco port1.
     *
     * @var float|null
     */
    private $francoPort1;

    /**
     * Franco port2.
     *
     * @var float|null
     */
    private $francoPort2;

    /**
     * Heure appel.
     *
     * @var string|null
     */
    private $heureAppel;

    /**
     * Identifiant tva.
     *
     * @var string|null
     */
    private $identifiantTva;

    /**
     * Indice factures mail.
     *
     * @var int|null
     */
    private $indiceFacturesMail;

    /**
     * Insp.
     *
     * @var string|null
     */
    private $insp;

    /**
     * Interesse gestion.
     *
     * @var string|null
     */
    private $interesseGestion;

    /**
     * Mensualisation actif.
     *
     * @var bool|null
     */
    private $mensualisationActif;

    /**
     * Mensualisation au.
     *
     * @var DateTime|null
     */
    private $mensualisationAu;

    /**
     * Mensualisation du.
     *
     * @var DateTime|null
     */
    private $mensualisationDu;

    /**
     * Mensualisation frequence.
     *
     * @var string|null
     */
    private $mensualisationFrequence;

    /**
     * Mensualisation montant.
     *
     * @var float|null
     */
    private $mensualisationMontant;

    /**
     * Mission sur dossier.
     *
     * @var int|null
     */
    private $missionSurDossier;

    /**
     * Modele bl.
     *
     * @var string|null
     */
    private $modeleBl;

    /**
     * Modele commande.
     *
     * @var string|null
     */
    private $modeleCommande;

    /**
     * Modele facture.
     *
     * @var string|null
     */
    private $modeleFacture;

    /**
     * Modele proformas.
     *
     * @var string|null
     */
    private $modeleProformas;

    /**
     * Modele releve.
     *
     * @var string|null
     */
    private $modeleReleve;

    /**
     * Mois cloture.
     *
     * @var string|null
     */
    private $moisCloture;

    /**
     * Mois cotisation.
     *
     * @var int|null
     */
    private $moisCotisation;

    /**
     * Mois droit fixe.
     *
     * @var int|null
     */
    private $moisDroitFixe;

    /**
     * Mt cmd non fact.
     *
     * @var float|null
     */
    private $mtCmdNonFact;

    /**
     * Mt encours.
     *
     * @var float|null
     */
    private $mtEncours;

    /**
     * Mt encours autorise.
     *
     * @var float|null
     */
    private $mtEncoursAutorise;

    /**
     * Nb appels en cours.
     *
     * @var int|null
     */
    private $nbAppelsEnCours;

    /**
     * Nb bl.
     *
     * @var string|null
     */
    private $nbBl;

    /**
     * Nb bl non chiffres.
     *
     * @var int|null
     */
    private $nbBlNonChiffres;

    /**
     * Nb commande.
     *
     * @var string|null
     */
    private $nbCommande;

    /**
     * Nb devis.
     *
     * @var string|null
     */
    private $nbDevis;

    /**
     * Nb facture.
     *
     * @var string|null
     */
    private $nbFacture;

    /**
     * Nb jour interval.
     *
     * @var int|null
     */
    private $nbJourInterval;

    /**
     * Nb max bl.
     *
     * @var string|null
     */
    private $nbMaxBl;

    /**
     * Nb releve.
     *
     * @var string|null
     */
    private $nbReleve;

    /**
     * Nombre echeances.
     *
     * @var string|null
     */
    private $nombreEcheances;

    /**
     * Nombre mois exercice.
     *
     * @var string|null
     */
    private $nombreMoisExercice;

    /**
     * Notoriete.
     *
     * @var string|null
     */
    private $notoriete;

    /**
     * Num web adherent.
     *
     * @var string|null
     */
    private $numWebAdherent;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Observation1.
     *
     * @var string|null
     */
    private $observation1;

    /**
     * Observation2.
     *
     * @var string|null
     */
    private $observation2;

    /**
     * Observation3.
     *
     * @var string|null
     */
    private $observation3;

    /**
     * Occasionnel.
     *
     * @var bool|null
     */
    private $occasionnel;

    /**
     * Organisation adm.
     *
     * @var string|null
     */
    private $organisationAdm;

    /**
     * Paiement depart le.
     *
     * @var int|null
     */
    private $paiementDepartLe;

    /**
     * Paiement le.
     *
     * @var string|null
     */
    private $paiementLe;

    /**
     * Paiement nombre de jours.
     *
     * @var int|null
     */
    private $paiementNombreDeJours;

    /**
     * Pas productif.
     *
     * @var bool|null
     */
    private $pasProductif;

    /**
     * Pas taches operationnelles.
     *
     * @var bool|null
     */
    private $pasTachesOperationnelles;

    /**
     * Patrimoine.
     *
     * @var string|null
     */
    private $patrimoine;

    /**
     * Prelevements perso.
     *
     * @var string|null
     */
    private $prelevementsPerso;

    /**
     * Prescripteur.
     *
     * @var string|null
     */
    private $prescripteur;

    /**
     * Previsionnel.
     *
     * @var string|null
     */
    private $previsionnel;

    /**
     * Prioritaire.
     *
     * @var bool|null
     */
    private $prioritaire;

    /**
     * Profil dir anxieux.
     *
     * @var bool|null
     */
    private $profilDirAnxieux;

    /**
     * Profil dir commercial.
     *
     * @var bool|null
     */
    private $profilDirCommercial;

    /**
     * Profil dir gestionnaire.
     *
     * @var bool|null
     */
    private $profilDirGestionnaire;

    /**
     * Profil dir somnolent.
     *
     * @var bool|null
     */
    private $profilDirSomnolent;

    /**
     * Profil dir technicien.
     *
     * @var bool|null
     */
    private $profilDirTechnicien;

    /**
     * Profil ent.
     *
     * @var string|null
     */
    private $profilEnt;

    /**
     * Prospect.
     *
     * @var bool|null
     */
    private $prospect;

    /**
     * Qualite paiement.
     *
     * @var string|null
     */
    private $qualitePaiement;

    /**
     * Raison fin activite.
     *
     * @var string|null
     */
    private $raisonFinActivite;

    /**
     * Raison mv paiement.
     *
     * @var string|null
     */
    private $raisonMvPaiement;

    /**
     * Regime.
     *
     * @var string|null
     */
    private $regime;

    /**
     * Regroupement fact.
     *
     * @var string|null
     */
    private $regroupementFact;

    /**
     * Relation cabinet.
     *
     * @var string|null
     */
    private $relationCabinet;

    /**
     * Releve facture.
     *
     * @var bool|null
     */
    private $releveFacture;

    /**
     * Remise ligne1.
     *
     * @var float|null
     */
    private $remiseLigne1;

    /**
     * Remise ligne2.
     *
     * @var float|null
     */
    private $remiseLigne2;

    /**
     * Remise ligne3.
     *
     * @var float|null
     */
    private $remiseLigne3;

    /**
     * Remise pied.
     *
     * @var float|null
     */
    private $remisePied;

    /**
     * Remise pied2.
     *
     * @var float|null
     */
    private $remisePied2;

    /**
     * Remise pied3.
     *
     * @var float|null
     */
    private $remisePied3;

    /**
     * Resultat.
     *
     * @var float|null
     */
    private $resultat;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Sante financiere.
     *
     * @var string|null
     */
    private $santeFinanciere;

    /**
     * Service cpta.
     *
     * @var bool|null
     */
    private $serviceCpta;

    /**
     * Siege groupe.
     *
     * @var bool|null
     */
    private $siegeGroupe;

    /**
     * Social.
     *
     * @var bool|null
     */
    private $social;

    /**
     * Social btq.
     *
     * @var string|null
     */
    private $socialBtq;

    /**
     * Social bureau distributeur.
     *
     * @var string|null
     */
    private $socialBureauDistributeur;

    /**
     * Social code officiel commune.
     *
     * @var string|null
     */
    private $socialCodeOfficielCommune;

    /**
     * Social code postal.
     *
     * @var string|null
     */
    private $socialCodePostal;

    /**
     * Social complement.
     *
     * @var string|null
     */
    private $socialComplement;

    /**
     * Social nom rs.
     *
     * @var string|null
     */
    private $socialNomRs;

    /**
     * Social nom ville.
     *
     * @var string|null
     */
    private $socialNomVille;

    /**
     * Social nom voie.
     *
     * @var string|null
     */
    private $socialNomVoie;

    /**
     * Social num voie.
     *
     * @var string|null
     */
    private $socialNumVoie;

    /**
     * Soumis escompte.
     *
     * @var bool|null
     */
    private $soumisEscompte;

    /**
     * Soumis port1.
     *
     * @var string|null
     */
    private $soumisPort1;

    /**
     * Soumis port2.
     *
     * @var string|null
     */
    private $soumisPort2;

    /**
     * Soumis taxe1.
     *
     * @var bool|null
     */
    private $soumisTaxe1;

    /**
     * Soumis taxe2.
     *
     * @var bool|null
     */
    private $soumisTaxe2;

    /**
     * Soumis taxe3.
     *
     * @var bool|null
     */
    private $soumisTaxe3;

    /**
     * Soumis taxe4.
     *
     * @var bool|null
     */
    private $soumisTaxe4;

    /**
     * Soumis taxe5.
     *
     * @var bool|null
     */
    private $soumisTaxe5;

    /**
     * Soumis tva.
     *
     * @var bool|null
     */
    private $soumisTva;

    /**
     * Tableau de bord.
     *
     * @var string|null
     */
    private $tableauDeBord;

    /**
     * Toutes activites.
     *
     * @var string|null
     */
    private $toutesActivites;

    /**
     * Transporteur.
     *
     * @var string|null
     */
    private $transporteur;

    /**
     * Tresorerie.
     *
     * @var string|null
     */
    private $tresorerie;

    /**
     * Tva regime.
     *
     * @var string|null
     */
    private $tvaRegime;

    /**
     * Tx escompte vente.
     *
     * @var float|null
     */
    private $txEscompteVente;

    /**
     * Type client.
     *
     * @var string|null
     */
    private $typeClient;

    /**
     * Type edit bl.
     *
     * @var string|null
     */
    private $typeEditBl;

    /**
     * Type facture.
     *
     * @var int|null
     */
    private $typeFacture;

    /**
     * Type gestion etebac.
     *
     * @var string|null
     */
    private $typeGestionEtebac;

    /**
     * Use adresse fact.
     *
     * @var bool|null
     */
    private $useAdresseFact;

    /**
     * Use corres sociale.
     *
     * @var bool|null
     */
    private $useCorresSociale;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the actif.
     *
     * @return bool|null Returns the actif.
     */
    public function getActif(): ?bool {
        return $this->actif;
    }

    /**
     * Get the activite nouvelle.
     *
     * @return bool|null Returns the activite nouvelle.
     */
    public function getActiviteNouvelle(): ?bool {
        return $this->activiteNouvelle;
    }

    /**
     * Get the activite saiso.
     *
     * @return bool|null Returns the activite saiso.
     */
    public function getActiviteSaiso(): ?bool {
        return $this->activiteSaiso;
    }

    /**
     * Get the adresse site client.
     *
     * @return string|null Returns the adresse site client.
     */
    public function getAdresseSiteClient(): ?string {
        return $this->adresseSiteClient;
    }

    /**
     * Get the article port1.
     *
     * @return string|null Returns the article port1.
     */
    public function getArticlePort1(): ?string {
        return $this->articlePort1;
    }

    /**
     * Get the article port2.
     *
     * @return string|null Returns the article port2.
     */
    public function getArticlePort2(): ?string {
        return $this->articlePort2;
    }

    /**
     * Get the assurance.
     *
     * @return bool|null Returns the assurance.
     */
    public function getAssurance(): ?bool {
        return $this->assurance;
    }

    /**
     * Get the bibliotheque novaxel.
     *
     * @return string|null Returns the bibliotheque novaxel.
     */
    public function getBibliothequeNovaxel(): ?string {
        return $this->bibliothequeNovaxel;
    }

    /**
     * Get the bl chiffre.
     *
     * @return bool|null Returns the bl chiffre.
     */
    public function getBlChiffre(): ?bool {
        return $this->blChiffre;
    }

    /**
     * Get the bloque.
     *
     * @return bool|null Returns the bloque.
     */
    public function getBloque(): ?bool {
        return $this->bloque;
    }

    /**
     * Get the cde auto manu.
     *
     * @return string|null Returns the cde auto manu.
     */
    public function getCdeAutoManu(): ?string {
        return $this->cdeAutoManu;
    }

    /**
     * Get the cga.
     *
     * @return bool|null Returns the cga.
     */
    public function getCga(): ?bool {
        return $this->cga;
    }

    /**
     * Get the charges.
     *
     * @return string|null Returns the charges.
     */
    public function getCharges(): ?string {
        return $this->charges;
    }

    /**
     * Get the chiffre affaire.
     *
     * @return float|null Returns the chiffre affaire.
     */
    public function getChiffreAffaire(): ?float {
        return $this->chiffreAffaire;
    }

    /**
     * Get the cle alpha.
     *
     * @return string|null Returns the cle alpha.
     */
    public function getCleAlpha(): ?string {
        return $this->cleAlpha;
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
     * Get the code activite.
     *
     * @return string|null Returns the code activite.
     */
    public function getCodeActivite(): ?string {
        return $this->codeActivite;
    }

    /**
     * Get the code agence.
     *
     * @return string|null Returns the code agence.
     */
    public function getCodeAgence(): ?string {
        return $this->codeAgence;
    }

    /**
     * Get the code article cotisation.
     *
     * @return string|null Returns the code article cotisation.
     */
    public function getCodeArticleCotisation(): ?string {
        return $this->codeArticleCotisation;
    }

    /**
     * Get the code article droit fixe.
     *
     * @return string|null Returns the code article droit fixe.
     */
    public function getCodeArticleDroitFixe(): ?string {
        return $this->codeArticleDroitFixe;
    }

    /**
     * Get the code article frais fixe.
     *
     * @return string|null Returns the code article frais fixe.
     */
    public function getCodeArticleFraisFixe(): ?string {
        return $this->codeArticleFraisFixe;
    }

    /**
     * Get the code assistant juridique.
     *
     * @return string|null Returns the code assistant juridique.
     */
    public function getCodeAssistantJuridique(): ?string {
        return $this->codeAssistantJuridique;
    }

    /**
     * Get the code assistant social.
     *
     * @return string|null Returns the code assistant social.
     */
    public function getCodeAssistantSocial(): ?string {
        return $this->codeAssistantSocial;
    }

    /**
     * Get the code autre1.
     *
     * @return string|null Returns the code autre1.
     */
    public function getCodeAutre1(): ?string {
        return $this->codeAutre1;
    }

    /**
     * Get the code autre2.
     *
     * @return string|null Returns the code autre2.
     */
    public function getCodeAutre2(): ?string {
        return $this->codeAutre2;
    }

    /**
     * Get the code avocat.
     *
     * @return string|null Returns the code avocat.
     */
    public function getCodeAvocat(): ?string {
        return $this->codeAvocat;
    }

    /**
     * Get the code barre.
     *
     * @return bool|null Returns the code barre.
     */
    public function getCodeBarre(): ?bool {
        return $this->codeBarre;
    }

    /**
     * Get the code categorie client.
     *
     * @return string|null Returns the code categorie client.
     */
    public function getCodeCategorieClient(): ?string {
        return $this->codeCategorieClient;
    }

    /**
     * Get the code client fact.
     *
     * @return string|null Returns the code client fact.
     */
    public function getCodeClientFact(): ?string {
        return $this->codeClientFact;
    }

    /**
     * Get the code client livr.
     *
     * @return string|null Returns the code client livr.
     */
    public function getCodeClientLivr(): ?string {
        return $this->codeClientLivr;
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
     * Get the code depot.
     *
     * @return string|null Returns the code depot.
     */
    public function getCodeDepot(): ?string {
        return $this->codeDepot;
    }

    /**
     * Get the code devise.
     *
     * @return string|null Returns the code devise.
     */
    public function getCodeDevise(): ?string {
        return $this->codeDevise;
    }

    /**
     * Get the code edition fact.
     *
     * @return string|null Returns the code edition fact.
     */
    public function getCodeEditionFact(): ?string {
        return $this->codeEditionFact;
    }

    /**
     * Get the code exc.
     *
     * @return string|null Returns the code exc.
     */
    public function getCodeExc(): ?string {
        return $this->codeExc;
    }

    /**
     * Get the code expert.
     *
     * @return string|null Returns the code expert.
     */
    public function getCodeExpert(): ?string {
        return $this->codeExpert;
    }

    /**
     * Get the code factor.
     *
     * @return string|null Returns the code factor.
     */
    public function getCodeFactor(): ?string {
        return $this->codeFactor;
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
     * Get the code geo.
     *
     * @return string|null Returns the code geo.
     */
    public function getCodeGeo(): ?string {
        return $this->codeGeo;
    }

    /**
     * Get the code imputation analytique.
     *
     * @return string|null Returns the code imputation analytique.
     */
    public function getCodeImputationAnalytique(): ?string {
        return $this->codeImputationAnalytique;
    }

    /**
     * Get the code langue designation article.
     *
     * @return string|null Returns the code langue designation article.
     */
    public function getCodeLangueDesignationArticle(): ?string {
        return $this->codeLangueDesignationArticle;
    }

    /**
     * Get the code mission frais fixe.
     *
     * @return string|null Returns the code mission frais fixe.
     */
    public function getCodeMissionFraisFixe(): ?string {
        return $this->codeMissionFraisFixe;
    }

    /**
     * Get the code origine.
     *
     * @return string|null Returns the code origine.
     */
    public function getCodeOrigine(): ?string {
        return $this->codeOrigine;
    }

    /**
     * Get the code pays corres.
     *
     * @return string|null Returns the code pays corres.
     */
    public function getCodePaysCorres(): ?string {
        return $this->codePaysCorres;
    }

    /**
     * Get the code pays fact.
     *
     * @return string|null Returns the code pays fact.
     */
    public function getCodePaysFact(): ?string {
        return $this->codePaysFact;
    }

    /**
     * Get the code portefeuille.
     *
     * @return string|null Returns the code portefeuille.
     */
    public function getCodePortefeuille(): ?string {
        return $this->codePortefeuille;
    }

    /**
     * Get the code recette impots.
     *
     * @return string|null Returns the code recette impots.
     */
    public function getCodeRecetteImpots(): ?string {
        return $this->codeRecetteImpots;
    }

    /**
     * Get the code reglement.
     *
     * @return string|null Returns the code reglement.
     */
    public function getCodeReglement(): ?string {
        return $this->codeReglement;
    }

    /**
     * Get the code regroupement.
     *
     * @return string|null Returns the code regroupement.
     */
    public function getCodeRegroupement(): ?string {
        return $this->codeRegroupement;
    }

    /**
     * Get the code representant.
     *
     * @return string|null Returns the code representant.
     */
    public function getCodeRepresentant(): ?string {
        return $this->codeRepresentant;
    }

    /**
     * Get the code revision.
     *
     * @return string|null Returns the code revision.
     */
    public function getCodeRevision(): ?string {
        return $this->codeRevision;
    }

    /**
     * Get the code sous famille.
     *
     * @return string|null Returns the code sous famille.
     */
    public function getCodeSousFamille(): ?string {
        return $this->codeSousFamille;
    }

    /**
     * Get the code sous tournee.
     *
     * @return string|null Returns the code sous tournee.
     */
    public function getCodeSousTournee(): ?string {
        return $this->codeSousTournee;
    }

    /**
     * Get the code tarif.
     *
     * @return string|null Returns the code tarif.
     */
    public function getCodeTarif(): ?string {
        return $this->codeTarif;
    }

    /**
     * Get the code tournee.
     *
     * @return string|null Returns the code tournee.
     */
    public function getCodeTournee(): ?string {
        return $this->codeTournee;
    }

    /**
     * Get the code transporteur.
     *
     * @return string|null Returns the code transporteur.
     */
    public function getCodeTransporteur(): ?string {
        return $this->codeTransporteur;
    }

    /**
     * Get the code tva.
     *
     * @return string|null Returns the code tva.
     */
    public function getCodeTva(): ?string {
        return $this->codeTva;
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
     * Get the coef sur pv.
     *
     * @return float|null Returns the coef sur pv.
     */
    public function getCoefSurPv(): ?float {
        return $this->coefSurPv;
    }

    /**
     * Get the coeff pv client.
     *
     * @return float|null Returns the coeff pv client.
     */
    public function getCoeffPvClient(): ?float {
        return $this->coeffPvClient;
    }

    /**
     * Get the collectif.
     *
     * @return string|null Returns the collectif.
     */
    public function getCollectif(): ?string {
        return $this->collectif;
    }

    /**
     * Get the conjoint.
     *
     * @return string|null Returns the conjoint.
     */
    public function getConjoint(): ?string {
        return $this->conjoint;
    }

    /**
     * Get the contact recette impots.
     *
     * @return string|null Returns the contact recette impots.
     */
    public function getContactRecetteImpots(): ?string {
        return $this->contactRecetteImpots;
    }

    /**
     * Get the date attrib encours.
     *
     * @return DateTime|null Returns the date attrib encours.
     */
    public function getDateAttribEncours(): ?DateTime {
        return $this->dateAttribEncours;
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
     * Get the date deb activite.
     *
     * @return DateTime|null Returns the date deb activite.
     */
    public function getDateDebActivite(): ?DateTime {
        return $this->dateDebActivite;
    }

    /**
     * Get the date deb prof.
     *
     * @return DateTime|null Returns the date deb prof.
     */
    public function getDateDebProf(): ?DateTime {
        return $this->dateDebProf;
    }

    /**
     * Get the date derniere vente.
     *
     * @return DateTime|null Returns the date derniere vente.
     */
    public function getDateDerniereVente(): ?DateTime {
        return $this->dateDerniereVente;
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
     * Get the date fin activite.
     *
     * @return DateTime|null Returns the date fin activite.
     */
    public function getDateFinActivite(): ?DateTime {
        return $this->dateFinActivite;
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
     * Get the date reprise.
     *
     * @return DateTime|null Returns the date reprise.
     */
    public function getDateReprise(): ?DateTime {
        return $this->dateReprise;
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
     * Get the delai tarif.
     *
     * @return int|null Returns the delai tarif.
     */
    public function getDelaiTarif(): ?int {
        return $this->delaiTarif;
    }

    /**
     * Get the domiciliation bancaire1.
     *
     * @return string|null Returns the domiciliation bancaire1.
     */
    public function getDomiciliationBancaire1(): ?string {
        return $this->domiciliationBancaire1;
    }

    /**
     * Get the domiciliation bancaire2.
     *
     * @return string|null Returns the domiciliation bancaire2.
     */
    public function getDomiciliationBancaire2(): ?string {
        return $this->domiciliationBancaire2;
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
     * Get the dossier paie.
     *
     * @return string|null Returns the dossier paie.
     */
    public function getDossierPaie(): ?string {
        return $this->dossierPaie;
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
     * Get the du client.
     *
     * @return string|null Returns the du client.
     */
    public function getDuClient(): ?string {
        return $this->duClient;
    }

    /**
     * Get the duree echeances.
     *
     * @return string|null Returns the duree echeances.
     */
    public function getDureeEcheances(): ?string {
        return $this->dureeEcheances;
    }

    /**
     * Get the effectif etp.
     *
     * @return int|null Returns the effectif etp.
     */
    public function getEffectifEtp(): ?int {
        return $this->effectifEtp;
    }

    /**
     * Get the election ce.
     *
     * @return DateTime|null Returns the election ce.
     */
    public function getElectionCe(): ?DateTime {
        return $this->electionCe;
    }

    /**
     * Get the election delegue personnel.
     *
     * @return DateTime|null Returns the election delegue personnel.
     */
    public function getElectionDeleguePersonnel(): ?DateTime {
        return $this->electionDeleguePersonnel;
    }

    /**
     * Get the equip info.
     *
     * @return string|null Returns the equip info.
     */
    public function getEquipInfo(): ?string {
        return $this->equipInfo;
    }

    /**
     * Get the etat1.
     *
     * @return string|null Returns the etat1.
     */
    public function getEtat1(): ?string {
        return $this->etat1;
    }

    /**
     * Get the etat2.
     *
     * @return string|null Returns the etat2.
     */
    public function getEtat2(): ?string {
        return $this->etat2;
    }

    /**
     * Get the etat3.
     *
     * @return string|null Returns the etat3.
     */
    public function getEtat3(): ?string {
        return $this->etat3;
    }

    /**
     * Get the etat4.
     *
     * @return string|null Returns the etat4.
     */
    public function getEtat4(): ?string {
        return $this->etat4;
    }

    /**
     * Get the etat5.
     *
     * @return string|null Returns the etat5.
     */
    public function getEtat5(): ?string {
        return $this->etat5;
    }

    /**
     * Get the etiquettes.
     *
     * @return bool|null Returns the etiquettes.
     */
    public function getEtiquettes(): ?bool {
        return $this->etiquettes;
    }

    /**
     * Get the fact btq.
     *
     * @return string|null Returns the fact btq.
     */
    public function getFactBtq(): ?string {
        return $this->factBtq;
    }

    /**
     * Get the fact bureau distributeur.
     *
     * @return string|null Returns the fact bureau distributeur.
     */
    public function getFactBureauDistributeur(): ?string {
        return $this->factBureauDistributeur;
    }

    /**
     * Get the fact code officiel commune.
     *
     * @return string|null Returns the fact code officiel commune.
     */
    public function getFactCodeOfficielCommune(): ?string {
        return $this->factCodeOfficielCommune;
    }

    /**
     * Get the fact code postal.
     *
     * @return string|null Returns the fact code postal.
     */
    public function getFactCodePostal(): ?string {
        return $this->factCodePostal;
    }

    /**
     * Get the fact complement.
     *
     * @return string|null Returns the fact complement.
     */
    public function getFactComplement(): ?string {
        return $this->factComplement;
    }

    /**
     * Get the fact nom rs.
     *
     * @return string|null Returns the fact nom rs.
     */
    public function getFactNomRs(): ?string {
        return $this->factNomRs;
    }

    /**
     * Get the fact nom ville.
     *
     * @return string|null Returns the fact nom ville.
     */
    public function getFactNomVille(): ?string {
        return $this->factNomVille;
    }

    /**
     * Get the fact nom voie.
     *
     * @return string|null Returns the fact nom voie.
     */
    public function getFactNomVoie(): ?string {
        return $this->factNomVoie;
    }

    /**
     * Get the fact num voie.
     *
     * @return string|null Returns the fact num voie.
     */
    public function getFactNumVoie(): ?string {
        return $this->factNumVoie;
    }

    /**
     * Get the facturation compta.
     *
     * @return DateTime|null Returns the facturation compta.
     */
    public function getFacturationCompta(): ?DateTime {
        return $this->facturationCompta;
    }

    /**
     * Get the facturation compta prec.
     *
     * @return DateTime|null Returns the facturation compta prec.
     */
    public function getFacturationComptaPrec(): ?DateTime {
        return $this->facturationComptaPrec;
    }

    /**
     * Get the facturation cotisation.
     *
     * @return bool|null Returns the facturation cotisation.
     */
    public function getFacturationCotisation(): ?bool {
        return $this->facturationCotisation;
    }

    /**
     * Get the facturation droit fixe.
     *
     * @return bool|null Returns the facturation droit fixe.
     */
    public function getFacturationDroitFixe(): ?bool {
        return $this->facturationDroitFixe;
    }

    /**
     * Get the facturation frais fixe.
     *
     * @return bool|null Returns the facturation frais fixe.
     */
    public function getFacturationFraisFixe(): ?bool {
        return $this->facturationFraisFixe;
    }

    /**
     * Get the facturation paie.
     *
     * @return DateTime|null Returns the facturation paie.
     */
    public function getFacturationPaie(): ?DateTime {
        return $this->facturationPaie;
    }

    /**
     * Get the facturation paie prec.
     *
     * @return DateTime|null Returns the facturation paie prec.
     */
    public function getFacturationPaiePrec(): ?DateTime {
        return $this->facturationPaiePrec;
    }

    /**
     * Get the facture euros.
     *
     * @return bool|null Returns the facture euros.
     */
    public function getFactureEuros(): ?bool {
        return $this->factureEuros;
    }

    /**
     * Get the facture isolee.
     *
     * @return bool|null Returns the facture isolee.
     */
    public function getFactureIsolee(): ?bool {
        return $this->factureIsolee;
    }

    /**
     * Get the facture temps passes.
     *
     * @return bool|null Returns the facture temps passes.
     */
    public function getFactureTempsPasses(): ?bool {
        return $this->factureTempsPasses;
    }

    /**
     * Get the factures mail.
     *
     * @return bool|null Returns the factures mail.
     */
    public function getFacturesMail(): ?bool {
        return $this->facturesMail;
    }

    /**
     * Get the fortement impose.
     *
     * @return string|null Returns the fortement impose.
     */
    public function getFortementImpose(): ?string {
        return $this->fortementImpose;
    }

    /**
     * Get the frais fixes1.
     *
     * @return bool|null Returns the frais fixes1.
     */
    public function getFraisFixes1(): ?bool {
        return $this->fraisFixes1;
    }

    /**
     * Get the frais fixes2.
     *
     * @return bool|null Returns the frais fixes2.
     */
    public function getFraisFixes2(): ?bool {
        return $this->fraisFixes2;
    }

    /**
     * Get the franco port1.
     *
     * @return float|null Returns the franco port1.
     */
    public function getFrancoPort1(): ?float {
        return $this->francoPort1;
    }

    /**
     * Get the franco port2.
     *
     * @return float|null Returns the franco port2.
     */
    public function getFrancoPort2(): ?float {
        return $this->francoPort2;
    }

    /**
     * Get the heure appel.
     *
     * @return string|null Returns the heure appel.
     */
    public function getHeureAppel(): ?string {
        return $this->heureAppel;
    }

    /**
     * Get the identifiant tva.
     *
     * @return string|null Returns the identifiant tva.
     */
    public function getIdentifiantTva(): ?string {
        return $this->identifiantTva;
    }

    /**
     * Get the indice factures mail.
     *
     * @return int|null Returns the indice factures mail.
     */
    public function getIndiceFacturesMail(): ?int {
        return $this->indiceFacturesMail;
    }

    /**
     * Get the insp.
     *
     * @return string|null Returns the insp.
     */
    public function getInsp(): ?string {
        return $this->insp;
    }

    /**
     * Get the interesse gestion.
     *
     * @return string|null Returns the interesse gestion.
     */
    public function getInteresseGestion(): ?string {
        return $this->interesseGestion;
    }

    /**
     * Get the mensualisation actif.
     *
     * @return bool|null Returns the mensualisation actif.
     */
    public function getMensualisationActif(): ?bool {
        return $this->mensualisationActif;
    }

    /**
     * Get the mensualisation au.
     *
     * @return DateTime|null Returns the mensualisation au.
     */
    public function getMensualisationAu(): ?DateTime {
        return $this->mensualisationAu;
    }

    /**
     * Get the mensualisation du.
     *
     * @return DateTime|null Returns the mensualisation du.
     */
    public function getMensualisationDu(): ?DateTime {
        return $this->mensualisationDu;
    }

    /**
     * Get the mensualisation frequence.
     *
     * @return string|null Returns the mensualisation frequence.
     */
    public function getMensualisationFrequence(): ?string {
        return $this->mensualisationFrequence;
    }

    /**
     * Get the mensualisation montant.
     *
     * @return float|null Returns the mensualisation montant.
     */
    public function getMensualisationMontant(): ?float {
        return $this->mensualisationMontant;
    }

    /**
     * Get the mission sur dossier.
     *
     * @return int|null Returns the mission sur dossier.
     */
    public function getMissionSurDossier(): ?int {
        return $this->missionSurDossier;
    }

    /**
     * Get the modele bl.
     *
     * @return string|null Returns the modele bl.
     */
    public function getModeleBl(): ?string {
        return $this->modeleBl;
    }

    /**
     * Get the modele commande.
     *
     * @return string|null Returns the modele commande.
     */
    public function getModeleCommande(): ?string {
        return $this->modeleCommande;
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
     * Get the modele proformas.
     *
     * @return string|null Returns the modele proformas.
     */
    public function getModeleProformas(): ?string {
        return $this->modeleProformas;
    }

    /**
     * Get the modele releve.
     *
     * @return string|null Returns the modele releve.
     */
    public function getModeleReleve(): ?string {
        return $this->modeleReleve;
    }

    /**
     * Get the mois cloture.
     *
     * @return string|null Returns the mois cloture.
     */
    public function getMoisCloture(): ?string {
        return $this->moisCloture;
    }

    /**
     * Get the mois cotisation.
     *
     * @return int|null Returns the mois cotisation.
     */
    public function getMoisCotisation(): ?int {
        return $this->moisCotisation;
    }

    /**
     * Get the mois droit fixe.
     *
     * @return int|null Returns the mois droit fixe.
     */
    public function getMoisDroitFixe(): ?int {
        return $this->moisDroitFixe;
    }

    /**
     * Get the mt cmd non fact.
     *
     * @return float|null Returns the mt cmd non fact.
     */
    public function getMtCmdNonFact(): ?float {
        return $this->mtCmdNonFact;
    }

    /**
     * Get the mt encours.
     *
     * @return float|null Returns the mt encours.
     */
    public function getMtEncours(): ?float {
        return $this->mtEncours;
    }

    /**
     * Get the mt encours autorise.
     *
     * @return float|null Returns the mt encours autorise.
     */
    public function getMtEncoursAutorise(): ?float {
        return $this->mtEncoursAutorise;
    }

    /**
     * Get the nb appels en cours.
     *
     * @return int|null Returns the nb appels en cours.
     */
    public function getNbAppelsEnCours(): ?int {
        return $this->nbAppelsEnCours;
    }

    /**
     * Get the nb bl.
     *
     * @return string|null Returns the nb bl.
     */
    public function getNbBl(): ?string {
        return $this->nbBl;
    }

    /**
     * Get the nb bl non chiffres.
     *
     * @return int|null Returns the nb bl non chiffres.
     */
    public function getNbBlNonChiffres(): ?int {
        return $this->nbBlNonChiffres;
    }

    /**
     * Get the nb commande.
     *
     * @return string|null Returns the nb commande.
     */
    public function getNbCommande(): ?string {
        return $this->nbCommande;
    }

    /**
     * Get the nb devis.
     *
     * @return string|null Returns the nb devis.
     */
    public function getNbDevis(): ?string {
        return $this->nbDevis;
    }

    /**
     * Get the nb facture.
     *
     * @return string|null Returns the nb facture.
     */
    public function getNbFacture(): ?string {
        return $this->nbFacture;
    }

    /**
     * Get the nb jour interval.
     *
     * @return int|null Returns the nb jour interval.
     */
    public function getNbJourInterval(): ?int {
        return $this->nbJourInterval;
    }

    /**
     * Get the nb max bl.
     *
     * @return string|null Returns the nb max bl.
     */
    public function getNbMaxBl(): ?string {
        return $this->nbMaxBl;
    }

    /**
     * Get the nb releve.
     *
     * @return string|null Returns the nb releve.
     */
    public function getNbReleve(): ?string {
        return $this->nbReleve;
    }

    /**
     * Get the nombre echeances.
     *
     * @return string|null Returns the nombre echeances.
     */
    public function getNombreEcheances(): ?string {
        return $this->nombreEcheances;
    }

    /**
     * Get the nombre mois exercice.
     *
     * @return string|null Returns the nombre mois exercice.
     */
    public function getNombreMoisExercice(): ?string {
        return $this->nombreMoisExercice;
    }

    /**
     * Get the notoriete.
     *
     * @return string|null Returns the notoriete.
     */
    public function getNotoriete(): ?string {
        return $this->notoriete;
    }

    /**
     * Get the num web adherent.
     *
     * @return string|null Returns the num web adherent.
     */
    public function getNumWebAdherent(): ?string {
        return $this->numWebAdherent;
    }

    /**
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
    }

    /**
     * Get the observation1.
     *
     * @return string|null Returns the observation1.
     */
    public function getObservation1(): ?string {
        return $this->observation1;
    }

    /**
     * Get the observation2.
     *
     * @return string|null Returns the observation2.
     */
    public function getObservation2(): ?string {
        return $this->observation2;
    }

    /**
     * Get the observation3.
     *
     * @return string|null Returns the observation3.
     */
    public function getObservation3(): ?string {
        return $this->observation3;
    }

    /**
     * Get the occasionnel.
     *
     * @return bool|null Returns the occasionnel.
     */
    public function getOccasionnel(): ?bool {
        return $this->occasionnel;
    }

    /**
     * Get the organisation adm.
     *
     * @return string|null Returns the organisation adm.
     */
    public function getOrganisationAdm(): ?string {
        return $this->organisationAdm;
    }

    /**
     * Get the paiement depart le.
     *
     * @return int|null Returns the paiement depart le.
     */
    public function getPaiementDepartLe(): ?int {
        return $this->paiementDepartLe;
    }

    /**
     * Get the paiement le.
     *
     * @return string|null Returns the paiement le.
     */
    public function getPaiementLe(): ?string {
        return $this->paiementLe;
    }

    /**
     * Get the paiement nombre de jours.
     *
     * @return int|null Returns the paiement nombre de jours.
     */
    public function getPaiementNombreDeJours(): ?int {
        return $this->paiementNombreDeJours;
    }

    /**
     * Get the pas productif.
     *
     * @return bool|null Returns the pas productif.
     */
    public function getPasProductif(): ?bool {
        return $this->pasProductif;
    }

    /**
     * Get the pas taches operationnelles.
     *
     * @return bool|null Returns the pas taches operationnelles.
     */
    public function getPasTachesOperationnelles(): ?bool {
        return $this->pasTachesOperationnelles;
    }

    /**
     * Get the patrimoine.
     *
     * @return string|null Returns the patrimoine.
     */
    public function getPatrimoine(): ?string {
        return $this->patrimoine;
    }

    /**
     * Get the prelevements perso.
     *
     * @return string|null Returns the prelevements perso.
     */
    public function getPrelevementsPerso(): ?string {
        return $this->prelevementsPerso;
    }

    /**
     * Get the prescripteur.
     *
     * @return string|null Returns the prescripteur.
     */
    public function getPrescripteur(): ?string {
        return $this->prescripteur;
    }

    /**
     * Get the previsionnel.
     *
     * @return string|null Returns the previsionnel.
     */
    public function getPrevisionnel(): ?string {
        return $this->previsionnel;
    }

    /**
     * Get the prioritaire.
     *
     * @return bool|null Returns the prioritaire.
     */
    public function getPrioritaire(): ?bool {
        return $this->prioritaire;
    }

    /**
     * Get the profil dir anxieux.
     *
     * @return bool|null Returns the profil dir anxieux.
     */
    public function getProfilDirAnxieux(): ?bool {
        return $this->profilDirAnxieux;
    }

    /**
     * Get the profil dir commercial.
     *
     * @return bool|null Returns the profil dir commercial.
     */
    public function getProfilDirCommercial(): ?bool {
        return $this->profilDirCommercial;
    }

    /**
     * Get the profil dir gestionnaire.
     *
     * @return bool|null Returns the profil dir gestionnaire.
     */
    public function getProfilDirGestionnaire(): ?bool {
        return $this->profilDirGestionnaire;
    }

    /**
     * Get the profil dir somnolent.
     *
     * @return bool|null Returns the profil dir somnolent.
     */
    public function getProfilDirSomnolent(): ?bool {
        return $this->profilDirSomnolent;
    }

    /**
     * Get the profil dir technicien.
     *
     * @return bool|null Returns the profil dir technicien.
     */
    public function getProfilDirTechnicien(): ?bool {
        return $this->profilDirTechnicien;
    }

    /**
     * Get the profil ent.
     *
     * @return string|null Returns the profil ent.
     */
    public function getProfilEnt(): ?string {
        return $this->profilEnt;
    }

    /**
     * Get the prospect.
     *
     * @return bool|null Returns the prospect.
     */
    public function getProspect(): ?bool {
        return $this->prospect;
    }

    /**
     * Get the qualite paiement.
     *
     * @return string|null Returns the qualite paiement.
     */
    public function getQualitePaiement(): ?string {
        return $this->qualitePaiement;
    }

    /**
     * Get the raison fin activite.
     *
     * @return string|null Returns the raison fin activite.
     */
    public function getRaisonFinActivite(): ?string {
        return $this->raisonFinActivite;
    }

    /**
     * Get the raison mv paiement.
     *
     * @return string|null Returns the raison mv paiement.
     */
    public function getRaisonMvPaiement(): ?string {
        return $this->raisonMvPaiement;
    }

    /**
     * Get the regime.
     *
     * @return string|null Returns the regime.
     */
    public function getRegime(): ?string {
        return $this->regime;
    }

    /**
     * Get the regroupement fact.
     *
     * @return string|null Returns the regroupement fact.
     */
    public function getRegroupementFact(): ?string {
        return $this->regroupementFact;
    }

    /**
     * Get the relation cabinet.
     *
     * @return string|null Returns the relation cabinet.
     */
    public function getRelationCabinet(): ?string {
        return $this->relationCabinet;
    }

    /**
     * Get the releve facture.
     *
     * @return bool|null Returns the releve facture.
     */
    public function getReleveFacture(): ?bool {
        return $this->releveFacture;
    }

    /**
     * Get the remise ligne1.
     *
     * @return float|null Returns the remise ligne1.
     */
    public function getRemiseLigne1(): ?float {
        return $this->remiseLigne1;
    }

    /**
     * Get the remise ligne2.
     *
     * @return float|null Returns the remise ligne2.
     */
    public function getRemiseLigne2(): ?float {
        return $this->remiseLigne2;
    }

    /**
     * Get the remise ligne3.
     *
     * @return float|null Returns the remise ligne3.
     */
    public function getRemiseLigne3(): ?float {
        return $this->remiseLigne3;
    }

    /**
     * Get the remise pied.
     *
     * @return float|null Returns the remise pied.
     */
    public function getRemisePied(): ?float {
        return $this->remisePied;
    }

    /**
     * Get the remise pied2.
     *
     * @return float|null Returns the remise pied2.
     */
    public function getRemisePied2(): ?float {
        return $this->remisePied2;
    }

    /**
     * Get the remise pied3.
     *
     * @return float|null Returns the remise pied3.
     */
    public function getRemisePied3(): ?float {
        return $this->remisePied3;
    }

    /**
     * Get the resultat.
     *
     * @return float|null Returns the resultat.
     */
    public function getResultat(): ?float {
        return $this->resultat;
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
     * Get the sante financiere.
     *
     * @return string|null Returns the sante financiere.
     */
    public function getSanteFinanciere(): ?string {
        return $this->santeFinanciere;
    }

    /**
     * Get the service cpta.
     *
     * @return bool|null Returns the service cpta.
     */
    public function getServiceCpta(): ?bool {
        return $this->serviceCpta;
    }

    /**
     * Get the siege groupe.
     *
     * @return bool|null Returns the siege groupe.
     */
    public function getSiegeGroupe(): ?bool {
        return $this->siegeGroupe;
    }

    /**
     * Get the social.
     *
     * @return bool|null Returns the social.
     */
    public function getSocial(): ?bool {
        return $this->social;
    }

    /**
     * Get the social btq.
     *
     * @return string|null Returns the social btq.
     */
    public function getSocialBtq(): ?string {
        return $this->socialBtq;
    }

    /**
     * Get the social bureau distributeur.
     *
     * @return string|null Returns the social bureau distributeur.
     */
    public function getSocialBureauDistributeur(): ?string {
        return $this->socialBureauDistributeur;
    }

    /**
     * Get the social code officiel commune.
     *
     * @return string|null Returns the social code officiel commune.
     */
    public function getSocialCodeOfficielCommune(): ?string {
        return $this->socialCodeOfficielCommune;
    }

    /**
     * Get the social code postal.
     *
     * @return string|null Returns the social code postal.
     */
    public function getSocialCodePostal(): ?string {
        return $this->socialCodePostal;
    }

    /**
     * Get the social complement.
     *
     * @return string|null Returns the social complement.
     */
    public function getSocialComplement(): ?string {
        return $this->socialComplement;
    }

    /**
     * Get the social nom rs.
     *
     * @return string|null Returns the social nom rs.
     */
    public function getSocialNomRs(): ?string {
        return $this->socialNomRs;
    }

    /**
     * Get the social nom ville.
     *
     * @return string|null Returns the social nom ville.
     */
    public function getSocialNomVille(): ?string {
        return $this->socialNomVille;
    }

    /**
     * Get the social nom voie.
     *
     * @return string|null Returns the social nom voie.
     */
    public function getSocialNomVoie(): ?string {
        return $this->socialNomVoie;
    }

    /**
     * Get the social num voie.
     *
     * @return string|null Returns the social num voie.
     */
    public function getSocialNumVoie(): ?string {
        return $this->socialNumVoie;
    }

    /**
     * Get the soumis escompte.
     *
     * @return bool|null Returns the soumis escompte.
     */
    public function getSoumisEscompte(): ?bool {
        return $this->soumisEscompte;
    }

    /**
     * Get the soumis port1.
     *
     * @return string|null Returns the soumis port1.
     */
    public function getSoumisPort1(): ?string {
        return $this->soumisPort1;
    }

    /**
     * Get the soumis port2.
     *
     * @return string|null Returns the soumis port2.
     */
    public function getSoumisPort2(): ?string {
        return $this->soumisPort2;
    }

    /**
     * Get the soumis taxe1.
     *
     * @return bool|null Returns the soumis taxe1.
     */
    public function getSoumisTaxe1(): ?bool {
        return $this->soumisTaxe1;
    }

    /**
     * Get the soumis taxe2.
     *
     * @return bool|null Returns the soumis taxe2.
     */
    public function getSoumisTaxe2(): ?bool {
        return $this->soumisTaxe2;
    }

    /**
     * Get the soumis taxe3.
     *
     * @return bool|null Returns the soumis taxe3.
     */
    public function getSoumisTaxe3(): ?bool {
        return $this->soumisTaxe3;
    }

    /**
     * Get the soumis taxe4.
     *
     * @return bool|null Returns the soumis taxe4.
     */
    public function getSoumisTaxe4(): ?bool {
        return $this->soumisTaxe4;
    }

    /**
     * Get the soumis taxe5.
     *
     * @return bool|null Returns the soumis taxe5.
     */
    public function getSoumisTaxe5(): ?bool {
        return $this->soumisTaxe5;
    }

    /**
     * Get the soumis tva.
     *
     * @return bool|null Returns the soumis tva.
     */
    public function getSoumisTva(): ?bool {
        return $this->soumisTva;
    }

    /**
     * Get the tableau de bord.
     *
     * @return string|null Returns the tableau de bord.
     */
    public function getTableauDeBord(): ?string {
        return $this->tableauDeBord;
    }

    /**
     * Get the toutes activites.
     *
     * @return string|null Returns the toutes activites.
     */
    public function getToutesActivites(): ?string {
        return $this->toutesActivites;
    }

    /**
     * Get the transporteur.
     *
     * @return string|null Returns the transporteur.
     */
    public function getTransporteur(): ?string {
        return $this->transporteur;
    }

    /**
     * Get the tresorerie.
     *
     * @return string|null Returns the tresorerie.
     */
    public function getTresorerie(): ?string {
        return $this->tresorerie;
    }

    /**
     * Get the tva regime.
     *
     * @return string|null Returns the tva regime.
     */
    public function getTvaRegime(): ?string {
        return $this->tvaRegime;
    }

    /**
     * Get the tx escompte vente.
     *
     * @return float|null Returns the tx escompte vente.
     */
    public function getTxEscompteVente(): ?float {
        return $this->txEscompteVente;
    }

    /**
     * Get the type client.
     *
     * @return string|null Returns the type client.
     */
    public function getTypeClient(): ?string {
        return $this->typeClient;
    }

    /**
     * Get the type edit bl.
     *
     * @return string|null Returns the type edit bl.
     */
    public function getTypeEditBl(): ?string {
        return $this->typeEditBl;
    }

    /**
     * Get the type facture.
     *
     * @return int|null Returns the type facture.
     */
    public function getTypeFacture(): ?int {
        return $this->typeFacture;
    }

    /**
     * Get the type gestion etebac.
     *
     * @return string|null Returns the type gestion etebac.
     */
    public function getTypeGestionEtebac(): ?string {
        return $this->typeGestionEtebac;
    }

    /**
     * Get the use adresse fact.
     *
     * @return bool|null Returns the use adresse fact.
     */
    public function getUseAdresseFact(): ?bool {
        return $this->useAdresseFact;
    }

    /**
     * Get the use corres sociale.
     *
     * @return bool|null Returns the use corres sociale.
     */
    public function getUseCorresSociale(): ?bool {
        return $this->useCorresSociale;
    }

    /**
     * Set the actif.
     *
     * @param bool|null $actif The actif.
     * @return Clients Returns this Clients.
     */
    public function setActif(?bool $actif): Clients {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the activite nouvelle.
     *
     * @param bool|null $activiteNouvelle The activite nouvelle.
     * @return Clients Returns this Clients.
     */
    public function setActiviteNouvelle(?bool $activiteNouvelle): Clients {
        $this->activiteNouvelle = $activiteNouvelle;
        return $this;
    }

    /**
     * Set the activite saiso.
     *
     * @param bool|null $activiteSaiso The activite saiso.
     * @return Clients Returns this Clients.
     */
    public function setActiviteSaiso(?bool $activiteSaiso): Clients {
        $this->activiteSaiso = $activiteSaiso;
        return $this;
    }

    /**
     * Set the adresse site client.
     *
     * @param string|null $adresseSiteClient The adresse site client.
     * @return Clients Returns this Clients.
     */
    public function setAdresseSiteClient(?string $adresseSiteClient): Clients {
        $this->adresseSiteClient = $adresseSiteClient;
        return $this;
    }

    /**
     * Set the article port1.
     *
     * @param string|null $articlePort1 The article port1.
     * @return Clients Returns this Clients.
     */
    public function setArticlePort1(?string $articlePort1): Clients {
        $this->articlePort1 = $articlePort1;
        return $this;
    }

    /**
     * Set the article port2.
     *
     * @param string|null $articlePort2 The article port2.
     * @return Clients Returns this Clients.
     */
    public function setArticlePort2(?string $articlePort2): Clients {
        $this->articlePort2 = $articlePort2;
        return $this;
    }

    /**
     * Set the assurance.
     *
     * @param bool|null $assurance The assurance.
     * @return Clients Returns this Clients.
     */
    public function setAssurance(?bool $assurance): Clients {
        $this->assurance = $assurance;
        return $this;
    }

    /**
     * Set the bibliotheque novaxel.
     *
     * @param string|null $bibliothequeNovaxel The bibliotheque novaxel.
     * @return Clients Returns this Clients.
     */
    public function setBibliothequeNovaxel(?string $bibliothequeNovaxel): Clients {
        $this->bibliothequeNovaxel = $bibliothequeNovaxel;
        return $this;
    }

    /**
     * Set the bl chiffre.
     *
     * @param bool|null $blChiffre The bl chiffre.
     * @return Clients Returns this Clients.
     */
    public function setBlChiffre(?bool $blChiffre): Clients {
        $this->blChiffre = $blChiffre;
        return $this;
    }

    /**
     * Set the bloque.
     *
     * @param bool|null $bloque The bloque.
     * @return Clients Returns this Clients.
     */
    public function setBloque(?bool $bloque): Clients {
        $this->bloque = $bloque;
        return $this;
    }

    /**
     * Set the cde auto manu.
     *
     * @param string|null $cdeAutoManu The cde auto manu.
     * @return Clients Returns this Clients.
     */
    public function setCdeAutoManu(?string $cdeAutoManu): Clients {
        $this->cdeAutoManu = $cdeAutoManu;
        return $this;
    }

    /**
     * Set the cga.
     *
     * @param bool|null $cga The cga.
     * @return Clients Returns this Clients.
     */
    public function setCga(?bool $cga): Clients {
        $this->cga = $cga;
        return $this;
    }

    /**
     * Set the charges.
     *
     * @param string|null $charges The charges.
     * @return Clients Returns this Clients.
     */
    public function setCharges(?string $charges): Clients {
        $this->charges = $charges;
        return $this;
    }

    /**
     * Set the chiffre affaire.
     *
     * @param float|null $chiffreAffaire The chiffre affaire.
     * @return Clients Returns this Clients.
     */
    public function setChiffreAffaire(?float $chiffreAffaire): Clients {
        $this->chiffreAffaire = $chiffreAffaire;
        return $this;
    }

    /**
     * Set the cle alpha.
     *
     * @param string|null $cleAlpha The cle alpha.
     * @return Clients Returns this Clients.
     */
    public function setCleAlpha(?string $cleAlpha): Clients {
        $this->cleAlpha = $cleAlpha;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Clients Returns this Clients.
     */
    public function setCode(?string $code): Clients {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code activite.
     *
     * @param string|null $codeActivite The code activite.
     * @return Clients Returns this Clients.
     */
    public function setCodeActivite(?string $codeActivite): Clients {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code agence.
     *
     * @param string|null $codeAgence The code agence.
     * @return Clients Returns this Clients.
     */
    public function setCodeAgence(?string $codeAgence): Clients {
        $this->codeAgence = $codeAgence;
        return $this;
    }

    /**
     * Set the code article cotisation.
     *
     * @param string|null $codeArticleCotisation The code article cotisation.
     * @return Clients Returns this Clients.
     */
    public function setCodeArticleCotisation(?string $codeArticleCotisation): Clients {
        $this->codeArticleCotisation = $codeArticleCotisation;
        return $this;
    }

    /**
     * Set the code article droit fixe.
     *
     * @param string|null $codeArticleDroitFixe The code article droit fixe.
     * @return Clients Returns this Clients.
     */
    public function setCodeArticleDroitFixe(?string $codeArticleDroitFixe): Clients {
        $this->codeArticleDroitFixe = $codeArticleDroitFixe;
        return $this;
    }

    /**
     * Set the code article frais fixe.
     *
     * @param string|null $codeArticleFraisFixe The code article frais fixe.
     * @return Clients Returns this Clients.
     */
    public function setCodeArticleFraisFixe(?string $codeArticleFraisFixe): Clients {
        $this->codeArticleFraisFixe = $codeArticleFraisFixe;
        return $this;
    }

    /**
     * Set the code assistant juridique.
     *
     * @param string|null $codeAssistantJuridique The code assistant juridique.
     * @return Clients Returns this Clients.
     */
    public function setCodeAssistantJuridique(?string $codeAssistantJuridique): Clients {
        $this->codeAssistantJuridique = $codeAssistantJuridique;
        return $this;
    }

    /**
     * Set the code assistant social.
     *
     * @param string|null $codeAssistantSocial The code assistant social.
     * @return Clients Returns this Clients.
     */
    public function setCodeAssistantSocial(?string $codeAssistantSocial): Clients {
        $this->codeAssistantSocial = $codeAssistantSocial;
        return $this;
    }

    /**
     * Set the code autre1.
     *
     * @param string|null $codeAutre1 The code autre1.
     * @return Clients Returns this Clients.
     */
    public function setCodeAutre1(?string $codeAutre1): Clients {
        $this->codeAutre1 = $codeAutre1;
        return $this;
    }

    /**
     * Set the code autre2.
     *
     * @param string|null $codeAutre2 The code autre2.
     * @return Clients Returns this Clients.
     */
    public function setCodeAutre2(?string $codeAutre2): Clients {
        $this->codeAutre2 = $codeAutre2;
        return $this;
    }

    /**
     * Set the code avocat.
     *
     * @param string|null $codeAvocat The code avocat.
     * @return Clients Returns this Clients.
     */
    public function setCodeAvocat(?string $codeAvocat): Clients {
        $this->codeAvocat = $codeAvocat;
        return $this;
    }

    /**
     * Set the code barre.
     *
     * @param bool|null $codeBarre The code barre.
     * @return Clients Returns this Clients.
     */
    public function setCodeBarre(?bool $codeBarre): Clients {
        $this->codeBarre = $codeBarre;
        return $this;
    }

    /**
     * Set the code categorie client.
     *
     * @param string|null $codeCategorieClient The code categorie client.
     * @return Clients Returns this Clients.
     */
    public function setCodeCategorieClient(?string $codeCategorieClient): Clients {
        $this->codeCategorieClient = $codeCategorieClient;
        return $this;
    }

    /**
     * Set the code client fact.
     *
     * @param string|null $codeClientFact The code client fact.
     * @return Clients Returns this Clients.
     */
    public function setCodeClientFact(?string $codeClientFact): Clients {
        $this->codeClientFact = $codeClientFact;
        return $this;
    }

    /**
     * Set the code client livr.
     *
     * @param string|null $codeClientLivr The code client livr.
     * @return Clients Returns this Clients.
     */
    public function setCodeClientLivr(?string $codeClientLivr): Clients {
        $this->codeClientLivr = $codeClientLivr;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return Clients Returns this Clients.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): Clients {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string|null $codeDepot The code depot.
     * @return Clients Returns this Clients.
     */
    public function setCodeDepot(?string $codeDepot): Clients {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return Clients Returns this Clients.
     */
    public function setCodeDevise(?string $codeDevise): Clients {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code edition fact.
     *
     * @param string|null $codeEditionFact The code edition fact.
     * @return Clients Returns this Clients.
     */
    public function setCodeEditionFact(?string $codeEditionFact): Clients {
        $this->codeEditionFact = $codeEditionFact;
        return $this;
    }

    /**
     * Set the code exc.
     *
     * @param string|null $codeExc The code exc.
     * @return Clients Returns this Clients.
     */
    public function setCodeExc(?string $codeExc): Clients {
        $this->codeExc = $codeExc;
        return $this;
    }

    /**
     * Set the code expert.
     *
     * @param string|null $codeExpert The code expert.
     * @return Clients Returns this Clients.
     */
    public function setCodeExpert(?string $codeExpert): Clients {
        $this->codeExpert = $codeExpert;
        return $this;
    }

    /**
     * Set the code factor.
     *
     * @param string|null $codeFactor The code factor.
     * @return Clients Returns this Clients.
     */
    public function setCodeFactor(?string $codeFactor): Clients {
        $this->codeFactor = $codeFactor;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string|null $codeFamille The code famille.
     * @return Clients Returns this Clients.
     */
    public function setCodeFamille(?string $codeFamille): Clients {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code geo.
     *
     * @param string|null $codeGeo The code geo.
     * @return Clients Returns this Clients.
     */
    public function setCodeGeo(?string $codeGeo): Clients {
        $this->codeGeo = $codeGeo;
        return $this;
    }

    /**
     * Set the code imputation analytique.
     *
     * @param string|null $codeImputationAnalytique The code imputation analytique.
     * @return Clients Returns this Clients.
     */
    public function setCodeImputationAnalytique(?string $codeImputationAnalytique): Clients {
        $this->codeImputationAnalytique = $codeImputationAnalytique;
        return $this;
    }

    /**
     * Set the code langue designation article.
     *
     * @param string|null $codeLangueDesignationArticle The code langue designation article.
     * @return Clients Returns this Clients.
     */
    public function setCodeLangueDesignationArticle(?string $codeLangueDesignationArticle): Clients {
        $this->codeLangueDesignationArticle = $codeLangueDesignationArticle;
        return $this;
    }

    /**
     * Set the code mission frais fixe.
     *
     * @param string|null $codeMissionFraisFixe The code mission frais fixe.
     * @return Clients Returns this Clients.
     */
    public function setCodeMissionFraisFixe(?string $codeMissionFraisFixe): Clients {
        $this->codeMissionFraisFixe = $codeMissionFraisFixe;
        return $this;
    }

    /**
     * Set the code origine.
     *
     * @param string|null $codeOrigine The code origine.
     * @return Clients Returns this Clients.
     */
    public function setCodeOrigine(?string $codeOrigine): Clients {
        $this->codeOrigine = $codeOrigine;
        return $this;
    }

    /**
     * Set the code pays corres.
     *
     * @param string|null $codePaysCorres The code pays corres.
     * @return Clients Returns this Clients.
     */
    public function setCodePaysCorres(?string $codePaysCorres): Clients {
        $this->codePaysCorres = $codePaysCorres;
        return $this;
    }

    /**
     * Set the code pays fact.
     *
     * @param string|null $codePaysFact The code pays fact.
     * @return Clients Returns this Clients.
     */
    public function setCodePaysFact(?string $codePaysFact): Clients {
        $this->codePaysFact = $codePaysFact;
        return $this;
    }

    /**
     * Set the code portefeuille.
     *
     * @param string|null $codePortefeuille The code portefeuille.
     * @return Clients Returns this Clients.
     */
    public function setCodePortefeuille(?string $codePortefeuille): Clients {
        $this->codePortefeuille = $codePortefeuille;
        return $this;
    }

    /**
     * Set the code recette impots.
     *
     * @param string|null $codeRecetteImpots The code recette impots.
     * @return Clients Returns this Clients.
     */
    public function setCodeRecetteImpots(?string $codeRecetteImpots): Clients {
        $this->codeRecetteImpots = $codeRecetteImpots;
        return $this;
    }

    /**
     * Set the code reglement.
     *
     * @param string|null $codeReglement The code reglement.
     * @return Clients Returns this Clients.
     */
    public function setCodeReglement(?string $codeReglement): Clients {
        $this->codeReglement = $codeReglement;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return Clients Returns this Clients.
     */
    public function setCodeRegroupement(?string $codeRegroupement): Clients {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code representant.
     *
     * @param string|null $codeRepresentant The code representant.
     * @return Clients Returns this Clients.
     */
    public function setCodeRepresentant(?string $codeRepresentant): Clients {
        $this->codeRepresentant = $codeRepresentant;
        return $this;
    }

    /**
     * Set the code revision.
     *
     * @param string|null $codeRevision The code revision.
     * @return Clients Returns this Clients.
     */
    public function setCodeRevision(?string $codeRevision): Clients {
        $this->codeRevision = $codeRevision;
        return $this;
    }

    /**
     * Set the code sous famille.
     *
     * @param string|null $codeSousFamille The code sous famille.
     * @return Clients Returns this Clients.
     */
    public function setCodeSousFamille(?string $codeSousFamille): Clients {
        $this->codeSousFamille = $codeSousFamille;
        return $this;
    }

    /**
     * Set the code sous tournee.
     *
     * @param string|null $codeSousTournee The code sous tournee.
     * @return Clients Returns this Clients.
     */
    public function setCodeSousTournee(?string $codeSousTournee): Clients {
        $this->codeSousTournee = $codeSousTournee;
        return $this;
    }

    /**
     * Set the code tarif.
     *
     * @param string|null $codeTarif The code tarif.
     * @return Clients Returns this Clients.
     */
    public function setCodeTarif(?string $codeTarif): Clients {
        $this->codeTarif = $codeTarif;
        return $this;
    }

    /**
     * Set the code tournee.
     *
     * @param string|null $codeTournee The code tournee.
     * @return Clients Returns this Clients.
     */
    public function setCodeTournee(?string $codeTournee): Clients {
        $this->codeTournee = $codeTournee;
        return $this;
    }

    /**
     * Set the code transporteur.
     *
     * @param string|null $codeTransporteur The code transporteur.
     * @return Clients Returns this Clients.
     */
    public function setCodeTransporteur(?string $codeTransporteur): Clients {
        $this->codeTransporteur = $codeTransporteur;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return Clients Returns this Clients.
     */
    public function setCodeTva(?string $codeTva): Clients {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string|null $codeVentilCompta The code ventil compta.
     * @return Clients Returns this Clients.
     */
    public function setCodeVentilCompta(?string $codeVentilCompta): Clients {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the coef sur pv.
     *
     * @param float|null $coefSurPv The coef sur pv.
     * @return Clients Returns this Clients.
     */
    public function setCoefSurPv(?float $coefSurPv): Clients {
        $this->coefSurPv = $coefSurPv;
        return $this;
    }

    /**
     * Set the coeff pv client.
     *
     * @param float|null $coeffPvClient The coeff pv client.
     * @return Clients Returns this Clients.
     */
    public function setCoeffPvClient(?float $coeffPvClient): Clients {
        $this->coeffPvClient = $coeffPvClient;
        return $this;
    }

    /**
     * Set the collectif.
     *
     * @param string|null $collectif The collectif.
     * @return Clients Returns this Clients.
     */
    public function setCollectif(?string $collectif): Clients {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the conjoint.
     *
     * @param string|null $conjoint The conjoint.
     * @return Clients Returns this Clients.
     */
    public function setConjoint(?string $conjoint): Clients {
        $this->conjoint = $conjoint;
        return $this;
    }

    /**
     * Set the contact recette impots.
     *
     * @param string|null $contactRecetteImpots The contact recette impots.
     * @return Clients Returns this Clients.
     */
    public function setContactRecetteImpots(?string $contactRecetteImpots): Clients {
        $this->contactRecetteImpots = $contactRecetteImpots;
        return $this;
    }

    /**
     * Set the date attrib encours.
     *
     * @param DateTime|null $dateAttribEncours The date attrib encours.
     * @return Clients Returns this Clients.
     */
    public function setDateAttribEncours(?DateTime $dateAttribEncours): Clients {
        $this->dateAttribEncours = $dateAttribEncours;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Clients Returns this Clients.
     */
    public function setDateCreation(?DateTime $dateCreation): Clients {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date deb activite.
     *
     * @param DateTime|null $dateDebActivite The date deb activite.
     * @return Clients Returns this Clients.
     */
    public function setDateDebActivite(?DateTime $dateDebActivite): Clients {
        $this->dateDebActivite = $dateDebActivite;
        return $this;
    }

    /**
     * Set the date deb prof.
     *
     * @param DateTime|null $dateDebProf The date deb prof.
     * @return Clients Returns this Clients.
     */
    public function setDateDebProf(?DateTime $dateDebProf): Clients {
        $this->dateDebProf = $dateDebProf;
        return $this;
    }

    /**
     * Set the date derniere vente.
     *
     * @param DateTime|null $dateDerniereVente The date derniere vente.
     * @return Clients Returns this Clients.
     */
    public function setDateDerniereVente(?DateTime $dateDerniereVente): Clients {
        $this->dateDerniereVente = $dateDerniereVente;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return Clients Returns this Clients.
     */
    public function setDateEntree(?DateTime $dateEntree): Clients {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date fin activite.
     *
     * @param DateTime|null $dateFinActivite The date fin activite.
     * @return Clients Returns this Clients.
     */
    public function setDateFinActivite(?DateTime $dateFinActivite): Clients {
        $this->dateFinActivite = $dateFinActivite;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Clients Returns this Clients.
     */
    public function setDateModification(?DateTime $dateModification): Clients {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date reprise.
     *
     * @param DateTime|null $dateReprise The date reprise.
     * @return Clients Returns this Clients.
     */
    public function setDateReprise(?DateTime $dateReprise): Clients {
        $this->dateReprise = $dateReprise;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     * @return Clients Returns this Clients.
     */
    public function setDateSortie(?DateTime $dateSortie): Clients {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the delai tarif.
     *
     * @param int|null $delaiTarif The delai tarif.
     * @return Clients Returns this Clients.
     */
    public function setDelaiTarif(?int $delaiTarif): Clients {
        $this->delaiTarif = $delaiTarif;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string|null $domiciliationBancaire1 The domiciliation bancaire1.
     * @return Clients Returns this Clients.
     */
    public function setDomiciliationBancaire1(?string $domiciliationBancaire1): Clients {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string|null $domiciliationBancaire2 The domiciliation bancaire2.
     * @return Clients Returns this Clients.
     */
    public function setDomiciliationBancaire2(?string $domiciliationBancaire2): Clients {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the dossier comptable.
     *
     * @param string|null $dossierComptable The dossier comptable.
     * @return Clients Returns this Clients.
     */
    public function setDossierComptable(?string $dossierComptable): Clients {
        $this->dossierComptable = $dossierComptable;
        return $this;
    }

    /**
     * Set the dossier paie.
     *
     * @param string|null $dossierPaie The dossier paie.
     * @return Clients Returns this Clients.
     */
    public function setDossierPaie(?string $dossierPaie): Clients {
        $this->dossierPaie = $dossierPaie;
        return $this;
    }

    /**
     * Set the ds code collab.
     *
     * @param string|null $dsCodeCollab The ds code collab.
     * @return Clients Returns this Clients.
     */
    public function setDsCodeCollab(?string $dsCodeCollab): Clients {
        $this->dsCodeCollab = $dsCodeCollab;
        return $this;
    }

    /**
     * Set the ds date retour.
     *
     * @param DateTime|null $dsDateRetour The ds date retour.
     * @return Clients Returns this Clients.
     */
    public function setDsDateRetour(?DateTime $dsDateRetour): Clients {
        $this->dsDateRetour = $dsDateRetour;
        return $this;
    }

    /**
     * Set the ds date sortie.
     *
     * @param DateTime|null $dsDateSortie The ds date sortie.
     * @return Clients Returns this Clients.
     */
    public function setDsDateSortie(?DateTime $dsDateSortie): Clients {
        $this->dsDateSortie = $dsDateSortie;
        return $this;
    }

    /**
     * Set the du client.
     *
     * @param string|null $duClient The du client.
     * @return Clients Returns this Clients.
     */
    public function setDuClient(?string $duClient): Clients {
        $this->duClient = $duClient;
        return $this;
    }

    /**
     * Set the duree echeances.
     *
     * @param string|null $dureeEcheances The duree echeances.
     * @return Clients Returns this Clients.
     */
    public function setDureeEcheances(?string $dureeEcheances): Clients {
        $this->dureeEcheances = $dureeEcheances;
        return $this;
    }

    /**
     * Set the effectif etp.
     *
     * @param int|null $effectifEtp The effectif etp.
     * @return Clients Returns this Clients.
     */
    public function setEffectifEtp(?int $effectifEtp): Clients {
        $this->effectifEtp = $effectifEtp;
        return $this;
    }

    /**
     * Set the election ce.
     *
     * @param DateTime|null $electionCe The election ce.
     * @return Clients Returns this Clients.
     */
    public function setElectionCe(?DateTime $electionCe): Clients {
        $this->electionCe = $electionCe;
        return $this;
    }

    /**
     * Set the election delegue personnel.
     *
     * @param DateTime|null $electionDeleguePersonnel The election delegue personnel.
     * @return Clients Returns this Clients.
     */
    public function setElectionDeleguePersonnel(?DateTime $electionDeleguePersonnel): Clients {
        $this->electionDeleguePersonnel = $electionDeleguePersonnel;
        return $this;
    }

    /**
     * Set the equip info.
     *
     * @param string|null $equipInfo The equip info.
     * @return Clients Returns this Clients.
     */
    public function setEquipInfo(?string $equipInfo): Clients {
        $this->equipInfo = $equipInfo;
        return $this;
    }

    /**
     * Set the etat1.
     *
     * @param string|null $etat1 The etat1.
     * @return Clients Returns this Clients.
     */
    public function setEtat1(?string $etat1): Clients {
        $this->etat1 = $etat1;
        return $this;
    }

    /**
     * Set the etat2.
     *
     * @param string|null $etat2 The etat2.
     * @return Clients Returns this Clients.
     */
    public function setEtat2(?string $etat2): Clients {
        $this->etat2 = $etat2;
        return $this;
    }

    /**
     * Set the etat3.
     *
     * @param string|null $etat3 The etat3.
     * @return Clients Returns this Clients.
     */
    public function setEtat3(?string $etat3): Clients {
        $this->etat3 = $etat3;
        return $this;
    }

    /**
     * Set the etat4.
     *
     * @param string|null $etat4 The etat4.
     * @return Clients Returns this Clients.
     */
    public function setEtat4(?string $etat4): Clients {
        $this->etat4 = $etat4;
        return $this;
    }

    /**
     * Set the etat5.
     *
     * @param string|null $etat5 The etat5.
     * @return Clients Returns this Clients.
     */
    public function setEtat5(?string $etat5): Clients {
        $this->etat5 = $etat5;
        return $this;
    }

    /**
     * Set the etiquettes.
     *
     * @param bool|null $etiquettes The etiquettes.
     * @return Clients Returns this Clients.
     */
    public function setEtiquettes(?bool $etiquettes): Clients {
        $this->etiquettes = $etiquettes;
        return $this;
    }

    /**
     * Set the fact btq.
     *
     * @param string|null $factBtq The fact btq.
     * @return Clients Returns this Clients.
     */
    public function setFactBtq(?string $factBtq): Clients {
        $this->factBtq = $factBtq;
        return $this;
    }

    /**
     * Set the fact bureau distributeur.
     *
     * @param string|null $factBureauDistributeur The fact bureau distributeur.
     * @return Clients Returns this Clients.
     */
    public function setFactBureauDistributeur(?string $factBureauDistributeur): Clients {
        $this->factBureauDistributeur = $factBureauDistributeur;
        return $this;
    }

    /**
     * Set the fact code officiel commune.
     *
     * @param string|null $factCodeOfficielCommune The fact code officiel commune.
     * @return Clients Returns this Clients.
     */
    public function setFactCodeOfficielCommune(?string $factCodeOfficielCommune): Clients {
        $this->factCodeOfficielCommune = $factCodeOfficielCommune;
        return $this;
    }

    /**
     * Set the fact code postal.
     *
     * @param string|null $factCodePostal The fact code postal.
     * @return Clients Returns this Clients.
     */
    public function setFactCodePostal(?string $factCodePostal): Clients {
        $this->factCodePostal = $factCodePostal;
        return $this;
    }

    /**
     * Set the fact complement.
     *
     * @param string|null $factComplement The fact complement.
     * @return Clients Returns this Clients.
     */
    public function setFactComplement(?string $factComplement): Clients {
        $this->factComplement = $factComplement;
        return $this;
    }

    /**
     * Set the fact nom rs.
     *
     * @param string|null $factNomRs The fact nom rs.
     * @return Clients Returns this Clients.
     */
    public function setFactNomRs(?string $factNomRs): Clients {
        $this->factNomRs = $factNomRs;
        return $this;
    }

    /**
     * Set the fact nom ville.
     *
     * @param string|null $factNomVille The fact nom ville.
     * @return Clients Returns this Clients.
     */
    public function setFactNomVille(?string $factNomVille): Clients {
        $this->factNomVille = $factNomVille;
        return $this;
    }

    /**
     * Set the fact nom voie.
     *
     * @param string|null $factNomVoie The fact nom voie.
     * @return Clients Returns this Clients.
     */
    public function setFactNomVoie(?string $factNomVoie): Clients {
        $this->factNomVoie = $factNomVoie;
        return $this;
    }

    /**
     * Set the fact num voie.
     *
     * @param string|null $factNumVoie The fact num voie.
     * @return Clients Returns this Clients.
     */
    public function setFactNumVoie(?string $factNumVoie): Clients {
        $this->factNumVoie = $factNumVoie;
        return $this;
    }

    /**
     * Set the facturation compta.
     *
     * @param DateTime|null $facturationCompta The facturation compta.
     * @return Clients Returns this Clients.
     */
    public function setFacturationCompta(?DateTime $facturationCompta): Clients {
        $this->facturationCompta = $facturationCompta;
        return $this;
    }

    /**
     * Set the facturation compta prec.
     *
     * @param DateTime|null $facturationComptaPrec The facturation compta prec.
     * @return Clients Returns this Clients.
     */
    public function setFacturationComptaPrec(?DateTime $facturationComptaPrec): Clients {
        $this->facturationComptaPrec = $facturationComptaPrec;
        return $this;
    }

    /**
     * Set the facturation cotisation.
     *
     * @param bool|null $facturationCotisation The facturation cotisation.
     * @return Clients Returns this Clients.
     */
    public function setFacturationCotisation(?bool $facturationCotisation): Clients {
        $this->facturationCotisation = $facturationCotisation;
        return $this;
    }

    /**
     * Set the facturation droit fixe.
     *
     * @param bool|null $facturationDroitFixe The facturation droit fixe.
     * @return Clients Returns this Clients.
     */
    public function setFacturationDroitFixe(?bool $facturationDroitFixe): Clients {
        $this->facturationDroitFixe = $facturationDroitFixe;
        return $this;
    }

    /**
     * Set the facturation frais fixe.
     *
     * @param bool|null $facturationFraisFixe The facturation frais fixe.
     * @return Clients Returns this Clients.
     */
    public function setFacturationFraisFixe(?bool $facturationFraisFixe): Clients {
        $this->facturationFraisFixe = $facturationFraisFixe;
        return $this;
    }

    /**
     * Set the facturation paie.
     *
     * @param DateTime|null $facturationPaie The facturation paie.
     * @return Clients Returns this Clients.
     */
    public function setFacturationPaie(?DateTime $facturationPaie): Clients {
        $this->facturationPaie = $facturationPaie;
        return $this;
    }

    /**
     * Set the facturation paie prec.
     *
     * @param DateTime|null $facturationPaiePrec The facturation paie prec.
     * @return Clients Returns this Clients.
     */
    public function setFacturationPaiePrec(?DateTime $facturationPaiePrec): Clients {
        $this->facturationPaiePrec = $facturationPaiePrec;
        return $this;
    }

    /**
     * Set the facture euros.
     *
     * @param bool|null $factureEuros The facture euros.
     * @return Clients Returns this Clients.
     */
    public function setFactureEuros(?bool $factureEuros): Clients {
        $this->factureEuros = $factureEuros;
        return $this;
    }

    /**
     * Set the facture isolee.
     *
     * @param bool|null $factureIsolee The facture isolee.
     * @return Clients Returns this Clients.
     */
    public function setFactureIsolee(?bool $factureIsolee): Clients {
        $this->factureIsolee = $factureIsolee;
        return $this;
    }

    /**
     * Set the facture temps passes.
     *
     * @param bool|null $factureTempsPasses The facture temps passes.
     * @return Clients Returns this Clients.
     */
    public function setFactureTempsPasses(?bool $factureTempsPasses): Clients {
        $this->factureTempsPasses = $factureTempsPasses;
        return $this;
    }

    /**
     * Set the factures mail.
     *
     * @param bool|null $facturesMail The factures mail.
     * @return Clients Returns this Clients.
     */
    public function setFacturesMail(?bool $facturesMail): Clients {
        $this->facturesMail = $facturesMail;
        return $this;
    }

    /**
     * Set the fortement impose.
     *
     * @param string|null $fortementImpose The fortement impose.
     * @return Clients Returns this Clients.
     */
    public function setFortementImpose(?string $fortementImpose): Clients {
        $this->fortementImpose = $fortementImpose;
        return $this;
    }

    /**
     * Set the frais fixes1.
     *
     * @param bool|null $fraisFixes1 The frais fixes1.
     * @return Clients Returns this Clients.
     */
    public function setFraisFixes1(?bool $fraisFixes1): Clients {
        $this->fraisFixes1 = $fraisFixes1;
        return $this;
    }

    /**
     * Set the frais fixes2.
     *
     * @param bool|null $fraisFixes2 The frais fixes2.
     * @return Clients Returns this Clients.
     */
    public function setFraisFixes2(?bool $fraisFixes2): Clients {
        $this->fraisFixes2 = $fraisFixes2;
        return $this;
    }

    /**
     * Set the franco port1.
     *
     * @param float|null $francoPort1 The franco port1.
     * @return Clients Returns this Clients.
     */
    public function setFrancoPort1(?float $francoPort1): Clients {
        $this->francoPort1 = $francoPort1;
        return $this;
    }

    /**
     * Set the franco port2.
     *
     * @param float|null $francoPort2 The franco port2.
     * @return Clients Returns this Clients.
     */
    public function setFrancoPort2(?float $francoPort2): Clients {
        $this->francoPort2 = $francoPort2;
        return $this;
    }

    /**
     * Set the heure appel.
     *
     * @param string|null $heureAppel The heure appel.
     * @return Clients Returns this Clients.
     */
    public function setHeureAppel(?string $heureAppel): Clients {
        $this->heureAppel = $heureAppel;
        return $this;
    }

    /**
     * Set the identifiant tva.
     *
     * @param string|null $identifiantTva The identifiant tva.
     * @return Clients Returns this Clients.
     */
    public function setIdentifiantTva(?string $identifiantTva): Clients {
        $this->identifiantTva = $identifiantTva;
        return $this;
    }

    /**
     * Set the indice factures mail.
     *
     * @param int|null $indiceFacturesMail The indice factures mail.
     * @return Clients Returns this Clients.
     */
    public function setIndiceFacturesMail(?int $indiceFacturesMail): Clients {
        $this->indiceFacturesMail = $indiceFacturesMail;
        return $this;
    }

    /**
     * Set the insp.
     *
     * @param string|null $insp The insp.
     * @return Clients Returns this Clients.
     */
    public function setInsp(?string $insp): Clients {
        $this->insp = $insp;
        return $this;
    }

    /**
     * Set the interesse gestion.
     *
     * @param string|null $interesseGestion The interesse gestion.
     * @return Clients Returns this Clients.
     */
    public function setInteresseGestion(?string $interesseGestion): Clients {
        $this->interesseGestion = $interesseGestion;
        return $this;
    }

    /**
     * Set the mensualisation actif.
     *
     * @param bool|null $mensualisationActif The mensualisation actif.
     * @return Clients Returns this Clients.
     */
    public function setMensualisationActif(?bool $mensualisationActif): Clients {
        $this->mensualisationActif = $mensualisationActif;
        return $this;
    }

    /**
     * Set the mensualisation au.
     *
     * @param DateTime|null $mensualisationAu The mensualisation au.
     * @return Clients Returns this Clients.
     */
    public function setMensualisationAu(?DateTime $mensualisationAu): Clients {
        $this->mensualisationAu = $mensualisationAu;
        return $this;
    }

    /**
     * Set the mensualisation du.
     *
     * @param DateTime|null $mensualisationDu The mensualisation du.
     * @return Clients Returns this Clients.
     */
    public function setMensualisationDu(?DateTime $mensualisationDu): Clients {
        $this->mensualisationDu = $mensualisationDu;
        return $this;
    }

    /**
     * Set the mensualisation frequence.
     *
     * @param string|null $mensualisationFrequence The mensualisation frequence.
     * @return Clients Returns this Clients.
     */
    public function setMensualisationFrequence(?string $mensualisationFrequence): Clients {
        $this->mensualisationFrequence = $mensualisationFrequence;
        return $this;
    }

    /**
     * Set the mensualisation montant.
     *
     * @param float|null $mensualisationMontant The mensualisation montant.
     * @return Clients Returns this Clients.
     */
    public function setMensualisationMontant(?float $mensualisationMontant): Clients {
        $this->mensualisationMontant = $mensualisationMontant;
        return $this;
    }

    /**
     * Set the mission sur dossier.
     *
     * @param int|null $missionSurDossier The mission sur dossier.
     * @return Clients Returns this Clients.
     */
    public function setMissionSurDossier(?int $missionSurDossier): Clients {
        $this->missionSurDossier = $missionSurDossier;
        return $this;
    }

    /**
     * Set the modele bl.
     *
     * @param string|null $modeleBl The modele bl.
     * @return Clients Returns this Clients.
     */
    public function setModeleBl(?string $modeleBl): Clients {
        $this->modeleBl = $modeleBl;
        return $this;
    }

    /**
     * Set the modele commande.
     *
     * @param string|null $modeleCommande The modele commande.
     * @return Clients Returns this Clients.
     */
    public function setModeleCommande(?string $modeleCommande): Clients {
        $this->modeleCommande = $modeleCommande;
        return $this;
    }

    /**
     * Set the modele facture.
     *
     * @param string|null $modeleFacture The modele facture.
     * @return Clients Returns this Clients.
     */
    public function setModeleFacture(?string $modeleFacture): Clients {
        $this->modeleFacture = $modeleFacture;
        return $this;
    }

    /**
     * Set the modele proformas.
     *
     * @param string|null $modeleProformas The modele proformas.
     * @return Clients Returns this Clients.
     */
    public function setModeleProformas(?string $modeleProformas): Clients {
        $this->modeleProformas = $modeleProformas;
        return $this;
    }

    /**
     * Set the modele releve.
     *
     * @param string|null $modeleReleve The modele releve.
     * @return Clients Returns this Clients.
     */
    public function setModeleReleve(?string $modeleReleve): Clients {
        $this->modeleReleve = $modeleReleve;
        return $this;
    }

    /**
     * Set the mois cloture.
     *
     * @param string|null $moisCloture The mois cloture.
     * @return Clients Returns this Clients.
     */
    public function setMoisCloture(?string $moisCloture): Clients {
        $this->moisCloture = $moisCloture;
        return $this;
    }

    /**
     * Set the mois cotisation.
     *
     * @param int|null $moisCotisation The mois cotisation.
     * @return Clients Returns this Clients.
     */
    public function setMoisCotisation(?int $moisCotisation): Clients {
        $this->moisCotisation = $moisCotisation;
        return $this;
    }

    /**
     * Set the mois droit fixe.
     *
     * @param int|null $moisDroitFixe The mois droit fixe.
     * @return Clients Returns this Clients.
     */
    public function setMoisDroitFixe(?int $moisDroitFixe): Clients {
        $this->moisDroitFixe = $moisDroitFixe;
        return $this;
    }

    /**
     * Set the mt cmd non fact.
     *
     * @param float|null $mtCmdNonFact The mt cmd non fact.
     * @return Clients Returns this Clients.
     */
    public function setMtCmdNonFact(?float $mtCmdNonFact): Clients {
        $this->mtCmdNonFact = $mtCmdNonFact;
        return $this;
    }

    /**
     * Set the mt encours.
     *
     * @param float|null $mtEncours The mt encours.
     * @return Clients Returns this Clients.
     */
    public function setMtEncours(?float $mtEncours): Clients {
        $this->mtEncours = $mtEncours;
        return $this;
    }

    /**
     * Set the mt encours autorise.
     *
     * @param float|null $mtEncoursAutorise The mt encours autorise.
     * @return Clients Returns this Clients.
     */
    public function setMtEncoursAutorise(?float $mtEncoursAutorise): Clients {
        $this->mtEncoursAutorise = $mtEncoursAutorise;
        return $this;
    }

    /**
     * Set the nb appels en cours.
     *
     * @param int|null $nbAppelsEnCours The nb appels en cours.
     * @return Clients Returns this Clients.
     */
    public function setNbAppelsEnCours(?int $nbAppelsEnCours): Clients {
        $this->nbAppelsEnCours = $nbAppelsEnCours;
        return $this;
    }

    /**
     * Set the nb bl.
     *
     * @param string|null $nbBl The nb bl.
     * @return Clients Returns this Clients.
     */
    public function setNbBl(?string $nbBl): Clients {
        $this->nbBl = $nbBl;
        return $this;
    }

    /**
     * Set the nb bl non chiffres.
     *
     * @param int|null $nbBlNonChiffres The nb bl non chiffres.
     * @return Clients Returns this Clients.
     */
    public function setNbBlNonChiffres(?int $nbBlNonChiffres): Clients {
        $this->nbBlNonChiffres = $nbBlNonChiffres;
        return $this;
    }

    /**
     * Set the nb commande.
     *
     * @param string|null $nbCommande The nb commande.
     * @return Clients Returns this Clients.
     */
    public function setNbCommande(?string $nbCommande): Clients {
        $this->nbCommande = $nbCommande;
        return $this;
    }

    /**
     * Set the nb devis.
     *
     * @param string|null $nbDevis The nb devis.
     * @return Clients Returns this Clients.
     */
    public function setNbDevis(?string $nbDevis): Clients {
        $this->nbDevis = $nbDevis;
        return $this;
    }

    /**
     * Set the nb facture.
     *
     * @param string|null $nbFacture The nb facture.
     * @return Clients Returns this Clients.
     */
    public function setNbFacture(?string $nbFacture): Clients {
        $this->nbFacture = $nbFacture;
        return $this;
    }

    /**
     * Set the nb jour interval.
     *
     * @param int|null $nbJourInterval The nb jour interval.
     * @return Clients Returns this Clients.
     */
    public function setNbJourInterval(?int $nbJourInterval): Clients {
        $this->nbJourInterval = $nbJourInterval;
        return $this;
    }

    /**
     * Set the nb max bl.
     *
     * @param string|null $nbMaxBl The nb max bl.
     * @return Clients Returns this Clients.
     */
    public function setNbMaxBl(?string $nbMaxBl): Clients {
        $this->nbMaxBl = $nbMaxBl;
        return $this;
    }

    /**
     * Set the nb releve.
     *
     * @param string|null $nbReleve The nb releve.
     * @return Clients Returns this Clients.
     */
    public function setNbReleve(?string $nbReleve): Clients {
        $this->nbReleve = $nbReleve;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string|null $nombreEcheances The nombre echeances.
     * @return Clients Returns this Clients.
     */
    public function setNombreEcheances(?string $nombreEcheances): Clients {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the nombre mois exercice.
     *
     * @param string|null $nombreMoisExercice The nombre mois exercice.
     * @return Clients Returns this Clients.
     */
    public function setNombreMoisExercice(?string $nombreMoisExercice): Clients {
        $this->nombreMoisExercice = $nombreMoisExercice;
        return $this;
    }

    /**
     * Set the notoriete.
     *
     * @param string|null $notoriete The notoriete.
     * @return Clients Returns this Clients.
     */
    public function setNotoriete(?string $notoriete): Clients {
        $this->notoriete = $notoriete;
        return $this;
    }

    /**
     * Set the num web adherent.
     *
     * @param string|null $numWebAdherent The num web adherent.
     * @return Clients Returns this Clients.
     */
    public function setNumWebAdherent(?string $numWebAdherent): Clients {
        $this->numWebAdherent = $numWebAdherent;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return Clients Returns this Clients.
     */
    public function setNumeroCompte(?string $numeroCompte): Clients {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the observation1.
     *
     * @param string|null $observation1 The observation1.
     * @return Clients Returns this Clients.
     */
    public function setObservation1(?string $observation1): Clients {
        $this->observation1 = $observation1;
        return $this;
    }

    /**
     * Set the observation2.
     *
     * @param string|null $observation2 The observation2.
     * @return Clients Returns this Clients.
     */
    public function setObservation2(?string $observation2): Clients {
        $this->observation2 = $observation2;
        return $this;
    }

    /**
     * Set the observation3.
     *
     * @param string|null $observation3 The observation3.
     * @return Clients Returns this Clients.
     */
    public function setObservation3(?string $observation3): Clients {
        $this->observation3 = $observation3;
        return $this;
    }

    /**
     * Set the occasionnel.
     *
     * @param bool|null $occasionnel The occasionnel.
     * @return Clients Returns this Clients.
     */
    public function setOccasionnel(?bool $occasionnel): Clients {
        $this->occasionnel = $occasionnel;
        return $this;
    }

    /**
     * Set the organisation adm.
     *
     * @param string|null $organisationAdm The organisation adm.
     * @return Clients Returns this Clients.
     */
    public function setOrganisationAdm(?string $organisationAdm): Clients {
        $this->organisationAdm = $organisationAdm;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param int|null $paiementDepartLe The paiement depart le.
     * @return Clients Returns this Clients.
     */
    public function setPaiementDepartLe(?int $paiementDepartLe): Clients {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param string|null $paiementLe The paiement le.
     * @return Clients Returns this Clients.
     */
    public function setPaiementLe(?string $paiementLe): Clients {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int|null $paiementNombreDeJours The paiement nombre de jours.
     * @return Clients Returns this Clients.
     */
    public function setPaiementNombreDeJours(?int $paiementNombreDeJours): Clients {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the pas productif.
     *
     * @param bool|null $pasProductif The pas productif.
     * @return Clients Returns this Clients.
     */
    public function setPasProductif(?bool $pasProductif): Clients {
        $this->pasProductif = $pasProductif;
        return $this;
    }

    /**
     * Set the pas taches operationnelles.
     *
     * @param bool|null $pasTachesOperationnelles The pas taches operationnelles.
     * @return Clients Returns this Clients.
     */
    public function setPasTachesOperationnelles(?bool $pasTachesOperationnelles): Clients {
        $this->pasTachesOperationnelles = $pasTachesOperationnelles;
        return $this;
    }

    /**
     * Set the patrimoine.
     *
     * @param string|null $patrimoine The patrimoine.
     * @return Clients Returns this Clients.
     */
    public function setPatrimoine(?string $patrimoine): Clients {
        $this->patrimoine = $patrimoine;
        return $this;
    }

    /**
     * Set the prelevements perso.
     *
     * @param string|null $prelevementsPerso The prelevements perso.
     * @return Clients Returns this Clients.
     */
    public function setPrelevementsPerso(?string $prelevementsPerso): Clients {
        $this->prelevementsPerso = $prelevementsPerso;
        return $this;
    }

    /**
     * Set the prescripteur.
     *
     * @param string|null $prescripteur The prescripteur.
     * @return Clients Returns this Clients.
     */
    public function setPrescripteur(?string $prescripteur): Clients {
        $this->prescripteur = $prescripteur;
        return $this;
    }

    /**
     * Set the previsionnel.
     *
     * @param string|null $previsionnel The previsionnel.
     * @return Clients Returns this Clients.
     */
    public function setPrevisionnel(?string $previsionnel): Clients {
        $this->previsionnel = $previsionnel;
        return $this;
    }

    /**
     * Set the prioritaire.
     *
     * @param bool|null $prioritaire The prioritaire.
     * @return Clients Returns this Clients.
     */
    public function setPrioritaire(?bool $prioritaire): Clients {
        $this->prioritaire = $prioritaire;
        return $this;
    }

    /**
     * Set the profil dir anxieux.
     *
     * @param bool|null $profilDirAnxieux The profil dir anxieux.
     * @return Clients Returns this Clients.
     */
    public function setProfilDirAnxieux(?bool $profilDirAnxieux): Clients {
        $this->profilDirAnxieux = $profilDirAnxieux;
        return $this;
    }

    /**
     * Set the profil dir commercial.
     *
     * @param bool|null $profilDirCommercial The profil dir commercial.
     * @return Clients Returns this Clients.
     */
    public function setProfilDirCommercial(?bool $profilDirCommercial): Clients {
        $this->profilDirCommercial = $profilDirCommercial;
        return $this;
    }

    /**
     * Set the profil dir gestionnaire.
     *
     * @param bool|null $profilDirGestionnaire The profil dir gestionnaire.
     * @return Clients Returns this Clients.
     */
    public function setProfilDirGestionnaire(?bool $profilDirGestionnaire): Clients {
        $this->profilDirGestionnaire = $profilDirGestionnaire;
        return $this;
    }

    /**
     * Set the profil dir somnolent.
     *
     * @param bool|null $profilDirSomnolent The profil dir somnolent.
     * @return Clients Returns this Clients.
     */
    public function setProfilDirSomnolent(?bool $profilDirSomnolent): Clients {
        $this->profilDirSomnolent = $profilDirSomnolent;
        return $this;
    }

    /**
     * Set the profil dir technicien.
     *
     * @param bool|null $profilDirTechnicien The profil dir technicien.
     * @return Clients Returns this Clients.
     */
    public function setProfilDirTechnicien(?bool $profilDirTechnicien): Clients {
        $this->profilDirTechnicien = $profilDirTechnicien;
        return $this;
    }

    /**
     * Set the profil ent.
     *
     * @param string|null $profilEnt The profil ent.
     * @return Clients Returns this Clients.
     */
    public function setProfilEnt(?string $profilEnt): Clients {
        $this->profilEnt = $profilEnt;
        return $this;
    }

    /**
     * Set the prospect.
     *
     * @param bool|null $prospect The prospect.
     * @return Clients Returns this Clients.
     */
    public function setProspect(?bool $prospect): Clients {
        $this->prospect = $prospect;
        return $this;
    }

    /**
     * Set the qualite paiement.
     *
     * @param string|null $qualitePaiement The qualite paiement.
     * @return Clients Returns this Clients.
     */
    public function setQualitePaiement(?string $qualitePaiement): Clients {
        $this->qualitePaiement = $qualitePaiement;
        return $this;
    }

    /**
     * Set the raison fin activite.
     *
     * @param string|null $raisonFinActivite The raison fin activite.
     * @return Clients Returns this Clients.
     */
    public function setRaisonFinActivite(?string $raisonFinActivite): Clients {
        $this->raisonFinActivite = $raisonFinActivite;
        return $this;
    }

    /**
     * Set the raison mv paiement.
     *
     * @param string|null $raisonMvPaiement The raison mv paiement.
     * @return Clients Returns this Clients.
     */
    public function setRaisonMvPaiement(?string $raisonMvPaiement): Clients {
        $this->raisonMvPaiement = $raisonMvPaiement;
        return $this;
    }

    /**
     * Set the regime.
     *
     * @param string|null $regime The regime.
     * @return Clients Returns this Clients.
     */
    public function setRegime(?string $regime): Clients {
        $this->regime = $regime;
        return $this;
    }

    /**
     * Set the regroupement fact.
     *
     * @param string|null $regroupementFact The regroupement fact.
     * @return Clients Returns this Clients.
     */
    public function setRegroupementFact(?string $regroupementFact): Clients {
        $this->regroupementFact = $regroupementFact;
        return $this;
    }

    /**
     * Set the relation cabinet.
     *
     * @param string|null $relationCabinet The relation cabinet.
     * @return Clients Returns this Clients.
     */
    public function setRelationCabinet(?string $relationCabinet): Clients {
        $this->relationCabinet = $relationCabinet;
        return $this;
    }

    /**
     * Set the releve facture.
     *
     * @param bool|null $releveFacture The releve facture.
     * @return Clients Returns this Clients.
     */
    public function setReleveFacture(?bool $releveFacture): Clients {
        $this->releveFacture = $releveFacture;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float|null $remiseLigne1 The remise ligne1.
     * @return Clients Returns this Clients.
     */
    public function setRemiseLigne1(?float $remiseLigne1): Clients {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float|null $remiseLigne2 The remise ligne2.
     * @return Clients Returns this Clients.
     */
    public function setRemiseLigne2(?float $remiseLigne2): Clients {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float|null $remiseLigne3 The remise ligne3.
     * @return Clients Returns this Clients.
     */
    public function setRemiseLigne3(?float $remiseLigne3): Clients {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float|null $remisePied The remise pied.
     * @return Clients Returns this Clients.
     */
    public function setRemisePied(?float $remisePied): Clients {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the remise pied2.
     *
     * @param float|null $remisePied2 The remise pied2.
     * @return Clients Returns this Clients.
     */
    public function setRemisePied2(?float $remisePied2): Clients {
        $this->remisePied2 = $remisePied2;
        return $this;
    }

    /**
     * Set the remise pied3.
     *
     * @param float|null $remisePied3 The remise pied3.
     * @return Clients Returns this Clients.
     */
    public function setRemisePied3(?float $remisePied3): Clients {
        $this->remisePied3 = $remisePied3;
        return $this;
    }

    /**
     * Set the resultat.
     *
     * @param float|null $resultat The resultat.
     * @return Clients Returns this Clients.
     */
    public function setResultat(?float $resultat): Clients {
        $this->resultat = $resultat;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Clients Returns this Clients.
     */
    public function setRib(?string $rib): Clients {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the sante financiere.
     *
     * @param string|null $santeFinanciere The sante financiere.
     * @return Clients Returns this Clients.
     */
    public function setSanteFinanciere(?string $santeFinanciere): Clients {
        $this->santeFinanciere = $santeFinanciere;
        return $this;
    }

    /**
     * Set the service cpta.
     *
     * @param bool|null $serviceCpta The service cpta.
     * @return Clients Returns this Clients.
     */
    public function setServiceCpta(?bool $serviceCpta): Clients {
        $this->serviceCpta = $serviceCpta;
        return $this;
    }

    /**
     * Set the siege groupe.
     *
     * @param bool|null $siegeGroupe The siege groupe.
     * @return Clients Returns this Clients.
     */
    public function setSiegeGroupe(?bool $siegeGroupe): Clients {
        $this->siegeGroupe = $siegeGroupe;
        return $this;
    }

    /**
     * Set the social.
     *
     * @param bool|null $social The social.
     * @return Clients Returns this Clients.
     */
    public function setSocial(?bool $social): Clients {
        $this->social = $social;
        return $this;
    }

    /**
     * Set the social btq.
     *
     * @param string|null $socialBtq The social btq.
     * @return Clients Returns this Clients.
     */
    public function setSocialBtq(?string $socialBtq): Clients {
        $this->socialBtq = $socialBtq;
        return $this;
    }

    /**
     * Set the social bureau distributeur.
     *
     * @param string|null $socialBureauDistributeur The social bureau distributeur.
     * @return Clients Returns this Clients.
     */
    public function setSocialBureauDistributeur(?string $socialBureauDistributeur): Clients {
        $this->socialBureauDistributeur = $socialBureauDistributeur;
        return $this;
    }

    /**
     * Set the social code officiel commune.
     *
     * @param string|null $socialCodeOfficielCommune The social code officiel commune.
     * @return Clients Returns this Clients.
     */
    public function setSocialCodeOfficielCommune(?string $socialCodeOfficielCommune): Clients {
        $this->socialCodeOfficielCommune = $socialCodeOfficielCommune;
        return $this;
    }

    /**
     * Set the social code postal.
     *
     * @param string|null $socialCodePostal The social code postal.
     * @return Clients Returns this Clients.
     */
    public function setSocialCodePostal(?string $socialCodePostal): Clients {
        $this->socialCodePostal = $socialCodePostal;
        return $this;
    }

    /**
     * Set the social complement.
     *
     * @param string|null $socialComplement The social complement.
     * @return Clients Returns this Clients.
     */
    public function setSocialComplement(?string $socialComplement): Clients {
        $this->socialComplement = $socialComplement;
        return $this;
    }

    /**
     * Set the social nom rs.
     *
     * @param string|null $socialNomRs The social nom rs.
     * @return Clients Returns this Clients.
     */
    public function setSocialNomRs(?string $socialNomRs): Clients {
        $this->socialNomRs = $socialNomRs;
        return $this;
    }

    /**
     * Set the social nom ville.
     *
     * @param string|null $socialNomVille The social nom ville.
     * @return Clients Returns this Clients.
     */
    public function setSocialNomVille(?string $socialNomVille): Clients {
        $this->socialNomVille = $socialNomVille;
        return $this;
    }

    /**
     * Set the social nom voie.
     *
     * @param string|null $socialNomVoie The social nom voie.
     * @return Clients Returns this Clients.
     */
    public function setSocialNomVoie(?string $socialNomVoie): Clients {
        $this->socialNomVoie = $socialNomVoie;
        return $this;
    }

    /**
     * Set the social num voie.
     *
     * @param string|null $socialNumVoie The social num voie.
     * @return Clients Returns this Clients.
     */
    public function setSocialNumVoie(?string $socialNumVoie): Clients {
        $this->socialNumVoie = $socialNumVoie;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param bool|null $soumisEscompte The soumis escompte.
     * @return Clients Returns this Clients.
     */
    public function setSoumisEscompte(?bool $soumisEscompte): Clients {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the soumis port1.
     *
     * @param string|null $soumisPort1 The soumis port1.
     * @return Clients Returns this Clients.
     */
    public function setSoumisPort1(?string $soumisPort1): Clients {
        $this->soumisPort1 = $soumisPort1;
        return $this;
    }

    /**
     * Set the soumis port2.
     *
     * @param string|null $soumisPort2 The soumis port2.
     * @return Clients Returns this Clients.
     */
    public function setSoumisPort2(?string $soumisPort2): Clients {
        $this->soumisPort2 = $soumisPort2;
        return $this;
    }

    /**
     * Set the soumis taxe1.
     *
     * @param bool|null $soumisTaxe1 The soumis taxe1.
     * @return Clients Returns this Clients.
     */
    public function setSoumisTaxe1(?bool $soumisTaxe1): Clients {
        $this->soumisTaxe1 = $soumisTaxe1;
        return $this;
    }

    /**
     * Set the soumis taxe2.
     *
     * @param bool|null $soumisTaxe2 The soumis taxe2.
     * @return Clients Returns this Clients.
     */
    public function setSoumisTaxe2(?bool $soumisTaxe2): Clients {
        $this->soumisTaxe2 = $soumisTaxe2;
        return $this;
    }

    /**
     * Set the soumis taxe3.
     *
     * @param bool|null $soumisTaxe3 The soumis taxe3.
     * @return Clients Returns this Clients.
     */
    public function setSoumisTaxe3(?bool $soumisTaxe3): Clients {
        $this->soumisTaxe3 = $soumisTaxe3;
        return $this;
    }

    /**
     * Set the soumis taxe4.
     *
     * @param bool|null $soumisTaxe4 The soumis taxe4.
     * @return Clients Returns this Clients.
     */
    public function setSoumisTaxe4(?bool $soumisTaxe4): Clients {
        $this->soumisTaxe4 = $soumisTaxe4;
        return $this;
    }

    /**
     * Set the soumis taxe5.
     *
     * @param bool|null $soumisTaxe5 The soumis taxe5.
     * @return Clients Returns this Clients.
     */
    public function setSoumisTaxe5(?bool $soumisTaxe5): Clients {
        $this->soumisTaxe5 = $soumisTaxe5;
        return $this;
    }

    /**
     * Set the soumis tva.
     *
     * @param bool|null $soumisTva The soumis tva.
     * @return Clients Returns this Clients.
     */
    public function setSoumisTva(?bool $soumisTva): Clients {
        $this->soumisTva = $soumisTva;
        return $this;
    }

    /**
     * Set the tableau de bord.
     *
     * @param string|null $tableauDeBord The tableau de bord.
     * @return Clients Returns this Clients.
     */
    public function setTableauDeBord(?string $tableauDeBord): Clients {
        $this->tableauDeBord = $tableauDeBord;
        return $this;
    }

    /**
     * Set the toutes activites.
     *
     * @param string|null $toutesActivites The toutes activites.
     * @return Clients Returns this Clients.
     */
    public function setToutesActivites(?string $toutesActivites): Clients {
        $this->toutesActivites = $toutesActivites;
        return $this;
    }

    /**
     * Set the transporteur.
     *
     * @param string|null $transporteur The transporteur.
     * @return Clients Returns this Clients.
     */
    public function setTransporteur(?string $transporteur): Clients {
        $this->transporteur = $transporteur;
        return $this;
    }

    /**
     * Set the tresorerie.
     *
     * @param string|null $tresorerie The tresorerie.
     * @return Clients Returns this Clients.
     */
    public function setTresorerie(?string $tresorerie): Clients {
        $this->tresorerie = $tresorerie;
        return $this;
    }

    /**
     * Set the tva regime.
     *
     * @param string|null $tvaRegime The tva regime.
     * @return Clients Returns this Clients.
     */
    public function setTvaRegime(?string $tvaRegime): Clients {
        $this->tvaRegime = $tvaRegime;
        return $this;
    }

    /**
     * Set the tx escompte vente.
     *
     * @param float|null $txEscompteVente The tx escompte vente.
     * @return Clients Returns this Clients.
     */
    public function setTxEscompteVente(?float $txEscompteVente): Clients {
        $this->txEscompteVente = $txEscompteVente;
        return $this;
    }

    /**
     * Set the type client.
     *
     * @param string|null $typeClient The type client.
     * @return Clients Returns this Clients.
     */
    public function setTypeClient(?string $typeClient): Clients {
        $this->typeClient = $typeClient;
        return $this;
    }

    /**
     * Set the type edit bl.
     *
     * @param string|null $typeEditBl The type edit bl.
     * @return Clients Returns this Clients.
     */
    public function setTypeEditBl(?string $typeEditBl): Clients {
        $this->typeEditBl = $typeEditBl;
        return $this;
    }

    /**
     * Set the type facture.
     *
     * @param int|null $typeFacture The type facture.
     * @return Clients Returns this Clients.
     */
    public function setTypeFacture(?int $typeFacture): Clients {
        $this->typeFacture = $typeFacture;
        return $this;
    }

    /**
     * Set the type gestion etebac.
     *
     * @param string|null $typeGestionEtebac The type gestion etebac.
     * @return Clients Returns this Clients.
     */
    public function setTypeGestionEtebac(?string $typeGestionEtebac): Clients {
        $this->typeGestionEtebac = $typeGestionEtebac;
        return $this;
    }

    /**
     * Set the use adresse fact.
     *
     * @param bool|null $useAdresseFact The use adresse fact.
     * @return Clients Returns this Clients.
     */
    public function setUseAdresseFact(?bool $useAdresseFact): Clients {
        $this->useAdresseFact = $useAdresseFact;
        return $this;
    }

    /**
     * Set the use corres sociale.
     *
     * @param bool|null $useCorresSociale The use corres sociale.
     * @return Clients Returns this Clients.
     */
    public function setUseCorresSociale(?bool $useCorresSociale): Clients {
        $this->useCorresSociale = $useCorresSociale;
        return $this;
    }
}
