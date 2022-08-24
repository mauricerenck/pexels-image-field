<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Helper;

use InvalidArgumentException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ZipArchive;

/**
 * Archive helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Helper
 */
class ArchiveHelper {

    /**
     * Create a ZIP archive.
     *
     * @param string $src The source.
     * @param string $dst The destination.
     * @return bool Returns true in case of success, false otherwise.
     * @throws InvalidArgumentException Throws a file not found exception if the source filename is not found.
     */
    public static function zip(string $src, string $dst): bool {

        if (false === file_exists($src)) {
            throw new InvalidArgumentException(sprintf('The file "%s" was not found', $src));
        }

        $zipArch = new ZipArchive();
        $zipArch->open($dst, ZipArchive::CREATE);

        $srcPath = str_replace("\\\\", "/", realpath($src));

        if (true === is_file($srcPath)) {
            $zipArch->addFromString(basename($srcPath), file_get_contents($srcPath));
            return $zipArch->close();
        }

        // Handle the files list.
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($srcPath), RecursiveIteratorIterator::SELF_FIRST);
        foreach ($files as $current) {

            $curPath = str_replace("\\\\", "/", realpath($current));
            $zipPath = preg_replace("/^" . str_replace("/", "\/", $srcPath . "/") . "/", "", $curPath);

            if (true === is_file($curPath)) {
                $zipArch->addFromString($zipPath, file_get_contents($curPath));
                continue;
            }

            $zipArch->addEmptyDir($zipPath);
        }

        return $zipArch->close();
    }
}
