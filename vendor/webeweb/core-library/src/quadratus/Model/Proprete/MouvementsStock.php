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
 * Mouvements stock.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class MouvementsStock {

    /**
     * Bon sortie.
     *
     * @var string|null
     */
    private $bonSortie;

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
     * Code fournisseur.
     *
     * @var string|null
     */
    private $codeFournisseur;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Code variante.
     *
     * @var string|null
     */
    private $codeVariante;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Euro.
     *
     * @var bool|null
     */
    private $euro;

    /**
     * Index.
     *
     * @var int|null
     */
    private $index;

    /**
     * Mouvement genere.
     *
     * @var bool|null
     */
    private $mouvementGenere;

    /**
     * Poste rent.
     *
     * @var string|null
     */
    private $posteRent;

    /**
     * Prix u.
     *
     * @var float|null
     */
    private $prixU;

    /**
     * Quantite.
     *
     * @var float|null
     */
    private $quantite;

    /**
     * Quantite voulue.
     *
     * @var float|null
     */
    private $quantiteVoulue;

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
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Type gestion.
     *
     * @var string|null
     */
    private $typeGestion;

    /**
     * Type ligne.
     *
     * @var string|null
     */
    private $typeLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the bon sortie.
     *
     * @return string|null Returns the bon sortie.
     */
    public function getBonSortie(): ?string {
        return $this->bonSortie;
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
     * Get the code fournisseur.
     *
     * @return string|null Returns the code fournisseur.
     */
    public function getCodeFournisseur(): ?string {
        return $this->codeFournisseur;
    }

    /**
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the code variante.
     *
     * @return string|null Returns the code variante.
     */
    public function getCodeVariante(): ?string {
        return $this->codeVariante;
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
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Get the euro.
     *
     * @return bool|null Returns the euro.
     */
    public function getEuro(): ?bool {
        return $this->euro;
    }

    /**
     * Get the index.
     *
     * @return int|null Returns the index.
     */
    public function getIndex(): ?int {
        return $this->index;
    }

    /**
     * Get the mouvement genere.
     *
     * @return bool|null Returns the mouvement genere.
     */
    public function getMouvementGenere(): ?bool {
        return $this->mouvementGenere;
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
     * Get the prix u.
     *
     * @return float|null Returns the prix u.
     */
    public function getPrixU(): ?float {
        return $this->prixU;
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
     * Get the quantite voulue.
     *
     * @return float|null Returns the quantite voulue.
     */
    public function getQuantiteVoulue(): ?float {
        return $this->quantiteVoulue;
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
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
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
     * Get the type ligne.
     *
     * @return string|null Returns the type ligne.
     */
    public function getTypeLigne(): ?string {
        return $this->typeLigne;
    }

    /**
     * Set the bon sortie.
     *
     * @param string|null $bonSortie The bon sortie.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setBonSortie(?string $bonSortie): MouvementsStock {
        $this->bonSortie = $bonSortie;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setCodeAffaire(?string $codeAffaire): MouvementsStock {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setCodeArticle(?string $codeArticle): MouvementsStock {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setCodeChantier(?string $codeChantier): MouvementsStock {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setCodeClient(?string $codeClient): MouvementsStock {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string|null $codeDepot The code depot.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setCodeDepot(?string $codeDepot): MouvementsStock {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setCodeDevise(?string $codeDevise): MouvementsStock {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string|null $codeFournisseur The code fournisseur.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setCodeFournisseur(?string $codeFournisseur): MouvementsStock {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setCodeTache(?string $codeTache): MouvementsStock {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code variante.
     *
     * @param string|null $codeVariante The code variante.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setCodeVariante(?string $codeVariante): MouvementsStock {
        $this->codeVariante = $codeVariante;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setCommentaire(?string $commentaire): MouvementsStock {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setDate(?DateTime $date): MouvementsStock {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the euro.
     *
     * @param bool|null $euro The euro.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setEuro(?bool $euro): MouvementsStock {
        $this->euro = $euro;
        return $this;
    }

    /**
     * Set the index.
     *
     * @param int|null $index The index.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setIndex(?int $index): MouvementsStock {
        $this->index = $index;
        return $this;
    }

    /**
     * Set the mouvement genere.
     *
     * @param bool|null $mouvementGenere The mouvement genere.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setMouvementGenere(?bool $mouvementGenere): MouvementsStock {
        $this->mouvementGenere = $mouvementGenere;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setPosteRent(?string $posteRent): MouvementsStock {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix u.
     *
     * @param float|null $prixU The prix u.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setPrixU(?float $prixU): MouvementsStock {
        $this->prixU = $prixU;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setQuantite(?float $quantite): MouvementsStock {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the quantite voulue.
     *
     * @param float|null $quantiteVoulue The quantite voulue.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setQuantiteVoulue(?float $quantiteVoulue): MouvementsStock {
        $this->quantiteVoulue = $quantiteVoulue;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float|null $remiseLigne1 The remise ligne1.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setRemiseLigne1(?float $remiseLigne1): MouvementsStock {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float|null $remiseLigne2 The remise ligne2.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setRemiseLigne2(?float $remiseLigne2): MouvementsStock {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float|null $remiseLigne3 The remise ligne3.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setRemiseLigne3(?float $remiseLigne3): MouvementsStock {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setType(?string $type): MouvementsStock {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the type gestion.
     *
     * @param string|null $typeGestion The type gestion.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setTypeGestion(?string $typeGestion): MouvementsStock {
        $this->typeGestion = $typeGestion;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string|null $typeLigne The type ligne.
     * @return MouvementsStock Returns this Mouvements stock.
     */
    public function setTypeLigne(?string $typeLigne): MouvementsStock {
        $this->typeLigne = $typeLigne;
        return $this;
    }
}
