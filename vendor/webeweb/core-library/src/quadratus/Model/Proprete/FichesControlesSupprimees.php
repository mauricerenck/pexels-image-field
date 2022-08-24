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
 * Fiches controles supprimees.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class FichesControlesSupprimees {

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
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Date transfert.
     *
     * @var DateTime|null
     */
    private $dateTransfert;

    /**
     * Numero fiche.
     *
     * @var int|null
     */
    private $numeroFiche;

    /**
     * Uniq id blocage.
     *
     * @var string|null
     */
    private $uniqIdBlocage;

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
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the date transfert.
     *
     * @return DateTime|null Returns the date transfert.
     */
    public function getDateTransfert(): ?DateTime {
        return $this->dateTransfert;
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
     * Get the uniq id blocage.
     *
     * @return string|null Returns the uniq id blocage.
     */
    public function getUniqIdBlocage(): ?string {
        return $this->uniqIdBlocage;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return FichesControlesSupprimees Returns this Fiches controles supprimees.
     */
    public function setCodeAffaire(?string $codeAffaire): FichesControlesSupprimees {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return FichesControlesSupprimees Returns this Fiches controles supprimees.
     */
    public function setCodeChantier(?string $codeChantier): FichesControlesSupprimees {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return FichesControlesSupprimees Returns this Fiches controles supprimees.
     */
    public function setCodeClient(?string $codeClient): FichesControlesSupprimees {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return FichesControlesSupprimees Returns this Fiches controles supprimees.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): FichesControlesSupprimees {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the date transfert.
     *
     * @param DateTime|null $dateTransfert The date transfert.
     * @return FichesControlesSupprimees Returns this Fiches controles supprimees.
     */
    public function setDateTransfert(?DateTime $dateTransfert): FichesControlesSupprimees {
        $this->dateTransfert = $dateTransfert;
        return $this;
    }

    /**
     * Set the numero fiche.
     *
     * @param int|null $numeroFiche The numero fiche.
     * @return FichesControlesSupprimees Returns this Fiches controles supprimees.
     */
    public function setNumeroFiche(?int $numeroFiche): FichesControlesSupprimees {
        $this->numeroFiche = $numeroFiche;
        return $this;
    }

    /**
     * Set the uniq id blocage.
     *
     * @param string|null $uniqIdBlocage The uniq id blocage.
     * @return FichesControlesSupprimees Returns this Fiches controles supprimees.
     */
    public function setUniqIdBlocage(?string $uniqIdBlocage): FichesControlesSupprimees {
        $this->uniqIdBlocage = $uniqIdBlocage;
        return $this;
    }
}
