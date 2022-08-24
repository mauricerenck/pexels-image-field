<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

use JsonSerializable;

/**
 * Icon interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 */
interface IconInterface extends JsonSerializable {

    /**
     * Get the name.
     *
     * @return string|null Returns the name.
     */
    public function getName(): ?string;

    /**
     * Get the style.
     *
     * @return string|null Returns the style.
     */
    public function getStyle(): ?string;

    /**
     * Set the name.
     *
     * @param string|null $name The name.
     * @return IconInterface Returns this icon.
     */
    public function setName(?string $name);

    /**
     * Set the style.
     *
     * @param string|null $style The style.
     * @return IconInterface Returns this icon.
     */
    public function setStyle(?string $style);
}
