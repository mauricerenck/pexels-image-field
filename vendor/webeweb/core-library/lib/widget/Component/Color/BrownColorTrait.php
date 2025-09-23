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
 * Brown color trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Color
 */
trait BrownColorTrait {

    /**
     * Brown color.
     *
     * @var BrownColorInterface|null
     */
    private $brownColor;

    /**
     * Get the brown color.
     *
     * @return BrownColorInterface|null Returns the brown color.
     */
    public function getBrownColor(): ?BrownColorInterface {
        return $this->brownColor;
    }

    /**
     * Set the brown color.
     *
     * @param BrownColorInterface|null $brownColor The brown color.
     * @return self Returns this instance.
     */
    protected function setBrownColor(?BrownColorInterface $brownColor): self {
        $this->brownColor = $brownColor;
        return $this;
    }
}
