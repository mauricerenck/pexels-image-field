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
 * Fournisseurs.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Fournisseurs {

    /**
     * Adresse site fournisseur.
     *
     * @var string|null
     */
    private $adresseSiteFournisseur;

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
     * Bloque.
     *
     * @var bool|null
     */
    private $bloque;

    /**
     * Chiffre affaire.
     *
     * @var float|null
     */
    private $chiffreAffaire;

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
     * Code categorie fournisseur.
     *
     * @var string|null
     */
    private $codeCategorieFournisseur;

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
     * Code origine.
     *
     * @var string|null
     */
    private $codeOrigine;

    /**
     * Code portefeuille.
     *
     * @var string|null
     */
    private $codePortefeuille;

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
     * Code sous famille.
     *
     * @var string|null
     */
    private $codeSousFamille;

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
     * Collectif.
     *
     * @var string|null
     */
    private $collectif;

    /**
     * Compte de vente.
     *
     * @var bool|null
     */
    private $compteDeVente;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Delai.
     *
     * @var float|null
     */
    private $delai;

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
     * Ean frn.
     *
     * @var string|null
     */
    private $eanFrn;

    /**
     * Echeance fin decade.
     *
     * @var bool|null
     */
    private $echeanceFinDecade;

    /**
     * Echeance fin quinzaine.
     *
     * @var bool|null
     */
    private $echeanceFinQuinzaine;

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
     * Identifiant tva.
     *
     * @var string|null
     */
    private $identifiantTva;

    /**
     * Igp.
     *
     * @var bool|null
     */
    private $igp;

    /**
     * Insp.
     *
     * @var string|null
     */
    private $insp;

    /**
     * Mission sur dossier.
     *
     * @var int|null
     */
    private $missionSurDossier;

    /**
     * Modele br.
     *
     * @var string|null
     */
    private $modeleBr;

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
     * Modele releve.
     *
     * @var string|null
     */
    private $modeleReleve;

    /**
     * Montant franco.
     *
     * @var float|null
     */
    private $montantFranco;

    /**
     * Montant mini cde.
     *
     * @var float|null
     */
    private $montantMiniCde;

    /**
     * Montant port liv.
     *
     * @var float|null
     */
    private $montantPortLiv;

    /**
     * Nb br.
     *
     * @var string|null
     */
    private $nbBr;

    /**
     * Nb commande.
     *
     * @var string|null
     */
    private $nbCommande;

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
     * Nb max br.
     *
     * @var string|null
     */
    private $nbMaxBr;

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
     * Num facture f.
     *
     * @var int|null
     */
    private $numFactureF;

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
     * Prefixe facture f.
     *
     * @var string|null
     */
    private $prefixeFactureF;

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
     * Siege groupe.
     *
     * @var bool|null
     */
    private $siegeGroupe;

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
     * Taux comm.
     *
     * @var float|null
     */
    private $tauxComm;

    /**
     * Taux escompte.
     *
     * @var float|null
     */
    private $tauxEscompte;

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
     * Trs aff grp.
     *
     * @var bool|null
     */
    private $trsAffGrp;

    /**
     * Trs aff mat dang.
     *
     * @var string|null
     */
    private $trsAffMatDang;

    /**
     * Trs aff prod chim.
     *
     * @var string|null
     */
    private $trsAffProdChim;

    /**
     * Trs aff refri.
     *
     * @var string|null
     */
    private $trsAffRefri;

    /**
     * Trs code tarif.
     *
     * @var string|null
     */
    private $trsCodeTarif;

    /**
     * Trs est un affrete.
     *
     * @var string|null
     */
    private $trsEstUnAffrete;

    /**
     * Trs gestion palettes.
     *
     * @var bool|null
     */
    private $trsGestionPalettes;

    /**
     * Trs suivi planing aff.
     *
     * @var bool|null
     */
    private $trsSuiviPlaningAff;

    /**
     * Trsp cent px trs.
     *
     * @var float|null
     */
    private $trspCentPxTrs;

    /**
     * Tva regime.
     *
     * @var string|null
     */
    private $tvaRegime;

    /**
     * Type edit br.
     *
     * @var string|null
     */
    private $typeEditBr;

    /**
     * Type fournisseur.
     *
     * @var string|null
     */
    private $typeFournisseur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adresse site fournisseur.
     *
     * @return string|null Returns the adresse site fournisseur.
     */
    public function getAdresseSiteFournisseur(): ?string {
        return $this->adresseSiteFournisseur;
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
     * Get the bloque.
     *
     * @return bool|null Returns the bloque.
     */
    public function getBloque(): ?bool {
        return $this->bloque;
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
     * Get the code categorie fournisseur.
     *
     * @return string|null Returns the code categorie fournisseur.
     */
    public function getCodeCategorieFournisseur(): ?string {
        return $this->codeCategorieFournisseur;
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
     * Get the code origine.
     *
     * @return string|null Returns the code origine.
     */
    public function getCodeOrigine(): ?string {
        return $this->codeOrigine;
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
     * Get the code sous famille.
     *
     * @return string|null Returns the code sous famille.
     */
    public function getCodeSousFamille(): ?string {
        return $this->codeSousFamille;
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
     * Get the collectif.
     *
     * @return string|null Returns the collectif.
     */
    public function getCollectif(): ?string {
        return $this->collectif;
    }

    /**
     * Get the compte de vente.
     *
     * @return bool|null Returns the compte de vente.
     */
    public function getCompteDeVente(): ?bool {
        return $this->compteDeVente;
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
     * Get the date entree.
     *
     * @return DateTime|null Returns the date entree.
     */
    public function getDateEntree(): ?DateTime {
        return $this->dateEntree;
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
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie(): ?DateTime {
        return $this->dateSortie;
    }

    /**
     * Get the delai.
     *
     * @return float|null Returns the delai.
     */
    public function getDelai(): ?float {
        return $this->delai;
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
     * Get the ean frn.
     *
     * @return string|null Returns the ean frn.
     */
    public function getEanFrn(): ?string {
        return $this->eanFrn;
    }

    /**
     * Get the echeance fin decade.
     *
     * @return bool|null Returns the echeance fin decade.
     */
    public function getEcheanceFinDecade(): ?bool {
        return $this->echeanceFinDecade;
    }

    /**
     * Get the echeance fin quinzaine.
     *
     * @return bool|null Returns the echeance fin quinzaine.
     */
    public function getEcheanceFinQuinzaine(): ?bool {
        return $this->echeanceFinQuinzaine;
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
     * Get the identifiant tva.
     *
     * @return string|null Returns the identifiant tva.
     */
    public function getIdentifiantTva(): ?string {
        return $this->identifiantTva;
    }

    /**
     * Get the igp.
     *
     * @return bool|null Returns the igp.
     */
    public function getIgp(): ?bool {
        return $this->igp;
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
     * Get the mission sur dossier.
     *
     * @return int|null Returns the mission sur dossier.
     */
    public function getMissionSurDossier(): ?int {
        return $this->missionSurDossier;
    }

    /**
     * Get the modele br.
     *
     * @return string|null Returns the modele br.
     */
    public function getModeleBr(): ?string {
        return $this->modeleBr;
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
     * Get the modele releve.
     *
     * @return string|null Returns the modele releve.
     */
    public function getModeleReleve(): ?string {
        return $this->modeleReleve;
    }

    /**
     * Get the montant franco.
     *
     * @return float|null Returns the montant franco.
     */
    public function getMontantFranco(): ?float {
        return $this->montantFranco;
    }

    /**
     * Get the montant mini cde.
     *
     * @return float|null Returns the montant mini cde.
     */
    public function getMontantMiniCde(): ?float {
        return $this->montantMiniCde;
    }

    /**
     * Get the montant port liv.
     *
     * @return float|null Returns the montant port liv.
     */
    public function getMontantPortLiv(): ?float {
        return $this->montantPortLiv;
    }

    /**
     * Get the nb br.
     *
     * @return string|null Returns the nb br.
     */
    public function getNbBr(): ?string {
        return $this->nbBr;
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
     * Get the nb max br.
     *
     * @return string|null Returns the nb max br.
     */
    public function getNbMaxBr(): ?string {
        return $this->nbMaxBr;
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
     * Get the num facture f.
     *
     * @return int|null Returns the num facture f.
     */
    public function getNumFactureF(): ?int {
        return $this->numFactureF;
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
     * Get the prefixe facture f.
     *
     * @return string|null Returns the prefixe facture f.
     */
    public function getPrefixeFactureF(): ?string {
        return $this->prefixeFactureF;
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
     * Get the siege groupe.
     *
     * @return bool|null Returns the siege groupe.
     */
    public function getSiegeGroupe(): ?bool {
        return $this->siegeGroupe;
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
     * Get the taux comm.
     *
     * @return float|null Returns the taux comm.
     */
    public function getTauxComm(): ?float {
        return $this->tauxComm;
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
     * Get the trs aff grp.
     *
     * @return bool|null Returns the trs aff grp.
     */
    public function getTrsAffGrp(): ?bool {
        return $this->trsAffGrp;
    }

    /**
     * Get the trs aff mat dang.
     *
     * @return string|null Returns the trs aff mat dang.
     */
    public function getTrsAffMatDang(): ?string {
        return $this->trsAffMatDang;
    }

    /**
     * Get the trs aff prod chim.
     *
     * @return string|null Returns the trs aff prod chim.
     */
    public function getTrsAffProdChim(): ?string {
        return $this->trsAffProdChim;
    }

    /**
     * Get the trs aff refri.
     *
     * @return string|null Returns the trs aff refri.
     */
    public function getTrsAffRefri(): ?string {
        return $this->trsAffRefri;
    }

    /**
     * Get the trs code tarif.
     *
     * @return string|null Returns the trs code tarif.
     */
    public function getTrsCodeTarif(): ?string {
        return $this->trsCodeTarif;
    }

    /**
     * Get the trs est un affrete.
     *
     * @return string|null Returns the trs est un affrete.
     */
    public function getTrsEstUnAffrete(): ?string {
        return $this->trsEstUnAffrete;
    }

    /**
     * Get the trs gestion palettes.
     *
     * @return bool|null Returns the trs gestion palettes.
     */
    public function getTrsGestionPalettes(): ?bool {
        return $this->trsGestionPalettes;
    }

    /**
     * Get the trs suivi planing aff.
     *
     * @return bool|null Returns the trs suivi planing aff.
     */
    public function getTrsSuiviPlaningAff(): ?bool {
        return $this->trsSuiviPlaningAff;
    }

    /**
     * Get the trsp cent px trs.
     *
     * @return float|null Returns the trsp cent px trs.
     */
    public function getTrspCentPxTrs(): ?float {
        return $this->trspCentPxTrs;
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
     * Get the type edit br.
     *
     * @return string|null Returns the type edit br.
     */
    public function getTypeEditBr(): ?string {
        return $this->typeEditBr;
    }

    /**
     * Get the type fournisseur.
     *
     * @return string|null Returns the type fournisseur.
     */
    public function getTypeFournisseur(): ?string {
        return $this->typeFournisseur;
    }

    /**
     * Set the adresse site fournisseur.
     *
     * @param string|null $adresseSiteFournisseur The adresse site fournisseur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setAdresseSiteFournisseur(?string $adresseSiteFournisseur): Fournisseurs {
        $this->adresseSiteFournisseur = $adresseSiteFournisseur;
        return $this;
    }

    /**
     * Set the article port1.
     *
     * @param string|null $articlePort1 The article port1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setArticlePort1(?string $articlePort1): Fournisseurs {
        $this->articlePort1 = $articlePort1;
        return $this;
    }

    /**
     * Set the article port2.
     *
     * @param string|null $articlePort2 The article port2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setArticlePort2(?string $articlePort2): Fournisseurs {
        $this->articlePort2 = $articlePort2;
        return $this;
    }

    /**
     * Set the bloque.
     *
     * @param bool|null $bloque The bloque.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setBloque(?bool $bloque): Fournisseurs {
        $this->bloque = $bloque;
        return $this;
    }

    /**
     * Set the chiffre affaire.
     *
     * @param float|null $chiffreAffaire The chiffre affaire.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setChiffreAffaire(?float $chiffreAffaire): Fournisseurs {
        $this->chiffreAffaire = $chiffreAffaire;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCode(?string $code): Fournisseurs {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code activite.
     *
     * @param string|null $codeActivite The code activite.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeActivite(?string $codeActivite): Fournisseurs {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code assistant juridique.
     *
     * @param string|null $codeAssistantJuridique The code assistant juridique.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeAssistantJuridique(?string $codeAssistantJuridique): Fournisseurs {
        $this->codeAssistantJuridique = $codeAssistantJuridique;
        return $this;
    }

    /**
     * Set the code assistant social.
     *
     * @param string|null $codeAssistantSocial The code assistant social.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeAssistantSocial(?string $codeAssistantSocial): Fournisseurs {
        $this->codeAssistantSocial = $codeAssistantSocial;
        return $this;
    }

    /**
     * Set the code autre1.
     *
     * @param string|null $codeAutre1 The code autre1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeAutre1(?string $codeAutre1): Fournisseurs {
        $this->codeAutre1 = $codeAutre1;
        return $this;
    }

    /**
     * Set the code autre2.
     *
     * @param string|null $codeAutre2 The code autre2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeAutre2(?string $codeAutre2): Fournisseurs {
        $this->codeAutre2 = $codeAutre2;
        return $this;
    }

    /**
     * Set the code avocat.
     *
     * @param string|null $codeAvocat The code avocat.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeAvocat(?string $codeAvocat): Fournisseurs {
        $this->codeAvocat = $codeAvocat;
        return $this;
    }

    /**
     * Set the code barre.
     *
     * @param bool|null $codeBarre The code barre.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeBarre(?bool $codeBarre): Fournisseurs {
        $this->codeBarre = $codeBarre;
        return $this;
    }

    /**
     * Set the code categorie fournisseur.
     *
     * @param string|null $codeCategorieFournisseur The code categorie fournisseur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeCategorieFournisseur(?string $codeCategorieFournisseur): Fournisseurs {
        $this->codeCategorieFournisseur = $codeCategorieFournisseur;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): Fournisseurs {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string|null $codeDepot The code depot.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeDepot(?string $codeDepot): Fournisseurs {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeDevise(?string $codeDevise): Fournisseurs {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code edition fact.
     *
     * @param string|null $codeEditionFact The code edition fact.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeEditionFact(?string $codeEditionFact): Fournisseurs {
        $this->codeEditionFact = $codeEditionFact;
        return $this;
    }

    /**
     * Set the code exc.
     *
     * @param string|null $codeExc The code exc.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeExc(?string $codeExc): Fournisseurs {
        $this->codeExc = $codeExc;
        return $this;
    }

    /**
     * Set the code expert.
     *
     * @param string|null $codeExpert The code expert.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeExpert(?string $codeExpert): Fournisseurs {
        $this->codeExpert = $codeExpert;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string|null $codeFamille The code famille.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeFamille(?string $codeFamille): Fournisseurs {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code geo.
     *
     * @param string|null $codeGeo The code geo.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeGeo(?string $codeGeo): Fournisseurs {
        $this->codeGeo = $codeGeo;
        return $this;
    }

    /**
     * Set the code imputation analytique.
     *
     * @param string|null $codeImputationAnalytique The code imputation analytique.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeImputationAnalytique(?string $codeImputationAnalytique): Fournisseurs {
        $this->codeImputationAnalytique = $codeImputationAnalytique;
        return $this;
    }

    /**
     * Set the code langue designation article.
     *
     * @param string|null $codeLangueDesignationArticle The code langue designation article.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeLangueDesignationArticle(?string $codeLangueDesignationArticle): Fournisseurs {
        $this->codeLangueDesignationArticle = $codeLangueDesignationArticle;
        return $this;
    }

    /**
     * Set the code origine.
     *
     * @param string|null $codeOrigine The code origine.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeOrigine(?string $codeOrigine): Fournisseurs {
        $this->codeOrigine = $codeOrigine;
        return $this;
    }

    /**
     * Set the code portefeuille.
     *
     * @param string|null $codePortefeuille The code portefeuille.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodePortefeuille(?string $codePortefeuille): Fournisseurs {
        $this->codePortefeuille = $codePortefeuille;
        return $this;
    }

    /**
     * Set the code reglement.
     *
     * @param string|null $codeReglement The code reglement.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeReglement(?string $codeReglement): Fournisseurs {
        $this->codeReglement = $codeReglement;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeRegroupement(?string $codeRegroupement): Fournisseurs {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code sous famille.
     *
     * @param string|null $codeSousFamille The code sous famille.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeSousFamille(?string $codeSousFamille): Fournisseurs {
        $this->codeSousFamille = $codeSousFamille;
        return $this;
    }

    /**
     * Set the code transporteur.
     *
     * @param string|null $codeTransporteur The code transporteur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeTransporteur(?string $codeTransporteur): Fournisseurs {
        $this->codeTransporteur = $codeTransporteur;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeTva(?string $codeTva): Fournisseurs {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string|null $codeVentilCompta The code ventil compta.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeVentilCompta(?string $codeVentilCompta): Fournisseurs {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the collectif.
     *
     * @param string|null $collectif The collectif.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCollectif(?string $collectif): Fournisseurs {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the compte de vente.
     *
     * @param bool|null $compteDeVente The compte de vente.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCompteDeVente(?bool $compteDeVente): Fournisseurs {
        $this->compteDeVente = $compteDeVente;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDateCreation(?DateTime $dateCreation): Fournisseurs {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDateEntree(?DateTime $dateEntree): Fournisseurs {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDateModification(?DateTime $dateModification): Fournisseurs {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDateSortie(?DateTime $dateSortie): Fournisseurs {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the delai.
     *
     * @param float|null $delai The delai.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDelai(?float $delai): Fournisseurs {
        $this->delai = $delai;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string|null $domiciliationBancaire1 The domiciliation bancaire1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDomiciliationBancaire1(?string $domiciliationBancaire1): Fournisseurs {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string|null $domiciliationBancaire2 The domiciliation bancaire2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDomiciliationBancaire2(?string $domiciliationBancaire2): Fournisseurs {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the dossier comptable.
     *
     * @param string|null $dossierComptable The dossier comptable.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDossierComptable(?string $dossierComptable): Fournisseurs {
        $this->dossierComptable = $dossierComptable;
        return $this;
    }

    /**
     * Set the dossier paie.
     *
     * @param string|null $dossierPaie The dossier paie.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDossierPaie(?string $dossierPaie): Fournisseurs {
        $this->dossierPaie = $dossierPaie;
        return $this;
    }

    /**
     * Set the ds code collab.
     *
     * @param string|null $dsCodeCollab The ds code collab.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDsCodeCollab(?string $dsCodeCollab): Fournisseurs {
        $this->dsCodeCollab = $dsCodeCollab;
        return $this;
    }

    /**
     * Set the ds date retour.
     *
     * @param DateTime|null $dsDateRetour The ds date retour.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDsDateRetour(?DateTime $dsDateRetour): Fournisseurs {
        $this->dsDateRetour = $dsDateRetour;
        return $this;
    }

    /**
     * Set the ds date sortie.
     *
     * @param DateTime|null $dsDateSortie The ds date sortie.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDsDateSortie(?DateTime $dsDateSortie): Fournisseurs {
        $this->dsDateSortie = $dsDateSortie;
        return $this;
    }

    /**
     * Set the ean frn.
     *
     * @param string|null $eanFrn The ean frn.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEanFrn(?string $eanFrn): Fournisseurs {
        $this->eanFrn = $eanFrn;
        return $this;
    }

    /**
     * Set the echeance fin decade.
     *
     * @param bool|null $echeanceFinDecade The echeance fin decade.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEcheanceFinDecade(?bool $echeanceFinDecade): Fournisseurs {
        $this->echeanceFinDecade = $echeanceFinDecade;
        return $this;
    }

    /**
     * Set the echeance fin quinzaine.
     *
     * @param bool|null $echeanceFinQuinzaine The echeance fin quinzaine.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEcheanceFinQuinzaine(?bool $echeanceFinQuinzaine): Fournisseurs {
        $this->echeanceFinQuinzaine = $echeanceFinQuinzaine;
        return $this;
    }

    /**
     * Set the etat1.
     *
     * @param string|null $etat1 The etat1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEtat1(?string $etat1): Fournisseurs {
        $this->etat1 = $etat1;
        return $this;
    }

    /**
     * Set the etat2.
     *
     * @param string|null $etat2 The etat2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEtat2(?string $etat2): Fournisseurs {
        $this->etat2 = $etat2;
        return $this;
    }

    /**
     * Set the etat3.
     *
     * @param string|null $etat3 The etat3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEtat3(?string $etat3): Fournisseurs {
        $this->etat3 = $etat3;
        return $this;
    }

    /**
     * Set the etat4.
     *
     * @param string|null $etat4 The etat4.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEtat4(?string $etat4): Fournisseurs {
        $this->etat4 = $etat4;
        return $this;
    }

    /**
     * Set the etat5.
     *
     * @param string|null $etat5 The etat5.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEtat5(?string $etat5): Fournisseurs {
        $this->etat5 = $etat5;
        return $this;
    }

    /**
     * Set the etiquettes.
     *
     * @param bool|null $etiquettes The etiquettes.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEtiquettes(?bool $etiquettes): Fournisseurs {
        $this->etiquettes = $etiquettes;
        return $this;
    }

    /**
     * Set the facture euros.
     *
     * @param bool|null $factureEuros The facture euros.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFactureEuros(?bool $factureEuros): Fournisseurs {
        $this->factureEuros = $factureEuros;
        return $this;
    }

    /**
     * Set the facture isolee.
     *
     * @param bool|null $factureIsolee The facture isolee.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFactureIsolee(?bool $factureIsolee): Fournisseurs {
        $this->factureIsolee = $factureIsolee;
        return $this;
    }

    /**
     * Set the frais fixes1.
     *
     * @param bool|null $fraisFixes1 The frais fixes1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFraisFixes1(?bool $fraisFixes1): Fournisseurs {
        $this->fraisFixes1 = $fraisFixes1;
        return $this;
    }

    /**
     * Set the frais fixes2.
     *
     * @param bool|null $fraisFixes2 The frais fixes2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFraisFixes2(?bool $fraisFixes2): Fournisseurs {
        $this->fraisFixes2 = $fraisFixes2;
        return $this;
    }

    /**
     * Set the franco port1.
     *
     * @param float|null $francoPort1 The franco port1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFrancoPort1(?float $francoPort1): Fournisseurs {
        $this->francoPort1 = $francoPort1;
        return $this;
    }

    /**
     * Set the franco port2.
     *
     * @param float|null $francoPort2 The franco port2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFrancoPort2(?float $francoPort2): Fournisseurs {
        $this->francoPort2 = $francoPort2;
        return $this;
    }

    /**
     * Set the identifiant tva.
     *
     * @param string|null $identifiantTva The identifiant tva.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setIdentifiantTva(?string $identifiantTva): Fournisseurs {
        $this->identifiantTva = $identifiantTva;
        return $this;
    }

    /**
     * Set the igp.
     *
     * @param bool|null $igp The igp.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setIgp(?bool $igp): Fournisseurs {
        $this->igp = $igp;
        return $this;
    }

    /**
     * Set the insp.
     *
     * @param string|null $insp The insp.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setInsp(?string $insp): Fournisseurs {
        $this->insp = $insp;
        return $this;
    }

    /**
     * Set the mission sur dossier.
     *
     * @param int|null $missionSurDossier The mission sur dossier.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setMissionSurDossier(?int $missionSurDossier): Fournisseurs {
        $this->missionSurDossier = $missionSurDossier;
        return $this;
    }

    /**
     * Set the modele br.
     *
     * @param string|null $modeleBr The modele br.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setModeleBr(?string $modeleBr): Fournisseurs {
        $this->modeleBr = $modeleBr;
        return $this;
    }

    /**
     * Set the modele commande.
     *
     * @param string|null $modeleCommande The modele commande.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setModeleCommande(?string $modeleCommande): Fournisseurs {
        $this->modeleCommande = $modeleCommande;
        return $this;
    }

    /**
     * Set the modele facture.
     *
     * @param string|null $modeleFacture The modele facture.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setModeleFacture(?string $modeleFacture): Fournisseurs {
        $this->modeleFacture = $modeleFacture;
        return $this;
    }

    /**
     * Set the modele releve.
     *
     * @param string|null $modeleReleve The modele releve.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setModeleReleve(?string $modeleReleve): Fournisseurs {
        $this->modeleReleve = $modeleReleve;
        return $this;
    }

    /**
     * Set the montant franco.
     *
     * @param float|null $montantFranco The montant franco.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setMontantFranco(?float $montantFranco): Fournisseurs {
        $this->montantFranco = $montantFranco;
        return $this;
    }

    /**
     * Set the montant mini cde.
     *
     * @param float|null $montantMiniCde The montant mini cde.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setMontantMiniCde(?float $montantMiniCde): Fournisseurs {
        $this->montantMiniCde = $montantMiniCde;
        return $this;
    }

    /**
     * Set the montant port liv.
     *
     * @param float|null $montantPortLiv The montant port liv.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setMontantPortLiv(?float $montantPortLiv): Fournisseurs {
        $this->montantPortLiv = $montantPortLiv;
        return $this;
    }

    /**
     * Set the nb br.
     *
     * @param string|null $nbBr The nb br.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbBr(?string $nbBr): Fournisseurs {
        $this->nbBr = $nbBr;
        return $this;
    }

    /**
     * Set the nb commande.
     *
     * @param string|null $nbCommande The nb commande.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbCommande(?string $nbCommande): Fournisseurs {
        $this->nbCommande = $nbCommande;
        return $this;
    }

    /**
     * Set the nb facture.
     *
     * @param string|null $nbFacture The nb facture.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbFacture(?string $nbFacture): Fournisseurs {
        $this->nbFacture = $nbFacture;
        return $this;
    }

    /**
     * Set the nb jour interval.
     *
     * @param int|null $nbJourInterval The nb jour interval.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbJourInterval(?int $nbJourInterval): Fournisseurs {
        $this->nbJourInterval = $nbJourInterval;
        return $this;
    }

    /**
     * Set the nb max br.
     *
     * @param string|null $nbMaxBr The nb max br.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbMaxBr(?string $nbMaxBr): Fournisseurs {
        $this->nbMaxBr = $nbMaxBr;
        return $this;
    }

    /**
     * Set the nb releve.
     *
     * @param string|null $nbReleve The nb releve.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbReleve(?string $nbReleve): Fournisseurs {
        $this->nbReleve = $nbReleve;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string|null $nombreEcheances The nombre echeances.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNombreEcheances(?string $nombreEcheances): Fournisseurs {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the num facture f.
     *
     * @param int|null $numFactureF The num facture f.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNumFactureF(?int $numFactureF): Fournisseurs {
        $this->numFactureF = $numFactureF;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNumeroCompte(?string $numeroCompte): Fournisseurs {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the observation1.
     *
     * @param string|null $observation1 The observation1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setObservation1(?string $observation1): Fournisseurs {
        $this->observation1 = $observation1;
        return $this;
    }

    /**
     * Set the observation2.
     *
     * @param string|null $observation2 The observation2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setObservation2(?string $observation2): Fournisseurs {
        $this->observation2 = $observation2;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param int|null $paiementDepartLe The paiement depart le.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPaiementDepartLe(?int $paiementDepartLe): Fournisseurs {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param string|null $paiementLe The paiement le.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPaiementLe(?string $paiementLe): Fournisseurs {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int|null $paiementNombreDeJours The paiement nombre de jours.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPaiementNombreDeJours(?int $paiementNombreDeJours): Fournisseurs {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the prefixe facture f.
     *
     * @param string|null $prefixeFactureF The prefixe facture f.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPrefixeFactureF(?string $prefixeFactureF): Fournisseurs {
        $this->prefixeFactureF = $prefixeFactureF;
        return $this;
    }

    /**
     * Set the regime.
     *
     * @param string|null $regime The regime.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRegime(?string $regime): Fournisseurs {
        $this->regime = $regime;
        return $this;
    }

    /**
     * Set the regroupement fact.
     *
     * @param string|null $regroupementFact The regroupement fact.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRegroupementFact(?string $regroupementFact): Fournisseurs {
        $this->regroupementFact = $regroupementFact;
        return $this;
    }

    /**
     * Set the releve facture.
     *
     * @param bool|null $releveFacture The releve facture.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setReleveFacture(?bool $releveFacture): Fournisseurs {
        $this->releveFacture = $releveFacture;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float|null $remiseLigne1 The remise ligne1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemiseLigne1(?float $remiseLigne1): Fournisseurs {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float|null $remiseLigne2 The remise ligne2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemiseLigne2(?float $remiseLigne2): Fournisseurs {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float|null $remiseLigne3 The remise ligne3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemiseLigne3(?float $remiseLigne3): Fournisseurs {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float|null $remisePied The remise pied.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemisePied(?float $remisePied): Fournisseurs {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the remise pied2.
     *
     * @param float|null $remisePied2 The remise pied2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemisePied2(?float $remisePied2): Fournisseurs {
        $this->remisePied2 = $remisePied2;
        return $this;
    }

    /**
     * Set the remise pied3.
     *
     * @param float|null $remisePied3 The remise pied3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemisePied3(?float $remisePied3): Fournisseurs {
        $this->remisePied3 = $remisePied3;
        return $this;
    }

    /**
     * Set the resultat.
     *
     * @param float|null $resultat The resultat.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setResultat(?float $resultat): Fournisseurs {
        $this->resultat = $resultat;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRib(?string $rib): Fournisseurs {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the siege groupe.
     *
     * @param bool|null $siegeGroupe The siege groupe.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSiegeGroupe(?bool $siegeGroupe): Fournisseurs {
        $this->siegeGroupe = $siegeGroupe;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param bool|null $soumisEscompte The soumis escompte.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisEscompte(?bool $soumisEscompte): Fournisseurs {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the soumis port1.
     *
     * @param string|null $soumisPort1 The soumis port1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisPort1(?string $soumisPort1): Fournisseurs {
        $this->soumisPort1 = $soumisPort1;
        return $this;
    }

    /**
     * Set the soumis port2.
     *
     * @param string|null $soumisPort2 The soumis port2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisPort2(?string $soumisPort2): Fournisseurs {
        $this->soumisPort2 = $soumisPort2;
        return $this;
    }

    /**
     * Set the soumis taxe1.
     *
     * @param bool|null $soumisTaxe1 The soumis taxe1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe1(?bool $soumisTaxe1): Fournisseurs {
        $this->soumisTaxe1 = $soumisTaxe1;
        return $this;
    }

    /**
     * Set the soumis taxe2.
     *
     * @param bool|null $soumisTaxe2 The soumis taxe2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe2(?bool $soumisTaxe2): Fournisseurs {
        $this->soumisTaxe2 = $soumisTaxe2;
        return $this;
    }

    /**
     * Set the soumis taxe3.
     *
     * @param bool|null $soumisTaxe3 The soumis taxe3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe3(?bool $soumisTaxe3): Fournisseurs {
        $this->soumisTaxe3 = $soumisTaxe3;
        return $this;
    }

    /**
     * Set the soumis taxe4.
     *
     * @param bool|null $soumisTaxe4 The soumis taxe4.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe4(?bool $soumisTaxe4): Fournisseurs {
        $this->soumisTaxe4 = $soumisTaxe4;
        return $this;
    }

    /**
     * Set the soumis taxe5.
     *
     * @param bool|null $soumisTaxe5 The soumis taxe5.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe5(?bool $soumisTaxe5): Fournisseurs {
        $this->soumisTaxe5 = $soumisTaxe5;
        return $this;
    }

    /**
     * Set the soumis tva.
     *
     * @param bool|null $soumisTva The soumis tva.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTva(?bool $soumisTva): Fournisseurs {
        $this->soumisTva = $soumisTva;
        return $this;
    }

    /**
     * Set the taux comm.
     *
     * @param float|null $tauxComm The taux comm.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTauxComm(?float $tauxComm): Fournisseurs {
        $this->tauxComm = $tauxComm;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float|null $tauxEscompte The taux escompte.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTauxEscompte(?float $tauxEscompte): Fournisseurs {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the toutes activites.
     *
     * @param string|null $toutesActivites The toutes activites.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setToutesActivites(?string $toutesActivites): Fournisseurs {
        $this->toutesActivites = $toutesActivites;
        return $this;
    }

    /**
     * Set the transporteur.
     *
     * @param string|null $transporteur The transporteur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTransporteur(?string $transporteur): Fournisseurs {
        $this->transporteur = $transporteur;
        return $this;
    }

    /**
     * Set the trs aff grp.
     *
     * @param bool|null $trsAffGrp The trs aff grp.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsAffGrp(?bool $trsAffGrp): Fournisseurs {
        $this->trsAffGrp = $trsAffGrp;
        return $this;
    }

    /**
     * Set the trs aff mat dang.
     *
     * @param string|null $trsAffMatDang The trs aff mat dang.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsAffMatDang(?string $trsAffMatDang): Fournisseurs {
        $this->trsAffMatDang = $trsAffMatDang;
        return $this;
    }

    /**
     * Set the trs aff prod chim.
     *
     * @param string|null $trsAffProdChim The trs aff prod chim.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsAffProdChim(?string $trsAffProdChim): Fournisseurs {
        $this->trsAffProdChim = $trsAffProdChim;
        return $this;
    }

    /**
     * Set the trs aff refri.
     *
     * @param string|null $trsAffRefri The trs aff refri.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsAffRefri(?string $trsAffRefri): Fournisseurs {
        $this->trsAffRefri = $trsAffRefri;
        return $this;
    }

    /**
     * Set the trs code tarif.
     *
     * @param string|null $trsCodeTarif The trs code tarif.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsCodeTarif(?string $trsCodeTarif): Fournisseurs {
        $this->trsCodeTarif = $trsCodeTarif;
        return $this;
    }

    /**
     * Set the trs est un affrete.
     *
     * @param string|null $trsEstUnAffrete The trs est un affrete.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsEstUnAffrete(?string $trsEstUnAffrete): Fournisseurs {
        $this->trsEstUnAffrete = $trsEstUnAffrete;
        return $this;
    }

    /**
     * Set the trs gestion palettes.
     *
     * @param bool|null $trsGestionPalettes The trs gestion palettes.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsGestionPalettes(?bool $trsGestionPalettes): Fournisseurs {
        $this->trsGestionPalettes = $trsGestionPalettes;
        return $this;
    }

    /**
     * Set the trs suivi planing aff.
     *
     * @param bool|null $trsSuiviPlaningAff The trs suivi planing aff.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsSuiviPlaningAff(?bool $trsSuiviPlaningAff): Fournisseurs {
        $this->trsSuiviPlaningAff = $trsSuiviPlaningAff;
        return $this;
    }

    /**
     * Set the trsp cent px trs.
     *
     * @param float|null $trspCentPxTrs The trsp cent px trs.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrspCentPxTrs(?float $trspCentPxTrs): Fournisseurs {
        $this->trspCentPxTrs = $trspCentPxTrs;
        return $this;
    }

    /**
     * Set the tva regime.
     *
     * @param string|null $tvaRegime The tva regime.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTvaRegime(?string $tvaRegime): Fournisseurs {
        $this->tvaRegime = $tvaRegime;
        return $this;
    }

    /**
     * Set the type edit br.
     *
     * @param string|null $typeEditBr The type edit br.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTypeEditBr(?string $typeEditBr): Fournisseurs {
        $this->typeEditBr = $typeEditBr;
        return $this;
    }

    /**
     * Set the type fournisseur.
     *
     * @param string|null $typeFournisseur The type fournisseur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTypeFournisseur(?string $typeFournisseur): Fournisseurs {
        $this->typeFournisseur = $typeFournisseur;
        return $this;
    }
}
