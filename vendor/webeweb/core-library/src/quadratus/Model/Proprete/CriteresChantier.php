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
 * Criteres chantier.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class CriteresChantier {

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
     * Code ref1.
     *
     * @var string|null
     */
    private $codeRef1;

    /**
     * Code ref2.
     *
     * @var string|null
     */
    private $codeRef2;

    /**
     * Code ref3.
     *
     * @var string|null
     */
    private $codeRef3;

    /**
     * Code ref4.
     *
     * @var string|null
     */
    private $codeRef4;

    /**
     * Code ref5.
     *
     * @var string|null
     */
    private $codeRef5;

    /**
     * Texte1.
     *
     * @var string|null
     */
    private $texte1;

    /**
     * Texte2.
     *
     * @var string|null
     */
    private $texte2;

    /**
     * Texte3.
     *
     * @var string|null
     */
    private $texte3;

    /**
     * Texte4.
     *
     * @var string|null
     */
    private $texte4;

    /**
     * Texte5.
     *
     * @var string|null
     */
    private $texte5;

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
     * Get the code ref1.
     *
     * @return string|null Returns the code ref1.
     */
    public function getCodeRef1(): ?string {
        return $this->codeRef1;
    }

    /**
     * Get the code ref2.
     *
     * @return string|null Returns the code ref2.
     */
    public function getCodeRef2(): ?string {
        return $this->codeRef2;
    }

    /**
     * Get the code ref3.
     *
     * @return string|null Returns the code ref3.
     */
    public function getCodeRef3(): ?string {
        return $this->codeRef3;
    }

    /**
     * Get the code ref4.
     *
     * @return string|null Returns the code ref4.
     */
    public function getCodeRef4(): ?string {
        return $this->codeRef4;
    }

    /**
     * Get the code ref5.
     *
     * @return string|null Returns the code ref5.
     */
    public function getCodeRef5(): ?string {
        return $this->codeRef5;
    }

    /**
     * Get the texte1.
     *
     * @return string|null Returns the texte1.
     */
    public function getTexte1(): ?string {
        return $this->texte1;
    }

    /**
     * Get the texte2.
     *
     * @return string|null Returns the texte2.
     */
    public function getTexte2(): ?string {
        return $this->texte2;
    }

    /**
     * Get the texte3.
     *
     * @return string|null Returns the texte3.
     */
    public function getTexte3(): ?string {
        return $this->texte3;
    }

    /**
     * Get the texte4.
     *
     * @return string|null Returns the texte4.
     */
    public function getTexte4(): ?string {
        return $this->texte4;
    }

    /**
     * Get the texte5.
     *
     * @return string|null Returns the texte5.
     */
    public function getTexte5(): ?string {
        return $this->texte5;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setCodeAffaire(?string $codeAffaire): CriteresChantier {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setCodeChantier(?string $codeChantier): CriteresChantier {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setCodeClient(?string $codeClient): CriteresChantier {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code ref1.
     *
     * @param string|null $codeRef1 The code ref1.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setCodeRef1(?string $codeRef1): CriteresChantier {
        $this->codeRef1 = $codeRef1;
        return $this;
    }

    /**
     * Set the code ref2.
     *
     * @param string|null $codeRef2 The code ref2.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setCodeRef2(?string $codeRef2): CriteresChantier {
        $this->codeRef2 = $codeRef2;
        return $this;
    }

    /**
     * Set the code ref3.
     *
     * @param string|null $codeRef3 The code ref3.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setCodeRef3(?string $codeRef3): CriteresChantier {
        $this->codeRef3 = $codeRef3;
        return $this;
    }

    /**
     * Set the code ref4.
     *
     * @param string|null $codeRef4 The code ref4.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setCodeRef4(?string $codeRef4): CriteresChantier {
        $this->codeRef4 = $codeRef4;
        return $this;
    }

    /**
     * Set the code ref5.
     *
     * @param string|null $codeRef5 The code ref5.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setCodeRef5(?string $codeRef5): CriteresChantier {
        $this->codeRef5 = $codeRef5;
        return $this;
    }

    /**
     * Set the texte1.
     *
     * @param string|null $texte1 The texte1.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setTexte1(?string $texte1): CriteresChantier {
        $this->texte1 = $texte1;
        return $this;
    }

    /**
     * Set the texte2.
     *
     * @param string|null $texte2 The texte2.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setTexte2(?string $texte2): CriteresChantier {
        $this->texte2 = $texte2;
        return $this;
    }

    /**
     * Set the texte3.
     *
     * @param string|null $texte3 The texte3.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setTexte3(?string $texte3): CriteresChantier {
        $this->texte3 = $texte3;
        return $this;
    }

    /**
     * Set the texte4.
     *
     * @param string|null $texte4 The texte4.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setTexte4(?string $texte4): CriteresChantier {
        $this->texte4 = $texte4;
        return $this;
    }

    /**
     * Set the texte5.
     *
     * @param string|null $texte5 The texte5.
     * @return CriteresChantier Returns this Criteres chantier.
     */
    public function setTexte5(?string $texte5): CriteresChantier {
        $this->texte5 = $texte5;
        return $this;
    }
}
