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
use WBW\Library\Traits\Strings\StringLabelTrait;
use WBW\Library\Traits\Strings\StringNumberTrait;
use WBW\Library\Traits\Strings\StringTypeTrait;

/**
 * Accounting account.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Model
 */
class AccountingAccount implements AccountingAccountInterface {

    use StringLabelTrait;
    use StringNumberTrait;
    use StringTypeTrait;

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
        return JsonSerializer::serializeAccountingAccount($this);
    }
}
