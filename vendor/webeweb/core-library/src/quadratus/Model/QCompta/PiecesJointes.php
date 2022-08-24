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

use DateTime;

/**
 * Pieces jointes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class PiecesJointes {

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
     * Indice.
     *
     * @var int|null
     */
    private $indice;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Nom piece.
     *
     * @var string|null
     */
    private $nomPiece;

    /**
     * Num piece.
     *
     * @var int|null
     */
    private $numPiece;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the indice.
     *
     * @return int|null Returns the indice.
     */
    public function getIndice(): ?int {
        return $this->indice;
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the nom piece.
     *
     * @return string|null Returns the nom piece.
     */
    public function getNomPiece(): ?string {
        return $this->nomPiece;
    }

    /**
     * Get the num piece.
     *
     * @return int|null Returns the num piece.
     */
    public function getNumPiece(): ?int {
        return $this->numPiece;
    }

    /**
     * Set the auteur.
     *
     * @param string|null $auteur The auteur.
     * @return PiecesJointes Returns this Pieces jointes.
     */
    public function setAuteur(?string $auteur): PiecesJointes {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return PiecesJointes Returns this Pieces jointes.
     */
    public function setDateCreation(?DateTime $dateCreation): PiecesJointes {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int|null $indice The indice.
     * @return PiecesJointes Returns this Pieces jointes.
     */
    public function setIndice(?int $indice): PiecesJointes {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return PiecesJointes Returns this Pieces jointes.
     */
    public function setLibelle(?string $libelle): PiecesJointes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the nom piece.
     *
     * @param string|null $nomPiece The nom piece.
     * @return PiecesJointes Returns this Pieces jointes.
     */
    public function setNomPiece(?string $nomPiece): PiecesJointes {
        $this->nomPiece = $nomPiece;
        return $this;
    }

    /**
     * Set the num piece.
     *
     * @param int|null $numPiece The num piece.
     * @return PiecesJointes Returns this Pieces jointes.
     */
    public function setNumPiece(?int $numPiece): PiecesJointes {
        $this->numPiece = $numPiece;
        return $this;
    }
}
