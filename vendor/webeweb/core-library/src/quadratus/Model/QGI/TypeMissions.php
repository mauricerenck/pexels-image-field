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
 * Type missions.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class TypeMissions {

    /**
     * Article.
     *
     * @var string|null
     */
    private $article;

    /**
     * Centre analytique.
     *
     * @var string|null
     */
    private $centreAnalytique;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code famille.
     *
     * @var string|null
     */
    private $codeFamille;

    /**
     * Code responsable.
     *
     * @var string|null
     */
    private $codeResponsable;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Decalage fermeture auto.
     *
     * @var int|null
     */
    private $decalageFermetureAuto;

    /**
     * Decalage fermeture auto jours.
     *
     * @var int|null
     */
    private $decalageFermetureAutoJours;

    /**
     * Decalage ouverture auto.
     *
     * @var int|null
     */
    private $decalageOuvertureAuto;

    /**
     * Descriptif.
     *
     * @var string|null
     */
    private $descriptif;

    /**
     * Descriptif rtf.
     *
     * @var string|null
     */
    private $descriptifRtf;

    /**
     * Fermeture auto.
     *
     * @var bool|null
     */
    private $fermetureAuto;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Mois ouverture auto.
     *
     * @var int|null
     */
    private $moisOuvertureAuto;

    /**
     * Ordre.
     *
     * @var int|null
     */
    private $ordre;

    /**
     * Recurrente.
     *
     * @var bool|null
     */
    private $recurrente;

    /**
     * Taches groupe.
     *
     * @var string|null
     */
    private $tachesGroupe;

    /**
     * Transfert centre.
     *
     * @var bool|null
     */
    private $transfertCentre;

    /**
     * Type centre.
     *
     * @var string|null
     */
    private $typeCentre;

    /**
     * Type compteur.
     *
     * @var bool|null
     */
    private $typeCompteur;

    /**
     * Type responsable.
     *
     * @var string|null
     */
    private $typeResponsable;

    /**
     * Type visu taches.
     *
     * @var string|null
     */
    private $typeVisuTaches;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the article.
     *
     * @return string|null Returns the article.
     */
    public function getArticle(): ?string {
        return $this->article;
    }

    /**
     * Get the centre analytique.
     *
     * @return string|null Returns the centre analytique.
     */
    public function getCentreAnalytique(): ?string {
        return $this->centreAnalytique;
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
     * Get the code famille.
     *
     * @return string|null Returns the code famille.
     */
    public function getCodeFamille(): ?string {
        return $this->codeFamille;
    }

    /**
     * Get the code responsable.
     *
     * @return string|null Returns the code responsable.
     */
    public function getCodeResponsable(): ?string {
        return $this->codeResponsable;
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
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification(): ?DateTime {
        return $this->dateModification;
    }

    /**
     * Get the decalage fermeture auto.
     *
     * @return int|null Returns the decalage fermeture auto.
     */
    public function getDecalageFermetureAuto(): ?int {
        return $this->decalageFermetureAuto;
    }

    /**
     * Get the decalage fermeture auto jours.
     *
     * @return int|null Returns the decalage fermeture auto jours.
     */
    public function getDecalageFermetureAutoJours(): ?int {
        return $this->decalageFermetureAutoJours;
    }

    /**
     * Get the decalage ouverture auto.
     *
     * @return int|null Returns the decalage ouverture auto.
     */
    public function getDecalageOuvertureAuto(): ?int {
        return $this->decalageOuvertureAuto;
    }

    /**
     * Get the descriptif.
     *
     * @return string|null Returns the descriptif.
     */
    public function getDescriptif(): ?string {
        return $this->descriptif;
    }

    /**
     * Get the descriptif rtf.
     *
     * @return string|null Returns the descriptif rtf.
     */
    public function getDescriptifRtf(): ?string {
        return $this->descriptifRtf;
    }

    /**
     * Get the fermeture auto.
     *
     * @return bool|null Returns the fermeture auto.
     */
    public function getFermetureAuto(): ?bool {
        return $this->fermetureAuto;
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
     * Get the mois ouverture auto.
     *
     * @return int|null Returns the mois ouverture auto.
     */
    public function getMoisOuvertureAuto(): ?int {
        return $this->moisOuvertureAuto;
    }

    /**
     * Get the ordre.
     *
     * @return int|null Returns the ordre.
     */
    public function getOrdre(): ?int {
        return $this->ordre;
    }

    /**
     * Get the recurrente.
     *
     * @return bool|null Returns the recurrente.
     */
    public function getRecurrente(): ?bool {
        return $this->recurrente;
    }

    /**
     * Get the taches groupe.
     *
     * @return string|null Returns the taches groupe.
     */
    public function getTachesGroupe(): ?string {
        return $this->tachesGroupe;
    }

    /**
     * Get the transfert centre.
     *
     * @return bool|null Returns the transfert centre.
     */
    public function getTransfertCentre(): ?bool {
        return $this->transfertCentre;
    }

    /**
     * Get the type centre.
     *
     * @return string|null Returns the type centre.
     */
    public function getTypeCentre(): ?string {
        return $this->typeCentre;
    }

    /**
     * Get the type compteur.
     *
     * @return bool|null Returns the type compteur.
     */
    public function getTypeCompteur(): ?bool {
        return $this->typeCompteur;
    }

    /**
     * Get the type responsable.
     *
     * @return string|null Returns the type responsable.
     */
    public function getTypeResponsable(): ?string {
        return $this->typeResponsable;
    }

    /**
     * Get the type visu taches.
     *
     * @return string|null Returns the type visu taches.
     */
    public function getTypeVisuTaches(): ?string {
        return $this->typeVisuTaches;
    }

    /**
     * Set the article.
     *
     * @param string|null $article The article.
     * @return TypeMissions Returns this Type missions.
     */
    public function setArticle(?string $article): TypeMissions {
        $this->article = $article;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string|null $centreAnalytique The centre analytique.
     * @return TypeMissions Returns this Type missions.
     */
    public function setCentreAnalytique(?string $centreAnalytique): TypeMissions {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return TypeMissions Returns this Type missions.
     */
    public function setCode(?string $code): TypeMissions {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string|null $codeFamille The code famille.
     * @return TypeMissions Returns this Type missions.
     */
    public function setCodeFamille(?string $codeFamille): TypeMissions {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code responsable.
     *
     * @param string|null $codeResponsable The code responsable.
     * @return TypeMissions Returns this Type missions.
     */
    public function setCodeResponsable(?string $codeResponsable): TypeMissions {
        $this->codeResponsable = $codeResponsable;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDateCreation(?DateTime $dateCreation): TypeMissions {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDateModification(?DateTime $dateModification): TypeMissions {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the decalage fermeture auto.
     *
     * @param int|null $decalageFermetureAuto The decalage fermeture auto.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDecalageFermetureAuto(?int $decalageFermetureAuto): TypeMissions {
        $this->decalageFermetureAuto = $decalageFermetureAuto;
        return $this;
    }

    /**
     * Set the decalage fermeture auto jours.
     *
     * @param int|null $decalageFermetureAutoJours The decalage fermeture auto jours.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDecalageFermetureAutoJours(?int $decalageFermetureAutoJours): TypeMissions {
        $this->decalageFermetureAutoJours = $decalageFermetureAutoJours;
        return $this;
    }

    /**
     * Set the decalage ouverture auto.
     *
     * @param int|null $decalageOuvertureAuto The decalage ouverture auto.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDecalageOuvertureAuto(?int $decalageOuvertureAuto): TypeMissions {
        $this->decalageOuvertureAuto = $decalageOuvertureAuto;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string|null $descriptif The descriptif.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDescriptif(?string $descriptif): TypeMissions {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the descriptif rtf.
     *
     * @param string|null $descriptifRtf The descriptif rtf.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDescriptifRtf(?string $descriptifRtf): TypeMissions {
        $this->descriptifRtf = $descriptifRtf;
        return $this;
    }

    /**
     * Set the fermeture auto.
     *
     * @param bool|null $fermetureAuto The fermeture auto.
     * @return TypeMissions Returns this Type missions.
     */
    public function setFermetureAuto(?bool $fermetureAuto): TypeMissions {
        $this->fermetureAuto = $fermetureAuto;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return TypeMissions Returns this Type missions.
     */
    public function setLibelle(?string $libelle): TypeMissions {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the mois ouverture auto.
     *
     * @param int|null $moisOuvertureAuto The mois ouverture auto.
     * @return TypeMissions Returns this Type missions.
     */
    public function setMoisOuvertureAuto(?int $moisOuvertureAuto): TypeMissions {
        $this->moisOuvertureAuto = $moisOuvertureAuto;
        return $this;
    }

    /**
     * Set the ordre.
     *
     * @param int|null $ordre The ordre.
     * @return TypeMissions Returns this Type missions.
     */
    public function setOrdre(?int $ordre): TypeMissions {
        $this->ordre = $ordre;
        return $this;
    }

    /**
     * Set the recurrente.
     *
     * @param bool|null $recurrente The recurrente.
     * @return TypeMissions Returns this Type missions.
     */
    public function setRecurrente(?bool $recurrente): TypeMissions {
        $this->recurrente = $recurrente;
        return $this;
    }

    /**
     * Set the taches groupe.
     *
     * @param string|null $tachesGroupe The taches groupe.
     * @return TypeMissions Returns this Type missions.
     */
    public function setTachesGroupe(?string $tachesGroupe): TypeMissions {
        $this->tachesGroupe = $tachesGroupe;
        return $this;
    }

    /**
     * Set the transfert centre.
     *
     * @param bool|null $transfertCentre The transfert centre.
     * @return TypeMissions Returns this Type missions.
     */
    public function setTransfertCentre(?bool $transfertCentre): TypeMissions {
        $this->transfertCentre = $transfertCentre;
        return $this;
    }

    /**
     * Set the type centre.
     *
     * @param string|null $typeCentre The type centre.
     * @return TypeMissions Returns this Type missions.
     */
    public function setTypeCentre(?string $typeCentre): TypeMissions {
        $this->typeCentre = $typeCentre;
        return $this;
    }

    /**
     * Set the type compteur.
     *
     * @param bool|null $typeCompteur The type compteur.
     * @return TypeMissions Returns this Type missions.
     */
    public function setTypeCompteur(?bool $typeCompteur): TypeMissions {
        $this->typeCompteur = $typeCompteur;
        return $this;
    }

    /**
     * Set the type responsable.
     *
     * @param string|null $typeResponsable The type responsable.
     * @return TypeMissions Returns this Type missions.
     */
    public function setTypeResponsable(?string $typeResponsable): TypeMissions {
        $this->typeResponsable = $typeResponsable;
        return $this;
    }

    /**
     * Set the type visu taches.
     *
     * @param string|null $typeVisuTaches The type visu taches.
     * @return TypeMissions Returns this Type missions.
     */
    public function setTypeVisuTaches(?string $typeVisuTaches): TypeMissions {
        $this->typeVisuTaches = $typeVisuTaches;
        return $this;
    }
}
