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

/**
 * Employes proprete.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmployesProprete {

    /**
     * Controleur.
     *
     * @var bool|null
     */
    private $controleur;

    /**
     * Hotellerie.
     *
     * @var bool|null
     */
    private $hotellerie;

    /**
     * Livreur.
     *
     * @var bool|null
     */
    private $livreur;

    /**
     * Modulation.
     *
     * @var bool|null
     */
    private $modulation;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Polyvalent.
     *
     * @var bool|null
     */
    private $polyvalent;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the controleur.
     *
     * @return bool|null Returns the controleur.
     */
    public function getControleur(): ?bool {
        return $this->controleur;
    }

    /**
     * Get the hotellerie.
     *
     * @return bool|null Returns the hotellerie.
     */
    public function getHotellerie(): ?bool {
        return $this->hotellerie;
    }

    /**
     * Get the livreur.
     *
     * @return bool|null Returns the livreur.
     */
    public function getLivreur(): ?bool {
        return $this->livreur;
    }

    /**
     * Get the modulation.
     *
     * @return bool|null Returns the modulation.
     */
    public function getModulation(): ?bool {
        return $this->modulation;
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
     * Get the polyvalent.
     *
     * @return bool|null Returns the polyvalent.
     */
    public function getPolyvalent(): ?bool {
        return $this->polyvalent;
    }

    /**
     * Set the controleur.
     *
     * @param bool|null $controleur The controleur.
     * @return EmployesProprete Returns this Employes proprete.
     */
    public function setControleur(?bool $controleur): EmployesProprete {
        $this->controleur = $controleur;
        return $this;
    }

    /**
     * Set the hotellerie.
     *
     * @param bool|null $hotellerie The hotellerie.
     * @return EmployesProprete Returns this Employes proprete.
     */
    public function setHotellerie(?bool $hotellerie): EmployesProprete {
        $this->hotellerie = $hotellerie;
        return $this;
    }

    /**
     * Set the livreur.
     *
     * @param bool|null $livreur The livreur.
     * @return EmployesProprete Returns this Employes proprete.
     */
    public function setLivreur(?bool $livreur): EmployesProprete {
        $this->livreur = $livreur;
        return $this;
    }

    /**
     * Set the modulation.
     *
     * @param bool|null $modulation The modulation.
     * @return EmployesProprete Returns this Employes proprete.
     */
    public function setModulation(?bool $modulation): EmployesProprete {
        $this->modulation = $modulation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmployesProprete Returns this Employes proprete.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmployesProprete {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the polyvalent.
     *
     * @param bool|null $polyvalent The polyvalent.
     * @return EmployesProprete Returns this Employes proprete.
     */
    public function setPolyvalent(?bool $polyvalent): EmployesProprete {
        $this->polyvalent = $polyvalent;
        return $this;
    }
}
