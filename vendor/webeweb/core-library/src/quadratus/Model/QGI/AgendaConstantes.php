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
 * Agenda constantes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AgendaConstantes {

    /**
     * Archivage permanent.
     *
     * @var bool|null
     */
    private $archivagePermanent;

    /**
     * Code activite7.
     *
     * @var string|null
     */
    private $codeActivite7;

    /**
     * Code activite8.
     *
     * @var string|null
     */
    private $codeActivite8;

    /**
     * Code activite9.
     *
     * @var string|null
     */
    private $codeActivite9;

    /**
     * Couleur activite1.
     *
     * @var int|null
     */
    private $couleurActivite1;

    /**
     * Couleur activite10.
     *
     * @var int|null
     */
    private $couleurActivite10;

    /**
     * Couleur activite11.
     *
     * @var int|null
     */
    private $couleurActivite11;

    /**
     * Couleur activite2.
     *
     * @var int|null
     */
    private $couleurActivite2;

    /**
     * Couleur activite3.
     *
     * @var int|null
     */
    private $couleurActivite3;

    /**
     * Couleur activite4.
     *
     * @var int|null
     */
    private $couleurActivite4;

    /**
     * Couleur activite5.
     *
     * @var int|null
     */
    private $couleurActivite5;

    /**
     * Couleur activite6.
     *
     * @var int|null
     */
    private $couleurActivite6;

    /**
     * Couleur activite7.
     *
     * @var int|null
     */
    private $couleurActivite7;

    /**
     * Couleur activite8.
     *
     * @var int|null
     */
    private $couleurActivite8;

    /**
     * Couleur activite9.
     *
     * @var int|null
     */
    private $couleurActivite9;

    /**
     * Couleur calendrier.
     *
     * @var int|null
     */
    private $couleurCalendrier;

    /**
     * Couleur dim j feries.
     *
     * @var int|null
     */
    private $couleurDimJFeries;

    /**
     * Disabled activity label on first row.
     *
     * @var bool|null
     */
    private $disabledActivityLabelOnFirstRow;

    /**
     * Dossier fact pme.
     *
     * @var string|null
     */
    private $dossierFactPme;

    /**
     * Heure debut.
     *
     * @var string|null
     */
    private $heureDebut;

    /**
     * Heure fin.
     *
     * @var string|null
     */
    private $heureFin;

    /**
     * Libelle activite7.
     *
     * @var string|null
     */
    private $libelleActivite7;

    /**
     * Libelle activite8.
     *
     * @var string|null
     */
    private $libelleActivite8;

    /**
     * Libelle activite9.
     *
     * @var string|null
     */
    private $libelleActivite9;

    /**
     * Multi dossiers.
     *
     * @var bool|null
     */
    private $multiDossiers;

    /**
     * Text color activite1.
     *
     * @var int|null
     */
    private $textColorActivite1;

    /**
     * Text color activite10.
     *
     * @var int|null
     */
    private $textColorActivite10;

    /**
     * Text color activite11.
     *
     * @var int|null
     */
    private $textColorActivite11;

    /**
     * Text color activite2.
     *
     * @var int|null
     */
    private $textColorActivite2;

    /**
     * Text color activite3.
     *
     * @var int|null
     */
    private $textColorActivite3;

    /**
     * Text color activite4.
     *
     * @var int|null
     */
    private $textColorActivite4;

    /**
     * Text color activite5.
     *
     * @var int|null
     */
    private $textColorActivite5;

    /**
     * Text color activite6.
     *
     * @var int|null
     */
    private $textColorActivite6;

    /**
     * Text color activite7.
     *
     * @var int|null
     */
    private $textColorActivite7;

    /**
     * Text color activite8.
     *
     * @var int|null
     */
    private $textColorActivite8;

    /**
     * Text color activite9.
     *
     * @var int|null
     */
    private $textColorActivite9;

    /**
     * Text color dim j feries.
     *
     * @var int|null
     */
    private $textColorDimJFeries;

    /**
     * Use new gpe param.
     *
     * @var bool|null
     */
    private $useNewGpeParam;

    /**
     * Week mode.
     *
     * @var string|null
     */
    private $weekMode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the archivage permanent.
     *
     * @return bool|null Returns the archivage permanent.
     */
    public function getArchivagePermanent(): ?bool {
        return $this->archivagePermanent;
    }

    /**
     * Get the code activite7.
     *
     * @return string|null Returns the code activite7.
     */
    public function getCodeActivite7(): ?string {
        return $this->codeActivite7;
    }

    /**
     * Get the code activite8.
     *
     * @return string|null Returns the code activite8.
     */
    public function getCodeActivite8(): ?string {
        return $this->codeActivite8;
    }

    /**
     * Get the code activite9.
     *
     * @return string|null Returns the code activite9.
     */
    public function getCodeActivite9(): ?string {
        return $this->codeActivite9;
    }

    /**
     * Get the couleur activite1.
     *
     * @return int|null Returns the couleur activite1.
     */
    public function getCouleurActivite1(): ?int {
        return $this->couleurActivite1;
    }

    /**
     * Get the couleur activite10.
     *
     * @return int|null Returns the couleur activite10.
     */
    public function getCouleurActivite10(): ?int {
        return $this->couleurActivite10;
    }

    /**
     * Get the couleur activite11.
     *
     * @return int|null Returns the couleur activite11.
     */
    public function getCouleurActivite11(): ?int {
        return $this->couleurActivite11;
    }

    /**
     * Get the couleur activite2.
     *
     * @return int|null Returns the couleur activite2.
     */
    public function getCouleurActivite2(): ?int {
        return $this->couleurActivite2;
    }

    /**
     * Get the couleur activite3.
     *
     * @return int|null Returns the couleur activite3.
     */
    public function getCouleurActivite3(): ?int {
        return $this->couleurActivite3;
    }

    /**
     * Get the couleur activite4.
     *
     * @return int|null Returns the couleur activite4.
     */
    public function getCouleurActivite4(): ?int {
        return $this->couleurActivite4;
    }

    /**
     * Get the couleur activite5.
     *
     * @return int|null Returns the couleur activite5.
     */
    public function getCouleurActivite5(): ?int {
        return $this->couleurActivite5;
    }

    /**
     * Get the couleur activite6.
     *
     * @return int|null Returns the couleur activite6.
     */
    public function getCouleurActivite6(): ?int {
        return $this->couleurActivite6;
    }

    /**
     * Get the couleur activite7.
     *
     * @return int|null Returns the couleur activite7.
     */
    public function getCouleurActivite7(): ?int {
        return $this->couleurActivite7;
    }

    /**
     * Get the couleur activite8.
     *
     * @return int|null Returns the couleur activite8.
     */
    public function getCouleurActivite8(): ?int {
        return $this->couleurActivite8;
    }

    /**
     * Get the couleur activite9.
     *
     * @return int|null Returns the couleur activite9.
     */
    public function getCouleurActivite9(): ?int {
        return $this->couleurActivite9;
    }

    /**
     * Get the couleur calendrier.
     *
     * @return int|null Returns the couleur calendrier.
     */
    public function getCouleurCalendrier(): ?int {
        return $this->couleurCalendrier;
    }

    /**
     * Get the couleur dim j feries.
     *
     * @return int|null Returns the couleur dim j feries.
     */
    public function getCouleurDimJFeries(): ?int {
        return $this->couleurDimJFeries;
    }

    /**
     * Get the disabled activity label on first row.
     *
     * @return bool|null Returns the disabled activity label on first row.
     */
    public function getDisabledActivityLabelOnFirstRow(): ?bool {
        return $this->disabledActivityLabelOnFirstRow;
    }

    /**
     * Get the dossier fact pme.
     *
     * @return string|null Returns the dossier fact pme.
     */
    public function getDossierFactPme(): ?string {
        return $this->dossierFactPme;
    }

    /**
     * Get the heure debut.
     *
     * @return string|null Returns the heure debut.
     */
    public function getHeureDebut(): ?string {
        return $this->heureDebut;
    }

    /**
     * Get the heure fin.
     *
     * @return string|null Returns the heure fin.
     */
    public function getHeureFin(): ?string {
        return $this->heureFin;
    }

    /**
     * Get the libelle activite7.
     *
     * @return string|null Returns the libelle activite7.
     */
    public function getLibelleActivite7(): ?string {
        return $this->libelleActivite7;
    }

    /**
     * Get the libelle activite8.
     *
     * @return string|null Returns the libelle activite8.
     */
    public function getLibelleActivite8(): ?string {
        return $this->libelleActivite8;
    }

    /**
     * Get the libelle activite9.
     *
     * @return string|null Returns the libelle activite9.
     */
    public function getLibelleActivite9(): ?string {
        return $this->libelleActivite9;
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
     * Get the text color activite1.
     *
     * @return int|null Returns the text color activite1.
     */
    public function getTextColorActivite1(): ?int {
        return $this->textColorActivite1;
    }

    /**
     * Get the text color activite10.
     *
     * @return int|null Returns the text color activite10.
     */
    public function getTextColorActivite10(): ?int {
        return $this->textColorActivite10;
    }

    /**
     * Get the text color activite11.
     *
     * @return int|null Returns the text color activite11.
     */
    public function getTextColorActivite11(): ?int {
        return $this->textColorActivite11;
    }

    /**
     * Get the text color activite2.
     *
     * @return int|null Returns the text color activite2.
     */
    public function getTextColorActivite2(): ?int {
        return $this->textColorActivite2;
    }

    /**
     * Get the text color activite3.
     *
     * @return int|null Returns the text color activite3.
     */
    public function getTextColorActivite3(): ?int {
        return $this->textColorActivite3;
    }

    /**
     * Get the text color activite4.
     *
     * @return int|null Returns the text color activite4.
     */
    public function getTextColorActivite4(): ?int {
        return $this->textColorActivite4;
    }

    /**
     * Get the text color activite5.
     *
     * @return int|null Returns the text color activite5.
     */
    public function getTextColorActivite5(): ?int {
        return $this->textColorActivite5;
    }

    /**
     * Get the text color activite6.
     *
     * @return int|null Returns the text color activite6.
     */
    public function getTextColorActivite6(): ?int {
        return $this->textColorActivite6;
    }

    /**
     * Get the text color activite7.
     *
     * @return int|null Returns the text color activite7.
     */
    public function getTextColorActivite7(): ?int {
        return $this->textColorActivite7;
    }

    /**
     * Get the text color activite8.
     *
     * @return int|null Returns the text color activite8.
     */
    public function getTextColorActivite8(): ?int {
        return $this->textColorActivite8;
    }

    /**
     * Get the text color activite9.
     *
     * @return int|null Returns the text color activite9.
     */
    public function getTextColorActivite9(): ?int {
        return $this->textColorActivite9;
    }

    /**
     * Get the text color dim j feries.
     *
     * @return int|null Returns the text color dim j feries.
     */
    public function getTextColorDimJFeries(): ?int {
        return $this->textColorDimJFeries;
    }

    /**
     * Get the use new gpe param.
     *
     * @return bool|null Returns the use new gpe param.
     */
    public function getUseNewGpeParam(): ?bool {
        return $this->useNewGpeParam;
    }

    /**
     * Get the week mode.
     *
     * @return string|null Returns the week mode.
     */
    public function getWeekMode(): ?string {
        return $this->weekMode;
    }

    /**
     * Set the archivage permanent.
     *
     * @param bool|null $archivagePermanent The archivage permanent.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setArchivagePermanent(?bool $archivagePermanent): AgendaConstantes {
        $this->archivagePermanent = $archivagePermanent;
        return $this;
    }

    /**
     * Set the code activite7.
     *
     * @param string|null $codeActivite7 The code activite7.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCodeActivite7(?string $codeActivite7): AgendaConstantes {
        $this->codeActivite7 = $codeActivite7;
        return $this;
    }

    /**
     * Set the code activite8.
     *
     * @param string|null $codeActivite8 The code activite8.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCodeActivite8(?string $codeActivite8): AgendaConstantes {
        $this->codeActivite8 = $codeActivite8;
        return $this;
    }

    /**
     * Set the code activite9.
     *
     * @param string|null $codeActivite9 The code activite9.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCodeActivite9(?string $codeActivite9): AgendaConstantes {
        $this->codeActivite9 = $codeActivite9;
        return $this;
    }

    /**
     * Set the couleur activite1.
     *
     * @param int|null $couleurActivite1 The couleur activite1.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurActivite1(?int $couleurActivite1): AgendaConstantes {
        $this->couleurActivite1 = $couleurActivite1;
        return $this;
    }

    /**
     * Set the couleur activite10.
     *
     * @param int|null $couleurActivite10 The couleur activite10.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurActivite10(?int $couleurActivite10): AgendaConstantes {
        $this->couleurActivite10 = $couleurActivite10;
        return $this;
    }

    /**
     * Set the couleur activite11.
     *
     * @param int|null $couleurActivite11 The couleur activite11.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurActivite11(?int $couleurActivite11): AgendaConstantes {
        $this->couleurActivite11 = $couleurActivite11;
        return $this;
    }

    /**
     * Set the couleur activite2.
     *
     * @param int|null $couleurActivite2 The couleur activite2.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurActivite2(?int $couleurActivite2): AgendaConstantes {
        $this->couleurActivite2 = $couleurActivite2;
        return $this;
    }

    /**
     * Set the couleur activite3.
     *
     * @param int|null $couleurActivite3 The couleur activite3.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurActivite3(?int $couleurActivite3): AgendaConstantes {
        $this->couleurActivite3 = $couleurActivite3;
        return $this;
    }

    /**
     * Set the couleur activite4.
     *
     * @param int|null $couleurActivite4 The couleur activite4.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurActivite4(?int $couleurActivite4): AgendaConstantes {
        $this->couleurActivite4 = $couleurActivite4;
        return $this;
    }

    /**
     * Set the couleur activite5.
     *
     * @param int|null $couleurActivite5 The couleur activite5.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurActivite5(?int $couleurActivite5): AgendaConstantes {
        $this->couleurActivite5 = $couleurActivite5;
        return $this;
    }

    /**
     * Set the couleur activite6.
     *
     * @param int|null $couleurActivite6 The couleur activite6.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurActivite6(?int $couleurActivite6): AgendaConstantes {
        $this->couleurActivite6 = $couleurActivite6;
        return $this;
    }

    /**
     * Set the couleur activite7.
     *
     * @param int|null $couleurActivite7 The couleur activite7.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurActivite7(?int $couleurActivite7): AgendaConstantes {
        $this->couleurActivite7 = $couleurActivite7;
        return $this;
    }

    /**
     * Set the couleur activite8.
     *
     * @param int|null $couleurActivite8 The couleur activite8.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurActivite8(?int $couleurActivite8): AgendaConstantes {
        $this->couleurActivite8 = $couleurActivite8;
        return $this;
    }

    /**
     * Set the couleur activite9.
     *
     * @param int|null $couleurActivite9 The couleur activite9.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurActivite9(?int $couleurActivite9): AgendaConstantes {
        $this->couleurActivite9 = $couleurActivite9;
        return $this;
    }

    /**
     * Set the couleur calendrier.
     *
     * @param int|null $couleurCalendrier The couleur calendrier.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurCalendrier(?int $couleurCalendrier): AgendaConstantes {
        $this->couleurCalendrier = $couleurCalendrier;
        return $this;
    }

    /**
     * Set the couleur dim j feries.
     *
     * @param int|null $couleurDimJFeries The couleur dim j feries.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setCouleurDimJFeries(?int $couleurDimJFeries): AgendaConstantes {
        $this->couleurDimJFeries = $couleurDimJFeries;
        return $this;
    }

    /**
     * Set the disabled activity label on first row.
     *
     * @param bool|null $disabledActivityLabelOnFirstRow The disabled activity label on first row.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setDisabledActivityLabelOnFirstRow(?bool $disabledActivityLabelOnFirstRow): AgendaConstantes {
        $this->disabledActivityLabelOnFirstRow = $disabledActivityLabelOnFirstRow;
        return $this;
    }

    /**
     * Set the dossier fact pme.
     *
     * @param string|null $dossierFactPme The dossier fact pme.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setDossierFactPme(?string $dossierFactPme): AgendaConstantes {
        $this->dossierFactPme = $dossierFactPme;
        return $this;
    }

    /**
     * Set the heure debut.
     *
     * @param string|null $heureDebut The heure debut.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setHeureDebut(?string $heureDebut): AgendaConstantes {
        $this->heureDebut = $heureDebut;
        return $this;
    }

    /**
     * Set the heure fin.
     *
     * @param string|null $heureFin The heure fin.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setHeureFin(?string $heureFin): AgendaConstantes {
        $this->heureFin = $heureFin;
        return $this;
    }

    /**
     * Set the libelle activite7.
     *
     * @param string|null $libelleActivite7 The libelle activite7.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setLibelleActivite7(?string $libelleActivite7): AgendaConstantes {
        $this->libelleActivite7 = $libelleActivite7;
        return $this;
    }

    /**
     * Set the libelle activite8.
     *
     * @param string|null $libelleActivite8 The libelle activite8.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setLibelleActivite8(?string $libelleActivite8): AgendaConstantes {
        $this->libelleActivite8 = $libelleActivite8;
        return $this;
    }

    /**
     * Set the libelle activite9.
     *
     * @param string|null $libelleActivite9 The libelle activite9.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setLibelleActivite9(?string $libelleActivite9): AgendaConstantes {
        $this->libelleActivite9 = $libelleActivite9;
        return $this;
    }

    /**
     * Set the multi dossiers.
     *
     * @param bool|null $multiDossiers The multi dossiers.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setMultiDossiers(?bool $multiDossiers): AgendaConstantes {
        $this->multiDossiers = $multiDossiers;
        return $this;
    }

    /**
     * Set the text color activite1.
     *
     * @param int|null $textColorActivite1 The text color activite1.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setTextColorActivite1(?int $textColorActivite1): AgendaConstantes {
        $this->textColorActivite1 = $textColorActivite1;
        return $this;
    }

    /**
     * Set the text color activite10.
     *
     * @param int|null $textColorActivite10 The text color activite10.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setTextColorActivite10(?int $textColorActivite10): AgendaConstantes {
        $this->textColorActivite10 = $textColorActivite10;
        return $this;
    }

    /**
     * Set the text color activite11.
     *
     * @param int|null $textColorActivite11 The text color activite11.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setTextColorActivite11(?int $textColorActivite11): AgendaConstantes {
        $this->textColorActivite11 = $textColorActivite11;
        return $this;
    }

    /**
     * Set the text color activite2.
     *
     * @param int|null $textColorActivite2 The text color activite2.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setTextColorActivite2(?int $textColorActivite2): AgendaConstantes {
        $this->textColorActivite2 = $textColorActivite2;
        return $this;
    }

    /**
     * Set the text color activite3.
     *
     * @param int|null $textColorActivite3 The text color activite3.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setTextColorActivite3(?int $textColorActivite3): AgendaConstantes {
        $this->textColorActivite3 = $textColorActivite3;
        return $this;
    }

    /**
     * Set the text color activite4.
     *
     * @param int|null $textColorActivite4 The text color activite4.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setTextColorActivite4(?int $textColorActivite4): AgendaConstantes {
        $this->textColorActivite4 = $textColorActivite4;
        return $this;
    }

    /**
     * Set the text color activite5.
     *
     * @param int|null $textColorActivite5 The text color activite5.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setTextColorActivite5(?int $textColorActivite5): AgendaConstantes {
        $this->textColorActivite5 = $textColorActivite5;
        return $this;
    }

    /**
     * Set the text color activite6.
     *
     * @param int|null $textColorActivite6 The text color activite6.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setTextColorActivite6(?int $textColorActivite6): AgendaConstantes {
        $this->textColorActivite6 = $textColorActivite6;
        return $this;
    }

    /**
     * Set the text color activite7.
     *
     * @param int|null $textColorActivite7 The text color activite7.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setTextColorActivite7(?int $textColorActivite7): AgendaConstantes {
        $this->textColorActivite7 = $textColorActivite7;
        return $this;
    }

    /**
     * Set the text color activite8.
     *
     * @param int|null $textColorActivite8 The text color activite8.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setTextColorActivite8(?int $textColorActivite8): AgendaConstantes {
        $this->textColorActivite8 = $textColorActivite8;
        return $this;
    }

    /**
     * Set the text color activite9.
     *
     * @param int|null $textColorActivite9 The text color activite9.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setTextColorActivite9(?int $textColorActivite9): AgendaConstantes {
        $this->textColorActivite9 = $textColorActivite9;
        return $this;
    }

    /**
     * Set the text color dim j feries.
     *
     * @param int|null $textColorDimJFeries The text color dim j feries.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setTextColorDimJFeries(?int $textColorDimJFeries): AgendaConstantes {
        $this->textColorDimJFeries = $textColorDimJFeries;
        return $this;
    }

    /**
     * Set the use new gpe param.
     *
     * @param bool|null $useNewGpeParam The use new gpe param.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setUseNewGpeParam(?bool $useNewGpeParam): AgendaConstantes {
        $this->useNewGpeParam = $useNewGpeParam;
        return $this;
    }

    /**
     * Set the week mode.
     *
     * @param string|null $weekMode The week mode.
     * @return AgendaConstantes Returns this Agenda constantes.
     */
    public function setWeekMode(?string $weekMode): AgendaConstantes {
        $this->weekMode = $weekMode;
        return $this;
    }
}
