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
 * Actions co manif.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ActionsCoManif {

    /**
     * Code action.
     *
     * @var string|null
     */
    private $codeAction;

    /**
     * Code manif.
     *
     * @var string|null
     */
    private $codeManif;

    /**
     * Contact.
     *
     * @var string|null
     */
    private $contact;

    /**
     * Date deb.
     *
     * @var DateTime|null
     */
    private $dateDeb;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Duree.
     *
     * @var int|null
     */
    private $duree;

    /**
     * Duree dbl.
     *
     * @var float|null
     */
    private $dureeDbl;

    /**
     * Indice aff.
     *
     * @var int|null
     */
    private $indiceAff;

    /**
     * Is montant ht.
     *
     * @var bool|null
     */
    private $isMontantHt;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Libelle memo.
     *
     * @var string|null
     */
    private $libelleMemo;

    /**
     * Lieu btq.
     *
     * @var string|null
     */
    private $lieuBtq;

    /**
     * Lieu bureau distributeur.
     *
     * @var string|null
     */
    private $lieuBureauDistributeur;

    /**
     * Lieu code postal.
     *
     * @var string|null
     */
    private $lieuCodePostal;

    /**
     * Lieu complement.
     *
     * @var string|null
     */
    private $lieuComplement;

    /**
     * Lieu email.
     *
     * @var string|null
     */
    private $lieuEmail;

    /**
     * Lieu fax.
     *
     * @var string|null
     */
    private $lieuFax;

    /**
     * Lieu nom.
     *
     * @var string|null
     */
    private $lieuNom;

    /**
     * Lieu nom voie.
     *
     * @var string|null
     */
    private $lieuNomVoie;

    /**
     * Lieu num voie.
     *
     * @var string|null
     */
    private $lieuNumVoie;

    /**
     * Lieu pj.
     *
     * @var string|null
     */
    private $lieuPj;

    /**
     * Lieu tel.
     *
     * @var string|null
     */
    private $lieuTel;

    /**
     * Montant cheque.
     *
     * @var float|null
     */
    private $montantCheque;

    /**
     * Nb seances.
     *
     * @var int|null
     */
    private $nbSeances;

    /**
     * Nom formateur.
     *
     * @var string|null
     */
    private $nomFormateur;

    /**
     * Type formation.
     *
     * @var bool|null
     */
    private $typeFormation;

    /**
     * Ya feuille presence.
     *
     * @var bool|null
     */
    private $yaFeuillePresence;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code action.
     *
     * @return string|null Returns the code action.
     */
    public function getCodeAction(): ?string {
        return $this->codeAction;
    }

    /**
     * Get the code manif.
     *
     * @return string|null Returns the code manif.
     */
    public function getCodeManif(): ?string {
        return $this->codeManif;
    }

    /**
     * Get the contact.
     *
     * @return string|null Returns the contact.
     */
    public function getContact(): ?string {
        return $this->contact;
    }

    /**
     * Get the date deb.
     *
     * @return DateTime|null Returns the date deb.
     */
    public function getDateDeb(): ?DateTime {
        return $this->dateDeb;
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
     * Get the duree.
     *
     * @return int|null Returns the duree.
     */
    public function getDuree(): ?int {
        return $this->duree;
    }

    /**
     * Get the duree dbl.
     *
     * @return float|null Returns the duree dbl.
     */
    public function getDureeDbl(): ?float {
        return $this->dureeDbl;
    }

    /**
     * Get the indice aff.
     *
     * @return int|null Returns the indice aff.
     */
    public function getIndiceAff(): ?int {
        return $this->indiceAff;
    }

    /**
     * Get the is montant ht.
     *
     * @return bool|null Returns the is montant ht.
     */
    public function getIsMontantHt(): ?bool {
        return $this->isMontantHt;
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
     * Get the libelle memo.
     *
     * @return string|null Returns the libelle memo.
     */
    public function getLibelleMemo(): ?string {
        return $this->libelleMemo;
    }

    /**
     * Get the lieu btq.
     *
     * @return string|null Returns the lieu btq.
     */
    public function getLieuBtq(): ?string {
        return $this->lieuBtq;
    }

    /**
     * Get the lieu bureau distributeur.
     *
     * @return string|null Returns the lieu bureau distributeur.
     */
    public function getLieuBureauDistributeur(): ?string {
        return $this->lieuBureauDistributeur;
    }

    /**
     * Get the lieu code postal.
     *
     * @return string|null Returns the lieu code postal.
     */
    public function getLieuCodePostal(): ?string {
        return $this->lieuCodePostal;
    }

    /**
     * Get the lieu complement.
     *
     * @return string|null Returns the lieu complement.
     */
    public function getLieuComplement(): ?string {
        return $this->lieuComplement;
    }

    /**
     * Get the lieu email.
     *
     * @return string|null Returns the lieu email.
     */
    public function getLieuEmail(): ?string {
        return $this->lieuEmail;
    }

    /**
     * Get the lieu fax.
     *
     * @return string|null Returns the lieu fax.
     */
    public function getLieuFax(): ?string {
        return $this->lieuFax;
    }

    /**
     * Get the lieu nom.
     *
     * @return string|null Returns the lieu nom.
     */
    public function getLieuNom(): ?string {
        return $this->lieuNom;
    }

    /**
     * Get the lieu nom voie.
     *
     * @return string|null Returns the lieu nom voie.
     */
    public function getLieuNomVoie(): ?string {
        return $this->lieuNomVoie;
    }

    /**
     * Get the lieu num voie.
     *
     * @return string|null Returns the lieu num voie.
     */
    public function getLieuNumVoie(): ?string {
        return $this->lieuNumVoie;
    }

    /**
     * Get the lieu pj.
     *
     * @return string|null Returns the lieu pj.
     */
    public function getLieuPj(): ?string {
        return $this->lieuPj;
    }

    /**
     * Get the lieu tel.
     *
     * @return string|null Returns the lieu tel.
     */
    public function getLieuTel(): ?string {
        return $this->lieuTel;
    }

    /**
     * Get the montant cheque.
     *
     * @return float|null Returns the montant cheque.
     */
    public function getMontantCheque(): ?float {
        return $this->montantCheque;
    }

    /**
     * Get the nb seances.
     *
     * @return int|null Returns the nb seances.
     */
    public function getNbSeances(): ?int {
        return $this->nbSeances;
    }

    /**
     * Get the nom formateur.
     *
     * @return string|null Returns the nom formateur.
     */
    public function getNomFormateur(): ?string {
        return $this->nomFormateur;
    }

    /**
     * Get the type formation.
     *
     * @return bool|null Returns the type formation.
     */
    public function getTypeFormation(): ?bool {
        return $this->typeFormation;
    }

    /**
     * Get the ya feuille presence.
     *
     * @return bool|null Returns the ya feuille presence.
     */
    public function getYaFeuillePresence(): ?bool {
        return $this->yaFeuillePresence;
    }

    /**
     * Set the code action.
     *
     * @param string|null $codeAction The code action.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setCodeAction(?string $codeAction): ActionsCoManif {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code manif.
     *
     * @param string|null $codeManif The code manif.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setCodeManif(?string $codeManif): ActionsCoManif {
        $this->codeManif = $codeManif;
        return $this;
    }

    /**
     * Set the contact.
     *
     * @param string|null $contact The contact.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setContact(?string $contact): ActionsCoManif {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Set the date deb.
     *
     * @param DateTime|null $dateDeb The date deb.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setDateDeb(?DateTime $dateDeb): ActionsCoManif {
        $this->dateDeb = $dateDeb;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setDateFin(?DateTime $dateFin): ActionsCoManif {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int|null $duree The duree.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setDuree(?int $duree): ActionsCoManif {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the duree dbl.
     *
     * @param float|null $dureeDbl The duree dbl.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setDureeDbl(?float $dureeDbl): ActionsCoManif {
        $this->dureeDbl = $dureeDbl;
        return $this;
    }

    /**
     * Set the indice aff.
     *
     * @param int|null $indiceAff The indice aff.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setIndiceAff(?int $indiceAff): ActionsCoManif {
        $this->indiceAff = $indiceAff;
        return $this;
    }

    /**
     * Set the is montant ht.
     *
     * @param bool|null $isMontantHt The is montant ht.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setIsMontantHt(?bool $isMontantHt): ActionsCoManif {
        $this->isMontantHt = $isMontantHt;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLibelle(?string $libelle): ActionsCoManif {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle memo.
     *
     * @param string|null $libelleMemo The libelle memo.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLibelleMemo(?string $libelleMemo): ActionsCoManif {
        $this->libelleMemo = $libelleMemo;
        return $this;
    }

    /**
     * Set the lieu btq.
     *
     * @param string|null $lieuBtq The lieu btq.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLieuBtq(?string $lieuBtq): ActionsCoManif {
        $this->lieuBtq = $lieuBtq;
        return $this;
    }

    /**
     * Set the lieu bureau distributeur.
     *
     * @param string|null $lieuBureauDistributeur The lieu bureau distributeur.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLieuBureauDistributeur(?string $lieuBureauDistributeur): ActionsCoManif {
        $this->lieuBureauDistributeur = $lieuBureauDistributeur;
        return $this;
    }

    /**
     * Set the lieu code postal.
     *
     * @param string|null $lieuCodePostal The lieu code postal.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLieuCodePostal(?string $lieuCodePostal): ActionsCoManif {
        $this->lieuCodePostal = $lieuCodePostal;
        return $this;
    }

    /**
     * Set the lieu complement.
     *
     * @param string|null $lieuComplement The lieu complement.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLieuComplement(?string $lieuComplement): ActionsCoManif {
        $this->lieuComplement = $lieuComplement;
        return $this;
    }

    /**
     * Set the lieu email.
     *
     * @param string|null $lieuEmail The lieu email.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLieuEmail(?string $lieuEmail): ActionsCoManif {
        $this->lieuEmail = $lieuEmail;
        return $this;
    }

    /**
     * Set the lieu fax.
     *
     * @param string|null $lieuFax The lieu fax.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLieuFax(?string $lieuFax): ActionsCoManif {
        $this->lieuFax = $lieuFax;
        return $this;
    }

    /**
     * Set the lieu nom.
     *
     * @param string|null $lieuNom The lieu nom.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLieuNom(?string $lieuNom): ActionsCoManif {
        $this->lieuNom = $lieuNom;
        return $this;
    }

    /**
     * Set the lieu nom voie.
     *
     * @param string|null $lieuNomVoie The lieu nom voie.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLieuNomVoie(?string $lieuNomVoie): ActionsCoManif {
        $this->lieuNomVoie = $lieuNomVoie;
        return $this;
    }

    /**
     * Set the lieu num voie.
     *
     * @param string|null $lieuNumVoie The lieu num voie.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLieuNumVoie(?string $lieuNumVoie): ActionsCoManif {
        $this->lieuNumVoie = $lieuNumVoie;
        return $this;
    }

    /**
     * Set the lieu pj.
     *
     * @param string|null $lieuPj The lieu pj.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLieuPj(?string $lieuPj): ActionsCoManif {
        $this->lieuPj = $lieuPj;
        return $this;
    }

    /**
     * Set the lieu tel.
     *
     * @param string|null $lieuTel The lieu tel.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setLieuTel(?string $lieuTel): ActionsCoManif {
        $this->lieuTel = $lieuTel;
        return $this;
    }

    /**
     * Set the montant cheque.
     *
     * @param float|null $montantCheque The montant cheque.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setMontantCheque(?float $montantCheque): ActionsCoManif {
        $this->montantCheque = $montantCheque;
        return $this;
    }

    /**
     * Set the nb seances.
     *
     * @param int|null $nbSeances The nb seances.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setNbSeances(?int $nbSeances): ActionsCoManif {
        $this->nbSeances = $nbSeances;
        return $this;
    }

    /**
     * Set the nom formateur.
     *
     * @param string|null $nomFormateur The nom formateur.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setNomFormateur(?string $nomFormateur): ActionsCoManif {
        $this->nomFormateur = $nomFormateur;
        return $this;
    }

    /**
     * Set the type formation.
     *
     * @param bool|null $typeFormation The type formation.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setTypeFormation(?bool $typeFormation): ActionsCoManif {
        $this->typeFormation = $typeFormation;
        return $this;
    }

    /**
     * Set the ya feuille presence.
     *
     * @param bool|null $yaFeuillePresence The ya feuille presence.
     * @return ActionsCoManif Returns this Actions co manif.
     */
    public function setYaFeuillePresence(?bool $yaFeuillePresence): ActionsCoManif {
        $this->yaFeuillePresence = $yaFeuillePresence;
        return $this;
    }
}
