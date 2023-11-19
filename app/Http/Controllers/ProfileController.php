<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index($id)
    {

        $name = "Donald Trump";
        $age = "75";
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];


        $name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
        $setCookie = cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);

        return response($data, 200)->cookie($setCookie);
    }
}
