<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Component\Color;

use WBW\Library\Widget\Component\AbstractColor;

/**
 * Black color.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Color
 */
class BlackColor extends AbstractColor implements BlackColorInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::BLACK_COLOR_NAME);
    }

    /**
     * {@inheritDoc}
     */
    public function getValues(): array {

        return [
            self::COLOR_VALUE_DEFAULT => self::BLACK_COLOR_VALUE,
        ];
    }
}
