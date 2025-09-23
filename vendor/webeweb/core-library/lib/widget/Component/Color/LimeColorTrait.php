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
 * Lime color trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Color
 */
trait LimeColorTrait {

    /**
     * Lime color.
     *
     * @var LimeColorInterface|null
     */
    private $limeColor;

    /**
     * Get the lime color.
     *
     * @return LimeColorInterface|null Returns the lime color.
     */
    public function getLimeColor(): ?LimeColorInterface {
        return $this->limeColor;
    }

    /**
     * Set the lime color.
     *
     * @param LimeColorInterface|null $limeColor The lime color.
     * @return self Returns this instance.
     */
    protected function setLimeColor(?LimeColorInterface $limeColor): self {
        $this->limeColor = $limeColor;
        return $this;
    }
}
