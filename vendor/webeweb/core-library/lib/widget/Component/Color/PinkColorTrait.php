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
 * Pink color trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Color
 */
trait PinkColorTrait {

    /**
     * Pink color.
     *
     * @var PinkColorInterface|null
     */
    private $pinkColor;

    /**
     * Get the pink color.
     *
     * @return PinkColorInterface|null Returns the pink color.
     */
    public function getPinkColor(): ?PinkColorInterface {
        return $this->pinkColor;
    }

    /**
     * Set the pink color.
     *
     * @param PinkColorInterface|null $pinkColor The pink color.
     * @return self Returns this instance.
     */
    protected function setPinkColor(?PinkColorInterface $pinkColor): self {
        $this->pinkColor = $pinkColor;
        return $this;
    }
}
