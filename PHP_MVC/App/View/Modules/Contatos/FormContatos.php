<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles.css">
    <title>Cadastro de Contatos</title>

    <!-- Adiciona o link para a biblioteca jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Adiciona o link para a biblioteca jQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
    <div id="container">
            <div id="header">
                <img src="/assets/logo_alphacode.png" alt="Logo logo Alphacode" id="logo">
                <legend id="cadastroc">Cadastro de Contatos</legend>
            </div>

            <div id="form-container">
                <form id="contatoForm" method="post" action="/contatos/form/save" onsubmit="return validarFormulario()">
                    <div class="form-group">
                        <input type="hidden" value="<?= $model->id ?>" name="id">
                    </div>

                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input id="nome" type="text" name="nome" value="<?= empty($model->nome) ? '' : $model->nome ?>" placeholder="Ex.: Letícia Pacheco dos Santos" required>
                    </div>

                    <div class="form-group">
                        <label for="datanasc">Data de Nascimento</label>
                        <input id="datanasc" type="date" name="datanasc" value="<?= empty($model->datanasc) ? '2003-10-03' : $model->datanasc ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" value="<?= empty($model->email) ? '' : $model->email ?>" placeholder="Ex.:leticia@gmail.com">
                    </div>

                    <div class="form-group">
                        <label for="profissao">Profissão</label>
                        <input id="profissao" type="text" name="profissao" value="<?= empty($model->profissao) ? '' : $model->profissao ?>" placeholder="Ex.:Desenvolvedora Web">
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone para contato</label>
                        <input id="telefone" type="text" name="telefone" value="<?= empty($model->telefone) ? '' : $model->telefone ?>" placeholder="Ex.:(11) 4033-2019">
                    </div>

                    <div class="form-group">
                        <label for="celular">Telefone Celular</label>
                        <input id="celular" type="text" name="celular" value="<?= empty($model->celular) ? '' : $model->celular ?>" placeholder="(11) 98493-2039">
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="whatsapp" id="whatsapp" <?php echo $model->whatsapp === 1 ? 'checked' : ($model->whatsapp === 0 ? '' : 'checked'); ?>>
                        <label for="whatsapp" id=labelwhatsapp>Número do Celular possui Whatsapp</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="enviaremail" id="enviaremail" <?php echo $model->enviaremail === 1 ? 'checked' : ($model->enviaremail === 0 ? '' : 'checked'); ?>>
                        <label for="enviaremail" id=labelenviaremail >Enviar notificação por E-mail</label>
                    </div>

                    <div class="checkbox">
                    <input type="checkbox" name="sms" id="sms" <?php echo $model->sms === 1 ? 'checked' : ($model->sms === 0 ? '' : 'checked'); ?>>
                    <label for="sms" id=labelsms>Enviar notificação por SMS</label>
                        
                    </div>
                    <div class="submit">
                        <button type="submit">Cadastrar contato</button>
                    </div>

                </form>
            </div>

        <script>
            // Adiciona a máscara usando jQuery Mask
            $(document).ready(function(){
                $('#telefone, #celular').mask('(00) 00000-0000', {reverse: false});
            });
        </script>

<script>
        $(function() {
            $("#datanasc").datepicker();
        });
        </script>
    </div>
</body>
</html>