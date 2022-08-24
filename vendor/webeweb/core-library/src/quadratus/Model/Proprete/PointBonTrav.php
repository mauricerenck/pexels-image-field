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
 * Point bon trav.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PointBonTrav {

    /**
     * Avenant signe.
     *
     * @var bool|null
     */
    private $avenantSigne;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code equipe.
     *
     * @var string|null
     */
    private $codeEquipe;

    /**
     * Code tache type.
     *
     * @var string|null
     */
    private $codeTacheType;

    /**
     * Date passage.
     *
     * @var DateTime|null
     */
    private $datePassage;

    /**
     * Date ref bt.
     *
     * @var DateTime|null
     */
    private $dateRefBt;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * From gen bt.
     *
     * @var bool|null
     */
    private $fromGenBt;

    /**
     * Heure deb.
     *
     * @var DateTime|null
     */
    private $heureDeb;

    /**
     * Heure deb mob.
     *
     * @var DateTime|null
     */
    private $heureDebMob;

    /**
     * Heure fin mob.
     *
     * @var DateTime|null
     */
    private $heureFinMob;

    /**
     * Heures jour.
     *
     * @var DateTime|null
     */
    private $heuresJour;

    /**
     * Heures nuit.
     *
     * @var DateTime|null
     */
    private $heuresNuit;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Nom prenom.
     *
     * @var string|null
     */
    private $nomPrenom;

    /**
     * Num bt.
     *
     * @var int|null
     */
    private $numBt;

    /**
     * Num chrono.
     *
     * @var int|null
     */
    private $numChrono;

    /**
     * Numero avenant.
     *
     * @var int|null
     */
    private $numeroAvenant;

    /**
     * Paniers.
     *
     * @var float|null
     */
    private $paniers;

    /**
     * Prime1.
     *
     * @var float|null
     */
    private $prime1;

    /**
     * Prime2.
     *
     * @var float|null
     */
    private $prime2;

    /**
     * Prime3.
     *
     * @var float|null
     */
    private $prime3;

    /**
     * Qualification.
     *
     * @var string|null
     */
    private $qualification;

    /**
     * Transfert paie.
     *
     * @var string|null
     */
    private $transfertPaie;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Valide mob.
     *
     * @var bool|null
     */
    private $valideMob;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the avenant signe.
     *
     * @return bool|null Returns the avenant signe.
     */
    public function getAvenantSigne(): ?bool {
        return $this->avenantSigne;
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
     * Get the code equipe.
     *
     * @return string|null Returns the code equipe.
     */
    public function getCodeEquipe(): ?string {
        return $this->codeEquipe;
    }

    /**
     * Get the code tache type.
     *
     * @return string|null Returns the code tache type.
     */
    public function getCodeTacheType(): ?string {
        return $this->codeTacheType;
    }

    /**
     * Get the date passage.
     *
     * @return DateTime|null Returns the date passage.
     */
    public function getDatePassage(): ?DateTime {
        return $this->datePassage;
    }

    /**
     * Get the date ref bt.
     *
     * @return DateTime|null Returns the date ref bt.
     */
    public function getDateRefBt(): ?DateTime {
        return $this->dateRefBt;
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
     * Get the from gen bt.
     *
     * @return bool|null Returns the from gen bt.
     */
    public function getFromGenBt(): ?bool {
        return $this->fromGenBt;
    }

    /**
     * Get the heure deb.
     *
     * @return DateTime|null Returns the heure deb.
     */
    public function getHeureDeb(): ?DateTime {
        return $this->heureDeb;
    }

    /**
     * Get the heure deb mob.
     *
     * @return DateTime|null Returns the heure deb mob.
     */
    public function getHeureDebMob(): ?DateTime {
        return $this->heureDebMob;
    }

    /**
     * Get the heure fin mob.
     *
     * @return DateTime|null Returns the heure fin mob.
     */
    public function getHeureFinMob(): ?DateTime {
        return $this->heureFinMob;
    }

    /**
     * Get the heures jour.
     *
     * @return DateTime|null Returns the heures jour.
     */
    public function getHeuresJour(): ?DateTime {
        return $this->heuresJour;
    }

    /**
     * Get the heures nuit.
     *
     * @return DateTime|null Returns the heures nuit.
     */
    public function getHeuresNuit(): ?DateTime {
        return $this->heuresNuit;
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
     * Get the nom prenom.
     *
     * @return string|null Returns the nom prenom.
     */
    public function getNomPrenom(): ?string {
        return $this->nomPrenom;
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
     * Get the num chrono.
     *
     * @return int|null Returns the num chrono.
     */
    public function getNumChrono(): ?int {
        return $this->numChrono;
    }

    /**
     * Get the numero avenant.
     *
     * @return int|null Returns the numero avenant.
     */
    public function getNumeroAvenant(): ?int {
        return $this->numeroAvenant;
    }

    /**
     * Get the paniers.
     *
     * @return float|null Returns the paniers.
     */
    public function getPaniers(): ?float {
        return $this->paniers;
    }

    /**
     * Get the prime1.
     *
     * @return float|null Returns the prime1.
     */
    public function getPrime1(): ?float {
        return $this->prime1;
    }

    /**
     * Get the prime2.
     *
     * @return float|null Returns the prime2.
     */
    public function getPrime2(): ?float {
        return $this->prime2;
    }

    /**
     * Get the prime3.
     *
     * @return float|null Returns the prime3.
     */
    public function getPrime3(): ?float {
        return $this->prime3;
    }

    /**
     * Get the qualification.
     *
     * @return string|null Returns the qualification.
     */
    public function getQualification(): ?string {
        return $this->qualification;
    }

    /**
     * Get the transfert paie.
     *
     * @return string|null Returns the transfert paie.
     */
    public function getTransfertPaie(): ?string {
        return $this->transfertPaie;
    }

    /**
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
    }

    /**
     * Get the valide mob.
     *
     * @return bool|null Returns the valide mob.
     */
    public function getValideMob(): ?bool {
        return $this->valideMob;
    }

    /**
     * Set the avenant signe.
     *
     * @param bool|null $avenantSigne The avenant signe.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setAvenantSigne(?bool $avenantSigne): PointBonTrav {
        $this->avenantSigne = $avenantSigne;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setCodeEmploye(?string $codeEmploye): PointBonTrav {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code equipe.
     *
     * @param string|null $codeEquipe The code equipe.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setCodeEquipe(?string $codeEquipe): PointBonTrav {
        $this->codeEquipe = $codeEquipe;
        return $this;
    }

    /**
     * Set the code tache type.
     *
     * @param string|null $codeTacheType The code tache type.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setCodeTacheType(?string $codeTacheType): PointBonTrav {
        $this->codeTacheType = $codeTacheType;
        return $this;
    }

    /**
     * Set the date passage.
     *
     * @param DateTime|null $datePassage The date passage.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setDatePassage(?DateTime $datePassage): PointBonTrav {
        $this->datePassage = $datePassage;
        return $this;
    }

    /**
     * Set the date ref bt.
     *
     * @param DateTime|null $dateRefBt The date ref bt.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setDateRefBt(?DateTime $dateRefBt): PointBonTrav {
        $this->dateRefBt = $dateRefBt;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setEtat(?string $etat): PointBonTrav {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the from gen bt.
     *
     * @param bool|null $fromGenBt The from gen bt.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setFromGenBt(?bool $fromGenBt): PointBonTrav {
        $this->fromGenBt = $fromGenBt;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime|null $heureDeb The heure deb.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setHeureDeb(?DateTime $heureDeb): PointBonTrav {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the heure deb mob.
     *
     * @param DateTime|null $heureDebMob The heure deb mob.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setHeureDebMob(?DateTime $heureDebMob): PointBonTrav {
        $this->heureDebMob = $heureDebMob;
        return $this;
    }

    /**
     * Set the heure fin mob.
     *
     * @param DateTime|null $heureFinMob The heure fin mob.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setHeureFinMob(?DateTime $heureFinMob): PointBonTrav {
        $this->heureFinMob = $heureFinMob;
        return $this;
    }

    /**
     * Set the heures jour.
     *
     * @param DateTime|null $heuresJour The heures jour.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setHeuresJour(?DateTime $heuresJour): PointBonTrav {
        $this->heuresJour = $heuresJour;
        return $this;
    }

    /**
     * Set the heures nuit.
     *
     * @param DateTime|null $heuresNuit The heures nuit.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setHeuresNuit(?DateTime $heuresNuit): PointBonTrav {
        $this->heuresNuit = $heuresNuit;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setMontant(?float $montant): PointBonTrav {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the nom prenom.
     *
     * @param string|null $nomPrenom The nom prenom.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setNomPrenom(?string $nomPrenom): PointBonTrav {
        $this->nomPrenom = $nomPrenom;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int|null $numBt The num bt.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setNumBt(?int $numBt): PointBonTrav {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the num chrono.
     *
     * @param int|null $numChrono The num chrono.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setNumChrono(?int $numChrono): PointBonTrav {
        $this->numChrono = $numChrono;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int|null $numeroAvenant The numero avenant.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setNumeroAvenant(?int $numeroAvenant): PointBonTrav {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the paniers.
     *
     * @param float|null $paniers The paniers.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setPaniers(?float $paniers): PointBonTrav {
        $this->paniers = $paniers;
        return $this;
    }

    /**
     * Set the prime1.
     *
     * @param float|null $prime1 The prime1.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setPrime1(?float $prime1): PointBonTrav {
        $this->prime1 = $prime1;
        return $this;
    }

    /**
     * Set the prime2.
     *
     * @param float|null $prime2 The prime2.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setPrime2(?float $prime2): PointBonTrav {
        $this->prime2 = $prime2;
        return $this;
    }

    /**
     * Set the prime3.
     *
     * @param float|null $prime3 The prime3.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setPrime3(?float $prime3): PointBonTrav {
        $this->prime3 = $prime3;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string|null $qualification The qualification.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setQualification(?string $qualification): PointBonTrav {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Set the transfert paie.
     *
     * @param string|null $transfertPaie The transfert paie.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setTransfertPaie(?string $transfertPaie): PointBonTrav {
        $this->transfertPaie = $transfertPaie;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setUniqId(?string $uniqId): PointBonTrav {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the valide mob.
     *
     * @param bool|null $valideMob The valide mob.
     * @return PointBonTrav Returns this Point bon trav.
     */
    public function setValideMob(?bool $valideMob): PointBonTrav {
        $this->valideMob = $valideMob;
        return $this;
    }
}
