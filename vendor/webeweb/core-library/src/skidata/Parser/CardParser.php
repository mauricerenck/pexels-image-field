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

use WBW\Library\SkiData\Exception\TooLongDataException;
use WBW\Library\SkiData\Model\Card;
use WBW\Library\Types\Exception\IntegerArgumentException;
use WBW\Library\Types\Helper\BooleanHelper;
use WBW\Library\Types\Helper\IntegerHelper;

/**
 * Card parser.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Parser
 */
class CardParser extends AbstractParser {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Parse a card entity.
     *
     * @param Card $entity The card.
     * @return string Returns the parsed card.
     * @throws TooLongDataException Throws a too long data exception if a data is too long.
     */
    public function parseEntity(Card $entity): string {

        $output = [
            $this->encodeString($entity->getTicketNumber(), 23),
            $this->encodeInteger($entity->getUserNumber(), 9),
            $this->encodeInteger($entity->getArticleNumber(), 3),
            $this->encodeDate($entity->getValidFrom()),
            $this->encodeDate($entity->getExpires()),
            $this->encodeBoolean($entity->getBlocked()),
            $this->encodeDate($entity->getBlockedDate()),
            $this->encodeInteger($entity->getProductionState(), 1),
            $this->encodeInteger($entity->getReasonProduction(), 1),
            $this->encodeInteger($entity->getProductionCounter(), 4),
            $this->encodeBoolean($entity->getIsNeutral()),
            $this->encodeBoolean($entity->getRetainTicketEntry()),
            $this->encodeBoolean($entity->getEntryBarrierClosed()),
            $this->encodeBoolean($entity->getExitBarrierClosed()),
            $this->encodeBoolean($entity->getRetainTicketExit()),
            $this->encodeBoolean($entity->getDisplayText()),
            $this->encodeString($entity->getDisplayText1(), 16),
            $this->encodeString($entity->getDisplayText2(), 16),
            $this->encodeInteger($entity->getPersonalNo(), 4),
            $this->encodeInteger($entity->getResidualValue(), 12),
            $this->encodeString($entity->getSerialNumberKeyCardSwatch(), 20),
            $this->encodeString($entity->getCurrencyResidualValue(), 3),
            $this->encodeInteger($entity->getTicketType(), 1),
            $this->encodeString($entity->getTicketSubType(), 5),
            $this->encodeString($entity->getSerialNo(), 30),
            $this->encodeDate($entity->getSuspendPeriodFrom()),
            $this->encodeDate($entity->getSuspendPeriodUntil()),
            $this->encodeBoolean($entity->getUseValidCarParks()),
            $this->encodeInteger($entity->getProductionFacilityNumber(), 7),
        ];

        return implode(";", $output);
    }

    /**
     * Parse a line.
     *
     * @param string $line The line.
     * @return Card Returns a card.
     * @throws IntegerArgumentException Throws an integer argument exception.
     */
    public function parseLine(string $line): Card {

        $data = explode(";", $line);

        $i = -1;

        $model = new Card();
        $model->setTicketNumber($this->decodeString($data[++$i]));
        $model->setUserNumber(IntegerHelper::parseString($data[++$i]));
        $model->setArticleNumber(IntegerHelper::parseString($data[++$i]));
        $model->setValidFrom($this->decodeDate($data[++$i]));
        $model->setExpires($this->decodeDate($data[++$i]));
        $model->setBlocked(BooleanHelper::parseString($data[++$i]));
        $model->setBlockedDate($this->decodeDate($data[++$i]));
        $model->setProductionState(IntegerHelper::parseString($data[++$i]));
        $model->setReasonProduction(IntegerHelper::parseString($data[++$i]));
        $model->setProductionCounter(IntegerHelper::parseString($data[++$i]));
        $model->setIsNeutral(BooleanHelper::parseString($data[++$i]));
        $model->setRetainTicketEntry(BooleanHelper::parseString($data[++$i]));
        $model->setEntryBarrierClosed(BooleanHelper::parseString($data[++$i]));
        $model->setExitBarrierClosed(BooleanHelper::parseString($data[++$i]));
        $model->setRetainTicketExit(BooleanHelper::parseString($data[++$i]));
        $model->setDisplayText(BooleanHelper::parseString($data[++$i]));
        $model->setDisplayText1($this->decodeString($data[++$i]));
        $model->setDisplayText2($this->decodeString($data[++$i]));
        $model->setPersonalNo(IntegerHelper::parseString($data[++$i]));
        $model->setResidualValue(IntegerHelper::parseString($data[++$i]));
        $model->setSerialNumberKeyCardSwatch($this->decodeString($data[++$i]));
        $model->setCurrencyResidualValue($this->decodeString($data[++$i]));
        $model->setTicketType(IntegerHelper::parseString($data[++$i]));
        $model->setTicketSubType($this->decodeString($data[++$i]));
        $model->setSerialNo($this->decodeString($data[++$i]));
        $model->setSuspendPeriodFrom($this->decodeDate($data[++$i]));
        $model->setSuspendPeriodUntil($this->decodeDate($data[++$i]));
        $model->setUseValidCarParks(BooleanHelper::parseString($data[++$i]));
        $model->setProductionFacilityNumber(IntegerHelper::parseString($data[++$i]));

        return $model;
    }
}
