<?php
return [
    // Framework Name
    'framework' => 'dappur', 
    // Enable/Disable Public display of error details
    'displayErrorDetails' => true,
    // Database Options
    'db' => [
        // Select Database to Use
        'use' => 'development', 
        // Development Database
        'development' => [
            'driver' => 'mysql', // Only MySQL Supported
            'host' => 'localhost', // Database Host
            'port' => 3306, // My SQL Port
            'database' => '', // Database Name
            'username' => '', // Database Username
            'password' => '', // Database Password
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => ''
        ],
        // Production Database
        'production' => [
            'driver' => 'mysql', // Only MySQL Supported
            'host' => '', // Database Host
            'port' => 3306, // My SQL Port
            'database' => '', // Database Name
            'username' => '', // Database Username
            'password' => '', // Database Password
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => ''
        ]
    ], 
    // Twig Templating Options
    'view' => [
        'template_path' => __DIR__ . '/../views/',
        'twig' => [
            'cache' => false, //__DIR__ . '/../../storage/cache/twig'
            'debug' => false,
            'auto_reload' => true,
        ],
    ],
    // Logging Options
    'logger' => [
        'name' => 'Dappur',
        'log_path' => __DIR__ . '/../../storage/log/monolog/dappur.log', // PATH_TO_LOG
        'le_token' => false, // Logentries Access Token
    ],
    // Cloudinary Options
    'cloudinary' => [
        'enabled' => false, // Enable Cloudinary
        'cloud_name' => '', // Cloud Name
        'api_key' => '', // API Key
        'api_secret' => '', // API Secret
    ],
    // Deployment Options
    'deployment' => [
        'enabled' => false, // Enable Deployment
        'page_name' => 'deploy', 
        'deploy_token' => '', // Deployment Token (Recommend random SHA-1 Key)
        'repo_url' => '' // URL of the Git Repository (Make sure your PHP user has access to the repo)
    ]

];