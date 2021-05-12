<?php
abstract class Lista{

    public static function getLista(){
        $pdo = Conection::conectionMethod();

        $sql = "SELECT * FROM lista";
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        }
    }

    public static function countLista(){
        $pdo = Conection::conectionMethod();
        $total = 0;
        $sql = "SELECT COUNT(*) as c FROM lista";
        $sql = $pdo->query($sql);
        $sql = $sql->fetch();
        $total = $sql['c'];
        return $total;
    }

    public static function insertDataLista($titulo, $postagem){
        $pdo = Conection::conectionMethod();
        $sql = "INSERT INTO lista (titulo, postagem) VALUES (:titulo, :postagem)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":postagem", $postagem);
        $sql->execute();

        return true;
    }

    public static function selectListaData($id){
        $pdo = Conection::conectionMethod();
        $sql = "SELECT * FROM lista WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            return $sql->fetch();
        }
    }

    public static function updateListaData($titulo, $postagem, $id){
        $pdo = Conection::conectionMethod();
        $sql = "UPDATE lista SET titulo = :titulo, postagem = :postagem WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":postagem", $postagem);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public static function deleteListaData($id){
        $pdo = Conection::conectionMethod();
        $sql = "DELETE FROM lista WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        return true;
    }
}