<?php

namespace Vortex\Controllers\Admin;

use Vortex\Controllers\BaseController;
use Symfony\Component\HttpFoundation\Session\Session;

class ImportGalleriesController extends BaseController
{
    private $session;
    protected $admin;
    private $request;

    public function __construct($request)
    {
        parent::__construct();
        $this->admin = new AdminController();
        $this->admin->isValidAdmin();
        $this->request = $request;
        $this->session = new Session();
    }

    public function index()
    {
        $this->import();
        $this->display('admin/import_galleries.tpl');
    }

}