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

/**
 * i paie droits.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class iPaieDroits {

    /**
     * Code collab messages.
     *
     * @var string|null
     */
    private $codeCollabMessages;

    /**
     * Code user.
     *
     * @var string|null
     */
    private $codeUser;

    /**
     * Espace client.
     *
     * @var bool|null
     */
    private $espaceClient;

    /**
     * Fct absences cp.
     *
     * @var bool|null
     */
    private $fctAbsencesCp;

    /**
     * Fct acomptes.
     *
     * @var bool|null
     */
    private $fctAcomptes;

    /**
     * Fct archives.
     *
     * @var bool|null
     */
    private $fctArchives;

    /**
     * Fct bulletins.
     *
     * @var bool|null
     */
    private $fctBulletins;

    /**
     * Fct documents.
     *
     * @var bool|null
     */
    private $fctDocuments;

    /**
     * Fct donnees v.
     *
     * @var bool|null
     */
    private $fctDonneesV;

    /**
     * Fct etat civil.
     *
     * @var bool|null
     */
    private $fctEtatCivil;

    /**
     * Fct modif absences cp.
     *
     * @var bool|null
     */
    private $fctModifAbsencesCp;

    /**
     * Fct modif acomptes.
     *
     * @var bool|null
     */
    private $fctModifAcomptes;

    /**
     * Fct modif archives.
     *
     * @var bool|null
     */
    private $fctModifArchives;

    /**
     * Fct modif bulletins.
     *
     * @var bool|null
     */
    private $fctModifBulletins;

    /**
     * Fct modif documents.
     *
     * @var bool|null
     */
    private $fctModifDocuments;

    /**
     * Fct modif donnees v.
     *
     * @var bool|null
     */
    private $fctModifDonneesV;

    /**
     * Fct modif etat civil.
     *
     * @var bool|null
     */
    private $fctModifEtatCivil;

    /**
     * Flag.
     *
     * @var string|null
     */
    private $flag;

    /**
     * Niveau conf.
     *
     * @var string|null
     */
    private $niveauConf;

    /**
     * No doss paie.
     *
     * @var string|null
     */
    private $noDossPaie;

    /**
     * Nom user.
     *
     * @var string|null
     */
    private $nomUser;

    /**
     * Numi key.
     *
     * @var string|null
     */
    private $numiKey;

    /**
     * Password.
     *
     * @var string|null
     */
    private $password;

    /**
     * User expert.
     *
     * @var bool|null
     */
    private $userExpert;

    /**
     * Visu salaires.
     *
     * @var bool|null
     */
    private $visuSalaires;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code collab messages.
     *
     * @return string|null Returns the code collab messages.
     */
    public function getCodeCollabMessages(): ?string {
        return $this->codeCollabMessages;
    }

    /**
     * Get the code user.
     *
     * @return string|null Returns the code user.
     */
    public function getCodeUser(): ?string {
        return $this->codeUser;
    }

    /**
     * Get the espace client.
     *
     * @return bool|null Returns the espace client.
     */
    public function getEspaceClient(): ?bool {
        return $this->espaceClient;
    }

    /**
     * Get the fct absences cp.
     *
     * @return bool|null Returns the fct absences cp.
     */
    public function getFctAbsencesCp(): ?bool {
        return $this->fctAbsencesCp;
    }

    /**
     * Get the fct acomptes.
     *
     * @return bool|null Returns the fct acomptes.
     */
    public function getFctAcomptes(): ?bool {
        return $this->fctAcomptes;
    }

    /**
     * Get the fct archives.
     *
     * @return bool|null Returns the fct archives.
     */
    public function getFctArchives(): ?bool {
        return $this->fctArchives;
    }

    /**
     * Get the fct bulletins.
     *
     * @return bool|null Returns the fct bulletins.
     */
    public function getFctBulletins(): ?bool {
        return $this->fctBulletins;
    }

    /**
     * Get the fct documents.
     *
     * @return bool|null Returns the fct documents.
     */
    public function getFctDocuments(): ?bool {
        return $this->fctDocuments;
    }

    /**
     * Get the fct donnees v.
     *
     * @return bool|null Returns the fct donnees v.
     */
    public function getFctDonneesV(): ?bool {
        return $this->fctDonneesV;
    }

    /**
     * Get the fct etat civil.
     *
     * @return bool|null Returns the fct etat civil.
     */
    public function getFctEtatCivil(): ?bool {
        return $this->fctEtatCivil;
    }

    /**
     * Get the fct modif absences cp.
     *
     * @return bool|null Returns the fct modif absences cp.
     */
    public function getFctModifAbsencesCp(): ?bool {
        return $this->fctModifAbsencesCp;
    }

    /**
     * Get the fct modif acomptes.
     *
     * @return bool|null Returns the fct modif acomptes.
     */
    public function getFctModifAcomptes(): ?bool {
        return $this->fctModifAcomptes;
    }

    /**
     * Get the fct modif archives.
     *
     * @return bool|null Returns the fct modif archives.
     */
    public function getFctModifArchives(): ?bool {
        return $this->fctModifArchives;
    }

    /**
     * Get the fct modif bulletins.
     *
     * @return bool|null Returns the fct modif bulletins.
     */
    public function getFctModifBulletins(): ?bool {
        return $this->fctModifBulletins;
    }

    /**
     * Get the fct modif documents.
     *
     * @return bool|null Returns the fct modif documents.
     */
    public function getFctModifDocuments(): ?bool {
        return $this->fctModifDocuments;
    }

    /**
     * Get the fct modif donnees v.
     *
     * @return bool|null Returns the fct modif donnees v.
     */
    public function getFctModifDonneesV(): ?bool {
        return $this->fctModifDonneesV;
    }

    /**
     * Get the fct modif etat civil.
     *
     * @return bool|null Returns the fct modif etat civil.
     */
    public function getFctModifEtatCivil(): ?bool {
        return $this->fctModifEtatCivil;
    }

    /**
     * Get the flag.
     *
     * @return string|null Returns the flag.
     */
    public function getFlag(): ?string {
        return $this->flag;
    }

    /**
     * Get the niveau conf.
     *
     * @return string|null Returns the niveau conf.
     */
    public function getNiveauConf(): ?string {
        return $this->niveauConf;
    }

    /**
     * Get the no doss paie.
     *
     * @return string|null Returns the no doss paie.
     */
    public function getNoDossPaie(): ?string {
        return $this->noDossPaie;
    }

    /**
     * Get the nom user.
     *
     * @return string|null Returns the nom user.
     */
    public function getNomUser(): ?string {
        return $this->nomUser;
    }

    /**
     * Get the numi key.
     *
     * @return string|null Returns the numi key.
     */
    public function getNumiKey(): ?string {
        return $this->numiKey;
    }

    /**
     * Get the password.
     *
     * @return string|null Returns the password.
     */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Get the user expert.
     *
     * @return bool|null Returns the user expert.
     */
    public function getUserExpert(): ?bool {
        return $this->userExpert;
    }

    /**
     * Get the visu salaires.
     *
     * @return bool|null Returns the visu salaires.
     */
    public function getVisuSalaires(): ?bool {
        return $this->visuSalaires;
    }

    /**
     * Set the code collab messages.
     *
     * @param string|null $codeCollabMessages The code collab messages.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setCodeCollabMessages(?string $codeCollabMessages): iPaieDroits {
        $this->codeCollabMessages = $codeCollabMessages;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string|null $codeUser The code user.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setCodeUser(?string $codeUser): iPaieDroits {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the espace client.
     *
     * @param bool|null $espaceClient The espace client.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setEspaceClient(?bool $espaceClient): iPaieDroits {
        $this->espaceClient = $espaceClient;
        return $this;
    }

    /**
     * Set the fct absences cp.
     *
     * @param bool|null $fctAbsencesCp The fct absences cp.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctAbsencesCp(?bool $fctAbsencesCp): iPaieDroits {
        $this->fctAbsencesCp = $fctAbsencesCp;
        return $this;
    }

    /**
     * Set the fct acomptes.
     *
     * @param bool|null $fctAcomptes The fct acomptes.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctAcomptes(?bool $fctAcomptes): iPaieDroits {
        $this->fctAcomptes = $fctAcomptes;
        return $this;
    }

    /**
     * Set the fct archives.
     *
     * @param bool|null $fctArchives The fct archives.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctArchives(?bool $fctArchives): iPaieDroits {
        $this->fctArchives = $fctArchives;
        return $this;
    }

    /**
     * Set the fct bulletins.
     *
     * @param bool|null $fctBulletins The fct bulletins.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctBulletins(?bool $fctBulletins): iPaieDroits {
        $this->fctBulletins = $fctBulletins;
        return $this;
    }

    /**
     * Set the fct documents.
     *
     * @param bool|null $fctDocuments The fct documents.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctDocuments(?bool $fctDocuments): iPaieDroits {
        $this->fctDocuments = $fctDocuments;
        return $this;
    }

    /**
     * Set the fct donnees v.
     *
     * @param bool|null $fctDonneesV The fct donnees v.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctDonneesV(?bool $fctDonneesV): iPaieDroits {
        $this->fctDonneesV = $fctDonneesV;
        return $this;
    }

    /**
     * Set the fct etat civil.
     *
     * @param bool|null $fctEtatCivil The fct etat civil.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctEtatCivil(?bool $fctEtatCivil): iPaieDroits {
        $this->fctEtatCivil = $fctEtatCivil;
        return $this;
    }

    /**
     * Set the fct modif absences cp.
     *
     * @param bool|null $fctModifAbsencesCp The fct modif absences cp.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifAbsencesCp(?bool $fctModifAbsencesCp): iPaieDroits {
        $this->fctModifAbsencesCp = $fctModifAbsencesCp;
        return $this;
    }

    /**
     * Set the fct modif acomptes.
     *
     * @param bool|null $fctModifAcomptes The fct modif acomptes.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifAcomptes(?bool $fctModifAcomptes): iPaieDroits {
        $this->fctModifAcomptes = $fctModifAcomptes;
        return $this;
    }

    /**
     * Set the fct modif archives.
     *
     * @param bool|null $fctModifArchives The fct modif archives.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifArchives(?bool $fctModifArchives): iPaieDroits {
        $this->fctModifArchives = $fctModifArchives;
        return $this;
    }

    /**
     * Set the fct modif bulletins.
     *
     * @param bool|null $fctModifBulletins The fct modif bulletins.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifBulletins(?bool $fctModifBulletins): iPaieDroits {
        $this->fctModifBulletins = $fctModifBulletins;
        return $this;
    }

    /**
     * Set the fct modif documents.
     *
     * @param bool|null $fctModifDocuments The fct modif documents.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifDocuments(?bool $fctModifDocuments): iPaieDroits {
        $this->fctModifDocuments = $fctModifDocuments;
        return $this;
    }

    /**
     * Set the fct modif donnees v.
     *
     * @param bool|null $fctModifDonneesV The fct modif donnees v.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifDonneesV(?bool $fctModifDonneesV): iPaieDroits {
        $this->fctModifDonneesV = $fctModifDonneesV;
        return $this;
    }

    /**
     * Set the fct modif etat civil.
     *
     * @param bool|null $fctModifEtatCivil The fct modif etat civil.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifEtatCivil(?bool $fctModifEtatCivil): iPaieDroits {
        $this->fctModifEtatCivil = $fctModifEtatCivil;
        return $this;
    }

    /**
     * Set the flag.
     *
     * @param string|null $flag The flag.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFlag(?string $flag): iPaieDroits {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Set the niveau conf.
     *
     * @param string|null $niveauConf The niveau conf.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setNiveauConf(?string $niveauConf): iPaieDroits {
        $this->niveauConf = $niveauConf;
        return $this;
    }

    /**
     * Set the no doss paie.
     *
     * @param string|null $noDossPaie The no doss paie.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setNoDossPaie(?string $noDossPaie): iPaieDroits {
        $this->noDossPaie = $noDossPaie;
        return $this;
    }

    /**
     * Set the nom user.
     *
     * @param string|null $nomUser The nom user.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setNomUser(?string $nomUser): iPaieDroits {
        $this->nomUser = $nomUser;
        return $this;
    }

    /**
     * Set the numi key.
     *
     * @param string|null $numiKey The numi key.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setNumiKey(?string $numiKey): iPaieDroits {
        $this->numiKey = $numiKey;
        return $this;
    }

    /**
     * Set the password.
     *
     * @param string|null $password The password.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setPassword(?string $password): iPaieDroits {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the user expert.
     *
     * @param bool|null $userExpert The user expert.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setUserExpert(?bool $userExpert): iPaieDroits {
        $this->userExpert = $userExpert;
        return $this;
    }

    /**
     * Set the visu salaires.
     *
     * @param bool|null $visuSalaires The visu salaires.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setVisuSalaires(?bool $visuSalaires): iPaieDroits {
        $this->visuSalaires = $visuSalaires;
        return $this;
    }
}
