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
 * Charges produits.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class ChargesProduits {

    /**
     * Centre.
     *
     * @var string|null
     */
    private $centre;

    /**
     * Code feuille.
     *
     * @var string|null
     */
    private $codeFeuille;

    /**
     * Commentaires.
     *
     * @var string|null
     */
    private $commentaires;

    /**
     * Contre partie.
     *
     * @var string|null
     */
    private $contrePartie;

    /**
     * Etat ligne.
     *
     * @var string|null
     */
    private $etatLigne;

    /**
     * Lib ecriture.
     *
     * @var string|null
     */
    private $libEcriture;

    /**
     * Mois revision.
     *
     * @var string|null
     */
    private $moisRevision;

    /**
     * Mt ht.
     *
     * @var float|null
     */
    private $mtHt;

    /**
     * Mt n1.
     *
     * @var float|null
     */
    private $mtN1;

    /**
     * Nature.
     *
     * @var string|null
     */
    private $nature;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Num lot ecriture.
     *
     * @var int|null
     */
    private $numLotEcriture;

    /**
     * Num lot periodicite.
     *
     * @var int|null
     */
    private $numLotPeriodicite;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Ref image.
     *
     * @var string|null
     */
    private $refImage;

    /**
     * Sens.
     *
     * @var string|null
     */
    private $sens;

    /**
     * Tx tva.
     *
     * @var float|null
     */
    private $txTva;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code feuille.
     *
     * @return string|null Returns the code feuille.
     */
    public function getCodeFeuille(): ?string {
        return $this->codeFeuille;
    }

    /**
     * Get the commentaires.
     *
     * @return string|null Returns the commentaires.
     */
    public function getCommentaires(): ?string {
        return $this->commentaires;
    }

    /**
     * Get the contre partie.
     *
     * @return string|null Returns the contre partie.
     */
    public function getContrePartie(): ?string {
        return $this->contrePartie;
    }

    /**
     * Get the etat ligne.
     *
     * @return string|null Returns the etat ligne.
     */
    public function getEtatLigne(): ?string {
        return $this->etatLigne;
    }

    /**
     * Get the lib ecriture.
     *
     * @return string|null Returns the lib ecriture.
     */
    public function getLibEcriture(): ?string {
        return $this->libEcriture;
    }

    /**
     * Get the mois revision.
     *
     * @return string|null Returns the mois revision.
     */
    public function getMoisRevision(): ?string {
        return $this->moisRevision;
    }

    /**
     * Get the mt ht.
     *
     * @return float|null Returns the mt ht.
     */
    public function getMtHt(): ?float {
        return $this->mtHt;
    }

    /**
     * Get the mt n1.
     *
     * @return float|null Returns the mt n1.
     */
    public function getMtN1(): ?float {
        return $this->mtN1;
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
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Get the num lot ecriture.
     *
     * @return int|null Returns the num lot ecriture.
     */
    public function getNumLotEcriture(): ?int {
        return $this->numLotEcriture;
    }

    /**
     * Get the num lot periodicite.
     *
     * @return int|null Returns the num lot periodicite.
     */
    public function getNumLotPeriodicite(): ?int {
        return $this->numLotPeriodicite;
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
     * Get the ref image.
     *
     * @return string|null Returns the ref image.
     */
    public function getRefImage(): ?string {
        return $this->refImage;
    }

    /**
     * Get the sens.
     *
     * @return string|null Returns the sens.
     */
    public function getSens(): ?string {
        return $this->sens;
    }

    /**
     * Get the tx tva.
     *
     * @return float|null Returns the tx tva.
     */
    public function getTxTva(): ?float {
        return $this->txTva;
    }

    /**
     * Set the centre.
     *
     * @param string|null $centre The centre.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setCentre(?string $centre): ChargesProduits {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the code feuille.
     *
     * @param string|null $codeFeuille The code feuille.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setCodeFeuille(?string $codeFeuille): ChargesProduits {
        $this->codeFeuille = $codeFeuille;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string|null $commentaires The commentaires.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setCommentaires(?string $commentaires): ChargesProduits {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the contre partie.
     *
     * @param string|null $contrePartie The contre partie.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setContrePartie(?string $contrePartie): ChargesProduits {
        $this->contrePartie = $contrePartie;
        return $this;
    }

    /**
     * Set the etat ligne.
     *
     * @param string|null $etatLigne The etat ligne.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setEtatLigne(?string $etatLigne): ChargesProduits {
        $this->etatLigne = $etatLigne;
        return $this;
    }

    /**
     * Set the lib ecriture.
     *
     * @param string|null $libEcriture The lib ecriture.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setLibEcriture(?string $libEcriture): ChargesProduits {
        $this->libEcriture = $libEcriture;
        return $this;
    }

    /**
     * Set the mois revision.
     *
     * @param string|null $moisRevision The mois revision.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setMoisRevision(?string $moisRevision): ChargesProduits {
        $this->moisRevision = $moisRevision;
        return $this;
    }

    /**
     * Set the mt ht.
     *
     * @param float|null $mtHt The mt ht.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setMtHt(?float $mtHt): ChargesProduits {
        $this->mtHt = $mtHt;
        return $this;
    }

    /**
     * Set the mt n1.
     *
     * @param float|null $mtN1 The mt n1.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setMtN1(?float $mtN1): ChargesProduits {
        $this->mtN1 = $mtN1;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string|null $nature The nature.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setNature(?string $nature): ChargesProduits {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setNumLigne(?int $numLigne): ChargesProduits {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num lot ecriture.
     *
     * @param int|null $numLotEcriture The num lot ecriture.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setNumLotEcriture(?int $numLotEcriture): ChargesProduits {
        $this->numLotEcriture = $numLotEcriture;
        return $this;
    }

    /**
     * Set the num lot periodicite.
     *
     * @param int|null $numLotPeriodicite The num lot periodicite.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setNumLotPeriodicite(?int $numLotPeriodicite): ChargesProduits {
        $this->numLotPeriodicite = $numLotPeriodicite;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setNumeroCompte(?string $numeroCompte): ChargesProduits {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string|null $refImage The ref image.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setRefImage(?string $refImage): ChargesProduits {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the sens.
     *
     * @param string|null $sens The sens.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setSens(?string $sens): ChargesProduits {
        $this->sens = $sens;
        return $this;
    }

    /**
     * Set the tx tva.
     *
     * @param float|null $txTva The tx tva.
     * @return ChargesProduits Returns this Charges produits.
     */
    public function setTxTva(?float $txTva): ChargesProduits {
        $this->txTva = $txTva;
        return $this;
    }
}
