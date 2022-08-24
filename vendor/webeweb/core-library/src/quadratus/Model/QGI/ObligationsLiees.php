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
 * Obligations liees.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ObligationsLiees {

    /**
     * Code action.
     *
     * @var string|null
     */
    private $codeAction;

    /**
     * Code obligation.
     *
     * @var string|null
     */
    private $codeObligation;

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
     * Get the code obligation.
     *
     * @return string|null Returns the code obligation.
     */
    public function getCodeObligation(): ?string {
        return $this->codeObligation;
    }

    /**
     * Set the code action.
     *
     * @param string|null $codeAction The code action.
     * @return ObligationsLiees Returns this Obligations liees.
     */
    public function setCodeAction(?string $codeAction): ObligationsLiees {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code obligation.
     *
     * @param string|null $codeObligation The code obligation.
     * @return ObligationsLiees Returns this Obligations liees.
     */
    public function setCodeObligation(?string $codeObligation): ObligationsLiees {
        $this->codeObligation = $codeObligation;
        return $this;
    }
}
