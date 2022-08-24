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
 * Emp dadsu prevoyance evenements.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyanceEvenements {

    /**
     * A declarer dsn.
     *
     * @var bool|null
     */
    private $aDeclarerDsn;

    /**
     * Code evenement.
     *
     * @var string|null
     */
    private $codeEvenement;

    /**
     * Code option.
     *
     * @var string|null
     */
    private $codeOption;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Code population.
     *
     * @var string|null
     */
    private $codePopulation;

    /**
     * Date evenement.
     *
     * @var DateTime|null
     */
    private $dateEvenement;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Ref contrat.
     *
     * @var string|null
     */
    private $refContrat;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a declarer dsn.
     *
     * @return bool|null Returns the a declarer dsn.
     */
    public function getADeclarerDsn(): ?bool {
        return $this->aDeclarerDsn;
    }

    /**
     * Get the code evenement.
     *
     * @return string|null Returns the code evenement.
     */
    public function getCodeEvenement(): ?string {
        return $this->codeEvenement;
    }

    /**
     * Get the code option.
     *
     * @return string|null Returns the code option.
     */
    public function getCodeOption(): ?string {
        return $this->codeOption;
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
     * Get the code population.
     *
     * @return string|null Returns the code population.
     */
    public function getCodePopulation(): ?string {
        return $this->codePopulation;
    }

    /**
     * Get the date evenement.
     *
     * @return DateTime|null Returns the date evenement.
     */
    public function getDateEvenement(): ?DateTime {
        return $this->dateEvenement;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the ref contrat.
     *
     * @return string|null Returns the ref contrat.
     */
    public function getRefContrat(): ?string {
        return $this->refContrat;
    }

    /**
     * Set the a declarer dsn.
     *
     * @param bool|null $aDeclarerDsn The a declarer dsn.
     * @return EmpDadsuPrevoyanceEvenements Returns this Emp dadsu prevoyance evenements.
     */
    public function setADeclarerDsn(?bool $aDeclarerDsn): EmpDadsuPrevoyanceEvenements {
        $this->aDeclarerDsn = $aDeclarerDsn;
        return $this;
    }

    /**
     * Set the code evenement.
     *
     * @param string|null $codeEvenement The code evenement.
     * @return EmpDadsuPrevoyanceEvenements Returns this Emp dadsu prevoyance evenements.
     */
    public function setCodeEvenement(?string $codeEvenement): EmpDadsuPrevoyanceEvenements {
        $this->codeEvenement = $codeEvenement;
        return $this;
    }

    /**
     * Set the code option.
     *
     * @param string|null $codeOption The code option.
     * @return EmpDadsuPrevoyanceEvenements Returns this Emp dadsu prevoyance evenements.
     */
    public function setCodeOption(?string $codeOption): EmpDadsuPrevoyanceEvenements {
        $this->codeOption = $codeOption;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return EmpDadsuPrevoyanceEvenements Returns this Emp dadsu prevoyance evenements.
     */
    public function setCodeOrganisme(?string $codeOrganisme): EmpDadsuPrevoyanceEvenements {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code population.
     *
     * @param string|null $codePopulation The code population.
     * @return EmpDadsuPrevoyanceEvenements Returns this Emp dadsu prevoyance evenements.
     */
    public function setCodePopulation(?string $codePopulation): EmpDadsuPrevoyanceEvenements {
        $this->codePopulation = $codePopulation;
        return $this;
    }

    /**
     * Set the date evenement.
     *
     * @param DateTime|null $dateEvenement The date evenement.
     * @return EmpDadsuPrevoyanceEvenements Returns this Emp dadsu prevoyance evenements.
     */
    public function setDateEvenement(?DateTime $dateEvenement): EmpDadsuPrevoyanceEvenements {
        $this->dateEvenement = $dateEvenement;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmpDadsuPrevoyanceEvenements Returns this Emp dadsu prevoyance evenements.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmpDadsuPrevoyanceEvenements {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string|null $refContrat The ref contrat.
     * @return EmpDadsuPrevoyanceEvenements Returns this Emp dadsu prevoyance evenements.
     */
    public function setRefContrat(?string $refContrat): EmpDadsuPrevoyanceEvenements {
        $this->refContrat = $refContrat;
        return $this;
    }
}
