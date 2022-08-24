<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Model;

use WBW\Library\Traits\Integers\IntegerHeightTrait;
use WBW\Library\Traits\Integers\IntegerIdTrait;
use WBW\Library\Traits\Integers\IntegerWidthTrait;
use WBW\Library\Traits\Strings\StringLinkTrait;
use WBW\Library\Traits\Strings\StringRawDataTrait;

/**
 * Video file.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Model
 */
class VideoFile {

    use IntegerHeightTrait;
    use IntegerIdTrait {
        setId as public;
    }
    use IntegerWidthTrait;
    use StringLinkTrait;
    use StringRawDataTrait;

    /**
     * File type.
     *
     * @var string|null
     */
    private $fileType;

    /**
     * Quality.
     *
     * @var string|null
     */
    private $quality;

    /**
     * Get the file type.
     *
     * @return string|null Returns the file type.
     */
    public function getFileType(): ?string {
        return $this->fileType;
    }

    /**
     * Get the quality.
     *
     * @return string|null Returns the quality.
     */
    public function getQuality(): ?string {
        return $this->quality;
    }

    /**
     * Set the file type.
     *
     * @param string|null $fileType The file type.
     * @return VideoFile Returns this video file.
     */
    public function setFileType(?string $fileType): VideoFile {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * Set the quality.
     *
     * @param string|null $quality Returns the quality.
     * @return VideoFile Returns this video file.
     */
    public function setQuality(?string $quality): VideoFile {
        $this->quality = $quality;
        return $this;
    }
}
