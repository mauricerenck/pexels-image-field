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
 * i espace client droits.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class iEspaceClientDroits {

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
     * Dossier client.
     *
     * @var string|null
     */
    private $dossierClient;

    /**
     * Fct documents.
     *
     * @var bool|null
     */
    private $fctDocuments;

    /**
     * Fct documents autre.
     *
     * @var int|null
     */
    private $fctDocumentsAutre;

    /**
     * Fct documents compta.
     *
     * @var int|null
     */
    private $fctDocumentsCompta;

    /**
     * Fct documents juridique.
     *
     * @var int|null
     */
    private $fctDocumentsJuridique;

    /**
     * Fct documents paie.
     *
     * @var int|null
     */
    private $fctDocumentsPaie;

    /**
     * Fct infos.
     *
     * @var bool|null
     */
    private $fctInfos;

    /**
     * Fct messagerie.
     *
     * @var int|null
     */
    private $fctMessagerie;

    /**
     * Nom user.
     *
     * @var string|null
     */
    private $nomUser;

    /**
     * Password.
     *
     * @var string|null
     */
    private $password;

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
     * Get the dossier client.
     *
     * @return string|null Returns the dossier client.
     */
    public function getDossierClient(): ?string {
        return $this->dossierClient;
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
     * Get the fct documents autre.
     *
     * @return int|null Returns the fct documents autre.
     */
    public function getFctDocumentsAutre(): ?int {
        return $this->fctDocumentsAutre;
    }

    /**
     * Get the fct documents compta.
     *
     * @return int|null Returns the fct documents compta.
     */
    public function getFctDocumentsCompta(): ?int {
        return $this->fctDocumentsCompta;
    }

    /**
     * Get the fct documents juridique.
     *
     * @return int|null Returns the fct documents juridique.
     */
    public function getFctDocumentsJuridique(): ?int {
        return $this->fctDocumentsJuridique;
    }

    /**
     * Get the fct documents paie.
     *
     * @return int|null Returns the fct documents paie.
     */
    public function getFctDocumentsPaie(): ?int {
        return $this->fctDocumentsPaie;
    }

    /**
     * Get the fct infos.
     *
     * @return bool|null Returns the fct infos.
     */
    public function getFctInfos(): ?bool {
        return $this->fctInfos;
    }

    /**
     * Get the fct messagerie.
     *
     * @return int|null Returns the fct messagerie.
     */
    public function getFctMessagerie(): ?int {
        return $this->fctMessagerie;
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
     * Get the password.
     *
     * @return string|null Returns the password.
     */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Set the code collab messages.
     *
     * @param string|null $codeCollabMessages The code collab messages.
     * @return iEspaceClientDroits Returns this i espace client droits.
     */
    public function setCodeCollabMessages(?string $codeCollabMessages): iEspaceClientDroits {
        $this->codeCollabMessages = $codeCollabMessages;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string|null $codeUser The code user.
     * @return iEspaceClientDroits Returns this i espace client droits.
     */
    public function setCodeUser(?string $codeUser): iEspaceClientDroits {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the dossier client.
     *
     * @param string|null $dossierClient The dossier client.
     * @return iEspaceClientDroits Returns this i espace client droits.
     */
    public function setDossierClient(?string $dossierClient): iEspaceClientDroits {
        $this->dossierClient = $dossierClient;
        return $this;
    }

    /**
     * Set the fct documents.
     *
     * @param bool|null $fctDocuments The fct documents.
     * @return iEspaceClientDroits Returns this i espace client droits.
     */
    public function setFctDocuments(?bool $fctDocuments): iEspaceClientDroits {
        $this->fctDocuments = $fctDocuments;
        return $this;
    }

    /**
     * Set the fct documents autre.
     *
     * @param int|null $fctDocumentsAutre The fct documents autre.
     * @return iEspaceClientDroits Returns this i espace client droits.
     */
    public function setFctDocumentsAutre(?int $fctDocumentsAutre): iEspaceClientDroits {
        $this->fctDocumentsAutre = $fctDocumentsAutre;
        return $this;
    }

    /**
     * Set the fct documents compta.
     *
     * @param int|null $fctDocumentsCompta The fct documents compta.
     * @return iEspaceClientDroits Returns this i espace client droits.
     */
    public function setFctDocumentsCompta(?int $fctDocumentsCompta): iEspaceClientDroits {
        $this->fctDocumentsCompta = $fctDocumentsCompta;
        return $this;
    }

    /**
     * Set the fct documents juridique.
     *
     * @param int|null $fctDocumentsJuridique The fct documents juridique.
     * @return iEspaceClientDroits Returns this i espace client droits.
     */
    public function setFctDocumentsJuridique(?int $fctDocumentsJuridique): iEspaceClientDroits {
        $this->fctDocumentsJuridique = $fctDocumentsJuridique;
        return $this;
    }

    /**
     * Set the fct documents paie.
     *
     * @param int|null $fctDocumentsPaie The fct documents paie.
     * @return iEspaceClientDroits Returns this i espace client droits.
     */
    public function setFctDocumentsPaie(?int $fctDocumentsPaie): iEspaceClientDroits {
        $this->fctDocumentsPaie = $fctDocumentsPaie;
        return $this;
    }

    /**
     * Set the fct infos.
     *
     * @param bool|null $fctInfos The fct infos.
     * @return iEspaceClientDroits Returns this i espace client droits.
     */
    public function setFctInfos(?bool $fctInfos): iEspaceClientDroits {
        $this->fctInfos = $fctInfos;
        return $this;
    }

    /**
     * Set the fct messagerie.
     *
     * @param int|null $fctMessagerie The fct messagerie.
     * @return iEspaceClientDroits Returns this i espace client droits.
     */
    public function setFctMessagerie(?int $fctMessagerie): iEspaceClientDroits {
        $this->fctMessagerie = $fctMessagerie;
        return $this;
    }

    /**
     * Set the nom user.
     *
     * @param string|null $nomUser The nom user.
     * @return iEspaceClientDroits Returns this i espace client droits.
     */
    public function setNomUser(?string $nomUser): iEspaceClientDroits {
        $this->nomUser = $nomUser;
        return $this;
    }

    /**
     * Set the password.
     *
     * @param string|null $password The password.
     * @return iEspaceClientDroits Returns this i espace client droits.
     */
    public function setPassword(?string $password): iEspaceClientDroits {
        $this->password = $password;
        return $this;
    }
}
