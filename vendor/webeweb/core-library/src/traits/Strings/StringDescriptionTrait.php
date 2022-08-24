<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String description trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringDescriptionTrait {

    /**
     * Description.
     *
     * @var string|null
     */
    protected $description;

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return self Returns this instance.
     */
    public function setDescription(?string $description): self {
        $this->description = $description;
        return $this;
    }
}
