<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Provider;

use Psr\Log\LoggerInterface;
use WBW\Library\Ftp\Client\FtpClient;
use WBW\Library\Ftp\Exception\FtpException;
use WBW\Library\OcrLad\Model\IOFile;
use WBW\Library\Provider\AbstractProvider;
use WBW\Library\Security\Authenticator;
use WBW\Library\Security\PasswordAuthentication;
use WBW\Library\Traits\Strings\StringHostnameTrait;
use WBW\Library\Traits\Strings\StringPasswordTrait;
use WBW\Library\Traits\Strings\StringUsernameTrait;

/**
 * OCR provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Provider
 */
class OcrProvider extends AbstractProvider {

    use StringHostnameTrait;
    use StringPasswordTrait;
    use StringUsernameTrait;

    /**
     * FTP client.
     *
     * @var FtpClient
     */
    private $ftpClient;

    /**
     * Local directory "after".
     *
     * @var string|null
     */
    private $localDirectoryAfter;

    /**
     * Local directory "before".
     *
     * @var string|null
     */
    private $localDirectoryBefore;

    /**
     * Local directory "error".
     *
     * @var string|null
     */
    private $localDirectoryError;

    /**
     * Remote directory "after".
     *
     * @var string
     */
    private $remoteDirectoryAfter;

    /**
     * Remote directory "before".
     *
     * @var string
     */
    private $remoteDirectoryBefore;

    /**
     * Remote directory "error".
     *
     * @var string
     */
    private $remoteDirectoryError;

    /**
     * Constructor.
     *
     * @param LoggerInterface $logger The logger.
     */
    public function __construct(LoggerInterface $logger) {
        parent::__construct($logger);

        $this->setRemoteDirectoryAfter("/Apres");
        $this->setRemoteDirectoryBefore("/Avant");
        $this->setRemoteDirectoryError("/Erreur");
    }

    /**
     * Destructor.
     *
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function __destruct() {

        if (null !== $this->ftpClient) {

            $this->getLogger()->info("OCR provider closes the FTP connection", ["_hostname" => $this->getHostname()]);
            $this->ftpClient->close();
            $this->ftpClient = null;
        }
    }

    /**
     * Build the file paths.
     *
     * @param IOFile $file The file.
     * @return array Returns the file paths.
     */
    protected function buildFilePaths(IOFile $file): array {

        return [
            "upload" => implode("/", [$this->getRemoteDirectoryBefore(), $file->getUniqFilenamePdf()]),
            "remote" => [
                implode("/", [$this->getRemoteDirectoryAfter(), $file->getUniqFilenameDer()]),
                implode("/", [$this->getRemoteDirectoryAfter(), $file->getUniqFilenamePdf()]),
                implode("/", [$this->getRemoteDirectoryAfter(), $file->getUniqFilenameXml()]),
                implode("/", [$this->getRemoteDirectoryAfter(), $file->getUniqFilenameTif()]),
            ],
            "local"  => [
                implode("/", [$this->getLocalDirectoryAfter(), $file->getUniqFilenameDer()]),
                implode("/", [$this->getLocalDirectoryAfter(), $file->getUniqFilenamePdf()]),
                implode("/", [$this->getLocalDirectoryAfter(), $file->getUniqFilenameXml()]),
                implode("/", [$this->getLocalDirectoryAfter(), $file->getUniqFilenameTif()]),
            ],
        ];
    }

    /**
     * Delete the files.
     *
     * @param IOFile $file The I/O file.
     * @return void
     * @throws FtpException Throws an FTP exception if an error occurs.
     */
    public function deleteFiles(IOFile $file): void {

        $provider = $this;

        /**
         * Delete the remote files.
         *
         * @param string $directory The directory.
         * @return void
         * @throws FtpException Throws an FTP exception if an error occurs.
         * @var callable $deleteCallback
         */
        $deleteCallback = function(string $directory) use ($provider, $file): void {

            $paths = $provider->buildFilePaths($file);

            $provider->getLogger()->info("OCR provider list files in a given directory", ["_directory" => $directory]);
            $files = $provider->getFtpClient()->nlist($directory);
            foreach ($files as $current) {

                if (false === in_array($current, $paths["remote"])) {
                    continue;
                }

                $provider->getLogger()->info("OCR provider deletes a file on the FTP server", ["_remote" => $current]);
                $provider->getFtpClient()->delete($current);
            }
        };

        $deleteCallback($this->getRemoteDirectoryBefore());
        $deleteCallback($this->getRemoteDirectoryAfter());
        //$deleteCallback($this->getRemoteDirectoryError());
    }

    /**
     * Download the files.
     *
     * @param IOFile $file The I/O file.
     * @return bool Returns true in case of success, false otherwise.
     * @throws FtpException Throws an FTP exception if an error occurs.
     */
    public function downloadFiles(IOFile $file): bool {

        $paths = $this->buildFilePaths($file);

        $files = $this->getFtpClient()->nlist($this->getRemoteDirectoryAfter());
        if (false === in_array($paths["remote"][0], $files)) {
            return false;
        }

        $provider = $this;

        /**
         * Download a remote file.
         *
         * @param string $local The local file.
         * @param string $remote The remote file.
         * @return void
         * @throws FtpException Throws a FTP exception if an error occurs.
         * @var callable $downloadCallback
         */
        $downloadCallback = function(string $local, string $remote) use ($provider): void {
            $provider->getLogger()->info("OCR provider downloads a file  from the FTP server", ["_local" => $local, "_remote" => $remote]);
            $provider->getFtpClient()->get($local, $remote);
        };

        $downloadCallback($paths["local"][0], $paths["remote"][0]);
        $downloadCallback($paths["local"][1], $paths["remote"][1]);
        $downloadCallback($paths["local"][2], $paths["remote"][2]);
        $downloadCallback($paths["local"][3], $paths["remote"][3]);

        return true;
    }

    /**
     * Get the FTP client.
     *
     * @return FtpClient Returns the FTP client.
     * @throws FtpException Throws an FTP exception if an error occurs.
     */
    public function getFtpClient(): FtpClient {

        if (null === $this->ftpClient) {

            $authentication = new PasswordAuthentication($this->getUsername(), $this->getPassword());
            $authenticator  = new Authenticator($this->getHostname(), $authentication);

            $this->ftpClient = new FtpClient($authenticator);

            $this->getLogger()->info("OCR provider opens an FTP connection to FTP", ["_hostname" => $this->getHostname()]);
            $this->ftpClient->connect();

            $this->getLogger()->info("OCR provider logs in to the FTP connection", ["_username" => $this->getUsername()]);
            $this->ftpClient->login();

            $this->getLogger()->info("OCR provider turns passive mode on");
            $this->ftpClient->pasv(true);
        }

        return $this->ftpClient;
    }

    /**
     * Get the local directory "after".
     *
     * @return string|null Returns the local directory "after".
     */
    public function getLocalDirectoryAfter(): ?string {
        return $this->localDirectoryAfter;
    }

    /**
     * Get the local directory "before".
     *
     * @return string|null Returns the local directory "before"
     */
    public function getLocalDirectoryBefore(): ?string {
        return $this->localDirectoryBefore;
    }

    /**
     * Get the local directory "error".
     *
     * @return string|null Returns the local directory "error".
     */
    public function getLocalDirectoryError(): ?string {
        return $this->localDirectoryError;
    }

    /**
     * Ge the remote directory "after".
     *
     * @return string Returns the remote directory "after".
     */
    public function getRemoteDirectoryAfter(): string {
        return $this->remoteDirectoryAfter;
    }

    /**
     * Get the remote directory "before".
     *
     * @return string Returns the remote directory "before".
     */
    public function getRemoteDirectoryBefore(): string {
        return $this->remoteDirectoryBefore;
    }

    /**
     * Get the remote directory "error".
     *
     * @return string Returns the remote directory "error".
     */
    public function getRemoteDirectoryError(): string {
        return $this->remoteDirectoryError;
    }

    /**
     * Scan a file.
     *
     * @param IOFile $file The I/O file.
     * @param int $retry The retry count.
     * @param int $wait The waiting time (in seconds) between retries.
     * @return bool Returns true in case of success, false otherwise.
     * @throws FtpException Throws an FTP exception in case of success, false otherwise.
     */
    public function scanFile(IOFile $file, int $retry = 30, int $wait = 5): bool {

        $paths = $this->buildFilePaths($file);

        $this->uploadFile($file);

        $result = false;

        for ($i = 0; $i < $retry; ++$i) {

            if (true === $this->downloadFiles($file)) {
                $result = true;
                break;
            }

            $this->getLogger()->info("OCR provider is waiting for...", ["_remote" => $paths["remote"][0]]);
            sleep($wait);
        }

        if (false === $result) {
            $this->getLogger()->info("OCR provider fail to download a file from the FTP server", ["_local" => $paths["local"][0], "_remote" => $paths["remote"][0]]);
            $this->getLogger()->info("OCR provider fail to download a file from the FTP server", ["_local" => $paths["local"][1], "_remote" => $paths["remote"][1]]);
            $this->getLogger()->info("OCR provider fail to download a file from the FTP server", ["_local" => $paths["local"][2], "_remote" => $paths["remote"][2]]);
        }

        return $result;
    }

    /**
     * Set the local directory "after".
     *
     * @param string|null $localDirectoryAfter The local directory "after".
     * @return OcrProvider Returns this OCR provider.
     */
    public function setLocalDirectoryAfter(?string $localDirectoryAfter): OcrProvider {
        $this->localDirectoryAfter = $localDirectoryAfter;
        return $this;
    }

    /**
     * Set the local directory "before".
     *
     * @param string|null $localDirectoryBefore The local directory "before"
     * @return OcrProvider Returns this OCR provider.
     */
    public function setLocalDirectoryBefore(?string $localDirectoryBefore): OcrProvider {
        $this->localDirectoryBefore = $localDirectoryBefore;
        return $this;
    }

    /**
     * Set the local directory "error".
     *
     * @param string|null $localDirectoryError The local directory "error".
     * @return OcrProvider Returns this OCR provider.
     */
    public function setLocalDirectoryError(?string $localDirectoryError): OcrProvider {
        $this->localDirectoryError = $localDirectoryError;
        return $this;
    }

    /**
     * Set the remote directory "after".
     *
     * @param string $remoteDirectoryAfter The remote directory "after".
     * @return OcrProvider Returns this OCR provider.
     */
    public function setRemoteDirectoryAfter(string $remoteDirectoryAfter): OcrProvider {
        $this->remoteDirectoryAfter = $remoteDirectoryAfter;
        return $this;
    }

    /**
     * Set the remote directory "before".
     *
     * @param string $remoteDirectoryBefore The remote directory "before".
     * @return OcrProvider Returns this OCR provider.
     */
    public function setRemoteDirectoryBefore(string $remoteDirectoryBefore): OcrProvider {
        $this->remoteDirectoryBefore = $remoteDirectoryBefore;
        return $this;
    }

    /**
     * Set the remote directory "error".
     *
     * @param string $remoteDirectoryError The remote directory "error".
     * @return OcrProvider Returns this OCR provider.
     */
    public function setRemoteDirectoryError(string $remoteDirectoryError): OcrProvider {
        $this->remoteDirectoryError = $remoteDirectoryError;
        return $this;
    }

    /**
     * Upload a file.
     *
     * @param IOFile $file The I/O file.
     * @return void
     * @throws FtpException Throws an FTP exception if an error occurs.
     */
    public function uploadFile(IOFile $file): void {

        $paths = $this->buildFilePaths($file);

        $this->getLogger()->info("OCR provider upload a file to the FTP server", ["_local" => $file->getPathname(), "_remote" => $paths["upload"]]);
        $this->getFtpClient()->put($file->getPathname(), $paths["upload"]);
    }
}
