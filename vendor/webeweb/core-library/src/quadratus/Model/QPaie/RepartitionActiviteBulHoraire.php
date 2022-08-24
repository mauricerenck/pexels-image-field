<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

use DateTime;

/**
 * Repartition activite bul horaire.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RepartitionActiviteBulHoraire {

    /**
     * Code service.
     *
     * @var string|null
     */
    private $codeService;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Interimaire.
     *
     * @var bool|null
     */
    private $interimaire;

    /**
     * Nb heures.
     *
     * @var float|null
     */
    private $nbHeures;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code service.
     *
     * @return string|null Returns the code service.
     */
    public function getCodeService(): ?string {
        return $this->codeService;
    }

    /**
     * Get the indice periode.
     *
     * @return int|null Returns the indice periode.
     */
    public function getIndicePeriode(): ?int {
        return $this->indicePeriode;
    }

    /**
     * Get the interimaire.
     *
     * @return bool|null Returns the interimaire.
     */
    public function getInterimaire(): ?bool {
        return $this->interimaire;
    }

    /**
     * Get the nb heures.
     *
     * @return float|null Returns the nb heures.
     */
    public function getNbHeures(): ?float {
        return $this->nbHeures;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Set the code service.
     *
     * @param string|null $codeService The code service.
     * @return RepartitionActiviteBulHoraire Returns this Repartition activite bul horaire.
     */
    public function setCodeService(?string $codeService): RepartitionActiviteBulHoraire {
        $this->codeService = $codeService;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return RepartitionActiviteBulHoraire Returns this Repartition activite bul horaire.
     */
    public function setIndicePeriode(?int $indicePeriode): RepartitionActiviteBulHoraire {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the interimaire.
     *
     * @param bool|null $interimaire The interimaire.
     * @return RepartitionActiviteBulHoraire Returns this Repartition activite bul horaire.
     */
    public function setInterimaire(?bool $interimaire): RepartitionActiviteBulHoraire {
        $this->interimaire = $interimaire;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float|null $nbHeures The nb heures.
     * @return RepartitionActiviteBulHoraire Returns this Repartition activite bul horaire.
     */
    public function setNbHeures(?float $nbHeures): RepartitionActiviteBulHoraire {
        $this->nbHeures = $nbHeures;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return RepartitionActiviteBulHoraire Returns this Repartition activite bul horaire.
     */
    public function setNumeroEmploye(?string $numeroEmploye): RepartitionActiviteBulHoraire {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return RepartitionActiviteBulHoraire Returns this Repartition activite bul horaire.
     */
    public function setPeriode(?DateTime $periode): RepartitionActiviteBulHoraire {
        $this->periode = $periode;
        return $this;
    }
}
