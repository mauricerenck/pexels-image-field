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
 * Repository event trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Repository
 */
trait RepositoryEventTrait {

    /**
     * Repository event.
     *
     * @var RepositoryEventInterface|null
     */
    protected $repositoryEvent;

    /**
     * Get the repository event.
     *
     * @return RepositoryEventInterface|null Returns the repository event.
     */
    public function getRepositoryEvent(): ?RepositoryEventInterface {
        return $this->repositoryEvent;
    }

    /**
     * Set the repository event.
     *
     * @param RepositoryEventInterface|null $repositoryEvent The repository event.
     * @return self Returns this instance.
     */
    protected function setRepositoryEvent(?RepositoryEventInterface $repositoryEvent): self {
        $this->repositoryEvent = $repositoryEvent;
        return $this;
    }
}
