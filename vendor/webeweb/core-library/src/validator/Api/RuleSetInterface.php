<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validator\Api;

/**
 * Rule set interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Validator\Api
 */
interface RuleSetInterface {

    /**
     * Add a rule.
     *
     * @param RuleInterface $rule The rule.
     * @return RuleSetInterface Returns this rule set.
     */
    public function addRule(RuleInterface $rule): RuleSetInterface;

    /**
     * Get the rules.
     *
     * @return RuleInterface[] Returns the rules.
     */
    public function getRules(): array;

    /**
     * Remove a rule.
     *
     * @param RuleInterface $rule The rule.
     * @return RuleSetInterface Returns this rule set.
     */
    public function removeRule(RuleInterface $rule): RuleSetInterface;

    /**
     * Validate.
     *
     * @param mixed $object The object.
     * @return StatusInterface[] Returns the status.
     */
    public function validate($object): array;
}
