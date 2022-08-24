<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String mention trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringMentionTrait {

    /**
     * Mention.
     *
     * @var string|null
     */
    protected $mention;

    /**
     * Get the mention.
     *
     * @return string|null Returns the mention.
     */
    public function getMention(): ?string {
        return $this->mention;
    }

    /**
     * Set the mention.
     *
     * @param string|null $mention The mention.
     * @return self Returns this instance.
     */
    public function setMention(?string $mention): self {
        $this->mention = $mention;
        return $this;
    }
}
