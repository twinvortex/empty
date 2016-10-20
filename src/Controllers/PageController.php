<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;

class PageController extends BaseController
{

    public function showHomepage()
    {
        $this->display('index.tpl');
    }
}