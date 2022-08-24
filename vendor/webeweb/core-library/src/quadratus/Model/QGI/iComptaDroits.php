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
 * i compta droits.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class iComptaDroits {

    /**
     * Code collab messages.
     *
     * @var string|null
     */
    private $codeCollabMessages;

    /**
     * Code user.
     *
     * @var string|null
     */
    private $codeUser;

    /**
     * Date limite visu.
     *
     * @var DateTime|null
     */
    private $dateLimiteVisu;

    /**
     * Droit clients.
     *
     * @var string|null
     */
    private $droitClients;

    /**
     * Droit fournisseurs.
     *
     * @var string|null
     */
    private $droitFournisseurs;

    /**
     * Droit generaux.
     *
     * @var string|null
     */
    private $droitGeneraux;

    /**
     * Droit modif compte.
     *
     * @var string|null
     */
    private $droitModifCompte;

    /**
     * Espace client.
     *
     * @var bool|null
     */
    private $espaceClient;

    /**
     * Fct balance client.
     *
     * @var bool|null
     */
    private $fctBalanceClient;

    /**
     * Fct balance fournisseur.
     *
     * @var bool|null
     */
    private $fctBalanceFournisseur;

    /**
     * Fct balance generale.
     *
     * @var bool|null
     */
    private $fctBalanceGenerale;

    /**
     * Fct consult da.
     *
     * @var bool|null
     */
    private $fctConsultDa;

    /**
     * Fct consult dc.
     *
     * @var bool|null
     */
    private $fctConsultDc;

    /**
     * Fct declare tva.
     *
     * @var bool|null
     */
    private $fctDeclareTva;

    /**
     * Fct delettrage.
     *
     * @var bool|null
     */
    private $fctDelettrage;

    /**
     * Fct edition journaux.
     *
     * @var bool|null
     */
    private $fctEditionJournaux;

    /**
     * Fct interrogation cpt.
     *
     * @var bool|null
     */
    private $fctInterrogationCpt;

    /**
     * Fct lettrage.
     *
     * @var bool|null
     */
    private $fctLettrage;

    /**
     * Fct modif ecriture.
     *
     * @var bool|null
     */
    private $fctModifEcriture;

    /**
     * Fct rapproch banq.
     *
     * @var bool|null
     */
    private $fctRapprochBanq;

    /**
     * Fct saisie achats.
     *
     * @var bool|null
     */
    private $fctSaisieAchats;

    /**
     * Fct saisie banques.
     *
     * @var bool|null
     */
    private $fctSaisieBanques;

    /**
     * Fct saisie caisse orientee.
     *
     * @var int|null
     */
    private $fctSaisieCaisseOrientee;

    /**
     * Fct saisie etebac.
     *
     * @var bool|null
     */
    private $fctSaisieEtebac;

    /**
     * Fct saisie standard.
     *
     * @var bool|null
     */
    private $fctSaisieStandard;

    /**
     * Fct saisie trame.
     *
     * @var int|null
     */
    private $fctSaisieTrame;

    /**
     * Fct saisie ventes.
     *
     * @var bool|null
     */
    private $fctSaisieVentes;

    /**
     * Fct suppr ecriture.
     *
     * @var bool|null
     */
    private $fctSupprEcriture;

    /**
     * Fct table bord.
     *
     * @var bool|null
     */
    private $fctTableBord;

    /**
     * Flag.
     *
     * @var string|null
     */
    private $flag;

    /**
     * Niveau droit clients.
     *
     * @var string|null
     */
    private $niveauDroitClients;

    /**
     * Niveau droit fournisseurs.
     *
     * @var string|null
     */
    private $niveauDroitFournisseurs;

    /**
     * Niveau droit generaux.
     *
     * @var string|null
     */
    private $niveauDroitGeneraux;

    /**
     * No doss cpta.
     *
     * @var string|null
     */
    private $noDossCpta;

    /**
     * Nom user.
     *
     * @var string|null
     */
    private $nomUser;

    /**
     * Numi key.
     *
     * @var string|null
     */
    private $numiKey;

    /**
     * Password.
     *
     * @var string|null
     */
    private $password;

    /**
     * Periode saisie deb.
     *
     * @var DateTime|null
     */
    private $periodeSaisieDeb;

    /**
     * Periode saisie fin.
     *
     * @var DateTime|null
     */
    private $periodeSaisieFin;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code collab messages.
     *
     * @return string|null Returns the code collab messages.
     */
    public function getCodeCollabMessages(): ?string {
        return $this->codeCollabMessages;
    }

    /**
     * Get the code user.
     *
     * @return string|null Returns the code user.
     */
    public function getCodeUser(): ?string {
        return $this->codeUser;
    }

    /**
     * Get the date limite visu.
     *
     * @return DateTime|null Returns the date limite visu.
     */
    public function getDateLimiteVisu(): ?DateTime {
        return $this->dateLimiteVisu;
    }

    /**
     * Get the droit clients.
     *
     * @return string|null Returns the droit clients.
     */
    public function getDroitClients(): ?string {
        return $this->droitClients;
    }

    /**
     * Get the droit fournisseurs.
     *
     * @return string|null Returns the droit fournisseurs.
     */
    public function getDroitFournisseurs(): ?string {
        return $this->droitFournisseurs;
    }

    /**
     * Get the droit generaux.
     *
     * @return string|null Returns the droit generaux.
     */
    public function getDroitGeneraux(): ?string {
        return $this->droitGeneraux;
    }

    /**
     * Get the droit modif compte.
     *
     * @return string|null Returns the droit modif compte.
     */
    public function getDroitModifCompte(): ?string {
        return $this->droitModifCompte;
    }

    /**
     * Get the espace client.
     *
     * @return bool|null Returns the espace client.
     */
    public function getEspaceClient(): ?bool {
        return $this->espaceClient;
    }

    /**
     * Get the fct balance client.
     *
     * @return bool|null Returns the fct balance client.
     */
    public function getFctBalanceClient(): ?bool {
        return $this->fctBalanceClient;
    }

    /**
     * Get the fct balance fournisseur.
     *
     * @return bool|null Returns the fct balance fournisseur.
     */
    public function getFctBalanceFournisseur(): ?bool {
        return $this->fctBalanceFournisseur;
    }

    /**
     * Get the fct balance generale.
     *
     * @return bool|null Returns the fct balance generale.
     */
    public function getFctBalanceGenerale(): ?bool {
        return $this->fctBalanceGenerale;
    }

    /**
     * Get the fct consult da.
     *
     * @return bool|null Returns the fct consult da.
     */
    public function getFctConsultDa(): ?bool {
        return $this->fctConsultDa;
    }

    /**
     * Get the fct consult dc.
     *
     * @return bool|null Returns the fct consult dc.
     */
    public function getFctConsultDc(): ?bool {
        return $this->fctConsultDc;
    }

    /**
     * Get the fct declare tva.
     *
     * @return bool|null Returns the fct declare tva.
     */
    public function getFctDeclareTva(): ?bool {
        return $this->fctDeclareTva;
    }

    /**
     * Get the fct delettrage.
     *
     * @return bool|null Returns the fct delettrage.
     */
    public function getFctDelettrage(): ?bool {
        return $this->fctDelettrage;
    }

    /**
     * Get the fct edition journaux.
     *
     * @return bool|null Returns the fct edition journaux.
     */
    public function getFctEditionJournaux(): ?bool {
        return $this->fctEditionJournaux;
    }

    /**
     * Get the fct interrogation cpt.
     *
     * @return bool|null Returns the fct interrogation cpt.
     */
    public function getFctInterrogationCpt(): ?bool {
        return $this->fctInterrogationCpt;
    }

    /**
     * Get the fct lettrage.
     *
     * @return bool|null Returns the fct lettrage.
     */
    public function getFctLettrage(): ?bool {
        return $this->fctLettrage;
    }

    /**
     * Get the fct modif ecriture.
     *
     * @return bool|null Returns the fct modif ecriture.
     */
    public function getFctModifEcriture(): ?bool {
        return $this->fctModifEcriture;
    }

    /**
     * Get the fct rapproch banq.
     *
     * @return bool|null Returns the fct rapproch banq.
     */
    public function getFctRapprochBanq(): ?bool {
        return $this->fctRapprochBanq;
    }

    /**
     * Get the fct saisie achats.
     *
     * @return bool|null Returns the fct saisie achats.
     */
    public function getFctSaisieAchats(): ?bool {
        return $this->fctSaisieAchats;
    }

    /**
     * Get the fct saisie banques.
     *
     * @return bool|null Returns the fct saisie banques.
     */
    public function getFctSaisieBanques(): ?bool {
        return $this->fctSaisieBanques;
    }

    /**
     * Get the fct saisie caisse orientee.
     *
     * @return int|null Returns the fct saisie caisse orientee.
     */
    public function getFctSaisieCaisseOrientee(): ?int {
        return $this->fctSaisieCaisseOrientee;
    }

    /**
     * Get the fct saisie etebac.
     *
     * @return bool|null Returns the fct saisie etebac.
     */
    public function getFctSaisieEtebac(): ?bool {
        return $this->fctSaisieEtebac;
    }

    /**
     * Get the fct saisie standard.
     *
     * @return bool|null Returns the fct saisie standard.
     */
    public function getFctSaisieStandard(): ?bool {
        return $this->fctSaisieStandard;
    }

    /**
     * Get the fct saisie trame.
     *
     * @return int|null Returns the fct saisie trame.
     */
    public function getFctSaisieTrame(): ?int {
        return $this->fctSaisieTrame;
    }

    /**
     * Get the fct saisie ventes.
     *
     * @return bool|null Returns the fct saisie ventes.
     */
    public function getFctSaisieVentes(): ?bool {
        return $this->fctSaisieVentes;
    }

    /**
     * Get the fct suppr ecriture.
     *
     * @return bool|null Returns the fct suppr ecriture.
     */
    public function getFctSupprEcriture(): ?bool {
        return $this->fctSupprEcriture;
    }

    /**
     * Get the fct table bord.
     *
     * @return bool|null Returns the fct table bord.
     */
    public function getFctTableBord(): ?bool {
        return $this->fctTableBord;
    }

    /**
     * Get the flag.
     *
     * @return string|null Returns the flag.
     */
    public function getFlag(): ?string {
        return $this->flag;
    }

    /**
     * Get the niveau droit clients.
     *
     * @return string|null Returns the niveau droit clients.
     */
    public function getNiveauDroitClients(): ?string {
        return $this->niveauDroitClients;
    }

    /**
     * Get the niveau droit fournisseurs.
     *
     * @return string|null Returns the niveau droit fournisseurs.
     */
    public function getNiveauDroitFournisseurs(): ?string {
        return $this->niveauDroitFournisseurs;
    }

    /**
     * Get the niveau droit generaux.
     *
     * @return string|null Returns the niveau droit generaux.
     */
    public function getNiveauDroitGeneraux(): ?string {
        return $this->niveauDroitGeneraux;
    }

    /**
     * Get the no doss cpta.
     *
     * @return string|null Returns the no doss cpta.
     */
    public function getNoDossCpta(): ?string {
        return $this->noDossCpta;
    }

    /**
     * Get the nom user.
     *
     * @return string|null Returns the nom user.
     */
    public function getNomUser(): ?string {
        return $this->nomUser;
    }

    /**
     * Get the numi key.
     *
     * @return string|null Returns the numi key.
     */
    public function getNumiKey(): ?string {
        return $this->numiKey;
    }

    /**
     * Get the password.
     *
     * @return string|null Returns the password.
     */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Get the periode saisie deb.
     *
     * @return DateTime|null Returns the periode saisie deb.
     */
    public function getPeriodeSaisieDeb(): ?DateTime {
        return $this->periodeSaisieDeb;
    }

    /**
     * Get the periode saisie fin.
     *
     * @return DateTime|null Returns the periode saisie fin.
     */
    public function getPeriodeSaisieFin(): ?DateTime {
        return $this->periodeSaisieFin;
    }

    /**
     * Set the code collab messages.
     *
     * @param string|null $codeCollabMessages The code collab messages.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setCodeCollabMessages(?string $codeCollabMessages): iComptaDroits {
        $this->codeCollabMessages = $codeCollabMessages;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string|null $codeUser The code user.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setCodeUser(?string $codeUser): iComptaDroits {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the date limite visu.
     *
     * @param DateTime|null $dateLimiteVisu The date limite visu.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setDateLimiteVisu(?DateTime $dateLimiteVisu): iComptaDroits {
        $this->dateLimiteVisu = $dateLimiteVisu;
        return $this;
    }

    /**
     * Set the droit clients.
     *
     * @param string|null $droitClients The droit clients.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setDroitClients(?string $droitClients): iComptaDroits {
        $this->droitClients = $droitClients;
        return $this;
    }

    /**
     * Set the droit fournisseurs.
     *
     * @param string|null $droitFournisseurs The droit fournisseurs.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setDroitFournisseurs(?string $droitFournisseurs): iComptaDroits {
        $this->droitFournisseurs = $droitFournisseurs;
        return $this;
    }

    /**
     * Set the droit generaux.
     *
     * @param string|null $droitGeneraux The droit generaux.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setDroitGeneraux(?string $droitGeneraux): iComptaDroits {
        $this->droitGeneraux = $droitGeneraux;
        return $this;
    }

    /**
     * Set the droit modif compte.
     *
     * @param string|null $droitModifCompte The droit modif compte.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setDroitModifCompte(?string $droitModifCompte): iComptaDroits {
        $this->droitModifCompte = $droitModifCompte;
        return $this;
    }

    /**
     * Set the espace client.
     *
     * @param bool|null $espaceClient The espace client.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setEspaceClient(?bool $espaceClient): iComptaDroits {
        $this->espaceClient = $espaceClient;
        return $this;
    }

    /**
     * Set the fct balance client.
     *
     * @param bool|null $fctBalanceClient The fct balance client.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctBalanceClient(?bool $fctBalanceClient): iComptaDroits {
        $this->fctBalanceClient = $fctBalanceClient;
        return $this;
    }

    /**
     * Set the fct balance fournisseur.
     *
     * @param bool|null $fctBalanceFournisseur The fct balance fournisseur.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctBalanceFournisseur(?bool $fctBalanceFournisseur): iComptaDroits {
        $this->fctBalanceFournisseur = $fctBalanceFournisseur;
        return $this;
    }

    /**
     * Set the fct balance generale.
     *
     * @param bool|null $fctBalanceGenerale The fct balance generale.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctBalanceGenerale(?bool $fctBalanceGenerale): iComptaDroits {
        $this->fctBalanceGenerale = $fctBalanceGenerale;
        return $this;
    }

    /**
     * Set the fct consult da.
     *
     * @param bool|null $fctConsultDa The fct consult da.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctConsultDa(?bool $fctConsultDa): iComptaDroits {
        $this->fctConsultDa = $fctConsultDa;
        return $this;
    }

    /**
     * Set the fct consult dc.
     *
     * @param bool|null $fctConsultDc The fct consult dc.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctConsultDc(?bool $fctConsultDc): iComptaDroits {
        $this->fctConsultDc = $fctConsultDc;
        return $this;
    }

    /**
     * Set the fct declare tva.
     *
     * @param bool|null $fctDeclareTva The fct declare tva.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctDeclareTva(?bool $fctDeclareTva): iComptaDroits {
        $this->fctDeclareTva = $fctDeclareTva;
        return $this;
    }

    /**
     * Set the fct delettrage.
     *
     * @param bool|null $fctDelettrage The fct delettrage.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctDelettrage(?bool $fctDelettrage): iComptaDroits {
        $this->fctDelettrage = $fctDelettrage;
        return $this;
    }

    /**
     * Set the fct edition journaux.
     *
     * @param bool|null $fctEditionJournaux The fct edition journaux.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctEditionJournaux(?bool $fctEditionJournaux): iComptaDroits {
        $this->fctEditionJournaux = $fctEditionJournaux;
        return $this;
    }

    /**
     * Set the fct interrogation cpt.
     *
     * @param bool|null $fctInterrogationCpt The fct interrogation cpt.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctInterrogationCpt(?bool $fctInterrogationCpt): iComptaDroits {
        $this->fctInterrogationCpt = $fctInterrogationCpt;
        return $this;
    }

    /**
     * Set the fct lettrage.
     *
     * @param bool|null $fctLettrage The fct lettrage.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctLettrage(?bool $fctLettrage): iComptaDroits {
        $this->fctLettrage = $fctLettrage;
        return $this;
    }

    /**
     * Set the fct modif ecriture.
     *
     * @param bool|null $fctModifEcriture The fct modif ecriture.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctModifEcriture(?bool $fctModifEcriture): iComptaDroits {
        $this->fctModifEcriture = $fctModifEcriture;
        return $this;
    }

    /**
     * Set the fct rapproch banq.
     *
     * @param bool|null $fctRapprochBanq The fct rapproch banq.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctRapprochBanq(?bool $fctRapprochBanq): iComptaDroits {
        $this->fctRapprochBanq = $fctRapprochBanq;
        return $this;
    }

    /**
     * Set the fct saisie achats.
     *
     * @param bool|null $fctSaisieAchats The fct saisie achats.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieAchats(?bool $fctSaisieAchats): iComptaDroits {
        $this->fctSaisieAchats = $fctSaisieAchats;
        return $this;
    }

    /**
     * Set the fct saisie banques.
     *
     * @param bool|null $fctSaisieBanques The fct saisie banques.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieBanques(?bool $fctSaisieBanques): iComptaDroits {
        $this->fctSaisieBanques = $fctSaisieBanques;
        return $this;
    }

    /**
     * Set the fct saisie caisse orientee.
     *
     * @param int|null $fctSaisieCaisseOrientee The fct saisie caisse orientee.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieCaisseOrientee(?int $fctSaisieCaisseOrientee): iComptaDroits {
        $this->fctSaisieCaisseOrientee = $fctSaisieCaisseOrientee;
        return $this;
    }

    /**
     * Set the fct saisie etebac.
     *
     * @param bool|null $fctSaisieEtebac The fct saisie etebac.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieEtebac(?bool $fctSaisieEtebac): iComptaDroits {
        $this->fctSaisieEtebac = $fctSaisieEtebac;
        return $this;
    }

    /**
     * Set the fct saisie standard.
     *
     * @param bool|null $fctSaisieStandard The fct saisie standard.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieStandard(?bool $fctSaisieStandard): iComptaDroits {
        $this->fctSaisieStandard = $fctSaisieStandard;
        return $this;
    }

    /**
     * Set the fct saisie trame.
     *
     * @param int|null $fctSaisieTrame The fct saisie trame.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieTrame(?int $fctSaisieTrame): iComptaDroits {
        $this->fctSaisieTrame = $fctSaisieTrame;
        return $this;
    }

    /**
     * Set the fct saisie ventes.
     *
     * @param bool|null $fctSaisieVentes The fct saisie ventes.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieVentes(?bool $fctSaisieVentes): iComptaDroits {
        $this->fctSaisieVentes = $fctSaisieVentes;
        return $this;
    }

    /**
     * Set the fct suppr ecriture.
     *
     * @param bool|null $fctSupprEcriture The fct suppr ecriture.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSupprEcriture(?bool $fctSupprEcriture): iComptaDroits {
        $this->fctSupprEcriture = $fctSupprEcriture;
        return $this;
    }

    /**
     * Set the fct table bord.
     *
     * @param bool|null $fctTableBord The fct table bord.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctTableBord(?bool $fctTableBord): iComptaDroits {
        $this->fctTableBord = $fctTableBord;
        return $this;
    }

    /**
     * Set the flag.
     *
     * @param string|null $flag The flag.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFlag(?string $flag): iComptaDroits {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Set the niveau droit clients.
     *
     * @param string|null $niveauDroitClients The niveau droit clients.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setNiveauDroitClients(?string $niveauDroitClients): iComptaDroits {
        $this->niveauDroitClients = $niveauDroitClients;
        return $this;
    }

    /**
     * Set the niveau droit fournisseurs.
     *
     * @param string|null $niveauDroitFournisseurs The niveau droit fournisseurs.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setNiveauDroitFournisseurs(?string $niveauDroitFournisseurs): iComptaDroits {
        $this->niveauDroitFournisseurs = $niveauDroitFournisseurs;
        return $this;
    }

    /**
     * Set the niveau droit generaux.
     *
     * @param string|null $niveauDroitGeneraux The niveau droit generaux.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setNiveauDroitGeneraux(?string $niveauDroitGeneraux): iComptaDroits {
        $this->niveauDroitGeneraux = $niveauDroitGeneraux;
        return $this;
    }

    /**
     * Set the no doss cpta.
     *
     * @param string|null $noDossCpta The no doss cpta.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setNoDossCpta(?string $noDossCpta): iComptaDroits {
        $this->noDossCpta = $noDossCpta;
        return $this;
    }

    /**
     * Set the nom user.
     *
     * @param string|null $nomUser The nom user.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setNomUser(?string $nomUser): iComptaDroits {
        $this->nomUser = $nomUser;
        return $this;
    }

    /**
     * Set the numi key.
     *
     * @param string|null $numiKey The numi key.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setNumiKey(?string $numiKey): iComptaDroits {
        $this->numiKey = $numiKey;
        return $this;
    }

    /**
     * Set the password.
     *
     * @param string|null $password The password.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setPassword(?string $password): iComptaDroits {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the periode saisie deb.
     *
     * @param DateTime|null $periodeSaisieDeb The periode saisie deb.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setPeriodeSaisieDeb(?DateTime $periodeSaisieDeb): iComptaDroits {
        $this->periodeSaisieDeb = $periodeSaisieDeb;
        return $this;
    }

    /**
     * Set the periode saisie fin.
     *
     * @param DateTime|null $periodeSaisieFin The periode saisie fin.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setPeriodeSaisieFin(?DateTime $periodeSaisieFin): iComptaDroits {
        $this->periodeSaisieFin = $periodeSaisieFin;
        return $this;
    }
}
