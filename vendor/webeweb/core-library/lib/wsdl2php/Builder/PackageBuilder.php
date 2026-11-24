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

namespace WBW\Library\Wsdl2Php\Builder;

use WBW\Library\Common\Traits\Strings\StringDirectoryTrait;
use WBW\Library\Wsdl2Php\Helper\PackageBuilderHelper;
use WBW\Library\Wsdl2Php\Provider\WsdlProvider;
use WBW\Library\Wsdl2Php\Provider\WsdlProviderTrait;
use WBW\Library\Wsdl2Php\Traits\Strings\StringNamespaceTrait;

/**
 * Package builder.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Builder
 */
class PackageBuilder {

    use StringDirectoryTrait;
    use StringNamespaceTrait;
    use WsdlProviderTrait;

    /**
     * Author.
     *
     * @var string|null
     */
    private $author;

    /**
     * Class builders.
     *
     * @var ClassBuilder[]|null
     */
    private $classBuilders;

    /**
     * Copyright.
     *
     * @var string|null
     */
    private $copyright;

    /**
     * Package.
     *
     * @var string|null
     */
    private $package;

    /**
     * Year.
     *
     * @var string|null
     */
    private $year;

    /**
     * Constructor.
     *
     * @param WsdlProvider $provider The WSDL provider.
     */
    public function __construct(WsdlProvider $provider) {
        $this->setClassBuilders([]);
        $this->setProvider($provider);
    }

    /**
     * Add a class builder.
     *
     * @param ClassBuilder $classBuilder The class builder.
     * @return PackageBuilder Returns this package builder.
     */
    public function addClassBuilder(ClassBuilder $classBuilder): PackageBuilder {
        $this->classBuilders[] = $classBuilder;
        return $this;
    }

    /**
     * Build.
     *
     * @return void
     */
    public function build(): void {
        PackageBuilderHelper::build($this);
    }

    /**
     * Get the author.
     *
     * @return string|null Returns the author.
     */
    public function getAuthor(): ?string {
        return $this->author;
    }

    /**
     * Get the class builders.
     *
     * @return ClassBuilder[] Returns the class builders.
     */
    public function getClassBuilders(): array {
        return $this->classBuilders;
    }

    /**
     * Get the copyright.
     *
     * @return string|null Returns the copyright.
     */
    public function getCopyright(): ?string {
        return $this->copyright;
    }

    /**
     * Get the package.
     *
     * @return string|null Returns the package.
     */
    public function getPackage(): ?string {
        return $this->package;
    }

    /**
     * Get the year.
     *
     * @return string|null Returns the year.
     */
    public function getYear(): ?string {
        return $this->year;
    }

    /**
     * Load.
     *
     * @return PackageBuilder Returns this package builder.
     */
    public function load(): PackageBuilder {

        foreach ($this->getProvider()->getTypes() as $current) {

            $builder = new ClassBuilder($current);
            $builder->setProvider($this->getProvider());
            $builder->load()->sort();

            $this->addClassBuilder($builder);
        }

        return $this;
    }

    /**
     * Set the author.
     *
     * @param string|null $author The author.
     * @return PackageBuilder Returns this package builder.
     */
    public function setAuthor(?string $author): PackageBuilder {
        $this->author = $author;
        return $this;
    }

    /**
     * Set the class builders.
     *
     * @param ClassBuilder[] $classBuilders The class builders.
     * @return PackageBuilder Returns this package builder.
     */
    protected function setClassBuilders(array $classBuilders): PackageBuilder {
        $this->classBuilders = $classBuilders;
        return $this;
    }

    /**
     * Set the copyright.
     *
     * @param string|null $copyright The copyright.
     * @return PackageBuilder Returns this package builder.
     */
    public function setCopyright(?string $copyright): PackageBuilder {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * Set the package.
     *
     * @param string|null $package The package.
     * @return PackageBuilder Returns this package builder.
     */
    public function setPackage(?string $package): PackageBuilder {
        $this->package = $package;
        return $this;
    }

    /**
     * Set the year.
     *
     * @param string|null $year The year.
     * @return PackageBuilder Returns this package builder.
     */
    public function setYear(?string $year): PackageBuilder {
        $this->year = $year;
        return $this;
    }
}
