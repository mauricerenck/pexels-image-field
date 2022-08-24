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
 * Pieces jointes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PiecesJointes {

    /**
     * A publier espace client.
     *
     * @var bool|null
     */
    private $aPublierEspaceClient;

    /**
     * A publier web.
     *
     * @var bool|null
     */
    private $aPublierWeb;

    /**
     * Archive.
     *
     * @var bool|null
     */
    private $archive;

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
     * Nb doc attache.
     *
     * @var int|null
     */
    private $nbDocAttache;

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
     * Get the a publier espace client.
     *
     * @return bool|null Returns the a publier espace client.
     */
    public function getAPublierEspaceClient(): ?bool {
        return $this->aPublierEspaceClient;
    }

    /**
     * Get the a publier web.
     *
     * @return bool|null Returns the a publier web.
     */
    public function getAPublierWeb(): ?bool {
        return $this->aPublierWeb;
    }

    /**
     * Get the archive.
     *
     * @return bool|null Returns the archive.
     */
    public function getArchive(): ?bool {
        return $this->archive;
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
     * Get the nb doc attache.
     *
     * @return int|null Returns the nb doc attache.
     */
    public function getNbDocAttache(): ?int {
        return $this->nbDocAttache;
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
     * Set the a publier espace client.
     *
     * @param bool|null $aPublierEspaceClient The a publier espace client.
     * @return PiecesJointes Returns this Pieces jointes.
     */
    public function setAPublierEspaceClient(?bool $aPublierEspaceClient): PiecesJointes {
        $this->aPublierEspaceClient = $aPublierEspaceClient;
        return $this;
    }

    /**
     * Set the a publier web.
     *
     * @param bool|null $aPublierWeb The a publier web.
     * @return PiecesJointes Returns this Pieces jointes.
     */
    public function setAPublierWeb(?bool $aPublierWeb): PiecesJointes {
        $this->aPublierWeb = $aPublierWeb;
        return $this;
    }

    /**
     * Set the archive.
     *
     * @param bool|null $archive The archive.
     * @return PiecesJointes Returns this Pieces jointes.
     */
    public function setArchive(?bool $archive): PiecesJointes {
        $this->archive = $archive;
        return $this;
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
     * Set the nb doc attache.
     *
     * @param int|null $nbDocAttache The nb doc attache.
     * @return PiecesJointes Returns this Pieces jointes.
     */
    public function setNbDocAttache(?int $nbDocAttache): PiecesJointes {
        $this->nbDocAttache = $nbDocAttache;
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
