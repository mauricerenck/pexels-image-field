<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Response;

use WBW\Library\Pexels\Model\Attribute\IntegerTotalResultsTrait;
use WBW\Library\Pexels\Model\Attribute\StringNextPageTrait;
use WBW\Library\Pexels\Model\Attribute\StringPrevPageTrait;
use WBW\Library\Pexels\Model\Collection;
use WBW\Library\Traits\Integers\IntegerPageTrait;
use WBW\Library\Traits\Integers\IntegerPerPageTrait;

/**
 * Collections response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Response
 */
class CollectionsResponse extends AbstractResponse {

    use IntegerPageTrait;
    use IntegerPerPageTrait;
    use IntegerTotalResultsTrait;
    use StringNextPageTrait;
    use StringPrevPageTrait;

    /**
     * Collections.
     *
     * @var Collection[]
     */
    private $collections;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setCollections([]);
    }

    /**
     * Add a collection.
     *
     * @param Collection $collection The collection.
     * @return CollectionsResponse Returns this collections response.
     */
    public function addCollection(Collection $collection): CollectionsResponse {
        $this->collections[] = $collection;
        return $this;
    }

    /**
     * Get the collections.
     *
     * @return Collection[] Returns the collections.
     */
    public function getCollections(): array {
        return $this->collections;
    }

    /**
     * Set the collections.
     *
     * @param Collection[] $collections The collections.
     * @return CollectionsResponse Retrns this collections response.
     */
    protected function setCollections(array $collections): CollectionsResponse {
        $this->collections = $collections;
        return $this;
    }
}
