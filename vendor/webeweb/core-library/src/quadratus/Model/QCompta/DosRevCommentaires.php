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
 * Dos rev commentaires.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class DosRevCommentaires {

    /**
     * Bloquant.
     *
     * @var bool|null
     */
    private $bloquant;

    /**
     * Code coll modif question.
     *
     * @var string|null
     */
    private $codeCollModifQuestion;

    /**
     * Code coll modif reponse.
     *
     * @var string|null
     */
    private $codeCollModifReponse;

    /**
     * Code coll question.
     *
     * @var string|null
     */
    private $codeCollQuestion;

    /**
     * Code coll reponse.
     *
     * @var string|null
     */
    private $codeCollReponse;

    /**
     * Cpt comment.
     *
     * @var int|null
     */
    private $cptComment;

    /**
     * Dt creation question.
     *
     * @var DateTime|null
     */
    private $dtCreationQuestion;

    /**
     * Dt creation reponse.
     *
     * @var DateTime|null
     */
    private $dtCreationReponse;

    /**
     * Dt modif question.
     *
     * @var DateTime|null
     */
    private $dtModifQuestion;

    /**
     * Dt modif reponse.
     *
     * @var DateTime|null
     */
    private $dtModifReponse;

    /**
     * Dt transfert da.
     *
     * @var DateTime|null
     */
    private $dtTransfertDa;

    /**
     * En attente reponse.
     *
     * @var bool|null
     */
    private $enAttenteReponse;

    /**
     * Need answer.
     *
     * @var bool|null
     */
    private $needAnswer;

    /**
     * Niveau.
     *
     * @var string|null
     */
    private $niveau;

    /**
     * Periode rev.
     *
     * @var DateTime|null
     */
    private $periodeRev;

    /**
     * Permanent.
     *
     * @var bool|null
     */
    private $permanent;

    /**
     * Txt question.
     *
     * @var string|null
     */
    private $txtQuestion;

    /**
     * Txt reponse.
     *
     * @var string|null
     */
    private $txtReponse;

    /**
     * Type.
     *
     * @var int|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the bloquant.
     *
     * @return bool|null Returns the bloquant.
     */
    public function getBloquant(): ?bool {
        return $this->bloquant;
    }

    /**
     * Get the code coll modif question.
     *
     * @return string|null Returns the code coll modif question.
     */
    public function getCodeCollModifQuestion(): ?string {
        return $this->codeCollModifQuestion;
    }

    /**
     * Get the code coll modif reponse.
     *
     * @return string|null Returns the code coll modif reponse.
     */
    public function getCodeCollModifReponse(): ?string {
        return $this->codeCollModifReponse;
    }

    /**
     * Get the code coll question.
     *
     * @return string|null Returns the code coll question.
     */
    public function getCodeCollQuestion(): ?string {
        return $this->codeCollQuestion;
    }

    /**
     * Get the code coll reponse.
     *
     * @return string|null Returns the code coll reponse.
     */
    public function getCodeCollReponse(): ?string {
        return $this->codeCollReponse;
    }

    /**
     * Get the cpt comment.
     *
     * @return int|null Returns the cpt comment.
     */
    public function getCptComment(): ?int {
        return $this->cptComment;
    }

    /**
     * Get the dt creation question.
     *
     * @return DateTime|null Returns the dt creation question.
     */
    public function getDtCreationQuestion(): ?DateTime {
        return $this->dtCreationQuestion;
    }

    /**
     * Get the dt creation reponse.
     *
     * @return DateTime|null Returns the dt creation reponse.
     */
    public function getDtCreationReponse(): ?DateTime {
        return $this->dtCreationReponse;
    }

    /**
     * Get the dt modif question.
     *
     * @return DateTime|null Returns the dt modif question.
     */
    public function getDtModifQuestion(): ?DateTime {
        return $this->dtModifQuestion;
    }

    /**
     * Get the dt modif reponse.
     *
     * @return DateTime|null Returns the dt modif reponse.
     */
    public function getDtModifReponse(): ?DateTime {
        return $this->dtModifReponse;
    }

    /**
     * Get the dt transfert da.
     *
     * @return DateTime|null Returns the dt transfert da.
     */
    public function getDtTransfertDa(): ?DateTime {
        return $this->dtTransfertDa;
    }

    /**
     * Get the en attente reponse.
     *
     * @return bool|null Returns the en attente reponse.
     */
    public function getEnAttenteReponse(): ?bool {
        return $this->enAttenteReponse;
    }

    /**
     * Get the need answer.
     *
     * @return bool|null Returns the need answer.
     */
    public function getNeedAnswer(): ?bool {
        return $this->needAnswer;
    }

    /**
     * Get the niveau.
     *
     * @return string|null Returns the niveau.
     */
    public function getNiveau(): ?string {
        return $this->niveau;
    }

    /**
     * Get the periode rev.
     *
     * @return DateTime|null Returns the periode rev.
     */
    public function getPeriodeRev(): ?DateTime {
        return $this->periodeRev;
    }

    /**
     * Get the permanent.
     *
     * @return bool|null Returns the permanent.
     */
    public function getPermanent(): ?bool {
        return $this->permanent;
    }

    /**
     * Get the txt question.
     *
     * @return string|null Returns the txt question.
     */
    public function getTxtQuestion(): ?string {
        return $this->txtQuestion;
    }

    /**
     * Get the txt reponse.
     *
     * @return string|null Returns the txt reponse.
     */
    public function getTxtReponse(): ?string {
        return $this->txtReponse;
    }

    /**
     * Get the type.
     *
     * @return int|null Returns the type.
     */
    public function getType(): ?int {
        return $this->type;
    }

    /**
     * Set the bloquant.
     *
     * @param bool|null $bloquant The bloquant.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setBloquant(?bool $bloquant): DosRevCommentaires {
        $this->bloquant = $bloquant;
        return $this;
    }

    /**
     * Set the code coll modif question.
     *
     * @param string|null $codeCollModifQuestion The code coll modif question.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setCodeCollModifQuestion(?string $codeCollModifQuestion): DosRevCommentaires {
        $this->codeCollModifQuestion = $codeCollModifQuestion;
        return $this;
    }

    /**
     * Set the code coll modif reponse.
     *
     * @param string|null $codeCollModifReponse The code coll modif reponse.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setCodeCollModifReponse(?string $codeCollModifReponse): DosRevCommentaires {
        $this->codeCollModifReponse = $codeCollModifReponse;
        return $this;
    }

    /**
     * Set the code coll question.
     *
     * @param string|null $codeCollQuestion The code coll question.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setCodeCollQuestion(?string $codeCollQuestion): DosRevCommentaires {
        $this->codeCollQuestion = $codeCollQuestion;
        return $this;
    }

    /**
     * Set the code coll reponse.
     *
     * @param string|null $codeCollReponse The code coll reponse.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setCodeCollReponse(?string $codeCollReponse): DosRevCommentaires {
        $this->codeCollReponse = $codeCollReponse;
        return $this;
    }

    /**
     * Set the cpt comment.
     *
     * @param int|null $cptComment The cpt comment.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setCptComment(?int $cptComment): DosRevCommentaires {
        $this->cptComment = $cptComment;
        return $this;
    }

    /**
     * Set the dt creation question.
     *
     * @param DateTime|null $dtCreationQuestion The dt creation question.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setDtCreationQuestion(?DateTime $dtCreationQuestion): DosRevCommentaires {
        $this->dtCreationQuestion = $dtCreationQuestion;
        return $this;
    }

    /**
     * Set the dt creation reponse.
     *
     * @param DateTime|null $dtCreationReponse The dt creation reponse.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setDtCreationReponse(?DateTime $dtCreationReponse): DosRevCommentaires {
        $this->dtCreationReponse = $dtCreationReponse;
        return $this;
    }

    /**
     * Set the dt modif question.
     *
     * @param DateTime|null $dtModifQuestion The dt modif question.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setDtModifQuestion(?DateTime $dtModifQuestion): DosRevCommentaires {
        $this->dtModifQuestion = $dtModifQuestion;
        return $this;
    }

    /**
     * Set the dt modif reponse.
     *
     * @param DateTime|null $dtModifReponse The dt modif reponse.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setDtModifReponse(?DateTime $dtModifReponse): DosRevCommentaires {
        $this->dtModifReponse = $dtModifReponse;
        return $this;
    }

    /**
     * Set the dt transfert da.
     *
     * @param DateTime|null $dtTransfertDa The dt transfert da.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setDtTransfertDa(?DateTime $dtTransfertDa): DosRevCommentaires {
        $this->dtTransfertDa = $dtTransfertDa;
        return $this;
    }

    /**
     * Set the en attente reponse.
     *
     * @param bool|null $enAttenteReponse The en attente reponse.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setEnAttenteReponse(?bool $enAttenteReponse): DosRevCommentaires {
        $this->enAttenteReponse = $enAttenteReponse;
        return $this;
    }

    /**
     * Set the need answer.
     *
     * @param bool|null $needAnswer The need answer.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setNeedAnswer(?bool $needAnswer): DosRevCommentaires {
        $this->needAnswer = $needAnswer;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string|null $niveau The niveau.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setNiveau(?string $niveau): DosRevCommentaires {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the periode rev.
     *
     * @param DateTime|null $periodeRev The periode rev.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setPeriodeRev(?DateTime $periodeRev): DosRevCommentaires {
        $this->periodeRev = $periodeRev;
        return $this;
    }

    /**
     * Set the permanent.
     *
     * @param bool|null $permanent The permanent.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setPermanent(?bool $permanent): DosRevCommentaires {
        $this->permanent = $permanent;
        return $this;
    }

    /**
     * Set the txt question.
     *
     * @param string|null $txtQuestion The txt question.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setTxtQuestion(?string $txtQuestion): DosRevCommentaires {
        $this->txtQuestion = $txtQuestion;
        return $this;
    }

    /**
     * Set the txt reponse.
     *
     * @param string|null $txtReponse The txt reponse.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setTxtReponse(?string $txtReponse): DosRevCommentaires {
        $this->txtReponse = $txtReponse;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int|null $type The type.
     * @return DosRevCommentaires Returns this Dos rev commentaires.
     */
    public function setType(?int $type): DosRevCommentaires {
        $this->type = $type;
        return $this;
    }
}
