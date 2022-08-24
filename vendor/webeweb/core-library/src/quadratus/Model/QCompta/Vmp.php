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

/**
 * Vmp.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Vmp {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Compte comm.
     *
     * @var string|null
     */
    private $compteComm;

    /**
     * Compte coupons.
     *
     * @var string|null
     */
    private $compteCoupons;

    /**
     * Compte frais.
     *
     * @var string|null
     */
    private $compteFrais;

    /**
     * Identifiant.
     *
     * @var string|null
     */
    private $identifiant;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Nb lignes mvt.
     *
     * @var int|null
     */
    private $nbLignesMvt;

    /**
     * Num compte.
     *
     * @var string|null
     */
    private $numCompte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code journal.
     *
     * @return string|null Returns the code journal.
     */
    public function getCodeJournal(): ?string {
        return $this->codeJournal;
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
     * Get the compte comm.
     *
     * @return string|null Returns the compte comm.
     */
    public function getCompteComm(): ?string {
        return $this->compteComm;
    }

    /**
     * Get the compte coupons.
     *
     * @return string|null Returns the compte coupons.
     */
    public function getCompteCoupons(): ?string {
        return $this->compteCoupons;
    }

    /**
     * Get the compte frais.
     *
     * @return string|null Returns the compte frais.
     */
    public function getCompteFrais(): ?string {
        return $this->compteFrais;
    }

    /**
     * Get the identifiant.
     *
     * @return string|null Returns the identifiant.
     */
    public function getIdentifiant(): ?string {
        return $this->identifiant;
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
     * Get the nb lignes mvt.
     *
     * @return int|null Returns the nb lignes mvt.
     */
    public function getNbLignesMvt(): ?int {
        return $this->nbLignesMvt;
    }

    /**
     * Get the num compte.
     *
     * @return string|null Returns the num compte.
     */
    public function getNumCompte(): ?string {
        return $this->numCompte;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Vmp Returns this Vmp.
     */
    public function setCode(?string $code): Vmp {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return Vmp Returns this Vmp.
     */
    public function setCodeJournal(?string $codeJournal): Vmp {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return Vmp Returns this Vmp.
     */
    public function setCommentaire(?string $commentaire): Vmp {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the compte comm.
     *
     * @param string|null $compteComm The compte comm.
     * @return Vmp Returns this Vmp.
     */
    public function setCompteComm(?string $compteComm): Vmp {
        $this->compteComm = $compteComm;
        return $this;
    }

    /**
     * Set the compte coupons.
     *
     * @param string|null $compteCoupons The compte coupons.
     * @return Vmp Returns this Vmp.
     */
    public function setCompteCoupons(?string $compteCoupons): Vmp {
        $this->compteCoupons = $compteCoupons;
        return $this;
    }

    /**
     * Set the compte frais.
     *
     * @param string|null $compteFrais The compte frais.
     * @return Vmp Returns this Vmp.
     */
    public function setCompteFrais(?string $compteFrais): Vmp {
        $this->compteFrais = $compteFrais;
        return $this;
    }

    /**
     * Set the identifiant.
     *
     * @param string|null $identifiant The identifiant.
     * @return Vmp Returns this Vmp.
     */
    public function setIdentifiant(?string $identifiant): Vmp {
        $this->identifiant = $identifiant;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Vmp Returns this Vmp.
     */
    public function setLibelle(?string $libelle): Vmp {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the nb lignes mvt.
     *
     * @param int|null $nbLignesMvt The nb lignes mvt.
     * @return Vmp Returns this Vmp.
     */
    public function setNbLignesMvt(?int $nbLignesMvt): Vmp {
        $this->nbLignesMvt = $nbLignesMvt;
        return $this;
    }

    /**
     * Set the num compte.
     *
     * @param string|null $numCompte The num compte.
     * @return Vmp Returns this Vmp.
     */
    public function setNumCompte(?string $numCompte): Vmp {
        $this->numCompte = $numCompte;
        return $this;
    }
}
