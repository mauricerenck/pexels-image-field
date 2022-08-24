<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Suivi activite.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class SuiviActivite {

    /**
     * Code coll.
     *
     * @var string|null
     */
    private $codeColl;

    /**
     * Date heure.
     *
     * @var DateTime|null
     */
    private $dateHeure;

    /**
     * Description.
     *
     * @var string|null
     */
    private $description;

    /**
     * Id action.
     *
     * @var int|null
     */
    private $idAction;

    /**
     * Resultat.
     *
     * @var string|null
     */
    private $resultat;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code coll.
     *
     * @return string|null Returns the code coll.
     */
    public function getCodeColl(): ?string {
        return $this->codeColl;
    }

    /**
     * Get the date heure.
     *
     * @return DateTime|null Returns the date heure.
     */
    public function getDateHeure(): ?DateTime {
        return $this->dateHeure;
    }

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Get the id action.
     *
     * @return int|null Returns the id action.
     */
    public function getIdAction(): ?int {
        return $this->idAction;
    }

    /**
     * Get the resultat.
     *
     * @return string|null Returns the resultat.
     */
    public function getResultat(): ?string {
        return $this->resultat;
    }

    /**
     * Set the code coll.
     *
     * @param string|null $codeColl The code coll.
     * @return SuiviActivite Returns this Suivi activite.
     */
    public function setCodeColl(?string $codeColl): SuiviActivite {
        $this->codeColl = $codeColl;
        return $this;
    }

    /**
     * Set the date heure.
     *
     * @param DateTime|null $dateHeure The date heure.
     * @return SuiviActivite Returns this Suivi activite.
     */
    public function setDateHeure(?DateTime $dateHeure): SuiviActivite {
        $this->dateHeure = $dateHeure;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return SuiviActivite Returns this Suivi activite.
     */
    public function setDescription(?string $description): SuiviActivite {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the id action.
     *
     * @param int|null $idAction The id action.
     * @return SuiviActivite Returns this Suivi activite.
     */
    public function setIdAction(?int $idAction): SuiviActivite {
        $this->idAction = $idAction;
        return $this;
    }

    /**
     * Set the resultat.
     *
     * @param string|null $resultat The resultat.
     * @return SuiviActivite Returns this Suivi activite.
     */
    public function setResultat(?string $resultat): SuiviActivite {
        $this->resultat = $resultat;
        return $this;
    }
}
