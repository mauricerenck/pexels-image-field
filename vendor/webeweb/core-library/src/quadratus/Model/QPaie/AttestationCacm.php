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
 * Attestation cacm.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class AttestationCacm {

    /**
     * Adresse employe.
     *
     * @var string|null
     */
    private $adresseEmploye;

    /**
     * Autre contrat.
     *
     * @var string|null
     */
    private $autreContrat;

    /**
     * Autre statut.
     *
     * @var string|null
     */
    private $autreStatut;

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
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Date notification.
     *
     * @var DateTime|null
     */
    private $dateNotification;

    /**
     * Date paiement.
     *
     * @var DateTime|null
     */
    private $datePaiement;

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
     * Dt deb preavis effectue.
     *
     * @var DateTime|null
     */
    private $dtDebPreavisEffectue;

    /**
     * Dt deb preavis non effectue.
     *
     * @var DateTime|null
     */
    private $dtDebPreavisNonEffectue;

    /**
     * Dt debut emploi.
     *
     * @var DateTime|null
     */
    private $dtDebutEmploi;

    /**
     * Dt dern jour trav.
     *
     * @var DateTime|null
     */
    private $dtDernJourTrav;

    /**
     * Dt fin emploi.
     *
     * @var DateTime|null
     */
    private $dtFinEmploi;

    /**
     * Dt fin preavis effectue.
     *
     * @var DateTime|null
     */
    private $dtFinPreavisEffectue;

    /**
     * Dt fin preavis non effectue.
     *
     * @var DateTime|null
     */
    private $dtFinPreavisNonEffectue;

    /**
     * Etbl adr.
     *
     * @var string|null
     */
    private $etblAdr;

    /**
     * Etbl cacm.
     *
     * @var string|null
     */
    private $etblCacm;

    /**
     * Etbl effectif.
     *
     * @var int|null
     */
    private $etblEffectif;

    /**
     * Etbl fax.
     *
     * @var string|null
     */
    private $etblFax;

    /**
     * Etbl mail.
     *
     * @var string|null
     */
    private $etblMail;

    /**
     * Etbl naf.
     *
     * @var string|null
     */
    private $etblNaf;

    /**
     * Etbl siret.
     *
     * @var string|null
     */
    private $etblSiret;

    /**
     * Etbl tel.
     *
     * @var string|null
     */
    private $etblTel;

    /**
     * Indemn autre.
     *
     * @var bool|null
     */
    private $indemnAutre;

    /**
     * Indemn legale.
     *
     * @var bool|null
     */
    private $indemnLegale;

    /**
     * Indemn lic.
     *
     * @var bool|null
     */
    private $indemnLic;

    /**
     * Indemn supp.
     *
     * @var bool|null
     */
    private $indemnSupp;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Lien parente.
     *
     * @var bool|null
     */
    private $lienParente;

    /**
     * Motif preavis non paye.
     *
     * @var string|null
     */
    private $motifPreavisNonPaye;

    /**
     * Motif rupture.
     *
     * @var string|null
     */
    private $motifRupture;

    /**
     * Mt indemn autre.
     *
     * @var float|null
     */
    private $mtIndemnAutre;

    /**
     * Mt indemn legale.
     *
     * @var float|null
     */
    private $mtIndemnLegale;

    /**
     * Mt indemn lic.
     *
     * @var float|null
     */
    private $mtIndemnLic;

    /**
     * Mt indemn supp.
     *
     * @var float|null
     */
    private $mtIndemnSupp;

    /**
     * Mt salaire brut.
     *
     * @var float|null
     */
    private $mtSalaireBrut;

    /**
     * Nb heure mens.
     *
     * @var float|null
     */
    private $nbHeureMens;

    /**
     * Niveau qualif.
     *
     * @var string|null
     */
    private $niveauQualif;

    /**
     * No cacm.
     *
     * @var string|null
     */
    private $noCacm;

    /**
     * No cssm.
     *
     * @var string|null
     */
    private $noCssm;

    /**
     * Nom marital.
     *
     * @var string|null
     */
    private $nomMarital;

    /**
     * Nom naissance.
     *
     * @var string|null
     */
    private $nomNaissance;

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
     * Organisme cacm.
     *
     * @var string|null
     */
    private $organismeCacm;

    /**
     * Periode emploi deb.
     *
     * @var DateTime|null
     */
    private $periodeEmploiDeb;

    /**
     * Periode emploi fin.
     *
     * @var DateTime|null
     */
    private $periodeEmploiFin;

    /**
     * Preavis non effectue paye.
     *
     * @var bool|null
     */
    private $preavisNonEffectuePaye;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Sign autre.
     *
     * @var string|null
     */
    private $signAutre;

    /**
     * Sign date.
     *
     * @var DateTime|null
     */
    private $signDate;

    /**
     * Sign form juridique.
     *
     * @var string|null
     */
    private $signFormJuridique;

    /**
     * Sign motif rupture.
     *
     * @var string|null
     */
    private $signMotifRupture;

    /**
     * Sign nom.
     *
     * @var string|null
     */
    private $signNom;

    /**
     * Sign prenom.
     *
     * @var string|null
     */
    private $signPrenom;

    /**
     * Sign qualite.
     *
     * @var int|null
     */
    private $signQualite;

    /**
     * Sign raison sociale.
     *
     * @var string|null
     */
    private $signRaisonSociale;

    /**
     * Statut cadre.
     *
     * @var bool|null
     */
    private $statutCadre;

    /**
     * Statut juridique.
     *
     * @var string|null
     */
    private $statutJuridique;

    /**
     * Statut particulier.
     *
     * @var int|null
     */
    private $statutParticulier;

    /**
     * Titre.
     *
     * @var string|null
     */
    private $titre;

    /**
     * Titre lien parente.
     *
     * @var string|null
     */
    private $titreLienParente;

    /**
     * Type contrat.
     *
     * @var int|null
     */
    private $typeContrat;

    /**
     * Type horaire.
     *
     * @var int|null
     */
    private $typeHoraire;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adresse employe.
     *
     * @return string|null Returns the adresse employe.
     */
    public function getAdresseEmploye(): ?string {
        return $this->adresseEmploye;
    }

    /**
     * Get the autre contrat.
     *
     * @return string|null Returns the autre contrat.
     */
    public function getAutreContrat(): ?string {
        return $this->autreContrat;
    }

    /**
     * Get the autre statut.
     *
     * @return string|null Returns the autre statut.
     */
    public function getAutreStatut(): ?string {
        return $this->autreStatut;
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
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
    }

    /**
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance(): ?DateTime {
        return $this->dateNaissance;
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
     * Get the date paiement.
     *
     * @return DateTime|null Returns the date paiement.
     */
    public function getDatePaiement(): ?DateTime {
        return $this->datePaiement;
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
     * Get the dt deb preavis effectue.
     *
     * @return DateTime|null Returns the dt deb preavis effectue.
     */
    public function getDtDebPreavisEffectue(): ?DateTime {
        return $this->dtDebPreavisEffectue;
    }

    /**
     * Get the dt deb preavis non effectue.
     *
     * @return DateTime|null Returns the dt deb preavis non effectue.
     */
    public function getDtDebPreavisNonEffectue(): ?DateTime {
        return $this->dtDebPreavisNonEffectue;
    }

    /**
     * Get the dt debut emploi.
     *
     * @return DateTime|null Returns the dt debut emploi.
     */
    public function getDtDebutEmploi(): ?DateTime {
        return $this->dtDebutEmploi;
    }

    /**
     * Get the dt dern jour trav.
     *
     * @return DateTime|null Returns the dt dern jour trav.
     */
    public function getDtDernJourTrav(): ?DateTime {
        return $this->dtDernJourTrav;
    }

    /**
     * Get the dt fin emploi.
     *
     * @return DateTime|null Returns the dt fin emploi.
     */
    public function getDtFinEmploi(): ?DateTime {
        return $this->dtFinEmploi;
    }

    /**
     * Get the dt fin preavis effectue.
     *
     * @return DateTime|null Returns the dt fin preavis effectue.
     */
    public function getDtFinPreavisEffectue(): ?DateTime {
        return $this->dtFinPreavisEffectue;
    }

    /**
     * Get the dt fin preavis non effectue.
     *
     * @return DateTime|null Returns the dt fin preavis non effectue.
     */
    public function getDtFinPreavisNonEffectue(): ?DateTime {
        return $this->dtFinPreavisNonEffectue;
    }

    /**
     * Get the etbl adr.
     *
     * @return string|null Returns the etbl adr.
     */
    public function getEtblAdr(): ?string {
        return $this->etblAdr;
    }

    /**
     * Get the etbl cacm.
     *
     * @return string|null Returns the etbl cacm.
     */
    public function getEtblCacm(): ?string {
        return $this->etblCacm;
    }

    /**
     * Get the etbl effectif.
     *
     * @return int|null Returns the etbl effectif.
     */
    public function getEtblEffectif(): ?int {
        return $this->etblEffectif;
    }

    /**
     * Get the etbl fax.
     *
     * @return string|null Returns the etbl fax.
     */
    public function getEtblFax(): ?string {
        return $this->etblFax;
    }

    /**
     * Get the etbl mail.
     *
     * @return string|null Returns the etbl mail.
     */
    public function getEtblMail(): ?string {
        return $this->etblMail;
    }

    /**
     * Get the etbl naf.
     *
     * @return string|null Returns the etbl naf.
     */
    public function getEtblNaf(): ?string {
        return $this->etblNaf;
    }

    /**
     * Get the etbl siret.
     *
     * @return string|null Returns the etbl siret.
     */
    public function getEtblSiret(): ?string {
        return $this->etblSiret;
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
     * Get the indemn autre.
     *
     * @return bool|null Returns the indemn autre.
     */
    public function getIndemnAutre(): ?bool {
        return $this->indemnAutre;
    }

    /**
     * Get the indemn legale.
     *
     * @return bool|null Returns the indemn legale.
     */
    public function getIndemnLegale(): ?bool {
        return $this->indemnLegale;
    }

    /**
     * Get the indemn lic.
     *
     * @return bool|null Returns the indemn lic.
     */
    public function getIndemnLic(): ?bool {
        return $this->indemnLic;
    }

    /**
     * Get the indemn supp.
     *
     * @return bool|null Returns the indemn supp.
     */
    public function getIndemnSupp(): ?bool {
        return $this->indemnSupp;
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
     * @return bool|null Returns the lien parente.
     */
    public function getLienParente(): ?bool {
        return $this->lienParente;
    }

    /**
     * Get the motif preavis non paye.
     *
     * @return string|null Returns the motif preavis non paye.
     */
    public function getMotifPreavisNonPaye(): ?string {
        return $this->motifPreavisNonPaye;
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
     * Get the mt indemn autre.
     *
     * @return float|null Returns the mt indemn autre.
     */
    public function getMtIndemnAutre(): ?float {
        return $this->mtIndemnAutre;
    }

    /**
     * Get the mt indemn legale.
     *
     * @return float|null Returns the mt indemn legale.
     */
    public function getMtIndemnLegale(): ?float {
        return $this->mtIndemnLegale;
    }

    /**
     * Get the mt indemn lic.
     *
     * @return float|null Returns the mt indemn lic.
     */
    public function getMtIndemnLic(): ?float {
        return $this->mtIndemnLic;
    }

    /**
     * Get the mt indemn supp.
     *
     * @return float|null Returns the mt indemn supp.
     */
    public function getMtIndemnSupp(): ?float {
        return $this->mtIndemnSupp;
    }

    /**
     * Get the mt salaire brut.
     *
     * @return float|null Returns the mt salaire brut.
     */
    public function getMtSalaireBrut(): ?float {
        return $this->mtSalaireBrut;
    }

    /**
     * Get the nb heure mens.
     *
     * @return float|null Returns the nb heure mens.
     */
    public function getNbHeureMens(): ?float {
        return $this->nbHeureMens;
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
     * Get the no cacm.
     *
     * @return string|null Returns the no cacm.
     */
    public function getNoCacm(): ?string {
        return $this->noCacm;
    }

    /**
     * Get the no cssm.
     *
     * @return string|null Returns the no cssm.
     */
    public function getNoCssm(): ?string {
        return $this->noCssm;
    }

    /**
     * Get the nom marital.
     *
     * @return string|null Returns the nom marital.
     */
    public function getNomMarital(): ?string {
        return $this->nomMarital;
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
     * Get the organisme cacm.
     *
     * @return string|null Returns the organisme cacm.
     */
    public function getOrganismeCacm(): ?string {
        return $this->organismeCacm;
    }

    /**
     * Get the periode emploi deb.
     *
     * @return DateTime|null Returns the periode emploi deb.
     */
    public function getPeriodeEmploiDeb(): ?DateTime {
        return $this->periodeEmploiDeb;
    }

    /**
     * Get the periode emploi fin.
     *
     * @return DateTime|null Returns the periode emploi fin.
     */
    public function getPeriodeEmploiFin(): ?DateTime {
        return $this->periodeEmploiFin;
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
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getPrenom(): ?string {
        return $this->prenom;
    }

    /**
     * Get the sign autre.
     *
     * @return string|null Returns the sign autre.
     */
    public function getSignAutre(): ?string {
        return $this->signAutre;
    }

    /**
     * Get the sign date.
     *
     * @return DateTime|null Returns the sign date.
     */
    public function getSignDate(): ?DateTime {
        return $this->signDate;
    }

    /**
     * Get the sign form juridique.
     *
     * @return string|null Returns the sign form juridique.
     */
    public function getSignFormJuridique(): ?string {
        return $this->signFormJuridique;
    }

    /**
     * Get the sign motif rupture.
     *
     * @return string|null Returns the sign motif rupture.
     */
    public function getSignMotifRupture(): ?string {
        return $this->signMotifRupture;
    }

    /**
     * Get the sign nom.
     *
     * @return string|null Returns the sign nom.
     */
    public function getSignNom(): ?string {
        return $this->signNom;
    }

    /**
     * Get the sign prenom.
     *
     * @return string|null Returns the sign prenom.
     */
    public function getSignPrenom(): ?string {
        return $this->signPrenom;
    }

    /**
     * Get the sign qualite.
     *
     * @return int|null Returns the sign qualite.
     */
    public function getSignQualite(): ?int {
        return $this->signQualite;
    }

    /**
     * Get the sign raison sociale.
     *
     * @return string|null Returns the sign raison sociale.
     */
    public function getSignRaisonSociale(): ?string {
        return $this->signRaisonSociale;
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
     * Get the statut juridique.
     *
     * @return string|null Returns the statut juridique.
     */
    public function getStatutJuridique(): ?string {
        return $this->statutJuridique;
    }

    /**
     * Get the statut particulier.
     *
     * @return int|null Returns the statut particulier.
     */
    public function getStatutParticulier(): ?int {
        return $this->statutParticulier;
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
     * Get the titre lien parente.
     *
     * @return string|null Returns the titre lien parente.
     */
    public function getTitreLienParente(): ?string {
        return $this->titreLienParente;
    }

    /**
     * Get the type contrat.
     *
     * @return int|null Returns the type contrat.
     */
    public function getTypeContrat(): ?int {
        return $this->typeContrat;
    }

    /**
     * Get the type horaire.
     *
     * @return int|null Returns the type horaire.
     */
    public function getTypeHoraire(): ?int {
        return $this->typeHoraire;
    }

    /**
     * Set the adresse employe.
     *
     * @param string|null $adresseEmploye The adresse employe.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setAdresseEmploye(?string $adresseEmploye): AttestationCacm {
        $this->adresseEmploye = $adresseEmploye;
        return $this;
    }

    /**
     * Set the autre contrat.
     *
     * @param string|null $autreContrat The autre contrat.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setAutreContrat(?string $autreContrat): AttestationCacm {
        $this->autreContrat = $autreContrat;
        return $this;
    }

    /**
     * Set the autre statut.
     *
     * @param string|null $autreStatut The autre statut.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setAutreStatut(?string $autreStatut): AttestationCacm {
        $this->autreStatut = $autreStatut;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setCodeEtablissement(?int $codeEtablissement): AttestationCacm {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string|null $codeMotifRupture The code motif rupture.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setCodeMotifRupture(?string $codeMotifRupture): AttestationCacm {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setCodePostal(?string $codePostal): AttestationCacm {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setDateNaissance(?DateTime $dateNaissance): AttestationCacm {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the date notification.
     *
     * @param DateTime|null $dateNotification The date notification.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setDateNotification(?DateTime $dateNotification): AttestationCacm {
        $this->dateNotification = $dateNotification;
        return $this;
    }

    /**
     * Set the date paiement.
     *
     * @param DateTime|null $datePaiement The date paiement.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setDatePaiement(?DateTime $datePaiement): AttestationCacm {
        $this->datePaiement = $datePaiement;
        return $this;
    }

    /**
     * Set the dern lieu travail.
     *
     * @param string|null $dernLieuTravail The dern lieu travail.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setDernLieuTravail(?string $dernLieuTravail): AttestationCacm {
        $this->dernLieuTravail = $dernLieuTravail;
        return $this;
    }

    /**
     * Set the dernier emploi.
     *
     * @param string|null $dernierEmploi The dernier emploi.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setDernierEmploi(?string $dernierEmploi): AttestationCacm {
        $this->dernierEmploi = $dernierEmploi;
        return $this;
    }

    /**
     * Set the dt deb preavis effectue.
     *
     * @param DateTime|null $dtDebPreavisEffectue The dt deb preavis effectue.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setDtDebPreavisEffectue(?DateTime $dtDebPreavisEffectue): AttestationCacm {
        $this->dtDebPreavisEffectue = $dtDebPreavisEffectue;
        return $this;
    }

    /**
     * Set the dt deb preavis non effectue.
     *
     * @param DateTime|null $dtDebPreavisNonEffectue The dt deb preavis non effectue.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setDtDebPreavisNonEffectue(?DateTime $dtDebPreavisNonEffectue): AttestationCacm {
        $this->dtDebPreavisNonEffectue = $dtDebPreavisNonEffectue;
        return $this;
    }

    /**
     * Set the dt debut emploi.
     *
     * @param DateTime|null $dtDebutEmploi The dt debut emploi.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setDtDebutEmploi(?DateTime $dtDebutEmploi): AttestationCacm {
        $this->dtDebutEmploi = $dtDebutEmploi;
        return $this;
    }

    /**
     * Set the dt dern jour trav.
     *
     * @param DateTime|null $dtDernJourTrav The dt dern jour trav.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setDtDernJourTrav(?DateTime $dtDernJourTrav): AttestationCacm {
        $this->dtDernJourTrav = $dtDernJourTrav;
        return $this;
    }

    /**
     * Set the dt fin emploi.
     *
     * @param DateTime|null $dtFinEmploi The dt fin emploi.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setDtFinEmploi(?DateTime $dtFinEmploi): AttestationCacm {
        $this->dtFinEmploi = $dtFinEmploi;
        return $this;
    }

    /**
     * Set the dt fin preavis effectue.
     *
     * @param DateTime|null $dtFinPreavisEffectue The dt fin preavis effectue.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setDtFinPreavisEffectue(?DateTime $dtFinPreavisEffectue): AttestationCacm {
        $this->dtFinPreavisEffectue = $dtFinPreavisEffectue;
        return $this;
    }

    /**
     * Set the dt fin preavis non effectue.
     *
     * @param DateTime|null $dtFinPreavisNonEffectue The dt fin preavis non effectue.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setDtFinPreavisNonEffectue(?DateTime $dtFinPreavisNonEffectue): AttestationCacm {
        $this->dtFinPreavisNonEffectue = $dtFinPreavisNonEffectue;
        return $this;
    }

    /**
     * Set the etbl adr.
     *
     * @param string|null $etblAdr The etbl adr.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setEtblAdr(?string $etblAdr): AttestationCacm {
        $this->etblAdr = $etblAdr;
        return $this;
    }

    /**
     * Set the etbl cacm.
     *
     * @param string|null $etblCacm The etbl cacm.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setEtblCacm(?string $etblCacm): AttestationCacm {
        $this->etblCacm = $etblCacm;
        return $this;
    }

    /**
     * Set the etbl effectif.
     *
     * @param int|null $etblEffectif The etbl effectif.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setEtblEffectif(?int $etblEffectif): AttestationCacm {
        $this->etblEffectif = $etblEffectif;
        return $this;
    }

    /**
     * Set the etbl fax.
     *
     * @param string|null $etblFax The etbl fax.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setEtblFax(?string $etblFax): AttestationCacm {
        $this->etblFax = $etblFax;
        return $this;
    }

    /**
     * Set the etbl mail.
     *
     * @param string|null $etblMail The etbl mail.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setEtblMail(?string $etblMail): AttestationCacm {
        $this->etblMail = $etblMail;
        return $this;
    }

    /**
     * Set the etbl naf.
     *
     * @param string|null $etblNaf The etbl naf.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setEtblNaf(?string $etblNaf): AttestationCacm {
        $this->etblNaf = $etblNaf;
        return $this;
    }

    /**
     * Set the etbl siret.
     *
     * @param string|null $etblSiret The etbl siret.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setEtblSiret(?string $etblSiret): AttestationCacm {
        $this->etblSiret = $etblSiret;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string|null $etblTel The etbl tel.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setEtblTel(?string $etblTel): AttestationCacm {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the indemn autre.
     *
     * @param bool|null $indemnAutre The indemn autre.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setIndemnAutre(?bool $indemnAutre): AttestationCacm {
        $this->indemnAutre = $indemnAutre;
        return $this;
    }

    /**
     * Set the indemn legale.
     *
     * @param bool|null $indemnLegale The indemn legale.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setIndemnLegale(?bool $indemnLegale): AttestationCacm {
        $this->indemnLegale = $indemnLegale;
        return $this;
    }

    /**
     * Set the indemn lic.
     *
     * @param bool|null $indemnLic The indemn lic.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setIndemnLic(?bool $indemnLic): AttestationCacm {
        $this->indemnLic = $indemnLic;
        return $this;
    }

    /**
     * Set the indemn supp.
     *
     * @param bool|null $indemnSupp The indemn supp.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setIndemnSupp(?bool $indemnSupp): AttestationCacm {
        $this->indemnSupp = $indemnSupp;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setLienDocument(?string $lienDocument): AttestationCacm {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lien parente.
     *
     * @param bool|null $lienParente The lien parente.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setLienParente(?bool $lienParente): AttestationCacm {
        $this->lienParente = $lienParente;
        return $this;
    }

    /**
     * Set the motif preavis non paye.
     *
     * @param string|null $motifPreavisNonPaye The motif preavis non paye.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setMotifPreavisNonPaye(?string $motifPreavisNonPaye): AttestationCacm {
        $this->motifPreavisNonPaye = $motifPreavisNonPaye;
        return $this;
    }

    /**
     * Set the motif rupture.
     *
     * @param string|null $motifRupture The motif rupture.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setMotifRupture(?string $motifRupture): AttestationCacm {
        $this->motifRupture = $motifRupture;
        return $this;
    }

    /**
     * Set the mt indemn autre.
     *
     * @param float|null $mtIndemnAutre The mt indemn autre.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setMtIndemnAutre(?float $mtIndemnAutre): AttestationCacm {
        $this->mtIndemnAutre = $mtIndemnAutre;
        return $this;
    }

    /**
     * Set the mt indemn legale.
     *
     * @param float|null $mtIndemnLegale The mt indemn legale.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setMtIndemnLegale(?float $mtIndemnLegale): AttestationCacm {
        $this->mtIndemnLegale = $mtIndemnLegale;
        return $this;
    }

    /**
     * Set the mt indemn lic.
     *
     * @param float|null $mtIndemnLic The mt indemn lic.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setMtIndemnLic(?float $mtIndemnLic): AttestationCacm {
        $this->mtIndemnLic = $mtIndemnLic;
        return $this;
    }

    /**
     * Set the mt indemn supp.
     *
     * @param float|null $mtIndemnSupp The mt indemn supp.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setMtIndemnSupp(?float $mtIndemnSupp): AttestationCacm {
        $this->mtIndemnSupp = $mtIndemnSupp;
        return $this;
    }

    /**
     * Set the mt salaire brut.
     *
     * @param float|null $mtSalaireBrut The mt salaire brut.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setMtSalaireBrut(?float $mtSalaireBrut): AttestationCacm {
        $this->mtSalaireBrut = $mtSalaireBrut;
        return $this;
    }

    /**
     * Set the nb heure mens.
     *
     * @param float|null $nbHeureMens The nb heure mens.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setNbHeureMens(?float $nbHeureMens): AttestationCacm {
        $this->nbHeureMens = $nbHeureMens;
        return $this;
    }

    /**
     * Set the niveau qualif.
     *
     * @param string|null $niveauQualif The niveau qualif.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setNiveauQualif(?string $niveauQualif): AttestationCacm {
        $this->niveauQualif = $niveauQualif;
        return $this;
    }

    /**
     * Set the no cacm.
     *
     * @param string|null $noCacm The no cacm.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setNoCacm(?string $noCacm): AttestationCacm {
        $this->noCacm = $noCacm;
        return $this;
    }

    /**
     * Set the no cssm.
     *
     * @param string|null $noCssm The no cssm.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setNoCssm(?string $noCssm): AttestationCacm {
        $this->noCssm = $noCssm;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string|null $nomMarital The nom marital.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setNomMarital(?string $nomMarital): AttestationCacm {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string|null $nomNaissance The nom naissance.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setNomNaissance(?string $nomNaissance): AttestationCacm {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string|null $numeroAttestation The numero attestation.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setNumeroAttestation(?string $numeroAttestation): AttestationCacm {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setNumeroEmploye(?string $numeroEmploye): AttestationCacm {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the organisme cacm.
     *
     * @param string|null $organismeCacm The organisme cacm.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setOrganismeCacm(?string $organismeCacm): AttestationCacm {
        $this->organismeCacm = $organismeCacm;
        return $this;
    }

    /**
     * Set the periode emploi deb.
     *
     * @param DateTime|null $periodeEmploiDeb The periode emploi deb.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setPeriodeEmploiDeb(?DateTime $periodeEmploiDeb): AttestationCacm {
        $this->periodeEmploiDeb = $periodeEmploiDeb;
        return $this;
    }

    /**
     * Set the periode emploi fin.
     *
     * @param DateTime|null $periodeEmploiFin The periode emploi fin.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setPeriodeEmploiFin(?DateTime $periodeEmploiFin): AttestationCacm {
        $this->periodeEmploiFin = $periodeEmploiFin;
        return $this;
    }

    /**
     * Set the preavis non effectue paye.
     *
     * @param bool|null $preavisNonEffectuePaye The preavis non effectue paye.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setPreavisNonEffectuePaye(?bool $preavisNonEffectuePaye): AttestationCacm {
        $this->preavisNonEffectuePaye = $preavisNonEffectuePaye;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setPrenom(?string $prenom): AttestationCacm {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the sign autre.
     *
     * @param string|null $signAutre The sign autre.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setSignAutre(?string $signAutre): AttestationCacm {
        $this->signAutre = $signAutre;
        return $this;
    }

    /**
     * Set the sign date.
     *
     * @param DateTime|null $signDate The sign date.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setSignDate(?DateTime $signDate): AttestationCacm {
        $this->signDate = $signDate;
        return $this;
    }

    /**
     * Set the sign form juridique.
     *
     * @param string|null $signFormJuridique The sign form juridique.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setSignFormJuridique(?string $signFormJuridique): AttestationCacm {
        $this->signFormJuridique = $signFormJuridique;
        return $this;
    }

    /**
     * Set the sign motif rupture.
     *
     * @param string|null $signMotifRupture The sign motif rupture.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setSignMotifRupture(?string $signMotifRupture): AttestationCacm {
        $this->signMotifRupture = $signMotifRupture;
        return $this;
    }

    /**
     * Set the sign nom.
     *
     * @param string|null $signNom The sign nom.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setSignNom(?string $signNom): AttestationCacm {
        $this->signNom = $signNom;
        return $this;
    }

    /**
     * Set the sign prenom.
     *
     * @param string|null $signPrenom The sign prenom.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setSignPrenom(?string $signPrenom): AttestationCacm {
        $this->signPrenom = $signPrenom;
        return $this;
    }

    /**
     * Set the sign qualite.
     *
     * @param int|null $signQualite The sign qualite.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setSignQualite(?int $signQualite): AttestationCacm {
        $this->signQualite = $signQualite;
        return $this;
    }

    /**
     * Set the sign raison sociale.
     *
     * @param string|null $signRaisonSociale The sign raison sociale.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setSignRaisonSociale(?string $signRaisonSociale): AttestationCacm {
        $this->signRaisonSociale = $signRaisonSociale;
        return $this;
    }

    /**
     * Set the statut cadre.
     *
     * @param bool|null $statutCadre The statut cadre.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setStatutCadre(?bool $statutCadre): AttestationCacm {
        $this->statutCadre = $statutCadre;
        return $this;
    }

    /**
     * Set the statut juridique.
     *
     * @param string|null $statutJuridique The statut juridique.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setStatutJuridique(?string $statutJuridique): AttestationCacm {
        $this->statutJuridique = $statutJuridique;
        return $this;
    }

    /**
     * Set the statut particulier.
     *
     * @param int|null $statutParticulier The statut particulier.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setStatutParticulier(?int $statutParticulier): AttestationCacm {
        $this->statutParticulier = $statutParticulier;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setTitre(?string $titre): AttestationCacm {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the titre lien parente.
     *
     * @param string|null $titreLienParente The titre lien parente.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setTitreLienParente(?string $titreLienParente): AttestationCacm {
        $this->titreLienParente = $titreLienParente;
        return $this;
    }

    /**
     * Set the type contrat.
     *
     * @param int|null $typeContrat The type contrat.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setTypeContrat(?int $typeContrat): AttestationCacm {
        $this->typeContrat = $typeContrat;
        return $this;
    }

    /**
     * Set the type horaire.
     *
     * @param int|null $typeHoraire The type horaire.
     * @return AttestationCacm Returns this Attestation cacm.
     */
    public function setTypeHoraire(?int $typeHoraire): AttestationCacm {
        $this->typeHoraire = $typeHoraire;
        return $this;
    }
}
