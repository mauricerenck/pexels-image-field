<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Exception;

use WBW\Library\Core\Exception\AbstractException;
use WBW\Library\Traits\Strings\StringOriginUrlTrait;
use WBW\Library\Traits\Strings\StringRedirectUrlTrait;

/**
 * Redirect response exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Exception
 */
class RedirectResponseException extends AbstractException {

    use StringOriginUrlTrait;
    use StringRedirectUrlTrait;

    /**
     * Constructor.
     *
     * @param string $redirectUrl The redirect.
     * @param string|null $originUrl The route.
     */
    public function __construct(string $redirectUrl, ?string $originUrl) {

        $format  = 'You\'re not allowed to access to "%s"';
        $message = sprintf($format, $originUrl);

        parent::__construct($message, 403);

        $this->setOriginUrl($originUrl);
        $this->setRedirectUrl($redirectUrl);
    }
}
