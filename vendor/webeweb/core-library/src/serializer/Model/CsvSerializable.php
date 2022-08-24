<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Model;

/**
 * CSV serializable.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Model
 */
interface CsvSerializable {

    /**
     * CSV serialize.
     *
     * @return string|null Returns the serialized instance into CSV.
     */
    public function csvSerialize(): ?string;
}
