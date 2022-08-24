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
 * Fiches controles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class FichesControles {

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
     * Date controle.
     *
     * @var DateTime|null
     */
    private $dateControle;

    /**
     * Date transfert.
     *
     * @var DateTime|null
     */
    private $dateTransfert;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

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
     * Numero reclamation.
     *
     * @var int|null
     */
    private $numeroReclamation;

    /**
     * Uniq id synchro.
     *
     * @var string|null
     */
    private $uniqIdSynchro;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the date controle.
     *
     * @return DateTime|null Returns the date controle.
     */
    public function getDateControle(): ?DateTime {
        return $this->dateControle;
    }

    /**
     * Get the date transfert.
     *
     * @return DateTime|null Returns the date transfert.
     */
    public function getDateTransfert(): ?DateTime {
        return $this->dateTransfert;
    }

    /**
     * Get the etat.
     *
     * @return string|null Returns the etat.
     */
    public function getEtat(): ?string {
        return $this->etat;
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
     * Get the numero reclamation.
     *
     * @return int|null Returns the numero reclamation.
     */
    public function getNumeroReclamation(): ?int {
        return $this->numeroReclamation;
    }

    /**
     * Get the uniq id synchro.
     *
     * @return string|null Returns the uniq id synchro.
     */
    public function getUniqIdSynchro(): ?string {
        return $this->uniqIdSynchro;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return FichesControles Returns this Fiches controles.
     */
    public function setCodeAffaire(?string $codeAffaire): FichesControles {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return FichesControles Returns this Fiches controles.
     */
    public function setCodeChantier(?string $codeChantier): FichesControles {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return FichesControles Returns this Fiches controles.
     */
    public function setCodeClient(?string $codeClient): FichesControles {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return FichesControles Returns this Fiches controles.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): FichesControles {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the date controle.
     *
     * @param DateTime|null $dateControle The date controle.
     * @return FichesControles Returns this Fiches controles.
     */
    public function setDateControle(?DateTime $dateControle): FichesControles {
        $this->dateControle = $dateControle;
        return $this;
    }

    /**
     * Set the date transfert.
     *
     * @param DateTime|null $dateTransfert The date transfert.
     * @return FichesControles Returns this Fiches controles.
     */
    public function setDateTransfert(?DateTime $dateTransfert): FichesControles {
        $this->dateTransfert = $dateTransfert;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return FichesControles Returns this Fiches controles.
     */
    public function setEtat(?string $etat): FichesControles {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return FichesControles Returns this Fiches controles.
     */
    public function setLibelle(?string $libelle): FichesControles {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return FichesControles Returns this Fiches controles.
     */
    public function setLienDocument(?string $lienDocument): FichesControles {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the numero reclamation.
     *
     * @param int|null $numeroReclamation The numero reclamation.
     * @return FichesControles Returns this Fiches controles.
     */
    public function setNumeroReclamation(?int $numeroReclamation): FichesControles {
        $this->numeroReclamation = $numeroReclamation;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return FichesControles Returns this Fiches controles.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): FichesControles {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
