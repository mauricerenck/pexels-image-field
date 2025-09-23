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

namespace WBW\Library\Widget\Component\Color;

/**
 * Orange color trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Color
 */
trait OrangeColorTrait {

    /**
     * Orange color.
     *
     * @var OrangeColorInterface|null
     */
    private $orangeColor;

    /**
     * Get the orange color.
     *
     * @return OrangeColorInterface|null Returns the orange color.
     */
    public function getOrangeColor(): ?OrangeColorInterface {
        return $this->orangeColor;
    }

    /**
     * Set the orange color.
     *
     * @param OrangeColorInterface|null $orangeColor The orange color.
     * @return self Returns this instance.
     */
    protected function setOrangeColor(?OrangeColorInterface $orangeColor): self {
        $this->orangeColor = $orangeColor;
        return $this;
    }
}
