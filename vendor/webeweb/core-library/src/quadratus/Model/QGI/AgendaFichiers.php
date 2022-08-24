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
 * Agenda fichiers.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AgendaFichiers {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Date ajout.
     *
     * @var DateTime|null
     */
    private $dateAjout;

    /**
     * Nom fichier.
     *
     * @var string|null
     */
    private $nomFichier;

    /**
     * Origine fichier.
     *
     * @var string|null
     */
    private $origineFichier;

    /**
     * Ref guid.
     *
     * @var string|null
     */
    private $refGuid;

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
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the date ajout.
     *
     * @return DateTime|null Returns the date ajout.
     */
    public function getDateAjout(): ?DateTime {
        return $this->dateAjout;
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
     * Get the origine fichier.
     *
     * @return string|null Returns the origine fichier.
     */
    public function getOrigineFichier(): ?string {
        return $this->origineFichier;
    }

    /**
     * Get the ref guid.
     *
     * @return string|null Returns the ref guid.
     */
    public function getRefGuid(): ?string {
        return $this->refGuid;
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
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return AgendaFichiers Returns this Agenda fichiers.
     */
    public function setCodeClient(?string $codeClient): AgendaFichiers {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the date ajout.
     *
     * @param DateTime|null $dateAjout The date ajout.
     * @return AgendaFichiers Returns this Agenda fichiers.
     */
    public function setDateAjout(?DateTime $dateAjout): AgendaFichiers {
        $this->dateAjout = $dateAjout;
        return $this;
    }

    /**
     * Set the nom fichier.
     *
     * @param string|null $nomFichier The nom fichier.
     * @return AgendaFichiers Returns this Agenda fichiers.
     */
    public function setNomFichier(?string $nomFichier): AgendaFichiers {
        $this->nomFichier = $nomFichier;
        return $this;
    }

    /**
     * Set the origine fichier.
     *
     * @param string|null $origineFichier The origine fichier.
     * @return AgendaFichiers Returns this Agenda fichiers.
     */
    public function setOrigineFichier(?string $origineFichier): AgendaFichiers {
        $this->origineFichier = $origineFichier;
        return $this;
    }

    /**
     * Set the ref guid.
     *
     * @param string|null $refGuid The ref guid.
     * @return AgendaFichiers Returns this Agenda fichiers.
     */
    public function setRefGuid(?string $refGuid): AgendaFichiers {
        $this->refGuid = $refGuid;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return AgendaFichiers Returns this Agenda fichiers.
     */
    public function setTitre(?string $titre): AgendaFichiers {
        $this->titre = $titre;
        return $this;
    }
}
