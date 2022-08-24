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
 * Dec tva groupe.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class DecTvaGroupe {

    /**
     * Az0990b.
     *
     * @var float|null
     */
    private $az0990b;

    /**
     * Az1010b.
     *
     * @var float|null
     */
    private $az1010b;

    /**
     * Az1020b.
     *
     * @var float|null
     */
    private $az1020b;

    /**
     * Az1030b.
     *
     * @var float|null
     */
    private $az1030b;

    /**
     * Az1040b.
     *
     * @var float|null
     */
    private $az1040b;

    /**
     * Az1050b.
     *
     * @var float|null
     */
    private $az1050b;

    /**
     * Az1080b.
     *
     * @var float|null
     */
    private $az1080b;

    /**
     * Az1081b.
     *
     * @var float|null
     */
    private $az1081b;

    /**
     * Az1090b.
     *
     * @var float|null
     */
    private $az1090b;

    /**
     * Az1100b.
     *
     * @var float|null
     */
    private $az1100b;

    /**
     * Az1110b.
     *
     * @var float|null
     */
    private $az1110b;

    /**
     * Az1120b.
     *
     * @var float|null
     */
    private $az1120b;

    /**
     * Az3240.
     *
     * @var float|null
     */
    private $az3240;

    /**
     * Az3510.
     *
     * @var float|null
     */
    private $az3510;

    /**
     * Az3520.
     *
     * @var float|null
     */
    private $az3520;

    /**
     * Az38 code.
     *
     * @var string|null
     */
    private $az38Code;

    /**
     * Az38 lib.
     *
     * @var string|null
     */
    private $az38Lib;

    /**
     * Az38b.
     *
     * @var float|null
     */
    private $az38b;

    /**
     * Az4200.
     *
     * @var float|null
     */
    private $az4200;

    /**
     * Az4201.
     *
     * @var float|null
     */
    private $az4201;

    /**
     * Az4204.
     *
     * @var float|null
     */
    private $az4204;

    /**
     * Az4206.
     *
     * @var float|null
     */
    private $az4206;

    /**
     * Az4207.
     *
     * @var float|null
     */
    private $az4207;

    /**
     * Az4213.
     *
     * @var float|null
     */
    private $az4213;

    /**
     * Az4215.
     *
     * @var float|null
     */
    private $az4215;

    /**
     * Az4220.
     *
     * @var float|null
     */
    private $az4220;

    /**
     * Az4222.
     *
     * @var float|null
     */
    private $az4222;

    /**
     * Az4223.
     *
     * @var float|null
     */
    private $az4223;

    /**
     * Az4228 mtt.
     *
     * @var float|null
     */
    private $az4228Mtt;

    /**
     * Az4230.
     *
     * @var float|null
     */
    private $az4230;

    /**
     * Az4231.
     *
     * @var float|null
     */
    private $az4231;

    /**
     * Az4232.
     *
     * @var float|null
     */
    private $az4232;

    /**
     * Az4233.
     *
     * @var float|null
     */
    private $az4233;

    /**
     * Az4234.
     *
     * @var float|null
     */
    private $az4234;

    /**
     * Az4235.
     *
     * @var float|null
     */
    private $az4235;

    /**
     * Az4236.
     *
     * @var float|null
     */
    private $az4236;

    /**
     * Az4237.
     *
     * @var float|null
     */
    private $az4237;

    /**
     * Az4238.
     *
     * @var float|null
     */
    private $az4238;

    /**
     * Az4239.
     *
     * @var float|null
     */
    private $az4239;

    /**
     * Az4240.
     *
     * @var float|null
     */
    private $az4240;

    /**
     * Az4241.
     *
     * @var float|null
     */
    private $az4241;

    /**
     * Az4242.
     *
     * @var float|null
     */
    private $az4242;

    /**
     * Az4243.
     *
     * @var float|null
     */
    private $az4243;

    /**
     * Az4244.
     *
     * @var float|null
     */
    private $az4244;

    /**
     * Az4245.
     *
     * @var float|null
     */
    private $az4245;

    /**
     * Az4246.
     *
     * @var float|null
     */
    private $az4246;

    /**
     * Az4247.
     *
     * @var float|null
     */
    private $az4247;

    /**
     * Az4248.
     *
     * @var float|null
     */
    private $az4248;

    /**
     * Az4249.
     *
     * @var float|null
     */
    private $az4249;

    /**
     * Az4250.
     *
     * @var float|null
     */
    private $az4250;

    /**
     * Az4251.
     *
     * @var float|null
     */
    private $az4251;

    /**
     * Az4252.
     *
     * @var float|null
     */
    private $az4252;

    /**
     * Az4254.
     *
     * @var float|null
     */
    private $az4254;

    /**
     * Az4255.
     *
     * @var float|null
     */
    private $az4255;

    /**
     * Az4256.
     *
     * @var float|null
     */
    private $az4256;

    /**
     * Az4257.
     *
     * @var float|null
     */
    private $az4257;

    /**
     * Az4258.
     *
     * @var float|null
     */
    private $az4258;

    /**
     * Az4259.
     *
     * @var float|null
     */
    private $az4259;

    /**
     * Az4260.
     *
     * @var float|null
     */
    private $az4260;

    /**
     * Az4261.
     *
     * @var float|null
     */
    private $az4261;

    /**
     * Az4262.
     *
     * @var float|null
     */
    private $az4262;

    /**
     * Az4263.
     *
     * @var float|null
     */
    private $az4263;

    /**
     * Az4264.
     *
     * @var float|null
     */
    private $az4264;

    /**
     * Az4265.
     *
     * @var float|null
     */
    private $az4265;

    /**
     * Az4266.
     *
     * @var float|null
     */
    private $az4266;

    /**
     * Az4267.
     *
     * @var float|null
     */
    private $az4267;

    /**
     * Az4268.
     *
     * @var float|null
     */
    private $az4268;

    /**
     * Az4268 base.
     *
     * @var float|null
     */
    private $az4268Base;

    /**
     * Az4269.
     *
     * @var float|null
     */
    private $az4269;

    /**
     * Az4269 base.
     *
     * @var float|null
     */
    private $az4269Base;

    /**
     * Az4270.
     *
     * @var float|null
     */
    private $az4270;

    /**
     * Az4270 base.
     *
     * @var float|null
     */
    private $az4270Base;

    /**
     * Az4271.
     *
     * @var float|null
     */
    private $az4271;

    /**
     * Az4271 base.
     *
     * @var float|null
     */
    private $az4271Base;

    /**
     * Az4272.
     *
     * @var float|null
     */
    private $az4272;

    /**
     * Az4274.
     *
     * @var float|null
     */
    private $az4274;

    /**
     * Az4276.
     *
     * @var float|null
     */
    private $az4276;

    /**
     * Az4276 base.
     *
     * @var float|null
     */
    private $az4276Base;

    /**
     * Az4277.
     *
     * @var float|null
     */
    private $az4277;

    /**
     * Az4277 base.
     *
     * @var float|null
     */
    private $az4277Base;

    /**
     * Az4278.
     *
     * @var float|null
     */
    private $az4278;

    /**
     * Az4279.
     *
     * @var float|null
     */
    private $az4279;

    /**
     * Az4280.
     *
     * @var float|null
     */
    private $az4280;

    /**
     * Az4281.
     *
     * @var float|null
     */
    private $az4281;

    /**
     * Az4282.
     *
     * @var float|null
     */
    private $az4282;

    /**
     * Az4283.
     *
     * @var float|null
     */
    private $az4283;

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
     * Az4288.
     *
     * @var float|null
     */
    private $az4288;

    /**
     * Az4289.
     *
     * @var float|null
     */
    private $az4289;

    /**
     * Az4290.
     *
     * @var float|null
     */
    private $az4290;

    /**
     * Az59 mtt.
     *
     * @var float|null
     */
    private $az59Mtt;

    /**
     * Az es mtt.
     *
     * @var float|null
     */
    private $azEsMtt;

    /**
     * Az eu mtt.
     *
     * @var float|null
     */
    private $azEuMtt;

    /**
     * Az ez code.
     *
     * @var string|null
     */
    private $azEzCode;

    /**
     * Az ez lib.
     *
     * @var string|null
     */
    private $azEzLib;

    /**
     * Az ez mtt.
     *
     * @var float|null
     */
    private $azEzMtt;

    /**
     * Az ga code.
     *
     * @var string|null
     */
    private $azGaCode;

    /**
     * Az ga lib.
     *
     * @var string|null
     */
    private $azGaLib;

    /**
     * Az ga mtt.
     *
     * @var float|null
     */
    private $azGaMtt;

    /**
     * Az gc mtt.
     *
     * @var float|null
     */
    private $azGcMtt;

    /**
     * Az hi.
     *
     * @var float|null
     */
    private $azHi;

    /**
     * Az jb.
     *
     * @var float|null
     */
    private $azJb;

    /**
     * Az jc.
     *
     * @var float|null
     */
    private $azJc;

    /**
     * Az total b.
     *
     * @var float|null
     */
    private $azTotalB;

    /**
     * Corres1.
     *
     * @var string|null
     */
    private $corres1;

    /**
     * Corres2.
     *
     * @var string|null
     */
    private $corres2;

    /**
     * Corres3.
     *
     * @var string|null
     */
    private $corres3;

    /**
     * Corres4.
     *
     * @var string|null
     */
    private $corres4;

    /**
     * Corres5.
     *
     * @var string|null
     */
    private $corres5;

    /**
     * Date dec.
     *
     * @var string|null
     */
    private $dateDec;

    /**
     * Debut exo.
     *
     * @var DateTime|null
     */
    private $debutExo;

    /**
     * Fin exo.
     *
     * @var DateTime|null
     */
    private $finExo;

    /**
     * i lock.
     *
     * @var int|null
     */
    private $iLock;

    /**
     * Lib doss.
     *
     * @var string|null
     */
    private $libDoss;

    /**
     * Mention expresse.
     *
     * @var bool|null
     */
    private $mentionExpresse;

    /**
     * No doss.
     *
     * @var string|null
     */
    private $noDoss;

    /**
     * No lot ecritures.
     *
     * @var int|null
     */
    private $noLotEcritures;

    /**
     * Num uniq.
     *
     * @var int|null
     */
    private $numUniq;

    /**
     * Paiement imputation.
     *
     * @var bool|null
     */
    private $paiementImputation;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Sel adresse dest.
     *
     * @var string|null
     */
    private $selAdresseDest;

    /**
     * Total.
     *
     * @var float|null
     */
    private $total;

    /**
     * Type dec.
     *
     * @var string|null
     */
    private $typeDec;

    /**
     * Ville.
     *
     * @var string|null
     */
    private $ville;

    /**
     * Z0100b.
     *
     * @var float|null
     */
    private $z0100b;

    /**
     * Z0121b.
     *
     * @var float|null
     */
    private $z0121b;

    /**
     * z0151b.
     *
     * @var float|null
     */
    private $z0151b;

    /**
     * z0207b.
     *
     * @var float|null
     */
    private $z0207b;

    /**
     * Z0600.
     *
     * @var float|null
     */
    private $z0600;

    /**
     * Z0705.
     *
     * @var float|null
     */
    private $z0705;

    /**
     * Z0900b.
     *
     * @var float|null
     */
    private $z0900b;

    /**
     * Z0920b.
     *
     * @var float|null
     */
    private $z0920b;

    /**
     * Z12 code.
     *
     * @var string|null
     */
    private $z12Code;

    /**
     * Z12 lib.
     *
     * @var string|null
     */
    private $z12Lib;

    /**
     * Z12 taxe.
     *
     * @var float|null
     */
    private $z12Taxe;

    /**
     * Z14.
     *
     * @var float|null
     */
    private $z14;

    /**
     * Z196b.
     *
     * @var float|null
     */
    private $z196b;

    /**
     * Z21.
     *
     * @var float|null
     */
    private $z21;

    /**
     * Z25.
     *
     * @var float|null
     */
    private $z25;

    /**
     * Z4227.
     *
     * @var float|null
     */
    private $z4227;

    /**
     * Z8001.
     *
     * @var float|null
     */
    private $z8001;

    /**
     * Z8002.
     *
     * @var float|null
     */
    private $z8002;

    /**
     * Z8003.
     *
     * @var float|null
     */
    private $z8003;

    /**
     * Z8005.
     *
     * @var float|null
     */
    private $z8005;

    /**
     * Z8006.
     *
     * @var float|null
     */
    private $z8006;

    /**
     * Z9979.
     *
     * @var float|null
     */
    private $z9979;

    /**
     * Z9989.
     *
     * @var float|null
     */
    private $z9989;

    /**
     * Z9991.
     *
     * @var float|null
     */
    private $z9991;

    /**
     * Z9999.
     *
     * @var float|null
     */
    private $z9999;

    /**
     * Z9 b taxe.
     *
     * @var float|null
     */
    private $z9BTaxe;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the az0990b.
     *
     * @return float|null Returns the az0990b.
     */
    public function getAz0990b(): ?float {
        return $this->az0990b;
    }

    /**
     * Get the az1010b.
     *
     * @return float|null Returns the az1010b.
     */
    public function getAz1010b(): ?float {
        return $this->az1010b;
    }

    /**
     * Get the az1020b.
     *
     * @return float|null Returns the az1020b.
     */
    public function getAz1020b(): ?float {
        return $this->az1020b;
    }

    /**
     * Get the az1030b.
     *
     * @return float|null Returns the az1030b.
     */
    public function getAz1030b(): ?float {
        return $this->az1030b;
    }

    /**
     * Get the az1040b.
     *
     * @return float|null Returns the az1040b.
     */
    public function getAz1040b(): ?float {
        return $this->az1040b;
    }

    /**
     * Get the az1050b.
     *
     * @return float|null Returns the az1050b.
     */
    public function getAz1050b(): ?float {
        return $this->az1050b;
    }

    /**
     * Get the az1080b.
     *
     * @return float|null Returns the az1080b.
     */
    public function getAz1080b(): ?float {
        return $this->az1080b;
    }

    /**
     * Get the az1081b.
     *
     * @return float|null Returns the az1081b.
     */
    public function getAz1081b(): ?float {
        return $this->az1081b;
    }

    /**
     * Get the az1090b.
     *
     * @return float|null Returns the az1090b.
     */
    public function getAz1090b(): ?float {
        return $this->az1090b;
    }

    /**
     * Get the az1100b.
     *
     * @return float|null Returns the az1100b.
     */
    public function getAz1100b(): ?float {
        return $this->az1100b;
    }

    /**
     * Get the az1110b.
     *
     * @return float|null Returns the az1110b.
     */
    public function getAz1110b(): ?float {
        return $this->az1110b;
    }

    /**
     * Get the az1120b.
     *
     * @return float|null Returns the az1120b.
     */
    public function getAz1120b(): ?float {
        return $this->az1120b;
    }

    /**
     * Get the az3240.
     *
     * @return float|null Returns the az3240.
     */
    public function getAz3240(): ?float {
        return $this->az3240;
    }

    /**
     * Get the az3510.
     *
     * @return float|null Returns the az3510.
     */
    public function getAz3510(): ?float {
        return $this->az3510;
    }

    /**
     * Get the az3520.
     *
     * @return float|null Returns the az3520.
     */
    public function getAz3520(): ?float {
        return $this->az3520;
    }

    /**
     * Get the az38 code.
     *
     * @return string|null Returns the az38 code.
     */
    public function getAz38Code(): ?string {
        return $this->az38Code;
    }

    /**
     * Get the az38 lib.
     *
     * @return string|null Returns the az38 lib.
     */
    public function getAz38Lib(): ?string {
        return $this->az38Lib;
    }

    /**
     * Get the az38b.
     *
     * @return float|null Returns the az38b.
     */
    public function getAz38b(): ?float {
        return $this->az38b;
    }

    /**
     * Get the az4200.
     *
     * @return float|null Returns the az4200.
     */
    public function getAz4200(): ?float {
        return $this->az4200;
    }

    /**
     * Get the az4201.
     *
     * @return float|null Returns the az4201.
     */
    public function getAz4201(): ?float {
        return $this->az4201;
    }

    /**
     * Get the az4204.
     *
     * @return float|null Returns the az4204.
     */
    public function getAz4204(): ?float {
        return $this->az4204;
    }

    /**
     * Get the az4206.
     *
     * @return float|null Returns the az4206.
     */
    public function getAz4206(): ?float {
        return $this->az4206;
    }

    /**
     * Get the az4207.
     *
     * @return float|null Returns the az4207.
     */
    public function getAz4207(): ?float {
        return $this->az4207;
    }

    /**
     * Get the az4213.
     *
     * @return float|null Returns the az4213.
     */
    public function getAz4213(): ?float {
        return $this->az4213;
    }

    /**
     * Get the az4215.
     *
     * @return float|null Returns the az4215.
     */
    public function getAz4215(): ?float {
        return $this->az4215;
    }

    /**
     * Get the az4220.
     *
     * @return float|null Returns the az4220.
     */
    public function getAz4220(): ?float {
        return $this->az4220;
    }

    /**
     * Get the az4222.
     *
     * @return float|null Returns the az4222.
     */
    public function getAz4222(): ?float {
        return $this->az4222;
    }

    /**
     * Get the az4223.
     *
     * @return float|null Returns the az4223.
     */
    public function getAz4223(): ?float {
        return $this->az4223;
    }

    /**
     * Get the az4228 mtt.
     *
     * @return float|null Returns the az4228 mtt.
     */
    public function getAz4228Mtt(): ?float {
        return $this->az4228Mtt;
    }

    /**
     * Get the az4230.
     *
     * @return float|null Returns the az4230.
     */
    public function getAz4230(): ?float {
        return $this->az4230;
    }

    /**
     * Get the az4231.
     *
     * @return float|null Returns the az4231.
     */
    public function getAz4231(): ?float {
        return $this->az4231;
    }

    /**
     * Get the az4232.
     *
     * @return float|null Returns the az4232.
     */
    public function getAz4232(): ?float {
        return $this->az4232;
    }

    /**
     * Get the az4233.
     *
     * @return float|null Returns the az4233.
     */
    public function getAz4233(): ?float {
        return $this->az4233;
    }

    /**
     * Get the az4234.
     *
     * @return float|null Returns the az4234.
     */
    public function getAz4234(): ?float {
        return $this->az4234;
    }

    /**
     * Get the az4235.
     *
     * @return float|null Returns the az4235.
     */
    public function getAz4235(): ?float {
        return $this->az4235;
    }

    /**
     * Get the az4236.
     *
     * @return float|null Returns the az4236.
     */
    public function getAz4236(): ?float {
        return $this->az4236;
    }

    /**
     * Get the az4237.
     *
     * @return float|null Returns the az4237.
     */
    public function getAz4237(): ?float {
        return $this->az4237;
    }

    /**
     * Get the az4238.
     *
     * @return float|null Returns the az4238.
     */
    public function getAz4238(): ?float {
        return $this->az4238;
    }

    /**
     * Get the az4239.
     *
     * @return float|null Returns the az4239.
     */
    public function getAz4239(): ?float {
        return $this->az4239;
    }

    /**
     * Get the az4240.
     *
     * @return float|null Returns the az4240.
     */
    public function getAz4240(): ?float {
        return $this->az4240;
    }

    /**
     * Get the az4241.
     *
     * @return float|null Returns the az4241.
     */
    public function getAz4241(): ?float {
        return $this->az4241;
    }

    /**
     * Get the az4242.
     *
     * @return float|null Returns the az4242.
     */
    public function getAz4242(): ?float {
        return $this->az4242;
    }

    /**
     * Get the az4243.
     *
     * @return float|null Returns the az4243.
     */
    public function getAz4243(): ?float {
        return $this->az4243;
    }

    /**
     * Get the az4244.
     *
     * @return float|null Returns the az4244.
     */
    public function getAz4244(): ?float {
        return $this->az4244;
    }

    /**
     * Get the az4245.
     *
     * @return float|null Returns the az4245.
     */
    public function getAz4245(): ?float {
        return $this->az4245;
    }

    /**
     * Get the az4246.
     *
     * @return float|null Returns the az4246.
     */
    public function getAz4246(): ?float {
        return $this->az4246;
    }

    /**
     * Get the az4247.
     *
     * @return float|null Returns the az4247.
     */
    public function getAz4247(): ?float {
        return $this->az4247;
    }

    /**
     * Get the az4248.
     *
     * @return float|null Returns the az4248.
     */
    public function getAz4248(): ?float {
        return $this->az4248;
    }

    /**
     * Get the az4249.
     *
     * @return float|null Returns the az4249.
     */
    public function getAz4249(): ?float {
        return $this->az4249;
    }

    /**
     * Get the az4250.
     *
     * @return float|null Returns the az4250.
     */
    public function getAz4250(): ?float {
        return $this->az4250;
    }

    /**
     * Get the az4251.
     *
     * @return float|null Returns the az4251.
     */
    public function getAz4251(): ?float {
        return $this->az4251;
    }

    /**
     * Get the az4252.
     *
     * @return float|null Returns the az4252.
     */
    public function getAz4252(): ?float {
        return $this->az4252;
    }

    /**
     * Get the az4254.
     *
     * @return float|null Returns the az4254.
     */
    public function getAz4254(): ?float {
        return $this->az4254;
    }

    /**
     * Get the az4255.
     *
     * @return float|null Returns the az4255.
     */
    public function getAz4255(): ?float {
        return $this->az4255;
    }

    /**
     * Get the az4256.
     *
     * @return float|null Returns the az4256.
     */
    public function getAz4256(): ?float {
        return $this->az4256;
    }

    /**
     * Get the az4257.
     *
     * @return float|null Returns the az4257.
     */
    public function getAz4257(): ?float {
        return $this->az4257;
    }

    /**
     * Get the az4258.
     *
     * @return float|null Returns the az4258.
     */
    public function getAz4258(): ?float {
        return $this->az4258;
    }

    /**
     * Get the az4259.
     *
     * @return float|null Returns the az4259.
     */
    public function getAz4259(): ?float {
        return $this->az4259;
    }

    /**
     * Get the az4260.
     *
     * @return float|null Returns the az4260.
     */
    public function getAz4260(): ?float {
        return $this->az4260;
    }

    /**
     * Get the az4261.
     *
     * @return float|null Returns the az4261.
     */
    public function getAz4261(): ?float {
        return $this->az4261;
    }

    /**
     * Get the az4262.
     *
     * @return float|null Returns the az4262.
     */
    public function getAz4262(): ?float {
        return $this->az4262;
    }

    /**
     * Get the az4263.
     *
     * @return float|null Returns the az4263.
     */
    public function getAz4263(): ?float {
        return $this->az4263;
    }

    /**
     * Get the az4264.
     *
     * @return float|null Returns the az4264.
     */
    public function getAz4264(): ?float {
        return $this->az4264;
    }

    /**
     * Get the az4265.
     *
     * @return float|null Returns the az4265.
     */
    public function getAz4265(): ?float {
        return $this->az4265;
    }

    /**
     * Get the az4266.
     *
     * @return float|null Returns the az4266.
     */
    public function getAz4266(): ?float {
        return $this->az4266;
    }

    /**
     * Get the az4267.
     *
     * @return float|null Returns the az4267.
     */
    public function getAz4267(): ?float {
        return $this->az4267;
    }

    /**
     * Get the az4268.
     *
     * @return float|null Returns the az4268.
     */
    public function getAz4268(): ?float {
        return $this->az4268;
    }

    /**
     * Get the az4268 base.
     *
     * @return float|null Returns the az4268 base.
     */
    public function getAz4268Base(): ?float {
        return $this->az4268Base;
    }

    /**
     * Get the az4269.
     *
     * @return float|null Returns the az4269.
     */
    public function getAz4269(): ?float {
        return $this->az4269;
    }

    /**
     * Get the az4269 base.
     *
     * @return float|null Returns the az4269 base.
     */
    public function getAz4269Base(): ?float {
        return $this->az4269Base;
    }

    /**
     * Get the az4270.
     *
     * @return float|null Returns the az4270.
     */
    public function getAz4270(): ?float {
        return $this->az4270;
    }

    /**
     * Get the az4270 base.
     *
     * @return float|null Returns the az4270 base.
     */
    public function getAz4270Base(): ?float {
        return $this->az4270Base;
    }

    /**
     * Get the az4271.
     *
     * @return float|null Returns the az4271.
     */
    public function getAz4271(): ?float {
        return $this->az4271;
    }

    /**
     * Get the az4271 base.
     *
     * @return float|null Returns the az4271 base.
     */
    public function getAz4271Base(): ?float {
        return $this->az4271Base;
    }

    /**
     * Get the az4272.
     *
     * @return float|null Returns the az4272.
     */
    public function getAz4272(): ?float {
        return $this->az4272;
    }

    /**
     * Get the az4274.
     *
     * @return float|null Returns the az4274.
     */
    public function getAz4274(): ?float {
        return $this->az4274;
    }

    /**
     * Get the az4276.
     *
     * @return float|null Returns the az4276.
     */
    public function getAz4276(): ?float {
        return $this->az4276;
    }

    /**
     * Get the az4276 base.
     *
     * @return float|null Returns the az4276 base.
     */
    public function getAz4276Base(): ?float {
        return $this->az4276Base;
    }

    /**
     * Get the az4277.
     *
     * @return float|null Returns the az4277.
     */
    public function getAz4277(): ?float {
        return $this->az4277;
    }

    /**
     * Get the az4277 base.
     *
     * @return float|null Returns the az4277 base.
     */
    public function getAz4277Base(): ?float {
        return $this->az4277Base;
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
     * Get the az4279.
     *
     * @return float|null Returns the az4279.
     */
    public function getAz4279(): ?float {
        return $this->az4279;
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
     * Get the az4281.
     *
     * @return float|null Returns the az4281.
     */
    public function getAz4281(): ?float {
        return $this->az4281;
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
     * Get the az4283.
     *
     * @return float|null Returns the az4283.
     */
    public function getAz4283(): ?float {
        return $this->az4283;
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
     * Get the az4288.
     *
     * @return float|null Returns the az4288.
     */
    public function getAz4288(): ?float {
        return $this->az4288;
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
     * Get the az4290.
     *
     * @return float|null Returns the az4290.
     */
    public function getAz4290(): ?float {
        return $this->az4290;
    }

    /**
     * Get the az59 mtt.
     *
     * @return float|null Returns the az59 mtt.
     */
    public function getAz59Mtt(): ?float {
        return $this->az59Mtt;
    }

    /**
     * Get the az es mtt.
     *
     * @return float|null Returns the az es mtt.
     */
    public function getAzEsMtt(): ?float {
        return $this->azEsMtt;
    }

    /**
     * Get the az eu mtt.
     *
     * @return float|null Returns the az eu mtt.
     */
    public function getAzEuMtt(): ?float {
        return $this->azEuMtt;
    }

    /**
     * Get the az ez code.
     *
     * @return string|null Returns the az ez code.
     */
    public function getAzEzCode(): ?string {
        return $this->azEzCode;
    }

    /**
     * Get the az ez lib.
     *
     * @return string|null Returns the az ez lib.
     */
    public function getAzEzLib(): ?string {
        return $this->azEzLib;
    }

    /**
     * Get the az ez mtt.
     *
     * @return float|null Returns the az ez mtt.
     */
    public function getAzEzMtt(): ?float {
        return $this->azEzMtt;
    }

    /**
     * Get the az ga code.
     *
     * @return string|null Returns the az ga code.
     */
    public function getAzGaCode(): ?string {
        return $this->azGaCode;
    }

    /**
     * Get the az ga lib.
     *
     * @return string|null Returns the az ga lib.
     */
    public function getAzGaLib(): ?string {
        return $this->azGaLib;
    }

    /**
     * Get the az ga mtt.
     *
     * @return float|null Returns the az ga mtt.
     */
    public function getAzGaMtt(): ?float {
        return $this->azGaMtt;
    }

    /**
     * Get the az gc mtt.
     *
     * @return float|null Returns the az gc mtt.
     */
    public function getAzGcMtt(): ?float {
        return $this->azGcMtt;
    }

    /**
     * Get the az hi.
     *
     * @return float|null Returns the az hi.
     */
    public function getAzHi(): ?float {
        return $this->azHi;
    }

    /**
     * Get the az jb.
     *
     * @return float|null Returns the az jb.
     */
    public function getAzJb(): ?float {
        return $this->azJb;
    }

    /**
     * Get the az jc.
     *
     * @return float|null Returns the az jc.
     */
    public function getAzJc(): ?float {
        return $this->azJc;
    }

    /**
     * Get the az total b.
     *
     * @return float|null Returns the az total b.
     */
    public function getAzTotalB(): ?float {
        return $this->azTotalB;
    }

    /**
     * Get the corres1.
     *
     * @return string|null Returns the corres1.
     */
    public function getCorres1(): ?string {
        return $this->corres1;
    }

    /**
     * Get the corres2.
     *
     * @return string|null Returns the corres2.
     */
    public function getCorres2(): ?string {
        return $this->corres2;
    }

    /**
     * Get the corres3.
     *
     * @return string|null Returns the corres3.
     */
    public function getCorres3(): ?string {
        return $this->corres3;
    }

    /**
     * Get the corres4.
     *
     * @return string|null Returns the corres4.
     */
    public function getCorres4(): ?string {
        return $this->corres4;
    }

    /**
     * Get the corres5.
     *
     * @return string|null Returns the corres5.
     */
    public function getCorres5(): ?string {
        return $this->corres5;
    }

    /**
     * Get the date dec.
     *
     * @return string|null Returns the date dec.
     */
    public function getDateDec(): ?string {
        return $this->dateDec;
    }

    /**
     * Get the debut exo.
     *
     * @return DateTime|null Returns the debut exo.
     */
    public function getDebutExo(): ?DateTime {
        return $this->debutExo;
    }

    /**
     * Get the fin exo.
     *
     * @return DateTime|null Returns the fin exo.
     */
    public function getFinExo(): ?DateTime {
        return $this->finExo;
    }

    /**
     * Get the lib doss.
     *
     * @return string|null Returns the lib doss.
     */
    public function getLibDoss(): ?string {
        return $this->libDoss;
    }

    /**
     * Get the mention expresse.
     *
     * @return bool|null Returns the mention expresse.
     */
    public function getMentionExpresse(): ?bool {
        return $this->mentionExpresse;
    }

    /**
     * Get the no doss.
     *
     * @return string|null Returns the no doss.
     */
    public function getNoDoss(): ?string {
        return $this->noDoss;
    }

    /**
     * Get the no lot ecritures.
     *
     * @return int|null Returns the no lot ecritures.
     */
    public function getNoLotEcritures(): ?int {
        return $this->noLotEcritures;
    }

    /**
     * Get the num uniq.
     *
     * @return int|null Returns the num uniq.
     */
    public function getNumUniq(): ?int {
        return $this->numUniq;
    }

    /**
     * Get the paiement imputation.
     *
     * @return bool|null Returns the paiement imputation.
     */
    public function getPaiementImputation(): ?bool {
        return $this->paiementImputation;
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
     * Get the sel adresse dest.
     *
     * @return string|null Returns the sel adresse dest.
     */
    public function getSelAdresseDest(): ?string {
        return $this->selAdresseDest;
    }

    /**
     * Get the total.
     *
     * @return float|null Returns the total.
     */
    public function getTotal(): ?float {
        return $this->total;
    }

    /**
     * Get the type dec.
     *
     * @return string|null Returns the type dec.
     */
    public function getTypeDec(): ?string {
        return $this->typeDec;
    }

    /**
     * Get the ville.
     *
     * @return string|null Returns the ville.
     */
    public function getVille(): ?string {
        return $this->ville;
    }

    /**
     * Get the z0100b.
     *
     * @return float|null Returns the z0100b.
     */
    public function getZ0100b(): ?float {
        return $this->z0100b;
    }

    /**
     * Get the z0121b.
     *
     * @return float|null Returns the z0121b.
     */
    public function getZ0121b(): ?float {
        return $this->z0121b;
    }

    /**
     * Get the z0600.
     *
     * @return float|null Returns the z0600.
     */
    public function getZ0600(): ?float {
        return $this->z0600;
    }

    /**
     * Get the z0705.
     *
     * @return float|null Returns the z0705.
     */
    public function getZ0705(): ?float {
        return $this->z0705;
    }

    /**
     * Get the z0900b.
     *
     * @return float|null Returns the z0900b.
     */
    public function getZ0900b(): ?float {
        return $this->z0900b;
    }

    /**
     * Get the z0920b.
     *
     * @return float|null Returns the z0920b.
     */
    public function getZ0920b(): ?float {
        return $this->z0920b;
    }

    /**
     * Get the z12 code.
     *
     * @return string|null Returns the z12 code.
     */
    public function getZ12Code(): ?string {
        return $this->z12Code;
    }

    /**
     * Get the z12 lib.
     *
     * @return string|null Returns the z12 lib.
     */
    public function getZ12Lib(): ?string {
        return $this->z12Lib;
    }

    /**
     * Get the z12 taxe.
     *
     * @return float|null Returns the z12 taxe.
     */
    public function getZ12Taxe(): ?float {
        return $this->z12Taxe;
    }

    /**
     * Get the z14.
     *
     * @return float|null Returns the z14.
     */
    public function getZ14(): ?float {
        return $this->z14;
    }

    /**
     * Get the z196b.
     *
     * @return float|null Returns the z196b.
     */
    public function getZ196b(): ?float {
        return $this->z196b;
    }

    /**
     * Get the z21.
     *
     * @return float|null Returns the z21.
     */
    public function getZ21(): ?float {
        return $this->z21;
    }

    /**
     * Get the z25.
     *
     * @return float|null Returns the z25.
     */
    public function getZ25(): ?float {
        return $this->z25;
    }

    /**
     * Get the z4227.
     *
     * @return float|null Returns the z4227.
     */
    public function getZ4227(): ?float {
        return $this->z4227;
    }

    /**
     * Get the z8001.
     *
     * @return float|null Returns the z8001.
     */
    public function getZ8001(): ?float {
        return $this->z8001;
    }

    /**
     * Get the z8002.
     *
     * @return float|null Returns the z8002.
     */
    public function getZ8002(): ?float {
        return $this->z8002;
    }

    /**
     * Get the z8003.
     *
     * @return float|null Returns the z8003.
     */
    public function getZ8003(): ?float {
        return $this->z8003;
    }

    /**
     * Get the z8005.
     *
     * @return float|null Returns the z8005.
     */
    public function getZ8005(): ?float {
        return $this->z8005;
    }

    /**
     * Get the z8006.
     *
     * @return float|null Returns the z8006.
     */
    public function getZ8006(): ?float {
        return $this->z8006;
    }

    /**
     * Get the z9979.
     *
     * @return float|null Returns the z9979.
     */
    public function getZ9979(): ?float {
        return $this->z9979;
    }

    /**
     * Get the z9989.
     *
     * @return float|null Returns the z9989.
     */
    public function getZ9989(): ?float {
        return $this->z9989;
    }

    /**
     * Get the z9991.
     *
     * @return float|null Returns the z9991.
     */
    public function getZ9991(): ?float {
        return $this->z9991;
    }

    /**
     * Get the z9999.
     *
     * @return float|null Returns the z9999.
     */
    public function getZ9999(): ?float {
        return $this->z9999;
    }

    /**
     * Get the z9 b taxe.
     *
     * @return float|null Returns the z9 b taxe.
     */
    public function getZ9BTaxe(): ?float {
        return $this->z9BTaxe;
    }

    /**
     * Get the i lock.
     *
     * @return int|null Returns the i lock.
     */
    public function getiLock(): ?int {
        return $this->iLock;
    }

    /**
     * Get the z0151b.
     *
     * @return float|null Returns the z0151b.
     */
    public function getz0151b(): ?float {
        return $this->z0151b;
    }

    /**
     * Get the z0207b.
     *
     * @return float|null Returns the z0207b.
     */
    public function getz0207b(): ?float {
        return $this->z0207b;
    }

    /**
     * Set the az0990b.
     *
     * @param float|null $az0990b The az0990b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz0990b(?float $az0990b): DecTvaGroupe {
        $this->az0990b = $az0990b;
        return $this;
    }

    /**
     * Set the az1010b.
     *
     * @param float|null $az1010b The az1010b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz1010b(?float $az1010b): DecTvaGroupe {
        $this->az1010b = $az1010b;
        return $this;
    }

    /**
     * Set the az1020b.
     *
     * @param float|null $az1020b The az1020b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz1020b(?float $az1020b): DecTvaGroupe {
        $this->az1020b = $az1020b;
        return $this;
    }

    /**
     * Set the az1030b.
     *
     * @param float|null $az1030b The az1030b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz1030b(?float $az1030b): DecTvaGroupe {
        $this->az1030b = $az1030b;
        return $this;
    }

    /**
     * Set the az1040b.
     *
     * @param float|null $az1040b The az1040b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz1040b(?float $az1040b): DecTvaGroupe {
        $this->az1040b = $az1040b;
        return $this;
    }

    /**
     * Set the az1050b.
     *
     * @param float|null $az1050b The az1050b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz1050b(?float $az1050b): DecTvaGroupe {
        $this->az1050b = $az1050b;
        return $this;
    }

    /**
     * Set the az1080b.
     *
     * @param float|null $az1080b The az1080b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz1080b(?float $az1080b): DecTvaGroupe {
        $this->az1080b = $az1080b;
        return $this;
    }

    /**
     * Set the az1081b.
     *
     * @param float|null $az1081b The az1081b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz1081b(?float $az1081b): DecTvaGroupe {
        $this->az1081b = $az1081b;
        return $this;
    }

    /**
     * Set the az1090b.
     *
     * @param float|null $az1090b The az1090b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz1090b(?float $az1090b): DecTvaGroupe {
        $this->az1090b = $az1090b;
        return $this;
    }

    /**
     * Set the az1100b.
     *
     * @param float|null $az1100b The az1100b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz1100b(?float $az1100b): DecTvaGroupe {
        $this->az1100b = $az1100b;
        return $this;
    }

    /**
     * Set the az1110b.
     *
     * @param float|null $az1110b The az1110b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz1110b(?float $az1110b): DecTvaGroupe {
        $this->az1110b = $az1110b;
        return $this;
    }

    /**
     * Set the az1120b.
     *
     * @param float|null $az1120b The az1120b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz1120b(?float $az1120b): DecTvaGroupe {
        $this->az1120b = $az1120b;
        return $this;
    }

    /**
     * Set the az3240.
     *
     * @param float|null $az3240 The az3240.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz3240(?float $az3240): DecTvaGroupe {
        $this->az3240 = $az3240;
        return $this;
    }

    /**
     * Set the az3510.
     *
     * @param float|null $az3510 The az3510.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz3510(?float $az3510): DecTvaGroupe {
        $this->az3510 = $az3510;
        return $this;
    }

    /**
     * Set the az3520.
     *
     * @param float|null $az3520 The az3520.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz3520(?float $az3520): DecTvaGroupe {
        $this->az3520 = $az3520;
        return $this;
    }

    /**
     * Set the az38 code.
     *
     * @param string|null $az38Code The az38 code.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz38Code(?string $az38Code): DecTvaGroupe {
        $this->az38Code = $az38Code;
        return $this;
    }

    /**
     * Set the az38 lib.
     *
     * @param string|null $az38Lib The az38 lib.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz38Lib(?string $az38Lib): DecTvaGroupe {
        $this->az38Lib = $az38Lib;
        return $this;
    }

    /**
     * Set the az38b.
     *
     * @param float|null $az38b The az38b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz38b(?float $az38b): DecTvaGroupe {
        $this->az38b = $az38b;
        return $this;
    }

    /**
     * Set the az4200.
     *
     * @param float|null $az4200 The az4200.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4200(?float $az4200): DecTvaGroupe {
        $this->az4200 = $az4200;
        return $this;
    }

    /**
     * Set the az4201.
     *
     * @param float|null $az4201 The az4201.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4201(?float $az4201): DecTvaGroupe {
        $this->az4201 = $az4201;
        return $this;
    }

    /**
     * Set the az4204.
     *
     * @param float|null $az4204 The az4204.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4204(?float $az4204): DecTvaGroupe {
        $this->az4204 = $az4204;
        return $this;
    }

    /**
     * Set the az4206.
     *
     * @param float|null $az4206 The az4206.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4206(?float $az4206): DecTvaGroupe {
        $this->az4206 = $az4206;
        return $this;
    }

    /**
     * Set the az4207.
     *
     * @param float|null $az4207 The az4207.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4207(?float $az4207): DecTvaGroupe {
        $this->az4207 = $az4207;
        return $this;
    }

    /**
     * Set the az4213.
     *
     * @param float|null $az4213 The az4213.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4213(?float $az4213): DecTvaGroupe {
        $this->az4213 = $az4213;
        return $this;
    }

    /**
     * Set the az4215.
     *
     * @param float|null $az4215 The az4215.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4215(?float $az4215): DecTvaGroupe {
        $this->az4215 = $az4215;
        return $this;
    }

    /**
     * Set the az4220.
     *
     * @param float|null $az4220 The az4220.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4220(?float $az4220): DecTvaGroupe {
        $this->az4220 = $az4220;
        return $this;
    }

    /**
     * Set the az4222.
     *
     * @param float|null $az4222 The az4222.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4222(?float $az4222): DecTvaGroupe {
        $this->az4222 = $az4222;
        return $this;
    }

    /**
     * Set the az4223.
     *
     * @param float|null $az4223 The az4223.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4223(?float $az4223): DecTvaGroupe {
        $this->az4223 = $az4223;
        return $this;
    }

    /**
     * Set the az4228 mtt.
     *
     * @param float|null $az4228Mtt The az4228 mtt.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4228Mtt(?float $az4228Mtt): DecTvaGroupe {
        $this->az4228Mtt = $az4228Mtt;
        return $this;
    }

    /**
     * Set the az4230.
     *
     * @param float|null $az4230 The az4230.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4230(?float $az4230): DecTvaGroupe {
        $this->az4230 = $az4230;
        return $this;
    }

    /**
     * Set the az4231.
     *
     * @param float|null $az4231 The az4231.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4231(?float $az4231): DecTvaGroupe {
        $this->az4231 = $az4231;
        return $this;
    }

    /**
     * Set the az4232.
     *
     * @param float|null $az4232 The az4232.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4232(?float $az4232): DecTvaGroupe {
        $this->az4232 = $az4232;
        return $this;
    }

    /**
     * Set the az4233.
     *
     * @param float|null $az4233 The az4233.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4233(?float $az4233): DecTvaGroupe {
        $this->az4233 = $az4233;
        return $this;
    }

    /**
     * Set the az4234.
     *
     * @param float|null $az4234 The az4234.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4234(?float $az4234): DecTvaGroupe {
        $this->az4234 = $az4234;
        return $this;
    }

    /**
     * Set the az4235.
     *
     * @param float|null $az4235 The az4235.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4235(?float $az4235): DecTvaGroupe {
        $this->az4235 = $az4235;
        return $this;
    }

    /**
     * Set the az4236.
     *
     * @param float|null $az4236 The az4236.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4236(?float $az4236): DecTvaGroupe {
        $this->az4236 = $az4236;
        return $this;
    }

    /**
     * Set the az4237.
     *
     * @param float|null $az4237 The az4237.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4237(?float $az4237): DecTvaGroupe {
        $this->az4237 = $az4237;
        return $this;
    }

    /**
     * Set the az4238.
     *
     * @param float|null $az4238 The az4238.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4238(?float $az4238): DecTvaGroupe {
        $this->az4238 = $az4238;
        return $this;
    }

    /**
     * Set the az4239.
     *
     * @param float|null $az4239 The az4239.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4239(?float $az4239): DecTvaGroupe {
        $this->az4239 = $az4239;
        return $this;
    }

    /**
     * Set the az4240.
     *
     * @param float|null $az4240 The az4240.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4240(?float $az4240): DecTvaGroupe {
        $this->az4240 = $az4240;
        return $this;
    }

    /**
     * Set the az4241.
     *
     * @param float|null $az4241 The az4241.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4241(?float $az4241): DecTvaGroupe {
        $this->az4241 = $az4241;
        return $this;
    }

    /**
     * Set the az4242.
     *
     * @param float|null $az4242 The az4242.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4242(?float $az4242): DecTvaGroupe {
        $this->az4242 = $az4242;
        return $this;
    }

    /**
     * Set the az4243.
     *
     * @param float|null $az4243 The az4243.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4243(?float $az4243): DecTvaGroupe {
        $this->az4243 = $az4243;
        return $this;
    }

    /**
     * Set the az4244.
     *
     * @param float|null $az4244 The az4244.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4244(?float $az4244): DecTvaGroupe {
        $this->az4244 = $az4244;
        return $this;
    }

    /**
     * Set the az4245.
     *
     * @param float|null $az4245 The az4245.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4245(?float $az4245): DecTvaGroupe {
        $this->az4245 = $az4245;
        return $this;
    }

    /**
     * Set the az4246.
     *
     * @param float|null $az4246 The az4246.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4246(?float $az4246): DecTvaGroupe {
        $this->az4246 = $az4246;
        return $this;
    }

    /**
     * Set the az4247.
     *
     * @param float|null $az4247 The az4247.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4247(?float $az4247): DecTvaGroupe {
        $this->az4247 = $az4247;
        return $this;
    }

    /**
     * Set the az4248.
     *
     * @param float|null $az4248 The az4248.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4248(?float $az4248): DecTvaGroupe {
        $this->az4248 = $az4248;
        return $this;
    }

    /**
     * Set the az4249.
     *
     * @param float|null $az4249 The az4249.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4249(?float $az4249): DecTvaGroupe {
        $this->az4249 = $az4249;
        return $this;
    }

    /**
     * Set the az4250.
     *
     * @param float|null $az4250 The az4250.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4250(?float $az4250): DecTvaGroupe {
        $this->az4250 = $az4250;
        return $this;
    }

    /**
     * Set the az4251.
     *
     * @param float|null $az4251 The az4251.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4251(?float $az4251): DecTvaGroupe {
        $this->az4251 = $az4251;
        return $this;
    }

    /**
     * Set the az4252.
     *
     * @param float|null $az4252 The az4252.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4252(?float $az4252): DecTvaGroupe {
        $this->az4252 = $az4252;
        return $this;
    }

    /**
     * Set the az4254.
     *
     * @param float|null $az4254 The az4254.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4254(?float $az4254): DecTvaGroupe {
        $this->az4254 = $az4254;
        return $this;
    }

    /**
     * Set the az4255.
     *
     * @param float|null $az4255 The az4255.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4255(?float $az4255): DecTvaGroupe {
        $this->az4255 = $az4255;
        return $this;
    }

    /**
     * Set the az4256.
     *
     * @param float|null $az4256 The az4256.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4256(?float $az4256): DecTvaGroupe {
        $this->az4256 = $az4256;
        return $this;
    }

    /**
     * Set the az4257.
     *
     * @param float|null $az4257 The az4257.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4257(?float $az4257): DecTvaGroupe {
        $this->az4257 = $az4257;
        return $this;
    }

    /**
     * Set the az4258.
     *
     * @param float|null $az4258 The az4258.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4258(?float $az4258): DecTvaGroupe {
        $this->az4258 = $az4258;
        return $this;
    }

    /**
     * Set the az4259.
     *
     * @param float|null $az4259 The az4259.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4259(?float $az4259): DecTvaGroupe {
        $this->az4259 = $az4259;
        return $this;
    }

    /**
     * Set the az4260.
     *
     * @param float|null $az4260 The az4260.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4260(?float $az4260): DecTvaGroupe {
        $this->az4260 = $az4260;
        return $this;
    }

    /**
     * Set the az4261.
     *
     * @param float|null $az4261 The az4261.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4261(?float $az4261): DecTvaGroupe {
        $this->az4261 = $az4261;
        return $this;
    }

    /**
     * Set the az4262.
     *
     * @param float|null $az4262 The az4262.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4262(?float $az4262): DecTvaGroupe {
        $this->az4262 = $az4262;
        return $this;
    }

    /**
     * Set the az4263.
     *
     * @param float|null $az4263 The az4263.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4263(?float $az4263): DecTvaGroupe {
        $this->az4263 = $az4263;
        return $this;
    }

    /**
     * Set the az4264.
     *
     * @param float|null $az4264 The az4264.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4264(?float $az4264): DecTvaGroupe {
        $this->az4264 = $az4264;
        return $this;
    }

    /**
     * Set the az4265.
     *
     * @param float|null $az4265 The az4265.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4265(?float $az4265): DecTvaGroupe {
        $this->az4265 = $az4265;
        return $this;
    }

    /**
     * Set the az4266.
     *
     * @param float|null $az4266 The az4266.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4266(?float $az4266): DecTvaGroupe {
        $this->az4266 = $az4266;
        return $this;
    }

    /**
     * Set the az4267.
     *
     * @param float|null $az4267 The az4267.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4267(?float $az4267): DecTvaGroupe {
        $this->az4267 = $az4267;
        return $this;
    }

    /**
     * Set the az4268.
     *
     * @param float|null $az4268 The az4268.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4268(?float $az4268): DecTvaGroupe {
        $this->az4268 = $az4268;
        return $this;
    }

    /**
     * Set the az4268 base.
     *
     * @param float|null $az4268Base The az4268 base.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4268Base(?float $az4268Base): DecTvaGroupe {
        $this->az4268Base = $az4268Base;
        return $this;
    }

    /**
     * Set the az4269.
     *
     * @param float|null $az4269 The az4269.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4269(?float $az4269): DecTvaGroupe {
        $this->az4269 = $az4269;
        return $this;
    }

    /**
     * Set the az4269 base.
     *
     * @param float|null $az4269Base The az4269 base.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4269Base(?float $az4269Base): DecTvaGroupe {
        $this->az4269Base = $az4269Base;
        return $this;
    }

    /**
     * Set the az4270.
     *
     * @param float|null $az4270 The az4270.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4270(?float $az4270): DecTvaGroupe {
        $this->az4270 = $az4270;
        return $this;
    }

    /**
     * Set the az4270 base.
     *
     * @param float|null $az4270Base The az4270 base.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4270Base(?float $az4270Base): DecTvaGroupe {
        $this->az4270Base = $az4270Base;
        return $this;
    }

    /**
     * Set the az4271.
     *
     * @param float|null $az4271 The az4271.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4271(?float $az4271): DecTvaGroupe {
        $this->az4271 = $az4271;
        return $this;
    }

    /**
     * Set the az4271 base.
     *
     * @param float|null $az4271Base The az4271 base.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4271Base(?float $az4271Base): DecTvaGroupe {
        $this->az4271Base = $az4271Base;
        return $this;
    }

    /**
     * Set the az4272.
     *
     * @param float|null $az4272 The az4272.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4272(?float $az4272): DecTvaGroupe {
        $this->az4272 = $az4272;
        return $this;
    }

    /**
     * Set the az4274.
     *
     * @param float|null $az4274 The az4274.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4274(?float $az4274): DecTvaGroupe {
        $this->az4274 = $az4274;
        return $this;
    }

    /**
     * Set the az4276.
     *
     * @param float|null $az4276 The az4276.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4276(?float $az4276): DecTvaGroupe {
        $this->az4276 = $az4276;
        return $this;
    }

    /**
     * Set the az4276 base.
     *
     * @param float|null $az4276Base The az4276 base.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4276Base(?float $az4276Base): DecTvaGroupe {
        $this->az4276Base = $az4276Base;
        return $this;
    }

    /**
     * Set the az4277.
     *
     * @param float|null $az4277 The az4277.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4277(?float $az4277): DecTvaGroupe {
        $this->az4277 = $az4277;
        return $this;
    }

    /**
     * Set the az4277 base.
     *
     * @param float|null $az4277Base The az4277 base.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4277Base(?float $az4277Base): DecTvaGroupe {
        $this->az4277Base = $az4277Base;
        return $this;
    }

    /**
     * Set the az4278.
     *
     * @param float|null $az4278 The az4278.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4278(?float $az4278): DecTvaGroupe {
        $this->az4278 = $az4278;
        return $this;
    }

    /**
     * Set the az4279.
     *
     * @param float|null $az4279 The az4279.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4279(?float $az4279): DecTvaGroupe {
        $this->az4279 = $az4279;
        return $this;
    }

    /**
     * Set the az4280.
     *
     * @param float|null $az4280 The az4280.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4280(?float $az4280): DecTvaGroupe {
        $this->az4280 = $az4280;
        return $this;
    }

    /**
     * Set the az4281.
     *
     * @param float|null $az4281 The az4281.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4281(?float $az4281): DecTvaGroupe {
        $this->az4281 = $az4281;
        return $this;
    }

    /**
     * Set the az4282.
     *
     * @param float|null $az4282 The az4282.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4282(?float $az4282): DecTvaGroupe {
        $this->az4282 = $az4282;
        return $this;
    }

    /**
     * Set the az4283.
     *
     * @param float|null $az4283 The az4283.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4283(?float $az4283): DecTvaGroupe {
        $this->az4283 = $az4283;
        return $this;
    }

    /**
     * Set the az4284.
     *
     * @param float|null $az4284 The az4284.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4284(?float $az4284): DecTvaGroupe {
        $this->az4284 = $az4284;
        return $this;
    }

    /**
     * Set the az4285.
     *
     * @param float|null $az4285 The az4285.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4285(?float $az4285): DecTvaGroupe {
        $this->az4285 = $az4285;
        return $this;
    }

    /**
     * Set the az4288.
     *
     * @param float|null $az4288 The az4288.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4288(?float $az4288): DecTvaGroupe {
        $this->az4288 = $az4288;
        return $this;
    }

    /**
     * Set the az4289.
     *
     * @param float|null $az4289 The az4289.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4289(?float $az4289): DecTvaGroupe {
        $this->az4289 = $az4289;
        return $this;
    }

    /**
     * Set the az4290.
     *
     * @param float|null $az4290 The az4290.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz4290(?float $az4290): DecTvaGroupe {
        $this->az4290 = $az4290;
        return $this;
    }

    /**
     * Set the az59 mtt.
     *
     * @param float|null $az59Mtt The az59 mtt.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAz59Mtt(?float $az59Mtt): DecTvaGroupe {
        $this->az59Mtt = $az59Mtt;
        return $this;
    }

    /**
     * Set the az es mtt.
     *
     * @param float|null $azEsMtt The az es mtt.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzEsMtt(?float $azEsMtt): DecTvaGroupe {
        $this->azEsMtt = $azEsMtt;
        return $this;
    }

    /**
     * Set the az eu mtt.
     *
     * @param float|null $azEuMtt The az eu mtt.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzEuMtt(?float $azEuMtt): DecTvaGroupe {
        $this->azEuMtt = $azEuMtt;
        return $this;
    }

    /**
     * Set the az ez code.
     *
     * @param string|null $azEzCode The az ez code.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzEzCode(?string $azEzCode): DecTvaGroupe {
        $this->azEzCode = $azEzCode;
        return $this;
    }

    /**
     * Set the az ez lib.
     *
     * @param string|null $azEzLib The az ez lib.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzEzLib(?string $azEzLib): DecTvaGroupe {
        $this->azEzLib = $azEzLib;
        return $this;
    }

    /**
     * Set the az ez mtt.
     *
     * @param float|null $azEzMtt The az ez mtt.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzEzMtt(?float $azEzMtt): DecTvaGroupe {
        $this->azEzMtt = $azEzMtt;
        return $this;
    }

    /**
     * Set the az ga code.
     *
     * @param string|null $azGaCode The az ga code.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzGaCode(?string $azGaCode): DecTvaGroupe {
        $this->azGaCode = $azGaCode;
        return $this;
    }

    /**
     * Set the az ga lib.
     *
     * @param string|null $azGaLib The az ga lib.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzGaLib(?string $azGaLib): DecTvaGroupe {
        $this->azGaLib = $azGaLib;
        return $this;
    }

    /**
     * Set the az ga mtt.
     *
     * @param float|null $azGaMtt The az ga mtt.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzGaMtt(?float $azGaMtt): DecTvaGroupe {
        $this->azGaMtt = $azGaMtt;
        return $this;
    }

    /**
     * Set the az gc mtt.
     *
     * @param float|null $azGcMtt The az gc mtt.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzGcMtt(?float $azGcMtt): DecTvaGroupe {
        $this->azGcMtt = $azGcMtt;
        return $this;
    }

    /**
     * Set the az hi.
     *
     * @param float|null $azHi The az hi.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzHi(?float $azHi): DecTvaGroupe {
        $this->azHi = $azHi;
        return $this;
    }

    /**
     * Set the az jb.
     *
     * @param float|null $azJb The az jb.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzJb(?float $azJb): DecTvaGroupe {
        $this->azJb = $azJb;
        return $this;
    }

    /**
     * Set the az jc.
     *
     * @param float|null $azJc The az jc.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzJc(?float $azJc): DecTvaGroupe {
        $this->azJc = $azJc;
        return $this;
    }

    /**
     * Set the az total b.
     *
     * @param float|null $azTotalB The az total b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setAzTotalB(?float $azTotalB): DecTvaGroupe {
        $this->azTotalB = $azTotalB;
        return $this;
    }

    /**
     * Set the corres1.
     *
     * @param string|null $corres1 The corres1.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setCorres1(?string $corres1): DecTvaGroupe {
        $this->corres1 = $corres1;
        return $this;
    }

    /**
     * Set the corres2.
     *
     * @param string|null $corres2 The corres2.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setCorres2(?string $corres2): DecTvaGroupe {
        $this->corres2 = $corres2;
        return $this;
    }

    /**
     * Set the corres3.
     *
     * @param string|null $corres3 The corres3.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setCorres3(?string $corres3): DecTvaGroupe {
        $this->corres3 = $corres3;
        return $this;
    }

    /**
     * Set the corres4.
     *
     * @param string|null $corres4 The corres4.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setCorres4(?string $corres4): DecTvaGroupe {
        $this->corres4 = $corres4;
        return $this;
    }

    /**
     * Set the corres5.
     *
     * @param string|null $corres5 The corres5.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setCorres5(?string $corres5): DecTvaGroupe {
        $this->corres5 = $corres5;
        return $this;
    }

    /**
     * Set the date dec.
     *
     * @param string|null $dateDec The date dec.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setDateDec(?string $dateDec): DecTvaGroupe {
        $this->dateDec = $dateDec;
        return $this;
    }

    /**
     * Set the debut exo.
     *
     * @param DateTime|null $debutExo The debut exo.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setDebutExo(?DateTime $debutExo): DecTvaGroupe {
        $this->debutExo = $debutExo;
        return $this;
    }

    /**
     * Set the fin exo.
     *
     * @param DateTime|null $finExo The fin exo.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setFinExo(?DateTime $finExo): DecTvaGroupe {
        $this->finExo = $finExo;
        return $this;
    }

    /**
     * Set the lib doss.
     *
     * @param string|null $libDoss The lib doss.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setLibDoss(?string $libDoss): DecTvaGroupe {
        $this->libDoss = $libDoss;
        return $this;
    }

    /**
     * Set the mention expresse.
     *
     * @param bool|null $mentionExpresse The mention expresse.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setMentionExpresse(?bool $mentionExpresse): DecTvaGroupe {
        $this->mentionExpresse = $mentionExpresse;
        return $this;
    }

    /**
     * Set the no doss.
     *
     * @param string|null $noDoss The no doss.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setNoDoss(?string $noDoss): DecTvaGroupe {
        $this->noDoss = $noDoss;
        return $this;
    }

    /**
     * Set the no lot ecritures.
     *
     * @param int|null $noLotEcritures The no lot ecritures.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setNoLotEcritures(?int $noLotEcritures): DecTvaGroupe {
        $this->noLotEcritures = $noLotEcritures;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int|null $numUniq The num uniq.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setNumUniq(?int $numUniq): DecTvaGroupe {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the paiement imputation.
     *
     * @param bool|null $paiementImputation The paiement imputation.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setPaiementImputation(?bool $paiementImputation): DecTvaGroupe {
        $this->paiementImputation = $paiementImputation;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setPeriode(?DateTime $periode): DecTvaGroupe {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the sel adresse dest.
     *
     * @param string|null $selAdresseDest The sel adresse dest.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setSelAdresseDest(?string $selAdresseDest): DecTvaGroupe {
        $this->selAdresseDest = $selAdresseDest;
        return $this;
    }

    /**
     * Set the total.
     *
     * @param float|null $total The total.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setTotal(?float $total): DecTvaGroupe {
        $this->total = $total;
        return $this;
    }

    /**
     * Set the type dec.
     *
     * @param string|null $typeDec The type dec.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setTypeDec(?string $typeDec): DecTvaGroupe {
        $this->typeDec = $typeDec;
        return $this;
    }

    /**
     * Set the ville.
     *
     * @param string|null $ville The ville.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setVille(?string $ville): DecTvaGroupe {
        $this->ville = $ville;
        return $this;
    }

    /**
     * Set the z0100b.
     *
     * @param float|null $z0100b The z0100b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ0100b(?float $z0100b): DecTvaGroupe {
        $this->z0100b = $z0100b;
        return $this;
    }

    /**
     * Set the z0121b.
     *
     * @param float|null $z0121b The z0121b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ0121b(?float $z0121b): DecTvaGroupe {
        $this->z0121b = $z0121b;
        return $this;
    }

    /**
     * Set the z0600.
     *
     * @param float|null $z0600 The z0600.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ0600(?float $z0600): DecTvaGroupe {
        $this->z0600 = $z0600;
        return $this;
    }

    /**
     * Set the z0705.
     *
     * @param float|null $z0705 The z0705.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ0705(?float $z0705): DecTvaGroupe {
        $this->z0705 = $z0705;
        return $this;
    }

    /**
     * Set the z0900b.
     *
     * @param float|null $z0900b The z0900b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ0900b(?float $z0900b): DecTvaGroupe {
        $this->z0900b = $z0900b;
        return $this;
    }

    /**
     * Set the z0920b.
     *
     * @param float|null $z0920b The z0920b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ0920b(?float $z0920b): DecTvaGroupe {
        $this->z0920b = $z0920b;
        return $this;
    }

    /**
     * Set the z12 code.
     *
     * @param string|null $z12Code The z12 code.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ12Code(?string $z12Code): DecTvaGroupe {
        $this->z12Code = $z12Code;
        return $this;
    }

    /**
     * Set the z12 lib.
     *
     * @param string|null $z12Lib The z12 lib.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ12Lib(?string $z12Lib): DecTvaGroupe {
        $this->z12Lib = $z12Lib;
        return $this;
    }

    /**
     * Set the z12 taxe.
     *
     * @param float|null $z12Taxe The z12 taxe.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ12Taxe(?float $z12Taxe): DecTvaGroupe {
        $this->z12Taxe = $z12Taxe;
        return $this;
    }

    /**
     * Set the z14.
     *
     * @param float|null $z14 The z14.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ14(?float $z14): DecTvaGroupe {
        $this->z14 = $z14;
        return $this;
    }

    /**
     * Set the z196b.
     *
     * @param float|null $z196b The z196b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ196b(?float $z196b): DecTvaGroupe {
        $this->z196b = $z196b;
        return $this;
    }

    /**
     * Set the z21.
     *
     * @param float|null $z21 The z21.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ21(?float $z21): DecTvaGroupe {
        $this->z21 = $z21;
        return $this;
    }

    /**
     * Set the z25.
     *
     * @param float|null $z25 The z25.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ25(?float $z25): DecTvaGroupe {
        $this->z25 = $z25;
        return $this;
    }

    /**
     * Set the z4227.
     *
     * @param float|null $z4227 The z4227.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ4227(?float $z4227): DecTvaGroupe {
        $this->z4227 = $z4227;
        return $this;
    }

    /**
     * Set the z8001.
     *
     * @param float|null $z8001 The z8001.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ8001(?float $z8001): DecTvaGroupe {
        $this->z8001 = $z8001;
        return $this;
    }

    /**
     * Set the z8002.
     *
     * @param float|null $z8002 The z8002.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ8002(?float $z8002): DecTvaGroupe {
        $this->z8002 = $z8002;
        return $this;
    }

    /**
     * Set the z8003.
     *
     * @param float|null $z8003 The z8003.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ8003(?float $z8003): DecTvaGroupe {
        $this->z8003 = $z8003;
        return $this;
    }

    /**
     * Set the z8005.
     *
     * @param float|null $z8005 The z8005.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ8005(?float $z8005): DecTvaGroupe {
        $this->z8005 = $z8005;
        return $this;
    }

    /**
     * Set the z8006.
     *
     * @param float|null $z8006 The z8006.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ8006(?float $z8006): DecTvaGroupe {
        $this->z8006 = $z8006;
        return $this;
    }

    /**
     * Set the z9979.
     *
     * @param float|null $z9979 The z9979.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ9979(?float $z9979): DecTvaGroupe {
        $this->z9979 = $z9979;
        return $this;
    }

    /**
     * Set the z9989.
     *
     * @param float|null $z9989 The z9989.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ9989(?float $z9989): DecTvaGroupe {
        $this->z9989 = $z9989;
        return $this;
    }

    /**
     * Set the z9991.
     *
     * @param float|null $z9991 The z9991.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ9991(?float $z9991): DecTvaGroupe {
        $this->z9991 = $z9991;
        return $this;
    }

    /**
     * Set the z9999.
     *
     * @param float|null $z9999 The z9999.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ9999(?float $z9999): DecTvaGroupe {
        $this->z9999 = $z9999;
        return $this;
    }

    /**
     * Set the z9 b taxe.
     *
     * @param float|null $z9BTaxe The z9 b taxe.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setZ9BTaxe(?float $z9BTaxe): DecTvaGroupe {
        $this->z9BTaxe = $z9BTaxe;
        return $this;
    }

    /**
     * Set the i lock.
     *
     * @param int|null $iLock The i lock.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setiLock(?int $iLock): DecTvaGroupe {
        $this->iLock = $iLock;
        return $this;
    }

    /**
     * Set the z0151b.
     *
     * @param float|null $z0151b The z0151b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setz0151b(?float $z0151b): DecTvaGroupe {
        $this->z0151b = $z0151b;
        return $this;
    }

    /**
     * Set the z0207b.
     *
     * @param float|null $z0207b The z0207b.
     * @return DecTvaGroupe Returns this Dec tva groupe.
     */
    public function setz0207b(?float $z0207b): DecTvaGroupe {
        $this->z0207b = $z0207b;
        return $this;
    }
}
