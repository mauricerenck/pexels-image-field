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
 * Groupes fournisseur.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class GroupesFournisseur {

    /**
     * Code fournisseur.
     *
     * @var string|null
     */
    private $codeFournisseur;

    /**
     * Code imputation analytique.
     *
     * @var string|null
     */
    private $codeImputationAnalytique;

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
     * Delai le.
     *
     * @var int|null
     */
    private $delaiLe;

    /**
     * Delai nombre.
     *
     * @var int|null
     */
    private $delaiNombre;

    /**
     * Delai type.
     *
     * @var int|null
     */
    private $delaiType;

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
     * Facture euros.
     *
     * @var bool|null
     */
    private $factureEuros;

    /**
     * Fournisseur perdu.
     *
     * @var bool|null
     */
    private $fournisseurPerdu;

    /**
     * Groupe.
     *
     * @var string|null
     */
    private $groupe;

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
     * Reference piece.
     *
     * @var string|null
     */
    private $referencePiece;

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
     * Transporteur.
     *
     * @var string|null
     */
    private $transporteur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code fournisseur.
     *
     * @return string|null Returns the code fournisseur.
     */
    public function getCodeFournisseur(): ?string {
        return $this->codeFournisseur;
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
     * Get the delai le.
     *
     * @return int|null Returns the delai le.
     */
    public function getDelaiLe(): ?int {
        return $this->delaiLe;
    }

    /**
     * Get the delai nombre.
     *
     * @return int|null Returns the delai nombre.
     */
    public function getDelaiNombre(): ?int {
        return $this->delaiNombre;
    }

    /**
     * Get the delai type.
     *
     * @return int|null Returns the delai type.
     */
    public function getDelaiType(): ?int {
        return $this->delaiType;
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
     * Get the facture euros.
     *
     * @return bool|null Returns the facture euros.
     */
    public function getFactureEuros(): ?bool {
        return $this->factureEuros;
    }

    /**
     * Get the fournisseur perdu.
     *
     * @return bool|null Returns the fournisseur perdu.
     */
    public function getFournisseurPerdu(): ?bool {
        return $this->fournisseurPerdu;
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
     * Get the reference piece.
     *
     * @return string|null Returns the reference piece.
     */
    public function getReferencePiece(): ?string {
        return $this->referencePiece;
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
     * Get the transporteur.
     *
     * @return string|null Returns the transporteur.
     */
    public function getTransporteur(): ?string {
        return $this->transporteur;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string|null $codeFournisseur The code fournisseur.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setCodeFournisseur(?string $codeFournisseur): GroupesFournisseur {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code imputation analytique.
     *
     * @param string|null $codeImputationAnalytique The code imputation analytique.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setCodeImputationAnalytique(?string $codeImputationAnalytique): GroupesFournisseur {
        $this->codeImputationAnalytique = $codeImputationAnalytique;
        return $this;
    }

    /**
     * Set the code reglement.
     *
     * @param string|null $codeReglement The code reglement.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setCodeReglement(?string $codeReglement): GroupesFournisseur {
        $this->codeReglement = $codeReglement;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setCodeTva(?string $codeTva): GroupesFournisseur {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string|null $codeVentilCompta The code ventil compta.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setCodeVentilCompta(?string $codeVentilCompta): GroupesFournisseur {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the collectif.
     *
     * @param string|null $collectif The collectif.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setCollectif(?string $collectif): GroupesFournisseur {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setDateEntree(?DateTime $dateEntree): GroupesFournisseur {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setDateSortie(?DateTime $dateSortie): GroupesFournisseur {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the delai le.
     *
     * @param int|null $delaiLe The delai le.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setDelaiLe(?int $delaiLe): GroupesFournisseur {
        $this->delaiLe = $delaiLe;
        return $this;
    }

    /**
     * Set the delai nombre.
     *
     * @param int|null $delaiNombre The delai nombre.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setDelaiNombre(?int $delaiNombre): GroupesFournisseur {
        $this->delaiNombre = $delaiNombre;
        return $this;
    }

    /**
     * Set the delai type.
     *
     * @param int|null $delaiType The delai type.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setDelaiType(?int $delaiType): GroupesFournisseur {
        $this->delaiType = $delaiType;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string|null $domiciliationBancaire1 The domiciliation bancaire1.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setDomiciliationBancaire1(?string $domiciliationBancaire1): GroupesFournisseur {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string|null $domiciliationBancaire2 The domiciliation bancaire2.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setDomiciliationBancaire2(?string $domiciliationBancaire2): GroupesFournisseur {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the facture euros.
     *
     * @param bool|null $factureEuros The facture euros.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setFactureEuros(?bool $factureEuros): GroupesFournisseur {
        $this->factureEuros = $factureEuros;
        return $this;
    }

    /**
     * Set the fournisseur perdu.
     *
     * @param bool|null $fournisseurPerdu The fournisseur perdu.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setFournisseurPerdu(?bool $fournisseurPerdu): GroupesFournisseur {
        $this->fournisseurPerdu = $fournisseurPerdu;
        return $this;
    }

    /**
     * Set the groupe.
     *
     * @param string|null $groupe The groupe.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setGroupe(?string $groupe): GroupesFournisseur {
        $this->groupe = $groupe;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string|null $nombreEcheances The nombre echeances.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setNombreEcheances(?string $nombreEcheances): GroupesFournisseur {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setNumeroCompte(?string $numeroCompte): GroupesFournisseur {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param string|null $paiementDepartLe The paiement depart le.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setPaiementDepartLe(?string $paiementDepartLe): GroupesFournisseur {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param string|null $paiementLe The paiement le.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setPaiementLe(?string $paiementLe): GroupesFournisseur {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int|null $paiementNombreDeJours The paiement nombre de jours.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setPaiementNombreDeJours(?int $paiementNombreDeJours): GroupesFournisseur {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the reference piece.
     *
     * @param string|null $referencePiece The reference piece.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setReferencePiece(?string $referencePiece): GroupesFournisseur {
        $this->referencePiece = $referencePiece;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float|null $remiseLigne1 The remise ligne1.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setRemiseLigne1(?float $remiseLigne1): GroupesFournisseur {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float|null $remiseLigne2 The remise ligne2.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setRemiseLigne2(?float $remiseLigne2): GroupesFournisseur {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float|null $remiseLigne3 The remise ligne3.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setRemiseLigne3(?float $remiseLigne3): GroupesFournisseur {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float|null $remisePied The remise pied.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setRemisePied(?float $remisePied): GroupesFournisseur {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the remise pied2.
     *
     * @param float|null $remisePied2 The remise pied2.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setRemisePied2(?float $remisePied2): GroupesFournisseur {
        $this->remisePied2 = $remisePied2;
        return $this;
    }

    /**
     * Set the remise pied3.
     *
     * @param float|null $remisePied3 The remise pied3.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setRemisePied3(?float $remisePied3): GroupesFournisseur {
        $this->remisePied3 = $remisePied3;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setRib(?string $rib): GroupesFournisseur {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param bool|null $soumisEscompte The soumis escompte.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setSoumisEscompte(?bool $soumisEscompte): GroupesFournisseur {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float|null $tauxEscompte The taux escompte.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setTauxEscompte(?float $tauxEscompte): GroupesFournisseur {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the transporteur.
     *
     * @param string|null $transporteur The transporteur.
     * @return GroupesFournisseur Returns this Groupes fournisseur.
     */
    public function setTransporteur(?string $transporteur): GroupesFournisseur {
        $this->transporteur = $transporteur;
        return $this;
    }
}
