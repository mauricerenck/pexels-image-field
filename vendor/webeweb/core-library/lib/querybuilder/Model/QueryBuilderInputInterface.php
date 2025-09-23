<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\QueryBuilder\Model;

/**
 * QueryBuilder input interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model
 */
interface QueryBuilderInputInterface {

    /**
     * Input "checkbox".
     *
     * @var string
     */
    public const INPUT_CHECKBOX = "checkbox";

    /**
     * Input "number".
     *
     * @var string
     */
    public const INPUT_NUMBER = "number";

    /**
     * Input "radio".
     *
     * @var string
     */
    public const INPUT_RADIO = "radio";

    /**
     * Input "select".
     *
     * @var string
     */
    public const INPUT_SELECT = "select";

    /**
     * Input "text".
     *
     * @var string
     */
    public const INPUT_TEXT = "text";

    /**
     * Input "textarea".
     *
     * @var string
     */
    public const INPUT_TEXTAREA = "textarea";
}
