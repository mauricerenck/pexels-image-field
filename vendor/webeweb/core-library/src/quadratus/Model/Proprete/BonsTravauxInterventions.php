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

/**
 * Bons travaux interventions.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class BonsTravauxInterventions {

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
     * Dimanche.
     *
     * @var bool|null
     */
    private $dimanche;

    /**
     * Jeudi.
     *
     * @var bool|null
     */
    private $jeudi;

    /**
     * Lundi.
     *
     * @var bool|null
     */
    private $lundi;

    /**
     * Mardi.
     *
     * @var bool|null
     */
    private $mardi;

    /**
     * Mercredi.
     *
     * @var bool|null
     */
    private $mercredi;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Num sem.
     *
     * @var string|null
     */
    private $numSem;

    /**
     * Samedi.
     *
     * @var bool|null
     */
    private $samedi;

    /**
     * Vendredi.
     *
     * @var bool|null
     */
    private $vendredi;

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
     * Get the dimanche.
     *
     * @return bool|null Returns the dimanche.
     */
    public function getDimanche(): ?bool {
        return $this->dimanche;
    }

    /**
     * Get the jeudi.
     *
     * @return bool|null Returns the jeudi.
     */
    public function getJeudi(): ?bool {
        return $this->jeudi;
    }

    /**
     * Get the lundi.
     *
     * @return bool|null Returns the lundi.
     */
    public function getLundi(): ?bool {
        return $this->lundi;
    }

    /**
     * Get the mardi.
     *
     * @return bool|null Returns the mardi.
     */
    public function getMardi(): ?bool {
        return $this->mardi;
    }

    /**
     * Get the mercredi.
     *
     * @return bool|null Returns the mercredi.
     */
    public function getMercredi(): ?bool {
        return $this->mercredi;
    }

    /**
     * Get the num bt.
     *
     * @return int|null Returns the num bt.
     */
    public function getNumBt(): ?int {
        return $this->numBt;
    }

    /**
     * Get the num sem.
     *
     * @return string|null Returns the num sem.
     */
    public function getNumSem(): ?string {
        return $this->numSem;
    }

    /**
     * Get the samedi.
     *
     * @return bool|null Returns the samedi.
     */
    public function getSamedi(): ?bool {
        return $this->samedi;
    }

    /**
     * Get the vendredi.
     *
     * @return bool|null Returns the vendredi.
     */
    public function getVendredi(): ?bool {
        return $this->vendredi;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return BonsTravauxInterventions Returns this Bons travaux interventions.
     */
    public function setCodeAffaire(?string $codeAffaire): BonsTravauxInterventions {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return BonsTravauxInterventions Returns this Bons travaux interventions.
     */
    public function setCodeChantier(?string $codeChantier): BonsTravauxInterventions {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return BonsTravauxInterventions Returns this Bons travaux interventions.
     */
    public function setCodeClient(?string $codeClient): BonsTravauxInterventions {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the dimanche.
     *
     * @param bool|null $dimanche The dimanche.
     * @return BonsTravauxInterventions Returns this Bons travaux interventions.
     */
    public function setDimanche(?bool $dimanche): BonsTravauxInterventions {
        $this->dimanche = $dimanche;
        return $this;
    }

    /**
     * Set the jeudi.
     *
     * @param bool|null $jeudi The jeudi.
     * @return BonsTravauxInterventions Returns this Bons travaux interventions.
     */
    public function setJeudi(?bool $jeudi): BonsTravauxInterventions {
        $this->jeudi = $jeudi;
        return $this;
    }

    /**
     * Set the lundi.
     *
     * @param bool|null $lundi The lundi.
     * @return BonsTravauxInterventions Returns this Bons travaux interventions.
     */
    public function setLundi(?bool $lundi): BonsTravauxInterventions {
        $this->lundi = $lundi;
        return $this;
    }

    /**
     * Set the mardi.
     *
     * @param bool|null $mardi The mardi.
     * @return BonsTravauxInterventions Returns this Bons travaux interventions.
     */
    public function setMardi(?bool $mardi): BonsTravauxInterventions {
        $this->mardi = $mardi;
        return $this;
    }

    /**
     * Set the mercredi.
     *
     * @param bool|null $mercredi The mercredi.
     * @return BonsTravauxInterventions Returns this Bons travaux interventions.
     */
    public function setMercredi(?bool $mercredi): BonsTravauxInterventions {
        $this->mercredi = $mercredi;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return BonsTravauxInterventions Returns this Bons travaux interventions.
     */
    public function setNumBt(?int $numBt): BonsTravauxInterventions {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the num sem.
     *
     * @param string|null $numSem The num sem.
     * @return BonsTravauxInterventions Returns this Bons travaux interventions.
     */
    public function setNumSem(?string $numSem): BonsTravauxInterventions {
        $this->numSem = $numSem;
        return $this;
    }

    /**
     * Set the samedi.
     *
     * @param bool|null $samedi The samedi.
     * @return BonsTravauxInterventions Returns this Bons travaux interventions.
     */
    public function setSamedi(?bool $samedi): BonsTravauxInterventions {
        $this->samedi = $samedi;
        return $this;
    }

    /**
     * Set the vendredi.
     *
     * @param bool|null $vendredi The vendredi.
     * @return BonsTravauxInterventions Returns this Bons travaux interventions.
     */
    public function setVendredi(?bool $vendredi): BonsTravauxInterventions {
        $this->vendredi = $vendredi;
        return $this;
    }
}
