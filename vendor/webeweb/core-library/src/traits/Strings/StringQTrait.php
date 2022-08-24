<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String q trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringQTrait {

    /**
     * Q.
     *
     * @var string|null
     */
    protected $q;

    /**
     * Get the q.
     *
     * @return string|null Returns the q.
     */
    public function getQ(): ?string {
        return $this->q;
    }

    /**
     * Set the q.
     *
     * @param string|null $q The q.
     * @return self Returns this instance.
     */
    public function setQ(?string $q): self {
        $this->q = $q;
        return $this;
    }
}
