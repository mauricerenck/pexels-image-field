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
 * Regles publication.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ReglesPublication {

    /**
     * Chaine publication.
     *
     * @var string|null
     */
    private $chainePublication;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Ews publication.
     *
     * @var bool|null
     */
    private $ewsPublication;

    /**
     * Type publication.
     *
     * @var string|null
     */
    private $typePublication;

    /**
     * Web publication.
     *
     * @var bool|null
     */
    private $webPublication;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the chaine publication.
     *
     * @return string|null Returns the chaine publication.
     */
    public function getChainePublication(): ?string {
        return $this->chainePublication;
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the ews publication.
     *
     * @return bool|null Returns the ews publication.
     */
    public function getEwsPublication(): ?bool {
        return $this->ewsPublication;
    }

    /**
     * Get the type publication.
     *
     * @return string|null Returns the type publication.
     */
    public function getTypePublication(): ?string {
        return $this->typePublication;
    }

    /**
     * Get the web publication.
     *
     * @return bool|null Returns the web publication.
     */
    public function getWebPublication(): ?bool {
        return $this->webPublication;
    }

    /**
     * Set the chaine publication.
     *
     * @param string|null $chainePublication The chaine publication.
     * @return ReglesPublication Returns this Regles publication.
     */
    public function setChainePublication(?string $chainePublication): ReglesPublication {
        $this->chainePublication = $chainePublication;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ReglesPublication Returns this Regles publication.
     */
    public function setCodeClient(?string $codeClient): ReglesPublication {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the ews publication.
     *
     * @param bool|null $ewsPublication The ews publication.
     * @return ReglesPublication Returns this Regles publication.
     */
    public function setEwsPublication(?bool $ewsPublication): ReglesPublication {
        $this->ewsPublication = $ewsPublication;
        return $this;
    }

    /**
     * Set the type publication.
     *
     * @param string|null $typePublication The type publication.
     * @return ReglesPublication Returns this Regles publication.
     */
    public function setTypePublication(?string $typePublication): ReglesPublication {
        $this->typePublication = $typePublication;
        return $this;
    }

    /**
     * Set the web publication.
     *
     * @param bool|null $webPublication The web publication.
     * @return ReglesPublication Returns this Regles publication.
     */
    public function setWebPublication(?bool $webPublication): ReglesPublication {
        $this->webPublication = $webPublication;
        return $this;
    }
}
