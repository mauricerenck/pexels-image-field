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
 * Historiquehgroupe.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Historiquehgroupe {

    /**
     * Alpha.
     *
     * @var string|null
     */
    private $alpha;

    /**
     * An n.
     *
     * @var float|null
     */
    private $anN;

    /**
     * An n1.
     *
     * @var float|null
     */
    private $anN1;

    /**
     * An n2.
     *
     * @var float|null
     */
    private $anN2;

    /**
     * Budget1.
     *
     * @var float|null
     */
    private $budget1;

    /**
     * Budget2.
     *
     * @var float|null
     */
    private $budget2;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Flg an n.
     *
     * @var bool|null
     */
    private $flgAnN;

    /**
     * Flg an n1.
     *
     * @var bool|null
     */
    private $flgAnN1;

    /**
     * Flg an n2.
     *
     * @var bool|null
     */
    private $flgAnN2;

    /**
     * Flg budget1.
     *
     * @var bool|null
     */
    private $flgBudget1;

    /**
     * Flg budget2.
     *
     * @var bool|null
     */
    private $flgBudget2;

    /**
     * Fmt dec.
     *
     * @var int|null
     */
    private $fmtDec;

    /**
     * Fmt int.
     *
     * @var int|null
     */
    private $fmtInt;

    /**
     * Memo.
     *
     * @var string|null
     */
    private $memo;

    /**
     * No conv euro.
     *
     * @var bool|null
     */
    private $noConvEuro;

    /**
     * Regle.
     *
     * @var string|null
     */
    private $regle;

    /**
     * Rub.
     *
     * @var string|null
     */
    private $rub;

    /**
     * Type zone.
     *
     * @var string|null
     */
    private $typeZone;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the alpha.
     *
     * @return string|null Returns the alpha.
     */
    public function getAlpha(): ?string {
        return $this->alpha;
    }

    /**
     * Get the an n.
     *
     * @return float|null Returns the an n.
     */
    public function getAnN(): ?float {
        return $this->anN;
    }

    /**
     * Get the an n1.
     *
     * @return float|null Returns the an n1.
     */
    public function getAnN1(): ?float {
        return $this->anN1;
    }

    /**
     * Get the an n2.
     *
     * @return float|null Returns the an n2.
     */
    public function getAnN2(): ?float {
        return $this->anN2;
    }

    /**
     * Get the budget1.
     *
     * @return float|null Returns the budget1.
     */
    public function getBudget1(): ?float {
        return $this->budget1;
    }

    /**
     * Get the budget2.
     *
     * @return float|null Returns the budget2.
     */
    public function getBudget2(): ?float {
        return $this->budget2;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Get the flg an n.
     *
     * @return bool|null Returns the flg an n.
     */
    public function getFlgAnN(): ?bool {
        return $this->flgAnN;
    }

    /**
     * Get the flg an n1.
     *
     * @return bool|null Returns the flg an n1.
     */
    public function getFlgAnN1(): ?bool {
        return $this->flgAnN1;
    }

    /**
     * Get the flg an n2.
     *
     * @return bool|null Returns the flg an n2.
     */
    public function getFlgAnN2(): ?bool {
        return $this->flgAnN2;
    }

    /**
     * Get the flg budget1.
     *
     * @return bool|null Returns the flg budget1.
     */
    public function getFlgBudget1(): ?bool {
        return $this->flgBudget1;
    }

    /**
     * Get the flg budget2.
     *
     * @return bool|null Returns the flg budget2.
     */
    public function getFlgBudget2(): ?bool {
        return $this->flgBudget2;
    }

    /**
     * Get the fmt dec.
     *
     * @return int|null Returns the fmt dec.
     */
    public function getFmtDec(): ?int {
        return $this->fmtDec;
    }

    /**
     * Get the fmt int.
     *
     * @return int|null Returns the fmt int.
     */
    public function getFmtInt(): ?int {
        return $this->fmtInt;
    }

    /**
     * Get the memo.
     *
     * @return string|null Returns the memo.
     */
    public function getMemo(): ?string {
        return $this->memo;
    }

    /**
     * Get the no conv euro.
     *
     * @return bool|null Returns the no conv euro.
     */
    public function getNoConvEuro(): ?bool {
        return $this->noConvEuro;
    }

    /**
     * Get the regle.
     *
     * @return string|null Returns the regle.
     */
    public function getRegle(): ?string {
        return $this->regle;
    }

    /**
     * Get the rub.
     *
     * @return string|null Returns the rub.
     */
    public function getRub(): ?string {
        return $this->rub;
    }

    /**
     * Get the type zone.
     *
     * @return string|null Returns the type zone.
     */
    public function getTypeZone(): ?string {
        return $this->typeZone;
    }

    /**
     * Set the alpha.
     *
     * @param string|null $alpha The alpha.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setAlpha(?string $alpha): Historiquehgroupe {
        $this->alpha = $alpha;
        return $this;
    }

    /**
     * Set the an n.
     *
     * @param float|null $anN The an n.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setAnN(?float $anN): Historiquehgroupe {
        $this->anN = $anN;
        return $this;
    }

    /**
     * Set the an n1.
     *
     * @param float|null $anN1 The an n1.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setAnN1(?float $anN1): Historiquehgroupe {
        $this->anN1 = $anN1;
        return $this;
    }

    /**
     * Set the an n2.
     *
     * @param float|null $anN2 The an n2.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setAnN2(?float $anN2): Historiquehgroupe {
        $this->anN2 = $anN2;
        return $this;
    }

    /**
     * Set the budget1.
     *
     * @param float|null $budget1 The budget1.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setBudget1(?float $budget1): Historiquehgroupe {
        $this->budget1 = $budget1;
        return $this;
    }

    /**
     * Set the budget2.
     *
     * @param float|null $budget2 The budget2.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setBudget2(?float $budget2): Historiquehgroupe {
        $this->budget2 = $budget2;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setDate(?DateTime $date): Historiquehgroupe {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the flg an n.
     *
     * @param bool|null $flgAnN The flg an n.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setFlgAnN(?bool $flgAnN): Historiquehgroupe {
        $this->flgAnN = $flgAnN;
        return $this;
    }

    /**
     * Set the flg an n1.
     *
     * @param bool|null $flgAnN1 The flg an n1.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setFlgAnN1(?bool $flgAnN1): Historiquehgroupe {
        $this->flgAnN1 = $flgAnN1;
        return $this;
    }

    /**
     * Set the flg an n2.
     *
     * @param bool|null $flgAnN2 The flg an n2.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setFlgAnN2(?bool $flgAnN2): Historiquehgroupe {
        $this->flgAnN2 = $flgAnN2;
        return $this;
    }

    /**
     * Set the flg budget1.
     *
     * @param bool|null $flgBudget1 The flg budget1.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setFlgBudget1(?bool $flgBudget1): Historiquehgroupe {
        $this->flgBudget1 = $flgBudget1;
        return $this;
    }

    /**
     * Set the flg budget2.
     *
     * @param bool|null $flgBudget2 The flg budget2.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setFlgBudget2(?bool $flgBudget2): Historiquehgroupe {
        $this->flgBudget2 = $flgBudget2;
        return $this;
    }

    /**
     * Set the fmt dec.
     *
     * @param int|null $fmtDec The fmt dec.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setFmtDec(?int $fmtDec): Historiquehgroupe {
        $this->fmtDec = $fmtDec;
        return $this;
    }

    /**
     * Set the fmt int.
     *
     * @param int|null $fmtInt The fmt int.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setFmtInt(?int $fmtInt): Historiquehgroupe {
        $this->fmtInt = $fmtInt;
        return $this;
    }

    /**
     * Set the memo.
     *
     * @param string|null $memo The memo.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setMemo(?string $memo): Historiquehgroupe {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Set the no conv euro.
     *
     * @param bool|null $noConvEuro The no conv euro.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setNoConvEuro(?bool $noConvEuro): Historiquehgroupe {
        $this->noConvEuro = $noConvEuro;
        return $this;
    }

    /**
     * Set the regle.
     *
     * @param string|null $regle The regle.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setRegle(?string $regle): Historiquehgroupe {
        $this->regle = $regle;
        return $this;
    }

    /**
     * Set the rub.
     *
     * @param string|null $rub The rub.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setRub(?string $rub): Historiquehgroupe {
        $this->rub = $rub;
        return $this;
    }

    /**
     * Set the type zone.
     *
     * @param string|null $typeZone The type zone.
     * @return Historiquehgroupe Returns this Historiquehgroupe.
     */
    public function setTypeZone(?string $typeZone): Historiquehgroupe {
        $this->typeZone = $typeZone;
        return $this;
    }
}
