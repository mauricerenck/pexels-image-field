<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider;

use JsonSerializable;
use WBW\Library\Serializer\SerializerKeys;
use WBW\Library\Traits\Strings\StringDomainTrait;

/**
 * Abstract color provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider
 * @abstract
 */
abstract class AbstractColorProvider implements ColorProviderInterface, JsonSerializable {

    use StringDomainTrait {
        setDomain as protected;
    }

    /**
     * Constructor.
     *
     * @param string|null $domain The domain.
     */
    protected function __construct(?string $domain) {
        $this->setDomain($domain);
    }

    /**
     *{@inheritDoc}
     */
    public function jsonSerialize(): array {

        return [
            SerializerKeys::DOMAIN      => $this->getDomain(),
            SerializerKeys::NAME        => $this->getName(),
            SerializerKeys::COLOR . "s" => $this->getColors(),
        ];
    }
}
