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
 * Boni mali.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class BoniMali {

    /**
     * Bm calcule.
     *
     * @var bool|null
     */
    private $bmCalcule;

    /**
     * Bonus.
     *
     * @var float|null
     */
    private $bonus;

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
     * Date bm.
     *
     * @var DateTime|null
     */
    private $dateBm;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Malus.
     *
     * @var float|null
     */
    private $malus;

    /**
     * Monnaie.
     *
     * @var string|null
     */
    private $monnaie;

    /**
     * Numero bm.
     *
     * @var string|null
     */
    private $numeroBm;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the bm calcule.
     *
     * @return bool|null Returns the bm calcule.
     */
    public function getBmCalcule(): ?bool {
        return $this->bmCalcule;
    }

    /**
     * Get the bonus.
     *
     * @return float|null Returns the bonus.
     */
    public function getBonus(): ?float {
        return $this->bonus;
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
     * Get the date bm.
     *
     * @return DateTime|null Returns the date bm.
     */
    public function getDateBm(): ?DateTime {
        return $this->dateBm;
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
     * Get the malus.
     *
     * @return float|null Returns the malus.
     */
    public function getMalus(): ?float {
        return $this->malus;
    }

    /**
     * Get the monnaie.
     *
     * @return string|null Returns the monnaie.
     */
    public function getMonnaie(): ?string {
        return $this->monnaie;
    }

    /**
     * Get the numero bm.
     *
     * @return string|null Returns the numero bm.
     */
    public function getNumeroBm(): ?string {
        return $this->numeroBm;
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
     * Set the bm calcule.
     *
     * @param bool|null $bmCalcule The bm calcule.
     * @return BoniMali Returns this Boni mali.
     */
    public function setBmCalcule(?bool $bmCalcule): BoniMali {
        $this->bmCalcule = $bmCalcule;
        return $this;
    }

    /**
     * Set the bonus.
     *
     * @param float|null $bonus The bonus.
     * @return BoniMali Returns this Boni mali.
     */
    public function setBonus(?float $bonus): BoniMali {
        $this->bonus = $bonus;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return BoniMali Returns this Boni mali.
     */
    public function setCodeClient(?string $codeClient): BoniMali {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return BoniMali Returns this Boni mali.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): BoniMali {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return BoniMali Returns this Boni mali.
     */
    public function setCodeMission(?string $codeMission): BoniMali {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the date bm.
     *
     * @param DateTime|null $dateBm The date bm.
     * @return BoniMali Returns this Boni mali.
     */
    public function setDateBm(?DateTime $dateBm): BoniMali {
        $this->dateBm = $dateBm;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return BoniMali Returns this Boni mali.
     */
    public function setLibelle(?string $libelle): BoniMali {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the malus.
     *
     * @param float|null $malus The malus.
     * @return BoniMali Returns this Boni mali.
     */
    public function setMalus(?float $malus): BoniMali {
        $this->malus = $malus;
        return $this;
    }

    /**
     * Set the monnaie.
     *
     * @param string|null $monnaie The monnaie.
     * @return BoniMali Returns this Boni mali.
     */
    public function setMonnaie(?string $monnaie): BoniMali {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the numero bm.
     *
     * @param string|null $numeroBm The numero bm.
     * @return BoniMali Returns this Boni mali.
     */
    public function setNumeroBm(?string $numeroBm): BoniMali {
        $this->numeroBm = $numeroBm;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return BoniMali Returns this Boni mali.
     */
    public function setNumeroLigne(?int $numeroLigne): BoniMali {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }
}
