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

namespace WBW\Library\Common\Model\Repository;

/**
 * Repository detail trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Repository
 */
trait RepositoryDetailTrait {

    /**
     * Repository detail.
     *
     * @var RepositoryDetailInterface|null
     */
    protected $repositoryDetail;

    /**
     * Get the repository detail.
     *
     * @return RepositoryDetailInterface|null Returns the repository detail.
     */
    public function getRepositoryDetail(): ?RepositoryDetailInterface {
        return $this->repositoryDetail;
    }

    /**
     * Set the repository detail.
     *
     * @param RepositoryDetailInterface|null $repositoryDetail The repository detail.
     * @return self Returns this instance.
     */
    protected function setRepositoryDetail(?RepositoryDetailInterface $repositoryDetail): self {
        $this->repositoryDetail = $repositoryDetail;
        return $this;
    }
}
