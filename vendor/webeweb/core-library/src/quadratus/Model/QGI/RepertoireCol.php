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
 * Repertoire col.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class RepertoireCol {

    /**
     * Adresse1.
     *
     * @var string|null
     */
    private $adresse1;

    /**
     * Adresse2.
     *
     * @var string|null
     */
    private $adresse2;

    /**
     * Adresse3.
     *
     * @var string|null
     */
    private $adresse3;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code comp.
     *
     * @var string|null
     */
    private $codeComp;

    /**
     * Coll modif.
     *
     * @var string|null
     */
    private $collModif;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Email.
     *
     * @var string|null
     */
    private $email;

    /**
     * Email2.
     *
     * @var string|null
     */
    private $email2;

    /**
     * Flag tel.
     *
     * @var string|null
     */
    private $flagTel;

    /**
     * Flag tel2.
     *
     * @var string|null
     */
    private $flagTel2;

    /**
     * Flag tel3.
     *
     * @var string|null
     */
    private $flagTel3;

    /**
     * Flag tel4.
     *
     * @var string|null
     */
    private $flagTel4;

    /**
     * Ldap ads path.
     *
     * @var string|null
     */
    private $ldapAdsPath;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Num sous rep.
     *
     * @var int|null
     */
    private $numSousRep;

    /**
     * Num uniq.
     *
     * @var int|null
     */
    private $numUniq;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Tel.
     *
     * @var string|null
     */
    private $tel;

    /**
     * Tel2.
     *
     * @var string|null
     */
    private $tel2;

    /**
     * Tel3.
     *
     * @var string|null
     */
    private $tel3;

    /**
     * Tel4.
     *
     * @var string|null
     */
    private $tel4;

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
     * Get the adresse1.
     *
     * @return string|null Returns the adresse1.
     */
    public function getAdresse1(): ?string {
        return $this->adresse1;
    }

    /**
     * Get the adresse2.
     *
     * @return string|null Returns the adresse2.
     */
    public function getAdresse2(): ?string {
        return $this->adresse2;
    }

    /**
     * Get the adresse3.
     *
     * @return string|null Returns the adresse3.
     */
    public function getAdresse3(): ?string {
        return $this->adresse3;
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
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code comp.
     *
     * @return string|null Returns the code comp.
     */
    public function getCodeComp(): ?string {
        return $this->codeComp;
    }

    /**
     * Get the coll modif.
     *
     * @return string|null Returns the coll modif.
     */
    public function getCollModif(): ?string {
        return $this->collModif;
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
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif(): ?DateTime {
        return $this->dateModif;
    }

    /**
     * Get the email.
     *
     * @return string|null Returns the email.
     */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Get the email2.
     *
     * @return string|null Returns the email2.
     */
    public function getEmail2(): ?string {
        return $this->email2;
    }

    /**
     * Get the flag tel.
     *
     * @return string|null Returns the flag tel.
     */
    public function getFlagTel(): ?string {
        return $this->flagTel;
    }

    /**
     * Get the flag tel2.
     *
     * @return string|null Returns the flag tel2.
     */
    public function getFlagTel2(): ?string {
        return $this->flagTel2;
    }

    /**
     * Get the flag tel3.
     *
     * @return string|null Returns the flag tel3.
     */
    public function getFlagTel3(): ?string {
        return $this->flagTel3;
    }

    /**
     * Get the flag tel4.
     *
     * @return string|null Returns the flag tel4.
     */
    public function getFlagTel4(): ?string {
        return $this->flagTel4;
    }

    /**
     * Get the ldap ads path.
     *
     * @return string|null Returns the ldap ads path.
     */
    public function getLdapAdsPath(): ?string {
        return $this->ldapAdsPath;
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
     * Get the num sous rep.
     *
     * @return int|null Returns the num sous rep.
     */
    public function getNumSousRep(): ?int {
        return $this->numSousRep;
    }

    /**
     * Get the num uniq.
     *
     * @return int|null Returns the num uniq.
     */
    public function getNumUniq(): ?int {
        return $this->numUniq;
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
     * Get the tel.
     *
     * @return string|null Returns the tel.
     */
    public function getTel(): ?string {
        return $this->tel;
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
     * Get the tel3.
     *
     * @return string|null Returns the tel3.
     */
    public function getTel3(): ?string {
        return $this->tel3;
    }

    /**
     * Get the tel4.
     *
     * @return string|null Returns the tel4.
     */
    public function getTel4(): ?string {
        return $this->tel4;
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
     * Set the adresse1.
     *
     * @param string|null $adresse1 The adresse1.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setAdresse1(?string $adresse1): RepertoireCol {
        $this->adresse1 = $adresse1;
        return $this;
    }

    /**
     * Set the adresse2.
     *
     * @param string|null $adresse2 The adresse2.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setAdresse2(?string $adresse2): RepertoireCol {
        $this->adresse2 = $adresse2;
        return $this;
    }

    /**
     * Set the adresse3.
     *
     * @param string|null $adresse3 The adresse3.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setAdresse3(?string $adresse3): RepertoireCol {
        $this->adresse3 = $adresse3;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setCode(?string $code): RepertoireCol {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): RepertoireCol {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code comp.
     *
     * @param string|null $codeComp The code comp.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setCodeComp(?string $codeComp): RepertoireCol {
        $this->codeComp = $codeComp;
        return $this;
    }

    /**
     * Set the coll modif.
     *
     * @param string|null $collModif The coll modif.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setCollModif(?string $collModif): RepertoireCol {
        $this->collModif = $collModif;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setCommentaire(?string $commentaire): RepertoireCol {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setDateModif(?DateTime $dateModif): RepertoireCol {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setEmail(?string $email): RepertoireCol {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the email2.
     *
     * @param string|null $email2 The email2.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setEmail2(?string $email2): RepertoireCol {
        $this->email2 = $email2;
        return $this;
    }

    /**
     * Set the flag tel.
     *
     * @param string|null $flagTel The flag tel.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setFlagTel(?string $flagTel): RepertoireCol {
        $this->flagTel = $flagTel;
        return $this;
    }

    /**
     * Set the flag tel2.
     *
     * @param string|null $flagTel2 The flag tel2.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setFlagTel2(?string $flagTel2): RepertoireCol {
        $this->flagTel2 = $flagTel2;
        return $this;
    }

    /**
     * Set the flag tel3.
     *
     * @param string|null $flagTel3 The flag tel3.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setFlagTel3(?string $flagTel3): RepertoireCol {
        $this->flagTel3 = $flagTel3;
        return $this;
    }

    /**
     * Set the flag tel4.
     *
     * @param string|null $flagTel4 The flag tel4.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setFlagTel4(?string $flagTel4): RepertoireCol {
        $this->flagTel4 = $flagTel4;
        return $this;
    }

    /**
     * Set the ldap ads path.
     *
     * @param string|null $ldapAdsPath The ldap ads path.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setLdapAdsPath(?string $ldapAdsPath): RepertoireCol {
        $this->ldapAdsPath = $ldapAdsPath;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setNom(?string $nom): RepertoireCol {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the num sous rep.
     *
     * @param int|null $numSousRep The num sous rep.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setNumSousRep(?int $numSousRep): RepertoireCol {
        $this->numSousRep = $numSousRep;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int|null $numUniq The num uniq.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setNumUniq(?int $numUniq): RepertoireCol {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setPrenom(?string $prenom): RepertoireCol {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the tel.
     *
     * @param string|null $tel The tel.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setTel(?string $tel): RepertoireCol {
        $this->tel = $tel;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string|null $tel2 The tel2.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setTel2(?string $tel2): RepertoireCol {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tel3.
     *
     * @param string|null $tel3 The tel3.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setTel3(?string $tel3): RepertoireCol {
        $this->tel3 = $tel3;
        return $this;
    }

    /**
     * Set the tel4.
     *
     * @param string|null $tel4 The tel4.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setTel4(?string $tel4): RepertoireCol {
        $this->tel4 = $tel4;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return RepertoireCol Returns this Repertoire col.
     */
    public function setUniqId(?string $uniqId): RepertoireCol {
        $this->uniqId = $uniqId;
        return $this;
    }
}
