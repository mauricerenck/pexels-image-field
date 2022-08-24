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
 * Chantiers histo rev.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ChantiersHistoRev {

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
     * Code formule.
     *
     * @var string|null
     */
    private $codeFormule;

    /**
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Date revision.
     *
     * @var DateTime|null
     */
    private $dateRevision;

    /**
     * Formule.
     *
     * @var string|null
     */
    private $formule;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Num ligne rev.
     *
     * @var int|null
     */
    private $numLigneRev;

    /**
     * Periode revisee.
     *
     * @var DateTime|null
     */
    private $periodeRevisee;

    /**
     * Pourcentage.
     *
     * @var float|null
     */
    private $pourcentage;

    /**
     * Refus client.
     *
     * @var bool|null
     */
    private $refusClient;

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
     * Get the code formule.
     *
     * @return string|null Returns the code formule.
     */
    public function getCodeFormule(): ?string {
        return $this->codeFormule;
    }

    /**
     * Get the code regroupement.
     *
     * @return string|null Returns the code regroupement.
     */
    public function getCodeRegroupement(): ?string {
        return $this->codeRegroupement;
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
     * Get the date revision.
     *
     * @return DateTime|null Returns the date revision.
     */
    public function getDateRevision(): ?DateTime {
        return $this->dateRevision;
    }

    /**
     * Get the formule.
     *
     * @return string|null Returns the formule.
     */
    public function getFormule(): ?string {
        return $this->formule;
    }

    /**
     * Get the lien document.
     *
     * @return string|null Returns the lien document.
     */
    public function getLienDocument(): ?string {
        return $this->lienDocument;
    }

    /**
     * Get the num bt.
     *
     * @return int|null Returns the num bt.
     */
    public function getNumBt(): ?int {
        return $this->numBt;
    }

    /**
     * Get the num ligne rev.
     *
     * @return int|null Returns the num ligne rev.
     */
    public function getNumLigneRev(): ?int {
        return $this->numLigneRev;
    }

    /**
     * Get the periode revisee.
     *
     * @return DateTime|null Returns the periode revisee.
     */
    public function getPeriodeRevisee(): ?DateTime {
        return $this->periodeRevisee;
    }

    /**
     * Get the pourcentage.
     *
     * @return float|null Returns the pourcentage.
     */
    public function getPourcentage(): ?float {
        return $this->pourcentage;
    }

    /**
     * Get the refus client.
     *
     * @return bool|null Returns the refus client.
     */
    public function getRefusClient(): ?bool {
        return $this->refusClient;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setCodeAffaire(?string $codeAffaire): ChantiersHistoRev {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setCodeChantier(?string $codeChantier): ChantiersHistoRev {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setCodeClient(?string $codeClient): ChantiersHistoRev {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code formule.
     *
     * @param string|null $codeFormule The code formule.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setCodeFormule(?string $codeFormule): ChantiersHistoRev {
        $this->codeFormule = $codeFormule;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setCodeRegroupement(?string $codeRegroupement): ChantiersHistoRev {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setCommentaire(?string $commentaire): ChantiersHistoRev {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date revision.
     *
     * @param DateTime|null $dateRevision The date revision.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setDateRevision(?DateTime $dateRevision): ChantiersHistoRev {
        $this->dateRevision = $dateRevision;
        return $this;
    }

    /**
     * Set the formule.
     *
     * @param string|null $formule The formule.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setFormule(?string $formule): ChantiersHistoRev {
        $this->formule = $formule;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setLienDocument(?string $lienDocument): ChantiersHistoRev {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setNumBt(?int $numBt): ChantiersHistoRev {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the num ligne rev.
     *
     * @param int|null $numLigneRev The num ligne rev.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setNumLigneRev(?int $numLigneRev): ChantiersHistoRev {
        $this->numLigneRev = $numLigneRev;
        return $this;
    }

    /**
     * Set the periode revisee.
     *
     * @param DateTime|null $periodeRevisee The periode revisee.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setPeriodeRevisee(?DateTime $periodeRevisee): ChantiersHistoRev {
        $this->periodeRevisee = $periodeRevisee;
        return $this;
    }

    /**
     * Set the pourcentage.
     *
     * @param float|null $pourcentage The pourcentage.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setPourcentage(?float $pourcentage): ChantiersHistoRev {
        $this->pourcentage = $pourcentage;
        return $this;
    }

    /**
     * Set the refus client.
     *
     * @param bool|null $refusClient The refus client.
     * @return ChantiersHistoRev Returns this Chantiers histo rev.
     */
    public function setRefusClient(?bool $refusClient): ChantiersHistoRev {
        $this->refusClient = $refusClient;
        return $this;
    }
}
