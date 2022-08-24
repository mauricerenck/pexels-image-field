<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Helper;

use WBW\Library\OcrLad\Geometry\Point;
use WBW\Library\OcrLad\Model\Document;
use WBW\Library\OcrLad\Model\Word;

/**
 * Document helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Helper
 */
class DocumentHelper {

    /**
     * Document.
     *
     * @var Document
     */
    private $document;

    /**
     * Constructor.
     *
     * @param Document $document The document.
     */
    public function __construct(Document $document) {
        $this->setDocument($document);
    }

    /**
     * Find a word.
     *
     * @param Point $position The position.
     * @param int|null $page The page.
     * @return Word Returns the word in case of success, null otherwise.
     */
    public function findWordAt(Point $position, int $page = null): ?Word {

        foreach ($this->getWords($page) as $current) {

            $dX = $position->getXInt() === $current->getPoint1()->getXInt();
            $dY = $position->getYInt() === $current->getPoint1()->getYInt();

            if (true === $dX && true === $dY) {
                return $current;
            }
        }

        return null;
    }

    /**
     * Find the words.
     *
     * @param Point $start The start position.
     * @param Point $end The end position.
     * @param int|null $page The page.
     * @return Word[] Returns the words.
     */
    public function findWordsIn(Point $start, Point $end, int $page = null): array {

        $matches = [];

        foreach ($this->getWords($page) as $current) {

            $dX1 = $start->getXInt() <= $current->getPoint1()->getXInt();
            $dY1 = $start->getYInt() <= $current->getPoint1()->getYInt();

            $dX2 = $current->getPoint2()->getXInt() <= $end->getXInt();
            $dY2 = $current->getPoint2()->getYInt() <= $end->getYInt();

            if (true === $dX1 && true === $dY1 && true === $dX2 && true === $dY2) {
                $matches[] = $current;
            }
        }

        return $matches;
    }

    /**
     * Find the words.
     *
     * @param Point $start The start position.
     * @param int|null $page The page.
     * @return Word[] Returns the words.
     */
    public function findWordsStartAt(Point $start, int $page = null): array {

        $matches = [];

        foreach ($this->getWords($page) as $current) {

            $dX = $start->getXInt() <= $current->getPoint1()->getXInt();
            $dY = $start->getYInt() === $current->getPoint1()->getYInt();

            if (true === $dX && true === $dY) {
                $matches[] = $current;
            }
        }

        return $matches;
    }

    /**
     * Get the document.
     *
     * @return Document Returns the document.
     */
    public function getDocument(): Document {
        return $this->document;
    }

    /**
     * Get the words.
     *
     * @param int|null $p The page.
     * @return Word[] Returns the words.
     */
    protected function getWords(?int $p): array {

        $page = $this->getDocument()->getPage($p);
        if (null !== $page) {
            return $page->getWords();
        }

        return $this->getDocument()->getWords();
    }

    /**
     * Set the document.
     *
     * @param Document $document The document.
     * @return DocumentHelper Returns this document helper.
     */
    protected function setDocument(Document $document): DocumentHelper {
        $this->document = $document;
        return $this;
    }
}
