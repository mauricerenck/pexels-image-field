<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

use DateTime;

/**
 * Historiques employes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class HistoriquesEmployes {

    /**
     * Chapitre.
     *
     * @var string|null
     */
    private $chapitre;

    /**
     * Coll creat.
     *
     * @var string|null
     */
    private $collCreat;

    /**
     * Coll modif.
     *
     * @var string|null
     */
    private $collModif;

    /**
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Description.
     *
     * @var string|null
     */
    private $description;

    /**
     * G uniq id.
     *
     * @var string|null
     */
    private $gUniqId;

    /**
     * Indice.
     *
     * @var int|null
     */
    private $indice;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the chapitre.
     *
     * @return string|null Returns the chapitre.
     */
    public function getChapitre(): ?string {
        return $this->chapitre;
    }

    /**
     * Get the coll creat.
     *
     * @return string|null Returns the coll creat.
     */
    public function getCollCreat(): ?string {
        return $this->collCreat;
    }

    /**
     * Get the coll modif.
     *
     * @return string|null Returns the coll modif.
     */
    public function getCollModif(): ?string {
        return $this->collModif;
    }

    /**
     * Get the date creat.
     *
     * @return DateTime|null Returns the date creat.
     */
    public function getDateCreat(): ?DateTime {
        return $this->dateCreat;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif(): ?DateTime {
        return $this->dateModif;
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
     * Get the g uniq id.
     *
     * @return string|null Returns the g uniq id.
     */
    public function getGUniqId(): ?string {
        return $this->gUniqId;
    }

    /**
     * Get the indice.
     *
     * @return int|null Returns the indice.
     */
    public function getIndice(): ?int {
        return $this->indice;
    }

    /**
     * Set the chapitre.
     *
     * @param string|null $chapitre The chapitre.
     * @return HistoriquesEmployes Returns this Historiques employes.
     */
    public function setChapitre(?string $chapitre): HistoriquesEmployes {
        $this->chapitre = $chapitre;
        return $this;
    }

    /**
     * Set the coll creat.
     *
     * @param string|null $collCreat The coll creat.
     * @return HistoriquesEmployes Returns this Historiques employes.
     */
    public function setCollCreat(?string $collCreat): HistoriquesEmployes {
        $this->collCreat = $collCreat;
        return $this;
    }

    /**
     * Set the coll modif.
     *
     * @param string|null $collModif The coll modif.
     * @return HistoriquesEmployes Returns this Historiques employes.
     */
    public function setCollModif(?string $collModif): HistoriquesEmployes {
        $this->collModif = $collModif;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     * @return HistoriquesEmployes Returns this Historiques employes.
     */
    public function setDateCreat(?DateTime $dateCreat): HistoriquesEmployes {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return HistoriquesEmployes Returns this Historiques employes.
     */
    public function setDateModif(?DateTime $dateModif): HistoriquesEmployes {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return HistoriquesEmployes Returns this Historiques employes.
     */
    public function setDescription(?string $description): HistoriquesEmployes {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the g uniq id.
     *
     * @param string|null $gUniqId The g uniq id.
     * @return HistoriquesEmployes Returns this Historiques employes.
     */
    public function setGUniqId(?string $gUniqId): HistoriquesEmployes {
        $this->gUniqId = $gUniqId;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int|null $indice The indice.
     * @return HistoriquesEmployes Returns this Historiques employes.
     */
    public function setIndice(?int $indice): HistoriquesEmployes {
        $this->indice = $indice;
        return $this;
    }
}
