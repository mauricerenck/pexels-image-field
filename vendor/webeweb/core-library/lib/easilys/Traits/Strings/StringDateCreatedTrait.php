<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Traits\Strings;

/**
 * String date created trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait StringDateCreatedTrait {

    /**
     * Date created.
     *
     * @var string|null
     */
    protected $dateCreated;

    /**
     * Get the date created.
     *
     * @return string|null Returns the date created.
     */
    public function getDateCreated(): ?string {
        return $this->dateCreated;
    }

    /**
     * Set the date created.
     *
     * @param string|null $dateCreated The date created.
     * @return self Returns this instance.
     */
    public function setDateCreated(?string $dateCreated): self {
        $this->dateCreated = $dateCreated;
        return $this;
    }
}
