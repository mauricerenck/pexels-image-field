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
 * Transfert immos.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class TransfertImmos {

    /**
     * Cpt der cap.
     *
     * @var string|null
     */
    private $cptDerCap;

    /**
     * Cpt der dot.
     *
     * @var string|null
     */
    private $cptDerDot;

    /**
     * Cpt der maj.
     *
     * @var string|null
     */
    private $cptDerMaj;

    /**
     * Cpt der rep.
     *
     * @var string|null
     */
    private $cptDerRep;

    /**
     * Cpt dot cor.
     *
     * @var string|null
     */
    private $cptDotCor;

    /**
     * Cpt dot exc.
     *
     * @var string|null
     */
    private $cptDotExc;

    /**
     * Cpt dot fin.
     *
     * @var string|null
     */
    private $cptDotFin;

    /**
     * Cpt dot inc.
     *
     * @var string|null
     */
    private $cptDotInc;

    /**
     * Cpt val cor.
     *
     * @var string|null
     */
    private $cptValCor;

    /**
     * Cpt val exc.
     *
     * @var string|null
     */
    private $cptValExc;

    /**
     * Cpt val fin.
     *
     * @var string|null
     */
    private $cptValFin;

    /**
     * Cpt val inc.
     *
     * @var string|null
     */
    private $cptValInc;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the cpt der cap.
     *
     * @return string|null Returns the cpt der cap.
     */
    public function getCptDerCap(): ?string {
        return $this->cptDerCap;
    }

    /**
     * Get the cpt der dot.
     *
     * @return string|null Returns the cpt der dot.
     */
    public function getCptDerDot(): ?string {
        return $this->cptDerDot;
    }

    /**
     * Get the cpt der maj.
     *
     * @return string|null Returns the cpt der maj.
     */
    public function getCptDerMaj(): ?string {
        return $this->cptDerMaj;
    }

    /**
     * Get the cpt der rep.
     *
     * @return string|null Returns the cpt der rep.
     */
    public function getCptDerRep(): ?string {
        return $this->cptDerRep;
    }

    /**
     * Get the cpt dot cor.
     *
     * @return string|null Returns the cpt dot cor.
     */
    public function getCptDotCor(): ?string {
        return $this->cptDotCor;
    }

    /**
     * Get the cpt dot exc.
     *
     * @return string|null Returns the cpt dot exc.
     */
    public function getCptDotExc(): ?string {
        return $this->cptDotExc;
    }

    /**
     * Get the cpt dot fin.
     *
     * @return string|null Returns the cpt dot fin.
     */
    public function getCptDotFin(): ?string {
        return $this->cptDotFin;
    }

    /**
     * Get the cpt dot inc.
     *
     * @return string|null Returns the cpt dot inc.
     */
    public function getCptDotInc(): ?string {
        return $this->cptDotInc;
    }

    /**
     * Get the cpt val cor.
     *
     * @return string|null Returns the cpt val cor.
     */
    public function getCptValCor(): ?string {
        return $this->cptValCor;
    }

    /**
     * Get the cpt val exc.
     *
     * @return string|null Returns the cpt val exc.
     */
    public function getCptValExc(): ?string {
        return $this->cptValExc;
    }

    /**
     * Get the cpt val fin.
     *
     * @return string|null Returns the cpt val fin.
     */
    public function getCptValFin(): ?string {
        return $this->cptValFin;
    }

    /**
     * Get the cpt val inc.
     *
     * @return string|null Returns the cpt val inc.
     */
    public function getCptValInc(): ?string {
        return $this->cptValInc;
    }

    /**
     * Set the cpt der cap.
     *
     * @param string|null $cptDerCap The cpt der cap.
     * @return TransfertImmos Returns this Transfert immos.
     */
    public function setCptDerCap(?string $cptDerCap): TransfertImmos {
        $this->cptDerCap = $cptDerCap;
        return $this;
    }

    /**
     * Set the cpt der dot.
     *
     * @param string|null $cptDerDot The cpt der dot.
     * @return TransfertImmos Returns this Transfert immos.
     */
    public function setCptDerDot(?string $cptDerDot): TransfertImmos {
        $this->cptDerDot = $cptDerDot;
        return $this;
    }

    /**
     * Set the cpt der maj.
     *
     * @param string|null $cptDerMaj The cpt der maj.
     * @return TransfertImmos Returns this Transfert immos.
     */
    public function setCptDerMaj(?string $cptDerMaj): TransfertImmos {
        $this->cptDerMaj = $cptDerMaj;
        return $this;
    }

    /**
     * Set the cpt der rep.
     *
     * @param string|null $cptDerRep The cpt der rep.
     * @return TransfertImmos Returns this Transfert immos.
     */
    public function setCptDerRep(?string $cptDerRep): TransfertImmos {
        $this->cptDerRep = $cptDerRep;
        return $this;
    }

    /**
     * Set the cpt dot cor.
     *
     * @param string|null $cptDotCor The cpt dot cor.
     * @return TransfertImmos Returns this Transfert immos.
     */
    public function setCptDotCor(?string $cptDotCor): TransfertImmos {
        $this->cptDotCor = $cptDotCor;
        return $this;
    }

    /**
     * Set the cpt dot exc.
     *
     * @param string|null $cptDotExc The cpt dot exc.
     * @return TransfertImmos Returns this Transfert immos.
     */
    public function setCptDotExc(?string $cptDotExc): TransfertImmos {
        $this->cptDotExc = $cptDotExc;
        return $this;
    }

    /**
     * Set the cpt dot fin.
     *
     * @param string|null $cptDotFin The cpt dot fin.
     * @return TransfertImmos Returns this Transfert immos.
     */
    public function setCptDotFin(?string $cptDotFin): TransfertImmos {
        $this->cptDotFin = $cptDotFin;
        return $this;
    }

    /**
     * Set the cpt dot inc.
     *
     * @param string|null $cptDotInc The cpt dot inc.
     * @return TransfertImmos Returns this Transfert immos.
     */
    public function setCptDotInc(?string $cptDotInc): TransfertImmos {
        $this->cptDotInc = $cptDotInc;
        return $this;
    }

    /**
     * Set the cpt val cor.
     *
     * @param string|null $cptValCor The cpt val cor.
     * @return TransfertImmos Returns this Transfert immos.
     */
    public function setCptValCor(?string $cptValCor): TransfertImmos {
        $this->cptValCor = $cptValCor;
        return $this;
    }

    /**
     * Set the cpt val exc.
     *
     * @param string|null $cptValExc The cpt val exc.
     * @return TransfertImmos Returns this Transfert immos.
     */
    public function setCptValExc(?string $cptValExc): TransfertImmos {
        $this->cptValExc = $cptValExc;
        return $this;
    }

    /**
     * Set the cpt val fin.
     *
     * @param string|null $cptValFin The cpt val fin.
     * @return TransfertImmos Returns this Transfert immos.
     */
    public function setCptValFin(?string $cptValFin): TransfertImmos {
        $this->cptValFin = $cptValFin;
        return $this;
    }

    /**
     * Set the cpt val inc.
     *
     * @param string|null $cptValInc The cpt val inc.
     * @return TransfertImmos Returns this Transfert immos.
     */
    public function setCptValInc(?string $cptValInc): TransfertImmos {
        $this->cptValInc = $cptValInc;
        return $this;
    }
}
