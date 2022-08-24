<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

/**
 * Alert trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 */
trait AlertTrait {

    /**
     * Alert.
     *
     * @var AlertInterface|null
     */
    protected $alert;

    /**
     * Get the alert.
     *
     * @return AlertInterface|null Returns the alert.
     */
    public function getAlert(): ?AlertInterface {
        return $this->alert;
    }

    /**
     * Set the alert.
     *
     * @param AlertInterface|null $alert The alert.
     * @return self Returns this instance.
     */
    protected function setAlert(?AlertInterface $alert): self {
        $this->alert = $alert;
        return $this;
    }
}
