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
 * Recap ducs annuelle.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RecapDucsAnnuelle {

    /**
     * A editer ducs.
     *
     * @var bool|null
     */
    private $aEditerDucs;

    /**
     * Acompte.
     *
     * @var float|null
     */
    private $acompte;

    /**
     * Arrondi base.
     *
     * @var string|null
     */
    private $arrondiBase;

    /**
     * Arrondi cotis.
     *
     * @var string|null
     */
    private $arrondiCotis;

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Date reglement.
     *
     * @var DateTime|null
     */
    private $dateReglement;

    /**
     * Date verse salaire.
     *
     * @var DateTime|null
     */
    private $dateVerseSalaire;

    /**
     * Ducs euro.
     *
     * @var bool|null
     */
    private $ducsEuro;

    /**
     * Effectif inscrit.
     *
     * @var int|null
     */
    private $effectifInscrit;

    /**
     * Effectif moyen.
     *
     * @var float|null
     */
    private $effectifMoyen;

    /**
     * Effectif paye.
     *
     * @var int|null
     */
    private $effectifPaye;

    /**
     * Fin per.
     *
     * @var DateTime|null
     */
    private $finPer;

    /**
     * Grand decalage.
     *
     * @var bool|null
     */
    private $grandDecalage;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Methode calcul cicehe.
     *
     * @var string|null
     */
    private $methodeCalculCicehe;

    /**
     * Montant total.
     *
     * @var float|null
     */
    private $montantTotal;

    /**
     * Motif ecart eff.
     *
     * @var string|null
     */
    private $motifEcartEff;

    /**
     * Mt aide ct aides.
     *
     * @var float|null
     */
    private $mtAideCtAides;

    /**
     * Mt brut dads.
     *
     * @var float|null
     */
    private $mtBrutDads;

    /**
     * Mt regul lodeom.
     *
     * @var float|null
     */
    private $mtRegulLodeom;

    /**
     * Nb autres.
     *
     * @var float|null
     */
    private $nbAutres;

    /**
     * Nb femmes.
     *
     * @var float|null
     */
    private $nbFemmes;

    /**
     * Nb fin contrat.
     *
     * @var float|null
     */
    private $nbFinContrat;

    /**
     * Nb hommes.
     *
     * @var float|null
     */
    private $nbHommes;

    /**
     * No affiliation.
     *
     * @var string|null
     */
    private $noAffiliation;

    /**
     * Organisme.
     *
     * @var string|null
     */
    private $organisme;

    /**
     * Paie decalee.
     *
     * @var bool|null
     */
    private $paieDecalee;

    /**
     * Per deb cice.
     *
     * @var DateTime|null
     */
    private $perDebCice;

    /**
     * Per fin cice.
     *
     * @var DateTime|null
     */
    private $perFinCice;

    /**
     * Periode.
     *
     * @var string|null
     */
    private $periode;

    /**
     * Periode decla.
     *
     * @var DateTime|null
     */
    private $periodeDecla;

    /**
     * Petit decalage.
     *
     * @var bool|null
     */
    private $petitDecalage;

    /**
     * Prem mois.
     *
     * @var DateTime|null
     */
    private $premMois;

    /**
     * Raison sociale.
     *
     * @var string|null
     */
    private $raisonSociale;

    /**
     * Recap ducs1.
     *
     * @var float|null
     */
    private $recapDucs1;

    /**
     * Recap ducs10.
     *
     * @var float|null
     */
    private $recapDucs10;

    /**
     * Recap ducs11.
     *
     * @var float|null
     */
    private $recapDucs11;

    /**
     * Recap ducs12.
     *
     * @var float|null
     */
    private $recapDucs12;

    /**
     * Recap ducs13.
     *
     * @var float|null
     */
    private $recapDucs13;

    /**
     * Recap ducs2.
     *
     * @var float|null
     */
    private $recapDucs2;

    /**
     * Recap ducs3.
     *
     * @var float|null
     */
    private $recapDucs3;

    /**
     * Recap ducs4.
     *
     * @var float|null
     */
    private $recapDucs4;

    /**
     * Recap ducs5.
     *
     * @var float|null
     */
    private $recapDucs5;

    /**
     * Recap ducs6.
     *
     * @var float|null
     */
    private $recapDucs6;

    /**
     * Recap ducs7.
     *
     * @var float|null
     */
    private $recapDucs7;

    /**
     * Recap ducs8.
     *
     * @var float|null
     */
    private $recapDucs8;

    /**
     * Recap ducs9.
     *
     * @var float|null
     */
    private $recapDucs9;

    /**
     * Regul ducs.
     *
     * @var float|null
     */
    private $regulDucs;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Sous type organisme.
     *
     * @var string|null
     */
    private $sousTypeOrganisme;

    /**
     * Traiter edi.
     *
     * @var bool|null
     */
    private $traiterEdi;

    /**
     * Type organisme.
     *
     * @var string|null
     */
    private $typeOrganisme;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a editer ducs.
     *
     * @return bool|null Returns the a editer ducs.
     */
    public function getAEditerDucs(): ?bool {
        return $this->aEditerDucs;
    }

    /**
     * Get the acompte.
     *
     * @return float|null Returns the acompte.
     */
    public function getAcompte(): ?float {
        return $this->acompte;
    }

    /**
     * Get the arrondi base.
     *
     * @return string|null Returns the arrondi base.
     */
    public function getArrondiBase(): ?string {
        return $this->arrondiBase;
    }

    /**
     * Get the arrondi cotis.
     *
     * @return string|null Returns the arrondi cotis.
     */
    public function getArrondiCotis(): ?string {
        return $this->arrondiCotis;
    }

    /**
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
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
     * Get the date reglement.
     *
     * @return DateTime|null Returns the date reglement.
     */
    public function getDateReglement(): ?DateTime {
        return $this->dateReglement;
    }

    /**
     * Get the date verse salaire.
     *
     * @return DateTime|null Returns the date verse salaire.
     */
    public function getDateVerseSalaire(): ?DateTime {
        return $this->dateVerseSalaire;
    }

    /**
     * Get the ducs euro.
     *
     * @return bool|null Returns the ducs euro.
     */
    public function getDucsEuro(): ?bool {
        return $this->ducsEuro;
    }

    /**
     * Get the effectif inscrit.
     *
     * @return int|null Returns the effectif inscrit.
     */
    public function getEffectifInscrit(): ?int {
        return $this->effectifInscrit;
    }

    /**
     * Get the effectif moyen.
     *
     * @return float|null Returns the effectif moyen.
     */
    public function getEffectifMoyen(): ?float {
        return $this->effectifMoyen;
    }

    /**
     * Get the effectif paye.
     *
     * @return int|null Returns the effectif paye.
     */
    public function getEffectifPaye(): ?int {
        return $this->effectifPaye;
    }

    /**
     * Get the fin per.
     *
     * @return DateTime|null Returns the fin per.
     */
    public function getFinPer(): ?DateTime {
        return $this->finPer;
    }

    /**
     * Get the grand decalage.
     *
     * @return bool|null Returns the grand decalage.
     */
    public function getGrandDecalage(): ?bool {
        return $this->grandDecalage;
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
     * Get the methode calcul cicehe.
     *
     * @return string|null Returns the methode calcul cicehe.
     */
    public function getMethodeCalculCicehe(): ?string {
        return $this->methodeCalculCicehe;
    }

    /**
     * Get the montant total.
     *
     * @return float|null Returns the montant total.
     */
    public function getMontantTotal(): ?float {
        return $this->montantTotal;
    }

    /**
     * Get the motif ecart eff.
     *
     * @return string|null Returns the motif ecart eff.
     */
    public function getMotifEcartEff(): ?string {
        return $this->motifEcartEff;
    }

    /**
     * Get the mt aide ct aides.
     *
     * @return float|null Returns the mt aide ct aides.
     */
    public function getMtAideCtAides(): ?float {
        return $this->mtAideCtAides;
    }

    /**
     * Get the mt brut dads.
     *
     * @return float|null Returns the mt brut dads.
     */
    public function getMtBrutDads(): ?float {
        return $this->mtBrutDads;
    }

    /**
     * Get the mt regul lodeom.
     *
     * @return float|null Returns the mt regul lodeom.
     */
    public function getMtRegulLodeom(): ?float {
        return $this->mtRegulLodeom;
    }

    /**
     * Get the nb autres.
     *
     * @return float|null Returns the nb autres.
     */
    public function getNbAutres(): ?float {
        return $this->nbAutres;
    }

    /**
     * Get the nb femmes.
     *
     * @return float|null Returns the nb femmes.
     */
    public function getNbFemmes(): ?float {
        return $this->nbFemmes;
    }

    /**
     * Get the nb fin contrat.
     *
     * @return float|null Returns the nb fin contrat.
     */
    public function getNbFinContrat(): ?float {
        return $this->nbFinContrat;
    }

    /**
     * Get the nb hommes.
     *
     * @return float|null Returns the nb hommes.
     */
    public function getNbHommes(): ?float {
        return $this->nbHommes;
    }

    /**
     * Get the no affiliation.
     *
     * @return string|null Returns the no affiliation.
     */
    public function getNoAffiliation(): ?string {
        return $this->noAffiliation;
    }

    /**
     * Get the organisme.
     *
     * @return string|null Returns the organisme.
     */
    public function getOrganisme(): ?string {
        return $this->organisme;
    }

    /**
     * Get the paie decalee.
     *
     * @return bool|null Returns the paie decalee.
     */
    public function getPaieDecalee(): ?bool {
        return $this->paieDecalee;
    }

    /**
     * Get the per deb cice.
     *
     * @return DateTime|null Returns the per deb cice.
     */
    public function getPerDebCice(): ?DateTime {
        return $this->perDebCice;
    }

    /**
     * Get the per fin cice.
     *
     * @return DateTime|null Returns the per fin cice.
     */
    public function getPerFinCice(): ?DateTime {
        return $this->perFinCice;
    }

    /**
     * Get the periode.
     *
     * @return string|null Returns the periode.
     */
    public function getPeriode(): ?string {
        return $this->periode;
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
     * Get the petit decalage.
     *
     * @return bool|null Returns the petit decalage.
     */
    public function getPetitDecalage(): ?bool {
        return $this->petitDecalage;
    }

    /**
     * Get the prem mois.
     *
     * @return DateTime|null Returns the prem mois.
     */
    public function getPremMois(): ?DateTime {
        return $this->premMois;
    }

    /**
     * Get the raison sociale.
     *
     * @return string|null Returns the raison sociale.
     */
    public function getRaisonSociale(): ?string {
        return $this->raisonSociale;
    }

    /**
     * Get the recap ducs1.
     *
     * @return float|null Returns the recap ducs1.
     */
    public function getRecapDucs1(): ?float {
        return $this->recapDucs1;
    }

    /**
     * Get the recap ducs10.
     *
     * @return float|null Returns the recap ducs10.
     */
    public function getRecapDucs10(): ?float {
        return $this->recapDucs10;
    }

    /**
     * Get the recap ducs11.
     *
     * @return float|null Returns the recap ducs11.
     */
    public function getRecapDucs11(): ?float {
        return $this->recapDucs11;
    }

    /**
     * Get the recap ducs12.
     *
     * @return float|null Returns the recap ducs12.
     */
    public function getRecapDucs12(): ?float {
        return $this->recapDucs12;
    }

    /**
     * Get the recap ducs13.
     *
     * @return float|null Returns the recap ducs13.
     */
    public function getRecapDucs13(): ?float {
        return $this->recapDucs13;
    }

    /**
     * Get the recap ducs2.
     *
     * @return float|null Returns the recap ducs2.
     */
    public function getRecapDucs2(): ?float {
        return $this->recapDucs2;
    }

    /**
     * Get the recap ducs3.
     *
     * @return float|null Returns the recap ducs3.
     */
    public function getRecapDucs3(): ?float {
        return $this->recapDucs3;
    }

    /**
     * Get the recap ducs4.
     *
     * @return float|null Returns the recap ducs4.
     */
    public function getRecapDucs4(): ?float {
        return $this->recapDucs4;
    }

    /**
     * Get the recap ducs5.
     *
     * @return float|null Returns the recap ducs5.
     */
    public function getRecapDucs5(): ?float {
        return $this->recapDucs5;
    }

    /**
     * Get the recap ducs6.
     *
     * @return float|null Returns the recap ducs6.
     */
    public function getRecapDucs6(): ?float {
        return $this->recapDucs6;
    }

    /**
     * Get the recap ducs7.
     *
     * @return float|null Returns the recap ducs7.
     */
    public function getRecapDucs7(): ?float {
        return $this->recapDucs7;
    }

    /**
     * Get the recap ducs8.
     *
     * @return float|null Returns the recap ducs8.
     */
    public function getRecapDucs8(): ?float {
        return $this->recapDucs8;
    }

    /**
     * Get the recap ducs9.
     *
     * @return float|null Returns the recap ducs9.
     */
    public function getRecapDucs9(): ?float {
        return $this->recapDucs9;
    }

    /**
     * Get the regul ducs.
     *
     * @return float|null Returns the regul ducs.
     */
    public function getRegulDucs(): ?float {
        return $this->regulDucs;
    }

    /**
     * Get the rib.
     *
     * @return string|null Returns the rib.
     */
    public function getRib(): ?string {
        return $this->rib;
    }

    /**
     * Get the sous type organisme.
     *
     * @return string|null Returns the sous type organisme.
     */
    public function getSousTypeOrganisme(): ?string {
        return $this->sousTypeOrganisme;
    }

    /**
     * Get the traiter edi.
     *
     * @return bool|null Returns the traiter edi.
     */
    public function getTraiterEdi(): ?bool {
        return $this->traiterEdi;
    }

    /**
     * Get the type organisme.
     *
     * @return string|null Returns the type organisme.
     */
    public function getTypeOrganisme(): ?string {
        return $this->typeOrganisme;
    }

    /**
     * Set the a editer ducs.
     *
     * @param bool|null $aEditerDucs The a editer ducs.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setAEditerDucs(?bool $aEditerDucs): RecapDucsAnnuelle {
        $this->aEditerDucs = $aEditerDucs;
        return $this;
    }

    /**
     * Set the acompte.
     *
     * @param float|null $acompte The acompte.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setAcompte(?float $acompte): RecapDucsAnnuelle {
        $this->acompte = $acompte;
        return $this;
    }

    /**
     * Set the arrondi base.
     *
     * @param string|null $arrondiBase The arrondi base.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setArrondiBase(?string $arrondiBase): RecapDucsAnnuelle {
        $this->arrondiBase = $arrondiBase;
        return $this;
    }

    /**
     * Set the arrondi cotis.
     *
     * @param string|null $arrondiCotis The arrondi cotis.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setArrondiCotis(?string $arrondiCotis): RecapDucsAnnuelle {
        $this->arrondiCotis = $arrondiCotis;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setCodeCentre(?string $codeCentre): RecapDucsAnnuelle {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setCodeEtablissement(?int $codeEtablissement): RecapDucsAnnuelle {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date reglement.
     *
     * @param DateTime|null $dateReglement The date reglement.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setDateReglement(?DateTime $dateReglement): RecapDucsAnnuelle {
        $this->dateReglement = $dateReglement;
        return $this;
    }

    /**
     * Set the date verse salaire.
     *
     * @param DateTime|null $dateVerseSalaire The date verse salaire.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setDateVerseSalaire(?DateTime $dateVerseSalaire): RecapDucsAnnuelle {
        $this->dateVerseSalaire = $dateVerseSalaire;
        return $this;
    }

    /**
     * Set the ducs euro.
     *
     * @param bool|null $ducsEuro The ducs euro.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setDucsEuro(?bool $ducsEuro): RecapDucsAnnuelle {
        $this->ducsEuro = $ducsEuro;
        return $this;
    }

    /**
     * Set the effectif inscrit.
     *
     * @param int|null $effectifInscrit The effectif inscrit.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setEffectifInscrit(?int $effectifInscrit): RecapDucsAnnuelle {
        $this->effectifInscrit = $effectifInscrit;
        return $this;
    }

    /**
     * Set the effectif moyen.
     *
     * @param float|null $effectifMoyen The effectif moyen.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setEffectifMoyen(?float $effectifMoyen): RecapDucsAnnuelle {
        $this->effectifMoyen = $effectifMoyen;
        return $this;
    }

    /**
     * Set the effectif paye.
     *
     * @param int|null $effectifPaye The effectif paye.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setEffectifPaye(?int $effectifPaye): RecapDucsAnnuelle {
        $this->effectifPaye = $effectifPaye;
        return $this;
    }

    /**
     * Set the fin per.
     *
     * @param DateTime|null $finPer The fin per.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setFinPer(?DateTime $finPer): RecapDucsAnnuelle {
        $this->finPer = $finPer;
        return $this;
    }

    /**
     * Set the grand decalage.
     *
     * @param bool|null $grandDecalage The grand decalage.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setGrandDecalage(?bool $grandDecalage): RecapDucsAnnuelle {
        $this->grandDecalage = $grandDecalage;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setLienDocument(?string $lienDocument): RecapDucsAnnuelle {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the methode calcul cicehe.
     *
     * @param string|null $methodeCalculCicehe The methode calcul cicehe.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setMethodeCalculCicehe(?string $methodeCalculCicehe): RecapDucsAnnuelle {
        $this->methodeCalculCicehe = $methodeCalculCicehe;
        return $this;
    }

    /**
     * Set the montant total.
     *
     * @param float|null $montantTotal The montant total.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setMontantTotal(?float $montantTotal): RecapDucsAnnuelle {
        $this->montantTotal = $montantTotal;
        return $this;
    }

    /**
     * Set the motif ecart eff.
     *
     * @param string|null $motifEcartEff The motif ecart eff.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setMotifEcartEff(?string $motifEcartEff): RecapDucsAnnuelle {
        $this->motifEcartEff = $motifEcartEff;
        return $this;
    }

    /**
     * Set the mt aide ct aides.
     *
     * @param float|null $mtAideCtAides The mt aide ct aides.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setMtAideCtAides(?float $mtAideCtAides): RecapDucsAnnuelle {
        $this->mtAideCtAides = $mtAideCtAides;
        return $this;
    }

    /**
     * Set the mt brut dads.
     *
     * @param float|null $mtBrutDads The mt brut dads.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setMtBrutDads(?float $mtBrutDads): RecapDucsAnnuelle {
        $this->mtBrutDads = $mtBrutDads;
        return $this;
    }

    /**
     * Set the mt regul lodeom.
     *
     * @param float|null $mtRegulLodeom The mt regul lodeom.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setMtRegulLodeom(?float $mtRegulLodeom): RecapDucsAnnuelle {
        $this->mtRegulLodeom = $mtRegulLodeom;
        return $this;
    }

    /**
     * Set the nb autres.
     *
     * @param float|null $nbAutres The nb autres.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setNbAutres(?float $nbAutres): RecapDucsAnnuelle {
        $this->nbAutres = $nbAutres;
        return $this;
    }

    /**
     * Set the nb femmes.
     *
     * @param float|null $nbFemmes The nb femmes.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setNbFemmes(?float $nbFemmes): RecapDucsAnnuelle {
        $this->nbFemmes = $nbFemmes;
        return $this;
    }

    /**
     * Set the nb fin contrat.
     *
     * @param float|null $nbFinContrat The nb fin contrat.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setNbFinContrat(?float $nbFinContrat): RecapDucsAnnuelle {
        $this->nbFinContrat = $nbFinContrat;
        return $this;
    }

    /**
     * Set the nb hommes.
     *
     * @param float|null $nbHommes The nb hommes.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setNbHommes(?float $nbHommes): RecapDucsAnnuelle {
        $this->nbHommes = $nbHommes;
        return $this;
    }

    /**
     * Set the no affiliation.
     *
     * @param string|null $noAffiliation The no affiliation.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setNoAffiliation(?string $noAffiliation): RecapDucsAnnuelle {
        $this->noAffiliation = $noAffiliation;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string|null $organisme The organisme.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setOrganisme(?string $organisme): RecapDucsAnnuelle {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the paie decalee.
     *
     * @param bool|null $paieDecalee The paie decalee.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setPaieDecalee(?bool $paieDecalee): RecapDucsAnnuelle {
        $this->paieDecalee = $paieDecalee;
        return $this;
    }

    /**
     * Set the per deb cice.
     *
     * @param DateTime|null $perDebCice The per deb cice.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setPerDebCice(?DateTime $perDebCice): RecapDucsAnnuelle {
        $this->perDebCice = $perDebCice;
        return $this;
    }

    /**
     * Set the per fin cice.
     *
     * @param DateTime|null $perFinCice The per fin cice.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setPerFinCice(?DateTime $perFinCice): RecapDucsAnnuelle {
        $this->perFinCice = $perFinCice;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param string|null $periode The periode.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setPeriode(?string $periode): RecapDucsAnnuelle {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setPeriodeDecla(?DateTime $periodeDecla): RecapDucsAnnuelle {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the petit decalage.
     *
     * @param bool|null $petitDecalage The petit decalage.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setPetitDecalage(?bool $petitDecalage): RecapDucsAnnuelle {
        $this->petitDecalage = $petitDecalage;
        return $this;
    }

    /**
     * Set the prem mois.
     *
     * @param DateTime|null $premMois The prem mois.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setPremMois(?DateTime $premMois): RecapDucsAnnuelle {
        $this->premMois = $premMois;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string|null $raisonSociale The raison sociale.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRaisonSociale(?string $raisonSociale): RecapDucsAnnuelle {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    /**
     * Set the recap ducs1.
     *
     * @param float|null $recapDucs1 The recap ducs1.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs1(?float $recapDucs1): RecapDucsAnnuelle {
        $this->recapDucs1 = $recapDucs1;
        return $this;
    }

    /**
     * Set the recap ducs10.
     *
     * @param float|null $recapDucs10 The recap ducs10.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs10(?float $recapDucs10): RecapDucsAnnuelle {
        $this->recapDucs10 = $recapDucs10;
        return $this;
    }

    /**
     * Set the recap ducs11.
     *
     * @param float|null $recapDucs11 The recap ducs11.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs11(?float $recapDucs11): RecapDucsAnnuelle {
        $this->recapDucs11 = $recapDucs11;
        return $this;
    }

    /**
     * Set the recap ducs12.
     *
     * @param float|null $recapDucs12 The recap ducs12.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs12(?float $recapDucs12): RecapDucsAnnuelle {
        $this->recapDucs12 = $recapDucs12;
        return $this;
    }

    /**
     * Set the recap ducs13.
     *
     * @param float|null $recapDucs13 The recap ducs13.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs13(?float $recapDucs13): RecapDucsAnnuelle {
        $this->recapDucs13 = $recapDucs13;
        return $this;
    }

    /**
     * Set the recap ducs2.
     *
     * @param float|null $recapDucs2 The recap ducs2.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs2(?float $recapDucs2): RecapDucsAnnuelle {
        $this->recapDucs2 = $recapDucs2;
        return $this;
    }

    /**
     * Set the recap ducs3.
     *
     * @param float|null $recapDucs3 The recap ducs3.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs3(?float $recapDucs3): RecapDucsAnnuelle {
        $this->recapDucs3 = $recapDucs3;
        return $this;
    }

    /**
     * Set the recap ducs4.
     *
     * @param float|null $recapDucs4 The recap ducs4.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs4(?float $recapDucs4): RecapDucsAnnuelle {
        $this->recapDucs4 = $recapDucs4;
        return $this;
    }

    /**
     * Set the recap ducs5.
     *
     * @param float|null $recapDucs5 The recap ducs5.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs5(?float $recapDucs5): RecapDucsAnnuelle {
        $this->recapDucs5 = $recapDucs5;
        return $this;
    }

    /**
     * Set the recap ducs6.
     *
     * @param float|null $recapDucs6 The recap ducs6.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs6(?float $recapDucs6): RecapDucsAnnuelle {
        $this->recapDucs6 = $recapDucs6;
        return $this;
    }

    /**
     * Set the recap ducs7.
     *
     * @param float|null $recapDucs7 The recap ducs7.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs7(?float $recapDucs7): RecapDucsAnnuelle {
        $this->recapDucs7 = $recapDucs7;
        return $this;
    }

    /**
     * Set the recap ducs8.
     *
     * @param float|null $recapDucs8 The recap ducs8.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs8(?float $recapDucs8): RecapDucsAnnuelle {
        $this->recapDucs8 = $recapDucs8;
        return $this;
    }

    /**
     * Set the recap ducs9.
     *
     * @param float|null $recapDucs9 The recap ducs9.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRecapDucs9(?float $recapDucs9): RecapDucsAnnuelle {
        $this->recapDucs9 = $recapDucs9;
        return $this;
    }

    /**
     * Set the regul ducs.
     *
     * @param float|null $regulDucs The regul ducs.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRegulDucs(?float $regulDucs): RecapDucsAnnuelle {
        $this->regulDucs = $regulDucs;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setRib(?string $rib): RecapDucsAnnuelle {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the sous type organisme.
     *
     * @param string|null $sousTypeOrganisme The sous type organisme.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setSousTypeOrganisme(?string $sousTypeOrganisme): RecapDucsAnnuelle {
        $this->sousTypeOrganisme = $sousTypeOrganisme;
        return $this;
    }

    /**
     * Set the traiter edi.
     *
     * @param bool|null $traiterEdi The traiter edi.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setTraiterEdi(?bool $traiterEdi): RecapDucsAnnuelle {
        $this->traiterEdi = $traiterEdi;
        return $this;
    }

    /**
     * Set the type organisme.
     *
     * @param string|null $typeOrganisme The type organisme.
     * @return RecapDucsAnnuelle Returns this Recap ducs annuelle.
     */
    public function setTypeOrganisme(?string $typeOrganisme): RecapDucsAnnuelle {
        $this->typeOrganisme = $typeOrganisme;
        return $this;
    }
}
