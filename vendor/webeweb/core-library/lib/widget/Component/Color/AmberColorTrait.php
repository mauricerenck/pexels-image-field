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
 * Amber color trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Color
 */
trait AmberColorTrait {

    /**
     * Amber color.
     *
     * @var AmberColorInterface|null
     */
    private $amberColor;

    /**
     * Get the amber color.
     *
     * @return AmberColorInterface|null Returns the amber color.
     */
    public function getAmberColor(): ?AmberColorInterface {
        return $this->amberColor;
    }

    /**
     * Set the amber color.
     *
     * @param AmberColorInterface|null $amberColor The amber color.
     * @return self Returns this instance.
     */
    protected function setAmberColor(?AmberColorInterface $amberColor): self {
        $this->amberColor = $amberColor;
        return $this;
    }
}
