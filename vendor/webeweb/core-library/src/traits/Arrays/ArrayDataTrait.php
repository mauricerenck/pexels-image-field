<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Arrays;

/**
 * Array data trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Arrays
 */
trait ArrayDataTrait {

    /**
     * Data.
     *
     * @var array|null
     */
    protected $data;

    /**
     * Get the data.
     *
     * @return array|null Returns the data.
     */
    public function getData(): ?array {
        return $this->data;
    }

    /**
     * Set the data.
     *
     * @param array|null $data The data.
     * @return self Returns this instance.
     */
    public function setData(?array $data): self {
        $this->data = $data;
        return $this;
    }
}
