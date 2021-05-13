<?php
class resetController extends controller {

    public function index(){
        if(isset($_POST['validate']) && !empty($_POST['validate'])){
            $validate = $_POST['validate'];

            $result = Lista::truncateDataLista();

            if($result){
                echo 0;
            }
        }else{
            header("Location: home");
        }
    }
}