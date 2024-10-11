<?php
namespace App\Controllers;

use App\Models\User;
class AuthenticationController{

    public function login(){
        $data = [
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];
    }
}


?>