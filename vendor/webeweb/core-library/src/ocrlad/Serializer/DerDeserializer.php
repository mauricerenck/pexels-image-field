<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Serializer;

use WBW\Library\OcrLad\Model\Document;
use WBW\Library\OcrLad\Model\Page;
use WBW\Library\OcrLad\Model\Word;

/**
 * DER deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Serializer
 */
class DerDeserializer {

    /**
     * DER delimiter.
     *
     * @var string
     */
    const DER_DELIMITER = ";";

    /**
     * Deserialize a document.
     *
     * @param string $filename The filename.
     * @return Document|null Returns the document in case of success, null otherwise.
     */
    public static function deserializeDocument(string $filename): ?Document {

        $model = new Document();
        $model->setFilename($filename);

        $stream = fopen($filename, "r");

        $headers = static::processHeaders(fgets($stream));
        foreach ($headers as $current) {

            $page = static::deserializePage($current);
            if (null !== $page) {
                $model->addPage($page->setParent($model));
            }
        }

        while (true !== feof($stream)) {

            $word = static::deserializeWord(fgets($stream));
            if (null !== $word) {
                $model->addWord($word);
            }
        }

        fclose($stream);

        return static::processDocument($model);
    }

    /**
     * Deserialize a page.
     *
     * @param string $rawData The raw data.
     * @return Page|null Returns the page in case of success, null otherwise.
     */
    protected static function deserializePage(string $rawData): ?Page {

        $data = explode(self::DER_DELIMITER, $rawData);
        if (6 !== count($data)) {
            return null;
        }

        $model = new Page();
        $model->setResolution(intval(preg_replace("/[^0-9]/", "", $data[0])));
        $model->setWidth(intval($data[1]));
        $model->setHeight(intval($data[2]));
        $model->setRotation(intval($data[3]));
        $model->setTag(intval($data[4]));

        return $model;
    }

    /**
     * Deserialize a word.
     *
     * @param string $rawData The raw data.
     * @return Word|null Returns the word in case of success, null otherwise.
     */
    protected static function deserializeWord(string $rawData): ?Word {

        $data = explode(self::DER_DELIMITER, $rawData);
        if (7 !== count($data)) {
            return null;
        }

        preg_match("/(LB|NLB).?([0-9]+)/", trim($data[1]), $matches);

        $model = new Word();
        $model->setContent(trim($data[0]));
        $model->setType($matches[1]);
        $model->setPage(intval($matches[2]));
        $model->setOcrConfidence(floatval(str_replace(",", ".", $data[2])));
        $model->setX1(floatval($data[3]));
        $model->setY1(floatval($data[4]));
        $model->setX2(floatval($data[5]));
        $model->setY2(floatval($data[6]));

        return $model;
    }

    /**
     * Process the document.
     *
     * @param Document $document The document.
     * @return Document Returns the document.
     */
    protected static function processDocument(Document $document): Document {

        foreach ($document->getWords() as $current) {

            $document->index($current);

            $page = $document->getPage($current->getPage() - 1);
            $page->addWord($current->setParent($page));
        }

        return $document;
    }

    /**
     * Process the headers.
     *
     * @param string $rawData The raw data.
     * @return string[] Returns the headers.
     */
    protected static function processHeaders(string $rawData): array {

        $data = explode(self::DER_DELIMITER, $rawData);
        if (6 === count($data)) {
            return [$rawData];
        }

        $rows   = [];
        $buffer = [];

        foreach ($data as $current) {

            $buffer[] = $current;
            if (6 === count($buffer)) {

                $rows[] = implode(self::DER_DELIMITER, $buffer);
                $buffer = [];
            }
        }

        return $rows;
    }
}
