<?php

declare(strict_types=1);

$EM_CONF[$_EXTKEY] = [
    'title' => 'Obsthuegelland Newsletter (direct_mail tables)',
    'description' => 'Tabellenbasierte Newsletter-Templates (Fluid + fluid_styled_content Overrides) für direct_mail. Unsubscribe via registeraddress/registeraddress_logger.',
    'category' => 'templates',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'Walter Kruml',
    'author_email' => 'info@opaque.at',
    'author_company' => 'Opaque Design',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'direct_mail' => '',
            'registeraddress' => '',
            'registeraddress_logger' => '',
        ],
    ],
];
