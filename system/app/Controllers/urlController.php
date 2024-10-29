<?php

namespace App\Controllers;

class urlController{
    private $page;
    private $view;
    private $action;

    public function __construct($page = null, $view = null, $action = null){
        $this->page   = (!is_null($page))  ? $page   : 'dashboard';
        $this->view   = (!is_null($view))  ? $view   : 'home';
        $this->action = (!is_null($action))? $action : null;
    }

    public function index(){
        echo 'testing url';
    }
}