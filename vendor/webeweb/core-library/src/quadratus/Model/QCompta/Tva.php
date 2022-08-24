<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

/**
 * Tva.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Tva {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Compte tva achat.
     *
     * @var string|null
     */
    private $compteTvaAchat;

    /**
     * Compte tva immo.
     *
     * @var string|null
     */
    private $compteTvaImmo;

    /**
     * Compte tva vente.
     *
     * @var string|null
     */
    private $compteTvaVente;

    /**
     * Compte ventilation.
     *
     * @var string|null
     */
    private $compteVentilation;

    /**
     * Taux tva.
     *
     * @var float|null
     */
    private $tauxTva;

    /**
     * Type autoliquidation.
     *
     * @var string|null
     */
    private $typeAutoliquidation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the compte tva achat.
     *
     * @return string|null Returns the compte tva achat.
     */
    public function getCompteTvaAchat(): ?string {
        return $this->compteTvaAchat;
    }

    /**
     * Get the compte tva immo.
     *
     * @return string|null Returns the compte tva immo.
     */
    public function getCompteTvaImmo(): ?string {
        return $this->compteTvaImmo;
    }

    /**
     * Get the compte tva vente.
     *
     * @return string|null Returns the compte tva vente.
     */
    public function getCompteTvaVente(): ?string {
        return $this->compteTvaVente;
    }

    /**
     * Get the compte ventilation.
     *
     * @return string|null Returns the compte ventilation.
     */
    public function getCompteVentilation(): ?string {
        return $this->compteVentilation;
    }

    /**
     * Get the taux tva.
     *
     * @return float|null Returns the taux tva.
     */
    public function getTauxTva(): ?float {
        return $this->tauxTva;
    }

    /**
     * Get the type autoliquidation.
     *
     * @return string|null Returns the type autoliquidation.
     */
    public function getTypeAutoliquidation(): ?string {
        return $this->typeAutoliquidation;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Tva Returns this Tva.
     */
    public function setCode(?string $code): Tva {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the compte tva achat.
     *
     * @param string|null $compteTvaAchat The compte tva achat.
     * @return Tva Returns this Tva.
     */
    public function setCompteTvaAchat(?string $compteTvaAchat): Tva {
        $this->compteTvaAchat = $compteTvaAchat;
        return $this;
    }

    /**
     * Set the compte tva immo.
     *
     * @param string|null $compteTvaImmo The compte tva immo.
     * @return Tva Returns this Tva.
     */
    public function setCompteTvaImmo(?string $compteTvaImmo): Tva {
        $this->compteTvaImmo = $compteTvaImmo;
        return $this;
    }

    /**
     * Set the compte tva vente.
     *
     * @param string|null $compteTvaVente The compte tva vente.
     * @return Tva Returns this Tva.
     */
    public function setCompteTvaVente(?string $compteTvaVente): Tva {
        $this->compteTvaVente = $compteTvaVente;
        return $this;
    }

    /**
     * Set the compte ventilation.
     *
     * @param string|null $compteVentilation The compte ventilation.
     * @return Tva Returns this Tva.
     */
    public function setCompteVentilation(?string $compteVentilation): Tva {
        $this->compteVentilation = $compteVentilation;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float|null $tauxTva The taux tva.
     * @return Tva Returns this Tva.
     */
    public function setTauxTva(?float $tauxTva): Tva {
        $this->tauxTva = $tauxTva;
        return $this;
    }

    /**
     * Set the type autoliquidation.
     *
     * @param string|null $typeAutoliquidation The type autoliquidation.
     * @return Tva Returns this Tva.
     */
    public function setTypeAutoliquidation(?string $typeAutoliquidation): Tva {
        $this->typeAutoliquidation = $typeAutoliquidation;
        return $this;
    }
}
