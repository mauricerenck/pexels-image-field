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
 * String code trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringCodeTrait {

    /**
     * Code.
     *
     * @var string|null
     */
    protected $code;

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return self Returns this instance.
     */
    public function setCode(?string $code): self {
        $this->code = $code;
        return $this;
    }
}
