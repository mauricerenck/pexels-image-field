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

use WBW\Library\Common\Helper\Billing\BillableDetailHelper;
use WBW\Library\Common\Serializer\Billing\JsonSerializer;
use WBW\Library\Common\Traits\Floats\FloatDiscountTotalTrait;
use WBW\Library\Common\Traits\Floats\FloatExcludingVatTotalTrait;
use WBW\Library\Common\Traits\Floats\FloatIncludingVatTotalTrait;
use WBW\Library\Common\Traits\Floats\FloatQuantityTrait;
use WBW\Library\Common\Traits\Floats\FloatVatTotalTrait;
use WBW\Library\Common\Traits\Strings\StringCommentTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;
use WBW\Library\Common\Traits\Strings\StringReferenceTrait;

/**
 * Billable detail.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Billing
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
     * {@inheritDoc}
     */
    public function getBillable(): ?BillableInterface {
        return $this->billable;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeBillableDetail($this);
    }

    /**
     * {@inheritDoc}
     */
    public function onSubmit(): void {
        parent::onSubmit();

        $this->setDiscountTotal(BillableDetailHelper::calcDiscountTotal($this));
        $this->setExcludingVatTotal(BillableDetailHelper::calcExcludingVatTotal($this));
        $this->setIncludingVatTotal(BillableDetailHelper::calcIncludingVatTotal($this));
        $this->setVatTotal(BillableDetailHelper::calcVatTotal($this));
    }

    /**
     * {@inheritDoc}
     */
    public function setBillable(?BillableInterface $billable): BillableDetailInterface {
        $this->billable = $billable;
        return $this;
    }
}
