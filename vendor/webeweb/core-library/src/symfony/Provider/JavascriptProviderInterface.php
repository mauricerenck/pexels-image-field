<?php

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
 * Javascript provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider
 */
interface JavascriptProviderInterface extends ProviderInterface {

    /**
     * Content-type.
     *
     * @var string
     */
    const JAVASCRIPT_PROVIDER_CONTENT_TYPE = "application/javascript";

    /**
     * Extension.
     *
     * @var string
     */
    const JAVASCRIPT_PROVIDER_EXTENSION = "js";

    /**
     * Tag name.
     *
     * @var string
     */
    const JAVASCRIPT_PROVIDER_TAG_NAME = "wbw.core.provider.javascript";

    /**
     * Get the javascripts.
     *
     * @return array Returns the javascripts.
     */
    public function getJavascripts(): array;
}
