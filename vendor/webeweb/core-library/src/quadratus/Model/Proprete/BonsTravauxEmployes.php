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
 * Bons travaux employes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class BonsTravauxEmployes {

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
     * Code equipe.
     *
     * @var string|null
     */
    private $codeEquipe;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Transfert paie.
     *
     * @var string|null
     */
    private $transfertPaie;

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
     * Get the code equipe.
     *
     * @return string|null Returns the code equipe.
     */
    public function getCodeEquipe(): ?string {
        return $this->codeEquipe;
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
     * Get the transfert paie.
     *
     * @return string|null Returns the transfert paie.
     */
    public function getTransfertPaie(): ?string {
        return $this->transfertPaie;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return BonsTravauxEmployes Returns this Bons travaux employes.
     */
    public function setCodeAffaire(?string $codeAffaire): BonsTravauxEmployes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return BonsTravauxEmployes Returns this Bons travaux employes.
     */
    public function setCodeChantier(?string $codeChantier): BonsTravauxEmployes {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return BonsTravauxEmployes Returns this Bons travaux employes.
     */
    public function setCodeClient(?string $codeClient): BonsTravauxEmployes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return BonsTravauxEmployes Returns this Bons travaux employes.
     */
    public function setCodeEmploye(?string $codeEmploye): BonsTravauxEmployes {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code equipe.
     *
     * @param string|null $codeEquipe The code equipe.
     * @return BonsTravauxEmployes Returns this Bons travaux employes.
     */
    public function setCodeEquipe(?string $codeEquipe): BonsTravauxEmployes {
        $this->codeEquipe = $codeEquipe;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return BonsTravauxEmployes Returns this Bons travaux employes.
     */
    public function setNumBt(?int $numBt): BonsTravauxEmployes {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the transfert paie.
     *
     * @param string|null $transfertPaie The transfert paie.
     * @return BonsTravauxEmployes Returns this Bons travaux employes.
     */
    public function setTransfertPaie(?string $transfertPaie): BonsTravauxEmployes {
        $this->transfertPaie = $transfertPaie;
        return $this;
    }
}
