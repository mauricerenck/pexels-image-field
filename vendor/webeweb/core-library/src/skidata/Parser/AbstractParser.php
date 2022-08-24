<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Parser;

use DateTime;
use WBW\Library\SkiData\Api\ParserInterface;
use WBW\Library\SkiData\Exception\TooLongDataException;
use WBW\Library\SkiData\Model\StartRecordFormat;
use WBW\Library\Types\Helper\IntegerHelper;

/**
 * Abstract parser.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Parser
 * @abstract
 */
abstract class AbstractParser implements ParserInterface {

    /**
     * Start record format.
     *
     * @var StartRecordFormat|null
     */
    private $startRecordFormat;

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO
    }

    /**
     * Decode a date string.
     *
     * @param string $str The string.
     * @return DateTime|null Returns the decoded string in case of success, null otherwise.
     */
    protected function decodeDate(string $str): ?DateTime {
        $date = DateTime::createFromFormat("!" . self::DATE_FORMAT, $str);
        return false === $date ? null : $date;
    }

    /**
     * Decode a datetime string.
     *
     * @param string $str The string.
     * @return DateTime|null Returns the decoded string in case of success, null otherwise.
     */
    protected function decodeDateTime(string $str): ?DateTime {
        $date = DateTime::createFromFormat(self::DATETIME_FORMAT, $str);
        return false === $date ? null : $date;
    }

    /**
     * Decode a string.
     *
     * @param string $str The string.
     * @return string Returns the decoded string in case of success, "" otherwise.
     */
    protected function decodeString(string $str): string {
        return ("" === $str || 2 === strlen($str)) ? "" : substr($str, 1, strlen($str) - 2);
    }

    /**
     * Encode a boolean value.
     *
     * @param bool|null $value The value.
     * @return string Returns the encoded boolean value.
     */
    protected function encodeBoolean(?bool $value): string {
        return "" . IntegerHelper::parseBoolean($value);
    }

    /**
     * Encode a date value.
     *
     * @param DateTime|null $value The value.
     * @return string Returns the encoded datetime value.
     */
    protected function encodeDate(?DateTime $value): string {
        return null === $value ? "" : $value->format(self::DATE_FORMAT);
    }

    /**
     * Encode a datetime value.
     *
     * @param DateTime|null $value The value.
     * @return string Returns the encoded datetime value.
     */
    protected function encodeDateTime(?DateTime $value): string {
        return null === $value ? "" : $value->format(self::DATETIME_FORMAT);
    }

    /**
     * Encode an integer value.
     *
     * @param int|null $value The value.
     * @param int $length The length.
     * @return string Returns the encoded integer.
     * @throws TooLongDataException Throws a too long data exception if the value exceeds the length.
     */
    protected function encodeInteger(?int $value, int $length): string {

        $format = "%'.0{$length}d";
        $output = null === $value ? "" : sprintf($format, $value);

        if ($length < strlen($output)) {
            throw new TooLongDataException($value, $length);
        }

        return $output;
    }

    /**
     * Encode a string value.
     *
     * @param string $value The value.
     * @param int $length The length.
     * @return string Returns the encoded string.
     * @throws TooLongDataException Throws a too long data exception if the value exceeds the length.
     */
    protected function encodeString(string $value, int $length = -1): string {

        if (-1 !== $length && $length < strlen($value)) {
            throw new TooLongDataException($value, $length);
        }

        return '"' . substr($value, 0, (-1 === $length ? strlen($value) : $length)) . '"';
    }

    /**
     * Get the start record format.
     *
     * @return StartRecordFormat|null Returns the start record format.
     */
    public function getStartRecordFormat(): ?StartRecordFormat {
        return $this->startRecordFormat;
    }

    /**
     * Set the start record format.
     *
     * @param StartRecordFormat|null $startRecordFormat The start record format.
     * @return AbstractParser Returns the parser.
     */
    public function setStartRecordFormat(?StartRecordFormat $startRecordFormat): AbstractParser {
        $this->startRecordFormat = $startRecordFormat;
        return $this;
    }
}
