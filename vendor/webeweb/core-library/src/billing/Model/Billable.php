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

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use WBW\Library\Billing\Helper\BillableHelper;
use WBW\Library\Billing\Serializer\JsonSerializer;
use WBW\Library\Traits\DateTimes\DateTimeCreatedAtTrait;
use WBW\Library\Traits\DateTimes\DateTimeDateTrait;
use WBW\Library\Traits\DateTimes\DateTimeUpdatedAtTrait;
use WBW\Library\Traits\Floats\FloatDiscountRateTrait;
use WBW\Library\Traits\Floats\FloatDiscountTotalTrait;
use WBW\Library\Traits\Floats\FloatExcludingVatTotalTrait;
use WBW\Library\Traits\Floats\FloatIncludingVatTotalTrait;
use WBW\Library\Traits\Floats\FloatVatTotalTrait;
use WBW\Library\Traits\Strings\StringCommentTrait;
use WBW\Library\Traits\Strings\StringNumberTrait;
use WBW\Library\Traits\Strings\StringReferenceTrait;

/**
 * Billable.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
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
     * @var Collection
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
        $this->setDetails(new ArrayCollection());
    }

    /**
     * {@inheritdoc}
     */
    public function addDetail(BillableDetailInterface $detail): BillableInterface {
        $this->details->add($detail);
        $detail->setBillable($this);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDetails(): array {
        return $this->details->toArray();
    }

    /**
     * {@inheritdoc}
     */
    public function getParent(): ?BillableInterface {
        return $this->parent;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeBillable($this);
    }

    /**
     * {@inheritdoc}
     */
    public function onSubmit(): void {

        $this->setDiscountTotal(BillableHelper::calcDiscountTotal($this));
        $this->setExcludingVatTotal(BillableHelper::calcExcludingVatTotal($this));
        $this->setIncludingVatTotal(BillableHelper::calcIncludingVatTotal($this));
        $this->setVatTotal(BillableHelper::calcVatTotal($this));
    }

    /**
     * {@inheritdoc}
     */
    public function removeDetail(BillableDetailInterface $detail): BillableInterface {
        $this->details->removeElement($detail);
        $detail->setBillable(null);
        return $this;
    }

    /**
     * Set the details.
     *
     * @param Collection $details The details.
     * @return BillableInterface Returns this billable.
     */
    protected function setDetails(Collection $details): BillableInterface {
        $this->details = $details;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setParent(?BillableInterface $parent): BillableInterface {
        $this->parent = $parent;
        return $this;
    }
}
