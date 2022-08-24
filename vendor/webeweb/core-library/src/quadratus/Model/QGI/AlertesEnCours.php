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
 * Alertes en cours.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AlertesEnCours {

    /**
     * Ar demande.
     *
     * @var bool|null
     */
    private $arDemande;

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
     * Id alerte.
     *
     * @var int|null
     */
    private $idAlerte;

    /**
     * Texte alerte.
     *
     * @var string|null
     */
    private $texteAlerte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ar demande.
     *
     * @return bool|null Returns the ar demande.
     */
    public function getArDemande(): ?bool {
        return $this->arDemande;
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
     * Get the id alerte.
     *
     * @return int|null Returns the id alerte.
     */
    public function getIdAlerte(): ?int {
        return $this->idAlerte;
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
     * Set the ar demande.
     *
     * @param bool|null $arDemande The ar demande.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setArDemande(?bool $arDemande): AlertesEnCours {
        $this->arDemande = $arDemande;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setCodeClient(?string $codeClient): AlertesEnCours {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collab dst.
     *
     * @param string|null $codeCollabDst The code collab dst.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setCodeCollabDst(?string $codeCollabDst): AlertesEnCours {
        $this->codeCollabDst = $codeCollabDst;
        return $this;
    }

    /**
     * Set the code collab org.
     *
     * @param string|null $codeCollabOrg The code collab org.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setCodeCollabOrg(?string $codeCollabOrg): AlertesEnCours {
        $this->codeCollabOrg = $codeCollabOrg;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setDateCreation(?DateTime $dateCreation): AlertesEnCours {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date declenchement.
     *
     * @param DateTime|null $dateDeclenchement The date declenchement.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setDateDeclenchement(?DateTime $dateDeclenchement): AlertesEnCours {
        $this->dateDeclenchement = $dateDeclenchement;
        return $this;
    }

    /**
     * Set the id alerte.
     *
     * @param int|null $idAlerte The id alerte.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setIdAlerte(?int $idAlerte): AlertesEnCours {
        $this->idAlerte = $idAlerte;
        return $this;
    }

    /**
     * Set the texte alerte.
     *
     * @param string|null $texteAlerte The texte alerte.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setTexteAlerte(?string $texteAlerte): AlertesEnCours {
        $this->texteAlerte = $texteAlerte;
        return $this;
    }
}
