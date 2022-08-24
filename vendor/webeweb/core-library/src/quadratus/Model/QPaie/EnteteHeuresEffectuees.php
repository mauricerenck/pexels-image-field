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

use DateTime;

/**
 * Entete heures effectuees.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EnteteHeuresEffectuees {

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Transfere.
     *
     * @var string|null
     */
    private $transfere;

    /**
     * Type saisie.
     *
     * @var string|null
     */
    private $typeSaisie;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the transfere.
     *
     * @return string|null Returns the transfere.
     */
    public function getTransfere(): ?string {
        return $this->transfere;
    }

    /**
     * Get the type saisie.
     *
     * @return string|null Returns the type saisie.
     */
    public function getTypeSaisie(): ?string {
        return $this->typeSaisie;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EnteteHeuresEffectuees Returns this Entete heures effectuees.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EnteteHeuresEffectuees {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return EnteteHeuresEffectuees Returns this Entete heures effectuees.
     */
    public function setPeriode(?DateTime $periode): EnteteHeuresEffectuees {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the transfere.
     *
     * @param string|null $transfere The transfere.
     * @return EnteteHeuresEffectuees Returns this Entete heures effectuees.
     */
    public function setTransfere(?string $transfere): EnteteHeuresEffectuees {
        $this->transfere = $transfere;
        return $this;
    }

    /**
     * Set the type saisie.
     *
     * @param string|null $typeSaisie The type saisie.
     * @return EnteteHeuresEffectuees Returns this Entete heures effectuees.
     */
    public function setTypeSaisie(?string $typeSaisie): EnteteHeuresEffectuees {
        $this->typeSaisie = $typeSaisie;
        return $this;
    }
}
