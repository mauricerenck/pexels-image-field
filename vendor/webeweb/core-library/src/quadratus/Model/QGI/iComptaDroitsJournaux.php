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
 * i compta droits journaux.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class iComptaDroitsJournaux {

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Code user.
     *
     * @var string|null
     */
    private $codeUser;

    /**
     * Flag.
     *
     * @var string|null
     */
    private $flag;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * No doss cpta.
     *
     * @var string|null
     */
    private $noDossCpta;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code journal.
     *
     * @return string|null Returns the code journal.
     */
    public function getCodeJournal(): ?string {
        return $this->codeJournal;
    }

    /**
     * Get the code user.
     *
     * @return string|null Returns the code user.
     */
    public function getCodeUser(): ?string {
        return $this->codeUser;
    }

    /**
     * Get the flag.
     *
     * @return string|null Returns the flag.
     */
    public function getFlag(): ?string {
        return $this->flag;
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
     * Get the no doss cpta.
     *
     * @return string|null Returns the no doss cpta.
     */
    public function getNoDossCpta(): ?string {
        return $this->noDossCpta;
    }

    /**
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return iComptaDroitsJournaux Returns this i compta droits journaux.
     */
    public function setCodeJournal(?string $codeJournal): iComptaDroitsJournaux {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string|null $codeUser The code user.
     * @return iComptaDroitsJournaux Returns this i compta droits journaux.
     */
    public function setCodeUser(?string $codeUser): iComptaDroitsJournaux {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the flag.
     *
     * @param string|null $flag The flag.
     * @return iComptaDroitsJournaux Returns this i compta droits journaux.
     */
    public function setFlag(?string $flag): iComptaDroitsJournaux {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return iComptaDroitsJournaux Returns this i compta droits journaux.
     */
    public function setLibelle(?string $libelle): iComptaDroitsJournaux {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the no doss cpta.
     *
     * @param string|null $noDossCpta The no doss cpta.
     * @return iComptaDroitsJournaux Returns this i compta droits journaux.
     */
    public function setNoDossCpta(?string $noDossCpta): iComptaDroitsJournaux {
        $this->noDossCpta = $noDossCpta;
        return $this;
    }
}
