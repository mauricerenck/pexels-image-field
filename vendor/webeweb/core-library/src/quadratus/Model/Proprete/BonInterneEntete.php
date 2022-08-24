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

use DateTime;

/**
 * Bon interne entete.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class BonInterneEntete {

    /**
     * Code collaborateur.
     *
     * @var string|null
     */
    private $codeCollaborateur;

    /**
     * Code livreur.
     *
     * @var string|null
     */
    private $codeLivreur;

    /**
     * Date livraison.
     *
     * @var DateTime|null
     */
    private $dateLivraison;

    /**
     * Lien document.
     *
     * @var string|null
     */
    private $lienDocument;

    /**
     * No bon int.
     *
     * @var string|null
     */
    private $noBonInt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code collaborateur.
     *
     * @return string|null Returns the code collaborateur.
     */
    public function getCodeCollaborateur(): ?string {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code livreur.
     *
     * @return string|null Returns the code livreur.
     */
    public function getCodeLivreur(): ?string {
        return $this->codeLivreur;
    }

    /**
     * Get the date livraison.
     *
     * @return DateTime|null Returns the date livraison.
     */
    public function getDateLivraison(): ?DateTime {
        return $this->dateLivraison;
    }

    /**
     * Get the lien document.
     *
     * @return string|null Returns the lien document.
     */
    public function getLienDocument(): ?string {
        return $this->lienDocument;
    }

    /**
     * Get the no bon int.
     *
     * @return string|null Returns the no bon int.
     */
    public function getNoBonInt(): ?string {
        return $this->noBonInt;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string|null $codeCollaborateur The code collaborateur.
     * @return BonInterneEntete Returns this Bon interne entete.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): BonInterneEntete {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code livreur.
     *
     * @param string|null $codeLivreur The code livreur.
     * @return BonInterneEntete Returns this Bon interne entete.
     */
    public function setCodeLivreur(?string $codeLivreur): BonInterneEntete {
        $this->codeLivreur = $codeLivreur;
        return $this;
    }

    /**
     * Set the date livraison.
     *
     * @param DateTime|null $dateLivraison The date livraison.
     * @return BonInterneEntete Returns this Bon interne entete.
     */
    public function setDateLivraison(?DateTime $dateLivraison): BonInterneEntete {
        $this->dateLivraison = $dateLivraison;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string|null $lienDocument The lien document.
     * @return BonInterneEntete Returns this Bon interne entete.
     */
    public function setLienDocument(?string $lienDocument): BonInterneEntete {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the no bon int.
     *
     * @param string|null $noBonInt The no bon int.
     * @return BonInterneEntete Returns this Bon interne entete.
     */
    public function setNoBonInt(?string $noBonInt): BonInterneEntete {
        $this->noBonInt = $noBonInt;
        return $this;
    }
}
