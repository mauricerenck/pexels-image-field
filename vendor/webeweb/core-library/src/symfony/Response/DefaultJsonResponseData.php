<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Response;

use WBW\Library\Traits\Arrays\ArrayDataTrait;
use WBW\Library\Traits\Strings\ArrayErrorsTrait;
use WBW\Library\Traits\Strings\StringMessageTrait;

/**
 * Default JSON response data.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Response
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
     * {@inheritdoc}
     */
    public function getSuccess(): ?bool {
        return $this->success;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return [
            "success" => $this->getSuccess(),
            "data"    => $this->getData(),
            "message" => $this->getMessage(),
            "errors"  => $this->getErrors(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function setSuccess(?bool $success): DefaultJsonResponseDataInterface {
        $this->success = $success;
        return $this;
    }
}
