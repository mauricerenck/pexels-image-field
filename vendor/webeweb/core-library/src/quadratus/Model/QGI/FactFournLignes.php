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

/**
 * Fact fourn lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class FactFournLignes {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code mission.
     *
     * @var string|null
     */
    private $codeMission;

    /**
     * Collaborateur.
     *
     * @var string|null
     */
    private $collaborateur;

    /**
     * Compte.
     *
     * @var string|null
     */
    private $compte;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Montant credit.
     *
     * @var float|null
     */
    private $montantCredit;

    /**
     * Montant debit.
     *
     * @var float|null
     */
    private $montantDebit;

    /**
     * Num entete.
     *
     * @var string|null
     */
    private $numEntete;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code mission.
     *
     * @return string|null Returns the code mission.
     */
    public function getCodeMission(): ?string {
        return $this->codeMission;
    }

    /**
     * Get the collaborateur.
     *
     * @return string|null Returns the collaborateur.
     */
    public function getCollaborateur(): ?string {
        return $this->collaborateur;
    }

    /**
     * Get the compte.
     *
     * @return string|null Returns the compte.
     */
    public function getCompte(): ?string {
        return $this->compte;
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the montant credit.
     *
     * @return float|null Returns the montant credit.
     */
    public function getMontantCredit(): ?float {
        return $this->montantCredit;
    }

    /**
     * Get the montant debit.
     *
     * @return float|null Returns the montant debit.
     */
    public function getMontantDebit(): ?float {
        return $this->montantDebit;
    }

    /**
     * Get the num entete.
     *
     * @return string|null Returns the num entete.
     */
    public function getNumEntete(): ?string {
        return $this->numEntete;
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
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setCodeClient(?string $codeClient): FactFournLignes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setCodeMission(?string $codeMission): FactFournLignes {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the collaborateur.
     *
     * @param string|null $collaborateur The collaborateur.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setCollaborateur(?string $collaborateur): FactFournLignes {
        $this->collaborateur = $collaborateur;
        return $this;
    }

    /**
     * Set the compte.
     *
     * @param string|null $compte The compte.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setCompte(?string $compte): FactFournLignes {
        $this->compte = $compte;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setLibelle(?string $libelle): FactFournLignes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant credit.
     *
     * @param float|null $montantCredit The montant credit.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setMontantCredit(?float $montantCredit): FactFournLignes {
        $this->montantCredit = $montantCredit;
        return $this;
    }

    /**
     * Set the montant debit.
     *
     * @param float|null $montantDebit The montant debit.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setMontantDebit(?float $montantDebit): FactFournLignes {
        $this->montantDebit = $montantDebit;
        return $this;
    }

    /**
     * Set the num entete.
     *
     * @param string|null $numEntete The num entete.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setNumEntete(?string $numEntete): FactFournLignes {
        $this->numEntete = $numEntete;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setNumLigne(?int $numLigne): FactFournLignes {
        $this->numLigne = $numLigne;
        return $this;
    }
}
