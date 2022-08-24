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
 * Fournisseurs.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Fournisseurs {

    /**
     * Ape.
     *
     * @var string|null
     */
    private $ape;

    /**
     * Btq.
     *
     * @var string|null
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string|null
     */
    private $bureauDistributeur;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code devise.
     *
     * @var string|null
     */
    private $codeDevise;

    /**
     * Code famille.
     *
     * @var string|null
     */
    private $codeFamille;

    /**
     * Code imputation analytique.
     *
     * @var string|null
     */
    private $codeImputationAnalytique;

    /**
     * Code langue designation article.
     *
     * @var string|null
     */
    private $codeLangueDesignationArticle;

    /**
     * Code officiel commune.
     *
     * @var string|null
     */
    private $codeOfficielCommune;

    /**
     * Code pays.
     *
     * @var string|null
     */
    private $codePays;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Code reglement.
     *
     * @var string|null
     */
    private $codeReglement;

    /**
     * Code sous famille.
     *
     * @var string|null
     */
    private $codeSousFamille;

    /**
     * Code tva.
     *
     * @var string|null
     */
    private $codeTva;

    /**
     * Code tva1.
     *
     * @var string|null
     */
    private $codeTva1;

    /**
     * Code tva2.
     *
     * @var string|null
     */
    private $codeTva2;

    /**
     * Code ventil compta.
     *
     * @var string|null
     */
    private $codeVentilCompta;

    /**
     * Collectif.
     *
     * @var string|null
     */
    private $collectif;

    /**
     * Commentaires.
     *
     * @var string|null
     */
    private $commentaires;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

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
     * Delai le.
     *
     * @var int|null
     */
    private $delaiLe;

    /**
     * Delai nombre.
     *
     * @var int|null
     */
    private $delaiNombre;

    /**
     * Delai type.
     *
     * @var int|null
     */
    private $delaiType;

    /**
     * Domiciliation bancaire1.
     *
     * @var string|null
     */
    private $domiciliationBancaire1;

    /**
     * Domiciliation bancaire2.
     *
     * @var string|null
     */
    private $domiciliationBancaire2;

    /**
     * Email.
     *
     * @var string|null
     */
    private $email;

    /**
     * Facture euros.
     *
     * @var bool|null
     */
    private $factureEuros;

    /**
     * Fax.
     *
     * @var string|null
     */
    private $fax;

    /**
     * Frais fixes1.
     *
     * @var float|null
     */
    private $fraisFixes1;

    /**
     * Frais fixes2.
     *
     * @var float|null
     */
    private $fraisFixes2;

    /**
     * Frais fixes3.
     *
     * @var float|null
     */
    private $fraisFixes3;

    /**
     * Ident tva.
     *
     * @var string|null
     */
    private $identTva;

    /**
     * Montant acompte.
     *
     * @var float|null
     */
    private $montantAcompte;

    /**
     * Nb colis.
     *
     * @var int|null
     */
    private $nbColis;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Nom responsable.
     *
     * @var string|null
     */
    private $nomResponsable;

    /**
     * Nom suite.
     *
     * @var string|null
     */
    private $nomSuite;

    /**
     * Nom ville.
     *
     * @var string|null
     */
    private $nomVille;

    /**
     * Nom voie.
     *
     * @var string|null
     */
    private $nomVoie;

    /**
     * Nombre echeances.
     *
     * @var int|null
     */
    private $nombreEcheances;

    /**
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Paiement depart le.
     *
     * @var int|null
     */
    private $paiementDepartLe;

    /**
     * Paiement le.
     *
     * @var int|null
     */
    private $paiementLe;

    /**
     * Paiement nombre de jours.
     *
     * @var int|null
     */
    private $paiementNombreDeJours;

    /**
     * Poids.
     *
     * @var float|null
     */
    private $poids;

    /**
     * Portable1.
     *
     * @var string|null
     */
    private $portable1;

    /**
     * Portable2.
     *
     * @var string|null
     */
    private $portable2;

    /**
     * Rc.
     *
     * @var string|null
     */
    private $rc;

    /**
     * Reference client.
     *
     * @var string|null
     */
    private $referenceClient;

    /**
     * Remise ligne1.
     *
     * @var float|null
     */
    private $remiseLigne1;

    /**
     * Remise ligne2.
     *
     * @var float|null
     */
    private $remiseLigne2;

    /**
     * Remise ligne3.
     *
     * @var float|null
     */
    private $remiseLigne3;

    /**
     * Remise pied.
     *
     * @var float|null
     */
    private $remisePied;

    /**
     * Remise pied2.
     *
     * @var float|null
     */
    private $remisePied2;

    /**
     * Remise pied3.
     *
     * @var float|null
     */
    private $remisePied3;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Siret.
     *
     * @var string|null
     */
    private $siret;

    /**
     * Soumis taxe1.
     *
     * @var bool|null
     */
    private $soumisTaxe1;

    /**
     * Soumis taxe2.
     *
     * @var bool|null
     */
    private $soumisTaxe2;

    /**
     * Soumis taxe3.
     *
     * @var bool|null
     */
    private $soumisTaxe3;

    /**
     * Tel1.
     *
     * @var string|null
     */
    private $tel1;

    /**
     * Tel2.
     *
     * @var string|null
     */
    private $tel2;

    /**
     * Tel voiture.
     *
     * @var string|null
     */
    private $telVoiture;

    /**
     * Telex.
     *
     * @var string|null
     */
    private $telex;

    /**
     * Transporteur.
     *
     * @var string|null
     */
    private $transporteur;

    /**
     * Tva cle.
     *
     * @var string|null
     */
    private $tvaCle;

    /**
     * Tva code dossier.
     *
     * @var string|null
     */
    private $tvaCodeDossier;

    /**
     * Tva code recette.
     *
     * @var string|null
     */
    private $tvaCodeRecette;

    /**
     * Tva regime.
     *
     * @var int|null
     */
    private $tvaRegime;

    /**
     * Tx escompte achat.
     *
     * @var float|null
     */
    private $txEscompteAchat;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ape.
     *
     * @return string|null Returns the ape.
     */
    public function getApe(): ?string {
        return $this->ape;
    }

    /**
     * Get the btq.
     *
     * @return string|null Returns the btq.
     */
    public function getBtq(): ?string {
        return $this->btq;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string|null Returns the bureau distributeur.
     */
    public function getBureauDistributeur(): ?string {
        return $this->bureauDistributeur;
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
     * Get the code devise.
     *
     * @return string|null Returns the code devise.
     */
    public function getCodeDevise(): ?string {
        return $this->codeDevise;
    }

    /**
     * Get the code famille.
     *
     * @return string|null Returns the code famille.
     */
    public function getCodeFamille(): ?string {
        return $this->codeFamille;
    }

    /**
     * Get the code imputation analytique.
     *
     * @return string|null Returns the code imputation analytique.
     */
    public function getCodeImputationAnalytique(): ?string {
        return $this->codeImputationAnalytique;
    }

    /**
     * Get the code langue designation article.
     *
     * @return string|null Returns the code langue designation article.
     */
    public function getCodeLangueDesignationArticle(): ?string {
        return $this->codeLangueDesignationArticle;
    }

    /**
     * Get the code officiel commune.
     *
     * @return string|null Returns the code officiel commune.
     */
    public function getCodeOfficielCommune(): ?string {
        return $this->codeOfficielCommune;
    }

    /**
     * Get the code pays.
     *
     * @return string|null Returns the code pays.
     */
    public function getCodePays(): ?string {
        return $this->codePays;
    }

    /**
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
    }

    /**
     * Get the code reglement.
     *
     * @return string|null Returns the code reglement.
     */
    public function getCodeReglement(): ?string {
        return $this->codeReglement;
    }

    /**
     * Get the code sous famille.
     *
     * @return string|null Returns the code sous famille.
     */
    public function getCodeSousFamille(): ?string {
        return $this->codeSousFamille;
    }

    /**
     * Get the code tva.
     *
     * @return string|null Returns the code tva.
     */
    public function getCodeTva(): ?string {
        return $this->codeTva;
    }

    /**
     * Get the code tva1.
     *
     * @return string|null Returns the code tva1.
     */
    public function getCodeTva1(): ?string {
        return $this->codeTva1;
    }

    /**
     * Get the code tva2.
     *
     * @return string|null Returns the code tva2.
     */
    public function getCodeTva2(): ?string {
        return $this->codeTva2;
    }

    /**
     * Get the code ventil compta.
     *
     * @return string|null Returns the code ventil compta.
     */
    public function getCodeVentilCompta(): ?string {
        return $this->codeVentilCompta;
    }

    /**
     * Get the collectif.
     *
     * @return string|null Returns the collectif.
     */
    public function getCollectif(): ?string {
        return $this->collectif;
    }

    /**
     * Get the commentaires.
     *
     * @return string|null Returns the commentaires.
     */
    public function getCommentaires(): ?string {
        return $this->commentaires;
    }

    /**
     * Get the complement.
     *
     * @return string|null Returns the complement.
     */
    public function getComplement(): ?string {
        return $this->complement;
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
     * Get the delai le.
     *
     * @return int|null Returns the delai le.
     */
    public function getDelaiLe(): ?int {
        return $this->delaiLe;
    }

    /**
     * Get the delai nombre.
     *
     * @return int|null Returns the delai nombre.
     */
    public function getDelaiNombre(): ?int {
        return $this->delaiNombre;
    }

    /**
     * Get the delai type.
     *
     * @return int|null Returns the delai type.
     */
    public function getDelaiType(): ?int {
        return $this->delaiType;
    }

    /**
     * Get the domiciliation bancaire1.
     *
     * @return string|null Returns the domiciliation bancaire1.
     */
    public function getDomiciliationBancaire1(): ?string {
        return $this->domiciliationBancaire1;
    }

    /**
     * Get the domiciliation bancaire2.
     *
     * @return string|null Returns the domiciliation bancaire2.
     */
    public function getDomiciliationBancaire2(): ?string {
        return $this->domiciliationBancaire2;
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
     * Get the facture euros.
     *
     * @return bool|null Returns the facture euros.
     */
    public function getFactureEuros(): ?bool {
        return $this->factureEuros;
    }

    /**
     * Get the fax.
     *
     * @return string|null Returns the fax.
     */
    public function getFax(): ?string {
        return $this->fax;
    }

    /**
     * Get the frais fixes1.
     *
     * @return float|null Returns the frais fixes1.
     */
    public function getFraisFixes1(): ?float {
        return $this->fraisFixes1;
    }

    /**
     * Get the frais fixes2.
     *
     * @return float|null Returns the frais fixes2.
     */
    public function getFraisFixes2(): ?float {
        return $this->fraisFixes2;
    }

    /**
     * Get the frais fixes3.
     *
     * @return float|null Returns the frais fixes3.
     */
    public function getFraisFixes3(): ?float {
        return $this->fraisFixes3;
    }

    /**
     * Get the ident tva.
     *
     * @return string|null Returns the ident tva.
     */
    public function getIdentTva(): ?string {
        return $this->identTva;
    }

    /**
     * Get the montant acompte.
     *
     * @return float|null Returns the montant acompte.
     */
    public function getMontantAcompte(): ?float {
        return $this->montantAcompte;
    }

    /**
     * Get the nb colis.
     *
     * @return int|null Returns the nb colis.
     */
    public function getNbColis(): ?int {
        return $this->nbColis;
    }

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getNom(): ?string {
        return $this->nom;
    }

    /**
     * Get the nom responsable.
     *
     * @return string|null Returns the nom responsable.
     */
    public function getNomResponsable(): ?string {
        return $this->nomResponsable;
    }

    /**
     * Get the nom suite.
     *
     * @return string|null Returns the nom suite.
     */
    public function getNomSuite(): ?string {
        return $this->nomSuite;
    }

    /**
     * Get the nom ville.
     *
     * @return string|null Returns the nom ville.
     */
    public function getNomVille(): ?string {
        return $this->nomVille;
    }

    /**
     * Get the nom voie.
     *
     * @return string|null Returns the nom voie.
     */
    public function getNomVoie(): ?string {
        return $this->nomVoie;
    }

    /**
     * Get the nombre echeances.
     *
     * @return int|null Returns the nombre echeances.
     */
    public function getNombreEcheances(): ?int {
        return $this->nombreEcheances;
    }

    /**
     * Get the num voie.
     *
     * @return string|null Returns the num voie.
     */
    public function getNumVoie(): ?string {
        return $this->numVoie;
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
     * Get the paiement depart le.
     *
     * @return int|null Returns the paiement depart le.
     */
    public function getPaiementDepartLe(): ?int {
        return $this->paiementDepartLe;
    }

    /**
     * Get the paiement le.
     *
     * @return int|null Returns the paiement le.
     */
    public function getPaiementLe(): ?int {
        return $this->paiementLe;
    }

    /**
     * Get the paiement nombre de jours.
     *
     * @return int|null Returns the paiement nombre de jours.
     */
    public function getPaiementNombreDeJours(): ?int {
        return $this->paiementNombreDeJours;
    }

    /**
     * Get the poids.
     *
     * @return float|null Returns the poids.
     */
    public function getPoids(): ?float {
        return $this->poids;
    }

    /**
     * Get the portable1.
     *
     * @return string|null Returns the portable1.
     */
    public function getPortable1(): ?string {
        return $this->portable1;
    }

    /**
     * Get the portable2.
     *
     * @return string|null Returns the portable2.
     */
    public function getPortable2(): ?string {
        return $this->portable2;
    }

    /**
     * Get the rc.
     *
     * @return string|null Returns the rc.
     */
    public function getRc(): ?string {
        return $this->rc;
    }

    /**
     * Get the reference client.
     *
     * @return string|null Returns the reference client.
     */
    public function getReferenceClient(): ?string {
        return $this->referenceClient;
    }

    /**
     * Get the remise ligne1.
     *
     * @return float|null Returns the remise ligne1.
     */
    public function getRemiseLigne1(): ?float {
        return $this->remiseLigne1;
    }

    /**
     * Get the remise ligne2.
     *
     * @return float|null Returns the remise ligne2.
     */
    public function getRemiseLigne2(): ?float {
        return $this->remiseLigne2;
    }

    /**
     * Get the remise ligne3.
     *
     * @return float|null Returns the remise ligne3.
     */
    public function getRemiseLigne3(): ?float {
        return $this->remiseLigne3;
    }

    /**
     * Get the remise pied.
     *
     * @return float|null Returns the remise pied.
     */
    public function getRemisePied(): ?float {
        return $this->remisePied;
    }

    /**
     * Get the remise pied2.
     *
     * @return float|null Returns the remise pied2.
     */
    public function getRemisePied2(): ?float {
        return $this->remisePied2;
    }

    /**
     * Get the remise pied3.
     *
     * @return float|null Returns the remise pied3.
     */
    public function getRemisePied3(): ?float {
        return $this->remisePied3;
    }

    /**
     * Get the rib.
     *
     * @return string|null Returns the rib.
     */
    public function getRib(): ?string {
        return $this->rib;
    }

    /**
     * Get the siret.
     *
     * @return string|null Returns the siret.
     */
    public function getSiret(): ?string {
        return $this->siret;
    }

    /**
     * Get the soumis taxe1.
     *
     * @return bool|null Returns the soumis taxe1.
     */
    public function getSoumisTaxe1(): ?bool {
        return $this->soumisTaxe1;
    }

    /**
     * Get the soumis taxe2.
     *
     * @return bool|null Returns the soumis taxe2.
     */
    public function getSoumisTaxe2(): ?bool {
        return $this->soumisTaxe2;
    }

    /**
     * Get the soumis taxe3.
     *
     * @return bool|null Returns the soumis taxe3.
     */
    public function getSoumisTaxe3(): ?bool {
        return $this->soumisTaxe3;
    }

    /**
     * Get the tel1.
     *
     * @return string|null Returns the tel1.
     */
    public function getTel1(): ?string {
        return $this->tel1;
    }

    /**
     * Get the tel2.
     *
     * @return string|null Returns the tel2.
     */
    public function getTel2(): ?string {
        return $this->tel2;
    }

    /**
     * Get the tel voiture.
     *
     * @return string|null Returns the tel voiture.
     */
    public function getTelVoiture(): ?string {
        return $this->telVoiture;
    }

    /**
     * Get the telex.
     *
     * @return string|null Returns the telex.
     */
    public function getTelex(): ?string {
        return $this->telex;
    }

    /**
     * Get the transporteur.
     *
     * @return string|null Returns the transporteur.
     */
    public function getTransporteur(): ?string {
        return $this->transporteur;
    }

    /**
     * Get the tva cle.
     *
     * @return string|null Returns the tva cle.
     */
    public function getTvaCle(): ?string {
        return $this->tvaCle;
    }

    /**
     * Get the tva code dossier.
     *
     * @return string|null Returns the tva code dossier.
     */
    public function getTvaCodeDossier(): ?string {
        return $this->tvaCodeDossier;
    }

    /**
     * Get the tva code recette.
     *
     * @return string|null Returns the tva code recette.
     */
    public function getTvaCodeRecette(): ?string {
        return $this->tvaCodeRecette;
    }

    /**
     * Get the tva regime.
     *
     * @return int|null Returns the tva regime.
     */
    public function getTvaRegime(): ?int {
        return $this->tvaRegime;
    }

    /**
     * Get the tx escompte achat.
     *
     * @return float|null Returns the tx escompte achat.
     */
    public function getTxEscompteAchat(): ?float {
        return $this->txEscompteAchat;
    }

    /**
     * Set the ape.
     *
     * @param string|null $ape The ape.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setApe(?string $ape): Fournisseurs {
        $this->ape = $ape;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setBtq(?string $btq): Fournisseurs {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Fournisseurs {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCode(?string $code): Fournisseurs {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeDevise(?string $codeDevise): Fournisseurs {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string|null $codeFamille The code famille.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeFamille(?string $codeFamille): Fournisseurs {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code imputation analytique.
     *
     * @param string|null $codeImputationAnalytique The code imputation analytique.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeImputationAnalytique(?string $codeImputationAnalytique): Fournisseurs {
        $this->codeImputationAnalytique = $codeImputationAnalytique;
        return $this;
    }

    /**
     * Set the code langue designation article.
     *
     * @param string|null $codeLangueDesignationArticle The code langue designation article.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeLangueDesignationArticle(?string $codeLangueDesignationArticle): Fournisseurs {
        $this->codeLangueDesignationArticle = $codeLangueDesignationArticle;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string|null $codeOfficielCommune The code officiel commune.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeOfficielCommune(?string $codeOfficielCommune): Fournisseurs {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string|null $codePays The code pays.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodePays(?string $codePays): Fournisseurs {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodePostal(?string $codePostal): Fournisseurs {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code reglement.
     *
     * @param string|null $codeReglement The code reglement.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeReglement(?string $codeReglement): Fournisseurs {
        $this->codeReglement = $codeReglement;
        return $this;
    }

    /**
     * Set the code sous famille.
     *
     * @param string|null $codeSousFamille The code sous famille.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeSousFamille(?string $codeSousFamille): Fournisseurs {
        $this->codeSousFamille = $codeSousFamille;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeTva(?string $codeTva): Fournisseurs {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code tva1.
     *
     * @param string|null $codeTva1 The code tva1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeTva1(?string $codeTva1): Fournisseurs {
        $this->codeTva1 = $codeTva1;
        return $this;
    }

    /**
     * Set the code tva2.
     *
     * @param string|null $codeTva2 The code tva2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeTva2(?string $codeTva2): Fournisseurs {
        $this->codeTva2 = $codeTva2;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string|null $codeVentilCompta The code ventil compta.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeVentilCompta(?string $codeVentilCompta): Fournisseurs {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the collectif.
     *
     * @param string|null $collectif The collectif.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCollectif(?string $collectif): Fournisseurs {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string|null $commentaires The commentaires.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCommentaires(?string $commentaires): Fournisseurs {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setComplement(?string $complement): Fournisseurs {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDateCreation(?DateTime $dateCreation): Fournisseurs {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDateModification(?DateTime $dateModification): Fournisseurs {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the delai le.
     *
     * @param int|null $delaiLe The delai le.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDelaiLe(?int $delaiLe): Fournisseurs {
        $this->delaiLe = $delaiLe;
        return $this;
    }

    /**
     * Set the delai nombre.
     *
     * @param int|null $delaiNombre The delai nombre.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDelaiNombre(?int $delaiNombre): Fournisseurs {
        $this->delaiNombre = $delaiNombre;
        return $this;
    }

    /**
     * Set the delai type.
     *
     * @param int|null $delaiType The delai type.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDelaiType(?int $delaiType): Fournisseurs {
        $this->delaiType = $delaiType;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string|null $domiciliationBancaire1 The domiciliation bancaire1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDomiciliationBancaire1(?string $domiciliationBancaire1): Fournisseurs {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string|null $domiciliationBancaire2 The domiciliation bancaire2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDomiciliationBancaire2(?string $domiciliationBancaire2): Fournisseurs {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEmail(?string $email): Fournisseurs {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the facture euros.
     *
     * @param bool|null $factureEuros The facture euros.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFactureEuros(?bool $factureEuros): Fournisseurs {
        $this->factureEuros = $factureEuros;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string|null $fax The fax.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFax(?string $fax): Fournisseurs {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the frais fixes1.
     *
     * @param float|null $fraisFixes1 The frais fixes1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFraisFixes1(?float $fraisFixes1): Fournisseurs {
        $this->fraisFixes1 = $fraisFixes1;
        return $this;
    }

    /**
     * Set the frais fixes2.
     *
     * @param float|null $fraisFixes2 The frais fixes2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFraisFixes2(?float $fraisFixes2): Fournisseurs {
        $this->fraisFixes2 = $fraisFixes2;
        return $this;
    }

    /**
     * Set the frais fixes3.
     *
     * @param float|null $fraisFixes3 The frais fixes3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFraisFixes3(?float $fraisFixes3): Fournisseurs {
        $this->fraisFixes3 = $fraisFixes3;
        return $this;
    }

    /**
     * Set the ident tva.
     *
     * @param string|null $identTva The ident tva.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setIdentTva(?string $identTva): Fournisseurs {
        $this->identTva = $identTva;
        return $this;
    }

    /**
     * Set the montant acompte.
     *
     * @param float|null $montantAcompte The montant acompte.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setMontantAcompte(?float $montantAcompte): Fournisseurs {
        $this->montantAcompte = $montantAcompte;
        return $this;
    }

    /**
     * Set the nb colis.
     *
     * @param int|null $nbColis The nb colis.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbColis(?int $nbColis): Fournisseurs {
        $this->nbColis = $nbColis;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNom(?string $nom): Fournisseurs {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom responsable.
     *
     * @param string|null $nomResponsable The nom responsable.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNomResponsable(?string $nomResponsable): Fournisseurs {
        $this->nomResponsable = $nomResponsable;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string|null $nomSuite The nom suite.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNomSuite(?string $nomSuite): Fournisseurs {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNomVille(?string $nomVille): Fournisseurs {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNomVoie(?string $nomVoie): Fournisseurs {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param int|null $nombreEcheances The nombre echeances.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNombreEcheances(?int $nombreEcheances): Fournisseurs {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNumVoie(?string $numVoie): Fournisseurs {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNumeroCompte(?string $numeroCompte): Fournisseurs {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param int|null $paiementDepartLe The paiement depart le.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPaiementDepartLe(?int $paiementDepartLe): Fournisseurs {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param int|null $paiementLe The paiement le.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPaiementLe(?int $paiementLe): Fournisseurs {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int|null $paiementNombreDeJours The paiement nombre de jours.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPaiementNombreDeJours(?int $paiementNombreDeJours): Fournisseurs {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the poids.
     *
     * @param float|null $poids The poids.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPoids(?float $poids): Fournisseurs {
        $this->poids = $poids;
        return $this;
    }

    /**
     * Set the portable1.
     *
     * @param string|null $portable1 The portable1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPortable1(?string $portable1): Fournisseurs {
        $this->portable1 = $portable1;
        return $this;
    }

    /**
     * Set the portable2.
     *
     * @param string|null $portable2 The portable2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPortable2(?string $portable2): Fournisseurs {
        $this->portable2 = $portable2;
        return $this;
    }

    /**
     * Set the rc.
     *
     * @param string|null $rc The rc.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRc(?string $rc): Fournisseurs {
        $this->rc = $rc;
        return $this;
    }

    /**
     * Set the reference client.
     *
     * @param string|null $referenceClient The reference client.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setReferenceClient(?string $referenceClient): Fournisseurs {
        $this->referenceClient = $referenceClient;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float|null $remiseLigne1 The remise ligne1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemiseLigne1(?float $remiseLigne1): Fournisseurs {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float|null $remiseLigne2 The remise ligne2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemiseLigne2(?float $remiseLigne2): Fournisseurs {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float|null $remiseLigne3 The remise ligne3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemiseLigne3(?float $remiseLigne3): Fournisseurs {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float|null $remisePied The remise pied.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemisePied(?float $remisePied): Fournisseurs {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the remise pied2.
     *
     * @param float|null $remisePied2 The remise pied2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemisePied2(?float $remisePied2): Fournisseurs {
        $this->remisePied2 = $remisePied2;
        return $this;
    }

    /**
     * Set the remise pied3.
     *
     * @param float|null $remisePied3 The remise pied3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemisePied3(?float $remisePied3): Fournisseurs {
        $this->remisePied3 = $remisePied3;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRib(?string $rib): Fournisseurs {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSiret(?string $siret): Fournisseurs {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the soumis taxe1.
     *
     * @param bool|null $soumisTaxe1 The soumis taxe1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe1(?bool $soumisTaxe1): Fournisseurs {
        $this->soumisTaxe1 = $soumisTaxe1;
        return $this;
    }

    /**
     * Set the soumis taxe2.
     *
     * @param bool|null $soumisTaxe2 The soumis taxe2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe2(?bool $soumisTaxe2): Fournisseurs {
        $this->soumisTaxe2 = $soumisTaxe2;
        return $this;
    }

    /**
     * Set the soumis taxe3.
     *
     * @param bool|null $soumisTaxe3 The soumis taxe3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe3(?bool $soumisTaxe3): Fournisseurs {
        $this->soumisTaxe3 = $soumisTaxe3;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string|null $tel1 The tel1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTel1(?string $tel1): Fournisseurs {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string|null $tel2 The tel2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTel2(?string $tel2): Fournisseurs {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tel voiture.
     *
     * @param string|null $telVoiture The tel voiture.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTelVoiture(?string $telVoiture): Fournisseurs {
        $this->telVoiture = $telVoiture;
        return $this;
    }

    /**
     * Set the telex.
     *
     * @param string|null $telex The telex.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTelex(?string $telex): Fournisseurs {
        $this->telex = $telex;
        return $this;
    }

    /**
     * Set the transporteur.
     *
     * @param string|null $transporteur The transporteur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTransporteur(?string $transporteur): Fournisseurs {
        $this->transporteur = $transporteur;
        return $this;
    }

    /**
     * Set the tva cle.
     *
     * @param string|null $tvaCle The tva cle.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTvaCle(?string $tvaCle): Fournisseurs {
        $this->tvaCle = $tvaCle;
        return $this;
    }

    /**
     * Set the tva code dossier.
     *
     * @param string|null $tvaCodeDossier The tva code dossier.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTvaCodeDossier(?string $tvaCodeDossier): Fournisseurs {
        $this->tvaCodeDossier = $tvaCodeDossier;
        return $this;
    }

    /**
     * Set the tva code recette.
     *
     * @param string|null $tvaCodeRecette The tva code recette.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTvaCodeRecette(?string $tvaCodeRecette): Fournisseurs {
        $this->tvaCodeRecette = $tvaCodeRecette;
        return $this;
    }

    /**
     * Set the tva regime.
     *
     * @param int|null $tvaRegime The tva regime.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTvaRegime(?int $tvaRegime): Fournisseurs {
        $this->tvaRegime = $tvaRegime;
        return $this;
    }

    /**
     * Set the tx escompte achat.
     *
     * @param float|null $txEscompteAchat The tx escompte achat.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTxEscompteAchat(?float $txEscompteAchat): Fournisseurs {
        $this->txEscompteAchat = $txEscompteAchat;
        return $this;
    }
}
