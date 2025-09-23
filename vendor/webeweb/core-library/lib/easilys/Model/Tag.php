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
use WBW\Library\Common\Traits\Integers\IntegerTypeTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;

/**
 * Tag.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Tag {

    use IntegerIdTrait {
        setId as public;
    }
    use IntegerTypeTrait;
    use StringLabelTrait;

    /**
     * Background color.
     *
     * @var string|null
     */
    protected $backgroundColor;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the background color.
     *
     * @return string|null Returns the background color.
     */
    public function getBackgroundColor(): ?string {
        return $this->backgroundColor;
    }

    /**
     * Set the background color.
     *
     * @param string|null $backgroundColor The background color.
     * @return Tag Returns this tag.
     */
    public function setBackgroundColor(?string $backgroundColor): Tag {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }
}
