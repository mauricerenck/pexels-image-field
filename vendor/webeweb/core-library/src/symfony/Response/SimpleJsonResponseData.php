<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Response;

/**
 * Simple JSON response data.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Response
 */
class SimpleJsonResponseData implements SimpleJsonResponseDataInterface {

    /**
     * Notify.
     *
     * @var string|null
     */
    private $notify;

    /**
     * Status.
     *
     * @var int|null
     */
    private $status;

    /**
     * Constructor.
     *
     * @param int|null $status The status.
     * @param string|null $notify The notify.
     */
    public function __construct(int $status = null, string $notify = null) {
        $this->setNotify($notify);
        $this->setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotify(): ?string {
        return $this->notify;
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?int {
        return $this->status;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        return [
            "status" => $this->getStatus(),
            "notify" => $this->getNotify(),
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function setNotify(?string $notify): SimpleJsonResponseDataInterface {
        $this->notify = $notify;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(?int $status): SimpleJsonResponseDataInterface {
        $this->status = $status;
        return $this;
    }
}
