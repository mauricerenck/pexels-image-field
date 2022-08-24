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
 * Prepa paie.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class PrepaPaie {

    /**
     * Cp pris.
     *
     * @var float|null
     */
    private $cpPris;

    /**
     * H majo acquis.
     *
     * @var float|null
     */
    private $hMajoAcquis;

    /**
     * H majo pris.
     *
     * @var float|null
     */
    private $hMajoPris;

    /**
     * H sup a comptabiliser rc.
     *
     * @var float|null
     */
    private $hSupAComptabiliserRc;

    /**
     * H sup a comptabiliser rcit.
     *
     * @var float|null
     */
    private $hSupAComptabiliserRcit;

    /**
     * H sup bonif.
     *
     * @var float|null
     */
    private $hSupBonif;

    /**
     * Horaire prevu.
     *
     * @var float|null
     */
    private $horairePrevu;

    /**
     * Nb h comp.
     *
     * @var float|null
     */
    private $nbHComp;

    /**
     * Nb h nuit.
     *
     * @var float|null
     */
    private $nbHNuit;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Pourcent h bonif.
     *
     * @var float|null
     */
    private $pourcentHBonif;

    /**
     * R recup acquis.
     *
     * @var float|null
     */
    private $rRecupAcquis;

    /**
     * R recup pris.
     *
     * @var float|null
     */
    private $rRecupPris;

    /**
     * Rc acquis.
     *
     * @var float|null
     */
    private $rcAcquis;

    /**
     * Rc pris.
     *
     * @var float|null
     */
    private $rcPris;

    /**
     * Rr acquis.
     *
     * @var float|null
     */
    private $rrAcquis;

    /**
     * Rr pris.
     *
     * @var float|null
     */
    private $rrPris;

    /**
     * Semaine.
     *
     * @var string|null
     */
    private $semaine;

    /**
     * Tot realise.
     *
     * @var float|null
     */
    private $totRealise;

    /**
     * Travail effectif.
     *
     * @var float|null
     */
    private $travailEffectif;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the cp pris.
     *
     * @return float|null Returns the cp pris.
     */
    public function getCpPris(): ?float {
        return $this->cpPris;
    }

    /**
     * Get the h majo acquis.
     *
     * @return float|null Returns the h majo acquis.
     */
    public function getHMajoAcquis(): ?float {
        return $this->hMajoAcquis;
    }

    /**
     * Get the h majo pris.
     *
     * @return float|null Returns the h majo pris.
     */
    public function getHMajoPris(): ?float {
        return $this->hMajoPris;
    }

    /**
     * Get the h sup a comptabiliser rc.
     *
     * @return float|null Returns the h sup a comptabiliser rc.
     */
    public function getHSupAComptabiliserRc(): ?float {
        return $this->hSupAComptabiliserRc;
    }

    /**
     * Get the h sup a comptabiliser rcit.
     *
     * @return float|null Returns the h sup a comptabiliser rcit.
     */
    public function getHSupAComptabiliserRcit(): ?float {
        return $this->hSupAComptabiliserRcit;
    }

    /**
     * Get the h sup bonif.
     *
     * @return float|null Returns the h sup bonif.
     */
    public function getHSupBonif(): ?float {
        return $this->hSupBonif;
    }

    /**
     * Get the horaire prevu.
     *
     * @return float|null Returns the horaire prevu.
     */
    public function getHorairePrevu(): ?float {
        return $this->horairePrevu;
    }

    /**
     * Get the nb h comp.
     *
     * @return float|null Returns the nb h comp.
     */
    public function getNbHComp(): ?float {
        return $this->nbHComp;
    }

    /**
     * Get the nb h nuit.
     *
     * @return float|null Returns the nb h nuit.
     */
    public function getNbHNuit(): ?float {
        return $this->nbHNuit;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the pourcent h bonif.
     *
     * @return float|null Returns the pourcent h bonif.
     */
    public function getPourcentHBonif(): ?float {
        return $this->pourcentHBonif;
    }

    /**
     * Get the r recup acquis.
     *
     * @return float|null Returns the r recup acquis.
     */
    public function getRRecupAcquis(): ?float {
        return $this->rRecupAcquis;
    }

    /**
     * Get the r recup pris.
     *
     * @return float|null Returns the r recup pris.
     */
    public function getRRecupPris(): ?float {
        return $this->rRecupPris;
    }

    /**
     * Get the rc acquis.
     *
     * @return float|null Returns the rc acquis.
     */
    public function getRcAcquis(): ?float {
        return $this->rcAcquis;
    }

    /**
     * Get the rc pris.
     *
     * @return float|null Returns the rc pris.
     */
    public function getRcPris(): ?float {
        return $this->rcPris;
    }

    /**
     * Get the rr acquis.
     *
     * @return float|null Returns the rr acquis.
     */
    public function getRrAcquis(): ?float {
        return $this->rrAcquis;
    }

    /**
     * Get the rr pris.
     *
     * @return float|null Returns the rr pris.
     */
    public function getRrPris(): ?float {
        return $this->rrPris;
    }

    /**
     * Get the semaine.
     *
     * @return string|null Returns the semaine.
     */
    public function getSemaine(): ?string {
        return $this->semaine;
    }

    /**
     * Get the tot realise.
     *
     * @return float|null Returns the tot realise.
     */
    public function getTotRealise(): ?float {
        return $this->totRealise;
    }

    /**
     * Get the travail effectif.
     *
     * @return float|null Returns the travail effectif.
     */
    public function getTravailEffectif(): ?float {
        return $this->travailEffectif;
    }

    /**
     * Set the cp pris.
     *
     * @param float|null $cpPris The cp pris.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setCpPris(?float $cpPris): PrepaPaie {
        $this->cpPris = $cpPris;
        return $this;
    }

    /**
     * Set the h majo acquis.
     *
     * @param float|null $hMajoAcquis The h majo acquis.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setHMajoAcquis(?float $hMajoAcquis): PrepaPaie {
        $this->hMajoAcquis = $hMajoAcquis;
        return $this;
    }

    /**
     * Set the h majo pris.
     *
     * @param float|null $hMajoPris The h majo pris.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setHMajoPris(?float $hMajoPris): PrepaPaie {
        $this->hMajoPris = $hMajoPris;
        return $this;
    }

    /**
     * Set the h sup a comptabiliser rc.
     *
     * @param float|null $hSupAComptabiliserRc The h sup a comptabiliser rc.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setHSupAComptabiliserRc(?float $hSupAComptabiliserRc): PrepaPaie {
        $this->hSupAComptabiliserRc = $hSupAComptabiliserRc;
        return $this;
    }

    /**
     * Set the h sup a comptabiliser rcit.
     *
     * @param float|null $hSupAComptabiliserRcit The h sup a comptabiliser rcit.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setHSupAComptabiliserRcit(?float $hSupAComptabiliserRcit): PrepaPaie {
        $this->hSupAComptabiliserRcit = $hSupAComptabiliserRcit;
        return $this;
    }

    /**
     * Set the h sup bonif.
     *
     * @param float|null $hSupBonif The h sup bonif.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setHSupBonif(?float $hSupBonif): PrepaPaie {
        $this->hSupBonif = $hSupBonif;
        return $this;
    }

    /**
     * Set the horaire prevu.
     *
     * @param float|null $horairePrevu The horaire prevu.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setHorairePrevu(?float $horairePrevu): PrepaPaie {
        $this->horairePrevu = $horairePrevu;
        return $this;
    }

    /**
     * Set the nb h comp.
     *
     * @param float|null $nbHComp The nb h comp.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setNbHComp(?float $nbHComp): PrepaPaie {
        $this->nbHComp = $nbHComp;
        return $this;
    }

    /**
     * Set the nb h nuit.
     *
     * @param float|null $nbHNuit The nb h nuit.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setNbHNuit(?float $nbHNuit): PrepaPaie {
        $this->nbHNuit = $nbHNuit;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setNumeroEmploye(?string $numeroEmploye): PrepaPaie {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setPeriode(?DateTime $periode): PrepaPaie {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcent h bonif.
     *
     * @param float|null $pourcentHBonif The pourcent h bonif.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setPourcentHBonif(?float $pourcentHBonif): PrepaPaie {
        $this->pourcentHBonif = $pourcentHBonif;
        return $this;
    }

    /**
     * Set the r recup acquis.
     *
     * @param float|null $rRecupAcquis The r recup acquis.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setRRecupAcquis(?float $rRecupAcquis): PrepaPaie {
        $this->rRecupAcquis = $rRecupAcquis;
        return $this;
    }

    /**
     * Set the r recup pris.
     *
     * @param float|null $rRecupPris The r recup pris.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setRRecupPris(?float $rRecupPris): PrepaPaie {
        $this->rRecupPris = $rRecupPris;
        return $this;
    }

    /**
     * Set the rc acquis.
     *
     * @param float|null $rcAcquis The rc acquis.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setRcAcquis(?float $rcAcquis): PrepaPaie {
        $this->rcAcquis = $rcAcquis;
        return $this;
    }

    /**
     * Set the rc pris.
     *
     * @param float|null $rcPris The rc pris.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setRcPris(?float $rcPris): PrepaPaie {
        $this->rcPris = $rcPris;
        return $this;
    }

    /**
     * Set the rr acquis.
     *
     * @param float|null $rrAcquis The rr acquis.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setRrAcquis(?float $rrAcquis): PrepaPaie {
        $this->rrAcquis = $rrAcquis;
        return $this;
    }

    /**
     * Set the rr pris.
     *
     * @param float|null $rrPris The rr pris.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setRrPris(?float $rrPris): PrepaPaie {
        $this->rrPris = $rrPris;
        return $this;
    }

    /**
     * Set the semaine.
     *
     * @param string|null $semaine The semaine.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setSemaine(?string $semaine): PrepaPaie {
        $this->semaine = $semaine;
        return $this;
    }

    /**
     * Set the tot realise.
     *
     * @param float|null $totRealise The tot realise.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setTotRealise(?float $totRealise): PrepaPaie {
        $this->totRealise = $totRealise;
        return $this;
    }

    /**
     * Set the travail effectif.
     *
     * @param float|null $travailEffectif The travail effectif.
     * @return PrepaPaie Returns this Prepa paie.
     */
    public function setTravailEffectif(?float $travailEffectif): PrepaPaie {
        $this->travailEffectif = $travailEffectif;
        return $this;
    }
}
