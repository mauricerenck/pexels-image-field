<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Traits\Arrays;

use WBW\Library\XmlTv\Model\Keyword;

/**
 * Array keywords trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayKeywordsTrait {

    /**
     * Keywords.
     *
     * @var Keyword[]
     */
    protected $keywords;

    /**
     * Add a keyword.
     *
     * @param Keyword $keyword The keyword.
     * @return self Returns this instance.
     */
    public function addKeyword(Keyword $keyword): self {
        $this->keywords[] = $keyword;
        return $this;
    }

    /**
     * Get the keywords.
     *
     * @return Keyword[] Returns the keywords.
     */
    public function getKeywords(): array {
        return $this->keywords;
    }

    /**
     * Get the number of keywords.
     *
     * @return int Returns the number of keywords.
     */
    public function getNumberKeywords(): int {
        return count($this->getKeywords());
    }

    /**
     * Determine if this instance has keywords.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasKeywords(): bool {
        return 1 <= $this->getNumberKeywords();
    }

    /**
     * Set the keywords.
     *
     * @param Keyword[] $keywords The keywords.
     * @return self Returns this instance.
     */
    protected function setKeywords(array $keywords): self {
        $this->keywords = $keywords;
        return $this;
    }
}
