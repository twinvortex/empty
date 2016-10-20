<?php

namespace App\System\Config;

class Config
{
    // Setting app and settings as public since we need it in the whole project
    public $app;
    public $settings;
    public $database;

    public function __construct()
    {
        $this->app = (object) require __DIR__ . '/../../../app/config/app.php';
        $this->settings = (object) require __DIR__ . '/../../../app/config/settings.php';
    }
}
