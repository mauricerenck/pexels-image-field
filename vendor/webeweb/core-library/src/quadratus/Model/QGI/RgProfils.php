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
 * Rg profils.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class RgProfils {

    /**
     * Fichiers move.
     *
     * @var string|null
     */
    private $fichiersMove;

    /**
     * Fichiers publier web.
     *
     * @var string|null
     */
    private $fichiersPublierWeb;

    /**
     * Niveau maxi.
     *
     * @var string|null
     */
    private $niveauMaxi;

    /**
     * Niveau supplementairelibelle.
     *
     * @var bool|null
     */
    private $niveauSupplementairelibelle;

    /**
     * Path.
     *
     * @var string|null
     */
    private $path;

    /**
     * Path format.
     *
     * @var string|null
     */
    private $pathFormat;

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
     * Get the fichiers move.
     *
     * @return string|null Returns the fichiers move.
     */
    public function getFichiersMove(): ?string {
        return $this->fichiersMove;
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
     * Get the niveau maxi.
     *
     * @return string|null Returns the niveau maxi.
     */
    public function getNiveauMaxi(): ?string {
        return $this->niveauMaxi;
    }

    /**
     * Get the niveau supplementairelibelle.
     *
     * @return bool|null Returns the niveau supplementairelibelle.
     */
    public function getNiveauSupplementairelibelle(): ?bool {
        return $this->niveauSupplementairelibelle;
    }

    /**
     * Get the path.
     *
     * @return string|null Returns the path.
     */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Get the path format.
     *
     * @return string|null Returns the path format.
     */
    public function getPathFormat(): ?string {
        return $this->pathFormat;
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
     * Set the fichiers move.
     *
     * @param string|null $fichiersMove The fichiers move.
     * @return RgProfils Returns this Rg profils.
     */
    public function setFichiersMove(?string $fichiersMove): RgProfils {
        $this->fichiersMove = $fichiersMove;
        return $this;
    }

    /**
     * Set the fichiers publier web.
     *
     * @param string|null $fichiersPublierWeb The fichiers publier web.
     * @return RgProfils Returns this Rg profils.
     */
    public function setFichiersPublierWeb(?string $fichiersPublierWeb): RgProfils {
        $this->fichiersPublierWeb = $fichiersPublierWeb;
        return $this;
    }

    /**
     * Set the niveau maxi.
     *
     * @param string|null $niveauMaxi The niveau maxi.
     * @return RgProfils Returns this Rg profils.
     */
    public function setNiveauMaxi(?string $niveauMaxi): RgProfils {
        $this->niveauMaxi = $niveauMaxi;
        return $this;
    }

    /**
     * Set the niveau supplementairelibelle.
     *
     * @param bool|null $niveauSupplementairelibelle The niveau supplementairelibelle.
     * @return RgProfils Returns this Rg profils.
     */
    public function setNiveauSupplementairelibelle(?bool $niveauSupplementairelibelle): RgProfils {
        $this->niveauSupplementairelibelle = $niveauSupplementairelibelle;
        return $this;
    }

    /**
     * Set the path.
     *
     * @param string|null $path The path.
     * @return RgProfils Returns this Rg profils.
     */
    public function setPath(?string $path): RgProfils {
        $this->path = $path;
        return $this;
    }

    /**
     * Set the path format.
     *
     * @param string|null $pathFormat The path format.
     * @return RgProfils Returns this Rg profils.
     */
    public function setPathFormat(?string $pathFormat): RgProfils {
        $this->pathFormat = $pathFormat;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return RgProfils Returns this Rg profils.
     */
    public function setUniqId(?string $uniqId): RgProfils {
        $this->uniqId = $uniqId;
        return $this;
    }
}
