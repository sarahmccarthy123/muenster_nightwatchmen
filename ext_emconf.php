<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Muenster Nightwatchmen Site Package',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SarahMccarthy\\MuensterNightwatchmenSitePackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sarah McCarthy',
    'author_email' => 'sarahmccarthy123@yahoo.com',
    'author_company' => 'Sarah McCarthy',
    'version' => '1.0.0',
];
