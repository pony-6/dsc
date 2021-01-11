<?php

return [

    'dsn' => 'https://ae4ea7d2fd6042e48ed4366ee83f2c29:0ec2d8d9abc64f10aa1702ecee3bcf5a@exception.ecjia.com/6',

    // capture release as git sha
    // 'release' => trim(exec('git --git-dir ' . base_path('.git') . ' log --pretty="%h" -n1 HEAD')),

    'breadcrumbs' => [

        // Capture bindings on SQL queries logged in breadcrumbs
        'sql_bindings' => true,

    ],

];
