<?php

return [

    // Packages directory
    'packages_dir' => 'packages',

    /*
   |--------------------------------------------------------------------------
   | Packages list
   |--------------------------------------------------------------------------
   |
   | Include your package namespace and directory here
   |
   | Example:
   | 'RepositoryName\\PackageName' => [
   |     'dir' => 'myrepository\\mypackage',                // location to your package composer.json
   |     'root' => 'src'                                    // Your package root directory
   |     'migrations' => 'src\\Database\\Migrations'        // Migrations directory inside your package
   | ],
   |
   */

    'packages_list' => [

        'RepositoryName\\PackageName' => [
            'dir' => 'myrepository\\mypackage',
            'root' => 'src',
            'migrations' => 'src\\Database\\Migrations',
        ],

    ]
];