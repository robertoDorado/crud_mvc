<?php
class EditarController extends Controller{

    public function index(){
        $id = $_GET['id'];
        $arrayPostagem = Lista::selectListaData($id);
        $this->loadView("editar", $arrayPostagem);
    }
}