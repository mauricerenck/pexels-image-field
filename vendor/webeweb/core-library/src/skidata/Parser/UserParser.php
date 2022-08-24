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
use WBW\Library\SkiData\Model\User;
use WBW\Library\Types\Exception\IntegerArgumentException;
use WBW\Library\Types\Helper\BooleanHelper;
use WBW\Library\Types\Helper\IntegerHelper;

/**
 * User parser.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Parser
 */
class UserParser extends AbstractParser {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Parse a user entity.
     *
     * @param User $entity The user.
     * @return string Returns the parsed user.
     * @throws TooLongDataException Throws a too long data exception if a data is too long.
     */
    public function parseEntity(User $entity): string {

        $output = [
            $this->encodeInteger($entity->getUserNumber(), 9),
            $this->encodeInteger($entity->getCustomerNumber(), 9),
            $this->encodeString($entity->getTitle(), 10),
            $this->encodeString($entity->getSurname(), 25),
            $this->encodeString($entity->getFirstname(), 25),
            $this->encodeDate($entity->getDateBirth()),
            $this->encodeString($entity->getParkingSpace(), 5),
            $this->encodeString($entity->getRemarks(), 50),
            $this->encodeDateTime($entity->getDatetimeLastModification()),
            $this->encodeBoolean($entity->getDeletedRecord()),
            $this->encodeString($entity->getIdentificationNumber(), 20),
            $this->encodeBoolean($entity->getCheckLicensePlate()),
            $this->encodeBoolean($entity->getPassageLicensePlatePermitted()),
            $this->encodeBoolean($entity->getExcessTimesCreditCard()),
            $this->encodeString($entity->getCreditCardNumber(), 20),
            $this->encodeDate($entity->getExpiryDate()),
            $this->encodeString($entity->getRemarks2(), 50),
            $this->encodeString($entity->getRemarks3(), 50),
            $this->encodeString($entity->getDivision(), 50),
            $this->encodeString($entity->getEmail(), 120),
            $this->encodeBoolean($entity->getGroupCounting()),
            $this->encodeInteger($entity->getETicketTypeP(), 1),
            $this->encodeString($entity->getETicketEmailTelephone(), 120),
            $this->encodeInteger($entity->getETicketAuthentication(), 1),
            $this->encodeInteger($entity->getETicketServiceTyp(), 1),
            $this->encodeInteger($entity->getETicketServiceArt(), 1),
        ];

        return implode(";", $output);
    }

    /**
     * Parse a line.
     *
     * @param string $line The line.
     * @return User Returns a user.
     * @throws IntegerArgumentException Throws an integer argument exception.
     */
    public function parseLine(string $line): User {

        $data = explode(";", $line);

        $i = -1;

        $model = new User();
        $model->setUserNumber(IntegerHelper::parseString($data[++$i]));
        $model->setCustomerNumber(IntegerHelper::parseString($data[++$i]));
        $model->setTitle($this->decodeString($data[++$i]));
        $model->setSurname($this->decodeString($data[++$i]));
        $model->setFirstname($this->decodeString($data[++$i]));
        $model->setDateBirth($this->decodeDate($data[++$i]));
        $model->setParkingSpace($this->decodeString($data[++$i]));
        $model->setRemarks($this->decodeString($data[++$i]));
        $model->setDatetimeLastModification($this->decodeDateTime($data[++$i]));
        $model->setDeletedRecord(BooleanHelper::parseString($data[++$i]));
        $model->setIdentificationNumber($this->decodeString($data[++$i]));
        $model->setCheckLicensePlate(BooleanHelper::parseString($data[++$i]));
        $model->setPassageLicensePlatePermitted(BooleanHelper::parseString($data[++$i]));
        $model->setExcessTimesCreditCard(BooleanHelper::parseString($data[++$i]));
        $model->setCreditCardNumber($this->decodeString($data[++$i]));
        $model->setExpiryDate($this->decodeDate($data[++$i]));
        $model->setRemarks2($this->decodeString($data[++$i]));
        $model->setRemarks3($this->decodeString($data[++$i]));
        $model->setDivision($this->decodeString($data[++$i]));
        $model->setEmail($this->decodeString($data[++$i]));
        $model->setGroupCounting(BooleanHelper::parseString($data[++$i]));
        $model->setETicketTypeP(IntegerHelper::parseString($data[++$i]));
        $model->setETicketEmailTelephone($this->decodeString($data[++$i]));
        $model->setETicketAuthentication(IntegerHelper::parseString($data[++$i]));
        $model->setETicketServiceTyp(IntegerHelper::parseString($data[++$i]));
        $model->setETicketServiceArt(IntegerHelper::parseString($data[++$i]));

        return $model;
    }
}
