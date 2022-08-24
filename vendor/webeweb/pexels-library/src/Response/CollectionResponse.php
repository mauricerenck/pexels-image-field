<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Response;

use WBW\Library\Pexels\Model\AbstractMedia;
use WBW\Library\Pexels\Model\Attribute\IntegerTotalResultsTrait;
use WBW\Library\Pexels\Model\Attribute\StringNextPageTrait;
use WBW\Library\Pexels\Model\Attribute\StringPrevPageTrait;
use WBW\Library\Traits\Integers\IntegerPageTrait;
use WBW\Library\Traits\Integers\IntegerPerPageTrait;
use WBW\Library\Traits\Strings\StringIdTrait;

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
     * {@inheritdoc}
     */
    public function addMedia(AbstractMedia $media): AbstractMediaResponse {
        return parent::addMedia($media);
    }

    /**
     * {@inheritdoc}
     */
    public function getMedias(): array {
        return parent::getMedias();
    }
}
