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
 * Emp dadsu calcul.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpDadsuCalcul {

    /**
     * Ancienn btp.
     *
     * @var DateTime|null
     */
    private $anciennBtp;

    /**
     * Annee somme isol.
     *
     * @var string|null
     */
    private $anneeSommeIsol;

    /**
     * Annee somme isol2.
     *
     * @var string|null
     */
    private $anneeSommeIsol2;

    /**
     * Annee somme isol3.
     *
     * @var string|null
     */
    private $anneeSommeIsol3;

    /**
     * Annee somme isol4.
     *
     * @var string|null
     */
    private $anneeSommeIsol4;

    /**
     * Annee somme isol5.
     *
     * @var string|null
     */
    private $anneeSommeIsol5;

    /**
     * Base brute cot ccpbtp.
     *
     * @var float|null
     */
    private $baseBruteCotCcpbtp;

    /**
     * Base brute cot oppbtp.
     *
     * @var float|null
     */
    private $baseBruteCotOppbtp;

    /**
     * Base brute cpbtp.
     *
     * @var float|null
     */
    private $baseBruteCpbtp;

    /**
     * Benef assedic.
     *
     * @var string|null
     */
    private $benefAssedic;

    /**
     * Brut ircantec.
     *
     * @var float|null
     */
    private $brutIrcantec;

    /**
     * Btp sal moyen.
     *
     * @var float|null
     */
    private $btpSalMoyen;

    /**
     * Code class btp.
     *
     * @var string|null
     */
    private $codeClassBtp;

    /**
     * Code duree trav.
     *
     * @var string|null
     */
    private $codeDureeTrav;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code lib b plaf.
     *
     * @var string|null
     */
    private $codeLibBPlaf;

    /**
     * Code lib b plaf2.
     *
     * @var string|null
     */
    private $codeLibBPlaf2;

    /**
     * Code lib b plaf3.
     *
     * @var string|null
     */
    private $codeLibBPlaf3;

    /**
     * Code lib b plaf4.
     *
     * @var string|null
     */
    private $codeLibBPlaf4;

    /**
     * Code lib b plaf5.
     *
     * @var string|null
     */
    private $codeLibBPlaf5;

    /**
     * Code lib brut.
     *
     * @var string|null
     */
    private $codeLibBrut;

    /**
     * Code lib brut2.
     *
     * @var string|null
     */
    private $codeLibBrut2;

    /**
     * Code lib brut3.
     *
     * @var string|null
     */
    private $codeLibBrut3;

    /**
     * Code lib brut4.
     *
     * @var string|null
     */
    private $codeLibBrut4;

    /**
     * Code lib brut5.
     *
     * @var string|null
     */
    private $codeLibBrut5;

    /**
     * Code lib csg.
     *
     * @var string|null
     */
    private $codeLibCsg;

    /**
     * Code lib irc1.
     *
     * @var string|null
     */
    private $codeLibIrc1;

    /**
     * Code lib irc2.
     *
     * @var string|null
     */
    private $codeLibIrc2;

    /**
     * Code lib irc3.
     *
     * @var string|null
     */
    private $codeLibIrc3;

    /**
     * Code lib somme.
     *
     * @var string|null
     */
    private $codeLibSomme;

    /**
     * Code lib somme2.
     *
     * @var string|null
     */
    private $codeLibSomme2;

    /**
     * Code lib somme3.
     *
     * @var string|null
     */
    private $codeLibSomme3;

    /**
     * Code lib somme4.
     *
     * @var string|null
     */
    private $codeLibSomme4;

    /**
     * Code lib somme5.
     *
     * @var string|null
     */
    private $codeLibSomme5;

    /**
     * Code metier btp.
     *
     * @var string|null
     */
    private $codeMetierBtp;

    /**
     * Code type b plaf.
     *
     * @var string|null
     */
    private $codeTypeBPlaf;

    /**
     * Code type b plaf2.
     *
     * @var string|null
     */
    private $codeTypeBPlaf2;

    /**
     * Code type b plaf3.
     *
     * @var string|null
     */
    private $codeTypeBPlaf3;

    /**
     * Code type b plaf4.
     *
     * @var string|null
     */
    private $codeTypeBPlaf4;

    /**
     * Code type b plaf5.
     *
     * @var string|null
     */
    private $codeTypeBPlaf5;

    /**
     * Code type brut.
     *
     * @var string|null
     */
    private $codeTypeBrut;

    /**
     * Code type brut2.
     *
     * @var string|null
     */
    private $codeTypeBrut2;

    /**
     * Code type brut3.
     *
     * @var string|null
     */
    private $codeTypeBrut3;

    /**
     * Code type brut4.
     *
     * @var string|null
     */
    private $codeTypeBrut4;

    /**
     * Code type brut5.
     *
     * @var string|null
     */
    private $codeTypeBrut5;

    /**
     * Code type somme.
     *
     * @var string|null
     */
    private $codeTypeSomme;

    /**
     * Code type somme2.
     *
     * @var string|null
     */
    private $codeTypeSomme2;

    /**
     * Code type somme3.
     *
     * @var string|null
     */
    private $codeTypeSomme3;

    /**
     * Code type somme4.
     *
     * @var string|null
     */
    private $codeTypeSomme4;

    /**
     * Code type somme5.
     *
     * @var string|null
     */
    private $codeTypeSomme5;

    /**
     * Csg specif.
     *
     * @var float|null
     */
    private $csgSpecif;

    /**
     * Duree trav.
     *
     * @var float|null
     */
    private $dureeTrav;

    /**
     * Exo h code1.
     *
     * @var string|null
     */
    private $exoHCode1;

    /**
     * Exo h code2.
     *
     * @var string|null
     */
    private $exoHCode2;

    /**
     * Exo h code3.
     *
     * @var string|null
     */
    private $exoHCode3;

    /**
     * Exo h code4.
     *
     * @var string|null
     */
    private $exoHCode4;

    /**
     * Exo h code5.
     *
     * @var string|null
     */
    private $exoHCode5;

    /**
     * Exo h mnt1.
     *
     * @var float|null
     */
    private $exoHMnt1;

    /**
     * Exo h mnt2.
     *
     * @var float|null
     */
    private $exoHMnt2;

    /**
     * Exo h mnt3.
     *
     * @var float|null
     */
    private $exoHMnt3;

    /**
     * Exo h mnt4.
     *
     * @var float|null
     */
    private $exoHMnt4;

    /**
     * Exo h mnt5.
     *
     * @var float|null
     */
    private $exoHMnt5;

    /**
     * Exo h mnt deduc cot pat1.
     *
     * @var float|null
     */
    private $exoHMntDeducCotPat1;

    /**
     * Exo h mnt deduc cot pat2.
     *
     * @var float|null
     */
    private $exoHMntDeducCotPat2;

    /**
     * Exo h mnt deduc cot pat3.
     *
     * @var float|null
     */
    private $exoHMntDeducCotPat3;

    /**
     * Exo h mnt deduc cot pat4.
     *
     * @var float|null
     */
    private $exoHMntDeducCotPat4;

    /**
     * Exo h mnt deduc cot pat5.
     *
     * @var float|null
     */
    private $exoHMntDeducCotPat5;

    /**
     * Exo h mnt deduc cot pat tot.
     *
     * @var float|null
     */
    private $exoHMntDeducCotPatTot;

    /**
     * Exo h mnt reduc cot sal1.
     *
     * @var float|null
     */
    private $exoHMntReducCotSal1;

    /**
     * Exo h mnt reduc cot sal2.
     *
     * @var float|null
     */
    private $exoHMntReducCotSal2;

    /**
     * Exo h mnt reduc cot sal3.
     *
     * @var float|null
     */
    private $exoHMntReducCotSal3;

    /**
     * Exo h mnt reduc cot sal4.
     *
     * @var float|null
     */
    private $exoHMntReducCotSal4;

    /**
     * Exo h mnt reduc cot sal5.
     *
     * @var float|null
     */
    private $exoHMntReducCotSal5;

    /**
     * Exo h mnt reduc cot sal tot.
     *
     * @var float|null
     */
    private $exoHMntReducCotSalTot;

    /**
     * Exo h nb hj1.
     *
     * @var float|null
     */
    private $exoHNbHj1;

    /**
     * Exo h nb hj2.
     *
     * @var float|null
     */
    private $exoHNbHj2;

    /**
     * Exo h nb hj3.
     *
     * @var float|null
     */
    private $exoHNbHj3;

    /**
     * Exo h nb hj4.
     *
     * @var float|null
     */
    private $exoHNbHj4;

    /**
     * Exo h nb hj5.
     *
     * @var float|null
     */
    private $exoHNbHj5;

    /**
     * Forma pro base.
     *
     * @var float|null
     */
    private $formaProBase;

    /**
     * Forma pro base cdd.
     *
     * @var float|null
     */
    private $formaProBaseCdd;

    /**
     * Ind cp.
     *
     * @var float|null
     */
    private $indCp;

    /**
     * Ind intemp.
     *
     * @var float|null
     */
    private $indIntemp;

    /**
     * Montant b plaf.
     *
     * @var float|null
     */
    private $montantBPlaf;

    /**
     * Montant b plaf2.
     *
     * @var float|null
     */
    private $montantBPlaf2;

    /**
     * Montant b plaf3.
     *
     * @var float|null
     */
    private $montantBPlaf3;

    /**
     * Montant b plaf4.
     *
     * @var float|null
     */
    private $montantBPlaf4;

    /**
     * Montant b plaf5.
     *
     * @var float|null
     */
    private $montantBPlaf5;

    /**
     * Montant brut.
     *
     * @var float|null
     */
    private $montantBrut;

    /**
     * Montant brut2.
     *
     * @var float|null
     */
    private $montantBrut2;

    /**
     * Montant brut3.
     *
     * @var float|null
     */
    private $montantBrut3;

    /**
     * Montant brut4.
     *
     * @var float|null
     */
    private $montantBrut4;

    /**
     * Montant brut5.
     *
     * @var float|null
     */
    private $montantBrut5;

    /**
     * Montant somme isol brut.
     *
     * @var float|null
     */
    private $montantSommeIsolBrut;

    /**
     * Montant somme isol brut2.
     *
     * @var float|null
     */
    private $montantSommeIsolBrut2;

    /**
     * Montant somme isol brut3.
     *
     * @var float|null
     */
    private $montantSommeIsolBrut3;

    /**
     * Montant somme isol brut4.
     *
     * @var float|null
     */
    private $montantSommeIsolBrut4;

    /**
     * Montant somme isol brut5.
     *
     * @var float|null
     */
    private $montantSommeIsolBrut5;

    /**
     * Montant somme isol plaf.
     *
     * @var float|null
     */
    private $montantSommeIsolPlaf;

    /**
     * Montant somme isol plaf2.
     *
     * @var float|null
     */
    private $montantSommeIsolPlaf2;

    /**
     * Montant somme isol plaf3.
     *
     * @var float|null
     */
    private $montantSommeIsolPlaf3;

    /**
     * Montant somme isol plaf4.
     *
     * @var float|null
     */
    private $montantSommeIsolPlaf4;

    /**
     * Montant somme isol plaf5.
     *
     * @var float|null
     */
    private $montantSommeIsolPlaf5;

    /**
     * Mt j rtt2007.
     *
     * @var float|null
     */
    private $mtJRtt2007;

    /**
     * Nb j rtt2007.
     *
     * @var float|null
     */
    private $nbJRtt2007;

    /**
     * Nb periode.
     *
     * @var float|null
     */
    private $nbPeriode;

    /**
     * Nbh chom partiel.
     *
     * @var float|null
     */
    private $nbhChomPartiel;

    /**
     * Nbh sem ircantec.
     *
     * @var float|null
     */
    private $nbhSemIrcantec;

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
     * Plaf ircantec.
     *
     * @var float|null
     */
    private $plafIrcantec;

    /**
     * Qualif unite temps.
     *
     * @var string|null
     */
    private $qualifUniteTemps;

    /**
     * Suppl fam.
     *
     * @var float|null
     */
    private $supplFam;

    /**
     * Taxe apprentissage base.
     *
     * @var float|null
     */
    private $taxeApprentissageBase;

    /**
     * Taxe salaire.
     *
     * @var float|null
     */
    private $taxeSalaire;

    /**
     * Tr a ircantec.
     *
     * @var float|null
     */
    private $trAIrcantec;

    /**
     * Tr b ircantec.
     *
     * @var float|null
     */
    private $trBIrcantec;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ancienn btp.
     *
     * @return DateTime|null Returns the ancienn btp.
     */
    public function getAnciennBtp(): ?DateTime {
        return $this->anciennBtp;
    }

    /**
     * Get the annee somme isol.
     *
     * @return string|null Returns the annee somme isol.
     */
    public function getAnneeSommeIsol(): ?string {
        return $this->anneeSommeIsol;
    }

    /**
     * Get the annee somme isol2.
     *
     * @return string|null Returns the annee somme isol2.
     */
    public function getAnneeSommeIsol2(): ?string {
        return $this->anneeSommeIsol2;
    }

    /**
     * Get the annee somme isol3.
     *
     * @return string|null Returns the annee somme isol3.
     */
    public function getAnneeSommeIsol3(): ?string {
        return $this->anneeSommeIsol3;
    }

    /**
     * Get the annee somme isol4.
     *
     * @return string|null Returns the annee somme isol4.
     */
    public function getAnneeSommeIsol4(): ?string {
        return $this->anneeSommeIsol4;
    }

    /**
     * Get the annee somme isol5.
     *
     * @return string|null Returns the annee somme isol5.
     */
    public function getAnneeSommeIsol5(): ?string {
        return $this->anneeSommeIsol5;
    }

    /**
     * Get the base brute cot ccpbtp.
     *
     * @return float|null Returns the base brute cot ccpbtp.
     */
    public function getBaseBruteCotCcpbtp(): ?float {
        return $this->baseBruteCotCcpbtp;
    }

    /**
     * Get the base brute cot oppbtp.
     *
     * @return float|null Returns the base brute cot oppbtp.
     */
    public function getBaseBruteCotOppbtp(): ?float {
        return $this->baseBruteCotOppbtp;
    }

    /**
     * Get the base brute cpbtp.
     *
     * @return float|null Returns the base brute cpbtp.
     */
    public function getBaseBruteCpbtp(): ?float {
        return $this->baseBruteCpbtp;
    }

    /**
     * Get the benef assedic.
     *
     * @return string|null Returns the benef assedic.
     */
    public function getBenefAssedic(): ?string {
        return $this->benefAssedic;
    }

    /**
     * Get the brut ircantec.
     *
     * @return float|null Returns the brut ircantec.
     */
    public function getBrutIrcantec(): ?float {
        return $this->brutIrcantec;
    }

    /**
     * Get the btp sal moyen.
     *
     * @return float|null Returns the btp sal moyen.
     */
    public function getBtpSalMoyen(): ?float {
        return $this->btpSalMoyen;
    }

    /**
     * Get the code class btp.
     *
     * @return string|null Returns the code class btp.
     */
    public function getCodeClassBtp(): ?string {
        return $this->codeClassBtp;
    }

    /**
     * Get the code duree trav.
     *
     * @return string|null Returns the code duree trav.
     */
    public function getCodeDureeTrav(): ?string {
        return $this->codeDureeTrav;
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
     * Get the code lib b plaf.
     *
     * @return string|null Returns the code lib b plaf.
     */
    public function getCodeLibBPlaf(): ?string {
        return $this->codeLibBPlaf;
    }

    /**
     * Get the code lib b plaf2.
     *
     * @return string|null Returns the code lib b plaf2.
     */
    public function getCodeLibBPlaf2(): ?string {
        return $this->codeLibBPlaf2;
    }

    /**
     * Get the code lib b plaf3.
     *
     * @return string|null Returns the code lib b plaf3.
     */
    public function getCodeLibBPlaf3(): ?string {
        return $this->codeLibBPlaf3;
    }

    /**
     * Get the code lib b plaf4.
     *
     * @return string|null Returns the code lib b plaf4.
     */
    public function getCodeLibBPlaf4(): ?string {
        return $this->codeLibBPlaf4;
    }

    /**
     * Get the code lib b plaf5.
     *
     * @return string|null Returns the code lib b plaf5.
     */
    public function getCodeLibBPlaf5(): ?string {
        return $this->codeLibBPlaf5;
    }

    /**
     * Get the code lib brut.
     *
     * @return string|null Returns the code lib brut.
     */
    public function getCodeLibBrut(): ?string {
        return $this->codeLibBrut;
    }

    /**
     * Get the code lib brut2.
     *
     * @return string|null Returns the code lib brut2.
     */
    public function getCodeLibBrut2(): ?string {
        return $this->codeLibBrut2;
    }

    /**
     * Get the code lib brut3.
     *
     * @return string|null Returns the code lib brut3.
     */
    public function getCodeLibBrut3(): ?string {
        return $this->codeLibBrut3;
    }

    /**
     * Get the code lib brut4.
     *
     * @return string|null Returns the code lib brut4.
     */
    public function getCodeLibBrut4(): ?string {
        return $this->codeLibBrut4;
    }

    /**
     * Get the code lib brut5.
     *
     * @return string|null Returns the code lib brut5.
     */
    public function getCodeLibBrut5(): ?string {
        return $this->codeLibBrut5;
    }

    /**
     * Get the code lib csg.
     *
     * @return string|null Returns the code lib csg.
     */
    public function getCodeLibCsg(): ?string {
        return $this->codeLibCsg;
    }

    /**
     * Get the code lib irc1.
     *
     * @return string|null Returns the code lib irc1.
     */
    public function getCodeLibIrc1(): ?string {
        return $this->codeLibIrc1;
    }

    /**
     * Get the code lib irc2.
     *
     * @return string|null Returns the code lib irc2.
     */
    public function getCodeLibIrc2(): ?string {
        return $this->codeLibIrc2;
    }

    /**
     * Get the code lib irc3.
     *
     * @return string|null Returns the code lib irc3.
     */
    public function getCodeLibIrc3(): ?string {
        return $this->codeLibIrc3;
    }

    /**
     * Get the code lib somme.
     *
     * @return string|null Returns the code lib somme.
     */
    public function getCodeLibSomme(): ?string {
        return $this->codeLibSomme;
    }

    /**
     * Get the code lib somme2.
     *
     * @return string|null Returns the code lib somme2.
     */
    public function getCodeLibSomme2(): ?string {
        return $this->codeLibSomme2;
    }

    /**
     * Get the code lib somme3.
     *
     * @return string|null Returns the code lib somme3.
     */
    public function getCodeLibSomme3(): ?string {
        return $this->codeLibSomme3;
    }

    /**
     * Get the code lib somme4.
     *
     * @return string|null Returns the code lib somme4.
     */
    public function getCodeLibSomme4(): ?string {
        return $this->codeLibSomme4;
    }

    /**
     * Get the code lib somme5.
     *
     * @return string|null Returns the code lib somme5.
     */
    public function getCodeLibSomme5(): ?string {
        return $this->codeLibSomme5;
    }

    /**
     * Get the code metier btp.
     *
     * @return string|null Returns the code metier btp.
     */
    public function getCodeMetierBtp(): ?string {
        return $this->codeMetierBtp;
    }

    /**
     * Get the code type b plaf.
     *
     * @return string|null Returns the code type b plaf.
     */
    public function getCodeTypeBPlaf(): ?string {
        return $this->codeTypeBPlaf;
    }

    /**
     * Get the code type b plaf2.
     *
     * @return string|null Returns the code type b plaf2.
     */
    public function getCodeTypeBPlaf2(): ?string {
        return $this->codeTypeBPlaf2;
    }

    /**
     * Get the code type b plaf3.
     *
     * @return string|null Returns the code type b plaf3.
     */
    public function getCodeTypeBPlaf3(): ?string {
        return $this->codeTypeBPlaf3;
    }

    /**
     * Get the code type b plaf4.
     *
     * @return string|null Returns the code type b plaf4.
     */
    public function getCodeTypeBPlaf4(): ?string {
        return $this->codeTypeBPlaf4;
    }

    /**
     * Get the code type b plaf5.
     *
     * @return string|null Returns the code type b plaf5.
     */
    public function getCodeTypeBPlaf5(): ?string {
        return $this->codeTypeBPlaf5;
    }

    /**
     * Get the code type brut.
     *
     * @return string|null Returns the code type brut.
     */
    public function getCodeTypeBrut(): ?string {
        return $this->codeTypeBrut;
    }

    /**
     * Get the code type brut2.
     *
     * @return string|null Returns the code type brut2.
     */
    public function getCodeTypeBrut2(): ?string {
        return $this->codeTypeBrut2;
    }

    /**
     * Get the code type brut3.
     *
     * @return string|null Returns the code type brut3.
     */
    public function getCodeTypeBrut3(): ?string {
        return $this->codeTypeBrut3;
    }

    /**
     * Get the code type brut4.
     *
     * @return string|null Returns the code type brut4.
     */
    public function getCodeTypeBrut4(): ?string {
        return $this->codeTypeBrut4;
    }

    /**
     * Get the code type brut5.
     *
     * @return string|null Returns the code type brut5.
     */
    public function getCodeTypeBrut5(): ?string {
        return $this->codeTypeBrut5;
    }

    /**
     * Get the code type somme.
     *
     * @return string|null Returns the code type somme.
     */
    public function getCodeTypeSomme(): ?string {
        return $this->codeTypeSomme;
    }

    /**
     * Get the code type somme2.
     *
     * @return string|null Returns the code type somme2.
     */
    public function getCodeTypeSomme2(): ?string {
        return $this->codeTypeSomme2;
    }

    /**
     * Get the code type somme3.
     *
     * @return string|null Returns the code type somme3.
     */
    public function getCodeTypeSomme3(): ?string {
        return $this->codeTypeSomme3;
    }

    /**
     * Get the code type somme4.
     *
     * @return string|null Returns the code type somme4.
     */
    public function getCodeTypeSomme4(): ?string {
        return $this->codeTypeSomme4;
    }

    /**
     * Get the code type somme5.
     *
     * @return string|null Returns the code type somme5.
     */
    public function getCodeTypeSomme5(): ?string {
        return $this->codeTypeSomme5;
    }

    /**
     * Get the csg specif.
     *
     * @return float|null Returns the csg specif.
     */
    public function getCsgSpecif(): ?float {
        return $this->csgSpecif;
    }

    /**
     * Get the duree trav.
     *
     * @return float|null Returns the duree trav.
     */
    public function getDureeTrav(): ?float {
        return $this->dureeTrav;
    }

    /**
     * Get the exo h code1.
     *
     * @return string|null Returns the exo h code1.
     */
    public function getExoHCode1(): ?string {
        return $this->exoHCode1;
    }

    /**
     * Get the exo h code2.
     *
     * @return string|null Returns the exo h code2.
     */
    public function getExoHCode2(): ?string {
        return $this->exoHCode2;
    }

    /**
     * Get the exo h code3.
     *
     * @return string|null Returns the exo h code3.
     */
    public function getExoHCode3(): ?string {
        return $this->exoHCode3;
    }

    /**
     * Get the exo h code4.
     *
     * @return string|null Returns the exo h code4.
     */
    public function getExoHCode4(): ?string {
        return $this->exoHCode4;
    }

    /**
     * Get the exo h code5.
     *
     * @return string|null Returns the exo h code5.
     */
    public function getExoHCode5(): ?string {
        return $this->exoHCode5;
    }

    /**
     * Get the exo h mnt1.
     *
     * @return float|null Returns the exo h mnt1.
     */
    public function getExoHMnt1(): ?float {
        return $this->exoHMnt1;
    }

    /**
     * Get the exo h mnt2.
     *
     * @return float|null Returns the exo h mnt2.
     */
    public function getExoHMnt2(): ?float {
        return $this->exoHMnt2;
    }

    /**
     * Get the exo h mnt3.
     *
     * @return float|null Returns the exo h mnt3.
     */
    public function getExoHMnt3(): ?float {
        return $this->exoHMnt3;
    }

    /**
     * Get the exo h mnt4.
     *
     * @return float|null Returns the exo h mnt4.
     */
    public function getExoHMnt4(): ?float {
        return $this->exoHMnt4;
    }

    /**
     * Get the exo h mnt5.
     *
     * @return float|null Returns the exo h mnt5.
     */
    public function getExoHMnt5(): ?float {
        return $this->exoHMnt5;
    }

    /**
     * Get the exo h mnt deduc cot pat1.
     *
     * @return float|null Returns the exo h mnt deduc cot pat1.
     */
    public function getExoHMntDeducCotPat1(): ?float {
        return $this->exoHMntDeducCotPat1;
    }

    /**
     * Get the exo h mnt deduc cot pat2.
     *
     * @return float|null Returns the exo h mnt deduc cot pat2.
     */
    public function getExoHMntDeducCotPat2(): ?float {
        return $this->exoHMntDeducCotPat2;
    }

    /**
     * Get the exo h mnt deduc cot pat3.
     *
     * @return float|null Returns the exo h mnt deduc cot pat3.
     */
    public function getExoHMntDeducCotPat3(): ?float {
        return $this->exoHMntDeducCotPat3;
    }

    /**
     * Get the exo h mnt deduc cot pat4.
     *
     * @return float|null Returns the exo h mnt deduc cot pat4.
     */
    public function getExoHMntDeducCotPat4(): ?float {
        return $this->exoHMntDeducCotPat4;
    }

    /**
     * Get the exo h mnt deduc cot pat5.
     *
     * @return float|null Returns the exo h mnt deduc cot pat5.
     */
    public function getExoHMntDeducCotPat5(): ?float {
        return $this->exoHMntDeducCotPat5;
    }

    /**
     * Get the exo h mnt deduc cot pat tot.
     *
     * @return float|null Returns the exo h mnt deduc cot pat tot.
     */
    public function getExoHMntDeducCotPatTot(): ?float {
        return $this->exoHMntDeducCotPatTot;
    }

    /**
     * Get the exo h mnt reduc cot sal1.
     *
     * @return float|null Returns the exo h mnt reduc cot sal1.
     */
    public function getExoHMntReducCotSal1(): ?float {
        return $this->exoHMntReducCotSal1;
    }

    /**
     * Get the exo h mnt reduc cot sal2.
     *
     * @return float|null Returns the exo h mnt reduc cot sal2.
     */
    public function getExoHMntReducCotSal2(): ?float {
        return $this->exoHMntReducCotSal2;
    }

    /**
     * Get the exo h mnt reduc cot sal3.
     *
     * @return float|null Returns the exo h mnt reduc cot sal3.
     */
    public function getExoHMntReducCotSal3(): ?float {
        return $this->exoHMntReducCotSal3;
    }

    /**
     * Get the exo h mnt reduc cot sal4.
     *
     * @return float|null Returns the exo h mnt reduc cot sal4.
     */
    public function getExoHMntReducCotSal4(): ?float {
        return $this->exoHMntReducCotSal4;
    }

    /**
     * Get the exo h mnt reduc cot sal5.
     *
     * @return float|null Returns the exo h mnt reduc cot sal5.
     */
    public function getExoHMntReducCotSal5(): ?float {
        return $this->exoHMntReducCotSal5;
    }

    /**
     * Get the exo h mnt reduc cot sal tot.
     *
     * @return float|null Returns the exo h mnt reduc cot sal tot.
     */
    public function getExoHMntReducCotSalTot(): ?float {
        return $this->exoHMntReducCotSalTot;
    }

    /**
     * Get the exo h nb hj1.
     *
     * @return float|null Returns the exo h nb hj1.
     */
    public function getExoHNbHj1(): ?float {
        return $this->exoHNbHj1;
    }

    /**
     * Get the exo h nb hj2.
     *
     * @return float|null Returns the exo h nb hj2.
     */
    public function getExoHNbHj2(): ?float {
        return $this->exoHNbHj2;
    }

    /**
     * Get the exo h nb hj3.
     *
     * @return float|null Returns the exo h nb hj3.
     */
    public function getExoHNbHj3(): ?float {
        return $this->exoHNbHj3;
    }

    /**
     * Get the exo h nb hj4.
     *
     * @return float|null Returns the exo h nb hj4.
     */
    public function getExoHNbHj4(): ?float {
        return $this->exoHNbHj4;
    }

    /**
     * Get the exo h nb hj5.
     *
     * @return float|null Returns the exo h nb hj5.
     */
    public function getExoHNbHj5(): ?float {
        return $this->exoHNbHj5;
    }

    /**
     * Get the forma pro base.
     *
     * @return float|null Returns the forma pro base.
     */
    public function getFormaProBase(): ?float {
        return $this->formaProBase;
    }

    /**
     * Get the forma pro base cdd.
     *
     * @return float|null Returns the forma pro base cdd.
     */
    public function getFormaProBaseCdd(): ?float {
        return $this->formaProBaseCdd;
    }

    /**
     * Get the ind cp.
     *
     * @return float|null Returns the ind cp.
     */
    public function getIndCp(): ?float {
        return $this->indCp;
    }

    /**
     * Get the ind intemp.
     *
     * @return float|null Returns the ind intemp.
     */
    public function getIndIntemp(): ?float {
        return $this->indIntemp;
    }

    /**
     * Get the montant b plaf.
     *
     * @return float|null Returns the montant b plaf.
     */
    public function getMontantBPlaf(): ?float {
        return $this->montantBPlaf;
    }

    /**
     * Get the montant b plaf2.
     *
     * @return float|null Returns the montant b plaf2.
     */
    public function getMontantBPlaf2(): ?float {
        return $this->montantBPlaf2;
    }

    /**
     * Get the montant b plaf3.
     *
     * @return float|null Returns the montant b plaf3.
     */
    public function getMontantBPlaf3(): ?float {
        return $this->montantBPlaf3;
    }

    /**
     * Get the montant b plaf4.
     *
     * @return float|null Returns the montant b plaf4.
     */
    public function getMontantBPlaf4(): ?float {
        return $this->montantBPlaf4;
    }

    /**
     * Get the montant b plaf5.
     *
     * @return float|null Returns the montant b plaf5.
     */
    public function getMontantBPlaf5(): ?float {
        return $this->montantBPlaf5;
    }

    /**
     * Get the montant brut.
     *
     * @return float|null Returns the montant brut.
     */
    public function getMontantBrut(): ?float {
        return $this->montantBrut;
    }

    /**
     * Get the montant brut2.
     *
     * @return float|null Returns the montant brut2.
     */
    public function getMontantBrut2(): ?float {
        return $this->montantBrut2;
    }

    /**
     * Get the montant brut3.
     *
     * @return float|null Returns the montant brut3.
     */
    public function getMontantBrut3(): ?float {
        return $this->montantBrut3;
    }

    /**
     * Get the montant brut4.
     *
     * @return float|null Returns the montant brut4.
     */
    public function getMontantBrut4(): ?float {
        return $this->montantBrut4;
    }

    /**
     * Get the montant brut5.
     *
     * @return float|null Returns the montant brut5.
     */
    public function getMontantBrut5(): ?float {
        return $this->montantBrut5;
    }

    /**
     * Get the montant somme isol brut.
     *
     * @return float|null Returns the montant somme isol brut.
     */
    public function getMontantSommeIsolBrut(): ?float {
        return $this->montantSommeIsolBrut;
    }

    /**
     * Get the montant somme isol brut2.
     *
     * @return float|null Returns the montant somme isol brut2.
     */
    public function getMontantSommeIsolBrut2(): ?float {
        return $this->montantSommeIsolBrut2;
    }

    /**
     * Get the montant somme isol brut3.
     *
     * @return float|null Returns the montant somme isol brut3.
     */
    public function getMontantSommeIsolBrut3(): ?float {
        return $this->montantSommeIsolBrut3;
    }

    /**
     * Get the montant somme isol brut4.
     *
     * @return float|null Returns the montant somme isol brut4.
     */
    public function getMontantSommeIsolBrut4(): ?float {
        return $this->montantSommeIsolBrut4;
    }

    /**
     * Get the montant somme isol brut5.
     *
     * @return float|null Returns the montant somme isol brut5.
     */
    public function getMontantSommeIsolBrut5(): ?float {
        return $this->montantSommeIsolBrut5;
    }

    /**
     * Get the montant somme isol plaf.
     *
     * @return float|null Returns the montant somme isol plaf.
     */
    public function getMontantSommeIsolPlaf(): ?float {
        return $this->montantSommeIsolPlaf;
    }

    /**
     * Get the montant somme isol plaf2.
     *
     * @return float|null Returns the montant somme isol plaf2.
     */
    public function getMontantSommeIsolPlaf2(): ?float {
        return $this->montantSommeIsolPlaf2;
    }

    /**
     * Get the montant somme isol plaf3.
     *
     * @return float|null Returns the montant somme isol plaf3.
     */
    public function getMontantSommeIsolPlaf3(): ?float {
        return $this->montantSommeIsolPlaf3;
    }

    /**
     * Get the montant somme isol plaf4.
     *
     * @return float|null Returns the montant somme isol plaf4.
     */
    public function getMontantSommeIsolPlaf4(): ?float {
        return $this->montantSommeIsolPlaf4;
    }

    /**
     * Get the montant somme isol plaf5.
     *
     * @return float|null Returns the montant somme isol plaf5.
     */
    public function getMontantSommeIsolPlaf5(): ?float {
        return $this->montantSommeIsolPlaf5;
    }

    /**
     * Get the mt j rtt2007.
     *
     * @return float|null Returns the mt j rtt2007.
     */
    public function getMtJRtt2007(): ?float {
        return $this->mtJRtt2007;
    }

    /**
     * Get the nb j rtt2007.
     *
     * @return float|null Returns the nb j rtt2007.
     */
    public function getNbJRtt2007(): ?float {
        return $this->nbJRtt2007;
    }

    /**
     * Get the nb periode.
     *
     * @return float|null Returns the nb periode.
     */
    public function getNbPeriode(): ?float {
        return $this->nbPeriode;
    }

    /**
     * Get the nbh chom partiel.
     *
     * @return float|null Returns the nbh chom partiel.
     */
    public function getNbhChomPartiel(): ?float {
        return $this->nbhChomPartiel;
    }

    /**
     * Get the nbh sem ircantec.
     *
     * @return float|null Returns the nbh sem ircantec.
     */
    public function getNbhSemIrcantec(): ?float {
        return $this->nbhSemIrcantec;
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
     * Get the plaf ircantec.
     *
     * @return float|null Returns the plaf ircantec.
     */
    public function getPlafIrcantec(): ?float {
        return $this->plafIrcantec;
    }

    /**
     * Get the qualif unite temps.
     *
     * @return string|null Returns the qualif unite temps.
     */
    public function getQualifUniteTemps(): ?string {
        return $this->qualifUniteTemps;
    }

    /**
     * Get the suppl fam.
     *
     * @return float|null Returns the suppl fam.
     */
    public function getSupplFam(): ?float {
        return $this->supplFam;
    }

    /**
     * Get the taxe apprentissage base.
     *
     * @return float|null Returns the taxe apprentissage base.
     */
    public function getTaxeApprentissageBase(): ?float {
        return $this->taxeApprentissageBase;
    }

    /**
     * Get the taxe salaire.
     *
     * @return float|null Returns the taxe salaire.
     */
    public function getTaxeSalaire(): ?float {
        return $this->taxeSalaire;
    }

    /**
     * Get the tr a ircantec.
     *
     * @return float|null Returns the tr a ircantec.
     */
    public function getTrAIrcantec(): ?float {
        return $this->trAIrcantec;
    }

    /**
     * Get the tr b ircantec.
     *
     * @return float|null Returns the tr b ircantec.
     */
    public function getTrBIrcantec(): ?float {
        return $this->trBIrcantec;
    }

    /**
     * Set the ancienn btp.
     *
     * @param DateTime|null $anciennBtp The ancienn btp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setAnciennBtp(?DateTime $anciennBtp): EmpDadsuCalcul {
        $this->anciennBtp = $anciennBtp;
        return $this;
    }

    /**
     * Set the annee somme isol.
     *
     * @param string|null $anneeSommeIsol The annee somme isol.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setAnneeSommeIsol(?string $anneeSommeIsol): EmpDadsuCalcul {
        $this->anneeSommeIsol = $anneeSommeIsol;
        return $this;
    }

    /**
     * Set the annee somme isol2.
     *
     * @param string|null $anneeSommeIsol2 The annee somme isol2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setAnneeSommeIsol2(?string $anneeSommeIsol2): EmpDadsuCalcul {
        $this->anneeSommeIsol2 = $anneeSommeIsol2;
        return $this;
    }

    /**
     * Set the annee somme isol3.
     *
     * @param string|null $anneeSommeIsol3 The annee somme isol3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setAnneeSommeIsol3(?string $anneeSommeIsol3): EmpDadsuCalcul {
        $this->anneeSommeIsol3 = $anneeSommeIsol3;
        return $this;
    }

    /**
     * Set the annee somme isol4.
     *
     * @param string|null $anneeSommeIsol4 The annee somme isol4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setAnneeSommeIsol4(?string $anneeSommeIsol4): EmpDadsuCalcul {
        $this->anneeSommeIsol4 = $anneeSommeIsol4;
        return $this;
    }

    /**
     * Set the annee somme isol5.
     *
     * @param string|null $anneeSommeIsol5 The annee somme isol5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setAnneeSommeIsol5(?string $anneeSommeIsol5): EmpDadsuCalcul {
        $this->anneeSommeIsol5 = $anneeSommeIsol5;
        return $this;
    }

    /**
     * Set the base brute cot ccpbtp.
     *
     * @param float|null $baseBruteCotCcpbtp The base brute cot ccpbtp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setBaseBruteCotCcpbtp(?float $baseBruteCotCcpbtp): EmpDadsuCalcul {
        $this->baseBruteCotCcpbtp = $baseBruteCotCcpbtp;
        return $this;
    }

    /**
     * Set the base brute cot oppbtp.
     *
     * @param float|null $baseBruteCotOppbtp The base brute cot oppbtp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setBaseBruteCotOppbtp(?float $baseBruteCotOppbtp): EmpDadsuCalcul {
        $this->baseBruteCotOppbtp = $baseBruteCotOppbtp;
        return $this;
    }

    /**
     * Set the base brute cpbtp.
     *
     * @param float|null $baseBruteCpbtp The base brute cpbtp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setBaseBruteCpbtp(?float $baseBruteCpbtp): EmpDadsuCalcul {
        $this->baseBruteCpbtp = $baseBruteCpbtp;
        return $this;
    }

    /**
     * Set the benef assedic.
     *
     * @param string|null $benefAssedic The benef assedic.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setBenefAssedic(?string $benefAssedic): EmpDadsuCalcul {
        $this->benefAssedic = $benefAssedic;
        return $this;
    }

    /**
     * Set the brut ircantec.
     *
     * @param float|null $brutIrcantec The brut ircantec.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setBrutIrcantec(?float $brutIrcantec): EmpDadsuCalcul {
        $this->brutIrcantec = $brutIrcantec;
        return $this;
    }

    /**
     * Set the btp sal moyen.
     *
     * @param float|null $btpSalMoyen The btp sal moyen.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setBtpSalMoyen(?float $btpSalMoyen): EmpDadsuCalcul {
        $this->btpSalMoyen = $btpSalMoyen;
        return $this;
    }

    /**
     * Set the code class btp.
     *
     * @param string|null $codeClassBtp The code class btp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeClassBtp(?string $codeClassBtp): EmpDadsuCalcul {
        $this->codeClassBtp = $codeClassBtp;
        return $this;
    }

    /**
     * Set the code duree trav.
     *
     * @param string|null $codeDureeTrav The code duree trav.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeDureeTrav(?string $codeDureeTrav): EmpDadsuCalcul {
        $this->codeDureeTrav = $codeDureeTrav;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeEtablissement(?int $codeEtablissement): EmpDadsuCalcul {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code lib b plaf.
     *
     * @param string|null $codeLibBPlaf The code lib b plaf.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBPlaf(?string $codeLibBPlaf): EmpDadsuCalcul {
        $this->codeLibBPlaf = $codeLibBPlaf;
        return $this;
    }

    /**
     * Set the code lib b plaf2.
     *
     * @param string|null $codeLibBPlaf2 The code lib b plaf2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBPlaf2(?string $codeLibBPlaf2): EmpDadsuCalcul {
        $this->codeLibBPlaf2 = $codeLibBPlaf2;
        return $this;
    }

    /**
     * Set the code lib b plaf3.
     *
     * @param string|null $codeLibBPlaf3 The code lib b plaf3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBPlaf3(?string $codeLibBPlaf3): EmpDadsuCalcul {
        $this->codeLibBPlaf3 = $codeLibBPlaf3;
        return $this;
    }

    /**
     * Set the code lib b plaf4.
     *
     * @param string|null $codeLibBPlaf4 The code lib b plaf4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBPlaf4(?string $codeLibBPlaf4): EmpDadsuCalcul {
        $this->codeLibBPlaf4 = $codeLibBPlaf4;
        return $this;
    }

    /**
     * Set the code lib b plaf5.
     *
     * @param string|null $codeLibBPlaf5 The code lib b plaf5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBPlaf5(?string $codeLibBPlaf5): EmpDadsuCalcul {
        $this->codeLibBPlaf5 = $codeLibBPlaf5;
        return $this;
    }

    /**
     * Set the code lib brut.
     *
     * @param string|null $codeLibBrut The code lib brut.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBrut(?string $codeLibBrut): EmpDadsuCalcul {
        $this->codeLibBrut = $codeLibBrut;
        return $this;
    }

    /**
     * Set the code lib brut2.
     *
     * @param string|null $codeLibBrut2 The code lib brut2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBrut2(?string $codeLibBrut2): EmpDadsuCalcul {
        $this->codeLibBrut2 = $codeLibBrut2;
        return $this;
    }

    /**
     * Set the code lib brut3.
     *
     * @param string|null $codeLibBrut3 The code lib brut3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBrut3(?string $codeLibBrut3): EmpDadsuCalcul {
        $this->codeLibBrut3 = $codeLibBrut3;
        return $this;
    }

    /**
     * Set the code lib brut4.
     *
     * @param string|null $codeLibBrut4 The code lib brut4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBrut4(?string $codeLibBrut4): EmpDadsuCalcul {
        $this->codeLibBrut4 = $codeLibBrut4;
        return $this;
    }

    /**
     * Set the code lib brut5.
     *
     * @param string|null $codeLibBrut5 The code lib brut5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBrut5(?string $codeLibBrut5): EmpDadsuCalcul {
        $this->codeLibBrut5 = $codeLibBrut5;
        return $this;
    }

    /**
     * Set the code lib csg.
     *
     * @param string|null $codeLibCsg The code lib csg.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibCsg(?string $codeLibCsg): EmpDadsuCalcul {
        $this->codeLibCsg = $codeLibCsg;
        return $this;
    }

    /**
     * Set the code lib irc1.
     *
     * @param string|null $codeLibIrc1 The code lib irc1.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibIrc1(?string $codeLibIrc1): EmpDadsuCalcul {
        $this->codeLibIrc1 = $codeLibIrc1;
        return $this;
    }

    /**
     * Set the code lib irc2.
     *
     * @param string|null $codeLibIrc2 The code lib irc2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibIrc2(?string $codeLibIrc2): EmpDadsuCalcul {
        $this->codeLibIrc2 = $codeLibIrc2;
        return $this;
    }

    /**
     * Set the code lib irc3.
     *
     * @param string|null $codeLibIrc3 The code lib irc3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibIrc3(?string $codeLibIrc3): EmpDadsuCalcul {
        $this->codeLibIrc3 = $codeLibIrc3;
        return $this;
    }

    /**
     * Set the code lib somme.
     *
     * @param string|null $codeLibSomme The code lib somme.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibSomme(?string $codeLibSomme): EmpDadsuCalcul {
        $this->codeLibSomme = $codeLibSomme;
        return $this;
    }

    /**
     * Set the code lib somme2.
     *
     * @param string|null $codeLibSomme2 The code lib somme2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibSomme2(?string $codeLibSomme2): EmpDadsuCalcul {
        $this->codeLibSomme2 = $codeLibSomme2;
        return $this;
    }

    /**
     * Set the code lib somme3.
     *
     * @param string|null $codeLibSomme3 The code lib somme3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibSomme3(?string $codeLibSomme3): EmpDadsuCalcul {
        $this->codeLibSomme3 = $codeLibSomme3;
        return $this;
    }

    /**
     * Set the code lib somme4.
     *
     * @param string|null $codeLibSomme4 The code lib somme4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibSomme4(?string $codeLibSomme4): EmpDadsuCalcul {
        $this->codeLibSomme4 = $codeLibSomme4;
        return $this;
    }

    /**
     * Set the code lib somme5.
     *
     * @param string|null $codeLibSomme5 The code lib somme5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibSomme5(?string $codeLibSomme5): EmpDadsuCalcul {
        $this->codeLibSomme5 = $codeLibSomme5;
        return $this;
    }

    /**
     * Set the code metier btp.
     *
     * @param string|null $codeMetierBtp The code metier btp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeMetierBtp(?string $codeMetierBtp): EmpDadsuCalcul {
        $this->codeMetierBtp = $codeMetierBtp;
        return $this;
    }

    /**
     * Set the code type b plaf.
     *
     * @param string|null $codeTypeBPlaf The code type b plaf.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBPlaf(?string $codeTypeBPlaf): EmpDadsuCalcul {
        $this->codeTypeBPlaf = $codeTypeBPlaf;
        return $this;
    }

    /**
     * Set the code type b plaf2.
     *
     * @param string|null $codeTypeBPlaf2 The code type b plaf2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBPlaf2(?string $codeTypeBPlaf2): EmpDadsuCalcul {
        $this->codeTypeBPlaf2 = $codeTypeBPlaf2;
        return $this;
    }

    /**
     * Set the code type b plaf3.
     *
     * @param string|null $codeTypeBPlaf3 The code type b plaf3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBPlaf3(?string $codeTypeBPlaf3): EmpDadsuCalcul {
        $this->codeTypeBPlaf3 = $codeTypeBPlaf3;
        return $this;
    }

    /**
     * Set the code type b plaf4.
     *
     * @param string|null $codeTypeBPlaf4 The code type b plaf4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBPlaf4(?string $codeTypeBPlaf4): EmpDadsuCalcul {
        $this->codeTypeBPlaf4 = $codeTypeBPlaf4;
        return $this;
    }

    /**
     * Set the code type b plaf5.
     *
     * @param string|null $codeTypeBPlaf5 The code type b plaf5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBPlaf5(?string $codeTypeBPlaf5): EmpDadsuCalcul {
        $this->codeTypeBPlaf5 = $codeTypeBPlaf5;
        return $this;
    }

    /**
     * Set the code type brut.
     *
     * @param string|null $codeTypeBrut The code type brut.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBrut(?string $codeTypeBrut): EmpDadsuCalcul {
        $this->codeTypeBrut = $codeTypeBrut;
        return $this;
    }

    /**
     * Set the code type brut2.
     *
     * @param string|null $codeTypeBrut2 The code type brut2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBrut2(?string $codeTypeBrut2): EmpDadsuCalcul {
        $this->codeTypeBrut2 = $codeTypeBrut2;
        return $this;
    }

    /**
     * Set the code type brut3.
     *
     * @param string|null $codeTypeBrut3 The code type brut3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBrut3(?string $codeTypeBrut3): EmpDadsuCalcul {
        $this->codeTypeBrut3 = $codeTypeBrut3;
        return $this;
    }

    /**
     * Set the code type brut4.
     *
     * @param string|null $codeTypeBrut4 The code type brut4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBrut4(?string $codeTypeBrut4): EmpDadsuCalcul {
        $this->codeTypeBrut4 = $codeTypeBrut4;
        return $this;
    }

    /**
     * Set the code type brut5.
     *
     * @param string|null $codeTypeBrut5 The code type brut5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBrut5(?string $codeTypeBrut5): EmpDadsuCalcul {
        $this->codeTypeBrut5 = $codeTypeBrut5;
        return $this;
    }

    /**
     * Set the code type somme.
     *
     * @param string|null $codeTypeSomme The code type somme.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeSomme(?string $codeTypeSomme): EmpDadsuCalcul {
        $this->codeTypeSomme = $codeTypeSomme;
        return $this;
    }

    /**
     * Set the code type somme2.
     *
     * @param string|null $codeTypeSomme2 The code type somme2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeSomme2(?string $codeTypeSomme2): EmpDadsuCalcul {
        $this->codeTypeSomme2 = $codeTypeSomme2;
        return $this;
    }

    /**
     * Set the code type somme3.
     *
     * @param string|null $codeTypeSomme3 The code type somme3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeSomme3(?string $codeTypeSomme3): EmpDadsuCalcul {
        $this->codeTypeSomme3 = $codeTypeSomme3;
        return $this;
    }

    /**
     * Set the code type somme4.
     *
     * @param string|null $codeTypeSomme4 The code type somme4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeSomme4(?string $codeTypeSomme4): EmpDadsuCalcul {
        $this->codeTypeSomme4 = $codeTypeSomme4;
        return $this;
    }

    /**
     * Set the code type somme5.
     *
     * @param string|null $codeTypeSomme5 The code type somme5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeSomme5(?string $codeTypeSomme5): EmpDadsuCalcul {
        $this->codeTypeSomme5 = $codeTypeSomme5;
        return $this;
    }

    /**
     * Set the csg specif.
     *
     * @param float|null $csgSpecif The csg specif.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCsgSpecif(?float $csgSpecif): EmpDadsuCalcul {
        $this->csgSpecif = $csgSpecif;
        return $this;
    }

    /**
     * Set the duree trav.
     *
     * @param float|null $dureeTrav The duree trav.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setDureeTrav(?float $dureeTrav): EmpDadsuCalcul {
        $this->dureeTrav = $dureeTrav;
        return $this;
    }

    /**
     * Set the exo h code1.
     *
     * @param string|null $exoHCode1 The exo h code1.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHCode1(?string $exoHCode1): EmpDadsuCalcul {
        $this->exoHCode1 = $exoHCode1;
        return $this;
    }

    /**
     * Set the exo h code2.
     *
     * @param string|null $exoHCode2 The exo h code2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHCode2(?string $exoHCode2): EmpDadsuCalcul {
        $this->exoHCode2 = $exoHCode2;
        return $this;
    }

    /**
     * Set the exo h code3.
     *
     * @param string|null $exoHCode3 The exo h code3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHCode3(?string $exoHCode3): EmpDadsuCalcul {
        $this->exoHCode3 = $exoHCode3;
        return $this;
    }

    /**
     * Set the exo h code4.
     *
     * @param string|null $exoHCode4 The exo h code4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHCode4(?string $exoHCode4): EmpDadsuCalcul {
        $this->exoHCode4 = $exoHCode4;
        return $this;
    }

    /**
     * Set the exo h code5.
     *
     * @param string|null $exoHCode5 The exo h code5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHCode5(?string $exoHCode5): EmpDadsuCalcul {
        $this->exoHCode5 = $exoHCode5;
        return $this;
    }

    /**
     * Set the exo h mnt1.
     *
     * @param float|null $exoHMnt1 The exo h mnt1.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMnt1(?float $exoHMnt1): EmpDadsuCalcul {
        $this->exoHMnt1 = $exoHMnt1;
        return $this;
    }

    /**
     * Set the exo h mnt2.
     *
     * @param float|null $exoHMnt2 The exo h mnt2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMnt2(?float $exoHMnt2): EmpDadsuCalcul {
        $this->exoHMnt2 = $exoHMnt2;
        return $this;
    }

    /**
     * Set the exo h mnt3.
     *
     * @param float|null $exoHMnt3 The exo h mnt3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMnt3(?float $exoHMnt3): EmpDadsuCalcul {
        $this->exoHMnt3 = $exoHMnt3;
        return $this;
    }

    /**
     * Set the exo h mnt4.
     *
     * @param float|null $exoHMnt4 The exo h mnt4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMnt4(?float $exoHMnt4): EmpDadsuCalcul {
        $this->exoHMnt4 = $exoHMnt4;
        return $this;
    }

    /**
     * Set the exo h mnt5.
     *
     * @param float|null $exoHMnt5 The exo h mnt5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMnt5(?float $exoHMnt5): EmpDadsuCalcul {
        $this->exoHMnt5 = $exoHMnt5;
        return $this;
    }

    /**
     * Set the exo h mnt deduc cot pat1.
     *
     * @param float|null $exoHMntDeducCotPat1 The exo h mnt deduc cot pat1.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntDeducCotPat1(?float $exoHMntDeducCotPat1): EmpDadsuCalcul {
        $this->exoHMntDeducCotPat1 = $exoHMntDeducCotPat1;
        return $this;
    }

    /**
     * Set the exo h mnt deduc cot pat2.
     *
     * @param float|null $exoHMntDeducCotPat2 The exo h mnt deduc cot pat2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntDeducCotPat2(?float $exoHMntDeducCotPat2): EmpDadsuCalcul {
        $this->exoHMntDeducCotPat2 = $exoHMntDeducCotPat2;
        return $this;
    }

    /**
     * Set the exo h mnt deduc cot pat3.
     *
     * @param float|null $exoHMntDeducCotPat3 The exo h mnt deduc cot pat3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntDeducCotPat3(?float $exoHMntDeducCotPat3): EmpDadsuCalcul {
        $this->exoHMntDeducCotPat3 = $exoHMntDeducCotPat3;
        return $this;
    }

    /**
     * Set the exo h mnt deduc cot pat4.
     *
     * @param float|null $exoHMntDeducCotPat4 The exo h mnt deduc cot pat4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntDeducCotPat4(?float $exoHMntDeducCotPat4): EmpDadsuCalcul {
        $this->exoHMntDeducCotPat4 = $exoHMntDeducCotPat4;
        return $this;
    }

    /**
     * Set the exo h mnt deduc cot pat5.
     *
     * @param float|null $exoHMntDeducCotPat5 The exo h mnt deduc cot pat5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntDeducCotPat5(?float $exoHMntDeducCotPat5): EmpDadsuCalcul {
        $this->exoHMntDeducCotPat5 = $exoHMntDeducCotPat5;
        return $this;
    }

    /**
     * Set the exo h mnt deduc cot pat tot.
     *
     * @param float|null $exoHMntDeducCotPatTot The exo h mnt deduc cot pat tot.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntDeducCotPatTot(?float $exoHMntDeducCotPatTot): EmpDadsuCalcul {
        $this->exoHMntDeducCotPatTot = $exoHMntDeducCotPatTot;
        return $this;
    }

    /**
     * Set the exo h mnt reduc cot sal1.
     *
     * @param float|null $exoHMntReducCotSal1 The exo h mnt reduc cot sal1.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntReducCotSal1(?float $exoHMntReducCotSal1): EmpDadsuCalcul {
        $this->exoHMntReducCotSal1 = $exoHMntReducCotSal1;
        return $this;
    }

    /**
     * Set the exo h mnt reduc cot sal2.
     *
     * @param float|null $exoHMntReducCotSal2 The exo h mnt reduc cot sal2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntReducCotSal2(?float $exoHMntReducCotSal2): EmpDadsuCalcul {
        $this->exoHMntReducCotSal2 = $exoHMntReducCotSal2;
        return $this;
    }

    /**
     * Set the exo h mnt reduc cot sal3.
     *
     * @param float|null $exoHMntReducCotSal3 The exo h mnt reduc cot sal3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntReducCotSal3(?float $exoHMntReducCotSal3): EmpDadsuCalcul {
        $this->exoHMntReducCotSal3 = $exoHMntReducCotSal3;
        return $this;
    }

    /**
     * Set the exo h mnt reduc cot sal4.
     *
     * @param float|null $exoHMntReducCotSal4 The exo h mnt reduc cot sal4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntReducCotSal4(?float $exoHMntReducCotSal4): EmpDadsuCalcul {
        $this->exoHMntReducCotSal4 = $exoHMntReducCotSal4;
        return $this;
    }

    /**
     * Set the exo h mnt reduc cot sal5.
     *
     * @param float|null $exoHMntReducCotSal5 The exo h mnt reduc cot sal5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntReducCotSal5(?float $exoHMntReducCotSal5): EmpDadsuCalcul {
        $this->exoHMntReducCotSal5 = $exoHMntReducCotSal5;
        return $this;
    }

    /**
     * Set the exo h mnt reduc cot sal tot.
     *
     * @param float|null $exoHMntReducCotSalTot The exo h mnt reduc cot sal tot.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntReducCotSalTot(?float $exoHMntReducCotSalTot): EmpDadsuCalcul {
        $this->exoHMntReducCotSalTot = $exoHMntReducCotSalTot;
        return $this;
    }

    /**
     * Set the exo h nb hj1.
     *
     * @param float|null $exoHNbHj1 The exo h nb hj1.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHNbHj1(?float $exoHNbHj1): EmpDadsuCalcul {
        $this->exoHNbHj1 = $exoHNbHj1;
        return $this;
    }

    /**
     * Set the exo h nb hj2.
     *
     * @param float|null $exoHNbHj2 The exo h nb hj2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHNbHj2(?float $exoHNbHj2): EmpDadsuCalcul {
        $this->exoHNbHj2 = $exoHNbHj2;
        return $this;
    }

    /**
     * Set the exo h nb hj3.
     *
     * @param float|null $exoHNbHj3 The exo h nb hj3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHNbHj3(?float $exoHNbHj3): EmpDadsuCalcul {
        $this->exoHNbHj3 = $exoHNbHj3;
        return $this;
    }

    /**
     * Set the exo h nb hj4.
     *
     * @param float|null $exoHNbHj4 The exo h nb hj4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHNbHj4(?float $exoHNbHj4): EmpDadsuCalcul {
        $this->exoHNbHj4 = $exoHNbHj4;
        return $this;
    }

    /**
     * Set the exo h nb hj5.
     *
     * @param float|null $exoHNbHj5 The exo h nb hj5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHNbHj5(?float $exoHNbHj5): EmpDadsuCalcul {
        $this->exoHNbHj5 = $exoHNbHj5;
        return $this;
    }

    /**
     * Set the forma pro base.
     *
     * @param float|null $formaProBase The forma pro base.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setFormaProBase(?float $formaProBase): EmpDadsuCalcul {
        $this->formaProBase = $formaProBase;
        return $this;
    }

    /**
     * Set the forma pro base cdd.
     *
     * @param float|null $formaProBaseCdd The forma pro base cdd.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setFormaProBaseCdd(?float $formaProBaseCdd): EmpDadsuCalcul {
        $this->formaProBaseCdd = $formaProBaseCdd;
        return $this;
    }

    /**
     * Set the ind cp.
     *
     * @param float|null $indCp The ind cp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setIndCp(?float $indCp): EmpDadsuCalcul {
        $this->indCp = $indCp;
        return $this;
    }

    /**
     * Set the ind intemp.
     *
     * @param float|null $indIntemp The ind intemp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setIndIntemp(?float $indIntemp): EmpDadsuCalcul {
        $this->indIntemp = $indIntemp;
        return $this;
    }

    /**
     * Set the montant b plaf.
     *
     * @param float|null $montantBPlaf The montant b plaf.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBPlaf(?float $montantBPlaf): EmpDadsuCalcul {
        $this->montantBPlaf = $montantBPlaf;
        return $this;
    }

    /**
     * Set the montant b plaf2.
     *
     * @param float|null $montantBPlaf2 The montant b plaf2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBPlaf2(?float $montantBPlaf2): EmpDadsuCalcul {
        $this->montantBPlaf2 = $montantBPlaf2;
        return $this;
    }

    /**
     * Set the montant b plaf3.
     *
     * @param float|null $montantBPlaf3 The montant b plaf3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBPlaf3(?float $montantBPlaf3): EmpDadsuCalcul {
        $this->montantBPlaf3 = $montantBPlaf3;
        return $this;
    }

    /**
     * Set the montant b plaf4.
     *
     * @param float|null $montantBPlaf4 The montant b plaf4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBPlaf4(?float $montantBPlaf4): EmpDadsuCalcul {
        $this->montantBPlaf4 = $montantBPlaf4;
        return $this;
    }

    /**
     * Set the montant b plaf5.
     *
     * @param float|null $montantBPlaf5 The montant b plaf5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBPlaf5(?float $montantBPlaf5): EmpDadsuCalcul {
        $this->montantBPlaf5 = $montantBPlaf5;
        return $this;
    }

    /**
     * Set the montant brut.
     *
     * @param float|null $montantBrut The montant brut.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBrut(?float $montantBrut): EmpDadsuCalcul {
        $this->montantBrut = $montantBrut;
        return $this;
    }

    /**
     * Set the montant brut2.
     *
     * @param float|null $montantBrut2 The montant brut2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBrut2(?float $montantBrut2): EmpDadsuCalcul {
        $this->montantBrut2 = $montantBrut2;
        return $this;
    }

    /**
     * Set the montant brut3.
     *
     * @param float|null $montantBrut3 The montant brut3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBrut3(?float $montantBrut3): EmpDadsuCalcul {
        $this->montantBrut3 = $montantBrut3;
        return $this;
    }

    /**
     * Set the montant brut4.
     *
     * @param float|null $montantBrut4 The montant brut4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBrut4(?float $montantBrut4): EmpDadsuCalcul {
        $this->montantBrut4 = $montantBrut4;
        return $this;
    }

    /**
     * Set the montant brut5.
     *
     * @param float|null $montantBrut5 The montant brut5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBrut5(?float $montantBrut5): EmpDadsuCalcul {
        $this->montantBrut5 = $montantBrut5;
        return $this;
    }

    /**
     * Set the montant somme isol brut.
     *
     * @param float|null $montantSommeIsolBrut The montant somme isol brut.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolBrut(?float $montantSommeIsolBrut): EmpDadsuCalcul {
        $this->montantSommeIsolBrut = $montantSommeIsolBrut;
        return $this;
    }

    /**
     * Set the montant somme isol brut2.
     *
     * @param float|null $montantSommeIsolBrut2 The montant somme isol brut2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolBrut2(?float $montantSommeIsolBrut2): EmpDadsuCalcul {
        $this->montantSommeIsolBrut2 = $montantSommeIsolBrut2;
        return $this;
    }

    /**
     * Set the montant somme isol brut3.
     *
     * @param float|null $montantSommeIsolBrut3 The montant somme isol brut3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolBrut3(?float $montantSommeIsolBrut3): EmpDadsuCalcul {
        $this->montantSommeIsolBrut3 = $montantSommeIsolBrut3;
        return $this;
    }

    /**
     * Set the montant somme isol brut4.
     *
     * @param float|null $montantSommeIsolBrut4 The montant somme isol brut4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolBrut4(?float $montantSommeIsolBrut4): EmpDadsuCalcul {
        $this->montantSommeIsolBrut4 = $montantSommeIsolBrut4;
        return $this;
    }

    /**
     * Set the montant somme isol brut5.
     *
     * @param float|null $montantSommeIsolBrut5 The montant somme isol brut5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolBrut5(?float $montantSommeIsolBrut5): EmpDadsuCalcul {
        $this->montantSommeIsolBrut5 = $montantSommeIsolBrut5;
        return $this;
    }

    /**
     * Set the montant somme isol plaf.
     *
     * @param float|null $montantSommeIsolPlaf The montant somme isol plaf.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolPlaf(?float $montantSommeIsolPlaf): EmpDadsuCalcul {
        $this->montantSommeIsolPlaf = $montantSommeIsolPlaf;
        return $this;
    }

    /**
     * Set the montant somme isol plaf2.
     *
     * @param float|null $montantSommeIsolPlaf2 The montant somme isol plaf2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolPlaf2(?float $montantSommeIsolPlaf2): EmpDadsuCalcul {
        $this->montantSommeIsolPlaf2 = $montantSommeIsolPlaf2;
        return $this;
    }

    /**
     * Set the montant somme isol plaf3.
     *
     * @param float|null $montantSommeIsolPlaf3 The montant somme isol plaf3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolPlaf3(?float $montantSommeIsolPlaf3): EmpDadsuCalcul {
        $this->montantSommeIsolPlaf3 = $montantSommeIsolPlaf3;
        return $this;
    }

    /**
     * Set the montant somme isol plaf4.
     *
     * @param float|null $montantSommeIsolPlaf4 The montant somme isol plaf4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolPlaf4(?float $montantSommeIsolPlaf4): EmpDadsuCalcul {
        $this->montantSommeIsolPlaf4 = $montantSommeIsolPlaf4;
        return $this;
    }

    /**
     * Set the montant somme isol plaf5.
     *
     * @param float|null $montantSommeIsolPlaf5 The montant somme isol plaf5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolPlaf5(?float $montantSommeIsolPlaf5): EmpDadsuCalcul {
        $this->montantSommeIsolPlaf5 = $montantSommeIsolPlaf5;
        return $this;
    }

    /**
     * Set the mt j rtt2007.
     *
     * @param float|null $mtJRtt2007 The mt j rtt2007.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMtJRtt2007(?float $mtJRtt2007): EmpDadsuCalcul {
        $this->mtJRtt2007 = $mtJRtt2007;
        return $this;
    }

    /**
     * Set the nb j rtt2007.
     *
     * @param float|null $nbJRtt2007 The nb j rtt2007.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setNbJRtt2007(?float $nbJRtt2007): EmpDadsuCalcul {
        $this->nbJRtt2007 = $nbJRtt2007;
        return $this;
    }

    /**
     * Set the nb periode.
     *
     * @param float|null $nbPeriode The nb periode.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setNbPeriode(?float $nbPeriode): EmpDadsuCalcul {
        $this->nbPeriode = $nbPeriode;
        return $this;
    }

    /**
     * Set the nbh chom partiel.
     *
     * @param float|null $nbhChomPartiel The nbh chom partiel.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setNbhChomPartiel(?float $nbhChomPartiel): EmpDadsuCalcul {
        $this->nbhChomPartiel = $nbhChomPartiel;
        return $this;
    }

    /**
     * Set the nbh sem ircantec.
     *
     * @param float|null $nbhSemIrcantec The nbh sem ircantec.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setNbhSemIrcantec(?float $nbhSemIrcantec): EmpDadsuCalcul {
        $this->nbhSemIrcantec = $nbhSemIrcantec;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setNumero(?string $numero): EmpDadsuCalcul {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int|null $numeroOrdre The numero ordre.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setNumeroOrdre(?int $numeroOrdre): EmpDadsuCalcul {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the plaf ircantec.
     *
     * @param float|null $plafIrcantec The plaf ircantec.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setPlafIrcantec(?float $plafIrcantec): EmpDadsuCalcul {
        $this->plafIrcantec = $plafIrcantec;
        return $this;
    }

    /**
     * Set the qualif unite temps.
     *
     * @param string|null $qualifUniteTemps The qualif unite temps.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setQualifUniteTemps(?string $qualifUniteTemps): EmpDadsuCalcul {
        $this->qualifUniteTemps = $qualifUniteTemps;
        return $this;
    }

    /**
     * Set the suppl fam.
     *
     * @param float|null $supplFam The suppl fam.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setSupplFam(?float $supplFam): EmpDadsuCalcul {
        $this->supplFam = $supplFam;
        return $this;
    }

    /**
     * Set the taxe apprentissage base.
     *
     * @param float|null $taxeApprentissageBase The taxe apprentissage base.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setTaxeApprentissageBase(?float $taxeApprentissageBase): EmpDadsuCalcul {
        $this->taxeApprentissageBase = $taxeApprentissageBase;
        return $this;
    }

    /**
     * Set the taxe salaire.
     *
     * @param float|null $taxeSalaire The taxe salaire.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setTaxeSalaire(?float $taxeSalaire): EmpDadsuCalcul {
        $this->taxeSalaire = $taxeSalaire;
        return $this;
    }

    /**
     * Set the tr a ircantec.
     *
     * @param float|null $trAIrcantec The tr a ircantec.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setTrAIrcantec(?float $trAIrcantec): EmpDadsuCalcul {
        $this->trAIrcantec = $trAIrcantec;
        return $this;
    }

    /**
     * Set the tr b ircantec.
     *
     * @param float|null $trBIrcantec The tr b ircantec.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setTrBIrcantec(?float $trBIrcantec): EmpDadsuCalcul {
        $this->trBIrcantec = $trBIrcantec;
        return $this;
    }
}
