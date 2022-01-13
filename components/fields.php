<?php

namespace mauricerenck\PexelsImageField;

return [
    'pexels' => [
        'props' => [
            'apiKey' => function () {
                return option('mauricerenck.PexelsImageField.apiKey', '');
            },
        ]
    ]
];
