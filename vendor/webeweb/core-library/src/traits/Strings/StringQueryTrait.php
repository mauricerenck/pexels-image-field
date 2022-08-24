<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String query trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringQueryTrait {

    /**
     * Query.
     *
     * @var string|null
     */
    protected $query;

    /**
     * Get the query.
     *
     * @return string|null Returns the query.
     */
    public function getQuery(): ?string {
        return $this->query;
    }

    /**
     * Set the query.
     *
     * @param string|null $query The query.
     * @return self Returns this instance.
     */
    public function setQuery(?string $query): self {
        $this->query = $query;
        return $this;
    }
}
