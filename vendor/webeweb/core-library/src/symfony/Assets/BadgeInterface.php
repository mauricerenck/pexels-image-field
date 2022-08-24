<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

use JsonSerializable;

/**
 * Badge interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 */
interface BadgeInterface extends JsonSerializable {

    /**
     * Badge type "danger".
     *
     * @var string
     */
    const BADGE_TYPE_DANGER = "danger";

    /**
     * Badge type "info".
     *
     * @var string
     */
    const BADGE_TYPE_INFO = "info";

    /**
     * Badge type "success".
     *
     * @var string
     */
    const BADGE_TYPE_SUCCESS = "success";

    /**
     * Badge type "warning".
     *
     * @var string
     */
    const BADGE_TYPE_WARNING = "warning";

    /**
     * Get the content.
     *
     * @return string|null Returns the content.
     */
    public function getContent(): ?string;

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string;

    /**
     * Set the content.
     *
     * @param string|null $content The content.
     * @return BadgeInterface Returns this badge.
     */
    public function setContent(?string $content);
}
