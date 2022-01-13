<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Model;

use WBW\Library\Bill\Serializer\JsonSerializer;

/**
 * Sales bill.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Model
 */
class SalesBill extends Billable implements SalesBillInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeSalesBill($this);
    }
}