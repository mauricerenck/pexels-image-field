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
 * Repository report trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
trait RepositoryReportTrait {

    /**
     * Repository report.
     *
     * @var RepositoryReportInterface|null
     */
    protected $repositoryReport;

    /**
     * Get the repository report.
     *
     * @return RepositoryReportInterface|null Returns the repository report.
     */
    public function getRepositoryReport(): ?RepositoryReportInterface {
        return $this->repositoryReport;
    }

    /**
     * Set the repository report.
     *
     * @param RepositoryReportInterface|null $repositoryReport The repository report.
     * @return self Returns this instance.
     */
    protected function setRepositoryReport(?RepositoryReportInterface $repositoryReport): self {
        $this->repositoryReport = $repositoryReport;
        return $this;
    }
}
