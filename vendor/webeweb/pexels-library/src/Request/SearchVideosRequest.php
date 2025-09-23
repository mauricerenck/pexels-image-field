<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pexels\Request;

use WBW\Library\Common\Traits\Integers\IntegerPageTrait;
use WBW\Library\Common\Traits\Integers\IntegerPerPageTrait;
use WBW\Library\Common\Traits\Strings\StringLocaleTrait;
use WBW\Library\Common\Traits\Strings\StringOrientationTrait;
use WBW\Library\Common\Traits\Strings\StringQueryTrait;
use WBW\Library\Common\Traits\Strings\StringSizeTrait;
use WBW\Library\Pexels\Response\AbstractResponse;
use WBW\Library\Pexels\Serializer\RequestSerializer;
use WBW\Library\Pexels\Serializer\ResponseDeserializer;

/**
 * Search videos request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Request
 */
class SearchVideosRequest extends AbstractRequest {

    use IntegerPageTrait;
    use IntegerPerPageTrait;
    use StringLocaleTrait;
    use StringOrientationTrait;
    use StringQueryTrait;
    use StringSizeTrait;

    /**
     * Search videos resource path.
     *
     * @var string
     */
    public const SEARCH_VIDEOS_RESOURCE_PATH = "/videos/search";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setPage(1);
        $this->setPerPage(self::PER_PAGE_DEFAULT);
    }

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeVideosResponse($rawResponse);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::SEARCH_VIDEOS_RESOURCE_PATH;
    }

    /**
     * {@inheritDoc}
     */
    public function serializeRequest(): array {
        return RequestSerializer::serializeSearchVideosRequest($this);
    }
}
