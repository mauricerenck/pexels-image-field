<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Model;

/**
 * Result.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Model
 */
class Result {

    /**
     * Data.
     *
     * @var Line[]
     */
    private $data;

    /**
     * Errors.
     *
     * @var string[]
     */
    private $errors;

    /**
     * Return code.
     *
     * @var int|null
     */
    private $returnCode;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setData([]);
        $this->setErrors([]);
    }

    /**
     * Get the data.
     *
     * @return Line[] Returns the data.
     */
    public function getData(): array {
        return $this->data;
    }

    /**
     * Get the errors.
     *
     * @return string[] Returns the errors.
     */
    public function getErrors(): array {
        return $this->errors;
    }

    /**
     * Get the return code.
     *
     * @return int|null Returns the return code.
     */
    public function getReturnCode(): ?int {
        return $this->returnCode;
    }

    /**
     * Determines if this result has a data.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasData(): bool {
        return 0 < count($this->getData());
    }

    /**
     * Determines if this result has an error.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasError(): bool {
        return 0 === $this->returnCode;
    }

    /**
     * Set the data.
     *
     * @param Line[] $data The data.
     * @return Result Returns this result.
     */
    public function setData(array $data): Result {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the errors.
     *
     * @param string[] $errors The errors.
     * @return Result Returns this result.
     */
    public function setErrors(array $errors = []): Result {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Set the return code.
     *
     * @param int|null $returnCode The return code.
     * @return Result Returns this result.
     */
    public function setReturnCode(?int $returnCode): Result {
        $this->returnCode = $returnCode;
        return $this;
    }
}
