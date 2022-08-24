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
 * Absences cp previsionnel.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AbsencesCpPrevisionnel {

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Collaborateur.
     *
     * @var string|null
     */
    private $collaborateur;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Date debut cp.
     *
     * @var DateTime|null
     */
    private $dateDebutCp;

    /**
     * Date demande.
     *
     * @var DateTime|null
     */
    private $dateDemande;

    /**
     * Date etat cp.
     *
     * @var DateTime|null
     */
    private $dateEtatCp;

    /**
     * Date fin cp.
     *
     * @var DateTime|null
     */
    private $dateFinCp;

    /**
     * Depuis web.
     *
     * @var bool|null
     */
    private $depuisWeb;

    /**
     * Etat cp.
     *
     * @var string|null
     */
    private $etatCp;

    /**
     * Indice.
     *
     * @var string|null
     */
    private $indice;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the collaborateur.
     *
     * @return string|null Returns the collaborateur.
     */
    public function getCollaborateur(): ?string {
        return $this->collaborateur;
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
     * Get the date debut cp.
     *
     * @return DateTime|null Returns the date debut cp.
     */
    public function getDateDebutCp(): ?DateTime {
        return $this->dateDebutCp;
    }

    /**
     * Get the date demande.
     *
     * @return DateTime|null Returns the date demande.
     */
    public function getDateDemande(): ?DateTime {
        return $this->dateDemande;
    }

    /**
     * Get the date etat cp.
     *
     * @return DateTime|null Returns the date etat cp.
     */
    public function getDateEtatCp(): ?DateTime {
        return $this->dateEtatCp;
    }

    /**
     * Get the date fin cp.
     *
     * @return DateTime|null Returns the date fin cp.
     */
    public function getDateFinCp(): ?DateTime {
        return $this->dateFinCp;
    }

    /**
     * Get the depuis web.
     *
     * @return bool|null Returns the depuis web.
     */
    public function getDepuisWeb(): ?bool {
        return $this->depuisWeb;
    }

    /**
     * Get the etat cp.
     *
     * @return string|null Returns the etat cp.
     */
    public function getEtatCp(): ?string {
        return $this->etatCp;
    }

    /**
     * Get the indice.
     *
     * @return string|null Returns the indice.
     */
    public function getIndice(): ?string {
        return $this->indice;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return AbsencesCpPrevisionnel Returns this Absences cp previsionnel.
     */
    public function setCodeEmploye(?string $codeEmploye): AbsencesCpPrevisionnel {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the collaborateur.
     *
     * @param string|null $collaborateur The collaborateur.
     * @return AbsencesCpPrevisionnel Returns this Absences cp previsionnel.
     */
    public function setCollaborateur(?string $collaborateur): AbsencesCpPrevisionnel {
        $this->collaborateur = $collaborateur;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return AbsencesCpPrevisionnel Returns this Absences cp previsionnel.
     */
    public function setCommentaire(?string $commentaire): AbsencesCpPrevisionnel {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date debut cp.
     *
     * @param DateTime|null $dateDebutCp The date debut cp.
     * @return AbsencesCpPrevisionnel Returns this Absences cp previsionnel.
     */
    public function setDateDebutCp(?DateTime $dateDebutCp): AbsencesCpPrevisionnel {
        $this->dateDebutCp = $dateDebutCp;
        return $this;
    }

    /**
     * Set the date demande.
     *
     * @param DateTime|null $dateDemande The date demande.
     * @return AbsencesCpPrevisionnel Returns this Absences cp previsionnel.
     */
    public function setDateDemande(?DateTime $dateDemande): AbsencesCpPrevisionnel {
        $this->dateDemande = $dateDemande;
        return $this;
    }

    /**
     * Set the date etat cp.
     *
     * @param DateTime|null $dateEtatCp The date etat cp.
     * @return AbsencesCpPrevisionnel Returns this Absences cp previsionnel.
     */
    public function setDateEtatCp(?DateTime $dateEtatCp): AbsencesCpPrevisionnel {
        $this->dateEtatCp = $dateEtatCp;
        return $this;
    }

    /**
     * Set the date fin cp.
     *
     * @param DateTime|null $dateFinCp The date fin cp.
     * @return AbsencesCpPrevisionnel Returns this Absences cp previsionnel.
     */
    public function setDateFinCp(?DateTime $dateFinCp): AbsencesCpPrevisionnel {
        $this->dateFinCp = $dateFinCp;
        return $this;
    }

    /**
     * Set the depuis web.
     *
     * @param bool|null $depuisWeb The depuis web.
     * @return AbsencesCpPrevisionnel Returns this Absences cp previsionnel.
     */
    public function setDepuisWeb(?bool $depuisWeb): AbsencesCpPrevisionnel {
        $this->depuisWeb = $depuisWeb;
        return $this;
    }

    /**
     * Set the etat cp.
     *
     * @param string|null $etatCp The etat cp.
     * @return AbsencesCpPrevisionnel Returns this Absences cp previsionnel.
     */
    public function setEtatCp(?string $etatCp): AbsencesCpPrevisionnel {
        $this->etatCp = $etatCp;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string|null $indice The indice.
     * @return AbsencesCpPrevisionnel Returns this Absences cp previsionnel.
     */
    public function setIndice(?string $indice): AbsencesCpPrevisionnel {
        $this->indice = $indice;
        return $this;
    }
}
