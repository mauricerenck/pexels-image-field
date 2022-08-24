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
 * Banques.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Banques {

    /**
     * Bic.
     *
     * @var string|null
     */
    private $bic;

    /**
     * Code banque.
     *
     * @var string|null
     */
    private $codeBanque;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Edi tdfc.
     *
     * @var bool|null
     */
    private $ediTdfc;

    /**
     * Iban.
     *
     * @var string|null
     */
    private $iban;

    /**
     * Id carte appel env.
     *
     * @var string|null
     */
    private $idCarteAppelEnv;

    /**
     * Id carte appel env2.
     *
     * @var string|null
     */
    private $idCarteAppelEnv2;

    /**
     * Id carte appel env3.
     *
     * @var string|null
     */
    private $idCarteAppelEnv3;

    /**
     * Id carte appel rec.
     *
     * @var string|null
     */
    private $idCarteAppelRec;

    /**
     * Is banque fact.
     *
     * @var bool|null
     */
    private $isBanqueFact;

    /**
     * Mandat date debut etebac.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutEtebac;

    /**
     * Mandat duree etebac.
     *
     * @var int|null
     */
    private $mandatDureeEtebac;

    /**
     * Mandat piece jointe etebac.
     *
     * @var string|null
     */
    private $mandatPieceJointeEtebac;

    /**
     * Nb prelevements.
     *
     * @var int|null
     */
    private $nbPrelevements;

    /**
     * Nom int.
     *
     * @var string|null
     */
    private $nomInt;

    /**
     * Numero.
     *
     * @var int|null
     */
    private $numero;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Sepa.
     *
     * @var bool|null
     */
    private $sepa;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

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
     * Get the bic.
     *
     * @return string|null Returns the bic.
     */
    public function getBic(): ?string {
        return $this->bic;
    }

    /**
     * Get the code banque.
     *
     * @return string|null Returns the code banque.
     */
    public function getCodeBanque(): ?string {
        return $this->codeBanque;
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
     * Get the commentaire.
     *
     * @return string|null Returns the commentaire.
     */
    public function getCommentaire(): ?string {
        return $this->commentaire;
    }

    /**
     * Get the edi tdfc.
     *
     * @return bool|null Returns the edi tdfc.
     */
    public function getEdiTdfc(): ?bool {
        return $this->ediTdfc;
    }

    /**
     * Get the iban.
     *
     * @return string|null Returns the iban.
     */
    public function getIban(): ?string {
        return $this->iban;
    }

    /**
     * Get the id carte appel env.
     *
     * @return string|null Returns the id carte appel env.
     */
    public function getIdCarteAppelEnv(): ?string {
        return $this->idCarteAppelEnv;
    }

    /**
     * Get the id carte appel env2.
     *
     * @return string|null Returns the id carte appel env2.
     */
    public function getIdCarteAppelEnv2(): ?string {
        return $this->idCarteAppelEnv2;
    }

    /**
     * Get the id carte appel env3.
     *
     * @return string|null Returns the id carte appel env3.
     */
    public function getIdCarteAppelEnv3(): ?string {
        return $this->idCarteAppelEnv3;
    }

    /**
     * Get the id carte appel rec.
     *
     * @return string|null Returns the id carte appel rec.
     */
    public function getIdCarteAppelRec(): ?string {
        return $this->idCarteAppelRec;
    }

    /**
     * Get the is banque fact.
     *
     * @return bool|null Returns the is banque fact.
     */
    public function getIsBanqueFact(): ?bool {
        return $this->isBanqueFact;
    }

    /**
     * Get the mandat date debut etebac.
     *
     * @return DateTime|null Returns the mandat date debut etebac.
     */
    public function getMandatDateDebutEtebac(): ?DateTime {
        return $this->mandatDateDebutEtebac;
    }

    /**
     * Get the mandat duree etebac.
     *
     * @return int|null Returns the mandat duree etebac.
     */
    public function getMandatDureeEtebac(): ?int {
        return $this->mandatDureeEtebac;
    }

    /**
     * Get the mandat piece jointe etebac.
     *
     * @return string|null Returns the mandat piece jointe etebac.
     */
    public function getMandatPieceJointeEtebac(): ?string {
        return $this->mandatPieceJointeEtebac;
    }

    /**
     * Get the nb prelevements.
     *
     * @return int|null Returns the nb prelevements.
     */
    public function getNbPrelevements(): ?int {
        return $this->nbPrelevements;
    }

    /**
     * Get the nom int.
     *
     * @return string|null Returns the nom int.
     */
    public function getNomInt(): ?string {
        return $this->nomInt;
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
     * Get the rib.
     *
     * @return string|null Returns the rib.
     */
    public function getRib(): ?string {
        return $this->rib;
    }

    /**
     * Get the sepa.
     *
     * @return bool|null Returns the sepa.
     */
    public function getSepa(): ?bool {
        return $this->sepa;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
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
     * Set the bic.
     *
     * @param string|null $bic The bic.
     * @return Banques Returns this Banques.
     */
    public function setBic(?string $bic): Banques {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the code banque.
     *
     * @param string|null $codeBanque The code banque.
     * @return Banques Returns this Banques.
     */
    public function setCodeBanque(?string $codeBanque): Banques {
        $this->codeBanque = $codeBanque;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Banques Returns this Banques.
     */
    public function setCodeClient(?string $codeClient): Banques {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return Banques Returns this Banques.
     */
    public function setCommentaire(?string $commentaire): Banques {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the edi tdfc.
     *
     * @param bool|null $ediTdfc The edi tdfc.
     * @return Banques Returns this Banques.
     */
    public function setEdiTdfc(?bool $ediTdfc): Banques {
        $this->ediTdfc = $ediTdfc;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return Banques Returns this Banques.
     */
    public function setIban(?string $iban): Banques {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the id carte appel env.
     *
     * @param string|null $idCarteAppelEnv The id carte appel env.
     * @return Banques Returns this Banques.
     */
    public function setIdCarteAppelEnv(?string $idCarteAppelEnv): Banques {
        $this->idCarteAppelEnv = $idCarteAppelEnv;
        return $this;
    }

    /**
     * Set the id carte appel env2.
     *
     * @param string|null $idCarteAppelEnv2 The id carte appel env2.
     * @return Banques Returns this Banques.
     */
    public function setIdCarteAppelEnv2(?string $idCarteAppelEnv2): Banques {
        $this->idCarteAppelEnv2 = $idCarteAppelEnv2;
        return $this;
    }

    /**
     * Set the id carte appel env3.
     *
     * @param string|null $idCarteAppelEnv3 The id carte appel env3.
     * @return Banques Returns this Banques.
     */
    public function setIdCarteAppelEnv3(?string $idCarteAppelEnv3): Banques {
        $this->idCarteAppelEnv3 = $idCarteAppelEnv3;
        return $this;
    }

    /**
     * Set the id carte appel rec.
     *
     * @param string|null $idCarteAppelRec The id carte appel rec.
     * @return Banques Returns this Banques.
     */
    public function setIdCarteAppelRec(?string $idCarteAppelRec): Banques {
        $this->idCarteAppelRec = $idCarteAppelRec;
        return $this;
    }

    /**
     * Set the is banque fact.
     *
     * @param bool|null $isBanqueFact The is banque fact.
     * @return Banques Returns this Banques.
     */
    public function setIsBanqueFact(?bool $isBanqueFact): Banques {
        $this->isBanqueFact = $isBanqueFact;
        return $this;
    }

    /**
     * Set the mandat date debut etebac.
     *
     * @param DateTime|null $mandatDateDebutEtebac The mandat date debut etebac.
     * @return Banques Returns this Banques.
     */
    public function setMandatDateDebutEtebac(?DateTime $mandatDateDebutEtebac): Banques {
        $this->mandatDateDebutEtebac = $mandatDateDebutEtebac;
        return $this;
    }

    /**
     * Set the mandat duree etebac.
     *
     * @param int|null $mandatDureeEtebac The mandat duree etebac.
     * @return Banques Returns this Banques.
     */
    public function setMandatDureeEtebac(?int $mandatDureeEtebac): Banques {
        $this->mandatDureeEtebac = $mandatDureeEtebac;
        return $this;
    }

    /**
     * Set the mandat piece jointe etebac.
     *
     * @param string|null $mandatPieceJointeEtebac The mandat piece jointe etebac.
     * @return Banques Returns this Banques.
     */
    public function setMandatPieceJointeEtebac(?string $mandatPieceJointeEtebac): Banques {
        $this->mandatPieceJointeEtebac = $mandatPieceJointeEtebac;
        return $this;
    }

    /**
     * Set the nb prelevements.
     *
     * @param int|null $nbPrelevements The nb prelevements.
     * @return Banques Returns this Banques.
     */
    public function setNbPrelevements(?int $nbPrelevements): Banques {
        $this->nbPrelevements = $nbPrelevements;
        return $this;
    }

    /**
     * Set the nom int.
     *
     * @param string|null $nomInt The nom int.
     * @return Banques Returns this Banques.
     */
    public function setNomInt(?string $nomInt): Banques {
        $this->nomInt = $nomInt;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return Banques Returns this Banques.
     */
    public function setNumero(?int $numero): Banques {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Banques Returns this Banques.
     */
    public function setRib(?string $rib): Banques {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the sepa.
     *
     * @param bool|null $sepa The sepa.
     * @return Banques Returns this Banques.
     */
    public function setSepa(?bool $sepa): Banques {
        $this->sepa = $sepa;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Banques Returns this Banques.
     */
    public function setType(?string $type): Banques {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return Banques Returns this Banques.
     */
    public function setUniqId(?string $uniqId): Banques {
        $this->uniqId = $uniqId;
        return $this;
    }
}
