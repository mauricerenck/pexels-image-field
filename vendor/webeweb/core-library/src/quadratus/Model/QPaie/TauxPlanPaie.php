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
 * Taux plan paie.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class TauxPlanPaie {

    /**
     * A partir de.
     *
     * @var DateTime|null
     */
    private $aPartirDe;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Format non etendu.
     *
     * @var bool|null
     */
    private $formatNonEtendu;

    /**
     * Numero taux.
     *
     * @var int|null
     */
    private $numeroTaux;

    /**
     * Taux patronal.
     *
     * @var float|null
     */
    private $tauxPatronal;

    /**
     * Taux salarial.
     *
     * @var float|null
     */
    private $tauxSalarial;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a partir de.
     *
     * @return DateTime|null Returns the a partir de.
     */
    public function getAPartirDe(): ?DateTime {
        return $this->aPartirDe;
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
     * Get the format non etendu.
     *
     * @return bool|null Returns the format non etendu.
     */
    public function getFormatNonEtendu(): ?bool {
        return $this->formatNonEtendu;
    }

    /**
     * Get the numero taux.
     *
     * @return int|null Returns the numero taux.
     */
    public function getNumeroTaux(): ?int {
        return $this->numeroTaux;
    }

    /**
     * Get the taux patronal.
     *
     * @return float|null Returns the taux patronal.
     */
    public function getTauxPatronal(): ?float {
        return $this->tauxPatronal;
    }

    /**
     * Get the taux salarial.
     *
     * @return float|null Returns the taux salarial.
     */
    public function getTauxSalarial(): ?float {
        return $this->tauxSalarial;
    }

    /**
     * Set the a partir de.
     *
     * @param DateTime|null $aPartirDe The a partir de.
     * @return TauxPlanPaie Returns this Taux plan paie.
     */
    public function setAPartirDe(?DateTime $aPartirDe): TauxPlanPaie {
        $this->aPartirDe = $aPartirDe;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return TauxPlanPaie Returns this Taux plan paie.
     */
    public function setCodeEtablissement(?int $codeEtablissement): TauxPlanPaie {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the format non etendu.
     *
     * @param bool|null $formatNonEtendu The format non etendu.
     * @return TauxPlanPaie Returns this Taux plan paie.
     */
    public function setFormatNonEtendu(?bool $formatNonEtendu): TauxPlanPaie {
        $this->formatNonEtendu = $formatNonEtendu;
        return $this;
    }

    /**
     * Set the numero taux.
     *
     * @param int|null $numeroTaux The numero taux.
     * @return TauxPlanPaie Returns this Taux plan paie.
     */
    public function setNumeroTaux(?int $numeroTaux): TauxPlanPaie {
        $this->numeroTaux = $numeroTaux;
        return $this;
    }

    /**
     * Set the taux patronal.
     *
     * @param float|null $tauxPatronal The taux patronal.
     * @return TauxPlanPaie Returns this Taux plan paie.
     */
    public function setTauxPatronal(?float $tauxPatronal): TauxPlanPaie {
        $this->tauxPatronal = $tauxPatronal;
        return $this;
    }

    /**
     * Set the taux salarial.
     *
     * @param float|null $tauxSalarial The taux salarial.
     * @return TauxPlanPaie Returns this Taux plan paie.
     */
    public function setTauxSalarial(?float $tauxSalarial): TauxPlanPaie {
        $this->tauxSalarial = $tauxSalarial;
        return $this;
    }
}
