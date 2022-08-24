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
 * Alertes historique.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AlertesHistorique {

    /**
     * Ar envoye.
     *
     * @var bool|null
     */
    private $arEnvoye;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code collab dst.
     *
     * @var string|null
     */
    private $codeCollabDst;

    /**
     * Code collab org.
     *
     * @var string|null
     */
    private $codeCollabOrg;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date declenchement.
     *
     * @var DateTime|null
     */
    private $dateDeclenchement;

    /**
     * Date reponse.
     *
     * @var DateTime|null
     */
    private $dateReponse;

    /**
     * Id alerte histo.
     *
     * @var int|null
     */
    private $idAlerteHisto;

    /**
     * Texte alerte.
     *
     * @var string|null
     */
    private $texteAlerte;

    /**
     * Texte reponse.
     *
     * @var string|null
     */
    private $texteReponse;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ar envoye.
     *
     * @return bool|null Returns the ar envoye.
     */
    public function getArEnvoye(): ?bool {
        return $this->arEnvoye;
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
     * Get the code collab dst.
     *
     * @return string|null Returns the code collab dst.
     */
    public function getCodeCollabDst(): ?string {
        return $this->codeCollabDst;
    }

    /**
     * Get the code collab org.
     *
     * @return string|null Returns the code collab org.
     */
    public function getCodeCollabOrg(): ?string {
        return $this->codeCollabOrg;
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
     * Get the date declenchement.
     *
     * @return DateTime|null Returns the date declenchement.
     */
    public function getDateDeclenchement(): ?DateTime {
        return $this->dateDeclenchement;
    }

    /**
     * Get the date reponse.
     *
     * @return DateTime|null Returns the date reponse.
     */
    public function getDateReponse(): ?DateTime {
        return $this->dateReponse;
    }

    /**
     * Get the id alerte histo.
     *
     * @return int|null Returns the id alerte histo.
     */
    public function getIdAlerteHisto(): ?int {
        return $this->idAlerteHisto;
    }

    /**
     * Get the texte alerte.
     *
     * @return string|null Returns the texte alerte.
     */
    public function getTexteAlerte(): ?string {
        return $this->texteAlerte;
    }

    /**
     * Get the texte reponse.
     *
     * @return string|null Returns the texte reponse.
     */
    public function getTexteReponse(): ?string {
        return $this->texteReponse;
    }

    /**
     * Set the ar envoye.
     *
     * @param bool|null $arEnvoye The ar envoye.
     * @return AlertesHistorique Returns this Alertes historique.
     */
    public function setArEnvoye(?bool $arEnvoye): AlertesHistorique {
        $this->arEnvoye = $arEnvoye;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return AlertesHistorique Returns this Alertes historique.
     */
    public function setCodeClient(?string $codeClient): AlertesHistorique {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collab dst.
     *
     * @param string|null $codeCollabDst The code collab dst.
     * @return AlertesHistorique Returns this Alertes historique.
     */
    public function setCodeCollabDst(?string $codeCollabDst): AlertesHistorique {
        $this->codeCollabDst = $codeCollabDst;
        return $this;
    }

    /**
     * Set the code collab org.
     *
     * @param string|null $codeCollabOrg The code collab org.
     * @return AlertesHistorique Returns this Alertes historique.
     */
    public function setCodeCollabOrg(?string $codeCollabOrg): AlertesHistorique {
        $this->codeCollabOrg = $codeCollabOrg;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return AlertesHistorique Returns this Alertes historique.
     */
    public function setDateCreation(?DateTime $dateCreation): AlertesHistorique {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date declenchement.
     *
     * @param DateTime|null $dateDeclenchement The date declenchement.
     * @return AlertesHistorique Returns this Alertes historique.
     */
    public function setDateDeclenchement(?DateTime $dateDeclenchement): AlertesHistorique {
        $this->dateDeclenchement = $dateDeclenchement;
        return $this;
    }

    /**
     * Set the date reponse.
     *
     * @param DateTime|null $dateReponse The date reponse.
     * @return AlertesHistorique Returns this Alertes historique.
     */
    public function setDateReponse(?DateTime $dateReponse): AlertesHistorique {
        $this->dateReponse = $dateReponse;
        return $this;
    }

    /**
     * Set the id alerte histo.
     *
     * @param int|null $idAlerteHisto The id alerte histo.
     * @return AlertesHistorique Returns this Alertes historique.
     */
    public function setIdAlerteHisto(?int $idAlerteHisto): AlertesHistorique {
        $this->idAlerteHisto = $idAlerteHisto;
        return $this;
    }

    /**
     * Set the texte alerte.
     *
     * @param string|null $texteAlerte The texte alerte.
     * @return AlertesHistorique Returns this Alertes historique.
     */
    public function setTexteAlerte(?string $texteAlerte): AlertesHistorique {
        $this->texteAlerte = $texteAlerte;
        return $this;
    }

    /**
     * Set the texte reponse.
     *
     * @param string|null $texteReponse The texte reponse.
     * @return AlertesHistorique Returns this Alertes historique.
     */
    public function setTexteReponse(?string $texteReponse): AlertesHistorique {
        $this->texteReponse = $texteReponse;
        return $this;
    }
}
