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
 * Nomenclatures.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Nomenclatures {

    /**
     * Code1.
     *
     * @var string|null
     */
    private $code1;

    /**
     * Code2.
     *
     * @var string|null
     */
    private $code2;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Commentaire2.
     *
     * @var string|null
     */
    private $commentaire2;

    /**
     * Date1.
     *
     * @var DateTime|null
     */
    private $date1;

    /**
     * Date2.
     *
     * @var DateTime|null
     */
    private $date2;

    /**
     * Double1.
     *
     * @var float|null
     */
    private $double1;

    /**
     * Double2.
     *
     * @var float|null
     */
    private $double2;

    /**
     * Numero.
     *
     * @var int|null
     */
    private $numero;

    /**
     * Texte1.
     *
     * @var string|null
     */
    private $texte1;

    /**
     * Texte2.
     *
     * @var string|null
     */
    private $texte2;

    /**
     * Texte3.
     *
     * @var string|null
     */
    private $texte3;

    /**
     * Texte4.
     *
     * @var string|null
     */
    private $texte4;

    /**
     * Texte5.
     *
     * @var string|null
     */
    private $texte5;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code1.
     *
     * @return string|null Returns the code1.
     */
    public function getCode1(): ?string {
        return $this->code1;
    }

    /**
     * Get the code2.
     *
     * @return string|null Returns the code2.
     */
    public function getCode2(): ?string {
        return $this->code2;
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
     * Get the commentaire2.
     *
     * @return string|null Returns the commentaire2.
     */
    public function getCommentaire2(): ?string {
        return $this->commentaire2;
    }

    /**
     * Get the date1.
     *
     * @return DateTime|null Returns the date1.
     */
    public function getDate1(): ?DateTime {
        return $this->date1;
    }

    /**
     * Get the date2.
     *
     * @return DateTime|null Returns the date2.
     */
    public function getDate2(): ?DateTime {
        return $this->date2;
    }

    /**
     * Get the double1.
     *
     * @return float|null Returns the double1.
     */
    public function getDouble1(): ?float {
        return $this->double1;
    }

    /**
     * Get the double2.
     *
     * @return float|null Returns the double2.
     */
    public function getDouble2(): ?float {
        return $this->double2;
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
     * Get the texte1.
     *
     * @return string|null Returns the texte1.
     */
    public function getTexte1(): ?string {
        return $this->texte1;
    }

    /**
     * Get the texte2.
     *
     * @return string|null Returns the texte2.
     */
    public function getTexte2(): ?string {
        return $this->texte2;
    }

    /**
     * Get the texte3.
     *
     * @return string|null Returns the texte3.
     */
    public function getTexte3(): ?string {
        return $this->texte3;
    }

    /**
     * Get the texte4.
     *
     * @return string|null Returns the texte4.
     */
    public function getTexte4(): ?string {
        return $this->texte4;
    }

    /**
     * Get the texte5.
     *
     * @return string|null Returns the texte5.
     */
    public function getTexte5(): ?string {
        return $this->texte5;
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
     * Set the code1.
     *
     * @param string|null $code1 The code1.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setCode1(?string $code1): Nomenclatures {
        $this->code1 = $code1;
        return $this;
    }

    /**
     * Set the code2.
     *
     * @param string|null $code2 The code2.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setCode2(?string $code2): Nomenclatures {
        $this->code2 = $code2;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setCommentaire(?string $commentaire): Nomenclatures {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the commentaire2.
     *
     * @param string|null $commentaire2 The commentaire2.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setCommentaire2(?string $commentaire2): Nomenclatures {
        $this->commentaire2 = $commentaire2;
        return $this;
    }

    /**
     * Set the date1.
     *
     * @param DateTime|null $date1 The date1.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setDate1(?DateTime $date1): Nomenclatures {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * Set the date2.
     *
     * @param DateTime|null $date2 The date2.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setDate2(?DateTime $date2): Nomenclatures {
        $this->date2 = $date2;
        return $this;
    }

    /**
     * Set the double1.
     *
     * @param float|null $double1 The double1.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setDouble1(?float $double1): Nomenclatures {
        $this->double1 = $double1;
        return $this;
    }

    /**
     * Set the double2.
     *
     * @param float|null $double2 The double2.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setDouble2(?float $double2): Nomenclatures {
        $this->double2 = $double2;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setNumero(?int $numero): Nomenclatures {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the texte1.
     *
     * @param string|null $texte1 The texte1.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setTexte1(?string $texte1): Nomenclatures {
        $this->texte1 = $texte1;
        return $this;
    }

    /**
     * Set the texte2.
     *
     * @param string|null $texte2 The texte2.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setTexte2(?string $texte2): Nomenclatures {
        $this->texte2 = $texte2;
        return $this;
    }

    /**
     * Set the texte3.
     *
     * @param string|null $texte3 The texte3.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setTexte3(?string $texte3): Nomenclatures {
        $this->texte3 = $texte3;
        return $this;
    }

    /**
     * Set the texte4.
     *
     * @param string|null $texte4 The texte4.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setTexte4(?string $texte4): Nomenclatures {
        $this->texte4 = $texte4;
        return $this;
    }

    /**
     * Set the texte5.
     *
     * @param string|null $texte5 The texte5.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setTexte5(?string $texte5): Nomenclatures {
        $this->texte5 = $texte5;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Nomenclatures Returns this Nomenclatures.
     */
    public function setType(?string $type): Nomenclatures {
        $this->type = $type;
        return $this;
    }
}
