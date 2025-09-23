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
 * String request trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringRequestTrait {

    /**
     * Request.
     *
     * @var string|null
     */
    protected $request;

    /**
     * Get the request.
     *
     * @return string|null Returns the request.
     */
    public function getRequest(): ?string {
        return $this->request;
    }

    /**
     * Set the request.
     *
     * @param string|null $request The request.
     * @return self Returns this instance.
     */
    public function setRequest(?string $request): self {
        $this->request = $request;
        return $this;
    }
}
