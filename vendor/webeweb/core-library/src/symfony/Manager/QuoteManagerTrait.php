<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Manager;

/**
 * Quote manager trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Manager
 */
trait QuoteManagerTrait {

    /**
     * Quote manager.
     *
     * @var QuoteManager|null
     */
    private $quoteManager;

    /**
     * Get the quote manager.
     *
     * @return QuoteManager|null Returns the quote manager.
     */
    public function getQuoteManager(): ?QuoteManager {
        return $this->quoteManager;
    }

    /**
     * Set the quote manager.
     *
     * @param QuoteManager|null $quoteManager The quote manager.
     * @return self Returns this instance.
     */
    protected function setQuoteManager(?QuoteManager $quoteManager): self {
        $this->quoteManager = $quoteManager;
        return $this;
    }
}
