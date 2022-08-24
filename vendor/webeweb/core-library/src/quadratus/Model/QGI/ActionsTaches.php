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
 * Actions taches.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ActionsTaches {

    /**
     * Code action.
     *
     * @var string|null
     */
    private $codeAction;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

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
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Set the code action.
     *
     * @param string|null $codeAction The code action.
     * @return ActionsTaches Returns this Actions taches.
     */
    public function setCodeAction(?string $codeAction): ActionsTaches {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return ActionsTaches Returns this Actions taches.
     */
    public function setCodeTache(?string $codeTache): ActionsTaches {
        $this->codeTache = $codeTache;
        return $this;
    }
}
