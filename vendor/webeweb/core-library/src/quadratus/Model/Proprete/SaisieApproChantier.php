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
 * Saisie appro chantier.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class SaisieApproChantier {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Pret.
     *
     * @var bool|null
     */
    private $pret;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
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
     * Get the pret.
     *
     * @return bool|null Returns the pret.
     */
    public function getPret(): ?bool {
        return $this->pret;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return SaisieApproChantier Returns this Saisie appro chantier.
     */
    public function setCodeAffaire(?string $codeAffaire): SaisieApproChantier {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return SaisieApproChantier Returns this Saisie appro chantier.
     */
    public function setCodeChantier(?string $codeChantier): SaisieApproChantier {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return SaisieApproChantier Returns this Saisie appro chantier.
     */
    public function setCodeClient(?string $codeClient): SaisieApproChantier {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return SaisieApproChantier Returns this Saisie appro chantier.
     */
    public function setPeriode(?DateTime $periode): SaisieApproChantier {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pret.
     *
     * @param bool|null $pret The pret.
     * @return SaisieApproChantier Returns this Saisie appro chantier.
     */
    public function setPret(?bool $pret): SaisieApproChantier {
        $this->pret = $pret;
        return $this;
    }
}
