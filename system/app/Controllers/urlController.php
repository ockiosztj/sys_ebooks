<?php

namespace App\Controllers;

class urlController{
    private $page;
    private $view;
    private $action;

    public function __construct($page = null, $view = null, $action = null){
        $this->page   = (!is_null($page))  ? $page   : DEFAULT_PAGE;
        $this->view   = (!is_null($view))  ? $view   : DEFAULT_VIEW;
        $this->action = (!is_null($action))? $action : null;
    }

    public function run(){
        if(file_exists(VIEWS_URL . $this->page . DS . $this->view . END_EXTENSION)){
            require_once VIEWS_URL . $this->page . DS . $this->view . END_EXTENSION;
        }else{
            if($this->page == '404'){
                require_once VIEWS_404;
            }else{
                require_once VIEWS_NOT_FOUND;
            }
        }
    }
}