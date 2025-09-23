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

namespace WBW\Library\Easilys\Traits\Integers;

/**
 * Integer id document product sheet trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait IntegerIdDocumentProductSheetTrait {

    /**
     * Id document product sheet.
     *
     * @var int|null
     */
    protected $idDocumentProductSheet;

    /**
     * Get the id document product sheet.
     *
     * @return int|null Returns the id document product sheet.
     */
    public function getIdDocumentProductSheet(): ?int {
        return $this->idDocumentProductSheet;
    }

    /**
     * Set the id document product sheet.
     *
     * @param int|null $idDocumentProductSheet The id document product sheet.
     * @return self Returns this instance.
     */
    public function setIdDocumentProductSheet(?int $idDocumentProductSheet): self {
        $this->idDocumentProductSheet = $idDocumentProductSheet;
        return $this;
    }
}
