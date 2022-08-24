<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Sorter\Model;

/**
 * Alphabetical tree node interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Sorter\Model
 */
interface AlphabeticalTreeNodeInterface {

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getAlphabeticalTreeNodeLabel(): ?string;

    /**
     * Get the parent.
     *
     * @return AlphabeticalTreeNodeInterface|null Returns the parent.
     */
    public function getAlphabeticalTreeNodeParent(): ?AlphabeticalTreeNodeInterface;
}
