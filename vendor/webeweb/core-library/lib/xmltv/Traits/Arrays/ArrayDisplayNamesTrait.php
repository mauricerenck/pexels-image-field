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

namespace WBW\Library\XmlTv\Traits\Arrays;

use WBW\Library\XmlTv\Model\DisplayName;

/**
 * Array display names trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayDisplayNamesTrait {

    /**
     * Display name.
     *
     * @var DisplayName[]
     */
    protected $displayNames;

    /**
     * Add a display name.
     *
     * @param DisplayName $displayName The display name.
     * @return self Returns this instance.
     */
    public function addDisplayName(DisplayName $displayName): self {
        $this->displayNames[] = $displayName;
        return $this;
    }

    /**
     * Get the display names.
     *
     * @return DisplayName[] Returns the display names.
     */
    public function getDisplayNames(): array {
        return $this->displayNames;
    }

    /**
     * Get the number of display names.
     *
     * @return int Returns the number of display names.
     */
    public function getNumberDisplayNames(): int {
        return count($this->getDisplayNames());
    }

    /**
     * Determine if this channel has display names.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasDisplayNames(): bool {
        return 1 <= $this->getNumberDisplayNames();
    }

    /**
     * Set the display names.
     *
     * @param DisplayName[] $displayNames The display names.
     * @return self Returns this instance.
     */
    protected function setDisplayNames(array $displayNames): self {
        $this->displayNames = $displayNames;
        return $this;
    }
}
