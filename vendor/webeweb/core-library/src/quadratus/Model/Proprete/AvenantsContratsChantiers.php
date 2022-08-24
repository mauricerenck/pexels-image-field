<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

use DateTime;

/**
 * Avenants contrats chantiers.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AvenantsContratsChantiers {

    /**
     * Code absence.
     *
     * @var string|null
     */
    private $codeAbsence;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code titulaire.
     *
     * @var string|null
     */
    private $codeTitulaire;

    /**
     * Numero avenant.
     *
     * @var int|null
     */
    private $numeroAvenant;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Remplace au.
     *
     * @var DateTime|null
     */
    private $remplaceAu;

    /**
     * Remplace du.
     *
     * @var DateTime|null
     */
    private $remplaceDu;

    /**
     * Type document.
     *
     * @var string|null
     */
    private $typeDocument;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code absence.
     *
     * @return string|null Returns the code absence.
     */
    public function getCodeAbsence(): ?string {
        return $this->codeAbsence;
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
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
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the code titulaire.
     *
     * @return string|null Returns the code titulaire.
     */
    public function getCodeTitulaire(): ?string {
        return $this->codeTitulaire;
    }

    /**
     * Get the numero avenant.
     *
     * @return int|null Returns the numero avenant.
     */
    public function getNumeroAvenant(): ?int {
        return $this->numeroAvenant;
    }

    /**
     * Get the numero ligne.
     *
     * @return int|null Returns the numero ligne.
     */
    public function getNumeroLigne(): ?int {
        return $this->numeroLigne;
    }

    /**
     * Get the remplace au.
     *
     * @return DateTime|null Returns the remplace au.
     */
    public function getRemplaceAu(): ?DateTime {
        return $this->remplaceAu;
    }

    /**
     * Get the remplace du.
     *
     * @return DateTime|null Returns the remplace du.
     */
    public function getRemplaceDu(): ?DateTime {
        return $this->remplaceDu;
    }

    /**
     * Get the type document.
     *
     * @return string|null Returns the type document.
     */
    public function getTypeDocument(): ?string {
        return $this->typeDocument;
    }

    /**
     * Set the code absence.
     *
     * @param string|null $codeAbsence The code absence.
     * @return AvenantsContratsChantiers Returns this Avenants contrats chantiers.
     */
    public function setCodeAbsence(?string $codeAbsence): AvenantsContratsChantiers {
        $this->codeAbsence = $codeAbsence;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return AvenantsContratsChantiers Returns this Avenants contrats chantiers.
     */
    public function setCodeAffaire(?string $codeAffaire): AvenantsContratsChantiers {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return AvenantsContratsChantiers Returns this Avenants contrats chantiers.
     */
    public function setCodeChantier(?string $codeChantier): AvenantsContratsChantiers {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return AvenantsContratsChantiers Returns this Avenants contrats chantiers.
     */
    public function setCodeClient(?string $codeClient): AvenantsContratsChantiers {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return AvenantsContratsChantiers Returns this Avenants contrats chantiers.
     */
    public function setCodeEmploye(?string $codeEmploye): AvenantsContratsChantiers {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code titulaire.
     *
     * @param string|null $codeTitulaire The code titulaire.
     * @return AvenantsContratsChantiers Returns this Avenants contrats chantiers.
     */
    public function setCodeTitulaire(?string $codeTitulaire): AvenantsContratsChantiers {
        $this->codeTitulaire = $codeTitulaire;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int|null $numeroAvenant The numero avenant.
     * @return AvenantsContratsChantiers Returns this Avenants contrats chantiers.
     */
    public function setNumeroAvenant(?int $numeroAvenant): AvenantsContratsChantiers {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return AvenantsContratsChantiers Returns this Avenants contrats chantiers.
     */
    public function setNumeroLigne(?int $numeroLigne): AvenantsContratsChantiers {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the remplace au.
     *
     * @param DateTime|null $remplaceAu The remplace au.
     * @return AvenantsContratsChantiers Returns this Avenants contrats chantiers.
     */
    public function setRemplaceAu(?DateTime $remplaceAu): AvenantsContratsChantiers {
        $this->remplaceAu = $remplaceAu;
        return $this;
    }

    /**
     * Set the remplace du.
     *
     * @param DateTime|null $remplaceDu The remplace du.
     * @return AvenantsContratsChantiers Returns this Avenants contrats chantiers.
     */
    public function setRemplaceDu(?DateTime $remplaceDu): AvenantsContratsChantiers {
        $this->remplaceDu = $remplaceDu;
        return $this;
    }

    /**
     * Set the type document.
     *
     * @param string|null $typeDocument The type document.
     * @return AvenantsContratsChantiers Returns this Avenants contrats chantiers.
     */
    public function setTypeDocument(?string $typeDocument): AvenantsContratsChantiers {
        $this->typeDocument = $typeDocument;
        return $this;
    }
}
