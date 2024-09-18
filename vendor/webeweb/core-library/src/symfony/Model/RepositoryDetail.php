<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

use WBW\Library\Traits\Floats\FloatAverageTrait;
use WBW\Library\Traits\Integers\IntegerMaximumTrait;
use WBW\Library\Traits\Integers\IntegerMinimumTrait;
use WBW\Library\Traits\Strings\StringTypeTrait;

/**
 * Repository detail.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
class RepositoryDetail implements RepositoryDetailInterface {

    use FloatAverageTrait;
    use IntegerMaximumTrait;
    use IntegerMinimumTrait;
    use RepositoryReportTrait {
        setRepositoryReport as public;
    }
    use StringTypeTrait;

    /**
     * Available
     *
     * @var int|null
     */
    private $available;

    /**
     * Column.
     *
     * @var string|null
     */
    private $column;

    /**
     * Field.
     *
     * @var string|null
     */
    private $field;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailable(): ?int {
        return $this->available;
    }

    /**
     * {@inheritDoc}
     */
    public function getAveragePercent(): ?float {

        if (null === $this->getAvailable() || $this->getAvailable() <= 0 || null === $this->getAverage()) {
            return null;
        }

        return ($this->getAverage() / $this->getAvailable()) * 100;
    }

    /**
     * {@inheritDoc}
     */
    public function getColumn(): ?string {
        return $this->column;
    }

    /**
     * {@inheritDoc}
     */
    public function getField(): ?string {
        return $this->field;
    }

    /**
     * Set the available.
     *
     * @param int|null $available The available.
     * @return RepositoryDetail Returns this repository detail.
     */
    public function setAvailable(?int $available): RepositoryDetail {
        $this->available = $available;
        return $this;
    }

    /**
     * Set the column.
     *
     * @param string|null $column The column.
     * @return RepositoryDetail Returns this repository detail.
     */
    public function setColumn(?string $column): RepositoryDetail {
        $this->column = $column;
        return $this;
    }

    /**
     * Set the field.
     *
     * @param string|null $field The field.
     * @return RepositoryDetail Returns this repository detail.
     */
    public function setField(?string $field): RepositoryDetail {
        $this->field = $field;
        return $this;
    }
}
