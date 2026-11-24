<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Strings;

/**
 * String title trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
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
