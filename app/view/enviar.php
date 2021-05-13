<?php $this->loadHeader(); ?>

<div class="container" align="center" style="padding-top:80px;">
    <div class="row">
        <div class="col-md-12">
        <h1>Enviar info</h1>
        <form action="receber" method="POST">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input style="width:300px;" name="titulo" type="text" class="form-control" id="titulo" aria-describedby="titulo" placeholder="Titulo">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Postagem</label>
                <input name="postagem" style="width:300px;" type="text" class="form-control" id="postagem" placeholder="Postagem">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>

<?php $this->loadFooter(); ?>