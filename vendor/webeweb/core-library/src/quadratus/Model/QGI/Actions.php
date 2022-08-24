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
 * Actions.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Actions {

    /**
     * Code action.
     *
     * @var string|null
     */
    private $codeAction;

    /**
     * Code calcul.
     *
     * @var int|null
     */
    private $codeCalcul;

    /**
     * Descriptif court.
     *
     * @var string|null
     */
    private $descriptifCourt;

    /**
     * Descriptif long.
     *
     * @var string|null
     */
    private $descriptifLong;

    /**
     * Obligation liee.
     *
     * @var string|null
     */
    private $obligationLiee;

    /**
     * Quantite heure.
     *
     * @var float|null
     */
    private $quantiteHeure;

    /**
     * Relation qh.
     *
     * @var bool|null
     */
    private $relationQh;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code action.
     *
     * @return string|null Returns the code action.
     */
    public function getCodeAction(): ?string {
        return $this->codeAction;
    }

    /**
     * Get the code calcul.
     *
     * @return int|null Returns the code calcul.
     */
    public function getCodeCalcul(): ?int {
        return $this->codeCalcul;
    }

    /**
     * Get the descriptif court.
     *
     * @return string|null Returns the descriptif court.
     */
    public function getDescriptifCourt(): ?string {
        return $this->descriptifCourt;
    }

    /**
     * Get the descriptif long.
     *
     * @return string|null Returns the descriptif long.
     */
    public function getDescriptifLong(): ?string {
        return $this->descriptifLong;
    }

    /**
     * Get the obligation liee.
     *
     * @return string|null Returns the obligation liee.
     */
    public function getObligationLiee(): ?string {
        return $this->obligationLiee;
    }

    /**
     * Get the quantite heure.
     *
     * @return float|null Returns the quantite heure.
     */
    public function getQuantiteHeure(): ?float {
        return $this->quantiteHeure;
    }

    /**
     * Get the relation qh.
     *
     * @return bool|null Returns the relation qh.
     */
    public function getRelationQh(): ?bool {
        return $this->relationQh;
    }

    /**
     * Set the code action.
     *
     * @param string|null $codeAction The code action.
     * @return Actions Returns this Actions.
     */
    public function setCodeAction(?string $codeAction): Actions {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code calcul.
     *
     * @param int|null $codeCalcul The code calcul.
     * @return Actions Returns this Actions.
     */
    public function setCodeCalcul(?int $codeCalcul): Actions {
        $this->codeCalcul = $codeCalcul;
        return $this;
    }

    /**
     * Set the descriptif court.
     *
     * @param string|null $descriptifCourt The descriptif court.
     * @return Actions Returns this Actions.
     */
    public function setDescriptifCourt(?string $descriptifCourt): Actions {
        $this->descriptifCourt = $descriptifCourt;
        return $this;
    }

    /**
     * Set the descriptif long.
     *
     * @param string|null $descriptifLong The descriptif long.
     * @return Actions Returns this Actions.
     */
    public function setDescriptifLong(?string $descriptifLong): Actions {
        $this->descriptifLong = $descriptifLong;
        return $this;
    }

    /**
     * Set the obligation liee.
     *
     * @param string|null $obligationLiee The obligation liee.
     * @return Actions Returns this Actions.
     */
    public function setObligationLiee(?string $obligationLiee): Actions {
        $this->obligationLiee = $obligationLiee;
        return $this;
    }

    /**
     * Set the quantite heure.
     *
     * @param float|null $quantiteHeure The quantite heure.
     * @return Actions Returns this Actions.
     */
    public function setQuantiteHeure(?float $quantiteHeure): Actions {
        $this->quantiteHeure = $quantiteHeure;
        return $this;
    }

    /**
     * Set the relation qh.
     *
     * @param bool|null $relationQh The relation qh.
     * @return Actions Returns this Actions.
     */
    public function setRelationQh(?bool $relationQh): Actions {
        $this->relationQh = $relationQh;
        return $this;
    }
}
