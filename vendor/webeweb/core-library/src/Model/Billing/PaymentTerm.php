<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Model\Billing;

use WBW\Library\Common\Serializer\Billing\JsonSerializer;
use WBW\Library\Common\Traits\Strings\StringCodeTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;

/**
 * Payment term.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Billing
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
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializePaymentTerm($this);
    }
}
