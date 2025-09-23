<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pexels\Response;

use WBW\Library\Common\Traits\Integers\IntegerPageTrait;
use WBW\Library\Common\Traits\Integers\IntegerPerPageTrait;
use WBW\Library\Common\Traits\Strings\StringIdTrait;
use WBW\Library\Pexels\Model\AbstractMedia;
use WBW\Library\Pexels\Traits\Integers\IntegerTotalResultsTrait;
use WBW\Library\Pexels\Traits\Strings\StringNextPageTrait;
use WBW\Library\Pexels\Traits\Strings\StringPrevPageTrait;

/**
 * Collection response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Response
 */
class CollectionResponse extends AbstractMediaResponse {

    use IntegerPageTrait;
    use IntegerPerPageTrait;
    use IntegerTotalResultsTrait;
    use StringIdTrait;
    use StringNextPageTrait;
    use StringPrevPageTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritDoc}
     */
    public function addMedia(AbstractMedia $media): AbstractMediaResponse {
        return parent::addMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedias(): array {
        return parent::getMedias();
    }
}
