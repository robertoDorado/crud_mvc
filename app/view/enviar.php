<?php $this->loadHeader(); ?>

<form action="receber" method="POST">
    <label for="titulo">Titulo</label><br>
    <input type="text" name="titulo" id="titulo"><br><br>
    <label for="postagem">Postagem</label><br>
    <input type="text" name="postagem" id="postagem"><br><br>
    <button type="submit">Enviar</button>
</form>

<?php $this->loadFooter(); ?>