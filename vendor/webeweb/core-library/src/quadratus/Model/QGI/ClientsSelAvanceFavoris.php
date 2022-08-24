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
 * Clients sel avance favoris.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ClientsSelAvanceFavoris {

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code liste.
     *
     * @var string|null
     */
    private $codeListe;

    /**
     * Description.
     *
     * @var string|null
     */
    private $description;

    /**
     * Ordre.
     *
     * @var int|null
     */
    private $ordre;

    /**
     * Origine.
     *
     * @var string|null
     */
    private $origine;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code liste.
     *
     * @return string|null Returns the code liste.
     */
    public function getCodeListe(): ?string {
        return $this->codeListe;
    }

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Get the ordre.
     *
     * @return int|null Returns the ordre.
     */
    public function getOrdre(): ?int {
        return $this->ordre;
    }

    /**
     * Get the origine.
     *
     * @return string|null Returns the origine.
     */
    public function getOrigine(): ?string {
        return $this->origine;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return ClientsSelAvanceFavoris Returns this Clients sel avance favoris.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): ClientsSelAvanceFavoris {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code liste.
     *
     * @param string|null $codeListe The code liste.
     * @return ClientsSelAvanceFavoris Returns this Clients sel avance favoris.
     */
    public function setCodeListe(?string $codeListe): ClientsSelAvanceFavoris {
        $this->codeListe = $codeListe;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return ClientsSelAvanceFavoris Returns this Clients sel avance favoris.
     */
    public function setDescription(?string $description): ClientsSelAvanceFavoris {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the ordre.
     *
     * @param int|null $ordre The ordre.
     * @return ClientsSelAvanceFavoris Returns this Clients sel avance favoris.
     */
    public function setOrdre(?int $ordre): ClientsSelAvanceFavoris {
        $this->ordre = $ordre;
        return $this;
    }

    /**
     * Set the origine.
     *
     * @param string|null $origine The origine.
     * @return ClientsSelAvanceFavoris Returns this Clients sel avance favoris.
     */
    public function setOrigine(?string $origine): ClientsSelAvanceFavoris {
        $this->origine = $origine;
        return $this;
    }
}
