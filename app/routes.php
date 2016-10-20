<?php
use App\Controllers\PageController;
use App\Controllers\TokenController;
use App\Controllers\Admin\AdminController;
use App\Controllers\Admin\DashboardController;

switch ($request->get('do')) {
	case '':
        (new PageController())->showHomepage();
		break;

    case 'dashboard':
        switch($request->get('action')) {
            case '':
                (new DashboardController())->dashboard();
                break;

            case 'login':
                (new AdminController())->login($request);
                break;

            case 'logout':
                (new AdminController())->logout();
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