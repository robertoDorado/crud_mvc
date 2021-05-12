<?php
class receberController extends controller {

    public function index(){
        $this->loadView("receber");

        $titulo = addslashes($_POST['titulo']);
        $postagem = addslashes($_POST['postagem']);

        Lista::insertDataLista($titulo, $postagem);

    }
}