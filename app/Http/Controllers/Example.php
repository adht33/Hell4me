<?php
namespace App\Http\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facade\DB;
Use Symfony\Component\HttpFoundation\Cookie;

class example extends BaseController
{
    public function ejem(Request $request)
    {
        $exampleSessionId= $request->cookie['Example-SessionId'];
        $result = ['cookie' -> $exampleSessionId];
        $response= response($result);
        if($exampleSessionId == null) {
            $cookie = new Cookie('Example-SessionId', '', time()+8);
            $response = $response->cookie($cookie);
        }
        return $response;
    }
}