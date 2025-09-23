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

use WBW\Library\XmlTv\Model\Channel;

/**
 * Array channels trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayChannelsTrait {

    /**
     * Channels.
     *
     * @var Channel[]
     */
    protected $channels;

    /**
     * Add a channel.
     *
     * @param Channel $channel The channel.
     * @return self Returns this instance.
     */
    public function addChannel(Channel $channel): self {
        $this->channels[] = $channel;
        return $this;
    }

    /**
     * Get the channels.
     *
     * @return Channel[] Returns the channels.
     */
    public function getChannels(): array {
        return $this->channels;
    }

    /**
     * Get the number of channels.
     *
     * @return int Returns the number of channels.
     */
    public function getNumberChannels(): int {
        return count($this->getChannels());
    }

    /**
     * Determine if this instance has channels.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasChannels(): bool {
        return 1 <= $this->getNumberChannels();
    }

    /**
     * Indexe the channels by id.
     *
     * @return Channel[] Returns the channels indexed by id.
     */
    public function indexChannelsById(): array {

        $index = [];

        foreach ($this->channels as $current) {
            $index[$current->getId()] = $current;
        }

        ksort($index);

        return $index;
    }

    /**
     * Set the channels.
     *
     * @param Channel[] $channels The channels.
     * @return self Returns this instance.
     */
    protected function setChannels(array $channels): self {
        $this->channels = $channels;
        return $this;
    }

    /**
     * Sort the channels.
     *
     * @return self Returns this instance.
     */
    public function sortChannels(): self {

        usort($this->channels, function(Channel $a, Channel $b): int {
            return strcmp($a->getId(), $b->getId());
        });

        return $this;
    }
}
