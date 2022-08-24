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
 * Groupes client.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class GroupesClient {

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
     * Client perdu.
     *
     * @var bool|null
     */
    private $clientPerdu;

    /**
     * Code analytique.
     *
     * @var string|null
     */
    private $codeAnalytique;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code client fact.
     *
     * @var string|null
     */
    private $codeClientFact;

    /**
     * Code devise.
     *
     * @var string|null
     */
    private $codeDevise;

    /**
     * Code langue designation article.
     *
     * @var string|null
     */
    private $codeLangueDesignationArticle;

    /**
     * Code reglement.
     *
     * @var string|null
     */
    private $codeReglement;

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
     * Echeance fin decade.
     *
     * @var bool|null
     */
    private $echeanceFinDecade;

    /**
     * Facture euros.
     *
     * @var bool|null
     */
    private $factureEuros;

    /**
     * Groupe.
     *
     * @var string|null
     */
    private $groupe;

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
     * @var string|null
     */
    private $nombreEcheances;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Paiement depart le.
     *
     * @var string|null
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
     * Get the client perdu.
     *
     * @return bool|null Returns the client perdu.
     */
    public function getClientPerdu(): ?bool {
        return $this->clientPerdu;
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
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
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
     * Get the code devise.
     *
     * @return string|null Returns the code devise.
     */
    public function getCodeDevise(): ?string {
        return $this->codeDevise;
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
     * Get the code reglement.
     *
     * @return string|null Returns the code reglement.
     */
    public function getCodeReglement(): ?string {
        return $this->codeReglement;
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
     * Get the echeance fin decade.
     *
     * @return bool|null Returns the echeance fin decade.
     */
    public function getEcheanceFinDecade(): ?bool {
        return $this->echeanceFinDecade;
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
     * Get the groupe.
     *
     * @return string|null Returns the groupe.
     */
    public function getGroupe(): ?string {
        return $this->groupe;
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
     * @return string|null Returns the nombre echeances.
     */
    public function getNombreEcheances(): ?string {
        return $this->nombreEcheances;
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
     * Get the paiement depart le.
     *
     * @return string|null Returns the paiement depart le.
     */
    public function getPaiementDepartLe(): ?string {
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
     * @return GroupesClient Returns this Groupes client.
     */
    public function setActif(?bool $actif): GroupesClient {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the bloque.
     *
     * @param bool|null $bloque The bloque.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setBloque(?bool $bloque): GroupesClient {
        $this->bloque = $bloque;
        return $this;
    }

    /**
     * Set the cle alpha.
     *
     * @param string|null $cleAlpha The cle alpha.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setCleAlpha(?string $cleAlpha): GroupesClient {
        $this->cleAlpha = $cleAlpha;
        return $this;
    }

    /**
     * Set the client perdu.
     *
     * @param bool|null $clientPerdu The client perdu.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setClientPerdu(?bool $clientPerdu): GroupesClient {
        $this->clientPerdu = $clientPerdu;
        return $this;
    }

    /**
     * Set the code analytique.
     *
     * @param string|null $codeAnalytique The code analytique.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setCodeAnalytique(?string $codeAnalytique): GroupesClient {
        $this->codeAnalytique = $codeAnalytique;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setCodeClient(?string $codeClient): GroupesClient {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code client fact.
     *
     * @param string|null $codeClientFact The code client fact.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setCodeClientFact(?string $codeClientFact): GroupesClient {
        $this->codeClientFact = $codeClientFact;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setCodeDevise(?string $codeDevise): GroupesClient {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code langue designation article.
     *
     * @param string|null $codeLangueDesignationArticle The code langue designation article.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setCodeLangueDesignationArticle(?string $codeLangueDesignationArticle): GroupesClient {
        $this->codeLangueDesignationArticle = $codeLangueDesignationArticle;
        return $this;
    }

    /**
     * Set the code reglement.
     *
     * @param string|null $codeReglement The code reglement.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setCodeReglement(?string $codeReglement): GroupesClient {
        $this->codeReglement = $codeReglement;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setCodeTva(?string $codeTva): GroupesClient {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string|null $codeVentilCompta The code ventil compta.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setCodeVentilCompta(?string $codeVentilCompta): GroupesClient {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the collectif.
     *
     * @param string|null $collectif The collectif.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setCollectif(?string $collectif): GroupesClient {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setDateEntree(?DateTime $dateEntree): GroupesClient {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setDateSortie(?DateTime $dateSortie): GroupesClient {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string|null $domiciliationBancaire1 The domiciliation bancaire1.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setDomiciliationBancaire1(?string $domiciliationBancaire1): GroupesClient {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string|null $domiciliationBancaire2 The domiciliation bancaire2.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setDomiciliationBancaire2(?string $domiciliationBancaire2): GroupesClient {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the echeance fin decade.
     *
     * @param bool|null $echeanceFinDecade The echeance fin decade.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setEcheanceFinDecade(?bool $echeanceFinDecade): GroupesClient {
        $this->echeanceFinDecade = $echeanceFinDecade;
        return $this;
    }

    /**
     * Set the facture euros.
     *
     * @param bool|null $factureEuros The facture euros.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setFactureEuros(?bool $factureEuros): GroupesClient {
        $this->factureEuros = $factureEuros;
        return $this;
    }

    /**
     * Set the groupe.
     *
     * @param string|null $groupe The groupe.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setGroupe(?string $groupe): GroupesClient {
        $this->groupe = $groupe;
        return $this;
    }

    /**
     * Set the nb bl.
     *
     * @param int|null $nbBl The nb bl.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setNbBl(?int $nbBl): GroupesClient {
        $this->nbBl = $nbBl;
        return $this;
    }

    /**
     * Set the nb facture.
     *
     * @param int|null $nbFacture The nb facture.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setNbFacture(?int $nbFacture): GroupesClient {
        $this->nbFacture = $nbFacture;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string|null $nombreEcheances The nombre echeances.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setNombreEcheances(?string $nombreEcheances): GroupesClient {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setNumeroCompte(?string $numeroCompte): GroupesClient {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param string|null $paiementDepartLe The paiement depart le.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setPaiementDepartLe(?string $paiementDepartLe): GroupesClient {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param string|null $paiementLe The paiement le.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setPaiementLe(?string $paiementLe): GroupesClient {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int|null $paiementNombreDeJours The paiement nombre de jours.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setPaiementNombreDeJours(?int $paiementNombreDeJours): GroupesClient {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float|null $remiseLigne1 The remise ligne1.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setRemiseLigne1(?float $remiseLigne1): GroupesClient {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float|null $remiseLigne2 The remise ligne2.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setRemiseLigne2(?float $remiseLigne2): GroupesClient {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float|null $remiseLigne3 The remise ligne3.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setRemiseLigne3(?float $remiseLigne3): GroupesClient {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float|null $remisePied The remise pied.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setRemisePied(?float $remisePied): GroupesClient {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the remise pied2.
     *
     * @param float|null $remisePied2 The remise pied2.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setRemisePied2(?float $remisePied2): GroupesClient {
        $this->remisePied2 = $remisePied2;
        return $this;
    }

    /**
     * Set the remise pied3.
     *
     * @param float|null $remisePied3 The remise pied3.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setRemisePied3(?float $remisePied3): GroupesClient {
        $this->remisePied3 = $remisePied3;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setRib(?string $rib): GroupesClient {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param bool|null $soumisEscompte The soumis escompte.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setSoumisEscompte(?bool $soumisEscompte): GroupesClient {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float|null $tauxEscompte The taux escompte.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setTauxEscompte(?float $tauxEscompte): GroupesClient {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the type facture.
     *
     * @param int|null $typeFacture The type facture.
     * @return GroupesClient Returns this Groupes client.
     */
    public function setTypeFacture(?int $typeFacture): GroupesClient {
        $this->typeFacture = $typeFacture;
        return $this;
    }
}
