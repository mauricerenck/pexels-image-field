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

use WBW\Library\Wsdl2Php\Builder\PackageBuilder;
use WBW\Library\Wsdl2Php\Model\WsdlInputNode;
use WBW\Library\Wsdl2Php\Model\WsdlMessageNode;
use WBW\Library\Wsdl2Php\Model\WsdlOperationNode;
use WBW\Library\Wsdl2Php\Model\WsdlOutputNode;
use WBW\Library\Wsdl2Php\Model\WsdlPartNode;

/**
 * Client builder helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Helper
 */
class ClientBuilderHelper {

    /**
     * Build the attributes.
     *
     * @param PackageBuilder $builder The builder.
     * @return string Returns the attributes.
     */
    protected static function buildAttributes(PackageBuilder $builder): string {

        $output = [];

        $types  = array_keys($builder->getProvider()->getTypes());
        $length = max(array_map("strlen", $types)) + 2;
        $format = "        %-{$length}s => \"%s\\%s\",";

        foreach ($builder->getClassBuilders() as $current) {
            $output[] = vsprintf($format, [
                '"' . $current->getClassname() . '"',
                ClassBuilderHelper::buildNamespace($current),
                $current->getClassname(),
            ]);
        }

        $template = file_get_contents(__DIR__ . "/../Resources/skeleton/ClientBuilder.attribute.txt");
        $classmap = implode("\n", $output);

        return str_replace("{{ classmap }}", $classmap, "$template\n");
    }

    /**
     * Build the class.
     *
     * @return string Returns the class.
     */
    public static function buildClass(PackageBuilder $builder): string {

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
            static::buildNamespace(),
            static::buildUses($builder),
            $builder->getProvider()->getService()->getName() . "SoapClient",
            static::buildExtends(),
            "",
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
     * @param PackageBuilder $builder The builder.
     * @return string Returns the construct.
     */
    protected static function buildConstruct(PackageBuilder $builder): string {

        $template = file_get_contents(__DIR__ . "/../Resources/skeleton/ClientBuilder.__construct.txt");

        return str_replace("{{ wsdl }}", $builder->getProvider()->getWsdl(), $template);
    }

    /**
     * Build the extends.
     *
     * @return string Returns the extends.
     */
    protected static function buildExtends(): string {
        return " extends SoapClient";
    }

    /**
     * Build the methods.
     *
     * @param PackageBuilder $builder The builder.
     * @return string Returns the methods.
     */
    protected static function buildMethods(PackageBuilder $builder): string {

        $output = [];

        $template = file_get_contents(__DIR__ . "/../Resources/skeleton/ClientBuilder.method.txt");

        foreach ($builder->getProvider()->getOperations() as $current) {

            $io = static::getOperationIO($builder, $current);

            /** @var WsdlPartNode[] $buffer */
            $buffer = [
                $io[0]->getChildren()[0],
                $io[1]->getChildren()[0],
            ];

            $searches = [
                "{{ type }}",
                "{{ parameter }}",
                "{{ return }}",
                "{{ method }}",
            ];

            $replaces = [
                explode(":", $buffer[0]->getElement())[1],
                $buffer[0]->getName(),
                explode(":", $buffer[1]->getElement())[1],
                $current->getName(),
            ];

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
     * @return string Returns the namespace.
     */
    protected static function buildNamespace(): string {
        return "{{ namespace }}";
    }

    /**
     * Build the uses.
     *
     * @param PackageBuilder $builder The builder.
     * @return string Returns the uses.
     */
    protected static function buildUses(PackageBuilder $builder): string {

        $output = [
            "use SoapClient;",
            "use Throwable;",
        ];

        foreach ($builder->getProvider()->getOperations() as $current) {

            $io = static::getOperationIO($builder, $current);

            /** @var WsdlPartNode[] $buffer */
            $buffer = [
                $io[0]->getChildren()[0],
                $io[1]->getChildren()[0],
            ];

            $format = "use {{ namespace }}\\%s\\%s;";

            $output[] = sprintf($format, "Request", explode(":", $buffer[0]->getElement())[1]);
            $output[] = sprintf($format, "Response", explode(":", $buffer[1]->getElement())[1]);
        }

        sort($output);
        array_unshift($output, " ");
        array_push($output, " ");

        return implode("\n", $output);
    }

    /**
     * Get an operation I/O.
     *
     * @param PackageBuilder $builder The builder.
     * @param WsdlOperationNode $operation The operation.
     * @return array<WsdlMessageNode> Returns the operation I/O.
     */
    protected static function getOperationIO(PackageBuilder $builder, WsdlOperationNode $operation): array {

        $provider = $builder->getProvider();

        /** @var WsdlInputNode[] $inputNodes */
        $inputNodes   = $operation->getChildrenByNodeName(WsdlInputNode::NODE_NAME);
        $inputName    = explode(":", $inputNodes[0]->getMessage())[1];
        $inputMessage = $provider->getMessages()[$inputName];

        /** @var WsdlOutputNode[] $outputNodes */
        $outputNodes   = $operation->getChildrenByNodeName(WsdlOutputNode::NODE_NAME);
        $outputName    = explode(":", $outputNodes[0]->getMessage())[1];
        $outputMessage = $provider->getMessages()[$outputName];

        return [
            $inputMessage,
            $outputMessage,
        ];
    }
}
