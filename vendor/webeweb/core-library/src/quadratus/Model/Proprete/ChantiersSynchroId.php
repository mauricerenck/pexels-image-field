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
 * Chantiers synchro id.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ChantiersSynchroId {

    /**
     * Bloc da.
     *
     * @var bool|null
     */
    private $blocDa;

    /**
     * Bloc fc.
     *
     * @var bool|null
     */
    private $blocFc;

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
     * Get the bloc da.
     *
     * @return bool|null Returns the bloc da.
     */
    public function getBlocDa(): ?bool {
        return $this->blocDa;
    }

    /**
     * Get the bloc fc.
     *
     * @return bool|null Returns the bloc fc.
     */
    public function getBlocFc(): ?bool {
        return $this->blocFc;
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
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
    }

    /**
     * Set the bloc da.
     *
     * @param bool|null $blocDa The bloc da.
     * @return ChantiersSynchroId Returns this Chantiers synchro id.
     */
    public function setBlocDa(?bool $blocDa): ChantiersSynchroId {
        $this->blocDa = $blocDa;
        return $this;
    }

    /**
     * Set the bloc fc.
     *
     * @param bool|null $blocFc The bloc fc.
     * @return ChantiersSynchroId Returns this Chantiers synchro id.
     */
    public function setBlocFc(?bool $blocFc): ChantiersSynchroId {
        $this->blocFc = $blocFc;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return ChantiersSynchroId Returns this Chantiers synchro id.
     */
    public function setCodeAffaire(?string $codeAffaire): ChantiersSynchroId {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return ChantiersSynchroId Returns this Chantiers synchro id.
     */
    public function setCodeChantier(?string $codeChantier): ChantiersSynchroId {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ChantiersSynchroId Returns this Chantiers synchro id.
     */
    public function setCodeClient(?string $codeClient): ChantiersSynchroId {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return ChantiersSynchroId Returns this Chantiers synchro id.
     */
    public function setUniqId(?string $uniqId): ChantiersSynchroId {
        $this->uniqId = $uniqId;
        return $this;
    }
}
