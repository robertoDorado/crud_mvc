<?php
class homeController extends controller{

    public function index() {
        $arrayLista = Lista::getLista();
        
        $this->loadView('home', $arrayLista);
    }
}