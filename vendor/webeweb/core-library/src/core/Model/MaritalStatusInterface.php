<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model;

/**
 * Marital status interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model
 */
interface MaritalStatusInterface {

    /**
     * Marital status "divorced".
     *
     * @var int
     */
    const MARITAL_STATUS_DIVORCED = 323;

    /**
     * Marital status "empty".
     *
     * @var int
     */
    const MARITAL_STATUS_EMPTY = -1;

    /**
     * Marital status "married".
     *
     * @var int
     */
    const MARITAL_STATUS_MARRIED = 244;

    /**
     * Marital status "pacs".
     *
     * @var int
     */
    const MARITAL_STATUS_PACS = 103;

    /**
     * Marital status "single".
     *
     * @var int
     */
    const MARITAL_STATUS_SINGLE = 197;

    /**
     * Marital status "widower".
     *
     * @var int
     */
    const MARITAL_STATUS_WIDOWER = 384;
}
