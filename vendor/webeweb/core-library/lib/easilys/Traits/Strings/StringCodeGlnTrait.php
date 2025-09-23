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
 * String code GLN trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait StringCodeGlnTrait {

    /**
     * Code GLN.
     *
     * @var string|null
     */
    protected $codeGln;

    /**
     * Get the code GLN.
     *
     * @return string|null Returns the code GLN.
     */
    public function getCodeGln(): ?string {
        return $this->codeGln;
    }

    /**
     * Set the code GLN.
     *
     * @param string|null $codeGln The code GLN.
     * @return self Returns this instance.
     */
    public function setCodeGln(?string $codeGln): self {
        $this->codeGln = $codeGln;
        return $this;
    }
}
