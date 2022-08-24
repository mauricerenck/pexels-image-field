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

use DateTime;
use WBW\Library\Billing\Serializer\JsonSerializer;

/**
 * Quotation.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
class Quotation extends Billable implements QuotationInterface {

    /**
     * Expiration date.
     *
     * @var DateTime|null
     */
    protected $expirationDate;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function getExpirationDate(): ?DateTime {
        return $this->expirationDate;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeQuotation($this);
    }

    /**
     * {@inheritdoc}
     */
    public function setExpirationDate(?DateTime $expirationDate): QuotationInterface {
        $this->expirationDate = $expirationDate;
        return $this;
    }
}
