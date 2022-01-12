<?php

namespace mauricerenck\STARTERKIT;

return [
    'webmentions' => function ($kirby) {
        return [
            'label' => 'STARTERKIT',
            'icon' => 'live',
            'menu' => true,
            'link' => 'STARTERKIT',
            'views' => [
                [
                    'pattern' => 'STARTERKIT',
                    'action' => function () {
                        return [
                            'component' => 'k-STARTERKIT-view',
                            'title' => 'STARTERKIT',
                            'props' => [
                                'version' => function () {
                                    $baseUtils = new BaseUtils();
                                    return $baseUtils->getPluginVersion();
                                }
                            ],
                        ];
                    }
                ]
            ]
        ];
    }
];
