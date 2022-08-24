<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String motif trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringMotifTrait {

    /**
     * Motif.
     *
     * @var string|null
     */
    protected $motif;

    /**
     * Get the motif.
     *
     * @return string|null Returns the motif.
     */
    public function getMotif(): ?string {
        return $this->motif;
    }

    /**
     * Set the motif.
     *
     * @param string|null $motif The motif.
     * @return self Returns this instance.
     */
    public function setMotif(?string $motif): self {
        $this->motif = $motif;
        return $this;
    }
}
