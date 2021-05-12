<?php
class editarController extends controller{

    public function index(){
        $id = $_GET['id'];
        $arrayPostagem = Lista::selectListaData($id);
        $this->loadView("editar", $arrayPostagem);
    }
}