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
 * Dossier4.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Dossier4 {

    /**
     * Acompte1.
     *
     * @var float|null
     */
    private $acompte1;

    /**
     * Acompte2.
     *
     * @var float|null
     */
    private $acompte2;

    /**
     * Acompte3.
     *
     * @var float|null
     */
    private $acompte3;

    /**
     * Acompte4.
     *
     * @var float|null
     */
    private $acompte4;

    /**
     * Arch imp3519 tva.
     *
     * @var bool|null
     */
    private $archImp3519Tva;

    /**
     * Archive decl tva.
     *
     * @var int|null
     */
    private $archiveDeclTva;

    /**
     * b ca12 t.
     *
     * @var bool|null
     */
    private $bCa12T;

    /**
     * Bal agee nb jours int1.
     *
     * @var int|null
     */
    private $balAgeeNbJoursInt1;

    /**
     * Bal agee nb jours int2.
     *
     * @var int|null
     */
    private $balAgeeNbJoursInt2;

    /**
     * Bal agee nb jours int3.
     *
     * @var int|null
     */
    private $balAgeeNbJoursInt3;

    /**
     * Bal agee nb jours int4.
     *
     * @var int|null
     */
    private $balAgeeNbJoursInt4;

    /**
     * Base15pcent.
     *
     * @var float|null
     */
    private $base15pcent;

    /**
     * Base33pcent.
     *
     * @var float|null
     */
    private $base33pcent;

    /**
     * Base t npcent.
     *
     * @var float|null
     */
    private $baseTNpcent;

    /**
     * Categorie pme.
     *
     * @var int|null
     */
    private $categoriePme;

    /**
     * Cdi btq.
     *
     * @var string|null
     */
    private $cdiBtq;

    /**
     * Cdi bureau distributeur.
     *
     * @var string|null
     */
    private $cdiBureauDistributeur;

    /**
     * Cdi code officiel commune.
     *
     * @var string|null
     */
    private $cdiCodeOfficielCommune;

    /**
     * Cdi code postal.
     *
     * @var string|null
     */
    private $cdiCodePostal;

    /**
     * Cdi complement.
     *
     * @var string|null
     */
    private $cdiComplement;

    /**
     * Cdi nom.
     *
     * @var string|null
     */
    private $cdiNom;

    /**
     * Cdi nom ville.
     *
     * @var string|null
     */
    private $cdiNomVille;

    /**
     * Cdi nom voie.
     *
     * @var string|null
     */
    private $cdiNomVoie;

    /**
     * Cdi num voie.
     *
     * @var string|null
     */
    private $cdiNumVoie;

    /**
     * Cdi tel1.
     *
     * @var string|null
     */
    private $cdiTel1;

    /**
     * Date plafond interets.
     *
     * @var DateTime|null
     */
    private $datePlafondInterets;

    /**
     * Date plafond interets2.
     *
     * @var DateTime|null
     */
    private $datePlafondInterets2;

    /**
     * Date transf lot cvae.
     *
     * @var DateTime|null
     */
    private $dateTransfLotCvae;

    /**
     * Date transf lot is.
     *
     * @var DateTime|null
     */
    private $dateTransfLotIs;

    /**
     * Date transfert interets.
     *
     * @var DateTime|null
     */
    private $dateTransfertInterets;

    /**
     * Date transfert interets2.
     *
     * @var DateTime|null
     */
    private $dateTransfertInterets2;

    /**
     * Dec tva type reglement.
     *
     * @var int|null
     */
    private $decTvaTypeReglement;

    /**
     * Decalage quinzaine.
     *
     * @var bool|null
     */
    private $decalageQuinzaine;

    /**
     * Decl reference paiement.
     *
     * @var string|null
     */
    private $declReferencePaiement;

    /**
     * Decl tva cdi.
     *
     * @var string|null
     */
    private $declTvaCdi;

    /**
     * Decl tva insp.
     *
     * @var string|null
     */
    private $declTvaInsp;

    /**
     * Decl tva regime.
     *
     * @var string|null
     */
    private $declTvaRegime;

    /**
     * Ftis contrib mtt.
     *
     * @var float|null
     */
    private $ftisContribMtt;

    /**
     * Ftis credit impot.
     *
     * @var float|null
     */
    private $ftisCreditImpot;

    /**
     * Ftis deficits reportables.
     *
     * @var float|null
     */
    private $ftisDeficitsReportables;

    /**
     * Ftis num cpt1.
     *
     * @var string|null
     */
    private $ftisNumCpt1;

    /**
     * Ftis num cpt2.
     *
     * @var string|null
     */
    private $ftisNumCpt2;

    /**
     * Ftiscice.
     *
     * @var float|null
     */
    private $ftiscice;

    /**
     * Immo realloc.
     *
     * @var int|null
     */
    private $immoRealloc;

    /**
     * Interet base.
     *
     * @var float|null
     */
    private $interetBase;

    /**
     * Interets cap.
     *
     * @var string|null
     */
    private $interetsCap;

    /**
     * Interets cap2.
     *
     * @var string|null
     */
    private $interetsCap2;

    /**
     * Interets contrepartie.
     *
     * @var string|null
     */
    private $interetsContrepartie;

    /**
     * Interets contrepartie2.
     *
     * @var string|null
     */
    private $interetsContrepartie2;

    /**
     * Interets contrepartie deduc.
     *
     * @var string|null
     */
    private $interetsContrepartieDeduc;

    /**
     * Interets contrepartie deduc2.
     *
     * @var string|null
     */
    private $interetsContrepartieDeduc2;

    /**
     * Interets pca.
     *
     * @var string|null
     */
    private $interetsPca;

    /**
     * Interets pca2.
     *
     * @var string|null
     */
    private $interetsPca2;

    /**
     * No lot cpt recip.
     *
     * @var int|null
     */
    private $noLotCptRecip;

    /**
     * No lot credit is.
     *
     * @var int|null
     */
    private $noLotCreditIs;

    /**
     * No lot cvae.
     *
     * @var int|null
     */
    private $noLotCvae;

    /**
     * No lot interets.
     *
     * @var int|null
     */
    private $noLotInterets;

    /**
     * No lot interets2.
     *
     * @var int|null
     */
    private $noLotInterets2;

    /**
     * No lot is.
     *
     * @var int|null
     */
    private $noLotIs;

    /**
     * No lot paiement is.
     *
     * @var int|null
     */
    private $noLotPaiementIs;

    /**
     * Periode transfert stock.
     *
     * @var DateTime|null
     */
    private $periodeTransfertStock;

    /**
     * Precedent num lot stock.
     *
     * @var int|null
     */
    private $precedentNumLotStock;

    /**
     * Regime agricole.
     *
     * @var bool|null
     */
    private $regimeAgricole;

    /**
     * Resultat net cpt.
     *
     * @var float|null
     */
    private $resultatNetCpt;

    /**
     * Rof tva.
     *
     * @var string|null
     */
    private $rofTva;

    /**
     * Taux plafond interets.
     *
     * @var float|null
     */
    private $tauxPlafondInterets;

    /**
     * Taux plafond interets2.
     *
     * @var float|null
     */
    private $tauxPlafondInterets2;

    /**
     * Tva achats enc.
     *
     * @var bool|null
     */
    private $tvaAchatsEnc;

    /**
     * Tva ca12 ae.
     *
     * @var string|null
     */
    private $tvaCa12Ae;

    /**
     * Tva cadtm.
     *
     * @var DateTime|null
     */
    private $tvaCadtm;

    /**
     * Tva cascade.
     *
     * @var bool|null
     */
    private $tvaCascade;

    /**
     * Tva cloture faite.
     *
     * @var bool|null
     */
    private $tvaClotureFaite;

    /**
     * Tva code cabinet.
     *
     * @var string|null
     */
    private $tvaCodeCabinet;

    /**
     * Tva code int emetteur.
     *
     * @var string|null
     */
    private $tvaCodeIntEmetteur;

    /**
     * Tva code int recepteur.
     *
     * @var string|null
     */
    private $tvaCodeIntRecepteur;

    /**
     * Tva code journal bq.
     *
     * @var string|null
     */
    private $tvaCodeJournalBq;

    /**
     * Tva code journal od.
     *
     * @var string|null
     */
    private $tvaCodeJournalOd;

    /**
     * Tva cpt a ajouter.
     *
     * @var string|null
     */
    private $tvaCptAAjouter;

    /**
     * Tva cpt a ajouter g.
     *
     * @var string|null
     */
    private $tvaCptAAjouterG;

    /**
     * Tva cpt a deduire.
     *
     * @var string|null
     */
    private $tvaCptADeduire;

    /**
     * Tva cpt a imputer.
     *
     * @var string|null
     */
    private $tvaCptAImputer;

    /**
     * Tva cpt a imputer g.
     *
     * @var string|null
     */
    private $tvaCptAImputerG;

    /**
     * Tva cpt a payer.
     *
     * @var string|null
     */
    private $tvaCptAPayer;

    /**
     * Tva cpt a payer g.
     *
     * @var string|null
     */
    private $tvaCptAPayerG;

    /**
     * Tva cpt acq intra com.
     *
     * @var string|null
     */
    private $tvaCptAcqIntraCom;

    /**
     * Tva cpt anc taux.
     *
     * @var string|null
     */
    private $tvaCptAncTaux;

    /**
     * Tva cpt ante deduit.
     *
     * @var string|null
     */
    private $tvaCptAnteDeduit;

    /**
     * Tva cpt assimil3310.
     *
     * @var string|null
     */
    private $tvaCptAssimil3310;

    /**
     * Tva cpt assimil3310 g.
     *
     * @var string|null
     */
    private $tvaCptAssimil3310G;

    /**
     * Tva cpt biens.
     *
     * @var string|null
     */
    private $tvaCptBiens;

    /**
     * Tva cpt biens intra com.
     *
     * @var string|null
     */
    private $tvaCptBiensIntraCom;

    /**
     * Tva cpt difference.
     *
     * @var string|null
     */
    private $tvaCptDifference;

    /**
     * Tva cpt dom.
     *
     * @var string|null
     */
    private $tvaCptDom;

    /**
     * Tva cpt groupe.
     *
     * @var string|null
     */
    private $tvaCptGroupe;

    /**
     * Tva cpt immos.
     *
     * @var string|null
     */
    private $tvaCptImmos;

    /**
     * Tva cpt immos intra com.
     *
     * @var string|null
     */
    private $tvaCptImmosIntraCom;

    /**
     * Tva cpt regul.
     *
     * @var string|null
     */
    private $tvaCptRegul;

    /**
     * Tva cpt rembours.
     *
     * @var string|null
     */
    private $tvaCptRembours;

    /**
     * Tva cpt rembours g.
     *
     * @var string|null
     */
    private $tvaCptRemboursG;

    /**
     * Tva cpt report.
     *
     * @var string|null
     */
    private $tvaCptReport;

    /**
     * Tva cpt report g.
     *
     * @var string|null
     */
    private $tvaCptReportG;

    /**
     * Tva cpt taux part.
     *
     * @var string|null
     */
    private $tvaCptTauxPart;

    /**
     * Tva cpt vente.
     *
     * @var string|null
     */
    private $tvaCptVente;

    /**
     * Tva deb3 jrn exclure.
     *
     * @var string|null
     */
    private $tvaDeb3JrnExclure;

    /**
     * Tva dest attn.
     *
     * @var string|null
     */
    private $tvaDestAttn;

    /**
     * Tva dest fax.
     *
     * @var string|null
     */
    private $tvaDestFax;

    /**
     * Tva dest nom.
     *
     * @var string|null
     */
    private $tvaDestNom;

    /**
     * Tva e4 dbs.
     *
     * @var string|null
     */
    private $tvaE4Dbs;

    /**
     * Tva e4 di.
     *
     * @var string|null
     */
    private $tvaE4Di;

    /**
     * Tva e4 r jrn od.
     *
     * @var string|null
     */
    private $tvaE4RJrnOd;

    /**
     * Tva e4 rbs.
     *
     * @var string|null
     */
    private $tvaE4Rbs;

    /**
     * Tva e4 ri.
     *
     * @var string|null
     */
    private $tvaE4Ri;

    /**
     * Tva emetteur is cab.
     *
     * @var bool|null
     */
    private $tvaEmetteurIsCab;

    /**
     * Tva enc3 der per rech da.
     *
     * @var DateTime|null
     */
    private $tvaEnc3DerPerRechDa;

    /**
     * Tva envoyer mail.
     *
     * @var bool|null
     */
    private $tvaEnvoyerMail;

    /**
     * Tva etab btq.
     *
     * @var string|null
     */
    private $tvaEtabBtq;

    /**
     * Tva etab bureau distributeur.
     *
     * @var string|null
     */
    private $tvaEtabBureauDistributeur;

    /**
     * Tva etab code postal.
     *
     * @var string|null
     */
    private $tvaEtabCodePostal;

    /**
     * Tva etab complement.
     *
     * @var string|null
     */
    private $tvaEtabComplement;

    /**
     * Tva etab nom.
     *
     * @var string|null
     */
    private $tvaEtabNom;

    /**
     * Tva etab nom voie.
     *
     * @var string|null
     */
    private $tvaEtabNomVoie;

    /**
     * Tva etab num voie.
     *
     * @var string|null
     */
    private $tvaEtabNumVoie;

    /**
     * Tva exp nom.
     *
     * @var string|null
     */
    private $tvaExpNom;

    /**
     * Tva jour decla.
     *
     * @var string|null
     */
    private $tvaJourDecla;

    /**
     * Tva mail pj.
     *
     * @var bool|null
     */
    private $tvaMailPj;

    /**
     * Tva methode.
     *
     * @var string|null
     */
    private $tvaMethode;

    /**
     * Tva moyen paiement.
     *
     * @var int|null
     */
    private $tvaMoyenPaiement;

    /**
     * Tva nom vir.
     *
     * @var string|null
     */
    private $tvaNomVir;

    /**
     * Tva parametrage ok.
     *
     * @var bool|null
     */
    private $tvaParametrageOk;

    /**
     * Tva periodicite.
     *
     * @var string|null
     */
    private $tvaPeriodicite;

    /**
     * Tva prefixe intracom.
     *
     * @var string|null
     */
    private $tvaPrefixeIntracom;

    /**
     * Tva recepteur je declare.
     *
     * @var bool|null
     */
    private $tvaRecepteurJeDeclare;

    /**
     * Tva regime.
     *
     * @var string|null
     */
    private $tvaRegime;

    /**
     * Tva signataire.
     *
     * @var string|null
     */
    private $tvaSignataire;

    /**
     * Tva type.
     *
     * @var string|null
     */
    private $tvaType;

    /**
     * Tva vire crlf.
     *
     * @var bool|null
     */
    private $tvaVireCrlf;

    /**
     * Tvabic vir.
     *
     * @var string|null
     */
    private $tvabicVir;

    /**
     * Tvaedi edition.
     *
     * @var bool|null
     */
    private $tvaediEdition;

    /**
     * Tvaiban vir.
     *
     * @var string|null
     */
    private $tvaibanVir;

    /**
     * Tvarib vir.
     *
     * @var string|null
     */
    private $tvaribVir;

    /**
     * Tvatlra bic1.
     *
     * @var string|null
     */
    private $tvatlraBic1;

    /**
     * Tvatlra bic2.
     *
     * @var string|null
     */
    private $tvatlraBic2;

    /**
     * Tvatlra bic3.
     *
     * @var string|null
     */
    private $tvatlraBic3;

    /**
     * Tvatlra iban1.
     *
     * @var string|null
     */
    private $tvatlraIban1;

    /**
     * Tvatlra iban2.
     *
     * @var string|null
     */
    private $tvatlraIban2;

    /**
     * Tvatlra iban3.
     *
     * @var string|null
     */
    private $tvatlraIban3;

    /**
     * Tvatlra rib1.
     *
     * @var string|null
     */
    private $tvatlraRib1;

    /**
     * Tvatlra rib2.
     *
     * @var string|null
     */
    private $tvatlraRib2;

    /**
     * Tvatlra rib3.
     *
     * @var string|null
     */
    private $tvatlraRib3;

    /**
     * Vmp code jrn pmv.
     *
     * @var string|null
     */
    private $vmpCodeJrnPmv;

    /**
     * Vmp cpt moins value.
     *
     * @var string|null
     */
    private $vmpCptMoinsValue;

    /**
     * Vmp cpt plus value.
     *
     * @var string|null
     */
    private $vmpCptPlusValue;

    /**
     * Vmp gest ecr pmv.
     *
     * @var int|null
     */
    private $vmpGestEcrPmv;

    /**
     * Vmp gestion en saisie.
     *
     * @var bool|null
     */
    private $vmpGestionEnSaisie;

    /**
     * Ya reprise cice.
     *
     * @var bool|null
     */
    private $yaRepriseCice;

    /**
     * Ya taux reduit.
     *
     * @var bool|null
     */
    private $yaTauxReduit;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the acompte1.
     *
     * @return float|null Returns the acompte1.
     */
    public function getAcompte1(): ?float {
        return $this->acompte1;
    }

    /**
     * Get the acompte2.
     *
     * @return float|null Returns the acompte2.
     */
    public function getAcompte2(): ?float {
        return $this->acompte2;
    }

    /**
     * Get the acompte3.
     *
     * @return float|null Returns the acompte3.
     */
    public function getAcompte3(): ?float {
        return $this->acompte3;
    }

    /**
     * Get the acompte4.
     *
     * @return float|null Returns the acompte4.
     */
    public function getAcompte4(): ?float {
        return $this->acompte4;
    }

    /**
     * Get the arch imp3519 tva.
     *
     * @return bool|null Returns the arch imp3519 tva.
     */
    public function getArchImp3519Tva(): ?bool {
        return $this->archImp3519Tva;
    }

    /**
     * Get the archive decl tva.
     *
     * @return int|null Returns the archive decl tva.
     */
    public function getArchiveDeclTva(): ?int {
        return $this->archiveDeclTva;
    }

    /**
     * Get the bal agee nb jours int1.
     *
     * @return int|null Returns the bal agee nb jours int1.
     */
    public function getBalAgeeNbJoursInt1(): ?int {
        return $this->balAgeeNbJoursInt1;
    }

    /**
     * Get the bal agee nb jours int2.
     *
     * @return int|null Returns the bal agee nb jours int2.
     */
    public function getBalAgeeNbJoursInt2(): ?int {
        return $this->balAgeeNbJoursInt2;
    }

    /**
     * Get the bal agee nb jours int3.
     *
     * @return int|null Returns the bal agee nb jours int3.
     */
    public function getBalAgeeNbJoursInt3(): ?int {
        return $this->balAgeeNbJoursInt3;
    }

    /**
     * Get the bal agee nb jours int4.
     *
     * @return int|null Returns the bal agee nb jours int4.
     */
    public function getBalAgeeNbJoursInt4(): ?int {
        return $this->balAgeeNbJoursInt4;
    }

    /**
     * Get the base15pcent.
     *
     * @return float|null Returns the base15pcent.
     */
    public function getBase15pcent(): ?float {
        return $this->base15pcent;
    }

    /**
     * Get the base33pcent.
     *
     * @return float|null Returns the base33pcent.
     */
    public function getBase33pcent(): ?float {
        return $this->base33pcent;
    }

    /**
     * Get the base t npcent.
     *
     * @return float|null Returns the base t npcent.
     */
    public function getBaseTNpcent(): ?float {
        return $this->baseTNpcent;
    }

    /**
     * Get the categorie pme.
     *
     * @return int|null Returns the categorie pme.
     */
    public function getCategoriePme(): ?int {
        return $this->categoriePme;
    }

    /**
     * Get the cdi btq.
     *
     * @return string|null Returns the cdi btq.
     */
    public function getCdiBtq(): ?string {
        return $this->cdiBtq;
    }

    /**
     * Get the cdi bureau distributeur.
     *
     * @return string|null Returns the cdi bureau distributeur.
     */
    public function getCdiBureauDistributeur(): ?string {
        return $this->cdiBureauDistributeur;
    }

    /**
     * Get the cdi code officiel commune.
     *
     * @return string|null Returns the cdi code officiel commune.
     */
    public function getCdiCodeOfficielCommune(): ?string {
        return $this->cdiCodeOfficielCommune;
    }

    /**
     * Get the cdi code postal.
     *
     * @return string|null Returns the cdi code postal.
     */
    public function getCdiCodePostal(): ?string {
        return $this->cdiCodePostal;
    }

    /**
     * Get the cdi complement.
     *
     * @return string|null Returns the cdi complement.
     */
    public function getCdiComplement(): ?string {
        return $this->cdiComplement;
    }

    /**
     * Get the cdi nom.
     *
     * @return string|null Returns the cdi nom.
     */
    public function getCdiNom(): ?string {
        return $this->cdiNom;
    }

    /**
     * Get the cdi nom ville.
     *
     * @return string|null Returns the cdi nom ville.
     */
    public function getCdiNomVille(): ?string {
        return $this->cdiNomVille;
    }

    /**
     * Get the cdi nom voie.
     *
     * @return string|null Returns the cdi nom voie.
     */
    public function getCdiNomVoie(): ?string {
        return $this->cdiNomVoie;
    }

    /**
     * Get the cdi num voie.
     *
     * @return string|null Returns the cdi num voie.
     */
    public function getCdiNumVoie(): ?string {
        return $this->cdiNumVoie;
    }

    /**
     * Get the cdi tel1.
     *
     * @return string|null Returns the cdi tel1.
     */
    public function getCdiTel1(): ?string {
        return $this->cdiTel1;
    }

    /**
     * Get the date plafond interets.
     *
     * @return DateTime|null Returns the date plafond interets.
     */
    public function getDatePlafondInterets(): ?DateTime {
        return $this->datePlafondInterets;
    }

    /**
     * Get the date plafond interets2.
     *
     * @return DateTime|null Returns the date plafond interets2.
     */
    public function getDatePlafondInterets2(): ?DateTime {
        return $this->datePlafondInterets2;
    }

    /**
     * Get the date transf lot cvae.
     *
     * @return DateTime|null Returns the date transf lot cvae.
     */
    public function getDateTransfLotCvae(): ?DateTime {
        return $this->dateTransfLotCvae;
    }

    /**
     * Get the date transf lot is.
     *
     * @return DateTime|null Returns the date transf lot is.
     */
    public function getDateTransfLotIs(): ?DateTime {
        return $this->dateTransfLotIs;
    }

    /**
     * Get the date transfert interets.
     *
     * @return DateTime|null Returns the date transfert interets.
     */
    public function getDateTransfertInterets(): ?DateTime {
        return $this->dateTransfertInterets;
    }

    /**
     * Get the date transfert interets2.
     *
     * @return DateTime|null Returns the date transfert interets2.
     */
    public function getDateTransfertInterets2(): ?DateTime {
        return $this->dateTransfertInterets2;
    }

    /**
     * Get the dec tva type reglement.
     *
     * @return int|null Returns the dec tva type reglement.
     */
    public function getDecTvaTypeReglement(): ?int {
        return $this->decTvaTypeReglement;
    }

    /**
     * Get the decalage quinzaine.
     *
     * @return bool|null Returns the decalage quinzaine.
     */
    public function getDecalageQuinzaine(): ?bool {
        return $this->decalageQuinzaine;
    }

    /**
     * Get the decl reference paiement.
     *
     * @return string|null Returns the decl reference paiement.
     */
    public function getDeclReferencePaiement(): ?string {
        return $this->declReferencePaiement;
    }

    /**
     * Get the decl tva cdi.
     *
     * @return string|null Returns the decl tva cdi.
     */
    public function getDeclTvaCdi(): ?string {
        return $this->declTvaCdi;
    }

    /**
     * Get the decl tva insp.
     *
     * @return string|null Returns the decl tva insp.
     */
    public function getDeclTvaInsp(): ?string {
        return $this->declTvaInsp;
    }

    /**
     * Get the decl tva regime.
     *
     * @return string|null Returns the decl tva regime.
     */
    public function getDeclTvaRegime(): ?string {
        return $this->declTvaRegime;
    }

    /**
     * Get the ftis contrib mtt.
     *
     * @return float|null Returns the ftis contrib mtt.
     */
    public function getFtisContribMtt(): ?float {
        return $this->ftisContribMtt;
    }

    /**
     * Get the ftis credit impot.
     *
     * @return float|null Returns the ftis credit impot.
     */
    public function getFtisCreditImpot(): ?float {
        return $this->ftisCreditImpot;
    }

    /**
     * Get the ftis deficits reportables.
     *
     * @return float|null Returns the ftis deficits reportables.
     */
    public function getFtisDeficitsReportables(): ?float {
        return $this->ftisDeficitsReportables;
    }

    /**
     * Get the ftis num cpt1.
     *
     * @return string|null Returns the ftis num cpt1.
     */
    public function getFtisNumCpt1(): ?string {
        return $this->ftisNumCpt1;
    }

    /**
     * Get the ftis num cpt2.
     *
     * @return string|null Returns the ftis num cpt2.
     */
    public function getFtisNumCpt2(): ?string {
        return $this->ftisNumCpt2;
    }

    /**
     * Get the ftiscice.
     *
     * @return float|null Returns the ftiscice.
     */
    public function getFtiscice(): ?float {
        return $this->ftiscice;
    }

    /**
     * Get the immo realloc.
     *
     * @return int|null Returns the immo realloc.
     */
    public function getImmoRealloc(): ?int {
        return $this->immoRealloc;
    }

    /**
     * Get the interet base.
     *
     * @return float|null Returns the interet base.
     */
    public function getInteretBase(): ?float {
        return $this->interetBase;
    }

    /**
     * Get the interets cap.
     *
     * @return string|null Returns the interets cap.
     */
    public function getInteretsCap(): ?string {
        return $this->interetsCap;
    }

    /**
     * Get the interets cap2.
     *
     * @return string|null Returns the interets cap2.
     */
    public function getInteretsCap2(): ?string {
        return $this->interetsCap2;
    }

    /**
     * Get the interets contrepartie.
     *
     * @return string|null Returns the interets contrepartie.
     */
    public function getInteretsContrepartie(): ?string {
        return $this->interetsContrepartie;
    }

    /**
     * Get the interets contrepartie2.
     *
     * @return string|null Returns the interets contrepartie2.
     */
    public function getInteretsContrepartie2(): ?string {
        return $this->interetsContrepartie2;
    }

    /**
     * Get the interets contrepartie deduc.
     *
     * @return string|null Returns the interets contrepartie deduc.
     */
    public function getInteretsContrepartieDeduc(): ?string {
        return $this->interetsContrepartieDeduc;
    }

    /**
     * Get the interets contrepartie deduc2.
     *
     * @return string|null Returns the interets contrepartie deduc2.
     */
    public function getInteretsContrepartieDeduc2(): ?string {
        return $this->interetsContrepartieDeduc2;
    }

    /**
     * Get the interets pca.
     *
     * @return string|null Returns the interets pca.
     */
    public function getInteretsPca(): ?string {
        return $this->interetsPca;
    }

    /**
     * Get the interets pca2.
     *
     * @return string|null Returns the interets pca2.
     */
    public function getInteretsPca2(): ?string {
        return $this->interetsPca2;
    }

    /**
     * Get the no lot cpt recip.
     *
     * @return int|null Returns the no lot cpt recip.
     */
    public function getNoLotCptRecip(): ?int {
        return $this->noLotCptRecip;
    }

    /**
     * Get the no lot credit is.
     *
     * @return int|null Returns the no lot credit is.
     */
    public function getNoLotCreditIs(): ?int {
        return $this->noLotCreditIs;
    }

    /**
     * Get the no lot cvae.
     *
     * @return int|null Returns the no lot cvae.
     */
    public function getNoLotCvae(): ?int {
        return $this->noLotCvae;
    }

    /**
     * Get the no lot interets.
     *
     * @return int|null Returns the no lot interets.
     */
    public function getNoLotInterets(): ?int {
        return $this->noLotInterets;
    }

    /**
     * Get the no lot interets2.
     *
     * @return int|null Returns the no lot interets2.
     */
    public function getNoLotInterets2(): ?int {
        return $this->noLotInterets2;
    }

    /**
     * Get the no lot is.
     *
     * @return int|null Returns the no lot is.
     */
    public function getNoLotIs(): ?int {
        return $this->noLotIs;
    }

    /**
     * Get the no lot paiement is.
     *
     * @return int|null Returns the no lot paiement is.
     */
    public function getNoLotPaiementIs(): ?int {
        return $this->noLotPaiementIs;
    }

    /**
     * Get the periode transfert stock.
     *
     * @return DateTime|null Returns the periode transfert stock.
     */
    public function getPeriodeTransfertStock(): ?DateTime {
        return $this->periodeTransfertStock;
    }

    /**
     * Get the precedent num lot stock.
     *
     * @return int|null Returns the precedent num lot stock.
     */
    public function getPrecedentNumLotStock(): ?int {
        return $this->precedentNumLotStock;
    }

    /**
     * Get the regime agricole.
     *
     * @return bool|null Returns the regime agricole.
     */
    public function getRegimeAgricole(): ?bool {
        return $this->regimeAgricole;
    }

    /**
     * Get the resultat net cpt.
     *
     * @return float|null Returns the resultat net cpt.
     */
    public function getResultatNetCpt(): ?float {
        return $this->resultatNetCpt;
    }

    /**
     * Get the rof tva.
     *
     * @return string|null Returns the rof tva.
     */
    public function getRofTva(): ?string {
        return $this->rofTva;
    }

    /**
     * Get the taux plafond interets.
     *
     * @return float|null Returns the taux plafond interets.
     */
    public function getTauxPlafondInterets(): ?float {
        return $this->tauxPlafondInterets;
    }

    /**
     * Get the taux plafond interets2.
     *
     * @return float|null Returns the taux plafond interets2.
     */
    public function getTauxPlafondInterets2(): ?float {
        return $this->tauxPlafondInterets2;
    }

    /**
     * Get the tva achats enc.
     *
     * @return bool|null Returns the tva achats enc.
     */
    public function getTvaAchatsEnc(): ?bool {
        return $this->tvaAchatsEnc;
    }

    /**
     * Get the tva ca12 ae.
     *
     * @return string|null Returns the tva ca12 ae.
     */
    public function getTvaCa12Ae(): ?string {
        return $this->tvaCa12Ae;
    }

    /**
     * Get the tva cadtm.
     *
     * @return DateTime|null Returns the tva cadtm.
     */
    public function getTvaCadtm(): ?DateTime {
        return $this->tvaCadtm;
    }

    /**
     * Get the tva cascade.
     *
     * @return bool|null Returns the tva cascade.
     */
    public function getTvaCascade(): ?bool {
        return $this->tvaCascade;
    }

    /**
     * Get the tva cloture faite.
     *
     * @return bool|null Returns the tva cloture faite.
     */
    public function getTvaClotureFaite(): ?bool {
        return $this->tvaClotureFaite;
    }

    /**
     * Get the tva code cabinet.
     *
     * @return string|null Returns the tva code cabinet.
     */
    public function getTvaCodeCabinet(): ?string {
        return $this->tvaCodeCabinet;
    }

    /**
     * Get the tva code int emetteur.
     *
     * @return string|null Returns the tva code int emetteur.
     */
    public function getTvaCodeIntEmetteur(): ?string {
        return $this->tvaCodeIntEmetteur;
    }

    /**
     * Get the tva code int recepteur.
     *
     * @return string|null Returns the tva code int recepteur.
     */
    public function getTvaCodeIntRecepteur(): ?string {
        return $this->tvaCodeIntRecepteur;
    }

    /**
     * Get the tva code journal bq.
     *
     * @return string|null Returns the tva code journal bq.
     */
    public function getTvaCodeJournalBq(): ?string {
        return $this->tvaCodeJournalBq;
    }

    /**
     * Get the tva code journal od.
     *
     * @return string|null Returns the tva code journal od.
     */
    public function getTvaCodeJournalOd(): ?string {
        return $this->tvaCodeJournalOd;
    }

    /**
     * Get the tva cpt a ajouter.
     *
     * @return string|null Returns the tva cpt a ajouter.
     */
    public function getTvaCptAAjouter(): ?string {
        return $this->tvaCptAAjouter;
    }

    /**
     * Get the tva cpt a ajouter g.
     *
     * @return string|null Returns the tva cpt a ajouter g.
     */
    public function getTvaCptAAjouterG(): ?string {
        return $this->tvaCptAAjouterG;
    }

    /**
     * Get the tva cpt a deduire.
     *
     * @return string|null Returns the tva cpt a deduire.
     */
    public function getTvaCptADeduire(): ?string {
        return $this->tvaCptADeduire;
    }

    /**
     * Get the tva cpt a imputer.
     *
     * @return string|null Returns the tva cpt a imputer.
     */
    public function getTvaCptAImputer(): ?string {
        return $this->tvaCptAImputer;
    }

    /**
     * Get the tva cpt a imputer g.
     *
     * @return string|null Returns the tva cpt a imputer g.
     */
    public function getTvaCptAImputerG(): ?string {
        return $this->tvaCptAImputerG;
    }

    /**
     * Get the tva cpt a payer.
     *
     * @return string|null Returns the tva cpt a payer.
     */
    public function getTvaCptAPayer(): ?string {
        return $this->tvaCptAPayer;
    }

    /**
     * Get the tva cpt a payer g.
     *
     * @return string|null Returns the tva cpt a payer g.
     */
    public function getTvaCptAPayerG(): ?string {
        return $this->tvaCptAPayerG;
    }

    /**
     * Get the tva cpt acq intra com.
     *
     * @return string|null Returns the tva cpt acq intra com.
     */
    public function getTvaCptAcqIntraCom(): ?string {
        return $this->tvaCptAcqIntraCom;
    }

    /**
     * Get the tva cpt anc taux.
     *
     * @return string|null Returns the tva cpt anc taux.
     */
    public function getTvaCptAncTaux(): ?string {
        return $this->tvaCptAncTaux;
    }

    /**
     * Get the tva cpt ante deduit.
     *
     * @return string|null Returns the tva cpt ante deduit.
     */
    public function getTvaCptAnteDeduit(): ?string {
        return $this->tvaCptAnteDeduit;
    }

    /**
     * Get the tva cpt assimil3310.
     *
     * @return string|null Returns the tva cpt assimil3310.
     */
    public function getTvaCptAssimil3310(): ?string {
        return $this->tvaCptAssimil3310;
    }

    /**
     * Get the tva cpt assimil3310 g.
     *
     * @return string|null Returns the tva cpt assimil3310 g.
     */
    public function getTvaCptAssimil3310G(): ?string {
        return $this->tvaCptAssimil3310G;
    }

    /**
     * Get the tva cpt biens.
     *
     * @return string|null Returns the tva cpt biens.
     */
    public function getTvaCptBiens(): ?string {
        return $this->tvaCptBiens;
    }

    /**
     * Get the tva cpt biens intra com.
     *
     * @return string|null Returns the tva cpt biens intra com.
     */
    public function getTvaCptBiensIntraCom(): ?string {
        return $this->tvaCptBiensIntraCom;
    }

    /**
     * Get the tva cpt difference.
     *
     * @return string|null Returns the tva cpt difference.
     */
    public function getTvaCptDifference(): ?string {
        return $this->tvaCptDifference;
    }

    /**
     * Get the tva cpt dom.
     *
     * @return string|null Returns the tva cpt dom.
     */
    public function getTvaCptDom(): ?string {
        return $this->tvaCptDom;
    }

    /**
     * Get the tva cpt groupe.
     *
     * @return string|null Returns the tva cpt groupe.
     */
    public function getTvaCptGroupe(): ?string {
        return $this->tvaCptGroupe;
    }

    /**
     * Get the tva cpt immos.
     *
     * @return string|null Returns the tva cpt immos.
     */
    public function getTvaCptImmos(): ?string {
        return $this->tvaCptImmos;
    }

    /**
     * Get the tva cpt immos intra com.
     *
     * @return string|null Returns the tva cpt immos intra com.
     */
    public function getTvaCptImmosIntraCom(): ?string {
        return $this->tvaCptImmosIntraCom;
    }

    /**
     * Get the tva cpt regul.
     *
     * @return string|null Returns the tva cpt regul.
     */
    public function getTvaCptRegul(): ?string {
        return $this->tvaCptRegul;
    }

    /**
     * Get the tva cpt rembours.
     *
     * @return string|null Returns the tva cpt rembours.
     */
    public function getTvaCptRembours(): ?string {
        return $this->tvaCptRembours;
    }

    /**
     * Get the tva cpt rembours g.
     *
     * @return string|null Returns the tva cpt rembours g.
     */
    public function getTvaCptRemboursG(): ?string {
        return $this->tvaCptRemboursG;
    }

    /**
     * Get the tva cpt report.
     *
     * @return string|null Returns the tva cpt report.
     */
    public function getTvaCptReport(): ?string {
        return $this->tvaCptReport;
    }

    /**
     * Get the tva cpt report g.
     *
     * @return string|null Returns the tva cpt report g.
     */
    public function getTvaCptReportG(): ?string {
        return $this->tvaCptReportG;
    }

    /**
     * Get the tva cpt taux part.
     *
     * @return string|null Returns the tva cpt taux part.
     */
    public function getTvaCptTauxPart(): ?string {
        return $this->tvaCptTauxPart;
    }

    /**
     * Get the tva cpt vente.
     *
     * @return string|null Returns the tva cpt vente.
     */
    public function getTvaCptVente(): ?string {
        return $this->tvaCptVente;
    }

    /**
     * Get the tva deb3 jrn exclure.
     *
     * @return string|null Returns the tva deb3 jrn exclure.
     */
    public function getTvaDeb3JrnExclure(): ?string {
        return $this->tvaDeb3JrnExclure;
    }

    /**
     * Get the tva dest attn.
     *
     * @return string|null Returns the tva dest attn.
     */
    public function getTvaDestAttn(): ?string {
        return $this->tvaDestAttn;
    }

    /**
     * Get the tva dest fax.
     *
     * @return string|null Returns the tva dest fax.
     */
    public function getTvaDestFax(): ?string {
        return $this->tvaDestFax;
    }

    /**
     * Get the tva dest nom.
     *
     * @return string|null Returns the tva dest nom.
     */
    public function getTvaDestNom(): ?string {
        return $this->tvaDestNom;
    }

    /**
     * Get the tva e4 dbs.
     *
     * @return string|null Returns the tva e4 dbs.
     */
    public function getTvaE4Dbs(): ?string {
        return $this->tvaE4Dbs;
    }

    /**
     * Get the tva e4 di.
     *
     * @return string|null Returns the tva e4 di.
     */
    public function getTvaE4Di(): ?string {
        return $this->tvaE4Di;
    }

    /**
     * Get the tva e4 r jrn od.
     *
     * @return string|null Returns the tva e4 r jrn od.
     */
    public function getTvaE4RJrnOd(): ?string {
        return $this->tvaE4RJrnOd;
    }

    /**
     * Get the tva e4 rbs.
     *
     * @return string|null Returns the tva e4 rbs.
     */
    public function getTvaE4Rbs(): ?string {
        return $this->tvaE4Rbs;
    }

    /**
     * Get the tva e4 ri.
     *
     * @return string|null Returns the tva e4 ri.
     */
    public function getTvaE4Ri(): ?string {
        return $this->tvaE4Ri;
    }

    /**
     * Get the tva emetteur is cab.
     *
     * @return bool|null Returns the tva emetteur is cab.
     */
    public function getTvaEmetteurIsCab(): ?bool {
        return $this->tvaEmetteurIsCab;
    }

    /**
     * Get the tva enc3 der per rech da.
     *
     * @return DateTime|null Returns the tva enc3 der per rech da.
     */
    public function getTvaEnc3DerPerRechDa(): ?DateTime {
        return $this->tvaEnc3DerPerRechDa;
    }

    /**
     * Get the tva envoyer mail.
     *
     * @return bool|null Returns the tva envoyer mail.
     */
    public function getTvaEnvoyerMail(): ?bool {
        return $this->tvaEnvoyerMail;
    }

    /**
     * Get the tva etab btq.
     *
     * @return string|null Returns the tva etab btq.
     */
    public function getTvaEtabBtq(): ?string {
        return $this->tvaEtabBtq;
    }

    /**
     * Get the tva etab bureau distributeur.
     *
     * @return string|null Returns the tva etab bureau distributeur.
     */
    public function getTvaEtabBureauDistributeur(): ?string {
        return $this->tvaEtabBureauDistributeur;
    }

    /**
     * Get the tva etab code postal.
     *
     * @return string|null Returns the tva etab code postal.
     */
    public function getTvaEtabCodePostal(): ?string {
        return $this->tvaEtabCodePostal;
    }

    /**
     * Get the tva etab complement.
     *
     * @return string|null Returns the tva etab complement.
     */
    public function getTvaEtabComplement(): ?string {
        return $this->tvaEtabComplement;
    }

    /**
     * Get the tva etab nom.
     *
     * @return string|null Returns the tva etab nom.
     */
    public function getTvaEtabNom(): ?string {
        return $this->tvaEtabNom;
    }

    /**
     * Get the tva etab nom voie.
     *
     * @return string|null Returns the tva etab nom voie.
     */
    public function getTvaEtabNomVoie(): ?string {
        return $this->tvaEtabNomVoie;
    }

    /**
     * Get the tva etab num voie.
     *
     * @return string|null Returns the tva etab num voie.
     */
    public function getTvaEtabNumVoie(): ?string {
        return $this->tvaEtabNumVoie;
    }

    /**
     * Get the tva exp nom.
     *
     * @return string|null Returns the tva exp nom.
     */
    public function getTvaExpNom(): ?string {
        return $this->tvaExpNom;
    }

    /**
     * Get the tva jour decla.
     *
     * @return string|null Returns the tva jour decla.
     */
    public function getTvaJourDecla(): ?string {
        return $this->tvaJourDecla;
    }

    /**
     * Get the tva mail pj.
     *
     * @return bool|null Returns the tva mail pj.
     */
    public function getTvaMailPj(): ?bool {
        return $this->tvaMailPj;
    }

    /**
     * Get the tva methode.
     *
     * @return string|null Returns the tva methode.
     */
    public function getTvaMethode(): ?string {
        return $this->tvaMethode;
    }

    /**
     * Get the tva moyen paiement.
     *
     * @return int|null Returns the tva moyen paiement.
     */
    public function getTvaMoyenPaiement(): ?int {
        return $this->tvaMoyenPaiement;
    }

    /**
     * Get the tva nom vir.
     *
     * @return string|null Returns the tva nom vir.
     */
    public function getTvaNomVir(): ?string {
        return $this->tvaNomVir;
    }

    /**
     * Get the tva parametrage ok.
     *
     * @return bool|null Returns the tva parametrage ok.
     */
    public function getTvaParametrageOk(): ?bool {
        return $this->tvaParametrageOk;
    }

    /**
     * Get the tva periodicite.
     *
     * @return string|null Returns the tva periodicite.
     */
    public function getTvaPeriodicite(): ?string {
        return $this->tvaPeriodicite;
    }

    /**
     * Get the tva prefixe intracom.
     *
     * @return string|null Returns the tva prefixe intracom.
     */
    public function getTvaPrefixeIntracom(): ?string {
        return $this->tvaPrefixeIntracom;
    }

    /**
     * Get the tva recepteur je declare.
     *
     * @return bool|null Returns the tva recepteur je declare.
     */
    public function getTvaRecepteurJeDeclare(): ?bool {
        return $this->tvaRecepteurJeDeclare;
    }

    /**
     * Get the tva regime.
     *
     * @return string|null Returns the tva regime.
     */
    public function getTvaRegime(): ?string {
        return $this->tvaRegime;
    }

    /**
     * Get the tva signataire.
     *
     * @return string|null Returns the tva signataire.
     */
    public function getTvaSignataire(): ?string {
        return $this->tvaSignataire;
    }

    /**
     * Get the tva type.
     *
     * @return string|null Returns the tva type.
     */
    public function getTvaType(): ?string {
        return $this->tvaType;
    }

    /**
     * Get the tva vire crlf.
     *
     * @return bool|null Returns the tva vire crlf.
     */
    public function getTvaVireCrlf(): ?bool {
        return $this->tvaVireCrlf;
    }

    /**
     * Get the tvabic vir.
     *
     * @return string|null Returns the tvabic vir.
     */
    public function getTvabicVir(): ?string {
        return $this->tvabicVir;
    }

    /**
     * Get the tvaedi edition.
     *
     * @return bool|null Returns the tvaedi edition.
     */
    public function getTvaediEdition(): ?bool {
        return $this->tvaediEdition;
    }

    /**
     * Get the tvaiban vir.
     *
     * @return string|null Returns the tvaiban vir.
     */
    public function getTvaibanVir(): ?string {
        return $this->tvaibanVir;
    }

    /**
     * Get the tvarib vir.
     *
     * @return string|null Returns the tvarib vir.
     */
    public function getTvaribVir(): ?string {
        return $this->tvaribVir;
    }

    /**
     * Get the tvatlra bic1.
     *
     * @return string|null Returns the tvatlra bic1.
     */
    public function getTvatlraBic1(): ?string {
        return $this->tvatlraBic1;
    }

    /**
     * Get the tvatlra bic2.
     *
     * @return string|null Returns the tvatlra bic2.
     */
    public function getTvatlraBic2(): ?string {
        return $this->tvatlraBic2;
    }

    /**
     * Get the tvatlra bic3.
     *
     * @return string|null Returns the tvatlra bic3.
     */
    public function getTvatlraBic3(): ?string {
        return $this->tvatlraBic3;
    }

    /**
     * Get the tvatlra iban1.
     *
     * @return string|null Returns the tvatlra iban1.
     */
    public function getTvatlraIban1(): ?string {
        return $this->tvatlraIban1;
    }

    /**
     * Get the tvatlra iban2.
     *
     * @return string|null Returns the tvatlra iban2.
     */
    public function getTvatlraIban2(): ?string {
        return $this->tvatlraIban2;
    }

    /**
     * Get the tvatlra iban3.
     *
     * @return string|null Returns the tvatlra iban3.
     */
    public function getTvatlraIban3(): ?string {
        return $this->tvatlraIban3;
    }

    /**
     * Get the tvatlra rib1.
     *
     * @return string|null Returns the tvatlra rib1.
     */
    public function getTvatlraRib1(): ?string {
        return $this->tvatlraRib1;
    }

    /**
     * Get the tvatlra rib2.
     *
     * @return string|null Returns the tvatlra rib2.
     */
    public function getTvatlraRib2(): ?string {
        return $this->tvatlraRib2;
    }

    /**
     * Get the tvatlra rib3.
     *
     * @return string|null Returns the tvatlra rib3.
     */
    public function getTvatlraRib3(): ?string {
        return $this->tvatlraRib3;
    }

    /**
     * Get the vmp code jrn pmv.
     *
     * @return string|null Returns the vmp code jrn pmv.
     */
    public function getVmpCodeJrnPmv(): ?string {
        return $this->vmpCodeJrnPmv;
    }

    /**
     * Get the vmp cpt moins value.
     *
     * @return string|null Returns the vmp cpt moins value.
     */
    public function getVmpCptMoinsValue(): ?string {
        return $this->vmpCptMoinsValue;
    }

    /**
     * Get the vmp cpt plus value.
     *
     * @return string|null Returns the vmp cpt plus value.
     */
    public function getVmpCptPlusValue(): ?string {
        return $this->vmpCptPlusValue;
    }

    /**
     * Get the vmp gest ecr pmv.
     *
     * @return int|null Returns the vmp gest ecr pmv.
     */
    public function getVmpGestEcrPmv(): ?int {
        return $this->vmpGestEcrPmv;
    }

    /**
     * Get the vmp gestion en saisie.
     *
     * @return bool|null Returns the vmp gestion en saisie.
     */
    public function getVmpGestionEnSaisie(): ?bool {
        return $this->vmpGestionEnSaisie;
    }

    /**
     * Get the ya reprise cice.
     *
     * @return bool|null Returns the ya reprise cice.
     */
    public function getYaRepriseCice(): ?bool {
        return $this->yaRepriseCice;
    }

    /**
     * Get the ya taux reduit.
     *
     * @return bool|null Returns the ya taux reduit.
     */
    public function getYaTauxReduit(): ?bool {
        return $this->yaTauxReduit;
    }

    /**
     * Get the b ca12 t.
     *
     * @return bool|null Returns the b ca12 t.
     */
    public function getbCa12T(): ?bool {
        return $this->bCa12T;
    }

    /**
     * Set the acompte1.
     *
     * @param float|null $acompte1 The acompte1.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setAcompte1(?float $acompte1): Dossier4 {
        $this->acompte1 = $acompte1;
        return $this;
    }

    /**
     * Set the acompte2.
     *
     * @param float|null $acompte2 The acompte2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setAcompte2(?float $acompte2): Dossier4 {
        $this->acompte2 = $acompte2;
        return $this;
    }

    /**
     * Set the acompte3.
     *
     * @param float|null $acompte3 The acompte3.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setAcompte3(?float $acompte3): Dossier4 {
        $this->acompte3 = $acompte3;
        return $this;
    }

    /**
     * Set the acompte4.
     *
     * @param float|null $acompte4 The acompte4.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setAcompte4(?float $acompte4): Dossier4 {
        $this->acompte4 = $acompte4;
        return $this;
    }

    /**
     * Set the arch imp3519 tva.
     *
     * @param bool|null $archImp3519Tva The arch imp3519 tva.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setArchImp3519Tva(?bool $archImp3519Tva): Dossier4 {
        $this->archImp3519Tva = $archImp3519Tva;
        return $this;
    }

    /**
     * Set the archive decl tva.
     *
     * @param int|null $archiveDeclTva The archive decl tva.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setArchiveDeclTva(?int $archiveDeclTva): Dossier4 {
        $this->archiveDeclTva = $archiveDeclTva;
        return $this;
    }

    /**
     * Set the bal agee nb jours int1.
     *
     * @param int|null $balAgeeNbJoursInt1 The bal agee nb jours int1.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setBalAgeeNbJoursInt1(?int $balAgeeNbJoursInt1): Dossier4 {
        $this->balAgeeNbJoursInt1 = $balAgeeNbJoursInt1;
        return $this;
    }

    /**
     * Set the bal agee nb jours int2.
     *
     * @param int|null $balAgeeNbJoursInt2 The bal agee nb jours int2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setBalAgeeNbJoursInt2(?int $balAgeeNbJoursInt2): Dossier4 {
        $this->balAgeeNbJoursInt2 = $balAgeeNbJoursInt2;
        return $this;
    }

    /**
     * Set the bal agee nb jours int3.
     *
     * @param int|null $balAgeeNbJoursInt3 The bal agee nb jours int3.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setBalAgeeNbJoursInt3(?int $balAgeeNbJoursInt3): Dossier4 {
        $this->balAgeeNbJoursInt3 = $balAgeeNbJoursInt3;
        return $this;
    }

    /**
     * Set the bal agee nb jours int4.
     *
     * @param int|null $balAgeeNbJoursInt4 The bal agee nb jours int4.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setBalAgeeNbJoursInt4(?int $balAgeeNbJoursInt4): Dossier4 {
        $this->balAgeeNbJoursInt4 = $balAgeeNbJoursInt4;
        return $this;
    }

    /**
     * Set the base15pcent.
     *
     * @param float|null $base15pcent The base15pcent.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setBase15pcent(?float $base15pcent): Dossier4 {
        $this->base15pcent = $base15pcent;
        return $this;
    }

    /**
     * Set the base33pcent.
     *
     * @param float|null $base33pcent The base33pcent.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setBase33pcent(?float $base33pcent): Dossier4 {
        $this->base33pcent = $base33pcent;
        return $this;
    }

    /**
     * Set the base t npcent.
     *
     * @param float|null $baseTNpcent The base t npcent.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setBaseTNpcent(?float $baseTNpcent): Dossier4 {
        $this->baseTNpcent = $baseTNpcent;
        return $this;
    }

    /**
     * Set the categorie pme.
     *
     * @param int|null $categoriePme The categorie pme.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setCategoriePme(?int $categoriePme): Dossier4 {
        $this->categoriePme = $categoriePme;
        return $this;
    }

    /**
     * Set the cdi btq.
     *
     * @param string|null $cdiBtq The cdi btq.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setCdiBtq(?string $cdiBtq): Dossier4 {
        $this->cdiBtq = $cdiBtq;
        return $this;
    }

    /**
     * Set the cdi bureau distributeur.
     *
     * @param string|null $cdiBureauDistributeur The cdi bureau distributeur.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setCdiBureauDistributeur(?string $cdiBureauDistributeur): Dossier4 {
        $this->cdiBureauDistributeur = $cdiBureauDistributeur;
        return $this;
    }

    /**
     * Set the cdi code officiel commune.
     *
     * @param string|null $cdiCodeOfficielCommune The cdi code officiel commune.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setCdiCodeOfficielCommune(?string $cdiCodeOfficielCommune): Dossier4 {
        $this->cdiCodeOfficielCommune = $cdiCodeOfficielCommune;
        return $this;
    }

    /**
     * Set the cdi code postal.
     *
     * @param string|null $cdiCodePostal The cdi code postal.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setCdiCodePostal(?string $cdiCodePostal): Dossier4 {
        $this->cdiCodePostal = $cdiCodePostal;
        return $this;
    }

    /**
     * Set the cdi complement.
     *
     * @param string|null $cdiComplement The cdi complement.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setCdiComplement(?string $cdiComplement): Dossier4 {
        $this->cdiComplement = $cdiComplement;
        return $this;
    }

    /**
     * Set the cdi nom.
     *
     * @param string|null $cdiNom The cdi nom.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setCdiNom(?string $cdiNom): Dossier4 {
        $this->cdiNom = $cdiNom;
        return $this;
    }

    /**
     * Set the cdi nom ville.
     *
     * @param string|null $cdiNomVille The cdi nom ville.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setCdiNomVille(?string $cdiNomVille): Dossier4 {
        $this->cdiNomVille = $cdiNomVille;
        return $this;
    }

    /**
     * Set the cdi nom voie.
     *
     * @param string|null $cdiNomVoie The cdi nom voie.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setCdiNomVoie(?string $cdiNomVoie): Dossier4 {
        $this->cdiNomVoie = $cdiNomVoie;
        return $this;
    }

    /**
     * Set the cdi num voie.
     *
     * @param string|null $cdiNumVoie The cdi num voie.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setCdiNumVoie(?string $cdiNumVoie): Dossier4 {
        $this->cdiNumVoie = $cdiNumVoie;
        return $this;
    }

    /**
     * Set the cdi tel1.
     *
     * @param string|null $cdiTel1 The cdi tel1.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setCdiTel1(?string $cdiTel1): Dossier4 {
        $this->cdiTel1 = $cdiTel1;
        return $this;
    }

    /**
     * Set the date plafond interets.
     *
     * @param DateTime|null $datePlafondInterets The date plafond interets.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setDatePlafondInterets(?DateTime $datePlafondInterets): Dossier4 {
        $this->datePlafondInterets = $datePlafondInterets;
        return $this;
    }

    /**
     * Set the date plafond interets2.
     *
     * @param DateTime|null $datePlafondInterets2 The date plafond interets2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setDatePlafondInterets2(?DateTime $datePlafondInterets2): Dossier4 {
        $this->datePlafondInterets2 = $datePlafondInterets2;
        return $this;
    }

    /**
     * Set the date transf lot cvae.
     *
     * @param DateTime|null $dateTransfLotCvae The date transf lot cvae.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setDateTransfLotCvae(?DateTime $dateTransfLotCvae): Dossier4 {
        $this->dateTransfLotCvae = $dateTransfLotCvae;
        return $this;
    }

    /**
     * Set the date transf lot is.
     *
     * @param DateTime|null $dateTransfLotIs The date transf lot is.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setDateTransfLotIs(?DateTime $dateTransfLotIs): Dossier4 {
        $this->dateTransfLotIs = $dateTransfLotIs;
        return $this;
    }

    /**
     * Set the date transfert interets.
     *
     * @param DateTime|null $dateTransfertInterets The date transfert interets.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setDateTransfertInterets(?DateTime $dateTransfertInterets): Dossier4 {
        $this->dateTransfertInterets = $dateTransfertInterets;
        return $this;
    }

    /**
     * Set the date transfert interets2.
     *
     * @param DateTime|null $dateTransfertInterets2 The date transfert interets2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setDateTransfertInterets2(?DateTime $dateTransfertInterets2): Dossier4 {
        $this->dateTransfertInterets2 = $dateTransfertInterets2;
        return $this;
    }

    /**
     * Set the dec tva type reglement.
     *
     * @param int|null $decTvaTypeReglement The dec tva type reglement.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setDecTvaTypeReglement(?int $decTvaTypeReglement): Dossier4 {
        $this->decTvaTypeReglement = $decTvaTypeReglement;
        return $this;
    }

    /**
     * Set the decalage quinzaine.
     *
     * @param bool|null $decalageQuinzaine The decalage quinzaine.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setDecalageQuinzaine(?bool $decalageQuinzaine): Dossier4 {
        $this->decalageQuinzaine = $decalageQuinzaine;
        return $this;
    }

    /**
     * Set the decl reference paiement.
     *
     * @param string|null $declReferencePaiement The decl reference paiement.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setDeclReferencePaiement(?string $declReferencePaiement): Dossier4 {
        $this->declReferencePaiement = $declReferencePaiement;
        return $this;
    }

    /**
     * Set the decl tva cdi.
     *
     * @param string|null $declTvaCdi The decl tva cdi.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setDeclTvaCdi(?string $declTvaCdi): Dossier4 {
        $this->declTvaCdi = $declTvaCdi;
        return $this;
    }

    /**
     * Set the decl tva insp.
     *
     * @param string|null $declTvaInsp The decl tva insp.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setDeclTvaInsp(?string $declTvaInsp): Dossier4 {
        $this->declTvaInsp = $declTvaInsp;
        return $this;
    }

    /**
     * Set the decl tva regime.
     *
     * @param string|null $declTvaRegime The decl tva regime.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setDeclTvaRegime(?string $declTvaRegime): Dossier4 {
        $this->declTvaRegime = $declTvaRegime;
        return $this;
    }

    /**
     * Set the ftis contrib mtt.
     *
     * @param float|null $ftisContribMtt The ftis contrib mtt.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setFtisContribMtt(?float $ftisContribMtt): Dossier4 {
        $this->ftisContribMtt = $ftisContribMtt;
        return $this;
    }

    /**
     * Set the ftis credit impot.
     *
     * @param float|null $ftisCreditImpot The ftis credit impot.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setFtisCreditImpot(?float $ftisCreditImpot): Dossier4 {
        $this->ftisCreditImpot = $ftisCreditImpot;
        return $this;
    }

    /**
     * Set the ftis deficits reportables.
     *
     * @param float|null $ftisDeficitsReportables The ftis deficits reportables.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setFtisDeficitsReportables(?float $ftisDeficitsReportables): Dossier4 {
        $this->ftisDeficitsReportables = $ftisDeficitsReportables;
        return $this;
    }

    /**
     * Set the ftis num cpt1.
     *
     * @param string|null $ftisNumCpt1 The ftis num cpt1.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setFtisNumCpt1(?string $ftisNumCpt1): Dossier4 {
        $this->ftisNumCpt1 = $ftisNumCpt1;
        return $this;
    }

    /**
     * Set the ftis num cpt2.
     *
     * @param string|null $ftisNumCpt2 The ftis num cpt2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setFtisNumCpt2(?string $ftisNumCpt2): Dossier4 {
        $this->ftisNumCpt2 = $ftisNumCpt2;
        return $this;
    }

    /**
     * Set the ftiscice.
     *
     * @param float|null $ftiscice The ftiscice.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setFtiscice(?float $ftiscice): Dossier4 {
        $this->ftiscice = $ftiscice;
        return $this;
    }

    /**
     * Set the immo realloc.
     *
     * @param int|null $immoRealloc The immo realloc.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setImmoRealloc(?int $immoRealloc): Dossier4 {
        $this->immoRealloc = $immoRealloc;
        return $this;
    }

    /**
     * Set the interet base.
     *
     * @param float|null $interetBase The interet base.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setInteretBase(?float $interetBase): Dossier4 {
        $this->interetBase = $interetBase;
        return $this;
    }

    /**
     * Set the interets cap.
     *
     * @param string|null $interetsCap The interets cap.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setInteretsCap(?string $interetsCap): Dossier4 {
        $this->interetsCap = $interetsCap;
        return $this;
    }

    /**
     * Set the interets cap2.
     *
     * @param string|null $interetsCap2 The interets cap2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setInteretsCap2(?string $interetsCap2): Dossier4 {
        $this->interetsCap2 = $interetsCap2;
        return $this;
    }

    /**
     * Set the interets contrepartie.
     *
     * @param string|null $interetsContrepartie The interets contrepartie.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setInteretsContrepartie(?string $interetsContrepartie): Dossier4 {
        $this->interetsContrepartie = $interetsContrepartie;
        return $this;
    }

    /**
     * Set the interets contrepartie2.
     *
     * @param string|null $interetsContrepartie2 The interets contrepartie2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setInteretsContrepartie2(?string $interetsContrepartie2): Dossier4 {
        $this->interetsContrepartie2 = $interetsContrepartie2;
        return $this;
    }

    /**
     * Set the interets contrepartie deduc.
     *
     * @param string|null $interetsContrepartieDeduc The interets contrepartie deduc.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setInteretsContrepartieDeduc(?string $interetsContrepartieDeduc): Dossier4 {
        $this->interetsContrepartieDeduc = $interetsContrepartieDeduc;
        return $this;
    }

    /**
     * Set the interets contrepartie deduc2.
     *
     * @param string|null $interetsContrepartieDeduc2 The interets contrepartie deduc2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setInteretsContrepartieDeduc2(?string $interetsContrepartieDeduc2): Dossier4 {
        $this->interetsContrepartieDeduc2 = $interetsContrepartieDeduc2;
        return $this;
    }

    /**
     * Set the interets pca.
     *
     * @param string|null $interetsPca The interets pca.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setInteretsPca(?string $interetsPca): Dossier4 {
        $this->interetsPca = $interetsPca;
        return $this;
    }

    /**
     * Set the interets pca2.
     *
     * @param string|null $interetsPca2 The interets pca2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setInteretsPca2(?string $interetsPca2): Dossier4 {
        $this->interetsPca2 = $interetsPca2;
        return $this;
    }

    /**
     * Set the no lot cpt recip.
     *
     * @param int|null $noLotCptRecip The no lot cpt recip.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setNoLotCptRecip(?int $noLotCptRecip): Dossier4 {
        $this->noLotCptRecip = $noLotCptRecip;
        return $this;
    }

    /**
     * Set the no lot credit is.
     *
     * @param int|null $noLotCreditIs The no lot credit is.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setNoLotCreditIs(?int $noLotCreditIs): Dossier4 {
        $this->noLotCreditIs = $noLotCreditIs;
        return $this;
    }

    /**
     * Set the no lot cvae.
     *
     * @param int|null $noLotCvae The no lot cvae.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setNoLotCvae(?int $noLotCvae): Dossier4 {
        $this->noLotCvae = $noLotCvae;
        return $this;
    }

    /**
     * Set the no lot interets.
     *
     * @param int|null $noLotInterets The no lot interets.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setNoLotInterets(?int $noLotInterets): Dossier4 {
        $this->noLotInterets = $noLotInterets;
        return $this;
    }

    /**
     * Set the no lot interets2.
     *
     * @param int|null $noLotInterets2 The no lot interets2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setNoLotInterets2(?int $noLotInterets2): Dossier4 {
        $this->noLotInterets2 = $noLotInterets2;
        return $this;
    }

    /**
     * Set the no lot is.
     *
     * @param int|null $noLotIs The no lot is.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setNoLotIs(?int $noLotIs): Dossier4 {
        $this->noLotIs = $noLotIs;
        return $this;
    }

    /**
     * Set the no lot paiement is.
     *
     * @param int|null $noLotPaiementIs The no lot paiement is.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setNoLotPaiementIs(?int $noLotPaiementIs): Dossier4 {
        $this->noLotPaiementIs = $noLotPaiementIs;
        return $this;
    }

    /**
     * Set the periode transfert stock.
     *
     * @param DateTime|null $periodeTransfertStock The periode transfert stock.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setPeriodeTransfertStock(?DateTime $periodeTransfertStock): Dossier4 {
        $this->periodeTransfertStock = $periodeTransfertStock;
        return $this;
    }

    /**
     * Set the precedent num lot stock.
     *
     * @param int|null $precedentNumLotStock The precedent num lot stock.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setPrecedentNumLotStock(?int $precedentNumLotStock): Dossier4 {
        $this->precedentNumLotStock = $precedentNumLotStock;
        return $this;
    }

    /**
     * Set the regime agricole.
     *
     * @param bool|null $regimeAgricole The regime agricole.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setRegimeAgricole(?bool $regimeAgricole): Dossier4 {
        $this->regimeAgricole = $regimeAgricole;
        return $this;
    }

    /**
     * Set the resultat net cpt.
     *
     * @param float|null $resultatNetCpt The resultat net cpt.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setResultatNetCpt(?float $resultatNetCpt): Dossier4 {
        $this->resultatNetCpt = $resultatNetCpt;
        return $this;
    }

    /**
     * Set the rof tva.
     *
     * @param string|null $rofTva The rof tva.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setRofTva(?string $rofTva): Dossier4 {
        $this->rofTva = $rofTva;
        return $this;
    }

    /**
     * Set the taux plafond interets.
     *
     * @param float|null $tauxPlafondInterets The taux plafond interets.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTauxPlafondInterets(?float $tauxPlafondInterets): Dossier4 {
        $this->tauxPlafondInterets = $tauxPlafondInterets;
        return $this;
    }

    /**
     * Set the taux plafond interets2.
     *
     * @param float|null $tauxPlafondInterets2 The taux plafond interets2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTauxPlafondInterets2(?float $tauxPlafondInterets2): Dossier4 {
        $this->tauxPlafondInterets2 = $tauxPlafondInterets2;
        return $this;
    }

    /**
     * Set the tva achats enc.
     *
     * @param bool|null $tvaAchatsEnc The tva achats enc.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaAchatsEnc(?bool $tvaAchatsEnc): Dossier4 {
        $this->tvaAchatsEnc = $tvaAchatsEnc;
        return $this;
    }

    /**
     * Set the tva ca12 ae.
     *
     * @param string|null $tvaCa12Ae The tva ca12 ae.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCa12Ae(?string $tvaCa12Ae): Dossier4 {
        $this->tvaCa12Ae = $tvaCa12Ae;
        return $this;
    }

    /**
     * Set the tva cadtm.
     *
     * @param DateTime|null $tvaCadtm The tva cadtm.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCadtm(?DateTime $tvaCadtm): Dossier4 {
        $this->tvaCadtm = $tvaCadtm;
        return $this;
    }

    /**
     * Set the tva cascade.
     *
     * @param bool|null $tvaCascade The tva cascade.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCascade(?bool $tvaCascade): Dossier4 {
        $this->tvaCascade = $tvaCascade;
        return $this;
    }

    /**
     * Set the tva cloture faite.
     *
     * @param bool|null $tvaClotureFaite The tva cloture faite.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaClotureFaite(?bool $tvaClotureFaite): Dossier4 {
        $this->tvaClotureFaite = $tvaClotureFaite;
        return $this;
    }

    /**
     * Set the tva code cabinet.
     *
     * @param string|null $tvaCodeCabinet The tva code cabinet.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCodeCabinet(?string $tvaCodeCabinet): Dossier4 {
        $this->tvaCodeCabinet = $tvaCodeCabinet;
        return $this;
    }

    /**
     * Set the tva code int emetteur.
     *
     * @param string|null $tvaCodeIntEmetteur The tva code int emetteur.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCodeIntEmetteur(?string $tvaCodeIntEmetteur): Dossier4 {
        $this->tvaCodeIntEmetteur = $tvaCodeIntEmetteur;
        return $this;
    }

    /**
     * Set the tva code int recepteur.
     *
     * @param string|null $tvaCodeIntRecepteur The tva code int recepteur.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCodeIntRecepteur(?string $tvaCodeIntRecepteur): Dossier4 {
        $this->tvaCodeIntRecepteur = $tvaCodeIntRecepteur;
        return $this;
    }

    /**
     * Set the tva code journal bq.
     *
     * @param string|null $tvaCodeJournalBq The tva code journal bq.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCodeJournalBq(?string $tvaCodeJournalBq): Dossier4 {
        $this->tvaCodeJournalBq = $tvaCodeJournalBq;
        return $this;
    }

    /**
     * Set the tva code journal od.
     *
     * @param string|null $tvaCodeJournalOd The tva code journal od.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCodeJournalOd(?string $tvaCodeJournalOd): Dossier4 {
        $this->tvaCodeJournalOd = $tvaCodeJournalOd;
        return $this;
    }

    /**
     * Set the tva cpt a ajouter.
     *
     * @param string|null $tvaCptAAjouter The tva cpt a ajouter.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptAAjouter(?string $tvaCptAAjouter): Dossier4 {
        $this->tvaCptAAjouter = $tvaCptAAjouter;
        return $this;
    }

    /**
     * Set the tva cpt a ajouter g.
     *
     * @param string|null $tvaCptAAjouterG The tva cpt a ajouter g.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptAAjouterG(?string $tvaCptAAjouterG): Dossier4 {
        $this->tvaCptAAjouterG = $tvaCptAAjouterG;
        return $this;
    }

    /**
     * Set the tva cpt a deduire.
     *
     * @param string|null $tvaCptADeduire The tva cpt a deduire.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptADeduire(?string $tvaCptADeduire): Dossier4 {
        $this->tvaCptADeduire = $tvaCptADeduire;
        return $this;
    }

    /**
     * Set the tva cpt a imputer.
     *
     * @param string|null $tvaCptAImputer The tva cpt a imputer.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptAImputer(?string $tvaCptAImputer): Dossier4 {
        $this->tvaCptAImputer = $tvaCptAImputer;
        return $this;
    }

    /**
     * Set the tva cpt a imputer g.
     *
     * @param string|null $tvaCptAImputerG The tva cpt a imputer g.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptAImputerG(?string $tvaCptAImputerG): Dossier4 {
        $this->tvaCptAImputerG = $tvaCptAImputerG;
        return $this;
    }

    /**
     * Set the tva cpt a payer.
     *
     * @param string|null $tvaCptAPayer The tva cpt a payer.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptAPayer(?string $tvaCptAPayer): Dossier4 {
        $this->tvaCptAPayer = $tvaCptAPayer;
        return $this;
    }

    /**
     * Set the tva cpt a payer g.
     *
     * @param string|null $tvaCptAPayerG The tva cpt a payer g.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptAPayerG(?string $tvaCptAPayerG): Dossier4 {
        $this->tvaCptAPayerG = $tvaCptAPayerG;
        return $this;
    }

    /**
     * Set the tva cpt acq intra com.
     *
     * @param string|null $tvaCptAcqIntraCom The tva cpt acq intra com.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptAcqIntraCom(?string $tvaCptAcqIntraCom): Dossier4 {
        $this->tvaCptAcqIntraCom = $tvaCptAcqIntraCom;
        return $this;
    }

    /**
     * Set the tva cpt anc taux.
     *
     * @param string|null $tvaCptAncTaux The tva cpt anc taux.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptAncTaux(?string $tvaCptAncTaux): Dossier4 {
        $this->tvaCptAncTaux = $tvaCptAncTaux;
        return $this;
    }

    /**
     * Set the tva cpt ante deduit.
     *
     * @param string|null $tvaCptAnteDeduit The tva cpt ante deduit.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptAnteDeduit(?string $tvaCptAnteDeduit): Dossier4 {
        $this->tvaCptAnteDeduit = $tvaCptAnteDeduit;
        return $this;
    }

    /**
     * Set the tva cpt assimil3310.
     *
     * @param string|null $tvaCptAssimil3310 The tva cpt assimil3310.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptAssimil3310(?string $tvaCptAssimil3310): Dossier4 {
        $this->tvaCptAssimil3310 = $tvaCptAssimil3310;
        return $this;
    }

    /**
     * Set the tva cpt assimil3310 g.
     *
     * @param string|null $tvaCptAssimil3310G The tva cpt assimil3310 g.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptAssimil3310G(?string $tvaCptAssimil3310G): Dossier4 {
        $this->tvaCptAssimil3310G = $tvaCptAssimil3310G;
        return $this;
    }

    /**
     * Set the tva cpt biens.
     *
     * @param string|null $tvaCptBiens The tva cpt biens.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptBiens(?string $tvaCptBiens): Dossier4 {
        $this->tvaCptBiens = $tvaCptBiens;
        return $this;
    }

    /**
     * Set the tva cpt biens intra com.
     *
     * @param string|null $tvaCptBiensIntraCom The tva cpt biens intra com.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptBiensIntraCom(?string $tvaCptBiensIntraCom): Dossier4 {
        $this->tvaCptBiensIntraCom = $tvaCptBiensIntraCom;
        return $this;
    }

    /**
     * Set the tva cpt difference.
     *
     * @param string|null $tvaCptDifference The tva cpt difference.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptDifference(?string $tvaCptDifference): Dossier4 {
        $this->tvaCptDifference = $tvaCptDifference;
        return $this;
    }

    /**
     * Set the tva cpt dom.
     *
     * @param string|null $tvaCptDom The tva cpt dom.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptDom(?string $tvaCptDom): Dossier4 {
        $this->tvaCptDom = $tvaCptDom;
        return $this;
    }

    /**
     * Set the tva cpt groupe.
     *
     * @param string|null $tvaCptGroupe The tva cpt groupe.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptGroupe(?string $tvaCptGroupe): Dossier4 {
        $this->tvaCptGroupe = $tvaCptGroupe;
        return $this;
    }

    /**
     * Set the tva cpt immos.
     *
     * @param string|null $tvaCptImmos The tva cpt immos.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptImmos(?string $tvaCptImmos): Dossier4 {
        $this->tvaCptImmos = $tvaCptImmos;
        return $this;
    }

    /**
     * Set the tva cpt immos intra com.
     *
     * @param string|null $tvaCptImmosIntraCom The tva cpt immos intra com.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptImmosIntraCom(?string $tvaCptImmosIntraCom): Dossier4 {
        $this->tvaCptImmosIntraCom = $tvaCptImmosIntraCom;
        return $this;
    }

    /**
     * Set the tva cpt regul.
     *
     * @param string|null $tvaCptRegul The tva cpt regul.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptRegul(?string $tvaCptRegul): Dossier4 {
        $this->tvaCptRegul = $tvaCptRegul;
        return $this;
    }

    /**
     * Set the tva cpt rembours.
     *
     * @param string|null $tvaCptRembours The tva cpt rembours.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptRembours(?string $tvaCptRembours): Dossier4 {
        $this->tvaCptRembours = $tvaCptRembours;
        return $this;
    }

    /**
     * Set the tva cpt rembours g.
     *
     * @param string|null $tvaCptRemboursG The tva cpt rembours g.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptRemboursG(?string $tvaCptRemboursG): Dossier4 {
        $this->tvaCptRemboursG = $tvaCptRemboursG;
        return $this;
    }

    /**
     * Set the tva cpt report.
     *
     * @param string|null $tvaCptReport The tva cpt report.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptReport(?string $tvaCptReport): Dossier4 {
        $this->tvaCptReport = $tvaCptReport;
        return $this;
    }

    /**
     * Set the tva cpt report g.
     *
     * @param string|null $tvaCptReportG The tva cpt report g.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptReportG(?string $tvaCptReportG): Dossier4 {
        $this->tvaCptReportG = $tvaCptReportG;
        return $this;
    }

    /**
     * Set the tva cpt taux part.
     *
     * @param string|null $tvaCptTauxPart The tva cpt taux part.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptTauxPart(?string $tvaCptTauxPart): Dossier4 {
        $this->tvaCptTauxPart = $tvaCptTauxPart;
        return $this;
    }

    /**
     * Set the tva cpt vente.
     *
     * @param string|null $tvaCptVente The tva cpt vente.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaCptVente(?string $tvaCptVente): Dossier4 {
        $this->tvaCptVente = $tvaCptVente;
        return $this;
    }

    /**
     * Set the tva deb3 jrn exclure.
     *
     * @param string|null $tvaDeb3JrnExclure The tva deb3 jrn exclure.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaDeb3JrnExclure(?string $tvaDeb3JrnExclure): Dossier4 {
        $this->tvaDeb3JrnExclure = $tvaDeb3JrnExclure;
        return $this;
    }

    /**
     * Set the tva dest attn.
     *
     * @param string|null $tvaDestAttn The tva dest attn.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaDestAttn(?string $tvaDestAttn): Dossier4 {
        $this->tvaDestAttn = $tvaDestAttn;
        return $this;
    }

    /**
     * Set the tva dest fax.
     *
     * @param string|null $tvaDestFax The tva dest fax.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaDestFax(?string $tvaDestFax): Dossier4 {
        $this->tvaDestFax = $tvaDestFax;
        return $this;
    }

    /**
     * Set the tva dest nom.
     *
     * @param string|null $tvaDestNom The tva dest nom.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaDestNom(?string $tvaDestNom): Dossier4 {
        $this->tvaDestNom = $tvaDestNom;
        return $this;
    }

    /**
     * Set the tva e4 dbs.
     *
     * @param string|null $tvaE4Dbs The tva e4 dbs.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaE4Dbs(?string $tvaE4Dbs): Dossier4 {
        $this->tvaE4Dbs = $tvaE4Dbs;
        return $this;
    }

    /**
     * Set the tva e4 di.
     *
     * @param string|null $tvaE4Di The tva e4 di.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaE4Di(?string $tvaE4Di): Dossier4 {
        $this->tvaE4Di = $tvaE4Di;
        return $this;
    }

    /**
     * Set the tva e4 r jrn od.
     *
     * @param string|null $tvaE4RJrnOd The tva e4 r jrn od.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaE4RJrnOd(?string $tvaE4RJrnOd): Dossier4 {
        $this->tvaE4RJrnOd = $tvaE4RJrnOd;
        return $this;
    }

    /**
     * Set the tva e4 rbs.
     *
     * @param string|null $tvaE4Rbs The tva e4 rbs.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaE4Rbs(?string $tvaE4Rbs): Dossier4 {
        $this->tvaE4Rbs = $tvaE4Rbs;
        return $this;
    }

    /**
     * Set the tva e4 ri.
     *
     * @param string|null $tvaE4Ri The tva e4 ri.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaE4Ri(?string $tvaE4Ri): Dossier4 {
        $this->tvaE4Ri = $tvaE4Ri;
        return $this;
    }

    /**
     * Set the tva emetteur is cab.
     *
     * @param bool|null $tvaEmetteurIsCab The tva emetteur is cab.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaEmetteurIsCab(?bool $tvaEmetteurIsCab): Dossier4 {
        $this->tvaEmetteurIsCab = $tvaEmetteurIsCab;
        return $this;
    }

    /**
     * Set the tva enc3 der per rech da.
     *
     * @param DateTime|null $tvaEnc3DerPerRechDa The tva enc3 der per rech da.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaEnc3DerPerRechDa(?DateTime $tvaEnc3DerPerRechDa): Dossier4 {
        $this->tvaEnc3DerPerRechDa = $tvaEnc3DerPerRechDa;
        return $this;
    }

    /**
     * Set the tva envoyer mail.
     *
     * @param bool|null $tvaEnvoyerMail The tva envoyer mail.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaEnvoyerMail(?bool $tvaEnvoyerMail): Dossier4 {
        $this->tvaEnvoyerMail = $tvaEnvoyerMail;
        return $this;
    }

    /**
     * Set the tva etab btq.
     *
     * @param string|null $tvaEtabBtq The tva etab btq.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaEtabBtq(?string $tvaEtabBtq): Dossier4 {
        $this->tvaEtabBtq = $tvaEtabBtq;
        return $this;
    }

    /**
     * Set the tva etab bureau distributeur.
     *
     * @param string|null $tvaEtabBureauDistributeur The tva etab bureau distributeur.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaEtabBureauDistributeur(?string $tvaEtabBureauDistributeur): Dossier4 {
        $this->tvaEtabBureauDistributeur = $tvaEtabBureauDistributeur;
        return $this;
    }

    /**
     * Set the tva etab code postal.
     *
     * @param string|null $tvaEtabCodePostal The tva etab code postal.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaEtabCodePostal(?string $tvaEtabCodePostal): Dossier4 {
        $this->tvaEtabCodePostal = $tvaEtabCodePostal;
        return $this;
    }

    /**
     * Set the tva etab complement.
     *
     * @param string|null $tvaEtabComplement The tva etab complement.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaEtabComplement(?string $tvaEtabComplement): Dossier4 {
        $this->tvaEtabComplement = $tvaEtabComplement;
        return $this;
    }

    /**
     * Set the tva etab nom.
     *
     * @param string|null $tvaEtabNom The tva etab nom.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaEtabNom(?string $tvaEtabNom): Dossier4 {
        $this->tvaEtabNom = $tvaEtabNom;
        return $this;
    }

    /**
     * Set the tva etab nom voie.
     *
     * @param string|null $tvaEtabNomVoie The tva etab nom voie.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaEtabNomVoie(?string $tvaEtabNomVoie): Dossier4 {
        $this->tvaEtabNomVoie = $tvaEtabNomVoie;
        return $this;
    }

    /**
     * Set the tva etab num voie.
     *
     * @param string|null $tvaEtabNumVoie The tva etab num voie.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaEtabNumVoie(?string $tvaEtabNumVoie): Dossier4 {
        $this->tvaEtabNumVoie = $tvaEtabNumVoie;
        return $this;
    }

    /**
     * Set the tva exp nom.
     *
     * @param string|null $tvaExpNom The tva exp nom.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaExpNom(?string $tvaExpNom): Dossier4 {
        $this->tvaExpNom = $tvaExpNom;
        return $this;
    }

    /**
     * Set the tva jour decla.
     *
     * @param string|null $tvaJourDecla The tva jour decla.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaJourDecla(?string $tvaJourDecla): Dossier4 {
        $this->tvaJourDecla = $tvaJourDecla;
        return $this;
    }

    /**
     * Set the tva mail pj.
     *
     * @param bool|null $tvaMailPj The tva mail pj.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaMailPj(?bool $tvaMailPj): Dossier4 {
        $this->tvaMailPj = $tvaMailPj;
        return $this;
    }

    /**
     * Set the tva methode.
     *
     * @param string|null $tvaMethode The tva methode.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaMethode(?string $tvaMethode): Dossier4 {
        $this->tvaMethode = $tvaMethode;
        return $this;
    }

    /**
     * Set the tva moyen paiement.
     *
     * @param int|null $tvaMoyenPaiement The tva moyen paiement.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaMoyenPaiement(?int $tvaMoyenPaiement): Dossier4 {
        $this->tvaMoyenPaiement = $tvaMoyenPaiement;
        return $this;
    }

    /**
     * Set the tva nom vir.
     *
     * @param string|null $tvaNomVir The tva nom vir.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaNomVir(?string $tvaNomVir): Dossier4 {
        $this->tvaNomVir = $tvaNomVir;
        return $this;
    }

    /**
     * Set the tva parametrage ok.
     *
     * @param bool|null $tvaParametrageOk The tva parametrage ok.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaParametrageOk(?bool $tvaParametrageOk): Dossier4 {
        $this->tvaParametrageOk = $tvaParametrageOk;
        return $this;
    }

    /**
     * Set the tva periodicite.
     *
     * @param string|null $tvaPeriodicite The tva periodicite.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaPeriodicite(?string $tvaPeriodicite): Dossier4 {
        $this->tvaPeriodicite = $tvaPeriodicite;
        return $this;
    }

    /**
     * Set the tva prefixe intracom.
     *
     * @param string|null $tvaPrefixeIntracom The tva prefixe intracom.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaPrefixeIntracom(?string $tvaPrefixeIntracom): Dossier4 {
        $this->tvaPrefixeIntracom = $tvaPrefixeIntracom;
        return $this;
    }

    /**
     * Set the tva recepteur je declare.
     *
     * @param bool|null $tvaRecepteurJeDeclare The tva recepteur je declare.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaRecepteurJeDeclare(?bool $tvaRecepteurJeDeclare): Dossier4 {
        $this->tvaRecepteurJeDeclare = $tvaRecepteurJeDeclare;
        return $this;
    }

    /**
     * Set the tva regime.
     *
     * @param string|null $tvaRegime The tva regime.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaRegime(?string $tvaRegime): Dossier4 {
        $this->tvaRegime = $tvaRegime;
        return $this;
    }

    /**
     * Set the tva signataire.
     *
     * @param string|null $tvaSignataire The tva signataire.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaSignataire(?string $tvaSignataire): Dossier4 {
        $this->tvaSignataire = $tvaSignataire;
        return $this;
    }

    /**
     * Set the tva type.
     *
     * @param string|null $tvaType The tva type.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaType(?string $tvaType): Dossier4 {
        $this->tvaType = $tvaType;
        return $this;
    }

    /**
     * Set the tva vire crlf.
     *
     * @param bool|null $tvaVireCrlf The tva vire crlf.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaVireCrlf(?bool $tvaVireCrlf): Dossier4 {
        $this->tvaVireCrlf = $tvaVireCrlf;
        return $this;
    }

    /**
     * Set the tvabic vir.
     *
     * @param string|null $tvabicVir The tvabic vir.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvabicVir(?string $tvabicVir): Dossier4 {
        $this->tvabicVir = $tvabicVir;
        return $this;
    }

    /**
     * Set the tvaedi edition.
     *
     * @param bool|null $tvaediEdition The tvaedi edition.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaediEdition(?bool $tvaediEdition): Dossier4 {
        $this->tvaediEdition = $tvaediEdition;
        return $this;
    }

    /**
     * Set the tvaiban vir.
     *
     * @param string|null $tvaibanVir The tvaiban vir.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaibanVir(?string $tvaibanVir): Dossier4 {
        $this->tvaibanVir = $tvaibanVir;
        return $this;
    }

    /**
     * Set the tvarib vir.
     *
     * @param string|null $tvaribVir The tvarib vir.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvaribVir(?string $tvaribVir): Dossier4 {
        $this->tvaribVir = $tvaribVir;
        return $this;
    }

    /**
     * Set the tvatlra bic1.
     *
     * @param string|null $tvatlraBic1 The tvatlra bic1.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvatlraBic1(?string $tvatlraBic1): Dossier4 {
        $this->tvatlraBic1 = $tvatlraBic1;
        return $this;
    }

    /**
     * Set the tvatlra bic2.
     *
     * @param string|null $tvatlraBic2 The tvatlra bic2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvatlraBic2(?string $tvatlraBic2): Dossier4 {
        $this->tvatlraBic2 = $tvatlraBic2;
        return $this;
    }

    /**
     * Set the tvatlra bic3.
     *
     * @param string|null $tvatlraBic3 The tvatlra bic3.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvatlraBic3(?string $tvatlraBic3): Dossier4 {
        $this->tvatlraBic3 = $tvatlraBic3;
        return $this;
    }

    /**
     * Set the tvatlra iban1.
     *
     * @param string|null $tvatlraIban1 The tvatlra iban1.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvatlraIban1(?string $tvatlraIban1): Dossier4 {
        $this->tvatlraIban1 = $tvatlraIban1;
        return $this;
    }

    /**
     * Set the tvatlra iban2.
     *
     * @param string|null $tvatlraIban2 The tvatlra iban2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvatlraIban2(?string $tvatlraIban2): Dossier4 {
        $this->tvatlraIban2 = $tvatlraIban2;
        return $this;
    }

    /**
     * Set the tvatlra iban3.
     *
     * @param string|null $tvatlraIban3 The tvatlra iban3.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvatlraIban3(?string $tvatlraIban3): Dossier4 {
        $this->tvatlraIban3 = $tvatlraIban3;
        return $this;
    }

    /**
     * Set the tvatlra rib1.
     *
     * @param string|null $tvatlraRib1 The tvatlra rib1.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvatlraRib1(?string $tvatlraRib1): Dossier4 {
        $this->tvatlraRib1 = $tvatlraRib1;
        return $this;
    }

    /**
     * Set the tvatlra rib2.
     *
     * @param string|null $tvatlraRib2 The tvatlra rib2.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvatlraRib2(?string $tvatlraRib2): Dossier4 {
        $this->tvatlraRib2 = $tvatlraRib2;
        return $this;
    }

    /**
     * Set the tvatlra rib3.
     *
     * @param string|null $tvatlraRib3 The tvatlra rib3.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setTvatlraRib3(?string $tvatlraRib3): Dossier4 {
        $this->tvatlraRib3 = $tvatlraRib3;
        return $this;
    }

    /**
     * Set the vmp code jrn pmv.
     *
     * @param string|null $vmpCodeJrnPmv The vmp code jrn pmv.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setVmpCodeJrnPmv(?string $vmpCodeJrnPmv): Dossier4 {
        $this->vmpCodeJrnPmv = $vmpCodeJrnPmv;
        return $this;
    }

    /**
     * Set the vmp cpt moins value.
     *
     * @param string|null $vmpCptMoinsValue The vmp cpt moins value.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setVmpCptMoinsValue(?string $vmpCptMoinsValue): Dossier4 {
        $this->vmpCptMoinsValue = $vmpCptMoinsValue;
        return $this;
    }

    /**
     * Set the vmp cpt plus value.
     *
     * @param string|null $vmpCptPlusValue The vmp cpt plus value.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setVmpCptPlusValue(?string $vmpCptPlusValue): Dossier4 {
        $this->vmpCptPlusValue = $vmpCptPlusValue;
        return $this;
    }

    /**
     * Set the vmp gest ecr pmv.
     *
     * @param int|null $vmpGestEcrPmv The vmp gest ecr pmv.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setVmpGestEcrPmv(?int $vmpGestEcrPmv): Dossier4 {
        $this->vmpGestEcrPmv = $vmpGestEcrPmv;
        return $this;
    }

    /**
     * Set the vmp gestion en saisie.
     *
     * @param bool|null $vmpGestionEnSaisie The vmp gestion en saisie.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setVmpGestionEnSaisie(?bool $vmpGestionEnSaisie): Dossier4 {
        $this->vmpGestionEnSaisie = $vmpGestionEnSaisie;
        return $this;
    }

    /**
     * Set the ya reprise cice.
     *
     * @param bool|null $yaRepriseCice The ya reprise cice.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setYaRepriseCice(?bool $yaRepriseCice): Dossier4 {
        $this->yaRepriseCice = $yaRepriseCice;
        return $this;
    }

    /**
     * Set the ya taux reduit.
     *
     * @param bool|null $yaTauxReduit The ya taux reduit.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setYaTauxReduit(?bool $yaTauxReduit): Dossier4 {
        $this->yaTauxReduit = $yaTauxReduit;
        return $this;
    }

    /**
     * Set the b ca12 t.
     *
     * @param bool|null $bCa12T The b ca12 t.
     * @return Dossier4 Returns this Dossier4.
     */
    public function setbCa12T(?bool $bCa12T): Dossier4 {
        $this->bCa12T = $bCa12T;
        return $this;
    }
}
