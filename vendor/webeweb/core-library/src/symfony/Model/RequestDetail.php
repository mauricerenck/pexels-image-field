<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

use WBW\Library\Symfony\Serializer\JsonSerializer;
use WBW\Library\Traits\DateTimes\DateTimeDateTrait;
use WBW\Library\Traits\Integers\IntegerIdTrait;
use WBW\Library\Traits\Strings\StringIpAddressTrait;
use WBW\Library\Traits\Strings\StringMethodTrait;
use WBW\Library\Traits\Strings\StringRouteTrait;
use WBW\Library\Traits\Strings\StringUrlTrait;
use WBW\Library\Traits\Strings\StringUserAgentTrait;

/**
 * Request detail.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
class RequestDetail implements RequestDetailInterface {

    use DateTimeDateTrait;
    use IntegerIdTrait;
    use StringIpAddressTrait;
    use StringMethodTrait;
    use StringRouteTrait;
    use StringUrlTrait;
    use StringUserAgentTrait;

    /**
     * Data "GET".
     *
     * @var string|null
     */
    protected $dataGet;

    /**
     * Data "POST".
     *
     * @var string|null
     */
    protected $dataPost;

    /**
     * XML HTTP.
     *
     * @var bool|null
     */
    protected $xmlHttp;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getDataGet(): ?string {
        return $this->dataGet;
    }

    /**
     * {@inheritDoc}
     */
    public function getDataPost(): ?string {
        return $this->dataPost;
    }

    /**
     * {@inheritDoc}
     */
    public function getXmlHttp(): ?bool {
        return $this->xmlHttp;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeRequestDetail($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setDataGet(?string $dataGet): RequestDetailInterface {
        $this->dataGet = $dataGet;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setDataPost(?string $dataPost): RequestDetailInterface {
        $this->dataPost = $dataPost;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setXmlHttp(?bool $xmlHttp): RequestDetailInterface {
        $this->xmlHttp = $xmlHttp;
        return $this;
    }
}
