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
 * Cde fournisseur mensu.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class CdeFournisseurMensu {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code fournisseur.
     *
     * @var string|null
     */
    private $codeFournisseur;

    /**
     * Code inspecteur.
     *
     * @var string|null
     */
    private $codeInspecteur;

    /**
     * Code livraison.
     *
     * @var string|null
     */
    private $codeLivraison;

    /**
     * Code livreur.
     *
     * @var string|null
     */
    private $codeLivreur;

    /**
     * Commande isolee.
     *
     * @var bool|null
     */
    private $commandeIsolee;

    /**
     * Critere texte1.
     *
     * @var string|null
     */
    private $critereTexte1;

    /**
     * Date livraison.
     *
     * @var DateTime|null
     */
    private $dateLivraison;

    /**
     * Date transfert.
     *
     * @var DateTime|null
     */
    private $dateTransfert;

    /**
     * Designation.
     *
     * @var string|null
     */
    private $designation;

    /**
     * Designation2.
     *
     * @var string|null
     */
    private $designation2;

    /**
     * Designation3.
     *
     * @var string|null
     */
    private $designation3;

    /**
     * From cde type.
     *
     * @var bool|null
     */
    private $fromCdeType;

    /**
     * Maj stock by da.
     *
     * @var bool|null
     */
    private $majStockByDa;

    /**
     * No bon int.
     *
     * @var string|null
     */
    private $noBonInt;

    /**
     * No piece cde.
     *
     * @var string|null
     */
    private $noPieceCde;

    /**
     * No piece cde cli.
     *
     * @var string|null
     */
    private $noPieceCdeCli;

    /**
     * Numero bs genere.
     *
     * @var string|null
     */
    private $numeroBsGenere;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Poste rent.
     *
     * @var string|null
     */
    private $posteRent;

    /**
     * Prix saisi.
     *
     * @var bool|null
     */
    private $prixSaisi;

    /**
     * Pu brut.
     *
     * @var float|null
     */
    private $puBrut;

    /**
     * Quantite.
     *
     * @var float|null
     */
    private $quantite;

    /**
     * Quantite bs.
     *
     * @var float|null
     */
    private $quantiteBs;

    /**
     * Quantite cde.
     *
     * @var float|null
     */
    private $quantiteCde;

    /**
     * Quantite cde cli.
     *
     * @var float|null
     */
    private $quantiteCdeCli;

    /**
     * Quantite liv.
     *
     * @var float|null
     */
    private $quantiteLiv;

    /**
     * Remise1.
     *
     * @var float|null
     */
    private $remise1;

    /**
     * Remise2.
     *
     * @var float|null
     */
    private $remise2;

    /**
     * Remise3.
     *
     * @var float|null
     */
    private $remise3;

    /**
     * Type gestion.
     *
     * @var string|null
     */
    private $typeGestion;

    /**
     * Type piece.
     *
     * @var string|null
     */
    private $typePiece;

    /**
     * Uniq id blocage.
     *
     * @var string|null
     */
    private $uniqIdBlocage;

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
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code article.
     *
     * @return string|null Returns the code article.
     */
    public function getCodeArticle(): ?string {
        return $this->codeArticle;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
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
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
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
     * Get the code inspecteur.
     *
     * @return string|null Returns the code inspecteur.
     */
    public function getCodeInspecteur(): ?string {
        return $this->codeInspecteur;
    }

    /**
     * Get the code livraison.
     *
     * @return string|null Returns the code livraison.
     */
    public function getCodeLivraison(): ?string {
        return $this->codeLivraison;
    }

    /**
     * Get the code livreur.
     *
     * @return string|null Returns the code livreur.
     */
    public function getCodeLivreur(): ?string {
        return $this->codeLivreur;
    }

    /**
     * Get the commande isolee.
     *
     * @return bool|null Returns the commande isolee.
     */
    public function getCommandeIsolee(): ?bool {
        return $this->commandeIsolee;
    }

    /**
     * Get the critere texte1.
     *
     * @return string|null Returns the critere texte1.
     */
    public function getCritereTexte1(): ?string {
        return $this->critereTexte1;
    }

    /**
     * Get the date livraison.
     *
     * @return DateTime|null Returns the date livraison.
     */
    public function getDateLivraison(): ?DateTime {
        return $this->dateLivraison;
    }

    /**
     * Get the date transfert.
     *
     * @return DateTime|null Returns the date transfert.
     */
    public function getDateTransfert(): ?DateTime {
        return $this->dateTransfert;
    }

    /**
     * Get the designation.
     *
     * @return string|null Returns the designation.
     */
    public function getDesignation(): ?string {
        return $this->designation;
    }

    /**
     * Get the designation2.
     *
     * @return string|null Returns the designation2.
     */
    public function getDesignation2(): ?string {
        return $this->designation2;
    }

    /**
     * Get the designation3.
     *
     * @return string|null Returns the designation3.
     */
    public function getDesignation3(): ?string {
        return $this->designation3;
    }

    /**
     * Get the from cde type.
     *
     * @return bool|null Returns the from cde type.
     */
    public function getFromCdeType(): ?bool {
        return $this->fromCdeType;
    }

    /**
     * Get the maj stock by da.
     *
     * @return bool|null Returns the maj stock by da.
     */
    public function getMajStockByDa(): ?bool {
        return $this->majStockByDa;
    }

    /**
     * Get the no bon int.
     *
     * @return string|null Returns the no bon int.
     */
    public function getNoBonInt(): ?string {
        return $this->noBonInt;
    }

    /**
     * Get the no piece cde.
     *
     * @return string|null Returns the no piece cde.
     */
    public function getNoPieceCde(): ?string {
        return $this->noPieceCde;
    }

    /**
     * Get the no piece cde cli.
     *
     * @return string|null Returns the no piece cde cli.
     */
    public function getNoPieceCdeCli(): ?string {
        return $this->noPieceCdeCli;
    }

    /**
     * Get the numero bs genere.
     *
     * @return string|null Returns the numero bs genere.
     */
    public function getNumeroBsGenere(): ?string {
        return $this->numeroBsGenere;
    }

    /**
     * Get the numero ligne.
     *
     * @return int|null Returns the numero ligne.
     */
    public function getNumeroLigne(): ?int {
        return $this->numeroLigne;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the poste rent.
     *
     * @return string|null Returns the poste rent.
     */
    public function getPosteRent(): ?string {
        return $this->posteRent;
    }

    /**
     * Get the prix saisi.
     *
     * @return bool|null Returns the prix saisi.
     */
    public function getPrixSaisi(): ?bool {
        return $this->prixSaisi;
    }

    /**
     * Get the pu brut.
     *
     * @return float|null Returns the pu brut.
     */
    public function getPuBrut(): ?float {
        return $this->puBrut;
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
     * Get the quantite bs.
     *
     * @return float|null Returns the quantite bs.
     */
    public function getQuantiteBs(): ?float {
        return $this->quantiteBs;
    }

    /**
     * Get the quantite cde.
     *
     * @return float|null Returns the quantite cde.
     */
    public function getQuantiteCde(): ?float {
        return $this->quantiteCde;
    }

    /**
     * Get the quantite cde cli.
     *
     * @return float|null Returns the quantite cde cli.
     */
    public function getQuantiteCdeCli(): ?float {
        return $this->quantiteCdeCli;
    }

    /**
     * Get the quantite liv.
     *
     * @return float|null Returns the quantite liv.
     */
    public function getQuantiteLiv(): ?float {
        return $this->quantiteLiv;
    }

    /**
     * Get the remise1.
     *
     * @return float|null Returns the remise1.
     */
    public function getRemise1(): ?float {
        return $this->remise1;
    }

    /**
     * Get the remise2.
     *
     * @return float|null Returns the remise2.
     */
    public function getRemise2(): ?float {
        return $this->remise2;
    }

    /**
     * Get the remise3.
     *
     * @return float|null Returns the remise3.
     */
    public function getRemise3(): ?float {
        return $this->remise3;
    }

    /**
     * Get the type gestion.
     *
     * @return string|null Returns the type gestion.
     */
    public function getTypeGestion(): ?string {
        return $this->typeGestion;
    }

    /**
     * Get the type piece.
     *
     * @return string|null Returns the type piece.
     */
    public function getTypePiece(): ?string {
        return $this->typePiece;
    }

    /**
     * Get the uniq id blocage.
     *
     * @return string|null Returns the uniq id blocage.
     */
    public function getUniqIdBlocage(): ?string {
        return $this->uniqIdBlocage;
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
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setCodeAffaire(?string $codeAffaire): CdeFournisseurMensu {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setCodeArticle(?string $codeArticle): CdeFournisseurMensu {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setCodeChantier(?string $codeChantier): CdeFournisseurMensu {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setCodeClient(?string $codeClient): CdeFournisseurMensu {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): CdeFournisseurMensu {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string|null $codeFournisseur The code fournisseur.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setCodeFournisseur(?string $codeFournisseur): CdeFournisseurMensu {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code inspecteur.
     *
     * @param string|null $codeInspecteur The code inspecteur.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setCodeInspecteur(?string $codeInspecteur): CdeFournisseurMensu {
        $this->codeInspecteur = $codeInspecteur;
        return $this;
    }

    /**
     * Set the code livraison.
     *
     * @param string|null $codeLivraison The code livraison.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setCodeLivraison(?string $codeLivraison): CdeFournisseurMensu {
        $this->codeLivraison = $codeLivraison;
        return $this;
    }

    /**
     * Set the code livreur.
     *
     * @param string|null $codeLivreur The code livreur.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setCodeLivreur(?string $codeLivreur): CdeFournisseurMensu {
        $this->codeLivreur = $codeLivreur;
        return $this;
    }

    /**
     * Set the commande isolee.
     *
     * @param bool|null $commandeIsolee The commande isolee.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setCommandeIsolee(?bool $commandeIsolee): CdeFournisseurMensu {
        $this->commandeIsolee = $commandeIsolee;
        return $this;
    }

    /**
     * Set the critere texte1.
     *
     * @param string|null $critereTexte1 The critere texte1.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setCritereTexte1(?string $critereTexte1): CdeFournisseurMensu {
        $this->critereTexte1 = $critereTexte1;
        return $this;
    }

    /**
     * Set the date livraison.
     *
     * @param DateTime|null $dateLivraison The date livraison.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setDateLivraison(?DateTime $dateLivraison): CdeFournisseurMensu {
        $this->dateLivraison = $dateLivraison;
        return $this;
    }

    /**
     * Set the date transfert.
     *
     * @param DateTime|null $dateTransfert The date transfert.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setDateTransfert(?DateTime $dateTransfert): CdeFournisseurMensu {
        $this->dateTransfert = $dateTransfert;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string|null $designation The designation.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setDesignation(?string $designation): CdeFournisseurMensu {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string|null $designation2 The designation2.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setDesignation2(?string $designation2): CdeFournisseurMensu {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string|null $designation3 The designation3.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setDesignation3(?string $designation3): CdeFournisseurMensu {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the from cde type.
     *
     * @param bool|null $fromCdeType The from cde type.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setFromCdeType(?bool $fromCdeType): CdeFournisseurMensu {
        $this->fromCdeType = $fromCdeType;
        return $this;
    }

    /**
     * Set the maj stock by da.
     *
     * @param bool|null $majStockByDa The maj stock by da.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setMajStockByDa(?bool $majStockByDa): CdeFournisseurMensu {
        $this->majStockByDa = $majStockByDa;
        return $this;
    }

    /**
     * Set the no bon int.
     *
     * @param string|null $noBonInt The no bon int.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setNoBonInt(?string $noBonInt): CdeFournisseurMensu {
        $this->noBonInt = $noBonInt;
        return $this;
    }

    /**
     * Set the no piece cde.
     *
     * @param string|null $noPieceCde The no piece cde.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setNoPieceCde(?string $noPieceCde): CdeFournisseurMensu {
        $this->noPieceCde = $noPieceCde;
        return $this;
    }

    /**
     * Set the no piece cde cli.
     *
     * @param string|null $noPieceCdeCli The no piece cde cli.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setNoPieceCdeCli(?string $noPieceCdeCli): CdeFournisseurMensu {
        $this->noPieceCdeCli = $noPieceCdeCli;
        return $this;
    }

    /**
     * Set the numero bs genere.
     *
     * @param string|null $numeroBsGenere The numero bs genere.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setNumeroBsGenere(?string $numeroBsGenere): CdeFournisseurMensu {
        $this->numeroBsGenere = $numeroBsGenere;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setNumeroLigne(?int $numeroLigne): CdeFournisseurMensu {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setPeriode(?DateTime $periode): CdeFournisseurMensu {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setPosteRent(?string $posteRent): CdeFournisseurMensu {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix saisi.
     *
     * @param bool|null $prixSaisi The prix saisi.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setPrixSaisi(?bool $prixSaisi): CdeFournisseurMensu {
        $this->prixSaisi = $prixSaisi;
        return $this;
    }

    /**
     * Set the pu brut.
     *
     * @param float|null $puBrut The pu brut.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setPuBrut(?float $puBrut): CdeFournisseurMensu {
        $this->puBrut = $puBrut;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setQuantite(?float $quantite): CdeFournisseurMensu {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the quantite bs.
     *
     * @param float|null $quantiteBs The quantite bs.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setQuantiteBs(?float $quantiteBs): CdeFournisseurMensu {
        $this->quantiteBs = $quantiteBs;
        return $this;
    }

    /**
     * Set the quantite cde.
     *
     * @param float|null $quantiteCde The quantite cde.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setQuantiteCde(?float $quantiteCde): CdeFournisseurMensu {
        $this->quantiteCde = $quantiteCde;
        return $this;
    }

    /**
     * Set the quantite cde cli.
     *
     * @param float|null $quantiteCdeCli The quantite cde cli.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setQuantiteCdeCli(?float $quantiteCdeCli): CdeFournisseurMensu {
        $this->quantiteCdeCli = $quantiteCdeCli;
        return $this;
    }

    /**
     * Set the quantite liv.
     *
     * @param float|null $quantiteLiv The quantite liv.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setQuantiteLiv(?float $quantiteLiv): CdeFournisseurMensu {
        $this->quantiteLiv = $quantiteLiv;
        return $this;
    }

    /**
     * Set the remise1.
     *
     * @param float|null $remise1 The remise1.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setRemise1(?float $remise1): CdeFournisseurMensu {
        $this->remise1 = $remise1;
        return $this;
    }

    /**
     * Set the remise2.
     *
     * @param float|null $remise2 The remise2.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setRemise2(?float $remise2): CdeFournisseurMensu {
        $this->remise2 = $remise2;
        return $this;
    }

    /**
     * Set the remise3.
     *
     * @param float|null $remise3 The remise3.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setRemise3(?float $remise3): CdeFournisseurMensu {
        $this->remise3 = $remise3;
        return $this;
    }

    /**
     * Set the type gestion.
     *
     * @param string|null $typeGestion The type gestion.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setTypeGestion(?string $typeGestion): CdeFournisseurMensu {
        $this->typeGestion = $typeGestion;
        return $this;
    }

    /**
     * Set the type piece.
     *
     * @param string|null $typePiece The type piece.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setTypePiece(?string $typePiece): CdeFournisseurMensu {
        $this->typePiece = $typePiece;
        return $this;
    }

    /**
     * Set the uniq id blocage.
     *
     * @param string|null $uniqIdBlocage The uniq id blocage.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setUniqIdBlocage(?string $uniqIdBlocage): CdeFournisseurMensu {
        $this->uniqIdBlocage = $uniqIdBlocage;
        return $this;
    }

    /**
     * Set the validee.
     *
     * @param bool|null $validee The validee.
     * @return CdeFournisseurMensu Returns this Cde fournisseur mensu.
     */
    public function setValidee(?bool $validee): CdeFournisseurMensu {
        $this->validee = $validee;
        return $this;
    }
}
