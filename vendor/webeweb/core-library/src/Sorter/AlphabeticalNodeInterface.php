<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Sorter;

/**
 * Alphabetical node interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Sorter
 */
interface AlphabeticalNodeInterface {

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getAlphabeticalNodeLabel(): ?string;

    /**
     * Get the parent.
     *
     * @return AlphabeticalNodeInterface|null Returns the parent.
     */
    public function getAlphabeticalNodeParent(): ?AlphabeticalNodeInterface;
}
