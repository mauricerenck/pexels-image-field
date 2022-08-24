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
 * Travaux missions.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class TravauxMissions {

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Code travail.
     *
     * @var string|null
     */
    private $codeTravail;

    /**
     * Declaration a rediger.
     *
     * @var bool|null
     */
    private $declarationARediger;

    /**
     * Frequence.
     *
     * @var string|null
     */
    private $frequence;

    /**
     * Jour.
     *
     * @var int|null
     */
    private $jour;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Missions.
     *
     * @var string|null
     */
    private $missions;

    /**
     * Nb uo.
     *
     * @var float|null
     */
    private $nbUo;

    /**
     * Ne pas editer.
     *
     * @var bool|null
     */
    private $nePasEditer;

    /**
     * Niveau.
     *
     * @var int|null
     */
    private $niveau;

    /**
     * Realise par.
     *
     * @var string|null
     */
    private $realisePar;

    /**
     * Type affectation.
     *
     * @var string|null
     */
    private $typeAffectation;

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
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the code travail.
     *
     * @return string|null Returns the code travail.
     */
    public function getCodeTravail(): ?string {
        return $this->codeTravail;
    }

    /**
     * Get the declaration a rediger.
     *
     * @return bool|null Returns the declaration a rediger.
     */
    public function getDeclarationARediger(): ?bool {
        return $this->declarationARediger;
    }

    /**
     * Get the frequence.
     *
     * @return string|null Returns the frequence.
     */
    public function getFrequence(): ?string {
        return $this->frequence;
    }

    /**
     * Get the jour.
     *
     * @return int|null Returns the jour.
     */
    public function getJour(): ?int {
        return $this->jour;
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
     * Get the missions.
     *
     * @return string|null Returns the missions.
     */
    public function getMissions(): ?string {
        return $this->missions;
    }

    /**
     * Get the nb uo.
     *
     * @return float|null Returns the nb uo.
     */
    public function getNbUo(): ?float {
        return $this->nbUo;
    }

    /**
     * Get the ne pas editer.
     *
     * @return bool|null Returns the ne pas editer.
     */
    public function getNePasEditer(): ?bool {
        return $this->nePasEditer;
    }

    /**
     * Get the niveau.
     *
     * @return int|null Returns the niveau.
     */
    public function getNiveau(): ?int {
        return $this->niveau;
    }

    /**
     * Get the realise par.
     *
     * @return string|null Returns the realise par.
     */
    public function getRealisePar(): ?string {
        return $this->realisePar;
    }

    /**
     * Get the type affectation.
     *
     * @return string|null Returns the type affectation.
     */
    public function getTypeAffectation(): ?string {
        return $this->typeAffectation;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setCodeArticle(?string $codeArticle): TravauxMissions {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): TravauxMissions {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setCodeTache(?string $codeTache): TravauxMissions {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code travail.
     *
     * @param string|null $codeTravail The code travail.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setCodeTravail(?string $codeTravail): TravauxMissions {
        $this->codeTravail = $codeTravail;
        return $this;
    }

    /**
     * Set the declaration a rediger.
     *
     * @param bool|null $declarationARediger The declaration a rediger.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setDeclarationARediger(?bool $declarationARediger): TravauxMissions {
        $this->declarationARediger = $declarationARediger;
        return $this;
    }

    /**
     * Set the frequence.
     *
     * @param string|null $frequence The frequence.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setFrequence(?string $frequence): TravauxMissions {
        $this->frequence = $frequence;
        return $this;
    }

    /**
     * Set the jour.
     *
     * @param int|null $jour The jour.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setJour(?int $jour): TravauxMissions {
        $this->jour = $jour;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setLibelle(?string $libelle): TravauxMissions {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the missions.
     *
     * @param string|null $missions The missions.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setMissions(?string $missions): TravauxMissions {
        $this->missions = $missions;
        return $this;
    }

    /**
     * Set the nb uo.
     *
     * @param float|null $nbUo The nb uo.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setNbUo(?float $nbUo): TravauxMissions {
        $this->nbUo = $nbUo;
        return $this;
    }

    /**
     * Set the ne pas editer.
     *
     * @param bool|null $nePasEditer The ne pas editer.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setNePasEditer(?bool $nePasEditer): TravauxMissions {
        $this->nePasEditer = $nePasEditer;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int|null $niveau The niveau.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setNiveau(?int $niveau): TravauxMissions {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the realise par.
     *
     * @param string|null $realisePar The realise par.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setRealisePar(?string $realisePar): TravauxMissions {
        $this->realisePar = $realisePar;
        return $this;
    }

    /**
     * Set the type affectation.
     *
     * @param string|null $typeAffectation The type affectation.
     * @return TravauxMissions Returns this Travaux missions.
     */
    public function setTypeAffectation(?string $typeAffectation): TravauxMissions {
        $this->typeAffectation = $typeAffectation;
        return $this;
    }
}
