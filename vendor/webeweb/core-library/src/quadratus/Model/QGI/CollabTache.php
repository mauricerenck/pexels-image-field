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
 * Collab tache.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class CollabTache {

    /**
     * Code collab.
     *
     * @var string|null
     */
    private $codeCollab;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Pv1.
     *
     * @var float|null
     */
    private $pv1;

    /**
     * Pv2.
     *
     * @var float|null
     */
    private $pv2;

    /**
     * Pv3.
     *
     * @var float|null
     */
    private $pv3;

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
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the pv1.
     *
     * @return float|null Returns the pv1.
     */
    public function getPv1(): ?float {
        return $this->pv1;
    }

    /**
     * Get the pv2.
     *
     * @return float|null Returns the pv2.
     */
    public function getPv2(): ?float {
        return $this->pv2;
    }

    /**
     * Get the pv3.
     *
     * @return float|null Returns the pv3.
     */
    public function getPv3(): ?float {
        return $this->pv3;
    }

    /**
     * Set the code collab.
     *
     * @param string|null $codeCollab The code collab.
     * @return CollabTache Returns this Collab tache.
     */
    public function setCodeCollab(?string $codeCollab): CollabTache {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return CollabTache Returns this Collab tache.
     */
    public function setCodeTache(?string $codeTache): CollabTache {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the pv1.
     *
     * @param float|null $pv1 The pv1.
     * @return CollabTache Returns this Collab tache.
     */
    public function setPv1(?float $pv1): CollabTache {
        $this->pv1 = $pv1;
        return $this;
    }

    /**
     * Set the pv2.
     *
     * @param float|null $pv2 The pv2.
     * @return CollabTache Returns this Collab tache.
     */
    public function setPv2(?float $pv2): CollabTache {
        $this->pv2 = $pv2;
        return $this;
    }

    /**
     * Set the pv3.
     *
     * @param float|null $pv3 The pv3.
     * @return CollabTache Returns this Collab tache.
     */
    public function setPv3(?float $pv3): CollabTache {
        $this->pv3 = $pv3;
        return $this;
    }
}
