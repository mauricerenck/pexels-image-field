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
 * Collab visu taches.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class CollabVisuTaches {

    /**
     * Code collab.
     *
     * @var string|null
     */
    private $codeCollab;

    /**
     * Code tache visu.
     *
     * @var string|null
     */
    private $codeTacheVisu;

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
     * Get the code tache visu.
     *
     * @return string|null Returns the code tache visu.
     */
    public function getCodeTacheVisu(): ?string {
        return $this->codeTacheVisu;
    }

    /**
     * Set the code collab.
     *
     * @param string|null $codeCollab The code collab.
     * @return CollabVisuTaches Returns this Collab visu taches.
     */
    public function setCodeCollab(?string $codeCollab): CollabVisuTaches {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the code tache visu.
     *
     * @param string|null $codeTacheVisu The code tache visu.
     * @return CollabVisuTaches Returns this Collab visu taches.
     */
    public function setCodeTacheVisu(?string $codeTacheVisu): CollabVisuTaches {
        $this->codeTacheVisu = $codeTacheVisu;
        return $this;
    }
}
