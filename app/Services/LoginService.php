<?php
//This is Service file. You should write your logic in here
namespace App\Services;

use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    function handle($data, $remember)
    {
        if(Auth::attempt(['name'=>$data['name'], 'password'=>$data['password']], $remember))
        {
            return view('dashboard.index');
        }else{
            return view('main.index');
        }

        return $response;
    }
}

?>
