<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

use DateTime;

/**
 * Histo prep paie.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class HistoPrepPaie {

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Contingent h sup repos comp.
     *
     * @var float|null
     */
    private $contingentHSupReposComp;

    /**
     * Droit cp.
     *
     * @var float|null
     */
    private $droitCp;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * H prev.
     *
     * @var float|null
     */
    private $hPrev;

    /**
     * H rempl.
     *
     * @var float|null
     */
    private $hRempl;

    /**
     * H surcroit.
     *
     * @var float|null
     */
    private $hSurcroit;

    /**
     * Habs0.
     *
     * @var float|null
     */
    private $habs0;

    /**
     * Habs1.
     *
     * @var float|null
     */
    private $habs1;

    /**
     * Habs2.
     *
     * @var float|null
     */
    private $habs2;

    /**
     * Habs3.
     *
     * @var float|null
     */
    private $habs3;

    /**
     * Habs4.
     *
     * @var float|null
     */
    private $habs4;

    /**
     * Habs5.
     *
     * @var float|null
     */
    private $habs5;

    /**
     * Habs6.
     *
     * @var float|null
     */
    private $habs6;

    /**
     * Habs7.
     *
     * @var float|null
     */
    private $habs7;

    /**
     * Habs8.
     *
     * @var float|null
     */
    private $habs8;

    /**
     * Habs9.
     *
     * @var float|null
     */
    private $habs9;

    /**
     * Hacp.
     *
     * @var float|null
     */
    private $hacp;

    /**
     * Hc.
     *
     * @var float|null
     */
    private $hc;

    /**
     * Heures rc acquises.
     *
     * @var float|null
     */
    private $heuresRcAcquises;

    /**
     * Heures rr acquises.
     *
     * @var float|null
     */
    private $heuresRrAcquises;

    /**
     * Hs1.
     *
     * @var float|null
     */
    private $hs1;

    /**
     * Hs2.
     *
     * @var float|null
     */
    private $hs2;

    /**
     * Hs3.
     *
     * @var float|null
     */
    private $hs3;

    /**
     * Hs35 heures.
     *
     * @var float|null
     */
    private $hs35Heures;

    /**
     * Jacp.
     *
     * @var int|null
     */
    private $jacp;

    /**
     * Jours rtt acquis.
     *
     * @var float|null
     */
    private $joursRttAcquis;

    /**
     * Mensualisation.
     *
     * @var float|null
     */
    private $mensualisation;

    /**
     * Mt prime1 chantier.
     *
     * @var float|null
     */
    private $mtPrime1Chantier;

    /**
     * Mt prime2 chantier.
     *
     * @var float|null
     */
    private $mtPrime2Chantier;

    /**
     * Mt prime3 chantier.
     *
     * @var float|null
     */
    private $mtPrime3Chantier;

    /**
     * Mt prime forfait.
     *
     * @var float|null
     */
    private $mtPrimeForfait;

    /**
     * Nb heures rs.
     *
     * @var float|null
     */
    private $nbHeuresRs;

    /**
     * Nb heures tp.
     *
     * @var float|null
     */
    private $nbHeuresTp;

    /**
     * Nb paniers.
     *
     * @var float|null
     */
    private $nbPaniers;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Prime1.
     *
     * @var float|null
     */
    private $prime1;

    /**
     * Prime10.
     *
     * @var float|null
     */
    private $prime10;

    /**
     * Prime1 mai.
     *
     * @var float|null
     */
    private $prime1Mai;

    /**
     * Prime2.
     *
     * @var float|null
     */
    private $prime2;

    /**
     * Prime3.
     *
     * @var float|null
     */
    private $prime3;

    /**
     * Prime4.
     *
     * @var float|null
     */
    private $prime4;

    /**
     * Prime5.
     *
     * @var float|null
     */
    private $prime5;

    /**
     * Prime6.
     *
     * @var float|null
     */
    private $prime6;

    /**
     * Prime7.
     *
     * @var float|null
     */
    private $prime7;

    /**
     * Prime8.
     *
     * @var float|null
     */
    private $prime8;

    /**
     * Prime9.
     *
     * @var float|null
     */
    private $prime9;

    /**
     * Prime h compl maj.
     *
     * @var float|null
     */
    private $primeHComplMaj;

    /**
     * Prime h dim2 normal.
     *
     * @var float|null
     */
    private $primeHDim2Normal;

    /**
     * Prime h dim except.
     *
     * @var float|null
     */
    private $primeHDimExcept;

    /**
     * Prime h dim normal.
     *
     * @var float|null
     */
    private $primeHDimNormal;

    /**
     * Prime h nuit2 normal.
     *
     * @var float|null
     */
    private $primeHNuit2Normal;

    /**
     * Prime h nuit except.
     *
     * @var float|null
     */
    private $primeHNuitExcept;

    /**
     * Prime h nuit normal.
     *
     * @var float|null
     */
    private $primeHNuitNormal;

    /**
     * Prime jf2 normal.
     *
     * @var float|null
     */
    private $primeJf2Normal;

    /**
     * Prime jf except.
     *
     * @var float|null
     */
    private $primeJfExcept;

    /**
     * Prime jf normal.
     *
     * @var float|null
     */
    private $primeJfNormal;

    /**
     * Temps passe.
     *
     * @var float|null
     */
    private $tempsPasse;

    /**
     * Total h anal.
     *
     * @var float|null
     */
    private $totalHAnal;

    /**
     * Tx horaire rs.
     *
     * @var float|null
     */
    private $txHoraireRs;

    /**
     * Tx horaire tp.
     *
     * @var float|null
     */
    private $txHoraireTp;

    /**
     * Ya eu saisie manuelle.
     *
     * @var bool|null
     */
    private $yaEuSaisieManuelle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the contingent h sup repos comp.
     *
     * @return float|null Returns the contingent h sup repos comp.
     */
    public function getContingentHSupReposComp(): ?float {
        return $this->contingentHSupReposComp;
    }

    /**
     * Get the droit cp.
     *
     * @return float|null Returns the droit cp.
     */
    public function getDroitCp(): ?float {
        return $this->droitCp;
    }

    /**
     * Get the etat.
     *
     * @return string|null Returns the etat.
     */
    public function getEtat(): ?string {
        return $this->etat;
    }

    /**
     * Get the h prev.
     *
     * @return float|null Returns the h prev.
     */
    public function getHPrev(): ?float {
        return $this->hPrev;
    }

    /**
     * Get the h rempl.
     *
     * @return float|null Returns the h rempl.
     */
    public function getHRempl(): ?float {
        return $this->hRempl;
    }

    /**
     * Get the h surcroit.
     *
     * @return float|null Returns the h surcroit.
     */
    public function getHSurcroit(): ?float {
        return $this->hSurcroit;
    }

    /**
     * Get the habs0.
     *
     * @return float|null Returns the habs0.
     */
    public function getHabs0(): ?float {
        return $this->habs0;
    }

    /**
     * Get the habs1.
     *
     * @return float|null Returns the habs1.
     */
    public function getHabs1(): ?float {
        return $this->habs1;
    }

    /**
     * Get the habs2.
     *
     * @return float|null Returns the habs2.
     */
    public function getHabs2(): ?float {
        return $this->habs2;
    }

    /**
     * Get the habs3.
     *
     * @return float|null Returns the habs3.
     */
    public function getHabs3(): ?float {
        return $this->habs3;
    }

    /**
     * Get the habs4.
     *
     * @return float|null Returns the habs4.
     */
    public function getHabs4(): ?float {
        return $this->habs4;
    }

    /**
     * Get the habs5.
     *
     * @return float|null Returns the habs5.
     */
    public function getHabs5(): ?float {
        return $this->habs5;
    }

    /**
     * Get the habs6.
     *
     * @return float|null Returns the habs6.
     */
    public function getHabs6(): ?float {
        return $this->habs6;
    }

    /**
     * Get the habs7.
     *
     * @return float|null Returns the habs7.
     */
    public function getHabs7(): ?float {
        return $this->habs7;
    }

    /**
     * Get the habs8.
     *
     * @return float|null Returns the habs8.
     */
    public function getHabs8(): ?float {
        return $this->habs8;
    }

    /**
     * Get the habs9.
     *
     * @return float|null Returns the habs9.
     */
    public function getHabs9(): ?float {
        return $this->habs9;
    }

    /**
     * Get the hacp.
     *
     * @return float|null Returns the hacp.
     */
    public function getHacp(): ?float {
        return $this->hacp;
    }

    /**
     * Get the hc.
     *
     * @return float|null Returns the hc.
     */
    public function getHc(): ?float {
        return $this->hc;
    }

    /**
     * Get the heures rc acquises.
     *
     * @return float|null Returns the heures rc acquises.
     */
    public function getHeuresRcAcquises(): ?float {
        return $this->heuresRcAcquises;
    }

    /**
     * Get the heures rr acquises.
     *
     * @return float|null Returns the heures rr acquises.
     */
    public function getHeuresRrAcquises(): ?float {
        return $this->heuresRrAcquises;
    }

    /**
     * Get the hs1.
     *
     * @return float|null Returns the hs1.
     */
    public function getHs1(): ?float {
        return $this->hs1;
    }

    /**
     * Get the hs2.
     *
     * @return float|null Returns the hs2.
     */
    public function getHs2(): ?float {
        return $this->hs2;
    }

    /**
     * Get the hs3.
     *
     * @return float|null Returns the hs3.
     */
    public function getHs3(): ?float {
        return $this->hs3;
    }

    /**
     * Get the hs35 heures.
     *
     * @return float|null Returns the hs35 heures.
     */
    public function getHs35Heures(): ?float {
        return $this->hs35Heures;
    }

    /**
     * Get the jacp.
     *
     * @return int|null Returns the jacp.
     */
    public function getJacp(): ?int {
        return $this->jacp;
    }

    /**
     * Get the jours rtt acquis.
     *
     * @return float|null Returns the jours rtt acquis.
     */
    public function getJoursRttAcquis(): ?float {
        return $this->joursRttAcquis;
    }

    /**
     * Get the mensualisation.
     *
     * @return float|null Returns the mensualisation.
     */
    public function getMensualisation(): ?float {
        return $this->mensualisation;
    }

    /**
     * Get the mt prime1 chantier.
     *
     * @return float|null Returns the mt prime1 chantier.
     */
    public function getMtPrime1Chantier(): ?float {
        return $this->mtPrime1Chantier;
    }

    /**
     * Get the mt prime2 chantier.
     *
     * @return float|null Returns the mt prime2 chantier.
     */
    public function getMtPrime2Chantier(): ?float {
        return $this->mtPrime2Chantier;
    }

    /**
     * Get the mt prime3 chantier.
     *
     * @return float|null Returns the mt prime3 chantier.
     */
    public function getMtPrime3Chantier(): ?float {
        return $this->mtPrime3Chantier;
    }

    /**
     * Get the mt prime forfait.
     *
     * @return float|null Returns the mt prime forfait.
     */
    public function getMtPrimeForfait(): ?float {
        return $this->mtPrimeForfait;
    }

    /**
     * Get the nb heures rs.
     *
     * @return float|null Returns the nb heures rs.
     */
    public function getNbHeuresRs(): ?float {
        return $this->nbHeuresRs;
    }

    /**
     * Get the nb heures tp.
     *
     * @return float|null Returns the nb heures tp.
     */
    public function getNbHeuresTp(): ?float {
        return $this->nbHeuresTp;
    }

    /**
     * Get the nb paniers.
     *
     * @return float|null Returns the nb paniers.
     */
    public function getNbPaniers(): ?float {
        return $this->nbPaniers;
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
     * Get the prime1.
     *
     * @return float|null Returns the prime1.
     */
    public function getPrime1(): ?float {
        return $this->prime1;
    }

    /**
     * Get the prime10.
     *
     * @return float|null Returns the prime10.
     */
    public function getPrime10(): ?float {
        return $this->prime10;
    }

    /**
     * Get the prime1 mai.
     *
     * @return float|null Returns the prime1 mai.
     */
    public function getPrime1Mai(): ?float {
        return $this->prime1Mai;
    }

    /**
     * Get the prime2.
     *
     * @return float|null Returns the prime2.
     */
    public function getPrime2(): ?float {
        return $this->prime2;
    }

    /**
     * Get the prime3.
     *
     * @return float|null Returns the prime3.
     */
    public function getPrime3(): ?float {
        return $this->prime3;
    }

    /**
     * Get the prime4.
     *
     * @return float|null Returns the prime4.
     */
    public function getPrime4(): ?float {
        return $this->prime4;
    }

    /**
     * Get the prime5.
     *
     * @return float|null Returns the prime5.
     */
    public function getPrime5(): ?float {
        return $this->prime5;
    }

    /**
     * Get the prime6.
     *
     * @return float|null Returns the prime6.
     */
    public function getPrime6(): ?float {
        return $this->prime6;
    }

    /**
     * Get the prime7.
     *
     * @return float|null Returns the prime7.
     */
    public function getPrime7(): ?float {
        return $this->prime7;
    }

    /**
     * Get the prime8.
     *
     * @return float|null Returns the prime8.
     */
    public function getPrime8(): ?float {
        return $this->prime8;
    }

    /**
     * Get the prime9.
     *
     * @return float|null Returns the prime9.
     */
    public function getPrime9(): ?float {
        return $this->prime9;
    }

    /**
     * Get the prime h compl maj.
     *
     * @return float|null Returns the prime h compl maj.
     */
    public function getPrimeHComplMaj(): ?float {
        return $this->primeHComplMaj;
    }

    /**
     * Get the prime h dim2 normal.
     *
     * @return float|null Returns the prime h dim2 normal.
     */
    public function getPrimeHDim2Normal(): ?float {
        return $this->primeHDim2Normal;
    }

    /**
     * Get the prime h dim except.
     *
     * @return float|null Returns the prime h dim except.
     */
    public function getPrimeHDimExcept(): ?float {
        return $this->primeHDimExcept;
    }

    /**
     * Get the prime h dim normal.
     *
     * @return float|null Returns the prime h dim normal.
     */
    public function getPrimeHDimNormal(): ?float {
        return $this->primeHDimNormal;
    }

    /**
     * Get the prime h nuit2 normal.
     *
     * @return float|null Returns the prime h nuit2 normal.
     */
    public function getPrimeHNuit2Normal(): ?float {
        return $this->primeHNuit2Normal;
    }

    /**
     * Get the prime h nuit except.
     *
     * @return float|null Returns the prime h nuit except.
     */
    public function getPrimeHNuitExcept(): ?float {
        return $this->primeHNuitExcept;
    }

    /**
     * Get the prime h nuit normal.
     *
     * @return float|null Returns the prime h nuit normal.
     */
    public function getPrimeHNuitNormal(): ?float {
        return $this->primeHNuitNormal;
    }

    /**
     * Get the prime jf2 normal.
     *
     * @return float|null Returns the prime jf2 normal.
     */
    public function getPrimeJf2Normal(): ?float {
        return $this->primeJf2Normal;
    }

    /**
     * Get the prime jf except.
     *
     * @return float|null Returns the prime jf except.
     */
    public function getPrimeJfExcept(): ?float {
        return $this->primeJfExcept;
    }

    /**
     * Get the prime jf normal.
     *
     * @return float|null Returns the prime jf normal.
     */
    public function getPrimeJfNormal(): ?float {
        return $this->primeJfNormal;
    }

    /**
     * Get the temps passe.
     *
     * @return float|null Returns the temps passe.
     */
    public function getTempsPasse(): ?float {
        return $this->tempsPasse;
    }

    /**
     * Get the total h anal.
     *
     * @return float|null Returns the total h anal.
     */
    public function getTotalHAnal(): ?float {
        return $this->totalHAnal;
    }

    /**
     * Get the tx horaire rs.
     *
     * @return float|null Returns the tx horaire rs.
     */
    public function getTxHoraireRs(): ?float {
        return $this->txHoraireRs;
    }

    /**
     * Get the tx horaire tp.
     *
     * @return float|null Returns the tx horaire tp.
     */
    public function getTxHoraireTp(): ?float {
        return $this->txHoraireTp;
    }

    /**
     * Get the ya eu saisie manuelle.
     *
     * @return bool|null Returns the ya eu saisie manuelle.
     */
    public function getYaEuSaisieManuelle(): ?bool {
        return $this->yaEuSaisieManuelle;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setCodeEmploye(?string $codeEmploye): HistoPrepPaie {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the contingent h sup repos comp.
     *
     * @param float|null $contingentHSupReposComp The contingent h sup repos comp.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setContingentHSupReposComp(?float $contingentHSupReposComp): HistoPrepPaie {
        $this->contingentHSupReposComp = $contingentHSupReposComp;
        return $this;
    }

    /**
     * Set the droit cp.
     *
     * @param float|null $droitCp The droit cp.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setDroitCp(?float $droitCp): HistoPrepPaie {
        $this->droitCp = $droitCp;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setEtat(?string $etat): HistoPrepPaie {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the h prev.
     *
     * @param float|null $hPrev The h prev.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHPrev(?float $hPrev): HistoPrepPaie {
        $this->hPrev = $hPrev;
        return $this;
    }

    /**
     * Set the h rempl.
     *
     * @param float|null $hRempl The h rempl.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHRempl(?float $hRempl): HistoPrepPaie {
        $this->hRempl = $hRempl;
        return $this;
    }

    /**
     * Set the h surcroit.
     *
     * @param float|null $hSurcroit The h surcroit.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHSurcroit(?float $hSurcroit): HistoPrepPaie {
        $this->hSurcroit = $hSurcroit;
        return $this;
    }

    /**
     * Set the habs0.
     *
     * @param float|null $habs0 The habs0.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs0(?float $habs0): HistoPrepPaie {
        $this->habs0 = $habs0;
        return $this;
    }

    /**
     * Set the habs1.
     *
     * @param float|null $habs1 The habs1.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs1(?float $habs1): HistoPrepPaie {
        $this->habs1 = $habs1;
        return $this;
    }

    /**
     * Set the habs2.
     *
     * @param float|null $habs2 The habs2.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs2(?float $habs2): HistoPrepPaie {
        $this->habs2 = $habs2;
        return $this;
    }

    /**
     * Set the habs3.
     *
     * @param float|null $habs3 The habs3.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs3(?float $habs3): HistoPrepPaie {
        $this->habs3 = $habs3;
        return $this;
    }

    /**
     * Set the habs4.
     *
     * @param float|null $habs4 The habs4.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs4(?float $habs4): HistoPrepPaie {
        $this->habs4 = $habs4;
        return $this;
    }

    /**
     * Set the habs5.
     *
     * @param float|null $habs5 The habs5.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs5(?float $habs5): HistoPrepPaie {
        $this->habs5 = $habs5;
        return $this;
    }

    /**
     * Set the habs6.
     *
     * @param float|null $habs6 The habs6.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs6(?float $habs6): HistoPrepPaie {
        $this->habs6 = $habs6;
        return $this;
    }

    /**
     * Set the habs7.
     *
     * @param float|null $habs7 The habs7.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs7(?float $habs7): HistoPrepPaie {
        $this->habs7 = $habs7;
        return $this;
    }

    /**
     * Set the habs8.
     *
     * @param float|null $habs8 The habs8.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs8(?float $habs8): HistoPrepPaie {
        $this->habs8 = $habs8;
        return $this;
    }

    /**
     * Set the habs9.
     *
     * @param float|null $habs9 The habs9.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHabs9(?float $habs9): HistoPrepPaie {
        $this->habs9 = $habs9;
        return $this;
    }

    /**
     * Set the hacp.
     *
     * @param float|null $hacp The hacp.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHacp(?float $hacp): HistoPrepPaie {
        $this->hacp = $hacp;
        return $this;
    }

    /**
     * Set the hc.
     *
     * @param float|null $hc The hc.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHc(?float $hc): HistoPrepPaie {
        $this->hc = $hc;
        return $this;
    }

    /**
     * Set the heures rc acquises.
     *
     * @param float|null $heuresRcAcquises The heures rc acquises.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHeuresRcAcquises(?float $heuresRcAcquises): HistoPrepPaie {
        $this->heuresRcAcquises = $heuresRcAcquises;
        return $this;
    }

    /**
     * Set the heures rr acquises.
     *
     * @param float|null $heuresRrAcquises The heures rr acquises.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHeuresRrAcquises(?float $heuresRrAcquises): HistoPrepPaie {
        $this->heuresRrAcquises = $heuresRrAcquises;
        return $this;
    }

    /**
     * Set the hs1.
     *
     * @param float|null $hs1 The hs1.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHs1(?float $hs1): HistoPrepPaie {
        $this->hs1 = $hs1;
        return $this;
    }

    /**
     * Set the hs2.
     *
     * @param float|null $hs2 The hs2.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHs2(?float $hs2): HistoPrepPaie {
        $this->hs2 = $hs2;
        return $this;
    }

    /**
     * Set the hs3.
     *
     * @param float|null $hs3 The hs3.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHs3(?float $hs3): HistoPrepPaie {
        $this->hs3 = $hs3;
        return $this;
    }

    /**
     * Set the hs35 heures.
     *
     * @param float|null $hs35Heures The hs35 heures.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setHs35Heures(?float $hs35Heures): HistoPrepPaie {
        $this->hs35Heures = $hs35Heures;
        return $this;
    }

    /**
     * Set the jacp.
     *
     * @param int|null $jacp The jacp.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setJacp(?int $jacp): HistoPrepPaie {
        $this->jacp = $jacp;
        return $this;
    }

    /**
     * Set the jours rtt acquis.
     *
     * @param float|null $joursRttAcquis The jours rtt acquis.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setJoursRttAcquis(?float $joursRttAcquis): HistoPrepPaie {
        $this->joursRttAcquis = $joursRttAcquis;
        return $this;
    }

    /**
     * Set the mensualisation.
     *
     * @param float|null $mensualisation The mensualisation.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setMensualisation(?float $mensualisation): HistoPrepPaie {
        $this->mensualisation = $mensualisation;
        return $this;
    }

    /**
     * Set the mt prime1 chantier.
     *
     * @param float|null $mtPrime1Chantier The mt prime1 chantier.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setMtPrime1Chantier(?float $mtPrime1Chantier): HistoPrepPaie {
        $this->mtPrime1Chantier = $mtPrime1Chantier;
        return $this;
    }

    /**
     * Set the mt prime2 chantier.
     *
     * @param float|null $mtPrime2Chantier The mt prime2 chantier.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setMtPrime2Chantier(?float $mtPrime2Chantier): HistoPrepPaie {
        $this->mtPrime2Chantier = $mtPrime2Chantier;
        return $this;
    }

    /**
     * Set the mt prime3 chantier.
     *
     * @param float|null $mtPrime3Chantier The mt prime3 chantier.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setMtPrime3Chantier(?float $mtPrime3Chantier): HistoPrepPaie {
        $this->mtPrime3Chantier = $mtPrime3Chantier;
        return $this;
    }

    /**
     * Set the mt prime forfait.
     *
     * @param float|null $mtPrimeForfait The mt prime forfait.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setMtPrimeForfait(?float $mtPrimeForfait): HistoPrepPaie {
        $this->mtPrimeForfait = $mtPrimeForfait;
        return $this;
    }

    /**
     * Set the nb heures rs.
     *
     * @param float|null $nbHeuresRs The nb heures rs.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setNbHeuresRs(?float $nbHeuresRs): HistoPrepPaie {
        $this->nbHeuresRs = $nbHeuresRs;
        return $this;
    }

    /**
     * Set the nb heures tp.
     *
     * @param float|null $nbHeuresTp The nb heures tp.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setNbHeuresTp(?float $nbHeuresTp): HistoPrepPaie {
        $this->nbHeuresTp = $nbHeuresTp;
        return $this;
    }

    /**
     * Set the nb paniers.
     *
     * @param float|null $nbPaniers The nb paniers.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setNbPaniers(?float $nbPaniers): HistoPrepPaie {
        $this->nbPaniers = $nbPaniers;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPeriode(?DateTime $periode): HistoPrepPaie {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the prime1.
     *
     * @param float|null $prime1 The prime1.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime1(?float $prime1): HistoPrepPaie {
        $this->prime1 = $prime1;
        return $this;
    }

    /**
     * Set the prime10.
     *
     * @param float|null $prime10 The prime10.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime10(?float $prime10): HistoPrepPaie {
        $this->prime10 = $prime10;
        return $this;
    }

    /**
     * Set the prime1 mai.
     *
     * @param float|null $prime1Mai The prime1 mai.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime1Mai(?float $prime1Mai): HistoPrepPaie {
        $this->prime1Mai = $prime1Mai;
        return $this;
    }

    /**
     * Set the prime2.
     *
     * @param float|null $prime2 The prime2.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime2(?float $prime2): HistoPrepPaie {
        $this->prime2 = $prime2;
        return $this;
    }

    /**
     * Set the prime3.
     *
     * @param float|null $prime3 The prime3.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime3(?float $prime3): HistoPrepPaie {
        $this->prime3 = $prime3;
        return $this;
    }

    /**
     * Set the prime4.
     *
     * @param float|null $prime4 The prime4.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime4(?float $prime4): HistoPrepPaie {
        $this->prime4 = $prime4;
        return $this;
    }

    /**
     * Set the prime5.
     *
     * @param float|null $prime5 The prime5.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime5(?float $prime5): HistoPrepPaie {
        $this->prime5 = $prime5;
        return $this;
    }

    /**
     * Set the prime6.
     *
     * @param float|null $prime6 The prime6.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime6(?float $prime6): HistoPrepPaie {
        $this->prime6 = $prime6;
        return $this;
    }

    /**
     * Set the prime7.
     *
     * @param float|null $prime7 The prime7.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime7(?float $prime7): HistoPrepPaie {
        $this->prime7 = $prime7;
        return $this;
    }

    /**
     * Set the prime8.
     *
     * @param float|null $prime8 The prime8.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime8(?float $prime8): HistoPrepPaie {
        $this->prime8 = $prime8;
        return $this;
    }

    /**
     * Set the prime9.
     *
     * @param float|null $prime9 The prime9.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrime9(?float $prime9): HistoPrepPaie {
        $this->prime9 = $prime9;
        return $this;
    }

    /**
     * Set the prime h compl maj.
     *
     * @param float|null $primeHComplMaj The prime h compl maj.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHComplMaj(?float $primeHComplMaj): HistoPrepPaie {
        $this->primeHComplMaj = $primeHComplMaj;
        return $this;
    }

    /**
     * Set the prime h dim2 normal.
     *
     * @param float|null $primeHDim2Normal The prime h dim2 normal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHDim2Normal(?float $primeHDim2Normal): HistoPrepPaie {
        $this->primeHDim2Normal = $primeHDim2Normal;
        return $this;
    }

    /**
     * Set the prime h dim except.
     *
     * @param float|null $primeHDimExcept The prime h dim except.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHDimExcept(?float $primeHDimExcept): HistoPrepPaie {
        $this->primeHDimExcept = $primeHDimExcept;
        return $this;
    }

    /**
     * Set the prime h dim normal.
     *
     * @param float|null $primeHDimNormal The prime h dim normal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHDimNormal(?float $primeHDimNormal): HistoPrepPaie {
        $this->primeHDimNormal = $primeHDimNormal;
        return $this;
    }

    /**
     * Set the prime h nuit2 normal.
     *
     * @param float|null $primeHNuit2Normal The prime h nuit2 normal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHNuit2Normal(?float $primeHNuit2Normal): HistoPrepPaie {
        $this->primeHNuit2Normal = $primeHNuit2Normal;
        return $this;
    }

    /**
     * Set the prime h nuit except.
     *
     * @param float|null $primeHNuitExcept The prime h nuit except.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHNuitExcept(?float $primeHNuitExcept): HistoPrepPaie {
        $this->primeHNuitExcept = $primeHNuitExcept;
        return $this;
    }

    /**
     * Set the prime h nuit normal.
     *
     * @param float|null $primeHNuitNormal The prime h nuit normal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeHNuitNormal(?float $primeHNuitNormal): HistoPrepPaie {
        $this->primeHNuitNormal = $primeHNuitNormal;
        return $this;
    }

    /**
     * Set the prime jf2 normal.
     *
     * @param float|null $primeJf2Normal The prime jf2 normal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeJf2Normal(?float $primeJf2Normal): HistoPrepPaie {
        $this->primeJf2Normal = $primeJf2Normal;
        return $this;
    }

    /**
     * Set the prime jf except.
     *
     * @param float|null $primeJfExcept The prime jf except.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeJfExcept(?float $primeJfExcept): HistoPrepPaie {
        $this->primeJfExcept = $primeJfExcept;
        return $this;
    }

    /**
     * Set the prime jf normal.
     *
     * @param float|null $primeJfNormal The prime jf normal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setPrimeJfNormal(?float $primeJfNormal): HistoPrepPaie {
        $this->primeJfNormal = $primeJfNormal;
        return $this;
    }

    /**
     * Set the temps passe.
     *
     * @param float|null $tempsPasse The temps passe.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setTempsPasse(?float $tempsPasse): HistoPrepPaie {
        $this->tempsPasse = $tempsPasse;
        return $this;
    }

    /**
     * Set the total h anal.
     *
     * @param float|null $totalHAnal The total h anal.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setTotalHAnal(?float $totalHAnal): HistoPrepPaie {
        $this->totalHAnal = $totalHAnal;
        return $this;
    }

    /**
     * Set the tx horaire rs.
     *
     * @param float|null $txHoraireRs The tx horaire rs.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setTxHoraireRs(?float $txHoraireRs): HistoPrepPaie {
        $this->txHoraireRs = $txHoraireRs;
        return $this;
    }

    /**
     * Set the tx horaire tp.
     *
     * @param float|null $txHoraireTp The tx horaire tp.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setTxHoraireTp(?float $txHoraireTp): HistoPrepPaie {
        $this->txHoraireTp = $txHoraireTp;
        return $this;
    }

    /**
     * Set the ya eu saisie manuelle.
     *
     * @param bool|null $yaEuSaisieManuelle The ya eu saisie manuelle.
     * @return HistoPrepPaie Returns this Histo prep paie.
     */
    public function setYaEuSaisieManuelle(?bool $yaEuSaisieManuelle): HistoPrepPaie {
        $this->yaEuSaisieManuelle = $yaEuSaisieManuelle;
        return $this;
    }
}
