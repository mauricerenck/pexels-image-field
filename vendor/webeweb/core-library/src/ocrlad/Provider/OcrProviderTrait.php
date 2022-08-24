<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Provider;

/**
 * OCR provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Provider
 */
trait OcrProviderTrait {

    /**
     * OCR provider.
     *
     * @var OcrProvider|null
     */
    private $ocrProvider;

    /**
     * Get the OCR provider.
     *
     * @return OcrProvider|null Returns the OCR provider.
     */
    public function getOcrProvider(): ?OcrProvider {
        return $this->ocrProvider;
    }

    /**
     * Set the OCR provider.
     *
     * @param OcrProvider|null $ocrProvider The OCR provider.
     * @return self Returns this instance.
     */
    protected function setOcrProvider(?OcrProvider $ocrProvider): self {
        $this->ocrProvider = $ocrProvider;
        return $this;
    }
}
