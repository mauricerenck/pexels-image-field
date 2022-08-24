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
 * Logiciels.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Logiciels {

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
     * Date fin maint.
     *
     * @var DateTime|null
     */
    private $dateFinMaint;

    /**
     * Indice aff.
     *
     * @var int|null
     */
    private $indiceAff;

    /**
     * Maintenance.
     *
     * @var bool|null
     */
    private $maintenance;

    /**
     * Montant maint.
     *
     * @var float|null
     */
    private $montantMaint;

    /**
     * Nom logiciel.
     *
     * @var string|null
     */
    private $nomLogiciel;

    /**
     * Num licence.
     *
     * @var string|null
     */
    private $numLicence;

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
     * Get the date fin maint.
     *
     * @return DateTime|null Returns the date fin maint.
     */
    public function getDateFinMaint(): ?DateTime {
        return $this->dateFinMaint;
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
     * Get the maintenance.
     *
     * @return bool|null Returns the maintenance.
     */
    public function getMaintenance(): ?bool {
        return $this->maintenance;
    }

    /**
     * Get the montant maint.
     *
     * @return float|null Returns the montant maint.
     */
    public function getMontantMaint(): ?float {
        return $this->montantMaint;
    }

    /**
     * Get the nom logiciel.
     *
     * @return string|null Returns the nom logiciel.
     */
    public function getNomLogiciel(): ?string {
        return $this->nomLogiciel;
    }

    /**
     * Get the num licence.
     *
     * @return string|null Returns the num licence.
     */
    public function getNumLicence(): ?string {
        return $this->numLicence;
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
     * Set the categorie.
     *
     * @param string|null $categorie The categorie.
     * @return Logiciels Returns this Logiciels.
     */
    public function setCategorie(?string $categorie): Logiciels {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Logiciels Returns this Logiciels.
     */
    public function setCodeClient(?string $codeClient): Logiciels {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code intervenant.
     *
     * @param string|null $codeIntervenant The code intervenant.
     * @return Logiciels Returns this Logiciels.
     */
    public function setCodeIntervenant(?string $codeIntervenant): Logiciels {
        $this->codeIntervenant = $codeIntervenant;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return Logiciels Returns this Logiciels.
     */
    public function setCommentaire(?string $commentaire): Logiciels {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date achat.
     *
     * @param DateTime|null $dateAchat The date achat.
     * @return Logiciels Returns this Logiciels.
     */
    public function setDateAchat(?DateTime $dateAchat): Logiciels {
        $this->dateAchat = $dateAchat;
        return $this;
    }

    /**
     * Set the date fin maint.
     *
     * @param DateTime|null $dateFinMaint The date fin maint.
     * @return Logiciels Returns this Logiciels.
     */
    public function setDateFinMaint(?DateTime $dateFinMaint): Logiciels {
        $this->dateFinMaint = $dateFinMaint;
        return $this;
    }

    /**
     * Set the indice aff.
     *
     * @param int|null $indiceAff The indice aff.
     * @return Logiciels Returns this Logiciels.
     */
    public function setIndiceAff(?int $indiceAff): Logiciels {
        $this->indiceAff = $indiceAff;
        return $this;
    }

    /**
     * Set the maintenance.
     *
     * @param bool|null $maintenance The maintenance.
     * @return Logiciels Returns this Logiciels.
     */
    public function setMaintenance(?bool $maintenance): Logiciels {
        $this->maintenance = $maintenance;
        return $this;
    }

    /**
     * Set the montant maint.
     *
     * @param float|null $montantMaint The montant maint.
     * @return Logiciels Returns this Logiciels.
     */
    public function setMontantMaint(?float $montantMaint): Logiciels {
        $this->montantMaint = $montantMaint;
        return $this;
    }

    /**
     * Set the nom logiciel.
     *
     * @param string|null $nomLogiciel The nom logiciel.
     * @return Logiciels Returns this Logiciels.
     */
    public function setNomLogiciel(?string $nomLogiciel): Logiciels {
        $this->nomLogiciel = $nomLogiciel;
        return $this;
    }

    /**
     * Set the num licence.
     *
     * @param string|null $numLicence The num licence.
     * @return Logiciels Returns this Logiciels.
     */
    public function setNumLicence(?string $numLicence): Logiciels {
        $this->numLicence = $numLicence;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string|null $refImage The ref image.
     * @return Logiciels Returns this Logiciels.
     */
    public function setRefImage(?string $refImage): Logiciels {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the sous categorie.
     *
     * @param string|null $sousCategorie The sous categorie.
     * @return Logiciels Returns this Logiciels.
     */
    public function setSousCategorie(?string $sousCategorie): Logiciels {
        $this->sousCategorie = $sousCategorie;
        return $this;
    }
}
