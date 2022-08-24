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
 * Phases.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Phases {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Num ordre.
     *
     * @var int|null
     */
    private $numOrdre;

    /**
     * Saisie fact.
     *
     * @var bool|null
     */
    private $saisieFact;

    /**
     * Saisie temps.
     *
     * @var bool|null
     */
    private $saisieTemps;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code regroupement.
     *
     * @return string|null Returns the code regroupement.
     */
    public function getCodeRegroupement(): ?string {
        return $this->codeRegroupement;
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the num ordre.
     *
     * @return int|null Returns the num ordre.
     */
    public function getNumOrdre(): ?int {
        return $this->numOrdre;
    }

    /**
     * Get the saisie fact.
     *
     * @return bool|null Returns the saisie fact.
     */
    public function getSaisieFact(): ?bool {
        return $this->saisieFact;
    }

    /**
     * Get the saisie temps.
     *
     * @return bool|null Returns the saisie temps.
     */
    public function getSaisieTemps(): ?bool {
        return $this->saisieTemps;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Phases Returns this Phases.
     */
    public function setCode(?string $code): Phases {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return Phases Returns this Phases.
     */
    public function setCodeRegroupement(?string $codeRegroupement): Phases {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Phases Returns this Phases.
     */
    public function setLibelle(?string $libelle): Phases {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the num ordre.
     *
     * @param int|null $numOrdre The num ordre.
     * @return Phases Returns this Phases.
     */
    public function setNumOrdre(?int $numOrdre): Phases {
        $this->numOrdre = $numOrdre;
        return $this;
    }

    /**
     * Set the saisie fact.
     *
     * @param bool|null $saisieFact The saisie fact.
     * @return Phases Returns this Phases.
     */
    public function setSaisieFact(?bool $saisieFact): Phases {
        $this->saisieFact = $saisieFact;
        return $this;
    }

    /**
     * Set the saisie temps.
     *
     * @param bool|null $saisieTemps The saisie temps.
     * @return Phases Returns this Phases.
     */
    public function setSaisieTemps(?bool $saisieTemps): Phases {
        $this->saisieTemps = $saisieTemps;
        return $this;
    }
}
