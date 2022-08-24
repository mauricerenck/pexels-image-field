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
 * Prepa paie repos.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PrepaPaieRepos {

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Cp pris.
     *
     * @var float|null
     */
    private $cpPris;

    /**
     * H effectives.
     *
     * @var float|null
     */
    private $hEffectives;

    /**
     * H prevues.
     *
     * @var float|null
     */
    private $hPrevues;

    /**
     * H realisees.
     *
     * @var float|null
     */
    private $hRealisees;

    /**
     * Num sem.
     *
     * @var string|null
     */
    private $numSem;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Repos comp acquis.
     *
     * @var float|null
     */
    private $reposCompAcquis;

    /**
     * Repos comp pris.
     *
     * @var float|null
     */
    private $reposCompPris;

    /**
     * Repos rempl acquis.
     *
     * @var float|null
     */
    private $reposRemplAcquis;

    /**
     * Repos rempl pris.
     *
     * @var float|null
     */
    private $reposRemplPris;

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
     * Get the cp pris.
     *
     * @return float|null Returns the cp pris.
     */
    public function getCpPris(): ?float {
        return $this->cpPris;
    }

    /**
     * Get the h effectives.
     *
     * @return float|null Returns the h effectives.
     */
    public function getHEffectives(): ?float {
        return $this->hEffectives;
    }

    /**
     * Get the h prevues.
     *
     * @return float|null Returns the h prevues.
     */
    public function getHPrevues(): ?float {
        return $this->hPrevues;
    }

    /**
     * Get the h realisees.
     *
     * @return float|null Returns the h realisees.
     */
    public function getHRealisees(): ?float {
        return $this->hRealisees;
    }

    /**
     * Get the num sem.
     *
     * @return string|null Returns the num sem.
     */
    public function getNumSem(): ?string {
        return $this->numSem;
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
     * Get the repos comp acquis.
     *
     * @return float|null Returns the repos comp acquis.
     */
    public function getReposCompAcquis(): ?float {
        return $this->reposCompAcquis;
    }

    /**
     * Get the repos comp pris.
     *
     * @return float|null Returns the repos comp pris.
     */
    public function getReposCompPris(): ?float {
        return $this->reposCompPris;
    }

    /**
     * Get the repos rempl acquis.
     *
     * @return float|null Returns the repos rempl acquis.
     */
    public function getReposRemplAcquis(): ?float {
        return $this->reposRemplAcquis;
    }

    /**
     * Get the repos rempl pris.
     *
     * @return float|null Returns the repos rempl pris.
     */
    public function getReposRemplPris(): ?float {
        return $this->reposRemplPris;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return PrepaPaieRepos Returns this Prepa paie repos.
     */
    public function setCodeEmploye(?string $codeEmploye): PrepaPaieRepos {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the cp pris.
     *
     * @param float|null $cpPris The cp pris.
     * @return PrepaPaieRepos Returns this Prepa paie repos.
     */
    public function setCpPris(?float $cpPris): PrepaPaieRepos {
        $this->cpPris = $cpPris;
        return $this;
    }

    /**
     * Set the h effectives.
     *
     * @param float|null $hEffectives The h effectives.
     * @return PrepaPaieRepos Returns this Prepa paie repos.
     */
    public function setHEffectives(?float $hEffectives): PrepaPaieRepos {
        $this->hEffectives = $hEffectives;
        return $this;
    }

    /**
     * Set the h prevues.
     *
     * @param float|null $hPrevues The h prevues.
     * @return PrepaPaieRepos Returns this Prepa paie repos.
     */
    public function setHPrevues(?float $hPrevues): PrepaPaieRepos {
        $this->hPrevues = $hPrevues;
        return $this;
    }

    /**
     * Set the h realisees.
     *
     * @param float|null $hRealisees The h realisees.
     * @return PrepaPaieRepos Returns this Prepa paie repos.
     */
    public function setHRealisees(?float $hRealisees): PrepaPaieRepos {
        $this->hRealisees = $hRealisees;
        return $this;
    }

    /**
     * Set the num sem.
     *
     * @param string|null $numSem The num sem.
     * @return PrepaPaieRepos Returns this Prepa paie repos.
     */
    public function setNumSem(?string $numSem): PrepaPaieRepos {
        $this->numSem = $numSem;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return PrepaPaieRepos Returns this Prepa paie repos.
     */
    public function setPeriode(?DateTime $periode): PrepaPaieRepos {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the repos comp acquis.
     *
     * @param float|null $reposCompAcquis The repos comp acquis.
     * @return PrepaPaieRepos Returns this Prepa paie repos.
     */
    public function setReposCompAcquis(?float $reposCompAcquis): PrepaPaieRepos {
        $this->reposCompAcquis = $reposCompAcquis;
        return $this;
    }

    /**
     * Set the repos comp pris.
     *
     * @param float|null $reposCompPris The repos comp pris.
     * @return PrepaPaieRepos Returns this Prepa paie repos.
     */
    public function setReposCompPris(?float $reposCompPris): PrepaPaieRepos {
        $this->reposCompPris = $reposCompPris;
        return $this;
    }

    /**
     * Set the repos rempl acquis.
     *
     * @param float|null $reposRemplAcquis The repos rempl acquis.
     * @return PrepaPaieRepos Returns this Prepa paie repos.
     */
    public function setReposRemplAcquis(?float $reposRemplAcquis): PrepaPaieRepos {
        $this->reposRemplAcquis = $reposRemplAcquis;
        return $this;
    }

    /**
     * Set the repos rempl pris.
     *
     * @param float|null $reposRemplPris The repos rempl pris.
     * @return PrepaPaieRepos Returns this Prepa paie repos.
     */
    public function setReposRemplPris(?float $reposRemplPris): PrepaPaieRepos {
        $this->reposRemplPris = $reposRemplPris;
        return $this;
    }
}
