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
use WBW\Library\SkiData\Model\Customer;
use WBW\Library\Types\Exception\IntegerArgumentException;
use WBW\Library\Types\Helper\BooleanHelper;
use WBW\Library\Types\Helper\IntegerHelper;

/**
 * Customer parser.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Parser
 */
class CustomerParser extends AbstractParser {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Parse a customer entity.
     *
     * @param Customer $entity The customer.
     * @return string Returns the parsed customer.
     * @throws TooLongDataException Throws a too long data exception if a data is too long.
     */
    public function parseEntity(Customer $entity): string {

        $output = [
            $this->encodeInteger($entity->getCustomerNumber(), 9),
            $this->encodeString($entity->getTitle(), 10),
            $this->encodeString($entity->getSurname(), 25),
            $this->encodeString($entity->getFirstname(), 25),
            $this->encodeString($entity->getStreet(), 25),
            $this->encodeString($entity->getPCode(), 10),
            $this->encodeString($entity->getCity(), 25),
            $this->encodeString($entity->getCountry(), 3),
            $this->encodeString($entity->getTaxCode(), 16),
            $this->encodeString($entity->getIdDocumentNo(), 15),
            $this->encodeString($entity->getTelephone(), 20),
            $this->encodeString($entity->getRentalAgreementNo(), 20),
            $this->encodeDate($entity->getBeginDate()),
            $this->encodeDate($entity->getTerminationDate()),
            $this->encodeInteger($entity->getDeposit(), 12),
            $this->encodeInteger($entity->getMaximumLevel(), 4),
            $this->encodeString($entity->getRemarks(), 50),
            $this->encodeDateTime($entity->getDatetimeLastModification()),
            $this->encodeBoolean($entity->getBlocked()),
            $this->encodeDate($entity->getBlockedDate()),
            $this->encodeBoolean($entity->getDeletedRecord()),
            $this->encodeBoolean($entity->getTicketReturnAllowed()),
            $this->encodeBoolean($entity->getGroupCounting()),
            $this->encodeBoolean($entity->getEntryMaxLevelAllowed()),
            $this->encodeBoolean($entity->getMaxLevelCarPark()),
            $this->encodeString($entity->getRemarks2(), 50),
            $this->encodeString($entity->getRemarks3(), 50),
            $this->encodeString($entity->getDivision(), 25),
            $this->encodeString($entity->getEmail(), 120),
            $this->encodeBoolean($entity->getCountingNeutralCards()),
            $this->encodeString($entity->getNationality(), 3),
            $this->encodeString($entity->getAccountingNumber(), 20),
        ];

        return implode(";", $output);
    }

    /**
     * Parse a line.
     *
     * @param string $line The line.
     * @return Customer Returns a customer.
     * @throws IntegerArgumentException Throws an integer argument exception.
     */
    public function parseLine(string $line): Customer {

        $data = explode(";", $line);

        $i = -1;

        $model = new Customer();
        $model->setCustomerNumber(IntegerHelper::parseString($data[++$i]));
        $model->setTitle($this->decodeString($data[++$i]));
        $model->setSurname($this->decodeString($data[++$i]));
        $model->setFirstname($this->decodeString($data[++$i]));
        $model->setStreet($this->decodeString($data[++$i]));
        $model->setPCode($this->decodeString($data[++$i]));
        $model->setCity($this->decodeString($data[++$i]));
        $model->setCountry($this->decodeString($data[++$i]));
        $model->setTaxCode($this->decodeString($data[++$i]));
        $model->setIdDocumentNo($this->decodeString($data[++$i]));
        $model->setTelephone($this->decodeString($data[++$i]));
        $model->setRentalAgreementNo($this->decodeString($data[++$i]));
        $model->setBeginDate($this->decodeDate($data[++$i]));
        $model->setTerminationDate($this->decodeDate($data[++$i]));
        $model->setDeposit(IntegerHelper::parseString($data[++$i]));
        $model->setMaximumLevel(IntegerHelper::parseString($data[++$i]));
        $model->setRemarks($this->decodeString($data[++$i]));
        $model->setDatetimeLastModification($this->decodeDateTime($data[++$i]));
        $model->setBlocked(BooleanHelper::parseString($data[++$i]));
        $model->setBlockedDate($this->decodeDate($data[++$i]));
        $model->setDeletedRecord(BooleanHelper::parseString($data[++$i]));
        $model->setTicketReturnAllowed(BooleanHelper::parseString($data[++$i]));
        $model->setGroupCounting(BooleanHelper::parseString($data[++$i]));
        $model->setEntryMaxLevelAllowed(BooleanHelper::parseString($data[++$i]));
        $model->setMaxLevelCarPark(BooleanHelper::parseString($data[++$i]));
        $model->setRemarks2($this->decodeString($data[++$i]));
        $model->setRemarks3($this->decodeString($data[++$i]));
        $model->setDivision($this->decodeString($data[++$i]));
        $model->setEmail($this->decodeString($data[++$i]));
        $model->setCountingNeutralCards(BooleanHelper::parseString($data[++$i]));
        $model->setNationality($this->decodeString($data[++$i]));
        $model->setAccountingNumber($this->decodeString($data[++$i]));

        return $model;
    }
}
