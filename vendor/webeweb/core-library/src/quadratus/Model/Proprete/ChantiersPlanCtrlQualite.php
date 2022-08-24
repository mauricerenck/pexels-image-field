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
 * Chantiers plan ctrl qualite.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ChantiersPlanCtrlQualite {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

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
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Date prevue.
     *
     * @var DateTime|null
     */
    private $datePrevue;

    /**
     * Date reelle.
     *
     * @var DateTime|null
     */
    private $dateReelle;

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
     * Note globale.
     *
     * @var float|null
     */
    private $noteGlobale;

    /**
     * Numero reclam.
     *
     * @var int|null
     */
    private $numeroReclam;

    /**
     * Realise par fcq.
     *
     * @var bool|null
     */
    private $realiseParFcq;

    /**
     * Type controle.
     *
     * @var string|null
     */
    private $typeControle;

    /**
     * Uniq id noeud.
     *
     * @var string|null
     */
    private $uniqIdNoeud;

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
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
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
     * Get the commentaire.
     *
     * @return string|null Returns the commentaire.
     */
    public function getCommentaire(): ?string {
        return $this->commentaire;
    }

    /**
     * Get the date prevue.
     *
     * @return DateTime|null Returns the date prevue.
     */
    public function getDatePrevue(): ?DateTime {
        return $this->datePrevue;
    }

    /**
     * Get the date reelle.
     *
     * @return DateTime|null Returns the date reelle.
     */
    public function getDateReelle(): ?DateTime {
        return $this->dateReelle;
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
     * Get the note globale.
     *
     * @return float|null Returns the note globale.
     */
    public function getNoteGlobale(): ?float {
        return $this->noteGlobale;
    }

    /**
     * Get the numero reclam.
     *
     * @return int|null Returns the numero reclam.
     */
    public function getNumeroReclam(): ?int {
        return $this->numeroReclam;
    }

    /**
     * Get the realise par fcq.
     *
     * @return bool|null Returns the realise par fcq.
     */
    public function getRealiseParFcq(): ?bool {
        return $this->realiseParFcq;
    }

    /**
     * Get the type controle.
     *
     * @return string|null Returns the type controle.
     */
    public function getTypeControle(): ?string {
        return $this->typeControle;
    }

    /**
     * Get the uniq id noeud.
     *
     * @return string|null Returns the uniq id noeud.
     */
    public function getUniqIdNoeud(): ?string {
        return $this->uniqIdNoeud;
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
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setCodeAffaire(?string $codeAffaire): ChantiersPlanCtrlQualite {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setCodeChantier(?string $codeChantier): ChantiersPlanCtrlQualite {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setCodeClient(?string $codeClient): ChantiersPlanCtrlQualite {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string|null $codeCollaboValid The code collabo valid.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setCodeCollaboValid(?string $codeCollaboValid): ChantiersPlanCtrlQualite {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): ChantiersPlanCtrlQualite {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setCommentaire(?string $commentaire): ChantiersPlanCtrlQualite {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date prevue.
     *
     * @param DateTime|null $datePrevue The date prevue.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setDatePrevue(?DateTime $datePrevue): ChantiersPlanCtrlQualite {
        $this->datePrevue = $datePrevue;
        return $this;
    }

    /**
     * Set the date reelle.
     *
     * @param DateTime|null $dateReelle The date reelle.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setDateReelle(?DateTime $dateReelle): ChantiersPlanCtrlQualite {
        $this->dateReelle = $dateReelle;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setDateValidationSynchro(?DateTime $dateValidationSynchro): ChantiersPlanCtrlQualite {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setEtat(?string $etat): ChantiersPlanCtrlQualite {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the note globale.
     *
     * @param float|null $noteGlobale The note globale.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setNoteGlobale(?float $noteGlobale): ChantiersPlanCtrlQualite {
        $this->noteGlobale = $noteGlobale;
        return $this;
    }

    /**
     * Set the numero reclam.
     *
     * @param int|null $numeroReclam The numero reclam.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setNumeroReclam(?int $numeroReclam): ChantiersPlanCtrlQualite {
        $this->numeroReclam = $numeroReclam;
        return $this;
    }

    /**
     * Set the realise par fcq.
     *
     * @param bool|null $realiseParFcq The realise par fcq.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setRealiseParFcq(?bool $realiseParFcq): ChantiersPlanCtrlQualite {
        $this->realiseParFcq = $realiseParFcq;
        return $this;
    }

    /**
     * Set the type controle.
     *
     * @param string|null $typeControle The type controle.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setTypeControle(?string $typeControle): ChantiersPlanCtrlQualite {
        $this->typeControle = $typeControle;
        return $this;
    }

    /**
     * Set the uniq id noeud.
     *
     * @param string|null $uniqIdNoeud The uniq id noeud.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setUniqIdNoeud(?string $uniqIdNoeud): ChantiersPlanCtrlQualite {
        $this->uniqIdNoeud = $uniqIdNoeud;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string|null $uniqIdSynchro The uniq id synchro.
     * @return ChantiersPlanCtrlQualite Returns this Chantiers plan ctrl qualite.
     */
    public function setUniqIdSynchro(?string $uniqIdSynchro): ChantiersPlanCtrlQualite {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
