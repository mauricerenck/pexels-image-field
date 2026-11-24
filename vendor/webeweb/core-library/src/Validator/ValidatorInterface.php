<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Validator;

/**
 * Validator interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Validator
 */
interface ValidatorInterface {

    /**
     * Get the rule set.
     *
     * @return RuleSetInterface Returns the rule set.
     */
    public function getRuleSet(): RuleSetInterface;

    /**
     * Validate.
     *
     * @param mixed $object The object.
     * @return StatusInterface[] Returns the status.
     */
    public function validate($object): array;
}
