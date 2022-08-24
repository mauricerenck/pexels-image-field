<?php

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
     * {@inheritdoc}
     */
    public function getDescription(): ?string {
        return "Core library";
    }

    /**
     * {@inheritdoc}
     */
    public function getHome(): ?string {
        return "/";
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): ?string {
        return "Core<b>library</b>";
    }

    /**
     * {@inheritdoc}
     */
    public function getRoute(): ?string {
        return "/";
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle(): ?string {
        return "Core library";
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion(): ?string {
        return "dev-master";
    }

    /**
     * {@inheritdoc}
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
