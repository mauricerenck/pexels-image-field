<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Request;

use WBW\Library\Provider\Api\SubstituableRequestInterface;
use WBW\Library\Traits\Integers\IntegerIdTrait;

/**
 * Get video request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Request
 */
class GetVideoRequest extends AbstractRequest implements SubstituableRequestInterface {

    use IntegerIdTrait {
        setId as public;
    }

    /**
     * Get video resource path.
     *
     * @var string
     */
    const GET_VIDEO_RESOURCE_PATH = "/v1/videos/videos/:id";

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::GET_VIDEO_RESOURCE_PATH;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubstituables(): array {

        return [
            ":id" => $this->getId(),
        ];
    }
}
