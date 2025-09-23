<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Validator;

use WBW\Library\Common\Traits\Strings\StringNameTrait;

/**
 * Abstract rule.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Validator
 * @abstract
 */
abstract class AbstractRule implements RuleInterface {

    use StringNameTrait {
        setName as protected;
    }

    /**
     * Constructor.
     *
     * @param string|null $name The name.
     */
    protected function __construct(?string $name) {
        $this->setName($name);
    }
}
