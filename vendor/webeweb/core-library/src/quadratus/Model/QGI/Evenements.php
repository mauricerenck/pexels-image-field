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
 * Evenements.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Evenements {

    /**
     * Archive.
     *
     * @var bool|null
     */
    private $archive;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code collab.
     *
     * @var string|null
     */
    private $codeCollab;

    /**
     * Contenu1.
     *
     * @var string|null
     */
    private $contenu1;

    /**
     * Contenu2.
     *
     * @var string|null
     */
    private $contenu2;

    /**
     * Contenu3.
     *
     * @var string|null
     */
    private $contenu3;

    /**
     * Contenu4.
     *
     * @var string|null
     */
    private $contenu4;

    /**
     * Date evt.
     *
     * @var DateTime|null
     */
    private $dateEvt;

    /**
     * Emplacement fichier.
     *
     * @var string|null
     */
    private $emplacementFichier;

    /**
     * Etat is actif.
     *
     * @var string|null
     */
    private $etatIsActif;

    /**
     * Fs compta.
     *
     * @var string|null
     */
    private $fsCompta;

    /**
     * Fs compta coll arch.
     *
     * @var string|null
     */
    private $fsComptaCollArch;

    /**
     * Fs compta date alerte.
     *
     * @var DateTime|null
     */
    private $fsComptaDateAlerte;

    /**
     * Fs compta date arch.
     *
     * @var DateTime|null
     */
    private $fsComptaDateArch;

    /**
     * Fs compta ya alerte.
     *
     * @var bool|null
     */
    private $fsComptaYaAlerte;

    /**
     * Fs fiscal.
     *
     * @var string|null
     */
    private $fsFiscal;

    /**
     * Fs fiscal coll arch.
     *
     * @var string|null
     */
    private $fsFiscalCollArch;

    /**
     * Fs fiscal date arch.
     *
     * @var DateTime|null
     */
    private $fsFiscalDateArch;

    /**
     * Fs juridique.
     *
     * @var string|null
     */
    private $fsJuridique;

    /**
     * Fs juridique coll arch.
     *
     * @var string|null
     */
    private $fsJuridiqueCollArch;

    /**
     * Fs juridique date arch.
     *
     * @var DateTime|null
     */
    private $fsJuridiqueDateArch;

    /**
     * Fs social.
     *
     * @var string|null
     */
    private $fsSocial;

    /**
     * Fs social coll arch.
     *
     * @var string|null
     */
    private $fsSocialCollArch;

    /**
     * Fs social date alerte.
     *
     * @var DateTime|null
     */
    private $fsSocialDateAlerte;

    /**
     * Fs social date arch.
     *
     * @var DateTime|null
     */
    private $fsSocialDateArch;

    /**
     * Fs social ya alerte.
     *
     * @var bool|null
     */
    private $fsSocialYaAlerte;

    /**
     * Fsgi.
     *
     * @var string|null
     */
    private $fsgi;

    /**
     * Fsgi coll arch.
     *
     * @var string|null
     */
    private $fsgiCollArch;

    /**
     * Fsgi date arch.
     *
     * @var DateTime|null
     */
    private $fsgiDateArch;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Numero.
     *
     * @var int|null
     */
    private $numero;

    /**
     * Qualifiant1.
     *
     * @var string|null
     */
    private $qualifiant1;

    /**
     * Qualifiant2.
     *
     * @var string|null
     */
    private $qualifiant2;

    /**
     * Qualifiant3.
     *
     * @var string|null
     */
    private $qualifiant3;

    /**
     * Racine cpt.
     *
     * @var string|null
     */
    private $racineCpt;

    /**
     * Regle.
     *
     * @var bool|null
     */
    private $regle;

    /**
     * Titre.
     *
     * @var string|null
     */
    private $titre;

    /**
     * Type evt.
     *
     * @var string|null
     */
    private $typeEvt;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the archive.
     *
     * @return bool|null Returns the archive.
     */
    public function getArchive(): ?bool {
        return $this->archive;
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
     * Get the code collab.
     *
     * @return string|null Returns the code collab.
     */
    public function getCodeCollab(): ?string {
        return $this->codeCollab;
    }

    /**
     * Get the contenu1.
     *
     * @return string|null Returns the contenu1.
     */
    public function getContenu1(): ?string {
        return $this->contenu1;
    }

    /**
     * Get the contenu2.
     *
     * @return string|null Returns the contenu2.
     */
    public function getContenu2(): ?string {
        return $this->contenu2;
    }

    /**
     * Get the contenu3.
     *
     * @return string|null Returns the contenu3.
     */
    public function getContenu3(): ?string {
        return $this->contenu3;
    }

    /**
     * Get the contenu4.
     *
     * @return string|null Returns the contenu4.
     */
    public function getContenu4(): ?string {
        return $this->contenu4;
    }

    /**
     * Get the date evt.
     *
     * @return DateTime|null Returns the date evt.
     */
    public function getDateEvt(): ?DateTime {
        return $this->dateEvt;
    }

    /**
     * Get the emplacement fichier.
     *
     * @return string|null Returns the emplacement fichier.
     */
    public function getEmplacementFichier(): ?string {
        return $this->emplacementFichier;
    }

    /**
     * Get the etat is actif.
     *
     * @return string|null Returns the etat is actif.
     */
    public function getEtatIsActif(): ?string {
        return $this->etatIsActif;
    }

    /**
     * Get the fs compta.
     *
     * @return string|null Returns the fs compta.
     */
    public function getFsCompta(): ?string {
        return $this->fsCompta;
    }

    /**
     * Get the fs compta coll arch.
     *
     * @return string|null Returns the fs compta coll arch.
     */
    public function getFsComptaCollArch(): ?string {
        return $this->fsComptaCollArch;
    }

    /**
     * Get the fs compta date alerte.
     *
     * @return DateTime|null Returns the fs compta date alerte.
     */
    public function getFsComptaDateAlerte(): ?DateTime {
        return $this->fsComptaDateAlerte;
    }

    /**
     * Get the fs compta date arch.
     *
     * @return DateTime|null Returns the fs compta date arch.
     */
    public function getFsComptaDateArch(): ?DateTime {
        return $this->fsComptaDateArch;
    }

    /**
     * Get the fs compta ya alerte.
     *
     * @return bool|null Returns the fs compta ya alerte.
     */
    public function getFsComptaYaAlerte(): ?bool {
        return $this->fsComptaYaAlerte;
    }

    /**
     * Get the fs fiscal.
     *
     * @return string|null Returns the fs fiscal.
     */
    public function getFsFiscal(): ?string {
        return $this->fsFiscal;
    }

    /**
     * Get the fs fiscal coll arch.
     *
     * @return string|null Returns the fs fiscal coll arch.
     */
    public function getFsFiscalCollArch(): ?string {
        return $this->fsFiscalCollArch;
    }

    /**
     * Get the fs fiscal date arch.
     *
     * @return DateTime|null Returns the fs fiscal date arch.
     */
    public function getFsFiscalDateArch(): ?DateTime {
        return $this->fsFiscalDateArch;
    }

    /**
     * Get the fs juridique.
     *
     * @return string|null Returns the fs juridique.
     */
    public function getFsJuridique(): ?string {
        return $this->fsJuridique;
    }

    /**
     * Get the fs juridique coll arch.
     *
     * @return string|null Returns the fs juridique coll arch.
     */
    public function getFsJuridiqueCollArch(): ?string {
        return $this->fsJuridiqueCollArch;
    }

    /**
     * Get the fs juridique date arch.
     *
     * @return DateTime|null Returns the fs juridique date arch.
     */
    public function getFsJuridiqueDateArch(): ?DateTime {
        return $this->fsJuridiqueDateArch;
    }

    /**
     * Get the fs social.
     *
     * @return string|null Returns the fs social.
     */
    public function getFsSocial(): ?string {
        return $this->fsSocial;
    }

    /**
     * Get the fs social coll arch.
     *
     * @return string|null Returns the fs social coll arch.
     */
    public function getFsSocialCollArch(): ?string {
        return $this->fsSocialCollArch;
    }

    /**
     * Get the fs social date alerte.
     *
     * @return DateTime|null Returns the fs social date alerte.
     */
    public function getFsSocialDateAlerte(): ?DateTime {
        return $this->fsSocialDateAlerte;
    }

    /**
     * Get the fs social date arch.
     *
     * @return DateTime|null Returns the fs social date arch.
     */
    public function getFsSocialDateArch(): ?DateTime {
        return $this->fsSocialDateArch;
    }

    /**
     * Get the fs social ya alerte.
     *
     * @return bool|null Returns the fs social ya alerte.
     */
    public function getFsSocialYaAlerte(): ?bool {
        return $this->fsSocialYaAlerte;
    }

    /**
     * Get the fsgi.
     *
     * @return string|null Returns the fsgi.
     */
    public function getFsgi(): ?string {
        return $this->fsgi;
    }

    /**
     * Get the fsgi coll arch.
     *
     * @return string|null Returns the fsgi coll arch.
     */
    public function getFsgiCollArch(): ?string {
        return $this->fsgiCollArch;
    }

    /**
     * Get the fsgi date arch.
     *
     * @return DateTime|null Returns the fsgi date arch.
     */
    public function getFsgiDateArch(): ?DateTime {
        return $this->fsgiDateArch;
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
     * Get the numero.
     *
     * @return int|null Returns the numero.
     */
    public function getNumero(): ?int {
        return $this->numero;
    }

    /**
     * Get the qualifiant1.
     *
     * @return string|null Returns the qualifiant1.
     */
    public function getQualifiant1(): ?string {
        return $this->qualifiant1;
    }

    /**
     * Get the qualifiant2.
     *
     * @return string|null Returns the qualifiant2.
     */
    public function getQualifiant2(): ?string {
        return $this->qualifiant2;
    }

    /**
     * Get the qualifiant3.
     *
     * @return string|null Returns the qualifiant3.
     */
    public function getQualifiant3(): ?string {
        return $this->qualifiant3;
    }

    /**
     * Get the racine cpt.
     *
     * @return string|null Returns the racine cpt.
     */
    public function getRacineCpt(): ?string {
        return $this->racineCpt;
    }

    /**
     * Get the regle.
     *
     * @return bool|null Returns the regle.
     */
    public function getRegle(): ?bool {
        return $this->regle;
    }

    /**
     * Get the titre.
     *
     * @return string|null Returns the titre.
     */
    public function getTitre(): ?string {
        return $this->titre;
    }

    /**
     * Get the type evt.
     *
     * @return string|null Returns the type evt.
     */
    public function getTypeEvt(): ?string {
        return $this->typeEvt;
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
     * Set the archive.
     *
     * @param bool|null $archive The archive.
     * @return Evenements Returns this Evenements.
     */
    public function setArchive(?bool $archive): Evenements {
        $this->archive = $archive;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Evenements Returns this Evenements.
     */
    public function setCodeClient(?string $codeClient): Evenements {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collab.
     *
     * @param string|null $codeCollab The code collab.
     * @return Evenements Returns this Evenements.
     */
    public function setCodeCollab(?string $codeCollab): Evenements {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the contenu1.
     *
     * @param string|null $contenu1 The contenu1.
     * @return Evenements Returns this Evenements.
     */
    public function setContenu1(?string $contenu1): Evenements {
        $this->contenu1 = $contenu1;
        return $this;
    }

    /**
     * Set the contenu2.
     *
     * @param string|null $contenu2 The contenu2.
     * @return Evenements Returns this Evenements.
     */
    public function setContenu2(?string $contenu2): Evenements {
        $this->contenu2 = $contenu2;
        return $this;
    }

    /**
     * Set the contenu3.
     *
     * @param string|null $contenu3 The contenu3.
     * @return Evenements Returns this Evenements.
     */
    public function setContenu3(?string $contenu3): Evenements {
        $this->contenu3 = $contenu3;
        return $this;
    }

    /**
     * Set the contenu4.
     *
     * @param string|null $contenu4 The contenu4.
     * @return Evenements Returns this Evenements.
     */
    public function setContenu4(?string $contenu4): Evenements {
        $this->contenu4 = $contenu4;
        return $this;
    }

    /**
     * Set the date evt.
     *
     * @param DateTime|null $dateEvt The date evt.
     * @return Evenements Returns this Evenements.
     */
    public function setDateEvt(?DateTime $dateEvt): Evenements {
        $this->dateEvt = $dateEvt;
        return $this;
    }

    /**
     * Set the emplacement fichier.
     *
     * @param string|null $emplacementFichier The emplacement fichier.
     * @return Evenements Returns this Evenements.
     */
    public function setEmplacementFichier(?string $emplacementFichier): Evenements {
        $this->emplacementFichier = $emplacementFichier;
        return $this;
    }

    /**
     * Set the etat is actif.
     *
     * @param string|null $etatIsActif The etat is actif.
     * @return Evenements Returns this Evenements.
     */
    public function setEtatIsActif(?string $etatIsActif): Evenements {
        $this->etatIsActif = $etatIsActif;
        return $this;
    }

    /**
     * Set the fs compta.
     *
     * @param string|null $fsCompta The fs compta.
     * @return Evenements Returns this Evenements.
     */
    public function setFsCompta(?string $fsCompta): Evenements {
        $this->fsCompta = $fsCompta;
        return $this;
    }

    /**
     * Set the fs compta coll arch.
     *
     * @param string|null $fsComptaCollArch The fs compta coll arch.
     * @return Evenements Returns this Evenements.
     */
    public function setFsComptaCollArch(?string $fsComptaCollArch): Evenements {
        $this->fsComptaCollArch = $fsComptaCollArch;
        return $this;
    }

    /**
     * Set the fs compta date alerte.
     *
     * @param DateTime|null $fsComptaDateAlerte The fs compta date alerte.
     * @return Evenements Returns this Evenements.
     */
    public function setFsComptaDateAlerte(?DateTime $fsComptaDateAlerte): Evenements {
        $this->fsComptaDateAlerte = $fsComptaDateAlerte;
        return $this;
    }

    /**
     * Set the fs compta date arch.
     *
     * @param DateTime|null $fsComptaDateArch The fs compta date arch.
     * @return Evenements Returns this Evenements.
     */
    public function setFsComptaDateArch(?DateTime $fsComptaDateArch): Evenements {
        $this->fsComptaDateArch = $fsComptaDateArch;
        return $this;
    }

    /**
     * Set the fs compta ya alerte.
     *
     * @param bool|null $fsComptaYaAlerte The fs compta ya alerte.
     * @return Evenements Returns this Evenements.
     */
    public function setFsComptaYaAlerte(?bool $fsComptaYaAlerte): Evenements {
        $this->fsComptaYaAlerte = $fsComptaYaAlerte;
        return $this;
    }

    /**
     * Set the fs fiscal.
     *
     * @param string|null $fsFiscal The fs fiscal.
     * @return Evenements Returns this Evenements.
     */
    public function setFsFiscal(?string $fsFiscal): Evenements {
        $this->fsFiscal = $fsFiscal;
        return $this;
    }

    /**
     * Set the fs fiscal coll arch.
     *
     * @param string|null $fsFiscalCollArch The fs fiscal coll arch.
     * @return Evenements Returns this Evenements.
     */
    public function setFsFiscalCollArch(?string $fsFiscalCollArch): Evenements {
        $this->fsFiscalCollArch = $fsFiscalCollArch;
        return $this;
    }

    /**
     * Set the fs fiscal date arch.
     *
     * @param DateTime|null $fsFiscalDateArch The fs fiscal date arch.
     * @return Evenements Returns this Evenements.
     */
    public function setFsFiscalDateArch(?DateTime $fsFiscalDateArch): Evenements {
        $this->fsFiscalDateArch = $fsFiscalDateArch;
        return $this;
    }

    /**
     * Set the fs juridique.
     *
     * @param string|null $fsJuridique The fs juridique.
     * @return Evenements Returns this Evenements.
     */
    public function setFsJuridique(?string $fsJuridique): Evenements {
        $this->fsJuridique = $fsJuridique;
        return $this;
    }

    /**
     * Set the fs juridique coll arch.
     *
     * @param string|null $fsJuridiqueCollArch The fs juridique coll arch.
     * @return Evenements Returns this Evenements.
     */
    public function setFsJuridiqueCollArch(?string $fsJuridiqueCollArch): Evenements {
        $this->fsJuridiqueCollArch = $fsJuridiqueCollArch;
        return $this;
    }

    /**
     * Set the fs juridique date arch.
     *
     * @param DateTime|null $fsJuridiqueDateArch The fs juridique date arch.
     * @return Evenements Returns this Evenements.
     */
    public function setFsJuridiqueDateArch(?DateTime $fsJuridiqueDateArch): Evenements {
        $this->fsJuridiqueDateArch = $fsJuridiqueDateArch;
        return $this;
    }

    /**
     * Set the fs social.
     *
     * @param string|null $fsSocial The fs social.
     * @return Evenements Returns this Evenements.
     */
    public function setFsSocial(?string $fsSocial): Evenements {
        $this->fsSocial = $fsSocial;
        return $this;
    }

    /**
     * Set the fs social coll arch.
     *
     * @param string|null $fsSocialCollArch The fs social coll arch.
     * @return Evenements Returns this Evenements.
     */
    public function setFsSocialCollArch(?string $fsSocialCollArch): Evenements {
        $this->fsSocialCollArch = $fsSocialCollArch;
        return $this;
    }

    /**
     * Set the fs social date alerte.
     *
     * @param DateTime|null $fsSocialDateAlerte The fs social date alerte.
     * @return Evenements Returns this Evenements.
     */
    public function setFsSocialDateAlerte(?DateTime $fsSocialDateAlerte): Evenements {
        $this->fsSocialDateAlerte = $fsSocialDateAlerte;
        return $this;
    }

    /**
     * Set the fs social date arch.
     *
     * @param DateTime|null $fsSocialDateArch The fs social date arch.
     * @return Evenements Returns this Evenements.
     */
    public function setFsSocialDateArch(?DateTime $fsSocialDateArch): Evenements {
        $this->fsSocialDateArch = $fsSocialDateArch;
        return $this;
    }

    /**
     * Set the fs social ya alerte.
     *
     * @param bool|null $fsSocialYaAlerte The fs social ya alerte.
     * @return Evenements Returns this Evenements.
     */
    public function setFsSocialYaAlerte(?bool $fsSocialYaAlerte): Evenements {
        $this->fsSocialYaAlerte = $fsSocialYaAlerte;
        return $this;
    }

    /**
     * Set the fsgi.
     *
     * @param string|null $fsgi The fsgi.
     * @return Evenements Returns this Evenements.
     */
    public function setFsgi(?string $fsgi): Evenements {
        $this->fsgi = $fsgi;
        return $this;
    }

    /**
     * Set the fsgi coll arch.
     *
     * @param string|null $fsgiCollArch The fsgi coll arch.
     * @return Evenements Returns this Evenements.
     */
    public function setFsgiCollArch(?string $fsgiCollArch): Evenements {
        $this->fsgiCollArch = $fsgiCollArch;
        return $this;
    }

    /**
     * Set the fsgi date arch.
     *
     * @param DateTime|null $fsgiDateArch The fsgi date arch.
     * @return Evenements Returns this Evenements.
     */
    public function setFsgiDateArch(?DateTime $fsgiDateArch): Evenements {
        $this->fsgiDateArch = $fsgiDateArch;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Evenements Returns this Evenements.
     */
    public function setLibelle(?string $libelle): Evenements {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return Evenements Returns this Evenements.
     */
    public function setNumero(?int $numero): Evenements {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the qualifiant1.
     *
     * @param string|null $qualifiant1 The qualifiant1.
     * @return Evenements Returns this Evenements.
     */
    public function setQualifiant1(?string $qualifiant1): Evenements {
        $this->qualifiant1 = $qualifiant1;
        return $this;
    }

    /**
     * Set the qualifiant2.
     *
     * @param string|null $qualifiant2 The qualifiant2.
     * @return Evenements Returns this Evenements.
     */
    public function setQualifiant2(?string $qualifiant2): Evenements {
        $this->qualifiant2 = $qualifiant2;
        return $this;
    }

    /**
     * Set the qualifiant3.
     *
     * @param string|null $qualifiant3 The qualifiant3.
     * @return Evenements Returns this Evenements.
     */
    public function setQualifiant3(?string $qualifiant3): Evenements {
        $this->qualifiant3 = $qualifiant3;
        return $this;
    }

    /**
     * Set the racine cpt.
     *
     * @param string|null $racineCpt The racine cpt.
     * @return Evenements Returns this Evenements.
     */
    public function setRacineCpt(?string $racineCpt): Evenements {
        $this->racineCpt = $racineCpt;
        return $this;
    }

    /**
     * Set the regle.
     *
     * @param bool|null $regle The regle.
     * @return Evenements Returns this Evenements.
     */
    public function setRegle(?bool $regle): Evenements {
        $this->regle = $regle;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return Evenements Returns this Evenements.
     */
    public function setTitre(?string $titre): Evenements {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the type evt.
     *
     * @param string|null $typeEvt The type evt.
     * @return Evenements Returns this Evenements.
     */
    public function setTypeEvt(?string $typeEvt): Evenements {
        $this->typeEvt = $typeEvt;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return Evenements Returns this Evenements.
     */
    public function setUniqId(?string $uniqId): Evenements {
        $this->uniqId = $uniqId;
        return $this;
    }
}
