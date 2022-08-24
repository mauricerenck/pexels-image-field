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
 * Mots clef etebac.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class MotsClefEtebac {

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Liste comptes.
     *
     * @var string|null
     */
    private $listeComptes;

    /**
     * Mot.
     *
     * @var string|null
     */
    private $mot;

    /**
     * Numero compte depense.
     *
     * @var string|null
     */
    private $numeroCompteDepense;

    /**
     * Numero compte recette.
     *
     * @var string|null
     */
    private $numeroCompteRecette;

    /**
     * Regle.
     *
     * @var string|null
     */
    private $regle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the liste comptes.
     *
     * @return string|null Returns the liste comptes.
     */
    public function getListeComptes(): ?string {
        return $this->listeComptes;
    }

    /**
     * Get the mot.
     *
     * @return string|null Returns the mot.
     */
    public function getMot(): ?string {
        return $this->mot;
    }

    /**
     * Get the numero compte depense.
     *
     * @return string|null Returns the numero compte depense.
     */
    public function getNumeroCompteDepense(): ?string {
        return $this->numeroCompteDepense;
    }

    /**
     * Get the numero compte recette.
     *
     * @return string|null Returns the numero compte recette.
     */
    public function getNumeroCompteRecette(): ?string {
        return $this->numeroCompteRecette;
    }

    /**
     * Get the regle.
     *
     * @return string|null Returns the regle.
     */
    public function getRegle(): ?string {
        return $this->regle;
    }

    /**
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return MotsClefEtebac Returns this Mots clef etebac.
     */
    public function setCodeJournal(?string $codeJournal): MotsClefEtebac {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return MotsClefEtebac Returns this Mots clef etebac.
     */
    public function setLibelle(?string $libelle): MotsClefEtebac {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the liste comptes.
     *
     * @param string|null $listeComptes The liste comptes.
     * @return MotsClefEtebac Returns this Mots clef etebac.
     */
    public function setListeComptes(?string $listeComptes): MotsClefEtebac {
        $this->listeComptes = $listeComptes;
        return $this;
    }

    /**
     * Set the mot.
     *
     * @param string|null $mot The mot.
     * @return MotsClefEtebac Returns this Mots clef etebac.
     */
    public function setMot(?string $mot): MotsClefEtebac {
        $this->mot = $mot;
        return $this;
    }

    /**
     * Set the numero compte depense.
     *
     * @param string|null $numeroCompteDepense The numero compte depense.
     * @return MotsClefEtebac Returns this Mots clef etebac.
     */
    public function setNumeroCompteDepense(?string $numeroCompteDepense): MotsClefEtebac {
        $this->numeroCompteDepense = $numeroCompteDepense;
        return $this;
    }

    /**
     * Set the numero compte recette.
     *
     * @param string|null $numeroCompteRecette The numero compte recette.
     * @return MotsClefEtebac Returns this Mots clef etebac.
     */
    public function setNumeroCompteRecette(?string $numeroCompteRecette): MotsClefEtebac {
        $this->numeroCompteRecette = $numeroCompteRecette;
        return $this;
    }

    /**
     * Set the regle.
     *
     * @param string|null $regle The regle.
     * @return MotsClefEtebac Returns this Mots clef etebac.
     */
    public function setRegle(?string $regle): MotsClefEtebac {
        $this->regle = $regle;
        return $this;
    }
}
