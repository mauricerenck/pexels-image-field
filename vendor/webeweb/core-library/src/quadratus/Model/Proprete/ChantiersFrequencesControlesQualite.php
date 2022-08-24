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

/**
 * Chantiers frequences controles qualite.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ChantiersFrequencesControlesQualite {

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
     * Jour.
     *
     * @var string|null
     */
    private $jour;

    /**
     * Mois.
     *
     * @var string|null
     */
    private $mois;

    /**
     * Numero freq.
     *
     * @var int|null
     */
    private $numeroFreq;

    /**
     * Que premiere annee.
     *
     * @var bool|null
     */
    private $quePremiereAnnee;

    /**
     * Type controle.
     *
     * @var string|null
     */
    private $typeControle;

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
     * Get the jour.
     *
     * @return string|null Returns the jour.
     */
    public function getJour(): ?string {
        return $this->jour;
    }

    /**
     * Get the mois.
     *
     * @return string|null Returns the mois.
     */
    public function getMois(): ?string {
        return $this->mois;
    }

    /**
     * Get the numero freq.
     *
     * @return int|null Returns the numero freq.
     */
    public function getNumeroFreq(): ?int {
        return $this->numeroFreq;
    }

    /**
     * Get the que premiere annee.
     *
     * @return bool|null Returns the que premiere annee.
     */
    public function getQuePremiereAnnee(): ?bool {
        return $this->quePremiereAnnee;
    }

    /**
     * Get the type controle.
     *
     * @return string|null Returns the type controle.
     */
    public function getTypeControle(): ?string {
        return $this->typeControle;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return ChantiersFrequencesControlesQualite Returns this Chantiers frequences controles qualite.
     */
    public function setCodeAffaire(?string $codeAffaire): ChantiersFrequencesControlesQualite {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return ChantiersFrequencesControlesQualite Returns this Chantiers frequences controles qualite.
     */
    public function setCodeChantier(?string $codeChantier): ChantiersFrequencesControlesQualite {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ChantiersFrequencesControlesQualite Returns this Chantiers frequences controles qualite.
     */
    public function setCodeClient(?string $codeClient): ChantiersFrequencesControlesQualite {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the jour.
     *
     * @param string|null $jour The jour.
     * @return ChantiersFrequencesControlesQualite Returns this Chantiers frequences controles qualite.
     */
    public function setJour(?string $jour): ChantiersFrequencesControlesQualite {
        $this->jour = $jour;
        return $this;
    }

    /**
     * Set the mois.
     *
     * @param string|null $mois The mois.
     * @return ChantiersFrequencesControlesQualite Returns this Chantiers frequences controles qualite.
     */
    public function setMois(?string $mois): ChantiersFrequencesControlesQualite {
        $this->mois = $mois;
        return $this;
    }

    /**
     * Set the numero freq.
     *
     * @param int|null $numeroFreq The numero freq.
     * @return ChantiersFrequencesControlesQualite Returns this Chantiers frequences controles qualite.
     */
    public function setNumeroFreq(?int $numeroFreq): ChantiersFrequencesControlesQualite {
        $this->numeroFreq = $numeroFreq;
        return $this;
    }

    /**
     * Set the que premiere annee.
     *
     * @param bool|null $quePremiereAnnee The que premiere annee.
     * @return ChantiersFrequencesControlesQualite Returns this Chantiers frequences controles qualite.
     */
    public function setQuePremiereAnnee(?bool $quePremiereAnnee): ChantiersFrequencesControlesQualite {
        $this->quePremiereAnnee = $quePremiereAnnee;
        return $this;
    }

    /**
     * Set the type controle.
     *
     * @param string|null $typeControle The type controle.
     * @return ChantiersFrequencesControlesQualite Returns this Chantiers frequences controles qualite.
     */
    public function setTypeControle(?string $typeControle): ChantiersFrequencesControlesQualite {
        $this->typeControle = $typeControle;
        return $this;
    }
}
