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
 * Visite medicale entete.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class VisiteMedicaleEntete {

    /**
     * Adresse mt.
     *
     * @var string|null
     */
    private $adresseMt;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code medecine travail.
     *
     * @var string|null
     */
    private $codeMedecineTravail;

    /**
     * Code postal mt.
     *
     * @var string|null
     */
    private $codePostalMt;

    /**
     * Debut1.
     *
     * @var DateTime|null
     */
    private $debut1;

    /**
     * Debut2.
     *
     * @var DateTime|null
     */
    private $debut2;

    /**
     * Debut session.
     *
     * @var DateTime|null
     */
    private $debutSession;

    /**
     * Description.
     *
     * @var string|null
     */
    private $description;

    /**
     * Duree visite.
     *
     * @var string|null
     */
    private $dureeVisite;

    /**
     * Fin1.
     *
     * @var DateTime|null
     */
    private $fin1;

    /**
     * Fin2.
     *
     * @var DateTime|null
     */
    private $fin2;

    /**
     * Fin session.
     *
     * @var DateTime|null
     */
    private $finSession;

    /**
     * Lient document.
     *
     * @var string|null
     */
    private $lientDocument;

    /**
     * Medecin responsable.
     *
     * @var string|null
     */
    private $medecinResponsable;

    /**
     * Nom mt.
     *
     * @var string|null
     */
    private $nomMt;

    /**
     * Rdv jour1.
     *
     * @var bool|null
     */
    private $rdvJour1;

    /**
     * Rdv jour2.
     *
     * @var bool|null
     */
    private $rdvJour2;

    /**
     * Rdv jour3.
     *
     * @var bool|null
     */
    private $rdvJour3;

    /**
     * Rdv jour4.
     *
     * @var bool|null
     */
    private $rdvJour4;

    /**
     * Rdv jour5.
     *
     * @var bool|null
     */
    private $rdvJour5;

    /**
     * Rdv jour6.
     *
     * @var bool|null
     */
    private $rdvJour6;

    /**
     * Rdv jour7.
     *
     * @var bool|null
     */
    private $rdvJour7;

    /**
     * Tel1.
     *
     * @var string|null
     */
    private $tel1;

    /**
     * Ville mt.
     *
     * @var string|null
     */
    private $villeMt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adresse mt.
     *
     * @return string|null Returns the adresse mt.
     */
    public function getAdresseMt(): ?string {
        return $this->adresseMt;
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
     * Get the code medecine travail.
     *
     * @return string|null Returns the code medecine travail.
     */
    public function getCodeMedecineTravail(): ?string {
        return $this->codeMedecineTravail;
    }

    /**
     * Get the code postal mt.
     *
     * @return string|null Returns the code postal mt.
     */
    public function getCodePostalMt(): ?string {
        return $this->codePostalMt;
    }

    /**
     * Get the debut1.
     *
     * @return DateTime|null Returns the debut1.
     */
    public function getDebut1(): ?DateTime {
        return $this->debut1;
    }

    /**
     * Get the debut2.
     *
     * @return DateTime|null Returns the debut2.
     */
    public function getDebut2(): ?DateTime {
        return $this->debut2;
    }

    /**
     * Get the debut session.
     *
     * @return DateTime|null Returns the debut session.
     */
    public function getDebutSession(): ?DateTime {
        return $this->debutSession;
    }

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Get the duree visite.
     *
     * @return string|null Returns the duree visite.
     */
    public function getDureeVisite(): ?string {
        return $this->dureeVisite;
    }

    /**
     * Get the fin1.
     *
     * @return DateTime|null Returns the fin1.
     */
    public function getFin1(): ?DateTime {
        return $this->fin1;
    }

    /**
     * Get the fin2.
     *
     * @return DateTime|null Returns the fin2.
     */
    public function getFin2(): ?DateTime {
        return $this->fin2;
    }

    /**
     * Get the fin session.
     *
     * @return DateTime|null Returns the fin session.
     */
    public function getFinSession(): ?DateTime {
        return $this->finSession;
    }

    /**
     * Get the lient document.
     *
     * @return string|null Returns the lient document.
     */
    public function getLientDocument(): ?string {
        return $this->lientDocument;
    }

    /**
     * Get the medecin responsable.
     *
     * @return string|null Returns the medecin responsable.
     */
    public function getMedecinResponsable(): ?string {
        return $this->medecinResponsable;
    }

    /**
     * Get the nom mt.
     *
     * @return string|null Returns the nom mt.
     */
    public function getNomMt(): ?string {
        return $this->nomMt;
    }

    /**
     * Get the rdv jour1.
     *
     * @return bool|null Returns the rdv jour1.
     */
    public function getRdvJour1(): ?bool {
        return $this->rdvJour1;
    }

    /**
     * Get the rdv jour2.
     *
     * @return bool|null Returns the rdv jour2.
     */
    public function getRdvJour2(): ?bool {
        return $this->rdvJour2;
    }

    /**
     * Get the rdv jour3.
     *
     * @return bool|null Returns the rdv jour3.
     */
    public function getRdvJour3(): ?bool {
        return $this->rdvJour3;
    }

    /**
     * Get the rdv jour4.
     *
     * @return bool|null Returns the rdv jour4.
     */
    public function getRdvJour4(): ?bool {
        return $this->rdvJour4;
    }

    /**
     * Get the rdv jour5.
     *
     * @return bool|null Returns the rdv jour5.
     */
    public function getRdvJour5(): ?bool {
        return $this->rdvJour5;
    }

    /**
     * Get the rdv jour6.
     *
     * @return bool|null Returns the rdv jour6.
     */
    public function getRdvJour6(): ?bool {
        return $this->rdvJour6;
    }

    /**
     * Get the rdv jour7.
     *
     * @return bool|null Returns the rdv jour7.
     */
    public function getRdvJour7(): ?bool {
        return $this->rdvJour7;
    }

    /**
     * Get the tel1.
     *
     * @return string|null Returns the tel1.
     */
    public function getTel1(): ?string {
        return $this->tel1;
    }

    /**
     * Get the ville mt.
     *
     * @return string|null Returns the ville mt.
     */
    public function getVilleMt(): ?string {
        return $this->villeMt;
    }

    /**
     * Set the adresse mt.
     *
     * @param string|null $adresseMt The adresse mt.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setAdresseMt(?string $adresseMt): VisiteMedicaleEntete {
        $this->adresseMt = $adresseMt;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setCode(?string $code): VisiteMedicaleEntete {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code medecine travail.
     *
     * @param string|null $codeMedecineTravail The code medecine travail.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setCodeMedecineTravail(?string $codeMedecineTravail): VisiteMedicaleEntete {
        $this->codeMedecineTravail = $codeMedecineTravail;
        return $this;
    }

    /**
     * Set the code postal mt.
     *
     * @param string|null $codePostalMt The code postal mt.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setCodePostalMt(?string $codePostalMt): VisiteMedicaleEntete {
        $this->codePostalMt = $codePostalMt;
        return $this;
    }

    /**
     * Set the debut1.
     *
     * @param DateTime|null $debut1 The debut1.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setDebut1(?DateTime $debut1): VisiteMedicaleEntete {
        $this->debut1 = $debut1;
        return $this;
    }

    /**
     * Set the debut2.
     *
     * @param DateTime|null $debut2 The debut2.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setDebut2(?DateTime $debut2): VisiteMedicaleEntete {
        $this->debut2 = $debut2;
        return $this;
    }

    /**
     * Set the debut session.
     *
     * @param DateTime|null $debutSession The debut session.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setDebutSession(?DateTime $debutSession): VisiteMedicaleEntete {
        $this->debutSession = $debutSession;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setDescription(?string $description): VisiteMedicaleEntete {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the duree visite.
     *
     * @param string|null $dureeVisite The duree visite.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setDureeVisite(?string $dureeVisite): VisiteMedicaleEntete {
        $this->dureeVisite = $dureeVisite;
        return $this;
    }

    /**
     * Set the fin1.
     *
     * @param DateTime|null $fin1 The fin1.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setFin1(?DateTime $fin1): VisiteMedicaleEntete {
        $this->fin1 = $fin1;
        return $this;
    }

    /**
     * Set the fin2.
     *
     * @param DateTime|null $fin2 The fin2.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setFin2(?DateTime $fin2): VisiteMedicaleEntete {
        $this->fin2 = $fin2;
        return $this;
    }

    /**
     * Set the fin session.
     *
     * @param DateTime|null $finSession The fin session.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setFinSession(?DateTime $finSession): VisiteMedicaleEntete {
        $this->finSession = $finSession;
        return $this;
    }

    /**
     * Set the lient document.
     *
     * @param string|null $lientDocument The lient document.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setLientDocument(?string $lientDocument): VisiteMedicaleEntete {
        $this->lientDocument = $lientDocument;
        return $this;
    }

    /**
     * Set the medecin responsable.
     *
     * @param string|null $medecinResponsable The medecin responsable.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setMedecinResponsable(?string $medecinResponsable): VisiteMedicaleEntete {
        $this->medecinResponsable = $medecinResponsable;
        return $this;
    }

    /**
     * Set the nom mt.
     *
     * @param string|null $nomMt The nom mt.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setNomMt(?string $nomMt): VisiteMedicaleEntete {
        $this->nomMt = $nomMt;
        return $this;
    }

    /**
     * Set the rdv jour1.
     *
     * @param bool|null $rdvJour1 The rdv jour1.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setRdvJour1(?bool $rdvJour1): VisiteMedicaleEntete {
        $this->rdvJour1 = $rdvJour1;
        return $this;
    }

    /**
     * Set the rdv jour2.
     *
     * @param bool|null $rdvJour2 The rdv jour2.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setRdvJour2(?bool $rdvJour2): VisiteMedicaleEntete {
        $this->rdvJour2 = $rdvJour2;
        return $this;
    }

    /**
     * Set the rdv jour3.
     *
     * @param bool|null $rdvJour3 The rdv jour3.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setRdvJour3(?bool $rdvJour3): VisiteMedicaleEntete {
        $this->rdvJour3 = $rdvJour3;
        return $this;
    }

    /**
     * Set the rdv jour4.
     *
     * @param bool|null $rdvJour4 The rdv jour4.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setRdvJour4(?bool $rdvJour4): VisiteMedicaleEntete {
        $this->rdvJour4 = $rdvJour4;
        return $this;
    }

    /**
     * Set the rdv jour5.
     *
     * @param bool|null $rdvJour5 The rdv jour5.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setRdvJour5(?bool $rdvJour5): VisiteMedicaleEntete {
        $this->rdvJour5 = $rdvJour5;
        return $this;
    }

    /**
     * Set the rdv jour6.
     *
     * @param bool|null $rdvJour6 The rdv jour6.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setRdvJour6(?bool $rdvJour6): VisiteMedicaleEntete {
        $this->rdvJour6 = $rdvJour6;
        return $this;
    }

    /**
     * Set the rdv jour7.
     *
     * @param bool|null $rdvJour7 The rdv jour7.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setRdvJour7(?bool $rdvJour7): VisiteMedicaleEntete {
        $this->rdvJour7 = $rdvJour7;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string|null $tel1 The tel1.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setTel1(?string $tel1): VisiteMedicaleEntete {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the ville mt.
     *
     * @param string|null $villeMt The ville mt.
     * @return VisiteMedicaleEntete Returns this Visite medicale entete.
     */
    public function setVilleMt(?string $villeMt): VisiteMedicaleEntete {
        $this->villeMt = $villeMt;
        return $this;
    }
}
