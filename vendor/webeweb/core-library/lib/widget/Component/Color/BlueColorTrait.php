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
 * Blue color trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Color
 */
trait BlueColorTrait {

    /**
     * Blue color.
     *
     * @var BlueColorInterface|null
     */
    private $blueColor;

    /**
     * Get the blue color.
     *
     * @return BlueColorInterface|null Returns the blue color.
     */
    public function getBlueColor(): ?BlueColorInterface {
        return $this->blueColor;
    }

    /**
     * Set the blue color.
     *
     * @param BlueColorInterface|null $blueColor The blue color.
     * @return self Returns this instance.
     * @return self Returns this instance.
     */
    protected function setBlueColor(?BlueColorInterface $blueColor): self {
        $this->blueColor = $blueColor;
        return $this;
    }
}
