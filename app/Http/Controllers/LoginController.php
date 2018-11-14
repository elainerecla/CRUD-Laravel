<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use DB; 

class LoginController extends Controller 
{
    //Login Authentication
    public function login(Request $request){
        $email = $request->input('txtEmail');
        $password = $request->input('txtPassword');

        if (DB::table('logins')->where('emailadd', $email)->orwhere('password', $password)->exists()){
            return "exist";
        }else{
            return "not exist";
        }
        

        // return $display;
    }

    public function disable($id){
        return 123;
    }
}
