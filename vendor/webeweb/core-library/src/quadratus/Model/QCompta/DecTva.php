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
 * Dec tva.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class DecTva {

    /**
     * A corres1.
     *
     * @var string|null
     */
    private $aCorres1;

    /**
     * A corres2.
     *
     * @var string|null
     */
    private $aCorres2;

    /**
     * A corres3.
     *
     * @var string|null
     */
    private $aCorres3;

    /**
     * A corres4.
     *
     * @var string|null
     */
    private $aCorres4;

    /**
     * A corres5.
     *
     * @var string|null
     */
    private $aCorres5;

    /**
     * A corres6.
     *
     * @var string|null
     */
    private $aCorres6;

    /**
     * A corres7.
     *
     * @var string|null
     */
    private $aCorres7;

    /**
     * A corres8.
     *
     * @var string|null
     */
    private $aCorres8;

    /**
     * Az0990.
     *
     * @var float|null
     */
    private $az0990;

    /**
     * Az0990b.
     *
     * @var float|null
     */
    private $az0990b;

    /**
     * Az1010.
     *
     * @var float|null
     */
    private $az1010;

    /**
     * Az1010b.
     *
     * @var float|null
     */
    private $az1010b;

    /**
     * Az1020.
     *
     * @var float|null
     */
    private $az1020;

    /**
     * Az1020b.
     *
     * @var float|null
     */
    private $az1020b;

    /**
     * Az1030.
     *
     * @var float|null
     */
    private $az1030;

    /**
     * Az1030b.
     *
     * @var float|null
     */
    private $az1030b;

    /**
     * Az1040.
     *
     * @var float|null
     */
    private $az1040;

    /**
     * Az1040b.
     *
     * @var float|null
     */
    private $az1040b;

    /**
     * Az1050.
     *
     * @var float|null
     */
    private $az1050;

    /**
     * Az1050b.
     *
     * @var float|null
     */
    private $az1050b;

    /**
     * Az1080.
     *
     * @var float|null
     */
    private $az1080;

    /**
     * Az1080b.
     *
     * @var float|null
     */
    private $az1080b;

    /**
     * Az1081.
     *
     * @var float|null
     */
    private $az1081;

    /**
     * Az1081b.
     *
     * @var float|null
     */
    private $az1081b;

    /**
     * Az1090.
     *
     * @var float|null
     */
    private $az1090;

    /**
     * Az1090b.
     *
     * @var float|null
     */
    private $az1090b;

    /**
     * Az1100.
     *
     * @var float|null
     */
    private $az1100;

    /**
     * Az1100b.
     *
     * @var float|null
     */
    private $az1100b;

    /**
     * Az1110.
     *
     * @var float|null
     */
    private $az1110;

    /**
     * Az1110b.
     *
     * @var float|null
     */
    private $az1110b;

    /**
     * Az1120.
     *
     * @var float|null
     */
    private $az1120;

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
     * Az3260.
     *
     * @var float|null
     */
    private $az3260;

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
     * Az38ht.
     *
     * @var float|null
     */
    private $az38ht;

    /**
     * Az3910.
     *
     * @var float|null
     */
    private $az3910;

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
     * Az4208.
     *
     * @var float|null
     */
    private $az4208;

    /**
     * Az4209.
     *
     * @var float|null
     */
    private $az4209;

    /**
     * Az4210.
     *
     * @var float|null
     */
    private $az4210;

    /**
     * Az4211.
     *
     * @var float|null
     */
    private $az4211;

    /**
     * Az4212.
     *
     * @var float|null
     */
    private $az4212;

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
     * Az4224.
     *
     * @var float|null
     */
    private $az4224;

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
     * Az50 code.
     *
     * @var string|null
     */
    private $az50Code;

    /**
     * Az50 lib.
     *
     * @var string|null
     */
    private $az50Lib;

    /**
     * Az50 mtt.
     *
     * @var float|null
     */
    private $az50Mtt;

    /**
     * Az59 code.
     *
     * @var string|null
     */
    private $az59Code;

    /**
     * Az59 lib.
     *
     * @var string|null
     */
    private $az59Lib;

    /**
     * Az59 mtt.
     *
     * @var float|null
     */
    private $az59Mtt;

    /**
     * Az en code.
     *
     * @var string|null
     */
    private $azEnCode;

    /**
     * Az en lib.
     *
     * @var string|null
     */
    private $azEnLib;

    /**
     * Az es code.
     *
     * @var string|null
     */
    private $azEsCode;

    /**
     * Az es lib.
     *
     * @var string|null
     */
    private $azEsLib;

    /**
     * Az es mtt.
     *
     * @var float|null
     */
    private $azEsMtt;

    /**
     * Az eu code.
     *
     * @var string|null
     */
    private $azEuCode;

    /**
     * Az eu lib.
     *
     * @var string|null
     */
    private $azEuLib;

    /**
     * Az eu mtt.
     *
     * @var float|null
     */
    private $azEuMtt;

    /**
     * Az ex code.
     *
     * @var string|null
     */
    private $azExCode;

    /**
     * Az ex lib.
     *
     * @var string|null
     */
    private $azExLib;

    /**
     * Az ex mtt.
     *
     * @var float|null
     */
    private $azExMtt;

    /**
     * Az ey code.
     *
     * @var string|null
     */
    private $azEyCode;

    /**
     * Az ey lib.
     *
     * @var string|null
     */
    private $azEyLib;

    /**
     * Az ey mtt.
     *
     * @var float|null
     */
    private $azEyMtt;

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
     * Az gc code.
     *
     * @var string|null
     */
    private $azGcCode;

    /**
     * Az gc lib.
     *
     * @var string|null
     */
    private $azGcLib;

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
     * Az hl.
     *
     * @var float|null
     */
    private $azHl;

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
     * Az ligne4 mtt.
     *
     * @var float|null
     */
    private $azLigne4Mtt;

    /**
     * Az ligne5 mtt.
     *
     * @var float|null
     */
    private $azLigne5Mtt;

    /**
     * b groupe.
     *
     * @var bool|null
     */
    private $bGroupe;

    /**
     * Ca12 mois cloture.
     *
     * @var int|null
     */
    private $ca12MoisCloture;

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
     * Corres6.
     *
     * @var string|null
     */
    private $corres6;

    /**
     * Corres7.
     *
     * @var string|null
     */
    private $corres7;

    /**
     * Corres8.
     *
     * @var string|null
     */
    private $corres8;

    /**
     * Credit compte.
     *
     * @var bool|null
     */
    private $creditCompte;

    /**
     * Credit imputer.
     *
     * @var bool|null
     */
    private $creditImputer;

    /**
     * Date dec.
     *
     * @var string|null
     */
    private $dateDec;

    /**
     * Flg ac.
     *
     * @var bool|null
     */
    private $flgAc;

    /**
     * Gen auto.
     *
     * @var bool|null
     */
    private $genAuto;

    /**
     * Ht taux196.
     *
     * @var float|null
     */
    private $htTaux196;

    /**
     * Ht taux7.
     *
     * @var float|null
     */
    private $htTaux7;

    /**
     * Liqui taxes1.
     *
     * @var string|null
     */
    private $liquiTaxes1;

    /**
     * Liqui taxes2.
     *
     * @var string|null
     */
    private $liquiTaxes2;

    /**
     * Liqui taxes3.
     *
     * @var string|null
     */
    private $liquiTaxes3;

    /**
     * Liqui taxes4.
     *
     * @var string|null
     */
    private $liquiTaxes4;

    /**
     * Liqui taxes5.
     *
     * @var string|null
     */
    private $liquiTaxes5;

    /**
     * Mention expresse.
     *
     * @var bool|null
     */
    private $mentionExpresse;

    /**
     * Monnaie.
     *
     * @var string|null
     */
    private $monnaie;

    /**
     * Monnaie tenue.
     *
     * @var string|null
     */
    private $monnaieTenue;

    /**
     * No lot ecritures.
     *
     * @var int|null
     */
    private $noLotEcritures;

    /**
     * P cent.
     *
     * @var float|null
     */
    private $pCent;

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
     * Report acp.
     *
     * @var float|null
     */
    private $reportAcp;

    /**
     * Rib titulaire1.
     *
     * @var string|null
     */
    private $ribTitulaire1;

    /**
     * Rib titulaire2.
     *
     * @var string|null
     */
    private $ribTitulaire2;

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
     * Type reglement.
     *
     * @var int|null
     */
    private $typeReglement;

    /**
     * Ville.
     *
     * @var string|null
     */
    private $ville;

    /**
     * z0029.
     *
     * @var float|null
     */
    private $z0029;

    /**
     * z0030.
     *
     * @var float|null
     */
    private $z0030;

    /**
     * Z0031.
     *
     * @var float|null
     */
    private $z0031;

    /**
     * Z0031b.
     *
     * @var float|null
     */
    private $z0031b;

    /**
     * Z0032.
     *
     * @var float|null
     */
    private $z0032;

    /**
     * Z0033.
     *
     * @var float|null
     */
    private $z0033;

    /**
     * Z0034.
     *
     * @var float|null
     */
    private $z0034;

    /**
     * Z0035.
     *
     * @var float|null
     */
    private $z0035;

    /**
     * z0036.
     *
     * @var float|null
     */
    private $z0036;

    /**
     * Z0037.
     *
     * @var float|null
     */
    private $z0037;

    /**
     * Z0038.
     *
     * @var float|null
     */
    private $z0038;

    /**
     * z0039.
     *
     * @var float|null
     */
    private $z0039;

    /**
     * Z0040.
     *
     * @var float|null
     */
    private $z0040;

    /**
     * Z0040b.
     *
     * @var float|null
     */
    private $z0040b;

    /**
     * Z0041.
     *
     * @var float|null
     */
    private $z0041;

    /**
     * z0044.
     *
     * @var float|null
     */
    private $z0044;

    /**
     * z0044b.
     *
     * @var float|null
     */
    private $z0044b;

    /**
     * z0045.
     *
     * @var float|null
     */
    private $z0045;

    /**
     * z0046.
     *
     * @var float|null
     */
    private $z0046;

    /**
     * z0059b.
     *
     * @var float|null
     */
    private $z0059b;

    /**
     * Z01.
     *
     * @var float|null
     */
    private $z01;

    /**
     * Z0100.
     *
     * @var float|null
     */
    private $z0100;

    /**
     * Z0100b.
     *
     * @var float|null
     */
    private $z0100b;

    /**
     * z0121.
     *
     * @var float|null
     */
    private $z0121;

    /**
     * Z0121b.
     *
     * @var float|null
     */
    private $z0121b;

    /**
     * z0151.
     *
     * @var float|null
     */
    private $z0151;

    /**
     * z0151b.
     *
     * @var float|null
     */
    private $z0151b;

    /**
     * Z02.
     *
     * @var float|null
     */
    private $z02;

    /**
     * Z0200.
     *
     * @var float|null
     */
    private $z0200;

    /**
     * Z0200b.
     *
     * @var float|null
     */
    private $z0200b;

    /**
     * Z0205.
     *
     * @var float|null
     */
    private $z0205;

    /**
     * Z0205b.
     *
     * @var float|null
     */
    private $z0205b;

    /**
     * z0207.
     *
     * @var float|null
     */
    private $z0207;

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
     * Z0701.
     *
     * @var float|null
     */
    private $z0701;

    /**
     * Z0702.
     *
     * @var float|null
     */
    private $z0702;

    /**
     * Z0702b.
     *
     * @var float|null
     */
    private $z0702b;

    /**
     * Z0703.
     *
     * @var float|null
     */
    private $z0703;

    /**
     * Z0703b.
     *
     * @var float|null
     */
    private $z0703b;

    /**
     * Z0705.
     *
     * @var float|null
     */
    private $z0705;

    /**
     * z0709.
     *
     * @var float|null
     */
    private $z0709;

    /**
     * Z0900.
     *
     * @var float|null
     */
    private $z0900;

    /**
     * Z0900b.
     *
     * @var float|null
     */
    private $z0900b;

    /**
     * Z0920.
     *
     * @var float|null
     */
    private $z0920;

    /**
     * Z0920b.
     *
     * @var float|null
     */
    private $z0920b;

    /**
     * Z0950.
     *
     * @var float|null
     */
    private $z0950;

    /**
     * Z0950b.
     *
     * @var float|null
     */
    private $z0950b;

    /**
     * Z12 code.
     *
     * @var string|null
     */
    private $z12Code;

    /**
     * z12 ht.
     *
     * @var float|null
     */
    private $z12Ht;

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
     * Z18.
     *
     * @var float|null
     */
    private $z18;

    /**
     * Z196.
     *
     * @var float|null
     */
    private $z196;

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
     * Z8003c.
     *
     * @var float|null
     */
    private $z8003c;

    /**
     * Z8005.
     *
     * @var float|null
     */
    private $z8005;

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
     * z9b code.
     *
     * @var string|null
     */
    private $z9bCode;

    /**
     * z9b ht.
     *
     * @var float|null
     */
    private $z9bHt;

    /**
     * z9b lib.
     *
     * @var string|null
     */
    private $z9bLib;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a corres1.
     *
     * @return string|null Returns the a corres1.
     */
    public function getACorres1(): ?string {
        return $this->aCorres1;
    }

    /**
     * Get the a corres2.
     *
     * @return string|null Returns the a corres2.
     */
    public function getACorres2(): ?string {
        return $this->aCorres2;
    }

    /**
     * Get the a corres3.
     *
     * @return string|null Returns the a corres3.
     */
    public function getACorres3(): ?string {
        return $this->aCorres3;
    }

    /**
     * Get the a corres4.
     *
     * @return string|null Returns the a corres4.
     */
    public function getACorres4(): ?string {
        return $this->aCorres4;
    }

    /**
     * Get the a corres5.
     *
     * @return string|null Returns the a corres5.
     */
    public function getACorres5(): ?string {
        return $this->aCorres5;
    }

    /**
     * Get the a corres6.
     *
     * @return string|null Returns the a corres6.
     */
    public function getACorres6(): ?string {
        return $this->aCorres6;
    }

    /**
     * Get the a corres7.
     *
     * @return string|null Returns the a corres7.
     */
    public function getACorres7(): ?string {
        return $this->aCorres7;
    }

    /**
     * Get the a corres8.
     *
     * @return string|null Returns the a corres8.
     */
    public function getACorres8(): ?string {
        return $this->aCorres8;
    }

    /**
     * Get the az0990.
     *
     * @return float|null Returns the az0990.
     */
    public function getAz0990(): ?float {
        return $this->az0990;
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
     * Get the az1010.
     *
     * @return float|null Returns the az1010.
     */
    public function getAz1010(): ?float {
        return $this->az1010;
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
     * Get the az1020.
     *
     * @return float|null Returns the az1020.
     */
    public function getAz1020(): ?float {
        return $this->az1020;
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
     * Get the az1030.
     *
     * @return float|null Returns the az1030.
     */
    public function getAz1030(): ?float {
        return $this->az1030;
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
     * Get the az1040.
     *
     * @return float|null Returns the az1040.
     */
    public function getAz1040(): ?float {
        return $this->az1040;
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
     * Get the az1050.
     *
     * @return float|null Returns the az1050.
     */
    public function getAz1050(): ?float {
        return $this->az1050;
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
     * Get the az1080.
     *
     * @return float|null Returns the az1080.
     */
    public function getAz1080(): ?float {
        return $this->az1080;
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
     * Get the az1081.
     *
     * @return float|null Returns the az1081.
     */
    public function getAz1081(): ?float {
        return $this->az1081;
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
     * Get the az1090.
     *
     * @return float|null Returns the az1090.
     */
    public function getAz1090(): ?float {
        return $this->az1090;
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
     * Get the az1100.
     *
     * @return float|null Returns the az1100.
     */
    public function getAz1100(): ?float {
        return $this->az1100;
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
     * Get the az1110.
     *
     * @return float|null Returns the az1110.
     */
    public function getAz1110(): ?float {
        return $this->az1110;
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
     * Get the az1120.
     *
     * @return float|null Returns the az1120.
     */
    public function getAz1120(): ?float {
        return $this->az1120;
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
     * Get the az3260.
     *
     * @return float|null Returns the az3260.
     */
    public function getAz3260(): ?float {
        return $this->az3260;
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
     * Get the az38ht.
     *
     * @return float|null Returns the az38ht.
     */
    public function getAz38ht(): ?float {
        return $this->az38ht;
    }

    /**
     * Get the az3910.
     *
     * @return float|null Returns the az3910.
     */
    public function getAz3910(): ?float {
        return $this->az3910;
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
     * Get the az4208.
     *
     * @return float|null Returns the az4208.
     */
    public function getAz4208(): ?float {
        return $this->az4208;
    }

    /**
     * Get the az4209.
     *
     * @return float|null Returns the az4209.
     */
    public function getAz4209(): ?float {
        return $this->az4209;
    }

    /**
     * Get the az4210.
     *
     * @return float|null Returns the az4210.
     */
    public function getAz4210(): ?float {
        return $this->az4210;
    }

    /**
     * Get the az4211.
     *
     * @return float|null Returns the az4211.
     */
    public function getAz4211(): ?float {
        return $this->az4211;
    }

    /**
     * Get the az4212.
     *
     * @return float|null Returns the az4212.
     */
    public function getAz4212(): ?float {
        return $this->az4212;
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
     * Get the az4224.
     *
     * @return float|null Returns the az4224.
     */
    public function getAz4224(): ?float {
        return $this->az4224;
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
     * Get the az50 code.
     *
     * @return string|null Returns the az50 code.
     */
    public function getAz50Code(): ?string {
        return $this->az50Code;
    }

    /**
     * Get the az50 lib.
     *
     * @return string|null Returns the az50 lib.
     */
    public function getAz50Lib(): ?string {
        return $this->az50Lib;
    }

    /**
     * Get the az50 mtt.
     *
     * @return float|null Returns the az50 mtt.
     */
    public function getAz50Mtt(): ?float {
        return $this->az50Mtt;
    }

    /**
     * Get the az59 code.
     *
     * @return string|null Returns the az59 code.
     */
    public function getAz59Code(): ?string {
        return $this->az59Code;
    }

    /**
     * Get the az59 lib.
     *
     * @return string|null Returns the az59 lib.
     */
    public function getAz59Lib(): ?string {
        return $this->az59Lib;
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
     * Get the az en code.
     *
     * @return string|null Returns the az en code.
     */
    public function getAzEnCode(): ?string {
        return $this->azEnCode;
    }

    /**
     * Get the az en lib.
     *
     * @return string|null Returns the az en lib.
     */
    public function getAzEnLib(): ?string {
        return $this->azEnLib;
    }

    /**
     * Get the az es code.
     *
     * @return string|null Returns the az es code.
     */
    public function getAzEsCode(): ?string {
        return $this->azEsCode;
    }

    /**
     * Get the az es lib.
     *
     * @return string|null Returns the az es lib.
     */
    public function getAzEsLib(): ?string {
        return $this->azEsLib;
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
     * Get the az eu code.
     *
     * @return string|null Returns the az eu code.
     */
    public function getAzEuCode(): ?string {
        return $this->azEuCode;
    }

    /**
     * Get the az eu lib.
     *
     * @return string|null Returns the az eu lib.
     */
    public function getAzEuLib(): ?string {
        return $this->azEuLib;
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
     * Get the az ex code.
     *
     * @return string|null Returns the az ex code.
     */
    public function getAzExCode(): ?string {
        return $this->azExCode;
    }

    /**
     * Get the az ex lib.
     *
     * @return string|null Returns the az ex lib.
     */
    public function getAzExLib(): ?string {
        return $this->azExLib;
    }

    /**
     * Get the az ex mtt.
     *
     * @return float|null Returns the az ex mtt.
     */
    public function getAzExMtt(): ?float {
        return $this->azExMtt;
    }

    /**
     * Get the az ey code.
     *
     * @return string|null Returns the az ey code.
     */
    public function getAzEyCode(): ?string {
        return $this->azEyCode;
    }

    /**
     * Get the az ey lib.
     *
     * @return string|null Returns the az ey lib.
     */
    public function getAzEyLib(): ?string {
        return $this->azEyLib;
    }

    /**
     * Get the az ey mtt.
     *
     * @return float|null Returns the az ey mtt.
     */
    public function getAzEyMtt(): ?float {
        return $this->azEyMtt;
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
     * Get the az gc code.
     *
     * @return string|null Returns the az gc code.
     */
    public function getAzGcCode(): ?string {
        return $this->azGcCode;
    }

    /**
     * Get the az gc lib.
     *
     * @return string|null Returns the az gc lib.
     */
    public function getAzGcLib(): ?string {
        return $this->azGcLib;
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
     * Get the az hl.
     *
     * @return float|null Returns the az hl.
     */
    public function getAzHl(): ?float {
        return $this->azHl;
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
     * Get the az ligne4 mtt.
     *
     * @return float|null Returns the az ligne4 mtt.
     */
    public function getAzLigne4Mtt(): ?float {
        return $this->azLigne4Mtt;
    }

    /**
     * Get the az ligne5 mtt.
     *
     * @return float|null Returns the az ligne5 mtt.
     */
    public function getAzLigne5Mtt(): ?float {
        return $this->azLigne5Mtt;
    }

    /**
     * Get the ca12 mois cloture.
     *
     * @return int|null Returns the ca12 mois cloture.
     */
    public function getCa12MoisCloture(): ?int {
        return $this->ca12MoisCloture;
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
     * Get the corres6.
     *
     * @return string|null Returns the corres6.
     */
    public function getCorres6(): ?string {
        return $this->corres6;
    }

    /**
     * Get the corres7.
     *
     * @return string|null Returns the corres7.
     */
    public function getCorres7(): ?string {
        return $this->corres7;
    }

    /**
     * Get the corres8.
     *
     * @return string|null Returns the corres8.
     */
    public function getCorres8(): ?string {
        return $this->corres8;
    }

    /**
     * Get the credit compte.
     *
     * @return bool|null Returns the credit compte.
     */
    public function getCreditCompte(): ?bool {
        return $this->creditCompte;
    }

    /**
     * Get the credit imputer.
     *
     * @return bool|null Returns the credit imputer.
     */
    public function getCreditImputer(): ?bool {
        return $this->creditImputer;
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
     * Get the flg ac.
     *
     * @return bool|null Returns the flg ac.
     */
    public function getFlgAc(): ?bool {
        return $this->flgAc;
    }

    /**
     * Get the gen auto.
     *
     * @return bool|null Returns the gen auto.
     */
    public function getGenAuto(): ?bool {
        return $this->genAuto;
    }

    /**
     * Get the ht taux196.
     *
     * @return float|null Returns the ht taux196.
     */
    public function getHtTaux196(): ?float {
        return $this->htTaux196;
    }

    /**
     * Get the ht taux7.
     *
     * @return float|null Returns the ht taux7.
     */
    public function getHtTaux7(): ?float {
        return $this->htTaux7;
    }

    /**
     * Get the liqui taxes1.
     *
     * @return string|null Returns the liqui taxes1.
     */
    public function getLiquiTaxes1(): ?string {
        return $this->liquiTaxes1;
    }

    /**
     * Get the liqui taxes2.
     *
     * @return string|null Returns the liqui taxes2.
     */
    public function getLiquiTaxes2(): ?string {
        return $this->liquiTaxes2;
    }

    /**
     * Get the liqui taxes3.
     *
     * @return string|null Returns the liqui taxes3.
     */
    public function getLiquiTaxes3(): ?string {
        return $this->liquiTaxes3;
    }

    /**
     * Get the liqui taxes4.
     *
     * @return string|null Returns the liqui taxes4.
     */
    public function getLiquiTaxes4(): ?string {
        return $this->liquiTaxes4;
    }

    /**
     * Get the liqui taxes5.
     *
     * @return string|null Returns the liqui taxes5.
     */
    public function getLiquiTaxes5(): ?string {
        return $this->liquiTaxes5;
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
     * Get the monnaie.
     *
     * @return string|null Returns the monnaie.
     */
    public function getMonnaie(): ?string {
        return $this->monnaie;
    }

    /**
     * Get the monnaie tenue.
     *
     * @return string|null Returns the monnaie tenue.
     */
    public function getMonnaieTenue(): ?string {
        return $this->monnaieTenue;
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
     * Get the p cent.
     *
     * @return float|null Returns the p cent.
     */
    public function getPCent(): ?float {
        return $this->pCent;
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
     * Get the report acp.
     *
     * @return float|null Returns the report acp.
     */
    public function getReportAcp(): ?float {
        return $this->reportAcp;
    }

    /**
     * Get the rib titulaire1.
     *
     * @return string|null Returns the rib titulaire1.
     */
    public function getRibTitulaire1(): ?string {
        return $this->ribTitulaire1;
    }

    /**
     * Get the rib titulaire2.
     *
     * @return string|null Returns the rib titulaire2.
     */
    public function getRibTitulaire2(): ?string {
        return $this->ribTitulaire2;
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
     * Get the type reglement.
     *
     * @return int|null Returns the type reglement.
     */
    public function getTypeReglement(): ?int {
        return $this->typeReglement;
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
     * Get the z0031.
     *
     * @return float|null Returns the z0031.
     */
    public function getZ0031(): ?float {
        return $this->z0031;
    }

    /**
     * Get the z0031b.
     *
     * @return float|null Returns the z0031b.
     */
    public function getZ0031b(): ?float {
        return $this->z0031b;
    }

    /**
     * Get the z0032.
     *
     * @return float|null Returns the z0032.
     */
    public function getZ0032(): ?float {
        return $this->z0032;
    }

    /**
     * Get the z0033.
     *
     * @return float|null Returns the z0033.
     */
    public function getZ0033(): ?float {
        return $this->z0033;
    }

    /**
     * Get the z0034.
     *
     * @return float|null Returns the z0034.
     */
    public function getZ0034(): ?float {
        return $this->z0034;
    }

    /**
     * Get the z0035.
     *
     * @return float|null Returns the z0035.
     */
    public function getZ0035(): ?float {
        return $this->z0035;
    }

    /**
     * Get the z0037.
     *
     * @return float|null Returns the z0037.
     */
    public function getZ0037(): ?float {
        return $this->z0037;
    }

    /**
     * Get the z0038.
     *
     * @return float|null Returns the z0038.
     */
    public function getZ0038(): ?float {
        return $this->z0038;
    }

    /**
     * Get the z0040.
     *
     * @return float|null Returns the z0040.
     */
    public function getZ0040(): ?float {
        return $this->z0040;
    }

    /**
     * Get the z0040b.
     *
     * @return float|null Returns the z0040b.
     */
    public function getZ0040b(): ?float {
        return $this->z0040b;
    }

    /**
     * Get the z0041.
     *
     * @return float|null Returns the z0041.
     */
    public function getZ0041(): ?float {
        return $this->z0041;
    }

    /**
     * Get the z01.
     *
     * @return float|null Returns the z01.
     */
    public function getZ01(): ?float {
        return $this->z01;
    }

    /**
     * Get the z0100.
     *
     * @return float|null Returns the z0100.
     */
    public function getZ0100(): ?float {
        return $this->z0100;
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
     * Get the z02.
     *
     * @return float|null Returns the z02.
     */
    public function getZ02(): ?float {
        return $this->z02;
    }

    /**
     * Get the z0200.
     *
     * @return float|null Returns the z0200.
     */
    public function getZ0200(): ?float {
        return $this->z0200;
    }

    /**
     * Get the z0200b.
     *
     * @return float|null Returns the z0200b.
     */
    public function getZ0200b(): ?float {
        return $this->z0200b;
    }

    /**
     * Get the z0205.
     *
     * @return float|null Returns the z0205.
     */
    public function getZ0205(): ?float {
        return $this->z0205;
    }

    /**
     * Get the z0205b.
     *
     * @return float|null Returns the z0205b.
     */
    public function getZ0205b(): ?float {
        return $this->z0205b;
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
     * Get the z0701.
     *
     * @return float|null Returns the z0701.
     */
    public function getZ0701(): ?float {
        return $this->z0701;
    }

    /**
     * Get the z0702.
     *
     * @return float|null Returns the z0702.
     */
    public function getZ0702(): ?float {
        return $this->z0702;
    }

    /**
     * Get the z0702b.
     *
     * @return float|null Returns the z0702b.
     */
    public function getZ0702b(): ?float {
        return $this->z0702b;
    }

    /**
     * Get the z0703.
     *
     * @return float|null Returns the z0703.
     */
    public function getZ0703(): ?float {
        return $this->z0703;
    }

    /**
     * Get the z0703b.
     *
     * @return float|null Returns the z0703b.
     */
    public function getZ0703b(): ?float {
        return $this->z0703b;
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
     * Get the z0900.
     *
     * @return float|null Returns the z0900.
     */
    public function getZ0900(): ?float {
        return $this->z0900;
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
     * Get the z0920.
     *
     * @return float|null Returns the z0920.
     */
    public function getZ0920(): ?float {
        return $this->z0920;
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
     * Get the z0950.
     *
     * @return float|null Returns the z0950.
     */
    public function getZ0950(): ?float {
        return $this->z0950;
    }

    /**
     * Get the z0950b.
     *
     * @return float|null Returns the z0950b.
     */
    public function getZ0950b(): ?float {
        return $this->z0950b;
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
     * Get the z18.
     *
     * @return float|null Returns the z18.
     */
    public function getZ18(): ?float {
        return $this->z18;
    }

    /**
     * Get the z196.
     *
     * @return float|null Returns the z196.
     */
    public function getZ196(): ?float {
        return $this->z196;
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
     * Get the z8003c.
     *
     * @return float|null Returns the z8003c.
     */
    public function getZ8003c(): ?float {
        return $this->z8003c;
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
     * Get the b groupe.
     *
     * @return bool|null Returns the b groupe.
     */
    public function getbGroupe(): ?bool {
        return $this->bGroupe;
    }

    /**
     * Get the z0029.
     *
     * @return float|null Returns the z0029.
     */
    public function getz0029(): ?float {
        return $this->z0029;
    }

    /**
     * Get the z0030.
     *
     * @return float|null Returns the z0030.
     */
    public function getz0030(): ?float {
        return $this->z0030;
    }

    /**
     * Get the z0036.
     *
     * @return float|null Returns the z0036.
     */
    public function getz0036(): ?float {
        return $this->z0036;
    }

    /**
     * Get the z0039.
     *
     * @return float|null Returns the z0039.
     */
    public function getz0039(): ?float {
        return $this->z0039;
    }

    /**
     * Get the z0044.
     *
     * @return float|null Returns the z0044.
     */
    public function getz0044(): ?float {
        return $this->z0044;
    }

    /**
     * Get the z0044b.
     *
     * @return float|null Returns the z0044b.
     */
    public function getz0044b(): ?float {
        return $this->z0044b;
    }

    /**
     * Get the z0045.
     *
     * @return float|null Returns the z0045.
     */
    public function getz0045(): ?float {
        return $this->z0045;
    }

    /**
     * Get the z0046.
     *
     * @return float|null Returns the z0046.
     */
    public function getz0046(): ?float {
        return $this->z0046;
    }

    /**
     * Get the z0059b.
     *
     * @return float|null Returns the z0059b.
     */
    public function getz0059b(): ?float {
        return $this->z0059b;
    }

    /**
     * Get the z0121.
     *
     * @return float|null Returns the z0121.
     */
    public function getz0121(): ?float {
        return $this->z0121;
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
     * Get the z0151b.
     *
     * @return float|null Returns the z0151b.
     */
    public function getz0151b(): ?float {
        return $this->z0151b;
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
     * Get the z0207b.
     *
     * @return float|null Returns the z0207b.
     */
    public function getz0207b(): ?float {
        return $this->z0207b;
    }

    /**
     * Get the z0709.
     *
     * @return float|null Returns the z0709.
     */
    public function getz0709(): ?float {
        return $this->z0709;
    }

    /**
     * Get the z12 ht.
     *
     * @return float|null Returns the z12 ht.
     */
    public function getz12Ht(): ?float {
        return $this->z12Ht;
    }

    /**
     * Get the z9b code.
     *
     * @return string|null Returns the z9b code.
     */
    public function getz9bCode(): ?string {
        return $this->z9bCode;
    }

    /**
     * Get the z9b ht.
     *
     * @return float|null Returns the z9b ht.
     */
    public function getz9bHt(): ?float {
        return $this->z9bHt;
    }

    /**
     * Get the z9b lib.
     *
     * @return string|null Returns the z9b lib.
     */
    public function getz9bLib(): ?string {
        return $this->z9bLib;
    }

    /**
     * Set the a corres1.
     *
     * @param string|null $aCorres1 The a corres1.
     * @return DecTva Returns this Dec tva.
     */
    public function setACorres1(?string $aCorres1): DecTva {
        $this->aCorres1 = $aCorres1;
        return $this;
    }

    /**
     * Set the a corres2.
     *
     * @param string|null $aCorres2 The a corres2.
     * @return DecTva Returns this Dec tva.
     */
    public function setACorres2(?string $aCorres2): DecTva {
        $this->aCorres2 = $aCorres2;
        return $this;
    }

    /**
     * Set the a corres3.
     *
     * @param string|null $aCorres3 The a corres3.
     * @return DecTva Returns this Dec tva.
     */
    public function setACorres3(?string $aCorres3): DecTva {
        $this->aCorres3 = $aCorres3;
        return $this;
    }

    /**
     * Set the a corres4.
     *
     * @param string|null $aCorres4 The a corres4.
     * @return DecTva Returns this Dec tva.
     */
    public function setACorres4(?string $aCorres4): DecTva {
        $this->aCorres4 = $aCorres4;
        return $this;
    }

    /**
     * Set the a corres5.
     *
     * @param string|null $aCorres5 The a corres5.
     * @return DecTva Returns this Dec tva.
     */
    public function setACorres5(?string $aCorres5): DecTva {
        $this->aCorres5 = $aCorres5;
        return $this;
    }

    /**
     * Set the a corres6.
     *
     * @param string|null $aCorres6 The a corres6.
     * @return DecTva Returns this Dec tva.
     */
    public function setACorres6(?string $aCorres6): DecTva {
        $this->aCorres6 = $aCorres6;
        return $this;
    }

    /**
     * Set the a corres7.
     *
     * @param string|null $aCorres7 The a corres7.
     * @return DecTva Returns this Dec tva.
     */
    public function setACorres7(?string $aCorres7): DecTva {
        $this->aCorres7 = $aCorres7;
        return $this;
    }

    /**
     * Set the a corres8.
     *
     * @param string|null $aCorres8 The a corres8.
     * @return DecTva Returns this Dec tva.
     */
    public function setACorres8(?string $aCorres8): DecTva {
        $this->aCorres8 = $aCorres8;
        return $this;
    }

    /**
     * Set the az0990.
     *
     * @param float|null $az0990 The az0990.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz0990(?float $az0990): DecTva {
        $this->az0990 = $az0990;
        return $this;
    }

    /**
     * Set the az0990b.
     *
     * @param float|null $az0990b The az0990b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz0990b(?float $az0990b): DecTva {
        $this->az0990b = $az0990b;
        return $this;
    }

    /**
     * Set the az1010.
     *
     * @param float|null $az1010 The az1010.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1010(?float $az1010): DecTva {
        $this->az1010 = $az1010;
        return $this;
    }

    /**
     * Set the az1010b.
     *
     * @param float|null $az1010b The az1010b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1010b(?float $az1010b): DecTva {
        $this->az1010b = $az1010b;
        return $this;
    }

    /**
     * Set the az1020.
     *
     * @param float|null $az1020 The az1020.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1020(?float $az1020): DecTva {
        $this->az1020 = $az1020;
        return $this;
    }

    /**
     * Set the az1020b.
     *
     * @param float|null $az1020b The az1020b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1020b(?float $az1020b): DecTva {
        $this->az1020b = $az1020b;
        return $this;
    }

    /**
     * Set the az1030.
     *
     * @param float|null $az1030 The az1030.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1030(?float $az1030): DecTva {
        $this->az1030 = $az1030;
        return $this;
    }

    /**
     * Set the az1030b.
     *
     * @param float|null $az1030b The az1030b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1030b(?float $az1030b): DecTva {
        $this->az1030b = $az1030b;
        return $this;
    }

    /**
     * Set the az1040.
     *
     * @param float|null $az1040 The az1040.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1040(?float $az1040): DecTva {
        $this->az1040 = $az1040;
        return $this;
    }

    /**
     * Set the az1040b.
     *
     * @param float|null $az1040b The az1040b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1040b(?float $az1040b): DecTva {
        $this->az1040b = $az1040b;
        return $this;
    }

    /**
     * Set the az1050.
     *
     * @param float|null $az1050 The az1050.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1050(?float $az1050): DecTva {
        $this->az1050 = $az1050;
        return $this;
    }

    /**
     * Set the az1050b.
     *
     * @param float|null $az1050b The az1050b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1050b(?float $az1050b): DecTva {
        $this->az1050b = $az1050b;
        return $this;
    }

    /**
     * Set the az1080.
     *
     * @param float|null $az1080 The az1080.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1080(?float $az1080): DecTva {
        $this->az1080 = $az1080;
        return $this;
    }

    /**
     * Set the az1080b.
     *
     * @param float|null $az1080b The az1080b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1080b(?float $az1080b): DecTva {
        $this->az1080b = $az1080b;
        return $this;
    }

    /**
     * Set the az1081.
     *
     * @param float|null $az1081 The az1081.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1081(?float $az1081): DecTva {
        $this->az1081 = $az1081;
        return $this;
    }

    /**
     * Set the az1081b.
     *
     * @param float|null $az1081b The az1081b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1081b(?float $az1081b): DecTva {
        $this->az1081b = $az1081b;
        return $this;
    }

    /**
     * Set the az1090.
     *
     * @param float|null $az1090 The az1090.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1090(?float $az1090): DecTva {
        $this->az1090 = $az1090;
        return $this;
    }

    /**
     * Set the az1090b.
     *
     * @param float|null $az1090b The az1090b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1090b(?float $az1090b): DecTva {
        $this->az1090b = $az1090b;
        return $this;
    }

    /**
     * Set the az1100.
     *
     * @param float|null $az1100 The az1100.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1100(?float $az1100): DecTva {
        $this->az1100 = $az1100;
        return $this;
    }

    /**
     * Set the az1100b.
     *
     * @param float|null $az1100b The az1100b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1100b(?float $az1100b): DecTva {
        $this->az1100b = $az1100b;
        return $this;
    }

    /**
     * Set the az1110.
     *
     * @param float|null $az1110 The az1110.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1110(?float $az1110): DecTva {
        $this->az1110 = $az1110;
        return $this;
    }

    /**
     * Set the az1110b.
     *
     * @param float|null $az1110b The az1110b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1110b(?float $az1110b): DecTva {
        $this->az1110b = $az1110b;
        return $this;
    }

    /**
     * Set the az1120.
     *
     * @param float|null $az1120 The az1120.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1120(?float $az1120): DecTva {
        $this->az1120 = $az1120;
        return $this;
    }

    /**
     * Set the az1120b.
     *
     * @param float|null $az1120b The az1120b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz1120b(?float $az1120b): DecTva {
        $this->az1120b = $az1120b;
        return $this;
    }

    /**
     * Set the az3240.
     *
     * @param float|null $az3240 The az3240.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz3240(?float $az3240): DecTva {
        $this->az3240 = $az3240;
        return $this;
    }

    /**
     * Set the az3260.
     *
     * @param float|null $az3260 The az3260.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz3260(?float $az3260): DecTva {
        $this->az3260 = $az3260;
        return $this;
    }

    /**
     * Set the az3510.
     *
     * @param float|null $az3510 The az3510.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz3510(?float $az3510): DecTva {
        $this->az3510 = $az3510;
        return $this;
    }

    /**
     * Set the az3520.
     *
     * @param float|null $az3520 The az3520.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz3520(?float $az3520): DecTva {
        $this->az3520 = $az3520;
        return $this;
    }

    /**
     * Set the az38 code.
     *
     * @param string|null $az38Code The az38 code.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz38Code(?string $az38Code): DecTva {
        $this->az38Code = $az38Code;
        return $this;
    }

    /**
     * Set the az38 lib.
     *
     * @param string|null $az38Lib The az38 lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz38Lib(?string $az38Lib): DecTva {
        $this->az38Lib = $az38Lib;
        return $this;
    }

    /**
     * Set the az38b.
     *
     * @param float|null $az38b The az38b.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz38b(?float $az38b): DecTva {
        $this->az38b = $az38b;
        return $this;
    }

    /**
     * Set the az38ht.
     *
     * @param float|null $az38ht The az38ht.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz38ht(?float $az38ht): DecTva {
        $this->az38ht = $az38ht;
        return $this;
    }

    /**
     * Set the az3910.
     *
     * @param float|null $az3910 The az3910.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz3910(?float $az3910): DecTva {
        $this->az3910 = $az3910;
        return $this;
    }

    /**
     * Set the az4200.
     *
     * @param float|null $az4200 The az4200.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4200(?float $az4200): DecTva {
        $this->az4200 = $az4200;
        return $this;
    }

    /**
     * Set the az4201.
     *
     * @param float|null $az4201 The az4201.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4201(?float $az4201): DecTva {
        $this->az4201 = $az4201;
        return $this;
    }

    /**
     * Set the az4204.
     *
     * @param float|null $az4204 The az4204.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4204(?float $az4204): DecTva {
        $this->az4204 = $az4204;
        return $this;
    }

    /**
     * Set the az4206.
     *
     * @param float|null $az4206 The az4206.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4206(?float $az4206): DecTva {
        $this->az4206 = $az4206;
        return $this;
    }

    /**
     * Set the az4207.
     *
     * @param float|null $az4207 The az4207.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4207(?float $az4207): DecTva {
        $this->az4207 = $az4207;
        return $this;
    }

    /**
     * Set the az4208.
     *
     * @param float|null $az4208 The az4208.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4208(?float $az4208): DecTva {
        $this->az4208 = $az4208;
        return $this;
    }

    /**
     * Set the az4209.
     *
     * @param float|null $az4209 The az4209.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4209(?float $az4209): DecTva {
        $this->az4209 = $az4209;
        return $this;
    }

    /**
     * Set the az4210.
     *
     * @param float|null $az4210 The az4210.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4210(?float $az4210): DecTva {
        $this->az4210 = $az4210;
        return $this;
    }

    /**
     * Set the az4211.
     *
     * @param float|null $az4211 The az4211.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4211(?float $az4211): DecTva {
        $this->az4211 = $az4211;
        return $this;
    }

    /**
     * Set the az4212.
     *
     * @param float|null $az4212 The az4212.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4212(?float $az4212): DecTva {
        $this->az4212 = $az4212;
        return $this;
    }

    /**
     * Set the az4213.
     *
     * @param float|null $az4213 The az4213.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4213(?float $az4213): DecTva {
        $this->az4213 = $az4213;
        return $this;
    }

    /**
     * Set the az4215.
     *
     * @param float|null $az4215 The az4215.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4215(?float $az4215): DecTva {
        $this->az4215 = $az4215;
        return $this;
    }

    /**
     * Set the az4220.
     *
     * @param float|null $az4220 The az4220.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4220(?float $az4220): DecTva {
        $this->az4220 = $az4220;
        return $this;
    }

    /**
     * Set the az4222.
     *
     * @param float|null $az4222 The az4222.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4222(?float $az4222): DecTva {
        $this->az4222 = $az4222;
        return $this;
    }

    /**
     * Set the az4223.
     *
     * @param float|null $az4223 The az4223.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4223(?float $az4223): DecTva {
        $this->az4223 = $az4223;
        return $this;
    }

    /**
     * Set the az4224.
     *
     * @param float|null $az4224 The az4224.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4224(?float $az4224): DecTva {
        $this->az4224 = $az4224;
        return $this;
    }

    /**
     * Set the az4228 mtt.
     *
     * @param float|null $az4228Mtt The az4228 mtt.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4228Mtt(?float $az4228Mtt): DecTva {
        $this->az4228Mtt = $az4228Mtt;
        return $this;
    }

    /**
     * Set the az4230.
     *
     * @param float|null $az4230 The az4230.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4230(?float $az4230): DecTva {
        $this->az4230 = $az4230;
        return $this;
    }

    /**
     * Set the az4231.
     *
     * @param float|null $az4231 The az4231.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4231(?float $az4231): DecTva {
        $this->az4231 = $az4231;
        return $this;
    }

    /**
     * Set the az4232.
     *
     * @param float|null $az4232 The az4232.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4232(?float $az4232): DecTva {
        $this->az4232 = $az4232;
        return $this;
    }

    /**
     * Set the az4233.
     *
     * @param float|null $az4233 The az4233.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4233(?float $az4233): DecTva {
        $this->az4233 = $az4233;
        return $this;
    }

    /**
     * Set the az4234.
     *
     * @param float|null $az4234 The az4234.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4234(?float $az4234): DecTva {
        $this->az4234 = $az4234;
        return $this;
    }

    /**
     * Set the az4235.
     *
     * @param float|null $az4235 The az4235.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4235(?float $az4235): DecTva {
        $this->az4235 = $az4235;
        return $this;
    }

    /**
     * Set the az4236.
     *
     * @param float|null $az4236 The az4236.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4236(?float $az4236): DecTva {
        $this->az4236 = $az4236;
        return $this;
    }

    /**
     * Set the az4237.
     *
     * @param float|null $az4237 The az4237.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4237(?float $az4237): DecTva {
        $this->az4237 = $az4237;
        return $this;
    }

    /**
     * Set the az4238.
     *
     * @param float|null $az4238 The az4238.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4238(?float $az4238): DecTva {
        $this->az4238 = $az4238;
        return $this;
    }

    /**
     * Set the az4239.
     *
     * @param float|null $az4239 The az4239.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4239(?float $az4239): DecTva {
        $this->az4239 = $az4239;
        return $this;
    }

    /**
     * Set the az4240.
     *
     * @param float|null $az4240 The az4240.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4240(?float $az4240): DecTva {
        $this->az4240 = $az4240;
        return $this;
    }

    /**
     * Set the az4241.
     *
     * @param float|null $az4241 The az4241.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4241(?float $az4241): DecTva {
        $this->az4241 = $az4241;
        return $this;
    }

    /**
     * Set the az4242.
     *
     * @param float|null $az4242 The az4242.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4242(?float $az4242): DecTva {
        $this->az4242 = $az4242;
        return $this;
    }

    /**
     * Set the az4243.
     *
     * @param float|null $az4243 The az4243.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4243(?float $az4243): DecTva {
        $this->az4243 = $az4243;
        return $this;
    }

    /**
     * Set the az4244.
     *
     * @param float|null $az4244 The az4244.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4244(?float $az4244): DecTva {
        $this->az4244 = $az4244;
        return $this;
    }

    /**
     * Set the az4245.
     *
     * @param float|null $az4245 The az4245.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4245(?float $az4245): DecTva {
        $this->az4245 = $az4245;
        return $this;
    }

    /**
     * Set the az4246.
     *
     * @param float|null $az4246 The az4246.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4246(?float $az4246): DecTva {
        $this->az4246 = $az4246;
        return $this;
    }

    /**
     * Set the az4247.
     *
     * @param float|null $az4247 The az4247.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4247(?float $az4247): DecTva {
        $this->az4247 = $az4247;
        return $this;
    }

    /**
     * Set the az4248.
     *
     * @param float|null $az4248 The az4248.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4248(?float $az4248): DecTva {
        $this->az4248 = $az4248;
        return $this;
    }

    /**
     * Set the az4249.
     *
     * @param float|null $az4249 The az4249.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4249(?float $az4249): DecTva {
        $this->az4249 = $az4249;
        return $this;
    }

    /**
     * Set the az4250.
     *
     * @param float|null $az4250 The az4250.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4250(?float $az4250): DecTva {
        $this->az4250 = $az4250;
        return $this;
    }

    /**
     * Set the az4251.
     *
     * @param float|null $az4251 The az4251.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4251(?float $az4251): DecTva {
        $this->az4251 = $az4251;
        return $this;
    }

    /**
     * Set the az4252.
     *
     * @param float|null $az4252 The az4252.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4252(?float $az4252): DecTva {
        $this->az4252 = $az4252;
        return $this;
    }

    /**
     * Set the az4254.
     *
     * @param float|null $az4254 The az4254.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4254(?float $az4254): DecTva {
        $this->az4254 = $az4254;
        return $this;
    }

    /**
     * Set the az4255.
     *
     * @param float|null $az4255 The az4255.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4255(?float $az4255): DecTva {
        $this->az4255 = $az4255;
        return $this;
    }

    /**
     * Set the az4256.
     *
     * @param float|null $az4256 The az4256.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4256(?float $az4256): DecTva {
        $this->az4256 = $az4256;
        return $this;
    }

    /**
     * Set the az4257.
     *
     * @param float|null $az4257 The az4257.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4257(?float $az4257): DecTva {
        $this->az4257 = $az4257;
        return $this;
    }

    /**
     * Set the az4258.
     *
     * @param float|null $az4258 The az4258.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4258(?float $az4258): DecTva {
        $this->az4258 = $az4258;
        return $this;
    }

    /**
     * Set the az4259.
     *
     * @param float|null $az4259 The az4259.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4259(?float $az4259): DecTva {
        $this->az4259 = $az4259;
        return $this;
    }

    /**
     * Set the az4260.
     *
     * @param float|null $az4260 The az4260.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4260(?float $az4260): DecTva {
        $this->az4260 = $az4260;
        return $this;
    }

    /**
     * Set the az4261.
     *
     * @param float|null $az4261 The az4261.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4261(?float $az4261): DecTva {
        $this->az4261 = $az4261;
        return $this;
    }

    /**
     * Set the az4262.
     *
     * @param float|null $az4262 The az4262.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4262(?float $az4262): DecTva {
        $this->az4262 = $az4262;
        return $this;
    }

    /**
     * Set the az4263.
     *
     * @param float|null $az4263 The az4263.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4263(?float $az4263): DecTva {
        $this->az4263 = $az4263;
        return $this;
    }

    /**
     * Set the az4264.
     *
     * @param float|null $az4264 The az4264.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4264(?float $az4264): DecTva {
        $this->az4264 = $az4264;
        return $this;
    }

    /**
     * Set the az4265.
     *
     * @param float|null $az4265 The az4265.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4265(?float $az4265): DecTva {
        $this->az4265 = $az4265;
        return $this;
    }

    /**
     * Set the az4266.
     *
     * @param float|null $az4266 The az4266.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4266(?float $az4266): DecTva {
        $this->az4266 = $az4266;
        return $this;
    }

    /**
     * Set the az4267.
     *
     * @param float|null $az4267 The az4267.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4267(?float $az4267): DecTva {
        $this->az4267 = $az4267;
        return $this;
    }

    /**
     * Set the az4268.
     *
     * @param float|null $az4268 The az4268.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4268(?float $az4268): DecTva {
        $this->az4268 = $az4268;
        return $this;
    }

    /**
     * Set the az4268 base.
     *
     * @param float|null $az4268Base The az4268 base.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4268Base(?float $az4268Base): DecTva {
        $this->az4268Base = $az4268Base;
        return $this;
    }

    /**
     * Set the az4269.
     *
     * @param float|null $az4269 The az4269.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4269(?float $az4269): DecTva {
        $this->az4269 = $az4269;
        return $this;
    }

    /**
     * Set the az4269 base.
     *
     * @param float|null $az4269Base The az4269 base.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4269Base(?float $az4269Base): DecTva {
        $this->az4269Base = $az4269Base;
        return $this;
    }

    /**
     * Set the az4270.
     *
     * @param float|null $az4270 The az4270.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4270(?float $az4270): DecTva {
        $this->az4270 = $az4270;
        return $this;
    }

    /**
     * Set the az4270 base.
     *
     * @param float|null $az4270Base The az4270 base.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4270Base(?float $az4270Base): DecTva {
        $this->az4270Base = $az4270Base;
        return $this;
    }

    /**
     * Set the az4271.
     *
     * @param float|null $az4271 The az4271.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4271(?float $az4271): DecTva {
        $this->az4271 = $az4271;
        return $this;
    }

    /**
     * Set the az4271 base.
     *
     * @param float|null $az4271Base The az4271 base.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4271Base(?float $az4271Base): DecTva {
        $this->az4271Base = $az4271Base;
        return $this;
    }

    /**
     * Set the az4272.
     *
     * @param float|null $az4272 The az4272.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4272(?float $az4272): DecTva {
        $this->az4272 = $az4272;
        return $this;
    }

    /**
     * Set the az4274.
     *
     * @param float|null $az4274 The az4274.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4274(?float $az4274): DecTva {
        $this->az4274 = $az4274;
        return $this;
    }

    /**
     * Set the az4276.
     *
     * @param float|null $az4276 The az4276.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4276(?float $az4276): DecTva {
        $this->az4276 = $az4276;
        return $this;
    }

    /**
     * Set the az4276 base.
     *
     * @param float|null $az4276Base The az4276 base.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4276Base(?float $az4276Base): DecTva {
        $this->az4276Base = $az4276Base;
        return $this;
    }

    /**
     * Set the az4277.
     *
     * @param float|null $az4277 The az4277.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4277(?float $az4277): DecTva {
        $this->az4277 = $az4277;
        return $this;
    }

    /**
     * Set the az4277 base.
     *
     * @param float|null $az4277Base The az4277 base.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz4277Base(?float $az4277Base): DecTva {
        $this->az4277Base = $az4277Base;
        return $this;
    }

    /**
     * Set the az50 code.
     *
     * @param string|null $az50Code The az50 code.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz50Code(?string $az50Code): DecTva {
        $this->az50Code = $az50Code;
        return $this;
    }

    /**
     * Set the az50 lib.
     *
     * @param string|null $az50Lib The az50 lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz50Lib(?string $az50Lib): DecTva {
        $this->az50Lib = $az50Lib;
        return $this;
    }

    /**
     * Set the az50 mtt.
     *
     * @param float|null $az50Mtt The az50 mtt.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz50Mtt(?float $az50Mtt): DecTva {
        $this->az50Mtt = $az50Mtt;
        return $this;
    }

    /**
     * Set the az59 code.
     *
     * @param string|null $az59Code The az59 code.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz59Code(?string $az59Code): DecTva {
        $this->az59Code = $az59Code;
        return $this;
    }

    /**
     * Set the az59 lib.
     *
     * @param string|null $az59Lib The az59 lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz59Lib(?string $az59Lib): DecTva {
        $this->az59Lib = $az59Lib;
        return $this;
    }

    /**
     * Set the az59 mtt.
     *
     * @param float|null $az59Mtt The az59 mtt.
     * @return DecTva Returns this Dec tva.
     */
    public function setAz59Mtt(?float $az59Mtt): DecTva {
        $this->az59Mtt = $az59Mtt;
        return $this;
    }

    /**
     * Set the az en code.
     *
     * @param string|null $azEnCode The az en code.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEnCode(?string $azEnCode): DecTva {
        $this->azEnCode = $azEnCode;
        return $this;
    }

    /**
     * Set the az en lib.
     *
     * @param string|null $azEnLib The az en lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEnLib(?string $azEnLib): DecTva {
        $this->azEnLib = $azEnLib;
        return $this;
    }

    /**
     * Set the az es code.
     *
     * @param string|null $azEsCode The az es code.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEsCode(?string $azEsCode): DecTva {
        $this->azEsCode = $azEsCode;
        return $this;
    }

    /**
     * Set the az es lib.
     *
     * @param string|null $azEsLib The az es lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEsLib(?string $azEsLib): DecTva {
        $this->azEsLib = $azEsLib;
        return $this;
    }

    /**
     * Set the az es mtt.
     *
     * @param float|null $azEsMtt The az es mtt.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEsMtt(?float $azEsMtt): DecTva {
        $this->azEsMtt = $azEsMtt;
        return $this;
    }

    /**
     * Set the az eu code.
     *
     * @param string|null $azEuCode The az eu code.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEuCode(?string $azEuCode): DecTva {
        $this->azEuCode = $azEuCode;
        return $this;
    }

    /**
     * Set the az eu lib.
     *
     * @param string|null $azEuLib The az eu lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEuLib(?string $azEuLib): DecTva {
        $this->azEuLib = $azEuLib;
        return $this;
    }

    /**
     * Set the az eu mtt.
     *
     * @param float|null $azEuMtt The az eu mtt.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEuMtt(?float $azEuMtt): DecTva {
        $this->azEuMtt = $azEuMtt;
        return $this;
    }

    /**
     * Set the az ex code.
     *
     * @param string|null $azExCode The az ex code.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzExCode(?string $azExCode): DecTva {
        $this->azExCode = $azExCode;
        return $this;
    }

    /**
     * Set the az ex lib.
     *
     * @param string|null $azExLib The az ex lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzExLib(?string $azExLib): DecTva {
        $this->azExLib = $azExLib;
        return $this;
    }

    /**
     * Set the az ex mtt.
     *
     * @param float|null $azExMtt The az ex mtt.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzExMtt(?float $azExMtt): DecTva {
        $this->azExMtt = $azExMtt;
        return $this;
    }

    /**
     * Set the az ey code.
     *
     * @param string|null $azEyCode The az ey code.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEyCode(?string $azEyCode): DecTva {
        $this->azEyCode = $azEyCode;
        return $this;
    }

    /**
     * Set the az ey lib.
     *
     * @param string|null $azEyLib The az ey lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEyLib(?string $azEyLib): DecTva {
        $this->azEyLib = $azEyLib;
        return $this;
    }

    /**
     * Set the az ey mtt.
     *
     * @param float|null $azEyMtt The az ey mtt.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEyMtt(?float $azEyMtt): DecTva {
        $this->azEyMtt = $azEyMtt;
        return $this;
    }

    /**
     * Set the az ez code.
     *
     * @param string|null $azEzCode The az ez code.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEzCode(?string $azEzCode): DecTva {
        $this->azEzCode = $azEzCode;
        return $this;
    }

    /**
     * Set the az ez lib.
     *
     * @param string|null $azEzLib The az ez lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEzLib(?string $azEzLib): DecTva {
        $this->azEzLib = $azEzLib;
        return $this;
    }

    /**
     * Set the az ez mtt.
     *
     * @param float|null $azEzMtt The az ez mtt.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzEzMtt(?float $azEzMtt): DecTva {
        $this->azEzMtt = $azEzMtt;
        return $this;
    }

    /**
     * Set the az ga code.
     *
     * @param string|null $azGaCode The az ga code.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzGaCode(?string $azGaCode): DecTva {
        $this->azGaCode = $azGaCode;
        return $this;
    }

    /**
     * Set the az ga lib.
     *
     * @param string|null $azGaLib The az ga lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzGaLib(?string $azGaLib): DecTva {
        $this->azGaLib = $azGaLib;
        return $this;
    }

    /**
     * Set the az ga mtt.
     *
     * @param float|null $azGaMtt The az ga mtt.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzGaMtt(?float $azGaMtt): DecTva {
        $this->azGaMtt = $azGaMtt;
        return $this;
    }

    /**
     * Set the az gc code.
     *
     * @param string|null $azGcCode The az gc code.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzGcCode(?string $azGcCode): DecTva {
        $this->azGcCode = $azGcCode;
        return $this;
    }

    /**
     * Set the az gc lib.
     *
     * @param string|null $azGcLib The az gc lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzGcLib(?string $azGcLib): DecTva {
        $this->azGcLib = $azGcLib;
        return $this;
    }

    /**
     * Set the az gc mtt.
     *
     * @param float|null $azGcMtt The az gc mtt.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzGcMtt(?float $azGcMtt): DecTva {
        $this->azGcMtt = $azGcMtt;
        return $this;
    }

    /**
     * Set the az hi.
     *
     * @param float|null $azHi The az hi.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzHi(?float $azHi): DecTva {
        $this->azHi = $azHi;
        return $this;
    }

    /**
     * Set the az hl.
     *
     * @param float|null $azHl The az hl.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzHl(?float $azHl): DecTva {
        $this->azHl = $azHl;
        return $this;
    }

    /**
     * Set the az jb.
     *
     * @param float|null $azJb The az jb.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzJb(?float $azJb): DecTva {
        $this->azJb = $azJb;
        return $this;
    }

    /**
     * Set the az jc.
     *
     * @param float|null $azJc The az jc.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzJc(?float $azJc): DecTva {
        $this->azJc = $azJc;
        return $this;
    }

    /**
     * Set the az ligne4 mtt.
     *
     * @param float|null $azLigne4Mtt The az ligne4 mtt.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzLigne4Mtt(?float $azLigne4Mtt): DecTva {
        $this->azLigne4Mtt = $azLigne4Mtt;
        return $this;
    }

    /**
     * Set the az ligne5 mtt.
     *
     * @param float|null $azLigne5Mtt The az ligne5 mtt.
     * @return DecTva Returns this Dec tva.
     */
    public function setAzLigne5Mtt(?float $azLigne5Mtt): DecTva {
        $this->azLigne5Mtt = $azLigne5Mtt;
        return $this;
    }

    /**
     * Set the ca12 mois cloture.
     *
     * @param int|null $ca12MoisCloture The ca12 mois cloture.
     * @return DecTva Returns this Dec tva.
     */
    public function setCa12MoisCloture(?int $ca12MoisCloture): DecTva {
        $this->ca12MoisCloture = $ca12MoisCloture;
        return $this;
    }

    /**
     * Set the corres1.
     *
     * @param string|null $corres1 The corres1.
     * @return DecTva Returns this Dec tva.
     */
    public function setCorres1(?string $corres1): DecTva {
        $this->corres1 = $corres1;
        return $this;
    }

    /**
     * Set the corres2.
     *
     * @param string|null $corres2 The corres2.
     * @return DecTva Returns this Dec tva.
     */
    public function setCorres2(?string $corres2): DecTva {
        $this->corres2 = $corres2;
        return $this;
    }

    /**
     * Set the corres3.
     *
     * @param string|null $corres3 The corres3.
     * @return DecTva Returns this Dec tva.
     */
    public function setCorres3(?string $corres3): DecTva {
        $this->corres3 = $corres3;
        return $this;
    }

    /**
     * Set the corres4.
     *
     * @param string|null $corres4 The corres4.
     * @return DecTva Returns this Dec tva.
     */
    public function setCorres4(?string $corres4): DecTva {
        $this->corres4 = $corres4;
        return $this;
    }

    /**
     * Set the corres5.
     *
     * @param string|null $corres5 The corres5.
     * @return DecTva Returns this Dec tva.
     */
    public function setCorres5(?string $corres5): DecTva {
        $this->corres5 = $corres5;
        return $this;
    }

    /**
     * Set the corres6.
     *
     * @param string|null $corres6 The corres6.
     * @return DecTva Returns this Dec tva.
     */
    public function setCorres6(?string $corres6): DecTva {
        $this->corres6 = $corres6;
        return $this;
    }

    /**
     * Set the corres7.
     *
     * @param string|null $corres7 The corres7.
     * @return DecTva Returns this Dec tva.
     */
    public function setCorres7(?string $corres7): DecTva {
        $this->corres7 = $corres7;
        return $this;
    }

    /**
     * Set the corres8.
     *
     * @param string|null $corres8 The corres8.
     * @return DecTva Returns this Dec tva.
     */
    public function setCorres8(?string $corres8): DecTva {
        $this->corres8 = $corres8;
        return $this;
    }

    /**
     * Set the credit compte.
     *
     * @param bool|null $creditCompte The credit compte.
     * @return DecTva Returns this Dec tva.
     */
    public function setCreditCompte(?bool $creditCompte): DecTva {
        $this->creditCompte = $creditCompte;
        return $this;
    }

    /**
     * Set the credit imputer.
     *
     * @param bool|null $creditImputer The credit imputer.
     * @return DecTva Returns this Dec tva.
     */
    public function setCreditImputer(?bool $creditImputer): DecTva {
        $this->creditImputer = $creditImputer;
        return $this;
    }

    /**
     * Set the date dec.
     *
     * @param string|null $dateDec The date dec.
     * @return DecTva Returns this Dec tva.
     */
    public function setDateDec(?string $dateDec): DecTva {
        $this->dateDec = $dateDec;
        return $this;
    }

    /**
     * Set the flg ac.
     *
     * @param bool|null $flgAc The flg ac.
     * @return DecTva Returns this Dec tva.
     */
    public function setFlgAc(?bool $flgAc): DecTva {
        $this->flgAc = $flgAc;
        return $this;
    }

    /**
     * Set the gen auto.
     *
     * @param bool|null $genAuto The gen auto.
     * @return DecTva Returns this Dec tva.
     */
    public function setGenAuto(?bool $genAuto): DecTva {
        $this->genAuto = $genAuto;
        return $this;
    }

    /**
     * Set the ht taux196.
     *
     * @param float|null $htTaux196 The ht taux196.
     * @return DecTva Returns this Dec tva.
     */
    public function setHtTaux196(?float $htTaux196): DecTva {
        $this->htTaux196 = $htTaux196;
        return $this;
    }

    /**
     * Set the ht taux7.
     *
     * @param float|null $htTaux7 The ht taux7.
     * @return DecTva Returns this Dec tva.
     */
    public function setHtTaux7(?float $htTaux7): DecTva {
        $this->htTaux7 = $htTaux7;
        return $this;
    }

    /**
     * Set the liqui taxes1.
     *
     * @param string|null $liquiTaxes1 The liqui taxes1.
     * @return DecTva Returns this Dec tva.
     */
    public function setLiquiTaxes1(?string $liquiTaxes1): DecTva {
        $this->liquiTaxes1 = $liquiTaxes1;
        return $this;
    }

    /**
     * Set the liqui taxes2.
     *
     * @param string|null $liquiTaxes2 The liqui taxes2.
     * @return DecTva Returns this Dec tva.
     */
    public function setLiquiTaxes2(?string $liquiTaxes2): DecTva {
        $this->liquiTaxes2 = $liquiTaxes2;
        return $this;
    }

    /**
     * Set the liqui taxes3.
     *
     * @param string|null $liquiTaxes3 The liqui taxes3.
     * @return DecTva Returns this Dec tva.
     */
    public function setLiquiTaxes3(?string $liquiTaxes3): DecTva {
        $this->liquiTaxes3 = $liquiTaxes3;
        return $this;
    }

    /**
     * Set the liqui taxes4.
     *
     * @param string|null $liquiTaxes4 The liqui taxes4.
     * @return DecTva Returns this Dec tva.
     */
    public function setLiquiTaxes4(?string $liquiTaxes4): DecTva {
        $this->liquiTaxes4 = $liquiTaxes4;
        return $this;
    }

    /**
     * Set the liqui taxes5.
     *
     * @param string|null $liquiTaxes5 The liqui taxes5.
     * @return DecTva Returns this Dec tva.
     */
    public function setLiquiTaxes5(?string $liquiTaxes5): DecTva {
        $this->liquiTaxes5 = $liquiTaxes5;
        return $this;
    }

    /**
     * Set the mention expresse.
     *
     * @param bool|null $mentionExpresse The mention expresse.
     * @return DecTva Returns this Dec tva.
     */
    public function setMentionExpresse(?bool $mentionExpresse): DecTva {
        $this->mentionExpresse = $mentionExpresse;
        return $this;
    }

    /**
     * Set the monnaie.
     *
     * @param string|null $monnaie The monnaie.
     * @return DecTva Returns this Dec tva.
     */
    public function setMonnaie(?string $monnaie): DecTva {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the monnaie tenue.
     *
     * @param string|null $monnaieTenue The monnaie tenue.
     * @return DecTva Returns this Dec tva.
     */
    public function setMonnaieTenue(?string $monnaieTenue): DecTva {
        $this->monnaieTenue = $monnaieTenue;
        return $this;
    }

    /**
     * Set the no lot ecritures.
     *
     * @param int|null $noLotEcritures The no lot ecritures.
     * @return DecTva Returns this Dec tva.
     */
    public function setNoLotEcritures(?int $noLotEcritures): DecTva {
        $this->noLotEcritures = $noLotEcritures;
        return $this;
    }

    /**
     * Set the p cent.
     *
     * @param float|null $pCent The p cent.
     * @return DecTva Returns this Dec tva.
     */
    public function setPCent(?float $pCent): DecTva {
        $this->pCent = $pCent;
        return $this;
    }

    /**
     * Set the paiement imputation.
     *
     * @param bool|null $paiementImputation The paiement imputation.
     * @return DecTva Returns this Dec tva.
     */
    public function setPaiementImputation(?bool $paiementImputation): DecTva {
        $this->paiementImputation = $paiementImputation;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return DecTva Returns this Dec tva.
     */
    public function setPeriode(?DateTime $periode): DecTva {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the report acp.
     *
     * @param float|null $reportAcp The report acp.
     * @return DecTva Returns this Dec tva.
     */
    public function setReportAcp(?float $reportAcp): DecTva {
        $this->reportAcp = $reportAcp;
        return $this;
    }

    /**
     * Set the rib titulaire1.
     *
     * @param string|null $ribTitulaire1 The rib titulaire1.
     * @return DecTva Returns this Dec tva.
     */
    public function setRibTitulaire1(?string $ribTitulaire1): DecTva {
        $this->ribTitulaire1 = $ribTitulaire1;
        return $this;
    }

    /**
     * Set the rib titulaire2.
     *
     * @param string|null $ribTitulaire2 The rib titulaire2.
     * @return DecTva Returns this Dec tva.
     */
    public function setRibTitulaire2(?string $ribTitulaire2): DecTva {
        $this->ribTitulaire2 = $ribTitulaire2;
        return $this;
    }

    /**
     * Set the sel adresse dest.
     *
     * @param string|null $selAdresseDest The sel adresse dest.
     * @return DecTva Returns this Dec tva.
     */
    public function setSelAdresseDest(?string $selAdresseDest): DecTva {
        $this->selAdresseDest = $selAdresseDest;
        return $this;
    }

    /**
     * Set the total.
     *
     * @param float|null $total The total.
     * @return DecTva Returns this Dec tva.
     */
    public function setTotal(?float $total): DecTva {
        $this->total = $total;
        return $this;
    }

    /**
     * Set the type reglement.
     *
     * @param int|null $typeReglement The type reglement.
     * @return DecTva Returns this Dec tva.
     */
    public function setTypeReglement(?int $typeReglement): DecTva {
        $this->typeReglement = $typeReglement;
        return $this;
    }

    /**
     * Set the ville.
     *
     * @param string|null $ville The ville.
     * @return DecTva Returns this Dec tva.
     */
    public function setVille(?string $ville): DecTva {
        $this->ville = $ville;
        return $this;
    }

    /**
     * Set the z0031.
     *
     * @param float|null $z0031 The z0031.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0031(?float $z0031): DecTva {
        $this->z0031 = $z0031;
        return $this;
    }

    /**
     * Set the z0031b.
     *
     * @param float|null $z0031b The z0031b.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0031b(?float $z0031b): DecTva {
        $this->z0031b = $z0031b;
        return $this;
    }

    /**
     * Set the z0032.
     *
     * @param float|null $z0032 The z0032.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0032(?float $z0032): DecTva {
        $this->z0032 = $z0032;
        return $this;
    }

    /**
     * Set the z0033.
     *
     * @param float|null $z0033 The z0033.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0033(?float $z0033): DecTva {
        $this->z0033 = $z0033;
        return $this;
    }

    /**
     * Set the z0034.
     *
     * @param float|null $z0034 The z0034.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0034(?float $z0034): DecTva {
        $this->z0034 = $z0034;
        return $this;
    }

    /**
     * Set the z0035.
     *
     * @param float|null $z0035 The z0035.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0035(?float $z0035): DecTva {
        $this->z0035 = $z0035;
        return $this;
    }

    /**
     * Set the z0037.
     *
     * @param float|null $z0037 The z0037.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0037(?float $z0037): DecTva {
        $this->z0037 = $z0037;
        return $this;
    }

    /**
     * Set the z0038.
     *
     * @param float|null $z0038 The z0038.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0038(?float $z0038): DecTva {
        $this->z0038 = $z0038;
        return $this;
    }

    /**
     * Set the z0040.
     *
     * @param float|null $z0040 The z0040.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0040(?float $z0040): DecTva {
        $this->z0040 = $z0040;
        return $this;
    }

    /**
     * Set the z0040b.
     *
     * @param float|null $z0040b The z0040b.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0040b(?float $z0040b): DecTva {
        $this->z0040b = $z0040b;
        return $this;
    }

    /**
     * Set the z0041.
     *
     * @param float|null $z0041 The z0041.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0041(?float $z0041): DecTva {
        $this->z0041 = $z0041;
        return $this;
    }

    /**
     * Set the z01.
     *
     * @param float|null $z01 The z01.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ01(?float $z01): DecTva {
        $this->z01 = $z01;
        return $this;
    }

    /**
     * Set the z0100.
     *
     * @param float|null $z0100 The z0100.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0100(?float $z0100): DecTva {
        $this->z0100 = $z0100;
        return $this;
    }

    /**
     * Set the z0100b.
     *
     * @param float|null $z0100b The z0100b.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0100b(?float $z0100b): DecTva {
        $this->z0100b = $z0100b;
        return $this;
    }

    /**
     * Set the z0121b.
     *
     * @param float|null $z0121b The z0121b.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0121b(?float $z0121b): DecTva {
        $this->z0121b = $z0121b;
        return $this;
    }

    /**
     * Set the z02.
     *
     * @param float|null $z02 The z02.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ02(?float $z02): DecTva {
        $this->z02 = $z02;
        return $this;
    }

    /**
     * Set the z0200.
     *
     * @param float|null $z0200 The z0200.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0200(?float $z0200): DecTva {
        $this->z0200 = $z0200;
        return $this;
    }

    /**
     * Set the z0200b.
     *
     * @param float|null $z0200b The z0200b.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0200b(?float $z0200b): DecTva {
        $this->z0200b = $z0200b;
        return $this;
    }

    /**
     * Set the z0205.
     *
     * @param float|null $z0205 The z0205.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0205(?float $z0205): DecTva {
        $this->z0205 = $z0205;
        return $this;
    }

    /**
     * Set the z0205b.
     *
     * @param float|null $z0205b The z0205b.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0205b(?float $z0205b): DecTva {
        $this->z0205b = $z0205b;
        return $this;
    }

    /**
     * Set the z0600.
     *
     * @param float|null $z0600 The z0600.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0600(?float $z0600): DecTva {
        $this->z0600 = $z0600;
        return $this;
    }

    /**
     * Set the z0701.
     *
     * @param float|null $z0701 The z0701.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0701(?float $z0701): DecTva {
        $this->z0701 = $z0701;
        return $this;
    }

    /**
     * Set the z0702.
     *
     * @param float|null $z0702 The z0702.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0702(?float $z0702): DecTva {
        $this->z0702 = $z0702;
        return $this;
    }

    /**
     * Set the z0702b.
     *
     * @param float|null $z0702b The z0702b.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0702b(?float $z0702b): DecTva {
        $this->z0702b = $z0702b;
        return $this;
    }

    /**
     * Set the z0703.
     *
     * @param float|null $z0703 The z0703.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0703(?float $z0703): DecTva {
        $this->z0703 = $z0703;
        return $this;
    }

    /**
     * Set the z0703b.
     *
     * @param float|null $z0703b The z0703b.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0703b(?float $z0703b): DecTva {
        $this->z0703b = $z0703b;
        return $this;
    }

    /**
     * Set the z0705.
     *
     * @param float|null $z0705 The z0705.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0705(?float $z0705): DecTva {
        $this->z0705 = $z0705;
        return $this;
    }

    /**
     * Set the z0900.
     *
     * @param float|null $z0900 The z0900.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0900(?float $z0900): DecTva {
        $this->z0900 = $z0900;
        return $this;
    }

    /**
     * Set the z0900b.
     *
     * @param float|null $z0900b The z0900b.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0900b(?float $z0900b): DecTva {
        $this->z0900b = $z0900b;
        return $this;
    }

    /**
     * Set the z0920.
     *
     * @param float|null $z0920 The z0920.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0920(?float $z0920): DecTva {
        $this->z0920 = $z0920;
        return $this;
    }

    /**
     * Set the z0920b.
     *
     * @param float|null $z0920b The z0920b.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0920b(?float $z0920b): DecTva {
        $this->z0920b = $z0920b;
        return $this;
    }

    /**
     * Set the z0950.
     *
     * @param float|null $z0950 The z0950.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0950(?float $z0950): DecTva {
        $this->z0950 = $z0950;
        return $this;
    }

    /**
     * Set the z0950b.
     *
     * @param float|null $z0950b The z0950b.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ0950b(?float $z0950b): DecTva {
        $this->z0950b = $z0950b;
        return $this;
    }

    /**
     * Set the z12 code.
     *
     * @param string|null $z12Code The z12 code.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ12Code(?string $z12Code): DecTva {
        $this->z12Code = $z12Code;
        return $this;
    }

    /**
     * Set the z12 lib.
     *
     * @param string|null $z12Lib The z12 lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ12Lib(?string $z12Lib): DecTva {
        $this->z12Lib = $z12Lib;
        return $this;
    }

    /**
     * Set the z12 taxe.
     *
     * @param float|null $z12Taxe The z12 taxe.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ12Taxe(?float $z12Taxe): DecTva {
        $this->z12Taxe = $z12Taxe;
        return $this;
    }

    /**
     * Set the z14.
     *
     * @param float|null $z14 The z14.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ14(?float $z14): DecTva {
        $this->z14 = $z14;
        return $this;
    }

    /**
     * Set the z18.
     *
     * @param float|null $z18 The z18.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ18(?float $z18): DecTva {
        $this->z18 = $z18;
        return $this;
    }

    /**
     * Set the z196.
     *
     * @param float|null $z196 The z196.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ196(?float $z196): DecTva {
        $this->z196 = $z196;
        return $this;
    }

    /**
     * Set the z196b.
     *
     * @param float|null $z196b The z196b.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ196b(?float $z196b): DecTva {
        $this->z196b = $z196b;
        return $this;
    }

    /**
     * Set the z21.
     *
     * @param float|null $z21 The z21.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ21(?float $z21): DecTva {
        $this->z21 = $z21;
        return $this;
    }

    /**
     * Set the z25.
     *
     * @param float|null $z25 The z25.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ25(?float $z25): DecTva {
        $this->z25 = $z25;
        return $this;
    }

    /**
     * Set the z4227.
     *
     * @param float|null $z4227 The z4227.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ4227(?float $z4227): DecTva {
        $this->z4227 = $z4227;
        return $this;
    }

    /**
     * Set the z8001.
     *
     * @param float|null $z8001 The z8001.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ8001(?float $z8001): DecTva {
        $this->z8001 = $z8001;
        return $this;
    }

    /**
     * Set the z8002.
     *
     * @param float|null $z8002 The z8002.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ8002(?float $z8002): DecTva {
        $this->z8002 = $z8002;
        return $this;
    }

    /**
     * Set the z8003.
     *
     * @param float|null $z8003 The z8003.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ8003(?float $z8003): DecTva {
        $this->z8003 = $z8003;
        return $this;
    }

    /**
     * Set the z8003c.
     *
     * @param float|null $z8003c The z8003c.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ8003c(?float $z8003c): DecTva {
        $this->z8003c = $z8003c;
        return $this;
    }

    /**
     * Set the z8005.
     *
     * @param float|null $z8005 The z8005.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ8005(?float $z8005): DecTva {
        $this->z8005 = $z8005;
        return $this;
    }

    /**
     * Set the z9979.
     *
     * @param float|null $z9979 The z9979.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ9979(?float $z9979): DecTva {
        $this->z9979 = $z9979;
        return $this;
    }

    /**
     * Set the z9989.
     *
     * @param float|null $z9989 The z9989.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ9989(?float $z9989): DecTva {
        $this->z9989 = $z9989;
        return $this;
    }

    /**
     * Set the z9991.
     *
     * @param float|null $z9991 The z9991.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ9991(?float $z9991): DecTva {
        $this->z9991 = $z9991;
        return $this;
    }

    /**
     * Set the z9999.
     *
     * @param float|null $z9999 The z9999.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ9999(?float $z9999): DecTva {
        $this->z9999 = $z9999;
        return $this;
    }

    /**
     * Set the z9 b taxe.
     *
     * @param float|null $z9BTaxe The z9 b taxe.
     * @return DecTva Returns this Dec tva.
     */
    public function setZ9BTaxe(?float $z9BTaxe): DecTva {
        $this->z9BTaxe = $z9BTaxe;
        return $this;
    }

    /**
     * Set the b groupe.
     *
     * @param bool|null $bGroupe The b groupe.
     * @return DecTva Returns this Dec tva.
     */
    public function setbGroupe(?bool $bGroupe): DecTva {
        $this->bGroupe = $bGroupe;
        return $this;
    }

    /**
     * Set the z0029.
     *
     * @param float|null $z0029 The z0029.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0029(?float $z0029): DecTva {
        $this->z0029 = $z0029;
        return $this;
    }

    /**
     * Set the z0030.
     *
     * @param float|null $z0030 The z0030.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0030(?float $z0030): DecTva {
        $this->z0030 = $z0030;
        return $this;
    }

    /**
     * Set the z0036.
     *
     * @param float|null $z0036 The z0036.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0036(?float $z0036): DecTva {
        $this->z0036 = $z0036;
        return $this;
    }

    /**
     * Set the z0039.
     *
     * @param float|null $z0039 The z0039.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0039(?float $z0039): DecTva {
        $this->z0039 = $z0039;
        return $this;
    }

    /**
     * Set the z0044.
     *
     * @param float|null $z0044 The z0044.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0044(?float $z0044): DecTva {
        $this->z0044 = $z0044;
        return $this;
    }

    /**
     * Set the z0044b.
     *
     * @param float|null $z0044b The z0044b.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0044b(?float $z0044b): DecTva {
        $this->z0044b = $z0044b;
        return $this;
    }

    /**
     * Set the z0045.
     *
     * @param float|null $z0045 The z0045.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0045(?float $z0045): DecTva {
        $this->z0045 = $z0045;
        return $this;
    }

    /**
     * Set the z0046.
     *
     * @param float|null $z0046 The z0046.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0046(?float $z0046): DecTva {
        $this->z0046 = $z0046;
        return $this;
    }

    /**
     * Set the z0059b.
     *
     * @param float|null $z0059b The z0059b.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0059b(?float $z0059b): DecTva {
        $this->z0059b = $z0059b;
        return $this;
    }

    /**
     * Set the z0121.
     *
     * @param float|null $z0121 The z0121.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0121(?float $z0121): DecTva {
        $this->z0121 = $z0121;
        return $this;
    }

    /**
     * Set the z0151.
     *
     * @param float|null $z0151 The z0151.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0151(?float $z0151): DecTva {
        $this->z0151 = $z0151;
        return $this;
    }

    /**
     * Set the z0151b.
     *
     * @param float|null $z0151b The z0151b.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0151b(?float $z0151b): DecTva {
        $this->z0151b = $z0151b;
        return $this;
    }

    /**
     * Set the z0207.
     *
     * @param float|null $z0207 The z0207.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0207(?float $z0207): DecTva {
        $this->z0207 = $z0207;
        return $this;
    }

    /**
     * Set the z0207b.
     *
     * @param float|null $z0207b The z0207b.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0207b(?float $z0207b): DecTva {
        $this->z0207b = $z0207b;
        return $this;
    }

    /**
     * Set the z0709.
     *
     * @param float|null $z0709 The z0709.
     * @return DecTva Returns this Dec tva.
     */
    public function setz0709(?float $z0709): DecTva {
        $this->z0709 = $z0709;
        return $this;
    }

    /**
     * Set the z12 ht.
     *
     * @param float|null $z12Ht The z12 ht.
     * @return DecTva Returns this Dec tva.
     */
    public function setz12Ht(?float $z12Ht): DecTva {
        $this->z12Ht = $z12Ht;
        return $this;
    }

    /**
     * Set the z9b code.
     *
     * @param string|null $z9bCode The z9b code.
     * @return DecTva Returns this Dec tva.
     */
    public function setz9bCode(?string $z9bCode): DecTva {
        $this->z9bCode = $z9bCode;
        return $this;
    }

    /**
     * Set the z9b ht.
     *
     * @param float|null $z9bHt The z9b ht.
     * @return DecTva Returns this Dec tva.
     */
    public function setz9bHt(?float $z9bHt): DecTva {
        $this->z9bHt = $z9bHt;
        return $this;
    }

    /**
     * Set the z9b lib.
     *
     * @param string|null $z9bLib The z9b lib.
     * @return DecTva Returns this Dec tva.
     */
    public function setz9bLib(?string $z9bLib): DecTva {
        $this->z9bLib = $z9bLib;
        return $this;
    }
}
