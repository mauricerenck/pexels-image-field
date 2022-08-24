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
 * Avenants prepares.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AvenantsPrepares {

    /**
     * Chrono.
     *
     * @var string|null
     */
    private $chrono;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Continuer verif.
     *
     * @var bool|null
     */
    private $continuerVerif;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Type document.
     *
     * @var string|null
     */
    private $typeDocument;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the chrono.
     *
     * @return string|null Returns the chrono.
     */
    public function getChrono(): ?string {
        return $this->chrono;
    }

    /**
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the continuer verif.
     *
     * @return bool|null Returns the continuer verif.
     */
    public function getContinuerVerif(): ?bool {
        return $this->continuerVerif;
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
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
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
     * Get the type document.
     *
     * @return string|null Returns the type document.
     */
    public function getTypeDocument(): ?string {
        return $this->typeDocument;
    }

    /**
     * Set the chrono.
     *
     * @param string|null $chrono The chrono.
     * @return AvenantsPrepares Returns this Avenants prepares.
     */
    public function setChrono(?string $chrono): AvenantsPrepares {
        $this->chrono = $chrono;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return AvenantsPrepares Returns this Avenants prepares.
     */
    public function setCodeEmploye(?string $codeEmploye): AvenantsPrepares {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the continuer verif.
     *
     * @param bool|null $continuerVerif The continuer verif.
     * @return AvenantsPrepares Returns this Avenants prepares.
     */
    public function setContinuerVerif(?bool $continuerVerif): AvenantsPrepares {
        $this->continuerVerif = $continuerVerif;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return AvenantsPrepares Returns this Avenants prepares.
     */
    public function setNom(?string $nom): AvenantsPrepares {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return AvenantsPrepares Returns this Avenants prepares.
     */
    public function setPeriode(?DateTime $periode): AvenantsPrepares {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return AvenantsPrepares Returns this Avenants prepares.
     */
    public function setPrenom(?string $prenom): AvenantsPrepares {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the type document.
     *
     * @param string|null $typeDocument The type document.
     * @return AvenantsPrepares Returns this Avenants prepares.
     */
    public function setTypeDocument(?string $typeDocument): AvenantsPrepares {
        $this->typeDocument = $typeDocument;
        return $this;
    }
}
