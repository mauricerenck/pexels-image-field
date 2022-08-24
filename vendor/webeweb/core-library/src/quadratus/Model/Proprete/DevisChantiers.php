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
 * Devis chantiers.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DevisChantiers {

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
     * Maj descriptif.
     *
     * @var bool|null
     */
    private $majDescriptif;

    /**
     * Montant ht.
     *
     * @var float|null
     */
    private $montantHt;

    /**
     * Num devis.
     *
     * @var string|null
     */
    private $numDevis;

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
     * Get the maj descriptif.
     *
     * @return bool|null Returns the maj descriptif.
     */
    public function getMajDescriptif(): ?bool {
        return $this->majDescriptif;
    }

    /**
     * Get the montant ht.
     *
     * @return float|null Returns the montant ht.
     */
    public function getMontantHt(): ?float {
        return $this->montantHt;
    }

    /**
     * Get the num devis.
     *
     * @return string|null Returns the num devis.
     */
    public function getNumDevis(): ?string {
        return $this->numDevis;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return DevisChantiers Returns this Devis chantiers.
     */
    public function setCodeAffaire(?string $codeAffaire): DevisChantiers {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return DevisChantiers Returns this Devis chantiers.
     */
    public function setCodeChantier(?string $codeChantier): DevisChantiers {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return DevisChantiers Returns this Devis chantiers.
     */
    public function setCodeClient(?string $codeClient): DevisChantiers {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the maj descriptif.
     *
     * @param bool|null $majDescriptif The maj descriptif.
     * @return DevisChantiers Returns this Devis chantiers.
     */
    public function setMajDescriptif(?bool $majDescriptif): DevisChantiers {
        $this->majDescriptif = $majDescriptif;
        return $this;
    }

    /**
     * Set the montant ht.
     *
     * @param float|null $montantHt The montant ht.
     * @return DevisChantiers Returns this Devis chantiers.
     */
    public function setMontantHt(?float $montantHt): DevisChantiers {
        $this->montantHt = $montantHt;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string|null $numDevis The num devis.
     * @return DevisChantiers Returns this Devis chantiers.
     */
    public function setNumDevis(?string $numDevis): DevisChantiers {
        $this->numDevis = $numDevis;
        return $this;
    }
}
