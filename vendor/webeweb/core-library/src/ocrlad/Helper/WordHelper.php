<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Helper;

use WBW\Library\OcrLad\Model\Word;

/**
 * Word helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Helper
 */
class WordHelper {

    /**
     * Implode the words.
     *
     * @param Word[] $words The words.
     * @param string $glue The glue.
     * @return string Returns the imploded words.
     */
    public static function implodeWords(array $words, string $glue = " "): string {

        $output = [];

        foreach ($words as $current) {
            $output[] = $current->getContent();
        }

        return implode($glue, $output);
    }
}
