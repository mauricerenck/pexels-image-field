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

use WBW\Library\XmlTv\Model\Writer;

/**
 * Array writers trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayWritersTrait {

    /**
     * Writers.
     *
     * @var Writer[]
     */
    protected $writers;

    /**
     * Add a writer.
     *
     * @param Writer $writer The writer.
     * @return self Returns this instance.
     */
    public function addWriter(Writer $writer): self {
        $this->writers[] = $writer;
        return $this;
    }

    /**
     * Get the number of writers.
     *
     * @return int Returns the number of writers.
     */
    public function getNumberWriters(): int {
        return count($this->getWriters());
    }

    /**
     * Get the writers.
     *
     * @return Writer[] Returns the writers.
     */
    public function getWriters(): array {
        return $this->writers;
    }

    /**
     * Determine if this instance has writers.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasWriters(): bool {
        return 1 <= $this->getNumberWriters();
    }

    /**
     * Set the writers.
     *
     * @param Writer[] $writers The writers.
     * @return self Returns this instance.
     */
    protected function setWriters(array $writers): self {
        $this->writers = $writers;
        return $this;
    }
}
