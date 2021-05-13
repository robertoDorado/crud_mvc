<?php
class HomeController extends Controller{

    public function index() {
        $arrayLista = Lista::getLista();
        
        $this->loadView('home', $arrayLista);
    }
}