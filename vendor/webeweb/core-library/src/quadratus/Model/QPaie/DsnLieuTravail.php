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

/**
 * Dsn lieu travail.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DsnLieuTravail {

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
     * Code distribution.
     *
     * @var string|null
     */
    private $codeDistribution;

    /**
     * Code insee.
     *
     * @var string|null
     */
    private $codeInsee;

    /**
     * Code naf.
     *
     * @var string|null
     */
    private $codeNaf;

    /**
     * Code pays.
     *
     * @var string|null
     */
    private $codePays;

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
     * Complement voie.
     *
     * @var string|null
     */
    private $complementVoie;

    /**
     * Id.
     *
     * @var string|null
     */
    private $id;

    /**
     * Nature juridique.
     *
     * @var string|null
     */
    private $natureJuridique;

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
     * Raison sociale.
     *
     * @var string|null
     */
    private $raisonSociale;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code distribution.
     *
     * @return string|null Returns the code distribution.
     */
    public function getCodeDistribution(): ?string {
        return $this->codeDistribution;
    }

    /**
     * Get the code insee.
     *
     * @return string|null Returns the code insee.
     */
    public function getCodeInsee(): ?string {
        return $this->codeInsee;
    }

    /**
     * Get the code naf.
     *
     * @return string|null Returns the code naf.
     */
    public function getCodeNaf(): ?string {
        return $this->codeNaf;
    }

    /**
     * Get the code pays.
     *
     * @return string|null Returns the code pays.
     */
    public function getCodePays(): ?string {
        return $this->codePays;
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
     * Get the complement voie.
     *
     * @return string|null Returns the complement voie.
     */
    public function getComplementVoie(): ?string {
        return $this->complementVoie;
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
     * Get the nature juridique.
     *
     * @return string|null Returns the nature juridique.
     */
    public function getNatureJuridique(): ?string {
        return $this->natureJuridique;
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
     * Get the raison sociale.
     *
     * @return string|null Returns the raison sociale.
     */
    public function getRaisonSociale(): ?string {
        return $this->raisonSociale;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setBtq(?string $btq): DsnLieuTravail {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): DsnLieuTravail {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the code distribution.
     *
     * @param string|null $codeDistribution The code distribution.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setCodeDistribution(?string $codeDistribution): DsnLieuTravail {
        $this->codeDistribution = $codeDistribution;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string|null $codeInsee The code insee.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setCodeInsee(?string $codeInsee): DsnLieuTravail {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code naf.
     *
     * @param string|null $codeNaf The code naf.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setCodeNaf(?string $codeNaf): DsnLieuTravail {
        $this->codeNaf = $codeNaf;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string|null $codePays The code pays.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setCodePays(?string $codePays): DsnLieuTravail {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setCodePostal(?string $codePostal): DsnLieuTravail {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setComplement(?string $complement): DsnLieuTravail {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the complement voie.
     *
     * @param string|null $complementVoie The complement voie.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setComplementVoie(?string $complementVoie): DsnLieuTravail {
        $this->complementVoie = $complementVoie;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setId(?string $id): DsnLieuTravail {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the nature juridique.
     *
     * @param string|null $natureJuridique The nature juridique.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setNatureJuridique(?string $natureJuridique): DsnLieuTravail {
        $this->natureJuridique = $natureJuridique;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setNomVoie(?string $nomVoie): DsnLieuTravail {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setNumVoie(?string $numVoie): DsnLieuTravail {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string|null $raisonSociale The raison sociale.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setRaisonSociale(?string $raisonSociale): DsnLieuTravail {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }
}
