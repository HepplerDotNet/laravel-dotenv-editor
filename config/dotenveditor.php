<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Path configuration
    |--------------------------------------------------------------------------
    |
    | Change the paths, so they fit your needs
    |
     */
    'pathToEnv' => base_path('.env'),
    'backupPath' => resource_path('backups/dotenv-editor/'),
    'filePermissions' => env('FILE_PERMISSIONS', 0755),
    'sortOnSave' => true,

    /*
    |--------------------------------------------------------------------------
    | GUI-Settings
    |--------------------------------------------------------------------------
    |
    | Here you can set the different parameter for the view, where you can edit
    | .env via a graphical interface.
    |
    | Comma-separate your different middlewares.
    |
     */

    // Activate or deactivate the graphical interface
    'activated' => false,

    /* Default view */
    'template' => 'dotenv-editor::master',
    'overview' => 'dotenv-editor::overview',

    // Config route group
    'route' => [
        'namespace' => 'HepplerDotNet\DotenvEditor\Http\Controllers',
        'prefix' => 'admin/env',
        'as' => 'admin.env.',
        'middleware' => ['web'],
    ],
];
