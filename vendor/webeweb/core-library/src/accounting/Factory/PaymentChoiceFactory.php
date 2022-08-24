<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Factory;

use WBW\Library\Accounting\Model\PaymentChoiceInterface;

/**
 * Payment choice factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Factory
 */
class PaymentChoiceFactory {

    /**
     * Copy.
     *
     * @param PaymentChoiceInterface $src The payment choice source.
     * @param PaymentChoiceInterface $dst The payment choice destination.
     * @return PaymentChoiceInterface Returns the payment choice destination.
     */
    public static function copy(PaymentChoiceInterface $src, PaymentChoiceInterface $dst): PaymentChoiceInterface {

        $dst->setLabel($src->getLabel());

        return $dst;
    }
}
