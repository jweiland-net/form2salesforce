<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form to Salesforce',
    'description' => 'Auto maps fields to if fields have the same names',
    'category' => 'plugin',
    'author' => 'Stefan Froemken',
    'author_email' => 'projects@jweiland.net',
    'author_company' => 'jweiland.net',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.23-11.5.99',
            'form' => '11.5.23-11.5.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
