<?php

namespace mauricerenck\PexelsImageField;

use Kirby;

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('mauricerenck/indieConnector', [
    'api' => require_once(__DIR__ . '/internal/api.php'),
    'options' => require_once(__DIR__ . '/internal/options.php'),
    'fields' => require_once(__DIR__ . '/components/fields.php'),
    'blueprints' => [
        'files/pexelsimage' => __DIR__ . '/blueprints/files/pexelsimage.yml',
    ],
]);
