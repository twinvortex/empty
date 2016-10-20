<?php

namespace App\System\Forms;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class Token {

    protected $http; // Requests
    protected $session; // Sessions

    protected $fieldName = '_token';
    protected $sessionName = 'token';

    public function __construct()
    {
        // Start a session
        $this->session = new Session();
        if(!$this->session->isStarted())
            $this->session->start();

        // Create request from globals
        $this->http = new Request();
        $this->http = Request::createFromGlobals();
    }

    public function generate()
    {
        $token = sha1(time() . $this->http->getClientIp());
        $this->session->set($this->sessionName, $token);

        return $token;
    }

    public function generateField()
    {
        $token = $this->generate();
        return '<input type="hidden" name="'.$this->fieldName.'" value="'.$token.'">';
    }

    public function isValid()
    {
        if($this->http->request->get($this->fieldName) == $this->session->get($this->sessionName))
            return true;

        return false;
    }

}
