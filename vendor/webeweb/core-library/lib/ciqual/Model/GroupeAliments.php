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
 * Groupe aliments.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Model
 */
class GroupeAliments implements JsonSerializable {

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
    public const DOM_NODE_NAME = "ALIM_GRP";

    /**
     * Nom ENG sous-groupe.
     *
     * @var string|null
     */
    protected $nomEngSousGroupe;

    /**
     * Nom ENG sous sous-groupe.
     *
     * @var string|null
     */
    protected $nomEngSousSousGroupe;

    /**
     * Nom FR sous-groupe.
     *
     * @var string|null
     */
    protected $nomFrSousGroupe;

    /**
     * Nom FR sous sous-groupe.
     *
     * @var string|null
     */
    protected $nomFrSousSousGroupe;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the nom ENG sous-groupe.
     *
     * @return string|null Returns the nom ENG sous-groupe.
     */
    public function getNomEngSousGroupe(): ?string {
        return $this->nomEngSousGroupe;
    }

    /**
     * Get the nom ENG sous sous-groupe.
     *
     * @return string|null Returns the nom ENG sous sous-groupe.
     */
    public function getNomEngSousSousGroupe(): ?string {
        return $this->nomEngSousSousGroupe;
    }

    /**
     * Get the nom FR sous-groupe.
     *
     * @return string|null Returns the nom FR sous-groupe.
     */
    public function getNomFrSousGroupe(): ?string {
        return $this->nomFrSousGroupe;
    }

    /**
     * Get the nom FR sous sous-groupe.
     *
     * @return string|null Returns the nom FR sous sous-groupe.
     */
    public function getNomFrSousSousGroupe(): ?string {
        return $this->nomFrSousSousGroupe;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeGroupeAliments($this);
    }

    /**
     * Set the nom ENG sous-groupe.
     *
     * @param string|null $nomEngSousGroupe The nom ENG sous-groupe.
     * @return GroupeAliments Returns this groupe aliments.
     */
    public function setNomEngSousGroupe(?string $nomEngSousGroupe): GroupeAliments {
        $this->nomEngSousGroupe = $nomEngSousGroupe;
        return $this;
    }

    /**
     * Set the nom ENG sous sous-groupe.
     *
     * @param string|null $nomEngSousSousGroupe The nom ENG sous sous-groupe.
     * @return GroupeAliments Returns this groupe aliments.
     */
    public function setNomEngSousSousGroupe(?string $nomEngSousSousGroupe): GroupeAliments {
        $this->nomEngSousSousGroupe = $nomEngSousSousGroupe;
        return $this;
    }

    /**
     * Set the nom FR sous-groupe.
     *
     * @param string|null $nomFrSousGroupe The nom FR sous-groupe.
     * @return GroupeAliments Returns this groupe aliments.
     */
    public function setNomFrSousGroupe(?string $nomFrSousGroupe): GroupeAliments {
        $this->nomFrSousGroupe = $nomFrSousGroupe;
        return $this;
    }

    /**
     * Set the nom FR sous sous-groupe.
     *
     * @param string|null $nomFrSousSousGroupe The nom FR sous sous-groupe.
     * @return GroupeAliments Returns this groupe aliments.
     */
    public function setNomFrSousSousGroupe(?string $nomFrSousSousGroupe): GroupeAliments {
        $this->nomFrSousSousGroupe = $nomFrSousSousGroupe;
        return $this;
    }
}
