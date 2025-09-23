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
 * Search photos request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Request
 */
class SearchPhotosRequest extends AbstractRequest {

    use IntegerPageTrait;
    use IntegerPerPageTrait;
    use StringLocaleTrait;
    use StringOrientationTrait;
    use StringQueryTrait;
    use StringSizeTrait;

    /**
     * Search photos resource path.
     *
     * @var string
     */
    public const SEARCH_PHOTOS_RESOURCE_PATH = "/v1/search";

    /**
     * Color.
     *
     * @var string|null
     */
    private $color;

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
        return ResponseDeserializer::deserializePhotosResponse($rawResponse);
    }

    /**
     * Get the color.
     *
     * @return string|null Returns the color.
     */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::SEARCH_PHOTOS_RESOURCE_PATH;
    }

    /**
     * {@inheritDoc}
     */
    public function serializeRequest(): array {
        return RequestSerializer::serializeSearchPhotosRequest($this);
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return SearchPhotosRequest Returns this search photos request.
     */
    public function setColor(?string $color): SearchPhotosRequest {
        $this->color = $color;
        return $this;
    }
}
