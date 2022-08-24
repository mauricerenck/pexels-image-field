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
 * Histo paie anal.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class HistoPaieAnal {

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code nature.
     *
     * @var string|null
     */
    private $codeNature;

    /**
     * Numero ligne anal.
     *
     * @var int|null
     */
    private $numeroLigneAnal;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Pourcent.
     *
     * @var float|null
     */
    private $pourcent;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
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
     * Get the code nature.
     *
     * @return string|null Returns the code nature.
     */
    public function getCodeNature(): ?string {
        return $this->codeNature;
    }

    /**
     * Get the numero ligne anal.
     *
     * @return int|null Returns the numero ligne anal.
     */
    public function getNumeroLigneAnal(): ?int {
        return $this->numeroLigneAnal;
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
     * Get the pourcent.
     *
     * @return float|null Returns the pourcent.
     */
    public function getPourcent(): ?float {
        return $this->pourcent;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return HistoPaieAnal Returns this Histo paie anal.
     */
    public function setCodeCentre(?string $codeCentre): HistoPaieAnal {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return HistoPaieAnal Returns this Histo paie anal.
     */
    public function setCodeEmploye(?string $codeEmploye): HistoPaieAnal {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return HistoPaieAnal Returns this Histo paie anal.
     */
    public function setCodeNature(?string $codeNature): HistoPaieAnal {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the numero ligne anal.
     *
     * @param int|null $numeroLigneAnal The numero ligne anal.
     * @return HistoPaieAnal Returns this Histo paie anal.
     */
    public function setNumeroLigneAnal(?int $numeroLigneAnal): HistoPaieAnal {
        $this->numeroLigneAnal = $numeroLigneAnal;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HistoPaieAnal Returns this Histo paie anal.
     */
    public function setPeriode(?DateTime $periode): HistoPaieAnal {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcent.
     *
     * @param float|null $pourcent The pourcent.
     * @return HistoPaieAnal Returns this Histo paie anal.
     */
    public function setPourcent(?float $pourcent): HistoPaieAnal {
        $this->pourcent = $pourcent;
        return $this;
    }
}
