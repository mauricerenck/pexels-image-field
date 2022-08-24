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
 * Stats perso suivi client tetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class StatsPersoSuiviClientTetes {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

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
     * Indice.
     *
     * @var int|null
     */
    private $indice;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Lst collab.
     *
     * @var string|null
     */
    private $lstCollab;

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
     * Get the indice.
     *
     * @return int|null Returns the indice.
     */
    public function getIndice(): ?int {
        return $this->indice;
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
     * Get the lst collab.
     *
     * @return string|null Returns the lst collab.
     */
    public function getLstCollab(): ?string {
        return $this->lstCollab;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return StatsPersoSuiviClientTetes Returns this Stats perso suivi client tetes.
     */
    public function setCode(?string $code): StatsPersoSuiviClientTetes {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the coll creat.
     *
     * @param string|null $collCreat The coll creat.
     * @return StatsPersoSuiviClientTetes Returns this Stats perso suivi client tetes.
     */
    public function setCollCreat(?string $collCreat): StatsPersoSuiviClientTetes {
        $this->collCreat = $collCreat;
        return $this;
    }

    /**
     * Set the coll modif.
     *
     * @param string|null $collModif The coll modif.
     * @return StatsPersoSuiviClientTetes Returns this Stats perso suivi client tetes.
     */
    public function setCollModif(?string $collModif): StatsPersoSuiviClientTetes {
        $this->collModif = $collModif;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     * @return StatsPersoSuiviClientTetes Returns this Stats perso suivi client tetes.
     */
    public function setDateCreat(?DateTime $dateCreat): StatsPersoSuiviClientTetes {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return StatsPersoSuiviClientTetes Returns this Stats perso suivi client tetes.
     */
    public function setDateModif(?DateTime $dateModif): StatsPersoSuiviClientTetes {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int|null $indice The indice.
     * @return StatsPersoSuiviClientTetes Returns this Stats perso suivi client tetes.
     */
    public function setIndice(?int $indice): StatsPersoSuiviClientTetes {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return StatsPersoSuiviClientTetes Returns this Stats perso suivi client tetes.
     */
    public function setLibelle(?string $libelle): StatsPersoSuiviClientTetes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lst collab.
     *
     * @param string|null $lstCollab The lst collab.
     * @return StatsPersoSuiviClientTetes Returns this Stats perso suivi client tetes.
     */
    public function setLstCollab(?string $lstCollab): StatsPersoSuiviClientTetes {
        $this->lstCollab = $lstCollab;
        return $this;
    }
}
