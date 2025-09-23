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
 * String ext id trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait StringExtIdTrait {

    /**
     * Ext id.
     *
     * @var string|null
     */
    protected $extId;

    /**
     * Get the ext id.
     *
     * @return string|null Returns the ext id.
     */
    public function getExtId(): ?string {
        return $this->extId;
    }

    /**
     * Set the ext id.
     *
     * @param string|null $extId The ext id.
     * @return self Returns this instance.
     */
    public function setExtId(?string $extId): self {
        $this->extId = $extId;
        return $this;
    }
}
