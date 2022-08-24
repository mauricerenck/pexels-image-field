<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Api;

/**
 * Substituable request interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider\Api
 */
interface SubstituableRequestInterface {

    /**
     * Get the substituables.
     *
     * @return array Returns the substituables.
     */
    public function getSubstituables(): array;
}
