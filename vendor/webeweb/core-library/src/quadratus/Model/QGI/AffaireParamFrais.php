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
 * Affaire param frais.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AffaireParamFrais {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code avenant.
     *
     * @var string|null
     */
    private $codeAvenant;

    /**
     * Code frais fixe.
     *
     * @var string|null
     */
    private $codeFraisFixe;

    /**
     * Code phase.
     *
     * @var string|null
     */
    private $codePhase;

    /**
     * Comptes comptables.
     *
     * @var string|null
     */
    private $comptesComptables;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Mt fg1.
     *
     * @var float|null
     */
    private $mtFg1;

    /**
     * Mt fg2.
     *
     * @var float|null
     */
    private $mtFg2;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Pourcentage.
     *
     * @var bool|null
     */
    private $pourcentage;

    /**
     * Prct fg1.
     *
     * @var float|null
     */
    private $prctFg1;

    /**
     * Prct fg2.
     *
     * @var float|null
     */
    private $prctFg2;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
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
     * Get the code avenant.
     *
     * @return string|null Returns the code avenant.
     */
    public function getCodeAvenant(): ?string {
        return $this->codeAvenant;
    }

    /**
     * Get the code frais fixe.
     *
     * @return string|null Returns the code frais fixe.
     */
    public function getCodeFraisFixe(): ?string {
        return $this->codeFraisFixe;
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
     * Get the comptes comptables.
     *
     * @return string|null Returns the comptes comptables.
     */
    public function getComptesComptables(): ?string {
        return $this->comptesComptables;
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
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
    }

    /**
     * Get the mt fg1.
     *
     * @return float|null Returns the mt fg1.
     */
    public function getMtFg1(): ?float {
        return $this->mtFg1;
    }

    /**
     * Get the mt fg2.
     *
     * @return float|null Returns the mt fg2.
     */
    public function getMtFg2(): ?float {
        return $this->mtFg2;
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
     * Get the pourcentage.
     *
     * @return bool|null Returns the pourcentage.
     */
    public function getPourcentage(): ?bool {
        return $this->pourcentage;
    }

    /**
     * Get the prct fg1.
     *
     * @return float|null Returns the prct fg1.
     */
    public function getPrctFg1(): ?float {
        return $this->prctFg1;
    }

    /**
     * Get the prct fg2.
     *
     * @return float|null Returns the prct fg2.
     */
    public function getPrctFg2(): ?float {
        return $this->prctFg2;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setCode(?string $code): AffaireParamFrais {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setCodeAffaire(?string $codeAffaire): AffaireParamFrais {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code avenant.
     *
     * @param string|null $codeAvenant The code avenant.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setCodeAvenant(?string $codeAvenant): AffaireParamFrais {
        $this->codeAvenant = $codeAvenant;
        return $this;
    }

    /**
     * Set the code frais fixe.
     *
     * @param string|null $codeFraisFixe The code frais fixe.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setCodeFraisFixe(?string $codeFraisFixe): AffaireParamFrais {
        $this->codeFraisFixe = $codeFraisFixe;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string|null $codePhase The code phase.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setCodePhase(?string $codePhase): AffaireParamFrais {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the comptes comptables.
     *
     * @param string|null $comptesComptables The comptes comptables.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setComptesComptables(?string $comptesComptables): AffaireParamFrais {
        $this->comptesComptables = $comptesComptables;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setLibelle(?string $libelle): AffaireParamFrais {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setMontant(?float $montant): AffaireParamFrais {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the mt fg1.
     *
     * @param float|null $mtFg1 The mt fg1.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setMtFg1(?float $mtFg1): AffaireParamFrais {
        $this->mtFg1 = $mtFg1;
        return $this;
    }

    /**
     * Set the mt fg2.
     *
     * @param float|null $mtFg2 The mt fg2.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setMtFg2(?float $mtFg2): AffaireParamFrais {
        $this->mtFg2 = $mtFg2;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setPeriode(?DateTime $periode): AffaireParamFrais {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcentage.
     *
     * @param bool|null $pourcentage The pourcentage.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setPourcentage(?bool $pourcentage): AffaireParamFrais {
        $this->pourcentage = $pourcentage;
        return $this;
    }

    /**
     * Set the prct fg1.
     *
     * @param float|null $prctFg1 The prct fg1.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setPrctFg1(?float $prctFg1): AffaireParamFrais {
        $this->prctFg1 = $prctFg1;
        return $this;
    }

    /**
     * Set the prct fg2.
     *
     * @param float|null $prctFg2 The prct fg2.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setPrctFg2(?float $prctFg2): AffaireParamFrais {
        $this->prctFg2 = $prctFg2;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setType(?string $type): AffaireParamFrais {
        $this->type = $type;
        return $this;
    }
}
