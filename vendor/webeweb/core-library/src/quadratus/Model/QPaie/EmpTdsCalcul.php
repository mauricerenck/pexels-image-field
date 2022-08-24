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
 * Emp tds calcul.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpTdsCalcul {

    /**
     * Base calc tds142.
     *
     * @var float|null
     */
    private $baseCalcTds142;

    /**
     * Code at per.
     *
     * @var int|null
     */
    private $codeAtPer;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Cum net impos.
     *
     * @var float|null
     */
    private $cumNetImpos;

    /**
     * Debut periode decl.
     *
     * @var DateTime|null
     */
    private $debutPeriodeDecl;

    /**
     * Derniere periode annee.
     *
     * @var bool|null
     */
    private $dernierePeriodeAnnee;

    /**
     * Fin periode decl.
     *
     * @var DateTime|null
     */
    private $finPeriodeDecl;

    /**
     * Indemn impat.
     *
     * @var float|null
     */
    private $indemnImpat;

    /**
     * Montant h sup compl exo.
     *
     * @var float|null
     */
    private $montantHSupComplExo;

    /**
     * Nb heure sal.
     *
     * @var float|null
     */
    private $nbHeureSal;

    /**
     * Nb heure trav.
     *
     * @var float|null
     */
    private $nbHeureTrav;

    /**
     * Nb per paie.
     *
     * @var int|null
     */
    private $nbPerPaie;

    /**
     * Numero.
     *
     * @var string|null
     */
    private $numero;

    /**
     * Numero ordre.
     *
     * @var int|null
     */
    private $numeroOrdre;

    /**
     * Particip serv pers.
     *
     * @var float|null
     */
    private $participServPers;

    /**
     * Premiere periode annee.
     *
     * @var bool|null
     */
    private $premierePeriodeAnnee;

    /**
     * Tds100.
     *
     * @var float|null
     */
    private $tds100;

    /**
     * Tds102.
     *
     * @var float|null
     */
    private $tds102;

    /**
     * Tds103.
     *
     * @var float|null
     */
    private $tds103;

    /**
     * Tds105.
     *
     * @var float|null
     */
    private $tds105;

    /**
     * Tds107.
     *
     * @var bool|null
     */
    private $tds107;

    /**
     * Tds108.
     *
     * @var bool|null
     */
    private $tds108;

    /**
     * Tds109.
     *
     * @var bool|null
     */
    private $tds109;

    /**
     * Tds110.
     *
     * @var bool|null
     */
    private $tds110;

    /**
     * Tds111.
     *
     * @var bool|null
     */
    private $tds111;

    /**
     * Tds112.
     *
     * @var float|null
     */
    private $tds112;

    /**
     * Tds113.
     *
     * @var bool|null
     */
    private $tds113;

    /**
     * Tds117.
     *
     * @var float|null
     */
    private $tds117;

    /**
     * Tds119.
     *
     * @var bool|null
     */
    private $tds119;

    /**
     * Tds120.
     *
     * @var bool|null
     */
    private $tds120;

    /**
     * Tds121.
     *
     * @var bool|null
     */
    private $tds121;

    /**
     * Tds122.
     *
     * @var bool|null
     */
    private $tds122;

    /**
     * Tds125.
     *
     * @var float|null
     */
    private $tds125;

    /**
     * Tds127.
     *
     * @var float|null
     */
    private $tds127;

    /**
     * Tds128.
     *
     * @var string|null
     */
    private $tds128;

    /**
     * Tds132.
     *
     * @var float|null
     */
    private $tds132;

    /**
     * Tds133.
     *
     * @var string|null
     */
    private $tds133;

    /**
     * Tds134.
     *
     * @var float|null
     */
    private $tds134;

    /**
     * Tds135.
     *
     * @var float|null
     */
    private $tds135;

    /**
     * Tds136.
     *
     * @var float|null
     */
    private $tds136;

    /**
     * Tds137.
     *
     * @var float|null
     */
    private $tds137;

    /**
     * Tds139.
     *
     * @var string|null
     */
    private $tds139;

    /**
     * Tds141.
     *
     * @var float|null
     */
    private $tds141;

    /**
     * Tds142.
     *
     * @var float|null
     */
    private $tds142;

    /**
     * Tds142 deja calcule.
     *
     * @var bool|null
     */
    private $tds142DejaCalcule;

    /**
     * Tds75.
     *
     * @var int|null
     */
    private $tds75;

    /**
     * Tds77.
     *
     * @var string|null
     */
    private $tds77;

    /**
     * Tds78.
     *
     * @var bool|null
     */
    private $tds78;

    /**
     * Tds81.
     *
     * @var float|null
     */
    private $tds81;

    /**
     * Tds82.
     *
     * @var float|null
     */
    private $tds82;

    /**
     * Tds84.
     *
     * @var float|null
     */
    private $tds84;

    /**
     * Tds85.
     *
     * @var float|null
     */
    private $tds85;

    /**
     * Tds86.
     *
     * @var float|null
     */
    private $tds86;

    /**
     * Tds87.
     *
     * @var float|null
     */
    private $tds87;

    /**
     * Tds88.
     *
     * @var float|null
     */
    private $tds88;

    /**
     * Tds89.
     *
     * @var float|null
     */
    private $tds89;

    /**
     * Tds90.
     *
     * @var float|null
     */
    private $tds90;

    /**
     * Tds91.
     *
     * @var float|null
     */
    private $tds91;

    /**
     * Tds92.
     *
     * @var float|null
     */
    private $tds92;

    /**
     * Tds93.
     *
     * @var float|null
     */
    private $tds93;

    /**
     * Tds94.
     *
     * @var float|null
     */
    private $tds94;

    /**
     * Tds95.
     *
     * @var float|null
     */
    private $tds95;

    /**
     * Tds abatt frais pro.
     *
     * @var float|null
     */
    private $tdsAbattFraisPro;

    /**
     * Tds alloc chom.
     *
     * @var float|null
     */
    private $tdsAllocChom;

    /**
     * Tds alloc compl ijss.
     *
     * @var float|null
     */
    private $tdsAllocComplIjss;

    /**
     * Tds alloc retraite.
     *
     * @var float|null
     */
    private $tdsAllocRetraite;

    /**
     * Tds contrib ce cheques vac.
     *
     * @var float|null
     */
    private $tdsContribCeChequesVac;

    /**
     * Tds cumul n.
     *
     * @var float|null
     */
    private $tdsCumulN;

    /**
     * Tds flag raz.
     *
     * @var int|null
     */
    private $tdsFlagRaz;

    /**
     * Tds indemn depart retraite.
     *
     * @var float|null
     */
    private $tdsIndemnDepartRetraite;

    /**
     * Tds indemn imposables.
     *
     * @var float|null
     */
    private $tdsIndemnImposables;

    /**
     * Tds remb frais pro.
     *
     * @var float|null
     */
    private $tdsRembFraisPro;

    /**
     * Tds somme exo taxe sal.
     *
     * @var float|null
     */
    private $tdsSommeExoTaxeSal;

    /**
     * Tds sup120.
     *
     * @var string|null
     */
    private $tdsSup120;

    /**
     * Tds sup1200.
     *
     * @var string|null
     */
    private $tdsSup1200;

    /**
     * Total plaf.
     *
     * @var float|null
     */
    private $totalPlaf;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the base calc tds142.
     *
     * @return float|null Returns the base calc tds142.
     */
    public function getBaseCalcTds142(): ?float {
        return $this->baseCalcTds142;
    }

    /**
     * Get the code at per.
     *
     * @return int|null Returns the code at per.
     */
    public function getCodeAtPer(): ?int {
        return $this->codeAtPer;
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the cum net impos.
     *
     * @return float|null Returns the cum net impos.
     */
    public function getCumNetImpos(): ?float {
        return $this->cumNetImpos;
    }

    /**
     * Get the debut periode decl.
     *
     * @return DateTime|null Returns the debut periode decl.
     */
    public function getDebutPeriodeDecl(): ?DateTime {
        return $this->debutPeriodeDecl;
    }

    /**
     * Get the derniere periode annee.
     *
     * @return bool|null Returns the derniere periode annee.
     */
    public function getDernierePeriodeAnnee(): ?bool {
        return $this->dernierePeriodeAnnee;
    }

    /**
     * Get the fin periode decl.
     *
     * @return DateTime|null Returns the fin periode decl.
     */
    public function getFinPeriodeDecl(): ?DateTime {
        return $this->finPeriodeDecl;
    }

    /**
     * Get the indemn impat.
     *
     * @return float|null Returns the indemn impat.
     */
    public function getIndemnImpat(): ?float {
        return $this->indemnImpat;
    }

    /**
     * Get the montant h sup compl exo.
     *
     * @return float|null Returns the montant h sup compl exo.
     */
    public function getMontantHSupComplExo(): ?float {
        return $this->montantHSupComplExo;
    }

    /**
     * Get the nb heure sal.
     *
     * @return float|null Returns the nb heure sal.
     */
    public function getNbHeureSal(): ?float {
        return $this->nbHeureSal;
    }

    /**
     * Get the nb heure trav.
     *
     * @return float|null Returns the nb heure trav.
     */
    public function getNbHeureTrav(): ?float {
        return $this->nbHeureTrav;
    }

    /**
     * Get the nb per paie.
     *
     * @return int|null Returns the nb per paie.
     */
    public function getNbPerPaie(): ?int {
        return $this->nbPerPaie;
    }

    /**
     * Get the numero.
     *
     * @return string|null Returns the numero.
     */
    public function getNumero(): ?string {
        return $this->numero;
    }

    /**
     * Get the numero ordre.
     *
     * @return int|null Returns the numero ordre.
     */
    public function getNumeroOrdre(): ?int {
        return $this->numeroOrdre;
    }

    /**
     * Get the particip serv pers.
     *
     * @return float|null Returns the particip serv pers.
     */
    public function getParticipServPers(): ?float {
        return $this->participServPers;
    }

    /**
     * Get the premiere periode annee.
     *
     * @return bool|null Returns the premiere periode annee.
     */
    public function getPremierePeriodeAnnee(): ?bool {
        return $this->premierePeriodeAnnee;
    }

    /**
     * Get the tds100.
     *
     * @return float|null Returns the tds100.
     */
    public function getTds100(): ?float {
        return $this->tds100;
    }

    /**
     * Get the tds102.
     *
     * @return float|null Returns the tds102.
     */
    public function getTds102(): ?float {
        return $this->tds102;
    }

    /**
     * Get the tds103.
     *
     * @return float|null Returns the tds103.
     */
    public function getTds103(): ?float {
        return $this->tds103;
    }

    /**
     * Get the tds105.
     *
     * @return float|null Returns the tds105.
     */
    public function getTds105(): ?float {
        return $this->tds105;
    }

    /**
     * Get the tds107.
     *
     * @return bool|null Returns the tds107.
     */
    public function getTds107(): ?bool {
        return $this->tds107;
    }

    /**
     * Get the tds108.
     *
     * @return bool|null Returns the tds108.
     */
    public function getTds108(): ?bool {
        return $this->tds108;
    }

    /**
     * Get the tds109.
     *
     * @return bool|null Returns the tds109.
     */
    public function getTds109(): ?bool {
        return $this->tds109;
    }

    /**
     * Get the tds110.
     *
     * @return bool|null Returns the tds110.
     */
    public function getTds110(): ?bool {
        return $this->tds110;
    }

    /**
     * Get the tds111.
     *
     * @return bool|null Returns the tds111.
     */
    public function getTds111(): ?bool {
        return $this->tds111;
    }

    /**
     * Get the tds112.
     *
     * @return float|null Returns the tds112.
     */
    public function getTds112(): ?float {
        return $this->tds112;
    }

    /**
     * Get the tds113.
     *
     * @return bool|null Returns the tds113.
     */
    public function getTds113(): ?bool {
        return $this->tds113;
    }

    /**
     * Get the tds117.
     *
     * @return float|null Returns the tds117.
     */
    public function getTds117(): ?float {
        return $this->tds117;
    }

    /**
     * Get the tds119.
     *
     * @return bool|null Returns the tds119.
     */
    public function getTds119(): ?bool {
        return $this->tds119;
    }

    /**
     * Get the tds120.
     *
     * @return bool|null Returns the tds120.
     */
    public function getTds120(): ?bool {
        return $this->tds120;
    }

    /**
     * Get the tds121.
     *
     * @return bool|null Returns the tds121.
     */
    public function getTds121(): ?bool {
        return $this->tds121;
    }

    /**
     * Get the tds122.
     *
     * @return bool|null Returns the tds122.
     */
    public function getTds122(): ?bool {
        return $this->tds122;
    }

    /**
     * Get the tds125.
     *
     * @return float|null Returns the tds125.
     */
    public function getTds125(): ?float {
        return $this->tds125;
    }

    /**
     * Get the tds127.
     *
     * @return float|null Returns the tds127.
     */
    public function getTds127(): ?float {
        return $this->tds127;
    }

    /**
     * Get the tds128.
     *
     * @return string|null Returns the tds128.
     */
    public function getTds128(): ?string {
        return $this->tds128;
    }

    /**
     * Get the tds132.
     *
     * @return float|null Returns the tds132.
     */
    public function getTds132(): ?float {
        return $this->tds132;
    }

    /**
     * Get the tds133.
     *
     * @return string|null Returns the tds133.
     */
    public function getTds133(): ?string {
        return $this->tds133;
    }

    /**
     * Get the tds134.
     *
     * @return float|null Returns the tds134.
     */
    public function getTds134(): ?float {
        return $this->tds134;
    }

    /**
     * Get the tds135.
     *
     * @return float|null Returns the tds135.
     */
    public function getTds135(): ?float {
        return $this->tds135;
    }

    /**
     * Get the tds136.
     *
     * @return float|null Returns the tds136.
     */
    public function getTds136(): ?float {
        return $this->tds136;
    }

    /**
     * Get the tds137.
     *
     * @return float|null Returns the tds137.
     */
    public function getTds137(): ?float {
        return $this->tds137;
    }

    /**
     * Get the tds139.
     *
     * @return string|null Returns the tds139.
     */
    public function getTds139(): ?string {
        return $this->tds139;
    }

    /**
     * Get the tds141.
     *
     * @return float|null Returns the tds141.
     */
    public function getTds141(): ?float {
        return $this->tds141;
    }

    /**
     * Get the tds142.
     *
     * @return float|null Returns the tds142.
     */
    public function getTds142(): ?float {
        return $this->tds142;
    }

    /**
     * Get the tds142 deja calcule.
     *
     * @return bool|null Returns the tds142 deja calcule.
     */
    public function getTds142DejaCalcule(): ?bool {
        return $this->tds142DejaCalcule;
    }

    /**
     * Get the tds75.
     *
     * @return int|null Returns the tds75.
     */
    public function getTds75(): ?int {
        return $this->tds75;
    }

    /**
     * Get the tds77.
     *
     * @return string|null Returns the tds77.
     */
    public function getTds77(): ?string {
        return $this->tds77;
    }

    /**
     * Get the tds78.
     *
     * @return bool|null Returns the tds78.
     */
    public function getTds78(): ?bool {
        return $this->tds78;
    }

    /**
     * Get the tds81.
     *
     * @return float|null Returns the tds81.
     */
    public function getTds81(): ?float {
        return $this->tds81;
    }

    /**
     * Get the tds82.
     *
     * @return float|null Returns the tds82.
     */
    public function getTds82(): ?float {
        return $this->tds82;
    }

    /**
     * Get the tds84.
     *
     * @return float|null Returns the tds84.
     */
    public function getTds84(): ?float {
        return $this->tds84;
    }

    /**
     * Get the tds85.
     *
     * @return float|null Returns the tds85.
     */
    public function getTds85(): ?float {
        return $this->tds85;
    }

    /**
     * Get the tds86.
     *
     * @return float|null Returns the tds86.
     */
    public function getTds86(): ?float {
        return $this->tds86;
    }

    /**
     * Get the tds87.
     *
     * @return float|null Returns the tds87.
     */
    public function getTds87(): ?float {
        return $this->tds87;
    }

    /**
     * Get the tds88.
     *
     * @return float|null Returns the tds88.
     */
    public function getTds88(): ?float {
        return $this->tds88;
    }

    /**
     * Get the tds89.
     *
     * @return float|null Returns the tds89.
     */
    public function getTds89(): ?float {
        return $this->tds89;
    }

    /**
     * Get the tds90.
     *
     * @return float|null Returns the tds90.
     */
    public function getTds90(): ?float {
        return $this->tds90;
    }

    /**
     * Get the tds91.
     *
     * @return float|null Returns the tds91.
     */
    public function getTds91(): ?float {
        return $this->tds91;
    }

    /**
     * Get the tds92.
     *
     * @return float|null Returns the tds92.
     */
    public function getTds92(): ?float {
        return $this->tds92;
    }

    /**
     * Get the tds93.
     *
     * @return float|null Returns the tds93.
     */
    public function getTds93(): ?float {
        return $this->tds93;
    }

    /**
     * Get the tds94.
     *
     * @return float|null Returns the tds94.
     */
    public function getTds94(): ?float {
        return $this->tds94;
    }

    /**
     * Get the tds95.
     *
     * @return float|null Returns the tds95.
     */
    public function getTds95(): ?float {
        return $this->tds95;
    }

    /**
     * Get the tds abatt frais pro.
     *
     * @return float|null Returns the tds abatt frais pro.
     */
    public function getTdsAbattFraisPro(): ?float {
        return $this->tdsAbattFraisPro;
    }

    /**
     * Get the tds alloc chom.
     *
     * @return float|null Returns the tds alloc chom.
     */
    public function getTdsAllocChom(): ?float {
        return $this->tdsAllocChom;
    }

    /**
     * Get the tds alloc compl ijss.
     *
     * @return float|null Returns the tds alloc compl ijss.
     */
    public function getTdsAllocComplIjss(): ?float {
        return $this->tdsAllocComplIjss;
    }

    /**
     * Get the tds alloc retraite.
     *
     * @return float|null Returns the tds alloc retraite.
     */
    public function getTdsAllocRetraite(): ?float {
        return $this->tdsAllocRetraite;
    }

    /**
     * Get the tds contrib ce cheques vac.
     *
     * @return float|null Returns the tds contrib ce cheques vac.
     */
    public function getTdsContribCeChequesVac(): ?float {
        return $this->tdsContribCeChequesVac;
    }

    /**
     * Get the tds cumul n.
     *
     * @return float|null Returns the tds cumul n.
     */
    public function getTdsCumulN(): ?float {
        return $this->tdsCumulN;
    }

    /**
     * Get the tds flag raz.
     *
     * @return int|null Returns the tds flag raz.
     */
    public function getTdsFlagRaz(): ?int {
        return $this->tdsFlagRaz;
    }

    /**
     * Get the tds indemn depart retraite.
     *
     * @return float|null Returns the tds indemn depart retraite.
     */
    public function getTdsIndemnDepartRetraite(): ?float {
        return $this->tdsIndemnDepartRetraite;
    }

    /**
     * Get the tds indemn imposables.
     *
     * @return float|null Returns the tds indemn imposables.
     */
    public function getTdsIndemnImposables(): ?float {
        return $this->tdsIndemnImposables;
    }

    /**
     * Get the tds remb frais pro.
     *
     * @return float|null Returns the tds remb frais pro.
     */
    public function getTdsRembFraisPro(): ?float {
        return $this->tdsRembFraisPro;
    }

    /**
     * Get the tds somme exo taxe sal.
     *
     * @return float|null Returns the tds somme exo taxe sal.
     */
    public function getTdsSommeExoTaxeSal(): ?float {
        return $this->tdsSommeExoTaxeSal;
    }

    /**
     * Get the tds sup120.
     *
     * @return string|null Returns the tds sup120.
     */
    public function getTdsSup120(): ?string {
        return $this->tdsSup120;
    }

    /**
     * Get the tds sup1200.
     *
     * @return string|null Returns the tds sup1200.
     */
    public function getTdsSup1200(): ?string {
        return $this->tdsSup1200;
    }

    /**
     * Get the total plaf.
     *
     * @return float|null Returns the total plaf.
     */
    public function getTotalPlaf(): ?float {
        return $this->totalPlaf;
    }

    /**
     * Set the base calc tds142.
     *
     * @param float|null $baseCalcTds142 The base calc tds142.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setBaseCalcTds142(?float $baseCalcTds142): EmpTdsCalcul {
        $this->baseCalcTds142 = $baseCalcTds142;
        return $this;
    }

    /**
     * Set the code at per.
     *
     * @param int|null $codeAtPer The code at per.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setCodeAtPer(?int $codeAtPer): EmpTdsCalcul {
        $this->codeAtPer = $codeAtPer;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setCodeEtablissement(?int $codeEtablissement): EmpTdsCalcul {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the cum net impos.
     *
     * @param float|null $cumNetImpos The cum net impos.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setCumNetImpos(?float $cumNetImpos): EmpTdsCalcul {
        $this->cumNetImpos = $cumNetImpos;
        return $this;
    }

    /**
     * Set the debut periode decl.
     *
     * @param DateTime|null $debutPeriodeDecl The debut periode decl.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setDebutPeriodeDecl(?DateTime $debutPeriodeDecl): EmpTdsCalcul {
        $this->debutPeriodeDecl = $debutPeriodeDecl;
        return $this;
    }

    /**
     * Set the derniere periode annee.
     *
     * @param bool|null $dernierePeriodeAnnee The derniere periode annee.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setDernierePeriodeAnnee(?bool $dernierePeriodeAnnee): EmpTdsCalcul {
        $this->dernierePeriodeAnnee = $dernierePeriodeAnnee;
        return $this;
    }

    /**
     * Set the fin periode decl.
     *
     * @param DateTime|null $finPeriodeDecl The fin periode decl.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setFinPeriodeDecl(?DateTime $finPeriodeDecl): EmpTdsCalcul {
        $this->finPeriodeDecl = $finPeriodeDecl;
        return $this;
    }

    /**
     * Set the indemn impat.
     *
     * @param float|null $indemnImpat The indemn impat.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setIndemnImpat(?float $indemnImpat): EmpTdsCalcul {
        $this->indemnImpat = $indemnImpat;
        return $this;
    }

    /**
     * Set the montant h sup compl exo.
     *
     * @param float|null $montantHSupComplExo The montant h sup compl exo.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setMontantHSupComplExo(?float $montantHSupComplExo): EmpTdsCalcul {
        $this->montantHSupComplExo = $montantHSupComplExo;
        return $this;
    }

    /**
     * Set the nb heure sal.
     *
     * @param float|null $nbHeureSal The nb heure sal.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setNbHeureSal(?float $nbHeureSal): EmpTdsCalcul {
        $this->nbHeureSal = $nbHeureSal;
        return $this;
    }

    /**
     * Set the nb heure trav.
     *
     * @param float|null $nbHeureTrav The nb heure trav.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setNbHeureTrav(?float $nbHeureTrav): EmpTdsCalcul {
        $this->nbHeureTrav = $nbHeureTrav;
        return $this;
    }

    /**
     * Set the nb per paie.
     *
     * @param int|null $nbPerPaie The nb per paie.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setNbPerPaie(?int $nbPerPaie): EmpTdsCalcul {
        $this->nbPerPaie = $nbPerPaie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setNumero(?string $numero): EmpTdsCalcul {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int|null $numeroOrdre The numero ordre.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setNumeroOrdre(?int $numeroOrdre): EmpTdsCalcul {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the particip serv pers.
     *
     * @param float|null $participServPers The particip serv pers.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setParticipServPers(?float $participServPers): EmpTdsCalcul {
        $this->participServPers = $participServPers;
        return $this;
    }

    /**
     * Set the premiere periode annee.
     *
     * @param bool|null $premierePeriodeAnnee The premiere periode annee.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setPremierePeriodeAnnee(?bool $premierePeriodeAnnee): EmpTdsCalcul {
        $this->premierePeriodeAnnee = $premierePeriodeAnnee;
        return $this;
    }

    /**
     * Set the tds100.
     *
     * @param float|null $tds100 The tds100.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds100(?float $tds100): EmpTdsCalcul {
        $this->tds100 = $tds100;
        return $this;
    }

    /**
     * Set the tds102.
     *
     * @param float|null $tds102 The tds102.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds102(?float $tds102): EmpTdsCalcul {
        $this->tds102 = $tds102;
        return $this;
    }

    /**
     * Set the tds103.
     *
     * @param float|null $tds103 The tds103.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds103(?float $tds103): EmpTdsCalcul {
        $this->tds103 = $tds103;
        return $this;
    }

    /**
     * Set the tds105.
     *
     * @param float|null $tds105 The tds105.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds105(?float $tds105): EmpTdsCalcul {
        $this->tds105 = $tds105;
        return $this;
    }

    /**
     * Set the tds107.
     *
     * @param bool|null $tds107 The tds107.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds107(?bool $tds107): EmpTdsCalcul {
        $this->tds107 = $tds107;
        return $this;
    }

    /**
     * Set the tds108.
     *
     * @param bool|null $tds108 The tds108.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds108(?bool $tds108): EmpTdsCalcul {
        $this->tds108 = $tds108;
        return $this;
    }

    /**
     * Set the tds109.
     *
     * @param bool|null $tds109 The tds109.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds109(?bool $tds109): EmpTdsCalcul {
        $this->tds109 = $tds109;
        return $this;
    }

    /**
     * Set the tds110.
     *
     * @param bool|null $tds110 The tds110.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds110(?bool $tds110): EmpTdsCalcul {
        $this->tds110 = $tds110;
        return $this;
    }

    /**
     * Set the tds111.
     *
     * @param bool|null $tds111 The tds111.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds111(?bool $tds111): EmpTdsCalcul {
        $this->tds111 = $tds111;
        return $this;
    }

    /**
     * Set the tds112.
     *
     * @param float|null $tds112 The tds112.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds112(?float $tds112): EmpTdsCalcul {
        $this->tds112 = $tds112;
        return $this;
    }

    /**
     * Set the tds113.
     *
     * @param bool|null $tds113 The tds113.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds113(?bool $tds113): EmpTdsCalcul {
        $this->tds113 = $tds113;
        return $this;
    }

    /**
     * Set the tds117.
     *
     * @param float|null $tds117 The tds117.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds117(?float $tds117): EmpTdsCalcul {
        $this->tds117 = $tds117;
        return $this;
    }

    /**
     * Set the tds119.
     *
     * @param bool|null $tds119 The tds119.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds119(?bool $tds119): EmpTdsCalcul {
        $this->tds119 = $tds119;
        return $this;
    }

    /**
     * Set the tds120.
     *
     * @param bool|null $tds120 The tds120.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds120(?bool $tds120): EmpTdsCalcul {
        $this->tds120 = $tds120;
        return $this;
    }

    /**
     * Set the tds121.
     *
     * @param bool|null $tds121 The tds121.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds121(?bool $tds121): EmpTdsCalcul {
        $this->tds121 = $tds121;
        return $this;
    }

    /**
     * Set the tds122.
     *
     * @param bool|null $tds122 The tds122.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds122(?bool $tds122): EmpTdsCalcul {
        $this->tds122 = $tds122;
        return $this;
    }

    /**
     * Set the tds125.
     *
     * @param float|null $tds125 The tds125.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds125(?float $tds125): EmpTdsCalcul {
        $this->tds125 = $tds125;
        return $this;
    }

    /**
     * Set the tds127.
     *
     * @param float|null $tds127 The tds127.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds127(?float $tds127): EmpTdsCalcul {
        $this->tds127 = $tds127;
        return $this;
    }

    /**
     * Set the tds128.
     *
     * @param string|null $tds128 The tds128.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds128(?string $tds128): EmpTdsCalcul {
        $this->tds128 = $tds128;
        return $this;
    }

    /**
     * Set the tds132.
     *
     * @param float|null $tds132 The tds132.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds132(?float $tds132): EmpTdsCalcul {
        $this->tds132 = $tds132;
        return $this;
    }

    /**
     * Set the tds133.
     *
     * @param string|null $tds133 The tds133.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds133(?string $tds133): EmpTdsCalcul {
        $this->tds133 = $tds133;
        return $this;
    }

    /**
     * Set the tds134.
     *
     * @param float|null $tds134 The tds134.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds134(?float $tds134): EmpTdsCalcul {
        $this->tds134 = $tds134;
        return $this;
    }

    /**
     * Set the tds135.
     *
     * @param float|null $tds135 The tds135.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds135(?float $tds135): EmpTdsCalcul {
        $this->tds135 = $tds135;
        return $this;
    }

    /**
     * Set the tds136.
     *
     * @param float|null $tds136 The tds136.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds136(?float $tds136): EmpTdsCalcul {
        $this->tds136 = $tds136;
        return $this;
    }

    /**
     * Set the tds137.
     *
     * @param float|null $tds137 The tds137.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds137(?float $tds137): EmpTdsCalcul {
        $this->tds137 = $tds137;
        return $this;
    }

    /**
     * Set the tds139.
     *
     * @param string|null $tds139 The tds139.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds139(?string $tds139): EmpTdsCalcul {
        $this->tds139 = $tds139;
        return $this;
    }

    /**
     * Set the tds141.
     *
     * @param float|null $tds141 The tds141.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds141(?float $tds141): EmpTdsCalcul {
        $this->tds141 = $tds141;
        return $this;
    }

    /**
     * Set the tds142.
     *
     * @param float|null $tds142 The tds142.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds142(?float $tds142): EmpTdsCalcul {
        $this->tds142 = $tds142;
        return $this;
    }

    /**
     * Set the tds142 deja calcule.
     *
     * @param bool|null $tds142DejaCalcule The tds142 deja calcule.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds142DejaCalcule(?bool $tds142DejaCalcule): EmpTdsCalcul {
        $this->tds142DejaCalcule = $tds142DejaCalcule;
        return $this;
    }

    /**
     * Set the tds75.
     *
     * @param int|null $tds75 The tds75.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds75(?int $tds75): EmpTdsCalcul {
        $this->tds75 = $tds75;
        return $this;
    }

    /**
     * Set the tds77.
     *
     * @param string|null $tds77 The tds77.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds77(?string $tds77): EmpTdsCalcul {
        $this->tds77 = $tds77;
        return $this;
    }

    /**
     * Set the tds78.
     *
     * @param bool|null $tds78 The tds78.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds78(?bool $tds78): EmpTdsCalcul {
        $this->tds78 = $tds78;
        return $this;
    }

    /**
     * Set the tds81.
     *
     * @param float|null $tds81 The tds81.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds81(?float $tds81): EmpTdsCalcul {
        $this->tds81 = $tds81;
        return $this;
    }

    /**
     * Set the tds82.
     *
     * @param float|null $tds82 The tds82.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds82(?float $tds82): EmpTdsCalcul {
        $this->tds82 = $tds82;
        return $this;
    }

    /**
     * Set the tds84.
     *
     * @param float|null $tds84 The tds84.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds84(?float $tds84): EmpTdsCalcul {
        $this->tds84 = $tds84;
        return $this;
    }

    /**
     * Set the tds85.
     *
     * @param float|null $tds85 The tds85.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds85(?float $tds85): EmpTdsCalcul {
        $this->tds85 = $tds85;
        return $this;
    }

    /**
     * Set the tds86.
     *
     * @param float|null $tds86 The tds86.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds86(?float $tds86): EmpTdsCalcul {
        $this->tds86 = $tds86;
        return $this;
    }

    /**
     * Set the tds87.
     *
     * @param float|null $tds87 The tds87.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds87(?float $tds87): EmpTdsCalcul {
        $this->tds87 = $tds87;
        return $this;
    }

    /**
     * Set the tds88.
     *
     * @param float|null $tds88 The tds88.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds88(?float $tds88): EmpTdsCalcul {
        $this->tds88 = $tds88;
        return $this;
    }

    /**
     * Set the tds89.
     *
     * @param float|null $tds89 The tds89.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds89(?float $tds89): EmpTdsCalcul {
        $this->tds89 = $tds89;
        return $this;
    }

    /**
     * Set the tds90.
     *
     * @param float|null $tds90 The tds90.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds90(?float $tds90): EmpTdsCalcul {
        $this->tds90 = $tds90;
        return $this;
    }

    /**
     * Set the tds91.
     *
     * @param float|null $tds91 The tds91.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds91(?float $tds91): EmpTdsCalcul {
        $this->tds91 = $tds91;
        return $this;
    }

    /**
     * Set the tds92.
     *
     * @param float|null $tds92 The tds92.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds92(?float $tds92): EmpTdsCalcul {
        $this->tds92 = $tds92;
        return $this;
    }

    /**
     * Set the tds93.
     *
     * @param float|null $tds93 The tds93.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds93(?float $tds93): EmpTdsCalcul {
        $this->tds93 = $tds93;
        return $this;
    }

    /**
     * Set the tds94.
     *
     * @param float|null $tds94 The tds94.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds94(?float $tds94): EmpTdsCalcul {
        $this->tds94 = $tds94;
        return $this;
    }

    /**
     * Set the tds95.
     *
     * @param float|null $tds95 The tds95.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds95(?float $tds95): EmpTdsCalcul {
        $this->tds95 = $tds95;
        return $this;
    }

    /**
     * Set the tds abatt frais pro.
     *
     * @param float|null $tdsAbattFraisPro The tds abatt frais pro.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsAbattFraisPro(?float $tdsAbattFraisPro): EmpTdsCalcul {
        $this->tdsAbattFraisPro = $tdsAbattFraisPro;
        return $this;
    }

    /**
     * Set the tds alloc chom.
     *
     * @param float|null $tdsAllocChom The tds alloc chom.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsAllocChom(?float $tdsAllocChom): EmpTdsCalcul {
        $this->tdsAllocChom = $tdsAllocChom;
        return $this;
    }

    /**
     * Set the tds alloc compl ijss.
     *
     * @param float|null $tdsAllocComplIjss The tds alloc compl ijss.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsAllocComplIjss(?float $tdsAllocComplIjss): EmpTdsCalcul {
        $this->tdsAllocComplIjss = $tdsAllocComplIjss;
        return $this;
    }

    /**
     * Set the tds alloc retraite.
     *
     * @param float|null $tdsAllocRetraite The tds alloc retraite.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsAllocRetraite(?float $tdsAllocRetraite): EmpTdsCalcul {
        $this->tdsAllocRetraite = $tdsAllocRetraite;
        return $this;
    }

    /**
     * Set the tds contrib ce cheques vac.
     *
     * @param float|null $tdsContribCeChequesVac The tds contrib ce cheques vac.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsContribCeChequesVac(?float $tdsContribCeChequesVac): EmpTdsCalcul {
        $this->tdsContribCeChequesVac = $tdsContribCeChequesVac;
        return $this;
    }

    /**
     * Set the tds cumul n.
     *
     * @param float|null $tdsCumulN The tds cumul n.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsCumulN(?float $tdsCumulN): EmpTdsCalcul {
        $this->tdsCumulN = $tdsCumulN;
        return $this;
    }

    /**
     * Set the tds flag raz.
     *
     * @param int|null $tdsFlagRaz The tds flag raz.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsFlagRaz(?int $tdsFlagRaz): EmpTdsCalcul {
        $this->tdsFlagRaz = $tdsFlagRaz;
        return $this;
    }

    /**
     * Set the tds indemn depart retraite.
     *
     * @param float|null $tdsIndemnDepartRetraite The tds indemn depart retraite.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsIndemnDepartRetraite(?float $tdsIndemnDepartRetraite): EmpTdsCalcul {
        $this->tdsIndemnDepartRetraite = $tdsIndemnDepartRetraite;
        return $this;
    }

    /**
     * Set the tds indemn imposables.
     *
     * @param float|null $tdsIndemnImposables The tds indemn imposables.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsIndemnImposables(?float $tdsIndemnImposables): EmpTdsCalcul {
        $this->tdsIndemnImposables = $tdsIndemnImposables;
        return $this;
    }

    /**
     * Set the tds remb frais pro.
     *
     * @param float|null $tdsRembFraisPro The tds remb frais pro.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsRembFraisPro(?float $tdsRembFraisPro): EmpTdsCalcul {
        $this->tdsRembFraisPro = $tdsRembFraisPro;
        return $this;
    }

    /**
     * Set the tds somme exo taxe sal.
     *
     * @param float|null $tdsSommeExoTaxeSal The tds somme exo taxe sal.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsSommeExoTaxeSal(?float $tdsSommeExoTaxeSal): EmpTdsCalcul {
        $this->tdsSommeExoTaxeSal = $tdsSommeExoTaxeSal;
        return $this;
    }

    /**
     * Set the tds sup120.
     *
     * @param string|null $tdsSup120 The tds sup120.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsSup120(?string $tdsSup120): EmpTdsCalcul {
        $this->tdsSup120 = $tdsSup120;
        return $this;
    }

    /**
     * Set the tds sup1200.
     *
     * @param string|null $tdsSup1200 The tds sup1200.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsSup1200(?string $tdsSup1200): EmpTdsCalcul {
        $this->tdsSup1200 = $tdsSup1200;
        return $this;
    }

    /**
     * Set the total plaf.
     *
     * @param float|null $totalPlaf The total plaf.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTotalPlaf(?float $totalPlaf): EmpTdsCalcul {
        $this->totalPlaf = $totalPlaf;
        return $this;
    }
}
