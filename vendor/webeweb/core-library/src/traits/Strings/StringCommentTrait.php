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
 * String comment trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringCommentTrait {

    /**
     * Comment.
     *
     * @var string|null
     */
    protected $comment;

    /**
     * Get the comment.
     *
     * @return string|null Returns the comment.
     */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * Set the comment.
     *
     * @param string|null $comment The comment.
     * @return self Returns this instance.
     */
    public function setComment(?string $comment): self {
        $this->comment = $comment;
        return $this;
    }
}
