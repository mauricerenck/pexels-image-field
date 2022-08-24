<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

/**
 * Prestations risques.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class PrestationsRisques {

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Taux exposition.
     *
     * @var float|null
     */
    private $tauxExposition;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code article.
     *
     * @return string|null Returns the code article.
     */
    public function getCodeArticle(): ?string {
        return $this->codeArticle;
    }

    /**
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the taux exposition.
     *
     * @return float|null Returns the taux exposition.
     */
    public function getTauxExposition(): ?float {
        return $this->tauxExposition;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return PrestationsRisques Returns this Prestations risques.
     */
    public function setCodeArticle(?string $codeArticle): PrestationsRisques {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return PrestationsRisques Returns this Prestations risques.
     */
    public function setCodeTache(?string $codeTache): PrestationsRisques {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the taux exposition.
     *
     * @param float|null $tauxExposition The taux exposition.
     * @return PrestationsRisques Returns this Prestations risques.
     */
    public function setTauxExposition(?float $tauxExposition): PrestationsRisques {
        $this->tauxExposition = $tauxExposition;
        return $this;
    }
}
