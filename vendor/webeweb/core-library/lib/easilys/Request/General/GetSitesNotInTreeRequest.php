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

namespace WBW\Library\Easilys\Request\General;

use WBW\Library\Common\Provider\SubstituableRequestInterface;
use WBW\Library\Easilys\Request\AbstractRequest;
use WBW\Library\Easilys\Response\AbstractResponse;
use WBW\Library\Easilys\Serializer\General\ResponseDeserializer;
use WBW\Library\Easilys\Traits\Integers\IntegerIdTreeTrait;

/**
 * GET sites not in tree request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Request\General
 */
class GetSitesNotInTreeRequest extends AbstractRequest implements SubstituableRequestInterface {

    use IntegerIdTreeTrait;

    /**
     * Resource path.
     *
     * @var string
     */
    public const RESOURCE_PATH = "/sites/not-in-tree/:idTree";

    /**
     * {@inheritdoc
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeGetSitesResponse($rawResponse);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }

    /**
     * {@inheritDoc}
     */
    public function getSubstituables(): array {

        return [
            ":idTree" => $this->getIdTree(),
        ];
    }
}
