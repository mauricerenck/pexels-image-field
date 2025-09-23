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

namespace WBW\Library\Common\Factory\Billing;

use WBW\Library\Common\Model\Billing\BillableInterface;

/**
 * Billable factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Factory\Billing
 */
class BillableFactory {

    /**
     * Copy.
     *
     * @param BillableInterface $src The billable source.
     * @param BillableInterface $dst The billable destination.
     * @return BillableInterface Returns the billable destination.
     */
    public static function copy(BillableInterface $src, BillableInterface $dst): BillableInterface {

        $dst->setComment($src->getComment());
        $dst->setCreatedAt(null !== $src->getCreatedAt() ? clone $src->getCreatedAt() : null);
        $dst->setDate($src->getDate());
        $dst->setDiscountRate($src->getDiscountRate());
        $dst->setDiscountTotal($src->getDiscountTotal());
        $dst->setExcludingVatTotal($src->getExcludingVatTotal());
        $dst->setIncludingVatTotal($src->getIncludingVatTotal());
        $dst->setNumber($src->getNumber());
        $dst->setParent($src->getParent());
        $dst->setReference($src->getReference());
        $dst->setUpdatedAt(null !== $src->getUpdatedAt() ? clone $src->getUpdatedAt() : null);
        $dst->setVatTotal($src->getVatTotal());

        foreach ($src->getDetails() as $current) {
            $dst->addDetail(BillableDetailFactory::copy($current, new $current()));
        }

        return $dst;
    }
}
