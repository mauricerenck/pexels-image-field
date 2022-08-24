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
 * Recap lignes msa.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RecapLignesMsa {

    /**
     * Adresse msa.
     *
     * @var string|null
     */
    private $adresseMsa;

    /**
     * C collect.
     *
     * @var string|null
     */
    private $cCollect;

    /**
     * Code activite.
     *
     * @var string|null
     */
    private $codeActivite;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code unite.
     *
     * @var string|null
     */
    private $codeUnite;

    /**
     * Date reglement.
     *
     * @var DateTime|null
     */
    private $dateReglement;

    /**
     * Effectif cice.
     *
     * @var int|null
     */
    private $effectifCice;

    /**
     * Fait a.
     *
     * @var string|null
     */
    private $faitA;

    /**
     * Fait le.
     *
     * @var DateTime|null
     */
    private $faitLe;

    /**
     * Fin per.
     *
     * @var DateTime|null
     */
    private $finPer;

    /**
     * Intitule code unite.
     *
     * @var string|null
     */
    private $intituleCodeUnite;

    /**
     * Liste services.
     *
     * @var string|null
     */
    private $listeServices;

    /**
     * Mt csg.
     *
     * @var int|null
     */
    private $mtCsg;

    /**
     * Mt csgrdsrr imp.
     *
     * @var int|null
     */
    private $mtCsgrdsrrImp;

    /**
     * Mt csgrdsrr non imp.
     *
     * @var int|null
     */
    private $mtCsgrdsrrNonImp;

    /**
     * Mt elem calcul57.
     *
     * @var int|null
     */
    private $mtElemCalcul57;

    /**
     * Mt elem calcul58.
     *
     * @var int|null
     */
    private $mtElemCalcul58;

    /**
     * Mt elem calcul59.
     *
     * @var int|null
     */
    private $mtElemCalcul59;

    /**
     * Mt elem calcul60.
     *
     * @var int|null
     */
    private $mtElemCalcul60;

    /**
     * Mt elem calcul61.
     *
     * @var int|null
     */
    private $mtElemCalcul61;

    /**
     * Mt elem calcul62.
     *
     * @var int|null
     */
    private $mtElemCalcul62;

    /**
     * Mt elem calcul63.
     *
     * @var int|null
     */
    private $mtElemCalcul63;

    /**
     * Mt elem calcul65.
     *
     * @var int|null
     */
    private $mtElemCalcul65;

    /**
     * Mt elem calcul66.
     *
     * @var int|null
     */
    private $mtElemCalcul66;

    /**
     * Mt elem calcul67.
     *
     * @var int|null
     */
    private $mtElemCalcul67;

    /**
     * Mt elem calcul68.
     *
     * @var int|null
     */
    private $mtElemCalcul68;

    /**
     * Mt elem calcul69.
     *
     * @var int|null
     */
    private $mtElemCalcul69;

    /**
     * Mt elem calcul70.
     *
     * @var int|null
     */
    private $mtElemCalcul70;

    /**
     * Mt elem calcul71.
     *
     * @var int|null
     */
    private $mtElemCalcul71;

    /**
     * Mt elem calcul72.
     *
     * @var int|null
     */
    private $mtElemCalcul72;

    /**
     * Mt elem calcul73.
     *
     * @var int|null
     */
    private $mtElemCalcul73;

    /**
     * Mt elem calcul74.
     *
     * @var int|null
     */
    private $mtElemCalcul74;

    /**
     * Mt elem calcul75.
     *
     * @var int|null
     */
    private $mtElemCalcul75;

    /**
     * Mt elem calcul76.
     *
     * @var int|null
     */
    private $mtElemCalcul76;

    /**
     * Mt elem calcul77.
     *
     * @var int|null
     */
    private $mtElemCalcul77;

    /**
     * Mt elem calcul78.
     *
     * @var int|null
     */
    private $mtElemCalcul78;

    /**
     * Mt elem calcul79.
     *
     * @var int|null
     */
    private $mtElemCalcul79;

    /**
     * Mt elem calcul97.
     *
     * @var int|null
     */
    private $mtElemCalcul97;

    /**
     * Mt elem calcul98.
     *
     * @var int|null
     */
    private $mtElemCalcul98;

    /**
     * Mt tcp.
     *
     * @var int|null
     */
    private $mtTcp;

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
     * Periode decla.
     *
     * @var DateTime|null
     */
    private $periodeDecla;

    /**
     * Personne contact.
     *
     * @var string|null
     */
    private $personneContact;

    /**
     * Prem mois.
     *
     * @var DateTime|null
     */
    private $premMois;

    /**
     * Salaries de.
     *
     * @var string|null
     */
    private $salariesDe;

    /**
     * Selection service.
     *
     * @var string|null
     */
    private $selectionService;

    /**
     * Siren.
     *
     * @var string|null
     */
    private $siren;

    /**
     * Siret.
     *
     * @var string|null
     */
    private $siret;

    /**
     * Suivi par.
     *
     * @var string|null
     */
    private $suiviPar;

    /**
     * Tel personne.
     *
     * @var string|null
     */
    private $telPersonne;

    /**
     * Tri decl msa.
     *
     * @var string|null
     */
    private $triDeclMsa;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adresse msa.
     *
     * @return string|null Returns the adresse msa.
     */
    public function getAdresseMsa(): ?string {
        return $this->adresseMsa;
    }

    /**
     * Get the c collect.
     *
     * @return string|null Returns the c collect.
     */
    public function getCCollect(): ?string {
        return $this->cCollect;
    }

    /**
     * Get the code activite.
     *
     * @return string|null Returns the code activite.
     */
    public function getCodeActivite(): ?string {
        return $this->codeActivite;
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
     * Get the code unite.
     *
     * @return string|null Returns the code unite.
     */
    public function getCodeUnite(): ?string {
        return $this->codeUnite;
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
     * Get the effectif cice.
     *
     * @return int|null Returns the effectif cice.
     */
    public function getEffectifCice(): ?int {
        return $this->effectifCice;
    }

    /**
     * Get the fait a.
     *
     * @return string|null Returns the fait a.
     */
    public function getFaitA(): ?string {
        return $this->faitA;
    }

    /**
     * Get the fait le.
     *
     * @return DateTime|null Returns the fait le.
     */
    public function getFaitLe(): ?DateTime {
        return $this->faitLe;
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
     * Get the intitule code unite.
     *
     * @return string|null Returns the intitule code unite.
     */
    public function getIntituleCodeUnite(): ?string {
        return $this->intituleCodeUnite;
    }

    /**
     * Get the liste services.
     *
     * @return string|null Returns the liste services.
     */
    public function getListeServices(): ?string {
        return $this->listeServices;
    }

    /**
     * Get the mt csg.
     *
     * @return int|null Returns the mt csg.
     */
    public function getMtCsg(): ?int {
        return $this->mtCsg;
    }

    /**
     * Get the mt csgrdsrr imp.
     *
     * @return int|null Returns the mt csgrdsrr imp.
     */
    public function getMtCsgrdsrrImp(): ?int {
        return $this->mtCsgrdsrrImp;
    }

    /**
     * Get the mt csgrdsrr non imp.
     *
     * @return int|null Returns the mt csgrdsrr non imp.
     */
    public function getMtCsgrdsrrNonImp(): ?int {
        return $this->mtCsgrdsrrNonImp;
    }

    /**
     * Get the mt elem calcul57.
     *
     * @return int|null Returns the mt elem calcul57.
     */
    public function getMtElemCalcul57(): ?int {
        return $this->mtElemCalcul57;
    }

    /**
     * Get the mt elem calcul58.
     *
     * @return int|null Returns the mt elem calcul58.
     */
    public function getMtElemCalcul58(): ?int {
        return $this->mtElemCalcul58;
    }

    /**
     * Get the mt elem calcul59.
     *
     * @return int|null Returns the mt elem calcul59.
     */
    public function getMtElemCalcul59(): ?int {
        return $this->mtElemCalcul59;
    }

    /**
     * Get the mt elem calcul60.
     *
     * @return int|null Returns the mt elem calcul60.
     */
    public function getMtElemCalcul60(): ?int {
        return $this->mtElemCalcul60;
    }

    /**
     * Get the mt elem calcul61.
     *
     * @return int|null Returns the mt elem calcul61.
     */
    public function getMtElemCalcul61(): ?int {
        return $this->mtElemCalcul61;
    }

    /**
     * Get the mt elem calcul62.
     *
     * @return int|null Returns the mt elem calcul62.
     */
    public function getMtElemCalcul62(): ?int {
        return $this->mtElemCalcul62;
    }

    /**
     * Get the mt elem calcul63.
     *
     * @return int|null Returns the mt elem calcul63.
     */
    public function getMtElemCalcul63(): ?int {
        return $this->mtElemCalcul63;
    }

    /**
     * Get the mt elem calcul65.
     *
     * @return int|null Returns the mt elem calcul65.
     */
    public function getMtElemCalcul65(): ?int {
        return $this->mtElemCalcul65;
    }

    /**
     * Get the mt elem calcul66.
     *
     * @return int|null Returns the mt elem calcul66.
     */
    public function getMtElemCalcul66(): ?int {
        return $this->mtElemCalcul66;
    }

    /**
     * Get the mt elem calcul67.
     *
     * @return int|null Returns the mt elem calcul67.
     */
    public function getMtElemCalcul67(): ?int {
        return $this->mtElemCalcul67;
    }

    /**
     * Get the mt elem calcul68.
     *
     * @return int|null Returns the mt elem calcul68.
     */
    public function getMtElemCalcul68(): ?int {
        return $this->mtElemCalcul68;
    }

    /**
     * Get the mt elem calcul69.
     *
     * @return int|null Returns the mt elem calcul69.
     */
    public function getMtElemCalcul69(): ?int {
        return $this->mtElemCalcul69;
    }

    /**
     * Get the mt elem calcul70.
     *
     * @return int|null Returns the mt elem calcul70.
     */
    public function getMtElemCalcul70(): ?int {
        return $this->mtElemCalcul70;
    }

    /**
     * Get the mt elem calcul71.
     *
     * @return int|null Returns the mt elem calcul71.
     */
    public function getMtElemCalcul71(): ?int {
        return $this->mtElemCalcul71;
    }

    /**
     * Get the mt elem calcul72.
     *
     * @return int|null Returns the mt elem calcul72.
     */
    public function getMtElemCalcul72(): ?int {
        return $this->mtElemCalcul72;
    }

    /**
     * Get the mt elem calcul73.
     *
     * @return int|null Returns the mt elem calcul73.
     */
    public function getMtElemCalcul73(): ?int {
        return $this->mtElemCalcul73;
    }

    /**
     * Get the mt elem calcul74.
     *
     * @return int|null Returns the mt elem calcul74.
     */
    public function getMtElemCalcul74(): ?int {
        return $this->mtElemCalcul74;
    }

    /**
     * Get the mt elem calcul75.
     *
     * @return int|null Returns the mt elem calcul75.
     */
    public function getMtElemCalcul75(): ?int {
        return $this->mtElemCalcul75;
    }

    /**
     * Get the mt elem calcul76.
     *
     * @return int|null Returns the mt elem calcul76.
     */
    public function getMtElemCalcul76(): ?int {
        return $this->mtElemCalcul76;
    }

    /**
     * Get the mt elem calcul77.
     *
     * @return int|null Returns the mt elem calcul77.
     */
    public function getMtElemCalcul77(): ?int {
        return $this->mtElemCalcul77;
    }

    /**
     * Get the mt elem calcul78.
     *
     * @return int|null Returns the mt elem calcul78.
     */
    public function getMtElemCalcul78(): ?int {
        return $this->mtElemCalcul78;
    }

    /**
     * Get the mt elem calcul79.
     *
     * @return int|null Returns the mt elem calcul79.
     */
    public function getMtElemCalcul79(): ?int {
        return $this->mtElemCalcul79;
    }

    /**
     * Get the mt elem calcul97.
     *
     * @return int|null Returns the mt elem calcul97.
     */
    public function getMtElemCalcul97(): ?int {
        return $this->mtElemCalcul97;
    }

    /**
     * Get the mt elem calcul98.
     *
     * @return int|null Returns the mt elem calcul98.
     */
    public function getMtElemCalcul98(): ?int {
        return $this->mtElemCalcul98;
    }

    /**
     * Get the mt tcp.
     *
     * @return int|null Returns the mt tcp.
     */
    public function getMtTcp(): ?int {
        return $this->mtTcp;
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
     * Get the periode decla.
     *
     * @return DateTime|null Returns the periode decla.
     */
    public function getPeriodeDecla(): ?DateTime {
        return $this->periodeDecla;
    }

    /**
     * Get the personne contact.
     *
     * @return string|null Returns the personne contact.
     */
    public function getPersonneContact(): ?string {
        return $this->personneContact;
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
     * Get the salaries de.
     *
     * @return string|null Returns the salaries de.
     */
    public function getSalariesDe(): ?string {
        return $this->salariesDe;
    }

    /**
     * Get the selection service.
     *
     * @return string|null Returns the selection service.
     */
    public function getSelectionService(): ?string {
        return $this->selectionService;
    }

    /**
     * Get the siren.
     *
     * @return string|null Returns the siren.
     */
    public function getSiren(): ?string {
        return $this->siren;
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
     * Get the suivi par.
     *
     * @return string|null Returns the suivi par.
     */
    public function getSuiviPar(): ?string {
        return $this->suiviPar;
    }

    /**
     * Get the tel personne.
     *
     * @return string|null Returns the tel personne.
     */
    public function getTelPersonne(): ?string {
        return $this->telPersonne;
    }

    /**
     * Get the tri decl msa.
     *
     * @return string|null Returns the tri decl msa.
     */
    public function getTriDeclMsa(): ?string {
        return $this->triDeclMsa;
    }

    /**
     * Set the adresse msa.
     *
     * @param string|null $adresseMsa The adresse msa.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setAdresseMsa(?string $adresseMsa): RecapLignesMsa {
        $this->adresseMsa = $adresseMsa;
        return $this;
    }

    /**
     * Set the c collect.
     *
     * @param string|null $cCollect The c collect.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setCCollect(?string $cCollect): RecapLignesMsa {
        $this->cCollect = $cCollect;
        return $this;
    }

    /**
     * Set the code activite.
     *
     * @param string|null $codeActivite The code activite.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setCodeActivite(?string $codeActivite): RecapLignesMsa {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setCodeEtablissement(?int $codeEtablissement): RecapLignesMsa {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string|null $codeUnite The code unite.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setCodeUnite(?string $codeUnite): RecapLignesMsa {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the date reglement.
     *
     * @param DateTime|null $dateReglement The date reglement.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setDateReglement(?DateTime $dateReglement): RecapLignesMsa {
        $this->dateReglement = $dateReglement;
        return $this;
    }

    /**
     * Set the effectif cice.
     *
     * @param int|null $effectifCice The effectif cice.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setEffectifCice(?int $effectifCice): RecapLignesMsa {
        $this->effectifCice = $effectifCice;
        return $this;
    }

    /**
     * Set the fait a.
     *
     * @param string|null $faitA The fait a.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setFaitA(?string $faitA): RecapLignesMsa {
        $this->faitA = $faitA;
        return $this;
    }

    /**
     * Set the fait le.
     *
     * @param DateTime|null $faitLe The fait le.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setFaitLe(?DateTime $faitLe): RecapLignesMsa {
        $this->faitLe = $faitLe;
        return $this;
    }

    /**
     * Set the fin per.
     *
     * @param DateTime|null $finPer The fin per.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setFinPer(?DateTime $finPer): RecapLignesMsa {
        $this->finPer = $finPer;
        return $this;
    }

    /**
     * Set the intitule code unite.
     *
     * @param string|null $intituleCodeUnite The intitule code unite.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setIntituleCodeUnite(?string $intituleCodeUnite): RecapLignesMsa {
        $this->intituleCodeUnite = $intituleCodeUnite;
        return $this;
    }

    /**
     * Set the liste services.
     *
     * @param string|null $listeServices The liste services.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setListeServices(?string $listeServices): RecapLignesMsa {
        $this->listeServices = $listeServices;
        return $this;
    }

    /**
     * Set the mt csg.
     *
     * @param int|null $mtCsg The mt csg.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtCsg(?int $mtCsg): RecapLignesMsa {
        $this->mtCsg = $mtCsg;
        return $this;
    }

    /**
     * Set the mt csgrdsrr imp.
     *
     * @param int|null $mtCsgrdsrrImp The mt csgrdsrr imp.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtCsgrdsrrImp(?int $mtCsgrdsrrImp): RecapLignesMsa {
        $this->mtCsgrdsrrImp = $mtCsgrdsrrImp;
        return $this;
    }

    /**
     * Set the mt csgrdsrr non imp.
     *
     * @param int|null $mtCsgrdsrrNonImp The mt csgrdsrr non imp.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtCsgrdsrrNonImp(?int $mtCsgrdsrrNonImp): RecapLignesMsa {
        $this->mtCsgrdsrrNonImp = $mtCsgrdsrrNonImp;
        return $this;
    }

    /**
     * Set the mt elem calcul57.
     *
     * @param int|null $mtElemCalcul57 The mt elem calcul57.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul57(?int $mtElemCalcul57): RecapLignesMsa {
        $this->mtElemCalcul57 = $mtElemCalcul57;
        return $this;
    }

    /**
     * Set the mt elem calcul58.
     *
     * @param int|null $mtElemCalcul58 The mt elem calcul58.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul58(?int $mtElemCalcul58): RecapLignesMsa {
        $this->mtElemCalcul58 = $mtElemCalcul58;
        return $this;
    }

    /**
     * Set the mt elem calcul59.
     *
     * @param int|null $mtElemCalcul59 The mt elem calcul59.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul59(?int $mtElemCalcul59): RecapLignesMsa {
        $this->mtElemCalcul59 = $mtElemCalcul59;
        return $this;
    }

    /**
     * Set the mt elem calcul60.
     *
     * @param int|null $mtElemCalcul60 The mt elem calcul60.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul60(?int $mtElemCalcul60): RecapLignesMsa {
        $this->mtElemCalcul60 = $mtElemCalcul60;
        return $this;
    }

    /**
     * Set the mt elem calcul61.
     *
     * @param int|null $mtElemCalcul61 The mt elem calcul61.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul61(?int $mtElemCalcul61): RecapLignesMsa {
        $this->mtElemCalcul61 = $mtElemCalcul61;
        return $this;
    }

    /**
     * Set the mt elem calcul62.
     *
     * @param int|null $mtElemCalcul62 The mt elem calcul62.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul62(?int $mtElemCalcul62): RecapLignesMsa {
        $this->mtElemCalcul62 = $mtElemCalcul62;
        return $this;
    }

    /**
     * Set the mt elem calcul63.
     *
     * @param int|null $mtElemCalcul63 The mt elem calcul63.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul63(?int $mtElemCalcul63): RecapLignesMsa {
        $this->mtElemCalcul63 = $mtElemCalcul63;
        return $this;
    }

    /**
     * Set the mt elem calcul65.
     *
     * @param int|null $mtElemCalcul65 The mt elem calcul65.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul65(?int $mtElemCalcul65): RecapLignesMsa {
        $this->mtElemCalcul65 = $mtElemCalcul65;
        return $this;
    }

    /**
     * Set the mt elem calcul66.
     *
     * @param int|null $mtElemCalcul66 The mt elem calcul66.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul66(?int $mtElemCalcul66): RecapLignesMsa {
        $this->mtElemCalcul66 = $mtElemCalcul66;
        return $this;
    }

    /**
     * Set the mt elem calcul67.
     *
     * @param int|null $mtElemCalcul67 The mt elem calcul67.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul67(?int $mtElemCalcul67): RecapLignesMsa {
        $this->mtElemCalcul67 = $mtElemCalcul67;
        return $this;
    }

    /**
     * Set the mt elem calcul68.
     *
     * @param int|null $mtElemCalcul68 The mt elem calcul68.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul68(?int $mtElemCalcul68): RecapLignesMsa {
        $this->mtElemCalcul68 = $mtElemCalcul68;
        return $this;
    }

    /**
     * Set the mt elem calcul69.
     *
     * @param int|null $mtElemCalcul69 The mt elem calcul69.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul69(?int $mtElemCalcul69): RecapLignesMsa {
        $this->mtElemCalcul69 = $mtElemCalcul69;
        return $this;
    }

    /**
     * Set the mt elem calcul70.
     *
     * @param int|null $mtElemCalcul70 The mt elem calcul70.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul70(?int $mtElemCalcul70): RecapLignesMsa {
        $this->mtElemCalcul70 = $mtElemCalcul70;
        return $this;
    }

    /**
     * Set the mt elem calcul71.
     *
     * @param int|null $mtElemCalcul71 The mt elem calcul71.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul71(?int $mtElemCalcul71): RecapLignesMsa {
        $this->mtElemCalcul71 = $mtElemCalcul71;
        return $this;
    }

    /**
     * Set the mt elem calcul72.
     *
     * @param int|null $mtElemCalcul72 The mt elem calcul72.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul72(?int $mtElemCalcul72): RecapLignesMsa {
        $this->mtElemCalcul72 = $mtElemCalcul72;
        return $this;
    }

    /**
     * Set the mt elem calcul73.
     *
     * @param int|null $mtElemCalcul73 The mt elem calcul73.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul73(?int $mtElemCalcul73): RecapLignesMsa {
        $this->mtElemCalcul73 = $mtElemCalcul73;
        return $this;
    }

    /**
     * Set the mt elem calcul74.
     *
     * @param int|null $mtElemCalcul74 The mt elem calcul74.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul74(?int $mtElemCalcul74): RecapLignesMsa {
        $this->mtElemCalcul74 = $mtElemCalcul74;
        return $this;
    }

    /**
     * Set the mt elem calcul75.
     *
     * @param int|null $mtElemCalcul75 The mt elem calcul75.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul75(?int $mtElemCalcul75): RecapLignesMsa {
        $this->mtElemCalcul75 = $mtElemCalcul75;
        return $this;
    }

    /**
     * Set the mt elem calcul76.
     *
     * @param int|null $mtElemCalcul76 The mt elem calcul76.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul76(?int $mtElemCalcul76): RecapLignesMsa {
        $this->mtElemCalcul76 = $mtElemCalcul76;
        return $this;
    }

    /**
     * Set the mt elem calcul77.
     *
     * @param int|null $mtElemCalcul77 The mt elem calcul77.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul77(?int $mtElemCalcul77): RecapLignesMsa {
        $this->mtElemCalcul77 = $mtElemCalcul77;
        return $this;
    }

    /**
     * Set the mt elem calcul78.
     *
     * @param int|null $mtElemCalcul78 The mt elem calcul78.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul78(?int $mtElemCalcul78): RecapLignesMsa {
        $this->mtElemCalcul78 = $mtElemCalcul78;
        return $this;
    }

    /**
     * Set the mt elem calcul79.
     *
     * @param int|null $mtElemCalcul79 The mt elem calcul79.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul79(?int $mtElemCalcul79): RecapLignesMsa {
        $this->mtElemCalcul79 = $mtElemCalcul79;
        return $this;
    }

    /**
     * Set the mt elem calcul97.
     *
     * @param int|null $mtElemCalcul97 The mt elem calcul97.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul97(?int $mtElemCalcul97): RecapLignesMsa {
        $this->mtElemCalcul97 = $mtElemCalcul97;
        return $this;
    }

    /**
     * Set the mt elem calcul98.
     *
     * @param int|null $mtElemCalcul98 The mt elem calcul98.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtElemCalcul98(?int $mtElemCalcul98): RecapLignesMsa {
        $this->mtElemCalcul98 = $mtElemCalcul98;
        return $this;
    }

    /**
     * Set the mt tcp.
     *
     * @param int|null $mtTcp The mt tcp.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setMtTcp(?int $mtTcp): RecapLignesMsa {
        $this->mtTcp = $mtTcp;
        return $this;
    }

    /**
     * Set the per deb cice.
     *
     * @param DateTime|null $perDebCice The per deb cice.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setPerDebCice(?DateTime $perDebCice): RecapLignesMsa {
        $this->perDebCice = $perDebCice;
        return $this;
    }

    /**
     * Set the per fin cice.
     *
     * @param DateTime|null $perFinCice The per fin cice.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setPerFinCice(?DateTime $perFinCice): RecapLignesMsa {
        $this->perFinCice = $perFinCice;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setPeriodeDecla(?DateTime $periodeDecla): RecapLignesMsa {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the personne contact.
     *
     * @param string|null $personneContact The personne contact.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setPersonneContact(?string $personneContact): RecapLignesMsa {
        $this->personneContact = $personneContact;
        return $this;
    }

    /**
     * Set the prem mois.
     *
     * @param DateTime|null $premMois The prem mois.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setPremMois(?DateTime $premMois): RecapLignesMsa {
        $this->premMois = $premMois;
        return $this;
    }

    /**
     * Set the salaries de.
     *
     * @param string|null $salariesDe The salaries de.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setSalariesDe(?string $salariesDe): RecapLignesMsa {
        $this->salariesDe = $salariesDe;
        return $this;
    }

    /**
     * Set the selection service.
     *
     * @param string|null $selectionService The selection service.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setSelectionService(?string $selectionService): RecapLignesMsa {
        $this->selectionService = $selectionService;
        return $this;
    }

    /**
     * Set the siren.
     *
     * @param string|null $siren The siren.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setSiren(?string $siren): RecapLignesMsa {
        $this->siren = $siren;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setSiret(?string $siret): RecapLignesMsa {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the suivi par.
     *
     * @param string|null $suiviPar The suivi par.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setSuiviPar(?string $suiviPar): RecapLignesMsa {
        $this->suiviPar = $suiviPar;
        return $this;
    }

    /**
     * Set the tel personne.
     *
     * @param string|null $telPersonne The tel personne.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setTelPersonne(?string $telPersonne): RecapLignesMsa {
        $this->telPersonne = $telPersonne;
        return $this;
    }

    /**
     * Set the tri decl msa.
     *
     * @param string|null $triDeclMsa The tri decl msa.
     * @return RecapLignesMsa Returns this Recap lignes msa.
     */
    public function setTriDeclMsa(?string $triDeclMsa): RecapLignesMsa {
        $this->triDeclMsa = $triDeclMsa;
        return $this;
    }
}
