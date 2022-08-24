<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Dropdown\Factory;

use WBW\Library\Dropdown\Model\DropdownItemInterface;

/**
 * Dropdown item factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Dropdown\Factory
 */
class DropdownItemFactory {

    /**
     * Copy.
     *
     * @param DropdownItemInterface $src The dropdown item source.
     * @param DropdownItemInterface $dst The dropdown item destination.
     * @return DropdownItemInterface Returns the dropdown item destination.
     */
    public static function copy(DropdownItemInterface $src, DropdownItemInterface $dst): DropdownItemInterface {

        $dst->setByDefault($src->getByDefault());
        $dst->setLabel($src->getLabel());
        $dst->setPosition($src->getPosition());

        return $dst;
    }
}
