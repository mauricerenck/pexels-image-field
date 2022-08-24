<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

use DateTime;

/**
 * Emp dadsu param.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpDadsuParam {

    /**
     * Actions gratuites nbre.
     *
     * @var float|null
     */
    private $actionsGratuitesNbre;

    /**
     * Actions gratuites valeur u.
     *
     * @var float|null
     */
    private $actionsGratuitesValeurU;

    /**
     * Anciennete.
     *
     * @var float|null
     */
    private $anciennete;

    /**
     * Anciennete btp.
     *
     * @var float|null
     */
    private $ancienneteBtp;

    /**
     * Annee prepa.
     *
     * @var int|null
     */
    private $anneePrepa;

    /**
     * At bureau.
     *
     * @var string|null
     */
    private $atBureau;

    /**
     * At etab.
     *
     * @var string|null
     */
    private $atEtab;

    /**
     * At risque.
     *
     * @var string|null
     */
    private $atRisque;

    /**
     * At taux.
     *
     * @var float|null
     */
    private $atTaux;

    /**
     * Autres sommes exo code1.
     *
     * @var string|null
     */
    private $autresSommesExoCode1;

    /**
     * Autres sommes exo code2.
     *
     * @var string|null
     */
    private $autresSommesExoCode2;

    /**
     * Autres sommes exo code3.
     *
     * @var string|null
     */
    private $autresSommesExoCode3;

    /**
     * Autres sommes exo code4.
     *
     * @var string|null
     */
    private $autresSommesExoCode4;

    /**
     * Autres sommes exo mnt1.
     *
     * @var float|null
     */
    private $autresSommesExoMnt1;

    /**
     * Autres sommes exo mnt2.
     *
     * @var float|null
     */
    private $autresSommesExoMnt2;

    /**
     * Autres sommes exo mnt3.
     *
     * @var float|null
     */
    private $autresSommesExoMnt3;

    /**
     * Autres sommes exo mnt4.
     *
     * @var float|null
     */
    private $autresSommesExoMnt4;

    /**
     * Base exo brut1.
     *
     * @var float|null
     */
    private $baseExoBrut1;

    /**
     * Base exo brut2.
     *
     * @var float|null
     */
    private $baseExoBrut2;

    /**
     * Base exo brut3.
     *
     * @var float|null
     */
    private $baseExoBrut3;

    /**
     * Base exo plaf1.
     *
     * @var float|null
     */
    private $baseExoPlaf1;

    /**
     * Base exo plaf2.
     *
     * @var float|null
     */
    private $baseExoPlaf2;

    /**
     * Base exo plaf3.
     *
     * @var float|null
     */
    private $baseExoPlaf3;

    /**
     * Btq lieu trav.
     *
     * @var string|null
     */
    private $btqLieuTrav;

    /**
     * Bureau distributeur lieu trav.
     *
     * @var string|null
     */
    private $bureauDistributeurLieuTrav;

    /**
     * Categorie btp.
     *
     * @var string|null
     */
    private $categorieBtp;

    /**
     * Code caract.
     *
     * @var string|null
     */
    private $codeCaract;

    /**
     * Code classe cnbf.
     *
     * @var string|null
     */
    private $codeClasseCnbf;

    /**
     * Code contrat trav.
     *
     * @var string|null
     */
    private $codeContratTrav;

    /**
     * Code convention col.
     *
     * @var string|null
     */
    private $codeConventionCol;

    /**
     * Code decalage paie.
     *
     * @var string|null
     */
    private $codeDecalagePaie;

    /**
     * Code deleg gest risque maladie.
     *
     * @var string|null
     */
    private $codeDelegGestRisqueMaladie;

    /**
     * Code droit contrat.
     *
     * @var string|null
     */
    private $codeDroitContrat;

    /**
     * Code empl mult.
     *
     * @var string|null
     */
    private $codeEmplMult;

    /**
     * Code emplois mult.
     *
     * @var string|null
     */
    private $codeEmploisMult;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code etat contrat prud.
     *
     * @var string|null
     */
    private $codeEtatContratPrud;

    /**
     * Code extension alsace moselle.
     *
     * @var string|null
     */
    private $codeExtensionAlsaceMoselle;

    /**
     * Code insee lieu trav.
     *
     * @var string|null
     */
    private $codeInseeLieuTrav;

    /**
     * Code motif deb per.
     *
     * @var string|null
     */
    private $codeMotifDebPer;

    /**
     * Code motif deb per2.
     *
     * @var string|null
     */
    private $codeMotifDebPer2;

    /**
     * Code motif deb per3.
     *
     * @var string|null
     */
    private $codeMotifDebPer3;

    /**
     * Code motif deb per4.
     *
     * @var string|null
     */
    private $codeMotifDebPer4;

    /**
     * Code motif deb per5.
     *
     * @var string|null
     */
    private $codeMotifDebPer5;

    /**
     * Code motif fin per.
     *
     * @var string|null
     */
    private $codeMotifFinPer;

    /**
     * Code motif fin per2.
     *
     * @var string|null
     */
    private $codeMotifFinPer2;

    /**
     * Code motif fin per3.
     *
     * @var string|null
     */
    private $codeMotifFinPer3;

    /**
     * Code motif fin per4.
     *
     * @var string|null
     */
    private $codeMotifFinPer4;

    /**
     * Code motif fin per5.
     *
     * @var string|null
     */
    private $codeMotifFinPer5;

    /**
     * Code nature base cotisations.
     *
     * @var string|null
     */
    private $codeNatureBaseCotisations;

    /**
     * Code officiel commune lieu trav.
     *
     * @var string|null
     */
    private $codeOfficielCommuneLieuTrav;

    /**
     * Code postal lieu trav.
     *
     * @var string|null
     */
    private $codePostalLieuTrav;

    /**
     * Code regime1.
     *
     * @var string|null
     */
    private $codeRegime1;

    /**
     * Code regime2.
     *
     * @var string|null
     */
    private $codeRegime2;

    /**
     * Code regime3.
     *
     * @var string|null
     */
    private $codeRegime3;

    /**
     * Code regime base obl.
     *
     * @var string|null
     */
    private $codeRegimeBaseObl;

    /**
     * Code regime base obl at.
     *
     * @var string|null
     */
    private $codeRegimeBaseOblAt;

    /**
     * Code regime base obl maladie.
     *
     * @var string|null
     */
    private $codeRegimeBaseOblMaladie;

    /**
     * Code regime base obl vieil pat.
     *
     * @var string|null
     */
    private $codeRegimeBaseOblVieilPat;

    /**
     * Code regime base obl vieil sal.
     *
     * @var string|null
     */
    private $codeRegimeBaseOblVieilSal;

    /**
     * Code regime btp.
     *
     * @var string|null
     */
    private $codeRegimeBtp;

    /**
     * Code statut categ.
     *
     * @var string|null
     */
    private $codeStatutCateg;

    /**
     * Code statut categ conv.
     *
     * @var string|null
     */
    private $codeStatutCategConv;

    /**
     * Code statut categ irc.
     *
     * @var string|null
     */
    private $codeStatutCategIrc;

    /**
     * Code statut pro.
     *
     * @var string|null
     */
    private $codeStatutPro;

    /**
     * Code type exo1.
     *
     * @var string|null
     */
    private $codeTypeExo1;

    /**
     * Code type exo2.
     *
     * @var string|null
     */
    private $codeTypeExo2;

    /**
     * Code type exo3.
     *
     * @var string|null
     */
    private $codeTypeExo3;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Complement lieu trav.
     *
     * @var string|null
     */
    private $complementLieuTrav;

    /**
     * Dadsu conjoint salarie.
     *
     * @var string|null
     */
    private $dadsuConjointSalarie;

    /**
     * Dadsu nb options.
     *
     * @var float|null
     */
    private $dadsuNbOptions;

    /**
     * Dadsu prix souscript opt.
     *
     * @var float|null
     */
    private $dadsuPrixSouscriptOpt;

    /**
     * Dadsu valeur action.
     *
     * @var float|null
     */
    private $dadsuValeurAction;

    /**
     * Date ctrl norme.
     *
     * @var DateTime|null
     */
    private $dateCtrlNorme;

    /**
     * Date ctrl norme btp.
     *
     * @var DateTime|null
     */
    private $dateCtrlNormeBtp;

    /**
     * Date ctrl norme prev.
     *
     * @var DateTime|null
     */
    private $dateCtrlNormePrev;

    /**
     * Date ctrl norme ret.
     *
     * @var DateTime|null
     */
    private $dateCtrlNormeRet;

    /**
     * Debut periode decl.
     *
     * @var DateTime|null
     */
    private $debutPeriodeDecl;

    /**
     * Echelon.
     *
     * @var string|null
     */
    private $echelon;

    /**
     * Emploi.
     *
     * @var string|null
     */
    private $emploi;

    /**
     * Epargne sal code1.
     *
     * @var string|null
     */
    private $epargneSalCode1;

    /**
     * Epargne sal code2.
     *
     * @var string|null
     */
    private $epargneSalCode2;

    /**
     * Epargne sal code3.
     *
     * @var string|null
     */
    private $epargneSalCode3;

    /**
     * Epargne sal code4.
     *
     * @var string|null
     */
    private $epargneSalCode4;

    /**
     * Epargne sal mnt1.
     *
     * @var float|null
     */
    private $epargneSalMnt1;

    /**
     * Epargne sal mnt2.
     *
     * @var float|null
     */
    private $epargneSalMnt2;

    /**
     * Epargne sal mnt3.
     *
     * @var float|null
     */
    private $epargneSalMnt3;

    /**
     * Epargne sal mnt4.
     *
     * @var float|null
     */
    private $epargneSalMnt4;

    /**
     * Etat ctrl norme.
     *
     * @var string|null
     */
    private $etatCtrlNorme;

    /**
     * Etat ctrl norme btp.
     *
     * @var string|null
     */
    private $etatCtrlNormeBtp;

    /**
     * Etat ctrl norme prev.
     *
     * @var string|null
     */
    private $etatCtrlNormePrev;

    /**
     * Etat ctrl norme ret.
     *
     * @var string|null
     */
    private $etatCtrlNormeRet;

    /**
     * Exo agff.
     *
     * @var bool|null
     */
    private $exoAgff;

    /**
     * Fin periode decl.
     *
     * @var DateTime|null
     */
    private $finPeriodeDecl;

    /**
     * Gpec mnt exo cot secu.
     *
     * @var float|null
     */
    private $gpecMntExoCotSecu;

    /**
     * Gpec mnt exo csgcrds.
     *
     * @var float|null
     */
    private $gpecMntExoCsgcrds;

    /**
     * Indemn cp plaf.
     *
     * @var float|null
     */
    private $indemnCpPlaf;

    /**
     * Indemn rupture code1.
     *
     * @var string|null
     */
    private $indemnRuptureCode1;

    /**
     * Indemn rupture code2.
     *
     * @var string|null
     */
    private $indemnRuptureCode2;

    /**
     * Indemn rupture mnt1.
     *
     * @var float|null
     */
    private $indemnRuptureMnt1;

    /**
     * Indemn rupture mnt2.
     *
     * @var float|null
     */
    private $indemnRuptureMnt2;

    /**
     * Indice.
     *
     * @var string|null
     */
    private $indice;

    /**
     * Nb periodicite ircantec.
     *
     * @var float|null
     */
    private $nbPeriodiciteIrcantec;

    /**
     * Nbh etab btp.
     *
     * @var float|null
     */
    private $nbhEtabBtp;

    /**
     * Nbh sal btp.
     *
     * @var float|null
     */
    private $nbhSalBtp;

    /**
     * Nic etab affectation.
     *
     * @var string|null
     */
    private $nicEtabAffectation;

    /**
     * Niveau.
     *
     * @var string|null
     */
    private $niveau;

    /**
     * Nom ville insee lieu trav.
     *
     * @var string|null
     */
    private $nomVilleInseeLieuTrav;

    /**
     * Nom ville lieu trav.
     *
     * @var string|null
     */
    private $nomVilleLieuTrav;

    /**
     * Nom voie lieu trav.
     *
     * @var string|null
     */
    private $nomVoieLieuTrav;

    /**
     * Num voie lieu trav.
     *
     * @var string|null
     */
    private $numVoieLieuTrav;

    /**
     * Numero.
     *
     * @var string|null
     */
    private $numero;

    /**
     * Numero adhesion btp.
     *
     * @var string|null
     */
    private $numeroAdhesionBtp;

    /**
     * Numero affil fnc.
     *
     * @var string|null
     */
    private $numeroAffilFnc;

    /**
     * Numero ordre.
     *
     * @var int|null
     */
    private $numeroOrdre;

    /**
     * Numero rattach1.
     *
     * @var string|null
     */
    private $numeroRattach1;

    /**
     * Numero rattach2.
     *
     * @var string|null
     */
    private $numeroRattach2;

    /**
     * Numero rattach3.
     *
     * @var string|null
     */
    private $numeroRattach3;

    /**
     * Numero rattach btp.
     *
     * @var string|null
     */
    private $numeroRattachBtp;

    /**
     * Particip patron avtge code1.
     *
     * @var string|null
     */
    private $participPatronAvtgeCode1;

    /**
     * Particip patron avtge code2.
     *
     * @var string|null
     */
    private $participPatronAvtgeCode2;

    /**
     * Particip patron avtge mnt1.
     *
     * @var float|null
     */
    private $participPatronAvtgeMnt1;

    /**
     * Particip patron avtge mnt2.
     *
     * @var float|null
     */
    private $participPatronAvtgeMnt2;

    /**
     * Periodicite ircantec.
     *
     * @var string|null
     */
    private $periodiciteIrcantec;

    /**
     * Position.
     *
     * @var string|null
     */
    private $position;

    /**
     * Pourcent act.
     *
     * @var float|null
     */
    private $pourcentAct;

    /**
     * Remun medecins.
     *
     * @var float|null
     */
    private $remunMedecins;

    /**
     * Siret lieu trav.
     *
     * @var string|null
     */
    private $siretLieuTrav;

    /**
     * Statut cotisant btp.
     *
     * @var string|null
     */
    private $statutCotisantBtp;

    /**
     * Suppl fam.
     *
     * @var float|null
     */
    private $supplFam;

    /**
     * Tds59.
     *
     * @var string|null
     */
    private $tds59;

    /**
     * Type affil btp.
     *
     * @var string|null
     */
    private $typeAffilBtp;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the actions gratuites nbre.
     *
     * @return float|null Returns the actions gratuites nbre.
     */
    public function getActionsGratuitesNbre(): ?float {
        return $this->actionsGratuitesNbre;
    }

    /**
     * Get the actions gratuites valeur u.
     *
     * @return float|null Returns the actions gratuites valeur u.
     */
    public function getActionsGratuitesValeurU(): ?float {
        return $this->actionsGratuitesValeurU;
    }

    /**
     * Get the anciennete.
     *
     * @return float|null Returns the anciennete.
     */
    public function getAnciennete(): ?float {
        return $this->anciennete;
    }

    /**
     * Get the anciennete btp.
     *
     * @return float|null Returns the anciennete btp.
     */
    public function getAncienneteBtp(): ?float {
        return $this->ancienneteBtp;
    }

    /**
     * Get the annee prepa.
     *
     * @return int|null Returns the annee prepa.
     */
    public function getAnneePrepa(): ?int {
        return $this->anneePrepa;
    }

    /**
     * Get the at bureau.
     *
     * @return string|null Returns the at bureau.
     */
    public function getAtBureau(): ?string {
        return $this->atBureau;
    }

    /**
     * Get the at etab.
     *
     * @return string|null Returns the at etab.
     */
    public function getAtEtab(): ?string {
        return $this->atEtab;
    }

    /**
     * Get the at risque.
     *
     * @return string|null Returns the at risque.
     */
    public function getAtRisque(): ?string {
        return $this->atRisque;
    }

    /**
     * Get the at taux.
     *
     * @return float|null Returns the at taux.
     */
    public function getAtTaux(): ?float {
        return $this->atTaux;
    }

    /**
     * Get the autres sommes exo code1.
     *
     * @return string|null Returns the autres sommes exo code1.
     */
    public function getAutresSommesExoCode1(): ?string {
        return $this->autresSommesExoCode1;
    }

    /**
     * Get the autres sommes exo code2.
     *
     * @return string|null Returns the autres sommes exo code2.
     */
    public function getAutresSommesExoCode2(): ?string {
        return $this->autresSommesExoCode2;
    }

    /**
     * Get the autres sommes exo code3.
     *
     * @return string|null Returns the autres sommes exo code3.
     */
    public function getAutresSommesExoCode3(): ?string {
        return $this->autresSommesExoCode3;
    }

    /**
     * Get the autres sommes exo code4.
     *
     * @return string|null Returns the autres sommes exo code4.
     */
    public function getAutresSommesExoCode4(): ?string {
        return $this->autresSommesExoCode4;
    }

    /**
     * Get the autres sommes exo mnt1.
     *
     * @return float|null Returns the autres sommes exo mnt1.
     */
    public function getAutresSommesExoMnt1(): ?float {
        return $this->autresSommesExoMnt1;
    }

    /**
     * Get the autres sommes exo mnt2.
     *
     * @return float|null Returns the autres sommes exo mnt2.
     */
    public function getAutresSommesExoMnt2(): ?float {
        return $this->autresSommesExoMnt2;
    }

    /**
     * Get the autres sommes exo mnt3.
     *
     * @return float|null Returns the autres sommes exo mnt3.
     */
    public function getAutresSommesExoMnt3(): ?float {
        return $this->autresSommesExoMnt3;
    }

    /**
     * Get the autres sommes exo mnt4.
     *
     * @return float|null Returns the autres sommes exo mnt4.
     */
    public function getAutresSommesExoMnt4(): ?float {
        return $this->autresSommesExoMnt4;
    }

    /**
     * Get the base exo brut1.
     *
     * @return float|null Returns the base exo brut1.
     */
    public function getBaseExoBrut1(): ?float {
        return $this->baseExoBrut1;
    }

    /**
     * Get the base exo brut2.
     *
     * @return float|null Returns the base exo brut2.
     */
    public function getBaseExoBrut2(): ?float {
        return $this->baseExoBrut2;
    }

    /**
     * Get the base exo brut3.
     *
     * @return float|null Returns the base exo brut3.
     */
    public function getBaseExoBrut3(): ?float {
        return $this->baseExoBrut3;
    }

    /**
     * Get the base exo plaf1.
     *
     * @return float|null Returns the base exo plaf1.
     */
    public function getBaseExoPlaf1(): ?float {
        return $this->baseExoPlaf1;
    }

    /**
     * Get the base exo plaf2.
     *
     * @return float|null Returns the base exo plaf2.
     */
    public function getBaseExoPlaf2(): ?float {
        return $this->baseExoPlaf2;
    }

    /**
     * Get the base exo plaf3.
     *
     * @return float|null Returns the base exo plaf3.
     */
    public function getBaseExoPlaf3(): ?float {
        return $this->baseExoPlaf3;
    }

    /**
     * Get the btq lieu trav.
     *
     * @return string|null Returns the btq lieu trav.
     */
    public function getBtqLieuTrav(): ?string {
        return $this->btqLieuTrav;
    }

    /**
     * Get the bureau distributeur lieu trav.
     *
     * @return string|null Returns the bureau distributeur lieu trav.
     */
    public function getBureauDistributeurLieuTrav(): ?string {
        return $this->bureauDistributeurLieuTrav;
    }

    /**
     * Get the categorie btp.
     *
     * @return string|null Returns the categorie btp.
     */
    public function getCategorieBtp(): ?string {
        return $this->categorieBtp;
    }

    /**
     * Get the code caract.
     *
     * @return string|null Returns the code caract.
     */
    public function getCodeCaract(): ?string {
        return $this->codeCaract;
    }

    /**
     * Get the code classe cnbf.
     *
     * @return string|null Returns the code classe cnbf.
     */
    public function getCodeClasseCnbf(): ?string {
        return $this->codeClasseCnbf;
    }

    /**
     * Get the code contrat trav.
     *
     * @return string|null Returns the code contrat trav.
     */
    public function getCodeContratTrav(): ?string {
        return $this->codeContratTrav;
    }

    /**
     * Get the code convention col.
     *
     * @return string|null Returns the code convention col.
     */
    public function getCodeConventionCol(): ?string {
        return $this->codeConventionCol;
    }

    /**
     * Get the code decalage paie.
     *
     * @return string|null Returns the code decalage paie.
     */
    public function getCodeDecalagePaie(): ?string {
        return $this->codeDecalagePaie;
    }

    /**
     * Get the code deleg gest risque maladie.
     *
     * @return string|null Returns the code deleg gest risque maladie.
     */
    public function getCodeDelegGestRisqueMaladie(): ?string {
        return $this->codeDelegGestRisqueMaladie;
    }

    /**
     * Get the code droit contrat.
     *
     * @return string|null Returns the code droit contrat.
     */
    public function getCodeDroitContrat(): ?string {
        return $this->codeDroitContrat;
    }

    /**
     * Get the code empl mult.
     *
     * @return string|null Returns the code empl mult.
     */
    public function getCodeEmplMult(): ?string {
        return $this->codeEmplMult;
    }

    /**
     * Get the code emplois mult.
     *
     * @return string|null Returns the code emplois mult.
     */
    public function getCodeEmploisMult(): ?string {
        return $this->codeEmploisMult;
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the code etat contrat prud.
     *
     * @return string|null Returns the code etat contrat prud.
     */
    public function getCodeEtatContratPrud(): ?string {
        return $this->codeEtatContratPrud;
    }

    /**
     * Get the code extension alsace moselle.
     *
     * @return string|null Returns the code extension alsace moselle.
     */
    public function getCodeExtensionAlsaceMoselle(): ?string {
        return $this->codeExtensionAlsaceMoselle;
    }

    /**
     * Get the code insee lieu trav.
     *
     * @return string|null Returns the code insee lieu trav.
     */
    public function getCodeInseeLieuTrav(): ?string {
        return $this->codeInseeLieuTrav;
    }

    /**
     * Get the code motif deb per.
     *
     * @return string|null Returns the code motif deb per.
     */
    public function getCodeMotifDebPer(): ?string {
        return $this->codeMotifDebPer;
    }

    /**
     * Get the code motif deb per2.
     *
     * @return string|null Returns the code motif deb per2.
     */
    public function getCodeMotifDebPer2(): ?string {
        return $this->codeMotifDebPer2;
    }

    /**
     * Get the code motif deb per3.
     *
     * @return string|null Returns the code motif deb per3.
     */
    public function getCodeMotifDebPer3(): ?string {
        return $this->codeMotifDebPer3;
    }

    /**
     * Get the code motif deb per4.
     *
     * @return string|null Returns the code motif deb per4.
     */
    public function getCodeMotifDebPer4(): ?string {
        return $this->codeMotifDebPer4;
    }

    /**
     * Get the code motif deb per5.
     *
     * @return string|null Returns the code motif deb per5.
     */
    public function getCodeMotifDebPer5(): ?string {
        return $this->codeMotifDebPer5;
    }

    /**
     * Get the code motif fin per.
     *
     * @return string|null Returns the code motif fin per.
     */
    public function getCodeMotifFinPer(): ?string {
        return $this->codeMotifFinPer;
    }

    /**
     * Get the code motif fin per2.
     *
     * @return string|null Returns the code motif fin per2.
     */
    public function getCodeMotifFinPer2(): ?string {
        return $this->codeMotifFinPer2;
    }

    /**
     * Get the code motif fin per3.
     *
     * @return string|null Returns the code motif fin per3.
     */
    public function getCodeMotifFinPer3(): ?string {
        return $this->codeMotifFinPer3;
    }

    /**
     * Get the code motif fin per4.
     *
     * @return string|null Returns the code motif fin per4.
     */
    public function getCodeMotifFinPer4(): ?string {
        return $this->codeMotifFinPer4;
    }

    /**
     * Get the code motif fin per5.
     *
     * @return string|null Returns the code motif fin per5.
     */
    public function getCodeMotifFinPer5(): ?string {
        return $this->codeMotifFinPer5;
    }

    /**
     * Get the code nature base cotisations.
     *
     * @return string|null Returns the code nature base cotisations.
     */
    public function getCodeNatureBaseCotisations(): ?string {
        return $this->codeNatureBaseCotisations;
    }

    /**
     * Get the code officiel commune lieu trav.
     *
     * @return string|null Returns the code officiel commune lieu trav.
     */
    public function getCodeOfficielCommuneLieuTrav(): ?string {
        return $this->codeOfficielCommuneLieuTrav;
    }

    /**
     * Get the code postal lieu trav.
     *
     * @return string|null Returns the code postal lieu trav.
     */
    public function getCodePostalLieuTrav(): ?string {
        return $this->codePostalLieuTrav;
    }

    /**
     * Get the code regime1.
     *
     * @return string|null Returns the code regime1.
     */
    public function getCodeRegime1(): ?string {
        return $this->codeRegime1;
    }

    /**
     * Get the code regime2.
     *
     * @return string|null Returns the code regime2.
     */
    public function getCodeRegime2(): ?string {
        return $this->codeRegime2;
    }

    /**
     * Get the code regime3.
     *
     * @return string|null Returns the code regime3.
     */
    public function getCodeRegime3(): ?string {
        return $this->codeRegime3;
    }

    /**
     * Get the code regime base obl.
     *
     * @return string|null Returns the code regime base obl.
     */
    public function getCodeRegimeBaseObl(): ?string {
        return $this->codeRegimeBaseObl;
    }

    /**
     * Get the code regime base obl at.
     *
     * @return string|null Returns the code regime base obl at.
     */
    public function getCodeRegimeBaseOblAt(): ?string {
        return $this->codeRegimeBaseOblAt;
    }

    /**
     * Get the code regime base obl maladie.
     *
     * @return string|null Returns the code regime base obl maladie.
     */
    public function getCodeRegimeBaseOblMaladie(): ?string {
        return $this->codeRegimeBaseOblMaladie;
    }

    /**
     * Get the code regime base obl vieil pat.
     *
     * @return string|null Returns the code regime base obl vieil pat.
     */
    public function getCodeRegimeBaseOblVieilPat(): ?string {
        return $this->codeRegimeBaseOblVieilPat;
    }

    /**
     * Get the code regime base obl vieil sal.
     *
     * @return string|null Returns the code regime base obl vieil sal.
     */
    public function getCodeRegimeBaseOblVieilSal(): ?string {
        return $this->codeRegimeBaseOblVieilSal;
    }

    /**
     * Get the code regime btp.
     *
     * @return string|null Returns the code regime btp.
     */
    public function getCodeRegimeBtp(): ?string {
        return $this->codeRegimeBtp;
    }

    /**
     * Get the code statut categ.
     *
     * @return string|null Returns the code statut categ.
     */
    public function getCodeStatutCateg(): ?string {
        return $this->codeStatutCateg;
    }

    /**
     * Get the code statut categ conv.
     *
     * @return string|null Returns the code statut categ conv.
     */
    public function getCodeStatutCategConv(): ?string {
        return $this->codeStatutCategConv;
    }

    /**
     * Get the code statut categ irc.
     *
     * @return string|null Returns the code statut categ irc.
     */
    public function getCodeStatutCategIrc(): ?string {
        return $this->codeStatutCategIrc;
    }

    /**
     * Get the code statut pro.
     *
     * @return string|null Returns the code statut pro.
     */
    public function getCodeStatutPro(): ?string {
        return $this->codeStatutPro;
    }

    /**
     * Get the code type exo1.
     *
     * @return string|null Returns the code type exo1.
     */
    public function getCodeTypeExo1(): ?string {
        return $this->codeTypeExo1;
    }

    /**
     * Get the code type exo2.
     *
     * @return string|null Returns the code type exo2.
     */
    public function getCodeTypeExo2(): ?string {
        return $this->codeTypeExo2;
    }

    /**
     * Get the code type exo3.
     *
     * @return string|null Returns the code type exo3.
     */
    public function getCodeTypeExo3(): ?string {
        return $this->codeTypeExo3;
    }

    /**
     * Get the commentaire.
     *
     * @return string|null Returns the commentaire.
     */
    public function getCommentaire(): ?string {
        return $this->commentaire;
    }

    /**
     * Get the complement lieu trav.
     *
     * @return string|null Returns the complement lieu trav.
     */
    public function getComplementLieuTrav(): ?string {
        return $this->complementLieuTrav;
    }

    /**
     * Get the dadsu conjoint salarie.
     *
     * @return string|null Returns the dadsu conjoint salarie.
     */
    public function getDadsuConjointSalarie(): ?string {
        return $this->dadsuConjointSalarie;
    }

    /**
     * Get the dadsu nb options.
     *
     * @return float|null Returns the dadsu nb options.
     */
    public function getDadsuNbOptions(): ?float {
        return $this->dadsuNbOptions;
    }

    /**
     * Get the dadsu prix souscript opt.
     *
     * @return float|null Returns the dadsu prix souscript opt.
     */
    public function getDadsuPrixSouscriptOpt(): ?float {
        return $this->dadsuPrixSouscriptOpt;
    }

    /**
     * Get the dadsu valeur action.
     *
     * @return float|null Returns the dadsu valeur action.
     */
    public function getDadsuValeurAction(): ?float {
        return $this->dadsuValeurAction;
    }

    /**
     * Get the date ctrl norme.
     *
     * @return DateTime|null Returns the date ctrl norme.
     */
    public function getDateCtrlNorme(): ?DateTime {
        return $this->dateCtrlNorme;
    }

    /**
     * Get the date ctrl norme btp.
     *
     * @return DateTime|null Returns the date ctrl norme btp.
     */
    public function getDateCtrlNormeBtp(): ?DateTime {
        return $this->dateCtrlNormeBtp;
    }

    /**
     * Get the date ctrl norme prev.
     *
     * @return DateTime|null Returns the date ctrl norme prev.
     */
    public function getDateCtrlNormePrev(): ?DateTime {
        return $this->dateCtrlNormePrev;
    }

    /**
     * Get the date ctrl norme ret.
     *
     * @return DateTime|null Returns the date ctrl norme ret.
     */
    public function getDateCtrlNormeRet(): ?DateTime {
        return $this->dateCtrlNormeRet;
    }

    /**
     * Get the debut periode decl.
     *
     * @return DateTime|null Returns the debut periode decl.
     */
    public function getDebutPeriodeDecl(): ?DateTime {
        return $this->debutPeriodeDecl;
    }

    /**
     * Get the echelon.
     *
     * @return string|null Returns the echelon.
     */
    public function getEchelon(): ?string {
        return $this->echelon;
    }

    /**
     * Get the emploi.
     *
     * @return string|null Returns the emploi.
     */
    public function getEmploi(): ?string {
        return $this->emploi;
    }

    /**
     * Get the epargne sal code1.
     *
     * @return string|null Returns the epargne sal code1.
     */
    public function getEpargneSalCode1(): ?string {
        return $this->epargneSalCode1;
    }

    /**
     * Get the epargne sal code2.
     *
     * @return string|null Returns the epargne sal code2.
     */
    public function getEpargneSalCode2(): ?string {
        return $this->epargneSalCode2;
    }

    /**
     * Get the epargne sal code3.
     *
     * @return string|null Returns the epargne sal code3.
     */
    public function getEpargneSalCode3(): ?string {
        return $this->epargneSalCode3;
    }

    /**
     * Get the epargne sal code4.
     *
     * @return string|null Returns the epargne sal code4.
     */
    public function getEpargneSalCode4(): ?string {
        return $this->epargneSalCode4;
    }

    /**
     * Get the epargne sal mnt1.
     *
     * @return float|null Returns the epargne sal mnt1.
     */
    public function getEpargneSalMnt1(): ?float {
        return $this->epargneSalMnt1;
    }

    /**
     * Get the epargne sal mnt2.
     *
     * @return float|null Returns the epargne sal mnt2.
     */
    public function getEpargneSalMnt2(): ?float {
        return $this->epargneSalMnt2;
    }

    /**
     * Get the epargne sal mnt3.
     *
     * @return float|null Returns the epargne sal mnt3.
     */
    public function getEpargneSalMnt3(): ?float {
        return $this->epargneSalMnt3;
    }

    /**
     * Get the epargne sal mnt4.
     *
     * @return float|null Returns the epargne sal mnt4.
     */
    public function getEpargneSalMnt4(): ?float {
        return $this->epargneSalMnt4;
    }

    /**
     * Get the etat ctrl norme.
     *
     * @return string|null Returns the etat ctrl norme.
     */
    public function getEtatCtrlNorme(): ?string {
        return $this->etatCtrlNorme;
    }

    /**
     * Get the etat ctrl norme btp.
     *
     * @return string|null Returns the etat ctrl norme btp.
     */
    public function getEtatCtrlNormeBtp(): ?string {
        return $this->etatCtrlNormeBtp;
    }

    /**
     * Get the etat ctrl norme prev.
     *
     * @return string|null Returns the etat ctrl norme prev.
     */
    public function getEtatCtrlNormePrev(): ?string {
        return $this->etatCtrlNormePrev;
    }

    /**
     * Get the etat ctrl norme ret.
     *
     * @return string|null Returns the etat ctrl norme ret.
     */
    public function getEtatCtrlNormeRet(): ?string {
        return $this->etatCtrlNormeRet;
    }

    /**
     * Get the exo agff.
     *
     * @return bool|null Returns the exo agff.
     */
    public function getExoAgff(): ?bool {
        return $this->exoAgff;
    }

    /**
     * Get the fin periode decl.
     *
     * @return DateTime|null Returns the fin periode decl.
     */
    public function getFinPeriodeDecl(): ?DateTime {
        return $this->finPeriodeDecl;
    }

    /**
     * Get the gpec mnt exo cot secu.
     *
     * @return float|null Returns the gpec mnt exo cot secu.
     */
    public function getGpecMntExoCotSecu(): ?float {
        return $this->gpecMntExoCotSecu;
    }

    /**
     * Get the gpec mnt exo csgcrds.
     *
     * @return float|null Returns the gpec mnt exo csgcrds.
     */
    public function getGpecMntExoCsgcrds(): ?float {
        return $this->gpecMntExoCsgcrds;
    }

    /**
     * Get the indemn cp plaf.
     *
     * @return float|null Returns the indemn cp plaf.
     */
    public function getIndemnCpPlaf(): ?float {
        return $this->indemnCpPlaf;
    }

    /**
     * Get the indemn rupture code1.
     *
     * @return string|null Returns the indemn rupture code1.
     */
    public function getIndemnRuptureCode1(): ?string {
        return $this->indemnRuptureCode1;
    }

    /**
     * Get the indemn rupture code2.
     *
     * @return string|null Returns the indemn rupture code2.
     */
    public function getIndemnRuptureCode2(): ?string {
        return $this->indemnRuptureCode2;
    }

    /**
     * Get the indemn rupture mnt1.
     *
     * @return float|null Returns the indemn rupture mnt1.
     */
    public function getIndemnRuptureMnt1(): ?float {
        return $this->indemnRuptureMnt1;
    }

    /**
     * Get the indemn rupture mnt2.
     *
     * @return float|null Returns the indemn rupture mnt2.
     */
    public function getIndemnRuptureMnt2(): ?float {
        return $this->indemnRuptureMnt2;
    }

    /**
     * Get the indice.
     *
     * @return string|null Returns the indice.
     */
    public function getIndice(): ?string {
        return $this->indice;
    }

    /**
     * Get the nb periodicite ircantec.
     *
     * @return float|null Returns the nb periodicite ircantec.
     */
    public function getNbPeriodiciteIrcantec(): ?float {
        return $this->nbPeriodiciteIrcantec;
    }

    /**
     * Get the nbh etab btp.
     *
     * @return float|null Returns the nbh etab btp.
     */
    public function getNbhEtabBtp(): ?float {
        return $this->nbhEtabBtp;
    }

    /**
     * Get the nbh sal btp.
     *
     * @return float|null Returns the nbh sal btp.
     */
    public function getNbhSalBtp(): ?float {
        return $this->nbhSalBtp;
    }

    /**
     * Get the nic etab affectation.
     *
     * @return string|null Returns the nic etab affectation.
     */
    public function getNicEtabAffectation(): ?string {
        return $this->nicEtabAffectation;
    }

    /**
     * Get the niveau.
     *
     * @return string|null Returns the niveau.
     */
    public function getNiveau(): ?string {
        return $this->niveau;
    }

    /**
     * Get the nom ville insee lieu trav.
     *
     * @return string|null Returns the nom ville insee lieu trav.
     */
    public function getNomVilleInseeLieuTrav(): ?string {
        return $this->nomVilleInseeLieuTrav;
    }

    /**
     * Get the nom ville lieu trav.
     *
     * @return string|null Returns the nom ville lieu trav.
     */
    public function getNomVilleLieuTrav(): ?string {
        return $this->nomVilleLieuTrav;
    }

    /**
     * Get the nom voie lieu trav.
     *
     * @return string|null Returns the nom voie lieu trav.
     */
    public function getNomVoieLieuTrav(): ?string {
        return $this->nomVoieLieuTrav;
    }

    /**
     * Get the num voie lieu trav.
     *
     * @return string|null Returns the num voie lieu trav.
     */
    public function getNumVoieLieuTrav(): ?string {
        return $this->numVoieLieuTrav;
    }

    /**
     * Get the numero.
     *
     * @return string|null Returns the numero.
     */
    public function getNumero(): ?string {
        return $this->numero;
    }

    /**
     * Get the numero adhesion btp.
     *
     * @return string|null Returns the numero adhesion btp.
     */
    public function getNumeroAdhesionBtp(): ?string {
        return $this->numeroAdhesionBtp;
    }

    /**
     * Get the numero affil fnc.
     *
     * @return string|null Returns the numero affil fnc.
     */
    public function getNumeroAffilFnc(): ?string {
        return $this->numeroAffilFnc;
    }

    /**
     * Get the numero ordre.
     *
     * @return int|null Returns the numero ordre.
     */
    public function getNumeroOrdre(): ?int {
        return $this->numeroOrdre;
    }

    /**
     * Get the numero rattach1.
     *
     * @return string|null Returns the numero rattach1.
     */
    public function getNumeroRattach1(): ?string {
        return $this->numeroRattach1;
    }

    /**
     * Get the numero rattach2.
     *
     * @return string|null Returns the numero rattach2.
     */
    public function getNumeroRattach2(): ?string {
        return $this->numeroRattach2;
    }

    /**
     * Get the numero rattach3.
     *
     * @return string|null Returns the numero rattach3.
     */
    public function getNumeroRattach3(): ?string {
        return $this->numeroRattach3;
    }

    /**
     * Get the numero rattach btp.
     *
     * @return string|null Returns the numero rattach btp.
     */
    public function getNumeroRattachBtp(): ?string {
        return $this->numeroRattachBtp;
    }

    /**
     * Get the particip patron avtge code1.
     *
     * @return string|null Returns the particip patron avtge code1.
     */
    public function getParticipPatronAvtgeCode1(): ?string {
        return $this->participPatronAvtgeCode1;
    }

    /**
     * Get the particip patron avtge code2.
     *
     * @return string|null Returns the particip patron avtge code2.
     */
    public function getParticipPatronAvtgeCode2(): ?string {
        return $this->participPatronAvtgeCode2;
    }

    /**
     * Get the particip patron avtge mnt1.
     *
     * @return float|null Returns the particip patron avtge mnt1.
     */
    public function getParticipPatronAvtgeMnt1(): ?float {
        return $this->participPatronAvtgeMnt1;
    }

    /**
     * Get the particip patron avtge mnt2.
     *
     * @return float|null Returns the particip patron avtge mnt2.
     */
    public function getParticipPatronAvtgeMnt2(): ?float {
        return $this->participPatronAvtgeMnt2;
    }

    /**
     * Get the periodicite ircantec.
     *
     * @return string|null Returns the periodicite ircantec.
     */
    public function getPeriodiciteIrcantec(): ?string {
        return $this->periodiciteIrcantec;
    }

    /**
     * Get the position.
     *
     * @return string|null Returns the position.
     */
    public function getPosition(): ?string {
        return $this->position;
    }

    /**
     * Get the pourcent act.
     *
     * @return float|null Returns the pourcent act.
     */
    public function getPourcentAct(): ?float {
        return $this->pourcentAct;
    }

    /**
     * Get the remun medecins.
     *
     * @return float|null Returns the remun medecins.
     */
    public function getRemunMedecins(): ?float {
        return $this->remunMedecins;
    }

    /**
     * Get the siret lieu trav.
     *
     * @return string|null Returns the siret lieu trav.
     */
    public function getSiretLieuTrav(): ?string {
        return $this->siretLieuTrav;
    }

    /**
     * Get the statut cotisant btp.
     *
     * @return string|null Returns the statut cotisant btp.
     */
    public function getStatutCotisantBtp(): ?string {
        return $this->statutCotisantBtp;
    }

    /**
     * Get the suppl fam.
     *
     * @return float|null Returns the suppl fam.
     */
    public function getSupplFam(): ?float {
        return $this->supplFam;
    }

    /**
     * Get the tds59.
     *
     * @return string|null Returns the tds59.
     */
    public function getTds59(): ?string {
        return $this->tds59;
    }

    /**
     * Get the type affil btp.
     *
     * @return string|null Returns the type affil btp.
     */
    public function getTypeAffilBtp(): ?string {
        return $this->typeAffilBtp;
    }

    /**
     * Set the actions gratuites nbre.
     *
     * @param float|null $actionsGratuitesNbre The actions gratuites nbre.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setActionsGratuitesNbre(?float $actionsGratuitesNbre): EmpDadsuParam {
        $this->actionsGratuitesNbre = $actionsGratuitesNbre;
        return $this;
    }

    /**
     * Set the actions gratuites valeur u.
     *
     * @param float|null $actionsGratuitesValeurU The actions gratuites valeur u.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setActionsGratuitesValeurU(?float $actionsGratuitesValeurU): EmpDadsuParam {
        $this->actionsGratuitesValeurU = $actionsGratuitesValeurU;
        return $this;
    }

    /**
     * Set the anciennete.
     *
     * @param float|null $anciennete The anciennete.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAnciennete(?float $anciennete): EmpDadsuParam {
        $this->anciennete = $anciennete;
        return $this;
    }

    /**
     * Set the anciennete btp.
     *
     * @param float|null $ancienneteBtp The anciennete btp.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAncienneteBtp(?float $ancienneteBtp): EmpDadsuParam {
        $this->ancienneteBtp = $ancienneteBtp;
        return $this;
    }

    /**
     * Set the annee prepa.
     *
     * @param int|null $anneePrepa The annee prepa.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAnneePrepa(?int $anneePrepa): EmpDadsuParam {
        $this->anneePrepa = $anneePrepa;
        return $this;
    }

    /**
     * Set the at bureau.
     *
     * @param string|null $atBureau The at bureau.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAtBureau(?string $atBureau): EmpDadsuParam {
        $this->atBureau = $atBureau;
        return $this;
    }

    /**
     * Set the at etab.
     *
     * @param string|null $atEtab The at etab.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAtEtab(?string $atEtab): EmpDadsuParam {
        $this->atEtab = $atEtab;
        return $this;
    }

    /**
     * Set the at risque.
     *
     * @param string|null $atRisque The at risque.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAtRisque(?string $atRisque): EmpDadsuParam {
        $this->atRisque = $atRisque;
        return $this;
    }

    /**
     * Set the at taux.
     *
     * @param float|null $atTaux The at taux.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAtTaux(?float $atTaux): EmpDadsuParam {
        $this->atTaux = $atTaux;
        return $this;
    }

    /**
     * Set the autres sommes exo code1.
     *
     * @param string|null $autresSommesExoCode1 The autres sommes exo code1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAutresSommesExoCode1(?string $autresSommesExoCode1): EmpDadsuParam {
        $this->autresSommesExoCode1 = $autresSommesExoCode1;
        return $this;
    }

    /**
     * Set the autres sommes exo code2.
     *
     * @param string|null $autresSommesExoCode2 The autres sommes exo code2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAutresSommesExoCode2(?string $autresSommesExoCode2): EmpDadsuParam {
        $this->autresSommesExoCode2 = $autresSommesExoCode2;
        return $this;
    }

    /**
     * Set the autres sommes exo code3.
     *
     * @param string|null $autresSommesExoCode3 The autres sommes exo code3.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAutresSommesExoCode3(?string $autresSommesExoCode3): EmpDadsuParam {
        $this->autresSommesExoCode3 = $autresSommesExoCode3;
        return $this;
    }

    /**
     * Set the autres sommes exo code4.
     *
     * @param string|null $autresSommesExoCode4 The autres sommes exo code4.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAutresSommesExoCode4(?string $autresSommesExoCode4): EmpDadsuParam {
        $this->autresSommesExoCode4 = $autresSommesExoCode4;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt1.
     *
     * @param float|null $autresSommesExoMnt1 The autres sommes exo mnt1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAutresSommesExoMnt1(?float $autresSommesExoMnt1): EmpDadsuParam {
        $this->autresSommesExoMnt1 = $autresSommesExoMnt1;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt2.
     *
     * @param float|null $autresSommesExoMnt2 The autres sommes exo mnt2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAutresSommesExoMnt2(?float $autresSommesExoMnt2): EmpDadsuParam {
        $this->autresSommesExoMnt2 = $autresSommesExoMnt2;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt3.
     *
     * @param float|null $autresSommesExoMnt3 The autres sommes exo mnt3.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAutresSommesExoMnt3(?float $autresSommesExoMnt3): EmpDadsuParam {
        $this->autresSommesExoMnt3 = $autresSommesExoMnt3;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt4.
     *
     * @param float|null $autresSommesExoMnt4 The autres sommes exo mnt4.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setAutresSommesExoMnt4(?float $autresSommesExoMnt4): EmpDadsuParam {
        $this->autresSommesExoMnt4 = $autresSommesExoMnt4;
        return $this;
    }

    /**
     * Set the base exo brut1.
     *
     * @param float|null $baseExoBrut1 The base exo brut1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setBaseExoBrut1(?float $baseExoBrut1): EmpDadsuParam {
        $this->baseExoBrut1 = $baseExoBrut1;
        return $this;
    }

    /**
     * Set the base exo brut2.
     *
     * @param float|null $baseExoBrut2 The base exo brut2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setBaseExoBrut2(?float $baseExoBrut2): EmpDadsuParam {
        $this->baseExoBrut2 = $baseExoBrut2;
        return $this;
    }

    /**
     * Set the base exo brut3.
     *
     * @param float|null $baseExoBrut3 The base exo brut3.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setBaseExoBrut3(?float $baseExoBrut3): EmpDadsuParam {
        $this->baseExoBrut3 = $baseExoBrut3;
        return $this;
    }

    /**
     * Set the base exo plaf1.
     *
     * @param float|null $baseExoPlaf1 The base exo plaf1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setBaseExoPlaf1(?float $baseExoPlaf1): EmpDadsuParam {
        $this->baseExoPlaf1 = $baseExoPlaf1;
        return $this;
    }

    /**
     * Set the base exo plaf2.
     *
     * @param float|null $baseExoPlaf2 The base exo plaf2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setBaseExoPlaf2(?float $baseExoPlaf2): EmpDadsuParam {
        $this->baseExoPlaf2 = $baseExoPlaf2;
        return $this;
    }

    /**
     * Set the base exo plaf3.
     *
     * @param float|null $baseExoPlaf3 The base exo plaf3.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setBaseExoPlaf3(?float $baseExoPlaf3): EmpDadsuParam {
        $this->baseExoPlaf3 = $baseExoPlaf3;
        return $this;
    }

    /**
     * Set the btq lieu trav.
     *
     * @param string|null $btqLieuTrav The btq lieu trav.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setBtqLieuTrav(?string $btqLieuTrav): EmpDadsuParam {
        $this->btqLieuTrav = $btqLieuTrav;
        return $this;
    }

    /**
     * Set the bureau distributeur lieu trav.
     *
     * @param string|null $bureauDistributeurLieuTrav The bureau distributeur lieu trav.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setBureauDistributeurLieuTrav(?string $bureauDistributeurLieuTrav): EmpDadsuParam {
        $this->bureauDistributeurLieuTrav = $bureauDistributeurLieuTrav;
        return $this;
    }

    /**
     * Set the categorie btp.
     *
     * @param string|null $categorieBtp The categorie btp.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCategorieBtp(?string $categorieBtp): EmpDadsuParam {
        $this->categorieBtp = $categorieBtp;
        return $this;
    }

    /**
     * Set the code caract.
     *
     * @param string|null $codeCaract The code caract.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeCaract(?string $codeCaract): EmpDadsuParam {
        $this->codeCaract = $codeCaract;
        return $this;
    }

    /**
     * Set the code classe cnbf.
     *
     * @param string|null $codeClasseCnbf The code classe cnbf.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeClasseCnbf(?string $codeClasseCnbf): EmpDadsuParam {
        $this->codeClasseCnbf = $codeClasseCnbf;
        return $this;
    }

    /**
     * Set the code contrat trav.
     *
     * @param string|null $codeContratTrav The code contrat trav.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeContratTrav(?string $codeContratTrav): EmpDadsuParam {
        $this->codeContratTrav = $codeContratTrav;
        return $this;
    }

    /**
     * Set the code convention col.
     *
     * @param string|null $codeConventionCol The code convention col.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeConventionCol(?string $codeConventionCol): EmpDadsuParam {
        $this->codeConventionCol = $codeConventionCol;
        return $this;
    }

    /**
     * Set the code decalage paie.
     *
     * @param string|null $codeDecalagePaie The code decalage paie.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeDecalagePaie(?string $codeDecalagePaie): EmpDadsuParam {
        $this->codeDecalagePaie = $codeDecalagePaie;
        return $this;
    }

    /**
     * Set the code deleg gest risque maladie.
     *
     * @param string|null $codeDelegGestRisqueMaladie The code deleg gest risque maladie.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeDelegGestRisqueMaladie(?string $codeDelegGestRisqueMaladie): EmpDadsuParam {
        $this->codeDelegGestRisqueMaladie = $codeDelegGestRisqueMaladie;
        return $this;
    }

    /**
     * Set the code droit contrat.
     *
     * @param string|null $codeDroitContrat The code droit contrat.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeDroitContrat(?string $codeDroitContrat): EmpDadsuParam {
        $this->codeDroitContrat = $codeDroitContrat;
        return $this;
    }

    /**
     * Set the code empl mult.
     *
     * @param string|null $codeEmplMult The code empl mult.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeEmplMult(?string $codeEmplMult): EmpDadsuParam {
        $this->codeEmplMult = $codeEmplMult;
        return $this;
    }

    /**
     * Set the code emplois mult.
     *
     * @param string|null $codeEmploisMult The code emplois mult.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeEmploisMult(?string $codeEmploisMult): EmpDadsuParam {
        $this->codeEmploisMult = $codeEmploisMult;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeEtablissement(?int $codeEtablissement): EmpDadsuParam {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code etat contrat prud.
     *
     * @param string|null $codeEtatContratPrud The code etat contrat prud.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeEtatContratPrud(?string $codeEtatContratPrud): EmpDadsuParam {
        $this->codeEtatContratPrud = $codeEtatContratPrud;
        return $this;
    }

    /**
     * Set the code extension alsace moselle.
     *
     * @param string|null $codeExtensionAlsaceMoselle The code extension alsace moselle.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeExtensionAlsaceMoselle(?string $codeExtensionAlsaceMoselle): EmpDadsuParam {
        $this->codeExtensionAlsaceMoselle = $codeExtensionAlsaceMoselle;
        return $this;
    }

    /**
     * Set the code insee lieu trav.
     *
     * @param string|null $codeInseeLieuTrav The code insee lieu trav.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeInseeLieuTrav(?string $codeInseeLieuTrav): EmpDadsuParam {
        $this->codeInseeLieuTrav = $codeInseeLieuTrav;
        return $this;
    }

    /**
     * Set the code motif deb per.
     *
     * @param string|null $codeMotifDebPer The code motif deb per.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeMotifDebPer(?string $codeMotifDebPer): EmpDadsuParam {
        $this->codeMotifDebPer = $codeMotifDebPer;
        return $this;
    }

    /**
     * Set the code motif deb per2.
     *
     * @param string|null $codeMotifDebPer2 The code motif deb per2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeMotifDebPer2(?string $codeMotifDebPer2): EmpDadsuParam {
        $this->codeMotifDebPer2 = $codeMotifDebPer2;
        return $this;
    }

    /**
     * Set the code motif deb per3.
     *
     * @param string|null $codeMotifDebPer3 The code motif deb per3.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeMotifDebPer3(?string $codeMotifDebPer3): EmpDadsuParam {
        $this->codeMotifDebPer3 = $codeMotifDebPer3;
        return $this;
    }

    /**
     * Set the code motif deb per4.
     *
     * @param string|null $codeMotifDebPer4 The code motif deb per4.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeMotifDebPer4(?string $codeMotifDebPer4): EmpDadsuParam {
        $this->codeMotifDebPer4 = $codeMotifDebPer4;
        return $this;
    }

    /**
     * Set the code motif deb per5.
     *
     * @param string|null $codeMotifDebPer5 The code motif deb per5.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeMotifDebPer5(?string $codeMotifDebPer5): EmpDadsuParam {
        $this->codeMotifDebPer5 = $codeMotifDebPer5;
        return $this;
    }

    /**
     * Set the code motif fin per.
     *
     * @param string|null $codeMotifFinPer The code motif fin per.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeMotifFinPer(?string $codeMotifFinPer): EmpDadsuParam {
        $this->codeMotifFinPer = $codeMotifFinPer;
        return $this;
    }

    /**
     * Set the code motif fin per2.
     *
     * @param string|null $codeMotifFinPer2 The code motif fin per2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeMotifFinPer2(?string $codeMotifFinPer2): EmpDadsuParam {
        $this->codeMotifFinPer2 = $codeMotifFinPer2;
        return $this;
    }

    /**
     * Set the code motif fin per3.
     *
     * @param string|null $codeMotifFinPer3 The code motif fin per3.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeMotifFinPer3(?string $codeMotifFinPer3): EmpDadsuParam {
        $this->codeMotifFinPer3 = $codeMotifFinPer3;
        return $this;
    }

    /**
     * Set the code motif fin per4.
     *
     * @param string|null $codeMotifFinPer4 The code motif fin per4.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeMotifFinPer4(?string $codeMotifFinPer4): EmpDadsuParam {
        $this->codeMotifFinPer4 = $codeMotifFinPer4;
        return $this;
    }

    /**
     * Set the code motif fin per5.
     *
     * @param string|null $codeMotifFinPer5 The code motif fin per5.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeMotifFinPer5(?string $codeMotifFinPer5): EmpDadsuParam {
        $this->codeMotifFinPer5 = $codeMotifFinPer5;
        return $this;
    }

    /**
     * Set the code nature base cotisations.
     *
     * @param string|null $codeNatureBaseCotisations The code nature base cotisations.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeNatureBaseCotisations(?string $codeNatureBaseCotisations): EmpDadsuParam {
        $this->codeNatureBaseCotisations = $codeNatureBaseCotisations;
        return $this;
    }

    /**
     * Set the code officiel commune lieu trav.
     *
     * @param string|null $codeOfficielCommuneLieuTrav The code officiel commune lieu trav.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeOfficielCommuneLieuTrav(?string $codeOfficielCommuneLieuTrav): EmpDadsuParam {
        $this->codeOfficielCommuneLieuTrav = $codeOfficielCommuneLieuTrav;
        return $this;
    }

    /**
     * Set the code postal lieu trav.
     *
     * @param string|null $codePostalLieuTrav The code postal lieu trav.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodePostalLieuTrav(?string $codePostalLieuTrav): EmpDadsuParam {
        $this->codePostalLieuTrav = $codePostalLieuTrav;
        return $this;
    }

    /**
     * Set the code regime1.
     *
     * @param string|null $codeRegime1 The code regime1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeRegime1(?string $codeRegime1): EmpDadsuParam {
        $this->codeRegime1 = $codeRegime1;
        return $this;
    }

    /**
     * Set the code regime2.
     *
     * @param string|null $codeRegime2 The code regime2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeRegime2(?string $codeRegime2): EmpDadsuParam {
        $this->codeRegime2 = $codeRegime2;
        return $this;
    }

    /**
     * Set the code regime3.
     *
     * @param string|null $codeRegime3 The code regime3.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeRegime3(?string $codeRegime3): EmpDadsuParam {
        $this->codeRegime3 = $codeRegime3;
        return $this;
    }

    /**
     * Set the code regime base obl.
     *
     * @param string|null $codeRegimeBaseObl The code regime base obl.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeRegimeBaseObl(?string $codeRegimeBaseObl): EmpDadsuParam {
        $this->codeRegimeBaseObl = $codeRegimeBaseObl;
        return $this;
    }

    /**
     * Set the code regime base obl at.
     *
     * @param string|null $codeRegimeBaseOblAt The code regime base obl at.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeRegimeBaseOblAt(?string $codeRegimeBaseOblAt): EmpDadsuParam {
        $this->codeRegimeBaseOblAt = $codeRegimeBaseOblAt;
        return $this;
    }

    /**
     * Set the code regime base obl maladie.
     *
     * @param string|null $codeRegimeBaseOblMaladie The code regime base obl maladie.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeRegimeBaseOblMaladie(?string $codeRegimeBaseOblMaladie): EmpDadsuParam {
        $this->codeRegimeBaseOblMaladie = $codeRegimeBaseOblMaladie;
        return $this;
    }

    /**
     * Set the code regime base obl vieil pat.
     *
     * @param string|null $codeRegimeBaseOblVieilPat The code regime base obl vieil pat.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeRegimeBaseOblVieilPat(?string $codeRegimeBaseOblVieilPat): EmpDadsuParam {
        $this->codeRegimeBaseOblVieilPat = $codeRegimeBaseOblVieilPat;
        return $this;
    }

    /**
     * Set the code regime base obl vieil sal.
     *
     * @param string|null $codeRegimeBaseOblVieilSal The code regime base obl vieil sal.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeRegimeBaseOblVieilSal(?string $codeRegimeBaseOblVieilSal): EmpDadsuParam {
        $this->codeRegimeBaseOblVieilSal = $codeRegimeBaseOblVieilSal;
        return $this;
    }

    /**
     * Set the code regime btp.
     *
     * @param string|null $codeRegimeBtp The code regime btp.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeRegimeBtp(?string $codeRegimeBtp): EmpDadsuParam {
        $this->codeRegimeBtp = $codeRegimeBtp;
        return $this;
    }

    /**
     * Set the code statut categ.
     *
     * @param string|null $codeStatutCateg The code statut categ.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeStatutCateg(?string $codeStatutCateg): EmpDadsuParam {
        $this->codeStatutCateg = $codeStatutCateg;
        return $this;
    }

    /**
     * Set the code statut categ conv.
     *
     * @param string|null $codeStatutCategConv The code statut categ conv.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeStatutCategConv(?string $codeStatutCategConv): EmpDadsuParam {
        $this->codeStatutCategConv = $codeStatutCategConv;
        return $this;
    }

    /**
     * Set the code statut categ irc.
     *
     * @param string|null $codeStatutCategIrc The code statut categ irc.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeStatutCategIrc(?string $codeStatutCategIrc): EmpDadsuParam {
        $this->codeStatutCategIrc = $codeStatutCategIrc;
        return $this;
    }

    /**
     * Set the code statut pro.
     *
     * @param string|null $codeStatutPro The code statut pro.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeStatutPro(?string $codeStatutPro): EmpDadsuParam {
        $this->codeStatutPro = $codeStatutPro;
        return $this;
    }

    /**
     * Set the code type exo1.
     *
     * @param string|null $codeTypeExo1 The code type exo1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeTypeExo1(?string $codeTypeExo1): EmpDadsuParam {
        $this->codeTypeExo1 = $codeTypeExo1;
        return $this;
    }

    /**
     * Set the code type exo2.
     *
     * @param string|null $codeTypeExo2 The code type exo2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeTypeExo2(?string $codeTypeExo2): EmpDadsuParam {
        $this->codeTypeExo2 = $codeTypeExo2;
        return $this;
    }

    /**
     * Set the code type exo3.
     *
     * @param string|null $codeTypeExo3 The code type exo3.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCodeTypeExo3(?string $codeTypeExo3): EmpDadsuParam {
        $this->codeTypeExo3 = $codeTypeExo3;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setCommentaire(?string $commentaire): EmpDadsuParam {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the complement lieu trav.
     *
     * @param string|null $complementLieuTrav The complement lieu trav.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setComplementLieuTrav(?string $complementLieuTrav): EmpDadsuParam {
        $this->complementLieuTrav = $complementLieuTrav;
        return $this;
    }

    /**
     * Set the dadsu conjoint salarie.
     *
     * @param string|null $dadsuConjointSalarie The dadsu conjoint salarie.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setDadsuConjointSalarie(?string $dadsuConjointSalarie): EmpDadsuParam {
        $this->dadsuConjointSalarie = $dadsuConjointSalarie;
        return $this;
    }

    /**
     * Set the dadsu nb options.
     *
     * @param float|null $dadsuNbOptions The dadsu nb options.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setDadsuNbOptions(?float $dadsuNbOptions): EmpDadsuParam {
        $this->dadsuNbOptions = $dadsuNbOptions;
        return $this;
    }

    /**
     * Set the dadsu prix souscript opt.
     *
     * @param float|null $dadsuPrixSouscriptOpt The dadsu prix souscript opt.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setDadsuPrixSouscriptOpt(?float $dadsuPrixSouscriptOpt): EmpDadsuParam {
        $this->dadsuPrixSouscriptOpt = $dadsuPrixSouscriptOpt;
        return $this;
    }

    /**
     * Set the dadsu valeur action.
     *
     * @param float|null $dadsuValeurAction The dadsu valeur action.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setDadsuValeurAction(?float $dadsuValeurAction): EmpDadsuParam {
        $this->dadsuValeurAction = $dadsuValeurAction;
        return $this;
    }

    /**
     * Set the date ctrl norme.
     *
     * @param DateTime|null $dateCtrlNorme The date ctrl norme.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setDateCtrlNorme(?DateTime $dateCtrlNorme): EmpDadsuParam {
        $this->dateCtrlNorme = $dateCtrlNorme;
        return $this;
    }

    /**
     * Set the date ctrl norme btp.
     *
     * @param DateTime|null $dateCtrlNormeBtp The date ctrl norme btp.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setDateCtrlNormeBtp(?DateTime $dateCtrlNormeBtp): EmpDadsuParam {
        $this->dateCtrlNormeBtp = $dateCtrlNormeBtp;
        return $this;
    }

    /**
     * Set the date ctrl norme prev.
     *
     * @param DateTime|null $dateCtrlNormePrev The date ctrl norme prev.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setDateCtrlNormePrev(?DateTime $dateCtrlNormePrev): EmpDadsuParam {
        $this->dateCtrlNormePrev = $dateCtrlNormePrev;
        return $this;
    }

    /**
     * Set the date ctrl norme ret.
     *
     * @param DateTime|null $dateCtrlNormeRet The date ctrl norme ret.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setDateCtrlNormeRet(?DateTime $dateCtrlNormeRet): EmpDadsuParam {
        $this->dateCtrlNormeRet = $dateCtrlNormeRet;
        return $this;
    }

    /**
     * Set the debut periode decl.
     *
     * @param DateTime|null $debutPeriodeDecl The debut periode decl.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setDebutPeriodeDecl(?DateTime $debutPeriodeDecl): EmpDadsuParam {
        $this->debutPeriodeDecl = $debutPeriodeDecl;
        return $this;
    }

    /**
     * Set the echelon.
     *
     * @param string|null $echelon The echelon.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEchelon(?string $echelon): EmpDadsuParam {
        $this->echelon = $echelon;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string|null $emploi The emploi.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEmploi(?string $emploi): EmpDadsuParam {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the epargne sal code1.
     *
     * @param string|null $epargneSalCode1 The epargne sal code1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEpargneSalCode1(?string $epargneSalCode1): EmpDadsuParam {
        $this->epargneSalCode1 = $epargneSalCode1;
        return $this;
    }

    /**
     * Set the epargne sal code2.
     *
     * @param string|null $epargneSalCode2 The epargne sal code2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEpargneSalCode2(?string $epargneSalCode2): EmpDadsuParam {
        $this->epargneSalCode2 = $epargneSalCode2;
        return $this;
    }

    /**
     * Set the epargne sal code3.
     *
     * @param string|null $epargneSalCode3 The epargne sal code3.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEpargneSalCode3(?string $epargneSalCode3): EmpDadsuParam {
        $this->epargneSalCode3 = $epargneSalCode3;
        return $this;
    }

    /**
     * Set the epargne sal code4.
     *
     * @param string|null $epargneSalCode4 The epargne sal code4.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEpargneSalCode4(?string $epargneSalCode4): EmpDadsuParam {
        $this->epargneSalCode4 = $epargneSalCode4;
        return $this;
    }

    /**
     * Set the epargne sal mnt1.
     *
     * @param float|null $epargneSalMnt1 The epargne sal mnt1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEpargneSalMnt1(?float $epargneSalMnt1): EmpDadsuParam {
        $this->epargneSalMnt1 = $epargneSalMnt1;
        return $this;
    }

    /**
     * Set the epargne sal mnt2.
     *
     * @param float|null $epargneSalMnt2 The epargne sal mnt2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEpargneSalMnt2(?float $epargneSalMnt2): EmpDadsuParam {
        $this->epargneSalMnt2 = $epargneSalMnt2;
        return $this;
    }

    /**
     * Set the epargne sal mnt3.
     *
     * @param float|null $epargneSalMnt3 The epargne sal mnt3.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEpargneSalMnt3(?float $epargneSalMnt3): EmpDadsuParam {
        $this->epargneSalMnt3 = $epargneSalMnt3;
        return $this;
    }

    /**
     * Set the epargne sal mnt4.
     *
     * @param float|null $epargneSalMnt4 The epargne sal mnt4.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEpargneSalMnt4(?float $epargneSalMnt4): EmpDadsuParam {
        $this->epargneSalMnt4 = $epargneSalMnt4;
        return $this;
    }

    /**
     * Set the etat ctrl norme.
     *
     * @param string|null $etatCtrlNorme The etat ctrl norme.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEtatCtrlNorme(?string $etatCtrlNorme): EmpDadsuParam {
        $this->etatCtrlNorme = $etatCtrlNorme;
        return $this;
    }

    /**
     * Set the etat ctrl norme btp.
     *
     * @param string|null $etatCtrlNormeBtp The etat ctrl norme btp.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEtatCtrlNormeBtp(?string $etatCtrlNormeBtp): EmpDadsuParam {
        $this->etatCtrlNormeBtp = $etatCtrlNormeBtp;
        return $this;
    }

    /**
     * Set the etat ctrl norme prev.
     *
     * @param string|null $etatCtrlNormePrev The etat ctrl norme prev.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEtatCtrlNormePrev(?string $etatCtrlNormePrev): EmpDadsuParam {
        $this->etatCtrlNormePrev = $etatCtrlNormePrev;
        return $this;
    }

    /**
     * Set the etat ctrl norme ret.
     *
     * @param string|null $etatCtrlNormeRet The etat ctrl norme ret.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setEtatCtrlNormeRet(?string $etatCtrlNormeRet): EmpDadsuParam {
        $this->etatCtrlNormeRet = $etatCtrlNormeRet;
        return $this;
    }

    /**
     * Set the exo agff.
     *
     * @param bool|null $exoAgff The exo agff.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setExoAgff(?bool $exoAgff): EmpDadsuParam {
        $this->exoAgff = $exoAgff;
        return $this;
    }

    /**
     * Set the fin periode decl.
     *
     * @param DateTime|null $finPeriodeDecl The fin periode decl.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setFinPeriodeDecl(?DateTime $finPeriodeDecl): EmpDadsuParam {
        $this->finPeriodeDecl = $finPeriodeDecl;
        return $this;
    }

    /**
     * Set the gpec mnt exo cot secu.
     *
     * @param float|null $gpecMntExoCotSecu The gpec mnt exo cot secu.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setGpecMntExoCotSecu(?float $gpecMntExoCotSecu): EmpDadsuParam {
        $this->gpecMntExoCotSecu = $gpecMntExoCotSecu;
        return $this;
    }

    /**
     * Set the gpec mnt exo csgcrds.
     *
     * @param float|null $gpecMntExoCsgcrds The gpec mnt exo csgcrds.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setGpecMntExoCsgcrds(?float $gpecMntExoCsgcrds): EmpDadsuParam {
        $this->gpecMntExoCsgcrds = $gpecMntExoCsgcrds;
        return $this;
    }

    /**
     * Set the indemn cp plaf.
     *
     * @param float|null $indemnCpPlaf The indemn cp plaf.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setIndemnCpPlaf(?float $indemnCpPlaf): EmpDadsuParam {
        $this->indemnCpPlaf = $indemnCpPlaf;
        return $this;
    }

    /**
     * Set the indemn rupture code1.
     *
     * @param string|null $indemnRuptureCode1 The indemn rupture code1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setIndemnRuptureCode1(?string $indemnRuptureCode1): EmpDadsuParam {
        $this->indemnRuptureCode1 = $indemnRuptureCode1;
        return $this;
    }

    /**
     * Set the indemn rupture code2.
     *
     * @param string|null $indemnRuptureCode2 The indemn rupture code2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setIndemnRuptureCode2(?string $indemnRuptureCode2): EmpDadsuParam {
        $this->indemnRuptureCode2 = $indemnRuptureCode2;
        return $this;
    }

    /**
     * Set the indemn rupture mnt1.
     *
     * @param float|null $indemnRuptureMnt1 The indemn rupture mnt1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setIndemnRuptureMnt1(?float $indemnRuptureMnt1): EmpDadsuParam {
        $this->indemnRuptureMnt1 = $indemnRuptureMnt1;
        return $this;
    }

    /**
     * Set the indemn rupture mnt2.
     *
     * @param float|null $indemnRuptureMnt2 The indemn rupture mnt2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setIndemnRuptureMnt2(?float $indemnRuptureMnt2): EmpDadsuParam {
        $this->indemnRuptureMnt2 = $indemnRuptureMnt2;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string|null $indice The indice.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setIndice(?string $indice): EmpDadsuParam {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the nb periodicite ircantec.
     *
     * @param float|null $nbPeriodiciteIrcantec The nb periodicite ircantec.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNbPeriodiciteIrcantec(?float $nbPeriodiciteIrcantec): EmpDadsuParam {
        $this->nbPeriodiciteIrcantec = $nbPeriodiciteIrcantec;
        return $this;
    }

    /**
     * Set the nbh etab btp.
     *
     * @param float|null $nbhEtabBtp The nbh etab btp.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNbhEtabBtp(?float $nbhEtabBtp): EmpDadsuParam {
        $this->nbhEtabBtp = $nbhEtabBtp;
        return $this;
    }

    /**
     * Set the nbh sal btp.
     *
     * @param float|null $nbhSalBtp The nbh sal btp.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNbhSalBtp(?float $nbhSalBtp): EmpDadsuParam {
        $this->nbhSalBtp = $nbhSalBtp;
        return $this;
    }

    /**
     * Set the nic etab affectation.
     *
     * @param string|null $nicEtabAffectation The nic etab affectation.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNicEtabAffectation(?string $nicEtabAffectation): EmpDadsuParam {
        $this->nicEtabAffectation = $nicEtabAffectation;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string|null $niveau The niveau.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNiveau(?string $niveau): EmpDadsuParam {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the nom ville insee lieu trav.
     *
     * @param string|null $nomVilleInseeLieuTrav The nom ville insee lieu trav.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNomVilleInseeLieuTrav(?string $nomVilleInseeLieuTrav): EmpDadsuParam {
        $this->nomVilleInseeLieuTrav = $nomVilleInseeLieuTrav;
        return $this;
    }

    /**
     * Set the nom ville lieu trav.
     *
     * @param string|null $nomVilleLieuTrav The nom ville lieu trav.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNomVilleLieuTrav(?string $nomVilleLieuTrav): EmpDadsuParam {
        $this->nomVilleLieuTrav = $nomVilleLieuTrav;
        return $this;
    }

    /**
     * Set the nom voie lieu trav.
     *
     * @param string|null $nomVoieLieuTrav The nom voie lieu trav.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNomVoieLieuTrav(?string $nomVoieLieuTrav): EmpDadsuParam {
        $this->nomVoieLieuTrav = $nomVoieLieuTrav;
        return $this;
    }

    /**
     * Set the num voie lieu trav.
     *
     * @param string|null $numVoieLieuTrav The num voie lieu trav.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNumVoieLieuTrav(?string $numVoieLieuTrav): EmpDadsuParam {
        $this->numVoieLieuTrav = $numVoieLieuTrav;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNumero(?string $numero): EmpDadsuParam {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero adhesion btp.
     *
     * @param string|null $numeroAdhesionBtp The numero adhesion btp.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNumeroAdhesionBtp(?string $numeroAdhesionBtp): EmpDadsuParam {
        $this->numeroAdhesionBtp = $numeroAdhesionBtp;
        return $this;
    }

    /**
     * Set the numero affil fnc.
     *
     * @param string|null $numeroAffilFnc The numero affil fnc.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNumeroAffilFnc(?string $numeroAffilFnc): EmpDadsuParam {
        $this->numeroAffilFnc = $numeroAffilFnc;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int|null $numeroOrdre The numero ordre.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNumeroOrdre(?int $numeroOrdre): EmpDadsuParam {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the numero rattach1.
     *
     * @param string|null $numeroRattach1 The numero rattach1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNumeroRattach1(?string $numeroRattach1): EmpDadsuParam {
        $this->numeroRattach1 = $numeroRattach1;
        return $this;
    }

    /**
     * Set the numero rattach2.
     *
     * @param string|null $numeroRattach2 The numero rattach2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNumeroRattach2(?string $numeroRattach2): EmpDadsuParam {
        $this->numeroRattach2 = $numeroRattach2;
        return $this;
    }

    /**
     * Set the numero rattach3.
     *
     * @param string|null $numeroRattach3 The numero rattach3.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNumeroRattach3(?string $numeroRattach3): EmpDadsuParam {
        $this->numeroRattach3 = $numeroRattach3;
        return $this;
    }

    /**
     * Set the numero rattach btp.
     *
     * @param string|null $numeroRattachBtp The numero rattach btp.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setNumeroRattachBtp(?string $numeroRattachBtp): EmpDadsuParam {
        $this->numeroRattachBtp = $numeroRattachBtp;
        return $this;
    }

    /**
     * Set the particip patron avtge code1.
     *
     * @param string|null $participPatronAvtgeCode1 The particip patron avtge code1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setParticipPatronAvtgeCode1(?string $participPatronAvtgeCode1): EmpDadsuParam {
        $this->participPatronAvtgeCode1 = $participPatronAvtgeCode1;
        return $this;
    }

    /**
     * Set the particip patron avtge code2.
     *
     * @param string|null $participPatronAvtgeCode2 The particip patron avtge code2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setParticipPatronAvtgeCode2(?string $participPatronAvtgeCode2): EmpDadsuParam {
        $this->participPatronAvtgeCode2 = $participPatronAvtgeCode2;
        return $this;
    }

    /**
     * Set the particip patron avtge mnt1.
     *
     * @param float|null $participPatronAvtgeMnt1 The particip patron avtge mnt1.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setParticipPatronAvtgeMnt1(?float $participPatronAvtgeMnt1): EmpDadsuParam {
        $this->participPatronAvtgeMnt1 = $participPatronAvtgeMnt1;
        return $this;
    }

    /**
     * Set the particip patron avtge mnt2.
     *
     * @param float|null $participPatronAvtgeMnt2 The particip patron avtge mnt2.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setParticipPatronAvtgeMnt2(?float $participPatronAvtgeMnt2): EmpDadsuParam {
        $this->participPatronAvtgeMnt2 = $participPatronAvtgeMnt2;
        return $this;
    }

    /**
     * Set the periodicite ircantec.
     *
     * @param string|null $periodiciteIrcantec The periodicite ircantec.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setPeriodiciteIrcantec(?string $periodiciteIrcantec): EmpDadsuParam {
        $this->periodiciteIrcantec = $periodiciteIrcantec;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param string|null $position The position.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setPosition(?string $position): EmpDadsuParam {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the pourcent act.
     *
     * @param float|null $pourcentAct The pourcent act.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setPourcentAct(?float $pourcentAct): EmpDadsuParam {
        $this->pourcentAct = $pourcentAct;
        return $this;
    }

    /**
     * Set the remun medecins.
     *
     * @param float|null $remunMedecins The remun medecins.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setRemunMedecins(?float $remunMedecins): EmpDadsuParam {
        $this->remunMedecins = $remunMedecins;
        return $this;
    }

    /**
     * Set the siret lieu trav.
     *
     * @param string|null $siretLieuTrav The siret lieu trav.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setSiretLieuTrav(?string $siretLieuTrav): EmpDadsuParam {
        $this->siretLieuTrav = $siretLieuTrav;
        return $this;
    }

    /**
     * Set the statut cotisant btp.
     *
     * @param string|null $statutCotisantBtp The statut cotisant btp.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setStatutCotisantBtp(?string $statutCotisantBtp): EmpDadsuParam {
        $this->statutCotisantBtp = $statutCotisantBtp;
        return $this;
    }

    /**
     * Set the suppl fam.
     *
     * @param float|null $supplFam The suppl fam.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setSupplFam(?float $supplFam): EmpDadsuParam {
        $this->supplFam = $supplFam;
        return $this;
    }

    /**
     * Set the tds59.
     *
     * @param string|null $tds59 The tds59.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setTds59(?string $tds59): EmpDadsuParam {
        $this->tds59 = $tds59;
        return $this;
    }

    /**
     * Set the type affil btp.
     *
     * @param string|null $typeAffilBtp The type affil btp.
     * @return EmpDadsuParam Returns this Emp dadsu param.
     */
    public function setTypeAffilBtp(?string $typeAffilBtp): EmpDadsuParam {
        $this->typeAffilBtp = $typeAffilBtp;
        return $this;
    }
}
