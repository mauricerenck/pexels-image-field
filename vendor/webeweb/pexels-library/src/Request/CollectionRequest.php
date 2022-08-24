<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Request;

use WBW\Library\Traits\Strings\StringIdTrait;
use WBW\Library\Traits\Strings\StringTypeTrait;

/**
 * Collection request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Request
 */
class CollectionRequest extends CollectionsRequest {

    use StringIdTrait;
    use StringTypeTrait;

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return implode("/", [
            parent::getResourcePath(),
            $this->getId(),
        ]);
    }
}
