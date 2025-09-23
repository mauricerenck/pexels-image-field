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

namespace WBW\Library\Widget\Helper;

use WBW\Library\Widget\Component\DropdownItemInterface;

/**
 * Dropdown item helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Helper
 */
class DropdownItemHelper {

    /**
     * Set the position.
     *
     * @param DropdownItemInterface[] $models The models.
     * @return void
     */
    public static function setPosition(array $models): void {

        $i = -1;

        foreach ($models as $current) {
            $current->setPosition(++$i);
        }
    }

    /**
     * Swap.
     *
     * @param DropdownItemInterface $src The dropdown item source.
     * @param DropdownItemInterface $dst The dropdown item destination.
     * @return void
     */
    public static function swap(DropdownItemInterface $src, DropdownItemInterface $dst): void {

        $position = $src->getPosition();

        $src->setPosition($dst->getPosition());
        $dst->setPosition($position);
    }
}
