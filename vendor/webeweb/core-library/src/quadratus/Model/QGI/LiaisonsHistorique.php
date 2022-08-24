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
 * Liaisons historique.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class LiaisonsHistorique {

    /**
     * Code collab.
     *
     * @var string|null
     */
    private $codeCollab;

    /**
     * Date liaison.
     *
     * @var DateTime|null
     */
    private $dateLiaison;

    /**
     * Date retour prevue.
     *
     * @var DateTime|null
     */
    private $dateRetourPrevue;

    /**
     * Destinataire.
     *
     * @var string|null
     */
    private $destinataire;

    /**
     * Modules.
     *
     * @var string|null
     */
    private $modules;

    /**
     * Modules bloques.
     *
     * @var string|null
     */
    private $modulesBloques;

    /**
     * Num uniq.
     *
     * @var int|null
     */
    private $numUniq;

    /**
     * Numero dossier.
     *
     * @var string|null
     */
    private $numeroDossier;

    /**
     * Sens.
     *
     * @var string|null
     */
    private $sens;

    /**
     * Type liaison.
     *
     * @var string|null
     */
    private $typeLiaison;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the date liaison.
     *
     * @return DateTime|null Returns the date liaison.
     */
    public function getDateLiaison(): ?DateTime {
        return $this->dateLiaison;
    }

    /**
     * Get the date retour prevue.
     *
     * @return DateTime|null Returns the date retour prevue.
     */
    public function getDateRetourPrevue(): ?DateTime {
        return $this->dateRetourPrevue;
    }

    /**
     * Get the destinataire.
     *
     * @return string|null Returns the destinataire.
     */
    public function getDestinataire(): ?string {
        return $this->destinataire;
    }

    /**
     * Get the modules.
     *
     * @return string|null Returns the modules.
     */
    public function getModules(): ?string {
        return $this->modules;
    }

    /**
     * Get the modules bloques.
     *
     * @return string|null Returns the modules bloques.
     */
    public function getModulesBloques(): ?string {
        return $this->modulesBloques;
    }

    /**
     * Get the num uniq.
     *
     * @return int|null Returns the num uniq.
     */
    public function getNumUniq(): ?int {
        return $this->numUniq;
    }

    /**
     * Get the numero dossier.
     *
     * @return string|null Returns the numero dossier.
     */
    public function getNumeroDossier(): ?string {
        return $this->numeroDossier;
    }

    /**
     * Get the sens.
     *
     * @return string|null Returns the sens.
     */
    public function getSens(): ?string {
        return $this->sens;
    }

    /**
     * Get the type liaison.
     *
     * @return string|null Returns the type liaison.
     */
    public function getTypeLiaison(): ?string {
        return $this->typeLiaison;
    }

    /**
     * Set the code collab.
     *
     * @param string|null $codeCollab The code collab.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setCodeCollab(?string $codeCollab): LiaisonsHistorique {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the date liaison.
     *
     * @param DateTime|null $dateLiaison The date liaison.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setDateLiaison(?DateTime $dateLiaison): LiaisonsHistorique {
        $this->dateLiaison = $dateLiaison;
        return $this;
    }

    /**
     * Set the date retour prevue.
     *
     * @param DateTime|null $dateRetourPrevue The date retour prevue.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setDateRetourPrevue(?DateTime $dateRetourPrevue): LiaisonsHistorique {
        $this->dateRetourPrevue = $dateRetourPrevue;
        return $this;
    }

    /**
     * Set the destinataire.
     *
     * @param string|null $destinataire The destinataire.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setDestinataire(?string $destinataire): LiaisonsHistorique {
        $this->destinataire = $destinataire;
        return $this;
    }

    /**
     * Set the modules.
     *
     * @param string|null $modules The modules.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setModules(?string $modules): LiaisonsHistorique {
        $this->modules = $modules;
        return $this;
    }

    /**
     * Set the modules bloques.
     *
     * @param string|null $modulesBloques The modules bloques.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setModulesBloques(?string $modulesBloques): LiaisonsHistorique {
        $this->modulesBloques = $modulesBloques;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int|null $numUniq The num uniq.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setNumUniq(?int $numUniq): LiaisonsHistorique {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero dossier.
     *
     * @param string|null $numeroDossier The numero dossier.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setNumeroDossier(?string $numeroDossier): LiaisonsHistorique {
        $this->numeroDossier = $numeroDossier;
        return $this;
    }

    /**
     * Set the sens.
     *
     * @param string|null $sens The sens.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setSens(?string $sens): LiaisonsHistorique {
        $this->sens = $sens;
        return $this;
    }

    /**
     * Set the type liaison.
     *
     * @param string|null $typeLiaison The type liaison.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setTypeLiaison(?string $typeLiaison): LiaisonsHistorique {
        $this->typeLiaison = $typeLiaison;
        return $this;
    }
}
