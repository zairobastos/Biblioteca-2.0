<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatísticas das Turmas - ZB LIBRARY</title>

    <!--folhas CSS-->
    <link rel="stylesheet" href="../acervo/css/acervo.css">

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
    <!--Intruções para o preenchimento de dados do formulário e sub-menu-->

    <?php
        include_once "../menu2/menu2.php";#referente ao sub-menu das páginas
    ?>
        <div class="descricao">
            <figure>
                <img src="image/undraw_business_plan_5i9d.svg" alt="Imagem referente a uma coleção de livros">
            </figure>
            <p>Na aba Turmas, da Estatística é possível visualizar por meio de uma listagem em ordem decrescente,
            as turmas da escola que mais leram livros durante a semana, o mês e o ano. E ao clicar em "detalhes da turma" 
            é possível visualizar o(a) aluno(a) que mais leu durante o período selecionado.
            </p>
        </div>
    </section>
</body>
</html>
<!--Adicionando texto e efeitos no subtitulos-->
<script src="../menu2/js/adicionarclasse.js"></script>