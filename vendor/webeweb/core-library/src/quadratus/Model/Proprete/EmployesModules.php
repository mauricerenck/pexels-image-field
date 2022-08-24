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
 * Employes modules.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class EmployesModules {

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Debut modulation.
     *
     * @var DateTime|null
     */
    private $debutModulation;

    /**
     * Ecart cumule init.
     *
     * @var float|null
     */
    private $ecartCumuleInit;

    /**
     * Fin modulation.
     *
     * @var DateTime|null
     */
    private $finModulation;

    /**
     * Periode ecart cumule.
     *
     * @var DateTime|null
     */
    private $periodeEcartCumule;

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
     * Get the debut modulation.
     *
     * @return DateTime|null Returns the debut modulation.
     */
    public function getDebutModulation(): ?DateTime {
        return $this->debutModulation;
    }

    /**
     * Get the ecart cumule init.
     *
     * @return float|null Returns the ecart cumule init.
     */
    public function getEcartCumuleInit(): ?float {
        return $this->ecartCumuleInit;
    }

    /**
     * Get the fin modulation.
     *
     * @return DateTime|null Returns the fin modulation.
     */
    public function getFinModulation(): ?DateTime {
        return $this->finModulation;
    }

    /**
     * Get the periode ecart cumule.
     *
     * @return DateTime|null Returns the periode ecart cumule.
     */
    public function getPeriodeEcartCumule(): ?DateTime {
        return $this->periodeEcartCumule;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return EmployesModules Returns this Employes modules.
     */
    public function setCodeEmploye(?string $codeEmploye): EmployesModules {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the debut modulation.
     *
     * @param DateTime|null $debutModulation The debut modulation.
     * @return EmployesModules Returns this Employes modules.
     */
    public function setDebutModulation(?DateTime $debutModulation): EmployesModules {
        $this->debutModulation = $debutModulation;
        return $this;
    }

    /**
     * Set the ecart cumule init.
     *
     * @param float|null $ecartCumuleInit The ecart cumule init.
     * @return EmployesModules Returns this Employes modules.
     */
    public function setEcartCumuleInit(?float $ecartCumuleInit): EmployesModules {
        $this->ecartCumuleInit = $ecartCumuleInit;
        return $this;
    }

    /**
     * Set the fin modulation.
     *
     * @param DateTime|null $finModulation The fin modulation.
     * @return EmployesModules Returns this Employes modules.
     */
    public function setFinModulation(?DateTime $finModulation): EmployesModules {
        $this->finModulation = $finModulation;
        return $this;
    }

    /**
     * Set the periode ecart cumule.
     *
     * @param DateTime|null $periodeEcartCumule The periode ecart cumule.
     * @return EmployesModules Returns this Employes modules.
     */
    public function setPeriodeEcartCumule(?DateTime $periodeEcartCumule): EmployesModules {
        $this->periodeEcartCumule = $periodeEcartCumule;
        return $this;
    }
}
