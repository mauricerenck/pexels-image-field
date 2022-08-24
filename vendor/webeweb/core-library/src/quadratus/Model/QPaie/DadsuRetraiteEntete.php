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
 * Dadsu retraite entete.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DadsuRetraiteEntete {

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Mail contact.
     *
     * @var string|null
     */
    private $mailContact;

    /**
     * Nom contact.
     *
     * @var string|null
     */
    private $nomContact;

    /**
     * Tel contact.
     *
     * @var string|null
     */
    private $telContact;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the code organisme.
     *
     * @return string|null Returns the code organisme.
     */
    public function getCodeOrganisme(): ?string {
        return $this->codeOrganisme;
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the mail contact.
     *
     * @return string|null Returns the mail contact.
     */
    public function getMailContact(): ?string {
        return $this->mailContact;
    }

    /**
     * Get the nom contact.
     *
     * @return string|null Returns the nom contact.
     */
    public function getNomContact(): ?string {
        return $this->nomContact;
    }

    /**
     * Get the tel contact.
     *
     * @return string|null Returns the tel contact.
     */
    public function getTelContact(): ?string {
        return $this->telContact;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return DadsuRetraiteEntete Returns this Dadsu retraite entete.
     */
    public function setCodeEtablissement(?int $codeEtablissement): DadsuRetraiteEntete {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return DadsuRetraiteEntete Returns this Dadsu retraite entete.
     */
    public function setCodeOrganisme(?string $codeOrganisme): DadsuRetraiteEntete {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return DadsuRetraiteEntete Returns this Dadsu retraite entete.
     */
    public function setIntitule(?string $intitule): DadsuRetraiteEntete {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the mail contact.
     *
     * @param string|null $mailContact The mail contact.
     * @return DadsuRetraiteEntete Returns this Dadsu retraite entete.
     */
    public function setMailContact(?string $mailContact): DadsuRetraiteEntete {
        $this->mailContact = $mailContact;
        return $this;
    }

    /**
     * Set the nom contact.
     *
     * @param string|null $nomContact The nom contact.
     * @return DadsuRetraiteEntete Returns this Dadsu retraite entete.
     */
    public function setNomContact(?string $nomContact): DadsuRetraiteEntete {
        $this->nomContact = $nomContact;
        return $this;
    }

    /**
     * Set the tel contact.
     *
     * @param string|null $telContact The tel contact.
     * @return DadsuRetraiteEntete Returns this Dadsu retraite entete.
     */
    public function setTelContact(?string $telContact): DadsuRetraiteEntete {
        $this->telContact = $telContact;
        return $this;
    }
}
