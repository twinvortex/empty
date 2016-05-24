<?php

namespace Vortex\Controllers\Admin;

use Vortex\Controllers\BaseController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AdminController extends BaseController
{
    private $session;

    public function __construct()
    {
        parent::__construct();
        $this->session = new Session();
    }

    public function login($request)
    {
        $username = $this->config->settings->admin_username;
        $password = $this->config->settings->admin_password;

        // if the user is already authenticated then simply redirect the user
        $this->authenticated();

        if($request->request->get('username') == $username && $request->request->get('password') == $password) {
            $this->auth($username, $password);
        }

        $this->display('admin/login.tpl');
    }

    protected function auth($username, $password)
    {
        $this->session->set('admin_username', sha1($username));
        $this->session->set('admin_password', sha1($password));
        $redirect = new RedirectResponse($this->config->app->dashboard);
        return $redirect->send();
    }

    protected function isAuth()
    {
        if(empty($this->session->get('admin_username')) || empty($this->session->get('admin_password')))
            return false;

        if(sha1($this->session->get('admin_username') == sha1($this->config->settings->admin_username) &&
            sha1($this->session->get('admin_password')) == sha1($this->config->settings->admin_password))) {
            return true;
        }

        return false;
    }

    protected function authenticated()
    {
        if($this->isAuth()) {
            $redirect = new RedirectResponse($this->config->app->dashboard);
            return $redirect->send();
        }
    }

    public function logout()
    {
        $this->session->clear();
        $redirect = new RedirectResponse($this->config->app->dashboard.'/login');
        return $redirect->send();
    }

    public function isValidAdmin()
    {
        if($this->isAuth()) {
            return true;
        }

        $redirect = new RedirectResponse($this->config->app->dashboard.'/logout');
        $redirect->send();
        return false;
    }

}
