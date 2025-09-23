<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Ciqual\Model;

use JsonSerializable;
use WBW\Library\Ciqual\Serializer\JsonSerializer;
use WBW\Library\Ciqual\Traits\Strings\StringCodeSousGroupeTrait;
use WBW\Library\Ciqual\Traits\Strings\StringCodeSousSousGroupeTrait;
use WBW\Library\Ciqual\Traits\Strings\StringNomEngTrait;
use WBW\Library\Ciqual\Traits\Strings\StringNomFrTrait;
use WBW\Library\Common\Traits\Strings\StringCodeTrait;

/**
 * Aliment.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Model
 */
class Aliment implements JsonSerializable {

    use StringCodeTrait;
    use StringCodeSousGroupeTrait;
    use StringCodeSousSousGroupeTrait;
    use StringNomEngTrait;
    use StringNomFrTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "ALIM";

    /**
     * Code groupe.
     *
     * @var string|null
     */
    private $codeGroupe;

    /**
     * Nom index FR.
     *
     * @var string|null
     */
    private $nomIndexFr;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code groupe.
     *
     * @return string|null Returns the code groupe.
     */
    public function getCodeGroupe(): ?string {
        return $this->codeGroupe;
    }

    /**
     * Get the nom index FR.
     *
     * @return string|null Returns the nom index FR.
     */
    public function getNomIndexFr(): ?string {
        return $this->nomIndexFr;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeAliment($this);
    }

    /**
     * Set the code groupe.
     *
     * @param string|null $codeGroupe The code groupe.
     * @return Aliment Returns this aliment.
     */
    public function setCodeGroupe(?string $codeGroupe): Aliment {
        $this->codeGroupe = $codeGroupe;
        return $this;
    }

    /**
     * Set the nom index FR.
     *
     * @param string|null $nomIndexFr The nom index FR.
     * @return Aliment Returns this aliment.
     */
    public function setNomIndexFr(?string $nomIndexFr): Aliment {
        $this->nomIndexFr = $nomIndexFr;
        return $this;
    }
}
