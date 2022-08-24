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
use WBW\Library\Symfony\Serializer\JsonSerializer;
use WBW\Library\Traits\Strings\StringIdTrait;
use WBW\Library\Traits\Strings\StringTitleTrait;
use WBW\Library\Traits\Strings\StringUrlTrait;

/**
 * Full Calendar event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 */
class FullCalendarEvent implements FullCalendarEventInterface {

    use StringIdTrait;
    use StringTitleTrait;
    use StringUrlTrait;

    /**
     * All day.
     *
     * @var bool|null
     */
    protected $allDay;

    /**
     * Background color.
     *
     * @var string|null
     */
    protected $backgroundColor;

    /**
     * Border color.
     *
     * @var string|null
     */
    protected $borderColor;

    /**
     * Class names.
     *
     * @var array
     */
    protected $classNames;

    /**
     * Display.
     *
     * @var string|null
     */
    protected $display;

    /**
     * Duration editable.
     *
     * @var bool|null
     */
    protected $durationEditable;

    /**
     * Editable.
     *
     * @var bool|null
     */
    protected $editable;

    /**
     * End.
     *
     * @var DateTime|null
     */
    protected $end;

    /**
     * End string.
     *
     * @var string|null
     */
    protected $endStr;

    /**
     * Extra params.
     *
     * @var array
     */
    protected $extraParams;

    /**
     * Group id.
     *
     * @var string|null
     */
    protected $groupId;

    /**
     * Resource editable.
     *
     * @var bool|null
     */
    protected $resourceEditable;

    /**
     * Start.
     *
     * @var DateTime|null
     */
    protected $start;

    /**
     * Start editable.
     *
     * @var bool|null
     */
    protected $startEditable;

    /**
     * Start string.
     *
     * @var string|null
     */
    protected $startStr;

    /**
     * Text color.
     *
     * @var string|null
     */
    protected $textColor;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setClassNames([]);
        $this->setExtraParams([]);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllDay(): ?bool {
        return $this->allDay;
    }

    /**
     * {@inheritdoc}
     */
    public function getBackgroundColor(): ?string {
        return $this->backgroundColor;
    }

    /**
     * {@inheritdoc}
     */
    public function getBorderColor(): ?string {
        return $this->borderColor;
    }

    /**
     * {@inheritdoc}
     */
    public function getClassNames(): array {
        return $this->classNames;
    }

    /**
     * {@inheritdoc}
     */
    public function getDisplay(): ?string {
        return $this->display;
    }

    /**
     * {@inheritdoc}
     */
    public function getDurationEditable(): ?bool {
        return $this->durationEditable;
    }

    /**
     * {@inheritdoc}
     */
    public function getEditable(): ?bool {
        return $this->editable;
    }

    /**
     * {@inheritdoc}
     */
    public function getEnd(): ?DateTime {
        return $this->end;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndStr(): ?string {
        return $this->endStr;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtraParams(): array {
        return $this->extraParams;
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupId(): ?string {
        return $this->groupId;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceEditable(): ?bool {
        return $this->resourceEditable;
    }

    /**
     * {@inheritdoc}
     */
    public function getStart(): ?DateTime {
        return $this->start;
    }

    /**
     * {@inheritdoc}
     */
    public function getStartEditable(): ?bool {
        return $this->startEditable;
    }

    /**
     * {@inheritdoc}
     */
    public function getStartStr(): ?string {
        return $this->startStr;
    }

    /**
     * {@inheritdoc}
     */
    public function getTextColor(): ?string {
        return $this->textColor;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeFullCalendarEvent($this);
    }

    /**
     * Set the all day.
     *
     * @param bool|null $allDay The all day.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setAllDay(?bool $allDay): FullCalendarEvent {
        $this->allDay = $allDay;
        return $this;
    }

    /**
     * Set the background color.
     *
     * @param string|null $backgroundColor The background color.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setBackgroundColor(?string $backgroundColor): FullCalendarEvent {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setBorderColor(?string $borderColor): FullCalendarEvent {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the class names.
     *
     * @param array $classNames The class names.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setClassNames(array $classNames): FullCalendarEvent {
        $this->classNames = $classNames;
        return $this;
    }

    /**
     * Set the display.
     *
     * @param string|null $display The display.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setDisplay(?string $display): FullCalendarEvent {
        $this->display = $display;
        return $this;
    }

    /**
     * Set the duration editable.
     *
     * @param bool|null $durationEditable The duration editable.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setDurationEditable(?bool $durationEditable): FullCalendarEvent {
        $this->durationEditable = $durationEditable;
        return $this;
    }

    /**
     * Set the editable.
     *
     * @param bool|null $editable The editable.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setEditable(?bool $editable): FullCalendarEvent {
        $this->editable = $editable;
        return $this;
    }

    /**
     * Set the end.
     *
     * @param DateTime|null $end The end.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setEnd(?DateTime $end): FullCalendarEvent {
        $this->end = $end;
        return $this;
    }

    /**
     * Set the end string.
     *
     * @param string|null $endStr The end string.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setEndStr(?string $endStr): FullCalendarEvent {
        $this->endStr = $endStr;
        return $this;
    }

    /**
     * Set the extra params.
     *
     * @param array $extraParams The extra params.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setExtraParams(array $extraParams): FullCalendarEvent {
        $this->extraParams = $extraParams;
        return $this;
    }

    /**
     * Set the group id.
     *
     * @param string|null $groupId The group id.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setGroupId(?string $groupId): FullCalendarEvent {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Set the resource editable.
     *
     * @param bool|null $resourceEditable The resource editable.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setResourceEditable(?bool $resourceEditable): FullCalendarEvent {
        $this->resourceEditable = $resourceEditable;
        return $this;
    }

    /**
     * Set the start.
     *
     * @param DateTime|null $start The start.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setStart(?DateTime $start): FullCalendarEvent {
        $this->start = $start;
        return $this;
    }

    /**
     * Set the start editable.
     *
     * @param bool|null $startEditable The start editable.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setStartEditable(?bool $startEditable): FullCalendarEvent {
        $this->startEditable = $startEditable;
        return $this;
    }

    /**
     * Set the start string.
     *
     * @param string|null $startStr The start string.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setStartStr(?string $startStr): FullCalendarEvent {
        $this->startStr = $startStr;
        return $this;
    }

    /**
     * Set the text color.
     *
     * @param string|null $textColor The text color.
     * @return FullCalendarEvent Returns this Full Calendar event.
     */
    public function setTextColor(?string $textColor): FullCalendarEvent {
        $this->textColor = $textColor;
        return $this;
    }
}
