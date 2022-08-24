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
 * Attestation assedic.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class AttestationAssedic {

    /**
     * Adhesion aides.
     *
     * @var bool|null
     */
    private $adhesionAides;

    /**
     * Adhesion revocable.
     *
     * @var bool|null
     */
    private $adhesionRevocable;

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
     * Alsace moselle.
     *
     * @var bool|null
     */
    private $alsaceMoselle;

    /**
     * Auto assurance.
     *
     * @var bool|null
     */
    private $autoAssurance;

    /**
     * Caisse indemcp.
     *
     * @var string|null
     */
    private $caisseIndemcp;

    /**
     * Categ emploi autre.
     *
     * @var string|null
     */
    private $categEmploiAutre;

    /**
     * Chomage total.
     *
     * @var bool|null
     */
    private $chomageTotal;

    /**
     * Code ana.
     *
     * @var string|null
     */
    private $codeAna;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code motif rupture.
     *
     * @var string|null
     */
    private $codeMotifRupture;

    /**
     * Code naf2008.
     *
     * @var string|null
     */
    private $codeNaf2008;

    /**
     * Code p.
     *
     * @var string|null
     */
    private $codeP;

    /**
     * Code retraite agirc.
     *
     * @var string|null
     */
    private $codeRetraiteAgirc;

    /**
     * Code retraite arrco.
     *
     * @var string|null
     */
    private $codeRetraiteArrco;

    /**
     * Code retraite autre.
     *
     * @var string|null
     */
    private $codeRetraiteAutre;

    /**
     * Contrat part autre.
     *
     * @var string|null
     */
    private $contratPartAutre;

    /**
     * Contrat particulier.
     *
     * @var string|null
     */
    private $contratParticulier;

    /**
     * Convention fne.
     *
     * @var bool|null
     */
    private $conventionFne;

    /**
     * Date adhesion.
     *
     * @var DateTime|null
     */
    private $dateAdhesion;

    /**
     * Date convention fne.
     *
     * @var DateTime|null
     */
    private $dateConventionFne;

    /**
     * Date naiss.
     *
     * @var DateTime|null
     */
    private $dateNaiss;

    /**
     * Date notification.
     *
     * @var DateTime|null
     */
    private $dateNotification;

    /**
     * Date paie.
     *
     * @var DateTime|null
     */
    private $datePaie;

    /**
     * Date paie2.
     *
     * @var DateTime|null
     */
    private $datePaie2;

    /**
     * Date plan.
     *
     * @var DateTime|null
     */
    private $datePlan;

    /**
     * Demande ddte deb.
     *
     * @var DateTime|null
     */
    private $demandeDdteDeb;

    /**
     * Demande ddte fin.
     *
     * @var DateTime|null
     */
    private $demandeDdteFin;

    /**
     * Demande ddte reprise.
     *
     * @var DateTime|null
     */
    private $demandeDdteReprise;

    /**
     * Dept.
     *
     * @var string|null
     */
    private $dept;

    /**
     * Dern jour trav.
     *
     * @var DateTime|null
     */
    private $dernJourTrav;

    /**
     * Dern lieu travail.
     *
     * @var string|null
     */
    private $dernLieuTravail;

    /**
     * Dernier emploi.
     *
     * @var string|null
     */
    private $dernierEmploi;

    /**
     * Duree emploi1 deb.
     *
     * @var DateTime|null
     */
    private $dureeEmploi1Deb;

    /**
     * Duree emploi1 fin.
     *
     * @var DateTime|null
     */
    private $dureeEmploi1Fin;

    /**
     * Duree emploi2 deb.
     *
     * @var DateTime|null
     */
    private $dureeEmploi2Deb;

    /**
     * Duree emploi2 fin.
     *
     * @var DateTime|null
     */
    private $dureeEmploi2Fin;

    /**
     * Effectif.
     *
     * @var string|null
     */
    private $effectif;

    /**
     * Effectif val.
     *
     * @var float|null
     */
    private $effectifVal;

    /**
     * Emploi collectivite.
     *
     * @var string|null
     */
    private $emploiCollectivite;

    /**
     * Etbl adresse1.
     *
     * @var string|null
     */
    private $etblAdresse1;

    /**
     * Etbl adresse2.
     *
     * @var string|null
     */
    private $etblAdresse2;

    /**
     * Etbl adresse3.
     *
     * @var string|null
     */
    private $etblAdresse3;

    /**
     * Etbl raison sociale.
     *
     * @var string|null
     */
    private $etblRaisonSociale;

    /**
     * Etbl tel.
     *
     * @var string|null
     */
    private $etblTel;

    /**
     * Fngs non a percevoir motif.
     *
     * @var string|null
     */
    private $fngsNonAPercevoirMotif;

    /**
     * Fngs non percue motif.
     *
     * @var string|null
     */
    private $fngsNonPercueMotif;

    /**
     * Fngs percue.
     *
     * @var bool|null
     */
    private $fngsPercue;

    /**
     * Fngs percue creance.
     *
     * @var string|null
     */
    private $fngsPercueCreance;

    /**
     * Fngsa percevoir.
     *
     * @var bool|null
     */
    private $fngsaPercevoir;

    /**
     * Fngsa percevoir creance.
     *
     * @var string|null
     */
    private $fngsaPercevoirCreance;

    /**
     * Heures trav.
     *
     * @var float|null
     */
    private $heuresTrav;

    /**
     * Heures trav2.
     *
     * @var float|null
     */
    private $heuresTrav2;

    /**
     * Horaire annuel etbl.
     *
     * @var float|null
     */
    private $horaireAnnuelEtbl;

    /**
     * Horaire annuel sal.
     *
     * @var float|null
     */
    private $horaireAnnuelSal;

    /**
     * Horaire hebdo etbl.
     *
     * @var float|null
     */
    private $horaireHebdoEtbl;

    /**
     * Horaire hebdo sal.
     *
     * @var float|null
     */
    private $horaireHebdoSal;

    /**
     * Indemn autres.
     *
     * @var float|null
     */
    private $indemnAutres;

    /**
     * Indemn clientele.
     *
     * @var float|null
     */
    private $indemnClientele;

    /**
     * Indemn compens cp.
     *
     * @var float|null
     */
    private $indemnCompensCp;

    /**
     * Indemn compens preavis.
     *
     * @var float|null
     */
    private $indemnCompensPreavis;

    /**
     * Indemn depart retraite.
     *
     * @var float|null
     */
    private $indemnDepartRetraite;

    /**
     * Indemn due sinistre.
     *
     * @var float|null
     */
    private $indemnDueSinistre;

    /**
     * Indemn fin cdd.
     *
     * @var float|null
     */
    private $indemnFinCdd;

    /**
     * Indemn fin cne.
     *
     * @var float|null
     */
    private $indemnFinCne;

    /**
     * Indemn fin mission.
     *
     * @var float|null
     */
    private $indemnFinMission;

    /**
     * Indemn journalistes.
     *
     * @var float|null
     */
    private $indemnJournalistes;

    /**
     * Indemn licens.
     *
     * @var float|null
     */
    private $indemnLicens;

    /**
     * Indemn navig.
     *
     * @var float|null
     */
    private $indemnNavig;

    /**
     * Indemn rupt conv.
     *
     * @var float|null
     */
    private $indemnRuptConv;

    /**
     * Indemn speci licens.
     *
     * @var float|null
     */
    private $indemnSpeciLicens;

    /**
     * Indemn specif licens.
     *
     * @var float|null
     */
    private $indemnSpecifLicens;

    /**
     * Indemn suppl licens.
     *
     * @var float|null
     */
    private $indemnSupplLicens;

    /**
     * Indemn versee apprenti.
     *
     * @var float|null
     */
    private $indemnVerseeApprenti;

    /**
     * Licencie55ans.
     *
     * @var bool|null
     */
    private $licencie55ans;

    /**
     * Licencie plan social.
     *
     * @var bool|null
     */
    private $licenciePlanSocial;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Lien parente.
     *
     * @var string|null
     */
    private $lienParente;

    /**
     * Motif difference.
     *
     * @var string|null
     */
    private $motifDifference;

    /**
     * Motif non paie iccp.
     *
     * @var string|null
     */
    private $motifNonPaieIccp;

    /**
     * Motif non paiement.
     *
     * @var string|null
     */
    private $motifNonPaiement;

    /**
     * Motif rupture.
     *
     * @var string|null
     */
    private $motifRupture;

    /**
     * Mt idemn conv col.
     *
     * @var float|null
     */
    private $mtIdemnConvCol;

    /**
     * Mt idemn transac.
     *
     * @var float|null
     */
    private $mtIdemnTransac;

    /**
     * Naf.
     *
     * @var string|null
     */
    private $naf;

    /**
     * Nature contrat.
     *
     * @var string|null
     */
    private $natureContrat;

    /**
     * Nb jours ouvrables.
     *
     * @var float|null
     */
    private $nbJoursOuvrables;

    /**
     * Nir.
     *
     * @var string|null
     */
    private $nir;

    /**
     * Niveau qualif.
     *
     * @var string|null
     */
    private $niveauQualif;

    /**
     * Nom ass chom.
     *
     * @var string|null
     */
    private $nomAssChom;

    /**
     * Nom employe.
     *
     * @var string|null
     */
    private $nomEmploye;

    /**
     * Nom naissance.
     *
     * @var string|null
     */
    private $nomNaissance;

    /**
     * Nom special secu.
     *
     * @var string|null
     */
    private $nomSpecialSecu;

    /**
     * Nouvelle attest.
     *
     * @var bool|null
     */
    private $nouvelleAttest;

    /**
     * Num ass chom.
     *
     * @var string|null
     */
    private $numAssChom;

    /**
     * Num convention fne.
     *
     * @var string|null
     */
    private $numConventionFne;

    /**
     * Num convention gestion.
     *
     * @var string|null
     */
    private $numConventionGestion;

    /**
     * Num special secu.
     *
     * @var string|null
     */
    private $numSpecialSecu;

    /**
     * Numero attestation.
     *
     * @var string|null
     */
    private $numeroAttestation;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Organisme ass chom.
     *
     * @var string|null
     */
    private $organismeAssChom;

    /**
     * Preavis effectue.
     *
     * @var bool|null
     */
    private $preavisEffectue;

    /**
     * Preavis effectue deb.
     *
     * @var DateTime|null
     */
    private $preavisEffectueDeb;

    /**
     * Preavis effectue fin.
     *
     * @var DateTime|null
     */
    private $preavisEffectueFin;

    /**
     * Preavis effectue paye.
     *
     * @var bool|null
     */
    private $preavisEffectuePaye;

    /**
     * Preavis non effectue.
     *
     * @var bool|null
     */
    private $preavisNonEffectue;

    /**
     * Preavis non effectue deb.
     *
     * @var DateTime|null
     */
    private $preavisNonEffectueDeb;

    /**
     * Preavis non effectue fin.
     *
     * @var DateTime|null
     */
    private $preavisNonEffectueFin;

    /**
     * Preavis non effectue paye.
     *
     * @var bool|null
     */
    private $preavisNonEffectuePaye;

    /**
     * Precompte stc.
     *
     * @var float|null
     */
    private $precompteStc;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Qualite emploi.
     *
     * @var string|null
     */
    private $qualiteEmploi;

    /**
     * Reclassement.
     *
     * @var bool|null
     */
    private $reclassement;

    /**
     * Refus salarie.
     *
     * @var bool|null
     */
    private $refusSalarie;

    /**
     * Retraite agirc.
     *
     * @var string|null
     */
    private $retraiteAgirc;

    /**
     * Retraite agirc compl.
     *
     * @var string|null
     */
    private $retraiteAgircCompl;

    /**
     * Retraite arrco.
     *
     * @var string|null
     */
    private $retraiteArrco;

    /**
     * Retraite arrco compl.
     *
     * @var string|null
     */
    private $retraiteArrcoCompl;

    /**
     * Retraite autre.
     *
     * @var string|null
     */
    private $retraiteAutre;

    /**
     * Retraite autre compl.
     *
     * @var string|null
     */
    private $retraiteAutreCompl;

    /**
     * Salaire brut.
     *
     * @var float|null
     */
    private $salaireBrut;

    /**
     * Signature code qualite.
     *
     * @var string|null
     */
    private $signatureCodeQualite;

    /**
     * Signature contact.
     *
     * @var string|null
     */
    private $signatureContact;

    /**
     * Signature date.
     *
     * @var DateTime|null
     */
    private $signatureDate;

    /**
     * Signature nom.
     *
     * @var string|null
     */
    private $signatureNom;

    /**
     * Signature prenom.
     *
     * @var string|null
     */
    private $signaturePrenom;

    /**
     * Signature qualite.
     *
     * @var string|null
     */
    private $signatureQualite;

    /**
     * Signature tel.
     *
     * @var string|null
     */
    private $signatureTel;

    /**
     * Signature ville.
     *
     * @var string|null
     */
    private $signatureVille;

    /**
     * Siret.
     *
     * @var string|null
     */
    private $siret;

    /**
     * Solde tout compte.
     *
     * @var string|null
     */
    private $soldeToutCompte;

    /**
     * Sommes periode deb.
     *
     * @var DateTime|null
     */
    private $sommesPeriodeDeb;

    /**
     * Sommes periode deb2.
     *
     * @var DateTime|null
     */
    private $sommesPeriodeDeb2;

    /**
     * Sommes periode fin.
     *
     * @var DateTime|null
     */
    private $sommesPeriodeFin;

    /**
     * Sommes periode fin2.
     *
     * @var DateTime|null
     */
    private $sommesPeriodeFin2;

    /**
     * Special secu.
     *
     * @var string|null
     */
    private $specialSecu;

    /**
     * Statut.
     *
     * @var string|null
     */
    private $statut;

    /**
     * Statut cadre.
     *
     * @var bool|null
     */
    private $statutCadre;

    /**
     * Statut part autre.
     *
     * @var string|null
     */
    private $statutPartAutre;

    /**
     * Titre.
     *
     * @var string|null
     */
    private $titre;

    /**
     * Total sommes.
     *
     * @var float|null
     */
    private $totalSommes;

    /**
     * Transaction en cours.
     *
     * @var bool|null
     */
    private $transactionEnCours;

    /**
     * Type assedic.
     *
     * @var string|null
     */
    private $typeAssedic;

    /**
     * Type diff horaire.
     *
     * @var string|null
     */
    private $typeDiffHoraire;

    /**
     * Type societe.
     *
     * @var string|null
     */
    private $typeSociete;

    /**
     * Urssaf.
     *
     * @var string|null
     */
    private $urssaf;

    /**
     * Validite convention fne.
     *
     * @var DateTime|null
     */
    private $validiteConventionFne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adhesion aides.
     *
     * @return bool|null Returns the adhesion aides.
     */
    public function getAdhesionAides(): ?bool {
        return $this->adhesionAides;
    }

    /**
     * Get the adhesion revocable.
     *
     * @return bool|null Returns the adhesion revocable.
     */
    public function getAdhesionRevocable(): ?bool {
        return $this->adhesionRevocable;
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
     * Get the alsace moselle.
     *
     * @return bool|null Returns the alsace moselle.
     */
    public function getAlsaceMoselle(): ?bool {
        return $this->alsaceMoselle;
    }

    /**
     * Get the auto assurance.
     *
     * @return bool|null Returns the auto assurance.
     */
    public function getAutoAssurance(): ?bool {
        return $this->autoAssurance;
    }

    /**
     * Get the caisse indemcp.
     *
     * @return string|null Returns the caisse indemcp.
     */
    public function getCaisseIndemcp(): ?string {
        return $this->caisseIndemcp;
    }

    /**
     * Get the categ emploi autre.
     *
     * @return string|null Returns the categ emploi autre.
     */
    public function getCategEmploiAutre(): ?string {
        return $this->categEmploiAutre;
    }

    /**
     * Get the chomage total.
     *
     * @return bool|null Returns the chomage total.
     */
    public function getChomageTotal(): ?bool {
        return $this->chomageTotal;
    }

    /**
     * Get the code ana.
     *
     * @return string|null Returns the code ana.
     */
    public function getCodeAna(): ?string {
        return $this->codeAna;
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
     * Get the code motif rupture.
     *
     * @return string|null Returns the code motif rupture.
     */
    public function getCodeMotifRupture(): ?string {
        return $this->codeMotifRupture;
    }

    /**
     * Get the code naf2008.
     *
     * @return string|null Returns the code naf2008.
     */
    public function getCodeNaf2008(): ?string {
        return $this->codeNaf2008;
    }

    /**
     * Get the code p.
     *
     * @return string|null Returns the code p.
     */
    public function getCodeP(): ?string {
        return $this->codeP;
    }

    /**
     * Get the code retraite agirc.
     *
     * @return string|null Returns the code retraite agirc.
     */
    public function getCodeRetraiteAgirc(): ?string {
        return $this->codeRetraiteAgirc;
    }

    /**
     * Get the code retraite arrco.
     *
     * @return string|null Returns the code retraite arrco.
     */
    public function getCodeRetraiteArrco(): ?string {
        return $this->codeRetraiteArrco;
    }

    /**
     * Get the code retraite autre.
     *
     * @return string|null Returns the code retraite autre.
     */
    public function getCodeRetraiteAutre(): ?string {
        return $this->codeRetraiteAutre;
    }

    /**
     * Get the contrat part autre.
     *
     * @return string|null Returns the contrat part autre.
     */
    public function getContratPartAutre(): ?string {
        return $this->contratPartAutre;
    }

    /**
     * Get the contrat particulier.
     *
     * @return string|null Returns the contrat particulier.
     */
    public function getContratParticulier(): ?string {
        return $this->contratParticulier;
    }

    /**
     * Get the convention fne.
     *
     * @return bool|null Returns the convention fne.
     */
    public function getConventionFne(): ?bool {
        return $this->conventionFne;
    }

    /**
     * Get the date adhesion.
     *
     * @return DateTime|null Returns the date adhesion.
     */
    public function getDateAdhesion(): ?DateTime {
        return $this->dateAdhesion;
    }

    /**
     * Get the date convention fne.
     *
     * @return DateTime|null Returns the date convention fne.
     */
    public function getDateConventionFne(): ?DateTime {
        return $this->dateConventionFne;
    }

    /**
     * Get the date naiss.
     *
     * @return DateTime|null Returns the date naiss.
     */
    public function getDateNaiss(): ?DateTime {
        return $this->dateNaiss;
    }

    /**
     * Get the date notification.
     *
     * @return DateTime|null Returns the date notification.
     */
    public function getDateNotification(): ?DateTime {
        return $this->dateNotification;
    }

    /**
     * Get the date paie.
     *
     * @return DateTime|null Returns the date paie.
     */
    public function getDatePaie(): ?DateTime {
        return $this->datePaie;
    }

    /**
     * Get the date paie2.
     *
     * @return DateTime|null Returns the date paie2.
     */
    public function getDatePaie2(): ?DateTime {
        return $this->datePaie2;
    }

    /**
     * Get the date plan.
     *
     * @return DateTime|null Returns the date plan.
     */
    public function getDatePlan(): ?DateTime {
        return $this->datePlan;
    }

    /**
     * Get the demande ddte deb.
     *
     * @return DateTime|null Returns the demande ddte deb.
     */
    public function getDemandeDdteDeb(): ?DateTime {
        return $this->demandeDdteDeb;
    }

    /**
     * Get the demande ddte fin.
     *
     * @return DateTime|null Returns the demande ddte fin.
     */
    public function getDemandeDdteFin(): ?DateTime {
        return $this->demandeDdteFin;
    }

    /**
     * Get the demande ddte reprise.
     *
     * @return DateTime|null Returns the demande ddte reprise.
     */
    public function getDemandeDdteReprise(): ?DateTime {
        return $this->demandeDdteReprise;
    }

    /**
     * Get the dept.
     *
     * @return string|null Returns the dept.
     */
    public function getDept(): ?string {
        return $this->dept;
    }

    /**
     * Get the dern jour trav.
     *
     * @return DateTime|null Returns the dern jour trav.
     */
    public function getDernJourTrav(): ?DateTime {
        return $this->dernJourTrav;
    }

    /**
     * Get the dern lieu travail.
     *
     * @return string|null Returns the dern lieu travail.
     */
    public function getDernLieuTravail(): ?string {
        return $this->dernLieuTravail;
    }

    /**
     * Get the dernier emploi.
     *
     * @return string|null Returns the dernier emploi.
     */
    public function getDernierEmploi(): ?string {
        return $this->dernierEmploi;
    }

    /**
     * Get the duree emploi1 deb.
     *
     * @return DateTime|null Returns the duree emploi1 deb.
     */
    public function getDureeEmploi1Deb(): ?DateTime {
        return $this->dureeEmploi1Deb;
    }

    /**
     * Get the duree emploi1 fin.
     *
     * @return DateTime|null Returns the duree emploi1 fin.
     */
    public function getDureeEmploi1Fin(): ?DateTime {
        return $this->dureeEmploi1Fin;
    }

    /**
     * Get the duree emploi2 deb.
     *
     * @return DateTime|null Returns the duree emploi2 deb.
     */
    public function getDureeEmploi2Deb(): ?DateTime {
        return $this->dureeEmploi2Deb;
    }

    /**
     * Get the duree emploi2 fin.
     *
     * @return DateTime|null Returns the duree emploi2 fin.
     */
    public function getDureeEmploi2Fin(): ?DateTime {
        return $this->dureeEmploi2Fin;
    }

    /**
     * Get the effectif.
     *
     * @return string|null Returns the effectif.
     */
    public function getEffectif(): ?string {
        return $this->effectif;
    }

    /**
     * Get the effectif val.
     *
     * @return float|null Returns the effectif val.
     */
    public function getEffectifVal(): ?float {
        return $this->effectifVal;
    }

    /**
     * Get the emploi collectivite.
     *
     * @return string|null Returns the emploi collectivite.
     */
    public function getEmploiCollectivite(): ?string {
        return $this->emploiCollectivite;
    }

    /**
     * Get the etbl adresse1.
     *
     * @return string|null Returns the etbl adresse1.
     */
    public function getEtblAdresse1(): ?string {
        return $this->etblAdresse1;
    }

    /**
     * Get the etbl adresse2.
     *
     * @return string|null Returns the etbl adresse2.
     */
    public function getEtblAdresse2(): ?string {
        return $this->etblAdresse2;
    }

    /**
     * Get the etbl adresse3.
     *
     * @return string|null Returns the etbl adresse3.
     */
    public function getEtblAdresse3(): ?string {
        return $this->etblAdresse3;
    }

    /**
     * Get the etbl raison sociale.
     *
     * @return string|null Returns the etbl raison sociale.
     */
    public function getEtblRaisonSociale(): ?string {
        return $this->etblRaisonSociale;
    }

    /**
     * Get the etbl tel.
     *
     * @return string|null Returns the etbl tel.
     */
    public function getEtblTel(): ?string {
        return $this->etblTel;
    }

    /**
     * Get the fngs non a percevoir motif.
     *
     * @return string|null Returns the fngs non a percevoir motif.
     */
    public function getFngsNonAPercevoirMotif(): ?string {
        return $this->fngsNonAPercevoirMotif;
    }

    /**
     * Get the fngs non percue motif.
     *
     * @return string|null Returns the fngs non percue motif.
     */
    public function getFngsNonPercueMotif(): ?string {
        return $this->fngsNonPercueMotif;
    }

    /**
     * Get the fngs percue.
     *
     * @return bool|null Returns the fngs percue.
     */
    public function getFngsPercue(): ?bool {
        return $this->fngsPercue;
    }

    /**
     * Get the fngs percue creance.
     *
     * @return string|null Returns the fngs percue creance.
     */
    public function getFngsPercueCreance(): ?string {
        return $this->fngsPercueCreance;
    }

    /**
     * Get the fngsa percevoir.
     *
     * @return bool|null Returns the fngsa percevoir.
     */
    public function getFngsaPercevoir(): ?bool {
        return $this->fngsaPercevoir;
    }

    /**
     * Get the fngsa percevoir creance.
     *
     * @return string|null Returns the fngsa percevoir creance.
     */
    public function getFngsaPercevoirCreance(): ?string {
        return $this->fngsaPercevoirCreance;
    }

    /**
     * Get the heures trav.
     *
     * @return float|null Returns the heures trav.
     */
    public function getHeuresTrav(): ?float {
        return $this->heuresTrav;
    }

    /**
     * Get the heures trav2.
     *
     * @return float|null Returns the heures trav2.
     */
    public function getHeuresTrav2(): ?float {
        return $this->heuresTrav2;
    }

    /**
     * Get the horaire annuel etbl.
     *
     * @return float|null Returns the horaire annuel etbl.
     */
    public function getHoraireAnnuelEtbl(): ?float {
        return $this->horaireAnnuelEtbl;
    }

    /**
     * Get the horaire annuel sal.
     *
     * @return float|null Returns the horaire annuel sal.
     */
    public function getHoraireAnnuelSal(): ?float {
        return $this->horaireAnnuelSal;
    }

    /**
     * Get the horaire hebdo etbl.
     *
     * @return float|null Returns the horaire hebdo etbl.
     */
    public function getHoraireHebdoEtbl(): ?float {
        return $this->horaireHebdoEtbl;
    }

    /**
     * Get the horaire hebdo sal.
     *
     * @return float|null Returns the horaire hebdo sal.
     */
    public function getHoraireHebdoSal(): ?float {
        return $this->horaireHebdoSal;
    }

    /**
     * Get the indemn autres.
     *
     * @return float|null Returns the indemn autres.
     */
    public function getIndemnAutres(): ?float {
        return $this->indemnAutres;
    }

    /**
     * Get the indemn clientele.
     *
     * @return float|null Returns the indemn clientele.
     */
    public function getIndemnClientele(): ?float {
        return $this->indemnClientele;
    }

    /**
     * Get the indemn compens cp.
     *
     * @return float|null Returns the indemn compens cp.
     */
    public function getIndemnCompensCp(): ?float {
        return $this->indemnCompensCp;
    }

    /**
     * Get the indemn compens preavis.
     *
     * @return float|null Returns the indemn compens preavis.
     */
    public function getIndemnCompensPreavis(): ?float {
        return $this->indemnCompensPreavis;
    }

    /**
     * Get the indemn depart retraite.
     *
     * @return float|null Returns the indemn depart retraite.
     */
    public function getIndemnDepartRetraite(): ?float {
        return $this->indemnDepartRetraite;
    }

    /**
     * Get the indemn due sinistre.
     *
     * @return float|null Returns the indemn due sinistre.
     */
    public function getIndemnDueSinistre(): ?float {
        return $this->indemnDueSinistre;
    }

    /**
     * Get the indemn fin cdd.
     *
     * @return float|null Returns the indemn fin cdd.
     */
    public function getIndemnFinCdd(): ?float {
        return $this->indemnFinCdd;
    }

    /**
     * Get the indemn fin cne.
     *
     * @return float|null Returns the indemn fin cne.
     */
    public function getIndemnFinCne(): ?float {
        return $this->indemnFinCne;
    }

    /**
     * Get the indemn fin mission.
     *
     * @return float|null Returns the indemn fin mission.
     */
    public function getIndemnFinMission(): ?float {
        return $this->indemnFinMission;
    }

    /**
     * Get the indemn journalistes.
     *
     * @return float|null Returns the indemn journalistes.
     */
    public function getIndemnJournalistes(): ?float {
        return $this->indemnJournalistes;
    }

    /**
     * Get the indemn licens.
     *
     * @return float|null Returns the indemn licens.
     */
    public function getIndemnLicens(): ?float {
        return $this->indemnLicens;
    }

    /**
     * Get the indemn navig.
     *
     * @return float|null Returns the indemn navig.
     */
    public function getIndemnNavig(): ?float {
        return $this->indemnNavig;
    }

    /**
     * Get the indemn rupt conv.
     *
     * @return float|null Returns the indemn rupt conv.
     */
    public function getIndemnRuptConv(): ?float {
        return $this->indemnRuptConv;
    }

    /**
     * Get the indemn speci licens.
     *
     * @return float|null Returns the indemn speci licens.
     */
    public function getIndemnSpeciLicens(): ?float {
        return $this->indemnSpeciLicens;
    }

    /**
     * Get the indemn specif licens.
     *
     * @return float|null Returns the indemn specif licens.
     */
    public function getIndemnSpecifLicens(): ?float {
        return $this->indemnSpecifLicens;
    }

    /**
     * Get the indemn suppl licens.
     *
     * @return float|null Returns the indemn suppl licens.
     */
    public function getIndemnSupplLicens(): ?float {
        return $this->indemnSupplLicens;
    }

    /**
     * Get the indemn versee apprenti.
     *
     * @return float|null Returns the indemn versee apprenti.
     */
    public function getIndemnVerseeApprenti(): ?float {
        return $this->indemnVerseeApprenti;
    }

    /**
     * Get the licencie55ans.
     *
     * @return bool|null Returns the licencie55ans.
     */
    public function getLicencie55ans(): ?bool {
        return $this->licencie55ans;
    }

    /**
     * Get the licencie plan social.
     *
     * @return bool|null Returns the licencie plan social.
     */
    public function getLicenciePlanSocial(): ?bool {
        return $this->licenciePlanSocial;
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
     * Get the lien parente.
     *
     * @return string|null Returns the lien parente.
     */
    public function getLienParente(): ?string {
        return $this->lienParente;
    }

    /**
     * Get the motif difference.
     *
     * @return string|null Returns the motif difference.
     */
    public function getMotifDifference(): ?string {
        return $this->motifDifference;
    }

    /**
     * Get the motif non paie iccp.
     *
     * @return string|null Returns the motif non paie iccp.
     */
    public function getMotifNonPaieIccp(): ?string {
        return $this->motifNonPaieIccp;
    }

    /**
     * Get the motif non paiement.
     *
     * @return string|null Returns the motif non paiement.
     */
    public function getMotifNonPaiement(): ?string {
        return $this->motifNonPaiement;
    }

    /**
     * Get the motif rupture.
     *
     * @return string|null Returns the motif rupture.
     */
    public function getMotifRupture(): ?string {
        return $this->motifRupture;
    }

    /**
     * Get the mt idemn conv col.
     *
     * @return float|null Returns the mt idemn conv col.
     */
    public function getMtIdemnConvCol(): ?float {
        return $this->mtIdemnConvCol;
    }

    /**
     * Get the mt idemn transac.
     *
     * @return float|null Returns the mt idemn transac.
     */
    public function getMtIdemnTransac(): ?float {
        return $this->mtIdemnTransac;
    }

    /**
     * Get the naf.
     *
     * @return string|null Returns the naf.
     */
    public function getNaf(): ?string {
        return $this->naf;
    }

    /**
     * Get the nature contrat.
     *
     * @return string|null Returns the nature contrat.
     */
    public function getNatureContrat(): ?string {
        return $this->natureContrat;
    }

    /**
     * Get the nb jours ouvrables.
     *
     * @return float|null Returns the nb jours ouvrables.
     */
    public function getNbJoursOuvrables(): ?float {
        return $this->nbJoursOuvrables;
    }

    /**
     * Get the nir.
     *
     * @return string|null Returns the nir.
     */
    public function getNir(): ?string {
        return $this->nir;
    }

    /**
     * Get the niveau qualif.
     *
     * @return string|null Returns the niveau qualif.
     */
    public function getNiveauQualif(): ?string {
        return $this->niveauQualif;
    }

    /**
     * Get the nom ass chom.
     *
     * @return string|null Returns the nom ass chom.
     */
    public function getNomAssChom(): ?string {
        return $this->nomAssChom;
    }

    /**
     * Get the nom employe.
     *
     * @return string|null Returns the nom employe.
     */
    public function getNomEmploye(): ?string {
        return $this->nomEmploye;
    }

    /**
     * Get the nom naissance.
     *
     * @return string|null Returns the nom naissance.
     */
    public function getNomNaissance(): ?string {
        return $this->nomNaissance;
    }

    /**
     * Get the nom special secu.
     *
     * @return string|null Returns the nom special secu.
     */
    public function getNomSpecialSecu(): ?string {
        return $this->nomSpecialSecu;
    }

    /**
     * Get the nouvelle attest.
     *
     * @return bool|null Returns the nouvelle attest.
     */
    public function getNouvelleAttest(): ?bool {
        return $this->nouvelleAttest;
    }

    /**
     * Get the num ass chom.
     *
     * @return string|null Returns the num ass chom.
     */
    public function getNumAssChom(): ?string {
        return $this->numAssChom;
    }

    /**
     * Get the num convention fne.
     *
     * @return string|null Returns the num convention fne.
     */
    public function getNumConventionFne(): ?string {
        return $this->numConventionFne;
    }

    /**
     * Get the num convention gestion.
     *
     * @return string|null Returns the num convention gestion.
     */
    public function getNumConventionGestion(): ?string {
        return $this->numConventionGestion;
    }

    /**
     * Get the num special secu.
     *
     * @return string|null Returns the num special secu.
     */
    public function getNumSpecialSecu(): ?string {
        return $this->numSpecialSecu;
    }

    /**
     * Get the numero attestation.
     *
     * @return string|null Returns the numero attestation.
     */
    public function getNumeroAttestation(): ?string {
        return $this->numeroAttestation;
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
     * Get the organisme ass chom.
     *
     * @return string|null Returns the organisme ass chom.
     */
    public function getOrganismeAssChom(): ?string {
        return $this->organismeAssChom;
    }

    /**
     * Get the preavis effectue.
     *
     * @return bool|null Returns the preavis effectue.
     */
    public function getPreavisEffectue(): ?bool {
        return $this->preavisEffectue;
    }

    /**
     * Get the preavis effectue deb.
     *
     * @return DateTime|null Returns the preavis effectue deb.
     */
    public function getPreavisEffectueDeb(): ?DateTime {
        return $this->preavisEffectueDeb;
    }

    /**
     * Get the preavis effectue fin.
     *
     * @return DateTime|null Returns the preavis effectue fin.
     */
    public function getPreavisEffectueFin(): ?DateTime {
        return $this->preavisEffectueFin;
    }

    /**
     * Get the preavis effectue paye.
     *
     * @return bool|null Returns the preavis effectue paye.
     */
    public function getPreavisEffectuePaye(): ?bool {
        return $this->preavisEffectuePaye;
    }

    /**
     * Get the preavis non effectue.
     *
     * @return bool|null Returns the preavis non effectue.
     */
    public function getPreavisNonEffectue(): ?bool {
        return $this->preavisNonEffectue;
    }

    /**
     * Get the preavis non effectue deb.
     *
     * @return DateTime|null Returns the preavis non effectue deb.
     */
    public function getPreavisNonEffectueDeb(): ?DateTime {
        return $this->preavisNonEffectueDeb;
    }

    /**
     * Get the preavis non effectue fin.
     *
     * @return DateTime|null Returns the preavis non effectue fin.
     */
    public function getPreavisNonEffectueFin(): ?DateTime {
        return $this->preavisNonEffectueFin;
    }

    /**
     * Get the preavis non effectue paye.
     *
     * @return bool|null Returns the preavis non effectue paye.
     */
    public function getPreavisNonEffectuePaye(): ?bool {
        return $this->preavisNonEffectuePaye;
    }

    /**
     * Get the precompte stc.
     *
     * @return float|null Returns the precompte stc.
     */
    public function getPrecompteStc(): ?float {
        return $this->precompteStc;
    }

    /**
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getPrenom(): ?string {
        return $this->prenom;
    }

    /**
     * Get the qualite emploi.
     *
     * @return string|null Returns the qualite emploi.
     */
    public function getQualiteEmploi(): ?string {
        return $this->qualiteEmploi;
    }

    /**
     * Get the reclassement.
     *
     * @return bool|null Returns the reclassement.
     */
    public function getReclassement(): ?bool {
        return $this->reclassement;
    }

    /**
     * Get the refus salarie.
     *
     * @return bool|null Returns the refus salarie.
     */
    public function getRefusSalarie(): ?bool {
        return $this->refusSalarie;
    }

    /**
     * Get the retraite agirc.
     *
     * @return string|null Returns the retraite agirc.
     */
    public function getRetraiteAgirc(): ?string {
        return $this->retraiteAgirc;
    }

    /**
     * Get the retraite agirc compl.
     *
     * @return string|null Returns the retraite agirc compl.
     */
    public function getRetraiteAgircCompl(): ?string {
        return $this->retraiteAgircCompl;
    }

    /**
     * Get the retraite arrco.
     *
     * @return string|null Returns the retraite arrco.
     */
    public function getRetraiteArrco(): ?string {
        return $this->retraiteArrco;
    }

    /**
     * Get the retraite arrco compl.
     *
     * @return string|null Returns the retraite arrco compl.
     */
    public function getRetraiteArrcoCompl(): ?string {
        return $this->retraiteArrcoCompl;
    }

    /**
     * Get the retraite autre.
     *
     * @return string|null Returns the retraite autre.
     */
    public function getRetraiteAutre(): ?string {
        return $this->retraiteAutre;
    }

    /**
     * Get the retraite autre compl.
     *
     * @return string|null Returns the retraite autre compl.
     */
    public function getRetraiteAutreCompl(): ?string {
        return $this->retraiteAutreCompl;
    }

    /**
     * Get the salaire brut.
     *
     * @return float|null Returns the salaire brut.
     */
    public function getSalaireBrut(): ?float {
        return $this->salaireBrut;
    }

    /**
     * Get the signature code qualite.
     *
     * @return string|null Returns the signature code qualite.
     */
    public function getSignatureCodeQualite(): ?string {
        return $this->signatureCodeQualite;
    }

    /**
     * Get the signature contact.
     *
     * @return string|null Returns the signature contact.
     */
    public function getSignatureContact(): ?string {
        return $this->signatureContact;
    }

    /**
     * Get the signature date.
     *
     * @return DateTime|null Returns the signature date.
     */
    public function getSignatureDate(): ?DateTime {
        return $this->signatureDate;
    }

    /**
     * Get the signature nom.
     *
     * @return string|null Returns the signature nom.
     */
    public function getSignatureNom(): ?string {
        return $this->signatureNom;
    }

    /**
     * Get the signature prenom.
     *
     * @return string|null Returns the signature prenom.
     */
    public function getSignaturePrenom(): ?string {
        return $this->signaturePrenom;
    }

    /**
     * Get the signature qualite.
     *
     * @return string|null Returns the signature qualite.
     */
    public function getSignatureQualite(): ?string {
        return $this->signatureQualite;
    }

    /**
     * Get the signature tel.
     *
     * @return string|null Returns the signature tel.
     */
    public function getSignatureTel(): ?string {
        return $this->signatureTel;
    }

    /**
     * Get the signature ville.
     *
     * @return string|null Returns the signature ville.
     */
    public function getSignatureVille(): ?string {
        return $this->signatureVille;
    }

    /**
     * Get the siret.
     *
     * @return string|null Returns the siret.
     */
    public function getSiret(): ?string {
        return $this->siret;
    }

    /**
     * Get the solde tout compte.
     *
     * @return string|null Returns the solde tout compte.
     */
    public function getSoldeToutCompte(): ?string {
        return $this->soldeToutCompte;
    }

    /**
     * Get the sommes periode deb.
     *
     * @return DateTime|null Returns the sommes periode deb.
     */
    public function getSommesPeriodeDeb(): ?DateTime {
        return $this->sommesPeriodeDeb;
    }

    /**
     * Get the sommes periode deb2.
     *
     * @return DateTime|null Returns the sommes periode deb2.
     */
    public function getSommesPeriodeDeb2(): ?DateTime {
        return $this->sommesPeriodeDeb2;
    }

    /**
     * Get the sommes periode fin.
     *
     * @return DateTime|null Returns the sommes periode fin.
     */
    public function getSommesPeriodeFin(): ?DateTime {
        return $this->sommesPeriodeFin;
    }

    /**
     * Get the sommes periode fin2.
     *
     * @return DateTime|null Returns the sommes periode fin2.
     */
    public function getSommesPeriodeFin2(): ?DateTime {
        return $this->sommesPeriodeFin2;
    }

    /**
     * Get the special secu.
     *
     * @return string|null Returns the special secu.
     */
    public function getSpecialSecu(): ?string {
        return $this->specialSecu;
    }

    /**
     * Get the statut.
     *
     * @return string|null Returns the statut.
     */
    public function getStatut(): ?string {
        return $this->statut;
    }

    /**
     * Get the statut cadre.
     *
     * @return bool|null Returns the statut cadre.
     */
    public function getStatutCadre(): ?bool {
        return $this->statutCadre;
    }

    /**
     * Get the statut part autre.
     *
     * @return string|null Returns the statut part autre.
     */
    public function getStatutPartAutre(): ?string {
        return $this->statutPartAutre;
    }

    /**
     * Get the titre.
     *
     * @return string|null Returns the titre.
     */
    public function getTitre(): ?string {
        return $this->titre;
    }

    /**
     * Get the total sommes.
     *
     * @return float|null Returns the total sommes.
     */
    public function getTotalSommes(): ?float {
        return $this->totalSommes;
    }

    /**
     * Get the transaction en cours.
     *
     * @return bool|null Returns the transaction en cours.
     */
    public function getTransactionEnCours(): ?bool {
        return $this->transactionEnCours;
    }

    /**
     * Get the type assedic.
     *
     * @return string|null Returns the type assedic.
     */
    public function getTypeAssedic(): ?string {
        return $this->typeAssedic;
    }

    /**
     * Get the type diff horaire.
     *
     * @return string|null Returns the type diff horaire.
     */
    public function getTypeDiffHoraire(): ?string {
        return $this->typeDiffHoraire;
    }

    /**
     * Get the type societe.
     *
     * @return string|null Returns the type societe.
     */
    public function getTypeSociete(): ?string {
        return $this->typeSociete;
    }

    /**
     * Get the urssaf.
     *
     * @return string|null Returns the urssaf.
     */
    public function getUrssaf(): ?string {
        return $this->urssaf;
    }

    /**
     * Get the validite convention fne.
     *
     * @return DateTime|null Returns the validite convention fne.
     */
    public function getValiditeConventionFne(): ?DateTime {
        return $this->validiteConventionFne;
    }

    /**
     * Set the adhesion aides.
     *
     * @param bool|null $adhesionAides The adhesion aides.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setAdhesionAides(?bool $adhesionAides): AttestationAssedic {
        $this->adhesionAides = $adhesionAides;
        return $this;
    }

    /**
     * Set the adhesion revocable.
     *
     * @param bool|null $adhesionRevocable The adhesion revocable.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setAdhesionRevocable(?bool $adhesionRevocable): AttestationAssedic {
        $this->adhesionRevocable = $adhesionRevocable;
        return $this;
    }

    /**
     * Set the adresse1.
     *
     * @param string|null $adresse1 The adresse1.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setAdresse1(?string $adresse1): AttestationAssedic {
        $this->adresse1 = $adresse1;
        return $this;
    }

    /**
     * Set the adresse2.
     *
     * @param string|null $adresse2 The adresse2.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setAdresse2(?string $adresse2): AttestationAssedic {
        $this->adresse2 = $adresse2;
        return $this;
    }

    /**
     * Set the adresse3.
     *
     * @param string|null $adresse3 The adresse3.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setAdresse3(?string $adresse3): AttestationAssedic {
        $this->adresse3 = $adresse3;
        return $this;
    }

    /**
     * Set the alsace moselle.
     *
     * @param bool|null $alsaceMoselle The alsace moselle.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setAlsaceMoselle(?bool $alsaceMoselle): AttestationAssedic {
        $this->alsaceMoselle = $alsaceMoselle;
        return $this;
    }

    /**
     * Set the auto assurance.
     *
     * @param bool|null $autoAssurance The auto assurance.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setAutoAssurance(?bool $autoAssurance): AttestationAssedic {
        $this->autoAssurance = $autoAssurance;
        return $this;
    }

    /**
     * Set the caisse indemcp.
     *
     * @param string|null $caisseIndemcp The caisse indemcp.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setCaisseIndemcp(?string $caisseIndemcp): AttestationAssedic {
        $this->caisseIndemcp = $caisseIndemcp;
        return $this;
    }

    /**
     * Set the categ emploi autre.
     *
     * @param string|null $categEmploiAutre The categ emploi autre.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setCategEmploiAutre(?string $categEmploiAutre): AttestationAssedic {
        $this->categEmploiAutre = $categEmploiAutre;
        return $this;
    }

    /**
     * Set the chomage total.
     *
     * @param bool|null $chomageTotal The chomage total.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setChomageTotal(?bool $chomageTotal): AttestationAssedic {
        $this->chomageTotal = $chomageTotal;
        return $this;
    }

    /**
     * Set the code ana.
     *
     * @param string|null $codeAna The code ana.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setCodeAna(?string $codeAna): AttestationAssedic {
        $this->codeAna = $codeAna;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setCodeEtablissement(?int $codeEtablissement): AttestationAssedic {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string|null $codeMotifRupture The code motif rupture.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setCodeMotifRupture(?string $codeMotifRupture): AttestationAssedic {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }

    /**
     * Set the code naf2008.
     *
     * @param string|null $codeNaf2008 The code naf2008.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setCodeNaf2008(?string $codeNaf2008): AttestationAssedic {
        $this->codeNaf2008 = $codeNaf2008;
        return $this;
    }

    /**
     * Set the code p.
     *
     * @param string|null $codeP The code p.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setCodeP(?string $codeP): AttestationAssedic {
        $this->codeP = $codeP;
        return $this;
    }

    /**
     * Set the code retraite agirc.
     *
     * @param string|null $codeRetraiteAgirc The code retraite agirc.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setCodeRetraiteAgirc(?string $codeRetraiteAgirc): AttestationAssedic {
        $this->codeRetraiteAgirc = $codeRetraiteAgirc;
        return $this;
    }

    /**
     * Set the code retraite arrco.
     *
     * @param string|null $codeRetraiteArrco The code retraite arrco.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setCodeRetraiteArrco(?string $codeRetraiteArrco): AttestationAssedic {
        $this->codeRetraiteArrco = $codeRetraiteArrco;
        return $this;
    }

    /**
     * Set the code retraite autre.
     *
     * @param string|null $codeRetraiteAutre The code retraite autre.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setCodeRetraiteAutre(?string $codeRetraiteAutre): AttestationAssedic {
        $this->codeRetraiteAutre = $codeRetraiteAutre;
        return $this;
    }

    /**
     * Set the contrat part autre.
     *
     * @param string|null $contratPartAutre The contrat part autre.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setContratPartAutre(?string $contratPartAutre): AttestationAssedic {
        $this->contratPartAutre = $contratPartAutre;
        return $this;
    }

    /**
     * Set the contrat particulier.
     *
     * @param string|null $contratParticulier The contrat particulier.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setContratParticulier(?string $contratParticulier): AttestationAssedic {
        $this->contratParticulier = $contratParticulier;
        return $this;
    }

    /**
     * Set the convention fne.
     *
     * @param bool|null $conventionFne The convention fne.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setConventionFne(?bool $conventionFne): AttestationAssedic {
        $this->conventionFne = $conventionFne;
        return $this;
    }

    /**
     * Set the date adhesion.
     *
     * @param DateTime|null $dateAdhesion The date adhesion.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDateAdhesion(?DateTime $dateAdhesion): AttestationAssedic {
        $this->dateAdhesion = $dateAdhesion;
        return $this;
    }

    /**
     * Set the date convention fne.
     *
     * @param DateTime|null $dateConventionFne The date convention fne.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDateConventionFne(?DateTime $dateConventionFne): AttestationAssedic {
        $this->dateConventionFne = $dateConventionFne;
        return $this;
    }

    /**
     * Set the date naiss.
     *
     * @param DateTime|null $dateNaiss The date naiss.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDateNaiss(?DateTime $dateNaiss): AttestationAssedic {
        $this->dateNaiss = $dateNaiss;
        return $this;
    }

    /**
     * Set the date notification.
     *
     * @param DateTime|null $dateNotification The date notification.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDateNotification(?DateTime $dateNotification): AttestationAssedic {
        $this->dateNotification = $dateNotification;
        return $this;
    }

    /**
     * Set the date paie.
     *
     * @param DateTime|null $datePaie The date paie.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDatePaie(?DateTime $datePaie): AttestationAssedic {
        $this->datePaie = $datePaie;
        return $this;
    }

    /**
     * Set the date paie2.
     *
     * @param DateTime|null $datePaie2 The date paie2.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDatePaie2(?DateTime $datePaie2): AttestationAssedic {
        $this->datePaie2 = $datePaie2;
        return $this;
    }

    /**
     * Set the date plan.
     *
     * @param DateTime|null $datePlan The date plan.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDatePlan(?DateTime $datePlan): AttestationAssedic {
        $this->datePlan = $datePlan;
        return $this;
    }

    /**
     * Set the demande ddte deb.
     *
     * @param DateTime|null $demandeDdteDeb The demande ddte deb.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDemandeDdteDeb(?DateTime $demandeDdteDeb): AttestationAssedic {
        $this->demandeDdteDeb = $demandeDdteDeb;
        return $this;
    }

    /**
     * Set the demande ddte fin.
     *
     * @param DateTime|null $demandeDdteFin The demande ddte fin.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDemandeDdteFin(?DateTime $demandeDdteFin): AttestationAssedic {
        $this->demandeDdteFin = $demandeDdteFin;
        return $this;
    }

    /**
     * Set the demande ddte reprise.
     *
     * @param DateTime|null $demandeDdteReprise The demande ddte reprise.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDemandeDdteReprise(?DateTime $demandeDdteReprise): AttestationAssedic {
        $this->demandeDdteReprise = $demandeDdteReprise;
        return $this;
    }

    /**
     * Set the dept.
     *
     * @param string|null $dept The dept.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDept(?string $dept): AttestationAssedic {
        $this->dept = $dept;
        return $this;
    }

    /**
     * Set the dern jour trav.
     *
     * @param DateTime|null $dernJourTrav The dern jour trav.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDernJourTrav(?DateTime $dernJourTrav): AttestationAssedic {
        $this->dernJourTrav = $dernJourTrav;
        return $this;
    }

    /**
     * Set the dern lieu travail.
     *
     * @param string|null $dernLieuTravail The dern lieu travail.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDernLieuTravail(?string $dernLieuTravail): AttestationAssedic {
        $this->dernLieuTravail = $dernLieuTravail;
        return $this;
    }

    /**
     * Set the dernier emploi.
     *
     * @param string|null $dernierEmploi The dernier emploi.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDernierEmploi(?string $dernierEmploi): AttestationAssedic {
        $this->dernierEmploi = $dernierEmploi;
        return $this;
    }

    /**
     * Set the duree emploi1 deb.
     *
     * @param DateTime|null $dureeEmploi1Deb The duree emploi1 deb.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDureeEmploi1Deb(?DateTime $dureeEmploi1Deb): AttestationAssedic {
        $this->dureeEmploi1Deb = $dureeEmploi1Deb;
        return $this;
    }

    /**
     * Set the duree emploi1 fin.
     *
     * @param DateTime|null $dureeEmploi1Fin The duree emploi1 fin.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDureeEmploi1Fin(?DateTime $dureeEmploi1Fin): AttestationAssedic {
        $this->dureeEmploi1Fin = $dureeEmploi1Fin;
        return $this;
    }

    /**
     * Set the duree emploi2 deb.
     *
     * @param DateTime|null $dureeEmploi2Deb The duree emploi2 deb.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDureeEmploi2Deb(?DateTime $dureeEmploi2Deb): AttestationAssedic {
        $this->dureeEmploi2Deb = $dureeEmploi2Deb;
        return $this;
    }

    /**
     * Set the duree emploi2 fin.
     *
     * @param DateTime|null $dureeEmploi2Fin The duree emploi2 fin.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setDureeEmploi2Fin(?DateTime $dureeEmploi2Fin): AttestationAssedic {
        $this->dureeEmploi2Fin = $dureeEmploi2Fin;
        return $this;
    }

    /**
     * Set the effectif.
     *
     * @param string|null $effectif The effectif.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setEffectif(?string $effectif): AttestationAssedic {
        $this->effectif = $effectif;
        return $this;
    }

    /**
     * Set the effectif val.
     *
     * @param float|null $effectifVal The effectif val.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setEffectifVal(?float $effectifVal): AttestationAssedic {
        $this->effectifVal = $effectifVal;
        return $this;
    }

    /**
     * Set the emploi collectivite.
     *
     * @param string|null $emploiCollectivite The emploi collectivite.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setEmploiCollectivite(?string $emploiCollectivite): AttestationAssedic {
        $this->emploiCollectivite = $emploiCollectivite;
        return $this;
    }

    /**
     * Set the etbl adresse1.
     *
     * @param string|null $etblAdresse1 The etbl adresse1.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setEtblAdresse1(?string $etblAdresse1): AttestationAssedic {
        $this->etblAdresse1 = $etblAdresse1;
        return $this;
    }

    /**
     * Set the etbl adresse2.
     *
     * @param string|null $etblAdresse2 The etbl adresse2.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setEtblAdresse2(?string $etblAdresse2): AttestationAssedic {
        $this->etblAdresse2 = $etblAdresse2;
        return $this;
    }

    /**
     * Set the etbl adresse3.
     *
     * @param string|null $etblAdresse3 The etbl adresse3.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setEtblAdresse3(?string $etblAdresse3): AttestationAssedic {
        $this->etblAdresse3 = $etblAdresse3;
        return $this;
    }

    /**
     * Set the etbl raison sociale.
     *
     * @param string|null $etblRaisonSociale The etbl raison sociale.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setEtblRaisonSociale(?string $etblRaisonSociale): AttestationAssedic {
        $this->etblRaisonSociale = $etblRaisonSociale;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string|null $etblTel The etbl tel.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setEtblTel(?string $etblTel): AttestationAssedic {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the fngs non a percevoir motif.
     *
     * @param string|null $fngsNonAPercevoirMotif The fngs non a percevoir motif.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setFngsNonAPercevoirMotif(?string $fngsNonAPercevoirMotif): AttestationAssedic {
        $this->fngsNonAPercevoirMotif = $fngsNonAPercevoirMotif;
        return $this;
    }

    /**
     * Set the fngs non percue motif.
     *
     * @param string|null $fngsNonPercueMotif The fngs non percue motif.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setFngsNonPercueMotif(?string $fngsNonPercueMotif): AttestationAssedic {
        $this->fngsNonPercueMotif = $fngsNonPercueMotif;
        return $this;
    }

    /**
     * Set the fngs percue.
     *
     * @param bool|null $fngsPercue The fngs percue.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setFngsPercue(?bool $fngsPercue): AttestationAssedic {
        $this->fngsPercue = $fngsPercue;
        return $this;
    }

    /**
     * Set the fngs percue creance.
     *
     * @param string|null $fngsPercueCreance The fngs percue creance.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setFngsPercueCreance(?string $fngsPercueCreance): AttestationAssedic {
        $this->fngsPercueCreance = $fngsPercueCreance;
        return $this;
    }

    /**
     * Set the fngsa percevoir.
     *
     * @param bool|null $fngsaPercevoir The fngsa percevoir.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setFngsaPercevoir(?bool $fngsaPercevoir): AttestationAssedic {
        $this->fngsaPercevoir = $fngsaPercevoir;
        return $this;
    }

    /**
     * Set the fngsa percevoir creance.
     *
     * @param string|null $fngsaPercevoirCreance The fngsa percevoir creance.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setFngsaPercevoirCreance(?string $fngsaPercevoirCreance): AttestationAssedic {
        $this->fngsaPercevoirCreance = $fngsaPercevoirCreance;
        return $this;
    }

    /**
     * Set the heures trav.
     *
     * @param float|null $heuresTrav The heures trav.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setHeuresTrav(?float $heuresTrav): AttestationAssedic {
        $this->heuresTrav = $heuresTrav;
        return $this;
    }

    /**
     * Set the heures trav2.
     *
     * @param float|null $heuresTrav2 The heures trav2.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setHeuresTrav2(?float $heuresTrav2): AttestationAssedic {
        $this->heuresTrav2 = $heuresTrav2;
        return $this;
    }

    /**
     * Set the horaire annuel etbl.
     *
     * @param float|null $horaireAnnuelEtbl The horaire annuel etbl.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setHoraireAnnuelEtbl(?float $horaireAnnuelEtbl): AttestationAssedic {
        $this->horaireAnnuelEtbl = $horaireAnnuelEtbl;
        return $this;
    }

    /**
     * Set the horaire annuel sal.
     *
     * @param float|null $horaireAnnuelSal The horaire annuel sal.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setHoraireAnnuelSal(?float $horaireAnnuelSal): AttestationAssedic {
        $this->horaireAnnuelSal = $horaireAnnuelSal;
        return $this;
    }

    /**
     * Set the horaire hebdo etbl.
     *
     * @param float|null $horaireHebdoEtbl The horaire hebdo etbl.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setHoraireHebdoEtbl(?float $horaireHebdoEtbl): AttestationAssedic {
        $this->horaireHebdoEtbl = $horaireHebdoEtbl;
        return $this;
    }

    /**
     * Set the horaire hebdo sal.
     *
     * @param float|null $horaireHebdoSal The horaire hebdo sal.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setHoraireHebdoSal(?float $horaireHebdoSal): AttestationAssedic {
        $this->horaireHebdoSal = $horaireHebdoSal;
        return $this;
    }

    /**
     * Set the indemn autres.
     *
     * @param float|null $indemnAutres The indemn autres.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnAutres(?float $indemnAutres): AttestationAssedic {
        $this->indemnAutres = $indemnAutres;
        return $this;
    }

    /**
     * Set the indemn clientele.
     *
     * @param float|null $indemnClientele The indemn clientele.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnClientele(?float $indemnClientele): AttestationAssedic {
        $this->indemnClientele = $indemnClientele;
        return $this;
    }

    /**
     * Set the indemn compens cp.
     *
     * @param float|null $indemnCompensCp The indemn compens cp.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnCompensCp(?float $indemnCompensCp): AttestationAssedic {
        $this->indemnCompensCp = $indemnCompensCp;
        return $this;
    }

    /**
     * Set the indemn compens preavis.
     *
     * @param float|null $indemnCompensPreavis The indemn compens preavis.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnCompensPreavis(?float $indemnCompensPreavis): AttestationAssedic {
        $this->indemnCompensPreavis = $indemnCompensPreavis;
        return $this;
    }

    /**
     * Set the indemn depart retraite.
     *
     * @param float|null $indemnDepartRetraite The indemn depart retraite.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnDepartRetraite(?float $indemnDepartRetraite): AttestationAssedic {
        $this->indemnDepartRetraite = $indemnDepartRetraite;
        return $this;
    }

    /**
     * Set the indemn due sinistre.
     *
     * @param float|null $indemnDueSinistre The indemn due sinistre.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnDueSinistre(?float $indemnDueSinistre): AttestationAssedic {
        $this->indemnDueSinistre = $indemnDueSinistre;
        return $this;
    }

    /**
     * Set the indemn fin cdd.
     *
     * @param float|null $indemnFinCdd The indemn fin cdd.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnFinCdd(?float $indemnFinCdd): AttestationAssedic {
        $this->indemnFinCdd = $indemnFinCdd;
        return $this;
    }

    /**
     * Set the indemn fin cne.
     *
     * @param float|null $indemnFinCne The indemn fin cne.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnFinCne(?float $indemnFinCne): AttestationAssedic {
        $this->indemnFinCne = $indemnFinCne;
        return $this;
    }

    /**
     * Set the indemn fin mission.
     *
     * @param float|null $indemnFinMission The indemn fin mission.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnFinMission(?float $indemnFinMission): AttestationAssedic {
        $this->indemnFinMission = $indemnFinMission;
        return $this;
    }

    /**
     * Set the indemn journalistes.
     *
     * @param float|null $indemnJournalistes The indemn journalistes.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnJournalistes(?float $indemnJournalistes): AttestationAssedic {
        $this->indemnJournalistes = $indemnJournalistes;
        return $this;
    }

    /**
     * Set the indemn licens.
     *
     * @param float|null $indemnLicens The indemn licens.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnLicens(?float $indemnLicens): AttestationAssedic {
        $this->indemnLicens = $indemnLicens;
        return $this;
    }

    /**
     * Set the indemn navig.
     *
     * @param float|null $indemnNavig The indemn navig.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnNavig(?float $indemnNavig): AttestationAssedic {
        $this->indemnNavig = $indemnNavig;
        return $this;
    }

    /**
     * Set the indemn rupt conv.
     *
     * @param float|null $indemnRuptConv The indemn rupt conv.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnRuptConv(?float $indemnRuptConv): AttestationAssedic {
        $this->indemnRuptConv = $indemnRuptConv;
        return $this;
    }

    /**
     * Set the indemn speci licens.
     *
     * @param float|null $indemnSpeciLicens The indemn speci licens.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnSpeciLicens(?float $indemnSpeciLicens): AttestationAssedic {
        $this->indemnSpeciLicens = $indemnSpeciLicens;
        return $this;
    }

    /**
     * Set the indemn specif licens.
     *
     * @param float|null $indemnSpecifLicens The indemn specif licens.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnSpecifLicens(?float $indemnSpecifLicens): AttestationAssedic {
        $this->indemnSpecifLicens = $indemnSpecifLicens;
        return $this;
    }

    /**
     * Set the indemn suppl licens.
     *
     * @param float|null $indemnSupplLicens The indemn suppl licens.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnSupplLicens(?float $indemnSupplLicens): AttestationAssedic {
        $this->indemnSupplLicens = $indemnSupplLicens;
        return $this;
    }

    /**
     * Set the indemn versee apprenti.
     *
     * @param float|null $indemnVerseeApprenti The indemn versee apprenti.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setIndemnVerseeApprenti(?float $indemnVerseeApprenti): AttestationAssedic {
        $this->indemnVerseeApprenti = $indemnVerseeApprenti;
        return $this;
    }

    /**
     * Set the licencie55ans.
     *
     * @param bool|null $licencie55ans The licencie55ans.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setLicencie55ans(?bool $licencie55ans): AttestationAssedic {
        $this->licencie55ans = $licencie55ans;
        return $this;
    }

    /**
     * Set the licencie plan social.
     *
     * @param bool|null $licenciePlanSocial The licencie plan social.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setLicenciePlanSocial(?bool $licenciePlanSocial): AttestationAssedic {
        $this->licenciePlanSocial = $licenciePlanSocial;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setLienDocument(?string $lienDocument): AttestationAssedic {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lien parente.
     *
     * @param string|null $lienParente The lien parente.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setLienParente(?string $lienParente): AttestationAssedic {
        $this->lienParente = $lienParente;
        return $this;
    }

    /**
     * Set the motif difference.
     *
     * @param string|null $motifDifference The motif difference.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setMotifDifference(?string $motifDifference): AttestationAssedic {
        $this->motifDifference = $motifDifference;
        return $this;
    }

    /**
     * Set the motif non paie iccp.
     *
     * @param string|null $motifNonPaieIccp The motif non paie iccp.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setMotifNonPaieIccp(?string $motifNonPaieIccp): AttestationAssedic {
        $this->motifNonPaieIccp = $motifNonPaieIccp;
        return $this;
    }

    /**
     * Set the motif non paiement.
     *
     * @param string|null $motifNonPaiement The motif non paiement.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setMotifNonPaiement(?string $motifNonPaiement): AttestationAssedic {
        $this->motifNonPaiement = $motifNonPaiement;
        return $this;
    }

    /**
     * Set the motif rupture.
     *
     * @param string|null $motifRupture The motif rupture.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setMotifRupture(?string $motifRupture): AttestationAssedic {
        $this->motifRupture = $motifRupture;
        return $this;
    }

    /**
     * Set the mt idemn conv col.
     *
     * @param float|null $mtIdemnConvCol The mt idemn conv col.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setMtIdemnConvCol(?float $mtIdemnConvCol): AttestationAssedic {
        $this->mtIdemnConvCol = $mtIdemnConvCol;
        return $this;
    }

    /**
     * Set the mt idemn transac.
     *
     * @param float|null $mtIdemnTransac The mt idemn transac.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setMtIdemnTransac(?float $mtIdemnTransac): AttestationAssedic {
        $this->mtIdemnTransac = $mtIdemnTransac;
        return $this;
    }

    /**
     * Set the naf.
     *
     * @param string|null $naf The naf.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNaf(?string $naf): AttestationAssedic {
        $this->naf = $naf;
        return $this;
    }

    /**
     * Set the nature contrat.
     *
     * @param string|null $natureContrat The nature contrat.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNatureContrat(?string $natureContrat): AttestationAssedic {
        $this->natureContrat = $natureContrat;
        return $this;
    }

    /**
     * Set the nb jours ouvrables.
     *
     * @param float|null $nbJoursOuvrables The nb jours ouvrables.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNbJoursOuvrables(?float $nbJoursOuvrables): AttestationAssedic {
        $this->nbJoursOuvrables = $nbJoursOuvrables;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string|null $nir The nir.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNir(?string $nir): AttestationAssedic {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the niveau qualif.
     *
     * @param string|null $niveauQualif The niveau qualif.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNiveauQualif(?string $niveauQualif): AttestationAssedic {
        $this->niveauQualif = $niveauQualif;
        return $this;
    }

    /**
     * Set the nom ass chom.
     *
     * @param string|null $nomAssChom The nom ass chom.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNomAssChom(?string $nomAssChom): AttestationAssedic {
        $this->nomAssChom = $nomAssChom;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string|null $nomEmploye The nom employe.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNomEmploye(?string $nomEmploye): AttestationAssedic {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string|null $nomNaissance The nom naissance.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNomNaissance(?string $nomNaissance): AttestationAssedic {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom special secu.
     *
     * @param string|null $nomSpecialSecu The nom special secu.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNomSpecialSecu(?string $nomSpecialSecu): AttestationAssedic {
        $this->nomSpecialSecu = $nomSpecialSecu;
        return $this;
    }

    /**
     * Set the nouvelle attest.
     *
     * @param bool|null $nouvelleAttest The nouvelle attest.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNouvelleAttest(?bool $nouvelleAttest): AttestationAssedic {
        $this->nouvelleAttest = $nouvelleAttest;
        return $this;
    }

    /**
     * Set the num ass chom.
     *
     * @param string|null $numAssChom The num ass chom.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNumAssChom(?string $numAssChom): AttestationAssedic {
        $this->numAssChom = $numAssChom;
        return $this;
    }

    /**
     * Set the num convention fne.
     *
     * @param string|null $numConventionFne The num convention fne.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNumConventionFne(?string $numConventionFne): AttestationAssedic {
        $this->numConventionFne = $numConventionFne;
        return $this;
    }

    /**
     * Set the num convention gestion.
     *
     * @param string|null $numConventionGestion The num convention gestion.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNumConventionGestion(?string $numConventionGestion): AttestationAssedic {
        $this->numConventionGestion = $numConventionGestion;
        return $this;
    }

    /**
     * Set the num special secu.
     *
     * @param string|null $numSpecialSecu The num special secu.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNumSpecialSecu(?string $numSpecialSecu): AttestationAssedic {
        $this->numSpecialSecu = $numSpecialSecu;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNumeroAttestation(?string $numeroAttestation): AttestationAssedic {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setNumeroEmploye(?string $numeroEmploye): AttestationAssedic {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the organisme ass chom.
     *
     * @param string|null $organismeAssChom The organisme ass chom.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setOrganismeAssChom(?string $organismeAssChom): AttestationAssedic {
        $this->organismeAssChom = $organismeAssChom;
        return $this;
    }

    /**
     * Set the preavis effectue.
     *
     * @param bool|null $preavisEffectue The preavis effectue.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setPreavisEffectue(?bool $preavisEffectue): AttestationAssedic {
        $this->preavisEffectue = $preavisEffectue;
        return $this;
    }

    /**
     * Set the preavis effectue deb.
     *
     * @param DateTime|null $preavisEffectueDeb The preavis effectue deb.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setPreavisEffectueDeb(?DateTime $preavisEffectueDeb): AttestationAssedic {
        $this->preavisEffectueDeb = $preavisEffectueDeb;
        return $this;
    }

    /**
     * Set the preavis effectue fin.
     *
     * @param DateTime|null $preavisEffectueFin The preavis effectue fin.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setPreavisEffectueFin(?DateTime $preavisEffectueFin): AttestationAssedic {
        $this->preavisEffectueFin = $preavisEffectueFin;
        return $this;
    }

    /**
     * Set the preavis effectue paye.
     *
     * @param bool|null $preavisEffectuePaye The preavis effectue paye.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setPreavisEffectuePaye(?bool $preavisEffectuePaye): AttestationAssedic {
        $this->preavisEffectuePaye = $preavisEffectuePaye;
        return $this;
    }

    /**
     * Set the preavis non effectue.
     *
     * @param bool|null $preavisNonEffectue The preavis non effectue.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setPreavisNonEffectue(?bool $preavisNonEffectue): AttestationAssedic {
        $this->preavisNonEffectue = $preavisNonEffectue;
        return $this;
    }

    /**
     * Set the preavis non effectue deb.
     *
     * @param DateTime|null $preavisNonEffectueDeb The preavis non effectue deb.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setPreavisNonEffectueDeb(?DateTime $preavisNonEffectueDeb): AttestationAssedic {
        $this->preavisNonEffectueDeb = $preavisNonEffectueDeb;
        return $this;
    }

    /**
     * Set the preavis non effectue fin.
     *
     * @param DateTime|null $preavisNonEffectueFin The preavis non effectue fin.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setPreavisNonEffectueFin(?DateTime $preavisNonEffectueFin): AttestationAssedic {
        $this->preavisNonEffectueFin = $preavisNonEffectueFin;
        return $this;
    }

    /**
     * Set the preavis non effectue paye.
     *
     * @param bool|null $preavisNonEffectuePaye The preavis non effectue paye.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setPreavisNonEffectuePaye(?bool $preavisNonEffectuePaye): AttestationAssedic {
        $this->preavisNonEffectuePaye = $preavisNonEffectuePaye;
        return $this;
    }

    /**
     * Set the precompte stc.
     *
     * @param float|null $precompteStc The precompte stc.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setPrecompteStc(?float $precompteStc): AttestationAssedic {
        $this->precompteStc = $precompteStc;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setPrenom(?string $prenom): AttestationAssedic {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the qualite emploi.
     *
     * @param string|null $qualiteEmploi The qualite emploi.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setQualiteEmploi(?string $qualiteEmploi): AttestationAssedic {
        $this->qualiteEmploi = $qualiteEmploi;
        return $this;
    }

    /**
     * Set the reclassement.
     *
     * @param bool|null $reclassement The reclassement.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setReclassement(?bool $reclassement): AttestationAssedic {
        $this->reclassement = $reclassement;
        return $this;
    }

    /**
     * Set the refus salarie.
     *
     * @param bool|null $refusSalarie The refus salarie.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setRefusSalarie(?bool $refusSalarie): AttestationAssedic {
        $this->refusSalarie = $refusSalarie;
        return $this;
    }

    /**
     * Set the retraite agirc.
     *
     * @param string|null $retraiteAgirc The retraite agirc.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setRetraiteAgirc(?string $retraiteAgirc): AttestationAssedic {
        $this->retraiteAgirc = $retraiteAgirc;
        return $this;
    }

    /**
     * Set the retraite agirc compl.
     *
     * @param string|null $retraiteAgircCompl The retraite agirc compl.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setRetraiteAgircCompl(?string $retraiteAgircCompl): AttestationAssedic {
        $this->retraiteAgircCompl = $retraiteAgircCompl;
        return $this;
    }

    /**
     * Set the retraite arrco.
     *
     * @param string|null $retraiteArrco The retraite arrco.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setRetraiteArrco(?string $retraiteArrco): AttestationAssedic {
        $this->retraiteArrco = $retraiteArrco;
        return $this;
    }

    /**
     * Set the retraite arrco compl.
     *
     * @param string|null $retraiteArrcoCompl The retraite arrco compl.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setRetraiteArrcoCompl(?string $retraiteArrcoCompl): AttestationAssedic {
        $this->retraiteArrcoCompl = $retraiteArrcoCompl;
        return $this;
    }

    /**
     * Set the retraite autre.
     *
     * @param string|null $retraiteAutre The retraite autre.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setRetraiteAutre(?string $retraiteAutre): AttestationAssedic {
        $this->retraiteAutre = $retraiteAutre;
        return $this;
    }

    /**
     * Set the retraite autre compl.
     *
     * @param string|null $retraiteAutreCompl The retraite autre compl.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setRetraiteAutreCompl(?string $retraiteAutreCompl): AttestationAssedic {
        $this->retraiteAutreCompl = $retraiteAutreCompl;
        return $this;
    }

    /**
     * Set the salaire brut.
     *
     * @param float|null $salaireBrut The salaire brut.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSalaireBrut(?float $salaireBrut): AttestationAssedic {
        $this->salaireBrut = $salaireBrut;
        return $this;
    }

    /**
     * Set the signature code qualite.
     *
     * @param string|null $signatureCodeQualite The signature code qualite.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSignatureCodeQualite(?string $signatureCodeQualite): AttestationAssedic {
        $this->signatureCodeQualite = $signatureCodeQualite;
        return $this;
    }

    /**
     * Set the signature contact.
     *
     * @param string|null $signatureContact The signature contact.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSignatureContact(?string $signatureContact): AttestationAssedic {
        $this->signatureContact = $signatureContact;
        return $this;
    }

    /**
     * Set the signature date.
     *
     * @param DateTime|null $signatureDate The signature date.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSignatureDate(?DateTime $signatureDate): AttestationAssedic {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * Set the signature nom.
     *
     * @param string|null $signatureNom The signature nom.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSignatureNom(?string $signatureNom): AttestationAssedic {
        $this->signatureNom = $signatureNom;
        return $this;
    }

    /**
     * Set the signature prenom.
     *
     * @param string|null $signaturePrenom The signature prenom.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSignaturePrenom(?string $signaturePrenom): AttestationAssedic {
        $this->signaturePrenom = $signaturePrenom;
        return $this;
    }

    /**
     * Set the signature qualite.
     *
     * @param string|null $signatureQualite The signature qualite.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSignatureQualite(?string $signatureQualite): AttestationAssedic {
        $this->signatureQualite = $signatureQualite;
        return $this;
    }

    /**
     * Set the signature tel.
     *
     * @param string|null $signatureTel The signature tel.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSignatureTel(?string $signatureTel): AttestationAssedic {
        $this->signatureTel = $signatureTel;
        return $this;
    }

    /**
     * Set the signature ville.
     *
     * @param string|null $signatureVille The signature ville.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSignatureVille(?string $signatureVille): AttestationAssedic {
        $this->signatureVille = $signatureVille;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSiret(?string $siret): AttestationAssedic {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the solde tout compte.
     *
     * @param string|null $soldeToutCompte The solde tout compte.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSoldeToutCompte(?string $soldeToutCompte): AttestationAssedic {
        $this->soldeToutCompte = $soldeToutCompte;
        return $this;
    }

    /**
     * Set the sommes periode deb.
     *
     * @param DateTime|null $sommesPeriodeDeb The sommes periode deb.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSommesPeriodeDeb(?DateTime $sommesPeriodeDeb): AttestationAssedic {
        $this->sommesPeriodeDeb = $sommesPeriodeDeb;
        return $this;
    }

    /**
     * Set the sommes periode deb2.
     *
     * @param DateTime|null $sommesPeriodeDeb2 The sommes periode deb2.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSommesPeriodeDeb2(?DateTime $sommesPeriodeDeb2): AttestationAssedic {
        $this->sommesPeriodeDeb2 = $sommesPeriodeDeb2;
        return $this;
    }

    /**
     * Set the sommes periode fin.
     *
     * @param DateTime|null $sommesPeriodeFin The sommes periode fin.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSommesPeriodeFin(?DateTime $sommesPeriodeFin): AttestationAssedic {
        $this->sommesPeriodeFin = $sommesPeriodeFin;
        return $this;
    }

    /**
     * Set the sommes periode fin2.
     *
     * @param DateTime|null $sommesPeriodeFin2 The sommes periode fin2.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSommesPeriodeFin2(?DateTime $sommesPeriodeFin2): AttestationAssedic {
        $this->sommesPeriodeFin2 = $sommesPeriodeFin2;
        return $this;
    }

    /**
     * Set the special secu.
     *
     * @param string|null $specialSecu The special secu.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setSpecialSecu(?string $specialSecu): AttestationAssedic {
        $this->specialSecu = $specialSecu;
        return $this;
    }

    /**
     * Set the statut.
     *
     * @param string|null $statut The statut.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setStatut(?string $statut): AttestationAssedic {
        $this->statut = $statut;
        return $this;
    }

    /**
     * Set the statut cadre.
     *
     * @param bool|null $statutCadre The statut cadre.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setStatutCadre(?bool $statutCadre): AttestationAssedic {
        $this->statutCadre = $statutCadre;
        return $this;
    }

    /**
     * Set the statut part autre.
     *
     * @param string|null $statutPartAutre The statut part autre.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setStatutPartAutre(?string $statutPartAutre): AttestationAssedic {
        $this->statutPartAutre = $statutPartAutre;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setTitre(?string $titre): AttestationAssedic {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the total sommes.
     *
     * @param float|null $totalSommes The total sommes.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setTotalSommes(?float $totalSommes): AttestationAssedic {
        $this->totalSommes = $totalSommes;
        return $this;
    }

    /**
     * Set the transaction en cours.
     *
     * @param bool|null $transactionEnCours The transaction en cours.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setTransactionEnCours(?bool $transactionEnCours): AttestationAssedic {
        $this->transactionEnCours = $transactionEnCours;
        return $this;
    }

    /**
     * Set the type assedic.
     *
     * @param string|null $typeAssedic The type assedic.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setTypeAssedic(?string $typeAssedic): AttestationAssedic {
        $this->typeAssedic = $typeAssedic;
        return $this;
    }

    /**
     * Set the type diff horaire.
     *
     * @param string|null $typeDiffHoraire The type diff horaire.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setTypeDiffHoraire(?string $typeDiffHoraire): AttestationAssedic {
        $this->typeDiffHoraire = $typeDiffHoraire;
        return $this;
    }

    /**
     * Set the type societe.
     *
     * @param string|null $typeSociete The type societe.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setTypeSociete(?string $typeSociete): AttestationAssedic {
        $this->typeSociete = $typeSociete;
        return $this;
    }

    /**
     * Set the urssaf.
     *
     * @param string|null $urssaf The urssaf.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setUrssaf(?string $urssaf): AttestationAssedic {
        $this->urssaf = $urssaf;
        return $this;
    }

    /**
     * Set the validite convention fne.
     *
     * @param DateTime|null $validiteConventionFne The validite convention fne.
     * @return AttestationAssedic Returns this Attestation assedic.
     */
    public function setValiditeConventionFne(?DateTime $validiteConventionFne): AttestationAssedic {
        $this->validiteConventionFne = $validiteConventionFne;
        return $this;
    }
}
