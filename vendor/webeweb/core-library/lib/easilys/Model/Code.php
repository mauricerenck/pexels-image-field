<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Model;

use WBW\Library\Common\Traits\Integers\IntegerIdTrait;

/**
 * Code.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Code {

    use IntegerIdTrait {
        setId as public;
    }

    /**
     * Label packaging
     *
     * @var string|null
     */
    protected $LabelPackaging;

    /**
     * Code packaging
     *
     * @var string|null
     */
    protected $codePackaging;

    /**
     * Id packaging
     *
     * @var int|null
     */
    protected $idPackagingUnit;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code packaging.
     *
     * @return string|null Returns the code packaging.
     */
    public function getCodePackaging(): ?string {
        return $this->codePackaging;
    }

    /**
     * Get the id packaging unit.
     *
     * @return int|null Returns the id packaging unit.
     */
    public function getIdPackagingUnit(): ?int {
        return $this->idPackagingUnit;
    }

    /**
     * Get the label packaging.
     *
     * @return string|null Returns the label packaging.
     */
    public function getLabelPackaging(): ?string {
        return $this->LabelPackaging;
    }

    /**
     * Set the code packaging.
     *
     * @param string|null $codePackaging The code packaging.
     * @return Code Returns this code.
     */
    public function setCodePackaging(?string $codePackaging): Code {
        $this->codePackaging = $codePackaging;
        return $this;
    }

    /**
     * Set the id packaging unit.
     *
     * @param int|null $idPackagingUnit The id packaging unit.
     * @return Code Returns this code.
     */
    public function setIdPackagingUnit(?int $idPackagingUnit): Code {
        $this->idPackagingUnit = $idPackagingUnit;
        return $this;
    }

    /**
     * Set the label packaging.
     *
     * @param string|null $LabelPackaging The label packaging.
     * @return Code Returns this code.
     */
    public function setLabelPackaging(?string $LabelPackaging): Code {
        $this->LabelPackaging = $LabelPackaging;
        return $this;
    }
}
