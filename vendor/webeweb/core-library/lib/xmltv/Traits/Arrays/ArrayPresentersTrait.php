<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Traits\Arrays;

use WBW\Library\XmlTv\Model\Presenter;

/**
 * Array presenters trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayPresentersTrait {

    /**
     * Presenters.
     *
     * @var Presenter[]
     */
    protected $presenters;

    /**
     * Add a presenter.
     *
     * @param Presenter $presenter The presenter.
     * @return self Returns this instance.
     */
    public function addPresenter(Presenter $presenter): self {
        $this->presenters[] = $presenter;
        return $this;
    }

    /**
     * Get the number of presenters.
     *
     * @return int Returns the number of presenters.
     */
    public function getNumberPresenters(): int {
        return count($this->getPresenters());
    }

    /**
     * Get the presenters.
     *
     * @return Presenter[] Returns the presenters.
     */
    public function getPresenters(): array {
        return $this->presenters;
    }

    /**
     * Determine if this instance has presenters.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasPresenters(): bool {
        return 1 <= $this->getNumberPresenters();
    }

    /**
     * Set the presenters.
     *
     * @param Presenter[] $presenters The presenters.
     * @return self Returns this instance.
     */
    protected function setPresenters(array $presenters): self {
        $this->presenters = $presenters;
        return $this;
    }
}
