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
 * Clients selection suite.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ClientsSelectionSuite {

    /**
     * Coche client.
     *
     * @var bool|null
     */
    private $cocheClient;

    /**
     * Coche fournisseur.
     *
     * @var bool|null
     */
    private $cocheFournisseur;

    /**
     * Coche intervenant.
     *
     * @var bool|null
     */
    private $cocheIntervenant;

    /**
     * Coche prospect.
     *
     * @var bool|null
     */
    private $cocheProspect;

    /**
     * Coche sorti.
     *
     * @var bool|null
     */
    private $cocheSorti;

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
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the coche client.
     *
     * @return bool|null Returns the coche client.
     */
    public function getCocheClient(): ?bool {
        return $this->cocheClient;
    }

    /**
     * Get the coche fournisseur.
     *
     * @return bool|null Returns the coche fournisseur.
     */
    public function getCocheFournisseur(): ?bool {
        return $this->cocheFournisseur;
    }

    /**
     * Get the coche intervenant.
     *
     * @return bool|null Returns the coche intervenant.
     */
    public function getCocheIntervenant(): ?bool {
        return $this->cocheIntervenant;
    }

    /**
     * Get the coche prospect.
     *
     * @return bool|null Returns the coche prospect.
     */
    public function getCocheProspect(): ?bool {
        return $this->cocheProspect;
    }

    /**
     * Get the coche sorti.
     *
     * @return bool|null Returns the coche sorti.
     */
    public function getCocheSorti(): ?bool {
        return $this->cocheSorti;
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
     * Set the coche client.
     *
     * @param bool|null $cocheClient The coche client.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setCocheClient(?bool $cocheClient): ClientsSelectionSuite {
        $this->cocheClient = $cocheClient;
        return $this;
    }

    /**
     * Set the coche fournisseur.
     *
     * @param bool|null $cocheFournisseur The coche fournisseur.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setCocheFournisseur(?bool $cocheFournisseur): ClientsSelectionSuite {
        $this->cocheFournisseur = $cocheFournisseur;
        return $this;
    }

    /**
     * Set the coche intervenant.
     *
     * @param bool|null $cocheIntervenant The coche intervenant.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setCocheIntervenant(?bool $cocheIntervenant): ClientsSelectionSuite {
        $this->cocheIntervenant = $cocheIntervenant;
        return $this;
    }

    /**
     * Set the coche prospect.
     *
     * @param bool|null $cocheProspect The coche prospect.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setCocheProspect(?bool $cocheProspect): ClientsSelectionSuite {
        $this->cocheProspect = $cocheProspect;
        return $this;
    }

    /**
     * Set the coche sorti.
     *
     * @param bool|null $cocheSorti The coche sorti.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setCocheSorti(?bool $cocheSorti): ClientsSelectionSuite {
        $this->cocheSorti = $cocheSorti;
        return $this;
    }

    /**
     * Set the code col.
     *
     * @param string|null $codeCol The code col.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setCodeCol(?string $codeCol): ClientsSelectionSuite {
        $this->codeCol = $codeCol;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setLibelle(?string $libelle): ClientsSelectionSuite {
        $this->libelle = $libelle;
        return $this;
    }
}
