<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Renderer\Floats;

/**
 * Float renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Renderer\Floats
 */
trait FloatRendererTrait {

    /**
     * Render a float.
     *
     * @param float|null $number The number.
     * @param int $decimals The decimals.
     * @param string $decPoint The decimal point.
     * @param string $thousandsSep The thousands separator.
     * @return string|null Returns the rendered number.
     */
    protected function renderFloat(?float $number, int $decimals = 2, string $decPoint = ".", string $thousandsSep = ","): ?string {

        if (null === $number) {
            return null;
        }

        return number_format($number, $decimals, $decPoint, $thousandsSep);
    }

    /**
     * Render a percent.
     *
     * @param float|null $number The number.
     * @return string Returns the rendered percent.
     */
    protected function renderPercent(?float $number): ?string {

        $float = $this->renderFloat($number);
        if (null === $float) {
            return null;
        }

        return "$float %";
    }

    /**
     * Render a price.
     *
     * @param float|null $number The number.
     * @param string $currency The currency.
     * @return string|null Returns the rendered price.
     */
    protected function renderPrice(?float $number, string $currency = "€"): ?string {

        $float = $this->renderFloat($number);
        if (null === $float) {
            return null;
        }

        return "$float $currency";
    }
}
