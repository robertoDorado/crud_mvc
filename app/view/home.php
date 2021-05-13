<?php $this->loadHeader(); ?>

<div id="conteudo">
<!-- Modal -->
<div id="meuModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Conteúdo do modal-->
        <div class="modal-content">

          <!-- Cabeçalho do modal -->
          <div class="modal-header">
            <h4 class="modal-title">Confirme a exclusão</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Corpo do modal -->
          <div class="modal-body">
            <p id="select--content"></p>
          </div>

          <!-- Rodapé do modal-->
          <div class="modal-footer">
            <a href="#" id="select--btn-delete" class="btn btn-danger" data-dismiss="modal">Excluir</a>
            <button data-dismiss="modal" type="button" class="btn btn-primary">Cancelar</button>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
        <div align="center" class="row">
            <div class="col-md-12">
                <h1>Olá</h1>
            </div>
        </div>
    </div>
    <table align="center" style="width:800px;border:1px solid #000;" class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">titulo</th>
                <th scope="col">postagem</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
        <?php if($viewData != array()): ?>
        <?php foreach($viewData as $data): ?>
            <tr>
                <th scope="row"><?php echo $data['id']; ?></th>
                <td><?php echo $data['titulo'] ?></td>
                <td><?php echo $data['postagem']; ?></td>
                <td><a href="<?php echo BASE_URL; ?>/editar/editarinfo/<?php echo $data['id']; ?>">Editar</a></td>
                <td><a data-toggle="modal" data-target="#meuModal" data-key="<?php echo $data["id"] ?>" id="link-excluir" href="<?php echo BASE_URL; ?>/excluir?id=<?php echo $data['id']; ?>">Excluir</a></td>
            </tr>
        </tbody>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>
    <div class="container">
        <div align="center" class="row">
            <div class="col-md-12">
                <a id="select--btn-resetar-tabela" class="btn btn-success" href="#">Resetar tabela</a>
            </div>
        </div>
    </div>
<!-- Ajax Delete -->
    <script>
        const xhr = new XMLHttpRequest;
        const formData = new FormData;

        document.querySelectorAll("#link-excluir").forEach(($linkExcluir) => {
            $linkExcluir.addEventListener('click', (e) => {
                e.preventDefault()
                
                let idExcluir = e.target.getAttribute('data-key')

                const tRow = e.target.parentNode.parentNode

                document.querySelector('#select--content').innerHTML = `Confirmar exclusão do id ${idExcluir}?`

                document.querySelector("#select--btn-delete").addEventListener('click', (e) => {
                    e.preventDefault()
                    
                    const objectId = {
                        id:idExcluir
                    }
                    
                    formData.append('id', objectId.id)
    
                    xhr.onreadystatechange = () => {
                        if(xhr.readyState == 4 && xhr.status == 200){
    
                            if(xhr.response == 0){
                                tRow.style.display = 'none'
                            }
                        }
                    }
    
                    xhr.open("POST", "excluir")
                    xhr.send(formData)
                })
                
            })
        })
    </script>
<!-- Ajax Delete -->
</div>

<!-- Ajax truncate table -->
<script>
    const xhrValidate = new XMLHttpRequest;
    const formDataValidate = new FormData;

    document.querySelector("#select--btn-resetar-tabela").addEventListener('click', (e) => {
        e.preventDefault()

        const validate = true

        formDataValidate.append('validate', validate)

        xhrValidate.onreadystatechange = () => {
            if(xhrValidate.readyState == 4 && xhrValidate.status == 200){
                
                if(xhrValidate.response == 0){
                    window.location.href = window.location.href
                }
            }
        }
        
        xhrValidate.open("POST", "reset")
        xhrValidate.send(formDataValidate)
    })
</script>
<!-- Ajax truncate table -->


<?php $this->loadFooter(); ?>