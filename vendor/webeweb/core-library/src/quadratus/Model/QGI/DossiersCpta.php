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
 * Dossiers cpta.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class DossiersCpta {

    /**
     * Chemin dossier cpta.
     *
     * @var string|null
     */
    private $cheminDossierCpta;

    /**
     * Num dossier cpta.
     *
     * @var string|null
     */
    private $numDossierCpta;

    /**
     * Num dossier fact.
     *
     * @var string|null
     */
    private $numDossierFact;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the chemin dossier cpta.
     *
     * @return string|null Returns the chemin dossier cpta.
     */
    public function getCheminDossierCpta(): ?string {
        return $this->cheminDossierCpta;
    }

    /**
     * Get the num dossier cpta.
     *
     * @return string|null Returns the num dossier cpta.
     */
    public function getNumDossierCpta(): ?string {
        return $this->numDossierCpta;
    }

    /**
     * Get the num dossier fact.
     *
     * @return string|null Returns the num dossier fact.
     */
    public function getNumDossierFact(): ?string {
        return $this->numDossierFact;
    }

    /**
     * Set the chemin dossier cpta.
     *
     * @param string|null $cheminDossierCpta The chemin dossier cpta.
     * @return DossiersCpta Returns this Dossiers cpta.
     */
    public function setCheminDossierCpta(?string $cheminDossierCpta): DossiersCpta {
        $this->cheminDossierCpta = $cheminDossierCpta;
        return $this;
    }

    /**
     * Set the num dossier cpta.
     *
     * @param string|null $numDossierCpta The num dossier cpta.
     * @return DossiersCpta Returns this Dossiers cpta.
     */
    public function setNumDossierCpta(?string $numDossierCpta): DossiersCpta {
        $this->numDossierCpta = $numDossierCpta;
        return $this;
    }

    /**
     * Set the num dossier fact.
     *
     * @param string|null $numDossierFact The num dossier fact.
     * @return DossiersCpta Returns this Dossiers cpta.
     */
    public function setNumDossierFact(?string $numDossierFact): DossiersCpta {
        $this->numDossierFact = $numDossierFact;
        return $this;
    }
}
