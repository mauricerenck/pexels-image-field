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

namespace WBW\Library\Common\Security;

use Throwable;

/**
 * Token generator.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Security
 */
class TokenGenerator {

    /**
     * Generate a token.
     *
     * @param int $length The length.
     * @return string Returns the generated token.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function generateToken(int $length = 32): string {

        $randomBytes  = random_bytes($length);
        $base64Encode = base64_encode($randomBytes);
        $translated   = strtr($base64Encode, "+/", "-_");

        return rtrim($translated, "=");
    }
}
