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
 * Emp dadsu gene.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpDadsuGene {

    /**
     * Ancienn btp.
     *
     * @var DateTime|null
     */
    private $anciennBtp;

    /**
     * Annexe7 mutation.
     *
     * @var bool|null
     */
    private $annexe7Mutation;

    /**
     * Apprenti etam.
     *
     * @var bool|null
     */
    private $apprentiEtam;

    /**
     * Benef assedic.
     *
     * @var string|null
     */
    private $benefAssedic;

    /**
     * Btq lieu trav.
     *
     * @var string|null
     */
    private $btqLieuTrav;

    /**
     * Bureau distributeur lieu trav.
     *
     * @var string|null
     */
    private $bureauDistributeurLieuTrav;

    /**
     * Code caisse cp.
     *
     * @var string|null
     */
    private $codeCaisseCp;

    /**
     * Code caract.
     *
     * @var string|null
     */
    private $codeCaract;

    /**
     * Code categ sal pourcent abat.
     *
     * @var string|null
     */
    private $codeCategSalPourcentAbat;

    /**
     * Code class btp.
     *
     * @var string|null
     */
    private $codeClassBtp;

    /**
     * Code contrat trav.
     *
     * @var string|null
     */
    private $codeContratTrav;

    /**
     * Code convention col.
     *
     * @var string|null
     */
    private $codeConventionCol;

    /**
     * Code distri etranger.
     *
     * @var string|null
     */
    private $codeDistriEtranger;

    /**
     * Code exo trav.
     *
     * @var string|null
     */
    private $codeExoTrav;

    /**
     * Code insee lieu trav.
     *
     * @var string|null
     */
    private $codeInseeLieuTrav;

    /**
     * Code intit contrat trav.
     *
     * @var string|null
     */
    private $codeIntitContratTrav;

    /**
     * Code metier btp.
     *
     * @var string|null
     */
    private $codeMetierBtp;

    /**
     * Code officiel commune lieu trav.
     *
     * @var string|null
     */
    private $codeOfficielCommuneLieuTrav;

    /**
     * Code pays lieu trav.
     *
     * @var string|null
     */
    private $codePaysLieuTrav;

    /**
     * Code postal lieu trav.
     *
     * @var string|null
     */
    private $codePostalLieuTrav;

    /**
     * Code regime at.
     *
     * @var string|null
     */
    private $codeRegimeAt;

    /**
     * Code regime base obl.
     *
     * @var string|null
     */
    private $codeRegimeBaseObl;

    /**
     * Code regime vieillesse.
     *
     * @var string|null
     */
    private $codeRegimeVieillesse;

    /**
     * Code retraite complementaire.
     *
     * @var string|null
     */
    private $codeRetraiteComplementaire;

    /**
     * Code situ admin.
     *
     * @var string|null
     */
    private $codeSituAdmin;

    /**
     * Code statut categ.
     *
     * @var string|null
     */
    private $codeStatutCateg;

    /**
     * Code statut categ retraite.
     *
     * @var string|null
     */
    private $codeStatutCategRetraite;

    /**
     * Code statut pro.
     *
     * @var string|null
     */
    private $codeStatutPro;

    /**
     * Code type exo1.
     *
     * @var string|null
     */
    private $codeTypeExo1;

    /**
     * Code type exo2.
     *
     * @var string|null
     */
    private $codeTypeExo2;

    /**
     * Code type exo3.
     *
     * @var string|null
     */
    private $codeTypeExo3;

    /**
     * Code unite temps travail.
     *
     * @var string|null
     */
    private $codeUniteTempsTravail;

    /**
     * Code zone geo.
     *
     * @var string|null
     */
    private $codeZoneGeo;

    /**
     * Complement lieu trav.
     *
     * @var string|null
     */
    private $complementLieuTrav;

    /**
     * Date rachat.
     *
     * @var DateTime|null
     */
    private $dateRachat;

    /**
     * Detache expatrie.
     *
     * @var string|null
     */
    private $detacheExpatrie;

    /**
     * Echelon.
     *
     * @var string|null
     */
    private $echelon;

    /**
     * Etab lieu travail.
     *
     * @var string|null
     */
    private $etabLieuTravail;

    /**
     * Id lieu travail.
     *
     * @var string|null
     */
    private $idLieuTravail;

    /**
     * Indice.
     *
     * @var string|null
     */
    private $indice;

    /**
     * Niveau.
     *
     * @var string|null
     */
    private $niveau;

    /**
     * Nom ville insee lieu trav.
     *
     * @var string|null
     */
    private $nomVilleInseeLieuTrav;

    /**
     * Nom ville lieu trav.
     *
     * @var string|null
     */
    private $nomVilleLieuTrav;

    /**
     * Nom voie lieu trav.
     *
     * @var string|null
     */
    private $nomVoieLieuTrav;

    /**
     * Num voie lieu trav.
     *
     * @var string|null
     */
    private $numVoieLieuTrav;

    /**
     * Numero.
     *
     * @var string|null
     */
    private $numero;

    /**
     * Position.
     *
     * @var string|null
     */
    private $position;

    /**
     * Raison soc lieu trav.
     *
     * @var string|null
     */
    private $raisonSocLieuTrav;

    /**
     * Siret lieu trav.
     *
     * @var string|null
     */
    private $siretLieuTrav;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ancienn btp.
     *
     * @return DateTime|null Returns the ancienn btp.
     */
    public function getAnciennBtp(): ?DateTime {
        return $this->anciennBtp;
    }

    /**
     * Get the annexe7 mutation.
     *
     * @return bool|null Returns the annexe7 mutation.
     */
    public function getAnnexe7Mutation(): ?bool {
        return $this->annexe7Mutation;
    }

    /**
     * Get the apprenti etam.
     *
     * @return bool|null Returns the apprenti etam.
     */
    public function getApprentiEtam(): ?bool {
        return $this->apprentiEtam;
    }

    /**
     * Get the benef assedic.
     *
     * @return string|null Returns the benef assedic.
     */
    public function getBenefAssedic(): ?string {
        return $this->benefAssedic;
    }

    /**
     * Get the btq lieu trav.
     *
     * @return string|null Returns the btq lieu trav.
     */
    public function getBtqLieuTrav(): ?string {
        return $this->btqLieuTrav;
    }

    /**
     * Get the bureau distributeur lieu trav.
     *
     * @return string|null Returns the bureau distributeur lieu trav.
     */
    public function getBureauDistributeurLieuTrav(): ?string {
        return $this->bureauDistributeurLieuTrav;
    }

    /**
     * Get the code caisse cp.
     *
     * @return string|null Returns the code caisse cp.
     */
    public function getCodeCaisseCp(): ?string {
        return $this->codeCaisseCp;
    }

    /**
     * Get the code caract.
     *
     * @return string|null Returns the code caract.
     */
    public function getCodeCaract(): ?string {
        return $this->codeCaract;
    }

    /**
     * Get the code categ sal pourcent abat.
     *
     * @return string|null Returns the code categ sal pourcent abat.
     */
    public function getCodeCategSalPourcentAbat(): ?string {
        return $this->codeCategSalPourcentAbat;
    }

    /**
     * Get the code class btp.
     *
     * @return string|null Returns the code class btp.
     */
    public function getCodeClassBtp(): ?string {
        return $this->codeClassBtp;
    }

    /**
     * Get the code contrat trav.
     *
     * @return string|null Returns the code contrat trav.
     */
    public function getCodeContratTrav(): ?string {
        return $this->codeContratTrav;
    }

    /**
     * Get the code convention col.
     *
     * @return string|null Returns the code convention col.
     */
    public function getCodeConventionCol(): ?string {
        return $this->codeConventionCol;
    }

    /**
     * Get the code distri etranger.
     *
     * @return string|null Returns the code distri etranger.
     */
    public function getCodeDistriEtranger(): ?string {
        return $this->codeDistriEtranger;
    }

    /**
     * Get the code exo trav.
     *
     * @return string|null Returns the code exo trav.
     */
    public function getCodeExoTrav(): ?string {
        return $this->codeExoTrav;
    }

    /**
     * Get the code insee lieu trav.
     *
     * @return string|null Returns the code insee lieu trav.
     */
    public function getCodeInseeLieuTrav(): ?string {
        return $this->codeInseeLieuTrav;
    }

    /**
     * Get the code intit contrat trav.
     *
     * @return string|null Returns the code intit contrat trav.
     */
    public function getCodeIntitContratTrav(): ?string {
        return $this->codeIntitContratTrav;
    }

    /**
     * Get the code metier btp.
     *
     * @return string|null Returns the code metier btp.
     */
    public function getCodeMetierBtp(): ?string {
        return $this->codeMetierBtp;
    }

    /**
     * Get the code officiel commune lieu trav.
     *
     * @return string|null Returns the code officiel commune lieu trav.
     */
    public function getCodeOfficielCommuneLieuTrav(): ?string {
        return $this->codeOfficielCommuneLieuTrav;
    }

    /**
     * Get the code pays lieu trav.
     *
     * @return string|null Returns the code pays lieu trav.
     */
    public function getCodePaysLieuTrav(): ?string {
        return $this->codePaysLieuTrav;
    }

    /**
     * Get the code postal lieu trav.
     *
     * @return string|null Returns the code postal lieu trav.
     */
    public function getCodePostalLieuTrav(): ?string {
        return $this->codePostalLieuTrav;
    }

    /**
     * Get the code regime at.
     *
     * @return string|null Returns the code regime at.
     */
    public function getCodeRegimeAt(): ?string {
        return $this->codeRegimeAt;
    }

    /**
     * Get the code regime base obl.
     *
     * @return string|null Returns the code regime base obl.
     */
    public function getCodeRegimeBaseObl(): ?string {
        return $this->codeRegimeBaseObl;
    }

    /**
     * Get the code regime vieillesse.
     *
     * @return string|null Returns the code regime vieillesse.
     */
    public function getCodeRegimeVieillesse(): ?string {
        return $this->codeRegimeVieillesse;
    }

    /**
     * Get the code retraite complementaire.
     *
     * @return string|null Returns the code retraite complementaire.
     */
    public function getCodeRetraiteComplementaire(): ?string {
        return $this->codeRetraiteComplementaire;
    }

    /**
     * Get the code situ admin.
     *
     * @return string|null Returns the code situ admin.
     */
    public function getCodeSituAdmin(): ?string {
        return $this->codeSituAdmin;
    }

    /**
     * Get the code statut categ.
     *
     * @return string|null Returns the code statut categ.
     */
    public function getCodeStatutCateg(): ?string {
        return $this->codeStatutCateg;
    }

    /**
     * Get the code statut categ retraite.
     *
     * @return string|null Returns the code statut categ retraite.
     */
    public function getCodeStatutCategRetraite(): ?string {
        return $this->codeStatutCategRetraite;
    }

    /**
     * Get the code statut pro.
     *
     * @return string|null Returns the code statut pro.
     */
    public function getCodeStatutPro(): ?string {
        return $this->codeStatutPro;
    }

    /**
     * Get the code type exo1.
     *
     * @return string|null Returns the code type exo1.
     */
    public function getCodeTypeExo1(): ?string {
        return $this->codeTypeExo1;
    }

    /**
     * Get the code type exo2.
     *
     * @return string|null Returns the code type exo2.
     */
    public function getCodeTypeExo2(): ?string {
        return $this->codeTypeExo2;
    }

    /**
     * Get the code type exo3.
     *
     * @return string|null Returns the code type exo3.
     */
    public function getCodeTypeExo3(): ?string {
        return $this->codeTypeExo3;
    }

    /**
     * Get the code unite temps travail.
     *
     * @return string|null Returns the code unite temps travail.
     */
    public function getCodeUniteTempsTravail(): ?string {
        return $this->codeUniteTempsTravail;
    }

    /**
     * Get the code zone geo.
     *
     * @return string|null Returns the code zone geo.
     */
    public function getCodeZoneGeo(): ?string {
        return $this->codeZoneGeo;
    }

    /**
     * Get the complement lieu trav.
     *
     * @return string|null Returns the complement lieu trav.
     */
    public function getComplementLieuTrav(): ?string {
        return $this->complementLieuTrav;
    }

    /**
     * Get the date rachat.
     *
     * @return DateTime|null Returns the date rachat.
     */
    public function getDateRachat(): ?DateTime {
        return $this->dateRachat;
    }

    /**
     * Get the detache expatrie.
     *
     * @return string|null Returns the detache expatrie.
     */
    public function getDetacheExpatrie(): ?string {
        return $this->detacheExpatrie;
    }

    /**
     * Get the echelon.
     *
     * @return string|null Returns the echelon.
     */
    public function getEchelon(): ?string {
        return $this->echelon;
    }

    /**
     * Get the etab lieu travail.
     *
     * @return string|null Returns the etab lieu travail.
     */
    public function getEtabLieuTravail(): ?string {
        return $this->etabLieuTravail;
    }

    /**
     * Get the id lieu travail.
     *
     * @return string|null Returns the id lieu travail.
     */
    public function getIdLieuTravail(): ?string {
        return $this->idLieuTravail;
    }

    /**
     * Get the indice.
     *
     * @return string|null Returns the indice.
     */
    public function getIndice(): ?string {
        return $this->indice;
    }

    /**
     * Get the niveau.
     *
     * @return string|null Returns the niveau.
     */
    public function getNiveau(): ?string {
        return $this->niveau;
    }

    /**
     * Get the nom ville insee lieu trav.
     *
     * @return string|null Returns the nom ville insee lieu trav.
     */
    public function getNomVilleInseeLieuTrav(): ?string {
        return $this->nomVilleInseeLieuTrav;
    }

    /**
     * Get the nom ville lieu trav.
     *
     * @return string|null Returns the nom ville lieu trav.
     */
    public function getNomVilleLieuTrav(): ?string {
        return $this->nomVilleLieuTrav;
    }

    /**
     * Get the nom voie lieu trav.
     *
     * @return string|null Returns the nom voie lieu trav.
     */
    public function getNomVoieLieuTrav(): ?string {
        return $this->nomVoieLieuTrav;
    }

    /**
     * Get the num voie lieu trav.
     *
     * @return string|null Returns the num voie lieu trav.
     */
    public function getNumVoieLieuTrav(): ?string {
        return $this->numVoieLieuTrav;
    }

    /**
     * Get the numero.
     *
     * @return string|null Returns the numero.
     */
    public function getNumero(): ?string {
        return $this->numero;
    }

    /**
     * Get the position.
     *
     * @return string|null Returns the position.
     */
    public function getPosition(): ?string {
        return $this->position;
    }

    /**
     * Get the raison soc lieu trav.
     *
     * @return string|null Returns the raison soc lieu trav.
     */
    public function getRaisonSocLieuTrav(): ?string {
        return $this->raisonSocLieuTrav;
    }

    /**
     * Get the siret lieu trav.
     *
     * @return string|null Returns the siret lieu trav.
     */
    public function getSiretLieuTrav(): ?string {
        return $this->siretLieuTrav;
    }

    /**
     * Set the ancienn btp.
     *
     * @param DateTime|null $anciennBtp The ancienn btp.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setAnciennBtp(?DateTime $anciennBtp): EmpDadsuGene {
        $this->anciennBtp = $anciennBtp;
        return $this;
    }

    /**
     * Set the annexe7 mutation.
     *
     * @param bool|null $annexe7Mutation The annexe7 mutation.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setAnnexe7Mutation(?bool $annexe7Mutation): EmpDadsuGene {
        $this->annexe7Mutation = $annexe7Mutation;
        return $this;
    }

    /**
     * Set the apprenti etam.
     *
     * @param bool|null $apprentiEtam The apprenti etam.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setApprentiEtam(?bool $apprentiEtam): EmpDadsuGene {
        $this->apprentiEtam = $apprentiEtam;
        return $this;
    }

    /**
     * Set the benef assedic.
     *
     * @param string|null $benefAssedic The benef assedic.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setBenefAssedic(?string $benefAssedic): EmpDadsuGene {
        $this->benefAssedic = $benefAssedic;
        return $this;
    }

    /**
     * Set the btq lieu trav.
     *
     * @param string|null $btqLieuTrav The btq lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setBtqLieuTrav(?string $btqLieuTrav): EmpDadsuGene {
        $this->btqLieuTrav = $btqLieuTrav;
        return $this;
    }

    /**
     * Set the bureau distributeur lieu trav.
     *
     * @param string|null $bureauDistributeurLieuTrav The bureau distributeur lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setBureauDistributeurLieuTrav(?string $bureauDistributeurLieuTrav): EmpDadsuGene {
        $this->bureauDistributeurLieuTrav = $bureauDistributeurLieuTrav;
        return $this;
    }

    /**
     * Set the code caisse cp.
     *
     * @param string|null $codeCaisseCp The code caisse cp.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeCaisseCp(?string $codeCaisseCp): EmpDadsuGene {
        $this->codeCaisseCp = $codeCaisseCp;
        return $this;
    }

    /**
     * Set the code caract.
     *
     * @param string|null $codeCaract The code caract.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeCaract(?string $codeCaract): EmpDadsuGene {
        $this->codeCaract = $codeCaract;
        return $this;
    }

    /**
     * Set the code categ sal pourcent abat.
     *
     * @param string|null $codeCategSalPourcentAbat The code categ sal pourcent abat.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeCategSalPourcentAbat(?string $codeCategSalPourcentAbat): EmpDadsuGene {
        $this->codeCategSalPourcentAbat = $codeCategSalPourcentAbat;
        return $this;
    }

    /**
     * Set the code class btp.
     *
     * @param string|null $codeClassBtp The code class btp.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeClassBtp(?string $codeClassBtp): EmpDadsuGene {
        $this->codeClassBtp = $codeClassBtp;
        return $this;
    }

    /**
     * Set the code contrat trav.
     *
     * @param string|null $codeContratTrav The code contrat trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeContratTrav(?string $codeContratTrav): EmpDadsuGene {
        $this->codeContratTrav = $codeContratTrav;
        return $this;
    }

    /**
     * Set the code convention col.
     *
     * @param string|null $codeConventionCol The code convention col.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeConventionCol(?string $codeConventionCol): EmpDadsuGene {
        $this->codeConventionCol = $codeConventionCol;
        return $this;
    }

    /**
     * Set the code distri etranger.
     *
     * @param string|null $codeDistriEtranger The code distri etranger.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeDistriEtranger(?string $codeDistriEtranger): EmpDadsuGene {
        $this->codeDistriEtranger = $codeDistriEtranger;
        return $this;
    }

    /**
     * Set the code exo trav.
     *
     * @param string|null $codeExoTrav The code exo trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeExoTrav(?string $codeExoTrav): EmpDadsuGene {
        $this->codeExoTrav = $codeExoTrav;
        return $this;
    }

    /**
     * Set the code insee lieu trav.
     *
     * @param string|null $codeInseeLieuTrav The code insee lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeInseeLieuTrav(?string $codeInseeLieuTrav): EmpDadsuGene {
        $this->codeInseeLieuTrav = $codeInseeLieuTrav;
        return $this;
    }

    /**
     * Set the code intit contrat trav.
     *
     * @param string|null $codeIntitContratTrav The code intit contrat trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeIntitContratTrav(?string $codeIntitContratTrav): EmpDadsuGene {
        $this->codeIntitContratTrav = $codeIntitContratTrav;
        return $this;
    }

    /**
     * Set the code metier btp.
     *
     * @param string|null $codeMetierBtp The code metier btp.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeMetierBtp(?string $codeMetierBtp): EmpDadsuGene {
        $this->codeMetierBtp = $codeMetierBtp;
        return $this;
    }

    /**
     * Set the code officiel commune lieu trav.
     *
     * @param string|null $codeOfficielCommuneLieuTrav The code officiel commune lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeOfficielCommuneLieuTrav(?string $codeOfficielCommuneLieuTrav): EmpDadsuGene {
        $this->codeOfficielCommuneLieuTrav = $codeOfficielCommuneLieuTrav;
        return $this;
    }

    /**
     * Set the code pays lieu trav.
     *
     * @param string|null $codePaysLieuTrav The code pays lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodePaysLieuTrav(?string $codePaysLieuTrav): EmpDadsuGene {
        $this->codePaysLieuTrav = $codePaysLieuTrav;
        return $this;
    }

    /**
     * Set the code postal lieu trav.
     *
     * @param string|null $codePostalLieuTrav The code postal lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodePostalLieuTrav(?string $codePostalLieuTrav): EmpDadsuGene {
        $this->codePostalLieuTrav = $codePostalLieuTrav;
        return $this;
    }

    /**
     * Set the code regime at.
     *
     * @param string|null $codeRegimeAt The code regime at.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeRegimeAt(?string $codeRegimeAt): EmpDadsuGene {
        $this->codeRegimeAt = $codeRegimeAt;
        return $this;
    }

    /**
     * Set the code regime base obl.
     *
     * @param string|null $codeRegimeBaseObl The code regime base obl.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeRegimeBaseObl(?string $codeRegimeBaseObl): EmpDadsuGene {
        $this->codeRegimeBaseObl = $codeRegimeBaseObl;
        return $this;
    }

    /**
     * Set the code regime vieillesse.
     *
     * @param string|null $codeRegimeVieillesse The code regime vieillesse.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeRegimeVieillesse(?string $codeRegimeVieillesse): EmpDadsuGene {
        $this->codeRegimeVieillesse = $codeRegimeVieillesse;
        return $this;
    }

    /**
     * Set the code retraite complementaire.
     *
     * @param string|null $codeRetraiteComplementaire The code retraite complementaire.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeRetraiteComplementaire(?string $codeRetraiteComplementaire): EmpDadsuGene {
        $this->codeRetraiteComplementaire = $codeRetraiteComplementaire;
        return $this;
    }

    /**
     * Set the code situ admin.
     *
     * @param string|null $codeSituAdmin The code situ admin.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeSituAdmin(?string $codeSituAdmin): EmpDadsuGene {
        $this->codeSituAdmin = $codeSituAdmin;
        return $this;
    }

    /**
     * Set the code statut categ.
     *
     * @param string|null $codeStatutCateg The code statut categ.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeStatutCateg(?string $codeStatutCateg): EmpDadsuGene {
        $this->codeStatutCateg = $codeStatutCateg;
        return $this;
    }

    /**
     * Set the code statut categ retraite.
     *
     * @param string|null $codeStatutCategRetraite The code statut categ retraite.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeStatutCategRetraite(?string $codeStatutCategRetraite): EmpDadsuGene {
        $this->codeStatutCategRetraite = $codeStatutCategRetraite;
        return $this;
    }

    /**
     * Set the code statut pro.
     *
     * @param string|null $codeStatutPro The code statut pro.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeStatutPro(?string $codeStatutPro): EmpDadsuGene {
        $this->codeStatutPro = $codeStatutPro;
        return $this;
    }

    /**
     * Set the code type exo1.
     *
     * @param string|null $codeTypeExo1 The code type exo1.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeTypeExo1(?string $codeTypeExo1): EmpDadsuGene {
        $this->codeTypeExo1 = $codeTypeExo1;
        return $this;
    }

    /**
     * Set the code type exo2.
     *
     * @param string|null $codeTypeExo2 The code type exo2.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeTypeExo2(?string $codeTypeExo2): EmpDadsuGene {
        $this->codeTypeExo2 = $codeTypeExo2;
        return $this;
    }

    /**
     * Set the code type exo3.
     *
     * @param string|null $codeTypeExo3 The code type exo3.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeTypeExo3(?string $codeTypeExo3): EmpDadsuGene {
        $this->codeTypeExo3 = $codeTypeExo3;
        return $this;
    }

    /**
     * Set the code unite temps travail.
     *
     * @param string|null $codeUniteTempsTravail The code unite temps travail.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeUniteTempsTravail(?string $codeUniteTempsTravail): EmpDadsuGene {
        $this->codeUniteTempsTravail = $codeUniteTempsTravail;
        return $this;
    }

    /**
     * Set the code zone geo.
     *
     * @param string|null $codeZoneGeo The code zone geo.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeZoneGeo(?string $codeZoneGeo): EmpDadsuGene {
        $this->codeZoneGeo = $codeZoneGeo;
        return $this;
    }

    /**
     * Set the complement lieu trav.
     *
     * @param string|null $complementLieuTrav The complement lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setComplementLieuTrav(?string $complementLieuTrav): EmpDadsuGene {
        $this->complementLieuTrav = $complementLieuTrav;
        return $this;
    }

    /**
     * Set the date rachat.
     *
     * @param DateTime|null $dateRachat The date rachat.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setDateRachat(?DateTime $dateRachat): EmpDadsuGene {
        $this->dateRachat = $dateRachat;
        return $this;
    }

    /**
     * Set the detache expatrie.
     *
     * @param string|null $detacheExpatrie The detache expatrie.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setDetacheExpatrie(?string $detacheExpatrie): EmpDadsuGene {
        $this->detacheExpatrie = $detacheExpatrie;
        return $this;
    }

    /**
     * Set the echelon.
     *
     * @param string|null $echelon The echelon.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setEchelon(?string $echelon): EmpDadsuGene {
        $this->echelon = $echelon;
        return $this;
    }

    /**
     * Set the etab lieu travail.
     *
     * @param string|null $etabLieuTravail The etab lieu travail.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setEtabLieuTravail(?string $etabLieuTravail): EmpDadsuGene {
        $this->etabLieuTravail = $etabLieuTravail;
        return $this;
    }

    /**
     * Set the id lieu travail.
     *
     * @param string|null $idLieuTravail The id lieu travail.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setIdLieuTravail(?string $idLieuTravail): EmpDadsuGene {
        $this->idLieuTravail = $idLieuTravail;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string|null $indice The indice.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setIndice(?string $indice): EmpDadsuGene {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string|null $niveau The niveau.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setNiveau(?string $niveau): EmpDadsuGene {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the nom ville insee lieu trav.
     *
     * @param string|null $nomVilleInseeLieuTrav The nom ville insee lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setNomVilleInseeLieuTrav(?string $nomVilleInseeLieuTrav): EmpDadsuGene {
        $this->nomVilleInseeLieuTrav = $nomVilleInseeLieuTrav;
        return $this;
    }

    /**
     * Set the nom ville lieu trav.
     *
     * @param string|null $nomVilleLieuTrav The nom ville lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setNomVilleLieuTrav(?string $nomVilleLieuTrav): EmpDadsuGene {
        $this->nomVilleLieuTrav = $nomVilleLieuTrav;
        return $this;
    }

    /**
     * Set the nom voie lieu trav.
     *
     * @param string|null $nomVoieLieuTrav The nom voie lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setNomVoieLieuTrav(?string $nomVoieLieuTrav): EmpDadsuGene {
        $this->nomVoieLieuTrav = $nomVoieLieuTrav;
        return $this;
    }

    /**
     * Set the num voie lieu trav.
     *
     * @param string|null $numVoieLieuTrav The num voie lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setNumVoieLieuTrav(?string $numVoieLieuTrav): EmpDadsuGene {
        $this->numVoieLieuTrav = $numVoieLieuTrav;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setNumero(?string $numero): EmpDadsuGene {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param string|null $position The position.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setPosition(?string $position): EmpDadsuGene {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the raison soc lieu trav.
     *
     * @param string|null $raisonSocLieuTrav The raison soc lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setRaisonSocLieuTrav(?string $raisonSocLieuTrav): EmpDadsuGene {
        $this->raisonSocLieuTrav = $raisonSocLieuTrav;
        return $this;
    }

    /**
     * Set the siret lieu trav.
     *
     * @param string|null $siretLieuTrav The siret lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setSiretLieuTrav(?string $siretLieuTrav): EmpDadsuGene {
        $this->siretLieuTrav = $siretLieuTrav;
        return $this;
    }
}
