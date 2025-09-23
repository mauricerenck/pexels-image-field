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

namespace WBW\Library\Widget\Factory;

use WBW\Library\Widget\Component\Toast\DangerToast;
use WBW\Library\Widget\Component\Toast\DefaultToast;
use WBW\Library\Widget\Component\Toast\InfoToast;
use WBW\Library\Widget\Component\Toast\SuccessToast;
use WBW\Library\Widget\Component\Toast\WarningToast;
use WBW\Library\Widget\Component\ToastInterface;

/**
 * Toast factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Factory
 */
class ToastFactory {

    /**
     * Create a danger toast.
     *
     * @param string $content The content.
     * @return ToastInterface Returns the danger toast.
     */
    public static function newDangerToast(string $content): ToastInterface {
        return new DangerToast($content);
    }

    /**
     * Create a default toast.
     *
     * @param string $content The content.
     * @param string $type The type.
     * @return ToastInterface Returns the default toast.
     */
    public static function newDefaultToast(string $content, string $type): ToastInterface {
        return new DefaultToast($type, $content);
    }

    /**
     * Create an info toast.
     *
     * @param string $content The content.
     * @return ToastInterface Returns the info toast.
     */
    public static function newInfoToast(string $content): ToastInterface {
        return new InfoToast($content);
    }

    /**
     * Create a success toast.
     *
     * @param string $content The content.
     * @return ToastInterface Returns the success toast.
     */
    public static function newSuccessToast(string $content): ToastInterface {
        return new SuccessToast($content);
    }

    /**
     * Create a warning toast.
     *
     * @param string $content The content.
     * @return ToastInterface Returns the warning toast.
     */
    public static function newWarningToast(string $content): ToastInterface {
        return new WarningToast($content);
    }
}
