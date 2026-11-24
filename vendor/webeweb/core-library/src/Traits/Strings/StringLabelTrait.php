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

namespace WBW\Library\Common\Traits\Strings;

/**
 * String label trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringLabelTrait {

    /**
     * Label.
     *
     * @var string|null
     */
    protected $label;

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Set the label.
     *
     * @param string|null $label The label.
     * @return self Returns this instance.
     */
    public function setLabel(?string $label): self {
        $this->label = $label;
        return $this;
    }
}
