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
 * Dec tva3514.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class DecTva3514 {

    /**
     * 02 base ht196.
     *
     * @var float|null
     */
    private $_02BaseHt196;

    /**
     * 02 taxe due196.
     *
     * @var float|null
     */
    private $_02TaxeDue196;

    /**
     * 03 base ht55.
     *
     * @var float|null
     */
    private $_03BaseHt55;

    /**
     * 03 taxe due55.
     *
     * @var float|null
     */
    private $_03TaxeDue55;

    /**
     * 04 base ht85.
     *
     * @var float|null
     */
    private $_04BaseHt85;

    /**
     * 04 taxe due85.
     *
     * @var float|null
     */
    private $_04TaxeDue85;

    /**
     * 05 base ht21.
     *
     * @var float|null
     */
    private $_05BaseHt21;

    /**
     * 05 taxe due21.
     *
     * @var float|null
     */
    private $_05TaxeDue21;

    /**
     * 06 base ht anc taux.
     *
     * @var float|null
     */
    private $_06BaseHtAncTaux;

    /**
     * 06 taxe due anc taux.
     *
     * @var float|null
     */
    private $_06TaxeDueAncTaux;

    /**
     * 07 base ht taux part.
     *
     * @var float|null
     */
    private $_07BaseHtTauxPart;

    /**
     * 07 taxe due taux part.
     *
     * @var float|null
     */
    private $_07TaxeDueTauxPart;

    /**
     * 08 base httv aa reverser.
     *
     * @var float|null
     */
    private $_08BaseHttvAaReverser;

    /**
     * 08 taxe due tv aa reverser.
     *
     * @var float|null
     */
    private $_08TaxeDueTvAaReverser;

    /**
     * 09 total tva brute.
     *
     * @var float|null
     */
    private $_09TotalTvaBrute;

    /**
     * 10 biens immos.
     *
     * @var float|null
     */
    private $_10BiensImmos;

    /**
     * 11 autres biens.
     *
     * @var float|null
     */
    private $_11AutresBiens;

    /**
     * 12 omission.
     *
     * @var float|null
     */
    private $_12Omission;

    /**
     * 13 total tva deduc.
     *
     * @var float|null
     */
    private $_13TotalTvaDeduc;

    /**
     * 14 a.
     *
     * @var float|null
     */
    private $_14A;

    /**
     * 15 b.
     *
     * @var float|null
     */
    private $_15B;

    /**
     * 16 rembours tva.
     *
     * @var float|null
     */
    private $_16RemboursTva;

    /**
     * 18 credit tvaca12.
     *
     * @var float|null
     */
    private $_18CreditTvaca12;

    /**
     * 1 mtt augmentation.
     *
     * @var float|null
     */
    private $_1MttAugmentation;

    /**
     * 20 acompte ta1.
     *
     * @var float|null
     */
    private $_20AcompteTa1;

    /**
     * 20 acompte ta2.
     *
     * @var float|null
     */
    private $_20AcompteTa2;

    /**
     * 21 acompte tot1.
     *
     * @var float|null
     */
    private $_21AcompteTot1;

    /**
     * 21 acompte tot2.
     *
     * @var float|null
     */
    private $_21AcompteTot2;

    /**
     * 2 b base ht7.
     *
     * @var float|null
     */
    private $_2BBaseHt7;

    /**
     * 2 b taxe due7.
     *
     * @var float|null
     */
    private $_2BTaxeDue7;

    /**
     * 2 mtt credit prec.
     *
     * @var float|null
     */
    private $_2MttCreditPrec;

    /**
     * 2 mtt diminution.
     *
     * @var float|null
     */
    private $_2MttDiminution;

    /**
     * 3 mtt diminution.
     *
     * @var float|null
     */
    private $_3MttDiminution;

    /**
     * 3 suspension.
     *
     * @var int|null
     */
    private $_3Suspension;

    /**
     * 4 has diminution.
     *
     * @var bool|null
     */
    private $_4HasDiminution;

    /**
     * 4 mtt diminution.
     *
     * @var float|null
     */
    private $_4MttDiminution;

    /**
     * Acompte du.
     *
     * @var DateTime|null
     */
    private $acompteDu;

    /**
     * Date dec.
     *
     * @var DateTime|null
     */
    private $dateDec;

    /**
     * Date limite dec.
     *
     * @var DateTime|null
     */
    private $dateLimiteDec;

    /**
     * Det code ta.
     *
     * @var string|null
     */
    private $detCodeTa;

    /**
     * Det ta1.
     *
     * @var string|null
     */
    private $detTa1;

    /**
     * Det ta2.
     *
     * @var string|null
     */
    private $detTa2;

    /**
     * Det ta3.
     *
     * @var string|null
     */
    private $detTa3;

    /**
     * Det ta4.
     *
     * @var string|null
     */
    private $detTa4;

    /**
     * Exigible le.
     *
     * @var DateTime|null
     */
    private $exigibleLe;

    /**
     * Mtt a payer.
     *
     * @var float|null
     */
    private $mttAPayer;

    /**
     * Mtt det ta1.
     *
     * @var float|null
     */
    private $mttDetTa1;

    /**
     * Mtt det ta2.
     *
     * @var float|null
     */
    private $mttDetTa2;

    /**
     * Mtt det ta3.
     *
     * @var float|null
     */
    private $mttDetTa3;

    /**
     * Mtt det ta4.
     *
     * @var float|null
     */
    private $mttDetTa4;

    /**
     * Mtt dont taxes assim.
     *
     * @var float|null
     */
    private $mttDontTaxesAssim;

    /**
     * Mtt dont tva.
     *
     * @var float|null
     */
    private $mttDontTva;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * z0151.
     *
     * @var float|null
     */
    private $z0151;

    /**
     * z0207.
     *
     * @var float|null
     */
    private $z0207;

    /**
     * z ha.
     *
     * @var float|null
     */
    private $zHa;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the 02 base ht196.
     *
     * @return float|null Returns the 02 base ht196.
     */
    public function get02BaseHt196(): ?float {
        return $this->_02BaseHt196;
    }

    /**
     * Get the 02 taxe due196.
     *
     * @return float|null Returns the 02 taxe due196.
     */
    public function get02TaxeDue196(): ?float {
        return $this->_02TaxeDue196;
    }

    /**
     * Get the 03 base ht55.
     *
     * @return float|null Returns the 03 base ht55.
     */
    public function get03BaseHt55(): ?float {
        return $this->_03BaseHt55;
    }

    /**
     * Get the 03 taxe due55.
     *
     * @return float|null Returns the 03 taxe due55.
     */
    public function get03TaxeDue55(): ?float {
        return $this->_03TaxeDue55;
    }

    /**
     * Get the 04 base ht85.
     *
     * @return float|null Returns the 04 base ht85.
     */
    public function get04BaseHt85(): ?float {
        return $this->_04BaseHt85;
    }

    /**
     * Get the 04 taxe due85.
     *
     * @return float|null Returns the 04 taxe due85.
     */
    public function get04TaxeDue85(): ?float {
        return $this->_04TaxeDue85;
    }

    /**
     * Get the 05 base ht21.
     *
     * @return float|null Returns the 05 base ht21.
     */
    public function get05BaseHt21(): ?float {
        return $this->_05BaseHt21;
    }

    /**
     * Get the 05 taxe due21.
     *
     * @return float|null Returns the 05 taxe due21.
     */
    public function get05TaxeDue21(): ?float {
        return $this->_05TaxeDue21;
    }

    /**
     * Get the 06 base ht anc taux.
     *
     * @return float|null Returns the 06 base ht anc taux.
     */
    public function get06BaseHtAncTaux(): ?float {
        return $this->_06BaseHtAncTaux;
    }

    /**
     * Get the 06 taxe due anc taux.
     *
     * @return float|null Returns the 06 taxe due anc taux.
     */
    public function get06TaxeDueAncTaux(): ?float {
        return $this->_06TaxeDueAncTaux;
    }

    /**
     * Get the 07 base ht taux part.
     *
     * @return float|null Returns the 07 base ht taux part.
     */
    public function get07BaseHtTauxPart(): ?float {
        return $this->_07BaseHtTauxPart;
    }

    /**
     * Get the 07 taxe due taux part.
     *
     * @return float|null Returns the 07 taxe due taux part.
     */
    public function get07TaxeDueTauxPart(): ?float {
        return $this->_07TaxeDueTauxPart;
    }

    /**
     * Get the 08 base httv aa reverser.
     *
     * @return float|null Returns the 08 base httv aa reverser.
     */
    public function get08BaseHttvAaReverser(): ?float {
        return $this->_08BaseHttvAaReverser;
    }

    /**
     * Get the 08 taxe due tv aa reverser.
     *
     * @return float|null Returns the 08 taxe due tv aa reverser.
     */
    public function get08TaxeDueTvAaReverser(): ?float {
        return $this->_08TaxeDueTvAaReverser;
    }

    /**
     * Get the 09 total tva brute.
     *
     * @return float|null Returns the 09 total tva brute.
     */
    public function get09TotalTvaBrute(): ?float {
        return $this->_09TotalTvaBrute;
    }

    /**
     * Get the 10 biens immos.
     *
     * @return float|null Returns the 10 biens immos.
     */
    public function get10BiensImmos(): ?float {
        return $this->_10BiensImmos;
    }

    /**
     * Get the 11 autres biens.
     *
     * @return float|null Returns the 11 autres biens.
     */
    public function get11AutresBiens(): ?float {
        return $this->_11AutresBiens;
    }

    /**
     * Get the 12 omission.
     *
     * @return float|null Returns the 12 omission.
     */
    public function get12Omission(): ?float {
        return $this->_12Omission;
    }

    /**
     * Get the 13 total tva deduc.
     *
     * @return float|null Returns the 13 total tva deduc.
     */
    public function get13TotalTvaDeduc(): ?float {
        return $this->_13TotalTvaDeduc;
    }

    /**
     * Get the 14 a.
     *
     * @return float|null Returns the 14 a.
     */
    public function get14A(): ?float {
        return $this->_14A;
    }

    /**
     * Get the 15 b.
     *
     * @return float|null Returns the 15 b.
     */
    public function get15B(): ?float {
        return $this->_15B;
    }

    /**
     * Get the 16 rembours tva.
     *
     * @return float|null Returns the 16 rembours tva.
     */
    public function get16RemboursTva(): ?float {
        return $this->_16RemboursTva;
    }

    /**
     * Get the 18 credit tvaca12.
     *
     * @return float|null Returns the 18 credit tvaca12.
     */
    public function get18CreditTvaca12(): ?float {
        return $this->_18CreditTvaca12;
    }

    /**
     * Get the 1 mtt augmentation.
     *
     * @return float|null Returns the 1 mtt augmentation.
     */
    public function get1MttAugmentation(): ?float {
        return $this->_1MttAugmentation;
    }

    /**
     * Get the 20 acompte ta1.
     *
     * @return float|null Returns the 20 acompte ta1.
     */
    public function get20AcompteTa1(): ?float {
        return $this->_20AcompteTa1;
    }

    /**
     * Get the 20 acompte ta2.
     *
     * @return float|null Returns the 20 acompte ta2.
     */
    public function get20AcompteTa2(): ?float {
        return $this->_20AcompteTa2;
    }

    /**
     * Get the 21 acompte tot1.
     *
     * @return float|null Returns the 21 acompte tot1.
     */
    public function get21AcompteTot1(): ?float {
        return $this->_21AcompteTot1;
    }

    /**
     * Get the 21 acompte tot2.
     *
     * @return float|null Returns the 21 acompte tot2.
     */
    public function get21AcompteTot2(): ?float {
        return $this->_21AcompteTot2;
    }

    /**
     * Get the 2 b base ht7.
     *
     * @return float|null Returns the 2 b base ht7.
     */
    public function get2BBaseHt7(): ?float {
        return $this->_2BBaseHt7;
    }

    /**
     * Get the 2 b taxe due7.
     *
     * @return float|null Returns the 2 b taxe due7.
     */
    public function get2BTaxeDue7(): ?float {
        return $this->_2BTaxeDue7;
    }

    /**
     * Get the 2 mtt credit prec.
     *
     * @return float|null Returns the 2 mtt credit prec.
     */
    public function get2MttCreditPrec(): ?float {
        return $this->_2MttCreditPrec;
    }

    /**
     * Get the 2 mtt diminution.
     *
     * @return float|null Returns the 2 mtt diminution.
     */
    public function get2MttDiminution(): ?float {
        return $this->_2MttDiminution;
    }

    /**
     * Get the 3 mtt diminution.
     *
     * @return float|null Returns the 3 mtt diminution.
     */
    public function get3MttDiminution(): ?float {
        return $this->_3MttDiminution;
    }

    /**
     * Get the 3 suspension.
     *
     * @return int|null Returns the 3 suspension.
     */
    public function get3Suspension(): ?int {
        return $this->_3Suspension;
    }

    /**
     * Get the 4 has diminution.
     *
     * @return bool|null Returns the 4 has diminution.
     */
    public function get4HasDiminution(): ?bool {
        return $this->_4HasDiminution;
    }

    /**
     * Get the 4 mtt diminution.
     *
     * @return float|null Returns the 4 mtt diminution.
     */
    public function get4MttDiminution(): ?float {
        return $this->_4MttDiminution;
    }

    /**
     * Get the acompte du.
     *
     * @return DateTime|null Returns the acompte du.
     */
    public function getAcompteDu(): ?DateTime {
        return $this->acompteDu;
    }

    /**
     * Get the date dec.
     *
     * @return DateTime|null Returns the date dec.
     */
    public function getDateDec(): ?DateTime {
        return $this->dateDec;
    }

    /**
     * Get the date limite dec.
     *
     * @return DateTime|null Returns the date limite dec.
     */
    public function getDateLimiteDec(): ?DateTime {
        return $this->dateLimiteDec;
    }

    /**
     * Get the det code ta.
     *
     * @return string|null Returns the det code ta.
     */
    public function getDetCodeTa(): ?string {
        return $this->detCodeTa;
    }

    /**
     * Get the det ta1.
     *
     * @return string|null Returns the det ta1.
     */
    public function getDetTa1(): ?string {
        return $this->detTa1;
    }

    /**
     * Get the det ta2.
     *
     * @return string|null Returns the det ta2.
     */
    public function getDetTa2(): ?string {
        return $this->detTa2;
    }

    /**
     * Get the det ta3.
     *
     * @return string|null Returns the det ta3.
     */
    public function getDetTa3(): ?string {
        return $this->detTa3;
    }

    /**
     * Get the det ta4.
     *
     * @return string|null Returns the det ta4.
     */
    public function getDetTa4(): ?string {
        return $this->detTa4;
    }

    /**
     * Get the exigible le.
     *
     * @return DateTime|null Returns the exigible le.
     */
    public function getExigibleLe(): ?DateTime {
        return $this->exigibleLe;
    }

    /**
     * Get the mtt a payer.
     *
     * @return float|null Returns the mtt a payer.
     */
    public function getMttAPayer(): ?float {
        return $this->mttAPayer;
    }

    /**
     * Get the mtt det ta1.
     *
     * @return float|null Returns the mtt det ta1.
     */
    public function getMttDetTa1(): ?float {
        return $this->mttDetTa1;
    }

    /**
     * Get the mtt det ta2.
     *
     * @return float|null Returns the mtt det ta2.
     */
    public function getMttDetTa2(): ?float {
        return $this->mttDetTa2;
    }

    /**
     * Get the mtt det ta3.
     *
     * @return float|null Returns the mtt det ta3.
     */
    public function getMttDetTa3(): ?float {
        return $this->mttDetTa3;
    }

    /**
     * Get the mtt det ta4.
     *
     * @return float|null Returns the mtt det ta4.
     */
    public function getMttDetTa4(): ?float {
        return $this->mttDetTa4;
    }

    /**
     * Get the mtt dont taxes assim.
     *
     * @return float|null Returns the mtt dont taxes assim.
     */
    public function getMttDontTaxesAssim(): ?float {
        return $this->mttDontTaxesAssim;
    }

    /**
     * Get the mtt dont tva.
     *
     * @return float|null Returns the mtt dont tva.
     */
    public function getMttDontTva(): ?float {
        return $this->mttDontTva;
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
     * Get the z0151.
     *
     * @return float|null Returns the z0151.
     */
    public function getz0151(): ?float {
        return $this->z0151;
    }

    /**
     * Get the z0207.
     *
     * @return float|null Returns the z0207.
     */
    public function getz0207(): ?float {
        return $this->z0207;
    }

    /**
     * Get the z ha.
     *
     * @return float|null Returns the z ha.
     */
    public function getzHa(): ?float {
        return $this->zHa;
    }

    /**
     * Set the 02 base ht196.
     *
     * @param float|null $_02BaseHt196 The 02 base ht196.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set02BaseHt196(?float $_02BaseHt196): DecTva3514 {
        $this->_02BaseHt196 = $_02BaseHt196;
        return $this;
    }

    /**
     * Set the 02 taxe due196.
     *
     * @param float|null $_02TaxeDue196 The 02 taxe due196.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set02TaxeDue196(?float $_02TaxeDue196): DecTva3514 {
        $this->_02TaxeDue196 = $_02TaxeDue196;
        return $this;
    }

    /**
     * Set the 03 base ht55.
     *
     * @param float|null $_03BaseHt55 The 03 base ht55.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set03BaseHt55(?float $_03BaseHt55): DecTva3514 {
        $this->_03BaseHt55 = $_03BaseHt55;
        return $this;
    }

    /**
     * Set the 03 taxe due55.
     *
     * @param float|null $_03TaxeDue55 The 03 taxe due55.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set03TaxeDue55(?float $_03TaxeDue55): DecTva3514 {
        $this->_03TaxeDue55 = $_03TaxeDue55;
        return $this;
    }

    /**
     * Set the 04 base ht85.
     *
     * @param float|null $_04BaseHt85 The 04 base ht85.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set04BaseHt85(?float $_04BaseHt85): DecTva3514 {
        $this->_04BaseHt85 = $_04BaseHt85;
        return $this;
    }

    /**
     * Set the 04 taxe due85.
     *
     * @param float|null $_04TaxeDue85 The 04 taxe due85.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set04TaxeDue85(?float $_04TaxeDue85): DecTva3514 {
        $this->_04TaxeDue85 = $_04TaxeDue85;
        return $this;
    }

    /**
     * Set the 05 base ht21.
     *
     * @param float|null $_05BaseHt21 The 05 base ht21.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set05BaseHt21(?float $_05BaseHt21): DecTva3514 {
        $this->_05BaseHt21 = $_05BaseHt21;
        return $this;
    }

    /**
     * Set the 05 taxe due21.
     *
     * @param float|null $_05TaxeDue21 The 05 taxe due21.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set05TaxeDue21(?float $_05TaxeDue21): DecTva3514 {
        $this->_05TaxeDue21 = $_05TaxeDue21;
        return $this;
    }

    /**
     * Set the 06 base ht anc taux.
     *
     * @param float|null $_06BaseHtAncTaux The 06 base ht anc taux.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set06BaseHtAncTaux(?float $_06BaseHtAncTaux): DecTva3514 {
        $this->_06BaseHtAncTaux = $_06BaseHtAncTaux;
        return $this;
    }

    /**
     * Set the 06 taxe due anc taux.
     *
     * @param float|null $_06TaxeDueAncTaux The 06 taxe due anc taux.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set06TaxeDueAncTaux(?float $_06TaxeDueAncTaux): DecTva3514 {
        $this->_06TaxeDueAncTaux = $_06TaxeDueAncTaux;
        return $this;
    }

    /**
     * Set the 07 base ht taux part.
     *
     * @param float|null $_07BaseHtTauxPart The 07 base ht taux part.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set07BaseHtTauxPart(?float $_07BaseHtTauxPart): DecTva3514 {
        $this->_07BaseHtTauxPart = $_07BaseHtTauxPart;
        return $this;
    }

    /**
     * Set the 07 taxe due taux part.
     *
     * @param float|null $_07TaxeDueTauxPart The 07 taxe due taux part.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set07TaxeDueTauxPart(?float $_07TaxeDueTauxPart): DecTva3514 {
        $this->_07TaxeDueTauxPart = $_07TaxeDueTauxPart;
        return $this;
    }

    /**
     * Set the 08 base httv aa reverser.
     *
     * @param float|null $_08BaseHttvAaReverser The 08 base httv aa reverser.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set08BaseHttvAaReverser(?float $_08BaseHttvAaReverser): DecTva3514 {
        $this->_08BaseHttvAaReverser = $_08BaseHttvAaReverser;
        return $this;
    }

    /**
     * Set the 08 taxe due tv aa reverser.
     *
     * @param float|null $_08TaxeDueTvAaReverser The 08 taxe due tv aa reverser.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set08TaxeDueTvAaReverser(?float $_08TaxeDueTvAaReverser): DecTva3514 {
        $this->_08TaxeDueTvAaReverser = $_08TaxeDueTvAaReverser;
        return $this;
    }

    /**
     * Set the 09 total tva brute.
     *
     * @param float|null $_09TotalTvaBrute The 09 total tva brute.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set09TotalTvaBrute(?float $_09TotalTvaBrute): DecTva3514 {
        $this->_09TotalTvaBrute = $_09TotalTvaBrute;
        return $this;
    }

    /**
     * Set the 10 biens immos.
     *
     * @param float|null $_10BiensImmos The 10 biens immos.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set10BiensImmos(?float $_10BiensImmos): DecTva3514 {
        $this->_10BiensImmos = $_10BiensImmos;
        return $this;
    }

    /**
     * Set the 11 autres biens.
     *
     * @param float|null $_11AutresBiens The 11 autres biens.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set11AutresBiens(?float $_11AutresBiens): DecTva3514 {
        $this->_11AutresBiens = $_11AutresBiens;
        return $this;
    }

    /**
     * Set the 12 omission.
     *
     * @param float|null $_12Omission The 12 omission.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set12Omission(?float $_12Omission): DecTva3514 {
        $this->_12Omission = $_12Omission;
        return $this;
    }

    /**
     * Set the 13 total tva deduc.
     *
     * @param float|null $_13TotalTvaDeduc The 13 total tva deduc.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set13TotalTvaDeduc(?float $_13TotalTvaDeduc): DecTva3514 {
        $this->_13TotalTvaDeduc = $_13TotalTvaDeduc;
        return $this;
    }

    /**
     * Set the 14 a.
     *
     * @param float|null $_14A The 14 a.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set14A(?float $_14A): DecTva3514 {
        $this->_14A = $_14A;
        return $this;
    }

    /**
     * Set the 15 b.
     *
     * @param float|null $_15B The 15 b.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set15B(?float $_15B): DecTva3514 {
        $this->_15B = $_15B;
        return $this;
    }

    /**
     * Set the 16 rembours tva.
     *
     * @param float|null $_16RemboursTva The 16 rembours tva.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set16RemboursTva(?float $_16RemboursTva): DecTva3514 {
        $this->_16RemboursTva = $_16RemboursTva;
        return $this;
    }

    /**
     * Set the 18 credit tvaca12.
     *
     * @param float|null $_18CreditTvaca12 The 18 credit tvaca12.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set18CreditTvaca12(?float $_18CreditTvaca12): DecTva3514 {
        $this->_18CreditTvaca12 = $_18CreditTvaca12;
        return $this;
    }

    /**
     * Set the 1 mtt augmentation.
     *
     * @param float|null $_1MttAugmentation The 1 mtt augmentation.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set1MttAugmentation(?float $_1MttAugmentation): DecTva3514 {
        $this->_1MttAugmentation = $_1MttAugmentation;
        return $this;
    }

    /**
     * Set the 20 acompte ta1.
     *
     * @param float|null $_20AcompteTa1 The 20 acompte ta1.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set20AcompteTa1(?float $_20AcompteTa1): DecTva3514 {
        $this->_20AcompteTa1 = $_20AcompteTa1;
        return $this;
    }

    /**
     * Set the 20 acompte ta2.
     *
     * @param float|null $_20AcompteTa2 The 20 acompte ta2.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set20AcompteTa2(?float $_20AcompteTa2): DecTva3514 {
        $this->_20AcompteTa2 = $_20AcompteTa2;
        return $this;
    }

    /**
     * Set the 21 acompte tot1.
     *
     * @param float|null $_21AcompteTot1 The 21 acompte tot1.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set21AcompteTot1(?float $_21AcompteTot1): DecTva3514 {
        $this->_21AcompteTot1 = $_21AcompteTot1;
        return $this;
    }

    /**
     * Set the 21 acompte tot2.
     *
     * @param float|null $_21AcompteTot2 The 21 acompte tot2.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set21AcompteTot2(?float $_21AcompteTot2): DecTva3514 {
        $this->_21AcompteTot2 = $_21AcompteTot2;
        return $this;
    }

    /**
     * Set the 2 b base ht7.
     *
     * @param float|null $_2BBaseHt7 The 2 b base ht7.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set2BBaseHt7(?float $_2BBaseHt7): DecTva3514 {
        $this->_2BBaseHt7 = $_2BBaseHt7;
        return $this;
    }

    /**
     * Set the 2 b taxe due7.
     *
     * @param float|null $_2BTaxeDue7 The 2 b taxe due7.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set2BTaxeDue7(?float $_2BTaxeDue7): DecTva3514 {
        $this->_2BTaxeDue7 = $_2BTaxeDue7;
        return $this;
    }

    /**
     * Set the 2 mtt credit prec.
     *
     * @param float|null $_2MttCreditPrec The 2 mtt credit prec.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set2MttCreditPrec(?float $_2MttCreditPrec): DecTva3514 {
        $this->_2MttCreditPrec = $_2MttCreditPrec;
        return $this;
    }

    /**
     * Set the 2 mtt diminution.
     *
     * @param float|null $_2MttDiminution The 2 mtt diminution.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set2MttDiminution(?float $_2MttDiminution): DecTva3514 {
        $this->_2MttDiminution = $_2MttDiminution;
        return $this;
    }

    /**
     * Set the 3 mtt diminution.
     *
     * @param float|null $_3MttDiminution The 3 mtt diminution.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set3MttDiminution(?float $_3MttDiminution): DecTva3514 {
        $this->_3MttDiminution = $_3MttDiminution;
        return $this;
    }

    /**
     * Set the 3 suspension.
     *
     * @param int|null $_3Suspension The 3 suspension.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set3Suspension(?int $_3Suspension): DecTva3514 {
        $this->_3Suspension = $_3Suspension;
        return $this;
    }

    /**
     * Set the 4 has diminution.
     *
     * @param bool|null $_4HasDiminution The 4 has diminution.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set4HasDiminution(?bool $_4HasDiminution): DecTva3514 {
        $this->_4HasDiminution = $_4HasDiminution;
        return $this;
    }

    /**
     * Set the 4 mtt diminution.
     *
     * @param float|null $_4MttDiminution The 4 mtt diminution.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set4MttDiminution(?float $_4MttDiminution): DecTva3514 {
        $this->_4MttDiminution = $_4MttDiminution;
        return $this;
    }

    /**
     * Set the acompte du.
     *
     * @param DateTime|null $acompteDu The acompte du.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setAcompteDu(?DateTime $acompteDu): DecTva3514 {
        $this->acompteDu = $acompteDu;
        return $this;
    }

    /**
     * Set the date dec.
     *
     * @param DateTime|null $dateDec The date dec.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDateDec(?DateTime $dateDec): DecTva3514 {
        $this->dateDec = $dateDec;
        return $this;
    }

    /**
     * Set the date limite dec.
     *
     * @param DateTime|null $dateLimiteDec The date limite dec.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDateLimiteDec(?DateTime $dateLimiteDec): DecTva3514 {
        $this->dateLimiteDec = $dateLimiteDec;
        return $this;
    }

    /**
     * Set the det code ta.
     *
     * @param string|null $detCodeTa The det code ta.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDetCodeTa(?string $detCodeTa): DecTva3514 {
        $this->detCodeTa = $detCodeTa;
        return $this;
    }

    /**
     * Set the det ta1.
     *
     * @param string|null $detTa1 The det ta1.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDetTa1(?string $detTa1): DecTva3514 {
        $this->detTa1 = $detTa1;
        return $this;
    }

    /**
     * Set the det ta2.
     *
     * @param string|null $detTa2 The det ta2.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDetTa2(?string $detTa2): DecTva3514 {
        $this->detTa2 = $detTa2;
        return $this;
    }

    /**
     * Set the det ta3.
     *
     * @param string|null $detTa3 The det ta3.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDetTa3(?string $detTa3): DecTva3514 {
        $this->detTa3 = $detTa3;
        return $this;
    }

    /**
     * Set the det ta4.
     *
     * @param string|null $detTa4 The det ta4.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDetTa4(?string $detTa4): DecTva3514 {
        $this->detTa4 = $detTa4;
        return $this;
    }

    /**
     * Set the exigible le.
     *
     * @param DateTime|null $exigibleLe The exigible le.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setExigibleLe(?DateTime $exigibleLe): DecTva3514 {
        $this->exigibleLe = $exigibleLe;
        return $this;
    }

    /**
     * Set the mtt a payer.
     *
     * @param float|null $mttAPayer The mtt a payer.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttAPayer(?float $mttAPayer): DecTva3514 {
        $this->mttAPayer = $mttAPayer;
        return $this;
    }

    /**
     * Set the mtt det ta1.
     *
     * @param float|null $mttDetTa1 The mtt det ta1.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttDetTa1(?float $mttDetTa1): DecTva3514 {
        $this->mttDetTa1 = $mttDetTa1;
        return $this;
    }

    /**
     * Set the mtt det ta2.
     *
     * @param float|null $mttDetTa2 The mtt det ta2.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttDetTa2(?float $mttDetTa2): DecTva3514 {
        $this->mttDetTa2 = $mttDetTa2;
        return $this;
    }

    /**
     * Set the mtt det ta3.
     *
     * @param float|null $mttDetTa3 The mtt det ta3.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttDetTa3(?float $mttDetTa3): DecTva3514 {
        $this->mttDetTa3 = $mttDetTa3;
        return $this;
    }

    /**
     * Set the mtt det ta4.
     *
     * @param float|null $mttDetTa4 The mtt det ta4.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttDetTa4(?float $mttDetTa4): DecTva3514 {
        $this->mttDetTa4 = $mttDetTa4;
        return $this;
    }

    /**
     * Set the mtt dont taxes assim.
     *
     * @param float|null $mttDontTaxesAssim The mtt dont taxes assim.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttDontTaxesAssim(?float $mttDontTaxesAssim): DecTva3514 {
        $this->mttDontTaxesAssim = $mttDontTaxesAssim;
        return $this;
    }

    /**
     * Set the mtt dont tva.
     *
     * @param float|null $mttDontTva The mtt dont tva.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttDontTva(?float $mttDontTva): DecTva3514 {
        $this->mttDontTva = $mttDontTva;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setPeriode(?DateTime $periode): DecTva3514 {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the z0151.
     *
     * @param float|null $z0151 The z0151.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setz0151(?float $z0151): DecTva3514 {
        $this->z0151 = $z0151;
        return $this;
    }

    /**
     * Set the z0207.
     *
     * @param float|null $z0207 The z0207.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setz0207(?float $z0207): DecTva3514 {
        $this->z0207 = $z0207;
        return $this;
    }

    /**
     * Set the z ha.
     *
     * @param float|null $zHa The z ha.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setzHa(?float $zHa): DecTva3514 {
        $this->zHa = $zHa;
        return $this;
    }
}
