<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Exception;

/**
 * Too long data exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Exception
 */
class TooLongDataException extends AbstractException {

    /**
     * Constructor.
     *
     * @param string $value The value.
     * @param int $length The length.
     */
    public function __construct(string $value, int $length) {
        parent::__construct(sprintf('The data "%s" exceeds the length "%d" allowed', $value, $length));
    }
}
