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

namespace WBW\Library\XmlTv\Traits\Objects;

use WBW\Library\XmlTv\Model\Value;

/**
 * Value value trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Objects
 */
trait ValueValueTrait {

    /**
     * Value.
     *
     * @var Value|null
     */
    protected $value;

    /**
     * Get the value.
     *
     * @return Value|null Returns the value.
     */
    public function getValue(): ?Value {
        return $this->value;
    }

    /**
     * Set the value.
     *
     * @param Value|null $value The value.
     * @return self Returns this instance.
     */
    public function setValue(?Value $value): self {
        $this->value = $value;
        return $this;
    }
}
