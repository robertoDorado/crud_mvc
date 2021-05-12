<?php $this->loadHeader(); ?>
<table>
    <thead>
        <th>ID</th>
        <th>titulo</th>
        <th>postagem</th>
        <th>Editar</th>
        <th>Excluir</th>
    </thead>
    <tbody>
    <?php if($viewData != array()): ?>
    <?php foreach($viewData as $data): ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['titulo'] ?></td>
            <td><?php echo $data['postagem']; ?></td>
            <td><a href="<?php echo BASE_URL; ?>/editar?id=<?php echo $data['id']; ?>">Editar</a></td>
            <td><a data-key="<?php echo $data["id"] ?>" id="link-excluir" href="<?php echo BASE_URL; ?>/excluir?id=<?php echo $data['id']; ?>">Excluir</a></td>
        </tr>
    </tbody>
    <?php endforeach; ?>
    <?php endif; ?>
</table>

<!-- Ajax Delete -->
    <script>
        const xhr = new XMLHttpRequest;
        const formData = new FormData;

        document.querySelectorAll("#link-excluir").forEach(($linkExcluir) => {
            $linkExcluir.addEventListener('click', (e) => {
                e.preventDefault()
                
                let idExcluir = e.target.getAttribute('data-key')

                const tRow = e.target.parentNode.parentNode
                
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
    </script>
<!-- Ajax Delete -->
<?php $this->loadFooter(); ?>