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
 * Entree sortie emp.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EntreeSortieEmp {

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code motif rupture.
     *
     * @var string|null
     */
    private $codeMotifRupture;

    /**
     * Date es.
     *
     * @var DateTime|null
     */
    private $dateEs;

    /**
     * Date fin periode essai.
     *
     * @var DateTime|null
     */
    private $dateFinPeriodeEssai;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date notification.
     *
     * @var DateTime|null
     */
    private $dateNotification;

    /**
     * Date renouv cdd1.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd1;

    /**
     * Date renouv cdd2.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd2;

    /**
     * Entreprise travail temp.
     *
     * @var string|null
     */
    private $entrepriseTravailTemp;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Transfert es.
     *
     * @var bool|null
     */
    private $transfertEs;

    /**
     * Travail temp.
     *
     * @var bool|null
     */
    private $travailTemp;

    /**
     * Type es.
     *
     * @var string|null
     */
    private $typeEs;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code motif rupture.
     *
     * @return string|null Returns the code motif rupture.
     */
    public function getCodeMotifRupture(): ?string {
        return $this->codeMotifRupture;
    }

    /**
     * Get the date es.
     *
     * @return DateTime|null Returns the date es.
     */
    public function getDateEs(): ?DateTime {
        return $this->dateEs;
    }

    /**
     * Get the date fin periode essai.
     *
     * @return DateTime|null Returns the date fin periode essai.
     */
    public function getDateFinPeriodeEssai(): ?DateTime {
        return $this->dateFinPeriodeEssai;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification(): ?DateTime {
        return $this->dateModification;
    }

    /**
     * Get the date notification.
     *
     * @return DateTime|null Returns the date notification.
     */
    public function getDateNotification(): ?DateTime {
        return $this->dateNotification;
    }

    /**
     * Get the date renouv cdd1.
     *
     * @return DateTime|null Returns the date renouv cdd1.
     */
    public function getDateRenouvCdd1(): ?DateTime {
        return $this->dateRenouvCdd1;
    }

    /**
     * Get the date renouv cdd2.
     *
     * @return DateTime|null Returns the date renouv cdd2.
     */
    public function getDateRenouvCdd2(): ?DateTime {
        return $this->dateRenouvCdd2;
    }

    /**
     * Get the entreprise travail temp.
     *
     * @return string|null Returns the entreprise travail temp.
     */
    public function getEntrepriseTravailTemp(): ?string {
        return $this->entrepriseTravailTemp;
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
     * Get the transfert es.
     *
     * @return bool|null Returns the transfert es.
     */
    public function getTransfertEs(): ?bool {
        return $this->transfertEs;
    }

    /**
     * Get the travail temp.
     *
     * @return bool|null Returns the travail temp.
     */
    public function getTravailTemp(): ?bool {
        return $this->travailTemp;
    }

    /**
     * Get the type es.
     *
     * @return string|null Returns the type es.
     */
    public function getTypeEs(): ?string {
        return $this->typeEs;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): EntreeSortieEmp {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string|null $codeMotifRupture The code motif rupture.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setCodeMotifRupture(?string $codeMotifRupture): EntreeSortieEmp {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }

    /**
     * Set the date es.
     *
     * @param DateTime|null $dateEs The date es.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setDateEs(?DateTime $dateEs): EntreeSortieEmp {
        $this->dateEs = $dateEs;
        return $this;
    }

    /**
     * Set the date fin periode essai.
     *
     * @param DateTime|null $dateFinPeriodeEssai The date fin periode essai.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setDateFinPeriodeEssai(?DateTime $dateFinPeriodeEssai): EntreeSortieEmp {
        $this->dateFinPeriodeEssai = $dateFinPeriodeEssai;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setDateModification(?DateTime $dateModification): EntreeSortieEmp {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date notification.
     *
     * @param DateTime|null $dateNotification The date notification.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setDateNotification(?DateTime $dateNotification): EntreeSortieEmp {
        $this->dateNotification = $dateNotification;
        return $this;
    }

    /**
     * Set the date renouv cdd1.
     *
     * @param DateTime|null $dateRenouvCdd1 The date renouv cdd1.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setDateRenouvCdd1(?DateTime $dateRenouvCdd1): EntreeSortieEmp {
        $this->dateRenouvCdd1 = $dateRenouvCdd1;
        return $this;
    }

    /**
     * Set the date renouv cdd2.
     *
     * @param DateTime|null $dateRenouvCdd2 The date renouv cdd2.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setDateRenouvCdd2(?DateTime $dateRenouvCdd2): EntreeSortieEmp {
        $this->dateRenouvCdd2 = $dateRenouvCdd2;
        return $this;
    }

    /**
     * Set the entreprise travail temp.
     *
     * @param string|null $entrepriseTravailTemp The entreprise travail temp.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setEntrepriseTravailTemp(?string $entrepriseTravailTemp): EntreeSortieEmp {
        $this->entrepriseTravailTemp = $entrepriseTravailTemp;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EntreeSortieEmp {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the transfert es.
     *
     * @param bool|null $transfertEs The transfert es.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setTransfertEs(?bool $transfertEs): EntreeSortieEmp {
        $this->transfertEs = $transfertEs;
        return $this;
    }

    /**
     * Set the travail temp.
     *
     * @param bool|null $travailTemp The travail temp.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setTravailTemp(?bool $travailTemp): EntreeSortieEmp {
        $this->travailTemp = $travailTemp;
        return $this;
    }

    /**
     * Set the type es.
     *
     * @param string|null $typeEs The type es.
     * @return EntreeSortieEmp Returns this Entree sortie emp.
     */
    public function setTypeEs(?string $typeEs): EntreeSortieEmp {
        $this->typeEs = $typeEs;
        return $this;
    }
}
