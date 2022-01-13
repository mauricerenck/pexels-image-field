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
use WBW\Library\Traits\Strings\StringLocaleTrait;
use WBW\Library\Traits\Strings\StringOrientationTrait;
use WBW\Library\Traits\Strings\StringQueryTrait;
use WBW\Library\Traits\Strings\StringSizeTrait;

/**
 * Search videos request.
 *
 * @author webeweb <https://github.com/webeweb/>
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
    const SEARCH_VIDEOS_RESOURCE_PATH = "/videos/search";

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
    public function getResourcePath(): string {
        return self::SEARCH_VIDEOS_RESOURCE_PATH;
    }
}
