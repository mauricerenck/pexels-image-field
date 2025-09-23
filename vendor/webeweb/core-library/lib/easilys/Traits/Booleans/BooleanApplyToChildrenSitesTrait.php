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

namespace WBW\Library\Easilys\Traits\Booleans;

/**
 * Boolean apply to children sites trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Booleans
 */
trait BooleanApplyToChildrenSitesTrait {

    /**
     * Apply to children sites.
     *
     * @var bool|null
     */
    protected $applyToChildrenSites;

    /**
     * Get the apply to children sites.
     *
     * @return bool|null Returns the apply to children sites.
     */
    public function getApplyToChildrenSites(): ?bool {
        return $this->applyToChildrenSites;
    }

    /**
     * Set the apply to children sites.
     *
     * @param bool|null $applyToChildrenSites The apply to children sites.
     * @return self Returns this instance.
     */
    public function setApplyToChildrenSites(?bool $applyToChildrenSites): self {
        $this->applyToChildrenSites = $applyToChildrenSites;
        return $this;
    }
}
