<?php

namespace App\Controllers;

use App\System\Forms\Token;
use Symfony\Component\HttpFoundation\JsonResponse;

class TokenController {

    public function showToken()
    {
        $json = new JsonResponse();
        $token = (new Token())->generate();

        $json->setData([
            'token' => $token,
        ]);

        return $json->send();
    }

}
