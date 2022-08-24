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

/**
 * Attestation fiscale.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AttestationFiscale {

    /**
     * Annee.
     *
     * @var int|null
     */
    private $annee;

    /**
     * Code article1.
     *
     * @var string|null
     */
    private $codeArticle1;

    /**
     * Code article10.
     *
     * @var string|null
     */
    private $codeArticle10;

    /**
     * Code article2.
     *
     * @var string|null
     */
    private $codeArticle2;

    /**
     * Code article3.
     *
     * @var string|null
     */
    private $codeArticle3;

    /**
     * Code article4.
     *
     * @var string|null
     */
    private $codeArticle4;

    /**
     * Code article5.
     *
     * @var string|null
     */
    private $codeArticle5;

    /**
     * Code article6.
     *
     * @var string|null
     */
    private $codeArticle6;

    /**
     * Code article7.
     *
     * @var string|null
     */
    private $codeArticle7;

    /**
     * Code article8.
     *
     * @var string|null
     */
    private $codeArticle8;

    /**
     * Code article9.
     *
     * @var string|null
     */
    private $codeArticle9;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Duree annuelle.
     *
     * @var float|null
     */
    private $dureeAnnuelle;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Famille1.
     *
     * @var string|null
     */
    private $famille1;

    /**
     * Famille10.
     *
     * @var string|null
     */
    private $famille10;

    /**
     * Famille2.
     *
     * @var string|null
     */
    private $famille2;

    /**
     * Famille3.
     *
     * @var string|null
     */
    private $famille3;

    /**
     * Famille4.
     *
     * @var string|null
     */
    private $famille4;

    /**
     * Famille5.
     *
     * @var string|null
     */
    private $famille5;

    /**
     * Famille6.
     *
     * @var string|null
     */
    private $famille6;

    /**
     * Famille7.
     *
     * @var string|null
     */
    private $famille7;

    /**
     * Famille8.
     *
     * @var string|null
     */
    private $famille8;

    /**
     * Famille9.
     *
     * @var string|null
     */
    private $famille9;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Mode reglement.
     *
     * @var string|null
     */
    private $modeReglement;

    /**
     * Montant tes.
     *
     * @var float|null
     */
    private $montantTes;

    /**
     * Montant ttc.
     *
     * @var float|null
     */
    private $montantTtc;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the annee.
     *
     * @return int|null Returns the annee.
     */
    public function getAnnee(): ?int {
        return $this->annee;
    }

    /**
     * Get the code article1.
     *
     * @return string|null Returns the code article1.
     */
    public function getCodeArticle1(): ?string {
        return $this->codeArticle1;
    }

    /**
     * Get the code article10.
     *
     * @return string|null Returns the code article10.
     */
    public function getCodeArticle10(): ?string {
        return $this->codeArticle10;
    }

    /**
     * Get the code article2.
     *
     * @return string|null Returns the code article2.
     */
    public function getCodeArticle2(): ?string {
        return $this->codeArticle2;
    }

    /**
     * Get the code article3.
     *
     * @return string|null Returns the code article3.
     */
    public function getCodeArticle3(): ?string {
        return $this->codeArticle3;
    }

    /**
     * Get the code article4.
     *
     * @return string|null Returns the code article4.
     */
    public function getCodeArticle4(): ?string {
        return $this->codeArticle4;
    }

    /**
     * Get the code article5.
     *
     * @return string|null Returns the code article5.
     */
    public function getCodeArticle5(): ?string {
        return $this->codeArticle5;
    }

    /**
     * Get the code article6.
     *
     * @return string|null Returns the code article6.
     */
    public function getCodeArticle6(): ?string {
        return $this->codeArticle6;
    }

    /**
     * Get the code article7.
     *
     * @return string|null Returns the code article7.
     */
    public function getCodeArticle7(): ?string {
        return $this->codeArticle7;
    }

    /**
     * Get the code article8.
     *
     * @return string|null Returns the code article8.
     */
    public function getCodeArticle8(): ?string {
        return $this->codeArticle8;
    }

    /**
     * Get the code article9.
     *
     * @return string|null Returns the code article9.
     */
    public function getCodeArticle9(): ?string {
        return $this->codeArticle9;
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
     * Get the duree annuelle.
     *
     * @return float|null Returns the duree annuelle.
     */
    public function getDureeAnnuelle(): ?float {
        return $this->dureeAnnuelle;
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
     * Get the famille1.
     *
     * @return string|null Returns the famille1.
     */
    public function getFamille1(): ?string {
        return $this->famille1;
    }

    /**
     * Get the famille10.
     *
     * @return string|null Returns the famille10.
     */
    public function getFamille10(): ?string {
        return $this->famille10;
    }

    /**
     * Get the famille2.
     *
     * @return string|null Returns the famille2.
     */
    public function getFamille2(): ?string {
        return $this->famille2;
    }

    /**
     * Get the famille3.
     *
     * @return string|null Returns the famille3.
     */
    public function getFamille3(): ?string {
        return $this->famille3;
    }

    /**
     * Get the famille4.
     *
     * @return string|null Returns the famille4.
     */
    public function getFamille4(): ?string {
        return $this->famille4;
    }

    /**
     * Get the famille5.
     *
     * @return string|null Returns the famille5.
     */
    public function getFamille5(): ?string {
        return $this->famille5;
    }

    /**
     * Get the famille6.
     *
     * @return string|null Returns the famille6.
     */
    public function getFamille6(): ?string {
        return $this->famille6;
    }

    /**
     * Get the famille7.
     *
     * @return string|null Returns the famille7.
     */
    public function getFamille7(): ?string {
        return $this->famille7;
    }

    /**
     * Get the famille8.
     *
     * @return string|null Returns the famille8.
     */
    public function getFamille8(): ?string {
        return $this->famille8;
    }

    /**
     * Get the famille9.
     *
     * @return string|null Returns the famille9.
     */
    public function getFamille9(): ?string {
        return $this->famille9;
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
     * Get the mode reglement.
     *
     * @return string|null Returns the mode reglement.
     */
    public function getModeReglement(): ?string {
        return $this->modeReglement;
    }

    /**
     * Get the montant tes.
     *
     * @return float|null Returns the montant tes.
     */
    public function getMontantTes(): ?float {
        return $this->montantTes;
    }

    /**
     * Get the montant ttc.
     *
     * @return float|null Returns the montant ttc.
     */
    public function getMontantTtc(): ?float {
        return $this->montantTtc;
    }

    /**
     * Set the annee.
     *
     * @param int|null $annee The annee.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setAnnee(?int $annee): AttestationFiscale {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the code article1.
     *
     * @param string|null $codeArticle1 The code article1.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setCodeArticle1(?string $codeArticle1): AttestationFiscale {
        $this->codeArticle1 = $codeArticle1;
        return $this;
    }

    /**
     * Set the code article10.
     *
     * @param string|null $codeArticle10 The code article10.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setCodeArticle10(?string $codeArticle10): AttestationFiscale {
        $this->codeArticle10 = $codeArticle10;
        return $this;
    }

    /**
     * Set the code article2.
     *
     * @param string|null $codeArticle2 The code article2.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setCodeArticle2(?string $codeArticle2): AttestationFiscale {
        $this->codeArticle2 = $codeArticle2;
        return $this;
    }

    /**
     * Set the code article3.
     *
     * @param string|null $codeArticle3 The code article3.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setCodeArticle3(?string $codeArticle3): AttestationFiscale {
        $this->codeArticle3 = $codeArticle3;
        return $this;
    }

    /**
     * Set the code article4.
     *
     * @param string|null $codeArticle4 The code article4.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setCodeArticle4(?string $codeArticle4): AttestationFiscale {
        $this->codeArticle4 = $codeArticle4;
        return $this;
    }

    /**
     * Set the code article5.
     *
     * @param string|null $codeArticle5 The code article5.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setCodeArticle5(?string $codeArticle5): AttestationFiscale {
        $this->codeArticle5 = $codeArticle5;
        return $this;
    }

    /**
     * Set the code article6.
     *
     * @param string|null $codeArticle6 The code article6.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setCodeArticle6(?string $codeArticle6): AttestationFiscale {
        $this->codeArticle6 = $codeArticle6;
        return $this;
    }

    /**
     * Set the code article7.
     *
     * @param string|null $codeArticle7 The code article7.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setCodeArticle7(?string $codeArticle7): AttestationFiscale {
        $this->codeArticle7 = $codeArticle7;
        return $this;
    }

    /**
     * Set the code article8.
     *
     * @param string|null $codeArticle8 The code article8.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setCodeArticle8(?string $codeArticle8): AttestationFiscale {
        $this->codeArticle8 = $codeArticle8;
        return $this;
    }

    /**
     * Set the code article9.
     *
     * @param string|null $codeArticle9 The code article9.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setCodeArticle9(?string $codeArticle9): AttestationFiscale {
        $this->codeArticle9 = $codeArticle9;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setCodeClient(?string $codeClient): AttestationFiscale {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the duree annuelle.
     *
     * @param float|null $dureeAnnuelle The duree annuelle.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setDureeAnnuelle(?float $dureeAnnuelle): AttestationFiscale {
        $this->dureeAnnuelle = $dureeAnnuelle;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setEtat(?string $etat): AttestationFiscale {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the famille1.
     *
     * @param string|null $famille1 The famille1.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setFamille1(?string $famille1): AttestationFiscale {
        $this->famille1 = $famille1;
        return $this;
    }

    /**
     * Set the famille10.
     *
     * @param string|null $famille10 The famille10.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setFamille10(?string $famille10): AttestationFiscale {
        $this->famille10 = $famille10;
        return $this;
    }

    /**
     * Set the famille2.
     *
     * @param string|null $famille2 The famille2.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setFamille2(?string $famille2): AttestationFiscale {
        $this->famille2 = $famille2;
        return $this;
    }

    /**
     * Set the famille3.
     *
     * @param string|null $famille3 The famille3.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setFamille3(?string $famille3): AttestationFiscale {
        $this->famille3 = $famille3;
        return $this;
    }

    /**
     * Set the famille4.
     *
     * @param string|null $famille4 The famille4.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setFamille4(?string $famille4): AttestationFiscale {
        $this->famille4 = $famille4;
        return $this;
    }

    /**
     * Set the famille5.
     *
     * @param string|null $famille5 The famille5.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setFamille5(?string $famille5): AttestationFiscale {
        $this->famille5 = $famille5;
        return $this;
    }

    /**
     * Set the famille6.
     *
     * @param string|null $famille6 The famille6.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setFamille6(?string $famille6): AttestationFiscale {
        $this->famille6 = $famille6;
        return $this;
    }

    /**
     * Set the famille7.
     *
     * @param string|null $famille7 The famille7.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setFamille7(?string $famille7): AttestationFiscale {
        $this->famille7 = $famille7;
        return $this;
    }

    /**
     * Set the famille8.
     *
     * @param string|null $famille8 The famille8.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setFamille8(?string $famille8): AttestationFiscale {
        $this->famille8 = $famille8;
        return $this;
    }

    /**
     * Set the famille9.
     *
     * @param string|null $famille9 The famille9.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setFamille9(?string $famille9): AttestationFiscale {
        $this->famille9 = $famille9;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setLienDocument(?string $lienDocument): AttestationFiscale {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the mode reglement.
     *
     * @param string|null $modeReglement The mode reglement.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setModeReglement(?string $modeReglement): AttestationFiscale {
        $this->modeReglement = $modeReglement;
        return $this;
    }

    /**
     * Set the montant tes.
     *
     * @param float|null $montantTes The montant tes.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setMontantTes(?float $montantTes): AttestationFiscale {
        $this->montantTes = $montantTes;
        return $this;
    }

    /**
     * Set the montant ttc.
     *
     * @param float|null $montantTtc The montant ttc.
     * @return AttestationFiscale Returns this Attestation fiscale.
     */
    public function setMontantTtc(?float $montantTtc): AttestationFiscale {
        $this->montantTtc = $montantTtc;
        return $this;
    }
}
