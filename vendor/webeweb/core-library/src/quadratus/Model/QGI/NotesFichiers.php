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
 * Notes fichiers.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class NotesFichiers {

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Nom fichier.
     *
     * @var string|null
     */
    private $nomFichier;

    /**
     * Num note.
     *
     * @var string|null
     */
    private $numNote;

    /**
     * Origine fichier.
     *
     * @var string|null
     */
    private $origineFichier;

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
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation(): ?DateTime {
        return $this->dateCreation;
    }

    /**
     * Get the nom fichier.
     *
     * @return string|null Returns the nom fichier.
     */
    public function getNomFichier(): ?string {
        return $this->nomFichier;
    }

    /**
     * Get the num note.
     *
     * @return string|null Returns the num note.
     */
    public function getNumNote(): ?string {
        return $this->numNote;
    }

    /**
     * Get the origine fichier.
     *
     * @return string|null Returns the origine fichier.
     */
    public function getOrigineFichier(): ?string {
        return $this->origineFichier;
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
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return NotesFichiers Returns this Notes fichiers.
     */
    public function setDateCreation(?DateTime $dateCreation): NotesFichiers {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the nom fichier.
     *
     * @param string|null $nomFichier The nom fichier.
     * @return NotesFichiers Returns this Notes fichiers.
     */
    public function setNomFichier(?string $nomFichier): NotesFichiers {
        $this->nomFichier = $nomFichier;
        return $this;
    }

    /**
     * Set the num note.
     *
     * @param string|null $numNote The num note.
     * @return NotesFichiers Returns this Notes fichiers.
     */
    public function setNumNote(?string $numNote): NotesFichiers {
        $this->numNote = $numNote;
        return $this;
    }

    /**
     * Set the origine fichier.
     *
     * @param string|null $origineFichier The origine fichier.
     * @return NotesFichiers Returns this Notes fichiers.
     */
    public function setOrigineFichier(?string $origineFichier): NotesFichiers {
        $this->origineFichier = $origineFichier;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return NotesFichiers Returns this Notes fichiers.
     */
    public function setTitre(?string $titre): NotesFichiers {
        $this->titre = $titre;
        return $this;
    }
}
