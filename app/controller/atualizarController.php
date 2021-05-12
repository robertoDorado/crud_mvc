<?php
class atualizarController extends controller {

    public function index(){
        $titulo = addslashes($_POST['titulo']);
        $postagem = addslashes($_POST['postagem']);
        $id = addslashes($_POST['id']);

        Lista::updateListaData($titulo, $postagem, $id);
        $this->loadView("atualizar");
    }
}