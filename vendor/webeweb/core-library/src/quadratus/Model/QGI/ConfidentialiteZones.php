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
 * Confidentialite zones.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ConfidentialiteZones {

    /**
     * Champ.
     *
     * @var string|null
     */
    private $champ;

    /**
     * Chapitre.
     *
     * @var string|null
     */
    private $chapitre;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the champ.
     *
     * @return string|null Returns the champ.
     */
    public function getChamp(): ?string {
        return $this->champ;
    }

    /**
     * Get the chapitre.
     *
     * @return string|null Returns the chapitre.
     */
    public function getChapitre(): ?string {
        return $this->chapitre;
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
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the champ.
     *
     * @param string|null $champ The champ.
     * @return ConfidentialiteZones Returns this Confidentialite zones.
     */
    public function setChamp(?string $champ): ConfidentialiteZones {
        $this->champ = $champ;
        return $this;
    }

    /**
     * Set the chapitre.
     *
     * @param string|null $chapitre The chapitre.
     * @return ConfidentialiteZones Returns this Confidentialite zones.
     */
    public function setChapitre(?string $chapitre): ConfidentialiteZones {
        $this->chapitre = $chapitre;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return ConfidentialiteZones Returns this Confidentialite zones.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): ConfidentialiteZones {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return ConfidentialiteZones Returns this Confidentialite zones.
     */
    public function setType(?string $type): ConfidentialiteZones {
        $this->type = $type;
        return $this;
    }
}
