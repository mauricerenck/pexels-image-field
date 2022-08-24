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
 * Lettres missions lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class LettresMissionsLignes {

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
     * Code mission.
     *
     * @var string|null
     */
    private $codeMission;

    /**
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Code travail.
     *
     * @var string|null
     */
    private $codeTravail;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Declaration a rediger.
     *
     * @var bool|null
     */
    private $declarationARediger;

    /**
     * Frequence.
     *
     * @var string|null
     */
    private $frequence;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Nbr heures.
     *
     * @var float|null
     */
    private $nbrHeures;

    /**
     * Nbr operations.
     *
     * @var string|null
     */
    private $nbrOperations;

    /**
     * Niveau.
     *
     * @var int|null
     */
    private $niveau;

    /**
     * Niveau ligne.
     *
     * @var string|null
     */
    private $niveauLigne;

    /**
     * Numero lettre.
     *
     * @var string|null
     */
    private $numeroLettre;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Observations.
     *
     * @var string|null
     */
    private $observations;

    /**
     * Police.
     *
     * @var string|null
     */
    private $police;

    /**
     * Realise par.
     *
     * @var string|null
     */
    private $realisePar;

    /**
     * Type affectation.
     *
     * @var string|null
     */
    private $typeAffectation;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code mission.
     *
     * @return string|null Returns the code mission.
     */
    public function getCodeMission(): ?string {
        return $this->codeMission;
    }

    /**
     * Get the code regroupement.
     *
     * @return string|null Returns the code regroupement.
     */
    public function getCodeRegroupement(): ?string {
        return $this->codeRegroupement;
    }

    /**
     * Get the code travail.
     *
     * @return string|null Returns the code travail.
     */
    public function getCodeTravail(): ?string {
        return $this->codeTravail;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut(): ?DateTime {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin(): ?DateTime {
        return $this->dateFin;
    }

    /**
     * Get the declaration a rediger.
     *
     * @return bool|null Returns the declaration a rediger.
     */
    public function getDeclarationARediger(): ?bool {
        return $this->declarationARediger;
    }

    /**
     * Get the frequence.
     *
     * @return string|null Returns the frequence.
     */
    public function getFrequence(): ?string {
        return $this->frequence;
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
     * Get the nbr heures.
     *
     * @return float|null Returns the nbr heures.
     */
    public function getNbrHeures(): ?float {
        return $this->nbrHeures;
    }

    /**
     * Get the nbr operations.
     *
     * @return string|null Returns the nbr operations.
     */
    public function getNbrOperations(): ?string {
        return $this->nbrOperations;
    }

    /**
     * Get the niveau.
     *
     * @return int|null Returns the niveau.
     */
    public function getNiveau(): ?int {
        return $this->niveau;
    }

    /**
     * Get the niveau ligne.
     *
     * @return string|null Returns the niveau ligne.
     */
    public function getNiveauLigne(): ?string {
        return $this->niveauLigne;
    }

    /**
     * Get the numero lettre.
     *
     * @return string|null Returns the numero lettre.
     */
    public function getNumeroLettre(): ?string {
        return $this->numeroLettre;
    }

    /**
     * Get the numero ligne.
     *
     * @return int|null Returns the numero ligne.
     */
    public function getNumeroLigne(): ?int {
        return $this->numeroLigne;
    }

    /**
     * Get the observations.
     *
     * @return string|null Returns the observations.
     */
    public function getObservations(): ?string {
        return $this->observations;
    }

    /**
     * Get the police.
     *
     * @return string|null Returns the police.
     */
    public function getPolice(): ?string {
        return $this->police;
    }

    /**
     * Get the realise par.
     *
     * @return string|null Returns the realise par.
     */
    public function getRealisePar(): ?string {
        return $this->realisePar;
    }

    /**
     * Get the type affectation.
     *
     * @return string|null Returns the type affectation.
     */
    public function getTypeAffectation(): ?string {
        return $this->typeAffectation;
    }

    /**
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setCodeClient(?string $codeClient): LettresMissionsLignes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): LettresMissionsLignes {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setCodeMission(?string $codeMission): LettresMissionsLignes {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setCodeRegroupement(?string $codeRegroupement): LettresMissionsLignes {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code travail.
     *
     * @param string|null $codeTravail The code travail.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setCodeTravail(?string $codeTravail): LettresMissionsLignes {
        $this->codeTravail = $codeTravail;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setDateDebut(?DateTime $dateDebut): LettresMissionsLignes {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setDateFin(?DateTime $dateFin): LettresMissionsLignes {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the declaration a rediger.
     *
     * @param bool|null $declarationARediger The declaration a rediger.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setDeclarationARediger(?bool $declarationARediger): LettresMissionsLignes {
        $this->declarationARediger = $declarationARediger;
        return $this;
    }

    /**
     * Set the frequence.
     *
     * @param string|null $frequence The frequence.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setFrequence(?string $frequence): LettresMissionsLignes {
        $this->frequence = $frequence;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setLibelle(?string $libelle): LettresMissionsLignes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the nbr heures.
     *
     * @param float|null $nbrHeures The nbr heures.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setNbrHeures(?float $nbrHeures): LettresMissionsLignes {
        $this->nbrHeures = $nbrHeures;
        return $this;
    }

    /**
     * Set the nbr operations.
     *
     * @param string|null $nbrOperations The nbr operations.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setNbrOperations(?string $nbrOperations): LettresMissionsLignes {
        $this->nbrOperations = $nbrOperations;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int|null $niveau The niveau.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setNiveau(?int $niveau): LettresMissionsLignes {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the niveau ligne.
     *
     * @param string|null $niveauLigne The niveau ligne.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setNiveauLigne(?string $niveauLigne): LettresMissionsLignes {
        $this->niveauLigne = $niveauLigne;
        return $this;
    }

    /**
     * Set the numero lettre.
     *
     * @param string|null $numeroLettre The numero lettre.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setNumeroLettre(?string $numeroLettre): LettresMissionsLignes {
        $this->numeroLettre = $numeroLettre;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setNumeroLigne(?int $numeroLigne): LettresMissionsLignes {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the observations.
     *
     * @param string|null $observations The observations.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setObservations(?string $observations): LettresMissionsLignes {
        $this->observations = $observations;
        return $this;
    }

    /**
     * Set the police.
     *
     * @param string|null $police The police.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setPolice(?string $police): LettresMissionsLignes {
        $this->police = $police;
        return $this;
    }

    /**
     * Set the realise par.
     *
     * @param string|null $realisePar The realise par.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setRealisePar(?string $realisePar): LettresMissionsLignes {
        $this->realisePar = $realisePar;
        return $this;
    }

    /**
     * Set the type affectation.
     *
     * @param string|null $typeAffectation The type affectation.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setTypeAffectation(?string $typeAffectation): LettresMissionsLignes {
        $this->typeAffectation = $typeAffectation;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return LettresMissionsLignes Returns this Lettres missions lignes.
     */
    public function setUniqId(?string $uniqId): LettresMissionsLignes {
        $this->uniqId = $uniqId;
        return $this;
    }
}
