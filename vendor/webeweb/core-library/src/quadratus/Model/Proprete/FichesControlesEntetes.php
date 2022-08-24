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
 * Fiches controles entetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class FichesControlesEntetes {

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
     * Controleur.
     *
     * @var string|null
     */
    private $controleur;

    /**
     * Date controle.
     *
     * @var DateTime|null
     */
    private $dateControle;

    /**
     * Date ctrl prevue.
     *
     * @var DateTime|null
     */
    private $dateCtrlPrevue;

    /**
     * Date transfert.
     *
     * @var DateTime|null
     */
    private $dateTransfert;

    /**
     * Fiche contradictoire.
     *
     * @var bool|null
     */
    private $ficheContradictoire;

    /**
     * Fiche signee.
     *
     * @var bool|null
     */
    private $ficheSignee;

    /**
     * Heure debut.
     *
     * @var DateTime|null
     */
    private $heureDebut;

    /**
     * Heure fin.
     *
     * @var DateTime|null
     */
    private $heureFin;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * Local.
     *
     * @var string|null
     */
    private $local;

    /**
     * Local pere.
     *
     * @var string|null
     */
    private $localPere;

    /**
     * Note globale.
     *
     * @var float|null
     */
    private $noteGlobale;

    /**
     * Note objectif.
     *
     * @var float|null
     */
    private $noteObjectif;

    /**
     * Numero fiche.
     *
     * @var int|null
     */
    private $numeroFiche;

    /**
     * Numero noeud local.
     *
     * @var int|null
     */
    private $numeroNoeudLocal;

    /**
     * Satisfaction generale.
     *
     * @var string|null
     */
    private $satisfactionGenerale;

    /**
     * Type controle.
     *
     * @var string|null
     */
    private $typeControle;

    /**
     * Uniq id blocage.
     *
     * @var string|null
     */
    private $uniqIdBlocage;

    /**
     * Uniq id noeud.
     *
     * @var string|null
     */
    private $uniqIdNoeud;

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
     * Get the controleur.
     *
     * @return string|null Returns the controleur.
     */
    public function getControleur(): ?string {
        return $this->controleur;
    }

    /**
     * Get the date controle.
     *
     * @return DateTime|null Returns the date controle.
     */
    public function getDateControle(): ?DateTime {
        return $this->dateControle;
    }

    /**
     * Get the date ctrl prevue.
     *
     * @return DateTime|null Returns the date ctrl prevue.
     */
    public function getDateCtrlPrevue(): ?DateTime {
        return $this->dateCtrlPrevue;
    }

    /**
     * Get the date transfert.
     *
     * @return DateTime|null Returns the date transfert.
     */
    public function getDateTransfert(): ?DateTime {
        return $this->dateTransfert;
    }

    /**
     * Get the fiche contradictoire.
     *
     * @return bool|null Returns the fiche contradictoire.
     */
    public function getFicheContradictoire(): ?bool {
        return $this->ficheContradictoire;
    }

    /**
     * Get the fiche signee.
     *
     * @return bool|null Returns the fiche signee.
     */
    public function getFicheSignee(): ?bool {
        return $this->ficheSignee;
    }

    /**
     * Get the heure debut.
     *
     * @return DateTime|null Returns the heure debut.
     */
    public function getHeureDebut(): ?DateTime {
        return $this->heureDebut;
    }

    /**
     * Get the heure fin.
     *
     * @return DateTime|null Returns the heure fin.
     */
    public function getHeureFin(): ?DateTime {
        return $this->heureFin;
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
     * Get the lien document.
     *
     * @return string|null Returns the lien document.
     */
    public function getLienDocument(): ?string {
        return $this->lienDocument;
    }

    /**
     * Get the local.
     *
     * @return string|null Returns the local.
     */
    public function getLocal(): ?string {
        return $this->local;
    }

    /**
     * Get the local pere.
     *
     * @return string|null Returns the local pere.
     */
    public function getLocalPere(): ?string {
        return $this->localPere;
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
     * Get the note objectif.
     *
     * @return float|null Returns the note objectif.
     */
    public function getNoteObjectif(): ?float {
        return $this->noteObjectif;
    }

    /**
     * Get the numero fiche.
     *
     * @return int|null Returns the numero fiche.
     */
    public function getNumeroFiche(): ?int {
        return $this->numeroFiche;
    }

    /**
     * Get the numero noeud local.
     *
     * @return int|null Returns the numero noeud local.
     */
    public function getNumeroNoeudLocal(): ?int {
        return $this->numeroNoeudLocal;
    }

    /**
     * Get the satisfaction generale.
     *
     * @return string|null Returns the satisfaction generale.
     */
    public function getSatisfactionGenerale(): ?string {
        return $this->satisfactionGenerale;
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
     * Get the uniq id blocage.
     *
     * @return string|null Returns the uniq id blocage.
     */
    public function getUniqIdBlocage(): ?string {
        return $this->uniqIdBlocage;
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
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setCodeAffaire(?string $codeAffaire): FichesControlesEntetes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setCodeChantier(?string $codeChantier): FichesControlesEntetes {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setCodeClient(?string $codeClient): FichesControlesEntetes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): FichesControlesEntetes {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setCommentaire(?string $commentaire): FichesControlesEntetes {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the controleur.
     *
     * @param string|null $controleur The controleur.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setControleur(?string $controleur): FichesControlesEntetes {
        $this->controleur = $controleur;
        return $this;
    }

    /**
     * Set the date controle.
     *
     * @param DateTime|null $dateControle The date controle.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setDateControle(?DateTime $dateControle): FichesControlesEntetes {
        $this->dateControle = $dateControle;
        return $this;
    }

    /**
     * Set the date ctrl prevue.
     *
     * @param DateTime|null $dateCtrlPrevue The date ctrl prevue.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setDateCtrlPrevue(?DateTime $dateCtrlPrevue): FichesControlesEntetes {
        $this->dateCtrlPrevue = $dateCtrlPrevue;
        return $this;
    }

    /**
     * Set the date transfert.
     *
     * @param DateTime|null $dateTransfert The date transfert.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setDateTransfert(?DateTime $dateTransfert): FichesControlesEntetes {
        $this->dateTransfert = $dateTransfert;
        return $this;
    }

    /**
     * Set the fiche contradictoire.
     *
     * @param bool|null $ficheContradictoire The fiche contradictoire.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setFicheContradictoire(?bool $ficheContradictoire): FichesControlesEntetes {
        $this->ficheContradictoire = $ficheContradictoire;
        return $this;
    }

    /**
     * Set the fiche signee.
     *
     * @param bool|null $ficheSignee The fiche signee.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setFicheSignee(?bool $ficheSignee): FichesControlesEntetes {
        $this->ficheSignee = $ficheSignee;
        return $this;
    }

    /**
     * Set the heure debut.
     *
     * @param DateTime|null $heureDebut The heure debut.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setHeureDebut(?DateTime $heureDebut): FichesControlesEntetes {
        $this->heureDebut = $heureDebut;
        return $this;
    }

    /**
     * Set the heure fin.
     *
     * @param DateTime|null $heureFin The heure fin.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setHeureFin(?DateTime $heureFin): FichesControlesEntetes {
        $this->heureFin = $heureFin;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setLibelle(?string $libelle): FichesControlesEntetes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setLienDocument(?string $lienDocument): FichesControlesEntetes {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the local.
     *
     * @param string|null $local The local.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setLocal(?string $local): FichesControlesEntetes {
        $this->local = $local;
        return $this;
    }

    /**
     * Set the local pere.
     *
     * @param string|null $localPere The local pere.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setLocalPere(?string $localPere): FichesControlesEntetes {
        $this->localPere = $localPere;
        return $this;
    }

    /**
     * Set the note globale.
     *
     * @param float|null $noteGlobale The note globale.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setNoteGlobale(?float $noteGlobale): FichesControlesEntetes {
        $this->noteGlobale = $noteGlobale;
        return $this;
    }

    /**
     * Set the note objectif.
     *
     * @param float|null $noteObjectif The note objectif.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setNoteObjectif(?float $noteObjectif): FichesControlesEntetes {
        $this->noteObjectif = $noteObjectif;
        return $this;
    }

    /**
     * Set the numero fiche.
     *
     * @param int|null $numeroFiche The numero fiche.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setNumeroFiche(?int $numeroFiche): FichesControlesEntetes {
        $this->numeroFiche = $numeroFiche;
        return $this;
    }

    /**
     * Set the numero noeud local.
     *
     * @param int|null $numeroNoeudLocal The numero noeud local.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setNumeroNoeudLocal(?int $numeroNoeudLocal): FichesControlesEntetes {
        $this->numeroNoeudLocal = $numeroNoeudLocal;
        return $this;
    }

    /**
     * Set the satisfaction generale.
     *
     * @param string|null $satisfactionGenerale The satisfaction generale.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setSatisfactionGenerale(?string $satisfactionGenerale): FichesControlesEntetes {
        $this->satisfactionGenerale = $satisfactionGenerale;
        return $this;
    }

    /**
     * Set the type controle.
     *
     * @param string|null $typeControle The type controle.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setTypeControle(?string $typeControle): FichesControlesEntetes {
        $this->typeControle = $typeControle;
        return $this;
    }

    /**
     * Set the uniq id blocage.
     *
     * @param string|null $uniqIdBlocage The uniq id blocage.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setUniqIdBlocage(?string $uniqIdBlocage): FichesControlesEntetes {
        $this->uniqIdBlocage = $uniqIdBlocage;
        return $this;
    }

    /**
     * Set the uniq id noeud.
     *
     * @param string|null $uniqIdNoeud The uniq id noeud.
     * @return FichesControlesEntetes Returns this Fiches controles entetes.
     */
    public function setUniqIdNoeud(?string $uniqIdNoeud): FichesControlesEntetes {
        $this->uniqIdNoeud = $uniqIdNoeud;
        return $this;
    }
}
