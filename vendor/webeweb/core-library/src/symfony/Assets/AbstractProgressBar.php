<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

use WBW\Library\Symfony\Serializer\JsonSerializer;
use WBW\Library\Traits\Strings\StringContentTrait;
use WBW\Library\Traits\Strings\StringTypeTrait;

/**
 * Abstract progress bar.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 * @abstract
 */
abstract class AbstractProgressBar implements ProgressBarInterface {

    use StringContentTrait;
    use StringTypeTrait;

    /**
     * Constructor.
     *
     * @param string|null $type The type.
     * @param string|null $content The content.
     */
    protected function __construct(?string $type, ?string $content = null) {
        $this->setContent($content);
        $this->setType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeProgressBar($this);
    }
}
