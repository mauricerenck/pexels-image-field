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
 * Rg correspondances.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class RgCorrespondances {

    /**
     * Fichiers publier web.
     *
     * @var string|null
     */
    private $fichiersPublierWeb;

    /**
     * Ignorer.
     *
     * @var string|null
     */
    private $ignorer;

    /**
     * Niveau.
     *
     * @var int|null
     */
    private $niveau;

    /**
     * Type donnees.
     *
     * @var string|null
     */
    private $typeDonnees;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Valeur.
     *
     * @var string|null
     */
    private $valeur;

    /**
     * Valeur origine.
     *
     * @var string|null
     */
    private $valeurOrigine;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the fichiers publier web.
     *
     * @return string|null Returns the fichiers publier web.
     */
    public function getFichiersPublierWeb(): ?string {
        return $this->fichiersPublierWeb;
    }

    /**
     * Get the ignorer.
     *
     * @return string|null Returns the ignorer.
     */
    public function getIgnorer(): ?string {
        return $this->ignorer;
    }

    /**
     * Get the niveau.
     *
     * @return int|null Returns the niveau.
     */
    public function getNiveau(): ?int {
        return $this->niveau;
    }

    /**
     * Get the type donnees.
     *
     * @return string|null Returns the type donnees.
     */
    public function getTypeDonnees(): ?string {
        return $this->typeDonnees;
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
     * Get the valeur.
     *
     * @return string|null Returns the valeur.
     */
    public function getValeur(): ?string {
        return $this->valeur;
    }

    /**
     * Get the valeur origine.
     *
     * @return string|null Returns the valeur origine.
     */
    public function getValeurOrigine(): ?string {
        return $this->valeurOrigine;
    }

    /**
     * Set the fichiers publier web.
     *
     * @param string|null $fichiersPublierWeb The fichiers publier web.
     * @return RgCorrespondances Returns this Rg correspondances.
     */
    public function setFichiersPublierWeb(?string $fichiersPublierWeb): RgCorrespondances {
        $this->fichiersPublierWeb = $fichiersPublierWeb;
        return $this;
    }

    /**
     * Set the ignorer.
     *
     * @param string|null $ignorer The ignorer.
     * @return RgCorrespondances Returns this Rg correspondances.
     */
    public function setIgnorer(?string $ignorer): RgCorrespondances {
        $this->ignorer = $ignorer;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int|null $niveau The niveau.
     * @return RgCorrespondances Returns this Rg correspondances.
     */
    public function setNiveau(?int $niveau): RgCorrespondances {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the type donnees.
     *
     * @param string|null $typeDonnees The type donnees.
     * @return RgCorrespondances Returns this Rg correspondances.
     */
    public function setTypeDonnees(?string $typeDonnees): RgCorrespondances {
        $this->typeDonnees = $typeDonnees;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return RgCorrespondances Returns this Rg correspondances.
     */
    public function setUniqId(?string $uniqId): RgCorrespondances {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param string|null $valeur The valeur.
     * @return RgCorrespondances Returns this Rg correspondances.
     */
    public function setValeur(?string $valeur): RgCorrespondances {
        $this->valeur = $valeur;
        return $this;
    }

    /**
     * Set the valeur origine.
     *
     * @param string|null $valeurOrigine The valeur origine.
     * @return RgCorrespondances Returns this Rg correspondances.
     */
    public function setValeurOrigine(?string $valeurOrigine): RgCorrespondances {
        $this->valeurOrigine = $valeurOrigine;
        return $this;
    }
}
