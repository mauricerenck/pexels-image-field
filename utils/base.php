<?php

namespace mauricerenck\STARTERKIT;

use f;
use Exception;
use json_decode;
use Kirby\Http\Remote;

class BaseUtils
{
    public function getPluginVersion()
    {
        try {
            $composerString = f::read(__DIR__ . '/../composer.json');
            $composerJson = json_decode($composerString);

            $packagistResult = Remote::get('https://repo.packagist.org/p2/mauricerenck/STARTERKIT.json');
            $packagistJson = json_decode($packagistResult->content());
            $latestVersion = $packagistJson->packages->{'mauricerenck/STARTERKIT'}[0]->version;

            return [
                'local' => $composerJson->version,
                'latest' => $latestVersion,
                'updateAvailable' => $composerJson->version !== $latestVersion,
                'error' => false
            ];
        } catch (Exception $e) {
            return [
                'local' => $composerJson->version,
                'latest' => 'unkown',
                'updateAvailable' => false,
                'error' => true
            ];
        }
    }
}
