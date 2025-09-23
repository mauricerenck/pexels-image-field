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
 * SyntaxHighlighter strings.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Assets\SyntaxHighlighter
 */
class SyntaxHighlighterStrings {

    /**
     * Alert.
     *
     * @var string|null
     */
    private $alert;

    /**
     * Brush not HTML script.
     *
     * @var string|null
     */
    private $brushNotHtmlScript;

    /**
     * Copy to clipboard.
     *
     * @var string|null
     */
    private $copyToClipboard;

    /**
     * Copy to clipboard confirmation.
     *
     * @var string|null
     */
    private $copyToClipboardConfirmation;

    /**
     * Expand source.
     *
     * @var string|null
     */
    private $expandSource;

    /**
     * Help.
     *
     * @var string|null
     */
    private $help;

    /**
     * No brush.
     *
     * @var string|null
     */
    private $noBrush;

    /**
     * Print.
     *
     * @var string|null
     */
    private $print;

    /**
     * View source.
     *
     * @var string|null
     */
    private $viewSource;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAlert("SyntaxHighlighter\n\n");
        $this->setBrushNotHtmlScript("Brush wasn't made for html-script option:");
        $this->setCopyToClipboard("copy to clipboard");
        $this->setCopyToClipboardConfirmation("The code is in your clipboard now");
        $this->setExpandSource("+ expand source");
        $this->setHelp("?");
        $this->setNoBrush("Can't find brush for:");
        $this->setPrint("print");
        $this->setViewSource("view source");
    }

    /**
     * Get the alert.
     *
     * @return string|null Returns the alert.
     */
    public function getAlert(): ?string {
        return $this->alert;
    }

    /**
     * Get the brush not HTML script.
     *
     * @return string|null Returns the brush not HTML script.
     */
    public function getBrushNotHtmlScript(): ?string {
        return $this->brushNotHtmlScript;
    }

    /**
     * Get the copy to clipboard.
     *
     * @return string|null Returns the copy to clipboard.
     */
    public function getCopyToClipboard(): ?string {
        return $this->copyToClipboard;
    }

    /**
     * Get the copy to clipboard confirmation.
     *
     * @return string|null Returns the copy to clipboard confirmation.
     */
    public function getCopyToClipboardConfirmation(): ?string {
        return $this->copyToClipboardConfirmation;
    }

    /**
     * Get the expand source.
     *
     * @return string|null Returns the expand source.
     */
    public function getExpandSource(): ?string {
        return $this->expandSource;
    }

    /**
     * Get the help.
     *
     * @return string|null Returns the help.
     */
    public function getHelp(): ?string {
        return $this->help;
    }

    /**
     * Get the no brush.
     *
     * @return string|null Returns the no brush.
     */
    public function getNoBrush(): ?string {
        return $this->noBrush;
    }

    /**
     * Get the print.
     *
     * @return string|null Returns the print.
     */
    public function getPrint(): ?string {
        return $this->print;
    }

    /**
     * Get the view source.
     *
     * @return string|null Returns the view source.
     */
    public function getViewSource(): ?string {
        return $this->viewSource;
    }

    /**
     * Set the alert.
     *
     * @param string|null $alert The alert.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setAlert(?string $alert): SyntaxHighlighterStrings {
        $this->alert = $alert;
        return $this;
    }

    /**
     * Set the brush not HTML script.
     *
     * @param string|null $brushNotHtmlScript The brush not HTML script.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setBrushNotHtmlScript(?string $brushNotHtmlScript): SyntaxHighlighterStrings {
        $this->brushNotHtmlScript = $brushNotHtmlScript;
        return $this;
    }

    /**
     * Set the copy to clipboard.
     *
     * @param string|null $copyToClipboard The copy to clipboard.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setCopyToClipboard(?string $copyToClipboard): SyntaxHighlighterStrings {
        $this->copyToClipboard = $copyToClipboard;
        return $this;
    }

    /**
     * Set the copy to clipboard confirmation.
     *
     * @param string|null $copyToClipboardConfirmation The copy to clipboard confirmation.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setCopyToClipboardConfirmation(?string $copyToClipboardConfirmation): SyntaxHighlighterStrings {
        $this->copyToClipboardConfirmation = $copyToClipboardConfirmation;
        return $this;
    }

    /**
     * Set the expand source.
     *
     * @param string|null $expandSource The expand source.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setExpandSource(?string $expandSource): SyntaxHighlighterStrings {
        $this->expandSource = $expandSource;
        return $this;
    }

    /**
     * Set the help.
     *
     * @param string|null $help The help.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setHelp(?string $help): SyntaxHighlighterStrings {
        $this->help = $help;
        return $this;
    }

    /**
     * Set the no brush.
     *
     * @param string|null $noBrush The no brush.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setNoBrush(?string $noBrush): SyntaxHighlighterStrings {
        $this->noBrush = $noBrush;
        return $this;
    }

    /**
     * Set the print.
     *
     * @param string|null $print The print.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setPrint(?string $print): SyntaxHighlighterStrings {
        $this->print = $print;
        return $this;
    }

    /**
     * Set the view source.
     *
     * @param string|null $viewSource The view source.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setViewSource(?string $viewSource): SyntaxHighlighterStrings {
        $this->viewSource = $viewSource;
        return $this;
    }
}
