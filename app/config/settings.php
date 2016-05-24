<?php

return [
    'cache' => false,
    'cache_life' => 3600,
    'cache_dir' => __DIR__ . '/../data/cache',
    'template_dir' => __DIR__ . '/../../templates',
    'compile_dir' => __DIR__ . '/../data/templates_c',
    'uploads_dir' => __DIR__ . '/../../public/uploads/images',
	'media_dir' => __DIR__ . '/../../public/media',
	'images_dir' => __DIR__ . '/../../public/media/images',

    'debug' => true,

    // salt user password
    'salt' => 'alpha',

    // set the number of results per page for pagination
    'max_results' => '30',

    // in case we don't build a db for administrators
    'admin_username' => 'admin',
    'admin_password' => 'adminpass',
];
