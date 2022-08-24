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
 * Visite medicale ligne.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class VisiteMedicaleLigne {

    /**
     * Code medecine travail.
     *
     * @var string|null
     */
    private $codeMedecineTravail;

    /**
     * Code session.
     *
     * @var string|null
     */
    private $codeSession;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Date visite.
     *
     * @var DateTime|null
     */
    private $dateVisite;

    /**
     * Duree visite.
     *
     * @var float|null
     */
    private $dureeVisite;

    /**
     * Etat visite.
     *
     * @var string|null
     */
    private $etatVisite;

    /**
     * Heure visite.
     *
     * @var DateTime|null
     */
    private $heureVisite;

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
     * Tel1.
     *
     * @var string|null
     */
    private $tel1;

    /**
     * Type ligne.
     *
     * @var string|null
     */
    private $typeLigne;

    /**
     * Type visite.
     *
     * @var string|null
     */
    private $typeVisite;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code medecine travail.
     *
     * @return string|null Returns the code medecine travail.
     */
    public function getCodeMedecineTravail(): ?string {
        return $this->codeMedecineTravail;
    }

    /**
     * Get the code session.
     *
     * @return string|null Returns the code session.
     */
    public function getCodeSession(): ?string {
        return $this->codeSession;
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
     * Get the date visite.
     *
     * @return DateTime|null Returns the date visite.
     */
    public function getDateVisite(): ?DateTime {
        return $this->dateVisite;
    }

    /**
     * Get the duree visite.
     *
     * @return float|null Returns the duree visite.
     */
    public function getDureeVisite(): ?float {
        return $this->dureeVisite;
    }

    /**
     * Get the etat visite.
     *
     * @return string|null Returns the etat visite.
     */
    public function getEtatVisite(): ?string {
        return $this->etatVisite;
    }

    /**
     * Get the heure visite.
     *
     * @return DateTime|null Returns the heure visite.
     */
    public function getHeureVisite(): ?DateTime {
        return $this->heureVisite;
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
     * Get the tel1.
     *
     * @return string|null Returns the tel1.
     */
    public function getTel1(): ?string {
        return $this->tel1;
    }

    /**
     * Get the type ligne.
     *
     * @return string|null Returns the type ligne.
     */
    public function getTypeLigne(): ?string {
        return $this->typeLigne;
    }

    /**
     * Get the type visite.
     *
     * @return string|null Returns the type visite.
     */
    public function getTypeVisite(): ?string {
        return $this->typeVisite;
    }

    /**
     * Set the code medecine travail.
     *
     * @param string|null $codeMedecineTravail The code medecine travail.
     * @return VisiteMedicaleLigne Returns this Visite medicale ligne.
     */
    public function setCodeMedecineTravail(?string $codeMedecineTravail): VisiteMedicaleLigne {
        $this->codeMedecineTravail = $codeMedecineTravail;
        return $this;
    }

    /**
     * Set the code session.
     *
     * @param string|null $codeSession The code session.
     * @return VisiteMedicaleLigne Returns this Visite medicale ligne.
     */
    public function setCodeSession(?string $codeSession): VisiteMedicaleLigne {
        $this->codeSession = $codeSession;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return VisiteMedicaleLigne Returns this Visite medicale ligne.
     */
    public function setCommentaire(?string $commentaire): VisiteMedicaleLigne {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date visite.
     *
     * @param DateTime|null $dateVisite The date visite.
     * @return VisiteMedicaleLigne Returns this Visite medicale ligne.
     */
    public function setDateVisite(?DateTime $dateVisite): VisiteMedicaleLigne {
        $this->dateVisite = $dateVisite;
        return $this;
    }

    /**
     * Set the duree visite.
     *
     * @param float|null $dureeVisite The duree visite.
     * @return VisiteMedicaleLigne Returns this Visite medicale ligne.
     */
    public function setDureeVisite(?float $dureeVisite): VisiteMedicaleLigne {
        $this->dureeVisite = $dureeVisite;
        return $this;
    }

    /**
     * Set the etat visite.
     *
     * @param string|null $etatVisite The etat visite.
     * @return VisiteMedicaleLigne Returns this Visite medicale ligne.
     */
    public function setEtatVisite(?string $etatVisite): VisiteMedicaleLigne {
        $this->etatVisite = $etatVisite;
        return $this;
    }

    /**
     * Set the heure visite.
     *
     * @param DateTime|null $heureVisite The heure visite.
     * @return VisiteMedicaleLigne Returns this Visite medicale ligne.
     */
    public function setHeureVisite(?DateTime $heureVisite): VisiteMedicaleLigne {
        $this->heureVisite = $heureVisite;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return VisiteMedicaleLigne Returns this Visite medicale ligne.
     */
    public function setLienDocument(?string $lienDocument): VisiteMedicaleLigne {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return VisiteMedicaleLigne Returns this Visite medicale ligne.
     */
    public function setNumeroEmploye(?string $numeroEmploye): VisiteMedicaleLigne {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string|null $tel1 The tel1.
     * @return VisiteMedicaleLigne Returns this Visite medicale ligne.
     */
    public function setTel1(?string $tel1): VisiteMedicaleLigne {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string|null $typeLigne The type ligne.
     * @return VisiteMedicaleLigne Returns this Visite medicale ligne.
     */
    public function setTypeLigne(?string $typeLigne): VisiteMedicaleLigne {
        $this->typeLigne = $typeLigne;
        return $this;
    }

    /**
     * Set the type visite.
     *
     * @param string|null $typeVisite The type visite.
     * @return VisiteMedicaleLigne Returns this Visite medicale ligne.
     */
    public function setTypeVisite(?string $typeVisite): VisiteMedicaleLigne {
        $this->typeVisite = $typeVisite;
        return $this;
    }
}
