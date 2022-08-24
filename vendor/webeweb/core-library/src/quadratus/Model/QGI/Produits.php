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
 * Produits.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Produits {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Compteur.
     *
     * @var int|null
     */
    private $compteur;

    /**
     * Cpt maj.
     *
     * @var int|null
     */
    private $cptMaj;

    /**
     * Dernier numero.
     *
     * @var int|null
     */
    private $dernierNumero;

    /**
     * Fichier licence.
     *
     * @var string|null
     */
    private $fichierLicence;

    /**
     * Gamme windows.
     *
     * @var bool|null
     */
    private $gammeWindows;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Lettre licence.
     *
     * @var string|null
     */
    private $lettreLicence;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Nom prod licence.
     *
     * @var string|null
     */
    private $nomProdLicence;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the compteur.
     *
     * @return int|null Returns the compteur.
     */
    public function getCompteur(): ?int {
        return $this->compteur;
    }

    /**
     * Get the cpt maj.
     *
     * @return int|null Returns the cpt maj.
     */
    public function getCptMaj(): ?int {
        return $this->cptMaj;
    }

    /**
     * Get the dernier numero.
     *
     * @return int|null Returns the dernier numero.
     */
    public function getDernierNumero(): ?int {
        return $this->dernierNumero;
    }

    /**
     * Get the fichier licence.
     *
     * @return string|null Returns the fichier licence.
     */
    public function getFichierLicence(): ?string {
        return $this->fichierLicence;
    }

    /**
     * Get the gamme windows.
     *
     * @return bool|null Returns the gamme windows.
     */
    public function getGammeWindows(): ?bool {
        return $this->gammeWindows;
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
     * Get the lettre licence.
     *
     * @return string|null Returns the lettre licence.
     */
    public function getLettreLicence(): ?string {
        return $this->lettreLicence;
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
     * Get the nom prod licence.
     *
     * @return string|null Returns the nom prod licence.
     */
    public function getNomProdLicence(): ?string {
        return $this->nomProdLicence;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Produits Returns this Produits.
     */
    public function setCode(?string $code): Produits {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the compteur.
     *
     * @param int|null $compteur The compteur.
     * @return Produits Returns this Produits.
     */
    public function setCompteur(?int $compteur): Produits {
        $this->compteur = $compteur;
        return $this;
    }

    /**
     * Set the cpt maj.
     *
     * @param int|null $cptMaj The cpt maj.
     * @return Produits Returns this Produits.
     */
    public function setCptMaj(?int $cptMaj): Produits {
        $this->cptMaj = $cptMaj;
        return $this;
    }

    /**
     * Set the dernier numero.
     *
     * @param int|null $dernierNumero The dernier numero.
     * @return Produits Returns this Produits.
     */
    public function setDernierNumero(?int $dernierNumero): Produits {
        $this->dernierNumero = $dernierNumero;
        return $this;
    }

    /**
     * Set the fichier licence.
     *
     * @param string|null $fichierLicence The fichier licence.
     * @return Produits Returns this Produits.
     */
    public function setFichierLicence(?string $fichierLicence): Produits {
        $this->fichierLicence = $fichierLicence;
        return $this;
    }

    /**
     * Set the gamme windows.
     *
     * @param bool|null $gammeWindows The gamme windows.
     * @return Produits Returns this Produits.
     */
    public function setGammeWindows(?bool $gammeWindows): Produits {
        $this->gammeWindows = $gammeWindows;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Produits Returns this Produits.
     */
    public function setIntitule(?string $intitule): Produits {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the lettre licence.
     *
     * @param string|null $lettreLicence The lettre licence.
     * @return Produits Returns this Produits.
     */
    public function setLettreLicence(?string $lettreLicence): Produits {
        $this->lettreLicence = $lettreLicence;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return Produits Returns this Produits.
     */
    public function setNom(?string $nom): Produits {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom prod licence.
     *
     * @param string|null $nomProdLicence The nom prod licence.
     * @return Produits Returns this Produits.
     */
    public function setNomProdLicence(?string $nomProdLicence): Produits {
        $this->nomProdLicence = $nomProdLicence;
        return $this;
    }
}
