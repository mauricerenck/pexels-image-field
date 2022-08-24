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
 * Stats groupes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class StatsGroupes {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Groupe stat.
     *
     * @var string|null
     */
    private $groupeStat;

    /**
     * Type champ.
     *
     * @var string|null
     */
    private $typeChamp;

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
     * Get the groupe stat.
     *
     * @return string|null Returns the groupe stat.
     */
    public function getGroupeStat(): ?string {
        return $this->groupeStat;
    }

    /**
     * Get the type champ.
     *
     * @return string|null Returns the type champ.
     */
    public function getTypeChamp(): ?string {
        return $this->typeChamp;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return StatsGroupes Returns this Stats groupes.
     */
    public function setCode(?string $code): StatsGroupes {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the groupe stat.
     *
     * @param string|null $groupeStat The groupe stat.
     * @return StatsGroupes Returns this Stats groupes.
     */
    public function setGroupeStat(?string $groupeStat): StatsGroupes {
        $this->groupeStat = $groupeStat;
        return $this;
    }

    /**
     * Set the type champ.
     *
     * @param string|null $typeChamp The type champ.
     * @return StatsGroupes Returns this Stats groupes.
     */
    public function setTypeChamp(?string $typeChamp): StatsGroupes {
        $this->typeChamp = $typeChamp;
        return $this;
    }
}
