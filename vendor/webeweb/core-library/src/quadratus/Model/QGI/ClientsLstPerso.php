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
 * Clients lst perso.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ClientsLstPerso {

    /**
     * Chapitre.
     *
     * @var string|null
     */
    private $chapitre;

    /**
     * Coll creat.
     *
     * @var string|null
     */
    private $collCreat;

    /**
     * Coll modif.
     *
     * @var string|null
     */
    private $collModif;

    /**
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Description.
     *
     * @var string|null
     */
    private $description;

    /**
     * G uniq id.
     *
     * @var string|null
     */
    private $gUniqId;

    /**
     * Indice.
     *
     * @var int|null
     */
    private $indice;

    /**
     * Lst collab.
     *
     * @var string|null
     */
    private $lstCollab;

    /**
     * Option visu.
     *
     * @var string|null
     */
    private $optionVisu;

    /**
     * Origine.
     *
     * @var int|null
     */
    private $origine;

    /**
     * Periode deb.
     *
     * @var DateTime|null
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Type saisie.
     *
     * @var bool|null
     */
    private $typeSaisie;

    /**
     * Type sel.
     *
     * @var string|null
     */
    private $typeSel;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the chapitre.
     *
     * @return string|null Returns the chapitre.
     */
    public function getChapitre(): ?string {
        return $this->chapitre;
    }

    /**
     * Get the coll creat.
     *
     * @return string|null Returns the coll creat.
     */
    public function getCollCreat(): ?string {
        return $this->collCreat;
    }

    /**
     * Get the coll modif.
     *
     * @return string|null Returns the coll modif.
     */
    public function getCollModif(): ?string {
        return $this->collModif;
    }

    /**
     * Get the date creat.
     *
     * @return DateTime|null Returns the date creat.
     */
    public function getDateCreat(): ?DateTime {
        return $this->dateCreat;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif(): ?DateTime {
        return $this->dateModif;
    }

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Get the g uniq id.
     *
     * @return string|null Returns the g uniq id.
     */
    public function getGUniqId(): ?string {
        return $this->gUniqId;
    }

    /**
     * Get the indice.
     *
     * @return int|null Returns the indice.
     */
    public function getIndice(): ?int {
        return $this->indice;
    }

    /**
     * Get the lst collab.
     *
     * @return string|null Returns the lst collab.
     */
    public function getLstCollab(): ?string {
        return $this->lstCollab;
    }

    /**
     * Get the option visu.
     *
     * @return string|null Returns the option visu.
     */
    public function getOptionVisu(): ?string {
        return $this->optionVisu;
    }

    /**
     * Get the origine.
     *
     * @return int|null Returns the origine.
     */
    public function getOrigine(): ?int {
        return $this->origine;
    }

    /**
     * Get the periode deb.
     *
     * @return DateTime|null Returns the periode deb.
     */
    public function getPeriodeDeb(): ?DateTime {
        return $this->periodeDeb;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime|null Returns the periode fin.
     */
    public function getPeriodeFin(): ?DateTime {
        return $this->periodeFin;
    }

    /**
     * Get the type saisie.
     *
     * @return bool|null Returns the type saisie.
     */
    public function getTypeSaisie(): ?bool {
        return $this->typeSaisie;
    }

    /**
     * Get the type sel.
     *
     * @return string|null Returns the type sel.
     */
    public function getTypeSel(): ?string {
        return $this->typeSel;
    }

    /**
     * Set the chapitre.
     *
     * @param string|null $chapitre The chapitre.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setChapitre(?string $chapitre): ClientsLstPerso {
        $this->chapitre = $chapitre;
        return $this;
    }

    /**
     * Set the coll creat.
     *
     * @param string|null $collCreat The coll creat.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setCollCreat(?string $collCreat): ClientsLstPerso {
        $this->collCreat = $collCreat;
        return $this;
    }

    /**
     * Set the coll modif.
     *
     * @param string|null $collModif The coll modif.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setCollModif(?string $collModif): ClientsLstPerso {
        $this->collModif = $collModif;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setDateCreat(?DateTime $dateCreat): ClientsLstPerso {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setDateModif(?DateTime $dateModif): ClientsLstPerso {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setDescription(?string $description): ClientsLstPerso {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the g uniq id.
     *
     * @param string|null $gUniqId The g uniq id.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setGUniqId(?string $gUniqId): ClientsLstPerso {
        $this->gUniqId = $gUniqId;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int|null $indice The indice.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setIndice(?int $indice): ClientsLstPerso {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the lst collab.
     *
     * @param string|null $lstCollab The lst collab.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setLstCollab(?string $lstCollab): ClientsLstPerso {
        $this->lstCollab = $lstCollab;
        return $this;
    }

    /**
     * Set the option visu.
     *
     * @param string|null $optionVisu The option visu.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setOptionVisu(?string $optionVisu): ClientsLstPerso {
        $this->optionVisu = $optionVisu;
        return $this;
    }

    /**
     * Set the origine.
     *
     * @param int|null $origine The origine.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setOrigine(?int $origine): ClientsLstPerso {
        $this->origine = $origine;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): ClientsLstPerso {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setPeriodeFin(?DateTime $periodeFin): ClientsLstPerso {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the type saisie.
     *
     * @param bool|null $typeSaisie The type saisie.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setTypeSaisie(?bool $typeSaisie): ClientsLstPerso {
        $this->typeSaisie = $typeSaisie;
        return $this;
    }

    /**
     * Set the type sel.
     *
     * @param string|null $typeSel The type sel.
     * @return ClientsLstPerso Returns this Clients lst perso.
     */
    public function setTypeSel(?string $typeSel): ClientsLstPerso {
        $this->typeSel = $typeSel;
        return $this;
    }
}
