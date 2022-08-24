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
 * Synchro chantiers.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class SynchroChantiers {

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
     * Code synchro.
     *
     * @var string|null
     */
    private $codeSynchro;

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
     * Get the code synchro.
     *
     * @return string|null Returns the code synchro.
     */
    public function getCodeSynchro(): ?string {
        return $this->codeSynchro;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return SynchroChantiers Returns this Synchro chantiers.
     */
    public function setCodeAffaire(?string $codeAffaire): SynchroChantiers {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return SynchroChantiers Returns this Synchro chantiers.
     */
    public function setCodeChantier(?string $codeChantier): SynchroChantiers {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return SynchroChantiers Returns this Synchro chantiers.
     */
    public function setCodeClient(?string $codeClient): SynchroChantiers {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code synchro.
     *
     * @param string|null $codeSynchro The code synchro.
     * @return SynchroChantiers Returns this Synchro chantiers.
     */
    public function setCodeSynchro(?string $codeSynchro): SynchroChantiers {
        $this->codeSynchro = $codeSynchro;
        return $this;
    }
}
