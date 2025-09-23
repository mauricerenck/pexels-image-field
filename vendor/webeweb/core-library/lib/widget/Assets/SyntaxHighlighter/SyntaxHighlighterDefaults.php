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
 * SyntaxHighlighter defaults.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Assets\SyntaxHighlighter
 */
class SyntaxHighlighterDefaults {

    /**
     * Auto links.
     *
     * @var bool|null
     */
    private $autoLinks;

    /**
     * Class name.
     *
     * @var string|null
     */
    private $className;

    /**
     * Collapse.
     *
     * @var bool|null
     */
    private $collapse;

    /**
     * First line.
     *
     * @var int|null
     */
    private $firstLine;

    /**
     * Gutter.
     *
     * @var bool|null
     */
    private $gutter;

    /**
     * Highlight.
     *
     * @var int[]|null
     */
    private $highlight;

    /**
     * HTML script.
     *
     * @var bool|null
     */
    private $htmlScript;

    /**
     * Smart tabs.
     *
     * @var bool|null
     */
    private $smartTabs;

    /**
     * Tab size.
     *
     * @var int|null
     */
    private $tabSize;

    /**
     * Toolbar.
     *
     * @var bool|null
     */
    private $toolbar;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAutoLinks(true);
        $this->setClassName("");
        $this->setCollapse(false);
        $this->setFirstLine(1);
        $this->setGutter(true);
        $this->setHighlight([]);
        $this->setHtmlScript(false);
        $this->setSmartTabs(true);
        $this->setTabSize(4);
        $this->setToolbar(true);
    }

    /**
     * Get the auto links.
     *
     * @return bool|null Returns the auto links.
     */
    public function getAutoLinks(): ?bool {
        return $this->autoLinks;
    }

    /**
     * Get the class name.
     *
     * @return string|null Returns the class name.
     */
    public function getClassName(): ?string {
        return $this->className;
    }

    /**
     * Get the collapse.
     *
     * @return bool|null Returns the collapse.
     */
    public function getCollapse(): ?bool {
        return $this->collapse;
    }

    /**
     * Get the first line.
     *
     * @return int|null Returns the first line.
     */
    public function getFirstLine(): ?int {
        return $this->firstLine;
    }

    /**
     * Get the gutter.
     *
     * @return bool|null Returns the gutter.
     */
    public function getGutter(): ?bool {
        return $this->gutter;
    }

    /**
     * Get the highlight.
     *
     * @return int[] Returns the highlight.
     */
    public function getHighlight(): array {
        return $this->highlight;
    }

    /**
     * Get the HTML script.
     *
     * @return bool|null Returns the HTML script.
     */
    public function getHtmlScript(): ?bool {
        return $this->htmlScript;
    }

    /**
     * Get the smart tabs.
     *
     * @return bool|null Returns the smart tabs.
     */
    public function getSmartTabs(): ?bool {
        return $this->smartTabs;
    }

    /**
     * Get the tab size.
     *
     * @return int|null Returns the tab size.
     */
    public function getTabSize(): ?int {
        return $this->tabSize;
    }

    /**
     * Get the toolbar.
     *
     * @return bool|null Returns the toolbar.
     */
    public function getToolbar(): ?bool {
        return $this->toolbar;
    }

    /**
     * Set the auto links.
     *
     * @param bool|null $autoLinks The auto links.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setAutoLinks(?bool $autoLinks): SyntaxHighlighterDefaults {
        $this->autoLinks = $autoLinks;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setClassName(?string $className): SyntaxHighlighterDefaults {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the collapse.
     *
     * @param bool|null $collapse The collapse.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setCollapse(?bool $collapse): SyntaxHighlighterDefaults {
        $this->collapse = $collapse;
        return $this;
    }

    /**
     * Set the first line.
     *
     * @param int|null $firstLine The first line.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setFirstLine(?int $firstLine): SyntaxHighlighterDefaults {
        $this->firstLine = $firstLine;
        return $this;
    }

    /**
     * Set the gutter.
     *
     * @param bool|null $gutter The gutter.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setGutter(?bool $gutter): SyntaxHighlighterDefaults {
        $this->gutter = $gutter;
        return $this;
    }

    /**
     * Set the highlight.
     *
     * @param int[] $highlight The highlight.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setHighlight(array $highlight): SyntaxHighlighterDefaults {
        $this->highlight = $highlight;
        return $this;
    }

    /**
     * Set the HTML script.
     *
     * @param bool|null $htmlScript The HTML script.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setHtmlScript(?bool $htmlScript): SyntaxHighlighterDefaults {
        $this->htmlScript = $htmlScript;
        return $this;
    }

    /**
     * Set the smart tabs.
     *
     * @param bool|null $smartTabs The smart tabs.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setSmartTabs(?bool $smartTabs): SyntaxHighlighterDefaults {
        $this->smartTabs = $smartTabs;
        return $this;
    }

    /**
     * Set the tab size.
     *
     * @param int|null $tabSize The tab size.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setTabSize(?int $tabSize): SyntaxHighlighterDefaults {
        $this->tabSize = $tabSize;
        return $this;
    }

    /**
     * Set the toolbar.
     *
     * @param bool|null $toolbar The toolbar.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setToolbar(?bool $toolbar): SyntaxHighlighterDefaults {
        $this->toolbar = $toolbar;
        return $this;
    }
}
