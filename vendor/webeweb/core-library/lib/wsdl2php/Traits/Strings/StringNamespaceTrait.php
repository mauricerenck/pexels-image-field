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
 * String namespace trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Traits\Strings
 */
trait StringNamespaceTrait {

    /**
     * Namespace.
     *
     * @var string|null
     */
    private $namespace;

    /**
     * Get the namespace.
     *
     * @return string|null Returns the namespace.
     */
    public function getNamespace(): ?string {
        return $this->namespace;
    }

    /**
     * Set the namespace.
     *
     * @param string|null $namespace The namespace.
     * @return self Returns this instance.
     */
    public function setNamespace(?string $namespace): self {
        $this->namespace = $namespace;
        return $this;
    }
}
