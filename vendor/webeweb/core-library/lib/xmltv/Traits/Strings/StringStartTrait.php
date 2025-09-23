<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Traits\Strings;

use DateTime;
use WBW\Library\XmlTv\Serializer\SerializerHelper;

/**
 * String start trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Strings
 */
trait StringStartTrait {

    /**
     * Start.
     *
     * @var string|null
     */
    protected $start;

    /**
     * Get the start.
     *
     * @return string|null Returns the start.
     */
    public function getStart(): ?string {
        return $this->start;
    }

    /**
     * Get the start into DateTime.
     *
     * @return DateTime|null Returns the start into DateTime in case of success, null otherwise.
     */
    public function getStartDateTime(): ?DateTime {
        return SerializerHelper::deserializeDateTime($this->start);
    }

    /**
     * Set the start.
     *
     * @param string|null $start The start.
     * @return self Returns this instance.
     */
    public function setStart(?string $start): self {
        $this->start = $start;
        return $this;
    }
}
