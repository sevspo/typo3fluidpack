<?php

/**
 * Extension Manager/Repository config file for ext "typo3package3".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'typo3package3',
    'description' => 'Fluid Styled Components',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Nocompyet\\Typo3package3\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Severin Spoerri',
    'author_email' => 'severin.spoerri@outlook.com',
    'author_company' => 'noCompYet',
    'version' => '1.0.0',
];
