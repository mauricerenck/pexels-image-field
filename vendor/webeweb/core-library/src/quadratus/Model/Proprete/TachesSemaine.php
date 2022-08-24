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
 * Taches semaine.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class TachesSemaine {

    /**
     * Auto incr.
     *
     * @var int|null
     */
    private $autoIncr;

    /**
     * Code semaine tache.
     *
     * @var string|null
     */
    private $codeSemaineTache;

    /**
     * Discr tache.
     *
     * @var int|null
     */
    private $discrTache;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the auto incr.
     *
     * @return int|null Returns the auto incr.
     */
    public function getAutoIncr(): ?int {
        return $this->autoIncr;
    }

    /**
     * Get the code semaine tache.
     *
     * @return string|null Returns the code semaine tache.
     */
    public function getCodeSemaineTache(): ?string {
        return $this->codeSemaineTache;
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
     * Set the auto incr.
     *
     * @param int|null $autoIncr The auto incr.
     * @return TachesSemaine Returns this Taches semaine.
     */
    public function setAutoIncr(?int $autoIncr): TachesSemaine {
        $this->autoIncr = $autoIncr;
        return $this;
    }

    /**
     * Set the code semaine tache.
     *
     * @param string|null $codeSemaineTache The code semaine tache.
     * @return TachesSemaine Returns this Taches semaine.
     */
    public function setCodeSemaineTache(?string $codeSemaineTache): TachesSemaine {
        $this->codeSemaineTache = $codeSemaineTache;
        return $this;
    }

    /**
     * Set the discr tache.
     *
     * @param int|null $discrTache The discr tache.
     * @return TachesSemaine Returns this Taches semaine.
     */
    public function setDiscrTache(?int $discrTache): TachesSemaine {
        $this->discrTache = $discrTache;
        return $this;
    }
}
