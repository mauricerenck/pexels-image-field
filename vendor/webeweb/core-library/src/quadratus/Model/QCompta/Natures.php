<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

/**
 * Natures.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Natures {

    /**
     * Chapitre affect.
     *
     * @var string|null
     */
    private $chapitreAffect;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Mode calcul repart.
     *
     * @var string|null
     */
    private $modeCalculRepart;

    /**
     * Nature inactive.
     *
     * @var bool|null
     */
    private $natureInactive;

    /**
     * Ordre edition.
     *
     * @var int|null
     */
    private $ordreEdition;

    /**
     * Suivi annee recolte.
     *
     * @var bool|null
     */
    private $suiviAnneeRecolte;

    /**
     * Suivi quantite.
     *
     * @var string|null
     */
    private $suiviQuantite;

    /**
     * Type nature.
     *
     * @var string|null
     */
    private $typeNature;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the chapitre affect.
     *
     * @return string|null Returns the chapitre affect.
     */
    public function getChapitreAffect(): ?string {
        return $this->chapitreAffect;
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the mode calcul repart.
     *
     * @return string|null Returns the mode calcul repart.
     */
    public function getModeCalculRepart(): ?string {
        return $this->modeCalculRepart;
    }

    /**
     * Get the nature inactive.
     *
     * @return bool|null Returns the nature inactive.
     */
    public function getNatureInactive(): ?bool {
        return $this->natureInactive;
    }

    /**
     * Get the ordre edition.
     *
     * @return int|null Returns the ordre edition.
     */
    public function getOrdreEdition(): ?int {
        return $this->ordreEdition;
    }

    /**
     * Get the suivi annee recolte.
     *
     * @return bool|null Returns the suivi annee recolte.
     */
    public function getSuiviAnneeRecolte(): ?bool {
        return $this->suiviAnneeRecolte;
    }

    /**
     * Get the suivi quantite.
     *
     * @return string|null Returns the suivi quantite.
     */
    public function getSuiviQuantite(): ?string {
        return $this->suiviQuantite;
    }

    /**
     * Get the type nature.
     *
     * @return string|null Returns the type nature.
     */
    public function getTypeNature(): ?string {
        return $this->typeNature;
    }

    /**
     * Set the chapitre affect.
     *
     * @param string|null $chapitreAffect The chapitre affect.
     * @return Natures Returns this Natures.
     */
    public function setChapitreAffect(?string $chapitreAffect): Natures {
        $this->chapitreAffect = $chapitreAffect;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Natures Returns this Natures.
     */
    public function setCode(?string $code): Natures {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Natures Returns this Natures.
     */
    public function setIntitule(?string $intitule): Natures {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the mode calcul repart.
     *
     * @param string|null $modeCalculRepart The mode calcul repart.
     * @return Natures Returns this Natures.
     */
    public function setModeCalculRepart(?string $modeCalculRepart): Natures {
        $this->modeCalculRepart = $modeCalculRepart;
        return $this;
    }

    /**
     * Set the nature inactive.
     *
     * @param bool|null $natureInactive The nature inactive.
     * @return Natures Returns this Natures.
     */
    public function setNatureInactive(?bool $natureInactive): Natures {
        $this->natureInactive = $natureInactive;
        return $this;
    }

    /**
     * Set the ordre edition.
     *
     * @param int|null $ordreEdition The ordre edition.
     * @return Natures Returns this Natures.
     */
    public function setOrdreEdition(?int $ordreEdition): Natures {
        $this->ordreEdition = $ordreEdition;
        return $this;
    }

    /**
     * Set the suivi annee recolte.
     *
     * @param bool|null $suiviAnneeRecolte The suivi annee recolte.
     * @return Natures Returns this Natures.
     */
    public function setSuiviAnneeRecolte(?bool $suiviAnneeRecolte): Natures {
        $this->suiviAnneeRecolte = $suiviAnneeRecolte;
        return $this;
    }

    /**
     * Set the suivi quantite.
     *
     * @param string|null $suiviQuantite The suivi quantite.
     * @return Natures Returns this Natures.
     */
    public function setSuiviQuantite(?string $suiviQuantite): Natures {
        $this->suiviQuantite = $suiviQuantite;
        return $this;
    }

    /**
     * Set the type nature.
     *
     * @param string|null $typeNature The type nature.
     * @return Natures Returns this Natures.
     */
    public function setTypeNature(?string $typeNature): Natures {
        $this->typeNature = $typeNature;
        return $this;
    }
}
