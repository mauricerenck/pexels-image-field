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

use DateTime;

/**
 * Agenda jours feries.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AgendaJoursFeries {

    /**
     * Calculee.
     *
     * @var bool|null
     */
    private $calculee;

    /**
     * Date feriee.
     *
     * @var DateTime|null
     */
    private $dateFeriee;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the calculee.
     *
     * @return bool|null Returns the calculee.
     */
    public function getCalculee(): ?bool {
        return $this->calculee;
    }

    /**
     * Get the date feriee.
     *
     * @return DateTime|null Returns the date feriee.
     */
    public function getDateFeriee(): ?DateTime {
        return $this->dateFeriee;
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
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the calculee.
     *
     * @param bool|null $calculee The calculee.
     * @return AgendaJoursFeries Returns this Agenda jours feries.
     */
    public function setCalculee(?bool $calculee): AgendaJoursFeries {
        $this->calculee = $calculee;
        return $this;
    }

    /**
     * Set the date feriee.
     *
     * @param DateTime|null $dateFeriee The date feriee.
     * @return AgendaJoursFeries Returns this Agenda jours feries.
     */
    public function setDateFeriee(?DateTime $dateFeriee): AgendaJoursFeries {
        $this->dateFeriee = $dateFeriee;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return AgendaJoursFeries Returns this Agenda jours feries.
     */
    public function setLibelle(?string $libelle): AgendaJoursFeries {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return AgendaJoursFeries Returns this Agenda jours feries.
     */
    public function setType(?string $type): AgendaJoursFeries {
        $this->type = $type;
        return $this;
    }
}
