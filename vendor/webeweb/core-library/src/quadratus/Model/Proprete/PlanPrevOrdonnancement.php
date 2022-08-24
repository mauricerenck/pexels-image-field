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
 * Plan prev ordonnancement.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PlanPrevOrdonnancement {

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
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Descriptif.
     *
     * @var string|null
     */
    private $descriptif;

    /**
     * Discr tache.
     *
     * @var int|null
     */
    private $discrTache;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Num ordre.
     *
     * @var int|null
     */
    private $numOrdre;

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
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Get the descriptif.
     *
     * @return string|null Returns the descriptif.
     */
    public function getDescriptif(): ?string {
        return $this->descriptif;
    }

    /**
     * Get the discr tache.
     *
     * @return int|null Returns the discr tache.
     */
    public function getDiscrTache(): ?int {
        return $this->discrTache;
    }

    /**
     * Get the num bt.
     *
     * @return int|null Returns the num bt.
     */
    public function getNumBt(): ?int {
        return $this->numBt;
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
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return PlanPrevOrdonnancement Returns this Plan prev ordonnancement.
     */
    public function setCodeAffaire(?string $codeAffaire): PlanPrevOrdonnancement {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return PlanPrevOrdonnancement Returns this Plan prev ordonnancement.
     */
    public function setCodeChantier(?string $codeChantier): PlanPrevOrdonnancement {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return PlanPrevOrdonnancement Returns this Plan prev ordonnancement.
     */
    public function setCodeClient(?string $codeClient): PlanPrevOrdonnancement {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return PlanPrevOrdonnancement Returns this Plan prev ordonnancement.
     */
    public function setCodeEmploye(?string $codeEmploye): PlanPrevOrdonnancement {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return PlanPrevOrdonnancement Returns this Plan prev ordonnancement.
     */
    public function setCodeTache(?string $codeTache): PlanPrevOrdonnancement {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return PlanPrevOrdonnancement Returns this Plan prev ordonnancement.
     */
    public function setDate(?DateTime $date): PlanPrevOrdonnancement {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string|null $descriptif The descriptif.
     * @return PlanPrevOrdonnancement Returns this Plan prev ordonnancement.
     */
    public function setDescriptif(?string $descriptif): PlanPrevOrdonnancement {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the discr tache.
     *
     * @param int|null $discrTache The discr tache.
     * @return PlanPrevOrdonnancement Returns this Plan prev ordonnancement.
     */
    public function setDiscrTache(?int $discrTache): PlanPrevOrdonnancement {
        $this->discrTache = $discrTache;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return PlanPrevOrdonnancement Returns this Plan prev ordonnancement.
     */
    public function setNumBt(?int $numBt): PlanPrevOrdonnancement {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the num ordre.
     *
     * @param int|null $numOrdre The num ordre.
     * @return PlanPrevOrdonnancement Returns this Plan prev ordonnancement.
     */
    public function setNumOrdre(?int $numOrdre): PlanPrevOrdonnancement {
        $this->numOrdre = $numOrdre;
        return $this;
    }
}
