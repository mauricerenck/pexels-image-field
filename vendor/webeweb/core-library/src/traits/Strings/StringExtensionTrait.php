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
 * String extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringExtensionTrait {

    /**
     * Extension.
     *
     * @var string|null
     */
    protected $extension;

    /**
     * Get the extension.
     *
     * @return string|null Returns the extension.
     */
    public function getExtension(): ?string {
        return $this->extension;
    }

    /**
     * Set the extension.
     *
     * @param string|null $extension The extension.
     * @return self Returns this instance.
     */
    public function setExtension(?string $extension): self {
        $this->extension = $extension;
        return $this;
    }
}
