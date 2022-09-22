<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginPostRequest;


class LoginController extends Controller
{

    public function index()
    {
        return view("Main.login");
    }

    public function check(LoginPostRequest $request, LoginService $loginService)
    {
        $data = $request->all();
    }
}
