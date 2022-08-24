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
 * Lignes msa employe.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesMsaEmploye {

    /**
     * Agirc.
     *
     * @var string|null
     */
    private $agirc;

    /**
     * Agirc evo.
     *
     * @var string|null
     */
    private $agircEvo;

    /**
     * Cadre.
     *
     * @var string|null
     */
    private $cadre;

    /**
     * Cadre evo.
     *
     * @var string|null
     */
    private $cadreEvo;

    /**
     * Cddcdi.
     *
     * @var string|null
     */
    private $cddcdi;

    /**
     * Cddcdi evo.
     *
     * @var string|null
     */
    private $cddcdiEvo;

    /**
     * Code college prud.
     *
     * @var string|null
     */
    private $codeCollegePrud;

    /**
     * Code college prud prec.
     *
     * @var string|null
     */
    private $codeCollegePrudPrec;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code section prud.
     *
     * @var string|null
     */
    private $codeSectionPrud;

    /**
     * Code section prud prec.
     *
     * @var string|null
     */
    private $codeSectionPrudPrec;

    /**
     * Code unite.
     *
     * @var string|null
     */
    private $codeUnite;

    /**
     * Coeff emploi.
     *
     * @var string|null
     */
    private $coeffEmploi;

    /**
     * Coeff emploi evo.
     *
     * @var string|null
     */
    private $coeffEmploiEvo;

    /**
     * Commentaires.
     *
     * @var string|null
     */
    private $commentaires;

    /**
     * Contrat.
     *
     * @var string|null
     */
    private $contrat;

    /**
     * Contrat evo.
     *
     * @var string|null
     */
    private $contratEvo;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date evo.
     *
     * @var DateTime|null
     */
    private $dateEvo;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Dt deb abs.
     *
     * @var DateTime|null
     */
    private $dtDebAbs;

    /**
     * Dt fin abs.
     *
     * @var DateTime|null
     */
    private $dtFinAbs;

    /**
     * Duree trav.
     *
     * @var float|null
     */
    private $dureeTrav;

    /**
     * Duree trav prec.
     *
     * @var float|null
     */
    private $dureeTravPrec;

    /**
     * Emploi.
     *
     * @var string|null
     */
    private $emploi;

    /**
     * Emploi evo.
     *
     * @var string|null
     */
    private $emploiEvo;

    /**
     * Evo agirc.
     *
     * @var bool|null
     */
    private $evoAgirc;

    /**
     * Evo cadre.
     *
     * @var bool|null
     */
    private $evoCadre;

    /**
     * Evo cddcdi.
     *
     * @var bool|null
     */
    private $evoCddcdi;

    /**
     * Evo contrat.
     *
     * @var bool|null
     */
    private $evoContrat;

    /**
     * Evo crcca36.
     *
     * @var bool|null
     */
    private $evoCrcca36;

    /**
     * Evo crcca4 bis.
     *
     * @var bool|null
     */
    private $evoCrcca4Bis;

    /**
     * Evo emploi.
     *
     * @var bool|null
     */
    private $evoEmploi;

    /**
     * Evo fisc.
     *
     * @var bool|null
     */
    private $evoFisc;

    /**
     * Fisc.
     *
     * @var string|null
     */
    private $fisc;

    /**
     * Fisc evo.
     *
     * @var string|null
     */
    private $fiscEvo;

    /**
     * H equivalence.
     *
     * @var string|null
     */
    private $hEquivalence;

    /**
     * H equivalence prec.
     *
     * @var string|null
     */
    private $hEquivalencePrec;

    /**
     * Lieu travail.
     *
     * @var string|null
     */
    private $lieuTravail;

    /**
     * Lieu travail evo.
     *
     * @var string|null
     */
    private $lieuTravailEvo;

    /**
     * Montant11.
     *
     * @var int|null
     */
    private $montant11;

    /**
     * Montant12.
     *
     * @var int|null
     */
    private $montant12;

    /**
     * Montant13.
     *
     * @var int|null
     */
    private $montant13;

    /**
     * Montant14.
     *
     * @var int|null
     */
    private $montant14;

    /**
     * Montant21.
     *
     * @var int|null
     */
    private $montant21;

    /**
     * Montant22.
     *
     * @var int|null
     */
    private $montant22;

    /**
     * Montant23.
     *
     * @var int|null
     */
    private $montant23;

    /**
     * Montant24.
     *
     * @var int|null
     */
    private $montant24;

    /**
     * Montant31.
     *
     * @var int|null
     */
    private $montant31;

    /**
     * Montant32.
     *
     * @var int|null
     */
    private $montant32;

    /**
     * Montant33.
     *
     * @var int|null
     */
    private $montant33;

    /**
     * Montant34.
     *
     * @var int|null
     */
    private $montant34;

    /**
     * Montant autre11.
     *
     * @var int|null
     */
    private $montantAutre11;

    /**
     * Montant autre12.
     *
     * @var int|null
     */
    private $montantAutre12;

    /**
     * Montant autre13.
     *
     * @var int|null
     */
    private $montantAutre13;

    /**
     * Montant autre14.
     *
     * @var int|null
     */
    private $montantAutre14;

    /**
     * Montant autre21.
     *
     * @var int|null
     */
    private $montantAutre21;

    /**
     * Montant autre22.
     *
     * @var int|null
     */
    private $montantAutre22;

    /**
     * Montant autre23.
     *
     * @var int|null
     */
    private $montantAutre23;

    /**
     * Montant autre24.
     *
     * @var int|null
     */
    private $montantAutre24;

    /**
     * Montant autre31.
     *
     * @var int|null
     */
    private $montantAutre31;

    /**
     * Montant autre32.
     *
     * @var int|null
     */
    private $montantAutre32;

    /**
     * Montant autre33.
     *
     * @var int|null
     */
    private $montantAutre33;

    /**
     * Montant autre34.
     *
     * @var int|null
     */
    private $montantAutre34;

    /**
     * Montant smic retenu1.
     *
     * @var float|null
     */
    private $montantSmicRetenu1;

    /**
     * Montant smic retenu2.
     *
     * @var float|null
     */
    private $montantSmicRetenu2;

    /**
     * Montant smic retenu3.
     *
     * @var float|null
     */
    private $montantSmicRetenu3;

    /**
     * Nb heures1.
     *
     * @var float|null
     */
    private $nbHeures1;

    /**
     * Nb heures2.
     *
     * @var float|null
     */
    private $nbHeures2;

    /**
     * Nb heures3.
     *
     * @var float|null
     */
    private $nbHeures3;

    /**
     * Nb jours1.
     *
     * @var int|null
     */
    private $nbJours1;

    /**
     * Nb jours2.
     *
     * @var int|null
     */
    private $nbJours2;

    /**
     * Nb jours3.
     *
     * @var int|null
     */
    private $nbJours3;

    /**
     * Nir.
     *
     * @var string|null
     */
    private $nir;

    /**
     * Nom employe.
     *
     * @var string|null
     */
    private $nomEmploye;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Numero employe2.
     *
     * @var string|null
     */
    private $numeroEmploye2;

    /**
     * P cent partiel.
     *
     * @var int|null
     */
    private $pCentPartiel;

    /**
     * Per deb1.
     *
     * @var DateTime|null
     */
    private $perDeb1;

    /**
     * Per deb2.
     *
     * @var DateTime|null
     */
    private $perDeb2;

    /**
     * Per deb3.
     *
     * @var DateTime|null
     */
    private $perDeb3;

    /**
     * Per fin1.
     *
     * @var DateTime|null
     */
    private $perFin1;

    /**
     * Per fin2.
     *
     * @var DateTime|null
     */
    private $perFin2;

    /**
     * Per fin3.
     *
     * @var DateTime|null
     */
    private $perFin3;

    /**
     * Periode decla.
     *
     * @var DateTime|null
     */
    private $periodeDecla;

    /**
     * Periodicite.
     *
     * @var string|null
     */
    private $periodicite;

    /**
     * Periodicite prec.
     *
     * @var string|null
     */
    private $periodicitePrec;

    /**
     * Prenom employe.
     *
     * @var string|null
     */
    private $prenomEmploye;

    /**
     * Saisonnier.
     *
     * @var string|null
     */
    private $saisonnier;

    /**
     * Saisonnier prec.
     *
     * @var string|null
     */
    private $saisonnierPrec;

    /**
     * Service.
     *
     * @var string|null
     */
    private $service;

    /**
     * Service evo.
     *
     * @var string|null
     */
    private $serviceEvo;

    /**
     * Suspension zrrzru1.
     *
     * @var string|null
     */
    private $suspensionZrrzru1;

    /**
     * Suspension zrrzru2.
     *
     * @var string|null
     */
    private $suspensionZrrzru2;

    /**
     * Suspension zrrzru3.
     *
     * @var string|null
     */
    private $suspensionZrrzru3;

    /**
     * Taux smic fillon1.
     *
     * @var float|null
     */
    private $tauxSmicFillon1;

    /**
     * Taux smic fillon2.
     *
     * @var float|null
     */
    private $tauxSmicFillon2;

    /**
     * Taux smic fillon3.
     *
     * @var float|null
     */
    private $tauxSmicFillon3;

    /**
     * Temps partiel.
     *
     * @var string|null
     */
    private $tempsPartiel;

    /**
     * Temps partiel evo.
     *
     * @var string|null
     */
    private $tempsPartielEvo;

    /**
     * Total general.
     *
     * @var int|null
     */
    private $totalGeneral;

    /**
     * Type absence.
     *
     * @var string|null
     */
    private $typeAbsence;

    /**
     * Type autre remun11.
     *
     * @var string|null
     */
    private $typeAutreRemun11;

    /**
     * Type autre remun12.
     *
     * @var string|null
     */
    private $typeAutreRemun12;

    /**
     * Type autre remun13.
     *
     * @var string|null
     */
    private $typeAutreRemun13;

    /**
     * Type autre remun14.
     *
     * @var string|null
     */
    private $typeAutreRemun14;

    /**
     * Type autre remun21.
     *
     * @var string|null
     */
    private $typeAutreRemun21;

    /**
     * Type autre remun22.
     *
     * @var string|null
     */
    private $typeAutreRemun22;

    /**
     * Type autre remun23.
     *
     * @var string|null
     */
    private $typeAutreRemun23;

    /**
     * Type autre remun24.
     *
     * @var string|null
     */
    private $typeAutreRemun24;

    /**
     * Type autre remun31.
     *
     * @var string|null
     */
    private $typeAutreRemun31;

    /**
     * Type autre remun32.
     *
     * @var string|null
     */
    private $typeAutreRemun32;

    /**
     * Type autre remun33.
     *
     * @var string|null
     */
    private $typeAutreRemun33;

    /**
     * Type autre remun34.
     *
     * @var string|null
     */
    private $typeAutreRemun34;

    /**
     * Type crcca emp.
     *
     * @var string|null
     */
    private $typeCrccaEmp;

    /**
     * Type remun11.
     *
     * @var string|null
     */
    private $typeRemun11;

    /**
     * Type remun12.
     *
     * @var string|null
     */
    private $typeRemun12;

    /**
     * Type remun13.
     *
     * @var string|null
     */
    private $typeRemun13;

    /**
     * Type remun14.
     *
     * @var string|null
     */
    private $typeRemun14;

    /**
     * Type remun21.
     *
     * @var string|null
     */
    private $typeRemun21;

    /**
     * Type remun22.
     *
     * @var string|null
     */
    private $typeRemun22;

    /**
     * Type remun23.
     *
     * @var string|null
     */
    private $typeRemun23;

    /**
     * Type remun24.
     *
     * @var string|null
     */
    private $typeRemun24;

    /**
     * Type remun31.
     *
     * @var string|null
     */
    private $typeRemun31;

    /**
     * Type remun32.
     *
     * @var string|null
     */
    private $typeRemun32;

    /**
     * Type remun33.
     *
     * @var string|null
     */
    private $typeRemun33;

    /**
     * Type remun34.
     *
     * @var string|null
     */
    private $typeRemun34;

    /**
     * Type travail.
     *
     * @var string|null
     */
    private $typeTravail;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the agirc.
     *
     * @return string|null Returns the agirc.
     */
    public function getAgirc(): ?string {
        return $this->agirc;
    }

    /**
     * Get the agirc evo.
     *
     * @return string|null Returns the agirc evo.
     */
    public function getAgircEvo(): ?string {
        return $this->agircEvo;
    }

    /**
     * Get the cadre.
     *
     * @return string|null Returns the cadre.
     */
    public function getCadre(): ?string {
        return $this->cadre;
    }

    /**
     * Get the cadre evo.
     *
     * @return string|null Returns the cadre evo.
     */
    public function getCadreEvo(): ?string {
        return $this->cadreEvo;
    }

    /**
     * Get the cddcdi.
     *
     * @return string|null Returns the cddcdi.
     */
    public function getCddcdi(): ?string {
        return $this->cddcdi;
    }

    /**
     * Get the cddcdi evo.
     *
     * @return string|null Returns the cddcdi evo.
     */
    public function getCddcdiEvo(): ?string {
        return $this->cddcdiEvo;
    }

    /**
     * Get the code college prud.
     *
     * @return string|null Returns the code college prud.
     */
    public function getCodeCollegePrud(): ?string {
        return $this->codeCollegePrud;
    }

    /**
     * Get the code college prud prec.
     *
     * @return string|null Returns the code college prud prec.
     */
    public function getCodeCollegePrudPrec(): ?string {
        return $this->codeCollegePrudPrec;
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
     * Get the code section prud.
     *
     * @return string|null Returns the code section prud.
     */
    public function getCodeSectionPrud(): ?string {
        return $this->codeSectionPrud;
    }

    /**
     * Get the code section prud prec.
     *
     * @return string|null Returns the code section prud prec.
     */
    public function getCodeSectionPrudPrec(): ?string {
        return $this->codeSectionPrudPrec;
    }

    /**
     * Get the code unite.
     *
     * @return string|null Returns the code unite.
     */
    public function getCodeUnite(): ?string {
        return $this->codeUnite;
    }

    /**
     * Get the coeff emploi.
     *
     * @return string|null Returns the coeff emploi.
     */
    public function getCoeffEmploi(): ?string {
        return $this->coeffEmploi;
    }

    /**
     * Get the coeff emploi evo.
     *
     * @return string|null Returns the coeff emploi evo.
     */
    public function getCoeffEmploiEvo(): ?string {
        return $this->coeffEmploiEvo;
    }

    /**
     * Get the commentaires.
     *
     * @return string|null Returns the commentaires.
     */
    public function getCommentaires(): ?string {
        return $this->commentaires;
    }

    /**
     * Get the contrat.
     *
     * @return string|null Returns the contrat.
     */
    public function getContrat(): ?string {
        return $this->contrat;
    }

    /**
     * Get the contrat evo.
     *
     * @return string|null Returns the contrat evo.
     */
    public function getContratEvo(): ?string {
        return $this->contratEvo;
    }

    /**
     * Get the date entree.
     *
     * @return DateTime|null Returns the date entree.
     */
    public function getDateEntree(): ?DateTime {
        return $this->dateEntree;
    }

    /**
     * Get the date evo.
     *
     * @return DateTime|null Returns the date evo.
     */
    public function getDateEvo(): ?DateTime {
        return $this->dateEvo;
    }

    /**
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie(): ?DateTime {
        return $this->dateSortie;
    }

    /**
     * Get the dt deb abs.
     *
     * @return DateTime|null Returns the dt deb abs.
     */
    public function getDtDebAbs(): ?DateTime {
        return $this->dtDebAbs;
    }

    /**
     * Get the dt fin abs.
     *
     * @return DateTime|null Returns the dt fin abs.
     */
    public function getDtFinAbs(): ?DateTime {
        return $this->dtFinAbs;
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
     * Get the duree trav prec.
     *
     * @return float|null Returns the duree trav prec.
     */
    public function getDureeTravPrec(): ?float {
        return $this->dureeTravPrec;
    }

    /**
     * Get the emploi.
     *
     * @return string|null Returns the emploi.
     */
    public function getEmploi(): ?string {
        return $this->emploi;
    }

    /**
     * Get the emploi evo.
     *
     * @return string|null Returns the emploi evo.
     */
    public function getEmploiEvo(): ?string {
        return $this->emploiEvo;
    }

    /**
     * Get the evo agirc.
     *
     * @return bool|null Returns the evo agirc.
     */
    public function getEvoAgirc(): ?bool {
        return $this->evoAgirc;
    }

    /**
     * Get the evo cadre.
     *
     * @return bool|null Returns the evo cadre.
     */
    public function getEvoCadre(): ?bool {
        return $this->evoCadre;
    }

    /**
     * Get the evo cddcdi.
     *
     * @return bool|null Returns the evo cddcdi.
     */
    public function getEvoCddcdi(): ?bool {
        return $this->evoCddcdi;
    }

    /**
     * Get the evo contrat.
     *
     * @return bool|null Returns the evo contrat.
     */
    public function getEvoContrat(): ?bool {
        return $this->evoContrat;
    }

    /**
     * Get the evo crcca36.
     *
     * @return bool|null Returns the evo crcca36.
     */
    public function getEvoCrcca36(): ?bool {
        return $this->evoCrcca36;
    }

    /**
     * Get the evo crcca4 bis.
     *
     * @return bool|null Returns the evo crcca4 bis.
     */
    public function getEvoCrcca4Bis(): ?bool {
        return $this->evoCrcca4Bis;
    }

    /**
     * Get the evo emploi.
     *
     * @return bool|null Returns the evo emploi.
     */
    public function getEvoEmploi(): ?bool {
        return $this->evoEmploi;
    }

    /**
     * Get the evo fisc.
     *
     * @return bool|null Returns the evo fisc.
     */
    public function getEvoFisc(): ?bool {
        return $this->evoFisc;
    }

    /**
     * Get the fisc.
     *
     * @return string|null Returns the fisc.
     */
    public function getFisc(): ?string {
        return $this->fisc;
    }

    /**
     * Get the fisc evo.
     *
     * @return string|null Returns the fisc evo.
     */
    public function getFiscEvo(): ?string {
        return $this->fiscEvo;
    }

    /**
     * Get the h equivalence.
     *
     * @return string|null Returns the h equivalence.
     */
    public function getHEquivalence(): ?string {
        return $this->hEquivalence;
    }

    /**
     * Get the h equivalence prec.
     *
     * @return string|null Returns the h equivalence prec.
     */
    public function getHEquivalencePrec(): ?string {
        return $this->hEquivalencePrec;
    }

    /**
     * Get the lieu travail.
     *
     * @return string|null Returns the lieu travail.
     */
    public function getLieuTravail(): ?string {
        return $this->lieuTravail;
    }

    /**
     * Get the lieu travail evo.
     *
     * @return string|null Returns the lieu travail evo.
     */
    public function getLieuTravailEvo(): ?string {
        return $this->lieuTravailEvo;
    }

    /**
     * Get the montant11.
     *
     * @return int|null Returns the montant11.
     */
    public function getMontant11(): ?int {
        return $this->montant11;
    }

    /**
     * Get the montant12.
     *
     * @return int|null Returns the montant12.
     */
    public function getMontant12(): ?int {
        return $this->montant12;
    }

    /**
     * Get the montant13.
     *
     * @return int|null Returns the montant13.
     */
    public function getMontant13(): ?int {
        return $this->montant13;
    }

    /**
     * Get the montant14.
     *
     * @return int|null Returns the montant14.
     */
    public function getMontant14(): ?int {
        return $this->montant14;
    }

    /**
     * Get the montant21.
     *
     * @return int|null Returns the montant21.
     */
    public function getMontant21(): ?int {
        return $this->montant21;
    }

    /**
     * Get the montant22.
     *
     * @return int|null Returns the montant22.
     */
    public function getMontant22(): ?int {
        return $this->montant22;
    }

    /**
     * Get the montant23.
     *
     * @return int|null Returns the montant23.
     */
    public function getMontant23(): ?int {
        return $this->montant23;
    }

    /**
     * Get the montant24.
     *
     * @return int|null Returns the montant24.
     */
    public function getMontant24(): ?int {
        return $this->montant24;
    }

    /**
     * Get the montant31.
     *
     * @return int|null Returns the montant31.
     */
    public function getMontant31(): ?int {
        return $this->montant31;
    }

    /**
     * Get the montant32.
     *
     * @return int|null Returns the montant32.
     */
    public function getMontant32(): ?int {
        return $this->montant32;
    }

    /**
     * Get the montant33.
     *
     * @return int|null Returns the montant33.
     */
    public function getMontant33(): ?int {
        return $this->montant33;
    }

    /**
     * Get the montant34.
     *
     * @return int|null Returns the montant34.
     */
    public function getMontant34(): ?int {
        return $this->montant34;
    }

    /**
     * Get the montant autre11.
     *
     * @return int|null Returns the montant autre11.
     */
    public function getMontantAutre11(): ?int {
        return $this->montantAutre11;
    }

    /**
     * Get the montant autre12.
     *
     * @return int|null Returns the montant autre12.
     */
    public function getMontantAutre12(): ?int {
        return $this->montantAutre12;
    }

    /**
     * Get the montant autre13.
     *
     * @return int|null Returns the montant autre13.
     */
    public function getMontantAutre13(): ?int {
        return $this->montantAutre13;
    }

    /**
     * Get the montant autre14.
     *
     * @return int|null Returns the montant autre14.
     */
    public function getMontantAutre14(): ?int {
        return $this->montantAutre14;
    }

    /**
     * Get the montant autre21.
     *
     * @return int|null Returns the montant autre21.
     */
    public function getMontantAutre21(): ?int {
        return $this->montantAutre21;
    }

    /**
     * Get the montant autre22.
     *
     * @return int|null Returns the montant autre22.
     */
    public function getMontantAutre22(): ?int {
        return $this->montantAutre22;
    }

    /**
     * Get the montant autre23.
     *
     * @return int|null Returns the montant autre23.
     */
    public function getMontantAutre23(): ?int {
        return $this->montantAutre23;
    }

    /**
     * Get the montant autre24.
     *
     * @return int|null Returns the montant autre24.
     */
    public function getMontantAutre24(): ?int {
        return $this->montantAutre24;
    }

    /**
     * Get the montant autre31.
     *
     * @return int|null Returns the montant autre31.
     */
    public function getMontantAutre31(): ?int {
        return $this->montantAutre31;
    }

    /**
     * Get the montant autre32.
     *
     * @return int|null Returns the montant autre32.
     */
    public function getMontantAutre32(): ?int {
        return $this->montantAutre32;
    }

    /**
     * Get the montant autre33.
     *
     * @return int|null Returns the montant autre33.
     */
    public function getMontantAutre33(): ?int {
        return $this->montantAutre33;
    }

    /**
     * Get the montant autre34.
     *
     * @return int|null Returns the montant autre34.
     */
    public function getMontantAutre34(): ?int {
        return $this->montantAutre34;
    }

    /**
     * Get the montant smic retenu1.
     *
     * @return float|null Returns the montant smic retenu1.
     */
    public function getMontantSmicRetenu1(): ?float {
        return $this->montantSmicRetenu1;
    }

    /**
     * Get the montant smic retenu2.
     *
     * @return float|null Returns the montant smic retenu2.
     */
    public function getMontantSmicRetenu2(): ?float {
        return $this->montantSmicRetenu2;
    }

    /**
     * Get the montant smic retenu3.
     *
     * @return float|null Returns the montant smic retenu3.
     */
    public function getMontantSmicRetenu3(): ?float {
        return $this->montantSmicRetenu3;
    }

    /**
     * Get the nb heures1.
     *
     * @return float|null Returns the nb heures1.
     */
    public function getNbHeures1(): ?float {
        return $this->nbHeures1;
    }

    /**
     * Get the nb heures2.
     *
     * @return float|null Returns the nb heures2.
     */
    public function getNbHeures2(): ?float {
        return $this->nbHeures2;
    }

    /**
     * Get the nb heures3.
     *
     * @return float|null Returns the nb heures3.
     */
    public function getNbHeures3(): ?float {
        return $this->nbHeures3;
    }

    /**
     * Get the nb jours1.
     *
     * @return int|null Returns the nb jours1.
     */
    public function getNbJours1(): ?int {
        return $this->nbJours1;
    }

    /**
     * Get the nb jours2.
     *
     * @return int|null Returns the nb jours2.
     */
    public function getNbJours2(): ?int {
        return $this->nbJours2;
    }

    /**
     * Get the nb jours3.
     *
     * @return int|null Returns the nb jours3.
     */
    public function getNbJours3(): ?int {
        return $this->nbJours3;
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
     * Get the nom employe.
     *
     * @return string|null Returns the nom employe.
     */
    public function getNomEmploye(): ?string {
        return $this->nomEmploye;
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
     * Get the numero employe2.
     *
     * @return string|null Returns the numero employe2.
     */
    public function getNumeroEmploye2(): ?string {
        return $this->numeroEmploye2;
    }

    /**
     * Get the p cent partiel.
     *
     * @return int|null Returns the p cent partiel.
     */
    public function getPCentPartiel(): ?int {
        return $this->pCentPartiel;
    }

    /**
     * Get the per deb1.
     *
     * @return DateTime|null Returns the per deb1.
     */
    public function getPerDeb1(): ?DateTime {
        return $this->perDeb1;
    }

    /**
     * Get the per deb2.
     *
     * @return DateTime|null Returns the per deb2.
     */
    public function getPerDeb2(): ?DateTime {
        return $this->perDeb2;
    }

    /**
     * Get the per deb3.
     *
     * @return DateTime|null Returns the per deb3.
     */
    public function getPerDeb3(): ?DateTime {
        return $this->perDeb3;
    }

    /**
     * Get the per fin1.
     *
     * @return DateTime|null Returns the per fin1.
     */
    public function getPerFin1(): ?DateTime {
        return $this->perFin1;
    }

    /**
     * Get the per fin2.
     *
     * @return DateTime|null Returns the per fin2.
     */
    public function getPerFin2(): ?DateTime {
        return $this->perFin2;
    }

    /**
     * Get the per fin3.
     *
     * @return DateTime|null Returns the per fin3.
     */
    public function getPerFin3(): ?DateTime {
        return $this->perFin3;
    }

    /**
     * Get the periode decla.
     *
     * @return DateTime|null Returns the periode decla.
     */
    public function getPeriodeDecla(): ?DateTime {
        return $this->periodeDecla;
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
     * Get the periodicite prec.
     *
     * @return string|null Returns the periodicite prec.
     */
    public function getPeriodicitePrec(): ?string {
        return $this->periodicitePrec;
    }

    /**
     * Get the prenom employe.
     *
     * @return string|null Returns the prenom employe.
     */
    public function getPrenomEmploye(): ?string {
        return $this->prenomEmploye;
    }

    /**
     * Get the saisonnier.
     *
     * @return string|null Returns the saisonnier.
     */
    public function getSaisonnier(): ?string {
        return $this->saisonnier;
    }

    /**
     * Get the saisonnier prec.
     *
     * @return string|null Returns the saisonnier prec.
     */
    public function getSaisonnierPrec(): ?string {
        return $this->saisonnierPrec;
    }

    /**
     * Get the service.
     *
     * @return string|null Returns the service.
     */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Get the service evo.
     *
     * @return string|null Returns the service evo.
     */
    public function getServiceEvo(): ?string {
        return $this->serviceEvo;
    }

    /**
     * Get the suspension zrrzru1.
     *
     * @return string|null Returns the suspension zrrzru1.
     */
    public function getSuspensionZrrzru1(): ?string {
        return $this->suspensionZrrzru1;
    }

    /**
     * Get the suspension zrrzru2.
     *
     * @return string|null Returns the suspension zrrzru2.
     */
    public function getSuspensionZrrzru2(): ?string {
        return $this->suspensionZrrzru2;
    }

    /**
     * Get the suspension zrrzru3.
     *
     * @return string|null Returns the suspension zrrzru3.
     */
    public function getSuspensionZrrzru3(): ?string {
        return $this->suspensionZrrzru3;
    }

    /**
     * Get the taux smic fillon1.
     *
     * @return float|null Returns the taux smic fillon1.
     */
    public function getTauxSmicFillon1(): ?float {
        return $this->tauxSmicFillon1;
    }

    /**
     * Get the taux smic fillon2.
     *
     * @return float|null Returns the taux smic fillon2.
     */
    public function getTauxSmicFillon2(): ?float {
        return $this->tauxSmicFillon2;
    }

    /**
     * Get the taux smic fillon3.
     *
     * @return float|null Returns the taux smic fillon3.
     */
    public function getTauxSmicFillon3(): ?float {
        return $this->tauxSmicFillon3;
    }

    /**
     * Get the temps partiel.
     *
     * @return string|null Returns the temps partiel.
     */
    public function getTempsPartiel(): ?string {
        return $this->tempsPartiel;
    }

    /**
     * Get the temps partiel evo.
     *
     * @return string|null Returns the temps partiel evo.
     */
    public function getTempsPartielEvo(): ?string {
        return $this->tempsPartielEvo;
    }

    /**
     * Get the total general.
     *
     * @return int|null Returns the total general.
     */
    public function getTotalGeneral(): ?int {
        return $this->totalGeneral;
    }

    /**
     * Get the type absence.
     *
     * @return string|null Returns the type absence.
     */
    public function getTypeAbsence(): ?string {
        return $this->typeAbsence;
    }

    /**
     * Get the type autre remun11.
     *
     * @return string|null Returns the type autre remun11.
     */
    public function getTypeAutreRemun11(): ?string {
        return $this->typeAutreRemun11;
    }

    /**
     * Get the type autre remun12.
     *
     * @return string|null Returns the type autre remun12.
     */
    public function getTypeAutreRemun12(): ?string {
        return $this->typeAutreRemun12;
    }

    /**
     * Get the type autre remun13.
     *
     * @return string|null Returns the type autre remun13.
     */
    public function getTypeAutreRemun13(): ?string {
        return $this->typeAutreRemun13;
    }

    /**
     * Get the type autre remun14.
     *
     * @return string|null Returns the type autre remun14.
     */
    public function getTypeAutreRemun14(): ?string {
        return $this->typeAutreRemun14;
    }

    /**
     * Get the type autre remun21.
     *
     * @return string|null Returns the type autre remun21.
     */
    public function getTypeAutreRemun21(): ?string {
        return $this->typeAutreRemun21;
    }

    /**
     * Get the type autre remun22.
     *
     * @return string|null Returns the type autre remun22.
     */
    public function getTypeAutreRemun22(): ?string {
        return $this->typeAutreRemun22;
    }

    /**
     * Get the type autre remun23.
     *
     * @return string|null Returns the type autre remun23.
     */
    public function getTypeAutreRemun23(): ?string {
        return $this->typeAutreRemun23;
    }

    /**
     * Get the type autre remun24.
     *
     * @return string|null Returns the type autre remun24.
     */
    public function getTypeAutreRemun24(): ?string {
        return $this->typeAutreRemun24;
    }

    /**
     * Get the type autre remun31.
     *
     * @return string|null Returns the type autre remun31.
     */
    public function getTypeAutreRemun31(): ?string {
        return $this->typeAutreRemun31;
    }

    /**
     * Get the type autre remun32.
     *
     * @return string|null Returns the type autre remun32.
     */
    public function getTypeAutreRemun32(): ?string {
        return $this->typeAutreRemun32;
    }

    /**
     * Get the type autre remun33.
     *
     * @return string|null Returns the type autre remun33.
     */
    public function getTypeAutreRemun33(): ?string {
        return $this->typeAutreRemun33;
    }

    /**
     * Get the type autre remun34.
     *
     * @return string|null Returns the type autre remun34.
     */
    public function getTypeAutreRemun34(): ?string {
        return $this->typeAutreRemun34;
    }

    /**
     * Get the type crcca emp.
     *
     * @return string|null Returns the type crcca emp.
     */
    public function getTypeCrccaEmp(): ?string {
        return $this->typeCrccaEmp;
    }

    /**
     * Get the type remun11.
     *
     * @return string|null Returns the type remun11.
     */
    public function getTypeRemun11(): ?string {
        return $this->typeRemun11;
    }

    /**
     * Get the type remun12.
     *
     * @return string|null Returns the type remun12.
     */
    public function getTypeRemun12(): ?string {
        return $this->typeRemun12;
    }

    /**
     * Get the type remun13.
     *
     * @return string|null Returns the type remun13.
     */
    public function getTypeRemun13(): ?string {
        return $this->typeRemun13;
    }

    /**
     * Get the type remun14.
     *
     * @return string|null Returns the type remun14.
     */
    public function getTypeRemun14(): ?string {
        return $this->typeRemun14;
    }

    /**
     * Get the type remun21.
     *
     * @return string|null Returns the type remun21.
     */
    public function getTypeRemun21(): ?string {
        return $this->typeRemun21;
    }

    /**
     * Get the type remun22.
     *
     * @return string|null Returns the type remun22.
     */
    public function getTypeRemun22(): ?string {
        return $this->typeRemun22;
    }

    /**
     * Get the type remun23.
     *
     * @return string|null Returns the type remun23.
     */
    public function getTypeRemun23(): ?string {
        return $this->typeRemun23;
    }

    /**
     * Get the type remun24.
     *
     * @return string|null Returns the type remun24.
     */
    public function getTypeRemun24(): ?string {
        return $this->typeRemun24;
    }

    /**
     * Get the type remun31.
     *
     * @return string|null Returns the type remun31.
     */
    public function getTypeRemun31(): ?string {
        return $this->typeRemun31;
    }

    /**
     * Get the type remun32.
     *
     * @return string|null Returns the type remun32.
     */
    public function getTypeRemun32(): ?string {
        return $this->typeRemun32;
    }

    /**
     * Get the type remun33.
     *
     * @return string|null Returns the type remun33.
     */
    public function getTypeRemun33(): ?string {
        return $this->typeRemun33;
    }

    /**
     * Get the type remun34.
     *
     * @return string|null Returns the type remun34.
     */
    public function getTypeRemun34(): ?string {
        return $this->typeRemun34;
    }

    /**
     * Get the type travail.
     *
     * @return string|null Returns the type travail.
     */
    public function getTypeTravail(): ?string {
        return $this->typeTravail;
    }

    /**
     * Set the agirc.
     *
     * @param string|null $agirc The agirc.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setAgirc(?string $agirc): LignesMsaEmploye {
        $this->agirc = $agirc;
        return $this;
    }

    /**
     * Set the agirc evo.
     *
     * @param string|null $agircEvo The agirc evo.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setAgircEvo(?string $agircEvo): LignesMsaEmploye {
        $this->agircEvo = $agircEvo;
        return $this;
    }

    /**
     * Set the cadre.
     *
     * @param string|null $cadre The cadre.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCadre(?string $cadre): LignesMsaEmploye {
        $this->cadre = $cadre;
        return $this;
    }

    /**
     * Set the cadre evo.
     *
     * @param string|null $cadreEvo The cadre evo.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCadreEvo(?string $cadreEvo): LignesMsaEmploye {
        $this->cadreEvo = $cadreEvo;
        return $this;
    }

    /**
     * Set the cddcdi.
     *
     * @param string|null $cddcdi The cddcdi.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCddcdi(?string $cddcdi): LignesMsaEmploye {
        $this->cddcdi = $cddcdi;
        return $this;
    }

    /**
     * Set the cddcdi evo.
     *
     * @param string|null $cddcdiEvo The cddcdi evo.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCddcdiEvo(?string $cddcdiEvo): LignesMsaEmploye {
        $this->cddcdiEvo = $cddcdiEvo;
        return $this;
    }

    /**
     * Set the code college prud.
     *
     * @param string|null $codeCollegePrud The code college prud.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCodeCollegePrud(?string $codeCollegePrud): LignesMsaEmploye {
        $this->codeCollegePrud = $codeCollegePrud;
        return $this;
    }

    /**
     * Set the code college prud prec.
     *
     * @param string|null $codeCollegePrudPrec The code college prud prec.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCodeCollegePrudPrec(?string $codeCollegePrudPrec): LignesMsaEmploye {
        $this->codeCollegePrudPrec = $codeCollegePrudPrec;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCodeEtablissement(?int $codeEtablissement): LignesMsaEmploye {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code section prud.
     *
     * @param string|null $codeSectionPrud The code section prud.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCodeSectionPrud(?string $codeSectionPrud): LignesMsaEmploye {
        $this->codeSectionPrud = $codeSectionPrud;
        return $this;
    }

    /**
     * Set the code section prud prec.
     *
     * @param string|null $codeSectionPrudPrec The code section prud prec.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCodeSectionPrudPrec(?string $codeSectionPrudPrec): LignesMsaEmploye {
        $this->codeSectionPrudPrec = $codeSectionPrudPrec;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string|null $codeUnite The code unite.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCodeUnite(?string $codeUnite): LignesMsaEmploye {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the coeff emploi.
     *
     * @param string|null $coeffEmploi The coeff emploi.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCoeffEmploi(?string $coeffEmploi): LignesMsaEmploye {
        $this->coeffEmploi = $coeffEmploi;
        return $this;
    }

    /**
     * Set the coeff emploi evo.
     *
     * @param string|null $coeffEmploiEvo The coeff emploi evo.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCoeffEmploiEvo(?string $coeffEmploiEvo): LignesMsaEmploye {
        $this->coeffEmploiEvo = $coeffEmploiEvo;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string|null $commentaires The commentaires.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setCommentaires(?string $commentaires): LignesMsaEmploye {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the contrat.
     *
     * @param string|null $contrat The contrat.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setContrat(?string $contrat): LignesMsaEmploye {
        $this->contrat = $contrat;
        return $this;
    }

    /**
     * Set the contrat evo.
     *
     * @param string|null $contratEvo The contrat evo.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setContratEvo(?string $contratEvo): LignesMsaEmploye {
        $this->contratEvo = $contratEvo;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setDateEntree(?DateTime $dateEntree): LignesMsaEmploye {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date evo.
     *
     * @param DateTime|null $dateEvo The date evo.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setDateEvo(?DateTime $dateEvo): LignesMsaEmploye {
        $this->dateEvo = $dateEvo;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setDateSortie(?DateTime $dateSortie): LignesMsaEmploye {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the dt deb abs.
     *
     * @param DateTime|null $dtDebAbs The dt deb abs.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setDtDebAbs(?DateTime $dtDebAbs): LignesMsaEmploye {
        $this->dtDebAbs = $dtDebAbs;
        return $this;
    }

    /**
     * Set the dt fin abs.
     *
     * @param DateTime|null $dtFinAbs The dt fin abs.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setDtFinAbs(?DateTime $dtFinAbs): LignesMsaEmploye {
        $this->dtFinAbs = $dtFinAbs;
        return $this;
    }

    /**
     * Set the duree trav.
     *
     * @param float|null $dureeTrav The duree trav.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setDureeTrav(?float $dureeTrav): LignesMsaEmploye {
        $this->dureeTrav = $dureeTrav;
        return $this;
    }

    /**
     * Set the duree trav prec.
     *
     * @param float|null $dureeTravPrec The duree trav prec.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setDureeTravPrec(?float $dureeTravPrec): LignesMsaEmploye {
        $this->dureeTravPrec = $dureeTravPrec;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string|null $emploi The emploi.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setEmploi(?string $emploi): LignesMsaEmploye {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the emploi evo.
     *
     * @param string|null $emploiEvo The emploi evo.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setEmploiEvo(?string $emploiEvo): LignesMsaEmploye {
        $this->emploiEvo = $emploiEvo;
        return $this;
    }

    /**
     * Set the evo agirc.
     *
     * @param bool|null $evoAgirc The evo agirc.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setEvoAgirc(?bool $evoAgirc): LignesMsaEmploye {
        $this->evoAgirc = $evoAgirc;
        return $this;
    }

    /**
     * Set the evo cadre.
     *
     * @param bool|null $evoCadre The evo cadre.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setEvoCadre(?bool $evoCadre): LignesMsaEmploye {
        $this->evoCadre = $evoCadre;
        return $this;
    }

    /**
     * Set the evo cddcdi.
     *
     * @param bool|null $evoCddcdi The evo cddcdi.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setEvoCddcdi(?bool $evoCddcdi): LignesMsaEmploye {
        $this->evoCddcdi = $evoCddcdi;
        return $this;
    }

    /**
     * Set the evo contrat.
     *
     * @param bool|null $evoContrat The evo contrat.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setEvoContrat(?bool $evoContrat): LignesMsaEmploye {
        $this->evoContrat = $evoContrat;
        return $this;
    }

    /**
     * Set the evo crcca36.
     *
     * @param bool|null $evoCrcca36 The evo crcca36.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setEvoCrcca36(?bool $evoCrcca36): LignesMsaEmploye {
        $this->evoCrcca36 = $evoCrcca36;
        return $this;
    }

    /**
     * Set the evo crcca4 bis.
     *
     * @param bool|null $evoCrcca4Bis The evo crcca4 bis.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setEvoCrcca4Bis(?bool $evoCrcca4Bis): LignesMsaEmploye {
        $this->evoCrcca4Bis = $evoCrcca4Bis;
        return $this;
    }

    /**
     * Set the evo emploi.
     *
     * @param bool|null $evoEmploi The evo emploi.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setEvoEmploi(?bool $evoEmploi): LignesMsaEmploye {
        $this->evoEmploi = $evoEmploi;
        return $this;
    }

    /**
     * Set the evo fisc.
     *
     * @param bool|null $evoFisc The evo fisc.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setEvoFisc(?bool $evoFisc): LignesMsaEmploye {
        $this->evoFisc = $evoFisc;
        return $this;
    }

    /**
     * Set the fisc.
     *
     * @param string|null $fisc The fisc.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setFisc(?string $fisc): LignesMsaEmploye {
        $this->fisc = $fisc;
        return $this;
    }

    /**
     * Set the fisc evo.
     *
     * @param string|null $fiscEvo The fisc evo.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setFiscEvo(?string $fiscEvo): LignesMsaEmploye {
        $this->fiscEvo = $fiscEvo;
        return $this;
    }

    /**
     * Set the h equivalence.
     *
     * @param string|null $hEquivalence The h equivalence.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setHEquivalence(?string $hEquivalence): LignesMsaEmploye {
        $this->hEquivalence = $hEquivalence;
        return $this;
    }

    /**
     * Set the h equivalence prec.
     *
     * @param string|null $hEquivalencePrec The h equivalence prec.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setHEquivalencePrec(?string $hEquivalencePrec): LignesMsaEmploye {
        $this->hEquivalencePrec = $hEquivalencePrec;
        return $this;
    }

    /**
     * Set the lieu travail.
     *
     * @param string|null $lieuTravail The lieu travail.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setLieuTravail(?string $lieuTravail): LignesMsaEmploye {
        $this->lieuTravail = $lieuTravail;
        return $this;
    }

    /**
     * Set the lieu travail evo.
     *
     * @param string|null $lieuTravailEvo The lieu travail evo.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setLieuTravailEvo(?string $lieuTravailEvo): LignesMsaEmploye {
        $this->lieuTravailEvo = $lieuTravailEvo;
        return $this;
    }

    /**
     * Set the montant11.
     *
     * @param int|null $montant11 The montant11.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontant11(?int $montant11): LignesMsaEmploye {
        $this->montant11 = $montant11;
        return $this;
    }

    /**
     * Set the montant12.
     *
     * @param int|null $montant12 The montant12.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontant12(?int $montant12): LignesMsaEmploye {
        $this->montant12 = $montant12;
        return $this;
    }

    /**
     * Set the montant13.
     *
     * @param int|null $montant13 The montant13.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontant13(?int $montant13): LignesMsaEmploye {
        $this->montant13 = $montant13;
        return $this;
    }

    /**
     * Set the montant14.
     *
     * @param int|null $montant14 The montant14.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontant14(?int $montant14): LignesMsaEmploye {
        $this->montant14 = $montant14;
        return $this;
    }

    /**
     * Set the montant21.
     *
     * @param int|null $montant21 The montant21.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontant21(?int $montant21): LignesMsaEmploye {
        $this->montant21 = $montant21;
        return $this;
    }

    /**
     * Set the montant22.
     *
     * @param int|null $montant22 The montant22.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontant22(?int $montant22): LignesMsaEmploye {
        $this->montant22 = $montant22;
        return $this;
    }

    /**
     * Set the montant23.
     *
     * @param int|null $montant23 The montant23.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontant23(?int $montant23): LignesMsaEmploye {
        $this->montant23 = $montant23;
        return $this;
    }

    /**
     * Set the montant24.
     *
     * @param int|null $montant24 The montant24.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontant24(?int $montant24): LignesMsaEmploye {
        $this->montant24 = $montant24;
        return $this;
    }

    /**
     * Set the montant31.
     *
     * @param int|null $montant31 The montant31.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontant31(?int $montant31): LignesMsaEmploye {
        $this->montant31 = $montant31;
        return $this;
    }

    /**
     * Set the montant32.
     *
     * @param int|null $montant32 The montant32.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontant32(?int $montant32): LignesMsaEmploye {
        $this->montant32 = $montant32;
        return $this;
    }

    /**
     * Set the montant33.
     *
     * @param int|null $montant33 The montant33.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontant33(?int $montant33): LignesMsaEmploye {
        $this->montant33 = $montant33;
        return $this;
    }

    /**
     * Set the montant34.
     *
     * @param int|null $montant34 The montant34.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontant34(?int $montant34): LignesMsaEmploye {
        $this->montant34 = $montant34;
        return $this;
    }

    /**
     * Set the montant autre11.
     *
     * @param int|null $montantAutre11 The montant autre11.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantAutre11(?int $montantAutre11): LignesMsaEmploye {
        $this->montantAutre11 = $montantAutre11;
        return $this;
    }

    /**
     * Set the montant autre12.
     *
     * @param int|null $montantAutre12 The montant autre12.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantAutre12(?int $montantAutre12): LignesMsaEmploye {
        $this->montantAutre12 = $montantAutre12;
        return $this;
    }

    /**
     * Set the montant autre13.
     *
     * @param int|null $montantAutre13 The montant autre13.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantAutre13(?int $montantAutre13): LignesMsaEmploye {
        $this->montantAutre13 = $montantAutre13;
        return $this;
    }

    /**
     * Set the montant autre14.
     *
     * @param int|null $montantAutre14 The montant autre14.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantAutre14(?int $montantAutre14): LignesMsaEmploye {
        $this->montantAutre14 = $montantAutre14;
        return $this;
    }

    /**
     * Set the montant autre21.
     *
     * @param int|null $montantAutre21 The montant autre21.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantAutre21(?int $montantAutre21): LignesMsaEmploye {
        $this->montantAutre21 = $montantAutre21;
        return $this;
    }

    /**
     * Set the montant autre22.
     *
     * @param int|null $montantAutre22 The montant autre22.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantAutre22(?int $montantAutre22): LignesMsaEmploye {
        $this->montantAutre22 = $montantAutre22;
        return $this;
    }

    /**
     * Set the montant autre23.
     *
     * @param int|null $montantAutre23 The montant autre23.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantAutre23(?int $montantAutre23): LignesMsaEmploye {
        $this->montantAutre23 = $montantAutre23;
        return $this;
    }

    /**
     * Set the montant autre24.
     *
     * @param int|null $montantAutre24 The montant autre24.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantAutre24(?int $montantAutre24): LignesMsaEmploye {
        $this->montantAutre24 = $montantAutre24;
        return $this;
    }

    /**
     * Set the montant autre31.
     *
     * @param int|null $montantAutre31 The montant autre31.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantAutre31(?int $montantAutre31): LignesMsaEmploye {
        $this->montantAutre31 = $montantAutre31;
        return $this;
    }

    /**
     * Set the montant autre32.
     *
     * @param int|null $montantAutre32 The montant autre32.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantAutre32(?int $montantAutre32): LignesMsaEmploye {
        $this->montantAutre32 = $montantAutre32;
        return $this;
    }

    /**
     * Set the montant autre33.
     *
     * @param int|null $montantAutre33 The montant autre33.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantAutre33(?int $montantAutre33): LignesMsaEmploye {
        $this->montantAutre33 = $montantAutre33;
        return $this;
    }

    /**
     * Set the montant autre34.
     *
     * @param int|null $montantAutre34 The montant autre34.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantAutre34(?int $montantAutre34): LignesMsaEmploye {
        $this->montantAutre34 = $montantAutre34;
        return $this;
    }

    /**
     * Set the montant smic retenu1.
     *
     * @param float|null $montantSmicRetenu1 The montant smic retenu1.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantSmicRetenu1(?float $montantSmicRetenu1): LignesMsaEmploye {
        $this->montantSmicRetenu1 = $montantSmicRetenu1;
        return $this;
    }

    /**
     * Set the montant smic retenu2.
     *
     * @param float|null $montantSmicRetenu2 The montant smic retenu2.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantSmicRetenu2(?float $montantSmicRetenu2): LignesMsaEmploye {
        $this->montantSmicRetenu2 = $montantSmicRetenu2;
        return $this;
    }

    /**
     * Set the montant smic retenu3.
     *
     * @param float|null $montantSmicRetenu3 The montant smic retenu3.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setMontantSmicRetenu3(?float $montantSmicRetenu3): LignesMsaEmploye {
        $this->montantSmicRetenu3 = $montantSmicRetenu3;
        return $this;
    }

    /**
     * Set the nb heures1.
     *
     * @param float|null $nbHeures1 The nb heures1.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setNbHeures1(?float $nbHeures1): LignesMsaEmploye {
        $this->nbHeures1 = $nbHeures1;
        return $this;
    }

    /**
     * Set the nb heures2.
     *
     * @param float|null $nbHeures2 The nb heures2.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setNbHeures2(?float $nbHeures2): LignesMsaEmploye {
        $this->nbHeures2 = $nbHeures2;
        return $this;
    }

    /**
     * Set the nb heures3.
     *
     * @param float|null $nbHeures3 The nb heures3.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setNbHeures3(?float $nbHeures3): LignesMsaEmploye {
        $this->nbHeures3 = $nbHeures3;
        return $this;
    }

    /**
     * Set the nb jours1.
     *
     * @param int|null $nbJours1 The nb jours1.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setNbJours1(?int $nbJours1): LignesMsaEmploye {
        $this->nbJours1 = $nbJours1;
        return $this;
    }

    /**
     * Set the nb jours2.
     *
     * @param int|null $nbJours2 The nb jours2.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setNbJours2(?int $nbJours2): LignesMsaEmploye {
        $this->nbJours2 = $nbJours2;
        return $this;
    }

    /**
     * Set the nb jours3.
     *
     * @param int|null $nbJours3 The nb jours3.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setNbJours3(?int $nbJours3): LignesMsaEmploye {
        $this->nbJours3 = $nbJours3;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string|null $nir The nir.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setNir(?string $nir): LignesMsaEmploye {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string|null $nomEmploye The nom employe.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setNomEmploye(?string $nomEmploye): LignesMsaEmploye {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setNumeroEmploye(?string $numeroEmploye): LignesMsaEmploye {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the numero employe2.
     *
     * @param string|null $numeroEmploye2 The numero employe2.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setNumeroEmploye2(?string $numeroEmploye2): LignesMsaEmploye {
        $this->numeroEmploye2 = $numeroEmploye2;
        return $this;
    }

    /**
     * Set the p cent partiel.
     *
     * @param int|null $pCentPartiel The p cent partiel.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setPCentPartiel(?int $pCentPartiel): LignesMsaEmploye {
        $this->pCentPartiel = $pCentPartiel;
        return $this;
    }

    /**
     * Set the per deb1.
     *
     * @param DateTime|null $perDeb1 The per deb1.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setPerDeb1(?DateTime $perDeb1): LignesMsaEmploye {
        $this->perDeb1 = $perDeb1;
        return $this;
    }

    /**
     * Set the per deb2.
     *
     * @param DateTime|null $perDeb2 The per deb2.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setPerDeb2(?DateTime $perDeb2): LignesMsaEmploye {
        $this->perDeb2 = $perDeb2;
        return $this;
    }

    /**
     * Set the per deb3.
     *
     * @param DateTime|null $perDeb3 The per deb3.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setPerDeb3(?DateTime $perDeb3): LignesMsaEmploye {
        $this->perDeb3 = $perDeb3;
        return $this;
    }

    /**
     * Set the per fin1.
     *
     * @param DateTime|null $perFin1 The per fin1.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setPerFin1(?DateTime $perFin1): LignesMsaEmploye {
        $this->perFin1 = $perFin1;
        return $this;
    }

    /**
     * Set the per fin2.
     *
     * @param DateTime|null $perFin2 The per fin2.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setPerFin2(?DateTime $perFin2): LignesMsaEmploye {
        $this->perFin2 = $perFin2;
        return $this;
    }

    /**
     * Set the per fin3.
     *
     * @param DateTime|null $perFin3 The per fin3.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setPerFin3(?DateTime $perFin3): LignesMsaEmploye {
        $this->perFin3 = $perFin3;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setPeriodeDecla(?DateTime $periodeDecla): LignesMsaEmploye {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string|null $periodicite The periodicite.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setPeriodicite(?string $periodicite): LignesMsaEmploye {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the periodicite prec.
     *
     * @param string|null $periodicitePrec The periodicite prec.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setPeriodicitePrec(?string $periodicitePrec): LignesMsaEmploye {
        $this->periodicitePrec = $periodicitePrec;
        return $this;
    }

    /**
     * Set the prenom employe.
     *
     * @param string|null $prenomEmploye The prenom employe.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setPrenomEmploye(?string $prenomEmploye): LignesMsaEmploye {
        $this->prenomEmploye = $prenomEmploye;
        return $this;
    }

    /**
     * Set the saisonnier.
     *
     * @param string|null $saisonnier The saisonnier.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setSaisonnier(?string $saisonnier): LignesMsaEmploye {
        $this->saisonnier = $saisonnier;
        return $this;
    }

    /**
     * Set the saisonnier prec.
     *
     * @param string|null $saisonnierPrec The saisonnier prec.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setSaisonnierPrec(?string $saisonnierPrec): LignesMsaEmploye {
        $this->saisonnierPrec = $saisonnierPrec;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string|null $service The service.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setService(?string $service): LignesMsaEmploye {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the service evo.
     *
     * @param string|null $serviceEvo The service evo.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setServiceEvo(?string $serviceEvo): LignesMsaEmploye {
        $this->serviceEvo = $serviceEvo;
        return $this;
    }

    /**
     * Set the suspension zrrzru1.
     *
     * @param string|null $suspensionZrrzru1 The suspension zrrzru1.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setSuspensionZrrzru1(?string $suspensionZrrzru1): LignesMsaEmploye {
        $this->suspensionZrrzru1 = $suspensionZrrzru1;
        return $this;
    }

    /**
     * Set the suspension zrrzru2.
     *
     * @param string|null $suspensionZrrzru2 The suspension zrrzru2.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setSuspensionZrrzru2(?string $suspensionZrrzru2): LignesMsaEmploye {
        $this->suspensionZrrzru2 = $suspensionZrrzru2;
        return $this;
    }

    /**
     * Set the suspension zrrzru3.
     *
     * @param string|null $suspensionZrrzru3 The suspension zrrzru3.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setSuspensionZrrzru3(?string $suspensionZrrzru3): LignesMsaEmploye {
        $this->suspensionZrrzru3 = $suspensionZrrzru3;
        return $this;
    }

    /**
     * Set the taux smic fillon1.
     *
     * @param float|null $tauxSmicFillon1 The taux smic fillon1.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTauxSmicFillon1(?float $tauxSmicFillon1): LignesMsaEmploye {
        $this->tauxSmicFillon1 = $tauxSmicFillon1;
        return $this;
    }

    /**
     * Set the taux smic fillon2.
     *
     * @param float|null $tauxSmicFillon2 The taux smic fillon2.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTauxSmicFillon2(?float $tauxSmicFillon2): LignesMsaEmploye {
        $this->tauxSmicFillon2 = $tauxSmicFillon2;
        return $this;
    }

    /**
     * Set the taux smic fillon3.
     *
     * @param float|null $tauxSmicFillon3 The taux smic fillon3.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTauxSmicFillon3(?float $tauxSmicFillon3): LignesMsaEmploye {
        $this->tauxSmicFillon3 = $tauxSmicFillon3;
        return $this;
    }

    /**
     * Set the temps partiel.
     *
     * @param string|null $tempsPartiel The temps partiel.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTempsPartiel(?string $tempsPartiel): LignesMsaEmploye {
        $this->tempsPartiel = $tempsPartiel;
        return $this;
    }

    /**
     * Set the temps partiel evo.
     *
     * @param string|null $tempsPartielEvo The temps partiel evo.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTempsPartielEvo(?string $tempsPartielEvo): LignesMsaEmploye {
        $this->tempsPartielEvo = $tempsPartielEvo;
        return $this;
    }

    /**
     * Set the total general.
     *
     * @param int|null $totalGeneral The total general.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTotalGeneral(?int $totalGeneral): LignesMsaEmploye {
        $this->totalGeneral = $totalGeneral;
        return $this;
    }

    /**
     * Set the type absence.
     *
     * @param string|null $typeAbsence The type absence.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAbsence(?string $typeAbsence): LignesMsaEmploye {
        $this->typeAbsence = $typeAbsence;
        return $this;
    }

    /**
     * Set the type autre remun11.
     *
     * @param string|null $typeAutreRemun11 The type autre remun11.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAutreRemun11(?string $typeAutreRemun11): LignesMsaEmploye {
        $this->typeAutreRemun11 = $typeAutreRemun11;
        return $this;
    }

    /**
     * Set the type autre remun12.
     *
     * @param string|null $typeAutreRemun12 The type autre remun12.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAutreRemun12(?string $typeAutreRemun12): LignesMsaEmploye {
        $this->typeAutreRemun12 = $typeAutreRemun12;
        return $this;
    }

    /**
     * Set the type autre remun13.
     *
     * @param string|null $typeAutreRemun13 The type autre remun13.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAutreRemun13(?string $typeAutreRemun13): LignesMsaEmploye {
        $this->typeAutreRemun13 = $typeAutreRemun13;
        return $this;
    }

    /**
     * Set the type autre remun14.
     *
     * @param string|null $typeAutreRemun14 The type autre remun14.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAutreRemun14(?string $typeAutreRemun14): LignesMsaEmploye {
        $this->typeAutreRemun14 = $typeAutreRemun14;
        return $this;
    }

    /**
     * Set the type autre remun21.
     *
     * @param string|null $typeAutreRemun21 The type autre remun21.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAutreRemun21(?string $typeAutreRemun21): LignesMsaEmploye {
        $this->typeAutreRemun21 = $typeAutreRemun21;
        return $this;
    }

    /**
     * Set the type autre remun22.
     *
     * @param string|null $typeAutreRemun22 The type autre remun22.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAutreRemun22(?string $typeAutreRemun22): LignesMsaEmploye {
        $this->typeAutreRemun22 = $typeAutreRemun22;
        return $this;
    }

    /**
     * Set the type autre remun23.
     *
     * @param string|null $typeAutreRemun23 The type autre remun23.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAutreRemun23(?string $typeAutreRemun23): LignesMsaEmploye {
        $this->typeAutreRemun23 = $typeAutreRemun23;
        return $this;
    }

    /**
     * Set the type autre remun24.
     *
     * @param string|null $typeAutreRemun24 The type autre remun24.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAutreRemun24(?string $typeAutreRemun24): LignesMsaEmploye {
        $this->typeAutreRemun24 = $typeAutreRemun24;
        return $this;
    }

    /**
     * Set the type autre remun31.
     *
     * @param string|null $typeAutreRemun31 The type autre remun31.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAutreRemun31(?string $typeAutreRemun31): LignesMsaEmploye {
        $this->typeAutreRemun31 = $typeAutreRemun31;
        return $this;
    }

    /**
     * Set the type autre remun32.
     *
     * @param string|null $typeAutreRemun32 The type autre remun32.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAutreRemun32(?string $typeAutreRemun32): LignesMsaEmploye {
        $this->typeAutreRemun32 = $typeAutreRemun32;
        return $this;
    }

    /**
     * Set the type autre remun33.
     *
     * @param string|null $typeAutreRemun33 The type autre remun33.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAutreRemun33(?string $typeAutreRemun33): LignesMsaEmploye {
        $this->typeAutreRemun33 = $typeAutreRemun33;
        return $this;
    }

    /**
     * Set the type autre remun34.
     *
     * @param string|null $typeAutreRemun34 The type autre remun34.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeAutreRemun34(?string $typeAutreRemun34): LignesMsaEmploye {
        $this->typeAutreRemun34 = $typeAutreRemun34;
        return $this;
    }

    /**
     * Set the type crcca emp.
     *
     * @param string|null $typeCrccaEmp The type crcca emp.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeCrccaEmp(?string $typeCrccaEmp): LignesMsaEmploye {
        $this->typeCrccaEmp = $typeCrccaEmp;
        return $this;
    }

    /**
     * Set the type remun11.
     *
     * @param string|null $typeRemun11 The type remun11.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeRemun11(?string $typeRemun11): LignesMsaEmploye {
        $this->typeRemun11 = $typeRemun11;
        return $this;
    }

    /**
     * Set the type remun12.
     *
     * @param string|null $typeRemun12 The type remun12.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeRemun12(?string $typeRemun12): LignesMsaEmploye {
        $this->typeRemun12 = $typeRemun12;
        return $this;
    }

    /**
     * Set the type remun13.
     *
     * @param string|null $typeRemun13 The type remun13.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeRemun13(?string $typeRemun13): LignesMsaEmploye {
        $this->typeRemun13 = $typeRemun13;
        return $this;
    }

    /**
     * Set the type remun14.
     *
     * @param string|null $typeRemun14 The type remun14.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeRemun14(?string $typeRemun14): LignesMsaEmploye {
        $this->typeRemun14 = $typeRemun14;
        return $this;
    }

    /**
     * Set the type remun21.
     *
     * @param string|null $typeRemun21 The type remun21.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeRemun21(?string $typeRemun21): LignesMsaEmploye {
        $this->typeRemun21 = $typeRemun21;
        return $this;
    }

    /**
     * Set the type remun22.
     *
     * @param string|null $typeRemun22 The type remun22.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeRemun22(?string $typeRemun22): LignesMsaEmploye {
        $this->typeRemun22 = $typeRemun22;
        return $this;
    }

    /**
     * Set the type remun23.
     *
     * @param string|null $typeRemun23 The type remun23.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeRemun23(?string $typeRemun23): LignesMsaEmploye {
        $this->typeRemun23 = $typeRemun23;
        return $this;
    }

    /**
     * Set the type remun24.
     *
     * @param string|null $typeRemun24 The type remun24.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeRemun24(?string $typeRemun24): LignesMsaEmploye {
        $this->typeRemun24 = $typeRemun24;
        return $this;
    }

    /**
     * Set the type remun31.
     *
     * @param string|null $typeRemun31 The type remun31.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeRemun31(?string $typeRemun31): LignesMsaEmploye {
        $this->typeRemun31 = $typeRemun31;
        return $this;
    }

    /**
     * Set the type remun32.
     *
     * @param string|null $typeRemun32 The type remun32.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeRemun32(?string $typeRemun32): LignesMsaEmploye {
        $this->typeRemun32 = $typeRemun32;
        return $this;
    }

    /**
     * Set the type remun33.
     *
     * @param string|null $typeRemun33 The type remun33.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeRemun33(?string $typeRemun33): LignesMsaEmploye {
        $this->typeRemun33 = $typeRemun33;
        return $this;
    }

    /**
     * Set the type remun34.
     *
     * @param string|null $typeRemun34 The type remun34.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeRemun34(?string $typeRemun34): LignesMsaEmploye {
        $this->typeRemun34 = $typeRemun34;
        return $this;
    }

    /**
     * Set the type travail.
     *
     * @param string|null $typeTravail The type travail.
     * @return LignesMsaEmploye Returns this Lignes msa employe.
     */
    public function setTypeTravail(?string $typeTravail): LignesMsaEmploye {
        $this->typeTravail = $typeTravail;
        return $this;
    }
}
