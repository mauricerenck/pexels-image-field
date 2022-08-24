<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * Array roles trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait ArrayRolesTrait {

    /**
     * Roles.
     *
     * @var string[]
     */
    protected $roles;

    /**
     * Add a role.
     *
     * @param string $role The role.
     * @return self Returns this instance.
     */
    public function addRole(string $role): self {

        if (false === $this->hasRole($role)) {
            $this->roles[] = strtoupper($role);
        }

        return $this;
    }

    /**
     * Get the roles.
     *
     * @return string[] Returns the roles.
     */
    public function getRoles(): array {
        return $this->roles;
    }

    /**
     * Determines if the roles contains a role.
     *
     * @param string $role The role.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasRole(string $role): bool {
        return in_array(strtoupper($role), $this->roles, true);
    }

    /**
     * Determines if the roles contains a role containing.
     *
     * @param string $role The role.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasRoleContains(string $role): bool {
        $pattern = "/" . strtoupper($role) . "/";
        return $this->hasRoleMatchesWith($pattern);
    }

    /**
     * Determines if the roles contains a role starts with.
     *
     * @param string $role The role.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasRoleEndsWith(string $role): bool {
        $pattern = "/" . strtoupper($role) . "$/";
        return $this->hasRoleMatchesWith($pattern);
    }

    /**
     * Determines if the roles matches a pattern.
     *
     * @param string $pattern The pattern.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function hasRoleMatchesWith(string $pattern): bool {

        foreach ($this->roles as $current) {

            if (1 === preg_match($pattern, $current)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determines if the roles contains a role starts with.
     *
     * @param string $role The role.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasRoleStartsWith(string $role): bool {
        $pattern = "/^" . strtoupper($role) . "/";
        return $this->hasRoleMatchesWith($pattern);
    }

    /**
     * Remove a role.
     *
     * @param string $role The role.
     * @return self Returns this instance.
     */
    public function removeRole(string $role): self {

        $key = array_search(strtoupper($role), $this->roles, true);
        if (false !== $key) {

            unset($this->roles[$key]);
            $this->roles = array_values($this->roles);
        }

        return $this;
    }

    /**
     * Set the roles.
     *
     * @param string[] $roles The roles.
     * @return self Returns this instance.
     */
    public function setRoles(array $roles): self {
        $this->roles = $roles;
        return $this;
    }
}
