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

namespace WBW\Library\Easilys\Request\Products;

use WBW\Library\Easilys\Request\AbstractRequest;
use WBW\Library\Easilys\Response\AbstractResponse;
use WBW\Library\Easilys\Serializer\Products\ResponseDeserializer;
use WBW\Library\Easilys\Traits\Integers\IntegerIdSiteTrait;

/**
 * GET units request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Request\Products
 */
class GetUnitsRequest extends AbstractRequest {

    use IntegerIdSiteTrait;

    /**
     * Resource path.
     *
     * @var string
     */
    public const RESOURCE_PATH = "/units";

    /**
     * {@inheritdoc
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeGetUnitsResponse($rawResponse);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }
}
