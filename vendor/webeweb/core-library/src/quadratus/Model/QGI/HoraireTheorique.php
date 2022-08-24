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
 * Horaire theorique.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class HoraireTheorique {

    /**
     * Annee.
     *
     * @var int|null
     */
    private $annee;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Nbre h.
     *
     * @var float|null
     */
    private $nbreH;

    /**
     * Nbre h dimanche.
     *
     * @var float|null
     */
    private $nbreHDimanche;

    /**
     * Nbre h jeudi.
     *
     * @var float|null
     */
    private $nbreHJeudi;

    /**
     * Nbre h lundi.
     *
     * @var float|null
     */
    private $nbreHLundi;

    /**
     * Nbre h mardi.
     *
     * @var float|null
     */
    private $nbreHMardi;

    /**
     * Nbre h max.
     *
     * @var float|null
     */
    private $nbreHMax;

    /**
     * Nbre h maxi dimanche.
     *
     * @var float|null
     */
    private $nbreHMaxiDimanche;

    /**
     * Nbre h maxi jeudi.
     *
     * @var float|null
     */
    private $nbreHMaxiJeudi;

    /**
     * Nbre h maxi lundi.
     *
     * @var float|null
     */
    private $nbreHMaxiLundi;

    /**
     * Nbre h maxi mardi.
     *
     * @var float|null
     */
    private $nbreHMaxiMardi;

    /**
     * Nbre h maxi mercredi.
     *
     * @var float|null
     */
    private $nbreHMaxiMercredi;

    /**
     * Nbre h maxi samedi.
     *
     * @var float|null
     */
    private $nbreHMaxiSamedi;

    /**
     * Nbre h maxi vendredi.
     *
     * @var float|null
     */
    private $nbreHMaxiVendredi;

    /**
     * Nbre h mercredi.
     *
     * @var float|null
     */
    private $nbreHMercredi;

    /**
     * Nbre h mini.
     *
     * @var float|null
     */
    private $nbreHMini;

    /**
     * Nbre h mini dimanche.
     *
     * @var float|null
     */
    private $nbreHMiniDimanche;

    /**
     * Nbre h mini jeudi.
     *
     * @var float|null
     */
    private $nbreHMiniJeudi;

    /**
     * Nbre h mini lundi.
     *
     * @var float|null
     */
    private $nbreHMiniLundi;

    /**
     * Nbre h mini mardi.
     *
     * @var float|null
     */
    private $nbreHMiniMardi;

    /**
     * Nbre h mini mercredi.
     *
     * @var float|null
     */
    private $nbreHMiniMercredi;

    /**
     * Nbre h mini samedi.
     *
     * @var float|null
     */
    private $nbreHMiniSamedi;

    /**
     * Nbre h mini vendredi.
     *
     * @var float|null
     */
    private $nbreHMiniVendredi;

    /**
     * Nbre h samedi.
     *
     * @var float|null
     */
    private $nbreHSamedi;

    /**
     * Nbre h vendredi.
     *
     * @var float|null
     */
    private $nbreHVendredi;

    /**
     * Numero sem.
     *
     * @var int|null
     */
    private $numeroSem;

    /**
     * T dimanche.
     *
     * @var bool|null
     */
    private $tDimanche;

    /**
     * T jeudi.
     *
     * @var bool|null
     */
    private $tJeudi;

    /**
     * T lundi.
     *
     * @var bool|null
     */
    private $tLundi;

    /**
     * T mardi.
     *
     * @var bool|null
     */
    private $tMardi;

    /**
     * T mercredi.
     *
     * @var bool|null
     */
    private $tMercredi;

    /**
     * T samedi.
     *
     * @var bool|null
     */
    private $tSamedi;

    /**
     * T vendredi.
     *
     * @var bool|null
     */
    private $tVendredi;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the annee.
     *
     * @return int|null Returns the annee.
     */
    public function getAnnee(): ?int {
        return $this->annee;
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
     * Get the nbre h.
     *
     * @return float|null Returns the nbre h.
     */
    public function getNbreH(): ?float {
        return $this->nbreH;
    }

    /**
     * Get the nbre h dimanche.
     *
     * @return float|null Returns the nbre h dimanche.
     */
    public function getNbreHDimanche(): ?float {
        return $this->nbreHDimanche;
    }

    /**
     * Get the nbre h jeudi.
     *
     * @return float|null Returns the nbre h jeudi.
     */
    public function getNbreHJeudi(): ?float {
        return $this->nbreHJeudi;
    }

    /**
     * Get the nbre h lundi.
     *
     * @return float|null Returns the nbre h lundi.
     */
    public function getNbreHLundi(): ?float {
        return $this->nbreHLundi;
    }

    /**
     * Get the nbre h mardi.
     *
     * @return float|null Returns the nbre h mardi.
     */
    public function getNbreHMardi(): ?float {
        return $this->nbreHMardi;
    }

    /**
     * Get the nbre h max.
     *
     * @return float|null Returns the nbre h max.
     */
    public function getNbreHMax(): ?float {
        return $this->nbreHMax;
    }

    /**
     * Get the nbre h maxi dimanche.
     *
     * @return float|null Returns the nbre h maxi dimanche.
     */
    public function getNbreHMaxiDimanche(): ?float {
        return $this->nbreHMaxiDimanche;
    }

    /**
     * Get the nbre h maxi jeudi.
     *
     * @return float|null Returns the nbre h maxi jeudi.
     */
    public function getNbreHMaxiJeudi(): ?float {
        return $this->nbreHMaxiJeudi;
    }

    /**
     * Get the nbre h maxi lundi.
     *
     * @return float|null Returns the nbre h maxi lundi.
     */
    public function getNbreHMaxiLundi(): ?float {
        return $this->nbreHMaxiLundi;
    }

    /**
     * Get the nbre h maxi mardi.
     *
     * @return float|null Returns the nbre h maxi mardi.
     */
    public function getNbreHMaxiMardi(): ?float {
        return $this->nbreHMaxiMardi;
    }

    /**
     * Get the nbre h maxi mercredi.
     *
     * @return float|null Returns the nbre h maxi mercredi.
     */
    public function getNbreHMaxiMercredi(): ?float {
        return $this->nbreHMaxiMercredi;
    }

    /**
     * Get the nbre h maxi samedi.
     *
     * @return float|null Returns the nbre h maxi samedi.
     */
    public function getNbreHMaxiSamedi(): ?float {
        return $this->nbreHMaxiSamedi;
    }

    /**
     * Get the nbre h maxi vendredi.
     *
     * @return float|null Returns the nbre h maxi vendredi.
     */
    public function getNbreHMaxiVendredi(): ?float {
        return $this->nbreHMaxiVendredi;
    }

    /**
     * Get the nbre h mercredi.
     *
     * @return float|null Returns the nbre h mercredi.
     */
    public function getNbreHMercredi(): ?float {
        return $this->nbreHMercredi;
    }

    /**
     * Get the nbre h mini.
     *
     * @return float|null Returns the nbre h mini.
     */
    public function getNbreHMini(): ?float {
        return $this->nbreHMini;
    }

    /**
     * Get the nbre h mini dimanche.
     *
     * @return float|null Returns the nbre h mini dimanche.
     */
    public function getNbreHMiniDimanche(): ?float {
        return $this->nbreHMiniDimanche;
    }

    /**
     * Get the nbre h mini jeudi.
     *
     * @return float|null Returns the nbre h mini jeudi.
     */
    public function getNbreHMiniJeudi(): ?float {
        return $this->nbreHMiniJeudi;
    }

    /**
     * Get the nbre h mini lundi.
     *
     * @return float|null Returns the nbre h mini lundi.
     */
    public function getNbreHMiniLundi(): ?float {
        return $this->nbreHMiniLundi;
    }

    /**
     * Get the nbre h mini mardi.
     *
     * @return float|null Returns the nbre h mini mardi.
     */
    public function getNbreHMiniMardi(): ?float {
        return $this->nbreHMiniMardi;
    }

    /**
     * Get the nbre h mini mercredi.
     *
     * @return float|null Returns the nbre h mini mercredi.
     */
    public function getNbreHMiniMercredi(): ?float {
        return $this->nbreHMiniMercredi;
    }

    /**
     * Get the nbre h mini samedi.
     *
     * @return float|null Returns the nbre h mini samedi.
     */
    public function getNbreHMiniSamedi(): ?float {
        return $this->nbreHMiniSamedi;
    }

    /**
     * Get the nbre h mini vendredi.
     *
     * @return float|null Returns the nbre h mini vendredi.
     */
    public function getNbreHMiniVendredi(): ?float {
        return $this->nbreHMiniVendredi;
    }

    /**
     * Get the nbre h samedi.
     *
     * @return float|null Returns the nbre h samedi.
     */
    public function getNbreHSamedi(): ?float {
        return $this->nbreHSamedi;
    }

    /**
     * Get the nbre h vendredi.
     *
     * @return float|null Returns the nbre h vendredi.
     */
    public function getNbreHVendredi(): ?float {
        return $this->nbreHVendredi;
    }

    /**
     * Get the numero sem.
     *
     * @return int|null Returns the numero sem.
     */
    public function getNumeroSem(): ?int {
        return $this->numeroSem;
    }

    /**
     * Get the t dimanche.
     *
     * @return bool|null Returns the t dimanche.
     */
    public function getTDimanche(): ?bool {
        return $this->tDimanche;
    }

    /**
     * Get the t jeudi.
     *
     * @return bool|null Returns the t jeudi.
     */
    public function getTJeudi(): ?bool {
        return $this->tJeudi;
    }

    /**
     * Get the t lundi.
     *
     * @return bool|null Returns the t lundi.
     */
    public function getTLundi(): ?bool {
        return $this->tLundi;
    }

    /**
     * Get the t mardi.
     *
     * @return bool|null Returns the t mardi.
     */
    public function getTMardi(): ?bool {
        return $this->tMardi;
    }

    /**
     * Get the t mercredi.
     *
     * @return bool|null Returns the t mercredi.
     */
    public function getTMercredi(): ?bool {
        return $this->tMercredi;
    }

    /**
     * Get the t samedi.
     *
     * @return bool|null Returns the t samedi.
     */
    public function getTSamedi(): ?bool {
        return $this->tSamedi;
    }

    /**
     * Get the t vendredi.
     *
     * @return bool|null Returns the t vendredi.
     */
    public function getTVendredi(): ?bool {
        return $this->tVendredi;
    }

    /**
     * Set the annee.
     *
     * @param int|null $annee The annee.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setAnnee(?int $annee): HoraireTheorique {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setCode(?string $code): HoraireTheorique {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the nbre h.
     *
     * @param float|null $nbreH The nbre h.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreH(?float $nbreH): HoraireTheorique {
        $this->nbreH = $nbreH;
        return $this;
    }

    /**
     * Set the nbre h dimanche.
     *
     * @param float|null $nbreHDimanche The nbre h dimanche.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHDimanche(?float $nbreHDimanche): HoraireTheorique {
        $this->nbreHDimanche = $nbreHDimanche;
        return $this;
    }

    /**
     * Set the nbre h jeudi.
     *
     * @param float|null $nbreHJeudi The nbre h jeudi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHJeudi(?float $nbreHJeudi): HoraireTheorique {
        $this->nbreHJeudi = $nbreHJeudi;
        return $this;
    }

    /**
     * Set the nbre h lundi.
     *
     * @param float|null $nbreHLundi The nbre h lundi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHLundi(?float $nbreHLundi): HoraireTheorique {
        $this->nbreHLundi = $nbreHLundi;
        return $this;
    }

    /**
     * Set the nbre h mardi.
     *
     * @param float|null $nbreHMardi The nbre h mardi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMardi(?float $nbreHMardi): HoraireTheorique {
        $this->nbreHMardi = $nbreHMardi;
        return $this;
    }

    /**
     * Set the nbre h max.
     *
     * @param float|null $nbreHMax The nbre h max.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMax(?float $nbreHMax): HoraireTheorique {
        $this->nbreHMax = $nbreHMax;
        return $this;
    }

    /**
     * Set the nbre h maxi dimanche.
     *
     * @param float|null $nbreHMaxiDimanche The nbre h maxi dimanche.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMaxiDimanche(?float $nbreHMaxiDimanche): HoraireTheorique {
        $this->nbreHMaxiDimanche = $nbreHMaxiDimanche;
        return $this;
    }

    /**
     * Set the nbre h maxi jeudi.
     *
     * @param float|null $nbreHMaxiJeudi The nbre h maxi jeudi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMaxiJeudi(?float $nbreHMaxiJeudi): HoraireTheorique {
        $this->nbreHMaxiJeudi = $nbreHMaxiJeudi;
        return $this;
    }

    /**
     * Set the nbre h maxi lundi.
     *
     * @param float|null $nbreHMaxiLundi The nbre h maxi lundi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMaxiLundi(?float $nbreHMaxiLundi): HoraireTheorique {
        $this->nbreHMaxiLundi = $nbreHMaxiLundi;
        return $this;
    }

    /**
     * Set the nbre h maxi mardi.
     *
     * @param float|null $nbreHMaxiMardi The nbre h maxi mardi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMaxiMardi(?float $nbreHMaxiMardi): HoraireTheorique {
        $this->nbreHMaxiMardi = $nbreHMaxiMardi;
        return $this;
    }

    /**
     * Set the nbre h maxi mercredi.
     *
     * @param float|null $nbreHMaxiMercredi The nbre h maxi mercredi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMaxiMercredi(?float $nbreHMaxiMercredi): HoraireTheorique {
        $this->nbreHMaxiMercredi = $nbreHMaxiMercredi;
        return $this;
    }

    /**
     * Set the nbre h maxi samedi.
     *
     * @param float|null $nbreHMaxiSamedi The nbre h maxi samedi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMaxiSamedi(?float $nbreHMaxiSamedi): HoraireTheorique {
        $this->nbreHMaxiSamedi = $nbreHMaxiSamedi;
        return $this;
    }

    /**
     * Set the nbre h maxi vendredi.
     *
     * @param float|null $nbreHMaxiVendredi The nbre h maxi vendredi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMaxiVendredi(?float $nbreHMaxiVendredi): HoraireTheorique {
        $this->nbreHMaxiVendredi = $nbreHMaxiVendredi;
        return $this;
    }

    /**
     * Set the nbre h mercredi.
     *
     * @param float|null $nbreHMercredi The nbre h mercredi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMercredi(?float $nbreHMercredi): HoraireTheorique {
        $this->nbreHMercredi = $nbreHMercredi;
        return $this;
    }

    /**
     * Set the nbre h mini.
     *
     * @param float|null $nbreHMini The nbre h mini.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMini(?float $nbreHMini): HoraireTheorique {
        $this->nbreHMini = $nbreHMini;
        return $this;
    }

    /**
     * Set the nbre h mini dimanche.
     *
     * @param float|null $nbreHMiniDimanche The nbre h mini dimanche.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMiniDimanche(?float $nbreHMiniDimanche): HoraireTheorique {
        $this->nbreHMiniDimanche = $nbreHMiniDimanche;
        return $this;
    }

    /**
     * Set the nbre h mini jeudi.
     *
     * @param float|null $nbreHMiniJeudi The nbre h mini jeudi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMiniJeudi(?float $nbreHMiniJeudi): HoraireTheorique {
        $this->nbreHMiniJeudi = $nbreHMiniJeudi;
        return $this;
    }

    /**
     * Set the nbre h mini lundi.
     *
     * @param float|null $nbreHMiniLundi The nbre h mini lundi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMiniLundi(?float $nbreHMiniLundi): HoraireTheorique {
        $this->nbreHMiniLundi = $nbreHMiniLundi;
        return $this;
    }

    /**
     * Set the nbre h mini mardi.
     *
     * @param float|null $nbreHMiniMardi The nbre h mini mardi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMiniMardi(?float $nbreHMiniMardi): HoraireTheorique {
        $this->nbreHMiniMardi = $nbreHMiniMardi;
        return $this;
    }

    /**
     * Set the nbre h mini mercredi.
     *
     * @param float|null $nbreHMiniMercredi The nbre h mini mercredi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMiniMercredi(?float $nbreHMiniMercredi): HoraireTheorique {
        $this->nbreHMiniMercredi = $nbreHMiniMercredi;
        return $this;
    }

    /**
     * Set the nbre h mini samedi.
     *
     * @param float|null $nbreHMiniSamedi The nbre h mini samedi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMiniSamedi(?float $nbreHMiniSamedi): HoraireTheorique {
        $this->nbreHMiniSamedi = $nbreHMiniSamedi;
        return $this;
    }

    /**
     * Set the nbre h mini vendredi.
     *
     * @param float|null $nbreHMiniVendredi The nbre h mini vendredi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHMiniVendredi(?float $nbreHMiniVendredi): HoraireTheorique {
        $this->nbreHMiniVendredi = $nbreHMiniVendredi;
        return $this;
    }

    /**
     * Set the nbre h samedi.
     *
     * @param float|null $nbreHSamedi The nbre h samedi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHSamedi(?float $nbreHSamedi): HoraireTheorique {
        $this->nbreHSamedi = $nbreHSamedi;
        return $this;
    }

    /**
     * Set the nbre h vendredi.
     *
     * @param float|null $nbreHVendredi The nbre h vendredi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNbreHVendredi(?float $nbreHVendredi): HoraireTheorique {
        $this->nbreHVendredi = $nbreHVendredi;
        return $this;
    }

    /**
     * Set the numero sem.
     *
     * @param int|null $numeroSem The numero sem.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setNumeroSem(?int $numeroSem): HoraireTheorique {
        $this->numeroSem = $numeroSem;
        return $this;
    }

    /**
     * Set the t dimanche.
     *
     * @param bool|null $tDimanche The t dimanche.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setTDimanche(?bool $tDimanche): HoraireTheorique {
        $this->tDimanche = $tDimanche;
        return $this;
    }

    /**
     * Set the t jeudi.
     *
     * @param bool|null $tJeudi The t jeudi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setTJeudi(?bool $tJeudi): HoraireTheorique {
        $this->tJeudi = $tJeudi;
        return $this;
    }

    /**
     * Set the t lundi.
     *
     * @param bool|null $tLundi The t lundi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setTLundi(?bool $tLundi): HoraireTheorique {
        $this->tLundi = $tLundi;
        return $this;
    }

    /**
     * Set the t mardi.
     *
     * @param bool|null $tMardi The t mardi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setTMardi(?bool $tMardi): HoraireTheorique {
        $this->tMardi = $tMardi;
        return $this;
    }

    /**
     * Set the t mercredi.
     *
     * @param bool|null $tMercredi The t mercredi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setTMercredi(?bool $tMercredi): HoraireTheorique {
        $this->tMercredi = $tMercredi;
        return $this;
    }

    /**
     * Set the t samedi.
     *
     * @param bool|null $tSamedi The t samedi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setTSamedi(?bool $tSamedi): HoraireTheorique {
        $this->tSamedi = $tSamedi;
        return $this;
    }

    /**
     * Set the t vendredi.
     *
     * @param bool|null $tVendredi The t vendredi.
     * @return HoraireTheorique Returns this Horaire theorique.
     */
    public function setTVendredi(?bool $tVendredi): HoraireTheorique {
        $this->tVendredi = $tVendredi;
        return $this;
    }
}
