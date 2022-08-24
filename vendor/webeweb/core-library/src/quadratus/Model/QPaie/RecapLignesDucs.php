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
 * Recap lignes ducs.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RecapLignesDucs {

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
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setAEditerDucs(?bool $aEditerDucs): RecapLignesDucs {
        $this->aEditerDucs = $aEditerDucs;
        return $this;
    }

    /**
     * Set the acompte.
     *
     * @param float|null $acompte The acompte.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setAcompte(?float $acompte): RecapLignesDucs {
        $this->acompte = $acompte;
        return $this;
    }

    /**
     * Set the arrondi base.
     *
     * @param string|null $arrondiBase The arrondi base.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setArrondiBase(?string $arrondiBase): RecapLignesDucs {
        $this->arrondiBase = $arrondiBase;
        return $this;
    }

    /**
     * Set the arrondi cotis.
     *
     * @param string|null $arrondiCotis The arrondi cotis.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setArrondiCotis(?string $arrondiCotis): RecapLignesDucs {
        $this->arrondiCotis = $arrondiCotis;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setCodeCentre(?string $codeCentre): RecapLignesDucs {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setCodeEtablissement(?int $codeEtablissement): RecapLignesDucs {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date reglement.
     *
     * @param DateTime|null $dateReglement The date reglement.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setDateReglement(?DateTime $dateReglement): RecapLignesDucs {
        $this->dateReglement = $dateReglement;
        return $this;
    }

    /**
     * Set the date verse salaire.
     *
     * @param DateTime|null $dateVerseSalaire The date verse salaire.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setDateVerseSalaire(?DateTime $dateVerseSalaire): RecapLignesDucs {
        $this->dateVerseSalaire = $dateVerseSalaire;
        return $this;
    }

    /**
     * Set the ducs euro.
     *
     * @param bool|null $ducsEuro The ducs euro.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setDucsEuro(?bool $ducsEuro): RecapLignesDucs {
        $this->ducsEuro = $ducsEuro;
        return $this;
    }

    /**
     * Set the effectif inscrit.
     *
     * @param int|null $effectifInscrit The effectif inscrit.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setEffectifInscrit(?int $effectifInscrit): RecapLignesDucs {
        $this->effectifInscrit = $effectifInscrit;
        return $this;
    }

    /**
     * Set the effectif paye.
     *
     * @param int|null $effectifPaye The effectif paye.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setEffectifPaye(?int $effectifPaye): RecapLignesDucs {
        $this->effectifPaye = $effectifPaye;
        return $this;
    }

    /**
     * Set the fin per.
     *
     * @param DateTime|null $finPer The fin per.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setFinPer(?DateTime $finPer): RecapLignesDucs {
        $this->finPer = $finPer;
        return $this;
    }

    /**
     * Set the grand decalage.
     *
     * @param bool|null $grandDecalage The grand decalage.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setGrandDecalage(?bool $grandDecalage): RecapLignesDucs {
        $this->grandDecalage = $grandDecalage;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setLienDocument(?string $lienDocument): RecapLignesDucs {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the montant total.
     *
     * @param float|null $montantTotal The montant total.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setMontantTotal(?float $montantTotal): RecapLignesDucs {
        $this->montantTotal = $montantTotal;
        return $this;
    }

    /**
     * Set the motif ecart eff.
     *
     * @param string|null $motifEcartEff The motif ecart eff.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setMotifEcartEff(?string $motifEcartEff): RecapLignesDucs {
        $this->motifEcartEff = $motifEcartEff;
        return $this;
    }

    /**
     * Set the nb autres.
     *
     * @param float|null $nbAutres The nb autres.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setNbAutres(?float $nbAutres): RecapLignesDucs {
        $this->nbAutres = $nbAutres;
        return $this;
    }

    /**
     * Set the nb femmes.
     *
     * @param float|null $nbFemmes The nb femmes.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setNbFemmes(?float $nbFemmes): RecapLignesDucs {
        $this->nbFemmes = $nbFemmes;
        return $this;
    }

    /**
     * Set the nb fin contrat.
     *
     * @param float|null $nbFinContrat The nb fin contrat.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setNbFinContrat(?float $nbFinContrat): RecapLignesDucs {
        $this->nbFinContrat = $nbFinContrat;
        return $this;
    }

    /**
     * Set the nb hommes.
     *
     * @param float|null $nbHommes The nb hommes.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setNbHommes(?float $nbHommes): RecapLignesDucs {
        $this->nbHommes = $nbHommes;
        return $this;
    }

    /**
     * Set the no affiliation.
     *
     * @param string|null $noAffiliation The no affiliation.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setNoAffiliation(?string $noAffiliation): RecapLignesDucs {
        $this->noAffiliation = $noAffiliation;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string|null $organisme The organisme.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setOrganisme(?string $organisme): RecapLignesDucs {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the paie decalee.
     *
     * @param bool|null $paieDecalee The paie decalee.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setPaieDecalee(?bool $paieDecalee): RecapLignesDucs {
        $this->paieDecalee = $paieDecalee;
        return $this;
    }

    /**
     * Set the per deb cice.
     *
     * @param DateTime|null $perDebCice The per deb cice.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setPerDebCice(?DateTime $perDebCice): RecapLignesDucs {
        $this->perDebCice = $perDebCice;
        return $this;
    }

    /**
     * Set the per fin cice.
     *
     * @param DateTime|null $perFinCice The per fin cice.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setPerFinCice(?DateTime $perFinCice): RecapLignesDucs {
        $this->perFinCice = $perFinCice;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param string|null $periode The periode.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setPeriode(?string $periode): RecapLignesDucs {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setPeriodeDecla(?DateTime $periodeDecla): RecapLignesDucs {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the petit decalage.
     *
     * @param bool|null $petitDecalage The petit decalage.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setPetitDecalage(?bool $petitDecalage): RecapLignesDucs {
        $this->petitDecalage = $petitDecalage;
        return $this;
    }

    /**
     * Set the prem mois.
     *
     * @param DateTime|null $premMois The prem mois.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setPremMois(?DateTime $premMois): RecapLignesDucs {
        $this->premMois = $premMois;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string|null $raisonSociale The raison sociale.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setRaisonSociale(?string $raisonSociale): RecapLignesDucs {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    /**
     * Set the regul ducs.
     *
     * @param float|null $regulDucs The regul ducs.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setRegulDucs(?float $regulDucs): RecapLignesDucs {
        $this->regulDucs = $regulDucs;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setRib(?string $rib): RecapLignesDucs {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the sous type organisme.
     *
     * @param string|null $sousTypeOrganisme The sous type organisme.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setSousTypeOrganisme(?string $sousTypeOrganisme): RecapLignesDucs {
        $this->sousTypeOrganisme = $sousTypeOrganisme;
        return $this;
    }

    /**
     * Set the traiter edi.
     *
     * @param bool|null $traiterEdi The traiter edi.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setTraiterEdi(?bool $traiterEdi): RecapLignesDucs {
        $this->traiterEdi = $traiterEdi;
        return $this;
    }

    /**
     * Set the type organisme.
     *
     * @param string|null $typeOrganisme The type organisme.
     * @return RecapLignesDucs Returns this Recap lignes ducs.
     */
    public function setTypeOrganisme(?string $typeOrganisme): RecapLignesDucs {
        $this->typeOrganisme = $typeOrganisme;
        return $this;
    }
}
