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
 * Liaisons op trans.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class LiaisonsOpTrans {

    /**
     * Batch apres.
     *
     * @var string|null
     */
    private $batchApres;

    /**
     * Batch avant.
     *
     * @var string|null
     */
    private $batchAvant;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Dt dern x fer.
     *
     * @var DateTime|null
     */
    private $dtDernXFer;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Liste destinataires.
     *
     * @var string|null
     */
    private $listeDestinataires;

    /**
     * Use dt dern x fer.
     *
     * @var bool|null
     */
    private $useDtDernXFer;

    /**
     * X fer activites.
     *
     * @var bool|null
     */
    private $xFerActivites;

    /**
     * X fer articles.
     *
     * @var bool|null
     */
    private $xFerArticles;

    /**
     * X fer boni mali.
     *
     * @var bool|null
     */
    private $xFerBoniMali;

    /**
     * X fer budgets temps.
     *
     * @var bool|null
     */
    private $xFerBudgetsTemps;

    /**
     * X fer civilites.
     *
     * @var bool|null
     */
    private $xFerCivilites;

    /**
     * X fer cli.
     *
     * @var bool|null
     */
    private $xFerCli;

    /**
     * X fer cli a1.
     *
     * @var string|null
     */
    private $xFerCliA1;

    /**
     * X fer cli a2.
     *
     * @var string|null
     */
    private $xFerCliA2;

    /**
     * X fer cli c.
     *
     * @var string|null
     */
    private $xFerCliC;

    /**
     * X fer cli deb.
     *
     * @var string|null
     */
    private $xFerCliDeb;

    /**
     * X fer cli docs.
     *
     * @var bool|null
     */
    private $xFerCliDocs;

    /**
     * X fer cli e.
     *
     * @var string|null
     */
    private $xFerCliE;

    /**
     * X fer cli fin.
     *
     * @var string|null
     */
    private $xFerCliFin;

    /**
     * X fer cli p.
     *
     * @var string|null
     */
    private $xFerCliP;

    /**
     * X fer col.
     *
     * @var bool|null
     */
    private $xFerCol;

    /**
     * X fer collab tache.
     *
     * @var bool|null
     */
    private $xFerCollabTache;

    /**
     * X fer contenu.
     *
     * @var bool|null
     */
    private $xFerContenu;

    /**
     * X fer cpta.
     *
     * @var bool|null
     */
    private $xFerCpta;

    /**
     * X fer cpta all.
     *
     * @var bool|null
     */
    private $xFerCptaAll;

    /**
     * X fer cpta cli.
     *
     * @var bool|null
     */
    private $xFerCptaCli;

    /**
     * X fer cpta dest.
     *
     * @var string|null
     */
    private $xFerCptaDest;

    /**
     * X fer cpta frn.
     *
     * @var bool|null
     */
    private $xFerCptaFrn;

    /**
     * X fer cpta img.
     *
     * @var bool|null
     */
    private $xFerCptaImg;

    /**
     * X fer cpta lst dc.
     *
     * @var string|null
     */
    private $xFerCptaLstDc;

    /**
     * X fer cpta src.
     *
     * @var string|null
     */
    private $xFerCptaSrc;

    /**
     * X fer cr dsi.
     *
     * @var bool|null
     */
    private $xFerCrDsi;

    /**
     * X fer cr ducs.
     *
     * @var bool|null
     */
    private $xFerCrDucs;

    /**
     * X fer cr pedi.
     *
     * @var bool|null
     */
    private $xFerCrPedi;

    /**
     * X fer cr req.
     *
     * @var bool|null
     */
    private $xFerCrReq;

    /**
     * X fer cr tdfc.
     *
     * @var bool|null
     */
    private $xFerCrTdfc;

    /**
     * X fer cr tva.
     *
     * @var bool|null
     */
    private $xFerCrTva;

    /**
     * X fer cst px km.
     *
     * @var bool|null
     */
    private $xFerCstPxKm;

    /**
     * X fer dos cpta.
     *
     * @var bool|null
     */
    private $xFerDosCpta;

    /**
     * X fer dos paie.
     *
     * @var bool|null
     */
    private $xFerDosPaie;

    /**
     * X fer ed grp.
     *
     * @var bool|null
     */
    private $xFerEdGrp;

    /**
     * X fer etebac.
     *
     * @var bool|null
     */
    private $xFerEtebac;

    /**
     * X fer fact edit.
     *
     * @var bool|null
     */
    private $xFerFactEdit;

    /**
     * X fer fact edit del src.
     *
     * @var bool|null
     */
    private $xFerFactEditDelSrc;

    /**
     * X fer fact non edit.
     *
     * @var bool|null
     */
    private $xFerFactNonEdit;

    /**
     * X fer fact non edit del src.
     *
     * @var bool|null
     */
    private $xFerFactNonEditDelSrc;

    /**
     * X fer fonctions.
     *
     * @var bool|null
     */
    private $xFerFonctions;

    /**
     * X fer impots directs.
     *
     * @var bool|null
     */
    private $xFerImpotsDirects;

    /**
     * X fer int.
     *
     * @var bool|null
     */
    private $xFerInt;

    /**
     * X fer int no cli only.
     *
     * @var bool|null
     */
    private $xFerIntNoCliOnly;

    /**
     * X fer lst cabs.
     *
     * @var string|null
     */
    private $xFerLstCabs;

    /**
     * X fer mis.
     *
     * @var bool|null
     */
    private $xFerMis;

    /**
     * X fer mis cli.
     *
     * @var bool|null
     */
    private $xFerMisCli;

    /**
     * X fer mission principale.
     *
     * @var bool|null
     */
    private $xFerMissionPrincipale;

    /**
     * X fer msg.
     *
     * @var bool|null
     */
    private $xFerMsg;

    /**
     * X fer msg cli.
     *
     * @var bool|null
     */
    private $xFerMsgCli;

    /**
     * X fer msg col.
     *
     * @var bool|null
     */
    private $xFerMsgCol;

    /**
     * X fer msg del src.
     *
     * @var bool|null
     */
    private $xFerMsgDelSrc;

    /**
     * X fer msg hist.
     *
     * @var bool|null
     */
    private $xFerMsgHist;

    /**
     * X fer msg hist cli.
     *
     * @var bool|null
     */
    private $xFerMsgHistCli;

    /**
     * X fer msg hist del src.
     *
     * @var bool|null
     */
    private $xFerMsgHistDelSrc;

    /**
     * X fer obligations.
     *
     * @var bool|null
     */
    private $xFerObligations;

    /**
     * X fer pdf.
     *
     * @var bool|null
     */
    private $xFerPdf;

    /**
     * X fer planning.
     *
     * @var bool|null
     */
    private $xFerPlanning;

    /**
     * X fer pre fact.
     *
     * @var bool|null
     */
    private $xFerPreFact;

    /**
     * X fer pre fact cli.
     *
     * @var bool|null
     */
    private $xFerPreFactCli;

    /**
     * X fer pre fact col.
     *
     * @var bool|null
     */
    private $xFerPreFactCol;

    /**
     * X fer pre fact fact.
     *
     * @var bool|null
     */
    private $xFerPreFactFact;

    /**
     * X fer q infos.
     *
     * @var bool|null
     */
    private $xFerQInfos;

    /**
     * X fer q infos det.
     *
     * @var string|null
     */
    private $xFerQInfosDet;

    /**
     * X fer qualifiants.
     *
     * @var bool|null
     */
    private $xFerQualifiants;

    /**
     * X fer reglements.
     *
     * @var bool|null
     */
    private $xFerReglements;

    /**
     * X fer sui cli.
     *
     * @var bool|null
     */
    private $xFerSuiCli;

    /**
     * X fer taches.
     *
     * @var bool|null
     */
    private $xFerTaches;

    /**
     * X fer tps.
     *
     * @var bool|null
     */
    private $xFerTps;

    /**
     * X fer tps cli.
     *
     * @var bool|null
     */
    private $xFerTpsCli;

    /**
     * X fer tps col.
     *
     * @var bool|null
     */
    private $xFerTpsCol;

    /**
     * X fer type evenements.
     *
     * @var bool|null
     */
    private $xFerTypeEvenements;

    /**
     * X fer type societes.
     *
     * @var bool|null
     */
    private $xFerTypeSocietes;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the batch apres.
     *
     * @return string|null Returns the batch apres.
     */
    public function getBatchApres(): ?string {
        return $this->batchApres;
    }

    /**
     * Get the batch avant.
     *
     * @return string|null Returns the batch avant.
     */
    public function getBatchAvant(): ?string {
        return $this->batchAvant;
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the dt dern x fer.
     *
     * @return DateTime|null Returns the dt dern x fer.
     */
    public function getDtDernXFer(): ?DateTime {
        return $this->dtDernXFer;
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the liste destinataires.
     *
     * @return string|null Returns the liste destinataires.
     */
    public function getListeDestinataires(): ?string {
        return $this->listeDestinataires;
    }

    /**
     * Get the use dt dern x fer.
     *
     * @return bool|null Returns the use dt dern x fer.
     */
    public function getUseDtDernXFer(): ?bool {
        return $this->useDtDernXFer;
    }

    /**
     * Get the x fer activites.
     *
     * @return bool|null Returns the x fer activites.
     */
    public function getXFerActivites(): ?bool {
        return $this->xFerActivites;
    }

    /**
     * Get the x fer articles.
     *
     * @return bool|null Returns the x fer articles.
     */
    public function getXFerArticles(): ?bool {
        return $this->xFerArticles;
    }

    /**
     * Get the x fer boni mali.
     *
     * @return bool|null Returns the x fer boni mali.
     */
    public function getXFerBoniMali(): ?bool {
        return $this->xFerBoniMali;
    }

    /**
     * Get the x fer budgets temps.
     *
     * @return bool|null Returns the x fer budgets temps.
     */
    public function getXFerBudgetsTemps(): ?bool {
        return $this->xFerBudgetsTemps;
    }

    /**
     * Get the x fer civilites.
     *
     * @return bool|null Returns the x fer civilites.
     */
    public function getXFerCivilites(): ?bool {
        return $this->xFerCivilites;
    }

    /**
     * Get the x fer cli.
     *
     * @return bool|null Returns the x fer cli.
     */
    public function getXFerCli(): ?bool {
        return $this->xFerCli;
    }

    /**
     * Get the x fer cli a1.
     *
     * @return string|null Returns the x fer cli a1.
     */
    public function getXFerCliA1(): ?string {
        return $this->xFerCliA1;
    }

    /**
     * Get the x fer cli a2.
     *
     * @return string|null Returns the x fer cli a2.
     */
    public function getXFerCliA2(): ?string {
        return $this->xFerCliA2;
    }

    /**
     * Get the x fer cli c.
     *
     * @return string|null Returns the x fer cli c.
     */
    public function getXFerCliC(): ?string {
        return $this->xFerCliC;
    }

    /**
     * Get the x fer cli deb.
     *
     * @return string|null Returns the x fer cli deb.
     */
    public function getXFerCliDeb(): ?string {
        return $this->xFerCliDeb;
    }

    /**
     * Get the x fer cli docs.
     *
     * @return bool|null Returns the x fer cli docs.
     */
    public function getXFerCliDocs(): ?bool {
        return $this->xFerCliDocs;
    }

    /**
     * Get the x fer cli e.
     *
     * @return string|null Returns the x fer cli e.
     */
    public function getXFerCliE(): ?string {
        return $this->xFerCliE;
    }

    /**
     * Get the x fer cli fin.
     *
     * @return string|null Returns the x fer cli fin.
     */
    public function getXFerCliFin(): ?string {
        return $this->xFerCliFin;
    }

    /**
     * Get the x fer cli p.
     *
     * @return string|null Returns the x fer cli p.
     */
    public function getXFerCliP(): ?string {
        return $this->xFerCliP;
    }

    /**
     * Get the x fer col.
     *
     * @return bool|null Returns the x fer col.
     */
    public function getXFerCol(): ?bool {
        return $this->xFerCol;
    }

    /**
     * Get the x fer collab tache.
     *
     * @return bool|null Returns the x fer collab tache.
     */
    public function getXFerCollabTache(): ?bool {
        return $this->xFerCollabTache;
    }

    /**
     * Get the x fer contenu.
     *
     * @return bool|null Returns the x fer contenu.
     */
    public function getXFerContenu(): ?bool {
        return $this->xFerContenu;
    }

    /**
     * Get the x fer cpta.
     *
     * @return bool|null Returns the x fer cpta.
     */
    public function getXFerCpta(): ?bool {
        return $this->xFerCpta;
    }

    /**
     * Get the x fer cpta all.
     *
     * @return bool|null Returns the x fer cpta all.
     */
    public function getXFerCptaAll(): ?bool {
        return $this->xFerCptaAll;
    }

    /**
     * Get the x fer cpta cli.
     *
     * @return bool|null Returns the x fer cpta cli.
     */
    public function getXFerCptaCli(): ?bool {
        return $this->xFerCptaCli;
    }

    /**
     * Get the x fer cpta dest.
     *
     * @return string|null Returns the x fer cpta dest.
     */
    public function getXFerCptaDest(): ?string {
        return $this->xFerCptaDest;
    }

    /**
     * Get the x fer cpta frn.
     *
     * @return bool|null Returns the x fer cpta frn.
     */
    public function getXFerCptaFrn(): ?bool {
        return $this->xFerCptaFrn;
    }

    /**
     * Get the x fer cpta img.
     *
     * @return bool|null Returns the x fer cpta img.
     */
    public function getXFerCptaImg(): ?bool {
        return $this->xFerCptaImg;
    }

    /**
     * Get the x fer cpta lst dc.
     *
     * @return string|null Returns the x fer cpta lst dc.
     */
    public function getXFerCptaLstDc(): ?string {
        return $this->xFerCptaLstDc;
    }

    /**
     * Get the x fer cpta src.
     *
     * @return string|null Returns the x fer cpta src.
     */
    public function getXFerCptaSrc(): ?string {
        return $this->xFerCptaSrc;
    }

    /**
     * Get the x fer cr dsi.
     *
     * @return bool|null Returns the x fer cr dsi.
     */
    public function getXFerCrDsi(): ?bool {
        return $this->xFerCrDsi;
    }

    /**
     * Get the x fer cr ducs.
     *
     * @return bool|null Returns the x fer cr ducs.
     */
    public function getXFerCrDucs(): ?bool {
        return $this->xFerCrDucs;
    }

    /**
     * Get the x fer cr pedi.
     *
     * @return bool|null Returns the x fer cr pedi.
     */
    public function getXFerCrPedi(): ?bool {
        return $this->xFerCrPedi;
    }

    /**
     * Get the x fer cr req.
     *
     * @return bool|null Returns the x fer cr req.
     */
    public function getXFerCrReq(): ?bool {
        return $this->xFerCrReq;
    }

    /**
     * Get the x fer cr tdfc.
     *
     * @return bool|null Returns the x fer cr tdfc.
     */
    public function getXFerCrTdfc(): ?bool {
        return $this->xFerCrTdfc;
    }

    /**
     * Get the x fer cr tva.
     *
     * @return bool|null Returns the x fer cr tva.
     */
    public function getXFerCrTva(): ?bool {
        return $this->xFerCrTva;
    }

    /**
     * Get the x fer cst px km.
     *
     * @return bool|null Returns the x fer cst px km.
     */
    public function getXFerCstPxKm(): ?bool {
        return $this->xFerCstPxKm;
    }

    /**
     * Get the x fer dos cpta.
     *
     * @return bool|null Returns the x fer dos cpta.
     */
    public function getXFerDosCpta(): ?bool {
        return $this->xFerDosCpta;
    }

    /**
     * Get the x fer dos paie.
     *
     * @return bool|null Returns the x fer dos paie.
     */
    public function getXFerDosPaie(): ?bool {
        return $this->xFerDosPaie;
    }

    /**
     * Get the x fer ed grp.
     *
     * @return bool|null Returns the x fer ed grp.
     */
    public function getXFerEdGrp(): ?bool {
        return $this->xFerEdGrp;
    }

    /**
     * Get the x fer etebac.
     *
     * @return bool|null Returns the x fer etebac.
     */
    public function getXFerEtebac(): ?bool {
        return $this->xFerEtebac;
    }

    /**
     * Get the x fer fact edit.
     *
     * @return bool|null Returns the x fer fact edit.
     */
    public function getXFerFactEdit(): ?bool {
        return $this->xFerFactEdit;
    }

    /**
     * Get the x fer fact edit del src.
     *
     * @return bool|null Returns the x fer fact edit del src.
     */
    public function getXFerFactEditDelSrc(): ?bool {
        return $this->xFerFactEditDelSrc;
    }

    /**
     * Get the x fer fact non edit.
     *
     * @return bool|null Returns the x fer fact non edit.
     */
    public function getXFerFactNonEdit(): ?bool {
        return $this->xFerFactNonEdit;
    }

    /**
     * Get the x fer fact non edit del src.
     *
     * @return bool|null Returns the x fer fact non edit del src.
     */
    public function getXFerFactNonEditDelSrc(): ?bool {
        return $this->xFerFactNonEditDelSrc;
    }

    /**
     * Get the x fer fonctions.
     *
     * @return bool|null Returns the x fer fonctions.
     */
    public function getXFerFonctions(): ?bool {
        return $this->xFerFonctions;
    }

    /**
     * Get the x fer impots directs.
     *
     * @return bool|null Returns the x fer impots directs.
     */
    public function getXFerImpotsDirects(): ?bool {
        return $this->xFerImpotsDirects;
    }

    /**
     * Get the x fer int.
     *
     * @return bool|null Returns the x fer int.
     */
    public function getXFerInt(): ?bool {
        return $this->xFerInt;
    }

    /**
     * Get the x fer int no cli only.
     *
     * @return bool|null Returns the x fer int no cli only.
     */
    public function getXFerIntNoCliOnly(): ?bool {
        return $this->xFerIntNoCliOnly;
    }

    /**
     * Get the x fer lst cabs.
     *
     * @return string|null Returns the x fer lst cabs.
     */
    public function getXFerLstCabs(): ?string {
        return $this->xFerLstCabs;
    }

    /**
     * Get the x fer mis.
     *
     * @return bool|null Returns the x fer mis.
     */
    public function getXFerMis(): ?bool {
        return $this->xFerMis;
    }

    /**
     * Get the x fer mis cli.
     *
     * @return bool|null Returns the x fer mis cli.
     */
    public function getXFerMisCli(): ?bool {
        return $this->xFerMisCli;
    }

    /**
     * Get the x fer mission principale.
     *
     * @return bool|null Returns the x fer mission principale.
     */
    public function getXFerMissionPrincipale(): ?bool {
        return $this->xFerMissionPrincipale;
    }

    /**
     * Get the x fer msg.
     *
     * @return bool|null Returns the x fer msg.
     */
    public function getXFerMsg(): ?bool {
        return $this->xFerMsg;
    }

    /**
     * Get the x fer msg cli.
     *
     * @return bool|null Returns the x fer msg cli.
     */
    public function getXFerMsgCli(): ?bool {
        return $this->xFerMsgCli;
    }

    /**
     * Get the x fer msg col.
     *
     * @return bool|null Returns the x fer msg col.
     */
    public function getXFerMsgCol(): ?bool {
        return $this->xFerMsgCol;
    }

    /**
     * Get the x fer msg del src.
     *
     * @return bool|null Returns the x fer msg del src.
     */
    public function getXFerMsgDelSrc(): ?bool {
        return $this->xFerMsgDelSrc;
    }

    /**
     * Get the x fer msg hist.
     *
     * @return bool|null Returns the x fer msg hist.
     */
    public function getXFerMsgHist(): ?bool {
        return $this->xFerMsgHist;
    }

    /**
     * Get the x fer msg hist cli.
     *
     * @return bool|null Returns the x fer msg hist cli.
     */
    public function getXFerMsgHistCli(): ?bool {
        return $this->xFerMsgHistCli;
    }

    /**
     * Get the x fer msg hist del src.
     *
     * @return bool|null Returns the x fer msg hist del src.
     */
    public function getXFerMsgHistDelSrc(): ?bool {
        return $this->xFerMsgHistDelSrc;
    }

    /**
     * Get the x fer obligations.
     *
     * @return bool|null Returns the x fer obligations.
     */
    public function getXFerObligations(): ?bool {
        return $this->xFerObligations;
    }

    /**
     * Get the x fer pdf.
     *
     * @return bool|null Returns the x fer pdf.
     */
    public function getXFerPdf(): ?bool {
        return $this->xFerPdf;
    }

    /**
     * Get the x fer planning.
     *
     * @return bool|null Returns the x fer planning.
     */
    public function getXFerPlanning(): ?bool {
        return $this->xFerPlanning;
    }

    /**
     * Get the x fer pre fact.
     *
     * @return bool|null Returns the x fer pre fact.
     */
    public function getXFerPreFact(): ?bool {
        return $this->xFerPreFact;
    }

    /**
     * Get the x fer pre fact cli.
     *
     * @return bool|null Returns the x fer pre fact cli.
     */
    public function getXFerPreFactCli(): ?bool {
        return $this->xFerPreFactCli;
    }

    /**
     * Get the x fer pre fact col.
     *
     * @return bool|null Returns the x fer pre fact col.
     */
    public function getXFerPreFactCol(): ?bool {
        return $this->xFerPreFactCol;
    }

    /**
     * Get the x fer pre fact fact.
     *
     * @return bool|null Returns the x fer pre fact fact.
     */
    public function getXFerPreFactFact(): ?bool {
        return $this->xFerPreFactFact;
    }

    /**
     * Get the x fer q infos.
     *
     * @return bool|null Returns the x fer q infos.
     */
    public function getXFerQInfos(): ?bool {
        return $this->xFerQInfos;
    }

    /**
     * Get the x fer q infos det.
     *
     * @return string|null Returns the x fer q infos det.
     */
    public function getXFerQInfosDet(): ?string {
        return $this->xFerQInfosDet;
    }

    /**
     * Get the x fer qualifiants.
     *
     * @return bool|null Returns the x fer qualifiants.
     */
    public function getXFerQualifiants(): ?bool {
        return $this->xFerQualifiants;
    }

    /**
     * Get the x fer reglements.
     *
     * @return bool|null Returns the x fer reglements.
     */
    public function getXFerReglements(): ?bool {
        return $this->xFerReglements;
    }

    /**
     * Get the x fer sui cli.
     *
     * @return bool|null Returns the x fer sui cli.
     */
    public function getXFerSuiCli(): ?bool {
        return $this->xFerSuiCli;
    }

    /**
     * Get the x fer taches.
     *
     * @return bool|null Returns the x fer taches.
     */
    public function getXFerTaches(): ?bool {
        return $this->xFerTaches;
    }

    /**
     * Get the x fer tps.
     *
     * @return bool|null Returns the x fer tps.
     */
    public function getXFerTps(): ?bool {
        return $this->xFerTps;
    }

    /**
     * Get the x fer tps cli.
     *
     * @return bool|null Returns the x fer tps cli.
     */
    public function getXFerTpsCli(): ?bool {
        return $this->xFerTpsCli;
    }

    /**
     * Get the x fer tps col.
     *
     * @return bool|null Returns the x fer tps col.
     */
    public function getXFerTpsCol(): ?bool {
        return $this->xFerTpsCol;
    }

    /**
     * Get the x fer type evenements.
     *
     * @return bool|null Returns the x fer type evenements.
     */
    public function getXFerTypeEvenements(): ?bool {
        return $this->xFerTypeEvenements;
    }

    /**
     * Get the x fer type societes.
     *
     * @return bool|null Returns the x fer type societes.
     */
    public function getXFerTypeSocietes(): ?bool {
        return $this->xFerTypeSocietes;
    }

    /**
     * Set the batch apres.
     *
     * @param string|null $batchApres The batch apres.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setBatchApres(?string $batchApres): LiaisonsOpTrans {
        $this->batchApres = $batchApres;
        return $this;
    }

    /**
     * Set the batch avant.
     *
     * @param string|null $batchAvant The batch avant.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setBatchAvant(?string $batchAvant): LiaisonsOpTrans {
        $this->batchAvant = $batchAvant;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setCode(?string $code): LiaisonsOpTrans {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the dt dern x fer.
     *
     * @param DateTime|null $dtDernXFer The dt dern x fer.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setDtDernXFer(?DateTime $dtDernXFer): LiaisonsOpTrans {
        $this->dtDernXFer = $dtDernXFer;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setIntitule(?string $intitule): LiaisonsOpTrans {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the liste destinataires.
     *
     * @param string|null $listeDestinataires The liste destinataires.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setListeDestinataires(?string $listeDestinataires): LiaisonsOpTrans {
        $this->listeDestinataires = $listeDestinataires;
        return $this;
    }

    /**
     * Set the use dt dern x fer.
     *
     * @param bool|null $useDtDernXFer The use dt dern x fer.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setUseDtDernXFer(?bool $useDtDernXFer): LiaisonsOpTrans {
        $this->useDtDernXFer = $useDtDernXFer;
        return $this;
    }

    /**
     * Set the x fer activites.
     *
     * @param bool|null $xFerActivites The x fer activites.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerActivites(?bool $xFerActivites): LiaisonsOpTrans {
        $this->xFerActivites = $xFerActivites;
        return $this;
    }

    /**
     * Set the x fer articles.
     *
     * @param bool|null $xFerArticles The x fer articles.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerArticles(?bool $xFerArticles): LiaisonsOpTrans {
        $this->xFerArticles = $xFerArticles;
        return $this;
    }

    /**
     * Set the x fer boni mali.
     *
     * @param bool|null $xFerBoniMali The x fer boni mali.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerBoniMali(?bool $xFerBoniMali): LiaisonsOpTrans {
        $this->xFerBoniMali = $xFerBoniMali;
        return $this;
    }

    /**
     * Set the x fer budgets temps.
     *
     * @param bool|null $xFerBudgetsTemps The x fer budgets temps.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerBudgetsTemps(?bool $xFerBudgetsTemps): LiaisonsOpTrans {
        $this->xFerBudgetsTemps = $xFerBudgetsTemps;
        return $this;
    }

    /**
     * Set the x fer civilites.
     *
     * @param bool|null $xFerCivilites The x fer civilites.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCivilites(?bool $xFerCivilites): LiaisonsOpTrans {
        $this->xFerCivilites = $xFerCivilites;
        return $this;
    }

    /**
     * Set the x fer cli.
     *
     * @param bool|null $xFerCli The x fer cli.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCli(?bool $xFerCli): LiaisonsOpTrans {
        $this->xFerCli = $xFerCli;
        return $this;
    }

    /**
     * Set the x fer cli a1.
     *
     * @param string|null $xFerCliA1 The x fer cli a1.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCliA1(?string $xFerCliA1): LiaisonsOpTrans {
        $this->xFerCliA1 = $xFerCliA1;
        return $this;
    }

    /**
     * Set the x fer cli a2.
     *
     * @param string|null $xFerCliA2 The x fer cli a2.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCliA2(?string $xFerCliA2): LiaisonsOpTrans {
        $this->xFerCliA2 = $xFerCliA2;
        return $this;
    }

    /**
     * Set the x fer cli c.
     *
     * @param string|null $xFerCliC The x fer cli c.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCliC(?string $xFerCliC): LiaisonsOpTrans {
        $this->xFerCliC = $xFerCliC;
        return $this;
    }

    /**
     * Set the x fer cli deb.
     *
     * @param string|null $xFerCliDeb The x fer cli deb.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCliDeb(?string $xFerCliDeb): LiaisonsOpTrans {
        $this->xFerCliDeb = $xFerCliDeb;
        return $this;
    }

    /**
     * Set the x fer cli docs.
     *
     * @param bool|null $xFerCliDocs The x fer cli docs.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCliDocs(?bool $xFerCliDocs): LiaisonsOpTrans {
        $this->xFerCliDocs = $xFerCliDocs;
        return $this;
    }

    /**
     * Set the x fer cli e.
     *
     * @param string|null $xFerCliE The x fer cli e.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCliE(?string $xFerCliE): LiaisonsOpTrans {
        $this->xFerCliE = $xFerCliE;
        return $this;
    }

    /**
     * Set the x fer cli fin.
     *
     * @param string|null $xFerCliFin The x fer cli fin.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCliFin(?string $xFerCliFin): LiaisonsOpTrans {
        $this->xFerCliFin = $xFerCliFin;
        return $this;
    }

    /**
     * Set the x fer cli p.
     *
     * @param string|null $xFerCliP The x fer cli p.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCliP(?string $xFerCliP): LiaisonsOpTrans {
        $this->xFerCliP = $xFerCliP;
        return $this;
    }

    /**
     * Set the x fer col.
     *
     * @param bool|null $xFerCol The x fer col.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCol(?bool $xFerCol): LiaisonsOpTrans {
        $this->xFerCol = $xFerCol;
        return $this;
    }

    /**
     * Set the x fer collab tache.
     *
     * @param bool|null $xFerCollabTache The x fer collab tache.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCollabTache(?bool $xFerCollabTache): LiaisonsOpTrans {
        $this->xFerCollabTache = $xFerCollabTache;
        return $this;
    }

    /**
     * Set the x fer contenu.
     *
     * @param bool|null $xFerContenu The x fer contenu.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerContenu(?bool $xFerContenu): LiaisonsOpTrans {
        $this->xFerContenu = $xFerContenu;
        return $this;
    }

    /**
     * Set the x fer cpta.
     *
     * @param bool|null $xFerCpta The x fer cpta.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCpta(?bool $xFerCpta): LiaisonsOpTrans {
        $this->xFerCpta = $xFerCpta;
        return $this;
    }

    /**
     * Set the x fer cpta all.
     *
     * @param bool|null $xFerCptaAll The x fer cpta all.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCptaAll(?bool $xFerCptaAll): LiaisonsOpTrans {
        $this->xFerCptaAll = $xFerCptaAll;
        return $this;
    }

    /**
     * Set the x fer cpta cli.
     *
     * @param bool|null $xFerCptaCli The x fer cpta cli.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCptaCli(?bool $xFerCptaCli): LiaisonsOpTrans {
        $this->xFerCptaCli = $xFerCptaCli;
        return $this;
    }

    /**
     * Set the x fer cpta dest.
     *
     * @param string|null $xFerCptaDest The x fer cpta dest.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCptaDest(?string $xFerCptaDest): LiaisonsOpTrans {
        $this->xFerCptaDest = $xFerCptaDest;
        return $this;
    }

    /**
     * Set the x fer cpta frn.
     *
     * @param bool|null $xFerCptaFrn The x fer cpta frn.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCptaFrn(?bool $xFerCptaFrn): LiaisonsOpTrans {
        $this->xFerCptaFrn = $xFerCptaFrn;
        return $this;
    }

    /**
     * Set the x fer cpta img.
     *
     * @param bool|null $xFerCptaImg The x fer cpta img.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCptaImg(?bool $xFerCptaImg): LiaisonsOpTrans {
        $this->xFerCptaImg = $xFerCptaImg;
        return $this;
    }

    /**
     * Set the x fer cpta lst dc.
     *
     * @param string|null $xFerCptaLstDc The x fer cpta lst dc.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCptaLstDc(?string $xFerCptaLstDc): LiaisonsOpTrans {
        $this->xFerCptaLstDc = $xFerCptaLstDc;
        return $this;
    }

    /**
     * Set the x fer cpta src.
     *
     * @param string|null $xFerCptaSrc The x fer cpta src.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCptaSrc(?string $xFerCptaSrc): LiaisonsOpTrans {
        $this->xFerCptaSrc = $xFerCptaSrc;
        return $this;
    }

    /**
     * Set the x fer cr dsi.
     *
     * @param bool|null $xFerCrDsi The x fer cr dsi.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCrDsi(?bool $xFerCrDsi): LiaisonsOpTrans {
        $this->xFerCrDsi = $xFerCrDsi;
        return $this;
    }

    /**
     * Set the x fer cr ducs.
     *
     * @param bool|null $xFerCrDucs The x fer cr ducs.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCrDucs(?bool $xFerCrDucs): LiaisonsOpTrans {
        $this->xFerCrDucs = $xFerCrDucs;
        return $this;
    }

    /**
     * Set the x fer cr pedi.
     *
     * @param bool|null $xFerCrPedi The x fer cr pedi.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCrPedi(?bool $xFerCrPedi): LiaisonsOpTrans {
        $this->xFerCrPedi = $xFerCrPedi;
        return $this;
    }

    /**
     * Set the x fer cr req.
     *
     * @param bool|null $xFerCrReq The x fer cr req.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCrReq(?bool $xFerCrReq): LiaisonsOpTrans {
        $this->xFerCrReq = $xFerCrReq;
        return $this;
    }

    /**
     * Set the x fer cr tdfc.
     *
     * @param bool|null $xFerCrTdfc The x fer cr tdfc.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCrTdfc(?bool $xFerCrTdfc): LiaisonsOpTrans {
        $this->xFerCrTdfc = $xFerCrTdfc;
        return $this;
    }

    /**
     * Set the x fer cr tva.
     *
     * @param bool|null $xFerCrTva The x fer cr tva.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCrTva(?bool $xFerCrTva): LiaisonsOpTrans {
        $this->xFerCrTva = $xFerCrTva;
        return $this;
    }

    /**
     * Set the x fer cst px km.
     *
     * @param bool|null $xFerCstPxKm The x fer cst px km.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerCstPxKm(?bool $xFerCstPxKm): LiaisonsOpTrans {
        $this->xFerCstPxKm = $xFerCstPxKm;
        return $this;
    }

    /**
     * Set the x fer dos cpta.
     *
     * @param bool|null $xFerDosCpta The x fer dos cpta.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerDosCpta(?bool $xFerDosCpta): LiaisonsOpTrans {
        $this->xFerDosCpta = $xFerDosCpta;
        return $this;
    }

    /**
     * Set the x fer dos paie.
     *
     * @param bool|null $xFerDosPaie The x fer dos paie.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerDosPaie(?bool $xFerDosPaie): LiaisonsOpTrans {
        $this->xFerDosPaie = $xFerDosPaie;
        return $this;
    }

    /**
     * Set the x fer ed grp.
     *
     * @param bool|null $xFerEdGrp The x fer ed grp.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerEdGrp(?bool $xFerEdGrp): LiaisonsOpTrans {
        $this->xFerEdGrp = $xFerEdGrp;
        return $this;
    }

    /**
     * Set the x fer etebac.
     *
     * @param bool|null $xFerEtebac The x fer etebac.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerEtebac(?bool $xFerEtebac): LiaisonsOpTrans {
        $this->xFerEtebac = $xFerEtebac;
        return $this;
    }

    /**
     * Set the x fer fact edit.
     *
     * @param bool|null $xFerFactEdit The x fer fact edit.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerFactEdit(?bool $xFerFactEdit): LiaisonsOpTrans {
        $this->xFerFactEdit = $xFerFactEdit;
        return $this;
    }

    /**
     * Set the x fer fact edit del src.
     *
     * @param bool|null $xFerFactEditDelSrc The x fer fact edit del src.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerFactEditDelSrc(?bool $xFerFactEditDelSrc): LiaisonsOpTrans {
        $this->xFerFactEditDelSrc = $xFerFactEditDelSrc;
        return $this;
    }

    /**
     * Set the x fer fact non edit.
     *
     * @param bool|null $xFerFactNonEdit The x fer fact non edit.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerFactNonEdit(?bool $xFerFactNonEdit): LiaisonsOpTrans {
        $this->xFerFactNonEdit = $xFerFactNonEdit;
        return $this;
    }

    /**
     * Set the x fer fact non edit del src.
     *
     * @param bool|null $xFerFactNonEditDelSrc The x fer fact non edit del src.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerFactNonEditDelSrc(?bool $xFerFactNonEditDelSrc): LiaisonsOpTrans {
        $this->xFerFactNonEditDelSrc = $xFerFactNonEditDelSrc;
        return $this;
    }

    /**
     * Set the x fer fonctions.
     *
     * @param bool|null $xFerFonctions The x fer fonctions.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerFonctions(?bool $xFerFonctions): LiaisonsOpTrans {
        $this->xFerFonctions = $xFerFonctions;
        return $this;
    }

    /**
     * Set the x fer impots directs.
     *
     * @param bool|null $xFerImpotsDirects The x fer impots directs.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerImpotsDirects(?bool $xFerImpotsDirects): LiaisonsOpTrans {
        $this->xFerImpotsDirects = $xFerImpotsDirects;
        return $this;
    }

    /**
     * Set the x fer int.
     *
     * @param bool|null $xFerInt The x fer int.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerInt(?bool $xFerInt): LiaisonsOpTrans {
        $this->xFerInt = $xFerInt;
        return $this;
    }

    /**
     * Set the x fer int no cli only.
     *
     * @param bool|null $xFerIntNoCliOnly The x fer int no cli only.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerIntNoCliOnly(?bool $xFerIntNoCliOnly): LiaisonsOpTrans {
        $this->xFerIntNoCliOnly = $xFerIntNoCliOnly;
        return $this;
    }

    /**
     * Set the x fer lst cabs.
     *
     * @param string|null $xFerLstCabs The x fer lst cabs.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerLstCabs(?string $xFerLstCabs): LiaisonsOpTrans {
        $this->xFerLstCabs = $xFerLstCabs;
        return $this;
    }

    /**
     * Set the x fer mis.
     *
     * @param bool|null $xFerMis The x fer mis.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerMis(?bool $xFerMis): LiaisonsOpTrans {
        $this->xFerMis = $xFerMis;
        return $this;
    }

    /**
     * Set the x fer mis cli.
     *
     * @param bool|null $xFerMisCli The x fer mis cli.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerMisCli(?bool $xFerMisCli): LiaisonsOpTrans {
        $this->xFerMisCli = $xFerMisCli;
        return $this;
    }

    /**
     * Set the x fer mission principale.
     *
     * @param bool|null $xFerMissionPrincipale The x fer mission principale.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerMissionPrincipale(?bool $xFerMissionPrincipale): LiaisonsOpTrans {
        $this->xFerMissionPrincipale = $xFerMissionPrincipale;
        return $this;
    }

    /**
     * Set the x fer msg.
     *
     * @param bool|null $xFerMsg The x fer msg.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerMsg(?bool $xFerMsg): LiaisonsOpTrans {
        $this->xFerMsg = $xFerMsg;
        return $this;
    }

    /**
     * Set the x fer msg cli.
     *
     * @param bool|null $xFerMsgCli The x fer msg cli.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerMsgCli(?bool $xFerMsgCli): LiaisonsOpTrans {
        $this->xFerMsgCli = $xFerMsgCli;
        return $this;
    }

    /**
     * Set the x fer msg col.
     *
     * @param bool|null $xFerMsgCol The x fer msg col.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerMsgCol(?bool $xFerMsgCol): LiaisonsOpTrans {
        $this->xFerMsgCol = $xFerMsgCol;
        return $this;
    }

    /**
     * Set the x fer msg del src.
     *
     * @param bool|null $xFerMsgDelSrc The x fer msg del src.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerMsgDelSrc(?bool $xFerMsgDelSrc): LiaisonsOpTrans {
        $this->xFerMsgDelSrc = $xFerMsgDelSrc;
        return $this;
    }

    /**
     * Set the x fer msg hist.
     *
     * @param bool|null $xFerMsgHist The x fer msg hist.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerMsgHist(?bool $xFerMsgHist): LiaisonsOpTrans {
        $this->xFerMsgHist = $xFerMsgHist;
        return $this;
    }

    /**
     * Set the x fer msg hist cli.
     *
     * @param bool|null $xFerMsgHistCli The x fer msg hist cli.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerMsgHistCli(?bool $xFerMsgHistCli): LiaisonsOpTrans {
        $this->xFerMsgHistCli = $xFerMsgHistCli;
        return $this;
    }

    /**
     * Set the x fer msg hist del src.
     *
     * @param bool|null $xFerMsgHistDelSrc The x fer msg hist del src.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerMsgHistDelSrc(?bool $xFerMsgHistDelSrc): LiaisonsOpTrans {
        $this->xFerMsgHistDelSrc = $xFerMsgHistDelSrc;
        return $this;
    }

    /**
     * Set the x fer obligations.
     *
     * @param bool|null $xFerObligations The x fer obligations.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerObligations(?bool $xFerObligations): LiaisonsOpTrans {
        $this->xFerObligations = $xFerObligations;
        return $this;
    }

    /**
     * Set the x fer pdf.
     *
     * @param bool|null $xFerPdf The x fer pdf.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerPdf(?bool $xFerPdf): LiaisonsOpTrans {
        $this->xFerPdf = $xFerPdf;
        return $this;
    }

    /**
     * Set the x fer planning.
     *
     * @param bool|null $xFerPlanning The x fer planning.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerPlanning(?bool $xFerPlanning): LiaisonsOpTrans {
        $this->xFerPlanning = $xFerPlanning;
        return $this;
    }

    /**
     * Set the x fer pre fact.
     *
     * @param bool|null $xFerPreFact The x fer pre fact.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerPreFact(?bool $xFerPreFact): LiaisonsOpTrans {
        $this->xFerPreFact = $xFerPreFact;
        return $this;
    }

    /**
     * Set the x fer pre fact cli.
     *
     * @param bool|null $xFerPreFactCli The x fer pre fact cli.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerPreFactCli(?bool $xFerPreFactCli): LiaisonsOpTrans {
        $this->xFerPreFactCli = $xFerPreFactCli;
        return $this;
    }

    /**
     * Set the x fer pre fact col.
     *
     * @param bool|null $xFerPreFactCol The x fer pre fact col.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerPreFactCol(?bool $xFerPreFactCol): LiaisonsOpTrans {
        $this->xFerPreFactCol = $xFerPreFactCol;
        return $this;
    }

    /**
     * Set the x fer pre fact fact.
     *
     * @param bool|null $xFerPreFactFact The x fer pre fact fact.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerPreFactFact(?bool $xFerPreFactFact): LiaisonsOpTrans {
        $this->xFerPreFactFact = $xFerPreFactFact;
        return $this;
    }

    /**
     * Set the x fer q infos.
     *
     * @param bool|null $xFerQInfos The x fer q infos.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerQInfos(?bool $xFerQInfos): LiaisonsOpTrans {
        $this->xFerQInfos = $xFerQInfos;
        return $this;
    }

    /**
     * Set the x fer q infos det.
     *
     * @param string|null $xFerQInfosDet The x fer q infos det.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerQInfosDet(?string $xFerQInfosDet): LiaisonsOpTrans {
        $this->xFerQInfosDet = $xFerQInfosDet;
        return $this;
    }

    /**
     * Set the x fer qualifiants.
     *
     * @param bool|null $xFerQualifiants The x fer qualifiants.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerQualifiants(?bool $xFerQualifiants): LiaisonsOpTrans {
        $this->xFerQualifiants = $xFerQualifiants;
        return $this;
    }

    /**
     * Set the x fer reglements.
     *
     * @param bool|null $xFerReglements The x fer reglements.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerReglements(?bool $xFerReglements): LiaisonsOpTrans {
        $this->xFerReglements = $xFerReglements;
        return $this;
    }

    /**
     * Set the x fer sui cli.
     *
     * @param bool|null $xFerSuiCli The x fer sui cli.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerSuiCli(?bool $xFerSuiCli): LiaisonsOpTrans {
        $this->xFerSuiCli = $xFerSuiCli;
        return $this;
    }

    /**
     * Set the x fer taches.
     *
     * @param bool|null $xFerTaches The x fer taches.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerTaches(?bool $xFerTaches): LiaisonsOpTrans {
        $this->xFerTaches = $xFerTaches;
        return $this;
    }

    /**
     * Set the x fer tps.
     *
     * @param bool|null $xFerTps The x fer tps.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerTps(?bool $xFerTps): LiaisonsOpTrans {
        $this->xFerTps = $xFerTps;
        return $this;
    }

    /**
     * Set the x fer tps cli.
     *
     * @param bool|null $xFerTpsCli The x fer tps cli.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerTpsCli(?bool $xFerTpsCli): LiaisonsOpTrans {
        $this->xFerTpsCli = $xFerTpsCli;
        return $this;
    }

    /**
     * Set the x fer tps col.
     *
     * @param bool|null $xFerTpsCol The x fer tps col.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerTpsCol(?bool $xFerTpsCol): LiaisonsOpTrans {
        $this->xFerTpsCol = $xFerTpsCol;
        return $this;
    }

    /**
     * Set the x fer type evenements.
     *
     * @param bool|null $xFerTypeEvenements The x fer type evenements.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerTypeEvenements(?bool $xFerTypeEvenements): LiaisonsOpTrans {
        $this->xFerTypeEvenements = $xFerTypeEvenements;
        return $this;
    }

    /**
     * Set the x fer type societes.
     *
     * @param bool|null $xFerTypeSocietes The x fer type societes.
     * @return LiaisonsOpTrans Returns this Liaisons op trans.
     */
    public function setXFerTypeSocietes(?bool $xFerTypeSocietes): LiaisonsOpTrans {
        $this->xFerTypeSocietes = $xFerTypeSocietes;
        return $this;
    }
}
