<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

/**
 * Saisie prepa entete.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class SaisiePrepaEntete {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Desactive.
     *
     * @var bool|null
     */
    private $desactive;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Saisie abs cp.
     *
     * @var bool|null
     */
    private $saisieAbsCp;

    /**
     * Saisie acompte.
     *
     * @var bool|null
     */
    private $saisieAcompte;

    /**
     * Width bord.
     *
     * @var int|null
     */
    private $widthBord;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the desactive.
     *
     * @return bool|null Returns the desactive.
     */
    public function getDesactive(): ?bool {
        return $this->desactive;
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
     * Get the saisie abs cp.
     *
     * @return bool|null Returns the saisie abs cp.
     */
    public function getSaisieAbsCp(): ?bool {
        return $this->saisieAbsCp;
    }

    /**
     * Get the saisie acompte.
     *
     * @return bool|null Returns the saisie acompte.
     */
    public function getSaisieAcompte(): ?bool {
        return $this->saisieAcompte;
    }

    /**
     * Get the width bord.
     *
     * @return int|null Returns the width bord.
     */
    public function getWidthBord(): ?int {
        return $this->widthBord;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return SaisiePrepaEntete Returns this Saisie prepa entete.
     */
    public function setCode(?string $code): SaisiePrepaEntete {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the desactive.
     *
     * @param bool|null $desactive The desactive.
     * @return SaisiePrepaEntete Returns this Saisie prepa entete.
     */
    public function setDesactive(?bool $desactive): SaisiePrepaEntete {
        $this->desactive = $desactive;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return SaisiePrepaEntete Returns this Saisie prepa entete.
     */
    public function setIntitule(?string $intitule): SaisiePrepaEntete {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the saisie abs cp.
     *
     * @param bool|null $saisieAbsCp The saisie abs cp.
     * @return SaisiePrepaEntete Returns this Saisie prepa entete.
     */
    public function setSaisieAbsCp(?bool $saisieAbsCp): SaisiePrepaEntete {
        $this->saisieAbsCp = $saisieAbsCp;
        return $this;
    }

    /**
     * Set the saisie acompte.
     *
     * @param bool|null $saisieAcompte The saisie acompte.
     * @return SaisiePrepaEntete Returns this Saisie prepa entete.
     */
    public function setSaisieAcompte(?bool $saisieAcompte): SaisiePrepaEntete {
        $this->saisieAcompte = $saisieAcompte;
        return $this;
    }

    /**
     * Set the width bord.
     *
     * @param int|null $widthBord The width bord.
     * @return SaisiePrepaEntete Returns this Saisie prepa entete.
     */
    public function setWidthBord(?int $widthBord): SaisiePrepaEntete {
        $this->widthBord = $widthBord;
        return $this;
    }
}
