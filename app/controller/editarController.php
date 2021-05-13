<?php
class EditarController extends Controller{

    public function editarinfo($id){
        $arrayPostagem = Lista::selectListaData($id);
        
        if(isset($_POST['titulo'], $_POST['postagem']) && !empty($_POST['titulo'])){
            $titulo = addslashes($_POST['titulo']);
            $postagem = addslashes($_POST['postagem']);
            
            Lista::updateListaData($titulo, $postagem, $arrayPostagem['id']);
            header("Location: " . BASE_URL . "/atualizar");
        }
        $this->loadView("editar", $arrayPostagem);

    }
}