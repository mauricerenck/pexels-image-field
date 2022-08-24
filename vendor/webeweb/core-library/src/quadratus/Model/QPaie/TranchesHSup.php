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
 * Tranches h sup.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class TranchesHSup {

    /**
     * A comptabiliser rc.
     *
     * @var bool|null
     */
    private $aComptabiliserRc;

    /**
     * A comptabiliser rcit.
     *
     * @var bool|null
     */
    private $aComptabiliserRcit;

    /**
     * Appliquer h sup.
     *
     * @var bool|null
     */
    private $appliquerHSup;

    /**
     * Appliquer repos remplace.
     *
     * @var bool|null
     */
    private $appliquerReposRemplace;

    /**
     * Code lib hs.
     *
     * @var string|null
     */
    private $codeLibHs;

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Declenche rc semaine.
     *
     * @var bool|null
     */
    private $declencheRcSemaine;

    /**
     * Horaire depassement.
     *
     * @var float|null
     */
    private $horaireDepassement;

    /**
     * Numero grille type.
     *
     * @var int|null
     */
    private $numeroGrilleType;

    /**
     * Pourcent h sup.
     *
     * @var float|null
     */
    private $pourcentHSup;

    /**
     * Pourcent rc.
     *
     * @var float|null
     */
    private $pourcentRc;

    /**
     * Pourcent repos remplace.
     *
     * @var float|null
     */
    private $pourcentReposRemplace;

    /**
     * Type paiement.
     *
     * @var string|null
     */
    private $typePaiement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a comptabiliser rc.
     *
     * @return bool|null Returns the a comptabiliser rc.
     */
    public function getAComptabiliserRc(): ?bool {
        return $this->aComptabiliserRc;
    }

    /**
     * Get the a comptabiliser rcit.
     *
     * @return bool|null Returns the a comptabiliser rcit.
     */
    public function getAComptabiliserRcit(): ?bool {
        return $this->aComptabiliserRcit;
    }

    /**
     * Get the appliquer h sup.
     *
     * @return bool|null Returns the appliquer h sup.
     */
    public function getAppliquerHSup(): ?bool {
        return $this->appliquerHSup;
    }

    /**
     * Get the appliquer repos remplace.
     *
     * @return bool|null Returns the appliquer repos remplace.
     */
    public function getAppliquerReposRemplace(): ?bool {
        return $this->appliquerReposRemplace;
    }

    /**
     * Get the code lib hs.
     *
     * @return string|null Returns the code lib hs.
     */
    public function getCodeLibHs(): ?string {
        return $this->codeLibHs;
    }

    /**
     * Get the date application.
     *
     * @return DateTime|null Returns the date application.
     */
    public function getDateApplication(): ?DateTime {
        return $this->dateApplication;
    }

    /**
     * Get the declenche rc semaine.
     *
     * @return bool|null Returns the declenche rc semaine.
     */
    public function getDeclencheRcSemaine(): ?bool {
        return $this->declencheRcSemaine;
    }

    /**
     * Get the horaire depassement.
     *
     * @return float|null Returns the horaire depassement.
     */
    public function getHoraireDepassement(): ?float {
        return $this->horaireDepassement;
    }

    /**
     * Get the numero grille type.
     *
     * @return int|null Returns the numero grille type.
     */
    public function getNumeroGrilleType(): ?int {
        return $this->numeroGrilleType;
    }

    /**
     * Get the pourcent h sup.
     *
     * @return float|null Returns the pourcent h sup.
     */
    public function getPourcentHSup(): ?float {
        return $this->pourcentHSup;
    }

    /**
     * Get the pourcent rc.
     *
     * @return float|null Returns the pourcent rc.
     */
    public function getPourcentRc(): ?float {
        return $this->pourcentRc;
    }

    /**
     * Get the pourcent repos remplace.
     *
     * @return float|null Returns the pourcent repos remplace.
     */
    public function getPourcentReposRemplace(): ?float {
        return $this->pourcentReposRemplace;
    }

    /**
     * Get the type paiement.
     *
     * @return string|null Returns the type paiement.
     */
    public function getTypePaiement(): ?string {
        return $this->typePaiement;
    }

    /**
     * Set the a comptabiliser rc.
     *
     * @param bool|null $aComptabiliserRc The a comptabiliser rc.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setAComptabiliserRc(?bool $aComptabiliserRc): TranchesHSup {
        $this->aComptabiliserRc = $aComptabiliserRc;
        return $this;
    }

    /**
     * Set the a comptabiliser rcit.
     *
     * @param bool|null $aComptabiliserRcit The a comptabiliser rcit.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setAComptabiliserRcit(?bool $aComptabiliserRcit): TranchesHSup {
        $this->aComptabiliserRcit = $aComptabiliserRcit;
        return $this;
    }

    /**
     * Set the appliquer h sup.
     *
     * @param bool|null $appliquerHSup The appliquer h sup.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setAppliquerHSup(?bool $appliquerHSup): TranchesHSup {
        $this->appliquerHSup = $appliquerHSup;
        return $this;
    }

    /**
     * Set the appliquer repos remplace.
     *
     * @param bool|null $appliquerReposRemplace The appliquer repos remplace.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setAppliquerReposRemplace(?bool $appliquerReposRemplace): TranchesHSup {
        $this->appliquerReposRemplace = $appliquerReposRemplace;
        return $this;
    }

    /**
     * Set the code lib hs.
     *
     * @param string|null $codeLibHs The code lib hs.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setCodeLibHs(?string $codeLibHs): TranchesHSup {
        $this->codeLibHs = $codeLibHs;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setDateApplication(?DateTime $dateApplication): TranchesHSup {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the declenche rc semaine.
     *
     * @param bool|null $declencheRcSemaine The declenche rc semaine.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setDeclencheRcSemaine(?bool $declencheRcSemaine): TranchesHSup {
        $this->declencheRcSemaine = $declencheRcSemaine;
        return $this;
    }

    /**
     * Set the horaire depassement.
     *
     * @param float|null $horaireDepassement The horaire depassement.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setHoraireDepassement(?float $horaireDepassement): TranchesHSup {
        $this->horaireDepassement = $horaireDepassement;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int|null $numeroGrilleType The numero grille type.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setNumeroGrilleType(?int $numeroGrilleType): TranchesHSup {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the pourcent h sup.
     *
     * @param float|null $pourcentHSup The pourcent h sup.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setPourcentHSup(?float $pourcentHSup): TranchesHSup {
        $this->pourcentHSup = $pourcentHSup;
        return $this;
    }

    /**
     * Set the pourcent rc.
     *
     * @param float|null $pourcentRc The pourcent rc.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setPourcentRc(?float $pourcentRc): TranchesHSup {
        $this->pourcentRc = $pourcentRc;
        return $this;
    }

    /**
     * Set the pourcent repos remplace.
     *
     * @param float|null $pourcentReposRemplace The pourcent repos remplace.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setPourcentReposRemplace(?float $pourcentReposRemplace): TranchesHSup {
        $this->pourcentReposRemplace = $pourcentReposRemplace;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string|null $typePaiement The type paiement.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setTypePaiement(?string $typePaiement): TranchesHSup {
        $this->typePaiement = $typePaiement;
        return $this;
    }
}
