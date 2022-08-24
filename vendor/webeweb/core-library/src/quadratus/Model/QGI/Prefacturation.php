<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

use DateTime;

/**
 * Prefacturation.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Prefacturation {

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code mission.
     *
     * @var string|null
     */
    private $codeMission;

    /**
     * Code phase.
     *
     * @var string|null
     */
    private $codePhase;

    /**
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Date saisie.
     *
     * @var DateTime|null
     */
    private $dateSaisie;

    /**
     * Date sys saisie.
     *
     * @var DateTime|null
     */
    private $dateSysSaisie;

    /**
     * Facturable.
     *
     * @var bool|null
     */
    private $facturable;

    /**
     * Id prefacturation.
     *
     * @var int|null
     */
    private $idPrefacturation;

    /**
     * Is transf.
     *
     * @var bool|null
     */
    private $isTransf;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Monnaie.
     *
     * @var string|null
     */
    private $monnaie;

    /**
     * Pu.
     *
     * @var float|null
     */
    private $pu;

    /**
     * Qte.
     *
     * @var float|null
     */
    private $qte;

    /**
     * Uniq id facture.
     *
     * @var string|null
     */
    private $uniqIdFacture;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code article.
     *
     * @return string|null Returns the code article.
     */
    public function getCodeArticle(): ?string {
        return $this->codeArticle;
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
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code mission.
     *
     * @return string|null Returns the code mission.
     */
    public function getCodeMission(): ?string {
        return $this->codeMission;
    }

    /**
     * Get the code phase.
     *
     * @return string|null Returns the code phase.
     */
    public function getCodePhase(): ?string {
        return $this->codePhase;
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
     * Get the date saisie.
     *
     * @return DateTime|null Returns the date saisie.
     */
    public function getDateSaisie(): ?DateTime {
        return $this->dateSaisie;
    }

    /**
     * Get the date sys saisie.
     *
     * @return DateTime|null Returns the date sys saisie.
     */
    public function getDateSysSaisie(): ?DateTime {
        return $this->dateSysSaisie;
    }

    /**
     * Get the facturable.
     *
     * @return bool|null Returns the facturable.
     */
    public function getFacturable(): ?bool {
        return $this->facturable;
    }

    /**
     * Get the id prefacturation.
     *
     * @return int|null Returns the id prefacturation.
     */
    public function getIdPrefacturation(): ?int {
        return $this->idPrefacturation;
    }

    /**
     * Get the is transf.
     *
     * @return bool|null Returns the is transf.
     */
    public function getIsTransf(): ?bool {
        return $this->isTransf;
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
     * Get the monnaie.
     *
     * @return string|null Returns the monnaie.
     */
    public function getMonnaie(): ?string {
        return $this->monnaie;
    }

    /**
     * Get the pu.
     *
     * @return float|null Returns the pu.
     */
    public function getPu(): ?float {
        return $this->pu;
    }

    /**
     * Get the qte.
     *
     * @return float|null Returns the qte.
     */
    public function getQte(): ?float {
        return $this->qte;
    }

    /**
     * Get the uniq id facture.
     *
     * @return string|null Returns the uniq id facture.
     */
    public function getUniqIdFacture(): ?string {
        return $this->uniqIdFacture;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setCodeArticle(?string $codeArticle): Prefacturation {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setCodeClient(?string $codeClient): Prefacturation {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): Prefacturation {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string|null $codeMission The code mission.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setCodeMission(?string $codeMission): Prefacturation {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string|null $codePhase The code phase.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setCodePhase(?string $codePhase): Prefacturation {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setCodeRegroupement(?string $codeRegroupement): Prefacturation {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the date saisie.
     *
     * @param DateTime|null $dateSaisie The date saisie.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setDateSaisie(?DateTime $dateSaisie): Prefacturation {
        $this->dateSaisie = $dateSaisie;
        return $this;
    }

    /**
     * Set the date sys saisie.
     *
     * @param DateTime|null $dateSysSaisie The date sys saisie.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setDateSysSaisie(?DateTime $dateSysSaisie): Prefacturation {
        $this->dateSysSaisie = $dateSysSaisie;
        return $this;
    }

    /**
     * Set the facturable.
     *
     * @param bool|null $facturable The facturable.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setFacturable(?bool $facturable): Prefacturation {
        $this->facturable = $facturable;
        return $this;
    }

    /**
     * Set the id prefacturation.
     *
     * @param int|null $idPrefacturation The id prefacturation.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setIdPrefacturation(?int $idPrefacturation): Prefacturation {
        $this->idPrefacturation = $idPrefacturation;
        return $this;
    }

    /**
     * Set the is transf.
     *
     * @param bool|null $isTransf The is transf.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setIsTransf(?bool $isTransf): Prefacturation {
        $this->isTransf = $isTransf;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setLibelle(?string $libelle): Prefacturation {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the monnaie.
     *
     * @param string|null $monnaie The monnaie.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setMonnaie(?string $monnaie): Prefacturation {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the pu.
     *
     * @param float|null $pu The pu.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setPu(?float $pu): Prefacturation {
        $this->pu = $pu;
        return $this;
    }

    /**
     * Set the qte.
     *
     * @param float|null $qte The qte.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setQte(?float $qte): Prefacturation {
        $this->qte = $qte;
        return $this;
    }

    /**
     * Set the uniq id facture.
     *
     * @param string|null $uniqIdFacture The uniq id facture.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setUniqIdFacture(?string $uniqIdFacture): Prefacturation {
        $this->uniqIdFacture = $uniqIdFacture;
        return $this;
    }
}
