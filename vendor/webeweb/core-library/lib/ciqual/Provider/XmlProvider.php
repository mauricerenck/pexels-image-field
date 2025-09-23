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

namespace WBW\Library\Ciqual\Provider;

use DOMDocument;
use DOMElement;
use GuzzleHttp\Client;
use RuntimeException;
use Throwable;
use WBW\Library\Ciqual\Model\Table;
use WBW\Library\Ciqual\Serializer\XmlDeserializer;
use WBW\Library\Common\Provider\GuzzleHelper;
use ZipArchive;

/**
 * XML provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Provider
 */
class XmlProvider {

    /**
     * Filename "aliment".
     *
     * @var string
     */
    public const FILENAME_ALIMENT = "alim_";

    /**
     * Filename "composition".
     *
     * @var string
     */
    public const FILENAME_COMPOSITION = "compo_";

    /**
     * Filename "constituant".
     *
     * @var string
     */
    public const FILENAME_CONSTITUANT = "const_";

    /**
     * Filename "groupe aliments".
     *
     * @var string
     */
    public const FILENAME_GROUPE_ALIMENT = "alim_grp_";

    /**
     * Filename "source".
     *
     * @var string
     */
    public const FILENAME_SOURCE = "sources_";

    /**
     * Deserialize XML.
     *
     * @param string $filename The filename.
     * @param Table $model The model.
     * @return void
     */
    protected static function deserializeXml(string $filename, Table $model): void {

        $methods  = static::enumMatches();
        $basename = basename($filename);

        $k = null;

        foreach (array_keys($methods) as $current) {

            if (0 === strpos($basename, $current)) {
                $k = $current;
                break;
            }
        }

        if (null === $k) {
            return;
        }

        $nsp = str_replace("Provider", "Serializer", __NAMESPACE__);
        $fct = "$nsp\\XmlDeserializer::deserialize$methods[$k]";
        $add = "add$methods[$k]";

        $xml = XmlDeserializer::xmlEntities($filename, "windows-1252");

        $document = new DOMDocument();
        $document->loadXML($xml);

        foreach ($document->documentElement->childNodes as $current) {

            if (false === ($current instanceof DOMElement)) {
                continue;
            }

            $model->$add(call_user_func($fct, $current));
        }
    }

    /**
     * Download a ZIP.
     *
     * @param string $url The URL.
     * @param string $filename The filename.
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function downloadZip(string $url, string $filename): void {

        $saveTo = GuzzleHelper::getStreamParameterName();
        $stream = fopen($filename, "w");

        $client = new Client([
            "headers"     => [
                "Accept"     => "application/zip",
                "User-Agent" => "webeweb/ciqual-library",
            ],
            $saveTo       => $stream,
            "synchronous" => true,
        ]);

        $client->request("GET", $url);
    }

    /**
     * Enumerate the matches.
     *
     * @return string[] Returns the matches enumeration.
     */
    protected static function enumMatches(): array {

        return [
            self::FILENAME_GROUPE_ALIMENT => "GroupeAliments",
            self::FILENAME_ALIMENT        => "Aliment",
            self::FILENAME_COMPOSITION    => "Composition",
            self::FILENAME_CONSTITUANT    => "Constituant",
            self::FILENAME_SOURCE         => "Source",
        ];
    }

    /**
     * Extract a ZIP.
     *
     * @param string $filename The filename.
     * @return Table Returns the table.
     * @throws RuntimeException Throws a runtime exception if an error occurs.
     */
    public static function extractZip(string $filename): Table {

        $zip = new ZipArchive();
        if (true !== $zip->open($filename)) {
            throw new RuntimeException("Open the ZIP archive $filename failed");
        }

        $directory = dirname($filename);

        if (false === $zip->extractTo($directory)) {
            throw new RuntimeException("Extract the ZIP archive $filename failed");
        }

        $model = new Table();

        $stream = opendir($directory);
        while (false !== ($current = readdir($stream))) {

            $file = implode(DIRECTORY_SEPARATOR, [$directory, $current]);
            static::deserializeXml($file, $model);
        }

        return $model;
    }
}
