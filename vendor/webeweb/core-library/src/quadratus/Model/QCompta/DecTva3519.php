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
 * Dec tva3519.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class DecTva3519 {

    /**
     * Autres ope1.
     *
     * @var float|null
     */
    private $autresOpe1;

    /**
     * Autres ope2.
     *
     * @var float|null
     */
    private $autresOpe2;

    /**
     * Autres ope3.
     *
     * @var float|null
     */
    private $autresOpe3;

    /**
     * Autres ope4.
     *
     * @var float|null
     */
    private $autresOpe4;

    /**
     * Autres ope total.
     *
     * @var float|null
     */
    private $autresOpeTotal;

    /**
     * Bic.
     *
     * @var string|null
     */
    private $bic;

    /**
     * Commentaires1.
     *
     * @var string|null
     */
    private $commentaires1;

    /**
     * Commentaires2.
     *
     * @var string|null
     */
    private $commentaires2;

    /**
     * Commentaires3.
     *
     * @var string|null
     */
    private $commentaires3;

    /**
     * Commentaires4.
     *
     * @var string|null
     */
    private $commentaires4;

    /**
     * Commentaires5.
     *
     * @var string|null
     */
    private $commentaires5;

    /**
     * Credit compte.
     *
     * @var bool|null
     */
    private $creditCompte;

    /**
     * Credit imputer.
     *
     * @var bool|null
     */
    private $creditImputer;

    /**
     * Credit non remb.
     *
     * @var float|null
     */
    private $creditNonRemb;

    /**
     * Date cession.
     *
     * @var DateTime|null
     */
    private $dateCession;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date demande.
     *
     * @var DateTime|null
     */
    private $dateDemande;

    /**
     * Exp biens1.
     *
     * @var float|null
     */
    private $expBiens1;

    /**
     * Exp biens2.
     *
     * @var float|null
     */
    private $expBiens2;

    /**
     * Exp biens3.
     *
     * @var float|null
     */
    private $expBiens3;

    /**
     * Exp biens4.
     *
     * @var float|null
     */
    private $expBiens4;

    /**
     * Exp biens total.
     *
     * @var float|null
     */
    private $expBiensTotal;

    /**
     * Exp periodes.
     *
     * @var string|null
     */
    private $expPeriodes;

    /**
     * Iban.
     *
     * @var string|null
     */
    private $iban;

    /**
     * Intracom1.
     *
     * @var float|null
     */
    private $intracom1;

    /**
     * Intracom2.
     *
     * @var float|null
     */
    private $intracom2;

    /**
     * Intracom3.
     *
     * @var float|null
     */
    private $intracom3;

    /**
     * Intracom4.
     *
     * @var float|null
     */
    private $intracom4;

    /**
     * Intracom total.
     *
     * @var float|null
     */
    private $intracomTotal;

    /**
     * Mois1.
     *
     * @var int|null
     */
    private $mois1;

    /**
     * Mois2.
     *
     * @var int|null
     */
    private $mois2;

    /**
     * Mois3.
     *
     * @var int|null
     */
    private $mois3;

    /**
     * Montant1.
     *
     * @var float|null
     */
    private $montant1;

    /**
     * Montant2.
     *
     * @var float|null
     */
    private $montant2;

    /**
     * Montant3.
     *
     * @var float|null
     */
    private $montant3;

    /**
     * Montant rbt.
     *
     * @var float|null
     */
    private $montantRbt;

    /**
     * Nationalite.
     *
     * @var int|null
     */
    private $nationalite;

    /**
     * Nom prenom.
     *
     * @var string|null
     */
    private $nomPrenom;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Plafond rbt.
     *
     * @var float|null
     */
    private $plafondRbt;

    /**
     * Qualite.
     *
     * @var string|null
     */
    private $qualite;

    /**
     * Rbt demande.
     *
     * @var float|null
     */
    private $rbtDemande;

    /**
     * Report credit.
     *
     * @var float|null
     */
    private $reportCredit;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Taux tva1.
     *
     * @var float|null
     */
    private $tauxTva1;

    /**
     * Taux tva2.
     *
     * @var float|null
     */
    private $tauxTva2;

    /**
     * Taux tva3.
     *
     * @var float|null
     */
    private $tauxTva3;

    /**
     * Taux tva4.
     *
     * @var float|null
     */
    private $tauxTva4;

    /**
     * Total colonne1.
     *
     * @var float|null
     */
    private $totalColonne1;

    /**
     * Total colonne2.
     *
     * @var float|null
     */
    private $totalColonne2;

    /**
     * Total colonne3.
     *
     * @var float|null
     */
    private $totalColonne3;

    /**
     * Total colonne4.
     *
     * @var float|null
     */
    private $totalColonne4;

    /**
     * Total colonne5.
     *
     * @var float|null
     */
    private $totalColonne5;

    /**
     * Tva fictive1.
     *
     * @var float|null
     */
    private $tvaFictive1;

    /**
     * Tva fictive2.
     *
     * @var float|null
     */
    private $tvaFictive2;

    /**
     * Tva fictive3.
     *
     * @var float|null
     */
    private $tvaFictive3;

    /**
     * Tva fictive4.
     *
     * @var float|null
     */
    private $tvaFictive4;

    /**
     * Tva fictive5.
     *
     * @var float|null
     */
    private $tvaFictive5;

    /**
     * Tva fictive prec.
     *
     * @var float|null
     */
    private $tvaFictivePrec;

    /**
     * Tva fictive pres.
     *
     * @var float|null
     */
    private $tvaFictivePres;

    /**
     * Type demande.
     *
     * @var int|null
     */
    private $typeDemande;

    /**
     * Ville.
     *
     * @var string|null
     */
    private $ville;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the autres ope1.
     *
     * @return float|null Returns the autres ope1.
     */
    public function getAutresOpe1(): ?float {
        return $this->autresOpe1;
    }

    /**
     * Get the autres ope2.
     *
     * @return float|null Returns the autres ope2.
     */
    public function getAutresOpe2(): ?float {
        return $this->autresOpe2;
    }

    /**
     * Get the autres ope3.
     *
     * @return float|null Returns the autres ope3.
     */
    public function getAutresOpe3(): ?float {
        return $this->autresOpe3;
    }

    /**
     * Get the autres ope4.
     *
     * @return float|null Returns the autres ope4.
     */
    public function getAutresOpe4(): ?float {
        return $this->autresOpe4;
    }

    /**
     * Get the autres ope total.
     *
     * @return float|null Returns the autres ope total.
     */
    public function getAutresOpeTotal(): ?float {
        return $this->autresOpeTotal;
    }

    /**
     * Get the bic.
     *
     * @return string|null Returns the bic.
     */
    public function getBic(): ?string {
        return $this->bic;
    }

    /**
     * Get the commentaires1.
     *
     * @return string|null Returns the commentaires1.
     */
    public function getCommentaires1(): ?string {
        return $this->commentaires1;
    }

    /**
     * Get the commentaires2.
     *
     * @return string|null Returns the commentaires2.
     */
    public function getCommentaires2(): ?string {
        return $this->commentaires2;
    }

    /**
     * Get the commentaires3.
     *
     * @return string|null Returns the commentaires3.
     */
    public function getCommentaires3(): ?string {
        return $this->commentaires3;
    }

    /**
     * Get the commentaires4.
     *
     * @return string|null Returns the commentaires4.
     */
    public function getCommentaires4(): ?string {
        return $this->commentaires4;
    }

    /**
     * Get the commentaires5.
     *
     * @return string|null Returns the commentaires5.
     */
    public function getCommentaires5(): ?string {
        return $this->commentaires5;
    }

    /**
     * Get the credit compte.
     *
     * @return bool|null Returns the credit compte.
     */
    public function getCreditCompte(): ?bool {
        return $this->creditCompte;
    }

    /**
     * Get the credit imputer.
     *
     * @return bool|null Returns the credit imputer.
     */
    public function getCreditImputer(): ?bool {
        return $this->creditImputer;
    }

    /**
     * Get the credit non remb.
     *
     * @return float|null Returns the credit non remb.
     */
    public function getCreditNonRemb(): ?float {
        return $this->creditNonRemb;
    }

    /**
     * Get the date cession.
     *
     * @return DateTime|null Returns the date cession.
     */
    public function getDateCession(): ?DateTime {
        return $this->dateCession;
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
     * Get the date demande.
     *
     * @return DateTime|null Returns the date demande.
     */
    public function getDateDemande(): ?DateTime {
        return $this->dateDemande;
    }

    /**
     * Get the exp biens1.
     *
     * @return float|null Returns the exp biens1.
     */
    public function getExpBiens1(): ?float {
        return $this->expBiens1;
    }

    /**
     * Get the exp biens2.
     *
     * @return float|null Returns the exp biens2.
     */
    public function getExpBiens2(): ?float {
        return $this->expBiens2;
    }

    /**
     * Get the exp biens3.
     *
     * @return float|null Returns the exp biens3.
     */
    public function getExpBiens3(): ?float {
        return $this->expBiens3;
    }

    /**
     * Get the exp biens4.
     *
     * @return float|null Returns the exp biens4.
     */
    public function getExpBiens4(): ?float {
        return $this->expBiens4;
    }

    /**
     * Get the exp biens total.
     *
     * @return float|null Returns the exp biens total.
     */
    public function getExpBiensTotal(): ?float {
        return $this->expBiensTotal;
    }

    /**
     * Get the exp periodes.
     *
     * @return string|null Returns the exp periodes.
     */
    public function getExpPeriodes(): ?string {
        return $this->expPeriodes;
    }

    /**
     * Get the iban.
     *
     * @return string|null Returns the iban.
     */
    public function getIban(): ?string {
        return $this->iban;
    }

    /**
     * Get the intracom1.
     *
     * @return float|null Returns the intracom1.
     */
    public function getIntracom1(): ?float {
        return $this->intracom1;
    }

    /**
     * Get the intracom2.
     *
     * @return float|null Returns the intracom2.
     */
    public function getIntracom2(): ?float {
        return $this->intracom2;
    }

    /**
     * Get the intracom3.
     *
     * @return float|null Returns the intracom3.
     */
    public function getIntracom3(): ?float {
        return $this->intracom3;
    }

    /**
     * Get the intracom4.
     *
     * @return float|null Returns the intracom4.
     */
    public function getIntracom4(): ?float {
        return $this->intracom4;
    }

    /**
     * Get the intracom total.
     *
     * @return float|null Returns the intracom total.
     */
    public function getIntracomTotal(): ?float {
        return $this->intracomTotal;
    }

    /**
     * Get the mois1.
     *
     * @return int|null Returns the mois1.
     */
    public function getMois1(): ?int {
        return $this->mois1;
    }

    /**
     * Get the mois2.
     *
     * @return int|null Returns the mois2.
     */
    public function getMois2(): ?int {
        return $this->mois2;
    }

    /**
     * Get the mois3.
     *
     * @return int|null Returns the mois3.
     */
    public function getMois3(): ?int {
        return $this->mois3;
    }

    /**
     * Get the montant1.
     *
     * @return float|null Returns the montant1.
     */
    public function getMontant1(): ?float {
        return $this->montant1;
    }

    /**
     * Get the montant2.
     *
     * @return float|null Returns the montant2.
     */
    public function getMontant2(): ?float {
        return $this->montant2;
    }

    /**
     * Get the montant3.
     *
     * @return float|null Returns the montant3.
     */
    public function getMontant3(): ?float {
        return $this->montant3;
    }

    /**
     * Get the montant rbt.
     *
     * @return float|null Returns the montant rbt.
     */
    public function getMontantRbt(): ?float {
        return $this->montantRbt;
    }

    /**
     * Get the nationalite.
     *
     * @return int|null Returns the nationalite.
     */
    public function getNationalite(): ?int {
        return $this->nationalite;
    }

    /**
     * Get the nom prenom.
     *
     * @return string|null Returns the nom prenom.
     */
    public function getNomPrenom(): ?string {
        return $this->nomPrenom;
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
     * Get the plafond rbt.
     *
     * @return float|null Returns the plafond rbt.
     */
    public function getPlafondRbt(): ?float {
        return $this->plafondRbt;
    }

    /**
     * Get the qualite.
     *
     * @return string|null Returns the qualite.
     */
    public function getQualite(): ?string {
        return $this->qualite;
    }

    /**
     * Get the rbt demande.
     *
     * @return float|null Returns the rbt demande.
     */
    public function getRbtDemande(): ?float {
        return $this->rbtDemande;
    }

    /**
     * Get the report credit.
     *
     * @return float|null Returns the report credit.
     */
    public function getReportCredit(): ?float {
        return $this->reportCredit;
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
     * Get the taux tva1.
     *
     * @return float|null Returns the taux tva1.
     */
    public function getTauxTva1(): ?float {
        return $this->tauxTva1;
    }

    /**
     * Get the taux tva2.
     *
     * @return float|null Returns the taux tva2.
     */
    public function getTauxTva2(): ?float {
        return $this->tauxTva2;
    }

    /**
     * Get the taux tva3.
     *
     * @return float|null Returns the taux tva3.
     */
    public function getTauxTva3(): ?float {
        return $this->tauxTva3;
    }

    /**
     * Get the taux tva4.
     *
     * @return float|null Returns the taux tva4.
     */
    public function getTauxTva4(): ?float {
        return $this->tauxTva4;
    }

    /**
     * Get the total colonne1.
     *
     * @return float|null Returns the total colonne1.
     */
    public function getTotalColonne1(): ?float {
        return $this->totalColonne1;
    }

    /**
     * Get the total colonne2.
     *
     * @return float|null Returns the total colonne2.
     */
    public function getTotalColonne2(): ?float {
        return $this->totalColonne2;
    }

    /**
     * Get the total colonne3.
     *
     * @return float|null Returns the total colonne3.
     */
    public function getTotalColonne3(): ?float {
        return $this->totalColonne3;
    }

    /**
     * Get the total colonne4.
     *
     * @return float|null Returns the total colonne4.
     */
    public function getTotalColonne4(): ?float {
        return $this->totalColonne4;
    }

    /**
     * Get the total colonne5.
     *
     * @return float|null Returns the total colonne5.
     */
    public function getTotalColonne5(): ?float {
        return $this->totalColonne5;
    }

    /**
     * Get the tva fictive1.
     *
     * @return float|null Returns the tva fictive1.
     */
    public function getTvaFictive1(): ?float {
        return $this->tvaFictive1;
    }

    /**
     * Get the tva fictive2.
     *
     * @return float|null Returns the tva fictive2.
     */
    public function getTvaFictive2(): ?float {
        return $this->tvaFictive2;
    }

    /**
     * Get the tva fictive3.
     *
     * @return float|null Returns the tva fictive3.
     */
    public function getTvaFictive3(): ?float {
        return $this->tvaFictive3;
    }

    /**
     * Get the tva fictive4.
     *
     * @return float|null Returns the tva fictive4.
     */
    public function getTvaFictive4(): ?float {
        return $this->tvaFictive4;
    }

    /**
     * Get the tva fictive5.
     *
     * @return float|null Returns the tva fictive5.
     */
    public function getTvaFictive5(): ?float {
        return $this->tvaFictive5;
    }

    /**
     * Get the tva fictive prec.
     *
     * @return float|null Returns the tva fictive prec.
     */
    public function getTvaFictivePrec(): ?float {
        return $this->tvaFictivePrec;
    }

    /**
     * Get the tva fictive pres.
     *
     * @return float|null Returns the tva fictive pres.
     */
    public function getTvaFictivePres(): ?float {
        return $this->tvaFictivePres;
    }

    /**
     * Get the type demande.
     *
     * @return int|null Returns the type demande.
     */
    public function getTypeDemande(): ?int {
        return $this->typeDemande;
    }

    /**
     * Get the ville.
     *
     * @return string|null Returns the ville.
     */
    public function getVille(): ?string {
        return $this->ville;
    }

    /**
     * Set the autres ope1.
     *
     * @param float|null $autresOpe1 The autres ope1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setAutresOpe1(?float $autresOpe1): DecTva3519 {
        $this->autresOpe1 = $autresOpe1;
        return $this;
    }

    /**
     * Set the autres ope2.
     *
     * @param float|null $autresOpe2 The autres ope2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setAutresOpe2(?float $autresOpe2): DecTva3519 {
        $this->autresOpe2 = $autresOpe2;
        return $this;
    }

    /**
     * Set the autres ope3.
     *
     * @param float|null $autresOpe3 The autres ope3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setAutresOpe3(?float $autresOpe3): DecTva3519 {
        $this->autresOpe3 = $autresOpe3;
        return $this;
    }

    /**
     * Set the autres ope4.
     *
     * @param float|null $autresOpe4 The autres ope4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setAutresOpe4(?float $autresOpe4): DecTva3519 {
        $this->autresOpe4 = $autresOpe4;
        return $this;
    }

    /**
     * Set the autres ope total.
     *
     * @param float|null $autresOpeTotal The autres ope total.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setAutresOpeTotal(?float $autresOpeTotal): DecTva3519 {
        $this->autresOpeTotal = $autresOpeTotal;
        return $this;
    }

    /**
     * Set the bic.
     *
     * @param string|null $bic The bic.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setBic(?string $bic): DecTva3519 {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the commentaires1.
     *
     * @param string|null $commentaires1 The commentaires1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCommentaires1(?string $commentaires1): DecTva3519 {
        $this->commentaires1 = $commentaires1;
        return $this;
    }

    /**
     * Set the commentaires2.
     *
     * @param string|null $commentaires2 The commentaires2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCommentaires2(?string $commentaires2): DecTva3519 {
        $this->commentaires2 = $commentaires2;
        return $this;
    }

    /**
     * Set the commentaires3.
     *
     * @param string|null $commentaires3 The commentaires3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCommentaires3(?string $commentaires3): DecTva3519 {
        $this->commentaires3 = $commentaires3;
        return $this;
    }

    /**
     * Set the commentaires4.
     *
     * @param string|null $commentaires4 The commentaires4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCommentaires4(?string $commentaires4): DecTva3519 {
        $this->commentaires4 = $commentaires4;
        return $this;
    }

    /**
     * Set the commentaires5.
     *
     * @param string|null $commentaires5 The commentaires5.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCommentaires5(?string $commentaires5): DecTva3519 {
        $this->commentaires5 = $commentaires5;
        return $this;
    }

    /**
     * Set the credit compte.
     *
     * @param bool|null $creditCompte The credit compte.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCreditCompte(?bool $creditCompte): DecTva3519 {
        $this->creditCompte = $creditCompte;
        return $this;
    }

    /**
     * Set the credit imputer.
     *
     * @param bool|null $creditImputer The credit imputer.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCreditImputer(?bool $creditImputer): DecTva3519 {
        $this->creditImputer = $creditImputer;
        return $this;
    }

    /**
     * Set the credit non remb.
     *
     * @param float|null $creditNonRemb The credit non remb.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCreditNonRemb(?float $creditNonRemb): DecTva3519 {
        $this->creditNonRemb = $creditNonRemb;
        return $this;
    }

    /**
     * Set the date cession.
     *
     * @param DateTime|null $dateCession The date cession.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setDateCession(?DateTime $dateCession): DecTva3519 {
        $this->dateCession = $dateCession;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setDateCreation(?DateTime $dateCreation): DecTva3519 {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date demande.
     *
     * @param DateTime|null $dateDemande The date demande.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setDateDemande(?DateTime $dateDemande): DecTva3519 {
        $this->dateDemande = $dateDemande;
        return $this;
    }

    /**
     * Set the exp biens1.
     *
     * @param float|null $expBiens1 The exp biens1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setExpBiens1(?float $expBiens1): DecTva3519 {
        $this->expBiens1 = $expBiens1;
        return $this;
    }

    /**
     * Set the exp biens2.
     *
     * @param float|null $expBiens2 The exp biens2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setExpBiens2(?float $expBiens2): DecTva3519 {
        $this->expBiens2 = $expBiens2;
        return $this;
    }

    /**
     * Set the exp biens3.
     *
     * @param float|null $expBiens3 The exp biens3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setExpBiens3(?float $expBiens3): DecTva3519 {
        $this->expBiens3 = $expBiens3;
        return $this;
    }

    /**
     * Set the exp biens4.
     *
     * @param float|null $expBiens4 The exp biens4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setExpBiens4(?float $expBiens4): DecTva3519 {
        $this->expBiens4 = $expBiens4;
        return $this;
    }

    /**
     * Set the exp biens total.
     *
     * @param float|null $expBiensTotal The exp biens total.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setExpBiensTotal(?float $expBiensTotal): DecTva3519 {
        $this->expBiensTotal = $expBiensTotal;
        return $this;
    }

    /**
     * Set the exp periodes.
     *
     * @param string|null $expPeriodes The exp periodes.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setExpPeriodes(?string $expPeriodes): DecTva3519 {
        $this->expPeriodes = $expPeriodes;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setIban(?string $iban): DecTva3519 {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the intracom1.
     *
     * @param float|null $intracom1 The intracom1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setIntracom1(?float $intracom1): DecTva3519 {
        $this->intracom1 = $intracom1;
        return $this;
    }

    /**
     * Set the intracom2.
     *
     * @param float|null $intracom2 The intracom2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setIntracom2(?float $intracom2): DecTva3519 {
        $this->intracom2 = $intracom2;
        return $this;
    }

    /**
     * Set the intracom3.
     *
     * @param float|null $intracom3 The intracom3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setIntracom3(?float $intracom3): DecTva3519 {
        $this->intracom3 = $intracom3;
        return $this;
    }

    /**
     * Set the intracom4.
     *
     * @param float|null $intracom4 The intracom4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setIntracom4(?float $intracom4): DecTva3519 {
        $this->intracom4 = $intracom4;
        return $this;
    }

    /**
     * Set the intracom total.
     *
     * @param float|null $intracomTotal The intracom total.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setIntracomTotal(?float $intracomTotal): DecTva3519 {
        $this->intracomTotal = $intracomTotal;
        return $this;
    }

    /**
     * Set the mois1.
     *
     * @param int|null $mois1 The mois1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMois1(?int $mois1): DecTva3519 {
        $this->mois1 = $mois1;
        return $this;
    }

    /**
     * Set the mois2.
     *
     * @param int|null $mois2 The mois2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMois2(?int $mois2): DecTva3519 {
        $this->mois2 = $mois2;
        return $this;
    }

    /**
     * Set the mois3.
     *
     * @param int|null $mois3 The mois3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMois3(?int $mois3): DecTva3519 {
        $this->mois3 = $mois3;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float|null $montant1 The montant1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMontant1(?float $montant1): DecTva3519 {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float|null $montant2 The montant2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMontant2(?float $montant2): DecTva3519 {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant3.
     *
     * @param float|null $montant3 The montant3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMontant3(?float $montant3): DecTva3519 {
        $this->montant3 = $montant3;
        return $this;
    }

    /**
     * Set the montant rbt.
     *
     * @param float|null $montantRbt The montant rbt.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMontantRbt(?float $montantRbt): DecTva3519 {
        $this->montantRbt = $montantRbt;
        return $this;
    }

    /**
     * Set the nationalite.
     *
     * @param int|null $nationalite The nationalite.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setNationalite(?int $nationalite): DecTva3519 {
        $this->nationalite = $nationalite;
        return $this;
    }

    /**
     * Set the nom prenom.
     *
     * @param string|null $nomPrenom The nom prenom.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setNomPrenom(?string $nomPrenom): DecTva3519 {
        $this->nomPrenom = $nomPrenom;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setPeriode(?DateTime $periode): DecTva3519 {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the plafond rbt.
     *
     * @param float|null $plafondRbt The plafond rbt.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setPlafondRbt(?float $plafondRbt): DecTva3519 {
        $this->plafondRbt = $plafondRbt;
        return $this;
    }

    /**
     * Set the qualite.
     *
     * @param string|null $qualite The qualite.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setQualite(?string $qualite): DecTva3519 {
        $this->qualite = $qualite;
        return $this;
    }

    /**
     * Set the rbt demande.
     *
     * @param float|null $rbtDemande The rbt demande.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setRbtDemande(?float $rbtDemande): DecTva3519 {
        $this->rbtDemande = $rbtDemande;
        return $this;
    }

    /**
     * Set the report credit.
     *
     * @param float|null $reportCredit The report credit.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setReportCredit(?float $reportCredit): DecTva3519 {
        $this->reportCredit = $reportCredit;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setRib(?string $rib): DecTva3519 {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the taux tva1.
     *
     * @param float|null $tauxTva1 The taux tva1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTauxTva1(?float $tauxTva1): DecTva3519 {
        $this->tauxTva1 = $tauxTva1;
        return $this;
    }

    /**
     * Set the taux tva2.
     *
     * @param float|null $tauxTva2 The taux tva2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTauxTva2(?float $tauxTva2): DecTva3519 {
        $this->tauxTva2 = $tauxTva2;
        return $this;
    }

    /**
     * Set the taux tva3.
     *
     * @param float|null $tauxTva3 The taux tva3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTauxTva3(?float $tauxTva3): DecTva3519 {
        $this->tauxTva3 = $tauxTva3;
        return $this;
    }

    /**
     * Set the taux tva4.
     *
     * @param float|null $tauxTva4 The taux tva4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTauxTva4(?float $tauxTva4): DecTva3519 {
        $this->tauxTva4 = $tauxTva4;
        return $this;
    }

    /**
     * Set the total colonne1.
     *
     * @param float|null $totalColonne1 The total colonne1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTotalColonne1(?float $totalColonne1): DecTva3519 {
        $this->totalColonne1 = $totalColonne1;
        return $this;
    }

    /**
     * Set the total colonne2.
     *
     * @param float|null $totalColonne2 The total colonne2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTotalColonne2(?float $totalColonne2): DecTva3519 {
        $this->totalColonne2 = $totalColonne2;
        return $this;
    }

    /**
     * Set the total colonne3.
     *
     * @param float|null $totalColonne3 The total colonne3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTotalColonne3(?float $totalColonne3): DecTva3519 {
        $this->totalColonne3 = $totalColonne3;
        return $this;
    }

    /**
     * Set the total colonne4.
     *
     * @param float|null $totalColonne4 The total colonne4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTotalColonne4(?float $totalColonne4): DecTva3519 {
        $this->totalColonne4 = $totalColonne4;
        return $this;
    }

    /**
     * Set the total colonne5.
     *
     * @param float|null $totalColonne5 The total colonne5.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTotalColonne5(?float $totalColonne5): DecTva3519 {
        $this->totalColonne5 = $totalColonne5;
        return $this;
    }

    /**
     * Set the tva fictive1.
     *
     * @param float|null $tvaFictive1 The tva fictive1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictive1(?float $tvaFictive1): DecTva3519 {
        $this->tvaFictive1 = $tvaFictive1;
        return $this;
    }

    /**
     * Set the tva fictive2.
     *
     * @param float|null $tvaFictive2 The tva fictive2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictive2(?float $tvaFictive2): DecTva3519 {
        $this->tvaFictive2 = $tvaFictive2;
        return $this;
    }

    /**
     * Set the tva fictive3.
     *
     * @param float|null $tvaFictive3 The tva fictive3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictive3(?float $tvaFictive3): DecTva3519 {
        $this->tvaFictive3 = $tvaFictive3;
        return $this;
    }

    /**
     * Set the tva fictive4.
     *
     * @param float|null $tvaFictive4 The tva fictive4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictive4(?float $tvaFictive4): DecTva3519 {
        $this->tvaFictive4 = $tvaFictive4;
        return $this;
    }

    /**
     * Set the tva fictive5.
     *
     * @param float|null $tvaFictive5 The tva fictive5.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictive5(?float $tvaFictive5): DecTva3519 {
        $this->tvaFictive5 = $tvaFictive5;
        return $this;
    }

    /**
     * Set the tva fictive prec.
     *
     * @param float|null $tvaFictivePrec The tva fictive prec.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictivePrec(?float $tvaFictivePrec): DecTva3519 {
        $this->tvaFictivePrec = $tvaFictivePrec;
        return $this;
    }

    /**
     * Set the tva fictive pres.
     *
     * @param float|null $tvaFictivePres The tva fictive pres.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictivePres(?float $tvaFictivePres): DecTva3519 {
        $this->tvaFictivePres = $tvaFictivePres;
        return $this;
    }

    /**
     * Set the type demande.
     *
     * @param int|null $typeDemande The type demande.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTypeDemande(?int $typeDemande): DecTva3519 {
        $this->typeDemande = $typeDemande;
        return $this;
    }

    /**
     * Set the ville.
     *
     * @param string|null $ville The ville.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setVille(?string $ville): DecTva3519 {
        $this->ville = $ville;
        return $this;
    }
}
