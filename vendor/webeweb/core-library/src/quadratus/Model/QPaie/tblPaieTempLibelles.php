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
 * tbl paie temp libelles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class tblPaieTempLibelles {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code calcul.
     *
     * @var string|null
     */
    private $codeCalcul;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

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
     * Get the code calcul.
     *
     * @return string|null Returns the code calcul.
     */
    public function getCodeCalcul(): ?string {
        return $this->codeCalcul;
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
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return tblPaieTempLibelles Returns this tbl paie temp libelles.
     */
    public function setCode(?string $code): tblPaieTempLibelles {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code calcul.
     *
     * @param string|null $codeCalcul The code calcul.
     * @return tblPaieTempLibelles Returns this tbl paie temp libelles.
     */
    public function setCodeCalcul(?string $codeCalcul): tblPaieTempLibelles {
        $this->codeCalcul = $codeCalcul;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return tblPaieTempLibelles Returns this tbl paie temp libelles.
     */
    public function setIntitule(?string $intitule): tblPaieTempLibelles {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return tblPaieTempLibelles Returns this tbl paie temp libelles.
     */
    public function setNumeroEmploye(?string $numeroEmploye): tblPaieTempLibelles {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }
}
