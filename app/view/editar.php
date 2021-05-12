<?php $this->loadHeader(); ?>

<form action="atualizar" method="POST">
    <label for="titulo">Titulo:</label><br>
    <input name="titulo" type="text" value="<?php echo $viewData['titulo']; ?>"><br><br>
    <label for="postagem">Postagem:</label><br>
    <input type="text" name="postagem" id="postagem" value="<?php echo $viewData['postagem']; ?>"><br><br>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <button type="submit">Atualizar</button>
</form>

<?php $this->loadFooter(); ?>