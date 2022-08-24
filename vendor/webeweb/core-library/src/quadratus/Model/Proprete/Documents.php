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

use DateTime;

/**
 * Documents.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Documents {

    /**
     * Chrono.
     *
     * @var int|null
     */
    private $chrono;

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
     * Date heure sys.
     *
     * @var DateTime|null
     */
    private $dateHeureSys;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the chrono.
     *
     * @return int|null Returns the chrono.
     */
    public function getChrono(): ?int {
        return $this->chrono;
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
     * Get the date heure sys.
     *
     * @return DateTime|null Returns the date heure sys.
     */
    public function getDateHeureSys(): ?DateTime {
        return $this->dateHeureSys;
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
     * Get the lien document.
     *
     * @return string|null Returns the lien document.
     */
    public function getLienDocument(): ?string {
        return $this->lienDocument;
    }

    /**
     * Set the chrono.
     *
     * @param int|null $chrono The chrono.
     * @return Documents Returns this Documents.
     */
    public function setChrono(?int $chrono): Documents {
        $this->chrono = $chrono;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Documents Returns this Documents.
     */
    public function setCodeClient(?string $codeClient): Documents {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return Documents Returns this Documents.
     */
    public function setCodeNature(?string $codeNature): Documents {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the date heure sys.
     *
     * @param DateTime|null $dateHeureSys The date heure sys.
     * @return Documents Returns this Documents.
     */
    public function setDateHeureSys(?DateTime $dateHeureSys): Documents {
        $this->dateHeureSys = $dateHeureSys;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Documents Returns this Documents.
     */
    public function setLibelle(?string $libelle): Documents {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return Documents Returns this Documents.
     */
    public function setLienDocument(?string $lienDocument): Documents {
        $this->lienDocument = $lienDocument;
        return $this;
    }
}
