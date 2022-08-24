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

/**
 * Factors.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Factors {

    /**
     * Bic.
     *
     * @var string|null
     */
    private $bic;

    /**
     * Btq.
     *
     * @var string|null
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string|null
     */
    private $bureauDistributeur;

    /**
     * Code factor.
     *
     * @var string|null
     */
    private $codeFactor;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

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
     * Iban.
     *
     * @var string|null
     */
    private $iban;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Nom suite.
     *
     * @var string|null
     */
    private $nomSuite;

    /**
     * Nom voie.
     *
     * @var string|null
     */
    private $nomVoie;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Telephone.
     *
     * @var string|null
     */
    private $telephone;

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
     * Get the btq.
     *
     * @return string|null Returns the btq.
     */
    public function getBtq(): ?string {
        return $this->btq;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string|null Returns the bureau distributeur.
     */
    public function getBureauDistributeur(): ?string {
        return $this->bureauDistributeur;
    }

    /**
     * Get the code factor.
     *
     * @return string|null Returns the code factor.
     */
    public function getCodeFactor(): ?string {
        return $this->codeFactor;
    }

    /**
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
    }

    /**
     * Get the complement.
     *
     * @return string|null Returns the complement.
     */
    public function getComplement(): ?string {
        return $this->complement;
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
     * Get the iban.
     *
     * @return string|null Returns the iban.
     */
    public function getIban(): ?string {
        return $this->iban;
    }

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getNom(): ?string {
        return $this->nom;
    }

    /**
     * Get the nom suite.
     *
     * @return string|null Returns the nom suite.
     */
    public function getNomSuite(): ?string {
        return $this->nomSuite;
    }

    /**
     * Get the nom voie.
     *
     * @return string|null Returns the nom voie.
     */
    public function getNomVoie(): ?string {
        return $this->nomVoie;
    }

    /**
     * Get the num voie.
     *
     * @return string|null Returns the num voie.
     */
    public function getNumVoie(): ?string {
        return $this->numVoie;
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
     * Get the telephone.
     *
     * @return string|null Returns the telephone.
     */
    public function getTelephone(): ?string {
        return $this->telephone;
    }

    /**
     * Set the bic.
     *
     * @param string|null $bic The bic.
     * @return Factors Returns this Factors.
     */
    public function setBic(?string $bic): Factors {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Factors Returns this Factors.
     */
    public function setBtq(?string $btq): Factors {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Factors Returns this Factors.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Factors {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the code factor.
     *
     * @param string|null $codeFactor The code factor.
     * @return Factors Returns this Factors.
     */
    public function setCodeFactor(?string $codeFactor): Factors {
        $this->codeFactor = $codeFactor;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Factors Returns this Factors.
     */
    public function setCodePostal(?string $codePostal): Factors {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Factors Returns this Factors.
     */
    public function setComplement(?string $complement): Factors {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string|null $domiciliationBancaire1 The domiciliation bancaire1.
     * @return Factors Returns this Factors.
     */
    public function setDomiciliationBancaire1(?string $domiciliationBancaire1): Factors {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string|null $domiciliationBancaire2 The domiciliation bancaire2.
     * @return Factors Returns this Factors.
     */
    public function setDomiciliationBancaire2(?string $domiciliationBancaire2): Factors {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return Factors Returns this Factors.
     */
    public function setIban(?string $iban): Factors {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return Factors Returns this Factors.
     */
    public function setNom(?string $nom): Factors {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string|null $nomSuite The nom suite.
     * @return Factors Returns this Factors.
     */
    public function setNomSuite(?string $nomSuite): Factors {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Factors Returns this Factors.
     */
    public function setNomVoie(?string $nomVoie): Factors {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Factors Returns this Factors.
     */
    public function setNumVoie(?string $numVoie): Factors {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Factors Returns this Factors.
     */
    public function setRib(?string $rib): Factors {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the telephone.
     *
     * @param string|null $telephone The telephone.
     * @return Factors Returns this Factors.
     */
    public function setTelephone(?string $telephone): Factors {
        $this->telephone = $telephone;
        return $this;
    }
}
