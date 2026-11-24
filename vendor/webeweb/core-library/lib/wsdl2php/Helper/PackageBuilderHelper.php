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

namespace WBW\Library\Wsdl2Php\Helper;

use DateTime;
use WBW\Library\Wsdl2Php\Builder\PackageBuilder;

/**
 * Package builder helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Helper
 */
class PackageBuilderHelper {

    /**
     * Build.
     *
     * @param PackageBuilder $builder The builder.
     * @return void
     */
    public static function build(PackageBuilder $builder): void {
        static::buildClient($builder);
        static::buildSources($builder);
        //static::buildTests($builder);
    }

    /**
     * Build the client.
     *
     * @param PackageBuilder $builder The builder.
     * @return void
     */
    protected static function buildClient(PackageBuilder $builder): void {

        $filename = implode(DIRECTORY_SEPARATOR, [
            $builder->getDirectory(),
            "src",
            $builder->getProvider()->getService()->getName() . "SoapClient",
        ]);

        $template = ClientBuilderHelper::buildClass($builder);
        $contents = static::fillTemplate($builder, $template);

        file_put_contents("$filename.php", $contents);
    }

    /**
     * Build the header.
     *
     * @return string Returns the header.
     */
    public static function buildHeader(): string {
        return file_get_contents(__DIR__ . "/../Resources/skeleton/PackageBuilder.header.txt");
    }

    /**
     * Build the sources.
     *
     * @param PackageBuilder $builder The builder.
     * @return void
     */
    protected static function buildSources(PackageBuilder $builder): void {

        foreach ($builder->getClassBuilders() as $current) {

            $filename = implode(DIRECTORY_SEPARATOR, [
                $builder->getDirectory(),
                "src",
                ClassBuilderHelper::getFilename($current),
            ]);

            $template = ClassBuilderHelper::buildClass($current);
            $contents = static::fillTemplate($builder, $template);

            $directory = dirname($filename);
            if (false === file_exists($directory)) {
                mkdir($directory);
            }

            file_put_contents("$filename.php", $contents);
        }
    }

    /**
     * Build the tests.
     *
     * @param PackageBuilder $builder The builder.
     * @return void
     */
    protected static function buildTests(PackageBuilder $builder): void {

        foreach ($builder->getClassBuilders() as $current) {

            $filename = implode(DIRECTORY_SEPARATOR, [
                $builder->getDirectory(),
                "tests",
                ClassBuilderHelper::getFilename($current) . "Test",
            ]);

            $template = TestClassBuilderHelper::buildClass($current);
            $contents = static::fillTemplate($builder, $template);

            $directory = dirname($filename);
            if (false === file_exists($directory)) {
                mkdir($directory);
            }

            file_put_contents("$filename.php", $contents);
        }
    }

    /**
     * Fill the template.
     *
     * @param PackageBuilder $builder The builder.
     * @param string $template The template.
     * @return string Returns the filled template
     */
    protected static function fillTemplate(PackageBuilder $builder, string $template): string {

        $searches = [
            "{{ package }}",
            "{{ year }}",
            "{{ copyright }}",
            "{{ namespace }}",
            "{{ author }}",
        ];

        $replaces = [
            $builder->getPackage(),
            null === $builder->getYear() ? (new DateTime())->format("Y") : $builder->getYear(),
            $builder->getCopyright(),
            $builder->getNamespace(),
            $builder->getAuthor(),
        ];

        return str_replace($searches, $replaces, $template);
    }
}
