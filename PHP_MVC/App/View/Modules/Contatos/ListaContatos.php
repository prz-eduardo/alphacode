<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles.css">
    <title>Contatos</title>
</head>
<body>

    <table id=tabeladados>
        <tr>
            <div>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>E-mail</th>
            <th>Profissão</th>
            <th>Celular Para contato‎ ‎ ‎ ‎ ‎ </th> 
            <th id=acoes>Ações</th>
            </div>
         </tr>
            <tr id=xk1></tr>
        <?php foreach($model->rows as $item): ?>

        

         <tr>
            <td><?= $item->nome?></td>
            <td><?= $item->datanasc?></td>
            <td><?= $item->email?></td>
            <td><?= $item->profissao?></td>
            <td><?= $item->celular?></td>
            
            <td>
                <a href="/contatos/form?id=<?= $item->id ?>"><img src="/assets/editar.png" alt="Editar"></a>
            </td>

            <td>
                <a href="/contatos/delete?id=<?= $item->id ?>" class="delete-link">
                    <img src="/assets/excluir.png" alt="Excluir">
                </a>
            </td>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var deleteLinks = document.querySelectorAll('.delete-link');

                    deleteLinks.forEach(function(link) {
                        // Verifica se já adicionou o evento de clique
                        if (!link.dataset.deleteLinkEventAdded) {
                            link.dataset.deleteLinkEventAdded = true; // Marca que o evento foi adicionado

                            link.addEventListener('click', function(event) {
                                event.preventDefault();

                                var confirmDelete = window.confirm("Deseja mesmo excluir o contato?");

                                if (confirmDelete) {
                                    // Se o usuário confirmar, redirecione para o link de exclusão
                                    window.location.href = link.href;
                                }
                            });
                        }
                    });
                });
            </script>


        </tr>
        <?php endforeach?>
        
        <?php if(count($model->rows)==0): ?>
            <tr>
                <td colspan="10">nenhum registro encontrado</td>
            </tr>
        <?php endif ?>
        
    </table>

    <footer>
    <div class="footer-content">
        <a href="Termos" id=termos >Termos</a> | <a href="Políticas" id=politicas>Políticas</a>
        <span>© Copyright 2022 | Desenvolvido por</span>
        <img src="/assets/logo_rodape_alphacode.png" alt="Logo do Rodapé" id=rodape>
        <span>© AlphaCode IT Solutions 2022</span>
    </div>
  </footer>

</body>
</html>