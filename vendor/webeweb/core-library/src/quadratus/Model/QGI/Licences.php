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
 * Licences.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Licences {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code client distr.
     *
     * @var string|null
     */
    private $codeClientDistr;

    /**
     * Code produit.
     *
     * @var string|null
     */
    private $codeProduit;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Cp ville.
     *
     * @var string|null
     */
    private $cpVille;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Demo.
     *
     * @var bool|null
     */
    private $demo;

    /**
     * Licence.
     *
     * @var string|null
     */
    private $licence;

    /**
     * Nom client.
     *
     * @var string|null
     */
    private $nomClient;

    /**
     * Nombre postes.
     *
     * @var int|null
     */
    private $nombrePostes;

    /**
     * Option1.
     *
     * @var string|null
     */
    private $option1;

    /**
     * Option2.
     *
     * @var string|null
     */
    private $option2;

    /**
     * Option3.
     *
     * @var string|null
     */
    private $option3;

    /**
     * Option4.
     *
     * @var string|null
     */
    private $option4;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Support.
     *
     * @var string|null
     */
    private $support;

    /**
     * Type reseau.
     *
     * @var string|null
     */
    private $typeReseau;

    /**
     * Version.
     *
     * @var string|null
     */
    private $version;

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
     * Get the code client distr.
     *
     * @return string|null Returns the code client distr.
     */
    public function getCodeClientDistr(): ?string {
        return $this->codeClientDistr;
    }

    /**
     * Get the code produit.
     *
     * @return string|null Returns the code produit.
     */
    public function getCodeProduit(): ?string {
        return $this->codeProduit;
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
     * Get the cp ville.
     *
     * @return string|null Returns the cp ville.
     */
    public function getCpVille(): ?string {
        return $this->cpVille;
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
     * Get the demo.
     *
     * @return bool|null Returns the demo.
     */
    public function getDemo(): ?bool {
        return $this->demo;
    }

    /**
     * Get the licence.
     *
     * @return string|null Returns the licence.
     */
    public function getLicence(): ?string {
        return $this->licence;
    }

    /**
     * Get the nom client.
     *
     * @return string|null Returns the nom client.
     */
    public function getNomClient(): ?string {
        return $this->nomClient;
    }

    /**
     * Get the nombre postes.
     *
     * @return int|null Returns the nombre postes.
     */
    public function getNombrePostes(): ?int {
        return $this->nombrePostes;
    }

    /**
     * Get the option1.
     *
     * @return string|null Returns the option1.
     */
    public function getOption1(): ?string {
        return $this->option1;
    }

    /**
     * Get the option2.
     *
     * @return string|null Returns the option2.
     */
    public function getOption2(): ?string {
        return $this->option2;
    }

    /**
     * Get the option3.
     *
     * @return string|null Returns the option3.
     */
    public function getOption3(): ?string {
        return $this->option3;
    }

    /**
     * Get the option4.
     *
     * @return string|null Returns the option4.
     */
    public function getOption4(): ?string {
        return $this->option4;
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
     * Get the support.
     *
     * @return string|null Returns the support.
     */
    public function getSupport(): ?string {
        return $this->support;
    }

    /**
     * Get the type reseau.
     *
     * @return string|null Returns the type reseau.
     */
    public function getTypeReseau(): ?string {
        return $this->typeReseau;
    }

    /**
     * Get the version.
     *
     * @return string|null Returns the version.
     */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Licences Returns this Licences.
     */
    public function setCodeClient(?string $codeClient): Licences {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code client distr.
     *
     * @param string|null $codeClientDistr The code client distr.
     * @return Licences Returns this Licences.
     */
    public function setCodeClientDistr(?string $codeClientDistr): Licences {
        $this->codeClientDistr = $codeClientDistr;
        return $this;
    }

    /**
     * Set the code produit.
     *
     * @param string|null $codeProduit The code produit.
     * @return Licences Returns this Licences.
     */
    public function setCodeProduit(?string $codeProduit): Licences {
        $this->codeProduit = $codeProduit;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return Licences Returns this Licences.
     */
    public function setCommentaire(?string $commentaire): Licences {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the cp ville.
     *
     * @param string|null $cpVille The cp ville.
     * @return Licences Returns this Licences.
     */
    public function setCpVille(?string $cpVille): Licences {
        $this->cpVille = $cpVille;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Licences Returns this Licences.
     */
    public function setDateCreation(?DateTime $dateCreation): Licences {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the demo.
     *
     * @param bool|null $demo The demo.
     * @return Licences Returns this Licences.
     */
    public function setDemo(?bool $demo): Licences {
        $this->demo = $demo;
        return $this;
    }

    /**
     * Set the licence.
     *
     * @param string|null $licence The licence.
     * @return Licences Returns this Licences.
     */
    public function setLicence(?string $licence): Licences {
        $this->licence = $licence;
        return $this;
    }

    /**
     * Set the nom client.
     *
     * @param string|null $nomClient The nom client.
     * @return Licences Returns this Licences.
     */
    public function setNomClient(?string $nomClient): Licences {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * Set the nombre postes.
     *
     * @param int|null $nombrePostes The nombre postes.
     * @return Licences Returns this Licences.
     */
    public function setNombrePostes(?int $nombrePostes): Licences {
        $this->nombrePostes = $nombrePostes;
        return $this;
    }

    /**
     * Set the option1.
     *
     * @param string|null $option1 The option1.
     * @return Licences Returns this Licences.
     */
    public function setOption1(?string $option1): Licences {
        $this->option1 = $option1;
        return $this;
    }

    /**
     * Set the option2.
     *
     * @param string|null $option2 The option2.
     * @return Licences Returns this Licences.
     */
    public function setOption2(?string $option2): Licences {
        $this->option2 = $option2;
        return $this;
    }

    /**
     * Set the option3.
     *
     * @param string|null $option3 The option3.
     * @return Licences Returns this Licences.
     */
    public function setOption3(?string $option3): Licences {
        $this->option3 = $option3;
        return $this;
    }

    /**
     * Set the option4.
     *
     * @param string|null $option4 The option4.
     * @return Licences Returns this Licences.
     */
    public function setOption4(?string $option4): Licences {
        $this->option4 = $option4;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return Licences Returns this Licences.
     */
    public function setPeriode(?DateTime $periode): Licences {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the support.
     *
     * @param string|null $support The support.
     * @return Licences Returns this Licences.
     */
    public function setSupport(?string $support): Licences {
        $this->support = $support;
        return $this;
    }

    /**
     * Set the type reseau.
     *
     * @param string|null $typeReseau The type reseau.
     * @return Licences Returns this Licences.
     */
    public function setTypeReseau(?string $typeReseau): Licences {
        $this->typeReseau = $typeReseau;
        return $this;
    }

    /**
     * Set the version.
     *
     * @param string|null $version The version.
     * @return Licences Returns this Licences.
     */
    public function setVersion(?string $version): Licences {
        $this->version = $version;
        return $this;
    }
}
