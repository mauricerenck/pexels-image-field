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
 * Commentaires paie.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class CommentairesPaie {

    /**
     * Code collabo valid.
     *
     * @var string|null
     */
    private $codeCollaboValid;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Date comm.
     *
     * @var DateTime|null
     */
    private $dateComm;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
     */
    private $dateValidationSynchro;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Id comm.
     *
     * @var int|null
     */
    private $idComm;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Type comm.
     *
     * @var string|null
     */
    private $typeComm;

    /**
     * Uniq id synchro.
     *
     * @var string|null
     */
    private $uniqIdSynchro;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code collabo valid.
     *
     * @return string|null Returns the code collabo valid.
     */
    public function getCodeCollaboValid(): ?string {
        return $this->codeCollaboValid;
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
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
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
     * Get the date comm.
     *
     * @return DateTime|null Returns the date comm.
     */
    public function getDateComm(): ?DateTime {
        return $this->dateComm;
    }

    /**
     * Get the date validation synchro.
     *
     * @return DateTime|null Returns the date validation synchro.
     */
    public function getDateValidationSynchro(): ?DateTime {
        return $this->dateValidationSynchro;
    }

    /**
     * Get the etat.
     *
     * @return string|null Returns the etat.
     */
    public function getEtat(): ?string {
        return $this->etat;
    }

    /**
     * Get the id comm.
     *
     * @return int|null Returns the id comm.
     */
    public function getIdComm(): ?int {
        return $this->idComm;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the type comm.
     *
     * @return string|null Returns the type comm.
     */
    public function getTypeComm(): ?string {
        return $this->typeComm;
    }

    /**
     * Get the uniq id synchro.
     *
     * @return string|null Returns the uniq id synchro.
     */
    public function getUniqIdSynchro(): ?string {
        return $this->uniqIdSynchro;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return CommentairesPaie Returns this Commentaires paie.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): CommentairesPaie {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return CommentairesPaie Returns this Commentaires paie.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): CommentairesPaie {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return CommentairesPaie Returns this Commentaires paie.
     */
    public function setCodeEmploye(?string $codeEmploye): CommentairesPaie {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return CommentairesPaie Returns this Commentaires paie.
     */
    public function setCommentaire(?string $commentaire): CommentairesPaie {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date comm.
     *
     * @param DateTime|null $dateComm The date comm.
     * @return CommentairesPaie Returns this Commentaires paie.
     */
    public function setDateComm(?DateTime $dateComm): CommentairesPaie {
        $this->dateComm = $dateComm;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return CommentairesPaie Returns this Commentaires paie.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): CommentairesPaie {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return CommentairesPaie Returns this Commentaires paie.
     */
    public function setEtat(?string $etat): CommentairesPaie {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the id comm.
     *
     * @param int|null $idComm The id comm.
     * @return CommentairesPaie Returns this Commentaires paie.
     */
    public function setIdComm(?int $idComm): CommentairesPaie {
        $this->idComm = $idComm;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return CommentairesPaie Returns this Commentaires paie.
     */
    public function setPeriode(?DateTime $periode): CommentairesPaie {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the type comm.
     *
     * @param string|null $typeComm The type comm.
     * @return CommentairesPaie Returns this Commentaires paie.
     */
    public function setTypeComm(?string $typeComm): CommentairesPaie {
        $this->typeComm = $typeComm;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return CommentairesPaie Returns this Commentaires paie.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): CommentairesPaie {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
