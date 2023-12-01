<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

/**
 * Repository detail interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
interface RepositoryDetailInterface {

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
     * Get the average in percent.
     *
     * @return float|null Returns the average in percent.
     */
    public function getAveragePercent(): ?float;

    /**
     * Get the column.
     *
     * @return string|null Returns the column.
     */
    public function getColumn(): ?string;

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
     * Get the repository report.
     *
     * @return RepositoryReportInterface|null Returns the repository report.
     */
    public function getRepositoryReport(): ?RepositoryReportInterface;

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string;
}
