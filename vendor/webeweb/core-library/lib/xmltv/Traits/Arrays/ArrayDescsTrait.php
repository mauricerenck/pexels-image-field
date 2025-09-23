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

use WBW\Library\XmlTv\Model\Desc;

/**
 * Array descriptions trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayDescsTrait {

    /**
     * Descriptions.
     *
     * @var Desc[]
     */
    protected $descs;

    /**
     * Add a description.
     *
     * @param Desc $desc The description.
     * @return self Returns this instance.
     */
    public function addDesc(Desc $desc): self {
        $this->descs[] = $desc;
        return $this;
    }

    /**
     * Get the descriptions.
     *
     * @return Desc[] Returns the descriptions.
     */
    public function getDescs(): array {
        return $this->descs;
    }

    /**
     * Get the number of descriptions.
     *
     * @return int Returns the number of descriptions.
     */
    public function getNumberDescs(): int {
        return count($this->getDescs());
    }

    /**
     * Determine if this instance has descriptions.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasDescs(): bool {
        return 1 <= $this->getNumberDescs();
    }

    /**
     * Set the descriptions.
     *
     * @param Desc[] $descs The descriptions.
     * @return self Returns this instance.
     */
    protected function setDescs(array $descs): self {
        $this->descs = $descs;
        return $this;
    }
}
