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
 * Chantiers periodes fermeture.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ChantiersPeriodesFermeture {

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
     * Date au.
     *
     * @var DateTime|null
     */
    private $dateAu;

    /**
     * Date du.
     *
     * @var DateTime|null
     */
    private $dateDu;

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
     * Get the date au.
     *
     * @return DateTime|null Returns the date au.
     */
    public function getDateAu(): ?DateTime {
        return $this->dateAu;
    }

    /**
     * Get the date du.
     *
     * @return DateTime|null Returns the date du.
     */
    public function getDateDu(): ?DateTime {
        return $this->dateDu;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return ChantiersPeriodesFermeture Returns this Chantiers periodes fermeture.
     */
    public function setCodeAffaire(?string $codeAffaire): ChantiersPeriodesFermeture {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return ChantiersPeriodesFermeture Returns this Chantiers periodes fermeture.
     */
    public function setCodeChantier(?string $codeChantier): ChantiersPeriodesFermeture {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ChantiersPeriodesFermeture Returns this Chantiers periodes fermeture.
     */
    public function setCodeClient(?string $codeClient): ChantiersPeriodesFermeture {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the date au.
     *
     * @param DateTime|null $dateAu The date au.
     * @return ChantiersPeriodesFermeture Returns this Chantiers periodes fermeture.
     */
    public function setDateAu(?DateTime $dateAu): ChantiersPeriodesFermeture {
        $this->dateAu = $dateAu;
        return $this;
    }

    /**
     * Set the date du.
     *
     * @param DateTime|null $dateDu The date du.
     * @return ChantiersPeriodesFermeture Returns this Chantiers periodes fermeture.
     */
    public function setDateDu(?DateTime $dateDu): ChantiersPeriodesFermeture {
        $this->dateDu = $dateDu;
        return $this;
    }
}
