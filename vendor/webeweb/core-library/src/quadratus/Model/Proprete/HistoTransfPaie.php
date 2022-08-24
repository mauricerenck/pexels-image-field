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
 * Histo transf paie.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class HistoTransfPaie {

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Ecart cumule.
     *
     * @var float|null
     */
    private $ecartCumule;

    /**
     * Hcr payees.
     *
     * @var bool|null
     */
    private $hcrPayees;

    /**
     * Hnp compl h.
     *
     * @var float|null
     */
    private $hnpComplH;

    /**
     * Hnphc11.
     *
     * @var float|null
     */
    private $hnphc11;

    /**
     * Hnphc25.
     *
     * @var float|null
     */
    private $hnphc25;

    /**
     * Hnphc33.
     *
     * @var float|null
     */
    private $hnphc33;

    /**
     * Nb compl h.
     *
     * @var float|null
     */
    private $nbComplH;

    /**
     * Nb h abs.
     *
     * @var float|null
     */
    private $nbHAbs;

    /**
     * Nb h abs jf.
     *
     * @var float|null
     */
    private $nbHAbsJf;

    /**
     * Nb h compl.
     *
     * @var float|null
     */
    private $nbHCompl;

    /**
     * Nb h rempl.
     *
     * @var float|null
     */
    private $nbHRempl;

    /**
     * Nb hprevues.
     *
     * @var float|null
     */
    private $nbHprevues;

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
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the ecart cumule.
     *
     * @return float|null Returns the ecart cumule.
     */
    public function getEcartCumule(): ?float {
        return $this->ecartCumule;
    }

    /**
     * Get the hcr payees.
     *
     * @return bool|null Returns the hcr payees.
     */
    public function getHcrPayees(): ?bool {
        return $this->hcrPayees;
    }

    /**
     * Get the hnp compl h.
     *
     * @return float|null Returns the hnp compl h.
     */
    public function getHnpComplH(): ?float {
        return $this->hnpComplH;
    }

    /**
     * Get the hnphc11.
     *
     * @return float|null Returns the hnphc11.
     */
    public function getHnphc11(): ?float {
        return $this->hnphc11;
    }

    /**
     * Get the hnphc25.
     *
     * @return float|null Returns the hnphc25.
     */
    public function getHnphc25(): ?float {
        return $this->hnphc25;
    }

    /**
     * Get the hnphc33.
     *
     * @return float|null Returns the hnphc33.
     */
    public function getHnphc33(): ?float {
        return $this->hnphc33;
    }

    /**
     * Get the nb compl h.
     *
     * @return float|null Returns the nb compl h.
     */
    public function getNbComplH(): ?float {
        return $this->nbComplH;
    }

    /**
     * Get the nb h abs.
     *
     * @return float|null Returns the nb h abs.
     */
    public function getNbHAbs(): ?float {
        return $this->nbHAbs;
    }

    /**
     * Get the nb h abs jf.
     *
     * @return float|null Returns the nb h abs jf.
     */
    public function getNbHAbsJf(): ?float {
        return $this->nbHAbsJf;
    }

    /**
     * Get the nb h compl.
     *
     * @return float|null Returns the nb h compl.
     */
    public function getNbHCompl(): ?float {
        return $this->nbHCompl;
    }

    /**
     * Get the nb h rempl.
     *
     * @return float|null Returns the nb h rempl.
     */
    public function getNbHRempl(): ?float {
        return $this->nbHRempl;
    }

    /**
     * Get the nb hprevues.
     *
     * @return float|null Returns the nb hprevues.
     */
    public function getNbHprevues(): ?float {
        return $this->nbHprevues;
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
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setCodeEmploye(?string $codeEmploye): HistoTransfPaie {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the ecart cumule.
     *
     * @param float|null $ecartCumule The ecart cumule.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setEcartCumule(?float $ecartCumule): HistoTransfPaie {
        $this->ecartCumule = $ecartCumule;
        return $this;
    }

    /**
     * Set the hcr payees.
     *
     * @param bool|null $hcrPayees The hcr payees.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setHcrPayees(?bool $hcrPayees): HistoTransfPaie {
        $this->hcrPayees = $hcrPayees;
        return $this;
    }

    /**
     * Set the hnp compl h.
     *
     * @param float|null $hnpComplH The hnp compl h.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setHnpComplH(?float $hnpComplH): HistoTransfPaie {
        $this->hnpComplH = $hnpComplH;
        return $this;
    }

    /**
     * Set the hnphc11.
     *
     * @param float|null $hnphc11 The hnphc11.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setHnphc11(?float $hnphc11): HistoTransfPaie {
        $this->hnphc11 = $hnphc11;
        return $this;
    }

    /**
     * Set the hnphc25.
     *
     * @param float|null $hnphc25 The hnphc25.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setHnphc25(?float $hnphc25): HistoTransfPaie {
        $this->hnphc25 = $hnphc25;
        return $this;
    }

    /**
     * Set the hnphc33.
     *
     * @param float|null $hnphc33 The hnphc33.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setHnphc33(?float $hnphc33): HistoTransfPaie {
        $this->hnphc33 = $hnphc33;
        return $this;
    }

    /**
     * Set the nb compl h.
     *
     * @param float|null $nbComplH The nb compl h.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setNbComplH(?float $nbComplH): HistoTransfPaie {
        $this->nbComplH = $nbComplH;
        return $this;
    }

    /**
     * Set the nb h abs.
     *
     * @param float|null $nbHAbs The nb h abs.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setNbHAbs(?float $nbHAbs): HistoTransfPaie {
        $this->nbHAbs = $nbHAbs;
        return $this;
    }

    /**
     * Set the nb h abs jf.
     *
     * @param float|null $nbHAbsJf The nb h abs jf.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setNbHAbsJf(?float $nbHAbsJf): HistoTransfPaie {
        $this->nbHAbsJf = $nbHAbsJf;
        return $this;
    }

    /**
     * Set the nb h compl.
     *
     * @param float|null $nbHCompl The nb h compl.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setNbHCompl(?float $nbHCompl): HistoTransfPaie {
        $this->nbHCompl = $nbHCompl;
        return $this;
    }

    /**
     * Set the nb h rempl.
     *
     * @param float|null $nbHRempl The nb h rempl.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setNbHRempl(?float $nbHRempl): HistoTransfPaie {
        $this->nbHRempl = $nbHRempl;
        return $this;
    }

    /**
     * Set the nb hprevues.
     *
     * @param float|null $nbHprevues The nb hprevues.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setNbHprevues(?float $nbHprevues): HistoTransfPaie {
        $this->nbHprevues = $nbHprevues;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HistoTransfPaie Returns this Histo transf paie.
     */
    public function setPeriode(?DateTime $periode): HistoTransfPaie {
        $this->periode = $periode;
        return $this;
    }
}
