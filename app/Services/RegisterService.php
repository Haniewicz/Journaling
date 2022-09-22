<?php
//This is Service file. You should write your logic in here
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterService
{
    function handle($data)
    {
        //Function used to insert new user into database
    function handle($data)
    {
        //Inserting user into database
        $insert = User::create([
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
        ]);

        //checking if insertion was successfull
        if($insert == TRUE)
        {
            $response = true;
        }else{
            $response = false;
        }


        return $response;
    }
    }
}

?>
