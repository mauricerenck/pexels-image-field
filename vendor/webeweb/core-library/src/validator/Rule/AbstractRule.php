<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validator\Rule;

use WBW\Library\Validator\Api\RuleInterface;

/**
 * Abstract rule.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Validator\Rule
 * @abstract
 */
abstract class AbstractRule implements RuleInterface {

    /**
     * Name.
     *
     * @var string|null
     */
    private $name;

    /**
     * Constructor.
     *
     * @param string|null $name The name.
     */
    protected function __construct(?string $name) {
        $this->setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Set the name.
     *
     * @param string|null $name The name.
     * @return RuleInterface Returns this rule.
     */
    protected function setName(?string $name): RuleInterface {
        $this->name = $name;
        return $this;
    }
}
