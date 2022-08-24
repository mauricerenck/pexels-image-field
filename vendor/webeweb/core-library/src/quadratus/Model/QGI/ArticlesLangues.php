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
 * Articles langues.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ArticlesLangues {

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code langue.
     *
     * @var string|null
     */
    private $codeLangue;

    /**
     * Designation apres.
     *
     * @var string|null
     */
    private $designationApres;

    /**
     * Designation avant.
     *
     * @var string|null
     */
    private $designationAvant;

    /**
     * Intitule1.
     *
     * @var string|null
     */
    private $intitule1;

    /**
     * Intitule2.
     *
     * @var string|null
     */
    private $intitule2;

    /**
     * Intitule3.
     *
     * @var string|null
     */
    private $intitule3;

    /**
     * Intitule4.
     *
     * @var string|null
     */
    private $intitule4;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code article.
     *
     * @return string|null Returns the code article.
     */
    public function getCodeArticle(): ?string {
        return $this->codeArticle;
    }

    /**
     * Get the code langue.
     *
     * @return string|null Returns the code langue.
     */
    public function getCodeLangue(): ?string {
        return $this->codeLangue;
    }

    /**
     * Get the designation apres.
     *
     * @return string|null Returns the designation apres.
     */
    public function getDesignationApres(): ?string {
        return $this->designationApres;
    }

    /**
     * Get the designation avant.
     *
     * @return string|null Returns the designation avant.
     */
    public function getDesignationAvant(): ?string {
        return $this->designationAvant;
    }

    /**
     * Get the intitule1.
     *
     * @return string|null Returns the intitule1.
     */
    public function getIntitule1(): ?string {
        return $this->intitule1;
    }

    /**
     * Get the intitule2.
     *
     * @return string|null Returns the intitule2.
     */
    public function getIntitule2(): ?string {
        return $this->intitule2;
    }

    /**
     * Get the intitule3.
     *
     * @return string|null Returns the intitule3.
     */
    public function getIntitule3(): ?string {
        return $this->intitule3;
    }

    /**
     * Get the intitule4.
     *
     * @return string|null Returns the intitule4.
     */
    public function getIntitule4(): ?string {
        return $this->intitule4;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return ArticlesLangues Returns this Articles langues.
     */
    public function setCodeArticle(?string $codeArticle): ArticlesLangues {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code langue.
     *
     * @param string|null $codeLangue The code langue.
     * @return ArticlesLangues Returns this Articles langues.
     */
    public function setCodeLangue(?string $codeLangue): ArticlesLangues {
        $this->codeLangue = $codeLangue;
        return $this;
    }

    /**
     * Set the designation apres.
     *
     * @param string|null $designationApres The designation apres.
     * @return ArticlesLangues Returns this Articles langues.
     */
    public function setDesignationApres(?string $designationApres): ArticlesLangues {
        $this->designationApres = $designationApres;
        return $this;
    }

    /**
     * Set the designation avant.
     *
     * @param string|null $designationAvant The designation avant.
     * @return ArticlesLangues Returns this Articles langues.
     */
    public function setDesignationAvant(?string $designationAvant): ArticlesLangues {
        $this->designationAvant = $designationAvant;
        return $this;
    }

    /**
     * Set the intitule1.
     *
     * @param string|null $intitule1 The intitule1.
     * @return ArticlesLangues Returns this Articles langues.
     */
    public function setIntitule1(?string $intitule1): ArticlesLangues {
        $this->intitule1 = $intitule1;
        return $this;
    }

    /**
     * Set the intitule2.
     *
     * @param string|null $intitule2 The intitule2.
     * @return ArticlesLangues Returns this Articles langues.
     */
    public function setIntitule2(?string $intitule2): ArticlesLangues {
        $this->intitule2 = $intitule2;
        return $this;
    }

    /**
     * Set the intitule3.
     *
     * @param string|null $intitule3 The intitule3.
     * @return ArticlesLangues Returns this Articles langues.
     */
    public function setIntitule3(?string $intitule3): ArticlesLangues {
        $this->intitule3 = $intitule3;
        return $this;
    }

    /**
     * Set the intitule4.
     *
     * @param string|null $intitule4 The intitule4.
     * @return ArticlesLangues Returns this Articles langues.
     */
    public function setIntitule4(?string $intitule4): ArticlesLangues {
        $this->intitule4 = $intitule4;
        return $this;
    }
}
