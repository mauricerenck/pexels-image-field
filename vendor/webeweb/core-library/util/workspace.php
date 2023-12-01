<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__ . "/../vendor/autoload.php";

use WBW\Library\Traits\Strings\StringDirectoryTrait;
use WBW\Library\Types\Helper\DateTimeHelper;

/**
 * Workspace.
 *
 * @author webeweb <https://github.com/webeweb>
 */
class Workspace {

    use StringDirectoryTrait;

    /**
     * Log command format.
     *
     * @var string
     */
    const LOG_COMMAND_FORMAT = <<< 'EOT'
\033[1;30m+------------------------------------------------------------------------------
| %s
+------------------------------------------------------------------------------
\033[0;32m%s@%s\033[0m:\033[0;34m~%s\033[0m$ %s

EOT;

    /**
     * Constructor.
     *
     * @param string $directory The directory.
     */
    private function __construct(string $directory) {
        $this->setDirectory($directory);
    }

    /**
     * Chain a command.
     *
     * @param string $command The command.
     * @return string Returns the chained command.
     */
    private function chainCommand(string $command): string {
        return sprintf("cd '%s' && %s 1>&2", $this->getDirectory(), $command);
    }

    /**
     * Executes a command.
     *
     * @param string $command The command.
     * @param bool $passThru Pass thru ?
     * @return string[] Returns the output.
     * @throws Throwable Throws an exception if an error occurs.
     */
    private function executeCommand(string $command, bool $passThru = false): array {

        $command .= " && echo"; // Add a new line

        if (true === $passThru) {
            passthru($command);
            return [];
        }

        $output = [];
        exec($command, $output);

        return $output;
    }

    /**
     * Executes a command "composer [command_name]".
     *
     * @param string $arguments The arguments.
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    private function executeCommandComposer(string $arguments): void {

        if (false === $this->isComposerProject()) {
            return;
        }

        $php = $this->getPhpBinary();
        $cmd = implode(DIRECTORY_SEPARATOR, [
            "$php ",
            "usr",
            "local",
            "bin",
            "composer $arguments",
        ]);

        $this->logCommand($cmd);
        $this->executeCommand($this->chainCommand($cmd), true);
    }

    /**
     * Executes a command "git <command>".
     *
     * @param string $arguments The arguments.
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    private function executeCommandGit(string $arguments): void {

        if (false === $this->isGitRepository()) {
            return;
        }

        $cmd = "git $arguments";

        $this->logCommand($cmd);
        $this->executeCommand($this->chainCommand($cmd), true);
    }

    /**
     * Get the available methods.
     *
     * @return string[] Returns the available methods.
     */
    public static function getAvailableMethods(): array {

        return [
            "--composer-update"     => "runComposerUpdate",
            "--git-branch"          => "runGitBranch",
            "--git-config-usermail" => "runGitConfigUserEmail",
            "--git-config-username" => "runGitConfigUserName",
            "--git-fetch"           => "runGitFetch",
            "--git-pull-origin"     => "runGitPullOrigin",
            "--git-push-origin"     => "runGitPushOrigin",
            "--git-push-upstream"   => "runGitPushUpstream",
            "--git-status"          => "runGitStatus",
            "--phpunit"             => "runPhpunit",
            "--license-update"      => "runLicenseUpdate",
            "--phpcoveralls-update" => "runPhpCoverallsUpdate",
            "--phpmetrics-update"   => "runPhpMetricsUpdate",
            "--phpstan-update"      => "runPhpStanUpdate",
            "--sanitize"            => "runSanitize",
        ];
    }

    /**
     * Get the available options.
     *
     * @return string[] Returns the available options.
     */
    public static function getAvailableOptions(): array {

        return [
            "--composer-update"     => "Execute 'composer update'",
            "--git-branch"          => "Execute 'git branch'",
            "--git-config-usermail" => "Execute 'git config user.email <usermail>'",
            "--git-config-username" => "Execute 'git config user.name <username>'",
            "--git-fetch"           => "Execute 'git fetch --prune --prune-tag'",
            "--git-pull-origin"     => "Execute 'git pull origin'",
            "--git-push-origin"     => "Execute 'git push origin'",
            "--git-push-upstream"   => "Execute 'git push upstream --all --tag'",
            "--git-status"          => "Execute 'git status'",
            "--phpunit"             => "Execute 'vendor/bin/phpunit",
            "--license-update"      => "Update LICENSE",
            "--phpcoveralls-update" => "Update PhpCoveralls <version>",
            "--phpmetrics-update"   => "Update PhpMetrics <version>",
            "--phpstan-update"      => "Update PhpStan <version>",
            "--sanitize"            => "",
        ];
    }

    /**
     * Get the instances.
     *
     * @param string $dir The directory.
     * @return Workspace[] Returns the directories.
     */
    public static function getInstances(string $dir): array {

        $directories = [];

        foreach (scandir($dir) as $current) {

            $buffer = realpath(implode(DIRECTORY_SEPARATOR, [
                $dir,
                $current,
            ]));

            if (false === is_dir($buffer) || true === in_array($current, [".", ".."])) {
                continue;
            }

            $directories[] = new self($buffer);
        }

        return $directories;
    }

    /**
     * Get the PHP binary.
     *
     * @return string Returns the PHP binary.
     */
    private function getPhpBinary(): string {
        return PHP_BINARY;
    }

    /**
     * Determines if this directory has GitHub workflows.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    private function hasGitHubWorkflows(): bool {

        $analysis = file_exists(implode(DIRECTORY_SEPARATOR, [
            $this->getDirectory(),
            ".github",
            "workflows",
            "analysis.yml",
        ]));

        $build = file_exists(implode(DIRECTORY_SEPARATOR, [
            $this->getDirectory(),
            ".github",
            "workflows",
            "build.yml",
        ]));

        $metrics = file_exists(implode(DIRECTORY_SEPARATOR, [
            $this->getDirectory(),
            ".github",
            "workflows",
            "metrics.yml",
        ]));

        return $analysis && $build && $metrics;
    }

    /**
     * Determines if this directory has a LICENSE.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    private function hasLicense(): bool {
        return file_exists(implode(DIRECTORY_SEPARATOR, [
            $this->getDirectory(),
            "LICENSE",
        ]));
    }

    /**
     * Determines if this directory has a PHPUnit configuration.
     *
     * @return bool Returns true in case of success, false otherwise.
     * @throws Throwable Throws an exception if an error occurs.
     */
    private function hasPhpUnitConfiguration(): bool {

        $xml = file_exists(implode(DIRECTORY_SEPARATOR, [
            $this->getDirectory(),
            "phpunit.xml.dist",
        ]));

        $php = file_exists(implode(DIRECTORY_SEPARATOR, [
            $this->getDirectory(),
            "vendor",
            "bin",
            "phpunit",
        ]));

        return $xml && $php;
    }

    /**
     * Determines if this directory is a composer project.
     *
     * @return bool Returns true in case of success, false otherwise.
     * @throws Throwable Throws an exception if an error occurs.
     */
    private function isComposerProject(): bool {
        return file_exists(implode(DIRECTORY_SEPARATOR, [
            $this->getDirectory(),
            "composer.json",
        ]));
    }

    /**
     * Determines if this directory is a git repository.
     *
     * @return bool Returns true in case of success, false otherwise.
     * @throws Throwable Throws an exception if an error occurs.
     */
    private function isGitRepository(): bool {
        return file_exists(implode(DIRECTORY_SEPARATOR, [
            $this->getDirectory(),
            ".git",
        ]));
    }

    /**
     * Log a command.
     *
     * @param string $command The command.
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    private function logCommand(string $command): void {

        $home = $this->executeCommand("echo \$HOME");
        $pwd  = str_replace($home, "", $this->getDirectory());
        $log  = sprintf(self::LOG_COMMAND_FORMAT, $this->getDirectory(), $this->runWhoami(), $this->runHostname(), $pwd, $command);

        passthru(sprintf("echo '%s'", $log));
    }

    /**
     * Parse the arguments.
     *
     * @param array $args The arguments.
     * @return array Returns the parsed arguments.
     * @throws InvalidArgumentException Throws an invalid argument exception if an argument is invalid.
     */
    public static function parseArguments(array $args): array {

        $pwd       = getcwd();
        $options   = array_keys(self::getAvailableOptions());
        $arguments = [];

        foreach ($args as $k => $v) {

            if (0 === $k) {
                continue;
            }

            if (false === strpos($v, "--")) {

                if (0 === strpos($v, "/")) {
                    $directory = $v;
                } else {
                    $directory = implode("/", [$pwd, $v]);
                }

                if (false === realpath($directory)) {
                    throw new InvalidArgumentException(sprintf("The directory '%s' doesn't exist", $directory));
                }

                $arguments["directory"] = $directory;
                continue;
            }

            $values = explode("=", $v);
            if (false === in_array($values[0], $options)) {
                throw new InvalidArgumentException(sprintf("The argument '%s' is invalid", $v));
            }

            $arguments[$values[0]] = null;
            if (2 === count($values)) {
                $arguments[$values[0]] = $values[1];
            }
        }

        if (false === array_key_exists("directory", $arguments)) {
            throw new InvalidArgumentException("The mandatory argument directory is missing");
        }

        return $arguments;
    }

    /**
     * Print help.
     *
     * @param string $script The script.
     * @return void
     */
    public static function printHelp(string $script): void {

        echo sprintf("Usage:\n%s %s [options] /path/to/directory\n\n", PHP_BINARY, $script);

        echo "Options:\n";
        foreach (self::getAvailableOptions() as $k => $v) {
            echo sprintf("%-23s %s\n", $k, $v);
        }
        echo "\n";

        echo "Samples:\n";
        echo sprintf("%s %s --git-config-username=John\ Doe /path/to/directory\n", PHP_BINARY, $script);
        echo sprintf("%s %s --git-config-usermail=john.doe@gmail.com /path/to/directory\n", PHP_BINARY, $script);
        echo sprintf("%s %s --phpcoveralls-update=2.5.2 /path/to/directory\n", PHP_BINARY, $script);
        echo sprintf("%s %s --phpmetrics-update=2.8.1 /path/to/directory\n", PHP_BINARY, $script);
        echo sprintf("%s %s --phpstan-update=0.12.99 /path/to/directory\n", PHP_BINARY, $script);
        echo "\n";
    }

    /**
     * Executes a command "composer update".
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runComposerUpdate(): void {
        $this->executeCommandComposer("update");
    }

    /**
     * Executes a command "git branch".
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runGitBranch(): void {
        $this->executeCommandGit("branch");
    }

    /**
     * Executes a command "git config user.email 'email'".
     *
     * @param string $value The value.
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runGitConfigUserEmail(string $value): void {
        $this->executeCommandGit(sprintf("config user.email '%s'", $value));
    }

    /**
     * Executes a command "git config user.name 'name'".
     *
     * @param string $value The value.
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runGitConfigUserName(string $value): void {
        $this->executeCommandGit(sprintf("config user.name '%s'", $value));
    }

    /**
     * Executes a command "git fetch --prune --prune-tag".
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runGitFetch(): void {
        $this->executeCommandGit("fetch --prune --prune-tag");
    }

    /**
     * Executes a command "git pull origin".
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runGitPullOrigin(): void {
        $this->executeCommandGit("pull --ff-only origin");
    }

    /**
     * Executes a command "git push origin".
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runGitPushOrigin(): void {
        $this->executeCommandGit("push origin");
    }

    /**
     * Executes a command "git push upstream".
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runGitPushUpstream(): void {
        $this->executeCommandGit("push upstream --all --tag");
    }

    /**
     * Executes a command "git status".
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runGitStatus(): void {
        $this->executeCommandGit("status");
    }

    /**
     * Executes a command "hostname".
     *
     * @return string Returns the hostname.
     * @throws Throwable Throws an exception if an error occurs.
     */
    private function runHostname(): string {
        return $this->executeCommand("hostname")[0];
    }

    /**
     * Updates a LICENSE.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runLicenseUpdate(): void {

        if (false === $this->hasLicense()) {
            return;
        }

        $year = DateTimeHelper::getYearNumber(new DateTime());

        $cmd = "sed -i 's/[0-9]\{4\}\ WEBEWEB/$year WEBEWEB/' LICENSE";

        $this->logCommand($cmd);
        $this->executeCommand($this->chainCommand($cmd), true);
    }

    /**
     * Update a PHP archive.
     *
     * @param string $phar The PHP archive.
     * @param string $version The version.
     * @param string $filename The filename.
     * @throws Throwable Throws an exception if an error occurs.
     */
    private function runPharUpdate(string $phar, string $version, string $filename): void {

        if (false === $this->hasGitHubWorkflows()) {
            return;
        }

        $cmd = "sed -i 's/[0-9\.]*\/$phar\.phar/$version\/$phar.phar/' .github/workflows/$filename.yml";

        $this->logCommand($cmd);
        $this->executeCommand($this->chainCommand($cmd), true);
    }

    /**
     * Updates the PhpCoveralls version.
     *
     * @param string $version The version.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runPhpCoverallsUpdate(string $version): void {
        $this->runPharUpdate("php-coveralls", $version, "build");
    }

    /**
     * Updates the PhpMetrics version.
     *
     * @param string $version The version.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runPhpMetricsUpdate(string $version): void {
        $this->runPharUpdate("phpmetrics", $version, "metrics");
    }

    /**
     * Updates the PhpStan version.
     *
     * @param string $version The version.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runPhpStanUpdate(string $version): void {
        $this->runPharUpdate("phpstan", $version, "analysis");
    }

    /**
     * Executes a command "phpunit".
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runPhpunit(): void {

        if (false === $this->hasPhpUnitConfiguration()) {
            return;
        }

        $php = $this->getPhpBinary();
        $cmd = implode(DIRECTORY_SEPARATOR, [
            "$php vendor",
            "bin",
            "phpunit",
        ]);

        $this->logCommand($cmd);
        $this->executeCommand($this->chainCommand($cmd), true);
    }

    /**
     * Executes a command "sanitize".
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function runSanitize(): void {

        if (false === $this->isGitRepository()) {
            return;
        }

        $shf = __DIR__ . "/sanitize-git.sh";

        $cmd = $this->executeCommand("tail -n1 $shf")[0];

        $this->logCommand($cmd);
        $this->executeCommand($this->chainCommand("/bin/bash $shf"));
    }

    /**
     * Executes a command "whoami".
     *
     * @return string Returns the command "whoami" result.
     * @throws Throwable Throws an exception if an error occurs.
     */
    private function runWhoami(): string {
        return $this->executeCommand("whoami")[0];
    }
}

try {

    $arguments = Workspace::parseArguments($argv);
    $instances = Workspace::getInstances($arguments["directory"]);
    $methods   = Workspace::getAvailableMethods();

    unset($arguments["directory"]);

    foreach ($arguments as $k => $v) {

        foreach ($instances as $d) {
            call_user_func([$d, $methods[$k]], $v);
        }
    }
} catch (Throwable $ex) {

    echo sprintf("%s\n\n", $ex->getMessage());
    Workspace::printHelp($argv[0]);
}
