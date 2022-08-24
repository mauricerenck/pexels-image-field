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
 * Dadsubtp.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Dadsubtp {

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Code temps arret.
     *
     * @var string|null
     */
    private $codeTempsArret;

    /**
     * Debut periode.
     *
     * @var DateTime|null
     */
    private $debutPeriode;

    /**
     * Fin periode.
     *
     * @var DateTime|null
     */
    private $finPeriode;

    /**
     * Montant employeur.
     *
     * @var float|null
     */
    private $montantEmployeur;

    /**
     * Numero.
     *
     * @var string|null
     */
    private $numero;

    /**
     * Numero ordre.
     *
     * @var int|null
     */
    private $numeroOrdre;

    /**
     * Qualif unite temps.
     *
     * @var string|null
     */
    private $qualifUniteTemps;

    /**
     * Temps arret.
     *
     * @var float|null
     */
    private $tempsArret;

    /**
     * Type arret.
     *
     * @var string|null
     */
    private $typeArret;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
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
     * Get the code temps arret.
     *
     * @return string|null Returns the code temps arret.
     */
    public function getCodeTempsArret(): ?string {
        return $this->codeTempsArret;
    }

    /**
     * Get the debut periode.
     *
     * @return DateTime|null Returns the debut periode.
     */
    public function getDebutPeriode(): ?DateTime {
        return $this->debutPeriode;
    }

    /**
     * Get the fin periode.
     *
     * @return DateTime|null Returns the fin periode.
     */
    public function getFinPeriode(): ?DateTime {
        return $this->finPeriode;
    }

    /**
     * Get the montant employeur.
     *
     * @return float|null Returns the montant employeur.
     */
    public function getMontantEmployeur(): ?float {
        return $this->montantEmployeur;
    }

    /**
     * Get the numero.
     *
     * @return string|null Returns the numero.
     */
    public function getNumero(): ?string {
        return $this->numero;
    }

    /**
     * Get the numero ordre.
     *
     * @return int|null Returns the numero ordre.
     */
    public function getNumeroOrdre(): ?int {
        return $this->numeroOrdre;
    }

    /**
     * Get the qualif unite temps.
     *
     * @return string|null Returns the qualif unite temps.
     */
    public function getQualifUniteTemps(): ?string {
        return $this->qualifUniteTemps;
    }

    /**
     * Get the temps arret.
     *
     * @return float|null Returns the temps arret.
     */
    public function getTempsArret(): ?float {
        return $this->tempsArret;
    }

    /**
     * Get the type arret.
     *
     * @return string|null Returns the type arret.
     */
    public function getTypeArret(): ?string {
        return $this->typeArret;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return Dadsubtp Returns this Dadsubtp.
     */
    public function setCodeEtablissement(?int $codeEtablissement): Dadsubtp {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return Dadsubtp Returns this Dadsubtp.
     */
    public function setCodeOrganisme(?string $codeOrganisme): Dadsubtp {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code temps arret.
     *
     * @param string|null $codeTempsArret The code temps arret.
     * @return Dadsubtp Returns this Dadsubtp.
     */
    public function setCodeTempsArret(?string $codeTempsArret): Dadsubtp {
        $this->codeTempsArret = $codeTempsArret;
        return $this;
    }

    /**
     * Set the debut periode.
     *
     * @param DateTime|null $debutPeriode The debut periode.
     * @return Dadsubtp Returns this Dadsubtp.
     */
    public function setDebutPeriode(?DateTime $debutPeriode): Dadsubtp {
        $this->debutPeriode = $debutPeriode;
        return $this;
    }

    /**
     * Set the fin periode.
     *
     * @param DateTime|null $finPeriode The fin periode.
     * @return Dadsubtp Returns this Dadsubtp.
     */
    public function setFinPeriode(?DateTime $finPeriode): Dadsubtp {
        $this->finPeriode = $finPeriode;
        return $this;
    }

    /**
     * Set the montant employeur.
     *
     * @param float|null $montantEmployeur The montant employeur.
     * @return Dadsubtp Returns this Dadsubtp.
     */
    public function setMontantEmployeur(?float $montantEmployeur): Dadsubtp {
        $this->montantEmployeur = $montantEmployeur;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return Dadsubtp Returns this Dadsubtp.
     */
    public function setNumero(?string $numero): Dadsubtp {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int|null $numeroOrdre The numero ordre.
     * @return Dadsubtp Returns this Dadsubtp.
     */
    public function setNumeroOrdre(?int $numeroOrdre): Dadsubtp {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the qualif unite temps.
     *
     * @param string|null $qualifUniteTemps The qualif unite temps.
     * @return Dadsubtp Returns this Dadsubtp.
     */
    public function setQualifUniteTemps(?string $qualifUniteTemps): Dadsubtp {
        $this->qualifUniteTemps = $qualifUniteTemps;
        return $this;
    }

    /**
     * Set the temps arret.
     *
     * @param float|null $tempsArret The temps arret.
     * @return Dadsubtp Returns this Dadsubtp.
     */
    public function setTempsArret(?float $tempsArret): Dadsubtp {
        $this->tempsArret = $tempsArret;
        return $this;
    }

    /**
     * Set the type arret.
     *
     * @param string|null $typeArret The type arret.
     * @return Dadsubtp Returns this Dadsubtp.
     */
    public function setTypeArret(?string $typeArret): Dadsubtp {
        $this->typeArret = $typeArret;
        return $this;
    }
}
