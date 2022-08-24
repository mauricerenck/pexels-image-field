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

/**
 * Journaux.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Journaux {

    /**
     * Bic.
     *
     * @var string|null
     */
    private $bic;

    /**
     * Centralise gd livre.
     *
     * @var bool|null
     */
    private $centraliseGdLivre;

    /**
     * Cle acces.
     *
     * @var string|null
     */
    private $cleAcces;

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
     * Code entree.
     *
     * @var string|null
     */
    private $codeEntree;

    /**
     * Compte contrepartie.
     *
     * @var string|null
     */
    private $compteContrepartie;

    /**
     * Compte contrepartie aamm.
     *
     * @var string|null
     */
    private $compteContrepartieAamm;

    /**
     * Contrepartie.
     *
     * @var bool|null
     */
    private $contrepartie;

    /**
     * Dom banque.
     *
     * @var string|null
     */
    private $domBanque;

    /**
     * Equilibre auto.
     *
     * @var string|null
     */
    private $equilibreAuto;

    /**
     * Etebac skip tva.
     *
     * @var bool|null
     */
    private $etebacSkipTva;

    /**
     * Etebac x fer detailler bq.
     *
     * @var bool|null
     */
    private $etebacXFerDetaillerBq;

    /**
     * Etebac x fer do prefix code op.
     *
     * @var bool|null
     */
    private $etebacXFerDoPrefixCodeOp;

    /**
     * Etebac x fer ind libelle.
     *
     * @var string|null
     */
    private $etebacXFerIndLibelle;

    /**
     * Etebac x fer lignes comp.
     *
     * @var bool|null
     */
    private $etebacXFerLignesComp;

    /**
     * Famille.
     *
     * @var string|null
     */
    private $famille;

    /**
     * Gest num piece jrn.
     *
     * @var bool|null
     */
    private $gestNumPieceJrn;

    /**
     * Gestion folio.
     *
     * @var bool|null
     */
    private $gestionFolio;

    /**
     * Gestion num piece.
     *
     * @var string|null
     */
    private $gestionNumPiece;

    /**
     * Iban.
     *
     * @var string|null
     */
    private $iban;

    /**
     * Iban id client.
     *
     * @var string|null
     */
    private $ibanIdClient;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Montant negatif.
     *
     * @var bool|null
     */
    private $montantNegatif;

    /**
     * Niveau droit.
     *
     * @var string|null
     */
    private $niveauDroit;

    /**
     * Num emetteur.
     *
     * @var string|null
     */
    private $numEmetteur;

    /**
     * Prochain num piece.
     *
     * @var int|null
     */
    private $prochainNumPiece;

    /**
     * Propo libelle.
     *
     * @var string|null
     */
    private $propoLibelle;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Saisie bordereau.
     *
     * @var bool|null
     */
    private $saisieBordereau;

    /**
     * Type journal.
     *
     * @var string|null
     */
    private $typeJournal;

    /**
     * Type piece global.
     *
     * @var bool|null
     */
    private $typePieceGlobal;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the centralise gd livre.
     *
     * @return bool|null Returns the centralise gd livre.
     */
    public function getCentraliseGdLivre(): ?bool {
        return $this->centraliseGdLivre;
    }

    /**
     * Get the cle acces.
     *
     * @return string|null Returns the cle acces.
     */
    public function getCleAcces(): ?string {
        return $this->cleAcces;
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
     * Get the code entree.
     *
     * @return string|null Returns the code entree.
     */
    public function getCodeEntree(): ?string {
        return $this->codeEntree;
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
     * Get the compte contrepartie aamm.
     *
     * @return string|null Returns the compte contrepartie aamm.
     */
    public function getCompteContrepartieAamm(): ?string {
        return $this->compteContrepartieAamm;
    }

    /**
     * Get the contrepartie.
     *
     * @return bool|null Returns the contrepartie.
     */
    public function getContrepartie(): ?bool {
        return $this->contrepartie;
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
     * Get the equilibre auto.
     *
     * @return string|null Returns the equilibre auto.
     */
    public function getEquilibreAuto(): ?string {
        return $this->equilibreAuto;
    }

    /**
     * Get the etebac skip tva.
     *
     * @return bool|null Returns the etebac skip tva.
     */
    public function getEtebacSkipTva(): ?bool {
        return $this->etebacSkipTva;
    }

    /**
     * Get the etebac x fer detailler bq.
     *
     * @return bool|null Returns the etebac x fer detailler bq.
     */
    public function getEtebacXFerDetaillerBq(): ?bool {
        return $this->etebacXFerDetaillerBq;
    }

    /**
     * Get the etebac x fer do prefix code op.
     *
     * @return bool|null Returns the etebac x fer do prefix code op.
     */
    public function getEtebacXFerDoPrefixCodeOp(): ?bool {
        return $this->etebacXFerDoPrefixCodeOp;
    }

    /**
     * Get the etebac x fer ind libelle.
     *
     * @return string|null Returns the etebac x fer ind libelle.
     */
    public function getEtebacXFerIndLibelle(): ?string {
        return $this->etebacXFerIndLibelle;
    }

    /**
     * Get the etebac x fer lignes comp.
     *
     * @return bool|null Returns the etebac x fer lignes comp.
     */
    public function getEtebacXFerLignesComp(): ?bool {
        return $this->etebacXFerLignesComp;
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
     * Get the gest num piece jrn.
     *
     * @return bool|null Returns the gest num piece jrn.
     */
    public function getGestNumPieceJrn(): ?bool {
        return $this->gestNumPieceJrn;
    }

    /**
     * Get the gestion folio.
     *
     * @return bool|null Returns the gestion folio.
     */
    public function getGestionFolio(): ?bool {
        return $this->gestionFolio;
    }

    /**
     * Get the gestion num piece.
     *
     * @return string|null Returns the gestion num piece.
     */
    public function getGestionNumPiece(): ?string {
        return $this->gestionNumPiece;
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
     * Get the iban id client.
     *
     * @return string|null Returns the iban id client.
     */
    public function getIbanIdClient(): ?string {
        return $this->ibanIdClient;
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
     * Get the montant negatif.
     *
     * @return bool|null Returns the montant negatif.
     */
    public function getMontantNegatif(): ?bool {
        return $this->montantNegatif;
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
     * Get the num emetteur.
     *
     * @return string|null Returns the num emetteur.
     */
    public function getNumEmetteur(): ?string {
        return $this->numEmetteur;
    }

    /**
     * Get the prochain num piece.
     *
     * @return int|null Returns the prochain num piece.
     */
    public function getProchainNumPiece(): ?int {
        return $this->prochainNumPiece;
    }

    /**
     * Get the propo libelle.
     *
     * @return string|null Returns the propo libelle.
     */
    public function getPropoLibelle(): ?string {
        return $this->propoLibelle;
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
     * Get the saisie bordereau.
     *
     * @return bool|null Returns the saisie bordereau.
     */
    public function getSaisieBordereau(): ?bool {
        return $this->saisieBordereau;
    }

    /**
     * Get the type journal.
     *
     * @return string|null Returns the type journal.
     */
    public function getTypeJournal(): ?string {
        return $this->typeJournal;
    }

    /**
     * Get the type piece global.
     *
     * @return bool|null Returns the type piece global.
     */
    public function getTypePieceGlobal(): ?bool {
        return $this->typePieceGlobal;
    }

    /**
     * Set the bic.
     *
     * @param string|null $bic The bic.
     * @return Journaux Returns this Journaux.
     */
    public function setBic(?string $bic): Journaux {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the centralise gd livre.
     *
     * @param bool|null $centraliseGdLivre The centralise gd livre.
     * @return Journaux Returns this Journaux.
     */
    public function setCentraliseGdLivre(?bool $centraliseGdLivre): Journaux {
        $this->centraliseGdLivre = $centraliseGdLivre;
        return $this;
    }

    /**
     * Set the cle acces.
     *
     * @param string|null $cleAcces The cle acces.
     * @return Journaux Returns this Journaux.
     */
    public function setCleAcces(?string $cleAcces): Journaux {
        $this->cleAcces = $cleAcces;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Journaux Returns this Journaux.
     */
    public function setCode(?string $code): Journaux {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return Journaux Returns this Journaux.
     */
    public function setCodeCentre(?string $codeCentre): Journaux {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code entree.
     *
     * @param string|null $codeEntree The code entree.
     * @return Journaux Returns this Journaux.
     */
    public function setCodeEntree(?string $codeEntree): Journaux {
        $this->codeEntree = $codeEntree;
        return $this;
    }

    /**
     * Set the compte contrepartie.
     *
     * @param string|null $compteContrepartie The compte contrepartie.
     * @return Journaux Returns this Journaux.
     */
    public function setCompteContrepartie(?string $compteContrepartie): Journaux {
        $this->compteContrepartie = $compteContrepartie;
        return $this;
    }

    /**
     * Set the compte contrepartie aamm.
     *
     * @param string|null $compteContrepartieAamm The compte contrepartie aamm.
     * @return Journaux Returns this Journaux.
     */
    public function setCompteContrepartieAamm(?string $compteContrepartieAamm): Journaux {
        $this->compteContrepartieAamm = $compteContrepartieAamm;
        return $this;
    }

    /**
     * Set the contrepartie.
     *
     * @param bool|null $contrepartie The contrepartie.
     * @return Journaux Returns this Journaux.
     */
    public function setContrepartie(?bool $contrepartie): Journaux {
        $this->contrepartie = $contrepartie;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string|null $domBanque The dom banque.
     * @return Journaux Returns this Journaux.
     */
    public function setDomBanque(?string $domBanque): Journaux {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the equilibre auto.
     *
     * @param string|null $equilibreAuto The equilibre auto.
     * @return Journaux Returns this Journaux.
     */
    public function setEquilibreAuto(?string $equilibreAuto): Journaux {
        $this->equilibreAuto = $equilibreAuto;
        return $this;
    }

    /**
     * Set the etebac skip tva.
     *
     * @param bool|null $etebacSkipTva The etebac skip tva.
     * @return Journaux Returns this Journaux.
     */
    public function setEtebacSkipTva(?bool $etebacSkipTva): Journaux {
        $this->etebacSkipTva = $etebacSkipTva;
        return $this;
    }

    /**
     * Set the etebac x fer detailler bq.
     *
     * @param bool|null $etebacXFerDetaillerBq The etebac x fer detailler bq.
     * @return Journaux Returns this Journaux.
     */
    public function setEtebacXFerDetaillerBq(?bool $etebacXFerDetaillerBq): Journaux {
        $this->etebacXFerDetaillerBq = $etebacXFerDetaillerBq;
        return $this;
    }

    /**
     * Set the etebac x fer do prefix code op.
     *
     * @param bool|null $etebacXFerDoPrefixCodeOp The etebac x fer do prefix code op.
     * @return Journaux Returns this Journaux.
     */
    public function setEtebacXFerDoPrefixCodeOp(?bool $etebacXFerDoPrefixCodeOp): Journaux {
        $this->etebacXFerDoPrefixCodeOp = $etebacXFerDoPrefixCodeOp;
        return $this;
    }

    /**
     * Set the etebac x fer ind libelle.
     *
     * @param string|null $etebacXFerIndLibelle The etebac x fer ind libelle.
     * @return Journaux Returns this Journaux.
     */
    public function setEtebacXFerIndLibelle(?string $etebacXFerIndLibelle): Journaux {
        $this->etebacXFerIndLibelle = $etebacXFerIndLibelle;
        return $this;
    }

    /**
     * Set the etebac x fer lignes comp.
     *
     * @param bool|null $etebacXFerLignesComp The etebac x fer lignes comp.
     * @return Journaux Returns this Journaux.
     */
    public function setEtebacXFerLignesComp(?bool $etebacXFerLignesComp): Journaux {
        $this->etebacXFerLignesComp = $etebacXFerLignesComp;
        return $this;
    }

    /**
     * Set the famille.
     *
     * @param string|null $famille The famille.
     * @return Journaux Returns this Journaux.
     */
    public function setFamille(?string $famille): Journaux {
        $this->famille = $famille;
        return $this;
    }

    /**
     * Set the gest num piece jrn.
     *
     * @param bool|null $gestNumPieceJrn The gest num piece jrn.
     * @return Journaux Returns this Journaux.
     */
    public function setGestNumPieceJrn(?bool $gestNumPieceJrn): Journaux {
        $this->gestNumPieceJrn = $gestNumPieceJrn;
        return $this;
    }

    /**
     * Set the gestion folio.
     *
     * @param bool|null $gestionFolio The gestion folio.
     * @return Journaux Returns this Journaux.
     */
    public function setGestionFolio(?bool $gestionFolio): Journaux {
        $this->gestionFolio = $gestionFolio;
        return $this;
    }

    /**
     * Set the gestion num piece.
     *
     * @param string|null $gestionNumPiece The gestion num piece.
     * @return Journaux Returns this Journaux.
     */
    public function setGestionNumPiece(?string $gestionNumPiece): Journaux {
        $this->gestionNumPiece = $gestionNumPiece;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return Journaux Returns this Journaux.
     */
    public function setIban(?string $iban): Journaux {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the iban id client.
     *
     * @param string|null $ibanIdClient The iban id client.
     * @return Journaux Returns this Journaux.
     */
    public function setIbanIdClient(?string $ibanIdClient): Journaux {
        $this->ibanIdClient = $ibanIdClient;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Journaux Returns this Journaux.
     */
    public function setLibelle(?string $libelle): Journaux {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant negatif.
     *
     * @param bool|null $montantNegatif The montant negatif.
     * @return Journaux Returns this Journaux.
     */
    public function setMontantNegatif(?bool $montantNegatif): Journaux {
        $this->montantNegatif = $montantNegatif;
        return $this;
    }

    /**
     * Set the niveau droit.
     *
     * @param string|null $niveauDroit The niveau droit.
     * @return Journaux Returns this Journaux.
     */
    public function setNiveauDroit(?string $niveauDroit): Journaux {
        $this->niveauDroit = $niveauDroit;
        return $this;
    }

    /**
     * Set the num emetteur.
     *
     * @param string|null $numEmetteur The num emetteur.
     * @return Journaux Returns this Journaux.
     */
    public function setNumEmetteur(?string $numEmetteur): Journaux {
        $this->numEmetteur = $numEmetteur;
        return $this;
    }

    /**
     * Set the prochain num piece.
     *
     * @param int|null $prochainNumPiece The prochain num piece.
     * @return Journaux Returns this Journaux.
     */
    public function setProchainNumPiece(?int $prochainNumPiece): Journaux {
        $this->prochainNumPiece = $prochainNumPiece;
        return $this;
    }

    /**
     * Set the propo libelle.
     *
     * @param string|null $propoLibelle The propo libelle.
     * @return Journaux Returns this Journaux.
     */
    public function setPropoLibelle(?string $propoLibelle): Journaux {
        $this->propoLibelle = $propoLibelle;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Journaux Returns this Journaux.
     */
    public function setRib(?string $rib): Journaux {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the saisie bordereau.
     *
     * @param bool|null $saisieBordereau The saisie bordereau.
     * @return Journaux Returns this Journaux.
     */
    public function setSaisieBordereau(?bool $saisieBordereau): Journaux {
        $this->saisieBordereau = $saisieBordereau;
        return $this;
    }

    /**
     * Set the type journal.
     *
     * @param string|null $typeJournal The type journal.
     * @return Journaux Returns this Journaux.
     */
    public function setTypeJournal(?string $typeJournal): Journaux {
        $this->typeJournal = $typeJournal;
        return $this;
    }

    /**
     * Set the type piece global.
     *
     * @param bool|null $typePieceGlobal The type piece global.
     * @return Journaux Returns this Journaux.
     */
    public function setTypePieceGlobal(?bool $typePieceGlobal): Journaux {
        $this->typePieceGlobal = $typePieceGlobal;
        return $this;
    }
}
