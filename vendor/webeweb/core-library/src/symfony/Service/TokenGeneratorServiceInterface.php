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

namespace WBW\Library\Symfony\Service;

use Throwable;

/**
 * Token generator service interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Service
 */
interface TokenGeneratorServiceInterface {

    /**
     * Generate a token.
     *
     * @return string Returns the generated token.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function generateToken(): string;
}
