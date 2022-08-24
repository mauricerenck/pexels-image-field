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
 * Array errors trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait ArrayErrorsTrait {

    /**
     * Errors.
     *
     * @var string[]|null
     */
    protected $errors;

    /**
     * Get the errors.
     *
     * @return string[]|null Returns the errors.
     */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * Set the errors.
     *
     * @param string[]|null $errors The errors.
     * @return self Returns this instance.
     */
    public function setErrors(?array $errors): self {
        $this->errors = $errors;
        return $this;
    }
}
