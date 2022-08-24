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
 * Libelles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Libelles {

    /**
     * A compter heures assedic.
     *
     * @var bool|null
     */
    private $aCompterHeuresAssedic;

    /**
     * A conserver setp.
     *
     * @var bool|null
     */
    private $aConserverSetp;

    /**
     * A cumuler base caisse1.
     *
     * @var bool|null
     */
    private $aCumulerBaseCaisse1;

    /**
     * A cumuler base caisse2.
     *
     * @var bool|null
     */
    private $aCumulerBaseCaisse2;

    /**
     * A cumuler base caisse3.
     *
     * @var bool|null
     */
    private $aCumulerBaseCaisse3;

    /**
     * A cumuler base cp.
     *
     * @var bool|null
     */
    private $aCumulerBaseCp;

    /**
     * A cumuler base secu.
     *
     * @var bool|null
     */
    private $aCumulerBaseSecu;

    /**
     * A reintegrer setp.
     *
     * @var bool|null
     */
    private $aReintegrerSetp;

    /**
     * Active variables emp.
     *
     * @var bool|null
     */
    private $activeVariablesEmp;

    /**
     * Aen lien presence effective.
     *
     * @var bool|null
     */
    private $aenLienPresenceEffective;

    /**
     * Agff.
     *
     * @var bool|null
     */
    private $agff;

    /**
     * Avantage nature prime.
     *
     * @var bool|null
     */
    private $avantageNaturePrime;

    /**
     * Avantage nature tds.
     *
     * @var bool|null
     */
    private $avantageNatureTds;

    /**
     * Avec retro act.
     *
     * @var bool|null
     */
    private $avecRetroAct;

    /**
     * Base exoneree.
     *
     * @var bool|null
     */
    private $baseExoneree;

    /**
     * Base non exoneree.
     *
     * @var bool|null
     */
    private $baseNonExoneree;

    /**
     * Categ salarie.
     *
     * @var string|null
     */
    private $categSalarie;

    /**
     * Cheque vacance.
     *
     * @var bool|null
     */
    private $chequeVacance;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code calcul.
     *
     * @var string|null
     */
    private $codeCalcul;

    /**
     * Code csg taux.
     *
     * @var string|null
     */
    private $codeCsgTaux;

    /**
     * Code ducs.
     *
     * @var string|null
     */
    private $codeDucs;

    /**
     * Code edition histo.
     *
     * @var string|null
     */
    private $codeEditionHisto;

    /**
     * Code insee.
     *
     * @var string|null
     */
    private $codeInsee;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Code rds.
     *
     * @var string|null
     */
    private $codeRds;

    /**
     * Code type assurance.
     *
     * @var string|null
     */
    private $codeTypeAssurance;

    /**
     * Code type b plaf.
     *
     * @var string|null
     */
    private $codeTypeBPlaf;

    /**
     * Code type b spec prev.
     *
     * @var string|null
     */
    private $codeTypeBSpecPrev;

    /**
     * Code type brut.
     *
     * @var string|null
     */
    private $codeTypeBrut;

    /**
     * Code type prev.
     *
     * @var string|null
     */
    private $codeTypePrev;

    /**
     * Code type somme.
     *
     * @var string|null
     */
    private $codeTypeSomme;

    /**
     * Compte charge.
     *
     * @var string|null
     */
    private $compteCharge;

    /**
     * Condition.
     *
     * @var string|null
     */
    private $condition;

    /**
     * Condition spec.
     *
     * @var string|null
     */
    private $conditionSpec;

    /**
     * Conge paye.
     *
     * @var bool|null
     */
    private $congePaye;

    /**
     * Cotis normal dues.
     *
     * @var bool|null
     */
    private $cotisNormalDues;

    /**
     * Cotis normal dues accre.
     *
     * @var bool|null
     */
    private $cotisNormalDuesAccre;

    /**
     * Cotis normal dues zfu.
     *
     * @var bool|null
     */
    private $cotisNormalDuesZfu;

    /**
     * Cotis normal dues zrd.
     *
     * @var bool|null
     */
    private $cotisNormalDuesZrd;

    /**
     * Cotis normal dues zrrzru.
     *
     * @var bool|null
     */
    private $cotisNormalDuesZrrzru;

    /**
     * Cotisation csg.
     *
     * @var bool|null
     */
    private $cotisationCsg;

    /**
     * Cout global.
     *
     * @var bool|null
     */
    private $coutGlobal;

    /**
     * Deb per application.
     *
     * @var DateTime|null
     */
    private $debPerApplication;

    /**
     * Determine allegement.
     *
     * @var bool|null
     */
    private $determineAllegement;

    /**
     * Determine base secu.
     *
     * @var bool|null
     */
    private $determineBaseSecu;

    /**
     * Diminue net.
     *
     * @var bool|null
     */
    private $diminueNet;

    /**
     * Edition base.
     *
     * @var bool|null
     */
    private $editionBase;

    /**
     * Edition bulletin.
     *
     * @var bool|null
     */
    private $editionBulletin;

    /**
     * Edition cot patronale.
     *
     * @var bool|null
     */
    private $editionCotPatronale;

    /**
     * Edition forcee ds.
     *
     * @var bool|null
     */
    private $editionForceeDs;

    /**
     * Edition resultat.
     *
     * @var bool|null
     */
    private $editionResultat;

    /**
     * Edition taux.
     *
     * @var bool|null
     */
    private $editionTaux;

    /**
     * Exclure loi tepa.
     *
     * @var bool|null
     */
    private $exclureLoiTepa;

    /**
     * Exo occasionnel msa.
     *
     * @var bool|null
     */
    private $exoOccasionnelMsa;

    /**
     * Exo taux patronal.
     *
     * @var bool|null
     */
    private $exoTauxPatronal;

    /**
     * Expatriation.
     *
     * @var bool|null
     */
    private $expatriation;

    /**
     * Fillon adom.
     *
     * @var bool|null
     */
    private $fillonAdom;

    /**
     * Fillon sap.
     *
     * @var bool|null
     */
    private $fillonSap;

    /**
     * Fin per application.
     *
     * @var DateTime|null
     */
    private $finPerApplication;

    /**
     * Frais professionnel.
     *
     * @var bool|null
     */
    private $fraisProfessionnel;

    /**
     * Frais sante.
     *
     * @var bool|null
     */
    private $fraisSante;

    /**
     * Freq1.
     *
     * @var bool|null
     */
    private $freq1;

    /**
     * Freq10.
     *
     * @var bool|null
     */
    private $freq10;

    /**
     * Freq11.
     *
     * @var bool|null
     */
    private $freq11;

    /**
     * Freq12.
     *
     * @var bool|null
     */
    private $freq12;

    /**
     * Freq2.
     *
     * @var bool|null
     */
    private $freq2;

    /**
     * Freq3.
     *
     * @var bool|null
     */
    private $freq3;

    /**
     * Freq4.
     *
     * @var bool|null
     */
    private $freq4;

    /**
     * Freq5.
     *
     * @var bool|null
     */
    private $freq5;

    /**
     * Freq6.
     *
     * @var bool|null
     */
    private $freq6;

    /**
     * Freq7.
     *
     * @var bool|null
     */
    private $freq7;

    /**
     * Freq8.
     *
     * @var bool|null
     */
    private $freq8;

    /**
     * Freq9.
     *
     * @var bool|null
     */
    private $freq9;

    /**
     * H sup loi tepa.
     *
     * @var bool|null
     */
    private $hSupLoiTepa;

    /**
     * H sup structurelle.
     *
     * @var bool|null
     */
    private $hSupStructurelle;

    /**
     * Id institution.
     *
     * @var string|null
     */
    private $idInstitution;

    /**
     * Ijss.
     *
     * @var bool|null
     */
    private $ijss;

    /**
     * Imput epargne ret.
     *
     * @var bool|null
     */
    private $imputEpargneRet;

    /**
     * Indemnite non imposable.
     *
     * @var bool|null
     */
    private $indemniteNonImposable;

    /**
     * Intervient brut al.
     *
     * @var bool|null
     */
    private $intervientBrutAl;

    /**
     * Intervient indem preca.
     *
     * @var bool|null
     */
    private $intervientIndemPreca;

    /**
     * Intervient taux h ab cp.
     *
     * @var string|null
     */
    private $intervientTauxHAbCp;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Intitule ducs.
     *
     * @var string|null
     */
    private $intituleDucs;

    /**
     * Maintien salaire.
     *
     * @var bool|null
     */
    private $maintienSalaire;

    /**
     * Mois deb fixe.
     *
     * @var string|null
     */
    private $moisDebFixe;

    /**
     * Mois echu.
     *
     * @var bool|null
     */
    private $moisEchu;

    /**
     * Mois fin fixe.
     *
     * @var string|null
     */
    private $moisFinFixe;

    /**
     * Montant global.
     *
     * @var float|null
     */
    private $montantGlobal;

    /**
     * Montant salarial.
     *
     * @var float|null
     */
    private $montantSalarial;

    /**
     * Nb h contract.
     *
     * @var float|null
     */
    private $nbHContract;

    /**
     * Nb mois applic.
     *
     * @var int|null
     */
    private $nbMoisApplic;

    /**
     * Neutre.
     *
     * @var bool|null
     */
    private $neutre;

    /**
     * Num col acbs.
     *
     * @var string|null
     */
    private $numColAcbs;

    /**
     * Num col allege35h.
     *
     * @var string|null
     */
    private $numColAllege35h;

    /**
     * Num col charges cafe.
     *
     * @var string|null
     */
    private $numColChargesCafe;

    /**
     * Num cumul bulletin.
     *
     * @var int|null
     */
    private $numCumulBulletin;

    /**
     * Num cumul patron.
     *
     * @var int|null
     */
    private $numCumulPatron;

    /**
     * Num taux const nat.
     *
     * @var int|null
     */
    private $numTauxConstNat;

    /**
     * Part patron prevoyance.
     *
     * @var bool|null
     */
    private $partPatronPrevoyance;

    /**
     * Periodicite.
     *
     * @var string|null
     */
    private $periodicite;

    /**
     * Pourboire.
     *
     * @var bool|null
     */
    private $pourboire;

    /**
     * Prevoyance.
     *
     * @var bool|null
     */
    private $prevoyance;

    /**
     * Prevoyance comp.
     *
     * @var bool|null
     */
    private $prevoyanceComp;

    /**
     * Prime non proratisee.
     *
     * @var bool|null
     */
    private $primeNonProratisee;

    /**
     * Prime servitude travail.
     *
     * @var bool|null
     */
    private $primeServitudeTravail;

    /**
     * Qualifiant cotis.
     *
     * @var string|null
     */
    private $qualifiantCotis;

    /**
     * Regle calcul.
     *
     * @var string|null
     */
    private $regleCalcul;

    /**
     * Regle taux.
     *
     * @var string|null
     */
    private $regleTaux;

    /**
     * Remise a zero.
     *
     * @var bool|null
     */
    private $remiseAZero;

    /**
     * Result mt.
     *
     * @var bool|null
     */
    private $resultMt;

    /**
     * Resultat ducs.
     *
     * @var bool|null
     */
    private $resultatDucs;

    /**
     * Retenue salaire.
     *
     * @var bool|null
     */
    private $retenueSalaire;

    /**
     * Retenue source.
     *
     * @var bool|null
     */
    private $retenueSource;

    /**
     * Retraite obligatoire.
     *
     * @var bool|null
     */
    private $retraiteObligatoire;

    /**
     * Retraite supp.
     *
     * @var bool|null
     */
    private $retraiteSupp;

    /**
     * Salaire cp.
     *
     * @var bool|null
     */
    private $salaireCp;

    /**
     * Sans reintegration sociale.
     *
     * @var bool|null
     */
    private $sansReintegrationSociale;

    /**
     * Soumis abattement.
     *
     * @var bool|null
     */
    private $soumisAbattement;

    /**
     * Soumis crds100.
     *
     * @var bool|null
     */
    private $soumisCrds100;

    /**
     * Soumis csg.
     *
     * @var bool|null
     */
    private $soumisCsg;

    /**
     * Soumis csg100.
     *
     * @var bool|null
     */
    private $soumisCsg100;

    /**
     * Soumis forfait social.
     *
     * @var bool|null
     */
    private $soumisForfaitSocial;

    /**
     * Soumis rds.
     *
     * @var bool|null
     */
    private $soumisRds;

    /**
     * Taux du libelle.
     *
     * @var bool|null
     */
    private $tauxDuLibelle;

    /**
     * Taux forfait social.
     *
     * @var string|null
     */
    private $tauxForfaitSocial;

    /**
     * Taux patronal dadsu.
     *
     * @var float|null
     */
    private $tauxPatronalDadsu;

    /**
     * Taux salarial dadsu.
     *
     * @var float|null
     */
    private $tauxSalarialDadsu;

    /**
     * Type absence h sup.
     *
     * @var string|null
     */
    private $typeAbsenceHSup;

    /**
     * Type avantage.
     *
     * @var string|null
     */
    private $typeAvantage;

    /**
     * Type base cotisation.
     *
     * @var string|null
     */
    private $typeBaseCotisation;

    /**
     * Type cotis.
     *
     * @var string|null
     */
    private $typeCotis;

    /**
     * Type date anc.
     *
     * @var int|null
     */
    private $typeDateAnc;

    /**
     * Type donnee dadsu.
     *
     * @var string|null
     */
    private $typeDonneeDadsu;

    /**
     * Type frais.
     *
     * @var string|null
     */
    private $typeFrais;

    /**
     * Type h sup loi tepa.
     *
     * @var string|null
     */
    private $typeHSupLoiTepa;

    /**
     * Type he fillon.
     *
     * @var string|null
     */
    private $typeHeFillon;

    /**
     * Type heure.
     *
     * @var string|null
     */
    private $typeHeure;

    /**
     * Type heure sup.
     *
     * @var string|null
     */
    private $typeHeureSup;

    /**
     * Type orga.
     *
     * @var string|null
     */
    private $typeOrga;

    /**
     * Type proratisation prime.
     *
     * @var string|null
     */
    private $typeProratisationPrime;

    /**
     * Type tranche.
     *
     * @var string|null
     */
    private $typeTranche;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a compter heures assedic.
     *
     * @return bool|null Returns the a compter heures assedic.
     */
    public function getACompterHeuresAssedic(): ?bool {
        return $this->aCompterHeuresAssedic;
    }

    /**
     * Get the a conserver setp.
     *
     * @return bool|null Returns the a conserver setp.
     */
    public function getAConserverSetp(): ?bool {
        return $this->aConserverSetp;
    }

    /**
     * Get the a cumuler base caisse1.
     *
     * @return bool|null Returns the a cumuler base caisse1.
     */
    public function getACumulerBaseCaisse1(): ?bool {
        return $this->aCumulerBaseCaisse1;
    }

    /**
     * Get the a cumuler base caisse2.
     *
     * @return bool|null Returns the a cumuler base caisse2.
     */
    public function getACumulerBaseCaisse2(): ?bool {
        return $this->aCumulerBaseCaisse2;
    }

    /**
     * Get the a cumuler base caisse3.
     *
     * @return bool|null Returns the a cumuler base caisse3.
     */
    public function getACumulerBaseCaisse3(): ?bool {
        return $this->aCumulerBaseCaisse3;
    }

    /**
     * Get the a cumuler base cp.
     *
     * @return bool|null Returns the a cumuler base cp.
     */
    public function getACumulerBaseCp(): ?bool {
        return $this->aCumulerBaseCp;
    }

    /**
     * Get the a cumuler base secu.
     *
     * @return bool|null Returns the a cumuler base secu.
     */
    public function getACumulerBaseSecu(): ?bool {
        return $this->aCumulerBaseSecu;
    }

    /**
     * Get the a reintegrer setp.
     *
     * @return bool|null Returns the a reintegrer setp.
     */
    public function getAReintegrerSetp(): ?bool {
        return $this->aReintegrerSetp;
    }

    /**
     * Get the active variables emp.
     *
     * @return bool|null Returns the active variables emp.
     */
    public function getActiveVariablesEmp(): ?bool {
        return $this->activeVariablesEmp;
    }

    /**
     * Get the aen lien presence effective.
     *
     * @return bool|null Returns the aen lien presence effective.
     */
    public function getAenLienPresenceEffective(): ?bool {
        return $this->aenLienPresenceEffective;
    }

    /**
     * Get the agff.
     *
     * @return bool|null Returns the agff.
     */
    public function getAgff(): ?bool {
        return $this->agff;
    }

    /**
     * Get the avantage nature prime.
     *
     * @return bool|null Returns the avantage nature prime.
     */
    public function getAvantageNaturePrime(): ?bool {
        return $this->avantageNaturePrime;
    }

    /**
     * Get the avantage nature tds.
     *
     * @return bool|null Returns the avantage nature tds.
     */
    public function getAvantageNatureTds(): ?bool {
        return $this->avantageNatureTds;
    }

    /**
     * Get the avec retro act.
     *
     * @return bool|null Returns the avec retro act.
     */
    public function getAvecRetroAct(): ?bool {
        return $this->avecRetroAct;
    }

    /**
     * Get the base exoneree.
     *
     * @return bool|null Returns the base exoneree.
     */
    public function getBaseExoneree(): ?bool {
        return $this->baseExoneree;
    }

    /**
     * Get the base non exoneree.
     *
     * @return bool|null Returns the base non exoneree.
     */
    public function getBaseNonExoneree(): ?bool {
        return $this->baseNonExoneree;
    }

    /**
     * Get the categ salarie.
     *
     * @return string|null Returns the categ salarie.
     */
    public function getCategSalarie(): ?string {
        return $this->categSalarie;
    }

    /**
     * Get the cheque vacance.
     *
     * @return bool|null Returns the cheque vacance.
     */
    public function getChequeVacance(): ?bool {
        return $this->chequeVacance;
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
     * Get the code calcul.
     *
     * @return string|null Returns the code calcul.
     */
    public function getCodeCalcul(): ?string {
        return $this->codeCalcul;
    }

    /**
     * Get the code csg taux.
     *
     * @return string|null Returns the code csg taux.
     */
    public function getCodeCsgTaux(): ?string {
        return $this->codeCsgTaux;
    }

    /**
     * Get the code ducs.
     *
     * @return string|null Returns the code ducs.
     */
    public function getCodeDucs(): ?string {
        return $this->codeDucs;
    }

    /**
     * Get the code edition histo.
     *
     * @return string|null Returns the code edition histo.
     */
    public function getCodeEditionHisto(): ?string {
        return $this->codeEditionHisto;
    }

    /**
     * Get the code insee.
     *
     * @return string|null Returns the code insee.
     */
    public function getCodeInsee(): ?string {
        return $this->codeInsee;
    }

    /**
     * Get the code organisme.
     *
     * @return string|null Returns the code organisme.
     */
    public function getCodeOrganisme(): ?string {
        return $this->codeOrganisme;
    }

    /**
     * Get the code rds.
     *
     * @return string|null Returns the code rds.
     */
    public function getCodeRds(): ?string {
        return $this->codeRds;
    }

    /**
     * Get the code type assurance.
     *
     * @return string|null Returns the code type assurance.
     */
    public function getCodeTypeAssurance(): ?string {
        return $this->codeTypeAssurance;
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
     * Get the code type b spec prev.
     *
     * @return string|null Returns the code type b spec prev.
     */
    public function getCodeTypeBSpecPrev(): ?string {
        return $this->codeTypeBSpecPrev;
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
     * Get the code type prev.
     *
     * @return string|null Returns the code type prev.
     */
    public function getCodeTypePrev(): ?string {
        return $this->codeTypePrev;
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
     * Get the compte charge.
     *
     * @return string|null Returns the compte charge.
     */
    public function getCompteCharge(): ?string {
        return $this->compteCharge;
    }

    /**
     * Get the condition.
     *
     * @return string|null Returns the condition.
     */
    public function getCondition(): ?string {
        return $this->condition;
    }

    /**
     * Get the condition spec.
     *
     * @return string|null Returns the condition spec.
     */
    public function getConditionSpec(): ?string {
        return $this->conditionSpec;
    }

    /**
     * Get the conge paye.
     *
     * @return bool|null Returns the conge paye.
     */
    public function getCongePaye(): ?bool {
        return $this->congePaye;
    }

    /**
     * Get the cotis normal dues.
     *
     * @return bool|null Returns the cotis normal dues.
     */
    public function getCotisNormalDues(): ?bool {
        return $this->cotisNormalDues;
    }

    /**
     * Get the cotis normal dues accre.
     *
     * @return bool|null Returns the cotis normal dues accre.
     */
    public function getCotisNormalDuesAccre(): ?bool {
        return $this->cotisNormalDuesAccre;
    }

    /**
     * Get the cotis normal dues zfu.
     *
     * @return bool|null Returns the cotis normal dues zfu.
     */
    public function getCotisNormalDuesZfu(): ?bool {
        return $this->cotisNormalDuesZfu;
    }

    /**
     * Get the cotis normal dues zrd.
     *
     * @return bool|null Returns the cotis normal dues zrd.
     */
    public function getCotisNormalDuesZrd(): ?bool {
        return $this->cotisNormalDuesZrd;
    }

    /**
     * Get the cotis normal dues zrrzru.
     *
     * @return bool|null Returns the cotis normal dues zrrzru.
     */
    public function getCotisNormalDuesZrrzru(): ?bool {
        return $this->cotisNormalDuesZrrzru;
    }

    /**
     * Get the cotisation csg.
     *
     * @return bool|null Returns the cotisation csg.
     */
    public function getCotisationCsg(): ?bool {
        return $this->cotisationCsg;
    }

    /**
     * Get the cout global.
     *
     * @return bool|null Returns the cout global.
     */
    public function getCoutGlobal(): ?bool {
        return $this->coutGlobal;
    }

    /**
     * Get the deb per application.
     *
     * @return DateTime|null Returns the deb per application.
     */
    public function getDebPerApplication(): ?DateTime {
        return $this->debPerApplication;
    }

    /**
     * Get the determine allegement.
     *
     * @return bool|null Returns the determine allegement.
     */
    public function getDetermineAllegement(): ?bool {
        return $this->determineAllegement;
    }

    /**
     * Get the determine base secu.
     *
     * @return bool|null Returns the determine base secu.
     */
    public function getDetermineBaseSecu(): ?bool {
        return $this->determineBaseSecu;
    }

    /**
     * Get the diminue net.
     *
     * @return bool|null Returns the diminue net.
     */
    public function getDiminueNet(): ?bool {
        return $this->diminueNet;
    }

    /**
     * Get the edition base.
     *
     * @return bool|null Returns the edition base.
     */
    public function getEditionBase(): ?bool {
        return $this->editionBase;
    }

    /**
     * Get the edition bulletin.
     *
     * @return bool|null Returns the edition bulletin.
     */
    public function getEditionBulletin(): ?bool {
        return $this->editionBulletin;
    }

    /**
     * Get the edition cot patronale.
     *
     * @return bool|null Returns the edition cot patronale.
     */
    public function getEditionCotPatronale(): ?bool {
        return $this->editionCotPatronale;
    }

    /**
     * Get the edition forcee ds.
     *
     * @return bool|null Returns the edition forcee ds.
     */
    public function getEditionForceeDs(): ?bool {
        return $this->editionForceeDs;
    }

    /**
     * Get the edition resultat.
     *
     * @return bool|null Returns the edition resultat.
     */
    public function getEditionResultat(): ?bool {
        return $this->editionResultat;
    }

    /**
     * Get the edition taux.
     *
     * @return bool|null Returns the edition taux.
     */
    public function getEditionTaux(): ?bool {
        return $this->editionTaux;
    }

    /**
     * Get the exclure loi tepa.
     *
     * @return bool|null Returns the exclure loi tepa.
     */
    public function getExclureLoiTepa(): ?bool {
        return $this->exclureLoiTepa;
    }

    /**
     * Get the exo occasionnel msa.
     *
     * @return bool|null Returns the exo occasionnel msa.
     */
    public function getExoOccasionnelMsa(): ?bool {
        return $this->exoOccasionnelMsa;
    }

    /**
     * Get the exo taux patronal.
     *
     * @return bool|null Returns the exo taux patronal.
     */
    public function getExoTauxPatronal(): ?bool {
        return $this->exoTauxPatronal;
    }

    /**
     * Get the expatriation.
     *
     * @return bool|null Returns the expatriation.
     */
    public function getExpatriation(): ?bool {
        return $this->expatriation;
    }

    /**
     * Get the fillon adom.
     *
     * @return bool|null Returns the fillon adom.
     */
    public function getFillonAdom(): ?bool {
        return $this->fillonAdom;
    }

    /**
     * Get the fillon sap.
     *
     * @return bool|null Returns the fillon sap.
     */
    public function getFillonSap(): ?bool {
        return $this->fillonSap;
    }

    /**
     * Get the fin per application.
     *
     * @return DateTime|null Returns the fin per application.
     */
    public function getFinPerApplication(): ?DateTime {
        return $this->finPerApplication;
    }

    /**
     * Get the frais professionnel.
     *
     * @return bool|null Returns the frais professionnel.
     */
    public function getFraisProfessionnel(): ?bool {
        return $this->fraisProfessionnel;
    }

    /**
     * Get the frais sante.
     *
     * @return bool|null Returns the frais sante.
     */
    public function getFraisSante(): ?bool {
        return $this->fraisSante;
    }

    /**
     * Get the freq1.
     *
     * @return bool|null Returns the freq1.
     */
    public function getFreq1(): ?bool {
        return $this->freq1;
    }

    /**
     * Get the freq10.
     *
     * @return bool|null Returns the freq10.
     */
    public function getFreq10(): ?bool {
        return $this->freq10;
    }

    /**
     * Get the freq11.
     *
     * @return bool|null Returns the freq11.
     */
    public function getFreq11(): ?bool {
        return $this->freq11;
    }

    /**
     * Get the freq12.
     *
     * @return bool|null Returns the freq12.
     */
    public function getFreq12(): ?bool {
        return $this->freq12;
    }

    /**
     * Get the freq2.
     *
     * @return bool|null Returns the freq2.
     */
    public function getFreq2(): ?bool {
        return $this->freq2;
    }

    /**
     * Get the freq3.
     *
     * @return bool|null Returns the freq3.
     */
    public function getFreq3(): ?bool {
        return $this->freq3;
    }

    /**
     * Get the freq4.
     *
     * @return bool|null Returns the freq4.
     */
    public function getFreq4(): ?bool {
        return $this->freq4;
    }

    /**
     * Get the freq5.
     *
     * @return bool|null Returns the freq5.
     */
    public function getFreq5(): ?bool {
        return $this->freq5;
    }

    /**
     * Get the freq6.
     *
     * @return bool|null Returns the freq6.
     */
    public function getFreq6(): ?bool {
        return $this->freq6;
    }

    /**
     * Get the freq7.
     *
     * @return bool|null Returns the freq7.
     */
    public function getFreq7(): ?bool {
        return $this->freq7;
    }

    /**
     * Get the freq8.
     *
     * @return bool|null Returns the freq8.
     */
    public function getFreq8(): ?bool {
        return $this->freq8;
    }

    /**
     * Get the freq9.
     *
     * @return bool|null Returns the freq9.
     */
    public function getFreq9(): ?bool {
        return $this->freq9;
    }

    /**
     * Get the h sup loi tepa.
     *
     * @return bool|null Returns the h sup loi tepa.
     */
    public function getHSupLoiTepa(): ?bool {
        return $this->hSupLoiTepa;
    }

    /**
     * Get the h sup structurelle.
     *
     * @return bool|null Returns the h sup structurelle.
     */
    public function getHSupStructurelle(): ?bool {
        return $this->hSupStructurelle;
    }

    /**
     * Get the id institution.
     *
     * @return string|null Returns the id institution.
     */
    public function getIdInstitution(): ?string {
        return $this->idInstitution;
    }

    /**
     * Get the ijss.
     *
     * @return bool|null Returns the ijss.
     */
    public function getIjss(): ?bool {
        return $this->ijss;
    }

    /**
     * Get the imput epargne ret.
     *
     * @return bool|null Returns the imput epargne ret.
     */
    public function getImputEpargneRet(): ?bool {
        return $this->imputEpargneRet;
    }

    /**
     * Get the indemnite non imposable.
     *
     * @return bool|null Returns the indemnite non imposable.
     */
    public function getIndemniteNonImposable(): ?bool {
        return $this->indemniteNonImposable;
    }

    /**
     * Get the intervient brut al.
     *
     * @return bool|null Returns the intervient brut al.
     */
    public function getIntervientBrutAl(): ?bool {
        return $this->intervientBrutAl;
    }

    /**
     * Get the intervient indem preca.
     *
     * @return bool|null Returns the intervient indem preca.
     */
    public function getIntervientIndemPreca(): ?bool {
        return $this->intervientIndemPreca;
    }

    /**
     * Get the intervient taux h ab cp.
     *
     * @return string|null Returns the intervient taux h ab cp.
     */
    public function getIntervientTauxHAbCp(): ?string {
        return $this->intervientTauxHAbCp;
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
     * Get the intitule ducs.
     *
     * @return string|null Returns the intitule ducs.
     */
    public function getIntituleDucs(): ?string {
        return $this->intituleDucs;
    }

    /**
     * Get the maintien salaire.
     *
     * @return bool|null Returns the maintien salaire.
     */
    public function getMaintienSalaire(): ?bool {
        return $this->maintienSalaire;
    }

    /**
     * Get the mois deb fixe.
     *
     * @return string|null Returns the mois deb fixe.
     */
    public function getMoisDebFixe(): ?string {
        return $this->moisDebFixe;
    }

    /**
     * Get the mois echu.
     *
     * @return bool|null Returns the mois echu.
     */
    public function getMoisEchu(): ?bool {
        return $this->moisEchu;
    }

    /**
     * Get the mois fin fixe.
     *
     * @return string|null Returns the mois fin fixe.
     */
    public function getMoisFinFixe(): ?string {
        return $this->moisFinFixe;
    }

    /**
     * Get the montant global.
     *
     * @return float|null Returns the montant global.
     */
    public function getMontantGlobal(): ?float {
        return $this->montantGlobal;
    }

    /**
     * Get the montant salarial.
     *
     * @return float|null Returns the montant salarial.
     */
    public function getMontantSalarial(): ?float {
        return $this->montantSalarial;
    }

    /**
     * Get the nb h contract.
     *
     * @return float|null Returns the nb h contract.
     */
    public function getNbHContract(): ?float {
        return $this->nbHContract;
    }

    /**
     * Get the nb mois applic.
     *
     * @return int|null Returns the nb mois applic.
     */
    public function getNbMoisApplic(): ?int {
        return $this->nbMoisApplic;
    }

    /**
     * Get the neutre.
     *
     * @return bool|null Returns the neutre.
     */
    public function getNeutre(): ?bool {
        return $this->neutre;
    }

    /**
     * Get the num col acbs.
     *
     * @return string|null Returns the num col acbs.
     */
    public function getNumColAcbs(): ?string {
        return $this->numColAcbs;
    }

    /**
     * Get the num col allege35h.
     *
     * @return string|null Returns the num col allege35h.
     */
    public function getNumColAllege35h(): ?string {
        return $this->numColAllege35h;
    }

    /**
     * Get the num col charges cafe.
     *
     * @return string|null Returns the num col charges cafe.
     */
    public function getNumColChargesCafe(): ?string {
        return $this->numColChargesCafe;
    }

    /**
     * Get the num cumul bulletin.
     *
     * @return int|null Returns the num cumul bulletin.
     */
    public function getNumCumulBulletin(): ?int {
        return $this->numCumulBulletin;
    }

    /**
     * Get the num cumul patron.
     *
     * @return int|null Returns the num cumul patron.
     */
    public function getNumCumulPatron(): ?int {
        return $this->numCumulPatron;
    }

    /**
     * Get the num taux const nat.
     *
     * @return int|null Returns the num taux const nat.
     */
    public function getNumTauxConstNat(): ?int {
        return $this->numTauxConstNat;
    }

    /**
     * Get the part patron prevoyance.
     *
     * @return bool|null Returns the part patron prevoyance.
     */
    public function getPartPatronPrevoyance(): ?bool {
        return $this->partPatronPrevoyance;
    }

    /**
     * Get the periodicite.
     *
     * @return string|null Returns the periodicite.
     */
    public function getPeriodicite(): ?string {
        return $this->periodicite;
    }

    /**
     * Get the pourboire.
     *
     * @return bool|null Returns the pourboire.
     */
    public function getPourboire(): ?bool {
        return $this->pourboire;
    }

    /**
     * Get the prevoyance.
     *
     * @return bool|null Returns the prevoyance.
     */
    public function getPrevoyance(): ?bool {
        return $this->prevoyance;
    }

    /**
     * Get the prevoyance comp.
     *
     * @return bool|null Returns the prevoyance comp.
     */
    public function getPrevoyanceComp(): ?bool {
        return $this->prevoyanceComp;
    }

    /**
     * Get the prime non proratisee.
     *
     * @return bool|null Returns the prime non proratisee.
     */
    public function getPrimeNonProratisee(): ?bool {
        return $this->primeNonProratisee;
    }

    /**
     * Get the prime servitude travail.
     *
     * @return bool|null Returns the prime servitude travail.
     */
    public function getPrimeServitudeTravail(): ?bool {
        return $this->primeServitudeTravail;
    }

    /**
     * Get the qualifiant cotis.
     *
     * @return string|null Returns the qualifiant cotis.
     */
    public function getQualifiantCotis(): ?string {
        return $this->qualifiantCotis;
    }

    /**
     * Get the regle calcul.
     *
     * @return string|null Returns the regle calcul.
     */
    public function getRegleCalcul(): ?string {
        return $this->regleCalcul;
    }

    /**
     * Get the regle taux.
     *
     * @return string|null Returns the regle taux.
     */
    public function getRegleTaux(): ?string {
        return $this->regleTaux;
    }

    /**
     * Get the remise a zero.
     *
     * @return bool|null Returns the remise a zero.
     */
    public function getRemiseAZero(): ?bool {
        return $this->remiseAZero;
    }

    /**
     * Get the result mt.
     *
     * @return bool|null Returns the result mt.
     */
    public function getResultMt(): ?bool {
        return $this->resultMt;
    }

    /**
     * Get the resultat ducs.
     *
     * @return bool|null Returns the resultat ducs.
     */
    public function getResultatDucs(): ?bool {
        return $this->resultatDucs;
    }

    /**
     * Get the retenue salaire.
     *
     * @return bool|null Returns the retenue salaire.
     */
    public function getRetenueSalaire(): ?bool {
        return $this->retenueSalaire;
    }

    /**
     * Get the retenue source.
     *
     * @return bool|null Returns the retenue source.
     */
    public function getRetenueSource(): ?bool {
        return $this->retenueSource;
    }

    /**
     * Get the retraite obligatoire.
     *
     * @return bool|null Returns the retraite obligatoire.
     */
    public function getRetraiteObligatoire(): ?bool {
        return $this->retraiteObligatoire;
    }

    /**
     * Get the retraite supp.
     *
     * @return bool|null Returns the retraite supp.
     */
    public function getRetraiteSupp(): ?bool {
        return $this->retraiteSupp;
    }

    /**
     * Get the salaire cp.
     *
     * @return bool|null Returns the salaire cp.
     */
    public function getSalaireCp(): ?bool {
        return $this->salaireCp;
    }

    /**
     * Get the sans reintegration sociale.
     *
     * @return bool|null Returns the sans reintegration sociale.
     */
    public function getSansReintegrationSociale(): ?bool {
        return $this->sansReintegrationSociale;
    }

    /**
     * Get the soumis abattement.
     *
     * @return bool|null Returns the soumis abattement.
     */
    public function getSoumisAbattement(): ?bool {
        return $this->soumisAbattement;
    }

    /**
     * Get the soumis crds100.
     *
     * @return bool|null Returns the soumis crds100.
     */
    public function getSoumisCrds100(): ?bool {
        return $this->soumisCrds100;
    }

    /**
     * Get the soumis csg.
     *
     * @return bool|null Returns the soumis csg.
     */
    public function getSoumisCsg(): ?bool {
        return $this->soumisCsg;
    }

    /**
     * Get the soumis csg100.
     *
     * @return bool|null Returns the soumis csg100.
     */
    public function getSoumisCsg100(): ?bool {
        return $this->soumisCsg100;
    }

    /**
     * Get the soumis forfait social.
     *
     * @return bool|null Returns the soumis forfait social.
     */
    public function getSoumisForfaitSocial(): ?bool {
        return $this->soumisForfaitSocial;
    }

    /**
     * Get the soumis rds.
     *
     * @return bool|null Returns the soumis rds.
     */
    public function getSoumisRds(): ?bool {
        return $this->soumisRds;
    }

    /**
     * Get the taux du libelle.
     *
     * @return bool|null Returns the taux du libelle.
     */
    public function getTauxDuLibelle(): ?bool {
        return $this->tauxDuLibelle;
    }

    /**
     * Get the taux forfait social.
     *
     * @return string|null Returns the taux forfait social.
     */
    public function getTauxForfaitSocial(): ?string {
        return $this->tauxForfaitSocial;
    }

    /**
     * Get the taux patronal dadsu.
     *
     * @return float|null Returns the taux patronal dadsu.
     */
    public function getTauxPatronalDadsu(): ?float {
        return $this->tauxPatronalDadsu;
    }

    /**
     * Get the taux salarial dadsu.
     *
     * @return float|null Returns the taux salarial dadsu.
     */
    public function getTauxSalarialDadsu(): ?float {
        return $this->tauxSalarialDadsu;
    }

    /**
     * Get the type absence h sup.
     *
     * @return string|null Returns the type absence h sup.
     */
    public function getTypeAbsenceHSup(): ?string {
        return $this->typeAbsenceHSup;
    }

    /**
     * Get the type avantage.
     *
     * @return string|null Returns the type avantage.
     */
    public function getTypeAvantage(): ?string {
        return $this->typeAvantage;
    }

    /**
     * Get the type base cotisation.
     *
     * @return string|null Returns the type base cotisation.
     */
    public function getTypeBaseCotisation(): ?string {
        return $this->typeBaseCotisation;
    }

    /**
     * Get the type cotis.
     *
     * @return string|null Returns the type cotis.
     */
    public function getTypeCotis(): ?string {
        return $this->typeCotis;
    }

    /**
     * Get the type date anc.
     *
     * @return int|null Returns the type date anc.
     */
    public function getTypeDateAnc(): ?int {
        return $this->typeDateAnc;
    }

    /**
     * Get the type donnee dadsu.
     *
     * @return string|null Returns the type donnee dadsu.
     */
    public function getTypeDonneeDadsu(): ?string {
        return $this->typeDonneeDadsu;
    }

    /**
     * Get the type frais.
     *
     * @return string|null Returns the type frais.
     */
    public function getTypeFrais(): ?string {
        return $this->typeFrais;
    }

    /**
     * Get the type h sup loi tepa.
     *
     * @return string|null Returns the type h sup loi tepa.
     */
    public function getTypeHSupLoiTepa(): ?string {
        return $this->typeHSupLoiTepa;
    }

    /**
     * Get the type he fillon.
     *
     * @return string|null Returns the type he fillon.
     */
    public function getTypeHeFillon(): ?string {
        return $this->typeHeFillon;
    }

    /**
     * Get the type heure.
     *
     * @return string|null Returns the type heure.
     */
    public function getTypeHeure(): ?string {
        return $this->typeHeure;
    }

    /**
     * Get the type heure sup.
     *
     * @return string|null Returns the type heure sup.
     */
    public function getTypeHeureSup(): ?string {
        return $this->typeHeureSup;
    }

    /**
     * Get the type orga.
     *
     * @return string|null Returns the type orga.
     */
    public function getTypeOrga(): ?string {
        return $this->typeOrga;
    }

    /**
     * Get the type proratisation prime.
     *
     * @return string|null Returns the type proratisation prime.
     */
    public function getTypeProratisationPrime(): ?string {
        return $this->typeProratisationPrime;
    }

    /**
     * Get the type tranche.
     *
     * @return string|null Returns the type tranche.
     */
    public function getTypeTranche(): ?string {
        return $this->typeTranche;
    }

    /**
     * Set the a compter heures assedic.
     *
     * @param bool|null $aCompterHeuresAssedic The a compter heures assedic.
     * @return Libelles Returns this Libelles.
     */
    public function setACompterHeuresAssedic(?bool $aCompterHeuresAssedic): Libelles {
        $this->aCompterHeuresAssedic = $aCompterHeuresAssedic;
        return $this;
    }

    /**
     * Set the a conserver setp.
     *
     * @param bool|null $aConserverSetp The a conserver setp.
     * @return Libelles Returns this Libelles.
     */
    public function setAConserverSetp(?bool $aConserverSetp): Libelles {
        $this->aConserverSetp = $aConserverSetp;
        return $this;
    }

    /**
     * Set the a cumuler base caisse1.
     *
     * @param bool|null $aCumulerBaseCaisse1 The a cumuler base caisse1.
     * @return Libelles Returns this Libelles.
     */
    public function setACumulerBaseCaisse1(?bool $aCumulerBaseCaisse1): Libelles {
        $this->aCumulerBaseCaisse1 = $aCumulerBaseCaisse1;
        return $this;
    }

    /**
     * Set the a cumuler base caisse2.
     *
     * @param bool|null $aCumulerBaseCaisse2 The a cumuler base caisse2.
     * @return Libelles Returns this Libelles.
     */
    public function setACumulerBaseCaisse2(?bool $aCumulerBaseCaisse2): Libelles {
        $this->aCumulerBaseCaisse2 = $aCumulerBaseCaisse2;
        return $this;
    }

    /**
     * Set the a cumuler base caisse3.
     *
     * @param bool|null $aCumulerBaseCaisse3 The a cumuler base caisse3.
     * @return Libelles Returns this Libelles.
     */
    public function setACumulerBaseCaisse3(?bool $aCumulerBaseCaisse3): Libelles {
        $this->aCumulerBaseCaisse3 = $aCumulerBaseCaisse3;
        return $this;
    }

    /**
     * Set the a cumuler base cp.
     *
     * @param bool|null $aCumulerBaseCp The a cumuler base cp.
     * @return Libelles Returns this Libelles.
     */
    public function setACumulerBaseCp(?bool $aCumulerBaseCp): Libelles {
        $this->aCumulerBaseCp = $aCumulerBaseCp;
        return $this;
    }

    /**
     * Set the a cumuler base secu.
     *
     * @param bool|null $aCumulerBaseSecu The a cumuler base secu.
     * @return Libelles Returns this Libelles.
     */
    public function setACumulerBaseSecu(?bool $aCumulerBaseSecu): Libelles {
        $this->aCumulerBaseSecu = $aCumulerBaseSecu;
        return $this;
    }

    /**
     * Set the a reintegrer setp.
     *
     * @param bool|null $aReintegrerSetp The a reintegrer setp.
     * @return Libelles Returns this Libelles.
     */
    public function setAReintegrerSetp(?bool $aReintegrerSetp): Libelles {
        $this->aReintegrerSetp = $aReintegrerSetp;
        return $this;
    }

    /**
     * Set the active variables emp.
     *
     * @param bool|null $activeVariablesEmp The active variables emp.
     * @return Libelles Returns this Libelles.
     */
    public function setActiveVariablesEmp(?bool $activeVariablesEmp): Libelles {
        $this->activeVariablesEmp = $activeVariablesEmp;
        return $this;
    }

    /**
     * Set the aen lien presence effective.
     *
     * @param bool|null $aenLienPresenceEffective The aen lien presence effective.
     * @return Libelles Returns this Libelles.
     */
    public function setAenLienPresenceEffective(?bool $aenLienPresenceEffective): Libelles {
        $this->aenLienPresenceEffective = $aenLienPresenceEffective;
        return $this;
    }

    /**
     * Set the agff.
     *
     * @param bool|null $agff The agff.
     * @return Libelles Returns this Libelles.
     */
    public function setAgff(?bool $agff): Libelles {
        $this->agff = $agff;
        return $this;
    }

    /**
     * Set the avantage nature prime.
     *
     * @param bool|null $avantageNaturePrime The avantage nature prime.
     * @return Libelles Returns this Libelles.
     */
    public function setAvantageNaturePrime(?bool $avantageNaturePrime): Libelles {
        $this->avantageNaturePrime = $avantageNaturePrime;
        return $this;
    }

    /**
     * Set the avantage nature tds.
     *
     * @param bool|null $avantageNatureTds The avantage nature tds.
     * @return Libelles Returns this Libelles.
     */
    public function setAvantageNatureTds(?bool $avantageNatureTds): Libelles {
        $this->avantageNatureTds = $avantageNatureTds;
        return $this;
    }

    /**
     * Set the avec retro act.
     *
     * @param bool|null $avecRetroAct The avec retro act.
     * @return Libelles Returns this Libelles.
     */
    public function setAvecRetroAct(?bool $avecRetroAct): Libelles {
        $this->avecRetroAct = $avecRetroAct;
        return $this;
    }

    /**
     * Set the base exoneree.
     *
     * @param bool|null $baseExoneree The base exoneree.
     * @return Libelles Returns this Libelles.
     */
    public function setBaseExoneree(?bool $baseExoneree): Libelles {
        $this->baseExoneree = $baseExoneree;
        return $this;
    }

    /**
     * Set the base non exoneree.
     *
     * @param bool|null $baseNonExoneree The base non exoneree.
     * @return Libelles Returns this Libelles.
     */
    public function setBaseNonExoneree(?bool $baseNonExoneree): Libelles {
        $this->baseNonExoneree = $baseNonExoneree;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param string|null $categSalarie The categ salarie.
     * @return Libelles Returns this Libelles.
     */
    public function setCategSalarie(?string $categSalarie): Libelles {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the cheque vacance.
     *
     * @param bool|null $chequeVacance The cheque vacance.
     * @return Libelles Returns this Libelles.
     */
    public function setChequeVacance(?bool $chequeVacance): Libelles {
        $this->chequeVacance = $chequeVacance;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Libelles Returns this Libelles.
     */
    public function setCode(?string $code): Libelles {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code calcul.
     *
     * @param string|null $codeCalcul The code calcul.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeCalcul(?string $codeCalcul): Libelles {
        $this->codeCalcul = $codeCalcul;
        return $this;
    }

    /**
     * Set the code csg taux.
     *
     * @param string|null $codeCsgTaux The code csg taux.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeCsgTaux(?string $codeCsgTaux): Libelles {
        $this->codeCsgTaux = $codeCsgTaux;
        return $this;
    }

    /**
     * Set the code ducs.
     *
     * @param string|null $codeDucs The code ducs.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeDucs(?string $codeDucs): Libelles {
        $this->codeDucs = $codeDucs;
        return $this;
    }

    /**
     * Set the code edition histo.
     *
     * @param string|null $codeEditionHisto The code edition histo.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeEditionHisto(?string $codeEditionHisto): Libelles {
        $this->codeEditionHisto = $codeEditionHisto;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string|null $codeInsee The code insee.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeInsee(?string $codeInsee): Libelles {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeOrganisme(?string $codeOrganisme): Libelles {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code rds.
     *
     * @param string|null $codeRds The code rds.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeRds(?string $codeRds): Libelles {
        $this->codeRds = $codeRds;
        return $this;
    }

    /**
     * Set the code type assurance.
     *
     * @param string|null $codeTypeAssurance The code type assurance.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeTypeAssurance(?string $codeTypeAssurance): Libelles {
        $this->codeTypeAssurance = $codeTypeAssurance;
        return $this;
    }

    /**
     * Set the code type b plaf.
     *
     * @param string|null $codeTypeBPlaf The code type b plaf.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeTypeBPlaf(?string $codeTypeBPlaf): Libelles {
        $this->codeTypeBPlaf = $codeTypeBPlaf;
        return $this;
    }

    /**
     * Set the code type b spec prev.
     *
     * @param string|null $codeTypeBSpecPrev The code type b spec prev.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeTypeBSpecPrev(?string $codeTypeBSpecPrev): Libelles {
        $this->codeTypeBSpecPrev = $codeTypeBSpecPrev;
        return $this;
    }

    /**
     * Set the code type brut.
     *
     * @param string|null $codeTypeBrut The code type brut.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeTypeBrut(?string $codeTypeBrut): Libelles {
        $this->codeTypeBrut = $codeTypeBrut;
        return $this;
    }

    /**
     * Set the code type prev.
     *
     * @param string|null $codeTypePrev The code type prev.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeTypePrev(?string $codeTypePrev): Libelles {
        $this->codeTypePrev = $codeTypePrev;
        return $this;
    }

    /**
     * Set the code type somme.
     *
     * @param string|null $codeTypeSomme The code type somme.
     * @return Libelles Returns this Libelles.
     */
    public function setCodeTypeSomme(?string $codeTypeSomme): Libelles {
        $this->codeTypeSomme = $codeTypeSomme;
        return $this;
    }

    /**
     * Set the compte charge.
     *
     * @param string|null $compteCharge The compte charge.
     * @return Libelles Returns this Libelles.
     */
    public function setCompteCharge(?string $compteCharge): Libelles {
        $this->compteCharge = $compteCharge;
        return $this;
    }

    /**
     * Set the condition.
     *
     * @param string|null $condition The condition.
     * @return Libelles Returns this Libelles.
     */
    public function setCondition(?string $condition): Libelles {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string|null $conditionSpec The condition spec.
     * @return Libelles Returns this Libelles.
     */
    public function setConditionSpec(?string $conditionSpec): Libelles {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the conge paye.
     *
     * @param bool|null $congePaye The conge paye.
     * @return Libelles Returns this Libelles.
     */
    public function setCongePaye(?bool $congePaye): Libelles {
        $this->congePaye = $congePaye;
        return $this;
    }

    /**
     * Set the cotis normal dues.
     *
     * @param bool|null $cotisNormalDues The cotis normal dues.
     * @return Libelles Returns this Libelles.
     */
    public function setCotisNormalDues(?bool $cotisNormalDues): Libelles {
        $this->cotisNormalDues = $cotisNormalDues;
        return $this;
    }

    /**
     * Set the cotis normal dues accre.
     *
     * @param bool|null $cotisNormalDuesAccre The cotis normal dues accre.
     * @return Libelles Returns this Libelles.
     */
    public function setCotisNormalDuesAccre(?bool $cotisNormalDuesAccre): Libelles {
        $this->cotisNormalDuesAccre = $cotisNormalDuesAccre;
        return $this;
    }

    /**
     * Set the cotis normal dues zfu.
     *
     * @param bool|null $cotisNormalDuesZfu The cotis normal dues zfu.
     * @return Libelles Returns this Libelles.
     */
    public function setCotisNormalDuesZfu(?bool $cotisNormalDuesZfu): Libelles {
        $this->cotisNormalDuesZfu = $cotisNormalDuesZfu;
        return $this;
    }

    /**
     * Set the cotis normal dues zrd.
     *
     * @param bool|null $cotisNormalDuesZrd The cotis normal dues zrd.
     * @return Libelles Returns this Libelles.
     */
    public function setCotisNormalDuesZrd(?bool $cotisNormalDuesZrd): Libelles {
        $this->cotisNormalDuesZrd = $cotisNormalDuesZrd;
        return $this;
    }

    /**
     * Set the cotis normal dues zrrzru.
     *
     * @param bool|null $cotisNormalDuesZrrzru The cotis normal dues zrrzru.
     * @return Libelles Returns this Libelles.
     */
    public function setCotisNormalDuesZrrzru(?bool $cotisNormalDuesZrrzru): Libelles {
        $this->cotisNormalDuesZrrzru = $cotisNormalDuesZrrzru;
        return $this;
    }

    /**
     * Set the cotisation csg.
     *
     * @param bool|null $cotisationCsg The cotisation csg.
     * @return Libelles Returns this Libelles.
     */
    public function setCotisationCsg(?bool $cotisationCsg): Libelles {
        $this->cotisationCsg = $cotisationCsg;
        return $this;
    }

    /**
     * Set the cout global.
     *
     * @param bool|null $coutGlobal The cout global.
     * @return Libelles Returns this Libelles.
     */
    public function setCoutGlobal(?bool $coutGlobal): Libelles {
        $this->coutGlobal = $coutGlobal;
        return $this;
    }

    /**
     * Set the deb per application.
     *
     * @param DateTime|null $debPerApplication The deb per application.
     * @return Libelles Returns this Libelles.
     */
    public function setDebPerApplication(?DateTime $debPerApplication): Libelles {
        $this->debPerApplication = $debPerApplication;
        return $this;
    }

    /**
     * Set the determine allegement.
     *
     * @param bool|null $determineAllegement The determine allegement.
     * @return Libelles Returns this Libelles.
     */
    public function setDetermineAllegement(?bool $determineAllegement): Libelles {
        $this->determineAllegement = $determineAllegement;
        return $this;
    }

    /**
     * Set the determine base secu.
     *
     * @param bool|null $determineBaseSecu The determine base secu.
     * @return Libelles Returns this Libelles.
     */
    public function setDetermineBaseSecu(?bool $determineBaseSecu): Libelles {
        $this->determineBaseSecu = $determineBaseSecu;
        return $this;
    }

    /**
     * Set the diminue net.
     *
     * @param bool|null $diminueNet The diminue net.
     * @return Libelles Returns this Libelles.
     */
    public function setDiminueNet(?bool $diminueNet): Libelles {
        $this->diminueNet = $diminueNet;
        return $this;
    }

    /**
     * Set the edition base.
     *
     * @param bool|null $editionBase The edition base.
     * @return Libelles Returns this Libelles.
     */
    public function setEditionBase(?bool $editionBase): Libelles {
        $this->editionBase = $editionBase;
        return $this;
    }

    /**
     * Set the edition bulletin.
     *
     * @param bool|null $editionBulletin The edition bulletin.
     * @return Libelles Returns this Libelles.
     */
    public function setEditionBulletin(?bool $editionBulletin): Libelles {
        $this->editionBulletin = $editionBulletin;
        return $this;
    }

    /**
     * Set the edition cot patronale.
     *
     * @param bool|null $editionCotPatronale The edition cot patronale.
     * @return Libelles Returns this Libelles.
     */
    public function setEditionCotPatronale(?bool $editionCotPatronale): Libelles {
        $this->editionCotPatronale = $editionCotPatronale;
        return $this;
    }

    /**
     * Set the edition forcee ds.
     *
     * @param bool|null $editionForceeDs The edition forcee ds.
     * @return Libelles Returns this Libelles.
     */
    public function setEditionForceeDs(?bool $editionForceeDs): Libelles {
        $this->editionForceeDs = $editionForceeDs;
        return $this;
    }

    /**
     * Set the edition resultat.
     *
     * @param bool|null $editionResultat The edition resultat.
     * @return Libelles Returns this Libelles.
     */
    public function setEditionResultat(?bool $editionResultat): Libelles {
        $this->editionResultat = $editionResultat;
        return $this;
    }

    /**
     * Set the edition taux.
     *
     * @param bool|null $editionTaux The edition taux.
     * @return Libelles Returns this Libelles.
     */
    public function setEditionTaux(?bool $editionTaux): Libelles {
        $this->editionTaux = $editionTaux;
        return $this;
    }

    /**
     * Set the exclure loi tepa.
     *
     * @param bool|null $exclureLoiTepa The exclure loi tepa.
     * @return Libelles Returns this Libelles.
     */
    public function setExclureLoiTepa(?bool $exclureLoiTepa): Libelles {
        $this->exclureLoiTepa = $exclureLoiTepa;
        return $this;
    }

    /**
     * Set the exo occasionnel msa.
     *
     * @param bool|null $exoOccasionnelMsa The exo occasionnel msa.
     * @return Libelles Returns this Libelles.
     */
    public function setExoOccasionnelMsa(?bool $exoOccasionnelMsa): Libelles {
        $this->exoOccasionnelMsa = $exoOccasionnelMsa;
        return $this;
    }

    /**
     * Set the exo taux patronal.
     *
     * @param bool|null $exoTauxPatronal The exo taux patronal.
     * @return Libelles Returns this Libelles.
     */
    public function setExoTauxPatronal(?bool $exoTauxPatronal): Libelles {
        $this->exoTauxPatronal = $exoTauxPatronal;
        return $this;
    }

    /**
     * Set the expatriation.
     *
     * @param bool|null $expatriation The expatriation.
     * @return Libelles Returns this Libelles.
     */
    public function setExpatriation(?bool $expatriation): Libelles {
        $this->expatriation = $expatriation;
        return $this;
    }

    /**
     * Set the fillon adom.
     *
     * @param bool|null $fillonAdom The fillon adom.
     * @return Libelles Returns this Libelles.
     */
    public function setFillonAdom(?bool $fillonAdom): Libelles {
        $this->fillonAdom = $fillonAdom;
        return $this;
    }

    /**
     * Set the fillon sap.
     *
     * @param bool|null $fillonSap The fillon sap.
     * @return Libelles Returns this Libelles.
     */
    public function setFillonSap(?bool $fillonSap): Libelles {
        $this->fillonSap = $fillonSap;
        return $this;
    }

    /**
     * Set the fin per application.
     *
     * @param DateTime|null $finPerApplication The fin per application.
     * @return Libelles Returns this Libelles.
     */
    public function setFinPerApplication(?DateTime $finPerApplication): Libelles {
        $this->finPerApplication = $finPerApplication;
        return $this;
    }

    /**
     * Set the frais professionnel.
     *
     * @param bool|null $fraisProfessionnel The frais professionnel.
     * @return Libelles Returns this Libelles.
     */
    public function setFraisProfessionnel(?bool $fraisProfessionnel): Libelles {
        $this->fraisProfessionnel = $fraisProfessionnel;
        return $this;
    }

    /**
     * Set the frais sante.
     *
     * @param bool|null $fraisSante The frais sante.
     * @return Libelles Returns this Libelles.
     */
    public function setFraisSante(?bool $fraisSante): Libelles {
        $this->fraisSante = $fraisSante;
        return $this;
    }

    /**
     * Set the freq1.
     *
     * @param bool|null $freq1 The freq1.
     * @return Libelles Returns this Libelles.
     */
    public function setFreq1(?bool $freq1): Libelles {
        $this->freq1 = $freq1;
        return $this;
    }

    /**
     * Set the freq10.
     *
     * @param bool|null $freq10 The freq10.
     * @return Libelles Returns this Libelles.
     */
    public function setFreq10(?bool $freq10): Libelles {
        $this->freq10 = $freq10;
        return $this;
    }

    /**
     * Set the freq11.
     *
     * @param bool|null $freq11 The freq11.
     * @return Libelles Returns this Libelles.
     */
    public function setFreq11(?bool $freq11): Libelles {
        $this->freq11 = $freq11;
        return $this;
    }

    /**
     * Set the freq12.
     *
     * @param bool|null $freq12 The freq12.
     * @return Libelles Returns this Libelles.
     */
    public function setFreq12(?bool $freq12): Libelles {
        $this->freq12 = $freq12;
        return $this;
    }

    /**
     * Set the freq2.
     *
     * @param bool|null $freq2 The freq2.
     * @return Libelles Returns this Libelles.
     */
    public function setFreq2(?bool $freq2): Libelles {
        $this->freq2 = $freq2;
        return $this;
    }

    /**
     * Set the freq3.
     *
     * @param bool|null $freq3 The freq3.
     * @return Libelles Returns this Libelles.
     */
    public function setFreq3(?bool $freq3): Libelles {
        $this->freq3 = $freq3;
        return $this;
    }

    /**
     * Set the freq4.
     *
     * @param bool|null $freq4 The freq4.
     * @return Libelles Returns this Libelles.
     */
    public function setFreq4(?bool $freq4): Libelles {
        $this->freq4 = $freq4;
        return $this;
    }

    /**
     * Set the freq5.
     *
     * @param bool|null $freq5 The freq5.
     * @return Libelles Returns this Libelles.
     */
    public function setFreq5(?bool $freq5): Libelles {
        $this->freq5 = $freq5;
        return $this;
    }

    /**
     * Set the freq6.
     *
     * @param bool|null $freq6 The freq6.
     * @return Libelles Returns this Libelles.
     */
    public function setFreq6(?bool $freq6): Libelles {
        $this->freq6 = $freq6;
        return $this;
    }

    /**
     * Set the freq7.
     *
     * @param bool|null $freq7 The freq7.
     * @return Libelles Returns this Libelles.
     */
    public function setFreq7(?bool $freq7): Libelles {
        $this->freq7 = $freq7;
        return $this;
    }

    /**
     * Set the freq8.
     *
     * @param bool|null $freq8 The freq8.
     * @return Libelles Returns this Libelles.
     */
    public function setFreq8(?bool $freq8): Libelles {
        $this->freq8 = $freq8;
        return $this;
    }

    /**
     * Set the freq9.
     *
     * @param bool|null $freq9 The freq9.
     * @return Libelles Returns this Libelles.
     */
    public function setFreq9(?bool $freq9): Libelles {
        $this->freq9 = $freq9;
        return $this;
    }

    /**
     * Set the h sup loi tepa.
     *
     * @param bool|null $hSupLoiTepa The h sup loi tepa.
     * @return Libelles Returns this Libelles.
     */
    public function setHSupLoiTepa(?bool $hSupLoiTepa): Libelles {
        $this->hSupLoiTepa = $hSupLoiTepa;
        return $this;
    }

    /**
     * Set the h sup structurelle.
     *
     * @param bool|null $hSupStructurelle The h sup structurelle.
     * @return Libelles Returns this Libelles.
     */
    public function setHSupStructurelle(?bool $hSupStructurelle): Libelles {
        $this->hSupStructurelle = $hSupStructurelle;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string|null $idInstitution The id institution.
     * @return Libelles Returns this Libelles.
     */
    public function setIdInstitution(?string $idInstitution): Libelles {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the ijss.
     *
     * @param bool|null $ijss The ijss.
     * @return Libelles Returns this Libelles.
     */
    public function setIjss(?bool $ijss): Libelles {
        $this->ijss = $ijss;
        return $this;
    }

    /**
     * Set the imput epargne ret.
     *
     * @param bool|null $imputEpargneRet The imput epargne ret.
     * @return Libelles Returns this Libelles.
     */
    public function setImputEpargneRet(?bool $imputEpargneRet): Libelles {
        $this->imputEpargneRet = $imputEpargneRet;
        return $this;
    }

    /**
     * Set the indemnite non imposable.
     *
     * @param bool|null $indemniteNonImposable The indemnite non imposable.
     * @return Libelles Returns this Libelles.
     */
    public function setIndemniteNonImposable(?bool $indemniteNonImposable): Libelles {
        $this->indemniteNonImposable = $indemniteNonImposable;
        return $this;
    }

    /**
     * Set the intervient brut al.
     *
     * @param bool|null $intervientBrutAl The intervient brut al.
     * @return Libelles Returns this Libelles.
     */
    public function setIntervientBrutAl(?bool $intervientBrutAl): Libelles {
        $this->intervientBrutAl = $intervientBrutAl;
        return $this;
    }

    /**
     * Set the intervient indem preca.
     *
     * @param bool|null $intervientIndemPreca The intervient indem preca.
     * @return Libelles Returns this Libelles.
     */
    public function setIntervientIndemPreca(?bool $intervientIndemPreca): Libelles {
        $this->intervientIndemPreca = $intervientIndemPreca;
        return $this;
    }

    /**
     * Set the intervient taux h ab cp.
     *
     * @param string|null $intervientTauxHAbCp The intervient taux h ab cp.
     * @return Libelles Returns this Libelles.
     */
    public function setIntervientTauxHAbCp(?string $intervientTauxHAbCp): Libelles {
        $this->intervientTauxHAbCp = $intervientTauxHAbCp;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Libelles Returns this Libelles.
     */
    public function setIntitule(?string $intitule): Libelles {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule ducs.
     *
     * @param string|null $intituleDucs The intitule ducs.
     * @return Libelles Returns this Libelles.
     */
    public function setIntituleDucs(?string $intituleDucs): Libelles {
        $this->intituleDucs = $intituleDucs;
        return $this;
    }

    /**
     * Set the maintien salaire.
     *
     * @param bool|null $maintienSalaire The maintien salaire.
     * @return Libelles Returns this Libelles.
     */
    public function setMaintienSalaire(?bool $maintienSalaire): Libelles {
        $this->maintienSalaire = $maintienSalaire;
        return $this;
    }

    /**
     * Set the mois deb fixe.
     *
     * @param string|null $moisDebFixe The mois deb fixe.
     * @return Libelles Returns this Libelles.
     */
    public function setMoisDebFixe(?string $moisDebFixe): Libelles {
        $this->moisDebFixe = $moisDebFixe;
        return $this;
    }

    /**
     * Set the mois echu.
     *
     * @param bool|null $moisEchu The mois echu.
     * @return Libelles Returns this Libelles.
     */
    public function setMoisEchu(?bool $moisEchu): Libelles {
        $this->moisEchu = $moisEchu;
        return $this;
    }

    /**
     * Set the mois fin fixe.
     *
     * @param string|null $moisFinFixe The mois fin fixe.
     * @return Libelles Returns this Libelles.
     */
    public function setMoisFinFixe(?string $moisFinFixe): Libelles {
        $this->moisFinFixe = $moisFinFixe;
        return $this;
    }

    /**
     * Set the montant global.
     *
     * @param float|null $montantGlobal The montant global.
     * @return Libelles Returns this Libelles.
     */
    public function setMontantGlobal(?float $montantGlobal): Libelles {
        $this->montantGlobal = $montantGlobal;
        return $this;
    }

    /**
     * Set the montant salarial.
     *
     * @param float|null $montantSalarial The montant salarial.
     * @return Libelles Returns this Libelles.
     */
    public function setMontantSalarial(?float $montantSalarial): Libelles {
        $this->montantSalarial = $montantSalarial;
        return $this;
    }

    /**
     * Set the nb h contract.
     *
     * @param float|null $nbHContract The nb h contract.
     * @return Libelles Returns this Libelles.
     */
    public function setNbHContract(?float $nbHContract): Libelles {
        $this->nbHContract = $nbHContract;
        return $this;
    }

    /**
     * Set the nb mois applic.
     *
     * @param int|null $nbMoisApplic The nb mois applic.
     * @return Libelles Returns this Libelles.
     */
    public function setNbMoisApplic(?int $nbMoisApplic): Libelles {
        $this->nbMoisApplic = $nbMoisApplic;
        return $this;
    }

    /**
     * Set the neutre.
     *
     * @param bool|null $neutre The neutre.
     * @return Libelles Returns this Libelles.
     */
    public function setNeutre(?bool $neutre): Libelles {
        $this->neutre = $neutre;
        return $this;
    }

    /**
     * Set the num col acbs.
     *
     * @param string|null $numColAcbs The num col acbs.
     * @return Libelles Returns this Libelles.
     */
    public function setNumColAcbs(?string $numColAcbs): Libelles {
        $this->numColAcbs = $numColAcbs;
        return $this;
    }

    /**
     * Set the num col allege35h.
     *
     * @param string|null $numColAllege35h The num col allege35h.
     * @return Libelles Returns this Libelles.
     */
    public function setNumColAllege35h(?string $numColAllege35h): Libelles {
        $this->numColAllege35h = $numColAllege35h;
        return $this;
    }

    /**
     * Set the num col charges cafe.
     *
     * @param string|null $numColChargesCafe The num col charges cafe.
     * @return Libelles Returns this Libelles.
     */
    public function setNumColChargesCafe(?string $numColChargesCafe): Libelles {
        $this->numColChargesCafe = $numColChargesCafe;
        return $this;
    }

    /**
     * Set the num cumul bulletin.
     *
     * @param int|null $numCumulBulletin The num cumul bulletin.
     * @return Libelles Returns this Libelles.
     */
    public function setNumCumulBulletin(?int $numCumulBulletin): Libelles {
        $this->numCumulBulletin = $numCumulBulletin;
        return $this;
    }

    /**
     * Set the num cumul patron.
     *
     * @param int|null $numCumulPatron The num cumul patron.
     * @return Libelles Returns this Libelles.
     */
    public function setNumCumulPatron(?int $numCumulPatron): Libelles {
        $this->numCumulPatron = $numCumulPatron;
        return $this;
    }

    /**
     * Set the num taux const nat.
     *
     * @param int|null $numTauxConstNat The num taux const nat.
     * @return Libelles Returns this Libelles.
     */
    public function setNumTauxConstNat(?int $numTauxConstNat): Libelles {
        $this->numTauxConstNat = $numTauxConstNat;
        return $this;
    }

    /**
     * Set the part patron prevoyance.
     *
     * @param bool|null $partPatronPrevoyance The part patron prevoyance.
     * @return Libelles Returns this Libelles.
     */
    public function setPartPatronPrevoyance(?bool $partPatronPrevoyance): Libelles {
        $this->partPatronPrevoyance = $partPatronPrevoyance;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string|null $periodicite The periodicite.
     * @return Libelles Returns this Libelles.
     */
    public function setPeriodicite(?string $periodicite): Libelles {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the pourboire.
     *
     * @param bool|null $pourboire The pourboire.
     * @return Libelles Returns this Libelles.
     */
    public function setPourboire(?bool $pourboire): Libelles {
        $this->pourboire = $pourboire;
        return $this;
    }

    /**
     * Set the prevoyance.
     *
     * @param bool|null $prevoyance The prevoyance.
     * @return Libelles Returns this Libelles.
     */
    public function setPrevoyance(?bool $prevoyance): Libelles {
        $this->prevoyance = $prevoyance;
        return $this;
    }

    /**
     * Set the prevoyance comp.
     *
     * @param bool|null $prevoyanceComp The prevoyance comp.
     * @return Libelles Returns this Libelles.
     */
    public function setPrevoyanceComp(?bool $prevoyanceComp): Libelles {
        $this->prevoyanceComp = $prevoyanceComp;
        return $this;
    }

    /**
     * Set the prime non proratisee.
     *
     * @param bool|null $primeNonProratisee The prime non proratisee.
     * @return Libelles Returns this Libelles.
     */
    public function setPrimeNonProratisee(?bool $primeNonProratisee): Libelles {
        $this->primeNonProratisee = $primeNonProratisee;
        return $this;
    }

    /**
     * Set the prime servitude travail.
     *
     * @param bool|null $primeServitudeTravail The prime servitude travail.
     * @return Libelles Returns this Libelles.
     */
    public function setPrimeServitudeTravail(?bool $primeServitudeTravail): Libelles {
        $this->primeServitudeTravail = $primeServitudeTravail;
        return $this;
    }

    /**
     * Set the qualifiant cotis.
     *
     * @param string|null $qualifiantCotis The qualifiant cotis.
     * @return Libelles Returns this Libelles.
     */
    public function setQualifiantCotis(?string $qualifiantCotis): Libelles {
        $this->qualifiantCotis = $qualifiantCotis;
        return $this;
    }

    /**
     * Set the regle calcul.
     *
     * @param string|null $regleCalcul The regle calcul.
     * @return Libelles Returns this Libelles.
     */
    public function setRegleCalcul(?string $regleCalcul): Libelles {
        $this->regleCalcul = $regleCalcul;
        return $this;
    }

    /**
     * Set the regle taux.
     *
     * @param string|null $regleTaux The regle taux.
     * @return Libelles Returns this Libelles.
     */
    public function setRegleTaux(?string $regleTaux): Libelles {
        $this->regleTaux = $regleTaux;
        return $this;
    }

    /**
     * Set the remise a zero.
     *
     * @param bool|null $remiseAZero The remise a zero.
     * @return Libelles Returns this Libelles.
     */
    public function setRemiseAZero(?bool $remiseAZero): Libelles {
        $this->remiseAZero = $remiseAZero;
        return $this;
    }

    /**
     * Set the result mt.
     *
     * @param bool|null $resultMt The result mt.
     * @return Libelles Returns this Libelles.
     */
    public function setResultMt(?bool $resultMt): Libelles {
        $this->resultMt = $resultMt;
        return $this;
    }

    /**
     * Set the resultat ducs.
     *
     * @param bool|null $resultatDucs The resultat ducs.
     * @return Libelles Returns this Libelles.
     */
    public function setResultatDucs(?bool $resultatDucs): Libelles {
        $this->resultatDucs = $resultatDucs;
        return $this;
    }

    /**
     * Set the retenue salaire.
     *
     * @param bool|null $retenueSalaire The retenue salaire.
     * @return Libelles Returns this Libelles.
     */
    public function setRetenueSalaire(?bool $retenueSalaire): Libelles {
        $this->retenueSalaire = $retenueSalaire;
        return $this;
    }

    /**
     * Set the retenue source.
     *
     * @param bool|null $retenueSource The retenue source.
     * @return Libelles Returns this Libelles.
     */
    public function setRetenueSource(?bool $retenueSource): Libelles {
        $this->retenueSource = $retenueSource;
        return $this;
    }

    /**
     * Set the retraite obligatoire.
     *
     * @param bool|null $retraiteObligatoire The retraite obligatoire.
     * @return Libelles Returns this Libelles.
     */
    public function setRetraiteObligatoire(?bool $retraiteObligatoire): Libelles {
        $this->retraiteObligatoire = $retraiteObligatoire;
        return $this;
    }

    /**
     * Set the retraite supp.
     *
     * @param bool|null $retraiteSupp The retraite supp.
     * @return Libelles Returns this Libelles.
     */
    public function setRetraiteSupp(?bool $retraiteSupp): Libelles {
        $this->retraiteSupp = $retraiteSupp;
        return $this;
    }

    /**
     * Set the salaire cp.
     *
     * @param bool|null $salaireCp The salaire cp.
     * @return Libelles Returns this Libelles.
     */
    public function setSalaireCp(?bool $salaireCp): Libelles {
        $this->salaireCp = $salaireCp;
        return $this;
    }

    /**
     * Set the sans reintegration sociale.
     *
     * @param bool|null $sansReintegrationSociale The sans reintegration sociale.
     * @return Libelles Returns this Libelles.
     */
    public function setSansReintegrationSociale(?bool $sansReintegrationSociale): Libelles {
        $this->sansReintegrationSociale = $sansReintegrationSociale;
        return $this;
    }

    /**
     * Set the soumis abattement.
     *
     * @param bool|null $soumisAbattement The soumis abattement.
     * @return Libelles Returns this Libelles.
     */
    public function setSoumisAbattement(?bool $soumisAbattement): Libelles {
        $this->soumisAbattement = $soumisAbattement;
        return $this;
    }

    /**
     * Set the soumis crds100.
     *
     * @param bool|null $soumisCrds100 The soumis crds100.
     * @return Libelles Returns this Libelles.
     */
    public function setSoumisCrds100(?bool $soumisCrds100): Libelles {
        $this->soumisCrds100 = $soumisCrds100;
        return $this;
    }

    /**
     * Set the soumis csg.
     *
     * @param bool|null $soumisCsg The soumis csg.
     * @return Libelles Returns this Libelles.
     */
    public function setSoumisCsg(?bool $soumisCsg): Libelles {
        $this->soumisCsg = $soumisCsg;
        return $this;
    }

    /**
     * Set the soumis csg100.
     *
     * @param bool|null $soumisCsg100 The soumis csg100.
     * @return Libelles Returns this Libelles.
     */
    public function setSoumisCsg100(?bool $soumisCsg100): Libelles {
        $this->soumisCsg100 = $soumisCsg100;
        return $this;
    }

    /**
     * Set the soumis forfait social.
     *
     * @param bool|null $soumisForfaitSocial The soumis forfait social.
     * @return Libelles Returns this Libelles.
     */
    public function setSoumisForfaitSocial(?bool $soumisForfaitSocial): Libelles {
        $this->soumisForfaitSocial = $soumisForfaitSocial;
        return $this;
    }

    /**
     * Set the soumis rds.
     *
     * @param bool|null $soumisRds The soumis rds.
     * @return Libelles Returns this Libelles.
     */
    public function setSoumisRds(?bool $soumisRds): Libelles {
        $this->soumisRds = $soumisRds;
        return $this;
    }

    /**
     * Set the taux du libelle.
     *
     * @param bool|null $tauxDuLibelle The taux du libelle.
     * @return Libelles Returns this Libelles.
     */
    public function setTauxDuLibelle(?bool $tauxDuLibelle): Libelles {
        $this->tauxDuLibelle = $tauxDuLibelle;
        return $this;
    }

    /**
     * Set the taux forfait social.
     *
     * @param string|null $tauxForfaitSocial The taux forfait social.
     * @return Libelles Returns this Libelles.
     */
    public function setTauxForfaitSocial(?string $tauxForfaitSocial): Libelles {
        $this->tauxForfaitSocial = $tauxForfaitSocial;
        return $this;
    }

    /**
     * Set the taux patronal dadsu.
     *
     * @param float|null $tauxPatronalDadsu The taux patronal dadsu.
     * @return Libelles Returns this Libelles.
     */
    public function setTauxPatronalDadsu(?float $tauxPatronalDadsu): Libelles {
        $this->tauxPatronalDadsu = $tauxPatronalDadsu;
        return $this;
    }

    /**
     * Set the taux salarial dadsu.
     *
     * @param float|null $tauxSalarialDadsu The taux salarial dadsu.
     * @return Libelles Returns this Libelles.
     */
    public function setTauxSalarialDadsu(?float $tauxSalarialDadsu): Libelles {
        $this->tauxSalarialDadsu = $tauxSalarialDadsu;
        return $this;
    }

    /**
     * Set the type absence h sup.
     *
     * @param string|null $typeAbsenceHSup The type absence h sup.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeAbsenceHSup(?string $typeAbsenceHSup): Libelles {
        $this->typeAbsenceHSup = $typeAbsenceHSup;
        return $this;
    }

    /**
     * Set the type avantage.
     *
     * @param string|null $typeAvantage The type avantage.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeAvantage(?string $typeAvantage): Libelles {
        $this->typeAvantage = $typeAvantage;
        return $this;
    }

    /**
     * Set the type base cotisation.
     *
     * @param string|null $typeBaseCotisation The type base cotisation.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeBaseCotisation(?string $typeBaseCotisation): Libelles {
        $this->typeBaseCotisation = $typeBaseCotisation;
        return $this;
    }

    /**
     * Set the type cotis.
     *
     * @param string|null $typeCotis The type cotis.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeCotis(?string $typeCotis): Libelles {
        $this->typeCotis = $typeCotis;
        return $this;
    }

    /**
     * Set the type date anc.
     *
     * @param int|null $typeDateAnc The type date anc.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeDateAnc(?int $typeDateAnc): Libelles {
        $this->typeDateAnc = $typeDateAnc;
        return $this;
    }

    /**
     * Set the type donnee dadsu.
     *
     * @param string|null $typeDonneeDadsu The type donnee dadsu.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeDonneeDadsu(?string $typeDonneeDadsu): Libelles {
        $this->typeDonneeDadsu = $typeDonneeDadsu;
        return $this;
    }

    /**
     * Set the type frais.
     *
     * @param string|null $typeFrais The type frais.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeFrais(?string $typeFrais): Libelles {
        $this->typeFrais = $typeFrais;
        return $this;
    }

    /**
     * Set the type h sup loi tepa.
     *
     * @param string|null $typeHSupLoiTepa The type h sup loi tepa.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeHSupLoiTepa(?string $typeHSupLoiTepa): Libelles {
        $this->typeHSupLoiTepa = $typeHSupLoiTepa;
        return $this;
    }

    /**
     * Set the type he fillon.
     *
     * @param string|null $typeHeFillon The type he fillon.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeHeFillon(?string $typeHeFillon): Libelles {
        $this->typeHeFillon = $typeHeFillon;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param string|null $typeHeure The type heure.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeHeure(?string $typeHeure): Libelles {
        $this->typeHeure = $typeHeure;
        return $this;
    }

    /**
     * Set the type heure sup.
     *
     * @param string|null $typeHeureSup The type heure sup.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeHeureSup(?string $typeHeureSup): Libelles {
        $this->typeHeureSup = $typeHeureSup;
        return $this;
    }

    /**
     * Set the type orga.
     *
     * @param string|null $typeOrga The type orga.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeOrga(?string $typeOrga): Libelles {
        $this->typeOrga = $typeOrga;
        return $this;
    }

    /**
     * Set the type proratisation prime.
     *
     * @param string|null $typeProratisationPrime The type proratisation prime.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeProratisationPrime(?string $typeProratisationPrime): Libelles {
        $this->typeProratisationPrime = $typeProratisationPrime;
        return $this;
    }

    /**
     * Set the type tranche.
     *
     * @param string|null $typeTranche The type tranche.
     * @return Libelles Returns this Libelles.
     */
    public function setTypeTranche(?string $typeTranche): Libelles {
        $this->typeTranche = $typeTranche;
        return $this;
    }
}
