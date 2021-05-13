  
<?php $this->loadHeader(); ?>

<div class="container" align="center" style="padding-top:80px;">
    <div class="row">
        <div class="col-md-12">
        <h1>Atualizar Info</h1>
        <form method="POST">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input style="width:300px;" value="<?php echo $viewData['titulo']; ?>" name="titulo" type="text" class="form-control" id="titulo" aria-describedby="titulo" placeholder="Titulo">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Postagem</label>
                <input name="postagem" style="width:300px;" value="<?php echo $viewData['postagem']; ?>" type="text" class="form-control" id="postagem" placeholder="Postagem">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>

<style>
    .container{
        padding-bottom:5.8%;
    }
</style>

<?php $this->loadFooter(); ?>