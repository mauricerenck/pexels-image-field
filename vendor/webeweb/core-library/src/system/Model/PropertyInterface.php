<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Model;

/**
 * Property interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
interface PropertyInterface {

    /**
     * File separator.
     *
     * @var string
     */
    const FILE_SEPARATOR = "file.separator";

    /**
     * Line separator.
     *
     * @var string
     */
    const LINE_SEPARATOR = "line.separator";

    /**
     * OS arch.
     *
     * @var string
     */
    const OS_ARCH = "os.arch";

    /**
     * OS name.
     *
     * @var string
     */
    const OS_NAME = "os.name";

    /**
     * OS version.
     *
     * @var string
     */
    const OS_VERSION = "os.version";

    /**
     * Path separator.
     *
     * @var string
     */
    const PATH_SEPARATOR = "path.separator";

    /**
     * PHP class path.
     *
     * @var string
     */
    const PHP_CLASS_PATH = "php.class.path";

    /**
     * PHP home.
     *
     * @var string
     */
    const PHP_HOME = "php.home";

    /**
     * PHP vendor.
     *
     * @var string
     */
    const PHP_VENDOR = "php.vendor";

    /**
     * PHP vendor URL.
     *
     * @var string
     */
    const PHP_VENDOR_URL = "php.vendor.url";

    /**
     * PHP version.
     *
     * @var string
     */
    const PHP_VERSION = "php.version";

    /**
     * User dir.
     *
     * @var string
     */
    const USER_DIR = "user.dir";

    /**
     * User home.
     *
     * @var string
     */
    const USER_HOME = "user.home";

    /**
     * User name.
     *
     * @var string
     */
    const USER_NAME = "user.name";
}
