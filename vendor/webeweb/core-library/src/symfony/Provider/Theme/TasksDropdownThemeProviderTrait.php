<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider\Theme;

/**
 * Tasks dropdown theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Theme
 */
trait TasksDropdownThemeProviderTrait {

    /**
     * Tasks dropdown theme provider.
     *
     * @var TasksDropdownThemeProviderInterface|null
     */
    private $tasksDropdownThemeProvider;

    /**
     * Get the tasks dropdown theme provider.
     *
     * @return TasksDropdownThemeProviderInterface|null Returns the tasks dropdown theme provider.
     */
    public function getTasksDropdownThemeProvider(): ?TasksDropdownThemeProviderInterface {
        return $this->tasksDropdownThemeProvider;
    }

    /**
     * Set the tasks dropdown theme provider.
     *
     * @param TasksDropdownThemeProviderInterface|null $tasksDropdownThemeProvider The tasks dropdown theme provider.
     * @return self Returns this instance.
     */
    protected function setTasksDropdownThemeProvider(?TasksDropdownThemeProviderInterface $tasksDropdownThemeProvider): self {
        $this->tasksDropdownThemeProvider = $tasksDropdownThemeProvider;
        return $this;
    }
}
