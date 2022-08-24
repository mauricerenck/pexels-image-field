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
 * Clients selection.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ClientsSelection {

    /**
     * Champ.
     *
     * @var string|null
     */
    private $champ;

    /**
     * Code col.
     *
     * @var string|null
     */
    private $codeCol;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Valeur.
     *
     * @var string|null
     */
    private $valeur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the champ.
     *
     * @return string|null Returns the champ.
     */
    public function getChamp(): ?string {
        return $this->champ;
    }

    /**
     * Get the code col.
     *
     * @return string|null Returns the code col.
     */
    public function getCodeCol(): ?string {
        return $this->codeCol;
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
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Get the valeur.
     *
     * @return string|null Returns the valeur.
     */
    public function getValeur(): ?string {
        return $this->valeur;
    }

    /**
     * Set the champ.
     *
     * @param string|null $champ The champ.
     * @return ClientsSelection Returns this Clients selection.
     */
    public function setChamp(?string $champ): ClientsSelection {
        $this->champ = $champ;
        return $this;
    }

    /**
     * Set the code col.
     *
     * @param string|null $codeCol The code col.
     * @return ClientsSelection Returns this Clients selection.
     */
    public function setCodeCol(?string $codeCol): ClientsSelection {
        $this->codeCol = $codeCol;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ClientsSelection Returns this Clients selection.
     */
    public function setLibelle(?string $libelle): ClientsSelection {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return ClientsSelection Returns this Clients selection.
     */
    public function setType(?string $type): ClientsSelection {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param string|null $valeur The valeur.
     * @return ClientsSelection Returns this Clients selection.
     */
    public function setValeur(?string $valeur): ClientsSelection {
        $this->valeur = $valeur;
        return $this;
    }
}
