<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Component;

/**
 * Color trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component
 */
trait ColorTrait {

    /**
     * Color.
     *
     * @var ColorInterface|null
     */
    protected $color;

    /**
     * Get the color.
     *
     * @return ColorInterface|null Returns the color.
     */
    public function getColor(): ?ColorInterface {
        return $this->color;
    }

    /**
     * Set the color.
     *
     * @param ColorInterface|null $color The color.
     * @return self Returns this instance.
     */
    protected function setColor(?ColorInterface $color): self {
        $this->color = $color;
        return $this;
    }
}
