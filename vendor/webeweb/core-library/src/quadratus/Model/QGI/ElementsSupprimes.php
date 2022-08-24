<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

use DateTime;

/**
 * Elements supprimes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ElementsSupprimes {

    /**
     * Date1.
     *
     * @var DateTime|null
     */
    private $date1;

    /**
     * Date elem.
     *
     * @var DateTime|null
     */
    private $dateElem;

    /**
     * Memo1.
     *
     * @var string|null
     */
    private $memo1;

    /**
     * Texte1.
     *
     * @var string|null
     */
    private $texte1;

    /**
     * Type elem.
     *
     * @var string|null
     */
    private $typeElem;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the date1.
     *
     * @return DateTime|null Returns the date1.
     */
    public function getDate1(): ?DateTime {
        return $this->date1;
    }

    /**
     * Get the date elem.
     *
     * @return DateTime|null Returns the date elem.
     */
    public function getDateElem(): ?DateTime {
        return $this->dateElem;
    }

    /**
     * Get the memo1.
     *
     * @return string|null Returns the memo1.
     */
    public function getMemo1(): ?string {
        return $this->memo1;
    }

    /**
     * Get the texte1.
     *
     * @return string|null Returns the texte1.
     */
    public function getTexte1(): ?string {
        return $this->texte1;
    }

    /**
     * Get the type elem.
     *
     * @return string|null Returns the type elem.
     */
    public function getTypeElem(): ?string {
        return $this->typeElem;
    }

    /**
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
    }

    /**
     * Set the date1.
     *
     * @param DateTime|null $date1 The date1.
     * @return ElementsSupprimes Returns this Elements supprimes.
     */
    public function setDate1(?DateTime $date1): ElementsSupprimes {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * Set the date elem.
     *
     * @param DateTime|null $dateElem The date elem.
     * @return ElementsSupprimes Returns this Elements supprimes.
     */
    public function setDateElem(?DateTime $dateElem): ElementsSupprimes {
        $this->dateElem = $dateElem;
        return $this;
    }

    /**
     * Set the memo1.
     *
     * @param string|null $memo1 The memo1.
     * @return ElementsSupprimes Returns this Elements supprimes.
     */
    public function setMemo1(?string $memo1): ElementsSupprimes {
        $this->memo1 = $memo1;
        return $this;
    }

    /**
     * Set the texte1.
     *
     * @param string|null $texte1 The texte1.
     * @return ElementsSupprimes Returns this Elements supprimes.
     */
    public function setTexte1(?string $texte1): ElementsSupprimes {
        $this->texte1 = $texte1;
        return $this;
    }

    /**
     * Set the type elem.
     *
     * @param string|null $typeElem The type elem.
     * @return ElementsSupprimes Returns this Elements supprimes.
     */
    public function setTypeElem(?string $typeElem): ElementsSupprimes {
        $this->typeElem = $typeElem;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return ElementsSupprimes Returns this Elements supprimes.
     */
    public function setUniqId(?string $uniqId): ElementsSupprimes {
        $this->uniqId = $uniqId;
        return $this;
    }
}
