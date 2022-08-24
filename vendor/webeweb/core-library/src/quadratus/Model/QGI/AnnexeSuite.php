<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

/**
 * Annexe suite.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AnnexeSuite {

    /**
     * Code1.
     *
     * @var string|null
     */
    private $code1;

    /**
     * Code2.
     *
     * @var string|null
     */
    private $code2;

    /**
     * Critere libre1.
     *
     * @var string|null
     */
    private $critereLibre1;

    /**
     * Critere libre2.
     *
     * @var string|null
     */
    private $critereLibre2;

    /**
     * Dest relance.
     *
     * @var bool|null
     */
    private $destRelance;

    /**
     * Fax.
     *
     * @var string|null
     */
    private $fax;

    /**
     * Numero.
     *
     * @var int|null
     */
    private $numero;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Remarques rtf.
     *
     * @var string|null
     */
    private $remarquesRtf;

    /**
     * Service.
     *
     * @var string|null
     */
    private $service;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code1.
     *
     * @return string|null Returns the code1.
     */
    public function getCode1(): ?string {
        return $this->code1;
    }

    /**
     * Get the code2.
     *
     * @return string|null Returns the code2.
     */
    public function getCode2(): ?string {
        return $this->code2;
    }

    /**
     * Get the critere libre1.
     *
     * @return string|null Returns the critere libre1.
     */
    public function getCritereLibre1(): ?string {
        return $this->critereLibre1;
    }

    /**
     * Get the critere libre2.
     *
     * @return string|null Returns the critere libre2.
     */
    public function getCritereLibre2(): ?string {
        return $this->critereLibre2;
    }

    /**
     * Get the dest relance.
     *
     * @return bool|null Returns the dest relance.
     */
    public function getDestRelance(): ?bool {
        return $this->destRelance;
    }

    /**
     * Get the fax.
     *
     * @return string|null Returns the fax.
     */
    public function getFax(): ?string {
        return $this->fax;
    }

    /**
     * Get the numero.
     *
     * @return int|null Returns the numero.
     */
    public function getNumero(): ?int {
        return $this->numero;
    }

    /**
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getPrenom(): ?string {
        return $this->prenom;
    }

    /**
     * Get the remarques rtf.
     *
     * @return string|null Returns the remarques rtf.
     */
    public function getRemarquesRtf(): ?string {
        return $this->remarquesRtf;
    }

    /**
     * Get the service.
     *
     * @return string|null Returns the service.
     */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the code1.
     *
     * @param string|null $code1 The code1.
     * @return AnnexeSuite Returns this Annexe suite.
     */
    public function setCode1(?string $code1): AnnexeSuite {
        $this->code1 = $code1;
        return $this;
    }

    /**
     * Set the code2.
     *
     * @param string|null $code2 The code2.
     * @return AnnexeSuite Returns this Annexe suite.
     */
    public function setCode2(?string $code2): AnnexeSuite {
        $this->code2 = $code2;
        return $this;
    }

    /**
     * Set the critere libre1.
     *
     * @param string|null $critereLibre1 The critere libre1.
     * @return AnnexeSuite Returns this Annexe suite.
     */
    public function setCritereLibre1(?string $critereLibre1): AnnexeSuite {
        $this->critereLibre1 = $critereLibre1;
        return $this;
    }

    /**
     * Set the critere libre2.
     *
     * @param string|null $critereLibre2 The critere libre2.
     * @return AnnexeSuite Returns this Annexe suite.
     */
    public function setCritereLibre2(?string $critereLibre2): AnnexeSuite {
        $this->critereLibre2 = $critereLibre2;
        return $this;
    }

    /**
     * Set the dest relance.
     *
     * @param bool|null $destRelance The dest relance.
     * @return AnnexeSuite Returns this Annexe suite.
     */
    public function setDestRelance(?bool $destRelance): AnnexeSuite {
        $this->destRelance = $destRelance;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string|null $fax The fax.
     * @return AnnexeSuite Returns this Annexe suite.
     */
    public function setFax(?string $fax): AnnexeSuite {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return AnnexeSuite Returns this Annexe suite.
     */
    public function setNumero(?int $numero): AnnexeSuite {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return AnnexeSuite Returns this Annexe suite.
     */
    public function setPrenom(?string $prenom): AnnexeSuite {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the remarques rtf.
     *
     * @param string|null $remarquesRtf The remarques rtf.
     * @return AnnexeSuite Returns this Annexe suite.
     */
    public function setRemarquesRtf(?string $remarquesRtf): AnnexeSuite {
        $this->remarquesRtf = $remarquesRtf;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string|null $service The service.
     * @return AnnexeSuite Returns this Annexe suite.
     */
    public function setService(?string $service): AnnexeSuite {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return AnnexeSuite Returns this Annexe suite.
     */
    public function setType(?string $type): AnnexeSuite {
        $this->type = $type;
        return $this;
    }
}
