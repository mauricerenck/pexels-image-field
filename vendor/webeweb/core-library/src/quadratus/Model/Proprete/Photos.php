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
 * Photos.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Photos {

    /**
     * A publier espace client.
     *
     * @var bool|null
     */
    private $aPublierEspaceClient;

    /**
     * Auteur.
     *
     * @var string|null
     */
    private $auteur;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Nom fichier id.
     *
     * @var string|null
     */
    private $nomFichierId;

    /**
     * Type id.
     *
     * @var string|null
     */
    private $typeId;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a publier espace client.
     *
     * @return bool|null Returns the a publier espace client.
     */
    public function getAPublierEspaceClient(): ?bool {
        return $this->aPublierEspaceClient;
    }

    /**
     * Get the auteur.
     *
     * @return string|null Returns the auteur.
     */
    public function getAuteur(): ?string {
        return $this->auteur;
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
     * Get the nom fichier id.
     *
     * @return string|null Returns the nom fichier id.
     */
    public function getNomFichierId(): ?string {
        return $this->nomFichierId;
    }

    /**
     * Get the type id.
     *
     * @return string|null Returns the type id.
     */
    public function getTypeId(): ?string {
        return $this->typeId;
    }

    /**
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
    }

    /**
     * Set the a publier espace client.
     *
     * @param bool|null $aPublierEspaceClient The a publier espace client.
     * @return Photos Returns this Photos.
     */
    public function setAPublierEspaceClient(?bool $aPublierEspaceClient): Photos {
        $this->aPublierEspaceClient = $aPublierEspaceClient;
        return $this;
    }

    /**
     * Set the auteur.
     *
     * @param string|null $auteur The auteur.
     * @return Photos Returns this Photos.
     */
    public function setAuteur(?string $auteur): Photos {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Photos Returns this Photos.
     */
    public function setDateCreation(?DateTime $dateCreation): Photos {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the nom fichier id.
     *
     * @param string|null $nomFichierId The nom fichier id.
     * @return Photos Returns this Photos.
     */
    public function setNomFichierId(?string $nomFichierId): Photos {
        $this->nomFichierId = $nomFichierId;
        return $this;
    }

    /**
     * Set the type id.
     *
     * @param string|null $typeId The type id.
     * @return Photos Returns this Photos.
     */
    public function setTypeId(?string $typeId): Photos {
        $this->typeId = $typeId;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return Photos Returns this Photos.
     */
    public function setUniqId(?string $uniqId): Photos {
        $this->uniqId = $uniqId;
        return $this;
    }
}
