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
 * Acces web.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AccesWeb {

    /**
     * Acces agenda.
     *
     * @var bool|null
     */
    private $accesAgenda;

    /**
     * Acces articles.
     *
     * @var bool|null
     */
    private $accesArticles;

    /**
     * Acces articles consommes.
     *
     * @var bool|null
     */
    private $accesArticlesConsommes;

    /**
     * Acces clients.
     *
     * @var bool|null
     */
    private $accesClients;

    /**
     * Acces clients favoris.
     *
     * @var bool|null
     */
    private $accesClientsFavoris;

    /**
     * Acces consultation.
     *
     * @var bool|null
     */
    private $accesConsultation;

    /**
     * Acces dossier cabinet.
     *
     * @var bool|null
     */
    private $accesDossierCabinet;

    /**
     * Acces facture.
     *
     * @var bool|null
     */
    private $accesFacture;

    /**
     * Acces i bureau.
     *
     * @var bool|null
     */
    private $accesIBureau;

    /**
     * Acces interventions.
     *
     * @var bool|null
     */
    private $accesInterventions;

    /**
     * Acces liste collab.
     *
     * @var bool|null
     */
    private $accesListeCollab;

    /**
     * Acces messages.
     *
     * @var bool|null
     */
    private $accesMessages;

    /**
     * Acces note frais.
     *
     * @var bool|null
     */
    private $accesNoteFrais;

    /**
     * Acces repertoire.
     *
     * @var bool|null
     */
    private $accesRepertoire;

    /**
     * Acces saisie commande.
     *
     * @var bool|null
     */
    private $accesSaisieCommande;

    /**
     * Acces saisie tp.
     *
     * @var bool|null
     */
    private $accesSaisieTp;

    /**
     * Acces solde cpta.
     *
     * @var bool|null
     */
    private $accesSoldeCpta;

    /**
     * Acces tableaux bord.
     *
     * @var bool|null
     */
    private $accesTableauxBord;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Date activation.
     *
     * @var DateTime|null
     */
    private $dateActivation;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Dern tentative.
     *
     * @var DateTime|null
     */
    private $dernTentative;

    /**
     * Doss cpta.
     *
     * @var string|null
     */
    private $dossCpta;

    /**
     * Doss paie.
     *
     * @var string|null
     */
    private $dossPaie;

    /**
     * Doss prop.
     *
     * @var string|null
     */
    private $dossProp;

    /**
     * Duplique intervention.
     *
     * @var bool|null
     */
    private $dupliqueIntervention;

    /**
     * i key.
     *
     * @var string|null
     */
    private $iKey;

    /**
     * Meme mdp que i bureau.
     *
     * @var bool|null
     */
    private $memeMdpQueIBureau;

    /**
     * Mot de passe.
     *
     * @var string|null
     */
    private $motDePasse;

    /**
     * Restr cli assist1.
     *
     * @var string|null
     */
    private $restrCliAssist1;

    /**
     * Restr cli assist2.
     *
     * @var string|null
     */
    private $restrCliAssist2;

    /**
     * Restr cli autre1.
     *
     * @var string|null
     */
    private $restrCliAutre1;

    /**
     * Restr cli autre2.
     *
     * @var string|null
     */
    private $restrCliAutre2;

    /**
     * Restr cli collab.
     *
     * @var string|null
     */
    private $restrCliCollab;

    /**
     * Restr cli debut.
     *
     * @var string|null
     */
    private $restrCliDebut;

    /**
     * Restr cli expert.
     *
     * @var string|null
     */
    private $restrCliExpert;

    /**
     * Restr cli fin.
     *
     * @var string|null
     */
    private $restrCliFin;

    /**
     * Restr cli portef.
     *
     * @var string|null
     */
    private $restrCliPortef;

    /**
     * Tentatives.
     *
     * @var string|null
     */
    private $tentatives;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the acces agenda.
     *
     * @return bool|null Returns the acces agenda.
     */
    public function getAccesAgenda(): ?bool {
        return $this->accesAgenda;
    }

    /**
     * Get the acces articles.
     *
     * @return bool|null Returns the acces articles.
     */
    public function getAccesArticles(): ?bool {
        return $this->accesArticles;
    }

    /**
     * Get the acces articles consommes.
     *
     * @return bool|null Returns the acces articles consommes.
     */
    public function getAccesArticlesConsommes(): ?bool {
        return $this->accesArticlesConsommes;
    }

    /**
     * Get the acces clients.
     *
     * @return bool|null Returns the acces clients.
     */
    public function getAccesClients(): ?bool {
        return $this->accesClients;
    }

    /**
     * Get the acces clients favoris.
     *
     * @return bool|null Returns the acces clients favoris.
     */
    public function getAccesClientsFavoris(): ?bool {
        return $this->accesClientsFavoris;
    }

    /**
     * Get the acces consultation.
     *
     * @return bool|null Returns the acces consultation.
     */
    public function getAccesConsultation(): ?bool {
        return $this->accesConsultation;
    }

    /**
     * Get the acces dossier cabinet.
     *
     * @return bool|null Returns the acces dossier cabinet.
     */
    public function getAccesDossierCabinet(): ?bool {
        return $this->accesDossierCabinet;
    }

    /**
     * Get the acces facture.
     *
     * @return bool|null Returns the acces facture.
     */
    public function getAccesFacture(): ?bool {
        return $this->accesFacture;
    }

    /**
     * Get the acces i bureau.
     *
     * @return bool|null Returns the acces i bureau.
     */
    public function getAccesIBureau(): ?bool {
        return $this->accesIBureau;
    }

    /**
     * Get the acces interventions.
     *
     * @return bool|null Returns the acces interventions.
     */
    public function getAccesInterventions(): ?bool {
        return $this->accesInterventions;
    }

    /**
     * Get the acces liste collab.
     *
     * @return bool|null Returns the acces liste collab.
     */
    public function getAccesListeCollab(): ?bool {
        return $this->accesListeCollab;
    }

    /**
     * Get the acces messages.
     *
     * @return bool|null Returns the acces messages.
     */
    public function getAccesMessages(): ?bool {
        return $this->accesMessages;
    }

    /**
     * Get the acces note frais.
     *
     * @return bool|null Returns the acces note frais.
     */
    public function getAccesNoteFrais(): ?bool {
        return $this->accesNoteFrais;
    }

    /**
     * Get the acces repertoire.
     *
     * @return bool|null Returns the acces repertoire.
     */
    public function getAccesRepertoire(): ?bool {
        return $this->accesRepertoire;
    }

    /**
     * Get the acces saisie commande.
     *
     * @return bool|null Returns the acces saisie commande.
     */
    public function getAccesSaisieCommande(): ?bool {
        return $this->accesSaisieCommande;
    }

    /**
     * Get the acces saisie tp.
     *
     * @return bool|null Returns the acces saisie tp.
     */
    public function getAccesSaisieTp(): ?bool {
        return $this->accesSaisieTp;
    }

    /**
     * Get the acces solde cpta.
     *
     * @return bool|null Returns the acces solde cpta.
     */
    public function getAccesSoldeCpta(): ?bool {
        return $this->accesSoldeCpta;
    }

    /**
     * Get the acces tableaux bord.
     *
     * @return bool|null Returns the acces tableaux bord.
     */
    public function getAccesTableauxBord(): ?bool {
        return $this->accesTableauxBord;
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
     * Get the date activation.
     *
     * @return DateTime|null Returns the date activation.
     */
    public function getDateActivation(): ?DateTime {
        return $this->dateActivation;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin(): ?DateTime {
        return $this->dateFin;
    }

    /**
     * Get the dern tentative.
     *
     * @return DateTime|null Returns the dern tentative.
     */
    public function getDernTentative(): ?DateTime {
        return $this->dernTentative;
    }

    /**
     * Get the doss cpta.
     *
     * @return string|null Returns the doss cpta.
     */
    public function getDossCpta(): ?string {
        return $this->dossCpta;
    }

    /**
     * Get the doss paie.
     *
     * @return string|null Returns the doss paie.
     */
    public function getDossPaie(): ?string {
        return $this->dossPaie;
    }

    /**
     * Get the doss prop.
     *
     * @return string|null Returns the doss prop.
     */
    public function getDossProp(): ?string {
        return $this->dossProp;
    }

    /**
     * Get the duplique intervention.
     *
     * @return bool|null Returns the duplique intervention.
     */
    public function getDupliqueIntervention(): ?bool {
        return $this->dupliqueIntervention;
    }

    /**
     * Get the meme mdp que i bureau.
     *
     * @return bool|null Returns the meme mdp que i bureau.
     */
    public function getMemeMdpQueIBureau(): ?bool {
        return $this->memeMdpQueIBureau;
    }

    /**
     * Get the mot de passe.
     *
     * @return string|null Returns the mot de passe.
     */
    public function getMotDePasse(): ?string {
        return $this->motDePasse;
    }

    /**
     * Get the restr cli assist1.
     *
     * @return string|null Returns the restr cli assist1.
     */
    public function getRestrCliAssist1(): ?string {
        return $this->restrCliAssist1;
    }

    /**
     * Get the restr cli assist2.
     *
     * @return string|null Returns the restr cli assist2.
     */
    public function getRestrCliAssist2(): ?string {
        return $this->restrCliAssist2;
    }

    /**
     * Get the restr cli autre1.
     *
     * @return string|null Returns the restr cli autre1.
     */
    public function getRestrCliAutre1(): ?string {
        return $this->restrCliAutre1;
    }

    /**
     * Get the restr cli autre2.
     *
     * @return string|null Returns the restr cli autre2.
     */
    public function getRestrCliAutre2(): ?string {
        return $this->restrCliAutre2;
    }

    /**
     * Get the restr cli collab.
     *
     * @return string|null Returns the restr cli collab.
     */
    public function getRestrCliCollab(): ?string {
        return $this->restrCliCollab;
    }

    /**
     * Get the restr cli debut.
     *
     * @return string|null Returns the restr cli debut.
     */
    public function getRestrCliDebut(): ?string {
        return $this->restrCliDebut;
    }

    /**
     * Get the restr cli expert.
     *
     * @return string|null Returns the restr cli expert.
     */
    public function getRestrCliExpert(): ?string {
        return $this->restrCliExpert;
    }

    /**
     * Get the restr cli fin.
     *
     * @return string|null Returns the restr cli fin.
     */
    public function getRestrCliFin(): ?string {
        return $this->restrCliFin;
    }

    /**
     * Get the restr cli portef.
     *
     * @return string|null Returns the restr cli portef.
     */
    public function getRestrCliPortef(): ?string {
        return $this->restrCliPortef;
    }

    /**
     * Get the tentatives.
     *
     * @return string|null Returns the tentatives.
     */
    public function getTentatives(): ?string {
        return $this->tentatives;
    }

    /**
     * Get the i key.
     *
     * @return string|null Returns the i key.
     */
    public function getiKey(): ?string {
        return $this->iKey;
    }

    /**
     * Set the acces agenda.
     *
     * @param bool|null $accesAgenda The acces agenda.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesAgenda(?bool $accesAgenda): AccesWeb {
        $this->accesAgenda = $accesAgenda;
        return $this;
    }

    /**
     * Set the acces articles.
     *
     * @param bool|null $accesArticles The acces articles.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesArticles(?bool $accesArticles): AccesWeb {
        $this->accesArticles = $accesArticles;
        return $this;
    }

    /**
     * Set the acces articles consommes.
     *
     * @param bool|null $accesArticlesConsommes The acces articles consommes.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesArticlesConsommes(?bool $accesArticlesConsommes): AccesWeb {
        $this->accesArticlesConsommes = $accesArticlesConsommes;
        return $this;
    }

    /**
     * Set the acces clients.
     *
     * @param bool|null $accesClients The acces clients.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesClients(?bool $accesClients): AccesWeb {
        $this->accesClients = $accesClients;
        return $this;
    }

    /**
     * Set the acces clients favoris.
     *
     * @param bool|null $accesClientsFavoris The acces clients favoris.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesClientsFavoris(?bool $accesClientsFavoris): AccesWeb {
        $this->accesClientsFavoris = $accesClientsFavoris;
        return $this;
    }

    /**
     * Set the acces consultation.
     *
     * @param bool|null $accesConsultation The acces consultation.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesConsultation(?bool $accesConsultation): AccesWeb {
        $this->accesConsultation = $accesConsultation;
        return $this;
    }

    /**
     * Set the acces dossier cabinet.
     *
     * @param bool|null $accesDossierCabinet The acces dossier cabinet.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesDossierCabinet(?bool $accesDossierCabinet): AccesWeb {
        $this->accesDossierCabinet = $accesDossierCabinet;
        return $this;
    }

    /**
     * Set the acces facture.
     *
     * @param bool|null $accesFacture The acces facture.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesFacture(?bool $accesFacture): AccesWeb {
        $this->accesFacture = $accesFacture;
        return $this;
    }

    /**
     * Set the acces i bureau.
     *
     * @param bool|null $accesIBureau The acces i bureau.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesIBureau(?bool $accesIBureau): AccesWeb {
        $this->accesIBureau = $accesIBureau;
        return $this;
    }

    /**
     * Set the acces interventions.
     *
     * @param bool|null $accesInterventions The acces interventions.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesInterventions(?bool $accesInterventions): AccesWeb {
        $this->accesInterventions = $accesInterventions;
        return $this;
    }

    /**
     * Set the acces liste collab.
     *
     * @param bool|null $accesListeCollab The acces liste collab.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesListeCollab(?bool $accesListeCollab): AccesWeb {
        $this->accesListeCollab = $accesListeCollab;
        return $this;
    }

    /**
     * Set the acces messages.
     *
     * @param bool|null $accesMessages The acces messages.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesMessages(?bool $accesMessages): AccesWeb {
        $this->accesMessages = $accesMessages;
        return $this;
    }

    /**
     * Set the acces note frais.
     *
     * @param bool|null $accesNoteFrais The acces note frais.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesNoteFrais(?bool $accesNoteFrais): AccesWeb {
        $this->accesNoteFrais = $accesNoteFrais;
        return $this;
    }

    /**
     * Set the acces repertoire.
     *
     * @param bool|null $accesRepertoire The acces repertoire.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesRepertoire(?bool $accesRepertoire): AccesWeb {
        $this->accesRepertoire = $accesRepertoire;
        return $this;
    }

    /**
     * Set the acces saisie commande.
     *
     * @param bool|null $accesSaisieCommande The acces saisie commande.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesSaisieCommande(?bool $accesSaisieCommande): AccesWeb {
        $this->accesSaisieCommande = $accesSaisieCommande;
        return $this;
    }

    /**
     * Set the acces saisie tp.
     *
     * @param bool|null $accesSaisieTp The acces saisie tp.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesSaisieTp(?bool $accesSaisieTp): AccesWeb {
        $this->accesSaisieTp = $accesSaisieTp;
        return $this;
    }

    /**
     * Set the acces solde cpta.
     *
     * @param bool|null $accesSoldeCpta The acces solde cpta.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesSoldeCpta(?bool $accesSoldeCpta): AccesWeb {
        $this->accesSoldeCpta = $accesSoldeCpta;
        return $this;
    }

    /**
     * Set the acces tableaux bord.
     *
     * @param bool|null $accesTableauxBord The acces tableaux bord.
     * @return AccesWeb Returns this Acces web.
     */
    public function setAccesTableauxBord(?bool $accesTableauxBord): AccesWeb {
        $this->accesTableauxBord = $accesTableauxBord;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return AccesWeb Returns this Acces web.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): AccesWeb {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the date activation.
     *
     * @param DateTime|null $dateActivation The date activation.
     * @return AccesWeb Returns this Acces web.
     */
    public function setDateActivation(?DateTime $dateActivation): AccesWeb {
        $this->dateActivation = $dateActivation;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return AccesWeb Returns this Acces web.
     */
    public function setDateFin(?DateTime $dateFin): AccesWeb {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the dern tentative.
     *
     * @param DateTime|null $dernTentative The dern tentative.
     * @return AccesWeb Returns this Acces web.
     */
    public function setDernTentative(?DateTime $dernTentative): AccesWeb {
        $this->dernTentative = $dernTentative;
        return $this;
    }

    /**
     * Set the doss cpta.
     *
     * @param string|null $dossCpta The doss cpta.
     * @return AccesWeb Returns this Acces web.
     */
    public function setDossCpta(?string $dossCpta): AccesWeb {
        $this->dossCpta = $dossCpta;
        return $this;
    }

    /**
     * Set the doss paie.
     *
     * @param string|null $dossPaie The doss paie.
     * @return AccesWeb Returns this Acces web.
     */
    public function setDossPaie(?string $dossPaie): AccesWeb {
        $this->dossPaie = $dossPaie;
        return $this;
    }

    /**
     * Set the doss prop.
     *
     * @param string|null $dossProp The doss prop.
     * @return AccesWeb Returns this Acces web.
     */
    public function setDossProp(?string $dossProp): AccesWeb {
        $this->dossProp = $dossProp;
        return $this;
    }

    /**
     * Set the duplique intervention.
     *
     * @param bool|null $dupliqueIntervention The duplique intervention.
     * @return AccesWeb Returns this Acces web.
     */
    public function setDupliqueIntervention(?bool $dupliqueIntervention): AccesWeb {
        $this->dupliqueIntervention = $dupliqueIntervention;
        return $this;
    }

    /**
     * Set the meme mdp que i bureau.
     *
     * @param bool|null $memeMdpQueIBureau The meme mdp que i bureau.
     * @return AccesWeb Returns this Acces web.
     */
    public function setMemeMdpQueIBureau(?bool $memeMdpQueIBureau): AccesWeb {
        $this->memeMdpQueIBureau = $memeMdpQueIBureau;
        return $this;
    }

    /**
     * Set the mot de passe.
     *
     * @param string|null $motDePasse The mot de passe.
     * @return AccesWeb Returns this Acces web.
     */
    public function setMotDePasse(?string $motDePasse): AccesWeb {
        $this->motDePasse = $motDePasse;
        return $this;
    }

    /**
     * Set the restr cli assist1.
     *
     * @param string|null $restrCliAssist1 The restr cli assist1.
     * @return AccesWeb Returns this Acces web.
     */
    public function setRestrCliAssist1(?string $restrCliAssist1): AccesWeb {
        $this->restrCliAssist1 = $restrCliAssist1;
        return $this;
    }

    /**
     * Set the restr cli assist2.
     *
     * @param string|null $restrCliAssist2 The restr cli assist2.
     * @return AccesWeb Returns this Acces web.
     */
    public function setRestrCliAssist2(?string $restrCliAssist2): AccesWeb {
        $this->restrCliAssist2 = $restrCliAssist2;
        return $this;
    }

    /**
     * Set the restr cli autre1.
     *
     * @param string|null $restrCliAutre1 The restr cli autre1.
     * @return AccesWeb Returns this Acces web.
     */
    public function setRestrCliAutre1(?string $restrCliAutre1): AccesWeb {
        $this->restrCliAutre1 = $restrCliAutre1;
        return $this;
    }

    /**
     * Set the restr cli autre2.
     *
     * @param string|null $restrCliAutre2 The restr cli autre2.
     * @return AccesWeb Returns this Acces web.
     */
    public function setRestrCliAutre2(?string $restrCliAutre2): AccesWeb {
        $this->restrCliAutre2 = $restrCliAutre2;
        return $this;
    }

    /**
     * Set the restr cli collab.
     *
     * @param string|null $restrCliCollab The restr cli collab.
     * @return AccesWeb Returns this Acces web.
     */
    public function setRestrCliCollab(?string $restrCliCollab): AccesWeb {
        $this->restrCliCollab = $restrCliCollab;
        return $this;
    }

    /**
     * Set the restr cli debut.
     *
     * @param string|null $restrCliDebut The restr cli debut.
     * @return AccesWeb Returns this Acces web.
     */
    public function setRestrCliDebut(?string $restrCliDebut): AccesWeb {
        $this->restrCliDebut = $restrCliDebut;
        return $this;
    }

    /**
     * Set the restr cli expert.
     *
     * @param string|null $restrCliExpert The restr cli expert.
     * @return AccesWeb Returns this Acces web.
     */
    public function setRestrCliExpert(?string $restrCliExpert): AccesWeb {
        $this->restrCliExpert = $restrCliExpert;
        return $this;
    }

    /**
     * Set the restr cli fin.
     *
     * @param string|null $restrCliFin The restr cli fin.
     * @return AccesWeb Returns this Acces web.
     */
    public function setRestrCliFin(?string $restrCliFin): AccesWeb {
        $this->restrCliFin = $restrCliFin;
        return $this;
    }

    /**
     * Set the restr cli portef.
     *
     * @param string|null $restrCliPortef The restr cli portef.
     * @return AccesWeb Returns this Acces web.
     */
    public function setRestrCliPortef(?string $restrCliPortef): AccesWeb {
        $this->restrCliPortef = $restrCliPortef;
        return $this;
    }

    /**
     * Set the tentatives.
     *
     * @param string|null $tentatives The tentatives.
     * @return AccesWeb Returns this Acces web.
     */
    public function setTentatives(?string $tentatives): AccesWeb {
        $this->tentatives = $tentatives;
        return $this;
    }

    /**
     * Set the i key.
     *
     * @param string|null $iKey The i key.
     * @return AccesWeb Returns this Acces web.
     */
    public function setiKey(?string $iKey): AccesWeb {
        $this->iKey = $iKey;
        return $this;
    }
}
