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
 * Liaisons destinataires types envois.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class LiaisonsDestinatairesTypesEnvois {

    /**
     * Code destinataire.
     *
     * @var string|null
     */
    private $codeDestinataire;

    /**
     * Code type envoi.
     *
     * @var string|null
     */
    private $codeTypeEnvoi;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code destinataire.
     *
     * @return string|null Returns the code destinataire.
     */
    public function getCodeDestinataire(): ?string {
        return $this->codeDestinataire;
    }

    /**
     * Get the code type envoi.
     *
     * @return string|null Returns the code type envoi.
     */
    public function getCodeTypeEnvoi(): ?string {
        return $this->codeTypeEnvoi;
    }

    /**
     * Set the code destinataire.
     *
     * @param string|null $codeDestinataire The code destinataire.
     * @return LiaisonsDestinatairesTypesEnvois Returns this Liaisons destinataires types envois.
     */
    public function setCodeDestinataire(?string $codeDestinataire): LiaisonsDestinatairesTypesEnvois {
        $this->codeDestinataire = $codeDestinataire;
        return $this;
    }

    /**
     * Set the code type envoi.
     *
     * @param string|null $codeTypeEnvoi The code type envoi.
     * @return LiaisonsDestinatairesTypesEnvois Returns this Liaisons destinataires types envois.
     */
    public function setCodeTypeEnvoi(?string $codeTypeEnvoi): LiaisonsDestinatairesTypesEnvois {
        $this->codeTypeEnvoi = $codeTypeEnvoi;
        return $this;
    }
}
