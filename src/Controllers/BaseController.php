<?php

namespace Vortex\Controllers;

use Vortex\Models\User;
use Vortex\System\Config\Config;
use Illuminate\Database\Capsule\Manager as Capsule;

class BaseController extends \Smarty
{
    protected $config;
    protected $capsule;

    public $templateName = 'default';


    /**
     * Init everything we need in controllers
     */
    public function __construct()
    {
        parent::__construct();

        // Loading config vars
        $this->config = new Config();

        // Smarty init caching and template paths
        $this->setCaching(self::CACHING_LIFETIME_CURRENT);

        // Set caching to true or false
        $this->caching = $this->config->settings->cache;

        // The life of cache files
        $this->cache_lifetime = $this->config->settings->cache_life;

        // Template location
        $this->setTemplateDir($this->config->settings->template_dir.'/'.$this->templateName.'/');

        // Compile template location
        $this->setCompileDir($this->config->settings->compile_dir);

        // Cache location
        $this->setCacheDir($this->config->settings->cache_dir);

        // Assign global config in smarty
        $app = (array) $this->config->app;
        $settings = (array) $this->config->settings;
        $this->assign($app);
        $this->assign($settings);

    }
}
