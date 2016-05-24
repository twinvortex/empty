<?php
use Vortex\Controllers\PageController;

switch ($request->get('do')) {
	case '':
		break;

    case 'dashboard':
        switch($request->get('action')) {
            case '':
                (new \Vortex\Controllers\Admin\DashboardController())->dashboard();
                break;

            case 'login':
                (new \Vortex\Controllers\Admin\AdminController())->login($request);
                break;

            case 'logout':
                (new \Vortex\Controllers\Admin\AdminController())->logout();
                break;

            default:
                (new PageController())->show404();
                break;
        }
    	break;

     // json output for ajax requests
    case 'show':
        switch($request->get('action')) {
            // generate a secure token for the forms.
            case 'token':
                (new TokenController())->showToken(); // output token in json
                break;
        }
        break;
	
	default:
		(new PageController())->show404();
		break;
}