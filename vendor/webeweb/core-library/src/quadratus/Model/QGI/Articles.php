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
 * Articles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Articles {

    /**
     * Achat par colis.
     *
     * @var bool|null
     */
    private $achatParColis;

    /**
     * Actif.
     *
     * @var bool|null
     */
    private $actif;

    /**
     * Allee casier.
     *
     * @var string|null
     */
    private $alleeCasier;

    /**
     * Article frais.
     *
     * @var bool|null
     */
    private $articleFrais;

    /**
     * Article rattache.
     *
     * @var string|null
     */
    private $articleRattache;

    /**
     * Article regroupement.
     *
     * @var string|null
     */
    private $articleRegroupement;

    /**
     * Article remplacement.
     *
     * @var string|null
     */
    private $articleRemplacement;

    /**
     * Article taxe1.
     *
     * @var string|null
     */
    private $articleTaxe1;

    /**
     * Article taxe2.
     *
     * @var string|null
     */
    private $articleTaxe2;

    /**
     * Article taxe3.
     *
     * @var string|null
     */
    private $articleTaxe3;

    /**
     * Article taxe4.
     *
     * @var string|null
     */
    private $articleTaxe4;

    /**
     * Article taxe5.
     *
     * @var string|null
     */
    private $articleTaxe5;

    /**
     * Calcul coeff pa pv.
     *
     * @var bool|null
     */
    private $calculCoeffPaPv;

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code article2.
     *
     * @var string|null
     */
    private $codeArticle2;

    /**
     * Code devise achat.
     *
     * @var string|null
     */
    private $codeDeviseAchat;

    /**
     * Code famille.
     *
     * @var string|null
     */
    private $codeFamille;

    /**
     * Code fournisseur.
     *
     * @var string|null
     */
    private $codeFournisseur;

    /**
     * Code gamme.
     *
     * @var string|null
     */
    private $codeGamme;

    /**
     * Code grille gamme.
     *
     * @var string|null
     */
    private $codeGrilleGamme;

    /**
     * Code honoraire.
     *
     * @var string|null
     */
    private $codeHonoraire;

    /**
     * Code imputation analytique.
     *
     * @var string|null
     */
    private $codeImputationAnalytique;

    /**
     * Code presentation.
     *
     * @var string|null
     */
    private $codePresentation;

    /**
     * Code ss famille.
     *
     * @var string|null
     */
    private $codeSsFamille;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Code tarif art.
     *
     * @var string|null
     */
    private $codeTarifArt;

    /**
     * Code taxe.
     *
     * @var string|null
     */
    private $codeTaxe;

    /**
     * Code tva achat.
     *
     * @var string|null
     */
    private $codeTvaAchat;

    /**
     * Code tva vente.
     *
     * @var string|null
     */
    private $codeTvaVente;

    /**
     * Code tva vente2.
     *
     * @var string|null
     */
    private $codeTvaVente2;

    /**
     * Code unite.
     *
     * @var string|null
     */
    private $codeUnite;

    /**
     * Code ventil achat.
     *
     * @var string|null
     */
    private $codeVentilAchat;

    /**
     * Code ventil vente.
     *
     * @var string|null
     */
    private $codeVentilVente;

    /**
     * Code ventil vente2.
     *
     * @var string|null
     */
    private $codeVentilVente2;

    /**
     * Coeff pv pa.
     *
     * @var float|null
     */
    private $coeffPvPa;

    /**
     * Coeff sur px achat.
     *
     * @var string|null
     */
    private $coeffSurPxAchat;

    /**
     * Coeff sur px achat brut.
     *
     * @var bool|null
     */
    private $coeffSurPxAchatBrut;

    /**
     * Colisage achat.
     *
     * @var float|null
     */
    private $colisageAchat;

    /**
     * Colisage px achat.
     *
     * @var float|null
     */
    private $colisagePxAchat;

    /**
     * Colisage px vente.
     *
     * @var float|null
     */
    private $colisagePxVente;

    /**
     * Colisage vente.
     *
     * @var float|null
     */
    private $colisageVente;

    /**
     * Commission unique.
     *
     * @var bool|null
     */
    private $commissionUnique;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Conditionnement1.
     *
     * @var float|null
     */
    private $conditionnement1;

    /**
     * Conditionnement2.
     *
     * @var float|null
     */
    private $conditionnement2;

    /**
     * Conditionnement3.
     *
     * @var float|null
     */
    private $conditionnement3;

    /**
     * Contremarque interdite.
     *
     * @var bool|null
     */
    private $contremarqueInterdite;

    /**
     * Cout supp.
     *
     * @var float|null
     */
    private $coutSupp;

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
     * Debour.
     *
     * @var bool|null
     */
    private $debour;

    /**
     * Dernier px achat.
     *
     * @var float|null
     */
    private $dernierPxAchat;

    /**
     * Designation apres.
     *
     * @var string|null
     */
    private $designationApres;

    /**
     * Designation avant.
     *
     * @var string|null
     */
    private $designationAvant;

    /**
     * Editer article rattache.
     *
     * @var bool|null
     */
    private $editerArticleRattache;

    /**
     * Editer article remplacement.
     *
     * @var bool|null
     */
    private $editerArticleRemplacement;

    /**
     * Ensemble.
     *
     * @var bool|null
     */
    private $ensemble;

    /**
     * Est multi tva.
     *
     * @var bool|null
     */
    private $estMultiTva;

    /**
     * Est occasion.
     *
     * @var bool|null
     */
    private $estOccasion;

    /**
     * Facturation ttc.
     *
     * @var bool|null
     */
    private $facturationTtc;

    /**
     * Famille achat.
     *
     * @var string|null
     */
    private $familleAchat;

    /**
     * Frais1.
     *
     * @var float|null
     */
    private $frais1;

    /**
     * Frais2.
     *
     * @var float|null
     */
    private $frais2;

    /**
     * Frais3.
     *
     * @var float|null
     */
    private $frais3;

    /**
     * Ha coeff pv pa.
     *
     * @var float|null
     */
    private $haCoeffPvPa;

    /**
     * Ha coeff sur px achat.
     *
     * @var string|null
     */
    private $haCoeffSurPxAchat;

    /**
     * Ha date pa.
     *
     * @var DateTime|null
     */
    private $haDatePa;

    /**
     * Ha date pv.
     *
     * @var DateTime|null
     */
    private $haDatePv;

    /**
     * Ha dernier px achat.
     *
     * @var float|null
     */
    private $haDernierPxAchat;

    /**
     * Ha prix revient.
     *
     * @var float|null
     */
    private $haPrixRevient;

    /**
     * Ha prix revient net.
     *
     * @var float|null
     */
    private $haPrixRevientNet;

    /**
     * Ha prix vente.
     *
     * @var float|null
     */
    private $haPrixVente;

    /**
     * Ha px achat brut.
     *
     * @var float|null
     */
    private $haPxAchatBrut;

    /**
     * Ha remise achat1.
     *
     * @var float|null
     */
    private $haRemiseAchat1;

    /**
     * Ha remise achat2.
     *
     * @var float|null
     */
    private $haRemiseAchat2;

    /**
     * Ha remise achat3.
     *
     * @var float|null
     */
    private $haRemiseAchat3;

    /**
     * Ha remise sup achat1.
     *
     * @var float|null
     */
    private $haRemiseSupAchat1;

    /**
     * Ha remise sup achat2.
     *
     * @var float|null
     */
    private $haRemiseSupAchat2;

    /**
     * Ha remise sup achat3.
     *
     * @var float|null
     */
    private $haRemiseSupAchat3;

    /**
     * Hauteur.
     *
     * @var float|null
     */
    private $hauteur;

    /**
     * Honoraires.
     *
     * @var bool|null
     */
    private $honoraires;

    /**
     * Honoraires uniquement.
     *
     * @var bool|null
     */
    private $honorairesUniquement;

    /**
     * Hors stock.
     *
     * @var bool|null
     */
    private $horsStock;

    /**
     * Intitule1.
     *
     * @var string|null
     */
    private $intitule1;

    /**
     * Intitule2.
     *
     * @var string|null
     */
    private $intitule2;

    /**
     * Intitule3.
     *
     * @var string|null
     */
    private $intitule3;

    /**
     * Intitule4.
     *
     * @var string|null
     */
    private $intitule4;

    /**
     * Largeur.
     *
     * @var float|null
     */
    private $largeur;

    /**
     * Libelle interne.
     *
     * @var string|null
     */
    private $libelleInterne;

    /**
     * Longueur.
     *
     * @var float|null
     */
    private $longueur;

    /**
     * Lot serie autre.
     *
     * @var bool|null
     */
    private $lotSerieAutre;

    /**
     * Marge mini.
     *
     * @var float|null
     */
    private $margeMini;

    /**
     * Mini facturable.
     *
     * @var float|null
     */
    private $miniFacturable;

    /**
     * Modele code barre.
     *
     * @var string|null
     */
    private $modeleCodeBarre;

    /**
     * Modele code barre f.
     *
     * @var string|null
     */
    private $modeleCodeBarreF;

    /**
     * Mt soumis tva2.
     *
     * @var float|null
     */
    private $mtSoumisTva2;

    /**
     * Mt tare.
     *
     * @var float|null
     */
    private $mtTare;

    /**
     * Multi tva avec remises.
     *
     * @var bool|null
     */
    private $multiTvaAvecRemises;

    /**
     * Nature produit.
     *
     * @var string|null
     */
    private $natureProduit;

    /**
     * Nb heures.
     *
     * @var float|null
     */
    private $nbHeures;

    /**
     * Ne pas cumuler stats.
     *
     * @var bool|null
     */
    private $nePasCumulerStats;

    /**
     * Ne pas editer.
     *
     * @var bool|null
     */
    private $nePasEditer;

    /**
     * Ne plus commander.
     *
     * @var bool|null
     */
    private $nePlusCommander;

    /**
     * Neutre.
     *
     * @var bool|null
     */
    private $neutre;

    /**
     * Niveau apparition.
     *
     * @var int|null
     */
    private $niveauApparition;

    /**
     * Niveau totalisation.
     *
     * @var string|null
     */
    private $niveauTotalisation;

    /**
     * Nomenclature ensemble.
     *
     * @var bool|null
     */
    private $nomenclatureEnsemble;

    /**
     * Nomenclature europe.
     *
     * @var string|null
     */
    private $nomenclatureEurope;

    /**
     * Num compte achat.
     *
     * @var string|null
     */
    private $numCompteAchat;

    /**
     * Num compte vente.
     *
     * @var string|null
     */
    private $numCompteVente;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

    /**
     * Pamp.
     *
     * @var float|null
     */
    private $pamp;

    /**
     * Param cde.
     *
     * @var float|null
     */
    private $paramCde;

    /**
     * Poids unitaire.
     *
     * @var float|null
     */
    private $poidsUnitaire;

    /**
     * Prix achat ckp.
     *
     * @var string|null
     */
    private $prixAchatCkp;

    /**
     * Prix fixe.
     *
     * @var bool|null
     */
    private $prixFixe;

    /**
     * Prix mini.
     *
     * @var float|null
     */
    private $prixMini;

    /**
     * Prix net.
     *
     * @var bool|null
     */
    private $prixNet;

    /**
     * Prix revient.
     *
     * @var float|null
     */
    private $prixRevient;

    /**
     * Prix revient net.
     *
     * @var float|null
     */
    private $prixRevientNet;

    /**
     * Prix vente ckp.
     *
     * @var string|null
     */
    private $prixVenteCkp;

    /**
     * Prmp.
     *
     * @var float|null
     */
    private $prmp;

    /**
     * Provenance.
     *
     * @var string|null
     */
    private $provenance;

    /**
     * Px achat brut.
     *
     * @var float|null
     */
    private $pxAchatBrut;

    /**
     * Px achat colis.
     *
     * @var bool|null
     */
    private $pxAchatColis;

    /**
     * Px achat en devise.
     *
     * @var float|null
     */
    private $pxAchatEnDevise;

    /**
     * Px unit a editer.
     *
     * @var bool|null
     */
    private $pxUnitAEditer;

    /**
     * Px vente colis.
     *
     * @var bool|null
     */
    private $pxVenteColis;

    /**
     * Px vente ht euro.
     *
     * @var float|null
     */
    private $pxVenteHtEuro;

    /**
     * Px vente ht frf.
     *
     * @var float|null
     */
    private $pxVenteHtFrf;

    /**
     * Px vente ttc euro.
     *
     * @var float|null
     */
    private $pxVenteTtcEuro;

    /**
     * Px vente ttc frf.
     *
     * @var float|null
     */
    private $pxVenteTtcFrf;

    /**
     * Qte a editer.
     *
     * @var bool|null
     */
    private $qteAEditer;

    /**
     * Qte eco commande.
     *
     * @var float|null
     */
    private $qteEcoCommande;

    /**
     * Qte hab commande.
     *
     * @var float|null
     */
    private $qteHabCommande;

    /**
     * Qte max facture.
     *
     * @var float|null
     */
    private $qteMaxFacture;

    /**
     * Qte min commande.
     *
     * @var float|null
     */
    private $qteMinCommande;

    /**
     * Regroup fact.
     *
     * @var string|null
     */
    private $regroupFact;

    /**
     * Regroup fact tp.
     *
     * @var int|null
     */
    private $regroupFactTp;

    /**
     * Remise1en montant.
     *
     * @var bool|null
     */
    private $remise1enMontant;

    /**
     * Remise2en montant.
     *
     * @var bool|null
     */
    private $remise2enMontant;

    /**
     * Remise achat1.
     *
     * @var float|null
     */
    private $remiseAchat1;

    /**
     * Remise achat2.
     *
     * @var float|null
     */
    private $remiseAchat2;

    /**
     * Remise achat3.
     *
     * @var float|null
     */
    private $remiseAchat3;

    /**
     * Remise sup achat1.
     *
     * @var float|null
     */
    private $remiseSupAchat1;

    /**
     * Remise sup achat1 en montant.
     *
     * @var bool|null
     */
    private $remiseSupAchat1EnMontant;

    /**
     * Remise sup achat2.
     *
     * @var float|null
     */
    private $remiseSupAchat2;

    /**
     * Remise sup achat2 en montant.
     *
     * @var bool|null
     */
    private $remiseSupAchat2EnMontant;

    /**
     * Remise sup achat3.
     *
     * @var float|null
     */
    private $remiseSupAchat3;

    /**
     * Remise sup achat3 en montant.
     *
     * @var bool|null
     */
    private $remiseSupAchat3EnMontant;

    /**
     * Remises interdites.
     *
     * @var bool|null
     */
    private $remisesInterdites;

    /**
     * Soumis certif.
     *
     * @var bool|null
     */
    private $soumisCertif;

    /**
     * Ss famille achat.
     *
     * @var string|null
     */
    private $ssFamilleAchat;

    /**
     * Suivi stock.
     *
     * @var bool|null
     */
    private $suiviStock;

    /**
     * Tare vat.
     *
     * @var string|null
     */
    private $tareVat;

    /**
     * Taux alcool.
     *
     * @var float|null
     */
    private $tauxAlcool;

    /**
     * Taux devise achat.
     *
     * @var float|null
     */
    private $tauxDeviseAchat;

    /**
     * Tva encaissement.
     *
     * @var bool|null
     */
    private $tvaEncaissement;

    /**
     * Tx commission.
     *
     * @var float|null
     */
    private $txCommission;

    /**
     * Type arrondi.
     *
     * @var string|null
     */
    private $typeArrondi;

    /**
     * Type heure.
     *
     * @var bool|null
     */
    private $typeHeure;

    /**
     * Type unite.
     *
     * @var string|null
     */
    private $typeUnite;

    /**
     * Unite activite.
     *
     * @var bool|null
     */
    private $uniteActivite;

    /**
     * Variante.
     *
     * @var bool|null
     */
    private $variante;

    /**
     * Vente par colis.
     *
     * @var bool|null
     */
    private $venteParColis;

    /**
     * Volume.
     *
     * @var float|null
     */
    private $volume;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the achat par colis.
     *
     * @return bool|null Returns the achat par colis.
     */
    public function getAchatParColis(): ?bool {
        return $this->achatParColis;
    }

    /**
     * Get the actif.
     *
     * @return bool|null Returns the actif.
     */
    public function getActif(): ?bool {
        return $this->actif;
    }

    /**
     * Get the allee casier.
     *
     * @return string|null Returns the allee casier.
     */
    public function getAlleeCasier(): ?string {
        return $this->alleeCasier;
    }

    /**
     * Get the article frais.
     *
     * @return bool|null Returns the article frais.
     */
    public function getArticleFrais(): ?bool {
        return $this->articleFrais;
    }

    /**
     * Get the article rattache.
     *
     * @return string|null Returns the article rattache.
     */
    public function getArticleRattache(): ?string {
        return $this->articleRattache;
    }

    /**
     * Get the article regroupement.
     *
     * @return string|null Returns the article regroupement.
     */
    public function getArticleRegroupement(): ?string {
        return $this->articleRegroupement;
    }

    /**
     * Get the article remplacement.
     *
     * @return string|null Returns the article remplacement.
     */
    public function getArticleRemplacement(): ?string {
        return $this->articleRemplacement;
    }

    /**
     * Get the article taxe1.
     *
     * @return string|null Returns the article taxe1.
     */
    public function getArticleTaxe1(): ?string {
        return $this->articleTaxe1;
    }

    /**
     * Get the article taxe2.
     *
     * @return string|null Returns the article taxe2.
     */
    public function getArticleTaxe2(): ?string {
        return $this->articleTaxe2;
    }

    /**
     * Get the article taxe3.
     *
     * @return string|null Returns the article taxe3.
     */
    public function getArticleTaxe3(): ?string {
        return $this->articleTaxe3;
    }

    /**
     * Get the article taxe4.
     *
     * @return string|null Returns the article taxe4.
     */
    public function getArticleTaxe4(): ?string {
        return $this->articleTaxe4;
    }

    /**
     * Get the article taxe5.
     *
     * @return string|null Returns the article taxe5.
     */
    public function getArticleTaxe5(): ?string {
        return $this->articleTaxe5;
    }

    /**
     * Get the calcul coeff pa pv.
     *
     * @return bool|null Returns the calcul coeff pa pv.
     */
    public function getCalculCoeffPaPv(): ?bool {
        return $this->calculCoeffPaPv;
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
     * Get the code article2.
     *
     * @return string|null Returns the code article2.
     */
    public function getCodeArticle2(): ?string {
        return $this->codeArticle2;
    }

    /**
     * Get the code devise achat.
     *
     * @return string|null Returns the code devise achat.
     */
    public function getCodeDeviseAchat(): ?string {
        return $this->codeDeviseAchat;
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
     * Get the code fournisseur.
     *
     * @return string|null Returns the code fournisseur.
     */
    public function getCodeFournisseur(): ?string {
        return $this->codeFournisseur;
    }

    /**
     * Get the code gamme.
     *
     * @return string|null Returns the code gamme.
     */
    public function getCodeGamme(): ?string {
        return $this->codeGamme;
    }

    /**
     * Get the code grille gamme.
     *
     * @return string|null Returns the code grille gamme.
     */
    public function getCodeGrilleGamme(): ?string {
        return $this->codeGrilleGamme;
    }

    /**
     * Get the code honoraire.
     *
     * @return string|null Returns the code honoraire.
     */
    public function getCodeHonoraire(): ?string {
        return $this->codeHonoraire;
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
     * Get the code presentation.
     *
     * @return string|null Returns the code presentation.
     */
    public function getCodePresentation(): ?string {
        return $this->codePresentation;
    }

    /**
     * Get the code ss famille.
     *
     * @return string|null Returns the code ss famille.
     */
    public function getCodeSsFamille(): ?string {
        return $this->codeSsFamille;
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
     * Get the code tarif art.
     *
     * @return string|null Returns the code tarif art.
     */
    public function getCodeTarifArt(): ?string {
        return $this->codeTarifArt;
    }

    /**
     * Get the code taxe.
     *
     * @return string|null Returns the code taxe.
     */
    public function getCodeTaxe(): ?string {
        return $this->codeTaxe;
    }

    /**
     * Get the code tva achat.
     *
     * @return string|null Returns the code tva achat.
     */
    public function getCodeTvaAchat(): ?string {
        return $this->codeTvaAchat;
    }

    /**
     * Get the code tva vente.
     *
     * @return string|null Returns the code tva vente.
     */
    public function getCodeTvaVente(): ?string {
        return $this->codeTvaVente;
    }

    /**
     * Get the code tva vente2.
     *
     * @return string|null Returns the code tva vente2.
     */
    public function getCodeTvaVente2(): ?string {
        return $this->codeTvaVente2;
    }

    /**
     * Get the code unite.
     *
     * @return string|null Returns the code unite.
     */
    public function getCodeUnite(): ?string {
        return $this->codeUnite;
    }

    /**
     * Get the code ventil achat.
     *
     * @return string|null Returns the code ventil achat.
     */
    public function getCodeVentilAchat(): ?string {
        return $this->codeVentilAchat;
    }

    /**
     * Get the code ventil vente.
     *
     * @return string|null Returns the code ventil vente.
     */
    public function getCodeVentilVente(): ?string {
        return $this->codeVentilVente;
    }

    /**
     * Get the code ventil vente2.
     *
     * @return string|null Returns the code ventil vente2.
     */
    public function getCodeVentilVente2(): ?string {
        return $this->codeVentilVente2;
    }

    /**
     * Get the coeff pv pa.
     *
     * @return float|null Returns the coeff pv pa.
     */
    public function getCoeffPvPa(): ?float {
        return $this->coeffPvPa;
    }

    /**
     * Get the coeff sur px achat.
     *
     * @return string|null Returns the coeff sur px achat.
     */
    public function getCoeffSurPxAchat(): ?string {
        return $this->coeffSurPxAchat;
    }

    /**
     * Get the coeff sur px achat brut.
     *
     * @return bool|null Returns the coeff sur px achat brut.
     */
    public function getCoeffSurPxAchatBrut(): ?bool {
        return $this->coeffSurPxAchatBrut;
    }

    /**
     * Get the colisage achat.
     *
     * @return float|null Returns the colisage achat.
     */
    public function getColisageAchat(): ?float {
        return $this->colisageAchat;
    }

    /**
     * Get the colisage px achat.
     *
     * @return float|null Returns the colisage px achat.
     */
    public function getColisagePxAchat(): ?float {
        return $this->colisagePxAchat;
    }

    /**
     * Get the colisage px vente.
     *
     * @return float|null Returns the colisage px vente.
     */
    public function getColisagePxVente(): ?float {
        return $this->colisagePxVente;
    }

    /**
     * Get the colisage vente.
     *
     * @return float|null Returns the colisage vente.
     */
    public function getColisageVente(): ?float {
        return $this->colisageVente;
    }

    /**
     * Get the commission unique.
     *
     * @return bool|null Returns the commission unique.
     */
    public function getCommissionUnique(): ?bool {
        return $this->commissionUnique;
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
     * Get the conditionnement1.
     *
     * @return float|null Returns the conditionnement1.
     */
    public function getConditionnement1(): ?float {
        return $this->conditionnement1;
    }

    /**
     * Get the conditionnement2.
     *
     * @return float|null Returns the conditionnement2.
     */
    public function getConditionnement2(): ?float {
        return $this->conditionnement2;
    }

    /**
     * Get the conditionnement3.
     *
     * @return float|null Returns the conditionnement3.
     */
    public function getConditionnement3(): ?float {
        return $this->conditionnement3;
    }

    /**
     * Get the contremarque interdite.
     *
     * @return bool|null Returns the contremarque interdite.
     */
    public function getContremarqueInterdite(): ?bool {
        return $this->contremarqueInterdite;
    }

    /**
     * Get the cout supp.
     *
     * @return float|null Returns the cout supp.
     */
    public function getCoutSupp(): ?float {
        return $this->coutSupp;
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
     * Get the debour.
     *
     * @return bool|null Returns the debour.
     */
    public function getDebour(): ?bool {
        return $this->debour;
    }

    /**
     * Get the dernier px achat.
     *
     * @return float|null Returns the dernier px achat.
     */
    public function getDernierPxAchat(): ?float {
        return $this->dernierPxAchat;
    }

    /**
     * Get the designation apres.
     *
     * @return string|null Returns the designation apres.
     */
    public function getDesignationApres(): ?string {
        return $this->designationApres;
    }

    /**
     * Get the designation avant.
     *
     * @return string|null Returns the designation avant.
     */
    public function getDesignationAvant(): ?string {
        return $this->designationAvant;
    }

    /**
     * Get the editer article rattache.
     *
     * @return bool|null Returns the editer article rattache.
     */
    public function getEditerArticleRattache(): ?bool {
        return $this->editerArticleRattache;
    }

    /**
     * Get the editer article remplacement.
     *
     * @return bool|null Returns the editer article remplacement.
     */
    public function getEditerArticleRemplacement(): ?bool {
        return $this->editerArticleRemplacement;
    }

    /**
     * Get the ensemble.
     *
     * @return bool|null Returns the ensemble.
     */
    public function getEnsemble(): ?bool {
        return $this->ensemble;
    }

    /**
     * Get the est multi tva.
     *
     * @return bool|null Returns the est multi tva.
     */
    public function getEstMultiTva(): ?bool {
        return $this->estMultiTva;
    }

    /**
     * Get the est occasion.
     *
     * @return bool|null Returns the est occasion.
     */
    public function getEstOccasion(): ?bool {
        return $this->estOccasion;
    }

    /**
     * Get the facturation ttc.
     *
     * @return bool|null Returns the facturation ttc.
     */
    public function getFacturationTtc(): ?bool {
        return $this->facturationTtc;
    }

    /**
     * Get the famille achat.
     *
     * @return string|null Returns the famille achat.
     */
    public function getFamilleAchat(): ?string {
        return $this->familleAchat;
    }

    /**
     * Get the frais1.
     *
     * @return float|null Returns the frais1.
     */
    public function getFrais1(): ?float {
        return $this->frais1;
    }

    /**
     * Get the frais2.
     *
     * @return float|null Returns the frais2.
     */
    public function getFrais2(): ?float {
        return $this->frais2;
    }

    /**
     * Get the frais3.
     *
     * @return float|null Returns the frais3.
     */
    public function getFrais3(): ?float {
        return $this->frais3;
    }

    /**
     * Get the ha coeff pv pa.
     *
     * @return float|null Returns the ha coeff pv pa.
     */
    public function getHaCoeffPvPa(): ?float {
        return $this->haCoeffPvPa;
    }

    /**
     * Get the ha coeff sur px achat.
     *
     * @return string|null Returns the ha coeff sur px achat.
     */
    public function getHaCoeffSurPxAchat(): ?string {
        return $this->haCoeffSurPxAchat;
    }

    /**
     * Get the ha date pa.
     *
     * @return DateTime|null Returns the ha date pa.
     */
    public function getHaDatePa(): ?DateTime {
        return $this->haDatePa;
    }

    /**
     * Get the ha date pv.
     *
     * @return DateTime|null Returns the ha date pv.
     */
    public function getHaDatePv(): ?DateTime {
        return $this->haDatePv;
    }

    /**
     * Get the ha dernier px achat.
     *
     * @return float|null Returns the ha dernier px achat.
     */
    public function getHaDernierPxAchat(): ?float {
        return $this->haDernierPxAchat;
    }

    /**
     * Get the ha prix revient.
     *
     * @return float|null Returns the ha prix revient.
     */
    public function getHaPrixRevient(): ?float {
        return $this->haPrixRevient;
    }

    /**
     * Get the ha prix revient net.
     *
     * @return float|null Returns the ha prix revient net.
     */
    public function getHaPrixRevientNet(): ?float {
        return $this->haPrixRevientNet;
    }

    /**
     * Get the ha prix vente.
     *
     * @return float|null Returns the ha prix vente.
     */
    public function getHaPrixVente(): ?float {
        return $this->haPrixVente;
    }

    /**
     * Get the ha px achat brut.
     *
     * @return float|null Returns the ha px achat brut.
     */
    public function getHaPxAchatBrut(): ?float {
        return $this->haPxAchatBrut;
    }

    /**
     * Get the ha remise achat1.
     *
     * @return float|null Returns the ha remise achat1.
     */
    public function getHaRemiseAchat1(): ?float {
        return $this->haRemiseAchat1;
    }

    /**
     * Get the ha remise achat2.
     *
     * @return float|null Returns the ha remise achat2.
     */
    public function getHaRemiseAchat2(): ?float {
        return $this->haRemiseAchat2;
    }

    /**
     * Get the ha remise achat3.
     *
     * @return float|null Returns the ha remise achat3.
     */
    public function getHaRemiseAchat3(): ?float {
        return $this->haRemiseAchat3;
    }

    /**
     * Get the ha remise sup achat1.
     *
     * @return float|null Returns the ha remise sup achat1.
     */
    public function getHaRemiseSupAchat1(): ?float {
        return $this->haRemiseSupAchat1;
    }

    /**
     * Get the ha remise sup achat2.
     *
     * @return float|null Returns the ha remise sup achat2.
     */
    public function getHaRemiseSupAchat2(): ?float {
        return $this->haRemiseSupAchat2;
    }

    /**
     * Get the ha remise sup achat3.
     *
     * @return float|null Returns the ha remise sup achat3.
     */
    public function getHaRemiseSupAchat3(): ?float {
        return $this->haRemiseSupAchat3;
    }

    /**
     * Get the hauteur.
     *
     * @return float|null Returns the hauteur.
     */
    public function getHauteur(): ?float {
        return $this->hauteur;
    }

    /**
     * Get the honoraires.
     *
     * @return bool|null Returns the honoraires.
     */
    public function getHonoraires(): ?bool {
        return $this->honoraires;
    }

    /**
     * Get the honoraires uniquement.
     *
     * @return bool|null Returns the honoraires uniquement.
     */
    public function getHonorairesUniquement(): ?bool {
        return $this->honorairesUniquement;
    }

    /**
     * Get the hors stock.
     *
     * @return bool|null Returns the hors stock.
     */
    public function getHorsStock(): ?bool {
        return $this->horsStock;
    }

    /**
     * Get the intitule1.
     *
     * @return string|null Returns the intitule1.
     */
    public function getIntitule1(): ?string {
        return $this->intitule1;
    }

    /**
     * Get the intitule2.
     *
     * @return string|null Returns the intitule2.
     */
    public function getIntitule2(): ?string {
        return $this->intitule2;
    }

    /**
     * Get the intitule3.
     *
     * @return string|null Returns the intitule3.
     */
    public function getIntitule3(): ?string {
        return $this->intitule3;
    }

    /**
     * Get the intitule4.
     *
     * @return string|null Returns the intitule4.
     */
    public function getIntitule4(): ?string {
        return $this->intitule4;
    }

    /**
     * Get the largeur.
     *
     * @return float|null Returns the largeur.
     */
    public function getLargeur(): ?float {
        return $this->largeur;
    }

    /**
     * Get the libelle interne.
     *
     * @return string|null Returns the libelle interne.
     */
    public function getLibelleInterne(): ?string {
        return $this->libelleInterne;
    }

    /**
     * Get the longueur.
     *
     * @return float|null Returns the longueur.
     */
    public function getLongueur(): ?float {
        return $this->longueur;
    }

    /**
     * Get the lot serie autre.
     *
     * @return bool|null Returns the lot serie autre.
     */
    public function getLotSerieAutre(): ?bool {
        return $this->lotSerieAutre;
    }

    /**
     * Get the marge mini.
     *
     * @return float|null Returns the marge mini.
     */
    public function getMargeMini(): ?float {
        return $this->margeMini;
    }

    /**
     * Get the mini facturable.
     *
     * @return float|null Returns the mini facturable.
     */
    public function getMiniFacturable(): ?float {
        return $this->miniFacturable;
    }

    /**
     * Get the modele code barre.
     *
     * @return string|null Returns the modele code barre.
     */
    public function getModeleCodeBarre(): ?string {
        return $this->modeleCodeBarre;
    }

    /**
     * Get the modele code barre f.
     *
     * @return string|null Returns the modele code barre f.
     */
    public function getModeleCodeBarreF(): ?string {
        return $this->modeleCodeBarreF;
    }

    /**
     * Get the mt soumis tva2.
     *
     * @return float|null Returns the mt soumis tva2.
     */
    public function getMtSoumisTva2(): ?float {
        return $this->mtSoumisTva2;
    }

    /**
     * Get the mt tare.
     *
     * @return float|null Returns the mt tare.
     */
    public function getMtTare(): ?float {
        return $this->mtTare;
    }

    /**
     * Get the multi tva avec remises.
     *
     * @return bool|null Returns the multi tva avec remises.
     */
    public function getMultiTvaAvecRemises(): ?bool {
        return $this->multiTvaAvecRemises;
    }

    /**
     * Get the nature produit.
     *
     * @return string|null Returns the nature produit.
     */
    public function getNatureProduit(): ?string {
        return $this->natureProduit;
    }

    /**
     * Get the nb heures.
     *
     * @return float|null Returns the nb heures.
     */
    public function getNbHeures(): ?float {
        return $this->nbHeures;
    }

    /**
     * Get the ne pas cumuler stats.
     *
     * @return bool|null Returns the ne pas cumuler stats.
     */
    public function getNePasCumulerStats(): ?bool {
        return $this->nePasCumulerStats;
    }

    /**
     * Get the ne pas editer.
     *
     * @return bool|null Returns the ne pas editer.
     */
    public function getNePasEditer(): ?bool {
        return $this->nePasEditer;
    }

    /**
     * Get the ne plus commander.
     *
     * @return bool|null Returns the ne plus commander.
     */
    public function getNePlusCommander(): ?bool {
        return $this->nePlusCommander;
    }

    /**
     * Get the neutre.
     *
     * @return bool|null Returns the neutre.
     */
    public function getNeutre(): ?bool {
        return $this->neutre;
    }

    /**
     * Get the niveau apparition.
     *
     * @return int|null Returns the niveau apparition.
     */
    public function getNiveauApparition(): ?int {
        return $this->niveauApparition;
    }

    /**
     * Get the niveau totalisation.
     *
     * @return string|null Returns the niveau totalisation.
     */
    public function getNiveauTotalisation(): ?string {
        return $this->niveauTotalisation;
    }

    /**
     * Get the nomenclature ensemble.
     *
     * @return bool|null Returns the nomenclature ensemble.
     */
    public function getNomenclatureEnsemble(): ?bool {
        return $this->nomenclatureEnsemble;
    }

    /**
     * Get the nomenclature europe.
     *
     * @return string|null Returns the nomenclature europe.
     */
    public function getNomenclatureEurope(): ?string {
        return $this->nomenclatureEurope;
    }

    /**
     * Get the num compte achat.
     *
     * @return string|null Returns the num compte achat.
     */
    public function getNumCompteAchat(): ?string {
        return $this->numCompteAchat;
    }

    /**
     * Get the num compte vente.
     *
     * @return string|null Returns the num compte vente.
     */
    public function getNumCompteVente(): ?string {
        return $this->numCompteVente;
    }

    /**
     * Get the numero pj.
     *
     * @return int|null Returns the numero pj.
     */
    public function getNumeroPj(): ?int {
        return $this->numeroPj;
    }

    /**
     * Get the pamp.
     *
     * @return float|null Returns the pamp.
     */
    public function getPamp(): ?float {
        return $this->pamp;
    }

    /**
     * Get the param cde.
     *
     * @return float|null Returns the param cde.
     */
    public function getParamCde(): ?float {
        return $this->paramCde;
    }

    /**
     * Get the poids unitaire.
     *
     * @return float|null Returns the poids unitaire.
     */
    public function getPoidsUnitaire(): ?float {
        return $this->poidsUnitaire;
    }

    /**
     * Get the prix achat ckp.
     *
     * @return string|null Returns the prix achat ckp.
     */
    public function getPrixAchatCkp(): ?string {
        return $this->prixAchatCkp;
    }

    /**
     * Get the prix fixe.
     *
     * @return bool|null Returns the prix fixe.
     */
    public function getPrixFixe(): ?bool {
        return $this->prixFixe;
    }

    /**
     * Get the prix mini.
     *
     * @return float|null Returns the prix mini.
     */
    public function getPrixMini(): ?float {
        return $this->prixMini;
    }

    /**
     * Get the prix net.
     *
     * @return bool|null Returns the prix net.
     */
    public function getPrixNet(): ?bool {
        return $this->prixNet;
    }

    /**
     * Get the prix revient.
     *
     * @return float|null Returns the prix revient.
     */
    public function getPrixRevient(): ?float {
        return $this->prixRevient;
    }

    /**
     * Get the prix revient net.
     *
     * @return float|null Returns the prix revient net.
     */
    public function getPrixRevientNet(): ?float {
        return $this->prixRevientNet;
    }

    /**
     * Get the prix vente ckp.
     *
     * @return string|null Returns the prix vente ckp.
     */
    public function getPrixVenteCkp(): ?string {
        return $this->prixVenteCkp;
    }

    /**
     * Get the prmp.
     *
     * @return float|null Returns the prmp.
     */
    public function getPrmp(): ?float {
        return $this->prmp;
    }

    /**
     * Get the provenance.
     *
     * @return string|null Returns the provenance.
     */
    public function getProvenance(): ?string {
        return $this->provenance;
    }

    /**
     * Get the px achat brut.
     *
     * @return float|null Returns the px achat brut.
     */
    public function getPxAchatBrut(): ?float {
        return $this->pxAchatBrut;
    }

    /**
     * Get the px achat colis.
     *
     * @return bool|null Returns the px achat colis.
     */
    public function getPxAchatColis(): ?bool {
        return $this->pxAchatColis;
    }

    /**
     * Get the px achat en devise.
     *
     * @return float|null Returns the px achat en devise.
     */
    public function getPxAchatEnDevise(): ?float {
        return $this->pxAchatEnDevise;
    }

    /**
     * Get the px unit a editer.
     *
     * @return bool|null Returns the px unit a editer.
     */
    public function getPxUnitAEditer(): ?bool {
        return $this->pxUnitAEditer;
    }

    /**
     * Get the px vente colis.
     *
     * @return bool|null Returns the px vente colis.
     */
    public function getPxVenteColis(): ?bool {
        return $this->pxVenteColis;
    }

    /**
     * Get the px vente ht euro.
     *
     * @return float|null Returns the px vente ht euro.
     */
    public function getPxVenteHtEuro(): ?float {
        return $this->pxVenteHtEuro;
    }

    /**
     * Get the px vente ht frf.
     *
     * @return float|null Returns the px vente ht frf.
     */
    public function getPxVenteHtFrf(): ?float {
        return $this->pxVenteHtFrf;
    }

    /**
     * Get the px vente ttc euro.
     *
     * @return float|null Returns the px vente ttc euro.
     */
    public function getPxVenteTtcEuro(): ?float {
        return $this->pxVenteTtcEuro;
    }

    /**
     * Get the px vente ttc frf.
     *
     * @return float|null Returns the px vente ttc frf.
     */
    public function getPxVenteTtcFrf(): ?float {
        return $this->pxVenteTtcFrf;
    }

    /**
     * Get the qte a editer.
     *
     * @return bool|null Returns the qte a editer.
     */
    public function getQteAEditer(): ?bool {
        return $this->qteAEditer;
    }

    /**
     * Get the qte eco commande.
     *
     * @return float|null Returns the qte eco commande.
     */
    public function getQteEcoCommande(): ?float {
        return $this->qteEcoCommande;
    }

    /**
     * Get the qte hab commande.
     *
     * @return float|null Returns the qte hab commande.
     */
    public function getQteHabCommande(): ?float {
        return $this->qteHabCommande;
    }

    /**
     * Get the qte max facture.
     *
     * @return float|null Returns the qte max facture.
     */
    public function getQteMaxFacture(): ?float {
        return $this->qteMaxFacture;
    }

    /**
     * Get the qte min commande.
     *
     * @return float|null Returns the qte min commande.
     */
    public function getQteMinCommande(): ?float {
        return $this->qteMinCommande;
    }

    /**
     * Get the regroup fact.
     *
     * @return string|null Returns the regroup fact.
     */
    public function getRegroupFact(): ?string {
        return $this->regroupFact;
    }

    /**
     * Get the regroup fact tp.
     *
     * @return int|null Returns the regroup fact tp.
     */
    public function getRegroupFactTp(): ?int {
        return $this->regroupFactTp;
    }

    /**
     * Get the remise1en montant.
     *
     * @return bool|null Returns the remise1en montant.
     */
    public function getRemise1enMontant(): ?bool {
        return $this->remise1enMontant;
    }

    /**
     * Get the remise2en montant.
     *
     * @return bool|null Returns the remise2en montant.
     */
    public function getRemise2enMontant(): ?bool {
        return $this->remise2enMontant;
    }

    /**
     * Get the remise achat1.
     *
     * @return float|null Returns the remise achat1.
     */
    public function getRemiseAchat1(): ?float {
        return $this->remiseAchat1;
    }

    /**
     * Get the remise achat2.
     *
     * @return float|null Returns the remise achat2.
     */
    public function getRemiseAchat2(): ?float {
        return $this->remiseAchat2;
    }

    /**
     * Get the remise achat3.
     *
     * @return float|null Returns the remise achat3.
     */
    public function getRemiseAchat3(): ?float {
        return $this->remiseAchat3;
    }

    /**
     * Get the remise sup achat1.
     *
     * @return float|null Returns the remise sup achat1.
     */
    public function getRemiseSupAchat1(): ?float {
        return $this->remiseSupAchat1;
    }

    /**
     * Get the remise sup achat1 en montant.
     *
     * @return bool|null Returns the remise sup achat1 en montant.
     */
    public function getRemiseSupAchat1EnMontant(): ?bool {
        return $this->remiseSupAchat1EnMontant;
    }

    /**
     * Get the remise sup achat2.
     *
     * @return float|null Returns the remise sup achat2.
     */
    public function getRemiseSupAchat2(): ?float {
        return $this->remiseSupAchat2;
    }

    /**
     * Get the remise sup achat2 en montant.
     *
     * @return bool|null Returns the remise sup achat2 en montant.
     */
    public function getRemiseSupAchat2EnMontant(): ?bool {
        return $this->remiseSupAchat2EnMontant;
    }

    /**
     * Get the remise sup achat3.
     *
     * @return float|null Returns the remise sup achat3.
     */
    public function getRemiseSupAchat3(): ?float {
        return $this->remiseSupAchat3;
    }

    /**
     * Get the remise sup achat3 en montant.
     *
     * @return bool|null Returns the remise sup achat3 en montant.
     */
    public function getRemiseSupAchat3EnMontant(): ?bool {
        return $this->remiseSupAchat3EnMontant;
    }

    /**
     * Get the remises interdites.
     *
     * @return bool|null Returns the remises interdites.
     */
    public function getRemisesInterdites(): ?bool {
        return $this->remisesInterdites;
    }

    /**
     * Get the soumis certif.
     *
     * @return bool|null Returns the soumis certif.
     */
    public function getSoumisCertif(): ?bool {
        return $this->soumisCertif;
    }

    /**
     * Get the ss famille achat.
     *
     * @return string|null Returns the ss famille achat.
     */
    public function getSsFamilleAchat(): ?string {
        return $this->ssFamilleAchat;
    }

    /**
     * Get the suivi stock.
     *
     * @return bool|null Returns the suivi stock.
     */
    public function getSuiviStock(): ?bool {
        return $this->suiviStock;
    }

    /**
     * Get the tare vat.
     *
     * @return string|null Returns the tare vat.
     */
    public function getTareVat(): ?string {
        return $this->tareVat;
    }

    /**
     * Get the taux alcool.
     *
     * @return float|null Returns the taux alcool.
     */
    public function getTauxAlcool(): ?float {
        return $this->tauxAlcool;
    }

    /**
     * Get the taux devise achat.
     *
     * @return float|null Returns the taux devise achat.
     */
    public function getTauxDeviseAchat(): ?float {
        return $this->tauxDeviseAchat;
    }

    /**
     * Get the tva encaissement.
     *
     * @return bool|null Returns the tva encaissement.
     */
    public function getTvaEncaissement(): ?bool {
        return $this->tvaEncaissement;
    }

    /**
     * Get the tx commission.
     *
     * @return float|null Returns the tx commission.
     */
    public function getTxCommission(): ?float {
        return $this->txCommission;
    }

    /**
     * Get the type arrondi.
     *
     * @return string|null Returns the type arrondi.
     */
    public function getTypeArrondi(): ?string {
        return $this->typeArrondi;
    }

    /**
     * Get the type heure.
     *
     * @return bool|null Returns the type heure.
     */
    public function getTypeHeure(): ?bool {
        return $this->typeHeure;
    }

    /**
     * Get the type unite.
     *
     * @return string|null Returns the type unite.
     */
    public function getTypeUnite(): ?string {
        return $this->typeUnite;
    }

    /**
     * Get the unite activite.
     *
     * @return bool|null Returns the unite activite.
     */
    public function getUniteActivite(): ?bool {
        return $this->uniteActivite;
    }

    /**
     * Get the variante.
     *
     * @return bool|null Returns the variante.
     */
    public function getVariante(): ?bool {
        return $this->variante;
    }

    /**
     * Get the vente par colis.
     *
     * @return bool|null Returns the vente par colis.
     */
    public function getVenteParColis(): ?bool {
        return $this->venteParColis;
    }

    /**
     * Get the volume.
     *
     * @return float|null Returns the volume.
     */
    public function getVolume(): ?float {
        return $this->volume;
    }

    /**
     * Set the achat par colis.
     *
     * @param bool|null $achatParColis The achat par colis.
     * @return Articles Returns this Articles.
     */
    public function setAchatParColis(?bool $achatParColis): Articles {
        $this->achatParColis = $achatParColis;
        return $this;
    }

    /**
     * Set the actif.
     *
     * @param bool|null $actif The actif.
     * @return Articles Returns this Articles.
     */
    public function setActif(?bool $actif): Articles {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the allee casier.
     *
     * @param string|null $alleeCasier The allee casier.
     * @return Articles Returns this Articles.
     */
    public function setAlleeCasier(?string $alleeCasier): Articles {
        $this->alleeCasier = $alleeCasier;
        return $this;
    }

    /**
     * Set the article frais.
     *
     * @param bool|null $articleFrais The article frais.
     * @return Articles Returns this Articles.
     */
    public function setArticleFrais(?bool $articleFrais): Articles {
        $this->articleFrais = $articleFrais;
        return $this;
    }

    /**
     * Set the article rattache.
     *
     * @param string|null $articleRattache The article rattache.
     * @return Articles Returns this Articles.
     */
    public function setArticleRattache(?string $articleRattache): Articles {
        $this->articleRattache = $articleRattache;
        return $this;
    }

    /**
     * Set the article regroupement.
     *
     * @param string|null $articleRegroupement The article regroupement.
     * @return Articles Returns this Articles.
     */
    public function setArticleRegroupement(?string $articleRegroupement): Articles {
        $this->articleRegroupement = $articleRegroupement;
        return $this;
    }

    /**
     * Set the article remplacement.
     *
     * @param string|null $articleRemplacement The article remplacement.
     * @return Articles Returns this Articles.
     */
    public function setArticleRemplacement(?string $articleRemplacement): Articles {
        $this->articleRemplacement = $articleRemplacement;
        return $this;
    }

    /**
     * Set the article taxe1.
     *
     * @param string|null $articleTaxe1 The article taxe1.
     * @return Articles Returns this Articles.
     */
    public function setArticleTaxe1(?string $articleTaxe1): Articles {
        $this->articleTaxe1 = $articleTaxe1;
        return $this;
    }

    /**
     * Set the article taxe2.
     *
     * @param string|null $articleTaxe2 The article taxe2.
     * @return Articles Returns this Articles.
     */
    public function setArticleTaxe2(?string $articleTaxe2): Articles {
        $this->articleTaxe2 = $articleTaxe2;
        return $this;
    }

    /**
     * Set the article taxe3.
     *
     * @param string|null $articleTaxe3 The article taxe3.
     * @return Articles Returns this Articles.
     */
    public function setArticleTaxe3(?string $articleTaxe3): Articles {
        $this->articleTaxe3 = $articleTaxe3;
        return $this;
    }

    /**
     * Set the article taxe4.
     *
     * @param string|null $articleTaxe4 The article taxe4.
     * @return Articles Returns this Articles.
     */
    public function setArticleTaxe4(?string $articleTaxe4): Articles {
        $this->articleTaxe4 = $articleTaxe4;
        return $this;
    }

    /**
     * Set the article taxe5.
     *
     * @param string|null $articleTaxe5 The article taxe5.
     * @return Articles Returns this Articles.
     */
    public function setArticleTaxe5(?string $articleTaxe5): Articles {
        $this->articleTaxe5 = $articleTaxe5;
        return $this;
    }

    /**
     * Set the calcul coeff pa pv.
     *
     * @param bool|null $calculCoeffPaPv The calcul coeff pa pv.
     * @return Articles Returns this Articles.
     */
    public function setCalculCoeffPaPv(?bool $calculCoeffPaPv): Articles {
        $this->calculCoeffPaPv = $calculCoeffPaPv;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return Articles Returns this Articles.
     */
    public function setCodeArticle(?string $codeArticle): Articles {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code article2.
     *
     * @param string|null $codeArticle2 The code article2.
     * @return Articles Returns this Articles.
     */
    public function setCodeArticle2(?string $codeArticle2): Articles {
        $this->codeArticle2 = $codeArticle2;
        return $this;
    }

    /**
     * Set the code devise achat.
     *
     * @param string|null $codeDeviseAchat The code devise achat.
     * @return Articles Returns this Articles.
     */
    public function setCodeDeviseAchat(?string $codeDeviseAchat): Articles {
        $this->codeDeviseAchat = $codeDeviseAchat;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string|null $codeFamille The code famille.
     * @return Articles Returns this Articles.
     */
    public function setCodeFamille(?string $codeFamille): Articles {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string|null $codeFournisseur The code fournisseur.
     * @return Articles Returns this Articles.
     */
    public function setCodeFournisseur(?string $codeFournisseur): Articles {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code gamme.
     *
     * @param string|null $codeGamme The code gamme.
     * @return Articles Returns this Articles.
     */
    public function setCodeGamme(?string $codeGamme): Articles {
        $this->codeGamme = $codeGamme;
        return $this;
    }

    /**
     * Set the code grille gamme.
     *
     * @param string|null $codeGrilleGamme The code grille gamme.
     * @return Articles Returns this Articles.
     */
    public function setCodeGrilleGamme(?string $codeGrilleGamme): Articles {
        $this->codeGrilleGamme = $codeGrilleGamme;
        return $this;
    }

    /**
     * Set the code honoraire.
     *
     * @param string|null $codeHonoraire The code honoraire.
     * @return Articles Returns this Articles.
     */
    public function setCodeHonoraire(?string $codeHonoraire): Articles {
        $this->codeHonoraire = $codeHonoraire;
        return $this;
    }

    /**
     * Set the code imputation analytique.
     *
     * @param string|null $codeImputationAnalytique The code imputation analytique.
     * @return Articles Returns this Articles.
     */
    public function setCodeImputationAnalytique(?string $codeImputationAnalytique): Articles {
        $this->codeImputationAnalytique = $codeImputationAnalytique;
        return $this;
    }

    /**
     * Set the code presentation.
     *
     * @param string|null $codePresentation The code presentation.
     * @return Articles Returns this Articles.
     */
    public function setCodePresentation(?string $codePresentation): Articles {
        $this->codePresentation = $codePresentation;
        return $this;
    }

    /**
     * Set the code ss famille.
     *
     * @param string|null $codeSsFamille The code ss famille.
     * @return Articles Returns this Articles.
     */
    public function setCodeSsFamille(?string $codeSsFamille): Articles {
        $this->codeSsFamille = $codeSsFamille;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return Articles Returns this Articles.
     */
    public function setCodeTache(?string $codeTache): Articles {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code tarif art.
     *
     * @param string|null $codeTarifArt The code tarif art.
     * @return Articles Returns this Articles.
     */
    public function setCodeTarifArt(?string $codeTarifArt): Articles {
        $this->codeTarifArt = $codeTarifArt;
        return $this;
    }

    /**
     * Set the code taxe.
     *
     * @param string|null $codeTaxe The code taxe.
     * @return Articles Returns this Articles.
     */
    public function setCodeTaxe(?string $codeTaxe): Articles {
        $this->codeTaxe = $codeTaxe;
        return $this;
    }

    /**
     * Set the code tva achat.
     *
     * @param string|null $codeTvaAchat The code tva achat.
     * @return Articles Returns this Articles.
     */
    public function setCodeTvaAchat(?string $codeTvaAchat): Articles {
        $this->codeTvaAchat = $codeTvaAchat;
        return $this;
    }

    /**
     * Set the code tva vente.
     *
     * @param string|null $codeTvaVente The code tva vente.
     * @return Articles Returns this Articles.
     */
    public function setCodeTvaVente(?string $codeTvaVente): Articles {
        $this->codeTvaVente = $codeTvaVente;
        return $this;
    }

    /**
     * Set the code tva vente2.
     *
     * @param string|null $codeTvaVente2 The code tva vente2.
     * @return Articles Returns this Articles.
     */
    public function setCodeTvaVente2(?string $codeTvaVente2): Articles {
        $this->codeTvaVente2 = $codeTvaVente2;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string|null $codeUnite The code unite.
     * @return Articles Returns this Articles.
     */
    public function setCodeUnite(?string $codeUnite): Articles {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code ventil achat.
     *
     * @param string|null $codeVentilAchat The code ventil achat.
     * @return Articles Returns this Articles.
     */
    public function setCodeVentilAchat(?string $codeVentilAchat): Articles {
        $this->codeVentilAchat = $codeVentilAchat;
        return $this;
    }

    /**
     * Set the code ventil vente.
     *
     * @param string|null $codeVentilVente The code ventil vente.
     * @return Articles Returns this Articles.
     */
    public function setCodeVentilVente(?string $codeVentilVente): Articles {
        $this->codeVentilVente = $codeVentilVente;
        return $this;
    }

    /**
     * Set the code ventil vente2.
     *
     * @param string|null $codeVentilVente2 The code ventil vente2.
     * @return Articles Returns this Articles.
     */
    public function setCodeVentilVente2(?string $codeVentilVente2): Articles {
        $this->codeVentilVente2 = $codeVentilVente2;
        return $this;
    }

    /**
     * Set the coeff pv pa.
     *
     * @param float|null $coeffPvPa The coeff pv pa.
     * @return Articles Returns this Articles.
     */
    public function setCoeffPvPa(?float $coeffPvPa): Articles {
        $this->coeffPvPa = $coeffPvPa;
        return $this;
    }

    /**
     * Set the coeff sur px achat.
     *
     * @param string|null $coeffSurPxAchat The coeff sur px achat.
     * @return Articles Returns this Articles.
     */
    public function setCoeffSurPxAchat(?string $coeffSurPxAchat): Articles {
        $this->coeffSurPxAchat = $coeffSurPxAchat;
        return $this;
    }

    /**
     * Set the coeff sur px achat brut.
     *
     * @param bool|null $coeffSurPxAchatBrut The coeff sur px achat brut.
     * @return Articles Returns this Articles.
     */
    public function setCoeffSurPxAchatBrut(?bool $coeffSurPxAchatBrut): Articles {
        $this->coeffSurPxAchatBrut = $coeffSurPxAchatBrut;
        return $this;
    }

    /**
     * Set the colisage achat.
     *
     * @param float|null $colisageAchat The colisage achat.
     * @return Articles Returns this Articles.
     */
    public function setColisageAchat(?float $colisageAchat): Articles {
        $this->colisageAchat = $colisageAchat;
        return $this;
    }

    /**
     * Set the colisage px achat.
     *
     * @param float|null $colisagePxAchat The colisage px achat.
     * @return Articles Returns this Articles.
     */
    public function setColisagePxAchat(?float $colisagePxAchat): Articles {
        $this->colisagePxAchat = $colisagePxAchat;
        return $this;
    }

    /**
     * Set the colisage px vente.
     *
     * @param float|null $colisagePxVente The colisage px vente.
     * @return Articles Returns this Articles.
     */
    public function setColisagePxVente(?float $colisagePxVente): Articles {
        $this->colisagePxVente = $colisagePxVente;
        return $this;
    }

    /**
     * Set the colisage vente.
     *
     * @param float|null $colisageVente The colisage vente.
     * @return Articles Returns this Articles.
     */
    public function setColisageVente(?float $colisageVente): Articles {
        $this->colisageVente = $colisageVente;
        return $this;
    }

    /**
     * Set the commission unique.
     *
     * @param bool|null $commissionUnique The commission unique.
     * @return Articles Returns this Articles.
     */
    public function setCommissionUnique(?bool $commissionUnique): Articles {
        $this->commissionUnique = $commissionUnique;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Articles Returns this Articles.
     */
    public function setComplement(?string $complement): Articles {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the conditionnement1.
     *
     * @param float|null $conditionnement1 The conditionnement1.
     * @return Articles Returns this Articles.
     */
    public function setConditionnement1(?float $conditionnement1): Articles {
        $this->conditionnement1 = $conditionnement1;
        return $this;
    }

    /**
     * Set the conditionnement2.
     *
     * @param float|null $conditionnement2 The conditionnement2.
     * @return Articles Returns this Articles.
     */
    public function setConditionnement2(?float $conditionnement2): Articles {
        $this->conditionnement2 = $conditionnement2;
        return $this;
    }

    /**
     * Set the conditionnement3.
     *
     * @param float|null $conditionnement3 The conditionnement3.
     * @return Articles Returns this Articles.
     */
    public function setConditionnement3(?float $conditionnement3): Articles {
        $this->conditionnement3 = $conditionnement3;
        return $this;
    }

    /**
     * Set the contremarque interdite.
     *
     * @param bool|null $contremarqueInterdite The contremarque interdite.
     * @return Articles Returns this Articles.
     */
    public function setContremarqueInterdite(?bool $contremarqueInterdite): Articles {
        $this->contremarqueInterdite = $contremarqueInterdite;
        return $this;
    }

    /**
     * Set the cout supp.
     *
     * @param float|null $coutSupp The cout supp.
     * @return Articles Returns this Articles.
     */
    public function setCoutSupp(?float $coutSupp): Articles {
        $this->coutSupp = $coutSupp;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Articles Returns this Articles.
     */
    public function setDateCreation(?DateTime $dateCreation): Articles {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Articles Returns this Articles.
     */
    public function setDateModification(?DateTime $dateModification): Articles {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the debour.
     *
     * @param bool|null $debour The debour.
     * @return Articles Returns this Articles.
     */
    public function setDebour(?bool $debour): Articles {
        $this->debour = $debour;
        return $this;
    }

    /**
     * Set the dernier px achat.
     *
     * @param float|null $dernierPxAchat The dernier px achat.
     * @return Articles Returns this Articles.
     */
    public function setDernierPxAchat(?float $dernierPxAchat): Articles {
        $this->dernierPxAchat = $dernierPxAchat;
        return $this;
    }

    /**
     * Set the designation apres.
     *
     * @param string|null $designationApres The designation apres.
     * @return Articles Returns this Articles.
     */
    public function setDesignationApres(?string $designationApres): Articles {
        $this->designationApres = $designationApres;
        return $this;
    }

    /**
     * Set the designation avant.
     *
     * @param string|null $designationAvant The designation avant.
     * @return Articles Returns this Articles.
     */
    public function setDesignationAvant(?string $designationAvant): Articles {
        $this->designationAvant = $designationAvant;
        return $this;
    }

    /**
     * Set the editer article rattache.
     *
     * @param bool|null $editerArticleRattache The editer article rattache.
     * @return Articles Returns this Articles.
     */
    public function setEditerArticleRattache(?bool $editerArticleRattache): Articles {
        $this->editerArticleRattache = $editerArticleRattache;
        return $this;
    }

    /**
     * Set the editer article remplacement.
     *
     * @param bool|null $editerArticleRemplacement The editer article remplacement.
     * @return Articles Returns this Articles.
     */
    public function setEditerArticleRemplacement(?bool $editerArticleRemplacement): Articles {
        $this->editerArticleRemplacement = $editerArticleRemplacement;
        return $this;
    }

    /**
     * Set the ensemble.
     *
     * @param bool|null $ensemble The ensemble.
     * @return Articles Returns this Articles.
     */
    public function setEnsemble(?bool $ensemble): Articles {
        $this->ensemble = $ensemble;
        return $this;
    }

    /**
     * Set the est multi tva.
     *
     * @param bool|null $estMultiTva The est multi tva.
     * @return Articles Returns this Articles.
     */
    public function setEstMultiTva(?bool $estMultiTva): Articles {
        $this->estMultiTva = $estMultiTva;
        return $this;
    }

    /**
     * Set the est occasion.
     *
     * @param bool|null $estOccasion The est occasion.
     * @return Articles Returns this Articles.
     */
    public function setEstOccasion(?bool $estOccasion): Articles {
        $this->estOccasion = $estOccasion;
        return $this;
    }

    /**
     * Set the facturation ttc.
     *
     * @param bool|null $facturationTtc The facturation ttc.
     * @return Articles Returns this Articles.
     */
    public function setFacturationTtc(?bool $facturationTtc): Articles {
        $this->facturationTtc = $facturationTtc;
        return $this;
    }

    /**
     * Set the famille achat.
     *
     * @param string|null $familleAchat The famille achat.
     * @return Articles Returns this Articles.
     */
    public function setFamilleAchat(?string $familleAchat): Articles {
        $this->familleAchat = $familleAchat;
        return $this;
    }

    /**
     * Set the frais1.
     *
     * @param float|null $frais1 The frais1.
     * @return Articles Returns this Articles.
     */
    public function setFrais1(?float $frais1): Articles {
        $this->frais1 = $frais1;
        return $this;
    }

    /**
     * Set the frais2.
     *
     * @param float|null $frais2 The frais2.
     * @return Articles Returns this Articles.
     */
    public function setFrais2(?float $frais2): Articles {
        $this->frais2 = $frais2;
        return $this;
    }

    /**
     * Set the frais3.
     *
     * @param float|null $frais3 The frais3.
     * @return Articles Returns this Articles.
     */
    public function setFrais3(?float $frais3): Articles {
        $this->frais3 = $frais3;
        return $this;
    }

    /**
     * Set the ha coeff pv pa.
     *
     * @param float|null $haCoeffPvPa The ha coeff pv pa.
     * @return Articles Returns this Articles.
     */
    public function setHaCoeffPvPa(?float $haCoeffPvPa): Articles {
        $this->haCoeffPvPa = $haCoeffPvPa;
        return $this;
    }

    /**
     * Set the ha coeff sur px achat.
     *
     * @param string|null $haCoeffSurPxAchat The ha coeff sur px achat.
     * @return Articles Returns this Articles.
     */
    public function setHaCoeffSurPxAchat(?string $haCoeffSurPxAchat): Articles {
        $this->haCoeffSurPxAchat = $haCoeffSurPxAchat;
        return $this;
    }

    /**
     * Set the ha date pa.
     *
     * @param DateTime|null $haDatePa The ha date pa.
     * @return Articles Returns this Articles.
     */
    public function setHaDatePa(?DateTime $haDatePa): Articles {
        $this->haDatePa = $haDatePa;
        return $this;
    }

    /**
     * Set the ha date pv.
     *
     * @param DateTime|null $haDatePv The ha date pv.
     * @return Articles Returns this Articles.
     */
    public function setHaDatePv(?DateTime $haDatePv): Articles {
        $this->haDatePv = $haDatePv;
        return $this;
    }

    /**
     * Set the ha dernier px achat.
     *
     * @param float|null $haDernierPxAchat The ha dernier px achat.
     * @return Articles Returns this Articles.
     */
    public function setHaDernierPxAchat(?float $haDernierPxAchat): Articles {
        $this->haDernierPxAchat = $haDernierPxAchat;
        return $this;
    }

    /**
     * Set the ha prix revient.
     *
     * @param float|null $haPrixRevient The ha prix revient.
     * @return Articles Returns this Articles.
     */
    public function setHaPrixRevient(?float $haPrixRevient): Articles {
        $this->haPrixRevient = $haPrixRevient;
        return $this;
    }

    /**
     * Set the ha prix revient net.
     *
     * @param float|null $haPrixRevientNet The ha prix revient net.
     * @return Articles Returns this Articles.
     */
    public function setHaPrixRevientNet(?float $haPrixRevientNet): Articles {
        $this->haPrixRevientNet = $haPrixRevientNet;
        return $this;
    }

    /**
     * Set the ha prix vente.
     *
     * @param float|null $haPrixVente The ha prix vente.
     * @return Articles Returns this Articles.
     */
    public function setHaPrixVente(?float $haPrixVente): Articles {
        $this->haPrixVente = $haPrixVente;
        return $this;
    }

    /**
     * Set the ha px achat brut.
     *
     * @param float|null $haPxAchatBrut The ha px achat brut.
     * @return Articles Returns this Articles.
     */
    public function setHaPxAchatBrut(?float $haPxAchatBrut): Articles {
        $this->haPxAchatBrut = $haPxAchatBrut;
        return $this;
    }

    /**
     * Set the ha remise achat1.
     *
     * @param float|null $haRemiseAchat1 The ha remise achat1.
     * @return Articles Returns this Articles.
     */
    public function setHaRemiseAchat1(?float $haRemiseAchat1): Articles {
        $this->haRemiseAchat1 = $haRemiseAchat1;
        return $this;
    }

    /**
     * Set the ha remise achat2.
     *
     * @param float|null $haRemiseAchat2 The ha remise achat2.
     * @return Articles Returns this Articles.
     */
    public function setHaRemiseAchat2(?float $haRemiseAchat2): Articles {
        $this->haRemiseAchat2 = $haRemiseAchat2;
        return $this;
    }

    /**
     * Set the ha remise achat3.
     *
     * @param float|null $haRemiseAchat3 The ha remise achat3.
     * @return Articles Returns this Articles.
     */
    public function setHaRemiseAchat3(?float $haRemiseAchat3): Articles {
        $this->haRemiseAchat3 = $haRemiseAchat3;
        return $this;
    }

    /**
     * Set the ha remise sup achat1.
     *
     * @param float|null $haRemiseSupAchat1 The ha remise sup achat1.
     * @return Articles Returns this Articles.
     */
    public function setHaRemiseSupAchat1(?float $haRemiseSupAchat1): Articles {
        $this->haRemiseSupAchat1 = $haRemiseSupAchat1;
        return $this;
    }

    /**
     * Set the ha remise sup achat2.
     *
     * @param float|null $haRemiseSupAchat2 The ha remise sup achat2.
     * @return Articles Returns this Articles.
     */
    public function setHaRemiseSupAchat2(?float $haRemiseSupAchat2): Articles {
        $this->haRemiseSupAchat2 = $haRemiseSupAchat2;
        return $this;
    }

    /**
     * Set the ha remise sup achat3.
     *
     * @param float|null $haRemiseSupAchat3 The ha remise sup achat3.
     * @return Articles Returns this Articles.
     */
    public function setHaRemiseSupAchat3(?float $haRemiseSupAchat3): Articles {
        $this->haRemiseSupAchat3 = $haRemiseSupAchat3;
        return $this;
    }

    /**
     * Set the hauteur.
     *
     * @param float|null $hauteur The hauteur.
     * @return Articles Returns this Articles.
     */
    public function setHauteur(?float $hauteur): Articles {
        $this->hauteur = $hauteur;
        return $this;
    }

    /**
     * Set the honoraires.
     *
     * @param bool|null $honoraires The honoraires.
     * @return Articles Returns this Articles.
     */
    public function setHonoraires(?bool $honoraires): Articles {
        $this->honoraires = $honoraires;
        return $this;
    }

    /**
     * Set the honoraires uniquement.
     *
     * @param bool|null $honorairesUniquement The honoraires uniquement.
     * @return Articles Returns this Articles.
     */
    public function setHonorairesUniquement(?bool $honorairesUniquement): Articles {
        $this->honorairesUniquement = $honorairesUniquement;
        return $this;
    }

    /**
     * Set the hors stock.
     *
     * @param bool|null $horsStock The hors stock.
     * @return Articles Returns this Articles.
     */
    public function setHorsStock(?bool $horsStock): Articles {
        $this->horsStock = $horsStock;
        return $this;
    }

    /**
     * Set the intitule1.
     *
     * @param string|null $intitule1 The intitule1.
     * @return Articles Returns this Articles.
     */
    public function setIntitule1(?string $intitule1): Articles {
        $this->intitule1 = $intitule1;
        return $this;
    }

    /**
     * Set the intitule2.
     *
     * @param string|null $intitule2 The intitule2.
     * @return Articles Returns this Articles.
     */
    public function setIntitule2(?string $intitule2): Articles {
        $this->intitule2 = $intitule2;
        return $this;
    }

    /**
     * Set the intitule3.
     *
     * @param string|null $intitule3 The intitule3.
     * @return Articles Returns this Articles.
     */
    public function setIntitule3(?string $intitule3): Articles {
        $this->intitule3 = $intitule3;
        return $this;
    }

    /**
     * Set the intitule4.
     *
     * @param string|null $intitule4 The intitule4.
     * @return Articles Returns this Articles.
     */
    public function setIntitule4(?string $intitule4): Articles {
        $this->intitule4 = $intitule4;
        return $this;
    }

    /**
     * Set the largeur.
     *
     * @param float|null $largeur The largeur.
     * @return Articles Returns this Articles.
     */
    public function setLargeur(?float $largeur): Articles {
        $this->largeur = $largeur;
        return $this;
    }

    /**
     * Set the libelle interne.
     *
     * @param string|null $libelleInterne The libelle interne.
     * @return Articles Returns this Articles.
     */
    public function setLibelleInterne(?string $libelleInterne): Articles {
        $this->libelleInterne = $libelleInterne;
        return $this;
    }

    /**
     * Set the longueur.
     *
     * @param float|null $longueur The longueur.
     * @return Articles Returns this Articles.
     */
    public function setLongueur(?float $longueur): Articles {
        $this->longueur = $longueur;
        return $this;
    }

    /**
     * Set the lot serie autre.
     *
     * @param bool|null $lotSerieAutre The lot serie autre.
     * @return Articles Returns this Articles.
     */
    public function setLotSerieAutre(?bool $lotSerieAutre): Articles {
        $this->lotSerieAutre = $lotSerieAutre;
        return $this;
    }

    /**
     * Set the marge mini.
     *
     * @param float|null $margeMini The marge mini.
     * @return Articles Returns this Articles.
     */
    public function setMargeMini(?float $margeMini): Articles {
        $this->margeMini = $margeMini;
        return $this;
    }

    /**
     * Set the mini facturable.
     *
     * @param float|null $miniFacturable The mini facturable.
     * @return Articles Returns this Articles.
     */
    public function setMiniFacturable(?float $miniFacturable): Articles {
        $this->miniFacturable = $miniFacturable;
        return $this;
    }

    /**
     * Set the modele code barre.
     *
     * @param string|null $modeleCodeBarre The modele code barre.
     * @return Articles Returns this Articles.
     */
    public function setModeleCodeBarre(?string $modeleCodeBarre): Articles {
        $this->modeleCodeBarre = $modeleCodeBarre;
        return $this;
    }

    /**
     * Set the modele code barre f.
     *
     * @param string|null $modeleCodeBarreF The modele code barre f.
     * @return Articles Returns this Articles.
     */
    public function setModeleCodeBarreF(?string $modeleCodeBarreF): Articles {
        $this->modeleCodeBarreF = $modeleCodeBarreF;
        return $this;
    }

    /**
     * Set the mt soumis tva2.
     *
     * @param float|null $mtSoumisTva2 The mt soumis tva2.
     * @return Articles Returns this Articles.
     */
    public function setMtSoumisTva2(?float $mtSoumisTva2): Articles {
        $this->mtSoumisTva2 = $mtSoumisTva2;
        return $this;
    }

    /**
     * Set the mt tare.
     *
     * @param float|null $mtTare The mt tare.
     * @return Articles Returns this Articles.
     */
    public function setMtTare(?float $mtTare): Articles {
        $this->mtTare = $mtTare;
        return $this;
    }

    /**
     * Set the multi tva avec remises.
     *
     * @param bool|null $multiTvaAvecRemises The multi tva avec remises.
     * @return Articles Returns this Articles.
     */
    public function setMultiTvaAvecRemises(?bool $multiTvaAvecRemises): Articles {
        $this->multiTvaAvecRemises = $multiTvaAvecRemises;
        return $this;
    }

    /**
     * Set the nature produit.
     *
     * @param string|null $natureProduit The nature produit.
     * @return Articles Returns this Articles.
     */
    public function setNatureProduit(?string $natureProduit): Articles {
        $this->natureProduit = $natureProduit;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float|null $nbHeures The nb heures.
     * @return Articles Returns this Articles.
     */
    public function setNbHeures(?float $nbHeures): Articles {
        $this->nbHeures = $nbHeures;
        return $this;
    }

    /**
     * Set the ne pas cumuler stats.
     *
     * @param bool|null $nePasCumulerStats The ne pas cumuler stats.
     * @return Articles Returns this Articles.
     */
    public function setNePasCumulerStats(?bool $nePasCumulerStats): Articles {
        $this->nePasCumulerStats = $nePasCumulerStats;
        return $this;
    }

    /**
     * Set the ne pas editer.
     *
     * @param bool|null $nePasEditer The ne pas editer.
     * @return Articles Returns this Articles.
     */
    public function setNePasEditer(?bool $nePasEditer): Articles {
        $this->nePasEditer = $nePasEditer;
        return $this;
    }

    /**
     * Set the ne plus commander.
     *
     * @param bool|null $nePlusCommander The ne plus commander.
     * @return Articles Returns this Articles.
     */
    public function setNePlusCommander(?bool $nePlusCommander): Articles {
        $this->nePlusCommander = $nePlusCommander;
        return $this;
    }

    /**
     * Set the neutre.
     *
     * @param bool|null $neutre The neutre.
     * @return Articles Returns this Articles.
     */
    public function setNeutre(?bool $neutre): Articles {
        $this->neutre = $neutre;
        return $this;
    }

    /**
     * Set the niveau apparition.
     *
     * @param int|null $niveauApparition The niveau apparition.
     * @return Articles Returns this Articles.
     */
    public function setNiveauApparition(?int $niveauApparition): Articles {
        $this->niveauApparition = $niveauApparition;
        return $this;
    }

    /**
     * Set the niveau totalisation.
     *
     * @param string|null $niveauTotalisation The niveau totalisation.
     * @return Articles Returns this Articles.
     */
    public function setNiveauTotalisation(?string $niveauTotalisation): Articles {
        $this->niveauTotalisation = $niveauTotalisation;
        return $this;
    }

    /**
     * Set the nomenclature ensemble.
     *
     * @param bool|null $nomenclatureEnsemble The nomenclature ensemble.
     * @return Articles Returns this Articles.
     */
    public function setNomenclatureEnsemble(?bool $nomenclatureEnsemble): Articles {
        $this->nomenclatureEnsemble = $nomenclatureEnsemble;
        return $this;
    }

    /**
     * Set the nomenclature europe.
     *
     * @param string|null $nomenclatureEurope The nomenclature europe.
     * @return Articles Returns this Articles.
     */
    public function setNomenclatureEurope(?string $nomenclatureEurope): Articles {
        $this->nomenclatureEurope = $nomenclatureEurope;
        return $this;
    }

    /**
     * Set the num compte achat.
     *
     * @param string|null $numCompteAchat The num compte achat.
     * @return Articles Returns this Articles.
     */
    public function setNumCompteAchat(?string $numCompteAchat): Articles {
        $this->numCompteAchat = $numCompteAchat;
        return $this;
    }

    /**
     * Set the num compte vente.
     *
     * @param string|null $numCompteVente The num compte vente.
     * @return Articles Returns this Articles.
     */
    public function setNumCompteVente(?string $numCompteVente): Articles {
        $this->numCompteVente = $numCompteVente;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return Articles Returns this Articles.
     */
    public function setNumeroPj(?int $numeroPj): Articles {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the pamp.
     *
     * @param float|null $pamp The pamp.
     * @return Articles Returns this Articles.
     */
    public function setPamp(?float $pamp): Articles {
        $this->pamp = $pamp;
        return $this;
    }

    /**
     * Set the param cde.
     *
     * @param float|null $paramCde The param cde.
     * @return Articles Returns this Articles.
     */
    public function setParamCde(?float $paramCde): Articles {
        $this->paramCde = $paramCde;
        return $this;
    }

    /**
     * Set the poids unitaire.
     *
     * @param float|null $poidsUnitaire The poids unitaire.
     * @return Articles Returns this Articles.
     */
    public function setPoidsUnitaire(?float $poidsUnitaire): Articles {
        $this->poidsUnitaire = $poidsUnitaire;
        return $this;
    }

    /**
     * Set the prix achat ckp.
     *
     * @param string|null $prixAchatCkp The prix achat ckp.
     * @return Articles Returns this Articles.
     */
    public function setPrixAchatCkp(?string $prixAchatCkp): Articles {
        $this->prixAchatCkp = $prixAchatCkp;
        return $this;
    }

    /**
     * Set the prix fixe.
     *
     * @param bool|null $prixFixe The prix fixe.
     * @return Articles Returns this Articles.
     */
    public function setPrixFixe(?bool $prixFixe): Articles {
        $this->prixFixe = $prixFixe;
        return $this;
    }

    /**
     * Set the prix mini.
     *
     * @param float|null $prixMini The prix mini.
     * @return Articles Returns this Articles.
     */
    public function setPrixMini(?float $prixMini): Articles {
        $this->prixMini = $prixMini;
        return $this;
    }

    /**
     * Set the prix net.
     *
     * @param bool|null $prixNet The prix net.
     * @return Articles Returns this Articles.
     */
    public function setPrixNet(?bool $prixNet): Articles {
        $this->prixNet = $prixNet;
        return $this;
    }

    /**
     * Set the prix revient.
     *
     * @param float|null $prixRevient The prix revient.
     * @return Articles Returns this Articles.
     */
    public function setPrixRevient(?float $prixRevient): Articles {
        $this->prixRevient = $prixRevient;
        return $this;
    }

    /**
     * Set the prix revient net.
     *
     * @param float|null $prixRevientNet The prix revient net.
     * @return Articles Returns this Articles.
     */
    public function setPrixRevientNet(?float $prixRevientNet): Articles {
        $this->prixRevientNet = $prixRevientNet;
        return $this;
    }

    /**
     * Set the prix vente ckp.
     *
     * @param string|null $prixVenteCkp The prix vente ckp.
     * @return Articles Returns this Articles.
     */
    public function setPrixVenteCkp(?string $prixVenteCkp): Articles {
        $this->prixVenteCkp = $prixVenteCkp;
        return $this;
    }

    /**
     * Set the prmp.
     *
     * @param float|null $prmp The prmp.
     * @return Articles Returns this Articles.
     */
    public function setPrmp(?float $prmp): Articles {
        $this->prmp = $prmp;
        return $this;
    }

    /**
     * Set the provenance.
     *
     * @param string|null $provenance The provenance.
     * @return Articles Returns this Articles.
     */
    public function setProvenance(?string $provenance): Articles {
        $this->provenance = $provenance;
        return $this;
    }

    /**
     * Set the px achat brut.
     *
     * @param float|null $pxAchatBrut The px achat brut.
     * @return Articles Returns this Articles.
     */
    public function setPxAchatBrut(?float $pxAchatBrut): Articles {
        $this->pxAchatBrut = $pxAchatBrut;
        return $this;
    }

    /**
     * Set the px achat colis.
     *
     * @param bool|null $pxAchatColis The px achat colis.
     * @return Articles Returns this Articles.
     */
    public function setPxAchatColis(?bool $pxAchatColis): Articles {
        $this->pxAchatColis = $pxAchatColis;
        return $this;
    }

    /**
     * Set the px achat en devise.
     *
     * @param float|null $pxAchatEnDevise The px achat en devise.
     * @return Articles Returns this Articles.
     */
    public function setPxAchatEnDevise(?float $pxAchatEnDevise): Articles {
        $this->pxAchatEnDevise = $pxAchatEnDevise;
        return $this;
    }

    /**
     * Set the px unit a editer.
     *
     * @param bool|null $pxUnitAEditer The px unit a editer.
     * @return Articles Returns this Articles.
     */
    public function setPxUnitAEditer(?bool $pxUnitAEditer): Articles {
        $this->pxUnitAEditer = $pxUnitAEditer;
        return $this;
    }

    /**
     * Set the px vente colis.
     *
     * @param bool|null $pxVenteColis The px vente colis.
     * @return Articles Returns this Articles.
     */
    public function setPxVenteColis(?bool $pxVenteColis): Articles {
        $this->pxVenteColis = $pxVenteColis;
        return $this;
    }

    /**
     * Set the px vente ht euro.
     *
     * @param float|null $pxVenteHtEuro The px vente ht euro.
     * @return Articles Returns this Articles.
     */
    public function setPxVenteHtEuro(?float $pxVenteHtEuro): Articles {
        $this->pxVenteHtEuro = $pxVenteHtEuro;
        return $this;
    }

    /**
     * Set the px vente ht frf.
     *
     * @param float|null $pxVenteHtFrf The px vente ht frf.
     * @return Articles Returns this Articles.
     */
    public function setPxVenteHtFrf(?float $pxVenteHtFrf): Articles {
        $this->pxVenteHtFrf = $pxVenteHtFrf;
        return $this;
    }

    /**
     * Set the px vente ttc euro.
     *
     * @param float|null $pxVenteTtcEuro The px vente ttc euro.
     * @return Articles Returns this Articles.
     */
    public function setPxVenteTtcEuro(?float $pxVenteTtcEuro): Articles {
        $this->pxVenteTtcEuro = $pxVenteTtcEuro;
        return $this;
    }

    /**
     * Set the px vente ttc frf.
     *
     * @param float|null $pxVenteTtcFrf The px vente ttc frf.
     * @return Articles Returns this Articles.
     */
    public function setPxVenteTtcFrf(?float $pxVenteTtcFrf): Articles {
        $this->pxVenteTtcFrf = $pxVenteTtcFrf;
        return $this;
    }

    /**
     * Set the qte a editer.
     *
     * @param bool|null $qteAEditer The qte a editer.
     * @return Articles Returns this Articles.
     */
    public function setQteAEditer(?bool $qteAEditer): Articles {
        $this->qteAEditer = $qteAEditer;
        return $this;
    }

    /**
     * Set the qte eco commande.
     *
     * @param float|null $qteEcoCommande The qte eco commande.
     * @return Articles Returns this Articles.
     */
    public function setQteEcoCommande(?float $qteEcoCommande): Articles {
        $this->qteEcoCommande = $qteEcoCommande;
        return $this;
    }

    /**
     * Set the qte hab commande.
     *
     * @param float|null $qteHabCommande The qte hab commande.
     * @return Articles Returns this Articles.
     */
    public function setQteHabCommande(?float $qteHabCommande): Articles {
        $this->qteHabCommande = $qteHabCommande;
        return $this;
    }

    /**
     * Set the qte max facture.
     *
     * @param float|null $qteMaxFacture The qte max facture.
     * @return Articles Returns this Articles.
     */
    public function setQteMaxFacture(?float $qteMaxFacture): Articles {
        $this->qteMaxFacture = $qteMaxFacture;
        return $this;
    }

    /**
     * Set the qte min commande.
     *
     * @param float|null $qteMinCommande The qte min commande.
     * @return Articles Returns this Articles.
     */
    public function setQteMinCommande(?float $qteMinCommande): Articles {
        $this->qteMinCommande = $qteMinCommande;
        return $this;
    }

    /**
     * Set the regroup fact.
     *
     * @param string|null $regroupFact The regroup fact.
     * @return Articles Returns this Articles.
     */
    public function setRegroupFact(?string $regroupFact): Articles {
        $this->regroupFact = $regroupFact;
        return $this;
    }

    /**
     * Set the regroup fact tp.
     *
     * @param int|null $regroupFactTp The regroup fact tp.
     * @return Articles Returns this Articles.
     */
    public function setRegroupFactTp(?int $regroupFactTp): Articles {
        $this->regroupFactTp = $regroupFactTp;
        return $this;
    }

    /**
     * Set the remise1en montant.
     *
     * @param bool|null $remise1enMontant The remise1en montant.
     * @return Articles Returns this Articles.
     */
    public function setRemise1enMontant(?bool $remise1enMontant): Articles {
        $this->remise1enMontant = $remise1enMontant;
        return $this;
    }

    /**
     * Set the remise2en montant.
     *
     * @param bool|null $remise2enMontant The remise2en montant.
     * @return Articles Returns this Articles.
     */
    public function setRemise2enMontant(?bool $remise2enMontant): Articles {
        $this->remise2enMontant = $remise2enMontant;
        return $this;
    }

    /**
     * Set the remise achat1.
     *
     * @param float|null $remiseAchat1 The remise achat1.
     * @return Articles Returns this Articles.
     */
    public function setRemiseAchat1(?float $remiseAchat1): Articles {
        $this->remiseAchat1 = $remiseAchat1;
        return $this;
    }

    /**
     * Set the remise achat2.
     *
     * @param float|null $remiseAchat2 The remise achat2.
     * @return Articles Returns this Articles.
     */
    public function setRemiseAchat2(?float $remiseAchat2): Articles {
        $this->remiseAchat2 = $remiseAchat2;
        return $this;
    }

    /**
     * Set the remise achat3.
     *
     * @param float|null $remiseAchat3 The remise achat3.
     * @return Articles Returns this Articles.
     */
    public function setRemiseAchat3(?float $remiseAchat3): Articles {
        $this->remiseAchat3 = $remiseAchat3;
        return $this;
    }

    /**
     * Set the remise sup achat1.
     *
     * @param float|null $remiseSupAchat1 The remise sup achat1.
     * @return Articles Returns this Articles.
     */
    public function setRemiseSupAchat1(?float $remiseSupAchat1): Articles {
        $this->remiseSupAchat1 = $remiseSupAchat1;
        return $this;
    }

    /**
     * Set the remise sup achat1 en montant.
     *
     * @param bool|null $remiseSupAchat1EnMontant The remise sup achat1 en montant.
     * @return Articles Returns this Articles.
     */
    public function setRemiseSupAchat1EnMontant(?bool $remiseSupAchat1EnMontant): Articles {
        $this->remiseSupAchat1EnMontant = $remiseSupAchat1EnMontant;
        return $this;
    }

    /**
     * Set the remise sup achat2.
     *
     * @param float|null $remiseSupAchat2 The remise sup achat2.
     * @return Articles Returns this Articles.
     */
    public function setRemiseSupAchat2(?float $remiseSupAchat2): Articles {
        $this->remiseSupAchat2 = $remiseSupAchat2;
        return $this;
    }

    /**
     * Set the remise sup achat2 en montant.
     *
     * @param bool|null $remiseSupAchat2EnMontant The remise sup achat2 en montant.
     * @return Articles Returns this Articles.
     */
    public function setRemiseSupAchat2EnMontant(?bool $remiseSupAchat2EnMontant): Articles {
        $this->remiseSupAchat2EnMontant = $remiseSupAchat2EnMontant;
        return $this;
    }

    /**
     * Set the remise sup achat3.
     *
     * @param float|null $remiseSupAchat3 The remise sup achat3.
     * @return Articles Returns this Articles.
     */
    public function setRemiseSupAchat3(?float $remiseSupAchat3): Articles {
        $this->remiseSupAchat3 = $remiseSupAchat3;
        return $this;
    }

    /**
     * Set the remise sup achat3 en montant.
     *
     * @param bool|null $remiseSupAchat3EnMontant The remise sup achat3 en montant.
     * @return Articles Returns this Articles.
     */
    public function setRemiseSupAchat3EnMontant(?bool $remiseSupAchat3EnMontant): Articles {
        $this->remiseSupAchat3EnMontant = $remiseSupAchat3EnMontant;
        return $this;
    }

    /**
     * Set the remises interdites.
     *
     * @param bool|null $remisesInterdites The remises interdites.
     * @return Articles Returns this Articles.
     */
    public function setRemisesInterdites(?bool $remisesInterdites): Articles {
        $this->remisesInterdites = $remisesInterdites;
        return $this;
    }

    /**
     * Set the soumis certif.
     *
     * @param bool|null $soumisCertif The soumis certif.
     * @return Articles Returns this Articles.
     */
    public function setSoumisCertif(?bool $soumisCertif): Articles {
        $this->soumisCertif = $soumisCertif;
        return $this;
    }

    /**
     * Set the ss famille achat.
     *
     * @param string|null $ssFamilleAchat The ss famille achat.
     * @return Articles Returns this Articles.
     */
    public function setSsFamilleAchat(?string $ssFamilleAchat): Articles {
        $this->ssFamilleAchat = $ssFamilleAchat;
        return $this;
    }

    /**
     * Set the suivi stock.
     *
     * @param bool|null $suiviStock The suivi stock.
     * @return Articles Returns this Articles.
     */
    public function setSuiviStock(?bool $suiviStock): Articles {
        $this->suiviStock = $suiviStock;
        return $this;
    }

    /**
     * Set the tare vat.
     *
     * @param string|null $tareVat The tare vat.
     * @return Articles Returns this Articles.
     */
    public function setTareVat(?string $tareVat): Articles {
        $this->tareVat = $tareVat;
        return $this;
    }

    /**
     * Set the taux alcool.
     *
     * @param float|null $tauxAlcool The taux alcool.
     * @return Articles Returns this Articles.
     */
    public function setTauxAlcool(?float $tauxAlcool): Articles {
        $this->tauxAlcool = $tauxAlcool;
        return $this;
    }

    /**
     * Set the taux devise achat.
     *
     * @param float|null $tauxDeviseAchat The taux devise achat.
     * @return Articles Returns this Articles.
     */
    public function setTauxDeviseAchat(?float $tauxDeviseAchat): Articles {
        $this->tauxDeviseAchat = $tauxDeviseAchat;
        return $this;
    }

    /**
     * Set the tva encaissement.
     *
     * @param bool|null $tvaEncaissement The tva encaissement.
     * @return Articles Returns this Articles.
     */
    public function setTvaEncaissement(?bool $tvaEncaissement): Articles {
        $this->tvaEncaissement = $tvaEncaissement;
        return $this;
    }

    /**
     * Set the tx commission.
     *
     * @param float|null $txCommission The tx commission.
     * @return Articles Returns this Articles.
     */
    public function setTxCommission(?float $txCommission): Articles {
        $this->txCommission = $txCommission;
        return $this;
    }

    /**
     * Set the type arrondi.
     *
     * @param string|null $typeArrondi The type arrondi.
     * @return Articles Returns this Articles.
     */
    public function setTypeArrondi(?string $typeArrondi): Articles {
        $this->typeArrondi = $typeArrondi;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param bool|null $typeHeure The type heure.
     * @return Articles Returns this Articles.
     */
    public function setTypeHeure(?bool $typeHeure): Articles {
        $this->typeHeure = $typeHeure;
        return $this;
    }

    /**
     * Set the type unite.
     *
     * @param string|null $typeUnite The type unite.
     * @return Articles Returns this Articles.
     */
    public function setTypeUnite(?string $typeUnite): Articles {
        $this->typeUnite = $typeUnite;
        return $this;
    }

    /**
     * Set the unite activite.
     *
     * @param bool|null $uniteActivite The unite activite.
     * @return Articles Returns this Articles.
     */
    public function setUniteActivite(?bool $uniteActivite): Articles {
        $this->uniteActivite = $uniteActivite;
        return $this;
    }

    /**
     * Set the variante.
     *
     * @param bool|null $variante The variante.
     * @return Articles Returns this Articles.
     */
    public function setVariante(?bool $variante): Articles {
        $this->variante = $variante;
        return $this;
    }

    /**
     * Set the vente par colis.
     *
     * @param bool|null $venteParColis The vente par colis.
     * @return Articles Returns this Articles.
     */
    public function setVenteParColis(?bool $venteParColis): Articles {
        $this->venteParColis = $venteParColis;
        return $this;
    }

    /**
     * Set the volume.
     *
     * @param float|null $volume The volume.
     * @return Articles Returns this Articles.
     */
    public function setVolume(?float $volume): Articles {
        $this->volume = $volume;
        return $this;
    }
}
