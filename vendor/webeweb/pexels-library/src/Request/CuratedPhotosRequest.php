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

use WBW\Library\Traits\Integers\IntegerPageTrait;
use WBW\Library\Traits\Integers\IntegerPerPageTrait;

/**
 * Curated photos request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Request
 */
class CuratedPhotosRequest extends AbstractRequest {

    use IntegerPageTrait;
    use IntegerPerPageTrait;

    /**
     * Curated photo resource path.
     *
     * @var string
     */
    const CURATED_PHOTO_RESOURCE_PATH = "/v1/curated";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setPage(1);
        $this->setPerPage(self::PER_PAGE_DEFAULT);
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::CURATED_PHOTO_RESOURCE_PATH;
    }
}
