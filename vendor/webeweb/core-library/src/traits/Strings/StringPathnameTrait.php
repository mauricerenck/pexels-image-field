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

namespace WBW\Library\Common\Traits\Strings;

/**
 * String pathname trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringPathnameTrait {

    /**
     * Pathname.
     *
     * @var string|null
     */
    protected $pathname;

    /**
     * Get the pathname.
     *
     * @return string|null Returns the pathname.
     */
    public function getPathname(): ?string {
        return $this->pathname;
    }

    /**
     * Set the pathname.
     *
     * @param string|null $pathname The pathname.
     * @return self Returns this instance.
     */
    public function setPathname(?string $pathname): self {
        $this->pathname = $pathname;
        return $this;
    }
}
