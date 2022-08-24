<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider;

/**
 * Color provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider
 */
interface ColorProviderInterface extends ProviderInterface {

    /**
     * Tag name.
     *
     * @var string
     */
    const COLOR_PROVIDER_TAG_NAME = "wbw.core.provider.color";

    /**
     * Get the colors.
     *
     * @return array Returns the colors.
     */
    public function getColors(): array;

    /**
     * Get the domain.
     *
     * @return string|null Returns the domain.
     */
    public function getDomain(): ?string;

    /**
     * Get the name.
     *
     * @return string Returns the color name.
     */
    public function getName(): string;
}
