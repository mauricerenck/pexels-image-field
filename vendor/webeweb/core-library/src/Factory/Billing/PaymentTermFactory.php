<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Factory\Billing;

use WBW\Library\Common\Model\Billing\PaymentTermInterface;

/**
 * Payment term factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Factory\Billing
 */
class PaymentTermFactory {

    /**
     * Copy.
     *
     * @param PaymentTermInterface $src The payment term source.
     * @param PaymentTermInterface $dst The payment term destination.
     * @return PaymentTermInterface Returns the payment term destination.
     */
    public static function copy(PaymentTermInterface $src, PaymentTermInterface $dst): PaymentTermInterface {

        $dst->setCode($src->getCode());
        $dst->setLabel($src->getLabel());

        return $dst;
    }
}
