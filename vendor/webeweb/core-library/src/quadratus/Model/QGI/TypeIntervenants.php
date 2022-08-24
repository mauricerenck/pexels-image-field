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
 * Type intervenants.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class TypeIntervenants {

    /**
     * Acces libre.
     *
     * @var bool|null
     */
    private $accesLibre;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Increment auto.
     *
     * @var bool|null
     */
    private $incrementAuto;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Prefixe.
     *
     * @var string|null
     */
    private $prefixe;

    /**
     * Prochain numero.
     *
     * @var int|null
     */
    private $prochainNumero;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the acces libre.
     *
     * @return bool|null Returns the acces libre.
     */
    public function getAccesLibre(): ?bool {
        return $this->accesLibre;
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
     * Get the increment auto.
     *
     * @return bool|null Returns the increment auto.
     */
    public function getIncrementAuto(): ?bool {
        return $this->incrementAuto;
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
     * Get the prefixe.
     *
     * @return string|null Returns the prefixe.
     */
    public function getPrefixe(): ?string {
        return $this->prefixe;
    }

    /**
     * Get the prochain numero.
     *
     * @return int|null Returns the prochain numero.
     */
    public function getProchainNumero(): ?int {
        return $this->prochainNumero;
    }

    /**
     * Set the acces libre.
     *
     * @param bool|null $accesLibre The acces libre.
     * @return TypeIntervenants Returns this Type intervenants.
     */
    public function setAccesLibre(?bool $accesLibre): TypeIntervenants {
        $this->accesLibre = $accesLibre;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return TypeIntervenants Returns this Type intervenants.
     */
    public function setCode(?string $code): TypeIntervenants {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the increment auto.
     *
     * @param bool|null $incrementAuto The increment auto.
     * @return TypeIntervenants Returns this Type intervenants.
     */
    public function setIncrementAuto(?bool $incrementAuto): TypeIntervenants {
        $this->incrementAuto = $incrementAuto;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return TypeIntervenants Returns this Type intervenants.
     */
    public function setLibelle(?string $libelle): TypeIntervenants {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the prefixe.
     *
     * @param string|null $prefixe The prefixe.
     * @return TypeIntervenants Returns this Type intervenants.
     */
    public function setPrefixe(?string $prefixe): TypeIntervenants {
        $this->prefixe = $prefixe;
        return $this;
    }

    /**
     * Set the prochain numero.
     *
     * @param int|null $prochainNumero The prochain numero.
     * @return TypeIntervenants Returns this Type intervenants.
     */
    public function setProchainNumero(?int $prochainNumero): TypeIntervenants {
        $this->prochainNumero = $prochainNumero;
        return $this;
    }
}
