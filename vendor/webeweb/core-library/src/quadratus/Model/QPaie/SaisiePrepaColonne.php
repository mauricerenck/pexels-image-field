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
 * Saisie prepa colonne.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class SaisiePrepaColonne {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Intit col.
     *
     * @var string|null
     */
    private $intitCol;

    /**
     * Ligne abondement.
     *
     * @var string|null
     */
    private $ligneAbondement;

    /**
     * Num col.
     *
     * @var string|null
     */
    private $numCol;

    /**
     * Width.
     *
     * @var int|null
     */
    private $width;

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
     * Get the code libelle.
     *
     * @return string|null Returns the code libelle.
     */
    public function getCodeLibelle(): ?string {
        return $this->codeLibelle;
    }

    /**
     * Get the commentaire.
     *
     * @return string|null Returns the commentaire.
     */
    public function getCommentaire(): ?string {
        return $this->commentaire;
    }

    /**
     * Get the intit col.
     *
     * @return string|null Returns the intit col.
     */
    public function getIntitCol(): ?string {
        return $this->intitCol;
    }

    /**
     * Get the ligne abondement.
     *
     * @return string|null Returns the ligne abondement.
     */
    public function getLigneAbondement(): ?string {
        return $this->ligneAbondement;
    }

    /**
     * Get the num col.
     *
     * @return string|null Returns the num col.
     */
    public function getNumCol(): ?string {
        return $this->numCol;
    }

    /**
     * Get the width.
     *
     * @return int|null Returns the width.
     */
    public function getWidth(): ?int {
        return $this->width;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return SaisiePrepaColonne Returns this Saisie prepa colonne.
     */
    public function setCode(?string $code): SaisiePrepaColonne {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return SaisiePrepaColonne Returns this Saisie prepa colonne.
     */
    public function setCodeLibelle(?string $codeLibelle): SaisiePrepaColonne {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return SaisiePrepaColonne Returns this Saisie prepa colonne.
     */
    public function setCommentaire(?string $commentaire): SaisiePrepaColonne {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the intit col.
     *
     * @param string|null $intitCol The intit col.
     * @return SaisiePrepaColonne Returns this Saisie prepa colonne.
     */
    public function setIntitCol(?string $intitCol): SaisiePrepaColonne {
        $this->intitCol = $intitCol;
        return $this;
    }

    /**
     * Set the ligne abondement.
     *
     * @param string|null $ligneAbondement The ligne abondement.
     * @return SaisiePrepaColonne Returns this Saisie prepa colonne.
     */
    public function setLigneAbondement(?string $ligneAbondement): SaisiePrepaColonne {
        $this->ligneAbondement = $ligneAbondement;
        return $this;
    }

    /**
     * Set the num col.
     *
     * @param string|null $numCol The num col.
     * @return SaisiePrepaColonne Returns this Saisie prepa colonne.
     */
    public function setNumCol(?string $numCol): SaisiePrepaColonne {
        $this->numCol = $numCol;
        return $this;
    }

    /**
     * Set the width.
     *
     * @param int|null $width The width.
     * @return SaisiePrepaColonne Returns this Saisie prepa colonne.
     */
    public function setWidth(?int $width): SaisiePrepaColonne {
        $this->width = $width;
        return $this;
    }
}
