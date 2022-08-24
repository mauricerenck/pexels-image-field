<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

use DateTime;

/**
 * Dadsu prevoyance entete.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DadsuPrevoyanceEntete {

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Code periodicite.
     *
     * @var string|null
     */
    private $codePeriodicite;

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Date emission.
     *
     * @var DateTime|null
     */
    private $dateEmission;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Mail contact.
     *
     * @var string|null
     */
    private $mailContact;

    /**
     * Mois anniv.
     *
     * @var string|null
     */
    private $moisAnniv;

    /**
     * Nom contact.
     *
     * @var string|null
     */
    private $nomContact;

    /**
     * Tel contact.
     *
     * @var string|null
     */
    private $telContact;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code organisme.
     *
     * @return string|null Returns the code organisme.
     */
    public function getCodeOrganisme(): ?string {
        return $this->codeOrganisme;
    }

    /**
     * Get the code periodicite.
     *
     * @return string|null Returns the code periodicite.
     */
    public function getCodePeriodicite(): ?string {
        return $this->codePeriodicite;
    }

    /**
     * Get the date application.
     *
     * @return DateTime|null Returns the date application.
     */
    public function getDateApplication(): ?DateTime {
        return $this->dateApplication;
    }

    /**
     * Get the date emission.
     *
     * @return DateTime|null Returns the date emission.
     */
    public function getDateEmission(): ?DateTime {
        return $this->dateEmission;
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the mail contact.
     *
     * @return string|null Returns the mail contact.
     */
    public function getMailContact(): ?string {
        return $this->mailContact;
    }

    /**
     * Get the mois anniv.
     *
     * @return string|null Returns the mois anniv.
     */
    public function getMoisAnniv(): ?string {
        return $this->moisAnniv;
    }

    /**
     * Get the nom contact.
     *
     * @return string|null Returns the nom contact.
     */
    public function getNomContact(): ?string {
        return $this->nomContact;
    }

    /**
     * Get the tel contact.
     *
     * @return string|null Returns the tel contact.
     */
    public function getTelContact(): ?string {
        return $this->telContact;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return DadsuPrevoyanceEntete Returns this Dadsu prevoyance entete.
     */
    public function setCodeOrganisme(?string $codeOrganisme): DadsuPrevoyanceEntete {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code periodicite.
     *
     * @param string|null $codePeriodicite The code periodicite.
     * @return DadsuPrevoyanceEntete Returns this Dadsu prevoyance entete.
     */
    public function setCodePeriodicite(?string $codePeriodicite): DadsuPrevoyanceEntete {
        $this->codePeriodicite = $codePeriodicite;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return DadsuPrevoyanceEntete Returns this Dadsu prevoyance entete.
     */
    public function setDateApplication(?DateTime $dateApplication): DadsuPrevoyanceEntete {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the date emission.
     *
     * @param DateTime|null $dateEmission The date emission.
     * @return DadsuPrevoyanceEntete Returns this Dadsu prevoyance entete.
     */
    public function setDateEmission(?DateTime $dateEmission): DadsuPrevoyanceEntete {
        $this->dateEmission = $dateEmission;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return DadsuPrevoyanceEntete Returns this Dadsu prevoyance entete.
     */
    public function setIntitule(?string $intitule): DadsuPrevoyanceEntete {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the mail contact.
     *
     * @param string|null $mailContact The mail contact.
     * @return DadsuPrevoyanceEntete Returns this Dadsu prevoyance entete.
     */
    public function setMailContact(?string $mailContact): DadsuPrevoyanceEntete {
        $this->mailContact = $mailContact;
        return $this;
    }

    /**
     * Set the mois anniv.
     *
     * @param string|null $moisAnniv The mois anniv.
     * @return DadsuPrevoyanceEntete Returns this Dadsu prevoyance entete.
     */
    public function setMoisAnniv(?string $moisAnniv): DadsuPrevoyanceEntete {
        $this->moisAnniv = $moisAnniv;
        return $this;
    }

    /**
     * Set the nom contact.
     *
     * @param string|null $nomContact The nom contact.
     * @return DadsuPrevoyanceEntete Returns this Dadsu prevoyance entete.
     */
    public function setNomContact(?string $nomContact): DadsuPrevoyanceEntete {
        $this->nomContact = $nomContact;
        return $this;
    }

    /**
     * Set the tel contact.
     *
     * @param string|null $telContact The tel contact.
     * @return DadsuPrevoyanceEntete Returns this Dadsu prevoyance entete.
     */
    public function setTelContact(?string $telContact): DadsuPrevoyanceEntete {
        $this->telContact = $telContact;
        return $this;
    }
}
