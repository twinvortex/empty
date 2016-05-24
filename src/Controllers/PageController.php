<?php

namespace Vortex\Controllers;

use Symfony\Component\HttpFoundation\Response;

class PageController extends BaseController {

	private $response;

	public function __construct() {
        parent::__construct();
        $this->response = new Response();
	}

    public function show404()
    {
        $this->response->setStatusCode(Response::HTTP_NOT_FOUND);
        $this->response->send(); // sending the 404 status code
        $this->display('pages/404.tpl');
    }
}