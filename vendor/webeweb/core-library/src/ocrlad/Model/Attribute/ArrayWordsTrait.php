<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Model\Attribute;

use WBW\Library\OcrLad\Model\Word;

/**
 * Array words trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Model\Attribute
 */
trait ArrayWordsTrait {

    /**
     * Words.
     *
     * @var Word[]
     */
    private $words;

    /**
     * Add a word.
     *
     * @param Word $word The word.
     * @return self Returns this instance.
     */
    public function addWord(Word $word): self {
        $this->words[] = $word;
        return $this;
    }

    /**
     * Get the number of words.
     *
     * @return int Returns the number of words.
     */
    public function getNumberWords(): int {
        return count($this->words);
    }

    /**
     * Get the words.
     *
     * @return Word[] Returns the words.
     */
    public function getWords(): array {
        return $this->words;
    }

    /**
     * Determines if this instance has words.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasWords(): bool {
        return 1 <= $this->getNumberWords();
    }

    /**
     * Set the words.
     *
     * @param Word[] $words The words.
     * @return self Returns this instance.
     */
    protected function setWords(array $words): self {
        $this->words = $words;
        return $this;
    }
}
