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

/**
 * Regroupement ds.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RegroupementDs {

    /**
     * Code rds.
     *
     * @var string|null
     */
    private $codeRds;

    /**
     * Code rupture.
     *
     * @var string|null
     */
    private $codeRupture;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Organisme.
     *
     * @var string|null
     */
    private $organisme;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code rds.
     *
     * @return string|null Returns the code rds.
     */
    public function getCodeRds(): ?string {
        return $this->codeRds;
    }

    /**
     * Get the code rupture.
     *
     * @return string|null Returns the code rupture.
     */
    public function getCodeRupture(): ?string {
        return $this->codeRupture;
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
     * Get the organisme.
     *
     * @return string|null Returns the organisme.
     */
    public function getOrganisme(): ?string {
        return $this->organisme;
    }

    /**
     * Set the code rds.
     *
     * @param string|null $codeRds The code rds.
     * @return RegroupementDs Returns this Regroupement ds.
     */
    public function setCodeRds(?string $codeRds): RegroupementDs {
        $this->codeRds = $codeRds;
        return $this;
    }

    /**
     * Set the code rupture.
     *
     * @param string|null $codeRupture The code rupture.
     * @return RegroupementDs Returns this Regroupement ds.
     */
    public function setCodeRupture(?string $codeRupture): RegroupementDs {
        $this->codeRupture = $codeRupture;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return RegroupementDs Returns this Regroupement ds.
     */
    public function setIntitule(?string $intitule): RegroupementDs {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string|null $organisme The organisme.
     * @return RegroupementDs Returns this Regroupement ds.
     */
    public function setOrganisme(?string $organisme): RegroupementDs {
        $this->organisme = $organisme;
        return $this;
    }
}
