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
 * Light green color trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Color
 */
trait LightGreenColorTrait {

    /**
     * Light green color.
     *
     * @var LightGreenColorInterface|null
     */
    private $lightGreenColor;

    /**
     * Get the light green color.
     *
     * @return LightGreenColorInterface|null Returns the light green color.
     */
    public function getLightGreenColor(): ?LightGreenColorInterface {
        return $this->lightGreenColor;
    }

    /**
     * Set the light green color.
     *
     * @param LightGreenColorInterface|null $lightGreenColor The light green color.
     * @return self Returns this instance.
     */
    protected function setLightGreenColor(?LightGreenColorInterface $lightGreenColor): self {
        $this->lightGreenColor = $lightGreenColor;
        return $this;
    }
}
