<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Model;

use DateTime;

/**
 * Start record format .
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Model
 */
class StartRecordFormat {

    /**
     * Currency.
     *
     * @var string|null
     */
    private $currency;

    /**
     * Date of file.
     *
     * @var DateTime|null
     */
    private $dateFile;

    /**
     * Facility number
     *
     * @var int|null
     */
    private $facilityNumber;

    /**
     * Number of records.
     *
     * @var int|null
     */
    private $numberRecords;

    /**
     * Version of record structure.
     *
     * @var int|null
     */
    private $versionRecordStructure;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the currency.
     *
     * @return string|null Returns the currency.
     */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Get the date of file.
     *
     * @return DateTime|null Returns the date of file.
     */
    public function getDateFile(): ?DateTime {
        return $this->dateFile;
    }

    /**
     * Get the facility number.
     *
     * @return int|null Returns the facility number.
     */
    public function getFacilityNumber(): ?int {
        return $this->facilityNumber;
    }

    /**
     * Get the number of records.
     *
     * @return int|null Returns the number of records.
     */
    public function getNumberRecords(): ?int {
        return $this->numberRecords;
    }

    /**
     * Get the version of record structure.
     *
     * @return int|null Returns the version of record structure.
     */
    public function getVersionRecordStructure(): ?int {
        return $this->versionRecordStructure;
    }

    /**
     * Set the currency.
     *
     * @param string|null $currency The currency.
     * @return StartRecordFormat Returns this start record format.
     */
    public function setCurrency(?string $currency): StartRecordFormat {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Set the date of file.
     *
     * @param DateTime|null $dateFile The date of file.
     * @return StartRecordFormat Returns this start record format.
     */
    public function setDateFile(?DateTime $dateFile): StartRecordFormat {
        $this->dateFile = $dateFile;
        return $this;
    }

    /**
     * Set the facility number.
     *
     * @param int|null $facilityNumber The facility number.
     * @return StartRecordFormat Returns this start record format.
     */
    public function setFacilityNumber(?int $facilityNumber): StartRecordFormat {
        $this->facilityNumber = $facilityNumber;
        return $this;
    }

    /**
     * Set the number of records.
     *
     * @param int|null $numberRecords The number of records.
     * @return StartRecordFormat Returns this start record format.
     */
    public function setNumberRecords(?int $numberRecords): StartRecordFormat {
        $this->numberRecords = $numberRecords;
        return $this;
    }

    /**
     * Set the version of record structure.
     *
     * @param int|null $versionRecordStructure The version of record structure.
     * @return StartRecordFormat Returns this start record format.
     */
    public function setVersionRecordStructure(?int $versionRecordStructure): StartRecordFormat {
        $this->versionRecordStructure = $versionRecordStructure;
        return $this;
    }
}
