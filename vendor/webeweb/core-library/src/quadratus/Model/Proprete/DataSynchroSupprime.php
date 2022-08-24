<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

/**
 * Data synchro supprime.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DataSynchroSupprime {

    /**
     * Type data.
     *
     * @var string|null
     */
    private $typeData;

    /**
     * Uniq id blocage.
     *
     * @var string|null
     */
    private $uniqIdBlocage;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the type data.
     *
     * @return string|null Returns the type data.
     */
    public function getTypeData(): ?string {
        return $this->typeData;
    }

    /**
     * Get the uniq id blocage.
     *
     * @return string|null Returns the uniq id blocage.
     */
    public function getUniqIdBlocage(): ?string {
        return $this->uniqIdBlocage;
    }

    /**
     * Set the type data.
     *
     * @param string|null $typeData The type data.
     * @return DataSynchroSupprime Returns this Data synchro supprime.
     */
    public function setTypeData(?string $typeData): DataSynchroSupprime {
        $this->typeData = $typeData;
        return $this;
    }

    /**
     * Set the uniq id blocage.
     *
     * @param string|null $uniqIdBlocage The uniq id blocage.
     * @return DataSynchroSupprime Returns this Data synchro supprime.
     */
    public function setUniqIdBlocage(?string $uniqIdBlocage): DataSynchroSupprime {
        $this->uniqIdBlocage = $uniqIdBlocage;
        return $this;
    }
}
