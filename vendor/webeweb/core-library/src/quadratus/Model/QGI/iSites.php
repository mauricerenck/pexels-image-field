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
 * i sites.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class iSites {

    /**
     * Adresse ip.
     *
     * @var string|null
     */
    private $adresseIp;

    /**
     * Nom site.
     *
     * @var string|null
     */
    private $nomSite;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the adresse ip.
     *
     * @return string|null Returns the adresse ip.
     */
    public function getAdresseIp(): ?string {
        return $this->adresseIp;
    }

    /**
     * Get the nom site.
     *
     * @return string|null Returns the nom site.
     */
    public function getNomSite(): ?string {
        return $this->nomSite;
    }

    /**
     * Set the adresse ip.
     *
     * @param string|null $adresseIp The adresse ip.
     * @return iSites Returns this i sites.
     */
    public function setAdresseIp(?string $adresseIp): iSites {
        $this->adresseIp = $adresseIp;
        return $this;
    }

    /**
     * Set the nom site.
     *
     * @param string|null $nomSite The nom site.
     * @return iSites Returns this i sites.
     */
    public function setNomSite(?string $nomSite): iSites {
        $this->nomSite = $nomSite;
        return $this;
    }
}
