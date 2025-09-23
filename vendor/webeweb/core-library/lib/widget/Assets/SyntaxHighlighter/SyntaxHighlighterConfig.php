<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Assets\SyntaxHighlighter;

/**
 * SyntaxHighlighter config.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Assets\SyntaxHighlighter
 */
class SyntaxHighlighterConfig {

    /**
     * Blogger mode.
     *
     * @var bool|null
     */
    private $bloggerMode;

    /**
     * Strings.
     *
     * @var SyntaxHighlighterStrings|null
     */
    private $strings;

    /**
     * Strip BRs.
     *
     * @var bool|null
     */
    private $stripBrs;

    /**
     * Tag name.
     *
     * @var string|null
     */
    private $tagName;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setBloggerMode(false);
        $this->setStripBrs(false);
        $this->setTagName("pre");
    }

    /**
     * Get the blogger mode.
     *
     * @return bool|null Returns the blogger mode.
     */
    public function getBloggerMode(): ?bool {
        return $this->bloggerMode;
    }

    /**
     * Get the strings.
     *
     * @return SyntaxHighlighterStrings|null Returns the strings
     */
    public function getStrings(): ?SyntaxHighlighterStrings {
        return $this->strings;
    }

    /**
     * Get the strip BRs.
     *
     * @return bool|null Returns the strip BRs.
     */
    public function getStripBrs(): ?bool {
        return $this->stripBrs;
    }

    /**
     * Get the tag name.
     *
     * @return string|null Returns the tag name.
     */
    public function getTagName(): ?string {
        return $this->tagName;
    }

    /**
     * Set the blogger mode.
     *
     * @param bool|null $bloggerMode The blogger mode.
     * @return SyntaxHighlighterConfig Returns this config.
     */
    public function setBloggerMode(?bool $bloggerMode): SyntaxHighlighterConfig {
        $this->bloggerMode = $bloggerMode;
        return $this;
    }

    /**
     * Set the strings.
     *
     * @param SyntaxHighlighterStrings|null $strings The strings.
     * @return SyntaxHighlighterConfig Returns this config.
     */
    public function setStrings(?SyntaxHighlighterStrings $strings): SyntaxHighlighterConfig {
        $this->strings = $strings;
        return $this;
    }

    /**
     * Set the strip BRs.
     *
     * @param bool|null $stripBrs The strip BRs.
     * @return SyntaxHighlighterConfig Returns this config.
     */
    public function setStripBrs(?bool $stripBrs): SyntaxHighlighterConfig {
        $this->stripBrs = $stripBrs;
        return $this;
    }

    /**
     * Set the tag name.
     *
     * @param string|null $tagName The tag name.
     * @return SyntaxHighlighterConfig Returns this config.
     */
    public function setTagName(?string $tagName): SyntaxHighlighterConfig {
        $this->tagName = $tagName;
        return $this;
    }
}
