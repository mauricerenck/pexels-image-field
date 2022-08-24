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

/**
 * Fiches confidentialites controles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class FichesConfidentialitesControles {

    /**
     * Agence.
     *
     * @var string|null
     */
    private $agence;

    /**
     * Autorise.
     *
     * @var bool|null
     */
    private $autorise;

    /**
     * Code coll.
     *
     * @var string|null
     */
    private $codeColl;

    /**
     * Dossier.
     *
     * @var string|null
     */
    private $dossier;

    /**
     * Mot controle.
     *
     * @var string|null
     */
    private $motControle;

    /**
     * Mot de passe.
     *
     * @var string|null
     */
    private $motDePasse;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the agence.
     *
     * @return string|null Returns the agence.
     */
    public function getAgence(): ?string {
        return $this->agence;
    }

    /**
     * Get the autorise.
     *
     * @return bool|null Returns the autorise.
     */
    public function getAutorise(): ?bool {
        return $this->autorise;
    }

    /**
     * Get the code coll.
     *
     * @return string|null Returns the code coll.
     */
    public function getCodeColl(): ?string {
        return $this->codeColl;
    }

    /**
     * Get the dossier.
     *
     * @return string|null Returns the dossier.
     */
    public function getDossier(): ?string {
        return $this->dossier;
    }

    /**
     * Get the mot controle.
     *
     * @return string|null Returns the mot controle.
     */
    public function getMotControle(): ?string {
        return $this->motControle;
    }

    /**
     * Get the mot de passe.
     *
     * @return string|null Returns the mot de passe.
     */
    public function getMotDePasse(): ?string {
        return $this->motDePasse;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the agence.
     *
     * @param string|null $agence The agence.
     * @return FichesConfidentialitesControles Returns this Fiches confidentialites controles.
     */
    public function setAgence(?string $agence): FichesConfidentialitesControles {
        $this->agence = $agence;
        return $this;
    }

    /**
     * Set the autorise.
     *
     * @param bool|null $autorise The autorise.
     * @return FichesConfidentialitesControles Returns this Fiches confidentialites controles.
     */
    public function setAutorise(?bool $autorise): FichesConfidentialitesControles {
        $this->autorise = $autorise;
        return $this;
    }

    /**
     * Set the code coll.
     *
     * @param string|null $codeColl The code coll.
     * @return FichesConfidentialitesControles Returns this Fiches confidentialites controles.
     */
    public function setCodeColl(?string $codeColl): FichesConfidentialitesControles {
        $this->codeColl = $codeColl;
        return $this;
    }

    /**
     * Set the dossier.
     *
     * @param string|null $dossier The dossier.
     * @return FichesConfidentialitesControles Returns this Fiches confidentialites controles.
     */
    public function setDossier(?string $dossier): FichesConfidentialitesControles {
        $this->dossier = $dossier;
        return $this;
    }

    /**
     * Set the mot controle.
     *
     * @param string|null $motControle The mot controle.
     * @return FichesConfidentialitesControles Returns this Fiches confidentialites controles.
     */
    public function setMotControle(?string $motControle): FichesConfidentialitesControles {
        $this->motControle = $motControle;
        return $this;
    }

    /**
     * Set the mot de passe.
     *
     * @param string|null $motDePasse The mot de passe.
     * @return FichesConfidentialitesControles Returns this Fiches confidentialites controles.
     */
    public function setMotDePasse(?string $motDePasse): FichesConfidentialitesControles {
        $this->motDePasse = $motDePasse;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return FichesConfidentialitesControles Returns this Fiches confidentialites controles.
     */
    public function setType(?string $type): FichesConfidentialitesControles {
        $this->type = $type;
        return $this;
    }
}
