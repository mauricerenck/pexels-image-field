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
 * Dossier1.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Dossier1 {

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
     * Calcul ana fait.
     *
     * @var bool|null
     */
    private $calculAnaFait;

    /**
     * Chemin implantation ascii.
     *
     * @var string|null
     */
    private $cheminImplantationAscii;

    /**
     * Civilite.
     *
     * @var string|null
     */
    private $civilite;

    /**
     * Cle acces1.
     *
     * @var string|null
     */
    private $cleAcces1;

    /**
     * Cle acces10.
     *
     * @var string|null
     */
    private $cleAcces10;

    /**
     * Cle acces2.
     *
     * @var string|null
     */
    private $cleAcces2;

    /**
     * Cle acces3.
     *
     * @var string|null
     */
    private $cleAcces3;

    /**
     * Cle acces4.
     *
     * @var string|null
     */
    private $cleAcces4;

    /**
     * Cle acces5.
     *
     * @var string|null
     */
    private $cleAcces5;

    /**
     * Cle acces6.
     *
     * @var string|null
     */
    private $cleAcces6;

    /**
     * Cle acces7.
     *
     * @var string|null
     */
    private $cleAcces7;

    /**
     * Cle acces8.
     *
     * @var string|null
     */
    private $cleAcces8;

    /**
     * Cle acces9.
     *
     * @var string|null
     */
    private $cleAcces9;

    /**
     * Cle deblocage journaux.
     *
     * @var string|null
     */
    private $cleDeblocageJournaux;

    /**
     * Cle portable.
     *
     * @var string|null
     */
    private $clePortable;

    /**
     * Code equipe.
     *
     * @var string|null
     */
    private $codeEquipe;

    /**
     * Code naf.
     *
     * @var string|null
     */
    private $codeNaf;

    /**
     * Code naf2008.
     *
     * @var string|null
     */
    private $codeNaf2008;

    /**
     * Code officiel commune.
     *
     * @var string|null
     */
    private $codeOfficielCommune;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Complement.
     *
     * @var string|null
     */
    private $complement;

    /**
     * Copie backup.
     *
     * @var string|null
     */
    private $copieBackup;

    /**
     * Cpt deb suivi classe0.
     *
     * @var string|null
     */
    private $cptDebSuiviClasse0;

    /**
     * Cpt deb suivi classe1.
     *
     * @var string|null
     */
    private $cptDebSuiviClasse1;

    /**
     * Cpt deb suivi classe2.
     *
     * @var string|null
     */
    private $cptDebSuiviClasse2;

    /**
     * Cpt deb suivi classe3.
     *
     * @var string|null
     */
    private $cptDebSuiviClasse3;

    /**
     * Cpt deb suivi classe4.
     *
     * @var string|null
     */
    private $cptDebSuiviClasse4;

    /**
     * Cpt deb suivi classe5.
     *
     * @var string|null
     */
    private $cptDebSuiviClasse5;

    /**
     * Cpt deb suivi classe8.
     *
     * @var string|null
     */
    private $cptDebSuiviClasse8;

    /**
     * Cpt deb suivi classe9.
     *
     * @var string|null
     */
    private $cptDebSuiviClasse9;

    /**
     * Cpt fin suivi classe0.
     *
     * @var string|null
     */
    private $cptFinSuiviClasse0;

    /**
     * Cpt fin suivi classe1.
     *
     * @var string|null
     */
    private $cptFinSuiviClasse1;

    /**
     * Cpt fin suivi classe2.
     *
     * @var string|null
     */
    private $cptFinSuiviClasse2;

    /**
     * Cpt fin suivi classe3.
     *
     * @var string|null
     */
    private $cptFinSuiviClasse3;

    /**
     * Cpt fin suivi classe4.
     *
     * @var string|null
     */
    private $cptFinSuiviClasse4;

    /**
     * Cpt fin suivi classe5.
     *
     * @var string|null
     */
    private $cptFinSuiviClasse5;

    /**
     * Cpt fin suivi classe8.
     *
     * @var string|null
     */
    private $cptFinSuiviClasse8;

    /**
     * Cpt fin suivi classe9.
     *
     * @var string|null
     */
    private $cptFinSuiviClasse9;

    /**
     * Createur dossier.
     *
     * @var string|null
     */
    private $createurDossier;

    /**
     * Date limite saisie.
     *
     * @var DateTime|null
     */
    private $dateLimiteSaisie;

    /**
     * Date sys changt ex.
     *
     * @var DateTime|null
     */
    private $dateSysChangtEx;

    /**
     * Date sys cloture periode.
     *
     * @var DateTime|null
     */
    private $dateSysCloturePeriode;

    /**
     * Date sys creation.
     *
     * @var DateTime|null
     */
    private $dateSysCreation;

    /**
     * Date travail.
     *
     * @var DateTime|null
     */
    private $dateTravail;

    /**
     * Debut exercice.
     *
     * @var DateTime|null
     */
    private $debutExercice;

    /**
     * Debut exercice1.
     *
     * @var DateTime|null
     */
    private $debutExercice1;

    /**
     * Delai limite saisie.
     *
     * @var int|null
     */
    private $delaiLimiteSaisie;

    /**
     * Dlu.
     *
     * @var string|null
     */
    private $dlu;

    /**
     * Droit creation type cpt1.
     *
     * @var string|null
     */
    private $droitCreationTypeCpt1;

    /**
     * Droit creation type cpt10.
     *
     * @var string|null
     */
    private $droitCreationTypeCpt10;

    /**
     * Droit creation type cpt2.
     *
     * @var string|null
     */
    private $droitCreationTypeCpt2;

    /**
     * Droit creation type cpt3.
     *
     * @var string|null
     */
    private $droitCreationTypeCpt3;

    /**
     * Droit creation type cpt4.
     *
     * @var string|null
     */
    private $droitCreationTypeCpt4;

    /**
     * Droit creation type cpt5.
     *
     * @var string|null
     */
    private $droitCreationTypeCpt5;

    /**
     * Droit creation type cpt6.
     *
     * @var string|null
     */
    private $droitCreationTypeCpt6;

    /**
     * Droit creation type cpt7.
     *
     * @var string|null
     */
    private $droitCreationTypeCpt7;

    /**
     * Droit creation type cpt8.
     *
     * @var string|null
     */
    private $droitCreationTypeCpt8;

    /**
     * Droit creation type cpt9.
     *
     * @var string|null
     */
    private $droitCreationTypeCpt9;

    /**
     * Duree exercice.
     *
     * @var string|null
     */
    private $dureeExercice;

    /**
     * Duree exercice1.
     *
     * @var string|null
     */
    private $dureeExercice1;

    /**
     * Edit date systeme.
     *
     * @var bool|null
     */
    private $editDateSysteme;

    /**
     * Edit page garde.
     *
     * @var bool|null
     */
    private $editPageGarde;

    /**
     * Enseigne.
     *
     * @var string|null
     */
    private $enseigne;

    /**
     * Euro ou franc.
     *
     * @var string|null
     */
    private $euroOuFranc;

    /**
     * Famille1.
     *
     * @var string|null
     */
    private $famille1;

    /**
     * Famille10.
     *
     * @var string|null
     */
    private $famille10;

    /**
     * Famille2.
     *
     * @var string|null
     */
    private $famille2;

    /**
     * Famille3.
     *
     * @var string|null
     */
    private $famille3;

    /**
     * Famille4.
     *
     * @var string|null
     */
    private $famille4;

    /**
     * Famille5.
     *
     * @var string|null
     */
    private $famille5;

    /**
     * Famille6.
     *
     * @var string|null
     */
    private $famille6;

    /**
     * Famille7.
     *
     * @var string|null
     */
    private $famille7;

    /**
     * Famille8.
     *
     * @var string|null
     */
    private $famille8;

    /**
     * Famille9.
     *
     * @var string|null
     */
    private $famille9;

    /**
     * Famille analytique.
     *
     * @var string|null
     */
    private $familleAnalytique;

    /**
     * Fin exercice.
     *
     * @var DateTime|null
     */
    private $finExercice;

    /**
     * Fin exercice1.
     *
     * @var DateTime|null
     */
    private $finExercice1;

    /**
     * Gestion compta eco.
     *
     * @var bool|null
     */
    private $gestionComptaEco;

    /**
     * Groupe app clients.
     *
     * @var string|null
     */
    private $groupeAppClients;

    /**
     * Lr active.
     *
     * @var bool|null
     */
    private $lrActive;

    /**
     * Lr periode.
     *
     * @var DateTime|null
     */
    private $lrPeriode;

    /**
     * Module agr actif.
     *
     * @var bool|null
     */
    private $moduleAgrActif;

    /**
     * Multi dossiers.
     *
     * @var bool|null
     */
    private $multiDossiers;

    /**
     * Nature menu1.
     *
     * @var string|null
     */
    private $natureMenu1;

    /**
     * Nature menu10.
     *
     * @var string|null
     */
    private $natureMenu10;

    /**
     * Nature menu2.
     *
     * @var string|null
     */
    private $natureMenu2;

    /**
     * Nature menu3.
     *
     * @var string|null
     */
    private $natureMenu3;

    /**
     * Nature menu4.
     *
     * @var string|null
     */
    private $natureMenu4;

    /**
     * Nature menu5.
     *
     * @var string|null
     */
    private $natureMenu5;

    /**
     * Nature menu6.
     *
     * @var string|null
     */
    private $natureMenu6;

    /**
     * Nature menu7.
     *
     * @var string|null
     */
    private $natureMenu7;

    /**
     * Nature menu8.
     *
     * @var string|null
     */
    private $natureMenu8;

    /**
     * Nature menu9.
     *
     * @var string|null
     */
    private $natureMenu9;

    /**
     * Nature regle1.
     *
     * @var string|null
     */
    private $natureRegle1;

    /**
     * Nature regle10.
     *
     * @var string|null
     */
    private $natureRegle10;

    /**
     * Nature regle2.
     *
     * @var string|null
     */
    private $natureRegle2;

    /**
     * Nature regle3.
     *
     * @var string|null
     */
    private $natureRegle3;

    /**
     * Nature regle4.
     *
     * @var string|null
     */
    private $natureRegle4;

    /**
     * Nature regle5.
     *
     * @var string|null
     */
    private $natureRegle5;

    /**
     * Nature regle6.
     *
     * @var string|null
     */
    private $natureRegle6;

    /**
     * Nature regle7.
     *
     * @var string|null
     */
    private $natureRegle7;

    /**
     * Nature regle8.
     *
     * @var string|null
     */
    private $natureRegle8;

    /**
     * Nature regle9.
     *
     * @var string|null
     */
    private $natureRegle9;

    /**
     * Niveau analytique.
     *
     * @var int|null
     */
    private $niveauAnalytique;

    /**
     * Niveau droit1.
     *
     * @var string|null
     */
    private $niveauDroit1;

    /**
     * Niveau droit10.
     *
     * @var string|null
     */
    private $niveauDroit10;

    /**
     * Niveau droit2.
     *
     * @var string|null
     */
    private $niveauDroit2;

    /**
     * Niveau droit3.
     *
     * @var string|null
     */
    private $niveauDroit3;

    /**
     * Niveau droit4.
     *
     * @var string|null
     */
    private $niveauDroit4;

    /**
     * Niveau droit5.
     *
     * @var string|null
     */
    private $niveauDroit5;

    /**
     * Niveau droit6.
     *
     * @var string|null
     */
    private $niveauDroit6;

    /**
     * Niveau droit7.
     *
     * @var string|null
     */
    private $niveauDroit7;

    /**
     * Niveau droit8.
     *
     * @var string|null
     */
    private $niveauDroit8;

    /**
     * Niveau droit9.
     *
     * @var string|null
     */
    private $niveauDroit9;

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
     * Num voie.
     *
     * @var string|null
     */
    private $numVoie;

    /**
     * Pas ecriture rb.
     *
     * @var bool|null
     */
    private $pasEcritureRb;

    /**
     * Pas modif rib regl.
     *
     * @var bool|null
     */
    private $pasModifRibRegl;

    /**
     * Periode cloturee.
     *
     * @var DateTime|null
     */
    private $periodeCloturee;

    /**
     * Periode validee.
     *
     * @var DateTime|null
     */
    private $periodeValidee;

    /**
     * Prochain num piece.
     *
     * @var int|null
     */
    private $prochainNumPiece;

    /**
     * Raison sociale.
     *
     * @var string|null
     */
    private $raisonSociale;

    /**
     * Rc.
     *
     * @var string|null
     */
    private $rc;

    /**
     * Saisie immo en ecriture.
     *
     * @var bool|null
     */
    private $saisieImmoEnEcriture;

    /**
     * Sauve commun.
     *
     * @var bool|null
     */
    private $sauveCommun;

    /**
     * Sauve compresse.
     *
     * @var bool|null
     */
    private $sauveCompresse;

    /**
     * Siret.
     *
     * @var string|null
     */
    private $siret;

    /**
     * Suivi aff tout.
     *
     * @var bool|null
     */
    private $suiviAffTout;

    /**
     * Suivi ana2.
     *
     * @var string|null
     */
    private $suiviAna2;

    /**
     * Suivi ana classe0.
     *
     * @var bool|null
     */
    private $suiviAnaClasse0;

    /**
     * Suivi ana classe1.
     *
     * @var bool|null
     */
    private $suiviAnaClasse1;

    /**
     * Suivi ana classe2.
     *
     * @var bool|null
     */
    private $suiviAnaClasse2;

    /**
     * Suivi ana classe3.
     *
     * @var bool|null
     */
    private $suiviAnaClasse3;

    /**
     * Suivi ana classe4.
     *
     * @var bool|null
     */
    private $suiviAnaClasse4;

    /**
     * Suivi ana classe5.
     *
     * @var bool|null
     */
    private $suiviAnaClasse5;

    /**
     * Suivi ana classe8.
     *
     * @var bool|null
     */
    private $suiviAnaClasse8;

    /**
     * Suivi ana classe9.
     *
     * @var bool|null
     */
    private $suiviAnaClasse9;

    /**
     * Suivi ana facultatif.
     *
     * @var bool|null
     */
    private $suiviAnaFacultatif;

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
     * Ventilations communes.
     *
     * @var bool|null
     */
    private $ventilationsCommunes;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the calcul ana fait.
     *
     * @return bool|null Returns the calcul ana fait.
     */
    public function getCalculAnaFait(): ?bool {
        return $this->calculAnaFait;
    }

    /**
     * Get the chemin implantation ascii.
     *
     * @return string|null Returns the chemin implantation ascii.
     */
    public function getCheminImplantationAscii(): ?string {
        return $this->cheminImplantationAscii;
    }

    /**
     * Get the civilite.
     *
     * @return string|null Returns the civilite.
     */
    public function getCivilite(): ?string {
        return $this->civilite;
    }

    /**
     * Get the cle acces1.
     *
     * @return string|null Returns the cle acces1.
     */
    public function getCleAcces1(): ?string {
        return $this->cleAcces1;
    }

    /**
     * Get the cle acces10.
     *
     * @return string|null Returns the cle acces10.
     */
    public function getCleAcces10(): ?string {
        return $this->cleAcces10;
    }

    /**
     * Get the cle acces2.
     *
     * @return string|null Returns the cle acces2.
     */
    public function getCleAcces2(): ?string {
        return $this->cleAcces2;
    }

    /**
     * Get the cle acces3.
     *
     * @return string|null Returns the cle acces3.
     */
    public function getCleAcces3(): ?string {
        return $this->cleAcces3;
    }

    /**
     * Get the cle acces4.
     *
     * @return string|null Returns the cle acces4.
     */
    public function getCleAcces4(): ?string {
        return $this->cleAcces4;
    }

    /**
     * Get the cle acces5.
     *
     * @return string|null Returns the cle acces5.
     */
    public function getCleAcces5(): ?string {
        return $this->cleAcces5;
    }

    /**
     * Get the cle acces6.
     *
     * @return string|null Returns the cle acces6.
     */
    public function getCleAcces6(): ?string {
        return $this->cleAcces6;
    }

    /**
     * Get the cle acces7.
     *
     * @return string|null Returns the cle acces7.
     */
    public function getCleAcces7(): ?string {
        return $this->cleAcces7;
    }

    /**
     * Get the cle acces8.
     *
     * @return string|null Returns the cle acces8.
     */
    public function getCleAcces8(): ?string {
        return $this->cleAcces8;
    }

    /**
     * Get the cle acces9.
     *
     * @return string|null Returns the cle acces9.
     */
    public function getCleAcces9(): ?string {
        return $this->cleAcces9;
    }

    /**
     * Get the cle deblocage journaux.
     *
     * @return string|null Returns the cle deblocage journaux.
     */
    public function getCleDeblocageJournaux(): ?string {
        return $this->cleDeblocageJournaux;
    }

    /**
     * Get the cle portable.
     *
     * @return string|null Returns the cle portable.
     */
    public function getClePortable(): ?string {
        return $this->clePortable;
    }

    /**
     * Get the code equipe.
     *
     * @return string|null Returns the code equipe.
     */
    public function getCodeEquipe(): ?string {
        return $this->codeEquipe;
    }

    /**
     * Get the code naf.
     *
     * @return string|null Returns the code naf.
     */
    public function getCodeNaf(): ?string {
        return $this->codeNaf;
    }

    /**
     * Get the code naf2008.
     *
     * @return string|null Returns the code naf2008.
     */
    public function getCodeNaf2008(): ?string {
        return $this->codeNaf2008;
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
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
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
     * Get the copie backup.
     *
     * @return string|null Returns the copie backup.
     */
    public function getCopieBackup(): ?string {
        return $this->copieBackup;
    }

    /**
     * Get the cpt deb suivi classe0.
     *
     * @return string|null Returns the cpt deb suivi classe0.
     */
    public function getCptDebSuiviClasse0(): ?string {
        return $this->cptDebSuiviClasse0;
    }

    /**
     * Get the cpt deb suivi classe1.
     *
     * @return string|null Returns the cpt deb suivi classe1.
     */
    public function getCptDebSuiviClasse1(): ?string {
        return $this->cptDebSuiviClasse1;
    }

    /**
     * Get the cpt deb suivi classe2.
     *
     * @return string|null Returns the cpt deb suivi classe2.
     */
    public function getCptDebSuiviClasse2(): ?string {
        return $this->cptDebSuiviClasse2;
    }

    /**
     * Get the cpt deb suivi classe3.
     *
     * @return string|null Returns the cpt deb suivi classe3.
     */
    public function getCptDebSuiviClasse3(): ?string {
        return $this->cptDebSuiviClasse3;
    }

    /**
     * Get the cpt deb suivi classe4.
     *
     * @return string|null Returns the cpt deb suivi classe4.
     */
    public function getCptDebSuiviClasse4(): ?string {
        return $this->cptDebSuiviClasse4;
    }

    /**
     * Get the cpt deb suivi classe5.
     *
     * @return string|null Returns the cpt deb suivi classe5.
     */
    public function getCptDebSuiviClasse5(): ?string {
        return $this->cptDebSuiviClasse5;
    }

    /**
     * Get the cpt deb suivi classe8.
     *
     * @return string|null Returns the cpt deb suivi classe8.
     */
    public function getCptDebSuiviClasse8(): ?string {
        return $this->cptDebSuiviClasse8;
    }

    /**
     * Get the cpt deb suivi classe9.
     *
     * @return string|null Returns the cpt deb suivi classe9.
     */
    public function getCptDebSuiviClasse9(): ?string {
        return $this->cptDebSuiviClasse9;
    }

    /**
     * Get the cpt fin suivi classe0.
     *
     * @return string|null Returns the cpt fin suivi classe0.
     */
    public function getCptFinSuiviClasse0(): ?string {
        return $this->cptFinSuiviClasse0;
    }

    /**
     * Get the cpt fin suivi classe1.
     *
     * @return string|null Returns the cpt fin suivi classe1.
     */
    public function getCptFinSuiviClasse1(): ?string {
        return $this->cptFinSuiviClasse1;
    }

    /**
     * Get the cpt fin suivi classe2.
     *
     * @return string|null Returns the cpt fin suivi classe2.
     */
    public function getCptFinSuiviClasse2(): ?string {
        return $this->cptFinSuiviClasse2;
    }

    /**
     * Get the cpt fin suivi classe3.
     *
     * @return string|null Returns the cpt fin suivi classe3.
     */
    public function getCptFinSuiviClasse3(): ?string {
        return $this->cptFinSuiviClasse3;
    }

    /**
     * Get the cpt fin suivi classe4.
     *
     * @return string|null Returns the cpt fin suivi classe4.
     */
    public function getCptFinSuiviClasse4(): ?string {
        return $this->cptFinSuiviClasse4;
    }

    /**
     * Get the cpt fin suivi classe5.
     *
     * @return string|null Returns the cpt fin suivi classe5.
     */
    public function getCptFinSuiviClasse5(): ?string {
        return $this->cptFinSuiviClasse5;
    }

    /**
     * Get the cpt fin suivi classe8.
     *
     * @return string|null Returns the cpt fin suivi classe8.
     */
    public function getCptFinSuiviClasse8(): ?string {
        return $this->cptFinSuiviClasse8;
    }

    /**
     * Get the cpt fin suivi classe9.
     *
     * @return string|null Returns the cpt fin suivi classe9.
     */
    public function getCptFinSuiviClasse9(): ?string {
        return $this->cptFinSuiviClasse9;
    }

    /**
     * Get the createur dossier.
     *
     * @return string|null Returns the createur dossier.
     */
    public function getCreateurDossier(): ?string {
        return $this->createurDossier;
    }

    /**
     * Get the date limite saisie.
     *
     * @return DateTime|null Returns the date limite saisie.
     */
    public function getDateLimiteSaisie(): ?DateTime {
        return $this->dateLimiteSaisie;
    }

    /**
     * Get the date sys changt ex.
     *
     * @return DateTime|null Returns the date sys changt ex.
     */
    public function getDateSysChangtEx(): ?DateTime {
        return $this->dateSysChangtEx;
    }

    /**
     * Get the date sys cloture periode.
     *
     * @return DateTime|null Returns the date sys cloture periode.
     */
    public function getDateSysCloturePeriode(): ?DateTime {
        return $this->dateSysCloturePeriode;
    }

    /**
     * Get the date sys creation.
     *
     * @return DateTime|null Returns the date sys creation.
     */
    public function getDateSysCreation(): ?DateTime {
        return $this->dateSysCreation;
    }

    /**
     * Get the date travail.
     *
     * @return DateTime|null Returns the date travail.
     */
    public function getDateTravail(): ?DateTime {
        return $this->dateTravail;
    }

    /**
     * Get the debut exercice.
     *
     * @return DateTime|null Returns the debut exercice.
     */
    public function getDebutExercice(): ?DateTime {
        return $this->debutExercice;
    }

    /**
     * Get the debut exercice1.
     *
     * @return DateTime|null Returns the debut exercice1.
     */
    public function getDebutExercice1(): ?DateTime {
        return $this->debutExercice1;
    }

    /**
     * Get the delai limite saisie.
     *
     * @return int|null Returns the delai limite saisie.
     */
    public function getDelaiLimiteSaisie(): ?int {
        return $this->delaiLimiteSaisie;
    }

    /**
     * Get the dlu.
     *
     * @return string|null Returns the dlu.
     */
    public function getDlu(): ?string {
        return $this->dlu;
    }

    /**
     * Get the droit creation type cpt1.
     *
     * @return string|null Returns the droit creation type cpt1.
     */
    public function getDroitCreationTypeCpt1(): ?string {
        return $this->droitCreationTypeCpt1;
    }

    /**
     * Get the droit creation type cpt10.
     *
     * @return string|null Returns the droit creation type cpt10.
     */
    public function getDroitCreationTypeCpt10(): ?string {
        return $this->droitCreationTypeCpt10;
    }

    /**
     * Get the droit creation type cpt2.
     *
     * @return string|null Returns the droit creation type cpt2.
     */
    public function getDroitCreationTypeCpt2(): ?string {
        return $this->droitCreationTypeCpt2;
    }

    /**
     * Get the droit creation type cpt3.
     *
     * @return string|null Returns the droit creation type cpt3.
     */
    public function getDroitCreationTypeCpt3(): ?string {
        return $this->droitCreationTypeCpt3;
    }

    /**
     * Get the droit creation type cpt4.
     *
     * @return string|null Returns the droit creation type cpt4.
     */
    public function getDroitCreationTypeCpt4(): ?string {
        return $this->droitCreationTypeCpt4;
    }

    /**
     * Get the droit creation type cpt5.
     *
     * @return string|null Returns the droit creation type cpt5.
     */
    public function getDroitCreationTypeCpt5(): ?string {
        return $this->droitCreationTypeCpt5;
    }

    /**
     * Get the droit creation type cpt6.
     *
     * @return string|null Returns the droit creation type cpt6.
     */
    public function getDroitCreationTypeCpt6(): ?string {
        return $this->droitCreationTypeCpt6;
    }

    /**
     * Get the droit creation type cpt7.
     *
     * @return string|null Returns the droit creation type cpt7.
     */
    public function getDroitCreationTypeCpt7(): ?string {
        return $this->droitCreationTypeCpt7;
    }

    /**
     * Get the droit creation type cpt8.
     *
     * @return string|null Returns the droit creation type cpt8.
     */
    public function getDroitCreationTypeCpt8(): ?string {
        return $this->droitCreationTypeCpt8;
    }

    /**
     * Get the droit creation type cpt9.
     *
     * @return string|null Returns the droit creation type cpt9.
     */
    public function getDroitCreationTypeCpt9(): ?string {
        return $this->droitCreationTypeCpt9;
    }

    /**
     * Get the duree exercice.
     *
     * @return string|null Returns the duree exercice.
     */
    public function getDureeExercice(): ?string {
        return $this->dureeExercice;
    }

    /**
     * Get the duree exercice1.
     *
     * @return string|null Returns the duree exercice1.
     */
    public function getDureeExercice1(): ?string {
        return $this->dureeExercice1;
    }

    /**
     * Get the edit date systeme.
     *
     * @return bool|null Returns the edit date systeme.
     */
    public function getEditDateSysteme(): ?bool {
        return $this->editDateSysteme;
    }

    /**
     * Get the edit page garde.
     *
     * @return bool|null Returns the edit page garde.
     */
    public function getEditPageGarde(): ?bool {
        return $this->editPageGarde;
    }

    /**
     * Get the enseigne.
     *
     * @return string|null Returns the enseigne.
     */
    public function getEnseigne(): ?string {
        return $this->enseigne;
    }

    /**
     * Get the euro ou franc.
     *
     * @return string|null Returns the euro ou franc.
     */
    public function getEuroOuFranc(): ?string {
        return $this->euroOuFranc;
    }

    /**
     * Get the famille1.
     *
     * @return string|null Returns the famille1.
     */
    public function getFamille1(): ?string {
        return $this->famille1;
    }

    /**
     * Get the famille10.
     *
     * @return string|null Returns the famille10.
     */
    public function getFamille10(): ?string {
        return $this->famille10;
    }

    /**
     * Get the famille2.
     *
     * @return string|null Returns the famille2.
     */
    public function getFamille2(): ?string {
        return $this->famille2;
    }

    /**
     * Get the famille3.
     *
     * @return string|null Returns the famille3.
     */
    public function getFamille3(): ?string {
        return $this->famille3;
    }

    /**
     * Get the famille4.
     *
     * @return string|null Returns the famille4.
     */
    public function getFamille4(): ?string {
        return $this->famille4;
    }

    /**
     * Get the famille5.
     *
     * @return string|null Returns the famille5.
     */
    public function getFamille5(): ?string {
        return $this->famille5;
    }

    /**
     * Get the famille6.
     *
     * @return string|null Returns the famille6.
     */
    public function getFamille6(): ?string {
        return $this->famille6;
    }

    /**
     * Get the famille7.
     *
     * @return string|null Returns the famille7.
     */
    public function getFamille7(): ?string {
        return $this->famille7;
    }

    /**
     * Get the famille8.
     *
     * @return string|null Returns the famille8.
     */
    public function getFamille8(): ?string {
        return $this->famille8;
    }

    /**
     * Get the famille9.
     *
     * @return string|null Returns the famille9.
     */
    public function getFamille9(): ?string {
        return $this->famille9;
    }

    /**
     * Get the famille analytique.
     *
     * @return string|null Returns the famille analytique.
     */
    public function getFamilleAnalytique(): ?string {
        return $this->familleAnalytique;
    }

    /**
     * Get the fin exercice.
     *
     * @return DateTime|null Returns the fin exercice.
     */
    public function getFinExercice(): ?DateTime {
        return $this->finExercice;
    }

    /**
     * Get the fin exercice1.
     *
     * @return DateTime|null Returns the fin exercice1.
     */
    public function getFinExercice1(): ?DateTime {
        return $this->finExercice1;
    }

    /**
     * Get the gestion compta eco.
     *
     * @return bool|null Returns the gestion compta eco.
     */
    public function getGestionComptaEco(): ?bool {
        return $this->gestionComptaEco;
    }

    /**
     * Get the groupe app clients.
     *
     * @return string|null Returns the groupe app clients.
     */
    public function getGroupeAppClients(): ?string {
        return $this->groupeAppClients;
    }

    /**
     * Get the lr active.
     *
     * @return bool|null Returns the lr active.
     */
    public function getLrActive(): ?bool {
        return $this->lrActive;
    }

    /**
     * Get the lr periode.
     *
     * @return DateTime|null Returns the lr periode.
     */
    public function getLrPeriode(): ?DateTime {
        return $this->lrPeriode;
    }

    /**
     * Get the module agr actif.
     *
     * @return bool|null Returns the module agr actif.
     */
    public function getModuleAgrActif(): ?bool {
        return $this->moduleAgrActif;
    }

    /**
     * Get the multi dossiers.
     *
     * @return bool|null Returns the multi dossiers.
     */
    public function getMultiDossiers(): ?bool {
        return $this->multiDossiers;
    }

    /**
     * Get the nature menu1.
     *
     * @return string|null Returns the nature menu1.
     */
    public function getNatureMenu1(): ?string {
        return $this->natureMenu1;
    }

    /**
     * Get the nature menu10.
     *
     * @return string|null Returns the nature menu10.
     */
    public function getNatureMenu10(): ?string {
        return $this->natureMenu10;
    }

    /**
     * Get the nature menu2.
     *
     * @return string|null Returns the nature menu2.
     */
    public function getNatureMenu2(): ?string {
        return $this->natureMenu2;
    }

    /**
     * Get the nature menu3.
     *
     * @return string|null Returns the nature menu3.
     */
    public function getNatureMenu3(): ?string {
        return $this->natureMenu3;
    }

    /**
     * Get the nature menu4.
     *
     * @return string|null Returns the nature menu4.
     */
    public function getNatureMenu4(): ?string {
        return $this->natureMenu4;
    }

    /**
     * Get the nature menu5.
     *
     * @return string|null Returns the nature menu5.
     */
    public function getNatureMenu5(): ?string {
        return $this->natureMenu5;
    }

    /**
     * Get the nature menu6.
     *
     * @return string|null Returns the nature menu6.
     */
    public function getNatureMenu6(): ?string {
        return $this->natureMenu6;
    }

    /**
     * Get the nature menu7.
     *
     * @return string|null Returns the nature menu7.
     */
    public function getNatureMenu7(): ?string {
        return $this->natureMenu7;
    }

    /**
     * Get the nature menu8.
     *
     * @return string|null Returns the nature menu8.
     */
    public function getNatureMenu8(): ?string {
        return $this->natureMenu8;
    }

    /**
     * Get the nature menu9.
     *
     * @return string|null Returns the nature menu9.
     */
    public function getNatureMenu9(): ?string {
        return $this->natureMenu9;
    }

    /**
     * Get the nature regle1.
     *
     * @return string|null Returns the nature regle1.
     */
    public function getNatureRegle1(): ?string {
        return $this->natureRegle1;
    }

    /**
     * Get the nature regle10.
     *
     * @return string|null Returns the nature regle10.
     */
    public function getNatureRegle10(): ?string {
        return $this->natureRegle10;
    }

    /**
     * Get the nature regle2.
     *
     * @return string|null Returns the nature regle2.
     */
    public function getNatureRegle2(): ?string {
        return $this->natureRegle2;
    }

    /**
     * Get the nature regle3.
     *
     * @return string|null Returns the nature regle3.
     */
    public function getNatureRegle3(): ?string {
        return $this->natureRegle3;
    }

    /**
     * Get the nature regle4.
     *
     * @return string|null Returns the nature regle4.
     */
    public function getNatureRegle4(): ?string {
        return $this->natureRegle4;
    }

    /**
     * Get the nature regle5.
     *
     * @return string|null Returns the nature regle5.
     */
    public function getNatureRegle5(): ?string {
        return $this->natureRegle5;
    }

    /**
     * Get the nature regle6.
     *
     * @return string|null Returns the nature regle6.
     */
    public function getNatureRegle6(): ?string {
        return $this->natureRegle6;
    }

    /**
     * Get the nature regle7.
     *
     * @return string|null Returns the nature regle7.
     */
    public function getNatureRegle7(): ?string {
        return $this->natureRegle7;
    }

    /**
     * Get the nature regle8.
     *
     * @return string|null Returns the nature regle8.
     */
    public function getNatureRegle8(): ?string {
        return $this->natureRegle8;
    }

    /**
     * Get the nature regle9.
     *
     * @return string|null Returns the nature regle9.
     */
    public function getNatureRegle9(): ?string {
        return $this->natureRegle9;
    }

    /**
     * Get the niveau analytique.
     *
     * @return int|null Returns the niveau analytique.
     */
    public function getNiveauAnalytique(): ?int {
        return $this->niveauAnalytique;
    }

    /**
     * Get the niveau droit1.
     *
     * @return string|null Returns the niveau droit1.
     */
    public function getNiveauDroit1(): ?string {
        return $this->niveauDroit1;
    }

    /**
     * Get the niveau droit10.
     *
     * @return string|null Returns the niveau droit10.
     */
    public function getNiveauDroit10(): ?string {
        return $this->niveauDroit10;
    }

    /**
     * Get the niveau droit2.
     *
     * @return string|null Returns the niveau droit2.
     */
    public function getNiveauDroit2(): ?string {
        return $this->niveauDroit2;
    }

    /**
     * Get the niveau droit3.
     *
     * @return string|null Returns the niveau droit3.
     */
    public function getNiveauDroit3(): ?string {
        return $this->niveauDroit3;
    }

    /**
     * Get the niveau droit4.
     *
     * @return string|null Returns the niveau droit4.
     */
    public function getNiveauDroit4(): ?string {
        return $this->niveauDroit4;
    }

    /**
     * Get the niveau droit5.
     *
     * @return string|null Returns the niveau droit5.
     */
    public function getNiveauDroit5(): ?string {
        return $this->niveauDroit5;
    }

    /**
     * Get the niveau droit6.
     *
     * @return string|null Returns the niveau droit6.
     */
    public function getNiveauDroit6(): ?string {
        return $this->niveauDroit6;
    }

    /**
     * Get the niveau droit7.
     *
     * @return string|null Returns the niveau droit7.
     */
    public function getNiveauDroit7(): ?string {
        return $this->niveauDroit7;
    }

    /**
     * Get the niveau droit8.
     *
     * @return string|null Returns the niveau droit8.
     */
    public function getNiveauDroit8(): ?string {
        return $this->niveauDroit8;
    }

    /**
     * Get the niveau droit9.
     *
     * @return string|null Returns the niveau droit9.
     */
    public function getNiveauDroit9(): ?string {
        return $this->niveauDroit9;
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
     * Get the num voie.
     *
     * @return string|null Returns the num voie.
     */
    public function getNumVoie(): ?string {
        return $this->numVoie;
    }

    /**
     * Get the pas ecriture rb.
     *
     * @return bool|null Returns the pas ecriture rb.
     */
    public function getPasEcritureRb(): ?bool {
        return $this->pasEcritureRb;
    }

    /**
     * Get the pas modif rib regl.
     *
     * @return bool|null Returns the pas modif rib regl.
     */
    public function getPasModifRibRegl(): ?bool {
        return $this->pasModifRibRegl;
    }

    /**
     * Get the periode cloturee.
     *
     * @return DateTime|null Returns the periode cloturee.
     */
    public function getPeriodeCloturee(): ?DateTime {
        return $this->periodeCloturee;
    }

    /**
     * Get the periode validee.
     *
     * @return DateTime|null Returns the periode validee.
     */
    public function getPeriodeValidee(): ?DateTime {
        return $this->periodeValidee;
    }

    /**
     * Get the prochain num piece.
     *
     * @return int|null Returns the prochain num piece.
     */
    public function getProchainNumPiece(): ?int {
        return $this->prochainNumPiece;
    }

    /**
     * Get the raison sociale.
     *
     * @return string|null Returns the raison sociale.
     */
    public function getRaisonSociale(): ?string {
        return $this->raisonSociale;
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
     * Get the saisie immo en ecriture.
     *
     * @return bool|null Returns the saisie immo en ecriture.
     */
    public function getSaisieImmoEnEcriture(): ?bool {
        return $this->saisieImmoEnEcriture;
    }

    /**
     * Get the sauve commun.
     *
     * @return bool|null Returns the sauve commun.
     */
    public function getSauveCommun(): ?bool {
        return $this->sauveCommun;
    }

    /**
     * Get the sauve compresse.
     *
     * @return bool|null Returns the sauve compresse.
     */
    public function getSauveCompresse(): ?bool {
        return $this->sauveCompresse;
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
     * Get the suivi aff tout.
     *
     * @return bool|null Returns the suivi aff tout.
     */
    public function getSuiviAffTout(): ?bool {
        return $this->suiviAffTout;
    }

    /**
     * Get the suivi ana2.
     *
     * @return string|null Returns the suivi ana2.
     */
    public function getSuiviAna2(): ?string {
        return $this->suiviAna2;
    }

    /**
     * Get the suivi ana classe0.
     *
     * @return bool|null Returns the suivi ana classe0.
     */
    public function getSuiviAnaClasse0(): ?bool {
        return $this->suiviAnaClasse0;
    }

    /**
     * Get the suivi ana classe1.
     *
     * @return bool|null Returns the suivi ana classe1.
     */
    public function getSuiviAnaClasse1(): ?bool {
        return $this->suiviAnaClasse1;
    }

    /**
     * Get the suivi ana classe2.
     *
     * @return bool|null Returns the suivi ana classe2.
     */
    public function getSuiviAnaClasse2(): ?bool {
        return $this->suiviAnaClasse2;
    }

    /**
     * Get the suivi ana classe3.
     *
     * @return bool|null Returns the suivi ana classe3.
     */
    public function getSuiviAnaClasse3(): ?bool {
        return $this->suiviAnaClasse3;
    }

    /**
     * Get the suivi ana classe4.
     *
     * @return bool|null Returns the suivi ana classe4.
     */
    public function getSuiviAnaClasse4(): ?bool {
        return $this->suiviAnaClasse4;
    }

    /**
     * Get the suivi ana classe5.
     *
     * @return bool|null Returns the suivi ana classe5.
     */
    public function getSuiviAnaClasse5(): ?bool {
        return $this->suiviAnaClasse5;
    }

    /**
     * Get the suivi ana classe8.
     *
     * @return bool|null Returns the suivi ana classe8.
     */
    public function getSuiviAnaClasse8(): ?bool {
        return $this->suiviAnaClasse8;
    }

    /**
     * Get the suivi ana classe9.
     *
     * @return bool|null Returns the suivi ana classe9.
     */
    public function getSuiviAnaClasse9(): ?bool {
        return $this->suiviAnaClasse9;
    }

    /**
     * Get the suivi ana facultatif.
     *
     * @return bool|null Returns the suivi ana facultatif.
     */
    public function getSuiviAnaFacultatif(): ?bool {
        return $this->suiviAnaFacultatif;
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
     * Get the ventilations communes.
     *
     * @return bool|null Returns the ventilations communes.
     */
    public function getVentilationsCommunes(): ?bool {
        return $this->ventilationsCommunes;
    }

    /**
     * Set the btq.
     *
     * @param string|null $btq The btq.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setBtq(?string $btq): Dossier1 {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string|null $bureauDistributeur The bureau distributeur.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setBureauDistributeur(?string $bureauDistributeur): Dossier1 {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the calcul ana fait.
     *
     * @param bool|null $calculAnaFait The calcul ana fait.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCalculAnaFait(?bool $calculAnaFait): Dossier1 {
        $this->calculAnaFait = $calculAnaFait;
        return $this;
    }

    /**
     * Set the chemin implantation ascii.
     *
     * @param string|null $cheminImplantationAscii The chemin implantation ascii.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCheminImplantationAscii(?string $cheminImplantationAscii): Dossier1 {
        $this->cheminImplantationAscii = $cheminImplantationAscii;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string|null $civilite The civilite.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCivilite(?string $civilite): Dossier1 {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the cle acces1.
     *
     * @param string|null $cleAcces1 The cle acces1.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCleAcces1(?string $cleAcces1): Dossier1 {
        $this->cleAcces1 = $cleAcces1;
        return $this;
    }

    /**
     * Set the cle acces10.
     *
     * @param string|null $cleAcces10 The cle acces10.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCleAcces10(?string $cleAcces10): Dossier1 {
        $this->cleAcces10 = $cleAcces10;
        return $this;
    }

    /**
     * Set the cle acces2.
     *
     * @param string|null $cleAcces2 The cle acces2.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCleAcces2(?string $cleAcces2): Dossier1 {
        $this->cleAcces2 = $cleAcces2;
        return $this;
    }

    /**
     * Set the cle acces3.
     *
     * @param string|null $cleAcces3 The cle acces3.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCleAcces3(?string $cleAcces3): Dossier1 {
        $this->cleAcces3 = $cleAcces3;
        return $this;
    }

    /**
     * Set the cle acces4.
     *
     * @param string|null $cleAcces4 The cle acces4.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCleAcces4(?string $cleAcces4): Dossier1 {
        $this->cleAcces4 = $cleAcces4;
        return $this;
    }

    /**
     * Set the cle acces5.
     *
     * @param string|null $cleAcces5 The cle acces5.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCleAcces5(?string $cleAcces5): Dossier1 {
        $this->cleAcces5 = $cleAcces5;
        return $this;
    }

    /**
     * Set the cle acces6.
     *
     * @param string|null $cleAcces6 The cle acces6.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCleAcces6(?string $cleAcces6): Dossier1 {
        $this->cleAcces6 = $cleAcces6;
        return $this;
    }

    /**
     * Set the cle acces7.
     *
     * @param string|null $cleAcces7 The cle acces7.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCleAcces7(?string $cleAcces7): Dossier1 {
        $this->cleAcces7 = $cleAcces7;
        return $this;
    }

    /**
     * Set the cle acces8.
     *
     * @param string|null $cleAcces8 The cle acces8.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCleAcces8(?string $cleAcces8): Dossier1 {
        $this->cleAcces8 = $cleAcces8;
        return $this;
    }

    /**
     * Set the cle acces9.
     *
     * @param string|null $cleAcces9 The cle acces9.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCleAcces9(?string $cleAcces9): Dossier1 {
        $this->cleAcces9 = $cleAcces9;
        return $this;
    }

    /**
     * Set the cle deblocage journaux.
     *
     * @param string|null $cleDeblocageJournaux The cle deblocage journaux.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCleDeblocageJournaux(?string $cleDeblocageJournaux): Dossier1 {
        $this->cleDeblocageJournaux = $cleDeblocageJournaux;
        return $this;
    }

    /**
     * Set the cle portable.
     *
     * @param string|null $clePortable The cle portable.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setClePortable(?string $clePortable): Dossier1 {
        $this->clePortable = $clePortable;
        return $this;
    }

    /**
     * Set the code equipe.
     *
     * @param string|null $codeEquipe The code equipe.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCodeEquipe(?string $codeEquipe): Dossier1 {
        $this->codeEquipe = $codeEquipe;
        return $this;
    }

    /**
     * Set the code naf.
     *
     * @param string|null $codeNaf The code naf.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCodeNaf(?string $codeNaf): Dossier1 {
        $this->codeNaf = $codeNaf;
        return $this;
    }

    /**
     * Set the code naf2008.
     *
     * @param string|null $codeNaf2008 The code naf2008.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCodeNaf2008(?string $codeNaf2008): Dossier1 {
        $this->codeNaf2008 = $codeNaf2008;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string|null $codeOfficielCommune The code officiel commune.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCodeOfficielCommune(?string $codeOfficielCommune): Dossier1 {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCodePostal(?string $codePostal): Dossier1 {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string|null $complement The complement.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setComplement(?string $complement): Dossier1 {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the copie backup.
     *
     * @param string|null $copieBackup The copie backup.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCopieBackup(?string $copieBackup): Dossier1 {
        $this->copieBackup = $copieBackup;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe0.
     *
     * @param string|null $cptDebSuiviClasse0 The cpt deb suivi classe0.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptDebSuiviClasse0(?string $cptDebSuiviClasse0): Dossier1 {
        $this->cptDebSuiviClasse0 = $cptDebSuiviClasse0;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe1.
     *
     * @param string|null $cptDebSuiviClasse1 The cpt deb suivi classe1.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptDebSuiviClasse1(?string $cptDebSuiviClasse1): Dossier1 {
        $this->cptDebSuiviClasse1 = $cptDebSuiviClasse1;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe2.
     *
     * @param string|null $cptDebSuiviClasse2 The cpt deb suivi classe2.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptDebSuiviClasse2(?string $cptDebSuiviClasse2): Dossier1 {
        $this->cptDebSuiviClasse2 = $cptDebSuiviClasse2;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe3.
     *
     * @param string|null $cptDebSuiviClasse3 The cpt deb suivi classe3.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptDebSuiviClasse3(?string $cptDebSuiviClasse3): Dossier1 {
        $this->cptDebSuiviClasse3 = $cptDebSuiviClasse3;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe4.
     *
     * @param string|null $cptDebSuiviClasse4 The cpt deb suivi classe4.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptDebSuiviClasse4(?string $cptDebSuiviClasse4): Dossier1 {
        $this->cptDebSuiviClasse4 = $cptDebSuiviClasse4;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe5.
     *
     * @param string|null $cptDebSuiviClasse5 The cpt deb suivi classe5.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptDebSuiviClasse5(?string $cptDebSuiviClasse5): Dossier1 {
        $this->cptDebSuiviClasse5 = $cptDebSuiviClasse5;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe8.
     *
     * @param string|null $cptDebSuiviClasse8 The cpt deb suivi classe8.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptDebSuiviClasse8(?string $cptDebSuiviClasse8): Dossier1 {
        $this->cptDebSuiviClasse8 = $cptDebSuiviClasse8;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe9.
     *
     * @param string|null $cptDebSuiviClasse9 The cpt deb suivi classe9.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptDebSuiviClasse9(?string $cptDebSuiviClasse9): Dossier1 {
        $this->cptDebSuiviClasse9 = $cptDebSuiviClasse9;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe0.
     *
     * @param string|null $cptFinSuiviClasse0 The cpt fin suivi classe0.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptFinSuiviClasse0(?string $cptFinSuiviClasse0): Dossier1 {
        $this->cptFinSuiviClasse0 = $cptFinSuiviClasse0;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe1.
     *
     * @param string|null $cptFinSuiviClasse1 The cpt fin suivi classe1.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptFinSuiviClasse1(?string $cptFinSuiviClasse1): Dossier1 {
        $this->cptFinSuiviClasse1 = $cptFinSuiviClasse1;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe2.
     *
     * @param string|null $cptFinSuiviClasse2 The cpt fin suivi classe2.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptFinSuiviClasse2(?string $cptFinSuiviClasse2): Dossier1 {
        $this->cptFinSuiviClasse2 = $cptFinSuiviClasse2;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe3.
     *
     * @param string|null $cptFinSuiviClasse3 The cpt fin suivi classe3.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptFinSuiviClasse3(?string $cptFinSuiviClasse3): Dossier1 {
        $this->cptFinSuiviClasse3 = $cptFinSuiviClasse3;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe4.
     *
     * @param string|null $cptFinSuiviClasse4 The cpt fin suivi classe4.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptFinSuiviClasse4(?string $cptFinSuiviClasse4): Dossier1 {
        $this->cptFinSuiviClasse4 = $cptFinSuiviClasse4;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe5.
     *
     * @param string|null $cptFinSuiviClasse5 The cpt fin suivi classe5.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptFinSuiviClasse5(?string $cptFinSuiviClasse5): Dossier1 {
        $this->cptFinSuiviClasse5 = $cptFinSuiviClasse5;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe8.
     *
     * @param string|null $cptFinSuiviClasse8 The cpt fin suivi classe8.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptFinSuiviClasse8(?string $cptFinSuiviClasse8): Dossier1 {
        $this->cptFinSuiviClasse8 = $cptFinSuiviClasse8;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe9.
     *
     * @param string|null $cptFinSuiviClasse9 The cpt fin suivi classe9.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCptFinSuiviClasse9(?string $cptFinSuiviClasse9): Dossier1 {
        $this->cptFinSuiviClasse9 = $cptFinSuiviClasse9;
        return $this;
    }

    /**
     * Set the createur dossier.
     *
     * @param string|null $createurDossier The createur dossier.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setCreateurDossier(?string $createurDossier): Dossier1 {
        $this->createurDossier = $createurDossier;
        return $this;
    }

    /**
     * Set the date limite saisie.
     *
     * @param DateTime|null $dateLimiteSaisie The date limite saisie.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDateLimiteSaisie(?DateTime $dateLimiteSaisie): Dossier1 {
        $this->dateLimiteSaisie = $dateLimiteSaisie;
        return $this;
    }

    /**
     * Set the date sys changt ex.
     *
     * @param DateTime|null $dateSysChangtEx The date sys changt ex.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDateSysChangtEx(?DateTime $dateSysChangtEx): Dossier1 {
        $this->dateSysChangtEx = $dateSysChangtEx;
        return $this;
    }

    /**
     * Set the date sys cloture periode.
     *
     * @param DateTime|null $dateSysCloturePeriode The date sys cloture periode.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDateSysCloturePeriode(?DateTime $dateSysCloturePeriode): Dossier1 {
        $this->dateSysCloturePeriode = $dateSysCloturePeriode;
        return $this;
    }

    /**
     * Set the date sys creation.
     *
     * @param DateTime|null $dateSysCreation The date sys creation.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDateSysCreation(?DateTime $dateSysCreation): Dossier1 {
        $this->dateSysCreation = $dateSysCreation;
        return $this;
    }

    /**
     * Set the date travail.
     *
     * @param DateTime|null $dateTravail The date travail.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDateTravail(?DateTime $dateTravail): Dossier1 {
        $this->dateTravail = $dateTravail;
        return $this;
    }

    /**
     * Set the debut exercice.
     *
     * @param DateTime|null $debutExercice The debut exercice.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDebutExercice(?DateTime $debutExercice): Dossier1 {
        $this->debutExercice = $debutExercice;
        return $this;
    }

    /**
     * Set the debut exercice1.
     *
     * @param DateTime|null $debutExercice1 The debut exercice1.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDebutExercice1(?DateTime $debutExercice1): Dossier1 {
        $this->debutExercice1 = $debutExercice1;
        return $this;
    }

    /**
     * Set the delai limite saisie.
     *
     * @param int|null $delaiLimiteSaisie The delai limite saisie.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDelaiLimiteSaisie(?int $delaiLimiteSaisie): Dossier1 {
        $this->delaiLimiteSaisie = $delaiLimiteSaisie;
        return $this;
    }

    /**
     * Set the dlu.
     *
     * @param string|null $dlu The dlu.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDlu(?string $dlu): Dossier1 {
        $this->dlu = $dlu;
        return $this;
    }

    /**
     * Set the droit creation type cpt1.
     *
     * @param string|null $droitCreationTypeCpt1 The droit creation type cpt1.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDroitCreationTypeCpt1(?string $droitCreationTypeCpt1): Dossier1 {
        $this->droitCreationTypeCpt1 = $droitCreationTypeCpt1;
        return $this;
    }

    /**
     * Set the droit creation type cpt10.
     *
     * @param string|null $droitCreationTypeCpt10 The droit creation type cpt10.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDroitCreationTypeCpt10(?string $droitCreationTypeCpt10): Dossier1 {
        $this->droitCreationTypeCpt10 = $droitCreationTypeCpt10;
        return $this;
    }

    /**
     * Set the droit creation type cpt2.
     *
     * @param string|null $droitCreationTypeCpt2 The droit creation type cpt2.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDroitCreationTypeCpt2(?string $droitCreationTypeCpt2): Dossier1 {
        $this->droitCreationTypeCpt2 = $droitCreationTypeCpt2;
        return $this;
    }

    /**
     * Set the droit creation type cpt3.
     *
     * @param string|null $droitCreationTypeCpt3 The droit creation type cpt3.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDroitCreationTypeCpt3(?string $droitCreationTypeCpt3): Dossier1 {
        $this->droitCreationTypeCpt3 = $droitCreationTypeCpt3;
        return $this;
    }

    /**
     * Set the droit creation type cpt4.
     *
     * @param string|null $droitCreationTypeCpt4 The droit creation type cpt4.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDroitCreationTypeCpt4(?string $droitCreationTypeCpt4): Dossier1 {
        $this->droitCreationTypeCpt4 = $droitCreationTypeCpt4;
        return $this;
    }

    /**
     * Set the droit creation type cpt5.
     *
     * @param string|null $droitCreationTypeCpt5 The droit creation type cpt5.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDroitCreationTypeCpt5(?string $droitCreationTypeCpt5): Dossier1 {
        $this->droitCreationTypeCpt5 = $droitCreationTypeCpt5;
        return $this;
    }

    /**
     * Set the droit creation type cpt6.
     *
     * @param string|null $droitCreationTypeCpt6 The droit creation type cpt6.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDroitCreationTypeCpt6(?string $droitCreationTypeCpt6): Dossier1 {
        $this->droitCreationTypeCpt6 = $droitCreationTypeCpt6;
        return $this;
    }

    /**
     * Set the droit creation type cpt7.
     *
     * @param string|null $droitCreationTypeCpt7 The droit creation type cpt7.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDroitCreationTypeCpt7(?string $droitCreationTypeCpt7): Dossier1 {
        $this->droitCreationTypeCpt7 = $droitCreationTypeCpt7;
        return $this;
    }

    /**
     * Set the droit creation type cpt8.
     *
     * @param string|null $droitCreationTypeCpt8 The droit creation type cpt8.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDroitCreationTypeCpt8(?string $droitCreationTypeCpt8): Dossier1 {
        $this->droitCreationTypeCpt8 = $droitCreationTypeCpt8;
        return $this;
    }

    /**
     * Set the droit creation type cpt9.
     *
     * @param string|null $droitCreationTypeCpt9 The droit creation type cpt9.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDroitCreationTypeCpt9(?string $droitCreationTypeCpt9): Dossier1 {
        $this->droitCreationTypeCpt9 = $droitCreationTypeCpt9;
        return $this;
    }

    /**
     * Set the duree exercice.
     *
     * @param string|null $dureeExercice The duree exercice.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDureeExercice(?string $dureeExercice): Dossier1 {
        $this->dureeExercice = $dureeExercice;
        return $this;
    }

    /**
     * Set the duree exercice1.
     *
     * @param string|null $dureeExercice1 The duree exercice1.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setDureeExercice1(?string $dureeExercice1): Dossier1 {
        $this->dureeExercice1 = $dureeExercice1;
        return $this;
    }

    /**
     * Set the edit date systeme.
     *
     * @param bool|null $editDateSysteme The edit date systeme.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setEditDateSysteme(?bool $editDateSysteme): Dossier1 {
        $this->editDateSysteme = $editDateSysteme;
        return $this;
    }

    /**
     * Set the edit page garde.
     *
     * @param bool|null $editPageGarde The edit page garde.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setEditPageGarde(?bool $editPageGarde): Dossier1 {
        $this->editPageGarde = $editPageGarde;
        return $this;
    }

    /**
     * Set the enseigne.
     *
     * @param string|null $enseigne The enseigne.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setEnseigne(?string $enseigne): Dossier1 {
        $this->enseigne = $enseigne;
        return $this;
    }

    /**
     * Set the euro ou franc.
     *
     * @param string|null $euroOuFranc The euro ou franc.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setEuroOuFranc(?string $euroOuFranc): Dossier1 {
        $this->euroOuFranc = $euroOuFranc;
        return $this;
    }

    /**
     * Set the famille1.
     *
     * @param string|null $famille1 The famille1.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFamille1(?string $famille1): Dossier1 {
        $this->famille1 = $famille1;
        return $this;
    }

    /**
     * Set the famille10.
     *
     * @param string|null $famille10 The famille10.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFamille10(?string $famille10): Dossier1 {
        $this->famille10 = $famille10;
        return $this;
    }

    /**
     * Set the famille2.
     *
     * @param string|null $famille2 The famille2.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFamille2(?string $famille2): Dossier1 {
        $this->famille2 = $famille2;
        return $this;
    }

    /**
     * Set the famille3.
     *
     * @param string|null $famille3 The famille3.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFamille3(?string $famille3): Dossier1 {
        $this->famille3 = $famille3;
        return $this;
    }

    /**
     * Set the famille4.
     *
     * @param string|null $famille4 The famille4.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFamille4(?string $famille4): Dossier1 {
        $this->famille4 = $famille4;
        return $this;
    }

    /**
     * Set the famille5.
     *
     * @param string|null $famille5 The famille5.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFamille5(?string $famille5): Dossier1 {
        $this->famille5 = $famille5;
        return $this;
    }

    /**
     * Set the famille6.
     *
     * @param string|null $famille6 The famille6.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFamille6(?string $famille6): Dossier1 {
        $this->famille6 = $famille6;
        return $this;
    }

    /**
     * Set the famille7.
     *
     * @param string|null $famille7 The famille7.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFamille7(?string $famille7): Dossier1 {
        $this->famille7 = $famille7;
        return $this;
    }

    /**
     * Set the famille8.
     *
     * @param string|null $famille8 The famille8.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFamille8(?string $famille8): Dossier1 {
        $this->famille8 = $famille8;
        return $this;
    }

    /**
     * Set the famille9.
     *
     * @param string|null $famille9 The famille9.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFamille9(?string $famille9): Dossier1 {
        $this->famille9 = $famille9;
        return $this;
    }

    /**
     * Set the famille analytique.
     *
     * @param string|null $familleAnalytique The famille analytique.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFamilleAnalytique(?string $familleAnalytique): Dossier1 {
        $this->familleAnalytique = $familleAnalytique;
        return $this;
    }

    /**
     * Set the fin exercice.
     *
     * @param DateTime|null $finExercice The fin exercice.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFinExercice(?DateTime $finExercice): Dossier1 {
        $this->finExercice = $finExercice;
        return $this;
    }

    /**
     * Set the fin exercice1.
     *
     * @param DateTime|null $finExercice1 The fin exercice1.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setFinExercice1(?DateTime $finExercice1): Dossier1 {
        $this->finExercice1 = $finExercice1;
        return $this;
    }

    /**
     * Set the gestion compta eco.
     *
     * @param bool|null $gestionComptaEco The gestion compta eco.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setGestionComptaEco(?bool $gestionComptaEco): Dossier1 {
        $this->gestionComptaEco = $gestionComptaEco;
        return $this;
    }

    /**
     * Set the groupe app clients.
     *
     * @param string|null $groupeAppClients The groupe app clients.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setGroupeAppClients(?string $groupeAppClients): Dossier1 {
        $this->groupeAppClients = $groupeAppClients;
        return $this;
    }

    /**
     * Set the lr active.
     *
     * @param bool|null $lrActive The lr active.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setLrActive(?bool $lrActive): Dossier1 {
        $this->lrActive = $lrActive;
        return $this;
    }

    /**
     * Set the lr periode.
     *
     * @param DateTime|null $lrPeriode The lr periode.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setLrPeriode(?DateTime $lrPeriode): Dossier1 {
        $this->lrPeriode = $lrPeriode;
        return $this;
    }

    /**
     * Set the module agr actif.
     *
     * @param bool|null $moduleAgrActif The module agr actif.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setModuleAgrActif(?bool $moduleAgrActif): Dossier1 {
        $this->moduleAgrActif = $moduleAgrActif;
        return $this;
    }

    /**
     * Set the multi dossiers.
     *
     * @param bool|null $multiDossiers The multi dossiers.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setMultiDossiers(?bool $multiDossiers): Dossier1 {
        $this->multiDossiers = $multiDossiers;
        return $this;
    }

    /**
     * Set the nature menu1.
     *
     * @param string|null $natureMenu1 The nature menu1.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureMenu1(?string $natureMenu1): Dossier1 {
        $this->natureMenu1 = $natureMenu1;
        return $this;
    }

    /**
     * Set the nature menu10.
     *
     * @param string|null $natureMenu10 The nature menu10.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureMenu10(?string $natureMenu10): Dossier1 {
        $this->natureMenu10 = $natureMenu10;
        return $this;
    }

    /**
     * Set the nature menu2.
     *
     * @param string|null $natureMenu2 The nature menu2.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureMenu2(?string $natureMenu2): Dossier1 {
        $this->natureMenu2 = $natureMenu2;
        return $this;
    }

    /**
     * Set the nature menu3.
     *
     * @param string|null $natureMenu3 The nature menu3.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureMenu3(?string $natureMenu3): Dossier1 {
        $this->natureMenu3 = $natureMenu3;
        return $this;
    }

    /**
     * Set the nature menu4.
     *
     * @param string|null $natureMenu4 The nature menu4.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureMenu4(?string $natureMenu4): Dossier1 {
        $this->natureMenu4 = $natureMenu4;
        return $this;
    }

    /**
     * Set the nature menu5.
     *
     * @param string|null $natureMenu5 The nature menu5.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureMenu5(?string $natureMenu5): Dossier1 {
        $this->natureMenu5 = $natureMenu5;
        return $this;
    }

    /**
     * Set the nature menu6.
     *
     * @param string|null $natureMenu6 The nature menu6.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureMenu6(?string $natureMenu6): Dossier1 {
        $this->natureMenu6 = $natureMenu6;
        return $this;
    }

    /**
     * Set the nature menu7.
     *
     * @param string|null $natureMenu7 The nature menu7.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureMenu7(?string $natureMenu7): Dossier1 {
        $this->natureMenu7 = $natureMenu7;
        return $this;
    }

    /**
     * Set the nature menu8.
     *
     * @param string|null $natureMenu8 The nature menu8.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureMenu8(?string $natureMenu8): Dossier1 {
        $this->natureMenu8 = $natureMenu8;
        return $this;
    }

    /**
     * Set the nature menu9.
     *
     * @param string|null $natureMenu9 The nature menu9.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureMenu9(?string $natureMenu9): Dossier1 {
        $this->natureMenu9 = $natureMenu9;
        return $this;
    }

    /**
     * Set the nature regle1.
     *
     * @param string|null $natureRegle1 The nature regle1.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureRegle1(?string $natureRegle1): Dossier1 {
        $this->natureRegle1 = $natureRegle1;
        return $this;
    }

    /**
     * Set the nature regle10.
     *
     * @param string|null $natureRegle10 The nature regle10.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureRegle10(?string $natureRegle10): Dossier1 {
        $this->natureRegle10 = $natureRegle10;
        return $this;
    }

    /**
     * Set the nature regle2.
     *
     * @param string|null $natureRegle2 The nature regle2.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureRegle2(?string $natureRegle2): Dossier1 {
        $this->natureRegle2 = $natureRegle2;
        return $this;
    }

    /**
     * Set the nature regle3.
     *
     * @param string|null $natureRegle3 The nature regle3.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureRegle3(?string $natureRegle3): Dossier1 {
        $this->natureRegle3 = $natureRegle3;
        return $this;
    }

    /**
     * Set the nature regle4.
     *
     * @param string|null $natureRegle4 The nature regle4.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureRegle4(?string $natureRegle4): Dossier1 {
        $this->natureRegle4 = $natureRegle4;
        return $this;
    }

    /**
     * Set the nature regle5.
     *
     * @param string|null $natureRegle5 The nature regle5.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureRegle5(?string $natureRegle5): Dossier1 {
        $this->natureRegle5 = $natureRegle5;
        return $this;
    }

    /**
     * Set the nature regle6.
     *
     * @param string|null $natureRegle6 The nature regle6.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureRegle6(?string $natureRegle6): Dossier1 {
        $this->natureRegle6 = $natureRegle6;
        return $this;
    }

    /**
     * Set the nature regle7.
     *
     * @param string|null $natureRegle7 The nature regle7.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureRegle7(?string $natureRegle7): Dossier1 {
        $this->natureRegle7 = $natureRegle7;
        return $this;
    }

    /**
     * Set the nature regle8.
     *
     * @param string|null $natureRegle8 The nature regle8.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureRegle8(?string $natureRegle8): Dossier1 {
        $this->natureRegle8 = $natureRegle8;
        return $this;
    }

    /**
     * Set the nature regle9.
     *
     * @param string|null $natureRegle9 The nature regle9.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNatureRegle9(?string $natureRegle9): Dossier1 {
        $this->natureRegle9 = $natureRegle9;
        return $this;
    }

    /**
     * Set the niveau analytique.
     *
     * @param int|null $niveauAnalytique The niveau analytique.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNiveauAnalytique(?int $niveauAnalytique): Dossier1 {
        $this->niveauAnalytique = $niveauAnalytique;
        return $this;
    }

    /**
     * Set the niveau droit1.
     *
     * @param string|null $niveauDroit1 The niveau droit1.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNiveauDroit1(?string $niveauDroit1): Dossier1 {
        $this->niveauDroit1 = $niveauDroit1;
        return $this;
    }

    /**
     * Set the niveau droit10.
     *
     * @param string|null $niveauDroit10 The niveau droit10.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNiveauDroit10(?string $niveauDroit10): Dossier1 {
        $this->niveauDroit10 = $niveauDroit10;
        return $this;
    }

    /**
     * Set the niveau droit2.
     *
     * @param string|null $niveauDroit2 The niveau droit2.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNiveauDroit2(?string $niveauDroit2): Dossier1 {
        $this->niveauDroit2 = $niveauDroit2;
        return $this;
    }

    /**
     * Set the niveau droit3.
     *
     * @param string|null $niveauDroit3 The niveau droit3.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNiveauDroit3(?string $niveauDroit3): Dossier1 {
        $this->niveauDroit3 = $niveauDroit3;
        return $this;
    }

    /**
     * Set the niveau droit4.
     *
     * @param string|null $niveauDroit4 The niveau droit4.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNiveauDroit4(?string $niveauDroit4): Dossier1 {
        $this->niveauDroit4 = $niveauDroit4;
        return $this;
    }

    /**
     * Set the niveau droit5.
     *
     * @param string|null $niveauDroit5 The niveau droit5.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNiveauDroit5(?string $niveauDroit5): Dossier1 {
        $this->niveauDroit5 = $niveauDroit5;
        return $this;
    }

    /**
     * Set the niveau droit6.
     *
     * @param string|null $niveauDroit6 The niveau droit6.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNiveauDroit6(?string $niveauDroit6): Dossier1 {
        $this->niveauDroit6 = $niveauDroit6;
        return $this;
    }

    /**
     * Set the niveau droit7.
     *
     * @param string|null $niveauDroit7 The niveau droit7.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNiveauDroit7(?string $niveauDroit7): Dossier1 {
        $this->niveauDroit7 = $niveauDroit7;
        return $this;
    }

    /**
     * Set the niveau droit8.
     *
     * @param string|null $niveauDroit8 The niveau droit8.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNiveauDroit8(?string $niveauDroit8): Dossier1 {
        $this->niveauDroit8 = $niveauDroit8;
        return $this;
    }

    /**
     * Set the niveau droit9.
     *
     * @param string|null $niveauDroit9 The niveau droit9.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNiveauDroit9(?string $niveauDroit9): Dossier1 {
        $this->niveauDroit9 = $niveauDroit9;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string|null $nomVille The nom ville.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNomVille(?string $nomVille): Dossier1 {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string|null $nomVoie The nom voie.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNomVoie(?string $nomVoie): Dossier1 {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string|null $numVoie The num voie.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setNumVoie(?string $numVoie): Dossier1 {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the pas ecriture rb.
     *
     * @param bool|null $pasEcritureRb The pas ecriture rb.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setPasEcritureRb(?bool $pasEcritureRb): Dossier1 {
        $this->pasEcritureRb = $pasEcritureRb;
        return $this;
    }

    /**
     * Set the pas modif rib regl.
     *
     * @param bool|null $pasModifRibRegl The pas modif rib regl.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setPasModifRibRegl(?bool $pasModifRibRegl): Dossier1 {
        $this->pasModifRibRegl = $pasModifRibRegl;
        return $this;
    }

    /**
     * Set the periode cloturee.
     *
     * @param DateTime|null $periodeCloturee The periode cloturee.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setPeriodeCloturee(?DateTime $periodeCloturee): Dossier1 {
        $this->periodeCloturee = $periodeCloturee;
        return $this;
    }

    /**
     * Set the periode validee.
     *
     * @param DateTime|null $periodeValidee The periode validee.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setPeriodeValidee(?DateTime $periodeValidee): Dossier1 {
        $this->periodeValidee = $periodeValidee;
        return $this;
    }

    /**
     * Set the prochain num piece.
     *
     * @param int|null $prochainNumPiece The prochain num piece.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setProchainNumPiece(?int $prochainNumPiece): Dossier1 {
        $this->prochainNumPiece = $prochainNumPiece;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string|null $raisonSociale The raison sociale.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setRaisonSociale(?string $raisonSociale): Dossier1 {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    /**
     * Set the rc.
     *
     * @param string|null $rc The rc.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setRc(?string $rc): Dossier1 {
        $this->rc = $rc;
        return $this;
    }

    /**
     * Set the saisie immo en ecriture.
     *
     * @param bool|null $saisieImmoEnEcriture The saisie immo en ecriture.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSaisieImmoEnEcriture(?bool $saisieImmoEnEcriture): Dossier1 {
        $this->saisieImmoEnEcriture = $saisieImmoEnEcriture;
        return $this;
    }

    /**
     * Set the sauve commun.
     *
     * @param bool|null $sauveCommun The sauve commun.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSauveCommun(?bool $sauveCommun): Dossier1 {
        $this->sauveCommun = $sauveCommun;
        return $this;
    }

    /**
     * Set the sauve compresse.
     *
     * @param bool|null $sauveCompresse The sauve compresse.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSauveCompresse(?bool $sauveCompresse): Dossier1 {
        $this->sauveCompresse = $sauveCompresse;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string|null $siret The siret.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSiret(?string $siret): Dossier1 {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the suivi aff tout.
     *
     * @param bool|null $suiviAffTout The suivi aff tout.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSuiviAffTout(?bool $suiviAffTout): Dossier1 {
        $this->suiviAffTout = $suiviAffTout;
        return $this;
    }

    /**
     * Set the suivi ana2.
     *
     * @param string|null $suiviAna2 The suivi ana2.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSuiviAna2(?string $suiviAna2): Dossier1 {
        $this->suiviAna2 = $suiviAna2;
        return $this;
    }

    /**
     * Set the suivi ana classe0.
     *
     * @param bool|null $suiviAnaClasse0 The suivi ana classe0.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSuiviAnaClasse0(?bool $suiviAnaClasse0): Dossier1 {
        $this->suiviAnaClasse0 = $suiviAnaClasse0;
        return $this;
    }

    /**
     * Set the suivi ana classe1.
     *
     * @param bool|null $suiviAnaClasse1 The suivi ana classe1.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSuiviAnaClasse1(?bool $suiviAnaClasse1): Dossier1 {
        $this->suiviAnaClasse1 = $suiviAnaClasse1;
        return $this;
    }

    /**
     * Set the suivi ana classe2.
     *
     * @param bool|null $suiviAnaClasse2 The suivi ana classe2.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSuiviAnaClasse2(?bool $suiviAnaClasse2): Dossier1 {
        $this->suiviAnaClasse2 = $suiviAnaClasse2;
        return $this;
    }

    /**
     * Set the suivi ana classe3.
     *
     * @param bool|null $suiviAnaClasse3 The suivi ana classe3.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSuiviAnaClasse3(?bool $suiviAnaClasse3): Dossier1 {
        $this->suiviAnaClasse3 = $suiviAnaClasse3;
        return $this;
    }

    /**
     * Set the suivi ana classe4.
     *
     * @param bool|null $suiviAnaClasse4 The suivi ana classe4.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSuiviAnaClasse4(?bool $suiviAnaClasse4): Dossier1 {
        $this->suiviAnaClasse4 = $suiviAnaClasse4;
        return $this;
    }

    /**
     * Set the suivi ana classe5.
     *
     * @param bool|null $suiviAnaClasse5 The suivi ana classe5.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSuiviAnaClasse5(?bool $suiviAnaClasse5): Dossier1 {
        $this->suiviAnaClasse5 = $suiviAnaClasse5;
        return $this;
    }

    /**
     * Set the suivi ana classe8.
     *
     * @param bool|null $suiviAnaClasse8 The suivi ana classe8.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSuiviAnaClasse8(?bool $suiviAnaClasse8): Dossier1 {
        $this->suiviAnaClasse8 = $suiviAnaClasse8;
        return $this;
    }

    /**
     * Set the suivi ana classe9.
     *
     * @param bool|null $suiviAnaClasse9 The suivi ana classe9.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSuiviAnaClasse9(?bool $suiviAnaClasse9): Dossier1 {
        $this->suiviAnaClasse9 = $suiviAnaClasse9;
        return $this;
    }

    /**
     * Set the suivi ana facultatif.
     *
     * @param bool|null $suiviAnaFacultatif The suivi ana facultatif.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setSuiviAnaFacultatif(?bool $suiviAnaFacultatif): Dossier1 {
        $this->suiviAnaFacultatif = $suiviAnaFacultatif;
        return $this;
    }

    /**
     * Set the tva cle.
     *
     * @param string|null $tvaCle The tva cle.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setTvaCle(?string $tvaCle): Dossier1 {
        $this->tvaCle = $tvaCle;
        return $this;
    }

    /**
     * Set the tva code dossier.
     *
     * @param string|null $tvaCodeDossier The tva code dossier.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setTvaCodeDossier(?string $tvaCodeDossier): Dossier1 {
        $this->tvaCodeDossier = $tvaCodeDossier;
        return $this;
    }

    /**
     * Set the tva code recette.
     *
     * @param string|null $tvaCodeRecette The tva code recette.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setTvaCodeRecette(?string $tvaCodeRecette): Dossier1 {
        $this->tvaCodeRecette = $tvaCodeRecette;
        return $this;
    }

    /**
     * Set the ventilations communes.
     *
     * @param bool|null $ventilationsCommunes The ventilations communes.
     * @return Dossier1 Returns this Dossier1.
     */
    public function setVentilationsCommunes(?bool $ventilationsCommunes): Dossier1 {
        $this->ventilationsCommunes = $ventilationsCommunes;
        return $this;
    }
}
