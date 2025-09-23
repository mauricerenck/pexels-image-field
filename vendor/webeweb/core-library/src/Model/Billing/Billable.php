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

use WBW\Library\Common\Helper\Billing\BillableHelper;
use WBW\Library\Common\Serializer\Billing\JsonSerializer;
use WBW\Library\Common\Traits\DateTimes\DateTimeCreatedAtTrait;
use WBW\Library\Common\Traits\DateTimes\DateTimeDateTrait;
use WBW\Library\Common\Traits\DateTimes\DateTimeUpdatedAtTrait;
use WBW\Library\Common\Traits\Floats\FloatDiscountRateTrait;
use WBW\Library\Common\Traits\Floats\FloatDiscountTotalTrait;
use WBW\Library\Common\Traits\Floats\FloatExcludingVatTotalTrait;
use WBW\Library\Common\Traits\Floats\FloatIncludingVatTotalTrait;
use WBW\Library\Common\Traits\Floats\FloatVatTotalTrait;
use WBW\Library\Common\Traits\Strings\StringCommentTrait;
use WBW\Library\Common\Traits\Strings\StringNumberTrait;
use WBW\Library\Common\Traits\Strings\StringReferenceTrait;

/**
 * Billable.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Billing
 * @abstract
 */
abstract class Billable implements BillableInterface {

    use DateTimeCreatedAtTrait;
    use DateTimeDateTrait;
    use DateTimeUpdatedAtTrait;
    use FloatDiscountRateTrait;
    use FloatDiscountTotalTrait;
    use FloatExcludingVatTotalTrait;
    use FloatIncludingVatTotalTrait;
    use FloatVatTotalTrait;
    use StringCommentTrait;
    use StringNumberTrait;
    use StringReferenceTrait;

    /**
     * Details.
     *
     * @var BillableDetailInterface[]|null
     */
    protected $details;

    /**
     * Parent.
     *
     * @var BillableInterface|null
     */
    protected $parent;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setDetails([]);
    }

    /**
     * {@inheritDoc}
     */
    public function addDetail(BillableDetailInterface $detail): BillableInterface {
        $this->details[] = $detail;
        $detail->setBillable($this);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getDetails(): array {
        return $this->details;
    }

    /**
     * {@inheritDoc}
     */
    public function getParent(): ?BillableInterface {
        return $this->parent;
    }

    /**
     * {@inheritDoc}
     */
    public function hasDetails(): bool {
        return BillableHelper::hasDetails($this);
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeBillable($this);
    }

    /**
     * {@inheritDoc}
     */
    public function onSubmit(): void {

        $this->setDiscountTotal(BillableHelper::calcDiscountTotal($this));
        $this->setExcludingVatTotal(BillableHelper::calcExcludingVatTotal($this));
        $this->setIncludingVatTotal(BillableHelper::calcIncludingVatTotal($this));
        $this->setVatTotal(BillableHelper::calcVatTotal($this));
    }

    /**
     * {@inheritDoc}
     */
    public function removeDetail(BillableDetailInterface $detail): BillableInterface {

        $pos = array_search($detail, $this->details, true);
        if (false !== $pos) {

            unset($this->details[$pos]);
            $detail->setBillable(null);
        }

        return $this;
    }

    /**
     * Set the details.
     *
     * @param BillableDetailInterface[] $details The details.
     * @return BillableInterface Returns this billable.
     */
    protected function setDetails(array $details): BillableInterface {
        $this->details = $details;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(?BillableInterface $parent): BillableInterface {
        $this->parent = $parent;
        return $this;
    }
}
