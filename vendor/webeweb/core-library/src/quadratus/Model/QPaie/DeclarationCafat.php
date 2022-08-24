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
 * Declaration cafat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DeclarationCafat {

    /**
     * Adresse1.
     *
     * @var string|null
     */
    private $adresse1;

    /**
     * Adresse2.
     *
     * @var string|null
     */
    private $adresse2;

    /**
     * Adresse3.
     *
     * @var string|null
     */
    private $adresse3;

    /**
     * Code cotis.
     *
     * @var string|null
     */
    private $codeCotis;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Date declaration.
     *
     * @var DateTime|null
     */
    private $dateDeclaration;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Mt autre deduction.
     *
     * @var float|null
     */
    private $mtAutreDeduction;

    /**
     * Mt deduction acompte.
     *
     * @var float|null
     */
    private $mtDeductionAcompte;

    /**
     * Mt deduction acompte1.
     *
     * @var float|null
     */
    private $mtDeductionAcompte1;

    /**
     * Mt deduction acompte2.
     *
     * @var float|null
     */
    private $mtDeductionAcompte2;

    /**
     * Nb salaries.
     *
     * @var int|null
     */
    private $nbSalaries;

    /**
     * No cotisant.
     *
     * @var string|null
     */
    private $noCotisant;

    /**
     * Organisme.
     *
     * @var string|null
     */
    private $organisme;

    /**
     * Pas de personnel.
     *
     * @var bool|null
     */
    private $pasDePersonnel;

    /**
     * Pas de reembauche.
     *
     * @var bool|null
     */
    private $pasDeReembauche;

    /**
     * Periode decla.
     *
     * @var DateTime|null
     */
    private $periodeDecla;

    /**
     * Plafond1 ruamm tr2.
     *
     * @var float|null
     */
    private $plafond1RuammTr2;

    /**
     * Plafond2 ruamm tr2.
     *
     * @var float|null
     */
    private $plafond2RuammTr2;

    /**
     * Plafond autre regime.
     *
     * @var float|null
     */
    private $plafondAutreRegime;

    /**
     * Plafond fsh.
     *
     * @var float|null
     */
    private $plafondFsh;

    /**
     * Plafond maladie.
     *
     * @var float|null
     */
    private $plafondMaladie;

    /**
     * Plafond salaire.
     *
     * @var float|null
     */
    private $plafondSalaire;

    /**
     * Raison sociale.
     *
     * @var string|null
     */
    private $raisonSociale;

    /**
     * Rid.
     *
     * @var string|null
     */
    private $rid;

    /**
     * Secteur.
     *
     * @var string|null
     */
    private $secteur;

    /**
     * Taux at.
     *
     * @var float|null
     */
    private $tauxAt;

    /**
     * Taux autre regime.
     *
     * @var float|null
     */
    private $tauxAutreRegime;

    /**
     * Taux ccs.
     *
     * @var float|null
     */
    private $tauxCcs;

    /**
     * Taux fsh.
     *
     * @var float|null
     */
    private $tauxFsh;

    /**
     * Taux maladie.
     *
     * @var float|null
     */
    private $tauxMaladie;

    /**
     * Taux ruamm tr2.
     *
     * @var float|null
     */
    private $tauxRuammTr2;

    /**
     * Total cotis autre regime.
     *
     * @var float|null
     */
    private $totalCotisAutreRegime;

    /**
     * Total cotis ccs.
     *
     * @var float|null
     */
    private $totalCotisCcs;

    /**
     * Total cotis fsh.
     *
     * @var float|null
     */
    private $totalCotisFsh;

    /**
     * Total cotis maladie.
     *
     * @var float|null
     */
    private $totalCotisMaladie;

    /**
     * Total cotis ruamm tr2.
     *
     * @var float|null
     */
    private $totalCotisRuammTr2;

    /**
     * Total remuneration.
     *
     * @var int|null
     */
    private $totalRemuneration;

    /**
     * Total ruamm tr2.
     *
     * @var float|null
     */
    private $totalRuammTr2;

    /**
     * Total salaire autre regime.
     *
     * @var float|null
     */
    private $totalSalaireAutreRegime;

    /**
     * Total salaire ccs.
     *
     * @var float|null
     */
    private $totalSalaireCcs;

    /**
     * Total salaire fsh.
     *
     * @var float|null
     */
    private $totalSalaireFsh;

    /**
     * Total salaire maladie.
     *
     * @var float|null
     */
    private $totalSalaireMaladie;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adresse1.
     *
     * @return string|null Returns the adresse1.
     */
    public function getAdresse1(): ?string {
        return $this->adresse1;
    }

    /**
     * Get the adresse2.
     *
     * @return string|null Returns the adresse2.
     */
    public function getAdresse2(): ?string {
        return $this->adresse2;
    }

    /**
     * Get the adresse3.
     *
     * @return string|null Returns the adresse3.
     */
    public function getAdresse3(): ?string {
        return $this->adresse3;
    }

    /**
     * Get the code cotis.
     *
     * @return string|null Returns the code cotis.
     */
    public function getCodeCotis(): ?string {
        return $this->codeCotis;
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
     * Get the date declaration.
     *
     * @return DateTime|null Returns the date declaration.
     */
    public function getDateDeclaration(): ?DateTime {
        return $this->dateDeclaration;
    }

    /**
     * Get the lien document.
     *
     * @return string|null Returns the lien document.
     */
    public function getLienDocument(): ?string {
        return $this->lienDocument;
    }

    /**
     * Get the mt autre deduction.
     *
     * @return float|null Returns the mt autre deduction.
     */
    public function getMtAutreDeduction(): ?float {
        return $this->mtAutreDeduction;
    }

    /**
     * Get the mt deduction acompte.
     *
     * @return float|null Returns the mt deduction acompte.
     */
    public function getMtDeductionAcompte(): ?float {
        return $this->mtDeductionAcompte;
    }

    /**
     * Get the mt deduction acompte1.
     *
     * @return float|null Returns the mt deduction acompte1.
     */
    public function getMtDeductionAcompte1(): ?float {
        return $this->mtDeductionAcompte1;
    }

    /**
     * Get the mt deduction acompte2.
     *
     * @return float|null Returns the mt deduction acompte2.
     */
    public function getMtDeductionAcompte2(): ?float {
        return $this->mtDeductionAcompte2;
    }

    /**
     * Get the nb salaries.
     *
     * @return int|null Returns the nb salaries.
     */
    public function getNbSalaries(): ?int {
        return $this->nbSalaries;
    }

    /**
     * Get the no cotisant.
     *
     * @return string|null Returns the no cotisant.
     */
    public function getNoCotisant(): ?string {
        return $this->noCotisant;
    }

    /**
     * Get the organisme.
     *
     * @return string|null Returns the organisme.
     */
    public function getOrganisme(): ?string {
        return $this->organisme;
    }

    /**
     * Get the pas de personnel.
     *
     * @return bool|null Returns the pas de personnel.
     */
    public function getPasDePersonnel(): ?bool {
        return $this->pasDePersonnel;
    }

    /**
     * Get the pas de reembauche.
     *
     * @return bool|null Returns the pas de reembauche.
     */
    public function getPasDeReembauche(): ?bool {
        return $this->pasDeReembauche;
    }

    /**
     * Get the periode decla.
     *
     * @return DateTime|null Returns the periode decla.
     */
    public function getPeriodeDecla(): ?DateTime {
        return $this->periodeDecla;
    }

    /**
     * Get the plafond1 ruamm tr2.
     *
     * @return float|null Returns the plafond1 ruamm tr2.
     */
    public function getPlafond1RuammTr2(): ?float {
        return $this->plafond1RuammTr2;
    }

    /**
     * Get the plafond2 ruamm tr2.
     *
     * @return float|null Returns the plafond2 ruamm tr2.
     */
    public function getPlafond2RuammTr2(): ?float {
        return $this->plafond2RuammTr2;
    }

    /**
     * Get the plafond autre regime.
     *
     * @return float|null Returns the plafond autre regime.
     */
    public function getPlafondAutreRegime(): ?float {
        return $this->plafondAutreRegime;
    }

    /**
     * Get the plafond fsh.
     *
     * @return float|null Returns the plafond fsh.
     */
    public function getPlafondFsh(): ?float {
        return $this->plafondFsh;
    }

    /**
     * Get the plafond maladie.
     *
     * @return float|null Returns the plafond maladie.
     */
    public function getPlafondMaladie(): ?float {
        return $this->plafondMaladie;
    }

    /**
     * Get the plafond salaire.
     *
     * @return float|null Returns the plafond salaire.
     */
    public function getPlafondSalaire(): ?float {
        return $this->plafondSalaire;
    }

    /**
     * Get the raison sociale.
     *
     * @return string|null Returns the raison sociale.
     */
    public function getRaisonSociale(): ?string {
        return $this->raisonSociale;
    }

    /**
     * Get the rid.
     *
     * @return string|null Returns the rid.
     */
    public function getRid(): ?string {
        return $this->rid;
    }

    /**
     * Get the secteur.
     *
     * @return string|null Returns the secteur.
     */
    public function getSecteur(): ?string {
        return $this->secteur;
    }

    /**
     * Get the taux at.
     *
     * @return float|null Returns the taux at.
     */
    public function getTauxAt(): ?float {
        return $this->tauxAt;
    }

    /**
     * Get the taux autre regime.
     *
     * @return float|null Returns the taux autre regime.
     */
    public function getTauxAutreRegime(): ?float {
        return $this->tauxAutreRegime;
    }

    /**
     * Get the taux ccs.
     *
     * @return float|null Returns the taux ccs.
     */
    public function getTauxCcs(): ?float {
        return $this->tauxCcs;
    }

    /**
     * Get the taux fsh.
     *
     * @return float|null Returns the taux fsh.
     */
    public function getTauxFsh(): ?float {
        return $this->tauxFsh;
    }

    /**
     * Get the taux maladie.
     *
     * @return float|null Returns the taux maladie.
     */
    public function getTauxMaladie(): ?float {
        return $this->tauxMaladie;
    }

    /**
     * Get the taux ruamm tr2.
     *
     * @return float|null Returns the taux ruamm tr2.
     */
    public function getTauxRuammTr2(): ?float {
        return $this->tauxRuammTr2;
    }

    /**
     * Get the total cotis autre regime.
     *
     * @return float|null Returns the total cotis autre regime.
     */
    public function getTotalCotisAutreRegime(): ?float {
        return $this->totalCotisAutreRegime;
    }

    /**
     * Get the total cotis ccs.
     *
     * @return float|null Returns the total cotis ccs.
     */
    public function getTotalCotisCcs(): ?float {
        return $this->totalCotisCcs;
    }

    /**
     * Get the total cotis fsh.
     *
     * @return float|null Returns the total cotis fsh.
     */
    public function getTotalCotisFsh(): ?float {
        return $this->totalCotisFsh;
    }

    /**
     * Get the total cotis maladie.
     *
     * @return float|null Returns the total cotis maladie.
     */
    public function getTotalCotisMaladie(): ?float {
        return $this->totalCotisMaladie;
    }

    /**
     * Get the total cotis ruamm tr2.
     *
     * @return float|null Returns the total cotis ruamm tr2.
     */
    public function getTotalCotisRuammTr2(): ?float {
        return $this->totalCotisRuammTr2;
    }

    /**
     * Get the total remuneration.
     *
     * @return int|null Returns the total remuneration.
     */
    public function getTotalRemuneration(): ?int {
        return $this->totalRemuneration;
    }

    /**
     * Get the total ruamm tr2.
     *
     * @return float|null Returns the total ruamm tr2.
     */
    public function getTotalRuammTr2(): ?float {
        return $this->totalRuammTr2;
    }

    /**
     * Get the total salaire autre regime.
     *
     * @return float|null Returns the total salaire autre regime.
     */
    public function getTotalSalaireAutreRegime(): ?float {
        return $this->totalSalaireAutreRegime;
    }

    /**
     * Get the total salaire ccs.
     *
     * @return float|null Returns the total salaire ccs.
     */
    public function getTotalSalaireCcs(): ?float {
        return $this->totalSalaireCcs;
    }

    /**
     * Get the total salaire fsh.
     *
     * @return float|null Returns the total salaire fsh.
     */
    public function getTotalSalaireFsh(): ?float {
        return $this->totalSalaireFsh;
    }

    /**
     * Get the total salaire maladie.
     *
     * @return float|null Returns the total salaire maladie.
     */
    public function getTotalSalaireMaladie(): ?float {
        return $this->totalSalaireMaladie;
    }

    /**
     * Set the adresse1.
     *
     * @param string|null $adresse1 The adresse1.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setAdresse1(?string $adresse1): DeclarationCafat {
        $this->adresse1 = $adresse1;
        return $this;
    }

    /**
     * Set the adresse2.
     *
     * @param string|null $adresse2 The adresse2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setAdresse2(?string $adresse2): DeclarationCafat {
        $this->adresse2 = $adresse2;
        return $this;
    }

    /**
     * Set the adresse3.
     *
     * @param string|null $adresse3 The adresse3.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setAdresse3(?string $adresse3): DeclarationCafat {
        $this->adresse3 = $adresse3;
        return $this;
    }

    /**
     * Set the code cotis.
     *
     * @param string|null $codeCotis The code cotis.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setCodeCotis(?string $codeCotis): DeclarationCafat {
        $this->codeCotis = $codeCotis;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setCodeEtablissement(?int $codeEtablissement): DeclarationCafat {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date declaration.
     *
     * @param DateTime|null $dateDeclaration The date declaration.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setDateDeclaration(?DateTime $dateDeclaration): DeclarationCafat {
        $this->dateDeclaration = $dateDeclaration;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setLienDocument(?string $lienDocument): DeclarationCafat {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the mt autre deduction.
     *
     * @param float|null $mtAutreDeduction The mt autre deduction.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setMtAutreDeduction(?float $mtAutreDeduction): DeclarationCafat {
        $this->mtAutreDeduction = $mtAutreDeduction;
        return $this;
    }

    /**
     * Set the mt deduction acompte.
     *
     * @param float|null $mtDeductionAcompte The mt deduction acompte.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setMtDeductionAcompte(?float $mtDeductionAcompte): DeclarationCafat {
        $this->mtDeductionAcompte = $mtDeductionAcompte;
        return $this;
    }

    /**
     * Set the mt deduction acompte1.
     *
     * @param float|null $mtDeductionAcompte1 The mt deduction acompte1.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setMtDeductionAcompte1(?float $mtDeductionAcompte1): DeclarationCafat {
        $this->mtDeductionAcompte1 = $mtDeductionAcompte1;
        return $this;
    }

    /**
     * Set the mt deduction acompte2.
     *
     * @param float|null $mtDeductionAcompte2 The mt deduction acompte2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setMtDeductionAcompte2(?float $mtDeductionAcompte2): DeclarationCafat {
        $this->mtDeductionAcompte2 = $mtDeductionAcompte2;
        return $this;
    }

    /**
     * Set the nb salaries.
     *
     * @param int|null $nbSalaries The nb salaries.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setNbSalaries(?int $nbSalaries): DeclarationCafat {
        $this->nbSalaries = $nbSalaries;
        return $this;
    }

    /**
     * Set the no cotisant.
     *
     * @param string|null $noCotisant The no cotisant.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setNoCotisant(?string $noCotisant): DeclarationCafat {
        $this->noCotisant = $noCotisant;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string|null $organisme The organisme.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setOrganisme(?string $organisme): DeclarationCafat {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the pas de personnel.
     *
     * @param bool|null $pasDePersonnel The pas de personnel.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPasDePersonnel(?bool $pasDePersonnel): DeclarationCafat {
        $this->pasDePersonnel = $pasDePersonnel;
        return $this;
    }

    /**
     * Set the pas de reembauche.
     *
     * @param bool|null $pasDeReembauche The pas de reembauche.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPasDeReembauche(?bool $pasDeReembauche): DeclarationCafat {
        $this->pasDeReembauche = $pasDeReembauche;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPeriodeDecla(?DateTime $periodeDecla): DeclarationCafat {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the plafond1 ruamm tr2.
     *
     * @param float|null $plafond1RuammTr2 The plafond1 ruamm tr2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPlafond1RuammTr2(?float $plafond1RuammTr2): DeclarationCafat {
        $this->plafond1RuammTr2 = $plafond1RuammTr2;
        return $this;
    }

    /**
     * Set the plafond2 ruamm tr2.
     *
     * @param float|null $plafond2RuammTr2 The plafond2 ruamm tr2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPlafond2RuammTr2(?float $plafond2RuammTr2): DeclarationCafat {
        $this->plafond2RuammTr2 = $plafond2RuammTr2;
        return $this;
    }

    /**
     * Set the plafond autre regime.
     *
     * @param float|null $plafondAutreRegime The plafond autre regime.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPlafondAutreRegime(?float $plafondAutreRegime): DeclarationCafat {
        $this->plafondAutreRegime = $plafondAutreRegime;
        return $this;
    }

    /**
     * Set the plafond fsh.
     *
     * @param float|null $plafondFsh The plafond fsh.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPlafondFsh(?float $plafondFsh): DeclarationCafat {
        $this->plafondFsh = $plafondFsh;
        return $this;
    }

    /**
     * Set the plafond maladie.
     *
     * @param float|null $plafondMaladie The plafond maladie.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPlafondMaladie(?float $plafondMaladie): DeclarationCafat {
        $this->plafondMaladie = $plafondMaladie;
        return $this;
    }

    /**
     * Set the plafond salaire.
     *
     * @param float|null $plafondSalaire The plafond salaire.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setPlafondSalaire(?float $plafondSalaire): DeclarationCafat {
        $this->plafondSalaire = $plafondSalaire;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string|null $raisonSociale The raison sociale.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setRaisonSociale(?string $raisonSociale): DeclarationCafat {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    /**
     * Set the rid.
     *
     * @param string|null $rid The rid.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setRid(?string $rid): DeclarationCafat {
        $this->rid = $rid;
        return $this;
    }

    /**
     * Set the secteur.
     *
     * @param string|null $secteur The secteur.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setSecteur(?string $secteur): DeclarationCafat {
        $this->secteur = $secteur;
        return $this;
    }

    /**
     * Set the taux at.
     *
     * @param float|null $tauxAt The taux at.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTauxAt(?float $tauxAt): DeclarationCafat {
        $this->tauxAt = $tauxAt;
        return $this;
    }

    /**
     * Set the taux autre regime.
     *
     * @param float|null $tauxAutreRegime The taux autre regime.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTauxAutreRegime(?float $tauxAutreRegime): DeclarationCafat {
        $this->tauxAutreRegime = $tauxAutreRegime;
        return $this;
    }

    /**
     * Set the taux ccs.
     *
     * @param float|null $tauxCcs The taux ccs.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTauxCcs(?float $tauxCcs): DeclarationCafat {
        $this->tauxCcs = $tauxCcs;
        return $this;
    }

    /**
     * Set the taux fsh.
     *
     * @param float|null $tauxFsh The taux fsh.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTauxFsh(?float $tauxFsh): DeclarationCafat {
        $this->tauxFsh = $tauxFsh;
        return $this;
    }

    /**
     * Set the taux maladie.
     *
     * @param float|null $tauxMaladie The taux maladie.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTauxMaladie(?float $tauxMaladie): DeclarationCafat {
        $this->tauxMaladie = $tauxMaladie;
        return $this;
    }

    /**
     * Set the taux ruamm tr2.
     *
     * @param float|null $tauxRuammTr2 The taux ruamm tr2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTauxRuammTr2(?float $tauxRuammTr2): DeclarationCafat {
        $this->tauxRuammTr2 = $tauxRuammTr2;
        return $this;
    }

    /**
     * Set the total cotis autre regime.
     *
     * @param float|null $totalCotisAutreRegime The total cotis autre regime.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalCotisAutreRegime(?float $totalCotisAutreRegime): DeclarationCafat {
        $this->totalCotisAutreRegime = $totalCotisAutreRegime;
        return $this;
    }

    /**
     * Set the total cotis ccs.
     *
     * @param float|null $totalCotisCcs The total cotis ccs.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalCotisCcs(?float $totalCotisCcs): DeclarationCafat {
        $this->totalCotisCcs = $totalCotisCcs;
        return $this;
    }

    /**
     * Set the total cotis fsh.
     *
     * @param float|null $totalCotisFsh The total cotis fsh.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalCotisFsh(?float $totalCotisFsh): DeclarationCafat {
        $this->totalCotisFsh = $totalCotisFsh;
        return $this;
    }

    /**
     * Set the total cotis maladie.
     *
     * @param float|null $totalCotisMaladie The total cotis maladie.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalCotisMaladie(?float $totalCotisMaladie): DeclarationCafat {
        $this->totalCotisMaladie = $totalCotisMaladie;
        return $this;
    }

    /**
     * Set the total cotis ruamm tr2.
     *
     * @param float|null $totalCotisRuammTr2 The total cotis ruamm tr2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalCotisRuammTr2(?float $totalCotisRuammTr2): DeclarationCafat {
        $this->totalCotisRuammTr2 = $totalCotisRuammTr2;
        return $this;
    }

    /**
     * Set the total remuneration.
     *
     * @param int|null $totalRemuneration The total remuneration.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalRemuneration(?int $totalRemuneration): DeclarationCafat {
        $this->totalRemuneration = $totalRemuneration;
        return $this;
    }

    /**
     * Set the total ruamm tr2.
     *
     * @param float|null $totalRuammTr2 The total ruamm tr2.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalRuammTr2(?float $totalRuammTr2): DeclarationCafat {
        $this->totalRuammTr2 = $totalRuammTr2;
        return $this;
    }

    /**
     * Set the total salaire autre regime.
     *
     * @param float|null $totalSalaireAutreRegime The total salaire autre regime.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalSalaireAutreRegime(?float $totalSalaireAutreRegime): DeclarationCafat {
        $this->totalSalaireAutreRegime = $totalSalaireAutreRegime;
        return $this;
    }

    /**
     * Set the total salaire ccs.
     *
     * @param float|null $totalSalaireCcs The total salaire ccs.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalSalaireCcs(?float $totalSalaireCcs): DeclarationCafat {
        $this->totalSalaireCcs = $totalSalaireCcs;
        return $this;
    }

    /**
     * Set the total salaire fsh.
     *
     * @param float|null $totalSalaireFsh The total salaire fsh.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalSalaireFsh(?float $totalSalaireFsh): DeclarationCafat {
        $this->totalSalaireFsh = $totalSalaireFsh;
        return $this;
    }

    /**
     * Set the total salaire maladie.
     *
     * @param float|null $totalSalaireMaladie The total salaire maladie.
     * @return DeclarationCafat Returns this Declaration cafat.
     */
    public function setTotalSalaireMaladie(?float $totalSalaireMaladie): DeclarationCafat {
        $this->totalSalaireMaladie = $totalSalaireMaladie;
        return $this;
    }
}
