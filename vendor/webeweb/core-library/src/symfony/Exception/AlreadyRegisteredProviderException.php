<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Exception;

use WBW\Library\Core\Exception\AbstractException;
use WBW\Library\Symfony\Provider\ProviderInterface;

/**
 * Already registered provider exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Exception
 */
class AlreadyRegisteredProviderException extends AbstractException {

    /**
     * Constructor.
     *
     * @param ProviderInterface $provider The provider.
     */
    public function __construct(ProviderInterface $provider) {
        $format = 'The provider "%s" is already registered';
        parent::__construct(sprintf($format, get_class($provider)));
    }
}
