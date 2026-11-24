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

use WBW\Library\Wsdl2Php\Builder\ClassBuilder;
use WBW\Library\Wsdl2Php\Model\IndexedNode;

/**
 * Class builder helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Helper
 */
class ClassBuilderHelper {

    /**
     * Build the attributes.
     *
     * @param ClassBuilder $builder The builder.
     * @return string Returns the attributes.
     */
    protected static function buildAttributes(ClassBuilder $builder): string {

        $output = [];

        $template = file_get_contents(__DIR__ . "/../Resources/skeleton/ClassBuilder.attribute.txt");
        foreach ($builder->getAttributes() as $attribute) {

            $searches = ["{{ attribute }}", "{{ type }}"];
            $replaces = [$attribute, $builder->getTypes()[$attribute]];

            $output[] = str_replace($searches, $replaces, $template);
        }

        if (1 <= count($output)) {
            $output[] = "";
        }

        return implode("\n", $output);
    }

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
            $builder->getClassname(),
            static::buildExtends($builder),
            static::buildImplements($builder),
            static::buildAttributes($builder),
            static::buildConstruct($builder),
            static::buildMethods($builder),
        ];

        $template = file_get_contents(__DIR__ . "/../Resources/skeleton/PackageBuilder.class.txt");

        return str_replace($searches, $replaces, $template);
    }

    /**
     * Build the construct.
     *
     * @param ClassBuilder $builder The builder.
     * @return string Returns the construct.
     */
    protected static function buildConstruct(ClassBuilder $builder): string {
        return file_get_contents(__DIR__ . "/../Resources/skeleton/ClassBuilder.__construct.txt");
    }

    /**
     * Build the extends.
     *
     * @param ClassBuilder $builder The builder.
     * @return string Returns the extends.
     */
    protected static function buildExtends(ClassBuilder $builder): string {

        if (null === $builder->getExtends()) {
            return "";
        }

        return " extends " . $builder->getExtends();
    }

    /**
     * Build the getters.
     *
     * @param ClassBuilder $builder The builder.
     * @return string Returns the getters.
     */
    protected static function buildGetters(ClassBuilder $builder): string {

        $output = [];

        $template = file_get_contents(__DIR__ . "/../Resources/skeleton/ClassBuilder.getter.txt");
        foreach ($builder->getAttributes() as $current) {

            $type   = $builder->getTypes()[$current];
            $return = false === $builder->isPhpArray($type) ? $type : "array";

            $searches = ["{{ attribute }}", "{{ type }}", "{{ return }}", "{{ Attribute }}"];
            $replaces = [$current, $type, $return, ucfirst($current)];

            $output[] = str_replace($searches, $replaces, $template);
        }

        if (1 <= count($output)) {
            array_unshift($output, "");
        }

        return implode("\n", $output);
    }

    /**
     * Build the implements.
     *
     * @param ClassBuilder $builder The builder.
     * @return string Returns the implements.
     */
    protected static function buildImplements(ClassBuilder $builder): string {

        if (0 === count($builder->getImplements())) {
            return "";
        }

        return " implements " . implode(",", $builder->getImplements());
    }

    /**
     * Build the methods.
     *
     * @param ClassBuilder $builder The builder.
     * @return string Returns the methods.
     */
    protected static function buildMethods(ClassBuilder $builder): string {

        $getters = static::buildGetters($builder);
        $setters = static::buildSetters($builder);

        return $getters . $setters;
    }

    /**
     * Build the namespace.
     *
     * @param ClassBuilder $builder The class.
     * @return string Returns the namespace.
     */
    public static function buildNamespace(ClassBuilder $builder): string {

        $namespace = "Model";

        /** @var IndexedNode $node */
        $node = $builder->getNode();

        if (true === $builder->getProvider()->isRequest($node)) {
            $namespace = "Request";
        }

        if (true === $builder->getProvider()->isResponse($node)) {
            $namespace = "Response";
        }

        return "{{ namespace }}\\$namespace";
    }

    /**
     * Build the setters.
     *
     * @param ClassBuilder $builder The builder.
     * @return string Returns the setters.
     */
    protected static function buildSetters(ClassBuilder $builder): string {

        $output = [];

        $template = file_get_contents(__DIR__ . "/../Resources/skeleton/ClassBuilder.setter.txt");
        foreach ($builder->getAttributes() as $current) {

            $type   = $builder->getTypes()[$current];
            $return = false === $builder->isPhpArray($type) ? $type : "array";

            $searches = ["{{ attribute }}", "{{ type }}", "{{ return }}", "{{ classname }}", "{{ Attribute }}"];
            $replaces = [$current, $type, $return, $builder->getClassname(), ucfirst($current)];

            $output[] = str_replace($searches, $replaces, $template);
        }

        if (1 <= count($output)) {
            array_unshift($output, "");
        }

        return implode("\n", $output);
    }

    /**
     * Build the uses.
     *
     * @param ClassBuilder $builder The builder.
     * @return string Returns the uses.
     */
    protected static function buildUses(ClassBuilder $builder): string {

        $output = [];

        foreach ($builder->getUses() as $current) {

            if (false === array_key_exists($current, $builder->getProvider()->getTypes())) {
                $output[] = "use $current;";
                continue;
            }

            $node = $builder->getProvider()->getTypes()[$current];

            $another = new ClassBuilder($node);
            $another->setProvider($builder->getProvider());
            $another->load();

            $output[] = implode("", [
                "use ",
                static::buildNamespace($another),
                "\\",
                $another->getClassname(),
                ";",
            ]);
        }

        sort($output);

        if (1 <= count($output)) {
            $output[] = "";
        }
        array_unshift($output, "");

        return implode("\n", $output);
    }

    /**
     * Get the filename.
     *
     * @param ClassBuilder $builder The builder.
     * @return string Returns the filename.
     */
    public static function getFilename(ClassBuilder $builder): string {

        $namespace = "Model";

        /** @var IndexedNode $node */
        $node = $builder->getNode();

        if (true === $builder->getProvider()->isRequest($node)) {
            $namespace = "Request";
        }

        if (true === $builder->getProvider()->isResponse($node)) {
            $namespace = "Response";
        }

        return implode(DIRECTORY_SEPARATOR, [
            $namespace,
            $builder->getClassname(),
        ]);
    }
}
