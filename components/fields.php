<?php

namespace mauricerenck\PexelsImageField;

return [
    'pexels' => [
        'computed' => [
            'pageId' => function (): string {
                return $this->model()->id();
            }
        ],
        'props' => [
            'downloadSize' => function () {
                return option('mauricerenck.PexelsImageField.downloadSize', 'large');
            },
        ]
    ]
];
