<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Model;

/**
 * Network card trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
trait NetworkCardTrait {

    /**
     * Network card.
     *
     * @var NetworkCardInterface|null
     */
    protected $networkCard;

    /**
     * Get the network card.
     *
     * @return NetworkCardInterface|null Returns the network card.
     */
    public function getNetworkCard(): ?NetworkCardInterface {
        return $this->networkCard;
    }

    /**
     * Set the network card.
     *
     * @param NetworkCardInterface|null $networkCard The network card.
     * @return self Returns this instance.
     */
    protected function setNetworkCard(?NetworkCardInterface $networkCard): self {
        $this->networkCard = $networkCard;
        return $this;
    }
}
