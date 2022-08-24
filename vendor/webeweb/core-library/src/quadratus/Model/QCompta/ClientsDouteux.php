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
 * Clients douteux.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class ClientsDouteux {

    /**
     * Date doute.
     *
     * @var DateTime|null
     */
    private $dateDoute;

    /**
     * Mention.
     *
     * @var string|null
     */
    private $mention;

    /**
     * Mt creance base ht.
     *
     * @var float|null
     */
    private $mtCreanceBaseHt;

    /**
     * Mt creance ttc deb exo.
     *
     * @var float|null
     */
    private $mtCreanceTtcDebExo;

    /**
     * Mt creance ttc dev dout exo.
     *
     * @var float|null
     */
    private $mtCreanceTtcDevDoutExo;

    /**
     * Mt creance ttc irrec exo.
     *
     * @var float|null
     */
    private $mtCreanceTtcIrrecExo;

    /**
     * Mt creance ttc regl exo.
     *
     * @var float|null
     */
    private $mtCreanceTtcReglExo;

    /**
     * Mt provision deb exo.
     *
     * @var float|null
     */
    private $mtProvisionDebExo;

    /**
     * Mt provision dot exo.
     *
     * @var float|null
     */
    private $mtProvisionDotExo;

    /**
     * Mt rep provision irrec.
     *
     * @var float|null
     */
    private $mtRepProvisionIrrec;

    /**
     * Mt rep provision regl.
     *
     * @var float|null
     */
    private $mtRepProvisionRegl;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Observations.
     *
     * @var string|null
     */
    private $observations;

    /**
     * Ref image.
     *
     * @var string|null
     */
    private $refImage;

    /**
     * Taux doute deb exo.
     *
     * @var float|null
     */
    private $tauxDouteDebExo;

    /**
     * Taux doute exo.
     *
     * @var float|null
     */
    private $tauxDouteExo;

    /**
     * Tx tva creance.
     *
     * @var float|null
     */
    private $txTvaCreance;

    /**
     * Tx tva creance force.
     *
     * @var bool|null
     */
    private $txTvaCreanceForce;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the date doute.
     *
     * @return DateTime|null Returns the date doute.
     */
    public function getDateDoute(): ?DateTime {
        return $this->dateDoute;
    }

    /**
     * Get the mention.
     *
     * @return string|null Returns the mention.
     */
    public function getMention(): ?string {
        return $this->mention;
    }

    /**
     * Get the mt creance base ht.
     *
     * @return float|null Returns the mt creance base ht.
     */
    public function getMtCreanceBaseHt(): ?float {
        return $this->mtCreanceBaseHt;
    }

    /**
     * Get the mt creance ttc deb exo.
     *
     * @return float|null Returns the mt creance ttc deb exo.
     */
    public function getMtCreanceTtcDebExo(): ?float {
        return $this->mtCreanceTtcDebExo;
    }

    /**
     * Get the mt creance ttc dev dout exo.
     *
     * @return float|null Returns the mt creance ttc dev dout exo.
     */
    public function getMtCreanceTtcDevDoutExo(): ?float {
        return $this->mtCreanceTtcDevDoutExo;
    }

    /**
     * Get the mt creance ttc irrec exo.
     *
     * @return float|null Returns the mt creance ttc irrec exo.
     */
    public function getMtCreanceTtcIrrecExo(): ?float {
        return $this->mtCreanceTtcIrrecExo;
    }

    /**
     * Get the mt creance ttc regl exo.
     *
     * @return float|null Returns the mt creance ttc regl exo.
     */
    public function getMtCreanceTtcReglExo(): ?float {
        return $this->mtCreanceTtcReglExo;
    }

    /**
     * Get the mt provision deb exo.
     *
     * @return float|null Returns the mt provision deb exo.
     */
    public function getMtProvisionDebExo(): ?float {
        return $this->mtProvisionDebExo;
    }

    /**
     * Get the mt provision dot exo.
     *
     * @return float|null Returns the mt provision dot exo.
     */
    public function getMtProvisionDotExo(): ?float {
        return $this->mtProvisionDotExo;
    }

    /**
     * Get the mt rep provision irrec.
     *
     * @return float|null Returns the mt rep provision irrec.
     */
    public function getMtRepProvisionIrrec(): ?float {
        return $this->mtRepProvisionIrrec;
    }

    /**
     * Get the mt rep provision regl.
     *
     * @return float|null Returns the mt rep provision regl.
     */
    public function getMtRepProvisionRegl(): ?float {
        return $this->mtRepProvisionRegl;
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
     * Get the observations.
     *
     * @return string|null Returns the observations.
     */
    public function getObservations(): ?string {
        return $this->observations;
    }

    /**
     * Get the ref image.
     *
     * @return string|null Returns the ref image.
     */
    public function getRefImage(): ?string {
        return $this->refImage;
    }

    /**
     * Get the taux doute deb exo.
     *
     * @return float|null Returns the taux doute deb exo.
     */
    public function getTauxDouteDebExo(): ?float {
        return $this->tauxDouteDebExo;
    }

    /**
     * Get the taux doute exo.
     *
     * @return float|null Returns the taux doute exo.
     */
    public function getTauxDouteExo(): ?float {
        return $this->tauxDouteExo;
    }

    /**
     * Get the tx tva creance.
     *
     * @return float|null Returns the tx tva creance.
     */
    public function getTxTvaCreance(): ?float {
        return $this->txTvaCreance;
    }

    /**
     * Get the tx tva creance force.
     *
     * @return bool|null Returns the tx tva creance force.
     */
    public function getTxTvaCreanceForce(): ?bool {
        return $this->txTvaCreanceForce;
    }

    /**
     * Set the date doute.
     *
     * @param DateTime|null $dateDoute The date doute.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setDateDoute(?DateTime $dateDoute): ClientsDouteux {
        $this->dateDoute = $dateDoute;
        return $this;
    }

    /**
     * Set the mention.
     *
     * @param string|null $mention The mention.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMention(?string $mention): ClientsDouteux {
        $this->mention = $mention;
        return $this;
    }

    /**
     * Set the mt creance base ht.
     *
     * @param float|null $mtCreanceBaseHt The mt creance base ht.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtCreanceBaseHt(?float $mtCreanceBaseHt): ClientsDouteux {
        $this->mtCreanceBaseHt = $mtCreanceBaseHt;
        return $this;
    }

    /**
     * Set the mt creance ttc deb exo.
     *
     * @param float|null $mtCreanceTtcDebExo The mt creance ttc deb exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtCreanceTtcDebExo(?float $mtCreanceTtcDebExo): ClientsDouteux {
        $this->mtCreanceTtcDebExo = $mtCreanceTtcDebExo;
        return $this;
    }

    /**
     * Set the mt creance ttc dev dout exo.
     *
     * @param float|null $mtCreanceTtcDevDoutExo The mt creance ttc dev dout exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtCreanceTtcDevDoutExo(?float $mtCreanceTtcDevDoutExo): ClientsDouteux {
        $this->mtCreanceTtcDevDoutExo = $mtCreanceTtcDevDoutExo;
        return $this;
    }

    /**
     * Set the mt creance ttc irrec exo.
     *
     * @param float|null $mtCreanceTtcIrrecExo The mt creance ttc irrec exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtCreanceTtcIrrecExo(?float $mtCreanceTtcIrrecExo): ClientsDouteux {
        $this->mtCreanceTtcIrrecExo = $mtCreanceTtcIrrecExo;
        return $this;
    }

    /**
     * Set the mt creance ttc regl exo.
     *
     * @param float|null $mtCreanceTtcReglExo The mt creance ttc regl exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtCreanceTtcReglExo(?float $mtCreanceTtcReglExo): ClientsDouteux {
        $this->mtCreanceTtcReglExo = $mtCreanceTtcReglExo;
        return $this;
    }

    /**
     * Set the mt provision deb exo.
     *
     * @param float|null $mtProvisionDebExo The mt provision deb exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtProvisionDebExo(?float $mtProvisionDebExo): ClientsDouteux {
        $this->mtProvisionDebExo = $mtProvisionDebExo;
        return $this;
    }

    /**
     * Set the mt provision dot exo.
     *
     * @param float|null $mtProvisionDotExo The mt provision dot exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtProvisionDotExo(?float $mtProvisionDotExo): ClientsDouteux {
        $this->mtProvisionDotExo = $mtProvisionDotExo;
        return $this;
    }

    /**
     * Set the mt rep provision irrec.
     *
     * @param float|null $mtRepProvisionIrrec The mt rep provision irrec.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtRepProvisionIrrec(?float $mtRepProvisionIrrec): ClientsDouteux {
        $this->mtRepProvisionIrrec = $mtRepProvisionIrrec;
        return $this;
    }

    /**
     * Set the mt rep provision regl.
     *
     * @param float|null $mtRepProvisionRegl The mt rep provision regl.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtRepProvisionRegl(?float $mtRepProvisionRegl): ClientsDouteux {
        $this->mtRepProvisionRegl = $mtRepProvisionRegl;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setNumeroCompte(?string $numeroCompte): ClientsDouteux {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the observations.
     *
     * @param string|null $observations The observations.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setObservations(?string $observations): ClientsDouteux {
        $this->observations = $observations;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string|null $refImage The ref image.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setRefImage(?string $refImage): ClientsDouteux {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the taux doute deb exo.
     *
     * @param float|null $tauxDouteDebExo The taux doute deb exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setTauxDouteDebExo(?float $tauxDouteDebExo): ClientsDouteux {
        $this->tauxDouteDebExo = $tauxDouteDebExo;
        return $this;
    }

    /**
     * Set the taux doute exo.
     *
     * @param float|null $tauxDouteExo The taux doute exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setTauxDouteExo(?float $tauxDouteExo): ClientsDouteux {
        $this->tauxDouteExo = $tauxDouteExo;
        return $this;
    }

    /**
     * Set the tx tva creance.
     *
     * @param float|null $txTvaCreance The tx tva creance.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setTxTvaCreance(?float $txTvaCreance): ClientsDouteux {
        $this->txTvaCreance = $txTvaCreance;
        return $this;
    }

    /**
     * Set the tx tva creance force.
     *
     * @param bool|null $txTvaCreanceForce The tx tva creance force.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setTxTvaCreanceForce(?bool $txTvaCreanceForce): ClientsDouteux {
        $this->txTvaCreanceForce = $txTvaCreanceForce;
        return $this;
    }
}
