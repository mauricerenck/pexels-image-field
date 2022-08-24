<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider;

use WBW\Library\Symfony\Model\QuoteInterface;

/**
 * Abstract quote provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider
 * @abstract
 */
abstract class AbstractQuoteProvider implements QuoteProviderInterface {

    /**
     * Quotes.
     *
     * @var QuoteInterface[]
     */
    protected $quotes;

    /**
     * Constructor.
     */
    protected function __construct() {
        $this->setQuotes([]);
    }

    /**
     *{@inheritdoc}
     */
    public function getAuthors(): array {

        $authors = [];

        foreach ($this->quotes as $current) {

            if (false === in_array($current->getAuthor(), $authors)) {
                $authors[] = $current->getAuthor();
            }
        }

        asort($authors);

        return $authors;
    }

    /**
     * {@onheritDoc}
     */
    public function getQuotes(): array {
        return $this->quotes;
    }

    /**
     * Set the quotes.
     *
     * @param QuoteInterface[] $quotes The quotes.
     * @return QuoteProviderInterface Returns this quote provider.
     */
    protected function setQuotes(array $quotes): QuoteProviderInterface {
        $this->quotes = $quotes;
        return $this;
    }
}
