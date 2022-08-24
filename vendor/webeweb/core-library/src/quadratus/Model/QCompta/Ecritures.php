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
 * Ecritures.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Ecritures {

    /**
     * Actif.
     *
     * @var bool|null
     */
    private $actif;

    /**
     * Bic.
     *
     * @var string|null
     */
    private $bic;

    /**
     * Bons a payer.
     *
     * @var bool|null
     */
    private $bonsAPayer;

    /**
     * Centre.
     *
     * @var string|null
     */
    private $centre;

    /**
     * Centre simple.
     *
     * @var string|null
     */
    private $centreSimple;

    /**
     * Client ou frn.
     *
     * @var string|null
     */
    private $clientOuFrn;

    /**
     * Code banque.
     *
     * @var string|null
     */
    private $codeBanque;

    /**
     * Code devise.
     *
     * @var string|null
     */
    private $codeDevise;

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Code lettrage.
     *
     * @var string|null
     */
    private $codeLettrage;

    /**
     * Code lettrage tiers.
     *
     * @var string|null
     */
    private $codeLettrageTiers;

    /**
     * Code libelle auto.
     *
     * @var string|null
     */
    private $codeLibelleAuto;

    /**
     * Code operateur.
     *
     * @var string|null
     */
    private $codeOperateur;

    /**
     * Code tva.
     *
     * @var int|null
     */
    private $codeTva;

    /**
     * Compte contrepartie.
     *
     * @var string|null
     */
    private $compteContrepartie;

    /**
     * Date dec tva.
     *
     * @var DateTime|null
     */
    private $dateDecTva;

    /**
     * Date echeance.
     *
     * @var DateTime|null
     */
    private $dateEcheance;

    /**
     * Date pointage aux.
     *
     * @var DateTime|null
     */
    private $datePointageAux;

    /**
     * Date rappro bancaire.
     *
     * @var DateTime|null
     */
    private $dateRapproBancaire;

    /**
     * Date sys saisie.
     *
     * @var DateTime|null
     */
    private $dateSysSaisie;

    /**
     * Date sys validation.
     *
     * @var DateTime|null
     */
    private $dateSysValidation;

    /**
     * Dom banque.
     *
     * @var string|null
     */
    private $domBanque;

    /**
     * Echeance simple.
     *
     * @var DateTime|null
     */
    private $echeanceSimple;

    /**
     * Ecriture num.
     *
     * @var string|null
     */
    private $ecritureNum;

    /**
     * En litige.
     *
     * @var bool|null
     */
    private $enLitige;

    /**
     * Etat.
     *
     * @var int|null
     */
    private $etat;

    /**
     * Folio.
     *
     * @var int|null
     */
    private $folio;

    /**
     * Iban.
     *
     * @var string|null
     */
    private $iban;

    /**
     * Jour ecriture.
     *
     * @var string|null
     */
    private $jourEcriture;

    /**
     * Jrn rappro bancaire.
     *
     * @var string|null
     */
    private $jrnRapproBancaire;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Libelle memo.
     *
     * @var string|null
     */
    private $libelleMemo;

    /**
     * Ligne folio.
     *
     * @var int|null
     */
    private $ligneFolio;

    /**
     * Methode tva.
     *
     * @var string|null
     */
    private $methodeTva;

    /**
     * Milliemes ana.
     *
     * @var float|null
     */
    private $milliemesAna;

    /**
     * Mode paiement.
     *
     * @var string|null
     */
    private $modePaiement;

    /**
     * Montant ana.
     *
     * @var float|null
     */
    private $montantAna;

    /**
     * Montant saisi credit.
     *
     * @var float|null
     */
    private $montantSaisiCredit;

    /**
     * Montant saisi debit.
     *
     * @var float|null
     */
    private $montantSaisiDebit;

    /**
     * Montant tenu credit.
     *
     * @var float|null
     */
    private $montantTenuCredit;

    /**
     * Montant tenu debit.
     *
     * @var float|null
     */
    private $montantTenuDebit;

    /**
     * Mt dev force.
     *
     * @var bool|null
     */
    private $mtDevForce;

    /**
     * Nature.
     *
     * @var string|null
     */
    private $nature;

    /**
     * No lot ecritures.
     *
     * @var int|null
     */
    private $noLotEcritures;

    /**
     * No lot factor.
     *
     * @var int|null
     */
    private $noLotFactor;

    /**
     * No lot is.
     *
     * @var int|null
     */
    private $noLotIs;

    /**
     * No lot trace.
     *
     * @var string|null
     */
    private $noLotTrace;

    /**
     * Num cpt origine.
     *
     * @var string|null
     */
    private $numCptOrigine;

    /**
     * Num ecr eco.
     *
     * @var int|null
     */
    private $numEcrEco;

    /**
     * Num edit lettre paiement.
     *
     * @var int|null
     */
    private $numEditLettrePaiement;

    /**
     * Num lettrage.
     *
     * @var int|null
     */
    private $numLettrage;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Num mandat.
     *
     * @var int|null
     */
    private $numMandat;

    /**
     * Num uniq.
     *
     * @var int|null
     */
    private $numUniq;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Numero piece.
     *
     * @var string|null
     */
    private $numeroPiece;

    /**
     * Periode ecriture.
     *
     * @var DateTime|null
     */
    private $periodeEcriture;

    /**
     * Periodicite debut.
     *
     * @var DateTime|null
     */
    private $periodiciteDebut;

    /**
     * Periodicite fin.
     *
     * @var DateTime|null
     */
    private $periodiciteFin;

    /**
     * Piece interne.
     *
     * @var int|null
     */
    private $pieceInterne;

    /**
     * Prct repartition.
     *
     * @var float|null
     */
    private $prctRepartition;

    /**
     * Quantite.
     *
     * @var float|null
     */
    private $quantite;

    /**
     * Quantite2.
     *
     * @var float|null
     */
    private $quantite2;

    /**
     * Rappro bancaire ok.
     *
     * @var bool|null
     */
    private $rapproBancaireOk;

    /**
     * Ref image.
     *
     * @var string|null
     */
    private $refImage;

    /**
     * Reference tire.
     *
     * @var string|null
     */
    private $referenceTire;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Tva e4 bi.
     *
     * @var string|null
     */
    private $tvaE4Bi;

    /**
     * Tva e4 dr.
     *
     * @var string|null
     */
    private $tvaE4Dr;

    /**
     * Tva e4 mt.
     *
     * @var float|null
     */
    private $tvaE4Mt;

    /**
     * Type ligne.
     *
     * @var string|null
     */
    private $typeLigne;

    /**
     * Type saisie.
     *
     * @var string|null
     */
    private $typeSaisie;

    /**
     * Validee.
     *
     * @var bool|null
     */
    private $validee;

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
     * Get the bic.
     *
     * @return string|null Returns the bic.
     */
    public function getBic(): ?string {
        return $this->bic;
    }

    /**
     * Get the bons a payer.
     *
     * @return bool|null Returns the bons a payer.
     */
    public function getBonsAPayer(): ?bool {
        return $this->bonsAPayer;
    }

    /**
     * Get the centre.
     *
     * @return string|null Returns the centre.
     */
    public function getCentre(): ?string {
        return $this->centre;
    }

    /**
     * Get the centre simple.
     *
     * @return string|null Returns the centre simple.
     */
    public function getCentreSimple(): ?string {
        return $this->centreSimple;
    }

    /**
     * Get the client ou frn.
     *
     * @return string|null Returns the client ou frn.
     */
    public function getClientOuFrn(): ?string {
        return $this->clientOuFrn;
    }

    /**
     * Get the code banque.
     *
     * @return string|null Returns the code banque.
     */
    public function getCodeBanque(): ?string {
        return $this->codeBanque;
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
     * Get the code journal.
     *
     * @return string|null Returns the code journal.
     */
    public function getCodeJournal(): ?string {
        return $this->codeJournal;
    }

    /**
     * Get the code lettrage.
     *
     * @return string|null Returns the code lettrage.
     */
    public function getCodeLettrage(): ?string {
        return $this->codeLettrage;
    }

    /**
     * Get the code lettrage tiers.
     *
     * @return string|null Returns the code lettrage tiers.
     */
    public function getCodeLettrageTiers(): ?string {
        return $this->codeLettrageTiers;
    }

    /**
     * Get the code libelle auto.
     *
     * @return string|null Returns the code libelle auto.
     */
    public function getCodeLibelleAuto(): ?string {
        return $this->codeLibelleAuto;
    }

    /**
     * Get the code operateur.
     *
     * @return string|null Returns the code operateur.
     */
    public function getCodeOperateur(): ?string {
        return $this->codeOperateur;
    }

    /**
     * Get the code tva.
     *
     * @return int|null Returns the code tva.
     */
    public function getCodeTva(): ?int {
        return $this->codeTva;
    }

    /**
     * Get the compte contrepartie.
     *
     * @return string|null Returns the compte contrepartie.
     */
    public function getCompteContrepartie(): ?string {
        return $this->compteContrepartie;
    }

    /**
     * Get the date dec tva.
     *
     * @return DateTime|null Returns the date dec tva.
     */
    public function getDateDecTva(): ?DateTime {
        return $this->dateDecTva;
    }

    /**
     * Get the date echeance.
     *
     * @return DateTime|null Returns the date echeance.
     */
    public function getDateEcheance(): ?DateTime {
        return $this->dateEcheance;
    }

    /**
     * Get the date pointage aux.
     *
     * @return DateTime|null Returns the date pointage aux.
     */
    public function getDatePointageAux(): ?DateTime {
        return $this->datePointageAux;
    }

    /**
     * Get the date rappro bancaire.
     *
     * @return DateTime|null Returns the date rappro bancaire.
     */
    public function getDateRapproBancaire(): ?DateTime {
        return $this->dateRapproBancaire;
    }

    /**
     * Get the date sys saisie.
     *
     * @return DateTime|null Returns the date sys saisie.
     */
    public function getDateSysSaisie(): ?DateTime {
        return $this->dateSysSaisie;
    }

    /**
     * Get the date sys validation.
     *
     * @return DateTime|null Returns the date sys validation.
     */
    public function getDateSysValidation(): ?DateTime {
        return $this->dateSysValidation;
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
     * Get the echeance simple.
     *
     * @return DateTime|null Returns the echeance simple.
     */
    public function getEcheanceSimple(): ?DateTime {
        return $this->echeanceSimple;
    }

    /**
     * Get the ecriture num.
     *
     * @return string|null Returns the ecriture num.
     */
    public function getEcritureNum(): ?string {
        return $this->ecritureNum;
    }

    /**
     * Get the en litige.
     *
     * @return bool|null Returns the en litige.
     */
    public function getEnLitige(): ?bool {
        return $this->enLitige;
    }

    /**
     * Get the etat.
     *
     * @return int|null Returns the etat.
     */
    public function getEtat(): ?int {
        return $this->etat;
    }

    /**
     * Get the folio.
     *
     * @return int|null Returns the folio.
     */
    public function getFolio(): ?int {
        return $this->folio;
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
     * Get the jour ecriture.
     *
     * @return string|null Returns the jour ecriture.
     */
    public function getJourEcriture(): ?string {
        return $this->jourEcriture;
    }

    /**
     * Get the jrn rappro bancaire.
     *
     * @return string|null Returns the jrn rappro bancaire.
     */
    public function getJrnRapproBancaire(): ?string {
        return $this->jrnRapproBancaire;
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the libelle memo.
     *
     * @return string|null Returns the libelle memo.
     */
    public function getLibelleMemo(): ?string {
        return $this->libelleMemo;
    }

    /**
     * Get the ligne folio.
     *
     * @return int|null Returns the ligne folio.
     */
    public function getLigneFolio(): ?int {
        return $this->ligneFolio;
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
     * Get the milliemes ana.
     *
     * @return float|null Returns the milliemes ana.
     */
    public function getMilliemesAna(): ?float {
        return $this->milliemesAna;
    }

    /**
     * Get the mode paiement.
     *
     * @return string|null Returns the mode paiement.
     */
    public function getModePaiement(): ?string {
        return $this->modePaiement;
    }

    /**
     * Get the montant ana.
     *
     * @return float|null Returns the montant ana.
     */
    public function getMontantAna(): ?float {
        return $this->montantAna;
    }

    /**
     * Get the montant saisi credit.
     *
     * @return float|null Returns the montant saisi credit.
     */
    public function getMontantSaisiCredit(): ?float {
        return $this->montantSaisiCredit;
    }

    /**
     * Get the montant saisi debit.
     *
     * @return float|null Returns the montant saisi debit.
     */
    public function getMontantSaisiDebit(): ?float {
        return $this->montantSaisiDebit;
    }

    /**
     * Get the montant tenu credit.
     *
     * @return float|null Returns the montant tenu credit.
     */
    public function getMontantTenuCredit(): ?float {
        return $this->montantTenuCredit;
    }

    /**
     * Get the montant tenu debit.
     *
     * @return float|null Returns the montant tenu debit.
     */
    public function getMontantTenuDebit(): ?float {
        return $this->montantTenuDebit;
    }

    /**
     * Get the mt dev force.
     *
     * @return bool|null Returns the mt dev force.
     */
    public function getMtDevForce(): ?bool {
        return $this->mtDevForce;
    }

    /**
     * Get the nature.
     *
     * @return string|null Returns the nature.
     */
    public function getNature(): ?string {
        return $this->nature;
    }

    /**
     * Get the no lot ecritures.
     *
     * @return int|null Returns the no lot ecritures.
     */
    public function getNoLotEcritures(): ?int {
        return $this->noLotEcritures;
    }

    /**
     * Get the no lot factor.
     *
     * @return int|null Returns the no lot factor.
     */
    public function getNoLotFactor(): ?int {
        return $this->noLotFactor;
    }

    /**
     * Get the no lot is.
     *
     * @return int|null Returns the no lot is.
     */
    public function getNoLotIs(): ?int {
        return $this->noLotIs;
    }

    /**
     * Get the no lot trace.
     *
     * @return string|null Returns the no lot trace.
     */
    public function getNoLotTrace(): ?string {
        return $this->noLotTrace;
    }

    /**
     * Get the num cpt origine.
     *
     * @return string|null Returns the num cpt origine.
     */
    public function getNumCptOrigine(): ?string {
        return $this->numCptOrigine;
    }

    /**
     * Get the num ecr eco.
     *
     * @return int|null Returns the num ecr eco.
     */
    public function getNumEcrEco(): ?int {
        return $this->numEcrEco;
    }

    /**
     * Get the num edit lettre paiement.
     *
     * @return int|null Returns the num edit lettre paiement.
     */
    public function getNumEditLettrePaiement(): ?int {
        return $this->numEditLettrePaiement;
    }

    /**
     * Get the num lettrage.
     *
     * @return int|null Returns the num lettrage.
     */
    public function getNumLettrage(): ?int {
        return $this->numLettrage;
    }

    /**
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Get the num mandat.
     *
     * @return int|null Returns the num mandat.
     */
    public function getNumMandat(): ?int {
        return $this->numMandat;
    }

    /**
     * Get the num uniq.
     *
     * @return int|null Returns the num uniq.
     */
    public function getNumUniq(): ?int {
        return $this->numUniq;
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
     * Get the numero piece.
     *
     * @return string|null Returns the numero piece.
     */
    public function getNumeroPiece(): ?string {
        return $this->numeroPiece;
    }

    /**
     * Get the periode ecriture.
     *
     * @return DateTime|null Returns the periode ecriture.
     */
    public function getPeriodeEcriture(): ?DateTime {
        return $this->periodeEcriture;
    }

    /**
     * Get the periodicite debut.
     *
     * @return DateTime|null Returns the periodicite debut.
     */
    public function getPeriodiciteDebut(): ?DateTime {
        return $this->periodiciteDebut;
    }

    /**
     * Get the periodicite fin.
     *
     * @return DateTime|null Returns the periodicite fin.
     */
    public function getPeriodiciteFin(): ?DateTime {
        return $this->periodiciteFin;
    }

    /**
     * Get the piece interne.
     *
     * @return int|null Returns the piece interne.
     */
    public function getPieceInterne(): ?int {
        return $this->pieceInterne;
    }

    /**
     * Get the prct repartition.
     *
     * @return float|null Returns the prct repartition.
     */
    public function getPrctRepartition(): ?float {
        return $this->prctRepartition;
    }

    /**
     * Get the quantite.
     *
     * @return float|null Returns the quantite.
     */
    public function getQuantite(): ?float {
        return $this->quantite;
    }

    /**
     * Get the quantite2.
     *
     * @return float|null Returns the quantite2.
     */
    public function getQuantite2(): ?float {
        return $this->quantite2;
    }

    /**
     * Get the rappro bancaire ok.
     *
     * @return bool|null Returns the rappro bancaire ok.
     */
    public function getRapproBancaireOk(): ?bool {
        return $this->rapproBancaireOk;
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
     * Get the reference tire.
     *
     * @return string|null Returns the reference tire.
     */
    public function getReferenceTire(): ?string {
        return $this->referenceTire;
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
     * Get the tva e4 bi.
     *
     * @return string|null Returns the tva e4 bi.
     */
    public function getTvaE4Bi(): ?string {
        return $this->tvaE4Bi;
    }

    /**
     * Get the tva e4 dr.
     *
     * @return string|null Returns the tva e4 dr.
     */
    public function getTvaE4Dr(): ?string {
        return $this->tvaE4Dr;
    }

    /**
     * Get the tva e4 mt.
     *
     * @return float|null Returns the tva e4 mt.
     */
    public function getTvaE4Mt(): ?float {
        return $this->tvaE4Mt;
    }

    /**
     * Get the type ligne.
     *
     * @return string|null Returns the type ligne.
     */
    public function getTypeLigne(): ?string {
        return $this->typeLigne;
    }

    /**
     * Get the type saisie.
     *
     * @return string|null Returns the type saisie.
     */
    public function getTypeSaisie(): ?string {
        return $this->typeSaisie;
    }

    /**
     * Get the validee.
     *
     * @return bool|null Returns the validee.
     */
    public function getValidee(): ?bool {
        return $this->validee;
    }

    /**
     * Set the actif.
     *
     * @param bool|null $actif The actif.
     * @return Ecritures Returns this Ecritures.
     */
    public function setActif(?bool $actif): Ecritures {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the bic.
     *
     * @param string|null $bic The bic.
     * @return Ecritures Returns this Ecritures.
     */
    public function setBic(?string $bic): Ecritures {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the bons a payer.
     *
     * @param bool|null $bonsAPayer The bons a payer.
     * @return Ecritures Returns this Ecritures.
     */
    public function setBonsAPayer(?bool $bonsAPayer): Ecritures {
        $this->bonsAPayer = $bonsAPayer;
        return $this;
    }

    /**
     * Set the centre.
     *
     * @param string|null $centre The centre.
     * @return Ecritures Returns this Ecritures.
     */
    public function setCentre(?string $centre): Ecritures {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the centre simple.
     *
     * @param string|null $centreSimple The centre simple.
     * @return Ecritures Returns this Ecritures.
     */
    public function setCentreSimple(?string $centreSimple): Ecritures {
        $this->centreSimple = $centreSimple;
        return $this;
    }

    /**
     * Set the client ou frn.
     *
     * @param string|null $clientOuFrn The client ou frn.
     * @return Ecritures Returns this Ecritures.
     */
    public function setClientOuFrn(?string $clientOuFrn): Ecritures {
        $this->clientOuFrn = $clientOuFrn;
        return $this;
    }

    /**
     * Set the code banque.
     *
     * @param string|null $codeBanque The code banque.
     * @return Ecritures Returns this Ecritures.
     */
    public function setCodeBanque(?string $codeBanque): Ecritures {
        $this->codeBanque = $codeBanque;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return Ecritures Returns this Ecritures.
     */
    public function setCodeDevise(?string $codeDevise): Ecritures {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return Ecritures Returns this Ecritures.
     */
    public function setCodeJournal(?string $codeJournal): Ecritures {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the code lettrage.
     *
     * @param string|null $codeLettrage The code lettrage.
     * @return Ecritures Returns this Ecritures.
     */
    public function setCodeLettrage(?string $codeLettrage): Ecritures {
        $this->codeLettrage = $codeLettrage;
        return $this;
    }

    /**
     * Set the code lettrage tiers.
     *
     * @param string|null $codeLettrageTiers The code lettrage tiers.
     * @return Ecritures Returns this Ecritures.
     */
    public function setCodeLettrageTiers(?string $codeLettrageTiers): Ecritures {
        $this->codeLettrageTiers = $codeLettrageTiers;
        return $this;
    }

    /**
     * Set the code libelle auto.
     *
     * @param string|null $codeLibelleAuto The code libelle auto.
     * @return Ecritures Returns this Ecritures.
     */
    public function setCodeLibelleAuto(?string $codeLibelleAuto): Ecritures {
        $this->codeLibelleAuto = $codeLibelleAuto;
        return $this;
    }

    /**
     * Set the code operateur.
     *
     * @param string|null $codeOperateur The code operateur.
     * @return Ecritures Returns this Ecritures.
     */
    public function setCodeOperateur(?string $codeOperateur): Ecritures {
        $this->codeOperateur = $codeOperateur;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param int|null $codeTva The code tva.
     * @return Ecritures Returns this Ecritures.
     */
    public function setCodeTva(?int $codeTva): Ecritures {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the compte contrepartie.
     *
     * @param string|null $compteContrepartie The compte contrepartie.
     * @return Ecritures Returns this Ecritures.
     */
    public function setCompteContrepartie(?string $compteContrepartie): Ecritures {
        $this->compteContrepartie = $compteContrepartie;
        return $this;
    }

    /**
     * Set the date dec tva.
     *
     * @param DateTime|null $dateDecTva The date dec tva.
     * @return Ecritures Returns this Ecritures.
     */
    public function setDateDecTva(?DateTime $dateDecTva): Ecritures {
        $this->dateDecTva = $dateDecTva;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param DateTime|null $dateEcheance The date echeance.
     * @return Ecritures Returns this Ecritures.
     */
    public function setDateEcheance(?DateTime $dateEcheance): Ecritures {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the date pointage aux.
     *
     * @param DateTime|null $datePointageAux The date pointage aux.
     * @return Ecritures Returns this Ecritures.
     */
    public function setDatePointageAux(?DateTime $datePointageAux): Ecritures {
        $this->datePointageAux = $datePointageAux;
        return $this;
    }

    /**
     * Set the date rappro bancaire.
     *
     * @param DateTime|null $dateRapproBancaire The date rappro bancaire.
     * @return Ecritures Returns this Ecritures.
     */
    public function setDateRapproBancaire(?DateTime $dateRapproBancaire): Ecritures {
        $this->dateRapproBancaire = $dateRapproBancaire;
        return $this;
    }

    /**
     * Set the date sys saisie.
     *
     * @param DateTime|null $dateSysSaisie The date sys saisie.
     * @return Ecritures Returns this Ecritures.
     */
    public function setDateSysSaisie(?DateTime $dateSysSaisie): Ecritures {
        $this->dateSysSaisie = $dateSysSaisie;
        return $this;
    }

    /**
     * Set the date sys validation.
     *
     * @param DateTime|null $dateSysValidation The date sys validation.
     * @return Ecritures Returns this Ecritures.
     */
    public function setDateSysValidation(?DateTime $dateSysValidation): Ecritures {
        $this->dateSysValidation = $dateSysValidation;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string|null $domBanque The dom banque.
     * @return Ecritures Returns this Ecritures.
     */
    public function setDomBanque(?string $domBanque): Ecritures {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the echeance simple.
     *
     * @param DateTime|null $echeanceSimple The echeance simple.
     * @return Ecritures Returns this Ecritures.
     */
    public function setEcheanceSimple(?DateTime $echeanceSimple): Ecritures {
        $this->echeanceSimple = $echeanceSimple;
        return $this;
    }

    /**
     * Set the ecriture num.
     *
     * @param string|null $ecritureNum The ecriture num.
     * @return Ecritures Returns this Ecritures.
     */
    public function setEcritureNum(?string $ecritureNum): Ecritures {
        $this->ecritureNum = $ecritureNum;
        return $this;
    }

    /**
     * Set the en litige.
     *
     * @param bool|null $enLitige The en litige.
     * @return Ecritures Returns this Ecritures.
     */
    public function setEnLitige(?bool $enLitige): Ecritures {
        $this->enLitige = $enLitige;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param int|null $etat The etat.
     * @return Ecritures Returns this Ecritures.
     */
    public function setEtat(?int $etat): Ecritures {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the folio.
     *
     * @param int|null $folio The folio.
     * @return Ecritures Returns this Ecritures.
     */
    public function setFolio(?int $folio): Ecritures {
        $this->folio = $folio;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return Ecritures Returns this Ecritures.
     */
    public function setIban(?string $iban): Ecritures {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the jour ecriture.
     *
     * @param string|null $jourEcriture The jour ecriture.
     * @return Ecritures Returns this Ecritures.
     */
    public function setJourEcriture(?string $jourEcriture): Ecritures {
        $this->jourEcriture = $jourEcriture;
        return $this;
    }

    /**
     * Set the jrn rappro bancaire.
     *
     * @param string|null $jrnRapproBancaire The jrn rappro bancaire.
     * @return Ecritures Returns this Ecritures.
     */
    public function setJrnRapproBancaire(?string $jrnRapproBancaire): Ecritures {
        $this->jrnRapproBancaire = $jrnRapproBancaire;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Ecritures Returns this Ecritures.
     */
    public function setLibelle(?string $libelle): Ecritures {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle memo.
     *
     * @param string|null $libelleMemo The libelle memo.
     * @return Ecritures Returns this Ecritures.
     */
    public function setLibelleMemo(?string $libelleMemo): Ecritures {
        $this->libelleMemo = $libelleMemo;
        return $this;
    }

    /**
     * Set the ligne folio.
     *
     * @param int|null $ligneFolio The ligne folio.
     * @return Ecritures Returns this Ecritures.
     */
    public function setLigneFolio(?int $ligneFolio): Ecritures {
        $this->ligneFolio = $ligneFolio;
        return $this;
    }

    /**
     * Set the methode tva.
     *
     * @param string|null $methodeTva The methode tva.
     * @return Ecritures Returns this Ecritures.
     */
    public function setMethodeTva(?string $methodeTva): Ecritures {
        $this->methodeTva = $methodeTva;
        return $this;
    }

    /**
     * Set the milliemes ana.
     *
     * @param float|null $milliemesAna The milliemes ana.
     * @return Ecritures Returns this Ecritures.
     */
    public function setMilliemesAna(?float $milliemesAna): Ecritures {
        $this->milliemesAna = $milliemesAna;
        return $this;
    }

    /**
     * Set the mode paiement.
     *
     * @param string|null $modePaiement The mode paiement.
     * @return Ecritures Returns this Ecritures.
     */
    public function setModePaiement(?string $modePaiement): Ecritures {
        $this->modePaiement = $modePaiement;
        return $this;
    }

    /**
     * Set the montant ana.
     *
     * @param float|null $montantAna The montant ana.
     * @return Ecritures Returns this Ecritures.
     */
    public function setMontantAna(?float $montantAna): Ecritures {
        $this->montantAna = $montantAna;
        return $this;
    }

    /**
     * Set the montant saisi credit.
     *
     * @param float|null $montantSaisiCredit The montant saisi credit.
     * @return Ecritures Returns this Ecritures.
     */
    public function setMontantSaisiCredit(?float $montantSaisiCredit): Ecritures {
        $this->montantSaisiCredit = $montantSaisiCredit;
        return $this;
    }

    /**
     * Set the montant saisi debit.
     *
     * @param float|null $montantSaisiDebit The montant saisi debit.
     * @return Ecritures Returns this Ecritures.
     */
    public function setMontantSaisiDebit(?float $montantSaisiDebit): Ecritures {
        $this->montantSaisiDebit = $montantSaisiDebit;
        return $this;
    }

    /**
     * Set the montant tenu credit.
     *
     * @param float|null $montantTenuCredit The montant tenu credit.
     * @return Ecritures Returns this Ecritures.
     */
    public function setMontantTenuCredit(?float $montantTenuCredit): Ecritures {
        $this->montantTenuCredit = $montantTenuCredit;
        return $this;
    }

    /**
     * Set the montant tenu debit.
     *
     * @param float|null $montantTenuDebit The montant tenu debit.
     * @return Ecritures Returns this Ecritures.
     */
    public function setMontantTenuDebit(?float $montantTenuDebit): Ecritures {
        $this->montantTenuDebit = $montantTenuDebit;
        return $this;
    }

    /**
     * Set the mt dev force.
     *
     * @param bool|null $mtDevForce The mt dev force.
     * @return Ecritures Returns this Ecritures.
     */
    public function setMtDevForce(?bool $mtDevForce): Ecritures {
        $this->mtDevForce = $mtDevForce;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string|null $nature The nature.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNature(?string $nature): Ecritures {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the no lot ecritures.
     *
     * @param int|null $noLotEcritures The no lot ecritures.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNoLotEcritures(?int $noLotEcritures): Ecritures {
        $this->noLotEcritures = $noLotEcritures;
        return $this;
    }

    /**
     * Set the no lot factor.
     *
     * @param int|null $noLotFactor The no lot factor.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNoLotFactor(?int $noLotFactor): Ecritures {
        $this->noLotFactor = $noLotFactor;
        return $this;
    }

    /**
     * Set the no lot is.
     *
     * @param int|null $noLotIs The no lot is.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNoLotIs(?int $noLotIs): Ecritures {
        $this->noLotIs = $noLotIs;
        return $this;
    }

    /**
     * Set the no lot trace.
     *
     * @param string|null $noLotTrace The no lot trace.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNoLotTrace(?string $noLotTrace): Ecritures {
        $this->noLotTrace = $noLotTrace;
        return $this;
    }

    /**
     * Set the num cpt origine.
     *
     * @param string|null $numCptOrigine The num cpt origine.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNumCptOrigine(?string $numCptOrigine): Ecritures {
        $this->numCptOrigine = $numCptOrigine;
        return $this;
    }

    /**
     * Set the num ecr eco.
     *
     * @param int|null $numEcrEco The num ecr eco.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNumEcrEco(?int $numEcrEco): Ecritures {
        $this->numEcrEco = $numEcrEco;
        return $this;
    }

    /**
     * Set the num edit lettre paiement.
     *
     * @param int|null $numEditLettrePaiement The num edit lettre paiement.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNumEditLettrePaiement(?int $numEditLettrePaiement): Ecritures {
        $this->numEditLettrePaiement = $numEditLettrePaiement;
        return $this;
    }

    /**
     * Set the num lettrage.
     *
     * @param int|null $numLettrage The num lettrage.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNumLettrage(?int $numLettrage): Ecritures {
        $this->numLettrage = $numLettrage;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNumLigne(?int $numLigne): Ecritures {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num mandat.
     *
     * @param int|null $numMandat The num mandat.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNumMandat(?int $numMandat): Ecritures {
        $this->numMandat = $numMandat;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int|null $numUniq The num uniq.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNumUniq(?int $numUniq): Ecritures {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNumeroCompte(?string $numeroCompte): Ecritures {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero piece.
     *
     * @param string|null $numeroPiece The numero piece.
     * @return Ecritures Returns this Ecritures.
     */
    public function setNumeroPiece(?string $numeroPiece): Ecritures {
        $this->numeroPiece = $numeroPiece;
        return $this;
    }

    /**
     * Set the periode ecriture.
     *
     * @param DateTime|null $periodeEcriture The periode ecriture.
     * @return Ecritures Returns this Ecritures.
     */
    public function setPeriodeEcriture(?DateTime $periodeEcriture): Ecritures {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }

    /**
     * Set the periodicite debut.
     *
     * @param DateTime|null $periodiciteDebut The periodicite debut.
     * @return Ecritures Returns this Ecritures.
     */
    public function setPeriodiciteDebut(?DateTime $periodiciteDebut): Ecritures {
        $this->periodiciteDebut = $periodiciteDebut;
        return $this;
    }

    /**
     * Set the periodicite fin.
     *
     * @param DateTime|null $periodiciteFin The periodicite fin.
     * @return Ecritures Returns this Ecritures.
     */
    public function setPeriodiciteFin(?DateTime $periodiciteFin): Ecritures {
        $this->periodiciteFin = $periodiciteFin;
        return $this;
    }

    /**
     * Set the piece interne.
     *
     * @param int|null $pieceInterne The piece interne.
     * @return Ecritures Returns this Ecritures.
     */
    public function setPieceInterne(?int $pieceInterne): Ecritures {
        $this->pieceInterne = $pieceInterne;
        return $this;
    }

    /**
     * Set the prct repartition.
     *
     * @param float|null $prctRepartition The prct repartition.
     * @return Ecritures Returns this Ecritures.
     */
    public function setPrctRepartition(?float $prctRepartition): Ecritures {
        $this->prctRepartition = $prctRepartition;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return Ecritures Returns this Ecritures.
     */
    public function setQuantite(?float $quantite): Ecritures {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the quantite2.
     *
     * @param float|null $quantite2 The quantite2.
     * @return Ecritures Returns this Ecritures.
     */
    public function setQuantite2(?float $quantite2): Ecritures {
        $this->quantite2 = $quantite2;
        return $this;
    }

    /**
     * Set the rappro bancaire ok.
     *
     * @param bool|null $rapproBancaireOk The rappro bancaire ok.
     * @return Ecritures Returns this Ecritures.
     */
    public function setRapproBancaireOk(?bool $rapproBancaireOk): Ecritures {
        $this->rapproBancaireOk = $rapproBancaireOk;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string|null $refImage The ref image.
     * @return Ecritures Returns this Ecritures.
     */
    public function setRefImage(?string $refImage): Ecritures {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the reference tire.
     *
     * @param string|null $referenceTire The reference tire.
     * @return Ecritures Returns this Ecritures.
     */
    public function setReferenceTire(?string $referenceTire): Ecritures {
        $this->referenceTire = $referenceTire;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Ecritures Returns this Ecritures.
     */
    public function setRib(?string $rib): Ecritures {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the tva e4 bi.
     *
     * @param string|null $tvaE4Bi The tva e4 bi.
     * @return Ecritures Returns this Ecritures.
     */
    public function setTvaE4Bi(?string $tvaE4Bi): Ecritures {
        $this->tvaE4Bi = $tvaE4Bi;
        return $this;
    }

    /**
     * Set the tva e4 dr.
     *
     * @param string|null $tvaE4Dr The tva e4 dr.
     * @return Ecritures Returns this Ecritures.
     */
    public function setTvaE4Dr(?string $tvaE4Dr): Ecritures {
        $this->tvaE4Dr = $tvaE4Dr;
        return $this;
    }

    /**
     * Set the tva e4 mt.
     *
     * @param float|null $tvaE4Mt The tva e4 mt.
     * @return Ecritures Returns this Ecritures.
     */
    public function setTvaE4Mt(?float $tvaE4Mt): Ecritures {
        $this->tvaE4Mt = $tvaE4Mt;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string|null $typeLigne The type ligne.
     * @return Ecritures Returns this Ecritures.
     */
    public function setTypeLigne(?string $typeLigne): Ecritures {
        $this->typeLigne = $typeLigne;
        return $this;
    }

    /**
     * Set the type saisie.
     *
     * @param string|null $typeSaisie The type saisie.
     * @return Ecritures Returns this Ecritures.
     */
    public function setTypeSaisie(?string $typeSaisie): Ecritures {
        $this->typeSaisie = $typeSaisie;
        return $this;
    }

    /**
     * Set the validee.
     *
     * @param bool|null $validee The validee.
     * @return Ecritures Returns this Ecritures.
     */
    public function setValidee(?bool $validee): Ecritures {
        $this->validee = $validee;
        return $this;
    }
}
