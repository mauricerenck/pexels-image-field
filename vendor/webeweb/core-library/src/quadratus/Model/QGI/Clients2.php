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
 * Clients2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Clients2 {

    /**
     * Allotissement.
     *
     * @var bool|null
     */
    private $allotissement;

    /**
     * Bl mail.
     *
     * @var bool|null
     */
    private $blMail;

    /**
     * Cdes mail.
     *
     * @var bool|null
     */
    private $cdesMail;

    /**
     * Code activite cga.
     *
     * @var string|null
     */
    private $codeActiviteCga;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code transporteur1.
     *
     * @var string|null
     */
    private $codeTransporteur1;

    /**
     * Code transporteur2.
     *
     * @var string|null
     */
    private $codeTransporteur2;

    /**
     * Code transporteur3.
     *
     * @var string|null
     */
    private $codeTransporteur3;

    /**
     * Code transporteur4.
     *
     * @var string|null
     */
    private $codeTransporteur4;

    /**
     * Code transporteur5.
     *
     * @var string|null
     */
    private $codeTransporteur5;

    /**
     * Date deb exe publication.
     *
     * @var DateTime|null
     */
    private $dateDebExePublication;

    /**
     * Delai livraison.
     *
     * @var int|null
     */
    private $delaiLivraison;

    /**
     * Devis mail.
     *
     * @var bool|null
     */
    private $devisMail;

    /**
     * Ean client.
     *
     * @var string|null
     */
    private $eanClient;

    /**
     * Ean facture papier.
     *
     * @var string|null
     */
    private $eanFacturePapier;

    /**
     * Ean plateforme.
     *
     * @var string|null
     */
    private $eanPlateforme;

    /**
     * Echeance fin decade.
     *
     * @var bool|null
     */
    private $echeanceFinDecade;

    /**
     * Echeance fin quinzaine.
     *
     * @var bool|null
     */
    private $echeanceFinQuinzaine;

    /**
     * Edi export bl.
     *
     * @var bool|null
     */
    private $ediExportBl;

    /**
     * Edi export fac.
     *
     * @var bool|null
     */
    private $ediExportFac;

    /**
     * Fact complement suite.
     *
     * @var string|null
     */
    private $factComplementSuite;

    /**
     * Fact zip code.
     *
     * @var string|null
     */
    private $factZipCode;

    /**
     * Ind mail publication.
     *
     * @var int|null
     */
    private $indMailPublication;

    /**
     * Indice bl mail.
     *
     * @var int|null
     */
    private $indiceBlMail;

    /**
     * Indice cdes mail.
     *
     * @var int|null
     */
    private $indiceCdesMail;

    /**
     * Indice devis mail.
     *
     * @var int|null
     */
    private $indiceDevisMail;

    /**
     * Indice releves mail.
     *
     * @var int|null
     */
    private $indiceRelevesMail;

    /**
     * Lettre de mission date signature.
     *
     * @var DateTime|null
     */
    private $lettreDeMissionDateSignature;

    /**
     * localisation archives.
     *
     * @var string|null
     */
    private $localisationArchives;

    /**
     * Modele facture manuelle spe.
     *
     * @var string|null
     */
    private $modeleFactureManuelleSpe;

    /**
     * Montant depassement autorise.
     *
     * @var float|null
     */
    private $montantDepassementAutorise;

    /**
     * Motif entree.
     *
     * @var string|null
     */
    private $motifEntree;

    /**
     * Motif sortie.
     *
     * @var string|null
     */
    private $motifSortie;

    /**
     * Mt transport1.
     *
     * @var float|null
     */
    private $mtTransport1;

    /**
     * Mt transport2.
     *
     * @var float|null
     */
    private $mtTransport2;

    /**
     * Mt transport3.
     *
     * @var float|null
     */
    private $mtTransport3;

    /**
     * Mt transport4.
     *
     * @var float|null
     */
    private $mtTransport4;

    /**
     * Mt transport5.
     *
     * @var float|null
     */
    private $mtTransport5;

    /**
     * Non concerne is.
     *
     * @var bool|null
     */
    private $nonConcerneIs;

    /**
     * Non concerne tp.
     *
     * @var bool|null
     */
    private $nonConcerneTp;

    /**
     * Non facturable.
     *
     * @var bool|null
     */
    private $nonFacturable;

    /**
     * Pme tarif ou rem spe.
     *
     * @var bool|null
     */
    private $pmeTarifOuRemSpe;

    /**
     * Prevenir mail publier.
     *
     * @var bool|null
     */
    private $prevenirMailPublier;

    /**
     * Releves mail.
     *
     * @var bool|null
     */
    private $relevesMail;

    /**
     * Social complement suite.
     *
     * @var string|null
     */
    private $socialComplementSuite;

    /**
     * Social zip code.
     *
     * @var string|null
     */
    private $socialZipCode;

    /**
     * Trs art pied.
     *
     * @var string|null
     */
    private $trsArtPied;

    /**
     * Trs art pied2.
     *
     * @var string|null
     */
    private $trsArtPied2;

    /**
     * Trs categ march.
     *
     * @var string|null
     */
    private $trsCategMarch;

    /**
     * Trs centre ana.
     *
     * @var string|null
     */
    private $trsCentreAna;

    /**
     * Trs code tarif1.
     *
     * @var string|null
     */
    private $trsCodeTarif1;

    /**
     * Trs code tarif1 sens.
     *
     * @var string|null
     */
    private $trsCodeTarif1Sens;

    /**
     * Trs code tarif2.
     *
     * @var string|null
     */
    private $trsCodeTarif2;

    /**
     * Trs code tarif2 sens.
     *
     * @var string|null
     */
    private $trsCodeTarif2Sens;

    /**
     * Trs code tarif3.
     *
     * @var string|null
     */
    private $trsCodeTarif3;

    /**
     * Trs code tarif3 sens.
     *
     * @var string|null
     */
    private $trsCodeTarif3Sens;

    /**
     * Trs code tarif4.
     *
     * @var string|null
     */
    private $trsCodeTarif4;

    /**
     * Trs code tarif4 sens.
     *
     * @var string|null
     */
    private $trsCodeTarif4Sens;

    /**
     * Trs code tarif5.
     *
     * @var string|null
     */
    private $trsCodeTarif5;

    /**
     * Trs code tarif5 sens.
     *
     * @var string|null
     */
    private $trsCodeTarif5Sens;

    /**
     * Trs code tarif6.
     *
     * @var string|null
     */
    private $trsCodeTarif6;

    /**
     * Trs code tarif6 sens.
     *
     * @var string|null
     */
    private $trsCodeTarif6Sens;

    /**
     * Trs code tarif def.
     *
     * @var int|null
     */
    private $trsCodeTarifDef;

    /**
     * Trs comment1.
     *
     * @var string|null
     */
    private $trsComment1;

    /**
     * Trs comment2.
     *
     * @var string|null
     */
    private $trsComment2;

    /**
     * Trs comment3.
     *
     * @var string|null
     */
    private $trsComment3;

    /**
     * Trs comment4.
     *
     * @var string|null
     */
    private $trsComment4;

    /**
     * Trs comment5.
     *
     * @var string|null
     */
    private $trsComment5;

    /**
     * Trs comment6.
     *
     * @var string|null
     */
    private $trsComment6;

    /**
     * Trs comment7.
     *
     * @var string|null
     */
    private $trsComment7;

    /**
     * Trs comment8.
     *
     * @var string|null
     */
    private $trsComment8;

    /**
     * Trs comment9.
     *
     * @var string|null
     */
    private $trsComment9;

    /**
     * Trs consignes1.
     *
     * @var string|null
     */
    private $trsConsignes1;

    /**
     * Trs consignes2.
     *
     * @var string|null
     */
    private $trsConsignes2;

    /**
     * Trs consignes3.
     *
     * @var string|null
     */
    private $trsConsignes3;

    /**
     * Trs gestion palettes.
     *
     * @var bool|null
     */
    private $trsGestionPalettes;

    /**
     * Trs marchandise sensible.
     *
     * @var bool|null
     */
    private $trsMarchandiseSensible;

    /**
     * Trs modele facture spe.
     *
     * @var string|null
     */
    private $trsModeleFactureSpe;

    /**
     * Trs poids mini pal.
     *
     * @var float|null
     */
    private $trsPoidsMiniPal;

    /**
     * Trs port du auto.
     *
     * @var bool|null
     */
    private $trsPortDuAuto;

    /**
     * Trs suivi ca mens.
     *
     * @var bool|null
     */
    private $trsSuiviCaMens;

    /**
     * Trs suivi dt enl.
     *
     * @var bool|null
     */
    private $trsSuiviDtEnl;

    /**
     * Trs suivi dt liv.
     *
     * @var bool|null
     */
    private $trsSuiviDtLiv;

    /**
     * Trs suivi dt liv fax.
     *
     * @var string|null
     */
    private $trsSuiviDtLivFax;

    /**
     * Trs suivi dt liv mail.
     *
     * @var string|null
     */
    private $trsSuiviDtLivMail;

    /**
     * Trs type client.
     *
     * @var string|null
     */
    private $trsTypeClient;

    /**
     * Trs type facturation.
     *
     * @var string|null
     */
    private $trsTypeFacturation;

    /**
     * Trs type travail.
     *
     * @var string|null
     */
    private $trsTypeTravail;

    /**
     * Type transport1.
     *
     * @var string|null
     */
    private $typeTransport1;

    /**
     * Type transport2.
     *
     * @var string|null
     */
    private $typeTransport2;

    /**
     * Type transport3.
     *
     * @var string|null
     */
    private $typeTransport3;

    /**
     * Type transport4.
     *
     * @var string|null
     */
    private $typeTransport4;

    /**
     * Type transport5.
     *
     * @var string|null
     */
    private $typeTransport5;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the allotissement.
     *
     * @return bool|null Returns the allotissement.
     */
    public function getAllotissement(): ?bool {
        return $this->allotissement;
    }

    /**
     * Get the bl mail.
     *
     * @return bool|null Returns the bl mail.
     */
    public function getBlMail(): ?bool {
        return $this->blMail;
    }

    /**
     * Get the cdes mail.
     *
     * @return bool|null Returns the cdes mail.
     */
    public function getCdesMail(): ?bool {
        return $this->cdesMail;
    }

    /**
     * Get the code activite cga.
     *
     * @return string|null Returns the code activite cga.
     */
    public function getCodeActiviteCga(): ?string {
        return $this->codeActiviteCga;
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
     * Get the code transporteur1.
     *
     * @return string|null Returns the code transporteur1.
     */
    public function getCodeTransporteur1(): ?string {
        return $this->codeTransporteur1;
    }

    /**
     * Get the code transporteur2.
     *
     * @return string|null Returns the code transporteur2.
     */
    public function getCodeTransporteur2(): ?string {
        return $this->codeTransporteur2;
    }

    /**
     * Get the code transporteur3.
     *
     * @return string|null Returns the code transporteur3.
     */
    public function getCodeTransporteur3(): ?string {
        return $this->codeTransporteur3;
    }

    /**
     * Get the code transporteur4.
     *
     * @return string|null Returns the code transporteur4.
     */
    public function getCodeTransporteur4(): ?string {
        return $this->codeTransporteur4;
    }

    /**
     * Get the code transporteur5.
     *
     * @return string|null Returns the code transporteur5.
     */
    public function getCodeTransporteur5(): ?string {
        return $this->codeTransporteur5;
    }

    /**
     * Get the date deb exe publication.
     *
     * @return DateTime|null Returns the date deb exe publication.
     */
    public function getDateDebExePublication(): ?DateTime {
        return $this->dateDebExePublication;
    }

    /**
     * Get the delai livraison.
     *
     * @return int|null Returns the delai livraison.
     */
    public function getDelaiLivraison(): ?int {
        return $this->delaiLivraison;
    }

    /**
     * Get the devis mail.
     *
     * @return bool|null Returns the devis mail.
     */
    public function getDevisMail(): ?bool {
        return $this->devisMail;
    }

    /**
     * Get the ean client.
     *
     * @return string|null Returns the ean client.
     */
    public function getEanClient(): ?string {
        return $this->eanClient;
    }

    /**
     * Get the ean facture papier.
     *
     * @return string|null Returns the ean facture papier.
     */
    public function getEanFacturePapier(): ?string {
        return $this->eanFacturePapier;
    }

    /**
     * Get the ean plateforme.
     *
     * @return string|null Returns the ean plateforme.
     */
    public function getEanPlateforme(): ?string {
        return $this->eanPlateforme;
    }

    /**
     * Get the echeance fin decade.
     *
     * @return bool|null Returns the echeance fin decade.
     */
    public function getEcheanceFinDecade(): ?bool {
        return $this->echeanceFinDecade;
    }

    /**
     * Get the echeance fin quinzaine.
     *
     * @return bool|null Returns the echeance fin quinzaine.
     */
    public function getEcheanceFinQuinzaine(): ?bool {
        return $this->echeanceFinQuinzaine;
    }

    /**
     * Get the edi export bl.
     *
     * @return bool|null Returns the edi export bl.
     */
    public function getEdiExportBl(): ?bool {
        return $this->ediExportBl;
    }

    /**
     * Get the edi export fac.
     *
     * @return bool|null Returns the edi export fac.
     */
    public function getEdiExportFac(): ?bool {
        return $this->ediExportFac;
    }

    /**
     * Get the fact complement suite.
     *
     * @return string|null Returns the fact complement suite.
     */
    public function getFactComplementSuite(): ?string {
        return $this->factComplementSuite;
    }

    /**
     * Get the fact zip code.
     *
     * @return string|null Returns the fact zip code.
     */
    public function getFactZipCode(): ?string {
        return $this->factZipCode;
    }

    /**
     * Get the ind mail publication.
     *
     * @return int|null Returns the ind mail publication.
     */
    public function getIndMailPublication(): ?int {
        return $this->indMailPublication;
    }

    /**
     * Get the indice bl mail.
     *
     * @return int|null Returns the indice bl mail.
     */
    public function getIndiceBlMail(): ?int {
        return $this->indiceBlMail;
    }

    /**
     * Get the indice cdes mail.
     *
     * @return int|null Returns the indice cdes mail.
     */
    public function getIndiceCdesMail(): ?int {
        return $this->indiceCdesMail;
    }

    /**
     * Get the indice devis mail.
     *
     * @return int|null Returns the indice devis mail.
     */
    public function getIndiceDevisMail(): ?int {
        return $this->indiceDevisMail;
    }

    /**
     * Get the indice releves mail.
     *
     * @return int|null Returns the indice releves mail.
     */
    public function getIndiceRelevesMail(): ?int {
        return $this->indiceRelevesMail;
    }

    /**
     * Get the lettre de mission date signature.
     *
     * @return DateTime|null Returns the lettre de mission date signature.
     */
    public function getLettreDeMissionDateSignature(): ?DateTime {
        return $this->lettreDeMissionDateSignature;
    }

    /**
     * Get the modele facture manuelle spe.
     *
     * @return string|null Returns the modele facture manuelle spe.
     */
    public function getModeleFactureManuelleSpe(): ?string {
        return $this->modeleFactureManuelleSpe;
    }

    /**
     * Get the montant depassement autorise.
     *
     * @return float|null Returns the montant depassement autorise.
     */
    public function getMontantDepassementAutorise(): ?float {
        return $this->montantDepassementAutorise;
    }

    /**
     * Get the motif entree.
     *
     * @return string|null Returns the motif entree.
     */
    public function getMotifEntree(): ?string {
        return $this->motifEntree;
    }

    /**
     * Get the motif sortie.
     *
     * @return string|null Returns the motif sortie.
     */
    public function getMotifSortie(): ?string {
        return $this->motifSortie;
    }

    /**
     * Get the mt transport1.
     *
     * @return float|null Returns the mt transport1.
     */
    public function getMtTransport1(): ?float {
        return $this->mtTransport1;
    }

    /**
     * Get the mt transport2.
     *
     * @return float|null Returns the mt transport2.
     */
    public function getMtTransport2(): ?float {
        return $this->mtTransport2;
    }

    /**
     * Get the mt transport3.
     *
     * @return float|null Returns the mt transport3.
     */
    public function getMtTransport3(): ?float {
        return $this->mtTransport3;
    }

    /**
     * Get the mt transport4.
     *
     * @return float|null Returns the mt transport4.
     */
    public function getMtTransport4(): ?float {
        return $this->mtTransport4;
    }

    /**
     * Get the mt transport5.
     *
     * @return float|null Returns the mt transport5.
     */
    public function getMtTransport5(): ?float {
        return $this->mtTransport5;
    }

    /**
     * Get the non concerne is.
     *
     * @return bool|null Returns the non concerne is.
     */
    public function getNonConcerneIs(): ?bool {
        return $this->nonConcerneIs;
    }

    /**
     * Get the non concerne tp.
     *
     * @return bool|null Returns the non concerne tp.
     */
    public function getNonConcerneTp(): ?bool {
        return $this->nonConcerneTp;
    }

    /**
     * Get the non facturable.
     *
     * @return bool|null Returns the non facturable.
     */
    public function getNonFacturable(): ?bool {
        return $this->nonFacturable;
    }

    /**
     * Get the pme tarif ou rem spe.
     *
     * @return bool|null Returns the pme tarif ou rem spe.
     */
    public function getPmeTarifOuRemSpe(): ?bool {
        return $this->pmeTarifOuRemSpe;
    }

    /**
     * Get the prevenir mail publier.
     *
     * @return bool|null Returns the prevenir mail publier.
     */
    public function getPrevenirMailPublier(): ?bool {
        return $this->prevenirMailPublier;
    }

    /**
     * Get the releves mail.
     *
     * @return bool|null Returns the releves mail.
     */
    public function getRelevesMail(): ?bool {
        return $this->relevesMail;
    }

    /**
     * Get the social complement suite.
     *
     * @return string|null Returns the social complement suite.
     */
    public function getSocialComplementSuite(): ?string {
        return $this->socialComplementSuite;
    }

    /**
     * Get the social zip code.
     *
     * @return string|null Returns the social zip code.
     */
    public function getSocialZipCode(): ?string {
        return $this->socialZipCode;
    }

    /**
     * Get the trs art pied.
     *
     * @return string|null Returns the trs art pied.
     */
    public function getTrsArtPied(): ?string {
        return $this->trsArtPied;
    }

    /**
     * Get the trs art pied2.
     *
     * @return string|null Returns the trs art pied2.
     */
    public function getTrsArtPied2(): ?string {
        return $this->trsArtPied2;
    }

    /**
     * Get the trs categ march.
     *
     * @return string|null Returns the trs categ march.
     */
    public function getTrsCategMarch(): ?string {
        return $this->trsCategMarch;
    }

    /**
     * Get the trs centre ana.
     *
     * @return string|null Returns the trs centre ana.
     */
    public function getTrsCentreAna(): ?string {
        return $this->trsCentreAna;
    }

    /**
     * Get the trs code tarif1.
     *
     * @return string|null Returns the trs code tarif1.
     */
    public function getTrsCodeTarif1(): ?string {
        return $this->trsCodeTarif1;
    }

    /**
     * Get the trs code tarif1 sens.
     *
     * @return string|null Returns the trs code tarif1 sens.
     */
    public function getTrsCodeTarif1Sens(): ?string {
        return $this->trsCodeTarif1Sens;
    }

    /**
     * Get the trs code tarif2.
     *
     * @return string|null Returns the trs code tarif2.
     */
    public function getTrsCodeTarif2(): ?string {
        return $this->trsCodeTarif2;
    }

    /**
     * Get the trs code tarif2 sens.
     *
     * @return string|null Returns the trs code tarif2 sens.
     */
    public function getTrsCodeTarif2Sens(): ?string {
        return $this->trsCodeTarif2Sens;
    }

    /**
     * Get the trs code tarif3.
     *
     * @return string|null Returns the trs code tarif3.
     */
    public function getTrsCodeTarif3(): ?string {
        return $this->trsCodeTarif3;
    }

    /**
     * Get the trs code tarif3 sens.
     *
     * @return string|null Returns the trs code tarif3 sens.
     */
    public function getTrsCodeTarif3Sens(): ?string {
        return $this->trsCodeTarif3Sens;
    }

    /**
     * Get the trs code tarif4.
     *
     * @return string|null Returns the trs code tarif4.
     */
    public function getTrsCodeTarif4(): ?string {
        return $this->trsCodeTarif4;
    }

    /**
     * Get the trs code tarif4 sens.
     *
     * @return string|null Returns the trs code tarif4 sens.
     */
    public function getTrsCodeTarif4Sens(): ?string {
        return $this->trsCodeTarif4Sens;
    }

    /**
     * Get the trs code tarif5.
     *
     * @return string|null Returns the trs code tarif5.
     */
    public function getTrsCodeTarif5(): ?string {
        return $this->trsCodeTarif5;
    }

    /**
     * Get the trs code tarif5 sens.
     *
     * @return string|null Returns the trs code tarif5 sens.
     */
    public function getTrsCodeTarif5Sens(): ?string {
        return $this->trsCodeTarif5Sens;
    }

    /**
     * Get the trs code tarif6.
     *
     * @return string|null Returns the trs code tarif6.
     */
    public function getTrsCodeTarif6(): ?string {
        return $this->trsCodeTarif6;
    }

    /**
     * Get the trs code tarif6 sens.
     *
     * @return string|null Returns the trs code tarif6 sens.
     */
    public function getTrsCodeTarif6Sens(): ?string {
        return $this->trsCodeTarif6Sens;
    }

    /**
     * Get the trs code tarif def.
     *
     * @return int|null Returns the trs code tarif def.
     */
    public function getTrsCodeTarifDef(): ?int {
        return $this->trsCodeTarifDef;
    }

    /**
     * Get the trs comment1.
     *
     * @return string|null Returns the trs comment1.
     */
    public function getTrsComment1(): ?string {
        return $this->trsComment1;
    }

    /**
     * Get the trs comment2.
     *
     * @return string|null Returns the trs comment2.
     */
    public function getTrsComment2(): ?string {
        return $this->trsComment2;
    }

    /**
     * Get the trs comment3.
     *
     * @return string|null Returns the trs comment3.
     */
    public function getTrsComment3(): ?string {
        return $this->trsComment3;
    }

    /**
     * Get the trs comment4.
     *
     * @return string|null Returns the trs comment4.
     */
    public function getTrsComment4(): ?string {
        return $this->trsComment4;
    }

    /**
     * Get the trs comment5.
     *
     * @return string|null Returns the trs comment5.
     */
    public function getTrsComment5(): ?string {
        return $this->trsComment5;
    }

    /**
     * Get the trs comment6.
     *
     * @return string|null Returns the trs comment6.
     */
    public function getTrsComment6(): ?string {
        return $this->trsComment6;
    }

    /**
     * Get the trs comment7.
     *
     * @return string|null Returns the trs comment7.
     */
    public function getTrsComment7(): ?string {
        return $this->trsComment7;
    }

    /**
     * Get the trs comment8.
     *
     * @return string|null Returns the trs comment8.
     */
    public function getTrsComment8(): ?string {
        return $this->trsComment8;
    }

    /**
     * Get the trs comment9.
     *
     * @return string|null Returns the trs comment9.
     */
    public function getTrsComment9(): ?string {
        return $this->trsComment9;
    }

    /**
     * Get the trs consignes1.
     *
     * @return string|null Returns the trs consignes1.
     */
    public function getTrsConsignes1(): ?string {
        return $this->trsConsignes1;
    }

    /**
     * Get the trs consignes2.
     *
     * @return string|null Returns the trs consignes2.
     */
    public function getTrsConsignes2(): ?string {
        return $this->trsConsignes2;
    }

    /**
     * Get the trs consignes3.
     *
     * @return string|null Returns the trs consignes3.
     */
    public function getTrsConsignes3(): ?string {
        return $this->trsConsignes3;
    }

    /**
     * Get the trs gestion palettes.
     *
     * @return bool|null Returns the trs gestion palettes.
     */
    public function getTrsGestionPalettes(): ?bool {
        return $this->trsGestionPalettes;
    }

    /**
     * Get the trs marchandise sensible.
     *
     * @return bool|null Returns the trs marchandise sensible.
     */
    public function getTrsMarchandiseSensible(): ?bool {
        return $this->trsMarchandiseSensible;
    }

    /**
     * Get the trs modele facture spe.
     *
     * @return string|null Returns the trs modele facture spe.
     */
    public function getTrsModeleFactureSpe(): ?string {
        return $this->trsModeleFactureSpe;
    }

    /**
     * Get the trs poids mini pal.
     *
     * @return float|null Returns the trs poids mini pal.
     */
    public function getTrsPoidsMiniPal(): ?float {
        return $this->trsPoidsMiniPal;
    }

    /**
     * Get the trs port du auto.
     *
     * @return bool|null Returns the trs port du auto.
     */
    public function getTrsPortDuAuto(): ?bool {
        return $this->trsPortDuAuto;
    }

    /**
     * Get the trs suivi ca mens.
     *
     * @return bool|null Returns the trs suivi ca mens.
     */
    public function getTrsSuiviCaMens(): ?bool {
        return $this->trsSuiviCaMens;
    }

    /**
     * Get the trs suivi dt enl.
     *
     * @return bool|null Returns the trs suivi dt enl.
     */
    public function getTrsSuiviDtEnl(): ?bool {
        return $this->trsSuiviDtEnl;
    }

    /**
     * Get the trs suivi dt liv.
     *
     * @return bool|null Returns the trs suivi dt liv.
     */
    public function getTrsSuiviDtLiv(): ?bool {
        return $this->trsSuiviDtLiv;
    }

    /**
     * Get the trs suivi dt liv fax.
     *
     * @return string|null Returns the trs suivi dt liv fax.
     */
    public function getTrsSuiviDtLivFax(): ?string {
        return $this->trsSuiviDtLivFax;
    }

    /**
     * Get the trs suivi dt liv mail.
     *
     * @return string|null Returns the trs suivi dt liv mail.
     */
    public function getTrsSuiviDtLivMail(): ?string {
        return $this->trsSuiviDtLivMail;
    }

    /**
     * Get the trs type client.
     *
     * @return string|null Returns the trs type client.
     */
    public function getTrsTypeClient(): ?string {
        return $this->trsTypeClient;
    }

    /**
     * Get the trs type facturation.
     *
     * @return string|null Returns the trs type facturation.
     */
    public function getTrsTypeFacturation(): ?string {
        return $this->trsTypeFacturation;
    }

    /**
     * Get the trs type travail.
     *
     * @return string|null Returns the trs type travail.
     */
    public function getTrsTypeTravail(): ?string {
        return $this->trsTypeTravail;
    }

    /**
     * Get the type transport1.
     *
     * @return string|null Returns the type transport1.
     */
    public function getTypeTransport1(): ?string {
        return $this->typeTransport1;
    }

    /**
     * Get the type transport2.
     *
     * @return string|null Returns the type transport2.
     */
    public function getTypeTransport2(): ?string {
        return $this->typeTransport2;
    }

    /**
     * Get the type transport3.
     *
     * @return string|null Returns the type transport3.
     */
    public function getTypeTransport3(): ?string {
        return $this->typeTransport3;
    }

    /**
     * Get the type transport4.
     *
     * @return string|null Returns the type transport4.
     */
    public function getTypeTransport4(): ?string {
        return $this->typeTransport4;
    }

    /**
     * Get the type transport5.
     *
     * @return string|null Returns the type transport5.
     */
    public function getTypeTransport5(): ?string {
        return $this->typeTransport5;
    }

    /**
     * Get the localisation archives.
     *
     * @return string|null Returns the localisation archives.
     */
    public function getlocalisationArchives(): ?string {
        return $this->localisationArchives;
    }

    /**
     * Set the allotissement.
     *
     * @param bool|null $allotissement The allotissement.
     * @return Clients2 Returns this Clients2.
     */
    public function setAllotissement(?bool $allotissement): Clients2 {
        $this->allotissement = $allotissement;
        return $this;
    }

    /**
     * Set the bl mail.
     *
     * @param bool|null $blMail The bl mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setBlMail(?bool $blMail): Clients2 {
        $this->blMail = $blMail;
        return $this;
    }

    /**
     * Set the cdes mail.
     *
     * @param bool|null $cdesMail The cdes mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setCdesMail(?bool $cdesMail): Clients2 {
        $this->cdesMail = $cdesMail;
        return $this;
    }

    /**
     * Set the code activite cga.
     *
     * @param string|null $codeActiviteCga The code activite cga.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeActiviteCga(?string $codeActiviteCga): Clients2 {
        $this->codeActiviteCga = $codeActiviteCga;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeClient(?string $codeClient): Clients2 {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code transporteur1.
     *
     * @param string|null $codeTransporteur1 The code transporteur1.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeTransporteur1(?string $codeTransporteur1): Clients2 {
        $this->codeTransporteur1 = $codeTransporteur1;
        return $this;
    }

    /**
     * Set the code transporteur2.
     *
     * @param string|null $codeTransporteur2 The code transporteur2.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeTransporteur2(?string $codeTransporteur2): Clients2 {
        $this->codeTransporteur2 = $codeTransporteur2;
        return $this;
    }

    /**
     * Set the code transporteur3.
     *
     * @param string|null $codeTransporteur3 The code transporteur3.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeTransporteur3(?string $codeTransporteur3): Clients2 {
        $this->codeTransporteur3 = $codeTransporteur3;
        return $this;
    }

    /**
     * Set the code transporteur4.
     *
     * @param string|null $codeTransporteur4 The code transporteur4.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeTransporteur4(?string $codeTransporteur4): Clients2 {
        $this->codeTransporteur4 = $codeTransporteur4;
        return $this;
    }

    /**
     * Set the code transporteur5.
     *
     * @param string|null $codeTransporteur5 The code transporteur5.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeTransporteur5(?string $codeTransporteur5): Clients2 {
        $this->codeTransporteur5 = $codeTransporteur5;
        return $this;
    }

    /**
     * Set the date deb exe publication.
     *
     * @param DateTime|null $dateDebExePublication The date deb exe publication.
     * @return Clients2 Returns this Clients2.
     */
    public function setDateDebExePublication(?DateTime $dateDebExePublication): Clients2 {
        $this->dateDebExePublication = $dateDebExePublication;
        return $this;
    }

    /**
     * Set the delai livraison.
     *
     * @param int|null $delaiLivraison The delai livraison.
     * @return Clients2 Returns this Clients2.
     */
    public function setDelaiLivraison(?int $delaiLivraison): Clients2 {
        $this->delaiLivraison = $delaiLivraison;
        return $this;
    }

    /**
     * Set the devis mail.
     *
     * @param bool|null $devisMail The devis mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setDevisMail(?bool $devisMail): Clients2 {
        $this->devisMail = $devisMail;
        return $this;
    }

    /**
     * Set the ean client.
     *
     * @param string|null $eanClient The ean client.
     * @return Clients2 Returns this Clients2.
     */
    public function setEanClient(?string $eanClient): Clients2 {
        $this->eanClient = $eanClient;
        return $this;
    }

    /**
     * Set the ean facture papier.
     *
     * @param string|null $eanFacturePapier The ean facture papier.
     * @return Clients2 Returns this Clients2.
     */
    public function setEanFacturePapier(?string $eanFacturePapier): Clients2 {
        $this->eanFacturePapier = $eanFacturePapier;
        return $this;
    }

    /**
     * Set the ean plateforme.
     *
     * @param string|null $eanPlateforme The ean plateforme.
     * @return Clients2 Returns this Clients2.
     */
    public function setEanPlateforme(?string $eanPlateforme): Clients2 {
        $this->eanPlateforme = $eanPlateforme;
        return $this;
    }

    /**
     * Set the echeance fin decade.
     *
     * @param bool|null $echeanceFinDecade The echeance fin decade.
     * @return Clients2 Returns this Clients2.
     */
    public function setEcheanceFinDecade(?bool $echeanceFinDecade): Clients2 {
        $this->echeanceFinDecade = $echeanceFinDecade;
        return $this;
    }

    /**
     * Set the echeance fin quinzaine.
     *
     * @param bool|null $echeanceFinQuinzaine The echeance fin quinzaine.
     * @return Clients2 Returns this Clients2.
     */
    public function setEcheanceFinQuinzaine(?bool $echeanceFinQuinzaine): Clients2 {
        $this->echeanceFinQuinzaine = $echeanceFinQuinzaine;
        return $this;
    }

    /**
     * Set the edi export bl.
     *
     * @param bool|null $ediExportBl The edi export bl.
     * @return Clients2 Returns this Clients2.
     */
    public function setEdiExportBl(?bool $ediExportBl): Clients2 {
        $this->ediExportBl = $ediExportBl;
        return $this;
    }

    /**
     * Set the edi export fac.
     *
     * @param bool|null $ediExportFac The edi export fac.
     * @return Clients2 Returns this Clients2.
     */
    public function setEdiExportFac(?bool $ediExportFac): Clients2 {
        $this->ediExportFac = $ediExportFac;
        return $this;
    }

    /**
     * Set the fact complement suite.
     *
     * @param string|null $factComplementSuite The fact complement suite.
     * @return Clients2 Returns this Clients2.
     */
    public function setFactComplementSuite(?string $factComplementSuite): Clients2 {
        $this->factComplementSuite = $factComplementSuite;
        return $this;
    }

    /**
     * Set the fact zip code.
     *
     * @param string|null $factZipCode The fact zip code.
     * @return Clients2 Returns this Clients2.
     */
    public function setFactZipCode(?string $factZipCode): Clients2 {
        $this->factZipCode = $factZipCode;
        return $this;
    }

    /**
     * Set the ind mail publication.
     *
     * @param int|null $indMailPublication The ind mail publication.
     * @return Clients2 Returns this Clients2.
     */
    public function setIndMailPublication(?int $indMailPublication): Clients2 {
        $this->indMailPublication = $indMailPublication;
        return $this;
    }

    /**
     * Set the indice bl mail.
     *
     * @param int|null $indiceBlMail The indice bl mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setIndiceBlMail(?int $indiceBlMail): Clients2 {
        $this->indiceBlMail = $indiceBlMail;
        return $this;
    }

    /**
     * Set the indice cdes mail.
     *
     * @param int|null $indiceCdesMail The indice cdes mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setIndiceCdesMail(?int $indiceCdesMail): Clients2 {
        $this->indiceCdesMail = $indiceCdesMail;
        return $this;
    }

    /**
     * Set the indice devis mail.
     *
     * @param int|null $indiceDevisMail The indice devis mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setIndiceDevisMail(?int $indiceDevisMail): Clients2 {
        $this->indiceDevisMail = $indiceDevisMail;
        return $this;
    }

    /**
     * Set the indice releves mail.
     *
     * @param int|null $indiceRelevesMail The indice releves mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setIndiceRelevesMail(?int $indiceRelevesMail): Clients2 {
        $this->indiceRelevesMail = $indiceRelevesMail;
        return $this;
    }

    /**
     * Set the lettre de mission date signature.
     *
     * @param DateTime|null $lettreDeMissionDateSignature The lettre de mission date signature.
     * @return Clients2 Returns this Clients2.
     */
    public function setLettreDeMissionDateSignature(?DateTime $lettreDeMissionDateSignature): Clients2 {
        $this->lettreDeMissionDateSignature = $lettreDeMissionDateSignature;
        return $this;
    }

    /**
     * Set the modele facture manuelle spe.
     *
     * @param string|null $modeleFactureManuelleSpe The modele facture manuelle spe.
     * @return Clients2 Returns this Clients2.
     */
    public function setModeleFactureManuelleSpe(?string $modeleFactureManuelleSpe): Clients2 {
        $this->modeleFactureManuelleSpe = $modeleFactureManuelleSpe;
        return $this;
    }

    /**
     * Set the montant depassement autorise.
     *
     * @param float|null $montantDepassementAutorise The montant depassement autorise.
     * @return Clients2 Returns this Clients2.
     */
    public function setMontantDepassementAutorise(?float $montantDepassementAutorise): Clients2 {
        $this->montantDepassementAutorise = $montantDepassementAutorise;
        return $this;
    }

    /**
     * Set the motif entree.
     *
     * @param string|null $motifEntree The motif entree.
     * @return Clients2 Returns this Clients2.
     */
    public function setMotifEntree(?string $motifEntree): Clients2 {
        $this->motifEntree = $motifEntree;
        return $this;
    }

    /**
     * Set the motif sortie.
     *
     * @param string|null $motifSortie The motif sortie.
     * @return Clients2 Returns this Clients2.
     */
    public function setMotifSortie(?string $motifSortie): Clients2 {
        $this->motifSortie = $motifSortie;
        return $this;
    }

    /**
     * Set the mt transport1.
     *
     * @param float|null $mtTransport1 The mt transport1.
     * @return Clients2 Returns this Clients2.
     */
    public function setMtTransport1(?float $mtTransport1): Clients2 {
        $this->mtTransport1 = $mtTransport1;
        return $this;
    }

    /**
     * Set the mt transport2.
     *
     * @param float|null $mtTransport2 The mt transport2.
     * @return Clients2 Returns this Clients2.
     */
    public function setMtTransport2(?float $mtTransport2): Clients2 {
        $this->mtTransport2 = $mtTransport2;
        return $this;
    }

    /**
     * Set the mt transport3.
     *
     * @param float|null $mtTransport3 The mt transport3.
     * @return Clients2 Returns this Clients2.
     */
    public function setMtTransport3(?float $mtTransport3): Clients2 {
        $this->mtTransport3 = $mtTransport3;
        return $this;
    }

    /**
     * Set the mt transport4.
     *
     * @param float|null $mtTransport4 The mt transport4.
     * @return Clients2 Returns this Clients2.
     */
    public function setMtTransport4(?float $mtTransport4): Clients2 {
        $this->mtTransport4 = $mtTransport4;
        return $this;
    }

    /**
     * Set the mt transport5.
     *
     * @param float|null $mtTransport5 The mt transport5.
     * @return Clients2 Returns this Clients2.
     */
    public function setMtTransport5(?float $mtTransport5): Clients2 {
        $this->mtTransport5 = $mtTransport5;
        return $this;
    }

    /**
     * Set the non concerne is.
     *
     * @param bool|null $nonConcerneIs The non concerne is.
     * @return Clients2 Returns this Clients2.
     */
    public function setNonConcerneIs(?bool $nonConcerneIs): Clients2 {
        $this->nonConcerneIs = $nonConcerneIs;
        return $this;
    }

    /**
     * Set the non concerne tp.
     *
     * @param bool|null $nonConcerneTp The non concerne tp.
     * @return Clients2 Returns this Clients2.
     */
    public function setNonConcerneTp(?bool $nonConcerneTp): Clients2 {
        $this->nonConcerneTp = $nonConcerneTp;
        return $this;
    }

    /**
     * Set the non facturable.
     *
     * @param bool|null $nonFacturable The non facturable.
     * @return Clients2 Returns this Clients2.
     */
    public function setNonFacturable(?bool $nonFacturable): Clients2 {
        $this->nonFacturable = $nonFacturable;
        return $this;
    }

    /**
     * Set the pme tarif ou rem spe.
     *
     * @param bool|null $pmeTarifOuRemSpe The pme tarif ou rem spe.
     * @return Clients2 Returns this Clients2.
     */
    public function setPmeTarifOuRemSpe(?bool $pmeTarifOuRemSpe): Clients2 {
        $this->pmeTarifOuRemSpe = $pmeTarifOuRemSpe;
        return $this;
    }

    /**
     * Set the prevenir mail publier.
     *
     * @param bool|null $prevenirMailPublier The prevenir mail publier.
     * @return Clients2 Returns this Clients2.
     */
    public function setPrevenirMailPublier(?bool $prevenirMailPublier): Clients2 {
        $this->prevenirMailPublier = $prevenirMailPublier;
        return $this;
    }

    /**
     * Set the releves mail.
     *
     * @param bool|null $relevesMail The releves mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setRelevesMail(?bool $relevesMail): Clients2 {
        $this->relevesMail = $relevesMail;
        return $this;
    }

    /**
     * Set the social complement suite.
     *
     * @param string|null $socialComplementSuite The social complement suite.
     * @return Clients2 Returns this Clients2.
     */
    public function setSocialComplementSuite(?string $socialComplementSuite): Clients2 {
        $this->socialComplementSuite = $socialComplementSuite;
        return $this;
    }

    /**
     * Set the social zip code.
     *
     * @param string|null $socialZipCode The social zip code.
     * @return Clients2 Returns this Clients2.
     */
    public function setSocialZipCode(?string $socialZipCode): Clients2 {
        $this->socialZipCode = $socialZipCode;
        return $this;
    }

    /**
     * Set the trs art pied.
     *
     * @param string|null $trsArtPied The trs art pied.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsArtPied(?string $trsArtPied): Clients2 {
        $this->trsArtPied = $trsArtPied;
        return $this;
    }

    /**
     * Set the trs art pied2.
     *
     * @param string|null $trsArtPied2 The trs art pied2.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsArtPied2(?string $trsArtPied2): Clients2 {
        $this->trsArtPied2 = $trsArtPied2;
        return $this;
    }

    /**
     * Set the trs categ march.
     *
     * @param string|null $trsCategMarch The trs categ march.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCategMarch(?string $trsCategMarch): Clients2 {
        $this->trsCategMarch = $trsCategMarch;
        return $this;
    }

    /**
     * Set the trs centre ana.
     *
     * @param string|null $trsCentreAna The trs centre ana.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCentreAna(?string $trsCentreAna): Clients2 {
        $this->trsCentreAna = $trsCentreAna;
        return $this;
    }

    /**
     * Set the trs code tarif1.
     *
     * @param string|null $trsCodeTarif1 The trs code tarif1.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif1(?string $trsCodeTarif1): Clients2 {
        $this->trsCodeTarif1 = $trsCodeTarif1;
        return $this;
    }

    /**
     * Set the trs code tarif1 sens.
     *
     * @param string|null $trsCodeTarif1Sens The trs code tarif1 sens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif1Sens(?string $trsCodeTarif1Sens): Clients2 {
        $this->trsCodeTarif1Sens = $trsCodeTarif1Sens;
        return $this;
    }

    /**
     * Set the trs code tarif2.
     *
     * @param string|null $trsCodeTarif2 The trs code tarif2.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif2(?string $trsCodeTarif2): Clients2 {
        $this->trsCodeTarif2 = $trsCodeTarif2;
        return $this;
    }

    /**
     * Set the trs code tarif2 sens.
     *
     * @param string|null $trsCodeTarif2Sens The trs code tarif2 sens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif2Sens(?string $trsCodeTarif2Sens): Clients2 {
        $this->trsCodeTarif2Sens = $trsCodeTarif2Sens;
        return $this;
    }

    /**
     * Set the trs code tarif3.
     *
     * @param string|null $trsCodeTarif3 The trs code tarif3.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif3(?string $trsCodeTarif3): Clients2 {
        $this->trsCodeTarif3 = $trsCodeTarif3;
        return $this;
    }

    /**
     * Set the trs code tarif3 sens.
     *
     * @param string|null $trsCodeTarif3Sens The trs code tarif3 sens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif3Sens(?string $trsCodeTarif3Sens): Clients2 {
        $this->trsCodeTarif3Sens = $trsCodeTarif3Sens;
        return $this;
    }

    /**
     * Set the trs code tarif4.
     *
     * @param string|null $trsCodeTarif4 The trs code tarif4.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif4(?string $trsCodeTarif4): Clients2 {
        $this->trsCodeTarif4 = $trsCodeTarif4;
        return $this;
    }

    /**
     * Set the trs code tarif4 sens.
     *
     * @param string|null $trsCodeTarif4Sens The trs code tarif4 sens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif4Sens(?string $trsCodeTarif4Sens): Clients2 {
        $this->trsCodeTarif4Sens = $trsCodeTarif4Sens;
        return $this;
    }

    /**
     * Set the trs code tarif5.
     *
     * @param string|null $trsCodeTarif5 The trs code tarif5.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif5(?string $trsCodeTarif5): Clients2 {
        $this->trsCodeTarif5 = $trsCodeTarif5;
        return $this;
    }

    /**
     * Set the trs code tarif5 sens.
     *
     * @param string|null $trsCodeTarif5Sens The trs code tarif5 sens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif5Sens(?string $trsCodeTarif5Sens): Clients2 {
        $this->trsCodeTarif5Sens = $trsCodeTarif5Sens;
        return $this;
    }

    /**
     * Set the trs code tarif6.
     *
     * @param string|null $trsCodeTarif6 The trs code tarif6.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif6(?string $trsCodeTarif6): Clients2 {
        $this->trsCodeTarif6 = $trsCodeTarif6;
        return $this;
    }

    /**
     * Set the trs code tarif6 sens.
     *
     * @param string|null $trsCodeTarif6Sens The trs code tarif6 sens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif6Sens(?string $trsCodeTarif6Sens): Clients2 {
        $this->trsCodeTarif6Sens = $trsCodeTarif6Sens;
        return $this;
    }

    /**
     * Set the trs code tarif def.
     *
     * @param int|null $trsCodeTarifDef The trs code tarif def.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarifDef(?int $trsCodeTarifDef): Clients2 {
        $this->trsCodeTarifDef = $trsCodeTarifDef;
        return $this;
    }

    /**
     * Set the trs comment1.
     *
     * @param string|null $trsComment1 The trs comment1.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment1(?string $trsComment1): Clients2 {
        $this->trsComment1 = $trsComment1;
        return $this;
    }

    /**
     * Set the trs comment2.
     *
     * @param string|null $trsComment2 The trs comment2.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment2(?string $trsComment2): Clients2 {
        $this->trsComment2 = $trsComment2;
        return $this;
    }

    /**
     * Set the trs comment3.
     *
     * @param string|null $trsComment3 The trs comment3.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment3(?string $trsComment3): Clients2 {
        $this->trsComment3 = $trsComment3;
        return $this;
    }

    /**
     * Set the trs comment4.
     *
     * @param string|null $trsComment4 The trs comment4.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment4(?string $trsComment4): Clients2 {
        $this->trsComment4 = $trsComment4;
        return $this;
    }

    /**
     * Set the trs comment5.
     *
     * @param string|null $trsComment5 The trs comment5.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment5(?string $trsComment5): Clients2 {
        $this->trsComment5 = $trsComment5;
        return $this;
    }

    /**
     * Set the trs comment6.
     *
     * @param string|null $trsComment6 The trs comment6.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment6(?string $trsComment6): Clients2 {
        $this->trsComment6 = $trsComment6;
        return $this;
    }

    /**
     * Set the trs comment7.
     *
     * @param string|null $trsComment7 The trs comment7.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment7(?string $trsComment7): Clients2 {
        $this->trsComment7 = $trsComment7;
        return $this;
    }

    /**
     * Set the trs comment8.
     *
     * @param string|null $trsComment8 The trs comment8.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment8(?string $trsComment8): Clients2 {
        $this->trsComment8 = $trsComment8;
        return $this;
    }

    /**
     * Set the trs comment9.
     *
     * @param string|null $trsComment9 The trs comment9.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment9(?string $trsComment9): Clients2 {
        $this->trsComment9 = $trsComment9;
        return $this;
    }

    /**
     * Set the trs consignes1.
     *
     * @param string|null $trsConsignes1 The trs consignes1.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsConsignes1(?string $trsConsignes1): Clients2 {
        $this->trsConsignes1 = $trsConsignes1;
        return $this;
    }

    /**
     * Set the trs consignes2.
     *
     * @param string|null $trsConsignes2 The trs consignes2.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsConsignes2(?string $trsConsignes2): Clients2 {
        $this->trsConsignes2 = $trsConsignes2;
        return $this;
    }

    /**
     * Set the trs consignes3.
     *
     * @param string|null $trsConsignes3 The trs consignes3.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsConsignes3(?string $trsConsignes3): Clients2 {
        $this->trsConsignes3 = $trsConsignes3;
        return $this;
    }

    /**
     * Set the trs gestion palettes.
     *
     * @param bool|null $trsGestionPalettes The trs gestion palettes.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsGestionPalettes(?bool $trsGestionPalettes): Clients2 {
        $this->trsGestionPalettes = $trsGestionPalettes;
        return $this;
    }

    /**
     * Set the trs marchandise sensible.
     *
     * @param bool|null $trsMarchandiseSensible The trs marchandise sensible.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsMarchandiseSensible(?bool $trsMarchandiseSensible): Clients2 {
        $this->trsMarchandiseSensible = $trsMarchandiseSensible;
        return $this;
    }

    /**
     * Set the trs modele facture spe.
     *
     * @param string|null $trsModeleFactureSpe The trs modele facture spe.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsModeleFactureSpe(?string $trsModeleFactureSpe): Clients2 {
        $this->trsModeleFactureSpe = $trsModeleFactureSpe;
        return $this;
    }

    /**
     * Set the trs poids mini pal.
     *
     * @param float|null $trsPoidsMiniPal The trs poids mini pal.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsPoidsMiniPal(?float $trsPoidsMiniPal): Clients2 {
        $this->trsPoidsMiniPal = $trsPoidsMiniPal;
        return $this;
    }

    /**
     * Set the trs port du auto.
     *
     * @param bool|null $trsPortDuAuto The trs port du auto.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsPortDuAuto(?bool $trsPortDuAuto): Clients2 {
        $this->trsPortDuAuto = $trsPortDuAuto;
        return $this;
    }

    /**
     * Set the trs suivi ca mens.
     *
     * @param bool|null $trsSuiviCaMens The trs suivi ca mens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsSuiviCaMens(?bool $trsSuiviCaMens): Clients2 {
        $this->trsSuiviCaMens = $trsSuiviCaMens;
        return $this;
    }

    /**
     * Set the trs suivi dt enl.
     *
     * @param bool|null $trsSuiviDtEnl The trs suivi dt enl.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsSuiviDtEnl(?bool $trsSuiviDtEnl): Clients2 {
        $this->trsSuiviDtEnl = $trsSuiviDtEnl;
        return $this;
    }

    /**
     * Set the trs suivi dt liv.
     *
     * @param bool|null $trsSuiviDtLiv The trs suivi dt liv.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsSuiviDtLiv(?bool $trsSuiviDtLiv): Clients2 {
        $this->trsSuiviDtLiv = $trsSuiviDtLiv;
        return $this;
    }

    /**
     * Set the trs suivi dt liv fax.
     *
     * @param string|null $trsSuiviDtLivFax The trs suivi dt liv fax.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsSuiviDtLivFax(?string $trsSuiviDtLivFax): Clients2 {
        $this->trsSuiviDtLivFax = $trsSuiviDtLivFax;
        return $this;
    }

    /**
     * Set the trs suivi dt liv mail.
     *
     * @param string|null $trsSuiviDtLivMail The trs suivi dt liv mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsSuiviDtLivMail(?string $trsSuiviDtLivMail): Clients2 {
        $this->trsSuiviDtLivMail = $trsSuiviDtLivMail;
        return $this;
    }

    /**
     * Set the trs type client.
     *
     * @param string|null $trsTypeClient The trs type client.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsTypeClient(?string $trsTypeClient): Clients2 {
        $this->trsTypeClient = $trsTypeClient;
        return $this;
    }

    /**
     * Set the trs type facturation.
     *
     * @param string|null $trsTypeFacturation The trs type facturation.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsTypeFacturation(?string $trsTypeFacturation): Clients2 {
        $this->trsTypeFacturation = $trsTypeFacturation;
        return $this;
    }

    /**
     * Set the trs type travail.
     *
     * @param string|null $trsTypeTravail The trs type travail.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsTypeTravail(?string $trsTypeTravail): Clients2 {
        $this->trsTypeTravail = $trsTypeTravail;
        return $this;
    }

    /**
     * Set the type transport1.
     *
     * @param string|null $typeTransport1 The type transport1.
     * @return Clients2 Returns this Clients2.
     */
    public function setTypeTransport1(?string $typeTransport1): Clients2 {
        $this->typeTransport1 = $typeTransport1;
        return $this;
    }

    /**
     * Set the type transport2.
     *
     * @param string|null $typeTransport2 The type transport2.
     * @return Clients2 Returns this Clients2.
     */
    public function setTypeTransport2(?string $typeTransport2): Clients2 {
        $this->typeTransport2 = $typeTransport2;
        return $this;
    }

    /**
     * Set the type transport3.
     *
     * @param string|null $typeTransport3 The type transport3.
     * @return Clients2 Returns this Clients2.
     */
    public function setTypeTransport3(?string $typeTransport3): Clients2 {
        $this->typeTransport3 = $typeTransport3;
        return $this;
    }

    /**
     * Set the type transport4.
     *
     * @param string|null $typeTransport4 The type transport4.
     * @return Clients2 Returns this Clients2.
     */
    public function setTypeTransport4(?string $typeTransport4): Clients2 {
        $this->typeTransport4 = $typeTransport4;
        return $this;
    }

    /**
     * Set the type transport5.
     *
     * @param string|null $typeTransport5 The type transport5.
     * @return Clients2 Returns this Clients2.
     */
    public function setTypeTransport5(?string $typeTransport5): Clients2 {
        $this->typeTransport5 = $typeTransport5;
        return $this;
    }

    /**
     * Set the localisation archives.
     *
     * @param string|null $localisationArchives The localisation archives.
     * @return Clients2 Returns this Clients2.
     */
    public function setlocalisationArchives(?string $localisationArchives): Clients2 {
        $this->localisationArchives = $localisationArchives;
        return $this;
    }
}
