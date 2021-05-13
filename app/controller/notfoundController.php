<?php
class NotFoundController extends controller{

    public function index(){
        $this->loadView("404");
    }
}