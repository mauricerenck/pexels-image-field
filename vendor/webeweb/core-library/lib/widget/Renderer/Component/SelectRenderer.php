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

namespace WBW\Library\Widget\Renderer\Component;

use WBW\Library\Common\Sorter\AlphabeticalNodeHelper;
use WBW\Library\Common\Sorter\AlphabeticalNodeInterface;
use WBW\Library\Widget\Component\Select\ChoiceLabelInterface;

/**
 * Select renderer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Renderer\Component
 */
class SelectRenderer {

    /**
     * Render an option.
     *
     * @param mixed $option The option.
     * @return string Returns the rendered option.
     */
    public static function renderOption($option): string {

        if (null === $option) {
            return "Empty selection";
        }

        if (true === ($option instanceof ChoiceLabelInterface)) {
            $output = $option->getChoiceLabel();
        } else {
            $output = "This option must implements " . ChoiceLabelInterface::class;
        }

        if (true === ($option instanceof AlphabeticalNodeInterface)) {

            $level  = AlphabeticalNodeHelper::getLevel($option);
            $nbsp   = html_entity_decode("&nbsp;");
            $symbol = html_entity_decode(0 === $level ? "&#9472;" : "&#9492;");

            $output = implode("", [
                str_repeat($nbsp, $level * 3),
                $symbol,
                $nbsp,
                $output,
            ]);
        }

        return $output;
    }
}
