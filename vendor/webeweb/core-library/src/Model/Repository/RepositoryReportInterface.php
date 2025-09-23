<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Model\Repository;

/**
 * Repository report.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Repository
 */
interface RepositoryReportInterface {

    /**
     * Add a detail.
     *
     * @param RepositoryDetailInterface $detail The detail.
     * @return RepositoryReportInterface Returns this repository report.
     */
    public function addDetail(RepositoryDetailInterface $detail): RepositoryReportInterface;

    /**
     * Get the count.
     *
     * @return int|null Returns the count.
     */
    public function getCount(): ?int;

    /**
     * Get the details.
     *
     * @return RepositoryDetailInterface[] Returns the repository details.
     */
    public function getDetails(): array;

    /**
     * Get the entity.
     *
     * @return string|null Returns the entity.
     */
    public function getEntity(): ?string;

    /**
     * Get the table.
     *
     * @return string|null Returns the table.
     */
    public function getTable(): ?string;
}
