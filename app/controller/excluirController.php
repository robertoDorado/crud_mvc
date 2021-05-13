<?php
class ExcluirController extends Controller {

    public function index(){
        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = addslashes($_POST['id']);
            $resultDelete = Lista::deleteListaData($id);

            if($resultDelete){
                echo 0;
            }
        }
    }
}