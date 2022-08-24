<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Model;

use WBW\Library\Accounting\Serializer\JsonSerializer;
use WBW\Library\Traits\Strings\StringCodeTrait;
use WBW\Library\Traits\Strings\StringLabelTrait;

/**
 * Payment term.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Model
 */
class PaymentTerm implements PaymentTermInterface {

    use StringCodeTrait;
    use StringLabelTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializePaymentTerm($this);
    }
}
