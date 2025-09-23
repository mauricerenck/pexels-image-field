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

use WBW\Library\XmlTv\Model\Icon;

/**
 * Array icons trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayIconsTrait {

    /**
     * Icons.
     *
     * @var Icon[]
     */
    protected $icons;

    /**
     * Add an icon.
     *
     * @param Icon $icon The icon.
     * @return self Returns this instance.
     */
    public function addIcon(Icon $icon): self {
        $this->icons[] = $icon;
        return $this;
    }

    /**
     * Get the icons.
     *
     * @return Icon[] Returns the icons.
     */
    public function getIcons(): array {
        return $this->icons;
    }

    /**
     * Get the number of icons.
     *
     * @return int Returns the number of icons.
     */
    public function getNumberIcons(): int {
        return count($this->getIcons());
    }

    /**
     * Determine if this instance has icons.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasIcons(): bool {
        return 1 <= $this->getNumberIcons();
    }

    /**
     * Set the icons.
     *
     * @param Icon[] $icons The icons.
     * @return self Returns this instance.
     */
    protected function setIcons(array $icons): self {
        $this->icons = $icons;
        return $this;
    }
}
