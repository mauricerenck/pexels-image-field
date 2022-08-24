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

use WBW\Library\Billing\Helper\TaxableHelper;
use WBW\Library\Billing\Serializer\JsonSerializer;
use WBW\Library\Traits\Floats\FloatDiscountAmountTrait;
use WBW\Library\Traits\Floats\FloatDiscountRateTrait;
use WBW\Library\Traits\Floats\FloatExcludingVatPriceTrait;
use WBW\Library\Traits\Floats\FloatIncludingVatPriceTrait;
use WBW\Library\Traits\Floats\FloatVatAmountTrait;
use WBW\Library\Traits\Floats\FloatVatRateTrait;

/**
 * Taxable.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
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
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeTaxable($this);
    }

    /**
     * {@inheritdoc}
     */
    public function onSubmit(): void {

        $this->setDiscountAmount(TaxableHelper::calcDiscountAmount($this));
        $this->setIncludingVatPrice(TaxableHelper::calcIncludingVatPrice($this));
        $this->setVatAmount(TaxableHelper::calcVatAmount($this));
    }
}
