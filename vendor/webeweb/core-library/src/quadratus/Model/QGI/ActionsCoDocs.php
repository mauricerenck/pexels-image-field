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

use DateTime;

/**
 * Actions co docs.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ActionsCoDocs {

    /**
     * Auteur.
     *
     * @var string|null
     */
    private $auteur;

    /**
     * Code action.
     *
     * @var string|null
     */
    private $codeAction;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code doc.
     *
     * @var string|null
     */
    private $codeDoc;

    /**
     * Code manif.
     *
     * @var string|null
     */
    private $codeManif;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Emplacement fichier.
     *
     * @var string|null
     */
    private $emplacementFichier;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Numero.
     *
     * @var int|null
     */
    private $numero;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the auteur.
     *
     * @return string|null Returns the auteur.
     */
    public function getAuteur(): ?string {
        return $this->auteur;
    }

    /**
     * Get the code action.
     *
     * @return string|null Returns the code action.
     */
    public function getCodeAction(): ?string {
        return $this->codeAction;
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
     * Get the code doc.
     *
     * @return string|null Returns the code doc.
     */
    public function getCodeDoc(): ?string {
        return $this->codeDoc;
    }

    /**
     * Get the code manif.
     *
     * @return string|null Returns the code manif.
     */
    public function getCodeManif(): ?string {
        return $this->codeManif;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation(): ?DateTime {
        return $this->dateCreation;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification(): ?DateTime {
        return $this->dateModification;
    }

    /**
     * Get the emplacement fichier.
     *
     * @return string|null Returns the emplacement fichier.
     */
    public function getEmplacementFichier(): ?string {
        return $this->emplacementFichier;
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
     * Get the numero.
     *
     * @return int|null Returns the numero.
     */
    public function getNumero(): ?int {
        return $this->numero;
    }

    /**
     * Set the auteur.
     *
     * @param string|null $auteur The auteur.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setAuteur(?string $auteur): ActionsCoDocs {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * Set the code action.
     *
     * @param string|null $codeAction The code action.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setCodeAction(?string $codeAction): ActionsCoDocs {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setCodeClient(?string $codeClient): ActionsCoDocs {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code doc.
     *
     * @param string|null $codeDoc The code doc.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setCodeDoc(?string $codeDoc): ActionsCoDocs {
        $this->codeDoc = $codeDoc;
        return $this;
    }

    /**
     * Set the code manif.
     *
     * @param string|null $codeManif The code manif.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setCodeManif(?string $codeManif): ActionsCoDocs {
        $this->codeManif = $codeManif;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setDateCreation(?DateTime $dateCreation): ActionsCoDocs {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setDateModification(?DateTime $dateModification): ActionsCoDocs {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the emplacement fichier.
     *
     * @param string|null $emplacementFichier The emplacement fichier.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setEmplacementFichier(?string $emplacementFichier): ActionsCoDocs {
        $this->emplacementFichier = $emplacementFichier;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setLibelle(?string $libelle): ActionsCoDocs {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setNumero(?int $numero): ActionsCoDocs {
        $this->numero = $numero;
        return $this;
    }
}
