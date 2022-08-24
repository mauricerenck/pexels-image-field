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
 * String title trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringTitleTrait {

    /**
     * Title.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the title.
     *
     * @return string|null Returns the title.
     */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Set the title.
     *
     * @param string|null $title The title.
     * @return self Returns this instance.
     */
    public function setTitle(?string $title): self {
        $this->title = $title;
        return $this;
    }
}
