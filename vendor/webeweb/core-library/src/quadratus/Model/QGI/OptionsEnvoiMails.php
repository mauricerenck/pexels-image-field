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
 * Options envoi mails.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class OptionsEnvoiMails {

    /**
     * Avec entete.
     *
     * @var bool|null
     */
    private $avecEntete;

    /**
     * Avec pied.
     *
     * @var bool|null
     */
    private $avecPied;

    /**
     * Code collab.
     *
     * @var string|null
     */
    private $codeCollab;

    /**
     * Code module.
     *
     * @var string|null
     */
    private $codeModule;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the avec entete.
     *
     * @return bool|null Returns the avec entete.
     */
    public function getAvecEntete(): ?bool {
        return $this->avecEntete;
    }

    /**
     * Get the avec pied.
     *
     * @return bool|null Returns the avec pied.
     */
    public function getAvecPied(): ?bool {
        return $this->avecPied;
    }

    /**
     * Get the code collab.
     *
     * @return string|null Returns the code collab.
     */
    public function getCodeCollab(): ?string {
        return $this->codeCollab;
    }

    /**
     * Get the code module.
     *
     * @return string|null Returns the code module.
     */
    public function getCodeModule(): ?string {
        return $this->codeModule;
    }

    /**
     * Set the avec entete.
     *
     * @param bool|null $avecEntete The avec entete.
     * @return OptionsEnvoiMails Returns this Options envoi mails.
     */
    public function setAvecEntete(?bool $avecEntete): OptionsEnvoiMails {
        $this->avecEntete = $avecEntete;
        return $this;
    }

    /**
     * Set the avec pied.
     *
     * @param bool|null $avecPied The avec pied.
     * @return OptionsEnvoiMails Returns this Options envoi mails.
     */
    public function setAvecPied(?bool $avecPied): OptionsEnvoiMails {
        $this->avecPied = $avecPied;
        return $this;
    }

    /**
     * Set the code collab.
     *
     * @param string|null $codeCollab The code collab.
     * @return OptionsEnvoiMails Returns this Options envoi mails.
     */
    public function setCodeCollab(?string $codeCollab): OptionsEnvoiMails {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the code module.
     *
     * @param string|null $codeModule The code module.
     * @return OptionsEnvoiMails Returns this Options envoi mails.
     */
    public function setCodeModule(?string $codeModule): OptionsEnvoiMails {
        $this->codeModule = $codeModule;
        return $this;
    }
}
