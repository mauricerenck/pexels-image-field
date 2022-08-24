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
 * Lst diffusion tetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class LstDiffusionTetes {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Type.
     *
     * @var int|null
     */
    private $type;

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
     * @return int|null Returns the type.
     */
    public function getType(): ?int {
        return $this->type;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return LstDiffusionTetes Returns this Lst diffusion tetes.
     */
    public function setCode(?string $code): LstDiffusionTetes {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return LstDiffusionTetes Returns this Lst diffusion tetes.
     */
    public function setLibelle(?string $libelle): LstDiffusionTetes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int|null $type The type.
     * @return LstDiffusionTetes Returns this Lst diffusion tetes.
     */
    public function setType(?int $type): LstDiffusionTetes {
        $this->type = $type;
        return $this;
    }
}
