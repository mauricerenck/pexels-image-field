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
 * Compteur.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Compteur {

    /**
     * Nb attes assedic.
     *
     * @var int|null
     */
    private $nbAttesAssedic;

    /**
     * Nb attes assedic a deduire.
     *
     * @var int|null
     */
    private $nbAttesAssedicADeduire;

    /**
     * Nb attes assedic fact.
     *
     * @var int|null
     */
    private $nbAttesAssedicFact;

    /**
     * Nb attes ijss.
     *
     * @var int|null
     */
    private $nbAttesIjss;

    /**
     * Nb attes ijss a deduire.
     *
     * @var int|null
     */
    private $nbAttesIjssADeduire;

    /**
     * Nb attes ijss at.
     *
     * @var int|null
     */
    private $nbAttesIjssAt;

    /**
     * Nb attes ijss at fact.
     *
     * @var int|null
     */
    private $nbAttesIjssAtFact;

    /**
     * Nb attes ijss ata deduire.
     *
     * @var int|null
     */
    private $nbAttesIjssAtaDeduire;

    /**
     * Nb attes ijss fact.
     *
     * @var int|null
     */
    private $nbAttesIjssFact;

    /**
     * Nb attest emploi.
     *
     * @var int|null
     */
    private $nbAttestEmploi;

    /**
     * Nb attest emploi a deduire.
     *
     * @var int|null
     */
    private $nbAttestEmploiADeduire;

    /**
     * Nb attest emploi fact.
     *
     * @var int|null
     */
    private $nbAttestEmploiFact;

    /**
     * Nb bul edites.
     *
     * @var int|null
     */
    private $nbBulEdites;

    /**
     * Nb bul edites a deduire.
     *
     * @var int|null
     */
    private $nbBulEditesADeduire;

    /**
     * Nb bul edites fact.
     *
     * @var int|null
     */
    private $nbBulEditesFact;

    /**
     * Nb bul valides.
     *
     * @var int|null
     */
    private $nbBulValides;

    /**
     * Nb bul valides a deduire.
     *
     * @var int|null
     */
    private $nbBulValidesADeduire;

    /**
     * Nb bul valides fact.
     *
     * @var int|null
     */
    private $nbBulValidesFact;

    /**
     * Nb certif travail.
     *
     * @var int|null
     */
    private $nbCertifTravail;

    /**
     * Nb certif travail a deduire.
     *
     * @var int|null
     */
    private $nbCertifTravailADeduire;

    /**
     * Nb certif travail fact.
     *
     * @var int|null
     */
    private $nbCertifTravailFact;

    /**
     * Nb dads editees.
     *
     * @var int|null
     */
    private $nbDadsEditees;

    /**
     * Nb dads editees a deduire.
     *
     * @var int|null
     */
    private $nbDadsEditeesADeduire;

    /**
     * Nb dads editees fact.
     *
     * @var int|null
     */
    private $nbDadsEditeesFact;

    /**
     * Nb disquettes virements.
     *
     * @var int|null
     */
    private $nbDisquettesVirements;

    /**
     * Nb disquettes virements a deduire.
     *
     * @var int|null
     */
    private $nbDisquettesVirementsADeduire;

    /**
     * Nb disquettes virements fact.
     *
     * @var int|null
     */
    private $nbDisquettesVirementsFact;

    /**
     * Nb dsn evt arret.
     *
     * @var int|null
     */
    private $nbDsnEvtArret;

    /**
     * Nb dsn evt arret a deduire.
     *
     * @var int|null
     */
    private $nbDsnEvtArretADeduire;

    /**
     * Nb dsn evt arret fact.
     *
     * @var int|null
     */
    private $nbDsnEvtArretFact;

    /**
     * Nb dsn evt fin contrat.
     *
     * @var int|null
     */
    private $nbDsnEvtFinContrat;

    /**
     * Nb dsn evt fin contrat a deduire.
     *
     * @var int|null
     */
    private $nbDsnEvtFinContratADeduire;

    /**
     * Nb dsn evt fin contrat fact.
     *
     * @var int|null
     */
    private $nbDsnEvtFinContratFact;

    /**
     * Nb dsn mensuelle.
     *
     * @var int|null
     */
    private $nbDsnMensuelle;

    /**
     * Nb dsn mensuelle a deduire.
     *
     * @var int|null
     */
    private $nbDsnMensuelleADeduire;

    /**
     * Nb dsn mensuelle fact.
     *
     * @var int|null
     */
    private $nbDsnMensuelleFact;

    /**
     * Nb due.
     *
     * @var int|null
     */
    private $nbDue;

    /**
     * Nb due fact.
     *
     * @var int|null
     */
    private $nbDueFact;

    /**
     * Nb duea deduire.
     *
     * @var int|null
     */
    private $nbDueaDeduire;

    /**
     * Nb solde tout compte.
     *
     * @var int|null
     */
    private $nbSoldeToutCompte;

    /**
     * Nb solde tout compte a deduire.
     *
     * @var int|null
     */
    private $nbSoldeToutCompteADeduire;

    /**
     * Nb solde tout compte fact.
     *
     * @var int|null
     */
    private $nbSoldeToutCompteFact;

    /**
     * Nb tds realisees.
     *
     * @var int|null
     */
    private $nbTdsRealisees;

    /**
     * Nb tds realisees a deduire.
     *
     * @var int|null
     */
    private $nbTdsRealiseesADeduire;

    /**
     * Nb tds realisees fact.
     *
     * @var int|null
     */
    private $nbTdsRealiseesFact;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the nb attes assedic.
     *
     * @return int|null Returns the nb attes assedic.
     */
    public function getNbAttesAssedic(): ?int {
        return $this->nbAttesAssedic;
    }

    /**
     * Get the nb attes assedic a deduire.
     *
     * @return int|null Returns the nb attes assedic a deduire.
     */
    public function getNbAttesAssedicADeduire(): ?int {
        return $this->nbAttesAssedicADeduire;
    }

    /**
     * Get the nb attes assedic fact.
     *
     * @return int|null Returns the nb attes assedic fact.
     */
    public function getNbAttesAssedicFact(): ?int {
        return $this->nbAttesAssedicFact;
    }

    /**
     * Get the nb attes ijss.
     *
     * @return int|null Returns the nb attes ijss.
     */
    public function getNbAttesIjss(): ?int {
        return $this->nbAttesIjss;
    }

    /**
     * Get the nb attes ijss a deduire.
     *
     * @return int|null Returns the nb attes ijss a deduire.
     */
    public function getNbAttesIjssADeduire(): ?int {
        return $this->nbAttesIjssADeduire;
    }

    /**
     * Get the nb attes ijss at.
     *
     * @return int|null Returns the nb attes ijss at.
     */
    public function getNbAttesIjssAt(): ?int {
        return $this->nbAttesIjssAt;
    }

    /**
     * Get the nb attes ijss at fact.
     *
     * @return int|null Returns the nb attes ijss at fact.
     */
    public function getNbAttesIjssAtFact(): ?int {
        return $this->nbAttesIjssAtFact;
    }

    /**
     * Get the nb attes ijss ata deduire.
     *
     * @return int|null Returns the nb attes ijss ata deduire.
     */
    public function getNbAttesIjssAtaDeduire(): ?int {
        return $this->nbAttesIjssAtaDeduire;
    }

    /**
     * Get the nb attes ijss fact.
     *
     * @return int|null Returns the nb attes ijss fact.
     */
    public function getNbAttesIjssFact(): ?int {
        return $this->nbAttesIjssFact;
    }

    /**
     * Get the nb attest emploi.
     *
     * @return int|null Returns the nb attest emploi.
     */
    public function getNbAttestEmploi(): ?int {
        return $this->nbAttestEmploi;
    }

    /**
     * Get the nb attest emploi a deduire.
     *
     * @return int|null Returns the nb attest emploi a deduire.
     */
    public function getNbAttestEmploiADeduire(): ?int {
        return $this->nbAttestEmploiADeduire;
    }

    /**
     * Get the nb attest emploi fact.
     *
     * @return int|null Returns the nb attest emploi fact.
     */
    public function getNbAttestEmploiFact(): ?int {
        return $this->nbAttestEmploiFact;
    }

    /**
     * Get the nb bul edites.
     *
     * @return int|null Returns the nb bul edites.
     */
    public function getNbBulEdites(): ?int {
        return $this->nbBulEdites;
    }

    /**
     * Get the nb bul edites a deduire.
     *
     * @return int|null Returns the nb bul edites a deduire.
     */
    public function getNbBulEditesADeduire(): ?int {
        return $this->nbBulEditesADeduire;
    }

    /**
     * Get the nb bul edites fact.
     *
     * @return int|null Returns the nb bul edites fact.
     */
    public function getNbBulEditesFact(): ?int {
        return $this->nbBulEditesFact;
    }

    /**
     * Get the nb bul valides.
     *
     * @return int|null Returns the nb bul valides.
     */
    public function getNbBulValides(): ?int {
        return $this->nbBulValides;
    }

    /**
     * Get the nb bul valides a deduire.
     *
     * @return int|null Returns the nb bul valides a deduire.
     */
    public function getNbBulValidesADeduire(): ?int {
        return $this->nbBulValidesADeduire;
    }

    /**
     * Get the nb bul valides fact.
     *
     * @return int|null Returns the nb bul valides fact.
     */
    public function getNbBulValidesFact(): ?int {
        return $this->nbBulValidesFact;
    }

    /**
     * Get the nb certif travail.
     *
     * @return int|null Returns the nb certif travail.
     */
    public function getNbCertifTravail(): ?int {
        return $this->nbCertifTravail;
    }

    /**
     * Get the nb certif travail a deduire.
     *
     * @return int|null Returns the nb certif travail a deduire.
     */
    public function getNbCertifTravailADeduire(): ?int {
        return $this->nbCertifTravailADeduire;
    }

    /**
     * Get the nb certif travail fact.
     *
     * @return int|null Returns the nb certif travail fact.
     */
    public function getNbCertifTravailFact(): ?int {
        return $this->nbCertifTravailFact;
    }

    /**
     * Get the nb dads editees.
     *
     * @return int|null Returns the nb dads editees.
     */
    public function getNbDadsEditees(): ?int {
        return $this->nbDadsEditees;
    }

    /**
     * Get the nb dads editees a deduire.
     *
     * @return int|null Returns the nb dads editees a deduire.
     */
    public function getNbDadsEditeesADeduire(): ?int {
        return $this->nbDadsEditeesADeduire;
    }

    /**
     * Get the nb dads editees fact.
     *
     * @return int|null Returns the nb dads editees fact.
     */
    public function getNbDadsEditeesFact(): ?int {
        return $this->nbDadsEditeesFact;
    }

    /**
     * Get the nb disquettes virements.
     *
     * @return int|null Returns the nb disquettes virements.
     */
    public function getNbDisquettesVirements(): ?int {
        return $this->nbDisquettesVirements;
    }

    /**
     * Get the nb disquettes virements a deduire.
     *
     * @return int|null Returns the nb disquettes virements a deduire.
     */
    public function getNbDisquettesVirementsADeduire(): ?int {
        return $this->nbDisquettesVirementsADeduire;
    }

    /**
     * Get the nb disquettes virements fact.
     *
     * @return int|null Returns the nb disquettes virements fact.
     */
    public function getNbDisquettesVirementsFact(): ?int {
        return $this->nbDisquettesVirementsFact;
    }

    /**
     * Get the nb dsn evt arret.
     *
     * @return int|null Returns the nb dsn evt arret.
     */
    public function getNbDsnEvtArret(): ?int {
        return $this->nbDsnEvtArret;
    }

    /**
     * Get the nb dsn evt arret a deduire.
     *
     * @return int|null Returns the nb dsn evt arret a deduire.
     */
    public function getNbDsnEvtArretADeduire(): ?int {
        return $this->nbDsnEvtArretADeduire;
    }

    /**
     * Get the nb dsn evt arret fact.
     *
     * @return int|null Returns the nb dsn evt arret fact.
     */
    public function getNbDsnEvtArretFact(): ?int {
        return $this->nbDsnEvtArretFact;
    }

    /**
     * Get the nb dsn evt fin contrat.
     *
     * @return int|null Returns the nb dsn evt fin contrat.
     */
    public function getNbDsnEvtFinContrat(): ?int {
        return $this->nbDsnEvtFinContrat;
    }

    /**
     * Get the nb dsn evt fin contrat a deduire.
     *
     * @return int|null Returns the nb dsn evt fin contrat a deduire.
     */
    public function getNbDsnEvtFinContratADeduire(): ?int {
        return $this->nbDsnEvtFinContratADeduire;
    }

    /**
     * Get the nb dsn evt fin contrat fact.
     *
     * @return int|null Returns the nb dsn evt fin contrat fact.
     */
    public function getNbDsnEvtFinContratFact(): ?int {
        return $this->nbDsnEvtFinContratFact;
    }

    /**
     * Get the nb dsn mensuelle.
     *
     * @return int|null Returns the nb dsn mensuelle.
     */
    public function getNbDsnMensuelle(): ?int {
        return $this->nbDsnMensuelle;
    }

    /**
     * Get the nb dsn mensuelle a deduire.
     *
     * @return int|null Returns the nb dsn mensuelle a deduire.
     */
    public function getNbDsnMensuelleADeduire(): ?int {
        return $this->nbDsnMensuelleADeduire;
    }

    /**
     * Get the nb dsn mensuelle fact.
     *
     * @return int|null Returns the nb dsn mensuelle fact.
     */
    public function getNbDsnMensuelleFact(): ?int {
        return $this->nbDsnMensuelleFact;
    }

    /**
     * Get the nb due.
     *
     * @return int|null Returns the nb due.
     */
    public function getNbDue(): ?int {
        return $this->nbDue;
    }

    /**
     * Get the nb due fact.
     *
     * @return int|null Returns the nb due fact.
     */
    public function getNbDueFact(): ?int {
        return $this->nbDueFact;
    }

    /**
     * Get the nb duea deduire.
     *
     * @return int|null Returns the nb duea deduire.
     */
    public function getNbDueaDeduire(): ?int {
        return $this->nbDueaDeduire;
    }

    /**
     * Get the nb solde tout compte.
     *
     * @return int|null Returns the nb solde tout compte.
     */
    public function getNbSoldeToutCompte(): ?int {
        return $this->nbSoldeToutCompte;
    }

    /**
     * Get the nb solde tout compte a deduire.
     *
     * @return int|null Returns the nb solde tout compte a deduire.
     */
    public function getNbSoldeToutCompteADeduire(): ?int {
        return $this->nbSoldeToutCompteADeduire;
    }

    /**
     * Get the nb solde tout compte fact.
     *
     * @return int|null Returns the nb solde tout compte fact.
     */
    public function getNbSoldeToutCompteFact(): ?int {
        return $this->nbSoldeToutCompteFact;
    }

    /**
     * Get the nb tds realisees.
     *
     * @return int|null Returns the nb tds realisees.
     */
    public function getNbTdsRealisees(): ?int {
        return $this->nbTdsRealisees;
    }

    /**
     * Get the nb tds realisees a deduire.
     *
     * @return int|null Returns the nb tds realisees a deduire.
     */
    public function getNbTdsRealiseesADeduire(): ?int {
        return $this->nbTdsRealiseesADeduire;
    }

    /**
     * Get the nb tds realisees fact.
     *
     * @return int|null Returns the nb tds realisees fact.
     */
    public function getNbTdsRealiseesFact(): ?int {
        return $this->nbTdsRealiseesFact;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Set the nb attes assedic.
     *
     * @param int|null $nbAttesAssedic The nb attes assedic.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesAssedic(?int $nbAttesAssedic): Compteur {
        $this->nbAttesAssedic = $nbAttesAssedic;
        return $this;
    }

    /**
     * Set the nb attes assedic a deduire.
     *
     * @param int|null $nbAttesAssedicADeduire The nb attes assedic a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesAssedicADeduire(?int $nbAttesAssedicADeduire): Compteur {
        $this->nbAttesAssedicADeduire = $nbAttesAssedicADeduire;
        return $this;
    }

    /**
     * Set the nb attes assedic fact.
     *
     * @param int|null $nbAttesAssedicFact The nb attes assedic fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesAssedicFact(?int $nbAttesAssedicFact): Compteur {
        $this->nbAttesAssedicFact = $nbAttesAssedicFact;
        return $this;
    }

    /**
     * Set the nb attes ijss.
     *
     * @param int|null $nbAttesIjss The nb attes ijss.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesIjss(?int $nbAttesIjss): Compteur {
        $this->nbAttesIjss = $nbAttesIjss;
        return $this;
    }

    /**
     * Set the nb attes ijss a deduire.
     *
     * @param int|null $nbAttesIjssADeduire The nb attes ijss a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesIjssADeduire(?int $nbAttesIjssADeduire): Compteur {
        $this->nbAttesIjssADeduire = $nbAttesIjssADeduire;
        return $this;
    }

    /**
     * Set the nb attes ijss at.
     *
     * @param int|null $nbAttesIjssAt The nb attes ijss at.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesIjssAt(?int $nbAttesIjssAt): Compteur {
        $this->nbAttesIjssAt = $nbAttesIjssAt;
        return $this;
    }

    /**
     * Set the nb attes ijss at fact.
     *
     * @param int|null $nbAttesIjssAtFact The nb attes ijss at fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesIjssAtFact(?int $nbAttesIjssAtFact): Compteur {
        $this->nbAttesIjssAtFact = $nbAttesIjssAtFact;
        return $this;
    }

    /**
     * Set the nb attes ijss ata deduire.
     *
     * @param int|null $nbAttesIjssAtaDeduire The nb attes ijss ata deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesIjssAtaDeduire(?int $nbAttesIjssAtaDeduire): Compteur {
        $this->nbAttesIjssAtaDeduire = $nbAttesIjssAtaDeduire;
        return $this;
    }

    /**
     * Set the nb attes ijss fact.
     *
     * @param int|null $nbAttesIjssFact The nb attes ijss fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesIjssFact(?int $nbAttesIjssFact): Compteur {
        $this->nbAttesIjssFact = $nbAttesIjssFact;
        return $this;
    }

    /**
     * Set the nb attest emploi.
     *
     * @param int|null $nbAttestEmploi The nb attest emploi.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttestEmploi(?int $nbAttestEmploi): Compteur {
        $this->nbAttestEmploi = $nbAttestEmploi;
        return $this;
    }

    /**
     * Set the nb attest emploi a deduire.
     *
     * @param int|null $nbAttestEmploiADeduire The nb attest emploi a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttestEmploiADeduire(?int $nbAttestEmploiADeduire): Compteur {
        $this->nbAttestEmploiADeduire = $nbAttestEmploiADeduire;
        return $this;
    }

    /**
     * Set the nb attest emploi fact.
     *
     * @param int|null $nbAttestEmploiFact The nb attest emploi fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttestEmploiFact(?int $nbAttestEmploiFact): Compteur {
        $this->nbAttestEmploiFact = $nbAttestEmploiFact;
        return $this;
    }

    /**
     * Set the nb bul edites.
     *
     * @param int|null $nbBulEdites The nb bul edites.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBulEdites(?int $nbBulEdites): Compteur {
        $this->nbBulEdites = $nbBulEdites;
        return $this;
    }

    /**
     * Set the nb bul edites a deduire.
     *
     * @param int|null $nbBulEditesADeduire The nb bul edites a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBulEditesADeduire(?int $nbBulEditesADeduire): Compteur {
        $this->nbBulEditesADeduire = $nbBulEditesADeduire;
        return $this;
    }

    /**
     * Set the nb bul edites fact.
     *
     * @param int|null $nbBulEditesFact The nb bul edites fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBulEditesFact(?int $nbBulEditesFact): Compteur {
        $this->nbBulEditesFact = $nbBulEditesFact;
        return $this;
    }

    /**
     * Set the nb bul valides.
     *
     * @param int|null $nbBulValides The nb bul valides.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBulValides(?int $nbBulValides): Compteur {
        $this->nbBulValides = $nbBulValides;
        return $this;
    }

    /**
     * Set the nb bul valides a deduire.
     *
     * @param int|null $nbBulValidesADeduire The nb bul valides a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBulValidesADeduire(?int $nbBulValidesADeduire): Compteur {
        $this->nbBulValidesADeduire = $nbBulValidesADeduire;
        return $this;
    }

    /**
     * Set the nb bul valides fact.
     *
     * @param int|null $nbBulValidesFact The nb bul valides fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBulValidesFact(?int $nbBulValidesFact): Compteur {
        $this->nbBulValidesFact = $nbBulValidesFact;
        return $this;
    }

    /**
     * Set the nb certif travail.
     *
     * @param int|null $nbCertifTravail The nb certif travail.
     * @return Compteur Returns this Compteur.
     */
    public function setNbCertifTravail(?int $nbCertifTravail): Compteur {
        $this->nbCertifTravail = $nbCertifTravail;
        return $this;
    }

    /**
     * Set the nb certif travail a deduire.
     *
     * @param int|null $nbCertifTravailADeduire The nb certif travail a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbCertifTravailADeduire(?int $nbCertifTravailADeduire): Compteur {
        $this->nbCertifTravailADeduire = $nbCertifTravailADeduire;
        return $this;
    }

    /**
     * Set the nb certif travail fact.
     *
     * @param int|null $nbCertifTravailFact The nb certif travail fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbCertifTravailFact(?int $nbCertifTravailFact): Compteur {
        $this->nbCertifTravailFact = $nbCertifTravailFact;
        return $this;
    }

    /**
     * Set the nb dads editees.
     *
     * @param int|null $nbDadsEditees The nb dads editees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDadsEditees(?int $nbDadsEditees): Compteur {
        $this->nbDadsEditees = $nbDadsEditees;
        return $this;
    }

    /**
     * Set the nb dads editees a deduire.
     *
     * @param int|null $nbDadsEditeesADeduire The nb dads editees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDadsEditeesADeduire(?int $nbDadsEditeesADeduire): Compteur {
        $this->nbDadsEditeesADeduire = $nbDadsEditeesADeduire;
        return $this;
    }

    /**
     * Set the nb dads editees fact.
     *
     * @param int|null $nbDadsEditeesFact The nb dads editees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDadsEditeesFact(?int $nbDadsEditeesFact): Compteur {
        $this->nbDadsEditeesFact = $nbDadsEditeesFact;
        return $this;
    }

    /**
     * Set the nb disquettes virements.
     *
     * @param int|null $nbDisquettesVirements The nb disquettes virements.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDisquettesVirements(?int $nbDisquettesVirements): Compteur {
        $this->nbDisquettesVirements = $nbDisquettesVirements;
        return $this;
    }

    /**
     * Set the nb disquettes virements a deduire.
     *
     * @param int|null $nbDisquettesVirementsADeduire The nb disquettes virements a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDisquettesVirementsADeduire(?int $nbDisquettesVirementsADeduire): Compteur {
        $this->nbDisquettesVirementsADeduire = $nbDisquettesVirementsADeduire;
        return $this;
    }

    /**
     * Set the nb disquettes virements fact.
     *
     * @param int|null $nbDisquettesVirementsFact The nb disquettes virements fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDisquettesVirementsFact(?int $nbDisquettesVirementsFact): Compteur {
        $this->nbDisquettesVirementsFact = $nbDisquettesVirementsFact;
        return $this;
    }

    /**
     * Set the nb dsn evt arret.
     *
     * @param int|null $nbDsnEvtArret The nb dsn evt arret.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnEvtArret(?int $nbDsnEvtArret): Compteur {
        $this->nbDsnEvtArret = $nbDsnEvtArret;
        return $this;
    }

    /**
     * Set the nb dsn evt arret a deduire.
     *
     * @param int|null $nbDsnEvtArretADeduire The nb dsn evt arret a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnEvtArretADeduire(?int $nbDsnEvtArretADeduire): Compteur {
        $this->nbDsnEvtArretADeduire = $nbDsnEvtArretADeduire;
        return $this;
    }

    /**
     * Set the nb dsn evt arret fact.
     *
     * @param int|null $nbDsnEvtArretFact The nb dsn evt arret fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnEvtArretFact(?int $nbDsnEvtArretFact): Compteur {
        $this->nbDsnEvtArretFact = $nbDsnEvtArretFact;
        return $this;
    }

    /**
     * Set the nb dsn evt fin contrat.
     *
     * @param int|null $nbDsnEvtFinContrat The nb dsn evt fin contrat.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnEvtFinContrat(?int $nbDsnEvtFinContrat): Compteur {
        $this->nbDsnEvtFinContrat = $nbDsnEvtFinContrat;
        return $this;
    }

    /**
     * Set the nb dsn evt fin contrat a deduire.
     *
     * @param int|null $nbDsnEvtFinContratADeduire The nb dsn evt fin contrat a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnEvtFinContratADeduire(?int $nbDsnEvtFinContratADeduire): Compteur {
        $this->nbDsnEvtFinContratADeduire = $nbDsnEvtFinContratADeduire;
        return $this;
    }

    /**
     * Set the nb dsn evt fin contrat fact.
     *
     * @param int|null $nbDsnEvtFinContratFact The nb dsn evt fin contrat fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnEvtFinContratFact(?int $nbDsnEvtFinContratFact): Compteur {
        $this->nbDsnEvtFinContratFact = $nbDsnEvtFinContratFact;
        return $this;
    }

    /**
     * Set the nb dsn mensuelle.
     *
     * @param int|null $nbDsnMensuelle The nb dsn mensuelle.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnMensuelle(?int $nbDsnMensuelle): Compteur {
        $this->nbDsnMensuelle = $nbDsnMensuelle;
        return $this;
    }

    /**
     * Set the nb dsn mensuelle a deduire.
     *
     * @param int|null $nbDsnMensuelleADeduire The nb dsn mensuelle a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnMensuelleADeduire(?int $nbDsnMensuelleADeduire): Compteur {
        $this->nbDsnMensuelleADeduire = $nbDsnMensuelleADeduire;
        return $this;
    }

    /**
     * Set the nb dsn mensuelle fact.
     *
     * @param int|null $nbDsnMensuelleFact The nb dsn mensuelle fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnMensuelleFact(?int $nbDsnMensuelleFact): Compteur {
        $this->nbDsnMensuelleFact = $nbDsnMensuelleFact;
        return $this;
    }

    /**
     * Set the nb due.
     *
     * @param int|null $nbDue The nb due.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDue(?int $nbDue): Compteur {
        $this->nbDue = $nbDue;
        return $this;
    }

    /**
     * Set the nb due fact.
     *
     * @param int|null $nbDueFact The nb due fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDueFact(?int $nbDueFact): Compteur {
        $this->nbDueFact = $nbDueFact;
        return $this;
    }

    /**
     * Set the nb duea deduire.
     *
     * @param int|null $nbDueaDeduire The nb duea deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDueaDeduire(?int $nbDueaDeduire): Compteur {
        $this->nbDueaDeduire = $nbDueaDeduire;
        return $this;
    }

    /**
     * Set the nb solde tout compte.
     *
     * @param int|null $nbSoldeToutCompte The nb solde tout compte.
     * @return Compteur Returns this Compteur.
     */
    public function setNbSoldeToutCompte(?int $nbSoldeToutCompte): Compteur {
        $this->nbSoldeToutCompte = $nbSoldeToutCompte;
        return $this;
    }

    /**
     * Set the nb solde tout compte a deduire.
     *
     * @param int|null $nbSoldeToutCompteADeduire The nb solde tout compte a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbSoldeToutCompteADeduire(?int $nbSoldeToutCompteADeduire): Compteur {
        $this->nbSoldeToutCompteADeduire = $nbSoldeToutCompteADeduire;
        return $this;
    }

    /**
     * Set the nb solde tout compte fact.
     *
     * @param int|null $nbSoldeToutCompteFact The nb solde tout compte fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbSoldeToutCompteFact(?int $nbSoldeToutCompteFact): Compteur {
        $this->nbSoldeToutCompteFact = $nbSoldeToutCompteFact;
        return $this;
    }

    /**
     * Set the nb tds realisees.
     *
     * @param int|null $nbTdsRealisees The nb tds realisees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbTdsRealisees(?int $nbTdsRealisees): Compteur {
        $this->nbTdsRealisees = $nbTdsRealisees;
        return $this;
    }

    /**
     * Set the nb tds realisees a deduire.
     *
     * @param int|null $nbTdsRealiseesADeduire The nb tds realisees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbTdsRealiseesADeduire(?int $nbTdsRealiseesADeduire): Compteur {
        $this->nbTdsRealiseesADeduire = $nbTdsRealiseesADeduire;
        return $this;
    }

    /**
     * Set the nb tds realisees fact.
     *
     * @param int|null $nbTdsRealiseesFact The nb tds realisees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbTdsRealiseesFact(?int $nbTdsRealiseesFact): Compteur {
        $this->nbTdsRealiseesFact = $nbTdsRealiseesFact;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return Compteur Returns this Compteur.
     */
    public function setPeriode(?DateTime $periode): Compteur {
        $this->periode = $periode;
        return $this;
    }
}
