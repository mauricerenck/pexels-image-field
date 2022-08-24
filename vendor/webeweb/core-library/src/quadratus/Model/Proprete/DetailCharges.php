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

/**
 * Detail charges.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DetailCharges {

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

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
     * Get the commentaire.
     *
     * @return string|null Returns the commentaire.
     */
    public function getCommentaire(): ?string {
        return $this->commentaire;
    }

    /**
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
    }

    /**
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
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
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return DetailCharges Returns this Detail charges.
     */
    public function setCommentaire(?string $commentaire): DetailCharges {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return DetailCharges Returns this Detail charges.
     */
    public function setMontant(?float $montant): DetailCharges {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return DetailCharges Returns this Detail charges.
     */
    public function setNumLigne(?int $numLigne): DetailCharges {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return DetailCharges Returns this Detail charges.
     */
    public function setUniqId(?string $uniqId): DetailCharges {
        $this->uniqId = $uniqId;
        return $this;
    }
}
