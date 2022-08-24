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

/**
 * Taches.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Taches {

    /**
     * Article.
     *
     * @var string|null
     */
    private $article;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code frais.
     *
     * @var string|null
     */
    private $codeFrais;

    /**
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Code travail.
     *
     * @var string|null
     */
    private $codeTravail;

    /**
     * Code uo.
     *
     * @var string|null
     */
    private $codeUo;

    /**
     * Compte comptable.
     *
     * @var string|null
     */
    private $compteComptable;

    /**
     * Compte tva.
     *
     * @var string|null
     */
    private $compteTva;

    /**
     * Facturable.
     *
     * @var bool|null
     */
    private $facturable;

    /**
     * Inactif.
     *
     * @var bool|null
     */
    private $inactif;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Intitule rtf.
     *
     * @var string|null
     */
    private $intituleRtf;

    /**
     * Liste travaux.
     *
     * @var string|null
     */
    private $listeTravaux;

    /**
     * Niveau exec.
     *
     * @var string|null
     */
    private $niveauExec;

    /**
     * Non remboursable.
     *
     * @var bool|null
     */
    private $nonRemboursable;

    /**
     * Non travaillee.
     *
     * @var bool|null
     */
    private $nonTravaillee;

    /**
     * Operationnelle.
     *
     * @var bool|null
     */
    private $operationnelle;

    /**
     * Prix vente1.
     *
     * @var float|null
     */
    private $prixVente1;

    /**
     * Prix vente2.
     *
     * @var float|null
     */
    private $prixVente2;

    /**
     * Prix vente3.
     *
     * @var float|null
     */
    private $prixVente3;

    /**
     * Pv maxi.
     *
     * @var float|null
     */
    private $pvMaxi;

    /**
     * Saisie tva.
     *
     * @var bool|null
     */
    private $saisieTva;

    /**
     * Super facturable.
     *
     * @var bool|null
     */
    private $superFacturable;

    /**
     * Ticket resto.
     *
     * @var bool|null
     */
    private $ticketResto;

    /**
     * Type heure.
     *
     * @var string|null
     */
    private $typeHeure;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the article.
     *
     * @return string|null Returns the article.
     */
    public function getArticle(): ?string {
        return $this->article;
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
     * Get the code frais.
     *
     * @return string|null Returns the code frais.
     */
    public function getCodeFrais(): ?string {
        return $this->codeFrais;
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
     * Get the code travail.
     *
     * @return string|null Returns the code travail.
     */
    public function getCodeTravail(): ?string {
        return $this->codeTravail;
    }

    /**
     * Get the code uo.
     *
     * @return string|null Returns the code uo.
     */
    public function getCodeUo(): ?string {
        return $this->codeUo;
    }

    /**
     * Get the compte comptable.
     *
     * @return string|null Returns the compte comptable.
     */
    public function getCompteComptable(): ?string {
        return $this->compteComptable;
    }

    /**
     * Get the compte tva.
     *
     * @return string|null Returns the compte tva.
     */
    public function getCompteTva(): ?string {
        return $this->compteTva;
    }

    /**
     * Get the facturable.
     *
     * @return bool|null Returns the facturable.
     */
    public function getFacturable(): ?bool {
        return $this->facturable;
    }

    /**
     * Get the inactif.
     *
     * @return bool|null Returns the inactif.
     */
    public function getInactif(): ?bool {
        return $this->inactif;
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
     * Get the intitule rtf.
     *
     * @return string|null Returns the intitule rtf.
     */
    public function getIntituleRtf(): ?string {
        return $this->intituleRtf;
    }

    /**
     * Get the liste travaux.
     *
     * @return string|null Returns the liste travaux.
     */
    public function getListeTravaux(): ?string {
        return $this->listeTravaux;
    }

    /**
     * Get the niveau exec.
     *
     * @return string|null Returns the niveau exec.
     */
    public function getNiveauExec(): ?string {
        return $this->niveauExec;
    }

    /**
     * Get the non remboursable.
     *
     * @return bool|null Returns the non remboursable.
     */
    public function getNonRemboursable(): ?bool {
        return $this->nonRemboursable;
    }

    /**
     * Get the non travaillee.
     *
     * @return bool|null Returns the non travaillee.
     */
    public function getNonTravaillee(): ?bool {
        return $this->nonTravaillee;
    }

    /**
     * Get the operationnelle.
     *
     * @return bool|null Returns the operationnelle.
     */
    public function getOperationnelle(): ?bool {
        return $this->operationnelle;
    }

    /**
     * Get the prix vente1.
     *
     * @return float|null Returns the prix vente1.
     */
    public function getPrixVente1(): ?float {
        return $this->prixVente1;
    }

    /**
     * Get the prix vente2.
     *
     * @return float|null Returns the prix vente2.
     */
    public function getPrixVente2(): ?float {
        return $this->prixVente2;
    }

    /**
     * Get the prix vente3.
     *
     * @return float|null Returns the prix vente3.
     */
    public function getPrixVente3(): ?float {
        return $this->prixVente3;
    }

    /**
     * Get the pv maxi.
     *
     * @return float|null Returns the pv maxi.
     */
    public function getPvMaxi(): ?float {
        return $this->pvMaxi;
    }

    /**
     * Get the saisie tva.
     *
     * @return bool|null Returns the saisie tva.
     */
    public function getSaisieTva(): ?bool {
        return $this->saisieTva;
    }

    /**
     * Get the super facturable.
     *
     * @return bool|null Returns the super facturable.
     */
    public function getSuperFacturable(): ?bool {
        return $this->superFacturable;
    }

    /**
     * Get the ticket resto.
     *
     * @return bool|null Returns the ticket resto.
     */
    public function getTicketResto(): ?bool {
        return $this->ticketResto;
    }

    /**
     * Get the type heure.
     *
     * @return string|null Returns the type heure.
     */
    public function getTypeHeure(): ?string {
        return $this->typeHeure;
    }

    /**
     * Set the article.
     *
     * @param string|null $article The article.
     * @return Taches Returns this Taches.
     */
    public function setArticle(?string $article): Taches {
        $this->article = $article;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Taches Returns this Taches.
     */
    public function setCode(?string $code): Taches {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code frais.
     *
     * @param string|null $codeFrais The code frais.
     * @return Taches Returns this Taches.
     */
    public function setCodeFrais(?string $codeFrais): Taches {
        $this->codeFrais = $codeFrais;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return Taches Returns this Taches.
     */
    public function setCodeRegroupement(?string $codeRegroupement): Taches {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code travail.
     *
     * @param string|null $codeTravail The code travail.
     * @return Taches Returns this Taches.
     */
    public function setCodeTravail(?string $codeTravail): Taches {
        $this->codeTravail = $codeTravail;
        return $this;
    }

    /**
     * Set the code uo.
     *
     * @param string|null $codeUo The code uo.
     * @return Taches Returns this Taches.
     */
    public function setCodeUo(?string $codeUo): Taches {
        $this->codeUo = $codeUo;
        return $this;
    }

    /**
     * Set the compte comptable.
     *
     * @param string|null $compteComptable The compte comptable.
     * @return Taches Returns this Taches.
     */
    public function setCompteComptable(?string $compteComptable): Taches {
        $this->compteComptable = $compteComptable;
        return $this;
    }

    /**
     * Set the compte tva.
     *
     * @param string|null $compteTva The compte tva.
     * @return Taches Returns this Taches.
     */
    public function setCompteTva(?string $compteTva): Taches {
        $this->compteTva = $compteTva;
        return $this;
    }

    /**
     * Set the facturable.
     *
     * @param bool|null $facturable The facturable.
     * @return Taches Returns this Taches.
     */
    public function setFacturable(?bool $facturable): Taches {
        $this->facturable = $facturable;
        return $this;
    }

    /**
     * Set the inactif.
     *
     * @param bool|null $inactif The inactif.
     * @return Taches Returns this Taches.
     */
    public function setInactif(?bool $inactif): Taches {
        $this->inactif = $inactif;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Taches Returns this Taches.
     */
    public function setIntitule(?string $intitule): Taches {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule rtf.
     *
     * @param string|null $intituleRtf The intitule rtf.
     * @return Taches Returns this Taches.
     */
    public function setIntituleRtf(?string $intituleRtf): Taches {
        $this->intituleRtf = $intituleRtf;
        return $this;
    }

    /**
     * Set the liste travaux.
     *
     * @param string|null $listeTravaux The liste travaux.
     * @return Taches Returns this Taches.
     */
    public function setListeTravaux(?string $listeTravaux): Taches {
        $this->listeTravaux = $listeTravaux;
        return $this;
    }

    /**
     * Set the niveau exec.
     *
     * @param string|null $niveauExec The niveau exec.
     * @return Taches Returns this Taches.
     */
    public function setNiveauExec(?string $niveauExec): Taches {
        $this->niveauExec = $niveauExec;
        return $this;
    }

    /**
     * Set the non remboursable.
     *
     * @param bool|null $nonRemboursable The non remboursable.
     * @return Taches Returns this Taches.
     */
    public function setNonRemboursable(?bool $nonRemboursable): Taches {
        $this->nonRemboursable = $nonRemboursable;
        return $this;
    }

    /**
     * Set the non travaillee.
     *
     * @param bool|null $nonTravaillee The non travaillee.
     * @return Taches Returns this Taches.
     */
    public function setNonTravaillee(?bool $nonTravaillee): Taches {
        $this->nonTravaillee = $nonTravaillee;
        return $this;
    }

    /**
     * Set the operationnelle.
     *
     * @param bool|null $operationnelle The operationnelle.
     * @return Taches Returns this Taches.
     */
    public function setOperationnelle(?bool $operationnelle): Taches {
        $this->operationnelle = $operationnelle;
        return $this;
    }

    /**
     * Set the prix vente1.
     *
     * @param float|null $prixVente1 The prix vente1.
     * @return Taches Returns this Taches.
     */
    public function setPrixVente1(?float $prixVente1): Taches {
        $this->prixVente1 = $prixVente1;
        return $this;
    }

    /**
     * Set the prix vente2.
     *
     * @param float|null $prixVente2 The prix vente2.
     * @return Taches Returns this Taches.
     */
    public function setPrixVente2(?float $prixVente2): Taches {
        $this->prixVente2 = $prixVente2;
        return $this;
    }

    /**
     * Set the prix vente3.
     *
     * @param float|null $prixVente3 The prix vente3.
     * @return Taches Returns this Taches.
     */
    public function setPrixVente3(?float $prixVente3): Taches {
        $this->prixVente3 = $prixVente3;
        return $this;
    }

    /**
     * Set the pv maxi.
     *
     * @param float|null $pvMaxi The pv maxi.
     * @return Taches Returns this Taches.
     */
    public function setPvMaxi(?float $pvMaxi): Taches {
        $this->pvMaxi = $pvMaxi;
        return $this;
    }

    /**
     * Set the saisie tva.
     *
     * @param bool|null $saisieTva The saisie tva.
     * @return Taches Returns this Taches.
     */
    public function setSaisieTva(?bool $saisieTva): Taches {
        $this->saisieTva = $saisieTva;
        return $this;
    }

    /**
     * Set the super facturable.
     *
     * @param bool|null $superFacturable The super facturable.
     * @return Taches Returns this Taches.
     */
    public function setSuperFacturable(?bool $superFacturable): Taches {
        $this->superFacturable = $superFacturable;
        return $this;
    }

    /**
     * Set the ticket resto.
     *
     * @param bool|null $ticketResto The ticket resto.
     * @return Taches Returns this Taches.
     */
    public function setTicketResto(?bool $ticketResto): Taches {
        $this->ticketResto = $ticketResto;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param string|null $typeHeure The type heure.
     * @return Taches Returns this Taches.
     */
    public function setTypeHeure(?string $typeHeure): Taches {
        $this->typeHeure = $typeHeure;
        return $this;
    }
}
