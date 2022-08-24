<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String to trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringToTrait {

    /**
     * To.
     *
     * @var string|null
     */
    protected $to;

    /**
     * Get the to.
     *
     * @return string|null Returns the to.
     */
    public function getTo(): ?string {
        return $this->to;
    }

    /**
     * Set the to.
     *
     * @param string|null $to The to.
     * @return self Returns this instance.
     */
    public function setTo(?string $to): self {
        $this->to = $to;
        return $this;
    }
}
