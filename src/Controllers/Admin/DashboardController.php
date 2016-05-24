<?php

namespace Vortex\Controllers\Admin;

use Vortex\Controllers\BaseController;
use Symfony\Component\HttpFoundation\Session\Session;

class DashboardController extends BaseController
{
    private $session;
    protected $admin;


    public function __construct()
    {
        parent::__construct();
        $this->admin = new AdminController();
        $this->admin->isValidAdmin();
        $this->session = new Session();
    }

    public function dashboard()
    {
        $this->display('admin/dashboard.tpl');
    }

}
