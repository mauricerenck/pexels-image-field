<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Provider;

/**
 * Substituable request interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Provider
 */
interface SubstituableRequestInterface extends RequestInterface {

    /**
     * Get the substituables.
     *
     * @return array<string,mixed> Returns the substituables.
     */
    public function getSubstituables(): array;
}
