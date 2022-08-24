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

/**
 * Reglements.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Reglements {

    /**
     * Bic.
     *
     * @var string|null
     */
    private $bic;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code banque.
     *
     * @var string|null
     */
    private $codeBanque;

    /**
     * Code comptable.
     *
     * @var string|null
     */
    private $codeComptable;

    /**
     * Compte caisse.
     *
     * @var string|null
     */
    private $compteCaisse;

    /**
     * Cpt portefeuille.
     *
     * @var string|null
     */
    private $cptPortefeuille;

    /**
     * Date echeance cpta.
     *
     * @var bool|null
     */
    private $dateEcheanceCpta;

    /**
     * Definition paiement.
     *
     * @var bool|null
     */
    private $definitionPaiement;

    /**
     * Definition remise.
     *
     * @var bool|null
     */
    private $definitionRemise;

    /**
     * Detail echeance cpta.
     *
     * @var bool|null
     */
    private $detailEcheanceCpta;

    /**
     * Detail effet cpta.
     *
     * @var bool|null
     */
    private $detailEffetCpta;

    /**
     * Devise caisse.
     *
     * @var string|null
     */
    private $deviseCaisse;

    /**
     * Domiciliation bancaire1.
     *
     * @var string|null
     */
    private $domiciliationBancaire1;

    /**
     * Domiciliation bancaire2.
     *
     * @var string|null
     */
    private $domiciliationBancaire2;

    /**
     * Duree echeances.
     *
     * @var string|null
     */
    private $dureeEcheances;

    /**
     * Echeance fin decade.
     *
     * @var bool|null
     */
    private $echeanceFinDecade;

    /**
     * Echeance fin quinzaine.
     *
     * @var bool|null
     */
    private $echeanceFinQuinzaine;

    /**
     * Edit date echeance.
     *
     * @var bool|null
     */
    private $editDateEcheance;

    /**
     * Editer cheque.
     *
     * @var bool|null
     */
    private $editerCheque;

    /**
     * Especes caisse.
     *
     * @var bool|null
     */
    private $especesCaisse;

    /**
     * Gestion paiements.
     *
     * @var bool|null
     */
    private $gestionPaiements;

    /**
     * Iban.
     *
     * @var string|null
     */
    private $iban;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Intitule2.
     *
     * @var string|null
     */
    private $intitule2;

    /**
     * Intitule3.
     *
     * @var string|null
     */
    private $intitule3;

    /**
     * Lcr.
     *
     * @var bool|null
     */
    private $lcr;

    /**
     * Lib ecr caisse.
     *
     * @var string|null
     */
    private $libEcrCaisse;

    /**
     * Nombre echeances.
     *
     * @var string|null
     */
    private $nombreEcheances;

    /**
     * Paiement depart le.
     *
     * @var string|null
     */
    private $paiementDepartLe;

    /**
     * Paiement le.
     *
     * @var string|null
     */
    private $paiementLe;

    /**
     * Paiement nombre de jours.
     *
     * @var int|null
     */
    private $paiementNombreDeJours;

    /**
     * Pas de tiroir caisse.
     *
     * @var bool|null
     */
    private $pasDeTiroirCaisse;

    /**
     * Pas effet avoir.
     *
     * @var bool|null
     */
    private $pasEffetAvoir;

    /**
     * Remise pied.
     *
     * @var float|null
     */
    private $remisePied;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Traite editer.
     *
     * @var bool|null
     */
    private $traiteEditer;

    /**
     * Type acceptation.
     *
     * @var string|null
     */
    private $typeAcceptation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the bic.
     *
     * @return string|null Returns the bic.
     */
    public function getBic(): ?string {
        return $this->bic;
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
     * Get the code banque.
     *
     * @return string|null Returns the code banque.
     */
    public function getCodeBanque(): ?string {
        return $this->codeBanque;
    }

    /**
     * Get the code comptable.
     *
     * @return string|null Returns the code comptable.
     */
    public function getCodeComptable(): ?string {
        return $this->codeComptable;
    }

    /**
     * Get the compte caisse.
     *
     * @return string|null Returns the compte caisse.
     */
    public function getCompteCaisse(): ?string {
        return $this->compteCaisse;
    }

    /**
     * Get the cpt portefeuille.
     *
     * @return string|null Returns the cpt portefeuille.
     */
    public function getCptPortefeuille(): ?string {
        return $this->cptPortefeuille;
    }

    /**
     * Get the date echeance cpta.
     *
     * @return bool|null Returns the date echeance cpta.
     */
    public function getDateEcheanceCpta(): ?bool {
        return $this->dateEcheanceCpta;
    }

    /**
     * Get the definition paiement.
     *
     * @return bool|null Returns the definition paiement.
     */
    public function getDefinitionPaiement(): ?bool {
        return $this->definitionPaiement;
    }

    /**
     * Get the definition remise.
     *
     * @return bool|null Returns the definition remise.
     */
    public function getDefinitionRemise(): ?bool {
        return $this->definitionRemise;
    }

    /**
     * Get the detail echeance cpta.
     *
     * @return bool|null Returns the detail echeance cpta.
     */
    public function getDetailEcheanceCpta(): ?bool {
        return $this->detailEcheanceCpta;
    }

    /**
     * Get the detail effet cpta.
     *
     * @return bool|null Returns the detail effet cpta.
     */
    public function getDetailEffetCpta(): ?bool {
        return $this->detailEffetCpta;
    }

    /**
     * Get the devise caisse.
     *
     * @return string|null Returns the devise caisse.
     */
    public function getDeviseCaisse(): ?string {
        return $this->deviseCaisse;
    }

    /**
     * Get the domiciliation bancaire1.
     *
     * @return string|null Returns the domiciliation bancaire1.
     */
    public function getDomiciliationBancaire1(): ?string {
        return $this->domiciliationBancaire1;
    }

    /**
     * Get the domiciliation bancaire2.
     *
     * @return string|null Returns the domiciliation bancaire2.
     */
    public function getDomiciliationBancaire2(): ?string {
        return $this->domiciliationBancaire2;
    }

    /**
     * Get the duree echeances.
     *
     * @return string|null Returns the duree echeances.
     */
    public function getDureeEcheances(): ?string {
        return $this->dureeEcheances;
    }

    /**
     * Get the echeance fin decade.
     *
     * @return bool|null Returns the echeance fin decade.
     */
    public function getEcheanceFinDecade(): ?bool {
        return $this->echeanceFinDecade;
    }

    /**
     * Get the echeance fin quinzaine.
     *
     * @return bool|null Returns the echeance fin quinzaine.
     */
    public function getEcheanceFinQuinzaine(): ?bool {
        return $this->echeanceFinQuinzaine;
    }

    /**
     * Get the edit date echeance.
     *
     * @return bool|null Returns the edit date echeance.
     */
    public function getEditDateEcheance(): ?bool {
        return $this->editDateEcheance;
    }

    /**
     * Get the editer cheque.
     *
     * @return bool|null Returns the editer cheque.
     */
    public function getEditerCheque(): ?bool {
        return $this->editerCheque;
    }

    /**
     * Get the especes caisse.
     *
     * @return bool|null Returns the especes caisse.
     */
    public function getEspecesCaisse(): ?bool {
        return $this->especesCaisse;
    }

    /**
     * Get the gestion paiements.
     *
     * @return bool|null Returns the gestion paiements.
     */
    public function getGestionPaiements(): ?bool {
        return $this->gestionPaiements;
    }

    /**
     * Get the iban.
     *
     * @return string|null Returns the iban.
     */
    public function getIban(): ?string {
        return $this->iban;
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the intitule2.
     *
     * @return string|null Returns the intitule2.
     */
    public function getIntitule2(): ?string {
        return $this->intitule2;
    }

    /**
     * Get the intitule3.
     *
     * @return string|null Returns the intitule3.
     */
    public function getIntitule3(): ?string {
        return $this->intitule3;
    }

    /**
     * Get the lcr.
     *
     * @return bool|null Returns the lcr.
     */
    public function getLcr(): ?bool {
        return $this->lcr;
    }

    /**
     * Get the lib ecr caisse.
     *
     * @return string|null Returns the lib ecr caisse.
     */
    public function getLibEcrCaisse(): ?string {
        return $this->libEcrCaisse;
    }

    /**
     * Get the nombre echeances.
     *
     * @return string|null Returns the nombre echeances.
     */
    public function getNombreEcheances(): ?string {
        return $this->nombreEcheances;
    }

    /**
     * Get the paiement depart le.
     *
     * @return string|null Returns the paiement depart le.
     */
    public function getPaiementDepartLe(): ?string {
        return $this->paiementDepartLe;
    }

    /**
     * Get the paiement le.
     *
     * @return string|null Returns the paiement le.
     */
    public function getPaiementLe(): ?string {
        return $this->paiementLe;
    }

    /**
     * Get the paiement nombre de jours.
     *
     * @return int|null Returns the paiement nombre de jours.
     */
    public function getPaiementNombreDeJours(): ?int {
        return $this->paiementNombreDeJours;
    }

    /**
     * Get the pas de tiroir caisse.
     *
     * @return bool|null Returns the pas de tiroir caisse.
     */
    public function getPasDeTiroirCaisse(): ?bool {
        return $this->pasDeTiroirCaisse;
    }

    /**
     * Get the pas effet avoir.
     *
     * @return bool|null Returns the pas effet avoir.
     */
    public function getPasEffetAvoir(): ?bool {
        return $this->pasEffetAvoir;
    }

    /**
     * Get the remise pied.
     *
     * @return float|null Returns the remise pied.
     */
    public function getRemisePied(): ?float {
        return $this->remisePied;
    }

    /**
     * Get the rib.
     *
     * @return string|null Returns the rib.
     */
    public function getRib(): ?string {
        return $this->rib;
    }

    /**
     * Get the traite editer.
     *
     * @return bool|null Returns the traite editer.
     */
    public function getTraiteEditer(): ?bool {
        return $this->traiteEditer;
    }

    /**
     * Get the type acceptation.
     *
     * @return string|null Returns the type acceptation.
     */
    public function getTypeAcceptation(): ?string {
        return $this->typeAcceptation;
    }

    /**
     * Set the bic.
     *
     * @param string|null $bic The bic.
     * @return Reglements Returns this Reglements.
     */
    public function setBic(?string $bic): Reglements {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Reglements Returns this Reglements.
     */
    public function setCode(?string $code): Reglements {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code banque.
     *
     * @param string|null $codeBanque The code banque.
     * @return Reglements Returns this Reglements.
     */
    public function setCodeBanque(?string $codeBanque): Reglements {
        $this->codeBanque = $codeBanque;
        return $this;
    }

    /**
     * Set the code comptable.
     *
     * @param string|null $codeComptable The code comptable.
     * @return Reglements Returns this Reglements.
     */
    public function setCodeComptable(?string $codeComptable): Reglements {
        $this->codeComptable = $codeComptable;
        return $this;
    }

    /**
     * Set the compte caisse.
     *
     * @param string|null $compteCaisse The compte caisse.
     * @return Reglements Returns this Reglements.
     */
    public function setCompteCaisse(?string $compteCaisse): Reglements {
        $this->compteCaisse = $compteCaisse;
        return $this;
    }

    /**
     * Set the cpt portefeuille.
     *
     * @param string|null $cptPortefeuille The cpt portefeuille.
     * @return Reglements Returns this Reglements.
     */
    public function setCptPortefeuille(?string $cptPortefeuille): Reglements {
        $this->cptPortefeuille = $cptPortefeuille;
        return $this;
    }

    /**
     * Set the date echeance cpta.
     *
     * @param bool|null $dateEcheanceCpta The date echeance cpta.
     * @return Reglements Returns this Reglements.
     */
    public function setDateEcheanceCpta(?bool $dateEcheanceCpta): Reglements {
        $this->dateEcheanceCpta = $dateEcheanceCpta;
        return $this;
    }

    /**
     * Set the definition paiement.
     *
     * @param bool|null $definitionPaiement The definition paiement.
     * @return Reglements Returns this Reglements.
     */
    public function setDefinitionPaiement(?bool $definitionPaiement): Reglements {
        $this->definitionPaiement = $definitionPaiement;
        return $this;
    }

    /**
     * Set the definition remise.
     *
     * @param bool|null $definitionRemise The definition remise.
     * @return Reglements Returns this Reglements.
     */
    public function setDefinitionRemise(?bool $definitionRemise): Reglements {
        $this->definitionRemise = $definitionRemise;
        return $this;
    }

    /**
     * Set the detail echeance cpta.
     *
     * @param bool|null $detailEcheanceCpta The detail echeance cpta.
     * @return Reglements Returns this Reglements.
     */
    public function setDetailEcheanceCpta(?bool $detailEcheanceCpta): Reglements {
        $this->detailEcheanceCpta = $detailEcheanceCpta;
        return $this;
    }

    /**
     * Set the detail effet cpta.
     *
     * @param bool|null $detailEffetCpta The detail effet cpta.
     * @return Reglements Returns this Reglements.
     */
    public function setDetailEffetCpta(?bool $detailEffetCpta): Reglements {
        $this->detailEffetCpta = $detailEffetCpta;
        return $this;
    }

    /**
     * Set the devise caisse.
     *
     * @param string|null $deviseCaisse The devise caisse.
     * @return Reglements Returns this Reglements.
     */
    public function setDeviseCaisse(?string $deviseCaisse): Reglements {
        $this->deviseCaisse = $deviseCaisse;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string|null $domiciliationBancaire1 The domiciliation bancaire1.
     * @return Reglements Returns this Reglements.
     */
    public function setDomiciliationBancaire1(?string $domiciliationBancaire1): Reglements {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string|null $domiciliationBancaire2 The domiciliation bancaire2.
     * @return Reglements Returns this Reglements.
     */
    public function setDomiciliationBancaire2(?string $domiciliationBancaire2): Reglements {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the duree echeances.
     *
     * @param string|null $dureeEcheances The duree echeances.
     * @return Reglements Returns this Reglements.
     */
    public function setDureeEcheances(?string $dureeEcheances): Reglements {
        $this->dureeEcheances = $dureeEcheances;
        return $this;
    }

    /**
     * Set the echeance fin decade.
     *
     * @param bool|null $echeanceFinDecade The echeance fin decade.
     * @return Reglements Returns this Reglements.
     */
    public function setEcheanceFinDecade(?bool $echeanceFinDecade): Reglements {
        $this->echeanceFinDecade = $echeanceFinDecade;
        return $this;
    }

    /**
     * Set the echeance fin quinzaine.
     *
     * @param bool|null $echeanceFinQuinzaine The echeance fin quinzaine.
     * @return Reglements Returns this Reglements.
     */
    public function setEcheanceFinQuinzaine(?bool $echeanceFinQuinzaine): Reglements {
        $this->echeanceFinQuinzaine = $echeanceFinQuinzaine;
        return $this;
    }

    /**
     * Set the edit date echeance.
     *
     * @param bool|null $editDateEcheance The edit date echeance.
     * @return Reglements Returns this Reglements.
     */
    public function setEditDateEcheance(?bool $editDateEcheance): Reglements {
        $this->editDateEcheance = $editDateEcheance;
        return $this;
    }

    /**
     * Set the editer cheque.
     *
     * @param bool|null $editerCheque The editer cheque.
     * @return Reglements Returns this Reglements.
     */
    public function setEditerCheque(?bool $editerCheque): Reglements {
        $this->editerCheque = $editerCheque;
        return $this;
    }

    /**
     * Set the especes caisse.
     *
     * @param bool|null $especesCaisse The especes caisse.
     * @return Reglements Returns this Reglements.
     */
    public function setEspecesCaisse(?bool $especesCaisse): Reglements {
        $this->especesCaisse = $especesCaisse;
        return $this;
    }

    /**
     * Set the gestion paiements.
     *
     * @param bool|null $gestionPaiements The gestion paiements.
     * @return Reglements Returns this Reglements.
     */
    public function setGestionPaiements(?bool $gestionPaiements): Reglements {
        $this->gestionPaiements = $gestionPaiements;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return Reglements Returns this Reglements.
     */
    public function setIban(?string $iban): Reglements {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Reglements Returns this Reglements.
     */
    public function setIntitule(?string $intitule): Reglements {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule2.
     *
     * @param string|null $intitule2 The intitule2.
     * @return Reglements Returns this Reglements.
     */
    public function setIntitule2(?string $intitule2): Reglements {
        $this->intitule2 = $intitule2;
        return $this;
    }

    /**
     * Set the intitule3.
     *
     * @param string|null $intitule3 The intitule3.
     * @return Reglements Returns this Reglements.
     */
    public function setIntitule3(?string $intitule3): Reglements {
        $this->intitule3 = $intitule3;
        return $this;
    }

    /**
     * Set the lcr.
     *
     * @param bool|null $lcr The lcr.
     * @return Reglements Returns this Reglements.
     */
    public function setLcr(?bool $lcr): Reglements {
        $this->lcr = $lcr;
        return $this;
    }

    /**
     * Set the lib ecr caisse.
     *
     * @param string|null $libEcrCaisse The lib ecr caisse.
     * @return Reglements Returns this Reglements.
     */
    public function setLibEcrCaisse(?string $libEcrCaisse): Reglements {
        $this->libEcrCaisse = $libEcrCaisse;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string|null $nombreEcheances The nombre echeances.
     * @return Reglements Returns this Reglements.
     */
    public function setNombreEcheances(?string $nombreEcheances): Reglements {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param string|null $paiementDepartLe The paiement depart le.
     * @return Reglements Returns this Reglements.
     */
    public function setPaiementDepartLe(?string $paiementDepartLe): Reglements {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param string|null $paiementLe The paiement le.
     * @return Reglements Returns this Reglements.
     */
    public function setPaiementLe(?string $paiementLe): Reglements {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int|null $paiementNombreDeJours The paiement nombre de jours.
     * @return Reglements Returns this Reglements.
     */
    public function setPaiementNombreDeJours(?int $paiementNombreDeJours): Reglements {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the pas de tiroir caisse.
     *
     * @param bool|null $pasDeTiroirCaisse The pas de tiroir caisse.
     * @return Reglements Returns this Reglements.
     */
    public function setPasDeTiroirCaisse(?bool $pasDeTiroirCaisse): Reglements {
        $this->pasDeTiroirCaisse = $pasDeTiroirCaisse;
        return $this;
    }

    /**
     * Set the pas effet avoir.
     *
     * @param bool|null $pasEffetAvoir The pas effet avoir.
     * @return Reglements Returns this Reglements.
     */
    public function setPasEffetAvoir(?bool $pasEffetAvoir): Reglements {
        $this->pasEffetAvoir = $pasEffetAvoir;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float|null $remisePied The remise pied.
     * @return Reglements Returns this Reglements.
     */
    public function setRemisePied(?float $remisePied): Reglements {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Reglements Returns this Reglements.
     */
    public function setRib(?string $rib): Reglements {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the traite editer.
     *
     * @param bool|null $traiteEditer The traite editer.
     * @return Reglements Returns this Reglements.
     */
    public function setTraiteEditer(?bool $traiteEditer): Reglements {
        $this->traiteEditer = $traiteEditer;
        return $this;
    }

    /**
     * Set the type acceptation.
     *
     * @param string|null $typeAcceptation The type acceptation.
     * @return Reglements Returns this Reglements.
     */
    public function setTypeAcceptation(?string $typeAcceptation): Reglements {
        $this->typeAcceptation = $typeAcceptation;
        return $this;
    }
}
