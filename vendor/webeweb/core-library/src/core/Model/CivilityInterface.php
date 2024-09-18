<?php

declare(strict_types = 1);

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
 * Civility interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model
 */
interface CivilityInterface {

    /**
     * Civility "empty".
     *
     * @var int
     */
    public const CIVILITY_EMPTY = -1;

    /**
     * Civility "miss".
     *
     * @var int
     */
    public const CIVILITY_MISS = 164;

    /**
     * Civility "mister".
     *
     * @var int
     */
    public const CIVILITY_MISTER = 301;

    /**
     * Civility "mrs".
     *
     * @var int
     */
    public const CIVILITY_MRS = 106;
}
