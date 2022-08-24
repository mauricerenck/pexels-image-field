<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

/**
 * Select2 option interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 */
interface Select2OptionInterface {

    /**
     * Get a Select2 option "id".
     *
     * @return mixed Returns the Select2 option "id".
     */
    public function getSelect2OptionId();

    /**
     * Get a Select2 option "text".
     *
     * @return string Returns the Select2 option "text".
     */
    public function getSelect2OptionText(): ?string;
}
