<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Model\Attribute;

/**
 * Integer total results trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Model\Attribute
 */
trait IntegerTotalResultsTrait {

    /**
     * Total results.
     *
     * @var int|null
     */
    private $totalResults;

    /**
     * Get the total results.
     *
     * @return int|null Returns the total results.
     */
    public function getTotalResults(): ?int {
        return $this->totalResults;
    }

    /**
     * Set the total results.
     *
     * @param int|null $totalResults The total result.
     * @return self Returns this instance.
     */
    public function setTotalResults(?int $totalResults): self {
        $this->totalResults = $totalResults;
        return $this;
    }
}
