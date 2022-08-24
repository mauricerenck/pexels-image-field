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
 * Affaires.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Affaires {

    /**
     * Client donneur ordre.
     *
     * @var string|null
     */
    private $clientDonneurOrdre;

    /**
     * Client payeur.
     *
     * @var string|null
     */
    private $clientPayeur;

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
     * Code col creat.
     *
     * @var string|null
     */
    private $codeColCreat;

    /**
     * Code col modif.
     *
     * @var string|null
     */
    private $codeColModif;

    /**
     * Code phase.
     *
     * @var string|null
     */
    private $codePhase;

    /**
     * Cout heure theo.
     *
     * @var float|null
     */
    private $coutHeureTheo;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date debut prevue.
     *
     * @var DateTime|null
     */
    private $dateDebutPrevue;

    /**
     * Date debut reelle.
     *
     * @var DateTime|null
     */
    private $dateDebutReelle;

    /**
     * Date fin prevue.
     *
     * @var DateTime|null
     */
    private $dateFinPrevue;

    /**
     * Date fin reelle.
     *
     * @var DateTime|null
     */
    private $dateFinReelle;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Ech en mt.
     *
     * @var bool|null
     */
    private $echEnMt;

    /**
     * Etat.
     *
     * @var string|null
     */
    private $etat;

    /**
     * Etat1.
     *
     * @var string|null
     */
    private $etat1;

    /**
     * Etat2.
     *
     * @var string|null
     */
    private $etat2;

    /**
     * Etat3.
     *
     * @var string|null
     */
    private $etat3;

    /**
     * Etat4.
     *
     * @var string|null
     */
    private $etat4;

    /**
     * Etat5.
     *
     * @var string|null
     */
    private $etat5;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Liste collab acces.
     *
     * @var string|null
     */
    private $listeCollabAcces;

    /**
     * Mt ca prevu.
     *
     * @var float|null
     */
    private $mtCaPrevu;

    /**
     * Nb heures interim.
     *
     * @var float|null
     */
    private $nbHeuresInterim;

    /**
     * Nb heures prevues.
     *
     * @var float|null
     */
    private $nbHeuresPrevues;

    /**
     * Nb heures reel interim.
     *
     * @var float|null
     */
    private $nbHeuresReelInterim;

    /**
     * Nb heures reel sous trait.
     *
     * @var float|null
     */
    private $nbHeuresReelSousTrait;

    /**
     * Nb heures sous trait.
     *
     * @var float|null
     */
    private $nbHeuresSousTrait;

    /**
     * Nb inscrits.
     *
     * @var int|null
     */
    private $nbInscrits;

    /**
     * Nb jours prevus.
     *
     * @var float|null
     */
    private $nbJoursPrevus;

    /**
     * Nb jours reels.
     *
     * @var float|null
     */
    private $nbJoursReels;

    /**
     * Prochain num arr.
     *
     * @var int|null
     */
    private $prochainNumArr;

    /**
     * Ref devis.
     *
     * @var string|null
     */
    private $refDevis;

    /**
     * Responsable.
     *
     * @var string|null
     */
    private $responsable;

    /**
     * Responsable chantier.
     *
     * @var string|null
     */
    private $responsableChantier;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Type fg.
     *
     * @var string|null
     */
    private $typeFg;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the client donneur ordre.
     *
     * @return string|null Returns the client donneur ordre.
     */
    public function getClientDonneurOrdre(): ?string {
        return $this->clientDonneurOrdre;
    }

    /**
     * Get the client payeur.
     *
     * @return string|null Returns the client payeur.
     */
    public function getClientPayeur(): ?string {
        return $this->clientPayeur;
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
     * Get the code col creat.
     *
     * @return string|null Returns the code col creat.
     */
    public function getCodeColCreat(): ?string {
        return $this->codeColCreat;
    }

    /**
     * Get the code col modif.
     *
     * @return string|null Returns the code col modif.
     */
    public function getCodeColModif(): ?string {
        return $this->codeColModif;
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
     * Get the cout heure theo.
     *
     * @return float|null Returns the cout heure theo.
     */
    public function getCoutHeureTheo(): ?float {
        return $this->coutHeureTheo;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation(): ?DateTime {
        return $this->dateCreation;
    }

    /**
     * Get the date debut prevue.
     *
     * @return DateTime|null Returns the date debut prevue.
     */
    public function getDateDebutPrevue(): ?DateTime {
        return $this->dateDebutPrevue;
    }

    /**
     * Get the date debut reelle.
     *
     * @return DateTime|null Returns the date debut reelle.
     */
    public function getDateDebutReelle(): ?DateTime {
        return $this->dateDebutReelle;
    }

    /**
     * Get the date fin prevue.
     *
     * @return DateTime|null Returns the date fin prevue.
     */
    public function getDateFinPrevue(): ?DateTime {
        return $this->dateFinPrevue;
    }

    /**
     * Get the date fin reelle.
     *
     * @return DateTime|null Returns the date fin reelle.
     */
    public function getDateFinReelle(): ?DateTime {
        return $this->dateFinReelle;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification(): ?DateTime {
        return $this->dateModification;
    }

    /**
     * Get the ech en mt.
     *
     * @return bool|null Returns the ech en mt.
     */
    public function getEchEnMt(): ?bool {
        return $this->echEnMt;
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
     * Get the etat1.
     *
     * @return string|null Returns the etat1.
     */
    public function getEtat1(): ?string {
        return $this->etat1;
    }

    /**
     * Get the etat2.
     *
     * @return string|null Returns the etat2.
     */
    public function getEtat2(): ?string {
        return $this->etat2;
    }

    /**
     * Get the etat3.
     *
     * @return string|null Returns the etat3.
     */
    public function getEtat3(): ?string {
        return $this->etat3;
    }

    /**
     * Get the etat4.
     *
     * @return string|null Returns the etat4.
     */
    public function getEtat4(): ?string {
        return $this->etat4;
    }

    /**
     * Get the etat5.
     *
     * @return string|null Returns the etat5.
     */
    public function getEtat5(): ?string {
        return $this->etat5;
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
     * Get the liste collab acces.
     *
     * @return string|null Returns the liste collab acces.
     */
    public function getListeCollabAcces(): ?string {
        return $this->listeCollabAcces;
    }

    /**
     * Get the mt ca prevu.
     *
     * @return float|null Returns the mt ca prevu.
     */
    public function getMtCaPrevu(): ?float {
        return $this->mtCaPrevu;
    }

    /**
     * Get the nb heures interim.
     *
     * @return float|null Returns the nb heures interim.
     */
    public function getNbHeuresInterim(): ?float {
        return $this->nbHeuresInterim;
    }

    /**
     * Get the nb heures prevues.
     *
     * @return float|null Returns the nb heures prevues.
     */
    public function getNbHeuresPrevues(): ?float {
        return $this->nbHeuresPrevues;
    }

    /**
     * Get the nb heures reel interim.
     *
     * @return float|null Returns the nb heures reel interim.
     */
    public function getNbHeuresReelInterim(): ?float {
        return $this->nbHeuresReelInterim;
    }

    /**
     * Get the nb heures reel sous trait.
     *
     * @return float|null Returns the nb heures reel sous trait.
     */
    public function getNbHeuresReelSousTrait(): ?float {
        return $this->nbHeuresReelSousTrait;
    }

    /**
     * Get the nb heures sous trait.
     *
     * @return float|null Returns the nb heures sous trait.
     */
    public function getNbHeuresSousTrait(): ?float {
        return $this->nbHeuresSousTrait;
    }

    /**
     * Get the nb inscrits.
     *
     * @return int|null Returns the nb inscrits.
     */
    public function getNbInscrits(): ?int {
        return $this->nbInscrits;
    }

    /**
     * Get the nb jours prevus.
     *
     * @return float|null Returns the nb jours prevus.
     */
    public function getNbJoursPrevus(): ?float {
        return $this->nbJoursPrevus;
    }

    /**
     * Get the nb jours reels.
     *
     * @return float|null Returns the nb jours reels.
     */
    public function getNbJoursReels(): ?float {
        return $this->nbJoursReels;
    }

    /**
     * Get the prochain num arr.
     *
     * @return int|null Returns the prochain num arr.
     */
    public function getProchainNumArr(): ?int {
        return $this->prochainNumArr;
    }

    /**
     * Get the ref devis.
     *
     * @return string|null Returns the ref devis.
     */
    public function getRefDevis(): ?string {
        return $this->refDevis;
    }

    /**
     * Get the responsable.
     *
     * @return string|null Returns the responsable.
     */
    public function getResponsable(): ?string {
        return $this->responsable;
    }

    /**
     * Get the responsable chantier.
     *
     * @return string|null Returns the responsable chantier.
     */
    public function getResponsableChantier(): ?string {
        return $this->responsableChantier;
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
     * Get the type fg.
     *
     * @return string|null Returns the type fg.
     */
    public function getTypeFg(): ?string {
        return $this->typeFg;
    }

    /**
     * Set the client donneur ordre.
     *
     * @param string|null $clientDonneurOrdre The client donneur ordre.
     * @return Affaires Returns this Affaires.
     */
    public function setClientDonneurOrdre(?string $clientDonneurOrdre): Affaires {
        $this->clientDonneurOrdre = $clientDonneurOrdre;
        return $this;
    }

    /**
     * Set the client payeur.
     *
     * @param string|null $clientPayeur The client payeur.
     * @return Affaires Returns this Affaires.
     */
    public function setClientPayeur(?string $clientPayeur): Affaires {
        $this->clientPayeur = $clientPayeur;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return Affaires Returns this Affaires.
     */
    public function setCodeAffaire(?string $codeAffaire): Affaires {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code avenant.
     *
     * @param string|null $codeAvenant The code avenant.
     * @return Affaires Returns this Affaires.
     */
    public function setCodeAvenant(?string $codeAvenant): Affaires {
        $this->codeAvenant = $codeAvenant;
        return $this;
    }

    /**
     * Set the code col creat.
     *
     * @param string|null $codeColCreat The code col creat.
     * @return Affaires Returns this Affaires.
     */
    public function setCodeColCreat(?string $codeColCreat): Affaires {
        $this->codeColCreat = $codeColCreat;
        return $this;
    }

    /**
     * Set the code col modif.
     *
     * @param string|null $codeColModif The code col modif.
     * @return Affaires Returns this Affaires.
     */
    public function setCodeColModif(?string $codeColModif): Affaires {
        $this->codeColModif = $codeColModif;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string|null $codePhase The code phase.
     * @return Affaires Returns this Affaires.
     */
    public function setCodePhase(?string $codePhase): Affaires {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the cout heure theo.
     *
     * @param float|null $coutHeureTheo The cout heure theo.
     * @return Affaires Returns this Affaires.
     */
    public function setCoutHeureTheo(?float $coutHeureTheo): Affaires {
        $this->coutHeureTheo = $coutHeureTheo;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Affaires Returns this Affaires.
     */
    public function setDateCreation(?DateTime $dateCreation): Affaires {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date debut prevue.
     *
     * @param DateTime|null $dateDebutPrevue The date debut prevue.
     * @return Affaires Returns this Affaires.
     */
    public function setDateDebutPrevue(?DateTime $dateDebutPrevue): Affaires {
        $this->dateDebutPrevue = $dateDebutPrevue;
        return $this;
    }

    /**
     * Set the date debut reelle.
     *
     * @param DateTime|null $dateDebutReelle The date debut reelle.
     * @return Affaires Returns this Affaires.
     */
    public function setDateDebutReelle(?DateTime $dateDebutReelle): Affaires {
        $this->dateDebutReelle = $dateDebutReelle;
        return $this;
    }

    /**
     * Set the date fin prevue.
     *
     * @param DateTime|null $dateFinPrevue The date fin prevue.
     * @return Affaires Returns this Affaires.
     */
    public function setDateFinPrevue(?DateTime $dateFinPrevue): Affaires {
        $this->dateFinPrevue = $dateFinPrevue;
        return $this;
    }

    /**
     * Set the date fin reelle.
     *
     * @param DateTime|null $dateFinReelle The date fin reelle.
     * @return Affaires Returns this Affaires.
     */
    public function setDateFinReelle(?DateTime $dateFinReelle): Affaires {
        $this->dateFinReelle = $dateFinReelle;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Affaires Returns this Affaires.
     */
    public function setDateModification(?DateTime $dateModification): Affaires {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the ech en mt.
     *
     * @param bool|null $echEnMt The ech en mt.
     * @return Affaires Returns this Affaires.
     */
    public function setEchEnMt(?bool $echEnMt): Affaires {
        $this->echEnMt = $echEnMt;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string|null $etat The etat.
     * @return Affaires Returns this Affaires.
     */
    public function setEtat(?string $etat): Affaires {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the etat1.
     *
     * @param string|null $etat1 The etat1.
     * @return Affaires Returns this Affaires.
     */
    public function setEtat1(?string $etat1): Affaires {
        $this->etat1 = $etat1;
        return $this;
    }

    /**
     * Set the etat2.
     *
     * @param string|null $etat2 The etat2.
     * @return Affaires Returns this Affaires.
     */
    public function setEtat2(?string $etat2): Affaires {
        $this->etat2 = $etat2;
        return $this;
    }

    /**
     * Set the etat3.
     *
     * @param string|null $etat3 The etat3.
     * @return Affaires Returns this Affaires.
     */
    public function setEtat3(?string $etat3): Affaires {
        $this->etat3 = $etat3;
        return $this;
    }

    /**
     * Set the etat4.
     *
     * @param string|null $etat4 The etat4.
     * @return Affaires Returns this Affaires.
     */
    public function setEtat4(?string $etat4): Affaires {
        $this->etat4 = $etat4;
        return $this;
    }

    /**
     * Set the etat5.
     *
     * @param string|null $etat5 The etat5.
     * @return Affaires Returns this Affaires.
     */
    public function setEtat5(?string $etat5): Affaires {
        $this->etat5 = $etat5;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Affaires Returns this Affaires.
     */
    public function setIntitule(?string $intitule): Affaires {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the liste collab acces.
     *
     * @param string|null $listeCollabAcces The liste collab acces.
     * @return Affaires Returns this Affaires.
     */
    public function setListeCollabAcces(?string $listeCollabAcces): Affaires {
        $this->listeCollabAcces = $listeCollabAcces;
        return $this;
    }

    /**
     * Set the mt ca prevu.
     *
     * @param float|null $mtCaPrevu The mt ca prevu.
     * @return Affaires Returns this Affaires.
     */
    public function setMtCaPrevu(?float $mtCaPrevu): Affaires {
        $this->mtCaPrevu = $mtCaPrevu;
        return $this;
    }

    /**
     * Set the nb heures interim.
     *
     * @param float|null $nbHeuresInterim The nb heures interim.
     * @return Affaires Returns this Affaires.
     */
    public function setNbHeuresInterim(?float $nbHeuresInterim): Affaires {
        $this->nbHeuresInterim = $nbHeuresInterim;
        return $this;
    }

    /**
     * Set the nb heures prevues.
     *
     * @param float|null $nbHeuresPrevues The nb heures prevues.
     * @return Affaires Returns this Affaires.
     */
    public function setNbHeuresPrevues(?float $nbHeuresPrevues): Affaires {
        $this->nbHeuresPrevues = $nbHeuresPrevues;
        return $this;
    }

    /**
     * Set the nb heures reel interim.
     *
     * @param float|null $nbHeuresReelInterim The nb heures reel interim.
     * @return Affaires Returns this Affaires.
     */
    public function setNbHeuresReelInterim(?float $nbHeuresReelInterim): Affaires {
        $this->nbHeuresReelInterim = $nbHeuresReelInterim;
        return $this;
    }

    /**
     * Set the nb heures reel sous trait.
     *
     * @param float|null $nbHeuresReelSousTrait The nb heures reel sous trait.
     * @return Affaires Returns this Affaires.
     */
    public function setNbHeuresReelSousTrait(?float $nbHeuresReelSousTrait): Affaires {
        $this->nbHeuresReelSousTrait = $nbHeuresReelSousTrait;
        return $this;
    }

    /**
     * Set the nb heures sous trait.
     *
     * @param float|null $nbHeuresSousTrait The nb heures sous trait.
     * @return Affaires Returns this Affaires.
     */
    public function setNbHeuresSousTrait(?float $nbHeuresSousTrait): Affaires {
        $this->nbHeuresSousTrait = $nbHeuresSousTrait;
        return $this;
    }

    /**
     * Set the nb inscrits.
     *
     * @param int|null $nbInscrits The nb inscrits.
     * @return Affaires Returns this Affaires.
     */
    public function setNbInscrits(?int $nbInscrits): Affaires {
        $this->nbInscrits = $nbInscrits;
        return $this;
    }

    /**
     * Set the nb jours prevus.
     *
     * @param float|null $nbJoursPrevus The nb jours prevus.
     * @return Affaires Returns this Affaires.
     */
    public function setNbJoursPrevus(?float $nbJoursPrevus): Affaires {
        $this->nbJoursPrevus = $nbJoursPrevus;
        return $this;
    }

    /**
     * Set the nb jours reels.
     *
     * @param float|null $nbJoursReels The nb jours reels.
     * @return Affaires Returns this Affaires.
     */
    public function setNbJoursReels(?float $nbJoursReels): Affaires {
        $this->nbJoursReels = $nbJoursReels;
        return $this;
    }

    /**
     * Set the prochain num arr.
     *
     * @param int|null $prochainNumArr The prochain num arr.
     * @return Affaires Returns this Affaires.
     */
    public function setProchainNumArr(?int $prochainNumArr): Affaires {
        $this->prochainNumArr = $prochainNumArr;
        return $this;
    }

    /**
     * Set the ref devis.
     *
     * @param string|null $refDevis The ref devis.
     * @return Affaires Returns this Affaires.
     */
    public function setRefDevis(?string $refDevis): Affaires {
        $this->refDevis = $refDevis;
        return $this;
    }

    /**
     * Set the responsable.
     *
     * @param string|null $responsable The responsable.
     * @return Affaires Returns this Affaires.
     */
    public function setResponsable(?string $responsable): Affaires {
        $this->responsable = $responsable;
        return $this;
    }

    /**
     * Set the responsable chantier.
     *
     * @param string|null $responsableChantier The responsable chantier.
     * @return Affaires Returns this Affaires.
     */
    public function setResponsableChantier(?string $responsableChantier): Affaires {
        $this->responsableChantier = $responsableChantier;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Affaires Returns this Affaires.
     */
    public function setType(?string $type): Affaires {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the type fg.
     *
     * @param string|null $typeFg The type fg.
     * @return Affaires Returns this Affaires.
     */
    public function setTypeFg(?string $typeFg): Affaires {
        $this->typeFg = $typeFg;
        return $this;
    }
}
