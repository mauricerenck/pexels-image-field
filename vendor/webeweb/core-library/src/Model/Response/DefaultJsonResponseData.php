<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Model\Response;

use WBW\Library\Common\Serializer\Response\JsonSerializer;
use WBW\Library\Common\Traits\Arrays\ArrayDataTrait;
use WBW\Library\Common\Traits\Strings\ArrayErrorsTrait;
use WBW\Library\Common\Traits\Strings\StringMessageTrait;

/**
 * Default JSON response data.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Response
 */
class DefaultJsonResponseData implements DefaultJsonResponseDataInterface {

    use ArrayDataTrait;
    use ArrayErrorsTrait;
    use StringMessageTrait;

    /**
     * Success.
     *
     * @var bool|null
     */
    protected $success;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getSuccess(): ?bool {
        return $this->success;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeDefaultJsonResponseData($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setSuccess(?bool $success): DefaultJsonResponseDataInterface {
        $this->success = $success;
        return $this;
    }
}
