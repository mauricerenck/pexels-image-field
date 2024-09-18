<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

use WBW\Library\Traits\Integers\IntegerCountTrait;
use WBW\Library\Traits\Strings\StringEntityTrait;
use WBW\Library\Traits\Strings\StringTableTrait;

/**
 * Repository report.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
class RepositoryReport implements RepositoryReportInterface {

    use IntegerCountTrait;
    use StringEntityTrait;
    use StringTableTrait;

    /**
     * Details.
     *
     * @var RepositoryDetailInterface[]
     */
    protected $details;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setDetails([]);
    }

    /**
     * Add a detail.
     *
     * @param RepositoryDetailInterface $detail The detail.
     * @return RepositoryReportInterface Returns this repository report.
     */
    public function addDetail(RepositoryDetailInterface $detail): RepositoryReportInterface {
        $this->details[] = $detail;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getDetails(): array {
        return $this->details;
    }

    /**
     * Set the details.
     *
     * @param RepositoryDetailInterface[] $details The details.
     * @return RepositoryReportInterface Returns this repository report.
     */
    protected function setDetails(array $details): RepositoryReportInterface {
        $this->details = $details;
        return $this;
    }
}
