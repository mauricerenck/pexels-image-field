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
 * Acomptes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Acomptes {

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code user.
     *
     * @var string|null
     */
    private $codeUser;

    /**
     * Conges payes.
     *
     * @var bool|null
     */
    private $congesPayes;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Date added.
     *
     * @var DateTime|null
     */
    private $dateAdded;

    /**
     * Date added coll.
     *
     * @var DateTime|null
     */
    private $dateAddedColl;

    /**
     * En euro.
     *
     * @var bool|null
     */
    private $enEuro;

    /**
     * In bul.
     *
     * @var bool|null
     */
    private $inBul;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Num uniq.
     *
     * @var int|null
     */
    private $numUniq;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Paye.
     *
     * @var bool|null
     */
    private $paye;

    /**
     * Type paiement.
     *
     * @var string|null
     */
    private $typePaiement;

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
     * Get the code user.
     *
     * @return string|null Returns the code user.
     */
    public function getCodeUser(): ?string {
        return $this->codeUser;
    }

    /**
     * Get the conges payes.
     *
     * @return bool|null Returns the conges payes.
     */
    public function getCongesPayes(): ?bool {
        return $this->congesPayes;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Get the date added.
     *
     * @return DateTime|null Returns the date added.
     */
    public function getDateAdded(): ?DateTime {
        return $this->dateAdded;
    }

    /**
     * Get the date added coll.
     *
     * @return DateTime|null Returns the date added coll.
     */
    public function getDateAddedColl(): ?DateTime {
        return $this->dateAddedColl;
    }

    /**
     * Get the en euro.
     *
     * @return bool|null Returns the en euro.
     */
    public function getEnEuro(): ?bool {
        return $this->enEuro;
    }

    /**
     * Get the in bul.
     *
     * @return bool|null Returns the in bul.
     */
    public function getInBul(): ?bool {
        return $this->inBul;
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
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
    }

    /**
     * Get the num uniq.
     *
     * @return int|null Returns the num uniq.
     */
    public function getNumUniq(): ?int {
        return $this->numUniq;
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
     * Get the paye.
     *
     * @return bool|null Returns the paye.
     */
    public function getPaye(): ?bool {
        return $this->paye;
    }

    /**
     * Get the type paiement.
     *
     * @return string|null Returns the type paiement.
     */
    public function getTypePaiement(): ?string {
        return $this->typePaiement;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return Acomptes Returns this Acomptes.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): Acomptes {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string|null $codeUser The code user.
     * @return Acomptes Returns this Acomptes.
     */
    public function setCodeUser(?string $codeUser): Acomptes {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the conges payes.
     *
     * @param bool|null $congesPayes The conges payes.
     * @return Acomptes Returns this Acomptes.
     */
    public function setCongesPayes(?bool $congesPayes): Acomptes {
        $this->congesPayes = $congesPayes;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return Acomptes Returns this Acomptes.
     */
    public function setDate(?DateTime $date): Acomptes {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the date added.
     *
     * @param DateTime|null $dateAdded The date added.
     * @return Acomptes Returns this Acomptes.
     */
    public function setDateAdded(?DateTime $dateAdded): Acomptes {
        $this->dateAdded = $dateAdded;
        return $this;
    }

    /**
     * Set the date added coll.
     *
     * @param DateTime|null $dateAddedColl The date added coll.
     * @return Acomptes Returns this Acomptes.
     */
    public function setDateAddedColl(?DateTime $dateAddedColl): Acomptes {
        $this->dateAddedColl = $dateAddedColl;
        return $this;
    }

    /**
     * Set the en euro.
     *
     * @param bool|null $enEuro The en euro.
     * @return Acomptes Returns this Acomptes.
     */
    public function setEnEuro(?bool $enEuro): Acomptes {
        $this->enEuro = $enEuro;
        return $this;
    }

    /**
     * Set the in bul.
     *
     * @param bool|null $inBul The in bul.
     * @return Acomptes Returns this Acomptes.
     */
    public function setInBul(?bool $inBul): Acomptes {
        $this->inBul = $inBul;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Acomptes Returns this Acomptes.
     */
    public function setIntitule(?string $intitule): Acomptes {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return Acomptes Returns this Acomptes.
     */
    public function setMontant(?float $montant): Acomptes {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int|null $numUniq The num uniq.
     * @return Acomptes Returns this Acomptes.
     */
    public function setNumUniq(?int $numUniq): Acomptes {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return Acomptes Returns this Acomptes.
     */
    public function setNumeroEmploye(?string $numeroEmploye): Acomptes {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the paye.
     *
     * @param bool|null $paye The paye.
     * @return Acomptes Returns this Acomptes.
     */
    public function setPaye(?bool $paye): Acomptes {
        $this->paye = $paye;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string|null $typePaiement The type paiement.
     * @return Acomptes Returns this Acomptes.
     */
    public function setTypePaiement(?string $typePaiement): Acomptes {
        $this->typePaiement = $typePaiement;
        return $this;
    }
}
