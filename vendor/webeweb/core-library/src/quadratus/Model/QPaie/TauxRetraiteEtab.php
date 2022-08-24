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
 * Taux retraite etab.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class TauxRetraiteEtab {

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
     * Taux ret tr2 pp.
     *
     * @var float|null
     */
    private $tauxRetTr2Pp;

    /**
     * Taux ret tr2 ps.
     *
     * @var float|null
     */
    private $tauxRetTr2Ps;

    /**
     * Taux ret tr app.
     *
     * @var float|null
     */
    private $tauxRetTrApp;

    /**
     * Taux ret tr aps.
     *
     * @var float|null
     */
    private $tauxRetTrAps;

    /**
     * Taux ret tr bpp.
     *
     * @var float|null
     */
    private $tauxRetTrBpp;

    /**
     * Taux ret tr bps.
     *
     * @var float|null
     */
    private $tauxRetTrBps;

    /**
     * Taux ret tr cpp.
     *
     * @var float|null
     */
    private $tauxRetTrCpp;

    /**
     * Taux ret tr cps.
     *
     * @var float|null
     */
    private $tauxRetTrCps;

    /**
     * Taux ret tr dpp.
     *
     * @var float|null
     */
    private $tauxRetTrDpp;

    /**
     * Taux ret tr dps.
     *
     * @var float|null
     */
    private $tauxRetTrDps;

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
     * Get the taux ret tr2 pp.
     *
     * @return float|null Returns the taux ret tr2 pp.
     */
    public function getTauxRetTr2Pp(): ?float {
        return $this->tauxRetTr2Pp;
    }

    /**
     * Get the taux ret tr2 ps.
     *
     * @return float|null Returns the taux ret tr2 ps.
     */
    public function getTauxRetTr2Ps(): ?float {
        return $this->tauxRetTr2Ps;
    }

    /**
     * Get the taux ret tr app.
     *
     * @return float|null Returns the taux ret tr app.
     */
    public function getTauxRetTrApp(): ?float {
        return $this->tauxRetTrApp;
    }

    /**
     * Get the taux ret tr aps.
     *
     * @return float|null Returns the taux ret tr aps.
     */
    public function getTauxRetTrAps(): ?float {
        return $this->tauxRetTrAps;
    }

    /**
     * Get the taux ret tr bpp.
     *
     * @return float|null Returns the taux ret tr bpp.
     */
    public function getTauxRetTrBpp(): ?float {
        return $this->tauxRetTrBpp;
    }

    /**
     * Get the taux ret tr bps.
     *
     * @return float|null Returns the taux ret tr bps.
     */
    public function getTauxRetTrBps(): ?float {
        return $this->tauxRetTrBps;
    }

    /**
     * Get the taux ret tr cpp.
     *
     * @return float|null Returns the taux ret tr cpp.
     */
    public function getTauxRetTrCpp(): ?float {
        return $this->tauxRetTrCpp;
    }

    /**
     * Get the taux ret tr cps.
     *
     * @return float|null Returns the taux ret tr cps.
     */
    public function getTauxRetTrCps(): ?float {
        return $this->tauxRetTrCps;
    }

    /**
     * Get the taux ret tr dpp.
     *
     * @return float|null Returns the taux ret tr dpp.
     */
    public function getTauxRetTrDpp(): ?float {
        return $this->tauxRetTrDpp;
    }

    /**
     * Get the taux ret tr dps.
     *
     * @return float|null Returns the taux ret tr dps.
     */
    public function getTauxRetTrDps(): ?float {
        return $this->tauxRetTrDps;
    }

    /**
     * Set the a partir de.
     *
     * @param DateTime|null $aPartirDe The a partir de.
     * @return TauxRetraiteEtab Returns this Taux retraite etab.
     */
    public function setAPartirDe(?DateTime $aPartirDe): TauxRetraiteEtab {
        $this->aPartirDe = $aPartirDe;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return TauxRetraiteEtab Returns this Taux retraite etab.
     */
    public function setCodeEtablissement(?int $codeEtablissement): TauxRetraiteEtab {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the taux ret tr2 pp.
     *
     * @param float|null $tauxRetTr2Pp The taux ret tr2 pp.
     * @return TauxRetraiteEtab Returns this Taux retraite etab.
     */
    public function setTauxRetTr2Pp(?float $tauxRetTr2Pp): TauxRetraiteEtab {
        $this->tauxRetTr2Pp = $tauxRetTr2Pp;
        return $this;
    }

    /**
     * Set the taux ret tr2 ps.
     *
     * @param float|null $tauxRetTr2Ps The taux ret tr2 ps.
     * @return TauxRetraiteEtab Returns this Taux retraite etab.
     */
    public function setTauxRetTr2Ps(?float $tauxRetTr2Ps): TauxRetraiteEtab {
        $this->tauxRetTr2Ps = $tauxRetTr2Ps;
        return $this;
    }

    /**
     * Set the taux ret tr app.
     *
     * @param float|null $tauxRetTrApp The taux ret tr app.
     * @return TauxRetraiteEtab Returns this Taux retraite etab.
     */
    public function setTauxRetTrApp(?float $tauxRetTrApp): TauxRetraiteEtab {
        $this->tauxRetTrApp = $tauxRetTrApp;
        return $this;
    }

    /**
     * Set the taux ret tr aps.
     *
     * @param float|null $tauxRetTrAps The taux ret tr aps.
     * @return TauxRetraiteEtab Returns this Taux retraite etab.
     */
    public function setTauxRetTrAps(?float $tauxRetTrAps): TauxRetraiteEtab {
        $this->tauxRetTrAps = $tauxRetTrAps;
        return $this;
    }

    /**
     * Set the taux ret tr bpp.
     *
     * @param float|null $tauxRetTrBpp The taux ret tr bpp.
     * @return TauxRetraiteEtab Returns this Taux retraite etab.
     */
    public function setTauxRetTrBpp(?float $tauxRetTrBpp): TauxRetraiteEtab {
        $this->tauxRetTrBpp = $tauxRetTrBpp;
        return $this;
    }

    /**
     * Set the taux ret tr bps.
     *
     * @param float|null $tauxRetTrBps The taux ret tr bps.
     * @return TauxRetraiteEtab Returns this Taux retraite etab.
     */
    public function setTauxRetTrBps(?float $tauxRetTrBps): TauxRetraiteEtab {
        $this->tauxRetTrBps = $tauxRetTrBps;
        return $this;
    }

    /**
     * Set the taux ret tr cpp.
     *
     * @param float|null $tauxRetTrCpp The taux ret tr cpp.
     * @return TauxRetraiteEtab Returns this Taux retraite etab.
     */
    public function setTauxRetTrCpp(?float $tauxRetTrCpp): TauxRetraiteEtab {
        $this->tauxRetTrCpp = $tauxRetTrCpp;
        return $this;
    }

    /**
     * Set the taux ret tr cps.
     *
     * @param float|null $tauxRetTrCps The taux ret tr cps.
     * @return TauxRetraiteEtab Returns this Taux retraite etab.
     */
    public function setTauxRetTrCps(?float $tauxRetTrCps): TauxRetraiteEtab {
        $this->tauxRetTrCps = $tauxRetTrCps;
        return $this;
    }

    /**
     * Set the taux ret tr dpp.
     *
     * @param float|null $tauxRetTrDpp The taux ret tr dpp.
     * @return TauxRetraiteEtab Returns this Taux retraite etab.
     */
    public function setTauxRetTrDpp(?float $tauxRetTrDpp): TauxRetraiteEtab {
        $this->tauxRetTrDpp = $tauxRetTrDpp;
        return $this;
    }

    /**
     * Set the taux ret tr dps.
     *
     * @param float|null $tauxRetTrDps The taux ret tr dps.
     * @return TauxRetraiteEtab Returns this Taux retraite etab.
     */
    public function setTauxRetTrDps(?float $tauxRetTrDps): TauxRetraiteEtab {
        $this->tauxRetTrDps = $tauxRetTrDps;
        return $this;
    }
}
