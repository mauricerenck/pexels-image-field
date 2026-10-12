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
            // Wert aus der Blueprint (downloadSize: landscape) hat Vorrang vor der Option in der config.php
            'downloadSize' => function ($downloadSize = null) {
                return $downloadSize ?: option('mauricerenck.PexelsImageField.downloadSize', 'large');
            },
        ]
    ]
];
