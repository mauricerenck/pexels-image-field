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

/**
 * Cumuls annee prec.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class CumulsAnneePrec {

    /**
     * Annee.
     *
     * @var string|null
     */
    private $annee;

    /**
     * Cum30 ss.
     *
     * @var float|null
     */
    private $cum30Ss;

    /**
     * Cum base csg.
     *
     * @var float|null
     */
    private $cumBaseCsg;

    /**
     * Cum base gmp.
     *
     * @var float|null
     */
    private $cumBaseGmp;

    /**
     * Cum base ss.
     *
     * @var float|null
     */
    private $cumBaseSs;

    /**
     * Cum base tr2.
     *
     * @var float|null
     */
    private $cumBaseTr2;

    /**
     * Cum base tr a.
     *
     * @var float|null
     */
    private $cumBaseTrA;

    /**
     * Cum base tr a caisse1.
     *
     * @var float|null
     */
    private $cumBaseTrACaisse1;

    /**
     * Cum base tr a caisse2.
     *
     * @var float|null
     */
    private $cumBaseTrACaisse2;

    /**
     * Cum base tr a caisse3.
     *
     * @var float|null
     */
    private $cumBaseTrACaisse3;

    /**
     * Cum base tr b.
     *
     * @var float|null
     */
    private $cumBaseTrB;

    /**
     * Cum base tr b caisse1.
     *
     * @var float|null
     */
    private $cumBaseTrBCaisse1;

    /**
     * Cum base tr b caisse2.
     *
     * @var float|null
     */
    private $cumBaseTrBCaisse2;

    /**
     * Cum base tr b caisse3.
     *
     * @var float|null
     */
    private $cumBaseTrBCaisse3;

    /**
     * Cum base tr c.
     *
     * @var float|null
     */
    private $cumBaseTrC;

    /**
     * Cum base tr c caisse1.
     *
     * @var float|null
     */
    private $cumBaseTrCCaisse1;

    /**
     * Cum base tr c caisse2.
     *
     * @var float|null
     */
    private $cumBaseTrCCaisse2;

    /**
     * Cum base tr c caisse3.
     *
     * @var float|null
     */
    private $cumBaseTrCCaisse3;

    /**
     * Cum base tr d.
     *
     * @var float|null
     */
    private $cumBaseTrD;

    /**
     * Cum base tr d1.
     *
     * @var float|null
     */
    private $cumBaseTrD1;

    /**
     * Cum base tr d1 caisse1.
     *
     * @var float|null
     */
    private $cumBaseTrD1Caisse1;

    /**
     * Cum base tr d1 caisse2.
     *
     * @var float|null
     */
    private $cumBaseTrD1Caisse2;

    /**
     * Cum base tr d1 caisse3.
     *
     * @var float|null
     */
    private $cumBaseTrD1Caisse3;

    /**
     * Cum base tr d caisse1.
     *
     * @var float|null
     */
    private $cumBaseTrDCaisse1;

    /**
     * Cum base tr d caisse2.
     *
     * @var float|null
     */
    private $cumBaseTrDCaisse2;

    /**
     * Cum base tr d caisse3.
     *
     * @var float|null
     */
    private $cumBaseTrDCaisse3;

    /**
     * Cum brut abat non lim.
     *
     * @var float|null
     */
    private $cumBrutAbatNonLim;

    /**
     * Cum brut al.
     *
     * @var float|null
     */
    private $cumBrutAl;

    /**
     * Cum brut al sans si.
     *
     * @var float|null
     */
    private $cumBrutAlSansSi;

    /**
     * Cum brut caisse1.
     *
     * @var float|null
     */
    private $cumBrutCaisse1;

    /**
     * Cum brut caisse2.
     *
     * @var float|null
     */
    private $cumBrutCaisse2;

    /**
     * Cum brut caisse3.
     *
     * @var float|null
     */
    private $cumBrutCaisse3;

    /**
     * Cum brut non abattu.
     *
     * @var float|null
     */
    private $cumBrutNonAbattu;

    /**
     * Cum cp dus.
     *
     * @var float|null
     */
    private $cumCpDus;

    /**
     * Cum cp dus1.
     *
     * @var float|null
     */
    private $cumCpDus1;

    /**
     * Cum cp pris.
     *
     * @var float|null
     */
    private $cumCpPris;

    /**
     * Cum cp pris1.
     *
     * @var float|null
     */
    private $cumCpPris1;

    /**
     * Cum dif dus.
     *
     * @var float|null
     */
    private $cumDifDus;

    /**
     * Cum dif dus1.
     *
     * @var float|null
     */
    private $cumDifDus1;

    /**
     * Cum h bonifie.
     *
     * @var float|null
     */
    private $cumHBonifie;

    /**
     * Cum h repos remplace.
     *
     * @var float|null
     */
    private $cumHReposRemplace;

    /**
     * Cum h service.
     *
     * @var float|null
     */
    private $cumHService;

    /**
     * Cum h sup.
     *
     * @var float|null
     */
    private $cumHSup;

    /**
     * Cum h sup rcit.
     *
     * @var float|null
     */
    private $cumHSupRcit;

    /**
     * Cum heure paye.
     *
     * @var float|null
     */
    private $cumHeurePaye;

    /**
     * Cum heure trav.
     *
     * @var float|null
     */
    private $cumHeureTrav;

    /**
     * Cum j repos recup.
     *
     * @var float|null
     */
    private $cumJReposRecup;

    /**
     * Cum jour paye.
     *
     * @var float|null
     */
    private $cumJourPaye;

    /**
     * Cum jour trav.
     *
     * @var float|null
     */
    private $cumJourTrav;

    /**
     * Cum mt cp pris.
     *
     * @var float|null
     */
    private $cumMtCpPris;

    /**
     * Cum mt cp pris1.
     *
     * @var float|null
     */
    private $cumMtCpPris1;

    /**
     * Cum net a payer.
     *
     * @var float|null
     */
    private $cumNetAPayer;

    /**
     * Cum net imposable.
     *
     * @var float|null
     */
    private $cumNetImposable;

    /**
     * Cum plaf1 caisse1.
     *
     * @var float|null
     */
    private $cumPlaf1Caisse1;

    /**
     * Cum plaf1 caisse2.
     *
     * @var float|null
     */
    private $cumPlaf1Caisse2;

    /**
     * Cum plaf1 caisse3.
     *
     * @var float|null
     */
    private $cumPlaf1Caisse3;

    /**
     * Cum plaf2 caisse1.
     *
     * @var float|null
     */
    private $cumPlaf2Caisse1;

    /**
     * Cum plaf2 caisse2.
     *
     * @var float|null
     */
    private $cumPlaf2Caisse2;

    /**
     * Cum plaf2 caisse3.
     *
     * @var float|null
     */
    private $cumPlaf2Caisse3;

    /**
     * Cum plafond gmp.
     *
     * @var float|null
     */
    private $cumPlafondGmp;

    /**
     * Cum plafond ss1.
     *
     * @var float|null
     */
    private $cumPlafondSs1;

    /**
     * Cum plafond ss2.
     *
     * @var float|null
     */
    private $cumPlafondSs2;

    /**
     * Cum prov cp.
     *
     * @var float|null
     */
    private $cumProvCp;

    /**
     * Cum prov cp1.
     *
     * @var float|null
     */
    private $cumProvCp1;

    /**
     * Cum repos comp.
     *
     * @var float|null
     */
    private $cumReposComp;

    /**
     * Cum rtt dus.
     *
     * @var float|null
     */
    private $cumRttDus;

    /**
     * Cum rtt pris.
     *
     * @var float|null
     */
    private $cumRttPris;

    /**
     * Cum tot si.
     *
     * @var float|null
     */
    private $cumTotSi;

    /**
     * Cum tranche2 sans si.
     *
     * @var float|null
     */
    private $cumTranche2SansSi;

    /**
     * Cum tranche2 si.
     *
     * @var float|null
     */
    private $cumTranche2Si;

    /**
     * Cum tranche a sans si.
     *
     * @var float|null
     */
    private $cumTrancheASansSi;

    /**
     * Cum tranche asi.
     *
     * @var float|null
     */
    private $cumTrancheAsi;

    /**
     * Cum tranche b sans si.
     *
     * @var float|null
     */
    private $cumTrancheBSansSi;

    /**
     * Cum tranche bsi.
     *
     * @var float|null
     */
    private $cumTrancheBsi;

    /**
     * Cum tranche c sans si.
     *
     * @var float|null
     */
    private $cumTrancheCSansSi;

    /**
     * Cum tranche csi.
     *
     * @var float|null
     */
    private $cumTrancheCsi;

    /**
     * Cum tranche d1 sans si.
     *
     * @var float|null
     */
    private $cumTrancheD1SansSi;

    /**
     * Cum tranche d sans si.
     *
     * @var float|null
     */
    private $cumTrancheDSansSi;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the annee.
     *
     * @return string|null Returns the annee.
     */
    public function getAnnee(): ?string {
        return $this->annee;
    }

    /**
     * Get the cum30 ss.
     *
     * @return float|null Returns the cum30 ss.
     */
    public function getCum30Ss(): ?float {
        return $this->cum30Ss;
    }

    /**
     * Get the cum base csg.
     *
     * @return float|null Returns the cum base csg.
     */
    public function getCumBaseCsg(): ?float {
        return $this->cumBaseCsg;
    }

    /**
     * Get the cum base gmp.
     *
     * @return float|null Returns the cum base gmp.
     */
    public function getCumBaseGmp(): ?float {
        return $this->cumBaseGmp;
    }

    /**
     * Get the cum base ss.
     *
     * @return float|null Returns the cum base ss.
     */
    public function getCumBaseSs(): ?float {
        return $this->cumBaseSs;
    }

    /**
     * Get the cum base tr2.
     *
     * @return float|null Returns the cum base tr2.
     */
    public function getCumBaseTr2(): ?float {
        return $this->cumBaseTr2;
    }

    /**
     * Get the cum base tr a.
     *
     * @return float|null Returns the cum base tr a.
     */
    public function getCumBaseTrA(): ?float {
        return $this->cumBaseTrA;
    }

    /**
     * Get the cum base tr a caisse1.
     *
     * @return float|null Returns the cum base tr a caisse1.
     */
    public function getCumBaseTrACaisse1(): ?float {
        return $this->cumBaseTrACaisse1;
    }

    /**
     * Get the cum base tr a caisse2.
     *
     * @return float|null Returns the cum base tr a caisse2.
     */
    public function getCumBaseTrACaisse2(): ?float {
        return $this->cumBaseTrACaisse2;
    }

    /**
     * Get the cum base tr a caisse3.
     *
     * @return float|null Returns the cum base tr a caisse3.
     */
    public function getCumBaseTrACaisse3(): ?float {
        return $this->cumBaseTrACaisse3;
    }

    /**
     * Get the cum base tr b.
     *
     * @return float|null Returns the cum base tr b.
     */
    public function getCumBaseTrB(): ?float {
        return $this->cumBaseTrB;
    }

    /**
     * Get the cum base tr b caisse1.
     *
     * @return float|null Returns the cum base tr b caisse1.
     */
    public function getCumBaseTrBCaisse1(): ?float {
        return $this->cumBaseTrBCaisse1;
    }

    /**
     * Get the cum base tr b caisse2.
     *
     * @return float|null Returns the cum base tr b caisse2.
     */
    public function getCumBaseTrBCaisse2(): ?float {
        return $this->cumBaseTrBCaisse2;
    }

    /**
     * Get the cum base tr b caisse3.
     *
     * @return float|null Returns the cum base tr b caisse3.
     */
    public function getCumBaseTrBCaisse3(): ?float {
        return $this->cumBaseTrBCaisse3;
    }

    /**
     * Get the cum base tr c.
     *
     * @return float|null Returns the cum base tr c.
     */
    public function getCumBaseTrC(): ?float {
        return $this->cumBaseTrC;
    }

    /**
     * Get the cum base tr c caisse1.
     *
     * @return float|null Returns the cum base tr c caisse1.
     */
    public function getCumBaseTrCCaisse1(): ?float {
        return $this->cumBaseTrCCaisse1;
    }

    /**
     * Get the cum base tr c caisse2.
     *
     * @return float|null Returns the cum base tr c caisse2.
     */
    public function getCumBaseTrCCaisse2(): ?float {
        return $this->cumBaseTrCCaisse2;
    }

    /**
     * Get the cum base tr c caisse3.
     *
     * @return float|null Returns the cum base tr c caisse3.
     */
    public function getCumBaseTrCCaisse3(): ?float {
        return $this->cumBaseTrCCaisse3;
    }

    /**
     * Get the cum base tr d.
     *
     * @return float|null Returns the cum base tr d.
     */
    public function getCumBaseTrD(): ?float {
        return $this->cumBaseTrD;
    }

    /**
     * Get the cum base tr d1.
     *
     * @return float|null Returns the cum base tr d1.
     */
    public function getCumBaseTrD1(): ?float {
        return $this->cumBaseTrD1;
    }

    /**
     * Get the cum base tr d1 caisse1.
     *
     * @return float|null Returns the cum base tr d1 caisse1.
     */
    public function getCumBaseTrD1Caisse1(): ?float {
        return $this->cumBaseTrD1Caisse1;
    }

    /**
     * Get the cum base tr d1 caisse2.
     *
     * @return float|null Returns the cum base tr d1 caisse2.
     */
    public function getCumBaseTrD1Caisse2(): ?float {
        return $this->cumBaseTrD1Caisse2;
    }

    /**
     * Get the cum base tr d1 caisse3.
     *
     * @return float|null Returns the cum base tr d1 caisse3.
     */
    public function getCumBaseTrD1Caisse3(): ?float {
        return $this->cumBaseTrD1Caisse3;
    }

    /**
     * Get the cum base tr d caisse1.
     *
     * @return float|null Returns the cum base tr d caisse1.
     */
    public function getCumBaseTrDCaisse1(): ?float {
        return $this->cumBaseTrDCaisse1;
    }

    /**
     * Get the cum base tr d caisse2.
     *
     * @return float|null Returns the cum base tr d caisse2.
     */
    public function getCumBaseTrDCaisse2(): ?float {
        return $this->cumBaseTrDCaisse2;
    }

    /**
     * Get the cum base tr d caisse3.
     *
     * @return float|null Returns the cum base tr d caisse3.
     */
    public function getCumBaseTrDCaisse3(): ?float {
        return $this->cumBaseTrDCaisse3;
    }

    /**
     * Get the cum brut abat non lim.
     *
     * @return float|null Returns the cum brut abat non lim.
     */
    public function getCumBrutAbatNonLim(): ?float {
        return $this->cumBrutAbatNonLim;
    }

    /**
     * Get the cum brut al.
     *
     * @return float|null Returns the cum brut al.
     */
    public function getCumBrutAl(): ?float {
        return $this->cumBrutAl;
    }

    /**
     * Get the cum brut al sans si.
     *
     * @return float|null Returns the cum brut al sans si.
     */
    public function getCumBrutAlSansSi(): ?float {
        return $this->cumBrutAlSansSi;
    }

    /**
     * Get the cum brut caisse1.
     *
     * @return float|null Returns the cum brut caisse1.
     */
    public function getCumBrutCaisse1(): ?float {
        return $this->cumBrutCaisse1;
    }

    /**
     * Get the cum brut caisse2.
     *
     * @return float|null Returns the cum brut caisse2.
     */
    public function getCumBrutCaisse2(): ?float {
        return $this->cumBrutCaisse2;
    }

    /**
     * Get the cum brut caisse3.
     *
     * @return float|null Returns the cum brut caisse3.
     */
    public function getCumBrutCaisse3(): ?float {
        return $this->cumBrutCaisse3;
    }

    /**
     * Get the cum brut non abattu.
     *
     * @return float|null Returns the cum brut non abattu.
     */
    public function getCumBrutNonAbattu(): ?float {
        return $this->cumBrutNonAbattu;
    }

    /**
     * Get the cum cp dus.
     *
     * @return float|null Returns the cum cp dus.
     */
    public function getCumCpDus(): ?float {
        return $this->cumCpDus;
    }

    /**
     * Get the cum cp dus1.
     *
     * @return float|null Returns the cum cp dus1.
     */
    public function getCumCpDus1(): ?float {
        return $this->cumCpDus1;
    }

    /**
     * Get the cum cp pris.
     *
     * @return float|null Returns the cum cp pris.
     */
    public function getCumCpPris(): ?float {
        return $this->cumCpPris;
    }

    /**
     * Get the cum cp pris1.
     *
     * @return float|null Returns the cum cp pris1.
     */
    public function getCumCpPris1(): ?float {
        return $this->cumCpPris1;
    }

    /**
     * Get the cum dif dus.
     *
     * @return float|null Returns the cum dif dus.
     */
    public function getCumDifDus(): ?float {
        return $this->cumDifDus;
    }

    /**
     * Get the cum dif dus1.
     *
     * @return float|null Returns the cum dif dus1.
     */
    public function getCumDifDus1(): ?float {
        return $this->cumDifDus1;
    }

    /**
     * Get the cum h bonifie.
     *
     * @return float|null Returns the cum h bonifie.
     */
    public function getCumHBonifie(): ?float {
        return $this->cumHBonifie;
    }

    /**
     * Get the cum h repos remplace.
     *
     * @return float|null Returns the cum h repos remplace.
     */
    public function getCumHReposRemplace(): ?float {
        return $this->cumHReposRemplace;
    }

    /**
     * Get the cum h service.
     *
     * @return float|null Returns the cum h service.
     */
    public function getCumHService(): ?float {
        return $this->cumHService;
    }

    /**
     * Get the cum h sup.
     *
     * @return float|null Returns the cum h sup.
     */
    public function getCumHSup(): ?float {
        return $this->cumHSup;
    }

    /**
     * Get the cum h sup rcit.
     *
     * @return float|null Returns the cum h sup rcit.
     */
    public function getCumHSupRcit(): ?float {
        return $this->cumHSupRcit;
    }

    /**
     * Get the cum heure paye.
     *
     * @return float|null Returns the cum heure paye.
     */
    public function getCumHeurePaye(): ?float {
        return $this->cumHeurePaye;
    }

    /**
     * Get the cum heure trav.
     *
     * @return float|null Returns the cum heure trav.
     */
    public function getCumHeureTrav(): ?float {
        return $this->cumHeureTrav;
    }

    /**
     * Get the cum j repos recup.
     *
     * @return float|null Returns the cum j repos recup.
     */
    public function getCumJReposRecup(): ?float {
        return $this->cumJReposRecup;
    }

    /**
     * Get the cum jour paye.
     *
     * @return float|null Returns the cum jour paye.
     */
    public function getCumJourPaye(): ?float {
        return $this->cumJourPaye;
    }

    /**
     * Get the cum jour trav.
     *
     * @return float|null Returns the cum jour trav.
     */
    public function getCumJourTrav(): ?float {
        return $this->cumJourTrav;
    }

    /**
     * Get the cum mt cp pris.
     *
     * @return float|null Returns the cum mt cp pris.
     */
    public function getCumMtCpPris(): ?float {
        return $this->cumMtCpPris;
    }

    /**
     * Get the cum mt cp pris1.
     *
     * @return float|null Returns the cum mt cp pris1.
     */
    public function getCumMtCpPris1(): ?float {
        return $this->cumMtCpPris1;
    }

    /**
     * Get the cum net a payer.
     *
     * @return float|null Returns the cum net a payer.
     */
    public function getCumNetAPayer(): ?float {
        return $this->cumNetAPayer;
    }

    /**
     * Get the cum net imposable.
     *
     * @return float|null Returns the cum net imposable.
     */
    public function getCumNetImposable(): ?float {
        return $this->cumNetImposable;
    }

    /**
     * Get the cum plaf1 caisse1.
     *
     * @return float|null Returns the cum plaf1 caisse1.
     */
    public function getCumPlaf1Caisse1(): ?float {
        return $this->cumPlaf1Caisse1;
    }

    /**
     * Get the cum plaf1 caisse2.
     *
     * @return float|null Returns the cum plaf1 caisse2.
     */
    public function getCumPlaf1Caisse2(): ?float {
        return $this->cumPlaf1Caisse2;
    }

    /**
     * Get the cum plaf1 caisse3.
     *
     * @return float|null Returns the cum plaf1 caisse3.
     */
    public function getCumPlaf1Caisse3(): ?float {
        return $this->cumPlaf1Caisse3;
    }

    /**
     * Get the cum plaf2 caisse1.
     *
     * @return float|null Returns the cum plaf2 caisse1.
     */
    public function getCumPlaf2Caisse1(): ?float {
        return $this->cumPlaf2Caisse1;
    }

    /**
     * Get the cum plaf2 caisse2.
     *
     * @return float|null Returns the cum plaf2 caisse2.
     */
    public function getCumPlaf2Caisse2(): ?float {
        return $this->cumPlaf2Caisse2;
    }

    /**
     * Get the cum plaf2 caisse3.
     *
     * @return float|null Returns the cum plaf2 caisse3.
     */
    public function getCumPlaf2Caisse3(): ?float {
        return $this->cumPlaf2Caisse3;
    }

    /**
     * Get the cum plafond gmp.
     *
     * @return float|null Returns the cum plafond gmp.
     */
    public function getCumPlafondGmp(): ?float {
        return $this->cumPlafondGmp;
    }

    /**
     * Get the cum plafond ss1.
     *
     * @return float|null Returns the cum plafond ss1.
     */
    public function getCumPlafondSs1(): ?float {
        return $this->cumPlafondSs1;
    }

    /**
     * Get the cum plafond ss2.
     *
     * @return float|null Returns the cum plafond ss2.
     */
    public function getCumPlafondSs2(): ?float {
        return $this->cumPlafondSs2;
    }

    /**
     * Get the cum prov cp.
     *
     * @return float|null Returns the cum prov cp.
     */
    public function getCumProvCp(): ?float {
        return $this->cumProvCp;
    }

    /**
     * Get the cum prov cp1.
     *
     * @return float|null Returns the cum prov cp1.
     */
    public function getCumProvCp1(): ?float {
        return $this->cumProvCp1;
    }

    /**
     * Get the cum repos comp.
     *
     * @return float|null Returns the cum repos comp.
     */
    public function getCumReposComp(): ?float {
        return $this->cumReposComp;
    }

    /**
     * Get the cum rtt dus.
     *
     * @return float|null Returns the cum rtt dus.
     */
    public function getCumRttDus(): ?float {
        return $this->cumRttDus;
    }

    /**
     * Get the cum rtt pris.
     *
     * @return float|null Returns the cum rtt pris.
     */
    public function getCumRttPris(): ?float {
        return $this->cumRttPris;
    }

    /**
     * Get the cum tot si.
     *
     * @return float|null Returns the cum tot si.
     */
    public function getCumTotSi(): ?float {
        return $this->cumTotSi;
    }

    /**
     * Get the cum tranche2 sans si.
     *
     * @return float|null Returns the cum tranche2 sans si.
     */
    public function getCumTranche2SansSi(): ?float {
        return $this->cumTranche2SansSi;
    }

    /**
     * Get the cum tranche2 si.
     *
     * @return float|null Returns the cum tranche2 si.
     */
    public function getCumTranche2Si(): ?float {
        return $this->cumTranche2Si;
    }

    /**
     * Get the cum tranche a sans si.
     *
     * @return float|null Returns the cum tranche a sans si.
     */
    public function getCumTrancheASansSi(): ?float {
        return $this->cumTrancheASansSi;
    }

    /**
     * Get the cum tranche asi.
     *
     * @return float|null Returns the cum tranche asi.
     */
    public function getCumTrancheAsi(): ?float {
        return $this->cumTrancheAsi;
    }

    /**
     * Get the cum tranche b sans si.
     *
     * @return float|null Returns the cum tranche b sans si.
     */
    public function getCumTrancheBSansSi(): ?float {
        return $this->cumTrancheBSansSi;
    }

    /**
     * Get the cum tranche bsi.
     *
     * @return float|null Returns the cum tranche bsi.
     */
    public function getCumTrancheBsi(): ?float {
        return $this->cumTrancheBsi;
    }

    /**
     * Get the cum tranche c sans si.
     *
     * @return float|null Returns the cum tranche c sans si.
     */
    public function getCumTrancheCSansSi(): ?float {
        return $this->cumTrancheCSansSi;
    }

    /**
     * Get the cum tranche csi.
     *
     * @return float|null Returns the cum tranche csi.
     */
    public function getCumTrancheCsi(): ?float {
        return $this->cumTrancheCsi;
    }

    /**
     * Get the cum tranche d1 sans si.
     *
     * @return float|null Returns the cum tranche d1 sans si.
     */
    public function getCumTrancheD1SansSi(): ?float {
        return $this->cumTrancheD1SansSi;
    }

    /**
     * Get the cum tranche d sans si.
     *
     * @return float|null Returns the cum tranche d sans si.
     */
    public function getCumTrancheDSansSi(): ?float {
        return $this->cumTrancheDSansSi;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Set the annee.
     *
     * @param string|null $annee The annee.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setAnnee(?string $annee): CumulsAnneePrec {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the cum30 ss.
     *
     * @param float|null $cum30Ss The cum30 ss.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCum30Ss(?float $cum30Ss): CumulsAnneePrec {
        $this->cum30Ss = $cum30Ss;
        return $this;
    }

    /**
     * Set the cum base csg.
     *
     * @param float|null $cumBaseCsg The cum base csg.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseCsg(?float $cumBaseCsg): CumulsAnneePrec {
        $this->cumBaseCsg = $cumBaseCsg;
        return $this;
    }

    /**
     * Set the cum base gmp.
     *
     * @param float|null $cumBaseGmp The cum base gmp.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseGmp(?float $cumBaseGmp): CumulsAnneePrec {
        $this->cumBaseGmp = $cumBaseGmp;
        return $this;
    }

    /**
     * Set the cum base ss.
     *
     * @param float|null $cumBaseSs The cum base ss.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseSs(?float $cumBaseSs): CumulsAnneePrec {
        $this->cumBaseSs = $cumBaseSs;
        return $this;
    }

    /**
     * Set the cum base tr2.
     *
     * @param float|null $cumBaseTr2 The cum base tr2.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTr2(?float $cumBaseTr2): CumulsAnneePrec {
        $this->cumBaseTr2 = $cumBaseTr2;
        return $this;
    }

    /**
     * Set the cum base tr a.
     *
     * @param float|null $cumBaseTrA The cum base tr a.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrA(?float $cumBaseTrA): CumulsAnneePrec {
        $this->cumBaseTrA = $cumBaseTrA;
        return $this;
    }

    /**
     * Set the cum base tr a caisse1.
     *
     * @param float|null $cumBaseTrACaisse1 The cum base tr a caisse1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrACaisse1(?float $cumBaseTrACaisse1): CumulsAnneePrec {
        $this->cumBaseTrACaisse1 = $cumBaseTrACaisse1;
        return $this;
    }

    /**
     * Set the cum base tr a caisse2.
     *
     * @param float|null $cumBaseTrACaisse2 The cum base tr a caisse2.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrACaisse2(?float $cumBaseTrACaisse2): CumulsAnneePrec {
        $this->cumBaseTrACaisse2 = $cumBaseTrACaisse2;
        return $this;
    }

    /**
     * Set the cum base tr a caisse3.
     *
     * @param float|null $cumBaseTrACaisse3 The cum base tr a caisse3.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrACaisse3(?float $cumBaseTrACaisse3): CumulsAnneePrec {
        $this->cumBaseTrACaisse3 = $cumBaseTrACaisse3;
        return $this;
    }

    /**
     * Set the cum base tr b.
     *
     * @param float|null $cumBaseTrB The cum base tr b.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrB(?float $cumBaseTrB): CumulsAnneePrec {
        $this->cumBaseTrB = $cumBaseTrB;
        return $this;
    }

    /**
     * Set the cum base tr b caisse1.
     *
     * @param float|null $cumBaseTrBCaisse1 The cum base tr b caisse1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrBCaisse1(?float $cumBaseTrBCaisse1): CumulsAnneePrec {
        $this->cumBaseTrBCaisse1 = $cumBaseTrBCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr b caisse2.
     *
     * @param float|null $cumBaseTrBCaisse2 The cum base tr b caisse2.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrBCaisse2(?float $cumBaseTrBCaisse2): CumulsAnneePrec {
        $this->cumBaseTrBCaisse2 = $cumBaseTrBCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr b caisse3.
     *
     * @param float|null $cumBaseTrBCaisse3 The cum base tr b caisse3.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrBCaisse3(?float $cumBaseTrBCaisse3): CumulsAnneePrec {
        $this->cumBaseTrBCaisse3 = $cumBaseTrBCaisse3;
        return $this;
    }

    /**
     * Set the cum base tr c.
     *
     * @param float|null $cumBaseTrC The cum base tr c.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrC(?float $cumBaseTrC): CumulsAnneePrec {
        $this->cumBaseTrC = $cumBaseTrC;
        return $this;
    }

    /**
     * Set the cum base tr c caisse1.
     *
     * @param float|null $cumBaseTrCCaisse1 The cum base tr c caisse1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrCCaisse1(?float $cumBaseTrCCaisse1): CumulsAnneePrec {
        $this->cumBaseTrCCaisse1 = $cumBaseTrCCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr c caisse2.
     *
     * @param float|null $cumBaseTrCCaisse2 The cum base tr c caisse2.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrCCaisse2(?float $cumBaseTrCCaisse2): CumulsAnneePrec {
        $this->cumBaseTrCCaisse2 = $cumBaseTrCCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr c caisse3.
     *
     * @param float|null $cumBaseTrCCaisse3 The cum base tr c caisse3.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrCCaisse3(?float $cumBaseTrCCaisse3): CumulsAnneePrec {
        $this->cumBaseTrCCaisse3 = $cumBaseTrCCaisse3;
        return $this;
    }

    /**
     * Set the cum base tr d.
     *
     * @param float|null $cumBaseTrD The cum base tr d.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrD(?float $cumBaseTrD): CumulsAnneePrec {
        $this->cumBaseTrD = $cumBaseTrD;
        return $this;
    }

    /**
     * Set the cum base tr d1.
     *
     * @param float|null $cumBaseTrD1 The cum base tr d1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrD1(?float $cumBaseTrD1): CumulsAnneePrec {
        $this->cumBaseTrD1 = $cumBaseTrD1;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse1.
     *
     * @param float|null $cumBaseTrD1Caisse1 The cum base tr d1 caisse1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrD1Caisse1(?float $cumBaseTrD1Caisse1): CumulsAnneePrec {
        $this->cumBaseTrD1Caisse1 = $cumBaseTrD1Caisse1;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse2.
     *
     * @param float|null $cumBaseTrD1Caisse2 The cum base tr d1 caisse2.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrD1Caisse2(?float $cumBaseTrD1Caisse2): CumulsAnneePrec {
        $this->cumBaseTrD1Caisse2 = $cumBaseTrD1Caisse2;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse3.
     *
     * @param float|null $cumBaseTrD1Caisse3 The cum base tr d1 caisse3.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrD1Caisse3(?float $cumBaseTrD1Caisse3): CumulsAnneePrec {
        $this->cumBaseTrD1Caisse3 = $cumBaseTrD1Caisse3;
        return $this;
    }

    /**
     * Set the cum base tr d caisse1.
     *
     * @param float|null $cumBaseTrDCaisse1 The cum base tr d caisse1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrDCaisse1(?float $cumBaseTrDCaisse1): CumulsAnneePrec {
        $this->cumBaseTrDCaisse1 = $cumBaseTrDCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr d caisse2.
     *
     * @param float|null $cumBaseTrDCaisse2 The cum base tr d caisse2.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrDCaisse2(?float $cumBaseTrDCaisse2): CumulsAnneePrec {
        $this->cumBaseTrDCaisse2 = $cumBaseTrDCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr d caisse3.
     *
     * @param float|null $cumBaseTrDCaisse3 The cum base tr d caisse3.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBaseTrDCaisse3(?float $cumBaseTrDCaisse3): CumulsAnneePrec {
        $this->cumBaseTrDCaisse3 = $cumBaseTrDCaisse3;
        return $this;
    }

    /**
     * Set the cum brut abat non lim.
     *
     * @param float|null $cumBrutAbatNonLim The cum brut abat non lim.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBrutAbatNonLim(?float $cumBrutAbatNonLim): CumulsAnneePrec {
        $this->cumBrutAbatNonLim = $cumBrutAbatNonLim;
        return $this;
    }

    /**
     * Set the cum brut al.
     *
     * @param float|null $cumBrutAl The cum brut al.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBrutAl(?float $cumBrutAl): CumulsAnneePrec {
        $this->cumBrutAl = $cumBrutAl;
        return $this;
    }

    /**
     * Set the cum brut al sans si.
     *
     * @param float|null $cumBrutAlSansSi The cum brut al sans si.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBrutAlSansSi(?float $cumBrutAlSansSi): CumulsAnneePrec {
        $this->cumBrutAlSansSi = $cumBrutAlSansSi;
        return $this;
    }

    /**
     * Set the cum brut caisse1.
     *
     * @param float|null $cumBrutCaisse1 The cum brut caisse1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBrutCaisse1(?float $cumBrutCaisse1): CumulsAnneePrec {
        $this->cumBrutCaisse1 = $cumBrutCaisse1;
        return $this;
    }

    /**
     * Set the cum brut caisse2.
     *
     * @param float|null $cumBrutCaisse2 The cum brut caisse2.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBrutCaisse2(?float $cumBrutCaisse2): CumulsAnneePrec {
        $this->cumBrutCaisse2 = $cumBrutCaisse2;
        return $this;
    }

    /**
     * Set the cum brut caisse3.
     *
     * @param float|null $cumBrutCaisse3 The cum brut caisse3.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBrutCaisse3(?float $cumBrutCaisse3): CumulsAnneePrec {
        $this->cumBrutCaisse3 = $cumBrutCaisse3;
        return $this;
    }

    /**
     * Set the cum brut non abattu.
     *
     * @param float|null $cumBrutNonAbattu The cum brut non abattu.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumBrutNonAbattu(?float $cumBrutNonAbattu): CumulsAnneePrec {
        $this->cumBrutNonAbattu = $cumBrutNonAbattu;
        return $this;
    }

    /**
     * Set the cum cp dus.
     *
     * @param float|null $cumCpDus The cum cp dus.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumCpDus(?float $cumCpDus): CumulsAnneePrec {
        $this->cumCpDus = $cumCpDus;
        return $this;
    }

    /**
     * Set the cum cp dus1.
     *
     * @param float|null $cumCpDus1 The cum cp dus1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumCpDus1(?float $cumCpDus1): CumulsAnneePrec {
        $this->cumCpDus1 = $cumCpDus1;
        return $this;
    }

    /**
     * Set the cum cp pris.
     *
     * @param float|null $cumCpPris The cum cp pris.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumCpPris(?float $cumCpPris): CumulsAnneePrec {
        $this->cumCpPris = $cumCpPris;
        return $this;
    }

    /**
     * Set the cum cp pris1.
     *
     * @param float|null $cumCpPris1 The cum cp pris1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumCpPris1(?float $cumCpPris1): CumulsAnneePrec {
        $this->cumCpPris1 = $cumCpPris1;
        return $this;
    }

    /**
     * Set the cum dif dus.
     *
     * @param float|null $cumDifDus The cum dif dus.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumDifDus(?float $cumDifDus): CumulsAnneePrec {
        $this->cumDifDus = $cumDifDus;
        return $this;
    }

    /**
     * Set the cum dif dus1.
     *
     * @param float|null $cumDifDus1 The cum dif dus1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumDifDus1(?float $cumDifDus1): CumulsAnneePrec {
        $this->cumDifDus1 = $cumDifDus1;
        return $this;
    }

    /**
     * Set the cum h bonifie.
     *
     * @param float|null $cumHBonifie The cum h bonifie.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumHBonifie(?float $cumHBonifie): CumulsAnneePrec {
        $this->cumHBonifie = $cumHBonifie;
        return $this;
    }

    /**
     * Set the cum h repos remplace.
     *
     * @param float|null $cumHReposRemplace The cum h repos remplace.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumHReposRemplace(?float $cumHReposRemplace): CumulsAnneePrec {
        $this->cumHReposRemplace = $cumHReposRemplace;
        return $this;
    }

    /**
     * Set the cum h service.
     *
     * @param float|null $cumHService The cum h service.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumHService(?float $cumHService): CumulsAnneePrec {
        $this->cumHService = $cumHService;
        return $this;
    }

    /**
     * Set the cum h sup.
     *
     * @param float|null $cumHSup The cum h sup.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumHSup(?float $cumHSup): CumulsAnneePrec {
        $this->cumHSup = $cumHSup;
        return $this;
    }

    /**
     * Set the cum h sup rcit.
     *
     * @param float|null $cumHSupRcit The cum h sup rcit.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumHSupRcit(?float $cumHSupRcit): CumulsAnneePrec {
        $this->cumHSupRcit = $cumHSupRcit;
        return $this;
    }

    /**
     * Set the cum heure paye.
     *
     * @param float|null $cumHeurePaye The cum heure paye.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumHeurePaye(?float $cumHeurePaye): CumulsAnneePrec {
        $this->cumHeurePaye = $cumHeurePaye;
        return $this;
    }

    /**
     * Set the cum heure trav.
     *
     * @param float|null $cumHeureTrav The cum heure trav.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumHeureTrav(?float $cumHeureTrav): CumulsAnneePrec {
        $this->cumHeureTrav = $cumHeureTrav;
        return $this;
    }

    /**
     * Set the cum j repos recup.
     *
     * @param float|null $cumJReposRecup The cum j repos recup.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumJReposRecup(?float $cumJReposRecup): CumulsAnneePrec {
        $this->cumJReposRecup = $cumJReposRecup;
        return $this;
    }

    /**
     * Set the cum jour paye.
     *
     * @param float|null $cumJourPaye The cum jour paye.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumJourPaye(?float $cumJourPaye): CumulsAnneePrec {
        $this->cumJourPaye = $cumJourPaye;
        return $this;
    }

    /**
     * Set the cum jour trav.
     *
     * @param float|null $cumJourTrav The cum jour trav.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumJourTrav(?float $cumJourTrav): CumulsAnneePrec {
        $this->cumJourTrav = $cumJourTrav;
        return $this;
    }

    /**
     * Set the cum mt cp pris.
     *
     * @param float|null $cumMtCpPris The cum mt cp pris.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumMtCpPris(?float $cumMtCpPris): CumulsAnneePrec {
        $this->cumMtCpPris = $cumMtCpPris;
        return $this;
    }

    /**
     * Set the cum mt cp pris1.
     *
     * @param float|null $cumMtCpPris1 The cum mt cp pris1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumMtCpPris1(?float $cumMtCpPris1): CumulsAnneePrec {
        $this->cumMtCpPris1 = $cumMtCpPris1;
        return $this;
    }

    /**
     * Set the cum net a payer.
     *
     * @param float|null $cumNetAPayer The cum net a payer.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumNetAPayer(?float $cumNetAPayer): CumulsAnneePrec {
        $this->cumNetAPayer = $cumNetAPayer;
        return $this;
    }

    /**
     * Set the cum net imposable.
     *
     * @param float|null $cumNetImposable The cum net imposable.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumNetImposable(?float $cumNetImposable): CumulsAnneePrec {
        $this->cumNetImposable = $cumNetImposable;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse1.
     *
     * @param float|null $cumPlaf1Caisse1 The cum plaf1 caisse1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumPlaf1Caisse1(?float $cumPlaf1Caisse1): CumulsAnneePrec {
        $this->cumPlaf1Caisse1 = $cumPlaf1Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse2.
     *
     * @param float|null $cumPlaf1Caisse2 The cum plaf1 caisse2.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumPlaf1Caisse2(?float $cumPlaf1Caisse2): CumulsAnneePrec {
        $this->cumPlaf1Caisse2 = $cumPlaf1Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse3.
     *
     * @param float|null $cumPlaf1Caisse3 The cum plaf1 caisse3.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumPlaf1Caisse3(?float $cumPlaf1Caisse3): CumulsAnneePrec {
        $this->cumPlaf1Caisse3 = $cumPlaf1Caisse3;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse1.
     *
     * @param float|null $cumPlaf2Caisse1 The cum plaf2 caisse1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumPlaf2Caisse1(?float $cumPlaf2Caisse1): CumulsAnneePrec {
        $this->cumPlaf2Caisse1 = $cumPlaf2Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse2.
     *
     * @param float|null $cumPlaf2Caisse2 The cum plaf2 caisse2.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumPlaf2Caisse2(?float $cumPlaf2Caisse2): CumulsAnneePrec {
        $this->cumPlaf2Caisse2 = $cumPlaf2Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse3.
     *
     * @param float|null $cumPlaf2Caisse3 The cum plaf2 caisse3.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumPlaf2Caisse3(?float $cumPlaf2Caisse3): CumulsAnneePrec {
        $this->cumPlaf2Caisse3 = $cumPlaf2Caisse3;
        return $this;
    }

    /**
     * Set the cum plafond gmp.
     *
     * @param float|null $cumPlafondGmp The cum plafond gmp.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumPlafondGmp(?float $cumPlafondGmp): CumulsAnneePrec {
        $this->cumPlafondGmp = $cumPlafondGmp;
        return $this;
    }

    /**
     * Set the cum plafond ss1.
     *
     * @param float|null $cumPlafondSs1 The cum plafond ss1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumPlafondSs1(?float $cumPlafondSs1): CumulsAnneePrec {
        $this->cumPlafondSs1 = $cumPlafondSs1;
        return $this;
    }

    /**
     * Set the cum plafond ss2.
     *
     * @param float|null $cumPlafondSs2 The cum plafond ss2.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumPlafondSs2(?float $cumPlafondSs2): CumulsAnneePrec {
        $this->cumPlafondSs2 = $cumPlafondSs2;
        return $this;
    }

    /**
     * Set the cum prov cp.
     *
     * @param float|null $cumProvCp The cum prov cp.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumProvCp(?float $cumProvCp): CumulsAnneePrec {
        $this->cumProvCp = $cumProvCp;
        return $this;
    }

    /**
     * Set the cum prov cp1.
     *
     * @param float|null $cumProvCp1 The cum prov cp1.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumProvCp1(?float $cumProvCp1): CumulsAnneePrec {
        $this->cumProvCp1 = $cumProvCp1;
        return $this;
    }

    /**
     * Set the cum repos comp.
     *
     * @param float|null $cumReposComp The cum repos comp.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumReposComp(?float $cumReposComp): CumulsAnneePrec {
        $this->cumReposComp = $cumReposComp;
        return $this;
    }

    /**
     * Set the cum rtt dus.
     *
     * @param float|null $cumRttDus The cum rtt dus.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumRttDus(?float $cumRttDus): CumulsAnneePrec {
        $this->cumRttDus = $cumRttDus;
        return $this;
    }

    /**
     * Set the cum rtt pris.
     *
     * @param float|null $cumRttPris The cum rtt pris.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumRttPris(?float $cumRttPris): CumulsAnneePrec {
        $this->cumRttPris = $cumRttPris;
        return $this;
    }

    /**
     * Set the cum tot si.
     *
     * @param float|null $cumTotSi The cum tot si.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumTotSi(?float $cumTotSi): CumulsAnneePrec {
        $this->cumTotSi = $cumTotSi;
        return $this;
    }

    /**
     * Set the cum tranche2 sans si.
     *
     * @param float|null $cumTranche2SansSi The cum tranche2 sans si.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumTranche2SansSi(?float $cumTranche2SansSi): CumulsAnneePrec {
        $this->cumTranche2SansSi = $cumTranche2SansSi;
        return $this;
    }

    /**
     * Set the cum tranche2 si.
     *
     * @param float|null $cumTranche2Si The cum tranche2 si.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumTranche2Si(?float $cumTranche2Si): CumulsAnneePrec {
        $this->cumTranche2Si = $cumTranche2Si;
        return $this;
    }

    /**
     * Set the cum tranche a sans si.
     *
     * @param float|null $cumTrancheASansSi The cum tranche a sans si.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumTrancheASansSi(?float $cumTrancheASansSi): CumulsAnneePrec {
        $this->cumTrancheASansSi = $cumTrancheASansSi;
        return $this;
    }

    /**
     * Set the cum tranche asi.
     *
     * @param float|null $cumTrancheAsi The cum tranche asi.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumTrancheAsi(?float $cumTrancheAsi): CumulsAnneePrec {
        $this->cumTrancheAsi = $cumTrancheAsi;
        return $this;
    }

    /**
     * Set the cum tranche b sans si.
     *
     * @param float|null $cumTrancheBSansSi The cum tranche b sans si.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumTrancheBSansSi(?float $cumTrancheBSansSi): CumulsAnneePrec {
        $this->cumTrancheBSansSi = $cumTrancheBSansSi;
        return $this;
    }

    /**
     * Set the cum tranche bsi.
     *
     * @param float|null $cumTrancheBsi The cum tranche bsi.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumTrancheBsi(?float $cumTrancheBsi): CumulsAnneePrec {
        $this->cumTrancheBsi = $cumTrancheBsi;
        return $this;
    }

    /**
     * Set the cum tranche c sans si.
     *
     * @param float|null $cumTrancheCSansSi The cum tranche c sans si.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumTrancheCSansSi(?float $cumTrancheCSansSi): CumulsAnneePrec {
        $this->cumTrancheCSansSi = $cumTrancheCSansSi;
        return $this;
    }

    /**
     * Set the cum tranche csi.
     *
     * @param float|null $cumTrancheCsi The cum tranche csi.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumTrancheCsi(?float $cumTrancheCsi): CumulsAnneePrec {
        $this->cumTrancheCsi = $cumTrancheCsi;
        return $this;
    }

    /**
     * Set the cum tranche d1 sans si.
     *
     * @param float|null $cumTrancheD1SansSi The cum tranche d1 sans si.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumTrancheD1SansSi(?float $cumTrancheD1SansSi): CumulsAnneePrec {
        $this->cumTrancheD1SansSi = $cumTrancheD1SansSi;
        return $this;
    }

    /**
     * Set the cum tranche d sans si.
     *
     * @param float|null $cumTrancheDSansSi The cum tranche d sans si.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setCumTrancheDSansSi(?float $cumTrancheDSansSi): CumulsAnneePrec {
        $this->cumTrancheDSansSi = $cumTrancheDSansSi;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return CumulsAnneePrec Returns this Cumuls annee prec.
     */
    public function setNumeroEmploye(?string $numeroEmploye): CumulsAnneePrec {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }
}
