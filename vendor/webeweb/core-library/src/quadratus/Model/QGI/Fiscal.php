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
 * Fiscal.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Fiscal {

    /**
     * Abattement cga.
     *
     * @var bool|null
     */
    private $abattementCga;

    /**
     * Assurance controle.
     *
     * @var bool|null
     */
    private $assuranceControle;

    /**
     * Cd assiette.
     *
     * @var string|null
     */
    private $cdAssiette;

    /**
     * Cdi.
     *
     * @var string|null
     */
    private $cdi;

    /**
     * Cga.
     *
     * @var bool|null
     */
    private $cga;

    /**
     * Code centre impot.
     *
     * @var string|null
     */
    private $codeCentreImpot;

    /**
     * Code cga.
     *
     * @var string|null
     */
    private $codeCga;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code impot direct.
     *
     * @var string|null
     */
    private $codeImpotDirect;

    /**
     * Code recette impots.
     *
     * @var string|null
     */
    private $codeRecetteImpots;

    /**
     * Code regime tva.
     *
     * @var string|null
     */
    private $codeRegimeTva;

    /**
     * Contact centre impots.
     *
     * @var string|null
     */
    private $contactCentreImpots;

    /**
     * Contact cga.
     *
     * @var string|null
     */
    private $contactCga;

    /**
     * Contact recette impots.
     *
     * @var string|null
     */
    private $contactRecetteImpots;

    /**
     * Date adhesion cga.
     *
     * @var DateTime|null
     */
    private $dateAdhesionCga;

    /**
     * Date effet adhesion cga.
     *
     * @var DateTime|null
     */
    private $dateEffetAdhesionCga;

    /**
     * Date effet radiation cga.
     *
     * @var DateTime|null
     */
    private $dateEffetRadiationCga;

    /**
     * Date radiation cga.
     *
     * @var DateTime|null
     */
    private $dateRadiationCga;

    /**
     * Declaration sur.
     *
     * @var string|null
     */
    private $declarationSur;

    /**
     * Duree exercice.
     *
     * @var string|null
     */
    private $dureeExercice;

    /**
     * Edi tdfc bd f.
     *
     * @var bool|null
     */
    private $ediTdfcBdF;

    /**
     * Frp cle.
     *
     * @var string|null
     */
    private $frpCle;

    /**
     * Frp dossier.
     *
     * @var string|null
     */
    private $frpDossier;

    /**
     * Frp recette.
     *
     * @var string|null
     */
    private $frpRecette;

    /**
     * Id impots gouv fr.
     *
     * @var string|null
     */
    private $idImpotsGouvFr;

    /**
     * Impot.
     *
     * @var string|null
     */
    private $impot;

    /**
     * Insp.
     *
     * @var string|null
     */
    private $insp;

    /**
     * Jour declaration.
     *
     * @var string|null
     */
    private $jourDeclaration;

    /**
     * Mandat date debut dads.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutDads;

    /**
     * Mandat date debut ducsedi.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutDucsedi;

    /**
     * Mandat date debut editva.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutEditva;

    /**
     * Mandat date debut etebac.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutEtebac;

    /**
     * Mandat date debut pedi.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutPedi;

    /**
     * Mandat date debut req.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutReq;

    /**
     * Mandat date debut tdfc.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutTdfc;

    /**
     * Mandat duree dads.
     *
     * @var int|null
     */
    private $mandatDureeDads;

    /**
     * Mandat duree ducsedi.
     *
     * @var int|null
     */
    private $mandatDureeDucsedi;

    /**
     * Mandat duree editva.
     *
     * @var int|null
     */
    private $mandatDureeEditva;

    /**
     * Mandat duree etebac.
     *
     * @var int|null
     */
    private $mandatDureeEtebac;

    /**
     * Mandat duree pedi.
     *
     * @var int|null
     */
    private $mandatDureePedi;

    /**
     * Mandat duree req.
     *
     * @var int|null
     */
    private $mandatDureeReq;

    /**
     * Mandat duree tdfc.
     *
     * @var int|null
     */
    private $mandatDureeTdfc;

    /**
     * Mandat piece jointe dads.
     *
     * @var string|null
     */
    private $mandatPieceJointeDads;

    /**
     * Mandat piece jointe ducsedi.
     *
     * @var string|null
     */
    private $mandatPieceJointeDucsedi;

    /**
     * Mandat piece jointe editva.
     *
     * @var string|null
     */
    private $mandatPieceJointeEditva;

    /**
     * Mandat piece jointe etebac.
     *
     * @var string|null
     */
    private $mandatPieceJointeEtebac;

    /**
     * Mandat piece jointe pedi.
     *
     * @var string|null
     */
    private $mandatPieceJointePedi;

    /**
     * Mandat piece jointe req.
     *
     * @var string|null
     */
    private $mandatPieceJointeReq;

    /**
     * Mandat piece jointe tdfc.
     *
     * @var string|null
     */
    private $mandatPieceJointeTdfc;

    /**
     * Mandat suivi dads.
     *
     * @var bool|null
     */
    private $mandatSuiviDads;

    /**
     * Mandat suivi ducsedi.
     *
     * @var bool|null
     */
    private $mandatSuiviDucsedi;

    /**
     * Mandat suivi editva.
     *
     * @var bool|null
     */
    private $mandatSuiviEditva;

    /**
     * Mandat suivi etebac.
     *
     * @var bool|null
     */
    private $mandatSuiviEtebac;

    /**
     * Mandat suivi pedi.
     *
     * @var bool|null
     */
    private $mandatSuiviPedi;

    /**
     * Mandat suivi req.
     *
     * @var bool|null
     */
    private $mandatSuiviReq;

    /**
     * Mandat suivi tdfc.
     *
     * @var bool|null
     */
    private $mandatSuiviTdfc;

    /**
     * Mdp impots gouv fr.
     *
     * @var string|null
     */
    private $mdpImpotsGouvFr;

    /**
     * Methode calcul.
     *
     * @var string|null
     */
    private $methodeCalcul;

    /**
     * Motif radiation cga.
     *
     * @var string|null
     */
    private $motifRadiationCga;

    /**
     * Numero registre.
     *
     * @var string|null
     */
    private $numeroRegistre;

    /**
     * Periodicite tva.
     *
     * @var string|null
     */
    private $periodiciteTva;

    /**
     * Pme communautaire.
     *
     * @var bool|null
     */
    private $pmeCommunautaire;

    /**
     * Pole enregistrement.
     *
     * @var string|null
     */
    private $poleEnregistrement;

    /**
     * Ref oblig fisc.
     *
     * @var string|null
     */
    private $refObligFisc;

    /**
     * Ref paiement dgi.
     *
     * @var string|null
     */
    private $refPaiementDgi;

    /**
     * Regime.
     *
     * @var string|null
     */
    private $regime;

    /**
     * Regime agricole.
     *
     * @var bool|null
     */
    private $regimeAgricole;

    /**
     * Regime groupe.
     *
     * @var bool|null
     */
    private $regimeGroupe;

    /**
     * Rof cfe.
     *
     * @var string|null
     */
    private $rofCfe;

    /**
     * Rof cvae.
     *
     * @var string|null
     */
    private $rofCvae;

    /**
     * Rof cvaep.
     *
     * @var string|null
     */
    private $rofCvaep;

    /**
     * Rof is.
     *
     * @var string|null
     */
    private $rofIs;

    /**
     * Rof rcm.
     *
     * @var string|null
     */
    private $rofRcm;

    /**
     * Rof tdfc group.
     *
     * @var string|null
     */
    private $rofTdfcGroup;

    /**
     * Rof ts.
     *
     * @var string|null
     */
    private $rofTs;

    /**
     * Rof tva.
     *
     * @var string|null
     */
    private $rofTva;

    /**
     * Societe mere.
     *
     * @var bool|null
     */
    private $societeMere;

    /**
     * Tresorerie.
     *
     * @var string|null
     */
    private $tresorerie;

    /**
     * Tresorerie is.
     *
     * @var string|null
     */
    private $tresorerieIs;

    /**
     * Tva ca12 ae.
     *
     * @var string|null
     */
    private $tvaCa12Ae;

    /**
     * Tva decaissements.
     *
     * @var bool|null
     */
    private $tvaDecaissements;

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
     * Tva etab nom rs.
     *
     * @var string|null
     */
    private $tvaEtabNomRs;

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
     * Tva faite par client.
     *
     * @var bool|null
     */
    private $tvaFaiteParClient;

    /**
     * Tva nom vir.
     *
     * @var string|null
     */
    private $tvaNomVir;

    /**
     * Tvarib vir.
     *
     * @var string|null
     */
    private $tvaribVir;

    /**
     * Viseur conventionne.
     *
     * @var bool|null
     */
    private $viseurConventionne;

    /**
     * Viseur dt attest.
     *
     * @var DateTime|null
     */
    private $viseurDtAttest;

    /**
     * Viseur num attest.
     *
     * @var string|null
     */
    private $viseurNumAttest;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the abattement cga.
     *
     * @return bool|null Returns the abattement cga.
     */
    public function getAbattementCga(): ?bool {
        return $this->abattementCga;
    }

    /**
     * Get the assurance controle.
     *
     * @return bool|null Returns the assurance controle.
     */
    public function getAssuranceControle(): ?bool {
        return $this->assuranceControle;
    }

    /**
     * Get the cd assiette.
     *
     * @return string|null Returns the cd assiette.
     */
    public function getCdAssiette(): ?string {
        return $this->cdAssiette;
    }

    /**
     * Get the cdi.
     *
     * @return string|null Returns the cdi.
     */
    public function getCdi(): ?string {
        return $this->cdi;
    }

    /**
     * Get the cga.
     *
     * @return bool|null Returns the cga.
     */
    public function getCga(): ?bool {
        return $this->cga;
    }

    /**
     * Get the code centre impot.
     *
     * @return string|null Returns the code centre impot.
     */
    public function getCodeCentreImpot(): ?string {
        return $this->codeCentreImpot;
    }

    /**
     * Get the code cga.
     *
     * @return string|null Returns the code cga.
     */
    public function getCodeCga(): ?string {
        return $this->codeCga;
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
     * Get the code impot direct.
     *
     * @return string|null Returns the code impot direct.
     */
    public function getCodeImpotDirect(): ?string {
        return $this->codeImpotDirect;
    }

    /**
     * Get the code recette impots.
     *
     * @return string|null Returns the code recette impots.
     */
    public function getCodeRecetteImpots(): ?string {
        return $this->codeRecetteImpots;
    }

    /**
     * Get the code regime tva.
     *
     * @return string|null Returns the code regime tva.
     */
    public function getCodeRegimeTva(): ?string {
        return $this->codeRegimeTva;
    }

    /**
     * Get the contact centre impots.
     *
     * @return string|null Returns the contact centre impots.
     */
    public function getContactCentreImpots(): ?string {
        return $this->contactCentreImpots;
    }

    /**
     * Get the contact cga.
     *
     * @return string|null Returns the contact cga.
     */
    public function getContactCga(): ?string {
        return $this->contactCga;
    }

    /**
     * Get the contact recette impots.
     *
     * @return string|null Returns the contact recette impots.
     */
    public function getContactRecetteImpots(): ?string {
        return $this->contactRecetteImpots;
    }

    /**
     * Get the date adhesion cga.
     *
     * @return DateTime|null Returns the date adhesion cga.
     */
    public function getDateAdhesionCga(): ?DateTime {
        return $this->dateAdhesionCga;
    }

    /**
     * Get the date effet adhesion cga.
     *
     * @return DateTime|null Returns the date effet adhesion cga.
     */
    public function getDateEffetAdhesionCga(): ?DateTime {
        return $this->dateEffetAdhesionCga;
    }

    /**
     * Get the date effet radiation cga.
     *
     * @return DateTime|null Returns the date effet radiation cga.
     */
    public function getDateEffetRadiationCga(): ?DateTime {
        return $this->dateEffetRadiationCga;
    }

    /**
     * Get the date radiation cga.
     *
     * @return DateTime|null Returns the date radiation cga.
     */
    public function getDateRadiationCga(): ?DateTime {
        return $this->dateRadiationCga;
    }

    /**
     * Get the declaration sur.
     *
     * @return string|null Returns the declaration sur.
     */
    public function getDeclarationSur(): ?string {
        return $this->declarationSur;
    }

    /**
     * Get the duree exercice.
     *
     * @return string|null Returns the duree exercice.
     */
    public function getDureeExercice(): ?string {
        return $this->dureeExercice;
    }

    /**
     * Get the edi tdfc bd f.
     *
     * @return bool|null Returns the edi tdfc bd f.
     */
    public function getEdiTdfcBdF(): ?bool {
        return $this->ediTdfcBdF;
    }

    /**
     * Get the frp cle.
     *
     * @return string|null Returns the frp cle.
     */
    public function getFrpCle(): ?string {
        return $this->frpCle;
    }

    /**
     * Get the frp dossier.
     *
     * @return string|null Returns the frp dossier.
     */
    public function getFrpDossier(): ?string {
        return $this->frpDossier;
    }

    /**
     * Get the frp recette.
     *
     * @return string|null Returns the frp recette.
     */
    public function getFrpRecette(): ?string {
        return $this->frpRecette;
    }

    /**
     * Get the id impots gouv fr.
     *
     * @return string|null Returns the id impots gouv fr.
     */
    public function getIdImpotsGouvFr(): ?string {
        return $this->idImpotsGouvFr;
    }

    /**
     * Get the impot.
     *
     * @return string|null Returns the impot.
     */
    public function getImpot(): ?string {
        return $this->impot;
    }

    /**
     * Get the insp.
     *
     * @return string|null Returns the insp.
     */
    public function getInsp(): ?string {
        return $this->insp;
    }

    /**
     * Get the jour declaration.
     *
     * @return string|null Returns the jour declaration.
     */
    public function getJourDeclaration(): ?string {
        return $this->jourDeclaration;
    }

    /**
     * Get the mandat date debut dads.
     *
     * @return DateTime|null Returns the mandat date debut dads.
     */
    public function getMandatDateDebutDads(): ?DateTime {
        return $this->mandatDateDebutDads;
    }

    /**
     * Get the mandat date debut ducsedi.
     *
     * @return DateTime|null Returns the mandat date debut ducsedi.
     */
    public function getMandatDateDebutDucsedi(): ?DateTime {
        return $this->mandatDateDebutDucsedi;
    }

    /**
     * Get the mandat date debut editva.
     *
     * @return DateTime|null Returns the mandat date debut editva.
     */
    public function getMandatDateDebutEditva(): ?DateTime {
        return $this->mandatDateDebutEditva;
    }

    /**
     * Get the mandat date debut etebac.
     *
     * @return DateTime|null Returns the mandat date debut etebac.
     */
    public function getMandatDateDebutEtebac(): ?DateTime {
        return $this->mandatDateDebutEtebac;
    }

    /**
     * Get the mandat date debut pedi.
     *
     * @return DateTime|null Returns the mandat date debut pedi.
     */
    public function getMandatDateDebutPedi(): ?DateTime {
        return $this->mandatDateDebutPedi;
    }

    /**
     * Get the mandat date debut req.
     *
     * @return DateTime|null Returns the mandat date debut req.
     */
    public function getMandatDateDebutReq(): ?DateTime {
        return $this->mandatDateDebutReq;
    }

    /**
     * Get the mandat date debut tdfc.
     *
     * @return DateTime|null Returns the mandat date debut tdfc.
     */
    public function getMandatDateDebutTdfc(): ?DateTime {
        return $this->mandatDateDebutTdfc;
    }

    /**
     * Get the mandat duree dads.
     *
     * @return int|null Returns the mandat duree dads.
     */
    public function getMandatDureeDads(): ?int {
        return $this->mandatDureeDads;
    }

    /**
     * Get the mandat duree ducsedi.
     *
     * @return int|null Returns the mandat duree ducsedi.
     */
    public function getMandatDureeDucsedi(): ?int {
        return $this->mandatDureeDucsedi;
    }

    /**
     * Get the mandat duree editva.
     *
     * @return int|null Returns the mandat duree editva.
     */
    public function getMandatDureeEditva(): ?int {
        return $this->mandatDureeEditva;
    }

    /**
     * Get the mandat duree etebac.
     *
     * @return int|null Returns the mandat duree etebac.
     */
    public function getMandatDureeEtebac(): ?int {
        return $this->mandatDureeEtebac;
    }

    /**
     * Get the mandat duree pedi.
     *
     * @return int|null Returns the mandat duree pedi.
     */
    public function getMandatDureePedi(): ?int {
        return $this->mandatDureePedi;
    }

    /**
     * Get the mandat duree req.
     *
     * @return int|null Returns the mandat duree req.
     */
    public function getMandatDureeReq(): ?int {
        return $this->mandatDureeReq;
    }

    /**
     * Get the mandat duree tdfc.
     *
     * @return int|null Returns the mandat duree tdfc.
     */
    public function getMandatDureeTdfc(): ?int {
        return $this->mandatDureeTdfc;
    }

    /**
     * Get the mandat piece jointe dads.
     *
     * @return string|null Returns the mandat piece jointe dads.
     */
    public function getMandatPieceJointeDads(): ?string {
        return $this->mandatPieceJointeDads;
    }

    /**
     * Get the mandat piece jointe ducsedi.
     *
     * @return string|null Returns the mandat piece jointe ducsedi.
     */
    public function getMandatPieceJointeDucsedi(): ?string {
        return $this->mandatPieceJointeDucsedi;
    }

    /**
     * Get the mandat piece jointe editva.
     *
     * @return string|null Returns the mandat piece jointe editva.
     */
    public function getMandatPieceJointeEditva(): ?string {
        return $this->mandatPieceJointeEditva;
    }

    /**
     * Get the mandat piece jointe etebac.
     *
     * @return string|null Returns the mandat piece jointe etebac.
     */
    public function getMandatPieceJointeEtebac(): ?string {
        return $this->mandatPieceJointeEtebac;
    }

    /**
     * Get the mandat piece jointe pedi.
     *
     * @return string|null Returns the mandat piece jointe pedi.
     */
    public function getMandatPieceJointePedi(): ?string {
        return $this->mandatPieceJointePedi;
    }

    /**
     * Get the mandat piece jointe req.
     *
     * @return string|null Returns the mandat piece jointe req.
     */
    public function getMandatPieceJointeReq(): ?string {
        return $this->mandatPieceJointeReq;
    }

    /**
     * Get the mandat piece jointe tdfc.
     *
     * @return string|null Returns the mandat piece jointe tdfc.
     */
    public function getMandatPieceJointeTdfc(): ?string {
        return $this->mandatPieceJointeTdfc;
    }

    /**
     * Get the mandat suivi dads.
     *
     * @return bool|null Returns the mandat suivi dads.
     */
    public function getMandatSuiviDads(): ?bool {
        return $this->mandatSuiviDads;
    }

    /**
     * Get the mandat suivi ducsedi.
     *
     * @return bool|null Returns the mandat suivi ducsedi.
     */
    public function getMandatSuiviDucsedi(): ?bool {
        return $this->mandatSuiviDucsedi;
    }

    /**
     * Get the mandat suivi editva.
     *
     * @return bool|null Returns the mandat suivi editva.
     */
    public function getMandatSuiviEditva(): ?bool {
        return $this->mandatSuiviEditva;
    }

    /**
     * Get the mandat suivi etebac.
     *
     * @return bool|null Returns the mandat suivi etebac.
     */
    public function getMandatSuiviEtebac(): ?bool {
        return $this->mandatSuiviEtebac;
    }

    /**
     * Get the mandat suivi pedi.
     *
     * @return bool|null Returns the mandat suivi pedi.
     */
    public function getMandatSuiviPedi(): ?bool {
        return $this->mandatSuiviPedi;
    }

    /**
     * Get the mandat suivi req.
     *
     * @return bool|null Returns the mandat suivi req.
     */
    public function getMandatSuiviReq(): ?bool {
        return $this->mandatSuiviReq;
    }

    /**
     * Get the mandat suivi tdfc.
     *
     * @return bool|null Returns the mandat suivi tdfc.
     */
    public function getMandatSuiviTdfc(): ?bool {
        return $this->mandatSuiviTdfc;
    }

    /**
     * Get the mdp impots gouv fr.
     *
     * @return string|null Returns the mdp impots gouv fr.
     */
    public function getMdpImpotsGouvFr(): ?string {
        return $this->mdpImpotsGouvFr;
    }

    /**
     * Get the methode calcul.
     *
     * @return string|null Returns the methode calcul.
     */
    public function getMethodeCalcul(): ?string {
        return $this->methodeCalcul;
    }

    /**
     * Get the motif radiation cga.
     *
     * @return string|null Returns the motif radiation cga.
     */
    public function getMotifRadiationCga(): ?string {
        return $this->motifRadiationCga;
    }

    /**
     * Get the numero registre.
     *
     * @return string|null Returns the numero registre.
     */
    public function getNumeroRegistre(): ?string {
        return $this->numeroRegistre;
    }

    /**
     * Get the periodicite tva.
     *
     * @return string|null Returns the periodicite tva.
     */
    public function getPeriodiciteTva(): ?string {
        return $this->periodiciteTva;
    }

    /**
     * Get the pme communautaire.
     *
     * @return bool|null Returns the pme communautaire.
     */
    public function getPmeCommunautaire(): ?bool {
        return $this->pmeCommunautaire;
    }

    /**
     * Get the pole enregistrement.
     *
     * @return string|null Returns the pole enregistrement.
     */
    public function getPoleEnregistrement(): ?string {
        return $this->poleEnregistrement;
    }

    /**
     * Get the ref oblig fisc.
     *
     * @return string|null Returns the ref oblig fisc.
     */
    public function getRefObligFisc(): ?string {
        return $this->refObligFisc;
    }

    /**
     * Get the ref paiement dgi.
     *
     * @return string|null Returns the ref paiement dgi.
     */
    public function getRefPaiementDgi(): ?string {
        return $this->refPaiementDgi;
    }

    /**
     * Get the regime.
     *
     * @return string|null Returns the regime.
     */
    public function getRegime(): ?string {
        return $this->regime;
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
     * Get the regime groupe.
     *
     * @return bool|null Returns the regime groupe.
     */
    public function getRegimeGroupe(): ?bool {
        return $this->regimeGroupe;
    }

    /**
     * Get the rof cfe.
     *
     * @return string|null Returns the rof cfe.
     */
    public function getRofCfe(): ?string {
        return $this->rofCfe;
    }

    /**
     * Get the rof cvae.
     *
     * @return string|null Returns the rof cvae.
     */
    public function getRofCvae(): ?string {
        return $this->rofCvae;
    }

    /**
     * Get the rof cvaep.
     *
     * @return string|null Returns the rof cvaep.
     */
    public function getRofCvaep(): ?string {
        return $this->rofCvaep;
    }

    /**
     * Get the rof is.
     *
     * @return string|null Returns the rof is.
     */
    public function getRofIs(): ?string {
        return $this->rofIs;
    }

    /**
     * Get the rof rcm.
     *
     * @return string|null Returns the rof rcm.
     */
    public function getRofRcm(): ?string {
        return $this->rofRcm;
    }

    /**
     * Get the rof tdfc group.
     *
     * @return string|null Returns the rof tdfc group.
     */
    public function getRofTdfcGroup(): ?string {
        return $this->rofTdfcGroup;
    }

    /**
     * Get the rof ts.
     *
     * @return string|null Returns the rof ts.
     */
    public function getRofTs(): ?string {
        return $this->rofTs;
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
     * Get the societe mere.
     *
     * @return bool|null Returns the societe mere.
     */
    public function getSocieteMere(): ?bool {
        return $this->societeMere;
    }

    /**
     * Get the tresorerie.
     *
     * @return string|null Returns the tresorerie.
     */
    public function getTresorerie(): ?string {
        return $this->tresorerie;
    }

    /**
     * Get the tresorerie is.
     *
     * @return string|null Returns the tresorerie is.
     */
    public function getTresorerieIs(): ?string {
        return $this->tresorerieIs;
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
     * Get the tva decaissements.
     *
     * @return bool|null Returns the tva decaissements.
     */
    public function getTvaDecaissements(): ?bool {
        return $this->tvaDecaissements;
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
     * Get the tva etab nom rs.
     *
     * @return string|null Returns the tva etab nom rs.
     */
    public function getTvaEtabNomRs(): ?string {
        return $this->tvaEtabNomRs;
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
     * Get the tva faite par client.
     *
     * @return bool|null Returns the tva faite par client.
     */
    public function getTvaFaiteParClient(): ?bool {
        return $this->tvaFaiteParClient;
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
     * Get the tvarib vir.
     *
     * @return string|null Returns the tvarib vir.
     */
    public function getTvaribVir(): ?string {
        return $this->tvaribVir;
    }

    /**
     * Get the viseur conventionne.
     *
     * @return bool|null Returns the viseur conventionne.
     */
    public function getViseurConventionne(): ?bool {
        return $this->viseurConventionne;
    }

    /**
     * Get the viseur dt attest.
     *
     * @return DateTime|null Returns the viseur dt attest.
     */
    public function getViseurDtAttest(): ?DateTime {
        return $this->viseurDtAttest;
    }

    /**
     * Get the viseur num attest.
     *
     * @return string|null Returns the viseur num attest.
     */
    public function getViseurNumAttest(): ?string {
        return $this->viseurNumAttest;
    }

    /**
     * Set the abattement cga.
     *
     * @param bool|null $abattementCga The abattement cga.
     * @return Fiscal Returns this Fiscal.
     */
    public function setAbattementCga(?bool $abattementCga): Fiscal {
        $this->abattementCga = $abattementCga;
        return $this;
    }

    /**
     * Set the assurance controle.
     *
     * @param bool|null $assuranceControle The assurance controle.
     * @return Fiscal Returns this Fiscal.
     */
    public function setAssuranceControle(?bool $assuranceControle): Fiscal {
        $this->assuranceControle = $assuranceControle;
        return $this;
    }

    /**
     * Set the cd assiette.
     *
     * @param string|null $cdAssiette The cd assiette.
     * @return Fiscal Returns this Fiscal.
     */
    public function setCdAssiette(?string $cdAssiette): Fiscal {
        $this->cdAssiette = $cdAssiette;
        return $this;
    }

    /**
     * Set the cdi.
     *
     * @param string|null $cdi The cdi.
     * @return Fiscal Returns this Fiscal.
     */
    public function setCdi(?string $cdi): Fiscal {
        $this->cdi = $cdi;
        return $this;
    }

    /**
     * Set the cga.
     *
     * @param bool|null $cga The cga.
     * @return Fiscal Returns this Fiscal.
     */
    public function setCga(?bool $cga): Fiscal {
        $this->cga = $cga;
        return $this;
    }

    /**
     * Set the code centre impot.
     *
     * @param string|null $codeCentreImpot The code centre impot.
     * @return Fiscal Returns this Fiscal.
     */
    public function setCodeCentreImpot(?string $codeCentreImpot): Fiscal {
        $this->codeCentreImpot = $codeCentreImpot;
        return $this;
    }

    /**
     * Set the code cga.
     *
     * @param string|null $codeCga The code cga.
     * @return Fiscal Returns this Fiscal.
     */
    public function setCodeCga(?string $codeCga): Fiscal {
        $this->codeCga = $codeCga;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Fiscal Returns this Fiscal.
     */
    public function setCodeClient(?string $codeClient): Fiscal {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code impot direct.
     *
     * @param string|null $codeImpotDirect The code impot direct.
     * @return Fiscal Returns this Fiscal.
     */
    public function setCodeImpotDirect(?string $codeImpotDirect): Fiscal {
        $this->codeImpotDirect = $codeImpotDirect;
        return $this;
    }

    /**
     * Set the code recette impots.
     *
     * @param string|null $codeRecetteImpots The code recette impots.
     * @return Fiscal Returns this Fiscal.
     */
    public function setCodeRecetteImpots(?string $codeRecetteImpots): Fiscal {
        $this->codeRecetteImpots = $codeRecetteImpots;
        return $this;
    }

    /**
     * Set the code regime tva.
     *
     * @param string|null $codeRegimeTva The code regime tva.
     * @return Fiscal Returns this Fiscal.
     */
    public function setCodeRegimeTva(?string $codeRegimeTva): Fiscal {
        $this->codeRegimeTva = $codeRegimeTva;
        return $this;
    }

    /**
     * Set the contact centre impots.
     *
     * @param string|null $contactCentreImpots The contact centre impots.
     * @return Fiscal Returns this Fiscal.
     */
    public function setContactCentreImpots(?string $contactCentreImpots): Fiscal {
        $this->contactCentreImpots = $contactCentreImpots;
        return $this;
    }

    /**
     * Set the contact cga.
     *
     * @param string|null $contactCga The contact cga.
     * @return Fiscal Returns this Fiscal.
     */
    public function setContactCga(?string $contactCga): Fiscal {
        $this->contactCga = $contactCga;
        return $this;
    }

    /**
     * Set the contact recette impots.
     *
     * @param string|null $contactRecetteImpots The contact recette impots.
     * @return Fiscal Returns this Fiscal.
     */
    public function setContactRecetteImpots(?string $contactRecetteImpots): Fiscal {
        $this->contactRecetteImpots = $contactRecetteImpots;
        return $this;
    }

    /**
     * Set the date adhesion cga.
     *
     * @param DateTime|null $dateAdhesionCga The date adhesion cga.
     * @return Fiscal Returns this Fiscal.
     */
    public function setDateAdhesionCga(?DateTime $dateAdhesionCga): Fiscal {
        $this->dateAdhesionCga = $dateAdhesionCga;
        return $this;
    }

    /**
     * Set the date effet adhesion cga.
     *
     * @param DateTime|null $dateEffetAdhesionCga The date effet adhesion cga.
     * @return Fiscal Returns this Fiscal.
     */
    public function setDateEffetAdhesionCga(?DateTime $dateEffetAdhesionCga): Fiscal {
        $this->dateEffetAdhesionCga = $dateEffetAdhesionCga;
        return $this;
    }

    /**
     * Set the date effet radiation cga.
     *
     * @param DateTime|null $dateEffetRadiationCga The date effet radiation cga.
     * @return Fiscal Returns this Fiscal.
     */
    public function setDateEffetRadiationCga(?DateTime $dateEffetRadiationCga): Fiscal {
        $this->dateEffetRadiationCga = $dateEffetRadiationCga;
        return $this;
    }

    /**
     * Set the date radiation cga.
     *
     * @param DateTime|null $dateRadiationCga The date radiation cga.
     * @return Fiscal Returns this Fiscal.
     */
    public function setDateRadiationCga(?DateTime $dateRadiationCga): Fiscal {
        $this->dateRadiationCga = $dateRadiationCga;
        return $this;
    }

    /**
     * Set the declaration sur.
     *
     * @param string|null $declarationSur The declaration sur.
     * @return Fiscal Returns this Fiscal.
     */
    public function setDeclarationSur(?string $declarationSur): Fiscal {
        $this->declarationSur = $declarationSur;
        return $this;
    }

    /**
     * Set the duree exercice.
     *
     * @param string|null $dureeExercice The duree exercice.
     * @return Fiscal Returns this Fiscal.
     */
    public function setDureeExercice(?string $dureeExercice): Fiscal {
        $this->dureeExercice = $dureeExercice;
        return $this;
    }

    /**
     * Set the edi tdfc bd f.
     *
     * @param bool|null $ediTdfcBdF The edi tdfc bd f.
     * @return Fiscal Returns this Fiscal.
     */
    public function setEdiTdfcBdF(?bool $ediTdfcBdF): Fiscal {
        $this->ediTdfcBdF = $ediTdfcBdF;
        return $this;
    }

    /**
     * Set the frp cle.
     *
     * @param string|null $frpCle The frp cle.
     * @return Fiscal Returns this Fiscal.
     */
    public function setFrpCle(?string $frpCle): Fiscal {
        $this->frpCle = $frpCle;
        return $this;
    }

    /**
     * Set the frp dossier.
     *
     * @param string|null $frpDossier The frp dossier.
     * @return Fiscal Returns this Fiscal.
     */
    public function setFrpDossier(?string $frpDossier): Fiscal {
        $this->frpDossier = $frpDossier;
        return $this;
    }

    /**
     * Set the frp recette.
     *
     * @param string|null $frpRecette The frp recette.
     * @return Fiscal Returns this Fiscal.
     */
    public function setFrpRecette(?string $frpRecette): Fiscal {
        $this->frpRecette = $frpRecette;
        return $this;
    }

    /**
     * Set the id impots gouv fr.
     *
     * @param string|null $idImpotsGouvFr The id impots gouv fr.
     * @return Fiscal Returns this Fiscal.
     */
    public function setIdImpotsGouvFr(?string $idImpotsGouvFr): Fiscal {
        $this->idImpotsGouvFr = $idImpotsGouvFr;
        return $this;
    }

    /**
     * Set the impot.
     *
     * @param string|null $impot The impot.
     * @return Fiscal Returns this Fiscal.
     */
    public function setImpot(?string $impot): Fiscal {
        $this->impot = $impot;
        return $this;
    }

    /**
     * Set the insp.
     *
     * @param string|null $insp The insp.
     * @return Fiscal Returns this Fiscal.
     */
    public function setInsp(?string $insp): Fiscal {
        $this->insp = $insp;
        return $this;
    }

    /**
     * Set the jour declaration.
     *
     * @param string|null $jourDeclaration The jour declaration.
     * @return Fiscal Returns this Fiscal.
     */
    public function setJourDeclaration(?string $jourDeclaration): Fiscal {
        $this->jourDeclaration = $jourDeclaration;
        return $this;
    }

    /**
     * Set the mandat date debut dads.
     *
     * @param DateTime|null $mandatDateDebutDads The mandat date debut dads.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDateDebutDads(?DateTime $mandatDateDebutDads): Fiscal {
        $this->mandatDateDebutDads = $mandatDateDebutDads;
        return $this;
    }

    /**
     * Set the mandat date debut ducsedi.
     *
     * @param DateTime|null $mandatDateDebutDucsedi The mandat date debut ducsedi.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDateDebutDucsedi(?DateTime $mandatDateDebutDucsedi): Fiscal {
        $this->mandatDateDebutDucsedi = $mandatDateDebutDucsedi;
        return $this;
    }

    /**
     * Set the mandat date debut editva.
     *
     * @param DateTime|null $mandatDateDebutEditva The mandat date debut editva.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDateDebutEditva(?DateTime $mandatDateDebutEditva): Fiscal {
        $this->mandatDateDebutEditva = $mandatDateDebutEditva;
        return $this;
    }

    /**
     * Set the mandat date debut etebac.
     *
     * @param DateTime|null $mandatDateDebutEtebac The mandat date debut etebac.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDateDebutEtebac(?DateTime $mandatDateDebutEtebac): Fiscal {
        $this->mandatDateDebutEtebac = $mandatDateDebutEtebac;
        return $this;
    }

    /**
     * Set the mandat date debut pedi.
     *
     * @param DateTime|null $mandatDateDebutPedi The mandat date debut pedi.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDateDebutPedi(?DateTime $mandatDateDebutPedi): Fiscal {
        $this->mandatDateDebutPedi = $mandatDateDebutPedi;
        return $this;
    }

    /**
     * Set the mandat date debut req.
     *
     * @param DateTime|null $mandatDateDebutReq The mandat date debut req.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDateDebutReq(?DateTime $mandatDateDebutReq): Fiscal {
        $this->mandatDateDebutReq = $mandatDateDebutReq;
        return $this;
    }

    /**
     * Set the mandat date debut tdfc.
     *
     * @param DateTime|null $mandatDateDebutTdfc The mandat date debut tdfc.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDateDebutTdfc(?DateTime $mandatDateDebutTdfc): Fiscal {
        $this->mandatDateDebutTdfc = $mandatDateDebutTdfc;
        return $this;
    }

    /**
     * Set the mandat duree dads.
     *
     * @param int|null $mandatDureeDads The mandat duree dads.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDureeDads(?int $mandatDureeDads): Fiscal {
        $this->mandatDureeDads = $mandatDureeDads;
        return $this;
    }

    /**
     * Set the mandat duree ducsedi.
     *
     * @param int|null $mandatDureeDucsedi The mandat duree ducsedi.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDureeDucsedi(?int $mandatDureeDucsedi): Fiscal {
        $this->mandatDureeDucsedi = $mandatDureeDucsedi;
        return $this;
    }

    /**
     * Set the mandat duree editva.
     *
     * @param int|null $mandatDureeEditva The mandat duree editva.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDureeEditva(?int $mandatDureeEditva): Fiscal {
        $this->mandatDureeEditva = $mandatDureeEditva;
        return $this;
    }

    /**
     * Set the mandat duree etebac.
     *
     * @param int|null $mandatDureeEtebac The mandat duree etebac.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDureeEtebac(?int $mandatDureeEtebac): Fiscal {
        $this->mandatDureeEtebac = $mandatDureeEtebac;
        return $this;
    }

    /**
     * Set the mandat duree pedi.
     *
     * @param int|null $mandatDureePedi The mandat duree pedi.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDureePedi(?int $mandatDureePedi): Fiscal {
        $this->mandatDureePedi = $mandatDureePedi;
        return $this;
    }

    /**
     * Set the mandat duree req.
     *
     * @param int|null $mandatDureeReq The mandat duree req.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDureeReq(?int $mandatDureeReq): Fiscal {
        $this->mandatDureeReq = $mandatDureeReq;
        return $this;
    }

    /**
     * Set the mandat duree tdfc.
     *
     * @param int|null $mandatDureeTdfc The mandat duree tdfc.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatDureeTdfc(?int $mandatDureeTdfc): Fiscal {
        $this->mandatDureeTdfc = $mandatDureeTdfc;
        return $this;
    }

    /**
     * Set the mandat piece jointe dads.
     *
     * @param string|null $mandatPieceJointeDads The mandat piece jointe dads.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatPieceJointeDads(?string $mandatPieceJointeDads): Fiscal {
        $this->mandatPieceJointeDads = $mandatPieceJointeDads;
        return $this;
    }

    /**
     * Set the mandat piece jointe ducsedi.
     *
     * @param string|null $mandatPieceJointeDucsedi The mandat piece jointe ducsedi.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatPieceJointeDucsedi(?string $mandatPieceJointeDucsedi): Fiscal {
        $this->mandatPieceJointeDucsedi = $mandatPieceJointeDucsedi;
        return $this;
    }

    /**
     * Set the mandat piece jointe editva.
     *
     * @param string|null $mandatPieceJointeEditva The mandat piece jointe editva.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatPieceJointeEditva(?string $mandatPieceJointeEditva): Fiscal {
        $this->mandatPieceJointeEditva = $mandatPieceJointeEditva;
        return $this;
    }

    /**
     * Set the mandat piece jointe etebac.
     *
     * @param string|null $mandatPieceJointeEtebac The mandat piece jointe etebac.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatPieceJointeEtebac(?string $mandatPieceJointeEtebac): Fiscal {
        $this->mandatPieceJointeEtebac = $mandatPieceJointeEtebac;
        return $this;
    }

    /**
     * Set the mandat piece jointe pedi.
     *
     * @param string|null $mandatPieceJointePedi The mandat piece jointe pedi.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatPieceJointePedi(?string $mandatPieceJointePedi): Fiscal {
        $this->mandatPieceJointePedi = $mandatPieceJointePedi;
        return $this;
    }

    /**
     * Set the mandat piece jointe req.
     *
     * @param string|null $mandatPieceJointeReq The mandat piece jointe req.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatPieceJointeReq(?string $mandatPieceJointeReq): Fiscal {
        $this->mandatPieceJointeReq = $mandatPieceJointeReq;
        return $this;
    }

    /**
     * Set the mandat piece jointe tdfc.
     *
     * @param string|null $mandatPieceJointeTdfc The mandat piece jointe tdfc.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatPieceJointeTdfc(?string $mandatPieceJointeTdfc): Fiscal {
        $this->mandatPieceJointeTdfc = $mandatPieceJointeTdfc;
        return $this;
    }

    /**
     * Set the mandat suivi dads.
     *
     * @param bool|null $mandatSuiviDads The mandat suivi dads.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatSuiviDads(?bool $mandatSuiviDads): Fiscal {
        $this->mandatSuiviDads = $mandatSuiviDads;
        return $this;
    }

    /**
     * Set the mandat suivi ducsedi.
     *
     * @param bool|null $mandatSuiviDucsedi The mandat suivi ducsedi.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatSuiviDucsedi(?bool $mandatSuiviDucsedi): Fiscal {
        $this->mandatSuiviDucsedi = $mandatSuiviDucsedi;
        return $this;
    }

    /**
     * Set the mandat suivi editva.
     *
     * @param bool|null $mandatSuiviEditva The mandat suivi editva.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatSuiviEditva(?bool $mandatSuiviEditva): Fiscal {
        $this->mandatSuiviEditva = $mandatSuiviEditva;
        return $this;
    }

    /**
     * Set the mandat suivi etebac.
     *
     * @param bool|null $mandatSuiviEtebac The mandat suivi etebac.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatSuiviEtebac(?bool $mandatSuiviEtebac): Fiscal {
        $this->mandatSuiviEtebac = $mandatSuiviEtebac;
        return $this;
    }

    /**
     * Set the mandat suivi pedi.
     *
     * @param bool|null $mandatSuiviPedi The mandat suivi pedi.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatSuiviPedi(?bool $mandatSuiviPedi): Fiscal {
        $this->mandatSuiviPedi = $mandatSuiviPedi;
        return $this;
    }

    /**
     * Set the mandat suivi req.
     *
     * @param bool|null $mandatSuiviReq The mandat suivi req.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatSuiviReq(?bool $mandatSuiviReq): Fiscal {
        $this->mandatSuiviReq = $mandatSuiviReq;
        return $this;
    }

    /**
     * Set the mandat suivi tdfc.
     *
     * @param bool|null $mandatSuiviTdfc The mandat suivi tdfc.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMandatSuiviTdfc(?bool $mandatSuiviTdfc): Fiscal {
        $this->mandatSuiviTdfc = $mandatSuiviTdfc;
        return $this;
    }

    /**
     * Set the mdp impots gouv fr.
     *
     * @param string|null $mdpImpotsGouvFr The mdp impots gouv fr.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMdpImpotsGouvFr(?string $mdpImpotsGouvFr): Fiscal {
        $this->mdpImpotsGouvFr = $mdpImpotsGouvFr;
        return $this;
    }

    /**
     * Set the methode calcul.
     *
     * @param string|null $methodeCalcul The methode calcul.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMethodeCalcul(?string $methodeCalcul): Fiscal {
        $this->methodeCalcul = $methodeCalcul;
        return $this;
    }

    /**
     * Set the motif radiation cga.
     *
     * @param string|null $motifRadiationCga The motif radiation cga.
     * @return Fiscal Returns this Fiscal.
     */
    public function setMotifRadiationCga(?string $motifRadiationCga): Fiscal {
        $this->motifRadiationCga = $motifRadiationCga;
        return $this;
    }

    /**
     * Set the numero registre.
     *
     * @param string|null $numeroRegistre The numero registre.
     * @return Fiscal Returns this Fiscal.
     */
    public function setNumeroRegistre(?string $numeroRegistre): Fiscal {
        $this->numeroRegistre = $numeroRegistre;
        return $this;
    }

    /**
     * Set the periodicite tva.
     *
     * @param string|null $periodiciteTva The periodicite tva.
     * @return Fiscal Returns this Fiscal.
     */
    public function setPeriodiciteTva(?string $periodiciteTva): Fiscal {
        $this->periodiciteTva = $periodiciteTva;
        return $this;
    }

    /**
     * Set the pme communautaire.
     *
     * @param bool|null $pmeCommunautaire The pme communautaire.
     * @return Fiscal Returns this Fiscal.
     */
    public function setPmeCommunautaire(?bool $pmeCommunautaire): Fiscal {
        $this->pmeCommunautaire = $pmeCommunautaire;
        return $this;
    }

    /**
     * Set the pole enregistrement.
     *
     * @param string|null $poleEnregistrement The pole enregistrement.
     * @return Fiscal Returns this Fiscal.
     */
    public function setPoleEnregistrement(?string $poleEnregistrement): Fiscal {
        $this->poleEnregistrement = $poleEnregistrement;
        return $this;
    }

    /**
     * Set the ref oblig fisc.
     *
     * @param string|null $refObligFisc The ref oblig fisc.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRefObligFisc(?string $refObligFisc): Fiscal {
        $this->refObligFisc = $refObligFisc;
        return $this;
    }

    /**
     * Set the ref paiement dgi.
     *
     * @param string|null $refPaiementDgi The ref paiement dgi.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRefPaiementDgi(?string $refPaiementDgi): Fiscal {
        $this->refPaiementDgi = $refPaiementDgi;
        return $this;
    }

    /**
     * Set the regime.
     *
     * @param string|null $regime The regime.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRegime(?string $regime): Fiscal {
        $this->regime = $regime;
        return $this;
    }

    /**
     * Set the regime agricole.
     *
     * @param bool|null $regimeAgricole The regime agricole.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRegimeAgricole(?bool $regimeAgricole): Fiscal {
        $this->regimeAgricole = $regimeAgricole;
        return $this;
    }

    /**
     * Set the regime groupe.
     *
     * @param bool|null $regimeGroupe The regime groupe.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRegimeGroupe(?bool $regimeGroupe): Fiscal {
        $this->regimeGroupe = $regimeGroupe;
        return $this;
    }

    /**
     * Set the rof cfe.
     *
     * @param string|null $rofCfe The rof cfe.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRofCfe(?string $rofCfe): Fiscal {
        $this->rofCfe = $rofCfe;
        return $this;
    }

    /**
     * Set the rof cvae.
     *
     * @param string|null $rofCvae The rof cvae.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRofCvae(?string $rofCvae): Fiscal {
        $this->rofCvae = $rofCvae;
        return $this;
    }

    /**
     * Set the rof cvaep.
     *
     * @param string|null $rofCvaep The rof cvaep.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRofCvaep(?string $rofCvaep): Fiscal {
        $this->rofCvaep = $rofCvaep;
        return $this;
    }

    /**
     * Set the rof is.
     *
     * @param string|null $rofIs The rof is.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRofIs(?string $rofIs): Fiscal {
        $this->rofIs = $rofIs;
        return $this;
    }

    /**
     * Set the rof rcm.
     *
     * @param string|null $rofRcm The rof rcm.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRofRcm(?string $rofRcm): Fiscal {
        $this->rofRcm = $rofRcm;
        return $this;
    }

    /**
     * Set the rof tdfc group.
     *
     * @param string|null $rofTdfcGroup The rof tdfc group.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRofTdfcGroup(?string $rofTdfcGroup): Fiscal {
        $this->rofTdfcGroup = $rofTdfcGroup;
        return $this;
    }

    /**
     * Set the rof ts.
     *
     * @param string|null $rofTs The rof ts.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRofTs(?string $rofTs): Fiscal {
        $this->rofTs = $rofTs;
        return $this;
    }

    /**
     * Set the rof tva.
     *
     * @param string|null $rofTva The rof tva.
     * @return Fiscal Returns this Fiscal.
     */
    public function setRofTva(?string $rofTva): Fiscal {
        $this->rofTva = $rofTva;
        return $this;
    }

    /**
     * Set the societe mere.
     *
     * @param bool|null $societeMere The societe mere.
     * @return Fiscal Returns this Fiscal.
     */
    public function setSocieteMere(?bool $societeMere): Fiscal {
        $this->societeMere = $societeMere;
        return $this;
    }

    /**
     * Set the tresorerie.
     *
     * @param string|null $tresorerie The tresorerie.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTresorerie(?string $tresorerie): Fiscal {
        $this->tresorerie = $tresorerie;
        return $this;
    }

    /**
     * Set the tresorerie is.
     *
     * @param string|null $tresorerieIs The tresorerie is.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTresorerieIs(?string $tresorerieIs): Fiscal {
        $this->tresorerieIs = $tresorerieIs;
        return $this;
    }

    /**
     * Set the tva ca12 ae.
     *
     * @param string|null $tvaCa12Ae The tva ca12 ae.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTvaCa12Ae(?string $tvaCa12Ae): Fiscal {
        $this->tvaCa12Ae = $tvaCa12Ae;
        return $this;
    }

    /**
     * Set the tva decaissements.
     *
     * @param bool|null $tvaDecaissements The tva decaissements.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTvaDecaissements(?bool $tvaDecaissements): Fiscal {
        $this->tvaDecaissements = $tvaDecaissements;
        return $this;
    }

    /**
     * Set the tva etab btq.
     *
     * @param string|null $tvaEtabBtq The tva etab btq.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTvaEtabBtq(?string $tvaEtabBtq): Fiscal {
        $this->tvaEtabBtq = $tvaEtabBtq;
        return $this;
    }

    /**
     * Set the tva etab bureau distributeur.
     *
     * @param string|null $tvaEtabBureauDistributeur The tva etab bureau distributeur.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTvaEtabBureauDistributeur(?string $tvaEtabBureauDistributeur): Fiscal {
        $this->tvaEtabBureauDistributeur = $tvaEtabBureauDistributeur;
        return $this;
    }

    /**
     * Set the tva etab code postal.
     *
     * @param string|null $tvaEtabCodePostal The tva etab code postal.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTvaEtabCodePostal(?string $tvaEtabCodePostal): Fiscal {
        $this->tvaEtabCodePostal = $tvaEtabCodePostal;
        return $this;
    }

    /**
     * Set the tva etab complement.
     *
     * @param string|null $tvaEtabComplement The tva etab complement.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTvaEtabComplement(?string $tvaEtabComplement): Fiscal {
        $this->tvaEtabComplement = $tvaEtabComplement;
        return $this;
    }

    /**
     * Set the tva etab nom rs.
     *
     * @param string|null $tvaEtabNomRs The tva etab nom rs.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTvaEtabNomRs(?string $tvaEtabNomRs): Fiscal {
        $this->tvaEtabNomRs = $tvaEtabNomRs;
        return $this;
    }

    /**
     * Set the tva etab nom voie.
     *
     * @param string|null $tvaEtabNomVoie The tva etab nom voie.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTvaEtabNomVoie(?string $tvaEtabNomVoie): Fiscal {
        $this->tvaEtabNomVoie = $tvaEtabNomVoie;
        return $this;
    }

    /**
     * Set the tva etab num voie.
     *
     * @param string|null $tvaEtabNumVoie The tva etab num voie.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTvaEtabNumVoie(?string $tvaEtabNumVoie): Fiscal {
        $this->tvaEtabNumVoie = $tvaEtabNumVoie;
        return $this;
    }

    /**
     * Set the tva faite par client.
     *
     * @param bool|null $tvaFaiteParClient The tva faite par client.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTvaFaiteParClient(?bool $tvaFaiteParClient): Fiscal {
        $this->tvaFaiteParClient = $tvaFaiteParClient;
        return $this;
    }

    /**
     * Set the tva nom vir.
     *
     * @param string|null $tvaNomVir The tva nom vir.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTvaNomVir(?string $tvaNomVir): Fiscal {
        $this->tvaNomVir = $tvaNomVir;
        return $this;
    }

    /**
     * Set the tvarib vir.
     *
     * @param string|null $tvaribVir The tvarib vir.
     * @return Fiscal Returns this Fiscal.
     */
    public function setTvaribVir(?string $tvaribVir): Fiscal {
        $this->tvaribVir = $tvaribVir;
        return $this;
    }

    /**
     * Set the viseur conventionne.
     *
     * @param bool|null $viseurConventionne The viseur conventionne.
     * @return Fiscal Returns this Fiscal.
     */
    public function setViseurConventionne(?bool $viseurConventionne): Fiscal {
        $this->viseurConventionne = $viseurConventionne;
        return $this;
    }

    /**
     * Set the viseur dt attest.
     *
     * @param DateTime|null $viseurDtAttest The viseur dt attest.
     * @return Fiscal Returns this Fiscal.
     */
    public function setViseurDtAttest(?DateTime $viseurDtAttest): Fiscal {
        $this->viseurDtAttest = $viseurDtAttest;
        return $this;
    }

    /**
     * Set the viseur num attest.
     *
     * @param string|null $viseurNumAttest The viseur num attest.
     * @return Fiscal Returns this Fiscal.
     */
    public function setViseurNumAttest(?string $viseurNumAttest): Fiscal {
        $this->viseurNumAttest = $viseurNumAttest;
        return $this;
    }
}
