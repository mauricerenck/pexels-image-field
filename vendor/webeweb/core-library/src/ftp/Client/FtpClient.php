<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ftp\Client;

use WBW\Library\Ftp\Exception\FtpException;
use WBW\Library\Security\Authenticator;
use WBW\Library\Types\Helper\StringHelper;

/**
 * FTP client.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ftp\Client
 */
class FtpClient extends AbstractClient {

    /**
     * Constructor.
     *
     * @param Authenticator $authenticator The authenticator.
     */
    public function __construct(Authenticator $authenticator) {
        parent::__construct($authenticator);

        $this->getAuthenticator()->setScheme("ftp");
        if (null === $this->getAuthenticator()->getPort()) {
            $this->getAuthenticator()->setPort(21);
        }
    }

    /**
     * Changes to the parent directory.
     *
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function cdup(): FtpClient {

        if (false === @ftp_cdup($this->getConnection())) {
            throw $this->newFtpException("ftp_cdup failed");
        }

        return $this;
    }

    /**
     * Changes the current directory on a FTP server.
     *
     * @param string $directory The directory.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function chdir(string $directory): FtpClient {

        if (false === @ftp_chdir($this->getConnection(), $directory)) {
            throw $this->newFtpException("ftp_chdir failed: [$directory]");
        }

        return $this;
    }

    /**
     * Set permissions on a file via FTP.
     *
     * @param int $mode The mode.
     * @param string $filename The filename.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function chmod(int $mode, string $filename): FtpClient {

        if (false === @ftp_chmod($this->getConnection(), $mode, $filename)) {
            throw $this->newFtpException("ftp_chmod failed: [$mode, $filename]");
        }

        return $this;
    }

    /**
     * Closes an FTP connection.
     *
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function close(): FtpClient {

        if (null === $this->getConnection() || false === $this->getConnection()) {
            return $this;
        }

        if (false === @ftp_close($this->getConnection())) {
            throw $this->newFtpException("ftp_close failed");
        }

        return $this;
    }

    /**
     * Opens an FTP connection.
     *
     * @param int $timeout The timeout.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function connect(int $timeout = 90): FtpClient {

        $host = $this->getAuthenticator()->getHostname();
        $port = $this->getAuthenticator()->getPort();

        $this->setConnection(@ftp_connect($host, $port, $timeout));
        if (false === $this->getConnection()) {
            throw $this->newFtpException("ftp_connect failed: [$host, $port, $timeout]");
        }

        return $this;
    }

    /**
     * Deletes a file on the FTP server.
     *
     * @param string $path The path.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function delete(string $path): FtpClient {

        if (false === @ftp_delete($this->getConnection(), $path)) {
            throw $this->newFtpException("ftp_delete failed: [$path]");
        }

        return $this;
    }

    /**
     * Downloads a file from the FTP server and saves to an open file.
     *
     * @param resource $localStream The local stream.
     * @param string $remoteFile The remote file.
     * @param int $mode The mode.
     * @param int $resumePos The resume position.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function fget($localStream, string $remoteFile, int $mode = FTP_BINARY, int $resumePos = 0): FtpClient {

        if (false === @ftp_fget($this->getConnection(), $localStream, $remoteFile, $mode, $resumePos)) {
            throw $this->newFtpException("ftp_fget failed: [$localStream, $remoteFile, $mode, $resumePos]");
        }

        return $this;
    }

    /**
     * Uploads from an open file to the FTP server.
     *
     * @param string $remoteFile The remote file.
     * @param resource $localStream The local stream.
     * @param int $mode The mode.
     * @param int $startPos The start position.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function fput(string $remoteFile, $localStream, int $mode = FTP_BINARY, int $startPos = 0): FtpClient {

        if (false === @ftp_fput($this->getConnection(), $remoteFile, $localStream, $mode, $startPos)) {
            throw $this->newFtpException("ftp_fput failed: [$remoteFile, $localStream, $mode, $startPos]");
        }

        return $this;
    }

    /**
     * Downloads a file from the FTP server.
     *
     * @param string $localFile The local file.
     * @param string $remoteFile The remote file.
     * @param int $mode The mode.
     * @param int $resumePos The resume position.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function get(string $localFile, string $remoteFile, int $mode = FTP_BINARY, int $resumePos = 0): FtpClient {

        if (false === @ftp_get($this->getConnection(), $localFile, $remoteFile, $mode, $resumePos)) {
            throw $this->newFtpException("ftp_get failed: [$localFile, $remoteFile, $mode, $resumePos]");
        }

        return $this;
    }

    /**
     * Logs in to an FTP connection.
     *
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function login(): FtpClient {

        $username = $this->getAuthenticator()->getPasswordAuthentication()->getUsername();
        $password = $this->getAuthenticator()->getPasswordAuthentication()->getPassword();

        if (false === @ftp_login($this->getConnection(), $username, $password)) {
            throw $this->newFtpException("ftp_login failed: [$username]");
        }

        return $this;
    }

    /**
     * Returns the last modified time of the given file.
     *
     * @param string $remoteFile The remote file.
     * @return int Returns the last modified time of the given file.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function mdtm(string $remoteFile): int {

        $result = @ftp_mdtm($this->getConnection(), $remoteFile);
        if (-1 === $result) {
            throw $this->newFtpException("ftp_mdtm failed: [$remoteFile]");
        }

        return $result;
    }

    /**
     * Creates a directory.
     *
     * @param string $directory The directory.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function mkdir(string $directory): FtpClient {

        if (false === @ftp_mkdir($this->getConnection(), $directory)) {
            throw $this->newFtpException("ftp_mkdir failed: [$directory]");
        }

        return $this;
    }

    /**
     * Retrieves a file from the FTP server and writes it to an open file (non-blocking).
     *
     * @param resource $localStream The local stream.
     * @param string $remoteFile The remote file.
     * @param int $mode The mode.
     * @param int $resumePos The resume position.
     * @return int|null
     */
    public function nbFget($localStream, string $remoteFile, int $mode = FTP_BINARY, int $resumePos = 0): ?int {
        return @ftp_nb_fget($this->getConnection(), $localStream, $remoteFile, $mode, $resumePos);
    }

    /**
     * Stores a file from an open file to the FTP server (non-blocking).
     *
     * @param string $remoteFile The remote file.
     * @param resource $localStream The local stream.
     * @param int $mode The mode.
     * @param int $startPos The start position.
     * @return int
     */
    public function nbFput(string $remoteFile, $localStream, int $mode = FTP_BINARY, int $startPos = 0): int {
        return @ftp_nb_fput($this->getConnection(), $remoteFile, $localStream, $mode, $startPos);
    }

    /**
     * Retrieves a file from the FTP server and writes it to a local file (non-blocking).
     *
     * @param string $localFile The local file.
     * @param string $remoteFile The remote file.
     * @param int $mode The mode.
     * @param int $resumePos The resume position.
     * @return int
     */
    public function nbGet(string $localFile, string $remoteFile, int $mode = FTP_BINARY, int $resumePos = 0): int {
        return @ftp_nb_get($this->getConnection(), $localFile, $remoteFile, $mode, $resumePos);
    }

    /**
     * Stores a file from an open file to the FTP server (non-blocking).
     *
     * @param string $remoteFile The remote file.
     * @param string $localFile The local file.
     * @param int $mode The mode.
     * @param int $startPos The start position.
     * @return int
     */
    public function nbPut(string $remoteFile, string $localFile, int $mode = FTP_BINARY, int $startPos = 0): int {
        return @ftp_nb_put($this->getConnection(), $remoteFile, $localFile, $mode, $startPos);
    }

    /**
     * Returns a list of files in the given directory.
     *
     * @param string $directory The directory.
     * @return string[] Returns a list of files in the given directory.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function nlist(string $directory): array {

        $result = @ftp_nlist($this->getConnection(), $directory);
        if (false === $result) {
            throw $this->newFtpException("ftp_nlist failed: [$directory]");
        }

        return $result;
    }

    /**
     * Turns passive mode on or off.
     *
     * @param bool $pasv The passive mode.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function pasv(bool $pasv): FtpClient {

        if (false === @ftp_pasv($this->getConnection(), $pasv)) {
            throw $this->newFtpException("ftp_pasv failed: [" . StringHelper::parseBoolean($pasv) . "]");
        }

        return $this;
    }

    /**
     * Uploads a file to the FTP server.
     *
     * @param string $localFile The local file.
     * @param string $remoteFile The remote file.
     * @param int $mode The mode.
     * @param int $startPos The start position.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function put(string $localFile, string $remoteFile, int $mode = FTP_BINARY, int $startPos = 0): FtpClient {

        if (false === @ftp_put($this->getConnection(), $remoteFile, $localFile, $mode, $startPos)) {
            throw $this->newFtpException("ftp_put failed: [$remoteFile, $localFile, $mode, $startPos]");
        }

        return $this;
    }

    /**
     * Returns the current directory name.
     *
     * @return string Returns the current directory name.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function pwd(): string {

        $result = @ftp_pwd($this->getConnection());
        if (false === $result) {
            throw $this->newFtpException("ftp_pwd failed");
        }

        return $result;
    }

    /**
     * Returns a detailed list of files in the given directory.
     *
     * @param string $directory The directory.
     * @param bool $recursive Recursive ?
     * @return array Returns a detailed list of files in the given directory.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function rawList(string $directory, bool $recursive = false): array {

        $result = @ftp_rawList($this->getConnection(), $directory, $recursive);
        if (false === $result) {
            throw $this->newFtpException("ftp_rawList failed: [$directory, " . StringHelper::parseBoolean($recursive) . "]");
        }

        return $result;
    }

    /**
     * Renames a file or a directory on the FTP server.
     *
     * @param string $oldName The old name.
     * @param string $newName The new name.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function rename(string $oldName, string $newName): FtpClient {

        if (false === @ftp_rename($this->getConnection(), $oldName, $newName)) {
            throw $this->newFtpException("ftp_rename failed: [$oldName, $newName]");
        }

        return $this;
    }

    /**
     * Removes a directory.
     *
     * @param string $directory The directory.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function rmdir(string $directory): FtpClient {

        if (false === @ftp_rmdir($this->getConnection(), $directory)) {
            throw $this->newFtpException("ftp_rmdir failed: [$directory]");
        }

        return $this;
    }

    /**
     * Returns the size of the given file.
     *
     * @param string $remoteFile The remote file.
     * @return int Returns the size of the given file.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function size(string $remoteFile): int {

        $result = @ftp_size($this->getConnection(), $remoteFile);
        if (-1 === $result) {
            throw $this->newFtpException("ftp_size failed: [$remoteFile]");
        }

        return $result;
    }

    /**
     * Returns the system type identifier of the remote FTP server.
     *
     * @return string Returns the system type identifier of the remote FTP server.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function systype(): string {

        $result = @ftp_systype($this->getConnection());
        if (false === $result) {
            throw $this->newFtpException("ftp_systype failed");
        }

        return $result;
    }
}
