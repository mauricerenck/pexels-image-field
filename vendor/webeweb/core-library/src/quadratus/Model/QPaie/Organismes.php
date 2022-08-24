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
 * Organismes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Organismes {

    /**
     * Centre payeur.
     *
     * @var string|null
     */
    private $centrePayeur;

    /**
     * Code cat cadre.
     *
     * @var string|null
     */
    private $codeCatCadre;

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
     * Code non cadre.
     *
     * @var string|null
     */
    private $codeNonCadre;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Compte charge.
     *
     * @var string|null
     */
    private $compteCharge;

    /**
     * Compte tiers.
     *
     * @var string|null
     */
    private $compteTiers;

    /**
     * Cot assedic par urssaf.
     *
     * @var bool|null
     */
    private $cotAssedicParUrssaf;

    /**
     * Cotitel.
     *
     * @var bool|null
     */
    private $cotitel;

    /**
     * Doss cadre.
     *
     * @var string|null
     */
    private $dossCadre;

    /**
     * Doss non cadre.
     *
     * @var string|null
     */
    private $dossNonCadre;

    /**
     * Edition ducs.
     *
     * @var bool|null
     */
    private $editionDucs;

    /**
     * Gestion paie decalee oc.
     *
     * @var bool|null
     */
    private $gestionPaieDecaleeOc;

    /**
     * Groupe interne.
     *
     * @var string|null
     */
    private $groupeInterne;

    /**
     * Id intervenant.
     *
     * @var string|null
     */
    private $idIntervenant;

    /**
     * Jour exigible.
     *
     * @var string|null
     */
    private $jourExigible;

    /**
     * Jour limite depot.
     *
     * @var string|null
     */
    private $jourLimiteDepot;

    /**
     * Jour reglement.
     *
     * @var string|null
     */
    private $jourReglement;

    /**
     * Mens trim.
     *
     * @var string|null
     */
    private $mensTrim;

    /**
     * No affiliation.
     *
     * @var string|null
     */
    private $noAffiliation;

    /**
     * Optique ducs.
     *
     * @var string|null
     */
    private $optiqueDucs;

    /**
     * Paiement edi vlu.
     *
     * @var bool|null
     */
    private $paiementEdiVlu;

    /**
     * Pas traiter edi.
     *
     * @var bool|null
     */
    private $pasTraiterEdi;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Telepaiement.
     *
     * @var bool|null
     */
    private $telepaiement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the centre payeur.
     *
     * @return string|null Returns the centre payeur.
     */
    public function getCentrePayeur(): ?string {
        return $this->centrePayeur;
    }

    /**
     * Get the code cat cadre.
     *
     * @return string|null Returns the code cat cadre.
     */
    public function getCodeCatCadre(): ?string {
        return $this->codeCatCadre;
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
     * Get the code non cadre.
     *
     * @return string|null Returns the code non cadre.
     */
    public function getCodeNonCadre(): ?string {
        return $this->codeNonCadre;
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
     * Get the compte charge.
     *
     * @return string|null Returns the compte charge.
     */
    public function getCompteCharge(): ?string {
        return $this->compteCharge;
    }

    /**
     * Get the compte tiers.
     *
     * @return string|null Returns the compte tiers.
     */
    public function getCompteTiers(): ?string {
        return $this->compteTiers;
    }

    /**
     * Get the cot assedic par urssaf.
     *
     * @return bool|null Returns the cot assedic par urssaf.
     */
    public function getCotAssedicParUrssaf(): ?bool {
        return $this->cotAssedicParUrssaf;
    }

    /**
     * Get the cotitel.
     *
     * @return bool|null Returns the cotitel.
     */
    public function getCotitel(): ?bool {
        return $this->cotitel;
    }

    /**
     * Get the doss cadre.
     *
     * @return string|null Returns the doss cadre.
     */
    public function getDossCadre(): ?string {
        return $this->dossCadre;
    }

    /**
     * Get the doss non cadre.
     *
     * @return string|null Returns the doss non cadre.
     */
    public function getDossNonCadre(): ?string {
        return $this->dossNonCadre;
    }

    /**
     * Get the edition ducs.
     *
     * @return bool|null Returns the edition ducs.
     */
    public function getEditionDucs(): ?bool {
        return $this->editionDucs;
    }

    /**
     * Get the gestion paie decalee oc.
     *
     * @return bool|null Returns the gestion paie decalee oc.
     */
    public function getGestionPaieDecaleeOc(): ?bool {
        return $this->gestionPaieDecaleeOc;
    }

    /**
     * Get the groupe interne.
     *
     * @return string|null Returns the groupe interne.
     */
    public function getGroupeInterne(): ?string {
        return $this->groupeInterne;
    }

    /**
     * Get the id intervenant.
     *
     * @return string|null Returns the id intervenant.
     */
    public function getIdIntervenant(): ?string {
        return $this->idIntervenant;
    }

    /**
     * Get the jour exigible.
     *
     * @return string|null Returns the jour exigible.
     */
    public function getJourExigible(): ?string {
        return $this->jourExigible;
    }

    /**
     * Get the jour limite depot.
     *
     * @return string|null Returns the jour limite depot.
     */
    public function getJourLimiteDepot(): ?string {
        return $this->jourLimiteDepot;
    }

    /**
     * Get the jour reglement.
     *
     * @return string|null Returns the jour reglement.
     */
    public function getJourReglement(): ?string {
        return $this->jourReglement;
    }

    /**
     * Get the mens trim.
     *
     * @return string|null Returns the mens trim.
     */
    public function getMensTrim(): ?string {
        return $this->mensTrim;
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
     * Get the optique ducs.
     *
     * @return string|null Returns the optique ducs.
     */
    public function getOptiqueDucs(): ?string {
        return $this->optiqueDucs;
    }

    /**
     * Get the paiement edi vlu.
     *
     * @return bool|null Returns the paiement edi vlu.
     */
    public function getPaiementEdiVlu(): ?bool {
        return $this->paiementEdiVlu;
    }

    /**
     * Get the pas traiter edi.
     *
     * @return bool|null Returns the pas traiter edi.
     */
    public function getPasTraiterEdi(): ?bool {
        return $this->pasTraiterEdi;
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
     * Get the telepaiement.
     *
     * @return bool|null Returns the telepaiement.
     */
    public function getTelepaiement(): ?bool {
        return $this->telepaiement;
    }

    /**
     * Set the centre payeur.
     *
     * @param string|null $centrePayeur The centre payeur.
     * @return Organismes Returns this Organismes.
     */
    public function setCentrePayeur(?string $centrePayeur): Organismes {
        $this->centrePayeur = $centrePayeur;
        return $this;
    }

    /**
     * Set the code cat cadre.
     *
     * @param string|null $codeCatCadre The code cat cadre.
     * @return Organismes Returns this Organismes.
     */
    public function setCodeCatCadre(?string $codeCatCadre): Organismes {
        $this->codeCatCadre = $codeCatCadre;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return Organismes Returns this Organismes.
     */
    public function setCodeCentre(?string $codeCentre): Organismes {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return Organismes Returns this Organismes.
     */
    public function setCodeEtablissement(?int $codeEtablissement): Organismes {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code non cadre.
     *
     * @param string|null $codeNonCadre The code non cadre.
     * @return Organismes Returns this Organismes.
     */
    public function setCodeNonCadre(?string $codeNonCadre): Organismes {
        $this->codeNonCadre = $codeNonCadre;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return Organismes Returns this Organismes.
     */
    public function setCodeOrganisme(?string $codeOrganisme): Organismes {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the compte charge.
     *
     * @param string|null $compteCharge The compte charge.
     * @return Organismes Returns this Organismes.
     */
    public function setCompteCharge(?string $compteCharge): Organismes {
        $this->compteCharge = $compteCharge;
        return $this;
    }

    /**
     * Set the compte tiers.
     *
     * @param string|null $compteTiers The compte tiers.
     * @return Organismes Returns this Organismes.
     */
    public function setCompteTiers(?string $compteTiers): Organismes {
        $this->compteTiers = $compteTiers;
        return $this;
    }

    /**
     * Set the cot assedic par urssaf.
     *
     * @param bool|null $cotAssedicParUrssaf The cot assedic par urssaf.
     * @return Organismes Returns this Organismes.
     */
    public function setCotAssedicParUrssaf(?bool $cotAssedicParUrssaf): Organismes {
        $this->cotAssedicParUrssaf = $cotAssedicParUrssaf;
        return $this;
    }

    /**
     * Set the cotitel.
     *
     * @param bool|null $cotitel The cotitel.
     * @return Organismes Returns this Organismes.
     */
    public function setCotitel(?bool $cotitel): Organismes {
        $this->cotitel = $cotitel;
        return $this;
    }

    /**
     * Set the doss cadre.
     *
     * @param string|null $dossCadre The doss cadre.
     * @return Organismes Returns this Organismes.
     */
    public function setDossCadre(?string $dossCadre): Organismes {
        $this->dossCadre = $dossCadre;
        return $this;
    }

    /**
     * Set the doss non cadre.
     *
     * @param string|null $dossNonCadre The doss non cadre.
     * @return Organismes Returns this Organismes.
     */
    public function setDossNonCadre(?string $dossNonCadre): Organismes {
        $this->dossNonCadre = $dossNonCadre;
        return $this;
    }

    /**
     * Set the edition ducs.
     *
     * @param bool|null $editionDucs The edition ducs.
     * @return Organismes Returns this Organismes.
     */
    public function setEditionDucs(?bool $editionDucs): Organismes {
        $this->editionDucs = $editionDucs;
        return $this;
    }

    /**
     * Set the gestion paie decalee oc.
     *
     * @param bool|null $gestionPaieDecaleeOc The gestion paie decalee oc.
     * @return Organismes Returns this Organismes.
     */
    public function setGestionPaieDecaleeOc(?bool $gestionPaieDecaleeOc): Organismes {
        $this->gestionPaieDecaleeOc = $gestionPaieDecaleeOc;
        return $this;
    }

    /**
     * Set the groupe interne.
     *
     * @param string|null $groupeInterne The groupe interne.
     * @return Organismes Returns this Organismes.
     */
    public function setGroupeInterne(?string $groupeInterne): Organismes {
        $this->groupeInterne = $groupeInterne;
        return $this;
    }

    /**
     * Set the id intervenant.
     *
     * @param string|null $idIntervenant The id intervenant.
     * @return Organismes Returns this Organismes.
     */
    public function setIdIntervenant(?string $idIntervenant): Organismes {
        $this->idIntervenant = $idIntervenant;
        return $this;
    }

    /**
     * Set the jour exigible.
     *
     * @param string|null $jourExigible The jour exigible.
     * @return Organismes Returns this Organismes.
     */
    public function setJourExigible(?string $jourExigible): Organismes {
        $this->jourExigible = $jourExigible;
        return $this;
    }

    /**
     * Set the jour limite depot.
     *
     * @param string|null $jourLimiteDepot The jour limite depot.
     * @return Organismes Returns this Organismes.
     */
    public function setJourLimiteDepot(?string $jourLimiteDepot): Organismes {
        $this->jourLimiteDepot = $jourLimiteDepot;
        return $this;
    }

    /**
     * Set the jour reglement.
     *
     * @param string|null $jourReglement The jour reglement.
     * @return Organismes Returns this Organismes.
     */
    public function setJourReglement(?string $jourReglement): Organismes {
        $this->jourReglement = $jourReglement;
        return $this;
    }

    /**
     * Set the mens trim.
     *
     * @param string|null $mensTrim The mens trim.
     * @return Organismes Returns this Organismes.
     */
    public function setMensTrim(?string $mensTrim): Organismes {
        $this->mensTrim = $mensTrim;
        return $this;
    }

    /**
     * Set the no affiliation.
     *
     * @param string|null $noAffiliation The no affiliation.
     * @return Organismes Returns this Organismes.
     */
    public function setNoAffiliation(?string $noAffiliation): Organismes {
        $this->noAffiliation = $noAffiliation;
        return $this;
    }

    /**
     * Set the optique ducs.
     *
     * @param string|null $optiqueDucs The optique ducs.
     * @return Organismes Returns this Organismes.
     */
    public function setOptiqueDucs(?string $optiqueDucs): Organismes {
        $this->optiqueDucs = $optiqueDucs;
        return $this;
    }

    /**
     * Set the paiement edi vlu.
     *
     * @param bool|null $paiementEdiVlu The paiement edi vlu.
     * @return Organismes Returns this Organismes.
     */
    public function setPaiementEdiVlu(?bool $paiementEdiVlu): Organismes {
        $this->paiementEdiVlu = $paiementEdiVlu;
        return $this;
    }

    /**
     * Set the pas traiter edi.
     *
     * @param bool|null $pasTraiterEdi The pas traiter edi.
     * @return Organismes Returns this Organismes.
     */
    public function setPasTraiterEdi(?bool $pasTraiterEdi): Organismes {
        $this->pasTraiterEdi = $pasTraiterEdi;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Organismes Returns this Organismes.
     */
    public function setRib(?string $rib): Organismes {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the telepaiement.
     *
     * @param bool|null $telepaiement The telepaiement.
     * @return Organismes Returns this Organismes.
     */
    public function setTelepaiement(?bool $telepaiement): Organismes {
        $this->telepaiement = $telepaiement;
        return $this;
    }
}
