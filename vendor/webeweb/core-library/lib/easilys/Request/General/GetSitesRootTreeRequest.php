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
use WBW\Library\Common\Traits\Integers\IntegerIdTrait;
use WBW\Library\Easilys\Request\AbstractRequest;
use WBW\Library\Easilys\Response\AbstractResponse;
use WBW\Library\Easilys\Serializer\General\ResponseDeserializer;
use WBW\Library\Easilys\Traits\Integers\IntegerIdTreeTrait;

/**
 * GET sites root tree request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Request\General
 */
class GetSitesRootTreeRequest extends AbstractRequest implements SubstituableRequestInterface {

    use IntegerIdTrait {
        setId as public;
    }
    use IntegerIdTreeTrait;

    /**
     * Resource path.
     *
     * @var string
     */
    public const RESOURCE_PATH = "/sites/root/:id/tree/:idTree";

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
            ":id"     => $this->getId(),
        ];
    }
}
