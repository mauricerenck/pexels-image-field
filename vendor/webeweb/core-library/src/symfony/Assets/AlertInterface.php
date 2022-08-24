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
 * Alert interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 */
interface AlertInterface extends JsonSerializable {

    /**
     * Alert type "danger".
     *
     * @var string
     */
    const ALERT_TYPE_DANGER = "danger";

    /**
     * Alert type "info".
     *
     * @var string
     */
    const ALERT_TYPE_INFO = "info";

    /**
     * Alert type "success".
     *
     * @var string
     */
    const ALERT_TYPE_SUCCESS = "success";

    /**
     * Alert type "warning".
     *
     * @var string
     */
    const ALERT_TYPE_WARNING = "warning";

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
     * @return AlertInterface Returns this alert.
     */
    public function setContent(?string $content);
}
