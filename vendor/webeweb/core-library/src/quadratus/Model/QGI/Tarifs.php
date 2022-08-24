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
 * Tarifs.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Tarifs {

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code devise.
     *
     * @var string|null
     */
    private $codeDevise;

    /**
     * Code nature.
     *
     * @var string|null
     */
    private $codeNature;

    /**
     * Com sur marge brute.
     *
     * @var bool|null
     */
    private $comSurMargeBrute;

    /**
     * Prix ttc.
     *
     * @var bool|null
     */
    private $prixTtc;

    /**
     * Prix unit base.
     *
     * @var float|null
     */
    private $prixUnitBase;

    /**
     * Taux commission.
     *
     * @var float|null
     */
    private $tauxCommission;

    /**
     * Type code article.
     *
     * @var string|null
     */
    private $typeCodeArticle;

    /**
     * Type code client.
     *
     * @var string|null
     */
    private $typeCodeClient;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code article.
     *
     * @return string|null Returns the code article.
     */
    public function getCodeArticle(): ?string {
        return $this->codeArticle;
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
     * Get the code devise.
     *
     * @return string|null Returns the code devise.
     */
    public function getCodeDevise(): ?string {
        return $this->codeDevise;
    }

    /**
     * Get the code nature.
     *
     * @return string|null Returns the code nature.
     */
    public function getCodeNature(): ?string {
        return $this->codeNature;
    }

    /**
     * Get the com sur marge brute.
     *
     * @return bool|null Returns the com sur marge brute.
     */
    public function getComSurMargeBrute(): ?bool {
        return $this->comSurMargeBrute;
    }

    /**
     * Get the prix ttc.
     *
     * @return bool|null Returns the prix ttc.
     */
    public function getPrixTtc(): ?bool {
        return $this->prixTtc;
    }

    /**
     * Get the prix unit base.
     *
     * @return float|null Returns the prix unit base.
     */
    public function getPrixUnitBase(): ?float {
        return $this->prixUnitBase;
    }

    /**
     * Get the taux commission.
     *
     * @return float|null Returns the taux commission.
     */
    public function getTauxCommission(): ?float {
        return $this->tauxCommission;
    }

    /**
     * Get the type code article.
     *
     * @return string|null Returns the type code article.
     */
    public function getTypeCodeArticle(): ?string {
        return $this->typeCodeArticle;
    }

    /**
     * Get the type code client.
     *
     * @return string|null Returns the type code client.
     */
    public function getTypeCodeClient(): ?string {
        return $this->typeCodeClient;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCodeArticle(?string $codeArticle): Tarifs {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCodeClient(?string $codeClient): Tarifs {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCodeDevise(?string $codeDevise): Tarifs {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return Tarifs Returns this Tarifs.
     */
    public function setCodeNature(?string $codeNature): Tarifs {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the com sur marge brute.
     *
     * @param bool|null $comSurMargeBrute The com sur marge brute.
     * @return Tarifs Returns this Tarifs.
     */
    public function setComSurMargeBrute(?bool $comSurMargeBrute): Tarifs {
        $this->comSurMargeBrute = $comSurMargeBrute;
        return $this;
    }

    /**
     * Set the prix ttc.
     *
     * @param bool|null $prixTtc The prix ttc.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPrixTtc(?bool $prixTtc): Tarifs {
        $this->prixTtc = $prixTtc;
        return $this;
    }

    /**
     * Set the prix unit base.
     *
     * @param float|null $prixUnitBase The prix unit base.
     * @return Tarifs Returns this Tarifs.
     */
    public function setPrixUnitBase(?float $prixUnitBase): Tarifs {
        $this->prixUnitBase = $prixUnitBase;
        return $this;
    }

    /**
     * Set the taux commission.
     *
     * @param float|null $tauxCommission The taux commission.
     * @return Tarifs Returns this Tarifs.
     */
    public function setTauxCommission(?float $tauxCommission): Tarifs {
        $this->tauxCommission = $tauxCommission;
        return $this;
    }

    /**
     * Set the type code article.
     *
     * @param string|null $typeCodeArticle The type code article.
     * @return Tarifs Returns this Tarifs.
     */
    public function setTypeCodeArticle(?string $typeCodeArticle): Tarifs {
        $this->typeCodeArticle = $typeCodeArticle;
        return $this;
    }

    /**
     * Set the type code client.
     *
     * @param string|null $typeCodeClient The type code client.
     * @return Tarifs Returns this Tarifs.
     */
    public function setTypeCodeClient(?string $typeCodeClient): Tarifs {
        $this->typeCodeClient = $typeCodeClient;
        return $this;
    }
}
