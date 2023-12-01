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
 * String route trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringRouteTrait {

    /**
     * Route.
     *
     * @var string|null
     */
    protected $route;

    /**
     * Get the route.
     *
     * @return string|null Returns the route.
     */
    public function getRoute(): ?string {
        return $this->route;
    }

    /**
     * Set the route.
     *
     * @param string|null $route The route.
     * @return self Returns this instance.
     */
    public function setRoute(?string $route): self {
        $this->route = $route;
        return $this;
    }
}
