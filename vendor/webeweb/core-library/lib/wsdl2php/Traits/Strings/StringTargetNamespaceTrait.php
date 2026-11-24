<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Wsdl2Php\Traits\Strings;

/**
 * String target namespace trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Traits\Strings
 */
trait StringTargetNamespaceTrait {

    /**
     * Target namespace.
     *
     * @var string|null
     */
    private $targetNamespace;

    /**
     * Get the target namespace.
     *
     * @return string|null Returns the target namespace.
     */
    public function getTargetNamespace(): ?string {
        return $this->targetNamespace;
    }

    /**
     * Set the target namespace.
     *
     * @param string|null $targetNamespace The target namespace.
     * @return self Returns this instance.
     */
    public function setTargetNamespace(?string $targetNamespace): self {
        $this->targetNamespace = $targetNamespace;
        return $this;
    }
}
