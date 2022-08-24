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
 * Plans fact bon trav.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PlansFactBonTrav {

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
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Coefficient.
     *
     * @var float|null
     */
    private $coefficient;

    /**
     * Date bt.
     *
     * @var DateTime|null
     */
    private $dateBt;

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
     * Duree.
     *
     * @var float|null
     */
    private $duree;

    /**
     * Indice.
     *
     * @var int|null
     */
    private $indice;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Poste rent.
     *
     * @var string|null
     */
    private $posteRent;

    /**
     * Prix achat.
     *
     * @var float|null
     */
    private $prixAchat;

    /**
     * Px facture.
     *
     * @var bool|null
     */
    private $pxFacture;

    /**
     * Taux.
     *
     * @var float|null
     */
    private $taux;

    /**
     * Ventil marge.
     *
     * @var bool|null
     */
    private $ventilMarge;

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
     * Get the code regroupement.
     *
     * @return string|null Returns the code regroupement.
     */
    public function getCodeRegroupement(): ?string {
        return $this->codeRegroupement;
    }

    /**
     * Get the coefficient.
     *
     * @return float|null Returns the coefficient.
     */
    public function getCoefficient(): ?float {
        return $this->coefficient;
    }

    /**
     * Get the date bt.
     *
     * @return DateTime|null Returns the date bt.
     */
    public function getDateBt(): ?DateTime {
        return $this->dateBt;
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
     * Get the duree.
     *
     * @return float|null Returns the duree.
     */
    public function getDuree(): ?float {
        return $this->duree;
    }

    /**
     * Get the indice.
     *
     * @return int|null Returns the indice.
     */
    public function getIndice(): ?int {
        return $this->indice;
    }

    /**
     * Get the num bt.
     *
     * @return int|null Returns the num bt.
     */
    public function getNumBt(): ?int {
        return $this->numBt;
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
     * Get the prix achat.
     *
     * @return float|null Returns the prix achat.
     */
    public function getPrixAchat(): ?float {
        return $this->prixAchat;
    }

    /**
     * Get the px facture.
     *
     * @return bool|null Returns the px facture.
     */
    public function getPxFacture(): ?bool {
        return $this->pxFacture;
    }

    /**
     * Get the taux.
     *
     * @return float|null Returns the taux.
     */
    public function getTaux(): ?float {
        return $this->taux;
    }

    /**
     * Get the ventil marge.
     *
     * @return bool|null Returns the ventil marge.
     */
    public function getVentilMarge(): ?bool {
        return $this->ventilMarge;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setCodeAffaire(?string $codeAffaire): PlansFactBonTrav {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setCodeArticle(?string $codeArticle): PlansFactBonTrav {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setCodeChantier(?string $codeChantier): PlansFactBonTrav {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setCodeClient(?string $codeClient): PlansFactBonTrav {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setCodeRegroupement(?string $codeRegroupement): PlansFactBonTrav {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float|null $coefficient The coefficient.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setCoefficient(?float $coefficient): PlansFactBonTrav {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the date bt.
     *
     * @param DateTime|null $dateBt The date bt.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setDateBt(?DateTime $dateBt): PlansFactBonTrav {
        $this->dateBt = $dateBt;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string|null $designation The designation.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setDesignation(?string $designation): PlansFactBonTrav {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string|null $designation2 The designation2.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setDesignation2(?string $designation2): PlansFactBonTrav {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string|null $designation3 The designation3.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setDesignation3(?string $designation3): PlansFactBonTrav {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param float|null $duree The duree.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setDuree(?float $duree): PlansFactBonTrav {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int|null $indice The indice.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setIndice(?int $indice): PlansFactBonTrav {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setNumBt(?int $numBt): PlansFactBonTrav {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setPosteRent(?string $posteRent): PlansFactBonTrav {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix achat.
     *
     * @param float|null $prixAchat The prix achat.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setPrixAchat(?float $prixAchat): PlansFactBonTrav {
        $this->prixAchat = $prixAchat;
        return $this;
    }

    /**
     * Set the px facture.
     *
     * @param bool|null $pxFacture The px facture.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setPxFacture(?bool $pxFacture): PlansFactBonTrav {
        $this->pxFacture = $pxFacture;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float|null $taux The taux.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setTaux(?float $taux): PlansFactBonTrav {
        $this->taux = $taux;
        return $this;
    }

    /**
     * Set the ventil marge.
     *
     * @param bool|null $ventilMarge The ventil marge.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setVentilMarge(?bool $ventilMarge): PlansFactBonTrav {
        $this->ventilMarge = $ventilMarge;
        return $this;
    }
}
