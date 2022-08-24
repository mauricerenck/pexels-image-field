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
 * Histo transfert cpta.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class HistoTransfertCpta {

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Date ecriture.
     *
     * @var DateTime|null
     */
    private $dateEcriture;

    /**
     * Num lot.
     *
     * @var int|null
     */
    private $numLot;

    /**
     * Periode transfert.
     *
     * @var DateTime|null
     */
    private $periodeTransfert;

    /**
     * Type transfert.
     *
     * @var string|null
     */
    private $typeTransfert;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the code journal.
     *
     * @return string|null Returns the code journal.
     */
    public function getCodeJournal(): ?string {
        return $this->codeJournal;
    }

    /**
     * Get the date ecriture.
     *
     * @return DateTime|null Returns the date ecriture.
     */
    public function getDateEcriture(): ?DateTime {
        return $this->dateEcriture;
    }

    /**
     * Get the num lot.
     *
     * @return int|null Returns the num lot.
     */
    public function getNumLot(): ?int {
        return $this->numLot;
    }

    /**
     * Get the periode transfert.
     *
     * @return DateTime|null Returns the periode transfert.
     */
    public function getPeriodeTransfert(): ?DateTime {
        return $this->periodeTransfert;
    }

    /**
     * Get the type transfert.
     *
     * @return string|null Returns the type transfert.
     */
    public function getTypeTransfert(): ?string {
        return $this->typeTransfert;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return HistoTransfertCpta Returns this Histo transfert cpta.
     */
    public function setCodeEtablissement(?int $codeEtablissement): HistoTransfertCpta {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return HistoTransfertCpta Returns this Histo transfert cpta.
     */
    public function setCodeJournal(?string $codeJournal): HistoTransfertCpta {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the date ecriture.
     *
     * @param DateTime|null $dateEcriture The date ecriture.
     * @return HistoTransfertCpta Returns this Histo transfert cpta.
     */
    public function setDateEcriture(?DateTime $dateEcriture): HistoTransfertCpta {
        $this->dateEcriture = $dateEcriture;
        return $this;
    }

    /**
     * Set the num lot.
     *
     * @param int|null $numLot The num lot.
     * @return HistoTransfertCpta Returns this Histo transfert cpta.
     */
    public function setNumLot(?int $numLot): HistoTransfertCpta {
        $this->numLot = $numLot;
        return $this;
    }

    /**
     * Set the periode transfert.
     *
     * @param DateTime|null $periodeTransfert The periode transfert.
     * @return HistoTransfertCpta Returns this Histo transfert cpta.
     */
    public function setPeriodeTransfert(?DateTime $periodeTransfert): HistoTransfertCpta {
        $this->periodeTransfert = $periodeTransfert;
        return $this;
    }

    /**
     * Set the type transfert.
     *
     * @param string|null $typeTransfert The type transfert.
     * @return HistoTransfertCpta Returns this Histo transfert cpta.
     */
    public function setTypeTransfert(?string $typeTransfert): HistoTransfertCpta {
        $this->typeTransfert = $typeTransfert;
        return $this;
    }
}
