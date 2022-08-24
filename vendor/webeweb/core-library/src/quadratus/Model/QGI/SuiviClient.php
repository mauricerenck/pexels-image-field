<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

use DateTime;

/**
 * Suivi client.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class SuiviClient {

    /**
     * Bilan commentaire date.
     *
     * @var DateTime|null
     */
    private $bilanCommentaireDate;

    /**
     * Bilan commentaire lib.
     *
     * @var string|null
     */
    private $bilanCommentaireLib;

    /**
     * Bull commentaire date.
     *
     * @var DateTime|null
     */
    private $bullCommentaireDate;

    /**
     * Bull commentaire lib.
     *
     * @var string|null
     */
    private $bullCommentaireLib;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Dads u commentaire date.
     *
     * @var DateTime|null
     */
    private $dadsUCommentaireDate;

    /**
     * Dads u commentaire lib.
     *
     * @var string|null
     */
    private $dadsUCommentaireLib;

    /**
     * Das2 commentaire date.
     *
     * @var DateTime|null
     */
    private $das2CommentaireDate;

    /**
     * Das2 commentaire lib.
     *
     * @var string|null
     */
    private $das2CommentaireLib;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Dcr commentaire date.
     *
     * @var DateTime|null
     */
    private $dcrCommentaireDate;

    /**
     * Dcr commentaire lib.
     *
     * @var string|null
     */
    private $dcrCommentaireLib;

    /**
     * Dcr date limite.
     *
     * @var DateTime|null
     */
    private $dcrDateLimite;

    /**
     * Dsi commentaire date.
     *
     * @var DateTime|null
     */
    private $dsiCommentaireDate;

    /**
     * Dsi commentaire lib.
     *
     * @var string|null
     */
    private $dsiCommentaireLib;

    /**
     * Ducs assedic commentaire date.
     *
     * @var DateTime|null
     */
    private $ducsAssedicCommentaireDate;

    /**
     * Ducs assedic commentaire lib.
     *
     * @var string|null
     */
    private $ducsAssedicCommentaireLib;

    /**
     * Ducs urssaf commentaire date.
     *
     * @var DateTime|null
     */
    private $ducsUrssafCommentaireDate;

    /**
     * Ducs urssaf commentaire lib.
     *
     * @var string|null
     */
    private $ducsUrssafCommentaireLib;

    /**
     * Facturation commentaire date.
     *
     * @var DateTime|null
     */
    private $facturationCommentaireDate;

    /**
     * Facturation commentaire lib.
     *
     * @var string|null
     */
    private $facturationCommentaireLib;

    /**
     * Fait bilan.
     *
     * @var string|null
     */
    private $faitBilan;

    /**
     * Fait cvae.
     *
     * @var string|null
     */
    private $faitCvae;

    /**
     * Fait das2.
     *
     * @var string|null
     */
    private $faitDas2;

    /**
     * Fait dcr.
     *
     * @var string|null
     */
    private $faitDcr;

    /**
     * Fait generic1.
     *
     * @var string|null
     */
    private $faitGeneric1;

    /**
     * Fait generic10.
     *
     * @var string|null
     */
    private $faitGeneric10;

    /**
     * Fait generic2.
     *
     * @var string|null
     */
    private $faitGeneric2;

    /**
     * Fait generic3.
     *
     * @var string|null
     */
    private $faitGeneric3;

    /**
     * Fait generic4.
     *
     * @var string|null
     */
    private $faitGeneric4;

    /**
     * Fait generic5.
     *
     * @var string|null
     */
    private $faitGeneric5;

    /**
     * Fait generic6.
     *
     * @var string|null
     */
    private $faitGeneric6;

    /**
     * Fait generic7.
     *
     * @var string|null
     */
    private $faitGeneric7;

    /**
     * Fait generic8.
     *
     * @var string|null
     */
    private $faitGeneric8;

    /**
     * Fait generic9.
     *
     * @var string|null
     */
    private $faitGeneric9;

    /**
     * Fait ifu.
     *
     * @var string|null
     */
    private $faitIfu;

    /**
     * Fait impot revenu.
     *
     * @var string|null
     */
    private $faitImpotRevenu;

    /**
     * Fait isa.
     *
     * @var string|null
     */
    private $faitIsa;

    /**
     * Fait isf.
     *
     * @var string|null
     */
    private $faitIsf;

    /**
     * Fait isr.
     *
     * @var string|null
     */
    private $faitIsr;

    /**
     * Fait iss.
     *
     * @var string|null
     */
    private $faitIss;

    /**
     * Fait plaf tp.
     *
     * @var string|null
     */
    private $faitPlafTp;

    /**
     * Fait pre lib.
     *
     * @var string|null
     */
    private $faitPreLib;

    /**
     * Fait situation.
     *
     * @var string|null
     */
    private $faitSituation;

    /**
     * Fait tab bord.
     *
     * @var string|null
     */
    private $faitTabBord;

    /**
     * Fait tp.
     *
     * @var string|null
     */
    private $faitTp;

    /**
     * Fait tva.
     *
     * @var string|null
     */
    private $faitTva;

    /**
     * Fait tvs.
     *
     * @var string|null
     */
    private $faitTvs;

    /**
     * Generic10 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic10CommentaireDate;

    /**
     * Generic10 commentaire lib.
     *
     * @var string|null
     */
    private $generic10CommentaireLib;

    /**
     * Generic10 date limite.
     *
     * @var DateTime|null
     */
    private $generic10DateLimite;

    /**
     * Generic1 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic1CommentaireDate;

    /**
     * Generic1 commentaire lib.
     *
     * @var string|null
     */
    private $generic1CommentaireLib;

    /**
     * Generic1 date limite.
     *
     * @var DateTime|null
     */
    private $generic1DateLimite;

    /**
     * Generic2 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic2CommentaireDate;

    /**
     * Generic2 commentaire lib.
     *
     * @var string|null
     */
    private $generic2CommentaireLib;

    /**
     * Generic2 date limite.
     *
     * @var DateTime|null
     */
    private $generic2DateLimite;

    /**
     * Generic3 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic3CommentaireDate;

    /**
     * Generic3 commentaire lib.
     *
     * @var string|null
     */
    private $generic3CommentaireLib;

    /**
     * Generic3 date limite.
     *
     * @var DateTime|null
     */
    private $generic3DateLimite;

    /**
     * Generic4 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic4CommentaireDate;

    /**
     * Generic4 commentaire lib.
     *
     * @var string|null
     */
    private $generic4CommentaireLib;

    /**
     * Generic4 date limite.
     *
     * @var DateTime|null
     */
    private $generic4DateLimite;

    /**
     * Generic5 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic5CommentaireDate;

    /**
     * Generic5 commentaire lib.
     *
     * @var string|null
     */
    private $generic5CommentaireLib;

    /**
     * Generic5 date limite.
     *
     * @var DateTime|null
     */
    private $generic5DateLimite;

    /**
     * Generic6 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic6CommentaireDate;

    /**
     * Generic6 commentaire lib.
     *
     * @var string|null
     */
    private $generic6CommentaireLib;

    /**
     * Generic6 date limite.
     *
     * @var DateTime|null
     */
    private $generic6DateLimite;

    /**
     * Generic7 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic7CommentaireDate;

    /**
     * Generic7 commentaire lib.
     *
     * @var string|null
     */
    private $generic7CommentaireLib;

    /**
     * Generic7 date limite.
     *
     * @var DateTime|null
     */
    private $generic7DateLimite;

    /**
     * Generic8 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic8CommentaireDate;

    /**
     * Generic8 commentaire lib.
     *
     * @var string|null
     */
    private $generic8CommentaireLib;

    /**
     * Generic8 date limite.
     *
     * @var DateTime|null
     */
    private $generic8DateLimite;

    /**
     * Generic9 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic9CommentaireDate;

    /**
     * Generic9 commentaire lib.
     *
     * @var string|null
     */
    private $generic9CommentaireLib;

    /**
     * Generic9 date limite.
     *
     * @var DateTime|null
     */
    private $generic9DateLimite;

    /**
     * Ifu commentaire date.
     *
     * @var DateTime|null
     */
    private $ifuCommentaireDate;

    /**
     * Ifu commentaire lib.
     *
     * @var string|null
     */
    private $ifuCommentaireLib;

    /**
     * Impot revenu commentaire date.
     *
     * @var DateTime|null
     */
    private $impotRevenuCommentaireDate;

    /**
     * Impot revenu commentaire lib.
     *
     * @var string|null
     */
    private $impotRevenuCommentaireLib;

    /**
     * Impot revenu date limite.
     *
     * @var DateTime|null
     */
    private $impotRevenuDateLimite;

    /**
     * Isa commentaire date.
     *
     * @var DateTime|null
     */
    private $isaCommentaireDate;

    /**
     * Isa commentaire lib.
     *
     * @var string|null
     */
    private $isaCommentaireLib;

    /**
     * Isf commentaire date.
     *
     * @var DateTime|null
     */
    private $isfCommentaireDate;

    /**
     * Isf commentaire lib.
     *
     * @var string|null
     */
    private $isfCommentaireLib;

    /**
     * Isf date limite.
     *
     * @var DateTime|null
     */
    private $isfDateLimite;

    /**
     * Isr commentaire date.
     *
     * @var DateTime|null
     */
    private $isrCommentaireDate;

    /**
     * Isr commentaire lib.
     *
     * @var string|null
     */
    private $isrCommentaireLib;

    /**
     * Iss commentaire date.
     *
     * @var DateTime|null
     */
    private $issCommentaireDate;

    /**
     * Iss commentaire lib.
     *
     * @var string|null
     */
    private $issCommentaireLib;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Plaf tp commentaire date.
     *
     * @var DateTime|null
     */
    private $plafTpCommentaireDate;

    /**
     * Plaf tp commentaire lib.
     *
     * @var string|null
     */
    private $plafTpCommentaireLib;

    /**
     * Pre lib commentaire date.
     *
     * @var DateTime|null
     */
    private $preLibCommentaireDate;

    /**
     * Pre lib commentaire lib.
     *
     * @var string|null
     */
    private $preLibCommentaireLib;

    /**
     * Pre lib date limite.
     *
     * @var DateTime|null
     */
    private $preLibDateLimite;

    /**
     * Situation commentaire date.
     *
     * @var DateTime|null
     */
    private $situationCommentaireDate;

    /**
     * Situation commentaire lib.
     *
     * @var string|null
     */
    private $situationCommentaireLib;

    /**
     * Situation date limite.
     *
     * @var DateTime|null
     */
    private $situationDateLimite;

    /**
     * Tab bord commentaire date.
     *
     * @var DateTime|null
     */
    private $tabBordCommentaireDate;

    /**
     * Tab bord commentaire lib.
     *
     * @var string|null
     */
    private $tabBordCommentaireLib;

    /**
     * Tab bord date limite.
     *
     * @var DateTime|null
     */
    private $tabBordDateLimite;

    /**
     * Tp commentaire date.
     *
     * @var DateTime|null
     */
    private $tpCommentaireDate;

    /**
     * Tp commentaire lib.
     *
     * @var string|null
     */
    private $tpCommentaireLib;

    /**
     * Tsa commentaire date.
     *
     * @var DateTime|null
     */
    private $tsaCommentaireDate;

    /**
     * Tsa commentaire lib.
     *
     * @var string|null
     */
    private $tsaCommentaireLib;

    /**
     * Tss commentaire date.
     *
     * @var DateTime|null
     */
    private $tssCommentaireDate;

    /**
     * Tss commentaire lib.
     *
     * @var string|null
     */
    private $tssCommentaireLib;

    /**
     * Tva commentaire date.
     *
     * @var DateTime|null
     */
    private $tvaCommentaireDate;

    /**
     * Tva commentaire lib.
     *
     * @var string|null
     */
    private $tvaCommentaireLib;

    /**
     * Tvs commentaire date.
     *
     * @var DateTime|null
     */
    private $tvsCommentaireDate;

    /**
     * Tvs commentaire lib.
     *
     * @var string|null
     */
    private $tvsCommentaireLib;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the bilan commentaire date.
     *
     * @return DateTime|null Returns the bilan commentaire date.
     */
    public function getBilanCommentaireDate(): ?DateTime {
        return $this->bilanCommentaireDate;
    }

    /**
     * Get the bilan commentaire lib.
     *
     * @return string|null Returns the bilan commentaire lib.
     */
    public function getBilanCommentaireLib(): ?string {
        return $this->bilanCommentaireLib;
    }

    /**
     * Get the bull commentaire date.
     *
     * @return DateTime|null Returns the bull commentaire date.
     */
    public function getBullCommentaireDate(): ?DateTime {
        return $this->bullCommentaireDate;
    }

    /**
     * Get the bull commentaire lib.
     *
     * @return string|null Returns the bull commentaire lib.
     */
    public function getBullCommentaireLib(): ?string {
        return $this->bullCommentaireLib;
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the dads u commentaire date.
     *
     * @return DateTime|null Returns the dads u commentaire date.
     */
    public function getDadsUCommentaireDate(): ?DateTime {
        return $this->dadsUCommentaireDate;
    }

    /**
     * Get the dads u commentaire lib.
     *
     * @return string|null Returns the dads u commentaire lib.
     */
    public function getDadsUCommentaireLib(): ?string {
        return $this->dadsUCommentaireLib;
    }

    /**
     * Get the das2 commentaire date.
     *
     * @return DateTime|null Returns the das2 commentaire date.
     */
    public function getDas2CommentaireDate(): ?DateTime {
        return $this->das2CommentaireDate;
    }

    /**
     * Get the das2 commentaire lib.
     *
     * @return string|null Returns the das2 commentaire lib.
     */
    public function getDas2CommentaireLib(): ?string {
        return $this->das2CommentaireLib;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif(): ?DateTime {
        return $this->dateModif;
    }

    /**
     * Get the dcr commentaire date.
     *
     * @return DateTime|null Returns the dcr commentaire date.
     */
    public function getDcrCommentaireDate(): ?DateTime {
        return $this->dcrCommentaireDate;
    }

    /**
     * Get the dcr commentaire lib.
     *
     * @return string|null Returns the dcr commentaire lib.
     */
    public function getDcrCommentaireLib(): ?string {
        return $this->dcrCommentaireLib;
    }

    /**
     * Get the dcr date limite.
     *
     * @return DateTime|null Returns the dcr date limite.
     */
    public function getDcrDateLimite(): ?DateTime {
        return $this->dcrDateLimite;
    }

    /**
     * Get the dsi commentaire date.
     *
     * @return DateTime|null Returns the dsi commentaire date.
     */
    public function getDsiCommentaireDate(): ?DateTime {
        return $this->dsiCommentaireDate;
    }

    /**
     * Get the dsi commentaire lib.
     *
     * @return string|null Returns the dsi commentaire lib.
     */
    public function getDsiCommentaireLib(): ?string {
        return $this->dsiCommentaireLib;
    }

    /**
     * Get the ducs assedic commentaire date.
     *
     * @return DateTime|null Returns the ducs assedic commentaire date.
     */
    public function getDucsAssedicCommentaireDate(): ?DateTime {
        return $this->ducsAssedicCommentaireDate;
    }

    /**
     * Get the ducs assedic commentaire lib.
     *
     * @return string|null Returns the ducs assedic commentaire lib.
     */
    public function getDucsAssedicCommentaireLib(): ?string {
        return $this->ducsAssedicCommentaireLib;
    }

    /**
     * Get the ducs urssaf commentaire date.
     *
     * @return DateTime|null Returns the ducs urssaf commentaire date.
     */
    public function getDucsUrssafCommentaireDate(): ?DateTime {
        return $this->ducsUrssafCommentaireDate;
    }

    /**
     * Get the ducs urssaf commentaire lib.
     *
     * @return string|null Returns the ducs urssaf commentaire lib.
     */
    public function getDucsUrssafCommentaireLib(): ?string {
        return $this->ducsUrssafCommentaireLib;
    }

    /**
     * Get the facturation commentaire date.
     *
     * @return DateTime|null Returns the facturation commentaire date.
     */
    public function getFacturationCommentaireDate(): ?DateTime {
        return $this->facturationCommentaireDate;
    }

    /**
     * Get the facturation commentaire lib.
     *
     * @return string|null Returns the facturation commentaire lib.
     */
    public function getFacturationCommentaireLib(): ?string {
        return $this->facturationCommentaireLib;
    }

    /**
     * Get the fait bilan.
     *
     * @return string|null Returns the fait bilan.
     */
    public function getFaitBilan(): ?string {
        return $this->faitBilan;
    }

    /**
     * Get the fait cvae.
     *
     * @return string|null Returns the fait cvae.
     */
    public function getFaitCvae(): ?string {
        return $this->faitCvae;
    }

    /**
     * Get the fait das2.
     *
     * @return string|null Returns the fait das2.
     */
    public function getFaitDas2(): ?string {
        return $this->faitDas2;
    }

    /**
     * Get the fait dcr.
     *
     * @return string|null Returns the fait dcr.
     */
    public function getFaitDcr(): ?string {
        return $this->faitDcr;
    }

    /**
     * Get the fait generic1.
     *
     * @return string|null Returns the fait generic1.
     */
    public function getFaitGeneric1(): ?string {
        return $this->faitGeneric1;
    }

    /**
     * Get the fait generic10.
     *
     * @return string|null Returns the fait generic10.
     */
    public function getFaitGeneric10(): ?string {
        return $this->faitGeneric10;
    }

    /**
     * Get the fait generic2.
     *
     * @return string|null Returns the fait generic2.
     */
    public function getFaitGeneric2(): ?string {
        return $this->faitGeneric2;
    }

    /**
     * Get the fait generic3.
     *
     * @return string|null Returns the fait generic3.
     */
    public function getFaitGeneric3(): ?string {
        return $this->faitGeneric3;
    }

    /**
     * Get the fait generic4.
     *
     * @return string|null Returns the fait generic4.
     */
    public function getFaitGeneric4(): ?string {
        return $this->faitGeneric4;
    }

    /**
     * Get the fait generic5.
     *
     * @return string|null Returns the fait generic5.
     */
    public function getFaitGeneric5(): ?string {
        return $this->faitGeneric5;
    }

    /**
     * Get the fait generic6.
     *
     * @return string|null Returns the fait generic6.
     */
    public function getFaitGeneric6(): ?string {
        return $this->faitGeneric6;
    }

    /**
     * Get the fait generic7.
     *
     * @return string|null Returns the fait generic7.
     */
    public function getFaitGeneric7(): ?string {
        return $this->faitGeneric7;
    }

    /**
     * Get the fait generic8.
     *
     * @return string|null Returns the fait generic8.
     */
    public function getFaitGeneric8(): ?string {
        return $this->faitGeneric8;
    }

    /**
     * Get the fait generic9.
     *
     * @return string|null Returns the fait generic9.
     */
    public function getFaitGeneric9(): ?string {
        return $this->faitGeneric9;
    }

    /**
     * Get the fait ifu.
     *
     * @return string|null Returns the fait ifu.
     */
    public function getFaitIfu(): ?string {
        return $this->faitIfu;
    }

    /**
     * Get the fait impot revenu.
     *
     * @return string|null Returns the fait impot revenu.
     */
    public function getFaitImpotRevenu(): ?string {
        return $this->faitImpotRevenu;
    }

    /**
     * Get the fait isa.
     *
     * @return string|null Returns the fait isa.
     */
    public function getFaitIsa(): ?string {
        return $this->faitIsa;
    }

    /**
     * Get the fait isf.
     *
     * @return string|null Returns the fait isf.
     */
    public function getFaitIsf(): ?string {
        return $this->faitIsf;
    }

    /**
     * Get the fait isr.
     *
     * @return string|null Returns the fait isr.
     */
    public function getFaitIsr(): ?string {
        return $this->faitIsr;
    }

    /**
     * Get the fait iss.
     *
     * @return string|null Returns the fait iss.
     */
    public function getFaitIss(): ?string {
        return $this->faitIss;
    }

    /**
     * Get the fait plaf tp.
     *
     * @return string|null Returns the fait plaf tp.
     */
    public function getFaitPlafTp(): ?string {
        return $this->faitPlafTp;
    }

    /**
     * Get the fait pre lib.
     *
     * @return string|null Returns the fait pre lib.
     */
    public function getFaitPreLib(): ?string {
        return $this->faitPreLib;
    }

    /**
     * Get the fait situation.
     *
     * @return string|null Returns the fait situation.
     */
    public function getFaitSituation(): ?string {
        return $this->faitSituation;
    }

    /**
     * Get the fait tab bord.
     *
     * @return string|null Returns the fait tab bord.
     */
    public function getFaitTabBord(): ?string {
        return $this->faitTabBord;
    }

    /**
     * Get the fait tp.
     *
     * @return string|null Returns the fait tp.
     */
    public function getFaitTp(): ?string {
        return $this->faitTp;
    }

    /**
     * Get the fait tva.
     *
     * @return string|null Returns the fait tva.
     */
    public function getFaitTva(): ?string {
        return $this->faitTva;
    }

    /**
     * Get the fait tvs.
     *
     * @return string|null Returns the fait tvs.
     */
    public function getFaitTvs(): ?string {
        return $this->faitTvs;
    }

    /**
     * Get the generic10 commentaire date.
     *
     * @return DateTime|null Returns the generic10 commentaire date.
     */
    public function getGeneric10CommentaireDate(): ?DateTime {
        return $this->generic10CommentaireDate;
    }

    /**
     * Get the generic10 commentaire lib.
     *
     * @return string|null Returns the generic10 commentaire lib.
     */
    public function getGeneric10CommentaireLib(): ?string {
        return $this->generic10CommentaireLib;
    }

    /**
     * Get the generic10 date limite.
     *
     * @return DateTime|null Returns the generic10 date limite.
     */
    public function getGeneric10DateLimite(): ?DateTime {
        return $this->generic10DateLimite;
    }

    /**
     * Get the generic1 commentaire date.
     *
     * @return DateTime|null Returns the generic1 commentaire date.
     */
    public function getGeneric1CommentaireDate(): ?DateTime {
        return $this->generic1CommentaireDate;
    }

    /**
     * Get the generic1 commentaire lib.
     *
     * @return string|null Returns the generic1 commentaire lib.
     */
    public function getGeneric1CommentaireLib(): ?string {
        return $this->generic1CommentaireLib;
    }

    /**
     * Get the generic1 date limite.
     *
     * @return DateTime|null Returns the generic1 date limite.
     */
    public function getGeneric1DateLimite(): ?DateTime {
        return $this->generic1DateLimite;
    }

    /**
     * Get the generic2 commentaire date.
     *
     * @return DateTime|null Returns the generic2 commentaire date.
     */
    public function getGeneric2CommentaireDate(): ?DateTime {
        return $this->generic2CommentaireDate;
    }

    /**
     * Get the generic2 commentaire lib.
     *
     * @return string|null Returns the generic2 commentaire lib.
     */
    public function getGeneric2CommentaireLib(): ?string {
        return $this->generic2CommentaireLib;
    }

    /**
     * Get the generic2 date limite.
     *
     * @return DateTime|null Returns the generic2 date limite.
     */
    public function getGeneric2DateLimite(): ?DateTime {
        return $this->generic2DateLimite;
    }

    /**
     * Get the generic3 commentaire date.
     *
     * @return DateTime|null Returns the generic3 commentaire date.
     */
    public function getGeneric3CommentaireDate(): ?DateTime {
        return $this->generic3CommentaireDate;
    }

    /**
     * Get the generic3 commentaire lib.
     *
     * @return string|null Returns the generic3 commentaire lib.
     */
    public function getGeneric3CommentaireLib(): ?string {
        return $this->generic3CommentaireLib;
    }

    /**
     * Get the generic3 date limite.
     *
     * @return DateTime|null Returns the generic3 date limite.
     */
    public function getGeneric3DateLimite(): ?DateTime {
        return $this->generic3DateLimite;
    }

    /**
     * Get the generic4 commentaire date.
     *
     * @return DateTime|null Returns the generic4 commentaire date.
     */
    public function getGeneric4CommentaireDate(): ?DateTime {
        return $this->generic4CommentaireDate;
    }

    /**
     * Get the generic4 commentaire lib.
     *
     * @return string|null Returns the generic4 commentaire lib.
     */
    public function getGeneric4CommentaireLib(): ?string {
        return $this->generic4CommentaireLib;
    }

    /**
     * Get the generic4 date limite.
     *
     * @return DateTime|null Returns the generic4 date limite.
     */
    public function getGeneric4DateLimite(): ?DateTime {
        return $this->generic4DateLimite;
    }

    /**
     * Get the generic5 commentaire date.
     *
     * @return DateTime|null Returns the generic5 commentaire date.
     */
    public function getGeneric5CommentaireDate(): ?DateTime {
        return $this->generic5CommentaireDate;
    }

    /**
     * Get the generic5 commentaire lib.
     *
     * @return string|null Returns the generic5 commentaire lib.
     */
    public function getGeneric5CommentaireLib(): ?string {
        return $this->generic5CommentaireLib;
    }

    /**
     * Get the generic5 date limite.
     *
     * @return DateTime|null Returns the generic5 date limite.
     */
    public function getGeneric5DateLimite(): ?DateTime {
        return $this->generic5DateLimite;
    }

    /**
     * Get the generic6 commentaire date.
     *
     * @return DateTime|null Returns the generic6 commentaire date.
     */
    public function getGeneric6CommentaireDate(): ?DateTime {
        return $this->generic6CommentaireDate;
    }

    /**
     * Get the generic6 commentaire lib.
     *
     * @return string|null Returns the generic6 commentaire lib.
     */
    public function getGeneric6CommentaireLib(): ?string {
        return $this->generic6CommentaireLib;
    }

    /**
     * Get the generic6 date limite.
     *
     * @return DateTime|null Returns the generic6 date limite.
     */
    public function getGeneric6DateLimite(): ?DateTime {
        return $this->generic6DateLimite;
    }

    /**
     * Get the generic7 commentaire date.
     *
     * @return DateTime|null Returns the generic7 commentaire date.
     */
    public function getGeneric7CommentaireDate(): ?DateTime {
        return $this->generic7CommentaireDate;
    }

    /**
     * Get the generic7 commentaire lib.
     *
     * @return string|null Returns the generic7 commentaire lib.
     */
    public function getGeneric7CommentaireLib(): ?string {
        return $this->generic7CommentaireLib;
    }

    /**
     * Get the generic7 date limite.
     *
     * @return DateTime|null Returns the generic7 date limite.
     */
    public function getGeneric7DateLimite(): ?DateTime {
        return $this->generic7DateLimite;
    }

    /**
     * Get the generic8 commentaire date.
     *
     * @return DateTime|null Returns the generic8 commentaire date.
     */
    public function getGeneric8CommentaireDate(): ?DateTime {
        return $this->generic8CommentaireDate;
    }

    /**
     * Get the generic8 commentaire lib.
     *
     * @return string|null Returns the generic8 commentaire lib.
     */
    public function getGeneric8CommentaireLib(): ?string {
        return $this->generic8CommentaireLib;
    }

    /**
     * Get the generic8 date limite.
     *
     * @return DateTime|null Returns the generic8 date limite.
     */
    public function getGeneric8DateLimite(): ?DateTime {
        return $this->generic8DateLimite;
    }

    /**
     * Get the generic9 commentaire date.
     *
     * @return DateTime|null Returns the generic9 commentaire date.
     */
    public function getGeneric9CommentaireDate(): ?DateTime {
        return $this->generic9CommentaireDate;
    }

    /**
     * Get the generic9 commentaire lib.
     *
     * @return string|null Returns the generic9 commentaire lib.
     */
    public function getGeneric9CommentaireLib(): ?string {
        return $this->generic9CommentaireLib;
    }

    /**
     * Get the generic9 date limite.
     *
     * @return DateTime|null Returns the generic9 date limite.
     */
    public function getGeneric9DateLimite(): ?DateTime {
        return $this->generic9DateLimite;
    }

    /**
     * Get the ifu commentaire date.
     *
     * @return DateTime|null Returns the ifu commentaire date.
     */
    public function getIfuCommentaireDate(): ?DateTime {
        return $this->ifuCommentaireDate;
    }

    /**
     * Get the ifu commentaire lib.
     *
     * @return string|null Returns the ifu commentaire lib.
     */
    public function getIfuCommentaireLib(): ?string {
        return $this->ifuCommentaireLib;
    }

    /**
     * Get the impot revenu commentaire date.
     *
     * @return DateTime|null Returns the impot revenu commentaire date.
     */
    public function getImpotRevenuCommentaireDate(): ?DateTime {
        return $this->impotRevenuCommentaireDate;
    }

    /**
     * Get the impot revenu commentaire lib.
     *
     * @return string|null Returns the impot revenu commentaire lib.
     */
    public function getImpotRevenuCommentaireLib(): ?string {
        return $this->impotRevenuCommentaireLib;
    }

    /**
     * Get the impot revenu date limite.
     *
     * @return DateTime|null Returns the impot revenu date limite.
     */
    public function getImpotRevenuDateLimite(): ?DateTime {
        return $this->impotRevenuDateLimite;
    }

    /**
     * Get the isa commentaire date.
     *
     * @return DateTime|null Returns the isa commentaire date.
     */
    public function getIsaCommentaireDate(): ?DateTime {
        return $this->isaCommentaireDate;
    }

    /**
     * Get the isa commentaire lib.
     *
     * @return string|null Returns the isa commentaire lib.
     */
    public function getIsaCommentaireLib(): ?string {
        return $this->isaCommentaireLib;
    }

    /**
     * Get the isf commentaire date.
     *
     * @return DateTime|null Returns the isf commentaire date.
     */
    public function getIsfCommentaireDate(): ?DateTime {
        return $this->isfCommentaireDate;
    }

    /**
     * Get the isf commentaire lib.
     *
     * @return string|null Returns the isf commentaire lib.
     */
    public function getIsfCommentaireLib(): ?string {
        return $this->isfCommentaireLib;
    }

    /**
     * Get the isf date limite.
     *
     * @return DateTime|null Returns the isf date limite.
     */
    public function getIsfDateLimite(): ?DateTime {
        return $this->isfDateLimite;
    }

    /**
     * Get the isr commentaire date.
     *
     * @return DateTime|null Returns the isr commentaire date.
     */
    public function getIsrCommentaireDate(): ?DateTime {
        return $this->isrCommentaireDate;
    }

    /**
     * Get the isr commentaire lib.
     *
     * @return string|null Returns the isr commentaire lib.
     */
    public function getIsrCommentaireLib(): ?string {
        return $this->isrCommentaireLib;
    }

    /**
     * Get the iss commentaire date.
     *
     * @return DateTime|null Returns the iss commentaire date.
     */
    public function getIssCommentaireDate(): ?DateTime {
        return $this->issCommentaireDate;
    }

    /**
     * Get the iss commentaire lib.
     *
     * @return string|null Returns the iss commentaire lib.
     */
    public function getIssCommentaireLib(): ?string {
        return $this->issCommentaireLib;
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
     * Get the plaf tp commentaire date.
     *
     * @return DateTime|null Returns the plaf tp commentaire date.
     */
    public function getPlafTpCommentaireDate(): ?DateTime {
        return $this->plafTpCommentaireDate;
    }

    /**
     * Get the plaf tp commentaire lib.
     *
     * @return string|null Returns the plaf tp commentaire lib.
     */
    public function getPlafTpCommentaireLib(): ?string {
        return $this->plafTpCommentaireLib;
    }

    /**
     * Get the pre lib commentaire date.
     *
     * @return DateTime|null Returns the pre lib commentaire date.
     */
    public function getPreLibCommentaireDate(): ?DateTime {
        return $this->preLibCommentaireDate;
    }

    /**
     * Get the pre lib commentaire lib.
     *
     * @return string|null Returns the pre lib commentaire lib.
     */
    public function getPreLibCommentaireLib(): ?string {
        return $this->preLibCommentaireLib;
    }

    /**
     * Get the pre lib date limite.
     *
     * @return DateTime|null Returns the pre lib date limite.
     */
    public function getPreLibDateLimite(): ?DateTime {
        return $this->preLibDateLimite;
    }

    /**
     * Get the situation commentaire date.
     *
     * @return DateTime|null Returns the situation commentaire date.
     */
    public function getSituationCommentaireDate(): ?DateTime {
        return $this->situationCommentaireDate;
    }

    /**
     * Get the situation commentaire lib.
     *
     * @return string|null Returns the situation commentaire lib.
     */
    public function getSituationCommentaireLib(): ?string {
        return $this->situationCommentaireLib;
    }

    /**
     * Get the situation date limite.
     *
     * @return DateTime|null Returns the situation date limite.
     */
    public function getSituationDateLimite(): ?DateTime {
        return $this->situationDateLimite;
    }

    /**
     * Get the tab bord commentaire date.
     *
     * @return DateTime|null Returns the tab bord commentaire date.
     */
    public function getTabBordCommentaireDate(): ?DateTime {
        return $this->tabBordCommentaireDate;
    }

    /**
     * Get the tab bord commentaire lib.
     *
     * @return string|null Returns the tab bord commentaire lib.
     */
    public function getTabBordCommentaireLib(): ?string {
        return $this->tabBordCommentaireLib;
    }

    /**
     * Get the tab bord date limite.
     *
     * @return DateTime|null Returns the tab bord date limite.
     */
    public function getTabBordDateLimite(): ?DateTime {
        return $this->tabBordDateLimite;
    }

    /**
     * Get the tp commentaire date.
     *
     * @return DateTime|null Returns the tp commentaire date.
     */
    public function getTpCommentaireDate(): ?DateTime {
        return $this->tpCommentaireDate;
    }

    /**
     * Get the tp commentaire lib.
     *
     * @return string|null Returns the tp commentaire lib.
     */
    public function getTpCommentaireLib(): ?string {
        return $this->tpCommentaireLib;
    }

    /**
     * Get the tsa commentaire date.
     *
     * @return DateTime|null Returns the tsa commentaire date.
     */
    public function getTsaCommentaireDate(): ?DateTime {
        return $this->tsaCommentaireDate;
    }

    /**
     * Get the tsa commentaire lib.
     *
     * @return string|null Returns the tsa commentaire lib.
     */
    public function getTsaCommentaireLib(): ?string {
        return $this->tsaCommentaireLib;
    }

    /**
     * Get the tss commentaire date.
     *
     * @return DateTime|null Returns the tss commentaire date.
     */
    public function getTssCommentaireDate(): ?DateTime {
        return $this->tssCommentaireDate;
    }

    /**
     * Get the tss commentaire lib.
     *
     * @return string|null Returns the tss commentaire lib.
     */
    public function getTssCommentaireLib(): ?string {
        return $this->tssCommentaireLib;
    }

    /**
     * Get the tva commentaire date.
     *
     * @return DateTime|null Returns the tva commentaire date.
     */
    public function getTvaCommentaireDate(): ?DateTime {
        return $this->tvaCommentaireDate;
    }

    /**
     * Get the tva commentaire lib.
     *
     * @return string|null Returns the tva commentaire lib.
     */
    public function getTvaCommentaireLib(): ?string {
        return $this->tvaCommentaireLib;
    }

    /**
     * Get the tvs commentaire date.
     *
     * @return DateTime|null Returns the tvs commentaire date.
     */
    public function getTvsCommentaireDate(): ?DateTime {
        return $this->tvsCommentaireDate;
    }

    /**
     * Get the tvs commentaire lib.
     *
     * @return string|null Returns the tvs commentaire lib.
     */
    public function getTvsCommentaireLib(): ?string {
        return $this->tvsCommentaireLib;
    }

    /**
     * Set the bilan commentaire date.
     *
     * @param DateTime|null $bilanCommentaireDate The bilan commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setBilanCommentaireDate(?DateTime $bilanCommentaireDate): SuiviClient {
        $this->bilanCommentaireDate = $bilanCommentaireDate;
        return $this;
    }

    /**
     * Set the bilan commentaire lib.
     *
     * @param string|null $bilanCommentaireLib The bilan commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setBilanCommentaireLib(?string $bilanCommentaireLib): SuiviClient {
        $this->bilanCommentaireLib = $bilanCommentaireLib;
        return $this;
    }

    /**
     * Set the bull commentaire date.
     *
     * @param DateTime|null $bullCommentaireDate The bull commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setBullCommentaireDate(?DateTime $bullCommentaireDate): SuiviClient {
        $this->bullCommentaireDate = $bullCommentaireDate;
        return $this;
    }

    /**
     * Set the bull commentaire lib.
     *
     * @param string|null $bullCommentaireLib The bull commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setBullCommentaireLib(?string $bullCommentaireLib): SuiviClient {
        $this->bullCommentaireLib = $bullCommentaireLib;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setCodeClient(?string $codeClient): SuiviClient {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the dads u commentaire date.
     *
     * @param DateTime|null $dadsUCommentaireDate The dads u commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDadsUCommentaireDate(?DateTime $dadsUCommentaireDate): SuiviClient {
        $this->dadsUCommentaireDate = $dadsUCommentaireDate;
        return $this;
    }

    /**
     * Set the dads u commentaire lib.
     *
     * @param string|null $dadsUCommentaireLib The dads u commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDadsUCommentaireLib(?string $dadsUCommentaireLib): SuiviClient {
        $this->dadsUCommentaireLib = $dadsUCommentaireLib;
        return $this;
    }

    /**
     * Set the das2 commentaire date.
     *
     * @param DateTime|null $das2CommentaireDate The das2 commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDas2CommentaireDate(?DateTime $das2CommentaireDate): SuiviClient {
        $this->das2CommentaireDate = $das2CommentaireDate;
        return $this;
    }

    /**
     * Set the das2 commentaire lib.
     *
     * @param string|null $das2CommentaireLib The das2 commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDas2CommentaireLib(?string $das2CommentaireLib): SuiviClient {
        $this->das2CommentaireLib = $das2CommentaireLib;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDateModif(?DateTime $dateModif): SuiviClient {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the dcr commentaire date.
     *
     * @param DateTime|null $dcrCommentaireDate The dcr commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDcrCommentaireDate(?DateTime $dcrCommentaireDate): SuiviClient {
        $this->dcrCommentaireDate = $dcrCommentaireDate;
        return $this;
    }

    /**
     * Set the dcr commentaire lib.
     *
     * @param string|null $dcrCommentaireLib The dcr commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDcrCommentaireLib(?string $dcrCommentaireLib): SuiviClient {
        $this->dcrCommentaireLib = $dcrCommentaireLib;
        return $this;
    }

    /**
     * Set the dcr date limite.
     *
     * @param DateTime|null $dcrDateLimite The dcr date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDcrDateLimite(?DateTime $dcrDateLimite): SuiviClient {
        $this->dcrDateLimite = $dcrDateLimite;
        return $this;
    }

    /**
     * Set the dsi commentaire date.
     *
     * @param DateTime|null $dsiCommentaireDate The dsi commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDsiCommentaireDate(?DateTime $dsiCommentaireDate): SuiviClient {
        $this->dsiCommentaireDate = $dsiCommentaireDate;
        return $this;
    }

    /**
     * Set the dsi commentaire lib.
     *
     * @param string|null $dsiCommentaireLib The dsi commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDsiCommentaireLib(?string $dsiCommentaireLib): SuiviClient {
        $this->dsiCommentaireLib = $dsiCommentaireLib;
        return $this;
    }

    /**
     * Set the ducs assedic commentaire date.
     *
     * @param DateTime|null $ducsAssedicCommentaireDate The ducs assedic commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDucsAssedicCommentaireDate(?DateTime $ducsAssedicCommentaireDate): SuiviClient {
        $this->ducsAssedicCommentaireDate = $ducsAssedicCommentaireDate;
        return $this;
    }

    /**
     * Set the ducs assedic commentaire lib.
     *
     * @param string|null $ducsAssedicCommentaireLib The ducs assedic commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDucsAssedicCommentaireLib(?string $ducsAssedicCommentaireLib): SuiviClient {
        $this->ducsAssedicCommentaireLib = $ducsAssedicCommentaireLib;
        return $this;
    }

    /**
     * Set the ducs urssaf commentaire date.
     *
     * @param DateTime|null $ducsUrssafCommentaireDate The ducs urssaf commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDucsUrssafCommentaireDate(?DateTime $ducsUrssafCommentaireDate): SuiviClient {
        $this->ducsUrssafCommentaireDate = $ducsUrssafCommentaireDate;
        return $this;
    }

    /**
     * Set the ducs urssaf commentaire lib.
     *
     * @param string|null $ducsUrssafCommentaireLib The ducs urssaf commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setDucsUrssafCommentaireLib(?string $ducsUrssafCommentaireLib): SuiviClient {
        $this->ducsUrssafCommentaireLib = $ducsUrssafCommentaireLib;
        return $this;
    }

    /**
     * Set the facturation commentaire date.
     *
     * @param DateTime|null $facturationCommentaireDate The facturation commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFacturationCommentaireDate(?DateTime $facturationCommentaireDate): SuiviClient {
        $this->facturationCommentaireDate = $facturationCommentaireDate;
        return $this;
    }

    /**
     * Set the facturation commentaire lib.
     *
     * @param string|null $facturationCommentaireLib The facturation commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFacturationCommentaireLib(?string $facturationCommentaireLib): SuiviClient {
        $this->facturationCommentaireLib = $facturationCommentaireLib;
        return $this;
    }

    /**
     * Set the fait bilan.
     *
     * @param string|null $faitBilan The fait bilan.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitBilan(?string $faitBilan): SuiviClient {
        $this->faitBilan = $faitBilan;
        return $this;
    }

    /**
     * Set the fait cvae.
     *
     * @param string|null $faitCvae The fait cvae.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitCvae(?string $faitCvae): SuiviClient {
        $this->faitCvae = $faitCvae;
        return $this;
    }

    /**
     * Set the fait das2.
     *
     * @param string|null $faitDas2 The fait das2.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitDas2(?string $faitDas2): SuiviClient {
        $this->faitDas2 = $faitDas2;
        return $this;
    }

    /**
     * Set the fait dcr.
     *
     * @param string|null $faitDcr The fait dcr.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitDcr(?string $faitDcr): SuiviClient {
        $this->faitDcr = $faitDcr;
        return $this;
    }

    /**
     * Set the fait generic1.
     *
     * @param string|null $faitGeneric1 The fait generic1.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitGeneric1(?string $faitGeneric1): SuiviClient {
        $this->faitGeneric1 = $faitGeneric1;
        return $this;
    }

    /**
     * Set the fait generic10.
     *
     * @param string|null $faitGeneric10 The fait generic10.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitGeneric10(?string $faitGeneric10): SuiviClient {
        $this->faitGeneric10 = $faitGeneric10;
        return $this;
    }

    /**
     * Set the fait generic2.
     *
     * @param string|null $faitGeneric2 The fait generic2.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitGeneric2(?string $faitGeneric2): SuiviClient {
        $this->faitGeneric2 = $faitGeneric2;
        return $this;
    }

    /**
     * Set the fait generic3.
     *
     * @param string|null $faitGeneric3 The fait generic3.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitGeneric3(?string $faitGeneric3): SuiviClient {
        $this->faitGeneric3 = $faitGeneric3;
        return $this;
    }

    /**
     * Set the fait generic4.
     *
     * @param string|null $faitGeneric4 The fait generic4.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitGeneric4(?string $faitGeneric4): SuiviClient {
        $this->faitGeneric4 = $faitGeneric4;
        return $this;
    }

    /**
     * Set the fait generic5.
     *
     * @param string|null $faitGeneric5 The fait generic5.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitGeneric5(?string $faitGeneric5): SuiviClient {
        $this->faitGeneric5 = $faitGeneric5;
        return $this;
    }

    /**
     * Set the fait generic6.
     *
     * @param string|null $faitGeneric6 The fait generic6.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitGeneric6(?string $faitGeneric6): SuiviClient {
        $this->faitGeneric6 = $faitGeneric6;
        return $this;
    }

    /**
     * Set the fait generic7.
     *
     * @param string|null $faitGeneric7 The fait generic7.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitGeneric7(?string $faitGeneric7): SuiviClient {
        $this->faitGeneric7 = $faitGeneric7;
        return $this;
    }

    /**
     * Set the fait generic8.
     *
     * @param string|null $faitGeneric8 The fait generic8.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitGeneric8(?string $faitGeneric8): SuiviClient {
        $this->faitGeneric8 = $faitGeneric8;
        return $this;
    }

    /**
     * Set the fait generic9.
     *
     * @param string|null $faitGeneric9 The fait generic9.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitGeneric9(?string $faitGeneric9): SuiviClient {
        $this->faitGeneric9 = $faitGeneric9;
        return $this;
    }

    /**
     * Set the fait ifu.
     *
     * @param string|null $faitIfu The fait ifu.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitIfu(?string $faitIfu): SuiviClient {
        $this->faitIfu = $faitIfu;
        return $this;
    }

    /**
     * Set the fait impot revenu.
     *
     * @param string|null $faitImpotRevenu The fait impot revenu.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitImpotRevenu(?string $faitImpotRevenu): SuiviClient {
        $this->faitImpotRevenu = $faitImpotRevenu;
        return $this;
    }

    /**
     * Set the fait isa.
     *
     * @param string|null $faitIsa The fait isa.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitIsa(?string $faitIsa): SuiviClient {
        $this->faitIsa = $faitIsa;
        return $this;
    }

    /**
     * Set the fait isf.
     *
     * @param string|null $faitIsf The fait isf.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitIsf(?string $faitIsf): SuiviClient {
        $this->faitIsf = $faitIsf;
        return $this;
    }

    /**
     * Set the fait isr.
     *
     * @param string|null $faitIsr The fait isr.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitIsr(?string $faitIsr): SuiviClient {
        $this->faitIsr = $faitIsr;
        return $this;
    }

    /**
     * Set the fait iss.
     *
     * @param string|null $faitIss The fait iss.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitIss(?string $faitIss): SuiviClient {
        $this->faitIss = $faitIss;
        return $this;
    }

    /**
     * Set the fait plaf tp.
     *
     * @param string|null $faitPlafTp The fait plaf tp.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitPlafTp(?string $faitPlafTp): SuiviClient {
        $this->faitPlafTp = $faitPlafTp;
        return $this;
    }

    /**
     * Set the fait pre lib.
     *
     * @param string|null $faitPreLib The fait pre lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitPreLib(?string $faitPreLib): SuiviClient {
        $this->faitPreLib = $faitPreLib;
        return $this;
    }

    /**
     * Set the fait situation.
     *
     * @param string|null $faitSituation The fait situation.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitSituation(?string $faitSituation): SuiviClient {
        $this->faitSituation = $faitSituation;
        return $this;
    }

    /**
     * Set the fait tab bord.
     *
     * @param string|null $faitTabBord The fait tab bord.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitTabBord(?string $faitTabBord): SuiviClient {
        $this->faitTabBord = $faitTabBord;
        return $this;
    }

    /**
     * Set the fait tp.
     *
     * @param string|null $faitTp The fait tp.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitTp(?string $faitTp): SuiviClient {
        $this->faitTp = $faitTp;
        return $this;
    }

    /**
     * Set the fait tva.
     *
     * @param string|null $faitTva The fait tva.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitTva(?string $faitTva): SuiviClient {
        $this->faitTva = $faitTva;
        return $this;
    }

    /**
     * Set the fait tvs.
     *
     * @param string|null $faitTvs The fait tvs.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setFaitTvs(?string $faitTvs): SuiviClient {
        $this->faitTvs = $faitTvs;
        return $this;
    }

    /**
     * Set the generic10 commentaire date.
     *
     * @param DateTime|null $generic10CommentaireDate The generic10 commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric10CommentaireDate(?DateTime $generic10CommentaireDate): SuiviClient {
        $this->generic10CommentaireDate = $generic10CommentaireDate;
        return $this;
    }

    /**
     * Set the generic10 commentaire lib.
     *
     * @param string|null $generic10CommentaireLib The generic10 commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric10CommentaireLib(?string $generic10CommentaireLib): SuiviClient {
        $this->generic10CommentaireLib = $generic10CommentaireLib;
        return $this;
    }

    /**
     * Set the generic10 date limite.
     *
     * @param DateTime|null $generic10DateLimite The generic10 date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric10DateLimite(?DateTime $generic10DateLimite): SuiviClient {
        $this->generic10DateLimite = $generic10DateLimite;
        return $this;
    }

    /**
     * Set the generic1 commentaire date.
     *
     * @param DateTime|null $generic1CommentaireDate The generic1 commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric1CommentaireDate(?DateTime $generic1CommentaireDate): SuiviClient {
        $this->generic1CommentaireDate = $generic1CommentaireDate;
        return $this;
    }

    /**
     * Set the generic1 commentaire lib.
     *
     * @param string|null $generic1CommentaireLib The generic1 commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric1CommentaireLib(?string $generic1CommentaireLib): SuiviClient {
        $this->generic1CommentaireLib = $generic1CommentaireLib;
        return $this;
    }

    /**
     * Set the generic1 date limite.
     *
     * @param DateTime|null $generic1DateLimite The generic1 date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric1DateLimite(?DateTime $generic1DateLimite): SuiviClient {
        $this->generic1DateLimite = $generic1DateLimite;
        return $this;
    }

    /**
     * Set the generic2 commentaire date.
     *
     * @param DateTime|null $generic2CommentaireDate The generic2 commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric2CommentaireDate(?DateTime $generic2CommentaireDate): SuiviClient {
        $this->generic2CommentaireDate = $generic2CommentaireDate;
        return $this;
    }

    /**
     * Set the generic2 commentaire lib.
     *
     * @param string|null $generic2CommentaireLib The generic2 commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric2CommentaireLib(?string $generic2CommentaireLib): SuiviClient {
        $this->generic2CommentaireLib = $generic2CommentaireLib;
        return $this;
    }

    /**
     * Set the generic2 date limite.
     *
     * @param DateTime|null $generic2DateLimite The generic2 date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric2DateLimite(?DateTime $generic2DateLimite): SuiviClient {
        $this->generic2DateLimite = $generic2DateLimite;
        return $this;
    }

    /**
     * Set the generic3 commentaire date.
     *
     * @param DateTime|null $generic3CommentaireDate The generic3 commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric3CommentaireDate(?DateTime $generic3CommentaireDate): SuiviClient {
        $this->generic3CommentaireDate = $generic3CommentaireDate;
        return $this;
    }

    /**
     * Set the generic3 commentaire lib.
     *
     * @param string|null $generic3CommentaireLib The generic3 commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric3CommentaireLib(?string $generic3CommentaireLib): SuiviClient {
        $this->generic3CommentaireLib = $generic3CommentaireLib;
        return $this;
    }

    /**
     * Set the generic3 date limite.
     *
     * @param DateTime|null $generic3DateLimite The generic3 date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric3DateLimite(?DateTime $generic3DateLimite): SuiviClient {
        $this->generic3DateLimite = $generic3DateLimite;
        return $this;
    }

    /**
     * Set the generic4 commentaire date.
     *
     * @param DateTime|null $generic4CommentaireDate The generic4 commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric4CommentaireDate(?DateTime $generic4CommentaireDate): SuiviClient {
        $this->generic4CommentaireDate = $generic4CommentaireDate;
        return $this;
    }

    /**
     * Set the generic4 commentaire lib.
     *
     * @param string|null $generic4CommentaireLib The generic4 commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric4CommentaireLib(?string $generic4CommentaireLib): SuiviClient {
        $this->generic4CommentaireLib = $generic4CommentaireLib;
        return $this;
    }

    /**
     * Set the generic4 date limite.
     *
     * @param DateTime|null $generic4DateLimite The generic4 date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric4DateLimite(?DateTime $generic4DateLimite): SuiviClient {
        $this->generic4DateLimite = $generic4DateLimite;
        return $this;
    }

    /**
     * Set the generic5 commentaire date.
     *
     * @param DateTime|null $generic5CommentaireDate The generic5 commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric5CommentaireDate(?DateTime $generic5CommentaireDate): SuiviClient {
        $this->generic5CommentaireDate = $generic5CommentaireDate;
        return $this;
    }

    /**
     * Set the generic5 commentaire lib.
     *
     * @param string|null $generic5CommentaireLib The generic5 commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric5CommentaireLib(?string $generic5CommentaireLib): SuiviClient {
        $this->generic5CommentaireLib = $generic5CommentaireLib;
        return $this;
    }

    /**
     * Set the generic5 date limite.
     *
     * @param DateTime|null $generic5DateLimite The generic5 date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric5DateLimite(?DateTime $generic5DateLimite): SuiviClient {
        $this->generic5DateLimite = $generic5DateLimite;
        return $this;
    }

    /**
     * Set the generic6 commentaire date.
     *
     * @param DateTime|null $generic6CommentaireDate The generic6 commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric6CommentaireDate(?DateTime $generic6CommentaireDate): SuiviClient {
        $this->generic6CommentaireDate = $generic6CommentaireDate;
        return $this;
    }

    /**
     * Set the generic6 commentaire lib.
     *
     * @param string|null $generic6CommentaireLib The generic6 commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric6CommentaireLib(?string $generic6CommentaireLib): SuiviClient {
        $this->generic6CommentaireLib = $generic6CommentaireLib;
        return $this;
    }

    /**
     * Set the generic6 date limite.
     *
     * @param DateTime|null $generic6DateLimite The generic6 date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric6DateLimite(?DateTime $generic6DateLimite): SuiviClient {
        $this->generic6DateLimite = $generic6DateLimite;
        return $this;
    }

    /**
     * Set the generic7 commentaire date.
     *
     * @param DateTime|null $generic7CommentaireDate The generic7 commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric7CommentaireDate(?DateTime $generic7CommentaireDate): SuiviClient {
        $this->generic7CommentaireDate = $generic7CommentaireDate;
        return $this;
    }

    /**
     * Set the generic7 commentaire lib.
     *
     * @param string|null $generic7CommentaireLib The generic7 commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric7CommentaireLib(?string $generic7CommentaireLib): SuiviClient {
        $this->generic7CommentaireLib = $generic7CommentaireLib;
        return $this;
    }

    /**
     * Set the generic7 date limite.
     *
     * @param DateTime|null $generic7DateLimite The generic7 date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric7DateLimite(?DateTime $generic7DateLimite): SuiviClient {
        $this->generic7DateLimite = $generic7DateLimite;
        return $this;
    }

    /**
     * Set the generic8 commentaire date.
     *
     * @param DateTime|null $generic8CommentaireDate The generic8 commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric8CommentaireDate(?DateTime $generic8CommentaireDate): SuiviClient {
        $this->generic8CommentaireDate = $generic8CommentaireDate;
        return $this;
    }

    /**
     * Set the generic8 commentaire lib.
     *
     * @param string|null $generic8CommentaireLib The generic8 commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric8CommentaireLib(?string $generic8CommentaireLib): SuiviClient {
        $this->generic8CommentaireLib = $generic8CommentaireLib;
        return $this;
    }

    /**
     * Set the generic8 date limite.
     *
     * @param DateTime|null $generic8DateLimite The generic8 date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric8DateLimite(?DateTime $generic8DateLimite): SuiviClient {
        $this->generic8DateLimite = $generic8DateLimite;
        return $this;
    }

    /**
     * Set the generic9 commentaire date.
     *
     * @param DateTime|null $generic9CommentaireDate The generic9 commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric9CommentaireDate(?DateTime $generic9CommentaireDate): SuiviClient {
        $this->generic9CommentaireDate = $generic9CommentaireDate;
        return $this;
    }

    /**
     * Set the generic9 commentaire lib.
     *
     * @param string|null $generic9CommentaireLib The generic9 commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric9CommentaireLib(?string $generic9CommentaireLib): SuiviClient {
        $this->generic9CommentaireLib = $generic9CommentaireLib;
        return $this;
    }

    /**
     * Set the generic9 date limite.
     *
     * @param DateTime|null $generic9DateLimite The generic9 date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setGeneric9DateLimite(?DateTime $generic9DateLimite): SuiviClient {
        $this->generic9DateLimite = $generic9DateLimite;
        return $this;
    }

    /**
     * Set the ifu commentaire date.
     *
     * @param DateTime|null $ifuCommentaireDate The ifu commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setIfuCommentaireDate(?DateTime $ifuCommentaireDate): SuiviClient {
        $this->ifuCommentaireDate = $ifuCommentaireDate;
        return $this;
    }

    /**
     * Set the ifu commentaire lib.
     *
     * @param string|null $ifuCommentaireLib The ifu commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setIfuCommentaireLib(?string $ifuCommentaireLib): SuiviClient {
        $this->ifuCommentaireLib = $ifuCommentaireLib;
        return $this;
    }

    /**
     * Set the impot revenu commentaire date.
     *
     * @param DateTime|null $impotRevenuCommentaireDate The impot revenu commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setImpotRevenuCommentaireDate(?DateTime $impotRevenuCommentaireDate): SuiviClient {
        $this->impotRevenuCommentaireDate = $impotRevenuCommentaireDate;
        return $this;
    }

    /**
     * Set the impot revenu commentaire lib.
     *
     * @param string|null $impotRevenuCommentaireLib The impot revenu commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setImpotRevenuCommentaireLib(?string $impotRevenuCommentaireLib): SuiviClient {
        $this->impotRevenuCommentaireLib = $impotRevenuCommentaireLib;
        return $this;
    }

    /**
     * Set the impot revenu date limite.
     *
     * @param DateTime|null $impotRevenuDateLimite The impot revenu date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setImpotRevenuDateLimite(?DateTime $impotRevenuDateLimite): SuiviClient {
        $this->impotRevenuDateLimite = $impotRevenuDateLimite;
        return $this;
    }

    /**
     * Set the isa commentaire date.
     *
     * @param DateTime|null $isaCommentaireDate The isa commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setIsaCommentaireDate(?DateTime $isaCommentaireDate): SuiviClient {
        $this->isaCommentaireDate = $isaCommentaireDate;
        return $this;
    }

    /**
     * Set the isa commentaire lib.
     *
     * @param string|null $isaCommentaireLib The isa commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setIsaCommentaireLib(?string $isaCommentaireLib): SuiviClient {
        $this->isaCommentaireLib = $isaCommentaireLib;
        return $this;
    }

    /**
     * Set the isf commentaire date.
     *
     * @param DateTime|null $isfCommentaireDate The isf commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setIsfCommentaireDate(?DateTime $isfCommentaireDate): SuiviClient {
        $this->isfCommentaireDate = $isfCommentaireDate;
        return $this;
    }

    /**
     * Set the isf commentaire lib.
     *
     * @param string|null $isfCommentaireLib The isf commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setIsfCommentaireLib(?string $isfCommentaireLib): SuiviClient {
        $this->isfCommentaireLib = $isfCommentaireLib;
        return $this;
    }

    /**
     * Set the isf date limite.
     *
     * @param DateTime|null $isfDateLimite The isf date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setIsfDateLimite(?DateTime $isfDateLimite): SuiviClient {
        $this->isfDateLimite = $isfDateLimite;
        return $this;
    }

    /**
     * Set the isr commentaire date.
     *
     * @param DateTime|null $isrCommentaireDate The isr commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setIsrCommentaireDate(?DateTime $isrCommentaireDate): SuiviClient {
        $this->isrCommentaireDate = $isrCommentaireDate;
        return $this;
    }

    /**
     * Set the isr commentaire lib.
     *
     * @param string|null $isrCommentaireLib The isr commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setIsrCommentaireLib(?string $isrCommentaireLib): SuiviClient {
        $this->isrCommentaireLib = $isrCommentaireLib;
        return $this;
    }

    /**
     * Set the iss commentaire date.
     *
     * @param DateTime|null $issCommentaireDate The iss commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setIssCommentaireDate(?DateTime $issCommentaireDate): SuiviClient {
        $this->issCommentaireDate = $issCommentaireDate;
        return $this;
    }

    /**
     * Set the iss commentaire lib.
     *
     * @param string|null $issCommentaireLib The iss commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setIssCommentaireLib(?string $issCommentaireLib): SuiviClient {
        $this->issCommentaireLib = $issCommentaireLib;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setPeriode(?DateTime $periode): SuiviClient {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the plaf tp commentaire date.
     *
     * @param DateTime|null $plafTpCommentaireDate The plaf tp commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setPlafTpCommentaireDate(?DateTime $plafTpCommentaireDate): SuiviClient {
        $this->plafTpCommentaireDate = $plafTpCommentaireDate;
        return $this;
    }

    /**
     * Set the plaf tp commentaire lib.
     *
     * @param string|null $plafTpCommentaireLib The plaf tp commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setPlafTpCommentaireLib(?string $plafTpCommentaireLib): SuiviClient {
        $this->plafTpCommentaireLib = $plafTpCommentaireLib;
        return $this;
    }

    /**
     * Set the pre lib commentaire date.
     *
     * @param DateTime|null $preLibCommentaireDate The pre lib commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setPreLibCommentaireDate(?DateTime $preLibCommentaireDate): SuiviClient {
        $this->preLibCommentaireDate = $preLibCommentaireDate;
        return $this;
    }

    /**
     * Set the pre lib commentaire lib.
     *
     * @param string|null $preLibCommentaireLib The pre lib commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setPreLibCommentaireLib(?string $preLibCommentaireLib): SuiviClient {
        $this->preLibCommentaireLib = $preLibCommentaireLib;
        return $this;
    }

    /**
     * Set the pre lib date limite.
     *
     * @param DateTime|null $preLibDateLimite The pre lib date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setPreLibDateLimite(?DateTime $preLibDateLimite): SuiviClient {
        $this->preLibDateLimite = $preLibDateLimite;
        return $this;
    }

    /**
     * Set the situation commentaire date.
     *
     * @param DateTime|null $situationCommentaireDate The situation commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setSituationCommentaireDate(?DateTime $situationCommentaireDate): SuiviClient {
        $this->situationCommentaireDate = $situationCommentaireDate;
        return $this;
    }

    /**
     * Set the situation commentaire lib.
     *
     * @param string|null $situationCommentaireLib The situation commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setSituationCommentaireLib(?string $situationCommentaireLib): SuiviClient {
        $this->situationCommentaireLib = $situationCommentaireLib;
        return $this;
    }

    /**
     * Set the situation date limite.
     *
     * @param DateTime|null $situationDateLimite The situation date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setSituationDateLimite(?DateTime $situationDateLimite): SuiviClient {
        $this->situationDateLimite = $situationDateLimite;
        return $this;
    }

    /**
     * Set the tab bord commentaire date.
     *
     * @param DateTime|null $tabBordCommentaireDate The tab bord commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTabBordCommentaireDate(?DateTime $tabBordCommentaireDate): SuiviClient {
        $this->tabBordCommentaireDate = $tabBordCommentaireDate;
        return $this;
    }

    /**
     * Set the tab bord commentaire lib.
     *
     * @param string|null $tabBordCommentaireLib The tab bord commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTabBordCommentaireLib(?string $tabBordCommentaireLib): SuiviClient {
        $this->tabBordCommentaireLib = $tabBordCommentaireLib;
        return $this;
    }

    /**
     * Set the tab bord date limite.
     *
     * @param DateTime|null $tabBordDateLimite The tab bord date limite.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTabBordDateLimite(?DateTime $tabBordDateLimite): SuiviClient {
        $this->tabBordDateLimite = $tabBordDateLimite;
        return $this;
    }

    /**
     * Set the tp commentaire date.
     *
     * @param DateTime|null $tpCommentaireDate The tp commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTpCommentaireDate(?DateTime $tpCommentaireDate): SuiviClient {
        $this->tpCommentaireDate = $tpCommentaireDate;
        return $this;
    }

    /**
     * Set the tp commentaire lib.
     *
     * @param string|null $tpCommentaireLib The tp commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTpCommentaireLib(?string $tpCommentaireLib): SuiviClient {
        $this->tpCommentaireLib = $tpCommentaireLib;
        return $this;
    }

    /**
     * Set the tsa commentaire date.
     *
     * @param DateTime|null $tsaCommentaireDate The tsa commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTsaCommentaireDate(?DateTime $tsaCommentaireDate): SuiviClient {
        $this->tsaCommentaireDate = $tsaCommentaireDate;
        return $this;
    }

    /**
     * Set the tsa commentaire lib.
     *
     * @param string|null $tsaCommentaireLib The tsa commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTsaCommentaireLib(?string $tsaCommentaireLib): SuiviClient {
        $this->tsaCommentaireLib = $tsaCommentaireLib;
        return $this;
    }

    /**
     * Set the tss commentaire date.
     *
     * @param DateTime|null $tssCommentaireDate The tss commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTssCommentaireDate(?DateTime $tssCommentaireDate): SuiviClient {
        $this->tssCommentaireDate = $tssCommentaireDate;
        return $this;
    }

    /**
     * Set the tss commentaire lib.
     *
     * @param string|null $tssCommentaireLib The tss commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTssCommentaireLib(?string $tssCommentaireLib): SuiviClient {
        $this->tssCommentaireLib = $tssCommentaireLib;
        return $this;
    }

    /**
     * Set the tva commentaire date.
     *
     * @param DateTime|null $tvaCommentaireDate The tva commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTvaCommentaireDate(?DateTime $tvaCommentaireDate): SuiviClient {
        $this->tvaCommentaireDate = $tvaCommentaireDate;
        return $this;
    }

    /**
     * Set the tva commentaire lib.
     *
     * @param string|null $tvaCommentaireLib The tva commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTvaCommentaireLib(?string $tvaCommentaireLib): SuiviClient {
        $this->tvaCommentaireLib = $tvaCommentaireLib;
        return $this;
    }

    /**
     * Set the tvs commentaire date.
     *
     * @param DateTime|null $tvsCommentaireDate The tvs commentaire date.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTvsCommentaireDate(?DateTime $tvsCommentaireDate): SuiviClient {
        $this->tvsCommentaireDate = $tvsCommentaireDate;
        return $this;
    }

    /**
     * Set the tvs commentaire lib.
     *
     * @param string|null $tvsCommentaireLib The tvs commentaire lib.
     * @return SuiviClient Returns this Suivi client.
     */
    public function setTvsCommentaireLib(?string $tvsCommentaireLib): SuiviClient {
        $this->tvsCommentaireLib = $tvsCommentaireLib;
        return $this;
    }
}
