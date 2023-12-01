<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Manager;

/**
 * Stylesheet manager trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Manager
 */
trait StylesheetManagerTrait {

    /**
     * Stylesheet manager.
     *
     * @var StylesheetManagerInterface|null
     */
    private $stylesheetManager;

    /**
     * Get the stylesheet manager.
     *
     * @return StylesheetManagerInterface|null Returns the stylesheet manager.
     */
    public function getStylesheetManager(): ?StylesheetManagerInterface {
        return $this->stylesheetManager;
    }

    /**
     * Set the stylesheet manager.
     *
     * @param StylesheetManagerInterface|null $stylesheetManager The stylesheet manager.
     * @return self Returns this instance.
     */
    protected function setStylesheetManager(?StylesheetManagerInterface $stylesheetManager): self {
        $this->stylesheetManager = $stylesheetManager;
        return $this;
    }
}
