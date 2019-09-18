<?php
return [
    'viewUsers' => [
        'type' => 2,
        'description' => 'View users',
    ],
    'viewProxies' => [
        'type' => 2,
        'description' => 'View proxies',
    ],
    'updateProxies' => [
        'type' => 2,
        'description' => 'Update proxies',
    ],
    'editor' => [
        'type' => 1,
        'children' => [
            'viewProxies',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'updateProxies',
            'viewUsers',
            'editor',
        ],
    ],
];
