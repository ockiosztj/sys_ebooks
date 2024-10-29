<?php

namespace  App\Controllers;

use App\Models\User;

class userController extends User{
    public function index(){
        self::load();
        echo 'User Controller';
    }
}