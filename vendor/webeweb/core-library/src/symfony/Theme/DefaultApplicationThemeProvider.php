<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Theme;

use WBW\Library\Symfony\Provider\Theme\ApplicationThemeProviderInterface;

/**
 * Default application theme provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Theme
 */
class DefaultApplicationThemeProvider implements ApplicationThemeProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string {
        return "Core library";
    }

    /**
     * {@inheritDoc}
     */
    public function getHome(): ?string {
        return "/";
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string {
        return "Core<b>library</b>";
    }

    /**
     * {@inheritDoc}
     */
    public function getRoute(): ?string {
        return "/";
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string {
        return "Core library";
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion(): ?string {
        return "dev-master";
    }

    /**
     * {@inheritDoc}
     */
    public function getYear(string $startYear = null): ?string {

        $today = date("Y");
        $years = ["2018"];

        if (0 < intval($startYear)) {
            if (intval($startYear) <= intval($today)) {
                $years = [$startYear];
            } else {
                $years = [$today];
            }
        }

        if ($years[0] !== $today) {
            $years[] = $today;
        }

        return implode("-", $years);
    }
}
