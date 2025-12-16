<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Obsthuegelland Newsletter',
    'description' => 'Table-based newsletter templates for direct_mail using fluid_styled_content (TYPO3 12 LTS).',
    'category' => 'templates',
    'author' => 'Opaque Design / Walter Kruml',
    'author_email' => '',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'direct_mail' => '',
            'registeraddress' => '',
            'registeraddress_logger' => '',
        ],
    ],
];
