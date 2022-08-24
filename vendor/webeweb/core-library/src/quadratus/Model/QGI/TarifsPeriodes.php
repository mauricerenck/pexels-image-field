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

use DateTime;

/**
 * Tarifs periodes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class TarifsPeriodes {

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
     * Code nature.
     *
     * @var string|null
     */
    private $codeNature;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Remise base.
     *
     * @var float|null
     */
    private $remiseBase;

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
     * Get the code nature.
     *
     * @return string|null Returns the code nature.
     */
    public function getCodeNature(): ?string {
        return $this->codeNature;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut(): ?DateTime {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin(): ?DateTime {
        return $this->dateFin;
    }

    /**
     * Get the remise base.
     *
     * @return float|null Returns the remise base.
     */
    public function getRemiseBase(): ?float {
        return $this->remiseBase;
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
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setCodeArticle(?string $codeArticle): TarifsPeriodes {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setCodeClient(?string $codeClient): TarifsPeriodes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setCodeNature(?string $codeNature): TarifsPeriodes {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setDateDebut(?DateTime $dateDebut): TarifsPeriodes {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setDateFin(?DateTime $dateFin): TarifsPeriodes {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the remise base.
     *
     * @param float|null $remiseBase The remise base.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setRemiseBase(?float $remiseBase): TarifsPeriodes {
        $this->remiseBase = $remiseBase;
        return $this;
    }

    /**
     * Set the type code article.
     *
     * @param string|null $typeCodeArticle The type code article.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setTypeCodeArticle(?string $typeCodeArticle): TarifsPeriodes {
        $this->typeCodeArticle = $typeCodeArticle;
        return $this;
    }

    /**
     * Set the type code client.
     *
     * @param string|null $typeCodeClient The type code client.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setTypeCodeClient(?string $typeCodeClient): TarifsPeriodes {
        $this->typeCodeClient = $typeCodeClient;
        return $this;
    }
}
