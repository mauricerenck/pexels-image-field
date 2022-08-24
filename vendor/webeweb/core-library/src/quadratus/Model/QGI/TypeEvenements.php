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

/**
 * Type evenements.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class TypeEvenements {

    /**
     * Avec etat.
     *
     * @var bool|null
     */
    private $avecEtat;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Etat couleur1.
     *
     * @var int|null
     */
    private $etatCouleur1;

    /**
     * Etat couleur2.
     *
     * @var int|null
     */
    private $etatCouleur2;

    /**
     * Etat couleur3.
     *
     * @var int|null
     */
    private $etatCouleur3;

    /**
     * Etat priorite1.
     *
     * @var string|null
     */
    private $etatPriorite1;

    /**
     * Etat priorite2.
     *
     * @var string|null
     */
    private $etatPriorite2;

    /**
     * Etat priorite3.
     *
     * @var string|null
     */
    private $etatPriorite3;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Libelle1.
     *
     * @var string|null
     */
    private $libelle1;

    /**
     * Libelle2.
     *
     * @var string|null
     */
    private $libelle2;

    /**
     * Libelle3.
     *
     * @var string|null
     */
    private $libelle3;

    /**
     * Libelle etat.
     *
     * @var string|null
     */
    private $libelleEtat;

    /**
     * Pos flag.
     *
     * @var string|null
     */
    private $posFlag;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the avec etat.
     *
     * @return bool|null Returns the avec etat.
     */
    public function getAvecEtat(): ?bool {
        return $this->avecEtat;
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
     * Get the etat couleur1.
     *
     * @return int|null Returns the etat couleur1.
     */
    public function getEtatCouleur1(): ?int {
        return $this->etatCouleur1;
    }

    /**
     * Get the etat couleur2.
     *
     * @return int|null Returns the etat couleur2.
     */
    public function getEtatCouleur2(): ?int {
        return $this->etatCouleur2;
    }

    /**
     * Get the etat couleur3.
     *
     * @return int|null Returns the etat couleur3.
     */
    public function getEtatCouleur3(): ?int {
        return $this->etatCouleur3;
    }

    /**
     * Get the etat priorite1.
     *
     * @return string|null Returns the etat priorite1.
     */
    public function getEtatPriorite1(): ?string {
        return $this->etatPriorite1;
    }

    /**
     * Get the etat priorite2.
     *
     * @return string|null Returns the etat priorite2.
     */
    public function getEtatPriorite2(): ?string {
        return $this->etatPriorite2;
    }

    /**
     * Get the etat priorite3.
     *
     * @return string|null Returns the etat priorite3.
     */
    public function getEtatPriorite3(): ?string {
        return $this->etatPriorite3;
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
     * Get the libelle1.
     *
     * @return string|null Returns the libelle1.
     */
    public function getLibelle1(): ?string {
        return $this->libelle1;
    }

    /**
     * Get the libelle2.
     *
     * @return string|null Returns the libelle2.
     */
    public function getLibelle2(): ?string {
        return $this->libelle2;
    }

    /**
     * Get the libelle3.
     *
     * @return string|null Returns the libelle3.
     */
    public function getLibelle3(): ?string {
        return $this->libelle3;
    }

    /**
     * Get the libelle etat.
     *
     * @return string|null Returns the libelle etat.
     */
    public function getLibelleEtat(): ?string {
        return $this->libelleEtat;
    }

    /**
     * Get the pos flag.
     *
     * @return string|null Returns the pos flag.
     */
    public function getPosFlag(): ?string {
        return $this->posFlag;
    }

    /**
     * Set the avec etat.
     *
     * @param bool|null $avecEtat The avec etat.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setAvecEtat(?bool $avecEtat): TypeEvenements {
        $this->avecEtat = $avecEtat;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setCode(?string $code): TypeEvenements {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the etat couleur1.
     *
     * @param int|null $etatCouleur1 The etat couleur1.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setEtatCouleur1(?int $etatCouleur1): TypeEvenements {
        $this->etatCouleur1 = $etatCouleur1;
        return $this;
    }

    /**
     * Set the etat couleur2.
     *
     * @param int|null $etatCouleur2 The etat couleur2.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setEtatCouleur2(?int $etatCouleur2): TypeEvenements {
        $this->etatCouleur2 = $etatCouleur2;
        return $this;
    }

    /**
     * Set the etat couleur3.
     *
     * @param int|null $etatCouleur3 The etat couleur3.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setEtatCouleur3(?int $etatCouleur3): TypeEvenements {
        $this->etatCouleur3 = $etatCouleur3;
        return $this;
    }

    /**
     * Set the etat priorite1.
     *
     * @param string|null $etatPriorite1 The etat priorite1.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setEtatPriorite1(?string $etatPriorite1): TypeEvenements {
        $this->etatPriorite1 = $etatPriorite1;
        return $this;
    }

    /**
     * Set the etat priorite2.
     *
     * @param string|null $etatPriorite2 The etat priorite2.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setEtatPriorite2(?string $etatPriorite2): TypeEvenements {
        $this->etatPriorite2 = $etatPriorite2;
        return $this;
    }

    /**
     * Set the etat priorite3.
     *
     * @param string|null $etatPriorite3 The etat priorite3.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setEtatPriorite3(?string $etatPriorite3): TypeEvenements {
        $this->etatPriorite3 = $etatPriorite3;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setLibelle(?string $libelle): TypeEvenements {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle1.
     *
     * @param string|null $libelle1 The libelle1.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setLibelle1(?string $libelle1): TypeEvenements {
        $this->libelle1 = $libelle1;
        return $this;
    }

    /**
     * Set the libelle2.
     *
     * @param string|null $libelle2 The libelle2.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setLibelle2(?string $libelle2): TypeEvenements {
        $this->libelle2 = $libelle2;
        return $this;
    }

    /**
     * Set the libelle3.
     *
     * @param string|null $libelle3 The libelle3.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setLibelle3(?string $libelle3): TypeEvenements {
        $this->libelle3 = $libelle3;
        return $this;
    }

    /**
     * Set the libelle etat.
     *
     * @param string|null $libelleEtat The libelle etat.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setLibelleEtat(?string $libelleEtat): TypeEvenements {
        $this->libelleEtat = $libelleEtat;
        return $this;
    }

    /**
     * Set the pos flag.
     *
     * @param string|null $posFlag The pos flag.
     * @return TypeEvenements Returns this Type evenements.
     */
    public function setPosFlag(?string $posFlag): TypeEvenements {
        $this->posFlag = $posFlag;
        return $this;
    }
}
