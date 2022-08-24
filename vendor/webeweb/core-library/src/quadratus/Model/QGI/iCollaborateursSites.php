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
 * i collaborateurs sites.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class iCollaborateursSites {

    /**
     * Adresse ip.
     *
     * @var string|null
     */
    private $adresseIp;

    /**
     * Code collab.
     *
     * @var string|null
     */
    private $codeCollab;

    /**
     * Dossier.
     *
     * @var string|null
     */
    private $dossier;

    /**
     * Restr cli assist1.
     *
     * @var string|null
     */
    private $restrCliAssist1;

    /**
     * Restr cli assist2.
     *
     * @var string|null
     */
    private $restrCliAssist2;

    /**
     * Restr cli autre1.
     *
     * @var string|null
     */
    private $restrCliAutre1;

    /**
     * Restr cli autre2.
     *
     * @var string|null
     */
    private $restrCliAutre2;

    /**
     * Restr cli collab.
     *
     * @var string|null
     */
    private $restrCliCollab;

    /**
     * Restr cli expert.
     *
     * @var string|null
     */
    private $restrCliExpert;

    /**
     * Restr cli portef.
     *
     * @var string|null
     */
    private $restrCliPortef;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adresse ip.
     *
     * @return string|null Returns the adresse ip.
     */
    public function getAdresseIp(): ?string {
        return $this->adresseIp;
    }

    /**
     * Get the code collab.
     *
     * @return string|null Returns the code collab.
     */
    public function getCodeCollab(): ?string {
        return $this->codeCollab;
    }

    /**
     * Get the dossier.
     *
     * @return string|null Returns the dossier.
     */
    public function getDossier(): ?string {
        return $this->dossier;
    }

    /**
     * Get the restr cli assist1.
     *
     * @return string|null Returns the restr cli assist1.
     */
    public function getRestrCliAssist1(): ?string {
        return $this->restrCliAssist1;
    }

    /**
     * Get the restr cli assist2.
     *
     * @return string|null Returns the restr cli assist2.
     */
    public function getRestrCliAssist2(): ?string {
        return $this->restrCliAssist2;
    }

    /**
     * Get the restr cli autre1.
     *
     * @return string|null Returns the restr cli autre1.
     */
    public function getRestrCliAutre1(): ?string {
        return $this->restrCliAutre1;
    }

    /**
     * Get the restr cli autre2.
     *
     * @return string|null Returns the restr cli autre2.
     */
    public function getRestrCliAutre2(): ?string {
        return $this->restrCliAutre2;
    }

    /**
     * Get the restr cli collab.
     *
     * @return string|null Returns the restr cli collab.
     */
    public function getRestrCliCollab(): ?string {
        return $this->restrCliCollab;
    }

    /**
     * Get the restr cli expert.
     *
     * @return string|null Returns the restr cli expert.
     */
    public function getRestrCliExpert(): ?string {
        return $this->restrCliExpert;
    }

    /**
     * Get the restr cli portef.
     *
     * @return string|null Returns the restr cli portef.
     */
    public function getRestrCliPortef(): ?string {
        return $this->restrCliPortef;
    }

    /**
     * Set the adresse ip.
     *
     * @param string|null $adresseIp The adresse ip.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setAdresseIp(?string $adresseIp): iCollaborateursSites {
        $this->adresseIp = $adresseIp;
        return $this;
    }

    /**
     * Set the code collab.
     *
     * @param string|null $codeCollab The code collab.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setCodeCollab(?string $codeCollab): iCollaborateursSites {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the dossier.
     *
     * @param string|null $dossier The dossier.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setDossier(?string $dossier): iCollaborateursSites {
        $this->dossier = $dossier;
        return $this;
    }

    /**
     * Set the restr cli assist1.
     *
     * @param string|null $restrCliAssist1 The restr cli assist1.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliAssist1(?string $restrCliAssist1): iCollaborateursSites {
        $this->restrCliAssist1 = $restrCliAssist1;
        return $this;
    }

    /**
     * Set the restr cli assist2.
     *
     * @param string|null $restrCliAssist2 The restr cli assist2.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliAssist2(?string $restrCliAssist2): iCollaborateursSites {
        $this->restrCliAssist2 = $restrCliAssist2;
        return $this;
    }

    /**
     * Set the restr cli autre1.
     *
     * @param string|null $restrCliAutre1 The restr cli autre1.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliAutre1(?string $restrCliAutre1): iCollaborateursSites {
        $this->restrCliAutre1 = $restrCliAutre1;
        return $this;
    }

    /**
     * Set the restr cli autre2.
     *
     * @param string|null $restrCliAutre2 The restr cli autre2.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliAutre2(?string $restrCliAutre2): iCollaborateursSites {
        $this->restrCliAutre2 = $restrCliAutre2;
        return $this;
    }

    /**
     * Set the restr cli collab.
     *
     * @param string|null $restrCliCollab The restr cli collab.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliCollab(?string $restrCliCollab): iCollaborateursSites {
        $this->restrCliCollab = $restrCliCollab;
        return $this;
    }

    /**
     * Set the restr cli expert.
     *
     * @param string|null $restrCliExpert The restr cli expert.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliExpert(?string $restrCliExpert): iCollaborateursSites {
        $this->restrCliExpert = $restrCliExpert;
        return $this;
    }

    /**
     * Set the restr cli portef.
     *
     * @param string|null $restrCliPortef The restr cli portef.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliPortef(?string $restrCliPortef): iCollaborateursSites {
        $this->restrCliPortef = $restrCliPortef;
        return $this;
    }
}
