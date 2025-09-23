<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Model\Request;

use WBW\Library\Common\Serializer\Request\JsonSerializer;
use WBW\Library\Common\Traits\DateTimes\DateTimeDateTrait;
use WBW\Library\Common\Traits\Integers\IntegerIdTrait;
use WBW\Library\Common\Traits\Strings\StringIpAddressTrait;
use WBW\Library\Common\Traits\Strings\StringMethodTrait;
use WBW\Library\Common\Traits\Strings\StringRouteTrait;
use WBW\Library\Common\Traits\Strings\StringUrlTrait;
use WBW\Library\Common\Traits\Strings\StringUserAgentTrait;

/**
 * Request detail.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Request
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
