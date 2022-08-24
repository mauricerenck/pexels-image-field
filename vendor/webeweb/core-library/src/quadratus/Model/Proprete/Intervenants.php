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
 * Intervenants.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Intervenants {

    /**
     * Ape.
     *
     * @var string|null
     */
    private $ape;

    /**
     * Btq.
     *
     * @var string|null
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string|null
     */
    private $bureauDistributeur;

    /**
     * Civilite.
     *
     * @var string|null
     */
    private $civilite;

    /**
     * Code officiel commune.
     *
     * @var string|null
     */
    private $codeOfficielCommune;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Fax.
     *
     * @var string|null
     */
    private $fax;

    /**
     * Id.
     *
     * @var string|null
     */
    private $id;

    /**
     * Ident tva.
     *
     * @var string|null
     */
    private $identTva;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Nom marital.
     *
     * @var string|null
     */
    private $nomMarital;

    /**
     * Nom responsable.
     *
     * @var string|null
     */
    private $nomResponsable;

    /**
     * Nom suite.
     *
     * @var string|null
     */
    private $nomSuite;

    /**
     * Nom ville.
     *
     * @var string|null
     */
    private $nomVille;

    /**
     * Nom voie.
     *
     * @var string|null
     */
    private $nomVoie;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Portable1.
     *
     * @var string|null
     */
    private $portable1;

    /**
     * Portable2.
     *
     * @var string|null
     */
    private $portable2;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Qualite.
     *
     * @var string|null
     */
    private $qualite;

    /**
     * Rc.
     *
     * @var string|null
     */
    private $rc;

    /**
     * Siret.
     *
     * @var string|null
     */
    private $siret;

    /**
     * Tel1.
     *
     * @var string|null
     */
    private $tel1;

    /**
     * Tel2.
     *
     * @var string|null
     */
    private $tel2;

    /**
     * Tel voiture.
     *
     * @var string|null
     */
    private $telVoiture;

    /**
     * Telex.
     *
     * @var string|null
     */
    private $telex;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ape.
     *
     * @return string|null Returns the ape.
     */
    public function getApe(): ?string {
        return $this->ape;
    }

    /**
     * Get the btq.
     *
     * @return string|null Returns the btq.
     */
    public function getBtq(): ?string {
        return $this->btq;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string|null Returns the bureau distributeur.
     */
    public function getBureauDistributeur(): ?string {
        return $this->bureauDistributeur;
    }

    /**
     * Get the civilite.
     *
     * @return string|null Returns the civilite.
     */
    public function getCivilite(): ?string {
        return $this->civilite;
    }

    /**
     * Get the code officiel commune.
     *
     * @return string|null Returns the code officiel commune.
     */
    public function getCodeOfficielCommune(): ?string {
        return $this->codeOfficielCommune;
    }

    /**
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
    }

    /**
     * Get the complement.
     *
     * @return string|null Returns the complement.
     */
    public function getComplement(): ?string {
        return $this->complement;
    }

    /**
     * Get the date creat.
     *
     * @return DateTime|null Returns the date creat.
     */
    public function getDateCreat(): ?DateTime {
        return $this->dateCreat;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif(): ?DateTime {
        return $this->dateModif;
    }

    /**
     * Get the fax.
     *
     * @return string|null Returns the fax.
     */
    public function getFax(): ?string {
        return $this->fax;
    }

    /**
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Get the ident tva.
     *
     * @return string|null Returns the ident tva.
     */
    public function getIdentTva(): ?string {
        return $this->identTva;
    }

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getNom(): ?string {
        return $this->nom;
    }

    /**
     * Get the nom marital.
     *
     * @return string|null Returns the nom marital.
     */
    public function getNomMarital(): ?string {
        return $this->nomMarital;
    }

    /**
     * Get the nom responsable.
     *
     * @return string|null Returns the nom responsable.
     */
    public function getNomResponsable(): ?string {
        return $this->nomResponsable;
    }

    /**
     * Get the nom suite.
     *
     * @return string|null Returns the nom suite.
     */
    public function getNomSuite(): ?string {
        return $this->nomSuite;
    }

    /**
     * Get the nom ville.
     *
     * @return string|null Returns the nom ville.
     */
    public function getNomVille(): ?string {
        return $this->nomVille;
    }

    /**
     * Get the nom voie.
     *
     * @return string|null Returns the nom voie.
     */
    public function getNomVoie(): ?string {
        return $this->nomVoie;
    }

    /**
     * Get the num voie.
     *
     * @return string|null Returns the num voie.
     */
    public function getNumVoie(): ?string {
        return $this->numVoie;
    }

    /**
     * Get the portable1.
     *
     * @return string|null Returns the portable1.
     */
    public function getPortable1(): ?string {
        return $this->portable1;
    }

    /**
     * Get the portable2.
     *
     * @return string|null Returns the portable2.
     */
    public function getPortable2(): ?string {
        return $this->portable2;
    }

    /**
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getPrenom(): ?string {
        return $this->prenom;
    }

    /**
     * Get the qualite.
     *
     * @return string|null Returns the qualite.
     */
    public function getQualite(): ?string {
        return $this->qualite;
    }

    /**
     * Get the rc.
     *
     * @return string|null Returns the rc.
     */
    public function getRc(): ?string {
        return $this->rc;
    }

    /**
     * Get the siret.
     *
     * @return string|null Returns the siret.
     */
    public function getSiret(): ?string {
        return $this->siret;
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
     * Get the tel2.
     *
     * @return string|null Returns the tel2.
     */
    public function getTel2(): ?string {
        return $this->tel2;
    }

    /**
     * Get the tel voiture.
     *
     * @return string|null Returns the tel voiture.
     */
    public function getTelVoiture(): ?string {
        return $this->telVoiture;
    }

    /**
     * Get the telex.
     *
     * @return string|null Returns the telex.
     */
    public function getTelex(): ?string {
        return $this->telex;
    }

    /**
     * Set the ape.
     *
     * @param string|null $ape The ape.
     * @return Intervenants Returns this Intervenants.
     */
    public function setApe(?string $ape): Intervenants {
        $this->ape = $ape;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Intervenants Returns this Intervenants.
     */
    public function setBtq(?string $btq): Intervenants {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Intervenants Returns this Intervenants.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Intervenants {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string|null $civilite The civilite.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCivilite(?string $civilite): Intervenants {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string|null $codeOfficielCommune The code officiel commune.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodeOfficielCommune(?string $codeOfficielCommune): Intervenants {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Intervenants Returns this Intervenants.
     */
    public function setCodePostal(?string $codePostal): Intervenants {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Intervenants Returns this Intervenants.
     */
    public function setComplement(?string $complement): Intervenants {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     * @return Intervenants Returns this Intervenants.
     */
    public function setDateCreat(?DateTime $dateCreat): Intervenants {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return Intervenants Returns this Intervenants.
     */
    public function setDateModif(?DateTime $dateModif): Intervenants {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string|null $fax The fax.
     * @return Intervenants Returns this Intervenants.
     */
    public function setFax(?string $fax): Intervenants {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return Intervenants Returns this Intervenants.
     */
    public function setId(?string $id): Intervenants {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the ident tva.
     *
     * @param string|null $identTva The ident tva.
     * @return Intervenants Returns this Intervenants.
     */
    public function setIdentTva(?string $identTva): Intervenants {
        $this->identTva = $identTva;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNom(?string $nom): Intervenants {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string|null $nomMarital The nom marital.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomMarital(?string $nomMarital): Intervenants {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom responsable.
     *
     * @param string|null $nomResponsable The nom responsable.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomResponsable(?string $nomResponsable): Intervenants {
        $this->nomResponsable = $nomResponsable;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string|null $nomSuite The nom suite.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomSuite(?string $nomSuite): Intervenants {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomVille(?string $nomVille): Intervenants {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNomVoie(?string $nomVoie): Intervenants {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Intervenants Returns this Intervenants.
     */
    public function setNumVoie(?string $numVoie): Intervenants {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the portable1.
     *
     * @param string|null $portable1 The portable1.
     * @return Intervenants Returns this Intervenants.
     */
    public function setPortable1(?string $portable1): Intervenants {
        $this->portable1 = $portable1;
        return $this;
    }

    /**
     * Set the portable2.
     *
     * @param string|null $portable2 The portable2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setPortable2(?string $portable2): Intervenants {
        $this->portable2 = $portable2;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return Intervenants Returns this Intervenants.
     */
    public function setPrenom(?string $prenom): Intervenants {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the qualite.
     *
     * @param string|null $qualite The qualite.
     * @return Intervenants Returns this Intervenants.
     */
    public function setQualite(?string $qualite): Intervenants {
        $this->qualite = $qualite;
        return $this;
    }

    /**
     * Set the rc.
     *
     * @param string|null $rc The rc.
     * @return Intervenants Returns this Intervenants.
     */
    public function setRc(?string $rc): Intervenants {
        $this->rc = $rc;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return Intervenants Returns this Intervenants.
     */
    public function setSiret(?string $siret): Intervenants {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string|null $tel1 The tel1.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTel1(?string $tel1): Intervenants {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string|null $tel2 The tel2.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTel2(?string $tel2): Intervenants {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tel voiture.
     *
     * @param string|null $telVoiture The tel voiture.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTelVoiture(?string $telVoiture): Intervenants {
        $this->telVoiture = $telVoiture;
        return $this;
    }

    /**
     * Set the telex.
     *
     * @param string|null $telex The telex.
     * @return Intervenants Returns this Intervenants.
     */
    public function setTelex(?string $telex): Intervenants {
        $this->telex = $telex;
        return $this;
    }
}
