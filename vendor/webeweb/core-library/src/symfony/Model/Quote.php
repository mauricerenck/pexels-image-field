<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

use WBW\Library\Traits\DateTimes\DateTimeDateTrait;
use WBW\Library\Traits\Strings\StringContentTrait;

/**
 * Quote.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
class Quote implements QuoteInterface {

    use DateTimeDateTrait;
    use StringContentTrait;

    /**
     * Author.
     *
     * @var string
     */
    private $author;

    /**
     * Saint.
     *
     * @var string|null
     */
    private $saint;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthor(): ?string {
        return $this->author;
    }

    /**
     * {@inheritdoc}
     */
    public function getSaint(): ?string {
        return $this->saint;
    }

    /**
     * Set the author.
     *
     * @param string $author The author.
     * @return Quote Returns this quote.
     */
    public function setAuthor(string $author): QuoteInterface {
        $this->author = $author;
        return $this;
    }

    /**
     * Set the saint.
     *
     * @param string $saint The saint.
     * @return Quote Returns this quote.
     */
    public function setSaint(string $saint): QuoteInterface {
        $this->saint = $saint;
        return $this;
    }
}
