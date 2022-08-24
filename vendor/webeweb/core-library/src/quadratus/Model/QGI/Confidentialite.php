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
 * Confidentialite.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Confidentialite {

    /**
     * Activation lst restri art.
     *
     * @var int|null
     */
    private $activationLstRestriArt;

    /**
     * Activation lst restri cli.
     *
     * @var int|null
     */
    private $activationLstRestriCli;

    /**
     * Activation lst restri frn.
     *
     * @var int|null
     */
    private $activationLstRestriFrn;

    /**
     * Active conf menus qb.
     *
     * @var bool|null
     */
    private $activeConfMenusQb;

    /**
     * Active conf menus qb2.
     *
     * @var bool|null
     */
    private $activeConfMenusQb2;

    /**
     * Active conf menus qc.
     *
     * @var bool|null
     */
    private $activeConfMenusQc;

    /**
     * Active conf menus qfact.
     *
     * @var bool|null
     */
    private $activeConfMenusQfact;

    /**
     * Active conf menus qgi.
     *
     * @var bool|null
     */
    private $activeConfMenusQgi;

    /**
     * Active conf menus qp.
     *
     * @var bool|null
     */
    private $activeConfMenusQp;

    /**
     * Active conf menus qprop.
     *
     * @var bool|null
     */
    private $activeConfMenusQprop;

    /**
     * Active conf menus qtrs.
     *
     * @var bool|null
     */
    private $activeConfMenusQtrs;

    /**
     * Masquer base access.
     *
     * @var bool|null
     */
    private $masquerBaseAccess;

    /**
     * Sel lst restri art def.
     *
     * @var string|null
     */
    private $selLstRestriArtDef;

    /**
     * Sel lst restri cli def.
     *
     * @var string|null
     */
    private $selLstRestriCliDef;

    /**
     * Sel lst restri frn def.
     *
     * @var string|null
     */
    private $selLstRestriFrnDef;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the activation lst restri art.
     *
     * @return int|null Returns the activation lst restri art.
     */
    public function getActivationLstRestriArt(): ?int {
        return $this->activationLstRestriArt;
    }

    /**
     * Get the activation lst restri cli.
     *
     * @return int|null Returns the activation lst restri cli.
     */
    public function getActivationLstRestriCli(): ?int {
        return $this->activationLstRestriCli;
    }

    /**
     * Get the activation lst restri frn.
     *
     * @return int|null Returns the activation lst restri frn.
     */
    public function getActivationLstRestriFrn(): ?int {
        return $this->activationLstRestriFrn;
    }

    /**
     * Get the active conf menus qb.
     *
     * @return bool|null Returns the active conf menus qb.
     */
    public function getActiveConfMenusQb(): ?bool {
        return $this->activeConfMenusQb;
    }

    /**
     * Get the active conf menus qb2.
     *
     * @return bool|null Returns the active conf menus qb2.
     */
    public function getActiveConfMenusQb2(): ?bool {
        return $this->activeConfMenusQb2;
    }

    /**
     * Get the active conf menus qc.
     *
     * @return bool|null Returns the active conf menus qc.
     */
    public function getActiveConfMenusQc(): ?bool {
        return $this->activeConfMenusQc;
    }

    /**
     * Get the active conf menus qfact.
     *
     * @return bool|null Returns the active conf menus qfact.
     */
    public function getActiveConfMenusQfact(): ?bool {
        return $this->activeConfMenusQfact;
    }

    /**
     * Get the active conf menus qgi.
     *
     * @return bool|null Returns the active conf menus qgi.
     */
    public function getActiveConfMenusQgi(): ?bool {
        return $this->activeConfMenusQgi;
    }

    /**
     * Get the active conf menus qp.
     *
     * @return bool|null Returns the active conf menus qp.
     */
    public function getActiveConfMenusQp(): ?bool {
        return $this->activeConfMenusQp;
    }

    /**
     * Get the active conf menus qprop.
     *
     * @return bool|null Returns the active conf menus qprop.
     */
    public function getActiveConfMenusQprop(): ?bool {
        return $this->activeConfMenusQprop;
    }

    /**
     * Get the active conf menus qtrs.
     *
     * @return bool|null Returns the active conf menus qtrs.
     */
    public function getActiveConfMenusQtrs(): ?bool {
        return $this->activeConfMenusQtrs;
    }

    /**
     * Get the masquer base access.
     *
     * @return bool|null Returns the masquer base access.
     */
    public function getMasquerBaseAccess(): ?bool {
        return $this->masquerBaseAccess;
    }

    /**
     * Get the sel lst restri art def.
     *
     * @return string|null Returns the sel lst restri art def.
     */
    public function getSelLstRestriArtDef(): ?string {
        return $this->selLstRestriArtDef;
    }

    /**
     * Get the sel lst restri cli def.
     *
     * @return string|null Returns the sel lst restri cli def.
     */
    public function getSelLstRestriCliDef(): ?string {
        return $this->selLstRestriCliDef;
    }

    /**
     * Get the sel lst restri frn def.
     *
     * @return string|null Returns the sel lst restri frn def.
     */
    public function getSelLstRestriFrnDef(): ?string {
        return $this->selLstRestriFrnDef;
    }

    /**
     * Set the activation lst restri art.
     *
     * @param int|null $activationLstRestriArt The activation lst restri art.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActivationLstRestriArt(?int $activationLstRestriArt): Confidentialite {
        $this->activationLstRestriArt = $activationLstRestriArt;
        return $this;
    }

    /**
     * Set the activation lst restri cli.
     *
     * @param int|null $activationLstRestriCli The activation lst restri cli.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActivationLstRestriCli(?int $activationLstRestriCli): Confidentialite {
        $this->activationLstRestriCli = $activationLstRestriCli;
        return $this;
    }

    /**
     * Set the activation lst restri frn.
     *
     * @param int|null $activationLstRestriFrn The activation lst restri frn.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActivationLstRestriFrn(?int $activationLstRestriFrn): Confidentialite {
        $this->activationLstRestriFrn = $activationLstRestriFrn;
        return $this;
    }

    /**
     * Set the active conf menus qb.
     *
     * @param bool|null $activeConfMenusQb The active conf menus qb.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQb(?bool $activeConfMenusQb): Confidentialite {
        $this->activeConfMenusQb = $activeConfMenusQb;
        return $this;
    }

    /**
     * Set the active conf menus qb2.
     *
     * @param bool|null $activeConfMenusQb2 The active conf menus qb2.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQb2(?bool $activeConfMenusQb2): Confidentialite {
        $this->activeConfMenusQb2 = $activeConfMenusQb2;
        return $this;
    }

    /**
     * Set the active conf menus qc.
     *
     * @param bool|null $activeConfMenusQc The active conf menus qc.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQc(?bool $activeConfMenusQc): Confidentialite {
        $this->activeConfMenusQc = $activeConfMenusQc;
        return $this;
    }

    /**
     * Set the active conf menus qfact.
     *
     * @param bool|null $activeConfMenusQfact The active conf menus qfact.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQfact(?bool $activeConfMenusQfact): Confidentialite {
        $this->activeConfMenusQfact = $activeConfMenusQfact;
        return $this;
    }

    /**
     * Set the active conf menus qgi.
     *
     * @param bool|null $activeConfMenusQgi The active conf menus qgi.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQgi(?bool $activeConfMenusQgi): Confidentialite {
        $this->activeConfMenusQgi = $activeConfMenusQgi;
        return $this;
    }

    /**
     * Set the active conf menus qp.
     *
     * @param bool|null $activeConfMenusQp The active conf menus qp.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQp(?bool $activeConfMenusQp): Confidentialite {
        $this->activeConfMenusQp = $activeConfMenusQp;
        return $this;
    }

    /**
     * Set the active conf menus qprop.
     *
     * @param bool|null $activeConfMenusQprop The active conf menus qprop.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQprop(?bool $activeConfMenusQprop): Confidentialite {
        $this->activeConfMenusQprop = $activeConfMenusQprop;
        return $this;
    }

    /**
     * Set the active conf menus qtrs.
     *
     * @param bool|null $activeConfMenusQtrs The active conf menus qtrs.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQtrs(?bool $activeConfMenusQtrs): Confidentialite {
        $this->activeConfMenusQtrs = $activeConfMenusQtrs;
        return $this;
    }

    /**
     * Set the masquer base access.
     *
     * @param bool|null $masquerBaseAccess The masquer base access.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setMasquerBaseAccess(?bool $masquerBaseAccess): Confidentialite {
        $this->masquerBaseAccess = $masquerBaseAccess;
        return $this;
    }

    /**
     * Set the sel lst restri art def.
     *
     * @param string|null $selLstRestriArtDef The sel lst restri art def.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setSelLstRestriArtDef(?string $selLstRestriArtDef): Confidentialite {
        $this->selLstRestriArtDef = $selLstRestriArtDef;
        return $this;
    }

    /**
     * Set the sel lst restri cli def.
     *
     * @param string|null $selLstRestriCliDef The sel lst restri cli def.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setSelLstRestriCliDef(?string $selLstRestriCliDef): Confidentialite {
        $this->selLstRestriCliDef = $selLstRestriCliDef;
        return $this;
    }

    /**
     * Set the sel lst restri frn def.
     *
     * @param string|null $selLstRestriFrnDef The sel lst restri frn def.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setSelLstRestriFrnDef(?string $selLstRestriFrnDef): Confidentialite {
        $this->selLstRestriFrnDef = $selLstRestriFrnDef;
        return $this;
    }
}
