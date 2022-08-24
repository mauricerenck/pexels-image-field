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
 * Pointage synchro supprime.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PointageSynchroSupprime {

    /**
     * Cle enreg.
     *
     * @var string|null
     */
    private $cleEnreg;

    /**
     * Cree par gen prev.
     *
     * @var bool|null
     */
    private $creeParGenPrev;

    /**
     * Nom table.
     *
     * @var string|null
     */
    private $nomTable;

    /**
     * Time suppression.
     *
     * @var DateTime|null
     */
    private $timeSuppression;

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
     * Get the cle enreg.
     *
     * @return string|null Returns the cle enreg.
     */
    public function getCleEnreg(): ?string {
        return $this->cleEnreg;
    }

    /**
     * Get the cree par gen prev.
     *
     * @return bool|null Returns the cree par gen prev.
     */
    public function getCreeParGenPrev(): ?bool {
        return $this->creeParGenPrev;
    }

    /**
     * Get the nom table.
     *
     * @return string|null Returns the nom table.
     */
    public function getNomTable(): ?string {
        return $this->nomTable;
    }

    /**
     * Get the time suppression.
     *
     * @return DateTime|null Returns the time suppression.
     */
    public function getTimeSuppression(): ?DateTime {
        return $this->timeSuppression;
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
     * Set the cle enreg.
     *
     * @param string|null $cleEnreg The cle enreg.
     * @return PointageSynchroSupprime Returns this Pointage synchro supprime.
     */
    public function setCleEnreg(?string $cleEnreg): PointageSynchroSupprime {
        $this->cleEnreg = $cleEnreg;
        return $this;
    }

    /**
     * Set the cree par gen prev.
     *
     * @param bool|null $creeParGenPrev The cree par gen prev.
     * @return PointageSynchroSupprime Returns this Pointage synchro supprime.
     */
    public function setCreeParGenPrev(?bool $creeParGenPrev): PointageSynchroSupprime {
        $this->creeParGenPrev = $creeParGenPrev;
        return $this;
    }

    /**
     * Set the nom table.
     *
     * @param string|null $nomTable The nom table.
     * @return PointageSynchroSupprime Returns this Pointage synchro supprime.
     */
    public function setNomTable(?string $nomTable): PointageSynchroSupprime {
        $this->nomTable = $nomTable;
        return $this;
    }

    /**
     * Set the time suppression.
     *
     * @param DateTime|null $timeSuppression The time suppression.
     * @return PointageSynchroSupprime Returns this Pointage synchro supprime.
     */
    public function setTimeSuppression(?DateTime $timeSuppression): PointageSynchroSupprime {
        $this->timeSuppression = $timeSuppression;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return PointageSynchroSupprime Returns this Pointage synchro supprime.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): PointageSynchroSupprime {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
