<?php

namespace Vortex\System\Pagination;

use Vortex\System\Config\Config;

class Pagination {

    private $config;
    private $numResults;

    public function __construct($numResults = false)
    {
        $this->config = new Config();
        if($numResults) {
            $this->numResults = $numResults;
        } else {
            $this->numResults = $this->config->settings->max_results;
        }
    }

    // Render the full page
    public function render($totalResults, $path, $sign = '/')
    {
        require __DIR__ . '/functions.php';

        // render the pagination
        return pagination($totalResults, $path, $sign, $this->numResults);
    }

    public function start($page = false) {

        if ($page == false) {
            isset($_GET['page']) ? $page = $_GET['page'] : $page = 1;
        }

        if ($page == '' || $page == 1 || $page == 0) {
            $start = 0;
        } else {
            $start = ($this->numResults * $page) - $this->numResults;
        }

        return $start;

    }

}