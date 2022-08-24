<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Service;

use Exception;
use SplFileInfo;
use WBW\Library\Traits\Strings\StringDirectoryTrait;
use WBW\Library\Types\Helper\StringHelper;

/**
 * Uploaded file service.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Service
 */
class UploadedFileService {

    use StringDirectoryTrait {
        setDirectory as protected;
    }

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.service.uploaded_file";

    /**
     * Upload directory.
     *
     * @var string
     */
    const UPLOAD_DIRECTORY = "/uploads";

    /**
     * Constructor.
     *
     * @param string $directory The directory.
     */
    public function __construct(string $directory) {
        $this->setDirectory($directory);
    }

    /**
     * Determines if a filename exists.
     *
     * @param string $filename The filename.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function exists(string $filename): bool {
        return file_exists($this->path($filename));
    }

    /**
     * Creates a directory.
     *
     * @param string $directory The directory.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function mkdir(string $directory): bool {

        if (true === file_exists($directory)) {
            return true;
        }

        return mkdir($directory, 0755, true);
    }

    /**
     * Path.
     *
     * @param string $filename The filename.
     * @return string Returns the path.
     */
    public function path(string $filename): string {
        return implode(DIRECTORY_SEPARATOR, [
            $this->getDirectory(),
            $filename,
        ]);
    }

    /**
     * Save.
     *
     * @param SplFileInfo $uploadedFile The uploaded file.
     * @param string $subdirectory The subdirectory.
     * @param string|null $filename The filename.
     * @return string|null Returns the uploaded file path.
     */
    public function save(SplFileInfo $uploadedFile, string $subdirectory, string $filename = null): ?string {

        // Directory
        $dir = implode("", [
            $this->getDirectory(),
            self::UPLOAD_DIRECTORY,
            $subdirectory,
        ]);

        // Destination
        $dst = implode(DIRECTORY_SEPARATOR, [
            $dir,
            null !== $filename ? $filename : $uploadedFile->getFilename(),
        ]);

        if (false === $this->mkdir($dir) || false === rename($uploadedFile->getPathname(), $dst)) {
            return null;
        }

        return str_replace($this->getDirectory(), "", $dst);
    }

    /**
     * Unique id.
     *
     * @return string Returns the unique id.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function uniqid(): string {

        $random  = random_bytes(32);
        $bin2hex = bin2hex($random);

        return StringHelper::format($bin2hex, "________-____-____-____-____________");
    }

    /**
     * Unlink.
     *
     * @param string $filename The filename.
     * @return bool|null Returns true in case of success, false otherwise.
     */
    public function unlink(string $filename): ?bool {

        if (false === $this->exists($filename)) {
            return null;
        }

        return unlink($this->path($filename));
    }
}
