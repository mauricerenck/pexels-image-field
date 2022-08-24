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
 * Clients.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Clients {

    /**
     * Actif.
     *
     * @var bool|null
     */
    private $actif;

    /**
     * Bloque.
     *
     * @var bool|null
     */
    private $bloque;

    /**
     * Cle alpha.
     *
     * @var string|null
     */
    private $cleAlpha;

    /**
     * Code analytique.
     *
     * @var string|null
     */
    private $codeAnalytique;

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
     * Code langue designation article.
     *
     * @var string|null
     */
    private $codeLangueDesignationArticle;

    /**
     * Code mode reglement.
     *
     * @var string|null
     */
    private $codeModeReglement;

    /**
     * Code origine.
     *
     * @var string|null
     */
    private $codeOrigine;

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
     * Code tournee.
     *
     * @var string|null
     */
    private $codeTournee;

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
     * Collectif comptable.
     *
     * @var int|null
     */
    private $collectifComptable;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Derniere annee facturee.
     *
     * @var int|null
     */
    private $derniereAnneeFacturee;

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
     * Echeance depart.
     *
     * @var int|null
     */
    private $echeanceDepart;

    /**
     * Echeance le.
     *
     * @var int|null
     */
    private $echeanceLe;

    /**
     * Echeance nb jours.
     *
     * @var int|null
     */
    private $echeanceNbJours;

    /**
     * Facture euros.
     *
     * @var bool|null
     */
    private $factureEuros;

    /**
     * Id.
     *
     * @var string|null
     */
    private $id;

    /**
     * Nb bl.
     *
     * @var int|null
     */
    private $nbBl;

    /**
     * Nb facture.
     *
     * @var int|null
     */
    private $nbFacture;

    /**
     * Nombre echeances.
     *
     * @var int|null
     */
    private $nombreEcheances;

    /**
     * Num cpt collectif.
     *
     * @var string|null
     */
    private $numCptCollectif;

    /**
     * Num cpt comptable.
     *
     * @var string|null
     */
    private $numCptComptable;

    /**
     * Premiere annee facturee.
     *
     * @var int|null
     */
    private $premiereAnneeFacturee;

    /**
     * Prospect.
     *
     * @var bool|null
     */
    private $prospect;

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
     * Remise pied1.
     *
     * @var float|null
     */
    private $remisePied1;

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
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Soumis escompte.
     *
     * @var bool|null
     */
    private $soumisEscompte;

    /**
     * Taux escompte.
     *
     * @var float|null
     */
    private $tauxEscompte;

    /**
     * Transporteur.
     *
     * @var string|null
     */
    private $transporteur;

    /**
     * Type facture.
     *
     * @var int|null
     */
    private $typeFacture;

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
     * Get the bloque.
     *
     * @return bool|null Returns the bloque.
     */
    public function getBloque(): ?bool {
        return $this->bloque;
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
     * Get the code analytique.
     *
     * @return string|null Returns the code analytique.
     */
    public function getCodeAnalytique(): ?string {
        return $this->codeAnalytique;
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
     * Get the code langue designation article.
     *
     * @return string|null Returns the code langue designation article.
     */
    public function getCodeLangueDesignationArticle(): ?string {
        return $this->codeLangueDesignationArticle;
    }

    /**
     * Get the code mode reglement.
     *
     * @return string|null Returns the code mode reglement.
     */
    public function getCodeModeReglement(): ?string {
        return $this->codeModeReglement;
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
     * Get the code tournee.
     *
     * @return string|null Returns the code tournee.
     */
    public function getCodeTournee(): ?string {
        return $this->codeTournee;
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
     * Get the collectif comptable.
     *
     * @return int|null Returns the collectif comptable.
     */
    public function getCollectifComptable(): ?int {
        return $this->collectifComptable;
    }

    /**
     * Get the commentaire.
     *
     * @return string|null Returns the commentaire.
     */
    public function getCommentaire(): ?string {
        return $this->commentaire;
    }

    /**
     * Get the date creat.
     *
     * @return DateTime|null Returns the date creat.
     */
    public function getDateCreat(): ?DateTime {
        return $this->dateCreat;
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
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif(): ?DateTime {
        return $this->dateModif;
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
     * Get the derniere annee facturee.
     *
     * @return int|null Returns the derniere annee facturee.
     */
    public function getDerniereAnneeFacturee(): ?int {
        return $this->derniereAnneeFacturee;
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
     * Get the echeance depart.
     *
     * @return int|null Returns the echeance depart.
     */
    public function getEcheanceDepart(): ?int {
        return $this->echeanceDepart;
    }

    /**
     * Get the echeance le.
     *
     * @return int|null Returns the echeance le.
     */
    public function getEcheanceLe(): ?int {
        return $this->echeanceLe;
    }

    /**
     * Get the echeance nb jours.
     *
     * @return int|null Returns the echeance nb jours.
     */
    public function getEcheanceNbJours(): ?int {
        return $this->echeanceNbJours;
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
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Get the nb bl.
     *
     * @return int|null Returns the nb bl.
     */
    public function getNbBl(): ?int {
        return $this->nbBl;
    }

    /**
     * Get the nb facture.
     *
     * @return int|null Returns the nb facture.
     */
    public function getNbFacture(): ?int {
        return $this->nbFacture;
    }

    /**
     * Get the nombre echeances.
     *
     * @return int|null Returns the nombre echeances.
     */
    public function getNombreEcheances(): ?int {
        return $this->nombreEcheances;
    }

    /**
     * Get the num cpt collectif.
     *
     * @return string|null Returns the num cpt collectif.
     */
    public function getNumCptCollectif(): ?string {
        return $this->numCptCollectif;
    }

    /**
     * Get the num cpt comptable.
     *
     * @return string|null Returns the num cpt comptable.
     */
    public function getNumCptComptable(): ?string {
        return $this->numCptComptable;
    }

    /**
     * Get the premiere annee facturee.
     *
     * @return int|null Returns the premiere annee facturee.
     */
    public function getPremiereAnneeFacturee(): ?int {
        return $this->premiereAnneeFacturee;
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
     * Get the remise pied1.
     *
     * @return float|null Returns the remise pied1.
     */
    public function getRemisePied1(): ?float {
        return $this->remisePied1;
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
     * Get the rib.
     *
     * @return string|null Returns the rib.
     */
    public function getRib(): ?string {
        return $this->rib;
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
     * Get the taux escompte.
     *
     * @return float|null Returns the taux escompte.
     */
    public function getTauxEscompte(): ?float {
        return $this->tauxEscompte;
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
     * Get the type facture.
     *
     * @return int|null Returns the type facture.
     */
    public function getTypeFacture(): ?int {
        return $this->typeFacture;
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
     * Set the code analytique.
     *
     * @param string|null $codeAnalytique The code analytique.
     * @return Clients Returns this Clients.
     */
    public function setCodeAnalytique(?string $codeAnalytique): Clients {
        $this->codeAnalytique = $codeAnalytique;
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
     * Set the code mode reglement.
     *
     * @param string|null $codeModeReglement The code mode reglement.
     * @return Clients Returns this Clients.
     */
    public function setCodeModeReglement(?string $codeModeReglement): Clients {
        $this->codeModeReglement = $codeModeReglement;
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
     * Set the collectif comptable.
     *
     * @param int|null $collectifComptable The collectif comptable.
     * @return Clients Returns this Clients.
     */
    public function setCollectifComptable(?int $collectifComptable): Clients {
        $this->collectifComptable = $collectifComptable;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return Clients Returns this Clients.
     */
    public function setCommentaire(?string $commentaire): Clients {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     * @return Clients Returns this Clients.
     */
    public function setDateCreat(?DateTime $dateCreat): Clients {
        $this->dateCreat = $dateCreat;
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
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return Clients Returns this Clients.
     */
    public function setDateModif(?DateTime $dateModif): Clients {
        $this->dateModif = $dateModif;
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
     * Set the derniere annee facturee.
     *
     * @param int|null $derniereAnneeFacturee The derniere annee facturee.
     * @return Clients Returns this Clients.
     */
    public function setDerniereAnneeFacturee(?int $derniereAnneeFacturee): Clients {
        $this->derniereAnneeFacturee = $derniereAnneeFacturee;
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
     * Set the echeance depart.
     *
     * @param int|null $echeanceDepart The echeance depart.
     * @return Clients Returns this Clients.
     */
    public function setEcheanceDepart(?int $echeanceDepart): Clients {
        $this->echeanceDepart = $echeanceDepart;
        return $this;
    }

    /**
     * Set the echeance le.
     *
     * @param int|null $echeanceLe The echeance le.
     * @return Clients Returns this Clients.
     */
    public function setEcheanceLe(?int $echeanceLe): Clients {
        $this->echeanceLe = $echeanceLe;
        return $this;
    }

    /**
     * Set the echeance nb jours.
     *
     * @param int|null $echeanceNbJours The echeance nb jours.
     * @return Clients Returns this Clients.
     */
    public function setEcheanceNbJours(?int $echeanceNbJours): Clients {
        $this->echeanceNbJours = $echeanceNbJours;
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
     * Set the id.
     *
     * @param string|null $id The id.
     * @return Clients Returns this Clients.
     */
    public function setId(?string $id): Clients {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the nb bl.
     *
     * @param int|null $nbBl The nb bl.
     * @return Clients Returns this Clients.
     */
    public function setNbBl(?int $nbBl): Clients {
        $this->nbBl = $nbBl;
        return $this;
    }

    /**
     * Set the nb facture.
     *
     * @param int|null $nbFacture The nb facture.
     * @return Clients Returns this Clients.
     */
    public function setNbFacture(?int $nbFacture): Clients {
        $this->nbFacture = $nbFacture;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param int|null $nombreEcheances The nombre echeances.
     * @return Clients Returns this Clients.
     */
    public function setNombreEcheances(?int $nombreEcheances): Clients {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the num cpt collectif.
     *
     * @param string|null $numCptCollectif The num cpt collectif.
     * @return Clients Returns this Clients.
     */
    public function setNumCptCollectif(?string $numCptCollectif): Clients {
        $this->numCptCollectif = $numCptCollectif;
        return $this;
    }

    /**
     * Set the num cpt comptable.
     *
     * @param string|null $numCptComptable The num cpt comptable.
     * @return Clients Returns this Clients.
     */
    public function setNumCptComptable(?string $numCptComptable): Clients {
        $this->numCptComptable = $numCptComptable;
        return $this;
    }

    /**
     * Set the premiere annee facturee.
     *
     * @param int|null $premiereAnneeFacturee The premiere annee facturee.
     * @return Clients Returns this Clients.
     */
    public function setPremiereAnneeFacturee(?int $premiereAnneeFacturee): Clients {
        $this->premiereAnneeFacturee = $premiereAnneeFacturee;
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
     * Set the remise pied1.
     *
     * @param float|null $remisePied1 The remise pied1.
     * @return Clients Returns this Clients.
     */
    public function setRemisePied1(?float $remisePied1): Clients {
        $this->remisePied1 = $remisePied1;
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
     * Set the taux escompte.
     *
     * @param float|null $tauxEscompte The taux escompte.
     * @return Clients Returns this Clients.
     */
    public function setTauxEscompte(?float $tauxEscompte): Clients {
        $this->tauxEscompte = $tauxEscompte;
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
     * Set the type facture.
     *
     * @param int|null $typeFacture The type facture.
     * @return Clients Returns this Clients.
     */
    public function setTypeFacture(?int $typeFacture): Clients {
        $this->typeFacture = $typeFacture;
        return $this;
    }
}
