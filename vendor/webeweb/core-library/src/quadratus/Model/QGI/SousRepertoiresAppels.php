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
 * Sous repertoires appels.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class SousRepertoiresAppels {

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Niveau ligne.
     *
     * @var int|null
     */
    private $niveauLigne;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Proprietes.
     *
     * @var string|null
     */
    private $proprietes;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the niveau ligne.
     *
     * @return int|null Returns the niveau ligne.
     */
    public function getNiveauLigne(): ?int {
        return $this->niveauLigne;
    }

    /**
     * Get the numero ligne.
     *
     * @return int|null Returns the numero ligne.
     */
    public function getNumeroLigne(): ?int {
        return $this->numeroLigne;
    }

    /**
     * Get the proprietes.
     *
     * @return string|null Returns the proprietes.
     */
    public function getProprietes(): ?string {
        return $this->proprietes;
    }

    /**
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return SousRepertoiresAppels Returns this Sous repertoires appels.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): SousRepertoiresAppels {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return SousRepertoiresAppels Returns this Sous repertoires appels.
     */
    public function setLibelle(?string $libelle): SousRepertoiresAppels {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the niveau ligne.
     *
     * @param int|null $niveauLigne The niveau ligne.
     * @return SousRepertoiresAppels Returns this Sous repertoires appels.
     */
    public function setNiveauLigne(?int $niveauLigne): SousRepertoiresAppels {
        $this->niveauLigne = $niveauLigne;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return SousRepertoiresAppels Returns this Sous repertoires appels.
     */
    public function setNumeroLigne(?int $numeroLigne): SousRepertoiresAppels {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the proprietes.
     *
     * @param string|null $proprietes The proprietes.
     * @return SousRepertoiresAppels Returns this Sous repertoires appels.
     */
    public function setProprietes(?string $proprietes): SousRepertoiresAppels {
        $this->proprietes = $proprietes;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return SousRepertoiresAppels Returns this Sous repertoires appels.
     */
    public function setUniqId(?string $uniqId): SousRepertoiresAppels {
        $this->uniqId = $uniqId;
        return $this;
    }
}
