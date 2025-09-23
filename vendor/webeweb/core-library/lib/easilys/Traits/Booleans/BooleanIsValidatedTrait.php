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

namespace WBW\Library\Easilys\Traits\Booleans;

/**
 * Boolean is validated trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Booleans
 */
trait BooleanIsValidatedTrait {

    /**
     * Is validated.
     *
     * @var bool|null
     */
    protected $isValidated;

    /**
     * Get the is validated.
     *
     * @return bool|null Returns the is validated.
     */
    public function getIsValidated(): ?bool {
        return $this->isValidated;
    }

    /**
     * Set the is validated.
     *
     * @param bool|null $isValidated The is validated.
     * @return self Returns this instance.
     */
    public function setIsValidated(?bool $isValidated): self {
        $this->isValidated = $isValidated;
        return $this;
    }
}
