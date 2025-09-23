<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Model;

/**
 * Nutrition value.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class NutritionValue {

    /**
     * Calcium.
     *
     * @var int|null
     */
    protected $calcium;

    /**
     * Carbohydrate.
     *
     * @var int|null
     */
    protected $carbohydrate;

    /**
     * Energy Kcal.
     *
     * @var int|null
     */
    protected $energyKcal;

    /**
     * Energy Kj.
     *
     * @var int|null
     */
    protected $energyKj;

    /**
     * Ethanol.
     *
     * @var int|null
     */
    protected $ethanol;

    /**
     * Fiber.
     *
     * @var int|null
     */
    protected $fiber;

    /**
     * Including saturated fatty acids.
     *
     * @var int|null
     */
    protected $includingSaturatedFattyAcids;

    /**
     * Including sugar.
     *
     * @var int|null
     */
    protected $includingSugar;

    /**
     * Lipid.
     *
     * @var int|null
     */
    protected $lipid;

    /**
     * Organic acids.
     *
     * @var int|null
     */
    protected $organicAcid;

    /**
     * Polyols.
     *
     * @var int|null
     */
    protected $polyols;

    /**
     * Protein.
     *
     * @var int|null
     */
    protected $protein;

    /**
     * Salt.
     *
     * @var int|null
     */
    protected $salt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the calcium.
     *
     * @return int|null Returns the calcium.
     */
    public function getCalcium(): ?int {
        return $this->calcium;
    }

    /**
     * Get the carbohydrate.
     *
     * @return int|null Returns the carbohydrate.
     */
    public function getCarbohydrate(): ?int {
        return $this->carbohydrate;
    }

    /**
     * Get the energy Kcal.
     *
     * @return int|null Returns the energy Kcal.
     */
    public function getEnergyKcal(): ?int {
        return $this->energyKcal;
    }

    /**
     * Get the energy Kj.
     *
     * @return int|null Returns the energy Kj.
     */
    public function getEnergyKj(): ?int {
        return $this->energyKj;
    }

    /**
     * Get the ethanol.
     *
     * @return int|null Returns the ethanol.
     */
    public function getEthanol(): ?int {
        return $this->ethanol;
    }

    /**
     * Get the fiber.
     *
     * @return int|null Returns the fiber.
     */
    public function getFiber(): ?int {
        return $this->fiber;
    }

    /**
     * Get the including saturated fatty acids.
     *
     * @return int|null Returns the including saturated fatty acids.
     */
    public function getIncludingSaturatedFattyAcids(): ?int {
        return $this->includingSaturatedFattyAcids;
    }

    /**
     * Get the including sugar.
     *
     * @return int|null Returns the including sugar.
     */
    public function getIncludingSugar(): ?int {
        return $this->includingSugar;
    }

    /**
     * Get the lipid.
     *
     * @return int|null Returns the lipid.
     */
    public function getLipid(): ?int {
        return $this->lipid;
    }

    /**
     * Get the organic acid.
     *
     * @return int|null Returns the organic acid.
     */
    public function getOrganicAcid(): ?int {
        return $this->organicAcid;
    }

    /**
     * Get the polyols.
     *
     * @return int|null Returns the polyols.
     */
    public function getPolyols(): ?int {
        return $this->polyols;
    }

    /**
     * Get the protein.
     *
     * @return int|null Returns the protein.
     */
    public function getProtein(): ?int {
        return $this->protein;
    }

    /**
     * Get the salt.
     *
     * @return int|null Returns the salt.
     */
    public function getSalt(): ?int {
        return $this->salt;
    }

    /**
     * Set the calcium.
     *
     * @param int|null $calcium The calcium.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setCalcium(?int $calcium): NutritionValue {
        $this->calcium = $calcium;
        return $this;
    }

    /**
     * Set the carbohydrate.
     *
     * @param int|null $carbohydrate The carbohydrate.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setCarbohydrate(?int $carbohydrate): NutritionValue {
        $this->carbohydrate = $carbohydrate;
        return $this;
    }

    /**
     * Set the energy Kcal.
     *
     * @param int|null $energyKcal The energy Kcal.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setEnergyKcal(?int $energyKcal): NutritionValue {
        $this->energyKcal = $energyKcal;
        return $this;
    }

    /**
     * Set the energy Kj.
     *
     * @param int|null $energyKj The energy Kj.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setEnergyKj(?int $energyKj): NutritionValue {
        $this->energyKj = $energyKj;
        return $this;
    }

    /**
     * Set the ethanol.
     *
     * @param int|null $ethanol The ethanol.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setEthanol(?int $ethanol): NutritionValue {
        $this->ethanol = $ethanol;
        return $this;
    }

    /**
     * Set the fiber.
     *
     * @param int|null $fiber The fiber.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setFiber(?int $fiber): NutritionValue {
        $this->fiber = $fiber;
        return $this;
    }

    /**
     * Set the including saturated fatty acids.
     *
     * @param int|null $includingSaturatedFattyAcids The including saturated fatty acids.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setIncludingSaturatedFattyAcids(?int $includingSaturatedFattyAcids): NutritionValue {
        $this->includingSaturatedFattyAcids = $includingSaturatedFattyAcids;
        return $this;
    }

    /**
     * Set the including sugar.
     *
     * @param int|null $includingSugar The including sugar.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setIncludingSugar(?int $includingSugar): NutritionValue {
        $this->includingSugar = $includingSugar;
        return $this;
    }

    /**
     * Set the lipid.
     *
     * @param int|null $lipid The lipid.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setLipid(?int $lipid): NutritionValue {
        $this->lipid = $lipid;
        return $this;
    }

    /**
     * Set the organic acid.
     *
     * @param int|null $organicAcid The organic acid.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setOrganicAcid(?int $organicAcid): NutritionValue {
        $this->organicAcid = $organicAcid;
        return $this;
    }

    /**
     * Set the polyols.
     *
     * @param int|null $polyols The polyols.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setPolyols(?int $polyols): NutritionValue {
        $this->polyols = $polyols;
        return $this;
    }

    /**
     * Set the protein.
     *
     * @param int|null $protein The protein.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setProtein(?int $protein): NutritionValue {
        $this->protein = $protein;
        return $this;
    }

    /**
     * Set the salt.
     *
     * @param int|null $salt The salt.
     * @return NutritionValue Returns this nutrition value.
     */
    public function setSalt(?int $salt): NutritionValue {
        $this->salt = $salt;
        return $this;
    }
}
