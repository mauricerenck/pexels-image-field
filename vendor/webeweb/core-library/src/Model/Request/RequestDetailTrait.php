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

namespace WBW\Library\Common\Model\Request;

/**
 * Request detail trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Request
 */
trait RequestDetailTrait {

    /**
     * Request detail.
     *
     * @var RequestDetailInterface|null
     */
    protected $requestDetail;

    /**
     * Get the request detail.
     *
     * @return RequestDetailInterface|null Returns the request detail.
     */
    public function getRequestDetail(): ?RequestDetailInterface {
        return $this->requestDetail;
    }

    /**
     * Set the request detail.
     *
     * @param RequestDetailInterface|null $requestDetail The request detail.
     * @return self Returns this instance.
     */
    protected function setRequestDetail(?RequestDetailInterface $requestDetail): self {
        $this->requestDetail = $requestDetail;
        return $this;
    }
}
