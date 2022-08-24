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

use WBW\Library\Accounting\Model\AccountingAccountInterface;

/**
 * Accounting account factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Factory
 */
class AccountingAccountFactory {

    /**
     * Copy.
     *
     * @param AccountingAccountInterface $src The accounting account source.
     * @param AccountingAccountInterface $dst The accounting account destination.
     * @return AccountingAccountInterface Returns the accounting account destination.
     */
    public static function copy(AccountingAccountInterface $src, AccountingAccountInterface $dst): AccountingAccountInterface {

        $dst->setLabel($src->getLabel());
        $dst->setNumber($src->getNumber());
        $dst->setType($src->getType());

        return $dst;
    }
}
