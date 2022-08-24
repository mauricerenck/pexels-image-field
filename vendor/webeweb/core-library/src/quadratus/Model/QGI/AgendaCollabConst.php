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
 * Agenda collab const.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AgendaCollabConst {

    /**
     * Artt.
     *
     * @var bool|null
     */
    private $artt;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code site tenue.
     *
     * @var string|null
     */
    private $codeSiteTenue;

    /**
     * Confidentiel.
     *
     * @var bool|null
     */
    private $confidentiel;

    /**
     * Date derniere modif agenda.
     *
     * @var DateTime|null
     */
    private $dateDerniereModifAgenda;

    /**
     * Dimanche a mdeb.
     *
     * @var DateTime|null
     */
    private $dimancheAMdeb;

    /**
     * Dimanche a mfin.
     *
     * @var DateTime|null
     */
    private $dimancheAMfin;

    /**
     * Dimanche p mdeb.
     *
     * @var DateTime|null
     */
    private $dimanchePMdeb;

    /**
     * Dimanche p mfin.
     *
     * @var DateTime|null
     */
    private $dimanchePMfin;

    /**
     * Interdire rd v hors travail.
     *
     * @var bool|null
     */
    private $interdireRdVHorsTravail;

    /**
     * Jeudi a mdeb.
     *
     * @var DateTime|null
     */
    private $jeudiAMdeb;

    /**
     * Jeudi a mfin.
     *
     * @var DateTime|null
     */
    private $jeudiAMfin;

    /**
     * Jeudi p mdeb.
     *
     * @var DateTime|null
     */
    private $jeudiPMdeb;

    /**
     * Jeudi p mfin.
     *
     * @var DateTime|null
     */
    private $jeudiPMfin;

    /**
     * Lundi a mdeb.
     *
     * @var DateTime|null
     */
    private $lundiAMdeb;

    /**
     * Lundi a mfin.
     *
     * @var DateTime|null
     */
    private $lundiAMfin;

    /**
     * Lundi p mdeb.
     *
     * @var DateTime|null
     */
    private $lundiPMdeb;

    /**
     * Lundi p mfin.
     *
     * @var DateTime|null
     */
    private $lundiPMfin;

    /**
     * Mardi a mdeb.
     *
     * @var DateTime|null
     */
    private $mardiAMdeb;

    /**
     * Mardi a mfin.
     *
     * @var DateTime|null
     */
    private $mardiAMfin;

    /**
     * Mardi p mdeb.
     *
     * @var DateTime|null
     */
    private $mardiPMdeb;

    /**
     * Mardi p mfin.
     *
     * @var DateTime|null
     */
    private $mardiPMfin;

    /**
     * Mercredi a mdeb.
     *
     * @var DateTime|null
     */
    private $mercrediAMdeb;

    /**
     * Mercredi a mfin.
     *
     * @var DateTime|null
     */
    private $mercrediAMfin;

    /**
     * Mercredi p mdeb.
     *
     * @var DateTime|null
     */
    private $mercrediPMdeb;

    /**
     * Mercredi p mfin.
     *
     * @var DateTime|null
     */
    private $mercrediPMfin;

    /**
     * Plus petite date activite modifiee.
     *
     * @var DateTime|null
     */
    private $plusPetiteDateActiviteModifiee;

    /**
     * Samedi a mdeb.
     *
     * @var DateTime|null
     */
    private $samediAMdeb;

    /**
     * Samedi a mfin.
     *
     * @var DateTime|null
     */
    private $samediAMfin;

    /**
     * Samedi p mdeb.
     *
     * @var DateTime|null
     */
    private $samediPMdeb;

    /**
     * Samedi p mfin.
     *
     * @var DateTime|null
     */
    private $samediPMfin;

    /**
     * Suivi ordre mission.
     *
     * @var bool|null
     */
    private $suiviOrdreMission;

    /**
     * Unite rdv.
     *
     * @var string|null
     */
    private $uniteRdv;

    /**
     * Vendredi a mdeb.
     *
     * @var DateTime|null
     */
    private $vendrediAMdeb;

    /**
     * Vendredi a mfin.
     *
     * @var DateTime|null
     */
    private $vendrediAMfin;

    /**
     * Vendredi p mdeb.
     *
     * @var DateTime|null
     */
    private $vendrediPMdeb;

    /**
     * Vendredi p mfin.
     *
     * @var DateTime|null
     */
    private $vendrediPMfin;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the artt.
     *
     * @return bool|null Returns the artt.
     */
    public function getArtt(): ?bool {
        return $this->artt;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code site tenue.
     *
     * @return string|null Returns the code site tenue.
     */
    public function getCodeSiteTenue(): ?string {
        return $this->codeSiteTenue;
    }

    /**
     * Get the confidentiel.
     *
     * @return bool|null Returns the confidentiel.
     */
    public function getConfidentiel(): ?bool {
        return $this->confidentiel;
    }

    /**
     * Get the date derniere modif agenda.
     *
     * @return DateTime|null Returns the date derniere modif agenda.
     */
    public function getDateDerniereModifAgenda(): ?DateTime {
        return $this->dateDerniereModifAgenda;
    }

    /**
     * Get the dimanche a mdeb.
     *
     * @return DateTime|null Returns the dimanche a mdeb.
     */
    public function getDimancheAMdeb(): ?DateTime {
        return $this->dimancheAMdeb;
    }

    /**
     * Get the dimanche a mfin.
     *
     * @return DateTime|null Returns the dimanche a mfin.
     */
    public function getDimancheAMfin(): ?DateTime {
        return $this->dimancheAMfin;
    }

    /**
     * Get the dimanche p mdeb.
     *
     * @return DateTime|null Returns the dimanche p mdeb.
     */
    public function getDimanchePMdeb(): ?DateTime {
        return $this->dimanchePMdeb;
    }

    /**
     * Get the dimanche p mfin.
     *
     * @return DateTime|null Returns the dimanche p mfin.
     */
    public function getDimanchePMfin(): ?DateTime {
        return $this->dimanchePMfin;
    }

    /**
     * Get the interdire rd v hors travail.
     *
     * @return bool|null Returns the interdire rd v hors travail.
     */
    public function getInterdireRdVHorsTravail(): ?bool {
        return $this->interdireRdVHorsTravail;
    }

    /**
     * Get the jeudi a mdeb.
     *
     * @return DateTime|null Returns the jeudi a mdeb.
     */
    public function getJeudiAMdeb(): ?DateTime {
        return $this->jeudiAMdeb;
    }

    /**
     * Get the jeudi a mfin.
     *
     * @return DateTime|null Returns the jeudi a mfin.
     */
    public function getJeudiAMfin(): ?DateTime {
        return $this->jeudiAMfin;
    }

    /**
     * Get the jeudi p mdeb.
     *
     * @return DateTime|null Returns the jeudi p mdeb.
     */
    public function getJeudiPMdeb(): ?DateTime {
        return $this->jeudiPMdeb;
    }

    /**
     * Get the jeudi p mfin.
     *
     * @return DateTime|null Returns the jeudi p mfin.
     */
    public function getJeudiPMfin(): ?DateTime {
        return $this->jeudiPMfin;
    }

    /**
     * Get the lundi a mdeb.
     *
     * @return DateTime|null Returns the lundi a mdeb.
     */
    public function getLundiAMdeb(): ?DateTime {
        return $this->lundiAMdeb;
    }

    /**
     * Get the lundi a mfin.
     *
     * @return DateTime|null Returns the lundi a mfin.
     */
    public function getLundiAMfin(): ?DateTime {
        return $this->lundiAMfin;
    }

    /**
     * Get the lundi p mdeb.
     *
     * @return DateTime|null Returns the lundi p mdeb.
     */
    public function getLundiPMdeb(): ?DateTime {
        return $this->lundiPMdeb;
    }

    /**
     * Get the lundi p mfin.
     *
     * @return DateTime|null Returns the lundi p mfin.
     */
    public function getLundiPMfin(): ?DateTime {
        return $this->lundiPMfin;
    }

    /**
     * Get the mardi a mdeb.
     *
     * @return DateTime|null Returns the mardi a mdeb.
     */
    public function getMardiAMdeb(): ?DateTime {
        return $this->mardiAMdeb;
    }

    /**
     * Get the mardi a mfin.
     *
     * @return DateTime|null Returns the mardi a mfin.
     */
    public function getMardiAMfin(): ?DateTime {
        return $this->mardiAMfin;
    }

    /**
     * Get the mardi p mdeb.
     *
     * @return DateTime|null Returns the mardi p mdeb.
     */
    public function getMardiPMdeb(): ?DateTime {
        return $this->mardiPMdeb;
    }

    /**
     * Get the mardi p mfin.
     *
     * @return DateTime|null Returns the mardi p mfin.
     */
    public function getMardiPMfin(): ?DateTime {
        return $this->mardiPMfin;
    }

    /**
     * Get the mercredi a mdeb.
     *
     * @return DateTime|null Returns the mercredi a mdeb.
     */
    public function getMercrediAMdeb(): ?DateTime {
        return $this->mercrediAMdeb;
    }

    /**
     * Get the mercredi a mfin.
     *
     * @return DateTime|null Returns the mercredi a mfin.
     */
    public function getMercrediAMfin(): ?DateTime {
        return $this->mercrediAMfin;
    }

    /**
     * Get the mercredi p mdeb.
     *
     * @return DateTime|null Returns the mercredi p mdeb.
     */
    public function getMercrediPMdeb(): ?DateTime {
        return $this->mercrediPMdeb;
    }

    /**
     * Get the mercredi p mfin.
     *
     * @return DateTime|null Returns the mercredi p mfin.
     */
    public function getMercrediPMfin(): ?DateTime {
        return $this->mercrediPMfin;
    }

    /**
     * Get the plus petite date activite modifiee.
     *
     * @return DateTime|null Returns the plus petite date activite modifiee.
     */
    public function getPlusPetiteDateActiviteModifiee(): ?DateTime {
        return $this->plusPetiteDateActiviteModifiee;
    }

    /**
     * Get the samedi a mdeb.
     *
     * @return DateTime|null Returns the samedi a mdeb.
     */
    public function getSamediAMdeb(): ?DateTime {
        return $this->samediAMdeb;
    }

    /**
     * Get the samedi a mfin.
     *
     * @return DateTime|null Returns the samedi a mfin.
     */
    public function getSamediAMfin(): ?DateTime {
        return $this->samediAMfin;
    }

    /**
     * Get the samedi p mdeb.
     *
     * @return DateTime|null Returns the samedi p mdeb.
     */
    public function getSamediPMdeb(): ?DateTime {
        return $this->samediPMdeb;
    }

    /**
     * Get the samedi p mfin.
     *
     * @return DateTime|null Returns the samedi p mfin.
     */
    public function getSamediPMfin(): ?DateTime {
        return $this->samediPMfin;
    }

    /**
     * Get the suivi ordre mission.
     *
     * @return bool|null Returns the suivi ordre mission.
     */
    public function getSuiviOrdreMission(): ?bool {
        return $this->suiviOrdreMission;
    }

    /**
     * Get the unite rdv.
     *
     * @return string|null Returns the unite rdv.
     */
    public function getUniteRdv(): ?string {
        return $this->uniteRdv;
    }

    /**
     * Get the vendredi a mdeb.
     *
     * @return DateTime|null Returns the vendredi a mdeb.
     */
    public function getVendrediAMdeb(): ?DateTime {
        return $this->vendrediAMdeb;
    }

    /**
     * Get the vendredi a mfin.
     *
     * @return DateTime|null Returns the vendredi a mfin.
     */
    public function getVendrediAMfin(): ?DateTime {
        return $this->vendrediAMfin;
    }

    /**
     * Get the vendredi p mdeb.
     *
     * @return DateTime|null Returns the vendredi p mdeb.
     */
    public function getVendrediPMdeb(): ?DateTime {
        return $this->vendrediPMdeb;
    }

    /**
     * Get the vendredi p mfin.
     *
     * @return DateTime|null Returns the vendredi p mfin.
     */
    public function getVendrediPMfin(): ?DateTime {
        return $this->vendrediPMfin;
    }

    /**
     * Set the artt.
     *
     * @param bool|null $artt The artt.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setArtt(?bool $artt): AgendaCollabConst {
        $this->artt = $artt;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): AgendaCollabConst {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code site tenue.
     *
     * @param string|null $codeSiteTenue The code site tenue.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setCodeSiteTenue(?string $codeSiteTenue): AgendaCollabConst {
        $this->codeSiteTenue = $codeSiteTenue;
        return $this;
    }

    /**
     * Set the confidentiel.
     *
     * @param bool|null $confidentiel The confidentiel.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setConfidentiel(?bool $confidentiel): AgendaCollabConst {
        $this->confidentiel = $confidentiel;
        return $this;
    }

    /**
     * Set the date derniere modif agenda.
     *
     * @param DateTime|null $dateDerniereModifAgenda The date derniere modif agenda.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setDateDerniereModifAgenda(?DateTime $dateDerniereModifAgenda): AgendaCollabConst {
        $this->dateDerniereModifAgenda = $dateDerniereModifAgenda;
        return $this;
    }

    /**
     * Set the dimanche a mdeb.
     *
     * @param DateTime|null $dimancheAMdeb The dimanche a mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setDimancheAMdeb(?DateTime $dimancheAMdeb): AgendaCollabConst {
        $this->dimancheAMdeb = $dimancheAMdeb;
        return $this;
    }

    /**
     * Set the dimanche a mfin.
     *
     * @param DateTime|null $dimancheAMfin The dimanche a mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setDimancheAMfin(?DateTime $dimancheAMfin): AgendaCollabConst {
        $this->dimancheAMfin = $dimancheAMfin;
        return $this;
    }

    /**
     * Set the dimanche p mdeb.
     *
     * @param DateTime|null $dimanchePMdeb The dimanche p mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setDimanchePMdeb(?DateTime $dimanchePMdeb): AgendaCollabConst {
        $this->dimanchePMdeb = $dimanchePMdeb;
        return $this;
    }

    /**
     * Set the dimanche p mfin.
     *
     * @param DateTime|null $dimanchePMfin The dimanche p mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setDimanchePMfin(?DateTime $dimanchePMfin): AgendaCollabConst {
        $this->dimanchePMfin = $dimanchePMfin;
        return $this;
    }

    /**
     * Set the interdire rd v hors travail.
     *
     * @param bool|null $interdireRdVHorsTravail The interdire rd v hors travail.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setInterdireRdVHorsTravail(?bool $interdireRdVHorsTravail): AgendaCollabConst {
        $this->interdireRdVHorsTravail = $interdireRdVHorsTravail;
        return $this;
    }

    /**
     * Set the jeudi a mdeb.
     *
     * @param DateTime|null $jeudiAMdeb The jeudi a mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setJeudiAMdeb(?DateTime $jeudiAMdeb): AgendaCollabConst {
        $this->jeudiAMdeb = $jeudiAMdeb;
        return $this;
    }

    /**
     * Set the jeudi a mfin.
     *
     * @param DateTime|null $jeudiAMfin The jeudi a mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setJeudiAMfin(?DateTime $jeudiAMfin): AgendaCollabConst {
        $this->jeudiAMfin = $jeudiAMfin;
        return $this;
    }

    /**
     * Set the jeudi p mdeb.
     *
     * @param DateTime|null $jeudiPMdeb The jeudi p mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setJeudiPMdeb(?DateTime $jeudiPMdeb): AgendaCollabConst {
        $this->jeudiPMdeb = $jeudiPMdeb;
        return $this;
    }

    /**
     * Set the jeudi p mfin.
     *
     * @param DateTime|null $jeudiPMfin The jeudi p mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setJeudiPMfin(?DateTime $jeudiPMfin): AgendaCollabConst {
        $this->jeudiPMfin = $jeudiPMfin;
        return $this;
    }

    /**
     * Set the lundi a mdeb.
     *
     * @param DateTime|null $lundiAMdeb The lundi a mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setLundiAMdeb(?DateTime $lundiAMdeb): AgendaCollabConst {
        $this->lundiAMdeb = $lundiAMdeb;
        return $this;
    }

    /**
     * Set the lundi a mfin.
     *
     * @param DateTime|null $lundiAMfin The lundi a mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setLundiAMfin(?DateTime $lundiAMfin): AgendaCollabConst {
        $this->lundiAMfin = $lundiAMfin;
        return $this;
    }

    /**
     * Set the lundi p mdeb.
     *
     * @param DateTime|null $lundiPMdeb The lundi p mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setLundiPMdeb(?DateTime $lundiPMdeb): AgendaCollabConst {
        $this->lundiPMdeb = $lundiPMdeb;
        return $this;
    }

    /**
     * Set the lundi p mfin.
     *
     * @param DateTime|null $lundiPMfin The lundi p mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setLundiPMfin(?DateTime $lundiPMfin): AgendaCollabConst {
        $this->lundiPMfin = $lundiPMfin;
        return $this;
    }

    /**
     * Set the mardi a mdeb.
     *
     * @param DateTime|null $mardiAMdeb The mardi a mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setMardiAMdeb(?DateTime $mardiAMdeb): AgendaCollabConst {
        $this->mardiAMdeb = $mardiAMdeb;
        return $this;
    }

    /**
     * Set the mardi a mfin.
     *
     * @param DateTime|null $mardiAMfin The mardi a mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setMardiAMfin(?DateTime $mardiAMfin): AgendaCollabConst {
        $this->mardiAMfin = $mardiAMfin;
        return $this;
    }

    /**
     * Set the mardi p mdeb.
     *
     * @param DateTime|null $mardiPMdeb The mardi p mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setMardiPMdeb(?DateTime $mardiPMdeb): AgendaCollabConst {
        $this->mardiPMdeb = $mardiPMdeb;
        return $this;
    }

    /**
     * Set the mardi p mfin.
     *
     * @param DateTime|null $mardiPMfin The mardi p mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setMardiPMfin(?DateTime $mardiPMfin): AgendaCollabConst {
        $this->mardiPMfin = $mardiPMfin;
        return $this;
    }

    /**
     * Set the mercredi a mdeb.
     *
     * @param DateTime|null $mercrediAMdeb The mercredi a mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setMercrediAMdeb(?DateTime $mercrediAMdeb): AgendaCollabConst {
        $this->mercrediAMdeb = $mercrediAMdeb;
        return $this;
    }

    /**
     * Set the mercredi a mfin.
     *
     * @param DateTime|null $mercrediAMfin The mercredi a mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setMercrediAMfin(?DateTime $mercrediAMfin): AgendaCollabConst {
        $this->mercrediAMfin = $mercrediAMfin;
        return $this;
    }

    /**
     * Set the mercredi p mdeb.
     *
     * @param DateTime|null $mercrediPMdeb The mercredi p mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setMercrediPMdeb(?DateTime $mercrediPMdeb): AgendaCollabConst {
        $this->mercrediPMdeb = $mercrediPMdeb;
        return $this;
    }

    /**
     * Set the mercredi p mfin.
     *
     * @param DateTime|null $mercrediPMfin The mercredi p mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setMercrediPMfin(?DateTime $mercrediPMfin): AgendaCollabConst {
        $this->mercrediPMfin = $mercrediPMfin;
        return $this;
    }

    /**
     * Set the plus petite date activite modifiee.
     *
     * @param DateTime|null $plusPetiteDateActiviteModifiee The plus petite date activite modifiee.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setPlusPetiteDateActiviteModifiee(?DateTime $plusPetiteDateActiviteModifiee): AgendaCollabConst {
        $this->plusPetiteDateActiviteModifiee = $plusPetiteDateActiviteModifiee;
        return $this;
    }

    /**
     * Set the samedi a mdeb.
     *
     * @param DateTime|null $samediAMdeb The samedi a mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setSamediAMdeb(?DateTime $samediAMdeb): AgendaCollabConst {
        $this->samediAMdeb = $samediAMdeb;
        return $this;
    }

    /**
     * Set the samedi a mfin.
     *
     * @param DateTime|null $samediAMfin The samedi a mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setSamediAMfin(?DateTime $samediAMfin): AgendaCollabConst {
        $this->samediAMfin = $samediAMfin;
        return $this;
    }

    /**
     * Set the samedi p mdeb.
     *
     * @param DateTime|null $samediPMdeb The samedi p mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setSamediPMdeb(?DateTime $samediPMdeb): AgendaCollabConst {
        $this->samediPMdeb = $samediPMdeb;
        return $this;
    }

    /**
     * Set the samedi p mfin.
     *
     * @param DateTime|null $samediPMfin The samedi p mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setSamediPMfin(?DateTime $samediPMfin): AgendaCollabConst {
        $this->samediPMfin = $samediPMfin;
        return $this;
    }

    /**
     * Set the suivi ordre mission.
     *
     * @param bool|null $suiviOrdreMission The suivi ordre mission.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setSuiviOrdreMission(?bool $suiviOrdreMission): AgendaCollabConst {
        $this->suiviOrdreMission = $suiviOrdreMission;
        return $this;
    }

    /**
     * Set the unite rdv.
     *
     * @param string|null $uniteRdv The unite rdv.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setUniteRdv(?string $uniteRdv): AgendaCollabConst {
        $this->uniteRdv = $uniteRdv;
        return $this;
    }

    /**
     * Set the vendredi a mdeb.
     *
     * @param DateTime|null $vendrediAMdeb The vendredi a mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setVendrediAMdeb(?DateTime $vendrediAMdeb): AgendaCollabConst {
        $this->vendrediAMdeb = $vendrediAMdeb;
        return $this;
    }

    /**
     * Set the vendredi a mfin.
     *
     * @param DateTime|null $vendrediAMfin The vendredi a mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setVendrediAMfin(?DateTime $vendrediAMfin): AgendaCollabConst {
        $this->vendrediAMfin = $vendrediAMfin;
        return $this;
    }

    /**
     * Set the vendredi p mdeb.
     *
     * @param DateTime|null $vendrediPMdeb The vendredi p mdeb.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setVendrediPMdeb(?DateTime $vendrediPMdeb): AgendaCollabConst {
        $this->vendrediPMdeb = $vendrediPMdeb;
        return $this;
    }

    /**
     * Set the vendredi p mfin.
     *
     * @param DateTime|null $vendrediPMfin The vendredi p mfin.
     * @return AgendaCollabConst Returns this Agenda collab const.
     */
    public function setVendrediPMfin(?DateTime $vendrediPMfin): AgendaCollabConst {
        $this->vendrediPMfin = $vendrediPMfin;
        return $this;
    }
}
