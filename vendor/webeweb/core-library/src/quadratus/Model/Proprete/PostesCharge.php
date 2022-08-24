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
 * Postes charge.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PostesCharge {

    /**
     * Actif.
     *
     * @var bool|null
     */
    private $actif;

    /**
     * Code charge.
     *
     * @var string|null
     */
    private $codeCharge;

    /**
     * Dern poste affecte.
     *
     * @var string|null
     */
    private $dernPosteAffecte;

    /**
     * Description.
     *
     * @var string|null
     */
    private $description;

    /**
     * Poste rent.
     *
     * @var string|null
     */
    private $posteRent;

    /**
     * Type prorata.
     *
     * @var string|null
     */
    private $typeProrata;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the actif.
     *
     * @return bool|null Returns the actif.
     */
    public function getActif(): ?bool {
        return $this->actif;
    }

    /**
     * Get the code charge.
     *
     * @return string|null Returns the code charge.
     */
    public function getCodeCharge(): ?string {
        return $this->codeCharge;
    }

    /**
     * Get the dern poste affecte.
     *
     * @return string|null Returns the dern poste affecte.
     */
    public function getDernPosteAffecte(): ?string {
        return $this->dernPosteAffecte;
    }

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Get the poste rent.
     *
     * @return string|null Returns the poste rent.
     */
    public function getPosteRent(): ?string {
        return $this->posteRent;
    }

    /**
     * Get the type prorata.
     *
     * @return string|null Returns the type prorata.
     */
    public function getTypeProrata(): ?string {
        return $this->typeProrata;
    }

    /**
     * Set the actif.
     *
     * @param bool|null $actif The actif.
     * @return PostesCharge Returns this Postes charge.
     */
    public function setActif(?bool $actif): PostesCharge {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the code charge.
     *
     * @param string|null $codeCharge The code charge.
     * @return PostesCharge Returns this Postes charge.
     */
    public function setCodeCharge(?string $codeCharge): PostesCharge {
        $this->codeCharge = $codeCharge;
        return $this;
    }

    /**
     * Set the dern poste affecte.
     *
     * @param string|null $dernPosteAffecte The dern poste affecte.
     * @return PostesCharge Returns this Postes charge.
     */
    public function setDernPosteAffecte(?string $dernPosteAffecte): PostesCharge {
        $this->dernPosteAffecte = $dernPosteAffecte;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return PostesCharge Returns this Postes charge.
     */
    public function setDescription(?string $description): PostesCharge {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string|null $posteRent The poste rent.
     * @return PostesCharge Returns this Postes charge.
     */
    public function setPosteRent(?string $posteRent): PostesCharge {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the type prorata.
     *
     * @param string|null $typeProrata The type prorata.
     * @return PostesCharge Returns this Postes charge.
     */
    public function setTypeProrata(?string $typeProrata): PostesCharge {
        $this->typeProrata = $typeProrata;
        return $this;
    }
}
