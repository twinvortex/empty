<?php

return [

    // enable smarty cache and caching lifetime
    'cache' => false,
    'cache_life' => 3600,

    // cache storage and compilation
    'cache_dir' => __DIR__ . '/../../storage/framework/cache',
    'compile_dir' => __DIR__ . '/../../storage/framework/templates_c',

    // session storage folder
    'session_dir' => __DIR__ . '/../../storage/framework/sessions',

    // template folder
    'template_dir' => __DIR__ . '/../../templates',

    // default template name
    'template_name' => 'default',

    // uploads / images folder
    'uploads_dir' => __DIR__ . '/../../public/uploads/images',
    'images_dir' => __DIR__ . '/../../public/media/images',

    // the media directory
    'media_dir' => __DIR__ . '/../../public/media',

    // enable filp/whoops debugging
    'debug' => true,

    // salt user password
    'salt' => 'jumper',

    // set the number of results per page for pagination
    'max_results' => '30',

    // default setup for admin access
    'admin_username' => 'admin',
    'admin_password' => 'adminpass',

];
