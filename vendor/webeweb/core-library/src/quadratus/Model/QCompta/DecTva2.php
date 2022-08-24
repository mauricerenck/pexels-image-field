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

use DateTime;

/**
 * Dec tva2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class DecTva2 {

    /**
     * As4284 base.
     *
     * @var float|null
     */
    private $as4284Base;

    /**
     * Az3510 base.
     *
     * @var float|null
     */
    private $az3510Base;

    /**
     * Az3520 base.
     *
     * @var float|null
     */
    private $az3520Base;

    /**
     * Az4204 nb.
     *
     * @var int|null
     */
    private $az4204Nb;

    /**
     * Az4206 nb.
     *
     * @var int|null
     */
    private $az4206Nb;

    /**
     * Az4207 nb k.
     *
     * @var int|null
     */
    private $az4207NbK;

    /**
     * Az4213 base.
     *
     * @var float|null
     */
    private $az4213Base;

    /**
     * Az4215 base.
     *
     * @var float|null
     */
    private $az4215Base;

    /**
     * Az4217 base.
     *
     * @var float|null
     */
    private $az4217Base;

    /**
     * Az4223 base.
     *
     * @var float|null
     */
    private $az4223Base;

    /**
     * Az4226 base.
     *
     * @var float|null
     */
    private $az4226Base;

    /**
     * Az4228 base.
     *
     * @var float|null
     */
    private $az4228Base;

    /**
     * Az4229 base.
     *
     * @var float|null
     */
    private $az4229Base;

    /**
     * Az4237 base.
     *
     * @var float|null
     */
    private $az4237Base;

    /**
     * Az4240 base.
     *
     * @var float|null
     */
    private $az4240Base;

    /**
     * Az4245 base.
     *
     * @var float|null
     */
    private $az4245Base;

    /**
     * Az4249 nb t.
     *
     * @var int|null
     */
    private $az4249NbT;

    /**
     * Az4250 nb e.
     *
     * @var int|null
     */
    private $az4250NbE;

    /**
     * Az4252 base.
     *
     * @var float|null
     */
    private $az4252Base;

    /**
     * Az4255 base.
     *
     * @var float|null
     */
    private $az4255Base;

    /**
     * Az4257 base.
     *
     * @var float|null
     */
    private $az4257Base;

    /**
     * Az4258 base.
     *
     * @var float|null
     */
    private $az4258Base;

    /**
     * Az4268 base2.
     *
     * @var float|null
     */
    private $az4268Base2;

    /**
     * Az4270 base2.
     *
     * @var float|null
     */
    private $az4270Base2;

    /**
     * Az4278.
     *
     * @var float|null
     */
    private $az4278;

    /**
     * Az4278 base.
     *
     * @var float|null
     */
    private $az4278Base;

    /**
     * Az4279.
     *
     * @var float|null
     */
    private $az4279;

    /**
     * Az4279 nb k.
     *
     * @var int|null
     */
    private $az4279NbK;

    /**
     * Az4279 nb v.
     *
     * @var int|null
     */
    private $az4279NbV;

    /**
     * Az4280.
     *
     * @var float|null
     */
    private $az4280;

    /**
     * Az4280 nb k.
     *
     * @var int|null
     */
    private $az4280NbK;

    /**
     * Az4280 nb v.
     *
     * @var int|null
     */
    private $az4280NbV;

    /**
     * Az4281.
     *
     * @var float|null
     */
    private $az4281;

    /**
     * Az4281 base.
     *
     * @var float|null
     */
    private $az4281Base;

    /**
     * Az4282.
     *
     * @var float|null
     */
    private $az4282;

    /**
     * Az4282 base.
     *
     * @var float|null
     */
    private $az4282Base;

    /**
     * Az4283.
     *
     * @var float|null
     */
    private $az4283;

    /**
     * Az4283 base.
     *
     * @var float|null
     */
    private $az4283Base;

    /**
     * Az4284.
     *
     * @var float|null
     */
    private $az4284;

    /**
     * Az4285.
     *
     * @var float|null
     */
    private $az4285;

    /**
     * Az4285 base.
     *
     * @var float|null
     */
    private $az4285Base;

    /**
     * Az4288.
     *
     * @var float|null
     */
    private $az4288;

    /**
     * Az4288 base.
     *
     * @var float|null
     */
    private $az4288Base;

    /**
     * Az4289.
     *
     * @var float|null
     */
    private $az4289;

    /**
     * Az4289 base.
     *
     * @var float|null
     */
    private $az4289Base;

    /**
     * Az4290.
     *
     * @var float|null
     */
    private $az4290;

    /**
     * Az4290 base.
     *
     * @var float|null
     */
    private $az4290Base;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the as4284 base.
     *
     * @return float|null Returns the as4284 base.
     */
    public function getAs4284Base(): ?float {
        return $this->as4284Base;
    }

    /**
     * Get the az3510 base.
     *
     * @return float|null Returns the az3510 base.
     */
    public function getAz3510Base(): ?float {
        return $this->az3510Base;
    }

    /**
     * Get the az3520 base.
     *
     * @return float|null Returns the az3520 base.
     */
    public function getAz3520Base(): ?float {
        return $this->az3520Base;
    }

    /**
     * Get the az4204 nb.
     *
     * @return int|null Returns the az4204 nb.
     */
    public function getAz4204Nb(): ?int {
        return $this->az4204Nb;
    }

    /**
     * Get the az4206 nb.
     *
     * @return int|null Returns the az4206 nb.
     */
    public function getAz4206Nb(): ?int {
        return $this->az4206Nb;
    }

    /**
     * Get the az4207 nb k.
     *
     * @return int|null Returns the az4207 nb k.
     */
    public function getAz4207NbK(): ?int {
        return $this->az4207NbK;
    }

    /**
     * Get the az4213 base.
     *
     * @return float|null Returns the az4213 base.
     */
    public function getAz4213Base(): ?float {
        return $this->az4213Base;
    }

    /**
     * Get the az4215 base.
     *
     * @return float|null Returns the az4215 base.
     */
    public function getAz4215Base(): ?float {
        return $this->az4215Base;
    }

    /**
     * Get the az4217 base.
     *
     * @return float|null Returns the az4217 base.
     */
    public function getAz4217Base(): ?float {
        return $this->az4217Base;
    }

    /**
     * Get the az4223 base.
     *
     * @return float|null Returns the az4223 base.
     */
    public function getAz4223Base(): ?float {
        return $this->az4223Base;
    }

    /**
     * Get the az4226 base.
     *
     * @return float|null Returns the az4226 base.
     */
    public function getAz4226Base(): ?float {
        return $this->az4226Base;
    }

    /**
     * Get the az4228 base.
     *
     * @return float|null Returns the az4228 base.
     */
    public function getAz4228Base(): ?float {
        return $this->az4228Base;
    }

    /**
     * Get the az4229 base.
     *
     * @return float|null Returns the az4229 base.
     */
    public function getAz4229Base(): ?float {
        return $this->az4229Base;
    }

    /**
     * Get the az4237 base.
     *
     * @return float|null Returns the az4237 base.
     */
    public function getAz4237Base(): ?float {
        return $this->az4237Base;
    }

    /**
     * Get the az4240 base.
     *
     * @return float|null Returns the az4240 base.
     */
    public function getAz4240Base(): ?float {
        return $this->az4240Base;
    }

    /**
     * Get the az4245 base.
     *
     * @return float|null Returns the az4245 base.
     */
    public function getAz4245Base(): ?float {
        return $this->az4245Base;
    }

    /**
     * Get the az4249 nb t.
     *
     * @return int|null Returns the az4249 nb t.
     */
    public function getAz4249NbT(): ?int {
        return $this->az4249NbT;
    }

    /**
     * Get the az4250 nb e.
     *
     * @return int|null Returns the az4250 nb e.
     */
    public function getAz4250NbE(): ?int {
        return $this->az4250NbE;
    }

    /**
     * Get the az4252 base.
     *
     * @return float|null Returns the az4252 base.
     */
    public function getAz4252Base(): ?float {
        return $this->az4252Base;
    }

    /**
     * Get the az4255 base.
     *
     * @return float|null Returns the az4255 base.
     */
    public function getAz4255Base(): ?float {
        return $this->az4255Base;
    }

    /**
     * Get the az4257 base.
     *
     * @return float|null Returns the az4257 base.
     */
    public function getAz4257Base(): ?float {
        return $this->az4257Base;
    }

    /**
     * Get the az4258 base.
     *
     * @return float|null Returns the az4258 base.
     */
    public function getAz4258Base(): ?float {
        return $this->az4258Base;
    }

    /**
     * Get the az4268 base2.
     *
     * @return float|null Returns the az4268 base2.
     */
    public function getAz4268Base2(): ?float {
        return $this->az4268Base2;
    }

    /**
     * Get the az4270 base2.
     *
     * @return float|null Returns the az4270 base2.
     */
    public function getAz4270Base2(): ?float {
        return $this->az4270Base2;
    }

    /**
     * Get the az4278.
     *
     * @return float|null Returns the az4278.
     */
    public function getAz4278(): ?float {
        return $this->az4278;
    }

    /**
     * Get the az4278 base.
     *
     * @return float|null Returns the az4278 base.
     */
    public function getAz4278Base(): ?float {
        return $this->az4278Base;
    }

    /**
     * Get the az4279.
     *
     * @return float|null Returns the az4279.
     */
    public function getAz4279(): ?float {
        return $this->az4279;
    }

    /**
     * Get the az4279 nb k.
     *
     * @return int|null Returns the az4279 nb k.
     */
    public function getAz4279NbK(): ?int {
        return $this->az4279NbK;
    }

    /**
     * Get the az4279 nb v.
     *
     * @return int|null Returns the az4279 nb v.
     */
    public function getAz4279NbV(): ?int {
        return $this->az4279NbV;
    }

    /**
     * Get the az4280.
     *
     * @return float|null Returns the az4280.
     */
    public function getAz4280(): ?float {
        return $this->az4280;
    }

    /**
     * Get the az4280 nb k.
     *
     * @return int|null Returns the az4280 nb k.
     */
    public function getAz4280NbK(): ?int {
        return $this->az4280NbK;
    }

    /**
     * Get the az4280 nb v.
     *
     * @return int|null Returns the az4280 nb v.
     */
    public function getAz4280NbV(): ?int {
        return $this->az4280NbV;
    }

    /**
     * Get the az4281.
     *
     * @return float|null Returns the az4281.
     */
    public function getAz4281(): ?float {
        return $this->az4281;
    }

    /**
     * Get the az4281 base.
     *
     * @return float|null Returns the az4281 base.
     */
    public function getAz4281Base(): ?float {
        return $this->az4281Base;
    }

    /**
     * Get the az4282.
     *
     * @return float|null Returns the az4282.
     */
    public function getAz4282(): ?float {
        return $this->az4282;
    }

    /**
     * Get the az4282 base.
     *
     * @return float|null Returns the az4282 base.
     */
    public function getAz4282Base(): ?float {
        return $this->az4282Base;
    }

    /**
     * Get the az4283.
     *
     * @return float|null Returns the az4283.
     */
    public function getAz4283(): ?float {
        return $this->az4283;
    }

    /**
     * Get the az4283 base.
     *
     * @return float|null Returns the az4283 base.
     */
    public function getAz4283Base(): ?float {
        return $this->az4283Base;
    }

    /**
     * Get the az4284.
     *
     * @return float|null Returns the az4284.
     */
    public function getAz4284(): ?float {
        return $this->az4284;
    }

    /**
     * Get the az4285.
     *
     * @return float|null Returns the az4285.
     */
    public function getAz4285(): ?float {
        return $this->az4285;
    }

    /**
     * Get the az4285 base.
     *
     * @return float|null Returns the az4285 base.
     */
    public function getAz4285Base(): ?float {
        return $this->az4285Base;
    }

    /**
     * Get the az4288.
     *
     * @return float|null Returns the az4288.
     */
    public function getAz4288(): ?float {
        return $this->az4288;
    }

    /**
     * Get the az4288 base.
     *
     * @return float|null Returns the az4288 base.
     */
    public function getAz4288Base(): ?float {
        return $this->az4288Base;
    }

    /**
     * Get the az4289.
     *
     * @return float|null Returns the az4289.
     */
    public function getAz4289(): ?float {
        return $this->az4289;
    }

    /**
     * Get the az4289 base.
     *
     * @return float|null Returns the az4289 base.
     */
    public function getAz4289Base(): ?float {
        return $this->az4289Base;
    }

    /**
     * Get the az4290.
     *
     * @return float|null Returns the az4290.
     */
    public function getAz4290(): ?float {
        return $this->az4290;
    }

    /**
     * Get the az4290 base.
     *
     * @return float|null Returns the az4290 base.
     */
    public function getAz4290Base(): ?float {
        return $this->az4290Base;
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
     * Set the as4284 base.
     *
     * @param float|null $as4284Base The as4284 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAs4284Base(?float $as4284Base): DecTva2 {
        $this->as4284Base = $as4284Base;
        return $this;
    }

    /**
     * Set the az3510 base.
     *
     * @param float|null $az3510Base The az3510 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz3510Base(?float $az3510Base): DecTva2 {
        $this->az3510Base = $az3510Base;
        return $this;
    }

    /**
     * Set the az3520 base.
     *
     * @param float|null $az3520Base The az3520 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz3520Base(?float $az3520Base): DecTva2 {
        $this->az3520Base = $az3520Base;
        return $this;
    }

    /**
     * Set the az4204 nb.
     *
     * @param int|null $az4204Nb The az4204 nb.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4204Nb(?int $az4204Nb): DecTva2 {
        $this->az4204Nb = $az4204Nb;
        return $this;
    }

    /**
     * Set the az4206 nb.
     *
     * @param int|null $az4206Nb The az4206 nb.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4206Nb(?int $az4206Nb): DecTva2 {
        $this->az4206Nb = $az4206Nb;
        return $this;
    }

    /**
     * Set the az4207 nb k.
     *
     * @param int|null $az4207NbK The az4207 nb k.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4207NbK(?int $az4207NbK): DecTva2 {
        $this->az4207NbK = $az4207NbK;
        return $this;
    }

    /**
     * Set the az4213 base.
     *
     * @param float|null $az4213Base The az4213 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4213Base(?float $az4213Base): DecTva2 {
        $this->az4213Base = $az4213Base;
        return $this;
    }

    /**
     * Set the az4215 base.
     *
     * @param float|null $az4215Base The az4215 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4215Base(?float $az4215Base): DecTva2 {
        $this->az4215Base = $az4215Base;
        return $this;
    }

    /**
     * Set the az4217 base.
     *
     * @param float|null $az4217Base The az4217 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4217Base(?float $az4217Base): DecTva2 {
        $this->az4217Base = $az4217Base;
        return $this;
    }

    /**
     * Set the az4223 base.
     *
     * @param float|null $az4223Base The az4223 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4223Base(?float $az4223Base): DecTva2 {
        $this->az4223Base = $az4223Base;
        return $this;
    }

    /**
     * Set the az4226 base.
     *
     * @param float|null $az4226Base The az4226 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4226Base(?float $az4226Base): DecTva2 {
        $this->az4226Base = $az4226Base;
        return $this;
    }

    /**
     * Set the az4228 base.
     *
     * @param float|null $az4228Base The az4228 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4228Base(?float $az4228Base): DecTva2 {
        $this->az4228Base = $az4228Base;
        return $this;
    }

    /**
     * Set the az4229 base.
     *
     * @param float|null $az4229Base The az4229 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4229Base(?float $az4229Base): DecTva2 {
        $this->az4229Base = $az4229Base;
        return $this;
    }

    /**
     * Set the az4237 base.
     *
     * @param float|null $az4237Base The az4237 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4237Base(?float $az4237Base): DecTva2 {
        $this->az4237Base = $az4237Base;
        return $this;
    }

    /**
     * Set the az4240 base.
     *
     * @param float|null $az4240Base The az4240 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4240Base(?float $az4240Base): DecTva2 {
        $this->az4240Base = $az4240Base;
        return $this;
    }

    /**
     * Set the az4245 base.
     *
     * @param float|null $az4245Base The az4245 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4245Base(?float $az4245Base): DecTva2 {
        $this->az4245Base = $az4245Base;
        return $this;
    }

    /**
     * Set the az4249 nb t.
     *
     * @param int|null $az4249NbT The az4249 nb t.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4249NbT(?int $az4249NbT): DecTva2 {
        $this->az4249NbT = $az4249NbT;
        return $this;
    }

    /**
     * Set the az4250 nb e.
     *
     * @param int|null $az4250NbE The az4250 nb e.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4250NbE(?int $az4250NbE): DecTva2 {
        $this->az4250NbE = $az4250NbE;
        return $this;
    }

    /**
     * Set the az4252 base.
     *
     * @param float|null $az4252Base The az4252 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4252Base(?float $az4252Base): DecTva2 {
        $this->az4252Base = $az4252Base;
        return $this;
    }

    /**
     * Set the az4255 base.
     *
     * @param float|null $az4255Base The az4255 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4255Base(?float $az4255Base): DecTva2 {
        $this->az4255Base = $az4255Base;
        return $this;
    }

    /**
     * Set the az4257 base.
     *
     * @param float|null $az4257Base The az4257 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4257Base(?float $az4257Base): DecTva2 {
        $this->az4257Base = $az4257Base;
        return $this;
    }

    /**
     * Set the az4258 base.
     *
     * @param float|null $az4258Base The az4258 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4258Base(?float $az4258Base): DecTva2 {
        $this->az4258Base = $az4258Base;
        return $this;
    }

    /**
     * Set the az4268 base2.
     *
     * @param float|null $az4268Base2 The az4268 base2.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4268Base2(?float $az4268Base2): DecTva2 {
        $this->az4268Base2 = $az4268Base2;
        return $this;
    }

    /**
     * Set the az4270 base2.
     *
     * @param float|null $az4270Base2 The az4270 base2.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4270Base2(?float $az4270Base2): DecTva2 {
        $this->az4270Base2 = $az4270Base2;
        return $this;
    }

    /**
     * Set the az4278.
     *
     * @param float|null $az4278 The az4278.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4278(?float $az4278): DecTva2 {
        $this->az4278 = $az4278;
        return $this;
    }

    /**
     * Set the az4278 base.
     *
     * @param float|null $az4278Base The az4278 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4278Base(?float $az4278Base): DecTva2 {
        $this->az4278Base = $az4278Base;
        return $this;
    }

    /**
     * Set the az4279.
     *
     * @param float|null $az4279 The az4279.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4279(?float $az4279): DecTva2 {
        $this->az4279 = $az4279;
        return $this;
    }

    /**
     * Set the az4279 nb k.
     *
     * @param int|null $az4279NbK The az4279 nb k.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4279NbK(?int $az4279NbK): DecTva2 {
        $this->az4279NbK = $az4279NbK;
        return $this;
    }

    /**
     * Set the az4279 nb v.
     *
     * @param int|null $az4279NbV The az4279 nb v.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4279NbV(?int $az4279NbV): DecTva2 {
        $this->az4279NbV = $az4279NbV;
        return $this;
    }

    /**
     * Set the az4280.
     *
     * @param float|null $az4280 The az4280.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4280(?float $az4280): DecTva2 {
        $this->az4280 = $az4280;
        return $this;
    }

    /**
     * Set the az4280 nb k.
     *
     * @param int|null $az4280NbK The az4280 nb k.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4280NbK(?int $az4280NbK): DecTva2 {
        $this->az4280NbK = $az4280NbK;
        return $this;
    }

    /**
     * Set the az4280 nb v.
     *
     * @param int|null $az4280NbV The az4280 nb v.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4280NbV(?int $az4280NbV): DecTva2 {
        $this->az4280NbV = $az4280NbV;
        return $this;
    }

    /**
     * Set the az4281.
     *
     * @param float|null $az4281 The az4281.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4281(?float $az4281): DecTva2 {
        $this->az4281 = $az4281;
        return $this;
    }

    /**
     * Set the az4281 base.
     *
     * @param float|null $az4281Base The az4281 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4281Base(?float $az4281Base): DecTva2 {
        $this->az4281Base = $az4281Base;
        return $this;
    }

    /**
     * Set the az4282.
     *
     * @param float|null $az4282 The az4282.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4282(?float $az4282): DecTva2 {
        $this->az4282 = $az4282;
        return $this;
    }

    /**
     * Set the az4282 base.
     *
     * @param float|null $az4282Base The az4282 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4282Base(?float $az4282Base): DecTva2 {
        $this->az4282Base = $az4282Base;
        return $this;
    }

    /**
     * Set the az4283.
     *
     * @param float|null $az4283 The az4283.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4283(?float $az4283): DecTva2 {
        $this->az4283 = $az4283;
        return $this;
    }

    /**
     * Set the az4283 base.
     *
     * @param float|null $az4283Base The az4283 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4283Base(?float $az4283Base): DecTva2 {
        $this->az4283Base = $az4283Base;
        return $this;
    }

    /**
     * Set the az4284.
     *
     * @param float|null $az4284 The az4284.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4284(?float $az4284): DecTva2 {
        $this->az4284 = $az4284;
        return $this;
    }

    /**
     * Set the az4285.
     *
     * @param float|null $az4285 The az4285.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4285(?float $az4285): DecTva2 {
        $this->az4285 = $az4285;
        return $this;
    }

    /**
     * Set the az4285 base.
     *
     * @param float|null $az4285Base The az4285 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4285Base(?float $az4285Base): DecTva2 {
        $this->az4285Base = $az4285Base;
        return $this;
    }

    /**
     * Set the az4288.
     *
     * @param float|null $az4288 The az4288.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4288(?float $az4288): DecTva2 {
        $this->az4288 = $az4288;
        return $this;
    }

    /**
     * Set the az4288 base.
     *
     * @param float|null $az4288Base The az4288 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4288Base(?float $az4288Base): DecTva2 {
        $this->az4288Base = $az4288Base;
        return $this;
    }

    /**
     * Set the az4289.
     *
     * @param float|null $az4289 The az4289.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4289(?float $az4289): DecTva2 {
        $this->az4289 = $az4289;
        return $this;
    }

    /**
     * Set the az4289 base.
     *
     * @param float|null $az4289Base The az4289 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4289Base(?float $az4289Base): DecTva2 {
        $this->az4289Base = $az4289Base;
        return $this;
    }

    /**
     * Set the az4290.
     *
     * @param float|null $az4290 The az4290.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4290(?float $az4290): DecTva2 {
        $this->az4290 = $az4290;
        return $this;
    }

    /**
     * Set the az4290 base.
     *
     * @param float|null $az4290Base The az4290 base.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setAz4290Base(?float $az4290Base): DecTva2 {
        $this->az4290Base = $az4290Base;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return DecTva2 Returns this Dec tva2.
     */
    public function setPeriode(?DateTime $periode): DecTva2 {
        $this->periode = $periode;
        return $this;
    }
}
