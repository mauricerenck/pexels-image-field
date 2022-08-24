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

/**
 * Orga generiques.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class OrgaGeneriques {

    /**
     * A declarer dsn neant.
     *
     * @var bool|null
     */
    private $aDeclarerDsnNeant;

    /**
     * Agrement ministeriel.
     *
     * @var string|null
     */
    private $agrementMinisteriel;

    /**
     * Appliquer cpn220.
     *
     * @var bool|null
     */
    private $appliquerCpn220;

    /**
     * Arrondir base.
     *
     * @var string|null
     */
    private $arrondirBase;

    /**
     * Arrondir cotis.
     *
     * @var string|null
     */
    private $arrondirCotis;

    /**
     * Assiette specif agff.
     *
     * @var bool|null
     */
    private $assietteSpecifAgff;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code assiette sit2.
     *
     * @var string|null
     */
    private $codeAssietteSit2;

    /**
     * Code assiette sit2 agff.
     *
     * @var string|null
     */
    private $codeAssietteSit2Agff;

    /**
     * Code assiette sitb.
     *
     * @var string|null
     */
    private $codeAssietteSitb;

    /**
     * Code assiette sitbagff.
     *
     * @var string|null
     */
    private $codeAssietteSitbagff;

    /**
     * Code assiette sitc.
     *
     * @var string|null
     */
    private $codeAssietteSitc;

    /**
     * Code caisse msa.
     *
     * @var string|null
     */
    private $codeCaisseMsa;

    /**
     * Code organisme assurance dadsu.
     *
     * @var string|null
     */
    private $codeOrganismeAssuranceDadsu;

    /**
     * Code organisme mutuelle dadsu.
     *
     * @var string|null
     */
    private $codeOrganismeMutuelleDadsu;

    /**
     * Detail arrco.
     *
     * @var bool|null
     */
    private $detailArrco;

    /**
     * Groupe crc.
     *
     * @var string|null
     */
    private $groupeCrc;

    /**
     * Id institution.
     *
     * @var string|null
     */
    private $idInstitution;

    /**
     * Intit sous total agff agirc.
     *
     * @var string|null
     */
    private $intitSousTotalAgffAgirc;

    /**
     * Intit sous total agff arrco.
     *
     * @var string|null
     */
    private $intitSousTotalAgffArrco;

    /**
     * Intit sous total apec.
     *
     * @var string|null
     */
    private $intitSousTotalApec;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Lien fic param dsn.
     *
     * @var string|null
     */
    private $lienFicParamDsn;

    /**
     * Regroupement si.
     *
     * @var bool|null
     */
    private $regroupementSi;

    /**
     * Sous total agff.
     *
     * @var bool|null
     */
    private $sousTotalAgff;

    /**
     * Sous total apec.
     *
     * @var bool|null
     */
    private $sousTotalApec;

    /**
     * Sous total caisse.
     *
     * @var bool|null
     */
    private $sousTotalCaisse;

    /**
     * Traitement dadsu.
     *
     * @var bool|null
     */
    private $traitementDadsu;

    /**
     * Type declaration.
     *
     * @var string|null
     */
    private $typeDeclaration;

    /**
     * Type organisme.
     *
     * @var string|null
     */
    private $typeOrganisme;

    /**
     * Utilise.
     *
     * @var bool|null
     */
    private $utilise;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a declarer dsn neant.
     *
     * @return bool|null Returns the a declarer dsn neant.
     */
    public function getADeclarerDsnNeant(): ?bool {
        return $this->aDeclarerDsnNeant;
    }

    /**
     * Get the agrement ministeriel.
     *
     * @return string|null Returns the agrement ministeriel.
     */
    public function getAgrementMinisteriel(): ?string {
        return $this->agrementMinisteriel;
    }

    /**
     * Get the appliquer cpn220.
     *
     * @return bool|null Returns the appliquer cpn220.
     */
    public function getAppliquerCpn220(): ?bool {
        return $this->appliquerCpn220;
    }

    /**
     * Get the arrondir base.
     *
     * @return string|null Returns the arrondir base.
     */
    public function getArrondirBase(): ?string {
        return $this->arrondirBase;
    }

    /**
     * Get the arrondir cotis.
     *
     * @return string|null Returns the arrondir cotis.
     */
    public function getArrondirCotis(): ?string {
        return $this->arrondirCotis;
    }

    /**
     * Get the assiette specif agff.
     *
     * @return bool|null Returns the assiette specif agff.
     */
    public function getAssietteSpecifAgff(): ?bool {
        return $this->assietteSpecifAgff;
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
     * Get the code assiette sit2.
     *
     * @return string|null Returns the code assiette sit2.
     */
    public function getCodeAssietteSit2(): ?string {
        return $this->codeAssietteSit2;
    }

    /**
     * Get the code assiette sit2 agff.
     *
     * @return string|null Returns the code assiette sit2 agff.
     */
    public function getCodeAssietteSit2Agff(): ?string {
        return $this->codeAssietteSit2Agff;
    }

    /**
     * Get the code assiette sitb.
     *
     * @return string|null Returns the code assiette sitb.
     */
    public function getCodeAssietteSitb(): ?string {
        return $this->codeAssietteSitb;
    }

    /**
     * Get the code assiette sitbagff.
     *
     * @return string|null Returns the code assiette sitbagff.
     */
    public function getCodeAssietteSitbagff(): ?string {
        return $this->codeAssietteSitbagff;
    }

    /**
     * Get the code assiette sitc.
     *
     * @return string|null Returns the code assiette sitc.
     */
    public function getCodeAssietteSitc(): ?string {
        return $this->codeAssietteSitc;
    }

    /**
     * Get the code caisse msa.
     *
     * @return string|null Returns the code caisse msa.
     */
    public function getCodeCaisseMsa(): ?string {
        return $this->codeCaisseMsa;
    }

    /**
     * Get the code organisme assurance dadsu.
     *
     * @return string|null Returns the code organisme assurance dadsu.
     */
    public function getCodeOrganismeAssuranceDadsu(): ?string {
        return $this->codeOrganismeAssuranceDadsu;
    }

    /**
     * Get the code organisme mutuelle dadsu.
     *
     * @return string|null Returns the code organisme mutuelle dadsu.
     */
    public function getCodeOrganismeMutuelleDadsu(): ?string {
        return $this->codeOrganismeMutuelleDadsu;
    }

    /**
     * Get the detail arrco.
     *
     * @return bool|null Returns the detail arrco.
     */
    public function getDetailArrco(): ?bool {
        return $this->detailArrco;
    }

    /**
     * Get the groupe crc.
     *
     * @return string|null Returns the groupe crc.
     */
    public function getGroupeCrc(): ?string {
        return $this->groupeCrc;
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
     * Get the intit sous total agff agirc.
     *
     * @return string|null Returns the intit sous total agff agirc.
     */
    public function getIntitSousTotalAgffAgirc(): ?string {
        return $this->intitSousTotalAgffAgirc;
    }

    /**
     * Get the intit sous total agff arrco.
     *
     * @return string|null Returns the intit sous total agff arrco.
     */
    public function getIntitSousTotalAgffArrco(): ?string {
        return $this->intitSousTotalAgffArrco;
    }

    /**
     * Get the intit sous total apec.
     *
     * @return string|null Returns the intit sous total apec.
     */
    public function getIntitSousTotalApec(): ?string {
        return $this->intitSousTotalApec;
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
     * Get the lien fic param dsn.
     *
     * @return string|null Returns the lien fic param dsn.
     */
    public function getLienFicParamDsn(): ?string {
        return $this->lienFicParamDsn;
    }

    /**
     * Get the regroupement si.
     *
     * @return bool|null Returns the regroupement si.
     */
    public function getRegroupementSi(): ?bool {
        return $this->regroupementSi;
    }

    /**
     * Get the sous total agff.
     *
     * @return bool|null Returns the sous total agff.
     */
    public function getSousTotalAgff(): ?bool {
        return $this->sousTotalAgff;
    }

    /**
     * Get the sous total apec.
     *
     * @return bool|null Returns the sous total apec.
     */
    public function getSousTotalApec(): ?bool {
        return $this->sousTotalApec;
    }

    /**
     * Get the sous total caisse.
     *
     * @return bool|null Returns the sous total caisse.
     */
    public function getSousTotalCaisse(): ?bool {
        return $this->sousTotalCaisse;
    }

    /**
     * Get the traitement dadsu.
     *
     * @return bool|null Returns the traitement dadsu.
     */
    public function getTraitementDadsu(): ?bool {
        return $this->traitementDadsu;
    }

    /**
     * Get the type declaration.
     *
     * @return string|null Returns the type declaration.
     */
    public function getTypeDeclaration(): ?string {
        return $this->typeDeclaration;
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
     * Get the utilise.
     *
     * @return bool|null Returns the utilise.
     */
    public function getUtilise(): ?bool {
        return $this->utilise;
    }

    /**
     * Set the a declarer dsn neant.
     *
     * @param bool|null $aDeclarerDsnNeant The a declarer dsn neant.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setADeclarerDsnNeant(?bool $aDeclarerDsnNeant): OrgaGeneriques {
        $this->aDeclarerDsnNeant = $aDeclarerDsnNeant;
        return $this;
    }

    /**
     * Set the agrement ministeriel.
     *
     * @param string|null $agrementMinisteriel The agrement ministeriel.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setAgrementMinisteriel(?string $agrementMinisteriel): OrgaGeneriques {
        $this->agrementMinisteriel = $agrementMinisteriel;
        return $this;
    }

    /**
     * Set the appliquer cpn220.
     *
     * @param bool|null $appliquerCpn220 The appliquer cpn220.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setAppliquerCpn220(?bool $appliquerCpn220): OrgaGeneriques {
        $this->appliquerCpn220 = $appliquerCpn220;
        return $this;
    }

    /**
     * Set the arrondir base.
     *
     * @param string|null $arrondirBase The arrondir base.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setArrondirBase(?string $arrondirBase): OrgaGeneriques {
        $this->arrondirBase = $arrondirBase;
        return $this;
    }

    /**
     * Set the arrondir cotis.
     *
     * @param string|null $arrondirCotis The arrondir cotis.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setArrondirCotis(?string $arrondirCotis): OrgaGeneriques {
        $this->arrondirCotis = $arrondirCotis;
        return $this;
    }

    /**
     * Set the assiette specif agff.
     *
     * @param bool|null $assietteSpecifAgff The assiette specif agff.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setAssietteSpecifAgff(?bool $assietteSpecifAgff): OrgaGeneriques {
        $this->assietteSpecifAgff = $assietteSpecifAgff;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setCode(?string $code): OrgaGeneriques {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code assiette sit2.
     *
     * @param string|null $codeAssietteSit2 The code assiette sit2.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setCodeAssietteSit2(?string $codeAssietteSit2): OrgaGeneriques {
        $this->codeAssietteSit2 = $codeAssietteSit2;
        return $this;
    }

    /**
     * Set the code assiette sit2 agff.
     *
     * @param string|null $codeAssietteSit2Agff The code assiette sit2 agff.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setCodeAssietteSit2Agff(?string $codeAssietteSit2Agff): OrgaGeneriques {
        $this->codeAssietteSit2Agff = $codeAssietteSit2Agff;
        return $this;
    }

    /**
     * Set the code assiette sitb.
     *
     * @param string|null $codeAssietteSitb The code assiette sitb.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setCodeAssietteSitb(?string $codeAssietteSitb): OrgaGeneriques {
        $this->codeAssietteSitb = $codeAssietteSitb;
        return $this;
    }

    /**
     * Set the code assiette sitbagff.
     *
     * @param string|null $codeAssietteSitbagff The code assiette sitbagff.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setCodeAssietteSitbagff(?string $codeAssietteSitbagff): OrgaGeneriques {
        $this->codeAssietteSitbagff = $codeAssietteSitbagff;
        return $this;
    }

    /**
     * Set the code assiette sitc.
     *
     * @param string|null $codeAssietteSitc The code assiette sitc.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setCodeAssietteSitc(?string $codeAssietteSitc): OrgaGeneriques {
        $this->codeAssietteSitc = $codeAssietteSitc;
        return $this;
    }

    /**
     * Set the code caisse msa.
     *
     * @param string|null $codeCaisseMsa The code caisse msa.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setCodeCaisseMsa(?string $codeCaisseMsa): OrgaGeneriques {
        $this->codeCaisseMsa = $codeCaisseMsa;
        return $this;
    }

    /**
     * Set the code organisme assurance dadsu.
     *
     * @param string|null $codeOrganismeAssuranceDadsu The code organisme assurance dadsu.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setCodeOrganismeAssuranceDadsu(?string $codeOrganismeAssuranceDadsu): OrgaGeneriques {
        $this->codeOrganismeAssuranceDadsu = $codeOrganismeAssuranceDadsu;
        return $this;
    }

    /**
     * Set the code organisme mutuelle dadsu.
     *
     * @param string|null $codeOrganismeMutuelleDadsu The code organisme mutuelle dadsu.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setCodeOrganismeMutuelleDadsu(?string $codeOrganismeMutuelleDadsu): OrgaGeneriques {
        $this->codeOrganismeMutuelleDadsu = $codeOrganismeMutuelleDadsu;
        return $this;
    }

    /**
     * Set the detail arrco.
     *
     * @param bool|null $detailArrco The detail arrco.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setDetailArrco(?bool $detailArrco): OrgaGeneriques {
        $this->detailArrco = $detailArrco;
        return $this;
    }

    /**
     * Set the groupe crc.
     *
     * @param string|null $groupeCrc The groupe crc.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setGroupeCrc(?string $groupeCrc): OrgaGeneriques {
        $this->groupeCrc = $groupeCrc;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string|null $idInstitution The id institution.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setIdInstitution(?string $idInstitution): OrgaGeneriques {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the intit sous total agff agirc.
     *
     * @param string|null $intitSousTotalAgffAgirc The intit sous total agff agirc.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setIntitSousTotalAgffAgirc(?string $intitSousTotalAgffAgirc): OrgaGeneriques {
        $this->intitSousTotalAgffAgirc = $intitSousTotalAgffAgirc;
        return $this;
    }

    /**
     * Set the intit sous total agff arrco.
     *
     * @param string|null $intitSousTotalAgffArrco The intit sous total agff arrco.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setIntitSousTotalAgffArrco(?string $intitSousTotalAgffArrco): OrgaGeneriques {
        $this->intitSousTotalAgffArrco = $intitSousTotalAgffArrco;
        return $this;
    }

    /**
     * Set the intit sous total apec.
     *
     * @param string|null $intitSousTotalApec The intit sous total apec.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setIntitSousTotalApec(?string $intitSousTotalApec): OrgaGeneriques {
        $this->intitSousTotalApec = $intitSousTotalApec;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setIntitule(?string $intitule): OrgaGeneriques {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the lien fic param dsn.
     *
     * @param string|null $lienFicParamDsn The lien fic param dsn.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setLienFicParamDsn(?string $lienFicParamDsn): OrgaGeneriques {
        $this->lienFicParamDsn = $lienFicParamDsn;
        return $this;
    }

    /**
     * Set the regroupement si.
     *
     * @param bool|null $regroupementSi The regroupement si.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setRegroupementSi(?bool $regroupementSi): OrgaGeneriques {
        $this->regroupementSi = $regroupementSi;
        return $this;
    }

    /**
     * Set the sous total agff.
     *
     * @param bool|null $sousTotalAgff The sous total agff.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setSousTotalAgff(?bool $sousTotalAgff): OrgaGeneriques {
        $this->sousTotalAgff = $sousTotalAgff;
        return $this;
    }

    /**
     * Set the sous total apec.
     *
     * @param bool|null $sousTotalApec The sous total apec.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setSousTotalApec(?bool $sousTotalApec): OrgaGeneriques {
        $this->sousTotalApec = $sousTotalApec;
        return $this;
    }

    /**
     * Set the sous total caisse.
     *
     * @param bool|null $sousTotalCaisse The sous total caisse.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setSousTotalCaisse(?bool $sousTotalCaisse): OrgaGeneriques {
        $this->sousTotalCaisse = $sousTotalCaisse;
        return $this;
    }

    /**
     * Set the traitement dadsu.
     *
     * @param bool|null $traitementDadsu The traitement dadsu.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setTraitementDadsu(?bool $traitementDadsu): OrgaGeneriques {
        $this->traitementDadsu = $traitementDadsu;
        return $this;
    }

    /**
     * Set the type declaration.
     *
     * @param string|null $typeDeclaration The type declaration.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setTypeDeclaration(?string $typeDeclaration): OrgaGeneriques {
        $this->typeDeclaration = $typeDeclaration;
        return $this;
    }

    /**
     * Set the type organisme.
     *
     * @param string|null $typeOrganisme The type organisme.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setTypeOrganisme(?string $typeOrganisme): OrgaGeneriques {
        $this->typeOrganisme = $typeOrganisme;
        return $this;
    }

    /**
     * Set the utilise.
     *
     * @param bool|null $utilise The utilise.
     * @return OrgaGeneriques Returns this Orga generiques.
     */
    public function setUtilise(?bool $utilise): OrgaGeneriques {
        $this->utilise = $utilise;
        return $this;
    }
}
