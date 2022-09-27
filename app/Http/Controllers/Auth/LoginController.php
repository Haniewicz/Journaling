<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\LoginPostRequest;
use App\Services\LoginService;


class LoginController extends Controller
{

    public function index()
    {
        return view("Main.login");
    }

    public function check(LoginPostRequest $request, LoginService $loginService)
    {
        $data = $request->all();

        if($request->get('remember') == true)
        {
            $remember=true;
        }else {
            $remember=false;
        }

        if($loginService->handle($data, $remember))
        {
            return redirect('/dashboard');
        }else{
            return redirect()->back();
        }
    }
}
