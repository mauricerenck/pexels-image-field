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

use DateTime;

/**
 * Dadsu prev.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DadsuPrev {

    /**
     * Base prev.
     *
     * @var float|null
     */
    private $basePrev;

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
     * Code organisme gestionnaire.
     *
     * @var string|null
     */
    private $codeOrganismeGestionnaire;

    /**
     * Code popul.
     *
     * @var string|null
     */
    private $codePopul;

    /**
     * Code type prev.
     *
     * @var string|null
     */
    private $codeTypePrev;

    /**
     * Debut periode.
     *
     * @var DateTime|null
     */
    private $debutPeriode;

    /**
     * Even contrat.
     *
     * @var string|null
     */
    private $evenContrat;

    /**
     * Fin periode.
     *
     * @var DateTime|null
     */
    private $finPeriode;

    /**
     * Id institution.
     *
     * @var string|null
     */
    private $idInstitution;

    /**
     * Indice dadsu.
     *
     * @var int|null
     */
    private $indiceDadsu;

    /**
     * No affiliation.
     *
     * @var string|null
     */
    private $noAffiliation;

    /**
     * Numero.
     *
     * @var string|null
     */
    private $numero;

    /**
     * Numero ordre.
     *
     * @var int|null
     */
    private $numeroOrdre;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the base prev.
     *
     * @return float|null Returns the base prev.
     */
    public function getBasePrev(): ?float {
        return $this->basePrev;
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
     * Get the code organisme gestionnaire.
     *
     * @return string|null Returns the code organisme gestionnaire.
     */
    public function getCodeOrganismeGestionnaire(): ?string {
        return $this->codeOrganismeGestionnaire;
    }

    /**
     * Get the code popul.
     *
     * @return string|null Returns the code popul.
     */
    public function getCodePopul(): ?string {
        return $this->codePopul;
    }

    /**
     * Get the code type prev.
     *
     * @return string|null Returns the code type prev.
     */
    public function getCodeTypePrev(): ?string {
        return $this->codeTypePrev;
    }

    /**
     * Get the debut periode.
     *
     * @return DateTime|null Returns the debut periode.
     */
    public function getDebutPeriode(): ?DateTime {
        return $this->debutPeriode;
    }

    /**
     * Get the even contrat.
     *
     * @return string|null Returns the even contrat.
     */
    public function getEvenContrat(): ?string {
        return $this->evenContrat;
    }

    /**
     * Get the fin periode.
     *
     * @return DateTime|null Returns the fin periode.
     */
    public function getFinPeriode(): ?DateTime {
        return $this->finPeriode;
    }

    /**
     * Get the id institution.
     *
     * @return string|null Returns the id institution.
     */
    public function getIdInstitution(): ?string {
        return $this->idInstitution;
    }

    /**
     * Get the indice dadsu.
     *
     * @return int|null Returns the indice dadsu.
     */
    public function getIndiceDadsu(): ?int {
        return $this->indiceDadsu;
    }

    /**
     * Get the no affiliation.
     *
     * @return string|null Returns the no affiliation.
     */
    public function getNoAffiliation(): ?string {
        return $this->noAffiliation;
    }

    /**
     * Get the numero.
     *
     * @return string|null Returns the numero.
     */
    public function getNumero(): ?string {
        return $this->numero;
    }

    /**
     * Get the numero ordre.
     *
     * @return int|null Returns the numero ordre.
     */
    public function getNumeroOrdre(): ?int {
        return $this->numeroOrdre;
    }

    /**
     * Set the base prev.
     *
     * @param float|null $basePrev The base prev.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setBasePrev(?float $basePrev): DadsuPrev {
        $this->basePrev = $basePrev;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setCodeEtablissement(?int $codeEtablissement): DadsuPrev {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setCodeOrganisme(?string $codeOrganisme): DadsuPrev {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code organisme gestionnaire.
     *
     * @param string|null $codeOrganismeGestionnaire The code organisme gestionnaire.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setCodeOrganismeGestionnaire(?string $codeOrganismeGestionnaire): DadsuPrev {
        $this->codeOrganismeGestionnaire = $codeOrganismeGestionnaire;
        return $this;
    }

    /**
     * Set the code popul.
     *
     * @param string|null $codePopul The code popul.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setCodePopul(?string $codePopul): DadsuPrev {
        $this->codePopul = $codePopul;
        return $this;
    }

    /**
     * Set the code type prev.
     *
     * @param string|null $codeTypePrev The code type prev.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setCodeTypePrev(?string $codeTypePrev): DadsuPrev {
        $this->codeTypePrev = $codeTypePrev;
        return $this;
    }

    /**
     * Set the debut periode.
     *
     * @param DateTime|null $debutPeriode The debut periode.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setDebutPeriode(?DateTime $debutPeriode): DadsuPrev {
        $this->debutPeriode = $debutPeriode;
        return $this;
    }

    /**
     * Set the even contrat.
     *
     * @param string|null $evenContrat The even contrat.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setEvenContrat(?string $evenContrat): DadsuPrev {
        $this->evenContrat = $evenContrat;
        return $this;
    }

    /**
     * Set the fin periode.
     *
     * @param DateTime|null $finPeriode The fin periode.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setFinPeriode(?DateTime $finPeriode): DadsuPrev {
        $this->finPeriode = $finPeriode;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string|null $idInstitution The id institution.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setIdInstitution(?string $idInstitution): DadsuPrev {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the indice dadsu.
     *
     * @param int|null $indiceDadsu The indice dadsu.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setIndiceDadsu(?int $indiceDadsu): DadsuPrev {
        $this->indiceDadsu = $indiceDadsu;
        return $this;
    }

    /**
     * Set the no affiliation.
     *
     * @param string|null $noAffiliation The no affiliation.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setNoAffiliation(?string $noAffiliation): DadsuPrev {
        $this->noAffiliation = $noAffiliation;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setNumero(?string $numero): DadsuPrev {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int|null $numeroOrdre The numero ordre.
     * @return DadsuPrev Returns this Dadsu prev.
     */
    public function setNumeroOrdre(?int $numeroOrdre): DadsuPrev {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }
}
