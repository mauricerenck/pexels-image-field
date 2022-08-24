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

/**
 * Liaisons destinataires.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class LiaisonsDestinataires {

    /**
     * Agence.
     *
     * @var bool|null
     */
    private $agence;

    /**
     * Chemin.
     *
     * @var string|null
     */
    private $chemin;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Email.
     *
     * @var string|null
     */
    private $email;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Machine.
     *
     * @var string|null
     */
    private $machine;

    /**
     * Mot de passe.
     *
     * @var string|null
     */
    private $motDePasse;

    /**
     * Partage.
     *
     * @var string|null
     */
    private $partage;

    /**
     * Selection article.
     *
     * @var string|null
     */
    private $selectionArticle;

    /**
     * Selection client.
     *
     * @var string|null
     */
    private $selectionClient;

    /**
     * Selection fournisseur.
     *
     * @var string|null
     */
    private $selectionFournisseur;

    /**
     * Type liaison.
     *
     * @var string|null
     */
    private $typeLiaison;

    /**
     * Utilisateur.
     *
     * @var string|null
     */
    private $utilisateur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the agence.
     *
     * @return bool|null Returns the agence.
     */
    public function getAgence(): ?bool {
        return $this->agence;
    }

    /**
     * Get the chemin.
     *
     * @return string|null Returns the chemin.
     */
    public function getChemin(): ?string {
        return $this->chemin;
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the email.
     *
     * @return string|null Returns the email.
     */
    public function getEmail(): ?string {
        return $this->email;
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
     * Get the machine.
     *
     * @return string|null Returns the machine.
     */
    public function getMachine(): ?string {
        return $this->machine;
    }

    /**
     * Get the mot de passe.
     *
     * @return string|null Returns the mot de passe.
     */
    public function getMotDePasse(): ?string {
        return $this->motDePasse;
    }

    /**
     * Get the partage.
     *
     * @return string|null Returns the partage.
     */
    public function getPartage(): ?string {
        return $this->partage;
    }

    /**
     * Get the selection article.
     *
     * @return string|null Returns the selection article.
     */
    public function getSelectionArticle(): ?string {
        return $this->selectionArticle;
    }

    /**
     * Get the selection client.
     *
     * @return string|null Returns the selection client.
     */
    public function getSelectionClient(): ?string {
        return $this->selectionClient;
    }

    /**
     * Get the selection fournisseur.
     *
     * @return string|null Returns the selection fournisseur.
     */
    public function getSelectionFournisseur(): ?string {
        return $this->selectionFournisseur;
    }

    /**
     * Get the type liaison.
     *
     * @return string|null Returns the type liaison.
     */
    public function getTypeLiaison(): ?string {
        return $this->typeLiaison;
    }

    /**
     * Get the utilisateur.
     *
     * @return string|null Returns the utilisateur.
     */
    public function getUtilisateur(): ?string {
        return $this->utilisateur;
    }

    /**
     * Set the agence.
     *
     * @param bool|null $agence The agence.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setAgence(?bool $agence): LiaisonsDestinataires {
        $this->agence = $agence;
        return $this;
    }

    /**
     * Set the chemin.
     *
     * @param string|null $chemin The chemin.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setChemin(?string $chemin): LiaisonsDestinataires {
        $this->chemin = $chemin;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setCode(?string $code): LiaisonsDestinataires {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setEmail(?string $email): LiaisonsDestinataires {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setIntitule(?string $intitule): LiaisonsDestinataires {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the machine.
     *
     * @param string|null $machine The machine.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setMachine(?string $machine): LiaisonsDestinataires {
        $this->machine = $machine;
        return $this;
    }

    /**
     * Set the mot de passe.
     *
     * @param string|null $motDePasse The mot de passe.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setMotDePasse(?string $motDePasse): LiaisonsDestinataires {
        $this->motDePasse = $motDePasse;
        return $this;
    }

    /**
     * Set the partage.
     *
     * @param string|null $partage The partage.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setPartage(?string $partage): LiaisonsDestinataires {
        $this->partage = $partage;
        return $this;
    }

    /**
     * Set the selection article.
     *
     * @param string|null $selectionArticle The selection article.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setSelectionArticle(?string $selectionArticle): LiaisonsDestinataires {
        $this->selectionArticle = $selectionArticle;
        return $this;
    }

    /**
     * Set the selection client.
     *
     * @param string|null $selectionClient The selection client.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setSelectionClient(?string $selectionClient): LiaisonsDestinataires {
        $this->selectionClient = $selectionClient;
        return $this;
    }

    /**
     * Set the selection fournisseur.
     *
     * @param string|null $selectionFournisseur The selection fournisseur.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setSelectionFournisseur(?string $selectionFournisseur): LiaisonsDestinataires {
        $this->selectionFournisseur = $selectionFournisseur;
        return $this;
    }

    /**
     * Set the type liaison.
     *
     * @param string|null $typeLiaison The type liaison.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setTypeLiaison(?string $typeLiaison): LiaisonsDestinataires {
        $this->typeLiaison = $typeLiaison;
        return $this;
    }

    /**
     * Set the utilisateur.
     *
     * @param string|null $utilisateur The utilisateur.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setUtilisateur(?string $utilisateur): LiaisonsDestinataires {
        $this->utilisateur = $utilisateur;
        return $this;
    }
}
