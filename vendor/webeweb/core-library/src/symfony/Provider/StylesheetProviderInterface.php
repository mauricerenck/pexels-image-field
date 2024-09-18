<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider;

/**
 * Stylesheet provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider
 */
interface StylesheetProviderInterface extends ProviderInterface {

    /**
     * Content-type.
     *
     * @var string
     */
    public const STYLESHEET_PROVIDER_CONTENT_TYPE = "text/css; charset=utf-8";

    /**
     * Extension.
     *
     * @var string
     */
    public const STYLESHEET_PROVIDER_EXTENSION = "css";

    /**
     * Tag name.
     *
     * @var string
     */
    public const STYLESHEET_PROVIDER_TAG_NAME = "wbw.core.provider.stylesheet";

    /**
     * Get the stylesheets.
     *
     * @return mixed[] Returns the stylesheets.
     */
    public function getStylesheets(): array;
}
