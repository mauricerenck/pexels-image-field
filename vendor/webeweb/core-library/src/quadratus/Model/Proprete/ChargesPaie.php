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
 * Charges paie.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ChargesPaie {

    /**
     * Arbitrage.
     *
     * @var float|null
     */
    private $arbitrage;

    /**
     * Brut.
     *
     * @var float|null
     */
    private $brut;

    /**
     * Brut al.
     *
     * @var float|null
     */
    private $brutAl;

    /**
     * Brut anl.
     *
     * @var float|null
     */
    private $brutAnl;

    /**
     * Charges patronales.
     *
     * @var float|null
     */
    private $chargesPatronales;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Euro.
     *
     * @var bool|null
     */
    private $euro;

    /**
     * Heures sup.
     *
     * @var float|null
     */
    private $heuresSup;

    /**
     * Impos.
     *
     * @var float|null
     */
    private $impos;

    /**
     * Indemnite cp.
     *
     * @var float|null
     */
    private $indemniteCp;

    /**
     * Indemnite precarite.
     *
     * @var float|null
     */
    private $indemnitePrecarite;

    /**
     * Interessement.
     *
     * @var float|null
     */
    private $interessement;

    /**
     * Mt net paye theo.
     *
     * @var float|null
     */
    private $mtNetPayeTheo;

    /**
     * Nb h abs.
     *
     * @var float|null
     */
    private $nbHAbs;

    /**
     * Nb h base.
     *
     * @var float|null
     */
    private $nbHBase;

    /**
     * Nb h rc.
     *
     * @var float|null
     */
    private $nbHRc;

    /**
     * Nb h sup1.
     *
     * @var float|null
     */
    private $nbHSup1;

    /**
     * Nb h sup2.
     *
     * @var float|null
     */
    private $nbHSup2;

    /**
     * Nb h sup3.
     *
     * @var float|null
     */
    private $nbHSup3;

    /**
     * Nb hn.
     *
     * @var float|null
     */
    private $nbHn;

    /**
     * Nb ht.
     *
     * @var float|null
     */
    private $nbHt;

    /**
     * Participation.
     *
     * @var float|null
     */
    private $participation;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Provision cp.
     *
     * @var float|null
     */
    private $provisionCp;

    /**
     * S base.
     *
     * @var float|null
     */
    private $sBase;

    /**
     * Salaire.
     *
     * @var float|null
     */
    private $salaire;

    /**
     * Tot ret.
     *
     * @var float|null
     */
    private $totRet;

    /**
     * Tr a.
     *
     * @var float|null
     */
    private $trA;

    /**
     * Tr b.
     *
     * @var float|null
     */
    private $trB;

    /**
     * Tr c.
     *
     * @var float|null
     */
    private $trC;

    /**
     * Tx hn.
     *
     * @var float|null
     */
    private $txHn;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the arbitrage.
     *
     * @return float|null Returns the arbitrage.
     */
    public function getArbitrage(): ?float {
        return $this->arbitrage;
    }

    /**
     * Get the brut.
     *
     * @return float|null Returns the brut.
     */
    public function getBrut(): ?float {
        return $this->brut;
    }

    /**
     * Get the brut al.
     *
     * @return float|null Returns the brut al.
     */
    public function getBrutAl(): ?float {
        return $this->brutAl;
    }

    /**
     * Get the brut anl.
     *
     * @return float|null Returns the brut anl.
     */
    public function getBrutAnl(): ?float {
        return $this->brutAnl;
    }

    /**
     * Get the charges patronales.
     *
     * @return float|null Returns the charges patronales.
     */
    public function getChargesPatronales(): ?float {
        return $this->chargesPatronales;
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
     * Get the euro.
     *
     * @return bool|null Returns the euro.
     */
    public function getEuro(): ?bool {
        return $this->euro;
    }

    /**
     * Get the heures sup.
     *
     * @return float|null Returns the heures sup.
     */
    public function getHeuresSup(): ?float {
        return $this->heuresSup;
    }

    /**
     * Get the impos.
     *
     * @return float|null Returns the impos.
     */
    public function getImpos(): ?float {
        return $this->impos;
    }

    /**
     * Get the indemnite cp.
     *
     * @return float|null Returns the indemnite cp.
     */
    public function getIndemniteCp(): ?float {
        return $this->indemniteCp;
    }

    /**
     * Get the indemnite precarite.
     *
     * @return float|null Returns the indemnite precarite.
     */
    public function getIndemnitePrecarite(): ?float {
        return $this->indemnitePrecarite;
    }

    /**
     * Get the interessement.
     *
     * @return float|null Returns the interessement.
     */
    public function getInteressement(): ?float {
        return $this->interessement;
    }

    /**
     * Get the mt net paye theo.
     *
     * @return float|null Returns the mt net paye theo.
     */
    public function getMtNetPayeTheo(): ?float {
        return $this->mtNetPayeTheo;
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
     * Get the nb h base.
     *
     * @return float|null Returns the nb h base.
     */
    public function getNbHBase(): ?float {
        return $this->nbHBase;
    }

    /**
     * Get the nb h rc.
     *
     * @return float|null Returns the nb h rc.
     */
    public function getNbHRc(): ?float {
        return $this->nbHRc;
    }

    /**
     * Get the nb h sup1.
     *
     * @return float|null Returns the nb h sup1.
     */
    public function getNbHSup1(): ?float {
        return $this->nbHSup1;
    }

    /**
     * Get the nb h sup2.
     *
     * @return float|null Returns the nb h sup2.
     */
    public function getNbHSup2(): ?float {
        return $this->nbHSup2;
    }

    /**
     * Get the nb h sup3.
     *
     * @return float|null Returns the nb h sup3.
     */
    public function getNbHSup3(): ?float {
        return $this->nbHSup3;
    }

    /**
     * Get the nb hn.
     *
     * @return float|null Returns the nb hn.
     */
    public function getNbHn(): ?float {
        return $this->nbHn;
    }

    /**
     * Get the nb ht.
     *
     * @return float|null Returns the nb ht.
     */
    public function getNbHt(): ?float {
        return $this->nbHt;
    }

    /**
     * Get the participation.
     *
     * @return float|null Returns the participation.
     */
    public function getParticipation(): ?float {
        return $this->participation;
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
     * Get the provision cp.
     *
     * @return float|null Returns the provision cp.
     */
    public function getProvisionCp(): ?float {
        return $this->provisionCp;
    }

    /**
     * Get the s base.
     *
     * @return float|null Returns the s base.
     */
    public function getSBase(): ?float {
        return $this->sBase;
    }

    /**
     * Get the salaire.
     *
     * @return float|null Returns the salaire.
     */
    public function getSalaire(): ?float {
        return $this->salaire;
    }

    /**
     * Get the tot ret.
     *
     * @return float|null Returns the tot ret.
     */
    public function getTotRet(): ?float {
        return $this->totRet;
    }

    /**
     * Get the tr a.
     *
     * @return float|null Returns the tr a.
     */
    public function getTrA(): ?float {
        return $this->trA;
    }

    /**
     * Get the tr b.
     *
     * @return float|null Returns the tr b.
     */
    public function getTrB(): ?float {
        return $this->trB;
    }

    /**
     * Get the tr c.
     *
     * @return float|null Returns the tr c.
     */
    public function getTrC(): ?float {
        return $this->trC;
    }

    /**
     * Get the tx hn.
     *
     * @return float|null Returns the tx hn.
     */
    public function getTxHn(): ?float {
        return $this->txHn;
    }

    /**
     * Set the arbitrage.
     *
     * @param float|null $arbitrage The arbitrage.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setArbitrage(?float $arbitrage): ChargesPaie {
        $this->arbitrage = $arbitrage;
        return $this;
    }

    /**
     * Set the brut.
     *
     * @param float|null $brut The brut.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setBrut(?float $brut): ChargesPaie {
        $this->brut = $brut;
        return $this;
    }

    /**
     * Set the brut al.
     *
     * @param float|null $brutAl The brut al.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setBrutAl(?float $brutAl): ChargesPaie {
        $this->brutAl = $brutAl;
        return $this;
    }

    /**
     * Set the brut anl.
     *
     * @param float|null $brutAnl The brut anl.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setBrutAnl(?float $brutAnl): ChargesPaie {
        $this->brutAnl = $brutAnl;
        return $this;
    }

    /**
     * Set the charges patronales.
     *
     * @param float|null $chargesPatronales The charges patronales.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setChargesPatronales(?float $chargesPatronales): ChargesPaie {
        $this->chargesPatronales = $chargesPatronales;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setCodeEmploye(?string $codeEmploye): ChargesPaie {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the euro.
     *
     * @param bool|null $euro The euro.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setEuro(?bool $euro): ChargesPaie {
        $this->euro = $euro;
        return $this;
    }

    /**
     * Set the heures sup.
     *
     * @param float|null $heuresSup The heures sup.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setHeuresSup(?float $heuresSup): ChargesPaie {
        $this->heuresSup = $heuresSup;
        return $this;
    }

    /**
     * Set the impos.
     *
     * @param float|null $impos The impos.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setImpos(?float $impos): ChargesPaie {
        $this->impos = $impos;
        return $this;
    }

    /**
     * Set the indemnite cp.
     *
     * @param float|null $indemniteCp The indemnite cp.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setIndemniteCp(?float $indemniteCp): ChargesPaie {
        $this->indemniteCp = $indemniteCp;
        return $this;
    }

    /**
     * Set the indemnite precarite.
     *
     * @param float|null $indemnitePrecarite The indemnite precarite.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setIndemnitePrecarite(?float $indemnitePrecarite): ChargesPaie {
        $this->indemnitePrecarite = $indemnitePrecarite;
        return $this;
    }

    /**
     * Set the interessement.
     *
     * @param float|null $interessement The interessement.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setInteressement(?float $interessement): ChargesPaie {
        $this->interessement = $interessement;
        return $this;
    }

    /**
     * Set the mt net paye theo.
     *
     * @param float|null $mtNetPayeTheo The mt net paye theo.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setMtNetPayeTheo(?float $mtNetPayeTheo): ChargesPaie {
        $this->mtNetPayeTheo = $mtNetPayeTheo;
        return $this;
    }

    /**
     * Set the nb h abs.
     *
     * @param float|null $nbHAbs The nb h abs.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setNbHAbs(?float $nbHAbs): ChargesPaie {
        $this->nbHAbs = $nbHAbs;
        return $this;
    }

    /**
     * Set the nb h base.
     *
     * @param float|null $nbHBase The nb h base.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setNbHBase(?float $nbHBase): ChargesPaie {
        $this->nbHBase = $nbHBase;
        return $this;
    }

    /**
     * Set the nb h rc.
     *
     * @param float|null $nbHRc The nb h rc.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setNbHRc(?float $nbHRc): ChargesPaie {
        $this->nbHRc = $nbHRc;
        return $this;
    }

    /**
     * Set the nb h sup1.
     *
     * @param float|null $nbHSup1 The nb h sup1.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setNbHSup1(?float $nbHSup1): ChargesPaie {
        $this->nbHSup1 = $nbHSup1;
        return $this;
    }

    /**
     * Set the nb h sup2.
     *
     * @param float|null $nbHSup2 The nb h sup2.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setNbHSup2(?float $nbHSup2): ChargesPaie {
        $this->nbHSup2 = $nbHSup2;
        return $this;
    }

    /**
     * Set the nb h sup3.
     *
     * @param float|null $nbHSup3 The nb h sup3.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setNbHSup3(?float $nbHSup3): ChargesPaie {
        $this->nbHSup3 = $nbHSup3;
        return $this;
    }

    /**
     * Set the nb hn.
     *
     * @param float|null $nbHn The nb hn.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setNbHn(?float $nbHn): ChargesPaie {
        $this->nbHn = $nbHn;
        return $this;
    }

    /**
     * Set the nb ht.
     *
     * @param float|null $nbHt The nb ht.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setNbHt(?float $nbHt): ChargesPaie {
        $this->nbHt = $nbHt;
        return $this;
    }

    /**
     * Set the participation.
     *
     * @param float|null $participation The participation.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setParticipation(?float $participation): ChargesPaie {
        $this->participation = $participation;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setPeriode(?DateTime $periode): ChargesPaie {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the provision cp.
     *
     * @param float|null $provisionCp The provision cp.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setProvisionCp(?float $provisionCp): ChargesPaie {
        $this->provisionCp = $provisionCp;
        return $this;
    }

    /**
     * Set the s base.
     *
     * @param float|null $sBase The s base.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setSBase(?float $sBase): ChargesPaie {
        $this->sBase = $sBase;
        return $this;
    }

    /**
     * Set the salaire.
     *
     * @param float|null $salaire The salaire.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setSalaire(?float $salaire): ChargesPaie {
        $this->salaire = $salaire;
        return $this;
    }

    /**
     * Set the tot ret.
     *
     * @param float|null $totRet The tot ret.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setTotRet(?float $totRet): ChargesPaie {
        $this->totRet = $totRet;
        return $this;
    }

    /**
     * Set the tr a.
     *
     * @param float|null $trA The tr a.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setTrA(?float $trA): ChargesPaie {
        $this->trA = $trA;
        return $this;
    }

    /**
     * Set the tr b.
     *
     * @param float|null $trB The tr b.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setTrB(?float $trB): ChargesPaie {
        $this->trB = $trB;
        return $this;
    }

    /**
     * Set the tr c.
     *
     * @param float|null $trC The tr c.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setTrC(?float $trC): ChargesPaie {
        $this->trC = $trC;
        return $this;
    }

    /**
     * Set the tx hn.
     *
     * @param float|null $txHn The tx hn.
     * @return ChargesPaie Returns this Charges paie.
     */
    public function setTxHn(?float $txHn): ChargesPaie {
        $this->txHn = $txHn;
        return $this;
    }
}
