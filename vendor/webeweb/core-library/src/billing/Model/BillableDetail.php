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

use WBW\Library\Billing\Helper\BillableDetailHelper;
use WBW\Library\Billing\Serializer\JsonSerializer;
use WBW\Library\Traits\Floats\FloatDiscountTotalTrait;
use WBW\Library\Traits\Floats\FloatExcludingVatTotalTrait;
use WBW\Library\Traits\Floats\FloatIncludingVatTotalTrait;
use WBW\Library\Traits\Floats\FloatQuantityTrait;
use WBW\Library\Traits\Floats\FloatVatTotalTrait;
use WBW\Library\Traits\Strings\StringCommentTrait;
use WBW\Library\Traits\Strings\StringLabelTrait;
use WBW\Library\Traits\Strings\StringReferenceTrait;

/**
 * Billable detail.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 * @abstract
 */
abstract class BillableDetail extends Taxable implements BillableDetailInterface {

    use FloatDiscountTotalTrait;
    use FloatExcludingVatTotalTrait;
    use FloatIncludingVatTotalTrait;
    use FloatQuantityTrait;
    use FloatVatTotalTrait;
    use StringCommentTrait;
    use StringLabelTrait;
    use StringReferenceTrait;

    /**
     * Billable.
     *
     * @var BillableInterface|null
     */
    protected $billable;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function getBillable(): ?BillableInterface {
        return $this->billable;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeBillableDetail($this);
    }

    /**
     * {@inheritdoc}
     */
    public function onSubmit(): void {
        parent::onSubmit();

        $this->setDiscountTotal(BillableDetailHelper::calcDiscountTotal($this));
        $this->setExcludingVatTotal(BillableDetailHelper::calcExcludingVatTotal($this));
        $this->setIncludingVatTotal(BillableDetailHelper::calcIncludingVatTotal($this));
        $this->setVatTotal(BillableDetailHelper::calcVatTotal($this));
    }

    /**
     * {@inheritdoc}
     */
    public function setBillable(?BillableInterface $billable): BillableDetailInterface {
        $this->billable = $billable;
        return $this;
    }
}
