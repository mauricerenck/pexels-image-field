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

use WBW\Library\XmlTv\Model\Commentator;

/**
 * Array commentators trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayCommentatorsTrait {

    /**
     * Commentators.
     *
     * @var Commentator[]
     */
    protected $commentators;

    /**
     * Add a commentator.
     *
     * @param Commentator $commentator The commentator.
     * @return self Returns this instance.
     */
    public function addCommentator(Commentator $commentator): self {
        $this->commentators[] = $commentator;
        return $this;
    }

    /**
     * Get the commentators.
     *
     * @return Commentator[] Returns the commentators.
     */
    public function getCommentators(): array {
        return $this->commentators;
    }

    /**
     * Get the number of commentators.
     *
     * @return int Returns the number of commentators.
     */
    public function getNumberCommentators(): int {
        return count($this->getCommentators());
    }

    /**
     * Determine if this instance has commentators.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasCommentators(): bool {
        return 1 <= $this->getNumberCommentators();
    }

    /**
     * Set the commentators.
     *
     * @param Commentator[] $commentators The commentators.
     * @return self Returns this instance.
     */
    protected function setCommentators(array $commentators): self {
        $this->commentators = $commentators;
        return $this;
    }
}
