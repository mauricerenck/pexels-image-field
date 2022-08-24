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
 * Stats perso suivi client cols.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class StatsPersoSuiviClientCols {

    /**
     * An n.
     *
     * @var string|null
     */
    private $anN;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Indice.
     *
     * @var int|null
     */
    private $indice;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Regle autres.
     *
     * @var string|null
     */
    private $regleAutres;

    /**
     * Regle barn.
     *
     * @var string|null
     */
    private $regleBarn;

    /**
     * Regle bars.
     *
     * @var string|null
     */
    private $regleBars;

    /**
     * Regle bicrn.
     *
     * @var string|null
     */
    private $regleBicrn;

    /**
     * Regle bicrs.
     *
     * @var string|null
     */
    private $regleBicrs;

    /**
     * Regle bnc.
     *
     * @var string|null
     */
    private $regleBnc;

    /**
     * Regle sci.
     *
     * @var string|null
     */
    private $regleSci;

    /**
     * Regle scm.
     *
     * @var string|null
     */
    private $regleScm;

    /**
     * Regle tous.
     *
     * @var string|null
     */
    private $regleTous;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the an n.
     *
     * @return string|null Returns the an n.
     */
    public function getAnN(): ?string {
        return $this->anN;
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the indice.
     *
     * @return int|null Returns the indice.
     */
    public function getIndice(): ?int {
        return $this->indice;
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the regle autres.
     *
     * @return string|null Returns the regle autres.
     */
    public function getRegleAutres(): ?string {
        return $this->regleAutres;
    }

    /**
     * Get the regle barn.
     *
     * @return string|null Returns the regle barn.
     */
    public function getRegleBarn(): ?string {
        return $this->regleBarn;
    }

    /**
     * Get the regle bars.
     *
     * @return string|null Returns the regle bars.
     */
    public function getRegleBars(): ?string {
        return $this->regleBars;
    }

    /**
     * Get the regle bicrn.
     *
     * @return string|null Returns the regle bicrn.
     */
    public function getRegleBicrn(): ?string {
        return $this->regleBicrn;
    }

    /**
     * Get the regle bicrs.
     *
     * @return string|null Returns the regle bicrs.
     */
    public function getRegleBicrs(): ?string {
        return $this->regleBicrs;
    }

    /**
     * Get the regle bnc.
     *
     * @return string|null Returns the regle bnc.
     */
    public function getRegleBnc(): ?string {
        return $this->regleBnc;
    }

    /**
     * Get the regle sci.
     *
     * @return string|null Returns the regle sci.
     */
    public function getRegleSci(): ?string {
        return $this->regleSci;
    }

    /**
     * Get the regle scm.
     *
     * @return string|null Returns the regle scm.
     */
    public function getRegleScm(): ?string {
        return $this->regleScm;
    }

    /**
     * Get the regle tous.
     *
     * @return string|null Returns the regle tous.
     */
    public function getRegleTous(): ?string {
        return $this->regleTous;
    }

    /**
     * Set the an n.
     *
     * @param string|null $anN The an n.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setAnN(?string $anN): StatsPersoSuiviClientCols {
        $this->anN = $anN;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setCode(?string $code): StatsPersoSuiviClientCols {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int|null $indice The indice.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setIndice(?int $indice): StatsPersoSuiviClientCols {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setIntitule(?string $intitule): StatsPersoSuiviClientCols {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the regle autres.
     *
     * @param string|null $regleAutres The regle autres.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setRegleAutres(?string $regleAutres): StatsPersoSuiviClientCols {
        $this->regleAutres = $regleAutres;
        return $this;
    }

    /**
     * Set the regle barn.
     *
     * @param string|null $regleBarn The regle barn.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setRegleBarn(?string $regleBarn): StatsPersoSuiviClientCols {
        $this->regleBarn = $regleBarn;
        return $this;
    }

    /**
     * Set the regle bars.
     *
     * @param string|null $regleBars The regle bars.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setRegleBars(?string $regleBars): StatsPersoSuiviClientCols {
        $this->regleBars = $regleBars;
        return $this;
    }

    /**
     * Set the regle bicrn.
     *
     * @param string|null $regleBicrn The regle bicrn.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setRegleBicrn(?string $regleBicrn): StatsPersoSuiviClientCols {
        $this->regleBicrn = $regleBicrn;
        return $this;
    }

    /**
     * Set the regle bicrs.
     *
     * @param string|null $regleBicrs The regle bicrs.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setRegleBicrs(?string $regleBicrs): StatsPersoSuiviClientCols {
        $this->regleBicrs = $regleBicrs;
        return $this;
    }

    /**
     * Set the regle bnc.
     *
     * @param string|null $regleBnc The regle bnc.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setRegleBnc(?string $regleBnc): StatsPersoSuiviClientCols {
        $this->regleBnc = $regleBnc;
        return $this;
    }

    /**
     * Set the regle sci.
     *
     * @param string|null $regleSci The regle sci.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setRegleSci(?string $regleSci): StatsPersoSuiviClientCols {
        $this->regleSci = $regleSci;
        return $this;
    }

    /**
     * Set the regle scm.
     *
     * @param string|null $regleScm The regle scm.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setRegleScm(?string $regleScm): StatsPersoSuiviClientCols {
        $this->regleScm = $regleScm;
        return $this;
    }

    /**
     * Set the regle tous.
     *
     * @param string|null $regleTous The regle tous.
     * @return StatsPersoSuiviClientCols Returns this Stats perso suivi client cols.
     */
    public function setRegleTous(?string $regleTous): StatsPersoSuiviClientCols {
        $this->regleTous = $regleTous;
        return $this;
    }
}
