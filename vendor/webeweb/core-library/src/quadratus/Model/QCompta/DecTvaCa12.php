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
 * Dec tva ca12.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class DecTvaCa12 {

    /**
     * Date cession.
     *
     * @var DateTime|null
     */
    private $dateCession;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Tx imposition.
     *
     * @var float|null
     */
    private $txImposition;

    /**
     * Type ca12.
     *
     * @var string|null
     */
    private $typeCa12;

    /**
     * z0008.
     *
     * @var float|null
     */
    private $z0008;

    /**
     * z0018.
     *
     * @var float|null
     */
    private $z0018;

    /**
     * z0019.
     *
     * @var float|null
     */
    private $z0019;

    /**
     * z0020.
     *
     * @var float|null
     */
    private $z0020;

    /**
     * z0028.
     *
     * @var float|null
     */
    private $z0028;

    /**
     * z0030b.
     *
     * @var float|null
     */
    private $z0030b;

    /**
     * z0058.
     *
     * @var float|null
     */
    private $z0058;

    /**
     * z0704.
     *
     * @var float|null
     */
    private $z0704;

    /**
     * z0709.
     *
     * @var float|null
     */
    private $z0709;

    /**
     * z0970.
     *
     * @var float|null
     */
    private $z0970;

    /**
     * z0970b.
     *
     * @var float|null
     */
    private $z0970b;

    /**
     * z0980.
     *
     * @var float|null
     */
    private $z0980;

    /**
     * z0980b.
     *
     * @var float|null
     */
    private $z0980b;

    /**
     * z0981.
     *
     * @var float|null
     */
    private $z0981;

    /**
     * z0981b.
     *
     * @var float|null
     */
    private $z0981b;

    /**
     * z0982.
     *
     * @var float|null
     */
    private $z0982;

    /**
     * z0983.
     *
     * @var float|null
     */
    private $z0983;

    /**
     * z3240.
     *
     * @var float|null
     */
    private $z3240;

    /**
     * z32 code.
     *
     * @var string|null
     */
    private $z32Code;

    /**
     * z32 libelle.
     *
     * @var string|null
     */
    private $z32Libelle;

    /**
     * z32 taxe.
     *
     * @var float|null
     */
    private $z32Taxe;

    /**
     * z35 b code.
     *
     * @var string|null
     */
    private $z35BCode;

    /**
     * z35 b libelle.
     *
     * @var string|null
     */
    private $z35BLibelle;

    /**
     * z35 b taxe.
     *
     * @var float|null
     */
    private $z35BTaxe;

    /**
     * z35 code.
     *
     * @var string|null
     */
    private $z35Code;

    /**
     * z35 libelle.
     *
     * @var string|null
     */
    private $z35Libelle;

    /**
     * z35 taxe.
     *
     * @var float|null
     */
    private $z35Taxe;

    /**
     * z4202.
     *
     * @var float|null
     */
    private $z4202;

    /**
     * z4213.
     *
     * @var float|null
     */
    private $z4213;

    /**
     * z4216.
     *
     * @var float|null
     */
    private $z4216;

    /**
     * z4217.
     *
     * @var float|null
     */
    private $z4217;

    /**
     * z4218.
     *
     * @var float|null
     */
    private $z4218;

    /**
     * z4220.
     *
     * @var float|null
     */
    private $z4220;

    /**
     * z45 ca12.
     *
     * @var float|null
     */
    private $z45Ca12;

    /**
     * z45 ca12 code.
     *
     * @var string|null
     */
    private $z45Ca12Code;

    /**
     * z45 ca12 libelle.
     *
     * @var string|null
     */
    private $z45Ca12Libelle;

    /**
     * z47 ca12.
     *
     * @var float|null
     */
    private $z47Ca12;

    /**
     * z47 ca12 code.
     *
     * @var string|null
     */
    private $z47Ca12Code;

    /**
     * z47 ca12 libelle.
     *
     * @var string|null
     */
    private $z47Ca12Libelle;

    /**
     * z4 aca12.
     *
     * @var float|null
     */
    private $z4Aca12;

    /**
     * z4 aca12 code.
     *
     * @var string|null
     */
    private $z4Aca12Code;

    /**
     * z4 aca12 libelle.
     *
     * @var string|null
     */
    private $z4Aca12Libelle;

    /**
     * z4 bca12.
     *
     * @var float|null
     */
    private $z4Bca12;

    /**
     * z4 bca12 code.
     *
     * @var string|null
     */
    private $z4Bca12Code;

    /**
     * z4 bca12 libelle.
     *
     * @var string|null
     */
    private $z4Bca12Libelle;

    /**
     * z4 cca12.
     *
     * @var float|null
     */
    private $z4Cca12;

    /**
     * z4 cca12 code.
     *
     * @var string|null
     */
    private $z4Cca12Code;

    /**
     * z4 cca12 libelle.
     *
     * @var string|null
     */
    private $z4Cca12Libelle;

    /**
     * z5b code.
     *
     * @var string|null
     */
    private $z5bCode;

    /**
     * z5b ht.
     *
     * @var float|null
     */
    private $z5bHt;

    /**
     * z5b libelle.
     *
     * @var string|null
     */
    private $z5bLibelle;

    /**
     * z5b taxe.
     *
     * @var float|null
     */
    private $z5bTaxe;

    /**
     * z7b code.
     *
     * @var string|null
     */
    private $z7bCode;

    /**
     * z7b ht.
     *
     * @var float|null
     */
    private $z7bHt;

    /**
     * z7b libelle.
     *
     * @var string|null
     */
    private $z7bLibelle;

    /**
     * z7b taxe.
     *
     * @var float|null
     */
    private $z7bTaxe;

    /**
     * z8004.
     *
     * @var float|null
     */
    private $z8004;

    /**
     * z acompte deduit1.
     *
     * @var bool|null
     */
    private $zAcompteDeduit1;

    /**
     * z acompte deduit2.
     *
     * @var bool|null
     */
    private $zAcompteDeduit2;

    /**
     * z acompte deduit3.
     *
     * @var bool|null
     */
    private $zAcompteDeduit3;

    /**
     * z acompte deduit4.
     *
     * @var bool|null
     */
    private $zAcompteDeduit4;

    /**
     * z annee acompte1.
     *
     * @var int|null
     */
    private $zAnneeAcompte1;

    /**
     * z annee acompte2.
     *
     * @var int|null
     */
    private $zAnneeAcompte2;

    /**
     * z annee acompte3.
     *
     * @var int|null
     */
    private $zAnneeAcompte3;

    /**
     * z annee acompte4.
     *
     * @var int|null
     */
    private $zAnneeAcompte4;

    /**
     * z col1 acompte1.
     *
     * @var float|null
     */
    private $zCol1Acompte1;

    /**
     * z col1 acompte2.
     *
     * @var float|null
     */
    private $zCol1Acompte2;

    /**
     * z col1 acompte3.
     *
     * @var float|null
     */
    private $zCol1Acompte3;

    /**
     * z col1 acompte4.
     *
     * @var float|null
     */
    private $zCol1Acompte4;

    /**
     * z col2 acompte1.
     *
     * @var float|null
     */
    private $zCol2Acompte1;

    /**
     * z col2 acompte2.
     *
     * @var float|null
     */
    private $zCol2Acompte2;

    /**
     * z col2 acompte3.
     *
     * @var float|null
     */
    private $zCol2Acompte3;

    /**
     * z col2 acompte4.
     *
     * @var float|null
     */
    private $zCol2Acompte4;

    /**
     * z excedent versement.
     *
     * @var float|null
     */
    private $zExcedentVersement;

    /**
     * z nom demandeur rbt.
     *
     * @var string|null
     */
    private $zNomDemandeurRbt;

    /**
     * z num msa.
     *
     * @var string|null
     */
    private $zNumMsa;

    /**
     * z rbt demande.
     *
     * @var float|null
     */
    private $zRbtDemande;

    /**
     * z rbt qualite.
     *
     * @var string|null
     */
    private $zRbtQualite;

    /**
     * z rbt ville.
     *
     * @var string|null
     */
    private $zRbtVille;

    /**
     * z rbtbic.
     *
     * @var string|null
     */
    private $zRbtbic;

    /**
     * z rbtiban.
     *
     * @var string|null
     */
    private $zRbtiban;

    /**
     * z rbtrib.
     *
     * @var string|null
     */
    private $zRbtrib;

    /**
     * z solde a payer.
     *
     * @var float|null
     */
    private $zSoldeAPayer;

    /**
     * z surface agr.
     *
     * @var int|null
     */
    private $zSurfaceAgr;

    /**
     * z taxes fiscales.
     *
     * @var float|null
     */
    private $zTaxesFiscales;

    /**
     * z ya demande rbt.
     *
     * @var bool|null
     */
    private $zYaDemandeRbt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the date cession.
     *
     * @return DateTime|null Returns the date cession.
     */
    public function getDateCession(): ?DateTime {
        return $this->dateCession;
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
     * Get the tx imposition.
     *
     * @return float|null Returns the tx imposition.
     */
    public function getTxImposition(): ?float {
        return $this->txImposition;
    }

    /**
     * Get the type ca12.
     *
     * @return string|null Returns the type ca12.
     */
    public function getTypeCa12(): ?string {
        return $this->typeCa12;
    }

    /**
     * Get the z0008.
     *
     * @return float|null Returns the z0008.
     */
    public function getz0008(): ?float {
        return $this->z0008;
    }

    /**
     * Get the z0018.
     *
     * @return float|null Returns the z0018.
     */
    public function getz0018(): ?float {
        return $this->z0018;
    }

    /**
     * Get the z0019.
     *
     * @return float|null Returns the z0019.
     */
    public function getz0019(): ?float {
        return $this->z0019;
    }

    /**
     * Get the z0020.
     *
     * @return float|null Returns the z0020.
     */
    public function getz0020(): ?float {
        return $this->z0020;
    }

    /**
     * Get the z0028.
     *
     * @return float|null Returns the z0028.
     */
    public function getz0028(): ?float {
        return $this->z0028;
    }

    /**
     * Get the z0030b.
     *
     * @return float|null Returns the z0030b.
     */
    public function getz0030b(): ?float {
        return $this->z0030b;
    }

    /**
     * Get the z0058.
     *
     * @return float|null Returns the z0058.
     */
    public function getz0058(): ?float {
        return $this->z0058;
    }

    /**
     * Get the z0704.
     *
     * @return float|null Returns the z0704.
     */
    public function getz0704(): ?float {
        return $this->z0704;
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
     * Get the z0970.
     *
     * @return float|null Returns the z0970.
     */
    public function getz0970(): ?float {
        return $this->z0970;
    }

    /**
     * Get the z0970b.
     *
     * @return float|null Returns the z0970b.
     */
    public function getz0970b(): ?float {
        return $this->z0970b;
    }

    /**
     * Get the z0980.
     *
     * @return float|null Returns the z0980.
     */
    public function getz0980(): ?float {
        return $this->z0980;
    }

    /**
     * Get the z0980b.
     *
     * @return float|null Returns the z0980b.
     */
    public function getz0980b(): ?float {
        return $this->z0980b;
    }

    /**
     * Get the z0981.
     *
     * @return float|null Returns the z0981.
     */
    public function getz0981(): ?float {
        return $this->z0981;
    }

    /**
     * Get the z0981b.
     *
     * @return float|null Returns the z0981b.
     */
    public function getz0981b(): ?float {
        return $this->z0981b;
    }

    /**
     * Get the z0982.
     *
     * @return float|null Returns the z0982.
     */
    public function getz0982(): ?float {
        return $this->z0982;
    }

    /**
     * Get the z0983.
     *
     * @return float|null Returns the z0983.
     */
    public function getz0983(): ?float {
        return $this->z0983;
    }

    /**
     * Get the z3240.
     *
     * @return float|null Returns the z3240.
     */
    public function getz3240(): ?float {
        return $this->z3240;
    }

    /**
     * Get the z32 code.
     *
     * @return string|null Returns the z32 code.
     */
    public function getz32Code(): ?string {
        return $this->z32Code;
    }

    /**
     * Get the z32 libelle.
     *
     * @return string|null Returns the z32 libelle.
     */
    public function getz32Libelle(): ?string {
        return $this->z32Libelle;
    }

    /**
     * Get the z32 taxe.
     *
     * @return float|null Returns the z32 taxe.
     */
    public function getz32Taxe(): ?float {
        return $this->z32Taxe;
    }

    /**
     * Get the z35 b code.
     *
     * @return string|null Returns the z35 b code.
     */
    public function getz35BCode(): ?string {
        return $this->z35BCode;
    }

    /**
     * Get the z35 b libelle.
     *
     * @return string|null Returns the z35 b libelle.
     */
    public function getz35BLibelle(): ?string {
        return $this->z35BLibelle;
    }

    /**
     * Get the z35 b taxe.
     *
     * @return float|null Returns the z35 b taxe.
     */
    public function getz35BTaxe(): ?float {
        return $this->z35BTaxe;
    }

    /**
     * Get the z35 code.
     *
     * @return string|null Returns the z35 code.
     */
    public function getz35Code(): ?string {
        return $this->z35Code;
    }

    /**
     * Get the z35 libelle.
     *
     * @return string|null Returns the z35 libelle.
     */
    public function getz35Libelle(): ?string {
        return $this->z35Libelle;
    }

    /**
     * Get the z35 taxe.
     *
     * @return float|null Returns the z35 taxe.
     */
    public function getz35Taxe(): ?float {
        return $this->z35Taxe;
    }

    /**
     * Get the z4202.
     *
     * @return float|null Returns the z4202.
     */
    public function getz4202(): ?float {
        return $this->z4202;
    }

    /**
     * Get the z4213.
     *
     * @return float|null Returns the z4213.
     */
    public function getz4213(): ?float {
        return $this->z4213;
    }

    /**
     * Get the z4216.
     *
     * @return float|null Returns the z4216.
     */
    public function getz4216(): ?float {
        return $this->z4216;
    }

    /**
     * Get the z4217.
     *
     * @return float|null Returns the z4217.
     */
    public function getz4217(): ?float {
        return $this->z4217;
    }

    /**
     * Get the z4218.
     *
     * @return float|null Returns the z4218.
     */
    public function getz4218(): ?float {
        return $this->z4218;
    }

    /**
     * Get the z4220.
     *
     * @return float|null Returns the z4220.
     */
    public function getz4220(): ?float {
        return $this->z4220;
    }

    /**
     * Get the z45 ca12.
     *
     * @return float|null Returns the z45 ca12.
     */
    public function getz45Ca12(): ?float {
        return $this->z45Ca12;
    }

    /**
     * Get the z45 ca12 code.
     *
     * @return string|null Returns the z45 ca12 code.
     */
    public function getz45Ca12Code(): ?string {
        return $this->z45Ca12Code;
    }

    /**
     * Get the z45 ca12 libelle.
     *
     * @return string|null Returns the z45 ca12 libelle.
     */
    public function getz45Ca12Libelle(): ?string {
        return $this->z45Ca12Libelle;
    }

    /**
     * Get the z47 ca12.
     *
     * @return float|null Returns the z47 ca12.
     */
    public function getz47Ca12(): ?float {
        return $this->z47Ca12;
    }

    /**
     * Get the z47 ca12 code.
     *
     * @return string|null Returns the z47 ca12 code.
     */
    public function getz47Ca12Code(): ?string {
        return $this->z47Ca12Code;
    }

    /**
     * Get the z47 ca12 libelle.
     *
     * @return string|null Returns the z47 ca12 libelle.
     */
    public function getz47Ca12Libelle(): ?string {
        return $this->z47Ca12Libelle;
    }

    /**
     * Get the z4 aca12.
     *
     * @return float|null Returns the z4 aca12.
     */
    public function getz4Aca12(): ?float {
        return $this->z4Aca12;
    }

    /**
     * Get the z4 aca12 code.
     *
     * @return string|null Returns the z4 aca12 code.
     */
    public function getz4Aca12Code(): ?string {
        return $this->z4Aca12Code;
    }

    /**
     * Get the z4 aca12 libelle.
     *
     * @return string|null Returns the z4 aca12 libelle.
     */
    public function getz4Aca12Libelle(): ?string {
        return $this->z4Aca12Libelle;
    }

    /**
     * Get the z4 bca12.
     *
     * @return float|null Returns the z4 bca12.
     */
    public function getz4Bca12(): ?float {
        return $this->z4Bca12;
    }

    /**
     * Get the z4 bca12 code.
     *
     * @return string|null Returns the z4 bca12 code.
     */
    public function getz4Bca12Code(): ?string {
        return $this->z4Bca12Code;
    }

    /**
     * Get the z4 bca12 libelle.
     *
     * @return string|null Returns the z4 bca12 libelle.
     */
    public function getz4Bca12Libelle(): ?string {
        return $this->z4Bca12Libelle;
    }

    /**
     * Get the z4 cca12.
     *
     * @return float|null Returns the z4 cca12.
     */
    public function getz4Cca12(): ?float {
        return $this->z4Cca12;
    }

    /**
     * Get the z4 cca12 code.
     *
     * @return string|null Returns the z4 cca12 code.
     */
    public function getz4Cca12Code(): ?string {
        return $this->z4Cca12Code;
    }

    /**
     * Get the z4 cca12 libelle.
     *
     * @return string|null Returns the z4 cca12 libelle.
     */
    public function getz4Cca12Libelle(): ?string {
        return $this->z4Cca12Libelle;
    }

    /**
     * Get the z5b code.
     *
     * @return string|null Returns the z5b code.
     */
    public function getz5bCode(): ?string {
        return $this->z5bCode;
    }

    /**
     * Get the z5b ht.
     *
     * @return float|null Returns the z5b ht.
     */
    public function getz5bHt(): ?float {
        return $this->z5bHt;
    }

    /**
     * Get the z5b libelle.
     *
     * @return string|null Returns the z5b libelle.
     */
    public function getz5bLibelle(): ?string {
        return $this->z5bLibelle;
    }

    /**
     * Get the z5b taxe.
     *
     * @return float|null Returns the z5b taxe.
     */
    public function getz5bTaxe(): ?float {
        return $this->z5bTaxe;
    }

    /**
     * Get the z7b code.
     *
     * @return string|null Returns the z7b code.
     */
    public function getz7bCode(): ?string {
        return $this->z7bCode;
    }

    /**
     * Get the z7b ht.
     *
     * @return float|null Returns the z7b ht.
     */
    public function getz7bHt(): ?float {
        return $this->z7bHt;
    }

    /**
     * Get the z7b libelle.
     *
     * @return string|null Returns the z7b libelle.
     */
    public function getz7bLibelle(): ?string {
        return $this->z7bLibelle;
    }

    /**
     * Get the z7b taxe.
     *
     * @return float|null Returns the z7b taxe.
     */
    public function getz7bTaxe(): ?float {
        return $this->z7bTaxe;
    }

    /**
     * Get the z8004.
     *
     * @return float|null Returns the z8004.
     */
    public function getz8004(): ?float {
        return $this->z8004;
    }

    /**
     * Get the z acompte deduit1.
     *
     * @return bool|null Returns the z acompte deduit1.
     */
    public function getzAcompteDeduit1(): ?bool {
        return $this->zAcompteDeduit1;
    }

    /**
     * Get the z acompte deduit2.
     *
     * @return bool|null Returns the z acompte deduit2.
     */
    public function getzAcompteDeduit2(): ?bool {
        return $this->zAcompteDeduit2;
    }

    /**
     * Get the z acompte deduit3.
     *
     * @return bool|null Returns the z acompte deduit3.
     */
    public function getzAcompteDeduit3(): ?bool {
        return $this->zAcompteDeduit3;
    }

    /**
     * Get the z acompte deduit4.
     *
     * @return bool|null Returns the z acompte deduit4.
     */
    public function getzAcompteDeduit4(): ?bool {
        return $this->zAcompteDeduit4;
    }

    /**
     * Get the z annee acompte1.
     *
     * @return int|null Returns the z annee acompte1.
     */
    public function getzAnneeAcompte1(): ?int {
        return $this->zAnneeAcompte1;
    }

    /**
     * Get the z annee acompte2.
     *
     * @return int|null Returns the z annee acompte2.
     */
    public function getzAnneeAcompte2(): ?int {
        return $this->zAnneeAcompte2;
    }

    /**
     * Get the z annee acompte3.
     *
     * @return int|null Returns the z annee acompte3.
     */
    public function getzAnneeAcompte3(): ?int {
        return $this->zAnneeAcompte3;
    }

    /**
     * Get the z annee acompte4.
     *
     * @return int|null Returns the z annee acompte4.
     */
    public function getzAnneeAcompte4(): ?int {
        return $this->zAnneeAcompte4;
    }

    /**
     * Get the z col1 acompte1.
     *
     * @return float|null Returns the z col1 acompte1.
     */
    public function getzCol1Acompte1(): ?float {
        return $this->zCol1Acompte1;
    }

    /**
     * Get the z col1 acompte2.
     *
     * @return float|null Returns the z col1 acompte2.
     */
    public function getzCol1Acompte2(): ?float {
        return $this->zCol1Acompte2;
    }

    /**
     * Get the z col1 acompte3.
     *
     * @return float|null Returns the z col1 acompte3.
     */
    public function getzCol1Acompte3(): ?float {
        return $this->zCol1Acompte3;
    }

    /**
     * Get the z col1 acompte4.
     *
     * @return float|null Returns the z col1 acompte4.
     */
    public function getzCol1Acompte4(): ?float {
        return $this->zCol1Acompte4;
    }

    /**
     * Get the z col2 acompte1.
     *
     * @return float|null Returns the z col2 acompte1.
     */
    public function getzCol2Acompte1(): ?float {
        return $this->zCol2Acompte1;
    }

    /**
     * Get the z col2 acompte2.
     *
     * @return float|null Returns the z col2 acompte2.
     */
    public function getzCol2Acompte2(): ?float {
        return $this->zCol2Acompte2;
    }

    /**
     * Get the z col2 acompte3.
     *
     * @return float|null Returns the z col2 acompte3.
     */
    public function getzCol2Acompte3(): ?float {
        return $this->zCol2Acompte3;
    }

    /**
     * Get the z col2 acompte4.
     *
     * @return float|null Returns the z col2 acompte4.
     */
    public function getzCol2Acompte4(): ?float {
        return $this->zCol2Acompte4;
    }

    /**
     * Get the z excedent versement.
     *
     * @return float|null Returns the z excedent versement.
     */
    public function getzExcedentVersement(): ?float {
        return $this->zExcedentVersement;
    }

    /**
     * Get the z nom demandeur rbt.
     *
     * @return string|null Returns the z nom demandeur rbt.
     */
    public function getzNomDemandeurRbt(): ?string {
        return $this->zNomDemandeurRbt;
    }

    /**
     * Get the z num msa.
     *
     * @return string|null Returns the z num msa.
     */
    public function getzNumMsa(): ?string {
        return $this->zNumMsa;
    }

    /**
     * Get the z rbt demande.
     *
     * @return float|null Returns the z rbt demande.
     */
    public function getzRbtDemande(): ?float {
        return $this->zRbtDemande;
    }

    /**
     * Get the z rbt qualite.
     *
     * @return string|null Returns the z rbt qualite.
     */
    public function getzRbtQualite(): ?string {
        return $this->zRbtQualite;
    }

    /**
     * Get the z rbt ville.
     *
     * @return string|null Returns the z rbt ville.
     */
    public function getzRbtVille(): ?string {
        return $this->zRbtVille;
    }

    /**
     * Get the z rbtbic.
     *
     * @return string|null Returns the z rbtbic.
     */
    public function getzRbtbic(): ?string {
        return $this->zRbtbic;
    }

    /**
     * Get the z rbtiban.
     *
     * @return string|null Returns the z rbtiban.
     */
    public function getzRbtiban(): ?string {
        return $this->zRbtiban;
    }

    /**
     * Get the z rbtrib.
     *
     * @return string|null Returns the z rbtrib.
     */
    public function getzRbtrib(): ?string {
        return $this->zRbtrib;
    }

    /**
     * Get the z solde a payer.
     *
     * @return float|null Returns the z solde a payer.
     */
    public function getzSoldeAPayer(): ?float {
        return $this->zSoldeAPayer;
    }

    /**
     * Get the z surface agr.
     *
     * @return int|null Returns the z surface agr.
     */
    public function getzSurfaceAgr(): ?int {
        return $this->zSurfaceAgr;
    }

    /**
     * Get the z taxes fiscales.
     *
     * @return float|null Returns the z taxes fiscales.
     */
    public function getzTaxesFiscales(): ?float {
        return $this->zTaxesFiscales;
    }

    /**
     * Get the z ya demande rbt.
     *
     * @return bool|null Returns the z ya demande rbt.
     */
    public function getzYaDemandeRbt(): ?bool {
        return $this->zYaDemandeRbt;
    }

    /**
     * Set the date cession.
     *
     * @param DateTime|null $dateCession The date cession.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setDateCession(?DateTime $dateCession): DecTvaCa12 {
        $this->dateCession = $dateCession;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setPeriode(?DateTime $periode): DecTvaCa12 {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the tx imposition.
     *
     * @param float|null $txImposition The tx imposition.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setTxImposition(?float $txImposition): DecTvaCa12 {
        $this->txImposition = $txImposition;
        return $this;
    }

    /**
     * Set the type ca12.
     *
     * @param string|null $typeCa12 The type ca12.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setTypeCa12(?string $typeCa12): DecTvaCa12 {
        $this->typeCa12 = $typeCa12;
        return $this;
    }

    /**
     * Set the z0008.
     *
     * @param float|null $z0008 The z0008.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0008(?float $z0008): DecTvaCa12 {
        $this->z0008 = $z0008;
        return $this;
    }

    /**
     * Set the z0018.
     *
     * @param float|null $z0018 The z0018.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0018(?float $z0018): DecTvaCa12 {
        $this->z0018 = $z0018;
        return $this;
    }

    /**
     * Set the z0019.
     *
     * @param float|null $z0019 The z0019.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0019(?float $z0019): DecTvaCa12 {
        $this->z0019 = $z0019;
        return $this;
    }

    /**
     * Set the z0020.
     *
     * @param float|null $z0020 The z0020.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0020(?float $z0020): DecTvaCa12 {
        $this->z0020 = $z0020;
        return $this;
    }

    /**
     * Set the z0028.
     *
     * @param float|null $z0028 The z0028.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0028(?float $z0028): DecTvaCa12 {
        $this->z0028 = $z0028;
        return $this;
    }

    /**
     * Set the z0030b.
     *
     * @param float|null $z0030b The z0030b.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0030b(?float $z0030b): DecTvaCa12 {
        $this->z0030b = $z0030b;
        return $this;
    }

    /**
     * Set the z0058.
     *
     * @param float|null $z0058 The z0058.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0058(?float $z0058): DecTvaCa12 {
        $this->z0058 = $z0058;
        return $this;
    }

    /**
     * Set the z0704.
     *
     * @param float|null $z0704 The z0704.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0704(?float $z0704): DecTvaCa12 {
        $this->z0704 = $z0704;
        return $this;
    }

    /**
     * Set the z0709.
     *
     * @param float|null $z0709 The z0709.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0709(?float $z0709): DecTvaCa12 {
        $this->z0709 = $z0709;
        return $this;
    }

    /**
     * Set the z0970.
     *
     * @param float|null $z0970 The z0970.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0970(?float $z0970): DecTvaCa12 {
        $this->z0970 = $z0970;
        return $this;
    }

    /**
     * Set the z0970b.
     *
     * @param float|null $z0970b The z0970b.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0970b(?float $z0970b): DecTvaCa12 {
        $this->z0970b = $z0970b;
        return $this;
    }

    /**
     * Set the z0980.
     *
     * @param float|null $z0980 The z0980.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0980(?float $z0980): DecTvaCa12 {
        $this->z0980 = $z0980;
        return $this;
    }

    /**
     * Set the z0980b.
     *
     * @param float|null $z0980b The z0980b.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0980b(?float $z0980b): DecTvaCa12 {
        $this->z0980b = $z0980b;
        return $this;
    }

    /**
     * Set the z0981.
     *
     * @param float|null $z0981 The z0981.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0981(?float $z0981): DecTvaCa12 {
        $this->z0981 = $z0981;
        return $this;
    }

    /**
     * Set the z0981b.
     *
     * @param float|null $z0981b The z0981b.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0981b(?float $z0981b): DecTvaCa12 {
        $this->z0981b = $z0981b;
        return $this;
    }

    /**
     * Set the z0982.
     *
     * @param float|null $z0982 The z0982.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0982(?float $z0982): DecTvaCa12 {
        $this->z0982 = $z0982;
        return $this;
    }

    /**
     * Set the z0983.
     *
     * @param float|null $z0983 The z0983.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz0983(?float $z0983): DecTvaCa12 {
        $this->z0983 = $z0983;
        return $this;
    }

    /**
     * Set the z3240.
     *
     * @param float|null $z3240 The z3240.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz3240(?float $z3240): DecTvaCa12 {
        $this->z3240 = $z3240;
        return $this;
    }

    /**
     * Set the z32 code.
     *
     * @param string|null $z32Code The z32 code.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz32Code(?string $z32Code): DecTvaCa12 {
        $this->z32Code = $z32Code;
        return $this;
    }

    /**
     * Set the z32 libelle.
     *
     * @param string|null $z32Libelle The z32 libelle.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz32Libelle(?string $z32Libelle): DecTvaCa12 {
        $this->z32Libelle = $z32Libelle;
        return $this;
    }

    /**
     * Set the z32 taxe.
     *
     * @param float|null $z32Taxe The z32 taxe.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz32Taxe(?float $z32Taxe): DecTvaCa12 {
        $this->z32Taxe = $z32Taxe;
        return $this;
    }

    /**
     * Set the z35 b code.
     *
     * @param string|null $z35BCode The z35 b code.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz35BCode(?string $z35BCode): DecTvaCa12 {
        $this->z35BCode = $z35BCode;
        return $this;
    }

    /**
     * Set the z35 b libelle.
     *
     * @param string|null $z35BLibelle The z35 b libelle.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz35BLibelle(?string $z35BLibelle): DecTvaCa12 {
        $this->z35BLibelle = $z35BLibelle;
        return $this;
    }

    /**
     * Set the z35 b taxe.
     *
     * @param float|null $z35BTaxe The z35 b taxe.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz35BTaxe(?float $z35BTaxe): DecTvaCa12 {
        $this->z35BTaxe = $z35BTaxe;
        return $this;
    }

    /**
     * Set the z35 code.
     *
     * @param string|null $z35Code The z35 code.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz35Code(?string $z35Code): DecTvaCa12 {
        $this->z35Code = $z35Code;
        return $this;
    }

    /**
     * Set the z35 libelle.
     *
     * @param string|null $z35Libelle The z35 libelle.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz35Libelle(?string $z35Libelle): DecTvaCa12 {
        $this->z35Libelle = $z35Libelle;
        return $this;
    }

    /**
     * Set the z35 taxe.
     *
     * @param float|null $z35Taxe The z35 taxe.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz35Taxe(?float $z35Taxe): DecTvaCa12 {
        $this->z35Taxe = $z35Taxe;
        return $this;
    }

    /**
     * Set the z4202.
     *
     * @param float|null $z4202 The z4202.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4202(?float $z4202): DecTvaCa12 {
        $this->z4202 = $z4202;
        return $this;
    }

    /**
     * Set the z4213.
     *
     * @param float|null $z4213 The z4213.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4213(?float $z4213): DecTvaCa12 {
        $this->z4213 = $z4213;
        return $this;
    }

    /**
     * Set the z4216.
     *
     * @param float|null $z4216 The z4216.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4216(?float $z4216): DecTvaCa12 {
        $this->z4216 = $z4216;
        return $this;
    }

    /**
     * Set the z4217.
     *
     * @param float|null $z4217 The z4217.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4217(?float $z4217): DecTvaCa12 {
        $this->z4217 = $z4217;
        return $this;
    }

    /**
     * Set the z4218.
     *
     * @param float|null $z4218 The z4218.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4218(?float $z4218): DecTvaCa12 {
        $this->z4218 = $z4218;
        return $this;
    }

    /**
     * Set the z4220.
     *
     * @param float|null $z4220 The z4220.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4220(?float $z4220): DecTvaCa12 {
        $this->z4220 = $z4220;
        return $this;
    }

    /**
     * Set the z45 ca12.
     *
     * @param float|null $z45Ca12 The z45 ca12.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz45Ca12(?float $z45Ca12): DecTvaCa12 {
        $this->z45Ca12 = $z45Ca12;
        return $this;
    }

    /**
     * Set the z45 ca12 code.
     *
     * @param string|null $z45Ca12Code The z45 ca12 code.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz45Ca12Code(?string $z45Ca12Code): DecTvaCa12 {
        $this->z45Ca12Code = $z45Ca12Code;
        return $this;
    }

    /**
     * Set the z45 ca12 libelle.
     *
     * @param string|null $z45Ca12Libelle The z45 ca12 libelle.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz45Ca12Libelle(?string $z45Ca12Libelle): DecTvaCa12 {
        $this->z45Ca12Libelle = $z45Ca12Libelle;
        return $this;
    }

    /**
     * Set the z47 ca12.
     *
     * @param float|null $z47Ca12 The z47 ca12.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz47Ca12(?float $z47Ca12): DecTvaCa12 {
        $this->z47Ca12 = $z47Ca12;
        return $this;
    }

    /**
     * Set the z47 ca12 code.
     *
     * @param string|null $z47Ca12Code The z47 ca12 code.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz47Ca12Code(?string $z47Ca12Code): DecTvaCa12 {
        $this->z47Ca12Code = $z47Ca12Code;
        return $this;
    }

    /**
     * Set the z47 ca12 libelle.
     *
     * @param string|null $z47Ca12Libelle The z47 ca12 libelle.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz47Ca12Libelle(?string $z47Ca12Libelle): DecTvaCa12 {
        $this->z47Ca12Libelle = $z47Ca12Libelle;
        return $this;
    }

    /**
     * Set the z4 aca12.
     *
     * @param float|null $z4Aca12 The z4 aca12.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4Aca12(?float $z4Aca12): DecTvaCa12 {
        $this->z4Aca12 = $z4Aca12;
        return $this;
    }

    /**
     * Set the z4 aca12 code.
     *
     * @param string|null $z4Aca12Code The z4 aca12 code.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4Aca12Code(?string $z4Aca12Code): DecTvaCa12 {
        $this->z4Aca12Code = $z4Aca12Code;
        return $this;
    }

    /**
     * Set the z4 aca12 libelle.
     *
     * @param string|null $z4Aca12Libelle The z4 aca12 libelle.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4Aca12Libelle(?string $z4Aca12Libelle): DecTvaCa12 {
        $this->z4Aca12Libelle = $z4Aca12Libelle;
        return $this;
    }

    /**
     * Set the z4 bca12.
     *
     * @param float|null $z4Bca12 The z4 bca12.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4Bca12(?float $z4Bca12): DecTvaCa12 {
        $this->z4Bca12 = $z4Bca12;
        return $this;
    }

    /**
     * Set the z4 bca12 code.
     *
     * @param string|null $z4Bca12Code The z4 bca12 code.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4Bca12Code(?string $z4Bca12Code): DecTvaCa12 {
        $this->z4Bca12Code = $z4Bca12Code;
        return $this;
    }

    /**
     * Set the z4 bca12 libelle.
     *
     * @param string|null $z4Bca12Libelle The z4 bca12 libelle.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4Bca12Libelle(?string $z4Bca12Libelle): DecTvaCa12 {
        $this->z4Bca12Libelle = $z4Bca12Libelle;
        return $this;
    }

    /**
     * Set the z4 cca12.
     *
     * @param float|null $z4Cca12 The z4 cca12.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4Cca12(?float $z4Cca12): DecTvaCa12 {
        $this->z4Cca12 = $z4Cca12;
        return $this;
    }

    /**
     * Set the z4 cca12 code.
     *
     * @param string|null $z4Cca12Code The z4 cca12 code.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4Cca12Code(?string $z4Cca12Code): DecTvaCa12 {
        $this->z4Cca12Code = $z4Cca12Code;
        return $this;
    }

    /**
     * Set the z4 cca12 libelle.
     *
     * @param string|null $z4Cca12Libelle The z4 cca12 libelle.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz4Cca12Libelle(?string $z4Cca12Libelle): DecTvaCa12 {
        $this->z4Cca12Libelle = $z4Cca12Libelle;
        return $this;
    }

    /**
     * Set the z5b code.
     *
     * @param string|null $z5bCode The z5b code.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz5bCode(?string $z5bCode): DecTvaCa12 {
        $this->z5bCode = $z5bCode;
        return $this;
    }

    /**
     * Set the z5b ht.
     *
     * @param float|null $z5bHt The z5b ht.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz5bHt(?float $z5bHt): DecTvaCa12 {
        $this->z5bHt = $z5bHt;
        return $this;
    }

    /**
     * Set the z5b libelle.
     *
     * @param string|null $z5bLibelle The z5b libelle.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz5bLibelle(?string $z5bLibelle): DecTvaCa12 {
        $this->z5bLibelle = $z5bLibelle;
        return $this;
    }

    /**
     * Set the z5b taxe.
     *
     * @param float|null $z5bTaxe The z5b taxe.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz5bTaxe(?float $z5bTaxe): DecTvaCa12 {
        $this->z5bTaxe = $z5bTaxe;
        return $this;
    }

    /**
     * Set the z7b code.
     *
     * @param string|null $z7bCode The z7b code.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz7bCode(?string $z7bCode): DecTvaCa12 {
        $this->z7bCode = $z7bCode;
        return $this;
    }

    /**
     * Set the z7b ht.
     *
     * @param float|null $z7bHt The z7b ht.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz7bHt(?float $z7bHt): DecTvaCa12 {
        $this->z7bHt = $z7bHt;
        return $this;
    }

    /**
     * Set the z7b libelle.
     *
     * @param string|null $z7bLibelle The z7b libelle.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz7bLibelle(?string $z7bLibelle): DecTvaCa12 {
        $this->z7bLibelle = $z7bLibelle;
        return $this;
    }

    /**
     * Set the z7b taxe.
     *
     * @param float|null $z7bTaxe The z7b taxe.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz7bTaxe(?float $z7bTaxe): DecTvaCa12 {
        $this->z7bTaxe = $z7bTaxe;
        return $this;
    }

    /**
     * Set the z8004.
     *
     * @param float|null $z8004 The z8004.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setz8004(?float $z8004): DecTvaCa12 {
        $this->z8004 = $z8004;
        return $this;
    }

    /**
     * Set the z acompte deduit1.
     *
     * @param bool|null $zAcompteDeduit1 The z acompte deduit1.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzAcompteDeduit1(?bool $zAcompteDeduit1): DecTvaCa12 {
        $this->zAcompteDeduit1 = $zAcompteDeduit1;
        return $this;
    }

    /**
     * Set the z acompte deduit2.
     *
     * @param bool|null $zAcompteDeduit2 The z acompte deduit2.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzAcompteDeduit2(?bool $zAcompteDeduit2): DecTvaCa12 {
        $this->zAcompteDeduit2 = $zAcompteDeduit2;
        return $this;
    }

    /**
     * Set the z acompte deduit3.
     *
     * @param bool|null $zAcompteDeduit3 The z acompte deduit3.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzAcompteDeduit3(?bool $zAcompteDeduit3): DecTvaCa12 {
        $this->zAcompteDeduit3 = $zAcompteDeduit3;
        return $this;
    }

    /**
     * Set the z acompte deduit4.
     *
     * @param bool|null $zAcompteDeduit4 The z acompte deduit4.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzAcompteDeduit4(?bool $zAcompteDeduit4): DecTvaCa12 {
        $this->zAcompteDeduit4 = $zAcompteDeduit4;
        return $this;
    }

    /**
     * Set the z annee acompte1.
     *
     * @param int|null $zAnneeAcompte1 The z annee acompte1.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzAnneeAcompte1(?int $zAnneeAcompte1): DecTvaCa12 {
        $this->zAnneeAcompte1 = $zAnneeAcompte1;
        return $this;
    }

    /**
     * Set the z annee acompte2.
     *
     * @param int|null $zAnneeAcompte2 The z annee acompte2.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzAnneeAcompte2(?int $zAnneeAcompte2): DecTvaCa12 {
        $this->zAnneeAcompte2 = $zAnneeAcompte2;
        return $this;
    }

    /**
     * Set the z annee acompte3.
     *
     * @param int|null $zAnneeAcompte3 The z annee acompte3.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzAnneeAcompte3(?int $zAnneeAcompte3): DecTvaCa12 {
        $this->zAnneeAcompte3 = $zAnneeAcompte3;
        return $this;
    }

    /**
     * Set the z annee acompte4.
     *
     * @param int|null $zAnneeAcompte4 The z annee acompte4.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzAnneeAcompte4(?int $zAnneeAcompte4): DecTvaCa12 {
        $this->zAnneeAcompte4 = $zAnneeAcompte4;
        return $this;
    }

    /**
     * Set the z col1 acompte1.
     *
     * @param float|null $zCol1Acompte1 The z col1 acompte1.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzCol1Acompte1(?float $zCol1Acompte1): DecTvaCa12 {
        $this->zCol1Acompte1 = $zCol1Acompte1;
        return $this;
    }

    /**
     * Set the z col1 acompte2.
     *
     * @param float|null $zCol1Acompte2 The z col1 acompte2.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzCol1Acompte2(?float $zCol1Acompte2): DecTvaCa12 {
        $this->zCol1Acompte2 = $zCol1Acompte2;
        return $this;
    }

    /**
     * Set the z col1 acompte3.
     *
     * @param float|null $zCol1Acompte3 The z col1 acompte3.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzCol1Acompte3(?float $zCol1Acompte3): DecTvaCa12 {
        $this->zCol1Acompte3 = $zCol1Acompte3;
        return $this;
    }

    /**
     * Set the z col1 acompte4.
     *
     * @param float|null $zCol1Acompte4 The z col1 acompte4.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzCol1Acompte4(?float $zCol1Acompte4): DecTvaCa12 {
        $this->zCol1Acompte4 = $zCol1Acompte4;
        return $this;
    }

    /**
     * Set the z col2 acompte1.
     *
     * @param float|null $zCol2Acompte1 The z col2 acompte1.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzCol2Acompte1(?float $zCol2Acompte1): DecTvaCa12 {
        $this->zCol2Acompte1 = $zCol2Acompte1;
        return $this;
    }

    /**
     * Set the z col2 acompte2.
     *
     * @param float|null $zCol2Acompte2 The z col2 acompte2.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzCol2Acompte2(?float $zCol2Acompte2): DecTvaCa12 {
        $this->zCol2Acompte2 = $zCol2Acompte2;
        return $this;
    }

    /**
     * Set the z col2 acompte3.
     *
     * @param float|null $zCol2Acompte3 The z col2 acompte3.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzCol2Acompte3(?float $zCol2Acompte3): DecTvaCa12 {
        $this->zCol2Acompte3 = $zCol2Acompte3;
        return $this;
    }

    /**
     * Set the z col2 acompte4.
     *
     * @param float|null $zCol2Acompte4 The z col2 acompte4.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzCol2Acompte4(?float $zCol2Acompte4): DecTvaCa12 {
        $this->zCol2Acompte4 = $zCol2Acompte4;
        return $this;
    }

    /**
     * Set the z excedent versement.
     *
     * @param float|null $zExcedentVersement The z excedent versement.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzExcedentVersement(?float $zExcedentVersement): DecTvaCa12 {
        $this->zExcedentVersement = $zExcedentVersement;
        return $this;
    }

    /**
     * Set the z nom demandeur rbt.
     *
     * @param string|null $zNomDemandeurRbt The z nom demandeur rbt.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzNomDemandeurRbt(?string $zNomDemandeurRbt): DecTvaCa12 {
        $this->zNomDemandeurRbt = $zNomDemandeurRbt;
        return $this;
    }

    /**
     * Set the z num msa.
     *
     * @param string|null $zNumMsa The z num msa.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzNumMsa(?string $zNumMsa): DecTvaCa12 {
        $this->zNumMsa = $zNumMsa;
        return $this;
    }

    /**
     * Set the z rbt demande.
     *
     * @param float|null $zRbtDemande The z rbt demande.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzRbtDemande(?float $zRbtDemande): DecTvaCa12 {
        $this->zRbtDemande = $zRbtDemande;
        return $this;
    }

    /**
     * Set the z rbt qualite.
     *
     * @param string|null $zRbtQualite The z rbt qualite.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzRbtQualite(?string $zRbtQualite): DecTvaCa12 {
        $this->zRbtQualite = $zRbtQualite;
        return $this;
    }

    /**
     * Set the z rbt ville.
     *
     * @param string|null $zRbtVille The z rbt ville.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzRbtVille(?string $zRbtVille): DecTvaCa12 {
        $this->zRbtVille = $zRbtVille;
        return $this;
    }

    /**
     * Set the z rbtbic.
     *
     * @param string|null $zRbtbic The z rbtbic.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzRbtbic(?string $zRbtbic): DecTvaCa12 {
        $this->zRbtbic = $zRbtbic;
        return $this;
    }

    /**
     * Set the z rbtiban.
     *
     * @param string|null $zRbtiban The z rbtiban.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzRbtiban(?string $zRbtiban): DecTvaCa12 {
        $this->zRbtiban = $zRbtiban;
        return $this;
    }

    /**
     * Set the z rbtrib.
     *
     * @param string|null $zRbtrib The z rbtrib.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzRbtrib(?string $zRbtrib): DecTvaCa12 {
        $this->zRbtrib = $zRbtrib;
        return $this;
    }

    /**
     * Set the z solde a payer.
     *
     * @param float|null $zSoldeAPayer The z solde a payer.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzSoldeAPayer(?float $zSoldeAPayer): DecTvaCa12 {
        $this->zSoldeAPayer = $zSoldeAPayer;
        return $this;
    }

    /**
     * Set the z surface agr.
     *
     * @param int|null $zSurfaceAgr The z surface agr.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzSurfaceAgr(?int $zSurfaceAgr): DecTvaCa12 {
        $this->zSurfaceAgr = $zSurfaceAgr;
        return $this;
    }

    /**
     * Set the z taxes fiscales.
     *
     * @param float|null $zTaxesFiscales The z taxes fiscales.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzTaxesFiscales(?float $zTaxesFiscales): DecTvaCa12 {
        $this->zTaxesFiscales = $zTaxesFiscales;
        return $this;
    }

    /**
     * Set the z ya demande rbt.
     *
     * @param bool|null $zYaDemandeRbt The z ya demande rbt.
     * @return DecTvaCa12 Returns this Dec tva ca12.
     */
    public function setzYaDemandeRbt(?bool $zYaDemandeRbt): DecTvaCa12 {
        $this->zYaDemandeRbt = $zYaDemandeRbt;
        return $this;
    }
}
