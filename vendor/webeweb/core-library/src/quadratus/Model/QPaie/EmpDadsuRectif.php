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
 * Emp dadsu rectif.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpDadsuRectif {

    /**
     * Actif.
     *
     * @var bool|null
     */
    private $actif;

    /**
     * Actions gratuites nbre.
     *
     * @var float|null
     */
    private $actionsGratuitesNbre;

    /**
     * Actions gratuites valeur u.
     *
     * @var float|null
     */
    private $actionsGratuitesValeurU;

    /**
     * Autres sommes exo mnt1.
     *
     * @var float|null
     */
    private $autresSommesExoMnt1;

    /**
     * Autres sommes exo mnt2.
     *
     * @var float|null
     */
    private $autresSommesExoMnt2;

    /**
     * Autres sommes exo mnt3.
     *
     * @var float|null
     */
    private $autresSommesExoMnt3;

    /**
     * Autres sommes exo mnt4.
     *
     * @var float|null
     */
    private $autresSommesExoMnt4;

    /**
     * Base exo brut1.
     *
     * @var float|null
     */
    private $baseExoBrut1;

    /**
     * Base exo brut2.
     *
     * @var float|null
     */
    private $baseExoBrut2;

    /**
     * Base exo brut3.
     *
     * @var float|null
     */
    private $baseExoBrut3;

    /**
     * Base exo plaf1.
     *
     * @var float|null
     */
    private $baseExoPlaf1;

    /**
     * Base exo plaf2.
     *
     * @var float|null
     */
    private $baseExoPlaf2;

    /**
     * Base exo plaf3.
     *
     * @var float|null
     */
    private $baseExoPlaf3;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Csg specif.
     *
     * @var float|null
     */
    private $csgSpecif;

    /**
     * Epargne sal mnt1.
     *
     * @var float|null
     */
    private $epargneSalMnt1;

    /**
     * Epargne sal mnt2.
     *
     * @var float|null
     */
    private $epargneSalMnt2;

    /**
     * Epargne sal mnt3.
     *
     * @var float|null
     */
    private $epargneSalMnt3;

    /**
     * Epargne sal mnt4.
     *
     * @var float|null
     */
    private $epargneSalMnt4;

    /**
     * Gpec mnt exo cot secu.
     *
     * @var float|null
     */
    private $gpecMntExoCotSecu;

    /**
     * Gpec mnt exo csgcrds.
     *
     * @var float|null
     */
    private $gpecMntExoCsgcrds;

    /**
     * Ind cp.
     *
     * @var float|null
     */
    private $indCp;

    /**
     * Indemn cp plaf.
     *
     * @var float|null
     */
    private $indemnCpPlaf;

    /**
     * Indemn impat.
     *
     * @var float|null
     */
    private $indemnImpat;

    /**
     * Indemn rupture mnt1.
     *
     * @var float|null
     */
    private $indemnRuptureMnt1;

    /**
     * Indemn rupture mnt2.
     *
     * @var float|null
     */
    private $indemnRuptureMnt2;

    /**
     * Indice rectif.
     *
     * @var int|null
     */
    private $indiceRectif;

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
     * Particip patron avtge mnt1.
     *
     * @var float|null
     */
    private $participPatronAvtgeMnt1;

    /**
     * Particip patron avtge mnt2.
     *
     * @var float|null
     */
    private $participPatronAvtgeMnt2;

    /**
     * Particip serv pers.
     *
     * @var float|null
     */
    private $participServPers;

    /**
     * Taxe salaire.
     *
     * @var float|null
     */
    private $taxeSalaire;

    /**
     * Tds100.
     *
     * @var float|null
     */
    private $tds100;

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
     * Tds132.
     *
     * @var float|null
     */
    private $tds132;

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
     * Tds alloc retraite.
     *
     * @var float|null
     */
    private $tdsAllocRetraite;

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
     * Get the actif.
     *
     * @return bool|null Returns the actif.
     */
    public function getActif(): ?bool {
        return $this->actif;
    }

    /**
     * Get the actions gratuites nbre.
     *
     * @return float|null Returns the actions gratuites nbre.
     */
    public function getActionsGratuitesNbre(): ?float {
        return $this->actionsGratuitesNbre;
    }

    /**
     * Get the actions gratuites valeur u.
     *
     * @return float|null Returns the actions gratuites valeur u.
     */
    public function getActionsGratuitesValeurU(): ?float {
        return $this->actionsGratuitesValeurU;
    }

    /**
     * Get the autres sommes exo mnt1.
     *
     * @return float|null Returns the autres sommes exo mnt1.
     */
    public function getAutresSommesExoMnt1(): ?float {
        return $this->autresSommesExoMnt1;
    }

    /**
     * Get the autres sommes exo mnt2.
     *
     * @return float|null Returns the autres sommes exo mnt2.
     */
    public function getAutresSommesExoMnt2(): ?float {
        return $this->autresSommesExoMnt2;
    }

    /**
     * Get the autres sommes exo mnt3.
     *
     * @return float|null Returns the autres sommes exo mnt3.
     */
    public function getAutresSommesExoMnt3(): ?float {
        return $this->autresSommesExoMnt3;
    }

    /**
     * Get the autres sommes exo mnt4.
     *
     * @return float|null Returns the autres sommes exo mnt4.
     */
    public function getAutresSommesExoMnt4(): ?float {
        return $this->autresSommesExoMnt4;
    }

    /**
     * Get the base exo brut1.
     *
     * @return float|null Returns the base exo brut1.
     */
    public function getBaseExoBrut1(): ?float {
        return $this->baseExoBrut1;
    }

    /**
     * Get the base exo brut2.
     *
     * @return float|null Returns the base exo brut2.
     */
    public function getBaseExoBrut2(): ?float {
        return $this->baseExoBrut2;
    }

    /**
     * Get the base exo brut3.
     *
     * @return float|null Returns the base exo brut3.
     */
    public function getBaseExoBrut3(): ?float {
        return $this->baseExoBrut3;
    }

    /**
     * Get the base exo plaf1.
     *
     * @return float|null Returns the base exo plaf1.
     */
    public function getBaseExoPlaf1(): ?float {
        return $this->baseExoPlaf1;
    }

    /**
     * Get the base exo plaf2.
     *
     * @return float|null Returns the base exo plaf2.
     */
    public function getBaseExoPlaf2(): ?float {
        return $this->baseExoPlaf2;
    }

    /**
     * Get the base exo plaf3.
     *
     * @return float|null Returns the base exo plaf3.
     */
    public function getBaseExoPlaf3(): ?float {
        return $this->baseExoPlaf3;
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
     * Get the csg specif.
     *
     * @return float|null Returns the csg specif.
     */
    public function getCsgSpecif(): ?float {
        return $this->csgSpecif;
    }

    /**
     * Get the epargne sal mnt1.
     *
     * @return float|null Returns the epargne sal mnt1.
     */
    public function getEpargneSalMnt1(): ?float {
        return $this->epargneSalMnt1;
    }

    /**
     * Get the epargne sal mnt2.
     *
     * @return float|null Returns the epargne sal mnt2.
     */
    public function getEpargneSalMnt2(): ?float {
        return $this->epargneSalMnt2;
    }

    /**
     * Get the epargne sal mnt3.
     *
     * @return float|null Returns the epargne sal mnt3.
     */
    public function getEpargneSalMnt3(): ?float {
        return $this->epargneSalMnt3;
    }

    /**
     * Get the epargne sal mnt4.
     *
     * @return float|null Returns the epargne sal mnt4.
     */
    public function getEpargneSalMnt4(): ?float {
        return $this->epargneSalMnt4;
    }

    /**
     * Get the gpec mnt exo cot secu.
     *
     * @return float|null Returns the gpec mnt exo cot secu.
     */
    public function getGpecMntExoCotSecu(): ?float {
        return $this->gpecMntExoCotSecu;
    }

    /**
     * Get the gpec mnt exo csgcrds.
     *
     * @return float|null Returns the gpec mnt exo csgcrds.
     */
    public function getGpecMntExoCsgcrds(): ?float {
        return $this->gpecMntExoCsgcrds;
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
     * Get the indemn cp plaf.
     *
     * @return float|null Returns the indemn cp plaf.
     */
    public function getIndemnCpPlaf(): ?float {
        return $this->indemnCpPlaf;
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
     * Get the indemn rupture mnt1.
     *
     * @return float|null Returns the indemn rupture mnt1.
     */
    public function getIndemnRuptureMnt1(): ?float {
        return $this->indemnRuptureMnt1;
    }

    /**
     * Get the indemn rupture mnt2.
     *
     * @return float|null Returns the indemn rupture mnt2.
     */
    public function getIndemnRuptureMnt2(): ?float {
        return $this->indemnRuptureMnt2;
    }

    /**
     * Get the indice rectif.
     *
     * @return int|null Returns the indice rectif.
     */
    public function getIndiceRectif(): ?int {
        return $this->indiceRectif;
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
     * Get the particip patron avtge mnt1.
     *
     * @return float|null Returns the particip patron avtge mnt1.
     */
    public function getParticipPatronAvtgeMnt1(): ?float {
        return $this->participPatronAvtgeMnt1;
    }

    /**
     * Get the particip patron avtge mnt2.
     *
     * @return float|null Returns the particip patron avtge mnt2.
     */
    public function getParticipPatronAvtgeMnt2(): ?float {
        return $this->participPatronAvtgeMnt2;
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
     * Get the taxe salaire.
     *
     * @return float|null Returns the taxe salaire.
     */
    public function getTaxeSalaire(): ?float {
        return $this->taxeSalaire;
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
     * Get the tds132.
     *
     * @return float|null Returns the tds132.
     */
    public function getTds132(): ?float {
        return $this->tds132;
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
     * Get the tds alloc retraite.
     *
     * @return float|null Returns the tds alloc retraite.
     */
    public function getTdsAllocRetraite(): ?float {
        return $this->tdsAllocRetraite;
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
     * Set the actif.
     *
     * @param bool|null $actif The actif.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setActif(?bool $actif): EmpDadsuRectif {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the actions gratuites nbre.
     *
     * @param float|null $actionsGratuitesNbre The actions gratuites nbre.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setActionsGratuitesNbre(?float $actionsGratuitesNbre): EmpDadsuRectif {
        $this->actionsGratuitesNbre = $actionsGratuitesNbre;
        return $this;
    }

    /**
     * Set the actions gratuites valeur u.
     *
     * @param float|null $actionsGratuitesValeurU The actions gratuites valeur u.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setActionsGratuitesValeurU(?float $actionsGratuitesValeurU): EmpDadsuRectif {
        $this->actionsGratuitesValeurU = $actionsGratuitesValeurU;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt1.
     *
     * @param float|null $autresSommesExoMnt1 The autres sommes exo mnt1.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setAutresSommesExoMnt1(?float $autresSommesExoMnt1): EmpDadsuRectif {
        $this->autresSommesExoMnt1 = $autresSommesExoMnt1;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt2.
     *
     * @param float|null $autresSommesExoMnt2 The autres sommes exo mnt2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setAutresSommesExoMnt2(?float $autresSommesExoMnt2): EmpDadsuRectif {
        $this->autresSommesExoMnt2 = $autresSommesExoMnt2;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt3.
     *
     * @param float|null $autresSommesExoMnt3 The autres sommes exo mnt3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setAutresSommesExoMnt3(?float $autresSommesExoMnt3): EmpDadsuRectif {
        $this->autresSommesExoMnt3 = $autresSommesExoMnt3;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt4.
     *
     * @param float|null $autresSommesExoMnt4 The autres sommes exo mnt4.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setAutresSommesExoMnt4(?float $autresSommesExoMnt4): EmpDadsuRectif {
        $this->autresSommesExoMnt4 = $autresSommesExoMnt4;
        return $this;
    }

    /**
     * Set the base exo brut1.
     *
     * @param float|null $baseExoBrut1 The base exo brut1.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setBaseExoBrut1(?float $baseExoBrut1): EmpDadsuRectif {
        $this->baseExoBrut1 = $baseExoBrut1;
        return $this;
    }

    /**
     * Set the base exo brut2.
     *
     * @param float|null $baseExoBrut2 The base exo brut2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setBaseExoBrut2(?float $baseExoBrut2): EmpDadsuRectif {
        $this->baseExoBrut2 = $baseExoBrut2;
        return $this;
    }

    /**
     * Set the base exo brut3.
     *
     * @param float|null $baseExoBrut3 The base exo brut3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setBaseExoBrut3(?float $baseExoBrut3): EmpDadsuRectif {
        $this->baseExoBrut3 = $baseExoBrut3;
        return $this;
    }

    /**
     * Set the base exo plaf1.
     *
     * @param float|null $baseExoPlaf1 The base exo plaf1.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setBaseExoPlaf1(?float $baseExoPlaf1): EmpDadsuRectif {
        $this->baseExoPlaf1 = $baseExoPlaf1;
        return $this;
    }

    /**
     * Set the base exo plaf2.
     *
     * @param float|null $baseExoPlaf2 The base exo plaf2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setBaseExoPlaf2(?float $baseExoPlaf2): EmpDadsuRectif {
        $this->baseExoPlaf2 = $baseExoPlaf2;
        return $this;
    }

    /**
     * Set the base exo plaf3.
     *
     * @param float|null $baseExoPlaf3 The base exo plaf3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setBaseExoPlaf3(?float $baseExoPlaf3): EmpDadsuRectif {
        $this->baseExoPlaf3 = $baseExoPlaf3;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setCodeEtablissement(?int $codeEtablissement): EmpDadsuRectif {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the csg specif.
     *
     * @param float|null $csgSpecif The csg specif.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setCsgSpecif(?float $csgSpecif): EmpDadsuRectif {
        $this->csgSpecif = $csgSpecif;
        return $this;
    }

    /**
     * Set the epargne sal mnt1.
     *
     * @param float|null $epargneSalMnt1 The epargne sal mnt1.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setEpargneSalMnt1(?float $epargneSalMnt1): EmpDadsuRectif {
        $this->epargneSalMnt1 = $epargneSalMnt1;
        return $this;
    }

    /**
     * Set the epargne sal mnt2.
     *
     * @param float|null $epargneSalMnt2 The epargne sal mnt2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setEpargneSalMnt2(?float $epargneSalMnt2): EmpDadsuRectif {
        $this->epargneSalMnt2 = $epargneSalMnt2;
        return $this;
    }

    /**
     * Set the epargne sal mnt3.
     *
     * @param float|null $epargneSalMnt3 The epargne sal mnt3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setEpargneSalMnt3(?float $epargneSalMnt3): EmpDadsuRectif {
        $this->epargneSalMnt3 = $epargneSalMnt3;
        return $this;
    }

    /**
     * Set the epargne sal mnt4.
     *
     * @param float|null $epargneSalMnt4 The epargne sal mnt4.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setEpargneSalMnt4(?float $epargneSalMnt4): EmpDadsuRectif {
        $this->epargneSalMnt4 = $epargneSalMnt4;
        return $this;
    }

    /**
     * Set the gpec mnt exo cot secu.
     *
     * @param float|null $gpecMntExoCotSecu The gpec mnt exo cot secu.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setGpecMntExoCotSecu(?float $gpecMntExoCotSecu): EmpDadsuRectif {
        $this->gpecMntExoCotSecu = $gpecMntExoCotSecu;
        return $this;
    }

    /**
     * Set the gpec mnt exo csgcrds.
     *
     * @param float|null $gpecMntExoCsgcrds The gpec mnt exo csgcrds.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setGpecMntExoCsgcrds(?float $gpecMntExoCsgcrds): EmpDadsuRectif {
        $this->gpecMntExoCsgcrds = $gpecMntExoCsgcrds;
        return $this;
    }

    /**
     * Set the ind cp.
     *
     * @param float|null $indCp The ind cp.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setIndCp(?float $indCp): EmpDadsuRectif {
        $this->indCp = $indCp;
        return $this;
    }

    /**
     * Set the indemn cp plaf.
     *
     * @param float|null $indemnCpPlaf The indemn cp plaf.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setIndemnCpPlaf(?float $indemnCpPlaf): EmpDadsuRectif {
        $this->indemnCpPlaf = $indemnCpPlaf;
        return $this;
    }

    /**
     * Set the indemn impat.
     *
     * @param float|null $indemnImpat The indemn impat.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setIndemnImpat(?float $indemnImpat): EmpDadsuRectif {
        $this->indemnImpat = $indemnImpat;
        return $this;
    }

    /**
     * Set the indemn rupture mnt1.
     *
     * @param float|null $indemnRuptureMnt1 The indemn rupture mnt1.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setIndemnRuptureMnt1(?float $indemnRuptureMnt1): EmpDadsuRectif {
        $this->indemnRuptureMnt1 = $indemnRuptureMnt1;
        return $this;
    }

    /**
     * Set the indemn rupture mnt2.
     *
     * @param float|null $indemnRuptureMnt2 The indemn rupture mnt2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setIndemnRuptureMnt2(?float $indemnRuptureMnt2): EmpDadsuRectif {
        $this->indemnRuptureMnt2 = $indemnRuptureMnt2;
        return $this;
    }

    /**
     * Set the indice rectif.
     *
     * @param int|null $indiceRectif The indice rectif.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setIndiceRectif(?int $indiceRectif): EmpDadsuRectif {
        $this->indiceRectif = $indiceRectif;
        return $this;
    }

    /**
     * Set the montant b plaf.
     *
     * @param float|null $montantBPlaf The montant b plaf.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBPlaf(?float $montantBPlaf): EmpDadsuRectif {
        $this->montantBPlaf = $montantBPlaf;
        return $this;
    }

    /**
     * Set the montant b plaf2.
     *
     * @param float|null $montantBPlaf2 The montant b plaf2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBPlaf2(?float $montantBPlaf2): EmpDadsuRectif {
        $this->montantBPlaf2 = $montantBPlaf2;
        return $this;
    }

    /**
     * Set the montant b plaf3.
     *
     * @param float|null $montantBPlaf3 The montant b plaf3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBPlaf3(?float $montantBPlaf3): EmpDadsuRectif {
        $this->montantBPlaf3 = $montantBPlaf3;
        return $this;
    }

    /**
     * Set the montant b plaf4.
     *
     * @param float|null $montantBPlaf4 The montant b plaf4.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBPlaf4(?float $montantBPlaf4): EmpDadsuRectif {
        $this->montantBPlaf4 = $montantBPlaf4;
        return $this;
    }

    /**
     * Set the montant b plaf5.
     *
     * @param float|null $montantBPlaf5 The montant b plaf5.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBPlaf5(?float $montantBPlaf5): EmpDadsuRectif {
        $this->montantBPlaf5 = $montantBPlaf5;
        return $this;
    }

    /**
     * Set the montant brut.
     *
     * @param float|null $montantBrut The montant brut.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBrut(?float $montantBrut): EmpDadsuRectif {
        $this->montantBrut = $montantBrut;
        return $this;
    }

    /**
     * Set the montant brut2.
     *
     * @param float|null $montantBrut2 The montant brut2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBrut2(?float $montantBrut2): EmpDadsuRectif {
        $this->montantBrut2 = $montantBrut2;
        return $this;
    }

    /**
     * Set the montant brut3.
     *
     * @param float|null $montantBrut3 The montant brut3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBrut3(?float $montantBrut3): EmpDadsuRectif {
        $this->montantBrut3 = $montantBrut3;
        return $this;
    }

    /**
     * Set the montant brut4.
     *
     * @param float|null $montantBrut4 The montant brut4.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBrut4(?float $montantBrut4): EmpDadsuRectif {
        $this->montantBrut4 = $montantBrut4;
        return $this;
    }

    /**
     * Set the montant brut5.
     *
     * @param float|null $montantBrut5 The montant brut5.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBrut5(?float $montantBrut5): EmpDadsuRectif {
        $this->montantBrut5 = $montantBrut5;
        return $this;
    }

    /**
     * Set the montant somme isol brut.
     *
     * @param float|null $montantSommeIsolBrut The montant somme isol brut.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolBrut(?float $montantSommeIsolBrut): EmpDadsuRectif {
        $this->montantSommeIsolBrut = $montantSommeIsolBrut;
        return $this;
    }

    /**
     * Set the montant somme isol brut2.
     *
     * @param float|null $montantSommeIsolBrut2 The montant somme isol brut2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolBrut2(?float $montantSommeIsolBrut2): EmpDadsuRectif {
        $this->montantSommeIsolBrut2 = $montantSommeIsolBrut2;
        return $this;
    }

    /**
     * Set the montant somme isol brut3.
     *
     * @param float|null $montantSommeIsolBrut3 The montant somme isol brut3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolBrut3(?float $montantSommeIsolBrut3): EmpDadsuRectif {
        $this->montantSommeIsolBrut3 = $montantSommeIsolBrut3;
        return $this;
    }

    /**
     * Set the montant somme isol brut4.
     *
     * @param float|null $montantSommeIsolBrut4 The montant somme isol brut4.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolBrut4(?float $montantSommeIsolBrut4): EmpDadsuRectif {
        $this->montantSommeIsolBrut4 = $montantSommeIsolBrut4;
        return $this;
    }

    /**
     * Set the montant somme isol brut5.
     *
     * @param float|null $montantSommeIsolBrut5 The montant somme isol brut5.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolBrut5(?float $montantSommeIsolBrut5): EmpDadsuRectif {
        $this->montantSommeIsolBrut5 = $montantSommeIsolBrut5;
        return $this;
    }

    /**
     * Set the montant somme isol plaf.
     *
     * @param float|null $montantSommeIsolPlaf The montant somme isol plaf.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolPlaf(?float $montantSommeIsolPlaf): EmpDadsuRectif {
        $this->montantSommeIsolPlaf = $montantSommeIsolPlaf;
        return $this;
    }

    /**
     * Set the montant somme isol plaf2.
     *
     * @param float|null $montantSommeIsolPlaf2 The montant somme isol plaf2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolPlaf2(?float $montantSommeIsolPlaf2): EmpDadsuRectif {
        $this->montantSommeIsolPlaf2 = $montantSommeIsolPlaf2;
        return $this;
    }

    /**
     * Set the montant somme isol plaf3.
     *
     * @param float|null $montantSommeIsolPlaf3 The montant somme isol plaf3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolPlaf3(?float $montantSommeIsolPlaf3): EmpDadsuRectif {
        $this->montantSommeIsolPlaf3 = $montantSommeIsolPlaf3;
        return $this;
    }

    /**
     * Set the montant somme isol plaf4.
     *
     * @param float|null $montantSommeIsolPlaf4 The montant somme isol plaf4.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolPlaf4(?float $montantSommeIsolPlaf4): EmpDadsuRectif {
        $this->montantSommeIsolPlaf4 = $montantSommeIsolPlaf4;
        return $this;
    }

    /**
     * Set the montant somme isol plaf5.
     *
     * @param float|null $montantSommeIsolPlaf5 The montant somme isol plaf5.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolPlaf5(?float $montantSommeIsolPlaf5): EmpDadsuRectif {
        $this->montantSommeIsolPlaf5 = $montantSommeIsolPlaf5;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setNumero(?string $numero): EmpDadsuRectif {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int|null $numeroOrdre The numero ordre.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setNumeroOrdre(?int $numeroOrdre): EmpDadsuRectif {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the particip patron avtge mnt1.
     *
     * @param float|null $participPatronAvtgeMnt1 The particip patron avtge mnt1.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setParticipPatronAvtgeMnt1(?float $participPatronAvtgeMnt1): EmpDadsuRectif {
        $this->participPatronAvtgeMnt1 = $participPatronAvtgeMnt1;
        return $this;
    }

    /**
     * Set the particip patron avtge mnt2.
     *
     * @param float|null $participPatronAvtgeMnt2 The particip patron avtge mnt2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setParticipPatronAvtgeMnt2(?float $participPatronAvtgeMnt2): EmpDadsuRectif {
        $this->participPatronAvtgeMnt2 = $participPatronAvtgeMnt2;
        return $this;
    }

    /**
     * Set the particip serv pers.
     *
     * @param float|null $participServPers The particip serv pers.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setParticipServPers(?float $participServPers): EmpDadsuRectif {
        $this->participServPers = $participServPers;
        return $this;
    }

    /**
     * Set the taxe salaire.
     *
     * @param float|null $taxeSalaire The taxe salaire.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTaxeSalaire(?float $taxeSalaire): EmpDadsuRectif {
        $this->taxeSalaire = $taxeSalaire;
        return $this;
    }

    /**
     * Set the tds100.
     *
     * @param float|null $tds100 The tds100.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds100(?float $tds100): EmpDadsuRectif {
        $this->tds100 = $tds100;
        return $this;
    }

    /**
     * Set the tds103.
     *
     * @param float|null $tds103 The tds103.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds103(?float $tds103): EmpDadsuRectif {
        $this->tds103 = $tds103;
        return $this;
    }

    /**
     * Set the tds105.
     *
     * @param float|null $tds105 The tds105.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds105(?float $tds105): EmpDadsuRectif {
        $this->tds105 = $tds105;
        return $this;
    }

    /**
     * Set the tds107.
     *
     * @param bool|null $tds107 The tds107.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds107(?bool $tds107): EmpDadsuRectif {
        $this->tds107 = $tds107;
        return $this;
    }

    /**
     * Set the tds108.
     *
     * @param bool|null $tds108 The tds108.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds108(?bool $tds108): EmpDadsuRectif {
        $this->tds108 = $tds108;
        return $this;
    }

    /**
     * Set the tds109.
     *
     * @param bool|null $tds109 The tds109.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds109(?bool $tds109): EmpDadsuRectif {
        $this->tds109 = $tds109;
        return $this;
    }

    /**
     * Set the tds110.
     *
     * @param bool|null $tds110 The tds110.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds110(?bool $tds110): EmpDadsuRectif {
        $this->tds110 = $tds110;
        return $this;
    }

    /**
     * Set the tds111.
     *
     * @param bool|null $tds111 The tds111.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds111(?bool $tds111): EmpDadsuRectif {
        $this->tds111 = $tds111;
        return $this;
    }

    /**
     * Set the tds112.
     *
     * @param float|null $tds112 The tds112.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds112(?float $tds112): EmpDadsuRectif {
        $this->tds112 = $tds112;
        return $this;
    }

    /**
     * Set the tds113.
     *
     * @param bool|null $tds113 The tds113.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds113(?bool $tds113): EmpDadsuRectif {
        $this->tds113 = $tds113;
        return $this;
    }

    /**
     * Set the tds117.
     *
     * @param float|null $tds117 The tds117.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds117(?float $tds117): EmpDadsuRectif {
        $this->tds117 = $tds117;
        return $this;
    }

    /**
     * Set the tds119.
     *
     * @param bool|null $tds119 The tds119.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds119(?bool $tds119): EmpDadsuRectif {
        $this->tds119 = $tds119;
        return $this;
    }

    /**
     * Set the tds120.
     *
     * @param bool|null $tds120 The tds120.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds120(?bool $tds120): EmpDadsuRectif {
        $this->tds120 = $tds120;
        return $this;
    }

    /**
     * Set the tds121.
     *
     * @param bool|null $tds121 The tds121.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds121(?bool $tds121): EmpDadsuRectif {
        $this->tds121 = $tds121;
        return $this;
    }

    /**
     * Set the tds122.
     *
     * @param bool|null $tds122 The tds122.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds122(?bool $tds122): EmpDadsuRectif {
        $this->tds122 = $tds122;
        return $this;
    }

    /**
     * Set the tds125.
     *
     * @param float|null $tds125 The tds125.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds125(?float $tds125): EmpDadsuRectif {
        $this->tds125 = $tds125;
        return $this;
    }

    /**
     * Set the tds132.
     *
     * @param float|null $tds132 The tds132.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds132(?float $tds132): EmpDadsuRectif {
        $this->tds132 = $tds132;
        return $this;
    }

    /**
     * Set the tds134.
     *
     * @param float|null $tds134 The tds134.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds134(?float $tds134): EmpDadsuRectif {
        $this->tds134 = $tds134;
        return $this;
    }

    /**
     * Set the tds135.
     *
     * @param float|null $tds135 The tds135.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds135(?float $tds135): EmpDadsuRectif {
        $this->tds135 = $tds135;
        return $this;
    }

    /**
     * Set the tds136.
     *
     * @param float|null $tds136 The tds136.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds136(?float $tds136): EmpDadsuRectif {
        $this->tds136 = $tds136;
        return $this;
    }

    /**
     * Set the tds137.
     *
     * @param float|null $tds137 The tds137.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds137(?float $tds137): EmpDadsuRectif {
        $this->tds137 = $tds137;
        return $this;
    }

    /**
     * Set the tds141.
     *
     * @param float|null $tds141 The tds141.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds141(?float $tds141): EmpDadsuRectif {
        $this->tds141 = $tds141;
        return $this;
    }

    /**
     * Set the tds142.
     *
     * @param float|null $tds142 The tds142.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds142(?float $tds142): EmpDadsuRectif {
        $this->tds142 = $tds142;
        return $this;
    }

    /**
     * Set the tds81.
     *
     * @param float|null $tds81 The tds81.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds81(?float $tds81): EmpDadsuRectif {
        $this->tds81 = $tds81;
        return $this;
    }

    /**
     * Set the tds82.
     *
     * @param float|null $tds82 The tds82.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds82(?float $tds82): EmpDadsuRectif {
        $this->tds82 = $tds82;
        return $this;
    }

    /**
     * Set the tds alloc retraite.
     *
     * @param float|null $tdsAllocRetraite The tds alloc retraite.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTdsAllocRetraite(?float $tdsAllocRetraite): EmpDadsuRectif {
        $this->tdsAllocRetraite = $tdsAllocRetraite;
        return $this;
    }

    /**
     * Set the total plaf.
     *
     * @param float|null $totalPlaf The total plaf.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTotalPlaf(?float $totalPlaf): EmpDadsuRectif {
        $this->totalPlaf = $totalPlaf;
        return $this;
    }
}
