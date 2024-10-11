<?php
namespace App\Controllers;

use App\Helpers\Views;
use App\Models\User;

class AuthenticationController{

    public function __construct()
    {
        //layout('loginMain');
    }

    public function loginPage(){
        return view('Authentication/login','login');
    }
    
    public function registerPage(){
        return view('Authentication/register','Register');
    }

    public function login(){
        $data = [
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        $user = User::attach($data);

        if($user){
            $_SESSION['auth'] = $user;
            header('location:/');
        }else{
            $_SESSION['msg'] = "Email yoki login xato";
            header('location: /login');
        }
    }

    public function logout(){
        unset($_SESSION['auth']);
        header('location: /login');
    }
}


?>