<?php
class receberController extends controller {

    public function index(){
        
        if(isset($_POST['titulo'], $_POST['postagem'])){

            $titulo = addslashes($_POST['titulo']);
            $postagem = addslashes($_POST['postagem']);
            Lista::insertDataLista($titulo, $postagem);
        }
        
        $this->loadView("receber");

    }
}