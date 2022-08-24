<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider\Theme;

use WBW\Library\Symfony\Provider\ThemeProviderInterface;

/**
 * Application theme provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Theme
 */
interface ApplicationThemeProviderInterface extends ThemeProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.theme.application";

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string;

    /**
     * Get the home.
     *
     * @return string Returns the home.
     */
    public function getHome(): ?string;

    /**
     * Get the name.
     *
     * @return string|null Returns the name.
     */
    public function getName(): ?string;

    /**
     * Get the route.
     *
     * @return string|null Returns the route.
     */
    public function getRoute(): ?string;

    /**
     * Get the title.
     *
     * @return string|null Returns the title.
     */
    public function getTitle(): ?string;

    /**
     * Get the version.
     *
     * @return string|null Returns the version.
     */
    public function getVersion(): ?string;

    /**
     * Get the year.
     *
     * @param string|null $startYear The start year.
     * @return string|null Returns the year.
     */
    public function getYear(string $startYear = null): ?string;
}
