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
 * Clients affaires chantiers.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ClientsAffairesChantiers {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Dossier prop.
     *
     * @var string|null
     */
    private $dossierProp;

    /**
     * Num uniq.
     *
     * @var string|null
     */
    private $numUniq;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
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
     * Get the dossier prop.
     *
     * @return string|null Returns the dossier prop.
     */
    public function getDossierProp(): ?string {
        return $this->dossierProp;
    }

    /**
     * Get the num uniq.
     *
     * @return string|null Returns the num uniq.
     */
    public function getNumUniq(): ?string {
        return $this->numUniq;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return ClientsAffairesChantiers Returns this Clients affaires chantiers.
     */
    public function setCodeAffaire(?string $codeAffaire): ClientsAffairesChantiers {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return ClientsAffairesChantiers Returns this Clients affaires chantiers.
     */
    public function setCodeChantier(?string $codeChantier): ClientsAffairesChantiers {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ClientsAffairesChantiers Returns this Clients affaires chantiers.
     */
    public function setCodeClient(?string $codeClient): ClientsAffairesChantiers {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the dossier prop.
     *
     * @param string|null $dossierProp The dossier prop.
     * @return ClientsAffairesChantiers Returns this Clients affaires chantiers.
     */
    public function setDossierProp(?string $dossierProp): ClientsAffairesChantiers {
        $this->dossierProp = $dossierProp;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param string|null $numUniq The num uniq.
     * @return ClientsAffairesChantiers Returns this Clients affaires chantiers.
     */
    public function setNumUniq(?string $numUniq): ClientsAffairesChantiers {
        $this->numUniq = $numUniq;
        return $this;
    }
}
