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
 * Compteur.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Compteur {

    /**
     * Nb activite imprimees.
     *
     * @var int|null
     */
    private $nbActiviteImprimees;

    /**
     * Nb activite imprimees a deduire.
     *
     * @var int|null
     */
    private $nbActiviteImprimeesADeduire;

    /**
     * Nb activite imprimees fact.
     *
     * @var int|null
     */
    private $nbActiviteImprimeesFact;

    /**
     * Nb ana imprimees.
     *
     * @var int|null
     */
    private $nbAnaImprimees;

    /**
     * Nb ana imprimees a deduire.
     *
     * @var int|null
     */
    private $nbAnaImprimeesADeduire;

    /**
     * Nb ana imprimees fact.
     *
     * @var int|null
     */
    private $nbAnaImprimeesFact;

    /**
     * Nb annexes editees.
     *
     * @var int|null
     */
    private $nbAnnexesEditees;

    /**
     * Nb annexes editees a deduire.
     *
     * @var int|null
     */
    private $nbAnnexesEditeesADeduire;

    /**
     * Nb annexes editees fact.
     *
     * @var int|null
     */
    private $nbAnnexesEditeesFact;

    /**
     * Nb bal agee imprimees.
     *
     * @var int|null
     */
    private $nbBalAgeeImprimees;

    /**
     * Nb bal agee imprimees a deduire.
     *
     * @var int|null
     */
    private $nbBalAgeeImprimeesADeduire;

    /**
     * Nb bal agee imprimees fact.
     *
     * @var int|null
     */
    private $nbBalAgeeImprimeesFact;

    /**
     * Nb bal imprimees.
     *
     * @var int|null
     */
    private $nbBalImprimees;

    /**
     * Nb bal imprimees a deduire.
     *
     * @var int|null
     */
    private $nbBalImprimeesADeduire;

    /**
     * Nb bal imprimees fact.
     *
     * @var int|null
     */
    private $nbBalImprimeesFact;

    /**
     * Nb bilans edites.
     *
     * @var int|null
     */
    private $nbBilansEdites;

    /**
     * Nb bilans edites a deduire.
     *
     * @var int|null
     */
    private $nbBilansEditesADeduire;

    /**
     * Nb bilans edites fact.
     *
     * @var int|null
     */
    private $nbBilansEditesFact;

    /**
     * Nb cedage edites.
     *
     * @var int|null
     */
    private $nbCedageEdites;

    /**
     * Nb cedage edites a deduire.
     *
     * @var int|null
     */
    private $nbCedageEditesADeduire;

    /**
     * Nb cedage edites fact.
     *
     * @var int|null
     */
    private $nbCedageEditesFact;

    /**
     * Nb centr imprimees.
     *
     * @var int|null
     */
    private $nbCentrImprimees;

    /**
     * Nb centr imprimees a deduire.
     *
     * @var int|null
     */
    private $nbCentrImprimeesADeduire;

    /**
     * Nb centr imprimees fact.
     *
     * @var int|null
     */
    private $nbCentrImprimeesFact;

    /**
     * Nb ech imprimees.
     *
     * @var int|null
     */
    private $nbEchImprimees;

    /**
     * Nb ech imprimees a deduire.
     *
     * @var int|null
     */
    private $nbEchImprimeesADeduire;

    /**
     * Nb ech imprimees fact.
     *
     * @var int|null
     */
    private $nbEchImprimeesFact;

    /**
     * Nb fic ascii emis.
     *
     * @var int|null
     */
    private $nbFicAsciiEmis;

    /**
     * Nb fic ascii emis a deduire.
     *
     * @var int|null
     */
    private $nbFicAsciiEmisADeduire;

    /**
     * Nb fic ascii emis fact.
     *
     * @var int|null
     */
    private $nbFicAsciiEmisFact;

    /**
     * Nb gl imprimees.
     *
     * @var int|null
     */
    private $nbGlImprimees;

    /**
     * Nb gl imprimees a deduire.
     *
     * @var int|null
     */
    private $nbGlImprimeesADeduire;

    /**
     * Nb gl imprimees fact.
     *
     * @var int|null
     */
    private $nbGlImprimeesFact;

    /**
     * Nb jrn imprimees.
     *
     * @var int|null
     */
    private $nbJrnImprimees;

    /**
     * Nb jrn imprimees a deduire.
     *
     * @var int|null
     */
    private $nbJrnImprimeesADeduire;

    /**
     * Nb jrn imprimees fact.
     *
     * @var int|null
     */
    private $nbJrnImprimeesFact;

    /**
     * Nb liasses fisc editees.
     *
     * @var int|null
     */
    private $nbLiassesFiscEditees;

    /**
     * Nb liasses fisc editees a deduire.
     *
     * @var int|null
     */
    private $nbLiassesFiscEditeesADeduire;

    /**
     * Nb liasses fisc editees fact.
     *
     * @var int|null
     */
    private $nbLiassesFiscEditeesFact;

    /**
     * Nb lig etebac traitees.
     *
     * @var int|null
     */
    private $nbLigEtebacTraitees;

    /**
     * Nb lig etebac traitees a deduire.
     *
     * @var int|null
     */
    private $nbLigEtebacTraiteesADeduire;

    /**
     * Nb lig etebac traitees fact.
     *
     * @var int|null
     */
    private $nbLigEtebacTraiteesFact;

    /**
     * Nb rel cli imprimees.
     *
     * @var int|null
     */
    private $nbRelCliImprimees;

    /**
     * Nb rel cli imprimees a deduire.
     *
     * @var int|null
     */
    private $nbRelCliImprimeesADeduire;

    /**
     * Nb rel cli imprimees fact.
     *
     * @var int|null
     */
    private $nbRelCliImprimeesFact;

    /**
     * Nb tab amort imprimes.
     *
     * @var int|null
     */
    private $nbTabAmortImprimes;

    /**
     * Nb tab amort imprimes a deduire.
     *
     * @var int|null
     */
    private $nbTabAmortImprimesADeduire;

    /**
     * Nb tab amort imprimes fact.
     *
     * @var int|null
     */
    private $nbTabAmortImprimesFact;

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
     * Get the nb activite imprimees.
     *
     * @return int|null Returns the nb activite imprimees.
     */
    public function getNbActiviteImprimees(): ?int {
        return $this->nbActiviteImprimees;
    }

    /**
     * Get the nb activite imprimees a deduire.
     *
     * @return int|null Returns the nb activite imprimees a deduire.
     */
    public function getNbActiviteImprimeesADeduire(): ?int {
        return $this->nbActiviteImprimeesADeduire;
    }

    /**
     * Get the nb activite imprimees fact.
     *
     * @return int|null Returns the nb activite imprimees fact.
     */
    public function getNbActiviteImprimeesFact(): ?int {
        return $this->nbActiviteImprimeesFact;
    }

    /**
     * Get the nb ana imprimees.
     *
     * @return int|null Returns the nb ana imprimees.
     */
    public function getNbAnaImprimees(): ?int {
        return $this->nbAnaImprimees;
    }

    /**
     * Get the nb ana imprimees a deduire.
     *
     * @return int|null Returns the nb ana imprimees a deduire.
     */
    public function getNbAnaImprimeesADeduire(): ?int {
        return $this->nbAnaImprimeesADeduire;
    }

    /**
     * Get the nb ana imprimees fact.
     *
     * @return int|null Returns the nb ana imprimees fact.
     */
    public function getNbAnaImprimeesFact(): ?int {
        return $this->nbAnaImprimeesFact;
    }

    /**
     * Get the nb annexes editees.
     *
     * @return int|null Returns the nb annexes editees.
     */
    public function getNbAnnexesEditees(): ?int {
        return $this->nbAnnexesEditees;
    }

    /**
     * Get the nb annexes editees a deduire.
     *
     * @return int|null Returns the nb annexes editees a deduire.
     */
    public function getNbAnnexesEditeesADeduire(): ?int {
        return $this->nbAnnexesEditeesADeduire;
    }

    /**
     * Get the nb annexes editees fact.
     *
     * @return int|null Returns the nb annexes editees fact.
     */
    public function getNbAnnexesEditeesFact(): ?int {
        return $this->nbAnnexesEditeesFact;
    }

    /**
     * Get the nb bal agee imprimees.
     *
     * @return int|null Returns the nb bal agee imprimees.
     */
    public function getNbBalAgeeImprimees(): ?int {
        return $this->nbBalAgeeImprimees;
    }

    /**
     * Get the nb bal agee imprimees a deduire.
     *
     * @return int|null Returns the nb bal agee imprimees a deduire.
     */
    public function getNbBalAgeeImprimeesADeduire(): ?int {
        return $this->nbBalAgeeImprimeesADeduire;
    }

    /**
     * Get the nb bal agee imprimees fact.
     *
     * @return int|null Returns the nb bal agee imprimees fact.
     */
    public function getNbBalAgeeImprimeesFact(): ?int {
        return $this->nbBalAgeeImprimeesFact;
    }

    /**
     * Get the nb bal imprimees.
     *
     * @return int|null Returns the nb bal imprimees.
     */
    public function getNbBalImprimees(): ?int {
        return $this->nbBalImprimees;
    }

    /**
     * Get the nb bal imprimees a deduire.
     *
     * @return int|null Returns the nb bal imprimees a deduire.
     */
    public function getNbBalImprimeesADeduire(): ?int {
        return $this->nbBalImprimeesADeduire;
    }

    /**
     * Get the nb bal imprimees fact.
     *
     * @return int|null Returns the nb bal imprimees fact.
     */
    public function getNbBalImprimeesFact(): ?int {
        return $this->nbBalImprimeesFact;
    }

    /**
     * Get the nb bilans edites.
     *
     * @return int|null Returns the nb bilans edites.
     */
    public function getNbBilansEdites(): ?int {
        return $this->nbBilansEdites;
    }

    /**
     * Get the nb bilans edites a deduire.
     *
     * @return int|null Returns the nb bilans edites a deduire.
     */
    public function getNbBilansEditesADeduire(): ?int {
        return $this->nbBilansEditesADeduire;
    }

    /**
     * Get the nb bilans edites fact.
     *
     * @return int|null Returns the nb bilans edites fact.
     */
    public function getNbBilansEditesFact(): ?int {
        return $this->nbBilansEditesFact;
    }

    /**
     * Get the nb cedage edites.
     *
     * @return int|null Returns the nb cedage edites.
     */
    public function getNbCedageEdites(): ?int {
        return $this->nbCedageEdites;
    }

    /**
     * Get the nb cedage edites a deduire.
     *
     * @return int|null Returns the nb cedage edites a deduire.
     */
    public function getNbCedageEditesADeduire(): ?int {
        return $this->nbCedageEditesADeduire;
    }

    /**
     * Get the nb cedage edites fact.
     *
     * @return int|null Returns the nb cedage edites fact.
     */
    public function getNbCedageEditesFact(): ?int {
        return $this->nbCedageEditesFact;
    }

    /**
     * Get the nb centr imprimees.
     *
     * @return int|null Returns the nb centr imprimees.
     */
    public function getNbCentrImprimees(): ?int {
        return $this->nbCentrImprimees;
    }

    /**
     * Get the nb centr imprimees a deduire.
     *
     * @return int|null Returns the nb centr imprimees a deduire.
     */
    public function getNbCentrImprimeesADeduire(): ?int {
        return $this->nbCentrImprimeesADeduire;
    }

    /**
     * Get the nb centr imprimees fact.
     *
     * @return int|null Returns the nb centr imprimees fact.
     */
    public function getNbCentrImprimeesFact(): ?int {
        return $this->nbCentrImprimeesFact;
    }

    /**
     * Get the nb ech imprimees.
     *
     * @return int|null Returns the nb ech imprimees.
     */
    public function getNbEchImprimees(): ?int {
        return $this->nbEchImprimees;
    }

    /**
     * Get the nb ech imprimees a deduire.
     *
     * @return int|null Returns the nb ech imprimees a deduire.
     */
    public function getNbEchImprimeesADeduire(): ?int {
        return $this->nbEchImprimeesADeduire;
    }

    /**
     * Get the nb ech imprimees fact.
     *
     * @return int|null Returns the nb ech imprimees fact.
     */
    public function getNbEchImprimeesFact(): ?int {
        return $this->nbEchImprimeesFact;
    }

    /**
     * Get the nb fic ascii emis.
     *
     * @return int|null Returns the nb fic ascii emis.
     */
    public function getNbFicAsciiEmis(): ?int {
        return $this->nbFicAsciiEmis;
    }

    /**
     * Get the nb fic ascii emis a deduire.
     *
     * @return int|null Returns the nb fic ascii emis a deduire.
     */
    public function getNbFicAsciiEmisADeduire(): ?int {
        return $this->nbFicAsciiEmisADeduire;
    }

    /**
     * Get the nb fic ascii emis fact.
     *
     * @return int|null Returns the nb fic ascii emis fact.
     */
    public function getNbFicAsciiEmisFact(): ?int {
        return $this->nbFicAsciiEmisFact;
    }

    /**
     * Get the nb gl imprimees.
     *
     * @return int|null Returns the nb gl imprimees.
     */
    public function getNbGlImprimees(): ?int {
        return $this->nbGlImprimees;
    }

    /**
     * Get the nb gl imprimees a deduire.
     *
     * @return int|null Returns the nb gl imprimees a deduire.
     */
    public function getNbGlImprimeesADeduire(): ?int {
        return $this->nbGlImprimeesADeduire;
    }

    /**
     * Get the nb gl imprimees fact.
     *
     * @return int|null Returns the nb gl imprimees fact.
     */
    public function getNbGlImprimeesFact(): ?int {
        return $this->nbGlImprimeesFact;
    }

    /**
     * Get the nb jrn imprimees.
     *
     * @return int|null Returns the nb jrn imprimees.
     */
    public function getNbJrnImprimees(): ?int {
        return $this->nbJrnImprimees;
    }

    /**
     * Get the nb jrn imprimees a deduire.
     *
     * @return int|null Returns the nb jrn imprimees a deduire.
     */
    public function getNbJrnImprimeesADeduire(): ?int {
        return $this->nbJrnImprimeesADeduire;
    }

    /**
     * Get the nb jrn imprimees fact.
     *
     * @return int|null Returns the nb jrn imprimees fact.
     */
    public function getNbJrnImprimeesFact(): ?int {
        return $this->nbJrnImprimeesFact;
    }

    /**
     * Get the nb liasses fisc editees.
     *
     * @return int|null Returns the nb liasses fisc editees.
     */
    public function getNbLiassesFiscEditees(): ?int {
        return $this->nbLiassesFiscEditees;
    }

    /**
     * Get the nb liasses fisc editees a deduire.
     *
     * @return int|null Returns the nb liasses fisc editees a deduire.
     */
    public function getNbLiassesFiscEditeesADeduire(): ?int {
        return $this->nbLiassesFiscEditeesADeduire;
    }

    /**
     * Get the nb liasses fisc editees fact.
     *
     * @return int|null Returns the nb liasses fisc editees fact.
     */
    public function getNbLiassesFiscEditeesFact(): ?int {
        return $this->nbLiassesFiscEditeesFact;
    }

    /**
     * Get the nb lig etebac traitees.
     *
     * @return int|null Returns the nb lig etebac traitees.
     */
    public function getNbLigEtebacTraitees(): ?int {
        return $this->nbLigEtebacTraitees;
    }

    /**
     * Get the nb lig etebac traitees a deduire.
     *
     * @return int|null Returns the nb lig etebac traitees a deduire.
     */
    public function getNbLigEtebacTraiteesADeduire(): ?int {
        return $this->nbLigEtebacTraiteesADeduire;
    }

    /**
     * Get the nb lig etebac traitees fact.
     *
     * @return int|null Returns the nb lig etebac traitees fact.
     */
    public function getNbLigEtebacTraiteesFact(): ?int {
        return $this->nbLigEtebacTraiteesFact;
    }

    /**
     * Get the nb rel cli imprimees.
     *
     * @return int|null Returns the nb rel cli imprimees.
     */
    public function getNbRelCliImprimees(): ?int {
        return $this->nbRelCliImprimees;
    }

    /**
     * Get the nb rel cli imprimees a deduire.
     *
     * @return int|null Returns the nb rel cli imprimees a deduire.
     */
    public function getNbRelCliImprimeesADeduire(): ?int {
        return $this->nbRelCliImprimeesADeduire;
    }

    /**
     * Get the nb rel cli imprimees fact.
     *
     * @return int|null Returns the nb rel cli imprimees fact.
     */
    public function getNbRelCliImprimeesFact(): ?int {
        return $this->nbRelCliImprimeesFact;
    }

    /**
     * Get the nb tab amort imprimes.
     *
     * @return int|null Returns the nb tab amort imprimes.
     */
    public function getNbTabAmortImprimes(): ?int {
        return $this->nbTabAmortImprimes;
    }

    /**
     * Get the nb tab amort imprimes a deduire.
     *
     * @return int|null Returns the nb tab amort imprimes a deduire.
     */
    public function getNbTabAmortImprimesADeduire(): ?int {
        return $this->nbTabAmortImprimesADeduire;
    }

    /**
     * Get the nb tab amort imprimes fact.
     *
     * @return int|null Returns the nb tab amort imprimes fact.
     */
    public function getNbTabAmortImprimesFact(): ?int {
        return $this->nbTabAmortImprimesFact;
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
     * Set the nb activite imprimees.
     *
     * @param int|null $nbActiviteImprimees The nb activite imprimees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbActiviteImprimees(?int $nbActiviteImprimees): Compteur {
        $this->nbActiviteImprimees = $nbActiviteImprimees;
        return $this;
    }

    /**
     * Set the nb activite imprimees a deduire.
     *
     * @param int|null $nbActiviteImprimeesADeduire The nb activite imprimees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbActiviteImprimeesADeduire(?int $nbActiviteImprimeesADeduire): Compteur {
        $this->nbActiviteImprimeesADeduire = $nbActiviteImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb activite imprimees fact.
     *
     * @param int|null $nbActiviteImprimeesFact The nb activite imprimees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbActiviteImprimeesFact(?int $nbActiviteImprimeesFact): Compteur {
        $this->nbActiviteImprimeesFact = $nbActiviteImprimeesFact;
        return $this;
    }

    /**
     * Set the nb ana imprimees.
     *
     * @param int|null $nbAnaImprimees The nb ana imprimees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAnaImprimees(?int $nbAnaImprimees): Compteur {
        $this->nbAnaImprimees = $nbAnaImprimees;
        return $this;
    }

    /**
     * Set the nb ana imprimees a deduire.
     *
     * @param int|null $nbAnaImprimeesADeduire The nb ana imprimees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAnaImprimeesADeduire(?int $nbAnaImprimeesADeduire): Compteur {
        $this->nbAnaImprimeesADeduire = $nbAnaImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb ana imprimees fact.
     *
     * @param int|null $nbAnaImprimeesFact The nb ana imprimees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAnaImprimeesFact(?int $nbAnaImprimeesFact): Compteur {
        $this->nbAnaImprimeesFact = $nbAnaImprimeesFact;
        return $this;
    }

    /**
     * Set the nb annexes editees.
     *
     * @param int|null $nbAnnexesEditees The nb annexes editees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAnnexesEditees(?int $nbAnnexesEditees): Compteur {
        $this->nbAnnexesEditees = $nbAnnexesEditees;
        return $this;
    }

    /**
     * Set the nb annexes editees a deduire.
     *
     * @param int|null $nbAnnexesEditeesADeduire The nb annexes editees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAnnexesEditeesADeduire(?int $nbAnnexesEditeesADeduire): Compteur {
        $this->nbAnnexesEditeesADeduire = $nbAnnexesEditeesADeduire;
        return $this;
    }

    /**
     * Set the nb annexes editees fact.
     *
     * @param int|null $nbAnnexesEditeesFact The nb annexes editees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAnnexesEditeesFact(?int $nbAnnexesEditeesFact): Compteur {
        $this->nbAnnexesEditeesFact = $nbAnnexesEditeesFact;
        return $this;
    }

    /**
     * Set the nb bal agee imprimees.
     *
     * @param int|null $nbBalAgeeImprimees The nb bal agee imprimees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBalAgeeImprimees(?int $nbBalAgeeImprimees): Compteur {
        $this->nbBalAgeeImprimees = $nbBalAgeeImprimees;
        return $this;
    }

    /**
     * Set the nb bal agee imprimees a deduire.
     *
     * @param int|null $nbBalAgeeImprimeesADeduire The nb bal agee imprimees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBalAgeeImprimeesADeduire(?int $nbBalAgeeImprimeesADeduire): Compteur {
        $this->nbBalAgeeImprimeesADeduire = $nbBalAgeeImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb bal agee imprimees fact.
     *
     * @param int|null $nbBalAgeeImprimeesFact The nb bal agee imprimees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBalAgeeImprimeesFact(?int $nbBalAgeeImprimeesFact): Compteur {
        $this->nbBalAgeeImprimeesFact = $nbBalAgeeImprimeesFact;
        return $this;
    }

    /**
     * Set the nb bal imprimees.
     *
     * @param int|null $nbBalImprimees The nb bal imprimees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBalImprimees(?int $nbBalImprimees): Compteur {
        $this->nbBalImprimees = $nbBalImprimees;
        return $this;
    }

    /**
     * Set the nb bal imprimees a deduire.
     *
     * @param int|null $nbBalImprimeesADeduire The nb bal imprimees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBalImprimeesADeduire(?int $nbBalImprimeesADeduire): Compteur {
        $this->nbBalImprimeesADeduire = $nbBalImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb bal imprimees fact.
     *
     * @param int|null $nbBalImprimeesFact The nb bal imprimees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBalImprimeesFact(?int $nbBalImprimeesFact): Compteur {
        $this->nbBalImprimeesFact = $nbBalImprimeesFact;
        return $this;
    }

    /**
     * Set the nb bilans edites.
     *
     * @param int|null $nbBilansEdites The nb bilans edites.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBilansEdites(?int $nbBilansEdites): Compteur {
        $this->nbBilansEdites = $nbBilansEdites;
        return $this;
    }

    /**
     * Set the nb bilans edites a deduire.
     *
     * @param int|null $nbBilansEditesADeduire The nb bilans edites a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBilansEditesADeduire(?int $nbBilansEditesADeduire): Compteur {
        $this->nbBilansEditesADeduire = $nbBilansEditesADeduire;
        return $this;
    }

    /**
     * Set the nb bilans edites fact.
     *
     * @param int|null $nbBilansEditesFact The nb bilans edites fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBilansEditesFact(?int $nbBilansEditesFact): Compteur {
        $this->nbBilansEditesFact = $nbBilansEditesFact;
        return $this;
    }

    /**
     * Set the nb cedage edites.
     *
     * @param int|null $nbCedageEdites The nb cedage edites.
     * @return Compteur Returns this Compteur.
     */
    public function setNbCedageEdites(?int $nbCedageEdites): Compteur {
        $this->nbCedageEdites = $nbCedageEdites;
        return $this;
    }

    /**
     * Set the nb cedage edites a deduire.
     *
     * @param int|null $nbCedageEditesADeduire The nb cedage edites a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbCedageEditesADeduire(?int $nbCedageEditesADeduire): Compteur {
        $this->nbCedageEditesADeduire = $nbCedageEditesADeduire;
        return $this;
    }

    /**
     * Set the nb cedage edites fact.
     *
     * @param int|null $nbCedageEditesFact The nb cedage edites fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbCedageEditesFact(?int $nbCedageEditesFact): Compteur {
        $this->nbCedageEditesFact = $nbCedageEditesFact;
        return $this;
    }

    /**
     * Set the nb centr imprimees.
     *
     * @param int|null $nbCentrImprimees The nb centr imprimees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbCentrImprimees(?int $nbCentrImprimees): Compteur {
        $this->nbCentrImprimees = $nbCentrImprimees;
        return $this;
    }

    /**
     * Set the nb centr imprimees a deduire.
     *
     * @param int|null $nbCentrImprimeesADeduire The nb centr imprimees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbCentrImprimeesADeduire(?int $nbCentrImprimeesADeduire): Compteur {
        $this->nbCentrImprimeesADeduire = $nbCentrImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb centr imprimees fact.
     *
     * @param int|null $nbCentrImprimeesFact The nb centr imprimees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbCentrImprimeesFact(?int $nbCentrImprimeesFact): Compteur {
        $this->nbCentrImprimeesFact = $nbCentrImprimeesFact;
        return $this;
    }

    /**
     * Set the nb ech imprimees.
     *
     * @param int|null $nbEchImprimees The nb ech imprimees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbEchImprimees(?int $nbEchImprimees): Compteur {
        $this->nbEchImprimees = $nbEchImprimees;
        return $this;
    }

    /**
     * Set the nb ech imprimees a deduire.
     *
     * @param int|null $nbEchImprimeesADeduire The nb ech imprimees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbEchImprimeesADeduire(?int $nbEchImprimeesADeduire): Compteur {
        $this->nbEchImprimeesADeduire = $nbEchImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb ech imprimees fact.
     *
     * @param int|null $nbEchImprimeesFact The nb ech imprimees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbEchImprimeesFact(?int $nbEchImprimeesFact): Compteur {
        $this->nbEchImprimeesFact = $nbEchImprimeesFact;
        return $this;
    }

    /**
     * Set the nb fic ascii emis.
     *
     * @param int|null $nbFicAsciiEmis The nb fic ascii emis.
     * @return Compteur Returns this Compteur.
     */
    public function setNbFicAsciiEmis(?int $nbFicAsciiEmis): Compteur {
        $this->nbFicAsciiEmis = $nbFicAsciiEmis;
        return $this;
    }

    /**
     * Set the nb fic ascii emis a deduire.
     *
     * @param int|null $nbFicAsciiEmisADeduire The nb fic ascii emis a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbFicAsciiEmisADeduire(?int $nbFicAsciiEmisADeduire): Compteur {
        $this->nbFicAsciiEmisADeduire = $nbFicAsciiEmisADeduire;
        return $this;
    }

    /**
     * Set the nb fic ascii emis fact.
     *
     * @param int|null $nbFicAsciiEmisFact The nb fic ascii emis fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbFicAsciiEmisFact(?int $nbFicAsciiEmisFact): Compteur {
        $this->nbFicAsciiEmisFact = $nbFicAsciiEmisFact;
        return $this;
    }

    /**
     * Set the nb gl imprimees.
     *
     * @param int|null $nbGlImprimees The nb gl imprimees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbGlImprimees(?int $nbGlImprimees): Compteur {
        $this->nbGlImprimees = $nbGlImprimees;
        return $this;
    }

    /**
     * Set the nb gl imprimees a deduire.
     *
     * @param int|null $nbGlImprimeesADeduire The nb gl imprimees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbGlImprimeesADeduire(?int $nbGlImprimeesADeduire): Compteur {
        $this->nbGlImprimeesADeduire = $nbGlImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb gl imprimees fact.
     *
     * @param int|null $nbGlImprimeesFact The nb gl imprimees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbGlImprimeesFact(?int $nbGlImprimeesFact): Compteur {
        $this->nbGlImprimeesFact = $nbGlImprimeesFact;
        return $this;
    }

    /**
     * Set the nb jrn imprimees.
     *
     * @param int|null $nbJrnImprimees The nb jrn imprimees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbJrnImprimees(?int $nbJrnImprimees): Compteur {
        $this->nbJrnImprimees = $nbJrnImprimees;
        return $this;
    }

    /**
     * Set the nb jrn imprimees a deduire.
     *
     * @param int|null $nbJrnImprimeesADeduire The nb jrn imprimees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbJrnImprimeesADeduire(?int $nbJrnImprimeesADeduire): Compteur {
        $this->nbJrnImprimeesADeduire = $nbJrnImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb jrn imprimees fact.
     *
     * @param int|null $nbJrnImprimeesFact The nb jrn imprimees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbJrnImprimeesFact(?int $nbJrnImprimeesFact): Compteur {
        $this->nbJrnImprimeesFact = $nbJrnImprimeesFact;
        return $this;
    }

    /**
     * Set the nb liasses fisc editees.
     *
     * @param int|null $nbLiassesFiscEditees The nb liasses fisc editees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbLiassesFiscEditees(?int $nbLiassesFiscEditees): Compteur {
        $this->nbLiassesFiscEditees = $nbLiassesFiscEditees;
        return $this;
    }

    /**
     * Set the nb liasses fisc editees a deduire.
     *
     * @param int|null $nbLiassesFiscEditeesADeduire The nb liasses fisc editees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbLiassesFiscEditeesADeduire(?int $nbLiassesFiscEditeesADeduire): Compteur {
        $this->nbLiassesFiscEditeesADeduire = $nbLiassesFiscEditeesADeduire;
        return $this;
    }

    /**
     * Set the nb liasses fisc editees fact.
     *
     * @param int|null $nbLiassesFiscEditeesFact The nb liasses fisc editees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbLiassesFiscEditeesFact(?int $nbLiassesFiscEditeesFact): Compteur {
        $this->nbLiassesFiscEditeesFact = $nbLiassesFiscEditeesFact;
        return $this;
    }

    /**
     * Set the nb lig etebac traitees.
     *
     * @param int|null $nbLigEtebacTraitees The nb lig etebac traitees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbLigEtebacTraitees(?int $nbLigEtebacTraitees): Compteur {
        $this->nbLigEtebacTraitees = $nbLigEtebacTraitees;
        return $this;
    }

    /**
     * Set the nb lig etebac traitees a deduire.
     *
     * @param int|null $nbLigEtebacTraiteesADeduire The nb lig etebac traitees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbLigEtebacTraiteesADeduire(?int $nbLigEtebacTraiteesADeduire): Compteur {
        $this->nbLigEtebacTraiteesADeduire = $nbLigEtebacTraiteesADeduire;
        return $this;
    }

    /**
     * Set the nb lig etebac traitees fact.
     *
     * @param int|null $nbLigEtebacTraiteesFact The nb lig etebac traitees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbLigEtebacTraiteesFact(?int $nbLigEtebacTraiteesFact): Compteur {
        $this->nbLigEtebacTraiteesFact = $nbLigEtebacTraiteesFact;
        return $this;
    }

    /**
     * Set the nb rel cli imprimees.
     *
     * @param int|null $nbRelCliImprimees The nb rel cli imprimees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbRelCliImprimees(?int $nbRelCliImprimees): Compteur {
        $this->nbRelCliImprimees = $nbRelCliImprimees;
        return $this;
    }

    /**
     * Set the nb rel cli imprimees a deduire.
     *
     * @param int|null $nbRelCliImprimeesADeduire The nb rel cli imprimees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbRelCliImprimeesADeduire(?int $nbRelCliImprimeesADeduire): Compteur {
        $this->nbRelCliImprimeesADeduire = $nbRelCliImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb rel cli imprimees fact.
     *
     * @param int|null $nbRelCliImprimeesFact The nb rel cli imprimees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbRelCliImprimeesFact(?int $nbRelCliImprimeesFact): Compteur {
        $this->nbRelCliImprimeesFact = $nbRelCliImprimeesFact;
        return $this;
    }

    /**
     * Set the nb tab amort imprimes.
     *
     * @param int|null $nbTabAmortImprimes The nb tab amort imprimes.
     * @return Compteur Returns this Compteur.
     */
    public function setNbTabAmortImprimes(?int $nbTabAmortImprimes): Compteur {
        $this->nbTabAmortImprimes = $nbTabAmortImprimes;
        return $this;
    }

    /**
     * Set the nb tab amort imprimes a deduire.
     *
     * @param int|null $nbTabAmortImprimesADeduire The nb tab amort imprimes a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbTabAmortImprimesADeduire(?int $nbTabAmortImprimesADeduire): Compteur {
        $this->nbTabAmortImprimesADeduire = $nbTabAmortImprimesADeduire;
        return $this;
    }

    /**
     * Set the nb tab amort imprimes fact.
     *
     * @param int|null $nbTabAmortImprimesFact The nb tab amort imprimes fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbTabAmortImprimesFact(?int $nbTabAmortImprimesFact): Compteur {
        $this->nbTabAmortImprimesFact = $nbTabAmortImprimesFact;
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
