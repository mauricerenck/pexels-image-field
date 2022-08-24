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
 * Fiches controles lignes actions.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class FichesControlesLignesActions {

    /**
     * Code action.
     *
     * @var string|null
     */
    private $codeAction;

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
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Libelle action.
     *
     * @var string|null
     */
    private $libelleAction;

    /**
     * Numero fiche.
     *
     * @var int|null
     */
    private $numeroFiche;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code action.
     *
     * @return string|null Returns the code action.
     */
    public function getCodeAction(): ?string {
        return $this->codeAction;
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
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Get the libelle action.
     *
     * @return string|null Returns the libelle action.
     */
    public function getLibelleAction(): ?string {
        return $this->libelleAction;
    }

    /**
     * Get the numero fiche.
     *
     * @return int|null Returns the numero fiche.
     */
    public function getNumeroFiche(): ?int {
        return $this->numeroFiche;
    }

    /**
     * Set the code action.
     *
     * @param string|null $codeAction The code action.
     * @return FichesControlesLignesActions Returns this Fiches controles lignes actions.
     */
    public function setCodeAction(?string $codeAction): FichesControlesLignesActions {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return FichesControlesLignesActions Returns this Fiches controles lignes actions.
     */
    public function setCodeAffaire(?string $codeAffaire): FichesControlesLignesActions {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return FichesControlesLignesActions Returns this Fiches controles lignes actions.
     */
    public function setCodeChantier(?string $codeChantier): FichesControlesLignesActions {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return FichesControlesLignesActions Returns this Fiches controles lignes actions.
     */
    public function setCodeClient(?string $codeClient): FichesControlesLignesActions {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return FichesControlesLignesActions Returns this Fiches controles lignes actions.
     */
    public function setDate(?DateTime $date): FichesControlesLignesActions {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the libelle action.
     *
     * @param string|null $libelleAction The libelle action.
     * @return FichesControlesLignesActions Returns this Fiches controles lignes actions.
     */
    public function setLibelleAction(?string $libelleAction): FichesControlesLignesActions {
        $this->libelleAction = $libelleAction;
        return $this;
    }

    /**
     * Set the numero fiche.
     *
     * @param int|null $numeroFiche The numero fiche.
     * @return FichesControlesLignesActions Returns this Fiches controles lignes actions.
     */
    public function setNumeroFiche(?int $numeroFiche): FichesControlesLignesActions {
        $this->numeroFiche = $numeroFiche;
        return $this;
    }
}
