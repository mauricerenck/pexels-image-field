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

use DateTime;

/**
 * Commentaire bulletins.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class CommentaireBulletins {

    /**
     * Commentaire1.
     *
     * @var string|null
     */
    private $commentaire1;

    /**
     * Commentaire2.
     *
     * @var string|null
     */
    private $commentaire2;

    /**
     * Commentaire3.
     *
     * @var string|null
     */
    private $commentaire3;

    /**
     * Commentaire4.
     *
     * @var string|null
     */
    private $commentaire4;

    /**
     * Commentaire5.
     *
     * @var string|null
     */
    private $commentaire5;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Txt commentaire rtf.
     *
     * @var string|null
     */
    private $txtCommentaireRtf;

    /**
     * Txt commentaire saisi.
     *
     * @var string|null
     */
    private $txtCommentaireSaisi;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the commentaire1.
     *
     * @return string|null Returns the commentaire1.
     */
    public function getCommentaire1(): ?string {
        return $this->commentaire1;
    }

    /**
     * Get the commentaire2.
     *
     * @return string|null Returns the commentaire2.
     */
    public function getCommentaire2(): ?string {
        return $this->commentaire2;
    }

    /**
     * Get the commentaire3.
     *
     * @return string|null Returns the commentaire3.
     */
    public function getCommentaire3(): ?string {
        return $this->commentaire3;
    }

    /**
     * Get the commentaire4.
     *
     * @return string|null Returns the commentaire4.
     */
    public function getCommentaire4(): ?string {
        return $this->commentaire4;
    }

    /**
     * Get the commentaire5.
     *
     * @return string|null Returns the commentaire5.
     */
    public function getCommentaire5(): ?string {
        return $this->commentaire5;
    }

    /**
     * Get the indice periode.
     *
     * @return int|null Returns the indice periode.
     */
    public function getIndicePeriode(): ?int {
        return $this->indicePeriode;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
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
     * Get the txt commentaire rtf.
     *
     * @return string|null Returns the txt commentaire rtf.
     */
    public function getTxtCommentaireRtf(): ?string {
        return $this->txtCommentaireRtf;
    }

    /**
     * Get the txt commentaire saisi.
     *
     * @return string|null Returns the txt commentaire saisi.
     */
    public function getTxtCommentaireSaisi(): ?string {
        return $this->txtCommentaireSaisi;
    }

    /**
     * Set the commentaire1.
     *
     * @param string|null $commentaire1 The commentaire1.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setCommentaire1(?string $commentaire1): CommentaireBulletins {
        $this->commentaire1 = $commentaire1;
        return $this;
    }

    /**
     * Set the commentaire2.
     *
     * @param string|null $commentaire2 The commentaire2.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setCommentaire2(?string $commentaire2): CommentaireBulletins {
        $this->commentaire2 = $commentaire2;
        return $this;
    }

    /**
     * Set the commentaire3.
     *
     * @param string|null $commentaire3 The commentaire3.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setCommentaire3(?string $commentaire3): CommentaireBulletins {
        $this->commentaire3 = $commentaire3;
        return $this;
    }

    /**
     * Set the commentaire4.
     *
     * @param string|null $commentaire4 The commentaire4.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setCommentaire4(?string $commentaire4): CommentaireBulletins {
        $this->commentaire4 = $commentaire4;
        return $this;
    }

    /**
     * Set the commentaire5.
     *
     * @param string|null $commentaire5 The commentaire5.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setCommentaire5(?string $commentaire5): CommentaireBulletins {
        $this->commentaire5 = $commentaire5;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setIndicePeriode(?int $indicePeriode): CommentaireBulletins {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setNumeroEmploye(?string $numeroEmploye): CommentaireBulletins {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setPeriode(?DateTime $periode): CommentaireBulletins {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the txt commentaire rtf.
     *
     * @param string|null $txtCommentaireRtf The txt commentaire rtf.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setTxtCommentaireRtf(?string $txtCommentaireRtf): CommentaireBulletins {
        $this->txtCommentaireRtf = $txtCommentaireRtf;
        return $this;
    }

    /**
     * Set the txt commentaire saisi.
     *
     * @param string|null $txtCommentaireSaisi The txt commentaire saisi.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setTxtCommentaireSaisi(?string $txtCommentaireSaisi): CommentaireBulletins {
        $this->txtCommentaireSaisi = $txtCommentaireSaisi;
        return $this;
    }
}
