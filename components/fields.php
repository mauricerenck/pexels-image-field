<?php

namespace mauricerenck\PexelsImageField;

return [
    'pexels' => [
        'props' => [
            'downloadSize' => function () {
                return option('mauricerenck.PexelsImageField.downloadSize', 'large');
            },
        ]
    ]
];
