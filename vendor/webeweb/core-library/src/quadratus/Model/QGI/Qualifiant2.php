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
 * Qualifiant2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Qualifiant2 {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code liaison.
     *
     * @var string|null
     */
    private $codeLiaison;

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Colonne.
     *
     * @var string|null
     */
    private $colonne;

    /**
     * Num lig.
     *
     * @var int|null
     */
    private $numLig;

    /**
     * Objet ref.
     *
     * @var string|null
     */
    private $objetRef;

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
     * Get the code liaison.
     *
     * @return string|null Returns the code liaison.
     */
    public function getCodeLiaison(): ?string {
        return $this->codeLiaison;
    }

    /**
     * Get the code libelle.
     *
     * @return string|null Returns the code libelle.
     */
    public function getCodeLibelle(): ?string {
        return $this->codeLibelle;
    }

    /**
     * Get the colonne.
     *
     * @return string|null Returns the colonne.
     */
    public function getColonne(): ?string {
        return $this->colonne;
    }

    /**
     * Get the num lig.
     *
     * @return int|null Returns the num lig.
     */
    public function getNumLig(): ?int {
        return $this->numLig;
    }

    /**
     * Get the objet ref.
     *
     * @return string|null Returns the objet ref.
     */
    public function getObjetRef(): ?string {
        return $this->objetRef;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Qualifiant2 Returns this Qualifiant2.
     */
    public function setCode(?string $code): Qualifiant2 {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code liaison.
     *
     * @param string|null $codeLiaison The code liaison.
     * @return Qualifiant2 Returns this Qualifiant2.
     */
    public function setCodeLiaison(?string $codeLiaison): Qualifiant2 {
        $this->codeLiaison = $codeLiaison;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return Qualifiant2 Returns this Qualifiant2.
     */
    public function setCodeLibelle(?string $codeLibelle): Qualifiant2 {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the colonne.
     *
     * @param string|null $colonne The colonne.
     * @return Qualifiant2 Returns this Qualifiant2.
     */
    public function setColonne(?string $colonne): Qualifiant2 {
        $this->colonne = $colonne;
        return $this;
    }

    /**
     * Set the num lig.
     *
     * @param int|null $numLig The num lig.
     * @return Qualifiant2 Returns this Qualifiant2.
     */
    public function setNumLig(?int $numLig): Qualifiant2 {
        $this->numLig = $numLig;
        return $this;
    }

    /**
     * Set the objet ref.
     *
     * @param string|null $objetRef The objet ref.
     * @return Qualifiant2 Returns this Qualifiant2.
     */
    public function setObjetRef(?string $objetRef): Qualifiant2 {
        $this->objetRef = $objetRef;
        return $this;
    }
}
