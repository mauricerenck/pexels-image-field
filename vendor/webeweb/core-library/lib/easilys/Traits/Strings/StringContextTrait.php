<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Traits\Strings;

/**
 * String context trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait StringContextTrait {

    /**
     * Context.
     *
     * @var string|null
     */
    protected $context;

    /**
     * Get the context.
     *
     * @return string|null Returns the context.
     */
    public function getContext(): ?string {
        return $this->context;
    }

    /**
     * Set the context.
     *
     * @param string|null $context The context.
     * @return self Returns this instance.
     */
    public function setContext(?string $context): self {
        $this->context = $context;
        return $this;
    }
}
