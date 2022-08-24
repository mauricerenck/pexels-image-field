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
 * Adresses livraison.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AdressesLivraison {

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
     * Code livraison.
     *
     * @var string|null
     */
    private $codeLivraison;

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
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

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
     * Get the code livraison.
     *
     * @return string|null Returns the code livraison.
     */
    public function getCodeLivraison(): ?string {
        return $this->codeLivraison;
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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
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
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return AdressesLivraison Returns this Adresses livraison.
     */
    public function setBtq(?string $btq): AdressesLivraison {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return AdressesLivraison Returns this Adresses livraison.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): AdressesLivraison {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the code livraison.
     *
     * @param string|null $codeLivraison The code livraison.
     * @return AdressesLivraison Returns this Adresses livraison.
     */
    public function setCodeLivraison(?string $codeLivraison): AdressesLivraison {
        $this->codeLivraison = $codeLivraison;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return AdressesLivraison Returns this Adresses livraison.
     */
    public function setCodePostal(?string $codePostal): AdressesLivraison {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return AdressesLivraison Returns this Adresses livraison.
     */
    public function setComplement(?string $complement): AdressesLivraison {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return AdressesLivraison Returns this Adresses livraison.
     */
    public function setLibelle(?string $libelle): AdressesLivraison {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return AdressesLivraison Returns this Adresses livraison.
     */
    public function setNom(?string $nom): AdressesLivraison {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string|null $nomSuite The nom suite.
     * @return AdressesLivraison Returns this Adresses livraison.
     */
    public function setNomSuite(?string $nomSuite): AdressesLivraison {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return AdressesLivraison Returns this Adresses livraison.
     */
    public function setNomVoie(?string $nomVoie): AdressesLivraison {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return AdressesLivraison Returns this Adresses livraison.
     */
    public function setNumVoie(?string $numVoie): AdressesLivraison {
        $this->numVoie = $numVoie;
        return $this;
    }
}
