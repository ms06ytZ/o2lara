<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Request;
use Storage;

class LoginController extends Controller {

    public function index() {
        return view('admin.login');
    }

//ログイン
    public function login() {

          $exists = Storage::disk('local')->exists('userAccount.html');
        if ($exists) {
            $contents = Storage::get("userAccount.html");
        
        }
         $password =  $contents;
        
        $requestPassword = Request::input('password');
    
        if (strcmp($password, $requestPassword) == 0) {
            
            $session = Request::session();
           // dd($session);
          $session->put('name','login');
           return redirect('/admin_root');
        }

        return view('admin.login');
    }

}
