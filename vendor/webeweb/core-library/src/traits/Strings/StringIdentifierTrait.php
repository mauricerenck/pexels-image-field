<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Strings;

/**
 * String identifier trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringIdentifierTrait {

    /**
     * Identifier.
     *
     * @var string|null
     */
    protected $identifier;

    /**
     * Get the identifier.
     *
     * @return string|null Returns the identifier.
     */
    public function getIdentifier(): ?string {
        return $this->identifier;
    }

    /**
     * Set the identifier.
     *
     * @param string|null $identifier The identifier.
     * @return self Returns this instance.
     */
    public function setIdentifier(?string $identifier): self {
        $this->identifier = $identifier;
        return $this;
    }
}
