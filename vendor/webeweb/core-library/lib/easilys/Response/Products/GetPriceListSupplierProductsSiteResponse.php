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

namespace WBW\Library\Easilys\Response\Products;

use WBW\Library\Easilys\Model\PriceListSupplierProduct;
use WBW\Library\Easilys\Response\AbstractResponse;

/**
 * GET price list supplier products site response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Response\Products
 */
class GetPriceListSupplierProductsSiteResponse extends AbstractResponse {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Add a data.
     *
     * @param PriceListSupplierProduct|null $data The data.
     * @return GetPriceListSupplierProductsSiteResponse Returns this GET price list supplier products site response.
     */
    public function addData(?PriceListSupplierProduct $data): GetPriceListSupplierProductsSiteResponse {

        if (null !== $data) {
            $this->data[] = $data;
        }

        return $this;
    }

    /**
     * Get the data.
     *
     * @return PriceListSupplierProduct[] Returns the data.
     */
    public function getData(): array {
        return $this->data;
    }
}
