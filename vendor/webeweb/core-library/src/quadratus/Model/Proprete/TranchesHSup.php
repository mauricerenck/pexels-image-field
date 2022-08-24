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

/**
 * Tranches h sup.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class TranchesHSup {

    /**
     * Nb heures.
     *
     * @var int|null
     */
    private $nbHeures;

    /**
     * Taux.
     *
     * @var float|null
     */
    private $taux;

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
     * Get the nb heures.
     *
     * @return int|null Returns the nb heures.
     */
    public function getNbHeures(): ?int {
        return $this->nbHeures;
    }

    /**
     * Get the taux.
     *
     * @return float|null Returns the taux.
     */
    public function getTaux(): ?float {
        return $this->taux;
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
     * Set the nb heures.
     *
     * @param int|null $nbHeures The nb heures.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setNbHeures(?int $nbHeures): TranchesHSup {
        $this->nbHeures = $nbHeures;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float|null $taux The taux.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setTaux(?float $taux): TranchesHSup {
        $this->taux = $taux;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setType(?string $type): TranchesHSup {
        $this->type = $type;
        return $this;
    }
}
