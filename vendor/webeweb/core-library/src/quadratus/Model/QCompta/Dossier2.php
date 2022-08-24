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
 * Dossier2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Dossier2 {

    /**
     * Annee recolte.
     *
     * @var string|null
     */
    private $anneeRecolte;

    /**
     * Appliquer regroupement.
     *
     * @var bool|null
     */
    private $appliquerRegroupement;

    /**
     * Cca memo.
     *
     * @var string|null
     */
    private $ccaMemo;

    /**
     * Classe4 client debut.
     *
     * @var string|null
     */
    private $classe4ClientDebut;

    /**
     * Classe4 client fin.
     *
     * @var string|null
     */
    private $classe4ClientFin;

    /**
     * Classe4 frn debut.
     *
     * @var string|null
     */
    private $classe4FrnDebut;

    /**
     * Classe4 frn fin.
     *
     * @var string|null
     */
    private $classe4FrnFin;

    /**
     * Codif classe0.
     *
     * @var string|null
     */
    private $codifClasse0;

    /**
     * Codif classe0 seule.
     *
     * @var string|null
     */
    private $codifClasse0Seule;

    /**
     * Codif classe9.
     *
     * @var string|null
     */
    private $codifClasse9;

    /**
     * Codif classe9 seule.
     *
     * @var string|null
     */
    private $codifClasse9Seule;

    /**
     * Collectif client debut.
     *
     * @var string|null
     */
    private $collectifClientDebut;

    /**
     * Collectif client defaut.
     *
     * @var string|null
     */
    private $collectifClientDefaut;

    /**
     * Collectif client fin.
     *
     * @var string|null
     */
    private $collectifClientFin;

    /**
     * Collectif frn debut.
     *
     * @var string|null
     */
    private $collectifFrnDebut;

    /**
     * Collectif frn defaut.
     *
     * @var string|null
     */
    private $collectifFrnDefaut;

    /**
     * Collectif frn fin.
     *
     * @var string|null
     */
    private $collectifFrnFin;

    /**
     * Collectif soc debut.
     *
     * @var string|null
     */
    private $collectifSocDebut;

    /**
     * Collectif soc fin.
     *
     * @var string|null
     */
    private $collectifSocFin;

    /**
     * Combi lettrage auto.
     *
     * @var int|null
     */
    private $combiLettrageAuto;

    /**
     * Commentaire dossier.
     *
     * @var string|null
     */
    private $commentaireDossier;

    /**
     * Control salaire cpt ex.
     *
     * @var string|null
     */
    private $controlSalaireCptEx;

    /**
     * Control salaire obs.
     *
     * @var string|null
     */
    private $controlSalaireObs;

    /**
     * Dads1 livre paie.
     *
     * @var float|null
     */
    private $dads1LivrePaie;

    /**
     * Dads1 paie.
     *
     * @var float|null
     */
    private $dads1Paie;

    /**
     * Dads1 remu moins.
     *
     * @var float|null
     */
    private $dads1RemuMoins;

    /**
     * Dads1 remu plus.
     *
     * @var float|null
     */
    private $dads1RemuPlus;

    /**
     * Date calcul prov cp.
     *
     * @var DateTime|null
     */
    private $dateCalculProvCp;

    /**
     * Date publication.
     *
     * @var DateTime|null
     */
    private $datePublication;

    /**
     * Date raz ecritures.
     *
     * @var DateTime|null
     */
    private $dateRazEcritures;

    /**
     * Dernier compte client.
     *
     * @var string|null
     */
    private $dernierCompteClient;

    /**
     * Dernier compte frn.
     *
     * @var string|null
     */
    private $dernierCompteFrn;

    /**
     * Diff lettrage code journal.
     *
     * @var string|null
     */
    private $diffLettrageCodeJournal;

    /**
     * Diff lettrage code libelle.
     *
     * @var string|null
     */
    private $diffLettrageCodeLibelle;

    /**
     * Diff lettrage folio.
     *
     * @var int|null
     */
    private $diffLettrageFolio;

    /**
     * Diff lettrage gains.
     *
     * @var string|null
     */
    private $diffLettrageGains;

    /**
     * Diff lettrage libelle.
     *
     * @var string|null
     */
    private $diffLettrageLibelle;

    /**
     * Diff lettrage pertes.
     *
     * @var string|null
     */
    private $diffLettragePertes;

    /**
     * Ds code collab.
     *
     * @var string|null
     */
    private $dsCodeCollab;

    /**
     * Ds date retour.
     *
     * @var DateTime|null
     */
    private $dsDateRetour;

    /**
     * Ds date sortie.
     *
     * @var DateTime|null
     */
    private $dsDateSortie;

    /**
     * Ecart maxi lettrage auto.
     *
     * @var float|null
     */
    private $ecartMaxiLettrageAuto;

    /**
     * Ecart mini ctrl tva.
     *
     * @var float|null
     */
    private $ecartMiniCtrlTva;

    /**
     * Editer en cfa.
     *
     * @var bool|null
     */
    private $editerEnCfa;

    /**
     * Etat prov cp obs.
     *
     * @var string|null
     */
    private $etatProvCpObs;

    /**
     * Faire controle lettrage.
     *
     * @var string|null
     */
    private $faireControleLettrage;

    /**
     * Increment compte auto.
     *
     * @var int|null
     */
    private $incrementCompteAuto;

    /**
     * Libelle plus de30 carac.
     *
     * @var bool|null
     */
    private $libellePlusDe30Carac;

    /**
     * Lien sai immos.
     *
     * @var bool|null
     */
    private $lienSaiImmos;

    /**
     * Longueur piece lettrage.
     *
     * @var int|null
     */
    private $longueurPieceLettrage;

    /**
     * Nb comptes raz.
     *
     * @var int|null
     */
    private $nbComptesRaz;

    /**
     * Nb decimales mt.
     *
     * @var string|null
     */
    private $nbDecimalesMt;

    /**
     * Nb ecr a facturer cloture.
     *
     * @var int|null
     */
    private $nbEcrAFacturerCloture;

    /**
     * Nb ecritures raz.
     *
     * @var int|null
     */
    private $nbEcrituresRaz;

    /**
     * Nb jour base cp.
     *
     * @var float|null
     */
    private $nbJourBaseCp;

    /**
     * Niv rupt classe0.
     *
     * @var string|null
     */
    private $nivRuptClasse0;

    /**
     * Niv rupt classe1.
     *
     * @var string|null
     */
    private $nivRuptClasse1;

    /**
     * Niv rupt classe2.
     *
     * @var string|null
     */
    private $nivRuptClasse2;

    /**
     * Niv rupt classe3.
     *
     * @var string|null
     */
    private $nivRuptClasse3;

    /**
     * Niv rupt classe4.
     *
     * @var string|null
     */
    private $nivRuptClasse4;

    /**
     * Niv rupt classe5.
     *
     * @var string|null
     */
    private $nivRuptClasse5;

    /**
     * Niv rupt classe6.
     *
     * @var string|null
     */
    private $nivRuptClasse6;

    /**
     * Niv rupt classe7.
     *
     * @var string|null
     */
    private $nivRuptClasse7;

    /**
     * Niv rupt classe8.
     *
     * @var string|null
     */
    private $nivRuptClasse8;

    /**
     * Niv rupt classe9.
     *
     * @var string|null
     */
    private $nivRuptClasse9;

    /**
     * Position piece lettrage.
     *
     * @var int|null
     */
    private $positionPieceLettrage;

    /**
     * Prochain lot ecrit.
     *
     * @var int|null
     */
    private $prochainLotEcrit;

    /**
     * Prochain lot factor.
     *
     * @var int|null
     */
    private $prochainLotFactor;

    /**
     * Prochain num ecr eco.
     *
     * @var int|null
     */
    private $prochainNumEcrEco;

    /**
     * Prochain num lot vmp.
     *
     * @var int|null
     */
    private $prochainNumLotVmp;

    /**
     * Prov cp cpt brut.
     *
     * @var string|null
     */
    private $provCpCptBrut;

    /**
     * Prov cp cpt cap ch.
     *
     * @var string|null
     */
    private $provCpCptCapCh;

    /**
     * Prov cp cpt capcp.
     *
     * @var string|null
     */
    private $provCpCptCapcp;

    /**
     * Prov cp cpt charges.
     *
     * @var string|null
     */
    private $provCpCptCharges;

    /**
     * Prov mini.
     *
     * @var float|null
     */
    private $provMini;

    /**
     * Publication.
     *
     * @var bool|null
     */
    private $publication;

    /**
     * Qimg2 cpt encours.
     *
     * @var int|null
     */
    private $qimg2CptEncours;

    /**
     * Qimg2 cpt envoi.
     *
     * @var int|null
     */
    private $qimg2CptEnvoi;

    /**
     * Rapp dads1 obs.
     *
     * @var string|null
     */
    private $rappDads1Obs;

    /**
     * Relance adresse cpt.
     *
     * @var bool|null
     */
    private $relanceAdresseCpt;

    /**
     * Rff cpt exploitant.
     *
     * @var string|null
     */
    private $rffCptExploitant;

    /**
     * Rff cpt interets.
     *
     * @var string|null
     */
    private $rffCptInterets;

    /**
     * Rff cpt regul.
     *
     * @var string|null
     */
    private $rffCptRegul;

    /**
     * Rff date lot ecr.
     *
     * @var DateTime|null
     */
    private $rffDateLotEcr;

    /**
     * Rff decouverts avances.
     *
     * @var float|null
     */
    private $rffDecouvertsAvances;

    /**
     * Rff interets emprunts.
     *
     * @var float|null
     */
    private $rffInteretsEmprunts;

    /**
     * Rff limite.
     *
     * @var float|null
     */
    private $rffLimite;

    /**
     * Rff mtt regul.
     *
     * @var float|null
     */
    private $rffMttRegul;

    /**
     * Rff mtt rff.
     *
     * @var float|null
     */
    private $rffMttRff;

    /**
     * Rff num lot ecr.
     *
     * @var int|null
     */
    private $rffNumLotEcr;

    /**
     * Rff type.
     *
     * @var int|null
     */
    private $rffType;

    /**
     * Texte relance0.
     *
     * @var string|null
     */
    private $texteRelance0;

    /**
     * Texte relance1.
     *
     * @var string|null
     */
    private $texteRelance1;

    /**
     * Texte relance2.
     *
     * @var string|null
     */
    private $texteRelance2;

    /**
     * Texte relance3.
     *
     * @var string|null
     */
    private $texteRelance3;

    /**
     * Texte relance4.
     *
     * @var string|null
     */
    private $texteRelance4;

    /**
     * Treso comptes a exclure.
     *
     * @var string|null
     */
    private $tresoComptesAExclure;

    /**
     * Utilise quantite2.
     *
     * @var bool|null
     */
    private $utiliseQuantite2;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the annee recolte.
     *
     * @return string|null Returns the annee recolte.
     */
    public function getAnneeRecolte(): ?string {
        return $this->anneeRecolte;
    }

    /**
     * Get the appliquer regroupement.
     *
     * @return bool|null Returns the appliquer regroupement.
     */
    public function getAppliquerRegroupement(): ?bool {
        return $this->appliquerRegroupement;
    }

    /**
     * Get the cca memo.
     *
     * @return string|null Returns the cca memo.
     */
    public function getCcaMemo(): ?string {
        return $this->ccaMemo;
    }

    /**
     * Get the classe4 client debut.
     *
     * @return string|null Returns the classe4 client debut.
     */
    public function getClasse4ClientDebut(): ?string {
        return $this->classe4ClientDebut;
    }

    /**
     * Get the classe4 client fin.
     *
     * @return string|null Returns the classe4 client fin.
     */
    public function getClasse4ClientFin(): ?string {
        return $this->classe4ClientFin;
    }

    /**
     * Get the classe4 frn debut.
     *
     * @return string|null Returns the classe4 frn debut.
     */
    public function getClasse4FrnDebut(): ?string {
        return $this->classe4FrnDebut;
    }

    /**
     * Get the classe4 frn fin.
     *
     * @return string|null Returns the classe4 frn fin.
     */
    public function getClasse4FrnFin(): ?string {
        return $this->classe4FrnFin;
    }

    /**
     * Get the codif classe0.
     *
     * @return string|null Returns the codif classe0.
     */
    public function getCodifClasse0(): ?string {
        return $this->codifClasse0;
    }

    /**
     * Get the codif classe0 seule.
     *
     * @return string|null Returns the codif classe0 seule.
     */
    public function getCodifClasse0Seule(): ?string {
        return $this->codifClasse0Seule;
    }

    /**
     * Get the codif classe9.
     *
     * @return string|null Returns the codif classe9.
     */
    public function getCodifClasse9(): ?string {
        return $this->codifClasse9;
    }

    /**
     * Get the codif classe9 seule.
     *
     * @return string|null Returns the codif classe9 seule.
     */
    public function getCodifClasse9Seule(): ?string {
        return $this->codifClasse9Seule;
    }

    /**
     * Get the collectif client debut.
     *
     * @return string|null Returns the collectif client debut.
     */
    public function getCollectifClientDebut(): ?string {
        return $this->collectifClientDebut;
    }

    /**
     * Get the collectif client defaut.
     *
     * @return string|null Returns the collectif client defaut.
     */
    public function getCollectifClientDefaut(): ?string {
        return $this->collectifClientDefaut;
    }

    /**
     * Get the collectif client fin.
     *
     * @return string|null Returns the collectif client fin.
     */
    public function getCollectifClientFin(): ?string {
        return $this->collectifClientFin;
    }

    /**
     * Get the collectif frn debut.
     *
     * @return string|null Returns the collectif frn debut.
     */
    public function getCollectifFrnDebut(): ?string {
        return $this->collectifFrnDebut;
    }

    /**
     * Get the collectif frn defaut.
     *
     * @return string|null Returns the collectif frn defaut.
     */
    public function getCollectifFrnDefaut(): ?string {
        return $this->collectifFrnDefaut;
    }

    /**
     * Get the collectif frn fin.
     *
     * @return string|null Returns the collectif frn fin.
     */
    public function getCollectifFrnFin(): ?string {
        return $this->collectifFrnFin;
    }

    /**
     * Get the collectif soc debut.
     *
     * @return string|null Returns the collectif soc debut.
     */
    public function getCollectifSocDebut(): ?string {
        return $this->collectifSocDebut;
    }

    /**
     * Get the collectif soc fin.
     *
     * @return string|null Returns the collectif soc fin.
     */
    public function getCollectifSocFin(): ?string {
        return $this->collectifSocFin;
    }

    /**
     * Get the combi lettrage auto.
     *
     * @return int|null Returns the combi lettrage auto.
     */
    public function getCombiLettrageAuto(): ?int {
        return $this->combiLettrageAuto;
    }

    /**
     * Get the commentaire dossier.
     *
     * @return string|null Returns the commentaire dossier.
     */
    public function getCommentaireDossier(): ?string {
        return $this->commentaireDossier;
    }

    /**
     * Get the control salaire cpt ex.
     *
     * @return string|null Returns the control salaire cpt ex.
     */
    public function getControlSalaireCptEx(): ?string {
        return $this->controlSalaireCptEx;
    }

    /**
     * Get the control salaire obs.
     *
     * @return string|null Returns the control salaire obs.
     */
    public function getControlSalaireObs(): ?string {
        return $this->controlSalaireObs;
    }

    /**
     * Get the dads1 livre paie.
     *
     * @return float|null Returns the dads1 livre paie.
     */
    public function getDads1LivrePaie(): ?float {
        return $this->dads1LivrePaie;
    }

    /**
     * Get the dads1 paie.
     *
     * @return float|null Returns the dads1 paie.
     */
    public function getDads1Paie(): ?float {
        return $this->dads1Paie;
    }

    /**
     * Get the dads1 remu moins.
     *
     * @return float|null Returns the dads1 remu moins.
     */
    public function getDads1RemuMoins(): ?float {
        return $this->dads1RemuMoins;
    }

    /**
     * Get the dads1 remu plus.
     *
     * @return float|null Returns the dads1 remu plus.
     */
    public function getDads1RemuPlus(): ?float {
        return $this->dads1RemuPlus;
    }

    /**
     * Get the date calcul prov cp.
     *
     * @return DateTime|null Returns the date calcul prov cp.
     */
    public function getDateCalculProvCp(): ?DateTime {
        return $this->dateCalculProvCp;
    }

    /**
     * Get the date publication.
     *
     * @return DateTime|null Returns the date publication.
     */
    public function getDatePublication(): ?DateTime {
        return $this->datePublication;
    }

    /**
     * Get the date raz ecritures.
     *
     * @return DateTime|null Returns the date raz ecritures.
     */
    public function getDateRazEcritures(): ?DateTime {
        return $this->dateRazEcritures;
    }

    /**
     * Get the dernier compte client.
     *
     * @return string|null Returns the dernier compte client.
     */
    public function getDernierCompteClient(): ?string {
        return $this->dernierCompteClient;
    }

    /**
     * Get the dernier compte frn.
     *
     * @return string|null Returns the dernier compte frn.
     */
    public function getDernierCompteFrn(): ?string {
        return $this->dernierCompteFrn;
    }

    /**
     * Get the diff lettrage code journal.
     *
     * @return string|null Returns the diff lettrage code journal.
     */
    public function getDiffLettrageCodeJournal(): ?string {
        return $this->diffLettrageCodeJournal;
    }

    /**
     * Get the diff lettrage code libelle.
     *
     * @return string|null Returns the diff lettrage code libelle.
     */
    public function getDiffLettrageCodeLibelle(): ?string {
        return $this->diffLettrageCodeLibelle;
    }

    /**
     * Get the diff lettrage folio.
     *
     * @return int|null Returns the diff lettrage folio.
     */
    public function getDiffLettrageFolio(): ?int {
        return $this->diffLettrageFolio;
    }

    /**
     * Get the diff lettrage gains.
     *
     * @return string|null Returns the diff lettrage gains.
     */
    public function getDiffLettrageGains(): ?string {
        return $this->diffLettrageGains;
    }

    /**
     * Get the diff lettrage libelle.
     *
     * @return string|null Returns the diff lettrage libelle.
     */
    public function getDiffLettrageLibelle(): ?string {
        return $this->diffLettrageLibelle;
    }

    /**
     * Get the diff lettrage pertes.
     *
     * @return string|null Returns the diff lettrage pertes.
     */
    public function getDiffLettragePertes(): ?string {
        return $this->diffLettragePertes;
    }

    /**
     * Get the ds code collab.
     *
     * @return string|null Returns the ds code collab.
     */
    public function getDsCodeCollab(): ?string {
        return $this->dsCodeCollab;
    }

    /**
     * Get the ds date retour.
     *
     * @return DateTime|null Returns the ds date retour.
     */
    public function getDsDateRetour(): ?DateTime {
        return $this->dsDateRetour;
    }

    /**
     * Get the ds date sortie.
     *
     * @return DateTime|null Returns the ds date sortie.
     */
    public function getDsDateSortie(): ?DateTime {
        return $this->dsDateSortie;
    }

    /**
     * Get the ecart maxi lettrage auto.
     *
     * @return float|null Returns the ecart maxi lettrage auto.
     */
    public function getEcartMaxiLettrageAuto(): ?float {
        return $this->ecartMaxiLettrageAuto;
    }

    /**
     * Get the ecart mini ctrl tva.
     *
     * @return float|null Returns the ecart mini ctrl tva.
     */
    public function getEcartMiniCtrlTva(): ?float {
        return $this->ecartMiniCtrlTva;
    }

    /**
     * Get the editer en cfa.
     *
     * @return bool|null Returns the editer en cfa.
     */
    public function getEditerEnCfa(): ?bool {
        return $this->editerEnCfa;
    }

    /**
     * Get the etat prov cp obs.
     *
     * @return string|null Returns the etat prov cp obs.
     */
    public function getEtatProvCpObs(): ?string {
        return $this->etatProvCpObs;
    }

    /**
     * Get the faire controle lettrage.
     *
     * @return string|null Returns the faire controle lettrage.
     */
    public function getFaireControleLettrage(): ?string {
        return $this->faireControleLettrage;
    }

    /**
     * Get the increment compte auto.
     *
     * @return int|null Returns the increment compte auto.
     */
    public function getIncrementCompteAuto(): ?int {
        return $this->incrementCompteAuto;
    }

    /**
     * Get the libelle plus de30 carac.
     *
     * @return bool|null Returns the libelle plus de30 carac.
     */
    public function getLibellePlusDe30Carac(): ?bool {
        return $this->libellePlusDe30Carac;
    }

    /**
     * Get the lien sai immos.
     *
     * @return bool|null Returns the lien sai immos.
     */
    public function getLienSaiImmos(): ?bool {
        return $this->lienSaiImmos;
    }

    /**
     * Get the longueur piece lettrage.
     *
     * @return int|null Returns the longueur piece lettrage.
     */
    public function getLongueurPieceLettrage(): ?int {
        return $this->longueurPieceLettrage;
    }

    /**
     * Get the nb comptes raz.
     *
     * @return int|null Returns the nb comptes raz.
     */
    public function getNbComptesRaz(): ?int {
        return $this->nbComptesRaz;
    }

    /**
     * Get the nb decimales mt.
     *
     * @return string|null Returns the nb decimales mt.
     */
    public function getNbDecimalesMt(): ?string {
        return $this->nbDecimalesMt;
    }

    /**
     * Get the nb ecr a facturer cloture.
     *
     * @return int|null Returns the nb ecr a facturer cloture.
     */
    public function getNbEcrAFacturerCloture(): ?int {
        return $this->nbEcrAFacturerCloture;
    }

    /**
     * Get the nb ecritures raz.
     *
     * @return int|null Returns the nb ecritures raz.
     */
    public function getNbEcrituresRaz(): ?int {
        return $this->nbEcrituresRaz;
    }

    /**
     * Get the nb jour base cp.
     *
     * @return float|null Returns the nb jour base cp.
     */
    public function getNbJourBaseCp(): ?float {
        return $this->nbJourBaseCp;
    }

    /**
     * Get the niv rupt classe0.
     *
     * @return string|null Returns the niv rupt classe0.
     */
    public function getNivRuptClasse0(): ?string {
        return $this->nivRuptClasse0;
    }

    /**
     * Get the niv rupt classe1.
     *
     * @return string|null Returns the niv rupt classe1.
     */
    public function getNivRuptClasse1(): ?string {
        return $this->nivRuptClasse1;
    }

    /**
     * Get the niv rupt classe2.
     *
     * @return string|null Returns the niv rupt classe2.
     */
    public function getNivRuptClasse2(): ?string {
        return $this->nivRuptClasse2;
    }

    /**
     * Get the niv rupt classe3.
     *
     * @return string|null Returns the niv rupt classe3.
     */
    public function getNivRuptClasse3(): ?string {
        return $this->nivRuptClasse3;
    }

    /**
     * Get the niv rupt classe4.
     *
     * @return string|null Returns the niv rupt classe4.
     */
    public function getNivRuptClasse4(): ?string {
        return $this->nivRuptClasse4;
    }

    /**
     * Get the niv rupt classe5.
     *
     * @return string|null Returns the niv rupt classe5.
     */
    public function getNivRuptClasse5(): ?string {
        return $this->nivRuptClasse5;
    }

    /**
     * Get the niv rupt classe6.
     *
     * @return string|null Returns the niv rupt classe6.
     */
    public function getNivRuptClasse6(): ?string {
        return $this->nivRuptClasse6;
    }

    /**
     * Get the niv rupt classe7.
     *
     * @return string|null Returns the niv rupt classe7.
     */
    public function getNivRuptClasse7(): ?string {
        return $this->nivRuptClasse7;
    }

    /**
     * Get the niv rupt classe8.
     *
     * @return string|null Returns the niv rupt classe8.
     */
    public function getNivRuptClasse8(): ?string {
        return $this->nivRuptClasse8;
    }

    /**
     * Get the niv rupt classe9.
     *
     * @return string|null Returns the niv rupt classe9.
     */
    public function getNivRuptClasse9(): ?string {
        return $this->nivRuptClasse9;
    }

    /**
     * Get the position piece lettrage.
     *
     * @return int|null Returns the position piece lettrage.
     */
    public function getPositionPieceLettrage(): ?int {
        return $this->positionPieceLettrage;
    }

    /**
     * Get the prochain lot ecrit.
     *
     * @return int|null Returns the prochain lot ecrit.
     */
    public function getProchainLotEcrit(): ?int {
        return $this->prochainLotEcrit;
    }

    /**
     * Get the prochain lot factor.
     *
     * @return int|null Returns the prochain lot factor.
     */
    public function getProchainLotFactor(): ?int {
        return $this->prochainLotFactor;
    }

    /**
     * Get the prochain num ecr eco.
     *
     * @return int|null Returns the prochain num ecr eco.
     */
    public function getProchainNumEcrEco(): ?int {
        return $this->prochainNumEcrEco;
    }

    /**
     * Get the prochain num lot vmp.
     *
     * @return int|null Returns the prochain num lot vmp.
     */
    public function getProchainNumLotVmp(): ?int {
        return $this->prochainNumLotVmp;
    }

    /**
     * Get the prov cp cpt brut.
     *
     * @return string|null Returns the prov cp cpt brut.
     */
    public function getProvCpCptBrut(): ?string {
        return $this->provCpCptBrut;
    }

    /**
     * Get the prov cp cpt cap ch.
     *
     * @return string|null Returns the prov cp cpt cap ch.
     */
    public function getProvCpCptCapCh(): ?string {
        return $this->provCpCptCapCh;
    }

    /**
     * Get the prov cp cpt capcp.
     *
     * @return string|null Returns the prov cp cpt capcp.
     */
    public function getProvCpCptCapcp(): ?string {
        return $this->provCpCptCapcp;
    }

    /**
     * Get the prov cp cpt charges.
     *
     * @return string|null Returns the prov cp cpt charges.
     */
    public function getProvCpCptCharges(): ?string {
        return $this->provCpCptCharges;
    }

    /**
     * Get the prov mini.
     *
     * @return float|null Returns the prov mini.
     */
    public function getProvMini(): ?float {
        return $this->provMini;
    }

    /**
     * Get the publication.
     *
     * @return bool|null Returns the publication.
     */
    public function getPublication(): ?bool {
        return $this->publication;
    }

    /**
     * Get the qimg2 cpt encours.
     *
     * @return int|null Returns the qimg2 cpt encours.
     */
    public function getQimg2CptEncours(): ?int {
        return $this->qimg2CptEncours;
    }

    /**
     * Get the qimg2 cpt envoi.
     *
     * @return int|null Returns the qimg2 cpt envoi.
     */
    public function getQimg2CptEnvoi(): ?int {
        return $this->qimg2CptEnvoi;
    }

    /**
     * Get the rapp dads1 obs.
     *
     * @return string|null Returns the rapp dads1 obs.
     */
    public function getRappDads1Obs(): ?string {
        return $this->rappDads1Obs;
    }

    /**
     * Get the relance adresse cpt.
     *
     * @return bool|null Returns the relance adresse cpt.
     */
    public function getRelanceAdresseCpt(): ?bool {
        return $this->relanceAdresseCpt;
    }

    /**
     * Get the rff cpt exploitant.
     *
     * @return string|null Returns the rff cpt exploitant.
     */
    public function getRffCptExploitant(): ?string {
        return $this->rffCptExploitant;
    }

    /**
     * Get the rff cpt interets.
     *
     * @return string|null Returns the rff cpt interets.
     */
    public function getRffCptInterets(): ?string {
        return $this->rffCptInterets;
    }

    /**
     * Get the rff cpt regul.
     *
     * @return string|null Returns the rff cpt regul.
     */
    public function getRffCptRegul(): ?string {
        return $this->rffCptRegul;
    }

    /**
     * Get the rff date lot ecr.
     *
     * @return DateTime|null Returns the rff date lot ecr.
     */
    public function getRffDateLotEcr(): ?DateTime {
        return $this->rffDateLotEcr;
    }

    /**
     * Get the rff decouverts avances.
     *
     * @return float|null Returns the rff decouverts avances.
     */
    public function getRffDecouvertsAvances(): ?float {
        return $this->rffDecouvertsAvances;
    }

    /**
     * Get the rff interets emprunts.
     *
     * @return float|null Returns the rff interets emprunts.
     */
    public function getRffInteretsEmprunts(): ?float {
        return $this->rffInteretsEmprunts;
    }

    /**
     * Get the rff limite.
     *
     * @return float|null Returns the rff limite.
     */
    public function getRffLimite(): ?float {
        return $this->rffLimite;
    }

    /**
     * Get the rff mtt regul.
     *
     * @return float|null Returns the rff mtt regul.
     */
    public function getRffMttRegul(): ?float {
        return $this->rffMttRegul;
    }

    /**
     * Get the rff mtt rff.
     *
     * @return float|null Returns the rff mtt rff.
     */
    public function getRffMttRff(): ?float {
        return $this->rffMttRff;
    }

    /**
     * Get the rff num lot ecr.
     *
     * @return int|null Returns the rff num lot ecr.
     */
    public function getRffNumLotEcr(): ?int {
        return $this->rffNumLotEcr;
    }

    /**
     * Get the rff type.
     *
     * @return int|null Returns the rff type.
     */
    public function getRffType(): ?int {
        return $this->rffType;
    }

    /**
     * Get the texte relance0.
     *
     * @return string|null Returns the texte relance0.
     */
    public function getTexteRelance0(): ?string {
        return $this->texteRelance0;
    }

    /**
     * Get the texte relance1.
     *
     * @return string|null Returns the texte relance1.
     */
    public function getTexteRelance1(): ?string {
        return $this->texteRelance1;
    }

    /**
     * Get the texte relance2.
     *
     * @return string|null Returns the texte relance2.
     */
    public function getTexteRelance2(): ?string {
        return $this->texteRelance2;
    }

    /**
     * Get the texte relance3.
     *
     * @return string|null Returns the texte relance3.
     */
    public function getTexteRelance3(): ?string {
        return $this->texteRelance3;
    }

    /**
     * Get the texte relance4.
     *
     * @return string|null Returns the texte relance4.
     */
    public function getTexteRelance4(): ?string {
        return $this->texteRelance4;
    }

    /**
     * Get the treso comptes a exclure.
     *
     * @return string|null Returns the treso comptes a exclure.
     */
    public function getTresoComptesAExclure(): ?string {
        return $this->tresoComptesAExclure;
    }

    /**
     * Get the utilise quantite2.
     *
     * @return bool|null Returns the utilise quantite2.
     */
    public function getUtiliseQuantite2(): ?bool {
        return $this->utiliseQuantite2;
    }

    /**
     * Set the annee recolte.
     *
     * @param string|null $anneeRecolte The annee recolte.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setAnneeRecolte(?string $anneeRecolte): Dossier2 {
        $this->anneeRecolte = $anneeRecolte;
        return $this;
    }

    /**
     * Set the appliquer regroupement.
     *
     * @param bool|null $appliquerRegroupement The appliquer regroupement.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setAppliquerRegroupement(?bool $appliquerRegroupement): Dossier2 {
        $this->appliquerRegroupement = $appliquerRegroupement;
        return $this;
    }

    /**
     * Set the cca memo.
     *
     * @param string|null $ccaMemo The cca memo.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCcaMemo(?string $ccaMemo): Dossier2 {
        $this->ccaMemo = $ccaMemo;
        return $this;
    }

    /**
     * Set the classe4 client debut.
     *
     * @param string|null $classe4ClientDebut The classe4 client debut.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setClasse4ClientDebut(?string $classe4ClientDebut): Dossier2 {
        $this->classe4ClientDebut = $classe4ClientDebut;
        return $this;
    }

    /**
     * Set the classe4 client fin.
     *
     * @param string|null $classe4ClientFin The classe4 client fin.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setClasse4ClientFin(?string $classe4ClientFin): Dossier2 {
        $this->classe4ClientFin = $classe4ClientFin;
        return $this;
    }

    /**
     * Set the classe4 frn debut.
     *
     * @param string|null $classe4FrnDebut The classe4 frn debut.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setClasse4FrnDebut(?string $classe4FrnDebut): Dossier2 {
        $this->classe4FrnDebut = $classe4FrnDebut;
        return $this;
    }

    /**
     * Set the classe4 frn fin.
     *
     * @param string|null $classe4FrnFin The classe4 frn fin.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setClasse4FrnFin(?string $classe4FrnFin): Dossier2 {
        $this->classe4FrnFin = $classe4FrnFin;
        return $this;
    }

    /**
     * Set the codif classe0.
     *
     * @param string|null $codifClasse0 The codif classe0.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCodifClasse0(?string $codifClasse0): Dossier2 {
        $this->codifClasse0 = $codifClasse0;
        return $this;
    }

    /**
     * Set the codif classe0 seule.
     *
     * @param string|null $codifClasse0Seule The codif classe0 seule.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCodifClasse0Seule(?string $codifClasse0Seule): Dossier2 {
        $this->codifClasse0Seule = $codifClasse0Seule;
        return $this;
    }

    /**
     * Set the codif classe9.
     *
     * @param string|null $codifClasse9 The codif classe9.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCodifClasse9(?string $codifClasse9): Dossier2 {
        $this->codifClasse9 = $codifClasse9;
        return $this;
    }

    /**
     * Set the codif classe9 seule.
     *
     * @param string|null $codifClasse9Seule The codif classe9 seule.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCodifClasse9Seule(?string $codifClasse9Seule): Dossier2 {
        $this->codifClasse9Seule = $codifClasse9Seule;
        return $this;
    }

    /**
     * Set the collectif client debut.
     *
     * @param string|null $collectifClientDebut The collectif client debut.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCollectifClientDebut(?string $collectifClientDebut): Dossier2 {
        $this->collectifClientDebut = $collectifClientDebut;
        return $this;
    }

    /**
     * Set the collectif client defaut.
     *
     * @param string|null $collectifClientDefaut The collectif client defaut.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCollectifClientDefaut(?string $collectifClientDefaut): Dossier2 {
        $this->collectifClientDefaut = $collectifClientDefaut;
        return $this;
    }

    /**
     * Set the collectif client fin.
     *
     * @param string|null $collectifClientFin The collectif client fin.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCollectifClientFin(?string $collectifClientFin): Dossier2 {
        $this->collectifClientFin = $collectifClientFin;
        return $this;
    }

    /**
     * Set the collectif frn debut.
     *
     * @param string|null $collectifFrnDebut The collectif frn debut.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCollectifFrnDebut(?string $collectifFrnDebut): Dossier2 {
        $this->collectifFrnDebut = $collectifFrnDebut;
        return $this;
    }

    /**
     * Set the collectif frn defaut.
     *
     * @param string|null $collectifFrnDefaut The collectif frn defaut.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCollectifFrnDefaut(?string $collectifFrnDefaut): Dossier2 {
        $this->collectifFrnDefaut = $collectifFrnDefaut;
        return $this;
    }

    /**
     * Set the collectif frn fin.
     *
     * @param string|null $collectifFrnFin The collectif frn fin.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCollectifFrnFin(?string $collectifFrnFin): Dossier2 {
        $this->collectifFrnFin = $collectifFrnFin;
        return $this;
    }

    /**
     * Set the collectif soc debut.
     *
     * @param string|null $collectifSocDebut The collectif soc debut.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCollectifSocDebut(?string $collectifSocDebut): Dossier2 {
        $this->collectifSocDebut = $collectifSocDebut;
        return $this;
    }

    /**
     * Set the collectif soc fin.
     *
     * @param string|null $collectifSocFin The collectif soc fin.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCollectifSocFin(?string $collectifSocFin): Dossier2 {
        $this->collectifSocFin = $collectifSocFin;
        return $this;
    }

    /**
     * Set the combi lettrage auto.
     *
     * @param int|null $combiLettrageAuto The combi lettrage auto.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCombiLettrageAuto(?int $combiLettrageAuto): Dossier2 {
        $this->combiLettrageAuto = $combiLettrageAuto;
        return $this;
    }

    /**
     * Set the commentaire dossier.
     *
     * @param string|null $commentaireDossier The commentaire dossier.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setCommentaireDossier(?string $commentaireDossier): Dossier2 {
        $this->commentaireDossier = $commentaireDossier;
        return $this;
    }

    /**
     * Set the control salaire cpt ex.
     *
     * @param string|null $controlSalaireCptEx The control salaire cpt ex.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setControlSalaireCptEx(?string $controlSalaireCptEx): Dossier2 {
        $this->controlSalaireCptEx = $controlSalaireCptEx;
        return $this;
    }

    /**
     * Set the control salaire obs.
     *
     * @param string|null $controlSalaireObs The control salaire obs.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setControlSalaireObs(?string $controlSalaireObs): Dossier2 {
        $this->controlSalaireObs = $controlSalaireObs;
        return $this;
    }

    /**
     * Set the dads1 livre paie.
     *
     * @param float|null $dads1LivrePaie The dads1 livre paie.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDads1LivrePaie(?float $dads1LivrePaie): Dossier2 {
        $this->dads1LivrePaie = $dads1LivrePaie;
        return $this;
    }

    /**
     * Set the dads1 paie.
     *
     * @param float|null $dads1Paie The dads1 paie.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDads1Paie(?float $dads1Paie): Dossier2 {
        $this->dads1Paie = $dads1Paie;
        return $this;
    }

    /**
     * Set the dads1 remu moins.
     *
     * @param float|null $dads1RemuMoins The dads1 remu moins.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDads1RemuMoins(?float $dads1RemuMoins): Dossier2 {
        $this->dads1RemuMoins = $dads1RemuMoins;
        return $this;
    }

    /**
     * Set the dads1 remu plus.
     *
     * @param float|null $dads1RemuPlus The dads1 remu plus.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDads1RemuPlus(?float $dads1RemuPlus): Dossier2 {
        $this->dads1RemuPlus = $dads1RemuPlus;
        return $this;
    }

    /**
     * Set the date calcul prov cp.
     *
     * @param DateTime|null $dateCalculProvCp The date calcul prov cp.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDateCalculProvCp(?DateTime $dateCalculProvCp): Dossier2 {
        $this->dateCalculProvCp = $dateCalculProvCp;
        return $this;
    }

    /**
     * Set the date publication.
     *
     * @param DateTime|null $datePublication The date publication.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDatePublication(?DateTime $datePublication): Dossier2 {
        $this->datePublication = $datePublication;
        return $this;
    }

    /**
     * Set the date raz ecritures.
     *
     * @param DateTime|null $dateRazEcritures The date raz ecritures.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDateRazEcritures(?DateTime $dateRazEcritures): Dossier2 {
        $this->dateRazEcritures = $dateRazEcritures;
        return $this;
    }

    /**
     * Set the dernier compte client.
     *
     * @param string|null $dernierCompteClient The dernier compte client.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDernierCompteClient(?string $dernierCompteClient): Dossier2 {
        $this->dernierCompteClient = $dernierCompteClient;
        return $this;
    }

    /**
     * Set the dernier compte frn.
     *
     * @param string|null $dernierCompteFrn The dernier compte frn.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDernierCompteFrn(?string $dernierCompteFrn): Dossier2 {
        $this->dernierCompteFrn = $dernierCompteFrn;
        return $this;
    }

    /**
     * Set the diff lettrage code journal.
     *
     * @param string|null $diffLettrageCodeJournal The diff lettrage code journal.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDiffLettrageCodeJournal(?string $diffLettrageCodeJournal): Dossier2 {
        $this->diffLettrageCodeJournal = $diffLettrageCodeJournal;
        return $this;
    }

    /**
     * Set the diff lettrage code libelle.
     *
     * @param string|null $diffLettrageCodeLibelle The diff lettrage code libelle.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDiffLettrageCodeLibelle(?string $diffLettrageCodeLibelle): Dossier2 {
        $this->diffLettrageCodeLibelle = $diffLettrageCodeLibelle;
        return $this;
    }

    /**
     * Set the diff lettrage folio.
     *
     * @param int|null $diffLettrageFolio The diff lettrage folio.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDiffLettrageFolio(?int $diffLettrageFolio): Dossier2 {
        $this->diffLettrageFolio = $diffLettrageFolio;
        return $this;
    }

    /**
     * Set the diff lettrage gains.
     *
     * @param string|null $diffLettrageGains The diff lettrage gains.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDiffLettrageGains(?string $diffLettrageGains): Dossier2 {
        $this->diffLettrageGains = $diffLettrageGains;
        return $this;
    }

    /**
     * Set the diff lettrage libelle.
     *
     * @param string|null $diffLettrageLibelle The diff lettrage libelle.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDiffLettrageLibelle(?string $diffLettrageLibelle): Dossier2 {
        $this->diffLettrageLibelle = $diffLettrageLibelle;
        return $this;
    }

    /**
     * Set the diff lettrage pertes.
     *
     * @param string|null $diffLettragePertes The diff lettrage pertes.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDiffLettragePertes(?string $diffLettragePertes): Dossier2 {
        $this->diffLettragePertes = $diffLettragePertes;
        return $this;
    }

    /**
     * Set the ds code collab.
     *
     * @param string|null $dsCodeCollab The ds code collab.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDsCodeCollab(?string $dsCodeCollab): Dossier2 {
        $this->dsCodeCollab = $dsCodeCollab;
        return $this;
    }

    /**
     * Set the ds date retour.
     *
     * @param DateTime|null $dsDateRetour The ds date retour.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDsDateRetour(?DateTime $dsDateRetour): Dossier2 {
        $this->dsDateRetour = $dsDateRetour;
        return $this;
    }

    /**
     * Set the ds date sortie.
     *
     * @param DateTime|null $dsDateSortie The ds date sortie.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setDsDateSortie(?DateTime $dsDateSortie): Dossier2 {
        $this->dsDateSortie = $dsDateSortie;
        return $this;
    }

    /**
     * Set the ecart maxi lettrage auto.
     *
     * @param float|null $ecartMaxiLettrageAuto The ecart maxi lettrage auto.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setEcartMaxiLettrageAuto(?float $ecartMaxiLettrageAuto): Dossier2 {
        $this->ecartMaxiLettrageAuto = $ecartMaxiLettrageAuto;
        return $this;
    }

    /**
     * Set the ecart mini ctrl tva.
     *
     * @param float|null $ecartMiniCtrlTva The ecart mini ctrl tva.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setEcartMiniCtrlTva(?float $ecartMiniCtrlTva): Dossier2 {
        $this->ecartMiniCtrlTva = $ecartMiniCtrlTva;
        return $this;
    }

    /**
     * Set the editer en cfa.
     *
     * @param bool|null $editerEnCfa The editer en cfa.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setEditerEnCfa(?bool $editerEnCfa): Dossier2 {
        $this->editerEnCfa = $editerEnCfa;
        return $this;
    }

    /**
     * Set the etat prov cp obs.
     *
     * @param string|null $etatProvCpObs The etat prov cp obs.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setEtatProvCpObs(?string $etatProvCpObs): Dossier2 {
        $this->etatProvCpObs = $etatProvCpObs;
        return $this;
    }

    /**
     * Set the faire controle lettrage.
     *
     * @param string|null $faireControleLettrage The faire controle lettrage.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setFaireControleLettrage(?string $faireControleLettrage): Dossier2 {
        $this->faireControleLettrage = $faireControleLettrage;
        return $this;
    }

    /**
     * Set the increment compte auto.
     *
     * @param int|null $incrementCompteAuto The increment compte auto.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setIncrementCompteAuto(?int $incrementCompteAuto): Dossier2 {
        $this->incrementCompteAuto = $incrementCompteAuto;
        return $this;
    }

    /**
     * Set the libelle plus de30 carac.
     *
     * @param bool|null $libellePlusDe30Carac The libelle plus de30 carac.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setLibellePlusDe30Carac(?bool $libellePlusDe30Carac): Dossier2 {
        $this->libellePlusDe30Carac = $libellePlusDe30Carac;
        return $this;
    }

    /**
     * Set the lien sai immos.
     *
     * @param bool|null $lienSaiImmos The lien sai immos.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setLienSaiImmos(?bool $lienSaiImmos): Dossier2 {
        $this->lienSaiImmos = $lienSaiImmos;
        return $this;
    }

    /**
     * Set the longueur piece lettrage.
     *
     * @param int|null $longueurPieceLettrage The longueur piece lettrage.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setLongueurPieceLettrage(?int $longueurPieceLettrage): Dossier2 {
        $this->longueurPieceLettrage = $longueurPieceLettrage;
        return $this;
    }

    /**
     * Set the nb comptes raz.
     *
     * @param int|null $nbComptesRaz The nb comptes raz.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNbComptesRaz(?int $nbComptesRaz): Dossier2 {
        $this->nbComptesRaz = $nbComptesRaz;
        return $this;
    }

    /**
     * Set the nb decimales mt.
     *
     * @param string|null $nbDecimalesMt The nb decimales mt.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNbDecimalesMt(?string $nbDecimalesMt): Dossier2 {
        $this->nbDecimalesMt = $nbDecimalesMt;
        return $this;
    }

    /**
     * Set the nb ecr a facturer cloture.
     *
     * @param int|null $nbEcrAFacturerCloture The nb ecr a facturer cloture.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNbEcrAFacturerCloture(?int $nbEcrAFacturerCloture): Dossier2 {
        $this->nbEcrAFacturerCloture = $nbEcrAFacturerCloture;
        return $this;
    }

    /**
     * Set the nb ecritures raz.
     *
     * @param int|null $nbEcrituresRaz The nb ecritures raz.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNbEcrituresRaz(?int $nbEcrituresRaz): Dossier2 {
        $this->nbEcrituresRaz = $nbEcrituresRaz;
        return $this;
    }

    /**
     * Set the nb jour base cp.
     *
     * @param float|null $nbJourBaseCp The nb jour base cp.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNbJourBaseCp(?float $nbJourBaseCp): Dossier2 {
        $this->nbJourBaseCp = $nbJourBaseCp;
        return $this;
    }

    /**
     * Set the niv rupt classe0.
     *
     * @param string|null $nivRuptClasse0 The niv rupt classe0.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNivRuptClasse0(?string $nivRuptClasse0): Dossier2 {
        $this->nivRuptClasse0 = $nivRuptClasse0;
        return $this;
    }

    /**
     * Set the niv rupt classe1.
     *
     * @param string|null $nivRuptClasse1 The niv rupt classe1.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNivRuptClasse1(?string $nivRuptClasse1): Dossier2 {
        $this->nivRuptClasse1 = $nivRuptClasse1;
        return $this;
    }

    /**
     * Set the niv rupt classe2.
     *
     * @param string|null $nivRuptClasse2 The niv rupt classe2.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNivRuptClasse2(?string $nivRuptClasse2): Dossier2 {
        $this->nivRuptClasse2 = $nivRuptClasse2;
        return $this;
    }

    /**
     * Set the niv rupt classe3.
     *
     * @param string|null $nivRuptClasse3 The niv rupt classe3.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNivRuptClasse3(?string $nivRuptClasse3): Dossier2 {
        $this->nivRuptClasse3 = $nivRuptClasse3;
        return $this;
    }

    /**
     * Set the niv rupt classe4.
     *
     * @param string|null $nivRuptClasse4 The niv rupt classe4.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNivRuptClasse4(?string $nivRuptClasse4): Dossier2 {
        $this->nivRuptClasse4 = $nivRuptClasse4;
        return $this;
    }

    /**
     * Set the niv rupt classe5.
     *
     * @param string|null $nivRuptClasse5 The niv rupt classe5.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNivRuptClasse5(?string $nivRuptClasse5): Dossier2 {
        $this->nivRuptClasse5 = $nivRuptClasse5;
        return $this;
    }

    /**
     * Set the niv rupt classe6.
     *
     * @param string|null $nivRuptClasse6 The niv rupt classe6.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNivRuptClasse6(?string $nivRuptClasse6): Dossier2 {
        $this->nivRuptClasse6 = $nivRuptClasse6;
        return $this;
    }

    /**
     * Set the niv rupt classe7.
     *
     * @param string|null $nivRuptClasse7 The niv rupt classe7.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNivRuptClasse7(?string $nivRuptClasse7): Dossier2 {
        $this->nivRuptClasse7 = $nivRuptClasse7;
        return $this;
    }

    /**
     * Set the niv rupt classe8.
     *
     * @param string|null $nivRuptClasse8 The niv rupt classe8.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNivRuptClasse8(?string $nivRuptClasse8): Dossier2 {
        $this->nivRuptClasse8 = $nivRuptClasse8;
        return $this;
    }

    /**
     * Set the niv rupt classe9.
     *
     * @param string|null $nivRuptClasse9 The niv rupt classe9.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setNivRuptClasse9(?string $nivRuptClasse9): Dossier2 {
        $this->nivRuptClasse9 = $nivRuptClasse9;
        return $this;
    }

    /**
     * Set the position piece lettrage.
     *
     * @param int|null $positionPieceLettrage The position piece lettrage.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setPositionPieceLettrage(?int $positionPieceLettrage): Dossier2 {
        $this->positionPieceLettrage = $positionPieceLettrage;
        return $this;
    }

    /**
     * Set the prochain lot ecrit.
     *
     * @param int|null $prochainLotEcrit The prochain lot ecrit.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setProchainLotEcrit(?int $prochainLotEcrit): Dossier2 {
        $this->prochainLotEcrit = $prochainLotEcrit;
        return $this;
    }

    /**
     * Set the prochain lot factor.
     *
     * @param int|null $prochainLotFactor The prochain lot factor.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setProchainLotFactor(?int $prochainLotFactor): Dossier2 {
        $this->prochainLotFactor = $prochainLotFactor;
        return $this;
    }

    /**
     * Set the prochain num ecr eco.
     *
     * @param int|null $prochainNumEcrEco The prochain num ecr eco.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setProchainNumEcrEco(?int $prochainNumEcrEco): Dossier2 {
        $this->prochainNumEcrEco = $prochainNumEcrEco;
        return $this;
    }

    /**
     * Set the prochain num lot vmp.
     *
     * @param int|null $prochainNumLotVmp The prochain num lot vmp.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setProchainNumLotVmp(?int $prochainNumLotVmp): Dossier2 {
        $this->prochainNumLotVmp = $prochainNumLotVmp;
        return $this;
    }

    /**
     * Set the prov cp cpt brut.
     *
     * @param string|null $provCpCptBrut The prov cp cpt brut.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setProvCpCptBrut(?string $provCpCptBrut): Dossier2 {
        $this->provCpCptBrut = $provCpCptBrut;
        return $this;
    }

    /**
     * Set the prov cp cpt cap ch.
     *
     * @param string|null $provCpCptCapCh The prov cp cpt cap ch.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setProvCpCptCapCh(?string $provCpCptCapCh): Dossier2 {
        $this->provCpCptCapCh = $provCpCptCapCh;
        return $this;
    }

    /**
     * Set the prov cp cpt capcp.
     *
     * @param string|null $provCpCptCapcp The prov cp cpt capcp.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setProvCpCptCapcp(?string $provCpCptCapcp): Dossier2 {
        $this->provCpCptCapcp = $provCpCptCapcp;
        return $this;
    }

    /**
     * Set the prov cp cpt charges.
     *
     * @param string|null $provCpCptCharges The prov cp cpt charges.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setProvCpCptCharges(?string $provCpCptCharges): Dossier2 {
        $this->provCpCptCharges = $provCpCptCharges;
        return $this;
    }

    /**
     * Set the prov mini.
     *
     * @param float|null $provMini The prov mini.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setProvMini(?float $provMini): Dossier2 {
        $this->provMini = $provMini;
        return $this;
    }

    /**
     * Set the publication.
     *
     * @param bool|null $publication The publication.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setPublication(?bool $publication): Dossier2 {
        $this->publication = $publication;
        return $this;
    }

    /**
     * Set the qimg2 cpt encours.
     *
     * @param int|null $qimg2CptEncours The qimg2 cpt encours.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setQimg2CptEncours(?int $qimg2CptEncours): Dossier2 {
        $this->qimg2CptEncours = $qimg2CptEncours;
        return $this;
    }

    /**
     * Set the qimg2 cpt envoi.
     *
     * @param int|null $qimg2CptEnvoi The qimg2 cpt envoi.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setQimg2CptEnvoi(?int $qimg2CptEnvoi): Dossier2 {
        $this->qimg2CptEnvoi = $qimg2CptEnvoi;
        return $this;
    }

    /**
     * Set the rapp dads1 obs.
     *
     * @param string|null $rappDads1Obs The rapp dads1 obs.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRappDads1Obs(?string $rappDads1Obs): Dossier2 {
        $this->rappDads1Obs = $rappDads1Obs;
        return $this;
    }

    /**
     * Set the relance adresse cpt.
     *
     * @param bool|null $relanceAdresseCpt The relance adresse cpt.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRelanceAdresseCpt(?bool $relanceAdresseCpt): Dossier2 {
        $this->relanceAdresseCpt = $relanceAdresseCpt;
        return $this;
    }

    /**
     * Set the rff cpt exploitant.
     *
     * @param string|null $rffCptExploitant The rff cpt exploitant.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRffCptExploitant(?string $rffCptExploitant): Dossier2 {
        $this->rffCptExploitant = $rffCptExploitant;
        return $this;
    }

    /**
     * Set the rff cpt interets.
     *
     * @param string|null $rffCptInterets The rff cpt interets.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRffCptInterets(?string $rffCptInterets): Dossier2 {
        $this->rffCptInterets = $rffCptInterets;
        return $this;
    }

    /**
     * Set the rff cpt regul.
     *
     * @param string|null $rffCptRegul The rff cpt regul.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRffCptRegul(?string $rffCptRegul): Dossier2 {
        $this->rffCptRegul = $rffCptRegul;
        return $this;
    }

    /**
     * Set the rff date lot ecr.
     *
     * @param DateTime|null $rffDateLotEcr The rff date lot ecr.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRffDateLotEcr(?DateTime $rffDateLotEcr): Dossier2 {
        $this->rffDateLotEcr = $rffDateLotEcr;
        return $this;
    }

    /**
     * Set the rff decouverts avances.
     *
     * @param float|null $rffDecouvertsAvances The rff decouverts avances.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRffDecouvertsAvances(?float $rffDecouvertsAvances): Dossier2 {
        $this->rffDecouvertsAvances = $rffDecouvertsAvances;
        return $this;
    }

    /**
     * Set the rff interets emprunts.
     *
     * @param float|null $rffInteretsEmprunts The rff interets emprunts.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRffInteretsEmprunts(?float $rffInteretsEmprunts): Dossier2 {
        $this->rffInteretsEmprunts = $rffInteretsEmprunts;
        return $this;
    }

    /**
     * Set the rff limite.
     *
     * @param float|null $rffLimite The rff limite.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRffLimite(?float $rffLimite): Dossier2 {
        $this->rffLimite = $rffLimite;
        return $this;
    }

    /**
     * Set the rff mtt regul.
     *
     * @param float|null $rffMttRegul The rff mtt regul.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRffMttRegul(?float $rffMttRegul): Dossier2 {
        $this->rffMttRegul = $rffMttRegul;
        return $this;
    }

    /**
     * Set the rff mtt rff.
     *
     * @param float|null $rffMttRff The rff mtt rff.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRffMttRff(?float $rffMttRff): Dossier2 {
        $this->rffMttRff = $rffMttRff;
        return $this;
    }

    /**
     * Set the rff num lot ecr.
     *
     * @param int|null $rffNumLotEcr The rff num lot ecr.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRffNumLotEcr(?int $rffNumLotEcr): Dossier2 {
        $this->rffNumLotEcr = $rffNumLotEcr;
        return $this;
    }

    /**
     * Set the rff type.
     *
     * @param int|null $rffType The rff type.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setRffType(?int $rffType): Dossier2 {
        $this->rffType = $rffType;
        return $this;
    }

    /**
     * Set the texte relance0.
     *
     * @param string|null $texteRelance0 The texte relance0.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setTexteRelance0(?string $texteRelance0): Dossier2 {
        $this->texteRelance0 = $texteRelance0;
        return $this;
    }

    /**
     * Set the texte relance1.
     *
     * @param string|null $texteRelance1 The texte relance1.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setTexteRelance1(?string $texteRelance1): Dossier2 {
        $this->texteRelance1 = $texteRelance1;
        return $this;
    }

    /**
     * Set the texte relance2.
     *
     * @param string|null $texteRelance2 The texte relance2.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setTexteRelance2(?string $texteRelance2): Dossier2 {
        $this->texteRelance2 = $texteRelance2;
        return $this;
    }

    /**
     * Set the texte relance3.
     *
     * @param string|null $texteRelance3 The texte relance3.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setTexteRelance3(?string $texteRelance3): Dossier2 {
        $this->texteRelance3 = $texteRelance3;
        return $this;
    }

    /**
     * Set the texte relance4.
     *
     * @param string|null $texteRelance4 The texte relance4.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setTexteRelance4(?string $texteRelance4): Dossier2 {
        $this->texteRelance4 = $texteRelance4;
        return $this;
    }

    /**
     * Set the treso comptes a exclure.
     *
     * @param string|null $tresoComptesAExclure The treso comptes a exclure.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setTresoComptesAExclure(?string $tresoComptesAExclure): Dossier2 {
        $this->tresoComptesAExclure = $tresoComptesAExclure;
        return $this;
    }

    /**
     * Set the utilise quantite2.
     *
     * @param bool|null $utiliseQuantite2 The utilise quantite2.
     * @return Dossier2 Returns this Dossier2.
     */
    public function setUtiliseQuantite2(?bool $utiliseQuantite2): Dossier2 {
        $this->utiliseQuantite2 = $utiliseQuantite2;
        return $this;
    }
}
