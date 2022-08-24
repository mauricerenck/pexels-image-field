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
 * Enfants.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Enfants {

    /**
     * A charge.
     *
     * @var bool|null
     */
    private $aCharge;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Sexe.
     *
     * @var string|null
     */
    private $sexe;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a charge.
     *
     * @return bool|null Returns the a charge.
     */
    public function getACharge(): ?bool {
        return $this->aCharge;
    }

    /**
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance(): ?DateTime {
        return $this->dateNaissance;
    }

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getNom(): ?string {
        return $this->nom;
    }

    /**
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
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
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getPrenom(): ?string {
        return $this->prenom;
    }

    /**
     * Get the sexe.
     *
     * @return string|null Returns the sexe.
     */
    public function getSexe(): ?string {
        return $this->sexe;
    }

    /**
     * Set the a charge.
     *
     * @param bool|null $aCharge The a charge.
     * @return Enfants Returns this Enfants.
     */
    public function setACharge(?bool $aCharge): Enfants {
        $this->aCharge = $aCharge;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     * @return Enfants Returns this Enfants.
     */
    public function setDateNaissance(?DateTime $dateNaissance): Enfants {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return Enfants Returns this Enfants.
     */
    public function setNom(?string $nom): Enfants {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return Enfants Returns this Enfants.
     */
    public function setNumLigne(?int $numLigne): Enfants {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return Enfants Returns this Enfants.
     */
    public function setNumeroEmploye(?string $numeroEmploye): Enfants {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return Enfants Returns this Enfants.
     */
    public function setPrenom(?string $prenom): Enfants {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the sexe.
     *
     * @param string|null $sexe The sexe.
     * @return Enfants Returns this Enfants.
     */
    public function setSexe(?string $sexe): Enfants {
        $this->sexe = $sexe;
        return $this;
    }
}
