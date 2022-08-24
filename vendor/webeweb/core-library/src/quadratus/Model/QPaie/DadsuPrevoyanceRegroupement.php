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
 * Dadsu prevoyance regroupement.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DadsuPrevoyanceRegroupement {

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Code option.
     *
     * @var string|null
     */
    private $codeOption;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Code population.
     *
     * @var string|null
     */
    private $codePopulation;

    /**
     * Code regroupement.
     *
     * @var string|null
     */
    private $codeRegroupement;

    /**
     * Ref contrat.
     *
     * @var string|null
     */
    private $refContrat;

    /**
     * Type cotis.
     *
     * @var string|null
     */
    private $typeCotis;

    /**
     * Valeur cotis.
     *
     * @var float|null
     */
    private $valeurCotis;

    /**
     * Valeur cotis initiale.
     *
     * @var float|null
     */
    private $valeurCotisInitiale;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code libelle.
     *
     * @return string|null Returns the code libelle.
     */
    public function getCodeLibelle(): ?string {
        return $this->codeLibelle;
    }

    /**
     * Get the code option.
     *
     * @return string|null Returns the code option.
     */
    public function getCodeOption(): ?string {
        return $this->codeOption;
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
     * Get the code population.
     *
     * @return string|null Returns the code population.
     */
    public function getCodePopulation(): ?string {
        return $this->codePopulation;
    }

    /**
     * Get the code regroupement.
     *
     * @return string|null Returns the code regroupement.
     */
    public function getCodeRegroupement(): ?string {
        return $this->codeRegroupement;
    }

    /**
     * Get the ref contrat.
     *
     * @return string|null Returns the ref contrat.
     */
    public function getRefContrat(): ?string {
        return $this->refContrat;
    }

    /**
     * Get the type cotis.
     *
     * @return string|null Returns the type cotis.
     */
    public function getTypeCotis(): ?string {
        return $this->typeCotis;
    }

    /**
     * Get the valeur cotis.
     *
     * @return float|null Returns the valeur cotis.
     */
    public function getValeurCotis(): ?float {
        return $this->valeurCotis;
    }

    /**
     * Get the valeur cotis initiale.
     *
     * @return float|null Returns the valeur cotis initiale.
     */
    public function getValeurCotisInitiale(): ?float {
        return $this->valeurCotisInitiale;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return DadsuPrevoyanceRegroupement Returns this Dadsu prevoyance regroupement.
     */
    public function setCodeLibelle(?string $codeLibelle): DadsuPrevoyanceRegroupement {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code option.
     *
     * @param string|null $codeOption The code option.
     * @return DadsuPrevoyanceRegroupement Returns this Dadsu prevoyance regroupement.
     */
    public function setCodeOption(?string $codeOption): DadsuPrevoyanceRegroupement {
        $this->codeOption = $codeOption;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return DadsuPrevoyanceRegroupement Returns this Dadsu prevoyance regroupement.
     */
    public function setCodeOrganisme(?string $codeOrganisme): DadsuPrevoyanceRegroupement {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code population.
     *
     * @param string|null $codePopulation The code population.
     * @return DadsuPrevoyanceRegroupement Returns this Dadsu prevoyance regroupement.
     */
    public function setCodePopulation(?string $codePopulation): DadsuPrevoyanceRegroupement {
        $this->codePopulation = $codePopulation;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string|null $codeRegroupement The code regroupement.
     * @return DadsuPrevoyanceRegroupement Returns this Dadsu prevoyance regroupement.
     */
    public function setCodeRegroupement(?string $codeRegroupement): DadsuPrevoyanceRegroupement {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string|null $refContrat The ref contrat.
     * @return DadsuPrevoyanceRegroupement Returns this Dadsu prevoyance regroupement.
     */
    public function setRefContrat(?string $refContrat): DadsuPrevoyanceRegroupement {
        $this->refContrat = $refContrat;
        return $this;
    }

    /**
     * Set the type cotis.
     *
     * @param string|null $typeCotis The type cotis.
     * @return DadsuPrevoyanceRegroupement Returns this Dadsu prevoyance regroupement.
     */
    public function setTypeCotis(?string $typeCotis): DadsuPrevoyanceRegroupement {
        $this->typeCotis = $typeCotis;
        return $this;
    }

    /**
     * Set the valeur cotis.
     *
     * @param float|null $valeurCotis The valeur cotis.
     * @return DadsuPrevoyanceRegroupement Returns this Dadsu prevoyance regroupement.
     */
    public function setValeurCotis(?float $valeurCotis): DadsuPrevoyanceRegroupement {
        $this->valeurCotis = $valeurCotis;
        return $this;
    }

    /**
     * Set the valeur cotis initiale.
     *
     * @param float|null $valeurCotisInitiale The valeur cotis initiale.
     * @return DadsuPrevoyanceRegroupement Returns this Dadsu prevoyance regroupement.
     */
    public function setValeurCotisInitiale(?float $valeurCotisInitiale): DadsuPrevoyanceRegroupement {
        $this->valeurCotisInitiale = $valeurCotisInitiale;
        return $this;
    }
}
