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
 * Chantiers reclamations employes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ChantiersReclamationsEmployes {

    /**
     * Alerte.
     *
     * @var bool|null
     */
    private $alerte;

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
     * Date alerte paie.
     *
     * @var DateTime|null
     */
    private $dateAlertePaie;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Niveau.
     *
     * @var string|null
     */
    private $niveau;

    /**
     * Numero reclam.
     *
     * @var int|null
     */
    private $numeroReclam;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the alerte.
     *
     * @return bool|null Returns the alerte.
     */
    public function getAlerte(): ?bool {
        return $this->alerte;
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
     * Get the date alerte paie.
     *
     * @return DateTime|null Returns the date alerte paie.
     */
    public function getDateAlertePaie(): ?DateTime {
        return $this->dateAlertePaie;
    }

    /**
     * Get the lien document.
     *
     * @return string|null Returns the lien document.
     */
    public function getLienDocument(): ?string {
        return $this->lienDocument;
    }

    /**
     * Get the niveau.
     *
     * @return string|null Returns the niveau.
     */
    public function getNiveau(): ?string {
        return $this->niveau;
    }

    /**
     * Get the numero reclam.
     *
     * @return int|null Returns the numero reclam.
     */
    public function getNumeroReclam(): ?int {
        return $this->numeroReclam;
    }

    /**
     * Set the alerte.
     *
     * @param bool|null $alerte The alerte.
     * @return ChantiersReclamationsEmployes Returns this Chantiers reclamations employes.
     */
    public function setAlerte(?bool $alerte): ChantiersReclamationsEmployes {
        $this->alerte = $alerte;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return ChantiersReclamationsEmployes Returns this Chantiers reclamations employes.
     */
    public function setCodeAffaire(?string $codeAffaire): ChantiersReclamationsEmployes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return ChantiersReclamationsEmployes Returns this Chantiers reclamations employes.
     */
    public function setCodeChantier(?string $codeChantier): ChantiersReclamationsEmployes {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ChantiersReclamationsEmployes Returns this Chantiers reclamations employes.
     */
    public function setCodeClient(?string $codeClient): ChantiersReclamationsEmployes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return ChantiersReclamationsEmployes Returns this Chantiers reclamations employes.
     */
    public function setCodeEmploye(?string $codeEmploye): ChantiersReclamationsEmployes {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date alerte paie.
     *
     * @param DateTime|null $dateAlertePaie The date alerte paie.
     * @return ChantiersReclamationsEmployes Returns this Chantiers reclamations employes.
     */
    public function setDateAlertePaie(?DateTime $dateAlertePaie): ChantiersReclamationsEmployes {
        $this->dateAlertePaie = $dateAlertePaie;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return ChantiersReclamationsEmployes Returns this Chantiers reclamations employes.
     */
    public function setLienDocument(?string $lienDocument): ChantiersReclamationsEmployes {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string|null $niveau The niveau.
     * @return ChantiersReclamationsEmployes Returns this Chantiers reclamations employes.
     */
    public function setNiveau(?string $niveau): ChantiersReclamationsEmployes {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the numero reclam.
     *
     * @param int|null $numeroReclam The numero reclam.
     * @return ChantiersReclamationsEmployes Returns this Chantiers reclamations employes.
     */
    public function setNumeroReclam(?int $numeroReclam): ChantiersReclamationsEmployes {
        $this->numeroReclam = $numeroReclam;
        return $this;
    }
}
