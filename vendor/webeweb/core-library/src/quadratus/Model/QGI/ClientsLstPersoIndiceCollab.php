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
 * Clients lst perso indice collab.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ClientsLstPersoIndiceCollab {

    /**
     * Chapitre.
     *
     * @var string|null
     */
    private $chapitre;

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Indice.
     *
     * @var int|null
     */
    private $indice;

    /**
     * Origine.
     *
     * @var int|null
     */
    private $origine;

    /**
     * Ref guid.
     *
     * @var string|null
     */
    private $refGuid;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the chapitre.
     *
     * @return string|null Returns the chapitre.
     */
    public function getChapitre(): ?string {
        return $this->chapitre;
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
     * Get the indice.
     *
     * @return int|null Returns the indice.
     */
    public function getIndice(): ?int {
        return $this->indice;
    }

    /**
     * Get the origine.
     *
     * @return int|null Returns the origine.
     */
    public function getOrigine(): ?int {
        return $this->origine;
    }

    /**
     * Get the ref guid.
     *
     * @return string|null Returns the ref guid.
     */
    public function getRefGuid(): ?string {
        return $this->refGuid;
    }

    /**
     * Set the chapitre.
     *
     * @param string|null $chapitre The chapitre.
     * @return ClientsLstPersoIndiceCollab Returns this Clients lst perso indice collab.
     */
    public function setChapitre(?string $chapitre): ClientsLstPersoIndiceCollab {
        $this->chapitre = $chapitre;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return ClientsLstPersoIndiceCollab Returns this Clients lst perso indice collab.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): ClientsLstPersoIndiceCollab {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int|null $indice The indice.
     * @return ClientsLstPersoIndiceCollab Returns this Clients lst perso indice collab.
     */
    public function setIndice(?int $indice): ClientsLstPersoIndiceCollab {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the origine.
     *
     * @param int|null $origine The origine.
     * @return ClientsLstPersoIndiceCollab Returns this Clients lst perso indice collab.
     */
    public function setOrigine(?int $origine): ClientsLstPersoIndiceCollab {
        $this->origine = $origine;
        return $this;
    }

    /**
     * Set the ref guid.
     *
     * @param string|null $refGuid The ref guid.
     * @return ClientsLstPersoIndiceCollab Returns this Clients lst perso indice collab.
     */
    public function setRefGuid(?string $refGuid): ClientsLstPersoIndiceCollab {
        $this->refGuid = $refGuid;
        return $this;
    }
}
