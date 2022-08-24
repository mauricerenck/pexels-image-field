<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String schema trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringSchemaTrait {

    /**
     * Schema.
     *
     * @var string|null
     */
    protected $schema;

    /**
     * Get the schema.
     *
     * @return string|null Returns the schema.
     */
    public function getSchema(): ?string {
        return $this->schema;
    }

    /**
     * Set the schema.
     *
     * @param string|null $schema The schema.
     * @return self Returns this instance.
     */
    public function setSchema(?string $schema): self {
        $this->schema = $schema;
        return $this;
    }
}
