<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__ . "/../vendor/autoload.php";

$download = $argv[1];
if (false === is_file($download)) {
    exit();
}

$dirname  = dirname($download);
$basename = basename($download);
$working  = "$dirname/jquery-datatables";

if (false === file_exists($working)) {
    mkdir($working);
}

exec("cd '$working' && unzip ../$basename");

/** @var DirectoryIterator $current */
foreach (new DirectoryIterator($working) as $current) {

    if (true === $current->isDot() || true === $current->isFile()) {
        continue;
    }

    $filename = strtolower($current->getFilename());

    $rootFile = preg_match("/^DataTables-[0-9.]+$/", $current->getFilename());
    if (0 === $rootFile) {
        $filename = "datatables-$filename";
    }

    rename($current->getPathname(), $current->getPath() . "/$filename");

    $items = [
        $filename,
    ];

    if (1 === $rootFile) {
        array_push($items, "datatables.css", "datatables.min.css", "datatables.js", "datatables.min.js");
    }

    $cmd = "cd '$working' && zip -r $filename.zip " . implode(" ", $items);
    exec($cmd);
}
