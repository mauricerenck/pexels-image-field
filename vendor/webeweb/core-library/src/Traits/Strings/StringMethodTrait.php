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

namespace WBW\Library\Common\Traits\Strings;

/**
 * String method trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringMethodTrait {

    /**
     * Method.
     *
     * @var string|null
     */
    protected $method;

    /**
     * Get the method.
     *
     * @return string|null Returns the method.
     */
    public function getMethod(): ?string {
        return $this->method;
    }

    /**
     * Set the method.
     *
     * @param string|null $method The method.
     * @return self Returns this instance.
     */
    public function setMethod(?string $method): self {
        $this->method = $method;
        return $this;
    }
}
