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

/**
 * Composition.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Model
 */
class Composition implements JsonSerializable {

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "COMPO";

    /**
     * Code aliment.
     *
     * @var string|null
     */
    protected $codeAliment;

    /**
     * Code confiance.
     *
     * @var string|null
     */
    protected $codeConfiance;

    /**
     * Code constituant.
     *
     * @var string|null
     */
    protected $codeConstituant;

    /**
     * Code source.
     *
     * @var string|null
     */
    protected $codeSource;

    /**
     * Max.
     *
     * @var string|null
     */
    protected $max;

    /**
     * Min.
     *
     * @var string|null
     */
    protected $min;

    /**
     * Teneur.
     *
     * @var string|null
     */
    protected $teneur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code aliment.
     *
     * @return string|null Returns the code aliment.
     */
    public function getCodeAliment(): ?string {
        return $this->codeAliment;
    }

    /**
     * Get the code confiance.
     *
     * @return string|null Returns the code confiance.
     */
    public function getCodeConfiance(): ?string {
        return $this->codeConfiance;
    }

    /**
     * Get the code constituant.
     *
     * @return string|null Returns the code constituant.
     */
    public function getCodeConstituant(): ?string {
        return $this->codeConstituant;
    }

    /**
     * Get the code source.
     *
     * @return string|null Returns the code source.
     */
    public function getCodeSource(): ?string {
        return $this->codeSource;
    }

    /**
     * Get the max.
     *
     * @return string|null Returns the max.
     */
    public function getMax(): ?string {
        return $this->max;
    }

    /**
     * Get the min.
     *
     * @return string|null Returns the min.
     */
    public function getMin(): ?string {
        return $this->min;
    }

    /**
     * Get the teneur.
     *
     * @return string|null Returns the teneur.
     */
    public function getTeneur(): ?string {
        return $this->teneur;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeComposition($this);
    }

    /**
     * Set the code aliment.
     *
     * @param string|null $codeAliment The code aliment.
     * @return Composition Returns this composition.
     */
    public function setCodeAliment(?string $codeAliment): Composition {
        $this->codeAliment = $codeAliment;
        return $this;
    }

    /**
     * Set the code confiance.
     *
     * @param string|null $codeConfiance The code confiance.
     * @return Composition Returns this composition.
     */
    public function setCodeConfiance(?string $codeConfiance): Composition {
        $this->codeConfiance = $codeConfiance;
        return $this;
    }

    /**
     * Set the code constituant.
     *
     * @param string|null $codeConstituant The code constituant.
     * @return Composition Returns this composition.
     */
    public function setCodeConstituant(?string $codeConstituant): Composition {
        $this->codeConstituant = $codeConstituant;
        return $this;
    }

    /**
     * Set the code source.
     *
     * @param string|null $codeSource The code source.
     * @return Composition Returns this composition.
     */
    public function setCodeSource(?string $codeSource): Composition {
        $this->codeSource = $codeSource;
        return $this;
    }

    /**
     * Set the max.
     *
     * @param string|null $max The max.
     * @return Composition Returns this composition.
     */
    public function setMax(?string $max): Composition {
        $this->max = $max;
        return $this;
    }

    /**
     * Set the min.
     *
     * @param string|null $min The min.
     * @return Composition Returns this composition.
     */
    public function setMin(?string $min): Composition {
        $this->min = $min;
        return $this;
    }

    /**
     * Set the teneur.
     *
     * @param string|null $teneur The teneur.
     * @return Composition Returns this composition.
     */
    public function setTeneur(?string $teneur): Composition {
        $this->teneur = $teneur;
        return $this;
    }
}
