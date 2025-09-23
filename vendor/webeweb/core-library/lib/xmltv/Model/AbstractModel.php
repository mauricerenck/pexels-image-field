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

namespace WBW\Library\XmlTv\Model;

use JsonSerializable;
use WBW\Library\Common\Serializer\XmlSerializable;

/**
 * Abstract model.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 * @abstract
 */
abstract class AbstractModel implements JsonSerializable, XmlSerializable {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}
