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
 * Liaisons types envois.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class LiaisonsTypesEnvois {

    /**
     * A bloquer.
     *
     * @var string|null
     */
    private $aBloquer;

    /**
     * A emettre.
     *
     * @var string|null
     */
    private $aEmettre;

    /**
     * Accepte depuis q bureau.
     *
     * @var bool|null
     */
    private $accepteDepuisQBureau;

    /**
     * Accepte depuis qc.
     *
     * @var bool|null
     */
    private $accepteDepuisQc;

    /**
     * Accepte depuis qp.
     *
     * @var bool|null
     */
    private $accepteDepuisQp;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Modifiable.
     *
     * @var bool|null
     */
    private $modifiable;

    /**
     * Sans images.
     *
     * @var bool|null
     */
    private $sansImages;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a bloquer.
     *
     * @return string|null Returns the a bloquer.
     */
    public function getABloquer(): ?string {
        return $this->aBloquer;
    }

    /**
     * Get the a emettre.
     *
     * @return string|null Returns the a emettre.
     */
    public function getAEmettre(): ?string {
        return $this->aEmettre;
    }

    /**
     * Get the accepte depuis q bureau.
     *
     * @return bool|null Returns the accepte depuis q bureau.
     */
    public function getAccepteDepuisQBureau(): ?bool {
        return $this->accepteDepuisQBureau;
    }

    /**
     * Get the accepte depuis qc.
     *
     * @return bool|null Returns the accepte depuis qc.
     */
    public function getAccepteDepuisQc(): ?bool {
        return $this->accepteDepuisQc;
    }

    /**
     * Get the accepte depuis qp.
     *
     * @return bool|null Returns the accepte depuis qp.
     */
    public function getAccepteDepuisQp(): ?bool {
        return $this->accepteDepuisQp;
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the modifiable.
     *
     * @return bool|null Returns the modifiable.
     */
    public function getModifiable(): ?bool {
        return $this->modifiable;
    }

    /**
     * Get the sans images.
     *
     * @return bool|null Returns the sans images.
     */
    public function getSansImages(): ?bool {
        return $this->sansImages;
    }

    /**
     * Set the a bloquer.
     *
     * @param string|null $aBloquer The a bloquer.
     * @return LiaisonsTypesEnvois Returns this Liaisons types envois.
     */
    public function setABloquer(?string $aBloquer): LiaisonsTypesEnvois {
        $this->aBloquer = $aBloquer;
        return $this;
    }

    /**
     * Set the a emettre.
     *
     * @param string|null $aEmettre The a emettre.
     * @return LiaisonsTypesEnvois Returns this Liaisons types envois.
     */
    public function setAEmettre(?string $aEmettre): LiaisonsTypesEnvois {
        $this->aEmettre = $aEmettre;
        return $this;
    }

    /**
     * Set the accepte depuis q bureau.
     *
     * @param bool|null $accepteDepuisQBureau The accepte depuis q bureau.
     * @return LiaisonsTypesEnvois Returns this Liaisons types envois.
     */
    public function setAccepteDepuisQBureau(?bool $accepteDepuisQBureau): LiaisonsTypesEnvois {
        $this->accepteDepuisQBureau = $accepteDepuisQBureau;
        return $this;
    }

    /**
     * Set the accepte depuis qc.
     *
     * @param bool|null $accepteDepuisQc The accepte depuis qc.
     * @return LiaisonsTypesEnvois Returns this Liaisons types envois.
     */
    public function setAccepteDepuisQc(?bool $accepteDepuisQc): LiaisonsTypesEnvois {
        $this->accepteDepuisQc = $accepteDepuisQc;
        return $this;
    }

    /**
     * Set the accepte depuis qp.
     *
     * @param bool|null $accepteDepuisQp The accepte depuis qp.
     * @return LiaisonsTypesEnvois Returns this Liaisons types envois.
     */
    public function setAccepteDepuisQp(?bool $accepteDepuisQp): LiaisonsTypesEnvois {
        $this->accepteDepuisQp = $accepteDepuisQp;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return LiaisonsTypesEnvois Returns this Liaisons types envois.
     */
    public function setCode(?string $code): LiaisonsTypesEnvois {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return LiaisonsTypesEnvois Returns this Liaisons types envois.
     */
    public function setIntitule(?string $intitule): LiaisonsTypesEnvois {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the modifiable.
     *
     * @param bool|null $modifiable The modifiable.
     * @return LiaisonsTypesEnvois Returns this Liaisons types envois.
     */
    public function setModifiable(?bool $modifiable): LiaisonsTypesEnvois {
        $this->modifiable = $modifiable;
        return $this;
    }

    /**
     * Set the sans images.
     *
     * @param bool|null $sansImages The sans images.
     * @return LiaisonsTypesEnvois Returns this Liaisons types envois.
     */
    public function setSansImages(?bool $sansImages): LiaisonsTypesEnvois {
        $this->sansImages = $sansImages;
        return $this;
    }
}
