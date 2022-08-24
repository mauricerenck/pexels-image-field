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
 * String subject trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringSubjectTrait {

    /**
     * Subject.
     *
     * @var string|null
     */
    protected $subject;

    /**
     * Get the subject.
     *
     * @return string|null Returns the subject.
     */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Set the subject.
     *
     * @param string|null $subject The subject.
     * @return self Returns this instance.
     */
    public function setSubject(?string $subject): self {
        $this->subject = $subject;
        return $this;
    }
}
