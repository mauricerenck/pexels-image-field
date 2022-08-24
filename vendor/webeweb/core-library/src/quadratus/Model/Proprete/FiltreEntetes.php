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
 * Filtre entetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class FiltreEntetes {

    /**
     * Code filtre.
     *
     * @var string|null
     */
    private $codeFiltre;

    /**
     * Collaborateur.
     *
     * @var string|null
     */
    private $collaborateur;

    /**
     * Commercial facture.
     *
     * @var bool|null
     */
    private $commercialFacture;

    /**
     * Fonctionnalite.
     *
     * @var string|null
     */
    private $fonctionnalite;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Type filtre.
     *
     * @var string|null
     */
    private $typeFiltre;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code filtre.
     *
     * @return string|null Returns the code filtre.
     */
    public function getCodeFiltre(): ?string {
        return $this->codeFiltre;
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
     * Get the commercial facture.
     *
     * @return bool|null Returns the commercial facture.
     */
    public function getCommercialFacture(): ?bool {
        return $this->commercialFacture;
    }

    /**
     * Get the fonctionnalite.
     *
     * @return string|null Returns the fonctionnalite.
     */
    public function getFonctionnalite(): ?string {
        return $this->fonctionnalite;
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
     * Get the type filtre.
     *
     * @return string|null Returns the type filtre.
     */
    public function getTypeFiltre(): ?string {
        return $this->typeFiltre;
    }

    /**
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
    }

    /**
     * Set the code filtre.
     *
     * @param string|null $codeFiltre The code filtre.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setCodeFiltre(?string $codeFiltre): FiltreEntetes {
        $this->codeFiltre = $codeFiltre;
        return $this;
    }

    /**
     * Set the collaborateur.
     *
     * @param string|null $collaborateur The collaborateur.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setCollaborateur(?string $collaborateur): FiltreEntetes {
        $this->collaborateur = $collaborateur;
        return $this;
    }

    /**
     * Set the commercial facture.
     *
     * @param bool|null $commercialFacture The commercial facture.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setCommercialFacture(?bool $commercialFacture): FiltreEntetes {
        $this->commercialFacture = $commercialFacture;
        return $this;
    }

    /**
     * Set the fonctionnalite.
     *
     * @param string|null $fonctionnalite The fonctionnalite.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setFonctionnalite(?string $fonctionnalite): FiltreEntetes {
        $this->fonctionnalite = $fonctionnalite;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setLibelle(?string $libelle): FiltreEntetes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the type filtre.
     *
     * @param string|null $typeFiltre The type filtre.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setTypeFiltre(?string $typeFiltre): FiltreEntetes {
        $this->typeFiltre = $typeFiltre;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setUniqId(?string $uniqId): FiltreEntetes {
        $this->uniqId = $uniqId;
        return $this;
    }
}
