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
use WBW\Library\Common\Traits\Strings\StringLabelTrait;

/**
 * Family.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Family {

    use IntegerIdTrait {
        setId as public;
    }
    use StringLabelTrait;

    /**
     * Parent.
     *
     * @var Family|null
     */
    protected $parent;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the parent.
     *
     * @return Family|null Returns the parent.
     */
    public function getParent(): ?Family {
        return $this->parent;
    }

    /**
     * Set the parent.
     *
     * @param Family|null $parent The parent.
     * @return Family Returns this family.
     */
    public function setParent(?Family $parent): Family {
        $this->parent = $parent;
        return $this;
    }
}
