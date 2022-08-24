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
 * Missions.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Missions {

    /**
     * Article.
     *
     * @var string|null
     */
    private $article;

    /**
     * Bm calcule.
     *
     * @var bool|null
     */
    private $bmCalcule;

    /**
     * Centre analytique.
     *
     * @var string|null
     */
    private $centreAnalytique;

    /**
     * Cloture.
     *
     * @var bool|null
     */
    private $cloture;

    /**
     * Cloture contexte.
     *
     * @var string|null
     */
    private $clotureContexte;

    /**
     * Cloture date.
     *
     * @var DateTime|null
     */
    private $clotureDate;

    /**
     * Cloture par.
     *
     * @var string|null
     */
    private $cloturePar;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code mission.
     *
     * @var string|null
     */
    private $codeMission;

    /**
     * Code mission type.
     *
     * @var string|null
     */
    private $codeMissionType;

    /**
     * Code responsable.
     *
     * @var string|null
     */
    private $codeResponsable;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date debut tp.
     *
     * @var DateTime|null
     */
    private $dateDebutTp;

    /**
     * Date fin tp.
     *
     * @var DateTime|null
     */
    private $dateFinTp;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Decalage fermeture auto.
     *
     * @var int|null
     */
    private $decalageFermetureAuto;

    /**
     * Decalage fermeture auto jours.
     *
     * @var int|null
     */
    private $decalageFermetureAutoJours;

    /**
     * Decalage ouverture auto.
     *
     * @var int|null
     */
    private $decalageOuvertureAuto;

    /**
     * Descriptif.
     *
     * @var string|null
     */
    private $descriptif;

    /**
     * Descriptif rtf.
     *
     * @var string|null
     */
    private $descriptifRtf;

    /**
     * Dt fermeture auto.
     *
     * @var DateTime|null
     */
    private $dtFermetureAuto;

    /**
     * Fermeture auto.
     *
     * @var bool|null
     */
    private $fermetureAuto;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Mission millesime.
     *
     * @var bool|null
     */
    private $missionMillesime;

    /**
     * Mois ouverture auto.
     *
     * @var int|null
     */
    private $moisOuvertureAuto;

    /**
     * Ouverture contexte.
     *
     * @var string|null
     */
    private $ouvertureContexte;

    /**
     * Ouverture date.
     *
     * @var DateTime|null
     */
    private $ouvertureDate;

    /**
     * Ouverture par.
     *
     * @var string|null
     */
    private $ouverturePar;

    /**
     * Societe.
     *
     * @var string|null
     */
    private $societe;

    /**
     * Tp archive.
     *
     * @var bool|null
     */
    private $tpArchive;

    /**
     * Tp cloture.
     *
     * @var bool|null
     */
    private $tpCloture;

    /**
     * Transfert centre.
     *
     * @var bool|null
     */
    private $transfertCentre;

    /**
     * Type centre.
     *
     * @var string|null
     */
    private $typeCentre;

    /**
     * Type responsable.
     *
     * @var string|null
     */
    private $typeResponsable;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the article.
     *
     * @return string|null Returns the article.
     */
    public function getArticle(): ?string {
        return $this->article;
    }

    /**
     * Get the bm calcule.
     *
     * @return bool|null Returns the bm calcule.
     */
    public function getBmCalcule(): ?bool {
        return $this->bmCalcule;
    }

    /**
     * Get the centre analytique.
     *
     * @return string|null Returns the centre analytique.
     */
    public function getCentreAnalytique(): ?string {
        return $this->centreAnalytique;
    }

    /**
     * Get the cloture.
     *
     * @return bool|null Returns the cloture.
     */
    public function getCloture(): ?bool {
        return $this->cloture;
    }

    /**
     * Get the cloture contexte.
     *
     * @return string|null Returns the cloture contexte.
     */
    public function getClotureContexte(): ?string {
        return $this->clotureContexte;
    }

    /**
     * Get the cloture date.
     *
     * @return DateTime|null Returns the cloture date.
     */
    public function getClotureDate(): ?DateTime {
        return $this->clotureDate;
    }

    /**
     * Get the cloture par.
     *
     * @return string|null Returns the cloture par.
     */
    public function getCloturePar(): ?string {
        return $this->cloturePar;
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
     * Get the code mission.
     *
     * @return string|null Returns the code mission.
     */
    public function getCodeMission(): ?string {
        return $this->codeMission;
    }

    /**
     * Get the code mission type.
     *
     * @return string|null Returns the code mission type.
     */
    public function getCodeMissionType(): ?string {
        return $this->codeMissionType;
    }

    /**
     * Get the code responsable.
     *
     * @return string|null Returns the code responsable.
     */
    public function getCodeResponsable(): ?string {
        return $this->codeResponsable;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation(): ?DateTime {
        return $this->dateCreation;
    }

    /**
     * Get the date debut tp.
     *
     * @return DateTime|null Returns the date debut tp.
     */
    public function getDateDebutTp(): ?DateTime {
        return $this->dateDebutTp;
    }

    /**
     * Get the date fin tp.
     *
     * @return DateTime|null Returns the date fin tp.
     */
    public function getDateFinTp(): ?DateTime {
        return $this->dateFinTp;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification(): ?DateTime {
        return $this->dateModification;
    }

    /**
     * Get the decalage fermeture auto.
     *
     * @return int|null Returns the decalage fermeture auto.
     */
    public function getDecalageFermetureAuto(): ?int {
        return $this->decalageFermetureAuto;
    }

    /**
     * Get the decalage fermeture auto jours.
     *
     * @return int|null Returns the decalage fermeture auto jours.
     */
    public function getDecalageFermetureAutoJours(): ?int {
        return $this->decalageFermetureAutoJours;
    }

    /**
     * Get the decalage ouverture auto.
     *
     * @return int|null Returns the decalage ouverture auto.
     */
    public function getDecalageOuvertureAuto(): ?int {
        return $this->decalageOuvertureAuto;
    }

    /**
     * Get the descriptif.
     *
     * @return string|null Returns the descriptif.
     */
    public function getDescriptif(): ?string {
        return $this->descriptif;
    }

    /**
     * Get the descriptif rtf.
     *
     * @return string|null Returns the descriptif rtf.
     */
    public function getDescriptifRtf(): ?string {
        return $this->descriptifRtf;
    }

    /**
     * Get the dt fermeture auto.
     *
     * @return DateTime|null Returns the dt fermeture auto.
     */
    public function getDtFermetureAuto(): ?DateTime {
        return $this->dtFermetureAuto;
    }

    /**
     * Get the fermeture auto.
     *
     * @return bool|null Returns the fermeture auto.
     */
    public function getFermetureAuto(): ?bool {
        return $this->fermetureAuto;
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the mission millesime.
     *
     * @return bool|null Returns the mission millesime.
     */
    public function getMissionMillesime(): ?bool {
        return $this->missionMillesime;
    }

    /**
     * Get the mois ouverture auto.
     *
     * @return int|null Returns the mois ouverture auto.
     */
    public function getMoisOuvertureAuto(): ?int {
        return $this->moisOuvertureAuto;
    }

    /**
     * Get the ouverture contexte.
     *
     * @return string|null Returns the ouverture contexte.
     */
    public function getOuvertureContexte(): ?string {
        return $this->ouvertureContexte;
    }

    /**
     * Get the ouverture date.
     *
     * @return DateTime|null Returns the ouverture date.
     */
    public function getOuvertureDate(): ?DateTime {
        return $this->ouvertureDate;
    }

    /**
     * Get the ouverture par.
     *
     * @return string|null Returns the ouverture par.
     */
    public function getOuverturePar(): ?string {
        return $this->ouverturePar;
    }

    /**
     * Get the societe.
     *
     * @return string|null Returns the societe.
     */
    public function getSociete(): ?string {
        return $this->societe;
    }

    /**
     * Get the tp archive.
     *
     * @return bool|null Returns the tp archive.
     */
    public function getTpArchive(): ?bool {
        return $this->tpArchive;
    }

    /**
     * Get the tp cloture.
     *
     * @return bool|null Returns the tp cloture.
     */
    public function getTpCloture(): ?bool {
        return $this->tpCloture;
    }

    /**
     * Get the transfert centre.
     *
     * @return bool|null Returns the transfert centre.
     */
    public function getTransfertCentre(): ?bool {
        return $this->transfertCentre;
    }

    /**
     * Get the type centre.
     *
     * @return string|null Returns the type centre.
     */
    public function getTypeCentre(): ?string {
        return $this->typeCentre;
    }

    /**
     * Get the type responsable.
     *
     * @return string|null Returns the type responsable.
     */
    public function getTypeResponsable(): ?string {
        return $this->typeResponsable;
    }

    /**
     * Set the article.
     *
     * @param string|null $article The article.
     * @return Missions Returns this Missions.
     */
    public function setArticle(?string $article): Missions {
        $this->article = $article;
        return $this;
    }

    /**
     * Set the bm calcule.
     *
     * @param bool|null $bmCalcule The bm calcule.
     * @return Missions Returns this Missions.
     */
    public function setBmCalcule(?bool $bmCalcule): Missions {
        $this->bmCalcule = $bmCalcule;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string|null $centreAnalytique The centre analytique.
     * @return Missions Returns this Missions.
     */
    public function setCentreAnalytique(?string $centreAnalytique): Missions {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the cloture.
     *
     * @param bool|null $cloture The cloture.
     * @return Missions Returns this Missions.
     */
    public function setCloture(?bool $cloture): Missions {
        $this->cloture = $cloture;
        return $this;
    }

    /**
     * Set the cloture contexte.
     *
     * @param string|null $clotureContexte The cloture contexte.
     * @return Missions Returns this Missions.
     */
    public function setClotureContexte(?string $clotureContexte): Missions {
        $this->clotureContexte = $clotureContexte;
        return $this;
    }

    /**
     * Set the cloture date.
     *
     * @param DateTime|null $clotureDate The cloture date.
     * @return Missions Returns this Missions.
     */
    public function setClotureDate(?DateTime $clotureDate): Missions {
        $this->clotureDate = $clotureDate;
        return $this;
    }

    /**
     * Set the cloture par.
     *
     * @param string|null $cloturePar The cloture par.
     * @return Missions Returns this Missions.
     */
    public function setCloturePar(?string $cloturePar): Missions {
        $this->cloturePar = $cloturePar;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Missions Returns this Missions.
     */
    public function setCodeClient(?string $codeClient): Missions {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return Missions Returns this Missions.
     */
    public function setCodeMission(?string $codeMission): Missions {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code mission type.
     *
     * @param string|null $codeMissionType The code mission type.
     * @return Missions Returns this Missions.
     */
    public function setCodeMissionType(?string $codeMissionType): Missions {
        $this->codeMissionType = $codeMissionType;
        return $this;
    }

    /**
     * Set the code responsable.
     *
     * @param string|null $codeResponsable The code responsable.
     * @return Missions Returns this Missions.
     */
    public function setCodeResponsable(?string $codeResponsable): Missions {
        $this->codeResponsable = $codeResponsable;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Missions Returns this Missions.
     */
    public function setDateCreation(?DateTime $dateCreation): Missions {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date debut tp.
     *
     * @param DateTime|null $dateDebutTp The date debut tp.
     * @return Missions Returns this Missions.
     */
    public function setDateDebutTp(?DateTime $dateDebutTp): Missions {
        $this->dateDebutTp = $dateDebutTp;
        return $this;
    }

    /**
     * Set the date fin tp.
     *
     * @param DateTime|null $dateFinTp The date fin tp.
     * @return Missions Returns this Missions.
     */
    public function setDateFinTp(?DateTime $dateFinTp): Missions {
        $this->dateFinTp = $dateFinTp;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Missions Returns this Missions.
     */
    public function setDateModification(?DateTime $dateModification): Missions {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the decalage fermeture auto.
     *
     * @param int|null $decalageFermetureAuto The decalage fermeture auto.
     * @return Missions Returns this Missions.
     */
    public function setDecalageFermetureAuto(?int $decalageFermetureAuto): Missions {
        $this->decalageFermetureAuto = $decalageFermetureAuto;
        return $this;
    }

    /**
     * Set the decalage fermeture auto jours.
     *
     * @param int|null $decalageFermetureAutoJours The decalage fermeture auto jours.
     * @return Missions Returns this Missions.
     */
    public function setDecalageFermetureAutoJours(?int $decalageFermetureAutoJours): Missions {
        $this->decalageFermetureAutoJours = $decalageFermetureAutoJours;
        return $this;
    }

    /**
     * Set the decalage ouverture auto.
     *
     * @param int|null $decalageOuvertureAuto The decalage ouverture auto.
     * @return Missions Returns this Missions.
     */
    public function setDecalageOuvertureAuto(?int $decalageOuvertureAuto): Missions {
        $this->decalageOuvertureAuto = $decalageOuvertureAuto;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string|null $descriptif The descriptif.
     * @return Missions Returns this Missions.
     */
    public function setDescriptif(?string $descriptif): Missions {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the descriptif rtf.
     *
     * @param string|null $descriptifRtf The descriptif rtf.
     * @return Missions Returns this Missions.
     */
    public function setDescriptifRtf(?string $descriptifRtf): Missions {
        $this->descriptifRtf = $descriptifRtf;
        return $this;
    }

    /**
     * Set the dt fermeture auto.
     *
     * @param DateTime|null $dtFermetureAuto The dt fermeture auto.
     * @return Missions Returns this Missions.
     */
    public function setDtFermetureAuto(?DateTime $dtFermetureAuto): Missions {
        $this->dtFermetureAuto = $dtFermetureAuto;
        return $this;
    }

    /**
     * Set the fermeture auto.
     *
     * @param bool|null $fermetureAuto The fermeture auto.
     * @return Missions Returns this Missions.
     */
    public function setFermetureAuto(?bool $fermetureAuto): Missions {
        $this->fermetureAuto = $fermetureAuto;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Missions Returns this Missions.
     */
    public function setLibelle(?string $libelle): Missions {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the mission millesime.
     *
     * @param bool|null $missionMillesime The mission millesime.
     * @return Missions Returns this Missions.
     */
    public function setMissionMillesime(?bool $missionMillesime): Missions {
        $this->missionMillesime = $missionMillesime;
        return $this;
    }

    /**
     * Set the mois ouverture auto.
     *
     * @param int|null $moisOuvertureAuto The mois ouverture auto.
     * @return Missions Returns this Missions.
     */
    public function setMoisOuvertureAuto(?int $moisOuvertureAuto): Missions {
        $this->moisOuvertureAuto = $moisOuvertureAuto;
        return $this;
    }

    /**
     * Set the ouverture contexte.
     *
     * @param string|null $ouvertureContexte The ouverture contexte.
     * @return Missions Returns this Missions.
     */
    public function setOuvertureContexte(?string $ouvertureContexte): Missions {
        $this->ouvertureContexte = $ouvertureContexte;
        return $this;
    }

    /**
     * Set the ouverture date.
     *
     * @param DateTime|null $ouvertureDate The ouverture date.
     * @return Missions Returns this Missions.
     */
    public function setOuvertureDate(?DateTime $ouvertureDate): Missions {
        $this->ouvertureDate = $ouvertureDate;
        return $this;
    }

    /**
     * Set the ouverture par.
     *
     * @param string|null $ouverturePar The ouverture par.
     * @return Missions Returns this Missions.
     */
    public function setOuverturePar(?string $ouverturePar): Missions {
        $this->ouverturePar = $ouverturePar;
        return $this;
    }

    /**
     * Set the societe.
     *
     * @param string|null $societe The societe.
     * @return Missions Returns this Missions.
     */
    public function setSociete(?string $societe): Missions {
        $this->societe = $societe;
        return $this;
    }

    /**
     * Set the tp archive.
     *
     * @param bool|null $tpArchive The tp archive.
     * @return Missions Returns this Missions.
     */
    public function setTpArchive(?bool $tpArchive): Missions {
        $this->tpArchive = $tpArchive;
        return $this;
    }

    /**
     * Set the tp cloture.
     *
     * @param bool|null $tpCloture The tp cloture.
     * @return Missions Returns this Missions.
     */
    public function setTpCloture(?bool $tpCloture): Missions {
        $this->tpCloture = $tpCloture;
        return $this;
    }

    /**
     * Set the transfert centre.
     *
     * @param bool|null $transfertCentre The transfert centre.
     * @return Missions Returns this Missions.
     */
    public function setTransfertCentre(?bool $transfertCentre): Missions {
        $this->transfertCentre = $transfertCentre;
        return $this;
    }

    /**
     * Set the type centre.
     *
     * @param string|null $typeCentre The type centre.
     * @return Missions Returns this Missions.
     */
    public function setTypeCentre(?string $typeCentre): Missions {
        $this->typeCentre = $typeCentre;
        return $this;
    }

    /**
     * Set the type responsable.
     *
     * @param string|null $typeResponsable The type responsable.
     * @return Missions Returns this Missions.
     */
    public function setTypeResponsable(?string $typeResponsable): Missions {
        $this->typeResponsable = $typeResponsable;
        return $this;
    }
}
