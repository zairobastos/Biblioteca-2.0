<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Aluno - ZB LIBRARY</title>

    <link rel="stylesheet" href="../emprestimo/css/emprestimo.css"><!--Folha CSS do Empréstimo-->

    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="../imagem/favicon.ico">

    <!--Fontes do Empréstimo-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body onkeyup="fechare(event)">
<!-- Include do menu -->
    <?php
        include_once "../menus/menu.php";#referente aos menu lateral e vertical
    ?>
    <!--Intruções para o preenchimento de dados do formulário-->

        <?php
            include_once "../menu2/menu2.php";#referente ao sub-menu das páginas
            include_once "../instrucoes/instrucoes.php";#instrucoes do sub-menu cadastro
        ?>
        <!--Nessa div contém o formulário para o cadastramento de um novo livro-->
        <div class="cadastro">
            <!--Título do formulário-->
            <h3>Novo Aluno</h3>
            <!--Formulário de cadastramento-->
            <form action="alunos.php" method="post">
                <h4><i class="fas fa-clipboard-list"></i> Informações Básica</h4>
                <hr>
                <div class="c1">
                    <label for="aluno">Aluno</label><br>
                    <input type="text" name="aluno" id="aluno" required placeholder="Ex:. Zairo Bastos">
                </div>
                <div class="c1">
                    <label for="curso">Curso</label><br>
                    <select name="curso" id="curso" required>
                        <option value="Administração">Administração</option>
                        <option value="Design de Interiores">Design de Interiores</option>
                        <option value="Edificações">Edificações</option>
                        <option value="Informática">Informática</option>
                        <option value="Secretáriado">Secretáriado</option>
                    </select>
                </div>
                <div class="c1">
                    <label for="matricula">Matrícula</label><br>
                    <input type="number" name="matricula" min="1" id="matricula" required placeholder="Ex:. 3879121">
                </div>
                <div class="c1">
                    <label for="">Série</label><br>
                    <div class="op">
                        <input type="radio" name="ano" id="p1" value="1º ANO" checked><label for="p1" id="l1" onclick="f1()">1º ANO</label>
                        <input type="radio" name="ano" id="p2" value="2º ANO"><label for="p2" id="l2" onclick="f2()">2º ANO</label>
                        <input type="radio" name="ano" id="p3" value="3º ANO"><label for="p3" id="l3" onclick="f3()">3º ANO</label>
                    </div>
                </div>
                <h4 class="t2"><i class="fas fa-clipboard-list"></i> Informações de Contato</h4>
                <hr>
                <div class="c1">
                    <label for="email">E-mail</label><br>
                    <input type="email" name="email" id="email" placeholder="Ex:. nome@email.com" required>
                </div>
                <div class="c1">
                    <label for="telefone">Telefone</label><br>
                    <input type="tel" name="telefone" id="telefone" required placeholder="Ex:.(99) 9 9999-9999">
                </div>
                <button type="submit" class="btn"><i class="fas fa-upload"></i> CADASTRAR ALUNO</button>
            </form>
    </section>    
</body>
</html>
<!--Adicionando texto e efeitos no subtitulos-->
    <script src="../menu2/js/adicionarclasse.js"></script>
<!--Script de inserção das instruções na página-->
    <script src="../instrucoes/js/instrucoes.js"></script>
<!--Script para mudar a cor do fundo do input rádio do formulário da esquerda básico-->
    <script src="../emprestimo/js/estilo.js"></script>
<!--coloca foco no primeiro elemento do formulário-->
    <script src="../emprestimo/js/foco.js"></script>