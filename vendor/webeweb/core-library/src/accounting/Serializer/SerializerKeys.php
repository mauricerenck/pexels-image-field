<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Serializer;

/**
 * Serializer keys.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Serializer
 */
interface SerializerKeys {

    /**
     * Serializer key "account number".
     *
     * @var string
     */
    public const ACCOUNT_NUMBER = "accountNumber";

    /**
     * Serializer key "bank code".
     *
     * @var string
     */
    public const BANK_CODE = "bankCode";

    /**
     * Serializer key "bank domiciliation".
     *
     * @var string
     */
    public const BANK_DOMICILIATION = "bankDomiciliation";

    /**
     * Serializer key "bank name".
     *
     * @var string
     */
    public const BANK_NAME = "bankName";

    /**
     * Serializer key "BIC".
     *
     * @var string
     */
    public const BIC = "bic";

    /**
     * Serializer key "branch code".
     *
     * @var string
     */
    public const BRANCH_CODE = "branchCode";

    /**
     * Serializer key "IBAN".
     *
     * @var string
     */
    public const IBAN = "iban";

    /**
     * Serializer key "owner".
     *
     * @var string
     */
    public const OWNER = "owner";

    /**
     * Serializer key "purchases accounting account".
     *
     * @var string
     */
    public const PURCHASES_ACCOUNTING_ACCOUNT = "purchasesAccountingAccount";

    /**
     * Serializer key "RIB key".
     *
     * @var string
     */
    public const RIB_KEY = "ribKey";

    /**
     * Serializer key "sales accounting account".
     *
     * @var string
     */
    public const SALES_ACCOUNTING_ACCOUNT = "salesAccountingAccount";
}
