<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Comptes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Comptes {

    /**
     * A lettrer auto.
     *
     * @var bool|null
     */
    private $aLettrerAuto;

    /**
     * Activer lot trace.
     *
     * @var bool|null
     */
    private $activerLotTrace;

    /**
     * Bon a payer.
     *
     * @var bool|null
     */
    private $bonAPayer;

    /**
     * Centralise gd livre.
     *
     * @var bool|null
     */
    private $centraliseGdLivre;

    /**
     * Cle deux.
     *
     * @var string|null
     */
    private $cleDeux;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code devise.
     *
     * @var string|null
     */
    private $codeDevise;

    /**
     * Code regroup1.
     *
     * @var string|null
     */
    private $codeRegroup1;

    /**
     * Code regroup2.
     *
     * @var string|null
     */
    private $codeRegroup2;

    /**
     * Code regroup3.
     *
     * @var string|null
     */
    private $codeRegroup3;

    /**
     * Code regroup4.
     *
     * @var string|null
     */
    private $codeRegroup4;

    /**
     * Code repartition ana.
     *
     * @var string|null
     */
    private $codeRepartitionAna;

    /**
     * Code tva.
     *
     * @var string|null
     */
    private $codeTva;

    /**
     * Collectif.
     *
     * @var string|null
     */
    private $collectif;

    /**
     * Collectif1.
     *
     * @var string|null
     */
    private $collectif1;

    /**
     * Collectif2.
     *
     * @var string|null
     */
    private $collectif2;

    /**
     * Compte inactif.
     *
     * @var bool|null
     */
    private $compteInactif;

    /**
     * Contrepartie charge prod.
     *
     * @var string|null
     */
    private $contrepartieChargeProd;

    /**
     * Cpt particulier.
     *
     * @var bool|null
     */
    private $cptParticulier;

    /**
     * Cpt tva contrep cpr.
     *
     * @var string|null
     */
    private $cptTvaContrepCpr;

    /**
     * Credit.
     *
     * @var float|null
     */
    private $credit;

    /**
     * Credit1.
     *
     * @var float|null
     */
    private $credit1;

    /**
     * Credit2.
     *
     * @var float|null
     */
    private $credit2;

    /**
     * Credit hors ex.
     *
     * @var float|null
     */
    private $creditHorsEx;

    /**
     * Cumul pied journal.
     *
     * @var bool|null
     */
    private $cumulPiedJournal;

    /**
     * Date revision.
     *
     * @var DateTime|null
     */
    private $dateRevision;

    /**
     * Date sys creation.
     *
     * @var DateTime|null
     */
    private $dateSysCreation;

    /**
     * Debit.
     *
     * @var float|null
     */
    private $debit;

    /**
     * Debit1.
     *
     * @var float|null
     */
    private $debit1;

    /**
     * Debit2.
     *
     * @var float|null
     */
    private $debit2;

    /**
     * Debit hors ex.
     *
     * @var float|null
     */
    private $debitHorsEx;

    /**
     * Detail cloture.
     *
     * @var bool|null
     */
    private $detailCloture;

    /**
     * Edit m2.
     *
     * @var bool|null
     */
    private $editM2;

    /**
     * Etat revision.
     *
     * @var string|null
     */
    private $etatRevision;

    /**
     * Famille.
     *
     * @var string|null
     */
    private $famille;

    /**
     * Franchise.
     *
     * @var bool|null
     */
    private $franchise;

    /**
     * Gerer int cpt cour.
     *
     * @var bool|null
     */
    private $gererIntCptCour;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Intitule all.
     *
     * @var string|null
     */
    private $intituleAll;

    /**
     * Intitule ang.
     *
     * @var string|null
     */
    private $intituleAng;

    /**
     * Intitule esp.
     *
     * @var string|null
     */
    private $intituleEsp;

    /**
     * Intitule ita.
     *
     * @var string|null
     */
    private $intituleIta;

    /**
     * Intitule long.
     *
     * @var string|null
     */
    private $intituleLong;

    /**
     * Intra com.
     *
     * @var bool|null
     */
    private $intraCom;

    /**
     * Jal tre regl.
     *
     * @var string|null
     */
    private $jalTreRegl;

    /**
     * Libelle lot trace.
     *
     * @var string|null
     */
    private $libelleLotTrace;

    /**
     * Marge theorique.
     *
     * @var float|null
     */
    private $margeTheorique;

    /**
     * Methode tva.
     *
     * @var string|null
     */
    private $methodeTva;

    /**
     * Nb ecritures.
     *
     * @var int|null
     */
    private $nbEcritures;

    /**
     * Niveau droit.
     *
     * @var string|null
     */
    private $niveauDroit;

    /**
     * No doss reflechi.
     *
     * @var string|null
     */
    private $noDossReflechi;

    /**
     * No prochain lettrage.
     *
     * @var int|null
     */
    private $noProchainLettrage;

    /**
     * Num cpt reflechi.
     *
     * @var string|null
     */
    private $numCptReflechi;

    /**
     * Numero.
     *
     * @var string|null
     */
    private $numero;

    /**
     * Periodicite.
     *
     * @var bool|null
     */
    private $periodicite;

    /**
     * Personne morale.
     *
     * @var bool|null
     */
    private $personneMorale;

    /**
     * Presta tel.
     *
     * @var bool|null
     */
    private $prestaTel;

    /**
     * Prestataire.
     *
     * @var int|null
     */
    private $prestataire;

    /**
     * Prix moyen nb dec.
     *
     * @var int|null
     */
    private $prixMoyenNbDec;

    /**
     * Prix moyen nb dec2.
     *
     * @var int|null
     */
    private $prixMoyenNbDec2;

    /**
     * Prix moyen nb entier.
     *
     * @var int|null
     */
    private $prixMoyenNbEntier;

    /**
     * Prix moyen nb entier2.
     *
     * @var int|null
     */
    private $prixMoyenNbEntier2;

    /**
     * Prochaine lettre.
     *
     * @var string|null
     */
    private $prochaineLettre;

    /**
     * Prochaine lettre tiers.
     *
     * @var string|null
     */
    private $prochaineLettreTiers;

    /**
     * Quantite libelle.
     *
     * @var string|null
     */
    private $quantiteLibelle;

    /**
     * Quantite libelle2.
     *
     * @var string|null
     */
    private $quantiteLibelle2;

    /**
     * Quantite nb dec.
     *
     * @var int|null
     */
    private $quantiteNbDec;

    /**
     * Quantite nb dec2.
     *
     * @var int|null
     */
    private $quantiteNbDec2;

    /**
     * Quantite nb entier.
     *
     * @var int|null
     */
    private $quantiteNbEntier;

    /**
     * Quantite nb entier2.
     *
     * @var int|null
     */
    private $quantiteNbEntier2;

    /**
     * Ref image.
     *
     * @var string|null
     */
    private $refImage;

    /**
     * Reference fournisseur.
     *
     * @var string|null
     */
    private $referenceFournisseur;

    /**
     * Repartition ana.
     *
     * @var string|null
     */
    private $repartitionAna;

    /**
     * Repartition auto.
     *
     * @var bool|null
     */
    private $repartitionAuto;

    /**
     * Rubrique bilan1.
     *
     * @var string|null
     */
    private $rubriqueBilan1;

    /**
     * Rubrique bilan2.
     *
     * @var string|null
     */
    private $rubriqueBilan2;

    /**
     * Suivi devises.
     *
     * @var bool|null
     */
    private $suiviDevises;

    /**
     * Suivi quantite.
     *
     * @var bool|null
     */
    private $suiviQuantite;

    /**
     * Suivi quantite2.
     *
     * @var bool|null
     */
    private $suiviQuantite2;

    /**
     * Tva autres ope impos.
     *
     * @var bool|null
     */
    private $tvaAutresOpeImpos;

    /**
     * Tva dom.
     *
     * @var bool|null
     */
    private $tvaDom;

    /**
     * Tva encaissement.
     *
     * @var bool|null
     */
    private $tvaEncaissement;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Type collectif.
     *
     * @var bool|null
     */
    private $typeCollectif;

    /**
     * Type cpt tiers.
     *
     * @var string|null
     */
    private $typeCptTiers;

    /**
     * Type intra com.
     *
     * @var int|null
     */
    private $typeIntraCom;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a lettrer auto.
     *
     * @return bool|null Returns the a lettrer auto.
     */
    public function getALettrerAuto(): ?bool {
        return $this->aLettrerAuto;
    }

    /**
     * Get the activer lot trace.
     *
     * @return bool|null Returns the activer lot trace.
     */
    public function getActiverLotTrace(): ?bool {
        return $this->activerLotTrace;
    }

    /**
     * Get the bon a payer.
     *
     * @return bool|null Returns the bon a payer.
     */
    public function getBonAPayer(): ?bool {
        return $this->bonAPayer;
    }

    /**
     * Get the centralise gd livre.
     *
     * @return bool|null Returns the centralise gd livre.
     */
    public function getCentraliseGdLivre(): ?bool {
        return $this->centraliseGdLivre;
    }

    /**
     * Get the cle deux.
     *
     * @return string|null Returns the cle deux.
     */
    public function getCleDeux(): ?string {
        return $this->cleDeux;
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
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
     * Get the code regroup1.
     *
     * @return string|null Returns the code regroup1.
     */
    public function getCodeRegroup1(): ?string {
        return $this->codeRegroup1;
    }

    /**
     * Get the code regroup2.
     *
     * @return string|null Returns the code regroup2.
     */
    public function getCodeRegroup2(): ?string {
        return $this->codeRegroup2;
    }

    /**
     * Get the code regroup3.
     *
     * @return string|null Returns the code regroup3.
     */
    public function getCodeRegroup3(): ?string {
        return $this->codeRegroup3;
    }

    /**
     * Get the code regroup4.
     *
     * @return string|null Returns the code regroup4.
     */
    public function getCodeRegroup4(): ?string {
        return $this->codeRegroup4;
    }

    /**
     * Get the code repartition ana.
     *
     * @return string|null Returns the code repartition ana.
     */
    public function getCodeRepartitionAna(): ?string {
        return $this->codeRepartitionAna;
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
     * Get the collectif.
     *
     * @return string|null Returns the collectif.
     */
    public function getCollectif(): ?string {
        return $this->collectif;
    }

    /**
     * Get the collectif1.
     *
     * @return string|null Returns the collectif1.
     */
    public function getCollectif1(): ?string {
        return $this->collectif1;
    }

    /**
     * Get the collectif2.
     *
     * @return string|null Returns the collectif2.
     */
    public function getCollectif2(): ?string {
        return $this->collectif2;
    }

    /**
     * Get the compte inactif.
     *
     * @return bool|null Returns the compte inactif.
     */
    public function getCompteInactif(): ?bool {
        return $this->compteInactif;
    }

    /**
     * Get the contrepartie charge prod.
     *
     * @return string|null Returns the contrepartie charge prod.
     */
    public function getContrepartieChargeProd(): ?string {
        return $this->contrepartieChargeProd;
    }

    /**
     * Get the cpt particulier.
     *
     * @return bool|null Returns the cpt particulier.
     */
    public function getCptParticulier(): ?bool {
        return $this->cptParticulier;
    }

    /**
     * Get the cpt tva contrep cpr.
     *
     * @return string|null Returns the cpt tva contrep cpr.
     */
    public function getCptTvaContrepCpr(): ?string {
        return $this->cptTvaContrepCpr;
    }

    /**
     * Get the credit.
     *
     * @return float|null Returns the credit.
     */
    public function getCredit(): ?float {
        return $this->credit;
    }

    /**
     * Get the credit1.
     *
     * @return float|null Returns the credit1.
     */
    public function getCredit1(): ?float {
        return $this->credit1;
    }

    /**
     * Get the credit2.
     *
     * @return float|null Returns the credit2.
     */
    public function getCredit2(): ?float {
        return $this->credit2;
    }

    /**
     * Get the credit hors ex.
     *
     * @return float|null Returns the credit hors ex.
     */
    public function getCreditHorsEx(): ?float {
        return $this->creditHorsEx;
    }

    /**
     * Get the cumul pied journal.
     *
     * @return bool|null Returns the cumul pied journal.
     */
    public function getCumulPiedJournal(): ?bool {
        return $this->cumulPiedJournal;
    }

    /**
     * Get the date revision.
     *
     * @return DateTime|null Returns the date revision.
     */
    public function getDateRevision(): ?DateTime {
        return $this->dateRevision;
    }

    /**
     * Get the date sys creation.
     *
     * @return DateTime|null Returns the date sys creation.
     */
    public function getDateSysCreation(): ?DateTime {
        return $this->dateSysCreation;
    }

    /**
     * Get the debit.
     *
     * @return float|null Returns the debit.
     */
    public function getDebit(): ?float {
        return $this->debit;
    }

    /**
     * Get the debit1.
     *
     * @return float|null Returns the debit1.
     */
    public function getDebit1(): ?float {
        return $this->debit1;
    }

    /**
     * Get the debit2.
     *
     * @return float|null Returns the debit2.
     */
    public function getDebit2(): ?float {
        return $this->debit2;
    }

    /**
     * Get the debit hors ex.
     *
     * @return float|null Returns the debit hors ex.
     */
    public function getDebitHorsEx(): ?float {
        return $this->debitHorsEx;
    }

    /**
     * Get the detail cloture.
     *
     * @return bool|null Returns the detail cloture.
     */
    public function getDetailCloture(): ?bool {
        return $this->detailCloture;
    }

    /**
     * Get the edit m2.
     *
     * @return bool|null Returns the edit m2.
     */
    public function getEditM2(): ?bool {
        return $this->editM2;
    }

    /**
     * Get the etat revision.
     *
     * @return string|null Returns the etat revision.
     */
    public function getEtatRevision(): ?string {
        return $this->etatRevision;
    }

    /**
     * Get the famille.
     *
     * @return string|null Returns the famille.
     */
    public function getFamille(): ?string {
        return $this->famille;
    }

    /**
     * Get the franchise.
     *
     * @return bool|null Returns the franchise.
     */
    public function getFranchise(): ?bool {
        return $this->franchise;
    }

    /**
     * Get the gerer int cpt cour.
     *
     * @return bool|null Returns the gerer int cpt cour.
     */
    public function getGererIntCptCour(): ?bool {
        return $this->gererIntCptCour;
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the intitule all.
     *
     * @return string|null Returns the intitule all.
     */
    public function getIntituleAll(): ?string {
        return $this->intituleAll;
    }

    /**
     * Get the intitule ang.
     *
     * @return string|null Returns the intitule ang.
     */
    public function getIntituleAng(): ?string {
        return $this->intituleAng;
    }

    /**
     * Get the intitule esp.
     *
     * @return string|null Returns the intitule esp.
     */
    public function getIntituleEsp(): ?string {
        return $this->intituleEsp;
    }

    /**
     * Get the intitule ita.
     *
     * @return string|null Returns the intitule ita.
     */
    public function getIntituleIta(): ?string {
        return $this->intituleIta;
    }

    /**
     * Get the intitule long.
     *
     * @return string|null Returns the intitule long.
     */
    public function getIntituleLong(): ?string {
        return $this->intituleLong;
    }

    /**
     * Get the intra com.
     *
     * @return bool|null Returns the intra com.
     */
    public function getIntraCom(): ?bool {
        return $this->intraCom;
    }

    /**
     * Get the jal tre regl.
     *
     * @return string|null Returns the jal tre regl.
     */
    public function getJalTreRegl(): ?string {
        return $this->jalTreRegl;
    }

    /**
     * Get the libelle lot trace.
     *
     * @return string|null Returns the libelle lot trace.
     */
    public function getLibelleLotTrace(): ?string {
        return $this->libelleLotTrace;
    }

    /**
     * Get the marge theorique.
     *
     * @return float|null Returns the marge theorique.
     */
    public function getMargeTheorique(): ?float {
        return $this->margeTheorique;
    }

    /**
     * Get the methode tva.
     *
     * @return string|null Returns the methode tva.
     */
    public function getMethodeTva(): ?string {
        return $this->methodeTva;
    }

    /**
     * Get the nb ecritures.
     *
     * @return int|null Returns the nb ecritures.
     */
    public function getNbEcritures(): ?int {
        return $this->nbEcritures;
    }

    /**
     * Get the niveau droit.
     *
     * @return string|null Returns the niveau droit.
     */
    public function getNiveauDroit(): ?string {
        return $this->niveauDroit;
    }

    /**
     * Get the no doss reflechi.
     *
     * @return string|null Returns the no doss reflechi.
     */
    public function getNoDossReflechi(): ?string {
        return $this->noDossReflechi;
    }

    /**
     * Get the no prochain lettrage.
     *
     * @return int|null Returns the no prochain lettrage.
     */
    public function getNoProchainLettrage(): ?int {
        return $this->noProchainLettrage;
    }

    /**
     * Get the num cpt reflechi.
     *
     * @return string|null Returns the num cpt reflechi.
     */
    public function getNumCptReflechi(): ?string {
        return $this->numCptReflechi;
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
     * Get the periodicite.
     *
     * @return bool|null Returns the periodicite.
     */
    public function getPeriodicite(): ?bool {
        return $this->periodicite;
    }

    /**
     * Get the personne morale.
     *
     * @return bool|null Returns the personne morale.
     */
    public function getPersonneMorale(): ?bool {
        return $this->personneMorale;
    }

    /**
     * Get the presta tel.
     *
     * @return bool|null Returns the presta tel.
     */
    public function getPrestaTel(): ?bool {
        return $this->prestaTel;
    }

    /**
     * Get the prestataire.
     *
     * @return int|null Returns the prestataire.
     */
    public function getPrestataire(): ?int {
        return $this->prestataire;
    }

    /**
     * Get the prix moyen nb dec.
     *
     * @return int|null Returns the prix moyen nb dec.
     */
    public function getPrixMoyenNbDec(): ?int {
        return $this->prixMoyenNbDec;
    }

    /**
     * Get the prix moyen nb dec2.
     *
     * @return int|null Returns the prix moyen nb dec2.
     */
    public function getPrixMoyenNbDec2(): ?int {
        return $this->prixMoyenNbDec2;
    }

    /**
     * Get the prix moyen nb entier.
     *
     * @return int|null Returns the prix moyen nb entier.
     */
    public function getPrixMoyenNbEntier(): ?int {
        return $this->prixMoyenNbEntier;
    }

    /**
     * Get the prix moyen nb entier2.
     *
     * @return int|null Returns the prix moyen nb entier2.
     */
    public function getPrixMoyenNbEntier2(): ?int {
        return $this->prixMoyenNbEntier2;
    }

    /**
     * Get the prochaine lettre.
     *
     * @return string|null Returns the prochaine lettre.
     */
    public function getProchaineLettre(): ?string {
        return $this->prochaineLettre;
    }

    /**
     * Get the prochaine lettre tiers.
     *
     * @return string|null Returns the prochaine lettre tiers.
     */
    public function getProchaineLettreTiers(): ?string {
        return $this->prochaineLettreTiers;
    }

    /**
     * Get the quantite libelle.
     *
     * @return string|null Returns the quantite libelle.
     */
    public function getQuantiteLibelle(): ?string {
        return $this->quantiteLibelle;
    }

    /**
     * Get the quantite libelle2.
     *
     * @return string|null Returns the quantite libelle2.
     */
    public function getQuantiteLibelle2(): ?string {
        return $this->quantiteLibelle2;
    }

    /**
     * Get the quantite nb dec.
     *
     * @return int|null Returns the quantite nb dec.
     */
    public function getQuantiteNbDec(): ?int {
        return $this->quantiteNbDec;
    }

    /**
     * Get the quantite nb dec2.
     *
     * @return int|null Returns the quantite nb dec2.
     */
    public function getQuantiteNbDec2(): ?int {
        return $this->quantiteNbDec2;
    }

    /**
     * Get the quantite nb entier.
     *
     * @return int|null Returns the quantite nb entier.
     */
    public function getQuantiteNbEntier(): ?int {
        return $this->quantiteNbEntier;
    }

    /**
     * Get the quantite nb entier2.
     *
     * @return int|null Returns the quantite nb entier2.
     */
    public function getQuantiteNbEntier2(): ?int {
        return $this->quantiteNbEntier2;
    }

    /**
     * Get the ref image.
     *
     * @return string|null Returns the ref image.
     */
    public function getRefImage(): ?string {
        return $this->refImage;
    }

    /**
     * Get the reference fournisseur.
     *
     * @return string|null Returns the reference fournisseur.
     */
    public function getReferenceFournisseur(): ?string {
        return $this->referenceFournisseur;
    }

    /**
     * Get the repartition ana.
     *
     * @return string|null Returns the repartition ana.
     */
    public function getRepartitionAna(): ?string {
        return $this->repartitionAna;
    }

    /**
     * Get the repartition auto.
     *
     * @return bool|null Returns the repartition auto.
     */
    public function getRepartitionAuto(): ?bool {
        return $this->repartitionAuto;
    }

    /**
     * Get the rubrique bilan1.
     *
     * @return string|null Returns the rubrique bilan1.
     */
    public function getRubriqueBilan1(): ?string {
        return $this->rubriqueBilan1;
    }

    /**
     * Get the rubrique bilan2.
     *
     * @return string|null Returns the rubrique bilan2.
     */
    public function getRubriqueBilan2(): ?string {
        return $this->rubriqueBilan2;
    }

    /**
     * Get the suivi devises.
     *
     * @return bool|null Returns the suivi devises.
     */
    public function getSuiviDevises(): ?bool {
        return $this->suiviDevises;
    }

    /**
     * Get the suivi quantite.
     *
     * @return bool|null Returns the suivi quantite.
     */
    public function getSuiviQuantite(): ?bool {
        return $this->suiviQuantite;
    }

    /**
     * Get the suivi quantite2.
     *
     * @return bool|null Returns the suivi quantite2.
     */
    public function getSuiviQuantite2(): ?bool {
        return $this->suiviQuantite2;
    }

    /**
     * Get the tva autres ope impos.
     *
     * @return bool|null Returns the tva autres ope impos.
     */
    public function getTvaAutresOpeImpos(): ?bool {
        return $this->tvaAutresOpeImpos;
    }

    /**
     * Get the tva dom.
     *
     * @return bool|null Returns the tva dom.
     */
    public function getTvaDom(): ?bool {
        return $this->tvaDom;
    }

    /**
     * Get the tva encaissement.
     *
     * @return bool|null Returns the tva encaissement.
     */
    public function getTvaEncaissement(): ?bool {
        return $this->tvaEncaissement;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Get the type collectif.
     *
     * @return bool|null Returns the type collectif.
     */
    public function getTypeCollectif(): ?bool {
        return $this->typeCollectif;
    }

    /**
     * Get the type cpt tiers.
     *
     * @return string|null Returns the type cpt tiers.
     */
    public function getTypeCptTiers(): ?string {
        return $this->typeCptTiers;
    }

    /**
     * Get the type intra com.
     *
     * @return int|null Returns the type intra com.
     */
    public function getTypeIntraCom(): ?int {
        return $this->typeIntraCom;
    }

    /**
     * Set the a lettrer auto.
     *
     * @param bool|null $aLettrerAuto The a lettrer auto.
     * @return Comptes Returns this Comptes.
     */
    public function setALettrerAuto(?bool $aLettrerAuto): Comptes {
        $this->aLettrerAuto = $aLettrerAuto;
        return $this;
    }

    /**
     * Set the activer lot trace.
     *
     * @param bool|null $activerLotTrace The activer lot trace.
     * @return Comptes Returns this Comptes.
     */
    public function setActiverLotTrace(?bool $activerLotTrace): Comptes {
        $this->activerLotTrace = $activerLotTrace;
        return $this;
    }

    /**
     * Set the bon a payer.
     *
     * @param bool|null $bonAPayer The bon a payer.
     * @return Comptes Returns this Comptes.
     */
    public function setBonAPayer(?bool $bonAPayer): Comptes {
        $this->bonAPayer = $bonAPayer;
        return $this;
    }

    /**
     * Set the centralise gd livre.
     *
     * @param bool|null $centraliseGdLivre The centralise gd livre.
     * @return Comptes Returns this Comptes.
     */
    public function setCentraliseGdLivre(?bool $centraliseGdLivre): Comptes {
        $this->centraliseGdLivre = $centraliseGdLivre;
        return $this;
    }

    /**
     * Set the cle deux.
     *
     * @param string|null $cleDeux The cle deux.
     * @return Comptes Returns this Comptes.
     */
    public function setCleDeux(?string $cleDeux): Comptes {
        $this->cleDeux = $cleDeux;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return Comptes Returns this Comptes.
     */
    public function setCodeAffaire(?string $codeAffaire): Comptes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return Comptes Returns this Comptes.
     */
    public function setCodeDevise(?string $codeDevise): Comptes {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code regroup1.
     *
     * @param string|null $codeRegroup1 The code regroup1.
     * @return Comptes Returns this Comptes.
     */
    public function setCodeRegroup1(?string $codeRegroup1): Comptes {
        $this->codeRegroup1 = $codeRegroup1;
        return $this;
    }

    /**
     * Set the code regroup2.
     *
     * @param string|null $codeRegroup2 The code regroup2.
     * @return Comptes Returns this Comptes.
     */
    public function setCodeRegroup2(?string $codeRegroup2): Comptes {
        $this->codeRegroup2 = $codeRegroup2;
        return $this;
    }

    /**
     * Set the code regroup3.
     *
     * @param string|null $codeRegroup3 The code regroup3.
     * @return Comptes Returns this Comptes.
     */
    public function setCodeRegroup3(?string $codeRegroup3): Comptes {
        $this->codeRegroup3 = $codeRegroup3;
        return $this;
    }

    /**
     * Set the code regroup4.
     *
     * @param string|null $codeRegroup4 The code regroup4.
     * @return Comptes Returns this Comptes.
     */
    public function setCodeRegroup4(?string $codeRegroup4): Comptes {
        $this->codeRegroup4 = $codeRegroup4;
        return $this;
    }

    /**
     * Set the code repartition ana.
     *
     * @param string|null $codeRepartitionAna The code repartition ana.
     * @return Comptes Returns this Comptes.
     */
    public function setCodeRepartitionAna(?string $codeRepartitionAna): Comptes {
        $this->codeRepartitionAna = $codeRepartitionAna;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return Comptes Returns this Comptes.
     */
    public function setCodeTva(?string $codeTva): Comptes {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the collectif.
     *
     * @param string|null $collectif The collectif.
     * @return Comptes Returns this Comptes.
     */
    public function setCollectif(?string $collectif): Comptes {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the collectif1.
     *
     * @param string|null $collectif1 The collectif1.
     * @return Comptes Returns this Comptes.
     */
    public function setCollectif1(?string $collectif1): Comptes {
        $this->collectif1 = $collectif1;
        return $this;
    }

    /**
     * Set the collectif2.
     *
     * @param string|null $collectif2 The collectif2.
     * @return Comptes Returns this Comptes.
     */
    public function setCollectif2(?string $collectif2): Comptes {
        $this->collectif2 = $collectif2;
        return $this;
    }

    /**
     * Set the compte inactif.
     *
     * @param bool|null $compteInactif The compte inactif.
     * @return Comptes Returns this Comptes.
     */
    public function setCompteInactif(?bool $compteInactif): Comptes {
        $this->compteInactif = $compteInactif;
        return $this;
    }

    /**
     * Set the contrepartie charge prod.
     *
     * @param string|null $contrepartieChargeProd The contrepartie charge prod.
     * @return Comptes Returns this Comptes.
     */
    public function setContrepartieChargeProd(?string $contrepartieChargeProd): Comptes {
        $this->contrepartieChargeProd = $contrepartieChargeProd;
        return $this;
    }

    /**
     * Set the cpt particulier.
     *
     * @param bool|null $cptParticulier The cpt particulier.
     * @return Comptes Returns this Comptes.
     */
    public function setCptParticulier(?bool $cptParticulier): Comptes {
        $this->cptParticulier = $cptParticulier;
        return $this;
    }

    /**
     * Set the cpt tva contrep cpr.
     *
     * @param string|null $cptTvaContrepCpr The cpt tva contrep cpr.
     * @return Comptes Returns this Comptes.
     */
    public function setCptTvaContrepCpr(?string $cptTvaContrepCpr): Comptes {
        $this->cptTvaContrepCpr = $cptTvaContrepCpr;
        return $this;
    }

    /**
     * Set the credit.
     *
     * @param float|null $credit The credit.
     * @return Comptes Returns this Comptes.
     */
    public function setCredit(?float $credit): Comptes {
        $this->credit = $credit;
        return $this;
    }

    /**
     * Set the credit1.
     *
     * @param float|null $credit1 The credit1.
     * @return Comptes Returns this Comptes.
     */
    public function setCredit1(?float $credit1): Comptes {
        $this->credit1 = $credit1;
        return $this;
    }

    /**
     * Set the credit2.
     *
     * @param float|null $credit2 The credit2.
     * @return Comptes Returns this Comptes.
     */
    public function setCredit2(?float $credit2): Comptes {
        $this->credit2 = $credit2;
        return $this;
    }

    /**
     * Set the credit hors ex.
     *
     * @param float|null $creditHorsEx The credit hors ex.
     * @return Comptes Returns this Comptes.
     */
    public function setCreditHorsEx(?float $creditHorsEx): Comptes {
        $this->creditHorsEx = $creditHorsEx;
        return $this;
    }

    /**
     * Set the cumul pied journal.
     *
     * @param bool|null $cumulPiedJournal The cumul pied journal.
     * @return Comptes Returns this Comptes.
     */
    public function setCumulPiedJournal(?bool $cumulPiedJournal): Comptes {
        $this->cumulPiedJournal = $cumulPiedJournal;
        return $this;
    }

    /**
     * Set the date revision.
     *
     * @param DateTime|null $dateRevision The date revision.
     * @return Comptes Returns this Comptes.
     */
    public function setDateRevision(?DateTime $dateRevision): Comptes {
        $this->dateRevision = $dateRevision;
        return $this;
    }

    /**
     * Set the date sys creation.
     *
     * @param DateTime|null $dateSysCreation The date sys creation.
     * @return Comptes Returns this Comptes.
     */
    public function setDateSysCreation(?DateTime $dateSysCreation): Comptes {
        $this->dateSysCreation = $dateSysCreation;
        return $this;
    }

    /**
     * Set the debit.
     *
     * @param float|null $debit The debit.
     * @return Comptes Returns this Comptes.
     */
    public function setDebit(?float $debit): Comptes {
        $this->debit = $debit;
        return $this;
    }

    /**
     * Set the debit1.
     *
     * @param float|null $debit1 The debit1.
     * @return Comptes Returns this Comptes.
     */
    public function setDebit1(?float $debit1): Comptes {
        $this->debit1 = $debit1;
        return $this;
    }

    /**
     * Set the debit2.
     *
     * @param float|null $debit2 The debit2.
     * @return Comptes Returns this Comptes.
     */
    public function setDebit2(?float $debit2): Comptes {
        $this->debit2 = $debit2;
        return $this;
    }

    /**
     * Set the debit hors ex.
     *
     * @param float|null $debitHorsEx The debit hors ex.
     * @return Comptes Returns this Comptes.
     */
    public function setDebitHorsEx(?float $debitHorsEx): Comptes {
        $this->debitHorsEx = $debitHorsEx;
        return $this;
    }

    /**
     * Set the detail cloture.
     *
     * @param bool|null $detailCloture The detail cloture.
     * @return Comptes Returns this Comptes.
     */
    public function setDetailCloture(?bool $detailCloture): Comptes {
        $this->detailCloture = $detailCloture;
        return $this;
    }

    /**
     * Set the edit m2.
     *
     * @param bool|null $editM2 The edit m2.
     * @return Comptes Returns this Comptes.
     */
    public function setEditM2(?bool $editM2): Comptes {
        $this->editM2 = $editM2;
        return $this;
    }

    /**
     * Set the etat revision.
     *
     * @param string|null $etatRevision The etat revision.
     * @return Comptes Returns this Comptes.
     */
    public function setEtatRevision(?string $etatRevision): Comptes {
        $this->etatRevision = $etatRevision;
        return $this;
    }

    /**
     * Set the famille.
     *
     * @param string|null $famille The famille.
     * @return Comptes Returns this Comptes.
     */
    public function setFamille(?string $famille): Comptes {
        $this->famille = $famille;
        return $this;
    }

    /**
     * Set the franchise.
     *
     * @param bool|null $franchise The franchise.
     * @return Comptes Returns this Comptes.
     */
    public function setFranchise(?bool $franchise): Comptes {
        $this->franchise = $franchise;
        return $this;
    }

    /**
     * Set the gerer int cpt cour.
     *
     * @param bool|null $gererIntCptCour The gerer int cpt cour.
     * @return Comptes Returns this Comptes.
     */
    public function setGererIntCptCour(?bool $gererIntCptCour): Comptes {
        $this->gererIntCptCour = $gererIntCptCour;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Comptes Returns this Comptes.
     */
    public function setIntitule(?string $intitule): Comptes {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule all.
     *
     * @param string|null $intituleAll The intitule all.
     * @return Comptes Returns this Comptes.
     */
    public function setIntituleAll(?string $intituleAll): Comptes {
        $this->intituleAll = $intituleAll;
        return $this;
    }

    /**
     * Set the intitule ang.
     *
     * @param string|null $intituleAng The intitule ang.
     * @return Comptes Returns this Comptes.
     */
    public function setIntituleAng(?string $intituleAng): Comptes {
        $this->intituleAng = $intituleAng;
        return $this;
    }

    /**
     * Set the intitule esp.
     *
     * @param string|null $intituleEsp The intitule esp.
     * @return Comptes Returns this Comptes.
     */
    public function setIntituleEsp(?string $intituleEsp): Comptes {
        $this->intituleEsp = $intituleEsp;
        return $this;
    }

    /**
     * Set the intitule ita.
     *
     * @param string|null $intituleIta The intitule ita.
     * @return Comptes Returns this Comptes.
     */
    public function setIntituleIta(?string $intituleIta): Comptes {
        $this->intituleIta = $intituleIta;
        return $this;
    }

    /**
     * Set the intitule long.
     *
     * @param string|null $intituleLong The intitule long.
     * @return Comptes Returns this Comptes.
     */
    public function setIntituleLong(?string $intituleLong): Comptes {
        $this->intituleLong = $intituleLong;
        return $this;
    }

    /**
     * Set the intra com.
     *
     * @param bool|null $intraCom The intra com.
     * @return Comptes Returns this Comptes.
     */
    public function setIntraCom(?bool $intraCom): Comptes {
        $this->intraCom = $intraCom;
        return $this;
    }

    /**
     * Set the jal tre regl.
     *
     * @param string|null $jalTreRegl The jal tre regl.
     * @return Comptes Returns this Comptes.
     */
    public function setJalTreRegl(?string $jalTreRegl): Comptes {
        $this->jalTreRegl = $jalTreRegl;
        return $this;
    }

    /**
     * Set the libelle lot trace.
     *
     * @param string|null $libelleLotTrace The libelle lot trace.
     * @return Comptes Returns this Comptes.
     */
    public function setLibelleLotTrace(?string $libelleLotTrace): Comptes {
        $this->libelleLotTrace = $libelleLotTrace;
        return $this;
    }

    /**
     * Set the marge theorique.
     *
     * @param float|null $margeTheorique The marge theorique.
     * @return Comptes Returns this Comptes.
     */
    public function setMargeTheorique(?float $margeTheorique): Comptes {
        $this->margeTheorique = $margeTheorique;
        return $this;
    }

    /**
     * Set the methode tva.
     *
     * @param string|null $methodeTva The methode tva.
     * @return Comptes Returns this Comptes.
     */
    public function setMethodeTva(?string $methodeTva): Comptes {
        $this->methodeTva = $methodeTva;
        return $this;
    }

    /**
     * Set the nb ecritures.
     *
     * @param int|null $nbEcritures The nb ecritures.
     * @return Comptes Returns this Comptes.
     */
    public function setNbEcritures(?int $nbEcritures): Comptes {
        $this->nbEcritures = $nbEcritures;
        return $this;
    }

    /**
     * Set the niveau droit.
     *
     * @param string|null $niveauDroit The niveau droit.
     * @return Comptes Returns this Comptes.
     */
    public function setNiveauDroit(?string $niveauDroit): Comptes {
        $this->niveauDroit = $niveauDroit;
        return $this;
    }

    /**
     * Set the no doss reflechi.
     *
     * @param string|null $noDossReflechi The no doss reflechi.
     * @return Comptes Returns this Comptes.
     */
    public function setNoDossReflechi(?string $noDossReflechi): Comptes {
        $this->noDossReflechi = $noDossReflechi;
        return $this;
    }

    /**
     * Set the no prochain lettrage.
     *
     * @param int|null $noProchainLettrage The no prochain lettrage.
     * @return Comptes Returns this Comptes.
     */
    public function setNoProchainLettrage(?int $noProchainLettrage): Comptes {
        $this->noProchainLettrage = $noProchainLettrage;
        return $this;
    }

    /**
     * Set the num cpt reflechi.
     *
     * @param string|null $numCptReflechi The num cpt reflechi.
     * @return Comptes Returns this Comptes.
     */
    public function setNumCptReflechi(?string $numCptReflechi): Comptes {
        $this->numCptReflechi = $numCptReflechi;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return Comptes Returns this Comptes.
     */
    public function setNumero(?string $numero): Comptes {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param bool|null $periodicite The periodicite.
     * @return Comptes Returns this Comptes.
     */
    public function setPeriodicite(?bool $periodicite): Comptes {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the personne morale.
     *
     * @param bool|null $personneMorale The personne morale.
     * @return Comptes Returns this Comptes.
     */
    public function setPersonneMorale(?bool $personneMorale): Comptes {
        $this->personneMorale = $personneMorale;
        return $this;
    }

    /**
     * Set the presta tel.
     *
     * @param bool|null $prestaTel The presta tel.
     * @return Comptes Returns this Comptes.
     */
    public function setPrestaTel(?bool $prestaTel): Comptes {
        $this->prestaTel = $prestaTel;
        return $this;
    }

    /**
     * Set the prestataire.
     *
     * @param int|null $prestataire The prestataire.
     * @return Comptes Returns this Comptes.
     */
    public function setPrestataire(?int $prestataire): Comptes {
        $this->prestataire = $prestataire;
        return $this;
    }

    /**
     * Set the prix moyen nb dec.
     *
     * @param int|null $prixMoyenNbDec The prix moyen nb dec.
     * @return Comptes Returns this Comptes.
     */
    public function setPrixMoyenNbDec(?int $prixMoyenNbDec): Comptes {
        $this->prixMoyenNbDec = $prixMoyenNbDec;
        return $this;
    }

    /**
     * Set the prix moyen nb dec2.
     *
     * @param int|null $prixMoyenNbDec2 The prix moyen nb dec2.
     * @return Comptes Returns this Comptes.
     */
    public function setPrixMoyenNbDec2(?int $prixMoyenNbDec2): Comptes {
        $this->prixMoyenNbDec2 = $prixMoyenNbDec2;
        return $this;
    }

    /**
     * Set the prix moyen nb entier.
     *
     * @param int|null $prixMoyenNbEntier The prix moyen nb entier.
     * @return Comptes Returns this Comptes.
     */
    public function setPrixMoyenNbEntier(?int $prixMoyenNbEntier): Comptes {
        $this->prixMoyenNbEntier = $prixMoyenNbEntier;
        return $this;
    }

    /**
     * Set the prix moyen nb entier2.
     *
     * @param int|null $prixMoyenNbEntier2 The prix moyen nb entier2.
     * @return Comptes Returns this Comptes.
     */
    public function setPrixMoyenNbEntier2(?int $prixMoyenNbEntier2): Comptes {
        $this->prixMoyenNbEntier2 = $prixMoyenNbEntier2;
        return $this;
    }

    /**
     * Set the prochaine lettre.
     *
     * @param string|null $prochaineLettre The prochaine lettre.
     * @return Comptes Returns this Comptes.
     */
    public function setProchaineLettre(?string $prochaineLettre): Comptes {
        $this->prochaineLettre = $prochaineLettre;
        return $this;
    }

    /**
     * Set the prochaine lettre tiers.
     *
     * @param string|null $prochaineLettreTiers The prochaine lettre tiers.
     * @return Comptes Returns this Comptes.
     */
    public function setProchaineLettreTiers(?string $prochaineLettreTiers): Comptes {
        $this->prochaineLettreTiers = $prochaineLettreTiers;
        return $this;
    }

    /**
     * Set the quantite libelle.
     *
     * @param string|null $quantiteLibelle The quantite libelle.
     * @return Comptes Returns this Comptes.
     */
    public function setQuantiteLibelle(?string $quantiteLibelle): Comptes {
        $this->quantiteLibelle = $quantiteLibelle;
        return $this;
    }

    /**
     * Set the quantite libelle2.
     *
     * @param string|null $quantiteLibelle2 The quantite libelle2.
     * @return Comptes Returns this Comptes.
     */
    public function setQuantiteLibelle2(?string $quantiteLibelle2): Comptes {
        $this->quantiteLibelle2 = $quantiteLibelle2;
        return $this;
    }

    /**
     * Set the quantite nb dec.
     *
     * @param int|null $quantiteNbDec The quantite nb dec.
     * @return Comptes Returns this Comptes.
     */
    public function setQuantiteNbDec(?int $quantiteNbDec): Comptes {
        $this->quantiteNbDec = $quantiteNbDec;
        return $this;
    }

    /**
     * Set the quantite nb dec2.
     *
     * @param int|null $quantiteNbDec2 The quantite nb dec2.
     * @return Comptes Returns this Comptes.
     */
    public function setQuantiteNbDec2(?int $quantiteNbDec2): Comptes {
        $this->quantiteNbDec2 = $quantiteNbDec2;
        return $this;
    }

    /**
     * Set the quantite nb entier.
     *
     * @param int|null $quantiteNbEntier The quantite nb entier.
     * @return Comptes Returns this Comptes.
     */
    public function setQuantiteNbEntier(?int $quantiteNbEntier): Comptes {
        $this->quantiteNbEntier = $quantiteNbEntier;
        return $this;
    }

    /**
     * Set the quantite nb entier2.
     *
     * @param int|null $quantiteNbEntier2 The quantite nb entier2.
     * @return Comptes Returns this Comptes.
     */
    public function setQuantiteNbEntier2(?int $quantiteNbEntier2): Comptes {
        $this->quantiteNbEntier2 = $quantiteNbEntier2;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string|null $refImage The ref image.
     * @return Comptes Returns this Comptes.
     */
    public function setRefImage(?string $refImage): Comptes {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the reference fournisseur.
     *
     * @param string|null $referenceFournisseur The reference fournisseur.
     * @return Comptes Returns this Comptes.
     */
    public function setReferenceFournisseur(?string $referenceFournisseur): Comptes {
        $this->referenceFournisseur = $referenceFournisseur;
        return $this;
    }

    /**
     * Set the repartition ana.
     *
     * @param string|null $repartitionAna The repartition ana.
     * @return Comptes Returns this Comptes.
     */
    public function setRepartitionAna(?string $repartitionAna): Comptes {
        $this->repartitionAna = $repartitionAna;
        return $this;
    }

    /**
     * Set the repartition auto.
     *
     * @param bool|null $repartitionAuto The repartition auto.
     * @return Comptes Returns this Comptes.
     */
    public function setRepartitionAuto(?bool $repartitionAuto): Comptes {
        $this->repartitionAuto = $repartitionAuto;
        return $this;
    }

    /**
     * Set the rubrique bilan1.
     *
     * @param string|null $rubriqueBilan1 The rubrique bilan1.
     * @return Comptes Returns this Comptes.
     */
    public function setRubriqueBilan1(?string $rubriqueBilan1): Comptes {
        $this->rubriqueBilan1 = $rubriqueBilan1;
        return $this;
    }

    /**
     * Set the rubrique bilan2.
     *
     * @param string|null $rubriqueBilan2 The rubrique bilan2.
     * @return Comptes Returns this Comptes.
     */
    public function setRubriqueBilan2(?string $rubriqueBilan2): Comptes {
        $this->rubriqueBilan2 = $rubriqueBilan2;
        return $this;
    }

    /**
     * Set the suivi devises.
     *
     * @param bool|null $suiviDevises The suivi devises.
     * @return Comptes Returns this Comptes.
     */
    public function setSuiviDevises(?bool $suiviDevises): Comptes {
        $this->suiviDevises = $suiviDevises;
        return $this;
    }

    /**
     * Set the suivi quantite.
     *
     * @param bool|null $suiviQuantite The suivi quantite.
     * @return Comptes Returns this Comptes.
     */
    public function setSuiviQuantite(?bool $suiviQuantite): Comptes {
        $this->suiviQuantite = $suiviQuantite;
        return $this;
    }

    /**
     * Set the suivi quantite2.
     *
     * @param bool|null $suiviQuantite2 The suivi quantite2.
     * @return Comptes Returns this Comptes.
     */
    public function setSuiviQuantite2(?bool $suiviQuantite2): Comptes {
        $this->suiviQuantite2 = $suiviQuantite2;
        return $this;
    }

    /**
     * Set the tva autres ope impos.
     *
     * @param bool|null $tvaAutresOpeImpos The tva autres ope impos.
     * @return Comptes Returns this Comptes.
     */
    public function setTvaAutresOpeImpos(?bool $tvaAutresOpeImpos): Comptes {
        $this->tvaAutresOpeImpos = $tvaAutresOpeImpos;
        return $this;
    }

    /**
     * Set the tva dom.
     *
     * @param bool|null $tvaDom The tva dom.
     * @return Comptes Returns this Comptes.
     */
    public function setTvaDom(?bool $tvaDom): Comptes {
        $this->tvaDom = $tvaDom;
        return $this;
    }

    /**
     * Set the tva encaissement.
     *
     * @param bool|null $tvaEncaissement The tva encaissement.
     * @return Comptes Returns this Comptes.
     */
    public function setTvaEncaissement(?bool $tvaEncaissement): Comptes {
        $this->tvaEncaissement = $tvaEncaissement;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Comptes Returns this Comptes.
     */
    public function setType(?string $type): Comptes {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the type collectif.
     *
     * @param bool|null $typeCollectif The type collectif.
     * @return Comptes Returns this Comptes.
     */
    public function setTypeCollectif(?bool $typeCollectif): Comptes {
        $this->typeCollectif = $typeCollectif;
        return $this;
    }

    /**
     * Set the type cpt tiers.
     *
     * @param string|null $typeCptTiers The type cpt tiers.
     * @return Comptes Returns this Comptes.
     */
    public function setTypeCptTiers(?string $typeCptTiers): Comptes {
        $this->typeCptTiers = $typeCptTiers;
        return $this;
    }

    /**
     * Set the type intra com.
     *
     * @param int|null $typeIntraCom The type intra com.
     * @return Comptes Returns this Comptes.
     */
    public function setTypeIntraCom(?int $typeIntraCom): Comptes {
        $this->typeIntraCom = $typeIntraCom;
        return $this;
    }
}
