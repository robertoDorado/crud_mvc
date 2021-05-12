<?php $this->loadHeader(); ?>

<div class="container" style="padding-top:150px;">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <h1 align="center">Atualizado com sucesso</h1>
            </div>
        </div>
    </div>
</div>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php $this->loadFooter(); ?>