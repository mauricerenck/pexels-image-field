<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Compounds;

use WBW\Library\Traits\Strings\StringAddresseeTrait;
use WBW\Library\Traits\Strings\StringCountryTrait;
use WBW\Library\Traits\Strings\StringHouseNumberTrait;
use WBW\Library\Traits\Strings\StringLocationTrait;
use WBW\Library\Traits\Strings\StringPostalCodeTrait;
use WBW\Library\Traits\Strings\StringStreetNameTrait;

/**
 * Compound address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Compounds
 */
trait CompoundAddressTrait {

    use StringAddresseeTrait;
    use StringCountryTrait;
    use StringHouseNumberTrait;
    use StringLocationTrait;
    use StringPostalCodeTrait;
    use StringStreetNameTrait;

    /**
     * Addressee description.
     *
     * @var string|null
     */
    private $addresseeDescription;

    /**
     * Get the addressee description.
     *
     * @return string|null Returns the addressee description.
     */
    public function getAddresseeDescription(): ?string {
        return $this->addresseeDescription;
    }

    /**
     * Set the addressee description.
     *
     * @param string|null $addresseeDescription The addressee description.
     * @return self Returns this instance.
     */
    public function setAddresseeDescription(?string $addresseeDescription): self {
        $this->addresseeDescription = $addresseeDescription;
        return $this;
    }
}
