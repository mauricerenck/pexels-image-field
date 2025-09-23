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

namespace WBW\Library\Widget\Helper;

use DirectoryIterator;
use InvalidArgumentException;
use ZipArchive;

/**
 * Assets helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Helper
 */
class AssetsHelper {

    /**
     * List all assets.
     *
     * @param string $directory The directory.
     * @return string[] Returns the assets.
     * @throws InvalidArgumentException Throw an invalid argument exception if the directory is not a directory.
     */
    public static function listAssets(string $directory): array {

        if (false === is_dir($directory)) {
            throw new InvalidArgumentException(sprintf('"%s" is not a directory', $directory));
        }

        $assets = [];

        /** @var DirectoryIterator $current */
        foreach (new DirectoryIterator(realpath($directory)) as $current) {

            if (1 === preg_match("/\.zip$/", $current->getFilename())) {
                $assets[] = $current->getPathname();
            }
        }

        sort($assets);

        return $assets;
    }

    /**
     * Unzip an asset.
     *
     * @param string $filename The filename.
     * @param string $directory The directory.
     * @return bool Returns true in case of success, false otherwise.
     * @throws InvalidArgumentException Throws an invalid argument if the directory is not a directory.
     */
    public static function unzipAsset(string $filename, string $directory): bool {

        if (false === is_dir($directory)) {
            throw new InvalidArgumentException(sprintf('"%s" is not a directory', $directory));
        }

        $result = false;

        $zip = new ZipArchive();
        if (true === $zip->open($filename)) {

            $result = $zip->extractTo(realpath($directory));
            $zip->close();
        }

        return $result;
    }

    /**
     * Unzip all assets.
     *
     * @param string $src The source directory.
     * @param string $dst The destination directory.
     * @return bool[] Returns the results.
     * @throws InvalidArgumentException Throws an invalid argument if the directory is not a directory.
     */
    public static function unzipAssets(string $src, string $dst): array {

        $result = [];

        foreach (static::listAssets($src) as $current) {
            $result[$current] = static::unzipAsset($current, $dst);
        }

        return $result;
    }
}
