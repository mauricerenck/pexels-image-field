<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Traits\Arrays;

use WBW\Library\XmlTv\Model\Editor;

/**
 * Array editors trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayEditorsTrait {

    /**
     * Editors.
     *
     * @var Editor[]
     */
    protected $editors;

    /**
     * Add an editor.
     *
     * @param Editor $editor The editor.
     * @return self Returns this instance.
     */
    public function addEditor(Editor $editor): self {
        $this->editors[] = $editor;
        return $this;
    }

    /**
     * Get the editors.
     *
     * @return Editor[] Returns the editors.
     */
    public function getEditors(): array {
        return $this->editors;
    }

    /**
     * Get the number of editors.
     *
     * @return int Returns the number of editors.
     */
    public function getNumberEditors(): int {
        return count($this->getEditors());
    }

    /**
     * Determine if this instance has editors.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasEditors(): bool {
        return 1 <= $this->getNumberEditors();
    }

    /**
     * Set the editors.
     *
     * @param Editor[] $editors The editors.
     * @return self Returns this instance.
     */
    protected function setEditors(array $editors): self {
        $this->editors = $editors;
        return $this;
    }
}
