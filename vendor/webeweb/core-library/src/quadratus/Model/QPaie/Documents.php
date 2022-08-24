<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

use DateTime;

/**
 * Documents.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Documents {

    /**
     * Annee.
     *
     * @var string|null
     */
    private $annee;

    /**
     * Auteur.
     *
     * @var string|null
     */
    private $auteur;

    /**
     * Chapitre.
     *
     * @var string|null
     */
    private $chapitre;

    /**
     * Chrono.
     *
     * @var string|null
     */
    private $chrono;

    /**
     * Code nature.
     *
     * @var string|null
     */
    private $codeNature;

    /**
     * Date heure sys.
     *
     * @var DateTime|null
     */
    private $dateHeureSys;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Indice bulletin.
     *
     * @var int|null
     */
    private $indiceBulletin;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode archivage.
     *
     * @var DateTime|null
     */
    private $periodeArchivage;

    /**
     * Publier web.
     *
     * @var bool|null
     */
    private $publierWeb;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the annee.
     *
     * @return string|null Returns the annee.
     */
    public function getAnnee(): ?string {
        return $this->annee;
    }

    /**
     * Get the auteur.
     *
     * @return string|null Returns the auteur.
     */
    public function getAuteur(): ?string {
        return $this->auteur;
    }

    /**
     * Get the chapitre.
     *
     * @return string|null Returns the chapitre.
     */
    public function getChapitre(): ?string {
        return $this->chapitre;
    }

    /**
     * Get the chrono.
     *
     * @return string|null Returns the chrono.
     */
    public function getChrono(): ?string {
        return $this->chrono;
    }

    /**
     * Get the code nature.
     *
     * @return string|null Returns the code nature.
     */
    public function getCodeNature(): ?string {
        return $this->codeNature;
    }

    /**
     * Get the date heure sys.
     *
     * @return DateTime|null Returns the date heure sys.
     */
    public function getDateHeureSys(): ?DateTime {
        return $this->dateHeureSys;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification(): ?DateTime {
        return $this->dateModification;
    }

    /**
     * Get the indice bulletin.
     *
     * @return int|null Returns the indice bulletin.
     */
    public function getIndiceBulletin(): ?int {
        return $this->indiceBulletin;
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
     * Get the lien document.
     *
     * @return string|null Returns the lien document.
     */
    public function getLienDocument(): ?string {
        return $this->lienDocument;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the periode archivage.
     *
     * @return DateTime|null Returns the periode archivage.
     */
    public function getPeriodeArchivage(): ?DateTime {
        return $this->periodeArchivage;
    }

    /**
     * Get the publier web.
     *
     * @return bool|null Returns the publier web.
     */
    public function getPublierWeb(): ?bool {
        return $this->publierWeb;
    }

    /**
     * Set the annee.
     *
     * @param string|null $annee The annee.
     * @return Documents Returns this Documents.
     */
    public function setAnnee(?string $annee): Documents {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the auteur.
     *
     * @param string|null $auteur The auteur.
     * @return Documents Returns this Documents.
     */
    public function setAuteur(?string $auteur): Documents {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * Set the chapitre.
     *
     * @param string|null $chapitre The chapitre.
     * @return Documents Returns this Documents.
     */
    public function setChapitre(?string $chapitre): Documents {
        $this->chapitre = $chapitre;
        return $this;
    }

    /**
     * Set the chrono.
     *
     * @param string|null $chrono The chrono.
     * @return Documents Returns this Documents.
     */
    public function setChrono(?string $chrono): Documents {
        $this->chrono = $chrono;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return Documents Returns this Documents.
     */
    public function setCodeNature(?string $codeNature): Documents {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the date heure sys.
     *
     * @param DateTime|null $dateHeureSys The date heure sys.
     * @return Documents Returns this Documents.
     */
    public function setDateHeureSys(?DateTime $dateHeureSys): Documents {
        $this->dateHeureSys = $dateHeureSys;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Documents Returns this Documents.
     */
    public function setDateModification(?DateTime $dateModification): Documents {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the indice bulletin.
     *
     * @param int|null $indiceBulletin The indice bulletin.
     * @return Documents Returns this Documents.
     */
    public function setIndiceBulletin(?int $indiceBulletin): Documents {
        $this->indiceBulletin = $indiceBulletin;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Documents Returns this Documents.
     */
    public function setLibelle(?string $libelle): Documents {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return Documents Returns this Documents.
     */
    public function setLienDocument(?string $lienDocument): Documents {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return Documents Returns this Documents.
     */
    public function setNumeroEmploye(?string $numeroEmploye): Documents {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode archivage.
     *
     * @param DateTime|null $periodeArchivage The periode archivage.
     * @return Documents Returns this Documents.
     */
    public function setPeriodeArchivage(?DateTime $periodeArchivage): Documents {
        $this->periodeArchivage = $periodeArchivage;
        return $this;
    }

    /**
     * Set the publier web.
     *
     * @param bool|null $publierWeb The publier web.
     * @return Documents Returns this Documents.
     */
    public function setPublierWeb(?bool $publierWeb): Documents {
        $this->publierWeb = $publierWeb;
        return $this;
    }
}
