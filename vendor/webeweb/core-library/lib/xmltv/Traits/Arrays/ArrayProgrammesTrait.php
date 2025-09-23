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

use WBW\Library\XmlTv\Model\Programme;

/**
 * Array programmes trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayProgrammesTrait {

    /**
     * Programmes.
     *
     * @var Programme[]
     */
    protected $programmes;

    /**
     * Add a programme.
     *
     * @param Programme $programme The programme.
     * @return self Returns this instance.
     */
    public function addProgramme(Programme $programme): self {
        $this->programmes[] = $programme;
        return $this;
    }

    /**
     * Get the number of programmes.
     *
     * @return int Returns the number of programmes.
     */
    public function getNumberProgrammes(): int {
        return count($this->getProgrammes());
    }

    /**
     * Get the programmes.
     *
     * @return Programme[] Returns the programmes.
     */
    public function getProgrammes(): array {
        return $this->programmes;
    }

    /**
     * Determine if this instance has programmes.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasProgrammes(): bool {
        return 1 <= $this->getNumberProgrammes();
    }

    /**
     * Set the programmes.
     *
     * @param Programme[] $programmes The programmes.
     * @return self Returns this instance.
     */
    protected function setProgrammes(array $programmes): self {
        $this->programmes = $programmes;
        return $this;
    }

    /**
     * Sort the programmes.
     *
     * @return self Returns this instance.
     */
    public function sortProgrammes(): self {
        usort($this->programmes, function(Programme $a, Programme $b) {
            return strcmp($a->getStart(), $b->getStart());
        });
        return $this;
    }
}
