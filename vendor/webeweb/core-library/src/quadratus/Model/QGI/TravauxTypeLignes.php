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
 * Travaux type lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class TravauxTypeLignes {

    /**
     * Code repartition.
     *
     * @var string|null
     */
    private $codeRepartition;

    /**
     * Code travail.
     *
     * @var string|null
     */
    private $codeTravail;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Nb uo.
     *
     * @var float|null
     */
    private $nbUo;

    /**
     * Niveau ligne.
     *
     * @var string|null
     */
    private $niveauLigne;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Police.
     *
     * @var string|null
     */
    private $police;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code repartition.
     *
     * @return string|null Returns the code repartition.
     */
    public function getCodeRepartition(): ?string {
        return $this->codeRepartition;
    }

    /**
     * Get the code travail.
     *
     * @return string|null Returns the code travail.
     */
    public function getCodeTravail(): ?string {
        return $this->codeTravail;
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
     * Get the nb uo.
     *
     * @return float|null Returns the nb uo.
     */
    public function getNbUo(): ?float {
        return $this->nbUo;
    }

    /**
     * Get the niveau ligne.
     *
     * @return string|null Returns the niveau ligne.
     */
    public function getNiveauLigne(): ?string {
        return $this->niveauLigne;
    }

    /**
     * Get the numero ligne.
     *
     * @return int|null Returns the numero ligne.
     */
    public function getNumeroLigne(): ?int {
        return $this->numeroLigne;
    }

    /**
     * Get the police.
     *
     * @return string|null Returns the police.
     */
    public function getPolice(): ?string {
        return $this->police;
    }

    /**
     * Set the code repartition.
     *
     * @param string|null $codeRepartition The code repartition.
     * @return TravauxTypeLignes Returns this Travaux type lignes.
     */
    public function setCodeRepartition(?string $codeRepartition): TravauxTypeLignes {
        $this->codeRepartition = $codeRepartition;
        return $this;
    }

    /**
     * Set the code travail.
     *
     * @param string|null $codeTravail The code travail.
     * @return TravauxTypeLignes Returns this Travaux type lignes.
     */
    public function setCodeTravail(?string $codeTravail): TravauxTypeLignes {
        $this->codeTravail = $codeTravail;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return TravauxTypeLignes Returns this Travaux type lignes.
     */
    public function setLibelle(?string $libelle): TravauxTypeLignes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the nb uo.
     *
     * @param float|null $nbUo The nb uo.
     * @return TravauxTypeLignes Returns this Travaux type lignes.
     */
    public function setNbUo(?float $nbUo): TravauxTypeLignes {
        $this->nbUo = $nbUo;
        return $this;
    }

    /**
     * Set the niveau ligne.
     *
     * @param string|null $niveauLigne The niveau ligne.
     * @return TravauxTypeLignes Returns this Travaux type lignes.
     */
    public function setNiveauLigne(?string $niveauLigne): TravauxTypeLignes {
        $this->niveauLigne = $niveauLigne;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return TravauxTypeLignes Returns this Travaux type lignes.
     */
    public function setNumeroLigne(?int $numeroLigne): TravauxTypeLignes {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the police.
     *
     * @param string|null $police The police.
     * @return TravauxTypeLignes Returns this Travaux type lignes.
     */
    public function setPolice(?string $police): TravauxTypeLignes {
        $this->police = $police;
        return $this;
    }
}
