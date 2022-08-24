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
 * Pointage reglements tetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class PointageReglementsTetes {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code coll creation.
     *
     * @var string|null
     */
    private $codeCollCreation;

    /**
     * Code coll genere.
     *
     * @var string|null
     */
    private $codeCollGenere;

    /**
     * Code coll modif.
     *
     * @var string|null
     */
    private $codeCollModif;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date genere.
     *
     * @var DateTime|null
     */
    private $dateGenere;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Montant saisi.
     *
     * @var float|null
     */
    private $montantSaisi;

    /**
     * Num cpt payeur.
     *
     * @var string|null
     */
    private $numCptPayeur;

    /**
     * Num doss.
     *
     * @var string|null
     */
    private $numDoss;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code coll creation.
     *
     * @return string|null Returns the code coll creation.
     */
    public function getCodeCollCreation(): ?string {
        return $this->codeCollCreation;
    }

    /**
     * Get the code coll genere.
     *
     * @return string|null Returns the code coll genere.
     */
    public function getCodeCollGenere(): ?string {
        return $this->codeCollGenere;
    }

    /**
     * Get the code coll modif.
     *
     * @return string|null Returns the code coll modif.
     */
    public function getCodeCollModif(): ?string {
        return $this->codeCollModif;
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
     * Get the date genere.
     *
     * @return DateTime|null Returns the date genere.
     */
    public function getDateGenere(): ?DateTime {
        return $this->dateGenere;
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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the montant saisi.
     *
     * @return float|null Returns the montant saisi.
     */
    public function getMontantSaisi(): ?float {
        return $this->montantSaisi;
    }

    /**
     * Get the num cpt payeur.
     *
     * @return string|null Returns the num cpt payeur.
     */
    public function getNumCptPayeur(): ?string {
        return $this->numCptPayeur;
    }

    /**
     * Get the num doss.
     *
     * @return string|null Returns the num doss.
     */
    public function getNumDoss(): ?string {
        return $this->numDoss;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return PointageReglementsTetes Returns this Pointage reglements tetes.
     */
    public function setCodeClient(?string $codeClient): PointageReglementsTetes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code coll creation.
     *
     * @param string|null $codeCollCreation The code coll creation.
     * @return PointageReglementsTetes Returns this Pointage reglements tetes.
     */
    public function setCodeCollCreation(?string $codeCollCreation): PointageReglementsTetes {
        $this->codeCollCreation = $codeCollCreation;
        return $this;
    }

    /**
     * Set the code coll genere.
     *
     * @param string|null $codeCollGenere The code coll genere.
     * @return PointageReglementsTetes Returns this Pointage reglements tetes.
     */
    public function setCodeCollGenere(?string $codeCollGenere): PointageReglementsTetes {
        $this->codeCollGenere = $codeCollGenere;
        return $this;
    }

    /**
     * Set the code coll modif.
     *
     * @param string|null $codeCollModif The code coll modif.
     * @return PointageReglementsTetes Returns this Pointage reglements tetes.
     */
    public function setCodeCollModif(?string $codeCollModif): PointageReglementsTetes {
        $this->codeCollModif = $codeCollModif;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return PointageReglementsTetes Returns this Pointage reglements tetes.
     */
    public function setDateCreation(?DateTime $dateCreation): PointageReglementsTetes {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date genere.
     *
     * @param DateTime|null $dateGenere The date genere.
     * @return PointageReglementsTetes Returns this Pointage reglements tetes.
     */
    public function setDateGenere(?DateTime $dateGenere): PointageReglementsTetes {
        $this->dateGenere = $dateGenere;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return PointageReglementsTetes Returns this Pointage reglements tetes.
     */
    public function setDateModif(?DateTime $dateModif): PointageReglementsTetes {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return PointageReglementsTetes Returns this Pointage reglements tetes.
     */
    public function setLibelle(?string $libelle): PointageReglementsTetes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant saisi.
     *
     * @param float|null $montantSaisi The montant saisi.
     * @return PointageReglementsTetes Returns this Pointage reglements tetes.
     */
    public function setMontantSaisi(?float $montantSaisi): PointageReglementsTetes {
        $this->montantSaisi = $montantSaisi;
        return $this;
    }

    /**
     * Set the num cpt payeur.
     *
     * @param string|null $numCptPayeur The num cpt payeur.
     * @return PointageReglementsTetes Returns this Pointage reglements tetes.
     */
    public function setNumCptPayeur(?string $numCptPayeur): PointageReglementsTetes {
        $this->numCptPayeur = $numCptPayeur;
        return $this;
    }

    /**
     * Set the num doss.
     *
     * @param string|null $numDoss The num doss.
     * @return PointageReglementsTetes Returns this Pointage reglements tetes.
     */
    public function setNumDoss(?string $numDoss): PointageReglementsTetes {
        $this->numDoss = $numDoss;
        return $this;
    }
}
