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
 * String code internal trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait StringCodeInternalTrait {

    /**
     * Code internal.
     *
     * @var string|null
     */
    protected $codeInternal;

    /**
     * Get the code internal.
     *
     * @return string|null Returns the code internal.
     */
    public function getCodeInternal(): ?string {
        return $this->codeInternal;
    }

    /**
     * Set the code internal.
     *
     * @param string|null $codeInternal The code internal.
     * @return self Returns this instance.
     */
    public function setCodeInternal(?string $codeInternal): self {
        $this->codeInternal = $codeInternal;
        return $this;
    }
}
