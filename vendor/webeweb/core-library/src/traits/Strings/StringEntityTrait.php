<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String entity trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringEntityTrait {

    /**
     * Entity.
     *
     * @var string|null
     */
    protected $entity;

    /**
     * Get the entity.
     *
     * @return string|null Returns the entity.
     */
    public function getEntity(): ?string {
        return $this->entity;
    }

    /**
     * Set the entity.
     *
     * @param string|null $entity The entity.
     * @return self Returns this instance.
     */
    public function setEntity(?string $entity): self {
        $this->entity = $entity;
        return $this;
    }
}
