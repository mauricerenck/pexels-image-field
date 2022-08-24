<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String target trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringTargetTrait {

    /**
     * Target.
     *
     * @var string|null
     */
    protected $target;

    /**
     * Get the target.
     *
     * @return string|null Returns the target.
     */
    public function getTarget(): ?string {
        return $this->target;
    }

    /**
     * Set the target.
     *
     * @param string|null $target The target.
     * @return self Returns this instance.
     */
    public function setTarget(?string $target): self {
        $this->target = $target;
        return $this;
    }
}
