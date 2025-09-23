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

use WBW\Library\XmlTv\Model\Actor;

/**
 * Array actors trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayActorsTrait {

    /**
     * Actors.
     *
     * @var Actor[]
     */
    protected $actors;

    /**
     * Add an actor.
     *
     * @param Actor $actor The actor.
     * @return self Returns this instance.
     */
    public function addActor(Actor $actor): self {
        $this->actors[] = $actor;
        return $this;
    }

    /**
     * Get the actors.
     *
     * @return Actor[] Returns the actors.
     */
    public function getActors(): array {
        return $this->actors;
    }

    /**
     * Get the number of actors.
     *
     * @return int Returns the number of actors.
     */
    public function getNumberActors(): int {
        return count($this->getActors());
    }

    /**
     * Determine if this instance has actors.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasActors(): bool {
        return 1 <= $this->getNumberActors();
    }

    /**
     * Set the actors.
     *
     * @param Actor[] $actors The actors.
     * @return self Returns this instance.
     */
    protected function setActors(array $actors): self {
        $this->actors = $actors;
        return $this;
    }
}
