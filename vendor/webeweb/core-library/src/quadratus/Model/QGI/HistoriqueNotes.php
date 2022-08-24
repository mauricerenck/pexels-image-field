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
 * Historique notes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class HistoriqueNotes {

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
     * Date cloture.
     *
     * @var DateTime|null
     */
    private $dateCloture;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

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
     * Get the date cloture.
     *
     * @return DateTime|null Returns the date cloture.
     */
    public function getDateCloture(): ?DateTime {
        return $this->dateCloture;
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
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setCodeCategorie(?string $codeCategorie): HistoriqueNotes {
        $this->codeCategorie = $codeCategorie;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): HistoriqueNotes {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the date cloture.
     *
     * @param DateTime|null $dateCloture The date cloture.
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setDateCloture(?DateTime $dateCloture): HistoriqueNotes {
        $this->dateCloture = $dateCloture;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setDateCreation(?DateTime $dateCreation): HistoriqueNotes {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setIntitule(?string $intitule): HistoriqueNotes {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param string|null $numUniq The num uniq.
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setNumUniq(?string $numUniq): HistoriqueNotes {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setTitre(?string $titre): HistoriqueNotes {
        $this->titre = $titre;
        return $this;
    }
}
