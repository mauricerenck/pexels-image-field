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
 * Chantiers reclamations.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ChantiersReclamations {

    /**
     * Alerte.
     *
     * @var bool|null
     */
    private $alerte;

    /**
     * Archivee.
     *
     * @var bool|null
     */
    private $archivee;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

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
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Critere liste1.
     *
     * @var string|null
     */
    private $critereListe1;

    /**
     * Critere liste2.
     *
     * @var string|null
     */
    private $critereListe2;

    /**
     * Date debut doc.
     *
     * @var DateTime|null
     */
    private $dateDebutDoc;

    /**
     * Date fin doc.
     *
     * @var DateTime|null
     */
    private $dateFinDoc;

    /**
     * Date reclam.
     *
     * @var DateTime|null
     */
    private $dateReclam;

    /**
     * Date traitement.
     *
     * @var DateTime|null
     */
    private $dateTraitement;

    /**
     * Niveau.
     *
     * @var string|null
     */
    private $niveau;

    /**
     * Niveau reclam.
     *
     * @var string|null
     */
    private $niveauReclam;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

    /**
     * Numero reclam.
     *
     * @var int|null
     */
    private $numeroReclam;

    /**
     * Reclamation.
     *
     * @var string|null
     */
    private $reclamation;

    /**
     * Resultat.
     *
     * @var string|null
     */
    private $resultat;

    /**
     * Type reclam.
     *
     * @var string|null
     */
    private $typeReclam;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the alerte.
     *
     * @return bool|null Returns the alerte.
     */
    public function getAlerte(): ?bool {
        return $this->alerte;
    }

    /**
     * Get the archivee.
     *
     * @return bool|null Returns the archivee.
     */
    public function getArchivee(): ?bool {
        return $this->archivee;
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
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the critere liste1.
     *
     * @return string|null Returns the critere liste1.
     */
    public function getCritereListe1(): ?string {
        return $this->critereListe1;
    }

    /**
     * Get the critere liste2.
     *
     * @return string|null Returns the critere liste2.
     */
    public function getCritereListe2(): ?string {
        return $this->critereListe2;
    }

    /**
     * Get the date debut doc.
     *
     * @return DateTime|null Returns the date debut doc.
     */
    public function getDateDebutDoc(): ?DateTime {
        return $this->dateDebutDoc;
    }

    /**
     * Get the date fin doc.
     *
     * @return DateTime|null Returns the date fin doc.
     */
    public function getDateFinDoc(): ?DateTime {
        return $this->dateFinDoc;
    }

    /**
     * Get the date reclam.
     *
     * @return DateTime|null Returns the date reclam.
     */
    public function getDateReclam(): ?DateTime {
        return $this->dateReclam;
    }

    /**
     * Get the date traitement.
     *
     * @return DateTime|null Returns the date traitement.
     */
    public function getDateTraitement(): ?DateTime {
        return $this->dateTraitement;
    }

    /**
     * Get the niveau.
     *
     * @return string|null Returns the niveau.
     */
    public function getNiveau(): ?string {
        return $this->niveau;
    }

    /**
     * Get the niveau reclam.
     *
     * @return string|null Returns the niveau reclam.
     */
    public function getNiveauReclam(): ?string {
        return $this->niveauReclam;
    }

    /**
     * Get the numero pj.
     *
     * @return int|null Returns the numero pj.
     */
    public function getNumeroPj(): ?int {
        return $this->numeroPj;
    }

    /**
     * Get the numero reclam.
     *
     * @return int|null Returns the numero reclam.
     */
    public function getNumeroReclam(): ?int {
        return $this->numeroReclam;
    }

    /**
     * Get the reclamation.
     *
     * @return string|null Returns the reclamation.
     */
    public function getReclamation(): ?string {
        return $this->reclamation;
    }

    /**
     * Get the resultat.
     *
     * @return string|null Returns the resultat.
     */
    public function getResultat(): ?string {
        return $this->resultat;
    }

    /**
     * Get the type reclam.
     *
     * @return string|null Returns the type reclam.
     */
    public function getTypeReclam(): ?string {
        return $this->typeReclam;
    }

    /**
     * Set the alerte.
     *
     * @param bool|null $alerte The alerte.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setAlerte(?bool $alerte): ChantiersReclamations {
        $this->alerte = $alerte;
        return $this;
    }

    /**
     * Set the archivee.
     *
     * @param bool|null $archivee The archivee.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setArchivee(?bool $archivee): ChantiersReclamations {
        $this->archivee = $archivee;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setCodeAffaire(?string $codeAffaire): ChantiersReclamations {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setCodeChantier(?string $codeChantier): ChantiersReclamations {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setCodeClient(?string $codeClient): ChantiersReclamations {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): ChantiersReclamations {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the critere liste1.
     *
     * @param string|null $critereListe1 The critere liste1.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setCritereListe1(?string $critereListe1): ChantiersReclamations {
        $this->critereListe1 = $critereListe1;
        return $this;
    }

    /**
     * Set the critere liste2.
     *
     * @param string|null $critereListe2 The critere liste2.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setCritereListe2(?string $critereListe2): ChantiersReclamations {
        $this->critereListe2 = $critereListe2;
        return $this;
    }

    /**
     * Set the date debut doc.
     *
     * @param DateTime|null $dateDebutDoc The date debut doc.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setDateDebutDoc(?DateTime $dateDebutDoc): ChantiersReclamations {
        $this->dateDebutDoc = $dateDebutDoc;
        return $this;
    }

    /**
     * Set the date fin doc.
     *
     * @param DateTime|null $dateFinDoc The date fin doc.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setDateFinDoc(?DateTime $dateFinDoc): ChantiersReclamations {
        $this->dateFinDoc = $dateFinDoc;
        return $this;
    }

    /**
     * Set the date reclam.
     *
     * @param DateTime|null $dateReclam The date reclam.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setDateReclam(?DateTime $dateReclam): ChantiersReclamations {
        $this->dateReclam = $dateReclam;
        return $this;
    }

    /**
     * Set the date traitement.
     *
     * @param DateTime|null $dateTraitement The date traitement.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setDateTraitement(?DateTime $dateTraitement): ChantiersReclamations {
        $this->dateTraitement = $dateTraitement;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string|null $niveau The niveau.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setNiveau(?string $niveau): ChantiersReclamations {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the niveau reclam.
     *
     * @param string|null $niveauReclam The niveau reclam.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setNiveauReclam(?string $niveauReclam): ChantiersReclamations {
        $this->niveauReclam = $niveauReclam;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setNumeroPj(?int $numeroPj): ChantiersReclamations {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the numero reclam.
     *
     * @param int|null $numeroReclam The numero reclam.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setNumeroReclam(?int $numeroReclam): ChantiersReclamations {
        $this->numeroReclam = $numeroReclam;
        return $this;
    }

    /**
     * Set the reclamation.
     *
     * @param string|null $reclamation The reclamation.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setReclamation(?string $reclamation): ChantiersReclamations {
        $this->reclamation = $reclamation;
        return $this;
    }

    /**
     * Set the resultat.
     *
     * @param string|null $resultat The resultat.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setResultat(?string $resultat): ChantiersReclamations {
        $this->resultat = $resultat;
        return $this;
    }

    /**
     * Set the type reclam.
     *
     * @param string|null $typeReclam The type reclam.
     * @return ChantiersReclamations Returns this Chantiers reclamations.
     */
    public function setTypeReclam(?string $typeReclam): ChantiersReclamations {
        $this->typeReclam = $typeReclam;
        return $this;
    }
}
