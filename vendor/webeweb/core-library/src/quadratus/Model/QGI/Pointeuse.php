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
 * Pointeuse.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Pointeuse {

    /**
     * Code collab.
     *
     * @var string|null
     */
    private $codeCollab;

    /**
     * Date heure systeme.
     *
     * @var DateTime|null
     */
    private $dateHeureSysteme;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Id pointeuse.
     *
     * @var int|null
     */
    private $idPointeuse;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code collab.
     *
     * @return string|null Returns the code collab.
     */
    public function getCodeCollab(): ?string {
        return $this->codeCollab;
    }

    /**
     * Get the date heure systeme.
     *
     * @return DateTime|null Returns the date heure systeme.
     */
    public function getDateHeureSysteme(): ?DateTime {
        return $this->dateHeureSysteme;
    }

    /**
     * Get the etat.
     *
     * @return string|null Returns the etat.
     */
    public function getEtat(): ?string {
        return $this->etat;
    }

    /**
     * Get the id pointeuse.
     *
     * @return int|null Returns the id pointeuse.
     */
    public function getIdPointeuse(): ?int {
        return $this->idPointeuse;
    }

    /**
     * Set the code collab.
     *
     * @param string|null $codeCollab The code collab.
     * @return Pointeuse Returns this Pointeuse.
     */
    public function setCodeCollab(?string $codeCollab): Pointeuse {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the date heure systeme.
     *
     * @param DateTime|null $dateHeureSysteme The date heure systeme.
     * @return Pointeuse Returns this Pointeuse.
     */
    public function setDateHeureSysteme(?DateTime $dateHeureSysteme): Pointeuse {
        $this->dateHeureSysteme = $dateHeureSysteme;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return Pointeuse Returns this Pointeuse.
     */
    public function setEtat(?string $etat): Pointeuse {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the id pointeuse.
     *
     * @param int|null $idPointeuse The id pointeuse.
     * @return Pointeuse Returns this Pointeuse.
     */
    public function setIdPointeuse(?int $idPointeuse): Pointeuse {
        $this->idPointeuse = $idPointeuse;
        return $this;
    }
}
