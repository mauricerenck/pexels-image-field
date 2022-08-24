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
 * Recap dpa.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class RecapDpa {

    /**
     * Aleas climat.
     *
     * @var float|null
     */
    private $aleasClimat;

    /**
     * Aleas eco.
     *
     * @var float|null
     */
    private $aleasEco;

    /**
     * Annee ded.
     *
     * @var int|null
     */
    private $anneeDed;

    /**
     * Annee utilisation.
     *
     * @var int|null
     */
    private $anneeUtilisation;

    /**
     * Autres.
     *
     * @var float|null
     */
    private $autres;

    /**
     * Franch dommages.
     *
     * @var float|null
     */
    private $franchDommages;

    /**
     * Mtt annee.
     *
     * @var float|null
     */
    private $mttAnnee;

    /**
     * Primes franch.
     *
     * @var float|null
     */
    private $primesFranch;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the aleas climat.
     *
     * @return float|null Returns the aleas climat.
     */
    public function getAleasClimat(): ?float {
        return $this->aleasClimat;
    }

    /**
     * Get the aleas eco.
     *
     * @return float|null Returns the aleas eco.
     */
    public function getAleasEco(): ?float {
        return $this->aleasEco;
    }

    /**
     * Get the annee ded.
     *
     * @return int|null Returns the annee ded.
     */
    public function getAnneeDed(): ?int {
        return $this->anneeDed;
    }

    /**
     * Get the annee utilisation.
     *
     * @return int|null Returns the annee utilisation.
     */
    public function getAnneeUtilisation(): ?int {
        return $this->anneeUtilisation;
    }

    /**
     * Get the autres.
     *
     * @return float|null Returns the autres.
     */
    public function getAutres(): ?float {
        return $this->autres;
    }

    /**
     * Get the franch dommages.
     *
     * @return float|null Returns the franch dommages.
     */
    public function getFranchDommages(): ?float {
        return $this->franchDommages;
    }

    /**
     * Get the mtt annee.
     *
     * @return float|null Returns the mtt annee.
     */
    public function getMttAnnee(): ?float {
        return $this->mttAnnee;
    }

    /**
     * Get the primes franch.
     *
     * @return float|null Returns the primes franch.
     */
    public function getPrimesFranch(): ?float {
        return $this->primesFranch;
    }

    /**
     * Set the aleas climat.
     *
     * @param float|null $aleasClimat The aleas climat.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setAleasClimat(?float $aleasClimat): RecapDpa {
        $this->aleasClimat = $aleasClimat;
        return $this;
    }

    /**
     * Set the aleas eco.
     *
     * @param float|null $aleasEco The aleas eco.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setAleasEco(?float $aleasEco): RecapDpa {
        $this->aleasEco = $aleasEco;
        return $this;
    }

    /**
     * Set the annee ded.
     *
     * @param int|null $anneeDed The annee ded.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setAnneeDed(?int $anneeDed): RecapDpa {
        $this->anneeDed = $anneeDed;
        return $this;
    }

    /**
     * Set the annee utilisation.
     *
     * @param int|null $anneeUtilisation The annee utilisation.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setAnneeUtilisation(?int $anneeUtilisation): RecapDpa {
        $this->anneeUtilisation = $anneeUtilisation;
        return $this;
    }

    /**
     * Set the autres.
     *
     * @param float|null $autres The autres.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setAutres(?float $autres): RecapDpa {
        $this->autres = $autres;
        return $this;
    }

    /**
     * Set the franch dommages.
     *
     * @param float|null $franchDommages The franch dommages.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setFranchDommages(?float $franchDommages): RecapDpa {
        $this->franchDommages = $franchDommages;
        return $this;
    }

    /**
     * Set the mtt annee.
     *
     * @param float|null $mttAnnee The mtt annee.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setMttAnnee(?float $mttAnnee): RecapDpa {
        $this->mttAnnee = $mttAnnee;
        return $this;
    }

    /**
     * Set the primes franch.
     *
     * @param float|null $primesFranch The primes franch.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setPrimesFranch(?float $primesFranch): RecapDpa {
        $this->primesFranch = $primesFranch;
        return $this;
    }
}
