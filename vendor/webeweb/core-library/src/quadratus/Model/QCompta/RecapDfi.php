<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

/**
 * Recap dfi.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class RecapDfi {

    /**
     * Annee ded.
     *
     * @var int|null
     */
    private $anneeDed;

    /**
     * Annee utilisation.
     *
     * @var int|null
     */
    private $anneeUtilisation;

    /**
     * Immobilisations.
     *
     * @var float|null
     */
    private $immobilisations;

    /**
     * Mtt annee.
     *
     * @var float|null
     */
    private $mttAnnee;

    /**
     * Parts sociales.
     *
     * @var float|null
     */
    private $partsSociales;

    /**
     * Reint anticipee.
     *
     * @var float|null
     */
    private $reintAnticipee;

    /**
     * Stocks.
     *
     * @var float|null
     */
    private $stocks;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the annee ded.
     *
     * @return int|null Returns the annee ded.
     */
    public function getAnneeDed(): ?int {
        return $this->anneeDed;
    }

    /**
     * Get the annee utilisation.
     *
     * @return int|null Returns the annee utilisation.
     */
    public function getAnneeUtilisation(): ?int {
        return $this->anneeUtilisation;
    }

    /**
     * Get the immobilisations.
     *
     * @return float|null Returns the immobilisations.
     */
    public function getImmobilisations(): ?float {
        return $this->immobilisations;
    }

    /**
     * Get the mtt annee.
     *
     * @return float|null Returns the mtt annee.
     */
    public function getMttAnnee(): ?float {
        return $this->mttAnnee;
    }

    /**
     * Get the parts sociales.
     *
     * @return float|null Returns the parts sociales.
     */
    public function getPartsSociales(): ?float {
        return $this->partsSociales;
    }

    /**
     * Get the reint anticipee.
     *
     * @return float|null Returns the reint anticipee.
     */
    public function getReintAnticipee(): ?float {
        return $this->reintAnticipee;
    }

    /**
     * Get the stocks.
     *
     * @return float|null Returns the stocks.
     */
    public function getStocks(): ?float {
        return $this->stocks;
    }

    /**
     * Set the annee ded.
     *
     * @param int|null $anneeDed The annee ded.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setAnneeDed(?int $anneeDed): RecapDfi {
        $this->anneeDed = $anneeDed;
        return $this;
    }

    /**
     * Set the annee utilisation.
     *
     * @param int|null $anneeUtilisation The annee utilisation.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setAnneeUtilisation(?int $anneeUtilisation): RecapDfi {
        $this->anneeUtilisation = $anneeUtilisation;
        return $this;
    }

    /**
     * Set the immobilisations.
     *
     * @param float|null $immobilisations The immobilisations.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setImmobilisations(?float $immobilisations): RecapDfi {
        $this->immobilisations = $immobilisations;
        return $this;
    }

    /**
     * Set the mtt annee.
     *
     * @param float|null $mttAnnee The mtt annee.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setMttAnnee(?float $mttAnnee): RecapDfi {
        $this->mttAnnee = $mttAnnee;
        return $this;
    }

    /**
     * Set the parts sociales.
     *
     * @param float|null $partsSociales The parts sociales.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setPartsSociales(?float $partsSociales): RecapDfi {
        $this->partsSociales = $partsSociales;
        return $this;
    }

    /**
     * Set the reint anticipee.
     *
     * @param float|null $reintAnticipee The reint anticipee.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setReintAnticipee(?float $reintAnticipee): RecapDfi {
        $this->reintAnticipee = $reintAnticipee;
        return $this;
    }

    /**
     * Set the stocks.
     *
     * @param float|null $stocks The stocks.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setStocks(?float $stocks): RecapDfi {
        $this->stocks = $stocks;
        return $this;
    }
}
