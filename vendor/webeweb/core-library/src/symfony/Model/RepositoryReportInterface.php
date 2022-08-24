<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

/**
 * Repository report.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
interface RepositoryReportInterface {

    /**
     * Get the available.
     *
     * @return int|null Returns the available.
     */
    public function getAvailable(): ?int;

    /**
     * Get the average.
     *
     * @return float|null Returns the average.
     */
    public function getAverage(): ?float;

    /**
     * Get the column.
     *
     * @return string|null Returns the column.
     */
    public function getColumn(): ?string;

    /**
     * Get the count.
     *
     * @return int|null Returns the count.
     */
    public function getCount(): ?int;

    /**
     * Get the entity.
     *
     * @return string|null Returns the entity.
     */
    public function getEntity(): ?string;

    /**
     * Get the field.
     *
     * @return string|null Returns the field.
     */
    public function getField(): ?string;

    /**
     * Get the maximum.
     *
     * @return int|null Returns the maximum.
     */
    public function getMaximum(): ?int;

    /**
     * Get the minimum.
     *
     * @return int|null Returns the minimum.
     */
    public function getMinimum(): ?int;

    /**
     * Get the table.
     *
     * @return string|null Returns the table.
     */
    public function getTable(): ?string;
}
