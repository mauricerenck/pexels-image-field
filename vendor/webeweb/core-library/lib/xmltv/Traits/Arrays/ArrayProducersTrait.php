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

use WBW\Library\XmlTv\Model\Producer;

/**
 * Array producers trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayProducersTrait {

    /**
     * Producers.
     *
     * @var Producer[]
     */
    protected $producers;

    /**
     * Add a producer.
     *
     * @param Producer $producer The producer.
     * @return self Returns this instance.
     */
    public function addProducer(Producer $producer): self {
        $this->producers[] = $producer;
        return $this;
    }

    /**
     * Get the number of producers.
     *
     * @return int Returns the number of producers.
     */
    public function getNumberProducers(): int {
        return count($this->getProducers());
    }

    /**
     * Get the producers.
     *
     * @return Producer[] Returns the producers.
     */
    public function getProducers(): array {
        return $this->producers;
    }

    /**
     * Determine if this instance has producers.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasProducers(): bool {
        return 1 <= $this->getNumberProducers();
    }

    /**
     * Set the producers.
     *
     * @param Producer[] $producers The producers.
     * @return self Returns this instance.
     */
    protected function setProducers(array $producers): self {
        $this->producers = $producers;
        return $this;
    }
}
