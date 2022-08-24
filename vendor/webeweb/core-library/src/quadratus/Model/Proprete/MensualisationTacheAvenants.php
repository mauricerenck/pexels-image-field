<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

use DateTime;

/**
 * Mensualisation tache avenants.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class MensualisationTacheAvenants {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Histo mens saisi.
     *
     * @var bool|null
     */
    private $histoMensSaisi;

    /**
     * Mensualisation calculee.
     *
     * @var float|null
     */
    private $mensualisationCalculee;

    /**
     * Mensualisation saisie.
     *
     * @var float|null
     */
    private $mensualisationSaisie;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Numero avenant.
     *
     * @var int|null
     */
    private $numeroAvenant;

    /**
     * Periode debut validite.
     *
     * @var DateTime|null
     */
    private $periodeDebutValidite;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
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
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the histo mens saisi.
     *
     * @return bool|null Returns the histo mens saisi.
     */
    public function getHistoMensSaisi(): ?bool {
        return $this->histoMensSaisi;
    }

    /**
     * Get the mensualisation calculee.
     *
     * @return float|null Returns the mensualisation calculee.
     */
    public function getMensualisationCalculee(): ?float {
        return $this->mensualisationCalculee;
    }

    /**
     * Get the mensualisation saisie.
     *
     * @return float|null Returns the mensualisation saisie.
     */
    public function getMensualisationSaisie(): ?float {
        return $this->mensualisationSaisie;
    }

    /**
     * Get the num bt.
     *
     * @return int|null Returns the num bt.
     */
    public function getNumBt(): ?int {
        return $this->numBt;
    }

    /**
     * Get the numero avenant.
     *
     * @return int|null Returns the numero avenant.
     */
    public function getNumeroAvenant(): ?int {
        return $this->numeroAvenant;
    }

    /**
     * Get the periode debut validite.
     *
     * @return DateTime|null Returns the periode debut validite.
     */
    public function getPeriodeDebutValidite(): ?DateTime {
        return $this->periodeDebutValidite;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return MensualisationTacheAvenants Returns this Mensualisation tache avenants.
     */
    public function setCodeAffaire(?string $codeAffaire): MensualisationTacheAvenants {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return MensualisationTacheAvenants Returns this Mensualisation tache avenants.
     */
    public function setCodeChantier(?string $codeChantier): MensualisationTacheAvenants {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return MensualisationTacheAvenants Returns this Mensualisation tache avenants.
     */
    public function setCodeClient(?string $codeClient): MensualisationTacheAvenants {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return MensualisationTacheAvenants Returns this Mensualisation tache avenants.
     */
    public function setCodeEmploye(?string $codeEmploye): MensualisationTacheAvenants {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return MensualisationTacheAvenants Returns this Mensualisation tache avenants.
     */
    public function setCodeTache(?string $codeTache): MensualisationTacheAvenants {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the histo mens saisi.
     *
     * @param bool|null $histoMensSaisi The histo mens saisi.
     * @return MensualisationTacheAvenants Returns this Mensualisation tache avenants.
     */
    public function setHistoMensSaisi(?bool $histoMensSaisi): MensualisationTacheAvenants {
        $this->histoMensSaisi = $histoMensSaisi;
        return $this;
    }

    /**
     * Set the mensualisation calculee.
     *
     * @param float|null $mensualisationCalculee The mensualisation calculee.
     * @return MensualisationTacheAvenants Returns this Mensualisation tache avenants.
     */
    public function setMensualisationCalculee(?float $mensualisationCalculee): MensualisationTacheAvenants {
        $this->mensualisationCalculee = $mensualisationCalculee;
        return $this;
    }

    /**
     * Set the mensualisation saisie.
     *
     * @param float|null $mensualisationSaisie The mensualisation saisie.
     * @return MensualisationTacheAvenants Returns this Mensualisation tache avenants.
     */
    public function setMensualisationSaisie(?float $mensualisationSaisie): MensualisationTacheAvenants {
        $this->mensualisationSaisie = $mensualisationSaisie;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return MensualisationTacheAvenants Returns this Mensualisation tache avenants.
     */
    public function setNumBt(?int $numBt): MensualisationTacheAvenants {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int|null $numeroAvenant The numero avenant.
     * @return MensualisationTacheAvenants Returns this Mensualisation tache avenants.
     */
    public function setNumeroAvenant(?int $numeroAvenant): MensualisationTacheAvenants {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the periode debut validite.
     *
     * @param DateTime|null $periodeDebutValidite The periode debut validite.
     * @return MensualisationTacheAvenants Returns this Mensualisation tache avenants.
     */
    public function setPeriodeDebutValidite(?DateTime $periodeDebutValidite): MensualisationTacheAvenants {
        $this->periodeDebutValidite = $periodeDebutValidite;
        return $this;
    }
}
