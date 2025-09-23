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
use WBW\Library\Common\Traits\Floats\FloatRateTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;

/**
 * VAT rate.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Billing
 */
class VatRate implements VatRateInterface {

    use FloatRateTrait;
    use StringLabelTrait;

    /**
     * Purchases accounting account.
     *
     * @var AccountingAccountInterface|null
     */
    protected $purchasesAccountingAccount;

    /**
     * Sales accounting account.
     *
     * @var AccountingAccountInterface|null
     */
    protected $salesAccountingAccount;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getPurchasesAccountingAccount(): ?AccountingAccountInterface {
        return $this->purchasesAccountingAccount;
    }

    /**
     * {@inheritDoc}
     */
    public function getSalesAccountingAccount(): ?AccountingAccountInterface {
        return $this->salesAccountingAccount;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeVatRate($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setPurchasesAccountingAccount(?AccountingAccountInterface $purchasesAccountingAccount): VatRateInterface {
        $this->purchasesAccountingAccount = $purchasesAccountingAccount;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSalesAccountingAccount(?AccountingAccountInterface $salesAccountingAccount): VatRateInterface {
        $this->salesAccountingAccount = $salesAccountingAccount;
        return $this;
    }
}
