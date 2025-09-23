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

use WBW\Library\Common\Helper\Billing\TaxableHelper;
use WBW\Library\Common\Serializer\Billing\JsonSerializer;
use WBW\Library\Common\Traits\Floats\FloatDiscountAmountTrait;
use WBW\Library\Common\Traits\Floats\FloatDiscountRateTrait;
use WBW\Library\Common\Traits\Floats\FloatExcludingVatPriceTrait;
use WBW\Library\Common\Traits\Floats\FloatIncludingVatPriceTrait;
use WBW\Library\Common\Traits\Floats\FloatVatAmountTrait;
use WBW\Library\Common\Traits\Floats\FloatVatRateTrait;

/**
 * Taxable.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Billing
 * @abstract
 */
abstract class Taxable implements TaxableInterface {

    use FloatExcludingVatPriceTrait;
    use FloatIncludingVatPriceTrait;
    use FloatDiscountAmountTrait;
    use FloatDiscountRateTrait;
    use FloatVatAmountTrait;
    use FloatVatRateTrait;

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
        return JsonSerializer::serializeTaxable($this);
    }

    /**
     * {@inheritDoc}
     */
    public function onSubmit(): void {

        $this->setDiscountAmount(TaxableHelper::calcDiscountAmount($this));
        $this->setIncludingVatPrice(TaxableHelper::calcIncludingVatPrice($this));
        $this->setVatAmount(TaxableHelper::calcVatAmount($this));
    }
}
