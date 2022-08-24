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
 * Prospects.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Prospects {

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
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Code prospect.
     *
     * @var string|null
     */
    private $codeProspect;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

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
     * Nom suite2.
     *
     * @var string|null
     */
    private $nomSuite2;

    /**
     * Nom suite3.
     *
     * @var string|null
     */
    private $nomSuite3;

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
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
    }

    /**
     * Get the code prospect.
     *
     * @return string|null Returns the code prospect.
     */
    public function getCodeProspect(): ?string {
        return $this->codeProspect;
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
     * Get the nom suite2.
     *
     * @return string|null Returns the nom suite2.
     */
    public function getNomSuite2(): ?string {
        return $this->nomSuite2;
    }

    /**
     * Get the nom suite3.
     *
     * @return string|null Returns the nom suite3.
     */
    public function getNomSuite3(): ?string {
        return $this->nomSuite3;
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
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Prospects Returns this Prospects.
     */
    public function setBtq(?string $btq): Prospects {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Prospects Returns this Prospects.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Prospects {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Prospects Returns this Prospects.
     */
    public function setCodePostal(?string $codePostal): Prospects {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code prospect.
     *
     * @param string|null $codeProspect The code prospect.
     * @return Prospects Returns this Prospects.
     */
    public function setCodeProspect(?string $codeProspect): Prospects {
        $this->codeProspect = $codeProspect;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Prospects Returns this Prospects.
     */
    public function setComplement(?string $complement): Prospects {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return Prospects Returns this Prospects.
     */
    public function setNom(?string $nom): Prospects {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string|null $nomSuite The nom suite.
     * @return Prospects Returns this Prospects.
     */
    public function setNomSuite(?string $nomSuite): Prospects {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom suite2.
     *
     * @param string|null $nomSuite2 The nom suite2.
     * @return Prospects Returns this Prospects.
     */
    public function setNomSuite2(?string $nomSuite2): Prospects {
        $this->nomSuite2 = $nomSuite2;
        return $this;
    }

    /**
     * Set the nom suite3.
     *
     * @param string|null $nomSuite3 The nom suite3.
     * @return Prospects Returns this Prospects.
     */
    public function setNomSuite3(?string $nomSuite3): Prospects {
        $this->nomSuite3 = $nomSuite3;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Prospects Returns this Prospects.
     */
    public function setNomVoie(?string $nomVoie): Prospects {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Prospects Returns this Prospects.
     */
    public function setNumVoie(?string $numVoie): Prospects {
        $this->numVoie = $numVoie;
        return $this;
    }
}
