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
 * String filename trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringFilenameTrait {

    /**
     * Filename.
     *
     * @var string|null
     */
    protected $filename;

    /**
     * Get the filename.
     *
     * @return string|null Returns the filename.
     */
    public function getFilename(): ?string {
        return $this->filename;
    }

    /**
     * Set the filename.
     *
     * @param string|null $filename The filename.
     * @return self Returns this instance.
     */
    public function setFilename(?string $filename): self {
        $this->filename = $filename;
        return $this;
    }
}
