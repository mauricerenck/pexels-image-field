<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

use DateTime;
use JsonSerializable;

/**
 * Full calendar event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 */
interface FullCalendarEventInterface extends JsonSerializable {

    /**
     * Get the all day.
     *
     * @return bool|null Returns the all day.
     */
    public function getAllDay(): ?bool;

    /**
     * Get the background color.
     *
     * @return string|null Returns the background color.
     */
    public function getBackgroundColor(): ?string;

    /**
     * Get the border color.
     *
     * @return string|null Returns the border color.
     */
    public function getBorderColor(): ?string;

    /**
     * Get the class names.
     *
     * @return array Returns the class names.
     */
    public function getClassNames(): array;

    /**
     * Get the display.
     *
     * @return string|null Returns the display.
     */
    public function getDisplay(): ?string;

    /**
     * Get the duration editable.
     *
     * @return bool|null Returns the duration editable.
     */
    public function getDurationEditable(): ?bool;

    /**
     * Get the editable.
     *
     * @return bool|null Returns the editable.
     */
    public function getEditable(): ?bool;

    /**
     * Get the end.
     *
     * @return DateTime|null Returns the end.
     */
    public function getEnd(): ?DateTime;

    /**
     * Get the end string.
     *
     * @return string|null Returns the end string.
     */
    public function getEndStr(): ?string;

    /**
     * Get the extra params.
     *
     * @return array Returns the extra params.
     */
    public function getExtraParams(): array;

    /**
     * Get the group id.
     *
     * @return string|null Returns the group id.
     */
    public function getGroupId(): ?string;

    /**
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string;

    /**
     * Get the resource editable.
     *
     * @return bool|null Returns the resource editable.
     */
    public function getResourceEditable(): ?bool;

    /**
     * Get the start.
     *
     * @return DateTime|null Returns the start.
     */
    public function getStart(): ?DateTime;

    /**
     * Get the start editable.
     *
     * @return bool|null Returns the start editable.
     */
    public function getStartEditable(): ?bool;

    /**
     * Get the start string.
     *
     * @return string|null Returns the start string.
     */
    public function getStartStr(): ?string;

    /**
     * Get the text color.
     *
     * @return string|null Returns the text color.
     */
    public function getTextColor(): ?string;

    /**
     * Get the title.
     *
     * @return string|null Returns the title.
     */
    public function getTitle(): ?string;

    /**
     * Get the URL.
     *
     * @return string|null Returns the URL.
     */
    public function getUrl(): ?string;
}
