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

use DateTime;

/**
 * Materiels.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Materiels {

    /**
     * Car tec.
     *
     * @var string|null
     */
    private $carTec;

    /**
     * Categorie.
     *
     * @var string|null
     */
    private $categorie;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code intervenant.
     *
     * @var string|null
     */
    private $codeIntervenant;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Date achat.
     *
     * @var DateTime|null
     */
    private $dateAchat;

    /**
     * Date fin util.
     *
     * @var DateTime|null
     */
    private $dateFinUtil;

    /**
     * Indice aff.
     *
     * @var int|null
     */
    private $indiceAff;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Ref image.
     *
     * @var string|null
     */
    private $refImage;

    /**
     * Sous categorie.
     *
     * @var string|null
     */
    private $sousCategorie;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the car tec.
     *
     * @return string|null Returns the car tec.
     */
    public function getCarTec(): ?string {
        return $this->carTec;
    }

    /**
     * Get the categorie.
     *
     * @return string|null Returns the categorie.
     */
    public function getCategorie(): ?string {
        return $this->categorie;
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
     * Get the code intervenant.
     *
     * @return string|null Returns the code intervenant.
     */
    public function getCodeIntervenant(): ?string {
        return $this->codeIntervenant;
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
     * Get the date achat.
     *
     * @return DateTime|null Returns the date achat.
     */
    public function getDateAchat(): ?DateTime {
        return $this->dateAchat;
    }

    /**
     * Get the date fin util.
     *
     * @return DateTime|null Returns the date fin util.
     */
    public function getDateFinUtil(): ?DateTime {
        return $this->dateFinUtil;
    }

    /**
     * Get the indice aff.
     *
     * @return int|null Returns the indice aff.
     */
    public function getIndiceAff(): ?int {
        return $this->indiceAff;
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
     * Get the ref image.
     *
     * @return string|null Returns the ref image.
     */
    public function getRefImage(): ?string {
        return $this->refImage;
    }

    /**
     * Get the sous categorie.
     *
     * @return string|null Returns the sous categorie.
     */
    public function getSousCategorie(): ?string {
        return $this->sousCategorie;
    }

    /**
     * Set the car tec.
     *
     * @param string|null $carTec The car tec.
     * @return Materiels Returns this Materiels.
     */
    public function setCarTec(?string $carTec): Materiels {
        $this->carTec = $carTec;
        return $this;
    }

    /**
     * Set the categorie.
     *
     * @param string|null $categorie The categorie.
     * @return Materiels Returns this Materiels.
     */
    public function setCategorie(?string $categorie): Materiels {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Materiels Returns this Materiels.
     */
    public function setCodeClient(?string $codeClient): Materiels {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code intervenant.
     *
     * @param string|null $codeIntervenant The code intervenant.
     * @return Materiels Returns this Materiels.
     */
    public function setCodeIntervenant(?string $codeIntervenant): Materiels {
        $this->codeIntervenant = $codeIntervenant;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return Materiels Returns this Materiels.
     */
    public function setCommentaire(?string $commentaire): Materiels {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date achat.
     *
     * @param DateTime|null $dateAchat The date achat.
     * @return Materiels Returns this Materiels.
     */
    public function setDateAchat(?DateTime $dateAchat): Materiels {
        $this->dateAchat = $dateAchat;
        return $this;
    }

    /**
     * Set the date fin util.
     *
     * @param DateTime|null $dateFinUtil The date fin util.
     * @return Materiels Returns this Materiels.
     */
    public function setDateFinUtil(?DateTime $dateFinUtil): Materiels {
        $this->dateFinUtil = $dateFinUtil;
        return $this;
    }

    /**
     * Set the indice aff.
     *
     * @param int|null $indiceAff The indice aff.
     * @return Materiels Returns this Materiels.
     */
    public function setIndiceAff(?int $indiceAff): Materiels {
        $this->indiceAff = $indiceAff;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Materiels Returns this Materiels.
     */
    public function setLibelle(?string $libelle): Materiels {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string|null $refImage The ref image.
     * @return Materiels Returns this Materiels.
     */
    public function setRefImage(?string $refImage): Materiels {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the sous categorie.
     *
     * @param string|null $sousCategorie The sous categorie.
     * @return Materiels Returns this Materiels.
     */
    public function setSousCategorie(?string $sousCategorie): Materiels {
        $this->sousCategorie = $sousCategorie;
        return $this;
    }
}
