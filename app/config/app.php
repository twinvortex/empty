<?php

// Generating the URL
$http = 'http://';
$domain = 'empty.project';

if(!empty($_SERVER['HTTP_HOST'])) {
    $url = str_replace('\\', '', $http . $_SERVER['HTTP_HOST']);
} else {
    $url = $http . $domain;
}

return [
    'url' => $url,
    'images_url' => $url . '/media/images',
    'domain' => $_SERVER['HTTP_HOST'],
    'assets' => $url . '/assets',
    'admin' => $url . '/admin', // in case there's a need for a super admin url
    'dashboard' => $url . '/dashboard',
    'member' => $url . '/member',
    'login' => $url . '/login',
];

