<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Centres.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Centres {

    /**
     * Adresse rue1.
     *
     * @var string|null
     */
    private $adresseRue1;

    /**
     * Adresse rue2.
     *
     * @var string|null
     */
    private $adresseRue2;

    /**
     * Adresse ville.
     *
     * @var string|null
     */
    private $adresseVille;

    /**
     * Centre inactif.
     *
     * @var bool|null
     */
    private $centreInactif;

    /**
     * Cle repartition.
     *
     * @var string|null
     */
    private $cleRepartition;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date devis.
     *
     * @var DateTime|null
     */
    private $dateDevis;

    /**
     * Description.
     *
     * @var string|null
     */
    private $description;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Marge directe.
     *
     * @var bool|null
     */
    private $margeDirecte;

    /**
     * Niveau repartition.
     *
     * @var string|null
     */
    private $niveauRepartition;

    /**
     * Ordre edition.
     *
     * @var int|null
     */
    private $ordreEdition;

    /**
     * Repartition ana.
     *
     * @var string|null
     */
    private $repartitionAna;

    /**
     * Repartition auto.
     *
     * @var bool|null
     */
    private $repartitionAuto;

    /**
     * Responsable.
     *
     * @var string|null
     */
    private $responsable;

    /**
     * Restrictions.
     *
     * @var string|null
     */
    private $restrictions;

    /**
     * Suivi annee recolte.
     *
     * @var bool|null
     */
    private $suiviAnneeRecolte;

    /**
     * Superficie.
     *
     * @var float|null
     */
    private $superficie;

    /**
     * Type centre.
     *
     * @var string|null
     */
    private $typeCentre;

    /**
     * Type suivi.
     *
     * @var string|null
     */
    private $typeSuivi;

    /**
     * Type suivi autre texte.
     *
     * @var string|null
     */
    private $typeSuiviAutreTexte;

    /**
     * Type suivi autre valeur.
     *
     * @var float|null
     */
    private $typeSuiviAutreValeur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adresse rue1.
     *
     * @return string|null Returns the adresse rue1.
     */
    public function getAdresseRue1(): ?string {
        return $this->adresseRue1;
    }

    /**
     * Get the adresse rue2.
     *
     * @return string|null Returns the adresse rue2.
     */
    public function getAdresseRue2(): ?string {
        return $this->adresseRue2;
    }

    /**
     * Get the adresse ville.
     *
     * @return string|null Returns the adresse ville.
     */
    public function getAdresseVille(): ?string {
        return $this->adresseVille;
    }

    /**
     * Get the centre inactif.
     *
     * @return bool|null Returns the centre inactif.
     */
    public function getCentreInactif(): ?bool {
        return $this->centreInactif;
    }

    /**
     * Get the cle repartition.
     *
     * @return string|null Returns the cle repartition.
     */
    public function getCleRepartition(): ?string {
        return $this->cleRepartition;
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
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation(): ?DateTime {
        return $this->dateCreation;
    }

    /**
     * Get the date devis.
     *
     * @return DateTime|null Returns the date devis.
     */
    public function getDateDevis(): ?DateTime {
        return $this->dateDevis;
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
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the marge directe.
     *
     * @return bool|null Returns the marge directe.
     */
    public function getMargeDirecte(): ?bool {
        return $this->margeDirecte;
    }

    /**
     * Get the niveau repartition.
     *
     * @return string|null Returns the niveau repartition.
     */
    public function getNiveauRepartition(): ?string {
        return $this->niveauRepartition;
    }

    /**
     * Get the ordre edition.
     *
     * @return int|null Returns the ordre edition.
     */
    public function getOrdreEdition(): ?int {
        return $this->ordreEdition;
    }

    /**
     * Get the repartition ana.
     *
     * @return string|null Returns the repartition ana.
     */
    public function getRepartitionAna(): ?string {
        return $this->repartitionAna;
    }

    /**
     * Get the repartition auto.
     *
     * @return bool|null Returns the repartition auto.
     */
    public function getRepartitionAuto(): ?bool {
        return $this->repartitionAuto;
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
     * Get the restrictions.
     *
     * @return string|null Returns the restrictions.
     */
    public function getRestrictions(): ?string {
        return $this->restrictions;
    }

    /**
     * Get the suivi annee recolte.
     *
     * @return bool|null Returns the suivi annee recolte.
     */
    public function getSuiviAnneeRecolte(): ?bool {
        return $this->suiviAnneeRecolte;
    }

    /**
     * Get the superficie.
     *
     * @return float|null Returns the superficie.
     */
    public function getSuperficie(): ?float {
        return $this->superficie;
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
     * Get the type suivi.
     *
     * @return string|null Returns the type suivi.
     */
    public function getTypeSuivi(): ?string {
        return $this->typeSuivi;
    }

    /**
     * Get the type suivi autre texte.
     *
     * @return string|null Returns the type suivi autre texte.
     */
    public function getTypeSuiviAutreTexte(): ?string {
        return $this->typeSuiviAutreTexte;
    }

    /**
     * Get the type suivi autre valeur.
     *
     * @return float|null Returns the type suivi autre valeur.
     */
    public function getTypeSuiviAutreValeur(): ?float {
        return $this->typeSuiviAutreValeur;
    }

    /**
     * Set the adresse rue1.
     *
     * @param string|null $adresseRue1 The adresse rue1.
     * @return Centres Returns this Centres.
     */
    public function setAdresseRue1(?string $adresseRue1): Centres {
        $this->adresseRue1 = $adresseRue1;
        return $this;
    }

    /**
     * Set the adresse rue2.
     *
     * @param string|null $adresseRue2 The adresse rue2.
     * @return Centres Returns this Centres.
     */
    public function setAdresseRue2(?string $adresseRue2): Centres {
        $this->adresseRue2 = $adresseRue2;
        return $this;
    }

    /**
     * Set the adresse ville.
     *
     * @param string|null $adresseVille The adresse ville.
     * @return Centres Returns this Centres.
     */
    public function setAdresseVille(?string $adresseVille): Centres {
        $this->adresseVille = $adresseVille;
        return $this;
    }

    /**
     * Set the centre inactif.
     *
     * @param bool|null $centreInactif The centre inactif.
     * @return Centres Returns this Centres.
     */
    public function setCentreInactif(?bool $centreInactif): Centres {
        $this->centreInactif = $centreInactif;
        return $this;
    }

    /**
     * Set the cle repartition.
     *
     * @param string|null $cleRepartition The cle repartition.
     * @return Centres Returns this Centres.
     */
    public function setCleRepartition(?string $cleRepartition): Centres {
        $this->cleRepartition = $cleRepartition;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Centres Returns this Centres.
     */
    public function setCode(?string $code): Centres {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Centres Returns this Centres.
     */
    public function setDateCreation(?DateTime $dateCreation): Centres {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date devis.
     *
     * @param DateTime|null $dateDevis The date devis.
     * @return Centres Returns this Centres.
     */
    public function setDateDevis(?DateTime $dateDevis): Centres {
        $this->dateDevis = $dateDevis;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return Centres Returns this Centres.
     */
    public function setDescription(?string $description): Centres {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Centres Returns this Centres.
     */
    public function setIntitule(?string $intitule): Centres {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the marge directe.
     *
     * @param bool|null $margeDirecte The marge directe.
     * @return Centres Returns this Centres.
     */
    public function setMargeDirecte(?bool $margeDirecte): Centres {
        $this->margeDirecte = $margeDirecte;
        return $this;
    }

    /**
     * Set the niveau repartition.
     *
     * @param string|null $niveauRepartition The niveau repartition.
     * @return Centres Returns this Centres.
     */
    public function setNiveauRepartition(?string $niveauRepartition): Centres {
        $this->niveauRepartition = $niveauRepartition;
        return $this;
    }

    /**
     * Set the ordre edition.
     *
     * @param int|null $ordreEdition The ordre edition.
     * @return Centres Returns this Centres.
     */
    public function setOrdreEdition(?int $ordreEdition): Centres {
        $this->ordreEdition = $ordreEdition;
        return $this;
    }

    /**
     * Set the repartition ana.
     *
     * @param string|null $repartitionAna The repartition ana.
     * @return Centres Returns this Centres.
     */
    public function setRepartitionAna(?string $repartitionAna): Centres {
        $this->repartitionAna = $repartitionAna;
        return $this;
    }

    /**
     * Set the repartition auto.
     *
     * @param bool|null $repartitionAuto The repartition auto.
     * @return Centres Returns this Centres.
     */
    public function setRepartitionAuto(?bool $repartitionAuto): Centres {
        $this->repartitionAuto = $repartitionAuto;
        return $this;
    }

    /**
     * Set the responsable.
     *
     * @param string|null $responsable The responsable.
     * @return Centres Returns this Centres.
     */
    public function setResponsable(?string $responsable): Centres {
        $this->responsable = $responsable;
        return $this;
    }

    /**
     * Set the restrictions.
     *
     * @param string|null $restrictions The restrictions.
     * @return Centres Returns this Centres.
     */
    public function setRestrictions(?string $restrictions): Centres {
        $this->restrictions = $restrictions;
        return $this;
    }

    /**
     * Set the suivi annee recolte.
     *
     * @param bool|null $suiviAnneeRecolte The suivi annee recolte.
     * @return Centres Returns this Centres.
     */
    public function setSuiviAnneeRecolte(?bool $suiviAnneeRecolte): Centres {
        $this->suiviAnneeRecolte = $suiviAnneeRecolte;
        return $this;
    }

    /**
     * Set the superficie.
     *
     * @param float|null $superficie The superficie.
     * @return Centres Returns this Centres.
     */
    public function setSuperficie(?float $superficie): Centres {
        $this->superficie = $superficie;
        return $this;
    }

    /**
     * Set the type centre.
     *
     * @param string|null $typeCentre The type centre.
     * @return Centres Returns this Centres.
     */
    public function setTypeCentre(?string $typeCentre): Centres {
        $this->typeCentre = $typeCentre;
        return $this;
    }

    /**
     * Set the type suivi.
     *
     * @param string|null $typeSuivi The type suivi.
     * @return Centres Returns this Centres.
     */
    public function setTypeSuivi(?string $typeSuivi): Centres {
        $this->typeSuivi = $typeSuivi;
        return $this;
    }

    /**
     * Set the type suivi autre texte.
     *
     * @param string|null $typeSuiviAutreTexte The type suivi autre texte.
     * @return Centres Returns this Centres.
     */
    public function setTypeSuiviAutreTexte(?string $typeSuiviAutreTexte): Centres {
        $this->typeSuiviAutreTexte = $typeSuiviAutreTexte;
        return $this;
    }

    /**
     * Set the type suivi autre valeur.
     *
     * @param float|null $typeSuiviAutreValeur The type suivi autre valeur.
     * @return Centres Returns this Centres.
     */
    public function setTypeSuiviAutreValeur(?float $typeSuiviAutreValeur): Centres {
        $this->typeSuiviAutreValeur = $typeSuiviAutreValeur;
        return $this;
    }
}
