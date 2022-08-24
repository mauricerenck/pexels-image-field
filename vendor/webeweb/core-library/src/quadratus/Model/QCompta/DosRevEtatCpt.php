<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Dos rev etat cpt.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class DosRevEtatCpt {

    /**
     * Collaborateur.
     *
     * @var string|null
     */
    private $collaborateur;

    /**
     * Credit.
     *
     * @var float|null
     */
    private $credit;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Debit.
     *
     * @var float|null
     */
    private $debit;

    /**
     * Etat cpt.
     *
     * @var string|null
     */
    private $etatCpt;

    /**
     * Modifie.
     *
     * @var bool|null
     */
    private $modifie;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Periode rev.
     *
     * @var DateTime|null
     */
    private $periodeRev;

    /**
     * Solde.
     *
     * @var float|null
     */
    private $solde;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the collaborateur.
     *
     * @return string|null Returns the collaborateur.
     */
    public function getCollaborateur(): ?string {
        return $this->collaborateur;
    }

    /**
     * Get the credit.
     *
     * @return float|null Returns the credit.
     */
    public function getCredit(): ?float {
        return $this->credit;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif(): ?DateTime {
        return $this->dateModif;
    }

    /**
     * Get the debit.
     *
     * @return float|null Returns the debit.
     */
    public function getDebit(): ?float {
        return $this->debit;
    }

    /**
     * Get the etat cpt.
     *
     * @return string|null Returns the etat cpt.
     */
    public function getEtatCpt(): ?string {
        return $this->etatCpt;
    }

    /**
     * Get the modifie.
     *
     * @return bool|null Returns the modifie.
     */
    public function getModifie(): ?bool {
        return $this->modifie;
    }

    /**
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
    }

    /**
     * Get the periode rev.
     *
     * @return DateTime|null Returns the periode rev.
     */
    public function getPeriodeRev(): ?DateTime {
        return $this->periodeRev;
    }

    /**
     * Get the solde.
     *
     * @return float|null Returns the solde.
     */
    public function getSolde(): ?float {
        return $this->solde;
    }

    /**
     * Set the collaborateur.
     *
     * @param string|null $collaborateur The collaborateur.
     * @return DosRevEtatCpt Returns this Dos rev etat cpt.
     */
    public function setCollaborateur(?string $collaborateur): DosRevEtatCpt {
        $this->collaborateur = $collaborateur;
        return $this;
    }

    /**
     * Set the credit.
     *
     * @param float|null $credit The credit.
     * @return DosRevEtatCpt Returns this Dos rev etat cpt.
     */
    public function setCredit(?float $credit): DosRevEtatCpt {
        $this->credit = $credit;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return DosRevEtatCpt Returns this Dos rev etat cpt.
     */
    public function setDateModif(?DateTime $dateModif): DosRevEtatCpt {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the debit.
     *
     * @param float|null $debit The debit.
     * @return DosRevEtatCpt Returns this Dos rev etat cpt.
     */
    public function setDebit(?float $debit): DosRevEtatCpt {
        $this->debit = $debit;
        return $this;
    }

    /**
     * Set the etat cpt.
     *
     * @param string|null $etatCpt The etat cpt.
     * @return DosRevEtatCpt Returns this Dos rev etat cpt.
     */
    public function setEtatCpt(?string $etatCpt): DosRevEtatCpt {
        $this->etatCpt = $etatCpt;
        return $this;
    }

    /**
     * Set the modifie.
     *
     * @param bool|null $modifie The modifie.
     * @return DosRevEtatCpt Returns this Dos rev etat cpt.
     */
    public function setModifie(?bool $modifie): DosRevEtatCpt {
        $this->modifie = $modifie;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return DosRevEtatCpt Returns this Dos rev etat cpt.
     */
    public function setNumeroCompte(?string $numeroCompte): DosRevEtatCpt {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the periode rev.
     *
     * @param DateTime|null $periodeRev The periode rev.
     * @return DosRevEtatCpt Returns this Dos rev etat cpt.
     */
    public function setPeriodeRev(?DateTime $periodeRev): DosRevEtatCpt {
        $this->periodeRev = $periodeRev;
        return $this;
    }

    /**
     * Set the solde.
     *
     * @param float|null $solde The solde.
     * @return DosRevEtatCpt Returns this Dos rev etat cpt.
     */
    public function setSolde(?float $solde): DosRevEtatCpt {
        $this->solde = $solde;
        return $this;
    }
}
