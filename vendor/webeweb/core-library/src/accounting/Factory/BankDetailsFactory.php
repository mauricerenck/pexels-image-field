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

use WBW\Library\Accounting\Model\BankDetailsInterface;

/**
 * Bank details factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Factory
 */
class BankDetailsFactory {

    /**
     * Copy.
     *
     * @param BankDetailsInterface $src The Bank details source.
     * @param BankDetailsInterface $dst The Bank details destination.
     * @return BankDetailsInterface Returns the Bank details destination.
     */
    public static function copy(BankDetailsInterface $src, BankDetailsInterface $dst): BankDetailsInterface {

        $dst->setAccountNumber($src->getAccountNumber());
        $dst->setBankCode($src->getBankCode());
        $dst->setBankDomiciliation($src->getBankDomiciliation());
        $dst->setBankName($src->getBankName());
        $dst->setBic($src->getBic());
        $dst->setBranchCode($src->getBranchCode());
        $dst->setIban($src->getIban());
        $dst->setOwner($src->getOwner());
        $dst->setRibKey($src->getRibKey());

        return $dst;
    }
}
