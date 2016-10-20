<?php

namespace App\Controllers;

use App\Models\User;
use App\System\Config\Config;
use Illuminate\Database\Capsule\Manager as Capsule;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends \Smarty
{
    protected $config;
    protected $capsule;

    protected $app;
    protected $settings;

    protected $response;

    public $templateName = 'default';


    /**
     * Init everything we need in controllers
     */
    public function __construct()
    {
        parent::__construct();

        $this->response = new Response();

        // Loading config vars
        $this->config = new Config();
        $this->app = $this->config->app;
        $this->settings = $this->config->settings;

        // Smarty init caching and template paths
        $this->setCaching(self::CACHING_LIFETIME_CURRENT);

        // Set caching to true or false
        $this->caching = $this->settings->cache;

        // The life of cache files
        $this->cache_lifetime = $this->settings->cache_life;

        // Template location
        $this->setTemplateDir($this->settings->template_dir.'/'.$this->templateName.'/');

        // Compile template location
        $this->setCompileDir($this->settings->compile_dir);

        // Cache location
        $this->setCacheDir($this->settings->cache_dir);

        // Assign global config in smarty
        $app = (array) $this->app;
        $settings = (array) $this->settings;
        $this->assign($app);
        $this->assign($settings);

    }

    protected function show404()
    {
        $this->response->setStatusCode(Response::HTTP_NOT_FOUND);
        $this->response->send(); // sending the 404 status code
        $this->display('pages/404.tpl');
    }
}
