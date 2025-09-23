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

use WBW\Library\Easilys\Model\Quality;
use WBW\Library\Easilys\Response\AbstractResponse;

/**
 * GET qualities response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Response\Products
 */
class GetQualitiesResponse extends AbstractResponse {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Add a data.
     *
     * @param Quality|null $data The data.
     * @return GetQualitiesResponse Returns this GET qualities response.
     */
    public function addData(?Quality $data): GetQualitiesResponse {

        if (null !== $data) {
            $this->data[] = $data;
        }

        return $this;
    }

    /**
     * Get the data.
     *
     * @return Quality[] Returns the data.
     */
    public function getData(): array {
        return $this->data;
    }
}
