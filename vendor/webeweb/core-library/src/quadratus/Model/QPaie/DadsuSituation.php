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
 * Dadsu situation.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DadsuSituation {

    /**
     * Code debut periode.
     *
     * @var string|null
     */
    private $codeDebutPeriode;

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
     * Date ctrl norme.
     *
     * @var DateTime|null
     */
    private $dateCtrlNorme;

    /**
     * Debut periode.
     *
     * @var DateTime|null
     */
    private $debutPeriode;

    /**
     * Depuis calcul.
     *
     * @var bool|null
     */
    private $depuisCalcul;

    /**
     * Etat ctrl norme.
     *
     * @var string|null
     */
    private $etatCtrlNorme;

    /**
     * Fin periode.
     *
     * @var DateTime|null
     */
    private $finPeriode;

    /**
     * Montant1.
     *
     * @var float|null
     */
    private $montant1;

    /**
     * Montant2.
     *
     * @var float|null
     */
    private $montant2;

    /**
     * Montant employeur.
     *
     * @var float|null
     */
    private $montantEmployeur;

    /**
     * Motif situation.
     *
     * @var string|null
     */
    private $motifSituation;

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
     * Type base.
     *
     * @var string|null
     */
    private $typeBase;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code debut periode.
     *
     * @return string|null Returns the code debut periode.
     */
    public function getCodeDebutPeriode(): ?string {
        return $this->codeDebutPeriode;
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
     * Get the date ctrl norme.
     *
     * @return DateTime|null Returns the date ctrl norme.
     */
    public function getDateCtrlNorme(): ?DateTime {
        return $this->dateCtrlNorme;
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
     * Get the depuis calcul.
     *
     * @return bool|null Returns the depuis calcul.
     */
    public function getDepuisCalcul(): ?bool {
        return $this->depuisCalcul;
    }

    /**
     * Get the etat ctrl norme.
     *
     * @return string|null Returns the etat ctrl norme.
     */
    public function getEtatCtrlNorme(): ?string {
        return $this->etatCtrlNorme;
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
     * Get the montant1.
     *
     * @return float|null Returns the montant1.
     */
    public function getMontant1(): ?float {
        return $this->montant1;
    }

    /**
     * Get the montant2.
     *
     * @return float|null Returns the montant2.
     */
    public function getMontant2(): ?float {
        return $this->montant2;
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
     * Get the motif situation.
     *
     * @return string|null Returns the motif situation.
     */
    public function getMotifSituation(): ?string {
        return $this->motifSituation;
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
     * Get the type base.
     *
     * @return string|null Returns the type base.
     */
    public function getTypeBase(): ?string {
        return $this->typeBase;
    }

    /**
     * Set the code debut periode.
     *
     * @param string|null $codeDebutPeriode The code debut periode.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setCodeDebutPeriode(?string $codeDebutPeriode): DadsuSituation {
        $this->codeDebutPeriode = $codeDebutPeriode;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setCodeOrganisme(?string $codeOrganisme): DadsuSituation {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code temps arret.
     *
     * @param string|null $codeTempsArret The code temps arret.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setCodeTempsArret(?string $codeTempsArret): DadsuSituation {
        $this->codeTempsArret = $codeTempsArret;
        return $this;
    }

    /**
     * Set the date ctrl norme.
     *
     * @param DateTime|null $dateCtrlNorme The date ctrl norme.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setDateCtrlNorme(?DateTime $dateCtrlNorme): DadsuSituation {
        $this->dateCtrlNorme = $dateCtrlNorme;
        return $this;
    }

    /**
     * Set the debut periode.
     *
     * @param DateTime|null $debutPeriode The debut periode.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setDebutPeriode(?DateTime $debutPeriode): DadsuSituation {
        $this->debutPeriode = $debutPeriode;
        return $this;
    }

    /**
     * Set the depuis calcul.
     *
     * @param bool|null $depuisCalcul The depuis calcul.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setDepuisCalcul(?bool $depuisCalcul): DadsuSituation {
        $this->depuisCalcul = $depuisCalcul;
        return $this;
    }

    /**
     * Set the etat ctrl norme.
     *
     * @param string|null $etatCtrlNorme The etat ctrl norme.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setEtatCtrlNorme(?string $etatCtrlNorme): DadsuSituation {
        $this->etatCtrlNorme = $etatCtrlNorme;
        return $this;
    }

    /**
     * Set the fin periode.
     *
     * @param DateTime|null $finPeriode The fin periode.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setFinPeriode(?DateTime $finPeriode): DadsuSituation {
        $this->finPeriode = $finPeriode;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float|null $montant1 The montant1.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setMontant1(?float $montant1): DadsuSituation {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float|null $montant2 The montant2.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setMontant2(?float $montant2): DadsuSituation {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant employeur.
     *
     * @param float|null $montantEmployeur The montant employeur.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setMontantEmployeur(?float $montantEmployeur): DadsuSituation {
        $this->montantEmployeur = $montantEmployeur;
        return $this;
    }

    /**
     * Set the motif situation.
     *
     * @param string|null $motifSituation The motif situation.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setMotifSituation(?string $motifSituation): DadsuSituation {
        $this->motifSituation = $motifSituation;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setNumero(?string $numero): DadsuSituation {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int|null $numeroOrdre The numero ordre.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setNumeroOrdre(?int $numeroOrdre): DadsuSituation {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the qualif unite temps.
     *
     * @param string|null $qualifUniteTemps The qualif unite temps.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setQualifUniteTemps(?string $qualifUniteTemps): DadsuSituation {
        $this->qualifUniteTemps = $qualifUniteTemps;
        return $this;
    }

    /**
     * Set the temps arret.
     *
     * @param float|null $tempsArret The temps arret.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setTempsArret(?float $tempsArret): DadsuSituation {
        $this->tempsArret = $tempsArret;
        return $this;
    }

    /**
     * Set the type base.
     *
     * @param string|null $typeBase The type base.
     * @return DadsuSituation Returns this Dadsu situation.
     */
    public function setTypeBase(?string $typeBase): DadsuSituation {
        $this->typeBase = $typeBase;
        return $this;
    }
}
