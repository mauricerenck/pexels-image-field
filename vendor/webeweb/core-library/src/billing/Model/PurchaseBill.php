<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Model;

use WBW\Library\Billing\Serializer\JsonSerializer;
use WBW\Library\Traits\DateTimes\DateTimePaymentDateTrait;

/**
 * Purchase bill.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
class PurchaseBill extends Billable implements PurchaseBillInterface {

    use DateTimePaymentDateTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializePurchaseBill($this);
    }
}
