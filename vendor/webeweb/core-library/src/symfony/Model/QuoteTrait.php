<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

/**
 * Quote trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
trait QuoteTrait {

    /**
     * Quote.
     *
     * @var QuoteInterface|null
     */
    protected $quote;

    /**
     * Get the quote.
     *
     * @return QuoteInterface|null Returns the quote.
     */
    public function getQuote(): ?QuoteInterface {
        return $this->quote;
    }

    /**
     * Set the quote.
     *
     * @param QuoteInterface|null $quote The quote.
     * @return self Returns this instance.
     */
    protected function setQuote(?QuoteInterface $quote): self {
        $this->quote = $quote;
        return $this;
    }
}
