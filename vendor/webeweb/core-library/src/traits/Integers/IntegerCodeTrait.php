<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Integers;

/**
 * Integer code trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerCodeTrait {

    /**
     * Code.
     *
     * @var int|null
     */
    protected $code;

    /**
     * Get the code.
     *
     * @return int|null Returns the code.
     */
    public function getCode(): ?int {
        return $this->code;
    }

    /**
     * Set the code.
     *
     * @param int|null $code The code.
     * @return self Returns this instance.
     */
    public function setCode(?int $code): self {
        $this->code = $code;
        return $this;
    }
}
