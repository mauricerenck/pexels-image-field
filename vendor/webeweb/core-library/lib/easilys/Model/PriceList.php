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

use WBW\Library\Common\Traits\Integers\IntegerIdTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;
use WBW\Library\Easilys\Traits\Booleans\BooleanIsValidatedTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerIdSiteOwnerTrait;
use WBW\Library\Easilys\Traits\Objects\SupplierTrait;
use WBW\Library\Easilys\Traits\Strings\StringDateCreatedTrait;
use WBW\Library\Easilys\Traits\Strings\StringDateEndTrait;
use WBW\Library\Easilys\Traits\Strings\StringDateStartTrait;
use WBW\Library\Easilys\Traits\Strings\StringDateUpdatedTrait;
use WBW\Library\Easilys\Traits\Strings\StringExtIdTrait;

/**
 * Price list.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class PriceList {

    use BooleanIsValidatedTrait;
    use IntegerIdSiteOwnerTrait;
    use StringDateCreatedTrait;
    use StringDateEndTrait;
    use StringDateStartTrait;
    use StringDateUpdatedTrait;
    use StringExtIdTrait;
    use IntegerIdTrait {
        setId as public;
    }
    use StringLabelTrait;
    use SupplierTrait;

    /**
     * Id user.
     *
     * @var int|null
     */
    protected $idUser;

    /**
     * Prod family.
     *
     * @var ProdFamily|null
     */
    protected $prodFamily;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the id user.
     *
     * @return int|null Returns the id user.
     */
    public function getIdUser(): ?int {
        return $this->idUser;
    }

    /**
     * Get the prod family.
     *
     * @return ProdFamily|null Returns the prod family.
     */
    public function getProdFamily(): ?ProdFamily {
        return $this->prodFamily;
    }

    /**
     * Set the id user.
     *
     * @param int|null $idUser The id user.
     * @return PriceList Returns this price list header.
     */
    public function setIdUser(?int $idUser): PriceList {
        $this->idUser = $idUser;
        return $this;
    }

    /**
     * Set the prod family.
     *
     * @param ProdFamily|null $prodFamily The prod family.
     * @return PriceList Returns this price list header.
     */
    public function setProdFamily(?ProdFamily $prodFamily): PriceList {
        $this->prodFamily = $prodFamily;
        return $this;
    }
}
