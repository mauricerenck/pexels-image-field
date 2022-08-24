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
 * Devis program lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DevisProgramLignes {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code echelle.
     *
     * @var string|null
     */
    private $codeEchelle;

    /**
     * Code operation.
     *
     * @var string|null
     */
    private $codeOperation;

    /**
     * Code programme.
     *
     * @var string|null
     */
    private $codeProgramme;

    /**
     * Coefficient.
     *
     * @var float|null
     */
    private $coefficient;

    /**
     * Note resultat.
     *
     * @var float|null
     */
    private $noteResultat;

    /**
     * Num devis.
     *
     * @var string|null
     */
    private $numDevis;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Num ligne prog.
     *
     * @var int|null
     */
    private $numLigneProg;

    /**
     * Vitesse theorique.
     *
     * @var float|null
     */
    private $vitesseTheorique;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code echelle.
     *
     * @return string|null Returns the code echelle.
     */
    public function getCodeEchelle(): ?string {
        return $this->codeEchelle;
    }

    /**
     * Get the code operation.
     *
     * @return string|null Returns the code operation.
     */
    public function getCodeOperation(): ?string {
        return $this->codeOperation;
    }

    /**
     * Get the code programme.
     *
     * @return string|null Returns the code programme.
     */
    public function getCodeProgramme(): ?string {
        return $this->codeProgramme;
    }

    /**
     * Get the coefficient.
     *
     * @return float|null Returns the coefficient.
     */
    public function getCoefficient(): ?float {
        return $this->coefficient;
    }

    /**
     * Get the note resultat.
     *
     * @return float|null Returns the note resultat.
     */
    public function getNoteResultat(): ?float {
        return $this->noteResultat;
    }

    /**
     * Get the num devis.
     *
     * @return string|null Returns the num devis.
     */
    public function getNumDevis(): ?string {
        return $this->numDevis;
    }

    /**
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Get the num ligne prog.
     *
     * @return int|null Returns the num ligne prog.
     */
    public function getNumLigneProg(): ?int {
        return $this->numLigneProg;
    }

    /**
     * Get the vitesse theorique.
     *
     * @return float|null Returns the vitesse theorique.
     */
    public function getVitesseTheorique(): ?float {
        return $this->vitesseTheorique;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return DevisProgramLignes Returns this Devis program lignes.
     */
    public function setCodeAffaire(?string $codeAffaire): DevisProgramLignes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return DevisProgramLignes Returns this Devis program lignes.
     */
    public function setCodeChantier(?string $codeChantier): DevisProgramLignes {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return DevisProgramLignes Returns this Devis program lignes.
     */
    public function setCodeClient(?string $codeClient): DevisProgramLignes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code echelle.
     *
     * @param string|null $codeEchelle The code echelle.
     * @return DevisProgramLignes Returns this Devis program lignes.
     */
    public function setCodeEchelle(?string $codeEchelle): DevisProgramLignes {
        $this->codeEchelle = $codeEchelle;
        return $this;
    }

    /**
     * Set the code operation.
     *
     * @param string|null $codeOperation The code operation.
     * @return DevisProgramLignes Returns this Devis program lignes.
     */
    public function setCodeOperation(?string $codeOperation): DevisProgramLignes {
        $this->codeOperation = $codeOperation;
        return $this;
    }

    /**
     * Set the code programme.
     *
     * @param string|null $codeProgramme The code programme.
     * @return DevisProgramLignes Returns this Devis program lignes.
     */
    public function setCodeProgramme(?string $codeProgramme): DevisProgramLignes {
        $this->codeProgramme = $codeProgramme;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float|null $coefficient The coefficient.
     * @return DevisProgramLignes Returns this Devis program lignes.
     */
    public function setCoefficient(?float $coefficient): DevisProgramLignes {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the note resultat.
     *
     * @param float|null $noteResultat The note resultat.
     * @return DevisProgramLignes Returns this Devis program lignes.
     */
    public function setNoteResultat(?float $noteResultat): DevisProgramLignes {
        $this->noteResultat = $noteResultat;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string|null $numDevis The num devis.
     * @return DevisProgramLignes Returns this Devis program lignes.
     */
    public function setNumDevis(?string $numDevis): DevisProgramLignes {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return DevisProgramLignes Returns this Devis program lignes.
     */
    public function setNumLigne(?int $numLigne): DevisProgramLignes {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num ligne prog.
     *
     * @param int|null $numLigneProg The num ligne prog.
     * @return DevisProgramLignes Returns this Devis program lignes.
     */
    public function setNumLigneProg(?int $numLigneProg): DevisProgramLignes {
        $this->numLigneProg = $numLigneProg;
        return $this;
    }

    /**
     * Set the vitesse theorique.
     *
     * @param float|null $vitesseTheorique The vitesse theorique.
     * @return DevisProgramLignes Returns this Devis program lignes.
     */
    public function setVitesseTheorique(?float $vitesseTheorique): DevisProgramLignes {
        $this->vitesseTheorique = $vitesseTheorique;
        return $this;
    }
}
