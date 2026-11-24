<?php

/*
 * This file is part of the wsdl-generator package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Wsdl2Php\Helper;

use WBW\Library\Wsdl2Php\Builder\ClassBuilder;

/**
 * Test class builder helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Helper
 */
class TestClassBuilderHelper {

    /**
     * Build the class.
     *
     * @return string Returns the class.
     */
    public static function buildClass(ClassBuilder $builder): string {

        $searches = [
            "{{ header }}",
            "{{ namespace }}",
            "{{ uses }}",
            "{{ classname }}",
            "{{ extends }}",
            "{{ implements }}",
            "{{ attributes }}",
            "{{ construct }}",
            "{{ methods }}",
        ];

        $replaces = [
            PackageBuilderHelper::buildHeader(),
            static::buildNamespace($builder),
            static::buildUses($builder),
            $builder->getClassname() . "Test",
            static::buildExtends(),
            "",
            "",
            "",
            static::buildMethods($builder),
        ];

        $template = file_get_contents(__DIR__ . "/../Resources/skeleton/PackageBuilder.class.txt");

        return str_replace($searches, $replaces, $template);
    }

    /**
     * Build the extends.
     *
     * @return string Returns the extends.
     */
    protected static function buildExtends(): string {
        return " extends AbstractTestCase";
    }

    /**
     * Build the methods.
     *
     * @param ClassBuilder $builder The builder.
     * @return string Returns the methods.
     */
    protected static function buildMethods(ClassBuilder $builder): string {

        $output = [];

        $template = file_get_contents(__DIR__ . "/../Resources/skeleton/TestClassBuilder.method.txt");
        foreach ($builder->getAttributes() as $current) {

            $searches = ["{{ attribute }}", "{{ classname }}"];
            $replaces = [$current, $builder->getClassname()];

            $output[] = str_replace($searches, $replaces, $template);
        }

        if (1 <= count($output)) {
            array_unshift($output, "");
        }

        return implode("\n", $output);
    }

    /**
     * Build the namespace.
     *
     * @param ClassBuilder $builder The class.
     * @return string Returns the namespace.
     */
    protected static function buildNamespace(ClassBuilder $builder): string {

        $namespace = ClassBuilderHelper::buildNamespace($builder);

        return str_replace("{{ namespace }}", "{{ namespace }}\\Tests\\", $namespace);
    }

    /**
     * Build the uses.
     *
     * @param ClassBuilder $builder The builder.
     * @return string Returns the uses.
     */
    protected static function buildUses(ClassBuilder $builder): string {

        $output = [];

        sort($output);
        array_unshift($output, "");

        return implode("\n", $output);
    }
}
