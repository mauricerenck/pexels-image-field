<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider\Quote;

use DateTime;
use InvalidArgumentException;
use Symfony\Component\Yaml\Yaml;
use WBW\Library\Symfony\Model\Quote;
use WBW\Library\Symfony\Provider\AbstractQuoteProvider;
use WBW\Library\Symfony\Provider\QuoteProviderInterface;
use WBW\Library\Traits\Strings\StringFilenameTrait;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * YAML quote provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Quote
 */
class YamlQuoteProvider extends AbstractQuoteProvider {

    use StringFilenameTrait {
        setFilename as protected;
    }

    /**
     * Constructor.
     *
     * @param string|null $filename The filename.
     * @throws InvalidArgumentException Throws an invalid argument exception if the file was not found.
     */
    public function __construct(?string $filename) {
        parent::__construct();

        $this->setFilename($filename);
    }

    /**
     * {@inheritdoc}
     */
    public function getDomain(): string {
        return basename($this->getFilename(), ".yml");
    }

    /**
     * Get the filename.
     *
     * @return string|null Returns the filename.
     */
    public function getFilename(): ?string {
        return $this->filename;
    }

    /**
     * Initializes.
     *
     * @return void
     */
    protected function init(): void {

        $fileContent = file_get_contents($this->getFilename());

        $yamlContent = Yaml::parse($fileContent);

        foreach ($yamlContent as $k => $v) {

            // Force year to manage the leap years.
            $date = DateTime::createFromFormat("!Y.m.d", "2016." . $k);

            $model = new Quote();
            $model->setDate(false === $date ? null : $date);
            $model->setAuthor(ArrayHelper::get($v, "author"));
            $model->setContent(ArrayHelper::get($v, "content"));
            $model->setSaint(ArrayHelper::get($v, "saint"));

            $this->quotes[$k] = $model;
        }
    }

    /**
     * Set the filename.
     *
     * @param string|null $filename The filename.
     * @return YamlQuoteProvider Returns this quote provider.
     * @throws InvalidArgumentException Throws an invalid argument exception if the file was not found.
     */
    protected function setFilename(?string $filename): QuoteProviderInterface {

        if (false === realpath($filename)) {
            throw new InvalidArgumentException(sprintf('The file "%s" was not found', $filename));
        }

        $this->filename = realpath($filename);
        return $this;
    }
}
