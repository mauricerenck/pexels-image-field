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
 * Notes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Notes {

    /**
     * Code categorie.
     *
     * @var string|null
     */
    private $codeCategorie;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code collaborateur modif.
     *
     * @var string|null
     */
    private $codeCollaborateurModif;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date rappel.
     *
     * @var DateTime|null
     */
    private $dateRappel;

    /**
     * Envoi post it.
     *
     * @var bool|null
     */
    private $envoiPostIt;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Num uniq.
     *
     * @var string|null
     */
    private $numUniq;

    /**
     * Titre.
     *
     * @var string|null
     */
    private $titre;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code categorie.
     *
     * @return string|null Returns the code categorie.
     */
    public function getCodeCategorie(): ?string {
        return $this->codeCategorie;
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
     * Get the code collaborateur modif.
     *
     * @return string|null Returns the code collaborateur modif.
     */
    public function getCodeCollaborateurModif(): ?string {
        return $this->codeCollaborateurModif;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation(): ?DateTime {
        return $this->dateCreation;
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
     * Get the date rappel.
     *
     * @return DateTime|null Returns the date rappel.
     */
    public function getDateRappel(): ?DateTime {
        return $this->dateRappel;
    }

    /**
     * Get the envoi post it.
     *
     * @return bool|null Returns the envoi post it.
     */
    public function getEnvoiPostIt(): ?bool {
        return $this->envoiPostIt;
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
     * Get the num uniq.
     *
     * @return string|null Returns the num uniq.
     */
    public function getNumUniq(): ?string {
        return $this->numUniq;
    }

    /**
     * Get the titre.
     *
     * @return string|null Returns the titre.
     */
    public function getTitre(): ?string {
        return $this->titre;
    }

    /**
     * Set the code categorie.
     *
     * @param string|null $codeCategorie The code categorie.
     * @return Notes Returns this Notes.
     */
    public function setCodeCategorie(?string $codeCategorie): Notes {
        $this->codeCategorie = $codeCategorie;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return Notes Returns this Notes.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): Notes {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code collaborateur modif.
     *
     * @param string|null $codeCollaborateurModif The code collaborateur modif.
     * @return Notes Returns this Notes.
     */
    public function setCodeCollaborateurModif(?string $codeCollaborateurModif): Notes {
        $this->codeCollaborateurModif = $codeCollaborateurModif;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Notes Returns this Notes.
     */
    public function setDateCreation(?DateTime $dateCreation): Notes {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Notes Returns this Notes.
     */
    public function setDateModification(?DateTime $dateModification): Notes {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date rappel.
     *
     * @param DateTime|null $dateRappel The date rappel.
     * @return Notes Returns this Notes.
     */
    public function setDateRappel(?DateTime $dateRappel): Notes {
        $this->dateRappel = $dateRappel;
        return $this;
    }

    /**
     * Set the envoi post it.
     *
     * @param bool|null $envoiPostIt The envoi post it.
     * @return Notes Returns this Notes.
     */
    public function setEnvoiPostIt(?bool $envoiPostIt): Notes {
        $this->envoiPostIt = $envoiPostIt;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Notes Returns this Notes.
     */
    public function setIntitule(?string $intitule): Notes {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param string|null $numUniq The num uniq.
     * @return Notes Returns this Notes.
     */
    public function setNumUniq(?string $numUniq): Notes {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return Notes Returns this Notes.
     */
    public function setTitre(?string $titre): Notes {
        $this->titre = $titre;
        return $this;
    }
}
