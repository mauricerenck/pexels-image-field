<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Model\System;

/**
 * Processor trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
trait ProcessorTrait {

    /**
     * Processor.
     *
     * @var ProcessorInterface|null
     */
    protected $processor;

    /**
     * Get the processor.
     *
     * @return ProcessorInterface|null Returns the processor.
     */
    public function getProcessor(): ?ProcessorInterface {
        return $this->processor;
    }

    /**
     * Set the processor.
     *
     * @param ProcessorInterface|null $processor The processor.
     * @return self Returns this instance.
     */
    protected function setProcessor(?ProcessorInterface $processor): self {
        $this->processor = $processor;
        return $this;
    }
}
