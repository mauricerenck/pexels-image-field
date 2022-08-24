<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

/**
 * Dadsu annuelle.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DadsuAnnuelle {

    /**
     * Nom fichier dadsu.
     *
     * @var string|null
     */
    private $nomFichierDadsu;

    /**
     * Tds annee.
     *
     * @var int|null
     */
    private $tdsAnnee;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the nom fichier dadsu.
     *
     * @return string|null Returns the nom fichier dadsu.
     */
    public function getNomFichierDadsu(): ?string {
        return $this->nomFichierDadsu;
    }

    /**
     * Get the tds annee.
     *
     * @return int|null Returns the tds annee.
     */
    public function getTdsAnnee(): ?int {
        return $this->tdsAnnee;
    }

    /**
     * Set the nom fichier dadsu.
     *
     * @param string|null $nomFichierDadsu The nom fichier dadsu.
     * @return DadsuAnnuelle Returns this Dadsu annuelle.
     */
    public function setNomFichierDadsu(?string $nomFichierDadsu): DadsuAnnuelle {
        $this->nomFichierDadsu = $nomFichierDadsu;
        return $this;
    }

    /**
     * Set the tds annee.
     *
     * @param int|null $tdsAnnee The tds annee.
     * @return DadsuAnnuelle Returns this Dadsu annuelle.
     */
    public function setTdsAnnee(?int $tdsAnnee): DadsuAnnuelle {
        $this->tdsAnnee = $tdsAnnee;
        return $this;
    }
}
