<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Security;

use Exception;

/**
 * Token generator.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Security
 */
class TokenGenerator {

    /**
     * Generate a token.
     *
     * @return string Returns the generated token.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function generateToken(): string {

        $randomBytes  = random_bytes(32);
        $base64Encode = base64_encode($randomBytes);
        $translated   = strtr($base64Encode, "+/", "-_");

        return rtrim($translated, "=");
    }
}
